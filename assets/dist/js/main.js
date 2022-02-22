/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./assets/src/js/main.js":
/*!*******************************!*\
  !*** ./assets/src/js/main.js ***!
  \*******************************/
/***/ (() => {

eval("\n\nvar menuButton = {\n  /**\n   * Toggle menu\n   */\n  init: function init() {\n    // Menu toggle button\n    function navigation_togge() {\n      var siteNavigation = document.querySelector('.site__header-nav-box');\n      var button = document.querySelector('.site__header-menu-button');\n      var menu = siteNavigation.getElementsByTagName('ul')[0];\n\n      if (!menu.classList.contains('nav-menu')) {\n        menu.classList.add('nav-menu');\n      }\n\n      function toggled_menu() {\n        siteNavigation.classList.toggle('active');\n        var overflow = document.querySelector('body');\n\n        if (button.getAttribute('aria-expanded') === 'true') {\n          button.setAttribute('aria-expanded', 'false');\n          overflow.style.removeProperty('overflow');\n        } else {\n          button.setAttribute('aria-expanded', 'true');\n          overflow.style.overflow = 'hidden';\n        }\n      } // Toggle the .toggled class and the aria-expanded value each time the button is clicked.\n\n\n      button.addEventListener('click', function () {\n        toggled_menu();\n      }); // Toogle when click # tag\n      // document.querySelectorAll('.site__header-nav-box a[href^=\"#\"]').forEach((event) => {\n      // \tevent.addEventListener('click', function () {\n      // \t\tsiteNavigation.classList.remove('active');\n      // \t\tbutton.setAttribute('aria-expanded', 'false');\n      // \t\tdocument.querySelector('body').style.removeProperty('overflow');\n      // \t});\n      // });\n\n      var hasChildren = document.querySelectorAll('.menu-item-has-children > a');\n\n      if (hasChildren) {\n        hasChildren.forEach(function (children) {\n          children.after(document.createElement('span'));\n        });\n        var hasSpan = document.querySelectorAll('.menu-item-has-children > span');\n        hasSpan.forEach(function (event) {\n          event.addEventListener('click', function () {\n            event.classList.toggle('active');\n            event.nextElementSibling.classList.toggle('active');\n          });\n        });\n      }\n    }\n\n    navigation_togge();\n  }\n};\ndocument.addEventListener('DOMContentLoaded', function () {\n  menuButton.init();\n});\n\n//# sourceURL=webpack://ieverly/./assets/src/js/main.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./assets/src/js/main.js"]();
/******/ 	
/******/ })()
;