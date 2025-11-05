<script>
import { ref } from 'vue';

export default {
    name: "HorizontalTabbedCard",
    props: {
        isDarkMode: Boolean,
    },
    setup() {
        const activeTab = ref('mission'); // State to track the currently active tab

        const tabs = ref([
            {
                id: 'mission',
                icon: 'fas fa-bullseye',
                title: 'Our Mission',
                content: "Raising awareness, providing education, supporting research efforts, improving access to healthcare services, and advocating for policies that enhance the quality of life for individuals living with sickle cell disease on the continent. This encompasses a holistic approach that addresses various aspects of the disease, including medical care, social support, community engagement, and public health interventions.",
            },
            {
                id: 'vision',
                icon: 'fas fa-eye',
                title: 'Our Vision',
                content: "To create a future where individuals affected by the condition can live healthy and fulfilling lives. This vision includes reducing the burden of sickle cell disease through early detection, comprehensive care management, genetic counseling, and advancements in treatment options. Additionally, the vision aims to promote a supportive environment that empowers individuals with sickle cell disease to thrive and contribute positively to society.",
            },
            {
                id: 'motto',
                icon: 'fas fa-hand-holding-heart',
                title: 'Our Motto',
                content: "Empowering a comprehensive response to sickle cell disease in Africa, through awareness creation, education dissemination, research facilitation, healthcare access enhancement, policy advocacy, and holistic support, encompassing medical care, social support, community engagement, and public health interventions, to improve the quality of life for individuals affected.",
            },
        ]);

        const setActiveTab = (tabId) => {
            activeTab.value = tabId;
        };

        const getCurrentContent = () => {
            const current = tabs.value.find(tab => tab.id === activeTab.value);
            return current ? current.content : 'Select a section to view details.';
        };

        return {
            tabs,
            activeTab,
            setActiveTab,
            getCurrentContent,
        };
    },
};
</script>

<template>
    <section class="tabbed-card-section py-5" :class="{ 'dark-mode-bg': isDarkMode }">
        <div class="container">
            <h1 
                class="text-center mb-5 card-section-title" 
                :class="{ 'text-white': isDarkMode }"
                data-aos="fade-up"
                data-aos-duration="800"
            >
            </h1>

            <div class="card horizontal-card shadow-lg" :class="{ 'dark-card': isDarkMode }">
                <div class="row g-0">
                    <div class="col-lg-7 p-4 card-left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
                        <h2 class="card-title-main">Explore Our Foundation</h2>
                        <p class="card-text-main">
                            Click on any of the buttons on the right to read more about our core principles. We are dedicated to a future free from the burden of sickle cell disease across Africa.
                        </p>
                        
                        <div class="content-display mt-4 p-3" :class="{ 'dark-content-display': isDarkMode }">
                            <Transition name="fade" mode="out-in">
                                <div :key="activeTab">
                                    <h3 class="active-tab-title">{{ tabs.find(t => t.id === activeTab).title }}</h3>
                                    <p class="active-tab-text">{{ getCurrentContent() }}</p>
                                </div>
                            </Transition>
                        </div>
                    </div>

                    <div class="col-lg-5 p-3 card-right" :class="{ 'dark-card-right': isDarkMode }" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                        <div class="d-flex flex-column h-100 justify-content-around">
                            <button
                                v-for="(tab, index) in tabs"
                                :key="tab.id"
                                :class="{ 'active': activeTab === tab.id }"
                                @click="setActiveTab(tab.id)"
                                class="btn tab-button mb-3 d-flex align-items-center"
                                :data-aos="activeTab === tab.id ? 'zoom-in' : 'fade-in'"
                                :data-aos-delay="400 + (index * 100)"
                            >
                                <i :class="[tab.icon, 'tab-icon me-3']"></i>
                                <span>{{ tab.title }}</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
/* --- Base Styling --- */
.tabbed-card-section {
    background-color: #f4f6f8;
    font-family: 'Poppins', sans-serif;
    position: relative;
    padding-top: 50px;
    padding-bottom: 50px;
}
.dark-mode-bg {
    background-color: #1e2a38;
}

.card-section-title {
    font-size: 2.8rem;
    font-weight: 800;
    
    color: red;
}
.dark-mode-bg .card-section-title {
    color: #f8f9fa;
}

/* --- Card Structure --- */
.horizontal-card {
    border-radius: 20px;
    background-color: #ffffff;
    border: none;
    overflow: hidden;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15); 
}
.dark-card {
    background-color: #2c3e50;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.4) !important;
}

.card-left {
    color: #343a40;
    border-right: 1px solid rgba(0, 0, 0, 0.05);
}
.dark-card .card-left {
    color: #f8f9fa;
    border-right: 1px solid rgba(255, 255, 255, 0.1);
}

.card-title-main {
    font-size: 2.2rem;
    font-weight: 700;
    color: #cc0000;
    margin-bottom: 15px;
}
.dark-card .card-title-main {
    color: #ff4d4d;
}

.card-text-main {
    font-size: 1.1rem;
    line-height: 1.7;
    color: #6c757d;
}
.dark-card .card-text-main {
    color: #adb5bd;
}

/* --- Button Side Styling --- */
.card-right {
    background-color:rgba(128, 0, 0, 0.8) ;
    border-radius: 0 20px 20px 0;
    padding: 20px 15px !important;
}
.dark-card-right {
    background: linear-gradient(145deg, #ff4d4d, #cc0000);
}

.tab-button {
    background-color: rgba(255, 255, 255, 0.15);
    color: #ffffff;
    border: none;
    padding: 18px 25px;
    font-size: 1.2rem;
    font-weight: 600;
    border-radius: 12px;
    transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    width: 100%;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    justify-content: flex-start;
}

.tab-button:hover:not(.active) {
    background-color: rgba(255, 255, 255, 0.3);
    transform: scale(1.02);
}

.tab-button.active {
    background-color: #ffffff;
    color: #cc0000;
    transform: scale(1.05);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
    font-weight: 700;
}

.dark-card-right .tab-button.active {
    color: #343a40;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.6);
}

.tab-icon {
    font-size: 1.8rem;
    transition: color 0.3s ease;
}

.tab-button.active .tab-icon {
    color: #cc0000;
}
.dark-card-right .tab-button.active .tab-icon {
    color: #ff4d4d;
}

/* --- Content Display Area --- */
.content-display {
    border-left: 6px solid #cc0000;
    background-color: #f8f9fa;
    border-radius: 8px;
    min-height: 180px;
    box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.05);
}
.dark-content-display {
    border-left-color: #ff4d4d;
    background-color: #34495e;
    box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.2);
}

.active-tab-title {
    font-size: 1.6rem;
    font-weight: 700;
    color: #343a40;
    margin-bottom: 5px;
}
.dark-content-display .active-tab-title {
    color: #f8f9fa;
}

.active-tab-text {
    font-size: 1.05rem;
    line-height: 1.6;
    color: #555;
}
.dark-content-display .active-tab-text {
    color: #adb5bd;
}

/* --- Vue Content Transition (Fade-in/Fade-out) --- */
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.5s ease;
}

.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}

/* --- Responsive Adjustments --- */
@media (max-width: 991.98px) {
    .horizontal-card {
        flex-direction: column;
    }
    .card-right {
        border-radius: 0 0 20px 20px;
        padding-top: 15px !important;
    }
    .tab-button {
        padding: 15px 20px;
        margin-bottom: 10px !important;
        transform: none; 
    }
    .tab-button.active, .tab-button:hover:not(.active) {
        transform: none; 
    }
    .card-left {
        border-right: none;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }
    .dark-card .card-left {
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }
}
</style>