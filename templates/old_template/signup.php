<?php
include_once 'db_connect.php';

/* $first = $_POST['first'];
$last = $_POST['last'];
$phone = $_POST['phone'];           Old variabls for the old form
$email = $_POST['email']; */

$sql = "INSERT INTO `loveyoualatte`.`customer` (`faux`) VALUES ('faux');";

echo(date("Y-m-d H:i:s"));

if ($conn->query($sql) === true)
{
    echo "<br><br>New record created successfully";
}
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

//  mysql_query($conn, $sql);
//  header("Location: ../index.php?signup=success");

header("Location: index.php");
die();

?>