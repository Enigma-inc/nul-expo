<template>
<v-flex class="event" v-if="events.length>0">
<v-carousel>
    <v-carousel-item :src="src" v-for="event in events" :key="event.id">
        <v-card color="blue-grey darken-2" class="white--text event-card">
            <v-card-title primary-title>
              <div class="headline">
                  <div class="title">{{event.title}}</div>
                  <div class="details">
                      <div class="time">{{event.time}}</div>
                      <div class="room">{{event.room}}</div>
                  </div>
              </div>
              <div id="nulistice" class="body" v-bar="{
                  preventParentScroll:false,
                  scrollThrottle:30
              }" >
                   <div class="scrollable">
                       {{event.body}}
                   </div>
              </div>
            </v-card-title>
            <v-card-actions>
              <v-btn flat dark>View Full Program</v-btn>
            </v-card-actions>
        </v-card>
    </v-carousel-item>
 </v-carousel>
 </v-flex>
</template>
<script>
export default{
    data(){
        return{
            events: [],
            src:'#'
        }
    },
    mounted(){
      
        axios.get('../api/events/nulistice').then(response=>{
            
            this.events=response.data;
    });
    },
    methods:{
    }
}
    
</script>
<style lang="scss" scoped>
.card{
      background-color: rgba(118, 184, 61,0.9) !important;

}

</style>

