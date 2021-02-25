<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" v-for="article in articles">
                    <div class="card-header">{{article.titolo}}</div>

                    <div class="card-body">
                        <p>{{article.contenuto}}</p>

                    </div>
                    <div class="card-footer">autore: {{article.autore}} / categoria: <span v-for="category in categories" v-if="category.id === article.category_id">{{category.categoria}}</span> </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
          return {
          articles:"",
          categories:""
          }
        },
        mounted() {
        axios.get('api/articles').then(response => {
              this.articles = response.data.response;
          }).catch(error => {
              console.log(error);
          })
          axios.get('api/categories').then(response => {
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
