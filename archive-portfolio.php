<?php
    $page = "portfolio";
    $mainClass = "master__header";
    $pageClass = "blog";
    $title = "Portfolio - Website Design & Development - Jamie Moore";
    $description = "Have a look at Jamie Moore's recent projects and find out what he has to say about them such as his own critiques and what he would do better next time.";
    $canonical = "https://www.jamiegmoore.co.uk/portfolio.php";
    include "header.php";
?>
    
    <section class = "blog__title">
        <h1 class="blogs__heading">My Recent Projects</h1>
        <p class="blogs__intro-text">Discover my thoughts and critiques of each project I have took part in.</p>
    </section>
    </header>

    <main id = "content">
      <div class="portfolioPage__container">
        <ul class="portfolioPage__list">
        <?php
              $workPosts = new WP_Query(array('post_type'=>'portfolio'));
            
              if($workPosts->have_posts()): 
                while($workPosts->have_posts()):
                  $workPosts->the_post();
                  $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
            ?>
          <li class="portfolioPage__listItem">
            <a href="<?php the_permalink(); ?>" class="portfolioPage__link">
              <div class="portfolioPage__image" style="background-image:url(<?= $featuredImage ?>)">
              <h2 class="portfolioPage__title"><?php the_title(); ?></h2>
              <h3 class="portfolioPage__subTitle"><?= get_the_excerpt(); ?></h3>
              </div>
              <span class="portfolioPage__viewStudy">View case study</span>
            </a>
          </li>
          <?php
            endwhile;
            endif;
          ?>
        </ul>
      </div>
    </main>

<?php
    include "footer.php";
?>
