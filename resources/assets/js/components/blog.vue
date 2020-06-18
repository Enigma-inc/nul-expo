<template>
    <div class="text-align-center">
       <div v-if="loading" class="margin-10" >
            <span class="fa fa-spinner fa-4x fa-spin"></span>
        </div>
        <div class="row" v-if="!loading" >
            <div class="post-item wow animated col-xs-12" v-for="(article, index) in articles" :key="index">

                <div class="row" style="padding: 20px;">
                <div class="post wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                    <!-- Image -->
                    <a v-bind:href="article.link" target="_blank" class="col-md-4"><img class="img-responsive" :src="getArticleFeaturedImgUrl(article)" alt="blog"></a>
                </div>

                <div class="wow fadeInUp animated col-md-8">
                 <!-- Post Title -->
                <h4  v-html="article.title.rendered" style="visibility: visible; animation-name: fadeInUp; color: #e13f30; text-align:left"></h4>
                                        <!-- Text -->
                        <p v-html="article.excerpt.rendered" style="text-align: justify;"></p>
                        <a v-bind:href="article.link" target="_blank" class="default-btn orange hvr-bounce-to-right pull-left" style="transition: all 0.2s ease-out 0s; min-height: 0px; min-width: 0px; line-height: 17px; border-width: 0px; margin-bottom: 5px 13.9429px 6.97143px 0px; padding: 7px 17px; letter-spacing: 0px; font-size: 10px;">
                        Read More</a>
                </div>
                </div>    

            </div>
            <div class="row text-center">   
             <a href="http://nulresearchandinnovations.co.ls/" target="_blank" class="default-btn green hvr-bounce-to-right pull-right margin-right-30" style="transition: all 0.2s ease-out 0s; min-height: 0px; min-width: 0px; line-height: 17px; border-width: 0px; margin-bottom: 5px 13.9429px 6.97143px 0px; padding: 7px 17px; letter-spacing: 0px; font-size: 10px;">
                        More Articles</a>
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
            console.log('Mounted......');
            this.loading=true;
            axios.get('../api/blog').then(response => {
                this.articles = response.data;
                this.loading=false;
            });

        },
        methods: {
            getArticleFeaturedImgUrl(article) {
                if(article._embedded['wp:featuredmedia'][0].link){
                    return article._embedded['wp:featuredmedia'][0].link;
                }
            }
        }
    }

</script>