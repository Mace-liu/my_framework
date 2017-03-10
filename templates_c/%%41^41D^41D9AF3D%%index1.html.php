<?php /* Smarty version 2.6.26, created on 2015-07-12 07:28:45
         compiled from index1.html */ ?>

<link href="<?php echo $this->_tpl_vars['t_dir']; ?>
css/index_layout.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function message_check(){
	var date_title = document.getElementById("date_title");
	var date_time = document.getElementById("date_time");
	var date_place = document.getElementById("date_place");
	var date_numbers = document.getElementById("date_numbers");
	
	if(date_title.value.length<2){
	  alert('标题应大于两个字符！');
	}
	else if(date_time.value.length<2){
	  alert('时间应大于两个字符！');
	}
	else if(date_place.value.length<2){
	  alert('地点应大于两个字符！');
	}
	else if(date_numbers.value.length<1){
	  alert('请填写需要人数！');
	}
	



}

</script>
<body>


<div id="main">

<div>
	<form name="post_message" action="" method="post">

	<div style="padding-top:55px">
		运动种类&nbsp;:&nbsp;<select name="s_id">
		<option value="1">足球</option>
		<option value="2">篮球</option>
		<option value="3">台球</option>
		<option value="4">乒乓球</option>
		</select>
		标题&nbsp;:&nbsp;<input type="text" name="date_title" id="date_title"/>
	</div>
	<div style="padding-top:10px">
		时&nbsp;&nbsp;&nbsp;&nbsp;间&nbsp;:&nbsp;<input type="text" name="date_time" id="date_time"/>
		地点&nbsp;:&nbsp;<input type="text" name="date_place" id="date_place"/>
		人数&nbsp;:&nbsp;<input type="text" name="date_numbers" id="date_numbers"/>
	</div>

	<div style="margin-top:10px;margin-bottom:10px">
		<div style="float:left;margin-top:5px;wi">详细信息&nbsp;:&nbsp;</div><textarea id="date_remark"  name="date_remark" style="border:solid 1px;margin-top:5px;width:600px;height:100px;font-size: 15px;font-family: 黑体;"></textarea>
		<input type="submit" onClick="message_check()" value="发布"/>
	</div>
	</form>
</div>


<hr/>

<div id="list_message">



<?php unset($this->_sections['l']);
$this->_sections['l']['name'] = 'l';
$this->_sections['l']['loop'] = is_array($_loop=$this->_tpl_vars['feed']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<div>
<div><img class="list_message_avatar" src="<?php echo $this->_tpl_vars['feed'][$this->_sections['l']['index']]['img_url']; ?>
"></div>
<div class="list_message_content">
<div class="list_message_header"><a href="index.php?controller=my&userid=<?php echo $this->_tpl_vars['feed'][$this->_sections['l']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['feed'][$this->_sections['l']['index']]['name']; ?>
</a> 发布了求战信息  <?php echo $this->_tpl_vars['feed'][$this->_sections['l']['index']]['time_r']; ?>
</div>
<div class="list_message_title"><p><?php echo $this->_tpl_vars['feed'][$this->_sections['l']['index']]['date_title']; ?>
</p></div>
<div class="list_message_note">项目:<a href="index.php?controller=search"><!--  利用搜索显示对应项目相关信息  --> <?php echo $this->_tpl_vars['feed'][$this->_sections['l']['index']]['cname']; ?>
</a> | 时间:<?php echo $this->_tpl_vars['feed'][$this->_sections['l']['index']]['date_time']; ?>
 | 地点:<?php echo $this->_tpl_vars['feed'][$this->_sections['l']['index']]['date_place']; ?>
 | 需要人数:<?php echo $this->_tpl_vars['feed'][$this->_sections['l']['index']]['date_numbers']; ?>
人</div>
<div class="list_message_remark">详细说明：<?php echo $this->_tpl_vars['feed'][$this->_sections['l']['index']]['date_remark']; ?>
</div>
<div class="list_message_header"><a href="#">我要应战</a> <a href="#">相关评论</a></div>
</div>
</div>

<hr id="message"/>

<?php endfor; endif; ?>





</div>

<div id="right_banner">right_banner</div>

</div>
<hr id="message"/>
<a href="http://www.baidu.com"><div id="banner">banner</div></a>

</body>