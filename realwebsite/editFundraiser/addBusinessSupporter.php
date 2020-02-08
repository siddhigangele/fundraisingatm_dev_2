<?php

       session_start();

      if(($_SESSION['role'] == 'MemberLeader' || $_SESSION['role'] == 'Member' || $_SESSION['role'] == 'fundOwner') && isset($_SESSION['authenticated']))
       {
          //authenicated
       }
       else
       {
            header('Location: ../index.php');
            exit;
       }
       require_once("../includes/connection.inc.php");
       include('../samplewebsites/imageFunctions.inc.php');
       include ('../includes/functions.php');
       $link = connectTo();
       $group = $_SESSION['groupid'];
       $userID = $_SESSION['userId'];
       if(isset($_POST['submit']))
       {
          $cname = mysqli_real_escape_string($link, $_POST['cname']);
          $tt = mysqli_real_escape_string($link, $_POST['title']);
          $gd = mysqli_real_escape_string($link, $_POST['gender']);
          $address1 = mysqli_real_escape_string($link, $_POST['address1']);
          $address2 = mysqli_real_escape_string($link, $_POST['address2']);
          $city = mysqli_real_escape_string($link, $_POST['city']);
          $state = mysqli_real_escape_string($link, $_POST['state']);
          $fname = mysqli_real_escape_string($link, $_POST['fname']);
          $mname = mysqli_real_escape_string($link, $_POST['mname']);
          $lname = mysqli_real_escape_string($link, $_POST['lname']);
          $email = mysqli_real_escape_string($link, $_POST['email']);
          $zip = mysqli_real_escape_string($link, $_POST['zip']);
          $phone = mysqli_real_escape_string($link, $_POST['phone']);
          $ext = mysqli_real_escape_string($link, $_POST['ext']);
          $rep = mysqli_real_escape_string($link, $_POST['rep']);
          $memberID = mysqli_real_escape_string($link, $_POST['memberid']);
          $type = "Business Supporter";
          $conPhoto = $_FILES['uploaded_file']['tmp_name'];
	  $imageDirPath = $_SERVER['DOCUMENT_ROOT'].'/images/contacts/';
	  $conPicPath = "";
          
          function process_image($name, $id, $tmpPic, $baseDirPath){

		$cleanedPic = checkName($_FILES["$name"]["name"]);	
		if(!is_image($tmpPic)) {
    			// is not an image
    			$upload_msg .= $cleanedPic . " is not an image file. <br />";
    		} else {
    			if($_FILES['$name']['error'] > 0) {
				$upload_msg .= $_FILES['$name']['error'] . "<br />";
			} else {
				
				if (file_exists($baseDirPath.$id."/".$cleanedPic)){
					$imagePath = "images/contacts/".$id."/".$cleanedPic;
				} else {
					$picDirectory = $baseDirPath;
					
					
					if (!is_dir($picDirectory.$id)){
						mkdir($picDirectory.$id);
						
					}
					$picDirectory = $picDirectory.$id."/";
					move_uploaded_file($tmpPic, $picDirectory . $cleanedPic);
					$upload_msg .= "$cleanedPic uploaded.<br />";
					$imagePath = "images/contacts/".$id."/".$cleanedPic;
					
					
				}// end third inner else
				return $imagePath;
			} // end first inner else
		      } // end else
	     }// end process_image
	     
	     
	     if($conPhoto != '')
	     {
		    $personalPicPath = process_image('uploaded_file',$memberID, $conPhoto, $imageDirPath);   
	     }
          
          $query = "INSERT INTO orgCustomers (first, last, companyname, relationship, email, workPhone, address, apt, city, state, zip, fundMemberID,fundGroupID, image_path, repID, title)VALUES('$fname', '$lname', '$cname', '$type', '$email', '$phone', '$address1', '$address2', '$city','$state', '$zip', '$memberID', '$group', '$personalPicPath', '$rep', '$tt')";
          $result = mysqli_query($link, $query)or die("MySQL ERROR query 1: ".mysqli_error($link));
          
          $query2 = "INSERT INTO orgContacts(Title, orgFName, orgLName, orgEmail, orgPhone, fundraiserID, fund_owner_id, org_contact_created)VALUES('$cname', '$fname', '$lname', '$email', '$phone', '$memberID', '$group', 'today()')";
          $result2 = mysqli_query($link, $query2)or die("MYSQL ERROR query 2: ".mysqli_error($link));
          if($result && $result2 )
          {
            header( 'Location: contacts.php' );
          }
          
       }//end post submit
       
      
       $group = $_SESSION['groupid'];
       
       $user = $_SESSION['userId'];
       $userName = $_SESSION['email'];
       $query1 = "SELECT * FROM Dealers WHERE loginid='$group'";
       $result1 = mysqli_query($link, $query1)or die("MySQL ERROR query 1: ".mysqli_error($link));
       $row1 = mysqli_fetch_assoc($result1);
       $groupPic = $row1['location_pic'];
       $repID = $row1['setuppersonid'];
       $groupName = $row1['Dealer'];
       $club_type = $row1['DealerDir'];
       $salesTotal = getGroupSales($group);
       $salesGoal = $row1['FundraiserGoal'];
       $banner_path = $row1['banner_path'];
       $fb = $row1['facebook'];
       $tw = $row1['twitter'];
       

?>
<!DOCTYPE html>
<head>
	<title>GreatMoods | Fundraiser Account</title>
<style>
#border{
background-color:#f8f8f8;
box-shadow: 0px 0px 15px #888888;
padding:15px 35px 40px 35px; 
}
</style>
</head>

<body>
      <?php include 'header.php' ; ?>
      <?php include 'fundSidebar.php' ; ?>
    <div class="container" id="addBusinessSupportContent" >
        <div class="row-fluid">
          
            <div class="page-header">
                <h1>Add Business Supporter</h1>
            </div>          
            <div class=" col-md-7 col-md-push-2" id="biz-col">
<br>
<div id="border"> 
                <div class="table">	
                	<form class="" id="myForm" name="myForm" action="addBusinessSupporter.php" method="post" onsubmit="return validate()">
                		<!--<h3>--Option 1: Add One Business Supporter--</h3>-->
                		<div class="simpleTabs">
                			<!--<ul class="simpleTabsNavigation">
                				<li><a href="#">Information</a></li>
                				<li><a href="#">Primary Contact</a></li>
                				<li><a href="#">Profile Photo</a></li>
                			</ul>-->
                			
                			<div class="interim-form">
                			    <div class="interim-header"><h2>Business Contact Information</h2></div>
						<hr style="border-color:#b8b8b8;">
                				<!--<div class="tablerow">
                					<span>Business Supporter Type: </span>
                					<select name="">
                						<option value="">Select Type</option>
                						<option value="">Bank</option>
                						<option value="">Accounting</option>
                						<option value="">Law Firm</option>
                						<option value="">Local Co-Op</option>
                						<option value="">Real Estate</option>
                					</select>
                				</div> <!-- end row -->
                		
                				<div class="tablerow"> <!-- titles -->
                					<span style="line-height:35px;" id="hd_cname">Company Name</span>
                				</div> <!-- end row -->
                				<div class="tablerow"> <!-- inputs -->
                					<input id="cname" type="text" name="cname" value="">
                				</div> <!-- end row -->

						<!-- Physical Address -->
                				
                				<div class="tablerow"> <!-- titles -->
                					<!--<span id="hd_address1">Address 1</span>-->
                				</div> <!-- end row -->
                				<div class="tablerow"> <!-- inputs -->
                					<!--<input id="address1" type="text" name="address1" value="" >-->
                				</div> <!-- end row -->
                				
                				<div class="tablerow">
                					<!--<span id="hd_address2">Address 2</span>-->
                				</div> <!-- end row -->
                				<div class="tablerow">
                					<!--<input id="address2" type="text" name="address2" value="">-->
                				</div> <!-- end row -->
                							
                				<div class="tablerow"> <!-- titles -->
                					<!--<span id="hd_city">City</span>-->
                					<!--<span id="hd_state">State</span>-->
                					<!--<span id="hd_zip">Zip</span>-->
                				</div> <!-- end row -->
                				<div class="tablerow"> <!-- inputs -->
                					<!--<input id="city" type="text" name="city" value="">-->
                					<!--<select id="state" name="state">
                						<option value="" selected>--</option>
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
                					</select>-->
                					<!--<input id="zip" type="text" name="zip" value="" maxlength="5">-->
						<!-- Physical Address End -->

                				</div> <!-- end row -->			
                			</div> <!-- end tab 1 -->
                				
                			<div class="interim-form">
                				<div class="interim-header"><h3>Primary Contact</h3></div>
                				<div class="tablerow">
                					<span style="line-height:35px;" id="hd_fname">First</span>
                					<!--<span id="hd_mname">Middle</span>-->
                					<span style="line-height:35px;margin-left:129px; id="hd_lname">Last</span>
                					<span style="line-height:35px;margin-left:128px; id="hd_title">Title</span>
                					<span style="line-height:35px;margin-left:28px;" id="hd_title">Gender</span>
                				</div>
                				<div class="tablerow">
                					<input id="fname" type="text" name="fname" value="" required>
                					<!--<input id="mname" type="text" name="mname" value=""> -->
                					<input id="lname" type="text" name="lname" value="" required>
                					<!--<input id="pname" type="text" name="">--> 
                					<select name="title">
                						<option value="">---</option>
                						<option value="Mr.">Mr.</option>
                						<option value="Ms.">Ms.</option>
                						<option value="Mrs.">Mrs.</option>
                						<option value="Miss">Miss</option>
                						<option value="Dr.">Dr.</option>
                						<option value="Rev.">Rev.</option>
                					</select>
                					<select name="gender">
                						<option value="">---</option>
                						<option value="Male">Male</option>
                						<option value="Female">Female</option>
                					</select>                           
                				</div> <!-- end row -->
                				
                					<table>
                						<tr>
                							<td id="td_1">
                							<div class="tablerow">	
                									<span style="line-height:35px;" id="hd_wphone">Primary Phone</span>
                									<span style="line-height:35px;margin-left:65px;" id="hd_ext">Ext</span>
                								</div> <!-- end row -->	
                								<div class="tablerow">
                									<input id="wphone1" type="text" name="phone" value maxlength="14">
                									<!--<input id="wphone2" type="text" name="" value="">
                									<input id="wphone3" type="text" name="" value="">-->
                									<input id="ext" type="text" name="ext" value="" maxlength="5">
                								</div>
                								<div class="tablerow">
                									<span style="line-height:35px;" id="hd_loginemail">Email Address</span>
                								</div> <!-- end row -->
                								<div class="tablerow">
                									<input id="loginemail" type="email" name="email" value="" required>                              
                								</div> <!-- end row -->
                								<div class="tablerow">
                									
                								</div> <!-- end row -->
                								<div class="tablerow">
                									<!--<input id="password" type="password" name="" value="">     
                									<input id="cpassword" type="password" name="" value=""> -->                             
                								</div> <!-- end row -->
                								
                								
                							</td>
                
                							<td id="td_2">
                								 <!-- end row -->	
                							</td>
                						</tr>
                					</table>
</div>
                    			</div> <!-- end tab2 content (primary contact) -->
                    				
                    			<!--<div class="interim-form">  profile pic tab3
                    				<div class="interim-header"><h2>Contact Photo</h2></div>
                    				<div class="tablerow"> 
                    					<span  id="">Upload Supporter Photo:</span>
                    					<input type="file" id="" name="uploaded_file">
                    					
                    					<br><br>
                    					
                    				</div>  --><!-- end row -->
                    	    	<!--	</div>  end tab3 content (profile pic) | Only two tabs, dunno why this div was originally left uncommented-->
                    		</div> <!-- end simple tabs -->
                    			<br>		
                    		<input class="redbutton" type="submit" name="submit" value="Add New Business Supporter">
                    		<!--<input class="redbutton" type="submit" name="" value="Save & Add Another Supporter">-->
                    	</form>
                    
                    	<br>
                    	
                    	<!--<form class="graybackground">
                    		<h3>--Option 2: Add Multiple Business Supporters--</h3>
                    		<h2>How To Add Multiple Accounts</h2><br>
                    		<ol>
                    			<li><a href="">Download</a> Our Business Supporter Setup Spreadsheet</li>
                    			<li>Input the Data for Each Business Supporter Account you Want to Add</li>
                    			<li>Upload the Completed Spreadsheet Below...</li>
                    		</ol>
                    		<input type="file" name="">
                    		<input class="redbutton" type="submit" name="" value="Upload File">
                    	</form>-->
                </div> <!-- end table -->
            </div><!-- end biz-col -->
        </div> <!-- end row-fluid -->
    </div> <!--end container-->
      <?php include 'footer.php' ; ?>   

</body>
</html>

<?php
   ob_end_flush();
?>