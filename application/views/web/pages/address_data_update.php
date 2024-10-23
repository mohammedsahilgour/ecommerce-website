<!-- <?php print_r($address_data_update);
?> -->


<div class="main">
    <div class="content">
        <div class="support">
            <div class="support_desc">
                <!-- <h3><?php echo get_option('contact_title');?></h3> -->
                 <h3> Update  Register Address</h3>
                <!-- <p><?php echo get_option('contact_subtitle');?></p>
                <p><?php echo get_option('contact_description');?></p> -->
            </div>
          
           <style>
            .error {
                    color: #F00;
                    background-color: #FFF;
                    }
           </style>
            <img src="<?php echo base_url()?>assets/web/images/address.avif" alt="" />
          
            <div class="clear"></div>
       
        </div>
        <div class="section group">
            <div class="col span_2_of_3">
                <div class="contact-form">
             
                    <!-- <h2>Create Address</h2> -->
                    <!-- <?php print_r(  $customer_id = $this->session->userdata('customer_id'));?> -->
                    <form  method="post" action="<?php echo base_url('Addressdataupdate');?>" id="form_validate">
                         <div>
                            <span><label>first name</label></span>
                            <span><input type="text" value="<?php  echo $address_data_update[0]['firstname']?>" name="firstname"></span>
                            <!-- <?php   form_error('city');?> -->
                        </div>

                        <div>
                            <span><label>last name</label></span>
                            <span><input type="text" value="<?php  echo $address_data_update[0]['lastname']?>" name="lastname"></span>
                            <!-- <?php   form_error('city');?> -->
                        </div>

                        <div>
                            <span><label>City</label></span>
                            <span><input type="text" value="<?php  echo $address_data_update[0]['city']?>" name="city"></span>
                            <!-- <?php   form_error('city');?> -->
                        </div>
                        <div>
                            <span><label>state</label></span>
                            <span><input type="text" value="<?php  echo $address_data_update[0]['state']?>"name="state"></span>
                            <?php   form_error('state');?>

                        </div>
                        <div>
                        <div>
                        <span><label>Country</label></span>

                            <select id="country" name="country" class="select-country">
                                        <option value="<?php  echo $address_data_update[0]['country']?>" ><?php  echo $address_data_update[0]['country']?></option>
                                        <?php   
                                        foreach( $get_country_data as $country){?>
                                         <option value="<?php echo  $country['name'];?>" ><?php echo  $country['name'];?></option>

                                      <?php  } 
                                        ?>    
                             </select>
                        </div>		 
                        <div>

                        </div>
                        <div>
                            <span><label>MOBILE.NO</label></span>
                            <span><input type="text" value="<?php  echo $address_data_update[0]['number']?>" name="number"></span>
                            <?php  echo form_error('number');?>

                        </div>
                        <div>
                            <span><label>Zip code </label></span>
                            <span><input type="number" value="<?php  echo $address_data_update[0]['zipcode']?>" name="zipcode"></span>
                            <?php  echo form_error('zipcode');?>

                        </div>
                        <div>
                            <span><label> default value  </label></span>
                            <span><input type="number" value="<?php  echo $address_data_update[0]['default_value']?>" name="defaultvalue" id="default"maxlength=1></span>
                            <?php  echo form_error('zipcode');?>

                        </div>
                        <div>
                            <span><label>Address</label></span>
                            <span><input type="text" value="<?php  echo $address_data_update[0]['address']?>" name="address"></span>
                            <!-- <?php   form_error('city');?> -->
                        </div>
                        <div>
                            <span><input type="hidden"value="<?php  echo $address_data_update[0]['id']?>" name="uid"></span>
                           
                        </div>
                        
                        <div>
                            <span><input type="submit" value="Update" id="submit" ></span>
                        </div>
                    </form>
                </div>
            </div>
            <!-- <div class="col span_1_of_3">
                <div class="company_address">
                    <h2>Company Information :</h2>
                    <p><?php echo get_option('company_location');?></p>
                    <p>Phone:<?php echo get_option('company_number');?></p>
                    <p>Email:<a href="mailto:<?php echo get_option('company_email');?>"> <span><?php echo get_option('company_email');?></span></a></p>
                    <p>Follow on: <a href="<?php echo get_option('company_facebook');?>"><span>Facebook</span></a>,
                            <a href="<?php echo get_option('company_email');?>"><span>Twitter</span></a></p>
                </div>
            </div> -->
        </div>    	
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js" integrity="sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/web/js/input.js"></script>

<script>
$(document).ready(function () {

$('#form_validate').validate({ // initialize the plugin
    rules: {
        city: {
            required: true,  
        },
        state: {
            required: true,
            
        },
        country:{
            required: true,

        },
        number:{
            required: true,
            minlength: 9
        },
        zipcode:{
            required: true,

        },
        defaultvalue:{
            required: true,
            maxlength: 1,
        }
        
    }
    
});

});

</script>