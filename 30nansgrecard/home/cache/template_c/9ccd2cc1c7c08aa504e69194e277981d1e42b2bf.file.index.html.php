<?php /* Smarty version Smarty-3.1.14, created on 2016-11-17 03:05:48
         compiled from "E:\AppServ\www\16eleven\slotMachine\home\views\index.html" */ ?>
<?php /*%%SmartyHeaderCode:27111582d182a2b0d82-09785085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ccd2cc1c7c08aa504e69194e277981d1e42b2bf' => 
    array (
      0 => 'E:\\AppServ\\www\\16eleven\\slotMachine\\home\\views\\index.html',
      1 => 1479351900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27111582d182a2b0d82-09785085',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_582d182a35eb38_40694042',
  'variables' => 
  array (
    'imgArr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582d182a35eb38_40694042')) {function content_582d182a35eb38_40694042($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">
<meta content="no-cache,no-store,must-revalidate" http-equiv="Cache-Control">
<meta content="no-siteapp" http-equiv="Cache-Control"/>
<meta content="0" http-equiv="expires">
<meta content="telephone=no, address=no" name="format-detection">
<link href="public/css/reset.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="public/js/jquery-1.7.2-min.js"></script>
<script type="text/javascript" src="public/js/define.js"></script>
<title>xxxxx</title>
<?php echo $_smarty_tpl->getSubTemplate ("index_css.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</head>
<body>
	<!-- loadding -->
    <div id="loading_main">
		<p>Loading 0%</p>
	</div>
    <!-- 音乐 -->
    <div id="music">
        <audio id="mymusic" loop src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['mymusic'];?>
" style="pointer-events:none;display:none;width:0!important;height:0!important;"/>
    </div>
    <img id="music_img" src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['music'];?>
" onClick="controllMusic();"/>
	<!--  游戏页 -->
    <div id="game_main">
    	<!-- <img src="" /> -->
    </div>
    
    

</body>
</html>
<?php echo $_smarty_tpl->getSubTemplate ("index_js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>