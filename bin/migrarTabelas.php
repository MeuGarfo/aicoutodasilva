<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require './inc/autoload.php';

$Migration=new Basic\Migration(db());

$db='aicoutodasilva';

$pastaDasTabelas=ROOT.'table/';

if($Migration->migrateAll($pastaDasTabelas)){
  print 'migrate ok';
}else{
  print 'migrate error';
}
print PHP_EOL;
