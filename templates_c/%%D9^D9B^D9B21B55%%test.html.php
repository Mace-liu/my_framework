<?php /* Smarty version 2.6.26, created on 2017-03-10 16:13:23
         compiled from test.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>


<?php echo $this->_tpl_vars['test_data']; ?>


<div>{$sm_class[2].name}</div>

{section name=l loop=$sm_class}
		 <li><a href="list.php?id={$sm_class[l].id}">{$sm_class[l].name}</a></li>
{/section}



</body>
</html>