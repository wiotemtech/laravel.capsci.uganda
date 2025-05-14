<script>
export default {
    name: "ServicesSection",
    props: {
        isDarkMode: Boolean,
    },
};
</script>

<template>
    <section
        class="ercdv-services"
        :class="{ 'dark-theme-service': isDarkMode }"
    >
        <h1 :class="{ 'dark-theme-service': isDarkMode }">What We Do</h1>
        <div
            class="ercdv-container"
            :class="{ 'dark-theme-service': isDarkMode }"
        >
            <div
                class="ercdv-service-grid"
                :class="{ 'dark-theme-service': isDarkMode }"
            >
                <div
                    class="ercdv-service-card"
                    :class="{ 'dark-theme-service': isDarkMode }"
                >
                    <i class="fas fa-book"></i>
                    <h3 :class="{ 'dark-theme-service': isDarkMode }">
                        Counseling
                    </h3>
                    <p :class="{ 'dark-theme-service': isDarkMode }">
                        We provide genetic counseling, testing services, and
                        family counseling.
                    </p>
                </div>
                <div
                    class="ercdv-service-card"
                    :class="{ 'dark-theme-service': isDarkMode }"
                >
                    <i class="fas fa-laptop-medical"></i>
                    <h3 :class="{ 'dark-theme-service': isDarkMode }">
                        Clinical Services
                    </h3>
                    <p :class="{ 'dark-theme-service': isDarkMode }">
                        We offer referrals to our warriors through partner
                        hospitals.
                    </p>
                </div>
                <div
                    class="ercdv-service-card"
                    :class="{ 'dark-theme-service': isDarkMode }"
                >
                    <i class="fas fa-users"></i>
                    <h3 :class="{ 'dark-theme-service': isDarkMode }">
                        Outreaches
                    </h3>
                    <p :class="{ 'dark-theme-service': isDarkMode }">
                        We conduct outreach programs to educate about SCD in
                        Uganda.
                    </p>
                </div>
                <div
                    class="ercdv-service-card"
                    :class="{ 'dark-theme-service': isDarkMode }"
                >
                    <i class="fas fa-bullhorn"></i>
                    <h3 :class="{ 'dark-theme-service': isDarkMode }">
                        Advocacy
                    </h3>
                    <p :class="{ 'dark-theme-service': isDarkMode }">
                        We advocate for policy changes to improve the rights of
                        individuals with SCD.
                    </p>
                </div>
                <div
                    class="ercdv-service-card"
                    :class="{ 'dark-theme-service': isDarkMode }"
                >
                    <i class="fas fa-hands-helping"></i>
                    <h3 :class="{ 'dark-theme-service': isDarkMode }">
                        Capacity Building
                    </h3>
                    <p :class="{ 'dark-theme-service': isDarkMode }">
                        We collaborate with healthcare providers to improve SCD
                        management.
                    </p>
                </div>
                <div
                    class="ercdv-service-card"
                    :class="{ 'dark-theme-service': isDarkMode }"
                >
                    <i class="fas fa-flask"></i>
                    <h3 :class="{ 'dark-theme-service': isDarkMode }">
                        Research
                    </h3>
                    <p :class="{ 'dark-theme-service': isDarkMode }">
                        We conduct research on SCD to inform policy and improve
                        interventions.
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
.ercdv-services {
    text-align: center;
    margin-top: 0px;

    background: linear-gradient(to top, rgb(232, 167, 167), white);
    color: #fff;
    transition:
        background-color 0.3s ease,
        color 0.3s ease;
}

body.dark-theme-body .ercdv-services {
    background: linear-gradient(to top, #222, #222);
    color: red;
}

.ercdv-services h1 {
    font-size: 30px;
    font-family: "poppins", sans-serif;
    font-weight: bold;
    margin-bottom: 25px;
    color: red;
}
body.dark-theme-body .ercdv-services h1 {
    color: white;
}

.ercdv-container {
    max-width: 1000px;
    margin: auto;
    padding: 0 20px;
}

.ercdv-service-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    padding: 20px 0;
}

.ercdv-service-card {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: left;
    transition: transform 0.3s ease-in-out;
    height: 220px;
    overflow: hidden;
}

body.dark-theme-body .ercdv-service-card {
    background: linear-gradient(to top, #222, #222);
    border: 1px solid red;
    color: red;
}

.ercdv-service-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

.ercdv-service-card i {
    font-size: 2rem;
    color: red;
    margin-bottom: 10px;
    padding: 10px;
    border-radius: 50%;
    transition:
        transform 0.3s ease-in-out,
        background-color 0.3s ease-in-out;
}

.ercdv-service-card:hover i {
    transform: rotate(360deg);
    background-color: red;
    color: #fff;
}

.ercdv-service-card h3 {
    font-size: 20px;
    font-family: "poppins", sans-serif;
    color: black;
    margin-bottom: 8px;
}

body.dark-theme-body .ercdv-service-card h3 {
    background: linear-gradient(to top, #222, #222);

    color: whitesmoke;
}

.ercdv-service-card p {
    font-size: 16px;
    font-family: "poppins", sans-serif;
    color: #6c757d;
    line-height: 1.3;
}

body.dark-theme-body .ercdv-service-card p {
    color: white smoke;
}

@media (max-width: 600px) {
    .ercdv-services h1 {
        font-size: 1.8rem;
    }

    .ercdv-service-card {
        height: auto;
    }
}
</style>
