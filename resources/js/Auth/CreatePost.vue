<script setup>
import { ref, onMounted } from "vue";
import axios from "axios";
import { useRouter, useRoute } from "vue-router";
import Swal from "sweetalert2";

const title = ref("");
const description = ref("");
const image = ref(null);
const previewImage = ref(null);
const errors = ref({});
const editMode = ref(false);

const router = useRouter();
const route = useRoute();

// ✅ SweetAlert Toast setup
const toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
});

// ✅ File change preview
const handleFileChange = (e) => {
    const file = e.target.files[0];
    if (file) {
        image.value = file;
        previewImage.value = URL.createObjectURL(file);
    }
};

// ✅ Fetch blog for edit mode
const getBlog = async () => {
    try {
        const response = await axios.get(`/api/blogs/${route.params.id}/edit`);
        const blog = response.data.blog;
        title.value = blog.title;
        description.value = blog.description;
        previewImage.value = `/storage/${blog.image}`;
    } catch (error) {
        console.error("Error fetching blog:", error);
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "Unable to load blog data!",
        });
    }
};

// ✅ Check if we are editing or creating
onMounted(() => {
    if (route.name === "blogs.edit" && route.params.id) {
        editMode.value = true;
        getBlog();
    }
});

// ✅ Main save handler
const handleSave = async () => {
    if (editMode.value) {
        await updateBlog();
    } else {
        await createBlog();
    }
};

// ✅ Create blog
const createBlog = async () => {
    const formData = new FormData();
    formData.append("title", title.value);
    formData.append("description", description.value);
    if (image.value) formData.append("image", image.value);

    try {
        await axios.post("/api/blogs", formData, {
            headers: { "Content-Type": "multipart/form-data" },
        });

        toast.fire({ icon: "success", title: "Blog created successfully!" });
        resetForm();
        router.push("/dashboard/posts");
    } catch (error) {
        handleErrors(error);
    }
};

// ✅ Update blog
const updateBlog = async () => {
    const formData = new FormData();
    formData.append("title", title.value);
    formData.append("description", description.value);
    if (image.value) formData.append("image", image.value);
    formData.append("_method", "PUT");

    try {
        await axios.post(`/api/blogs/${route.params.id}`, formData, {
            headers: { "Content-Type": "multipart/form-data" },
        });

        toast.fire({ icon: "success", title: "Blog updated successfully!" });
        resetForm();
        router.push("/dashboard/posts");
    } catch (error) {
        handleErrors(error);
    }
};

// ✅ Reset form
const resetForm = () => {
    title.value = "";
    description.value = "";
    image.value = null;
    previewImage.value = null;
    errors.value = {};
};

// ✅ Error handler
const handleErrors = (error) => {
    if (error.response && error.response.status === 422) {
        errors.value = error.response.data.errors;
    } else {
        console.error("Submission error:", error);
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Something went wrong! Please try again.",
        });
    }
};
</script>

<template>
    <div class="container py-5">
        <div class="card shadow-lg border-0 rounded-lg mx-auto" style="max-width: 700px">
            <div class="card-header bg-primary text-white text-center">
                <h3 class="mb-0">
                    <span v-if="editMode">Edit</span>
                    <span v-else>Create</span> Blog
                </h3>
            </div>

            <div class="card-body">
                <form @submit.prevent="handleSave" novalidate>
                    <!-- Blog Title -->
                    <div class="mb-4">
                        <label for="title" class="form-label fw-semibold">Blog Title</label>
                        <input
                            v-model="title"
                            type="text"
                            id="title"
                            class="form-control form-control-lg"
                            placeholder="Enter blog title"
                            required
                        />
                        <small class="text-danger" v-if="errors.title">
                            {{ errors.title[0] }}
                        </small>
                    </div>

                    <!-- Blog Image -->
                    <div class="mb-4">
                        <label for="image" class="form-label fw-semibold">Blog Image</label>
                        <input
                            type="file"
                            id="image"
                            @change="handleFileChange"
                            class="form-control"
                            accept="image/*"
                            :required="!editMode"
                        />
                        <small class="text-danger" v-if="errors.image">
                            {{ errors.image[0] }}
                        </small>

                        <div v-if="previewImage" class="mt-3 text-center">
                            <img
                                :src="previewImage"
                                alt="Preview"
                                class="img-fluid rounded"
                                style="max-height: 200px"
                            />
                        </div>
                    </div>

                    <!-- Blog Description -->
                    <div class="mb-4">
                        <label for="description" class="form-label fw-semibold">Blog Description</label>
                        <textarea
                            v-model="description"
                            id="description"
                            class="form-control"
                            rows="6"
                            placeholder="Write your blog content here..."
                            required
                        ></textarea>
                        <small class="text-danger" v-if="errors.description">
                            {{ errors.description[0] }}
                        </small>
                    </div>

                    <!-- Buttons -->
                    <div class="d-flex justify-content-between align-items-center">
                        <button type="button" class="btn btn-outline" @click="router.back()">
                            <i class="fas fa-times me-2"></i> Cancel
                        </button>

                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-paper-plane me-2"></i>
                            <span v-if="editMode">Update Blog</span>
                            <span v-else>Publish Blog</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<style scoped>
.text-danger {
    font-size: 0.875rem;
}

.btn-outline {
    border: 1px solid red;
    color: red;
    cursor: pointer;
    transition: 0.3s;
}

.btn-outline:hover {
    background-color: red;
    color: white;
}
</style>
