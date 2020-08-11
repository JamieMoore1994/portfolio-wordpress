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
        <section class = "live__music">
            <h2 class="projects__main-title">Explore Some Of My Recent Projects Below</h2>
            <div class="projects">
                <figure class="projects__image">
                    <img src="assets/img/live-music.jpg" alt="Live Music in Manchester homepage">
                    <figcaption class = "industry__img-caption">
                        The live music page of Live Music in Manchester website.
                    </figcaption>
                </figure>

                <div class="projects__description">
                    <h3 class="projects__title">Live Music in Manchester</h3>
                    <p>Live Music in Manchester was a website created by me, and a team of three other students. The team were tasked with researching, designing, building and testing a website that showcases to users where they can find live music in Manchester. This was done during the second year of university at The Manchester Metropolitan University on the web development degree.</p>
                    <a href = "/live-music.php" class = "btn" title = "Live Music project">View Live Music project</a>
                </div>
            </div>
        </section>

        <section class = "live__music two">
            <div class="projects">
                <figure class="projects__image">
                    <img src="assets/img/plan-it-page.jpg" alt="The Plan It logo for the Plan It webssite">
                    <figcaption class = "industry__img-caption">
                        The plan your day page of the Plan It website.
                    </figcaption>
                </figure>

                <div class="projects__description">
                    <h3 class="projects__title">Plan It</h3>
                    <p>Plan It another group project in university in which we were tasked with creating a website that showcases places you could go to in Manchester City Center. This website was more about how the group performed together - as the unit was called Digital Project Management - rather than being judged on the quality of the website.</p>
                    <a href = "/plan-it.php" class = "btn" title = "Plan It project">View Plan It project</a>
                </div>
            </div>
        </section>
    </main>

<?php
    include "footer.php";
?>
