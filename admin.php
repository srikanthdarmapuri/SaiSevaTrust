<?php
  if (isset($_POST['login'])) {
    if($_POST['username'] == 'admin' && $_POST['password'] == 'admin') {
      
    } else {
      $error = "Invalid credentials!!.";
    }
  }
?>


<html>
    <head>
        <title>Admin</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            html, body {
                width: 100%;
                height: 100%;
                font-family: "Helvetica Neue", Helvetica, sans-serif;
                color: #444;
                -webkit-font-smoothing: antialiased;
                background: #f0f0f0;

            }

            #container {
                position: fixed;
                width: 340px;
                height: 280px;
                top: 50%;
                left: 50%;
                margin-top: -140px;
                margin-left: -170px;
                background: #fff;
                border: 1px solid #ccc;
            }

            form {
                margin: 0 auto;
                margin-top: 20px;
            }

            label {
                color: #555;
                display: inline-block;
                margin-left: 18px;
                padding-top: 10px;
                font-size: 14px;
            }


            input {
                font-family: "Helvetica Neue", Helvetica, sans-serif;
                font-size: 12px;
                outline: none;
            }

            input[type=text],
            input[type=password] {
                color: #777;
                padding-left: 10px;
                margin: 10px;
                margin-top: 12px;
                margin-left: 18px;
                width: 290px;
                height: 35px;
                border: 1px solid #c7d0d2;
                border-radius: 2px;
            }

            input[type=submit] {
                float: right;
                margin-right: 30px;
                margin-top: 20px;
                width: 80px;
                height: 30px;
                font-size: 14px;
                font-weight: bold;
                color: #fff;
                background-color: #9ca0a2; /*IE fallback*/
                border-radius: 1px;
                border: 1px solid #9ca0a2;
                cursor: pointer;
            }

        </style>
    </head>
    <body>
        <div id="container">
            <form method="post" action="admin.php">
                <input type="text" name="login" value="login" hidden>
                 <label for="username">User name:</label>
                <input type="text" id="username" name="username">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
                <div id="lower">
                    <input type="submit" value="Login">
                </div>
                <p style="color: red; text-transform: bold; text-align: center;"><?= $error ?></p>
            </form>
        </div>
    </body>
</html>