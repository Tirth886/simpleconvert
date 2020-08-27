<?php

    interface UTILS{
        public function exception(String $message,int $code = 400);
        public function process_xls(Object $data,$head);
        public function prepare(Object $reponse,$head,String $type);
        public function TableOpen();
        public function TableClose();
        public function download($_FILENAME);
        public function TableCols($data = '');
        public function TableHead(String $data = '');
    }


    # METHOD

    interface Convert{
        public function xls(String $filename , $download = false);
    }

?>