!function(){"use strict";var t={n:function(e){var i=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(i,{a:i}),i},d:function(e,i){for(var n in i)t.o(i,n)&&!t.o(e,n)&&Object.defineProperty(e,n,{enumerable:!0,get:i[n]})},o:function(t,e){return Object.prototype.hasOwnProperty.call(t,e)}},e=window.jQuery;t.n(e)()((function(t){t(".wp-block-getwooplugins-attribute-filter ul.filter-items").each((function(e){const i=t(this).data("attribute"),n=t(this).data("query_type"),r=t(this).data("select_type"),a=[];t(this).find(">li.filter-item").each((function(){if(t(this).hasClass("selected")){const e=t(this).data("term");a.push(e)}t(this).on("click",(function(e){const o=t(this).data("term"),s=function(t,e,i,n="or",r="single"){const a=new URL(window.location.href),o=attribute_filter_block_data.filter+t,s=attribute_filter_block_data.query_type+t;let l="multiple"===r?[...i,e]:[e];if((a.searchParams.get(o)||"").split(",").includes(e)&&(l=l.filter((t=>!(t===e))),0===l.length))return a.searchParams.delete(o),a.searchParams.delete(s),a.href;const c=l.join(",");return a.searchParams.set(o,decodeURIComponent(c)),a.searchParams.set(s,decodeURIComponent(n)),a.href}(i,o,a,n,r);s&&window.location.assign(s)}))})),t(this).find(".filter-item-more a")?.on("click",(function(e){e.preventDefault(),t(this).closest(".filter-items").toggleClass("enabled-filter-display-limit-mode")}))}))}))}();