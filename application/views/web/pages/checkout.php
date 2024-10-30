

<div class="main">
<div class="content" style="text-align: center">
<div class="register_account" style="text-align:center;display:inline-block;float: none">
<link href="<?php echo base_url() ?>assets/web/css/payment.css" rel="stylesheet" type="text/css" media="all"/>

<h3>Payment Options</h3>
    <style type="text/css">
        #result{color:red;padding: 5px}
        #result p{color:red}
    </style>
    <div id="result">
        <p><?php  $this->session->flashdata('message'); ?></p>
    </div>
    
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
  <form method="post" action="<?php echo base_url('save/order');?>" style="text-align: left">

      <div class="main_card">
        <div class="select-cards">
          <div class="select">
              <input type="radio"  class="check-box" name="payment" value="cashon"/>
              <div class="titles">
                <h4>Cash On Delivary</h4>
              </div>
          </div>
        
          <div class="select" data-selected="true">
              <input type="radio" name="payment" class="check-box"  value="SSL Wocommerz"/>
              <div class="titles">
                  <h4>SSL Wocommerz</h4>
              </div>
          </div>
          
          <div class="select">
            <input type="radio" name="payment" value="paypal" class="check-box" value="paypal"/>
              <div class="titles">
                  <h4>Pay  Pal</h4>
              </div>
          </div>
        </div>
        <input type="hidden" name="cus_id" value=" <?php echo  $this->session->userdata('customer_id');?>">
        <button class="select-btn">Pay </button>
     </div> 
</form>
</div>  	
        <div class="clear"></div>
    </div>
</div>
<script defer src="<?php echo base_url()?>assets/web/js/checkout.js"></script>
