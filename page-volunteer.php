<?php get_header(); ?>

<main>
<h1><?php the_title(); ?></h1>

<section class="involved-nav-container">
    <div>
        <div class="involved-nav">
            <h2 class="involved-nav-sub">JUMP TO SECTION</h2>
            <nav class="get-involved-navigation" aria-label="Get Involved navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'involved-nav',
                'container' => false,
                'menu_class' => 'get-involved-nav',
                'fallback_cb' => false
            ));
            ?>
            </nav>
        </div>
    </div>
</section>

<section class="volunteer-container">
    <div class="volunteer-intro">
        <div>
            <h2>Volunteer</h2>
            <p class="volunteer-special">We are always recruiting volunteers for many of our programs in Edmonton and Calgary.</p>
            <p>Learn about areas you may be interested in by visiting the Programs section of our website, then complete our online volunteer application.</p>
        </div>
        <div class="volunteer-intro-image">
            /* image goes here */
        </div>
    </div>

    <div class="volunteer">
        <div>
            <p>We are looking for outgoing volunteers who are passionate about helping to support Autistic children, youth, and young adults. If you share our values and our enthusiasm to empower Autistic individuals and their families to thrive, you will find a great opportunity at CFASA. We welcome the unique contributions volunteers can bring in terms of neurodiversity, education, opinions, culture, ethnicity, race, sex, gender identity and expression, languages spoken, religion, different abilities, sexual orientation, and beliefs.</p>
            <p>Current university students pursuing careers in Occupational Therapy, Speech-Language Pathology, Behaviour Analysis, Psychology, and Education are highly encouraged to apply – we know that you will gain as much, if not more, from your experience helping individuals with autism as they will gain from your support!</p>
        </div>
        <div>
            <h3>important Details</h3>
            <ul>
                <li>
                    Volunteers must be <span>18+ years old</span>
                </li>
                <li>
                   Volunteer Applications are <span>accepted year round</span> for our Edmonton <span>AND</span> Calgary locations!
                </li>
                <li>
                    Onboarding for new volunteers takes place four times a year, <span>4-6 weeks before the start of our community programs</span>. 
                </li>
            </ul>
        </div>

        <div class="volunteer-quote">
            <div>
                /* Image Goes Here */
            </div>

            <div class="quote">
                <p>“I love knowing that there is no amount of time, energy, or effort wasted when volunteering because even the littlest things you do can have such a positive impact on the community.”</p>
                <p class="quote-special">- MaryamCFASA Volunteer</p>
            </div>

        </div>
    </div>

    <section class="volunteer-cta">
        <h2>Interested In Volunteering?</h2>
        <p>Complete our volunteer application online and upload your resumé!</p>
        <div>
            <div>
                /* icon goes here */
            </div>
            <div>
                <p>For inquiries or more information, please contact Lindsay Rothman.</p>
                <div>
                    <p>Email: lrothman@centreforautismab.ca</p>
                    <p>Phone: (780) 488-6600 ext. 226</p>
                </div>
            </div>
            <button href="#">Apply to Volunteer</button>
        </div>
    </section>

    <section class="uni-org">
        <h2>University Organization</h2>
        <div class="uni-cards">
            <div class="uni-card">
                <h3>University of Alberta</h3>
                <p>The CFASA Students’ Association is an officially recognized club that raises autism awareness and promotes acceptance on campus and supports the Centre with fundraising and volunteering.</p>
                <div>
                    <div>
                        /* icon goes here */
                    </div>
                    <div>
                        <div>
                            <p>For inquiries or more information:</p>
                            <p>Email: cfasa@ualberta.ca</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uni-card">
                <h3>University of Calgary</h3>
                <p>Autism Awareness Club (AAC) – MacEwan University is an officially recognized club that supports autism awareness on MacEwan University’s campus.</p>
                <div>
                    <div>
                        /* icon goes here */
                    </div>
                    <div>
                        <div>
                            <p>For inquiries or more information:</p>
                            <p>Email: osmans6@mymacewan.ca</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </section>

    <section class="translators">
        <h2>VOLUNTEER TRANSLATORS</h2>
        <h3>Interested in volunteering as a translator?</h3>
        <p>The Translating Volunteer will assist Centre staff with parent coaching and team meetings under the guidance of Centre staff and act as a bridge between staff and families.</p>
        <button href="#">View The Role Description</button>
    </section>

    <section class="volunteer-stories">
        <h2>FEATURED VOLUNTEER STORIES</h2>
        <div>
            <p>We are so proud to have such a wonderful group of volunteers! These individuals generously give their time to help participants build skills in sport and recreation, ignite creativity through art, foster independence through cooking and socializing, bridge gaps by interpreting languages for families, and so much more.</p>
            <p>Our volunteers selflessly devote their time, generously share their talents, and leverage their strengths to create an environment at CFASA where participation, learning, and personal growth thrive.</p>
            <p>Thank you to all of our amazing volunteers!</p>
            <div class="volunteer-stories-cards">
                /* Acfs can go here */
            </div>
        </div>
    </section>

    <section class="application-form">
        <h2>VOLUNTEER APPLICATION</h2>
        <div>
            /* Form Goes here unsure if we make or they have one they use already */
        </div>
    </section>
</section>

<?php get_footer(); ?>

