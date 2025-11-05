<template>
    <div class="contact-container" :class="{ 'dark-mode': isDarkMode }">
        <section
            :class="{ 'dark-theme-events': isDarkMode }"
            style="background-image: url(&quot;/assets/images/11.jpg&quot;)"
            class="landing-section"
        >
            <div class="overlay"></div>
            <div class="landing-content">
                <h1>/ Contact Us!</h1>
                <h1>Welcome to our Contact Us page</h1>
            </div>
        </section>

        <div class="contact-head">
            <h1 class="about-us-title">Connect with Us</h1>
            <h2 class="about-us-subtitle">Leave No One Behind</h2>
        </div>

        <div class="spiritual-intro-message">
            <p>
                Catherine Phil Sickle Cell Support Initiative is founded on the
                principles of compassion, education, and advocacy. The
                initiative aims to carry forward Catherine’s philanthropic work
                while sharing Phil’s story to raise awareness about sickle cell
                disease in Uganda. By highlighting personal stories like Phil’s,
                the initiative seeks to humanize the challenges associated with
                this condition and inspire action within communities.
            </p>
        </div>
        <div class="contact-wrapper">
            <div class="email-cards-wrapper">
                <div id="one" class="email-card">
                    <i class="fas fa-user-tie icon-circle"></i>
                    <h3>For Partnership</h3>
                    <p>
                        <a href="info@capsci-uganda.org">
                            info@capsci-uganda.org</a
                        >
                    </p>
                </div>
                <div id="two" class="email-card">
                    <i class="fas fa-lightbulb icon-circle"></i>
                    <h3>For General Inquiry</h3>
                    <p>
                        <a href="info@capsci-uganda.org">
                            info@capsci-uganda.org</a
                        >
                    </p>
                </div>
                <div id="three" class="email-card">
                    <i class="fas fa-briefcase icon-circle"></i>
                    <h3>For Volunteers</h3>
                    <p>
                        <a href="info@capsci-uganda.org">
                            info@capsci-uganda.org</a
                        >
                    </p>
                </div>
            </div>

            <div class="info-section">
                <h2>Catherin sickle cell support initiative (capsci-ug)</h2>

                <div class="contact-details">
                    <p>
                        <i class="fas fa-map-marker-alt contact-icon"></i>
                        <strong>Location:</strong> Head Office: Plot 1628,Block
                        215,Kulambiro-Najjera Road Kyadondo-Mengo Kampala &
                        Behind lira Hotel 2nd floor Yodev Plaza Lira city.
                    </p>
                    <p>
                        <i class="fas fa-phone contact-icon"></i>
                        <strong>Telephone:</strong>
                        <a href="tel:+256-392-150-047">+256-392-150-047</a>
                    </p>
                    <p>
                        <i class="fas fa-envelope contact-icon"></i>
                        <strong>General Email:</strong>
                        <a href=" info@capsci-uganda.org">
                            info@capsci-uganda.org</a
                        >
                    </p>
                </div>
                <h2>Follow Us</h2>
                <div class="socials">
                    <a
                        href="https://www.facebook.com/share/1AXvp1sHM1/"
                        target="_blank"
                        ><i class="fab fa-facebook-f"></i
                    ></a>
                    <a
                        href="https://x.com/RuralAgroNet?t=2H8Iq0QbfPWcgZWlQxnYdA&s=09"
                        ><i class="fab fa-x-twitter"></i
                    ></a>
                    <a
                        href="https://www.youtube.com/@RuralAgroecologyNetwork"
                        target="_blank"
                        ><i class="fab fa-youtube"></i
                    ></a>
                    <a
                        href="https://www.linkedin.com/company/rural-agroecology-network/"
                        target="_blank"
                        ><i class="fab fa-linkedin-in"></i
                    ></a>
                    <a
                        href="https://www.instagram.com/rural.agroecology.network?igsh=YzljYTk1ODg3Zg=="
                        target="_blank"
                        ><i class="fab fa-instagram"></i
                    ></a>
                </div>
            </div>
        </div>
<!--
        <div class="map-section">
            <h2>Our Location</h2>
            <div class="map-container">
                <div class="iframe-responsive-wrapper">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22798.216485683603!2d32.88914271083983!3d2.310969599999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1770b70017ccd701%3A0x6ae367be53a56d7f!2sNgetta%20Catholic%20Parish!5e1!3m2!1sen!2sug!4v1760983355432!5m2!1sen!2sug"
                        style="border: 0"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                </div>
            </div>
        </div>
    -->
    </div>

</template>

<script setup>
const isDarkMode = false;
</script>

<style scoped>
@import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css");

.contact-head {
    text-align: center;
}

.about-us-title {
    font-size: 1.5rem;
    font-weight: bold;

    color: red;
    margin-bottom: 10px;
}

.about-us-subtitle {
    font-size: 2.5rem;
    font-weight: bold;
    color: rgba(128, 0, 0, 0.8);
    line-height: 1.2;

    margin-bottom: 20px;
}
.contact-container {
    padding: 0;
    margin-bottom: 35px;
    font-family: "Poppins", sans-serif;
}

body.dark-theme-body .contact-container {
    background-color: #222;
    color: white;
}

.landing-section {
    position: relative;
    margin-top: 75px;
    background-size: cover;
    background-position: center;
    height: 60vh;
    display: flex;

    align-items: center;
    justify-content: flex-start;
    margin-bottom: 40px;
    animation: fadeIn 1.5s ease-in;
    margin-top: 30px;

    overflow: hidden;

    padding-left: 5%;
}

.landing-section::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: inherit;
    background-size: cover;
    background-position: center;
    z-index: 0;

    animation: zoom-in-zoom-out 20s ease-in-out infinite alternate;
}

.overlay {
    position: absolute;
    top: 0px;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.55);
    z-index: 1;
}

.landing-content {
    position: relative;
    z-index: 2;
    color: #fff;
    padding-top: 10px;

    text-align: left;
    max-width: 800px;
}

.landing-content h1 {
    font-size: 40px;
    font-weight: bold;
    animation: slideDown 1s ease;
}

.tagline {
    font-weight: bold;
    font-size: 20px;
    color: white;
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes slideDown {
    from {
        transform: translateY(-40px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

@keyframes zoom-in-zoom-out {
    0% {
        transform: scale(1);
    }
    100% {
        transform: scale(1.1);
    }
}

.spiritual-intro-message {
    max-width: 800px;
    margin: 0 auto 50px auto;
    padding: 20px;
    border-left: 5px solid red;
    background-color: #f7f9fc;
    border-radius: 8px;
    text-align: left;
    line-height: 1.6;
    font-style: italic;
    color: #444;
}

body.dark-theme-body .spiritual-intro-message {
    background-color: #111;
    border-left-color: red;
    color: #ccc;
}

.contact-wrapper {
    display: flex;
    flex-wrap: wrap;
    max-width: 1100px;
    margin: 0 auto;
    gap: 40px;
    padding: 20px;
}

.email-cards-wrapper,
.info-section {
    flex: 1 1 45%;
}

.email-cards-wrapper {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.email-card {
    color: rgba(128, 0, 0, 0.8);
    padding: 15px;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition:
        transform 0.3s ease,
        box-shadow 0.3s ease;
}

#one {
    background-color: #eef2ff;
}

#two {
    background-color: #fef2f2;
}

#three {
    background-color: #ecfeff;
}
body.dark-theme-body .email-card {
    border: 1px solid rgba(128, 0, 0, 0.8);
    color: #093d11;
}

.email-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.email-card h3 {
    font-size: 24px;
    font-weight: bold;
    margin-top: 10px;
    margin-bottom: 5px;
}

body.dark-theme-body .email-card h3 {
    color: #eee;
}

.email-card p {
    font-size: 16px;
    color: #555;
    margin: 0;
}

.email-card p a {
    color: inherit;
    text-decoration: none;
}

.email-card p a:hover {
    color: #0d6efd;
    text-decoration: underline;
}

body.dark-theme-body .email-card p {
    color: #aaa;
}

body.dark-theme-body .email-card p a {
    color: inherit;
}

body.dark-theme-body .email-card p a:hover {
    color: #fff;
}

.icon-circle {
    font-size: 30px;
    color: red;
    border: 2px solid red;
    border-radius: 50%;
    padding: 10px;
    width: 50px;
    height: 50px;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    background-color: white;
}

body.dark-theme-body .icon-circle {
    background-color: transparent;
    border: 2px solid #eee;
    color: #eee;
}

body.dark-theme-body .email-card {
    background-color: #111;
    color: #eee;
    border-color: #444;
}

.info-section {
    background-color: #eef2ff;
    color: black;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

body.dark-theme-body .info-section {
    background-color: #111;
    border: 1px solid red;
    color: white;
}

.info-section h2 {
    font-size: 30px;
    font-weight: bold;
    margin-bottom: 20px;
    color: red;
}

body.dark-theme-body .info-section h2 {
    color: red;
}

.contact-details p {
    margin-bottom: 15px;
    font-size: 1.1em;
    display: flex;
    align-items: flex-start;
}

.contact-details p strong {
    margin-right: 5px;
}

.contact-icon {
    font-size: 1.2em;
    color: red;
    margin-right: 10px;
    padding-top: 3px;
}

.contact-details a {
    color: inherit;
    text-decoration: none;
}

.socials {
    margin-top: 15px;
}

.socials a {
    margin-right: 15px;
    font-size: 20px;
    color: #333;
}

body.dark-theme-body .socials a {
    color: white;
}

.socials a:hover {
    color: red;
}

@media (max-width: 767px) {
    .contact-wrapper {
        flex-direction: column;
    }

    .landing-section {
        padding-left: 20px;
    }
    .landing-content h1 {
        font-size: 30px;
    }
}
.map-section {
    max-width: 1100px;
    margin: 40px auto;
    padding: 0 20px;
}

.map-section h2 {
    text-align: center;
    margin-bottom: 20px;
    color: rgba(128, 0, 0, 0.8);
}

body.dark-theme-body .map-section h2 {
    color: whitesmoke;
}

.map-container {
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.iframe-responsive-wrapper {
    position: relative;

    padding-bottom: 50%;
    height: 0;
    overflow: hidden;
}

.iframe-responsive-wrapper iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
</style>
