
<link href="<?php echo base_url() ?>assets/web/css/singleproduct.css" rel="stylesheet" type="text/css" media="all"/>

<div class="main">
    <div class="content">
   <!-- start -->

   <div class="product-card">
  <div class="image-container">
    <div class="cover-image product-image">
    <img src="<?php echo base_url('uploads/'.$get_single_product->product_image)?>" alt="" />    </div>

  </div>
  <div class="product-info">
    <a href="#" class="free-shipping">Free shipping</a>
    <!-- <h3>Razer Kraken Kitty Edt Gamming Headset Quartz</h3> -->
    <h2  class="product-name"><?php echo $get_single_product->product_title?></h2>
    <p><?php echo $get_single_product->product_short_description?></p>
    <p class="discount-price"><?php echo $this->cart->format_number($get_single_product->product_price)?></p>
    <p class="offer-info">The offer is valid until April 3 or as long as stock losts!</p><br>
    <h2> CATEGORIES : <?php echo $get_single_product->category_name?></h2><br>
    <h2> brand :<?php echo $get_single_product->brand_name?>  </h2>
   

    <!-- <a href="#" class="add-to-cart">
      <ion-icon name="add-outline"></ion-icon> Add to cart
    </a> -->
 
    <div class="add-cart">
        <form action="<?php echo base_url('save/cart');?>" method="post">
            <input type="number" class="buyfield" name="qty" value="1"/>
            <input type="hidden" class="buyfield" name="product_id" value="<?php echo $get_single_product->product_id?>"/>
            <input type="submit"class="add-to-cart" name="submit" value="Buy Now"/>
        </form>				
    </div>
    
  </div>
  
</div>
<div class="product-desc">
    <h2>Product Details</h2>
    <p><?php echo $get_single_product->product_long_description?></p>
</div>



<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

   <!-- end -->

</div>
        <!-- <div class="section group">
            <div class="cont-desc span_1_of_2">				
                <div class="grid images_3_of_2">
                    <img src="<?php echo base_url('uploads/'.$get_single_product->product_image)?>" alt="" />
                </div>
                <div class="desc span_3_of_2">
                    <h2><?php echo $get_single_product->product_title?></h2>
                    <p><?php echo $get_single_product->product_short_description?></p>					
                    <div class="price">
                        <p>Price: <span>Rs.<?php echo $this->cart->format_number($get_single_product->product_price)?></span></p>
                        <p>Category: <span><?php echo $get_single_product->category_name?></span></p>
                        <p>Brand:<span><?php echo $get_single_product->brand_name?></span></p>
                    </div>
                    <div class="add-cart">
                        <form action="<?php echo base_url('save/cart');?>" method="post">
                            <input type="number" class="buyfield" name="qty" value="1"/>
                            <input type="hidden" class="buyfield" name="product_id" value="<?php echo $get_single_product->product_id?>"/>
                            <input type="submit" class="buysubmit" name="submit" value="Buy Now"/>
                        </form>				
                    </div>
                </div>
                <div class="product-desc">
                    <h2>Product Details</h2>
                    <p><?php echo $get_single_product->product_long_description?></p>
                </div>

            </div>
            <div class="rightsidebar span_3_of_1">
                <h2>CATEGORIES</h2>
                <ul>
                    <?php foreach($get_all_category as $single_category){?>
                    <li><a href="<?php echo base_url('get/category/'.$single_category->id);?>"><?php echo $single_category->category_name?></a></li>
                    <?php }?>
                </ul>
            </div>
        </div> -->
    </div>
</div>
