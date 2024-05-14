<!-- src/components/AddAssetCategory.vue -->
<template>
    <div>
      <h2>Add Asset Category</h2>
      <form @submit.prevent="addCategory">
        <input v-model="name" placeholder="Category Name" required />
        <button type="submit">Add</button>
      </form>
    </div>
  </template>
  
  <script>
  import axios from '../axios';
  
  export default {
    data() {
      return {
        name: '',
      };
    },
    methods: {
      addCategory() {
        axios.post('/assetcategories', { name: this.name })
          .then(() => {
            this.name = '';
            this.$emit('category-added'); // Emit event to parent to refresh list
          })
          .catch(error => {
            console.error(error);
          });
      },
    },
  };
  </script>
  