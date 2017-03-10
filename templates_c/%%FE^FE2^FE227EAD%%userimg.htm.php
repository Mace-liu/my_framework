<?php /* Smarty version 2.6.26, created on 2015-07-11 16:05:16
         compiled from userimg.htm */ ?>
<html>
<head>
<meta content="text/html; charset=utf8">

</head>

<div class="main">

<div><img style="width:200px;height:200px"src="<?php echo $this->_tpl_vars['img']; ?>
"></div>

<form enctype="multipart/form-data" action="index.php?controller=userimg&submit=1" method="post">  
Send this file: <input name="filename" type="file">  
<input type="submit" value="确定上传">
</form>  

</div>



</html>