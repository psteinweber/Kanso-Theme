<footer class="content-info container" role="contentinfo">
  <div class="row fwidgets">

      <?php dynamic_sidebar('sidebar-footer'); ?>
    </div>
    <div class="row">
    <div class="col-lg-12">
      <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> – Kanso Theme by <a href="http://metamonks.com">Metamonks</a></p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
