<template>
    <div class="container" >
        <div  class="eventblock" v-for="x in informations" :key="x.id" >
         <p><strong> {{ x.title}} </strong></p>
         Data: {{ x.date_event}} <br>
         Opis: {{ x.description }} <br>   
        </div> 

    </div>
</template>

<script>
    export default {
     props: ['informations'] 

     }
  
</script>