<template>
    <div class="container" >
        <div  class="eventblock" v-for="dan in dane" :key="dan.id">
         <p><strong> {{ dan.title}} </strong></p>
         Data: {{ dan.dateevent}} <br>
           Opis: {{ dan.description }}<br><br>
           
           <button class="btn-primary" >Usuń</button>
           <button class="btn-primary">Edytuj</button>
        </div> 
        <ul>
            <li v-for="wyd in wyds" v-bind:key="wyd"></li>
        </ul>
        
        
    </div>
</template>

<script>

    export default {
     props: ['information']
     
     }
   
     

</script>