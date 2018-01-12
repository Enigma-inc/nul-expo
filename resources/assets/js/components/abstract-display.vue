<template>
    <div class="col-md-12">
        <h5 v-if="!abstract"><div class="alert alert-info margin-20" role="alert">Pick name on the left to view abstracts</div></h5>
        <div class="panel panel-default margin-20" v-if="abstract">
        <table class="header-font">
            <tr> 
                <th>{{ abstract.title }} {{ abstract.name }} {{ abstract.surname }}</th>
                <th>{{ abstract.organisation }}</th>
                <th>{{ abstract.country }}</th>
                <th>{{ abstract.phone_code+abstract.phone }}</th>
            </tr>
        </table>    
            <div class="panel-body">
            <div v-for="abstractDoc in abstractDetails">            
                <div v-if="abstractDoc" class="details-container"  >
                    <div class="title" style="flex:1"><p>{{ abstractDoc.title }}</p></div>
                    <div>
                    <form action="/download/abstract" method="POST">
                        <input type="hidden" name="_token" v-model="token">
                        <input type="hidden" name="file-name" v-model="abstractDoc.doc_path">
                        <button type="submit" class="btn btn-primary btn-xs margin-right-2"> <i class="fa fa-download"></i> Download</button>
                    </form>
                    </div>                   
                    
                </div>  
                <div class="file-container">
                <div class="abstract-comment">
                    <div v-if="abstractDoc.comment" class="padding-left-10 padding-right-10" ><p>{{ abstractDoc.comment }}</p></div>
                </div>
                <div class="abstract-details text-center">
                    <small class="color-primary">Submission for <strong>{{ abstractDoc.conference }}</strong> </small>
                    <small><strong>Submitted: </strong> {{ abstractDoc.created_at|freindlyDates }} </small>
                </div>
                </div>
                <hr class="margin-top-10">
                
                    
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
        filters: {
            freindlyDates: function (date) {
                return  moment(date, "MMMDoYYYY").calendar()
            }
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

.header-font{
    font-size:.9em;
}

.abstract-details {
            display: flex;
            justify-content: space-between;
            background-color: lighten(#000000, 93%);
            border-radius: 20px;
            padding: 3px;
            padding-left: 10px;
            margin-top: 10px;
            small {
                flex: 1;
                font-size: .7em;
            }
}

.abstract-comment{
 font-size:.8em;
}

.bordered{
    background-color: #e13f30 !important;    
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