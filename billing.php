<?php include ('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
    <link rel="stylesheet" href="billing.css">
    <title>Document</title>
</head>
<body>
    <?php
    $pickupaddress = $_SESSION['address'];
    $pick_up_time = $_SESSION['pick_up_time'];
    $drop_time = $_SESSION['drop_time'];
    $trucknumber = $_SESSION['vehicle_id'];
    $truck_type = $_SESSION['choosen_truck'];
    $totalamount = $_SESSION['price_of_order'];
    $driver_name = $_SESSION['driver_name'];
    $driver_number = $_SESSION['driver_number'];

    ?>
<div>
<div class="main_container">
<h1>Your transaction has been completed<h1>
<div style="height:550px" class="order_details">
<h2 style="font-size:22px;padding:10px 0 0 10px">Order Details : </h2>
<div class="description">
<p style="">Pick up address : <span><?php echo $pickupaddress?></span></p>
<p>   Pick up time : <span><?php echo $pick_up_time?></span></p>
<p>      Drop time : <span><?php echo $drop_time?></span></p>
<p>   Truck number : <span><?php echo $trucknumber?></span></p>
<p>     Truck type : <span><?php echo $truck_type?></span></p>
<p>     Driver name : <span><?php echo $driver_name?></span></p>
<p>    Driver number : <span><?php echo $driver_number?></span></p>
<p>   Total Amount : <span><?php echo $totalamount?></span></p>
</div>
<div  class="button_group">
    <form method="post" action="billing.php">
    <button style="margin-bottom:30px;" name="goTohome" style="margin-right:10px" class="btn btn-success">Go to home</button>
   <button style="margin-bottom:30px;" name="printInvoice" class="btn btn-success">Print Invoice</button>
    </form>

</div>
</div>
</body>
</html>
