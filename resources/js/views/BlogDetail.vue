<script setup>
import { ref, onMounted } from "vue";
import { useRoute } from "vue-router";
import axios from "axios";

const route = useRoute();
const blog = ref(null);

const fetchBlog = async () => {
  try {
    const res = await axios.get(`/api/blogs/${route.params.id}`);
    blog.value = res.data.blog;
  } catch (err) {
    console.error(err);
  }
};

onMounted(() => {
  fetchBlog();
});
</script>

<template>
  <div class="blog-detail" v-if="blog">
    <h1>{{ blog.title }}</h1>
    <p><strong>Published:</strong> {{ new Date(blog.created_at).toLocaleDateString() }}</p>
    <img v-if="blog.image" :src="'/storage/' + blog.image" alt="Blog Image" />
    <div class="content" v-html="blog.description"></div>
  </div>
  <p v-else>Loading blog...</p>
</template>

<style scoped>
.blog-detail {
  max-width: 800px;
  margin: 40px auto;
  padding: 20px;
}

.blog-detail img {
  width: 100%;
  max-height: 400px;
  object-fit: cover;
  margin: 20px 0;
}

.blog-detail .content {
  line-height: 1.8;
  font-size: 1.1rem;
}
</style>
