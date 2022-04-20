<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';

</script>

<template>
    <AppLayout title="Formulário">
        <div class="card-form">
           <h1> Cadastrar cliente</h1>
           <form action="/client" method="POST" @submit="createUser">
                <div class="card-item">
                    <label for="">Nome</label>
                    <input type="text" v-model="form.name_client">
                </div>
                <div class="card-item">
                    <label for="">E-mail</label>
                    <input type="text"  v-model="form.email">
                </div>
                <div class="card-item">
                    <label for="">Telefone 1</label>
                    <input type="text"  v-model="form.phone">
                </div>
                <div class="card-item">
                    <label for="">CPF</label>
                    <input type="text"  v-model="form.cpf">
                </div>
                <div class="card-footer">
                    <button type="submite"  class="btn btn-primary">Salvar</button>
                </div>
           </form>
        </div>
    </AppLayout>
</template>

<script>

export default {
    data(){
        return{
            form: {
                name_client: '',
                email: '',
                phone: '',
                cpf: ''
            }
        }
    },
    methods:{
        createclient(){
            this.$inertia.POST('/client', this.form)
            .then(()=>{

            })
        }
    }

}
</script>

<style>
.card-form{
    width: 100%;
    height: 100%;
    min-height: 300px;
    background: rgba(231, 238, 255, 0.829);
    border-radius: 5px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin: 15px;
    padding: 15px;
}
.card-item{
    width: 100%;
    display: flex;
    flex-direction: column;

}
.card-item input{
    width: 100%;
    min-width: 500px;
    border-radius: 5px;
    border: 1px solid skyblue;
}
.card-footer{
    padding: 10px;
}
  @media only screen and (max-width: 730px) {
      .card-form{
          margin: 0;
      }
      .card-item input{
       min-width: 250px;
}
  }
</style>
