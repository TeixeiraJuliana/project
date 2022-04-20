<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';


</script>

<template>
    <AppLayout title="Formulário">
        <div class="card-form">
            <div class="card-item">
                <label for="">Nome</label>
                <input type="text">
            </div>
            <div class="card-item">
                <label for="">E-mail</label>
                <input type="text">
            </div>
            <div class="card-item">
                <label for="">Telefone 1</label>
                <input type="text">
            </div>
            <div class="card-item">
                <label for="">CPF</label>
                <input type="text">
            </div>
            <div class="card-item">
                <label for=""></label>
                <input type="text">
            </div>
            <div class="card-item">
                <label for=""></label>
                <input type="text">
            </div>
            <div class="card-footer">
                <button></button>
            </div>
        </div>
    </AppLayout>
</template>

<script>

export default {

}
</script>

<style>
.card-form{
    width: 100%;
    height: 100%;
    max-width: 500px;
    min-height: 300px;
    background: gray;
    border-radius: 5px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin: 30px;
}
  @media only screen and (max-width: 730px) {
      .card-form{
          margin: 0;
      }
  }
</style>
