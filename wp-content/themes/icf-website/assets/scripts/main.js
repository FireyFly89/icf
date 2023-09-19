(function ($) {
    $(document).ready(function () {
        function renderImgToSvg() {
            $('.svg').each(function () {
                var $img = $(this);
                var imgURL = $img.attr('src');
                var attributes = $img.prop('attributes');

                $.get(
                    imgURL,
                    function (data) {
                        // Get the SVG tag, ignore the rest
                        var $svg = $(data).find('svg');

                        // Remove any invalid XML tags
                        $svg = $svg.removeAttr('xmlns:a');

                        // Loop through IMG attributes and apply on SVG
                        $.each(attributes, function () {
                            $svg.attr(this.name, this.value);
                        });

                        // Replace IMG with SVG
                        $img.replaceWith($svg);
                    },
                    'xml'
                );
            });
        }

        function toggleMobileNav() {
            var mobileNavBtn = $('.header__navigation__button');
            var mobileNav = $('.header__navigation');

            mobileNavBtn.on('click', function(e) {
                e.preventDefault();

                if (!mobileNavBtn.hasClass('active')) {
                    mobileNav.fadeIn(200);
                    mobileNavBtn.addClass('active');
                    $('body').addClass('hidden');
                } else {
                    mobileNav.fadeOut(200);
                    mobileNavBtn.removeClass('active');
                    $('body').removeClass('hidden');
                }
            });
        }

        renderImgToSvg();
        toggleMobileNav();
    });
})(jQuery);
