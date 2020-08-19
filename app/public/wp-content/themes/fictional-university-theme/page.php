<?php 
get_header(); 

while(have_posts()){
  the_post(); ?>

  <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title()?></h1>
      <div class="page-banner__intro">
        <p>DONT FORGET TO REPLACE LATER</p>
      </div>
    </div>  
  </div>

  <div class="container container--narrow page-section">

<!-- add a if statement to display that part only if I'm in a children page -->
  <?php 

  $idParentPage = wp_get_post_parent_id(get_the_ID());
    if($idParentPage){ ?>
      <div class="metabox metabox--position-up metabox--with-home-link">
        <p><a class="metabox__blog-home-link" href="<?php  echo get_permalink($idParentPage); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($idParentPage) ?></a> <span class="metabox__main"><?php the_title()?></span></p>
      </div>
    <?php }

  ?>  
    
    <?php 
    // Stock into an array the id of current page
    $checkArray = get_pages(array(
      'child_of' => get_the_ID()
    ));

// if statement to display or not the menu when you have children and parent pages
    if($idParentPage or $checkArray) { ?>
      <div class="page-links">
        <h2 class="page-links__title"><a href="<?php echo get_permalink(($idParentPage)) ?>"><?php echo get_the_title(($idParentPage)) ?></a></h2>
        <ul class="min-list">
          <?php 
          if ($idParentPage) {
            $findChildrenOf = $idParentPage;
          } else {
            $findChildrenOf = get_the_ID();
          }

          wp_list_pages(array(
            'title_li' => NULL,
            'child_of' => $findChildrenOf,
            // 'sort_column' => 'menu_order' if you want to choose the order by the BO Page Attributes > Order  without using classicals ordering display
          ));
      ?>
      <!-- <li class="current_page_item"><a href="#">Our History</a></li>
      <li><a href="#">Our Goals</a></li> -->
    </ul>
  </div>
  <?php } ?>

    <div class="generic-content">
      <?php the_content()?>
    </div>

  </div>
  
  
<?php }

get_footer();

?>