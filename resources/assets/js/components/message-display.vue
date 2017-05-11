<template>
          <div>
          <h5 v-if="!message"> <i class="fa fa-arrow-right"></i><div class="alert alert-info" role="alert">Click name to view a message</div></h5>
          <div class="panel panel-default margin-20" v-if="message">
          <div class="panel-heading">
           <div class="message-name"><strong>From: </strong>{{message.name}} </div>
           <div class="message-email"><em> <a :href="'mailto:'+message.email">{{message.email}} </a> </em></div>
          </div>
              <div class="panel-body">
              <p v-html="message.message"></p>
              </div>
              <div class="panel-footer">
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
            message:''
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