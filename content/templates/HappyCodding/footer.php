<?php
/**
 * 页面底部信息
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}
?>
</div><!--end #content-->
<div style="clear:both;"></div>

<div id="footerbar" class="container">
  <?php widget_link_foot('友情链接：'); ?>
    <a style="margin-left: 20px;" href="http://www.miibeian.gov.cn" target="_blank"><?php echo $icp; ?></a>
  </div>
  <div style="display: none;">
    <?php echo $footer_info ? $footer_info : '' ?>
  </div>
  <div class="m-cprt">
    &copy;<a href="<?php echo BLOG_URL; ?>"><?php echo $blogname; ?></a>
    &nbsp;|&nbsp;
    Powered by <a href="http://www.emlog.net/"  title="采用emlog系统" target="_blank">Emlog</a></div>
  <?php doAction('index_footer'); ?>
</div><!--end #footerbar-->

</div><!--end #wrap-->
</body>
</html>