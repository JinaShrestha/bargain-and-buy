<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
        <div class='right_container'>
            <div class="your_details">
                <h2>Your Details</h2>
                <ul>
                    <li>Jina</li>
                    <div class=vertical>
                    </div>
                    <li>jha@gmail.com</li>
                    <div class=vertical></div>
                    <li>9876543210</li>
                </ul>
            </div>
            <div class="price">
                <h1>Choose your payment</h1>
                <form action="#">
                    <input type="text" placeholder="Pay through esewa"><br>
                    <input type="text" placeholder="Cash on delivery"><br>
                    <input type="submit" value="Place Order">
                </form>
            </div>
        </div>

    </div>
    <?php
    include 'templates/footer.php';
    ?>
</body>

</html>