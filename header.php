<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8" />
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MTDHVB6');</script>
<!-- End Google Tag Manager -->

  <meta http-equiv="X-UA-Compatible" content="IE=11" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes" />
  <title></title>
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css" />
  <?php wp_head() ?>
</head>
<body>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MTDHVB6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

  <div class="preloader <?php if(is_front_page()) : echo "preloader--top"?><?php endif;?>"></div>
  <header class="header <?php if(is_front_page()) : echo "header--top"?><?php endif;?>">
    <div class="header__container">
      <a class="header__logo" href="<?php echo get_home_url() ?>/">
        <img class="white" src="<?php echo get_template_directory_uri();?>/src/img/tanaka-logo.png" alt="tanaka logo" /> 
        <img class="black" src="<?php echo get_template_directory_uri();?>/src/img/tanaka-logo-black.png" alt="tanaka logo" /> 
      </a>
      <div class="header__nav">
        <a class="header__link js-service" href="<?php echo get_home_url() ?>/#service">サービス</a>
        <a class="header__link js-benefits" href="<?php echo get_home_url() ?>/#five-benefits">5つのメリット</a>
        <a class="header__link js-achievement" href="<?php echo get_home_url() ?>/#achievement">実績</a>
        <a class="header__link js-flow" href="<?php echo get_home_url() ?>/#flow-to-construction">施工までの流れ</a>
        <a class="header__link js-company" href="<?php echo get_home_url() ?>/#company-profile">会社概要</a>
		<a class="header__link js-contact" href="<?php echo get_home_url() ?>/#contact">お問い合わせ</a>
      </div>
    </div>
    <div class="header__hamburger js-menu">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </header>