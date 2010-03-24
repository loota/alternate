<?php
require_once "assert.php";
require_once "../src/share/config.php";
$pathinfo = pathinfo(__FILE__);
$thisDirectory = $pathinfo['dirname'];

#$alternation = shell_exec('php ../src/php/alternate --alternateDirectory=' .
  #$thisDirectory . ' --alternateFile=testConfig.conf one');
#assertEquals($alternation, 'two');

#$alternation = shell_exec('php ../src/php/alternate --alternateDirectory=' .
  #$thisDirectory . ' --alternateFile=testConfig.conf four');
#assertEquals($alternation, 'one');

$alternation = shell_exec('php ../src/php/alternate --alternateDirectory=' .
  $thisDirectory . ' --alternateFile=testConfig.conf if\(foobar\)');
assertEquals($alternation, 'switch(foobar)');
