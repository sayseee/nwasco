 </section>
<footer class="container-fluid">
    <div class="col-md-12" id="foot-bar">&copy; <?php echo date ('Y');?> Nwasco Dashboard</div>
</footer>

<script type="text/javascript" charset="utf-8">

$(document).ready(function() {
    $('#table').DataTable( {
     "paging":   false,
  "info":     false,
  "columnDefs": [ {
      "targets": 'nosort',
      "orderable": false,
      className: "nosort actions", "targets": [ 0, 6 ] 
    } ]
} );
} );

$("#orderModal").draggable({
      handle: ".modal-header"
  });

    </script>
</div>
<script src="<?php echo base_url(); ?>assets/js/animate.js" type="text/javascript"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
</body>
</html>
