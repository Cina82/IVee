! function t(e, n, i) {
    function o(a, s) {
        if (!n[a]) {
            if (!e[a]) {
                var u = "function" == typeof require && require;
                if (!s && u) return u(a, !0);
                if (r) return r(a, !0);
                var l = new Error("Cannot find module '" + a + "'");
                throw l.code = "MODULE_NOT_FOUND", l
            }
            var c = n[a] = {
                exports: {}
            };
            e[a][0].call(c.exports, function(t) {
                var n = e[a][1][t];
                return o(n ? n : t)
            }, c, c.exports, t, e, n, i)
        }
        return n[a].exports
    }
    for (var r = "function" == typeof require && require, a = 0; a < i.length; a++) o(i[a]);
    return o
}({
    1: [function(t, e, n) {
        (function(e) {
            "use strict";

            function n(t) {
                return t && t.__esModule ? t : {
                    "default": t
                }
            }

            function i(t, e) {
                if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
            }

            function o(t, e) {
                if (!t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return !e || "object" != typeof e && "function" != typeof e ? t : e
            }

            function r(t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function, not " + typeof e);
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        enumerable: !1,
                        writable: !0,
                        configurable: !0
                    }
                }), e && (Object.setPrototypeOf ? Object.setPrototypeOf(t, e) : t.__proto__ = e)
            }
            var a = function() {
                    function t(t, e) {
                        for (var n = 0; n < e.length; n++) {
                            var i = e[n];
                            i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
                        }
                    }
                    return function(e, n, i) {
                        return n && t(e.prototype, n), i && t(e, i), e
                    }
                }(),
                s = function S(t, e, n) {
                    null === t && (t = Function.prototype);
                    var i = Object.getOwnPropertyDescriptor(t, e);
                    if (void 0 === i) {
                        var o = Object.getPrototypeOf(t);
                        return null === o ? void 0 : S(o, e, n)
                    }
                    if ("value" in i) return i.value;
                    var r = i.get;
                    if (void 0 !== r) return r.call(n)
                },
                u = "undefined" != typeof window ? window.$ : "undefined" != typeof e ? e.$ : null,
                l = n(u),
                c = "undefined" != typeof window ? window._ : "undefined" != typeof e ? e._ : null,
                d = n(c),
                f = "undefined" != typeof window ? window.angular : "undefined" != typeof e ? e.angular : null,
                v = n(f),
                p = t("../../navigation/scripts/navigation.es6"),
                g = n(p),
                h = t("../../../utilities/scroll-manager/scripts/scroll-manager.es6"),
                y = n(h),
                m = t("../templates/navigation-sticky-sidebar.ng.html"),
                b = n(m),
                w = v["default"].module("auraComponents"),
                I = function(t) {
                    function e(t) {
                        var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
                        i(this, e);
                        var r = o(this, (e.__proto__ || Object.getPrototypeOf(e)).call(this, t, n));
                        return r.scrollId || (r.scrollId = y["default"].add(function() {
                            r.updateActiveSection()
                        })), r.$navBlock = r.$el.find(".Sticky-fixedWrapper"), r
                    }
                    return r(e, t), a(e, [{
                        key: "isElementInViewport",
                        value: function(t) {
                            var e = t.getBoundingClientRect();
                            return e.bottom > 0 && e.top < window.innerHeight
                        }
                    }, {
                        key: "getElementsMostInViewport",
                        value: function(t) {
                            var e = [],
                                n = 0;
                            return t.each(function(t, i) {
                                var o = i.getBoundingClientRect(),
                                    r = o.bottom / (o.bottom - o.top),
                                    a = (window.innerHeight - o.top) / (o.bottom - o.top),
                                    s = Math.min(r, a, 1);
                                s > n ? (n = s, e = [i]) : s === n && e.push(i)
                            }), e
                        }
                    }, {
                        key: "updateActiveSection",
                        value: function() {
                            var t = this,
                                e = this.$navItems.filter(function(e, n) {
                                    return t.isElementInViewport(n)
                                }),
                                n = this.getNavItemValues(this.getElementsMostInViewport(e))[0];
                            if (this.activeSection !== n) {
                                this.activeSection = this.getNavItemValues(this.getElementsMostInViewport(e))[0];
                                var i = d["default"].find(this.$navItems, d["default"].bind(function(e) {
                                    return (0, l["default"])(e).attr("nav-section") === t.activeSection
                                }, this));
                                this.percentComplete = (this.$navItems.index(i) + 1) / this.$navItems.length * 100 + "%", this.options.onUpdate()
                            }
                        }
                    }, {
                        key: "updateNavItems",
                        value: function() {
                            s(e.prototype.__proto__ || Object.getPrototypeOf(e.prototype), "updateNavItems", this).call(this), this.updateActiveSection()
                        }
                    }, {
                        key: "destroy",
                        value: function() {
                            s(e.prototype.__proto__ || Object.getPrototypeOf(e.prototype), "destroy", this).call(this), y["default"].remove(this.scrollId)
                        }
                    }]), e
                }(g["default"]);
            w.directive("navigationStickySidebar", ["$timeout", function(t) {
                function e(e, n, i) {
                    var o = {
                        $container: (0, l["default"])(document.documentElement),
                        navItemAttribute: "nav-section",
                        onUpdate: function() {
                            t(v["default"].noop)
                        }
                    };
                    e.theme = i.theme, e.navigationStickySidebar = new I(n, o), e.$watch(function() {
                        return e.navigationStickySidebar.getNavItemValues()
                    }, function() {
                        e.navigationStickySidebar.updateNavItems()
                    }, !0), e.$on("$destroy", function() {
                        e.navigationStickySidebar.destroy()
                    })
                }
                return {
                    restrict: "E",
                    scope: !0,
                    transclude: !0,
                    template: b["default"],
                    link: e
                }
            }])
        }).call(this, "undefined" != typeof global ? global : "undefined" != typeof self ? self : "undefined" != typeof window ? window : {})
    }, {
        "../../../utilities/scroll-manager/scripts/scroll-manager.es6": 4,
        "../../navigation/scripts/navigation.es6": 3,
        "../templates/navigation-sticky-sidebar.ng.html": 2
    }],
    2: [function(t, e, n) {
        e.exports = '<sticky can-stick-to-bottom container-selector=".page-grid">\n    <div class="NavigationStickySidebar-wrapper" ng-class="theme">\n        <div class="NavigationStickySidebar">\n            <div class="NavigationStickySidebar-progress">\n                <div class="NavigationStickySidebar-progress-bar"\n                    ng-style="{\n                        height: navigationStickySidebar.percentComplete\n                    }">\n                </div>\n            </div>\n            <div ng-repeat="navItem in navigationStickySidebar.navItemValues">\n                <a class="NavigationStickySidebar-link theme-secondary"\n                    href="#"\n                    ng-click="navigationStickySidebar.gotoSection(navItem, $event)"\n                    ng-class="{\n                        \'is-first\': $first,\n                        \'is-last\': $last\n                    }">\n                    <span class="NavigationStickySidebar-label B2-S"\n                        ng-bind="navItem"\n                        ng-class="{\n                            \'active\': navItem === navigationStickySidebar.activeSection,\n                            \'theme-secondary\': navItem !== navigationStickySidebar.activeSection\n                        }">\n                    </span>\n                </a>\n            </div>\n        </div>\n        <div ng-transclude></div>\n    </div>\n</sticky>\n'
    }, {}],
    3: [function(t, e, n) {
        (function(t) {
            "use strict";

            function e(t) {
                return t && t.__esModule ? t : {
                    "default": t
                }
            }

            function i(t, e) {
                if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
            }
            Object.defineProperty(n, "__esModule", {
                value: !0
            });
            var o = function() {
                    function t(t, e) {
                        for (var n = 0; n < e.length; n++) {
                            var i = e[n];
                            i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
                        }
                    }
                    return function(e, n, i) {
                        return n && t(e.prototype, n), i && t(e, i), e
                    }
                }(),
                r = "undefined" != typeof window ? window.$ : "undefined" != typeof t ? t.$ : null,
                a = e(r),
                s = "undefined" != typeof window ? window._ : "undefined" != typeof t ? t._ : null,
                u = e(s),
                l = function() {
                    function t(e) {
                        var n = this,
                            o = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
                        i(this, t);
                        var r = {
                            navOrderAttribute: "nav-order"
                        };
                        this.$el = e, this.options = u["default"].extend(r, o), setTimeout(function() {
                            n.isItitialized = !0
                        }, 0)
                    }
                    return o(t, [{
                        key: "getNavItems",
                        value: function() {
                            var t = this,
                                e = this.options.$container.find("[" + this.options.navItemAttribute + "]"),
                                n = u["default"].sortBy(e, function(e) {
                                    return parseInt(e.getAttribute(t.options.navOrderAttribute), 10) || Number.MAX_SAFE_INTEGER
                                });
                            return (0, a["default"])(n)
                        }
                    }, {
                        key: "getNavItemValues",
                        value: function() {
                            var t = this,
                                e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : this.$navItems;
                            return u["default"].map(e, function(e) {
                                return (0, a["default"])(e).attr(t.options.navItemAttribute)
                            })
                        }
                    }, {
                        key: "gotoSection",
                        value: function(t, e) {
                            var n = this.options.$container.find("[" + this.options.navItemAttribute + '="' + t + '"]');
                            e && e.preventDefault(), n.trigger("navigation:change_selection"), (0, a["default"])("html, body").animate({
                                scrollTop: n.offset().top
                            })
                        }
                    }, {
                        key: "updateNavItems",
                        value: function() {
                            this.$navItems = this.getNavItems(), this.navItemValues = this.getNavItemValues()
                        }
                    }, {
                        key: "destroy",
                        value: function() {}
                    }]), t
                }();
            n["default"] = l
        }).call(this, "undefined" != typeof global ? global : "undefined" != typeof self ? self : "undefined" != typeof window ? window : {})
    }, {}],
    4: [function(t, e, n) {
        (function(t) {
            "use strict";

            function e(t) {
                return t && t.__esModule ? t : {
                    "default": t
                }
            }

            function i(t, e) {
                if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
            }
            Object.defineProperty(n, "__esModule", {
                value: !0
            });
            var o = function() {
                    function t(t, e) {
                        for (var n = 0; n < e.length; n++) {
                            var i = e[n];
                            i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
                        }
                    }
                    return function(e, n, i) {
                        return n && t(e.prototype, n), i && t(e, i), e
                    }
                }(),
                r = "undefined" != typeof window ? window.$ : "undefined" != typeof t ? t.$ : null,
                a = e(r),
                s = "undefined" != typeof window ? window._ : "undefined" != typeof t ? t._ : null,
                u = e(s),
                l = function() {
                    function t() {
                        i(this, t), this.currentKey = 0, this.listeners = {}, this.requestAnimationFrameIds = {}, this.onScroll = u["default"].bind(this.handleScroll, this)
                    }
                    return o(t, [{
                        key: "generateUniqueId",
                        value: function() {
                            return this.currentKey += 1, this.currentKey
                        }
                    }, {
                        key: "getListenersByTarget",
                        value: function(t) {
                            return u["default"].filter(this.listeners, ["target", t])
                        }
                    }, {
                        key: "update",
                        value: function(t) {
                            var e = (0, a["default"])(t).scrollTop(),
                                n = (0, a["default"])(t).scrollLeft(),
                                i = this.getListenersByTarget(t);
                            u["default"].each(i, function(t) {
                                t.fn(e, n)
                            }), this.requestAnimationFrameIds[t.scrollAnimationId] = null
                        }
                    }, {
                        key: "handleScroll",
                        value: function(t) {
                            var e = t.target;
                            e.scrollAnimationId && !this.requestAnimationFrameIds[e.scrollAnimationId] && (this.requestAnimationFrameIds[e.scrollAnimationId] = requestAnimationFrame(u["default"].bind(this.update, this, e)))
                        }
                    }, {
                        key: "registerTarget",
                        value: function(t) {
                            (0, a["default"])(t).on("scroll.ScrollManager", this.onScroll), t.scrollAnimationId = this.generateUniqueId(), this.requestAnimationFrameIds[t.scrollAnimationId] = null
                        }
                    }, {
                        key: "unregisterTarget",
                        value: function(t) {
                            (0, a["default"])(t).off("scroll.ScrollManager", this.onScroll), cancelAnimationFrame(this.requestAnimationFrameIds[t.scrollAnimationId]), delete this.requestAnimationFrameIds[t.scrollAnimationId], delete t.scrollAnimationId
                        }
                    }, {
                        key: "add",
                        value: function(t, e) {
                            u["default"].isFunction(t) && (e = t, t = document), u["default"].has(this.requestAnimationFrameIds, t.scrollAnimationId) || this.registerTarget(t);
                            var n = this.generateUniqueId();
                            return this.listeners[n] = {
                                target: t,
                                fn: e
                            }, n
                        }
                    }, {
                        key: "remove",
                        value: function(t) {
                            if (this.listeners[t]) {
                                var e = this.getListenersByTarget(this.listeners[t].target);
                                1 === e.length && this.unregisterTarget(this.listeners[t].target), delete this.listeners[t]
                            }
                        }
                    }]), t
                }();
            n["default"] = new l
        }).call(this, "undefined" != typeof global ? global : "undefined" != typeof self ? self : "undefined" != typeof window ? window : {})
    }, {}]
}, {}, [1]);