<template>
 <form class="form-horizontal" role="form" >
            <form-wizard :finishButtonText="'Submit'" :color="'#eb443b'"
                             @on-complete="submit"
                             :title="getPageTitle" :subtitle="''">
            <tab-content title="Session Details" :beforeChange="()=>validateSessionDetails($v)">
               
                  <div class="col-xs-12">
                    <div class="form-group label-floating padding-right-10"  
                    :class="{'has-error':$v.sessionDetails.sessionTitle.$invalid}">
                        <label for="title" class="control-label">Session Title</label>
                        <div class="">
                            <input required  type="text" class="form-control" 
                                 v-model.trim="sessionDetails.sessionTitle"  @input="$v.sessionDetails.sessionTitle.$touch()"  > 
                                <span class="help-block" v-if="$v.sessionDetails.sessionTitle.$invalid">
                                    <small>This field is required</small>
                                </span> 
                        </div>
                    </div> 
                  </div>
                  <div class="col-xs-12">
                    <div class="form-group label-floating padding-right-10" >
                        <label for="title" class="control-label">Keynote</label>

                        <div class="">
                            <input required  type="text" class="form-control" 
                                 v-model="sessionDetails.keynote"   > 
                        </div>
                    </div>  
                  </div>
                  <div class="col-xs-12">
                    <div class="form-group label-floating padding-right-10 "
                         :class="{'has-error':$v.sessionDetails.chair.$invalid}">
                        <label for="title" class="control-label">Session Chair</label>

                        <div class="">
                            <input required  type="text" class="form-control" v-model.trim="sessionDetails.chair" 
                                          @input="$v.sessionDetails.chair.$touch()"  > 
                                 <span class="help-block" v-if="$v.sessionDetails.chair.$invalid">
                                    <small>This field is required</small>
                                </span> 
                        </div>
                    </div> 
                  </div>
                  <div class="col-xs-12">
                    <div class="form-group label-floating padding-right-10"
                      :class="{'has-error':$v.sessionDetails.chairCountry.$invalid}">
                        <label for="title" class="control-label">Chair Country</label>

                        <div class="">
                            <div class="country">
                                <div class="list">
                                    <v-select class="select-list" label="name" :options="countries" v-model="selectedChairCountry"></v-select>
                                </div>
                                <div class="flag" v-if="sessionDetails.chairCountryFlag">
                                    <img :src="sessionDetails.chairCountryFlag" >
                                </div>
                            </div>
                                <span class="help-block" v-if="$v.sessionDetails.chairCountry.$invalid">
                                    <small>This field is required</small>
                                </span> 
                        </div>
                    </div> 
                  </div>
                
            </tab-content>
            <tab-content title="Presentation Details" :beforeChange="()=>validatePresentionDetails($v)">
                <div class="col-xs-12">
                    <div class="form-group label-floating padding-right-10"
                    :class="{'has-error':$v.presentationDetails.presentationTitle.$invalid}">
                        <label for="title" class="control-label">Presetation Title</label>

                        <div class="">
                            <input required  type="text" class="form-control"
                            v-model.trim="presentationDetails.presentationTitle"  @input="$v.presentationDetails.presentationTitle.$touch()" > 
                                <span class="help-block" v-if="$v.presentationDetails.presentationTitle.$invalid">
                                    <small>This field is required</small>
                                </span> 
                        </div>
                    </div> 
                </div>
                <div class="col-xs-6">
                    <div class="form-group label-floating padding-right-10"
                         :class="{'has-error':$v.presentationDetails.time.$invalid}">
                        <label for="title" class="control-label">Time</label>

                        <div class="">
                            <input required  type="text" class="form-control" 
                             v-model.trim="presentationDetails.time"  @input="$v.presentationDetails.time.$touch()" >
                                <span class="help-block" v-if="$v.presentationDetails.time.$invalid">
                                    <small>This field is required</small>
                                </span>  
                        </div>
                    </div> 
                </div>
                <div class="col-xs-6">
                    <div class="form-group label-floating padding-right-10"
                     :class="{'has-error':$v.presentationDetails.room.$invalid}">
                        <label for="title" class="control-label">Room</label>

                        <div class="">
                            <input required  type="text" class="form-control" 
                             v-model.trim="presentationDetails.room"  @input="$v.presentationDetails.room.$touch()" > 
                                <span class="help-block" v-if="$v.presentationDetails.room.$invalid">
                                    <small>This field is required</small>
                                </span> 
                        </div>
                    </div> 
                </div>
                <div class="col-xs-12">
                    <div class="form-group label-floating padding-right-10"
                    :class="{'has-error':$v.presentationDetails.presenter.$invalid}">
                        <label for="title" class="control-label">Presenter</label>

                        <div class="">
                            <input required  type="text" class="form-control"
                                 v-model.trim="presentationDetails.presenter"  @input="$v.presentationDetails.presenter.$touch()"  > 
                                 <span class="help-block" v-if="$v.presentationDetails.presenter.$invalid">
                                    <small>This field is required</small>
                                </span> 
                        </div>
                    </div> 
                </div>
                <div class="col-xs-12">
                    <div class="form-group label-floating padding-right-10"
                             :class="{'has-error':$v.presentationDetails.presenterCountry.$invalid}">
                        <label for="title" class="control-label">Presenter Country</label>

                        <div class="">
                            <div class="country">
                                <div class="list">
                                    <v-select class="select-list" label="name" :options="countries" v-model="selectedPresenterCountry"></v-select>
                                </div>
                                <div class="flag" v-if="presentationDetails.presenterCountryFlag">
                                    <img :src="presentationDetails.presenterCountryFlag" >
                                </div>
                            </div>
                                 <span class="help-block" v-if="$v.presentationDetails.presenterCountry.$invalid">
                                    <small>This field is required</small>
                                </span> 
                        </div>
                    </div> 
                </div>
                <div class="col-xs-12">
                    
                </div>
            </tab-content>
            <tab-content title="Summary">
                <div class="details-container">
                    <div class="title">Session</div>
                    <div class="content">{{sessionDetails.sessionTitle}}</div>
                </div>
                <div class="details-container">
                    <div class="title">Keynote</div>
                    <div class="content">{{sessionDetails.keynote}}</div>
                </div>
                <div class="details-container">
                    <div class="title">Chair</div>
                    <div class="content">{{sessionDetails.chair}}</div>
                </div>
                <div class="details-container separator">
                    <div class="title">Chair Country</div>
                    <div class="content">
                        <div>{{sessionDetails.chairCountry}}</div>
                         <div class="summary-flag" v-if="sessionDetails.chairCountryFlag">
                             <img :src="sessionDetails.chairCountryFlag" >
                        </div>
                    </div>
                </div>
                <div class="details-container">
                    <div class="title">Presention Title</div>
                    <div class="content">{{presentationDetails.presentationTitle}}</div>
                </div>
                <div class="details-container">
                    <div class="title">Location</div>
                    <div class="content">{{presentationDetails.time +' | '+presentationDetails.room}}</div>
                </div>
                <div class="details-container">
                    <div class="title">Presenter</div>
                    <div class="content">{{presentationDetails.presenter}}</div>
                </div>
                <div class="details-container">
                    <div class="title">Presenter Country</div>
                    <div class="content flex">
                        <div>{{presentationDetails.presenterCountry}}</div>
                         <div class="summary-flag" v-if="presentationDetails.presenterCountryFlag">
                                    <img :src="presentationDetails.presenterCountryFlag" >
                        </div>
                    </div>
                </div>

            </tab-content>
            </form-wizard>
 </form>
</template>
<script>
import { required } from 'vuelidate/lib/validators';
import vSelect  from 'vue-select';
export default{
    props:{
        conference:{
            type:String,
            required:true
            },
        eventId:{
            type:Number,
            default:0, //Add new event by default
            required:false
            },
    },
    components:{vSelect},
    data(){
        return{
            sessionDetails:{
                sessionTitle:'',
                keynote:'',
                chair:'',
                chairCountry:'',
                chairCountryFlag:''
            },
            presentationDetails:{
                presentationTitle:'',
                time:'',
                room:'',
                presenter:'',
                presenterCountry:'',
                presenterCountryFlag:'',
            },
            countries: [ ],
            selectedChairCountry:null,
            selectedPresenterCountry:null
        }
    },
  mounted(){
      this.getCountries();
     
  },
  validations: {
          sessionDetails:{
            sessionTitle: {
              required
            },
            chair:{
              required
            },
            chairCountry:{
              required
            },
            chairCountryFlag:{
              required
            }
          },
          presentationDetails:{
            presentationTitle: {
              required
            },
            time:{
              required
            },
            room:{
              required
            },
            presenter:{
              required
            },
            presenterCountry:{
              required
            },
            presenterCountryFlag:{
              required
            }
          },
        },
    methods:{
        getEvent(){
                if(this.isNulisticeEvent())
                    {
                        axios.get(`../../../api/events/nulistice/${this.eventId}/edit`).then(response=>{
                                this.setEventForEdit(response.data)
                            }); 
                    }
                    else{
                         axios.get(`../../../api/events/reris/${this.eventId}/edit`).then(response=>{
                                this.setEventForEdit(response.data)
                            }); 
                    }
        },
        setEventForEdit(event){
                
                this.sessionDetails.sessionTitle=event.session_title;
                this.sessionDetails.keynote=event.keynote;
                this.sessionDetails.chair=event.chair;
                this.sessionDetails.chairCountry=event.chair_country;
                this.sessionDetails.chairCountryFlag=event.chair_country_flag;

                this.presentationDetails.presentationTitle=event.title;
                this.presentationDetails.time=event.time;
                this.presentationDetails.room=event.room;
                this.presentationDetails.presenter=event.presenter;
                this.presentationDetails.presenterCountry=event.presenter_country;
                this.presentationDetails.presenterCountryFlag=event.presenter_country_flag;

                //Set Selected chair and presenter Countries
                this.selectedChairCountry= this.countries.filter(country=>{
                    return country.name==this.sessionDetails.chairCountry;
                },this)[0];
                this.selectedPresenterCountry= this.countries.filter(country=>{
                    return country.name==this.presentationDetails.presenterCountry;
                },this)[0];
        },
        getCountries(){
            axios.get(`../../../../data/countries.json`).then(response=>{
                this.countries=response.data;
                //get event details
                 if(this.isEditmode){
                        this.getEvent();
                    }

            });
      },
        submit(){
            //Define Endpoints
            let createNewUrl='';
            let updateUrl='';
            if(this.isNulisticeEvent())
            {
                createNewUrl=`../../../api/events/nulistice`;
                updateUrl=`../../../api/events/nulistice/${this.eventId}?_method=PATCH`;
            }
            else{
                 createNewUrl=`../../../api/events/reris`;
                updateUrl=`../../../api/events/reris/${this.eventId}?_method=PATCH`;
            }

           if(!this.isEditmode){
                axios.post(createNewUrl,
                        Object.assign(this.presentationDetails,this.sessionDetails)).then(response=>{
                             this.$swal( 'Success!','Event Added', 'success').then(()=>{
                                  window.location='./';
                             });


                            }).catch(error=>{
                                this.$swal( 'Oops...','Something went wrong!', 'error');
                                console.log(error);
                            });
           }
           else{
                 axios.post(updateUrl,
                        Object.assign(this.presentationDetails,this.sessionDetails)).then(response=>{
                             this.$swal( 'Success!','Event Updated', 'success').then(()=>{
                                 window.location='./';
                             })

            }).catch(error=>{
                 this.$swal( 'Oops...','Something went wrong!', 'error');
                console.log(error);
            });
           }
        },
        validateSessionDetails($v){
            return !$v.sessionDetails.$invalid;
        },
        validatePresentionDetails($v){
            return !$v.presentationDetails.$invalid;
        },
        isNulisticeEvent(){
            return this.conference =='nulistice' || this.conference =='Nulistice' ||this.conference =='NULISTICE';
        },
        resetFields(){
                this.sessionDetails.sessionTitle='',
                this.sessionDetails.keynote='';
                this.sessionDetails.chair='';
                this.sessionDetails.chairCountry='';
                this.sessionDetails.chairCountryFlag='';         
                this.presentationDetails.presentationTitle='';
                this.presentationDetails.time='';
                this.presentationDetails.room='';
                this.presentationDetails.presenter='';
                this.presentationDetails.presenterCountry='';
                this.presentationDetails.presenterCountryFlag='';
        }

    },
    watch:{
        selectedChairCountry:function(newCountry,oldCountry){
             if(newCountry){
                 this.sessionDetails.chairCountry=newCountry.name;
                this.sessionDetails.chairCountryFlag=newCountry.flag;
             }
             else{
                  this.sessionDetails.chairCountry="";
                this.sessionDetails.chairCountryFlag="";
             }
        },
        selectedPresenterCountry:function(newCountry,oldCountry){
             if(newCountry){
                 this.presentationDetails.presenterCountry=newCountry.name;
                this.presentationDetails.presenterCountryFlag=newCountry.flag;
             }
             else{
                  this.presentationDetails.presenterCountry="";
                this.presentationDetails.presenterCountryFlag="";
             }
        }
    },
     computed:{
     isEditmode(){
                return this.eventId!=0;
            },
    getPageTitle(){
                    let pageTile="";
                    if(this.isNulisticeEvent()){
                        this.isEditmode?pageTile="Editing NULISTICE Event":pageTile="Creating NULISTICE Event";
                    }
                    else{
                        this.isEditmode?pageTile="Editing RERIS Event":pageTile="Creating RERIS Event";
                    }

                    return pageTile;
                }
        },
    
}

</script>
<style lang="scss" scope>
   .country{
       display: flex;
       .list{
           flex:1;
            .select-list {
                   .dropdown-toggle{
                        border-radius: 0 !important;
                   }
                    
                }
       }
       .flag{
           img{height: 35px}
       }
   }
    .details-container{
        display: flex;
        justify-content: space-between;
        border-bottom: 1px solid rgba(0,0,0,0.1);
        padding: 5px 0;
        margin: 0 20px;
        .title{
                font-size: 1.4rem;
               font-weight: 600;
        }
        .content{
            display: flex;
            font-style: italic;
            align-items: center
        }
    }
    .separator{border-bottom: 2px solid rgba(0,0,0,0.5);}
   .summary-flag{
           img{height: 10px;margin-left:5px;}
       }
</style>

