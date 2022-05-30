
<!-- ############## FUNCTIONS LESSON ################################# -->

<!-- <?php
  function greet($name, $color) {
    echo "<p>Hi, my name $name is and my favourite color is $color.</p>";
  }

  greet('John', 'yellow');
  greet('Jane', 'blue');

?> -->
<!-- <h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p> -->



<!-- ############## WHILE LOOPS LESSON ############################## -->

<!-- <?php

  $names = array('Brad', 'John', 'Lila', 'Luna');
  
  $count = 0;

  // while($count < 101) {
  //   echo "<li>$count</li>";
  //   $count++;
  // }

  while($count < count($names)) {
    echo "<li>Hi my name is $names[$count]</li>";
    $count++;
  }

?> -->

<!-- <p>Hi, my name is <?php echo $names[2]; ?></p> -->


<!-- ############## POSTS LESSON ############################## -->

<!-- <?php

while(have_posts()) {
  the_post(); ?>
  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php the_content(); ?>
      <hr>
<?php
}

?> -->

<!-- ############## FOOTER & HEADER LESSON ############################## -->
<?php get_header(); 


while(have_posts()) {
  the_post(); ?>
  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php the_content(); ?>
      <hr>
<?php
}

  get_footer();

?> 


