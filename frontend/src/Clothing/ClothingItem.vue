<template>
  <div class="clothing-item">
    <img :src="item.image" alt="Clothing Image" class="clothing-image" />
    <h3>{{ item.name }}</h3>
    <p>Category: {{ item.category }}</p>
    <button @click="$emit('edit', item)">Edit</button>
    <button @click="$emit('delete', item.id)">Delete</button>
  </div>
</template>

<script>
export default {
  props: {
    item: Object
  }
};
</script>

<style scoped>
.clothing-item {
  border: 1px solid #ddd;
  padding: 10px;
  text-align: center;
  margin-bottom: 10px;
}
.clothing-image {
  width: 100%;
  max-height: 150px;
  object-fit: cover;
}
button {
  margin: 5px;
  padding: 5px 10px;
  cursor: pointer;
}
</style>
