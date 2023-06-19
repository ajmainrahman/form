    if (isset($_POST['update'])) {
        $ID = $_POST['ID'];
        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Contact = $_POST['Contact'];
        $CGPA = $_POST['CGPA'];
        $Major = $_POST['Major'];
        $University = $_POST['University'];
        $Country = $_POST['Country'];

        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'scholarship';

        $connect = mysqli_connect($host, $user, $pass, $dbname);

        // Prepare the SQL statement using prepared statements to prevent SQL injection
        $sql = "UPDATE info SET Name = ?, Email = ?, Contact = ?, CGPA = ?, Major = ?, University = ?, Country = ? WHERE ID = ?";
        $stmt = mysqli_prepare($connect, $sql);
        mysqli_stmt_bind_param($stmt, "sssdsssi", $Name, $Email, $Contact, $CGPA, $Major, $University, $Country, $ID);

        if (mysqli_stmt_execute($stmt)) {
            echo 'Record updated successfully';
        } else {
            echo 'Error updating record: ' . mysqli_error($connect);
        }

        mysqli_stmt_close($stmt);
        mysqli_close($connect);
    }

    if (isset($_POST['view'])) {
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'scholarship';

        $connect = mysqli_connect($host, $user, $pass, $dbname);

        // Retrieve all records from the "info" table
        $sql = "SELECT * FROM info";
        $result = mysqli_query($connect, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "ID: " . $row['ID'] . "<br>";
                echo "Name: " . $row['Name'] . "<br>";
                echo "Email: " . $row['Email'] . "<br>";
                echo "Contact: " . $row['Contact'] . "<br>";
                echo "CGPA: " . $row['CGPA'] . "<br>";
                echo "Major: " . $row['Major'] . "<br>";
                echo "University: " . $row['University'] . "<br>";
                echo "Country: " . $row['Country'] . "<br>";
                echo "----------------------<br>";
            }

        mysqli_close($connect);
    }

    if (isset($_POST['delete'])) {
        $ID = $_POST['ID'];

        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'scholarship';

        $connect = mysqli_connect($host, $user, $pass, $dbname);

        $sql = "DELETE FROM info WHERE ID = ?";
        $stmt = mysqli_prepare($connect, $sql);
        mysqli_stmt_bind_param($stmt, "i", $ID);

        if (mysqli_stmt_execute($stmt)) {
            echo 'Record deleted successfully';
        } else {
            echo 'Error deleting record: ' . mysqli_error($connect);
        }
        mysqli_stmt_close($stmt);
        mysqli_close($connect);
    }
?>

<!DOCTYPE html> 
<html lang="en"> 
  <head> 
    <meta charset="UTF-8" /> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
    <title>Form</title> 
  </head> 
  <body> 
    <form action="#" method ="POST"> 
        Name: <input type="text" name = "name"/> 
      <P>email:  
      <input type="email" name = "email"/></P> 
      <P>Mobile:  
      <input type="number" name = "mobile" /></P> 
      <P>City:  
      <input type="text" name= "city"/></P> 
      <input type = "submit" value = "submit "name = "submit"> 
      <P>SL (for update): 
        <input type="text" name= "SLup"/></P> 
      <input type = "submit" value = "update "name = "update"> 
      <P>SL (for Delete): 
        <input type="text" name= "SLdl"/></P> 
      <input type = "submit" value = "delete "name = "delete"> 
    </form> 
  </body> 
</html> 
 
<?php 
if(isset($_POST['submit'])){ 
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $mobile = $_POST['mobile']; 
    $city = $_POST['city']; 
 
    $host = 'localhost'; 
    $user = 'root'; 
    $pass = ''; 
    $dbname = 'student'; 
 
    $conn = mysqli_connect($host,$user, $pass, $dbname); 
    $sql = "INSERT INTO studentdb (name, email, mobile, city) values('$name', '$email', '$mobile','$city')"; 
    mysqli_query($conn,$sql); 
    echo "<br>Record Successfuly" ; 
} 
 
if(isset($_POST['update'])){ 
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $mobile = $_POST['mobile']; 
    $city = $_POST['city']; 
    $SLnum = $_POST['SLup']; 
 
    $host = 'localhost'; 
    $user = 'root'; 
    $pass = ''; 
    $dbname = 'student'; 
 
    $conn = mysqli_connect($host,$user, $pass, $dbname); 
    $sql = "UPDATE studentdb SET name = '$name', email = '$email', mobile = '$mobile', city = '$city' WHERE SL = '$SLnum'"; 
    mysqli_query($conn,$sql); 
    echo "<br>Record Updated Successfuly!" ; 
} 
 
if(isset($_POST['delete'])){ 
  $SLnumDl = $_POST['SLdl']; 
 
  $host = 'localhost'; 
  $user = 'root'; 
  $pass = ''; 
  $dbname = 'student'; 
  $conn = mysqli_connect($host,$user, $pass, $dbname); 
  $sql = "DELETE FROM studentdb WHERE SL = '$SLnumDl'"; 
  if ($conn ->query($sql) === TRUE) { 
      echo "<br>Record delete successfully"; 
  } 
  else{ 
      echo "<br>Error deleting record: ". $conn->error; 
  } 
} 
?>