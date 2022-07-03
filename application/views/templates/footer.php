</div>
<div class="page-footer">
    <a href="#" class="page-footer-item page-footer-item-right">&copy CoraliStudio 2021<i data-feather="arrow-right" class="footer-right"></i></a>
</div>

</div>

</div>
<!-- Javascripts -->
<script src="<?= base_url(); ?>assets/plugins/jquery/jquery-3.4.1.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="<?= base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/feather-icons"></script>
<script src="<?= base_url(); ?>assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/pace/pace.min.js"></script>
<script src="<?= base_url(); ?>assets/js/main.min.js"></script>

<script>
    $('.form-check-input').on('click', function() {
        const menuId = $(this).data('menu');
        const menuId = $(this).data('role');

        $.ajax({
            url: "<?= base_url('admin/changeaccess'); ?>",
            type: 'post',
            data: {
                menuId: menuId,
                roleId: roleId
            },
            success: function() {
                document.location.href = "<?= base_url('admin/role_access/'); ?>" + roleId;
            }

        });
    });
</script>

</body>

</html>