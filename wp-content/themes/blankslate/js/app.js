app = {}, UTIL = {
    fire: function(n, i, e) {
        var t = app;
        i = void 0 === i ? "init" : i, "" !== n && t[n] && "function" == typeof t[n][i] && t[n][i](e);
    },
    loadEvents: function() {
        var n = document.body.id;
        UTIL.fire("common"), UTIL.fire(n), $.each(document.body.className.split(/\s+/), function(i, e) {
            UTIL.fire(n, e);
        }), UTIL.fire("common", "finalize");
    }
}, $(document).ready(UTIL.loadEvents), app.common = {
    init: function() {
        function n() {
            var n = parseInt($(window).height(), "px"), i = parseInt($("#header").height(), "px") + parseInt($("#header").css("padding-bottom"), "px") + parseInt($("#header").css("padding-top"), "px"), e = parseInt($("#footer").height(), "px") + parseInt($("#footer").css("padding-top"), "px");
            $("#container").css("min-height", function() {
                return n - (i + e) + "px";
            });
        }
        n(), $(window).resize(function() {
            n();
        });
    },
    finalize: function() {}
}, app.home = {
    init: function() {}
};