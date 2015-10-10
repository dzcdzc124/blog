<?php
/**
 * 站点首页模板
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}
?>
<div id="content" class="container">
<div id="contentleft">
<?php doAction('index_loglist_top'); ?>

<?php
if (!empty($logs)):
foreach($logs as $value):
?>
<div class="m-post">
	<h2 class="title"><?php topflg($value['top']); ?><a href="<?php echo $value['log_url']; ?>"><?php echo $value['log_title']; ?></a></h2>
	<?php //echo $value['log_description']; ?>
	<div class="info box">
		<a class="date" href="<?php echo $value['log_url']; ?>"><?php echo gmdate('Y-n-j', $value['date']); ?></a>
	</div>
</div>
<?php
endforeach;
else:
?>
<div class="m-post">
	<h2>未找到</h2>
	<p>抱歉，没有符合您查询条件的结果。</p>
</div>
<?php endif;?>

<div id="pagenavi">
	<?php echo $page_url;?>
</div>

</div><!-- end #contentleft-->
<?php
 include View::getView('footer');
?>