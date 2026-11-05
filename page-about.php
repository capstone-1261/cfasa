<?php get_header(); ?>

<main>
<h1><?php the_title(); ?></h1>

<section class="about-nav-container">
    <div>
        <div class="about-nav">
            <h2 class="about-nav-sub">JUMP TO SECTION</h2>
            <nav class="about-us-navigation" aria-label="About us navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'about-nav',
                'container' => false,
                'menu_class' => 'about-us-nav',
                'fallback_cb' => false
            ));
            ?>
        </nav>
        </div>
    </div>
</section>

<section class="about-intro">
    <div class="about-intro-content">
        /* Logo goes here */
        <div class="about-intro-text">
            <p>The Centre for Autism Services Alberta (CFASA) is a non-profit organization that provides programs and services that span every stage of life—from early childhood to adulthood—helping Autistic and neurodivergent individuals build skills, connect with their communities, and achieve their goals.</p> 
            <p>We partner with Autistic and neurodivergent individuals, families, schools, and community organizations to create meaningful opportunities, break down barriers, and promote a society that embraces neurodiversity.</p>
        </div>
    </div>

    <div class="about-pills">
        <div class="pill">
            <h2> Purpose</h2>
            <p>To empower Autistic people, neurodivergent people, families, and communities to thrive. </p>
        </div>
        <div class="pill">
            <h2>Mission</h2>
            <p>To provide comprehensive and innovative supports and services across the lifespan.</p>
        </div>
        <div class="pill">
            <h2>Vision</h2>
            <p>People across Alberta and beyond lead engaged, fulfilling lives with equitable opportunities for participation. </p>
        </div>
    </div>
</section>

<section class="values-container">
    <h2>Our Values</h2>
    <div class="value-cards">
        <div class="value-card">
            <h3>Centering Lived and Living Experience</h3>
            <p class="value-flair">Autistic and neurodivergent perspectives shape everything we do.</p>
            <p>Lived experience refers to the knowledge and understanding gained from a person’s direct encounters and choices in the past. Living experience refers to a person’s present feelings, perspectives, and identities. We seek the leadership and input of individuals with lived and living experience to guide decision making and strengthen our services.</p>
        </div>
        <div class="value-card">
            <h3>Diversity, Equity and Inclusion</h3>
            <p class="value-flair">Diversity make us stronger.</p>
            <p>We honour diversity and intersectionality in all its forms, including neurodiversity. We promote equitable access for Autistic people across the spaces and activities that are important to them. We are inclusive of and responsive to overlapping identities, cultures, belonging, and unique experiences. </p>
        </div>
        <div class="value-card">
            <h3>Neurodiversity Affirming Services</h3>
            <p class="value-flair">Authenticity is embraced and celebrated.</p>
            <p>We provide neurodiversity affirming supports and services that promote belonging, connection, and reflect what is important to Autistic and/or neurodivergent people.</p>
        </div>
        <div class="value-card">
            <h3>Partnership</h3>
            <p class="value-flair">Strong relationships are at the heart of our work.</p>
            <p>We build authentic, interdependent, and collaborative relationships with those we serve, their families, our communities, and people who work or volunteer with us.</p>
        </div>
        <div class="value-card">
            <h3>Safety</h3>
            <p class="value-flair">Everyone deserves to feel safe, seen, and supported.</p>
            <p>We promote psychological, physical, and emotional well-being. We build open communication, respect autonomy and boundaries, adapt environments, teach self-advocacy, and appreciate the uniqueness of every individual to create trust.  We make decisions that maximize benefits and minimize harm.</p>
        </div>
        <div class="value-card">
            <h3>Continuious Improvement</h3>
            <p class="value-flair">If bet</p>
            <p>We are committed to ongoing learning, innovation, feedback, and quality improvement, ensuring our services consistently reflect evidence-based best practices, Autistic-led research, and the evolving needs of individuals and communities.</p>
        </div>
    </div>
</section>

<section class="history-practice">
    <div class="our-history">
        <h2>Our History</h2>
        <div class="history-text">
            <p>Twenty-Five years ago in Edmonton, there were no private or community support services in place to help children with autism and their families. The families were isolated, confused, and exhausted, with no connection to one another, experts, or the community.</p>
            <p>Researchers were beginning to understand the condition, but there was scarcely a link between the science and what was happening in a growing number of households in Alberta.</p>
            <p>In 1997, a few parents of children with autism launched a new organization in Edmonton. The science, then as now, showed that early intervention could make a huge difference in a child’s life. They acted quickly, to help their children, and in turn, help many others.</p>
            <p>They knew there were other families out there, like them. They wanted to help these families too. They wanted to invite new families into this organization and ensure its programs evolved with the best available science, and with children as they grew into adulthood. And they wanted something else: to build a community that understands, includes, and creates opportunities for Autistic individuals.</p>
            <p>The Centre for Autism Services Alberta inherited these goals. We put science into action every day but we aren’t bound by our address or the walls of our building. We take our successes to every corner of the city.</p>
            <p class="history-flair">Today, with the support of funders, sponsors, and private donors, our programs and services are changing outcomes, enriching lives, empowering families, fostering independence, and transforming communities.</h3>
            <p>We invite passionate experts to launch new programs here. We invite parents and community partners to suggest ideas that might interest their children. Maybe it’s a new technique or therapy. Maybe it’s art, cooking, skating, music, or Tae Kwon Do. We create ways to try new ideas with our staff and volunteers.</p>
            <p>When a program succeeds, we move it into homes, schools, and arts centres, into community kitchens, into the YMCA, into municipal programs, and clubs. We’re a service provider and an educational organization. We train others to do what we do: to understand what makes Autistic children unique, to include them, and to integrate them into the community.</p>
            <p>We love when our partners take these opportunities and nurture them. When we let our programs breathe outside our walls, perhaps the Centre doesn’t grow as fast, but it’s much better for kids, their families, and the province. As more and more young people are diagnosed with autism, more and more of us have to understand it. These are citizens who can make an extraordinary contribution if we’re willing to help.</p>
            <div>
                <p>We love when our partners take these opportunities and nurture them. When we let our programs breathe outside our walls, perhaps the Centre doesn’t grow as fast, but it’s much better for kids, their families, and the province. As more and more young people are diagnosed with autism, more and more of us have to understand it. These are citizens who can make an extraordinary contribution if we’re willing to help.</p>
                /* Image Goes Here */
            </div>
            <p>The Centre thrives on new ideas, research, imagination, and public and philanthropic funding. The return on our investment is extraordinary. All Albertans can help someone with autism. All Albertans with autism can make a meaningful contribution to the province and realize what is in their hearts and in their dreams.</p>           
        </div>
        <div class="history-cta">
            <h3>The Centre is in your neighbourhood. Join us!</h3>
            <p class="small">
                Canadian Registered Charity number 872973995RR0001
            </p>
        </div>
    </div>

    <div class="our-practice">
        <h2>Our Practice</h2>
        <div>
            <h3>Leading the Way</h3>
            <p>The Centre for Autism Services Alberta exists to empower Autistic people and their families to thrive. We are a Canadian leader in individualized services, early childhood services, therapy, applied research and training, and enrichment programming for children, teens, and young adults with autism and their families. We provide comprehensive and innovative supports and services to those individuals and their family network. Home to three research fellows, the Centre is the only accredited autism service provider in Alberta (Accredited in Behavioural Consultation Services – Autism by CARF International). We strive to ensure that individuals with autism lead meaningful, engaged lives.</p>
        </div>
        <div>
            <h3>Smart Technology</h3>
            <p>The Centre for Autism Services Alberta exists to empower Autistic people and their families to thrive. We are a Canadian leader in individualized services, early childhood services, therapy, applied research and training, and enrichment programming for children, teens, and young adults with autism and their families. We provide comprehensive and innovative supports and services to those individuals and their family network. Home to three research fellows, the Centre is the only accredited autism service provider in Alberta (Accredited in Behavioural Consultation Services – Autism by CARF International). We strive to ensure that individuals with autism lead meaningful, engaged lives.</p>
        </div>
        <div>
            <h3>Philosophy</h3>
            <p>The Centre operates under a Neurodiversity framework and a person-centered model. This means that we define autism as a developmental disability that affects how people think, understand the world, move, communicate, and socialize. The Autistic brain is a natural variation. We endeavor to understand each person’s specific context, dreams, and goals to support their achievement. Our services and programs reflect what is important to autistic people. We are constantly evaluating our services and keeping up to date on current best practices because if better is possible, we do it. We also recognize that at different stages of life, family/guardians are key decision-makers for and with their dependents. We work as a team that includes the autistic person, their family, multi-disciplinary personnel, and others from the autistic person’s community. The environment and people within it adapt to meet each individual’s needs, creating a sense of belonging and participation in all activities and settings. </p>
            /* Image Goes Here */
            <p>We integrate developmental and behavioural sciences employing strategies in natural activities and routines to teach skills and promote success. We maximize effectiveness by using empirical findings, professional experience, and the values and preferences of persons served. Our services and programs are inclusive of and responsive to overlapping identities, cultures, and unique experiences. </p>
        </div>
    </div>
</section>

<div class="to-top-button">
    <button>
        To Top
    </button>
</div>

<?php get_footer(); ?>