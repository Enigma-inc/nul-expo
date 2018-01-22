<template>
<v-layout wrap>
     <v-flex id='gallery-large'  class="large-gallery" v-if="!showSmallGallery">
        <a class="" v-for=" item in images" :key="item.id" :href="item.image">
            <img :src="item.thumbnail" :title="item.caption">
        </a>
     </v-flex>
    <v-flex id='gallery-small'  class="small-gallery" v-if="showSmallGallery">
        <a class="card" v-for="(item,index) in images" :key="item.id" :href="item.image">
            <img :src="item.thumbnail" :title="item.caption" v-if="index<6">
        </a>
     </v-flex> 
 </v-layout>

</template>
<script>
import {mapGetters} from 'vuex';
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
                axios.get(`../api/events/gallery/images/16`).then(response=>{
                this.images=response.data
                setTimeout(() => {
                       $("#gallery-small").unbind().removeData();
                       $("#gallery-small").photobox();                    
                       $("#gallery-large").unbind().removeData();
                       $("#gallery-large").photobox();                    
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
        
    },
    computed:{
         ...mapGetters(['nulisticeEventsAvaibale','rerisEventsAvaibale',
                      'generalEventsAvaibale']),
        showSmallGallery(){
            return this.nulisticeEventsAvaibale || this.rerisEventsAvaibale;
        }
    }
}
    
</script>
<style lang="scss" scoped>
   .large-gallery{
               display: flex;
                flex-wrap: wrap;
                position: relative;
                margin-top:20px;
                a{
                    margin:2px;
                }
   }
   .small-gallery{
               display: flex;
                justify-content: center;
                width: 100%;
                height: 100px;
                position: fixed;
                bottom: 0;
                left: 0;
                right: 0;
   }
    #gallery-small{

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

