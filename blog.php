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
                
                <!--The Industry Card-->
                <li class="blogs__card-item">
                        <a href = "/industry-blog.php" title = "Go to my industry blog" class = "blog-links">
                            <figure class="blogs__photo">
                                <img src="assets/img/kelly-robinson-LKkiME8oWKo-unsplash_1.JPG" alt="Skyline view of Manchester city centre buildings">
                                <h2 class = "blogs__intro-title">The Industry</h2>
                            </figure>
                            <div class="blogs__intro">
                                <div class="blogs__entry">
                                    <span class="blogs__entry-date">Posted on: 20/10/2019</span>
                                </div>
                                <p>The UK digital industry, Brexit and the role of a front-end developer. What do I think and where do I stand in this rapidly changing industry?</p>
                            </div>
                    </a>
                </li>

                <!--Portfolio Development Card-->
                <li class="blogs__card-item">
                        <a href = "/portfolio-blog.php" title = "Go to my portfolio blog" class = "blog-links">
                            <figure class="blogs__photo">
                                <img src="assets/img/andrew-neel-cckf4TsHAuw-unsplash_1.JPG" alt="Laptop, coffee and notepad on table">
                                
                                <h2 class = "blogs__intro-title">Portfolio Development Process</h2>
                            </figure>
                            <div class="blogs__intro">
                                <div class="blogs__entry">
                                    <span class="blogs__entry-date">Posted on: 3/11/2019</span>
                                </div>
                                <p>The journey behind the build of my portfolio website from research, to designing and building the site.
                                </p>
                            </div>    
                        </a>
                </li>

                <!--Performance Card-->
                <li class="blogs__card-item">
                        <a href = "/performance-blog.php" title = "Go to my industry blog" class = "blog-links">
                            <figure class="blogs__photo">
                                <img src="assets/img/luke-chesser-JKUTrJ4vK00-unsplash_1.JPG" alt="Website metrics visually displayed on monitor">

                                <h2 class = "blogs__intro-title">SEO and Performance</h2>
                            </figure>
                            <div class="blogs__intro">
                                <div class="blogs__entry">
                                    <span class="blogs__entry-date">Posted on: 5/11/2019</span>
                                </div>
                                <p>The process to ensure my websites performance is good and ranks well on search engines.</p>
                            </div>
                        </a>
                </li>

                <!--Portfolio Improvements card-->
                <li class="blogs__card-item">
                    <a href = "/portfolio-improvements.php" title = "Go to my portfolio improvements blog" class = "blog-links">
                        <figure class="blogs__photo">
                            <img src="assets/img/blog-photos/sebastian-herrmann-jzTQVxCyKYs-unsplash.jpg" alt="An image of a man looking frustrated at his laptop">
                            <h2 class = "blogs__intro-title">Portfolio improvements</h2>
                        </figure>
                        <div class="blogs__intro">
                            <div class="blogs__entry">
                                <span class="blogs__entry-date">Posted on: 14/03/2020</span>
                            </div>
                            <p>I built my first portfolio and since had to fix numerous errors.</p>
                        </div>
                    </a>
                </li>

                <!--SVG animation blog-->
                <li class="blogs__card-item">
                    <a href = "/svg-blog.php" title = "Go to my SVG animation blog" class = "blog-links">
                        <figure class="blogs__photo">
                            <img src="assets/img/blog-photos/svg-animated-blog.jpg" alt="Screen shot of SVG car created in Illustrator">
                            <h2 class = "blogs__intro-title">SVG Animation</h2>
                        </figure>
                        <div class="blogs__intro">
                            <div class="blogs__entry">
                                <span class="blogs__entry-date">Posted on: 30/03/2020</span>
                            </div>
                            <p>Find out how I went from knowing nothing about SVG animations to creating a full animated sequence.</p>
                        </div>
                    </a>
                </li>

                <!--GreenSock blog card-->
                <li class="blogs__card-item">
                    <a href = "/greensock-blog.php" title = "Go to my GreenSock animation blog" class = "blog-links">
                        <figure class="blogs__photo">
                            <img src="assets/img/blog-photos/stars-gsap-blog.jpg" alt="Screen shot of the Explore Our Solar System landing page">
                            <h2 class = "blogs__intro-title">GreenSock Animations</h2>
                        </figure>
                        <div class="blogs__intro">
                            <div class="blogs__entry">
                                <span class="blogs__entry-date">Posted on: 31/03/2020</span>
                            </div>
                            <p>My journey to learning GreenSock and then creating an animated website with GreenSock.</p>
                        </div>
                    </a>
                </li>
       
            </ul>
        </article>
    </main>

<?php
    include "footer.php";
?>
