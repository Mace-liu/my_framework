<?php /* Smarty version 2.6.26, created on 2015-07-12 15:07:46
         compiled from sendletter.htm */ ?>



<form name="sendletter" method="post" action="index.php?controller=letter&action=send&targetid=<?php echo $this->_tpl_vars['target_data']['id']; ?>
">
<div>给<a href="index.php?controller=my&userid=<?php echo $this->_tpl_vars['target_data']['id']; ?>
"> <?php echo $this->_tpl_vars['target_data']['name']; ?>
</a> 的信件：</div>
<div>标 题：<input type="text" name="title" id="tittle" /></div>

<div>
<div style="float:left;margin-top:5px">内 容：</div>
<div style="float:left;margin-top:5px"><textarea id="content"  name="content" style="border:solid 1px;width:600px;height:100px;font-size: 15px;font-family: 黑体;">
</textarea></div>
</div>
   

<div style="float:none"><input type="submit" name="submit" id="submit" value="发信"/></div>

</form>



