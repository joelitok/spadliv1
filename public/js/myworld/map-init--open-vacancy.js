    'use strict';

    /**
     * Map
     */
    var map;
    /**
     * Dummy data
     */
    var dummyData = initData();

    /**
     * Map initialization (Google Maps callback function)
     */
    function initMap() {

        /**
         * Output vacancy data
         */
        dummyData.vacancies.StreetBarBarmen.output('div.sidebar.container');

        /**
         * Create map with center at vacancy
         */
        map = dummyData.vacancies.StreetBarBarmen.createMap('#map');

        createVacancyMarker();

        /**
         * Filling vacancies data
         */
        var $block = $('section.grid div.overview-block div.row').empty();

        dummyData.vacancies.StreetBarBarmen.company.city.getVacancies().map(function(vacancy) {

            /**
             * Output vacancy tags
             * @type {[type]}
             */
            var $tagsSection = $('<section/>', {
                'class': 'tags'
            });

            vacancy.data('tags').map(function(tag) {

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
                    }).attr('alt', vacancy.data('name')).attr('src', 'img/companies/' + vacancy.company.data('code') + '.png')
                ).append(
                    $('<div/>', {
                        'class': 'grid-item-wrapper'
                    }).append(
                        $('<a/>', {
                            'class': 'grid-item__title',
                            'html': vacancy.data('name'),
                            'href': 'open_places.html'
                        })
                    ).append(
                        $('<p/>', {
                            'class': 'grid-item__desc',
                            'html': vacancy.data('description')
                        })
                    ).append(
                        $tagsSection
                    ).append(
                        $('<section/>', {
                            'class': 'social-stats'
                        }).append(
                            $('<div/>', {
                                'class': 'social-stats__item social-stats-item',
                            }).append(
                                $('<span/>', {
                                    'class': 'social-stats-item__icon fa fa-star'
                                })
                            ).append(
                                $('<span/>', {
                                    'class': 'social-stats-item__value',
                                    'html': vacancy.data('rating')
                                })
                            )
                        ).append(
                            $('<div/>', {
                                'class': 'social-stats__item social-stats-item',
                            }).append(
                                $('<span/>', {
                                    'class': 'social-stats-item__icon fa fa-comment'
                                })
                            ).append(
                                $('<span/>', {
                                    'class': 'social-stats-item__value',
                                    'html': vacancy.data('comments')
                                })
                            )
                        )
                    )
                ).on('mouseover', function() {
                    map.clearMarkers();
                    createVacancyMarker();
                    var marker = vacancy.createMarker(map);
                    map.panTo(vacancy);
                    marker.infoWindow.show(map);
                })
            );

        });

    };

    /**
     * Add vacancy marker to map
     */
    function createVacancyMarker() {

        var
            vacancy = dummyData.vacancies.StreetBarBarmen,
            marker = vacancy.createMarker(map, true);
        map.panTo(vacancy);
        marker.createInfoWindow({
            contentString: '<div class="markinfo dark right vakancypin">' +
                '<img src="img/companies/' + vacancy.company.data('code') + '.png">' +
                '<h3>' + vacancy.data('name') + '</h3>' +
                '<span class="descr">' + vacancy.company.data('address') + '</span>' +
                '<div>'
        });
        marker.infoWindow.show();

    };