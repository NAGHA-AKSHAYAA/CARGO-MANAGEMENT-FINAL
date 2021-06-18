<?php include ('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="stylefororder.css">
 </head>
<body>
  <div class="header">
  	<h2>Truck availability</h2>
  </div>
  <?php $timeslot = $_SESSION['timeslot'];
 ?>
  <form method="post" action="truckavailability.php" class="availablityform">
  	<?php include ('error.php'); ?>
    <div class="input-group">
      <label>Truck availability slot :</label>
      <select name="available_time" id="available_time">
        <option></option>
        <?php foreach($timeslot as $time){
      echo "<option value = '$time[0]  $time[1]'>$time[0]  $time[1]</option>";
  }
  ?>
      </select>
    </div>
    <div class="input-group">
      <label>Enter drop time :</label>
      <input type='time' name="drop_time">
    </div>
    <div class="input-group">
      <label>Enter the pickup address :</label>
      <textarea name="location_address" rows="10" cols="45"></textarea>
    </div>
    <div class="input-group">
      <label>Enter the drop address :</label>
      <textarea name="drop_address" rows="10" cols="45"></textarea>
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="check_price">CHECK PRICE</button>
    </div>
  </form>
</body>
