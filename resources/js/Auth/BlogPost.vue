<script setup>
import { ref, onMounted, watch } from 'vue'
import axios from 'axios'
import { useRouter } from 'vue-router'

const router = useRouter()

let products = ref([])

let paginationData = ref({})
let currentPage = ref(1)

let searchQuery = ref('')


const ourImage = (image) => {
  return '/storage/' + image
}

onMounted(async () => {
  await getProducts()
})

watch(searchQuery, () => {
  getProducts()
})

const newProduct = () => {
  router.push('/dashboard/post-create')
}


const getProducts = async (page = 1) => {
  try {
    const response = await axios.get(`/api/products?page=${page}&searchQuery=${searchQuery.value}`)

    products.value = response.data.products.data
    paginationData.value = response.data.products
    currentPage.value = page
  } catch (error) {
    console.error('Failed to fetch products:', error)
  }
}

const goToPage = (page) => {
  if (page >= 1 && page <= paginationData.value.last_page) {
    getProducts(page)
  }
}


const editProduct = (id) => {
  router.push(`/dashboard/posts/${id}/edit`)
}


const deleteProduct = async (id) => {
  if (confirm('Are you sure you want to delete this product?')) {
    try {
      await axios.delete(`/api/products/${id}`)
      alert('Product deleted successfully!')
      getProducts(currentPage.value) // Refresh list after delete
    } catch (error) {
      console.error('Failed to delete product:', error)
      alert('Failed to delete product.')
    }
  }
}

const viewProduct = (id) => {
  router.push(`/posts/${id}`)
}
</script>

<template>
  <div class="product-container">
    <h1 style="color: black; font-size: 33px">Products</h1>
    <div class="product-header">
      <input type="text" placeholder="Search products..." class="search-input" v-model="searchQuery" />
      <button @click="newProduct" class="create-btn">Create Product</button>
    </div>

    <table class="product-table">
      <thead>
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Date published</th>
          <th>Image</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="product in products" :key="product.id">
          <td>{{ product.name }}</td>
          <td>{{ product.description }}</td>
          <td>{{ new Date(product.created_at).toLocaleDateString() }}</td>
          <td>
            <img
              v-if="product.image"
              :src="ourImage(product.image)"
              alt="Product Image"
              class="product-img"
            />
            <span v-else>No Image</span>
          </td>
          <td>
            <button class="action-btn edit-btn" @click="editProduct(product.id)">
              <i class="bi bi-pencil"></i> Edit
            </button>
            <button class="action-btn delete-btn" @click="deleteProduct(product.id)">
              <i class="bi bi-trash"></i> Delete
            </button>
            <button class="action-btn view-btn" @click="viewProduct(product.id)">
              <i class="bi bi-eye"></i> View
            </button>
          </td>
        </tr>
      </tbody>
    </table>

    <div class="pagination" v-if="paginationData.last_page > 1">
      <button class="page-btn" @click="goToPage(currentPage - 1)" :disabled="currentPage === 1">
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

.search-input {
  flex: 1;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 6px;
  min-width: 200px;
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
  border: 1px solid #ddd;
  padding: 12px;
  text-align: left;
  vertical-align: middle;
}

.product-table th {
  background-color: #f4f4f4;
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
  display: inline-flex;
  align-items: center;
  gap: 6px;
}

.edit-btn {
  background-color: #ffc107;
  color: #fff;
}

.edit-btn:hover {
  background-color: #e0a800;
}

.delete-btn {
  background-color: #dc3545;
  color: #fff;
}

.delete-btn:hover {
  background-color: #c82333;
}

.view-btn {
  background-color: #17a2b8;
  color: #fff;
}

.view-btn:hover {
  background-color: #117a8b;
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
  border-color: #007bff;
}
</style>


