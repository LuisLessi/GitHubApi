<template>
    <v-card elevation="2" max-width="1000" class="mx-auto my-12">
        <v-card-title>
            Pesquisar Repositorio no GitHub
        </v-card-title>
        <v-divider></v-divider>

        <v-card-text>
            <v-text-field v-model="search" label="Nome do repositório Git" placeholder="Nome" Outlined dense></v-text-field>
        </v-card-text>

        <v-divider></v-divider>

        <v-card-actions>
            <v-btn variant="flat" color="primary" @click="actionSearch()">Pesquisar</v-btn>
        </v-card-actions>
    </v-card>
</template>

<script>
import axios from 'axios'

export default {
    name: 'SearchRepository',
    data() {
        return {
            search: ''
        }
    },

    methods: {
        actionSearch(){
            console.log(this.search)
            axios.get('')
        }
    }
}
</script>

<style>

</style>