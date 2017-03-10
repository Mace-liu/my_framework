<?php /* Smarty version 2.6.26, created on 2015-07-13 13:59:21
         compiled from common/head.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title><?php echo $this->_tpl_vars['sm_config'][0]; ?>
</title>
<link href="<?php echo $this->_tpl_vars['t_dir']; ?>
css/common.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_tpl_vars['t_dir']; ?>
css/layout.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_tpl_vars['t_dir']; ?>
css/red.css" rel="stylesheet" type="text/css" />
</head>



<div class="content dgreen-bg">

     <div class="content">
	 <ul id="main_nav">
	 <li class="nobg"><a href="index.php"><img src="templates/img/logo.png"></a></li>
	 <li class="nobg"><a href="index.php">首页</a></li>

       
	<?php unset($this->_sections['l']);
$this->_sections['l']['name'] = 'l';
$this->_sections['l']['loop'] = is_array($_loop=$this->_tpl_vars['sm_class']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['l']['show'] = true;
$this->_sections['l']['max'] = $this->_sections['l']['loop'];
$this->_sections['l']['step'] = 1;
$this->_sections['l']['start'] = $this->_sections['l']['step'] > 0 ? 0 : $this->_sections['l']['loop']-1;
if ($this->_sections['l']['show']) {
    $this->_sections['l']['total'] = $this->_sections['l']['loop'];
    if ($this->_sections['l']['total'] == 0)
        $this->_sections['l']['show'] = false;
} else
    $this->_sections['l']['total'] = 0;
if ($this->_sections['l']['show']):

            for ($this->_sections['l']['index'] = $this->_sections['l']['start'], $this->_sections['l']['iteration'] = 1;
                 $this->_sections['l']['iteration'] <= $this->_sections['l']['total'];
                 $this->_sections['l']['index'] += $this->_sections['l']['step'], $this->_sections['l']['iteration']++):
$this->_sections['l']['rownum'] = $this->_sections['l']['iteration'];
$this->_sections['l']['index_prev'] = $this->_sections['l']['index'] - $this->_sections['l']['step'];
$this->_sections['l']['index_next'] = $this->_sections['l']['index'] + $this->_sections['l']['step'];
$this->_sections['l']['first']      = ($this->_sections['l']['iteration'] == 1);
$this->_sections['l']['last']       = ($this->_sections['l']['iteration'] == $this->_sections['l']['total']);
?>
	<li class="nobg"><a href="index.php?controller=list&id=<?php echo $this->_tpl_vars['sm_class'][$this->_sections['l']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['sm_class'][$this->_sections['l']['index']]['name']; ?>
</a></li>
    <?php endfor; endif; ?>
	   
    <?php if ($this->_tpl_vars['sm_username']): ?>
	<li style="float:right;width:40px;" id="user_data">  <a href="index.php?controller=letter&action=index">信件</a></li>
	<li style="float:right;width:40px;" id="user_data">  <a href="index.php?controller=login&action=logout">退出</a></li>
	<li style="float:right;width:70px">  <a id="user_name" href="index.php?controller=my&userid=<?php echo $this->_tpl_vars['sm_username']['id']; ?>
"><?php echo $this->_tpl_vars['sm_username']['name']; ?>
</a></li>
	<li style="float:right;width:20px"> <img id="user_img_small"  src="<?php echo $this->_tpl_vars['sm_username']['img_url']; ?>
" name="logo"  />
	<?php else: ?>
	<li style="float:right;width:40px">   <a href="index.php?controller=login&action=login">登录</a></li>
	<?php endif; ?>
	</ul><br class="clear" />
	 </div>
	 
</div>
<div style="width:100%;height:50px" ></div>
