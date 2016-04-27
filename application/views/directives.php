<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 

            if($level == "1")  
            { 
            ?>
 
            <article>
        <div class="col-md-7" id="content"> 
           <div class="row"> 
    
<table id="directives" class="table table-striped table-bordered display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>#</th> 
                <th>Description</th>
                <th>Issue Date</th>
                <th>Due Date</th>
                <th>Status</th> 
                <th>Actions</th> 
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>#</th> 
                <th>Description</th>
                <th>Issue Date</th>
                <th>Due Date</th>
                <th>Status</th> 
                <th>Actions</th> 
            </tr>
        </tfoot>
        <tbody>
	<?php $query = $this->db->get('directives');

	foreach ($query->result() as $row)
	{
	?> 
            <tr>
                <td><?php echo $row->dir_id; ?></td>
                <td><?php echo $row->directive; ?></td>
                <td><?php echo $row->issue_date; ?></td>
                <td><?php echo $row->due_date; ?></td>
                <td><?php echo $row->status; ?></td> 
                <td><a href="<?php echo base_url() . "directive_details/" . $row->dir_id; ?>">View</a></td> 
            </tr>
 
<?php } ?>     
           
        </tbody>
    </table>
	<script type="text/javascript" language="javascript"> 
$(document).ready(function() {
    $('#directives').DataTable( {
        "scrollY":        "200px",
        "scrollCollapse": true,
        "paging":         false
    } );
} );
	</script>
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
                List directives for Other Users
            </div>
        </div>
    </article> 
            <?php } ?>
      