
<?php session_start();
include('server.php')
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Truck availability</h2>
  </div>
  <div>

      <table id"table" border="1"
            <tr>
              <td>Truck_id</td>
              <td>availability</td>
            </tr>

            <tbody id="after_add">
              <td></td>
              <td></td>
              <td></td>
          </table>


        form method="POST" action="" name="add"">
              <fieldset>
                <h1>Scrum App!</h1>

                <label>Name</label><br>
                <input type="text" id="name" placeholder="Name" required>*<span id="name-trim"></span><br />

                <label>Email</label><br>
                <input type="text" id="email" placeholder="Email" onkeyup="email_validate(this.value);" required>*<span id="error-email"></span><br />

                <label>Phone Number</label><br>
                <input type="text" id="phonenumber" placeholder="Phone Number" onkeyup="checkPhone(this.value);" required>*<span id="error-phone"></span><br />

                <button value="Add" id="addToTable" onclick="add_update(event);" >Add</button>
            <button onclick="remove_update(event)">Remove</button>
              </fieldset>
            </form>
           </div>
      </body>
    </html>
