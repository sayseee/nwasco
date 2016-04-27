    <aside class="col-md-2" id="sidebar">
		<div class="row">
			<?php if($level == "1")  
					{ 
					?>
			<ul class=""> 
				<li><h6><i class="fa fa-gears"></i> Control Panel</h6>
					<ul>
						<li class="active"><a href="#">Dashboard Overview</a></li> 
						<li><a href="#">Profile</a></li> 
					</ul>
				</li>
				<li><h6><i class="fa fa-users"></i> Manage Users</h6>
					<ul>
						<li><a href="#">View Users</a></li> 
						<li><a href="#">Add Users</a></li>  
						<li><a href="#">Edit Users</a></li>  
						<li><a href="#">Delete Users</a></li> 
					</ul>  
				</li> 
				<li><h6><i class="fa fa-dollar"></i> Manage Commercial Utility </h6>
					<ul>
						<li><a href="#">Add CU</a></li>    
						<li><a href="#">Edit CU</a></li>  
						<li><a href="#">Delete CU</a></li> 
					</ul>
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