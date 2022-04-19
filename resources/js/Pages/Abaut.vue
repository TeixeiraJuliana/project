<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';

</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Abaut
            </h2>
        </template>
    </AppLayout>
</template>

<script>
export default {
    props: ['content'],
    components: {
        AppLayout,
    }

}
</script>

<style>

</style>
