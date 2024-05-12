<?php

$array = new SplDoublyLinkedList();

for ($i = 0; $i < 32769; $i++) {
  // $array->push($i);
  $array->add(0, $i);
}

var_dump(memory_get_usage()/ 1024 / 1024);