<?php

    interface UTILS{
        public function exception(String $message,int $code = 400);
        // public function head(Object $reponse);
        public function process_xls(Object $data,Bool $download,String $_FILENAME);
        public function prepare(Object $reponse,String $type,Bool $download = false,String $_FILENAME);
        public function TableOpen();
        public function TableClose();
        public function download($_FILENAME,$TABLE_);
        public function TableCols($data = '');
        public function TableHead(String $data = '');
    }


    # METHOD

    interface Convert{
        public function xls($filename = '', $download = false);
    }

?>