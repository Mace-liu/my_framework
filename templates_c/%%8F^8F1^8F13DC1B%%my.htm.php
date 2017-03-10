<?php /* Smarty version 2.6.26, created on 2015-07-12 14:01:17
         compiled from my.htm */ ?>
<html>
<head>
<meta content="text/html; charset=utf8">
<link href="<?php echo $this->_tpl_vars['t_dir']; ?>
css/my.css" rel="stylesheet" type="text/css" />

</head>



<div class="main" style="margin-left:100px">


<div><img style="width:200px;height:200px" src="<?php echo $this->_tpl_vars['user_data']['img_url']; ?>
"></div>
<?php echo $this->_tpl_vars['userimg']; ?>

<table width="410" border="0">
	
  <tr>
    <td width="88">用&nbsp;户&nbsp;名：</td>
    <td width="168"><?php echo $this->_tpl_vars['user_data']['username']; ?>
</td>
    <td id="u_check" style="display:none" width="140">111111&nbsp;</td>
  </tr>
  
 
  <tr>
    <td>昵&nbsp;&nbsp;&nbsp;&nbsp;称：</td>
    <td><?php echo $this->_tpl_vars['user_data']['name']; ?>
</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>运&nbsp;&nbsp;&nbsp;&nbsp;动：</td>
    <td><?php echo $this->_tpl_vars['sports']; ?>
</td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td>注册时间：</td>
    <td><?php echo $this->_tpl_vars['reg_time']; ?>
</td>
    <td>&nbsp;</td>
  </tr>
  
  
</table>
<?php echo $this->_tpl_vars['userinfo']; ?>

<?php echo $this->_tpl_vars['sendletter']; ?>


</div>





</html>