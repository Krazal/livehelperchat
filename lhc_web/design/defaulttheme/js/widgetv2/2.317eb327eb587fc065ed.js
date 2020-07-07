(window["webpackJsonpLHCReactAPP"] = window["webpackJsonpLHCReactAPP"] || []).push([[2],{

/***/ "./src/components/ProactiveInvitation.js":
/*!***********************************************!*\
  !*** ./src/components/ProactiveInvitation.js ***!
  \***********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _babel_runtime_helpers_classCallCheck__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/classCallCheck */ \"./node_modules/@babel/runtime/helpers/classCallCheck.js\");\n/* harmony import */ var _babel_runtime_helpers_classCallCheck__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_classCallCheck__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ \"./node_modules/@babel/runtime/helpers/createClass.js\");\n/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var _babel_runtime_helpers_possibleConstructorReturn__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @babel/runtime/helpers/possibleConstructorReturn */ \"./node_modules/@babel/runtime/helpers/possibleConstructorReturn.js\");\n/* harmony import */ var _babel_runtime_helpers_possibleConstructorReturn__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_possibleConstructorReturn__WEBPACK_IMPORTED_MODULE_2__);\n/* harmony import */ var _babel_runtime_helpers_getPrototypeOf__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @babel/runtime/helpers/getPrototypeOf */ \"./node_modules/@babel/runtime/helpers/getPrototypeOf.js\");\n/* harmony import */ var _babel_runtime_helpers_getPrototypeOf__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_getPrototypeOf__WEBPACK_IMPORTED_MODULE_3__);\n/* harmony import */ var _babel_runtime_helpers_assertThisInitialized__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @babel/runtime/helpers/assertThisInitialized */ \"./node_modules/@babel/runtime/helpers/assertThisInitialized.js\");\n/* harmony import */ var _babel_runtime_helpers_assertThisInitialized__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_assertThisInitialized__WEBPACK_IMPORTED_MODULE_4__);\n/* harmony import */ var _babel_runtime_helpers_inherits__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @babel/runtime/helpers/inherits */ \"./node_modules/@babel/runtime/helpers/inherits.js\");\n/* harmony import */ var _babel_runtime_helpers_inherits__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_inherits__WEBPACK_IMPORTED_MODULE_5__);\n/* harmony import */ var _babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @babel/runtime/helpers/defineProperty */ \"./node_modules/@babel/runtime/helpers/defineProperty.js\");\n/* harmony import */ var _babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_6__);\n/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! react */ \"./node_modules/react/index.js\");\n/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_7__);\n/* harmony import */ var react_redux__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! react-redux */ \"./node_modules/react-redux/es/index.js\");\n/* harmony import */ var _actions_chatActions__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ../actions/chatActions */ \"./src/actions/chatActions.js\");\n/* harmony import */ var _lib_helperFunctions__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ../lib/helperFunctions */ \"./src/lib/helperFunctions.js\");\n\n\n\n\n\n\n\n\nvar _dec, _class, _temp;\n\n\n\n\n\nvar ProactiveInvitation = (_dec = Object(react_redux__WEBPACK_IMPORTED_MODULE_8__[\"connect\"])(function (store) {\n  return {\n    chatwidget: store.chatwidget\n  };\n}), _dec(_class = (_temp = /*#__PURE__*/function (_Component) {\n  _babel_runtime_helpers_inherits__WEBPACK_IMPORTED_MODULE_5___default()(ProactiveInvitation, _Component);\n\n  function ProactiveInvitation(props) {\n    var _this;\n\n    _babel_runtime_helpers_classCallCheck__WEBPACK_IMPORTED_MODULE_0___default()(this, ProactiveInvitation);\n\n    _this = _babel_runtime_helpers_possibleConstructorReturn__WEBPACK_IMPORTED_MODULE_2___default()(this, _babel_runtime_helpers_getPrototypeOf__WEBPACK_IMPORTED_MODULE_3___default()(ProactiveInvitation).call(this, props));\n\n    _babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_6___default()(_babel_runtime_helpers_assertThisInitialized__WEBPACK_IMPORTED_MODULE_4___default()(_this), \"state\", {\n      shown: false\n    });\n\n    _this.hideInvitation = _this.hideInvitation.bind(_babel_runtime_helpers_assertThisInitialized__WEBPACK_IMPORTED_MODULE_4___default()(_this));\n    _this.fullInvitation = _this.fullInvitation.bind(_babel_runtime_helpers_assertThisInitialized__WEBPACK_IMPORTED_MODULE_4___default()(_this));\n    return _this;\n  }\n\n  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_1___default()(ProactiveInvitation, [{\n    key: \"componentDidMount\",\n    value: function componentDidMount() {\n      var _this2 = this;\n\n      _lib_helperFunctions__WEBPACK_IMPORTED_MODULE_10__[\"helperFunctions\"].sendMessageParent('showInvitation', []);\n\n      if (this.props.chatwidget.getIn(['proactive', 'data', 'play_sound'])) {\n        _lib_helperFunctions__WEBPACK_IMPORTED_MODULE_10__[\"helperFunctions\"].emitEvent('play_sound', [{\n          'type': 'new_invitation',\n          'sound_on': this.props.chatwidget.getIn(['proactive', 'data', 'play_sound']) === true,\n          'widget_open': this.props.chatwidget.get('shown') && this.props.chatwidget.get('mode') == 'widget' || document.hasFocus()\n        }]);\n      }\n\n      if (document.getElementById('id-invitation-height')) {\n        setTimeout(function () {\n          _lib_helperFunctions__WEBPACK_IMPORTED_MODULE_10__[\"helperFunctions\"].sendMessageParent('widgetHeight', [{\n            'force_width': 240,\n            'force_height': document.getElementById('id-invitation-height').offsetHeight + 20\n          }]);\n\n          _this2.setState({\n            shown: true\n          });\n        }, 50);\n      }\n    }\n  }, {\n    key: \"componentWillUnmount\",\n    value: function componentWillUnmount() {\n      _lib_helperFunctions__WEBPACK_IMPORTED_MODULE_10__[\"helperFunctions\"].sendMessageParent('widgetHeight', [{\n        'reset_height': true\n      }]);\n    }\n  }, {\n    key: \"hideInvitation\",\n    value: function hideInvitation(e) {\n      this.props.dispatch(Object(_actions_chatActions__WEBPACK_IMPORTED_MODULE_9__[\"hideInvitation\"])());\n      e.preventDefault();\n      e.stopPropagation();\n    }\n  }, {\n    key: \"fullInvitation\",\n    value: function fullInvitation() {\n      _lib_helperFunctions__WEBPACK_IMPORTED_MODULE_10__[\"helperFunctions\"].sendMessageParentDirect('hideInvitation', [{\n        'full': true\n      }]);\n      this.props.dispatch({\n        'type': 'FULL_INVITATION'\n      });\n    }\n  }, {\n    key: \"render\",\n    value: function render() {\n      var _this3 = this;\n\n      var className = \"proactive-need-help p-2 float-right pointer\";\n\n      if (this.state.shown === false) {\n        className += \" invisible\";\n      } else {\n        className += \" fade-in\";\n      }\n\n      return react__WEBPACK_IMPORTED_MODULE_7___default.a.createElement(\"div\", {\n        className: className,\n        onClick: this.fullInvitation,\n        id: \"id-invitation-height\"\n      }, react__WEBPACK_IMPORTED_MODULE_7___default.a.createElement(\"button\", {\n        title: \"Close\",\n        onClick: function onClick(e) {\n          return _this3.hideInvitation(e);\n        },\n        className: \"float-right btn btn-sm rounded\"\n      }, react__WEBPACK_IMPORTED_MODULE_7___default.a.createElement(\"i\", {\n        className: \"material-icons mr-0\"\n      }, \"\\uF10A\")), react__WEBPACK_IMPORTED_MODULE_7___default.a.createElement(\"div\", {\n        className: \"fs14\"\n      }, react__WEBPACK_IMPORTED_MODULE_7___default.a.createElement(\"b\", null, this.props.chatwidget.getIn(['proactive', 'data', 'name_support']) || this.props.chatwidget.getIn(['proactive', 'data', 'extra_profile']))), react__WEBPACK_IMPORTED_MODULE_7___default.a.createElement(\"p\", {\n        className: \"fs12\",\n        dangerouslySetInnerHTML: {\n          __html: this.props.chatwidget.getIn(['proactive', 'data', 'message'])\n        }\n      }));\n    }\n  }]);\n\n  return ProactiveInvitation;\n}(react__WEBPACK_IMPORTED_MODULE_7__[\"Component\"]), _temp)) || _class);\n/* harmony default export */ __webpack_exports__[\"default\"] = (ProactiveInvitation);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9zcmMvY29tcG9uZW50cy9Qcm9hY3RpdmVJbnZpdGF0aW9uLmpzLmpzIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vTEhDUmVhY3RBUFAvLi9zcmMvY29tcG9uZW50cy9Qcm9hY3RpdmVJbnZpdGF0aW9uLmpzP2I3MTIiXSwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IFJlYWN0LCB7IENvbXBvbmVudCB9IGZyb20gJ3JlYWN0JztcbmltcG9ydCB7IGNvbm5lY3QgfSBmcm9tIFwicmVhY3QtcmVkdXhcIjtcbmltcG9ydCB7IGhpZGVJbnZpdGF0aW9uIH0gZnJvbSBcIi4uL2FjdGlvbnMvY2hhdEFjdGlvbnNcIlxuaW1wb3J0IHsgaGVscGVyRnVuY3Rpb25zIH0gZnJvbSBcIi4uL2xpYi9oZWxwZXJGdW5jdGlvbnNcIjtcblxuQGNvbm5lY3QoKHN0b3JlKSA9PiB7XG4gICAgcmV0dXJuIHtcbiAgICAgICAgY2hhdHdpZGdldDogc3RvcmUuY2hhdHdpZGdldFxuICAgIH07XG59KVxuXG5jbGFzcyBQcm9hY3RpdmVJbnZpdGF0aW9uIGV4dGVuZHMgQ29tcG9uZW50IHtcblxuICAgIHN0YXRlID0ge1xuICAgICAgICBzaG93bjogZmFsc2VcbiAgICB9XG5cbiAgICBjb25zdHJ1Y3Rvcihwcm9wcykge1xuICAgICAgICBzdXBlcihwcm9wcyk7XG4gICAgICAgIHRoaXMuaGlkZUludml0YXRpb24gPSB0aGlzLmhpZGVJbnZpdGF0aW9uLmJpbmQodGhpcyk7XG4gICAgICAgIHRoaXMuZnVsbEludml0YXRpb24gPSB0aGlzLmZ1bGxJbnZpdGF0aW9uLmJpbmQodGhpcyk7XG4gICAgfVxuXG4gICAgY29tcG9uZW50RGlkTW91bnQoKSB7XG4gICAgICAgIGhlbHBlckZ1bmN0aW9ucy5zZW5kTWVzc2FnZVBhcmVudCgnc2hvd0ludml0YXRpb24nLCBbXSk7XG5cbiAgICAgICAgaWYgKHRoaXMucHJvcHMuY2hhdHdpZGdldC5nZXRJbihbJ3Byb2FjdGl2ZScsJ2RhdGEnLCdwbGF5X3NvdW5kJ10pKXtcbiAgICAgICAgICAgIGhlbHBlckZ1bmN0aW9ucy5lbWl0RXZlbnQoJ3BsYXlfc291bmQnLCBbeyd0eXBlJyA6ICduZXdfaW52aXRhdGlvbicsICdzb3VuZF9vbicgOiAodGhpcy5wcm9wcy5jaGF0d2lkZ2V0LmdldEluKFsncHJvYWN0aXZlJywnZGF0YScsJ3BsYXlfc291bmQnXSkgPT09IHRydWUpLCAnd2lkZ2V0X29wZW4nIDogKCh0aGlzLnByb3BzLmNoYXR3aWRnZXQuZ2V0KCdzaG93bicpICYmIHRoaXMucHJvcHMuY2hhdHdpZGdldC5nZXQoJ21vZGUnKSA9PSAnd2lkZ2V0JykgfHwgZG9jdW1lbnQuaGFzRm9jdXMoKSl9XSk7XG4gICAgICAgIH1cblxuICAgICAgICBpZiAoZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2lkLWludml0YXRpb24taGVpZ2h0JykpIHtcbiAgICAgICAgICAgIHNldFRpbWVvdXQoKCk9PiB7XG4gICAgICAgICAgICAgICAgaGVscGVyRnVuY3Rpb25zLnNlbmRNZXNzYWdlUGFyZW50KCd3aWRnZXRIZWlnaHQnLCBbe1xuICAgICAgICAgICAgICAgICAgICAnZm9yY2Vfd2lkdGgnIDogMjQwLFxuICAgICAgICAgICAgICAgICAgICAnZm9yY2VfaGVpZ2h0JyA6IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdpZC1pbnZpdGF0aW9uLWhlaWdodCcpLm9mZnNldEhlaWdodCsyMH1dKTtcbiAgICAgICAgICAgICAgICB0aGlzLnNldFN0YXRlKHtzaG93biA6IHRydWV9KTtcbiAgICAgICAgICAgICB9LCA1MCk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICBjb21wb25lbnRXaWxsVW5tb3VudCgpIHtcbiAgICAgICAgaGVscGVyRnVuY3Rpb25zLnNlbmRNZXNzYWdlUGFyZW50KCd3aWRnZXRIZWlnaHQnLCBbeydyZXNldF9oZWlnaHQnIDogdHJ1ZX1dKTtcbiAgICB9XG5cbiAgICBoaWRlSW52aXRhdGlvbihlKSB7XG4gICAgICAgIHRoaXMucHJvcHMuZGlzcGF0Y2goaGlkZUludml0YXRpb24oKSk7XG4gICAgICAgIGUucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgZS5zdG9wUHJvcGFnYXRpb24oKTtcbiAgICB9XG5cbiAgICBmdWxsSW52aXRhdGlvbigpIHtcblxuICAgICAgICBoZWxwZXJGdW5jdGlvbnMuc2VuZE1lc3NhZ2VQYXJlbnREaXJlY3QoJ2hpZGVJbnZpdGF0aW9uJywgW3snZnVsbCcgOiB0cnVlfV0pO1xuXG4gICAgICAgIHRoaXMucHJvcHMuZGlzcGF0Y2goe1xuICAgICAgICAgICAgJ3R5cGUnIDogJ0ZVTExfSU5WSVRBVElPTidcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgcmVuZGVyKCkge1xuXG4gICAgICAgIGxldCBjbGFzc05hbWUgPSBcInByb2FjdGl2ZS1uZWVkLWhlbHAgcC0yIGZsb2F0LXJpZ2h0IHBvaW50ZXJcIjtcbiAgICAgICAgaWYgKHRoaXMuc3RhdGUuc2hvd24gPT09IGZhbHNlKSB7XG4gICAgICAgICAgICBjbGFzc05hbWUgKz0gXCIgaW52aXNpYmxlXCI7XG4gICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICBjbGFzc05hbWUgKz0gXCIgZmFkZS1pblwiO1xuICAgICAgICB9XG5cbiAgICAgICAgcmV0dXJuIChcbiAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPXtjbGFzc05hbWV9IG9uQ2xpY2s9e3RoaXMuZnVsbEludml0YXRpb259IGlkPVwiaWQtaW52aXRhdGlvbi1oZWlnaHRcIj5cbiAgICAgICAgICAgICAgICA8YnV0dG9uIHRpdGxlPVwiQ2xvc2VcIiBvbkNsaWNrPXsoZSkgPT4gdGhpcy5oaWRlSW52aXRhdGlvbihlKX0gY2xhc3NOYW1lPVwiZmxvYXQtcmlnaHQgYnRuIGJ0bi1zbSByb3VuZGVkXCI+PGkgY2xhc3NOYW1lPVwibWF0ZXJpYWwtaWNvbnMgbXItMFwiPiYjeGYxMGE7PC9pPjwvYnV0dG9uPlxuICAgICAgICAgICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiZnMxNFwiPjxiPnt0aGlzLnByb3BzLmNoYXR3aWRnZXQuZ2V0SW4oWydwcm9hY3RpdmUnLCdkYXRhJywnbmFtZV9zdXBwb3J0J10pIHx8IHRoaXMucHJvcHMuY2hhdHdpZGdldC5nZXRJbihbJ3Byb2FjdGl2ZScsJ2RhdGEnLCdleHRyYV9wcm9maWxlJ10pfTwvYj48L2Rpdj5cbiAgICAgICAgICAgICAgICA8cCBjbGFzc05hbWU9XCJmczEyXCIgZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUw9e3tfX2h0bWw6dGhpcy5wcm9wcy5jaGF0d2lkZ2V0LmdldEluKFsncHJvYWN0aXZlJywnZGF0YScsJ21lc3NhZ2UnXSl9fT48L3A+XG4gICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgKTtcbiAgICB9XG59XG5cbmV4cG9ydCBkZWZhdWx0IFByb2FjdGl2ZUludml0YXRpb247XG4iXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7OztBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBUUE7QUFMQTtBQUNBO0FBREE7QUFHQTs7O0FBUUE7QUFBQTtBQUNBO0FBREE7QUFDQTtBQUFBO0FBQ0E7QUFGQTtBQUhBO0FBREE7QUFDQTtBQUtBO0FBQ0E7QUFIQTtBQUlBO0FBQ0E7OztBQUNBO0FBQUE7QUFDQTtBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUZBO0FBQ0E7QUFFQTtBQUFBO0FBQUE7QUFDQTtBQUNBO0FBQ0E7OztBQUVBO0FBQ0E7QUFBQTtBQUFBO0FBQ0E7OztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7OztBQUVBO0FBRUE7QUFBQTtBQUFBO0FBRUE7QUFDQTtBQURBO0FBR0E7OztBQUVBO0FBQUE7QUFDQTtBQUNBO0FBQ0E7QUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQUE7QUFBQTtBQUFBO0FBQ0E7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUNBO0FBQUE7QUFDQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBR0E7Ozs7QUFoRUE7QUFtRUEiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./src/components/ProactiveInvitation.js\n");

/***/ })

}]);