<?php 
include('header.php');
?>
<title>phpzag.com : Demo Create Dynamic Bootstrap Tabs with PHP & MySQL</title>
<link type="text/css" rel="stylesheet" href="style.css" />
<?php include('container.php');?>
<div class="container">	
	<h2>Example: Create Dynamic Bootstrap Tabs with PHP & MySQL</h2>	
	<br><br>
	<?php include_once("tabs.php"); ?>
	<ul class="nav nav-tabs">
	<?php echo $category_html; ?>
	</ul>	
	<div class="tab-content">
	<?php echo $product_html; ?>
	</div>	
	<br>
	<div style="margin:50px 0px 0px 0px;">
		<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="http://www.phpzag.com/create-dynamic-bootstrap-tabs-with-php-mysql">Back to Tutorial</a>		
	</div>	
</div>
<?php include('footer.php');?>
