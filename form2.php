<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Answer-2</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="name" id="name" placeholder="Enter Name">
        <input type="submit" value="Search">
    </form>

<?php
$con = mysqli_connect('localhost','root', '');
mysqli_select_db($con, 'form');

$name = $_POST['name'];
$sql = "SELECT * FROM reg WHERE name LIKE '%$name%'";
$result = mysqli_query($con, $sql);
if ($name == "wer") {
    echo "<script>alert('name found in DB')</script>";
} else {
    echo "<script>alert('name not found')</script>";
}
echo "<script>location.href='search.php'</script>";

?>
</body>
</html>