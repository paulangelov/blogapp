


<!DOCTYPE html>
<!--[if lt IE 9]>
<html lang="ja" class="no-js lt-ie9" prefix="og: http://ogp.me/ns#">
<![endif]-->
<!--[if gt IE 9]><!-->
<html lang="ja" class="no-js" prefix="og: http://ogp.me/ns#"><!--<![endif]-->

<head>
<meta charset="UTF-8">
    <title>Title</title>
    <meta name="description" content="sample text,sample tex">
    <meta name="keywords" content="word1,word2,word3">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="">
    <meta property="og:description" content="sample text,sample tex">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:type" content="blog">
    <meta property="fb:admins" content="">
    <meta property="og:image" content="{{ asset('images/common/ogp.png') }}">

    <meta name="apple-mobile-web-app-title" content="">

    <link rel="shortcut icon" href="{{ asset('images/common/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('images/common/apple-touch-icon-precomposed.png') }}">
    <link rel="stylesheet" href="{{ asset('css/xcss/style.css') }}">

    <script src="{{ asset('lib/modernizr.js') }}"></script>

</head>
<body id="js-body">
<div id="fb-root"></div>

<noscript class="for-no-js">Javascriptを有効にしてください。</noscript>
<div class="for-old">お使いのOS・ブラウザでは、本サイトを適切に閲覧できない可能性があります。最新のブラウザをご利用ください。</div>

<input type="hidden" value="./" id="js-base-url">

<div class="l-wrap js-wrap">
    <!--start header-->
<header class="l-header l-header-admin js-header">
    <div class="l-header-top u-clear">
        
            <div class="l-header-logo">
            
<a class="logo " href="./">
    <img src="{{ asset('images/logo-admin.png') }}" width="138" height="28" alt="BLOG"/>
</a>

            </div>
            <div class="l-header-text">
                <p>ADMIN PAGE</p>
            </div>
        
    </div>
</header>
<!--end header-->


    <!--start l-contents-->
    <div class="l-container u-clear">

        <!--start l-main-->
        <main class="l-main js-main">
            <div class="l-main-block"></div>
            <form method="post" class="form" action="{{ action ('LoginController@getpost')}}">
                {{csrf_field()}}
                <label for="user-id" class="form-title">USER ID</label>
                <input type="text" id="user-id" name="user-id" class="input input-text" required>
                <label for="password" class="form-title">PASSWORD</label>
                <input type="password" id="password" name="password" class="input input-text" required>
            
                @if(!empty($error))
                <div align="center" style="padding-top:10px;">
                    <p>{{$error}}</p>
                </div>
                @endif
                <label for="submit" class="form-button">
                    <div class="button">
                        <p class="button-text">Login</p>
                    </div>
                </label>
                    <input type="submit" id="submit" name="submit" class="input input-submit">
            </form>
        </main>
        <!--end l-main-->

    </div>
    <!--end l-contents-->

        <!--footer ここから-->
    <footer class="l-footer l-footer-admin">
        
            <div class="l-footer-copyright">
             <small class="copyright">&copy;copyright</small>
            </div>
        
    </footer>
    <!--footer ここまで-->
</div>

        <!--javascript ここから-->
        <script src="{{ asset('lib/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ asset('js/xjs/vendor.js') }}"></script>
        <script src="{{ asset('js/xjs/app.js') }}"></script>
        <!--javascript ここまで-->
    </body>
</html>
