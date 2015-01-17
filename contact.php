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

    $sql = "SELECT * FROM persoon INNER JOIN contact";
    $result = $conn->query($sql);

?>

<html>
    <head>
        <?php include 'helpFiles/header.php'; ?>
    </head>
    <body>
        <?php include 'helpFiles/navBar.php'; ?>
        
        <div class='container'>
            
            <br>
            <ul class="list-group">
                <li class="list-group-item">
                    <p>Social Media:</p>
                    <br>
                    <form>
                    <button><a href="https://twitter.com/RaiddB" target="_blank"/> <i class="fa fa-twitter"></i> Twitter</a></button>
                    <p> </p>
                    <button><a href="https://www.facebook.com/raid.hoeftniet" target="_blank"/> <i class="fa fa-facebook-square"></i> Facebook</a></button>
                    </form>
                </li>

            </ul>
            <hr>
            
            <?php include 'helpFiles/footer.php'; ?>
        </div>
        
    </body>
</html>
