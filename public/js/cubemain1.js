(function($, window, document, undefined) {
    'use strict';

    // init cubeportfolio
    $('#js-grid-lightbox-gallery').cubeportfolio({
        filters: '#js-filters-lightbox-gallery1, #js-filters-lightbox-gallery2',
        layoutMode: 'grid',
        mediaQueries: [{
            width: 1500,
            cols: 4,
        }, {
            width: 1100,
            cols: 3,
        }, {
            width: 800,
            cols: 3,
        },{
            width: 600,
            cols: 3,
        }, {
            width: 480,
            cols: 2,
            options: {
                caption: '',
            },
        },{
            width: 380,
            cols: 1,
            options: {
                caption: '',
            },
        }],
        defaultFilter: '*',
        animationType: 'flipOutDelay',
        gapHorizontal: 10,
        gapVertical: 10,
        gridAdjustment: 'responsive',
        caption: 'zoom',
        displayType: 'sequentially',
        displayTypeSpeed: 100,

        // lightbox
        lightboxDelegate: '.cbp-lightbox',
        lightboxGallery: true,
        lightboxTitleSrc: 'data-title',
        lightboxCounter: '<div class="cbp-popup-lightbox-counter">{{current}} of {{total}}</div>',

        // singlePageInline
        singlePageInlineDelegate: '.cbp-singlePageInline',
        singlePageInlinePosition: 'below',
        singlePageInlineInFocus: true,
        singlePageInlineCallback: function(url, element) {
            // to update singlePageInline content use the following method: this.updateSinglePageInline(yourContent)
            var t = this;

            $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'html',
                    timeout: 30000
                })
                .done(function(result) {

                    t.updateSinglePageInline(result);

                })
                .fail(function() {
                    t.updateSinglePageInline('AJAX Error! Please refresh the page!');
                });
        },

        plugins: {
            loadMore: {
                element: '#js-loadMore-lightbox-gallery',
                action: 'click',
                loadItems: 3,
            }
        },
    });
    $('#js-grid-lightbox-gallery1').cubeportfolio({
        filters: '#js-filters-lightbox-gallery1, #js-filters-lightbox-gallery2',
        layoutMode: 'grid',
        mediaQueries: [{
            width: 1500,
            cols: 4,
        }, {
            width: 1100,
            cols: 3,
        }, {
            width: 800,
            cols: 3,
        }, {
            width: 480,
            cols: 1,
            options: {
                caption: '',
            }
        }],
        defaultFilter: '*',
        animationType: 'flipOutDelay',
        gapHorizontal: 10,
        gapVertical: 10,
        gridAdjustment: 'responsive',
        caption: 'zoom',
        displayType: 'sequentially',
        displayTypeSpeed: 100,

        // lightbox
        lightboxDelegate: '.cbp-lightbox',
        lightboxGallery: true,
        lightboxTitleSrc: 'data-title',
        lightboxCounter: '<div class="cbp-popup-lightbox-counter">{{current}} of {{total}}</div>',

        // singlePageInline
        singlePageInlineDelegate: '.cbp-singlePageInline',
        singlePageInlinePosition: 'below',
        singlePageInlineInFocus: true,
        singlePageInlineCallback: function(url, element) {
            // to update singlePageInline content use the following method: this.updateSinglePageInline(yourContent)
            var t = this;

            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'html',
                timeout: 30000
            })
                .done(function(result) {

                    t.updateSinglePageInline(result);

                })
                .fail(function() {
                    t.updateSinglePageInline('AJAX Error! Please refresh the page!');
                });
        },

        plugins: {
            loadMore: {
                element: '#js-loadMore-lightbox-gallery',
                action: 'click',
                loadItems: 3,
            }
        },
    });
})(jQuery, window, document);
