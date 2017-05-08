<script>
 export default{
     data(){

         return{
             
             selectedMessage:{}
         }
     },
    methods:{
        displayMessage(message){
            this.selectedMessage=message;
            EventBus.$emit('display-message',message);
        }
    }
 }
</script>