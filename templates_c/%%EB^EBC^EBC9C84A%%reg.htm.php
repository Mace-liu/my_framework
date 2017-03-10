<?php /* Smarty version 2.6.26, created on 2015-07-12 05:49:25
         compiled from reg.htm */ ?>
<head>
<meta content="text/html; charset=utf8">
<script>function check_user(){
	var username = document.getElementById("username");
	var password = document.getElementById("password");
	var password1 = document.getElementById("password1");
	if(username.value.length<=5) {
		alert("用户名应大于5个字符！");
	}
	if(password.value.length<=5) {
		alert("密码应大于5个字符！");
	}
	
	
}
</script>
</head>




<div class="main">
<form name="reg" method="post" action="index.php?controller=reg">
<table width="410" border="0">
  <tr>
    <td width="88">用&nbsp;户&nbsp;名：</td>
    <td width="168"><input type="username" name="username" id="username" /></td>
    <td id="u_check" style="display:none" width="140">111111&nbsp;</td>
  </tr>
  <tr>
    <td><div></div>
    <div>密&nbsp;&nbsp;&nbsp;&nbsp;码：</div></td>
    <td><input type="password" name="password" id="password" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>确认密码：</td>
    <td><input type="password" name="password1" id="password1" /></td>
    <td>&nbsp;</td>
  </tr>
</table>

<input type="submit" name="submit" id="submit" value="注册" onClick="check_user()" style="width:100px"/>
</form>
<a href="index.php?controller=reg">返回登录</a>

</div>

