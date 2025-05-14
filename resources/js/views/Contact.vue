<script>
export default {
    data() {
        return {
            isDarkMode: false,
            form: {
                name: "",
                email: "",
                message: "",
            },
        };
    },
    methods: {
        handleSubmit() {
            alert("Message sent! ");
            this.form.name = "";
            this.form.email = "";
            this.form.message = "";
        },
    },
};
</script>

<template>
    <div class="contact-container" :class="{ 'dark-mode': isDarkMode }">
        <section
            :class="{ 'dark-theme-events': isDarkMode }"
            style="background-image: url(&quot;/assets/images/cnt.jpg&quot;)"
            class="landing-section"
        >
            <div class="overlay"></div>
            <div class="landing-content">
                <h1>Connect with us!</h1>
                <p class="tagline">"Leave No One Behind"</p>
            </div>
        </section>
        <div class="contact-wrapper">
            <div class="form-section">
                <h2>Send us a message</h2>
                <form @submit.prevent="handleSubmit">
                    <div class="form-group">
                        <input
                            type="text"
                            placeholder="Your Name"
                            v-model="form.name"
                            required
                        />
                    </div>
                    <div class="form-group">
                        <input
                            type="email"
                            placeholder="Your Email"
                            v-model="form.email"
                            required
                        />
                    </div>
                    <div class="form-group">
                        <textarea
                            placeholder="Your Message"
                            v-model="form.message"
                            required
                        ></textarea>
                    </div>
                    <button type="submit">Send Message</button>
                </form>
            </div>

            <div class="info-section">
                <h2>Get in Touch</h2>
                <p>
                    <strong>Address:</strong> Head Office: Plot 1628,Block
                    215,Kulambiro-Najjera Road Kyadondo-Mengo Kampala & Behind
                    lira Hotel 2nd floor Yodev Plaza Lira city.
                </p>
                <p><strong>Phone:</strong> +256-392-150-047</p>
                <p><strong>Email:</strong> info@capsci-uganda.org</p>

                <h2>Follow Us</h2>
                <div class="socials">
                    <a href="#" target="_blank"
                        ><i class="fab fa-facebook-f"></i
                    ></a>
                    <a href="#" target="_blank"
                        ><i class="fab fa-twitter"></i
                    ></a>
                    <a href="#" target="_blank"
                        ><i class="fab fa-linkedin-in"></i
                    ></a>
                    <a href="#" target="_blank"
                        ><i class="fab fa-instagram"></i
                    ></a>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
#hh {
    margin-top: 200px;
}

.contact-container {
    padding: 60px 20px;
    background: whitesmoke;
    padding: 0;
    margin-bottom: 35px;
    color: #222;
    font-family: "Poppins", sans-serif;
}

body.dark-theme-body .contact-container {
    background-color: #222;
    color: white;
}

body.dark-theme-body .form-section {
    background-color: #222;
    border: 1px solid white;
    color: white;
}

body.dark-theme-body .info-section {
    background-color: #222;
    border: 1px solid white;
    color: white;
}

body.dark-theme-body h2 {
    color: white;
}

body.dark-theme-body .socials a {
    color: white;
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
    top: 0px;
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
    color: white;
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

.contact-wrapper {
    display: flex;
    flex-wrap: wrap;
    max-width: 1100px;
    margin: 0 auto;
    gap: 40px;
}

.form-section,
.info-section {
    flex: 1 1 45%;
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

h2 {
    font-size: 30px;
    font-weight: bold;
    margin-bottom: 20px;
    color: #222;
}

h3 {
    margin-top: 30px;
    color: #0077b6;
}

.form-group {
    margin-bottom: 20px;
}

input,
textarea {
    width: 100%;
    padding: 12px;
    border-radius: 8px;
    border: 1px solid #ccc;
    font-size: 16px;
    resize: none;
}

button {
    background-color: #0077b6;
    color: white;
    padding: 12px 24px;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    cursor: pointer;
}

button:hover {
    background-color: #023e8a;
}

.socials {
    margin-top: 15px;
}

.socials a {
    margin-right: 15px;
    font-size: 20px;
    color: #333;
}

.socials a:hover {
    color: #0077b6;
}
</style>
