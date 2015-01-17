<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    $sql = "SELECT * FROM persoon";
    $result = $conn->query($sql);

?>

<?php
  //My birthdate
  $birthDate = "06/12/1997";
  //explode the date to get month, day and year
  $birthDate = explode("/", $birthDate);
  //get age from date or birthdate
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));

?>

<html>
    <head>
        <?php include 'helpFiles/header.php'; ?>
        
        <style>
            #me{
                float: right;
                width:auto;
                height:auto;
            }

        </style>
        
    </head>
    <body>
        <?php include 'helpFiles/navBar.php'; ?>
        
        <div class='container'>
            
            <div  id="home">           
                <img src="image/aggrijs.jpg" class="img-responsive hidden-xs" alt="Responsive image">
            </div>
            
            <div  id="about">
                <?php while($row = $result->fetch_assoc()) { ?>
                
                <br>
                <i class="fa fa-male fa-lg"></i> <span class="label label-default">About Me</span>
                
                <hr>
                <img class="img-responsive hidden-xs" src="image/raid.jpg" alt="Me" id="me" >
                <p>Hello, I am <?php echo $row['first_name']  ?> <?php echo $row['last_name'] ?>, <?php echo $age ?> years old and live in <?php echo $row['city'] ?>, <?php echo $row['country'] ?>.</p>
                <p>I am now a second year student, I am following a course Software Development at Roc Flevoland.</p>
                <p>At school I am mainly working with: Java, PhP, HTML and MySQL.</p>
                <br>

                <?php } ?>
            </div>

            
            <?php include 'helpFiles/footer.php'; ?>
        </div>
        
    </body>
</html>
