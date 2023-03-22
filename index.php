<?php 
/**
 * Entry Point Basic App
 */
use Transcendent\Support\DummyQueryBuilder;
include_once 'Transcendent/application.php';
 //-----------------------------------------

 /**
  * App Example #1
  */
 $app = new DummyQueryBuilder;
 echo $app->runSuccess();

 /**
  * App Example #2
  */
  $getData = $app::filterAge(22)->filterAge(40)->get();
  var_dump($getData);