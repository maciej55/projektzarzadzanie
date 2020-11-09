<template>
    <div class="container" >
        <div  class="eventblok" v-for="dan in dane" :key="dan.id">
         <center> <b> {{ dan.title}} </b></center><br>
         Data: {{ dan.dateevent}} <br>
           Opis: {{ dan.description }}<br><br>
           
           <button class="btn-primary" >Usuń</button>
           <button class="btn-primary">Edytuj</button>
        </div>
        
        
        
    </div>
</template>

<script>

    export default {
     props: ['dane']
 
     }

</script>