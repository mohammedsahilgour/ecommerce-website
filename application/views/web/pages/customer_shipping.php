

<div class="main">
    <div class="content" style="text-align: center">
        <div class="register_account" style="text-align:center;display:inline-block;float: none">
            <h3>Your Shipping Address</h3>
            <!-- <style type="text/css">
                #result{color:red;padding: 5px}
                #result p{color:red}
            </style> -->
            <div id="result">
                <!-- <p><?php echo $this->session->flashdata('message'); ?></p> -->
            </div>
    
            <form method="post" action="<?php echo base_url('customer/save/shipping/address');?>">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <div>
                                    <input type="text" style= "color:black"name="shipping_name" value="<?php  echo $shipping_address_data[0]['firstname'] ." ". $shipping_address_data[0]['lastname']  ?>">
                                </div>


                                <div>
                                    <input type="text" style= "color:black" name="shipping_city" class="font-dark" value="<?php echo $shipping_address_data[0]['city']?>">
                                </div>
                                <div>
                                    <input type="text" style= "color:black" name="shipping_phone"value="<?php echo $shipping_address_data[0]['number']?>" >
                                </div>
                                <div>
                                    <input type="text" style= "color:black" name="shipping_zipcode" value="<?php echo $shipping_address_data[0]['zipcode']?>">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <input type="text"style= "color:black" name="shipping_email" value="<?php  echo $customer_data[0]['customer_email'] ?>">
                                </div>
                                        

                                <div>
                                    <input type="text"style= "color:black" name="shipping_address" value="<?php echo  $shipping_address_data[0]['address']?>">
                                </div>

                                <div>
                                    <input type="hidden"style= "color:black" name="customer_id" value="<?php echo  $this->session->userdata('customer_id')?>">
                                </div>
                                <div>

                                <select id="country" name="shipping_country" class="select-country">
                                            <option  value="<?php echo  $shipping_address_data[0]['country']?>"><?php echo  $shipping_address_data[0]['country']?></option>
                                            <?php   
                                            foreach( $get_country_data as $country){?>
                                            <option value="<?php echo  $country['name'];?>" ><?php echo  $country['name'];?></option>

                                        <?php  } 
                                            ?>    
                                </select>
                                </div>		 
                            </td>
                        </tr> 
                    </tbody></table> 
                <div class="search"><div>
                    <button class="grey"> Save Detail</button>
                    <!-- <input type="submit" value="save" class="grey">  -->
                </div></div>
                <p class="terms">By clicking 'Create Account' you agree to the <a href="#">Terms &amp; Conditions</a>.</p>
                <div class="clear"></div>
            </form>
        </div>  	
        <div class="clear"></div>
    </div>
</div>