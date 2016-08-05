<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo ($item["item_name"]); ?> ShowDoc</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="/apidoc/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    @charset "utf-8";
	body {
		font:14px/1.5 "Microsoft Yahei","微软雅黑",Tahoma,Arial,Helvetica,STHeiti;
	}
    </style>
      <script type="text/javascript">
      var DocConfig = {
          host: window.location.origin,
          app: "<?php echo U('/');?>",
          pubile:"/apidoc/Public",
      }

      DocConfig.hostUrl = DocConfig.host + "/" + DocConfig.app;
      </script>
      <script src="/apidoc/Public/js/lang.<?php echo LANG_SET;?>.js?v=2"></script>
  </head>
  <body>
<link href="/apidoc/Public/highlight/default.min.css" rel="stylesheet"> 
<script src="/apidoc/Public/highlight/highlight.min.js"></script> 

<style type="text/css">
body{
	overflow-x:hidden;overflow-y:hidden;
	font-size: 1rem;
	line-height: 1.7em;
}

</style>
<h3 style="text-align: center;"><?php echo ($page["page_title"]); ?></h3>
<!-- 这里开始是内容 -->
<div class="" style="padding-top:10px;">

<?php echo ($page["page_content"]); ?>

</div>




    
	<script src="/apidoc/Public/js/common/jquery.min.js"></script>
    <script src="/apidoc/Public/bootstrap/js/bootstrap.min.js"></script>
    <script src="/apidoc/Public/js/common/showdoc.js?v=1.1"></script>
    <div style="display:none">
    	<?php echo C("STATS_CODE");?>
    </div>
  </body>
</html> 

<script src="/apidoc/Public/js/page/index.js"></script>