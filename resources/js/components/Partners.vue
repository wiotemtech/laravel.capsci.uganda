<script>
export default {
    name: "PartnersSection",
    props: {
        isDarkMode: Boolean,
    },
};
</script>

<template>
    <section
        class="container my-5"
        :class="{ 'dark-theme-container': isDarkMode }"
    >
        <h2 class="text-center mb-4" :class="{ 'dark-theme-h2': isDarkMode }">
            Our Partners
        </h2>
        <div class="row" :class="{ 'dark-theme-row': isDarkMode }">
            <div
                class="col-lg-3 col-md-4 col-sm-6 col-12"
                :class="{
                    'dark-theme-col-lg-3': isDarkMode,
                    'dark-theme-col-md-4': isDarkMode,
                    'dark-theme-col-sm-6': isDarkMode,
                    'dark-theme-col-12': isDarkMode,
                }"
            >
                <div
                    class="partner-card"
                    :class="{ 'dark-theme-partner-card': isDarkMode }"
                >
                    <img
                        src="/public/assets/images/qfm.jpeg"
                        alt="Partner 1"
                        class="partner-logo"
                        :class="{ 'dark-theme-partner-logo': isDarkMode }"
                    />
                </div>

                  <div
                    class="partner-card"
                    :class="{ 'dark-theme-partner-card': isDarkMode }"
                >
                    <img
                        src="/public/assets/images/cent.jpg"
                        alt="Partner 1"
                        class="partner-logo"
                        :class="{ 'dark-theme-partner-logo': isDarkMode }"
                    />
                </div>
            </div>
            <div
                class="col-lg-3 col-md-4 col-sm-6 col-12"
                :class="{
                    'dark-theme-col-lg-3': isDarkMode,
                    'dark-theme-col-md-4': isDarkMode,
                    'dark-theme-col-sm-6': isDarkMode,
                    'dark-theme-col-12': isDarkMode,
                }"
            >
                <div
                    class="partner-card"
                    :class="{ 'dark-theme-partner-card': isDarkMode }"
                >
                    <img
                        src="/public/assets/images/unoc.png"
                        alt="Partner 2"
                        class="partner-logo"
                        :class="{ 'dark-theme-partner-logo': isDarkMode }"
                    />
                </div>

                  <div
                    class="partner-card"
                    :class="{ 'dark-theme-partner-card': isDarkMode }"
                >
                    <img
                        src="/public/assets/images/kcb.png"
                        alt="Partner 1"
                        class="partner-logo"
                        :class="{ 'dark-theme-partner-logo': isDarkMode }"
                    />
                </div>
            </div>
            <div
                class="col-lg-3 col-md-4 col-sm-6 col-12"
                :class="{
                    'dark-theme-col-lg-3': isDarkMode,
                    'dark-theme-col-md-4': isDarkMode,
                    'dark-theme-col-sm-6': isDarkMode,
                    'dark-theme-col-12': isDarkMode,
                }"
            >
                <div
                    class="partner-card"
                    :class="{ 'dark-theme-partner-card': isDarkMode }"
                >
                    <img
                        src="/public/assets/images/m.jpeg"
                        alt="Partner 3"
                        class="partner-logo"
                        :class="{ 'dark-theme-partner-logo': isDarkMode }"
                    />
                </div>

                  <div
                    class="partner-card"
                    :class="{ 'dark-theme-partner-card': isDarkMode }"
                >
                    <img
                        src="/public/assets/images/standbic.jpg"
                        alt="Partner 1"
                        class="partner-logo"
                        :class="{ 'dark-theme-partner-logo': isDarkMode }"
                    />
                </div>
            </div>
            <div
                class="col-lg-3 col-md-4 col-sm-6 col-12"
                :class="{
                    'dark-theme-col-lg-3': isDarkMode,
                    'dark-theme-col-md-4': isDarkMode,
                    'dark-theme-col-sm-6': isDarkMode,
                    'dark-theme-col-12': isDarkMode,
                }"
            >
                <div
                    class="partner-card"
                    :class="{ 'dark-theme-partner-card': isDarkMode }"
                >
                    <img
                        src="/public/assets/images/code.png"
                        alt="Partner 4"
                        class="partner-logo"
                        :class="{ 'dark-theme-partner-logo': isDarkMode }"
                    />
                </div>

                  <div
                    class="partner-card"
                    :class="{ 'dark-theme-partner-card': isDarkMode }"
                >
                    <img
                        src="/public/assets/images/ntv.jpeg"
                        alt="Partner 1"
                        class="partner-logo"
                        :class="{ 'dark-theme-partner-logo': isDarkMode }"
                    />
                </div>
            </div>
            <div
                class="col-lg-3 col-md-4 col-sm-6 col-12"
                :class="{
                    'dark-theme-col-lg-3': isDarkMode,
                    'dark-theme-col-md-4': isDarkMode,
                    'dark-theme-col-sm-6': isDarkMode,
                    'dark-theme-col-12': isDarkMode,
                }"
            >
                <div
                    class="partner-card"
                    :class="{ 'dark-theme-partner-card': isDarkMode }"
                >
                    <img
                        src="/public/assets/images/vol.jpeg"
                        alt="Partner 5"
                        class="partner-logo"
                        :class="{ 'dark-theme-partner-logo': isDarkMode }"
                    />
                </div>
                
            </div>
            <div
                class="col-lg-3 col-md-4 col-sm-6 col-12"
                :class="{
                    'dark-theme-col-lg-3': isDarkMode,
                    'dark-theme-col-md-4': isDarkMode,
                    'dark-theme-col-sm-6': isDarkMode,
                    'dark-theme-col-12': isDarkMode,
                }"
            >
                <div
                    class="partner-card"
                    :class="{ 'dark-theme-partner-card': isDarkMode }"
                >
                    <img
                        src="/public/assets/images/lira u.png"
                        alt="Partner 6"
                        class="partner-logo"
                        :class="{ 'dark-theme-partner-logo': isDarkMode }"
                    />
                </div>
            </div>
            <div
                class="col-lg-3 col-md-4 col-sm-6 col-12"
                :class="{
                    'dark-theme-col-lg-3': isDarkMode,
                    'dark-theme-col-md-4': isDarkMode,
                    'dark-theme-col-sm-6': isDarkMode,
                    'dark-theme-col-12': isDarkMode,
                }"
            >
                <div
                    class="partner-card"
                    :class="{ 'dark-theme-partner-card': isDarkMode }"
                >
                    <img
                        src="/public/assets/images/n.png"
                        alt="Partner 7"
                        class="partner-logo"
                        :class="{ 'dark-theme-partner-logo': isDarkMode }"
                    />
                </div>
            </div>
            <div
                class="col-lg-3 col-md-4 col-sm-6 col-12"
                :class="{
                    'dark-theme-col-lg-3': isDarkMode,
                    'dark-theme-col-md-4': isDarkMode,
                    'dark-theme-col-sm-6': isDarkMode,
                    'dark-theme-col-12': isDarkMode,
                }"
            >
                <div
                    class="partner-card"
                    :class="{ 'dark-theme-partner-card': isDarkMode }"
                >
                    <img
                        src="/public/assets/images/l.jpeg"
                        alt="Partner 8"
                        class="partner-logo"
                        :class="{ 'dark-theme-partner-logo': isDarkMode }"
                    />
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.partner-card {
    background: #fff;
    padding: 10px;

    display: flex;
    align-items: center;
    justify-content: center;
    height: 90px;
    width: 95%;
    opacity: 0;
    animation: fadeInUp 0.8s ease-out forwards;
    box-shadow:
        0px -4px 8px rgba(136, 157, 240, 0.4),
        0px 4px 8px rgba(136, 157, 240, 0.4);
}

body.dark-theme-body .partner-card {
    background-color: rgb(233, 224, 224);
    border: 1px solid rgb(130, 23, 23);

    box-shadow: none;
    color: red;
}

.text-center {
    font-size: 30px;
    font-weight: bold;
}

body.dark-theme-body .text-center {
    color: white;
}

.partner-logo {
    max-width: 90%;
    max-height: 60px;
    transition: transform 0.3s ease-in-out;
}

.partner-card:hover .partner-logo {
    transform: scale(1.1);
}

.row {
    margin: 0;
}

.col-lg-3,
.col-md-4,
.col-sm-6,
.col-12 {
    padding: 0;
}

.col-lg-3:nth-child(1) .partner-card {
    animation-delay: 0s;
}
.col-lg-3:nth-child(2) .partner-card {
    animation-delay: 0.1s;
}
.col-lg-3:nth-child(3) .partner-card {
    animation-delay: 0.2s;
}
.col-lg-3:nth-child(4) .partner-card {
    animation-delay: 0.3s;
}
.col-lg-3:nth-child(5) .partner-card {
    animation-delay: 0.4s;
}
.col-lg-3:nth-child(6) .partner-card {
    animation-delay: 0.5s;
}
.col-lg-3:nth-child(7) .partner-card {
    animation-delay: 0.6s;
}
.col-lg-3:nth-child(8) .partner-card {
    animation-delay: 0.7s;
}
</style>
