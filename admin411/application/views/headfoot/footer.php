<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/modernizr/modernizr.js"></script>
<!-- am chart -->
<script src="<?php echo base_url() ?>assets/pages/widget/amchart/amcharts.min.js"></script>
<script src="<?php echo base_url() ?>assets/pages/widget/amchart/serial.min.js"></script>
<!-- Chart js -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/chart.js/Chart.js"></script>
<!-- Todo js -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/pages/todo/todo.js "></script>
<!-- Custom js -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/pages/dashboard/custom-dashboard.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/script.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/SmoothScroll.js"></script>
<script src="<?php echo base_url() ?>assets/js/pcoded.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/vartical-demo.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

<?php $this->load->view('modal/tambah_modal') ?>
</body>

<script>
    $(".formatUang").maskMoney({thousands: '.', decimal: ',', precision: 0});
    $(function () {
        $(".datepicker").datepicker();
    });
</script>

</html>