<!DOCTYPE html>
<html>

<head>
    <title>Register</title>

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
            height: 420px;
            text-align: center;
            margin-top: 100px;
        }

        img {
            position: absolute;
            height: 20px;
            width: 20px;
            top: 10px;
            left: 90%;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }


        input {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 15px;
            box-sizing: border-box;
        }

        button {
            background-color: #D9D9D;
            color: black;
            padding: 8px 20px;
            margin: 20px 0;
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

        }
    </style>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./css/about.css" />
    <link rel="stylesheet" href="./css/header.css" />
    <link rel="stylesheet" href="./css/menu.css" />
    <link rel="stylesheet" href="./css/gallery.css" />
    <link rel="stylesheet" href="./css/form.css" />
    <link rel="stylesheet" href="./css/home.css" />
    <link rel="stylesheet" href="./css/style.css" />

</head>

<body>
    <?php
    include 'templates/header.php';
    ?>
    <div class="body">
        <div class="container">
            <h1>Register</h1>
            <a href=""><img src="./images/cancel.png" alt="#"></a>
            <form action="/register" method="POST">

                <input type="text" id="username" placeholder="Username" name="username" required>

                <input type="email" id="email" placeholder="Email No" name="email" required>

                <input type="contact" id="contact" placeholder="Contact" name="Contact" required>

                <input type="password" id="password" placeholder="Password" name="password" required>

                <input type="password" id="confirm-password" placeholder="Confirm Password" name="confirm-password"
                    required>

                <button>Submit</button>
            </form>
        </div>
    </div>
    <?php
    include 'templates/footer.php';
    ?>
</body>

</html>