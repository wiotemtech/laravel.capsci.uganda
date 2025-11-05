<script>
export default {
    name: "App",
    data() {
        return {
            menuOpen: false,
            isDarkMode: false,
            showDropdown: false,
            showDiscoverDropdown: false,
        };
    },
    methods: {
        toggleDropdown() {
            this.showDropdown = !this.showDropdown;
            // Close other dropdowns
            this.showDiscoverDropdown = false;
        },
        toggleDiscoverDropdown() {
            this.showDiscoverDropdown = !this.showDiscoverDropdown;
            // Close other dropdowns
            this.showDropdown = false;
        },
        closeDropdown() {
            this.showDropdown = false;
            this.showDiscoverDropdown = false;
            this.closeMenu();
        },
        toggleTheme() {
            this.isDarkMode = !this.isDarkMode;
            document.body.classList.toggle("dark-theme-body", this.isDarkMode);
            localStorage.setItem("theme", this.isDarkMode ? "dark" : "light");
        },
        closeMenu() {
            this.menuOpen = false;
        },
    },
    mounted() {
        const savedTheme = localStorage.getItem("theme");
        if (savedTheme === "dark") {
            this.isDarkMode = true;
            document.body.classList.add("dark-theme-body");
        }
    },
};
</script>

<template>
    <div>
        <div class="top-bar" :class="{ 'dark-theme-top-bar': isDarkMode }">
            <div class="contact-info">
                <span class="info-item" style="font-size: 16px">
                    <i class="bx bxs-map"></i>
                    Kulambiro–Najjera Road, Kampala.
                </span>
                <span class="info-item" style="font-size: 16px">
                    <i class="bx bxs-envelope"></i>

                    info@capsci-uganda.org
                </span>
            </div>
            <div class="social-icons">
                <a href="#" class="social-icon"
                    ><i class="bx bxl-facebook"></i
                ></a>
                <a href="#" class="social-icon"
                    ><i class="bx bxl-twitter"></i
                ></a>
                <a href="#" class="social-icon"
                    ><i class="bx bxl-instagram"></i
                ></a>
                <a href="#" class="social-icon"
                    ><i class="bx bxl-linkedin"></i
                ></a>
            </div>
        </div>

        <header class="header" :class="{ 'dark-theme-header': isDarkMode }">
            <a
                class="navbar-brand logo"
                href="#"
                :class="{ 'dark-theme-logo': isDarkMode }"
            >
                <img
                    src="/public/assets/images/logo1.png"
                    alt="Logo"
                    width="80px"
                    height=""
                    class="logo"
                />
                <span class="logo-text"> CAPSCI-UG</span>
            </a>

            <input type="checkbox" id="check" v-model="menuOpen" />
            <label
                for="check"
                class="icons"
                :class="{ 'dark-theme-icons': isDarkMode }"
            >
                <i class="bx bx-menu" id="menu-icon" v-show="!menuOpen"></i>
                <i class="bx bx-x" id="close-icon" v-show="menuOpen"></i>
            </label>

            <nav
                class="navbar"
                :class="{
                    'show-nav': menuOpen,
                    'dark-theme-navbar': isDarkMode,
                }"
            >
                <router-link
                    to="/"
                    :class="{ 'dark-theme-link': isDarkMode }"
                    @click.native="closeMenu"
                    >HOME</router-link
                >

                <router-link
                    to="/about"
                    class="ojede"
                    :class="{ 'dark-theme-link': isDarkMode }"
                    @click.native="closeMenu"
                    >ABOUT US</router-link
                >
                <router-link
                    to="/gallery"
                    :class="{ 'dark-theme-link': isDarkMode }"
                    @click.native="closeMenu"
                    >GALLERY</router-link
                >

                <router-link
                    to="/blogs"
                    class="ojede"
                    :class="{ 'dark-theme-link': isDarkMode }"
                    @click.native="closeMenu"
                    >BLOGS</router-link
                >

                <router-link
                    to="/board-members"
                    class="ojede"
                    :class="{ 'dark-theme-link': isDarkMode }"
                    @click.native="closeMenu"
                    >OUR TEAM</router-link
                >
                <!--
                <div class="custom-dropdown">
                    <div
                        class="custom-dropdown-toggle"
                        :class="{ 'dark-theme-link': isDarkMode }"
                        @click="toggleDropdown"
                    >
                        Our Projects
                        <i class="bx bx-chevron-down"></i>
                    </div>

                    
                    <div
                        class="custom-dropdown-menu"
                        :class="{
                            show: showDropdown,
                            'dark-theme-dropdown': isDarkMode,
                        }"
                    >
                        <router-link
                            to="/SCMH-Fund"
                            class="dropdown-item"
                            :class="{ 'dark-theme-link': isDarkMode }"
                            @click.native="closeDropdown"
                            >Sickle Cell Mental Health Fund</router-link
                        >
                        <router-link
                            to="/SPRout-Program"
                            class="dropdown-item"
                            :class="{ 'dark-theme-link': isDarkMode }"
                            @click.native="closeDropdown"
                            >School-Based Mental Health <br />
                            Research & Support Program</router-link
                        >
                
                    </div>
                
                </div>
            -->

                <!--
                <div class="custom-dropdown">
                    <div
                        class="custom-dropdown-toggle"
                        :class="{ 'dark-theme-link': isDarkMode }"
                        @click="toggleDiscoverDropdown"
                    >
                        OUR TEAM
                        <i class="bx bx-chevron-down"></i>
                    </div>
                    <div
                        class="custom-dropdown-menu"
                        :class="{
                            show: showDiscoverDropdown,
                            'dark-theme-dropdown': isDarkMode,
                        }"
                    >
                    
                        <router-link
                            to="/board-members"
                            class="dropdown-item"
                            :class="{ 'dark-theme-link': isDarkMode }"
                            @click.native="closeDropdown"
                            >BOARD MEMBERS </router-link
                        >
                        <router-link
                            to="/management-members"
                            class="dropdown-item"
                            :class="{ 'dark-theme-link': isDarkMode }"
                            @click.native="closeDropdown"
                            >MANAGEMENT </router-link
                        >
                    
                    </div>
                
                </div>
            -->
                <router-link
                    to="/contact-us"
                    :class="{ 'dark-theme-link': isDarkMode }"
                    @click.native="closeMenu"
                    >CONTACT US</router-link
                >

                <button
                    @click="toggleTheme"
                    class="theme-toggle"
                    :class="{ 'dark-theme-button': isDarkMode }"
                    @click.native="closeMenu"
                >
                    <i :class="isDarkMode ? 'bx bx-sun' : 'bx bx-moon'"></i>
                    <span class="theme-label">{{ isDarkMode ? "" : "" }}</span>
                </button>
            </nav>
        </header>
    </div>
</template>

<style>
/* Import Boxicons for icons */
@import url("https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css");

.logo {
    border-radius: 50px;
}
body {
    font-family: sans-serif;
    margin: 0;
    padding: 0;
    background: linear-gradient(to right, #f9f9f9, #eaf1f8);
    transition:
        background-color 0.3s ease,
        color 0.3s ease;

    padding-top: 80px;
}

body.dark-theme-body {
    background: linear-gradient(to right, #222, #222);
    color: #eee;
}

.top-bar {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 45px;
    background-color: rgba(128, 0, 0, 0.8);
    color: white;
    font-weight: bold;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 19%;
    z-index: 999;
}

.top-bar.dark-theme-top-bar {
    background-color: rgba(128, 0, 0, 0.8);
}

.contact-info {
    display: flex;
    gap: 20px;
}

.info-item {
    display: flex;
    align-items: center;
    font-size: 14px;
}

.info-item i {
    margin-right: 8px;
    font-size: 23px;
}

.social-icons {
    display: flex;
    gap: 15px;
}

.social-icon {
    color: white;
    font-size: 20px;
    transition:
        color 0.3s ease,
        transform 0.3s ease;
}

.social-icon:hover {
    color: #0d6efd;
    transform: scale(1.2);
}

.header {
    position: fixed;
    top: 45px;
    left: 0;
    width: 100%;
    padding: 1px 12%;
    background-color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 998;
    transition: background-color 0.3s ease;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
}

.header.dark-theme-header {
    background-color: #111;
}

.navbar-brand.logo {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: black;
    font-weight: bold;

    font-size: 20px;
    transition: color 0.3s ease;
}

.navbar-brand.logo.dark-theme-logo {
    color: #eee;
}

.logo-text {
    margin-top: 1px;
    font-size: inherit;
    font-weight: inherit;
    color: black;
    font-weight: bold;
}

body.dark-theme-body .logo-text {
    color: white;
}

.navbar {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    transition: background-color 0.3s ease;
    justify-content: flex-end;
}

.navbar > * {
    margin-left: 25px;
}

.navbar > *:first-child {
    margin-left: 0;
}

.navbar a {
    color: black;
    text-decoration: none;
    font-weight: 650;
    font-size: 16px;
    position: relative;
    transition: color 0.3s ease;
    padding: 4px 0;
}

.navbar a:hover {
    /*color: #7aa902;*/
    color: rgba(128, 0, 0, 0.8);
}

.navbar a::after {
    content: "";
    position: absolute;
    width: 0;
    height: 2px;
    background: rgb(37, 36, 36);
    left: 0;
    bottom: 0;
    transition: width 0.3s ease-in-out;
}

.navbar a:hover::after,
.navbar a.router-link-active::after {
    width: 100%;
}

.navbar a.router-link-active {
    color: red;
}

.navbar a.dark-theme-link {
    color: white;
}

.navbar a.dark-theme-link:hover {
    color: rgba(128, 0, 0, 0.8);
}

.navbar a.dark-theme-link.router-link-active {
    color: red;
}

.navbar a.dark-theme-link::after {
    background: white;
}

.navbar .donate-btn:hover {
    background-color: #0d6efd;
    color: white;
    text-decoration: none;
}

#check {
    display: none;
}

.icons {
    position: absolute;
    right: 8%;
    font-size: 28px;
    color: black;
    display: none;
    cursor: pointer;
    transition: color 0.3s ease;
    align-items: center;
}

.icons.dark-theme-icons {
    color: #eee;
}

#menu-icon {
    display: inline;
}

#close-icon {
    display: none;
}

.theme-toggle {
    background: none;
    padding: 2px 3px;
    border-radius: 10px;
    color: black;
    font-size: 28px;
    cursor: pointer;
    outline: none;
    transition:
        color 0.3s ease,
        box-shadow 0.3s ease,
        transform 0.3s ease;
}

.theme-toggle:hover {
    color: #333333;
    box-shadow: 0 4px 10px rgba();
    transform: scale(1.2);
}

.theme-label {
    font-size: 18px;
    position: relative;
    bottom: 4px;
    padding-right: 3px;
}

.theme-toggle.dark-theme-button {
    color: #eee;
}

@media (max-width: 768px) {
    .top-bar {
        height: auto;
        padding: 10px 5%;
        flex-direction: column;
        align-items: center;
    }
    .contact-info {
        flex-direction: column;
        align-items: center;
        gap: 5px;
        margin-bottom: 10px;
    }

    .info-item {
        font-size: 12px;
        text-align: center;
    }

    .social-icons {
        gap: 10px;
    }

    .navbar {
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background-color: #ecfdf5;
        flex-direction: column;
        align-items: center;
        overflow: hidden;
        display: none;
    }

    .navbar-brand.logo {
        padding-top: 8px;
    }

    .navbar.dark-theme-navbar {
        background-color: #1e2620;
    }

    .navbar a {
        display: block;
        font-size: 1.1rem;
        margin: 1rem 0;
        text-align: center;

        transform: translateX(100%);
        opacity: 0;
        transition:
            opacity 0.3s ease,
            transform 0.3s ease;
    }

    .header {
        top: auto;
        margin-top: 33px;
    }

    #check:checked ~ .navbar {
        display: flex;
    }

    #check:checked ~ .navbar a {
        transform: translateX(0);
        opacity: 1;
        transition-delay: calc(0.15s * var(--i));
    }

    .icons {
        display: inline-flex;
    }

    #check:checked ~ .icons #menu-icon {
        display: none;
    }

    #check:checked ~ .icons #close-icon {
        display: inline;
    }

    .custom-dropdown-menu.show {
        left: 50%;
        transform: translateX(-50%);
        min-width: 250px;
        text-align: center;
    }
    .custom-dropdown-menu .dropdown-item {
        padding: 10px 12px;
    }
}

.content {
    padding: 80px 20px;
    text-align: center;
}

.content.dark-theme-content {
    color: #eee;
}

.custom-dropdown-toggle {
    position: relative;
    padding: 4px 0;
}

.custom-dropdown-toggle::after {
    content: "";
    position: absolute;
    width: 0;
    height: 2px;
    background: rgb(37, 36, 36);
    left: 0;
    bottom: 0;
    transition: width 0.3s ease-in-out;
}

.custom-dropdown-toggle:hover::after,
.custom-dropdown-toggle.router-link-active::after {
    width: 100%;
}

.dark-theme-link.custom-dropdown-toggle::after {
    background: white;
}

.custom-dropdown-menu .dropdown-item {
    position: relative;
    font-weight: 650;
    font-size: 16px;
    padding: 12px 16px;
    color: black;
    text-decoration: none;
}

.custom-dropdown-menu .dropdown-item::after {
    content: "";
    position: absolute;
    width: 0;
    height: 2px;
    background: rgba(128, 0, 0, 0.8);
    left: 0;
    bottom: 8px;
    transition: width 0.3s ease-in-out;
}

.custom-dropdown-menu .dropdown-item:hover::after {
    width: 100%;
}

.dark-theme-dropdown .dropdown-item {
    color: #eee;
}

.dark-theme-dropdown .dropdown-item:hover {
    background-color: #444;
    color: black;
}

.custom-dropdown {
    position: relative;
    display: inline-block;
    margin: 0 10px;
}

.custom-dropdown-toggle {
    cursor: pointer;

    font-weight: 650;
    margin-right: -18px;
    color: black;
    font-size: 16px;
    display: flex;
    align-items: center;
    transition: color 0.3s ease;
}

body.dark-theme-body .custom-dropdown-toggle {
    color: white;
}

body.dark-theme-body .custom-dropdown-toggle:hover {
    color: rgba(128, 0, 0, 0.8);
}

.custom-dropdown-toggle:hover {
    color: rgba(128, 0, 0, 0.8);
}

.custom-dropdown-menu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: white;
    min-width: 160px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    border-radius: 6px;
    z-index: 999;
    transition: all 0.3s ease;
}

.custom-dropdown-menu.show {
    display: block;
}

.custom-dropdown-menu .dropdown-item {
    padding: 12px 16px;
    display: block;
    color: black;
    text-decoration: none;
    transition:
        background-color 0.3s ease,
        color 0.3s ease;
}

.custom-dropdown-menu .dropdown-item:hover {
    background-color: #f1f1f1;
    color: rgba(128, 0, 0, 0.8);
}

.dark-theme-dropdown {
    background-color: #333;
    box-shadow: 0 8px 16px rgba(255, 255, 255, 0.1);
}

.dark-theme-dropdown .dropdown-item {
    color: #eee;
}

.dark-theme-dropdown .dropdown-item:hover {
    background-color: #444;
    color: black;
}
</style>
