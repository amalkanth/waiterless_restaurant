

<head>

<style>

.well1 {
vertical-align: middle;
    background-image: url('<?=base_url()?>image/adm.jpg');
    background-size: 100%;
    background-repeat: no-repeat;
    background-position: center;
    border-radius: 50%;
    background-clip: border-box;
    transition: background-size 0.2s;
    transition-timing-function: cubic-bezier(.07,1.41,.82,1.41);
text-align: center;
vertical-align:middle;
    display: block;
    width: 190px;
    height: 190px;
    text-decoration: none;
    cursor: pointer;
    overflow: hidden;
    white-space:nowrap;
    
}


.well2 {
    background-image: url('image/table.jpg');
    background-size: 100%;
    background-repeat: no-repeat;
    background-position: center;
    border-radius: 50%;
    background-clip: border-box;
    transition: background-size 0.2s;
    transition-timing-function: cubic-bezier(.07,1.41,.82,1.41);
text-align: center;
    display: block;
    width: 190px;
    height: 190px;
    text-decoration: none;
    cursor: pointer;
    overflow: hidden;
    white-space:nowrap;
}

.photo:hover {
    background-size: 500px;
}
.well3 {
    background-image: url('image/chef.jpg');
    background-size: 100%;
    background-repeat: no-repeat;
    background-position: center;
    border-radius: 50%;
    background-clip: border-box;
    transition: background-size 0.2s;
    transition-timing-function: cubic-bezier(.07,1.41,.82,1.41);
text-align: center;
    display: block;
    width: 190px;
    height: 190px;
    text-decoration: bold;
    font-color:red;
    font-size:20px;
    cursor: pointer;
    overflow: hidden;
    
    white-space:nowrap;
}

.photo:hover {
    background-size: 500px;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}

.bdy{
 background-image: url('../waiterless_restaurant/image/rest.jpg');
    background-size:cover;
     background-repeat: no-repeat;
    background-position: center;
}
.nav
{
position:fixed;
}
body {margin: 0;}

ul.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #111;}

ul.topnav li a.active {background-color: #4CAF50;}

ul.topnav li.right {float: right;}

@media screen and (max-width: 600px){
    ul.topnav li.right, 
    ul.topnav li {float: none;}
}
</style>





</head>



<body class="bdy">
</br></br></br>
<div class="c1" align="center">
<div class="text1" >
<div class="well1"><a class="well1" href="<?php echo base_url()?>login/adminlogin" title="photo" id="well1"><h3></br></br></br></br></br>ADMIN LOGIN</h3> </a></div>
<div class="well2"><a class="well2" href="<?php echo base_url()?>login/tablelogin" title="photo" id="well2"><h3></br></br></br></br></br>TABLE LOGIN</h3></a></div><br><br>
<div class="well3"><a class="well3" href="<?php echo base_url()?>login/cheflogin" title="photo" id="well3"><h3></br></br></br>CHEF LOGIN</h3></a><p></p></div><br><br>

</div>
</div>
</body>