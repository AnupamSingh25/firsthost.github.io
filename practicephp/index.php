<?php

error_reporting(0);
?>
<?php
$insert=false;
if(isset($_POST['name'])){
    $server="localhost:3307";
    $username="root";
    $password="";

    $con=mysqli_connect($server,$username,$password);
    if(!$con){
        die("connection to this database failed due to".mysqli_connect_error());
    }
    
  
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $desc=$_POST['desc'];
    $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `desc`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    //echo $sql;
    if($con->query($sql)==true){
        //echo "Successfully Inserted";
        $insert=true;
    }
    else{
       echo "ERROR:$sql<br> $con->error";
    }
    $con->close();
}
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="image.jpg" alt="college" class="bg">
   <div class="container">
       <h1>Welcome to CSJM</h1>
       <p>Enter Your Detail </p>
       <?php
       if($insert==true){
      echo "<p class='submitmsg'>Thanks for submiting Form</p>";
    }
       ?>
       <form action="index.php" method="post">
           <input type="text "name="name"id ="name" placeholder="Enter Your Name">
           <input type="text "name="age" id ="age" placeholder="Enter YourAge">
           <input type="text "name="gender" id="gender" placeholder="Enter Your Gender">
           <input type="email "name="email" id="email" placeholder="Enter Your Email">
           <input type="phone "name="phone" id="phone" placeholder="Enter Your Contact">
           <textarea name="desc" id="desc" cols="30" placeholder="Enter Your Name" rows="10">

           </textarea>
       <button class="btn">Submit</button>
       
       </form>
   </div> 
   <script src="index.js"></script>
   
</body>
</html>