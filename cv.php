<?php
    $page = "cv";
    $title = "CV - Website Design & Development - Jamie Moore";
    $mainClass = "cv__header";
    $description = "My CV page displaying my professional profile, my employable skills and my contact details to get in touch..";
    $canonical = "https://www.jamiegmoore.co.uk/cv.php";
    include "header.php";
?>

        <div class="cv__container">
            <h1 class="cv__job">Front End Developer</h1>
            <p class="cv__title">Have a look at my CV</p>
        </div>
        
    </header>

    <main id="content">
        <!--Personal and key skills-->
        <section class="profile">
                <div class="profile__personal">
                <h2 class="profile__headings">Personal Profile</h2>
                <p>A dedicated, goal driven, and career driven student with a passion for HTML, CSS, JavaScript and User Experience Design. Currently a student at The Manchester Metropolitan University studying web development that has equipped me with the knowledge and skills to pursue a career in front-end web development. An ambitious individual that constantly learning to improve my technical skills and knowledge to produce the highest quality work. A team player with effective communication skills and the ability to work efficiently within a team, also have knowledge of project management methodologies. Keen to find a front-end web developer role and grow as a person and developer.</p>
                </div>

                <div class="profile__key-skills">
                <h3 class="profile__headings">Key Skills</h3>
                <ul class="profile__skills">
                    <li class="profile__skills-item">HTML</li>
                    <li class="profile__skills-item">CSS</li>
                    <li class="profile__skills-item">Sass</li>
                    <li class="profile__skills-item">Basic JavaScript</li>
                    <li class="profile__skills-item">User Experience Design</li>
                    <li class="profile__skills-item">Responsive Web Design</li>
                    <li class="profile__skills-item">Basic knowledge of PhotoShop and Illustrator</li>
                </ul>
                </div>
        </section>

        <!--Experience and Other skills-->
        <section class="profile">
            <div class="profile__work">
                <h3 class="profile__headings">Experience</h3>
                    <h4 class="profile__experience">Customer Service Manager <span class="profile__date">(Ladbrokes from March 2013 - Present)</span></h4>
                    <p class="profile__experience-role">The Role Involved:</p>
                    <ul class="profile__skills experience">
                        <li class="profile__skills-item">Effective communication with colleagues and   customers</li>
                        <li class="profile__skills-item">Working efficiently and effectively within small teams</li>
                        <li class="profile__skills-item">Working under pressure and to targets</li>
                    </ul>
            </div>
            
            <div class="profile__work">
                    <h4 class="profile__experience">Apprentice Accounts Executive <span class="profile__date">(Gooey Creative from January 2013 - March 2013)</span></h4>
                    <p class="profile__experience-role">The Role Involved:</p>
                    <ul class="profile__skills experience">
                            <li class="profile__skills-item">Liaising between client phone calls and colleagues</li>
                            <li class="profile__skills-item">Efficient communication with management and web developers</li>
                            <li class="profile__skills-item">Create and audit colleague project timesheets</li>
                            <li class="profile__skills-item">Take part and engage in client briefings</li>
                        </ul>   
            </div>
            <div class="profile__other-skills">
                <h3 class="profile__headings">Other Skills</h3>
                <ul class="profile__skills">
                    <li class="profile__skills-item">Effective communication</li>
                    <li class="profile__skills-item">Knowledge of project management methodologies</li>
                    <li class="profile__skills-item">Team player</li>
                </ul>
            </div>
            <div class="profile__contact-container">
                <h2 class="profile__headings">Contact Details:</h2>

                <div class="profile__details">
                    <h4 class="profile__contact-header">Address:</h4>
                    <p>Manchester, United Kingdom</p>

                    <h3 class="profile__contact-header">Email:</h3>
                    <a href="mailto:17076460@stu.mmu.ac.uk" title = "Email Me" class="profile__email">17076460@stu.mmu.ac.uk</a>
                </div>
            </div>
        </section>
    </main>

<?php
    include "footer.php";
?>