<footer class="container">
    <div class="container">
      <?php wp_nav_menu (
         array(
            'theme_location' => 'footer-menu',
            'container_class' => 'custom-menu-class',
              )
         )
      ?>            
    </div>
    <p><i>Whoots template</i></p>
    <p><a href="#">Back to top</a></p>
</footer>    
<?php wp_footer(); ?>   
</body>
</html>