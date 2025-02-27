<template>
  <div class="edit-clothing" v-if="item">
    <h2>Edit Clothing Item</h2>
    <form @submit.prevent="editClothing">
      <label>Name:</label>
      <input type="text" v-model="item.name" required />

      <label>Category:</label>
      <select v-model="item.category">
        <option>Tops</option>
        <option>Bottoms</option>
        <option>Shoes</option>
      </select>

      <label>Image URL:</label>
      <input type="text" v-model="item.image" required />

      <button type="submit">Save Changes</button>
    </form>
  </div>
</template>

<script>
export default {
  props: {
    item: Object
  },
  methods: {
    editClothing() {
      this.$emit('update', this.item);
    }
  }
};
</script>

<style scoped>
.edit-clothing {
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
