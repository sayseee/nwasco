<?php
defined('BASEPATH') OR exit('No direct script access allowed');

            if($level == "1")
            {
            ?>
            <article>
        <div class="col-md-8 scroll" id="content">
        <div id="crumbs">Dashboard <i class="fa fa-chevron-right"></i> Overview</div>
            <div class="row">
				<div class="col-md-12" id="c__u">
					<h5 class="title">Projects Details Page</h5>
<div class="tabscontainer">
	<ul class="tabs">
	<li>Tab one</li>
	</ul> 
	  <div id="tab-1" class="tab-content current">
		  <ul class="col-md-2 col-towns"> 
			<h5 class="town_list">Towns</h5> 
			  <li>Town</li> 
		  </ul>
			<div class="col-md-10 items-col-10">
			 
				<div class="row">
					<div class="col-md-12" id="projects">
					
					<h5 class="p__t">Projects</h5>
						<ul>
						
						  <li>Project</li> 
						</ul>
				  </div>
			 	</div>
		  </div>
      </div> </div>
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