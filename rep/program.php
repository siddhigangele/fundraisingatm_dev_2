<?php
	session_start();
	if(!isset($_SESSION['authenticated']))
       {
            header('Location: ../index.php');
            exit;
       }
	ob_start();
?>

  <?php include 'header.inc.php'; ?>
  <?php include 'leftSidebarNavRep.php'; ?>

  <div id="content">
    	<h1>Strengths of the FundraisingATMs Program </h1>
	<h3>10 Good Reasons To Do Fundraising Online With FundraisingATMs</h3>

	<div id="column1">
		<p><b>1.</b> Every Student, or Member of every Team, Club, Church or Organization gets their own Free Individually Personalized Fundraising Website.</p>
		<p><b>2.</b> The FundraisingATMs Shopping Mall offers a great selection of over 20,000+ fundraising products designed for all age groups.  Everyone is a potential customer or recipient of our products for every season, reason or occasion.</p>
		<p><b>3.</b> PayPal, the most trusted and fraud proof online order processing system, for the consumer market today, is used to process every order. </p>
		<p><b>4.</b> Cash is Deposited Weekly for every product sold directly into your groups’ PayPal account 24/7/ 365 days a year, forever!</p>
		<p><b>5.</b> Spring, Summer, Winter or Fall FundraisingATMs Fundraising delivers it all.  This one Program allows 3 to 5 significant fundraising income opportunities a year, with one simple setup.</p>
		<p><b>6.</b> Selling door-to-door really isn’t required because all of your Fundraising can be done online with Friends, Family and Neighbors from anywhere in the country.</p>
		<p><b>7.</b> We Deliver! Everything! Everywhere! You don’t touch the product, because it is delivered straight to the designated recipient (even when it’s for you)!</p>
		<p><b>8.</b> It’s Free, Now and Forever, No cost of anything to anyone, EVER. All you have to do is maintain new members and delete old ones a couple times a year.</p>
		<p><b>9.</b> New, absolutely! Facebook is new, Twitter is new and Texting is new. Personalized Fundraising Websites by FundraisingATMs are new, and being new and online is certainly a good thing for all your Students, Members and potential Supporters.</p>
		<p><b>10.</b> New to technology? Never worry about that.  With today’s tech savvy kids and family members, the Fundraising Program can be setup in no time. It's as easy to maintain as a Facebook or Twitter Account.</p>
	</div> <!--end column1-->

    <div id="column2">
    	<br>
    	<img src="../images/rep-pages/scarfgrouping.png" width="404" height="270" alt="5 Scarves">
	<img class="imgLeft" src="../images/rep-pages/boycomputer.png" width="198" height="166" alt="Student at Computer">
	<img class="imgRight" src="../images/rep-pages/teachercomputer.png" width="198" height="166" alt="Teacher at Computer Desk">
    	<div id="pcaption">FundraisingATMs offers fundraising opportunities for schools, religious organizations, community organizations and more.</div>
    </div> <!--end column2-->

   </div> <!--end content-->
  <?php include 'footer.php' ; ?>
</div> <!--end container-->

</body>
</html>
<?php
ob_end_flush();
?>
