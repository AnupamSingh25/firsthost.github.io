<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP in one video</title>
    <style>
    .a{
        margin:0px auto;
        text-align:center;
        line-height:2;
    }
    </style>
</head>
<body>
   <div class="a">
    <?php
    echo "WELCOME TO PHP TUTORIAL<br>";
    //THIS IS SINGLE LINE COMMENT
    /* THIS IS MULTIPLE LINE COMMENT
    */
    $variable1="5";
    $variable2=3;
    
   
    //PHP IS NOT A CASE SENSETIVE
    Echo "SINGH IS KING<br>";
    echo "<br>";
    //ARITHMETIC OPERATOR
    Echo "The value of variable+variable2 is :";
    echo $variable1+$variable2;
    echo "<br>";

    //Assignment Operator
    $assignment=$variable1;
    $assignment+=1;
    //$assignment-=1;
    //$assignment*=1;
    //$assignment/=1;
    echo "THE VALUE OF ASSIGNMENT IS :";
    echo $assignment;

    //COMPARISON OPERTAOR
    Echo "the value of 1==4 is :";
    echo "<br>";
    echo var_dump(1==4);
    Echo "the value of 1!=4 is :";
    echo "<br>";
    echo var_dump(1!=4);
    Echo "the value of 1>=4 is :";
    echo "<br>";
    echo var_dump(1>=4);
    Echo "the value of 1<=4 is :";
    echo "<br>";
    
    echo var_dump(1<=4);

    //UPDATION OPERATOR
    //echo $variable1++;
   // echo --$variable1;
    echo $variable1--;
    /*echo ++$variable1;*/

    //LOGICAL OPERATOR
    echo "<br>";
    //$myvar=(true)and(true);
    $myvar=(false)and(false);
    echo var_dump($myvar);
    echo "<br>";
    $myvar=(false)and(true);
    echo var_dump($myvar);
    echo "<br>";
    $myvar=(false)or(true);
    echo var_dump($myvar);
    echo "<br>";
    $myvar=(false)xor(true);
    echo var_dump($myvar);

    ?>
    <?php
    //constant define
    define('PI',3.14);
    echo "<hr>";
    echo "<br>Data Types<br>";
    $var="This is string";
    echo var_dump($var);
    echo "<br>";
    $var=5;
    echo var_dump("This is int :".$var);
    echo "<br>";
    $var=55.2;
    echo var_dump("This is float :".$var);
    echo "<br>";
    echo "<hr>";
    echo PI;
    ?>
    </div>
</body>
</html>