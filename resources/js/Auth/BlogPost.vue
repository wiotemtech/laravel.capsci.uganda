<script setup>
import { ref, onMounted, watch } from "vue";
import axios from "axios";
import { useRouter } from "vue-router";
import Swal from 'sweetalert2';
const router = useRouter();

let blogs = ref([]);
let paginationData = ref({});
let currentPage = ref(1);
let searchQuery = ref("");

const ourImage = (image) => {
    return "/storage/" + image;
};

const formatDateTime = (datetime) => {
    if (!datetime) return "";
    const date = new Date(datetime);
    return new Intl.DateTimeFormat("default", {
        year: "numeric",
        month: "2-digit",
        day: "2-digit",
        hour: "2-digit",
        minute: "2-digit",
        second: "2-digit",
        hour12: false,
    }).format(date);
};

const getBlogs = async (page = 1) => {
    try {
        const response = await axios.get(
            `/api/blogs?page=${page}&searchQuery=${searchQuery.value}`,
        );
        blogs.value = response.data.blogs.data;
        paginationData.value = response.data.blogs;
        currentPage.value = page;
    } catch (error) {
        console.error("Failed to load blogs:", error);
    }
};

const newBlog = () => {
    router.push("/dashboard/post-create");
};

const onEdit = (id) => {
    router.push(`/dashboard/posts/${id}/edit`);
};

const deleteBlog = (id) => {
     Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.isConfirmed) {
            axios
                .delete(`/api/blogs/${id}`)
                .then(() => {
                    Swal.fire({
                        icon: "success",
                        title:"Deleted !",
                        text:"The blog has been deleted."
                    });
                    getBlogs();
                })
                .catch((error) => {
                    console.error("Error deleting blog:", error);
                     Swal.fire({ icon:"error", text:"Something went wrong.",title:"error"});
                });
        }
    });
};

// Pagination
const goToPage = (page) => {
    if (page >= 1 && page <= paginationData.value.last_page) {
        getBlogs(page);
    }
};

onMounted(() => getBlogs());
watch(searchQuery, () => getBlogs());
</script>

<template>
    <div class="product-container">
        <h1 class="blog-header">Blogs</h1>

        <div class="product-header">
            <input
                type="text"
                placeholder="Search blogs..."
                class="search-input"
                v-model="searchQuery"
            />
            <button
                @click="newBlog"
                class="create-btn"
                :class="{ 'dark-theme-events': isDarkMode }"
            >
                Create Blog
            </button>
        </div>

        <table
            class="product-table"
            :class="{ 'dark-theme-events': isDarkMode }"
        >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Published On</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="blog in blogs" :key="blog.id">
                    <td>{{ blog.id }}</td>
                    <td>{{ blog.title }}</td>
                    <td>{{ formatDateTime(blog.created_at) }}</td>
                    <td>
                        <img
                            v-if="blog.image"
                            :src="ourImage(blog.image)"
                            alt="Blog Image"
                            class="product-img"
                        />
                        <span v-else>No Image</span>
                    </td>
                    <td>
                        <button
                            @click="onEdit(blog.id)"
                            class="action-btn edit-btn"
                        >
                            Edit
                        </button>
                        <button
                            @click="deleteBlog(blog.id)"
                            class="action-btn delete-btn"
                        >
                            Delete
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="pagination" v-if="paginationData.last_page > 1">
            <button
                class="page-btn"
                @click="goToPage(currentPage - 1)"
                :disabled="currentPage === 1"
            >
                Prev
            </button>

            <button
                class="page-btn"
                v-for="page in paginationData.last_page"
                :key="page"
                @click="goToPage(page)"
                :class="{ active: currentPage === page }"
            >
                {{ page }}
            </button>

            <button
                class="page-btn"
                @click="goToPage(currentPage + 1)"
                :disabled="currentPage === paginationData.last_page"
            >
                Next
            </button>
        </div>
    </div>
</template>

<style scoped>
.blog-header {
    color: #222;
}
.product-container {
    max-width: 1000px;
    margin: auto;
    padding: 20px;
    font-family: Arial, sans-serif;
}

.product-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
    flex-wrap: wrap;
    gap: 10px;
}

.product-table {
    color: #222;
}

.search-input {
    flex: 1;
    padding: 10px;
    border: 1px solid #222;
    color: black;
    border-radius: 6px;
    min-width: 200px;
}

body.dark-theme-body .search-input {
    border: 1px solid white;
    color: white;
}

.create-btn {
    padding: 10px 15px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

body.dark-theme-body .create-btn {
    border: 1px solid red;
    background-color: white;
    color: #222;
    cursor: pointer;
}

body.dark-theme-body .create-btn:hover {
    border: none;
    background-color: #0056b3;
    color: white;
    cursor: pointer;
}

.create-btn:hover {
    background-color: #0056b3;
}

.product-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

.product-table th,
.product-table td {
    border: 1px solid #222;
    padding: 12px;
    text-align: left;
    vertical-align: middle;
}

body.dark-theme-body .product-table th {
    border: 1px solid white;
}

body.dark-theme-body .product-table td {
    border: 1px solid white;
    color: white;
}

.product-table th {
    background-color: #f4f4f4;
}

body.dark-theme-body .product-table th {
    background-color: #343a40;
    color: white;
    cursor: pointer;
}

body.dark-theme-body .blog-header {
    color: white;
    cursor: pointer;
}

.product-img {
    max-width: 100px;
    height: auto;
    border-radius: 4px;
}

.action-btn {
    padding: 6px 12px;
    font-size: 13px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-right: 5px;
    transition: background-color 0.3s ease;
}

.edit-btn {
    background-color: #ffc107;
    color: #fff;
}

.edit-btn:hover {
    background-color: #e0a800;
}

.delete-btn {
    background-color: red;
    color: #fff;
}

.delete-btn:hover {
    background-color: #c82333;
}

.pagination {
    display: flex;
    justify-content: center;
    gap: 10px;
    flex-wrap: wrap;
}

.page-btn {
    padding: 8px 12px;
    background-color: #f4f4f4;
    border: 1px solid #ccc;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.page-btn:hover {
    background-color: #e0e0e0;
}

.page-btn.active {
    background-color: #007bff;
    color: white;
}
</style>
