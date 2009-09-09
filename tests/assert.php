<?php
function assertEquals($value, $value2) {
  if ($value == $value2) {
    echo "PASS\n";
  } else {
    echo "FAIL\n ";
    var_dump($value, $value2);
  }
}


function assertTrue($value) {
  if ($value) {
    echo "PASS\n";
  } else {
    echo "FAIL\n";
    var_dump($value);
  }
}


function assertFalse($value) {
  if (!$value) {
    echo "PASS\n";
  } else {
    echo "FAIL\n";
    var_dump($value);
  }
}
