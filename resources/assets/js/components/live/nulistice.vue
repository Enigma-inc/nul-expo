<template class="Testing">
<transition-group name="list" tag="div" >
    <v-flex class="event"  v-for="event in nulisticeEvents" :key="event.id">
       <v-card color="blue-grey darken-2" class="white--text event-card" hover>
                <v-card-title primary-title>
                  <div class="headline">
                      <div class="title ">{{event.session_title}}</div>
                      <div class="details">
                          <!-- <div class="time">
                              <v-icon left>access_time</v-icon>
                              <span class="color-dark">{{event.time}}</span>
                         </div> -->
                          <div class="room">
                              <v-icon left>home</v-icon>
                            <span class="color-dark">{{event.room}}</span>
                          </div>
                      </div>
                  </div>
                </v-card-title>
                <v-card-text>
                    <div class="body">
                     <div class="chair">
                            <div class="flag">
                                <img :src="event.chair_country_flag" />
                            </div>
                            <div class="details">
                                <h4 class="title color-dark">Chair</h4>
                                <h4 class="name">{{event.chair}}</h4>
                            </div>
                        </div>
                    <v-divider></v-divider>
                     <div class="presentation">
                            <div class="flag">
                                <img :src="event.presenter_country_flag" />
                            </div>
                            <div class="details">
                                <h4 class="title color-dark">Presentation</h4>
                                <h3 class="presentation-title">{{event.title}}</h3>
                                <div class="presenter ">
                                    <span class="color-dark">&mdash;</span>
                                    <p class="color-dark">{{event.presenter}}</p>
                                    </div>
                            </div>
                        </div>
                    </div>
    
                </v-card-text>
            <v-card-actions>
                  <v-spacer></v-spacer>
                  <v-btn small flat dark @click="downloadProgram()"><v-icon left>cloud_download</v-icon> Full Programme</v-btn>
            </v-card-actions>
        </v-card>
     </v-flex>
</transition-group>
</template>
<script>
import {mapGetters} from 'vuex';
import {mapActions} from 'vuex';
export default{
    data(){
        return{
            src:'#'
        }
    },
    mounted(){
            this.getNulisticeEvents();
    },
    methods:{
        ...mapActions(['getNulisticeEvents','downloadProgram']),
 
    },
    computed:{
              ...mapGetters(['nulisticeEvents'])
        }
}
    
    
</script>
<style lang="scss" scoped>
.card{
      background-color: rgba(238, 114, 29,0.9) !important;
      .headline{
          .details{
          background: darken(rgb(238, 114, 29),10%);
      }

      }
      

}

</style>

