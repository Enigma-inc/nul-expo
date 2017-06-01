<template>
    <div>
        <h5 v-if="!abstract"><div class="alert alert-info" role="alert">Pick name on the left to view the abstract</div></h5>
        <div class="panel panel-default margin-20" v-if="message">
        <table style="margin-bottom: 20px;">
            <tr>
                <th class="text-center">Organisation</th>
                <th class="text-center">Country</th>
                <th class="text-center">Phone</th>
                <th class="text-center">Document</th>
            </tr>
            <div v-for="abstract in abstracts"></div>
            <tr>
                <td class="text-center">{{ abstract.fullName() }}</td>
                <td class="text-center">{{ abstract.organisation }}</td>
                <td class="text-center">
                    <img style="height:25px; width:40px;" class="text-center" :src="abstract.country_flag" alt="Image" >
                </td>
                <td class="text-center">{{ abstract.phone_code+abstract.phone }}</td>
                
            </tr>
        </table>

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