<template>
<v-flex class="event" v-if="event">
   <v-card color="blue-grey darken-2" class="white--text event-card" >
            <v-card-title primary-title>
              <div class="headline">
                  <div class="title">Corporate Pitch Session</div>
                  <div class="details">
                      <div class="time">09:00</div>
                      <div class="room">MACHACHE</div>
                  </div>
              </div>
              <div id="nulistice" class="body" v-bar="{
                  preventParentScroll:false,
                  scrollThrottle:30
              }" >
                   <div class="scrollable">
                    <p><b>Chair:</b> Dr Moeketsi Mpholo, NUL</p>
                   <p> Dr Timothy Thamae, NUL
                    Mr Niklas Hayek, RECP
                    Dr Ed Brown, LECDN
                    Ms Eva Kagiri, UniPID
                    Ms Ranisha Banset, Energypedia
                    Ms Noara Kebir, Microenergy Systems
                    Mr Kuda Ndhlukula, SACREEE
                    Prof. Abdellatif Zerga, PAUWES
                    Mr Saleem Ismail, Enigma
                    Mr Phelane Phomane, Tangerine
                    Mr Lebohang Ramaisa, Econet Telecom Lesotho
                    </p>
                   </div>
              </div>
            </v-card-title>
            <v-card-actions>
              <v-btn flat dark>View Full Program</v-btn>
            </v-card-actions>
    </v-card>
 </v-flex>
</template>
<script>
export default{
    data(){
        return{
            event:null
        }
    },
    mounted(){
      
        axios.get('../api/events/nulistice').then(response=>{
            
            this.event=response.data;
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

