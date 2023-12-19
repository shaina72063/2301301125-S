<!--<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-color: white;
  font-family : Arial, sans-serif;
  background-image: url(...\assets\image\businessPlan-amico.png);
}

h1 {
  color: #333;
  text-align: center;  
}

.login-box {
  width: 320px;
  padding: 20px;
  background-color: rgb(5,68,104);
  margin: 80px auto;
  border: 1px solid #ccc;
  box-shadow: 2px 2px 10px rgba(0,0,0,0.1);

}

input[type="text"], input[type="email"], input[type="password"] {
  width: 100%;
  padding: 10px;
  margin: 10px 0; 
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: green;
  color: blue;
  padding: 10px 20px;
  margin: 10px 0;
  border: none;
  cursor: pointer;
  width: 100%;  
}

button:hover {
  background-color: #45a049;
}
</style>  
</head>

<body style=" background-image:url(...\assets\image\businessPlan-amico.png);">


<div class="login-box">
  <h2 style="color:white;">login</h2>
  
  <form>
    
    <label for="username"style="color:white;">Username</label>
    <input type="text" id="username" name="username" placeholder="name"required>
    
    <label for="email" style="color:white;">Email-id</label>
    <input type="email" id="email" name="email" placeholder=" email" required>

    <label for="password"style="color:white;">Password</label>
    <input type="password" id="password" name="password" placeholder="......" required>
    
    
<button type="submit"><a href="..\admin\dashboard.php" >login</a></button>
  </form>
</div>

</body>
</html>-->
<?php
include("header.php");
?>
<h2>login</h2>
<form method='POST'action='category.php'enctype="multipart/form-date">
    <input type='text'name="username">
    <input type='password'name="pwd">
    <input type='file'name="profileimage">
    <input type='submit'>
</form>
<?php
include("footer.php");
?>