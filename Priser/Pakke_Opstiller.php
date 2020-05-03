
  	<?php 
	$count = 0;
	while($row = mysqli_fetch_assoc($results)){
		
		$count ++;
		
			if($count % 2==0){
	?>  
    <!-- View of priser -->
	<div class="row">
		<div class=' offset-by-three columns six columns'>
				
				
				<div class="two-thirds column greywall">
					<div class="row">
						<br>
							<center><p class="prispakkebillede" style="font-size: 45px"><?php echo $row['name']?> </p></center>
							<center><p class="para lineheight1" style="font-size: 20px"><?php echo $row['description']?></p> </center>  
							
					<?php if(empty($row['pris'])){
								echo "<center><p class='padding5side lineheight1' style='font-size: 10px'>". $row['kommentar']. "</p></center> ";
						}else{ 
							echo "<center><p class='u-pull-right padding5side' style='font-size: 20px'>". $row['pris']. ",-</p></center> ";
							echo "<center><p class=' padding5side lineheight1' style='font-size: 10px'>". $row['kommentar']. "</p></center> ";} ?>
						  
					
					</div>
				</div>
				
				<div class="one-third column">
					<div class="row">
						<img class="u-full-width"  src="<?php echo $row['link']?>">
					</div>
				</div>
			
				
				
      		
		</div>
	
	</div>

<hr>
<br>
<br>


 <?php }else{ ?>
		
	<div class="row">
		<div class=' offset-by-three columns six columns'>
				
				<div class="one-third column">
					<div class="row">
						<img class="u-full-width"  src="<?php echo $row['link']?>">
					</div>
				</div>
			
				
				<div class="two-thirds column greywall">
					<div class="row">
								<br>
						<center><p class="prispakkebillede" style="font-size: 45px"><?php echo $row['name']?> </p></center>
						<center><p class="para lineheight1" style="font-size: 20px"><?php echo $row['description']?></p> </center>  
						<?php if(empty($row['pris']))
							{
								echo "<center><p class='padding5side lineheight1' style='font-size: 10px'>". $row['kommentar']. "</p></center> ";
							}else{ 
					echo "<center><p class='u-pull-right padding5side' style='font-size: 20px'>". $row['pris']. ",-</p></center> ";
	
							echo "<center><p class=' padding5side lineheight1' style='font-size: 10px'>". $row['kommentar']. "</p></center> ";} ?>
						  
					
					</div>
				</div>
      		
		</div>
	
	</div>

<hr>
<br>
<br>
		
<?php }} ?>   
