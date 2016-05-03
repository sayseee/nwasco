<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

     <article class="col-md-8" id="main" >
        <div class="col-md-12 scroll" id="content"> 
        <div id="crumbs">Dashboard <i class="fa fa-chevron-right"></i> Users</div>
            <div class="row">
				<div class="col-md-12" id="c__u">
				<h5 class="title">Manage Users</h5>
  			 <table id="table" class="display" cellspacing="0" width="100%">
  				<?php       //if there is comments then print the comments
			 if(!empty($users)) {
                	?>
                <thead>
	                <th class="col-md-0 nosort">No</th>
               		<th class="col-md-1">First Name</th>
	                <th class="col-md-1">Last Name</th>
	                <th class="col-md-3">Email</th>
	                <th class="col-md-3">Commercial Utility</th>
	                <th class="col-md-2">Level</th> 
	                <th class="col-md-1">Actions</th>

				 </thead>
				 <tbody>
                	<?php
                    foreach ($users as $user)
                    {?>
              <tr>
                <td></td>
                <td><?=$user['fname']?></td>
                <td><?=$user['lname']?></td>
                <td><?=$user['email']?></td>
                <td><?=$user['utility']?></td>
                <td><?=$user['level']?></td> 
                <td><a class="item_details" title="View Details" data-toggle="modal" data-id="<?=$user['id']?>" data-target="#orderModal"><i class="fa fa fa-eye info"></i></a><a href="" title="Edit"> <i class="fa fa-edit success"></i></a> <a href="" title="Delete"> <i class="fa fa-trash danger"></i></a></td>
              </tr>
            <?php   }
                }
                else //when there is no comment
                {
                    echo "<p>No Users in Database.</p>";
                }
                 ?></tbody>
	         </table> 
					</div>


				</div>
			</div> 
    </article>