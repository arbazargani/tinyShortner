<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - UIkit 3 KickOff</title>
    <link rel="icon" href="img/favicon.ico">
    <!-- CSS FILES -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.7/css/uikit.min.css">
    <link rel="stylesheet" type="text/css" href="login-dark.css">
</head>
<body class="login uk-cover-container uk-background-secondary uk-flex uk-flex-center uk-flex-middle uk-height-viewport uk-overflow-hidden uk-light"
      data-uk-height-viewport>
<!-- overlay -->
<div class="uk-position-cover uk-overlay-primary"></div>
<!-- /overlay -->
<div class="uk-position-bottom-center uk-position-small uk-visible@m uk-position-z-index">
    <span class="uk-text-small uk-text-muted">© 2019 Company Name - <a href="https://github.com/zzseba78/Kick-Off">Created by KickOff</a> | Built with <a
                href="http://getuikit.com" title="Visit UIkit 3 site" target="_blank" data-uk-tooltip><span
                    data-uk-icon="uikit"></span></a></span>
</div>
<div class="uk-width-medium uk-padding-small uk-position-z-index" uk-scrollspy="cls: uk-animation-fade">

    <div class="uk-text-center uk-margin">
<!--        <img src="img/login-logo.svg" alt="Logo">-->
        <img src="../../../assets/style/image/logo.png" alt="Logo" style="width: 50%;">
    </div>

    <!-- login -->
    <form class="toggle-class" action="login-dark.html">
        <fieldset class="uk-fieldset">
            <div class="uk-margin-small">
                <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon uk-form-icon-flip" data-uk-icon="icon: user"></span>
                    <input class="uk-input" required placeholder="Username" type="text">
                </div>
            </div>
            <div class="uk-margin-small">
                <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon uk-form-icon-flip" data-uk-icon="icon: lock"></span>
                    <input class="uk-input" required placeholder="Password" type="password">
                </div>
            </div>
            <div class="uk-margin-small">
                <label><input class="uk-checkbox" type="checkbox"> Keep me logged in</label>
            </div>
            <div class="uk-margin-bottom">
                <button type="submit" class="uk-button uk-button-primary uk-border-pill uk-width-1-1">LOG IN</button>
            </div>
        </fieldset>
    </form>
    <!-- /login -->

    <!-- recover password -->
    <form class="toggle-class" action="login-dark.html" hidden>
        <div class="uk-margin-small">
            <div class="uk-inline uk-width-1-1">
                <span class="uk-form-icon uk-form-icon-flip" data-uk-icon="icon: mail"></span>
                <input class="uk-input uk-border-pill" placeholder="E-mail" required type="text">
            </div>
        </div>
        <div class="uk-margin-bottom">
            <button type="submit" class="uk-button uk-button-primary uk-border-pill uk-width-1-1">SEND PASSWORD</button>
        </div>
    </form>
    <!-- /recover password -->

    <!-- action buttons -->
    <div>
        <div class="uk-text-center">
            <a class="uk-link-reset uk-text-small toggle-class"
               data-uk-toggle="target: .toggle-class ;animation: uk-animation-fade">Forgot your password?</a>
            <a class="uk-link-reset uk-text-small toggle-class"
               data-uk-toggle="target: .toggle-class ;animation: uk-animation-fade" hidden><span
                        data-uk-icon="arrow-left"></span> Back to Login</a>
        </div>
    </div>
    <!-- action buttons -->
</div>

<!-- JS FILES -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.7/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.7/js/uikit-icons.min.js"></script>
</body>
</html>