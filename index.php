<?php
include 'header.php'; 
?>



<body class="homepage"><br>

    <div class="wrapper cd-main-content">
  	<div class="utility_bar">
				 <div class="container container-0">
            <div class="col-sm-12">
              <ul>
								 							 <!--	 <li><a href="http://localhost/pickinglabels/?controller=clientapp&amp;action=home#">9174 - Test Store</a></li>
								 			   <li><a href="http://localhost/pickinglabels/?controller=clientapp&amp;action=home#">System Administrator</a></li>
				 <!--<li><a href="?controller=authenticate&action=logout"><span>Logout</span></a></li>
				 <li><a href="http://localhost/pickinglabels/?controller=clientfaq&amp;action=indexfaq">FAQ's</a></li> <!-- item-has-children 
				   <li><a href="http://localhost/pickinglabels/?controller=clientbox&amp;action=index">ClientBox</a></li> <!-- item-has-children -->


                 <li><a href="/healthcheck"><span>Home</span></a></li>
               </ul>
            </div>
         </div>
      </div>
      <header role="banner">
         <div class="global-header">
            <div class="topwrapper">

               <div class="branding">
           
				 <a href="/healthcheck">
				  
				  
				<img class="sitelogo" src="assests\style\tesco-logo.svg" alt="Tesco logo">
		        <img class="sitelogo-mobile" src="assests\style\tesco-logo.svg" alt="Tesco logo">
				
			<span style="font-weight: 400 "; >StoreApps Reports</span></a>
               </div>
			   
			
                 
				  
				  <!--<div class="mobilenav-trigger" style="display:inline;float:right;margin: 0px 5px 0px 0px;">
                  
					
				  <button class="rounded_icon_button cd-menu-trigger">
                  <span class="button_content cd-menu-trigger">
				  <i class="fa fa-bars cd-menu-trigger" aria-hidden="true"></i>
                  </span>
                  </button>
				  
               </div>-->

               <!--mobile nav trigger-->
              <!-- <div class="mobilenav-trigger">
                  <button class="rounded_icon_button cd-menu-trigger">
                  <span class="button_content cd-menu-trigger">
                  <span class="icon-burger_icon cd-menu-trigger"></span>
                  </span>
                  </button>
               </div>-->


         </div>
      </div>
	  </header>
      <main role="main" id="maincontent" class="nopadbottom" style="padding-bottom:20px;padding-top: 15px;">
	     <div class="container">
		<div class="col-sm-12">
		
		
		
		
		<div class="row" style="padding-bottom:10px;">
         <div class="col-sm-12">
            <h4>Healthchecks Reports</h4>
         </div>
         <div class="col-sm-6" style="text-align:right;margin-top:20px;">
		 </div>
		    <div class="col-sm-12 stay-in-touch" style="padding-top: 0px;padding-bottom: 0px;border-top-width: 0px;">
            <div class="col-sm-12 col-md-12 col-lg-12 stay-in-touch-form" style="padding-top: 0px;">
               <form action="#" method="post" enctype="multipart/form-data">
                  <div class="row">
                    
                     <div class="col-sm-9 col-md-3 col-lg-2">
                       
                          <input id="From" class="flatpickrreports" placeholder="From" name="From" style="width:100%;height:2.5em;margin-bottom: 15px;" type="text" required>
                     
                     </div>
					 <div class="col-sm-9 col-md-3 col-lg-2">
                     
                           <input id="To" class="flatpickrreports" placeholder="To" name="To" style="width:100%;height:2.5em;margin-bottom: 15px;" type="text" required>
                    
                     </div>
					 <div class="col-sm-9 col-md-2 col-lg-2">
                       <input type="submit" name="generate" value="Generate" style="width:100px;"> 
                     </div>
                  </div>
                </form>
            </div>
         </div>
      
      </div>
		
		
<!--<div style ="color:#666666 ;font-size:1.5rem">


 

 <br> Overall Application Status :<?php echo '<span style="background-color:green;color:white;border-radius:20px;padding:20px;font-weight:bold;margin: 10px;">Green</span>';
	?>
</br> 
 </div>-->
<h4>Report - From <?php echo $dispfromdate; ?> to <?php echo $disptodate; ?> </h4>
 
<div style="margin:10px 10px 10px 10px ;">
<div class="row" style="padding-top:10px;">

<!--<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 column-1">
			<div class="col-xs-12 statsheading"><t6> Date</t6>
<h1 class="statstext" ><?php echo  date('d/m/y', strtotime('-1 days'))?></h1>

</div>
</div>-->
<div class="col-xs-12 col-sm-12 col-md-6 col-lg5column-1">
			<div class="col-xs-12 statsheading"><t6> Total Registered Users</t6>
<h1 class="statstext" > <?php  echo  $item ;	 ?>  </h1>

</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-6 col-lg5column-1">
			<div class="col-xs-12 statsheading"><t6> New Users Registered </t6>
<h1 class="statstext" ><?php  echo  $item1 ;	 ?></h1>

</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-6 col-lg5column-1">
			<div class="col-xs-12 statsheading"><t6> Total Users </t6>
<h1 class="statstext" ><?php  echo  $item2 ;	 ?></h1>

</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-6 col-lg5column-1">
			<div class="col-xs-12 statsheading"><t6>  Total logins </t6>
				<h1 class="statstext" ><?php  echo  $item3 ;	 ?></h1>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-6 col-lg5column-1">
			<div class="col-xs-12 statsheading"><t6>  Total Application Hits</t6>
				<h1 class="statstext" ><?php  echo  $item4 ;	 ?></h1>
</div>
</div>


</div>
</div>
<div class="row">
<div class="col-sm-12 col-md-6">
<h5 style ="color:#666666;" >Top 5 Application Hits:  </h5>
<table style="width:100% ;">
  
  <tr>
    <th style ="color:#666666;">Applications</th>
    <th style ="color:#666666;">Total Hits
</th>
  </tr>
  <?php foreach($topfiveapphitsyest as $rec) { ?>
  <tr>
   <td> <?php  echo $rec['Application Name']; ?> </td>
   <td> <?php  echo $rec['Total Count']; ?> </td>
  </tr>
 <?php } ?>
  
</table>
</div>


</div>





<div class="row">
<h4>Overall Stats Upto <?php  echo $disptodate; ?></h4>
<div class="col-sm-12 col-md-6">
  <h5 style ="color:#666666;" >Top 5 Application Hits:</h5>
<table style="width:100% ;">

  <tr>
    <th style ="color:#666666;">Applications</th>
   <th style ="color:#666666;">Total Application Hits </th>
  </tr>
  
  <?php foreach($topfiveoverhitsyest as $rec) { ?>
  <tr>
   <td> <?php  echo $rec['Application Name']; ?> </td>
   <td> <?php  echo $rec['Total Count']; ?> </td>
  </tr>
 <?php } ?>
  
</table>
</div>
 <div class="col-sm-12 col-md-6">
  <h5 style ="color:#666666;">Top 5 Favourite Apps: </h5>
<table style="width:100% ;">

  <tr>
    <th style ="color:#666666;">Applications</th>
    <th style ="color:#666666;">Total Hits  </th>
  </tr>
  <?php foreach($topfivefavhitsyest as $rec) { ?>
  <tr>
   <td> <?php  echo $rec['Application Name']; ?> </td>
   <td> <?php  echo $rec['Total Count']; ?> </td>
  </tr>
 <?php } ?>
 
  
</table>
</div>
</div>

<div class="row">
<h4>Production Server Status</h4>
 <div class="col-sm-12 col-md-6 col-lg-6">
<table style="width: 100%;"> 
 
  <tr>
    <th style ="color:#666666;">Server Name</th>
    <th style ="color:#666666;">IP</th>
	  <th style ="color:#666666;">Locaion</th>
    <th style ="color:#666666;">Status</th>
  </tr>
  <?php foreach(check() as $server)
	{
			echo'<tr><td>'.$server['hostname'].'</td><td>'.$server['IP'].'</td><td>'.$server['datacenter'].'</td><td>';
		if($server['status']=="Bad")
		{
			echo '<span style="background-color:red;color:white;border-radius:3px;padding:3px;font-weight:bold;">'.$server['status'].'</span>';
		}
		else
		{
			echo '<span style="background-color:green;color:white;border-radius:3px;padding:3px;font-weight:bold;">'.$server['status'].'</span>';
		}
		echo '</td></tr>';
	}
	?>
</table>

</div>
</div>

	  
	  </div>
	  </div>
	  
 </main>
 
 
 
 
     </div>
	 <nav id="cd-lateral-nav" style="max-height: 100vh;">

		<div class="header">
		<button class="close_menu cd-main-content"><span>CLOSE</span></button>
		<p style="color:#FFF;padding-top:20px;padding-left:15px;margin-top: 0px;">9174 - System Administrator</p>		</div>
		<ul class="cd-navigation" style="max-height: 86vh;overflow-y:auto;overflow-x:hidden;">
		<li class="item-has-nochildren">
				<!-- <a href="?controller=clientfaq&action=index" style="font-weight:bold;background-color:#edecec !important;">FAQ's</a></li> <!-- item-has-children -->
			<!--li class="item-has-nochildren"><a href="?controller=authenticate&action=logout">Logout</a></li-->
		</li></ul> <!-- cd-navigation -->

	</nav>
	
	

</body>
<?php
include 'footer.php'; 
?>