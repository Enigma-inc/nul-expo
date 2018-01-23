<template>
<v-flex class="event"> 
<transition-group name="list" tag="div" >
   <v-card  class="white--text general-card"  v-for="event in generalEvents" :key="event.id" >
            <v-card-title primary-title>
                <div class="headline">
                    <div class="title">
                        <span class="time">{{event.time}}</span>                        
                        {{event.title}}

                    </div>
                </div>
            </v-card-title>
            <v-card-text v-if="event.body">
                    <div v-html="event.body" class="body"></div>
            </v-card-text>
            <v-card-actions>
                  <v-spacer></v-spacer>
                  <v-btn flat dark @click="downloadProgram()"><v-icon left>cloud_download</v-icon> Full Programme</v-btn>
            </v-card-actions>
   </v-card>
  
 </transition-group>
 </v-flex>
</template>
<script>
import {mapGetters,mapActions} from 'vuex';
export default{
    data(){
        return{
            events:[],
            src:'#'
        }
    },
    mounted(){
    },
    methods:{
        ...mapActions(['downloadProgram'])
    },
    computed:{
            ...mapGetters(['generalEvents'])
    }
}
    
</script>
<style lang="scss" scoped>
.general-card{
      background-color: rgba(0, 144, 161,0.9) !important;
      .card__title{padding-top:10px !important;}
      .headline{
              width: 100%;
                display: flex;
                justify-content: center;
                .title{
                        font-size: 2rem !important;
                       font-weight: 300;
                       .time{
                           color: darken(#fff, 30%)
                       }
                }
         }
        .body{
            padding-left: 20px;
        }

}

</style>

