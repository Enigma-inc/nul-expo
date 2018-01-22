<template>
   <div>
    <!-- RENDER ACTIVE EVENTS HERE -->
      <div class="active-events col-xs-12" v-for="event in activeEvents" :key="event.id">
        <div class="event-field">
              <div class="header">Location</div>
              <div class="details">{{event.time}} | {{event.room}}</div>
        </div>
          <div class="event-field">
              <div class="header">Session</div>
              <div class="details">{{event.session_title}}</div>
          </div>
          <div class="event-field">
              <div class="header">Presentation</div>
              <div class="details">{{event.title}}</div>
          </div>
          <div class="event-field">
              <div class="header">Presenter</div>
              <div class="details">{{event.presenter}}</div>
          </div>
          <div class="event-field">
              <div class="header"></div>
              <div class="details">
                   <event-buttons :toggle-text="'Deactivate'" :type="'nulistice'" :event="event"> </event-buttons>
              </div>
          </div>
      </div>
   <vue-good-table
                :columns="columns"
                :paginate="true"
                :rows="inActiveEvents"
                :globalSearch="true">
                <template slot="table-row-after" scope="props">
                    <td>
                       <event-buttons :toggle-text="'Activate'" :type="'nulistice'" :event="props.row"> </event-buttons>
                    </td>
                </template>
    </vue-good-table>
  </div>
</template>
<script>
export default{
    data(){
        return{
            activeEvents:[],
            inActiveEvents:[],
             columns: [
                            {
                            label: 'Session Title',
                            field: 'session_title',
                            filterable: true,
                            },
                            {
                            label: 'Presentation Title',
                            field: 'title',
                            filterable: true,
                            },
                            {
                            label: 'Room',
                            field: 'room',
                            filterable: true,
                            },
                            {
                            label: 'Presenter',
                            field: 'presenter',
                            filterable: true,
                            },
                            {
                            label: 'Actions',
                            sortable: false,
                            },
      ],
        }
    },
    mounted(){
        this.getEvents();
        this.listen();
    },
    methods:{
        getEvents(){
            axios.get(`../../api/events/nulistice/1`).then(response=>{
                this.activeEvents=response.data;
            });
             axios.get(`../../api/events/nulistice/0`).then(response=>{
                this.inActiveEvents = response.data;
            });
        },
        listen(){
            
            //LISTEN FOR EVENTBUS NOTIFICATIONS
            EventBus.$on('refreshNulisticeEvents',()=>{
                   this.getEvents();
            });
        }
    }
}
    
</script>
<style lang="scss" scoped>
    .active-events{
        display: block;
        margin-bottom: 20px;
        background: linear-gradient(to bottom, #D5DEE7 0%, #E8EBF2 50%, #E2E7ED 100%), linear-gradient(to bottom, rgba(0,0,0,0.02) 50%, rgba(255,255,255,0.02) 61%, rgba(0,0,0,0.02) 73%), linear-gradient(33deg, rgba(255,255,255,0.20) 0%, rgba(0,0,0,0.20) 100%);
        background-blend-mode: normal,color-burn;
        box-shadow: 0px 0px 4px 0px rgba(50, 50, 50, 0.75);
        .event-field{
                display: flex;
                justify-content: space-between;
                padding: 10px 5px;
                border-bottom: 1px solid rgba(0,0,0,0.2);
                .header{
                        font-weight: 600;
                        text-transform: uppercase;
                }
        }
    }
</style>

