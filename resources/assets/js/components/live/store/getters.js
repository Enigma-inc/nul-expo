export default{
        nulisticeEvents:state=>{
            return state.nulisticeEvents;
        },
        rerisEvents:state=>{
            return state.rerisEvents;
        },
        nulisticeEventsAvaibale:state=>{
            return state.nulisticeEvents.length>0;
        },
        rerisEventsAvaibale:state=>{
            return state.rerisEvents.length>0;
        }
}