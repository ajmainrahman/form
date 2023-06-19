<!DOCTYPE html>
<html lang="en">

<head>
    <title>Search</title>
</head>

<body>
    <form action="search2.php" method="POST">
        <input type="text" name="name" id="name" placeholder="Enter Name">
        <input type="submit" value="Search">
    </form>
</body>
</html>
<?php

$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'labfinal');

$name = $_POST['name'];
$sql = "SELECT * FROM regis WHERE name LIKE '%$name%'";
$result = mysqli_query($con, $sql);
if ($name == "Rashed") {
    echo "<script>alert('name found in DB')</script>";
} else {
    echo "<script>alert('name not found')</script>";
}
echo "<script>location.href='search.php'</script>";

?>