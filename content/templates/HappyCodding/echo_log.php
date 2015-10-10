<?php
/**
 * 阅读文章页面
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}
?>
<div id="content" class="container">
<div id="contentleft">
  <div class="m-post">
    <h2 class="title"><?php topflg($top); ?><a href="<?php echo $value['log_url']; ?>"><?php echo $log_title; ?></a></h2>

    <?php echo $log_content; ?>

    <?php doAction('log_related', $logData); ?>

    <div id="article-info">
      <div class="tag little"><?php blog_tag($logid); ?></div>
      <div class="date little"><?php echo gmdate('Y.n.j', $date); ?>
      <span>&nbsp;&nbsp;/&nbsp;&nbsp;</span> 热度：<?php echo $views; ?> <span>&nbsp;&nbsp;/&nbsp;&nbsp;</span> 分类：<?php blog_sort($logid); ?><?php editflg($logid,$author); ?>
      </div>
    </div>

    <div class="nextlog"><?php neighbor_log($neighborLog); ?></div>

    <?php blog_comments($comments); ?>
    <?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>

    <div style="clear:both;"></div>
  </div>
</div><!--end #contentleft-->
<?php
 include View::getView('footer');
?>