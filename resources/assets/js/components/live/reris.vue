<template>
<v-flex class="event" v-if="event">
   <v-card color="blue-grey darken-2" class="white--text event-card" >
            <v-card-title primary-title>
              <div class="headline">
                  <div class="title">{{event.title}}</div>
                  <div class="details">
                      <div class="time">09:00</div>
                      <div class="room">MACHACHE</div>
                  </div>
              </div>
              <div id="reris" class="body" v-bar="{
                  preventParentScroll:false,
                  scrollThrottle:30
              }" >
                   <div class="scrollable">
                       <p> <b>Chair:</b> Dr Mosotho George, Head, Department of Chemistry
                    and Chemical Technology, National University of Lesotho</p>
                    <p> <b>Presentations:</b>
                    Spatio-Temporal Climate Change Risk Assessment: Mangaung
                    Metropolitan Municipality, South Africa – Mr Bernard
                    Moeketsi, University of the Free State, Disaster Management
                    Training and Education Centre for Africa, South Africa
                    Performance Evaluation of Grid-Connected Solar PV in the
                    Tropical Conditions - a Case Study of Karume Institute of
                    Science and Technology, Zanzibar – Mr Mohammed Haji,
                    The Nelson Mandela African Institution of Science and
                    Technology, Tanzania</p>
                    <p>
                          Evaluation of Animal Manure as a Feedstock for the Production
                    of Biogas in comparison with Sewage Water
                    Microalgae – Ms Tebello Matlosa, Department of Biology
                    and Biotechnology, Faculty of Science and Technology,
                    National University of Lesotho
                    The VIP Latrine in Lesotho: Addressing Technical Flaws
                    from the Qachas’ Nek District Experience – Prof. Aiyuk
                    Sunny, Department of Environmental Health, Faculty of
                    Health Sciences, National University of Lesotho
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
      background-color: rgba(238, 114, 29,0.9) !important;
      .details{
          background: darken(rgb(238, 114, 29),10%);
          color:lighten(#000,20%);
      }

}

</style>

