export default{
        nulisticeEvents:state=>{
            return state.nulisticeEvents;
        },
        rerisEvents:state=>{
            return state.rerisEvents;
        },
        generalEvents:state=>{
             return state.generalEvents;
        },
        nulisticeEventsAvaibale:state=>{
            return state.nulisticeEvents.length>0;
        },
        rerisEventsAvaibale:state=>{
            return state.rerisEvents.length>0;
        },
       generalEventsAvaibale:state=>{
           return state.generalEvents.length>0;
       }
}