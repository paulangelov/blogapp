


<!DOCTYPE html>
<!--[if lt IE 9]>
<html lang="ja" class="no-js lt-ie9" prefix="og: http://ogp.me/ns#">
<![endif]-->
<!--[if gt IE 9]><!-->
<html lang="ja" class="no-js" prefix="og: http://ogp.me/ns#"><!--<![endif]-->

<head>
<head>
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
    <link rel="stylesheet" href="{{ asset('css/xcss/pagination.css') }}">

    <script src="{{ asset('lib/modernizr.js') }}"></script>

</head>
<body id="js-body">
<div id="fb-root"></div>

<noscript class="for-no-js">Javascriptを有効にしてください。</noscript>
<div class="for-old">お使いのOS・ブラウザでは、本サイトを適切に閲覧できない可能性があります。最新のブラウザをご利用ください。</div>

<input type="hidden" value="./" id="js-base-url">

<div class="l-wrap js-wrap">
    <!--start header-->
<header class="l-header  js-header">
    <div class="l-header-top u-clear">
        
            <div class="l-header-logo">
            
                <a class="logo " href="{{ url('index')}}">
                    <img src="{{ asset('images/logo.png') }}" width="138" height="28" alt="BLOG"/>
                </a>

            </div>
            <div class="l-header-hamburger">
                <a href="#" class="hamburger js-hamburger " >
                    <span class="hamburger-item"></span>
                    <span class="hamburger-item"></span>
                    <span class="hamburger-item"></span>
                </a>
            </div>
        
    </div>
</header>
<!--end header-->

    <nav class="nav js-nav">
    <ul class="nav-list">
        <li class="nav-item">
            <a href="#js-body" class="nav-link">TOP</a>
        </li>
        <li class="nav-item">
            <a href="https://www.facebook.com/facebook" target="_blank" class="nav-link">Facebook</a>
        </li>
        <li class="nav-item">
            <a href="https://www.twitter.com/twitter" target="_blank" class="nav-link">Twitter</a>
        </li>
    </ul>
</nav>

    <!--start l-contents-->
    <div class="l-container u-clear">

        <!--start l-main-->
        <main class="l-main js-main">
            <div class="l-main-block"></div>
                <div class="page-number">
                
                    Page <span >{{$blog->currentPage()}}/{{$blog->lastPage()}}</span>
                </div>
                <div class="archive">
                    <ul class="archive-list">
                    @foreach ($blog as $postblog)
                        <li class="archive-item">
                            <article class="card">
                                <a href="{{ url('index-single-post/'.$postblog->blogid.'/')}}" class="card-link">
                                    <img src="{{ asset('storage/upload/'.$postblog->blogpic) }}" alt="" class="card-image">
                                    <div class="card-bottom">
                                        <h1 class="card-title">{{$postblog->blogtitle}}</h1>
                                        <time class="card-date" datetime="">
                                            {{\Carbon\Carbon::parse($postblog->blogdate)->format('d M, Y')}}
                                        </time>
                                    </div>
                                </a>
                            </article>
                        </li>
                        @endforeach
                        
                    </ul>
                </div>

                <br>

                {!! $blog->render() !!}

            </div>
        </main>
        <!--end l-main-->

    </div>
    <!--end l-contents-->

        <!--footer ここから-->
    <footer class="l-footer ">
        
            <div class="l-footer-button">
            <a class="page-top js-scroll" href="#js-body">
                <span class="page-top-arrow"></span>
            </a>
            </div>
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
