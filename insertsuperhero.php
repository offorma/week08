<?php
/**
 * Created by PhpStorm.
 * User: 1514414
 * Date: 22/03/2016
 * Time: 09:50
 */
define(SERVER, "ap-cdbr-azure-east-c.cloudapp.net");
define(USERNAME, "bccb84f33826f0");
define(PASSWORD, "7b0e4bef");
define(DB, "Nonso1514414");

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$mainsuperpower = $_POST['mainsuperpower'];

$conn = mysqli_connect(SERVER, USERNAME,PASSWORD,DB);

$sql ="INSERT INTO  superheros ('firstname','lastname','mainsuperpower')
        VALUES ($firstname, $lastname, $mainsuperpower)";

$result = mysqli_query($conn,$sql);
mysqli_close($conn);