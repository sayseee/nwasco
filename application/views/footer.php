 </section>
<footer class="container-fluid">
    <div class="col-md-12" id="foot-bar">&copy; <?php echo date ('Y');?> Nwasco Dashboard</div>
</footer>
<script type="text/javascript">
   $('.modal').draggable({
    cursor: 'move',
    handle: '.modal-header'
});
$('.modal.draggable>.modal-dialog>.modal-content>.modal-header').css('cursor', 'move');

//Modal table row details

jQuery(document).ready(function(){
"use strict";

// assign js function to class
$('.preview_product').click(preview);

function preview() {
event.preventDefault();
// collect data - either from forms or from data variables
var id = $(this).data('id');

// load the modal content with a loader gif and message
$('#modal-content').html('<img class="loader" src="/images/loaders/loader1.gif")." alt="" /> Loading Preview...');

// show modal window
$('#preview').modal('show');

// do the ajax bit
var post_data = {
'product_id': id,
};
$.post('ajax_get_preview'), post_data, function(theResponse){

// load the modal window with the relevant content returned
$('#modal-content').html(theResponse);
});
}

}); 
$(document).ready(function(){
    $('#myTable').dataTable( {

  "paging":   false,
  "info":     false,
  "columnDefs": [ {
      "targets": 'nosort',
      "orderable": false,
      className: "nosort actions", "targets": [ 0, 6 ] 
    } ]
} );
});

</script>  
</div>
<script src="<?php echo base_url(); ?>assets/js/animate.js" type="text/javascript"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js" type="text/javascript"></script>
</body>
</html>
