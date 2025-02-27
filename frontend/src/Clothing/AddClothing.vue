<template>
  <div class="add-clothing">
    <h2>Add New Clothing Item</h2>
    <form @submit.prevent="addClothing">
      <label>Name:</label>
      <input type="text" v-model="name" required />

      <label>Category:</label>
      <select v-model="category">
        <option>Tops</option>
        <option>Bottoms</option>
        <option>Shoes</option>
      </select>

      <label>Image URL:</label>
      <input type="text" v-model="image" required />

      <button type="submit">Add</button>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      name: '',
      category: 'Tops',
      image: ''
    };
  },
  methods: {
    addClothing() {
      const newItem = {
        id: Date.now(),
        name: this.name,
        category: this.category,
        image: this.image
      };
      this.$emit('add', newItem);
      this.name = '';
      this.image = '';
    }
  }
};
</script>

<style scoped>
.add-clothing {
  max-width: 400px;
  margin: auto;
}
input, select {
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
