<?php
include("header.php");
?>
<style>
.Col-heading {
    background: #d9fad1;
    font-weight: 600;
    font-size: 18px;
    padding: 10px 5px;
}
.serv-set {
    display: inline-block;
    width: 11.775em;
    padding: 3px;
    margin-left: 2px;
    white-space: normal;
    border: 1px solid #ff0000;
}
.why-us-grid h3 {
    font-size: 16px;
    font-weight: 700;
    color: #fc0000;
    padding-bottom: 5px;
    text-transform: capitalize;
}
.vendor-reg a {
    margin: 20px;
    width: 65%;
    background: #ff0000;
}
</style>
<!-- pop start-->
<div id="modalOverlay">
<div class="modalPopup">
<div class="modalContent">
<a class="buttonStyle right grey-text" id="button"><i class="fas fa-times"></i></a><br />
<div class="row">
<h2 class="center popup-heading">Get Quick Service</h2>
<form method="POST" action="https://www.tashome.in/enquiry/new_service/popup_enquiry" class="col s12">
<div class="row">
<div class="input-field col s12">
<a href="javascript:void(0);" class='dropdown-button' data-activates='area2' style="font-size: 14px; font-weight: bold; color:#ffc107;"><i class="fas fa-map-marker"></i>
India
</a>
<ul id="area2" class="dropdown-content" style="width: 200px;">
<li>

<!--
<a href='raipur.html' style='font-size:14px;'>India</a><a href='durg.html' style='font-size:14px;'>Durg Chhattisgarh</a><a href='bhilai.html' style='font-size:14px;'>Bhilai Chhattisgarh</a><a href='bilaspur.html' style='font-size:14px;'>Bilaspur Chhattisgarh</a> </li>
-->
</ul>
</div><div class="row"></div>
<div class="row hide">
<div class="col s7">
<select name="branch_id" class="browser-default" class="validate">
<option value="1" selected>1</option>
</select>
</div>
</div>
<div class="input-field col s10 m10 l11">
<select name="service_id[]" id="service_id" required="required" class="validate" multiple>
<option disabled selected>Select your Service</option><option value=1 style='width:100px;'>Ac Repair</option><option value=2 style='width:100px;'>Air Cooler Repair</option><option value=3 style='width:100px;'>Bathroom Cleaning</option><option value=4 style='width:100px;'>Carpenter</option><option value=5 style='width:100px;'>Carpet Cleaning</option><option value=6 style='width:100px;'>Kitchen Chimney Cleaning</option><option value=8 style='width:100px;'>Dth Tata Sky</option><option value=9 style='width:100px;'>Kitchen Chimney Repair</option><option value=10 style='width:100px;'>Electrician</option><option value=11 style='width:100px;'>Floor Cleaning</option><option value=12 style='width:100px;'>Flooring And Tiles Service</option><option value=13 style='width:100px;'>Gas Stove Repair</option><option value=14 style='width:100px;'>Geyser Repair</option><option value=15 style='width:100px;'>Home Deep Cleaning</option><option value=16 style='width:100px;'>Home Renovation Service</option><option value=17 style='width:100px;'>House Painter</option><option value=18 style='width:100px;'>Interior Designer</option><option value=19 style='width:100px;'>Inverter Repair</option><option value=20 style='width:100px;'>Kitchen Deep Cleaning</option><option value=21 style='width:100px;'>Mattress Cleaning</option><option value=22 style='width:100px;'>Microwave Oven Repair</option><option value=23 style='width:100px;'>Modular Kitchen Service</option><option value=24 style='width:100px;'>Office Chair Cleaning</option><option value=25 style='width:100px;'>Office Deep Cleaning</option><option value=26 style='width:100px;'>Pest Control Service</option><option value=27 style='width:100px;'>Plumber</option><option value=28 style='width:100px;'>Pop And False Ceiling</option><option value=29 style='width:100px;'>Refrigerator Repair</option><option value=30 style='width:100px;'>Sofa Cleaning</option><option value=31 style='width:100px;'>Tv Repair</option><option value=32 style='width:100px;'>Washing Machine Repair</option><option value=33 style='width:100px;'>Water Cooler Repair</option><option value=34 style='width:100px;'>Water Dispenser Repair</option><option value=35 style='width:100px;'>Water Proofing Service</option><option value=36 style='width:100px;'>Water Purifier Repair</option><option value=37 style='width:100px;'>Water Tank Cleaning</option><option value=38 style='width:100px;'>Sanitizing And Disinfecting Service</option> </select>
</div>
<div class="input-field col s2 m2 l1" style="padding-top: 20px;">
<a href="javascript:void(0)"><i class="material-icons">check</i></a>
</div>
<div class="input-field col s12">
<input id="name" type="text" name="name" class="validate" required />
<label for="name">Your Full Name</label>
</div>
<div class="input-field col s12">
<input name="contact" id="contact" type="text" maxlength="10" pattern="[6789][0-9]{9}" class="validate" required />
<label for="contact">Your Contact No.</label>
</div>
<div class="row"></div>
<div class="input-field col s12 center">
<button type="submit" name="popup-enquiry" class="btn btn-popup waves-effect waves-light">Book Now</button>
<p class="or">or</p>
<a href="tel:0000000000" class="call">Call Now : 0000000000</a>
</div>

</div>
</form>
</div>
</div>
</div>
</div>

<!-- pop end -->




<aside id="left-sidebar-nav hide-on-large-only">
<ul id="slide-out" class="side-nav leftside-navigation">
<li class="no-padding">
<ul class="collapsible collapsible-accordion">
<li><a class='collapsible-header active'>Appliances Repair<i class='material-icons'>build</i></a><div class='collapsible-body'><ul><li><a href='#' title='ac repair'>Ac Repair</a></li><li><a href='#' title='air cooler repair'>Air Cooler Repair</a></li><li><a href='#' title='dth tata sky'>Dth Tata Sky</a></li><li><a href='#' title='kitchen chimney repair'>Kitchen Chimney Repair</a></li><li><a href='#' title='gas stove repair'>Gas Stove Repair</a></li><li><a href='#' title='geyser repair'>Geyser Repair</a></li><li><a href='#' title='inverter repair'>Inverter Repair</a></li><li><a href='#' title='microwave oven repair'>Microwave Oven Repair</a></li><li><a href='#' title='refrigerator repair'>Refrigerator Repair</a></li><li><a href='#' title='tv repair'>Tv Repair</a></li><li><a href='#' title='washing machine repair'>Washing Machine Repair</a></li><li><a href='#' title='water cooler repair'>Water Cooler Repair</a></li><li><a href='#' title='water dispenser repair'>Water Dispenser Repair</a></li><li><a href='#' title='water purifier repair'>Water Purifier Repair</a></li></ul></div></li><li><a class='collapsible-header active'>Handyman Service<i class='material-icons'>home</i></a><div class='collapsible-body'><ul><li><a href='#' title='carpenter'>Carpenter</a></li><li><a href='#' title='electrician'>Electrician</a></li><li><a href='#' title='house painter'>House Painter</a></li><li><a href='#' title='plumber'>Plumber</a></li></ul></div></li><li><a class='collapsible-header active'>Cleaning Services<i class='material-icons'>photo_filter</i></a><div class='collapsible-body'><ul><li><a href='#' title='bathroom cleaning'>Bathroom Cleaning</a></li><li><a href='#' title='carpet cleaning'>Carpet Cleaning</a></li><li><a href='#' title='kitchen chimney cleaning'>Kitchen Chimney Cleaning</a></li><li><a href='#' title='floor cleaning'>Floor Cleaning</a></li><li><a href='#' title='home deep cleaning'>Home Deep Cleaning</a></li><li><a href='#' title='kitchen deep cleaning'>Kitchen Deep Cleaning</a></li><li><a href='#' title='mattress cleaning'>Mattress Cleaning</a></li><li><a href='#' title='office chair cleaning'>Office Chair Cleaning</a></li><li><a href='#' title='office deep cleaning'>Office Deep Cleaning</a></li><li><a href='#' title='sofa cleaning'>Sofa Cleaning</a></li><li><a href='#' title='water tank cleaning'>Water Tank Cleaning</a></li></ul></div></li><li><a class='collapsible-header active'>Interior & Renovation<i class='material-icons'>location_disabled</i></a><div class='collapsible-body'><ul><li><a href='#' title='flooring and tiles service'>Flooring And Tiles Service</a></li><li><a href='#' title='home renovation service'>Home Renovation Service</a></li><li><a href='#' title='interior designer'>Interior Designer</a></li><li><a href='#' title='modular kitchen service'>Modular Kitchen Service</a></li><li><a href='#' title='pop and false ceiling'>Pop And False Ceiling</a></li><li><a href='#' title='water proofing service'>Water Proofing Service</a></li></ul></div></li><li><a class='collapsible-header active'>Sanitizing & Pest Control<i class='material-icons'>bug_report</i></a><div class='collapsible-body'><ul><li><a href='#' title='pest control service'>Pest Control Service</a></li><li><a href='#' title='sanitizing and disinfecting service'>Sanitizing And Disinfecting Service</a></li></ul></div></li> </ul>
</li>
</ul>
</aside>
<section id="content">

<div class="container-fluid">
<div class="row">

<div class="carousel carousel-slider center" data-indicators="true">
<div class="carousel-item white-text">
<a href="index.php"><img class="responsive-img" src="images/ban1.jpg" alt="tashome-banner" width="1350" height="320" /></a>
</div>
<div class="carousel-item white-text">
<a href="index.php"><img class="responsive-img" src="images/ban2.jpg" alt="tashome-banner" width="1350" height="320" /></a>
</div>
<div class="carousel-item white-text">
<a href="index.php"><img class="responsive-img" src="images/ban3.jpg" alt="tashome-banner" width="1350" height="320" /></a>
</div>
<div class="carousel-item white-text">
<a href="index.php"><img class="responsive-img" src="images/ban4.jpg" alt="tashome-banner" width="1350" height="320" /></a>
</div>
</div>

</div>
</div>

<div class="container">

<div class="row Quality">
<div class="Quality-grid qty-grid-1 col l3 m3 s6 center">
<i class="fas fa-truck"></i>
<p>Same Day Service</p>
</div>
<div class="Quality-grid qty-grid-2 col l3 m3 s6 center">
<i class="material-icons">verified_user</i>
<p>Verified Handyman</p>
</div>
<div class="Quality-grid qty-grid-3 col l3 m3 s6 center">
<i class="material-icons">build</i>
<p>Insured Work</p>
</div>
<div class="Quality-grid qty-grid-4 col l3 m3 s6 center">
<i class="far fa-smile"></i>
<p>Satisfaction Guaranteed</p>
</div>
</div>

<div class="row white">
<h1 class="Col-heading">Home Appliances Repair</h1>
<div class="Bottom-scroll-serv-Container">
<div class="serv_row">
<a href="#"><div class="serv-set center">
<i class="service service-AC-Repair"></i>
<h3>AC Repair Service</h3>
</div></a>
<a href="#"><div class="serv-set center">
<i class="service service-Washing-Machine-Repair"></i>
<h3>Washing Machine Repair</h3>
</div></a>
<a href="#"><div class="serv-set center">
<i class="service service-Microwave-Oven-Repair"></i>
<h3>Microwave Oven Repair</h3>
</div></a>
<a href="#"><div class="serv-set center">
<i class="service service-Water-Cooler-Repair"></i>
<h3>Water Cooler Repair</h3>
</div></a>
<a href="#"><div class="serv-set center">
<i class="service service-Water-Dispenser-Repair"></i>
<h3>Water Dispenser Repair</h3>
</div></a>
<a href="#"><div class="serv-set center">
<i class="service service-Inverter-Repair"></i>
<h3>Home Inverter Repair</h3>
</div></a>
</div>
<div class="serv_row">
<a href="#"><div class="serv-set center">
<i class="service service-Electric-Chimney-Repair"></i>
<h3>Kitchen Chimney Repair</h3>
</div></a>
<a href="#"><div class="serv-set center">
<i class="service service-Geyser-Repair"></i>
<h3>Geyser Repair</h3>
</div></a>
<a href="#"><div class="serv-set center">
<i class="service service-Gas-Stove-Repair"></i>
<h3>Gas Stove Repair</h3>
</div></a>
<a href="#"><div class="serv-set center">
<i class="service service-DTH_-TATA-Sky-Repair"></i>
<h3>DTH, TATA-Sky Service</h3>
</div></a>
<a href="#"><div class="serv-set center">
<i class="service service-TV-Repair"></i>
<h3>TV Repair </h3>
</div></a>
<a href="#"><div class="serv-set center">
<i class="service service-Air-Cooler-Repair"></i>
<h3>Air Cooler Repair</h3>
</div></a>
</div>
<div class="serv_row">
<a href="#"><div class="serv-set center">
<i class="service service-Refrigerator-Repair"></i>
<h3>Refrigerator Repair</h3>
</div></a>
<a href="#"><div class="serv-set center">
<i class="service service-Water-Purifier-Repair"></i>
<h3>Water Purifier Repair</h3>
</div></a>
</div>
</div>
</div>


<div class="row white">
<div class="Col-heading">On Demand Services</div>
<div class="Bottom-scroll-serv-Container">
<div class="serv_row">
<a href="#"><div class="serv-set center">
<i class="service service-Carpenter"></i>
<h3>Carpenter</h3>
</div></a>
<a href="#"><div class="serv-set center">
<i class="service service-Electrician"></i>
<h3>Electrician</h3>
</div></a>
<a href="#"><div class="serv-set center">
<i class="service service-Plumber"></i>
<h3>Plumber</h3>
</div></a>
<a href="#"><div class="serv-set center">
<i class="service service-Painter"></i>
<h3>Painter</h3>
</div></a>
</div>
</div>
</div>


<div class="row white">
<h2 class="Col-heading">Pest Control</h2>
<div class="Bottom-scroll-serv-Container">
<div class="serv_row">
<div class="pest-set center">
<img class="responsive-img" src="images/General-Pest-Control.webp" alt="General Pest Control" />
<h3>General Pest Control</h3>
<p class="center"><button onclick="if (!window.__cfRLUnblockHandlers) return false; location.href='#';" class="waves-effect waves-green btn-flat" data-cf-modified-e00224456859bdd74bc3ffcf-="">book now</button></p>
</div>
<div class="pest-set center">
<img class="responsive-img" src="images/Cockroach-Control.webp" alt="Cockroach Control" />
<h3>Cockroach Control</h3>
<p class="center"><button onclick="if (!window.__cfRLUnblockHandlers) return false; location.href='#';" class="waves-effect waves-green btn-flat" data-cf-modified-e00224456859bdd74bc3ffcf-="">book now</button></p>
</div>
<div class="pest-set center">
<img class="responsive-img" src="images/Termite-Control.webp" alt="Termite Control" />
<h3>Termite Control</h3>
<p class="center"><button onclick="if (!window.__cfRLUnblockHandlers) return false; location.href='#';" class="waves-effect waves-green btn-flat" data-cf-modified-e00224456859bdd74bc3ffcf-="">book now</button></p>
</div>
<div class="pest-set center">
<img class="responsive-img" src="images/Bed-Bugs-Control.webp" alt="Bed bugs Control" />
<h3>Bed Bugs Control</h3>
<p class="center"><button onclick="if (!window.__cfRLUnblockHandlers) return false; location.href='#';" class="waves-effect waves-green btn-flat" data-cf-modified-e00224456859bdd74bc3ffcf-="">book now</button></p>
</div>
<div class="pest-set center">
<img class="responsive-img" src="images/Rodent-Control.webp" alt="Rodent Control" />
<h3>Rodent Control</h3>
<p class="center"><button onclick="if (!window.__cfRLUnblockHandlers) return false; location.href='#';" class="waves-effect waves-green btn-flat" data-cf-modified-e00224456859bdd74bc3ffcf-="">book now</button></p>
</div>
</div>
</div>
</div>


<div class="row white">
<div class="Col-heading">Cleaning Services</div>
<div class="Bottom-scroll-serv-Container">
<div class="serv_row">
<a href="#"><div class="serv-set center">
<i class="service service-Bathroom-Cleaning"></i>
<h3>Bathroom Cleaning</h3>
</div></a>
<a href="#"><div class="serv-set center">
<i class="service service-Water-Tank-Cleaning"></i>
<h3>Water Tank Cleaning</h3>
</div></a>
<a href="#"><div class="serv-set center">
<i class="service service-Home-Cleaning"></i>
<h3>Home Cleaning</h3>
</div></a>
<a href="#"><div class="serv-set center">
<i class="service service-Carpet-Cleaning"></i>
<h3>Carpet Cleaning</h3>
</div></a>
<a href="#"><div class="serv-set center">
<i class="service service-Floor-Cleaning"></i>
<h3>Floor Cleaning</h3>
</div></a>
<a href="#"><div class="serv-set center">
<i class="service service-Office-Cleaning"></i>
<h3>Office Cleaning</h3>
</div></a>
</div>
<div class="serv_row">
<a href="#"><div class="serv-set center">
<i class="service service-Sofa-Cleaning"></i>
<h3>Sofa Cleaning</h3>
</div></a>
<a href="#"><div class="serv-set center">
<i class="service service-Electric-Chimney-Repair"></i>
<h3>Kitchen Chimney Cleaning</h3>
</div></a>
<a href="#"><div class="serv-set center">
<i class="service service-Kitchen-Deep-Cleaning"></i>
<h3>Kitchen Deep Cleaning</h3>
</div></a>
<a href="#"><div class="serv-set center">
<i class="service service-Mattress-Cleaning"></i>
<h3>Mattress Cleaning</h3>
</div></a>
<a href="#"><div class="serv-set center">
<i class="service service-Office-Chair-Cleaning"></i>
<h3>Office Chair Cleaning</h3>
</div></a>
</div>
</div>
</div>


<div class="row white">
<h2 class="Col-heading">Interior & Home Renovation</h2>
<div class="col l4 m4 s12">
<div class="col s12">
<div class="row">
<div class="partner-grid3">
<img class="responsive-img" src="images/interior-designer.webp" alt="interior-designer" />
<div class="part-content">
<span>INTERIOR DESIGNER</span>
<button onclick="if (!window.__cfRLUnblockHandlers) return false; location.href='#';" class="waves-effect waves-green btn-flat right" data-cf-modified-e00224456859bdd74bc3ffcf-="">Enquiry Now</button>
</div>
</div>
</div>
<div class="row">
<div class="partner-grid3">
<img class="responsive-img" src="images/modular-kitchen.webp" alt="modular-kitchen" />
<div class="part-content">
<span>MODULAR KITCHEN</span>
<button onclick="if (!window.__cfRLUnblockHandlers) return false; location.href='#';" class="waves-effect waves-green btn-flat right" data-cf-modified-e00224456859bdd74bc3ffcf-="">Enquiry Now</button>
</div>
</div>
</div>
</div>
</div>
<div class="col l4 m4 s12">
<div class="col s12">
<div class="row">
<div class="partner-grid2">
<img class="responsive-img" src="images/flooting-and-tiles.webp" alt="flooting-and-tiles" />
<div class="part-content">
<span>FLOORING & TILES</span>
<button onclick="if (!window.__cfRLUnblockHandlers) return false; location.href='#';" class="waves-effect waves-green btn-flat right" data-cf-modified-e00224456859bdd74bc3ffcf-="">Enquiry Now</button>
</div>
</div>
</div>
<div class="row">
<div class="partner-grid2">
<img class="responsive-img" src="images/home-renovation.webp" alt="home-renovation" />
<div class="part-content">
<span>HOME RENOVATION</span>
<button onclick="if (!window.__cfRLUnblockHandlers) return false; location.href='#';" class="waves-effect waves-green btn-flat right" data-cf-modified-e00224456859bdd74bc3ffcf-="">Enquiry Now</button>
</div>
</div>
</div>
</div>
</div>
<div class="col l4 m4 s12">
<div class="col s12">
<div class="row">
<div class="partner-grid1">
<img class="responsive-img" src="images/pop-false-ceiling.webp" alt="pop-false-ceiling" />
<div class="part-content">
<span>FALSE CEILING</span>
<button onclick="if (!window.__cfRLUnblockHandlers) return false; location.href='#';" class="waves-effect waves-green btn-flat right" data-cf-modified-e00224456859bdd74bc3ffcf-="">Enquiry Now</button>
</div>
</div>
</div>
<div class="row">
<div class="partner-grid1">
<img class="responsive-img" src="images/waterproofing.webp" alt="waterproofing" />
<div class="part-content">
<span>WATERPROOFING</span>
<button onclick="if (!window.__cfRLUnblockHandlers) return false; location.href='#';" class="waves-effect waves-green btn-flat right" data-cf-modified-e00224456859bdd74bc3ffcf-="">Enquiry Now</button>
</div>
</div>
</div>
<div class="row">
<div class="partner-grid1">
<img class="responsive-img" src="images/sanitizing-and-disinfecting-service.webp" alt="sanitizing-and-disinfecting-service" />
<div class="part-content">
<span>sanitizing and disinfecting</span>
<button onclick="if (!window.__cfRLUnblockHandlers) return false; location.href='#';" class="waves-effect waves-green btn-flat right" data-cf-modified-e00224456859bdd74bc3ffcf-="">Enquiry Now</button>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="row why-us">
<div class="col s12 head center">
<h2>WHY CHOOSE US ?</h2>
<p>We focus on satisfying the needs of customers. Our focus is to meet or exceed the customer expectations for an exceptional quality of service that is served to be taken out or delivered quickly, and in a friendly manner.</p>
</div>
<div class="col l4 m6 s12 why-us-main-grid">
<div class="col s3 why-us-grid">
<div class="icon center">
<i class="far fa-smile"></i>
</div>
</div>
<div class="col s9 why-us-grid">
<h3>100% Satisfaction</h3>
<p>We don’t provide service only but we change the perception and feeling along. If not free rework done.</p>
</div>
</div>
<div class="col l4 m6 s12 why-us-main-grid">
<div class="col s3 why-us-grid">
<div class="icon center">
<i class="fab fa-creative-commons-share"></i>
</div>
</div>
<div class="col s9 why-us-grid">
<h3>Transparency</h3>
<p>At TAS Home Service we put clear information of service at every stage of operation in front of customers.</p>
</div>
</div>
<div class="col l4 m6 s12 why-us-main-grid">
<div class="col s3 why-us-grid">
<div class="icon center">
<i class="fas fa-map-marked-alt"></i>
</div>
</div>
<div class="col s9 why-us-grid">
<h3>One Stop Solution</h3>
<p>We provide 110+ Services at best price so that customers need not go outside of tashome.in for further choice.</p>
</div>
</div>
<div class="col l4 m6 s12 why-us-main-grid">
<div class="col s3 why-us-grid">
<div class="icon center">
<i class="fas fa-calendar-check"></i>
</div>
</div>
<div class="col s9 why-us-grid">
<h3>Quality Assurance</h3>
<p>We don’t tell our standards we show it indeed. The work only is performed by our specialist champs.</p>
</div>
</div>
<div class="col l4 m6 s12 why-us-main-grid">
<div class="col s3 why-us-grid">
<div class="icon center">
<i class="fas fa-cubes"></i>
</div>
</div>
<div class="col s9 why-us-grid">
<h3>Best At Cheapest</h3>
<p>Tashome.in offers best quality of services at least price in order to meet customer standards and demands.</p>
</div>
</div>
<div class="col l4 m6 s12 why-us-main-grid">
<div class="col s3 why-us-grid">
<div class="icon center">
<i class="fas fa-network-wired"></i>
</div>
</div>
<div class="col s9 why-us-grid">
<h3>Wide Range Of Choice</h3>
<p>We provide various choices in order to satisfy the customer and to meet their demand at the standard they want.</p>
</div>
</div>
</div>

</div>
<div class="container-fluid">
<div class="row white">
<div class="container">
<div class="row center vendor-reg">
<div class="col l6 m6 s12"><p>Want to become a TAS Home Service partner ?</p></div>
<div class="col l6 m6 s12"><a href="contact-us.php" class="waves-effect waves-green btn">Register Now</a></div>
</div>
</div>
</div>






<?php
include("footer.php");
?>