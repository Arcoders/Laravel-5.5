<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        <h2>Bienvenido, {{ name }}</h2>

                        <input type="text" v-model="name">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
      data() {
        return {
          name: 'Ismael Haytam'
        }
      },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
