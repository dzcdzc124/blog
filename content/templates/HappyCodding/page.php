<?php
/**
 * 自建页面模板
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}
?>
<div id="content" class="container">
<div id="contentleft">
  <div class="m-post">
  	<h2 class="title"><a href="<?php echo $value['log_url']; ?>"><?php echo $log_title; ?></a></h2>
  	<?php echo $log_content; ?>
  	<?php blog_comments($comments); ?>
  	<?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
  	<div style="clear:both;"></div>
  </div>
</div><!--end #contentleft-->
<?php
 include View::getView('footer');
?>