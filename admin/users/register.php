<!doctype html>
<html class="no-js" lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Welcome to Sample Store  - Sample Slogan</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/templates/common-core/lib/bootstrap/css/bootstrap2912.css?vcart=10.1.12" type="text/css" />
        <link rel="StyleSheet" href="assets/templates/common-core/css/core2912.css?vcart=10.1.12" type="text/css" />
        <link rel="stylesheet" href="assets/templates/common-core/css/registration2912.css?vcart=10.1.12" type="text/css" media="screen" />
        <link rel="StyleSheet" href="assets/templates/veniam-core/css/default2912.css?vcart=10.1.12" type="text/css" />
    </head>
    <?php
    require("hader.php");
    ?>
    <section class="breadcrumnb">
        <div class="container">
            <ol itemscope="" itemtype="http://schema.org/BreadcrumbList" class="clearfix">
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <meta itemprop="position" content="1">
                    <a href="index.php" itemprop="item"><span itemprop="name">Home</span></a>
                </li>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <meta itemprop="position" content="2">
                    <span itemprop="name">Create an Account</span>
                </li>
            </ol>
        </div>
    </section>
    <section class="page_header">
        <div class="container">
            <h1 class="page_heading">Create an Account</h1>
            <div class="group-message"></div>
        </div>
    </section>
    <section id="registration0" class="registration-page-content page-content">
        <div class="container">
            <div class="row">
                <div class="content-area col-lg-12">
                    <form action="register_insert.php" method="post" name="registrationform" id="registrationform" autocomplete="on">
                        <div class="row">
                            <div class="accountRegForm accountRegForm-col col-lg-12">
                                <div class="header">
                                    <h3 class="page_heading">New Customers</h3>
                                </div>
                                <div class="row">
                                    <div class="loginField col-lg-12">
                                        <label for="email" class="validation-field">
                                            <input type="email" size="25" name="email" maxlength="100" tabindex="1" class="form-control txtBoxStyle" placeholder="Email" />
                                        </label>
                                    </div>
                                    <div class="loginField col-lg-12">
                                        <label for="pass" class="validation-field">
                                            <input type="password" size="12" name="password" maxlength="16" tabindex="2" class="form-control txtBoxStyle" placeholder="Password" />  
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            <div class="accountRegForm accountRegForm-col col-lg-12">
                                <div class="header">
                                    <h3 class="page_heading">Customer Information</h3>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="loginField col-sm-6">
                                                <label for="shipping_firstname" class="validation-field">
                                                    <input name="firstname" type="text" id="shipping_firstname" maxlength="100" size="15" tabindex="4" class="form-control txtBoxStyle" placeholder="First Name" />
                                                </label>
                                            </div>
                                            <div class="loginField col-sm-6">
                                                <label for="shipping_lastname" class="validation-field">
                                                    <input name="lastname" type="text" id="shipping_lastname" maxlength="100" size="15" tabindex="5" class="form-control txtBoxStyle" placeholder="Last Name" />
                                                </label>
                                            </div>
                                            <div class="loginField col-sm-8">
                                                <label for="shipping_address" class="validation-field">
                                                    <input name="address" type="text" id="shipping_address" maxlength="255" size="25" tabindex="8" class="form-control txtBoxStyle" placeholder="Address" />
                                                </label>
                                            </div>
                                            <div class="loginField col-sm-4">
                                                <label for="shipping_zip" class="validation-field">
                                                    <input name="zip" type="number" size="10" maxlength="20" tabindex="13" class="form-control txtBoxStyle" placeholder="Zip" />
                                                </label>
                                            </div>
                                            <div class="loginField col-xs-12 clearfix">
                                                <label for="shipping_city" class="validation-field">
                                                    <input name="city" type="text" id="shipping_city" size="25" maxlength="100" tabindex="10" class="form-control txtBoxStyle" placeholder="City" />
                                                </label>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="loginField col-xs-12">
                                                <label for="shipping_phone" class="validation-field">
                                                    <input name="phone" type="text" id="shipping_phone" maxlength="50" size="25" tabindex="14" class="form-control txtBoxStyle" placeholder="Phone" />
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="accountRegForm accountRegForm-col col-lg-12">
                                <div class="submit-button text-right">
                                    <button type="submit" class="btn btn-primary" name="submit">Register</button>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php
    require("footer.php");
    ?>
    <nav id="mobile-menu" class="mobile-menu">
        <div class="mobile-menu-inner">
            <div class="mobile-menu-close">
                <a href="#"></a>
            </div>
            <div class="mobile-menu-widget">
                <h3>Menu Links</h3>
                <div id="mobile-menulinks"></div>
            </div>
            <div class="mobile-menu-widget">
                <h3>Categories</h3>
                <div id="mobile-categories"></div>
            </div>
        </div>
    </nav>

    <link rel="stylesheet" href="assets/templates/common-core/lib/fontello/css/fontello.min2912.css?vcart=10.1.12" type="text/css" />
    <link rel="stylesheet" href="assets/templates/common-core/lib/fontello/css/animation2912.css?vcart=10.1.12" type="text/css" />

    <script src='assets/templates/common-core/lib/jquery.min2912.js?vcart=10.1.12'></script>
    <script src='assets/templates/common-core/lib/jquery-migrate-3.0.1.min2912.js?vcart=10.1.12'></script>
    <script src="assets/templates/common-core/lib/bootstrap/js/bootstrap2912.js?vcart=10.1.12"></script>
    <script src="assets/templates/common-core/js/core2912.js?vcart=10.1.12"></script>
    <script src="assets/templates/veniam-core/js/main2912.js?vcart=10.1.12"></script>
    <script type="text/javascript" src="assets/templates/common-core/lib/utilities2912.js?vcart=10.1.12"></script>
    <script type="text/javascript" src="assets/templates/common-core/js/contact_us2912.js?vcart=10.1.12"></script>
    <script type="text/javascript" src="assets/templates/common-core/js/address_validator2912.js?vcart=10.1.12"></script>
</html>

