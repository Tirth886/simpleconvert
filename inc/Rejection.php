<?php 

    class Rejection extends Exception{
        private $code_   = 0;
        private $message_ = '';
        protected function __construct(String $message ,int $code = 400) {
            if (is_int($code)) {
                $this->code_    = $code;
            }
            if (is_string($message)) {
                $this->message_ = $message;
            }
        }

        public function __toString() {
            return __CLASS__ . ": [{$this->code_}]: {$this->message_}\n";
        }
    }
?>