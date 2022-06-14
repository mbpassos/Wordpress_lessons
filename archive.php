<?php
  get_header();
?>

<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg'); ?>)"></div>
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title"><?php 
        the_archive_title(); 
    // if(is_category()){
    //     single_cat_title();
    // } 
    // if (is_author()) {
    //    echo 'Posts by '; the_author();
    // }
    
    ?></h1>
    <div class="page-banner__intro">
      <p><?php the_archive_description(); ?></p>
    </div>
  </div>
</div>

<div class="container container--narrow page-section">
 <?php 
  while(have_posts()) {
    the_post(); ?>
    <div class="post-item">
      <h2 class="headline headline--medium headline--post-title" ><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
      <div class="metabox">
        <p>Posted by <?php the_author_posts_link();?> on <?php the_time('F j, Y'); ?> in <?php echo get_the_category_list(', '); ?></p>
      </div>
      <div class="generic-content"> 
        <?php the_excerpt(); ?>
        <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">Continue reading &raquo;</a></p>
      </div>
    </div>
  <?php }
    echo paginate_links();
    ?>

  </div>

  <!-- Anotar lições do akita em vez de trabalhar

  Aprendendo a aprender: A maior bronca ever

  quase 30 anos de experiência na área. 

  A forma correta de aprender:
 
    a bolha de startups vai estourar - opera cashflow negativo
    otimistas são os primeiros a cair numa crise - não cair no golpe de stock options
    nada garante que vpcê vai se dar bem

    programador DE VERDADE!! Você raramente vale o que acha que vale
    bolha - demnada muito alta 
    preço abaixo do normal

  crise do covid 19 - venture captalists

  recrutador - de saco cheio de receber proposta de recrutador
  certificações - PMI

  PMP - respeita corpo de conhecimento


    


  teste -->

<?php
  get_footer();
?>