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
         * Output event data
         */
        dummyData.events.SineeParty.output('div.sidebar.container');

        /**
         * Create map with center at event
         */
        var map = dummyData.events.SineeParty.createMap('#map');

        var marker = dummyData.events.SineeParty.createMarker(map, true);
        marker.createInfoWindow({
            contentString: '<div class="markinfo dark right placepin">' +
                '<h3>' + dummyData.events.SineeParty.place.data('name') + '</h3>' +
                '<span class="descr">' + dummyData.events.SineeParty.place.data('address') + '</span>' +
                '<a href="javascript:void(0);" class="uber">GO!</a>' +
                '<div>'
        });
        marker.infoWindow.show();

    };