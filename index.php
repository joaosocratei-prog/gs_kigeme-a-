
<?php
// =====================================
// GS KIGEME A - HOME PAGE
// PHP, HTML, CSS AND JAVASCRIPT
// =====================================

$schoolName = "GS KIGEME A";
$schoolLocation = "Kigeme Cell, Gasaka Sector, Nyamagabe District, Rwanda";

$slides = [
    [
        "image" => "images/OVERVIEW.jpg",
        "title" => "WELCOME TO GS KIGEME A",
        "description" => "Learning Today, Leading Tomorrow."
    ],
    [
        "image" => "images/school1.jpg",
        "title" => "EDUCATION FOR EXCELLENCE",
        "description" => "Building knowledge, discipline and responsibility."
    ],
    [
        "image" => "images/school2.jpg",
        "title" => "OUR SCHOOL, OUR PRIDE",
        "description" => "Growing together towards a brighter future."
    ]
];

$programs = [
    ["icon" => "bi-mortarboard", "name" => "Ordinary Level", "description" => "Strong foundations for further education."],
    ["icon" => "bi-calculator", "name" => "Mathematics", "description" => "Developing logical and analytical skills."],
    ["icon" => "bi-flask", "name" => "Sciences", "description" => "Exploring science, technology and innovation."],
    ["icon" => "bi-book", "name" => "Languages", "description" => "Building communication and literacy skills."]
];

$clubs = [
    ["icon" => "bi-tree", "name" => "Environment Club"],
    ["icon" => "bi-people", "name" => "Umuganda"],
    ["icon" => "bi-camera", "name" => "Media Club"],
    ["icon" => "bi-music-note-beamed", "name" => "Itorero"],
    ["icon" => "bi-heart", "name" => "Light Foundation"],
    ["icon" => "bi-compass", "name" => "Scout Club"]
];

$gallery = [
    ["image" => "images/gallery1.jpg", "title" => "School Campus"],
    ["image" => "images/gallery2.jpg", "title" => "School Activities"],
    ["image" => "images/gallery3.jpg", "title" => "Students"],
    ["image" => "images/gallery4.jpg", "title" => "School Events"],
    ["image" => "images/gallery5.jpg", "title" => "Education"],
    ["image" => "images/gallery6.jpg", "title" => "Our Community"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>GS KIGEME A | Learning Today, Leading Tomorrow</title>

<meta name="description" content="Welcome to GS Kigeme A, an Anglican Church secondary school in Nyamagabe District, Rwanda.">

<!-- Bootstrap Icons -->
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>

/* =====================================
   GLOBAL SETTINGS
===================================== */

:root {
    --green: #238653;
    --dark-green: #0b3d27;
    --deep-green: #063b25;
    --gold: #e0b32e;
    --white: #ffffff;
    --light: #f4f8f5;
    --text: #333333;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
}

body {
    font-family: Arial, Helvetica, sans-serif;
    color: var(--text);
    background: var(--white);
    line-height: 1.7;
}

a {
    text-decoration: none;
}

img {
    max-width: 100%;
    display: block;
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: auto;
}

.section {
    padding: 85px 0;
}

.section-title {
    text-align: center;
    margin-bottom: 45px;
}

.section-title span {
    color: var(--green);
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.section-title h2 {
    color: var(--dark-green);
    font-size: 35px;
    margin: 8px 0;
}

.section-title p {
    max-width: 650px;
    margin: auto;
    color: #666;
}

.btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 11px 23px;
    border-radius: 18px;
    font-weight: bold;
    transition: .3s ease;
}

.btn-gold {
    background: var(--gold);
    color: var(--dark-green);
}

.btn-gold:hover {
    background: white;
    transform: translateY(-4px);
}

.btn-outline {
    border: 2px solid white;
    color: white;
}

.btn-outline:hover {
    background: white;
    color: var(--dark-green);
    transform: translateY(-4px);
}

/* =====================================
   HERO SLIDESHOW
===================================== */

.hero {
    min-height: 650px;
    position: relative;
    display: flex;
    align-items: center;
    overflow: hidden;
    background: var(--dark-green);
    color: white;
}

.hero-slide {
    position: absolute;
    inset: 0;
    background-size: cover;
    background-position: center;
    opacity: 0;
    transition: opacity 1.2s ease;
}

.hero-slide.active {
    opacity: 1;
}

.hero-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(
        90deg,
        rgba(3, 35, 20, .92),
        rgba(3, 35, 20, .65),
        rgba(3, 35, 20, .25)
    );
}

.hero-content {
    position: relative;
    z-index: 2;
    width: 90%;
    max-width: 1200px;
    margin: auto;
    padding: 90px 0;
}

.hero-content .small-title {
    color: var(--gold);
    font-weight: bold;
    letter-spacing: 3px;
    text-transform: uppercase;
}

.hero-content h1 {
    font-size: clamp(38px, 6vw, 68px);
    line-height: 1.15;
    max-width: 750px;
    margin: 20px 0;
}

.hero-content h1 span {
    color: var(--gold);
}

.hero-content p {
    max-width: 650px;
    font-size: 18px;
    margin-bottom: 30px;
}

.hero-buttons {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}

.hero-dots {
    position: absolute;
    bottom: 30px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 5;
    display: flex;
    gap: 12px;
}

.hero-dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    border: none;
    background: white;
    cursor: pointer;
}

.hero-dot.active {
    background: var(--gold);
    width: 30px;
    border-radius: 10px;
}

/* =====================================
   WELCOME SECTION
===================================== */

.welcome {
    background: var(--light);
}

.welcome-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 55px;
    align-items: center;
}

.welcome-image {
    position: relative;
}

.welcome-image img {
    width: 100%;
    height: 400px;
    object-fit: cover;
    border-radius: 15px;
    box-shadow: 15px 15px 0 var(--gold);
}

.welcome-content h2 {
    color: var(--dark-green);
    font-size: 34px;
    margin: 12px 0;
}

.welcome-content p {
    margin-bottom: 18px;
    color: #555;
}

.welcome-label {
    color: var(--green);
    font-weight: bold;
    letter-spacing: 2px;
}

/* =====================================
   ABOUT SECTION
===================================== */

.about-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}

.about-card {
    padding: 30px;
    background: white;
    border-radius: 14px;
    box-shadow: 0 5px 25px rgba(0,0,0,.07);
    border-bottom: 4px solid var(--gold);
    transition: .3s;
}

.about-card:hover {
    transform: translateY(-8px);
}

.about-card i {
    font-size: 38px;
    color: var(--green);
}

.about-card h3 {
    color: var(--dark-green);
    margin: 15px 0 8px;
}

/* =====================================
   ACADEMIC PROGRAMS
===================================== */

.academics {
    background: var(--light);
}

.program-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 22px;
}

.program-card {
    background: white;
    padding: 30px 22px;
    text-align: center;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0,0,0,.06);
    transition: .3s;
}

.program-card:hover {
    background: var(--dark-green);
    color: white;
    transform: translateY(-8px);
}

.program-card i {
    color: var(--green);
    font-size: 42px;
}

.program-card:hover i,
.program-card:hover h3 {
    color: var(--gold);
}

.program-card h3 {
    margin: 15px 0 8px;
    color: var(--dark-green);
}

/* =====================================
   SCHOOL CLUBS
===================================== */

.club-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

.club-card {
    background: var(--dark-green);
    color: white;
    padding: 25px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    gap: 18px;
    transition: .3s;
}

.club-card:hover {
    background: var(--green);
    transform: translateY(-5px);
}

.club-card i {
    font-size: 32px;
    color: var(--gold);
}

/* =====================================
   LEADERSHIP
===================================== */

.leadership {
    background: var(--light);
}

.leader-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}

.leader-card {
    background: white;
    text-align: center;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0,0,0,.08);
    transition: .3s;
}

.leader-card:hover {
    transform: translateY(-8px);
}

.leader-card img {
    width: 100%;
    height: 290px;
    object-fit: cover;
}

.leader-card h3 {
    color: var(--dark-green);
    margin: 18px 10px 5px;
}

.leader-card p {
    color: var(--green);
    padding-bottom: 20px;
}

/* =====================================
   NEWS SECTION
===================================== */

.news-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}

.news-card {
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0,0,0,.08);
    background: white;
}

.news-card img {
    height: 220px;
    width: 100%;
    object-fit: cover;
}

.news-content {
    padding: 22px;
}

.news-content h3 {
    color: var(--dark-green);
    margin-bottom: 10px;
}

.news-content a {
    display: inline-block;
    color: var(--green);
    font-weight: bold;
    margin-top: 12px;
}

/* =====================================
   GALLERY
===================================== */

.gallery {
    background: var(--light);
}

.gallery-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 18px;
}

.gallery-item {
    position: relative;
    overflow: hidden;
    border-radius: 12px;
    height: 250px;
}

.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: .5s;
}

.gallery-item:hover img {
    transform: scale(1.1);
}

.gallery-caption {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 25px 15px 15px;
    color: white;
    background: linear-gradient(transparent, rgba(0,0,0,.8));
}

/* =====================================
   CONTACT CTA
===================================== */

.contact-cta {
    background: var(--dark-green);
    color: white;
    text-align: center;
    padding: 75px 20px;
}

.contact-cta h2 {
    font-size: 35px;
    margin-bottom: 12px;
}

.contact-cta p {
    margin-bottom: 25px;
}

/* =====================================
   FOOTER PLACEHOLDER
===================================== */

.page-footer-space {
    padding: 20px;
    text-align: center;
    background: var(--deep-green);
    color: white;
}

/* =====================================
   ANIMATIONS
===================================== */

.reveal {
    opacity: 0;
    transform: translateY(35px);
    transition: .8s ease;
}

.reveal.show {
    opacity: 1;
    transform: translateY(0);
}

/* =====================================
   RESPONSIVE DESIGN
===================================== */

@media(max-width: 900px) {

    .welcome-grid {
        grid-template-columns: 1fr;
    }

    .program-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .about-grid,
    .leader-grid,
    .news-grid {
        grid-template-columns: repeat(2, 1fr);
    }

}

@media(max-width: 600px) {

    .section {
        padding: 60px 0;
    }

    .hero {
        min-height: 570px;
    }

    .hero-content h1 {
        font-size: 38px;
    }

    .hero-content p {
        font-size: 16px;
    }

    .section-title h2 {
        font-size: 27px;
    }

    .about-grid,
    .program-grid,
    .club-grid,
    .leader-grid,
    .news-grid,
    .gallery-grid {
        grid-template-columns: 1fr;
    }

    .welcome-image img {
        height: 280px;
    }

    .gallery-item {
        height: 230px;
    }

    .contact-cta h2 {
        font-size: 28px;
    }

}

</style>
</head>

<body>

<!-- =====================================
     NAVBAR WILL BE INCLUDED LATER
===================================== -->

<!--
<?php // include __DIR__ . '/includes/navbar.php'; ?>
-->


<!-- =====================================
     HERO SECTION
===================================== -->

<section class="hero">

    <?php foreach ($slides as $index => $slide): ?>

        <div class="hero-slide <?= $index === 0 ? 'active' : '' ?>"
             style="background-image: url('<?= htmlspecialchars($slide['image']) ?>')">
        </div>

    <?php endforeach; ?>

    <div class="hero-overlay"></div>

    <div class="hero-content">

        <span class="small-title">Anglican Church Secondary School</span>

        <h1>
            <?= htmlspecialchars($schoolName) ?>
            <span>WE ARE THE BEST</span>
        </h1>

        <p>
            An Anglican Church secondary school in Kigeme,
            Nyamagabe District, Southern Province, Rwanda.
            Teaching and inspiring students since 1965.
        </p>

        <div class="hero-buttons">

            <a href="about.php" class="btn btn-gold">
                Discover Our School
                <i class="bi bi-arrow-right"></i>
            </a>

            <a href="news.php" class="btn btn-outline">
                Latest News
                <i class="bi bi-newspaper"></i>
            </a>

        </div>

    </div>

    <div class="hero-dots">

        <?php foreach ($slides as $index => $slide): ?>

            <button class="hero-dot <?= $index === 0 ? 'active' : '' ?>"
                    onclick="showSlide(<?= $index ?>)"
                    aria-label="Show slide <?= $index + 1 ?>">
            </button>

        <?php endforeach; ?>

    </div>

</section>


<!-- =====================================
     WELCOME SECTION
===================================== -->

<section class="section welcome">

    <div class="container welcome-grid">

        <div class="welcome-image reveal">
            <img src="images/OVERVIEW.jpg"
                 alt="GS Kigeme A school campus">
        </div>

        <div class="welcome-content reveal">

            <span class="welcome-label">WELCOME TO OUR SCHOOL</span>

            <h2>Education is the Key to a Better Future</h2>

            <p>
                Welcome to GS KIGEME A, a secondary school
                managed by the Anglican Church of Rwanda,
                Kigeme Diocese, in collaboration with the
                Government of Rwanda.
            </p>

            <p>
                Since 1965, our school has been committed
                to providing quality education, discipline,
                moral values and knowledge to young people.
            </p>

            <a href="about.php" class="btn btn-gold">
                Learn More
                <i class="bi bi-arrow-right"></i>
            </a>

        </div>

    </div>

</section>


<!-- =====================================
     ABOUT / MISSION / VISION
===================================== -->

<section class="section">

    <div class="container">

        <div class="section-title reveal">

            <span>WHO WE ARE</span>

            <h2>Our School Foundation</h2>

            <p>
                We believe that education develops responsible,
                knowledgeable and productive citizens.
            </p>

        </div>

        <div class="about-grid">

            <div class="about-card reveal">
                <i class="bi bi-building"></i>
                <h3>About Our School</h3>
                <p>
                    GS Kigeme A is an Anglican Church secondary
                    school located in Kigeme, Nyamagabe District.
                </p>
            </div>

            <div class="about-card reveal">
                <i class="bi bi-eye"></i>
                <h3>Our Vision</h3>
                <p>
                    To become a centre of excellence that produces
                    responsible, skilled and innovative citizens.
                </p>
            </div>

            <div class="about-card reveal">
                <i class="bi bi-bullseye"></i>
                <h3>Our Mission</h3>
                <p>
                    To provide quality education based on knowledge,
                    discipline, Christian values and practical skills.
                </p>
            </div>

        </div>

    </div>

</section>


<!-- =====================================
     ACADEMIC PROGRAMS
===================================== -->

<section class="section academics">

    <div class="container">

        <div class="section-title reveal">

            <span>LEARNING AND DEVELOPMENT</span>

            <h2>Academic Excellence</h2>

            <p>
                Our academic environment encourages students
                to discover their abilities and achieve their goals.
            </p>

        </div>

        <div class="program-grid">

            <?php foreach ($programs as $program): ?>

                <div class="program-card reveal">

                    <i class="bi <?= htmlspecialchars($program['icon']) ?>"></i>

                    <h3><?= htmlspecialchars($program['name']) ?></h3>

                    <p><?= htmlspecialchars($program['description']) ?></p>

                </div>

            <?php endforeach; ?>

        </div>

        <div style="text-align:center; margin-top:35px;">

            <a href="academic.php" class="btn btn-gold">
                Explore Academics
                <i class="bi bi-arrow-right"></i>
            </a>

        </div>

    </div>

</section>


<!-- =====================================
     SCHOOL CLUBS
===================================== -->

<section class="section">

    <div class="container">

        <div class="section-title reveal">

            <span>BEYOND THE CLASSROOM</span>

            <h2>Students' Clubs and Activities</h2>

            <p>
                We encourage teamwork, leadership, creativity
                and community participation.
            </p>

        </div>

        <div class="club-grid">

            <?php foreach ($clubs as $club): ?>

                <div class="club-card reveal">

                    <i class="bi <?= htmlspecialchars($club['icon']) ?>"></i>

                    <h3><?= htmlspecialchars($club['name']) ?></h3>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<!-- =====================================
     SCHOOL LEADERSHIP
===================================== -->

<section class="section leadership">

    <div class="container">

        <div class="section-title reveal">

            <span>OUR MANAGEMENT</span>

            <h2>School Leadership</h2>

            <p>
                Dedicated leadership supports quality education
                and the development of our school community.
            </p>

        </div>

        <div class="leader-grid">

            <div class="leader-card reveal">

                <img src="images/headteacher.jpg"
                     alt="Headteacher">

                <h3>Headteacher</h3>

                <p>School Administration</p>

            </div>

            <div class="leader-card reveal">

                <img src="images/deputy.jpg"
                     alt="Deputy Headteacher">

                <h3>Deputy Headteacher</h3>

                <p>Academic and School Support</p>

            </div>

            <div class="leader-card reveal">

                <img src="images/director.jpg"
                     alt="School Leadership">

                <h3>School Leadership</h3>

                <p>Management Team</p>

            </div>

        </div>

    </div>

</section>


<!-- =====================================
     LATEST NEWS
===================================== -->

<section class="section">

    <div class="container">

        <div class="section-title reveal">

            <span>STAY CONNECTED</span>

            <h2>Latest News and Announcements</h2>

            <p>
                Discover important information, activities
                and announcements from our school.
            </p>

        </div>

        <div class="news-grid">

            <article class="news-card reveal">

                <img src="images/news1.jpg" alt="School activities">

                <div class="news-content">

                    <h3>School Activities</h3>

                    <p>
                        Discover different activities taking
                        place in our school community.
                    </p>

                    <a href="news.php">
                        Read More <i class="bi bi-arrow-right"></i>
                    </a>

                </div>

            </article>

            <article class="news-card reveal">

                <img src="images/news2.jpg" alt="Academic news">

                <div class="news-content">

                    <h3>Academic Updates</h3>

                    <p>
                        Follow academic information and
                        educational developments.
                    </p>

                    <a href="news.php">
                        Read More <i class="bi bi-arrow-right"></i>
                    </a>

                </div>

            </article>

            <article class="news-card reveal">

                <img src="images/news3.jpg" alt="School events">

                <div class="news-content">

                    <h3>School Events</h3>

                    <p>
                        Stay informed about events and
                        activities organized by our school.
                    </p>

                    <a href="news.php">
                        Read More <i class="bi bi-arrow-right"></i>
                    </a>

                </div>

            </article>

        </div>

        <div style="text-align:center; margin-top:35px;">

            <a href="news.php" class="btn btn-gold">
                View All News
                <i class="bi bi-arrow-right"></i>
            </a>

        </div>

    </div>

</section>


<!-- =====================================
     SCHOOL GALLERY
===================================== -->

<section class="section gallery">

    <div class="container">

        <div class="section-title reveal">

            <span>OUR MEMORIES</span>

            <h2>School Gallery</h2>

            <p>
                Explore pictures showing our school,
                students and different activities.
            </p>

        </div>

        <div class="gallery-grid">

            <?php foreach ($gallery as $item): ?>

                <div class="gallery-item reveal">

                    <img src="<?= htmlspecialchars($item['image']) ?>"
                         alt="<?= htmlspecialchars($item['title']) ?>">

                    <div class="gallery-caption">
                        <h3><?= htmlspecialchars($item['title']) ?></h3>
                    </div>

                </div>

            <?php endforeach; ?>

        </div>

        <div style="text-align:center; margin-top:35px;">

            <a href="gallery.php" class="btn btn-gold">
                View Full Gallery
                <i class="bi bi-images"></i>
            </a>

        </div>

    </div>

</section>


<!-- =====================================
     CONTACT SECTION
===================================== -->

<section class="contact-cta">

    <div class="container reveal">

        <h2>Become Part of GS KIGEME A</h2>

        <p>
            Visit our school and discover an environment
            dedicated to education, discipline and excellence.
        </p>

        <a href="contact.php" class="btn btn-gold">
            Contact Our School
            <i class="bi bi-arrow-right"></i>
        </a>

        <a href="https://www.google.com/maps/search/?api=1&query=GS+Kigeme+A+Nyamagabe+Rwanda"
           target="_blank"
           rel="noopener noreferrer"
           class="btn btn-outline">
            <i class="bi bi-geo-alt"></i>
            Find Our Location
        </a>

    </div>

</section>


<!-- =====================================
     FOOTER WILL BE INCLUDED LATER
===================================== -->

<!--
<?php // include __DIR__ . '/includes/footer.php'; ?>
-->


<!-- =====================================
     JAVASCRIPT
===================================== -->

<script>

// HERO SLIDESHOW

const slides = document.querySelectorAll(".hero-slide");
const dots = document.querySelectorAll(".hero-dot");

let currentSlide = 0;
let slideTimer;

function showSlide(index) {

    slides.forEach(slide => {
        slide.classList.remove("active");
    });

    dots.forEach(dot => {
        dot.classList.remove("active");
    });

    currentSlide = index;

    slides[currentSlide].classList.add("active");
    dots[currentSlide].classList.add("active");

    clearInterval(slideTimer);
    startSlideshow();
}

function nextSlide() {

    currentSlide++;

    if (currentSlide >= slides.length) {
        currentSlide = 0;
    }

    slides.forEach(slide => {
        slide.classList.remove("active");
    });

    dots.forEach(dot => {
        dot.classList.remove("active");
    });

    slides[currentSlide].classList.add("active");
    dots[currentSlide].classList.add("active");
}

function startSlideshow() {

    slideTimer = setInterval(nextSlide, 5000);

}

startSlideshow();


// SCROLL REVEAL ANIMATION

const revealElements = document.querySelectorAll(".reveal");

function revealOnScroll() {

    revealElements.forEach(element => {

        const windowHeight = window.innerHeight;

        const elementTop = element.getBoundingClientRect().top;

        if (elementTop < windowHeight - 80) {
            element.classList.add("show");
        }

    });

}

window.addEventListener("scroll", revealOnScroll);

window.addEventListener("load", revealOnScroll);

</script>

</body>
</html>
