<template>
  <div class="container py-5">
    <div class="card shadow-lg border-0 rounded-lg">
      <div class="card-header bg-primary text-white text-center">
        <h3 class="mb-0">Add New Blog</h3>
      </div>
      <div class="card-body">
        <form @submit.prevent="submitForm">
          <div class="mb-4">
            <label for="title" class="form-label fw-bold">Blog Title</label>
            <input
              v-model="form.title"
              type="text"
              id="title"
              class="form-control"
              placeholder="Enter blog title"
              required
            />
          </div>

          <div class="mb-4">
            <label for="image" class="form-label fw-bold">Blog Image</label>
            <input
              @change="handleFileUpload"
              type="file"
              id="image"
              class="form-control"
              accept="image/*"
              required
            />
            <div v-if="previewImage" class="mt-3">
              <img :src="previewImage" class="img-thumbnail" style="max-height: 200px" />
            </div>
          </div>

          <div class="mb-4">
            <label for="description" class="form-label fw-bold">Blog Description</label>
            <textarea
              v-model="form.description"
              id="description"
              class="form-control"
              rows="6"
              placeholder="Write your blog content here..."
              required
            ></textarea>
          </div>

          <div class="d-flex justify-content-between">
            <button type="button" class="btn btn-secondary" @click="cancelForm">
              <i class="fas fa-times me-2"></i> Cancel
            </button>
            <button type="submit" class="btn btn-success">
              <i class="fas fa-paper-plane me-2"></i> Publish Blog
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import { ref } from 'vue';
import { useRouter } from 'vue-router';

export default {
  name: 'AddBlog',
  setup() {
    const router = useRouter();

    const form = ref({
      title: '',
      description: '',
      image: null,
    });

    const previewImage = ref(null);

    const handleFileUpload = (event) => {
      const file = event.target.files[0];
      if (file) {
        form.value.image = file;
        previewImage.value = URL.createObjectURL(file);
      }
    };

    const resetForm = () => {
      form.value.title = '';
      form.value.description = '';
      form.value.image = null;
      previewImage.value = null;
    };

    const submitForm = () => {
      console.log('Form submitted:', form.value);
    
      resetForm();
      alert('Blog submitted successfully!');
      router.push('/dashboard/posts');
    };

    const cancelForm = () => {
      resetForm();
      router.push('/dashboard/posts');
    };

    return {
      form,
      previewImage,
      handleFileUpload,
      submitForm,
      cancelForm,
    };
  },
};
</script>

<style scoped>
.card {
  max-width: 700px;
  margin: 0 auto;
}
</style>


