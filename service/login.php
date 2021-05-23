<!DOCTYPE html>
<html class="menu">
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content=="IE=edge"/>
<meta name="google" value="notranslate"/>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="css/menu.css">
<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="jquery/jquery.min.js"></script>
        <!---- jquery link local dont forget to place this in first than other script or link or may not work ---->
        
        <link rel="stylesheet" href="css/style.css">
        <!---- boostrap.min link local ----->

        <script src="js/bootstrap.min.js"></script>
        <!---- Boostrap js link local ----->
        
        <link rel="icon" href="images/icon.png" type="image/x-icon" />
        <!---- Icon link local ----->
        
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <!---- Font awesom link local ----->
         <style type="text/css">
  * {
    box-sizing: border-box;
    font-family: 'Quicksand', sans-serif;
}
.full-screen-container {
    height: 100vh;
    width: 50%;
    background-size: cover;
    background-color: #1097A1;
    background-position: center;
    display: flex;
    justify-content: center;
    align-items: center;
}


.login-container {
    background-color:white;
    padding: 50px 30px;
    min-width: 300px;
    width: 100%;
    max-width: 600px;
    margin-left: 110%;
}

.login-title {
    color: white;
    text-align: center;
    margin: 0;
    margin-bottom: 0px;
    font-size: 2.5em;
    font-weight: normal;
}

.input-group {
    display: flex;
    flex-direction: column;
    margin-bottom: 0px;
}

.input-group label {
    color:#105387;
    font-weight: lighter;
    font-size: 1.5em;
    margin-bottom: 0px;
}

.input-group input {
    font-size: 1.5em;
    padding: .1em .25em;
    border: 1px solid hsl(201, 100%, 6%);
    outline: none;
    border-radius: 15px;
    color:black;
    font-weight: lighter;
    height: 40px;
}

.input-group input:focus {
    border: 1px solid hsl(201, 100%, 50%)
}

.login-button {
    padding: 6px;
    width: 100%;
    border-radius: 10px; 
    background-color:#1097A1;
    border: 1px solid hsl(201, 100%, 50%);
    outline: none;
    font-size: 1.5em;
    color:white;
    font-weight: lighter;
    margin-top: 20px;
    cursor: pointer;
}


.login-button:focus {
    background-color: hsla(201, 100%, 50%, 0.5)
}

</style>
</head>
<body>
        <div class="full-screen-container">
        <div class="col-lg-6">
          <img src="3SRAM/sramlogo.png" style="width: 60%;margin-left: 80%;margin-bottom: 20%;  border-radius: 50%;">
        </div>
        <div class="col-lg-6">
        <div class="login-container" style="border-radius: 4%; width: 400px;">
           <form action="server.php" method="post">
            <h2 style="color:#1097A1;">SIGN IN</h2>
            <div class="input-group">
              <label for="username">username:</label>  
              <input type="text" placeholder="Username" name="username" required="required">
            </div><br>
            <div class="input-group">
              <label for="password">password:</label>  
              <input type="password" placeholder="Password" name="password" required="required">
            </div><br>
            <div class="input-group">
              <label for="cropcode">cropcode:</label>  
              <input type="text" placeholder="cropcode" name="cropcode" required="required">
            </div><br>
            <div class="radio-btn">
                <p>
                <input type="radio" id="In Active" value="admin" name="radio">
                <label for="In Active">Admin</label>
                <input type="radio" id="In Active" value="employee" name="radio">
                <label for="In Active">Employee</label>
                </p>
            </div>  
            <button type="submit" name="adminlogin" class="login-button">Signin</button>
          </form>
        </div>
      </div></div>
</body>
</html>