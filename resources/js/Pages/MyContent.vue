<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/vue3'


</script>
<script>
export default {
    data: function() {
        showModal: false
    }
} 

</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                MyContent
            </h2>
            
        </template>
       
        <div class="pb-12 pt-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                    <v-btn prepend-icon="mdi-plus" @click="showModal = true">
                        Insert content
                    </v-btn>
            </div>  
        </div>  
        <modal v-if="showModal" @close="showModal = false">
            
        <h3 slot="header">custom header</h3>

        <button class="modal-default-button" @click="$emit('close')">
                fechar
              </button>
      </modal>
        <div class="pb-12 pt-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="exploreConcepts">
                        <div class="listContent">
                            <ul>
                              <li><Link href="/explore/subject/education">Education</Link></li>
                              <li><Link href="/explore/subject/economics">Economics</Link></li>
                              <li><Link href="/explore/subject/Health">Health</Link></li>
                              <li><Link href="/explore/subject/Politics">Politics</Link></li>
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

