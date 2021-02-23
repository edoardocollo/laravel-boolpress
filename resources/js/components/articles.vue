<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" v-for="article in articles">
                    <div class="card-header">{{article.titolo}}</div>

                    <div class="card-body">
                        <p>{{article.contenuto}}</p>

                    </div>
                    <div class="card-footer">{{article.autore}}</div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
          return {
          articles:""
          }
        },
        mounted() {
        axios.get('api/articles').then(response => {
              console.log(response.data.response);
              this.articles = response.data.response;
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
