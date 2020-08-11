<?php
    $page = "performance-blog";
    $mainClass = "portfolio__header";
    $pageClas = "";
    $title = "Perfomance Blog - Website Design & Development - Jamie Moore";
    $description = "Discover the process and methods Jamie Moore follows in order to ensure my website performs well and ranks well on search engines.";
    $canonical = "https://www.jamiegmoore.co.uk/perfomance-blog.php";
    include "header.php";
?>
        <h1 class = "portfolio__header-title">Website Performance and Optimisation</h1>
    </header>

    <main id = "content">
        <section class = "blog-content blog-container">

            <!--Author details-->
            <div class = "blog__author">
                <img src="assets/img/jamie-moore-optimised.JPG" class = "blog__author--img" alt="An image of Jamie Moore">
                <span class = "blog__author-name">By Jamie Moore</span>
                <span class = "blog__author-date">Posted on: 05/11/19</span>
            </div>

            <div class="blog-content__intro">
                <h2 class="blog-content__title">Performance, Optimisation, SEO (Search Engine Optimisation). The steps I took provide a pleasant experience for people on my website and rank well on search engines.</h2>

                <p>Performance and optimisation on a website, two key factors that could determine whether your website is even seen by the public on search engines. Or, factors that determine whether a user lands on your website but bounces right away due to a slow loading and under-performing site. Find out in this blog post my approaches to ensure that my website is visible on search engines – mainly Google – and my methods to ensure the site runs fast.</p>
            </div>
        </section>

        <section class="main-body">

            <div class="blog-body blog-container">
                <h3 class="blog-body__titles">SEO (Search Engine Optimisation) integration</h3>

                <p>The first and most simple approach that you can do to improve visibility on search engines is adding a meaningful and unique title tag along with a descriptive meta description of each page. Once someone searches something on Google, your page title and meta description are the first thing they see so if they’re not unique and informative, that person might not click on your website.</p>
            </div>

            <div class="blog-container--large blog-body__examples">
                <figure class="blog-body__figures blog-body__examples--item large-image">
                    <img src="assets/img/optimised-blog-photos/meta-description.png" alt="The meta description for my home page">
                    <figcaption class = "blog-body__captions">
                        The meta description for my home page
                    </figcaption>
                </figure>
            </div>

            <div class="blog-body blog-container">
                <p>Although Google does not rank you directly on your title and meta descriptions, they do use click-through-rates (CTR) as a way of working out whether your website is good or not (Heijmans, 2019). So, the better the title and meta descriptions, the more likely someone will click through to your website, resulting in you moving up the Google ranks.</p>
            </div>
            
            <div class="blog-container--large blog-body__examples">
                <figure class="blog-body__figures blog-body__examples--item large-image">
                    <img src="assets/img/optimised-blog-photos/search-title-meta.png" alt="An image showing the title and meta description Google displays after a search">
                    <figcaption class = "blog-body__captions">
                        This image shows what a person sees after an organig search on Google - which is the title of the page and meta description.
                    </figcaption>
                </figure>
            </div>

            <div class="blog-body blog-container">
                <p>Another method to improve the SEO on your website is to add a canonical link to each HTML page. A Canonical link is a HTML element that tells search engines that a specific URL represents the main copy of that page (Moz, no date). The link must be an active and live link, so this technique is added once the website is live, just like in the example below.</p>
            </div>
            
            <div class="blog-container--large blog-body__examples">
                <figure class="blog-body__figures blog-body__examples--item large-image">
                    <img src="assets/img/optimised-blog-photos/canonical-link.png" alt="A canonical link used on a website in the head of the HTML file">
                    <figcaption class = "blog-body__captions">
                        This is the Canonical link I used for an old project that gave information in live music in Manchester.
                    </figcaption>
                </figure>
            </div>

            <div class="blog-body blog-container">
                <h3 class="blog-body__titles">Coding</h3>
                <p>A good and important practice you should follow on every project you build, is adding alt descriptions to images on your website. Not only is it good for SEO reasons, but alt descriptions are good for accessibility as it allows a screen reader to read the description to people who can’t see that image. I try to be descriptive as possible when providing alt text for the images on my website.</p>
            </div>

            <div class="blog-container--large blog-body__examples">
                <figure class="blog-body__figures blog-body__examples--item large-image">
                    <img src="assets/img/optimised-blog-photos/alt-description.png" alt="An alt description tag used on images on my website">
                    <figcaption class = "blog-body__captions">
                        An example of alt description used on the blog wireframe drawings from the portfolio development blog.
                    </figcaption>
                </figure>
            </div>

            <div class="blog-body blog-container">
                <p>Before you make your website live, an important tool to use is the <a href = "https://validator.w3.org/" class = "blog__links" title = "W3C Markup Validation Website">W3C Markup Validation Service</a> to check all your HTML files and CSS files, as they will flag up any errors in your code that you have missed. I certainly take advantage of this service in all my projects; you’d be surprised of the silly mistakes you can make.</p>
            </div>

            <div class="blog-container--large blog-body__examples">
                <figure class="blog-body__figures blog-body__examples--item large-image">
                    <img src="assets/img/optimised-blog-photos/html-validator.png" alt="The results from validating my home page on W3C Markup Service website">
                    <figcaption class = "blog-body__captions">
                        The results from validating my home page on W3C Markup Service website
                    </figcaption>
                </figure>
            </div>

            <div class="blog-body blog-container">
                <h3 class="blog-body__titles">Optimisation</h3>
                <p>There is nothing worse than opening a website either on your desktop or mobile and it takes a while to load – most of the time you simply click away from the site in frustration. A popular reason for slow loading websites is due to large image files that have not been optimised for the web, as Jehl (2014) stated, an average webpage would be around 1.7mb(megabytes) with images taking up 1.1mb of that. I do not want potential employers and users clicking away from my website due to slow loading images, so I used tools such as <a href = "https://www.adobe.com/uk/products/bridge.html" class = "blog__links" title = "Adobe website">Adobe Bridge</a> and <a href = "https://www.adobe.com/uk/products/photoshop.html" class = "blog__links" title = "Adobe website">Adobe Photoshop</a> to optimise my images to shave their file size down significantly.</p>
            </div>

        </section>
    </main>

    <aside class="blog-body blog-container">
            <ul class="blog-body__references">
                    <li class="blog-body__references--item">
                        Heijmans, M. (2019) How to create the right meta description. 18th October. Yoast. [Online] [Accessed on the 4th November 2019] <a href = "https://yoast.com/meta-descriptions/" title = "Yoast SEO article">https://yoast.com/meta-descriptions/</a>
                    </li>
                    <li class="blog-body__references--item">
                        Jehl, S. (2014) Responsible Responsive Design. New York: Jeffrey Zeldman.
                    </li>
                    <li class="blog-body__references--item">
                        Moz. (no date) Canonicalization. [Online] [Accessed on the 4th November 2019] <a href = "https://yoast.com/meta-descriptions/" title = "MOZ article on canonical links">https://moz.com/learn/seo/canonicalization</a>
                    </li>
                </ul>
        </aside>


<?php
    include "footer.php";
?>