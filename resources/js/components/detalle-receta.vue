<template>
    <div class="row justify-content-center">
        <div class="col-md-11 col-sm-11" align="center">

            <img class="foto-receta redondeo" :src="recetaInfo[0].foto">

            <h4 class="titulos">INGREDIENTES:</h4>
            <h4 class="linea">---------------------------</h4>

            <ul class="lista" >
                <li v-for="ingrediente in ingredientes"><p class="ing-nombre" >{{ingrediente.nombre}}</p></li>
            </ul>

            <h4 class="titulos">ACTIVAR:</h4>
            <h4 class="linea">---------------------------</h4>

            <a href="trivia-de-comida" class="btn redondeo boton ">COMENZAR <br> PREPARACIÓN</a>

        </div>
    </div>
</template>
<script>
    export default {
        data(){
            return {
                ingredientes: [],
                recetaInfo: [],

                receta:
                    {
                        nombre:"jaja"
                    }


            }
        },
        created: function() {
            this.getNombreRecetas();
            this.getIngredientes();
            this.getRecetas();

        },
        methods: {
            getIngredientes: function() {
                var urlIngredientes = '/buscar/'+this.receta.nombre;
                axios.get(urlIngredientes).then(response => {this.ingredientes = response.data});
            },
            getRecetas: function() {
                var urlRecetas = '/receta/info/'+this.receta.nombre;
                axios.get(urlRecetas).then(response => {this.recetaInfo = response.data});
            },
            getNombreRecetas: function() {
                var cadena = document.getElementById("titulo_pag").textContent;
                cadena= cadena.toLowerCase();
                this.receta.nombre =cadena;
            }

        }
    }
</script>
<style scoped>

    .boton
    {
        background-color: orangered;
        color: white;
        padding-left: 30px;
        padding-right: 30px;
        margin-bottom: 5%;
    }

    .redondeo {
        border-radius: 1rem !important;
    }
    .foto-receta
    {
        width: 50%;
        height: 60%;
        margin: 5px;
        display: block;
    }
    .titulos
    {
        color: orangered;
        text-align: left;
        width: 50%;
        margin-top: 10%;
        margin-bottom: 0;
    }
    .linea
    {
        color: orangered;
        margin-top: 0;
        width: 50%;
    }
    .lista
    {
        text-align: left;
        color: orangered;
        text-align: left;
        width: 50%;
    }
    .ing-nombre
    {
        color: black;
        margin-top: 0;
        margin-bottom: 0;
    }
</style>