<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 13px 13px;
  margin: 20px 0px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 13px 13px;
  margin: 20px 0px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
h3{
  margin-top: 50px;
  text-align: center;
  font-size: 50px;

}
div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 50px;
  margin:  50px 450px;
}
</style>
<body>

<h3>LOGIN</h3>

<div>
  <form action="/action_page.php">

    <input type="text" id="user_ID" name="user_ID" placeholder="user_ID">


    <input type="text" id="password" name="password" placeholder="password">

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
