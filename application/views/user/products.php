<head>
<style>
body{
    font-family: "Lucida Sans";
    font-size: 12px;
}
 
#wrap{
    width: 1024px;
}
 
ul.products{
    list-style-type: none;
    width: 525px;
    margin: 0;
    padding: 0;
}
 
    ul.products li{
        background: #eeeeee;
        border: 1px solid #d3d3d3;
        padding: 5px;
        width: 150px;
        text-align: center;
        float: left;
        margin-right: 10px;
    }
 
    ul.products h3{
        margin: 0;
        padding: 0px 0px 5px 0px;
        font-size: 14px;
    }
     
    ul.products small{
        display: block;
    }
     
    ul.products form fieldset{
        border: 0px;
    }
     
    ul.products form label{
        font-size: 12px;
    }
     
    ul.products form input[type=text]{
        width: 18px;
        background: #FFF;
        border: 1px solid #d3d3d3;
    }

</style>
</head>
<ul class="products">
    <?php foreach($products as $p): ?>
    <li>
        <h3><?php echo $p['item_name']; ?></h3>
        <img height="150" width="150" src="<?=base_url(). 'image/menu/' ."offer1.jpg"?>" alt="" />
        <small>&euro;<?php echo $p['price']; ?></small></br>
        <small>&euro;<?php echo $p['description']; ?></small>
        <?php echo form_open('user/add_cart_item'); ?>
            <fieldset>
                <label>Quantity</label>
                <?php echo form_input('quantity', '1', 'maxlength="2"'); ?>
                <?php echo form_hidden('product_id', $p['item_id']); ?>
                <?php echo form_submit('add', 'Add'); ?>
            </fieldset>
        <?php echo form_close(); ?>
    </li>
    <?php endforeach;?>
</ul>

<?=base_url(). 'image/menu/' . $p['path'];?>