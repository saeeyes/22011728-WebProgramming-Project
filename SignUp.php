<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up</title>
    <style>
        body{
            background-color: black;
        }

        .title{
            margin-top: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form{
            color:gainsboro;
            background-color: brown;
            border: 2px solid gainsboro;
            width: 500px;
            margin: 8% auto;
            height: auto;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;        
        }
        form div{
            margin-bottom: 40px;
        }
    </style>
</head>
    <body>
        <form action="SignUpProcess.php" method="post">
            <div>
                <h1>Sign-Up</h1>
            </div>
            <div>
                <form action="/Login_check.php" method="post">
                    <label for = "ID">ID<span class = "req">*</span></label><br>
                    <input type = "text" name = "id" id = "id" placeholder="Give your ID"  required/>
                    <br><br>
                    <label for = "password">Password<span class = "req">*</span></label><br>
                    <input type = "password" name = "pw" id = "pw" placeholder="•••••••"  required/>
                    <br><br>
                    <label for = "email">Email<span class = "req">*</span></label><br>
                    <input type = "email" name = "email" id = "email" placeholder= " Type your email for verificartion."  required/>
                    <br> <br>
                    <label for = "first_name">First name<span class = "req">*</span></label><br>
                    <input type = "text" name = "name" id = "name" placeholder="Give your first last name." required/>
                    <br><br>
                    <input type="submit" value="submit">
                </form>    
            </div>
        
        
    </body>
</html>