<template>

        <div class="row justify-content-center">
            <div class="col-md-8" align="center">

                <h5 class="pregunta-titulo">{{preg[0].descripcion}}</h5>

                <img class="foto-pregunta redondeo" :src="preg[0].foto">


                <div  class="grupo">

                        <div class="grupo-opciones">
                            <div style="display: inline-block; width: 50%"><input type="radio"  v-model="vue.exp"  name="respuesta" :value="preg[0].opcion1" > <label>{{preg[0].opcion1}}</label></div>
                            <div style="display: inline-block ; width: 50%"><input type="radio"  v-model="vue.exp" name="respuesta" :value="preg[0].opcion2"  > <label>{{preg[0].opcion2}}</label></div>
                        </div>

                        <div class="grupo-opciones">
                            <div style="display: inline-block; width: 50%"><input type="radio"  v-model="vue.exp" name="respuesta" :value="preg[0].opcion3"> <label>{{preg[0].opcion3}}</label></div>
                            <div style="display: inline-block ; width: 50%"><input type="radio"  v-model="vue.exp" name="respuesta" :value="preg[0].opcion4"> <label>{{preg[0].opcion4}}</label></div>
                        </div>

                </div>




                <br/>
               <a style="color: white" class="btn redondeo boton"  data-toggle="modal" data-target="#create" v-on:click="getRespuesta" >SIGUIENTE</a>
                <!--  <button type="button" id="boton" class="btn redondeo boton">SIGUIENTE</button>-->



             </div>

            <div  class="modal fade " id="create" >
                <div class="modal-dialog dialogo-ventana  ">
                    <div class="modal-content dialogo-contenido  ">

                        <div id="ja" align="center" class="modal-body cuerpo">
                            <template v-if='vue.resp=="CORRECTO"'>
                                <h1 class="titulo">GENIAL!!!</h1>
                                <h3 style="color: white">HAS GANADO</h3>
                                <h1 style="color: white">¡10 PUNTOS!</h1>
                                <img class="foto-puntaje redondeo" src="https://firebasestorage.googleapis.com/v0/b/sistemacalificaciones-78da3.appspot.com/o/puntos.JPG?alt=media&token=c667bbfa-bca0-4e53-8154-d3b9b13d5d23">
                            </template>
                            <template v-else>
                                <h1 class="titulo">ERROR!!!</h1>
                                <h3 style="color: white">LOSIENTO</h3>
                                <h1 style="color: white">¡PERDISTE!</h1>
                                <img class="foto-puntaje redondeo" src="https://firebasestorage.googleapis.com/v0/b/sistemacalificaciones-78da3.appspot.com/o/puntos.JPG?alt=media&token=c667bbfa-bca0-4e53-8154-d3b9b13d5d23">
                            </template>


                        </div>
                        <div class="modal-footer final">
                            <a href="trivia-de-comida" class="btn redondeo boton ">OK</a>
                        </div>

                    </div>
                </div>
            </div>


         </div>



 </template>

 <script >





     export default {


         data(){
             return {
                 preg: [],

                 vue:{
                     exp:null,
                     resp:'INCORRECTO',

                 }


             }
         },
         created: function() {
             this.getPregunta();
         },

         methods: {
             getPregunta: function() {
                 var urlPregunta = 'pregunta';
                 axios.get(urlPregunta).then(response => {this.preg = response.data});
             },

             getRespuesta: function() {
                 var urlCorregir = this.preg[0].slug+ this.vue.exp;
                 axios.get(urlCorregir).then(response => {this.vue.resp = response.data});
             }

         }
     }

 </script>

 <style>

     .boton
     {
         background-color: orangered;
         color: white;
         padding-left: 30px;
         padding-right: 30px;
     }

     .redondeo {
         border-radius: 2rem !important;
     }

     input
     {
         padding-top: 5px;
         background: orangered;
     }
     label
     {
         padding-top: 7px;
         margin-left: 10px;
         margin-right: 10px;
     }
     .pregunta-titulo
     {
         color: orangered;
     }
     .foto-pregunta
     {
         width: 300px;
         height: 300px;
         margin: 20px;
         display: block;
     }
     .grupo-opciones
     {
         margin: 10px;
         height: 50%;
         display: flex;
         align-items: center;
     }
     .grupo
     {
         width: 400px;
         height: 100px;
     }

     .dialogo-ventana
     {
         width: 75%;
         height: 75%;
     }
     .dialogo-contenido
     {
         position:fixed;
         border-radius: 2rem !important;
         border-color: white;
         border-width: 5px ;
         background-color: orange;
         width: 100%;
         height: 100%;
     }
     .titulo
     {
         color: orangered;
         margin-bottom: 10%;
     }
     .cuerpo
     {

         display: block;
         text-align: center;
         justify-content: center;
     }
     .final
     {
         text-align: center;
         justify-content: center;

     }
     .redondeo {
         border-radius: 2rem !important;
     }
     .foto-puntaje
     {
         width: 30%;
         height: 30%;
         margin: 5px;
         text-align: center;
         justify-content: center;

     }


 </style>