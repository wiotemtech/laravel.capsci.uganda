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
            <div class="row align-items-center">
                <div class="col-md-6 sickle-text">
                    <h1
                        class="fw-bold"
                        :class="{ 'dark-theme-text': isDarkMode }"
                    >
                        Understanding Sickle Cell Disease
                    </h1>
                    <p
                        class="fw-bold-p"
                        :class="{ 'dark-theme-text': isDarkMode }"
                    >
                        Sickle Cell Disease (SCD) is a serious inherited blood
                        disorder that affects millions of people worldwide. It
                        mainly impacts red blood cells, which are responsible
                        for carrying oxygen throughout the body. Normally, these
                        cells are round and flexible, allowing them to move
                        smoothly through blood vessels. However, in people with
                        sickle cell disease, the red blood cells take on a
                        rigid, crescent (or sickle) shape. These abnormally
                        shaped cells can clump together, block blood flow, and
                        break down easily, leading to severe health problems.
                        <span
                            id="more-text"
                            style="display: none"
                            :class="{ 'dark-theme-text': isDarkMode }"
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
                        class="btn donate-btn"
                        :class="{ 'dark-theme-button': isDarkMode }"
                        :style="{
                            'background-color': isDarkMode ? '#333' : 'white',
                            color: isDarkMode ? '#eee' : 'red',
                            border: isDarkMode ? '1px solid #555' : 'none',
                        }"
                        data-bs-toggle="modal"
                        data-bs-target="#bliko"
                    >
                        Read More
                    </button>
                </div>

                <div
                    class="modal fade"
                    id="bliko"
                    tabindex="-1"
                    aria-labelledby="mymodalLabel"
                    aria-hidden="true"
                >
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div
                            class="modal-content"
                            :class="{ 'dark-theme-modal': isDarkMode }"
                        >
                            <div class="modal-header text-white">
                                <img
                                    src="/public/assets/images/logo1.png"
                                    alt="Logo"
                                    class="rounded-pill me-3"
                                    style="width: 50px; height: 50px"
                                />
                                <div>
                                    <h2>
                                        Understanding Sickle Cell Disease:
                                        Causes, Dangers, and Prevention
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

                            <div class="modal-body">
                                <p
                                    style="font-size: 18px"
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

                                <h1 :class="{ 'dark-theme-text': isDarkMode }">
                                    What Causes Sickle Cell Disease?
                                </h1>
                                <p
                                    style="font-size: 18px"
                                    :class="{ 'dark-theme-text': isDarkMode }"
                                >
                                    SCD is caused by a genetic mutation that
                                    affects hemoglobin, the protein in red blood
                                    cells that carries oxygen. A person develops
                                    sickle cell disease if they inherit two
                                    copies of the sickle cell gene—one from each
                                    parent. If someone inherits just one copy of
                                    the gene, they have sickle cell trait,
                                    meaning they usually don’t have symptoms but
                                    can pass the gene to their children.
                                </p>

                                <h1 :class="{ 'dark-theme-text': isDarkMode }">
                                    Dangers of Sickle Cell Disease
                                </h1>
                                <ul :class="{ 'dark-theme-text': isDarkMode }">
                                    <li
                                        style="font-size: 18px"
                                        :class="{
                                            'dark-theme-text': isDarkMode,
                                        }"
                                    >
                                        Pain Crises: Episodes of severe pain due
                                        to blocked blood flow.
                                    </li>
                                    <li
                                        style="font-size: 18px"
                                        :class="{
                                            'dark-theme-text': isDarkMode,
                                        }"
                                    >
                                        Anemia: A shortage of red blood cells,
                                        leading to fatigue and weakness.
                                    </li>
                                    <li
                                        style="font-size: 18px"
                                        :class="{
                                            'dark-theme-text': isDarkMode,
                                        }"
                                    >
                                        Infections: Increased risk of bacterial
                                        infections due to weakened immunity.
                                    </li>
                                    <li
                                        style="font-size: 18px"
                                        :class="{
                                            'dark-theme-text': isDarkMode,
                                        }"
                                    >
                                        Infections: Increased risk of bacterial
                                        infections due to weakened immunity.
                                    </li>
                                    <li
                                        style="font-size: 18px"
                                        :class="{
                                            'dark-theme-text': isDarkMode,
                                        }"
                                    >
                                        Stroke: Blocked blood vessels can lead
                                        to strokes, especially in children.
                                    </li>
                                    <li
                                        style="font-size: 18px"
                                        :class="{
                                            'dark-theme-text': isDarkMode,
                                        }"
                                    >
                                        Organ Damage: Sickle cells can damage
                                        organs like the liver, heart, and
                                        kidneys over time.
                                    </li>
                                    <li
                                        style="font-size: 18px"
                                        :class="{
                                            'dark-theme-text': isDarkMode,
                                        }"
                                    >
                                        Delayed Growth: In children, the disease
                                        can slow down physical development and
                                        puberty
                                    </li>
                                </ul>

                                <h1 :class="{ 'dark-theme-text': isDarkMode }">
                                    How to Prevent and Manage Sickle Cell
                                    Disease
                                </h1>
                                <p
                                    style="font-size: 18px"
                                    :class="{ 'dark-theme-text': isDarkMode }"
                                >
                                    While there is no guaranteed way to prevent
                                    SCD in people already born with it, there
                                    are steps to reduce its impact and prevent
                                    complications:
                                </p>

                                <ul :class="{ 'dark-theme-text': isDarkMode }">
                                    <li
                                        style="font-size: 18px"
                                        :class="{
                                            'dark-theme-text': isDarkMode,
                                        }"
                                    >
                                        Genetic Counseling: If both parents
                                        carry the sickle cell gene, they should
                                        seek counseling before having children
                                        to understand the risks.
                                    </li>
                                    <li
                                        style="font-size: 18px"
                                        :class="{
                                            'dark-theme-text': isDarkMode,
                                        }"
                                    >
                                        Staying Hydrated: Drinking plenty of
                                        water helps keep blood cells flexible.
                                    </li>
                                    <li
                                        style="font-size: 18px"
                                        :class="{
                                            'dark-theme-text': isDarkMode,
                                        }"
                                    >
                                        Avoiding Extreme Temperatures: Cold
                                        weather or high heat can trigger pain
                                        crises.
                                    </li>
                                    <li
                                        style="font-size: 18px"
                                        :class="{
                                            'dark-theme-text': isDarkMode,
                                        }"
                                    >
                                        Healthy Diet & Supplements: Eating a
                                        balanced diet and taking folic acid can
                                        support red blood cell production.
                                    </li>
                                    <li
                                        style="font-size: 18px"
                                        :class="{
                                            'dark-theme-text': isDarkMode,
                                        }"
                                    >
                                        Regular Medical Checkups: Routine visits
                                        help monitor and manage complications
                                        early.
                                    </li>
                                    <li
                                        style="font-size: 18px"
                                        :class="{
                                            'dark-theme-text': isDarkMode,
                                        }"
                                    >
                                        Regular Medical Checkups: Routine visits
                                        help monitor and manage complications
                                        early.
                                    </li>
                                    <li
                                        style="font-size: 18px"
                                        :class="{
                                            'dark-theme-text': isDarkMode,
                                        }"
                                    >
                                        Vaccinations & Antibiotics: Prevent
                                        infections, especially in children with
                                        weakened immune systems.
                                    </li>
                                    <li
                                        style="font-size: 18px"
                                        :class="{
                                            'dark-theme-text': isDarkMode,
                                        }"
                                    >
                                        Medications: Drugs like hydroxyurea help
                                        reduce pain crises and hospital visits.
                                    </li>
                                    <li
                                        style="font-size: 18px"
                                        :class="{
                                            'dark-theme-text': isDarkMode,
                                        }"
                                    >
                                        Bone Marrow Transplant: A potential cure
                                        for some patients, though it requires a
                                        suitable donor.
                                    </li>
                                </ul>

                                <h1 :class="{ 'dark-theme-text': isDarkMode }">
                                    Conclusion
                                </h1>
                                <p
                                    style="font-size: 18px"
                                    :class="{ 'dark-theme-text': isDarkMode }"
                                >
                                    Sickle cell disease is a lifelong condition,
                                    but with the right care and lifestyle
                                    adjustments, people with SCD can lead
                                    healthier lives. Raising awareness and
                                    supporting research efforts can improve
                                    treatment options and bring hope for a cure.
                                </p>
                            </div>

                            <div class="modal-footer">
                                <button
                                    type="button"
                                    class="btn"
                                    data-bs-dismiss="modal"
                                >
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 sickle-video">
                    <iframe
                        width="695"
                        height="315"
                        src="https://www.youtube.com/embed/RpvxJmduC7w"
                        title="UHURU SICKLE CELL RUN: COUPLES RALLIED TO DO PRE-MARITAL CHECKS TO FIGHT SICKLE CELL DISEASE"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allowfullscreen
                        style="
                            border-radius: 10px;
                            transition: transform 0.3s ease-in-out;
                        "
                    ></iframe>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
.footer-section {
    background-color: white;
    color: #fff;
    transition:
        background-color 0.3s ease,
        color 0.3s ease;
}

body.dark-theme-body .sickle-section {
    background-color: #222;
    color: whitesmoke;
}

.fw-bold {
    font-family: "poppins", sans-serif;
    font-size: 30px;
}

.fw-bold-p {
    font-family: "poppins", sans-serif;
    font-size: 18px;
}

.sickle-section {
    margin-top: -5px;
    padding: 60px 0;
    background-color: red;
    color: white;
    transition:
        background-color 0.3s ease,
        color 0.3s ease;
}

.dark-theme-section {
    background-color: red;
    color: #eee;
}

.dark-theme-text {
    color: #eee;
}

.sickle-text {
    animation: fadeInLeft 1.5s ease-in-out;
}

.sickle-video {
    animation: fadeInRight 1.5s ease-in-out;
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

.sickle-video iframe {
    width: 100%;
    border-radius: 10px;
    transition: transform 0.3s ease-in-out;
}

.sickle-video iframe:hover {
    transform: scale(1.05);
}

.donate-btn {
    background-color: white;
    color: red;
    border: none;
    padding: 12px 24px;
    font-size: 16px;
    font-weight: bold;
    border-radius: 8px;
    margin-top: 20px;
    transition: all 0.3s ease;
    text-decoration: none;
    display: inline-block;
}

.donate-btn:hover {
    background-color: #ff1a1a;
    color: #fff;
    transform: scale(1.1);
}

.modal-header {
    background-color: red;
    color: white;
    transition: background-color 0.3s ease;
}

h1,
h2 {
    font-size: 23px;
}

body.dark-theme-body .modal-header {
    background-color: #324150;
    color: whitesmoke;
}

body.dark-theme-body h1 {
    color: red;
}

body.dark-theme-body h2 {
    color: white;
}

.modal-body {
    background-color: #324150;
    color: whitesmoke;
    transition:
        background-color 0.3s ease,
        color 0.3s ease;
}

body.dark-theme-body .modal-body {
    background-color: #222;
    color: whitesmoke;
}

.modal-footer {
    background-color: red;
    transition: background-color 0.3s ease;
}

body.dark-theme-body .modal-footer {
    background-color: #324150;
    color: white;
}

.btn {
    color: white;
}

body.dark-theme-body .btn {
    color: white;
}

.btn-close-white {
    filter: invert(1);
}

.modal-content {
    transition:
        background-color 0.3s ease,
        color 0.3s ease;
}

@media (max-width: 767px) {
    .sickle-video {
        padding-top: 20px;
    }
}
</style>
