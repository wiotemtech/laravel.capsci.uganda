<script>
export default {
    name: "LoginForm",
    data() {
        return {
            form: {
                username: "",
                password: "",
            },
            loading: false,
            error: null,
        };
    },
    methods: {
        async login() {
            this.loading = true;
            this.error = null;
            try {
                const response = await fetch(
                    "/api/login",
                    {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                        },
                        body: JSON.stringify(this.form),
                    },
                );

                const data = await response.json();

                if (response.ok) {
                    localStorage.setItem("token", data.token);
                    this.$router.push("/dashboard");
                } else {
                    this.error = data.message || "Login failed";
                }
            } catch (err) {
                this.error = "Network error";
            } finally {
                this.loading = false;
            }
        },
    },
};
</script>

<template>
    <div class="login-wrapper">
        <div class="login-container">
            <h2>Admin Login</h2>
            <form @submit.prevent="login">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input
                        type="text"
                        id="username"
                        v-model="form.username"
                        placeholder="Enter username"
                        required
                    />
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input
                        type="password"
                        id="password"
                        v-model="form.password"
                        placeholder="Enter password"
                        required
                    />
                </div>
                <button type="submit" :disabled="loading">
                    {{ loading ? "Logging in..." : "Login" }}
                </button>
                <p v-if="error" class="error">{{ error }}</p>
                <router-link to="/" class=""> Go to Home Page! </router-link>
            </form>
        </div>
    </div>
</template>

<style scoped>
.login-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #222;
    padding: 20px;
}

.login-container {
    background-color: #f9f9f9;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
    width: 100%;
    max-width: 400px;
}

h2 {
    text-align: center;
    color: #0056b3;
    margin-bottom: 25px;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: 500;
    margin-bottom: 8px;
    color: black;
}

input {
    width: calc(100% - 16px);
    padding: 10px;
    color: black;
    border: 1px solid #ddd;
    border-radius: 6px;
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

input:focus {
    border-color: #007bff;
    outline: none;
    box-shadow: 0 0 6px rgba(0, 123, 255, 0.25);
}

button {
    width: 100%;
    padding: 12px;
    background-color: #007bff;
    color: white;
    font-weight: 600;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #0056b3;
}

button:disabled {
    background-color: #ccc;
    cursor: not-allowed;
}

.error {
    color: red;
    text-align: center;
    margin-top: 15px;
    font-size: 0.9rem;
}

@media (max-width: 576px) {
    .login-container {
        padding: 20px;
    }
    h2 {
        margin-bottom: 20px;
    }
    .form-group {
        margin-bottom: 15px;
    }
    input {
        padding: 8px;
        font-size: 0.95rem;
    }
    button {
        padding: 10px;
        font-size: 0.95rem;
    }
}
</style>
