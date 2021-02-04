(function ($) {
  $(function () {

    var agSlideFlickity = $('.js-flickity-slider').flickity({
      autoPlay: 2000,
      imagesLoaded: true,
      percentPosition: false,
      wrapAround: true,
      prevNextButtons: false,
      initialIndex: 5,
      pageDots: false,
      groupCells: 1
    });

    var agCard = agSlideFlickity.find('.js-carousel-cell .js-card-bg'),
      agTransform = 'string' == typeof document.documentElement.style.transform ? 'transform' : 'WebkitTransform',
      agSlide = agSlideFlickity.data('flickity');

   

    agSlideFlickity.on('dragStart.flickity', function (t, e) {
      document.ontouchmove = function (t) {
        t.preventDefault();
      }
    });

    agSlideFlickity.on('dragEnd.flickity', function (t, e) {
      document.ontouchmove = function (t) {
        return true;
      }
    });

  });
})(jQuery);