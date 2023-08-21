<html lang="ja">
<head prefix="og:  fb:  article: ">
  <meta charset="Shift_JIS">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
  <title>新規会員登録 | ベスト電器</title>
  <link rel="icon" href="https://www.bestdenki.ne.jp/wordpress/wp-content/themes/bestdenki/common/img/best-denki_favicon.ico">
  <link rel="icon alternate" href="https://www.bestdenki.ne.jp/wordpress/wp-content/themes/bestdenki/common/img/best-denki_favicon.ico">
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
  <script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script>
  <script type="text/javascript" src="https://cache.ymall.jp/assets/v2/js/jquery-3.6.0.min.js" charset="UTF-8"></script>
  <script type="text/javascript" src="js/analytics.js"></script>
  <script src="https://cache.ymall.jp/js/ajaxzip3-https.js?t=20220506" charset="UTF-8"></script>
  <link rel="stylesheet" href="css/best_dev.css">
  <script type="text/javascript" async="" src="js/best_dev.js"></script>
</head>
<body>
  <div id="wrap">
    <header class="l-header" style="  opacity: 0;">
      <div class="l-header-top" style="  z-index: -1;">
        <div class="header-logo" style="background: white;border-bottom: 1px solid gray;padding: 0px;z-index: -555;opacity: 0;">
          <a href="トップ画面.html" class="header-logo__image" style="display: block;    height: fit-content;padding: 10px;">
            <picture>
              <source srcset="https://www.bestdenki.ne.jp/wordpress/wp-content/themes/bestdenki/common/img/h_logo.png" type="image/webp"> <img src="https://www.bestdenki.ne.jp/wordpress/wp-content/themes/bestdenki/common/img/h_logo.png" width="195" height="32" alt="ヤマダウェブコム" loading="lazy"> </picture>
          </a>
        </div>
      </div>
    </header>
    <header id="header">
      <div class="inner">
        <div class="l-header-top">
          <div class="header-logo" style="background: white;border-bottom: 1px solid gray;padding: 0px;z-index: 999;">
            <a href="トップ画面.html" class="header-logo__image" style="display: block;    height: fit-content;padding: 10px;">
              <picture>
                <source srcset="https://www.bestdenki.ne.jp/wordpress/wp-content/themes/bestdenki/common/img/h_logo.png" type="image/webp"> <img src="https://www.bestdenki.ne.jp/wordpress/wp-content/themes/bestdenki/common/img/h_logo.png" width="195" height="32" alt="ヤマダウェブコム" loading="lazy"> </picture>
            </a>
          </div>
        </div>
      </div>
    </header>
    <main class="contents">
      <div class="l-base-e l-grid">
        <div class="l-grid-col1">
          <div class="l-content">
            <h1 class="signin-section__title">ログイン</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
              <div class="signin-section">
                <div class="l-input-field">
                  <div class="l-input-field__title"> メールアドレス </div>
                  <div class="l-input-field__contain">
                    <div class="text-input__input"> 
                        <input type="hidden" name="token" value="aa691807ba26e7f202f431a8b38b00280a28aee4"> 
                        <input id="email" type="email" class="text-input__input-inner @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="例　best@denki.com" required autocomplete="email" autofocus>
 
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <span class="text-input__check">
                            <svg class="icon" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2089_564912)">
                                    <path d="M15.6402 0.129132C15.588 0.0738691 15.5258 0.0299716 15.4571 3.72529e-09C15.3884 -0.0299716 15.3147 -0.0454102 15.2402 -0.0454102C15.1657 -0.0454102 15.0919 -0.0299716 15.0232 3.72529e-09C14.9546 0.0299716 14.8923 0.0738691 14.8402 0.129132L7.64016 7.62451C7.58802 7.67977 7.5258 7.72367 7.45711 7.75364C7.38843 7.78362 7.31468 7.79905 7.24018 7.79905C7.16568 7.79905 7.09193 7.78362 7.02325 7.75364C6.95456 7.72367 6.89231 7.67977 6.84017 7.62451L3.16905 3.82144C3.11691 3.76618 3.05469 3.72228 2.986 3.69231C2.91732 3.66234 2.84357 3.6469 2.76907 3.6469C2.69457 3.6469 2.6208 3.66234 2.55211 3.69231C2.48343 3.72228 2.4212 3.76618 2.36906 3.82144L1.16905 5.0676C1.11584 5.12175 1.07357 5.18636 1.0447 5.25769C1.01584 5.32902 1.00098 5.4056 1.00098 5.48297C1.00098 5.56033 1.01584 5.63694 1.0447 5.70827C1.07357 5.7796 1.11584 5.84422 1.16905 5.89836L4.84017 9.71068L5.64016 10.5507L6.84017 11.7968C6.89231 11.8521 6.95456 11.896 7.02325 11.926C7.09193 11.9559 7.16568 11.9714 7.24018 11.9714C7.31468 11.9714 7.38843 11.9559 7.45711 11.926C7.5258 11.896 7.58802 11.8521 7.64016 11.7968L8.84017 10.5507L9.64016 9.71068L16.8402 2.22451C16.946 2.11235 17.0053 1.96157 17.0053 1.80452C17.0053 1.64747 16.946 1.49666 16.8402 1.3845L15.6402 0.129132Z"></path>
                                </g>
                            </svg>
                        </span> 
                    </div>
                  </div>
                </div>
                <div class="l-input-field">
                  <div class="l-input-field__title"> パスワード </div>
                  <div class="l-input-field__contain">
                    <div class="text-input__input"> 
                        <input id="password" type="password" class="text-input__input-inner @error('password') is-invalid @enderror" placeholder="半角英数字6～20文字" pattern="^[a-zA-Z0-9]+$" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <span class="text-input__hidden">
                            <span class="text-input__hidden-icon">
                                <svg class="icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_838_82021)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M22.6591 10.7394C22.4539 10.4617 18.4184 5 11.997 5C5.43703 5 1.32703 10.69 1.32703 10.75C1.1105 11.131 0.996664 11.5618 0.996664 12C0.996664 12.4382 1.1105 12.869 1.32703 13.25C1.32787 13.2511 1.33052 13.2546 1.33495 13.2606C1.54012 13.5383 5.57563 19 11.997 19C18.557 19 22.667 13.31 22.667 13.25C22.8836 12.869 22.9974 12.4382 22.9974 12C22.9974 11.5618 22.8836 11.131 22.667 10.75C22.6662 10.7489 22.6635 10.7454 22.6591 10.7394ZM0.507029 10.18C0.547029 10.12 4.84703 4 11.997 4C19.147 4 23.497 10.12 23.497 10.18C23.8287 10.7291 24.0041 11.3585 24.0041 12C24.0041 12.6415 23.8287 13.2709 23.497 13.82C23.497 13.88 19.157 20 12.007 20C5.05569 20 0.798173 14.2154 0.521009 13.8388C0.513088 13.828 0.508418 13.8217 0.507029 13.82C0.175326 13.2709 0 12.6415 0 12C0 11.3585 0.175326 10.7291 0.507029 10.18ZM13.9406 9.08987C13.365 8.70529 12.6883 8.50001 11.9961 8.50001C11.0678 8.50001 10.1776 8.86876 9.52122 9.52514C8.86484 10.1815 8.4961 11.0718 8.4961 12C8.4961 12.6922 8.70137 13.3689 9.08595 13.9445C9.47054 14.5201 10.0172 14.9687 10.6567 15.2336C11.2962 15.4985 12 15.5678 12.6789 15.4328C13.3578 15.2977 13.9815 14.9644 14.471 14.4749C14.9605 13.9854 15.2938 13.3618 15.4288 12.6828C15.5639 12.0039 15.4946 11.3002 15.2297 10.6606C14.9648 10.0211 14.5162 9.47445 13.9406 9.08987ZM9.49603 8.2584C10.2361 7.76394 11.1061 7.50001 11.9961 7.50001C12.5874 7.49869 13.1732 7.61419 13.7197 7.83987C14.2663 8.06555 14.7629 8.39696 15.181 8.81509C15.5991 9.23322 15.9306 9.72982 16.1562 10.2764C16.3819 10.8229 16.4974 11.4087 16.4961 12C16.4961 12.89 16.2322 13.7601 15.7377 14.5001C15.2432 15.2401 14.5404 15.8169 13.7182 16.1575C12.8959 16.4981 11.9911 16.5872 11.1182 16.4135C10.2453 16.2399 9.44345 15.8113 8.81412 15.182C8.18478 14.5527 7.7562 13.7508 7.58256 12.8779C7.40893 12.005 7.49804 11.1002 7.83864 10.2779C8.17923 9.45567 8.75601 8.75287 9.49603 8.2584Z">
                                        </path>
                                    </g>
                                </svg>
                            </span> 
                            <span class="text-input__hidden-icon is-active">
                                <svg class="icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_838_82021)">
                                        <path
                                            d="M23.5 10.18C22.5138 8.89108 21.3488 7.74957 20.04 6.78999L19.32 7.50999C20.5903 8.41891 21.7191 9.51073 22.67 10.75C22.8865 11.131 23.0003 11.5618 23.0003 12C23.0003 12.4382 22.8865 12.869 22.67 13.25C22.67 13.31 18.56 19 12 19C10.7795 18.9961 9.56749 18.7969 8.40996 18.41L7.62996 19.2C9.0274 19.7246 10.5073 19.9955 12 20C19.15 20 23.45 13.88 23.49 13.82C23.8232 13.2718 24.0002 12.6429 24.002 12.0014C24.0037 11.3599 23.8302 10.73 23.5 10.18Z">
                                        </path>
                                        <path
                                            d="M1.32996 13.25C1.11343 12.869 0.999594 12.4382 0.999594 12C0.999594 11.5618 1.11343 11.131 1.32996 10.75C1.32996 10.69 5.43996 5 12 5C13.2204 5.00391 14.4324 5.20309 15.59 5.59L16.37 4.8C14.9725 4.27537 13.4926 4.00445 12 4C4.84996 4 0.549958 10.12 0.509958 10.18C0.178255 10.7291 0.00292969 11.3585 0.00292969 12C0.00292969 12.6415 0.178255 13.2709 0.509958 13.82C1.49608 15.1089 2.66117 16.2504 3.96996 17.21L4.68996 16.49C3.41611 15.5819 2.28381 14.49 1.32996 13.25Z">
                                        </path>
                                        <path
                                            d="M7.49996 12C7.50572 12.4838 7.59016 12.9634 7.74996 13.42L8.55996 12.61C8.52465 12.4085 8.5046 12.2046 8.49996 12C8.49996 11.0717 8.86871 10.1815 9.52508 9.52513C10.1815 8.86875 11.0717 8.5 12 8.5C12.2045 8.50464 12.4084 8.52469 12.61 8.56L13.42 7.75C12.7451 7.51378 12.0234 7.44363 11.3157 7.54549C10.608 7.64735 9.9353 7.91822 9.35451 8.33518C8.77372 8.75213 8.30194 9.30289 7.97912 9.94083C7.6563 10.5788 7.49194 11.2851 7.49996 12Z">
                                        </path>
                                        <path
                                            d="M16.5 12C16.4942 11.5162 16.4098 11.0366 16.25 10.58L15.44 11.39C15.4753 11.5915 15.4953 11.7954 15.5 12C15.5 12.9283 15.1312 13.8185 14.4748 14.4749C13.8185 15.1312 12.9282 15.5 12 15.5C11.7954 15.4954 11.5915 15.4753 11.39 15.44L10.58 16.25C11.2548 16.4862 11.9766 16.5564 12.6842 16.4545C13.3919 16.3527 14.0646 16.0818 14.6454 15.6648C15.2262 15.2479 15.698 14.6971 16.0208 14.0592C16.3436 13.4212 16.508 12.7149 16.5 12Z">
                                        </path>
                                        <path
                                            d="M4.54996 19.96C4.44927 19.9598 4.35091 19.9297 4.26727 19.8737C4.18363 19.8176 4.11845 19.738 4.07996 19.645C4.04146 19.552 4.03136 19.4496 4.05094 19.3508C4.07051 19.2521 4.11889 19.1613 4.18996 19.09L19.09 4.19C19.1872 4.1036 19.3137 4.0576 19.4438 4.06143C19.5738 4.06526 19.6974 4.11862 19.7894 4.21059C19.8813 4.30256 19.9347 4.42619 19.9385 4.55621C19.9423 4.68622 19.8964 4.81278 19.81 4.91L4.90996 19.81C4.81457 19.9057 4.68509 19.9597 4.54996 19.96Z">
                                        </path>
                                    </g>
                                </svg>
                            </span> 
                        </span> 
                        <span class="text-input__check">
                            <svg class="icon" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2089_564912)">
                                    <path
                                        d="M15.6402 0.129132C15.588 0.0738691 15.5258 0.0299716 15.4571 3.72529e-09C15.3884 -0.0299716 15.3147 -0.0454102 15.2402 -0.0454102C15.1657 -0.0454102 15.0919 -0.0299716 15.0232 3.72529e-09C14.9546 0.0299716 14.8923 0.0738691 14.8402 0.129132L7.64016 7.62451C7.58802 7.67977 7.5258 7.72367 7.45711 7.75364C7.38843 7.78362 7.31468 7.79905 7.24018 7.79905C7.16568 7.79905 7.09193 7.78362 7.02325 7.75364C6.95456 7.72367 6.89231 7.67977 6.84017 7.62451L3.16905 3.82144C3.11691 3.76618 3.05469 3.72228 2.986 3.69231C2.91732 3.66234 2.84357 3.6469 2.76907 3.6469C2.69457 3.6469 2.6208 3.66234 2.55211 3.69231C2.48343 3.72228 2.4212 3.76618 2.36906 3.82144L1.16905 5.0676C1.11584 5.12175 1.07357 5.18636 1.0447 5.25769C1.01584 5.32902 1.00098 5.4056 1.00098 5.48297C1.00098 5.56033 1.01584 5.63694 1.0447 5.70827C1.07357 5.7796 1.11584 5.84422 1.16905 5.89836L4.84017 9.71068L5.64016 10.5507L6.84017 11.7968C6.89231 11.8521 6.95456 11.896 7.02325 11.926C7.09193 11.9559 7.16568 11.9714 7.24018 11.9714C7.31468 11.9714 7.38843 11.9559 7.45711 11.926C7.5258 11.896 7.58802 11.8521 7.64016 11.7968L8.84017 10.5507L9.64016 9.71068L16.8402 2.22451C16.946 2.11235 17.0053 1.96157 17.0053 1.80452C17.0053 1.64747 16.946 1.49666 16.8402 1.3845L15.6402 0.129132Z">
                                    </path>
                                </g>
                            </svg>
                        </span> 
                    </div>
                  </div>
                </div>
                <div class="checkbox"> 
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember">次回からメールアドレスの入力を省略する</label> 
                </div>
                <div class="l-buttons-row-center"> 
                    <button type="Submit" class="button button-primary button-medium-short" style="background: linear-gradient(180deg,#f53d3d,#F60000 98.57%);border: 1px solid #F60000;">ログイン</button> 
                </div> 
                <a href="{{ route('password.request') }}" class="links">パスワードをお忘れの方はこちら</a> </div>
            </form>
            <div class="signin-section">
              <h2 class="h2">初めてベスト電器アプリをご利用される方</h2>
              <div class="l-buttons-row-center mt24"> <a href="{{ route('register') }}" class="button button-secondary button-medium-short">新規会員登録する</a> </div>
              <p class="typo-body">会員登録頂くとポイントを貯めてお得にお買いものができます。</p>
            </div>
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
  </script>
</body>
</html>