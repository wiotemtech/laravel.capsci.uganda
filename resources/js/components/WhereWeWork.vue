<script setup></script>

<template>
    <section class="where-we-work-section" data-aos="fade-up">
        <div class="container">
            <div class="section-header" data-aos="zoom-in">
                <h3 class="about-us-title" style="text-align: center;" >Where We Work</h3>
                <h4 class="about-us-subtitle" style="text-align: center;">We serve communities across diverse regions</h4>
            </div>

            <div class="content-grid">
                <div
                    class="text-box"
                    data-aos="fade-right"
                    data-aos-delay="100"
                >
                    <h3>Current Focus Area</h3>
        <p>Catherine Phill Sickle Cell Support Initiative is actively working across Lango,Teso and Central regions, particularly in the Lango sub-region and Lira City. We collaborate with schools, health centers, and community groups to raise awareness about sickle cell, support affected families, and promote early testing and care. Our programs focus on education, advocacy, and community outreach to empower individuals living with sickle cell and reduce stigma.</p>
                </div>

                <div class="text-box" data-aos="fade-left" data-aos-delay="200">
                    <h3>Why Lango & Northern Uganda?</h3>
                    <p>
                        These regions face significant health challenges, with many families affected by sickle cell but lacking access to proper information, medical care, and support systems. Through awareness campaigns, counseling, and partnerships, the Catherine Phill Sickle Cell Support Initiative brings hope, knowledge, and compassion to communities. Our presence in Lango and Northern Uganda helps improve health outcomes, strengthen community support, and inspire a future free from stigma and preventable suffering.
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>


.about-us-title {
    font-size: 1.5rem;
    font-weight: bold;
     

    color: white;
    margin-bottom: 10px;
}

.about-us-subtitle {
    font-size: 2rem;
    font-weight: bold;
    color: white;
    line-height: 1.2;
   
    margin-bottom: 20px;
}
.where-we-work-section {
    background-color:rgba(128, 0, 0, 0.8);
    padding: 4rem 1.5rem;
    transition: background-color 0.3s ease, color 0.3s ease;
}

body.dark-theme-body .where-we-work-section {
    background-color: #222;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
}



body.dark-theme-body .section-header h2 {
    color: white;
}

.content-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 2rem;
}

.text-box {
    background-color: #ffffff;
    padding: 2rem;
    border-radius: 1rem;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
    transition: transform 0.3s ease, box-shadow 0.3s ease,
        background-color 0.3s ease;
}

.text-box:hover {
    transform: translateY(-4px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

body.dark-theme-body .text-box {
    background-color: #222;
    color: white;
    border: 1px solid red;
}

.text-box h3 {
    font-size: 1.5rem;
    color: red;
    font-weight: bold;
    margin-bottom: 1rem;
}

body.dark-theme-body .text-box h3 {
    color: red;
}

.text-box p {
    font-size: 1rem;
    color: #374151;
    line-height: 1.7;
}

body.dark-theme-body .text-box p {
    color: #ddd;
}

.highlight {
    color: #15803d;
    font-weight: 600;
}

@media (min-width: 768px) {
    .content-grid {
        grid-template-columns: 1fr 1fr;
    }

    .section-header h2 {
        font-size: 3rem;
    }
}
</style>
