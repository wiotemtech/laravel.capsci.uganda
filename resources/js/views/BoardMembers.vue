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
                    bio: `
                Diana Rutebarika is the Head of Paediatrics at Joint Clinical Research Centre. Attained her bachelors degree from Makerere University;post graduate Paediatric studies from Sydney(Children’s Hospital at Westead). She is a highly skilled and compassionate paediatrician dedicated to the health and well-being of children. Dr. Diana has earned a stellar reputation for her expertise in paediatrics as a clinician and researcher in the field of Infectious diseases and non-infectious diseases (Allergy, Childhood Hypertension and Sickle Cell Anemia ). In addition to providing outstanding primary care for children, Dr.Diana is actively involved in community outreach programs, advocacy and promotion of child health and safety. Her dedication to the well-being of young people and their families has made her a trusted figure in the field of paediatrics and a valuable addition to the management team at the JCRC-department of Paediatrics`,
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
                    bio: "Ritah holds a degree in Actuarial Science and a Post-Graduate Diploma in Project Planning and Management. She brings over ten years of experience in coordinating the engagement, recruitment, and growth from a number of Non Profit organizations. As the Board Secretary CAPSCI, Ritah has demonstrated her exceptional organizational and leadership skills. notably as the note-taker during board meetings, ensuring accurate and timely documentation. Ritah excels in planning, coordinating, and executing quaterly CAPSCI member networking events. Through this, she has established multi-sectoral partnerships and collaborations that provide synergies for resource mobilization in the health sector.",
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
};
</script>

<template>
    <div class="main-content">
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
</style>
