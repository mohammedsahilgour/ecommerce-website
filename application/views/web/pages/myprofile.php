
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="main">
    <div class="content" style="text-align: center">
        <div class="register_account" style="text-align:center;display:inline-block;float: none">
            <h3> My Profile</h3>
            <style type="text/css">
                #result{color:red;padding: 5px}
                #result p{color:red}
            </style>
            <div id="result">
           <?php
           

           ?>
                <p><?php  $this->session->flashdata('message'); ?></p>
            </div>
    <form   method="post" action="<?php echo base_url('updatemyprofile');?>" id="myprofile_form">
        <div class="row">
            <div class="col">
            <input type="text" class="form-control" placeholder=" name" name="name" value="<?php echo $myprofile[0]['customer_name']?>">
            </div>
            <div class="col">
            <input type="text" class="form-control" placeholder="Zip Code"name="zipcode"value="<?php echo $myprofile[0]['customer_zipcode']?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
            <input type="text" class="form-control" placeholder="City"name="City"value="<?php echo $myprofile[0]['customer_city']?>">
            </div>
            <div class="col">
            <input type="text" class="form-control" placeholder="number"name="number" value="<?php echo $myprofile[0]['customer_phone']?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
            <input type="email" class="form-control" placeholder="email"name="email"value="<?php echo $myprofile[0]['customer_email']?>">
            </div>
            <div class="col">
            <input type="text" class="form-control" placeholder="address"name="address"value="<?php echo $myprofile[0]['customer_address']?>">
            </div>
        </div>
     

        <div class="row">
            <div class="col">
            <select id="country" name="country" class="form-control">
            <option selected value="<?php echo $myprofile[0]['customer_country']?>"><?php echo $myprofile[0]['customer_country']?></option>
            <?php   
            foreach( $get_country_data as $country){?>
             <option value="<?php echo  $country['name'];?>" ><?php echo  $country['name'];?></option>

          <?php  } 
            ?>

        </select>
            </div>
           
        </div><br>
        <button type="submit" class="btn btn-primary " name="updateprofile">Update</button>
        
</form>
        </div>  	
        <div class="clear"></div>
    </div>
</div>
<script>
$(document).ready(function () {

$('#myprofile_form').validate({ // initialize the plugin
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
        name:{
            required: true,

        }, 
        Password:{
            required: true,

        }, 
        email:{
            required: true,

        }, 
        address:{
            required: true,

        }
    }
    
});

});

</script>