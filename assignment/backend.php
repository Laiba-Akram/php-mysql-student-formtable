<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "cit";
// Create connection
$connection = mysqli_connect($servername, $username, $password, $db);
if(!$connection){
    die("Connection failed" . mysqli_connect_error());
}
$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO `cit`.`students` (`id`, `name`, `email`) VALUES (NULL, '$name', '$email');";
if($connection->query($sql)==true){
    echo "Successfully inserted";
} else {
    echo "Error: $sql <br> $connection->error";
}
$connection->close();
?>
<?php header('Location:form.php'); ?>