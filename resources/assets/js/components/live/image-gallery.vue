<template>
  <div id='gallery' >
    <a class="card" v-for="item in images" :key="item.id" :href="item.image">
        <img :src="item.thumbnail" :title="item.caption">
    </a>
</div>
</template>
<script>
import vueImages from 'vue-images';
require('../../../vendor/photobox/jquery.photobox.js');
export default{
    components: {
                vueImages: vueImages
            },
    data(){
        return{
             images: []
        }
    },
    mounted(){
      this.getImages();
      this.listen();
      
    },
    methods:{
        getImages(){
                axios.get(`../api/events/gallery/images`).then(response=>{
                this.images=response.data
                setTimeout(() => {
                       $("#gallery").unbind().removeData();
                       $("#gallery").photobox();                    
                }, 100);
            });
        },
        listen(){
            
        //REGISTER EVENT LISTENERS
        Echo.channel('gallery')
            .listen('.galleryImageAdded', () => {
                this.getImages();
            });
        }
        
    }
}
    
</script>
<style lang="scss" scoped>
    #gallery{
        display: flex;
        justify-content: center;
         width: 100%;
         height: 100px;
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        @media screen and (max-width: 620px) {
             height: 70px !important;
        }
        @media screen and (max-width: 400px) {
             height: 50px !important;
        }
         a{
             //margin: 2px;
             img{
                  height: 100px;
                 }
                @media screen and (max-width: 620px) {
                        img{ height: auto;  width: 70px; }
                }
                @media screen and (max-width: 400px) {
                        img{ height: auto;  width: 50px; }
                }
                            
         }
         
    }


</style>

