<template>
     <dropzone 
        id="uploadDropzone"
        :url="'/abstract/' +user"
        v-on:vdropzone-success="showSuccess"
        v-on:vdropzone-file-added="fileAdded"
        v-bind:dropzone-options="options"
        v-bind:use-custom-dropzone-options="true"
        >
     </dropzone>
</template>
<script>
    import Dropzone from 'vue2-dropzone';
    export default {
        components: {
            Dropzone
        },
        props: ['csrfToken','user'],
        data() {
            return {
                options: {
                    headers: {
                        'X-CSRF-TOKEN': this.csrfToken
                    },
                    uploadMultiple:false,
                    acceptedFiles:'application/pdf,.doc,.docx',
                    dictDefaultMessage:'Drop your abstract here or click to upload.'
                },
            }
        },
        methods: {


            'showSuccess': function(file) {
                swal({
                    type:'success',
                    title:'Success!',
                    html:`Thank you, your abstract was submitted, we shall get back to you<br/>
                          <em><small>You can get back to your profile and update details if needed.</small></em>`,
                    confirmButtonColor: '#E13F30',
                }
                )
            },
            'fileAdded': function(file) {
            },
        },
        mounted() {
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