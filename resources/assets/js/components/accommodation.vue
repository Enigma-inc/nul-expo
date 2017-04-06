<template>
    <div class="text-align-center">
       <div v-if="loading" class="margin-10" >
            <span class="fa fa-spinner fa-4x fa-spin"></span>
        </div>
        <div v-if="!loading" class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
            <ul class="nav nav-tabs  nav-justified" id="accom-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#hotels" id="hotels-tab" role="tab" data-toggle="tab" aria-controls="hotels" aria-expanded="true">Hotels</a></li>
                <li role="presentation" class=""><a href="#lodges" role="tab" id="lodges-tab" data-toggle="tab" aria-controls="lodges" aria-expanded="false">Lodges</a></li>
                <li role="presentation" class=""><a href="#guest-houses" role="tab" id="guest-houses-tab" data-toggle="tab" aria-controls="guest-houses" aria-expanded="false">Guest Houses</a></li>
                <li role="presentation" class=""><a href="#BnBs" role="tab" id="BnBs-tab" data-toggle="tab" aria-controls="BnBs" aria-expanded="false">B&amp;Bs</a></li>

            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade active in" role="tabpanel" id="hotels" aria-labelledby="hotels-tab">
                    <div class="accom-container" v-for="hotel in hotels">
                        <div class="accom-header">
                            <h4 class="name">{{hotel.name}}</h4>
                        </div>
                        <div class="accom-body">
                            <div class="body-item phone"><a v-if="hotel.hasPhone" :href="'tel:'+hotel.phone">{{hotel.phone}}</a> </div>
                            <div class="body-item email"> <a v-if="hotel.hasEmail" :href="'mailto:'+hotel.email">{{hotel.email}}</a> </div>
                            <div class="body-item website"> <a v-if="hotel.hasWebsite" :href="'http://'+ (hotel.website).replace(' ', '')" target="_blank"> Visit Website</a> </div>
                            <div class="body-item distance">{{distance(-29.451244,27.720536,hotel.latitude,hotel.longitude,'K')}} km <span>from NUL</span></div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" role="tabpanel" id="lodges" aria-labelledby="lodges-tab">
                    <div class="accom-container" v-for="lodge in lodges">
                        <div class="accom-header">
                            <h4 class="name">{{lodge.name}}</h4>
                        </div>
                        <div class="accom-body">
                            <div class="body-item phone"><a v-if="lodge.hasPhone" :href="'tel:'+lodge.phone">{{lodge.phone}}</a> </div>
                            <div class="body-item email"> <a v-if="lodge.hasEmail" :href="'mailto:'+lodge.email">{{lodge.email}}</a> </div>
                            <div class="body-item website"> <a v-if="lodge.hasWebsite" :href="'http://'+ (lodge.website).replace(' ', '')" target="_blank"> Visit Website</a> </div>
                            <div class="body-item distance">{{distance(-29.451244,27.720536,lodge.latitude,lodge.longitude,'K')}} km <span>from NUL</span></div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" role="tabpanel" id="guest-houses" aria-labelledby="guest-houses-tab">
                        <div class="accom-container" v-for="guestHouse in guestHouses">
                            <div class="accom-header">
                                <h4 class="name">{{guestHouse.name}}</h4>
                            </div>
                            <div class="accom-body">
                                <div class="body-item phone"><a v-if="guestHouse.hasPhone" :href="'tel:'+guestHouse.phone">{{guestHouse.phone}}</a> </div>
                                <div class="body-item email"> <a v-if="guestHouse.hasEmail" :href="'mailto:'+guestHouse.email">{{guestHouse.email}}</a> </div>
                                <div class="body-item website"> <a v-if="guestHouse.hasWebsite" :href="'http://'+ (guestHouse.website).replace(' ', '')" target="_blank"> Visit Website</a> </div>
                                <div class="body-item distance">{{distance(-29.451244,27.720536,guestHouse.latitude,guestHouse.longitude,'K')}} km <span>from NUL</span></div>
                            </div>
                        </div>
                </div>
                <div class="tab-pane fade" role="tabpanel" id="BnBs" aria-labelledby="BnBs-tab">
                        <div class="accom-container" v-for="BnB in BnBs">
                            <div class="accom-header">
                                <h4 class="name">{{BnB.name}}</h4>
                            </div>
                            <div class="accom-body">
                                <div class="body-item phone"><a v-if="BnB.hasPhone" :href="'tel:'+BnB.phone">{{BnB.phone}}</a> </div>
                                <div class="body-item email"> <a v-if="BnB.hasEmail" :href="'mailto:'+BnB.email">{{BnB.email}}</a> </div>
                                <div class="body-item website"> <a v-if="BnB.hasWebsite" :href="'http://'+ (BnB.website).replace(' ', '')" target="_blank"> Visit Website</a> </div>
                                <div class="body-item distance">{{distance(-29.451244,27.720536,BnB.latitude,BnB.longitude,'K')}} km <span>from NUL</span></div>
                            </div>
                        </div>
                </div>
            </div>
        </div>

    </div>
</template>
<script>
    export default {
        data() {
            return {
                loading:true,
                hotels: [],
                lodges:[],
                guestHouses:[],
                BnBs:[]
            }


        },
        mounted() {
            axios.get('http://demo.servicebox.co.ls/api/accommodation?type=1&district=5').then(response => {
                this.hotels = _.orderBy(response.data.data, ['name'], ['asc']);
                 this.loading = false;
            });
            axios.get('http://demo.servicebox.co.ls/api/accommodation?type=2&district=5').then(response => {
                this.lodges = _.orderBy(response.data.data, ['name'], ['asc']);
                 this.loading = false;
            });
            axios.get('http://demo.servicebox.co.ls/api/accommodation?type=4&district=5').then(response => {
                this.guestHouses = _.orderBy(response.data.data, ['name'], ['asc']);
                 this.loading = false;
            });
            axios.get('http://demo.servicebox.co.ls/api/accommodation?type=3&district=5').then(response => {
                this.BnBs = _.orderBy(response.data.data, ['name'], ['asc']);
                 this.loading = false;
            });

        },

        methods: {

            distance: (lat1, lon1, lat2, lon2, unit) => {
                var radlat1 = Math.PI * lat1 / 180
                var radlat2 = Math.PI * lat2 / 180
                var theta = lon1 - lon2
                var radtheta = Math.PI * theta / 180
                var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
                dist = Math.acos(dist)
                dist = dist * 180 / Math.PI
                dist = dist * 60 * 1.1515
                if (unit == "K") { dist = dist * 1.609344 }
                if (unit == "N") { dist = dist * 0.8684 }
                return dist.toFixed(1)
            }

        }
    }

</script>