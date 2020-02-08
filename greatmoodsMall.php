<?php
      session_start();
      ob_start();
      define("SITE_ROOT",$_SERVER["DOCUMENT_ROOT"].'/salesTest/');
      include("includes/connection.inc.php");
      include("includes/functions.php");
      $link = connectTo();
      $groupID = trim($_GET['group']);
      $store = trim($_GET['storeid']);
      $where = $_SERVER['REQUEST_URI'];

      $query1 = "SELECT * FROM Dealers WHERE loginid = '$groupID'";
      $result1 = mysqli_query($link, $query1) or die(mysqli_error($link));
      $row1 = mysqli_fetch_assoc($result1);
      $memberPic = $row1['contact_pic'];
      $about = $row1['About'];
      $setup_person = $row1['setuppersonid'];
      $so_far = getSoloSales($groupID);

       //get parent info
      $parent_query = "SELECT * FROM Dealers WHERE loginid = '$setup_person'";
      $getParent = mysqli_query($link, $parent_query)or die(mysqli_error($link));
      $row7 = mysqli_fetch_assoc($getParent);
      $group_photo1 = $row7['group_team_pic'];
      $leader_photo1 = $row7['leader_pic'];
      $student_photo1 = $row7['location_pic'];
      $contact_pic1 = $row7['contact_pic'];
      $banner_path1 = $row7['banner_path'];
      $start1 = $row7['FundraiserStartDate'];
      $end1 = $row7['FundraiserEndDate'];
      $goal = $row7['goal2'];

      $query3 = "SELECT * FROM orgMembers WHERE fundraiserID = '$groupID'";
      $result3 = mysqli_query($link, $query3) or die(mysqli_error());
      $row3 = mysqli_fetch_assoc($result3);
      $owner = $row3['orgFName'].' '.$row3['orgLName'];
      $owner_email = $row3['orgEmail'];
      $owner_phone = $row3['orgPhone'];
      $parent = $row3['fund_owner_id'];

      $table = "sample_websites";
      $query = "SELECT * FROM $table WHERE samplewebID = '$store'";
      $result = mysqli_query($link, $query) or die(mysqli_error($link));
      $row_count = mysqli_num_rows($result);
      if($row_count == '0'){
        //echo "<br>Sample Website Not Found.<br>";
      }else{
         $row = mysqli_fetch_assoc($result);
         $club_name = $row['sampleName'];
         $club = $row['club'];
         $goal = $row['goal'];
         $so_far = $goal*.2;
         $banner_path = $row['bannerPath'];
         $position = $row['samplePosition'];
         $leader = $row['sampleFname'].' '.$row['sampleLname'];
         $phone = $row['samplePhone'];
         $group_email = $row['sampleGroupEmail'];
         $contact_photo = $row['contact_group_photo'];
         $group_photo = $row['groupPhoto'];
         $leader_photo = $row['group_leader'];
         $student_photo = $row['student_leaders'];
         $reasons = $row['sampleReasons'];
         $student_leader_name = $row['student_leader'];
         $student_name = $row['student_name'];
         if($row['sampleTitle']==''){
           $title = $club;
         }else{
           $title = $row['sampleTitle'];
         }
      }
?>

<!DOCTYPE HTML>
<head>
	<title>FundraisingATM Mall</title>
</head>

<body>
<div id="container">
	<?php include 'includes/header_sample.php'; ?>
	<?php include 'navigation/fullSidebar_home.php'; ?>

	<div id="contentSample">
		<h1 style="display:inline-block;">FundraisingATM Mall</h1>
		<div id="searchbar"> <script type="text/javascript" src="https://app.ecwid.com/script.js?9012020" charset="utf-8"></script> <script type="text/javascript"> xSearch("id=my-search-9012020"); </script> </div>
		
		<div>
			<!--<script type="text/javascript" src="https://app.ecwid.com/script.js?9012020"></script>-->
			<!--<script type="text/javascript"> xMinicart("style=","layout=floating", "title=Click and drag to move"); </script>-->
		</div>

		<!-- Product Browser Widget -->
		<div id="my-store-9012020"></div>
		<div>
			<script type="text/javascript" src="https://app.ecwid.com/script.js?9012020&data_platform=code&data_date=2016-03-17" charset="utf-8"></script>
			<script type="text/javascript">xAffiliate('<?php echo $groupID; ?>'); </script>
			<script type="text/javascript"> xProductBrowser("categoriesPerRow=4","views=grid(4,3) list(10) table(20)","categoryView=grid","searchView=list","id=my-store-9012020");</script>
		</div>
		<!-- END Product Browser Widget -->


	</div> <!--end content-->

	<!-- footer include deleted. add back later -->

</div> <!--end container-->

</body>
<?php include 'footer.php' ; ?>
</html>
<?php
ob_end_flush();
?>
