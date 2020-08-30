<?php
$s="singh is king";
echo "length of string is :".strlen($s);
echo "<br>";
echo "Word of string is :".str_word_count($s);
echo "<br>";
echo "reverseof string is :".strrev($s);
echo "<br>";
echo "search of string is :".strpos($s,"is");
echo "<br>";
echo "search of string is :".str_replace($s,"is","are");
?>