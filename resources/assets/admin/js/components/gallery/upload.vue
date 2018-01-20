<template>
    <vue-dropzone ref="myVueDropzone" id="dropzone" :options="dropzoneOptions"></vue-dropzone>
</template>
<script>
import vue2Dropzone from 'vue2-dropzone'
import 'vue2-dropzone/dist/vue2Dropzone.css'

export default{
    components: {
    vueDropzone: vue2Dropzone
  },
    data(){
        return{
            dropzoneOptions: {
          url: '../../../../../api/events/gallery/images',
          thumbnailWidth: 150,
          maxFilesize: 5,
          headers: { 'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content }
      }
        }
    }
}
    
</script>
<style lang="scss" scoped>

</style>

