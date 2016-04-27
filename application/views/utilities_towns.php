<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 

            if($level == "1")  
            { 
            ?>
 
            <article>
        <div class="col-md-7" id="content"> 
           <div class="row"> 
                 <?php if(isset($utilities) && $utilities) : foreach($utilities as $utility) : ?>
  <ul>
    <li class="col-md-3"><a href="#"><?php echo $utility['utility'] ?></a>
      <ul> 
        <?php $towns = $this->utilities_model->getTowns($utility['cu_id']); ?>
        <?php foreach($towns as $town) : ?>
          <li><?php echo $town['town'] ?></li>
        <?php endforeach; ?>
      </ul>
    </li>
  </ul>
<?php endforeach; ?>
<?php endif; ?>
            </div>
        </div>
    </article> 

            <?php

            }
            else
                {

            ?> 
<article>
        <div class="col-md-7" id="content"> 
           <div class="row"> 
               Utilties for ordinary user
            </div>
        </div>
    </article> 
            <?php } ?>
      