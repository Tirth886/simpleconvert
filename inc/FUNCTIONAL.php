<?php

    
    class FUNCTIONAL extends Rejection implements UTILS{
        protected $TABLE_HEAD;
        protected $TABLE_BODY;
        protected $TABLE;
        
        public function download($_FILENAME,$TABLE_){
            echo $TABLE_;
            
        }
        public function exception(String $message, int $code = 400){
            return new Rejection($message, $code);
        }
     
        public function TableClose(){
            return "
                </table>
            ";
        }

        public function TableOpen($style = null){
            return "
                <table border=1 style='color : green;'>
            ";
        }
        
        public function TableCols($data = ''){
            return "<td>{$data}</td>";
        }
        public function TableHead(String $data = ''){
            return "<th>{$data}</th>";
        }
        public function process_xls(Object $data,$head,Bool $download,String $_FILENAME){
            $this->TABLE = $this->TableOpen();
            $this->TABLE .= "<thead><tr>";
            $this->TABLE_HEAD = $head;
            foreach($this->TABLE_HEAD as $head_){
                $this->TABLE .= $this->TableHead($head_);
            }
            while($response = $data->fetch_assoc()){
                $this->TABLE_BODY[] = $response;
            }
            $this->TABLE .= "</tr></thead>";
            $this->TABLE .= "<tbody>";
            foreach($this->TABLE_BODY as $body){
                $this->TABLE .= "<tr>";    
                foreach($this->TABLE_HEAD as $head){
                    $this->TABLE .= $this->TableCols($body[$head]);
                }                    
                $this->TABLE .= "</tr>";
            }
            $this->TABLE .= "</tbody>";
            $this->TABLE .= $this->TableClose();
            if ($download) {
                echo $this->TABLE;
                header("Content-Type: application/vnd.ms-excel;charset=utf8");
                header("Content-Disposition: attachment; filename=\"{$_FILENAME}\"");
            }else{
                echo $this->TABLE;                
            }
        }
        
        public function prepare(Object $reponse,$head,String $type,Bool $download = false,String $_FILENAME){
            if (is_object($reponse)) {
                switch ($type) {
                    case 'xls':
                        return $this->process_xls($reponse,$head,$download,$_FILENAME);
                    break;
                    
                    default:
                        break;
                }

            }else{
                throw $this->exception("Must Be Object");
            }
        }
    }
?>