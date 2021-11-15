jQuery(document).ready(function() {
    jQuery('.code-snippets-tab-item').click(function() {
        jQuery('.code-snippets-tab-item').removeClass('active');
        jQuery(this).addClass('active');
        jQuery('.code-snippets-content-item').removeClass('active');
        jQuery('#code-snippets-' + jQuery(this).data('type')).addClass('active');
    });
});
