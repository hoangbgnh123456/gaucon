<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="loginn.css">

</head>
<body>
    <?php
   
    ?>
    <div class="loginnn">
        <div class="tt">
            <h2>ADMIN LOGIN</h2>
        <form method="post" action="xulylogin.php">
        <input type="text" name="name" id="name" placeholder="User name..." required>
        <br>
        <input type="password" name="password" id="password" placeholder="Password...">
        <br>
        <br>
        <span id="err"><?php
        if(isset($er)==true){
            echo $er;
        }
        else{
            
        }
        ?></span>
        <input type="submit" value="LOGIN">
        <br>
    </form>
        </div>
    </div>
</body>
</html>
