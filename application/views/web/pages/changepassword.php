
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="main">
    	
<link href="<?php echo base_url() ?>assets/web/css/changepass.css" rel="stylesheet" type="text/css" media="all"/>

<style>
    .error {
            color: #F00;
            background-color: #FFF;
            }
</style>

<div class="card login-form">
	<div class="card-body">
		<h3 class="card-title text-center">Change password</h3>
		
		
		<div class="card-text">
			<form id="change-password-form" method="post" action="<?php echo base_url('changepassword');?>" >
			
				<div class="form-group">
					<label for="exampleInputEmail1">Your new password</label>
					<input type="password" class="form-control form-control-sm" name="newpass">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Repeat password</label>
					<input type="password" class="form-control form-control-sm"  name="repeatpass">
				</div>
				<button name="change-pass-btn" class="change-pass-btn">Confirm</button>
			</form>
		</div>
	</div>


        <div class="clear"></div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js" integrity="sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/web/js/input.js"></script>
<script>
$(document).ready(function () {

$('#change-password-form').validate({ // initialize the plugin
    rules: {
        newpass: {
            required: true,  
        },
        repeatpass: {
            required: true,
            
        }
    }
    
});
});

</script>