<?php
    $page = "industry-blog";
    $mainClass = "portfolio__header";
    $pageClass = "";
    $title = "Industry Blog - Website Design & Development - Jamie Moore";
    $description = "Brexit, the digital industry and the role of a front-end developer. Find out Jamie Moore's thoughts on all of this.";
    $canonical = "https://www.jamiegmoore.co.uk/industry-blog.php";
    include "header.php";

    if(have_posts()):
        while(have_posts()):
      
        the_post();
?>
        <h1 class = "portfolio__header-title"><?php the_title(); ?></h1>
    </header>

    <main id = "content">
        
    <?php the_content(); ?>

       
    </main>

    
<?php
    endwhile;
    endif;
    include "footer.php";
?>