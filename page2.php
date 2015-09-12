<!DOCTYPE html>
<html lang="en">
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
  	<link rel="stylesheet" href="style.css">
  	<script
		src="http://maps.googleapis.com/maps/api/js">
  	</script>
  	<script>
		function initialize() 
		{
		  var mapProp = {
		    center:new google.maps.LatLng(51.508742,-0.120850),
		    zoom:5,
		    mapTypeId:google.maps.MapTypeId.ROADMAP
		  };
		  var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
		}
		google.maps.event.addDomListener(window, 'load', initialize);
  </script>
  <style>
   p {
    font-family: proxima nova;
    font-size:15px;
   	 }
   li {
    font-family: proxima nova;
   	}
   h2 {
   	font-family:Raleway-SemiBold;
    font-size: 24px;
    padding-top:10px;
   }
  </style>
</head>
<body>
	<div style="background:#fff;" class = "header_nav">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-8" style = "margin-top:-2px;">
					<ul class="list-inline">
					    <li><a style="color:#555555;" href="#">TOUR</a></li>
					    <li><a style="color:#555555;" href="#">TEMPLATES</a></li>
					    <li><a style="color:#555555;" href="#">EXPLORE</a></li>
					    <li><a  style="color:#555555;" href="#">PRICING</a></li>
				  	</ul>
				</div>
				<div class="col-md-2">
					<div class = "link_login_contact">
					    <a href="#">LOGIN</a></li>
				  </div>
				</div>
			</div>
		</div>
	</div>
	<div class="page-content1">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<span>HAPPY TO GET IN TOUCH</span>
				</div>
				<img src = "30.3.15/underline.png" style = "margin-left:2px;margin-top:-10px;">
			</div>
		</div>
	</div>
	<div class=" ">
		<div class="container">
			<div class="row">
				<div style="text-align:center;" class="col-md-7">
					<img src="hello.png" />
				</div>
				<div class="col-md-5">
					<span style="font-size:20px;"> Lets Discuss</span>
					<p>Questions? Doubts? confusion? Spamming? Problem? Please fill out<br>
					 the form or send an email to info@raddish.in</p>
					<form>
						<p>YOUR NAME<br>
						<input  class="input" type="text" id="userName" name="userName" ><br>
						YOUR EMAIL<br>
						<input  class="input" type="text" id="userEmail" name="userEmail"  ><br>
						YOUR MESSAGE<br>
					</p>
						<input style="height:100px;" class="input" type="textarea" id="userMessage" name="userMessage"  ><br>
						<input class="submit" type="submit" id="submit" name="submit" value="Submit">
					</form>
				</div>
			</div>
		</div>
	</div>
	<img style="margin-top:20px;" src="imageline.gif">
	<div class="contact-grey">
		<div class="container">
			<div class="row">
				<div class="contact-grey-content">
					<h2> REQUEST A CUSTOM TEMPLATE</h2>
					<img src = "30.3.15/underline.png" style = "margin-left:2px;margin-top:-15px;">
					<p style="padding-top:20px;font-size:15px;">We can design a custom template for your brand and style. Give us your contact information and we will get in touch </p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					 <div class="form-group">
                      <label for="exampleInputEmail1">EMAIL ADDRESS</label>
                      <input type="email" class="form-control" id="exampleInputEmail1">
                    </div>
                </div>
                <div class = "col-md-6">
					<div class="form-group">
                      <label for="exampleInputEmail1">SUBJECT</label>
                      <input type="email" class="form-control" id="exampleInputEmail1">
                    </div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h5 style="margin-left:180px;text-align:left;color:#FFFFFF;">DESCRIPTION<br><input name="description" id="description" type="textarea" class = "input-grey-field"></h5>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="contact-grey-input" id = "attachfile">
					<h5 style = "margin-left:190px;color:#FFFFFF;">Attachment</h5>
				   <form action="/upload" class="dropzone" id="demo-upload">
                  </form>
			  </div>
			</div>
		</div>
		<input class="submit_button1 col-md-offset-8" type="submit" id="submit" name="submit" value="Submit">
	</div>
	<div class="map">
		<div id="googleMap" style="height:380px;">
			<div class="row">
				<div class="col-md-3">
					<div class="address" style = "position:absolute;top:200px;">
						<i class="icon-map-marker"></i>One Rad Road</br>
						87 Summer St, 2nd Floor</br>
						Banglore, ML 02110</br></br>
						<i class="fa fa-paper-plane"></i>info@radish.in</br></br>
						<i class="fa fa-phone"></i>1-617-910-0454
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="page-content4">
		<div class="container">
			<div class="row">
				<div class="col-md-1">
				</div>
				<div style="margin-top:13px;" class="col-md-3">
					GRAB YOUR MONTHLY NEWSLETTER
				</div>
				<div class="col-md-4">
					<input style="width:350px;padding: 5px 50px;height:40px;margin-bottom:15px;" type="text" placeholder="ENTER EMAIL" name="email" />
				</div>
				<div class="col-md-2">
					<input style="border-radius:2px;color:#FF3A5F;background:#fff;border:2px solid #FF3A5F;padding: 8px 50px;font-weight:bold;" type="submit" value="SUBSCRIBE" name="submit" />
				</div>
				<div class="col-md-1">
				</div>
			</div>
		</div>
	</div>
</div>
<script src="js/dropzone.js"></script>
</body>
</html>