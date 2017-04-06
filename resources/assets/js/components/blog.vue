<template>
    <div class="text-align-center">
       <div v-if="loading" class="margin-10" >
            <span class="fa fa-spinner fa-4x fa-spin"></span>
        </div>
        <div class="row" v-if="!loading" >
            <div class="post-item wow animated col-xs-12" v-for="article in articles">

                <div class="row" style="padding: 20px;">
                <div class="post wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                    <!-- Image -->
                    <a href="blog-detail.html" class="col-md-4"><img class="img-responsive" :src="article.mainImage" alt="blog"></a>
                </div>

                <div class="wow fadeInUp animated col-md-8">
                 <!-- Post Title -->
                <h4  style="visibility: visible; animation-name: fadeInUp; color: #e13f30; text-align:left">{{article.title}}</h4>
                                        <!-- Text -->
                        <p v-html="article.body" style="text-align: justify;"></p>
                        <a v-bind:href="article.articleUrl" target="_blank" class="default-btn orange hvr-bounce-to-right pull-left" style="transition: all 0.2s ease-out 0s; min-height: 0px; min-width: 0px; line-height: 17px; border-width: 0px; margin-bottom: 5px 13.9429px 6.97143px 0px; padding: 7px 17px; letter-spacing: 0px; font-size: 10px;">
                        Read More</a>
                </div>
                </div>    

            </div>
            
        </div>
        <hr>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                loading:true,
                articles: []
            }
        },
        mounted() {
            this.loading=true;
            axios.get('http://nulresearchandinnovations.co.ls/blog/api/articles/featured').then(response => {

                this.articles = response.data;
                this.loading=false;
            });
        }
    }

</script>