    'use strict';

    /**
     * Map initialization (Google Maps callback function)
     */
    function initMap() {

        /**
         * Dummy data
         */
        var dummyData = initData();

        /**
         * Create map with center at Vladivostok
         */
        var map = dummyData.excursions.FromGuliverToOpera.city.createMap('#map');

        /**
         * Filling excursion route
         */
        dummyData.excursions.FromGuliverToOpera.createRoute(map, {
            markers: {
                icon: 'img/pins/route-active.png'
            },
            polylineOptions: {
                strokeColor: 'red'
            }
        });

    };