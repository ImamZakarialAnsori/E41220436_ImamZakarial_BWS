<?php

// File: WordCount.php class Wordcount
class WordCount
{
public function countWords ($sentence)
{
    //Explode adalah sebuah fungsi pemisah string ke dalam bentuk array
    //Count adalah fungsi untuk menghitung indeks array
return count(explode(" ",$sentence));
    // Parameter string akan dipecah dulu dengan fungsi explode dan dimasukkan kedalam fungsi count untuk dihitung indeks array
}
}
?>