<html>
<head>
    <title>Advanced Web Development K15-N03</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        form {
            background-color: #fff;
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        a {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="../Controller/validateUser.php" method="POST">

        <a>Username:</a><input type="text" name="userNameLogin" size="16" >
        <br>
        <a>Password:</a><input type="password" name="passWordLogin" size="16" >
        <br>
        <input type="submit" name="submit" value="Login">
        

    </form>
</body>
</html>
