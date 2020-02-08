<?php
	session_start();
	if(!isset($_SESSION['authenticated']))
       {
            header('Location: ../index.php');
            exit;
       }
	ob_start();
?>

<!DOCTYPE HTML>
<head>
<title>Getting Started | Distributor</title>
<link rel="stylesheet" type="text/css" href="../css/mainRecruitingStyles.css">
<link rel="stylesheet" type="text/css" href="../css/header_styles.css">
<link rel="shortcut icon" href="../images/favicon.ico">

<script>
$(document).ready(function() {
$(“.nav li:has(ul)”).hover(function(){
$(this).find(“ul”).slideDown();
}, function(){
$(this).find(“ul”).hide();
});
});
</script>
</head>

<body>
<div id="container">
<?php include 'header.inc.php'; ?><br><br>
<?php include 'leftSidebarNavDistributor.php'; ?>
  
<div id="content">
    	<h1>Getting Started</h1>
    	<h3>Achieving Success for your Goals is our Goal</h3>
<div id="column1">
<p>Setting up an Online Fundraiser for your entire Organization is probably a first for you and we know that. Here is your Fundraising To Do Checklist, with Step by Step forms to help you get started.</p> 
<p>A suggestion for any Organization or Fundraising Leader or non-techie types who are concerned about setting up an online Fundraiser. Find a couple kids or members who have a Cell Phone, Facebook page or Twitter account, because they could easily set up the whole Fundraiser in an evening and maintain any part of it in their sleep.</p>

<h5><b>Training Tips, Tools & Forms:</b></h5>
<h3>Overview Presentations</h3>
    <ul>
    	<li>Fundraising Word and PowerPoint Documents (PC or Mac)</li>
    	<li>Video Fundraising Overview</li>
    	<li>Complete Step by Step Fundraising Training Guide</li>
    	<li>Step by Step Student or Member Leader Guide</li>
    	<li>Sales Guide to Successfully Selling Products and Gifts</li>
    </ul>
    <h3>Getting Started Packet for the Fundraising Leaders, and Students</h3>
   	<ul>
   		<li>Welcome, Let’s Get Your Fundraiser Setup (Leaders To Do Checklist)</li>
    		<li>Welcome, Let’s get your Website Setup and Generating Funds (Student or Member To Do)</li>
    		<li>Fundraising Leaders Checklist</li>
    		<li>Student/Member Leader Checklist</li>
    		<li>Student/Member Checklist</li>
    	</ul>
    <h3>Forms and Marketing Materials</h3>
    	<ul>
   	 	<li>Friends & Family Email Prospect Form</li>
    		<li>Contact Card Form</li>
    		<li>Order Form with Best Sellers</li>
    		<li>Poster</li>
	</ul>

    </div>
    <!--end column1-->
    
    <div id="column2">
    <img src="../images/rep-pages/productgrouping2.png" width="347" height="307" alt="Product Grouping">
    
    <h3>Fundraising Emails</h3>
    	<ul>
    		<li>Announcements</li>
    		<li>Parent Emails</li>
    		<li>Student or Member Emails</li>
    		<li>Consumer Emails</li>
    		<li>Facebook Posts</li>
    	</ul>
    
<h3>Get Started Today</h3>
	<p>GreatMoods is looking forward to working with you and your Organization to build a long-term consistent Fundraising Revenue!</p>
	<p><b>Click the Button below to contact us and get started.</b></p>
	<div><a href="contactus.php"><input type="button" value="Let the Fundraising Begin!" title="Click to Contact Us About Getting Started"/></a></div>
	<br>
	
<div id="download"> <!-- PDF Download -->
	<a href="../forms/ad_brainstormingtemplate_v1.0_July22.pdf" target="_blank" title="Click to download file" download>
	<img src="../images/icons/pdf_download_icon.png" width="90" height="90" alt="pdf download icon" /></a><p>PDF Test File Name</p>
</div>	
	
<div id="download"> <!-- DOC Download -->
	<a href="../forms/Step-by-Step Success Guide.doc" target="_blank" title="Click to download file" download>
	<img src="../images/icons/doc_download_icon.png" width="90" height="90" alt="doc download icon" /></a><p>DOC Test File Name</p>
</div>
	
<div id="download"> <!-- XLS Download -->
	<a href="../forms/BOM_v1.0_June14.xlsx" target="_blank" title="Click to download file" download>
	<img src="../images/icons/xls_download_icon.png" width="90" height="90" alt="xls download icon" /></a><p>XLS Test File Name</p>
</div>

    </div> <!--end column2-->
</div> <!--end content-->

  <?php include 'footer.php' ; ?>
</div> <!--end container-->

</body>
</html>
<?php
ob_end_flush();
?>