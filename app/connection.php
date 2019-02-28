<?php
$conn = mysqli_connect("localhost", "root", "ivh!@#care","ivh_senior");
//$conn = mysqli_connect("localhost", "root", "","ivh_senior");
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
