<script>

export default {
  props: ['slug', 'subjectChilds', 'textChilds', 'title'],
  created() {
    console.log(this.subjectChilds);
    console.log(this.textChilds);

  },
  data() {
    return {
      parsedContent: {}
    }
  }
  // Outras propriedades e métodos do componente
}

</script>
<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/vue3'

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
                      <h2 class="text-3xl font-extrabold dark:text-white mb-8">{{ title }}</h2>
                      <div v-if="subjectChilds.length > 0">
                        <h3>Subjects</h3>
                        <ul>
                          <li v-for="subject in subjectChilds" :key="subject.slug" class="mb-2">
                            <Link :href="'/explore/subject/' + subject.slug" >{{ subject.subject }}</Link>
                          </li>
                        </ul>
                      </div>
                      <div v-if="textChilds.length > 0">
                        <h3>Texts</h3>
                        <ul>
                          <li v-for="text in textChilds" :key="text.slug" class="mb-2">
                            <Link :href="'/text/' + text.slug" >{{ text.title }}</Link>
                          </li>
                        </ul>
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

