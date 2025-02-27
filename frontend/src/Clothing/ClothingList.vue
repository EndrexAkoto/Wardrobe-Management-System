<template>
  <div>
    <h2>Clothing List</h2>
    <FilterClothing @filter="applyFilter" />
    <div v-if="clothingItems.length">
      <ClothingItem v-for="item in filteredItems" :key="item.id" :item="item" @edit="editItem" @delete="deleteItem" />
    </div>
    <div v-else>
      <p>No clothing items available.</p>
    </div>
    <router-link to="/add-clothing">Add New Clothing</router-link>
  </div>
</template>

<script>
import ClothingItem from "@/components/ClothingItem.vue";
import FilterClothing from "@/components/FilterClothing.vue";

export default {
  components: { ClothingItem, FilterClothing },
  data() {
    return {
      clothingItems: [],
      filteredItems: []
    };
  },
  methods: {
    async fetchClothing() {
      // Fetch clothing items from API (to be implemented)
      this.clothingItems = [
        { id: 1, name: "T-Shirt", category: "Top" },
        { id: 2, name: "Jeans", category: "Bottom" }
      ];
      this.filteredItems = this.clothingItems;
    },
    applyFilter(filterCriteria) {
      this.filteredItems = this.clothingItems.filter(item =>
        item.category.includes(filterCriteria)
      );
    },
    editItem(itemId) {
      this.$router.push(`/edit-clothing/${itemId}`);
    },
    deleteItem(itemId) {
      this.clothingItems = this.clothingItems.filter(item => item.id !== itemId);
      this.filteredItems = this.filteredItems.filter(item => item.id !== itemId);
    }
  },
  mounted() {
    this.fetchClothing();
  }
};
</script>

<style scoped>
div {
  padding: 20px;
}
</style>
