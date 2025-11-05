<script>
export default {
    name: "Ojede",
    props: {
        isDarkMode: Boolean,
    },
};
</script>

<template>
    <section
        class="sickle-section"
        :class="{ 'dark-theme-section': isDarkMode }"
    >
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-md-6 sickle-text">
                    <h1
                        class="display-4 fw-bolder mb-4 text-red"
                        :class="{ 'dark-theme-red': isDarkMode }"
                    >
                        Understanding Sickle Cell Disease
                    </h1>
                    <p
                        class="lead mb-4"
                        :class="{ 'dark-theme-text-secondary': isDarkMode }"
                    >
                        Sickle Cell Disease (SCD) is a serious inherited blood
                        disorder affecting millions globally. It transforms
                        normally round, flexible red blood cells into rigid,
                        crescent (sickle) shapes. These abnormal cells clump,
                        block vital blood flow, and break down easily, leading
                        to severe health crises and chronic organ damage.
                        <span
                            id="more-text"
                            style="display: none"
                            :class="{ 'dark-theme-text-secondary': isDarkMode }"
                        >
                            Join us in raising awareness, supporting affected
                            families, and promoting better healthcare solutions.
                            We are committed to providing educational resources,
                            medical care, and assistance to individuals living
                            with sickle cell disease.</span
                        >
                    </p>
                    <button
                        type="button"
                        class="btn cta-btn"
                        :class="{ 'dark-theme-cta-btn': isDarkMode }"
                        data-bs-toggle="modal"
                        data-bs-target="#bliko"
                    >
                        Learn More & Get Involved
                    </button>
                </div>

                <div class="col-md-6 sickle-video">
                    <div
                        class="video-wrapper shadow-lg"
                        :class="{ 'dark-theme-video-border': isDarkMode }"
                    >
                        <iframe
                            width="695"
                            height="315"
                            src="https://www.youtube.com/embed/RpvxJmduC7w"
                            title="UHURU SICKLE CELL RUN: COUPLES RALLIED TO DO PRE-MARITAL CHECKS TO FIGHT SICKLE CELL DISEASE"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allowfullscreen
                        ></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="modal fade"
            id="bliko"
            tabindex="-1"
            aria-labelledby="mymodalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content" :class="{ 'dark-theme-modal-content': isDarkMode }">
                    <div class="modal-header text-white" :class="{ 'dark-theme-modal-header': isDarkMode }">
                        <img
                            src="/public/assets/images/logo1.png"
                            alt="Logo"
                            class="rounded-pill me-3"
                            style="width: 50px; height: 50px"
                        />
                        <div>
                            <h2 class="modal-title fs-3 fw-bold">
                                Comprehensive Guide to Sickle Cell Disease
                            </h2>
                        </div>
                        <button
                            type="button"
                            class="btn-close"
                            :class="{ 'btn-close-white': isDarkMode }"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>

                    <div class="modal-body" :class="{ 'dark-theme-modal-body': isDarkMode }">
                        <p
                            class="mb-4"
                            :class="{ 'dark-theme-text': isDarkMode }"
                        >
                            Sickle Cell Disease (SCD) is a serious
                            inherited blood disorder that affects
                            millions of people worldwide. It mainly
                            impacts red blood cells, which are
                            responsible for carrying oxygen throughout
                            the body. Normally, these cells are round
                            and flexible, allowing them to move smoothly
                            through blood vessels. However, in people
                            with sickle cell disease, the red blood
                            cells take on a rigid, crescent (or sickle)
                            shape. These abnormally shaped cells can
                            clump together, block blood flow, and break
                            down easily, leading to severe health
                            problems.
                        </p>

                        <h3 class="mt-4 mb-2 text-red fw-bold" :class="{ 'dark-theme-red': isDarkMode }">
                            What Causes Sickle Cell Disease?
                        </h3>
                        <p :class="{ 'dark-theme-text': isDarkMode }">
                            SCD is caused by a **genetic mutation** that
                            affects hemoglobin, the protein in red blood
                            cells that carries oxygen. A person develops
                            sickle cell disease if they inherit **two
                            copies of the sickle cell gene**—one from each
                            parent. If someone inherits just one copy of
                            the gene, they have **sickle cell trait**,
                            meaning they usually don’t have symptoms but
                            can pass the gene to their children.
                        </p>

                        <h3 class="mt-4 mb-2 text-red fw-bold" :class="{ 'dark-theme-red': isDarkMode }">
                            Dangers and Complications of SCD
                        </h3>
                        <ul class="list-unstyled" :class="{ 'dark-theme-text': isDarkMode }">
                            <li>
                                <i class="bi bi-x-octagon-fill me-2 text-danger"></i>
                                **Pain Crises:** Episodes of severe pain due to blocked blood flow (vaso-occlusive crises).
                            </li>
                            <li>
                                <i class="bi bi-x-octagon-fill me-2 text-danger"></i>
                                **Anemia:** A shortage of red blood cells, leading to fatigue and weakness.
                            </li>
                            <li>
                                <i class="bi bi-x-octagon-fill me-2 text-danger"></i>
                                **Infections:** Increased risk of bacterial infections due to weakened immunity, especially in the spleen.
                            </li>
                            <li>
                                <i class="bi bi-x-octagon-fill me-2 text-danger"></i>
                                **Stroke:** Blocked blood vessels can lead to strokes, which are a major concern, particularly in children.
                            </li>
                            <li>
                                <i class="bi bi-x-octagon-fill me-2 text-danger"></i>
                                **Organ Damage:** Sickle cells can damage organs like the liver, heart, and kidneys over time due to chronic lack of oxygen.
                            </li>
                            <li>
                                <i class="bi bi-x-octagon-fill me-2 text-danger"></i>
                                **Delayed Growth:** In children, the disease can slow down physical development and puberty.
                            </li>
                        </ul>

                        <h3 class="mt-4 mb-2 text-red fw-bold" :class="{ 'dark-theme-red': isDarkMode }">
                            Prevention and Management
                        </h3>
                        <p :class="{ 'dark-theme-text': isDarkMode }">
                            While there is no guaranteed way to prevent
                            SCD in people already born with it, there
                            are crucial steps to reduce its impact and
                            prevent complications:
                        </p>

                        <ul class="list-unstyled" :class="{ 'dark-theme-text': isDarkMode }">
                            <li>
                                <i class="bi bi-check-circle-fill me-2 text-success"></i>
                                **Genetic Counseling:** Essential for couples who both carry the sickle cell gene to understand the risks before having children.
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill me-2 text-success"></i>
                                **Staying Hydrated:** Drinking plenty of water helps keep blood cells flexible and reduces the chance of sickling.
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill me-2 text-success"></i>
                                **Avoiding Extremes:** Cold weather or high heat can trigger pain crises; maintain a moderate body temperature.
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill me-2 text-success"></i>
                                **Vaccinations & Antibiotics:** Crucial for preventing infections, especially in children with weakened immune systems.
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill me-2 text-success"></i>
                                **Medications:** Drugs like **Hydroxyurea** and newer therapies help reduce pain crises and improve overall quality of life.
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill me-2 text-success"></i>
                                **Bone Marrow Transplant (BMT):** A potential cure for some patients, though it requires a suitable, matching donor.
                            </li>
                        </ul>

                        <h3 class="mt-4 mb-2 text-red fw-bold" :class="{ 'dark-theme-red': isDarkMode }">
                            Conclusion
                        </h3>
                        <p :class="{ 'dark-theme-text': isDarkMode }">
                            Sickle cell disease is a lifelong condition,
                            but with the right care, education, and
                            lifestyle adjustments, people with SCD can
                            lead healthier, more fulfilling lives. Your
                            support in raising awareness and funding
                            research can significantly improve treatment
                            options and bring hope for a cure.
                        </p>
                    </div>

                    <div class="modal-footer" :class="{ 'dark-theme-modal-footer': isDarkMode }">
                        <button
                            type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal"
                        >
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        </section>
</template>

<style scoped>
/*
|--------------------------------------------------------------------------
| GENERAL SECTION STYLES
|--------------------------------------------------------------------------
*/
/* Import Bootstrap Icons for better modal lists */
@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");

.sickle-section {
    padding: 80px 0;
    /* Soft Off-White Background */
    background-color: #f8f9fa;
    color: #343a40;
    transition: background-color 0.4s ease, color 0.4s ease;
}

.dark-theme-section {
    /* Deep Dark Gray Background */
    background-color: #1c1c1c;
    color: #f1f1f1;
}

/* Red Accent Color for Headings */
.text-red {
    color: #dc3545; /* Bootstrap Danger Red */
}

.dark-theme-red {
    color: #ff6b6b; /* Lighter Red for Dark Mode Contrast */
}

.dark-theme-text-secondary {
    color: #bdbdbd;
}

/*
|--------------------------------------------------------------------------
| CONTENT AND ANIMATION
|--------------------------------------------------------------------------
*/
.display-4 {
    font-size: 3rem; /* Larger heading for impact */
    font-family: "Poppins", sans-serif;
    line-height: 1.1;
    font-weight: 800; /* Extra bold */
}

.lead {
    font-size: 1.15rem;
    line-height: 1.7;
}

.sickle-text,
.sickle-video {
    animation-duration: 1.2s;
    animation-fill-mode: both;
}

@keyframes fadeInLeft {
    from {
        opacity: 0;
        transform: translateX(-50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes fadeInRight {
    from {
        opacity: 0;
        transform: translateX(50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

.sickle-text {
    animation-name: fadeInLeft;
}

.sickle-video {
    animation-name: fadeInRight;
}

/*
|--------------------------------------------------------------------------
| VIDEO STYLES
|--------------------------------------------------------------------------
*/
.video-wrapper {
    position: relative;
    border-radius: 12px;
    overflow: hidden;
    /* Soft Shadow */
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    transition: all 0.4s ease;
    border: 5px solid rgba(220, 53, 69, 0.2); /* Light red border for design */
}

.video-wrapper:hover {
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    transform: translateY(-5px);
}

.dark-theme-video-border {
    border: 5px solid rgba(255, 107, 107, 0.2);
}

.sickle-video iframe {
    width: 100%;
    height: 350px; /* Set a fixed height for better mobile layout */
    display: block;
    transition: transform 0.3s ease-in-out;
}

/*
|--------------------------------------------------------------------------
| CTA BUTTON STYLES
|--------------------------------------------------------------------------
*/
.cta-btn {
    background-color: #dc3545; /* Red CTA */
    color: white;
    border: none;
    padding: 12px 30px;
    font-size: 1.1rem;
    font-weight: 700;
    border-radius: 50px; /* Pill-shaped button */
    margin-top: 20px;
    transition: all 0.3s ease;
    letter-spacing: 0.5px;
}

.cta-btn:hover {
    background-color: #c82333; /* Darker red on hover */
    color: #fff;
    transform: translateY(-2px) scale(1.02);
    box-shadow: 0 5px 15px rgba(220, 53, 69, 0.4);
}

.dark-theme-cta-btn {
    background-color: #ff6b6b;
    color: #1c1c1c;
}
.dark-theme-cta-btn:hover {
    background-color: #ff4757;
    color: #000;
    box-shadow: 0 5px 15px rgba(255, 107, 107, 0.4);
}

/*
|--------------------------------------------------------------------------
| MODAL STYLES (READ MORE)
|--------------------------------------------------------------------------
*/

.modal-content {
    border-radius: 12px;
    transition: all 0.4s ease;
}

.modal-header {
    background-color: #dc3545;
    color: white;
    border-top-left-radius: 12px;
    border-top-right-radius: 12px;
    border-bottom: none;
}

.dark-theme-modal-header {
    background-color: #343a40; /* Darker header in dark mode */
    color: #f1f1f1;
    border-bottom: 1px solid #444;
}

.modal-body {
    background-color: white;
    color: #343a40;
    font-size: 1rem;
}

.dark-theme-modal-body {
    background-color: #2c2c2c;
    color: #f1f1f1;
}

.modal-body h3 {
    margin-top: 1.5rem;
    font-size: 1.5rem;
    border-bottom: 2px solid rgba(220, 53, 69, 0.5);
    padding-bottom: 5px;
}

.modal-body ul {
    padding-left: 20px;
}

.modal-body li {
    font-size: 1.1rem;
    margin-bottom: 8px;
    display: flex;
    align-items: flex-start;
}

.modal-body i {
    font-size: 1.2rem;
    margin-right: 10px;
    position: relative;
    top: 2px;
}

.modal-footer {
    background-color: #f8f9fa; /* Light footer */
    border-top: 1px solid #dee2e6;
    border-bottom-left-radius: 12px;
    border-bottom-right-radius: 12px;
}

.dark-theme-modal-footer {
    background-color: #2c2c2c;
    border-top: 1px solid #444;
}

.btn-close-white {
    filter: invert(1) brightness(200%);
}

.btn-secondary {
    background-color: #6c757d;
    border-color: #6c757d;
    color: white;
}

/*
|--------------------------------------------------------------------------
| RESPONSIVENESS
|--------------------------------------------------------------------------
*/
@media (max-width: 991px) {
    .display-4 {
        font-size: 2.5rem;
    }
    .sickle-video {
        padding-top: 30px; /* Add space on mobile/tablet */
    }
    .sickle-video iframe {
        height: 300px;
    }
}
</style>