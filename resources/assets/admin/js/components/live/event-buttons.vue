<template>
<div>
    <trinity-rings-spinner  :animation-duration="1500" :size="30" color="#2ab27b" v-if="submitting" /> 
    <div class="buttons" v-if="!submitting">
        <a  @click="changeStatus" class="btn btn-success btn-xs margin-right-5" ><i class="material-icons">done</i></a>
        <a   @click="editEvent()" class="btn btn-default btn-xs margin-right-5" ><i class="material-icons">edit</i></a>
    </div>
</div>
</template>
<script>
import { TrinityRingsSpinner  } from 'epic-spinners';
    export default{
        props:['type','event','toggleText'],
        components:{TrinityRingsSpinner},
        data(){
            return{
                submitting:false
                
            }
        },
        mounted(){
        
        },
        methods: {
            changeStatus(){
                this.submitting=true;
                axios.post(`../../../api/events/${this.event.id}/toggle-status`,{type:this.type}).then(response=>{
                       EventBus.$emit('refreshNulisticeEvents');
                       EventBus.$emit('refreshRerisEvents');      
                       EventBus.$emit('refreshGeneralEvents');      
                       this.submitting=false;
                                        
                });
            },
            editEvent(){
                console.log(window.location.href.slice(-1)=="/");
                if(window.location.href.slice(-1)=="/"){
                   window.location= window.location.href +`${this.event.id}/edit`;
                }
                else{
                    window.location= window.location.href +`/${this.event.id}/edit`;
                }
                
            }
        }
    }
</script>