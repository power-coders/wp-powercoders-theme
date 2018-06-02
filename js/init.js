(function($) {
  $(function() {
    function scrollToTarget(tid) {
      var Target = $(tid);
      $('html,body').animate({
        scrollTop: Target.offset().top
      }, 'slow');
    }

    function openProgramCollapsible() {
      var $focusElement = $(document.location.hash);
      var $focusElementContainer = $focusElement.parent().parent();
      if ($focusElementContainer.hasClass('collapsible')) {
        $focusElementContainer.find('.collapsible-header').toArray().forEach(function(e, i) {
          if ($focusElement.attr('id') == $(e).attr('id')) {
            $focusElementContainer.collapsible('open', i);
          }
        });
      }
    }

    if (document.getElementById('activeevent')) {
      // window.location = "#activeevent";
      scrollToTarget('#activeevent');
    }

    if (jQuery().waypoint) {
      $('.animated').waypoint({
        handler: function(direction) {
          var element = $(this.element);
          element.addClass(element.data('animation'));
        },
        offset: '80%'
      });
    }

    $('.sidenav').sidenav();
    $('.sidenav-trigger').click(function() { $('#toggle').addClass('active') });
    $('.sidenav-overlay').click(function() { $('#toggle').removeClass('active') });

    $('.parallax').parallax();

    $('.collapsible').collapsible();
    openProgramCollapsible();
    $(window).on('hashchange', openProgramCollapsible);

  }); // end of document ready
})(jQuery); // end of jQuery name space
