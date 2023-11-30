<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
</head>
<body>
<h2>Customers</h2>
        <form method="post">
    <table>
         <tr>
            <td><label>CustomerID</label></td>
            <td>
            <input type="number" name="customerid"  placeholder="Customer id">
            </td>
        </tr>

        <tr>
            <td><label>Fullname</label></td>
            <td>
            <input type="text" name="fullname"  placeholder="Full Name">
            </td>
        </tr>
        <tr>
            <td><label>Phone</label></td>
            <td>
            <input type="number" name="phone"  placeholder="Phone Number">
            </td>
        </tr>
        <tr>
            <td>
                <label>Email</label>
            </td>
            <td>
            <input type="email" name="email"  placeholder="Enter E-mail">
            </td>
        </tr>
        <tr>
            <td>
                <label>Address</label>
            </td>
            <td>
            <input type="address" name="address"  placeholder="Enter Address">
            </td>
        </tr>
       
        <tr>
            <td>
               
            </td>
            <td>
            <input type="submit" name="submit" value="submit" >
            </td>
        </tr>
    </table>

    <!---Connecting to databse--->
    <?php
    $server = "localhost";
    $uuser ="root";
    $puser ="";
    $dbname ="silverplatterventures";

    $connect = mysqli_connect($server, $uuser,$puser,$dbname);
?>

<!--- connecting to database--->


<?php
if(isset($_POST['submit'])){
    $customerid = $_POST['customerid'];
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $sql = "INSERT INTO customer (`customerid`,`fullname`, `phone`, `email`, `address`)
    VALUES ('$customerid,'$fullname','$phone','$email','$address')";

    $result = mysqli_query($connect, $sql);

}
?>
</form>
</body>
</html>