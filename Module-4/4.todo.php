<?php

$mark = 60;

switch(true){
    case($mark >=80 && $mark <= 100):
        echo"A+";
        break;

        case($mark >=70 && $mark <= 80):
            echo"A";
            break;

            case($mark >=60 && $mark <= 70):
                echo"B";
                break;

                case($mark >= 50 && $mark <= 60);
                echo"C";
                break;

                    case($mark >= 40 && $mark <= 50);
                    echo"D";
                     break;
                     
                     default:
                     echo"fail";

}