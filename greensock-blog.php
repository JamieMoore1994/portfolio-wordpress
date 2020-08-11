<?php
    $page = "greensock-blog";
    $mainClass = "portfolio__header";
    $pageClass = "";
    $title = "Greensock Animations - Website Design & Development - Jamie Moore";
    $description = "A blog documenting the journey to create an animated website using JavaScript animation Greensock. Follow the journey behind how I went from a total Greensock beginner, to becoming just about good enough to create an animated website.";
    $canonical = "https://www.jamiegmoore.co.uk/greensock.php";
    include "header.php";
?>
        <h1 class = "portfolio__header-title">An animated website using Greensock</h1>
    </header>

    <main id = "content">
        <section class = "blog-content blog-container">

            <!--Author details-->
            <div class = "blog__author">
                <img src="assets/img/jamie-moore-optimised.JPG" class = "blog__author--img" alt="An image of Jamie Moore">
                <span class = "blog__author-name">By Jamie Moore</span>
                <span class = "blog__author-date">Posted on: 31/03/20</span>
            </div>

            <div class="blog-content__intro">
                <h2 class="blog-content__title">Greensock, a powerful JavaScript animation library that I would certainly be using again on future projects</h2>
                <p>Creating an animated website using GreenSock - as well as ScrollMagic - proved to be both fun and challenging.</p>
            </div>
        </section>

        <section class="main-body">
            <div class="blog-body blog-container">
                <h3 class="blog-body__titles">Aim</h3>
                
                <p>To create a fun, unique and animated experience for users that briefly teaches users about our solar system.</p>
            </div>

            <div class="blog-body blog-container">
                <h3 class="blog-body__titles">Objectives</h3>
                
                <ul class="blog-body__list">
                    <li class="blog-body__list--item">Research and learn the fundamentals of GreenSock and the benefits of using it.</li>
                    <li class="blog-body__list--item">Use XD to design how the website may look and think about the type of animations to do.</li>
                    <li class="blog-body__list--item">Research and learn about the solar system.</li>
                    <li class="blog-body__list--item">Build the website using HTML, SCSS and GreenSock.</li>
                </ul>
            </div>

            <div class="blog-body blog-container">
                <h3 class="blog-body__titles">Definition</h3>
                <p>The GreenSock Animation Platform (GSAP) is a powerful JavaScript animation library that is used to create scripted animations with a clear focus on performance and optimisation (Soueidan, 2017). GreenSock is used by many large companies such as Adobe, Google, Nike, Microsoft and Amazon.</p>

                <p>GreenSock is the fastest full-featured scripted animation tool on the planet that allows you to control a large animated sequence using timelines whilst solving all browser compatibility issues for you (Greensock, 2014). There are many more benefits to using GreenSock, but these features alone made me want to learn this technology.</p>

                <p>Animations for the web – when used in the right context – can significantly improve the user experience for a user when using your website (Diaz, 2018). By learning GreenSock, it will improve my skillset as a developer and allow me to create high quality animations that can provide unique experiences for users who interact with websites create – as well as improving the user experience.</p>

                <p>Prior to this project I had little knowledge in Greensock and a basic understanding of JavaScript – which helped with adapting to GreenSock quicker. I have only ever created animations using CSS Keyframes and transitions.</p>
            </div>

            <div class="blog-body blog-container">
                <h3 class="blog-body__titles">Set Up</h3>
                <p>To bring this project to life, I used HTML, SCSS, GreenSock, and some basic ScrollMagic in order to trigger each GreenSock animated timeline when coming into view of the user.</p>
            </div>

            <div class="blog-body blog-container">
                <h3 class="blog-body__titles">Location</h3>
                <p>Want to view this project ? <a href="http://www.17076460.webdevmmu.uk/solar-system/index.html#top" class = "blog__links" title = "Explore our solar system website">Explore our solar system</a></p>

                <p>Have a look at the code for this project on <a href="https://github.com/JamieMoore1994/solar-system" class = "blog__links" title = "Link to view project on Github">Github</a>.</p>
            </div>

            <div class="blog-body blog-container">
                <h3 class="blog-body__titles">How</h3>
                <p>I began by creating a basic high-fidelity wireframe in Adobe XD to experiment how I want the website to look and think about the type of animations I could add.</p>
            </div>

            <div class="blog-container--large">
                <figure class = "blog-body__figures blog-body__examples--item large-image">
                    <img src = "assets/img/blog-photos/mercury-design.jpg" alt = "An Adobe XD high-fidelity wireframe for the Mercury section">
                    <figcaption class="blog-body__captions">Adobe XD high-fidelity wireframe for the Mercury section</figcaption>
                </figure>
            </div>

            <div class="blog-body blog-container">
                <h3 class="blog-body__titles">Inspiration</h3>
                <p><a href="https://www.apple.com/uk/iphone-11/" class = "blog__links" title = "Apples animated website showcasing the Iphone 11">Apple </a>create some amazing and unique experiences on their website when browsing various products. They display some complex animations at a certain point when a section comes into the user’s viewport and this is something that I would like to replicate in a similar manner for the solar system website.</p>
            </div>

            <div class="blog-body blog-container">
                <h3 class="blog-body__titles">ScrollMagic</h3>
                <p>I used ScrollMagic to trigger all my planet animated timelines and the about information slide in. As ScrollMagic takes away the normal scroll behaviour for the user, you have to be careful how you use it as it can result in a poor user experience - but it was used on this project to enhance the user experience and draw the user to important content. Read this <a href="https://scotch.io/tutorials/building-interactive-scrolling-websites-with-scrollmagic-js" class = "blog__links" title = "An article on Scotch explaining ScrollMagic">article from Nicholas Cerminara</a> to learn more about ScrollMagic.</p>
            </div>

            <div class="blog-container--large">
                <figure class = "blog-body__figures blog-body__examples--item large-image">
                    <img src="assets/img/blog-photos/cdn-scripts.jpg" alt="The CDN scripts needed to create ScrollMagic and GreenSock animations">
                    <figcaption class = "blog-body__captions">
                        The CDN Script tags I needed to begin creating my animations
                    </figcaption>   
                </figure>
            </div>

            <!--Creating svg images section-->
            <div class="blog-body blog-container">
                <h3 class="blog-body__titles">Using GreenSock</h3>
                <p>GreenSock is powerful and there are many things you can do with this tool, which can be overwhelming at first. I found reading the <a href="https://greensock.com/docs/" class = "blog__links" title = "GreenSock website displaying their starting documentation">GreenSock documentation </a> and the <a href="https://ihatetomatoes.net/wp-content/uploads/2016/07/GreenSock-Cheatsheet-4.pdf" class = "blog__links" title = "GreenSock cheat sheet">GreenSock cheat sheet</a> to be extremely useful in helping me understand the basics. GreekSock comes with four core features – which are TweenLite, TweenMax, TimelineLite and TimelineMax. They can be confusing at first but there is no major difference between TweenMax and TweenLite, it’s just that TweenLite is slightly faster but TweenMax has a few more properties.</p>
            </div>

                <!--Organised HTML and SCSS section-->
            <div class="blog-body blog-container">
                <h3 class="blog-body__titles">First Tween</h3>
                <p>A Tween is basically what does all the animations and my first Tween was using <code class = "code-example">.fromTo({})</code> – which means starting at beginning specified values, then going to another value. An example can be going from <code class = "code-example">opacity: 0</code> to <code class = "code-example">opacity: 1</code>.</p>

                <p>The first animation I created using GreenSock was the flashing stars effect on the banner section. I aimed to create the effect of one star flashing brighter than the other – just like we would see in our sky. After grabbing the stars – by their odd or even position in the HTML – I initiated my first timeline. TimelineMax lets you add default options to the timeline object - with my default options being to repeat the animation indefinitely and ensuring the animation goes back and forth smoothly – this is what <code class = "code-example">yoyo: true</code> does.</p>
            </div>
            

            <div class="blog-container--large">
                <figure class = "blog-body__figures blog-body__examples--item large-image">
                    <img src="assets/img/blog-photos/stars-odd-even.jpg" alt="The code used to create the about aniamtion slide in">
                    <figcaption class = "blog-body__captions">
                        Selecting all odd and even stars in the SVG image and telling every odd star to have a brigher opacity than all the even stars. The 0 at the end is absolutely positioning when to start the animation - with 0 making the animation start at the very beginning of the timeline. I made all the stars animate at the same time.
                    </figcaption>   
                </figure>
            </div>

            <div class="blog-body blog-container">
                <h3 class="blog-body__titles">First Scroll Magic Scene</h3>
            </div>

            <div class="blog-container--large">
                <figure class = "blog-body__figures blog-body__examples--item large-image">
                    <img src="assets/img/blog-photos/about-animation.jpg" alt="The code used to create the about aniamtion slide in">
                    <figcaption class = "blog-body__captions">
                        My first GreenSock timeline for the website, which was for the about slide in. With three lines of code I told each section to go from <code class = "code-example">opacity: 0</code> and go to <code class = "code-example">opacity: 1</code>. The <code class = "code-example">xPercent</code> pushes the whole section off screen and then slides it back in when asked to. The ScrollMagic syntax is setting the GreenSock timeline to start when the trigger elememt comes into the viewport.
                    </figcaption>   
                </figure>
            </div>

            <!--Introducing the text sequences-->
            <div class="blog-body blog-container">
                <h3 class="blog-body__titles">Planet functions</h3>
                <p>I separated each planet section into their own individual function in order to trigger different animations to the planet images upon scrolling into view. Although their are eight separate planet functions, each planet follows a similar timeline pattern. The goal of the website was to ensure the user can learn about the planets in a simple yet fun manner - so I did not want to over animate each section.</p>
            </div>

            <div class="blog-container--large">
                <figure class = "blog-body__figures blog-body__examples--item large-image">
                    <img src="assets/img/blog-photos/timeline.jpg" alt="The code illustrating a GreenSock timeline">
                    <figcaption class = "blog-body__captions">
                        Each planet had a similar GreenSock timeline, with tweaks to the direction in which each planet slides into view. Similar to the about section, you simply place in order from top to bottom what you want to animate in that order. The syntax becomes repetitive, this is why GreenSock can be easy to pick up at first when creating simple animations.
                    </figcaption>   
                </figure>
            </div>

            <div class="blog-body blog-container">
                <p>The key to a smooth timeline is adjusting the timing of each Tween. After some Tweens you can see <code class = "code-example">'-=0.5'</code>, this is me telling that Tween to start minus 200ms before it was due to start in order for it to smoothly transition after the previous animation.</p>
            </div>

            <!--Introducing the car sequences-->
            <div class="blog-body blog-container">
                <h3 class="blog-body__titles">Evaluation</h3>
                <p>Although I managed to successfully create the animations I wanted to, their are many areas in which this project can be improved.</p>

                <p>Due to me having little knowledge in JavaScript, the code for selecting each section I wanted to animate could have been reduced drastically. There is a term web developers are familiar with, and it’s the dry principle – which basically means don’t repeat your code (The Valuable Dev, 2019). I repeated each variable inside the planet functions but adjusted the planet name and with the project deadline approaching as well as well as my lack of experience with JavaScript, I could not come up with a cleaner solution to only declare my variables once but adjust the planet name inside the functions.</p>
            </div>

            <!--Examples of creating the car animations-->
            <div class="blog-container--large">
                <ul class="blog-body__examples">
                    <li class="blog-body__examples--item">
                        <figure class="blog-body__figures">
                            <img src="assets/img/blog-photos/mercury-code.jpg" alt="Code illustrating declaration of variables with JavaScript">
                            <figcaption class = "blog-body__captions">
                                Declaring variables/constants inside the Mercury function. This was repeated inside every planet function but just changed the planet name inside the query selector to the planet name of the function.
                            </figcaption>
                        </figure>
                    </li>
        
                    <li class="blog-body__examples--item">
                        <figure class="blog-body__figures">
                            <img src="assets/img/blog-photos/venus-code.jpg" alt="Code illustrating declaration of variables with JavaScript">
                            <figcaption class = "blog-body__captions">
                                Declaring variables/constants inside the Venus function. The same variable/constant declaration code as the Mercury function but just changing the mercury class to a venus class.
                            </figcaption>
                        </figure>
                    </li>
                </ul>  
            </div>

            <!--Introducing the car sequences-->
            <div class="blog-body blog-container">
                <p>There was also an unfixable Scroll Magic bug that only occurs on Safari which caused problems. When a user came towards the end of each section in the Scroll Magic scene, there would be a noticeable jump which caused usability issues. This was a problem to do with the position of the pinned Scroll Magic scene changing to fixed so I could not fix this issue – although it did work in all other browsers perfectly.</p>

                <!-- <p>This experience will help me think about writing cleaner and more maintainable JavaScript code for future projects.</a></p> -->
            </div>

            <div class="blog-container--large">
                <figure class = "blog-body__figures blog-body__examples--item large-image">
                    <img src="assets/img/blog-photos/safari-bug.jpg" alt="Code to fix a Scroll Magic bug on Safari">
                    <figcaption class = "blog-body__captions">
                        This was the code used to fix the Safari ScrollMagic bug. I used an if statement to target all browsers except Safari and set a pin to each section. On Safari the content would slide in but there would not be a pin set to each section due to the unfixable bug - unfixable to my current knowledge.
                    </figcaption>   
                </figure>
            </div>

            <div class="blog-body blog-container">
                <p>There was also a huge accessibility issue with the user not being able to use the tab key to navigate through the website due to the content being hidden with ScrollMagic. To fix this I added a skip to content skip link as as well as an extra navigation link that takes the user to a page with all the animations stripped away so they can navigate through the content with the tab key.</p>

                <p>I have learned a great deal from this project as a developer and the problems that can arise using third party code. Also, in future projects, I will be sure to write cleaner and more maintainable JavaScript.</p>
            </div>

            <div class="blog-body blog-container">
                <h3 class="blog-body__titles">Want to learn more on GreenSock?</h3>
                    <ul class="blog-body__resources">
                        <li><a href="https://greensock.com/learning/" title = "GreenSock Learning Center">GreenSock Learning Center</a></li>
                        <li><a href="https://courses.snorkl.tv/bundles/creative-coding-club" title = "Snorkl Tv website to learn GreenSock">Carl Schooff Snorkl Tv (this is a paid course but great resource for learning)</a></li>
                        <li><a href="https://ihatetomatoes.net/wp-content/uploads/2016/07/GreenSock-Cheatsheet-4.pdf" title = "GreenSock Cheat Sheet">GreenSock Cheat Sheet</a></li>
                    </ul>
            </div>
        </section>
                    
        
    </main>

    <aside class="blog-body blog-container">
            <ul class="blog-body__references">
                    <li class="blog-body__references--item">
                        Diaz, V. (2018) <i>Importance of Web Animations</i>. 13th December. Power Digital Marketing. [Online] [Accessed on the 26th March 2020]<a href = "https://powerdigitalmarketing.com/blog/importance-of-web-animations/">https://powerdigitalmarketing.com/blog/importance-of-web-animations/</a>
                    </li>
                    <li class="blog-body__references--item">
                        GreenSock. (2014) <i>What’s so special about GSAP</i>. 17th January. [Online] [Accessed on the 26th March 2020] <a href = " https://greensock.com/why-gsap/">https://greensock.com/why-gsap/</a>
                    </li>
                    <li class="blog-body__references--item">
                        Soueidan, S. (2017) <i>Supercharge SVG animations with GSAP</i>. 15th June. Creative Bloq. [Online] [Accessed on the 26th March 2020] <a href = "https://www.creativebloq.com/web-design/supercharge-svg-animations-gsap-11618683">https://www.creativebloq.com/web-design/supercharge-svg-animations-gsap-11618683</a>
                    </li>
                    <li class="blog-body__references--item">
                        The Valuable Dev. (2019) <i>The DRY Principle: Benefits and Costs with Examples</i>. 10th Nov. [Online] [Accessed on the 26th March 2020]  <a href = "https://thevaluable.dev/dry-principle-cost-benefit-example/">https://thevaluable.dev/dry-principle-cost-benefit-example/</a>
                    </li>
                </ul>
        </aside>

<?php
    include "footer.php"
?>