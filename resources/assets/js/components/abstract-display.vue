<template>
    <div>
        <h5 v-if="!abstract"><div class="alert alert-info" role="alert">Pick name on the left to view the abstract</div></h5>
        <div>

        </div>
    </div>
</template>

<script>
    export default{
        data(){
            abstract: ''
        },
        mounted(){
            let self=this;
            EventBus.$on('display-abstract', function(abs){
                self.abstract=abs;
            });
        }
    }
</script> 