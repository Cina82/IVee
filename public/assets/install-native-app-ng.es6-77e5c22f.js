!function e(n,i,o){function r(a,l){if(!i[a]){if(!n[a]){var d="function"==typeof require&&require;if(!l&&d)return d(a,!0);if(t)return t(a,!0);var s=new Error("Cannot find module '"+a+"'");throw s.code="MODULE_NOT_FOUND",s}var p=i[a]={exports:{}};n[a][0].call(p.exports,function(e){var i=n[a][1][e];return r(i?i:e)},p,p.exports,e,n,i,o)}return i[a].exports}for(var t="function"==typeof require&&require,a=0;a<o.length;a++)r(o[a]);return r}({1:[function(e,n,i){(function(n){"use strict";function i(e){if(e&&e.__esModule)return e;var n={};if(null!=e)for(var i in e)Object.prototype.hasOwnProperty.call(e,i)&&(n[i]=e[i]);return n["default"]=e,n}function o(e){return e&&e.__esModule?e:{"default":e}}var r="undefined"!=typeof window?window.angular:"undefined"!=typeof n?n.angular:null,t=o(r),a="undefined"!=typeof window?window._:"undefined"!=typeof n?n._:null,l=o(a),d=e("js-cookie"),s=i(d),p=e("../templates/install-native-app-header.ng.html"),c=o(p),v=e("../templates/install-native-app-below-header1.ng.html"),u=o(v),f=e("../templates/install-native-app-below-header2.ng.html"),h=o(f),g=t["default"].module("auraComponents"),w={linkUrls:{pro:{androidLinkUrl:"http://r.yoz.io/Z3.c.M",iphoneLinkUrl:"http://r.yoz.io/Z3.c.L"},customer:{androidLinkUrl:"http://r.yoz.io/Z3.c.G",iphoneLinkUrl:"http://r.yoz.io/Z3.c.F"}}},m="hideAppCrossSell";g.directive("installNativeApp",[function(){return{link:function(e){var n=navigator.userAgent||navigator.vendor||window.opera;/iPhone/i.test(n)?e.device="iphone":/Android/i.test(n)?e.device="android":e.device="unknown",l["default"].includes(l["default"].keys(w.linkUrls),e.userType)&&l["default"].assign(e,w.linkUrls[e.userType]),e.androidLinkUrl&&(e.androidLinkUrl+="?utm_source="+e.utmSource),e.iphoneLinkUrl&&(e.iphoneLinkUrl+="?utm_source="+e.utmSource),e.isVisible=!s.get(m),e.onClose=function(){e.isVisible=!1,s.set(m,"true",{expires:14})}},replace:!0,template:function(e,n){return"below_header1"===n.flavor?u["default"]:"below_header2"===n.flavor?h["default"]:c["default"]},restrict:"E",scope:{flavor:"@",userType:"@",androidIconUrl:"@",iphoneIconUrl:"@",utmSource:"@"}}}])}).call(this,"undefined"!=typeof global?global:"undefined"!=typeof self?self:"undefined"!=typeof window?window:{})},{"../templates/install-native-app-below-header1.ng.html":2,"../templates/install-native-app-below-header2.ng.html":3,"../templates/install-native-app-header.ng.html":4,"js-cookie":5}],2:[function(e,n,i){n.exports='<div class="BelowHeader1Container" data-is-visible="{[{ isVisible }]}">\n    <div class="page-grid">\n        <div class="column-lg-6">\n            <div class="InstallNativeAppBelowHeader1Desktop">\n                <div class="InstallNativeAppBelowHeader1Desktop-title T2-S">\n                    Get more done on the go\n                </div>\n                <div class="InstallNativeAppBelowHeader1Desktop-iconWrapper">\n                    <a ng-hide="device===\'android\'" href="{[{ iphoneLinkUrl }]}">\n                        <img ng-src="{[{ iphoneIconUrl }]}">\n                    </a>\n                    <a ng-hide="device===\'iphone\'" href="{[{ androidLinkUrl }]}">\n                        <img ng-src="{[{ androidIconUrl }]}">\n                    </a>\n                </div>\n                <div class="InstallNativeAppBelowHeader1Desktop-closeButtonWrapper" ng-click="onClose()">\n                    <svg-icon type="close2" size="md"></svg-icon>\n                </div>\n            </div>\n\n            <div class="InstallNativeAppBelowHeader1Mobile">\n                <div class="InstallNativeAppBelowHeader1Mobile-title T1-R">Get more done on the go</div>\n                <div class="InstallNativeAppBelowHeader1Mobile-iconWrapper">\n                    <a\n                        ng-hide="device===\'android\'"\n                        href="{[{ iphoneLinkUrl }]}"\n                        class="InstallNativeAppBelowHeader1Mobile-iconWrapper-icon">\n\n                        <img ng-src="{[{ iphoneIconUrl }]}">\n                    </a>\n                    <a\n                        ng-hide="device===\'iphone\'"\n                        href="{[{ androidLinkUrl }]}"\n                        class="InstallNativeAppBelowHeader1Mobile-iconWrapper-icon">\n\n                        <img ng-src="{[{ androidIconUrl }]}">\n                    </a>\n                </div>\n                <div class="InstallNativeAppBelowHeader1Mobile-closeButtonWrapper" ng-click="onClose()">\n                    <svg-icon type="close2" size="md"></svg-icon>\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n'},{}],3:[function(e,n,i){n.exports='<div class="BelowHeader2Container" data-is-visible="{[{ isVisible }]}">\n    <div class="page-grid">\n        <div class="column-lg-6">\n            <div class="InstallNativeAppBelowHeader2Desktop">\n                <div class="InstallNativeAppBelowHeader2Desktop-title H4-R">\n                    Get more done on the go\n                </div>\n                <div class="InstallNativeAppBelowHeader2Desktop-iconWrapper">\n                    <a ng-hide="device===\'android\'" href="{[{ iphoneLinkUrl }]}">\n                        <img ng-src="{[{ iphoneIconUrl }]}">\n                    </a>\n                    <a ng-hide="device===\'iphone\'" href="{[{ androidLinkUrl }]}">\n                        <img ng-src="{[{ androidIconUrl }]}">\n                    </a>\n                </div>\n            </div>\n            <div class="InstallNativeAppBelowHeader2Mobile">\n                <div class="InstallNativeAppBelowHeader2Mobile-titleWrapper">\n                    <span class="InstallNativeAppBelowHeader2Mobile-titleWrapper-text T1-R">\n                        Get more done on the go\n                    </span>\n                </div>\n                <div class="InstallNativeAppBelowHeader2Mobile-iconWrapper">\n                    <a\n                        ng-hide="device===\'android\'"\n                        href="{[{ iphoneLinkUrl }]}"\n                        class="InstallNativeAppBelowHeader1Mobile-iconWrapper-icon">\n\n                        <img ng-src="{[{ iphoneIconUrl }]}">\n                    </a>\n                    <a\n                        ng-hide="device===\'iphone\'"\n                        href="{[{ androidLinkUrl }]}"\n                        class="InstallNativeAppBelowHeader1Mobile-iconWrapper-icon">\n\n                        <img ng-src="{[{ androidIconUrl }]}">\n                    </a>\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n'},{}],4:[function(e,n,i){n.exports='<div\n    class="InstallNativeAppHeader"\n    data-is-visible="{[{ isVisible }]}"\n    ng-hide="device===\'unknown\'"\n>\n    <h4 class="InstallNativeAppHeader-title H4-R">Get the app</h4>\n    <div class="InstallNativeAppHeader-closeButtonWrapper" ng-click="onClose()">\n        <svg-icon type="close2" size="md"></svg-icon>\n    </div>\n    <div class="InstallNativeAppHeader-iconWrapper">\n        <a ng-hide="device===\'android\'" href="{[{ iphoneLinkUrl }]} ">\n            <img ng-src="{[{ iphoneIconUrl }]}">\n        </a>\n        <a ng-hide="device===\'iphone\'" href="{[{ androidLinkUrl }]}">\n            <img ng-src="{[{ androidIconUrl }]}">\n        </a>\n    </div>\n</div>\n'},{}],5:[function(e,n,i){!function(e){var o=!1;if("function"==typeof define&&define.amd&&(define(e),o=!0),"object"==typeof i&&(n.exports=e(),o=!0),!o){var r=window.Cookies,t=window.Cookies=e();t.noConflict=function(){return window.Cookies=r,t}}}(function(){function e(){for(var e=0,n={};e<arguments.length;e++){var i=arguments[e];for(var o in i)n[o]=i[o]}return n}function n(i){function o(n,r,t){var a;if("undefined"!=typeof document){if(arguments.length>1){if(t=e({path:"/"},o.defaults,t),"number"==typeof t.expires){var l=new Date;l.setMilliseconds(l.getMilliseconds()+864e5*t.expires),t.expires=l}t.expires=t.expires?t.expires.toUTCString():"";try{a=JSON.stringify(r),/^[\{\[]/.test(a)&&(r=a)}catch(d){}r=i.write?i.write(r,n):encodeURIComponent(String(r)).replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g,decodeURIComponent),n=encodeURIComponent(String(n)),n=n.replace(/%(23|24|26|2B|5E|60|7C)/g,decodeURIComponent),n=n.replace(/[\(\)]/g,escape);var s="";for(var p in t)t[p]&&(s+="; "+p,t[p]!==!0&&(s+="="+t[p]));return document.cookie=n+"="+r+s}n||(a={});for(var c=document.cookie?document.cookie.split("; "):[],v=/(%[0-9A-Z]{2})+/g,u=0;u<c.length;u++){var f=c[u].split("="),h=f.slice(1).join("=");'"'===h.charAt(0)&&(h=h.slice(1,-1));try{var g=f[0].replace(v,decodeURIComponent);if(h=i.read?i.read(h,g):i(h,g)||h.replace(v,decodeURIComponent),this.json)try{h=JSON.parse(h)}catch(d){}if(n===g){a=h;break}n||(a[g]=h)}catch(d){}}return a}}return o.set=o,o.get=function(e){return o.call(o,e)},o.getJSON=function(){return o.apply({json:!0},[].slice.call(arguments))},o.defaults={},o.remove=function(n,i){o(n,"",e(i,{expires:-1}))},o.withConverter=n,o}return n(function(){})})},{}]},{},[1]);