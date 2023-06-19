<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <form action="" method="POST">
        <h2>Registration</h2> <br>

        <label for="id">ID</label>
        <input id="id" type="text" name="ID">  <br>

        <label for="name">Name: </label>
        <input id="name" type="text" name="Name"> <br>

        <label for="email">Email: </label>
        <input id="email" type="email" name="Email"> <br>

        <label for="db">Date of Birth: </label>
        <input id="db" type="date" name="dob"> <br>

        <label for="gender">Gender</label>
        <input type="radio" name="Gender" value="male" id="male">Male
        <input type="radio" name="Gender" value="female" id="female">Female <br>

        <label for="city">City
            <select id="city" name="City">
                <option value="Select">Select</option>
                <option value="Dhaka">Dhaka</option>
                <option value="Chittagong">Chittagong</option>
                <option value="Rajshahi">Rajshahi</option>
            </select>
        </label>

        <br>

        <label for="address">Address</label>
        <textarea name="Address" id="" cols="20" rows="5"></textarea>
        <br>

        <button type="submit" name="submit">Submit</button>
        <button type="submit" name="update">Update</button>
        <button type="submit" name="delete">Delete</button>

    </form>
    <?php

    if (isset($_POST['submit'])){
        $ID = $_POST['ID'];
        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Date_of_Birth = $_POST['dob'];
        $Gender = $_POST['Gender'];
        $City = $_POST['City'];
        $Address = $_POST['Address'];

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

    if (isset($_POST['update'])){
        $ID = $_POST['ID'];
        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Date_of_Birth = $_POST['dob'];
        $Gender = $_POST['Gender'];
        $City = $_POST['City'];
        $Address = $_POST['Address'];


        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'form';


        $connect = mysqli_connect($host, $user, $pass, $dbname);
        $sql1 = "UPDATE reg SET Name ='$Name', Email = '$Email', Date_of_birth='$Date_of_Birth', Gender ='$Gender', City ='$City', Address='$Address' WHERE ID = '$ID'";

        if (mysqli_query($connect, $sql1)){
            echo 'Update Successfull';
        }else{
            echo 'Error'. mysqli_error($connect);
        }

        mysqli_close($connect);
    }
    if (isset($_POST['delete'])){
        $ID = $_POST['ID'];
        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Date_of_Birth = $_POST['dob'];
        $Gender = $_POST['Gender'];
        $City = $_POST['City'];
        $Address = $_POST['Address'];

        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'form';

        $connect = mysqli_connect($host, $user, $pass, $dbname);
        $sql2 = "DELETE FROM reg WHERE ID = '$ID'";

        if ($connect ->query($sql2) == TRUE){
            echo 'Delete Successfully';
        }else{
            echo 'Error' . $connect->error;
        }

    }

?>
</body>
</html>
