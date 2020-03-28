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
        var map = dummyData.cities.Vladivostok.createMap('#map');

        /**
         * Filling events data
         */
        var $block = $('section.grid div.overview-block div.row').empty();

        dummyData.cities.Vladivostok.getEvents().map(function(event) {

            var marker = event.createMarker(map).on('click', function() {
                window.location.href = 'open_events.html';
            });

            /**
             * Output event tags
             */
            var $tagsSection = $('<section/>', {
                'class': 'tags'
            });

            event.data('tags').map(function(tag) {

                $tagsSection.append(
                    $('<span/>', {
                        'class': 'tags__item',
                        'html': tag
                    })
                );

            });

            $block.append(
                $('<div/>', {
                    'class': 'grid-item grid-item--big clearfix col-md-12'
                }).append(
                    $('<img/>', {
                        'class': 'grid-item__img'
                    }).attr('alt', event.data('name')).attr('src', 'img/places/' + event.place.data('code') + '.png')
                ).append(
                    $('<div/>', {
                        'class': 'grid-item-wrapper'
                    }).append(
                        $('<a/>', {
                            'class': 'grid-item__title grid-item__title',
                            'html': event.data('name'),
                            'href': 'open_events.html'
                        })
                    ).append(
                        $('<div/>', {
                            'class': 'pull-right price-wrapper'
                        }).append(
                            $('<p/>', {
                                'class': 'price'
                            })
                        ).append(
                            $('<p/>', {
                                'class': 'grid-item__date-right'
                            }).append(
                                $('<img/>', {
                                    'src': 'img/icons/calendar.png'
                                })
                            ).append(
                                $('<span/>', {
                                    'html': event.data('datetime')
                                })
                            )
                        )
                    ).append(
                        $('<p/>', {
                            'class': 'grid-item__desc',
                            'html': event.data('description')
                        })
                    ).append(
                        $tagsSection
                    )
                ).on('mouseover', function() {
                    marker.infoWindow.show(map);
                    map.panTo(event);
                })
            );

        });

        /**
         * Turn on zoom map to view all markers
         */
        map.autoZoom(true);

        /**
         * You can group markers after filling
         * For example, using 3rd-party script like OverlappingMarkerSpiderfier
         */
        jQuery.ajax({
            url: 'http://jawj.github.io/OverlappingMarkerSpiderfier/bin/oms.min.js',
            dataType: 'script',
            async: true,
            success: function() {
                var oms = new OverlappingMarkerSpiderfier(map.instance, {
                    markersWontMove: true,
                    markersWontHide: true,
                    nearbyDistance: 20
                });
                map.markers.map(function(marker) {
                    /**
                     * Disable click event for marker before adding to OverlappingMarkerSpiderfier
                     */
                    oms.addMarker(marker.disableEvent('click').instance);
                });
                oms.addListener('click', function(marker) {
                    /**
                     * Run click event manually because we disable markers click event
                     */
                    marker._owner.executeEvent('click');
                });
            }
        });

    };