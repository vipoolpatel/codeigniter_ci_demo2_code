<!-- jQuery 3 -->
<script src="<?=base_url()?>file/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url()?>file/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url()?>file/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>file/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>file/dist/js/demo.js"></script>

<script src="<?= base_url()?>file/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>

<script src="<?= base_url()?>file/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script src="<?= base_url()?>file/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>


