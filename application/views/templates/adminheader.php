<html>
<head>
<title>HOTEL NAME</title>

<link rel="stylesheet" href="https://bootswatch.com/superhero/bootstrap.min.css"></head>

<nav class="navbar navbar-default">
 <div class="container-fluid">
 <div class="navbar-header">
   <a class="navbar-brand" href="<?php echo base_url();?>admin/home">HOTEL NAME</a>
   
 </div>
 <!-- MENU ITEMS -->
 <div id="navbar">
 <ul class="nav navbar-nav ">
 <li class="active"><a href="<?php echo base_url(); ?>index">About</a></li>
 <li><a href="<?php echo base_url()?>index">Contact</a></li>
 </ul>
 
 </div>
 </div>
 </nav>
 
<style>
.navbar{
padding-left:150px
}
.nav-side-menu {
  overflow: auto;
  font-family: verdana;
  font-size: 12px;
  font-weight: 200;
  background-color: #2e353d;
  position: fixed;
  top: 0px;
  width: 300px;
  height: 100%;
  color: #e1ffff;
}
.nav-side-menu .brand {
  background-color: #2e353d;
  line-height: 40px;
  display: block;
  text-align: center;
  font-size: 14px;
}
.nav-side-menu .toggle-btn {
  display: none;
}
.nav-side-menu ul,
.nav-side-menu li {
  list-style: none;
  padding: 0px;
  margin: 0px;
  line-height: 35px;
  cursor: pointer;
  /*    
    .collapsed{
       .arrow:before{
                 font-family: FontAwesome;
                 content: "\f053";
                 display: inline-block;
                 padding-left:10px;
                 padding-right: 10px;
                 vertical-align: middle;
                 float:right;
            }
     }
*/
}
.nav-side-menu ul :not(collapsed) .arrow:before,
.nav-side-menu li :not(collapsed) .arrow:before {
  font-family: FontAwesome;
  content: "\f078";
  display: inline-block;
  padding-left: 10px;
  padding-right: 10px;
  vertical-align: middle;
  float: right;
}
.nav-side-menu ul .active,
.nav-side-menu li .active {
  border-left: 3px solid #d19b3d;
  background-color: #4f5b69;
}
.nav-side-menu ul .sub-menu li.active,
.nav-side-menu li .sub-menu li.active {
  color: #d19b3d;
}
.nav-side-menu ul .sub-menu li.active a,
.nav-side-menu li .sub-menu li.active a {
  color: #d19b3d;
}
.nav-side-menu ul .sub-menu li,
.nav-side-menu li .sub-menu li {
  background-color: #181c20;
  border: none;
  line-height: 28px;
  border-bottom: 1px solid #23282e;
  margin-left: 0px;
}
.nav-side-menu ul .sub-menu li:hover,
.nav-side-menu li .sub-menu li:hover {
  background-color: #020203;
}
.nav-side-menu ul .sub-menu li:before,
.nav-side-menu li .sub-menu li:before {
  font-family: FontAwesome;
  content: "\f105";
  display: inline-block;
  padding-left: 10px;
  padding-right: 10px;
  vertical-align: middle;
}
.nav-side-menu li {
  padding-left: 0px;
  border-left: 3px solid #2e353d;
  border-bottom: 1px solid #23282e;
}
.nav-side-menu li a {
  text-decoration: none;
  color: #e1ffff;
}
.nav-side-menu li a i {
  padding-left: 10px;
  width: 20px;
  padding-right: 20px;
}
.nav-side-menu li:hover {
  border-left: 3px solid #d19b3d;
  background-color: #4f5b69;
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -o-transition: all 1s ease;
  -ms-transition: all 1s ease;
  transition: all 1s ease;
}
@media (max-width: 767px) {
  .nav-side-menu {
    position: relative;
    width: 100%;
    margin-bottom: 10px;
  }
  .nav-side-menu .toggle-btn {
    display: block;
    cursor: pointer;
    position: absolute;
    right: 10px;
    top: 10px;
    z-index: 10 !important;
    padding: 3px;
    background-color: #ffffff;
    color: #000;
    width: 40px;
    text-align: center;
  }
  .brand {
    text-align: left !important;
    font-size: 22px;
    padding-left: 20px;
    line-height: 50px !important;
  }
}
@media (min-width: 767px) {
  .nav-side-menu .menu-list .menu-content {
    display: block;
  }
}
body {
  margin: 0px;
  padding: 0px;
}
.text1{
padding-left:310px;
padding-right:600px;
}
body{
 background-image: url('<?=base_url()?>/image/adminbc.jpg');
    
    background-size:cover;
     background-repeat: no-repeat;
    background-position: center;
    text-align:center;
}
</style>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<div class="nav-side-menu">
    <div class="brand"><a href="<?php echo base_url();?>admin/home">HOTELNAME</div>
   <!--- <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>------>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                  <a href="<?php echo base_url()?>menu/display">
                  <i class="fa fa-cutlery fa-lg"></i>menu
                  </a>
                </li>

                <li   data-target="#products" class="collapsed active">
                  <a href="<?php echo base_url()?>table/status"><i class="fa fa-eye fa-lg"></i> current status<span class="arrow"></span></a>
                  
                </li>
                 <li  data-toggle="collapse" data-target="#products" class="collapsed active">
                  <a href="<?php echo base_url()?>admin/billing"><i class="fa fa-credit-card fa-lg"></i> billing<span class="arrow"></span></a>
                  
                </li>
                 <li  data-toggle="collapse" data-target="#products" class="collapsed active">
                  <a href="<?php echo base_url()?>admin/customerview"><i class="fa fa-group fa-lg"></i> customer details<span class="arrow"></span></a>
                  
                </li>
                 <li  data-toggle="collapse" data-target="#products" class="collapsed active">
                  <a href="<?php echo base_url()?>admin/salesview"><i class="fa fa-money fa-lg"></i> sales<span class="arrow"></span></a>
                  
                </li>
                


                </ul>
     </div>
</div>
</head>