<?php 
    namespace Test;
    class Test{

        public function getRandomQuotes() {
            $quotes = file_get_contents( __DIR__ . '/../inc/quotes.json' );
            $quotes = json_decode( $quotes, true );
            $index = mt_rand( 0, count( $quotes ) );
            return $quotes[ $index ];
      
        }
        public function generate() {
            return $this->getRandomQuotes();
        } 

    }

?>