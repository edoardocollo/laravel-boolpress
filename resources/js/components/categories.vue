<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" v-for="category in categories">
                    <div class="card-header">{{category.categoria}}</div>

                    <div class="card-body">
                        <p>{{category.descrizione}}</p>

                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
          return {
          categories:""
          }
        },
        mounted() {
        axios.get('api/categories').then(response => {
              console.log(response.data.response);
              this.categories = response.data.response;
          }).catch(error => {
              console.log(error);
          })
        }
    }
</script>
<style lang="scss" scoped>
    .card{
        margin: 15px 0;
    }
</style>
