<?php include "connect.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">    
<?php include "includes/header.php";?>
    <title>Customer</title>
    <style>
       <?php include "css/style.css"?>
    </style>
</head>
<body>
    <div class="info">
        <h1> Customer </h1>
    <form>
    <div class="buttons">
    <a href="index.php">Home</a>
    </div>
    </form>
    <div class="info_1">
        <table>
            <thead>
            <tr>
                <th> Customer </th>
                <th> Phone No </th>
                <th> Email </th>
            </tr>
</thead>
<tbody>
<?php 
             $query = "select * from `task`";
             $result = mysqli_query($conn,$query);
             if($result){
                    while($row=mysqli_fetch_assoc($result))
                    {
                     $customer = $row['customer'];
                     $phone = $row['phone'];
                     $email = $row['email'];
                     echo '<tr>
                     <td>'.$customer.'</td>
                     <td>'.$phone.'</td>
                     <td>'.$email.'</td>
                     </tr>';
                    } 
             }

            ?>
</tbody>
        </table>
    </div>
    <div class="footer">
        <p> All Rights Reserved (C) 2021 Amrutha Website </p>
    </div>
    <?php include "includes/footer.php";?>
</body>
</html>