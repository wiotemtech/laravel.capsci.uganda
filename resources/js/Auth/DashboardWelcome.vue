<template>
    <div class="welcome-screen" :class="{ 'dark-theme-events': isDarkMode }">
        <h1>Welcome to the Admin Dashboard!</h1>
        <h4>Please use the sidebar to navigate through the admin features.</h4>
        <h5>Thankyou!</h5>
    </div>
</template>

<script>
export default {
    name: "DashboardWelcome",
};
</script>

<style scoped>
.welcome-screen {
    text-align: center;
    font-size: 44px;
    margin-top: 100px;
    font-weight: bold;
    color: #222;
}

h1,
h4,
h5 {
    font-size: 30px;
    font-weight: 400;
}

body.dark-theme-body .welcome-screen {
    background-color: #222;
    color: white;
}
</style>
