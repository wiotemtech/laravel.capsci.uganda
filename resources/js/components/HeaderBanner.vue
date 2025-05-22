<script>
export default {
    name: "App",
    data() {
        return {
            menuOpen: false,
            isDarkMode: false,
        };
    },
    methods: {
        toggleTheme() {
            this.isDarkMode = !this.isDarkMode;
            document.body.classList.toggle("dark-theme-body", this.isDarkMode);
            localStorage.setItem("theme", this.isDarkMode ? "dark" : "light");
        },
        closeMenu() {
            this.menuOpen = false;

            const check = document.getElementById("check");
            if (check) {
                check.checked = false;
            }
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
        
        <div class="scroll-banner" :class="{ 'dark-theme-banner': isDarkMode }">
            <div class="scroll-content">
                CATHERINE PHIL SICKLE CELL SUPPORT  INITIATIVE. 
                <span class="line-break"><br /></span>
                
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
                    width="70"
                    height="70"
                />
                <span class="logo-text">CAPSCI-UG</span>
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
                    >Home</router-link
                >

                <router-link
                    to="/resources"
                    :class="{ 'dark-theme-link': isDarkMode }"
                    @click.native="closeMenu"
                    >Resources</router-link
                >
                <router-link
                    to="/blogs"
                    :class="{ 'dark-theme-link': isDarkMode }"
                    @click.native="closeMenu"
                    >Blogs</router-link
                >
                <router-link
                    to="/gallery"
                    :class="{ 'dark-theme-link': isDarkMode }"
                    @click.native="closeMenu"
                    >Gallery</router-link
                >
                <div
                    class="dropdown"
                    :class="{ 'dark-theme-dropdown': isDarkMode }"
                >
                    <router-link
                        to=""
                        class="dropdown-toggle"
                        :class="{ 'dark-theme-link': isDarkMode }"
                    >
                        Our Team
                    </router-link>
                    <div
                        class="dropdown-content"
                        :class="{ 'dark-theme-dropdown-content': isDarkMode }"
                    >
                        <router-link
                            to="/board-members"
                            :class="{ 'dark-theme-link': isDarkMode }"
                            @click.native="closeMenu"
                            >Board Members</router-link
                        >
                        <router-link
                            to="/management-members"
                            :class="{ 'dark-theme-link': isDarkMode }"
                            @click.native="closeMenu"
                            >Management Members</router-link
                        >
                    </div>
                </div>

                <router-link
                    to="/events"
                    :class="{ 'dark-theme-link': isDarkMode }"
                    @click.native="closeMenu"
                    >Events</router-link
                >
                <router-link
                    to="/contact-us"
                    :class="{ 'dark-theme-link': isDarkMode }"
                    @click.native="closeMenu"
                    >Contact-us</router-link
                >
                <router-link
                    to="jdjdjd"
                    class="donate-btn"
                    :class="{ 'dark-theme-button': isDarkMode }"
                    data-bs-toggle="modal"
                    data-bs-target="#buyKitModal"
                    >Donate</router-link
                >
                <button
                    @click="toggleTheme"
                    class="theme-toggle"
                    :class="{ 'dark-theme-button': isDarkMode }"
                    @click.native="closeMenu"
                >
                    <i :class="isDarkMode ? 'bx bx-sun' : 'bx bx-moon'"></i>
                </button>
            </nav>
        </header>

        <div
            class="modal fade"
            id="buyKitModal"
            tabindex="-1"
            aria-labelledby="buyKitModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div style="background-color: red" class="modal-header">
                        <h5 class="modal-title" id="buyKitModalLabel">
                            Support The Fight Against Sickle cells
                        </h5>

                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body">
                        <p>Please Pay with Momo.</p>
                        <h4 class="p-3">Code: <b>726187</b></h4>
                        <p>Catherine Phil SCD</p>

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
    </div>
</template>

<style>
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
    margin-left: -5px;
    font-size: inherit;
    font-weight: inherit;
}

.navbar-brand.logo-aligned {
    justify-content: flex-start;
}

.navbar-brand.logo-aligned .logo-text {
    margin-left: auto;
}

.navbar-brand.logo-aligned.dark-theme-logo .logo-text {
    color: red;
}

body {
    font-family: sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: red;
    transition:
        background-color 0.3s ease,
        color 0.3s ease;
}

.dropdown {
    position: relative;
}

.dropdown-toggle {
    display: block;
    color: black;
    text-decoration: none;
    font-weight: 500;
    font-size: 18px;
    margin-left: 18px;
    padding: 0;
    transition: color 0.3s ease;
}

.dropdown-toggle:hover {
    background-color: red;
    color: white;
    border-radius: 4px;
    padding: 4px;
}

.dropdown-toggle.dark-theme-link {
    color: white;
}

.dropdown-content {
    position: absolute;
    top: 100%;
    left: 0;
    background-color: white;
    border-radius: 10px;

    border-top: none;
    z-index: 10;
    display: none;
    min-width: 150px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown-content a {
    color: black;
    padding: 10px 15px;
    text-decoration: none;
    display: block;
    font-size: 16px;
    text-align: left;
    transition:
        background-color 0.3s ease,
        color 0.3s ease;
    margin-left: 0;
}

.dropdown-content a:hover {
    background-color: #f0f0f0;
    color: #333;
}

body.dark-theme-body {
    background-color: #222;
    color: #eee;
}

.scroll-banner {
    width: 100%;
    background-color: red;
    color: white;
    position: fixed;
    top: 0;
    z-index: 999;
    height: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 6px 10px;
    overflow: hidden;
    text-align: center;
    transition:
        background-color 0.3s ease,
        color 0.3s ease;
}

.scroll-banner.dark-theme-banner {
    background-color: #2c3e50;
    color: red;
}

body.dark-theme-body .scroll-content {
    color: red;
}

.scroll-content {
    display: inline-block;
    animation: bounceText 12s ease-in-out infinite alternate;
    white-space: nowrap;
    font-size: 16px;
    font-weight: bold;
    color: white;
}

@keyframes bounceText {
    0% {
        transform: translateX(-15%);
    }
    100% {
        transform: translateX(15%);
    }
}

.line-break {
    display: none;
}

@media (max-width: 600px) {
    .scroll-content {
        white-space: normal;
        font-size: 14px;
    }
    .line-break {
        display: inline;
    }
}

.header {
    position: fixed;
    top: 35px;
    left: 0;
    width: 100%;
    padding: 8px 8%;
    background-color: white;

    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 998;
    transition: background-color 0.3s ease;
}

.header.dark-theme-header {
    background-color: #222;
}

.logo.dark-theme-logo {
    color: #eee;
}

.navbar {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    transition: background-color 0.3s ease;
}

.navbar a {
    color: black;
    text-decoration: none;
    font-weight: 500;
    font-size: 18px;
    margin-left: 18px;
    transition: color 0.3s ease;
}

.navbar a:hover {
    background-color: red;
    color: white;
    border-radius: 4px;
    padding: 4px;
}

.navbar a.dark-theme-link {
    color: white;
}

.navbar .donate-btn {
    background-color: white;
    border: 2px solid red;
    color: #222;
    padding: 8px 16px;
    border-radius: 10px;
    font-weight: bold;
    margin-left: 22px;
    transition:
        background 0.3s,
        color 0.3s;
}

.navbar .donate-btn:hover {
    background-color: lightgray;
    color: darkblue;
}

.navbar .donate-btn.dark-theme-button {
    background-color: #eee;
    color: #333;
}

.navbar .donate-btn.dark-theme-button:hover {
    background-color: #ccc;
    color: #111;
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
    border: none;
    color: black;
    font-size: 28px;
    cursor: pointer;
    margin-left: 22px;
    outline: none;
    transition: color 0.3s ease;
}

.theme-toggle.dark-theme-button {
    color: #eee;
}

@media (max-width: 768px) {
    .navbar {
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background-color: whitesmoke;
        flex-direction: column;
        align-items: center;
        overflow: hidden;
        display: none;
    }

    .navbar.dark-theme-navbar {
        background-color: #555;
    }

    .navbar a {
        display: block;
        font-size: 1.1rem;
        margin: 1rem 0;
        text-align: center;
        transform: translateY(-20px);
        opacity: 0;
        transition:
            opacity 0.3s ease,
            transform 0.3s ease;
    }

    .header {
        margin-top: 12px;
    }

    #check:checked ~ .navbar {
        display: flex;
    }

    #check:checked ~ .navbar a {
        transform: translateY(0);
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
}

.content {
    padding: 80px 20px;
    text-align: center;
}

.content.dark-theme-content {
    color: #eee;
}
</style>
