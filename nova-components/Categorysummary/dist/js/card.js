/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
module.exports = __webpack_require__(6);


/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

Nova.booting(function (Vue, router) {
    Vue.component('Categorysummary', __webpack_require__(2));
});

/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(3)
/* script */
var __vue_script__ = __webpack_require__(4)
/* template */
var __vue_template__ = __webpack_require__(5)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/js/components/Card.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-b9bc2c0a", Component.options)
  } else {
    hotAPI.reload("data-v-b9bc2c0a", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 3 */
/***/ (function(module, exports) {

/* globals __VUE_SSR_CONTEXT__ */

// IMPORTANT: Do NOT use ES2015 features in this file.
// This module is a runtime utility for cleaner component module output and will
// be included in the final webpack user bundle.

module.exports = function normalizeComponent (
  rawScriptExports,
  compiledTemplate,
  functionalTemplate,
  injectStyles,
  scopeId,
  moduleIdentifier /* server only */
) {
  var esModule
  var scriptExports = rawScriptExports = rawScriptExports || {}

  // ES6 modules interop
  var type = typeof rawScriptExports.default
  if (type === 'object' || type === 'function') {
    esModule = rawScriptExports
    scriptExports = rawScriptExports.default
  }

  // Vue.extend constructor export interop
  var options = typeof scriptExports === 'function'
    ? scriptExports.options
    : scriptExports

  // render functions
  if (compiledTemplate) {
    options.render = compiledTemplate.render
    options.staticRenderFns = compiledTemplate.staticRenderFns
    options._compiled = true
  }

  // functional template
  if (functionalTemplate) {
    options.functional = true
  }

  // scopedId
  if (scopeId) {
    options._scopeId = scopeId
  }

  var hook
  if (moduleIdentifier) { // server build
    hook = function (context) {
      // 2.3 injection
      context =
        context || // cached call
        (this.$vnode && this.$vnode.ssrContext) || // stateful
        (this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext) // functional
      // 2.2 with runInNewContext: true
      if (!context && typeof __VUE_SSR_CONTEXT__ !== 'undefined') {
        context = __VUE_SSR_CONTEXT__
      }
      // inject component styles
      if (injectStyles) {
        injectStyles.call(this, context)
      }
      // register component module identifier for async chunk inferrence
      if (context && context._registeredComponents) {
        context._registeredComponents.add(moduleIdentifier)
      }
    }
    // used by ssr in case component is cached and beforeCreate
    // never gets called
    options._ssrRegister = hook
  } else if (injectStyles) {
    hook = injectStyles
  }

  if (hook) {
    var functional = options.functional
    var existing = functional
      ? options.render
      : options.beforeCreate

    if (!functional) {
      // inject component registration as beforeCreate hook
      options.beforeCreate = existing
        ? [].concat(existing, hook)
        : [hook]
    } else {
      // for template-only hot-reload because in that case the render fn doesn't
      // go through the normalizer
      options._injectStyles = hook
      // register for functioal component in vue file
      options.render = function renderWithStyleInjection (h, context) {
        hook.call(context)
        return existing(h, context)
      }
    }
  }

  return {
    esModule: esModule,
    exports: scriptExports,
    options: options
  }
}


/***/ }),
/* 4 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//


/* harmony default export */ __webpack_exports__["default"] = ({
    props: ['card'],
    data: function data() {
        return {

            id: "",
            inpId: "",
            topic: "",
            topics: [],
            inCompany: "",
            inDoctor: "",
            inSchool: "",
            inCollege: "",
            inHotel: "",
            inRestaurant: "",
            inLawyer: "",
            inFitness: "",
            catsel_status: -1,
            catsel_refresh: -1

        };
    },

    mounted: function mounted() {
        var _this = this;

        axios.get('/categorysummary/get').then(function (response) {

            _this.catsel_status = response.data;
        });
    },

    methods: {
        selCompany: function selCompany() {
            var _this2 = this;

            if (this.inCompany == '') {

                alert('Please enter the company name');
            } else {

                var c = confirm("Sure to Submit with this setting? You will not be able to change it later !!");

                if (c == true) {

                    axios.get('/categorysummary/post', {
                        params: {

                            type: 'company',
                            name: this.inCompany

                        }

                    }).then(function (response) {

                        _this2.catsel_status = 1;

                        _this2.catsel_refresh = 1;

                        _this2.$router.go(_this2.$router.currentRoute);
                    });
                }
            }
        }, selDoctor: function selDoctor() {
            var _this3 = this;

            var c = confirm("Sure to Submit with this setting? You will not be able to change it later !!");

            if (c == true) {

                axios.get('/categorysummary/post', {
                    params: {

                        type: 'doctor',
                        name: this.inDoctor

                    }

                }).then(function (response) {

                    _this3.catsel_status = 1;

                    _this3.catsel_refresh = 1;

                    _this3.$router.go(_this3.$router.currentRoute);
                });
            }
        }, selSchool: function selSchool() {
            var _this4 = this;

            if (this.inSchool == '') {

                alert('Please enter the school name');
            } else {

                var c = confirm("Sure to Submit with this setting? You will not be able to change it later !!");

                if (c == true) {

                    axios.get('/categorysummary/post', {
                        params: {

                            type: 'school',
                            name: this.inSchool

                        }

                    }).then(function (response) {

                        _this4.catsel_status = 1;

                        _this4.catsel_refresh = 1;

                        _this4.$router.go(_this4.$router.currentRoute);
                    });
                }
            }
        }, selCollege: function selCollege() {
            var _this5 = this;

            if (this.inCollege == '') {

                alert('Please enter the college name');
            } else {

                var c = confirm("Sure to Submit with this setting? You will not be able to change it later !!");

                if (c == true) {

                    axios.get('/categorysummary/post', {
                        params: {

                            type: 'college',
                            name: this.inCollege

                        }

                    }).then(function (response) {

                        _this5.catsel_status = 1;

                        _this5.catsel_refresh = 1;

                        _this5.$router.go(_this5.$router.currentRoute);
                    });
                }
            }
        }, selHotel: function selHotel() {
            var _this6 = this;

            if (this.inHotel == '') {

                alert('Please enter the hotel name');
            } else {

                var c = confirm("Sure to Submit with this setting? You will not be able to change it later !!");

                if (c == true) {

                    axios.get('/categorysummary/post', {
                        params: {

                            type: 'hotel',
                            name: this.inHotel

                        }

                    }).then(function (response) {

                        _this6.catsel_status = 1;

                        _this6.catsel_refresh = 1;

                        _this6.$router.go(_this6.$router.currentRoute);
                    });
                }
            }
        }, selRestaurant: function selRestaurant() {
            var _this7 = this;

            if (this.inRestaurant == '') {

                alert('Please enter the restaurant name');
            } else {

                var c = confirm("Sure to Submit with this setting? You will not be able to change it later !!");

                if (c == true) {

                    axios.get('/categorysummary/post', {
                        params: {

                            type: 'restaurant',
                            name: this.inRestaurant

                        }

                    }).then(function (response) {

                        _this7.catsel_status = 1;

                        _this7.catsel_refresh = 1;

                        _this7.$router.go(_this7.$router.currentRoute);
                    });
                }
            }
        }, selLawyer: function selLawyer() {
            var _this8 = this;

            var c = confirm("Sure to Submit with this setting? You will not be able to change it later !!");

            if (c == true) {

                axios.get('/categorysummary/post', {
                    params: {

                        type: 'lawyer',
                        name: this.inLawyer

                    }

                }).then(function (response) {

                    _this8.catsel_status = 1;

                    _this8.catsel_refresh = 1;

                    _this8.$router.go(_this8.$router.currentRoute);
                });
            }
        }, selFitness: function selFitness() {
            var _this9 = this;

            if (this.inFitness == '') {

                alert('Please enter the Fitness center name');
            } else {

                var c = confirm("Sure to Submit with this setting? You will not be able to change it later !!");

                if (c == true) {

                    axios.get('/categorysummary/post', {
                        params: {

                            type: 'fitness',
                            name: this.inFitness

                        }

                    }).then(function (response) {

                        _this9.catsel_status = 1;

                        _this9.catsel_refresh = 1;

                        _this9.$router.go(_this9.$router.currentRoute);
                    });
                }
            }
        }
    }
});

/***/ }),
/* 5 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "card",
    { staticClass: "flex flex-col items-center justify-center" },
    [
      _vm.catsel_refresh == 1
        ? _c("h1", [_vm._v("Please wait.. refreshing page")])
        : _vm._e(),
      _vm._v(" "),
      _vm.catsel_status < 1
        ? _c("div", { staticClass: "px-3 py-3" }, [
            _c(
              "h1",
              { staticClass: "text-center text-3xl text-80 font-light" },
              [_vm._v("Define Categories")]
            ),
            _c("br"),
            _vm._v(" "),
            _c("h4", { staticClass: "font-light" }, [
              _vm._v(
                "AskPls supports a number of categories based on your profession. Please select from below list to define your profession category"
              )
            ]),
            _vm._v(" "),
            _c("br"),
            _c("br"),
            _vm._v(" "),
            _c("div", [
              _c("table", { staticClass: "table w-full" }, [
                _c("thead", [
                  _c("tr", [
                    _c("th", { staticClass: "text-left" }, [
                      _vm._v("Category")
                    ]),
                    _vm._v(" "),
                    _c("th", { staticClass: "text-left" }, [_vm._v("Name")]),
                    _vm._v(" "),
                    _c("th", { staticClass: "text-left" }, [_vm._v("Action")])
                  ])
                ]),
                _vm._v(" "),
                _c("tbody", [
                  _c("tr", [
                    _c("td", [_vm._v(" Company")]),
                    _vm._v(" "),
                    _c("td", [
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.inCompany,
                            expression: "inCompany"
                          }
                        ],
                        staticClass: "form-control form-control-sm",
                        staticStyle: { border: "2px thick blue" },
                        attrs: {
                          type: "text",
                          placeholder: "Enter Company Name"
                        },
                        domProps: { value: _vm.inCompany },
                        on: {
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.inCompany = $event.target.value
                          }
                        }
                      })
                    ]),
                    _vm._v(" "),
                    _c("td", [
                      _c(
                        "button",
                        {
                          staticClass: "btn btn-default btn-primary",
                          attrs: { type: "button" },
                          on: { click: _vm.selCompany }
                        },
                        [_vm._v("Select")]
                      )
                    ])
                  ]),
                  _vm._v(" "),
                  _c("tr", [
                    _c("td", [_vm._v(" Doctor")]),
                    _vm._v(" "),
                    _c("td", [
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.inDoctor,
                            expression: "inDoctor"
                          }
                        ],
                        staticClass: "form-control form-control-sm",
                        staticStyle: { border: "2px thick blue" },
                        attrs: {
                          type: "text",
                          placeholder: "Enter Doctor Name"
                        },
                        domProps: { value: _vm.inDoctor },
                        on: {
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.inDoctor = $event.target.value
                          }
                        }
                      })
                    ]),
                    _vm._v(" "),
                    _c("td", [
                      _c(
                        "button",
                        {
                          staticClass: "btn btn-default btn-primary",
                          attrs: { type: "button" },
                          on: { click: _vm.selDoctor }
                        },
                        [_vm._v("Select")]
                      )
                    ])
                  ]),
                  _vm._v(" "),
                  _c("tr", [
                    _c("td", [_vm._v(" School")]),
                    _vm._v(" "),
                    _c("td", [
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.inSchool,
                            expression: "inSchool"
                          }
                        ],
                        staticClass: "form-control form-control-sm",
                        staticStyle: { border: "2px thick blue" },
                        attrs: {
                          type: "text",
                          placeholder: "Enter School Name"
                        },
                        domProps: { value: _vm.inSchool },
                        on: {
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.inSchool = $event.target.value
                          }
                        }
                      })
                    ]),
                    _vm._v(" "),
                    _c("td", [
                      _c(
                        "button",
                        {
                          staticClass: "btn btn-default btn-primary",
                          attrs: { type: "button" },
                          on: { click: _vm.selSchool }
                        },
                        [_vm._v("Select")]
                      )
                    ])
                  ]),
                  _vm._v(" "),
                  _c("tr", [
                    _c("td", [_vm._v(" College")]),
                    _vm._v(" "),
                    _c("td", [
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.inCollege,
                            expression: "inCollege"
                          }
                        ],
                        staticClass: "form-control form-control-sm",
                        staticStyle: { border: "2px thick blue" },
                        attrs: {
                          type: "text",
                          placeholder: "Enter College Name"
                        },
                        domProps: { value: _vm.inCollege },
                        on: {
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.inCollege = $event.target.value
                          }
                        }
                      })
                    ]),
                    _vm._v(" "),
                    _c("td", [
                      _c(
                        "button",
                        {
                          staticClass: "btn btn-default btn-primary",
                          attrs: { type: "button" },
                          on: { click: _vm.selCollege }
                        },
                        [_vm._v("Select")]
                      )
                    ])
                  ]),
                  _vm._v(" "),
                  _c("tr", [
                    _c("td", [_vm._v(" Hotel")]),
                    _vm._v(" "),
                    _c("td", [
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.inHotel,
                            expression: "inHotel"
                          }
                        ],
                        staticClass: "form-control form-control-sm",
                        staticStyle: { border: "2px thick blue" },
                        attrs: {
                          type: "text",
                          placeholder: "Enter Hotel Name"
                        },
                        domProps: { value: _vm.inHotel },
                        on: {
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.inHotel = $event.target.value
                          }
                        }
                      })
                    ]),
                    _vm._v(" "),
                    _c("td", [
                      _c(
                        "button",
                        {
                          staticClass: "btn btn-default btn-primary",
                          attrs: { type: "button" },
                          on: { click: _vm.selHotel }
                        },
                        [_vm._v("Select")]
                      )
                    ])
                  ]),
                  _vm._v(" "),
                  _c("tr", [
                    _c("td", [_vm._v(" Restaurant")]),
                    _vm._v(" "),
                    _c("td", [
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.inRestaurant,
                            expression: "inRestaurant"
                          }
                        ],
                        staticClass: "form-control form-control-sm",
                        staticStyle: { border: "2px thick blue" },
                        attrs: {
                          type: "text",
                          placeholder: "Enter Restaurant Name"
                        },
                        domProps: { value: _vm.inRestaurant },
                        on: {
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.inRestaurant = $event.target.value
                          }
                        }
                      })
                    ]),
                    _vm._v(" "),
                    _c("td", [
                      _c(
                        "button",
                        {
                          staticClass: "btn btn-default btn-primary",
                          attrs: { type: "button" },
                          on: { click: _vm.selRestaurant }
                        },
                        [_vm._v("Select")]
                      )
                    ])
                  ]),
                  _vm._v(" "),
                  _c("tr", [
                    _c("td", [_vm._v(" Lawyer")]),
                    _vm._v(" "),
                    _c("td", [
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.inLawyer,
                            expression: "inLawyer"
                          }
                        ],
                        staticClass: "form-control form-control-sm",
                        staticStyle: { border: "2px thick blue" },
                        attrs: {
                          type: "text",
                          placeholder: "Enter Lawyer Name"
                        },
                        domProps: { value: _vm.inLawyer },
                        on: {
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.inLawyer = $event.target.value
                          }
                        }
                      })
                    ]),
                    _vm._v(" "),
                    _c("td", [
                      _c(
                        "button",
                        {
                          staticClass: "btn btn-default btn-primary",
                          attrs: { type: "button" },
                          on: { click: _vm.selLawyer }
                        },
                        [_vm._v("Select")]
                      )
                    ])
                  ]),
                  _vm._v(" "),
                  _c("tr", [
                    _c("td", [_vm._v(" Fitness Centers")]),
                    _vm._v(" "),
                    _c("td", [
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.inFitness,
                            expression: "inFitness"
                          }
                        ],
                        staticClass: "form-control form-control-sm",
                        staticStyle: { border: "2px thick blue" },
                        attrs: {
                          type: "text",
                          placeholder: "Enter Fitness Center Name"
                        },
                        domProps: { value: _vm.inFitness },
                        on: {
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.inFitness = $event.target.value
                          }
                        }
                      })
                    ]),
                    _vm._v(" "),
                    _c("td", [
                      _c(
                        "button",
                        {
                          staticClass: "btn btn-default btn-primary",
                          attrs: { type: "button" },
                          on: { click: _vm.selFitness }
                        },
                        [_vm._v("Select")]
                      )
                    ])
                  ])
                ])
              ])
            ])
          ])
        : _vm._e()
    ]
  )
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-b9bc2c0a", module.exports)
  }
}

/***/ }),
/* 6 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
/******/ ]);