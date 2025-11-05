<script setup>
import { ref } from "vue";

const isDarkMode = ref(false);
</script>

<template>
    <footer class="footer-academy-custom" :class="{ 'dark-mode': isDarkMode }">
        <div class="container-compact">
            <div class="row-compact">
                <div class="col-logo mb-3">
                    <img
                        src="/public/assets/images/logo1.png"
                        alt="CAPSCI Logo"
                        class="footer-logo"
                    />
                    <h6
                        style="color: white"
                        class="text-uppercase academy-name"
                    >
                        CAPSCI Uganda
                    </h6>
                    <p class="tagline-text">
                        Do You Know Your Sickle Cell Status? Get Tested Today.
                    </p>

                    <div class="social-icons mt-2">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-links mb-3">
                    <h6>Quick Links</h6>
                    <a href="#">Home</a>
                    <a href="#">About Us</a>
                    <a href="#">Our Services</a>
                    <a href="#">Partners</a>
                    <a href="#">Contact</a>
                    <a href="#">FAQs</a>
                </div>

                <!-- Services -->
                <div class="col-focus mb-3">
                    <h6>Our Services</h6>
                    <p><a href="#">Confirmatory Testing</a></p>
                    <p><a href="#">Screening</a></p>
                    <p><a href="#">Counselling</a></p>
                    <p><a href="#">Educating</a></p>
                </div>

                <!-- Contact Info -->
                <div class="col-contact mb-3">
                    <h6>Contact Headquarters</h6>
                    <p>
                        <i class="fas fa-map-marker-alt me-2"></i>
                        Plot 1628, Block 215, Kulambiro–Najjera Road, Kampala,
                        Uganda.
                    </p>
                    <p>
                        <i class="fas fa-map-marker-alt me-2"></i>
                        Field Office: 2nd Floor Yodev Plaza, Behind Lira Hotel
                    </p>
                    <p>
                        <i class="fas fa-envelope me-2"></i>
                        info@capsci-uganda.org
                    </p>
                    <p><i class="fas fa-phone me-2"></i> +256 392 150 047</p>

                    <div style="color: #0b028d" class="button-group mt-3">
                        <router-link
                            to="/contact-us"
                            class="btn-cta btn-partner"
                            >Partner with Us</router-link
                        >
                        <a href="#" class="btn-cta btn-donate"
                            >Support Our Work</a
                        >
                    </div>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom text-center mt-4">
                <p class="mb-0">
                    &copy; 2025 CAPSCI Uganda. All Rights Reserved.
                    <a href="" target="_blank" rel="noopener noreferrer"> </a>
                </p>
            </div>
        </div>

        <!-- Floating Buttons -->
        <div class="floating-wrapper whatsapp-float">
            <a
                class="floating-icon whatsapp-color"
                href="https://wa.me/256774526849"
                target="_blank"
            >
                <i class="fab fa-whatsapp"></i>
            </a>
        </div>

        <div class="floating-wrapper twitter-float">
            <a
                class="floating-icon twitter-color"
                href="https://x.com/UgandaSickle"
                target="_blank"
            >
                <i class="fab fa-x-twitter"></i>
            </a>
        </div>
    </footer>
</template>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;900&display=swap");
@import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css");

/* --- Base Footer Styling --- */
.footer-academy-custom {
    font-family: "Montserrat", sans-serif;
    background-color: #242424;
    color: white;
    padding: 40px 0 20px;
    border-top: 10px rgba(128, 0, 0, 0.8);
}

/* Container and Layout */
.container-compact {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

.row-compact {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    text-align: left;
}

/* Columns */
.col-logo,
.col-links,
.col-focus,
.col-contact {
    padding: 0 15px;
}

.col-logo {
    flex: 0 0 30%;
    max-width: 30%;
}
.col-links {
    flex: 0 0 15%;
    max-width: 15%;
}
.col-focus {
    flex: 0 0 30%;
    max-width: 30%;
}
.col-contact {
    flex: 0 0 25%;
    max-width: 25%;
}

/* Headings */
.footer-academy-custom h6 {
    color: red;
    font-weight: 700;
    font-size: 1.1rem;
    margin-bottom: 1rem;
    text-transform: uppercase;
}

/* Logo & Tagline */
.footer-logo {
    max-width: 100px;
    margin-bottom: 10px;
}

.academy-name {
    font-size: 1.3rem;
    font-weight: 900;
}

.tagline-text {
    font-size: 0.9rem;
    color: rgba(255, 255, 255, 0.8);
    margin-bottom: 15px;
}

/* Links */
.footer-academy-custom a,
.footer-academy-custom p {
    color: rgba(255, 255, 255, 0.7);
    text-decoration: none;
    font-size: 0.95rem;
    margin-bottom: 8px;
    transition: color 0.2s ease;
    display: block;
}

.footer-academy-custom a:hover {
    color: rgba(128, 0, 0, 0.8);
}

/* Social Icons */
.social-icons {
    display: flex;
    gap: 15px;
}

.social-icons a {
    color: white;
    font-size: 1.2rem;
    transition: transform 0.2s ease;
}

.social-icons a:hover {
    color: rgba(128, 0, 0, 0.8);
    transform: translateY(-2px);
}

/* Contact Info */
.col-contact p i {
    color: red;
}

/* Buttons */
.button-group {
    display: flex;
    flex-direction: column;
    gap: 10px;
    width: 100%;
    max-width: 250px;
}

.btn-cta {
    display: block;
    padding: 10px 15px;
    border-radius: 4px;
    font-weight: 700;
    font-size: 0.95em;
    text-align: center;
    transition: all 0.2s ease;
    text-transform: uppercase;
    border: 2px solid transparent;
}

.btn-partner {
    background-color: rgba(128, 0, 0, 0.8);
    color: white;
}

.btn-partner:hover {
    background-color: white;
    color: #00a36c;
    transform: translateY(-2px);
}

.btn-donate {
    background-color: transparent;
    border-color: white;
    color: white;
}

.btn-donate:hover {
    background-color: rgba(128, 0, 0, 0.8);
    color: white;
    transform: translateY(-2px);
}

/* Footer Bottom */
.footer-bottom {
    border-top: 1px solid rgba(255, 255, 255, 0.2);
    margin-top: 30px;
    padding-top: 15px;
    font-size: 0.85rem;
}

.footer-bottom a {
    color: red;
}

.footer-bottom a:hover {
    color: white;
}

/* Floating Buttons */
.floating-wrapper {
    position: fixed;
    z-index: 1000;
}

.whatsapp-float {
    bottom: 20px;
    right: 20px;
}

.twitter-float {
    bottom: 75px;
    right: 20px;
}

.floating-icon {
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    width: 45px;
    height: 45px;
    font-size: 22px;
    color: white;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
    transition: transform 0.2s ease;
}

.floating-icon:hover {
    transform: scale(1.08);
}

.whatsapp-color {
    background-color: #25d366;
}

.twitter-color {
    background-color: black;
}

/* Responsive */
@media (max-width: 768px) {
    .row-compact {
        flex-direction: column;
        text-align: center;
    }

    .col-logo,
    .col-links,
    .col-focus,
    .col-contact {
        flex: 1 1 100%;
        max-width: 100%;
        padding: 0 10px;
    }

    .footer-academy-custom h6::after {
        margin-left: auto;
        margin-right: auto;
    }

    .social-icons {
        justify-content: center;
    }

    .footer-logo {
        margin-left: auto;
        margin-right: auto;
    }

    .col-links a {
        display: inline-block;
        margin: 0 10px;
    }

    .button-group {
        margin-left: auto;
        margin-right: auto;
        max-width: 300px;
    }
}
</style>
