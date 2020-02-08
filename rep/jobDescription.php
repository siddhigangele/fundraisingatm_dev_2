<?php
	session_start();
	if(!isset($_SESSION['authenticated']))
       {
            header('Location: ../jobDescription.php');
            exit;
       }
	ob_start();
?>

  <?php include 'header.inc.php'; ?>
  <?php include 'leftSidebarNavRep.php'; ?>

  <div id="content">
    	<h1>Job Description & Responsibilities</h1>
		<h3> FundraisingATMs Representative Steps to $uccess</h3>

		<p>Welcome.  As a FundraisingATMs Representative you will get to help your surrounding community reach their goals while earning a residual
	lifetime income for yourself, for as long as you maintain the accounts. </p>

		<p>  The Representative job starts with identifying fundraising prospects, contacting the appropriate people within those organizations and
	getting them setup with their Free Fundraising website program (with our help).  </p>

		<h5>Achieving Success for your Fundraising Account's goal is your number one responsibility.</h5>
		<p>The Fundraising opportunities in your Community, State and Region are limitless and timeless. Every School, Church and Community Organization will need Fundraisers for decades. Let your Fundraising Account know achieving $uccess for their Goal is your Goal. </p>

		<h5>Providing Great Customer Service and Support is your second major responsibility.</h5>
		<p> Once a Free Fundraising Website is setup, communicate and support their fundraising leaders. Those fundraising leaders can make your job very easy, if they are maintaining their member lists and updating their fundraising websites like a Facebook or Twitter account. </p>

		<h5>Focusing like a laser on organizing and achieving your fundraising sales goals each and every day is your third responsibility.</h5>
		<p> The income calculator has excited every person who has put in the number of fundraisers they believe they can setup and accomplish in one year. Who will ever turn off a Free Fundraising Website that gets them Cash Weekly on every sale, which we deliver, and it makes them money 24/7/365 days a year!?! Define your sales goals, define your prospect lists and focus on getting those prospect accounts setup.  </p>

		<h5>Hurry! This great, long-term residual lifetime income opportunity is yours for years, if not decades to come, so your fourth responsibility is to get started today.</h5>
		<p>Once you lockup your Free Fundraising Website accounts, you lockout the competition. First come, first serve.  Nobody is going to change from the FundraisingATMs Free Fundraising Website Program once it is setup, as long as you support the fundraising leaders and we continue to update the products and software features. </p>

		<br>

		<h3> FundraisingATMs Representative Responsibility Summary,<br>Simple Steps to get groups to sign up for fundraisers: </h3>
		<ul class="bulletedlist">
			<li>Identify your Fundraising Prospects</li>
			<li>Setup their Free Example Website</li>
			<li>Contact the Fundraising Leader Prospects</li>
			<li>Explain and Show them the FundraisingATMs Free Online Program</li>
			<li>Let them know, “Achieving $uccess for their Goal is your Goal!” </li>
			<li>Follow up each day with your Prospects and Close the Deal</li>
			<li>Help Setup the Fundraising Accounts Website and Members</li>
			<li>Keep in touch with the Fundraising Account Leaders</li>
			<li>Each Day, Review your Daily Appointments and Sales Goals</li>
			<li>Each Week, Review your Weekly Plan and your next Week’s Sales Goals</li>
			<li>Achieve a Lifetime Residual Income by reviewing your Month and Year Goals</li>
		</ul>
		<br>
     </div>  <!--end content-->

	<?php include 'footer.php' ; ?>
</div> <!--end container-->

</body>
</html>
<pre>
<?php if ($_POST && $mailSent){
	echo htmlentities($message, ENT_COMPAT, 'UTF-8')."\n";
	echo 'Headers: '.htmlentities($headers, ENT_COMPAT, 'UTF-8');
} ?>
</pre>
<?php
   ob_end_flush();
?>
