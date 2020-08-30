<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
    <style>
    .a{
        margin:0px auto;
        text-align:center;
        line-height:2;
        max-width:80%;
        background-color:aqua;
        font-size:20px;
    }
    h1{
        text-align:center;
        color:magenta; 
    }
    </style>
</head>
<body>
  <div class="a">
  <?php
  //Condition
  Echo "<h1> THIS IS CONDITION PART LIKE AS if ,if-else etc.</h2>";

  $age=34;
  if($age<18){
      echo "You are not eligible for voting";
  }
  else{
    echo "You are  eligible for voting";
  }
  echo "<hr>";
  //loop
  $languages=array("C","C++","PYTHON");
  //echo $languages[0];
  echo "<br>";
  //echo count($languages);//number of item
   //loops in php
 
  for($z=0;$z<=10;$z++)
 
  echo ($z."   IS VALUE OF Z :<br>");
 //for each
foreach ($languages as  $value) {
    echo ($value."   IS VALUE OF Z :<br>");
}
echo "<hr>";
function singh(){
    echo "ram";
}
singh();
  ?>
 
  
  </div>  
</body>
</html>