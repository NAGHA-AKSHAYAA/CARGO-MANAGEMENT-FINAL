<?php include ('server.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FARE CHARGES</title>
  </head>
  <body>
  <?php $pt = $_SESSION['pickuptime'] ?>
  <?php $dt = $_SESSION['droptime'] ?>
<?php
echo($pt);
echo($dt);
?>
      <button method="post" type="submit" class="btn" name="confirm_booking">MAKE PAYMENT</button>
  </body>
</html>
