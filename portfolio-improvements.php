<?php
    $page = "portfolio-improvements";
    $mainClass = "portfolio__header";
    $pageClass = "";
    $title = "Portfolio Improvements - Website Design & Development - Jamie Moore";
    $description = "Read about the issues that arised following on from building my first portfolio website and how I fixed those issues.";
    $canonical = "https://www.jamiegmoore.co.uk/portfolio-improvements.php";
    include "header.php";
?>
        <h1 class = "portfolio__header-title">Portfolio Improvements</h1>
    </header>

    <main id = "content">

        <!--Blog title section-->
        <section class = "blog-content blog-container">

            <!--Author details-->
            <div class = "blog__author">
                <img src="assets/img/jamie-moore-optimised.JPG" class = "blog__author--img" alt="An image of Jamie Moore">
                <span class = "blog__author-name">By Jamie Moore</span>
                <span class = "blog__author-date">Posted on: 14/03/20</span>
            </div>

            <div class="blog-content__intro">
                <h2 class="blog-content__title">I thought I finished building my first portfolio website - but there was plenty of issues to improve and fix</h2>

                <p>So, I built my first ever portfolio website and there was a sense of relief, but as with any website there is always room for improvement and issues to fix – as was the case with my website.</p>

                <p><a href="http://www.17076460.webdevmmu.uk/jamie-portfolio-backup/index.html" class = "blog__links" title = "First version of my portfolio website">View older version of my portfolio website</a>.</p>
            </div>
        </section>

        <!--Main blog body-->
        <section class="main-body">

            <!--Usability section-->
            <div class="blog-body blog-container">
                <h3 class="blog-body__titles">Usability issues</h3>
                    <p>After feedback from tutors, students and various industry professionals, it was evident that there was a major usability issue with the navigation disappearing on a number of pages. Pierce (no date) states that the most annoying part of a website is a confusing and unsuitable navigation and that a confusing navigation may leave users feeling lost and wondering what to do next. This was the issue for my website, as the navigation completely disappeared on all the blog pages and was left too late before project submission to rectify – which resulted in confused users. This was rectified by ensuring the global navigation is available on every page.</p>
            </div>

            <!--Before website fixes images-->
            <div class="blog-container--large">
                <h4 class="blog-body__titles">Images before usability fixes</h4>
                <ul class="blog-body__examples">
                    <li class="blog-body__examples--item">
                        <figure class="blog-body__figures">
                            <img src="assets/img/blog-photos/missing-nav.jpg" alt="Image showing missing nav on the industry blog page">
                            <figcaption class = "blog-body__captions">
                                Missing nav on the industry blog page
                            </figcaption>
                        </figure>
                    </li>

                    <li class="blog-body__examples--item">
                        <figure class="blog-body__figures">
                            <img src="assets/img/blog-photos/missing-nav-one.jpg" alt="Image showing missing nav on the portfolio development blog page">
                            <figcaption class = "blog-body__captions">
                                Missing nav on the portfolio development blog page
                            </figcaption>
                        </figure>
                    </li>

                    
                    <li class="blog-body__examples--item blog-body__examples--container">
                        <figure class="blog-body__figures">
                            <img src="assets/img/blog-photos/missing-nav-three.jpg" alt="Image showing missing nav on the website optimisation blog page">
                            <figcaption class = "blog-body__captions">
                                Missing nav on the website optimisation blog page
                            </figcaption>
                        </figure>
                    </li>
                </ul>
            </div>

             <!--After website navigation fixes images-->
             <div class="blog-container--large">
                <h4 class="blog-body__titles">Image after usability fix</h4>
                <ul class="blog-body__examples">
                    <li class="blog-body__examples--item large-image">
                        <figure class="blog-body__figures">
                            <img src="assets/img/blog-photos/fixed-nav.jpg" alt="Image showing the fixed nav on the industry blog page">
                            <figcaption class = "blog-body__captions">
                                Fixed nav on the industry blog page - but added to every page for better usability
                            </figcaption>
                        </figure>
                    </li>
                </ul>
            </div>


            <div class="blog-body">
                <p>Another issue was on the portfolio page, where I displayed an image for users to get a glimpse of a project website I have built. The issue was that users could not clarify whether it was an image of a website page or a basic image due to not displaying the browser URL.</p>
            </div>

             <!--Before chrome usability fixed issues-->
             <div class="blog-container--large">
                <h4 class="blog-body__titles">Image before browser URL fix</h4>
                <ul class="blog-body__examples">
                    <li class="blog-body__examples--item large-image">
                        <figure class="blog-body__figures">
                            <img src="assets/img/blog-photos/chrome-issues.jpg" alt="Image showing a usability issue with user not knowing the image is taken from a website">
                            <figcaption class = "blog-body__captions">
                                Image of live music website not showing the browser URL. This was also the same for the Plan It project image.
                            </figcaption>
                        </figure>
                    </li>
                </ul>
            </div>

            <!--After chrome usability fixed images-->
            <div class="blog-container--large">
                <h4 class="blog-body__titles">Image after browser URL fix</h4>
                <ul class="blog-body__examples">
                    <li class="blog-body__examples--item large-image">
                        <figure class="blog-body__figures">
                            <img src="assets/img/blog-photos/chrome-fix.jpg" alt="Fixed usability issues showing browser URL with Live Music website">
                            <figcaption class = "blog-body__captions">
                                Browser URL now showing for the Live Music website. This was also the same for the Plan It project image.
                            </figcaption>
                        </figure>
                    </li>
                </ul>
            </div>
            <!--End of usability section-->

            <!--Accessiblity section-->
            <div class="blog-body">
                <h3 class="blog-body__titles">Accessibility: SVG Images</h3>
                <p>I was relativity new to using SVG images on my own projects and decided to use them to display my social media icons. I used free online service <a href="https://icomoon.io/" class = "blog__links" title = "IcoMoon website">IcoMoon</a> to get my social media icons – but the main drawback being that to view them when working on a project you need a live server as they do not display without one.</p>

                <p>As I was new to SVG images I was not aware of how to make them accessible by providing text equivalent description of the images. According the the <a href="https://www.w3.org/TR/2000/NOTE-SVG-access-20000807/" class = "blog__links" title = "W3C accessible SVG specification">W3C specification</a>, to meet the guideline to displaying an accessible SVG image you should provide a <code class = "code-example">title</code> - which is a human readable title for the image that is also accessible by a speech synthesizer – and provide a <code class = "code-example">desc</code>, which is a longer and complete description of the image.</p>

                <p>To improve this, I added a relevant title and description to each SVG image on the website and I will continue to do so on every project I use SVG images as accessible content is paramount.</p>
            </div>

            <!--SVG before accessibility fixes-->
            <div class="blog-container--large">
                <h4 class="blog-body__titles">Images before semantic HTML SVG markup</h4>
                <ul class="blog-body__examples">
                    <li class="blog-body__examples--item large-image">
                        <figure class="blog-body__figures">
                            <img src="assets/img/blog-photos/before-accessibility.jpg" alt="An image showing inaccessible HTML markup to present the SVG icons">
                            <figcaption class = "blog-body__captions">
                                Inaccessible HTML markup for the SVG icons
                            </figcaption>
                        </figure>
                    </li>
                </ul>
            </div>

            <!--SVG after accessibility fixes-->
            <div class="blog-container--large">
                <h4 class="blog-body__titles">Images after semantic HTML SVG markup</h4>
                <ul class="blog-body__examples">
                    <li class="blog-body__examples--item large-image">
                        <figure class="blog-body__figures">
                            <img src="assets/img/blog-photos/after-accessibility.jpg" alt="Accessible HTML markup to present the SVG icons on my website">
                            <figcaption class = "blog-body__captions">
                                Accessible HTML markup for the SVG icons
                            </figcaption>
                        </figure>
                    </li>
                </ul>
            </div>

            <div class="blog-body">
                <h3 class="blog-body__titles">Branding</h3>
                <p>Throughout the website there is a theme of the wavy SVG background, but there is some inconsistency. There was also room for improvement on the blog posts to give the user more clarity that I wrote the blog post. To improve this I ensured the background on every page had a curvy SVG background and added a small image of myself to each blog post.</p>
            </div>

            <!--Before branding fixes-->
            <div class="blog-container--large">
                <h4 class="blog-body__titles">Images before website branding improvements</h4>
                <ul class="blog-body__examples">
                    <li class="blog-body__examples--item">
                        <figure class="blog-body__figures">
                            <img src="assets/img/blog-photos/before-header-industry.jpg" alt="An image highlighting the background image for the Industry Blog page">
                            <figcaption class = "blog-body__captions">
                                The different background image on the Industry Blog page
                            </figcaption>
                        </figure>
                    </li>

                    <li class="blog-body__examples--item">
                        <figure class="blog-body__figures">
                            <img src="assets/img/blog-photos/before-blog-theme.jpg" alt="An image of the blogs page showing the blog boxes">
                            <figcaption class = "blog-body__captions">
                                Square edges for the blog posts not following the theme of the curvy SVG backgrounds
                            </figcaption>
                        </figure>
                    </li>

                    <li class="blog-body__examples--item blog-body__examples--container ">
                        <figure class="blog-body__figures">
                            <img src="assets/img/blog-photos/before-blog-branding.jpg" alt="An image highlighting poor branding on the portfolio development blog">
                            <figcaption class = "blog-body__captions">
                                Not much branding displaying the author on the blog pages
                            </figcaption>
                        </figure>
                    </li>
                </ul>
            </div>

            <!--After branding fixes-->
            <div class="blog-container--large">
                <h4 class="blog-body__titles">Images after website branding improvements</h4>
                <ul class="blog-body__examples">
                    <li class="blog-body__examples--item">
                        <figure class="blog-body__figures">
                            <img src="assets/img/blog-photos/after-industry-header.jpg" alt="An image highlighting the SVG background image on the industy blog page">
                            <figcaption class = "blog-body__captions">
                                Fixing the header of the Industry blog page to keep in theme of the website
                            </figcaption>
                        </figure>
                    </li>

                    <li class="blog-body__examples--item">
                        <figure class="blog-body__figures">
                            <img src="assets/img/blog-photos/after-theme-fix.jpg" alt="An image highlighting the round edges of blog post boxes">
                            <figcaption class = "blog-body__captions">
                                Keeping in theme of the site by adding a border radius to the edge of the boxes
                            </figcaption>
                        </figure>
                    </li>

                    <li class="blog-body__examples--item blog-body__examples--container">
                        <figure class="blog-body__figures">
                            <img src="assets/img/blog-photos/after-branding-fix.jpg" alt="A blog post that displays an image of the author">
                            <figcaption class = "blog-body__captions">
                                Adding an image of myself added to each blog post to add to the branding to the website
                            </figcaption>
                        </figure>
                    </li>
                </ul>
            </div>

            <div class="blog-body">
                <h3 class="blog-body__titles">Moving my CSS to SASS</h3>
                <p>Currently, my portfolio site was all styled in one long CSS file - with a total of 1884 lines of code. As I will be consistently adding pages to my website, having one long CSS file would not be flexible and easy to edit. SASS allows you to divide up all your CSS into  multiple files for a more organised and effient way to edit each page of the website, and the main benefit is that only one HTTP request is called because you can compile all the SASS files into one CSS file (Mauri, 2018). My compiled CSS file is also 11kb less than the original CSS file - and that is with two extra pages being added and styled.</p>
            </div>

            <!--After branding fixes-->
            <div class="blog-container--large">
                <h4 class="blog-body__titles">Before and after using SASS</h4>
                <ul class="blog-body__examples">
                    <li class="blog-body__examples--item">
                        <figure class="blog-body__figures">
                            <img src="assets/img/blog-photos/before-compiling.jpg" alt="Showing the file size of the CSS file for the portfolio website">
                            <figcaption class = "blog-body__captions">
                                Ther orginal file size before using SASS
                            </figcaption>
                        </figure>
                    </li>

                    <li class="blog-body__examples--item">
                        <figure class="blog-body__figures">
                            <img src="assets/img/blog-photos/after-compiling.jpg" alt="Showing the file size of the CSS file after using SASS to compile all SASS files">
                            <figcaption class = "blog-body__captions">
                                File size for all the compiled SASS files 11kb lower
                            </figcaption>
                        </figure>
                    </li>
                </ul>
            </div>

        </section>
           
    </main>

    <aside class="blog-body blog-container">
            <ul class="blog-body__references">
                    <li class="blog-body__references--item">
                        Mauri, C. (2018) <i>7 benefits of using SASS over conventional CSS</i>. 14th March. Mugo Web. [Online] [Accessed on the 13th March 2020] <a href = "https://www.mugo.ca/Blog/7-benefits-of-using-SASS-over-conventional-CSS/" title = "Link to this referenced article">https://www.mugo.ca/Blog/7-benefits-of-using-SASS-over-conventional-CSS</a>
                    </li>

                    <li class="blog-body__references--item">
                        Pierce, P. (No Date) <i>10 Guidelines For Navigation Usability</i>. [Online] [Accessed on the 13th March 2020] <a href = "https://usabilitygeek.com/10-guidelines-for-navigation-usability/" title = "Link to this referenced article">https://usabilitygeek.com/10-guidelines-for-navigation-usability/</a>
                    </li>
                </ul>
        </aside>

<?php
    include "footer.php";
?>