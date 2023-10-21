<?php
// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php

// Batoh Framework PHPUnit

use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "Wordcount.php";

// Class untuk run Testing.
class SimpleTest extends TestCase
{
public function testCountWords ()
{

// Kita pakai class yang mau kita test.
$Wc = new Wordcount();

// Kita masukan parameter 4 kata, yang harusnya dapat output 4
$TestSentence = "My name is Imam"; // 4 Kata.. 
$Wordcount = $Wc->countWords ($TestSentence);

// Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
$this->assertEquals (4, $Wordcount);
}
}
?>
