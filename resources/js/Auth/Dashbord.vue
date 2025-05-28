<script>
import { ref, onMounted } from "vue";
import { useRouter } from "vue-router";

export default {
  name: "Dashboard",
  setup() {
    const isSidebarCollapsed = ref(true);
    const router = useRouter();

    const toggleSidebar = () => {
      isSidebarCollapsed.value = !isSidebarCollapsed.value;
    };

    const logout = async () => {
      try {
      
        await fetch("/api/logout", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
            Authorization: `Bearer ${localStorage.getItem("token")}`,
          },
        });

        localStorage.removeItem("token");
        localStorage.removeItem("user");

        router.push("/login");
      } catch (error) {
        console.error("Logout failed:", error);
      }
    };

    onMounted(() => {
      const handleResize = () => {
        isSidebarCollapsed.value = window.innerWidth <= 768;
      };
      handleResize();
      window.addEventListener("resize", handleResize);
    });

    return {
      isSidebarCollapsed,
      toggleSidebar,
      logout,
    };
  },
};
</script>


<template>
  <div class="d-flex flex-column h-100">
    <div class="sidebar" :class="{ collapsed: isSidebarCollapsed }" id="sidebar">
      <div class="sidebar-header">
        <h3>Dashboard</h3>
      </div>
      <ul class="sidebar-menu">
        <li :class="{ active: $route.path === '/dashboard' }">
          <router-link to="/dashboard">
            <i class="fas fa-tachometer-alt"></i> Dashboard
          </router-link>
        </li>

        <li :class="{ active: $route.path === '/dashboard/posts' }">
          <router-link to="/dashboard/posts">
            <i class="fas fa-plus-circle"></i> Post Blog
          </router-link>
        </li>
        <!--
        <li :class="{ active: $route.path === '/dashboard/add-blogs' }">
          <router-link to="/dashboard/add-blogs">
            <i class="fas fa-blog"></i> Add Blogs
          </router-link>
        </li>
        <li :class="{ active: $route.path === '/dashboard/add-resources' }">
          <router-link to="/dashboard/add-resources">
            <i class="fas fa-folder-plus"></i> Add Resources
          </router-link>
        </li>
      -->
        <li>
          <a href="#" @click.prevent="logout">
            <i class="fas fa-sign-out-alt"></i> Logout
          </a>
        </li>
      </ul>
    </div>

    <div class="top-navbar" :class="{ expanded: !isSidebarCollapsed }" id="top-navbar">
      <button class="toggle-button" @click="toggleSidebar">
        <i class="fas fa-bars"></i>
      </button>
      <div class="logo">
        <img src="/public/assets/images/logo1.png" alt="Logo" class="logo-img" />
      </div>
      <button class="logout-button" @click="logout">
        <i class="fas fa-sign-out-alt"> logout</i>
      </button>
    </div>

    <main class="flex-grow-1" :class="{ expanded: !isSidebarCollapsed }" id="main-content">
      <router-view />
    </main>
  </div>
</template>



<style scoped>
.sidebar {
  background-color: #343a40;
  color: white;
  width: 250px;
  transition: transform 0.3s ease;
  position: fixed;
  top: 0;
  left: 0;
  height: 100vh;
  z-index: 1000;
  overflow-y: auto;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
}

.sidebar.collapsed {
  transform: translateX(-100%);
}

.sidebar-header {
  padding: 20px;
  text-align: center;
  border-bottom: 1px solid #6c757d;
}

.sidebar-menu {
  padding: 0;
  margin-top: 20px;
}

.sidebar-menu li {
  list-style: none;
  padding: 10px 20px;
  transition: background-color 0.2s ease;
}

.sidebar-menu li:hover {
  background-color: #495057;
}

.sidebar-menu li.active {
  background-color: #007bff;
}

.sidebar-menu li a {
  color: white;
  text-decoration: none;
  display: flex;
  align-items: center;
}

.sidebar-menu li a i {
  margin-right: 10px;
  width: 20px;
  text-align: center;
}

#main-content {
  flex: 1;
  padding: 20px;
  margin-left: 0;
  transition: margin-left 0.3s ease;
  margin-top: 60px;
}

#main-content.expanded {
  margin-left: 250px;
}

.top-navbar {
  background-color: #ffffff;
  color: #343a40;
  padding: 10px 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  position: sticky;
  top: 0;
  z-index: 999;
  margin-left: 0;
  transition: margin-left 0.3s ease;
  height: 60px;
}

.top-navbar.expanded {
  margin-left: 250px;
}

.toggle-button,
.logout-button {
  background-color: transparent;
  border: none;
  color: #343a40;
  cursor: pointer;
  font-size: 20px;
  padding: 0;
}

.logo {
  margin-right: auto;
  margin-left: 10px;
}

.logo-img {
  max-height: 40px;
}

@media (max-width: 768px) {
  .sidebar {
    transform: translateX(-100%);
  }
  .sidebar.collapsed {
    transform: translateX(-100%);
  }
  #main-content,
  #main-content.expanded,
  .top-navbar,
  .top-navbar.expanded {
    margin-left: 0;
  }
}
</style>
