<?php
$con = mysqli_connect("localhost", "root", "");

mysqli_query($con, "USE IP");

$r = mysqli_query($con, "SELECT Username, Password FROM users");

while ($row = mysqli_fetch_assoc($r)) {
    echo $row["Username"] . "<br>";
    echo $row["Password"] . "<br>";
}
?>
