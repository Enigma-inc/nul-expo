<template>
<div>
    <a v-if="status" @click="changeStatus" class="btn btn-xs btn-success">Change Status</a>
</div>
</template>
<script>
    export default{
        props:['type'],
        data(){
            return{
                status: ''
            }
        }, 
        mounted(){
            
        },
        methods: {
            changeStatus(){
                axios.get(`/events/${this.status}`).then(response=>{
                    this.eventStatus=response.data;
                });
            }
        }
    }
</script>