<?php

$text = "This is a boy & he wears a hat . ";
$string_count = str_word_count($text,1,'.&') ;
print_r ($string_count.'<br>');

$str_shuffled = str_shuffle($text);
echo $str_shuffled.'<br>';
$str_sub_shuffled = substr($str_shuffled,0,5);
$index = strpos($text,'a');
echo "$str_sub_shuffled <br>";
?> 