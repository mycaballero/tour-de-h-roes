<template>
    <div class="container-fluid row">
        <h1 class="mt-3">Tour de heroes</h1>
        <div class="col-12 row m-0 p-3 border-top border-left border-righ rounded-2 shadow">
            <div class="col-12">
                <div class="col-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            </div>
                            <input type="text" class="form-control" placeholder="Heroe" aria-label="Heroe" v-model="bheroe">
                        </div>
                </div>
            </div>
            <div class="col-8 row">
                <div :ref="v.name" class="col-3 text-start rounded shadow m-3 hero-smart" v-for="(v, i) in $store.state.heroes" :key="i" v-show="busqueda(i)" >
                    <h4 class="mb-2">{{v.name}}</h4>
                    <img class="img col-12" :src="v.urlp" :alt="v.name">
                    <div class="col-12 text-start p-2">
                        <p class="mb-0">Poder: {{v.power}}</p>
                        <p class="mb-0">Id: {{v.id}}</p>
                    </div>
                    <div class="col-12 text-center p-2">
                        <button class="btn btn-danger" @click="deleteHeroe(i)">Eliminar</button>
                    </div> 
                </div>
            </div>
            <div class="col-4">
                <heroe></heroe>
            </div>
        </div>
        
    </div>
</template>

<script>
import Heroe from './Heroe.vue';
    export default {
    name: 'HelloWorld',
    components:{
        Heroe
    },
    props: {
        msg: String
    },
    data() {
        return {
            bheroe:"",
            comprobacion: true
        }
    }
    ,
    methods: {
        setHeroe() {
            this.$store.commit('setHeroe', {
            nota: 'Nota de prueba'
            })
        },
        deleteHeroe(index) {
            this.$store.commit('deleteHeroe', index);
        },
        busqueda(index){
                if (this.$store.state.heroes[index].name.includes(this.bheroe)) {
                    return true;
                    } else {
                        return false;
                };
        }
    }
}
</script>
<style>
body { background-color: #303030; 
}
.hero-smart {
    animation: forma 10s linear infinite;
}

@keyframes forma {
    0% {background-color: #000000;
        color: aliceblue;}
    25% {background-color: #CCCCCC;
        color: #000000;}
    50% {background-color: #FFFFFF;
        color: #000000;}
    75% {bbackground-color: #CCCCCC;
        color: #292f36;}
    100% {background-color: #000000;
        color: aliceblue;}
}
.black-text {
    color: #000;
}
</style>