<!--  ==========  -->
<!--  = Header =  -->
<!--  ==========  -->


<!--//session_start(); // Right at the top of your script-->
<!--//-->
<?php include 'login.php' ?>
<?php //include  'register.php'?>
<header id="header">
    <div class="container">
        <div class="row">
            <!--  ==========  -->
            <!--  = Logo =  -->
            <!--  ==========  -->
            <div class="span7">
                <a class="brand" href="index.php">
                    <!--<img src="images/logo.png" alt="Webmarket Logo" width="48" height="48" />-->

                    <span class="pacifico">Avita</span>
                    <!--                    <span class="tagline">قالب فروشگاهی HTML قدرتمند</span>-->
                </a>
            </div>

            <!--  ==========  -->
            <!--  = Social Icons =  -->
            <!--  ==========  -->
            <!--            <div class="span5">-->
            <div class="topmost-line">
                <div class="lang-currency">
                </div>
            </div>
            <div class="top-right">

                <div class="register">
                    <?php
                    if (isset($_SESSION['user'])) {
                        echo "   سلام" . $_SESSION['lastname'];
                        echo '<a href="logout.php?logout" role="button" class="btn buy btn-danger" data-toggle="modal" style=" margin:10px;">خروج</a>';

                    } else {
                        echo '<a href="#loginModal" role="button" class="btn more btn-primary" data-toggle="modal">ورود</a> یا';
                        echo ' <a href="#registerModal" role="button" class="btn more btn-primary" data-toggle="modal">ثبت نام</a>';
                    }


                    ?>
                </div>

            </div>
        </div>
</header>

<!--  ==========  -->
<!--  = Main Menu / navbar =  -->
<!--  ==========  -->
<div class="navbar navbar-static-top" id="stickyNavbar">
    <div class="navbar-inner">
        <div class="container">
            <div class="row">
                <div class="span9">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!--  ==========  -->
                    <!--  = Menu =  -->
                    <!--  ==========  -->
                    <div class="nav-collapse collapse">
                        <ul class="nav" id="mainNavigation">
                            <li class="dropdown active">
                                <a href="index.php" class="dropdown-toggle"> خانه </a>

                            </li>

                            <li class="dropdown">
                                <a href="shop.php" class="dropdown-toggle"> دسته بندی ها <b class="caret"></b> </a>
                                <ul class="dropdown-menu">
                                    <?php
                                    $cat_sql = "select * from category";
                                    $categories = $dbh->query($cat_sql);
                                    foreach ($categories as $cat) {
                                        echo '<li><a href="shop.php?CAID=' . $cat['CAID'] . '">' . $cat['name'] . '</a></li>';
                                    }
                                    ?>
                                </ul>
                            </li>


                            <li><a href="about-us.php">درباره ما</a></li>
                            <li><a href="contact.php">تماس با ما</a></li>
                        </ul>

                        <!--  ==========  -->
                        <!--  = Search form =  -->
                        <!--  ==========  -->
                        <form class="navbar-form pull-right" action="#" method="get">
                            <button type="submit"><span class="icon-search"></span></button>
                            <input type="text" class="span1" name="search" id="navSearchInput">
                        </form>
                    </div><!-- /.nav-collapse -->
                </div>

                <!--  ==========  -->
                <!--  = Cart =  -->
                <!--  ==========  -->
                <?php
                if (isset($_SESSION["user"])) {
                    $current_basket_query = $dbh->prepare("SELECT product.PRID,cost,name,percentage
                                                          FROM basket,basket_product,product   
                                                          LEFT OUTER JOIN discount 
                                                          ON product.DID=discount.DID 
                                                          WHERE basket.UID=:UID AND 
                                                          basket_product.PRID=product.PRID AND 
                                                          basket.BID=basket_product.BID AND 
                                                          basket.BID NOT IN                                              
                                                          (SELECT purchase.BID FROM purchase);");
                    $current_basket_query->bindParam(':UID', $_SESSION["user"]);
                    $current_basket_query->execute();
                    $current_basket_items = $current_basket_query->fetchAll();

                    $huge_basket = sizeof($current_basket_items) > 3;
                    $total_cost = 0;

                    echo '<div class="span3">
                    <div class="cart-container" id="cartContainer">
                        <div class="cart">
                            <p class="items">سبد خرید <span class="dark-clr">(3)</span></p>
                            <a href="checkout-step-1.php" class="btn btn-danger">
                                <!-- <span class="icon icons-cart"></span> -->
                                <i class="icon-shopping-cart"></i>
                            </a>
                        </div>
                        <div class="open-panel">';


                    for ($i = 0; $i < sizeof($current_basket_items); $i++) {
                        if ($i < 3) {
                            echo '<div class="item-in-cart clearfix">
                                <div class="image">
                                    <img src="images/dummy/products/' . $current_basket_items[$i]['PRID'] . '/1.jpg" width="124" height="124" alt="cart item" />
                                </div>
                                <div class="desc">
                                    <strong><a href="product.php">' . $current_basket_items[$i]['name'] . '</a></strong>
                                    <span class="light-clr qty">
                                    تعداد : 1
                                    &nbsp;
                                    <a href="#" class="icon-remove-sign" title="Remove Item"></a>
                                </span>
                                </div>
                                <div class="price">';
                            if ($current_basket_items[$i]['percentage']) {
                                $total_cost += $current_basket_items[$i]["cost"] * (1 - $current_basket_items[$i]['percentage']);
                                echo '<strong>' . $current_basket_items[$i]["cost"] * (1 - $current_basket_items[$i]['percentage']) . 'تومان</strong>';
                            } else {
                                $total_cost += $current_basket_items[$i]["cost"];
                                echo '<strong>' . $current_basket_items[$i]["cost"] . 'تومان</strong>';
                            }
                            echo '</div>
                            </div>';
                        }
                        else{
                            if ($current_basket_items[$i]['percentage']) {
                                $total_cost += $current_basket_items[$i]["cost"] * (1 - $current_basket_items[$i]['percentage']);
                            } else {
                                $total_cost += $current_basket_items[$i]["cost"];
                            }
                        }
                    }

                    if ($huge_basket) {
                        echo '<div class="item-in-cart clearfix">برای مشاهده ی همه ی کالاهای سبد خرید 
روی ویرایش سبد کلیک کنید.
</div>';
                    }

                    echo '
                                <div class="summary">
                                
                                <div class="line">
                                    <div class="row-fluid">
                                        <div class="span6">جمع کل :</div>
                                        <div class="span6 align-right size-16">' . $total_cost . '</div>
                                    </div>
                                </div>
                            </div>
                            <div class="proceed">
                                <a href="checkout-step-1.php" class="btn btn-danger pull-right bold higher">تصویه حساب <i class="icon-shopping-cart"></i></a>
                                <a href="checkout-step-1.php" class="btn btn-primary bold higher">ویرایش سبد<i class="icon-shopping-cart"></i></a>

                            </div>
                        </div>
                    </div>
                </div> <!-- /cart -->';
                } ?>

            </div>
        </div>
    </div>
</div> <!-- /main menu -->
