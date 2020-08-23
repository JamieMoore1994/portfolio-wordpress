<?php
    $page = "home";
    $mainClass = "master__header";
    $pageClass = "";
    $title = "Website Design & Development - Jamie Moore";
    $description = "Jamie Moore is a front end developer based in Manchester that specialises in building accessibile, usable and responsive websites.";
    $canonical = "https://www.jamiegmoore.co.uk/index.php";
    include "header.php";
?>

    <section class = "master__title">
        <h1 class="master__heading">Hi, I'm Jamie Moore</h1>
        <p class="master__job">I make responsive, accessible, useable websites.</p>
        <a href="/portfolio" class="btn" title = "Portfolio">View My Work</a>
    </section>
</header>

    <main id = "content">
    <article class="about">
        <h2 class="about__me">A little about me</h2>
        <div class = about__container>
        <figure class="about__photo-jamie">
            <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/jamie-moore-optimised.JPG" alt="Photograph of Jamie Moore" class="about__img-jamie">
        </figure>
            <p class="about__description"><span class = "about__bold-text">I am a front-end developer that is</span> currently a third-year student studying Web Development at The Manchester Metropolitan University based in Manchester. This course has equipped me with the knowledge and skills to build high quality websites that are responsive, accessible and usable to all users.</p>

            <p class="about__description"><span class = "about__bold-text">My passion lays around building highly</span> accessible and usable sites that also look great aesthetically. Every decision made within for the design of a website is to focus on a simple and easy user experience for the user.</p>

            <p class="about__description"><span class = "about__bold-text">I am a goal driven individual that is</span> always willing to learn and develop new skills in order to be able to provide the best and most professional services to you. Other than that, you will usually find me consuming my body weight in coffee!</p>
            </div>
            
            <div class="about__cv-btn">
                <a href="/cv.php" class="btn" title = "See my CV">View My CV</a>
            </div>
    </article>

    <!--Services grid section-->
    <section class="services">
        <h3 class="services__title">What i Do</h3>
        <div class = "services__content">
            <ul class = "services__items">
                <li class="services__item">
                    <svg aria-labelledby="html"
                    class = "services__icon">
                    <title id = "html">Follow Jamie Moore on Linked In</title>
                        <desc>The LinkedIn logo</desc>
                        <use xlink:href="assets/img/sprite.svg#icon-html-five"></use>
                    </svg>
                    <h4 class="services__item-title">HTML</h4>
                    <p class="services__description">The beginning of every website I develop begins with marking up the site in clean and semantic HTML. Utilising the semantics of HTML5 enables you not only to give meaning and structure to a webpage, but you are enhancing its search engine optimisation as-well as ensuring the website is usable and accessible to all users. The importance of semantic HTML is paramount in every website I build.</p>
                </li>
                <li class="services__item">
                    <svg aria-labelledby="html"
                    class = "services__icon">
                    <title id = "html">Follow Jamie Moore on Linked In</title>
                        <desc>The LinkedIn logo</desc>
                        <use xlink:href="assets/img/sprite.svg#icon-css3"></use>
                    </svg>
                    <h4 class="services__item-title">CSS</h4>
                    <p class="services__description">The next phase after marking up a website is to make all that boring and bold text on the website look beautiful. I begin each project with a mobile first approach by styling the website to look good on mobile devices then use media queries to adapt the content to the screen based on its' size.</p>
                </li>
                <li class="services__item">
                    <svg aria-labelledby="html"
                    class = "services__icon">
                    <title id = "html">Follow Jamie Moore on Linked In</title>
                        <desc>The LinkedIn logo</desc>
                        <use xlink:href="assets/img/sprite.svg#icon-javascript"></use>
                    </svg>
                    <h4 class="services__item-title">JavaScript</h4>
                    <p class="services__description">Whenever it is needed, I utuilise the power of JavaScript to implement behaviour and interactivity to a website. My current knowledge of JavaScript is good - but not great- and I am currently working hard to improve my JavaScript skills.</p>
                </li>
                <li class="services__item">
                    <svg aria-labelledby="html"
                    class = "services__icon">
                    <title id = "html">Follow Jamie Moore on Linked In</title>
                        <desc>The LinkedIn logo</desc>
                        <use xlink:href="assets/img/sprite.svg#icon-user"></use>
                    </svg>
                    <h4 class="services__item-title">User Experience Design</h4>
                    <p class="services__description">A strong passion of mine is user experience, after all, it is pointless having a website if your user is not going to enjoy using it. I have good knowledge of the user experience design process so any project I am involved in, I will ensure that the website is focused on the users needs and goals. This not only results in a better experience for your user, but you potentially have a loyal user/customer if they enjoy using your website.</p>
                </li>
            </ul>
        </div>
    </section>

    <section class="contact">

        <div class="contact__heading">
            <h2 class="contact__title">Want to get in touch?</h2>
            <svg aria-labelledby="mail"
            class = "contact__icon">
            <title id = "mail">Follow Jamie Moore on Linked In</title>
                <desc>The LinkedIn logo</desc>
                    <use xlink:href="assets/img/sprite.svg#icon-mail"></use>
            </svg>
         </div>

        <div class = "contact__form-container">
        <form action="https://formspree.io/mwkrlrpp" method="POST" class = "contact__form">

            <div class="contact__label-container">
            <label for = "full-name" class = "contact__label">Name</label>
            <input type= "text" id = "full-name" name = "name" class = "contact__input" placeholder= "Your Full Name" required>
            </div>

            <div class="contact__label-container">
            <label for = "subject" class = "contact__label">Subject</label>
            <input type = "text" id = "subject" class = "contact__input" placeholder = "Reason for contacting" required>
            </div>

            <div class="contact__label-container">
            <label for = "email" class = "contact__label">Your Email</label>
            <input type="email" id = "email" name = "_replyto" class="contact__input" placeholder="Your Email" required>
            </div>

            <div class="contact__label-container">
            <label for = "message" class = "contact__label">Your Message</label>
            <textarea id = "message" name = "message" cols="30" rows="10" class="contact__input" placeholder= "Your Message" required></textarea>

            <button class="btn contact__submit" type= "submit" value = "Send">Submit</button>
            </div>
            
        </form>
        </div>
    </section>

<?php
    get_footer();
?>
