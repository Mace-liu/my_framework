<?php /* Smarty version 2.6.26, created on 2015-07-11 15:55:39
         compiled from list.htm */ ?>
<div class="main">

<div class="pages">
<h2>类别</h2>
<span>新闻标题</span>
<div id="more"><a href="#">时间</a></div>
</div>
<div class="pages">
<h2><?php echo $this->_tpl_vars['sm_myclass'][0]['myclass']; ?>
</h2>

</div>
<?php unset($this->_sections['l']);
$this->_sections['l']['name'] = 'l';
$this->_sections['l']['loop'] = is_array($_loop=$this->_tpl_vars['sm_mynews']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<div class="pages1">
<h2><?php echo $this->_tpl_vars['sm_mynews'][$this->_sections['l']['index']]['class']; ?>
</h2>
<span><a href="index.php?controller=view&id=<?php echo $this->_tpl_vars['sm_mynews'][$this->_sections['l']['index']]['id']; ?>
&cid=<?php echo $this->_tpl_vars['sm_mynews'][$this->_sections['l']['index']]['cid']; ?>
"><?php echo $this->_tpl_vars['sm_mynews'][$this->_sections['l']['index']]['title']; ?>
</sa></span>
<div id="more"><a href="#"><?php echo $this->_tpl_vars['sm_mynews'][$this->_sections['l']['index']]['time']; ?>
</a></div>
</div>
<?php endfor; endif; ?> <br class="clear" />
</div>
</div>

</div>>















<br class="clear" />
</div>
<div id="about">
<div class="content"><span class="left"><a href="#">网店首页</a>
| <a href="#">公司介绍</a> | <a href="#">资质认证</a> | <a href="#">产品展示</a> | <a
	href="#">视频网店</a> | <a href="#">招商信息</a> | <a href="#">招聘信息</a> | <a
	href="#">促销活动</a> | <a href="#">企业资讯</a> | <a href="#">联系我们</a></span> <span
	class="right">目前已有[134987775]次点击</span></div>
</div>
<p id="copyright">此模版由 <a href="http://www.psvi.net">视觉前沿</a>
收集整理--仅供学习参考 切勿用于商业用途</p>
</body>
</html>