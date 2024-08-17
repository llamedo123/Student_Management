<?php
    $host = "localhost";
    $username = "root";
    $password = "Desk!23$";
    $database = "system_student";

    $con = new mysqli($host, $username, $password, $database);

    if($con -> connect_error){
        echo $con->connect_error;
    }

    $sql = "SELECT * FROM student_list";
    $students = $con->query($sql) or die($con->connect_error);
    $row = $students->fetch_assoc();

    // do{
    //     echo $row['first_name']." ".$row['first_name']. "<br>";
    // }while($row = $students->fetch_assoc());
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student System Management</title>
</head>
<body>
    <h1>Student Management System</h1><br>
    <table>
        <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
        </thead>
        <tbody>
            <?php do{ ?>
        <tr>
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['last_name']; ?></td>
        </tr>
            <?php }while($row = $students->fetch_assoc()); ?>
        </tbody>
    </table>
</body>
</html>