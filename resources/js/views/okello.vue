<script>
export default {
    data() {
        return {
            isDarkMode: false,
        };
    },
    mounted() {
        const prefersDark =
            window.matchMedia &&
            window.matchMedia("(prefers-color-scheme: dark)").matches;
        this.isDarkMode = prefersDark;
    },
};
</script>

<template>
    <div class="blog-container" :class="{ 'dark-theme -events': isDarkMode }">
        <section
            :class="{ 'dark-theme-events': isDarkMode }"
            style="background-image: url(&quot;/assets/images/14.jpg&quot;)"
            class="landing-section"
        >
            <div class="overlay"></div>
            <div class="landing-content">
                <h1>Our resource page</h1>
                <button
                    class="btn btn-primary"
                    data-bs-toggle="modal"
                    data-bs-target="#mymodal"
                >
                    <i></i> Read More About us
                </button>
                <!--<p class="tagline">"Leave No One Behind"</p>-->
            </div>
        </section>

        <div class="blog-content">
            <h1>👋 Welcome Viewer!</h1>
            <p>You're currently on our <strong>resource</strong> page.</p>
            <div class="notice">
                This page is currently <strong>under Development...</strong
                ><br />
                But very soon, all our amazing resources will be available!
            </div>
        </div>

        <div
            class="fixed-bottom-right"
            style="margin-bottom: 70px; right: 20px"
        >
            <a
                class="twitter-dm-button w3-btn w3-green floating-icon"
                href="https://wa.me/256774526849"
            >
                <i class="fab fa-whatsapp"></i>
            </a>
        </div>

        <div
            class="fixed-bottom-right"
            style="bottom: 80px; right: 80px; margin-bottom: 10px"
        >
            <a
                class="twitter-dm-button w3-btn w3-black floating-icon"
                href="https://x.com/UgandaSickle"
            >
                <i class="fab fa-x"></i>
            </a>
        </div>
        <div
            class="modal fade"
            id="mymodal"
            tabindex="-1"
            aria-labelledby="mymodalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div
                        class="modal-header text-white"
                        style="background-color: red"
                    >
                        <img
                            src=""
                            alt="Logo"
                            class="rounded-pill me-3"
                            style="width: 50px; height: 50px"
                        />
                        <div>
                            <p class="mb-0" style="font-size: 16px">
                                Head Office: Plot 1628,Block 215, <br />
                                Kulambiro-Najjera Rd,Kyadondo-Mengo,Kampala
                                Uganda<br />
                                Regional Office: 2nd Floor Yodev Plaza Behind
                                Lira Hotel <br />
                                Email: info@capsci-uganda.org<br />
                                Web:
                                <a
                                    href="http://www.capsci-uganda.org"
                                    target="_blank"
                                    class="text-white"
                                    >www.capsci-uganda.org</a
                                ><br />
                                Tel: 07757625526773
                            </p>
                        </div>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>

                    <div
                        class="modal-body text-white"
                        style="background-color: #324150"
                    >
                        <h1 class="h3">
                            Background of the Catherine Phil Sickle Cell Support
                            Initiative
                        </h1>
                        <p>
                            Catherine Phil Sickle Cell Support Initiative stands
                            as a distinguished organization committed to
                            celebrating the enduring legacy of two extraordinary
                            souls: Catherine, a fervent champion for
                            underprivileged children, and Phil, a young boy
                            whose life was deeply impacted by Sickle Cell
                            Disease. This initiative aspires to elevate
                            awareness of sickle cell disease in Uganda, while
                            perpetuating the philanthropic endeavors initiated
                            by Catherine.
                        </p>

                        <h1 class="h3">Catherine’s Legacy</h1>
                        <p>
                            Ms. Catherine Aol epitomized the essence of
                            motherhood and community spirit, channeling her
                            exceptional tailoring talents to elevate those in
                            her vicinity. Her unwavering commitment to aiding
                            underprivileged children was manifest in a multitude
                            of initiatives she passionately pursued. With a firm
                            belief in the transformative power of education and
                            skill acquisition, she dedicated herself to
                            imparting tailoring skills to children who otherwise
                            would have been deprived of such invaluable
                            opportunities. This noble endeavor equipped them
                            with vital competencies, paving the way for enhanced
                            employment prospects and a richer quality of life in
                            Lira Town. Catherine’s devotion transcended the
                            simple act of teaching; she cultivated an atmosphere
                            of hope and resilience among the young souls she
                            mentored. Her endeavors were marked by profound
                            compassion and an unshakeable faith in the inherent
                            potential of every child, solidifying her status as
                            a cherished figure within her community.
                        </p>

                        <h1 class="h3">Phil’s Story</h1>
                        <p>
                            Phil Odongo was diagnosed with sickle cell disease
                            in his early years, enduring a myriad of health
                            challenges throughout his brief life. Yet, in the
                            face of adversity, he remained a devoted son to
                            Harriet and Paul Odongo, embodying a spirited
                            essence brimming with dreams and ambitions. Phil
                            possessed a profound passion for Christian music,
                            relished watching films, and was a fervent football
                            enthusiast. His aspiration to become a telecom
                            engineer reflected not only his personal ambitions
                            but also his desire to make a meaningful
                            contribution to society. Tragically, Phil's life was
                            cut short at the tender age of 10 following a bone
                            marrow transplant. His courageous journey through
                            illness illuminated the struggles faced by countless
                            children afflicted with sickle cell disease—a
                            condition that impacts millions around the globe.
                            Phil’s narrative stands as a poignant reminder of
                            the challenges posed by this disease and serves as
                            an inspiration for others to engage in advocacy
                            efforts aimed at its eradication.
                        </p>

                        <h1 class="h3">Our Cardinals</h1>
                        <p>
                            Catherine Phil Sickle Cell Support Initiative is
                            founded on the principles of compassion, education,
                            and advocacy. The initiative aims to carry forward
                            Catherine’s philanthropic work while sharing Phil’s
                            story to raise awareness about sickle cell disease
                            in Uganda. By highlighting personal stories like
                            Phil’s, the initiative seeks to humanize the
                            challenges associated with this condition and
                            inspire action within communities.
                        </p>

                        <ul class="list-unstyled">
                            <li>
                                1. Raising Awareness - Educating communities
                                about sickle cell disease.
                            </li>
                            <li>
                                2. Supporting Affected Families - Providing
                                resources and support.
                            </li>
                            <li>
                                3. Advocacy - Lobbying for better healthcare
                                policies.
                            </li>
                            <li>
                                4. Empowerment Through Education - Offering
                                educational programs.
                            </li>
                            <li>
                                5. Screening - Conducting free sickle cell
                                screening.
                            </li>
                            <li>
                                6. Fundraising and Partnerships - Organizing
                                annual events.
                            </li>
                        </ul>

                        <p>
                            Through these efforts, the initiative hopes not only
                            to honor Catherine’s memory but also to ensure that
                            Phil’s legacy lives on by fostering understanding
                            and support for those impacted by sickle cell
                            disease.
                        </p>

                        <h1 class="h3">Governance</h1>
                        <p>
                            Catherine Phil Sickle Cell Support Initiative is
                            governed by professionals...
                        </p>
                        <h1 class="h3">Board Members</h1>
                        <h class="table-responsive">
                            <table
                                class="table table-striped table-bordered text-white"
                            >
                                <thead class="table-dark">
                                    <tr>
                                        <th>S/N</th>
                                        <th>Names</th>
                                        <th>Qualification</th>
                                        <th>Designation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Dr. Ario Alex</td>
                                        <td>Public Health Specialist -MOH</td>
                                        <td>Board Chair</td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>Dr. Diana Rutebarika</td>
                                        <td>Pediatrician -JCRC</td>
                                        <td>Vice Chair</td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>Dr. Deogracious Munube</td>
                                        <td>Consultant Hematologist -Mulago</td>
                                        <td>Technical Advisor</td>
                                    </tr>

                                    <tr>
                                        <td>04</td>
                                        <td>Mrs. Harriet N Odongo</td>
                                        <td>Sociologist</td>
                                        <td>Member</td>
                                    </tr>

                                    <tr>
                                        <td>05</td>
                                        <td>Mr. Okodi Justine</td>
                                        <td>Accountant</td>
                                        <td>Board Treasure</td>
                                    </tr>

                                    <tr>
                                        <td>06</td>
                                        <td>Ms. Namutebi Ruth</td>
                                        <td>Governance Specialist</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td>07</td>
                                        <td>Dr.Odur Andrew</td>
                                        <td>Consultant Gyneagologist</td>
                                        <td>Technical Advisor</td>
                                    </tr>
                                    <tr>
                                        <td>08</td>
                                        <td>Mr.Odur Daniel Roy</td>
                                        <td>Public Health Specialist</td>
                                        <td>Secretary</td>
                                    </tr>
                                </tbody>
                            </table>
                        </h>
                        <h1 class="h3">Management Team</h1>

                        <h class="table-responsive">
                            <table
                                class="table table-striped table-bordered text-white"
                            >
                                <thead class="table-dark">
                                    <tr>
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Qualification</th>
                                        <th>Designation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Mr.Odur Daniel Roy</td>
                                        <td>Public health Specialist</td>
                                        <td>Executive Director</td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>Ms. Kukunda Blessings</td>
                                        <td>Social Worker</td>
                                        <td>Deputy ED</td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>Mr. Akar Allan Solomon</td>
                                        <td>Accountant</td>
                                        <td>Finanace & Admin Officer</td>
                                    </tr>

                                    <tr>
                                        <td>04</td>
                                        <td>Dr. Okaka Daniel</td>
                                        <td>Medical Officer</td>
                                        <td>Outreach Officer</td>
                                    </tr>

                                    <tr>
                                        <td>05</td>
                                        <td>Mr. Ococ Innocent</td>
                                        <td>Laboratory Assistant</td>
                                        <td>Laboratory Assistant</td>
                                    </tr>

                                    <tr>
                                        <td>06</td>
                                        <td>Mr. Okello Robert Hosea</td>
                                        <td>Coummunity Psychologist</td>
                                        <td>Community Engagement Officer</td>
                                    </tr>
                                    <tr>
                                        <td>07</td>
                                        <td>Ms. Achola Mercy</td>
                                        <td>Counsellor</td>
                                        <td>Counsellor</td>
                                    </tr>
                                    <tr>
                                        <td>08</td>
                                        <td>Mr. Obluk David</td>
                                        <td>Laboratory Technologist</td>
                                        <td>Quality Assurance Officer</td>
                                    </tr>
                                </tbody>
                            </table>
                        </h>
                    </div>

                    <div class="modal-footer">
                        <button
                            style="background-color: red; color: white"
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
    </div>
</template>

<style scoped>
.blog-container {
    font-family: "Segoe UI", sans-serif;
    color: #fff;
    text-align: center;
}

body.dark-theme-body .landing-section {
    background-color: #222;
    color: red;
}

.landing-section {
    position: relative;
    background-size: cover;
    background-position: center;
    height: 40vh;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 40px;
    animation: fadeIn 1.5s ease-in;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.55);
    z-index: 1;
    border-radius: 0 0 20px 20px;
}

.landing-content {
    position: relative;
    z-index: 2;
    color: #fff;
    padding-top: 120px;
    text-align: center;
}

.landing-content h1 {
    font-size: 40px;
    font-weight: bold;
    animation: slideDown 1s ease;
}

.tagline {
    font-weight: bold;
    font-size: 20px;
    color: red;
}

.blog-content {
    background: linear-gradient(to bottom right, #0f2027, #203a43, #2c5364);
    padding: 100px 20px;
    margin: 0 auto 45px auto;
    border-radius: 16px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
    animation: slideIn 1.2s ease-in-out;
    max-width: 900px;
}

.blog-content h1 {
    font-size: 42px;
    margin-bottom: 20px;
    animation: fadeDown 1s ease forwards;
}

.blog-content p {
    font-size: 24px;
    margin-bottom: 25px;
    animation: fadeIn 1.5s ease forwards;
}

.notice {
    font-size: 20px;
    background-color: rgba(0, 0, 0, 0.3);
    padding: 20px;
    border-radius: 10px;
    display: inline-block;
    animation: pulse 3s infinite;
    border: 1px solid rgba(255, 255, 255, 0.2);
}

@keyframes slideIn {
    from {
        transform: translateY(60px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

@keyframes slideDown {
    from {
        transform: translateY(-40px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

@keyframes fadeDown {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes pulse {
    0%,
    100% {
        transform: scale(1);
        background-color: rgba(0, 0, 0, 0.3);
    }
    50% {
        transform: scale(1.02);
        background-color: rgba(0, 0, 0, 0.4);
    }
}

.fixed-bottom-right {
    position: fixed;
    bottom: 15px;
    right: 15px;
    z-index: 1000;
}

.floating-icon {
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50px;
    width: 40px;
    height: 40px;
    font-size: 20px;
    color: white;
    text-decoration: none;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
}

.w3-btn {
    padding: 8px 16px;
    border: none;
    cursor: pointer;
    display: inline-block;
    text-align: center;
    background-color: transparent;
}

.w3-green {
    background-color: #4caf50 !important;
}

.w3-black {
    background-color: #000 !important;
}
</style>
