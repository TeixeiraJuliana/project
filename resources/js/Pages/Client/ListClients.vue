<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import JetNavLink from '@/Jetstream/NavLink.vue';

</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Clientes
            </h2>
        </template>
            <div>
                <button type="button" class="btn btn-primary">
                <JetNavLink :href="route('client.create')" :active="route().current('client')">
                    Cadastrar cliente
                </JetNavLink>
                </button>
            </div>
    </AppLayout>
</template>

<script>

export default {

}
</script>

<style>
    .btn{
        width: 160px;
        height: 60px;
        border: none;
        color: #fff;
        border-radius: 5px;
    }
    .btn-primary{
        background: rgb(0, 162, 255);
    }
</style>
