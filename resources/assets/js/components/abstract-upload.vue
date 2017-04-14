<template>
     <dropzone 
        id="uploadDropzone"
        url="/abstract" 
        v-on:vdropzone-success="showSuccess"
        thumbnailWidth="350"
        v-bind:dropzone-options="options"
        v-bind:use-custom-dropzone-options="true">
     </dropzone>
</template>
<script>
    import Dropzone from 'vue2-dropzone'
    export default {
        components: {
            Dropzone
        },
        props: ['csrfToken'],
        data() {
            return {
                options: {
                    headers: {
                        'X-CSRF-TOKEN': this.csrfToken
                    }
                }
            }
        },
        methods: {


            'showSuccess': function(file) {
                console.log('A file was successfully uploaded')
            }
        },
        mounted() {
            console.log('TOKEN IS', this.csrfToken);

        },
    }
</script>
<style lang="scss">
    .dropzone {
        border: 2px dashed #E53E1A !important;
        margin-bottom: 50px;
    }
    
    .dz-image {
        width: 350px !important;
    }
    
    .dz-details {
        text-align: center !important;
    }
    
    .dropzone {
        display: flex !important;
    }
    
    .dz-preview,
    .dz-message {
        flex: 1 !important;
        font-weight: bold !important;
    }
    
    .dropzone .dz-preview.dz-file-preview .dz-image {
        background: transparent !important;
    }
</style>