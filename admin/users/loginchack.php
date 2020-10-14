<?php
require("hader.php");
?>
<section class="breadcrumnb">
    <div class="container">
        <ol itemscope="" itemtype="http://schema.org/BreadcrumbList" class="clearfix">
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <meta itemprop="position" content="1">
                <a href="index.html" itemprop="item"><span itemprop="name">Home</span></a>
            </li>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <meta itemprop="position" content="2">
                <span itemprop="name">Gift Registry</span>
            </li>
        </ol>
    </div>
</section>

<section class="page_header">
    <div class="container">
        <h1 class="page_heading">Gift Registry</h1>

        <div class="button"><a href="myaccount.html?action=back" class="btn btn-link"><i class="icon-left"></i> Back</a></div>

    </div>
</section>
<section id="giftregistryPrelogin" class="giftregistryPrelogin-page-content page-content">
    <div class="container">
        <div class="row">
            <div class="content-area col-lg-12">

                <div class="category-header text-center" id="giftregistry_preloginHeader">You must register in order to create a gift registry and add items to it.</div>

                <div class="row">
                    <div class="col-lg-12">

                        <div class="continue-button text-center">
                            <button type="button" class="btn btn-default" onclick="javascript: location.href = 'register3008.html?cg=0';"><i class="icon-pencil"></i>Create Account</button>
                            <span>or</span>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal"><i class="icon-login"></i>Login</button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="loginModalLabel">Login</h4>
                <h4 class="modal-title" id="resetPWLabel">Reset Password</h4>
            </div>
            <div class="modal-body">
                <form id="myaccountLogin" name="myaccountLogin" action="https://veniam-preview-com.3dcartstores.com/login.asp?ordertracking=[otrack][redirecturl]" class="bt-flabels js-flabels" method="post">
                    <div class="loginField bt-flabels__wrapper">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="loginEmail" value="" placeholder="Email" size="30" tabindex="1" class="form-control txtBoxStyle" required />
                        <div class="clearfix"></div>
                    </div>
                    <div class="loginField bt-flabels__wrapper">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="loginPassword" autocomplete="off" placeholder="Password" size="12" tabindex="2" class="form-control txtBoxStyle" required />
                    </div>
                    <button type="submit" class="btn btn-primary "><i class="icon-login"></i> Log in to my account</button>
                    <button type="button" onclick="toggleForms();" class="btn btn-link"><i class="icon-cw"></i>Reset my password</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php
require("footer.php");
?>