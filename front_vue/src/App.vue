<!-- src/App.vue -->
<template>
  <div id="app">
    <AddAssetCategory @category-added="refreshCategories" />
    <AssetCategoryList ref="categoryList" />
  </div>
</template>

<script>
import AddAssetCategory from './components/AddAssetCategory.vue';
import AssetCategoryList from './components/AssetCategoryList.vue';

export default {
  components: {
    AddAssetCategory,
    AssetCategoryList,
  },
  methods: {
    refreshCategories() {
      this.$refs.categoryList.fetchCategories();
    },
  },
};
</script>
