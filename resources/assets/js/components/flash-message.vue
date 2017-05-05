<template>
    
</template>
<script>
    export default{
        props:['message'],
        data(){
            return {
        }
        },
        mounted(){
            swal({
                    title: 'Success!',
                    text: this.message,
                    type: 'success',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#E13F30',
                })
        }
    }
    
</script>