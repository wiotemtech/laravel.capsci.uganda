<template>
    <div class="blog-container" :class="{ 'dark-theme -events': isDarkMode }">
        <section
            :class="{ 'dark-theme-events': isDarkMode }"
            style="background-image: url(&quot;/assets/images/14.jpg&quot;)"
            class="landing-section"
        >
            <div class="overlay"></div>
            <div class="landing-content">
                <h1>Our blogs page</h1>
                <p class="tagline">"Leave No One Behind"</p>
            </div>
        </section>

        <div class="blog-content">
            <h1>👋 Welcome Viewer!</h1>
            <p>You're currently on our <strong>Blog</strong> page.</p>
            <div class="notice">
                Our blog is still <strong>under Development...</strong>...
                <br />
                Great content is on the way,please stay tuned!
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
    margin: 0 auto;
    margin-bottom: 45px;
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
</style>
