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
    <h1>Generate Funds 24/7/365 Days a Year!</h1>
    <h3></h3>

    <div id="column1">
    	<p>The FundraisingATMs Fundraising Program allows a low key, painless way to generate revenue year round for your group's Fundraiser. The reason, we have products that you or your supporters could use every day and many of them for years to come. Hey, if you have to support a Fundraiser for yourself or your child, shouldn’t there a fun benefit for you? By the time you need the funds, it could be a non-event because you have already raised your Groups Goal during the year.</p>
    	<p>The FundraisingATMs Mall will constantly be adding new products daily for all seasons, age groups; from the practical, to silly for all activities and events. Year round, every purchase made from your any of your Groups Fundraising Websites, 35% of that sale is deposited into your PayPal Fundraising Account weekly.</p>
    	<p>With this one Fundraising Program you could actually reach your Fundraising Goal in well in advance of the date you need the funds. Pretty nice way to achieve your fundraising goals; cash weekly, we deliver, one time setup, and the Social Networking kids love it. Get started with FundraisingATMs Today!</p>
    </div><!--end column1-->

    <div id="column2">
      	<br>
    	<img src="../images/rep-pages/boyscouts.png" width="404" height="270" alt="Boyscout Troop">
	<img class="imgLeft" src="../images/rep-pages/cellist.png" width="198" height="166" alt="Student Playing the Cello">
	<img class="imgRight" src="../images/rep-pages/baseball.png" width="198" height="166" alt="Baseball Team">
    </div><!--end column2-->
  </div>  <!--end content-->
  
  <?php include 'footer.php' ; ?>
</div><!--end container-->

</body>
</html>
<?php
ob_end_flush();
?>
