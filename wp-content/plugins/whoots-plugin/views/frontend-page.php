<?php
if (!defined('ABSPATH')) exit;
global $WhootsPlugin;
?>

<div class="whoots-container">
     <div class="giphy-embed">
        <h2><?php _e(''); ?></h2>
        <?php echo $WhootsPlugin->getOption('giphy_code'); ?>
    </div>
</div>