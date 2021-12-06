<template>
    <div class="buscador container">
        <div class="input-group mb-3">
            <button type="button" v-on:click="hola()" class="btn btn-primary">buscar</button>
            <input type="text" class="form-control" placeholder="Nombre del Héroe" aria-label="Heroe" aria-describedby="basic-addon1">
        </div>
    </div>
    <div>
        <div>
        </div>
    </div>
</template>
<script>
    export default {
        data(){
            return {
            }
        },
        methods: {
            hola() {
                console.log(this.dataHeroes)
            }
        }
}
</script>