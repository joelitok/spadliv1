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
         * Filling excursions data
         */
        var $block = $('section.grid div.overview-block div.row').empty();

        dummyData.cities.Vladivostok.getExcursions().map(function(excursion) {

            var route = excursion.createRoute(map);

            var $ratingSection = $('<div/>', {
                'class': 'grid-item__rating'
            });

            for (var i = 0; i < 4; i++) {
                $ratingSection.append(
                    $('<span/>', {
                        'class': 'star fa fa-star'
                    })
                );
            };
            $ratingSection.append(
                $('<span/>', {
                    'class': 'start fa fa-star star--empty'
                })
            );

            $block.append(
                $('<div/>', {
                    'class': 'grid-item grid-item--big clearfix col-md-12'
                }).append(
                    $('<a/>', {
                        'class': 'grid-item__title',
                        'href': 'open_exc.html',
                        'html': excursion.data('name')
                    })
                ).append(
                    $('<div/>', {
                        'class': 'pull-right price-wrapper'
                    }).append(
                        $('<p/>', {
                            'class': 'price',
                            'html': excursion.data('currency') + excursion.data('price')
                        })
                    ).append(
                        $ratingSection
                    )
                ).append(
                    $('<p/>', {
                        'class': 'grid-item__desc',
                        'html': excursion.data('description')
                    })
                ).append(
                    $('<div/>', {
                        'class': 'overview-block overview-block--fluid'
                    }).append(
                        $('<div/>', {
                            'class': 'excursion',
                            'style': 'background-image: url("img/excursions/1.jpg");'
                        }).append(
                            $('<div/>', {
                                'class': 'excursion__info'
                            }).append(
                                $('<div/>', {
                                    'class': 'excursion-info-block'
                                }).append(
                                    $('<img/>', {
                                        'class': 'excursion-info-block__img'
                                    }).attr('src', 'img/guides/1.jpg').attr('alt', excursion.data('guide'))
                                ).append(
                                    $('<div/>', {
                                        'class': 'excursion-info-block-wrap'
                                    }).append(
                                        $('<p/>', {
                                            'class': 'excursion-info-block__title',
                                            'html': 'Guide:'
                                        })
                                    ).append(
                                        $('<a/>', {
                                            'href': 'javascript:void(0);',
                                            'html': excursion.data('guide')
                                        })
                                    )
                                )
                            ).append(
                                $('<div/>', {
                                    'class': 'excursion-info-block'
                                }).append(
                                    $('<img/>', {
                                        'class': 'excursion-info-block__img'
                                    }).attr('src', 'img/icons/globe.png').attr('alt', excursion.data('language'))
                                ).append(
                                    $('<div/>', {
                                        'class': 'excursion-info-block-wrap'
                                    }).append(
                                        $('<p/>', {
                                            'class': 'excursion-info-block__title',
                                            'html': 'Language'
                                        })
                                    ).append(
                                        $('<p/>', {
                                            'html': excursion.data('language')
                                        })
                                    )
                                )
                            ).append(
                                $('<div/>', {
                                    'class': 'excursion-info-block'
                                }).append(
                                    $('<img/>', {
                                        'class': 'excursion-info-block__img'
                                    }).attr('src', 'img/icons/time.png').attr('alt', excursion.data('duration'))
                                ).append(
                                    $('<div/>', {
                                        'class': 'excursion-info-block-wrap'
                                    }).append(
                                        $('<p/>', {
                                            'class': 'excursion-info-block__title',
                                            'html': 'Duration'
                                        })
                                    ).append(
                                        $('<p/>', {
                                            'html': excursion.data('duration')
                                        })
                                    )
                                )
                            )
                        )
                    )
                ).on('mouseover', function() {
                    map.hideInfoWindows();
                    /**
                     * Output all routes with default color
                     */
                    map.routes.map(function(route) {
                        route.update({
                            markers: {
                                icon: 'img/pins/route.png'
                            },
                            polylineOptions: {
                                strokeColor: '#0A161E'
                            }
                        });
                    });
                    /**
                     * And highlight current route as active
                     */
                    route.update({
                        markers: {
                            icon: 'img/pins/route-active.png'
                        },
                        polylineOptions: {
                            strokeColor: 'red'
                        }
                    });
                })
            );

        });

    };