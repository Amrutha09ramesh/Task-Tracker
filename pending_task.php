<?php include "connect.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">    
<?php include "includes/header.php";?>
    <title>Task Tracker</title>
    <style>
        <?php include "css/Style.css"?>
    </style>
</head>
<body>
    <div class="info">
        <h1> Pending Task </h1>
    <form>
    <div class="buttons">
    <a href="index.php">Home</a>
    </div>
    </form>
    <div class="info_1">
        <table>
            <thead>
            <tr>
                <th> Date </th>
                <th> Name </th>
                <th> Visit Time </th>
                <th> Status </th>
                <th> Phone </th>
               
            </tr>
            </thead>
            <tbody>
            <?php 
             $query = "select * from `task` where status='pending'";
             $result = mysqli_query($conn,$query);
             if($result){
                    while($row=mysqli_fetch_assoc($result))
                    {
                     $date = $row['date'];
                     $name = $row['name'];
                     $visit = $row['visit'];
                     $status = $row['status'];
                     $phone = $row['phone'];
                    
                     echo '<tr>
                     <td >'.$date.'</td>
                     <td>'.$name.'</td>
                     <td>'.$visit.'</td>
                     <td>'.$status.'</td>
                     <td>'.$phone.'</td>
                     
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
