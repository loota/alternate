#!/usr/bin/php
<?php
require_once "assert.php";


// Adding and getting
shell_exec('~/project/alternate/src/alternate -a Foo Bar Bar,Baz');
$alternation = shell_exec('~/project/alternate/src/alternate Bar');
assertEquals($alternation, 'Baz');
$alternation = shell_exec('~/project/alternate/src/alternate Baz');
assertEquals($alternation, 'Bar');

shell_exec('~/project/alternate/src/alternate -r Foo');
$alternation =  shell_exec('~/project/alternate/src/alternate Baz');
assertEquals($alternation, '');


// Multiple removal
shell_exec('~/project/alternate/src/alternate -a Foo Bar Bar,Baz');
shell_exec('~/project/alternate/src/alternate -a Bar Bar Bar,Baz');
shell_exec('~/project/alternate/src/alternate -a Baz Bar Bar,Baz');

shell_exec('~/project/alternate/src/alternate -r Foo Bar Baz');

$alternation = shell_exec('~/project/alternate/src/alternate Bar');
assertEquals($alternation, '');


// Complex structure
shell_exec('~/project/alternate/src/alternate -a Foo Bar "Foo Bar,Bar Baz, Barbarian"');
$alternation = shell_exec('~/project/alternate/src/alternate "Foo Bar" 1,5');
assertEquals($alternation, 'Bar Baz');

shell_exec('~/project/alternate/src/alternate -r Foo');


// TODO Tests for structures with line breaks
die;
$alternation = shell_exec("~/project/alternate/src/alternate if '    if (" . '$value' . " == 1) {\n      echo '\''foo'\'';\n    } else if (" . '$value' . " == 2) {\n      echo '\''bar'\'';\n    } else {\n      echo '\''baz'\'';\n    }'");
assertEquals($alternation, 'switch ($value) {' . "
  case '1':
        echo 'foo';
    break;
  case '2':
        echo 'bar';
    break;
  default:
        echo 'baz';
    break;");
