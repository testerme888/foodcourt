<script src="<?= base_url('assets/js/jquery-3.7.1.min.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/js/toastr.min.js')?>"></script>
<script src="<?= base_url('assets/js/main.js')?>"></script>

<script>
function toggleSidebar() {
    $('#sidebar').toggleClass('collapsed');
    $('#main-content').toggleClass('collapsed');
    $('#sidebar-logo').toggleClass('collapsed');
    $('.logo').toggleClass('collapsed');
}


// Toastr
<?php if($this->session->flashdata('success')): ?>
    toastr.success('<?= $this->session->flashdata('success'); ?>');
<?php elseif($this->session->flashdata('error')): ?>
    toastr.error('<?= $this->session->flashdata('error'); ?>');
<?php endif; ?>

toastr.options = {
    "closeButton": true,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "timeOut": "3000"
}
$(document).ready(function(){
    $('.menu-toggle').click(function(){
        let $icon = $(this).find('.toggle-icon');
        let $menu = $(this).next('.menu');

        $menu.collapse('toggle'); // Use Bootstrap's collapse method

        // After toggling, adjust the icon based on current state
        $menu.on('shown.bs.collapse', function(){
            $icon.removeClass('fa-chevron-left').addClass('fa-chevron-down');
        });
        $menu.on('hidden.bs.collapse', function(){
            $icon.removeClass('fa-chevron-down').addClass('fa-chevron-left');
        });
    });

    // On page load — for any already open menu, set icon down
    $('.menu').each(function(){
        let $menu = $(this);
        let $icon = $menu.prev('.menu-toggle').find('.toggle-icon');
        if($menu.hasClass('show')){
            $icon.removeClass('fa-chevron-left').addClass('fa-chevron-down');
        }
    });
});



</script>

</body>
</html>
