<?php
	session_start();
	ob_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Welcome to GreatMoods</title>
<link href="../../css/mainRecruitingStyles.css" rel="stylesheet" title="Set up your account" type="text/css" id="Set up your account" />
</head>

<body>
<div id="container">
  <?php include 'header.inc.php'; ?>
  <?php include 'leftSidebarNavDistributor.php'; ?>
  <div id="content">
    <h2>Gift Basket Opportunities</h2>
    <h3>The GreatMoods Product Line</h3>
    <div id="column1">
      <p>GreatMoods has a wonderful variety of Gift Baskets for every special occasion and type of Retail Consumer. This makes for a perfect year-round revenue-generating fundraiser because customers can send them as gifts to friends and family members, business customers and clients. There are 3 to 4 major Gift Basket seasons each year, starting with the Fall Holidays.</p>
      <div id="leadBox">
        <div id="infoText">
          <div id="redBar1">
            <h4>Gift Baskets Make Great Gifts Year-Round</h4>
          </div>
          <!--end redBar1-->
          <ul>
          <li><a href="fallbaskets.php">Fall & Holiday Gift Baskets</a><br>(Thanksgiving, Hanukkah, Christmas)</li>
<li><a href="newyearbaskets.php">Start the New Year with…</a><br>(Valentine’s Day, Easter, Mother’s Day,<br>Father’s Day & Graduation)</li>
<li><a href="themebaskets.php">Themes</a><br>(Coffee, Spa, Christian, Children’s &<br>Our New Fun Fashion Boutique)</li>
<li><a href="seasonalbaskets.php">Seasonal</a><br>(Picnic, Friend & Family Game Night<br>& Sports Themed)</li>
<li><a href="businessbaskets.php">Business Gift Baskets</a><br>You can write anywhere from $5,000-$30,000 orders with your local banker, accountants, attorneys, real estate agents, co-ops &<br>any small businessperson</li>
<li><a href="specialbaskets.php">Special Occasions</a> Coming Soon<br>(Birthday, Anniversary, Baby & Wedding Showers)</li>
	</ul>
        </div>
        <!--end infoText--> 
      </div>
      <!--end leadBox-->
      <p>&nbsp;</p>
      <img id="basket1Left" src="../images/rep-pages/3bags.png" width="404" height="270" alt="Christmas Gift Basket"> 
      <div id="pcaption">GreatMoods offers Gift Baskets in many different themes for any occasion. </div>
    </div>
    <!--end column1-->
    
    <div id="column2"> <img src="../images/rep-pages/holidaybaskets.png" width="389" height="306">
      <p><br>Gift Baskets are designed for most events and for every consumer you can think of, year-round. Online Shopping/Fundraising is going through the roof with double-digit annual growth and is perfect for the cell phone and Facebook generation. This is a great way to raise funds for your organization and take care of your gift list at the same time.</p>
      <p>Gifts Baskets are a great Fundraising Product and with price points for everyone to be able to ship year-round. You can’t ship cookie dough or $1.00 chocolate bars. Online year-round fundraising is the future with our Free Website Fundraising GreatMoods Program.</p>
      <p>GreatMoods delivers every Gift Basket to the address the customer indicated, so there is no handling of the product by you or your accounts.</p>
      <p>All ordering is done online at the Student/Member’s Free Fundraising Website using PayPal. All Cash is distributed next day, 24/7/365 days a year. Online Fundraising just can’t get any better than with our GreatMoods Gift Basket Program.</p>
    </div>
    <!--end column2--> 
    <!--<p>[“Next” Button] – links to Who Are Targeted Customers				[“Back to MainPage”]
												Button
</p>--> 
    
  </div>
  <!--end content-->
  <?php include 'footer.php' ; ?>
</div>
<!--end container-->

</body>
</html>
<?php
ob_end_flush();
?>