<template>

</template>

<script>
export default{

}
$(function(){
    $('#committee').slimScroll({
        height: '600px',
        color: '#e13f30',
        railVisible: true,
        alwaysVisible: true
    });
});
</script>

<style scoped>
    li{
        list-style-type:disc !important;
        font-size:.9em;
    }
</style>
