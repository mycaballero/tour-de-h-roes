<template>
    <div class="card black-text">
        <div class="p-3"><h4>Datos del heroe</h4></div>
        <div class="card-body">
            <h5 class="card-title">Añadir imagen</h5>
        </div>
        <div class="p-2">
            <input type="text" v-model="urlp" class="" placeholder="URL de la foto">
        </div>
        <div class="list-group list-group-flush m-2">
            <input type="text" v-model="id" class="list-group-item" placeholder="id" required>
            <input type="text" v-model="name" class="list-group-item" placeholder="Nombre" required>
            <input type="text" v-model="power" class="list-group-item" placeholder="Poder" required>
        </div>
        <div class="card-body">
            <button v-on:click="agregarHeroe()" class="btn btn btn-success">agregar</button>
        </div>
    </div>
</template>
<script>
    export default {
        data(){
            return {
                id: "",
                name: "",
                power: "",
                urlp:"",
            }

        },
        methods: {
            agregarHeroe() {
                if (this.id == null || this.name == null ||  this.power == null || this.urlp == null) {
                    alert("llene los campos!!")
                } else {
                let heroe = {
                    id: this.id,
                    name: this.name,
                    power: this.power,
                    urlp: this.urlp,
                }
                this.$store.commit('setHeroe', heroe)
                
                this.id = null;
                this.name = null;
                this.power = null;
                this.urlp = null;
                }
            }
        }
    }
</script>
