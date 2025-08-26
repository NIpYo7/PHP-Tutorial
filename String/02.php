<?php 

echo strlen("Hello world!");//12

echo "<br>";

echo str_word_count("Hello world!"); //2

echo "<br>";   

echo strpos("Hello world!", "world");

/*H e l l o   w o r l d  !
  0 1 2 3 4 5  6 7 8 9 10 11 */

echo "<br>";

if (strpos("Hello world!", "Hello") === 0) {
    echo "Found at beginning!";
}







?>