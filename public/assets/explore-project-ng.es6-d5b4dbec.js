!function e(n,t,r){function o(u,c){if(!t[u]){if(!n[u]){var l="function"==typeof require&&require;if(!c&&l)return l(u,!0);if(i)return i(u,!0);var s=new Error("Cannot find module '"+u+"'");throw s.code="MODULE_NOT_FOUND",s}var a=t[u]={exports:{}};n[u][0].call(a.exports,function(e){var t=n[u][1][e];return o(t?t:e)},a,a.exports,e,n,t,r)}return t[u].exports}for(var i="function"==typeof require&&require,u=0;u<r.length;u++)o(r[u]);return o}({1:[function(e,n,t){(function(n){"use strict";function t(e){return e&&e.__esModule?e:{"default":e}}var r="undefined"!=typeof window?window.angular:"undefined"!=typeof n?n.angular:null,o=t(r),i=e("../templates/explore-project.ng.html"),u=t(i),c=e("./request-storage-cookie.es6"),l=t(c);e("./project-link-ng.es6");var s=o["default"].module("auraComponents");s.directive("exploreProject",[function(){var e=function(e){if(e.currentRequest=l["default"].getRequest(),void 0!==e.currentRequest){var n=e.currentRequest.requestName,t=e.currentRequest.requestId;e.requestName="Your "+n+" request",e.requestUrl="/request/"+t}};return{restrict:"E",transclude:!0,template:u["default"],scope:{correspondingElement:"@"},link:e}}])}).call(this,"undefined"!=typeof global?global:"undefined"!=typeof self?self:"undefined"!=typeof window?window:{})},{"../templates/explore-project.ng.html":4,"./project-link-ng.es6":2,"./request-storage-cookie.es6":3}],2:[function(e,n,t){(function(n){"use strict";function t(e){return e&&e.__esModule?e:{"default":e}}var r="undefined"!=typeof window?window.angular:"undefined"!=typeof n?n.angular:null,o=t(r),i=e("../templates/project-link.ng.html"),u=t(i),c=o["default"].module("auraComponents");c.directive("projectLink",[function(){return{restrict:"E",transclude:!0,template:u["default"],scope:{requestUrl:"@",requestName:"@"}}}])}).call(this,"undefined"!=typeof global?global:"undefined"!=typeof self?self:"undefined"!=typeof window?window:{})},{"../templates/project-link.ng.html":5}],3:[function(e,n,t){"use strict";function r(e){if(e&&e.__esModule)return e;var n={};if(null!=e)for(var t in e)Object.prototype.hasOwnProperty.call(e,t)&&(n[t]=e[t]);return n["default"]=e,n}function o(e,n){if(!(e instanceof n))throw new TypeError("Cannot call a class as a function")}Object.defineProperty(t,"__esModule",{value:!0});var i=function(){function e(e,n){for(var t=0;t<n.length;t++){var r=n[t];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}return function(n,t,r){return t&&e(n.prototype,t),r&&e(n,r),n}}(),u=e("js-cookie"),c=r(u),l="endOnExploreRequest",s=function(){function e(){o(this,e)}return i(e,null,[{key:"setRequest",value:function(e){c.set(l,e,{expire:1})}},{key:"getRequest",value:function(){return c.getJSON(l)}}]),e}();t["default"]=s},{"js-cookie":6}],4:[function(e,n,t){n.exports='<div ng-if="currentRequest !== undefined">\n    <project-link\n        request-name="{[{ requestName }]}"\n        request-url="{[{ requestUrl }]}">\n    </project-link>\n\n    <div class="explore-project"\n        for-viewport-element="{[{ correspondingElement }]}"\n        viewport-element-offscreen-class="is-visible"\n        throttle-delay="100">\n\n        <project-link\n            request-name="{[{ requestName }]}"\n            request-url="{[{ requestUrl }]}">\n        </project-link>\n    </div>\n</div>\n'},{}],5:[function(e,n,t){n.exports='<div class="project-link">\n    <div class="page-grid">\n        <div class="column-lg-6">\n            <a event-track="post request/project link click"\n                event-track-on="click"\n                ng-href="{[{ requestUrl }]}">\n                <div class="project-link__container">\n                    <div class="tp-heading-6 project-link__title">\n                        {[{ requestName }]}\n                    </div>\n                    <div class="tp-heading-6 project-link__link">\n                        View\n                    </div>\n                    <div class="project-link__caret">\n                        <svg-icon type="right-caret2" size="md"></svg-icon>\n                    </div>\n                </div>\n            </a>\n        </div>\n    </div>\n</div>\n'},{}],6:[function(e,n,t){!function(e){var r=!1;if("function"==typeof define&&define.amd&&(define(e),r=!0),"object"==typeof t&&(n.exports=e(),r=!0),!r){var o=window.Cookies,i=window.Cookies=e();i.noConflict=function(){return window.Cookies=o,i}}}(function(){function e(){for(var e=0,n={};e<arguments.length;e++){var t=arguments[e];for(var r in t)n[r]=t[r]}return n}function n(t){function r(n,o,i){var u;if("undefined"!=typeof document){if(arguments.length>1){if(i=e({path:"/"},r.defaults,i),"number"==typeof i.expires){var c=new Date;c.setMilliseconds(c.getMilliseconds()+864e5*i.expires),i.expires=c}i.expires=i.expires?i.expires.toUTCString():"";try{u=JSON.stringify(o),/^[\{\[]/.test(u)&&(o=u)}catch(l){}o=t.write?t.write(o,n):encodeURIComponent(String(o)).replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g,decodeURIComponent),n=encodeURIComponent(String(n)),n=n.replace(/%(23|24|26|2B|5E|60|7C)/g,decodeURIComponent),n=n.replace(/[\(\)]/g,escape);var s="";for(var a in i)i[a]&&(s+="; "+a,i[a]!==!0&&(s+="="+i[a]));return document.cookie=n+"="+o+s}n||(u={});for(var f=document.cookie?document.cookie.split("; "):[],d=/(%[0-9A-Z]{2})+/g,p=0;p<f.length;p++){var v=f[p].split("="),g=v.slice(1).join("=");'"'===g.charAt(0)&&(g=g.slice(1,-1));try{var m=v[0].replace(d,decodeURIComponent);if(g=t.read?t.read(g,m):t(g,m)||g.replace(d,decodeURIComponent),this.json)try{g=JSON.parse(g)}catch(l){}if(n===m){u=g;break}n||(u[m]=g)}catch(l){}}return u}}return r.set=r,r.get=function(e){return r.call(r,e)},r.getJSON=function(){return r.apply({json:!0},[].slice.call(arguments))},r.defaults={},r.remove=function(n,t){r(n,"",e(t,{expires:-1}))},r.withConverter=n,r}return n(function(){})})},{}]},{},[1]);