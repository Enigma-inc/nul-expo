<template>
<div class="col-md-12">
    <a v-if="status" @click="changeStatus" class="btn btn-xs btn-success">Change Status</a>
</div>
</template>
<script>
    export default{
        props:['type'],
        data(){
            return{
                status: '',
                eventStatus: ''
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