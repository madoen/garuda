<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 */
?>
<topbar class="container-full topbar">
  <div class="col-sm-10" id="header">
    <?php print render($page['header']); ?>
    <p class="text-top">PENGUMUMAN : Lorem ipsum is simply dummy text of the printing and typesetting industry and has been the industry's standard dummy text ever since the 1500s.</p>
  </div>

  <div class="col-sm-2">
    <?php if (!empty($secondary_nav)): ?>
      <?php print render($secondary_nav); ?>
    <?php endif; ?>
  </div>
</topbar>
<!-- <header id="navbar" role="banner" class="<?php print $navbar_classes; ?>"> -->
<header id="navbar" role="banner" class=" container-full navbar-default">
  <div class="container">
    <div class="navbar-header">
      <?php if ($logo): ?>
      <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
      <?php endif; ?>

     <!--<?php if (!empty($site_name)): ?>
      <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
      <?php endif; ?>-->

      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!--<?php if (!empty($primary_nav)): ?>
      <div class="navbar-collapse collapse">
        <nav role="navigation">
          <?php if (!empty($primary_nav)): ?>
            <?php print render($primary_nav); ?>
          <?php endif; ?>
        </nav>
      </div>
    <?php endif; ?>-->

    <?php if ($main_menu || $secondary_menu): ?>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <nav role="navigation">
          <?php if ($main_menu || $secondary_menu): ?>
            <?php print theme('links__system_main_menu', array('links'=> $main_menu)); ?>
          <?php endif; ?>
        </nav>
      </div>
    <?php endif; ?>
  </div>
</header>

<div class="container-full grei-bg">
  <div class="top-header">
    <div class="col-lg-12 text-center" style="padding-top: 9%;">
        <?php if ($site_slogan): ?>
          <div id="site-slogan"<?php if ($hide_site_slogan) { print ' class="element-invisible"'; } ?>>
            <?php print $site_slogan; ?>
          </div>
        <?php endif; ?>
        <?php
            $garuda_width = theme_get_setting('garuda_width');
            print $garuda_width;
        ?>
    </div>
  </div>
  <div class="container">
    <div class="row col-lg-12">
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
    </div>

    <div class="container col-lg-12">

      <div class="col-xs-12 col-md-6 col-lg-3" id="page_top1">
        <div class="yelows"><?php print render($page['page_top1']); ?></div>
      </div>

      <div class="col-xs-12 col-md-6 col-lg-3" id="page_top2">
        <div class="pinks"><?php print render($page['page_top2']); ?></div>
      </div>

      <div class="col-xs-12 col-md-6 col-lg-3" id="page_top3">
        <div class="toskas"><?php print render($page['page_top3']); ?></div>
      </div>

      <div class="col-xs-12 col-md-6 col-lg-3" id="page_top4">
        <div class="oranges"><?php print render($page['page_top4']); ?></div>
      </div>

    </div>
    <br><br>
    <div class="row col-lg-12">

      <div class="col-sm-4" id="gallery1">
        <div class="galery-toska">
          <div class="imgtoska"></div>
          <h4>ARTIKEL DRUPAL</h4>
        <div class="contents"><?php print render($page['gallery1']); ?></div>
      </div>
      </div>

      <div class="col-sm-4" id="gallery2">
        <div class="galery-orange">
          <div class="imgorange"></div>
          <h4>GALERI WEBSITE</h4>
        <div class="contents"><?php print render($page['gallery2']); ?></div>
        </div>
      </div>

      <div class="col-sm-4" id="gallery3">
        <div class="galery-red">
          <div class="imgred"></div>
          <h4>STUDI KASUS</h4>
        <div class="contents"><?php print render($page['gallery3']); ?></div>
        </div>
      </div>

    </div>

    <?php if (!empty($page['help'])): ?>
      <div class="row col-lg-12" id="help">
        <?php print render($page['help']); ?>
      </div>
    <?php endif; ?>

    <div class="row col-lg-12">

      <?php if (!empty($page['sidebar_first'])): ?>
        <aside class="col-sm-3" role="complementary">
          <?php print render($page['sidebar_first']); ?>
        </aside>  <!-- /#sidebar-first -->
      <?php endif; ?>

      <section<?php print $content_column_class; ?>>
        <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if (!empty($title)): ?>
          <h1 class="page-header"><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php print $messages; ?>
        <?php if (!empty($tabs)): ?>
          <?php print render($tabs); ?>
        <?php endif; ?>
        <?php if (!empty($action_links)): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        <?php print render($page['content']); ?>
      </section>

      <?php if (!empty($page['sidebar_second'])): ?>
        <aside class="col-sm-3" role="complementary">
          <?php print render($page['sidebar_second']); ?>
        </aside>  <!-- /#sidebar-second -->
      <?php endif; ?>
    </div>

    <div class="row col-lg-12">

      <div class="col-xs-12 col-md-6 col-lg-3" id="page_bottom1">
        <div class="page-btm">
          <h3 class="page">DRUPAL CORE</h3>
          <div class="contents"><?php print render($page['page_bottom1']); ?></div>
        </div>
      </div>

      <div class="col-xs-12 col-md-6 col-lg-3" id="page_bottom2">
        <div class="page-btm">
          <h3 class="page">DRUPAL THEMES</h3>
          <div class="contents"><?php print render($page['page_bottom2']); ?></div>
        </div>
      </div>

      <div class="col-xs-12 col-md-6 col-lg-3" id="page_bottom3">
        <div class="page-btm">
          <h3 class="page">DRUPAL MODULES</h3>
        <div class="contents"><?php print render($page['page_bottom3']); ?></div>
      </div>
      </div>

      <div class="col-xs-12 col-md-6 col-lg-3" id="page_bottom4">
        <div class="page-btm">
          <h3 class="page">DRUPAL DISTRIBUTION</h3>
          <div class="contents"><?php print render($page['page_bottom4']); ?></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-full footer grey-light">
<footer class="container">
  <div class="col-lg-12 text-center">
      <h4 class="white-txt">FORUM TOPIC</h4>
  </div>
  <div class="row col-lg-12">

    <div class="col-xs-12 col-sm-6" id="footer_top1">
      <div class="foot-top-pink"><?php print render($page['footer_top1']); ?></div>
    </div>

    <div class="col-xs-12 col-sm-6" id="footer_top2">
      <div class="foot-top-yellow"><?php print render($page['footer_top2']); ?></div>
    </div>

  </div>

  <div class="row col-lg-12">

    <div class="col-xs-12 col-sm-6" id="footer_top3">
      <div class="foot-top-toska"><?php print render($page['footer_top3']); ?></div>
    </div>

    <div class="col-xs-12 col-sm-6" id="footer_top4">
      <div class="foot-top-orange"><?php print render($page['footer_top4']); ?></div>
    </div>

  </div>

  <div class="row col-lg-12" id="footer">
    <div class="col-lg-12 line-foot"></div>
    <?php print render($page['footer']); ?>
    <div class="soc-med">
        <?php $garuda_fb = theme_get_setting('garuda_fb'); ?>
        <a href="<?php isset($garuda_fb) ? print($garuda_fb) : print('http://www.facebook.com');?>" target="_blank" class="fb"></a>
        <?php $garuda_twit = theme_get_setting('garuda_twit'); ?>
        <a href="<?php isset($garuda_twit) ? print($garuda_twit) : print('http://www.twitter.com');?>" target="_blank" class="twit"></a>
        <?php $garuda_utube = theme_get_setting('garuda_utube'); ?>
        <a href="<?php isset($garuda_utube) ? print($garuda_utube) : print('http://www.youtube.com');?>" target="_blank" class="utube"></a>
        <?php $garuda_g = theme_get_setting('garuda_g'); ?>
        <a href="<?php isset($garuda_g) ? print($garuda_g) : print('http://www.plus.google.com');?>" target="_blank" class="g"></a>
        <?php $garuda_skype = theme_get_setting('garuda_skype'); ?>
        <a href="<?php isset($garuda_skype) ? print($garuda_skype) : print('http://www.skype.com');?>" target="_blank" class="skype"></a>
        <?php $garuda_github = theme_get_setting('garuda_github'); ?>
        <a href="<?php isset($garuda_github) ? print($garuda_github) : print('http://www.github.com');?>" target="_blank" class="github"></a>
        <?php $garuda_rss = theme_get_setting('garuda_rss'); ?>
        <a href="<?php isset($garuda_rss) ? print($garuda_rss) : print('http://www.rss.com');?>" target="_blank" class="rss"></a>
      </div>
  </div>

  <div class="row col-lg-12 copyrgt" id="copyright">
    <?php print render($page['copyright']); ?>
  </div>
</footer>
</div>
