<template>
  <div class="filter-clothing">
    <h2>Filter Clothing</h2>
    <label>Category:</label>
    <select v-model="selectedCategory">
      <option value="">All</option>
      <option>Tops</option>
      <option>Bottoms</option>
      <option>Shoes</option>
    </select>
    <button @click="applyFilter">Filter</button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      selectedCategory: ''
    };
  },
  methods: {
    applyFilter() {
      this.$emit('filter', this.selectedCategory);
    }
  }
};
</script>

<style scoped>
.filter-clothing {
  max-width: 300px;
  margin: auto;
}
select {
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
