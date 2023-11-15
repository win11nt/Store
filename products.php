<?php
require("common.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products | Store</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    include 'header.php';
    include 'check-if-added.php';
    ?>
    <div class="container" id="content">
        <div class="jumbotron home-spacer" id="products-jumbotron">
            <h1>Welcome to our Store!</h1>
            <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.
            </p>
        </div>
        <hr>

        <div class="row text-center" id="cameras">
            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="img/5.jpg" alt="">
                    <div class="caption">
                        <h3>Cannon EOS </h3>
                        <p>Price: 360$ </p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(1)) { 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to
                                    cart</a>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="img/2.jpg" alt="">
                    <div class="caption">
                        <h3>Nikon DSLR </h3>
                        <p>Price: 400$ </p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(2)) { 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to
                                    cart</a>
                                <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="img/3.jpg" alt="">
                    <div class="caption">
                        <h3>Sony DSLR</h3>
                        <p>Price: 450$</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(3)) { 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to
                                    cart</a>
                                <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="img/4.jpg" alt="">
                    <div class="caption">
                        <h3>Olympus DSLR</h3>
                        <p>Price: 500$</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(4)) { 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to
                                    cart</a>
                                <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center" id="watches">
            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="img/18.jpg" alt="">
                    <div class="caption">
                        <h3>Titan Model #301 </h3>
                        <p>Price: 1300$ </p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(5)) { 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to
                                    cart</a>
                                <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="img/19.jpg" alt="">
                    <div class="caption">
                        <h3>Titan Model #201</h3>
                        <p>Price: 500$ </p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(6)) { 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to
                                    cart</a>
                                <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="img/20.jpg" alt="">
                    <div class="caption">
                        <h3>HMT Milan</h3>
                        <p>Price: 800$ </p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(7)) { 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to
                                    cart</a>
                                <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="img/21.jpg" alt="">
                    <div class="caption">
                        <h3>Faber Luba #111 </h3>
                        <p>Price: 1800$ </p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(8)) { 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to
                                    cart</a>
                                <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center" id="shirts">
            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="img/54.jpg" style="width: 57.5%" alt="">
                    <div class="caption">
                        <h3>Marshall Major IV</h3>
                        <p>Price: 120$ </p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(9)) { 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to
                                    cart</a>
                                <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="img/56.jpg" alt="" style="width: 46.29%;">
                    <div class="caption">
                        <h3>Sony WH-XB910N</h3>
                        <p>Price: 250$</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(10)) { 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to
                                    cart</a>
                                <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="img/57.jpg" alt="" style="width: 45.6%;">
                    <div class="caption">
                        <h3>Jabra Evolve 80</h3>
                        <p>Price: 259$</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(11)) { 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to
                                    cart</a>
                                <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                    <img src="img/58.jpg" alt="" style="width: 67%;">
                    <div class="caption">
                        <h3>Beats Studio3</h3>
                        <p>Price: 349$</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(12)) { 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to
                                    cart</a>
                                <?php
                            }
                        }
                        ?>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <hr>
    </div>

    <?php include("footer.php"); ?>
</body>

</html>