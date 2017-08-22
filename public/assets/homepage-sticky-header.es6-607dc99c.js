! function e(n, t, o) {
    function r(i, l) {
        if (!t[i]) {
            if (!n[i]) {
                var c = "function" == typeof require && require;
                if (!l && c) return c(i, !0);
                if (a) return a(i, !0);
                var s = new Error("Cannot find module '" + i + "'");
                throw s.code = "MODULE_NOT_FOUND", s
            }
            var d = t[i] = {
                exports: {}
            };
            n[i][0].call(d.exports, function(e) {
                var t = n[i][1][e];
                return r(t ? t : e)
            }, d, d.exports, e, n, t, o)
        }
        return t[i].exports
    }
    for (var a = "function" == typeof require && require, i = 0; i < o.length; i++) r(o[i]);
    return r
}({
    1: [function(e, n, t) {
        (function(n) {
            "use strict";

            function t(e) {
                return e && e.__esModule ? e : {
                    "default": e
                }
            }
            var o = "undefined" != typeof window ? window.angular : "undefined" != typeof n ? n.angular : null,
                r = t(o),
                a = e("../templates/homepage-sticky-header.ng.html"),
                i = t(a),
                l = r["default"].module("auraComponents");
            l.directive("homepageStickyHeader", [function() {
                return {
                    transclude: !0,
                    restrict: "E",
                    scope: {
                        theme: "@",
                        correspondingElement: "@",
                        fallbackLogo: "@"
                    },
                    template: i["default"]
                }
            }])
        }).call(this, "undefined" != typeof global ? global : "undefined" != typeof self ? self : "undefined" != typeof window ? window : {})
    }, {
        "../templates/homepage-sticky-header.ng.html": 2
    }],
    2: [function(e, n, t) {
        n.exports = '<div responsive-if="above-xs" responsive-grid="page"\n    class="HomepageStickyHeader theme-{[{ theme }]}">\n\n    <div class="HomepageStickyHeader-container"\n            for-viewport-element="{[{ correspondingElement }]}"\n            viewport-element-offscreen-class="is-visible"\n            throttle-delay="100">\n\n        <div class="HomepageStickyHeader-container-inner">\n            <div class="HomepageStickyHeader-container-logo"\n                    responsive-if="above-sm"\n                    responsive-grid="page">\n                <a href="/">\n                    <svg-icon\n                        class="HomepageStickyHeader-container-logo-default"\n                        type="thumbtack-logo_178x28"\n                        alt="Thumbtack"></svg-icon>\n\n                    <img class="HomepageStickyHeader-container-logo-fallback"\n                        ng-if="fallbackLogo"\n                        ng-src="{[{ fallbackLogo }]}"\n                        width="152" height="24" alt="Thumbtack" />\n                </a>\n            </div>\n            <div ng-transclude class="HomepageStickyHeader-container-transclude"></div>\n        </div>\n    </div>\n</div>\n'
    }, {}]
}, {}, [1]);