<template>
    <v-app>
        <v-main>
            <v-app-bar :elevation="5">
                 <v-bottom-navigation>
                    <v-btn @click="$router.push({name: 'home'})">
                        <v-icon>mdi-history</v-icon>

                        Início
                    </v-btn>

                    <v-btn @click="$router.push({name: 'gitHub'})">
                        <v-icon>mdi-map-marker</v-icon>

                        GitHub
                    </v-btn>

                    <v-btn @click="$router.push({name: 'favorites'})">
                        <v-icon>mdi-heart</v-icon>

                        Favoritos
                    </v-btn>
                </v-bottom-navigation>
            </v-app-bar>

            <RouterView />
        </v-main>
    </v-app>
</template>

<script>
export default {
    name: 'MainView'
}
</script>

<style>

</style>