<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Products</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!--Get your own code at fontawesome.com-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Custom CSS -->
        <link href="style.css" rel="stylesheet">
    </head>
    <style>
        body
        {
    background-color: mustard;
        }
        #products-jumbotron
        {
            background-image:url("https://i.pinimg.com/originals/72/53/e6/7253e6c0f4ca19f6ba6b90ad2391a9aa.jpg");
        }
        .thumbnail:hover{
            background-color: pink;
            transform:scale(1.05);
            transition:1s;
}
    </style>
    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        include 'added.php';
        ?>
        <div class="container" id="content">
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <center><h1> Code For Food </h1>
            </div>
            <hr>
            <div id="money">
            <h1>Donate Clothes: </h1>
            <div class="row text-center">
                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/hygienicclothes.jpeg" alt="" style="height:300px;width:400px;">
                        <div class="caption">
                            <h3>Providing Hygienic Clothes to Newly Born Children</h3>
                            <p>Price: Rs. 200.00 per child </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Donate</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(7)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <div>
                                    <p>Quantity:
                                        <button class="btn2" style="border-radius:50%;"><span class="glyphicon glyphicon-minus"></span></button>
                                        <input id="quantity7" type="text" name="quantity" value=1 style="max-width:20%;" required>
                                        <button class="btn1" style="border-radius:50%;"><span class="glyphicon glyphicon-plus"></span></button>
                                    </p>
                                    </div>
                                    <a href="" onclick="this.href='cart-add.php?id=7&quantity='+document.getElementById('quantity7').value" name="add" value="add" class="btn btn-block btn-primary" >Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/usedclothes.jpeg" alt="" style="height:300px;">
                        <div class="caption">
                            <h3>Donate used clothes to a person in your city</h3>
                            <p>Price: FREE</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Donate</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(9)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <div>
                                    <p>Quantity:
                                        <button class="btn2" style="border-radius:50%;"><span class="glyphicon glyphicon-minus"></span></button>
                                        <input id="quantity9" type="text" name="quantity" value=1 style="max-width:20%;" required>
                                        <button class="btn1" style="border-radius:50%;"><span class="glyphicon glyphicon-plus"></span></button>
                                    </p>
                                    </div>
                                    <a href="" onclick="this.href='cart-add.php?id=9&quantity='+document.getElementById('quantity9').value" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/blanketdonations.jpg" alt="" style="height:290px;">
                        <div class="caption">
                            <h3>Blanket Donations</h3>
                            <p style="padding-top:25px;">Price: Rs. 300.00 per person</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Donate</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(11)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <div>
                                    <p>Quantity:
                                        <button class="btn2" style="border-radius:50%;"><span class="glyphicon glyphicon-minus"></span></button>
                                        <input id="quantity11" type="text" name="quantity" value=1 style="max-width:20%;" required>
                                        <button class="btn1" style="border-radius:50%;"><span class="glyphicon glyphicon-plus"></span></button>
                                    </p>
                                    </div>
                                    <a href="" onclick="this.href='cart-add.php?id=11&quantity='+document.getElementById('quantity11').value" name="add" value="add" class="btn btn-block btn-primary buy">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div id="money">
            <h1>Donate Money: </h1>
            <div class="row text-center">
                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/nutritious.png" alt="" style="height:300px;width:400px;">
                        <div class="caption">
                            <h3>Providing Nutritious Food to Newly Born Children</h3>
                            <p>Price: Rs. 100.00 per child </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Donate</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(7)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <div>
                                    <p>Quantity:
                                        <button class="btn2" style="border-radius:50%;"><span class="glyphicon glyphicon-minus"></span></button>
                                        <input id="quantity7" type="text" name="quantity" value=1 style="max-width:20%;" required>
                                        <button class="btn1" style="border-radius:50%;"><span class="glyphicon glyphicon-plus"></span></button>
                                    </p>
                                    </div>
                                    <a href="" onclick="this.href='cart-add.php?id=7&quantity='+document.getElementById('quantity7').value" name="add" value="add" class="btn btn-block btn-primary" >Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/dayfood.jpg" alt="" style="height:300px;">
                        <div class="caption">
                            <h3>Responsible for a person's food a day</h3>
                            <p>Price: Rs. 350.00 per person</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Donate</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(8)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <div>
                                    <p>Quantity:
                                        <button class="btn2" style="border-radius:50%;"><span class="glyphicon glyphicon-minus"></span></button>
                                        <input id="quantity8" type="text" name="quantity" value=1 style="max-width:20%;" required>
                                        <button class="btn1" style="border-radius:50%;"><span class="glyphicon glyphicon-plus"></span></button>
                                    </p>
                                    </div>
                                    <a href="" onclick="this.href='cart-add.php?id=8&quantity='+document.getElementById('quantity8').value" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/donate.jpg" alt="" style="height:300px;">
                        <div class="caption">
                            <h3>Donate food to a person in your city</h3>
                            <p>Price: Rs. 200.00 per person</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Donate</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(9)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <div>
                                    <p>Quantity:
                                        <button class="btn2" style="border-radius:50%;"><span class="glyphicon glyphicon-minus"></span></button>
                                        <input id="quantity9" type="text" name="quantity" value=1 style="max-width:20%;" required>
                                        <button class="btn1" style="border-radius:50%;"><span class="glyphicon glyphicon-plus"></span></button>
                                    </p>
                                    </div>
                                    <a href="" onclick="this.href='cart-add.php?id=9&quantity='+document.getElementById('quantity9').value" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/van.png" alt="" style="height:300px;">
                        <div class="caption">
                            <h3>NOMAD Van Donations</h3>
                            <p style="padding-top:16px;">Price: Rs. 100.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Donate</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(10)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <div>
                                    <p>Quantity:
                                        <button class="btn2" style="border-radius:50%;"><span class="glyphicon glyphicon-minus"></span></button>
                                        <input id="quantity10" type="text" name="quantity" value=1 style="max-width:20%;" required>
                                        <button class="btn1" style="border-radius:50%;"><span class="glyphicon glyphicon-plus"></span></button>
                                    </p>
                                    </div>
                                    <a href="" onclick="this.href='cart-add.php?id=10&quantity='+document.getElementById('quantity10').value" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/midday.jpg" alt="" style="height:290px;">
                        <div class="caption">
                            <h3>Mid-Day Meal Donations</h3>
                            <p style="padding-top:25px;">Price: Rs. 100.00 per person</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Donate</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(11)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <div>
                                    <p>Quantity:
                                        <button class="btn2" style="border-radius:50%;"><span class="glyphicon glyphicon-minus"></span></button>
                                        <input id="quantity11" type="text" name="quantity" value=1 style="max-width:20%;" required>
                                        <button class="btn1" style="border-radius:50%;"><span class="glyphicon glyphicon-plus"></span></button>
                                    </p>
                                    </div>
                                    <a href="" onclick="this.href='cart-add.php?id=11&quantity='+document.getElementById('quantity11').value" name="add" value="add" class="btn btn-block btn-primary buy">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/child.jpg" alt="" style="height:290px;width:400px;">
                        <div class="caption">
                            <h3>Child Immunization Initiative Donations</h3>
                            <p>Price:300.00 per person</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Donate</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(12)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <div>
                                    <p>Quantity:
                                        <button class="btn2" style="border-radius:50%;"><span class="glyphicon glyphicon-minus"></span></button>
                                        <input id="quantity12" type="text" name="quantity" value=1 style="max-width:20%;" required>
                                        <button class="btn1" style="border-radius:50%;"><span class="glyphicon glyphicon-plus"></span></button>
                                    </p>
                                    </div>
                                    <a href="" onclick="this.href='cart-add.php?id=12&quantity='+document.getElementById('quantity12').value" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>       
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/animalfeed.jpg" alt="" style="height:290px;">
                        <div class="caption">
                            <h3>Feed an animal</h3>
                            <p>Price:100.00 for animal</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Donate</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(13)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <div>
                                    <p>Quantity:
                                        <button class="btn2" style="border-radius:50%;"><span class="glyphicon glyphicon-minus"></span></button>
                                        <input id="quantity13" type="text" name="quantity" value=1 style="max-width:20%;" required>
                                        <button class="btn1" style="border-radius:50%;"><span class="glyphicon glyphicon-plus"></span></button>
                                    </p>
                                    </div>
                                    <a href="" onclick="this.href='cart-add.php?id=13&quantity='+document.getElementById('quantity13').value" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>                
            </div>
            </div>
            <div id="food">
            <h1>Donate Food:</h1>
              <div class="container">
                  <div class="row text-center">
                  <div class="col-sm-6">
                      <div class="thumbnail">
                          <img src="img/van.png" alt="">
                        <div class="caption">
                            <h3>NOMAD VANS</h3>
                            <p>We provide people who conduct large events an opportunity to donate the left over food from the event. Our nomadic vans will reach you within 15mins of your intimation and collect the food. This food will be served fresh to the poor on the road side , if the quantity is too , we will serve the orphans as well.</p>Contact us to proceed further.
                        </div>
                    </div>    
                  </div>
                  <div class="col-sm-4 col-sm-offset-2">
                      <h2 style="font-size:25px;">Contact Information</h2>
                      <div class="thumbnail" style="color:black;border-color:transparent;">
                      <p class="fa fa-google" style="font-size:20px;">  arthhello@gmail.com</p><br>
                      <p class="fa fa-phone" style="font-size:20px;">+91 8448406746</p><br>
                      </div>
                      <div class="panel panel-primary" id="locate">
                            <div class="panel-heading">
                                <h4>Bread for Every Breath</h4>
                                <h6>SEND US LOCATION - WE HELP THE NEEDY</h6>
                            </div>
                            <div class="panel-body">
                                <form action="location.php" method="POST">
                                    <div class="form-group">
                                        <input class="form-control" id="name" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Mobile Number" maxlength="10" size="10" name="contact" required = "true">
                                    </div>
                                    <div class="form-group">
                                        <input  type="text" id="message" class="form-control"  placeholder="Location" name="location" required = "true">
                                    </div>
                                    <p align="center">Click <a href="products.php#money">here</a> to donate.</p>
                                    <button type="submit" name="submit" class="btn btn-primary">Send</button>
                                </form>
                            </div>
                        </div>
                  </div>
                  </div>
              </div>
            </div>
            <hr>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
<script>
    $(".btn1").on("click", function() {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        var newVal = parseFloat(oldValue) + 1;
        $button.parent().find("input").val(newVal);
    });
    $(".btn2").on("click", function() {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        if (oldValue > 2) {
            var newVal = parseFloat(oldValue) - 1;
        } else {
            newVal = 1;
        }
        $button.parent().find("input").val(newVal);
    });
</script>
</html>
