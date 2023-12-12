<?php
//1- Use 5 String Functions from PHP Documentation [Not the same in Lecture] and understand them with implementation samples.
//Function (1)(strlen)The length of the string in bytes.
echo "Function (1)"."<br>";
$color='black';
echo strlen($color)."<br>";
echo "<hr>";
//Function (2) strrev — Reverse a string
echo "Function (2)"."<br>";
echo strrev($color)."<br>";
echo "<hr>";
//Function (3) strtolower — Make a string lowercase
echo "Function (3)"."<br>";
$name="AYA ABBAS";
echo strtolower($name)."<br>";
echo "<hr>";
echo "Function (4)"."<br>";
//Function (4) strtoupper — Make a string uppercase
$up_name="aya abbas";
echo strtoupper($up_name)."<br>";
echo "<hr>";
//Function (5) ucwords — Uppercase the first character of each word in a string
echo "Function (5)"."<br>";
$upper_name="aya abbas ahmed mohamed";
echo ucwords($upper_name)."<br>";
echo "<hr>";

//  2- Use 5 Array Functions from PHP Documentation [Not the same in Lecture] and understand them with implementation samples.

//Function (1) array_fill — Fill an array with values
echo "Function (1)"."<br>";
$arr=array_fill(2,5,"aya");
foreach ($arr as $values){
    echo $values ."<br>";
}
echo "<hr>";
//Function (2)  array_key_last — Gets the last key of an array
echo "Function (2) - array_key_last "."<br>";
$arr1=["ahmed","basma","fatma","mostafa"];
echo array_key_last($arr1)."<br>";
echo "<hr>";
//Function (3) array_sum — Calculate the sum of values in an array
echo "Function (3) - array_sum "."<br>";
$arr2=[10,50,88,0,66];
$arr3=[13.55,20.7,44.55,0.85,66.4];
echo array_sum($arr2)."<br>";
echo array_sum($arr3)."<br>";
echo "<hr>";
//Function (4) array_values — Return all the values of an array
echo "Function (4) - array_values  "."<br>";
$a=array("first"=>"hamada",
    "second"=>"hamada2",
    "third"=>"hamada3",
    );
print_r(array_values($a))."<br>";
echo "<hr>";
//Function (5) array_merge — Merge one or more arrays
$x = array("name" => "ahmed", "country"=>"egypt",2, 4);
$y = array("a", "b", "name" => "mostafa","country"=>"USA", "shape" => "sqaure", 4);
$res = array_merge($x, $y);
print_r($res);
//Function (7) array_splice — Remove a portion of the array and replace it with something else
$users = array("gamal", "sahar", "aya", "hend");
array_splice($users, 3);
var_dump($users);
echo "<hr>";

