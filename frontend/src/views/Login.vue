<template>
  <div class="auth-container">
    <h2>Login</h2>
    <form @submit.prevent="handleLogin">
      <label>Email:</label>
      <input type="email" v-model="email" required />

      <label>Password:</label>
      <input type="password" v-model="password" required />

      <button type="submit">Login</button>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      email: '',
      password: ''
    };
  },
  methods: {
    async handleLogin() {
      try {
        // Call API for authentication (to be implemented later)
        console.log("Logging in with", this.email, this.password);
      } catch (error) {
        console.error("Login failed", error);
      }
    }
  }
};
</script>

<style scoped>
.auth-container {
  width: 300px;
  margin: auto;
  text-align: center;
}
input {
  display: block;
  width: 100%;
  margin: 10px 0;
  padding: 8px;
}
button {
  background: #00796B;
  color: white;
  padding: 10px;
  border: none;
  cursor: pointer;
}
</style>
