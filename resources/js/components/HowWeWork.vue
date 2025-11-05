<template>
    <section class="how-we-work-section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="about-us-title">How We Work</h2>
                <h1 class="about-us-subtitle">Community-Based Support & Awareness</h1>
            </div>

            <div class="content-grid">
                <div class="image-block" data-aos="fade-right">
                    <img
                        src="/public/assets/images/11.jpg"
                        alt="Regenerative Agriculture"
                    />
                    <span class="image-tag">Community-Based</span>
                </div>

                <div class="text-block" data-aos="fade-left">
                    <div class="info-item">
                        <div class="icon-circle">
                            <svg
                                class="icon"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                />
                            </svg>
                        </div>
                        <p>
                        At Catherine Phill Sickle Cell Support Initiative (CPSSI), we raise awareness, provide counseling, and offer sickle cell screening in schools and communities. Our programs are inclusive, culturally sensitive, and aim to bring hope and support to those affected.
                        </p>
                    </div>

                    <div class="info-item">
                        <div class="icon-circle">
                            <svg
                                class="icon"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M12 8c-1.5 0-2.5 1-3 2.5S8 13 9.5 14.5 12 16 13.5 14.5 16 13 16 11.5 13.5 8 12 8zm0 0v-1m0 6v-1m0 0h1m-1 0h-1"
                                />
                            </svg>
                        </div>
                        <p>
                            We use the
                            <strong
                                >Participatory Programs & Partnerships</strong
                            >
                    Through Partnerships, we collaborate with health centers, community leaders, and local and international partners to promote education, early diagnosis, and care, building stronger, informed, and empowered communities in the fight against sickle cell.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>

</script>

<style scoped>


.about-us-title {
    font-size: 1.5rem;
    font-weight: bold;
     font-family: 'Oswald';

    color: red;
    margin-bottom: 10px;
}

.about-us-subtitle {
    font-size: 2rem;
    font-weight: bold;
    color: red;
    line-height: 1.2;
   
    margin-bottom: 20px;
}
.how-we-work-section {
    background-color: white;
    padding: 4rem 1rem;
    overflow: hidden;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.dark-theme .how-we-work-section {
    background: linear-gradient(to bottom, #111827, #1f2937);
    color: #d1d5db;
}

body.dark-theme-body .how-we-work-section {
    background: linear-gradient(to bottom, #222, #222);
    color: white;
}

.section-header {
    text-align: center;
    margin-bottom: 3rem;
}



body.dark-theme-body .section-header h2 {
    color: white;
}

.dark-theme .section-header h2 {
    color: #6ee7b7;
}

.content-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 2rem;
}

@media (min-width: 768px) {
    .content-grid {
        grid-template-columns: 1fr 1fr;
        align-items: center;
    }
}

.image-block {
    position: relative;
    transition: transform 0.5s ease;
}

.image-block img {
    width: 100%;
    border-radius: 1rem;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.image-block:hover img {
    transform: scale(1.05);
}

.image-tag {
    position: absolute;
    top: 20px;
    left: 20px;
    background-color:red;
    color: #fff;
    padding: 6px 12px;
    font-size: 0.75rem;
    border-radius: 999px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
}

.text-block {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.info-item {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
}

.icon-circle {
    background-color: red;
    color: white;
    padding: 0.75rem;
    border-radius: 999px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    flex-shrink: 0;
}

.icon {
    width: 24px;
    height: 24px;
}

p {
    font-size: 1.125rem;
    line-height: 1.75;
    color: #374151;
}

body.dark-theme-body p {
    color: white;
}

@keyframes pulse {
    0%,
    100% {
        opacity: 1;
    }
    50% {
        opacity: 0.3;
    }
}
</style>
