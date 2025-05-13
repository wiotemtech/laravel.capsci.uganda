<script>
export default {
    name: "Footer",
    props: {
        isDarkMode: Boolean,
    },
};
</script>

<template>
    <footer class="footer-section" :class="{ 'dark-theme-footer': isDarkMode }">
        <div class="container text-center mb-4"></div>

        <section
            class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
            :class="{ 'dark-theme-border-bottom': isDarkMode }"
        >
            <div
                class="me-5 d-none d-lg-block"
                :class="{ 'dark-theme-text': isDarkMode }"
            >
                <span>Get connected with us on social networks:</span>
            </div>

            <div class="footer-social-icons">
                <a
                    href="#"
                    class="me-4"
                    :class="{ 'dark-theme-link': isDarkMode }"
                >
                    <i class="fab fa-facebook fa-2x"></i>
                </a>
                <a
                    href="#"
                    class="me-4"
                    :class="{ 'dark-theme-link': isDarkMode }"
                >
                    <i class="fab fa-twitter fa-2x"></i>
                </a>
                <a
                    href="#"
                    class="me-4"
                    :class="{ 'dark-theme-link': isDarkMode }"
                >
                    <i class="fab fa-instagram fa-2x"></i>
                </a>
                <a
                    href="#"
                    class="me-4"
                    :class="{ 'dark-theme-link': isDarkMode }"
                >
                    <i class="fab fa-linkedin fa-2x"></i>
                </a>
            </div>
        </section>

        <section :class="{ 'dark-theme-section': isDarkMode }">
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <div
                        class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4"
                        :class="{ 'dark-theme-text': isDarkMode }"
                    >
                        <h6
                            class="text-uppercase fw-bold mb-4"
                            :class="{ 'dark-theme-heading': isDarkMode }"
                        >
                            <i class="fas fa-gem me-3"></i>CAPSCI
                        </h6>
                        <p
                            class="footer-p"
                            :class="{ 'dark-theme-paragraph': isDarkMode }"
                        >
                            Do You Know Your Sickle Cell Status? <br />
                            Get Tested Today.
                        </p>
                    </div>

                    <div
                        class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4"
                        :class="{ 'dark-theme-text': isDarkMode }"
                    >
                        <h6
                            class="text-uppercase fw-bold mb-4"
                            :class="{ 'dark-theme-heading': isDarkMode }"
                        >
                            Services
                        </h6>
                        <ul class="list-unstyled">
                            <li class="footer-p">
                                <a
                                    href="#!"
                                    class="footer-link"
                                    :class="{ 'dark-theme-link': isDarkMode }"
                                    >Confirmatory Testing</a
                                >
                            </li>
                            <li class="footer-p">
                                <a
                                    href="#!"
                                    class="footer-link"
                                    :class="{ 'dark-theme-link': isDarkMode }"
                                    >Screening</a
                                >
                            </li>
                            <li class="footer-p">
                                <a
                                    href="#!"
                                    class="footer-link"
                                    :class="{ 'dark-theme-link': isDarkMode }"
                                    >Counselling</a
                                >
                            </li>
                            <li class="footer-p">
                                <a
                                    href="#!"
                                    class="footer-link"
                                    :class="{ 'dark-theme-link': isDarkMode }"
                                    >Educating</a
                                >
                            </li>
                        </ul>
                    </div>

                    <div
                        class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4"
                        :class="{ 'dark-theme-text': isDarkMode }"
                    >
                        <h6
                            class="text-uppercase fw-bold mb-4"
                            :class="{ 'dark-theme-heading': isDarkMode }"
                        >
                            Partners
                        </h6>
                        <ul class="list-unstyled">
                            <li class="footer-p">
                                <a
                                    href="#!"
                                    class="footer-link"
                                    :class="{ 'dark-theme-link': isDarkMode }"
                                    >Ministry of Health</a
                                >
                            </li>
                            <li class="footer-p">
                                <a
                                    href="#!"
                                    class="footer-link"
                                    :class="{ 'dark-theme-link': isDarkMode }"
                                    >Lira University</a
                                >
                            </li>
                            <li class="footer-p">
                                <a
                                    href="#!"
                                    class="footer-link"
                                    :class="{ 'dark-theme-link': isDarkMode }"
                                    >NICOSAM</a
                                >
                            </li>
                            <li class="footer-p">
                                <a
                                    href="#!"
                                    class="footer-link"
                                    :class="{ 'dark-theme-link': isDarkMode }"
                                    >Q Fm</a
                                >
                            </li>
                        </ul>
                    </div>

                    <div
                        class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4"
                        :class="{ 'dark-theme-text': isDarkMode }"
                    >
                        <h6
                            class="text-uppercase fw-bold mb-4"
                            :class="{ 'dark-theme-heading': isDarkMode }"
                        >
                            Find Us
                        </h6>
                        <p
                            class="footer-p"
                            :class="{ 'dark-theme-paragraph': isDarkMode }"
                        >
                            <i class="fa fa-home me-3"></i> Head Office: Plot
                            1628,Block 215,Kulambiro-Najjera Road Kyadondo-Mengo
                            Kampala Uganda.
                        </p>
                        <p
                            class="footer-p"
                            :class="{ 'dark-theme-paragraph': isDarkMode }"
                        >
                            <i class="fa fa-map-marker me-3"></i> Field
                            Office:2nd Floor Yodev Plaza,Behind Lira Hotel
                        </p>
                        <p
                            class="footer-p"
                            :class="{ 'dark-theme-paragraph': isDarkMode }"
                        >
                            <i class="fa fa-envelope me-3"></i>
                            info@capsci-uganda.org
                        </p>
                        <p
                            class="footer-p"
                            :class="{ 'dark-theme-paragraph': isDarkMode }"
                        >
                            <i class="fa fa-phone me-3"></i> +256-392-150-047
                        </p>
                    </div>
                </div>
                <div
                    class="fixed-bottom-right"
                    style="margin-bottom: 70px; right: 20px"
                >
                    <a
                        class="twitter-dm-button w3-btn w3-green floating-icon"
                        href="https://wa.me/256774526849"
                    >
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>

                <div
                    class="fixed-bottom-right"
                    style="bottom: 80px; right: 80px; margin-bottom: 10px"
                >
                    <a
                        class="twitter-dm-button w3-btn w3-black floating-icon"
                        href="https://x.com/UgandaSickle"
                    >
                        <i class="fab fa-x"></i>
                    </a>
                </div>
            </div>
        </section>

        <div
            class="footer-bottom text-center p-4 footer-end"
            :class="{ 'dark-theme-footer-bottom': isDarkMode }"
        >
            <p
                style="font-size: 16px"
                :class="{ 'dark-theme-text': isDarkMode }"
            >
                &copy; 2025 Copyright:
                <a
                    href="#"
                    class="text-reset fw-bold-2"
                    style="font-size: 16px"
                    :class="{ 'dark-theme-link': isDarkMode }"
                    >capsci-uganda</a
                >
            </p>
            <p class="footer-end" :class="{ 'dark-theme-text': isDarkMode }">
                Powered By:
                <a
                    href="https://www.cotiafrica.com"
                    class="text-reset fw-bold-2"
                    style="font-size: 16px"
                    :class="{ 'dark-theme-link': isDarkMode }"
                    >CodeToInnovate Africa</a
                >
            </p>
        </div>
    </footer>
</template>

<style scoped>
.footer-section {
    background-color: #2c3e50;
    color: #fff;
    transition:
        background-color 0.3s ease,
        color 0.3s ease;
}

body.dark-theme-body .footer-section {
    background-color: #222;
}

body.dark-theme-body h6 {
    color: red;
}

text-uppercase .fw-bold {
    font-size: 18px;
    font-family: "poppins", sans-serif;
}

.footer-p {
    font-size: 14px;
}

.footer-link {
    text-decoration: none;
    color: #fff;
    transition: color 0.3s ease;
}

.footer-link:hover {
    color: #f39c12;
}

body.dark-theme-body .footer-link {
    color: white;
}

body.dark-theme-body .footer-link:hover {
    color: blue;
}

.footer-social-icons i {
    font-size: 20px;
    margin: 0 10px;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-social-icons i:hover {
    color: white;
}

body.dark-theme-body .footer-social-icons i {
    color: white;
}

body.dark-theme-body .footer-social-icons i:hover {
    color: lightblue;
}

.footer-logo {
    width: 150px;
}

.footer-bottom {
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition:
        background-color 0.3s ease,
        color 0.3s ease;
}

body.dark-theme-body .footer-bottom {
    background-color: #1a1a1a;
    color: white;
}

.footer-bottom p {
    margin: 0;
}

.fw-bold-2 {
    font-size: 4px;
}

body.dark-theme-body .dark-theme-text {
    color: white;
}

body.dark-theme-body .dark-theme-heading {
    color: red;
}

body.dark-theme-body .dark-theme-paragraph {
    color: white;
}

body.dark-theme-body .dark-theme-border-bottom {
    border-bottom-color: white;
}

.fixed-bottom-right {
    position: fixed;
    bottom: 15px;
    right: 15px;
    z-index: 1000;
}

.floating-icon {
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50px;
    width: 40px;
    height: 40px;
    font-size: 20px;
    color: white;
    text-decoration: none;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
}

.w3-btn {
    padding: 8px 16px;
    border: none;
    cursor: pointer;
    display: inline-block;
    text-align: center;
    background-color: transparent;
}

.w3-green {
    background-color: #4caf50 !important;
}

.w3-black {
    background-color: #000 !important;
}
</style>
