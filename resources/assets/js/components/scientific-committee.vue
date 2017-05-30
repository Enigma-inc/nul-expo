<template>
    <div class="auto-container">
                <div class="sec-title wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
            <h2 class="header text-center">Scientific Committees</h2>
        </div>
        <div class="row" id="committee">
            <div class="col-xs-12 listing-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="col-xs-12 col-sm-6">
                    <h3 class="header text-center">NULISTICE</h3>
                    <hr style="width:170px; border:solid 0.1px;">
                    <div>
                        <ul>  
                            <li> Dr Moeketsi Mpholo, Energy Research Centre (ERC) / National University of Lesotho (NUL), Lesotho</li>
                            <li> Prof. Himanshu Narayan, National University of Lesotho (NUL), Lesotho</li>                          
                            <li> Dr Thimothy Thamae, National University of Lesotho (NUL), Lesotho</li>
                            <li> Dr Zak Thamae, National University of Lesotho (NUL), Lesotho</li>
                            <li> Dr Mosotho George, National University of Lesotho (NUL), Lesotho</li>
                            <li> Dr Pulane Nkhabutlane, National University of Lesotho (NUL), Lesotho</li>
                            <li> Dr Puleng Rathimo, National University of Lesotho (NUL), Lesotho</li>
                            <li> Dr Sissay Mekbib, National University of Lesotho (NUL), Lesotho</li>
                            <li> Mr Joseph Thabana, National University of Lesotho (NUL), Lesotho</li>
                            <li> Mr Rets'elisitsoe Thamae, National University of Lesotho (NUL), Lesotho</li>
                            <li> Mrs Maleshoane Ramoholi, National University of Lesotho (NUL), Lesotho</li>
                            <li> Mr Kebitsamamng Mothibe, National University of Lesotho (NUL), Lesotho</li>
                            <li> Dr Maluke Letete, National University of Lesotho (NUL), Lesotho</li>
                            
                            
                                                        
                        </ul>
                    </div>
                </div>
                <div class="inner col-xs-12 col-sm-6">
                    <h3 class="header text-center">RERIS</h3>
                    <hr style="width:120px; border:solid 0.1px;">
                    <div class="">
                        <ul>
                            <li> Dr Moeketsi Mpholo, Energy Research Centre (ERC) / National University of Lesotho (NUL), Lesotho</li>                        
                            <li> Dr Joseph Mutale, University of Manchester, United Kingdom</li>
                            <li> Prof. Wikus van Niekerk, Stellenbosch University, South Africa</li>
                            <li> Prof. Armando C. Oliveira, University of Porto, Portugal</li>
                            <li> Prof. Marco Rupprich, MCI - The Entrepreneurial School®, Austria</li>
                            <li> Prof. Abdelilah Slaoui, University of Strasbourg, France</li>
                            <li> Prof. Anthony Staak, Cape Peninsula University of Technology (CPUT), South Africa</li>
                            <li> Dr Sandor Szabo, European Commission Joint Research Centre, Italy  </li>
                            <li> Dr Daniel Yamegueu, International Institute for Water and Environmental Engineering (2iE), Burkina Faso </li>
                            <li> Prof. Abdellatif Zerga, Pan African University Institute of Water and Energy Sciences (PAUWES), Algeria </li>
                            <li> Prof. Benmansour Abdelhalim, Université Aboubekr Belkaid de Tlemcen, Algeria</li>
                            <li> Prof. Venkata Ramayya Ancha, Jimma University, Ethiopia</li>
                            <li> Dr Ed Brown, Loughborough University, United Kingdom</li>
                            <li> Prof. Thameur Chaibi, National Research Institute for Rural Engineering, Water and Forestry, Tunisia</li>
                            <li> Prof. Seladji Chakib, Université Aboubekr Belkaid de Tlemcen, Algeria</li>
                            <li> Dr Zivaye Chiguvare, Namibia University of Science and Technology, Namibia</li>
                            <li> Prof. Emanuela Colombo, Politecnico di Milano, Italy</li>
                            <li> Prof. Abdellah Khellaf, Centre de Développement des Energies Renouvelables, Algeria</li>
                            <li> Prof.  Daniel  Egbe, Johannes Kepler University Linz, Austria</li>
                            <li> Prof. Thomas Hamacher, Technische Universität München, Germany</li>
                        </ul>
                    </div>
                </div>
            </div> 
        </div>
    </div>

</template>

<script>
export default{

}
$(function(){
    $('#committee').slimScroll({
        height: '250px',
        color: '#e13f30',
        railVisible: true,
        alwaysVisible: true
    });
});
</script>

<style scoped>
    li{
        list-style-type:disc !important;
        font-size:.9em;
    }
</style>