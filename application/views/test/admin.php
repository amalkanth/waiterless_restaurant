
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("well1").focus(function(){
        $(this).css("background-color", "#cccccc");
    });
    $("well1").blur(function(){
        $(this).css("background-color", "#ffffff");
    });
});
</script>
<style>
 
<!--

.well1 {
vertical-align: middle;
    background-image: url('image/admin.png');
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
body{
 background-image: url('image/restaurant.jpg');
    background-size:cover;
     background-repeat: no-repeat;
    background-position: center;
}
</style>
</head>
<body>
<h1>ADMIN LOGIN</h1>
<div id="container">
<?php echo form_open('login/adminvalidation'); ?>

<?php echo form_label('USERNAME :'); ?>
<?php echo form_input(array('id' => 'username', 'name' => 'username')); ?>
<?php echo form_label('PASSWORD:'); ?>
<?php echo form_password(array('id' => 'password', 'name' => 'password')); ?>
<?php echo form_submit(array('id' => 'submit', 'value' => 'LOGIN')); ?>
<?php echo form_close(); ?>
</div>
</body>

