<template>
  <div class="auth-container">
    <h2>Register</h2>
    <form @submit.prevent="handleRegister">
      <label>Email:</label>
      <input type="email" v-model="email" required />

      <label>Password:</label>
      <input type="password" v-model="password" required />

      <button type="submit">Register</button>
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
    async handleRegister() {
      try {
        // Register logic (to be implemented later)
        console.log("Registering with", this.email, this.password);
      } catch (error) {
        console.error("Registration failed", error);
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
