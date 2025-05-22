<script>
export default {
    data() {
        return {
            isDarkMode: false,
            showPopup: false,
            shownOnce: false,
            hideTimeout: null,
            reappearTimeout: null,
            socialIcons: [
                "fab fa-facebook",
                "fab fa-twitter",
                "fab fa-linkedin",
            ],
            boardMembers: [
                {
                    name: "Dr. Alex Riolexus Ario",
                    title: "Board Chairman",
                    bio: `MD, PhD, is a Medical Doctor and Public Health Specialist with extensive knowledge in epidemiology, health policy, management and planning, health systems reform and quality improvement models for health service delivery. He's the Director of Public Health Institute of Uganda`,
                    image: "/assets/images/Alex Riolexus Ario.jpeg",
                    modalId: "#bioModal1",
                    modalLabelId: "bioModal1Label",
                    cardClass: "top",
                    cardId: "card1",
                    nameStyle: {},
                },
                {
                    name: "Dr. Diana Antonia Rutebarika",
                    title: "Vice Chairperson Of the Board",
                    bio: `Diana Rutebarika is the Head of Paediatrics at Joint Clinical Research Centre. Attained her bachelor's degree from Makerere University; postgraduate Paediatric studies from Sydney (Children’s Hospital at Westmead)...`,
                    image: "/assets/images/Diana Antonia Rutebarika.jpeg",
                    modalId: "#bioModal2",
                    modalLabelId: "bioModal2Label",
                    cardClass: "right",
                    cardId: "card2",
                    nameStyle: {},
                },
                {
                    name: "Ms. Namutebi Ritah",
                    title: "Board Secretary",
                    bio: "Ritah holds a degree in Actuarial Science and a Post-Graduate Diploma in Project Planning and Management...",
                    image: "/assets/images/Namutebi Ritah.jpeg",
                    modalId: "#bioModal3",
                    modalLabelId: "bioModal3Label",
                    cardClass: "bottom",
                    cardId: "card3",
                    nameStyle: {},
                },
                {
                    name: "Mr. Justine Okodi",
                    title: "Board Treasurer",
                    bio: "",
                    image: "/assets/images/logo1.png",
                    modalId: "#bioModal4",
                    modalLabelId: "bioModal4Label",
                    cardClass: "left",
                    cardId: "card4",
                    nameStyle: {},
                },
                {
                    name: "Ms. Odongo Harriet Namissi",
                    title: "Board Member",
                    bio: "",
                    image: "/assets/images/logo1.png",
                    modalId: "#bioModal5",
                    modalLabelId: "bioModal5Label",
                    cardClass: "right",
                    cardId: "card5",
                    nameStyle: {},
                },
                {
                    name: "Mr. Odur Daniel Roy",
                    title: "Board Member",
                    bio: "",
                    image: "/assets/images/logo1.png",
                    modalId: "#bioModal6",
                    modalLabelId: "bioModal6Label",
                    cardClass: "top",
                    cardId: "card6",
                    nameStyle: { color: "gray" },
                },
                {
                    name: "Dr. Odur Andrew",
                    title: "Technical Advisor",
                    bio: "",
                    image: "/assets/images/logo1.png",
                    modalId: "#bioModal7",
                    modalLabelId: "bioModal7Label",
                    cardClass: "top",
                    cardId: "card7",
                    nameStyle: { color: "gray" },
                },
                {
                    name: "Dr. Deogratias Munube",
                    title: "Board Member",
                    bio: "",
                    image: "/assets/images/logo1.png",
                    modalId: "#bioModal8",
                    modalLabelId: "bioModal8Label",
                    cardClass: "top",
                    cardId: "card8",
                    nameStyle: {},
                },
            ],
        };
    },
    methods: {
        showTweet() {
            if (!this.shownOnce) {
                this.showPopup = true;
                this.shownOnce = true;

                this.hideTimeout = setTimeout(() => {
                    this.showPopup = false;

                    this.reappearTimeout = setTimeout(() => {
                        this.showPopup = true;
                    }, 10000);
                }, 10000);
            }
        },
        dismissPopup() {
            this.showPopup = false;
            clearTimeout(this.hideTimeout);
            clearTimeout(this.reappearTimeout);
        },
    },
    mounted() {
        setTimeout(this.showTweet, 5000);

        if (!window.twttr) {
            const twitterScript = document.createElement("script");
            twitterScript.setAttribute(
                "src",
                "https://platform.twitter.com/widgets.js",
            );
            twitterScript.setAttribute("async", "");
            twitterScript.setAttribute("charset", "utf-8");
            document.head.appendChild(twitterScript);
        } else if (
            window.twttr &&
            typeof window.twttr.widgets !== "undefined" &&
            typeof window.twttr.widgets.load === "function"
        ) {
            window.twttr.widgets.load();
        }
    },
    beforeUnmount() {
        clearTimeout(this.hideTimeout);
        clearTimeout(this.reappearTimeout);
    },
};
</script>

<template>
    <div class="main-content">
        <div class="tweet-container" :class="{ show: showPopup }">
            <h1 class="follow">follow us on x</h1>
            <button class="close-btn" @click="dismissPopup">×</button>
            <blockquote class="twitter-tweet" data-width="280">
                <p lang="en" dir="ltr">
                    Integrated Sickle Cell services!<br />
                    Residents of Ayago, Apoi Subcounty in Apac Dist have tuned
                    up for sickle cell traits screening; we have collaborated
                    with Ayago Health Centre II to screen for Malaria, HIV,
                    Sphilys, H.pylori, HepB, RBS, and Hypertension.
                    <a href="https://twitter.com/cphluganda?ref_src=twsrc%5Etfw"
                        >@cphluganda</a
                    >
                    <a
                        href="https://twitter.com/TestandTreat37?ref_src=twsrc%5Etfw"
                        >@TestandTreat37</a
                    >
                    <a href="https://t.co/1eAO3W8bIn"
                        >pic.twitter.com/1eAO3W8bIn</a
                    >
                </p>
                &mdash; Catherine Phil Sickle Cell Support Initiative
                (@UgandaSickle)
                <a
                    href="https://twitter.com/UgandaSickle/status/1885259581686706531?ref_src=twsrc%5Etfw"
                    >January 31, 2025</a
                >
            </blockquote>
        </div>
        <section
            :class="{ 'dark-theme-events': isDarkMode }"
            style="background-image: url(&quot;/assets/images/14.jpg&quot;)"
            class="landing-section"
        >
            <div class="overlay"></div>
            <div class="landing-content animated-text">
                <h1>Our Team</h1>
                <p class="subtitle">"Leave No One Behind"</p>
            </div>
        </section>

        <section
            :class="{ 'dark-theme-events': isDarkMode }"
            class="container team-section"
        >
            <h2 class="text-center mb-4 section-heading">OUR BOARD MEMBERS</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                <div
                    v-for="(member, index) in boardMembers"
                    :key="index"
                    class="col"
                    :style="{ animationDelay: `${index * 0.1}s` }"
                >
                    <div
                        class="card team-card shadow"
                        :class="member.cardClass"
                        :id="member.cardId"
                    >
                        <img
                            :src="member.image"
                            class="card-img-top mx-auto mt-4"
                            :alt="member.name"
                        />
                        <div class="card-body text-center">
                            <h5 class="card-title" :style="member.nameStyle">
                                {{ member.name }}
                            </h5>
                            <p class="card-text">{{ member.title }}</p>
                            <div class="social-icons mt-2">
                                <a
                                    v-for="icon in socialIcons"
                                    :key="icon"
                                    href="#"
                                    :class="icon"
                                    data-bs-toggle="tooltip"
                                    :title="icon.split('-')[2]"
                                ></a>
                            </div>
                            <button
                                class="btn-2 mt-3"
                                data-bs-toggle="modal"
                                :data-bs-target="member.modalId"
                            >
                                Learn More
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div
            v-for="(member, index) in boardMembers"
            :key="'modal' + index"
            class="modal fade"
            :id="member.modalId.replace('#', '')"
            tabindex="-1"
            aria-labelledby="member.modalLabelId"
            aria-hidden="true"
        >
            <div class="modal-dialog b">
                <div
                    :class="{ 'dark-theme-events': isDarkMode }"
                    class="modal-content"
                >
                    <div class="modal-header b">
                        <h5 class="modal-title" :id="member.modalLabelId">
                            {{ member.name }}
                        </h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div
                        :class="{ 'dark-theme-events': isDarkMode }"
                        class="modal-body"
                    >
                        <h6 class="mb-2">{{ member.title }}</h6>
                        <p>{{ member.bio }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.landing-section {
    position: relative;
    height: 40vh;
    background-size: cover;
    background-position: center;
    padding: 120px 0;
    text-align: center;
    color: white;
}
.overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.6);
}
.landing-content {
    position: relative;
    z-index: 1;
    padding-top: 70px;
    animation: slideUpFadeIn 2s ease forwards;
    opacity: 0;
}

.landing-content h1 {
    font-size: 40px;
    font-weight: bold;
    animation: slideDown 1s ease;
}
.subtitle {
    font-weight: bold;
    color: red;
    font-size: 20px;
}

@keyframes slideUpFadeIn {
    0% {
        transform: translateY(40px);
        opacity: 0;
    }
    100% {
        transform: translateY(0px);
        opacity: 1;
    }
}

@keyframes fadeUp {
    from {
        transform: translateY(30px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

body.dark-theme-body h2 {
    color: white;
}

.modal-header {
    background-color: red;
    color: white;
}

body.dark-theme-body .modal-header {
    background-color: #2c3e50;
    color: white;
}

body.dark-theme-body .modal-content {
    background-color: #222;
    color: white;
}

.team-section {
    padding: 60px 0;
}
.section-heading {
    font-weight: bold;
    font-size: 28px;
    color: #333;
}
.team-card {
    border: none;
    border-radius: 10px;

    overflow: hidden;
    background: #fff;
    animation: fadeUp 0.6s ease forwards;
    opacity: 0;
    transform: translateY(0);
    transition:
        transform 0.4s ease,
        box-shadow 0.4s ease;
}

body.dark-theme-body .team-card {
    background-color: #222;
    border: 1px solid red;
    color: white;
}
.team-card:hover {
    transform: translateY(-15px) scale(1.02);
    box-shadow: 0 16px 32px rgba(0, 0, 0, 0.2);
}
.card-img-top {
    max-width: 100px;
    height: 100px;
    object-fit: cover;
    border-radius: 50%;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}
.card-title {
    font-size: 18px;
    font-weight: bold;
    margin-top: 15px;
}
.card-text {
    font-size: 18px;
    color: #777;
}

.social-icons a {
    margin: 0 6px;
    color: black;
    font-size: 18px;
    text-decoration: none;
    transition: color 0.3s ease;
}

body.dark-theme-body .social-icons a {
    color: white;
}
.social-icons a:hover {
    color: #d9534f;
}

.btn-2 {
    color: black;
    border: 1px solid red;
    padding: 8px 20px;
    border-radius: 10px;
    font-weight: 600;
    transition: background-color 0.3s ease;
}

body.dark-theme-body .btn-2 {
    color: white;
}
.btn-2:hover {
    background-color: red;
    color: white;
}

.follow {
    font-size: 22px;
    text-align: center;
    color: black;
    margin-bottom: 10px;
}

.tweet-container {
    position: fixed;
    top: 15%;
    right: -100%;
    width: 320px;
    max-width: 90%;
    background-color: white;
    padding: 12px;
    border-radius: 12px 0 0 12px;
    z-index: 1000;
    transition: right 0.6s ease-in-out;
    box-shadow: 0 0 12px rgba(0, 0, 0, 0.3);
}

.tweet-container.show {
    right: 0;
}

.close-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    background-color: red;
    border: none;
    color: white;
    font-size: 20px;
    font-weight: bold;
    cursor: pointer;
    border-radius: 50%;
    width: 36px;
    height: 36px;
    line-height: 36px;
    text-align: center;
    padding: 0;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    transition: all 0.2s ease-in-out;
}

.close-btn:hover {
    background-color: red;
    transform: scale(1.1);
    box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
}

.close-btn:active {
    transform: scale(0.9);
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
}

@media (max-width: 600px) {
    .tweet-container {
        width: 90%;
        right: -100%;
        top: auto;
        bottom: 20px;
        padding-right: 30px;
        border-radius: 10px;
    }

    .tweet-container.show {
        right: 5%;
    }
}

.blog-content {
    padding: 20px;
}

.blog-content h1 {
    color: #007bff;
}

.blog-content p {
    line-height: 1.6;
}
</style>
