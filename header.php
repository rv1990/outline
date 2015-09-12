<html>
<head>
	<style>
		<link rel="stylesheet" href="style.css" />
	</style>
	<script>
	var url = window.location.href;

// Will only work if string in href matches with location
$('.menu a[href="'+ url +'"]').addClass('active');

// Will also work for relative and absolute hrefs
$('.menu a').filter(function() {
    return this.href == url;
}).addClass('better-active');
	</script>
</head>
	<div class="header-nav1">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
				</div>
					<div class="col-md-6">
					<ul class="list-inline">
					    <li><a href="#">TOUR</a></li>
					    <li><a href="#">TEMPLATES</a></li>
					    <li><a href="#">EXPLORE></li>
					    <li><a href="#">PRICING</a></li>
				  	</ul>
				</div>
				<div class="col-md-3">
					<ul class="list-inline">
					    <li><a href="#">LOGIN</a></li>
				  	</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="header-nav2">
		<div class="container">
			<div class="row">
				<div class="col-md-2">
				</div>
					<div class="col-md-8">
					<ul id="cssmenu"  class="list-inline menu">
					    <li><a href="index.php">ENTREPRENEUR</a></li>
					    <li><a href="manager.php">MARKETTING MANAGER</a></li>
					    <li><a href="print.php">PRINT BUSSINESS</a></li>
					    <li><a href="education.php">SCHOOLS & COLLEGES</a></li>
				  	</ul>
				</div>
				<div class="col-md-2">
				</div>
			</div>
		</div>
	</div>
<html>