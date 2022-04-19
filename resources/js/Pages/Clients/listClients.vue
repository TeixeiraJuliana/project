<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';

</script>

<template>
    <AppLayout title="Dashboard">
        <div class="container">

                <button class="butn">
                     <a href="/client">Cadastrar Cliente</a>
                </button>
                <h1>Clientes</h1>
                <div id="table-heading">
                    <div>Nome</div>
                    <div>E-mail</div>
                    <div>Telefone</div>
                    <div>CPF</div>
                    <div>Ações</div>
                </div>
                <div  class="table-rows">
                    <div  class="table-row" v-for="client in clients" :key="client.id">
                        <div>{{ client.name_client }} </div>
                        <div>{{ client.email}}</div>
                        <div>{{ client.phone}}</div>
                        <div>{{ client.cpf}}</div>
                        <div class="act">
                            <div>
                                <button class="btn"><a href="">Open</a></button>
                            </div>
                            <div>
                                <form action="" method="">
                                    <button  class="btn" type="submit">Delete</button>
                                </form>
                            </div>
                            <div>
                                <button  class="btn" ><a href="">Edit</a></button>
                            </div>
                        </div>
                    </div>
                </div>
       
        </div>
    </AppLayout>
</template>

<script>
export default {
    props: ['clients'],
    components: {
        AppLayout,
    }

}
</script>

<style>
.butn{
    width: 180px;
    height: 60px;
    background: var(--strong);
    border-radius: 5px;
    color: var(--extraLight);
}
.box{
    width: 100%;
}
.table-rows{
    max-height: 550px;
}
.table-row {
    width: 100%;
    min-height: 120px;
}
.table-row div,
#table-heading div{
    width: 100%;
}
.table-row .act{
    width: 100%;
}
.act{
    width: 100%;
    height: 100%;
}
.act img{
    width: 100%;
    width: 30px;
}
/*module*/
.box{
    display: flex;
    justify-content: flex-start;
    flex-direction: column;
    text-align: center;
    padding: 20px 50px;
}
.box h1{
    text-align: center;
    margin-bottom: 15px;
}
#table-heading,
.table-rows,
.table-row,
.act{
    display: flex;
}
#table-heading{
    align-items: center;
    justify-content: space-between;
    text-align: center;
    height: 60px;
}
.table-row div,
#table-heading div{
    padding: 0px 15px;
    align-items: center;
    margin: 15px 0px;
}
.table-row {
    text-align: start;
    justify-content: center;
    align-items: center;
    box-shadow: 0 2px 2px -2px gray;


}
.table-row .act{
    justify-content: center;
    align-items: center;
    text-align: center;
}
.table-rows{
    overflow-y:scroll;
    scroll-snap-type: x mandatory;
    flex-direction: column;
}
.m-cont-tasks{
    margin-top: 15px;
    scroll-snap-type: y mandatory;
    flex-direction: column;
}
.table-rows::-webkit-scrollbar {
    width: 2px;
}
/**/
:root {
    --color-neutral:#ffffff;
    --color-green-cream: #205d68;
    --color-green-strong:#00363d;
    --color-green-light:#a9fdac;
    --color-bolhas-claras:#ecedef;
    --color-grey:#3e5c62;
  }
h1{
    color: var(--color-green-cream);
}
.table-rows::-webkit-scrollbar {
    background-color: var(--color-grey);
}
.btn{
    background-color: transparent;
    border: none;
}
#table-heading > div{
    margin: 0px 5px;
    border-bottom: 1px solid grey;
}
/**/
@media only screen and (max-width: 750px) {
  .box{
      width: 100%;
      padding: 0;
      margin: 0;
      justify-content: center;
  }
  .box div{
    scroll-snap-align: start;
  }
  .box h1{
    margin-bottom: 100px;
  }
  #table-heading{
    display: none;
  }
  .table-row{
    display: flex;
    width: 100%;
    min-width: 330px;
    height: 100%;
    min-height: 400px;
    flex-direction: column;
    align-items: center;
    text-align: center;
    font-weight: bolder;
    padding: 0;
    margin: 0;
    scroll-snap-type: y mandatory;
  }
  .table-row div{
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
  }
  .table-rows{
      flex-direction: row;
      padding: 0;
      margin: 0;
  }
  .table-rows::-webkit-scrollbar {
    background-color: transparent;
}
  #table-heading{
    text-align: start;
  }
  #table-heading,
  #table-row{
    flex-direction: column;
    box-shadow: none;
    padding: 0;
    margin: 0;
  }
}

</style>

