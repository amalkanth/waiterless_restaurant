<div class="order-container">
<?php
 
 //print_r($this->cart->contents());
if(!$this->cart->contents()):
    echo 'You don\'t have any pending orders ';
else:
?>
 
<?php echo form_open('user/update_cart'); ?>
<table width="53%" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <td width="14%">Qty</td>
            <td width="16%">Item </td>
            <td width="16%"> Price</td>
            <td width="20%">Sub-Total</td>
            <td width="34%">status</td>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach($this->cart->contents() as $items): ?>
         
        <?php echo form_hidden('rowid[]', $items['rowid']); ?>
        <tr <?php if($i&1){ echo 'class="alt"'; }?>>
            <td>
                <?php echo form_input(array('name' => 'qty[]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?>
            </td>
             
            <td><?php echo $items['name']; ?></td>
             <td>&#8377;<?php echo $this->cart->format_number($items['price']); ?></td>
             <td>&#8377;<?php echo $this->cart->format_number($items['subtotal']); ?></td>
      
         <td><?php echo $items['order_status'];?></td> 
            
        </tr>
         
        <?php $i++; ?>
        <?php endforeach; ?>
         
        <tr>
            
           <td></td>
            <td><strong>Total</strong></td>
            <td>&#8377;<?php echo $this->cart->format_number($this->cart->total()); ?></td>
        </tr>
    </tbody>
</table>
 
<p><?php echo form_submit('', 'Update your Cart'); echo anchor('user/empty_cart', 'Empty Cart', 'class="empty"');?>  <a href="../user/confirmorder" class="btn btn-info ">CONFIRM ORDER</a> </p>
<p><small>To cancel an item set quantity  to zero</small></p>
<?php 
echo form_close(); 
endif;
?>
</div>
