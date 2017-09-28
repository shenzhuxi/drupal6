<?php
// $Id: page.tpl.php,v 1.18.2.1 2009/04/30 00:13:31 goba Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    <?php print $head ?>
    <title><?php print $head_title ?></title>
    <?php print $styles ?>
    <?php print $scripts ?>
    <script type="text/javascript" src="<?php print base_path().path_to_theme(); ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php print base_path().path_to_theme(); ?>/js/custom.js"></script>
    <script type="text/javascript">
    $(function() {
			var today = new Date();
			var solarYear = today.getFullYear();
			var solarMonth = today.getMonth() + 1;
			var solarDate = today.getDate();
			var weekday = today.getDay();
			var d = new Array("星期日","星期一","星期二","星期三","星期四","星期五","星期六");
			var dateString = solarYear+"年"+solarMonth+"月"+solarDate+"日  "+d[weekday];
			
					
			$(".hr_left").html(dateString);
    });
    </script>
  </head>
<body>
<div id="wrapper">
  <div id="header_region">
    <div class="hr_left">
    </div>
    <div class="hr_right">
      <div id="languages">
        <?php print $language_box; ?>
      </div>
    </div>
  </div>
  <!-- end header_region -->
  <div class="header_space"></div>
  <!-- end header -->   
  <div id="content">
    <div id="left">
      <?php print $left ?>
    </div>
    <div id="main">
      <div class="top">
         <div id="breadcrumb"><?php print $breadcrumb; ?></div>
      </div>
      <div class="main_content">
        <?php if ($mission): print '<div id="mission">'. $mission .'</div>'; endif; ?>
          <?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
         
          <?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif; ?>
          <?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
          <?php if ($show_messages && $messages): print $messages; endif; ?>
          <?php print $help; ?>
          <div class="clear-block">
            <?php print $content ?>
          </div>
          <?php print $feed_icons ?>
      </div>
    </div>
  </div>
  
 <div id="header">
    <div class="logo"><a href="<?php print check_url($front_page); ?>"><img src="<?php print check_url($logo); ?>" alt="<?php print $site_title ?>" /></a></div>
    <div id="search"><a class="search_icon" href="<?php print base_path()?>search/"><?php print t("搜索");?></a></div>
    <div id="nav">
      <ul>
        <li class="expand"><a href="javascript: void(0);"><?php print t("虫洞印象")?></a>
          <div class="poplink">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><a href="<?php print base_path(); ?>about"><img src="<?php print base_path().path_to_theme(); ?>/images/100.jpg" width="100" height="75" alt="<?php print t("公司介绍")?>" /><span><?php print t("公司介绍")?></span></a></td>
                <td><a href="<?php print base_path(); ?>certificate"><img src="<?php print base_path().path_to_theme(); ?>/images/020.jpg" width="100" height="75" alt="<?php print t("资质证书")?>" /><span><?php print t("资质证书")?></span></a></td>
                <td><a href="<?php print base_path(); ?>leader"><img src="<?php print base_path().path_to_theme(); ?>/images/003.jpg" width="100" height="75" alt="<?php print t("领导关怀")?>" /><span><?php print t("领导关怀")?></span></a></td>
                <td><a href="<?php print base_path(); ?>teams"><img src="<?php print base_path().path_to_theme(); ?>/images/004.jpg" width="100" height="75" alt="<?php print t("管理团队")?>" /><span><?php print t("管理团队")?></span></a></td>
                <td><a href="<?php print base_path(); ?>consultant"><img src="<?php print base_path().path_to_theme(); ?>/images/101.jpg" width="100" height="75" alt="<?php print t("顾问委员会")?>" /><span><?php print t("顾问委员会")?></span></a></td>
                <td><a href="<?php print base_path(); ?>partner"><img src="<?php print base_path().path_to_theme(); ?>/images/005.jpg" width="100" height="75" alt="<?php print t("合作单位")?>" /><span><?php print t("合作单位")?></span></a></td>
              </tr>
            </table> 
          </div>
        </li>
        <li class="expand"><a href="javascript: void(0);"><?php print t("虫洞新闻")?></a>
          <div class="poplink">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><a href="<?php print base_path(); ?>companynews"><img src="<?php print base_path().path_to_theme(); ?>/images/102.jpg" width="100" height="75" alt="<?php print t("公司新闻")?>" /><span><?php print t("公司新闻")?></span></a></td>
                <td><a href="<?php print base_path(); ?>businessnews"><img src="<?php print base_path().path_to_theme(); ?>/images/103.jpg" width="100" height="75" alt="<?php print t("行业新闻")?>" /><span><?php print t("行业新闻")?></span></a></td>
                <td><a href="<?php print base_path(); ?>events"><img src="<?php print base_path().path_to_theme(); ?>/images/007.jpg" width="100" height="75" alt="<?php print t("公司大事件")?>" /><span><?php print t("公司大事件")?></span></a></td>
              </tr>
            </table> 
          </div>
        </li>
        <li class="expand"><a href="javascript: void(0);"><?php print t("虫洞公益")?></a>
          <div class="poplink">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><a href="<?php print base_path(); ?>plan1"><img src="<?php print base_path().path_to_theme(); ?>/images/010.jpg" width="100" height="75" alt="<?php print t("3%公益行动计划")?>" /><span><?php print t("3%公益行动计划")?></span></a></td>
                <td><a href="<?php print base_path(); ?>plan2"><img src="<?php print base_path().path_to_theme(); ?>/images/011.jpg" width="100" height="75" alt="<?php print t("向日葵爱芯医院计划")?>" /><span><?php print t("向日葵爱芯医院计划")?></span></a></td>
                <td><a href="<?php print base_path(); ?>other_plan"><img src="<?php print base_path().path_to_theme(); ?>/images/012.jpg" width="100" height="75" alt="<?php print t("其他公益行动计划")?>" /><span><?php print t("其他公益行动计划")?></span></a></td>
              </tr>
            </table> 
          </div>
        </li>
        <li class="expand"><a href="javascript: void(0);"><?php print t("虫洞产品")?></a>
          <div class="poplink">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><a href="<?php print base_path(); ?>tech_server"><img src="<?php print base_path().path_to_theme(); ?>/images/015.jpg" width="100" height="75" alt="<?php print t("科研服务")?>" /><span><?php print t("科研服务")?></span></a></td>
                <td><a href="<?php print base_path(); ?>medical_server"><img src="<?php print base_path().path_to_theme(); ?>/images/016.jpg" width="100" height="75" alt="<?php print t("医学服务")?>" /><span><?php print t("医学服务")?></span></a></td>
                <td><a href="<?php print base_path(); ?>software"><img src="<?php print base_path().path_to_theme(); ?>/images/017.jpg" width="100" height="75" alt="<?php print t("软件与数据库")?>" /><span><?php print t("软件与数据库")?></span></a></td>
                <td><a href="<?php print base_path(); ?>property"><img src="<?php print base_path().path_to_theme(); ?>/images/018.jpg" width="100" height="75" alt="<?php print t("虫洞产权交易中心")?>" /><span><?php print t("虫洞产权交易中心")?></span></a></td>
                <td><a href="<?php print base_path(); ?>onsite-service"><img src="<?php print base_path().path_to_theme(); ?>/images/019.jpg" width="100" height="75" alt="<?php print t("对外技术服务")?>" /><span><?php print t("对外技术服务")?></span></a></td>
              </tr>
            </table> 
          </div>
        </li>
        <li class="expand"><a href="javascript: void(0);"><?php print t("虫洞研究")?></a>
           <div class="poplink">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><a href="<?php print base_path(); ?>patents"><img src="<?php print base_path().path_to_theme(); ?>/images/104.jpg" width="100" height="75" alt="<?php print t("知识产权")?>" /><span><?php print t("知识产权")?></span></a></td>
                <td><a href="<?php print base_path(); ?>articles"><img src="<?php print base_path().path_to_theme(); ?>/images/021.jpg" width="100" height="75" alt="<?php print t("科学文献")?>" /><span><?php print t("科学文献")?></span></a></td>
                <td><a href="<?php print base_path(); ?>achievement"><img src="<?php print base_path().path_to_theme(); ?>/images/013.jpg" width="100" height="75" alt="<?php print t("虫洞成果")?>" /><span><?php print t("虫洞成果")?></span></a></td>
              </tr>
            </table> 
          </div>
        </li>
        <li class="expand"><a href="javascript: void(0);"><?php print t("虫洞文化")?></a>
          <div class="poplink">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><a href="<?php print base_path(); ?>brand"><img src="<?php print base_path().path_to_theme(); ?>/images/logo.jpg" width="100" height="75" alt="<?php print t("虫洞品牌")?>" /><span><?php print t("虫洞品牌") ?></span></a></td>
                <td><a href="<?php print base_path(); ?>culture"><img src="<?php print base_path().path_to_theme(); ?>/images/009.jpg" width="100" height="75" alt="<?php print t("虫洞文化")?>" /><span><?php print t("虫洞文化") ?></span></a></td>
                <td><a href="<?php print base_path(); ?>world"><img src="<?php print base_path().path_to_theme(); ?>/images/001.gif" width="100" height="75" alt="<?php print t("虫洞国际")?>" /><span><?php print t("虫洞国际")?></span></a></td>
              </tr>
            </table> 
          </div>
        </li>
      </ul>
    </div>
  </div>
  
  <div id="footer"><?php print theme('links', $secondary_links, array('class' => 'links secondary-links')) ?> <?php print $footer_message . $footer ?> </div>
</div>
<?php print $closure ?>
</body>
</html>
