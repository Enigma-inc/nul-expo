<template>
<div>
    <a  @click="changeStatus" class="btn btn-success btn-xs margin-right-5">{{toggleText}}</a>
</div>
</template>
<script>
    export default{
        props:['type','event','toggleText'],
        data(){
            return{
                
            }
        },
        methods: {
            changeStatus(){
                axios.post(`../api/events/${this.event.id}/toggle-status`,{type:this.type}).then(response=>{
                        window.location.reload();
                });
            }
        }
    }
</script>