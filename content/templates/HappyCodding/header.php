<?php
/*
Template Name: Happy Codding
Description: 完全响应式，为代码而生！
Version: 0.1.0
Author: JohnLui
Author Url: http://lvwenhan.com
Sidebar Amount: 0
*/
if(!defined('EMLOG_ROOT')) {exit('error!');}
require_once View::getView('module');
?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="<?php echo $site_key ?>" />
  <meta name="description" content="<?php echo $site_description ?>" />
  <title><?php echo $site_title ?></title>
  <link rel="alternate" type="application/rss+xml" title="RSS"  href="<?php echo BLOG_URL ?>rss.php" />
  <script src="<?php echo BLOG_URL ?>include/lib/js/common_tpl.js"></script>

  <link href="http://libs.baidu.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo TEMPLATE_URL ?>main.css" rel="stylesheet" type="text/css" />

  <script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://libs.baidu.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="<?php echo TEMPLATE_URL ?>main.js"></script>

  <?php doAction('index_head'); ?>
</head>
<body>
  <div id="wrap">
    <div id="header">

      <a href="<?php echo BLOG_URL ?>">
        <img src="<?php echo TEMPLATE_URL ?>images/logo.png" id="logo" alt="LOGO">

        <h1 id="title">
            <?php echo $blogname ?>
        </h1>
      </a>

      <h3 id="slogan"><?php echo $bloginfo ?></h3>

    </div> <!-- end of #header -->

    <div id="nav" class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-default" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo BLOG_URL ?>"><?php echo $blogname ?></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <?php blog_navi();?>
              <form class="navbar-form navbar-right" role="search" action="<?php echo BLOG_URL ?>index.php" method="GET">
                <div class="form-group">
                  <input type="text" name="keyword" class="form-control" placeholder="Search">
                  <a href="<?php echo BLOG_URL.'rss.php' ?>" id="rss">
                    <img src="<?php echo TEMPLATE_URL ?>images/rss.png" alt="RSS">
                  </a>
                </div>
              </form>
              <span class="icon-bar"></span>
            </div>
          </div>
        </nav>

      </div>
    </div>