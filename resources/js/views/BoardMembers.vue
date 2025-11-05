<template>
    <div>
        <section
            :class="{ 'dark-theme-events': isDarkMode }"
            style="background-image: url(&quot;/assets/images/11.jpg&quot;)"
            class="landing-section"
        >
            <div class="overlay"></div>
            <div class="landing-content">
                <h1>/ Our Team</h1>

                <h1>Welcome to our Team page</h1>
            </div>
        </section>

        <section class="team-section">
            <h2>Meet Our Team</h2>
            <p>
                Dedicated professionals working together to achieve excellence.
            </p>

            <div class="team-view-toggle">
                <button
                    :class="{ active: currentView === 'Board' }"
                    @click="toggleView('Board')"
                >
                    Board Members
                </button>
                <button
                    :class="{ active: currentView === 'Management' }"
                    @click="toggleView('Management')"
                >
                    Management Team
                </button>
            </div>

            <div class="team-cards">
                <div
                    class="team-card"
                    v-for="member in displayedMembers"
                    :key="member.id"
                    data-aos="fade-up"
                    :data-aos-delay="member.aosDelay"
                >
                    <img :src="member.image" :alt="member.name" />
                    <h3>{{ member.name }}</h3>
                    <p>{{ member.title }}</p>
                    <div class="social-icons">
                        <a
                            v-if="member.social.linkedin"
                            :href="member.social.linkedin"
                            target="_blank"
                            ><i class="fab fa-linkedin-in"></i
                        ></a>
                        <a
                            v-if="member.social.twitter"
                            :href="member.social.twitter"
                            target="_blank"
                            ><i class="fab fa-twitter"></i
                        ></a>
                        <a
                            v-if="member.social.facebook"
                            :href="member.social.facebook"
                            target="_blank"
                            ><i class="fab fa-facebook-f"></i
                        ></a>

                        <a
                            v-if="member.social.instagram"
                            :href="member.social.instagram"
                            target="_blank"
                            ><i class="fab fa-instagram"></i
                        ></a>
                        <a
                            v-if="member.social.github"
                            :href="member.social.github"
                            target="_blank"
                            ><i class="fab fa-github"></i
                        ></a>
                    </div>
                    <button class="view-profile-btn" @click="openModal(member)">
                        View Profile
                    </button>
                </div>
            </div>

            <div v-if="isModalOpen" class="modal" @click.self="closeModal">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2>{{ selectedMember.name }}</h2>
                        <span class="close" @click="closeModal">&times;</span>
                    </div>
                    <div class="modal-body">
                        <p>{{ selectedMember.bio }}</p>
                    </div>
                    <div class="modal-footer">
                        <button class="close-modal-btn" @click="closeModal">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script setup>
import { ref, onMounted, computed } from "vue";
import AOS from "aos";
import "aos/dist/aos.css";

const boardMembers = ref([
    {
        id: 1,
        name: "Dr. Alex Riolexus Ario",
        title: "Board Chairperson",
        image: "/assets/images/robert.png",
        bio: `Dr. Alex Riolexus Ario, MD, PhD, is a Medical Doctor and Public Health Specialist with extensive knowledge in epidemiology, health policy, management and planning, health systems reform and quality improvement models for health service delivery. He's the Director of Public Health Institute of Uganda.`,
        social: {
            linkedin: "",
            twitter: "#",
            facebook: "https://www.facebook.com/robertrapsy.ogwang",
            instagram:
                "https://www.instagram.com/rapsyrobert?igsh=YzljYTk1ODg3Zg==",
        },
        aosDelay: 0,
    },
    {
        id: 2,
        name: "Dr. Diana Antonia Rutebarika",
        title: "Vice Chairperson",
        image: "/assets/images/bara.jpg",
        bio: `Vice Chairperson Of the Board. Diana Rutebarika is the Head of Paediatrics at Joint Clinical Research Centre. Attained her bachelor's degree from Makerere University; postgraduate Paediatric studies from Sydney (Children’s Hospital at Westmead)...`,
        social: {
            linkedin:
                "https://www.linkedin.com/in/babra-adiama-akello?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app",
            twitter: "#",
            facebook: "https://www.facebook.com/adiama.babra.39",
            instagram:
                "https://www.instagram.com/babra.adiama?igsh=YzljYTk1ODg3Zg==",
        },
        aosDelay: 100,
    },
    {
        id: 3,
        name: "Ms. Namutebi Ritah",
        title: "Board Secretary",
        image: "/assets/images/jas.jpg",
        bio: `Board Secretary. Ritah holds a degree in Actuarial Science and a Post-Graduate Diploma in Project Planning and Management...`,
        social: {
            linkedin:
                "https://www.linkedin.com/in/jaspher-ekwire-3a9a34170?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app",
            twitter: "#",
            facebook: "https://www.facebook.com/share/18eWKhnbCL/",
            instagram:
                "https://www.instagram.com/ekwirej?igsh=YzljYTk1ODg3Zg==",
        },
        aosDelay: 200,
    },
    {
        id: 4,
        name: "Mr. Justine Okodi",
        title: "Board Treasurer",
        image: "/assets/images/christine.png",
        bio: `Justine Okodi serves as the Board Treasurer, bringing a wealth of financial and governance expertise to the team.`,
        social: {
            linkedin: "#",
            twitter: "#",
            facebook: "#",
            instagram: "#",
        },
        aosDelay: 300,
    },
    {
        id: 5,
        name: "Ms. Odongo Harriet Namissi",
        title: "Board Member",
        image: "/assets/images/omia.jpg",
        bio: `Harriet Namissi is a valued Board Member, dedicated to guiding the organization's strategic direction.`,
        social: {
            linkedin: "#",
            twitter: "#",
            facebook: "#",
            instagram: "#",
        },
        aosDelay: 400,
    },
    {
        id: 6,
        name: "Mr. Odur Daniel Roy",
        title: "Board Member",
        image: "/assets/images/emma.jpg",
        bio: `Daniel Roy Odur contributes his extensive experience as an active Board Member.`,
        social: {
            linkedin:
                "https://www.linkedin.com/in/emma-louise-smith-4b90a8209?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app",
            twitter: "#",
            facebook: "https://www.facebook.com/emilou.smith.9",
            instagram:
                "https://www.instagram.com/3mmalouise_smith?igsh=YzljYTk1ODg3Zg==",
        },
        aosDelay: 500,
    },

    {
        id: 6,
        name: "Dr.Odur Andrew",
        title: "Technical Advisor (Board)",
        image: "/assets/images/emma.jpg",
        bio: `Daniel Roy Odur contributes his extensive experience as an active Board Member.`,
        social: {
            linkedin:
                "https://www.linkedin.com/in/emma-louise-smith-4b90a8209?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app",
            twitter: "#",
            facebook: "https://www.facebook.com/emilou.smith.9",
            instagram:
                "https://www.instagram.com/3mmalouise_smith?igsh=YzljYTk1ODg3Zg==",
        },
        aosDelay: 500,
    },
    {
        id: 7,
        name: "Dr. Deogratias Munube",
        title: "Board Member",
        image: "/assets/images/abura.png",
        bio: `Dr. Deogratias Munube is a dedicated Board Member who brings clinical expertise and a deep understanding of public health challenges.`,
        social: {
            linkedin:
                "https://www.linkedin.com/in/brian-abura-oringo-05576824b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app",
            twitter: "#",
            facebook: "https://www.facebook.com/profile.php?id=61574882170431",
            instagram: "#",
        },
        aosDelay: 600,
    },
]);

const managementTeam = ref([
    {
        id: 8,
        name: "Mr.Daniel Roy Odur",
        title: "Executive Director",
        image: "/assets/images/alfred.jpg",
        bio: `Executive Director
A dedicated advocate for sickle cell, a skilled public health specialist, and a professional focused on people's needs, he has achieved significant success in initiating, promoting, coordinating, and leading a wide range of strategic development programs to foster patient care and advocacy... [truncated for brevity]`,
        social: {
            linkedin: "#",
            twitter: "#",
            facebook: "#",
            instagram: "#",
        },
        aosDelay: 0,
    },

    {
        id: 9,
        name: "Ms.Kukunda Blessing",
        title: "Deputy ED",
        image: "/assets/images/jane.png",
        bio: `
Deputy ED
Kukunda Blessing, a professional social worker... [truncated for brevity]`,
        social: {
            linkedin: "#",
            twitter: "#",
            facebook: "#",
            instagram: "#",
        },
        aosDelay: 100,
    },
    {
        id: 8,
        name: "Mr. Akar Allan Solomon",
        title: "Finance & Admin Office",
        image: "/assets/images/alfred.jpg",
        bio: ` Finance & Admin Office
Accountant`,
        social: {
            linkedin: "#",
            twitter: "#",
            facebook: "#",
            instagram: "#",
        },
        aosDelay: 0,
    },
    {
        id: 8,
        name: "Dr.Okaka Daniel",
        title: "Outreach Officer",
        image: "/assets/images/alfred.jpg",
        bio: ``,
        social: {
            linkedin: "#",
            twitter: "#",
            facebook: "#",
            instagram: "#",
        },
        aosDelay: 0,
    },
    {
        id: 8,
        name: "Mr.Ococ Innocent",
        title: "Laboratory Assistant",
        image: "/assets/images/alfred.jpg",
        bio: ``,
        social: {
            linkedin: "#",
            twitter: "#",
            facebook: "#",
            instagram: "#",
        },
        aosDelay: 0,
    },
    {
        id: 8,
        name: "Ms.Achola Mercy",
        title: "Counsellor",
        image: "/assets/images/alfred.jpg",
        bio: ``,
        social: {
            linkedin: "#",
            twitter: "#",
            facebook: "#",
            instagram: "#",
        },
        aosDelay: 0,
    },
    {
        id: 8,
        name: "Mr.Okello Robert Hosea",
        title: "Community Engagement Officer",
        image: "/assets/images/alfred.jpg",
        bio: ``,
        social: {
            linkedin: "#",
            twitter: "#",
            facebook: "#",
            instagram: "#",
        },
        aosDelay: 0,
    },
    {
        id: 8,
        name: "Mr.Obluk David",
        title: "Head of Quality Assurance",
        image: "/assets/images/alfred.jpg",
        bio: ``,
        social: {
            linkedin: "#",
            twitter: "#",
            facebook: "#",
            instagram: "#",
        },
        aosDelay: 0,
    },
]);

const currentView = ref("Board");

const toggleView = (view) => {
    currentView.value = view;

    AOS.refreshHard();
};

const displayedMembers = computed(() => {
    return currentView.value === "Board"
        ? boardMembers.value
        : managementTeam.value;
});

const isModalOpen = ref(false);
const selectedMember = ref({});

const openModal = (member) => {
    selectedMember.value = member;
    isModalOpen.value = true;
};

const closeModal = () => {
    isModalOpen.value = false;
    selectedMember.value = {};
};

onMounted(() => {
    AOS.init({
        duration: 1000,
        once: true,
    });
});
</script>

<style scoped>
.team-view-toggle {
    margin: 40px auto;
    display: flex;
    justify-content: center;
    gap: 15px;
}

.team-view-toggle button {
    padding: 10px 20px;
    font-size: 1em;
    font-weight: bold;
    color: rgba(128, 0, 0, 0.8);
    background-color: white;
    border: 2px solid rgba(128, 0, 0, 0.8);
    border-radius: 25px;
    cursor: pointer;
    transition: all 0.3s ease;
}

body.dark-theme-body .team-view-toggle button {
    background-color: #333;
    color: #eee;
    border-color: #eee;
}

.team-view-toggle button:hover {
    background-color: rgba(128, 0, 0, 0.8);
    color: white;
    box-shadow: 0 4px 8px rgba(35, 86, 32, 0.3);
}

.team-view-toggle button.active {
    background-color: rgba(128, 0, 0, 0.8);
    color: white;
    box-shadow: 0 4px 8px rgba(35, 86, 32, 0.4);
    transform: translateY(-1px);
}

body.dark-theme-body .team-view-toggle button.active {
    background-color: rgba(128, 0, 0, 0.8);
    color: white;
    border-color: rgba(128, 0, 0, 0.8);
}

@media (max-width: 600px) {
    .team-view-toggle {
        flex-direction: column;
        gap: 10px;
    }
    .team-view-toggle button {
        width: 100%;
        max-width: 300px;
        margin: 0 auto;
    }
}

.landing-section {
    position: relative;
    background-size: cover;
    background-position: center;
    height: 65vh;
    display: flex;
    align-items: center;
    justify-content: flex-start; /* Aligns content to the start (left) */
    margin-bottom: 10px;
    margin-top: -30px;
    animation: fadeIn 1.5s ease-in;
    padding-left: 5%;
    overflow: hidden;
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
    animation: zoomInOut 15s infinite alternate ease-in-out;
}

@keyframes zoomInOut {
    0% {
        transform: scale(1);
    }
    100% {
        transform: scale(1.1);
    }
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

.landing-content {
    position: relative;
    z-index: 2;
    color: #fff;
    padding-top: 130px;
    text-align: left;
    max-width: 800px;
}

.landing-content h1 {
    font-size: 40px;
    font-weight: bold;
    animation: slideDown 1s ease;
}

.landing-content p {
    font-size: 30px;
    font-weight: bold;
    margin-top: 15px;
    padding-left: 15px;
    border-left: red;
    line-height: 1.6;
}

.tagline {
    font-weight: bold;
    font-size: 20px;
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

body.dark-theme-body .main-content2 {
    background-color: #222;
}

.team-section {
    margin-top: 20px;
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
    padding: 0 20px;
    text-align: center;
}

.team-section h2 {
    font-size: 30px;
    font-weight: bold;
    margin-top: 30px;
    margin-bottom: 8px;
    color: rgba(128, 0, 0, 0.8);
}

body.dark-theme-body .team-section h2 {
    color: white;
}

.team-section p {
    font-size: 1.1em;
    margin-bottom: 40px;
    color: #555;
}

body.dark-theme-body .team-section p {
    color: white;
}

.team-cards {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}

.team-card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 250px;
    padding: 20px;
    transition: transform 0.3s;
    margin-bottom: 50px;

    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

body.dark-theme-body .team-card {
    background-color: #222;
    border: 1px solid #235620;
}

.team-card:hover {
    transform: translateY(-5px);
}

.team-card img {
    border-radius: 50%;
    width: 100px;
    height: 100px;
    padding-left: 1px;
    object-fit: cover;
    margin-bottom: 15px;
}

.team-card h3 {
    margin: 10px 0 5px;
    font-size: 1.2em;
}

.team-card p {
    font-size: 0.9em;
    color: #777;
    margin-bottom: 15px;
}

.social-icons {
    margin-bottom: 15px;
}

.social-icons a {
    margin: 0 5px;
    color: rgba(128, 0, 0, 0.8);
    text-decoration: none;
    font-size: 1.2em;
    transition: color 0.3s;
}

body.dark-theme-body .social-icons a {
    color: white;
}

.social-icons a:hover {
    color: blue;
}

.view-profile-btn {
    margin-top: auto;
    padding: 8px 16px;
    background-color: rgba(128, 0, 0, 0.8);
    font-weight: bold;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.view-profile-btn:hover {
    border: 1px solid rgba(128, 0, 0, 0.8);
    background-color: white;
    color: rgba(128, 0, 0, 0.8);
}

/* MODAL STYLES */
.modal {
    display: flex;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.6);
    align-items: center;
    justify-content: center;
    padding: 10px;
    box-sizing: border-box;
}

.modal-content {
    background-color: #ecfdf5;
    border-radius: 10px;
    width: 80%;
    max-width: 500px;
    position: relative;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    display: flex;
    flex-direction: column;
    max-height: 90vh;
    overflow: hidden;
}

body.dark-theme-body .modal-content {
    background-color: #222;
    color: white;
}

.modal-header {
    padding: 15px 20px;
    border-bottom: 1px solid #eee;
    display: flex;
    color: white;
    justify-content: space-between;
    align-items: center;
    background-color: rgba(128, 0, 0, 0.8);
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

body.dark-theme-body .modal-header {
    background-color: rgba(128, 0, 0, 0.8);
}

.modal-header h2 {
    margin: 0;
    font-size: 1.4em;
    color: white;
}

body.dark-theme-body .modal-header h2 {
    color: #eee;
}

.close {
    color: #aaa;
    font-size: 32px;
    font-weight: bold;
    cursor: pointer;
    line-height: 1;
    padding: 5px;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
}

body.dark-theme-body .close {
    color: #ccc;
}

body.dark-theme-body .close:hover,
body.dark-theme-body .close:focus {
    color: #fff;
}

.modal-body {
    padding: 20px;
    flex-grow: 1;
    overflow-y: auto;
    font-size: 1em;
    line-height: 1.6;
    color: #333;
}

body.dark-theme-body .modal-body {
    color: #eee;
}

.modal-footer {
    padding: 15px 20px;
    border-top: 1px solid #eee;
    text-align: right;
    background-color: #f7f7f7;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
}

body.dark-theme-body .modal-footer {
    background-color: white;
    border-top: 1px solid #666;
}

.close-modal-btn {
    padding: 10px 20px;
    background-color: rgba(128, 0, 0, 0.8);
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1em;
    transition: background-color 0.3s ease;
}

.close-modal-btn:hover {
    background-color: rgba(128, 0, 0, 0.8);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .landing-content h1 {
        font-size: 32px;
    }

    .team-card {
        width: 100%;
        max-width: 300px;
    }

    .modal-content {
        width: 95%;
        margin: 0 10px;
    }

    .landing-section {
        padding-left: 20px;
    }

    .landing-content p {
        font-size: 1.1em;
        padding-left: 10px;
        border-left-width: 3px;
    }
}

@media (max-width: 480px) {
    .landing-section {
        height: 40vh;
        padding-left: 15px;
    }

    .landing-content h1 {
        font-size: 24px;
    }

    .landing-content p {
        font-size: 1em;
        padding-left: 8px;
        border-left-width: 2px;
    }

    .team-section {
        padding: 0 15px;
    }

    .team-section h2 {
        font-size: 26px;
    }

    .team-section p {
        font-size: 1em;
    }

    .team-card {
        padding: 15px;
    }

    .team-card img {
        width: 80px;
        height: 80px;
    }

    .modal-header h2 {
        font-size: 1.2em;
    }

    .modal-body {
        font-size: 0.9em;
    }

    .close {
        font-size: 28px;
    }
}
</style>
