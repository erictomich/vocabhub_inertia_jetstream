<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Text from '@/Components/Text.vue';
</script>
<script>

export default {
    data() {
        return {
            content: `<h2>About Me</h2><p>Hi, my name is John Doe and I am a web developer.</p>
            <v-icon color="info" icon="mdi-plus"></v-icon>
            <word>Button</word>
        <p>I have been working in the industry for 5 years and have experience with HTML, CSS, JavaScript, and PHP.</p>`
    
        }
    },
    render() {
        return h('div', this.content)
    }
}

</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <Text title="Testando" :content="content" />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
