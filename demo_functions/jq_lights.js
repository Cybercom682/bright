(function($) {
    $.fn.mousePointerCircle = function(options) {
        return this.each(function() {
            const settings = $.extend({
                animSelektor: null
            }, options);

            const circle = $("<div>")
                .css({
                    width: "10rem",
                    height: "10rem",
                    borderRadius: "50%",
                    position: "absolute",
                    pointerEvents: "none",
                    boxSizing: "border-box",
                    padding: "1rem",
                    boxShadow: "rgba(255, 255, 255, 0.07) 1px 1px 10px 10px",
                    backgroundColor: "rgba(255, 255, 255, 0.07)"
                });
            
            $("body").append(circle);

            $(this).on("mousemove", function(e) {
                circle.css({
                    left: e.pageX - circle.width() / 2 + "px",
                    top: e.pageY - circle.height() / 2 + "px"
                });
                if (settings.animSelektor) {
                    const $animElement = $(settings.animSelektor)[0];
                    const circleRect = circle[0].getBoundingClientRect();
                    const animElementRect = $animElement.getBoundingClientRect();
                
                    if (
                        circleRect.right >= animElementRect.left &&
                        circleRect.left <= animElementRect.right &&
                        circleRect.bottom >= animElementRect.top &&
                        circleRect.top <= animElementRect.bottom
                    ) {
                        $animElement.style.backgroundColor = "red";
                    } else {
                        $animElement.style.backgroundColor = "gray";
                    }
                }
                
            });
        });
    };
})(jQuery);