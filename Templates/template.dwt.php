<!DOCTYPE html>
<html>
<head>

<!-- TemplateBeginEditable name="doctitle" -->
<title>Nancin Christ Standard School
<?php 

if(isset($main_page))
{
	echo" : $main_page";
}

if(isset($sub_page))
{
	echo" : ($sub_page)";
}

?>

</title>
<!-- TemplateEndEditable -->
<link href="../styles.css" rel="stylesheet" type="text/css" />
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
</head>

<body>
<div id="header">
<h1>Payroll</h1>
</div>
<div id="content">

    <?php
		if($main_page!="Login" && isset($_SESSION['current_user']))  
		{
			
			?>
            	<p align="right" style="border-bottom:solid 1px #ccc;"><b>User:</b> <?php echo $_SESSION['current_user'];?></p>
            <?php
		}
	?>
    
    
	<h1 align="center"> <?php echo $main_page; ?> </h1>
    <?php
		if(isset($_SESSION['message']))
		{
			?>
            	<p class="<?php echo $_SESSION['messagetype']; ?>"><?php echo $_SESSION['message']; ?></p>
            <?php
			unset($_SESSION['message'],$_SESSION['messagetype']);
		}
	?>
<!-- TemplateBeginEditable name="mycontent" -->put Content here <!-- TemplateEndEditable -->
</div>

</body>
</html>