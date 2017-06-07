<script>
 export default{
     data(){

         return{
             
             selectedAbstract:{}
         }
     },
    methods:{
        displayAbstract(abstract){ 
            this.selectedAbstract=abstract;
            EventBus.$emit('display-abstract',abstract);
        }
    }
 }
</script>