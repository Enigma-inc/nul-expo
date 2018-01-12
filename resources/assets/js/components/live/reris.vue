<template>
<v-flex class="event" v-if="event">
   <v-card color="blue-grey darken-2" class="white--text event-card" hover>
            <v-card-title primary-title>
              <div class="headline">
                  <div class="title ">{{event.title}}</div>
                  <div class="details">
                      <div class="time">
                          <v-icon left>access_time</v-icon>
                          <span class="color-dark">09:00</span>
                     </div>
                      <div class="room">
                          <v-icon left>home</v-icon>
                        <span class="color-dark">MACHACHE</span>
                      </div>
                  </div>
              </div>
            </v-card-title>
            <v-card-text>
                <div class="body">
                 <div class="chair">
                        <div class="flag">
                            <img :src="'https://restcountries.eu/data/lso.svg'" />
                        </div>
                        <div class="details">
                            <h4 class="title color-dark">Chair</h4>
                            <h4 class="name">Dr Mosotho George, Head, Department of Chemistry
                                and Chemical Technology, National University of Lesotho</h4>
                        </div>
                    </div>
                <v-divider></v-divider>
                 <div class="presentation">
                        <div class="flag">
                            <img :src="'https://restcountries.eu/data/mda.svg'" />
                        </div>
                        <div class="details">
                            <h4 class="title color-dark">Presentation</h4>
                            <h3 class="presentation-title">Evaluation of Animal Manure as a Feedstock for the Production
                                of Biogas in comparison with Sewage Water
                                Microalgae</h3>
                            <div class="presenter ">
                                <span class="color-dark">&mdash;</span>
                                <p class="color-dark">Dr Mosotho George, Head, Department of Chemistry
                                and Chemical Technology, National University of Lesotho</p>
                                </div>
                        </div>
                    </div>
                </div>

            </v-card-text>
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
    //   .color-dark{
    //       color:lighten(#000,10%) !important;
          
    //   }
.card{
      background-color: rgba(238, 114, 29,0.9) !important;
      .headline{
          .details{
          background: darken(rgb(238, 114, 29),10%);
      }

      }
      

}

</style>

