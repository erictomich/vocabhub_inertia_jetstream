<script>

export default {
  props: ['text', 'title'],
  created() {
    console.log(this.text);
    console.log(this.title);

  },
  data() {
    return {
      showTranslate: false,
      words: ['system', 'dividers']
    }
  }
  // Outras propriedades e métodos do componente
}

</script>
<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Text from '../../Components/Text.vue'

</script>
<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Explore
            </h2>
            
        </template>
        <div class="py-2">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <v-breadcrumbs :items="['Explore', 'Education']"></v-breadcrumbs>
            </div>
        </div>
        <div class="pb-12 pt-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                  <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                      <h2 class="text-3xl font-extrabold dark:text-white mb-8">{{ text.title }}</h2>
                      <button @mouseover="showTranslate = true" @mouseout="showTranslate = false">mostra tradução</button>
                      <div v-if="!showTranslate">
                        <Text :text="text.text" :words="words"  />
                      </div>
                      <div v-else>
                        <Text :text="text.text_pt" />
                      </div>
                      
                  </div>
                </div>
            </div> 
        </div>
    </AppLayout>
</template>
<style>
.listContent {
  width: 100%;
}
.listContent ul {
  list-style-type: none;
}

.listContent li {
  display: inline-block;
  height: 60px;
  width: calc(50% - 10px);
/* ajuste o espaçamento entre as colunas se necessário */
  
  box-sizing: border-box;
  margin: 5px;
  background-color: #11b8a1;
}

.listContent li:hover {
  background-color:aqua;
}
.listContent li a {
  display: flex;
  width: 100% !important;
  height: 100% !important;
  padding: 5px 20px;
  align-items: center;
  font-size: 24px;
  color: #FFF;
}
@media (min-width: 1024px) {
  .exploreConcepts {
    min-height: 100vh;
    display: flex;
    align-items: flex-start;
  }
}
</style>

