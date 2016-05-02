<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

     <article class="col-md-8" id="main" >
        <div class="col-md-12 scroll" id="content"> 
        <div id="crumbs">Dashboard <i class="fa fa-chevron-right"></i> Users</div>
            <div class="row">
				<div class="col-md-12" id="c__u">
				<h5 class="title">Manage Users</h5>
  			<ul><a href='users_export'>Export Data</a>
  				<?php       //if there is comments then print the comments
				               foreach ($users as $user)
				                    {

				                 ?>
				         <li >
					                    <?php echo $user->fname ?>
					                    <?php echo $user->lname ?>
					                    <?php echo $user->email ?> 
					     </li>
				            <?php   }
				                
				                 ?>
			</ul>
					</div>


				</div>
			</div> 
    </article>
