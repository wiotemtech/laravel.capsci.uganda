<template>
    <div>
        <router-link to="/">Home</router-link>
        <router-link to="/about-us">ABout us</router-link>
        <router-link to="/settings">Settings</router-link>

        <router-view></router-view>
    </div>
</template>

<script>
export default {
    name:"App"
}
</script>