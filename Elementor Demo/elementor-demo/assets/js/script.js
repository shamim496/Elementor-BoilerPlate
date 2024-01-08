(function ($) {
  $(window).on("elementor/frontend/init", function () {
    elementorFrontend.hooks.addAction(
      "frontend/element_ready/quiz-form.default",
      function (scope) {
        scope.find(".elementor-demo").each(function () {
          var element = $(this)[0];
        });
      }
    );
  });
})(jQuery);
