
<link href="<?php echo base_url() ?>assets/web/css/cartsection.css" rel="stylesheet" type="text/css" media="all"/>

<div class="main">
    <div class="content">
   <!-- start -->
   <div class="wrap">

<header class="cart-header cf">
  <strong>Items in Your Cart</strong>
  <!-- <span class="btn">Checkout</span> -->
</header>

<div class="cart-table">
  <ul>
  <?php   foreach ($cart_contents as $cart_items) {?>


    <li class="item">
      <div class="item-main cf">
        <div class="item-block ib-info cf">
        <img  class="product-img" src="<?php echo base_url('uploads/' . $cart_items['options']['product_image']) ?>" alt=""/>
          <!-- <img src="http://fakeimg.pl/150/e5e5e5/adadad/?text=IMG" /> -->
          <div class="ib-info-meta">
            <span class="title"><?php echo $cart_items['name'] ?></span>
            
          </div>
        </div>
        <div class="item-block ib-qty">
        <form action="<?php echo base_url('update/cart'); ?>" method="post">
            <input type="number" name="qty" value="<?php echo $cart_items['qty'] ?>"/>
            <input type="hidden" name="rowid" value="<?php echo $cart_items['rowid'] ?>"/>
            <input type="submit" name="submit" class ="update-item-btn"value="Update"/>
        </form> 
        </div>
        <div class="item-block ib-total-price">
          <span class="tp-price">Rs. <?php echo $this->cart->format_number($cart_items['subtotal']) ?></span>
          
          <span class="tp-remove"><i class="i-cancel-circle"></i></span>
          
        </div> 
                
      </div>
      <div class="item-foot cf">
    
      </div>
    </li>
    
<?php } ?>

</div>
<div class="sub-table cf">
  <div class="summary-block">
            
    <ul>
      <li class="subtotal"><span class="sb-label">Subtotal</span><span class="sb-value"><?php echo $this->cart->format_number($this->cart->total()) ?></li>
      <li class="shipping"><span class="sb-label">V A T </span><span class="sb-value"> <?php
                                $total = $this->cart->total();
                                $tax = ($total * 15) / 100;
                                echo $this->cart->format_number($tax);
                                ?></span></li>
      <li class="tax-calculate"><input type="text" value="06484" class="tax" /><span class="btn">Calculate</span></li>
      <li class="grand-total"><span class="sb-label">Total</span><span class="sb-value"><?php echo $this->cart->format_number($tax + $this->cart->total()); ?></span></li>
    </ul>
  </div>
  
</div>

<div class="cart-footer cf">
<a href="<?php echo base_url('product') ?>"> <img src="<?php echo base_url() ?>assets/web/images/shop.png" alt="" /></a>

    <!-- <span class="btn">Checkout</span> -->
    <?php
        $customer_id = $this->session->userdata('customer_id');
        if (empty($customer_id)) {
            ?>
            <a href="<?php echo base_url('user_form') ?>"> <img src="<?php echo base_url() ?>assets/web/images/check.png" alt="" /></a>
            <?php
        } elseif (!empty($customer_id)) {
            ?>
            <a href = "<?php echo base_url('customer/shipping') ?>"> <img src = "<?php echo base_url() ?>assets/web/images/check.png" alt = "" /></a>
            <?php
        }
    ?>

 
</div>
</div>
   <!-- end  -->
<!-- 
        <div class="cartoption">		
            <div class="cartpage">
                <h2>Your Cart</h2>
                <?php if ($this->cart->total_items()) { ?>
                    <table class="tblone">
                        <tr>
                            <th width="5%">Sr.</th>
                            <th width="30%">Product Name</th>
                            <th width="10%">Image</th>
                            <th width="15%">Price</th>
                            <th width="20%">Quantity</th>
                            <th width="15%">Total Price</th>
                            <th width="5%">Remove</th>
                        </tr>
                        <?php
                        $i = 0;
                        foreach ($cart_contents as $cart_items) {
                            $i++;
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $cart_items['name'] ?></td>
                                <td><img src="<?php echo base_url('uploads/' . $cart_items['options']['product_image']) ?>" alt=""/></td>
                                <td>Rs. <?php echo $this->cart->format_number($cart_items['price']) ?></td>
                                <td>
                                    <form action="<?php echo base_url('update/cart'); ?>" method="post">
                                        <input type="number" name="qty" value="<?php echo $cart_items['qty'] ?>"/>
                                        <input type="hidden" name="rowid" value="<?php echo $cart_items['rowid'] ?>"/>
                                        <input type="submit" name="submit" value="Update"/>
                                    </form>
                                </td>
                                <td>Rs. <?php echo $this->cart->format_number($cart_items['subtotal']) ?></td>
                                <td>
                                    <form action="<?php echo base_url('remove/cart'); ?>" method="post">
                                        <input type="hidden" name="rowid" value="<?php echo $cart_items['rowid'] ?>"/>
                                        <input type="submit" name="submit" value="X"/>
                                    </form>
                                </td>
                            </tr>
                        <?php } ?>


                    </table>
                    <table style="float:right;text-align:left;" width="40%">
                        <tr>
                            <th>Sub Total : </th>
                            <td>Rs. <?php echo $this->cart->format_number($this->cart->total()) ?></td>
                        </tr>
                        <tr>
                            <th>VAT : </th>
                            <td>Rs. 
                                <?php
                                $total = $this->cart->total();
                                $tax = ($total * 15) / 100;
                                echo $this->cart->format_number($tax);
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Grand Total :</th>
                            <td>Rs. <?php echo $this->cart->format_number($tax + $this->cart->total()); ?> </td>
                        </tr>
                    </table>
                    <?php
                } else {
                    echo "<h1>Your Cart Empty</h1>";
                }
                ?>
            </div>
            <div class="shopping">
                <div class="shopleft">
                    <a href="<?php echo base_url('product') ?>"> <img src="<?php echo base_url() ?>assets/web/images/shop.png" alt="" /></a>
                </div>
                <div class="shopright">
                    <?php
                    $customer_id = $this->session->userdata('customer_id');
                    if (empty($customer_id)) {
                        ?>
                        <a href="<?php echo base_url('user_form') ?>"> <img src="<?php echo base_url() ?>assets/web/images/check.png" alt="" /></a>
                        <?php
                    } elseif (!empty($customer_id)) {
                        ?>
                        <a href = "<?php echo base_url('customer/shipping') ?>"> <img src = "<?php echo base_url() ?>assets/web/images/check.png" alt = "" /></a>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>  	 -->
        <div class="clear"></div>
    </div>
</div>
