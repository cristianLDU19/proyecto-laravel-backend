<template>
    <div class="container">
        <div class="row justify-content-center" v-for="receta in rece">
            <div class="col-md-8">
                <div class="card card-default carta">
                    <div class="card-header cabeza ">{{receta.nombre}}</div>

                    <div class="card-body ">

                        <a :href='"receta/"+receta.slug'><img class="card-img"  :src="receta.foto"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
                return {
                    rece: []
                }
        },
        created: function() {
            this.getRecetas();
        },

        methods: {
            getRecetas: function() {
                var urlRecetas = 'recetas';
                axios.get(urlRecetas).then(response => {this.rece = response.data});
            }

        }
    }
</script>
<style>

    .cabeza{
        padding: 10px;
        color: #000000;
        background-color: goldenrod;
        border-radius: 6px;
        border: 2px solid #000000;
        text-align: right;


    }
    .carta{
        margin: 20px;
    }

    .trapecio-top {
        width: 250px;
        height: 0px;
        border-right: 60px solid transparent;
        border-left: 60px solid transparent;
        border-top: 100px solid #428bca;
    }

</style>


