<?php
	session_start();
	if(!isset($_SESSION['authenticated']))
       {
            header('Location: ../index.php');
            exit;
       }
	ob_start();
?>

  <?php include '../rep/header.inc.php'; ?>
  <?php include '../rep/leftSidebarNavRep.php'; ?>

  <div id="content">
    <h1>The FundraisingATMs Mall</h1>
  	<h3>Wonderful Fundraising Products and Gifts Year Round</h3>

    <div id="column1">
      <p>FundraisingATMs has a wonderful variety of Products and Gifts at our FundraisingATMs Mall for every season, reason and occasion. This makes for a perfect year-round Fundraiser because it offers the chance for people to order products for themselves or as gifts for others.</p>
      <p>The FundraisingATMs Mall has 20,000+ products that range from practical to silly, every day to elegant, delicious to indulgent and many of the Products and Gifts will be used for years to come.</p>
      <img src="../images/gm_mallproductsgifts.jpg" alt="collage" style="width: 100%;">
      <p>&nbsp;</p>
    </div>
    <!--end column1-->

    <div id="column2">
    	<div id="leadBox">
        	<div id="infoText">
          		<div id="redBar1">
				<h3>FundraisingATMs Mall Directory</h3>
			</div> <!--end redBar1-->
			<ul>
				<li>Multiple Fashion Boutiques</li>
				<li>Jewelry, Glitz & Glamour Accessories</li>
				<li>Activewear, Athleisure & Fitness Apparel</li>
				<li>Spring & Summer Fashions</li>
				<li>Trends Clothing for All Ages & Sizes</li>
				<li>Varsity Sports & Fitness Gear</li>
				<!--<li>The Man Cave</li> -->
				<li>Luxury Salon & Spa Products</li>
				<li>Cute PJ's & Bathrobes</li>
				<li>Romantically Sweet Boutique's</li>
		                <li>Purses, Pocketbooks & Pouches</li>
				<li>Briefcases, Luggage & Tech Cases</li>
		                <li>Inspirational & Motivational Treasures</li>
				<li>Family Fun & Games</li>
				<li>Creative Kids Toys</li>
				<li>Baby & Toddler Treasures</li>
				<!--<li>CandyLand</li> -->
				<li>Chocolates, Cookies & our Coffee Cafe</li>
				<li>Customer & Client Concierge Club Gifts</li>
				<li>Great Brand Names</li>
				<li>Gameday Collection of College & Pro Gear</li>
				<li>100+ Stores or over 20,000+ Products</li>
				<!--<li>It’s Hot – Best Sellers</li>
				<li>For the Ages</li>
				<li>The Cookie Jar (Coming Soon)</li>
				<li>The Chocolate Factory (Coming Soon)</li> -->
			</ul>
		</div> <!--end infoText-->
	</div> <!--end leadBox-->
    </div>    <!--end column2-->
  </div>  <!--end content-->

  <?php include 'footer.php' ; ?>
</div> <!--end container-->

</body>
</html>
<?php
ob_end_flush();
?>
