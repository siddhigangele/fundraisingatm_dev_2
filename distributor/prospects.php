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
<meta charset="UTF-8">
<title>GreatMoods Targeted Organizations/Customers</title>
<link href="../css/mainRecruitingStyles.css" rel="stylesheet" type="text/css" />
<link href="../jquery-ui-1.7.2/css/base/ui.core.css" rel="stylesheet" type="text/css">
<link href="../jquery-ui-1.7.2/css/base/ui.accordion.css" rel="stylesheet" type="text/css">
<link href="../jquery-ui-1.7.2/css/base/ui.theme.css" rel="stylesheet" type="text/css">
<link href="../jquery-ui-1.7.2/css/base/ui.images.css" rel="stylesheet" type="text/css">
<script src="../jquery-ui-1.7.2/js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="../jquery-ui-1.7.2/js/jquery-ui-1.7.2.min.js" type="text/javascript"></script>
<style type="text/css">
/* BeginOAWidget_Instance_2028523: #jQueryUIAccordion */

		

#jQueryUIAccordion .ui-widget {
	font-family: inherit;
	padding: 0px;
}
#jQueryUIAccordion .ui-accordion-header {
	z-index: 100;
	line-height: 1em;
	color: #FFF;
	text-decoration: none;
	font-size: 1.25em;
	font-weight: normal;
	font-family: Arial, Helvetica, sans-serif;
	background-color: transparent;
	border:none;
/*	border-color: #d3d3d3;
	border-width: 1px;*/
}
#jQueryUIAccordion .ui-accordion-content {
	font-family: Arial, Helvetica, sans-serif;
	color: #FFF;
	font-size: .6em;
	background-color: transparent;
	background-color: #ccc; /*(this works*/)
	border:none;
	padding-bottom: 0px;
/*	border-color: #d3d3d3;
	border-width: 1px;*/
}
#jQueryUIAccordion .ui-state-default a, .ui-state-default a:link, .ui-state-default a:visited {
	color: #555555;
	color: #FFF;
}
/* Active text color */
#jQueryUIAccordion .ui-state-active a, .ui-state-active a:link, .ui-state-active a:visited {
	color: #FFFFFF;
	color: #FFF;
}
/* Active background color */
#jQueryUIAccordion .ui-state-active {
	background-color: transparent;
}
/* text color when you hover */
#jQueryUIAccordion .ui-state-hover a, .ui-state-hover a:hover {
	color: #FFF;
	color: #CCC;
}
/* background color when you hover */
#jQueryUIAccordion .ui-state-hover {
	background-color: transparent; }
/* Corner radius */
#jQueryUIAccordion .ui-corner-tl {
	-moz-border-radius-topleft: 7px;
	-webkit-border-top-left-radius: 7px;
}
#jQueryUIAccordion .ui-corner-tr {
	-moz-border-radius-topright: 7px;
	-webkit-border-top-right-radius: 7px;
}
#jQueryUIAccordion .ui-corner-bl {
	-moz-border-radius-bottomleft: 0px;
	-webkit-border-bottom-left-radius: 0px;
}
#jQueryUIAccordion .ui-corner-br {
	-moz-border-radius-bottomright: 0px;
	-webkit-border-bottom-right-radius: 0px;
}
#jQueryUIAccordion .ui-corner-top {
	-moz-border-radius-topleft: 7px;
	-webkit-border-top-left-radius: 7px;
	-moz-border-radius-topright: 7px;
	-webkit-border-top-right-radius: 7px;
}
#jQueryUIAccordion .ui-corner-bottom {
	-moz-border-radius-bottomleft: 0px;
	-webkit-border-bottom-left-radius: 0px;
	-moz-border-radius-bottomright: 0px;
	-webkit-border-bottom-right-radius: 0px;
}
#jQueryUIAccordion .ui-corner-right {
	-moz-border-radius-topright: 0px;
	-webkit-border-top-right-radius: 0px;
	-moz-border-radius-bottomright: 0px;
	-webkit-border-bottom-right-radius: 0px;
}
#jQueryUIAccordion .ui-corner-left {
	-moz-border-radius-topleft: 0px;
	-webkit-border-top-left-radius: 0px;
	-moz-border-radius-bottomleft: 0px;
	-webkit-border-bottom-left-radius: 0px;
}
#jQueryUIAccordion .ui-corner-all {
	-moz-border-radius: 7px;
	-webkit-border-radius: 7px;
}
		
/* EndOAWidget_Instance_2028523 */



</style>
<script type="text/xml">
<!--
<oa:widgets>
  <oa:widget wid="2028523" binding="#jQueryUIAccordion" />
</oa:widgets>
-->
</script>
</head>

<body>
<div id="container">
  <?php include '../rep/header.inc.php' ; ?>
  <?php include '../rep/leftSidebarNavRep.php' ; ?>
  <div id="content">
    <h1>Prospects and Accounts</h1>
    <h3>Who are The GreatMoods Prospective Organizations and Customers?</h3>
    <div id="column1">
      <script type="text/javascript">
// BeginOAWidget_Instance_2028523: #jQueryUIAccordion
 $(function(){
				// Accordion
				$("#jQueryUIAccordion").accordion({ header: "h3",
											animated: "slide",
											event: "click",
											collapsible : "false"
											  });			
				});
			
// EndOAWidget_Instance_2028523
    </script> 
      <!-- Accordion -->
      <div id="jQueryUIAccordion" class="ui-white-icons  ">
        <div>
          <h3><a href="#">Schools</a></h3>
          <div>
            <ul>
              <div id="photoSmallRt"> <img src="../images/rep-pages/danceteam.png" width="160" height="122" alt="Middle School Dance Team"> </div>
              <li><b>High Schools</b>
                <ul>
                <li><i>Clubs and Organizations</i></li>
                	<ul>
                	<li>Call this person 1</li>
                	<li>Call this person 2</li>
                	</ul>
                <li><i>Athletic Teams</i></li>
                	<ul>
                	<li>Call this person 1</li>
                	<li>Call this person 2</li>
                	</ul>
                </ul>
              </li>
              <li><b>Middle Schools</b>
                <ul>
                <li><i>Clubs and Organizations</i></li>
                	<ul>
                	<li>Call this person 1</li>
                	<li>Call this person 2</li>
                	</ul>
                <li><i>Athletic Teams</i></li>
                	<ul>
                	<li>Call this person 1</li>
                	<li>Call this person 2</li>
                	</ul>
                <li><i>PTO/PTA</i></li>
                	<ul>
                	<li>Call this person 1</li>
                	<li>Call this person 2</li>
                	</ul>
                </ul>
              </li>
              <li><b>Elementary Schools</b>
                <ul>
                <li><i>Clubs and Organizations</i></li>
                	<ul>
                	<li>Call this person 1</li>
                	<li>Call this person 2</li>
                	</ul>
                <li><i>Athletic Teams</i></li>
                	<ul>
                	<li>Call this person 1</li>
                	<li>Call this person 2</li>
                	</ul>
                <li><i>PTO/PTA</i></li>
                	<ul>
                	<li>Call this person 1</li>
                	<li>Call this person 2</li>
                	</ul>
                </ul>
              </li>
              <li><b>Colleges & Universities</b>
                <ul>
                <li><i>Clubs and Organizations</i></li>
                	<ul>
                	<li>Call this person 1</li>
                	<li>Call this person 2</li>
                	</ul>
                <li><i>Athletic Teams</i></li>
                	<ul>
                	<li>Call this person 1</li>
                	<li>Call this person 2</li>
                	</ul>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        <div>
          <h3><a href="#">Religious Organizations</a></h3>
          <div>
            <ul>
              <div id="photoSmallRt"><img src="../images/rep-pages/church.png" width="160" height="120" alt="Evangelical Church">

              </div>
              <li>Churches
              	<ul>
                <li>Ministries</li>
                <li>Choir</li>
                <li>General Fund</li>
                <li>Bible Camp & Youth Retreats</li>
                </ul>
              </li>
              <li>Religious Organizations
              	<ul>
                <li>Synagogues</li>
                <li>Mosques</li>
                <li>Other</li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        <div>
          <h3><a href="#">Community Organizations</a></h3>
          <div>
            <ul>
              <div id="photoSmallRt">
<img src="../images/rep-pages/jaycee.png" width="160" height="126" alt="Jaycee Women">
              </div>
              <li>Firemen and Police</li>
              <li>Community Clubs<br />
                - Jaycees<br />
                - Lions Club<br />
                - Rotary<br />
                - Kiwanis<br />
                - VFW<br />
                - American Legion Post<br />
                - Other</li>
            </ul>
          </div>
        </div>
        <div>
          <h3><a href="#">Youth and Sports Organizations</a></h3>
          <div>
            <ul>
              <div id="photoSmallRt">
              <img src="../images/rep-pages/boyscouts2.png" width="160" height="120" alt="Boy Scouts">
              </div>
              <li>Youth Organizations<br />
                - Boy Scouts<br />
                - Boys & Girls Club<br />
                - Girl Scouts<br />
                - Dance Studios</li>
              <li>Youth Athletic Groups<br />
                - Athletic Associations<br />
                - Individual Youth Sports Teams<br />
                - Intramural Sports</li>
            </ul>
          </div>
        </div>
        <div>
          <h3><a href="#">Local and National Charities</a></h3>
          <div>
            <ul>
              <div id="photoSmallRt">
              <img src="../images/rep-pages/firemen.png" width="160" height="107" alt="Firemen Fundraising for Breast Cancer Society">
              </div>
              <li>National Organizations<br />
                - Breast Cancer Society<br />
                - Special Olympics<br />
                - MDA<br />
                - Other</li>
              <li>Individual Chapters<br />
                - Animal Humane Society<br />
                - Other</li>
            </ul>
          </div>
        </div>
        <div>
          <h3><a href="#">Local Causes & Memorial</a></h3>
          <div>
            <ul>
              <div id="photoSmallRt">
              <img src="../images/rep-pages/greekfundraiser.png" width="160" height="120" alt="Local Causes">

              </div>
              <li>Local Causes<br />
                - Vets<br />
                - Special Medical Bills<br />
                - Special Needs</li>
              <li>Memorials<br />
                - Individuals</li>
              <li>Other</li>
            </ul>
          </div>
        </div>
      </div>

      

      
    </div>
    <!--end column1-->
    
    <div id="column2"> <img src="../images/rep-pages/fieldtrip1.png" width="404" height="271"> 
    <img class="imgLeft" src="../images/rep-pages/cancerwalk2.png" width="404" height="303" alt="Cancer Walk - Group Photo">
      <div id="pcaption">GreatMoods offers fundraising opportunities for schools, religious organizations, community organizations, and more. </div>
    </div>
    <!--end column2--> 
    <!--     [Create a flash file of various organizations. Put file at top in Banner area (winking and blinking)] </div>
  ["Next" Button] – links to DIIncome				["Back to MainPage"]
  Button --> 
  </div>
  <!--end content-->
  <?php include 'footer.php' ; ?>
</div>
<!--end container-->

</body>

<?php
ob_end_flush();
?>