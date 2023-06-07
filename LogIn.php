<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG_IN</title>
    <style>
        body{
            background-color: black;
        }
        .log {
            background-color: brown;
            border: 2px solid gainsboro;
            color: gainsboro;
            width: 500px;
            margin: 8% auto;
            height: 500px;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-size: 1.2em;          
        }
        .log div h1{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: -80px;
            margin-bottom: 80px;
        }
        .log a{
            color: gainsboro;
        }
    </style>
</head>
    <body>
        <div class = "log">
            <div>
                <h1>LOG_IN</h1>
            </div>
            <form action="/Login_check.php" method="post">
                <label for = "ID">ID</label><br>
                <input type = "text" name = "id" id = "id" placeholder="Give your ID"/>
                <br>
                <label for = "password">Password</label><br>
                <input type = "password" name = "pw" id = "pw" placeholder="•••••••"/>
                <br>
                <input type="submit" value="Login">
            </form> 
            <a href = "SignUp.php">sign-up</a>
        </div>
    </body>
</html>