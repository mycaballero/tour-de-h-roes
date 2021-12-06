<template>
    <div class="heroe">
        <buscador></buscador>
        <div>{{$store.state.heroes}}</div>
        <div class="card">
            <h4>Añadir Foto</h4>
            <input type="text" v-model="urlp" class="list-group-item" placeholder="URL de la foto">
        <div class="card-body">
            <h5 class="card-title">Datos del heroe</h5>
            <p class="card-text">datos</p>
        </div>
        <ul class="list-group list-group-flush">
    <input type="text" v-model="id" class="list-group-item" placeholder="id">
    <input type="text" v-model="name" class="list-group-item" placeholder="Nombre">
    <input type="text" v-model="power" class="list-group-item" placeholder="Poder">
    </ul>
    <div class="card-body">
    <button v-on:click="agregarHeroe()" class="btn btn btn-success">agregar</button>
    </div>
</div>
    </div>
</template>
<script>
import Buscador from './Buscador.vue'
    export default {
    components: { Buscador },
        data(){
            return {
                heroes: [],
                id: "",
                name: "",
                power: "",
                urlp:"",
                papa: "rellena"
            }

        },
        methods: {
            agregarHeroe() {
                this.heroe = {
                    id: this.id,
                    name: this.name,
                    power: this.power,
                    urlp: this.urlp,
                }
                this.heroes.push(this.heroe)
                console.log(this.heroes)
            }
        }
    }
</script>