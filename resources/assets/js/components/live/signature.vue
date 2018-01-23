<template>
  <a class="signature" href="http://www.enigma.co.ls" target="_blank">
      <span>Designed By</span>
      <img :src="enigma" alt="Enigma">
  </a>
</template>
<script>
export default{
    data(){
        return{
            enigma:"/images/logos/enigma-logo-white.svg"
        }
    }
}
    
</script>
<style lang="scss" scoped>
    .signature{
            display: flex;
            flex-direction: column;
            align-items: center;
            background: rgba(0,0,0,0.8);
            padding: 2px;
            border-radius: 2px;
            position: fixed;
            bottom: 5px;
            right: 5px;
            text-decoration: none;
            span{
                    font-size: 0.6rem;
                   font-style: italic;
                   color:darken(#fff, 10%);
            }
            img{    height: 15px;}
    }
</style>

