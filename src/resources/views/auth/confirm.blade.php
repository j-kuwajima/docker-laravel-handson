<html lang="ja"><head prefix="og:  fb:  article: ">
    <meta charset="Shift_JIS"> 
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
<title>登録内容確認 | ベスト電器</title>
<link rel="icon" href="https://cache.ymall.jp/assets/v2/image/favicon.png">
<link rel="icon alternate" href="https://cache.ymall.jp/assets/v2/image/favicon.png">
<link rel="shortcut icon" type="image/x-icon" href="https://cache.ymall.jp/assets/v2/image/favicon.ico">
<link rel="apple-touch-icon" href="https://cache.ymall.jp/assets/v2/image/apple-touch-icon-precomposed.png">
<meta charset="Shift_JIS">
<meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
<title>新規会員登録</title>
<link rel="icon"
    href="https://www.bestdenki.ne.jp/wordpress/wp-content/themes/bestdenki/common/img/best-denki_favicon.ico">
<link rel="icon alternate"
    href="https://www.bestdenki.ne.jp/wordpress/wp-content/themes/bestdenki/common/img/best-denki_favicon.ico">
<link rel="shortcut icon" type="image/x-icon" href="https://cache.ymall.jp/assets/v2/image/favicon.ico">
<link rel="apple-touch-icon" href="https://cache.ymall.jp/assets/v2/image/apple-touch-icon-precomposed.png">
<meta name="description" content="">
<meta property="og:title" content="新規会員登録">
<meta property="og:site_name" content="新規会員登録">
<meta property="og:type" content="article">
<meta property="og:description" content="">
<meta property="og:url" content="https://www.yamada-denkiweb.com/">
<meta property="og:image" content="">
<meta name="format-detection" content="telephone=no">
<link rel="canonical" href="">
<link rel="stylesheet" href="https://cache.ymall.jp/assets/v2/style/style-1.5.4.css">
<script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script><script type="text/javascript" src="https://cache.ymall.jp/assets/v2/js/jquery-3.6.0.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/analytics.js"></script>
<script src="https://cache.ymall.jp/js/ajaxzip3-https.js?t=20220506" charset="UTF-8"></script>
</head>

<body>


<div id="wrap">
    <header class="l-header">
        <div class="l-header-top">
            <div class="header-logo" style="background: white; border-bottom: 1px solid gray;padding: 0px;">
                <a href="https://www.yamada-denkiweb.com" class="header-logo__image"
                    style="display: block;    height: fit-content;padding: 10px;">
                    <picture>
                        <source
                            srcset="https://www.bestdenki.ne.jp/wordpress/wp-content/themes/bestdenki/common/img/h_logo.png"
                            type="image/webp">
                        <img src="https://www.bestdenki.ne.jp/wordpress/wp-content/themes/bestdenki/common/img/h_logo.png"
                            width="195" height="32" alt="ヤマダウェブコム" loading="lazy">
                    </picture>
                </a>
            </div>
        </div>
    </header>
<main class="contents">
<div class="l-base-e l-grid">
  <div class="l-grid-col1">
    <div class="l-content">
    <!-- <form method="POST" action="{{ url('register/complete') }}"> -->
    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <h1 class="signin-section__title">登録内容確認</h1>
        <hr class="line line-low mt24">
        <div class="confirmation__list mt24">
          <div class="confirmation__list-item">
            <div class="form--column form--reguler">
              <div class="form__label color-text-999">名前</div>
              <div class="form__content confirmation__content">
                <p><span class="confirmation__name">{{session()->get('name')}}&nbsp;{{session()->get('name2')}}</span>{{session()->get('name_kana')}}&nbsp;{{session()->get('name_kana2')}}
                </p>
              </div>
            </div>
          </div>
          <div class="confirmation__list-item">
            <div class="form--column form--reguler">
              <div class="form__label color-text-999">生年月日</div>
              <div class="form__content confirmation__content">
                <p>{{session()->get('birthday')}}</p>
              </div>
            </div>
          </div>
          <div class="confirmation__list-item">
            <div class="form--column form--reguler">
              <div class="form__label color-text-999">性別</div>
              <div class="form__content confirmation__content">
                @if(session()->get('gender') === '1')
                <p>男性</p>
                @elseif(session()->get('gender') === '2')
                <p>女性</p>
                @else
                <p>-</p>
                @endif
              </div>
            </div>
          </div>
          <div class="confirmation__list-item">
            <div class="form--column form--reguler">
              <div class="form__label color-text-999">住所</div>
              <div class="form__content confirmation__content">
                <p>〒{{session()->get('zip')}}</p>
                <p>{{session()->get('pref')}}{{session()->get('area')}}{{session()->get('area2')}}</p>
              </div>
            </div>
          </div>
          <div class="confirmation__list-item">
            <div class="form--column form--reguler">
              <div class="form__label color-text-999">電話番号</div>
              <div class="form__content confirmation__content">
                <p>{{session()->get('mobile_number')}}</p>
              </div>
            </div>
          </div>
          <div class="confirmation__list-item">
            <div class="form--column form--reguler">
              <div class="form__label color-text-999">パスワード</div>
              <div class="form__content confirmation__content">
                <p>********</p>
              </div>
            </div>
          </div>

          <div class="confirmation__list-item">
                @if(session()->get('mail_flg') === '1')
                <p class="confirmation__notes">ベスト電器からのお得な情報を電子メールで受け取る</p>
                @else
                <p class="confirmation__notes">ベスト電器からのお得な情報を電子メールで受け取らない</p>
                @endif
          </div>
        </div>

        <div class="l-buttons-column l-buttons-fill mt40">
        <form method="post" action="{{ route('verification.send') }}">
        @method('post')
        @csrf
        <div>
          <input class="button button-primary button-medium-short" type="submit" name="regist" value="この内容で登録する" style="background: linear-gradient(180deg,#f53d3d,#F60000 98.57%);border: 1px solid #F60000;">
          </div>
        </form>
          <a class="button button-secondary button-medium-short" href="javascript:history.go(-1);">内容を修正する</a>
        </div>
        <input type="hidden" name="agree.x" value="">
        <input type="hidden" name="id" value="C63C204D-B2FB-403F-B98E-28295B20E71F">
      </form>
    </div>
  </div>
</div>
</main>
</div>
<script src="https://cache.ymall.jp/assets/v2/js/bundle-1.5.1.js"></script>
<script crossorigin="anonymous" src="https://polyfill.io/v3/polyfill.min.js?features=default%2CHTMLPictureElement"></script>
<script>
window.addEventListener('DOMContentLoaded', () => {
Drilldown.spNavInit()
});
</script>  <script charset="utf-8" language="JavaScript" type="text/javascript" src="https://cache.ymall.jp/js/global.js"></script>
</body></html>