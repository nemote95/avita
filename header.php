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
                        if(isset($_SESSION['user'])) {
                            echo "   سلام".$_SESSION['lastname'];
                                echo '<a href="logout.php?logout" role="button" class="btn buy btn-danger" data-toggle="modal" style=" margin:10px;">خروج</a>';

                        }
                            else{
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
                                <a href="index.php" class="dropdown-toggle"> خانه <b class="caret"></b> </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown active">
                                        <a href="index.php"><i class="icon-caret-left pull-right visible-desktop"></i> رنگ های پوسته</a>
                                        <ul class="dropdown-menu">
                                            <li class="active"><a href="index.php">پوسته پیش فرض</a></li>

                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="shop.php" class="dropdown-toggle"> دسته بندی ها <b class="caret"></b> </a>
                                <ul class="dropdown-menu">
                                    <?php
                                    $cat_sql = "select * from category";
                                    $categories=$dbh->query($cat_sql);
                                    foreach ($categories as $cat){
                                        echo '<li><a href="shop.php?CAID='.$cat['CAID'].'">'.$cat['name'].'</a></li>';
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
                <div class="span3">
                    <div class="cart-container" id="cartContainer">
                        <div class="cart">
                            <p class="items">سبد خرید <span class="dark-clr">(3)</span></p>
                            <p class="dark-clr hidden-tablet">$1816.90</p>
                            <a href="checkout-step-1.php" class="btn btn-danger">
                                <!-- <span class="icon icons-cart"></span> -->
                                <i class="icon-shopping-cart"></i>
                            </a>
                        </div>
                        <div class="open-panel">

                            <div class="item-in-cart clearfix">
                                <div class="image">
                                    <img src="images/dummy/cart-items/cart-item-1.jpg" width="124" height="124" alt="cart item" />
                                </div>
                                <div class="desc">
                                    <strong><a href="product.php">کلاه زمستانی</a></strong>
                                    <span class="light-clr qty">
                                    تعداد : 1
                                    &nbsp;
                                    <a href="#" class="icon-remove-sign" title="Remove Item"></a>
                                </span>
                                </div>
                                <div class="price">
                                    <strong>$4957</strong>
                                </div>
                            </div>

                            <div class="item-in-cart clearfix">
                                <div class="image">
                                    <img src="images/dummy/cart-items/cart-item-2.jpg" width="124" height="124" alt="cart item" />
                                </div>
                                <div class="desc">
                                    <strong><a href="product.php">کمربند اسپورت</a></strong>
                                    <span class="light-clr qty">
                                    تعداد : 1
                                    &nbsp;
                                    <a href="#" class="icon-remove-sign" title="Remove Item"></a>
                                </span>
                                </div>
                                <div class="price">
                                    <strong>$1318</strong>
                                </div>
                            </div>

                            <div class="item-in-cart clearfix">
                                <div class="image">
                                    <img src="images/dummy/cart-items/cart-item-3.jpg" width="124" height="124" alt="cart item" />
                                </div>
                                <div class="desc">
                                    <strong><a href="product.php">کیف پول مردانه</a></strong>
                                    <span class="light-clr qty">
                                    تعداد : 1
                                    &nbsp;
                                    <a href="#" class="icon-remove-sign" title="Remove Item"></a>
                                </span>
                                </div>
                                <div class="price">
                                    <strong>$3840</strong>
                                </div>
                            </div>

                            <div class="summary">
                                <div class="line">
                                    <div class="row-fluid">
                                        <div class="span6">هزینه ارسال :</div>
                                        <div class="span6 align-right">$4.99</div>
                                    </div>
                                </div>
                                <div class="line">
                                    <div class="row-fluid">
                                        <div class="span6">جمع کل :</div>
                                        <div class="span6 align-right size-16">$357.81</div>
                                    </div>
                                </div>
                            </div>
                            <div class="proceed">
                                <a href="checkout-step-1.php" class="btn btn-danger pull-right bold higher">تصویه حساب <i class="icon-shopping-cart"></i></a>
                                <small>هزینه ارسال بر اساس منطقه جغرافیایی محاسبه میشود. <a href="#">اطلاعات بیشتر</a></small>
                            </div>
                        </div>
                    </div>
                </div> <!-- /cart -->

            </div>
        </div>
    </div>
</div> <!-- /main menu -->
