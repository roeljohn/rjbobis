<?php
/**
 * Similarly, footer.php in a file in the WordPress page hierarchy is used to build 
 * the footer section of a WordPress theme and called in the footer section of all the template files. 
 * The footer.php generally contains the copyright information, calls to JS files, widget areas that 
 * commonly have site navigation.
 */

?>
  <footer class="my-5 pt-5 text-muted text-center text-small">
    <?php esc_html_e( '&copy; 2022 Roel John Bobis', 'rjbobis' ); ?>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>