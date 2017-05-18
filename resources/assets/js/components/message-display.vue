<template>
          <div>
          <h5 v-if="!message"> <i class="fa fa-arrow-right"></i><div class="alert alert-info" role="alert">Pick name on the left to view a message</div></h5>
          <div class="panel panel-default margin-20" v-if="message">
          <div class="panel-heading">
           <div class="message-name"><strong>From: </strong>{{message.name}} </div>
           <div class="message-email"><em> <a :href="'mailto:'+message.email">{{message.email}} </a> </em></div>
          </div>
              <div class="panel-body">
              <p v-html="message.message"></p>
              </div>
              <div class="panel-footer"> 
                   <!-- <h6 class="text-centr"><a href="#myModal" role="button" class="btn btn-primary btn-xs" data-toggle="modal">Reply To This Message</a></h6>
                    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3 id="myModalLabel">Write A Reply </h3>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal col-sm-12" method="POST" action="/replies" @submit.prevent="onSubmit">
                                <div class="form-group"><label>Reply</label><textarea v-model="reply" id="reply" type="text" class="form-control" name="reply"></textarea></div>
                                <div class="form-group"><button type="submit" class="btn btn-primary">Send</button></div>
                                
                            </form>
                        </div>
                        <div class="modal-footer">
                            
                        </div>
                        </div>
                    </div>
                    </div>-->
                    <div class="message-timestamp">
                    <span>Received on: <strong>{{freindlyDates}}</strong> </span>
                   </div>
              </div>
          </div>
          </div>

</template>
<script>

export default{
    data(){        
        return {
            message:'',
            reply: ''
        }
    },
    methods: {

        onSubmit(){
            axios.post('/replies', {
                subject: this.subject,
                reply: this.reply
            });
        }

    },
    mounted(){
        let self=this;
        EventBus.$on('display-message', function (msg) {
              self.message=msg;      
            
        });

    },
    computed: {
    freindlyDates: function () {
      return  moment(this.message.created_at, "YYYYMMDD").calendar()
    }
  }
}


</script>