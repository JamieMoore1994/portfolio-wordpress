<?php
    $page = "blog";
    $title = "Blogs - Website Design & Development - Jamie Moore";
    $mainClass = "master__header";
    $pageClass = "blog";
    $description = "Jamie Moore's blogs page where you will find a range of issues and topics that I like to explore and talk about.";
    $canonical = "https://www.jamiegmoore.co.uk/blog.php";
    include "header.php";
?>

    <section class = "blog__title">
        <h1 class="blogs__heading">My recent blog posts</h1>
        <p class="blogs__intro-text">I write about anything I do, such as learning new skills and talking about the industry.</p>
    </section>

    </header>

    <main id = "content">
        <!--Overall card section-->
        <article class="blogs">
            <ul class="blogs__cards">

            <?php
              $blogPosts = new WP_Query(array('post_type'=>'blogs'));
            
              if($blogPosts->have_posts()): 
                while($blogPosts->have_posts()):
                  $blogPosts->the_post();
            ?>
                
                <!--The Industry Card-->
                <li class="blogs__card-item">
                    <a href = "<?php the_permalink(); ?>" class = "blog-links">
                        <figure class="blogs__photo">
                            <?php the_post_thumbnail(); ?>
                            <h2 class = "blogs__intro-title"><?php the_title(); ?></h2>
                        </figure>
                        <div class="blogs__intro">
                            <div class="blogs__entry">
                                <span class="blogs__entry-date">Posted on: <?php the_date(); ?></span>
                            </div>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                    </a>
                </li>

                <?php
                  endwhile;
                  endif;
                ?>
            </ul>
        </article>
    </main>

<?php
    include "footer.php";
?>
