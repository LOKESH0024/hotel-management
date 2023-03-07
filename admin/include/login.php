<?php session_start(); include_once 'include/class.user.php'; $user=new User(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>HOTEL PARADISE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
      
    <style>
.book
{
            max-width: 375px;
            padding: 15px;
            margin: 0 auto;
            color: #1a1a1a;
            margin-top: 40px;
    
}

h2
{
    text-align: center;
}


</style>

</head>

<body>
    <div class="container">
        <div class="book">
            <h2><b>Log In</b></h2>
            
            <hr>
            <form action="" method="post" name="login">
                <div class="form-group">
                    <label>Username or Email:</label>
                    <input type="text" name="emailusername"  value="admin" required>
                </div>
                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" name="password"  value="12345" required>
                </div>
             <button>submit</button>
                
        
                <script>
                    document.getElementById("wrong_id").innerHTML = "Wrong username or password";
                </script>

                <?php ?>

            </form>
        </div>
    </div>

</body>

</html>