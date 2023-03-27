/*! For license information please see app.js.LICENSE.txt */
(()=>{var e,t={"./js/app.js":()=>{function e(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,r=new Array(t);n<t;n++)r[n]=e[n];return r}window.addEventListener("DOMContentLoaded",(function(t){var n,o,a=document.getElementById("play-button");if(a){var l=document.getElementById("showImg"),i=document.createElement("iframe");i.setAttribute("src","https://www.youtube.com/embed/jMe3tdyjouM?autoplay=1"),i.setAttribute("width","900"),i.setAttribute("height","700"),i.setAttribute("frameborder","0"),i.setAttribute("allowfullscreen",""),a.addEventListener("click",(function(){l.style.display="none",this.parentNode.replaceChild(i,this)}))}document.querySelectorAll("table").forEach((function(e){var t;null==e||null===(t=e.querySelector(".table-dark"))||void 0===t||t.classList.remove("table-dark")})),r(document.querySelector("#content_litebans h2")),null===(n=document.getElementById("content_shop"))||void 0===n||null===(o=n.querySelectorAll(".payment-method"))||void 0===o||o.forEach((function(t){console.log(t),function(t){var n,r,o=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"";t&&t.classList&&(null==t||null===(n=t.classList)||void 0===n||n.add.apply(n,(r=o,function(t){if(Array.isArray(t))return e(t)}(r)||function(e){if("undefined"!=typeof Symbol&&null!=e[Symbol.iterator]||null!=e["@@iterator"])return Array.from(e)}(r)||function(t,n){if(t){if("string"==typeof t)return e(t,n);var r=Object.prototype.toString.call(t).slice(8,-1);return"Object"===r&&t.constructor&&(r=t.constructor.name),"Map"===r||"Set"===r?Array.from(t):"Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)?e(t,n):void 0}}(r)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()).concat(["borderType"])))}(t,["card","cursorAnim"])}))})),AOS.init();var t=document.querySelector(".navIndex"),n=document.querySelector(".home-background")?400:200;function r(e){null==e||e.classList.add("text-center","line-1","anim-typewriter")}window.addEventListener("scroll",(function(){window.scrollY<n?t.classList.remove("navActive"):t.classList.add("navActive")})),window.addEventListener("DOMContentLoaded",(function(e){particlesJS("particles-js",{particles:{number:{value:160,density:{enable:!0,value_area:800}},color:{value:"#ffffff"},shape:{type:"circle",stroke:{width:0,color:"#000000"},polygon:{nb_sides:5},image:{src:!1,width:100,height:100}},opacity:{value:1,random:!0,anim:{enable:!0,speed:1,opacity_min:0,sync:!1}},size:{value:3,random:!0,anim:{enable:!1,speed:4,size_min:.3,sync:!1}},line_linked:{enable:!1,distance:150,color:"#ffffff",opacity:.4,width:1},move:{enable:!0,speed:1,direction:"none",random:!0,straight:!1,out_mode:"out",bounce:!1,attract:{enable:!1,rotateX:600,rotateY:600}}},interactivity:{detect_on:"canvas",events:{onhover:{enable:!0,mode:"bubble"},onclick:{enable:!0,mode:"repulse"},resize:!0},modes:{grab:{distance:400,line_linked:{opacity:1}},bubble:{distance:250,size:0,duration:2,opacity:0,speed:3},repulse:{distance:400,duration:.4},push:{particles_nb:4},remove:{particles_nb:2}}},retina_detect:!0})})),document.querySelectorAll("h1").forEach((function(e){e&&r(e)}));for(var o=document.querySelectorAll("a"),a=0;a<o.length;a++)"btn btn-primary"==o[a].classList&&o[a].classList.add("btnJoin")},"./sass/styles.scss":(e,t,n)=>{"use strict";n.r(t)}},n={};function r(e){var o=n[e];if(void 0!==o)return o.exports;var a=n[e]={exports:{}};return t[e](a,a.exports,r),a.exports}r.m=t,e=[],r.O=(t,n,o,a)=>{if(!n){var l=1/0;for(d=0;d<e.length;d++){for(var[n,o,a]=e[d],i=!0,s=0;s<n.length;s++)(!1&a||l>=a)&&Object.keys(r.O).every((e=>r.O[e](n[s])))?n.splice(s--,1):(i=!1,a<l&&(l=a));if(i){e.splice(d--,1);var c=o();void 0!==c&&(t=c)}}return t}a=a||0;for(var d=e.length;d>0&&e[d-1][2]>a;d--)e[d]=e[d-1];e[d]=[n,o,a]},r.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),r.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},(()=>{var e={"/js/app":0,"css/styles":0};r.O.j=t=>0===e[t];var t=(t,n)=>{var o,a,[l,i,s]=n,c=0;if(l.some((t=>0!==e[t]))){for(o in i)r.o(i,o)&&(r.m[o]=i[o]);if(s)var d=s(r)}for(t&&t(n);c<l.length;c++)a=l[c],r.o(e,a)&&e[a]&&e[a][0](),e[a]=0;return r.O(d)},n=self.webpackChunktheme_template=self.webpackChunktheme_template||[];n.forEach(t.bind(null,0)),n.push=t.bind(null,n.push.bind(n))})(),r.O(void 0,["css/styles"],(()=>r("./js/app.js")));var o=r.O(void 0,["css/styles"],(()=>r("./sass/styles.scss")));o=r.O(o)})();
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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LEdBQWdDLElBQXhCUixFQUFnQlEsS0FBYSxDQUN0RCxJQUFJdkMsS0FBWW9DLEVBQ1pyQyxFQUFvQnNCLEVBQUVlLEVBQWFwQyxLQUNyQ0QsRUFBb0JNLEVBQUVMLEdBQVlvQyxFQUFZcEMsSUFHaEQsR0FBR3FDLEVBQVMsSUFBSTlCLEVBQVM4QixFQUFRdEMsRUFDbEMsQ0FFQSxJQURHbUMsR0FBNEJBLEVBQTJCQyxHQUNyRHRDLEVBQUlXLEVBQVN4QixPQUFRYSxJQUN6Qm1DLEVBQVV4QixFQUFTWCxHQUNoQkUsRUFBb0JzQixFQUFFVSxFQUFpQkMsSUFBWUQsRUFBZ0JDLElBQ3JFRCxFQUFnQkMsR0FBUyxLQUUxQkQsRUFBZ0JDLEdBQVcsRUFFNUIsT0FBT2pDLEVBQW9CTyxFQUFFQyxFQUFPLEVBR2pDaUMsRUFBcUJDLEtBQWlDLDJCQUFJQSxLQUFpQyw0QkFBSyxHQUNwR0QsRUFBbUJwRSxRQUFRNkQsRUFBcUJTLEtBQUssS0FBTSxJQUMzREYsRUFBbUJHLEtBQU9WLEVBQXFCUyxLQUFLLEtBQU1GLEVBQW1CRyxLQUFLRCxLQUFLRixRQzlDdkZ6QyxFQUFvQk8sT0FBRXJCLEVBQVcsQ0FBQyxlQUFlLElBQU9jLEVBQW9CLGlCQUM1RSxJQUFJNkMsRUFBc0I3QyxFQUFvQk8sT0FBRXJCLEVBQVcsQ0FBQyxlQUFlLElBQU9jLEVBQW9CLHdCQUN0RzZDLEVBQXNCN0MsRUFBb0JPLEVBQUVzQyIsInNvdXJjZXMiOlsid2VicGFjazovL3RoZW1lLXRlbXBsYXRlL3dlYnBhY2svcnVudGltZS9jaHVuayBsb2FkZWQiLCJ3ZWJwYWNrOi8vdGhlbWUtdGVtcGxhdGUvLi9qcy9hcHAuanMiLCJ3ZWJwYWNrOi8vdGhlbWUtdGVtcGxhdGUvd2VicGFjay9ib290c3RyYXAiLCJ3ZWJwYWNrOi8vdGhlbWUtdGVtcGxhdGUvd2VicGFjay9ydW50aW1lL2hhc093blByb3BlcnR5IHNob3J0aGFuZCIsIndlYnBhY2s6Ly90aGVtZS10ZW1wbGF0ZS93ZWJwYWNrL3J1bnRpbWUvbWFrZSBuYW1lc3BhY2Ugb2JqZWN0Iiwid2VicGFjazovL3RoZW1lLXRlbXBsYXRlL3dlYnBhY2svcnVudGltZS9qc29ucCBjaHVuayBsb2FkaW5nIiwid2VicGFjazovL3RoZW1lLXRlbXBsYXRlL3dlYnBhY2svc3RhcnR1cCJdLCJzb3VyY2VzQ29udGVudCI6WyJ2YXIgZGVmZXJyZWQgPSBbXTtcbl9fd2VicGFja19yZXF1aXJlX18uTyA9IChyZXN1bHQsIGNodW5rSWRzLCBmbiwgcHJpb3JpdHkpID0+IHtcblx0aWYoY2h1bmtJZHMpIHtcblx0XHRwcmlvcml0eSA9IHByaW9yaXR5IHx8IDA7XG5cdFx0Zm9yKHZhciBpID0gZGVmZXJyZWQubGVuZ3RoOyBpID4gMCAmJiBkZWZlcnJlZFtpIC0gMV1bMl0gPiBwcmlvcml0eTsgaS0tKSBkZWZlcnJlZFtpXSA9IGRlZmVycmVkW2kgLSAxXTtcblx0XHRkZWZlcnJlZFtpXSA9IFtjaHVua0lkcywgZm4sIHByaW9yaXR5XTtcblx0XHRyZXR1cm47XG5cdH1cblx0dmFyIG5vdEZ1bGZpbGxlZCA9IEluZmluaXR5O1xuXHRmb3IgKHZhciBpID0gMDsgaSA8IGRlZmVycmVkLmxlbmd0aDsgaSsrKSB7XG5cdFx0dmFyIFtjaHVua0lkcywgZm4sIHByaW9yaXR5XSA9IGRlZmVycmVkW2ldO1xuXHRcdHZhciBmdWxmaWxsZWQgPSB0cnVlO1xuXHRcdGZvciAodmFyIGogPSAwOyBqIDwgY2h1bmtJZHMubGVuZ3RoOyBqKyspIHtcblx0XHRcdGlmICgocHJpb3JpdHkgJiAxID09PSAwIHx8IG5vdEZ1bGZpbGxlZCA+PSBwcmlvcml0eSkgJiYgT2JqZWN0LmtleXMoX193ZWJwYWNrX3JlcXVpcmVfXy5PKS5ldmVyeSgoa2V5KSA9PiAoX193ZWJwYWNrX3JlcXVpcmVfXy5PW2tleV0oY2h1bmtJZHNbal0pKSkpIHtcblx0XHRcdFx0Y2h1bmtJZHMuc3BsaWNlKGotLSwgMSk7XG5cdFx0XHR9IGVsc2Uge1xuXHRcdFx0XHRmdWxmaWxsZWQgPSBmYWxzZTtcblx0XHRcdFx0aWYocHJpb3JpdHkgPCBub3RGdWxmaWxsZWQpIG5vdEZ1bGZpbGxlZCA9IHByaW9yaXR5O1xuXHRcdFx0fVxuXHRcdH1cblx0XHRpZihmdWxmaWxsZWQpIHtcblx0XHRcdGRlZmVycmVkLnNwbGljZShpLS0sIDEpXG5cdFx0XHR2YXIgciA9IGZuKCk7XG5cdFx0XHRpZiAociAhPT0gdW5kZWZpbmVkKSByZXN1bHQgPSByO1xuXHRcdH1cblx0fVxuXHRyZXR1cm4gcmVzdWx0O1xufTsiLCJ3aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcihcIkRPTUNvbnRlbnRMb2FkZWRcIiwgKGV2ZW50KSA9PiB7XG5cblxuICAgIGxldCBwbGF5QnV0dG9uID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJwbGF5LWJ1dHRvblwiKTtcblxuICAgIGlmIChwbGF5QnV0dG9uKXtcbiAgICAgICAgbGV0IHNob3dJbWcgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcInNob3dJbWdcIik7XG5cbiAgICAgICAgbGV0IGlmcmFtZSA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoXCJpZnJhbWVcIik7XG4gICAgICAgIGlmcmFtZS5zZXRBdHRyaWJ1dGUoXCJzcmNcIiwgXCJodHRwczovL3d3dy55b3V0dWJlLmNvbS9lbWJlZC9qTWUzdGR5am91TT9hdXRvcGxheT0xXCIpO1xuICAgICAgICBpZnJhbWUuc2V0QXR0cmlidXRlKFwid2lkdGhcIiwgXCI5MDBcIik7XG4gICAgICAgIGlmcmFtZS5zZXRBdHRyaWJ1dGUoXCJoZWlnaHRcIiwgXCI3MDBcIik7XG4gICAgICAgIGlmcmFtZS5zZXRBdHRyaWJ1dGUoXCJmcmFtZWJvcmRlclwiLCBcIjBcIik7XG4gICAgICAgIGlmcmFtZS5zZXRBdHRyaWJ1dGUoXCJhbGxvd2Z1bGxzY3JlZW5cIiwgXCJcIik7XG5cbiAgICAgICAgcGxheUJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgc2hvd0ltZy5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnO1xuICAgICAgICAgICAgdGhpcy5wYXJlbnROb2RlLnJlcGxhY2VDaGlsZChpZnJhbWUsIHRoaXMpO1xuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCd0YWJsZScpLmZvckVhY2goZnVuY3Rpb24gKGV2ZW50KXtcbiAgICAgICAgZXZlbnQ/LnF1ZXJ5U2VsZWN0b3IoXCIudGFibGUtZGFya1wiKT8uY2xhc3NMaXN0LnJlbW92ZSgndGFibGUtZGFyaycpXG4gICAgfSlcblxuXG4gICAgYWRkQW5pbShkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiI2NvbnRlbnRfbGl0ZWJhbnMgaDJcIikpXG5cbiAgICBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcImNvbnRlbnRfc2hvcFwiKT8ucXVlcnlTZWxlY3RvckFsbChcIi5wYXltZW50LW1ldGhvZFwiKT8uZm9yRWFjaCggKGV2ZW50KSA9PiB7XG4gICAgICAgIGNvbnNvbGUubG9nKGV2ZW50KVxuICAgICAgICBhZGRCb3goZXZlbnQsIFtcbiAgICAgICAgICAgIFwiY2FyZFwiLFxuICAgICAgICAgICAgXCJjdXJzb3JBbmltXCJcbiAgICAgICAgXSlcbiAgICB9KVxuXG59KTtcblxuQU9TLmluaXQoKTtcblxuY29uc3QgbmF2YmFyID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5uYXZJbmRleFwiKTtcblxuY29uc3QgbWF4U2Nyb2xsID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5ob21lLWJhY2tncm91bmRcIik/IDQwMCA6IDIwMCA7XG5cblxud2luZG93LmFkZEV2ZW50TGlzdGVuZXIoJ3Njcm9sbCcsICgpID0+IHtcbiAgICBjb25zdCBwb3NTY3JvbGwgPSB3aW5kb3cuc2Nyb2xsWTtcblxuICAgIGlmIChwb3NTY3JvbGwgPCBtYXhTY3JvbGwpIHtcbiAgICAgICAgbmF2YmFyLmNsYXNzTGlzdC5yZW1vdmUoXCJuYXZBY3RpdmVcIik7XG4gICAgfSBlbHNlIHtcbiAgICAgICAgbmF2YmFyLmNsYXNzTGlzdC5hZGQoXCJuYXZBY3RpdmVcIik7XG4gICAgfVxuXG59KTtcblxud2luZG93LmFkZEV2ZW50TGlzdGVuZXIoXCJET01Db250ZW50TG9hZGVkXCIsIChldmVudCkgPT4ge1xuICAgIHBhcnRpY2xlc0pTKFwicGFydGljbGVzLWpzXCIsIHtcbiAgICAgICAgXCJwYXJ0aWNsZXNcIjoge1xuICAgICAgICAgICAgXCJudW1iZXJcIjoge1widmFsdWVcIjogMTYwLCBcImRlbnNpdHlcIjoge1wiZW5hYmxlXCI6IHRydWUsIFwidmFsdWVfYXJlYVwiOiA4MDB9fSxcbiAgICAgICAgICAgIFwiY29sb3JcIjoge1widmFsdWVcIjogXCIjZmZmZmZmXCJ9LFxuICAgICAgICAgICAgXCJzaGFwZVwiOiB7XG4gICAgICAgICAgICAgICAgXCJ0eXBlXCI6IFwiY2lyY2xlXCIsXG4gICAgICAgICAgICAgICAgXCJzdHJva2VcIjoge1wid2lkdGhcIjogMCwgXCJjb2xvclwiOiBcIiMwMDAwMDBcIn0sXG4gICAgICAgICAgICAgICAgXCJwb2x5Z29uXCI6IHtcIm5iX3NpZGVzXCI6IDV9LFxuICAgICAgICAgICAgICAgIFwiaW1hZ2VcIjoge1wic3JjXCI6IGZhbHNlLCBcIndpZHRoXCI6IDEwMCwgXCJoZWlnaHRcIjogMTAwfVxuICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIFwib3BhY2l0eVwiOiB7XG4gICAgICAgICAgICAgICAgXCJ2YWx1ZVwiOiAxLFxuICAgICAgICAgICAgICAgIFwicmFuZG9tXCI6IHRydWUsXG4gICAgICAgICAgICAgICAgXCJhbmltXCI6IHtcImVuYWJsZVwiOiB0cnVlLCBcInNwZWVkXCI6IDEsIFwib3BhY2l0eV9taW5cIjogMCwgXCJzeW5jXCI6IGZhbHNlfVxuICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIFwic2l6ZVwiOiB7XCJ2YWx1ZVwiOiAzLCBcInJhbmRvbVwiOiB0cnVlLCBcImFuaW1cIjoge1wiZW5hYmxlXCI6IGZhbHNlLCBcInNwZWVkXCI6IDQsIFwic2l6ZV9taW5cIjogMC4zLCBcInN5bmNcIjogZmFsc2V9fSxcbiAgICAgICAgICAgIFwibGluZV9saW5rZWRcIjoge1wiZW5hYmxlXCI6IGZhbHNlLCBcImRpc3RhbmNlXCI6IDE1MCwgXCJjb2xvclwiOiBcIiNmZmZmZmZcIiwgXCJvcGFjaXR5XCI6IDAuNCwgXCJ3aWR0aFwiOiAxfSxcbiAgICAgICAgICAgIFwibW92ZVwiOiB7XG4gICAgICAgICAgICAgICAgXCJlbmFibGVcIjogdHJ1ZSxcbiAgICAgICAgICAgICAgICBcInNwZWVkXCI6IDEsXG4gICAgICAgICAgICAgICAgXCJkaXJlY3Rpb25cIjogXCJub25lXCIsXG4gICAgICAgICAgICAgICAgXCJyYW5kb21cIjogdHJ1ZSxcbiAgICAgICAgICAgICAgICBcInN0cmFpZ2h0XCI6IGZhbHNlLFxuICAgICAgICAgICAgICAgIFwib3V0X21vZGVcIjogXCJvdXRcIixcbiAgICAgICAgICAgICAgICBcImJvdW5jZVwiOiBmYWxzZSxcbiAgICAgICAgICAgICAgICBcImF0dHJhY3RcIjoge1wiZW5hYmxlXCI6IGZhbHNlLCBcInJvdGF0ZVhcIjogNjAwLCBcInJvdGF0ZVlcIjogNjAwfVxuICAgICAgICAgICAgfVxuICAgICAgICB9LFxuICAgICAgICBcImludGVyYWN0aXZpdHlcIjoge1xuICAgICAgICAgICAgXCJkZXRlY3Rfb25cIjogXCJjYW52YXNcIixcbiAgICAgICAgICAgIFwiZXZlbnRzXCI6IHtcbiAgICAgICAgICAgICAgICBcIm9uaG92ZXJcIjoge1wiZW5hYmxlXCI6IHRydWUsIFwibW9kZVwiOiBcImJ1YmJsZVwifSxcbiAgICAgICAgICAgICAgICBcIm9uY2xpY2tcIjoge1wiZW5hYmxlXCI6IHRydWUsIFwibW9kZVwiOiBcInJlcHVsc2VcIn0sXG4gICAgICAgICAgICAgICAgXCJyZXNpemVcIjogdHJ1ZVxuICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIFwibW9kZXNcIjoge1xuICAgICAgICAgICAgICAgIFwiZ3JhYlwiOiB7XCJkaXN0YW5jZVwiOiA0MDAsIFwibGluZV9saW5rZWRcIjoge1wib3BhY2l0eVwiOiAxfX0sXG4gICAgICAgICAgICAgICAgXCJidWJibGVcIjoge1wiZGlzdGFuY2VcIjogMjUwLCBcInNpemVcIjogMCwgXCJkdXJhdGlvblwiOiAyLCBcIm9wYWNpdHlcIjogMCwgXCJzcGVlZFwiOiAzfSxcbiAgICAgICAgICAgICAgICBcInJlcHVsc2VcIjoge1wiZGlzdGFuY2VcIjogNDAwLCBcImR1cmF0aW9uXCI6IDAuNH0sXG4gICAgICAgICAgICAgICAgXCJwdXNoXCI6IHtcInBhcnRpY2xlc19uYlwiOiA0fSxcbiAgICAgICAgICAgICAgICBcInJlbW92ZVwiOiB7XCJwYXJ0aWNsZXNfbmJcIjogMn1cbiAgICAgICAgICAgIH1cbiAgICAgICAgfSxcbiAgICAgICAgXCJyZXRpbmFfZGV0ZWN0XCI6IHRydWVcbiAgICB9KVxufSk7XG5cblxuZnVuY3Rpb24gYWRkQm94IChzZWxlY3QsIGFkZGNsYXNzID0gJycpIHtcbiAgICBpZiAoc2VsZWN0ICYmIHNlbGVjdC5jbGFzc0xpc3QpIHtcbiAgICAgICAgLy8gbGV0IGNsYXNzTGlzdCA9IFwiYm9yZGVyVHlwZVwiIGAkey4uLmFkZGNsYXNzfWBcbiAgICAgICAgc2VsZWN0Py5jbGFzc0xpc3Q/LmFkZCguLi5hZGRjbGFzcywgXCJib3JkZXJUeXBlXCIpO1xuICAgIH1cbn1cblxuLy8gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnZGl2LmNhcmQtYm9keS50ZXh0LWNlbnRlcicpLmZvckVhY2goZnVuY3Rpb24gKGV2ZW50KXtcbi8vICAgICBpZiAoZXZlbnQpe1xuLy8gICAgICAgICBhZGRCb3goZXZlbnQpO1xuLy8gICAgIH1cbi8vIH0pXG5cbmZ1bmN0aW9uIGFkZEFuaW0gKHNlbGVjdCkge1xuICAgc2VsZWN0Py5jbGFzc0xpc3QuYWRkKFwidGV4dC1jZW50ZXJcIiwgXCJsaW5lLTFcIiwgXCJhbmltLXR5cGV3cml0ZXJcIik7XG59XG5cbmRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJ2gxJykuZm9yRWFjaChmdW5jdGlvbiAoZXZlbnQpe1xuICAgIGlmIChldmVudCl7XG4gICAgICAgIGFkZEFuaW0oZXZlbnQpO1xuICAgIH1cbn0pXG5cbmNvbnN0IGJ0blByaW1hcnkgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCdhJylcbmZvciAobGV0IGkgPSAwOyBpIDwgYnRuUHJpbWFyeS5sZW5ndGg7IGkrKyl7XG4gICAgaWYgKGJ0blByaW1hcnlbaV0uY2xhc3NMaXN0ID09IFwiYnRuIGJ0bi1wcmltYXJ5XCIpe1xuICAgICAgICBidG5QcmltYXJ5W2ldLmNsYXNzTGlzdC5hZGQoXCJidG5Kb2luXCIpO1xuICAgIH1cbn1cblxuIiwiLy8gVGhlIG1vZHVsZSBjYWNoZVxudmFyIF9fd2VicGFja19tb2R1bGVfY2FjaGVfXyA9IHt9O1xuXG4vLyBUaGUgcmVxdWlyZSBmdW5jdGlvblxuZnVuY3Rpb24gX193ZWJwYWNrX3JlcXVpcmVfXyhtb2R1bGVJZCkge1xuXHQvLyBDaGVjayBpZiBtb2R1bGUgaXMgaW4gY2FjaGVcblx0dmFyIGNhY2hlZE1vZHVsZSA9IF9fd2VicGFja19tb2R1bGVfY2FjaGVfX1ttb2R1bGVJZF07XG5cdGlmIChjYWNoZWRNb2R1bGUgIT09IHVuZGVmaW5lZCkge1xuXHRcdHJldHVybiBjYWNoZWRNb2R1bGUuZXhwb3J0cztcblx0fVxuXHQvLyBDcmVhdGUgYSBuZXcgbW9kdWxlIChhbmQgcHV0IGl0IGludG8gdGhlIGNhY2hlKVxuXHR2YXIgbW9kdWxlID0gX193ZWJwYWNrX21vZHVsZV9jYWNoZV9fW21vZHVsZUlkXSA9IHtcblx0XHQvLyBubyBtb2R1bGUuaWQgbmVlZGVkXG5cdFx0Ly8gbm8gbW9kdWxlLmxvYWRlZCBuZWVkZWRcblx0XHRleHBvcnRzOiB7fVxuXHR9O1xuXG5cdC8vIEV4ZWN1dGUgdGhlIG1vZHVsZSBmdW5jdGlvblxuXHRfX3dlYnBhY2tfbW9kdWxlc19fW21vZHVsZUlkXShtb2R1bGUsIG1vZHVsZS5leHBvcnRzLCBfX3dlYnBhY2tfcmVxdWlyZV9fKTtcblxuXHQvLyBSZXR1cm4gdGhlIGV4cG9ydHMgb2YgdGhlIG1vZHVsZVxuXHRyZXR1cm4gbW9kdWxlLmV4cG9ydHM7XG59XG5cbi8vIGV4cG9zZSB0aGUgbW9kdWxlcyBvYmplY3QgKF9fd2VicGFja19tb2R1bGVzX18pXG5fX3dlYnBhY2tfcmVxdWlyZV9fLm0gPSBfX3dlYnBhY2tfbW9kdWxlc19fO1xuXG4iLCJfX3dlYnBhY2tfcmVxdWlyZV9fLm8gPSAob2JqLCBwcm9wKSA9PiAoT2JqZWN0LnByb3RvdHlwZS5oYXNPd25Qcm9wZXJ0eS5jYWxsKG9iaiwgcHJvcCkpIiwiLy8gZGVmaW5lIF9fZXNNb2R1bGUgb24gZXhwb3J0c1xuX193ZWJwYWNrX3JlcXVpcmVfXy5yID0gKGV4cG9ydHMpID0+IHtcblx0aWYodHlwZW9mIFN5bWJvbCAhPT0gJ3VuZGVmaW5lZCcgJiYgU3ltYm9sLnRvU3RyaW5nVGFnKSB7XG5cdFx0T2JqZWN0LmRlZmluZVByb3BlcnR5KGV4cG9ydHMsIFN5bWJvbC50b1N0cmluZ1RhZywgeyB2YWx1ZTogJ01vZHVsZScgfSk7XG5cdH1cblx0T2JqZWN0LmRlZmluZVByb3BlcnR5KGV4cG9ydHMsICdfX2VzTW9kdWxlJywgeyB2YWx1ZTogdHJ1ZSB9KTtcbn07IiwiLy8gbm8gYmFzZVVSSVxuXG4vLyBvYmplY3QgdG8gc3RvcmUgbG9hZGVkIGFuZCBsb2FkaW5nIGNodW5rc1xuLy8gdW5kZWZpbmVkID0gY2h1bmsgbm90IGxvYWRlZCwgbnVsbCA9IGNodW5rIHByZWxvYWRlZC9wcmVmZXRjaGVkXG4vLyBbcmVzb2x2ZSwgcmVqZWN0LCBQcm9taXNlXSA9IGNodW5rIGxvYWRpbmcsIDAgPSBjaHVuayBsb2FkZWRcbnZhciBpbnN0YWxsZWRDaHVua3MgPSB7XG5cdFwiL2pzL2FwcFwiOiAwLFxuXHRcImNzcy9zdHlsZXNcIjogMFxufTtcblxuLy8gbm8gY2h1bmsgb24gZGVtYW5kIGxvYWRpbmdcblxuLy8gbm8gcHJlZmV0Y2hpbmdcblxuLy8gbm8gcHJlbG9hZGVkXG5cbi8vIG5vIEhNUlxuXG4vLyBubyBITVIgbWFuaWZlc3RcblxuX193ZWJwYWNrX3JlcXVpcmVfXy5PLmogPSAoY2h1bmtJZCkgPT4gKGluc3RhbGxlZENodW5rc1tjaHVua0lkXSA9PT0gMCk7XG5cbi8vIGluc3RhbGwgYSBKU09OUCBjYWxsYmFjayBmb3IgY2h1bmsgbG9hZGluZ1xudmFyIHdlYnBhY2tKc29ucENhbGxiYWNrID0gKHBhcmVudENodW5rTG9hZGluZ0Z1bmN0aW9uLCBkYXRhKSA9PiB7XG5cdHZhciBbY2h1bmtJZHMsIG1vcmVNb2R1bGVzLCBydW50aW1lXSA9IGRhdGE7XG5cdC8vIGFkZCBcIm1vcmVNb2R1bGVzXCIgdG8gdGhlIG1vZHVsZXMgb2JqZWN0LFxuXHQvLyB0aGVuIGZsYWcgYWxsIFwiY2h1bmtJZHNcIiBhcyBsb2FkZWQgYW5kIGZpcmUgY2FsbGJhY2tcblx0dmFyIG1vZHVsZUlkLCBjaHVua0lkLCBpID0gMDtcblx0aWYoY2h1bmtJZHMuc29tZSgoaWQpID0+IChpbnN0YWxsZWRDaHVua3NbaWRdICE9PSAwKSkpIHtcblx0XHRmb3IobW9kdWxlSWQgaW4gbW9yZU1vZHVsZXMpIHtcblx0XHRcdGlmKF9fd2VicGFja19yZXF1aXJlX18ubyhtb3JlTW9kdWxlcywgbW9kdWxlSWQpKSB7XG5cdFx0XHRcdF9fd2VicGFja19yZXF1aXJlX18ubVttb2R1bGVJZF0gPSBtb3JlTW9kdWxlc1ttb2R1bGVJZF07XG5cdFx0XHR9XG5cdFx0fVxuXHRcdGlmKHJ1bnRpbWUpIHZhciByZXN1bHQgPSBydW50aW1lKF9fd2VicGFja19yZXF1aXJlX18pO1xuXHR9XG5cdGlmKHBhcmVudENodW5rTG9hZGluZ0Z1bmN0aW9uKSBwYXJlbnRDaHVua0xvYWRpbmdGdW5jdGlvbihkYXRhKTtcblx0Zm9yKDtpIDwgY2h1bmtJZHMubGVuZ3RoOyBpKyspIHtcblx0XHRjaHVua0lkID0gY2h1bmtJZHNbaV07XG5cdFx0aWYoX193ZWJwYWNrX3JlcXVpcmVfXy5vKGluc3RhbGxlZENodW5rcywgY2h1bmtJZCkgJiYgaW5zdGFsbGVkQ2h1bmtzW2NodW5rSWRdKSB7XG5cdFx0XHRpbnN0YWxsZWRDaHVua3NbY2h1bmtJZF1bMF0oKTtcblx0XHR9XG5cdFx0aW5zdGFsbGVkQ2h1bmtzW2NodW5rSWRdID0gMDtcblx0fVxuXHRyZXR1cm4gX193ZWJwYWNrX3JlcXVpcmVfXy5PKHJlc3VsdCk7XG59XG5cbnZhciBjaHVua0xvYWRpbmdHbG9iYWwgPSBzZWxmW1wid2VicGFja0NodW5rdGhlbWVfdGVtcGxhdGVcIl0gPSBzZWxmW1wid2VicGFja0NodW5rdGhlbWVfdGVtcGxhdGVcIl0gfHwgW107XG5jaHVua0xvYWRpbmdHbG9iYWwuZm9yRWFjaCh3ZWJwYWNrSnNvbnBDYWxsYmFjay5iaW5kKG51bGwsIDApKTtcbmNodW5rTG9hZGluZ0dsb2JhbC5wdXNoID0gd2VicGFja0pzb25wQ2FsbGJhY2suYmluZChudWxsLCBjaHVua0xvYWRpbmdHbG9iYWwucHVzaC5iaW5kKGNodW5rTG9hZGluZ0dsb2JhbCkpOyIsIi8vIHN0YXJ0dXBcbi8vIExvYWQgZW50cnkgbW9kdWxlIGFuZCByZXR1cm4gZXhwb3J0c1xuLy8gVGhpcyBlbnRyeSBtb2R1bGUgZGVwZW5kcyBvbiBvdGhlciBsb2FkZWQgY2h1bmtzIGFuZCBleGVjdXRpb24gbmVlZCB0byBiZSBkZWxheWVkXG5fX3dlYnBhY2tfcmVxdWlyZV9fLk8odW5kZWZpbmVkLCBbXCJjc3Mvc3R5bGVzXCJdLCAoKSA9PiAoX193ZWJwYWNrX3JlcXVpcmVfXyhcIi4vanMvYXBwLmpzXCIpKSlcbnZhciBfX3dlYnBhY2tfZXhwb3J0c19fID0gX193ZWJwYWNrX3JlcXVpcmVfXy5PKHVuZGVmaW5lZCwgW1wiY3NzL3N0eWxlc1wiXSwgKCkgPT4gKF9fd2VicGFja19yZXF1aXJlX18oXCIuL3Nhc3Mvc3R5bGVzLnNjc3NcIikpKVxuX193ZWJwYWNrX2V4cG9ydHNfXyA9IF9fd2VicGFja19yZXF1aXJlX18uTyhfX3dlYnBhY2tfZXhwb3J0c19fKTtcbiJdLCJuYW1lcyI6WyJkZWZlcnJlZCIsIndpbmRvdyIsImFkZEV2ZW50TGlzdGVuZXIiLCJldmVudCIsIl9kb2N1bWVudCRnZXRFbGVtZW50QiIsIl9kb2N1bWVudCRnZXRFbGVtZW50QjIiLCJwbGF5QnV0dG9uIiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50QnlJZCIsInNob3dJbWciLCJpZnJhbWUiLCJjcmVhdGVFbGVtZW50Iiwic2V0QXR0cmlidXRlIiwic3R5bGUiLCJkaXNwbGF5IiwidGhpcyIsInBhcmVudE5vZGUiLCJyZXBsYWNlQ2hpbGQiLCJxdWVyeVNlbGVjdG9yQWxsIiwiZm9yRWFjaCIsIl9ldmVudCRxdWVyeVNlbGVjdG9yIiwicXVlcnlTZWxlY3RvciIsImNsYXNzTGlzdCIsInJlbW92ZSIsImFkZEFuaW0iLCJjb25zb2xlIiwibG9nIiwic2VsZWN0IiwiX3NlbGVjdCRjbGFzc0xpc3QiLCJhZGRjbGFzcyIsImFyZ3VtZW50cyIsImxlbmd0aCIsInVuZGVmaW5lZCIsImFkZCIsImFwcGx5IiwiY29uY2F0IiwiYWRkQm94IiwiQU9TIiwiaW5pdCIsIm5hdmJhciIsIm1heFNjcm9sbCIsInNjcm9sbFkiLCJwYXJ0aWNsZXNKUyIsImJ0blByaW1hcnkiLCJpIiwiX193ZWJwYWNrX21vZHVsZV9jYWNoZV9fIiwiX193ZWJwYWNrX3JlcXVpcmVfXyIsIm1vZHVsZUlkIiwiY2FjaGVkTW9kdWxlIiwiZXhwb3J0cyIsIm1vZHVsZSIsIl9fd2VicGFja19tb2R1bGVzX18iLCJtIiwiTyIsInJlc3VsdCIsImNodW5rSWRzIiwiZm4iLCJwcmlvcml0eSIsIm5vdEZ1bGZpbGxlZCIsIkluZmluaXR5IiwiZnVsZmlsbGVkIiwiaiIsIk9iamVjdCIsImtleXMiLCJldmVyeSIsImtleSIsInNwbGljZSIsInIiLCJvIiwib2JqIiwicHJvcCIsInByb3RvdHlwZSIsImhhc093blByb3BlcnR5IiwiY2FsbCIsIlN5bWJvbCIsInRvU3RyaW5nVGFnIiwiZGVmaW5lUHJvcGVydHkiLCJ2YWx1ZSIsImluc3RhbGxlZENodW5rcyIsImNodW5rSWQiLCJ3ZWJwYWNrSnNvbnBDYWxsYmFjayIsInBhcmVudENodW5rTG9hZGluZ0Z1bmN0aW9uIiwiZGF0YSIsIm1vcmVNb2R1bGVzIiwicnVudGltZSIsInNvbWUiLCJpZCIsImNodW5rTG9hZGluZ0dsb2JhbCIsInNlbGYiLCJiaW5kIiwicHVzaCIsIl9fd2VicGFja19leHBvcnRzX18iXSwic291cmNlUm9vdCI6IiJ9