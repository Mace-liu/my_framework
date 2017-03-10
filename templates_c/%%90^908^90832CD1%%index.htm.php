<?php /* Smarty version 2.6.26, created on 2015-07-13 15:37:02
         compiled from Letter/index.htm */ ?>
<style type="text/css">
.letter_list{background-color:#CCCCCC;width:500px;height:100px;margin-top:5px;}
.username{float:left}
.time{float:left;margin-left:10px}
.letter_content{margin-top:5px}
</style>
<div>我收到的信：</div>

<?php unset($this->_sections['l']);
$this->_sections['l']['name'] = 'l';
$this->_sections['l']['loop'] = is_array($_loop=$this->_tpl_vars['letter']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<div class="letter_list">
<div class="title"><h3><?php echo $this->_tpl_vars['letter'][$this->_sections['l']['index']]['title']; ?>
</h3></div>
<div style="margin-top:5px">
<div class="username">来自 <a href="index.php?controller=my&userid=<?php echo $this->_tpl_vars['letter'][$this->_sections['l']['index']]['f_id']; ?>
"><?php echo $this->_tpl_vars['letter'][$this->_sections['l']['index']]['f_id']; ?>
</a></div>
<div class="time"><?php echo $this->_tpl_vars['letter'][$this->_sections['l']['index']]['time']; ?>
</div>
</div>
&nbsp;<div class="letter_content"><?php echo $this->_tpl_vars['letter'][$this->_sections['l']['index']]['content']; ?>
</div>
</div>
<?php endfor; endif; ?>



