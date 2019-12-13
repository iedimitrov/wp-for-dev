<?php
if (!defined('ABSPATH')) exit;
global $WhootsPlugin;
?>

<div class="wrapper">
        <h1><?php echo esc_html(get_admin_page_title()); ?></h1> 


        <form method="post" action="<?php echo esc_html(admin_url('admin-post.php')); ?>">
        <input type="hidden" name="whoots-admin-form" value="1" />
        <div class="giphy-embed">
            <h2><?php _e('Giphy iframe code'); ?></h2>
            <p>
                <textarea name="giphy_code" style="min-width: 400px;min-height:100px;"><?php echo $WhootsPlugin->getOption('giphy_code'); ?></textarea>
            </p>
        </div>
        <?php
        wp_nonce_field('whoots-save', 'whoots-message');
        submit_button(); ?>  
    </form>
</div><!-- .wrapper -->