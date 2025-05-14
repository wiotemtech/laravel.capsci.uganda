<script>
export default {
    name: "AboutUs",
    props: {
        isDarkMode: Boolean,
    },
};
</script>

<template>
    <section class="aboutUs" :class="{ 'dark-theme-about': isDarkMode }">
        <h1 class="aboutus-h1" :class="{ 'dark-theme-about': isDarkMode }">
            About Us
        </h1>
        <div class="container" :class="{ 'dark-theme-about': isDarkMode }">
            <div class="row g-4" :class="{ 'dark-theme-about': isDarkMode }">
                <div
                    class="col-md-4"
                    :class="{ 'dark-theme-about': isDarkMode }"
                >
                    <div
                        class="about-box text-center"
                        :class="{ 'dark-theme-about': isDarkMode }"
                    >
                        <i
                            class="fas fa-bullseye about-icon"
                            :class="{ 'dark-theme-about': isDarkMode }"
                        ></i>
                        <h2
                            class="aboutus-h2"
                            :class="{ 'dark-theme-about': isDarkMode }"
                        >
                            Our Mission
                        </h2>
                        <p
                            style="font-size: 18px; text-align: left"
                            class="about-content"
                            :class="{ 'dark-theme-about': isDarkMode }"
                        >
                            Raising awareness, provide education, support
                            research efforts, improve access to healthcare
                            services, and advocate for policies that enhance the
                            quality of life for individuals living with sickle
                            cell disease on the continent. This mission
                            encompasses a holistic approach that addresses
                            various aspects of the disease, including medical
                            care, social support, community engagement, and
                            public health interventions.
                        </p>
                    </div>
                </div>

                <div
                    class="col-md-4"
                    :class="{ 'dark-theme-about': isDarkMode }"
                >
                    <div
                        class="about-box text-center"
                        :class="{ 'dark-theme-about': isDarkMode }"
                    >
                        <i
                            class="fas fa-eye about-icon"
                            :class="{ 'dark-theme-about': isDarkMode }"
                        ></i>
                        <h1
                            class="aboutus-h2"
                            :class="{ 'dark-theme-about': isDarkMode }"
                        >
                            Our Vision
                        </h1>
                        <p
                            style="font-size: 18px; text-align: left"
                            class="about-content"
                            :class="{ 'dark-theme-about': isDarkMode }"
                        >
                            To create a future where individuals affected by the
                            condition can live healthy and fulfilling lives.
                            This vision includes reducing the burden of sickle
                            cell disease through early detection, comprehensive
                            care management, genetic counseling, and
                            advancements in treatment options. Additionally, the
                            vision aims to promote a supportive environment that
                            empowers individuals with sickle cell disease to
                            thrive and contribute positively to society.
                        </p>
                    </div>
                </div>

                <div
                    class="col-md-4"
                    :class="{ 'dark-theme-about': isDarkMode }"
                >
                    <div
                        class="about-box text-center"
                        :class="{ 'dark-theme-about': isDarkMode }"
                    >
                        <i
                            class="fas fa-hand-holding-heart about-icon"
                            :class="{ 'dark-theme-about': isDarkMode }"
                        ></i>
                        <h2
                            class="aboutus-h2"
                            :class="{ 'dark-theme-about': isDarkMode }"
                        >
                            Our Motto
                        </h2>
                        <p
                            style="font-size: 18px; text-align: left"
                            class="about-content"
                            :class="{ 'dark-theme-about': isDarkMode }"
                        >
                            Empowering a comprehensive response to sickle cell
                            disease in Africa, through awareness creation,
                            education dissemination, research facilitation,
                            healthcare access enhancement, policy advocacy, and
                            holistic support, encompassing medical care, social
                            support, community engagement, and public health
                            interventions, to improve the quality of life for
                            individuals affected.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
#aboutUs {
    padding: 40px 0;
    overflow: hidden;
}

.aboutUs {
    background-color: white;
    color: #222;
    padding-bottom: 36px;
    padding-top: 36px;
    transition:
        background-color 0.3s ease,
        color 0.3s ease;
}

body.dark-theme-body .aboutUs {
    background-color: #222;
    color: red;
}

.aboutus-h1 {
    font-family: "poppins", sans-serif;
    font-size: 30px;
    font-weight: bold;
    padding-bottom: 22px;
    text-align: center;
    color: red;
}

body.dark-theme-body .aboutus-h1 {
    color: white;
}

.aboutus-h2 {
    font-family: "poppins", sans-serif;
    font-size: 22px;
    text-align: center;
    color: red;
    font-weight: bold;
}

body.dark-theme-body .aboutus-h2 {
    color: white;
}

.about-box {
    background: white;
    border-radius: 12px;
    padding: 15px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.15);
    transition:
        transform 0.3s ease-in-out,
        box-shadow 0.3s ease-in-out;
    position: relative;
    overflow: hidden;
    opacity: 0;
}

body.dark-theme-body .about-box {
    background-color: #222;
    border: 1px solid red;
    color: white;
}

.about-box::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 2px;
    top: 0;
    left: 0;
    background: red;
}

.about-icon {
    font-size: 35px;
    color: red;
    margin-bottom: 15px;
    transition: transform 0.3s ease-in-out;
}

.about-box:hover .about-icon {
    transform: scale(1.2);
}

.about-content {
    opacity: 0;
    transform: translateY(20px);
    transition:
        opacity 0.6s ease-in-out,
        transform 0.6s ease-in-out;
}

.about-box:hover .about-content {
    opacity: 1;
    transform: translateY(0);
}

h2 {
    font-weight: 700;
    margin-bottom: 15px;
}

.text-accent {
    color: red;
}

.text-highlight {
    color: red;
}

@keyframes slideInLeft {
    from {
        transform: translateX(-100%);
        opacity: 0;
    }

    to {
        transform: translateX(0);
        opacity: 1;
    }
}

@keyframes slideInTop {
    from {
        transform: translateY(-100%);
        opacity: 0;
    }

    to {
        transform: translateY(0);
        opacity: 1;
    }
}

@keyframes slideInRight {
    from {
        transform: translateX(100%);
        opacity: 0;
    }

    to {
        transform: translateX(0);
        opacity: 1;
    }
}

.col-md-4:nth-child(1) .about-box {
    animation: slideInLeft 1s ease-out forwards;
}

.col-md-4:nth-child(2) .about-box {
    animation: slideInTop 1s ease-out forwards;
}

.col-md-4:nth-child(3) .about-box {
    animation: slideInRight 1s ease-out forwards;
}
</style>
