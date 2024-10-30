<?php
$address_data = json_decode(json_encode($address_data), true);

    ?>
<!-- <link href="<?php echo base_url() ?>assets/web/css/address_data.css" rel="stylesheet" type="text/css" media="all"/>

     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="<?php echo base_url() ?>assets/web/css/style.css" rel="stylesheet" type="text/css" media="all"/>

    <link href="<?php echo base_url() ?>assets/web/css/menu.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="<?php echo base_url() ?>assets/web/js/jquerymain.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/web/js/jquery-1.7.2.min.js"></script> 
    <script type="text/javascript" src="<?php echo base_url() ?>assets/web/js/nav.js"></script>


    <script type="text/javascript" src="<?php echo base_url() ?>assets/web/js/move-top.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/web/js/easing.js"></script> 
    <script type="text/javascript" src="<?php echo base_url() ?>assets/web/js/nav-hover.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'> -->
 <table id="table=data"> 
           <tr>
             <!-- <th> no.</th> -->
             <th>Serial No.</th>
             <th>First Name</th>
             <th>Last Name</th>
             <th>City</th>
             <th>State</th>
             <th>Country</th>
             <th>Number</th>
             <th>Zip code</th>
             <th>Default</th>
             <th colspan="2">Action</th>
           </tr>
           <tr>
           <?php   $count=1;?>

           <?php foreach($address_data as $data){?>

            <td><?php echo $count ++?></td> 
             <td><?php echo $data['firstname']?></td>
             <td><?php echo $data['lastname']?></td>
             <td><?php echo $data['city']?></td>
             <td><?php echo $data['state']?></td>
             <td> <?php echo $data['country']?></td>
             <td><?php echo $data['number']?></td>
             <td> <?php echo $data['zipcode']?></td>
            <?php  if($data['default_value']){?>
            
             <td class="default-address-td default-value-show"> <?php echo  "<button class='default-btn' id='default-yes-btn'> Default </button>"?>
             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0"/>
                <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                </svg></td>
             <td>
                 <a href="<?php echo  base_url('deleteadressdata').'?id='.$data['id'];?>">
             <td>
                 <a href="<?php echo  base_url('updateadressdata').'?id='.$data['id'];?>">
                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="blue" class="danger" viewBox="0 0 16 16">
                     <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                     <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                 </svg>
                 </a>
             </td>
             </td>
           

           <?php  }else{?>
            <td><p class="default-address-td default-no-btn" id="<?php  echo $data['id'] ?>"> No </p></td>
            <td>
                 <a href="<?php echo  base_url('deleteadressdata').'?id='.$data['id'];?>">
                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="bi bi-trash" viewBox="0 0 16 16">
                 <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                 <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                 </svg>
                 </a>
             <td>
                 <a href="<?php echo  base_url('updateadressdata').'?id='.$data['id'];?>">
                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="blue" class="danger" viewBox="0 0 16 16">
                     <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                     <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                 </svg>
                 </a>
             </td>
             </td>
       
            
          <?php  }?>
      
        
           </tr>
          
             <?php } ?>
         </table>
         <link href="<?php echo base_url()?>assets/web/css/flexslider.css" rel='stylesheet' type='text/css' />
<script defer src="<?php echo base_url()?>assets/web/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/web/js/about.js"></script>
         