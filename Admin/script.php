<script src="<?php echo BASE_URL.'plugins/jquery/jquery.min.js'; ?>"></script>
<script src="<?php echo BASE_URL.'plugins/jquery-ui/jquery-ui.min.js'; ?>"></script>
<script src="<?php echo BASE_URL . 'plugins/bootstrap/js/bootstrap.bundle.min.js'; ?>"></script>
<script src="<?php echo BASE_URL.'plugins/chart.js/Chart.min.js'; ?>"></script>
<script src="<?php echo BASE_URL . 'plugins/sparklines/sparkline.js'; ?>"></script>
<script src="<?php echo BASE_URL.'plugins/jqvmap/jquery.vmap.min.js'; ?>"></script>
<script src="<?php echo BASE_URL . 'plugins/jqvmap/maps/jquery.vmap.usa.js'; ?>"></script>
<script src="<?php echo BASE_URL.'plugins/jquery-knob/jquery.knob.min.js'; ?>"></script>
<script src="<?php echo BASE_URL . 'plugins/moment/moment.min.js'; ?>"></script>
<script src="<?php echo BASE_URL.'plugins/daterangepicker/daterangepicker.js'; ?>"></script>
<script src="<?php echo BASE_URL . 'plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'; ?>"></script>
<script src="<?php echo BASE_URL.'plugins/summernote/summernote-bs4.min.js'; ?>"></script>
<script src="<?php echo BASE_URL . 'plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'; ?>"></script>
<script src="<?php echo BASE_URL . 'dist/js/adminlte.js'; ?>"></script>
<script src="<?php echo BASE_URL . 'dist/js/demo.js'; ?>"></script>
<script src="<?php echo BASE_URL.'dist/js/pages/dashboard.js'; ?>"></script>
<script src="<?php echo BASE_URL.'plugins/inputmask/jquery.inputmask.min.js';?>"></script>
<script>
    $(function () {
        $('[data-mask]').inputmask()
    })
</script>
<script>
    // JavaScript ile kategori butonlarına tıklama olayını dinle
    document.querySelectorAll('.category-button').forEach(function(button) {
        button.addEventListener('click', function() {
            var categoryId = this.getAttribute('data-category-id');
            window.location.href = 'blogList.php?category=' + categoryId;
        });
    });
</script>
