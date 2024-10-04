<?php
//else if

$mark="90";

if($mark >= 80 && $mark <= 100){
    echo"You get A+";
}
else if($mark >= 70 && $mark <= 80){
    echo"You get A";
}
else if($mark >= 60 && $mark <= 70){
    echo"You get B";
}
else if($mark >= 50 && $mark <= 60){
    echo"You get C";
}
else if($mark <= 40 && $mark >= 50){
    echo"You get D";
}
else{
    echo"Failed";
};