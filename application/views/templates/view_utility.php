<?php
defined('BASEPATH') OR exit('No direct script access allowed');

            if($level == "1")
            {
            ?>
            <article>
        <div class="col-md-8 scroll" id="content"> 
        <div id="crumbs">Dashboard <i class="fa fa-chevron-right"></i> <?php echo $utility; ?></div>
            <div class="row">
				<div class="col-md-12" id="c__u">
					<h5 class="title"><?php echo $utility; ?>
						<span class="select-style pull-right">
							<select onchange="location = this.options[this.selectedIndex].value;">
					 	    <option>Select Commecial Utility</option>
							    <?php       //if there is comments then print the comments
				                if(count($utilities) > 0)
				                {
				                    foreach ($utilities as $utility)
				                    {?>
				                 <option value="<?php $url = str_replace(' ','-',$utility['utility']);
					                    $url = str_replace(":",'',$url);
					                    $url = str_replace("'",'',$url); echo base_url(); ?>utilities/details/<?php echo $utility['cu_id'];?>/<?php echo urlencode($url);?>">
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
	<li class="tab" data-tab="tab-5">Regulations by Incentives</li> 
	</ul>
	  	<div id="tab-1" class="tab-content current">
		  <ul class="cu_details"> 
			<h5 class="c__list">Licence conditions</h5> 
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
                    echo "<p>No Licence conditions</p>";
                }
                 ?></ul>
		</div>

	  	<div id="tab-2" class="tab-content">
		  <ul class="cu_details"> 
			<h5 class="c__list">Tarrif Conditions</h5> 
			 <table class="cu_details"> 
			 
 			<?php       //if there is comments then print the comments
                if(count($tariffs) > 0)
                {
                	?>
                		 <thead>
	                <th class="col-md-1">No</th>
               		 <th class="col-md-4">Condition</th>
	                <th class="col-md-1">Weight</th>
	                <th class="col-md-1">Score</th>
	                <th class="col-md-1">Due Date</th>
	                <th class="col-md-1">Status</th>
	                <th class="col-md-2">Remarks</th>

				 </thead>  
                	<?php
                    foreach ($tariffs as $tariff)
                    {?>
              <tr>
                <td><?=$tariff['tariff_id'];?></td>
                <td><?=$tariff['condition'];?></td>
                <td><?=$tariff['weight'];?></td>
                <td><?=$tariff['score'];?></td>
                <td><?=$tariff['due_date'];?></td>
                <td><?=$tariff['status'];?></td>
                <td><?=$tariff['remarks'];?></td>
              </tr>
            <?php   }
                }
                else //when there is no comment
                {
                    echo "<p>No Tarrif Conditions.</p>";
                }
                 ?>
	             </table> 
		</div>

	  	<div id="tab-3" class="tab-content">
		  <ul class="cu_details"> 
			<h5 class="c__list">Directives</h5> 
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
                    echo "<p>No Directives</p>";
                }
                 ?></ul>
		</div>

	  	<div id="tab-4" class="tab-content">
		  <ul class="cu_details"> 
			<h5 class="c__list">Licence conditions</h5> 
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
	                if(count($projects) > 0)
	                {
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

	  	<div id="tab-6" class="tab-content">
		  <ul class="cu_details"> 
			<h5 class="c__list">Licence conditions</h5> 
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
                    echo "<p>Currently, there are no comment.</p>";
                }
                 ?></ul>
		</div>

	  	<div id="tab-7" class="tab-content">
		  <ul class="cu_details"> 
			<h5 class="c__list">Licence conditions</h5> 
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
                    echo "<p>Currently, there are no comment.</p>";
                }
                 ?></ul>
		</div>

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