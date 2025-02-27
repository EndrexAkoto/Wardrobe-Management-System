<template>
  <div class="dashboard-container">
    <h2>Wardrobe Dashboard</h2>

    <button @click="showAddItemForm = true">Add Clothing Item</button>

    <div v-if="showAddItemForm" class="modal">
      <h3>Add Clothing Item</h3>
      <form @submit.prevent="addItem">
        <label>Name:</label>
        <input type="text" v-model="newItem.name" required />

        <label>Category:</label>
        <select v-model="newItem.category" required>
          <option>Tops</option>
          <option>Bottoms</option>
          <option>Shoes</option>
        </select>

        <button type="submit">Add</button>
        <button type="button" @click="showAddItemForm = false">Cancel</button>
      </form>
    </div>

    <div>
      <h3>My Clothing Items</h3>
      <input type="text" v-model="searchQuery" placeholder="Search items..." />
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>Category</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(item, index) in filteredItems" :key="index">
            <td>{{ item.name }}</td>
            <td>{{ item.category }}</td>
            <td>
              <button @click="editItem(index)">Edit</button>
              <button @click="deleteItem(index)">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      showAddItemForm: false,
      searchQuery: '',
      newItem: { name: '', category: '' },
      clothingItems: []
    };
  },
  computed: {
    filteredItems() {
      return this.clothingItems.filter(item =>
        item.name.toLowerCase().includes(this.searchQuery.toLowerCase())
      );
    }
  },
  methods: {
    addItem() {
      this.clothingItems.push({ ...this.newItem });
      this.newItem.name = '';
      this.newItem.category = '';
      this.showAddItemForm = false;
    },
    editItem(index) {
      const item = this.clothingItems[index];
      this.newItem = { ...item };
      this.showAddItemForm = true;
      this.clothingItems.splice(index, 1);
    },
    deleteItem(index) {
      this.clothingItems.splice(index, 1);
    }
  }
};
</script>

<style scoped>
.dashboard-container {
  width: 80%;
  margin: auto;
  text-align: center;
}
.modal {
  background: rgba(0, 0, 0, 0.1);
  padding: 20px;
  border-radius: 8px;
}
button {
  margin: 5px;
  padding: 8px 12px;
  cursor: pointer;
}
input, select {
  display: block;
  margin: 10px auto;
  padding: 8px;
}
table {
  width: 100%;
  margin-top: 20px;
  border-collapse: collapse;
}
th, td {
  border: 1px solid #ddd;
  padding: 8px;
}
th {
  background: #00796B;
  color: white;
}
</style>
