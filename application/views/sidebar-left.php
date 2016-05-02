    <aside class="col-md-2 scroll" id="sidebar">
		<div class="row">
			<?php if($level == "1")  
					{ 
					?>
			<ul class=""> 
				<li><h6><i class="fa fa-gears"></i> Control Panel</h6>
					<ul>
						<li class="<?php echo active_link('home'); ?>"><a href="<?php echo site_url('home'); ?>">Dashboard Overview</a></li> 
						<li><a href="#">Profile</a></li> 
					</ul>
				</li>
				<li><h6><i class="fa fa-users"></i> Manage Users</h6>
					<ul>
						<li class="<?php echo active_link('users'); ?>"><a href="<?php echo site_url('users'); ?>">View Users</a></li> 
						<li><a href="#">Add Users</a></li>  
						<li><a href="#">Edit Users</a></li>  
						<li><a href="#">Delete Users</a></li> 
					</ul>  
				</li> 
				<li><h6><i class="fa fa-dollar"></i> Manage Commercial Utility </h6> 
					<ul> 
							    <?php       //if there is comments then print the comments
				                if(count($utilities) > 0)
				                {
				                    foreach ($utilities as $utility)
				                    {

				                 ?>
				         <li class="<?php echo active_link('utilities/details'); ?>"><a href="<?php

				         $url = str_replace(' ','-',$utility['utility']);
					     $url = str_replace(":",'',$url);
					     $url = str_replace("'",'',$url);

					     echo base_url(); ?>utilities/details/<?php echo $utility['cu_id'];?>/<?php echo urlencode($url);?>">
					                    <?=$utility['utility'];?></a>
					     </li>
				            <?php   }
				                }
				                else //when there is no comment
				                {
				                    echo "<p>No Utilities</p>";
				                }
				                 ?>
							</ul>​
				</li>
				<li><h6><i class="fa fa-map-marker"></i> Manage Towns</h6>
					<ul>
						<li><a href="#">Add Town</a></li>  
						<li><a href="#">Edit Town</a></li>  
						<li><a href="#">Delete Town</a></li> 
					</ul>
				</li>  
			</ul>
		 
					<?php

					}
					else
						{

					?> 
			<ul class=""> 
				<li><h6><i class="fa fa-gears"></i> Control Panel</h6>
					<ul>
						<li class="active"><a href="#">Dashboard Overview</a></li> 
						<li><a href="#">View Profile</a></li> 
					</ul>
				</li> 
				<li><h6><i class="fa fa-dollar"></i> View Commercial Utility </h6></li>
				<li><h6><i class="fa fa-map-marker"></i> View Towns</h6></li>  
			</ul>
						<?php }?>
		</div>
    </aside> 