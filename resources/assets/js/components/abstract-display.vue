<template>
    <div>
        <h5 v-if="!abstract"><div class="alert alert-info" role="alert">Pick name on the left to view an abstract</div></h5>
        <div class="panel panel-default margin-20" v-if="abstract">
        <table style="margin-bottom: 20px;">
            <tr>
                <th class="text-center">Organisation</th>
                <th class="text-center">Country</th>
                <th class="text-center">Phone</th> 
                <th class="text-center">Document</th>
            </tr>
            <tr>
                <td class="text-center">{{ abstract.organisation }}</td>
                <td class="text-center">
                    <img style="height:25px; width:40px;" class="text-center" :src="abstract.country_flag" alt="Image" >
                </td>
                <td class="text-center">{{ abstract.phone_code+abstract.phone }}</td>
                <td class="text-center">
                    <button class="text-center btn btn-primary btn-xs  col-xs-4"><i class="fa fa-download"></i> Download</button>
                </td>
            </tr>
        </table>

        </div>
    </div>
</template>

<script>
    export default{
        data(){
           return{
                abstract: '',
                abstractDetails:[]
           }
        },
        mounted(){
            let self=this;
            EventBus.$on('display-abstract', function(abs){
                self.abstract=abs;
                console.log("ABS...",self.abstract.id);
                
            });
        },
        methods:{
            getAbstractDetails(){
                axios.get('/submission/{id}/abstracts').then(response=>{
                    this.abstractDetails;
                });
            }
        }
    }
</script> 