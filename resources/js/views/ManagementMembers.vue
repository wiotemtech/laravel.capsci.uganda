<script>
export default {
    data() {
        return {
            isDarkMode: false,
            socialIcons: [
                "fab fa-facebook",
                "fab fa-twitter",
                "fab fa-linkedin",
            ],
            boardMembers: [
                {
                    name: "Mr Daniel Roy Odur",
                    title: "Executive Director",
                    bio: `A dedicated advocate for sickle cell, a skilled public health specialist, and a professional
                        focused on people's needs,he have achieved significant success in initiating, promoting,
                        coordinating, and leading a wide
                        range of strategic development programs to foster patient care and advocacy.

                        As a resourceful leader, he has played a crucial role in monitoring project progress and
                        evaluating the successful achievement of both short and long-term goals, utilizing appropriate
                        tools and techniques. His track record demonstrates the implementation of effective strategies
                        based on resource allocation, budget forecasting, and the timely delivery of high-quality
                        project outcomes that align with established business standards.

                        He excels in mentoring teams to reach their objectives, whether it be ensuring client
                        satisfaction, enhancing revenue, creating value, or achieving operational excellence.
                        Additionally, he possess strong capabilities in hiring staff, crafting proposals, and organizing
                        events, while proactively anticipating and troubleshooting complex issues through the
                        implementation of innovative initiatives.

                        Remaining up-to-date with patient and caregivers plights and effectively communicating
                        expectations to key stakeholders are among his proficiencies.`,
                    image: "/assets/images/Alex Riolexus Ario.jeg",
                    modalId: "#bioModal1",
                    modalLabelId: "bioModal1Label",
                    cardClass: "top",
                    cardId: "card1",
                    nameStyle: {},
                },
                {
                    name: "Ms.Kukunda Blessing",
                    title: "Deputy ED",
                    bio: `
                Kukunda Blessing, a professional social worker, obtained her bachelor's

                        degree in 2012. She is dedicated to community advocacy, conducting
                        outreaches, and offering social support. She is particularly
                        enthusiastic about raising awareness for Sickle Cell disease.

                        As the Director of Greendoor Supplies Uganda Limited, an agro
                        business company, she is committed to supporting community

                        development by enhancing the value of locally grown fruits
                        to produce top-quality organic juices and wines. This commitment
                        is demonstrated through providing market access to farmers, creating
                        job opportunities, and offering social support.`,
                    image: "/assets/images/Diana Antonia Rutebarika.jpeg",
                    modalId: "#bioModal2",
                    modalLabelId: "bioModal2Label",
                    cardClass: "right",
                    cardId: "card2",
                    nameStyle: {},
                },
                {
                    name: "Mr. Akar Allan Solomon",
                    title: "Finance & Admin Office",
                    bio: "Accountant",
                    image: "/assets/images/Namutebi Ritah.jeg",
                    modalId: "#bioModal3",
                    modalLabelId: "bioModal3Label",
                    cardClass: "bottom",
                    cardId: "card3",
                    nameStyle: {},
                },
                {
                    name: "Dr.Okaka Daniel",
                    title: "Outreach Officer",
                    bio: "Medical Officer",
                    image: "/assets/images/logo1.png",
                    modalId: "#bioModal4",
                    modalLabelId: "bioModal4Label",
                    cardClass: "left",
                    cardId: "card4",
                    nameStyle: {},
                },
                {
                    name: "Mr.Ococ Innocent",
                    title: "Laboratory Assistant",
                    bio: "Laboratory Technician attached to Lira Regional Referral Hospital",
                    image: "/assets/images/logo1.png",
                    modalId: "#bioModal5",
                    modalLabelId: "bioModal5Label",
                    cardClass: "right",
                    cardId: "card5",
                    nameStyle: {},
                },
                {
                    name: "Ms.Achola Mercy",
                    title: "Counsellor",
                    bio: "A dedicated Counselor, she is offered customized Counseling services to a number of sickle cell warriors across the country, including Lira Regional Referral Hospital",
                    image: "/assets/images/logo1.png",
                    modalId: "#bioModal6",
                    modalLabelId: "bioModal6Label",
                    cardClass: "top",
                    cardId: "card6",
                    nameStyle: { color: "gray" },
                },
                {
                    name: "Mr.Okello Robert Hosea",
                    title: "Community Engagement Officer",
                    bio: "Community Psychologist",
                    image: "/assets/images/logo1.png",
                    modalId: "#bioModal7",
                    modalLabelId: "bioModal7Label",
                    cardClass: "top",
                    cardId: "card7",
                    nameStyle: { color: "gray" },
                },
                {
                    name: "Mr.Obluk David",
                    title: "Head of Quality Assurance",
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
};
</script>

<template>
    <div class="main-content">
        <!-- Landing Section -->
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

        <!-- Board Members Section -->
        <section
            :class="{ 'dark-theme-events': isDarkMode }"
            class="container team-section"
        >
            <h2 class="text-center mb-4 section-heading">
                THE MANAGEMENT TEAM
            </h2>
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

        <!-- Modal Templates -->
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
</style>
