<?php

// if statement
// if else statement
// if else if statement
// nested if statement

// if statement syntax

// if(condition){
//     code executed
// }

// $n = 10 ;

// if($n >5){
//     echo "Value is True";
// }
// if else statement syntax

// if(condition){
//     code executed condition true
// }else{
//     code executed condition false
// }

// $n = 11;

// if($n == 10){
//   echo "Number is equal To 10";  
// }
// else{
//     echo "Number is Not Equal to 10";
// }


// $day = "monday";

// if($day == "Sunday"){
//     echo "Today Is Holiday";
// }
// else{
//     echo "Today is Collage";
// }
// if else if statement syntax

// if(condtion1){
//     code executed condition1 true
// }
// elseif(condition2){
//     code executed condition2 true
// }
// elseif(condition3){
//     code executed condition3 true
// }
// else{
//     code executed given all conditions are false
// }

// $marks = 42;

// if($marks <33){
//     echo "fail";
// }
// elseif($marks >=34 && $marks < 50){
//     echo "Third Division";
// }
// elseif($marks >=50 && $marks<70){
//     echo "Second Division";
// }
// elseif($marks >=70 && $marks <90){
//     echo "First Division";
// }
// elseif($marks >=90 && $marks <100){
//     echo "Top";
// }
// else{
//     echo "Marks is Invalide";
// }

// nested if statement

// if(condition){
    
//     if(condition){

//     }
// }

$nationality = "Indian";
$age = 15;

if($nationality == "Indian"){

    if($age >=18){
        echo "He/She is Eligible to vote";
    }else{
        echo "He/She is not Eligible to vote";
    }
}







?>