<template>
    <div class="col-md-12">
        <h5 v-if="!abstract"><div class="alert alert-info margin-20" role="alert">Pick name on the left to view an abstract</div></h5>
        <div class="panel panel-default margin-20" v-if="abstract">
        <table>
            <tr>
                <th>{{ abstract.title }} {{ abstract.name }} {{ abstract.surname }}</th>
                <th>{{ abstract.organisation }}</th>
                <th>{{ abstract.phone_code+abstract.phone }}</th>
            </tr>
        </table>    
            <div class="panel-body">
            <div v-for="abstractDoc in abstractDetails">
                <div class="details-container"  >
                    <div class="title" style="flex:1"><p>{{ abstractDoc.title }}</p></div>
                    <div class="">
                    <form action="/download/abstract" method="POST">
                        <input type="hidden" name="_token" v-model="token">
                        <input type="hidden" name="file-name" v-model="abstractDoc.doc_path">
                        <button type="submit" class="btn btn-primary btn-xs margin-right-2"> <i class="fa fa-download"></i> Download</button>
                    </form>
                    </div>                   
                    
                </div>  
                    <div v-if="abstractDoc.comment" class=" abstract-comment padding-left-10 padding-right-10" ><p>{{ abstractDoc.comment }}</p></div>
                    </div>
                             
        </div>

        </div>
    </div>
</template>

<script>
    export default{
        props:['token'],
        data(){
           return{
                abstract: '',
                abstractDetails:''
           }
        },
        mounted(){
            let self=this;
            EventBus.$on('display-abstract', function(abs){
                self.abstract=abs;
               self.getAbstractDetails();                
                
            });
        },
        methods:{
            getAbstractDetails(){
                axios.get(`/submission/${this.abstract.id}/abstracts`).then(response=>{
                    this.abstractDetails=response.data;
                });
            }
        }
    }
</script> 
<style lang="scss" scoped>

.abstract-comment{
 font-size:.8em;
 border-bottom: 1px solid lighten(#e13f30,40%);
}
.details-container{
    display:flex;
    margin-top:10px;
    .title{
        p{
            font-weight: 600;
            font-size: .9em;
            
        }
    }
}
</style>