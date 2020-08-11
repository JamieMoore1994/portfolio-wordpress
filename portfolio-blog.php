<?php
    $page = "portfolio-blog";
    $mainClass = "portfolio__header";
    $pageClass = "";
    $title = "Portfolio Blog - Website Design & Development - Jamie Moore";
    $description = "Find out the whole process behind building my portfolio website, from research to design and then to building the website from scratch.";
    $canonical = "https://www.jamiegmoore.co.uk/portfolio-blog.php";
    include "header.php";
?>
        <h1 class = "portfolio__header-title">Portfolio Development Process</h1>
    </header>

    <main id = "content">
        <section class = "blog-content blog-container">

            <!--Author details-->
            <div class = "blog__author">
                <img src="assets/img/jamie-moore-optimised.JPG" class = "blog__author--img" alt="An image of Jamie Moore">
                <span class = "blog__author-name">By Jamie Moore</span>
                <span class = "blog__author-date">Posted on: 03/11/19</span>
            </div>

            <div class="blog-content__intro">
                <h2 class="blog-content__title">Research, design and build my own professional portfolio website. How did i do all this?</h2>
                <p>Building a professional portfolio website that showcases my skills, recent projects and my recent blog posts – my first time blogging too - is certainly a first for me.</p>
            </div>
        </section>

        <section class="main-body">
            <div class="blog-body blog-container">
                <h3 class="blog-body__titles">Website research</h3>
                
                <p>I needed ideas and inspiration to kick start this project, so I looked at many other professional’s portfolio websites and my favourite portfolio website I come across was <a href = "https://stuffandnonsense.co.uk/" class = "blog__links" title = "Andy Clarke's website">Andy Clarke’s</a>. His website is unique, beautifully designed, yet simple and easy to use. It has a modern and easy to read typeface along with an easy on the eye colour palette that has great colour contrast. Also, Andy Clarke broke down each project and gave useful insight into each recent project. I knew that if I could follow these principles whilst designing a website that looked a fraction as good as this site, it would be a successful project to me. Take a look at <a href = "https://stuffandnonsense.co.uk/" class = "blog__links" title = "Andy Clarke's website">Andy Clarke's </a>website yourself</p>

                <p>When looking at ways in which to display my recent projects, I came across a <a href = "https://twitter.com/alexmuench/status/1067042440207626240" class = "blog__links" title = "Alex Muench Twitter thread" >Twitter thread from Alex Muench</a>   – who is a senior product designer – that gave his thoughts on how to display your portfolio website. Muench (2019) stated that you should not only just display your recent projects, but to write about your project in detail such as what you loved and learned about the project, to what you would do differently about the project if you were to do it again. Providing this context to users who may use my website will be a useful feature and allow people to understand how I think and critique my own work.</p>
            </div>

            <div class="blog-body">
                <h3 class="blog-body__titles">Website design</h3>
                <p>I need to put all my ideas in my head onto paper and some design ideas visually displayed. A low fidelity wireframe is a perfect design method to do this, as Haas (no date) states, you can gain a better understanding of what you’re building, and your designs are more calculated. Content hierarchy was a main focus when producing my designs as it is important to ensure that the most important content was at the top of the page for the users to see.</p>
            </div>

            <div class="blog-container--large blog-body__examples">
                <figure class="blog-body__figures wireframes">
                    <img src = "assets/img/optimised-blog-photos/blogs-wireframe.JPG" alt = "Wireframe drawing of my first draft blogs page">
                    <figcaption class="blog-body__captions">Wireframe drawing of my blogs page</figcaption>
                </figure>

                <figure class="blog-body__figures wireframes">
                    <img src = "assets/img/optimised-blog-photos/mobile-blog-wireframe.JPG" alt = "Wireframe drawing for mobile version of my blogs page">
                    <figcaption class="blog-body__captions">Wireframe drawing for mobile version for the blogs page</figcaption>
                </figure>
            </div>

            <div class="blog-container--large blog-body__examples wireframes">
                <figure class="blog-body__figures wireframes">
                    <img src = "assets/img/optimised-blog-photos/cv-wireframe.JPG" alt = "Wireframe drawing of my CV for the CV's page">
                    <figcaption class="blog-body__captions">Wireframe drawing of my CV for the CV's page</figcaption>
                </figure>

                <figure class="blog-body__figures wireframes">
                    <img src = "assets/img/optimised-blog-photos/industry-wireframe.JPG" alt = "Wireframe drawing of my industry blog report page">
                    <figcaption class="blog-body__captions">Wireframe drawing of my industry blog report page</figcaption>
                </figure>
            </div>

            <div class="blog-body blog-container">
                <h3 class="blog-body__titles">Typography</h3>
                <p>I wanted an easy to read sans-serif typeface for most of the website and ‘Poppins’ seemed the perfect choice for me with its smooth round edges to the letters.</p>
            </div>

            <div class="blog-container--large">
                <h3 class="blog-body__titles">Background images</h3>
                <figure class = "blog-body__figures blog-body__examples--item large-image">
                    <img src = "assets/img/optimised-blog-photos/header-bg-screenshot.png" alt = "The Scalabale Vector Graphic background image in Illustrator">
                    <figcaption class="blog-body__captions">The Scalabale Vector Graphic background image in Illustrator</figcaption>
                </figure>
            </div>

            <div class="blog-body blog-container">
                <p>A theme throughout the site is the Scalable Vector Graphics (SVG) backgrounds I created – in which I felt gave a modern and dynamic feel to the website. SVG allow for many great possibilities on the web, with the main benefit being all modern browsers support it, has search engine optimisation benefits and SVG images scale any size to fit web pages – whilst keeping the quality of the image (Appnovation, no date). I only use SVG for background images in my portfolio but on future projects I will be sure to take full advantage of SVG images.</p>
            </div>

            <div class="blog-body blog-container">
                <h3 class="blog-body__titles">Website build</h3>
                <p>CSS files can be large and difficult to maintain and an easy way to stay organised is through the use of CSS custom properties. MDN Contributors (2019) define CSS custom properties as entities created by the person who write the CSS code that contain specific values to be reused throughout the document. I took advantage of this by defining all my colours needed in the root element so that changing or updating colours in the future will be as easy as changing the property’s value.</p>
            </div>

            <div class="blog-container--large">
                <figure class = "blog-body__figures blog-body__examples--item large-image">
                    <img src = "assets/img/optimised-blog-photos/css-variables.png" alt = "Custom CSS properties">
                    <figcaption class="blog-body__captions">The custom CSS properties I set for my portfolio website</figcaption>
                </figure>
            </div>

            <div class="blog-body blog-container">
                <h3 class="blog-body__titles">Website layout</h3>
                <p>Flexbox allows the items width and height within its container to best fill the available space (CSS Tricks, 2019). CSS grid is a layout system with rows and columns that allow you to design pages without the use of floats and positioning (W3 Schools, no date). These tools are amazing and combining these two amazing tools together will pretty much allow you to create any design you can think of!</p>
            </div>

            <div class="blog-container--large">
                <h3 class="blog-body__titles">The code used for my navigation</h3>
                    
                    <figure class = "blog-body__figures blog-body__examples--item large-image">
                        <div class="blog-body__code-background">
                            <code class = "code-example">
                                display: flex;
                                justify-content: space-around;
                                flex-wrap: wrap;
                            </code>
                        </div>
                        <figcaption class = "normal-text">
                            <p>Three lines of code and I had a responsive navigation. Once you give something a value of display flex it will align everything within it's container on the horizontal axis together side by side. Giving the value of <code class = "code-example">space-around</code> to the attribute <code class = "code-example">justify-content</code> will align the navigation items evenly side by side with equal space around them.</p>
                        </figcaption>
                    </figure>
            </div>

            <div class="blog-container--large">
                <h3 class="blog-body__titles">Here is the power of CSS grid</h3>

                    <figure class="blog-body__figures blog-body__examples--item large-image">
                        <div class="blog-body__code-background">
                            <code class = "code-example">
                                display: grid;
                                /* Makes card layout responsive, no need for media queries */
                                grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
                            </code>
                        </div>
                        <figcaption class = "normal-text">
                            <p>Two lines of code and this allowed for the blog cards on the blog page to be completely responsive without the use of media queries. The <code class = "code-examples inline">auto-fit</code> creates as many tracks the content needs so that they take up any avaiblable space. I then ask for each column to have a minumum width of <code class = "code-examples inline">25rem (250px)</code> and a maximum width of <code class = "code-examples inline">1fr (one fraction of the available space)</code> of the available space. This is all wrapped in a repeat function will allow for as many cards as I want to be added and no extra code needed.</p>
                        </figcaption>
                    </figure>

                    <figure class = "blog-body__figures blog-body__examples--item large-image">
                        <img src = "assets/img/optimised-blog-photos/blog-grid.png" alt = "The grid layout for the blogs page">
                        <figcaption class="blog-body__captions">The grid layout that allows the cards to fit within the grid tracks</figcaption>
                    </figure>
            </div>

            <div class="blog-body blog-container">
                <a href = "https://github.com/JamieMoore1994/jamie-portfolio" class = "btn" title = "Github repository">View code for this project</a>
            </div>

            <div class="blog-body blog-container">
                <h3 class="blog-body__titles">Want to learn more flexbox and grid?</h3>
                    <ul class="blog-body__resources">
                        <li><a href="https://www.youtube.com/channel/UC7TizprGknbDalbHplROtag" title = "Jen Simmons Youtube channel">Jen Simmons Layout Land</a></li>
                        <li><a href="https://gridbyexample.com/" title = "Rachel Andrew Grid tutorials">Rachel Andrew's Grid by Example</a></li>
                        <li><a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/" title = "CSS Tricks Flexbox guide">Everything you need to know about Flexbox</a></li>
                        <li><a href="https://css-tricks.com/snippets/css/complete-guide-grid/" title = "CSS Tricks Grid guide">Everything you need to know about CSS Grid</a></li>
                    </ul>
            </div>
        </section>
                    
        
    </main>

    <aside class="blog-body blog-container">
            <ul class="blog-body__references">
                    <li class="blog-body__references--item">
                        Appnovation. (no date) The Benefits of Scalable Vector Graphics (SVG). [Online] [Accessed on the 1st November 2019] <a href = "https://www.appnovation.com/blog/benefits-scalable-vector-graphics-svg">https://www.appnovation.com/blog/benefits-scalable-vector-graphics-svg</a>
                    </li>
                    <li class="blog-body__references--item">
                        CSS Tricks. (2019) A Complete Guide to Flexbox. 27th October. [Online] [Accessed on the 3rd November 2019] <a href = "https://css-tricks.com/snippets/css/a-guide-to-flexbox/#flexbox-background">https://css-tricks.com/snippets/css/a-guide-to-flexbox/#flexbox-background</a>
                    </li>
                    <li class="blog-body__references--item">
                        Hass, N. (no date) What is a Wireframe? 7 Reasons Why Wireframing is Important in Web Design. Orbit Media Studios. [Online] [Accessed on the 1st November 2019] <a href = "https://www.orbitmedia.com/blog/7-reasons-to-wireframe/">https://www.orbitmedia.com/blog/7-reasons-to-wireframe/</a>
                    </li>
                    <li class="blog-body__references--item">
                        MDN contributors. (2019) Using CSS Custom Properties (Variables). 30th October. Mozilla. [Online] [Accessed on the 3rd November 2019] <a href = "https://developer.mozilla.org/en-US/docs/Web/CSS/Using_CSS_custom_properties">https://developer.mozilla.org/en-US/docs/Web/CSS/Using_CSS_custom_properties</a>
                    </li>
                    <li class="blog-body__references--item">
                        Muench, A. (2018) For Designers: From looking through lots of portfolios during the last weeks from young designers. 26th November. Twitter. [Online] [Accessed on the 1st November 2019] <a href = "https://twitter.com/alexmuench/status/1067042440207626240">https://twitter.com/alexmuench/status/1067042440207626240</a>
                    </li>
                    <li class="blog-body__references--item">
                        W3 Schools. (no date) CSS Grid Layout Module. [Online] [Accessed on the 3rd November 2019] <a href = "https://www.w3schools.com/css/css_grid.asp">https://www.w3schools.com/css/css_grid.asp</a>
                    </li>
                </ul>
        </aside>

<?php
    include "footer.php";
?>
    