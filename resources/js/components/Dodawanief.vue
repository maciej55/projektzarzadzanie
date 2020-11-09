<template>
    <div class="container">
   <div class="naglowek">Godziny</div>
<div class="naglowek" v-for="dzien in dnitygodnia" :key="dzien"> 
    <b>{{ dzien.dni}}</b>

<div class="divklasa"  v-for="index in 24" :key="index" @mouseover="Zmiana()">
 {{ index-1 }}:00
</div>

</div>

    </div>
</template>
<script>
export default {
    data() {
        return {
            dnitygodnia: [{
            dni:'Poniedziałek'},
            {
            dni:'Wtorek'},
            {
            dni:'Środa'},
            {
            dni:'Czwartek'},
            {
            dni:'Piatęk'},
            {
            dni:'Sobota'},
            {
            dni:'Niedziela'}
            ]
        
            
        }
        
    },
    methods: {
    Zmiana: function()
        {
        
            
         var x = document.getElementsByClassName("divklasa");
           for(var i =0;x.length;i++)
           x[i].style.backgroundColor = "red";
            
        }
    }
    
}
</script>