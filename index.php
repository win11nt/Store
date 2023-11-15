<?php
require("common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Store</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body style="padding-top: 50px;">
    <?php
    include 'header.php';
    ?>

    <div id="content">
        <div id="banner_image">
            <div class="container">
                <center>
                    <div id="banner_content">
                        <h1>We sell cameras, watches and headphones.</h1>
                        <p style="margin: 20px 100px 10px;">Capture life's moments, keep track of time, and listen to your favorite tunes with our
                            selection of cameras, watches, and headphones.</p>
                        <br />
                        <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                    </div>
                </center>
            </div>
        </div>
        <div class="container">
            <div class="row text-center" id="item_list">
                <div class="col-sm-4">
                    <a href="products.php#cameras">
                        <div class="thumbnail">
                            <img src="img/1.jpg" alt="">
                            <div class="caption">
                                <h3>Cameras</h3>
                                <p>Choose among the best available in the world.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-4">
                    <a href="products.php#watches">
                        <div class="thumbnail">
                            <img src="img/10.jpg" alt="">
                            <div class="caption">
                                <h3>Watches</h3>
                                <p>Original watches from the best brands.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-4">
                    <a href="products.php#shirts">
                        <div class="thumbnail">
                            <img src="img/53.jpg" alt="" style="max-height: 200px; width: auto;">
                            <div class="caption">
                                <h3>Headphones</h3>
                                <p>Immerse yourself in sound.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php
    include 'footer.php';
    ?>
</body>

</html>