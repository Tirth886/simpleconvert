<?php

  require_once './src/Test.php';

  // Creates a new object of Test class.
  $rq = new \Test\Test();

  // Generates a random quote.
  print_r( $rq->generate() );

  echo "\n";