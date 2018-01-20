<template>
 <transition-group name="list" tag="div">
    <v-flex class="event"  v-for="event in events" :key="event.id" >
         <v-card color="blue-grey darken-2" class="white--text event-card" hover >
                <v-card-title primary-title>
                  <div class="headline">
                      <div class="title ">{{event.session_title}}</div>
                      <div class="details">
                          <div class="time">
                              <v-icon left>access_time</v-icon>
                              <span class="color-dark">{{event.time}}</span>
                         </div>
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
                                <img :src="'https://restcountries.eu/data/zaf.svg'" />
                            </div>
                            <div class="details">
                                <h4 class="title color-dark">Chair</h4>
                                <h4 class="name">{{event.chair}}</h4>
                            </div>
                        </div>
                    <v-divider></v-divider>
                     <div class="presentation">
                            <div class="flag">
                                <img :src="'https://restcountries.eu/data/usa.svg'" />
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
        </v-card>
     </v-flex>
 </transition-group>
</template>
<script>
require('vue-animate/dist/vue-animate.min.css')
export default{
    data(){
        return{
            events: [],
            src:'#'
        }
    },
    mounted(){
        this.getActiveEvents();
        this.listen();
    },
    methods:{
        getActiveEvents(){
            axios.get('../../api/events/nulistice/1').then(response=>{            
                          this.events=response.data;
            });
        },
        listen(){
            
        //REGISTER EVENT LISTENERS
        Echo.channel('nulisticeEvents')
            .listen('.statusChange', () => {
                this.getActiveEvents();
            });
        }
    }
}
    
</script>
<style lang="scss" scoped>
.card{
      background-color: rgba(118, 184, 61,0.9) !important;

}




</style>

