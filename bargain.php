<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

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

    <div class="box_bargain">
        <div class='left_box'>
            <img src="./images/image 4.jpg" alt="" />
            <h3>Summer wrapper top for women</h3>
            <p>Durable and comfortable.Size : Fits upto 38" Chest</p>
            <span>Rs 1200</span>

        </div>
        <div class='right_box'>
            <h1>Enter your price</h1>
            <form action="pay.php">
                <input type="text" placeholder="NRP 1098,Cash"><br>
                <input type="submit" value="Buy now">
            </form>
        </div>

    </div>
    <?php
    include 'templates/footer.php';
    ?>
</body>

</html>