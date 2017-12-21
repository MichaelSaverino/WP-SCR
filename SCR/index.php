<?php get_header();?>
<div class="row">
  <div class="col-sm-8 blog-main">
    <? get_template_part( 'content', get_post_format() );?>
    <?php if( have_post() ) : while ( have_post() ) :the_post ();
      get_template_part ('content', get_post_format() );
      endwhile; endif;
    ?>
    <?php the_content();
  </div> <!-- /.blog-main -->
  <?php get_sidebar(); ?>
</div>  <!-- /.row -->
<?php get_footer();?>