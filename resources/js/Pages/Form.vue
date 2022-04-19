<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Label from './Label.vue'

</script>

<template>
    <AppLayout>
        <div class="container">
            <div class="box">
                <div class="card">
                     <h1>Título</h1>
                    <div class="card-item">
                        <label for="">Nome</label>
                        <input type="text">
                    </div>
                    <div class="card-item">
                        <label for="">E-mail</label>
                        <input type="text">
                    </div>
                     <div class="card-item">
                        <label for="">Telefone</label>
                        <input type="text">
                    </div>
                    <div class="card-item">
                        <label for="">Cpf</label>
                        <input type="text">
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>
export default {

    components: {
        AppLayout,
    }

}
</script>

<style>

    .box{
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

    }
    .card{
        background: var(--light);
        margin: 30px;
        padding: 30px;
        border-radius: 5px;
    }

    .card, .card-item{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .card-item label{
        width: 100%;
        text-align: start;
    }
    .card-item input{
        width: 100%;
        min-width: 500px;

    }
    @media only screen and (max-width: 750px) {

    }
</style>

