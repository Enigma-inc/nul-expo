<template>
<div>
    <a  @click="changeStatus" class="btn btn-success btn-xs margin-right-5">Change Status</a>
</div>
</template>
<script>
    export default{
        props:['type','event'],
        data(){
            return{
                
            }
        }, 
        mounted(){
            console.log('status changed');
        },
        methods: {
            changeStatus(){
                axios.post(`../api/events/${this.event.id}/toggle-status`,{type:this.type}).then(response=>{
                     
                });
            }
        }
    }
</script>