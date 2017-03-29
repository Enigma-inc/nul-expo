<template>
    <div class="container">
        <div class="row">
            <div class="post-item wow animated col-xs-12" v-for="(article,index) in articles" v-if="index <=2">
                <!-- Post Title -->
                <div class="row">
                <h4 class="wow fadeInUp animated col-xs-12 col-md-offset-4 col-md-8" style="visibility: visible; animation-name: fadeInUp;"><a href="#">{{article.title}}</a></h4>
                    
                </div>
                <div class="post wow fadeInUp animated row" style="visibility: visible; animation-name: fadeInUp;">
                    <!-- Image -->
                    <a href="blog-detail.html" class="col-xs-4"><img class="img-responsive" :src="article.mainImage" alt="blog"></a>
                    <div class="post-content col-xs-8">
                        <!-- Text -->
                        <p v-html="article.body"> </p>
                        <!-- Meta -->
                        <div class="posted-date">July 19, 2014 / <span>by</span> <a href="#">John</a> / <a href="#">12 Comments</a></div>
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
                articles: []
            }
        },
        mounted() {
            axios.get('http://nulresearchandinnovations.co.ls/blog/api/articles/featured').then(response => {

                this.articles = response.data;
            });
        }
    }

</script>