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
	<h1>FundraisingATMs Online Fundraising</h1>

	<div id="column1">
		<h3>New Trends in Fundraising</h3>
	      <p>Everyone has a cell phone and Internet access today. It would be very hard to find anyone who has not shopped Online or ordered Online to make a purchase for the Holidays or for a Special Occasion Gift.</p>
	      <p>Fundraising is about to change forever, from door to door sales of Candy, Cookie Dough and Gift Wrap being the primary means to raise money, to Online Fundraising. </p>
	      <p>A good online Fundraising Program will ship all products ordered directly to the Customer or Recipient.</p>
		  <p>Online e-commerce has been growing at a rate of 15% to 25% for over a decade and will continue at that growth rate for decades to come. Online Fundraising is beginning a similar growth rate to that right now! </p>
		<h3>Online Fundraising with FundraisingATMs</h3>
		  <p>Do you have a quality Online Fundraising Program and appropriate Product for Online Fundraising Sales? Can’t ship Cookie Dough, can’t ship one dollar Chocolate Bars, it would cost a fortune.</p>
		  <p>Products and Gifts from the FundraisingATMs Mall can be shipped Spring, Summer, Winter or Fall. FundraisingATMs Fundraising delivers it all.</p>
		  <p>This one Program allows 3 to 5 significant fundraising income opportunities a year, with one simple setup.</p>
		  <p>Cash is Deposited Weekly on every order directly into your Group's PayPal Account 24/7/365 days a year.</p>
		  <p>Browse our Fundraising Examples from the navigation bar above and see the Future of Fundraising.</p>
	</div> <!--end column1-->

    <div id="column2">
    	<br>
    	<img src="../images/rep-pages/oline.png" width="404" height="270" alt="Boyscouts">
	<img class="imgLeft" src="../images/rep-pages/orchestracamp.png" width="198" height="166" alt="Stuents Playing Dodgeball">
	<img class="imgRight" src="../images/rep-pages/kindergartenfieldtrip.png" width="198" height="166" alt="Elementary School Children">
    </div> <!--end column2-->

  </div> <!--end content-->

  <?php include 'footer.php' ; ?>
</div> <!--end container-->

</body>
</html>
<?php
ob_end_flush();
?>
