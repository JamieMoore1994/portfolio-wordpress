<?php
    $page = "svg-blog";
    $mainClass = "portfolio__header";
    $pageClass = "";
    $title = "SVG Animations - Website Design & Development - Jamie Moore";
    $description = "Follow me to understand the process I went through to learn about SVG images and how I created an SVG animated sequence.";
    $canonical = "https://www.jamiegmoore.co.uk/svg-blog.php";
    include "header.php";
?>
        <h1 class = "portfolio__header-title">Animating with SVG</h1>
    </header>

    <main id = "content">
        <section class = "blog-content blog-container">

            <!--Author details-->
            <div class = "blog__author">
                <img src="assets/img/jamie-moore-optimised.JPG" class = "blog__author--img" alt="An image of Jamie Moore">
                <span class = "blog__author-name">By Jamie Moore</span>
                <span class = "blog__author-date">Posted on: 30/03/20</span>
            </div>

            <div class="blog-content__intro">
                <h2 class="blog-content__title">I made an SVG animated sequence, but how did I do this ?</h2>
                <p>Creating SVG graphics and blending them into an animated sequence was a fun and challenging process, find out in this blog the process into creating this sequence.</p>
            </div>
        </section>

        <section class="main-body">
            <div class="blog-body blog-container">
                <h3 class="blog-body__titles">Aim</h3>
                
                <p>To an create an animated opening sequence to a car ecommerce website using custom made SVG images.</p>
            </div>

            <div class="blog-body blog-container">
                <h3 class="blog-body__titles">Objectives</h3>
                
                <ul class="blog-body__list">
                    <li class="blog-body__list--item">Research and learn how to use Adobe Illustrator.</li>
                    <li class="blog-body__list--item">Understand what SVG Images are and research the benefits of using them.</li>
                    <li class="blog-body__list--item">Create SVG images needed for the website using Adobe Illustrator.</li>
                    <li class="blog-body__list--item">Create custom SVG animations using CSS Keyframes.</li>
                </ul>
            </div>

            <div class="blog-body blog-container">
                <h3 class="blog-body__titles">Definition</h3>
                <p>Currently on the web, the two popular of image formats you will come across are raster images and vector graphics. Raster images – usually in the file format JPG, PNG, JPEG and GIF – is basically a grid where each individual square of the image is a pixel that contains colour information (Figma, no date). Vector graphics are drawn up with mathematical calculations from one point to another that usually form lines and shapes (Gomez Graphics, no date).</p>

                <p>SVG (Scalable Vector Graphics) is a vector graphic format which is based on XML and is used to display graphics. The main benefit of using SVG images is that they are not tied to any pixel dimension – meaning the image is scalable and will look visually crisp at any size you choose (Coyier, 2016).</p>

                <p>Currently there are three main ways to add SVG images to the web, being directly in an image tag, using it as a CSS background and by adding the SVG code directly in the HTML – which can then be manipulated with CSS and JavaScript.</p>

                <p>The reason I wanted to gain a deeper knowledge into using SVG images and SVG animations is that when used in the right context, animation can enhance the user experience on website (Babich, 2017).</p>

                <p>Prior to starting this project, I have only ever used an SVG for my portfolio background image but never worked with SVG files when directly in the HTML. I do have a basic understanding of CSS and CSS keyframes which proved helpful when it came to be animating the SVG images – because other than JavaScript, the main way to animate SVG images is by using CSS keyframes.</p>
            </div>

            <div class="blog-body blog-container">
                <h3 class="blog-body__titles">Set Up</h3>
                <p>I used Adobe Illustrator to create and export the SVG images then HTML and CSS to mark-up, style and animate the SVG images.</p>
            </div>

            <div class="blog-body blog-container">
                <h3 class="blog-body__titles">Location</h3>
                <p>Want to view this project ? <a href="http://17076460.webdevmmu.uk/animation-site/index.html" class = "blog__links" title = "SVG animated website">Look at my animated sequence for a website</a>.</p>

                <p>Have a look at the code for this project on <a href="https://github.com/JamieMoore1994/animation-site" class = "blog__links" title = "Link to view project on Github">Github</a>.</p>
            </div>

            <div class="blog-body blog-container">
                <h3 class="blog-body__titles">How</h3>
                <p>To kick start this project, I made some draft sketches of the animation sequence that I wanted to make. After the sketches I then began to analyse how I could realistically animate the sequence that I could technically be able to produce whilst thinking about the users’ experience.</p>
            </div>

            <div class="blog-container--large">
                <figure class = "blog-body__figures blog-body__examples--item large-image">
                    <img src = "assets/img/blog-photos/sketch-animation.JPG" alt = "A sketch displaying the planning behind an SVG animated sequence">
                    <figcaption class="blog-body__captions">Sketch displaying basic concepts for an animated SVG sequence</figcaption>
                </figure>
            </div>

            <div class="blog-body blog-container">
                <h3 class="blog-body__titles">Learning about SVG images and Adobe Illustrator</h3>
                <p>The Illustrator interface can be overwhelming for beginners, so to gain more exposure to using illustrator, I completed a five-hour LinkedIn Learning course on <a href="https://www.linkedin.com/learning/illustrator-2020-essential-training/clipping-masks?u=36102708" class="blog__links" title = "LinkedIn Learning Adobe Illustrator course">Illustrator essential training</a>. Additionally, I gained more of an insight into how to correctly create and export SVG images from illustrator by completing an <a href="https://www.linkedin.com/learning/svg-graphics-for-the-web-with-illustrator/next-steps?u=36102708" class="blog__links" title = "LinkedIn Learning SVG Graphics for the web course">SVG graphics for the web course.</a></p>
            </div>

            <div class="blog-container--large">
            <ul class="blog-body__examples">
                <li class="blog-body__examples--item">
                    <figure class="blog-body__figures">
                        <img src="assets/img/blog-photos/certificate-illustrator.jpg" alt="LinkedIn Learning certificate for completing the Adobe Illustrator essential training 2020 course">
                        <figcaption class = "blog-body__captions">
                            My certificate for completing the Adobe Illustrator essential training course
                        </figcaption>
                    </figure>
                </li>

                <li class="blog-body__examples--item">
                    <figure class="blog-body__figures">
                        <img src="assets/img/blog-photos/certificate-svg.jpg" alt="LinkedIn Learning certificate for completing the SVG Graphics for the Web with Illustrator course">
                        <figcaption class = "blog-body__captions">
                            My certificate for completing the SVG Graphics for the Web with Illustrator course
                        </figcaption>
                    </figure>
                </li>
            </ul>
            </div>

            <div class="blog-body blog-container">
                <h3 class="blog-body__titles">Naming groups and layers with Illustrator</h3>
                <p>When creating SVG images in Illustrator for the web it is crucial to group and name relevant content together that you know will be animated. This is makes it easier to find the content you want to animate in the SVG code, because if you don’t do this, Illustrator generates ID names automatically for grouped content and layers which leads to confusion when trying to find the elements you want to animate.</p>
            </div>

            <div class="blog-container--large">
                <figure class = "blog-body__figures blog-body__examples--item large-image">
                    <img src="assets/img/blog-photos/illustrator-grouping.jpg" alt="Adobe Illustrator drawing of a car that displays the layer and group names of the content">
                    <figcaption class = "blog-body__captions">
                        Highlighting the naming of the groups that will be animated for the nice car SVG
                    </figcaption>   
                </figure>
            </div>

            <!--Creating svg images section-->
            <div class="blog-body blog-container">
                <h3 class="blog-body__titles">Creating the SVG images in Illustrator</h3>
                <p>Creating the cars was simply a matter of drawing rectangles and circles then combining the paths together to form the car body and tires. I started by drawing the shapes I needed to build the car and then used pathfinder to combine the shapes together. The animated text was a matter of writing the text in Illustrator, taking away the fill colour as this cannot be animated, and increasing the stroke width.</p>
            </div>

            <!--Creating a car together on Illustrator-->
            <div class="blog-container--large">
                <h3 class="blog-body__titles">Lets create a basic car together with Illustrator !</h3>

                <ul class="blog-body__examples">
                    <li class="blog-body__examples--item">
                        <figure class="blog-body__figures">
                            <img src="assets/img/blog-photos/car-tutorial.jpg" alt="Shapes placed together on Adobe Illustrator to represent a car">
                            <figcaption class = "blog-body__captions">
                                Step One - Draw rectangles and eclipses together like this (hold shift when drawing the eclipse draws a perfect circle)
                            </figcaption>
                        </figure>
                    </li>
    
                    <li class="blog-body__examples--item">
                        <figure class="blog-body__figures">
                            <img src="assets/img/blog-photos/car-tutorial-one.jpg" alt="Highlighting a car that has been created on Adobe Illustrator">
                            <figcaption class = "blog-body__captions">
                                Step Two - Highlight everything on the artboard and hold the shift key and press M (this allows you to manually combine paths together). Then simply drag paths that you would like to combine together.
                            </figcaption>
                        </figure>
                    </li>
                </ul>

                <ul class="blog-body__examples">
                    <li class="blog-body__examples--item">
                        <figure class="blog-body__figures">
                            <img src="assets/img/blog-photos/car-tutorial-two.jpg" alt="A car that has been created with on Illustator">
                            <figcaption class = "blog-body__captions">
                                Step Three - Highlight the outside rectangle of the car light then hold the option key (alt on windows) and tap the highlighted area.
                            </figcaption>
                        </figure>
                    </li>
    
                    <li class="blog-body__examples--item">
                        <figure class="blog-body__figures">
                            <img src="assets/img/blog-photos/car-tutorial-three.jpg" alt="A basic drawing of a car created with Adobe Illustrator">
                            <figcaption class = "blog-body__captions">
                                Step Four - You now have a high quality car, go ahead and customise it to make it yours! 
                            </figcaption>
                        </figure>
                    </li>
                </ul>
                </div>

                <!--Organised HTML and SCSS section-->
                <div class="blog-body blog-container">
                    <h3 class="blog-body__titles">Organisation</h3>
                    <p>In the future I will make use of PHP includes to insert the SVG images so that the HTML file is cleaner and easier to read - instead I had to comment each section and each SVG file so I could easily find the content I needed. Using SCSS for this project really helped me stay organised when creating and maintaining the code as I could break separate components up into various files which allows for easier maintenance.</p>
                </div>

                <!--Creating a car together on Illustrator-->
                <div class="blog-container--large">

                <h3 class="blog-body__titles">The code for organising inline SVG code and the SCSS files</h3>

                <ul class="blog-body__examples">
                    <li class="blog-body__examples--item">
                        <figure class="blog-body__figures">
                            <img src="assets/img/blog-photos/svg-html.jpg" alt="HTML mark-up showing the SVG code is structured">
                            <figcaption class = "blog-body__captions">
                                How each section of the SVG sequence was structured
                            </figcaption>
                        </figure>
                    </li>
    
                    <li class="blog-body__examples--item">
                        <figure class="blog-body__figures">
                            <img src="assets/img/blog-photos/sass-files.jpg" alt="Highlighting a car that has been created on Adobe Illustrator">
                            <figcaption class = "blog-body__captions">
                                Editing the SVG animations only in the SVG SCSS file to stay organised
                            </figcaption>
                        </figure>
                    </li>
                </ul>

                </div>

                <!--Introducing the text sequences-->
                <div class="blog-body blog-container">
                    <h3 class="blog-body__titles">Animated text sequences</h3>
                    <p>To get the text effect, all I needed was two CSS properties, being <code class = "code-example">stoke-dasharray</code> and <code class = "code-example">stroke-dashoffset</code>. I created the text sequences in Illustrator, and when creating the text, I did not give them a fill colour, but I gave the text a larger stroke width. This allowed me to manipulate the text using with <code class = "code-example">stroke-dasharray</code>, which is presentation attribute that can be used to define the pattern and gaps that paint the outline of a shape (Mozilla, no date). The <code class = "code-example">stroke-dasharray</code> value I gave to the texts SVG path made it look as though the text never changed pattern – but this can be manipulated.</p>

                    <p>In conjunction with <code class = "code-example">stroke-dasharray</code>, you can use <code class = "code-example">stroke-dashoffset</code> to define where along an SVG path in which the dash of a stroke will begin (Graham, 2016). I gave the <code class = "code-example">stroke-dashoffset</code> the same value as the <code class = "code-example">stroke-dasharray</code> to push the SVG path to the beginning of each letter to create the effect of letters being drawn in.
                    </p>
                </div>

                <!--Example of animating SVG text-->
                <div class="blog-container--large">

                <h3 class="blog-body__titles">How I created the SVG text animation effect</h3>
                <ul class="blog-body__examples">
                    <li class="blog-body__examples--item">
                        <figure class="blog-body__figures">
                            <img src="assets/img/blog-photos/animated-text.jpg" alt="Showing the CSS code to animate SVG text">
                            <figcaption class = "blog-body__captions">
                                To get the drawing SVG text effect I set the stroke-dashoffset and stroke-dasharray to 500 to make sure the text seems invisible. The animation property will call the keyframe animation and create the drawing text effect for a duration of four seconds
                            </figcaption>
                        </figure>
                    </li>
    
                    <li class="blog-body__examples--item">
                        <figure class="blog-body__figures">
                            <img src="assets/img/blog-photos/animated-text-one.jpg" alt="Highlighting a car that has been created on Adobe Illustrator">
                            <figcaption class = "blog-body__captions">
                                The stroke-dashoffset goes from 500 to 0 - which creates the drawing text effect
                            </figcaption>
                        </figure>
                    </li>
                </ul>

                </div>

                <!--Introducing the car sequences-->
                <div class="blog-body blog-container">
                    <h3 class="blog-body__titles">Animating the car sequences</h3>
                    <p>I began by absolutely positioning each element of the car sequences such as the engine smoke, exhaust smoke and the tires. I then had to set each element in the sequence to <code class = "code-example">opacity: 0</code> so that they can fade in when targeting with animations. Creating the animated car sequences required careful manipulation of animation timings and delays to ensure the sequence flows smoothly. There was a total of seventeen elements to animate and control for the whole sequence.
                    </p>
                </div>

                <!--Examples of creating the car animations-->
                <div class="blog-container--large">

                    <h3 class="blog-body__titles">Insight into creating both car animation sequences</h3>
                    <ul class="blog-body__examples">
                        <li class="blog-body__examples--item">
                            <figure class="blog-body__figures">
                                <img src="assets/img/blog-photos/broke-car-animation.jpg" alt="CSS keyframes code">
                                <figcaption class = "blog-body__captions">
                                    Slowly fading the broken car in from a low opacity and fading it back out. To rotate the tires all I did was rotate the tires 360 degrees.
                                </figcaption>
                            </figure>
                        </li>
        
                        <li class="blog-body__examples--item">
                            <figure class="blog-body__figures">
                                <img src="assets/img/blog-photos/broke-car-animation-one.jpg" alt="CSS keyframes code">
                                <figcaption class = "blog-body__captions">
                                    The code used to shake the car on both car sequences. On the broken car it simulated the car breaking down and on the new car it simulated the car engine starting.
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                    
                    <!--Nice car examples-->
                    <ul class="blog-body__examples">
                        <li class="blog-body__examples--item">
                            <figure class="blog-body__figures">
                                <img src="assets/img/blog-photos/nice-car-animation.jpg" alt="CSS keyframes code">
                                <figcaption class = "blog-body__captions">
                                    Using keyframes again to fade the car into view as well as a keyframe to turn on the car light
                                </figcaption>
                            </figure>
                        </li>
        
                        <li class="blog-body__examples--item">
                            <figure class="blog-body__figures">
                                <img src="assets/img/blog-photos/nice-car-animation-one.jpg" alt="CSS keyframes code">
                                <figcaption class = "blog-body__captions">
                                    The keyframe animation that gives the appearance of the car driving off the screen. The other keyframes is to progressively make the exhaust smoke get larger by transforming the scale.
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                    
                    </div>

                    <!--Introducing the car sequences-->
                    <div class="blog-body blog-container">
                        <h3 class="blog-body__titles">Future recommendations</h3>
                        <p>The biggest frustration with using pure CSS to create an animated sequence is timing the animations so that they flow seamlessly. Using CSS for animated sequences, you have to manually add a delay to each animation whilst taking into consideration the previous animation time so that they flow after each other. As I had seventeen elements to animate into a sequence, using pure CSS was not flexible and was difficult to maintain because changing the timing or delay to one element meant I had to change the timing and delay for every element in the sequence.</p>

                        <p>In future projects I would be sure to use CSS keyframes to animate simple and short SVG sequences, but for large sequences I will take advantage of a JavaScript library like <a href="https://greensock.com/gsap/" class="blog__links">GreenSock</a>.</p>
                    </div>

                    <!--SVG animations timing-->
                    <div class="blog-container--large">
                        <figure class = "blog-body__figures blog-body__examples--item large-image">
                            <img src="assets/img/blog-photos/svg-timeline.jpg" alt="CSS code highlighting specific animation timing control">
                            <figcaption class = "blog-body__captions">
                                An example of specific animation duration and delay timings (the delay timing is at the end of the animation property). The four sequences had to be manually controlled.
                            </figcaption>   
                        </figure>
                    </div>


            <div class="blog-body blog-container">
                <h3 class="blog-body__titles">Want to learn more on SVG and SVG animations?</h3>
                    <ul class="blog-body__resources">
                        <li><a href="https://www.linkedin.com/learning/svg-graphics-for-the-web-with-illustrator/next-steps?u=36102708" title = "Link to LinkedIn Learning course">SVG Graphics for the Web with Illustrator LinkedIn Learning course (You will need a subscription)</a></li>
                        <li><a href="https://css-tricks.com/guide-svg-animations-smil/" title = "Sarah Soueidan CSS Tricks article">Sarah Soueidan CSS Tricks article on SVG animation</a></li>
                        <li><a href="https://css-tricks.com/using-svg/" title = "Chris Coyier CSS Tricks article">Chris Coyier CSS Tricks article explaining why we should use SVG graphics</a></li>
                    </ul>
            </div>
        </section>
                    
        
    </main>

    <aside class="blog-body blog-container">
            <ul class="blog-body__references">
                    <li class="blog-body__references--item">
                        Coyier, C. and Head, V. (2016) <i>Practical SVG</i>. New York: A Book Apart.
                    </li>
                    <li class="blog-body__references--item">
                        Babich, N. (2017) <i>Functional Animation Helps Improve User Experience</i>. 11th January. Smashing Magazine. [Online] [Accessed on the 12th March 2020]  <a href = "https://www.smashingmagazine.com/2017/01/how-functional-animation-helps-improve-user-experience/">https://www.smashingmagazine.com/2017/01/how-functional-animation-helps-improve-user-experience/</a>
                    </li>
                    <li class="blog-body__references--item">
                        Figma. (No Date) <i>Bitmap</i>. [Online] [Accessed on the 12th March 2020] <a href = "https://www.figma.com/dictionary/bitmap/">https://www.figma.com/dictionary/bitmap/</a>
                    </li>
                    <li class="blog-body__references--item">
                        Graham, G. (2016) <i>stroke-dashoffset</i>. 12th Janurary. CSS-Tricks. [Online] [Accessed on the 30th March 2020] <a href = " https://css-tricks.com/almanac/properties/s/stroke-dashoffset/"> https://css-tricks.com/almanac/properties/s/stroke-dashoffset/</a>
                    </li>
                    <li class="blog-body__references--item">
                        Mozilla. (No Date) <i>stoke-dasharray</i>. [Online] [Accessed on the 30th March 2020] <a href = "https://developer.mozilla.org/en-US/docs/Web/SVG/Attribute/stroke-dasharray">https://developer.mozilla.org/en-US/docs/Web/SVG/Attribute/stroke-dasharray</a>
                    </li>
                </ul>
        </aside>

<?php
    include "footer.php";
?>
    