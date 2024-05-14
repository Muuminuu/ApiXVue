<!-- src/components/AssetCategoryList.vue -->
<template>
    <div>
      <h1>Asset Categories</h1>
      <ul>
        <li v-for="category in categories" :key="category.id">
          {{ category.name }}
          <button @click="deleteCategory(category.id)">Delete</button>
        </li>
      </ul>
    </div>
  </template>
  
  <script>
  import axios from '../axios';
  
  export default {
    data() {
      return {
        categories: [],
      };
    },
    created() {
      this.fetchCategories();
    },
    methods: {
      fetchCategories() {
        console.log('Fetching categories...');
        axios.get('/assetcategories')
          .then(response => {
            console.log('Response:', response);
            this.categories = response.data;
          })
          .catch(error => {
            console.error('Error fetching categories:', error);
          });
      },
      deleteCategory(id) {
        axios.delete(`/assetcategories/${id}`)
          .then(() => {
            this.fetchCategories(); // Refresh the list
          })
          .catch(error => {
            console.error('Error deleting category:', error);
          });
      },
    },
  };
  </script>