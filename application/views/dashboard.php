<?php
defined('BASEPATH') OR exit('No direct script access allowed');

            if($level == "1")
            {
            ?>
        <article class="col-md-8" id="main" >
        <div class="col-md-12 scroll" id="content"> 
        <div id="crumbs">Dashboard <i class="fa fa-chevron-right"></i> Overview</div>
            <div class="row">
				<div class="col-md-12" id="c__u">
					<h5 class="title">Commercial Utilities</h5>
<div class="tabscontainer">
	<ul class="tabs">
	<?php if(isset($utilities) && $utilities) : $i = 0; foreach($utilities as $utility) : ?>
	<li class="tab<?php if($i === 0): ?> current<?php endif; ?>" data-tab="tab-<?php echo $utility['cu_id'] ?>"><?php echo $utility['utility'] ?></li>
		<?php $i++; ?>
	<?php endforeach; ?>
	<?php endif; ?>
	</ul>
	  <?php if(isset($utilities) && $utilities) : $i = 0; foreach($utilities as $utility) : ?>
	  <div id="tab-<?php echo $utility['cu_id'] ?>" class="tab-content<?php if($i === 0): ?> current<?php endif; ?>">
		  <ul class="col-md-2 col-towns">
			<?php $towns = $this->utilities_model->getTowns($utility['cu_id']); ?>
			<h5 class="town_list">Towns</h5>
			<?php foreach((array)$towns as $town) : ?>
			  <li><?php echo $town['town'] ?></li>
			<?php endforeach; ?>
		  </ul>
			<div class="col-md-10 items-col-10">
				<div class="row">
					<div class="col-md-7" id="directives">
					 <?php $directives = $this->directives_model->getDirectives($utility['cu_id']); ?>
					<h5 class="d__t">Directives</h5>
						<ul>
						<?php foreach((array)$directives as $directive) : ?>
						  <li><?php echo $directive['directive'] ?></li>
						<?php endforeach; ?>
						</ul>
				  </div>
					<div class="col-md-5" id="licences">
					 <?php $licences = $this->licences_model->getLicence($utility['cu_id']); ?>
					<h5 class="l__t">Licences</h5>
						<ul>
						<?php foreach((array)$licences as $licence) : ?>
						  <li><?php echo $licence['licence'] ?></li>
						<?php endforeach; ?>
						</ul>
				  </div>
			  </div> 

				<div class="row">
					<div class="col-md-12" id="projects">
					 <?php $projects = $this->projects_model->getProjects($utility['cu_id']); ?>
					<h5 class="p__t">Projects</h5>
						<ul>
						<?php foreach((array)$projects as $project) : ?>
						  <li><?php echo $project['project'] ?></li>
						<?php endforeach; ?>
						</ul>
					<span class="pull-right btn btn-info">
					 <?php
                    $url = str_replace(' ','-',$utility['utility']);
                    $url = str_replace(":",'',$url);
                    $url = str_replace("'",'',$url);
                ?>
					<a href="<?php echo base_url(); ?>utilities/details/<?php echo $utility['cu_id'] ?>/<?php echo urlencode($url);?>"><?php echo $utility['utility'] ?> Details</a></span>
			 	 	</div>
				  </div>
			 	</div>
      </div>
	  <?php $i++; ?>
        <?php endforeach; ?>
<?php endif; ?>
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