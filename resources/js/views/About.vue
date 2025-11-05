<script>
import AOS from "aos";
import "aos/dist/aos.css";
import OurServices from "../components/OurServices.vue";
import WhereWeWork from "../components/WhereWeWork.vue";
import Volunteer from "../components/Volunteer.vue";
import HowWeWork from "../components/HowWeWork.vue";

export default {
    name: "About",
    components: {
        OurServices,
        WhereWeWork,
        Volunteer,
        HowWeWork,
    },

    data() {
        return {
            aosAnimation: "fade-right",
            isDarkMode: false,
        };
    },
    mounted() {
        AOS.init({
            duration: 1000,
            once: true,
        });

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    this.aosAnimation =
                        entry.boundingClientRect.left > 0
                            ? "fade-right"
                            : "fade-left";

                    entry.target.setAttribute("data-aos", this.aosAnimation);

                    AOS.refresh();
                    observer.unobserve(entry.target);
                }
            });
        });

        const section = document.querySelector(".christ-care-section");
        if (section) {
            observer.observe(section);
        }
    },
};
</script>

<template>
    <div>
        <section
            :class="{ 'dark-theme-section': isDarkMode }"
            class="landing-section"
        >
            <div class="zoom-slide"></div>
            <div class="overlay"></div>

            <div class="overlay-content">
                <h2>/ About Us</h2>
                <h1>welcome to the about us page</h1>
            </div>
        </section>
        <section class="christ-care-section" :data-aos="aosAnimation">
            <div class="ccc-text">
                <h3 class="about-us-title">About us</h3>
                <h4 class="about-us-subtitle">
                    Catherine Phill Sickle Cell Support Initiative
                </h4>
                <p class="ccc-paragraph">
                    Catherine Phil Sickle Cell Support Initiative stands as a
                    distinguished organization committed to celebrating the
                    enduring legacy of two extraordinary souls: Catherine, a
                    fervent champion for underprivileged children, and Phil, a
                    young boy whose life was deeply impacted by Sickle Cell
                    Disease. This initiative aspires to elevate awareness of
                    sickle cell disease in Uganda, while perpetuating the
                    philanthropic endeavors initiated by Catherine.
                </p>
                <button
                    type="button"
                    class="btn-ccc"
                    data-bs-toggle="modal"
                    data-bs-target="#cccModal"
                >
                    Read More
                </button>
            </div>
            <div class="ccc-image">
                <img
                    src="/public/assets/images/11.jpg"
                    alt="Christ Care Clinic"
                />
            </div>
        </section>
        <div
            class="modal fade"
            id="cccModal"
            tabindex="-1"
            aria-labelledby="cccModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div
                    class="modal-content"
                    :class="{ 'dark-theme': isDarkMode }"
                >
                    <div class="modal-header">
                        <h5 class="modal-title" id="cccModalLabel">
                            BACKGROUND OF THE ORGANIZATION
                        </h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div
                        class="modal-body"
                        :class="{ 'dark-theme': isDarkMode }"
                        style="white-space: pre-line"
                    >
                        Catherine Phil Sickle Cell Support Initiative stands as
                        a distinguished organization committed to celebrating
                        the enduring legacy of two extraordinary souls:
                        Catherine, a fervent champion for underprivileged
                        children, and Phil, a young boy whose life was deeply
                        impacted by Sickle Cell Disease. This initiative aspires
                        to elevate awareness of sickle cell disease in Uganda,
                        while perpetuating the philanthropic endeavors initiated
                        by Catherine.

                        <h3 class="modal-h3">Catherine’s Legacy</h3>
                        Ms. Catherine Aol epitomized the essence of motherhood
                        and community spirit, channeling her exceptional
                        tailoring talents to elevate those in her vicinity. Her
                        unwavering commitment to aiding underprivileged children
                        was manifest in a multitude of initiatives she
                        passionately pursued. With a firm belief in the
                        transformative power of education and skill acquisition,
                        she dedicated herself to imparting tailoring skills to
                        children who otherwise would have been deprived of such
                        invaluable opportunities. This noble endeavor equipped
                        them with vital competencies, paving the way for
                        enhanced employment prospects and a richer quality of
                        life in Lira Town. Catherine’s devotion transcended the
                        simple act of teaching; she cultivated an atmosphere of
                        hope and resilience among the young souls she mentored.
                        Her endeavors were marked by profound compassion and an
                        unshakeable faith in the inherent potential of every
                        child, solidifying her status as a cherished figure
                        within her community.

                        <h3 class="modal-h3">Phil’s Story</h3>
                        Phil Odongo was diagnosed with sickle cell disease in
                        his early years, enduring a myriad of health challenges
                        throughout his brief life. Yet, in the face of
                        adversity, he remained a devoted son to Harriet and Paul
                        Odongo, embodying a spirited essence brimming with
                        dreams and ambitions. Phil possessed a profound passion
                        for Christian music, relished watching films, and was a
                        fervent football enthusiast. His aspiration to become a
                        telecom engineer reflected not only his personal
                        ambitions but also his desire to make a meaningful
                        contribution to society. Tragically, Phil's life was cut
                        short at the tender age of 10 following a bone marrow
                        transplant. His courageous journey through illness
                        illuminated the struggles faced by countless children
                        afflicted with sickle cell disease—a condition that
                        impacts millions around the globe. Phil’s narrative
                        stands as a poignant reminder of the challenges posed by
                        this disease and serves as an inspiration for others to
                        engage in advocacy efforts aimed at its eradication.

                        <h3 class="modal-h3">Our Cardinals</h3>

                        Catherine Phil Sickle Cell Support Initiative is founded
                        on the principles of compassion, education, and
                        advocacy. The initiative aims to carry forward
                        Catherine’s philanthropic work while sharing Phil’s
                        story to raise awareness about sickle cell disease in
                        Uganda. By highlighting personal stories like Phil’s,
                        the initiative seeks to humanize the challenges
                        associated with this condition and inspire action within
                        communities.
                    </div>
                    <div
                        class="modal-footer"
                        :class="{ 'dark-theme': isDarkMode }"
                    >
                        <button
                            type="button"
                            class="btn modal-btn"
                            data-bs-dismiss="modal"
                        >
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <WhereWeWork />
        <OurServices />
        <HowWeWork />
        <Volunteer />
    </div>
</template>

<style scoped>
.landing-section {
    position: relative;

    background-size: cover;
    background-position: center;
    min-height: 75vh;
    display: flex;
    margin-top: -133px;
    align-items: center;
    justify-content: center;
    padding: 30px 20px;
    animation: fadeIn 1.5s ease-in;
    overflow: hidden;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.55);
    z-index: 1;
}

.zoom-slide {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url("/assets/images/12.jpg");
    background-position: center;
    background-size: cover;
    animation: zoomEffect 15s ease-in-out infinite alternate;
    z-index: 0;
}

@keyframes zoomEffect {
    0% {
        transform: scale(1);
    }
    100% {
        transform: scale(1.4);
    }
}

.overlay-content {
    position: absolute;
    top: 50%;
    margin-top: 88px;
    left: 50%;
    line-height: 330px;
    transform: translate(-50%, -50%);
    color: white;

    z-index: 2;
    padding: 20px;
    width: 90%;
}

.overlay-content h1 {
    font-size: 60px;
    text-shadow: 0 4px 10px rgba(0, 0, 0, 0.7);
    margin-bottom: 0;
    font-weight: bold;
}

@media (max-width: 768px) {
    .overlay-content h1 {
        font-size: 2rem;
    }
}

.christ-care-section {
    max-width: 1100px;
    margin: 60px auto;
    padding: 20px;
    display: flex;
    align-items: center;
    gap: 40px;
    flex-wrap: wrap;
}

.ccc-text {
    flex: 1 1 450px;
    color: #1a1a1a;
    padding: 20px;
}

.about-us-title {
    font-size: 1.5rem;
    font-weight: bold;
    font-family: "Oswald";
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

.ccc-paragraph {
    font-size: 1.1rem;
    line-height: 1.6;
    color: black;
    margin-bottom: 2rem;
    max-height: 140px;
    overflow: hidden;
    text-overflow: ellipsis;
}

body.dark-theme-body .ccc-paragraph {
    color: white;
}
.btn-ccc {
    border: 1px solid white;
    background-color: rgba(128, 0, 0, 0.8);
    font-weight: 600;
    padding: 12px 36px;
    font-size: 1.1rem;
    border-radius: 6px;
    color: white;
    transition: background 0.3s ease;
    cursor: pointer;
}

.btn-ccc:hover,
.btn-ccc:focus {
    background-color: white;
    border: 1px solid rgba(128, 0, 0, 0.8);
    color: red;
    outline: none;
}

.ccc-image {
    flex: 1 1 450px;
    overflow: hidden;
    border-radius: 16px;
    box-shadow: 0 8px 24px rgb(0 0 0 / 0.15);
    max-height: 350px;
}

.ccc-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
    border-radius: 16px;
}

.ccc-image:hover img {
    transform: scale(1.05);
}

@media (max-width: 768px) {
    .christ-care-section {
        flex-direction: column-reverse;
        text-align: center;
    }

    .ccc-text,
    .ccc-image {
        flex: 1 1 100%;
    }

    .ccc-image {
        max-height: 250px;
    }
}

.modal-header {
    background-color: rgba(128, 0, 0, 0.8);
    color: white;
    text-align: center;
}

.modal-body {
    background-color: #bacbc3;
    font-size: 18px;
}

.modal-h3 {
    color: rgba(128, 0, 0, 0.8);
    font-weight: bold;
    font-size: 30px;
    padding-top: 20px;
}

.modal-btn {
    background-color: rgba(128, 0, 0, 0.8);
    color: white;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
