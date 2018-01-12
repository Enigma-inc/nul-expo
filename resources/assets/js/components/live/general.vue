<template>
<v-flex class="event" v-if="events.length>0"> 
<carousel-3d  :perspective="180" :controls-visible="true" :width="600" :animationSpeed=900 :autoplay="true" :autoplay-timeout="5000" :display="1">
   <slide  class="card white--text event-card"  v-for="event,index in events" :key="event.id" :index="index">
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
   </slide>
</carousel-3d>
  
 </v-flex>
</template>
<script>
export default{
    data(){
        return{
            events:[],
            src:'#'
        }
    },
    mounted(){
      
        axios.get('../api/events/general').then(response=>{
            
            this.events=response.data;
            
    });
    },
    methods:{
    }
}
    
</script>
<style lang="scss" scoped>
.card{
      background-color: rgba(0, 144, 161,0.9) !important;
      .details{
          background: darken(rgb(0, 144, 161),10%);
          color:lighten(#000,60%);
      }

}

</style>

