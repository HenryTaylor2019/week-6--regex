<?php


// $result = preg_match("/[a-z]/", "abcde123") === 1; <-- Turns statement to a boolean

// var_dump($result); //Will dump 'true' 

// ^ <-- starts with
// $ <-- ends with 
// ? <-- 0 or 1
// * <-- 0 or more 
// + <-- 1 or more
// - <-- range (between)

$result = [];
$rows = preg_split("/\n+/", "blah \n", "blah \n");

var_dump($result);