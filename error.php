<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <form action="" method="POST">
        <h2>Registration Form</h2> <br>

        <label for="id">ID</label>
        <input id="id" type="text" name="id">  <br>

        <label for="name">Name: </label>
        <input id="name" type="text" name="name"> <br>

        <label for="email">Email: </label>
        <input id="email" type="email" name="email"> <br>

        <label for="">Date of Birth: </label>
        <input id="db" type="date" name="dob"> <br>

        <label for="gender">Gender</label>
        <input type="radio" name="gender" value="male" id="male">Male
        <input type="radio" name="gender" value="female" id="female">Female <br>

        <label for="city">City</label>
        <input type="text" list="city" placeholder="Select" name="city">
        <datalist id="city">
            <option value="Dhaka">Dhaka</option>
            <option value="Chittagong">Chittagong</option>
            <option value="Rajshahi">Rajshahi</option>
        </datalist>

        <br>

        <label for="address">Address</label>
        <textarea name="address" id="" cols="20" rows="5"></textarea>
        <br>

        <button type="submit" name="submit">Save</button>
        <button type="submit" name="update">Update</button>

    </form>
    <?php

    if (isset($_POST['submit'])){
        $ID = $_POST['id'];
        $Name = $_POST['name'];
        $Email = $_POST['email'];
        $Date_of_Birth = $_POST['dob'];
        $Gender = $_POST['gender'];
        $City = $_POST['city'];
        $Address = $_POST['address'];

        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'form';  //Database name

        $connect = mysqli_connect($host, $user, $pass, $dbname);
        $sql = "INSERT INTO reg (ID, Name, Email, Date_of_Birth, Gender, City, Address) VALUES ('$ID','$Name','$Email','$Date_of_Birth','$Gender','$City','$Address')";

        if (mysqli_query($connect, $sql)){
            echo 'Record Inserted';
        } else {
            echo 'Error: ' . mysqli_error($connect);
        }

        mysqli_close($connect);
    }

    ?>
</body>
</html>