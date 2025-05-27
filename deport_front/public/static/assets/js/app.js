(function(window, document, $, undefined){

    $(function(){
        var popOvers = jQuery(".popover-wrapper");
        if (popOvers.length > 0) {
            $('[data-toggle="popover"]').popover()
        }
    });

})(window, document, window.jQuery);
(function(window, document, $, undefined){

    $(function(){
        jQuery(".loader").fadeOut('slow');
    });

})(window, document, window.jQuery);
(function(window, document, $, undefined){

    $(function(){
        var scrollbar = jQuery(".scrollbar");
        if (scrollbar.length > 0) {
                $('.scroll_dark').mCustomScrollbar({
                  theme:"minimal-dark",
                  setHeight: false,
                  mouseWheel: {
                    normalizeDelta: true,
                    scrollAmount: '200px',
                    contentTouchScroll: true,
                    deltaFactor: '200px'
                  },
                  advanced: {
                    autoScrollOnFocus: 'a[tabindex]'
                  }
                });
                $('.scroll_light').mCustomScrollbar({
                  theme:"minimal",
                  setHeight: false,
                  mouseWheel: {
                    normalizeDelta: true,
                    scrollAmount: '200px',
                    contentTouchScroll: true,
                    eltaFactor: '200px'
                  },
                  advanced: {
                    autoScrollOnFocus: 'a[tabindex]'
                  }
                });
        }
    });

})(window, document, window.jQuery);
(function(window, document, $, undefined){

    $(function(){
        var select = jQuery(".select-wrapper");
        if (select.length > 0) {
                    $('.js-basic-single').select2();
                    $('.js-basic-multiple').select2();
                    $(".bs-select-1").val()
                    $(".bs-input").tagsinput('items')
        }
    });

})(window, document, window.jQuery);
(function(window, document, $, undefined){

    $(function(){
        var sidebarNav = jQuery(".sidebar-nav");
        if (sidebarNav.length > 0) {
                $('#sidebarNav').metisMenu();
        }
    });

})(window, document, window.jQuery);
(function(window, document, $, undefined){

    $(function(){
        var sparkline = jQuery(".sparkline-wrapper");
        if (sparkline.length > 0) {
                function Sparkline() {
                    var sparklinedemo1 = jQuery("#sparklinedemo1");
                    if (sparklinedemo1.length > 0) {
                        $(sparklinedemo1).sparkline([20, 30, 25, 40, 40, 50, 56, 37, 50], {
                            type: 'line',
                            width: '100%',
                            height: '200',
                            lineWidth: 2,
                            spotRadius: 0,
                            chartRangeMax: 50,
                            lineColor: 'rgba(71, 118, 230, 0.5)',
                            fillColor: 'rgba(71, 118, 230, 0.3)',
                            highlightLineColor: 'rgba(0,0,0,.1)',
                            highlightSpotColor: 'rgba(0,0,0,.2)',
                        });
                        $(sparklinedemo1).sparkline([10, 35, 30, 60, 50, 45, 30, 24, 30], {
                            type: 'line',
                            width: '100%',
                            height: '200',
                            lineWidth: 2,
                            spotRadius: 0,
                            chartRangeMax: 40,
                            lineColor: 'rgba(142, 84, 233, 0.5)',
                            fillColor: 'rgba(142, 84, 233, 0.3)',
                            composite: true,
                            highlightLineColor: 'rgba(0,0,0,.1)',
                            highlightSpotColor: 'rgba(0,0,0,.2)',
                        });
                    }
                    var sparklinedemo2 = jQuery("#sparklinedemo2");
                    if (sparklinedemo2.length > 0) {
                        $(sparklinedemo2).sparkline([20, 30, 25, 40, 40, 50, 56, 37, 50], {
                            type: 'line',
                            width: '100%',
                            height: '200',
                            lineWidth: 2,
                            spotRadius: 0,
                            chartRangeMax: 50,
                            lineColor: 'rgba(71, 118, 230, 1)',
                            fillColor: 'transparent',
                            highlightLineColor: 'rgba(0,0,0,.1)',
                            highlightSpotColor: 'rgba(0,0,0,.2)'
                        });
                        $(sparklinedemo2).sparkline([10, 35, 30, 60, 50, 45, 30, 24, 30], {
                            type: 'line',
                            width: '100%',
                            height: '200',
                            lineWidth: 2,
                            spotRadius: 0,
                            chartRangeMax: 40,
                            lineColor: 'rgba(142, 84, 233, 1)',
                            fillColor: 'transparent',
                            composite: true,
                            highlightLineColor: 'rgba(0,0,0,1)',
                            highlightSpotColor: 'rgba(0,0,0,1)'
                        });
                    }
                    var sparklinedemo3 = jQuery("#sparklinedemo3");
                    if (sparklinedemo3.length > 0) {
                        $(sparklinedemo3).sparkline([5, 8, 6, 7, 3, 5, 6, 8, 2, 8, 5, 10, 11, 10, 1, 6, 5, 7, 8, 10, 8, 12, 7, 9, 5, 6, 10, 7, 8, 5, 6, 8, 5, 9, 3, 7, 1, 6, 4, 8, 4, 9, 10, 13, 7, 8, 6, 4, 11, 5, 6, 4, 7, 10, 4, 7, 4, 9], {
                            type: 'bar',
                            height: '200',
                            barWidth: '10',
                            barSpacing: '3',
                            barColor: '#4776E6'
                        });
                    }
                    
                    //chart widget end

                    var sparklinedemo4 = jQuery("#sparklinedemo4");
                    if (sparklinedemo4.length > 0) {
                        $(sparklinedemo4).sparkline([5, 8, 6, 7, 3, 5, 6, 8, 4, 8, 5, 10, 11, 10, 5, 6, 5, 7, 8, 10], {
                            type: 'line',
                            width: '100%',
                            height: '200',
                            lineColor: 'rgba(142, 84, 233, 0.5)',
                            fillColor: 'rgba(142, 84, 233, 0.3)',
                            highlightLineColor: 'rgba(0,0,0,.1)',
                            highlightSpotColor: 'rgba(0,0,0,.2)'
                        });
                        $(sparklinedemo4).sparkline([5, 8, 6, 7, 3, 5, 6, 8, 2, 8, 5, 10, 11, 10, 5, 6, 5, 7, 8, 10], {
                            type: 'bar',
                            height: '200',
                            barWidth: '10',
                            barSpacing: '5',
                            composite: true,
                            barColor: '#4776E6'
                        });
                    }
                    var sparklinedemo5 = jQuery("#sparklinedemo5");
                    if (sparklinedemo5.length > 0) {
                        $(sparklinedemo5).sparkline([40, 30, 20, 10], {
                            type: 'pie',
                            width: '200',
                            height: '165',
                            sliceColors: ['#4776E6', '#8E54E9', '#ffbc1d', '#25d09a']
                        });
                    }

                };

                Sparkline();

                var resize;
                $window.resize(function(e) {
                    clearTimeout(resize);
                    resize = setTimeout(function() {
                        Sparkline();

                    }, 300);
                });
        }
    });

})(window, document, window.jQuery);
(function(window, document, $, undefined){

    $(function(){
        var tootlTips = jQuery(".tooltip-wrapper");
        if (tootlTips.length > 0) {
            $('[data-toggle="tooltip"]').tooltip();
        }
    });

})(window, document, window.jQuery);
(function(window, document, $, undefined){

    $(function(){
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);

        getSelectorFromElement:(element) =>{
            var selector = element.getAttribute('data-target');

            if (!selector || selector === '#') {
                selector = element.getAttribute('href') || '';
            }

            try {
                return document.querySelector(selector) ? selector : null;
            } catch (err) {
                return null;
            }
        }
    });


    $('.mobile-toggle').on('click', function() {
        $('body').toggleClass('sidebar-toggled');
    });

    $(document).on('click', '.mega-menu.dropdown-menu', function (e) {
        e.stopPropagation();
    });

    $('.sidebar-toggle').on('click', function() {
        $('body').toggleClass('sidebar-mini');
        $('.app-navbar').toggleClass('expand');
    });

    $('.app-navbar').hover(function() {
        if($('body').hasClass('sidebar-mini')) {
            $('.navbar-header').toggleClass('expand');
        }
    });

    $('.search').on('click', function() {
        $('.search-wrapper').fadeIn(200);
    });

    //Search Box Close
    $('.close-btn').on('click', function() {
        $('.search-wrapper').fadeOut(200);
    });

    $('.mobile-toggle').on('click', function() {
        $('body').toggleClass('sidebar-toggled');
    });

})(window, document, window.jQuery);