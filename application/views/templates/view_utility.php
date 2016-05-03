<?php
defined('BASEPATH') OR exit('No direct script access allowed');

            if($level == "1")
            {
            ?>
     <article class="col-md-8" id="main" >
        <div class="col-md-12 scroll" id="content"> 
        <div id="crumbs">Dashboard <i class="fa fa-chevron-right"></i> <?php echo $utility; ?></div>
            <div class="row">
				<div class="col-md-12" id="c__u">
					<h5 class="title"> <?php echo $utility; ?> 
						<span class="select-style pull-right">
							<select onchange="location = this.options[this.selectedIndex].value;">
					 	    <option>Select Commecial Utility</option>
							    <?php       //if there is comments then print the comments
				                if(count($utilities) > 0)
				                {
				                    foreach ($utilities as $utility)
				                    {

				                 ?>
				         <option value="<?php

				         $url = str_replace(' ','-',$utility['utility']);
					     $url = str_replace(":",'',$url);
					     $url = str_replace("'",'',$url);

					     echo base_url(); ?>utilities/details/<?php echo $utility['cu_id'];?>/<?php echo urlencode($url);?>">
					                    <?=$utility['utility'];?>
					     </option>
				            <?php   }
				                }
				                else //when there is no comment
				                {
				                    echo "<p>No Utilities</p>";
				                }
				                 ?>
							</select>​
						</span>
					</h5>

					<div class="tabscontainer">
						<ul class="tabs">
							<li class="tab current" data-tab="tab-1">Licence conditions</li>
							<li class="tab" data-tab="tab-2">Tariff conditions</li>
							<li class="tab" data-tab="tab-3">Directives</li>
							<li class="tab" data-tab="tab-4">SLG/As</li>
							<li class="tab" data-tab="tab-5">Projects</li>
							<li class="tab" data-tab="tab-6">Special Regulatory Supervision</li>
							<li class="tab" data-tab="tab-7">Regulations by Incentives</li>
						</ul>
<!-- Start Licence conditions -->
	  	<div id="tab-1" class="tab-content current">
		  <ul class="cu_details">
			<h5 class="c__list">Licence conditions</h5>

			<?php
			 if(!empty($licence)) {
					foreach($licence as $licences) { ?>
			    <li><?php echo $licences['licence'] ?></li> 
			            <?php }
			             } else {  //when there is no comment

		                    echo "<p>No Licence conditions</p>"; 

		                   }
		                 ?>
                 </ul>
		</div>

	<!-- Start Tarrif Conditions -->
	  	<div id="tab-2" class="tab-content">
		  <ul class="cu_details">
			<h5 class="c__list">Tarrif Conditions</h5>
			 <table id="table" class="display" cellspacing="0" width="100%">
 			<?php       //if there is comments then print the comments
			 if(!empty($tariffs)) {
                	?>
                <thead>
	                <th class="col-md-0 nosort">No</th>
               		<th class="col-md-4">Condition</th>
	                <th class="col-md-1">Weight</th>
	                <th class="col-md-1">Score</th>
	                <th class="col-md-2">Due Date</th>
	                <th class="col-md-1">Status</th> 
	                <th class="col-md-2">Actions</th>

				 </thead>
				 <tbody>
                	<?php
                    foreach ($tariffs as $tariff)
                    {?>
              <tr>
                <td></td>
                <td><?=$tariff['condition'];?></td>
                <td><?=$tariff['weight'];?></td>
                <td><?=$tariff['score'];?></td>
                <td><?=$tariff['due_date'];?></td>
                <td><?=$tariff['status'];?></td> 
                <td><a class="item_details" title="View Details" data-toggle="modal" data-id="<?=$tariff['tariff_id'];?>" data-target="#orderModal"><i class="fa fa fa-eye info"></i></a><a href="" title="Edit"> <i class="fa fa-edit success"></i></a> <a href="" title="Delete"> <i class="fa fa-trash danger"></i></a></td>
              </tr>
            <?php   }
                }
                else //when there is no comment
                {
                    echo "<p>No Tarrif Conditions.</p>";
                }
                 ?></tbody>
	             </table> 
		</div>

		<!-- Start Directives -->

	  	<div id="tab-3" class="tab-content">
		  <ul class="cu_details"> 
			<h5 class="c__list">Directives</h5> 
 			<?php       //if there is comments then print the comments
                if(!empty($directives)) {
                    foreach ($directives as $directive)
                    {?>
                <li><?=$directive['directive'];?></li>
            <?php   }
                }
                else //when there is no comment
                {
                    echo "<p>No Directives</p>";
                }
                 ?></ul>
		</div>
<!-- Start SLG/As -->
	  	<div id="tab-4" class="tab-content">
		  <ul class="cu_details"> 
			<h5 class="c__list">SLG/As</h5> 
 			<?php       //if there is comments then print the comments
                if(count($directives) > 0)
                {
                    foreach ($directives as $directive)
                    {?>
                <li><?=$directive['directive'];?></li>
            <?php   }
                }
                else //when there is no comment
                {
                    echo "<p>No SLG/As.</p>";
                }
                 ?></ul>
		</div>

<!-- Start Projects -->

	  	<div id="tab-5" class="tab-content"> 
				<h5 class="c__list">Projects</h5> 
			  <table class="cu_details"> 
			 	 <thead>
	                <th class="col-md-1">No</th>
	                <th class="col-md-8">Project</th>
	                <th class="col-md-1">Start Date</th>
	                <th class="col-md-1">End Date</th>
	                <th class="col-md-1">Status</th>

				 </thead>  
	 			<?php       //if there is comments then print the comments
	               if(!empty($projects)) {
	                    foreach ($projects as $project)
	                    {?>
					<tr>
					                <td><?=$project['proj_id'];?></td>
					                <td><?=$project['project'];?></td>
					                <td><?=$project['start_date'];?></td>
					                <td><?=$project['end_date'];?></td>
					                <td><?=$project['status'];?></td>

					 </tr>           <?php   }
	                }
	                else //when there is no comment
	                {
	                    echo "<p>No Projects.</p>";
	                }
	                 ?>
	             </table> 
		</div>
<!-- Start Special Regulatory Supervision -->
	  	<div id="tab-6" class="tab-content">
		  <ul class="cu_details"> 
			<h5 class="c__list">Special Regulatory Supervision</h5> 
 			<?php       //if there is comments then print the comments
                if(count($directives) > 0)
                {
                    foreach ($directives as $directive)
                    {?>
                <li><?=$directive['directive'];?></li>
            <?php   }
                }
                else //when there is no comment
                {
                    echo "<p>No Special Regulatory Supervision Data.</p>";
                }
                 ?></ul>
		</div>

<!-- Start Regulations by Incentives -->

	  	<div id="tab-7" class="tab-content">
		  <ul class="cu_details"> 
			<h5 class="c__list">Regulations by Incentives</h5> 
 			<?php       //if there is comments then print the comments
                if(count($directives) > 0)
                {
                    foreach ($directives as $directive)
                    {?>
                <li><?=$directive['directive'];?></li>
            <?php   }
                }
                else //when there is no comment
                {
                    echo "<p>No Regulations by Incentives.</p>";
                }
                 ?></ul>
		</div>

					</div>


				</div>
			</div>
		</div>

    </div>
    </div>
  </div>
</div>


<div id="orderModal" class="modal fade col-md-6 col-centered" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Dynamic Content</h4>
            </div>

            <div class="modal-body">

                Content is loading...

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info">Save changes</button>
            </div>
        </div>
    </div>
</div>
    </article>

            <?php

            }
            else
                {

            ?>
	<article>
        <div class="col-md-8" id="content">
		 <div id="crumbs">Dashboard <i class="fa fa-chevron-right"></i> Overview</div>
            <div class="row">
				<div class="col-md-12" id="c__u">
					<h5>Commercial Utility Overview</h5>
					<div>
					</div>
				</div>
            </div>
           <div class="row">
                <div class="col-md-3"><a href="#"><div id="dash-blocks"><i class="fa fa-newspaper-o fa-3"></i><p>Licence Conditions</p></div></a></div>
               <div class="col-md-3"><a href="#"><div id="dash-blocks"><i class="fa fa-sliders fa-3"></i><p>Inspection Directives</p></div></a></div>
                    <div class="col-md-3"><a href="#"><div id="dash-blocks"><i class="fa fa-edit fa-3"></i><p>Service Level Agreement</p></div></a></div>
                    <div class="col-md-3"><a href="#"><div id="dash-blocks"><i class="fa fa-gg fa-3"></i><p>WSS Projects</p></div></a></div>
            </div>
        </div>
    </article>
            <?php } ?>