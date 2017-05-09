<template>
    
</template>
<script>
    export default{
        props:['message','type','title'],
        data(){
            return {
        }
        },
        mounted(){
            swal({
                    title: this.title,
                    text: this.message,
                    type: this.type,
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#E13F30',
                })
        }
    }
    
</script>