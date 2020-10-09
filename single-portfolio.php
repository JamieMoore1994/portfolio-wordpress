<?php
	$mainClass = "portfolio__header";
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
	
	<section class="relatedStudy">
		<div class="container container--large">
			<ul class="relatedStudy__list">
			<?php
				$relatedStudy = new WP_Query(array('post_type'=>array('portfolio'), 'posts_per_page'=> 3));

				if($relatedStudy->have_posts()): 
					while($relatedStudy->have_posts()):
						$relatedStudy->the_post();
			?>
			
			<li class="relatedStudy__listItem">
        <a href = "<?php the_permalink(); ?>" class = "relatedStudy__listLink">
          <figure class="relatedStudy__imageHolder">
              <img class="relatedStudy__image" src="<?php the_post_thumbnail(); ?>">
              <h2 class = "relatedStudy__title"><?php the_title(); ?></h2>
          </figure>
          <div class="relatedStudy__intro">
            <p class="relatedStudy__text bodytext bodytext--white"><?= get_the_excerpt(); ?></p>
          </div>
        </a>
			</li>
			
			<?php
        endwhile;
        endif;
			?>
			</ul>
		</div>
	</section>

	
<?php
	endwhile;
	endif;
	include "footer.php";
?>