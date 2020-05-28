<?php
session_start();

/*if(!isset($_SESSION['authenticated']))
       {
            header('Location: ../index.php');
            exit;
       }*/

?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8" />
	<title>FundraisingATM | Executive</title>
	<link rel="shortcut icon" href="../images/favicon.ico">
	
	<link href="../css/layout_styles.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="../css/addnew_form_styles.css" />
	<link rel="stylesheet" type="text/css" href="../css/simpletabs_styles.css" />
	
	<script type="text/javascript" src="../js/simpletabs_1.3.js"></script>
	<style>
		.scrollable-ul { overflow-y: auto; height: 120px; background: white;}
	</style>
</head>

<body>
<div id="container">
      <?php include 'header.inc.php' ; ?>
      <?php include 'sidenav.php' ; ?>

      <div id="content">
          <h1>Add Fundraiser Account</h1>
		<br>
		<div class="table">
			<form class="graybackground" style="width:100%" action="addSalesCoord.php" method="POST" enctype="multipart/form-data" id="myForm" name="myForm" onsubmit="return(validate());">
			<!--<h3>--Option 1: Add One Account--</h3>-->
				<div class="tablerow">
						<span id="hd_vp2">Vice President:</span>
						<span id="hd_sc2">Sales Coordinator:</span>
						<span id="hd_rp2">Representative:</span>
					</div> <!-- end row -->
					
					<div class="tablerow">
						<select class="role2">
							<option>Select VP Account</option>
							// <?php
								//	$query = "Select * FROM distributors  WHERE setupID='$id' and role='VP'";
                                //        $result = mysqli_query($link, $query)or die("MySQL ERROR om query 2: ".mysqli_error($link));
                                        
                          
                                //        while($row = mysqli_fetch_assoc($result))
                                //        {
					  			//		 echo '<option value="'.$row['loginid'].'">'.$row[FName].' '.$row[LName].' '.$row[loginid].'</option>';}
								//	?>
						</select>
						<select class="role2">
							<option>Select SC Account</option>
							<option></option>
							<option></option>
							<option></option>
							<option></option>
						</select>
						<select class="role2">
							<option>Select RP Account</option>
							<option></option>
							<option></option>
							<option></option>
							<option></option>
						</select>
					</div> <!-- end row -->
			
				<div class="simpleTabs">
					<!--<ul class="simpleTabsNavigation">
						<li><a href="#">Information</a></li>
						<li><a href="#">Banner</a></li>
						<li><a href="#">Social Media</a></li>
					</ul>-->
					
					<div class="interim-form" style="width:49%">
						<div class="interim-header"><h2>Contact Information</h2></div> <!-- Category is based off selected value above -->
						<div class="tablerow"> <!-- titles -->
							<span id="hd_frname">Name</span> 
						</div> <!-- end row -->
						<div class="tablerow"> <!-- inputs -->
							<input id="frname" type="text" name="frname" value="">
							
						</div> <!-- end row -->

						<div class="tablerow"> <!-- titles -->
							<span id="hd_address1">Address 1</span>
							<span></span><span></span><span></span>
							<span id="hd_wphone">Work Phone</span>
							<span id="ext">Ext</span>
							
						</div> <!-- end row -->
						<div class="tablerow"> <!-- inputs -->
							<input id="address1" type="text" name="address1" value="">
							<input id="wphone1" type="text" name="wphone1" maxlength="12"><!--<input id="wphone2" type="text" name="wphone2"><input id="wphone3" type="text" name="wphone3">-->
							<input id="ext" type="text" name="ext" maxlength="5">
						</div> <!-- end row -->
								<div class="tablerow">
										<span id="hd_address2">Address 2</span>
								</div><!-- end row -->
								<div class="tablerow">
									<input id="address2" type="text" name="address2" value="">
								</div><!-- end row -->
						
						<div class="tablerow"> <!-- titles -->
							<span id="hd_city">City</span>
							<span></span>
							<span id="hd_state" >State</span>
							<span id="hd_zip1">Zip</span>
						</div> <!-- end row -->
						<div class="tablerow"> <!-- inputs -->
							<input id="city" type="text" name="city" value="">
							<select id="state" name="state">
							<option value="" selected="selected">--</option>
							<option value="AL">AL</option>
							<option value="AK">AK</option>
							<option value="AZ">AZ</option>
							<option value="AR">AR</option>
							<option value="CA">CA</option>
							<option value="CO">CO</option>
							<option value="CT">CT</option>
							<option value="DE">DE</option>
							<option value="DC">DC</option>
							<option value="FL">FL</option>
							<option value="GA">GA</option>
							<option value="HI">HI</option>
							<option value="ID">ID</option>
							<option value="IL">IL</option>
							<option value="IN">IN</option>
							<option value="IA">IA</option>
							<option value="KS">KS</option>
							<option value="KY">KY</option>
							<option value="LA">LA</option>
							<option value="ME">ME</option>
							<option value="MD">MD</option>
							<option value="MA">MA</option>
							<option value="MI">MI</option>
							<option value="MN">MN</option>
							<option value="MS">MS</option>
							<option value="MO">MO</option>
							<option value="MT">MT</option>
							<option value="NE">NE</option>
							<option value="NV">NV</option>
							<option value="NH">NH</option>
							<option value="NJ">NJ</option>
							<option value="NM">NM</option>
							<option value="NY">NY</option>
							<option value="NC">NC</option>
							<option value="ND">ND</option>
							<option value="OH">OH</option>
							<option value="OK">OK</option>
							<option value="OR">OR</option>
							<option value="PA">PA</option>
							<option value="RI">RI</option>
							<option value="SC">SC</option>
							<option value="SD">SD</option>
							<option value="TN">TN</option>
							<option value="TX">TX</option>
							<option value="UT">UT</option>
							<option value="VT">VT</option>
							<option value="VA">VA</option>
							<option value="WA">WA</option>
							<option value="WV">WV</option>
							<option value="WI">WI</option>
							<option value="WY">WY</option>
							</select>
							<input id="zip" type="text" name="zip" value="" maxlength="5">
						</div> <!-- end row -->
						<br>
					</div> <!-- end tab 1 -->

					<div class="interim-form">
						<div class="tablerow">
							<div class="interim-header"><h2>Specify Account Type</h2></div>
							<div class="row">
							<br>
							<select id="category" name="category">
								<option selected>Select Organization</option>
								<option value="All Categories">All Categories</option>
								<option value="Educational Organizations">Educational Organizations</option>
								<option value="Faith Groups">Faith Groups</option>
								<option value="Community Organizations">Community Organizations</option>
								<option value="Youth & Sports Organizations">Youth & Sports Organizations</option>
								<option value="Local & National Charities">Local & National Charities</option>
								<option value="National Organizations">National Organizations</option>
								<option value="Individual Charity">Individual Charity</option>
								<option value="Other">Other</option>
							</select>
							</div>
							<br>
							<div class="row">
							<select id="type" name="type">
								<option selected>Select Category</option>
								<option value="All Educational Types">All Educational Types</option>
								<option value="4yr College">4yr College</option>
								<option value="2yr College">2yr College</option>
								<option value="High School">High School</option>
								<option value="Middle School">Middle School</option>
								<option value="Elementary School">Elementary School</option>
								<option value="Home School">Home School</option>
								<option value="Preschool School">Preschool School</option>
								<option value="Other">Other</option>
							</select>
							</div>
							<br>
							<div class="row">
							<select id="subtype" name="subtype">
								<option selected>Select Sub-Category</option>
								<option value="All Sub-Types">All Sub-Types</option>
								<option value="Public" >Public</option>
								<option value="Private">Private</option>
								<option value="Christian">Christian</option>
								<option value="Charter">Charter</option>
							</select>
							</div>
						</div> <!-- end row -->
						<br><br><br><br>
					</div>

						
					
					
					<div class="interim-form" style="width:49%">
						<div class="interim-header"><h2>Website Banner</h2></div> <!-- this part will be replaced with banner creator -->
						<div id="tablerow"> 
							<span id="hd_url">Existing Website URL</span>
							<input id="url" type="text" name="url">
						</div> <!-- end row -->
						<br><br>
						<div id="tablerow"> 
							<span id="hd_banner">Upload Banner</span>
							<input id="" type="file" name="uploaded_file">
						</div> <!-- end row -->
						<br><br><br><br>
					</div> <!-- end tab 2 -->
					
					
					<div class="interim-form" >
						<div class="interim-header"><h2>Social Media Connections</h2></div>
						<div class="tablerow"> 
								<span id="hd_fb" title="Facebook Name or Profile URL">Facebook</span>
							</div> <!-- end row -->
							<div class="tablerow"> 
								<input type="url" id="fb"  name="fb" placeholder="www.facebook.com">
							</div>
							<br>
							<div class="tablerow"> 
								<span id="hd_tw" title="Twitter Username or Profile URL">Twitter</span>
							</div> <!-- end row -->
							<div class="tablerow"> 
								<input type="url" id="tw" name="twitter" placeholder="www.twitter.com">
							</div>
							<br>
							<div class="tablerow"> 
								<span id="hd_li" title="LinkedIn Username or Profile URL">LinkedIn</span>
							</div> <!-- end row -->
							<div class="tablerow">
								<input type="url" id="li" name="lindkedin" placeholder="www.linkedin.com">
							</div>
						<!--<div class="tablerow"> 
							<span id="hd_pn">Pinterest</span>
							<input id="pn" type="text" name="pn" value="www.pinterest.com">
						</div>--> <!-- end row -->
						<!--<div class="tablerow">
							<span id="hd_gp">Google+</span>
							<input id="gp" type="text" name="gp" value="plus.google.com">
						</div>--> <!-- end row -->
						<br>
					</div> <!-- end tab 3 -->
					<div class="interim-form" style="width:95%">
						<div class="interim-header"><h2>Add Fundraiser Group(s)</h2></div>
						<div class="groupcolumn1">
						<center><h5>Education</h5></center>
							<h7 style="text-decoration: underline;"><strong>Elementary School</strong></h7><br>
							<span id=""style="color: #cc0000">Clubs & Organizations</span><br>
							<div class="checkboxes scrollable-ul">
								<input type="checkbox" name="" value=""><label>Select All Groups</label> <br>
								<input type="checkbox" name="" value=""><label>4-H</label> <br>
								<input type="checkbox" name="" value=""><label>Art Club</label> <br>
								<input type="checkbox" name="" value=""><label>Band</label> <br>
								<input type="checkbox" name="" value=""><label>Booster Club</label> <br>
								<input type="checkbox" name="" value=""><label>Carnival</label> <br>
								<input type="checkbox" name="" value=""><label>Choir</label> <br>
								<input type="checkbox" name="" value=""><label>Math Club</label> <br>
								<input type="checkbox" name="" value=""><label>PTA/PTO/PTC</label> <br>
								<input type="checkbox" name="" value=""><label>Science Club</label> <br>
								<input type="checkbox" name="" value=""><label>Technology/Robotics</label> <br>
								<input type="checkbox" name="" value=""><label>Thetre & Drama</label> <br>
							</div> <!-- end checkboxes -->
						</div> <!-- end groupsection -->

						<div class="groupsection">
							<span id=""style="color: #cc0000">General</span><br>
							<div class="checkboxes scrollable-ul">
								<input type="checkbox" name="" value=""><label>Select All Groups</label> <br>
								<input type="checkbox" name="" value=""><label>General</label> <br>
								<input type="checkbox" name="" value=""><label>Graduation</label> <br>
								<input type="checkbox" name="" value=""><label>After-School Program</label> <br>
								<input type="checkbox" name="" value=""><label>Athletic Equipment</label> <br>
								<input type="checkbox" name="" value=""><label>Electronic Projection & A/V</label> <br>
								<input type="checkbox" name="" value=""><label>Field Trips & Travel</label> <br>
								<input type="checkbox" name="" value=""><label>Library & Technology</label> <br>
								<input type="checkbox" name="" value=""><label>Playground Equipment</label> <br>
								<input type="checkbox" name="" value=""><label>Tablets,PCs & Internet</label> <br>
							</div> <!-- end checkboxes -->
						</div> <!-- end groupsection -->

						<div class="groupsection">
							<span id=""style="color: #cc0000">Athletics</span><br>
							<div class="checkboxes scrollable-ul">
								<input type="checkbox" name="" value=""><label>Select All Groups</label> <br>
								<input type="checkbox" name="" value=""><label>Baseball</label> <br>
								<input type="checkbox" name="" value=""><label>Basketball, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Basketball, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Biking</label> <br>
								<input type="checkbox" name="" value=""><label>Football</label> <br>
								<input type="checkbox" name="" value=""><label>Gymnastics, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Gymnastics, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Ice Hockey, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Ice Hockey, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Lacrosse, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Lacrosse, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Soccer, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Soccer, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Softball</label> <br>
								<input type="checkbox" name="" value=""><label>Swimming, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Swimming, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>T-Ball</label> <br>
								<input type="checkbox" name="" value=""><label>Track & Filed, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Track & Field, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Volleyball, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Volleyball, Girls</label> <br>
							</div> <!-- end checkboxes -->
						</div> <!-- end groupsection -->
						<div class="groupsection">
							<br><br>
							<h7 style="text-decoration: underline;"><strong>Middle School</strong></h7><br>
							<span id=""style="color: #cc0000">Clubs & Organizations</span><br>
							<div class="checkboxes scrollable-ul">
								<input type="checkbox" name="" value=""><label>Select All Groups</label> <br>
								<input type="checkbox" name="" value=""><label>4-H</label> <br>
								<input type="checkbox" name="" value=""><label>Band</label> <br>
								<input type="checkbox" name="" value=""><label>Booster Club</label> <br>
								<input type="checkbox" name="" value=""><label>BPA</label> <br>
								<input type="checkbox" name="" value=""><label>Chess Club</label> <br>
								<input type="checkbox" name="" value=""><label>Choir</label> <br>
								<input type="checkbox" name="" value=""><label>Debate</label> <br>
								<input type="checkbox" name="" value=""><label>FFA</label> <br>
								<input type="checkbox" name="" value=""><label>Jazz Band</label> <br>
								<input type="checkbox" name="" value=""><label>Language Club</label> <br>
								<input type="checkbox" name="" value=""><label>Math Club</label> <br>
								<input type="checkbox" name="" value=""><label>National Honor Society</label> <br>
								<input type="checkbox" name="" value=""><label>Orchestra</label> <br>
								<input type="checkbox" name="" value=""><label>PTA/PTO/PTC</label> <br>
								<input type="checkbox" name="" value=""><label>Science Club</label> <br>
								<input type="checkbox" name="" value=""><label>Scripture Study</label> <br>
								<input type="checkbox" name="" value=""><label>Student Study</label> <br>
								<input type="checkbox" name="" value=""><label>Student Council</label> <br>
								<input type="checkbox" name="" value=""><label>Technology/Robotics Club</label> <br>
								<input type="checkbox" name="" value=""><label>Theatre & Drama</label> <br>
								<input type="checkbox" name="" value=""><label>Yearbook</label> <br>
							</div> <!-- end checkboxes -->
						</div> <!-- end groupsection -->

						<div class="groupsection">
							<span id=""style="color: #cc0000">General</span><br>
							<div class="checkboxes scrollable-ul">
								<input type="checkbox" name="" value=""><label>Select All Groups</label> <br>
								<input type="checkbox" name="" value=""><label>General</label> <br>
								<input type="checkbox" name="" value=""><label>Graduation</label> <br>
								<input type="checkbox" name="" value=""><label>After-School Program</label> <br>
								<input type="checkbox" name="" value=""><label>Athletic Equipment</label> <br>
								<input type="checkbox" name="" value=""><label>Electronic Projection & A/V</label> <br>
								<input type="checkbox" name="" value=""><label>Field Trips & Travel</label> <br>
								<input type="checkbox" name="" value=""><label>Library & Technology</label> <br>
								<input type="checkbox" name="" value=""><label>Playground Equipment</label> <br>
								<input type="checkbox" name="" value=""><label>Tablets,PCs & Internet</label> <br>
							</div> <!-- end checkboxes -->
						</div> <!-- end groupsection -->

						<div class="groupsection">
							<span id=""style="color: #cc0000">Athletics</span><br>
							<div class="checkboxes scrollable-ul">
								<input type="checkbox" name="" value=""><label>Select All Groups</label> <br>
								<input type="checkbox" name="" value=""><label>Archery</label> <br>
								<input type="checkbox" name="" value=""><label>Badminton</label> <br>
								<input type="checkbox" name="" value=""><label>Baseball</label> <br>
								<input type="checkbox" name="" value=""><label>Basketball, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Basketball, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Bowling</label> <br>
								<input type="checkbox" name="" value=""><label>cheerleading</label> <br>
								<input type="checkbox" name="" value=""><label>Cross Country Running, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Cross Country Running, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Cross Country Skiing, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Cross Country Skiing, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Cycling</label> <br>
								<input type="checkbox" name="" value=""><label>Danceline</label> <br>
								<input type="checkbox" name="" value=""><label>Diving, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Diving, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Field Hockey</label> <br>
								<input type="checkbox" name="" value=""><label>Figure Skating</label> <br>
								<input type="checkbox" name="" value=""><label>Football</label> <br>
								<input type="checkbox" name="" value=""><label>Golf, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Golf, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Gymnastics, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Gymnastics, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Ice Hockey, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Ice Hockey, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Lacrosse, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Lacrosse, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Mountaineering</label> <br>
								<input type="checkbox" name="" value=""><label>Racquet</label> <br>
								<input type="checkbox" name="" value=""><label>Rodeo</label> <br>
								<input type="checkbox" name="" value=""><label>Rowing</label> <br>
								<input type="checkbox" name="" value=""><label>Rugby, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Rugby, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Sailing</label> <br>
								<input type="checkbox" name="" value=""><label>Ski & Snowboard, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Ski & Snowboard, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Soccer, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Soccer, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Softball</label> <br>
								<input type="checkbox" name="" value=""><label>Swimming, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Swimming, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Table Tennis</label> <br>
								<input type="checkbox" name="" value=""><label>Tennis, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Track & Field, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Track & Filed, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Ultimate Frisbee, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Ultimate Frisbee, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Volleyball, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Volleyball, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Water Polo</label> <br>
								<input type="checkbox" name="" value=""><label>Wrestling</label> <br>
							</div> <!-- end checkboxes -->
						</div> <!-- end groupsection -->

						<div class="groupsection">
							<br><br>
							<h7 style="text-decoration: underline;"><strong>High School</strong></h7><br>
							<span id=""style="color: #cc0000">Clubs & Organizations</span><br>
							<div class="checkboxes scrollable-ul">
								<input type="checkbox" name="" value=""><label>Select All Groups</label> <br>
								<input type="checkbox" name="" value=""><label>4-H</label> <br>
								<input type="checkbox" name="" value=""><label>Band</label> <br>
								<input type="checkbox" name="" value=""><label>Booster Club</label> <br>
								<input type="checkbox" name="" value=""><label>BPA</label> <br>
								<input type="checkbox" name="" value=""><label>Chess Club</label> <br>
								<input type="checkbox" name="" value=""><label>Choir</label> <br>
								<input type="checkbox" name="" value=""><label>Debate</label> <br>
								<input type="checkbox" name="" value=""><label>DECA</label> <br>
								<input type="checkbox" name="" value=""><label>FBLA</label> <br>
								<input type="checkbox" name="" value=""><label>FFA</label> <br>
								<input type="checkbox" name="" value=""><label>Jazz Band</label> <br>
								<input type="checkbox" name="" value=""><label>JROTC</label> <br>
								<input type="checkbox" name="" value=""><label>Key Club</label> <br>
								<input type="checkbox" name="" value=""><label>Language Club</label> <br>
								<input type="checkbox" name="" value=""><label>Math Club</label> <br>
								<input type="checkbox" name="" value=""><label>National Honor Society</label> <br>
								<input type="checkbox" name="" value=""><label>Orchestra</label> <br>
								<input type="checkbox" name="" value=""><label>Prom Committe</label> <br>
								<input type="checkbox" name="" value=""><label>PTA/PTO/PTC</label> <br>
								<input type="checkbox" name="" value=""><label>Science Club</label> <br>
								<input type="checkbox" name="" value=""><label>Scripture Study</label> <br>
								<input type="checkbox" name="" value=""><label>Student Council</label> <br>
								<input type="checkbox" name="" value=""><label>Technology/Robotics</label> <br>
								<input type="checkbox" name="" value=""><label>Theatre & Drama</label> <br>
								<input type="checkbox" name="" value=""><label>Yearbook</label> <br>
							</div> <!-- end checkboxes -->
						</div> <!-- end groupsection -->

						<div class="groupsection">
							<span id=""style="color: #cc0000">General</span><br>
							<div class="checkboxes scrollable-ul">
								<input type="checkbox" name="" value=""><label>Select All Groups</label> <br>
								<input type="checkbox" name="" value=""><label>General</label> <br>
								<input type="checkbox" name="" value=""><label>Graduation</label> <br>
								<input type="checkbox" name="" value=""><label>Senior Class</label> <br>
								<input type="checkbox" name="" value=""><label>Junior Class</label> <br>
								<input type="checkbox" name="" value=""><label>Sophmore Class</label> <br>
								<input type="checkbox" name="" value=""><label>Freshman Class</label> <br>
								<input type="checkbox" name="" value=""><label>After-School Program</label> <br>
								<input type="checkbox" name="" value=""><label>Athletic Equipment</label> <br>
								<input type="checkbox" name="" value=""><label>Electronic Projection & A/V</label> <br>
								<input type="checkbox" name="" value=""><label>Field Trips & Travel</label> <br>
								<input type="checkbox" name="" value=""><label>Library & Technology</label> <br>
								<input type="checkbox" name="" value=""><label>Playground Equipment</label> <br>
								<input type="checkbox" name="" value=""><label>Tablets, PCs & Internet</label> <br>
							</div> <!-- end checkboxes -->
						</div> <!-- end groupsection -->

						<div class="groupsection">
							<span id=""style="color: #cc0000">Athletics</span><br>
							<div class="checkboxes scrollable-ul">
								<input type="checkbox" name="" value=""><label>Select All Groups</label> <br>
								<input type="checkbox" name="" value=""><label>Archery</label> <br>
								<input type="checkbox" name="" value=""><label>Badminton</label> <br>
								<input type="checkbox" name="" value=""><label>Basketball, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Basketball, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Bowling, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Bowling, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Cheerleading</label> <br>
								<input type="checkbox" name="" value=""><label>Cross Country Running, Boys</label><br>
								<input type="checkbox" name="" value=""><label>Cross Country Running, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Cross Country Skiing, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Cross Country Skiing, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Cycling</label> <br>
								<input type="checkbox" name="" value=""><label>Danceline</label> <br>
								<input type="checkbox" name="" value=""><label>Diving, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Diving, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Field Hockey</label> <br>
								<input type="checkbox" name="" value=""><label>Figure Skating</label> <br>
								<input type="checkbox" name="" value=""><label>Football</label> <br>
								<input type="checkbox" name="" value=""><label>Golf, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Golf, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Gymnastics, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Gymnastics, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Ice Hockey, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Lacrosse, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Lacrosse, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Mountaineering</label> <br>
								<input type="checkbox" name="" value=""><label>Power Lifting</label> <br>
								<input type="checkbox" name="" value=""><label>Racquetball</label> <br>
								<input type="checkbox" name="" value=""><label>Rodeo</label> <br>
								<input type="checkbox" name="" value=""><label>Rowing, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Rowing, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Rugby, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Rugby, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Sailing</label> <br>
								<input type="checkbox" name="" value=""><label>Ski & Snowboard, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Ski & Snowboard, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Soccer, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Soccer, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Softball</label> <br>
								<input type="checkbox" name="" value=""><label>Swimming, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Swimming, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Table Tennis</label> <br>
								<input type="checkbox" name="" value=""><label>Tennis, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Tennis, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Track & Field, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Track & Field, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Ultimate Frisbee, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Ultimate Frisbee, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Volleyball, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Volleyball, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Water Polo</label> <br>
								<input type="checkbox" name="" value=""><label>Wrestling</label> <br>
							</div> <!-- end checkboxes -->
						</div> <!-- end groupsection -->


						<div class="groupsection">
							<br><br>
							<h7 style="text-decoration: underline;"><strong>College</strong></h7><br>
							<span id=""style="color: #cc0000">Clubs & Organizations</span><br>
							<div class="checkboxes scrollable-ul">
								<input type="checkbox" name="" value=""><label>Select All Groups</label> <br>
								<input type="checkbox" name="" value=""><label>4-H</label> <br>
								<input type="checkbox" name="" value=""><label>Alumni Association</label> <br>
								<input type="checkbox" name="" value=""><label>Band</label> <br>
								<input type="checkbox" name="" value="">BPA<label></label> <br>
								<input type="checkbox" name="" value=""><label>Chess Club</label> <br>
								<input type="checkbox" name="" value=""><label>Choir</label> <br>
								<input type="checkbox" name="" value=""><label>Debate</label> <br>
								<input type="checkbox" name="" value=""><label>DECA</label> <br>
								<input type="checkbox" name="" value=""><label>Drumline</label> <br>
								<input type="checkbox" name="" value=""><label>FBLA</label> <br>
								<input type="checkbox" name="" value=""><label>FFA</label> <br>
								<input type="checkbox" name="" value=""><label>Greeks</label> <br>
								<input type="checkbox" name="" value=""><label>Jazz Band</label> <br>
								<input type="checkbox" name="" value=""><label>Key Club</label> <br>
								<input type="checkbox" name="" value=""><label>Language Club</label> <br>
								<input type="checkbox" name="" value=""><label>Math Club</label> <br>
								<input type="checkbox" name="" value=""><label>National Honor Society</label> <br>
								<input type="checkbox" name="" value=""><label>Orchestra</label> <br>
								<input type="checkbox" name="" value=""><label>ROTC</label> <br>
								<input type="checkbox" name="" value=""><label>Science Club</label> <br>
								<input type="checkbox" name="" value=""><label>Scripture Study</label> <br>
								<input type="checkbox" name="" value=""><label>Student Council</label> <br>
								<input type="checkbox" name="" value=""><label>Technology/Robotics</label> <br>
								<input type="checkbox" name="" value=""><label>Theatre & Drama</label> <br>
							</div> <!-- end checkboxes -->
						</div> <!-- end groupsection -->

						<div class="groupsection">
							<span id=""style="color: #cc0000">General</span><br>
							<div class="checkboxes scrollable-ul">
								<input type="checkbox" name="" value=""><label>Select All Groups</label> <br>
								<input type="checkbox" name="" value=""><label>After-School Program</label> <br>
								<input type="checkbox" name="" value=""><label>Athletic Equipment</label> <br>
								<input type="checkbox" name="" value=""><label>Electronic Projection & A/V</label> <br>
								<input type="checkbox" name="" value=""><label>Field Trips & Travel</label> <br>
								<input type="checkbox" name="" value=""><label>Library & Technology</label> <br>
								<input type="checkbox" name="" value=""><label>Tablets, PCs & Internet</label> <br>
							</div> <!-- end checkboxes -->
						</div> <!-- end groupsection -->

						<div class="groupsection">
							<span id=""style="color: #cc0000">Athletics</span><br>
							<div class="checkboxes scrollable-ul">
								<input type="checkbox" name="" value=""><label>Select All Groups</label> <br>
								<input type="checkbox" name="" value=""><label>Archery</label> <br>
								<input type="checkbox" name="" value=""><label>Badminton</label> <br>
								<input type="checkbox" name="" value=""><label>Baseball</label> <br>
								<input type="checkbox" name="" value=""><label>Basketball, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Basketball, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Bowling, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Bowling, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Cheerleading</label> <br>
								<input type="checkbox" name="" value=""><label>Cross Country Running, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Cross Country Running, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Cross Country Skiing, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Cross Country Skiing, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Cycling</label> <br>
								<input type="checkbox" name="" value=""><label>Danceline</label> <br>
								<input type="checkbox" name="" value=""><label>Diving, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Diving, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Field  Hockey</label> <br>
								<input type="checkbox" name="" value=""><label>Figure Skating</label> <br>
								<input type="checkbox" name="" value=""><label>Football</label> <br>
								<input type="checkbox" name="" value=""><label>Golf, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Golf, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Gymnastics, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Gymnastics, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Ice Hockey, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Ice Hockey, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Lacrosse, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Lacrosse, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Mountaineering</label> <br>
								<input type="checkbox" name="" value=""><label>Power Lifting</label> <br>
								<input type="checkbox" name="" value=""><label>Racquetball</label> <br>
								<input type="checkbox" name="" value=""><label>Rodeo</label> <br>
								<input type="checkbox" name="" value=""><label>Rowing, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Rowing, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Rugby, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Rugby, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Sailing</label> <br>
								<input type="checkbox" name="" value=""><label>Ski & Snowboard, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Ski & Snowboard, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Soccer, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Soccer, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Softball</label> <br>
								<input type="checkbox" name="" value=""><label>Swimming, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Swimming, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Symchronized Swimming</label> <br>
								<input type="checkbox" name="" value=""><label>Table Tennis</label> <br>
								<input type="checkbox" name="" value=""><label>Tennis, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Tennis, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Track & Field, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Track & Field, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Ultimate Frisbee, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Ultimate Frisbee, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Volleyball, Boys</label> <br>
								<input type="checkbox" name="" value=""><label>Volleyball, Girls</label> <br>
								<input type="checkbox" name="" value=""><label>Water Polo</label> <br>
								<input type="checkbox" name="" value=""><label>Wrestling</label> <br>
							</div> <!-- end checkboxes -->
						</div> <!-- end groupsection -->

						<div class="groupsection">
							<br><br>
							<h7 style="text-decoration: underline; "><strong>Trade, Vocational & Tech School</strong></h7><br>
							<div class="checkboxes scrollable-ul">
								<input type="checkbox" name="" value=""><label>Select All Groups</label> <br>
								<input type="checkbox" name="" value=""><label>Field Trips & Travel</label> <br>
								<input type="checkbox" name="" value=""><label>General Equipment</label> <br>
								<input type="checkbox" name="" value=""><label>Trade Supplies</label> <br>
							</div> <!-- end checkboxes -->
						</div> <!-- end groupsection -->

						<div class="groupsection">
							<br>
							<h7 style="text-decoration: underline;"><strong>Preschool</strong></h7><br>
							<div class="checkboxes scrollable-ul">
								<input type="checkbox" name="" value=""><label>Select All Groups</label> <br>
								<input type="checkbox" name="" value=""><label>Electronic Projection & A/V</label> <br>
								<input type="checkbox" name="" value=""><label>Equipment & Supplies</label> <br>
								<input type="checkbox" name="" value=""><label>Field Trips & Travel</label> <br>
								<input type="checkbox" name="" value=""><label>Playground Equipment</label> <br>
								<input type="checkbox" name="" value=""><label>Tablets, PCs, & Internet</label> <br>
							</div> <!-- end checkboxes -->
						</div> <!-- end groupsection -->

						<div class="groupsection">
							<br>
							<h7 style="text-decoration: underline;"><strong>Home School</strong></h7><br>
							<div class="checkboxes scrollable-ul">
								<input type="checkbox" name="" value=""><label>Select All Groups</label> <br>
								<input type="checkbox" name="" value=""><label>Electronic Projection & A/V</label> <br>
							</div> <!-- end checkboxes -->
						</div> <!-- end groupsection -->

						<div class="groupsection">
							<br>
							<h7 style="text-decoration: underline;"><strong>Camp</strong></h7><br>
							<div class="checkboxes scrollable-ul">
								<input type="checkbox" name="" value=""><label>Select All Groups</label> <br>
								<input type="checkbox" name="" value=""><label>Bible Camps</label> <br>
								<input type="checkbox" name="" value=""><label>Dance Camps</label> <br>
								<input type="checkbox" name="" value=""><label>Education Camps</label> <br>
								<input type="checkbox" name="" value=""><label>Family Camps</label> <br>
								<input type="checkbox" name="" value=""><label>General Camps</label> <br>
								<input type="checkbox" name="" value=""><label>Music Camps</label> <br>
								<input type="checkbox" name="" value=""><label>Scouting Camps</label> <br>
								<input type="checkbox" name="" value=""><label>Sports Camps</label> <br>
								<input type="checkbox" name="" value=""><label>Youth Camps</label> <br>
							</div> <!-- end checkboxes -->
						</div> <!-- end groupsection -->

						<br>

						<div class="groupsection">
							<br>
							<center><h5>Organizations</h5></center>
							<h7 style="text-decoration: underline"><strong>Faith Based Organizations</strong></h7><br>
							<span id="" style="color: #cc0000">Christianity</span><br>
							<div class="checkboxes scrollable-ul">
								<input type="checkbox" name="" value=""><label>Select All Groups</label> <br>
								<input type="checkbox" name="" value=""><label>Baptist</label> <br>
								<input type="checkbox" name="" value=""><label>Catholic</label> <br>
								<input type="checkbox" name="" value=""><label>Christian Other</label> <br>
								<input type="checkbox" name="" value=""><label>Episcopal</label> <br>
								<input type="checkbox" name="" value=""><label>Lutheran</label> <br>
								<input type="checkbox" name="" value=""><label>Methodist</label> <br>
								<input type="checkbox" name="" value=""><label>Mormon</label> <br>
								<input type="checkbox" name="" value=""><label>Orthodox</label> <br>
								<input type="checkbox" name="" value=""><label>Presbyterian</label> <br>
								<input type="checkbox" name="" value=""><label>Reformed</label> <br>
								<input type="checkbox" name="" value=""><label>Spirit-Filled</label> <br>
							</div> <!-- end checkboxes -->

							<span id="" style="color: #cc0000">Judaism</span><br>
							<div class="checkboxes scrollable-ul">
								<input type="checkbox" name="" value=""><label>Select All Groups</label> <br>
								<input type="checkbox" name="" value=""><label>Jewish Conservative</label> <br>
								<input type="checkbox" name="" value=""><label>Jewish Orthodox</label> <br>
								<input type="checkbox" name="" value=""><label>Jewish Reformed</label> <br>
							</div> <!-- end checkboxes -->

							<span id="" style="color: #cc0000">Other Faiths</span><br>
							<div class="checkboxes scrollable-ul">
								<input type="checkbox" name="" value=""><label>Select All Groups</label> <br>
								<input type="checkbox" name="" value=""><label>Buddhist</label> <br>
								<input type="checkbox" name="" value=""><label>Hindu</label> <br>
								<input type="checkbox" name="" value=""><label>Muslim</label> <br>
								<input type="checkbox" name="" value=""><label>Other Faiths</label> <br>
							</div> <!-- end checkboxes -->
						</div> <!-- end groupsection -->

						<div class="groupsection">
							<br>
							<h7 style="text-decoration: underline;"><strong>Local & National Organizations</strong></h7><br>
							<div class="checkboxes scrollable-ul">
								<input type="checkbox" name="" value=""><label>Select All Groups</label> <br>
								<input type="checkbox" name="" value=""><label>Jaycees</label> <br>
								<input type="checkbox" name="" value=""><label>Junior League</label> <br>
								<input type="checkbox" name="" value=""><label>Kiwanis</label> <br>
								<input type="checkbox" name="" value=""><label>Knights of Columbus</label> <br>
								<input type="checkbox" name="" value=""><label>Lions Club International (LCI)</label> <br>
								<input type="checkbox" name="" value=""><label>Masonic Service Association</label> <br>
								<input type="checkbox" name="" value=""><label>Optimist International</label> <br>
								<input type="checkbox" name="" value=""><label>Rotary Club</label> <br>
								<input type="checkbox" name="" value=""><label>Shriners International</label> <br>
								<input type="checkbox" name="" value=""><label>The American Legion</label> <br>
								<input type="checkbox" name="" value=""><label>Veterans of Foreign Wars (VFW)</label> <br>
							</div> <!-- end checkboxes -->
						</div> <!-- end groupsection -->

						<div class="groupsection">
							<br>
							<h7 style="text-decoration: underline"><strong>Local & National Charities</strong></h7><br>
							<div class="checkboxes scrollable-ul">
								<input type="checkbox" name="" value=""><label>Select All Groups</label> <br>
								<input type="checkbox" name="" value=""><label>Alzheimer Foundation of American</label> <br>
								<input type="checkbox" name="" value=""><label>American Cancer Society</label> <br>
								<input type="checkbox" name="" value=""><label>American Diabetes Association</label> <br>
								<input type="checkbox" name="" value=""><label>American Heart Association</label> <br>
								<input type="checkbox" name="" value=""><label>American Red Cross</label> <br>
								<input type="checkbox" name="" value=""><label>Boys & Girls Clubs of America</label> <br>
								<input type="checkbox" name="" value=""><label>Cancer Research Institute</label> <br>
								<input type="checkbox" name="" value=""><label>Cerebral Palsy</label> <br>
								<input type="checkbox" name="" value=""><label>Goodwill Industries International</label> <br>
								<input type="checkbox" name="" value=""><label>Habitat for Humanity</label> <br>
								<input type="checkbox" name="" value=""><label>Leukemia & Lymphoma Society</label> <br>
								<input type="checkbox" name="" value=""><label>Lymphoma Association</label> <br>
								<input type="checkbox" name="" value=""><label>Make-A-Wish Foundaion of America</label> <br>
								<input type="checkbox" name="" value=""><label>March of Dimes</label> <br>
								<input type="checkbox" name="" value=""><label>Muscular Dytrophy Association (MDA)</label> <br>
								<input type="checkbox" name="" value=""><label>Shriners International</label> <br>
								<input type="checkbox" name="" value=""><label>Special Olympics</label> <br>
								<input type="checkbox" name="" value=""><label>St. Jude Childrens's Research Hospital</label> <br>
								<input type="checkbox" name="" value=""><label>Susan G. Komen</label> <br>
								<input type="checkbox" name="" value=""><label>The Salvation Army</label> <br>
								<input type="checkbox" name="" value=""><label>The Simon Wiesenthal Foundation</label> <br>
								<input type="checkbox" name="" value=""><label>United Way</label> <br>
								<input type="checkbox" name="" value=""><label>Wounded Warrior Project</label> <br>
							</div> <!-- end checkboxes -->
						</div> <!-- end groupsection -->

						<div class="groupsection">
							<br>
							<h7 style="text-decoration: underline;"><strong>Community Organizations</strong></h7><br>
							<div class="checkboxes scrollable-ul">
								<input type="checkbox" name="" value=""><label>Select All Groups</label> <br>
								<input type="checkbox" name="" value="">Animal Shelters<label></label> <br>
								<input type="checkbox" name="" value=""><label>ASPCA</label> <br>
								<input type="checkbox" name="" value=""><label>Community Food Bank</label> <br>
								<input type="checkbox" name="" value=""><label>Fire Department</label> <br>
								<input type="checkbox" name="" value=""><label>Local Food Shelves</label> <br>
								<input type="checkbox" name="" value=""><label>Local Homeless Shelters</label> <br>
								<input type="checkbox" name="" value=""><label>Local Women's Shelters</label> <br>
								<input type="checkbox" name="" value=""><label>Police Department</label> <br>
							</div> <!-- end checkboxes -->
						</div> <!-- end groupsection -->

						<div class="groupsection">
							<br>
							<h7 style="text-decoration: underline;"><strong>Youth & Sports</strong></h7><br>
							<div class="checkboxes scrollable-ul">
								<input type="checkbox" name="" value=""><label>Select All Groups</label> <br>
								<input type="checkbox" name="" value=""><label>Athletic Associations</label> <br>
								<input type="checkbox" name="" value=""><label>Big Brothers/Big Sisters of America</label> <br>
								<input type="checkbox" name="" value=""><label>Boy Scouts</label> <br>
								<input type="checkbox" name="" value=""><label>Girl Scouts</label> <br>
								<input type="checkbox" name="" value=""><label>Summer Leagues</label> <br>
								<input type="checkbox" name="" value=""><label>YMCA</label> <br>
							</div> <!-- end checkboxes -->
						</div> <!-- end groupsection -->

						<div class="groupsection">
							<br>
							<h7 style="text-decoration: underline"><strong>Sports League</strong></h7><br>
							<div class="checkboxes scrollable-ul">
								<input type="checkbox" name="" value=""><label>Select All Groups</label> <br>
								<input type="checkbox" name="" value=""><label>Summer Leagues</label> <br>
							</div> <!-- end checkboxes -->
						</div> <!-- end groupsection -->

						<br>

						<div class="groupsection">
							<h6 style="text-decoration: underline"><strong>General</strong></h6>
							<div class="checkboxes">
								<input type="checkbox" name="" value=""><label>Select All Groups</label> <br>
							</div> <!-- end checkboxes -->
						</div> <!-- end groupsection -->
						<div class="clear"></div>
					</div> <!-- end tab -->
				</div> <!-- end simple tabs -->
			
				<div class="tablerow">
					<input type="submit" name="submit" class="redbutton" value="Save & Exit">
					<input type="submit" name="submit" class="redbutton" value="Save & Add Another">
					<!--<input type="submit" name="submit" class="redbutton" value="Save Account & Add Fundraising Group">-->
				</div> <!-- end row -->
			</form>

			<!--<br>
			
			<form id="graybackground">
				<h3>--Option 2: Add Multiple Accounts--</h3>
				<h2>How To Add Multiple Accounts</h2><br>
				<ol>
					<li><a href="">Download</a> Our Fundraiser Setup Spreadsheet</li>
					<li>Input the Data for Each Fundraiser Account You want to Add</li>
					<li>Upload the Completed Spreadsheet...</li>
				</ol>
				<input type="file" name="">
				<input class="redbutton" type="submit" name="" value="Upload File">
			</form>-->
		</div> <!-- end table -->

  </div> <!--end content -->
  
      <?php include 'footer.php' ; ?>   
</div> <!--end container-->

</body>
</html>

<?php
   ob_end_flush();
?>