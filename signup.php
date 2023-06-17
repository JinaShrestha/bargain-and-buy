<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <style>
        .body {
            font-family: Arial, sans-serif;
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            height: 200PX;
        }

        .container {
            position: relative;
            width: 300px;
            padding: 10px;
            background-color: #CAB19B;
            border: 1px solid #ccc;
            border-radius: 15px;
            height: 330px;
            text-align: center;
            margin-top: 130px;
            margin-bottom: 50px;
        }

        img {
            position: absolute;
            height: 20px;
            width: 20px;
            top: 10px;
            left: 90%;
        }

        h2 {
            text-align: center;
        }

        input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 30px 0 10px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 15px;
            box-sizing: border-box;
        }

        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 10px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 15px;
            box-sizing: border-box;
        }

        button {

            color: black;
            padding: 8px 20px;
            margin: 20px 0 5px 0;
            border: none;
            cursor: pointer;
            width: 27%;
            border-radius: 15px;
        }


        button:hover {
            opacity: 0.8;
        }

        a {
            color: #797474;
            text-decoration: none;
            font-size: 13px;
            margin-bottom: 15px;

        }

        .register_button {
            background-color: white;
            margin: 10px auto;
            padding: 10px;
            color: black;
            height: 35px;
            width: 70px;
            border-radius: 15px;
            display: block;

        }
    </style>


    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/about.css" />
    <link rel="stylesheet" href="css/menu.css" />
    <link rel="stylesheet" href="css/gallery.css" />
    <link rel="stylesheet" href="css/form.css" />
    <link rel="stylesheet" href="css/home.css" />


</head>


<body>
    <?php
    include 'templates/header.php';
    ?>
    <div class="body">
        <div class="container">
            <h1>Login</h1>
            <a href=""><img src="./images/cancel.png" alt="#"></a>
            <form action="login" method="post">

                <input type="text" placeholder="Username" name="username" required>


                <input type="password" placeholder="Password" name="password" required>

                <button type="submit">Submit</button><br>
                <a href="">Don't have account?</a>

                <a class="register_button" href="register.php">Register</a>
            </form>
        </div>
    </div>
    <?php
    include 'templates/footer.php';
    ?>
</body>

</html>