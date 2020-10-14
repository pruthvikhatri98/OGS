<?php
require("hader.php");
?>
<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/templates/common-core/lib/bootstrap/css/bootstrap2912.css?vcart=10.1.12" type="text/css" />
<link rel="StyleSheet" href="assets/templates/common-core/css/core2912.css?vcart=10.1.12" type="text/css" />
<link rel="stylesheet" href="assets/templates/common-core/css/myaccount2912.css?vcart=10.1.12" type="text/css" media="screen" />
<link rel="StyleSheet" href="assets/templates/veniam-core/css/default2912.css?vcart=10.1.12" type="text/css" />
<section id="loginAccount" class="loginAccount-page-content page-content">


    <section class="breadcrumnb">
        <div class="container">
            <ol itemscope="" itemtype="http://schema.org/BreadcrumbList" class="clearfix">
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <meta itemprop="position" content="1">
                    <a href="index.php" itemprop="item"><span itemprop="name">Home</span></a>
                </li>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <meta itemprop="position" content="2">
                    <span itemprop="name">My Account</span>
                </li>
            </ol>
        </div>
    </section>

    <section class="page_header">
        <div class="container">
            <h1 class="page_heading">My Account</h1>

        </div>
    </section>


    <div class="container">
        <div class="row">
            <div class="content-area col-lg-12">
                <div class="beta-col col-lg-6 col-md-6">
                    <div class="header">
                        <h5>New Customers</h5>
                    </div>
                    <div class="createNewAccount pad10">
                        <div class="height">
                            <div class="loginField">
                                <div>If you don't have an account, please proceed by clicking the following button to continue first-time registration.
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="submit-button">
                            <button type="button" onclick="window.location='register.php';" class="btn btn-primary"><i class="icon-pencil"></i> Create Account</button>
                        </div>
                    </div>
                </div>
                <div class="alpha-col col-lg-6 col-md-6">
                    <div class="header">
                        <h5>Returning Customers</h5>
                    </div>
                    <div class="myaccountLogin pad10">
                        <form name="myaccountLogin" action="https://veniam-preview-com.3dcartstores.com/login.asp?ordertracking=1" class="bt-flabels js-flabels" method="post" id="frmForm">
                            <input type="hidden" name="catalogid" value="0" />
                            <div class="height">
                                <div class="loginField">
                                    <div>Please log in to your account.</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="loginField">
                                    <label for="email" class="validation-field">
                                        <input type="text" name="email" id="loginEmail" value="" placeholder="Email" size="30" tabindex="1" class="form-control txtBoxStyle" />
                                        <span class="required-indicator"></span>
                                    </label>
                                </div>
                                <div class="loginField">
                                    <label for="password" class="validation-field">
                                        <input type="password" name="password" id="loginpassword" autocomplete="off" placeholder="Password" size="12" tabindex="2" class="form-control txtBoxStyle" />
                                        <span class="required-indicator"></span>
                                    </label>
                                </div>



                            </div>
                            <div class="loginField">
                                <div class="submit-button">
                                    <button type="submit" id='submitted' name="submitted" class="btn btn-primary" onclick="validateLoginsInput(this.form);"><i class="icon-login"></i> Log in to my account</button>
                                </div>
                            </div>
                            <div class="loginField">
                                <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#resetPW"><i class="icon-cw"></i>Reset my password</button>
                            </div>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

</section>


<div class="modal fade" id="resetPW" tabindex="-1" role="dialog" aria-labelledby="resetPWLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="resetPWLabel">Reset My Password</h4>
            </div>
            <div class="modal-body">
                <form id="forgotPass" name="forgotPass" action="https://veniam-preview-com.3dcartstores.com/login.asp?action=forgotpass&amp;ordertracking=1" method="post" class="bt-flabels js-flabels">
                    <div class="loginField bt-flabels__wrapper">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="Email4Password" value="" placeholder="Email" size="30" tabindex="1" class="form-control txtBoxStyle" required />
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" onclick="resetLoginPass();" class="btn btn-primary btn-lg"><i class="icon-cw"></i>Reset my password</button>
            </div>
        </div>
    </div>
</div>


<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="visible-xs extrapages-shower">
                    <a href="#extrapages" role="button" data-toggle="collapse" class="collapsed">Pages</a>
                </div>
                <div id="FRAME_LINKS">
                    <ul id="extrapages" class="list-unstyled row extrapages">

                        <li class="col-sm-4"><a href="blog.html" target="_self" class="menu-bottom">Blog</a></li>
                        <li class="col-sm-4"><a href="Terms-and-Conditions_ep_2-1.html" target="_self" class="menu-bottom">Terms and Conditions</a></li>
                        <li class="col-sm-4"><a href="affiliateInfo.html" target="_self" class="menu-bottom">Become an Affiliate</a></li>
                        <li class="col-sm-4"><a href="product_index.html" target="_self" class="menu-bottom">Product Index</a></li>

                        <li class="col-sm-4"><a href="category_index.html" target="_self" class="menu-bottom">Category Index</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-4">

                <div class="mailist-box ajax-mailinglist" data-callfront="mailinglist_callfront" data-callback="mailinglist_response">
                    <form method="post" name="mailing" action="https://veniam-preview-com.3dcartstores.com/mailing_list_ajax.asp">
                        <h3>Mailing List</h3>
                        <div class="mailinglist-form clearfix">
                            <input class="mailinglist-input form-control" type="text" name="email" placeholder=" Email Address" autocomplete="off" />
                            <button class="mailinglist-submit btn btn-default" type="submit" name="www">
                                <span id="mailing-btn-txt">GO</span>
                                <span id="mailing-btn-load" class="mailing-btn-load icon-spin2 animate-spin hidden"></span>
                            </button>
                        </div>
                        <div class="clearfix maillist-options">
                            <div class="subscribe"><input id="list_subscribe" type="radio" name="subscribe" value="1" checked="checked"> <label for="list_subscribe">Subscribe</label></div>
                            <div class="subscribe"><input id="list_unsubscribe" type="radio" name="subscribe" value="0"> <label for="list_unsubscribe">Unsubscribe</label></div>
                        </div>
                    </form>
                    <div id="mailinglist-response" class="mailinglist-response">
                        <div class="mailinglist-error hidden"> <span class="" icon-attention""></span> <strong>Ooop!</strong> The email you entered isn't valid.</div>
                        <div class="mailinglist-subscribed hidden"><span class="icon-ok"></span> <strong>WooHoo!</strong> You subscribed successfully.</div>
                        <div class="mailinglist-unsubscribed hidden"> <span class="icon-ok"></span> <strong>Ok!</strong> You're unsubscribed.</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="footer-social">
            <div class="row">

                <div class="col-md-6">
                    <ul class="social-icons list-unstyled list-inline">
                        <li class="social-icons-label hidden-md hidden-sm hidden-xs"> Stay Connected</li>

                        <li><a href="#" class="facebook" target="_blank" title="Like Us on Facebook"><span class="icon-facebook"></span></a></li>


                        <li><a href="#" class="twitter" target="_blank" title="Follow Us on Twitter"><span class="icon-twitter"></span></a></li>


                        <li><a href="#" class="gplus" target="_blank" title="Follow Us on Google+"><span class="icon-gplus"></span></a></li>


                        <li><a href="#" class="youtube" target="_blank" title="Subscribe to our Channel"><span class="icon-youtube"></span></a></li>


                        <li><a href="#" class="pinterest" target="_blank" title="Follow Us on Pinterest"><span class="icon-pinterest"></span></a></li>


                        <li><a href="#" class="instagram" target="_blank" title="Follow Us on Instagram"><span class="icon-instagram"></span></a></li>



                    </ul>
                </div>


                <div class="col-md-6 pull-right hidden-sm hidden-xs">
                    <div class="global-footer"><ul class="payment-icons list-unstyled list-inline">
                        <li class="payment-icons-label hidden-md hidden-sm hidden-xs"> Payments</li>
                        <li><img src="assets/images/cards.png" alt=""> </li>
                        </ul> </div>
                </div>

            </div>
        </div>
    </div>

</footer>
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

<aside id="qv-modal" class="qv qv-modal modal" tabindex="-1" role="dialog" data-catalogid="" data-price="0" data-sku="" data-backdrop="true">
    <div class="modal-dialog" role="document">
        <div class="modal-vcenter">
            <div class="qv-loader">
                <span class="mailing-btn-load icon-spin2 animate-spin"></span>
            </div>
            <div class="product-item modal-content">
                <button type="button" class="qv-close close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <iframe id="qvIframe" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</aside>

<link rel="stylesheet" href="assets/templates/common-core/lib/fontello/css/fontello.min2912.css?vcart=10.1.12" type="text/css" />
<link rel="stylesheet" href="assets/templates/common-core/lib/fontello/css/animation2912.css?vcart=10.1.12" type="text/css" />

<script src='assets/templates/common-core/lib/jquery.min2912.js?vcart=10.1.12'></script>
<script src='assets/templates/common-core/lib/jquery-migrate-3.0.1.min2912.js?vcart=10.1.12'></script>
<script src="assets/templates/common-core/lib/bootstrap/js/bootstrap2912.js?vcart=10.1.12"></script>
<script src="assets/templates/common-core/js/core2912.js?vcart=10.1.12"></script>
<script src="assets/templates/veniam-core/js/main2912.js?vcart=10.1.12"></script>
<script type="text/javascript" src="assets/templates/common-core/lib/utilities2912.js?vcart=10.1.12"></script>
<script type="text/javascript" src="assets/templates/common-core/js/myaccount_login2912.js?vcart=10.1.12"></script>
<script>

    function validateLoginsInput(objForm) {

        //You should create the validator only after the definition of the HTML form
        var frmvalidator = new Validator("myaccountLogin");
        frmvalidator.EnableMsgsTogether();

        //frmvalidator.setAddnlValidationFunction("myaccountLogin");

        frmvalidator.addValidation("email", "req", "Please enter your email address");
        frmvalidator.addValidation("email", "maxlen=100", "Max length for Email is 100");
        frmvalidator.addValidation("email", "email");

        frmvalidator.addValidation("password","req","Please enter your password.");
    }
</script>


<link rel="stylesheet" href="assets/templates/common-core/quicksearch/quicksearch2912.css?vcart=10.1.12" type="text/css" media="screen" />
<script type="text/javascript" src="assets/templates/common-core/quicksearch/jquery.quicksearch2912.js?vcart=10.1.12"></script>
<script type="text/javascript">
    jQuery(function () {
        jQuery('#searchlight').searchlight('search_quick.html');
    });
</script>


<div class="stats hidden">
    <script type="text/javascript">
        //<![CDATA[
        var file='stats/spacer.gif';
        var stats_d=new Date();
        var stats_s=stats_d.getSeconds();
        var stats_m=stats_d.getMinutes();
        var stats_x=stats_s*stats_m;
        var prdID = '0';
        var catID = '[catid]';
        stats_f='' + escape(document.referrer); stats_f=stats_f.replace('_','----');
        if (navigator.appName=='Netscape'){stats_b='NS';}
        if (navigator.appName=='Microsoft Internet Explorer'){stats_b='MSIE';}
        if (navigator.appVersion.indexOf('MSIE 3')>0) {stats_b='MSIE';}
        stats_u='' + escape(document.URL); stats_u=stats_u.replace('_','----'); stats_w=screen.width; stats_h=screen.height;
        stats_v=navigator.appName;
        stats_fs = window.screen.fontSmoothingEnabled;
        if (stats_v != 'Netscape') {stats_c=screen.colorDepth;}
        else {stats_c=screen.pixelDepth;}
        stats_j=navigator.javaEnabled();
        info='w=' + stats_w + '&h=' + stats_h + '&c=' + stats_c + '&r=' + stats_f + '&u='+ stats_u + '&fs=' + stats_fs + '&b=' + stats_b + '&x=' + stats_x + '&cat=' + catID + '&prd=' + prdID;
        document.write('<img src="' + file + '?'+info+ '" width="1" height="1" border="0" alt="stats" />');
        //]]>
    </script>
    <noscript>
        <img src="stats/spacer.gif" width="90" height="30" alt="" />
    </noscript>
</div>

<script type="text/javascript">var _cart_secure_url = "https://veniam-preview-com.3dcartstores.com"</script><script>(new Image()).src = 'https://veniam-preview-com.3dcartstores.com/3dvisit.asp'</script>

