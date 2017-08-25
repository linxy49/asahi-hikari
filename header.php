<?php
/**
 * header
 */
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <!-- meta -->
    <meta charset="utf-8" />
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />

    <meta name="keywords" content="携帯電話,光回線,朝日,朝日株式会社" />
    <meta name="description" content="携帯電話、光回線の事なら、朝日株式会社にお任せください！フレッツ光・光コラボレーションの販売パートナーも募集中です。" />
    <!-- css -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Play" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css" type="text/css" media="screen,print" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/reset.css" type="text/css" media="screen,print" />  
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/vegas.min.css" type="text/css" media="screen,print" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/animsition.min.css" type="text/css" media="screen,print" />
    <!-- js -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/tab.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/toggle.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/ac_list.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/ac_panel.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/smoothscroll.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/vegas.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/animsition.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/web_animsition.js"></script>
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri() ?>/js/html5shiv.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri() ?>/js/css3-mediaqueries.js"></script>
    <![endif]-->

    <title>携帯電話・光回線は朝日株式会社</title>
  </head>

  <body>
    <div id="pageTop" class="animsition-overlay" data-animsition-overlay="true">
      <div class="misenai"></div>
      <div id="main-nav-area">
        <p id="sp_menu">Menu</p>
        <a id="menuButton" href="#">
          <span></span>
          <span></span>
          <span></span>
        </a>
        <aside style="display:none">
          <nav id="main-nav">
            <ul>
              <li><a href="/"><i class="fa fa-home"></i>&nbsp;ホーム</a></li>
              <li><a href="/company"><i class="fa fa-building"></i>&nbsp;会社情報</a></li>
              <li><a href="/partner"><i class="fa fa-thumbs-up"></i>&nbsp;代理店募集</a></li>
              <li><a href="/contact"><i class="fa fa-envelope"></i>&nbsp;お問い合わせ</a></li>
            </ul>
          </nav>
        </aside>
      </div><!-- main-nav-area -->


      <div id="headerWrapWide">
        <div id="headerWrap">
          <div class="headerWrap_l"><a href="/" class="animsition-link"><img alt="ロゴ" src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" /></a></div>
          <div class="headerWrap_r"><p>携帯電話・光回線は、朝日株式会社へ！<br />初期費用0円！販売パートナーも募集中！！</p></div>
        </div>

        <div class="misenai">
          <div class="c_button_area">
            <a class="c_button animsition-link" href="/contact"><i class="fa fa-envelope"></i>&nbsp;お問い合わせ</a>
          </div>
        </div>
      </div><!--headerWrapWide-->

      <div class="misenai">
        <div id="gmenu">
          <ul class="menu">
            <li><a href="/" class="animsition-link">ホーム</a></li>
            <li class="menu__mega"><a href="/company" class="animsition-link">会社情報</a></li>
            <li class="menu__mega"><a href="/partner" class="animsition-link">代理店募集</a></li>
            <li class="menu__mega"><a href="/contact" class="animsition-link">お問い合わせ</a></li>
          </ul>
        </div>
      </div><!--misenai-->

      <?php if (is_home()) { ?>
      <div id="topImage">
        <div id="topImageInner">
          <div id="catchcopy_area">
            <p class="catch_ja">New Standard for New Value</p>
            <p class="catch_ja">新しい価値を、新しい標準へ</p>
          </div>
        </div>
      </div><!--topImage-->
      <?php } elseif(is_category()) { ?>
      <div id="topImage02">
        <div class="bigTitArea">
          <p class="bigTit"><span><?php $page = get_page(get_the_ID()); echo $page->post_name;?></span><?php echo get_the_title(); ?></p>
        </div>
      </div><!--topImage02-->

      <div id="breadWrap">
        <div id="breadWrapInner">
          <ul class="breadList">
            <li><a href="/" class="animsition-link"><i class="fa fa-home"></i>&nbsp;ホーム</a></li>
            <li>&nbsp;＞&nbsp;</li>
            <li><?php echo get_the_title(); ?></li>
          </ul>
        </div>
      </div><!--breadWrap-->
      <?php } ?>

      <div id="pageBody">
        <div id="contents">
