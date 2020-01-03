<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
        <v-carousel>
            <v-carousel-item
                    v-for="(color, i) in colors"
                    :key="color"
            >
                <v-sheet
                        :color="color"
                        height="100%"
                        tile
                >
                    <v-row
                            class="fill-height"
                            align="center"
                            justify="center"
                    >
                        <div class="display-3">Slide {{ i + 1 }}</div>
                    </v-row>
                </v-sheet>
            </v-carousel-item>
        </v-carousel>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                colors: [
                    'primary',
                    'secondary',
                    'yellow darken-2',
                    'red',
                    'orange',
                ],
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
