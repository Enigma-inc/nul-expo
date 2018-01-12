<template>
  <v-app
    dark
    id="inspire"
  >
    <v-toolbar color="red" dense fixed clipped-left app>
      <v-toolbar-title
        :style="$vuetify.breakpoint.width > 1264 && 'width: 300px'"
        class="ml-0 pl-3"
        :class="$vuetify.breakpoint.width <= 1264 && 'pr-3'" >
        <v-icon class="ml-3">fa-home</v-icon>
      </v-toolbar-title>
      <v-layout row align-center style="max-width: 650px">
        <v-text-field
          placeholder="Search..."
          single-line
          append-icon="search"
          :append-icon-cb="() => {}"
          class="white--text"
          hide-details
        ></v-text-field>
      </v-layout>
    </v-toolbar>
    <v-content>
      <v-container>
        <v-layout wrap >
          <nulistice></nulistice>              
          <reris></reris>
        </v-layout >
        <v-layout wrap>
          <!-- <general></general> -->
        </v-layout>
      </v-container>
    </v-content>
  </v-app>
</template>

<script>
import reris from "./reris";
import nulistice from './nulistice';
import general from './general';
  export default {
      components:{nulistice, reris,general},
    data: () => ({

    }),
    props: {
      source: String
    }
  }
</script>

<style lang="scss">
 .color-dark{
    color:lighten(#000,10%);
 }
  .event-card{
           margin: 5px;
       .card__title{
          padding:0;
        }
        .card__text{
          padding:0;
        }
        .headline{
                width: 100%;
                .title{
                    font-size: 1rem !important;
                    font-weight: 600 !important;
                    padding: 10px 5px;
                    
                }
                .details{
                    display: flex;
                    justify-content:space-between;
                    background: darken(rgb(106, 171, 62),3%);
                    font-size: 0.9rem;
                    font-weight: 600;
                    padding: 0 7px;
                    .icon{
                      color:rgba(255,255,255,0.3);
                    }
                }
            
        }
   .body{
           display: flex;
           flex-direction: column;
           margin-top: 8px;
           .chair,.presentation{
               display: flex;
               align-items: center;
               .flag{
                  
                  margin-right: 10px;
                  align-self: flex-start;
                  
                  img{
                     width: 60px;
                      width: 60px;
                    }
               }
               .details{
                     display: flex;
                     align-items: flex-start;
                     flex-direction: column;
                  .title{
                    text-transform: uppercase;
                    font-size: 0.9rem !important;
                    font-weight: 600;
                    margin-right: 5px;
                  }
               }
               .name{
                     font-weight: 300;
               }
               .presenter{
                 display: flex;
                 align-items: flex-start;
                 padding-left:15px;
                 span{
                   padding-bottom: 3px;
                   line-height:16px;
                   margin-right: 5px;
                 }
                p{
                   font-weight: 400;
                   font-size: 0.9rem;
                   font-style: italic;
                }
               }
           }
           .presentation{
             margin-top: 30px;
             
           }
         }
 

  }

.event{

           flex:1 !important;

}
  .container{
      padding: 10px;
      max-width: none !important;
      flex-direction: column;
  
    background-color: rgba(255, 255, 255, 0) !important;
    background-repeat: no-repeat;
    background: #C9CCD3;
    background-image: url(/images/live/bg.svg);
    background-size: cover;
    background-position: top center;
    width: 100%;
    height: 100%;
    visibility: inherit;
  }
  .input-group__details:after {
    background-color: rgba(255, 255, 255, 0.32) !important;
  }

  .vb > .vb-dragger {
    z-index: 5;
    width: 12px;
    right: 0;
}

.vb > .vb-dragger > .vb-dragger-styler {
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transform: rotate3d(0,0,0,0);
    transform: rotate3d(0,0,0,0);
    -webkit-transition:
        background-color 100ms ease-out,
        margin 100ms ease-out,
        height 100ms ease-out;
    transition:
        background-color 100ms ease-out,
        margin 100ms ease-out,
        height 100ms ease-out;
    background-color: rgba(0, 46, 68,0.6);
    margin: 5px 5px 5px 0;
    border-radius: 20px;
    height: calc(100% - 10px);
    display: block;
}

.vb.vb-scrolling-phantom > .vb-dragger > .vb-dragger-styler {
    background-color: rgba(255, 255, 255,1);
}

.vb > .vb-dragger:hover > .vb-dragger-styler {
    background-color: rgba(255, 255, 255,1);
    margin: 0px;
    height: 100%;
}

.vb.vb-dragging > .vb-dragger > .vb-dragger-styler {
    background-color: rgba(255, 255, 255,.5);
    margin: 0px;
    height: 100%;
}

.vb.vb-dragging-phantom > .vb-dragger > .vb-dragger-styler {
    background-color: rgba(255, 255, 255,.5);
}
</style>