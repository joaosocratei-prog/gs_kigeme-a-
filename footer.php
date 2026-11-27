
<?php
// ============================================
// GS KIGEME-A COMPLETE RESPONSIVE FOOTER
// File: includes/footer.php
// ============================================
?>

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>

/* MAIN FOOTER */
.school-footer {
    background: #063b25;
    color: #e4eee8;
    padding: 45px 6% 20px;
    font-family: Arial, sans-serif;
    margin-top: 50px;
}

.footer-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(210px, 1fr));
    gap: 30px;
}

.footer-column h3 {
    color: #e0b32e;
    font-size: 19px;
    margin-bottom: 20px;
}

.footer-column h3::after {
    content: "";
    display: block;
    width: 40px;
    height: 3px;
    background: #e0b32e;
    margin-top: 8px;
}

.footer-column p {
    font-size: 13px;
    line-height: 1.8;
    margin-bottom: 12px;
}

/* NAVIGATION */
.footer-links {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-links li {
    margin-bottom: 12px;
}

.footer-links a {
    color: #e4eee8;
    text-decoration: none;
    font-size: 14px;
    display: inline-block;
    transition: .3s;
}

.footer-links a i {
    color: #e0b32e;
    margin-right: 8px;
}

.footer-links a:hover {
    color: #e0b32e;
    transform: translateX(6px);
}

/* CONTACT */
.contact-link {
    color: #e4eee8;
    text-decoration: none;
}

.contact-link:hover {
    color: #e0b32e;
}

/* SOCIAL MEDIA LAYOUT */
.social-list {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    gap: 8px;
    margin-top: 15px;
    align-items: center;
}

/* SOCIAL BUTTON */
.social-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 7px;
    padding: 8px 11px;
    min-height: 38px;
    border-radius: 18px;
    color: white;
    text-decoration: none;
    transition: .3s ease;
    border: 1px solid rgba(255,255,255,.2);
}

.social-button i {
    font-size: 16px;
    min-width: 17px;
    text-align: center;
}

.social-button span {
    display: flex;
    flex-direction: column;
    gap: 2px;
}

.social-button strong {
    font-size: 11px;
}

.social-button small {
    font-size: 9px;
    color: white;
}

.social-button:hover {
    transform: translateY(-3px);
    box-shadow: 0 4px 10px rgba(0,0,0,.25);
    color: white;
}

/* SOCIAL BRAND COLORS */
.facebook {
    background: #1877F2;
}

.instagram {
    background: linear-gradient(
        45deg,
        #FCAF45,
        #DD2A7B,
        #8134AF,
        #515BD4
    );
}

.youtube {
    background: #FF0000;
}

.tiktok {
    background: #000000;
}

.x-social {
    background: #000000;
}

.whatsapp {
    background: #25D366;
}

/* GOOGLE MAPS */
.map-button {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 14px;
    margin: 8px 0 15px;
    border-radius: 18px;
    background: #4285F4;
    color: white;
    text-decoration: none;
    font-size: 12px;
    font-weight: bold;
    transition: .3s;
}

.map-button:hover {
    background: #2465c5;
    color: white;
    transform: translateY(-3px);
}

/* SUBSCRIBE */
.footer-form {
    display: flex;
    margin-top: 15px;
}

.footer-form input {
    width: 100%;
    min-width: 0;
    padding: 11px;
    border: none;
    outline: none;
    border-radius: 18px 0 0 18px;
}

.footer-form button {
    padding: 10px 15px;
    border: none;
    background: #e0b32e;
    color: #063b25;
    cursor: pointer;
    font-weight: bold;
    border-radius: 0 18px 18px 0;
    transition: .3s;
}

.footer-form button:hover {
    background: white;
}

/* COPYRIGHT */
.footer-bottom {
    border-top: 1px solid #397052;
    margin-top: 40px;
    padding-top: 18px;
    text-align: center;
    font-size: 12px;
}

.footer-bottom span {
    color: #e0b32e;
    font-weight: bold;
}

/* FLOATING WHATSAPP */
.whatsapp-float {
    position: fixed;
    bottom: 22px;
    right: 22px;
    width: 48px;
    height: 48px;
    background: #25D366;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    font-size: 26px;
    text-decoration: none;
    z-index: 999;
    box-shadow: 0 4px 12px rgba(0,0,0,.3);
    transition: .3s;
}

.whatsapp-float:hover {
    transform: scale(1.1);
    color: white;
}

/* RESPONSIVE */
@media(max-width: 600px) {

    .school-footer {
        padding: 35px 6% 20px;
    }

    .footer-container {
        grid-template-columns: 1fr;
        gap: 25px;
    }

    .social-list {
        gap: 7px;
    }

    .social-button {
        padding: 7px 9px;
    }
}

</style>


<footer class="school-footer">

    <div class="footer-container">

        <!-- SCHOOL INFORMATION -->
        <div class="footer-column">

            <h3>GS KIGEME-A</h3>

            <p>
                GS Kigeme-A is an Anglican Church secondary school
                located in Kigeme, Nyamagabe District, Rwanda.
                We are committed to providing quality education
                and developing future leaders.
            </p>

            <p>
                <strong>
                    Learning Today, Leading Tomorrow.
                </strong>
            </p>

        </div>


        <!-- NAVIGATION -->
        <div class="footer-column">

            <h3>Quick Navigation</h3>

            <ul class="footer-links">

                <li>
                    <a href="index.php">
                        <i class="bi bi-house-door-fill"></i>
                        Home
                    </a>
                </li>

                <li>
                    <a href="about.php">
                        <i class="bi bi-info-circle-fill"></i>
                        About Us
                    </a>
                </li>

                <li>
                    <a href="academic.php">
                        <i class="bi bi-book-fill"></i>
                        Academics
                    </a>
                </li>

                <li>
                    <a href="staff.php">
                        <i class="bi bi-people-fill"></i>
                        Our Staff
                    </a>
                </li>

                <li>
                    <a href="news.php">
                        <i class="bi bi-newspaper"></i>
                        News
                    </a>
                </li>

                <li>
                    <a href="gallery.php">
                        <i class="bi bi-images"></i>
                        Gallery
                    </a>
                </li>

                <li>
                    <a href="contact.php">
                        <i class="bi bi-telephone-fill"></i>
                        Contact Us
                    </a>
                </li>

            </ul>

        </div>


        <!-- CONTACT AND LOCATION -->
        <div class="footer-column">

            <h3>Contact & Location</h3>

            <p>
                <i class="bi bi-geo-alt-fill"></i>
                GS Kigeme-A, Kigeme Cell, Gasaka Sector,
                Nyamagabe District, Rwanda
            </p>

            <a class="map-button"
               href="https://www.google.com/maps/search/?api=1&query=GS+Kigeme+A+Nyamagabe+Rwanda"
               target="_blank"
               rel="noopener noreferrer">

                <i class="bi bi-map-fill"></i>
                Find Us on Google Maps

            </a>

            <p>
                <i class="bi bi-telephone-fill"></i>

                <a class="contact-link"
                   href="tel:+250788600587">
                    0788600587
                </a>
            </p>

            <p>
                <i class="bi bi-envelope-fill"></i>

                <a class="contact-link"
                   href="mailto:gskigeme2@yahoo.com">
                    gskigeme2@yahoo.com
                </a>
            </p>

        </div>


        <!-- SOCIAL MEDIA -->
        <div class="footer-column">

            <h3>Connect With Us</h3>

            <p>
                Follow GS Kigeme-A on social media
                and discover our school activities.
            </p>

            <div class="social-list">

                <!-- FACEBOOK -->
                <a class="social-button facebook"
                   href="https://www.facebook.com/"
                   target="_blank"
                   rel="noopener noreferrer"
                   title="Follow our school updates">

                    <i class="bi bi-facebook"></i>

                    <span>
                        <strong>Facebook</strong>
                        <small>Follow our updates</small>
                    </span>

                </a>


                <!-- INSTAGRAM -->
                <a class="social-button instagram"
                   href="https://www.instagram.com/"
                   target="_blank"
                   rel="noopener noreferrer"
                   title="Explore our school photos">

                    <i class="bi bi-instagram"></i>

                    <span>
                        <strong>Instagram</strong>
                        <small>Explore our photos</small>
                    </span>

                </a>


                <!-- YOUTUBE -->
                <a class="social-button youtube"
                   href="https://www.youtube.com/"
                   target="_blank"
                   rel="noopener noreferrer"
                   title="Watch our school videos">

                    <i class="bi bi-youtube"></i>

                    <span>
                        <strong>YouTube</strong>
                        <small>Watch our videos</small>
                    </span>

                </a>


                



                <!-- WHATSAPP -->
                <a class="social-button whatsapp"
                   href="https://wa.me/250788600587"
                   target="_blank"
                   rel="noopener noreferrer"
                   title="Contact our school">

                    <i class="bi bi-whatsapp"></i>

                    <span>
                        <strong>WhatsApp</strong>
                        <small>Chat with our school</small>
                    </span>

                </a>

            </div>

        </div>


        <!-- SUBSCRIBE -->
        <div class="footer-column">

            <h3>Subscribe to Updates</h3>

            <p>
                Subscribe to receive school news
                and announcements.
            </p>

            <form action="subscribe.php"
                  method="POST"
                  class="footer-form">

                <input
                    type="email"
                    name="email"
                    placeholder="Enter your email"
                    required
                >

                <button type="submit"
                        aria-label="Subscribe">

                    <i class="bi bi-send-fill"></i>

                </button>

            </form>

        </div>

    </div>


    <!-- COPYRIGHT -->
    <div class="footer-bottom">

        <p>
            &copy; <?php echo date("Y"); ?>

            <span>GS KIGEME-A</span>.

            All Rights Reserved.
        </p>

        <p>
            Designed for GS Kigeme-A |
            Learning Today, Leading Tomorrow.
        </p>

    </div>

</footer>


<!-- FLOATING WHATSAPP -->
<a href="https://wa.me/250788600587"
   class="whatsapp-float"
   target="_blank"
   rel="noopener noreferrer"
   aria-label="Chat with GS Kigeme-A on WhatsApp"
   title="Chat with us on WhatsApp">

    <i class="bi bi-whatsapp"></i>

</a>
