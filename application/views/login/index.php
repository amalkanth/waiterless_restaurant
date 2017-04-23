

<head>

<style>

.well1 {
vertical-align: middle;
    background-image: url('<?=base_url()?>image/admin.png');
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

</style>
</head>
<body>

<div class="c1" align="center">
<div class="text1" >
<div class="well1"><a class="well1" href="<?php echo base_url()?>login/adminlogin" title="photo" id="well1"><h3>ADMIN LOGIN</h3> </a></div><br><br>
<div class="well2"><a class="well2" href="<?php echo base_url()?>login/tablelogin" title="photo" id="well2"><h3>TABLE LOGIN</h3></a></div><br><br>
<div class="well3"><a class="well3" href="<?php echo base_url()?>login/cheflogin" title="photo" id="well3"><h3>CHEF LOGIN</h3></a><p></p></div><br><br>

</div>
</div>
</body>