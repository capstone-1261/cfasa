<?php get_header(); ?>


<?php
$volunteer_stories = new WP_Query(array(
    'post_type' => 'volunteer-stories',
    'posts_per_page' => -1
));
?>

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
        <div class="volunteer-intro-text">
            <h2>Volunteer</h2>
            <p class="volunteer-special">We are always recruiting volunteers for many of our programs in Edmonton and Calgary.</p>
            <p>Learn about areas you may be interested in by visiting the Programs section of our website, then complete our online volunteer application.</p>
        </div>
        <div class="volunteer-intro-image">
            /* image goes here */
        </div>
    </div>

    <section class="volunteer-page-content-container">
        <div class="volunteer-page-content">
            <div class="volunteer">
                <div class="volunteer-paragraph">
                    <p>We are looking for outgoing volunteers who are passionate about helping to support Autistic children, youth, and young adults. If you share our values and our enthusiasm to empower Autistic individuals and their families to thrive, you will find a great opportunity at CFASA. We welcome the unique contributions volunteers can bring in terms of neurodiversity, education, opinions, culture, ethnicity, race, sex, gender identity and expression, languages spoken, religion, different abilities, sexual orientation, and beliefs.</p>
                    <p>Current university students pursuing careers in Occupational Therapy, Speech-Language Pathology, Behaviour Analysis, Psychology, and Education are highly encouraged to apply – we know that you will gain as much, if not more, from your experience helping individuals with autism as they will gain from your support!</p>
                </div>
                <div class="volunteer-info-rows">
                    <h3>important Details</h3>
                    <div class="list-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">
                        <circle cx="26" cy="26" r="26" fill="#BEEFEB"/>
                        </svg>
                        <p>
                            Volunteers must be <span>18+ years old</span>
                        </p>
                    </div>
                    <div class="list-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">
                        <circle cx="26" cy="26" r="26" fill="#BEEFEB" fill-opacity="0.6"/>
                        </svg>
                        <p>
                           Volunteer Applications are <span>accepted year round</span> for our Edmonton <span>AND</span> Calgary locations!
                        </p>
                    </div>
                    <div class="list-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">
                        <circle cx="26" cy="26" r="26" fill="#BEEFEB" fill-opacity="0.3"/>
                        </svg>
                        <p>
                            Onboarding for new volunteers takes place four times a year, <span>4-6 weeks before the start of our community programs</span>. 
                        </p>
                    </div> 
                </div>
            </div>

            <div class="volunteer-quote">
                <div class="volunteer-quote-image">
                    /* Image Goes Here */
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" width="143" height="159" viewBox="0 0 143 159" fill="none">
                <path d="M0.0227091 90.5036C0.652266 109.367 8.10786 121.037 24.4122 130.271C33.7157 135.54 44.7154 137.336 55.1439 134.794C58.0586 134.083 61.6144 133.063 64.0044 131.949C66.9889 130.562 69.6646 129.315 71.9904 127.577C75.1207 125.234 77.7789 122.331 80.4137 119.481C89.6472 109.501 92.2354 96.1755 90.918 83.0539C89.0759 64.6977 72.8415 47.0701 54.6077 44.1905C48.1372 43.1704 41.3636 43.2753 35.0156 44.9774C13.3309 50.795 -0.641824 70.591 0.0227091 90.5036ZM24.762 84.3655C26.3592 78.6062 30.3755 73.4299 36.3563 70.2296C37.563 69.5826 38.8279 69.0288 40.1686 68.7257C41.7076 68.3759 43.2931 68.2477 44.8612 68.1719C48.5744 68.0029 51.5823 68.5974 54.3803 70.0314C60.8449 73.3424 67.1638 79.0784 67.6185 87.4258C68.184 97.7435 60.8158 108.026 50.6613 110.62C49.6761 110.871 48.4811 110.906 47.3794 111.057C41.0489 111.943 33.8964 109.437 30.3114 105.59C29.9208 105.17 29.6236 104.546 29.2213 104.057C24.2373 98.0641 22.9724 90.8417 24.7678 84.3655H24.762Z" fill-rule="evenodd" clip-rule="evenodd" fill="#64C7C7"/>
                <path d="M63.2751 149.029C55.5747 137.545 57.2302 119.23 71.4594 110.008C74.8753 108.265 77.6151 107.688 81.2234 107.653C90.5734 107.56 97.0264 112.159 101.573 117.72C112.544 131.11 106.219 153.337 88.9937 157.872C77.1954 160.985 68.2883 156.514 63.2751 149.035V149.029Z" fill-rule="evenodd" clip-rule="evenodd" fill="#D92E27"/>
                <g style="mix-blend-mode:hard-light">
                    <path d="M118.166 29.3427C116.843 27.8621 115.701 26.1716 114.447 24.8542C113.789 24.1664 113.007 23.5019 112.174 22.8723C109.463 20.0043 106.269 17.3579 99.9791 16.0987C94.9484 14.8396 88.4955 13.9652 83.6339 14.8396C77.35 15.1311 71.1127 18.1506 64.9104 22.8665C58.1893 28.3168 53.2927 36.0755 51.3225 44.761C50.4539 48.5908 49.4454 52.9627 49.6786 57.1248C50.5005 71.5404 55.7294 85.3965 70.5764 90.2756C73.9807 91.3948 77.5074 92.1526 81.0574 92.6539C84.3859 93.1202 87.7493 93.3534 91.1128 93.3301C95.1408 93.3068 98.9473 92.7238 102.532 91.6221C106.793 90.3164 111.305 87.7865 114.925 85.2216C127.056 76.6294 130.973 59.4506 126.374 45.6354C124.264 39.3049 122.084 33.6972 118.166 29.3369V29.3427Z" fill-rule="evenodd" clip-rule="evenodd" fill="#F9C41D"/>
                </g>
                <g style="mix-blend-mode:hard-light">
                    <path d="M140.014 42.4702C137.583 35.1545 135.036 28.4567 130.903 22.8782C130.903 22.8782 123.879 9.82073 108.787 3.53101C93.6952 -2.75872 73.5785 1.01861 71.0661 2.2719C69.4747 3.06467 54.581 8.27016 45.8488 22.8782C42.0482 28.4276 39.2443 34.7232 37.7229 41.4151C36.6853 46.0027 35.4612 51.2548 35.4553 56.4661C35.4553 57.0491 35.4728 57.6378 35.5078 58.2207C36.5804 77.6087 43.7387 96.7402 64.1701 103.455C68.7927 104.971 73.5552 105.997 78.341 106.667C82.6604 107.274 87.0207 107.583 91.3868 107.583H91.9114C94.0333 107.571 96.1318 107.46 98.2245 107.314C101.448 107.099 104.503 106.568 107.586 105.595L107.225 104.464L107.592 105.595C107.767 105.537 107.959 105.478 108.158 105.408C110.664 104.569 113.34 103.706 115.782 102.26C117.321 101.345 119.122 100.617 120.859 99.5382C124.928 96.9967 128.484 93.2427 131.731 89.8792C136.983 84.4464 139.227 79.1593 140.644 71.3365C141.477 66.7722 142.049 61.7532 142.049 56.7809C142.049 51.8028 141.483 46.8654 140.02 42.4644L140.014 42.4702ZM138.306 70.9109C136.89 78.5297 134.949 83.0824 130.017 88.2296C126.776 91.6047 123.314 95.2188 119.606 97.5213C118.102 98.4657 116.324 99.1827 114.575 100.22C112.436 101.485 109.924 102.319 107.4 103.152C107.231 103.211 107.05 103.263 106.869 103.327C103.978 104.237 101.127 104.744 98.0613 104.948C95.9919 105.088 93.9458 105.193 91.8998 105.204H91.3868C87.1373 105.204 82.882 104.901 78.6733 104.312C73.9982 103.659 69.3756 102.663 64.9104 101.194C45.7731 94.904 38.9937 77.1074 37.8803 58.0808C37.8453 57.5445 37.8336 57.0024 37.8336 56.4661C37.8336 51.6221 38.9937 46.5273 40.0371 41.9397C41.6168 34.9913 44.6422 28.4976 48.7635 22.8782C48.7635 22.8782 54.7268 12.3331 69.8128 6.04923C76.1026 3.53684 86.158 2.27773 92.4477 2.27773C98.7375 2.27773 108.461 6.50974 110.052 7.30834C115.083 9.82074 122.626 13.5981 127.872 22.884C132.395 28.3402 135.135 35.2828 137.776 43.2222C139.128 47.2851 139.682 51.9951 139.676 56.7926C139.676 61.5842 139.128 66.4749 138.312 70.9226L138.306 70.9109Z" fill-rule="evenodd" clip-rule="evenodd" fill="#F9C41D"/>
                </g>
                </svg>
    
                <div class="quote-text">
                    <p>“I love knowing that there is no amount of time, energy, or effort wasted when volunteering because even the littlest things you do can have such a positive impact on the community.”</p>
                    <p class="quote-special">- MaryamCFASA Volunteer</p>
                </div>
    
            </div>
        
            <section class="volunteer-cta">
                <div class="decorative-circles">

        </div>
                <div class="volunteer-cta-intro">
                    <h2>Interested In Volunteering?</h2>
                    <p>Complete our volunteer application online and upload your resumé!</p>
                </div>
                <div class="volunteer-cta-text-info">
                        <div class="volunteer-cta-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 75 75" fill="none">
                            <rect width="75" height="75" rx="37.5" fill="#62C6C6"/>
                            <path d="M21 32.505V45.375C21 46.5685 21.4967 47.7131 22.3808 48.557C23.2649 49.4009 24.464 49.875 25.7143 49.875H49.2857C50.536 49.875 51.7351 49.4009 52.6192 48.557C53.5033 47.7131 54 46.5685 54 45.375V32.505L39.9703 40.7445C39.2274 41.1808 38.3722 41.4118 37.5 41.4118C36.6278 41.4118 35.7726 41.1808 35.0297 40.7445L21 32.505Z" fill="#FCFDFE"/>
                            <path d="M54 29.862V29.625C54 28.4315 53.5033 27.2869 52.6192 26.443C51.7351 25.5991 50.536 25.125 49.2857 25.125H25.7143C24.464 25.125 23.2649 25.5991 22.3808 26.443C21.4967 27.2869 21 28.4315 21 29.625V29.862L36.2649 38.829C36.6363 39.0471 37.0639 39.1626 37.5 39.1626C37.9361 39.1626 38.3637 39.0471 38.7351 38.829L54 29.862Z" fill="#FCFDFE"/>
                            </svg>
    
                        <div class="volunteer-cta-contact">
                            <h3>For inquiries or more information, please contact Lindsay Rothman.</h3>
                            <div class="volunteer-cta-contact-spec">
                                <p>Email: <span>lrothman@centreforautismab.ca</span></p>
                                <p>Phone: <span>(780) 488-6600 ext. 226</span></p>
                            </div>
                        </div>
                    </div>
                    <button href="#">Apply to Volunteer</button>
                </div>
            </section>
        
            <section class="uni-org">
                <h2>University Organization</h2>
                <div class="uni-cards">
                    <div class="uni-card">
                        <div class="uni-card-text">
                            <h3>University of Alberta</h3>
                            <p>The CFASA Students’ Association is an officially recognized club that raises autism awareness and promotes acceptance on campus and supports the Centre with fundraising and volunteering.</p>
                        </div>
                        <div class="uni-card-contact">
                            <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 75 75" fill="none">
                            <rect width="75" height="75" rx="37.5" fill="#62C6C6"/>
                            <path d="M21 32.5051V45.3751C21 46.5686 21.4967 47.7132 22.3808 48.5571C23.2649 49.401 24.464 49.8751 25.7143 49.8751H49.2857C50.536 49.8751 51.7351 49.401 52.6192 48.5571C53.5033 47.7132 54 46.5686 54 45.3751V32.5051L39.9703 40.7446C39.2274 41.1809 38.3722 41.4119 37.5 41.4119C36.6278 41.4119 35.7726 41.1809 35.0297 40.7446L21 32.5051Z" fill="#FCFDFE"/>
                            <path d="M54 29.862V29.625C54 28.4315 53.5033 27.2869 52.6192 26.443C51.7351 25.5991 50.536 25.125 49.2857 25.125H25.7143C24.464 25.125 23.2649 25.5991 22.3808 26.443C21.4967 27.2869 21 28.4315 21 29.625V29.862L36.2649 38.829C36.6363 39.0471 37.0639 39.1626 37.5 39.1626C37.9361 39.1626 38.3637 39.0471 38.7351 38.829L54 29.862Z" fill="#FCFDFE"/>
                            </svg>
                            <div class="uni-card-contact-text">
                                <p>For inquiries or more information:</p>
                                
                                <p>Email: cfasa@ualberta.ca</p>
                                
                            </div>
                        </div>
                    </div>
        
                    <div class="uni-card">
                        <div class="uni-card-text">
                            <h3>University of Calgary</h3>
                            <p>Autism Awareness Club (AAC) – MacEwan University is an officially recognized club that supports autism awareness on MacEwan University’s campus.</p>
                        </div>
                        <div class="uni-card-contact">
                            <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 75 75" fill="none">
                            <rect width="75" height="75" rx="37.5" fill="#62C6C6"/>
                            <path d="M21 32.5051V45.3751C21 46.5686 21.4967 47.7132 22.3808 48.5571C23.2649 49.401 24.464 49.8751 25.7143 49.8751H49.2857C50.536 49.8751 51.7351 49.401 52.6192 48.5571C53.5033 47.7132 54 46.5686 54 45.3751V32.5051L39.9703 40.7446C39.2274 41.1809 38.3722 41.4119 37.5 41.4119C36.6278 41.4119 35.7726 41.1809 35.0297 40.7446L21 32.5051Z" fill="#FCFDFE"/>
                            <path d="M54 29.862V29.625C54 28.4315 53.5033 27.2869 52.6192 26.443C51.7351 25.5991 50.536 25.125 49.2857 25.125H25.7143C24.464 25.125 23.2649 25.5991 22.3808 26.443C21.4967 27.2869 21 28.4315 21 29.625V29.862L36.2649 38.829C36.6363 39.0471 37.0639 39.1626 37.5 39.1626C37.9361 39.1626 38.3637 39.0471 38.7351 38.829L54 29.862Z" fill="#FCFDFE"/>
                            </svg>
                            <div class="uni-card-contact-text">
                                <p>For inquiries or more information:</p>
                                
                                <p>Email: <span>osmans6@mymacewan.ca</span></p>
                                
                            </div>
                        </div>
                    </div>  
                </div>
            </section>
        
            <section class="translators">
                <h2>VOLUNTEER TRANSLATORS</h2>
                <div class="translators-container">
                    <div class="translators-text">
                        <h3>Interested in volunteering as a translator?</h3>
                        <p>The Translating Volunteer will assist Centre staff with parent coaching and team meetings under the guidance of Centre staff and act as a bridge between staff and families.</p>
                    </div>
                    <button href="#">View The Role Description</button>
                </div>
            </section>
        
            <section class="volunteer-stories">
                <h2>FEATURED VOLUNTEER STORIES</h2>
                <div class="volunteer-stories-container">
                    <p>We are so proud to have such a wonderful group of volunteers! These individuals generously give their time to help participants build skills in sport and recreation, ignite creativity through art, foster independence through cooking and socializing, bridge gaps by interpreting languages for families, and so much more.</p>
                    <p>Our volunteers selflessly devote their time, generously share their talents, and leverage their strengths to create an environment at CFASA where participation, learning, and personal growth thrive.</p>
                    <p>Thank you to all of our amazing volunteers!</p>
                    <div class="volunteer-stories-cards">
                        <?php while ($volunteer_stories->have_posts()) : $volunteer_stories->the_post(); ?>
        
                        <?php get_template_part('template-parts/volunteer-story'); ?>
        
                        <?php endwhile; ?>
        
                        <?php wp_reset_postdata(); ?>
                    </div>
                </div>
            </section>
            <section class="application-form">
                <h2>VOLUNTEER APPLICATION</h2>
                <div class="application-form-container">
                    /* Form Goes here unsure if we make or they have one they use already */
                </div>
            </section>
        </div>
    </section>

    </section>



<?php get_footer(); ?>

