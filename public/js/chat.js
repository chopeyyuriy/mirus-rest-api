/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./node_modules/@babel/runtime/helpers/esm/arrayLikeToArray.js":
/*!*********************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/esm/arrayLikeToArray.js ***!
  \*********************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ _arrayLikeToArray)
/* harmony export */ });
function _arrayLikeToArray(arr, len) {
  if (len == null || len > arr.length) len = arr.length;

  for (var i = 0, arr2 = new Array(len); i < len; i++) {
    arr2[i] = arr[i];
  }

  return arr2;
}

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/esm/arrayWithHoles.js":
/*!*******************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/esm/arrayWithHoles.js ***!
  \*******************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ _arrayWithHoles)
/* harmony export */ });
function _arrayWithHoles(arr) {
  if (Array.isArray(arr)) return arr;
}

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/esm/arrayWithoutHoles.js":
/*!**********************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/esm/arrayWithoutHoles.js ***!
  \**********************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ _arrayWithoutHoles)
/* harmony export */ });
/* harmony import */ var _arrayLikeToArray_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./arrayLikeToArray.js */ "./node_modules/@babel/runtime/helpers/esm/arrayLikeToArray.js");

function _arrayWithoutHoles(arr) {
  if (Array.isArray(arr)) return (0,_arrayLikeToArray_js__WEBPACK_IMPORTED_MODULE_0__.default)(arr);
}

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/esm/asyncToGenerator.js":
/*!*********************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/esm/asyncToGenerator.js ***!
  \*********************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ _asyncToGenerator)
/* harmony export */ });
function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) {
  try {
    var info = gen[key](arg);
    var value = info.value;
  } catch (error) {
    reject(error);
    return;
  }

  if (info.done) {
    resolve(value);
  } else {
    Promise.resolve(value).then(_next, _throw);
  }
}

function _asyncToGenerator(fn) {
  return function () {
    var self = this,
        args = arguments;
    return new Promise(function (resolve, reject) {
      var gen = fn.apply(self, args);

      function _next(value) {
        asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value);
      }

      function _throw(err) {
        asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err);
      }

      _next(undefined);
    });
  };
}

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/esm/classCallCheck.js":
/*!*******************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/esm/classCallCheck.js ***!
  \*******************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ _classCallCheck)
/* harmony export */ });
function _classCallCheck(instance, Constructor) {
  if (!(instance instanceof Constructor)) {
    throw new TypeError("Cannot call a class as a function");
  }
}

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/esm/createClass.js":
/*!****************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/esm/createClass.js ***!
  \****************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ _createClass)
/* harmony export */ });
function _defineProperties(target, props) {
  for (var i = 0; i < props.length; i++) {
    var descriptor = props[i];
    descriptor.enumerable = descriptor.enumerable || false;
    descriptor.configurable = true;
    if ("value" in descriptor) descriptor.writable = true;
    Object.defineProperty(target, descriptor.key, descriptor);
  }
}

function _createClass(Constructor, protoProps, staticProps) {
  if (protoProps) _defineProperties(Constructor.prototype, protoProps);
  if (staticProps) _defineProperties(Constructor, staticProps);
  return Constructor;
}

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/esm/defineProperty.js":
/*!*******************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/esm/defineProperty.js ***!
  \*******************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ _defineProperty)
/* harmony export */ });
function _defineProperty(obj, key, value) {
  if (key in obj) {
    Object.defineProperty(obj, key, {
      value: value,
      enumerable: true,
      configurable: true,
      writable: true
    });
  } else {
    obj[key] = value;
  }

  return obj;
}

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/esm/extends.js":
/*!************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/esm/extends.js ***!
  \************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ _extends)
/* harmony export */ });
function _extends() {
  _extends = Object.assign || function (target) {
    for (var i = 1; i < arguments.length; i++) {
      var source = arguments[i];

      for (var key in source) {
        if (Object.prototype.hasOwnProperty.call(source, key)) {
          target[key] = source[key];
        }
      }
    }

    return target;
  };

  return _extends.apply(this, arguments);
}

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/esm/iterableToArray.js":
/*!********************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/esm/iterableToArray.js ***!
  \********************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ _iterableToArray)
/* harmony export */ });
function _iterableToArray(iter) {
  if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter);
}

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/esm/iterableToArrayLimit.js":
/*!*************************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/esm/iterableToArrayLimit.js ***!
  \*************************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ _iterableToArrayLimit)
/* harmony export */ });
function _iterableToArrayLimit(arr, i) {
  var _i = arr && (typeof Symbol !== "undefined" && arr[Symbol.iterator] || arr["@@iterator"]);

  if (_i == null) return;
  var _arr = [];
  var _n = true;
  var _d = false;

  var _s, _e;

  try {
    for (_i = _i.call(arr); !(_n = (_s = _i.next()).done); _n = true) {
      _arr.push(_s.value);

      if (i && _arr.length === i) break;
    }
  } catch (err) {
    _d = true;
    _e = err;
  } finally {
    try {
      if (!_n && _i["return"] != null) _i["return"]();
    } finally {
      if (_d) throw _e;
    }
  }

  return _arr;
}

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/esm/nonIterableRest.js":
/*!********************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/esm/nonIterableRest.js ***!
  \********************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ _nonIterableRest)
/* harmony export */ });
function _nonIterableRest() {
  throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.");
}

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/esm/nonIterableSpread.js":
/*!**********************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/esm/nonIterableSpread.js ***!
  \**********************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ _nonIterableSpread)
/* harmony export */ });
function _nonIterableSpread() {
  throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.");
}

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/esm/objectWithoutProperties.js":
/*!****************************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/esm/objectWithoutProperties.js ***!
  \****************************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ _objectWithoutProperties)
/* harmony export */ });
/* harmony import */ var _objectWithoutPropertiesLoose_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./objectWithoutPropertiesLoose.js */ "./node_modules/@babel/runtime/helpers/esm/objectWithoutPropertiesLoose.js");

function _objectWithoutProperties(source, excluded) {
  if (source == null) return {};
  var target = (0,_objectWithoutPropertiesLoose_js__WEBPACK_IMPORTED_MODULE_0__.default)(source, excluded);
  var key, i;

  if (Object.getOwnPropertySymbols) {
    var sourceSymbolKeys = Object.getOwnPropertySymbols(source);

    for (i = 0; i < sourceSymbolKeys.length; i++) {
      key = sourceSymbolKeys[i];
      if (excluded.indexOf(key) >= 0) continue;
      if (!Object.prototype.propertyIsEnumerable.call(source, key)) continue;
      target[key] = source[key];
    }
  }

  return target;
}

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/esm/objectWithoutPropertiesLoose.js":
/*!*********************************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/esm/objectWithoutPropertiesLoose.js ***!
  \*********************************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ _objectWithoutPropertiesLoose)
/* harmony export */ });
function _objectWithoutPropertiesLoose(source, excluded) {
  if (source == null) return {};
  var target = {};
  var sourceKeys = Object.keys(source);
  var key, i;

  for (i = 0; i < sourceKeys.length; i++) {
    key = sourceKeys[i];
    if (excluded.indexOf(key) >= 0) continue;
    target[key] = source[key];
  }

  return target;
}

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/esm/slicedToArray.js":
/*!******************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/esm/slicedToArray.js ***!
  \******************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ _slicedToArray)
/* harmony export */ });
/* harmony import */ var _arrayWithHoles_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./arrayWithHoles.js */ "./node_modules/@babel/runtime/helpers/esm/arrayWithHoles.js");
/* harmony import */ var _iterableToArrayLimit_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./iterableToArrayLimit.js */ "./node_modules/@babel/runtime/helpers/esm/iterableToArrayLimit.js");
/* harmony import */ var _unsupportedIterableToArray_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./unsupportedIterableToArray.js */ "./node_modules/@babel/runtime/helpers/esm/unsupportedIterableToArray.js");
/* harmony import */ var _nonIterableRest_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./nonIterableRest.js */ "./node_modules/@babel/runtime/helpers/esm/nonIterableRest.js");




function _slicedToArray(arr, i) {
  return (0,_arrayWithHoles_js__WEBPACK_IMPORTED_MODULE_0__.default)(arr) || (0,_iterableToArrayLimit_js__WEBPACK_IMPORTED_MODULE_1__.default)(arr, i) || (0,_unsupportedIterableToArray_js__WEBPACK_IMPORTED_MODULE_2__.default)(arr, i) || (0,_nonIterableRest_js__WEBPACK_IMPORTED_MODULE_3__.default)();
}

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/esm/toConsumableArray.js":
/*!**********************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/esm/toConsumableArray.js ***!
  \**********************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ _toConsumableArray)
/* harmony export */ });
/* harmony import */ var _arrayWithoutHoles_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./arrayWithoutHoles.js */ "./node_modules/@babel/runtime/helpers/esm/arrayWithoutHoles.js");
/* harmony import */ var _iterableToArray_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./iterableToArray.js */ "./node_modules/@babel/runtime/helpers/esm/iterableToArray.js");
/* harmony import */ var _unsupportedIterableToArray_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./unsupportedIterableToArray.js */ "./node_modules/@babel/runtime/helpers/esm/unsupportedIterableToArray.js");
/* harmony import */ var _nonIterableSpread_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./nonIterableSpread.js */ "./node_modules/@babel/runtime/helpers/esm/nonIterableSpread.js");




function _toConsumableArray(arr) {
  return (0,_arrayWithoutHoles_js__WEBPACK_IMPORTED_MODULE_0__.default)(arr) || (0,_iterableToArray_js__WEBPACK_IMPORTED_MODULE_1__.default)(arr) || (0,_unsupportedIterableToArray_js__WEBPACK_IMPORTED_MODULE_2__.default)(arr) || (0,_nonIterableSpread_js__WEBPACK_IMPORTED_MODULE_3__.default)();
}

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/esm/typeof.js":
/*!***********************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/esm/typeof.js ***!
  \***********************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ _typeof)
/* harmony export */ });
function _typeof(obj) {
  "@babel/helpers - typeof";

  if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") {
    _typeof = function _typeof(obj) {
      return typeof obj;
    };
  } else {
    _typeof = function _typeof(obj) {
      return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj;
    };
  }

  return _typeof(obj);
}

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/esm/unsupportedIterableToArray.js":
/*!*******************************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/esm/unsupportedIterableToArray.js ***!
  \*******************************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ _unsupportedIterableToArray)
/* harmony export */ });
/* harmony import */ var _arrayLikeToArray_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./arrayLikeToArray.js */ "./node_modules/@babel/runtime/helpers/esm/arrayLikeToArray.js");

function _unsupportedIterableToArray(o, minLen) {
  if (!o) return;
  if (typeof o === "string") return (0,_arrayLikeToArray_js__WEBPACK_IMPORTED_MODULE_0__.default)(o, minLen);
  var n = Object.prototype.toString.call(o).slice(8, -1);
  if (n === "Object" && o.constructor) n = o.constructor.name;
  if (n === "Map" || n === "Set") return Array.from(o);
  if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return (0,_arrayLikeToArray_js__WEBPACK_IMPORTED_MODULE_0__.default)(o, minLen);
}

/***/ }),

/***/ "./node_modules/@babel/runtime/regenerator/index.js":
/*!**********************************************************!*\
  !*** ./node_modules/@babel/runtime/regenerator/index.js ***!
  \**********************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

module.exports = __webpack_require__(/*! regenerator-runtime */ "./node_modules/regenerator-runtime/runtime.js");


/***/ }),

/***/ "./node_modules/axios/index.js":
/*!*************************************!*\
  !*** ./node_modules/axios/index.js ***!
  \*************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

module.exports = __webpack_require__(/*! ./lib/axios */ "./node_modules/axios/lib/axios.js");

/***/ }),

/***/ "./node_modules/axios/lib/adapters/xhr.js":
/*!************************************************!*\
  !*** ./node_modules/axios/lib/adapters/xhr.js ***!
  \************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

"use strict";


var utils = __webpack_require__(/*! ./../utils */ "./node_modules/axios/lib/utils.js");
var settle = __webpack_require__(/*! ./../core/settle */ "./node_modules/axios/lib/core/settle.js");
var cookies = __webpack_require__(/*! ./../helpers/cookies */ "./node_modules/axios/lib/helpers/cookies.js");
var buildURL = __webpack_require__(/*! ./../helpers/buildURL */ "./node_modules/axios/lib/helpers/buildURL.js");
var buildFullPath = __webpack_require__(/*! ../core/buildFullPath */ "./node_modules/axios/lib/core/buildFullPath.js");
var parseHeaders = __webpack_require__(/*! ./../helpers/parseHeaders */ "./node_modules/axios/lib/helpers/parseHeaders.js");
var isURLSameOrigin = __webpack_require__(/*! ./../helpers/isURLSameOrigin */ "./node_modules/axios/lib/helpers/isURLSameOrigin.js");
var createError = __webpack_require__(/*! ../core/createError */ "./node_modules/axios/lib/core/createError.js");

module.exports = function xhrAdapter(config) {
  return new Promise(function dispatchXhrRequest(resolve, reject) {
    var requestData = config.data;
    var requestHeaders = config.headers;

    if (utils.isFormData(requestData)) {
      delete requestHeaders['Content-Type']; // Let the browser set it
    }

    var request = new XMLHttpRequest();

    // HTTP basic authentication
    if (config.auth) {
      var username = config.auth.username || '';
      var password = config.auth.password ? unescape(encodeURIComponent(config.auth.password)) : '';
      requestHeaders.Authorization = 'Basic ' + btoa(username + ':' + password);
    }

    var fullPath = buildFullPath(config.baseURL, config.url);
    request.open(config.method.toUpperCase(), buildURL(fullPath, config.params, config.paramsSerializer), true);

    // Set the request timeout in MS
    request.timeout = config.timeout;

    // Listen for ready state
    request.onreadystatechange = function handleLoad() {
      if (!request || request.readyState !== 4) {
        return;
      }

      // The request errored out and we didn't get a response, this will be
      // handled by onerror instead
      // With one exception: request that using file: protocol, most browsers
      // will return status as 0 even though it's a successful request
      if (request.status === 0 && !(request.responseURL && request.responseURL.indexOf('file:') === 0)) {
        return;
      }

      // Prepare the response
      var responseHeaders = 'getAllResponseHeaders' in request ? parseHeaders(request.getAllResponseHeaders()) : null;
      var responseData = !config.responseType || config.responseType === 'text' ? request.responseText : request.response;
      var response = {
        data: responseData,
        status: request.status,
        statusText: request.statusText,
        headers: responseHeaders,
        config: config,
        request: request
      };

      settle(resolve, reject, response);

      // Clean up request
      request = null;
    };

    // Handle browser request cancellation (as opposed to a manual cancellation)
    request.onabort = function handleAbort() {
      if (!request) {
        return;
      }

      reject(createError('Request aborted', config, 'ECONNABORTED', request));

      // Clean up request
      request = null;
    };

    // Handle low level network errors
    request.onerror = function handleError() {
      // Real errors are hidden from us by the browser
      // onerror should only fire if it's a network error
      reject(createError('Network Error', config, null, request));

      // Clean up request
      request = null;
    };

    // Handle timeout
    request.ontimeout = function handleTimeout() {
      var timeoutErrorMessage = 'timeout of ' + config.timeout + 'ms exceeded';
      if (config.timeoutErrorMessage) {
        timeoutErrorMessage = config.timeoutErrorMessage;
      }
      reject(createError(timeoutErrorMessage, config, 'ECONNABORTED',
        request));

      // Clean up request
      request = null;
    };

    // Add xsrf header
    // This is only done if running in a standard browser environment.
    // Specifically not if we're in a web worker, or react-native.
    if (utils.isStandardBrowserEnv()) {
      // Add xsrf header
      var xsrfValue = (config.withCredentials || isURLSameOrigin(fullPath)) && config.xsrfCookieName ?
        cookies.read(config.xsrfCookieName) :
        undefined;

      if (xsrfValue) {
        requestHeaders[config.xsrfHeaderName] = xsrfValue;
      }
    }

    // Add headers to the request
    if ('setRequestHeader' in request) {
      utils.forEach(requestHeaders, function setRequestHeader(val, key) {
        if (typeof requestData === 'undefined' && key.toLowerCase() === 'content-type') {
          // Remove Content-Type if data is undefined
          delete requestHeaders[key];
        } else {
          // Otherwise add header to the request
          request.setRequestHeader(key, val);
        }
      });
    }

    // Add withCredentials to request if needed
    if (!utils.isUndefined(config.withCredentials)) {
      request.withCredentials = !!config.withCredentials;
    }

    // Add responseType to request if needed
    if (config.responseType) {
      try {
        request.responseType = config.responseType;
      } catch (e) {
        // Expected DOMException thrown by browsers not compatible XMLHttpRequest Level 2.
        // But, this can be suppressed for 'json' type as it can be parsed by default 'transformResponse' function.
        if (config.responseType !== 'json') {
          throw e;
        }
      }
    }

    // Handle progress if needed
    if (typeof config.onDownloadProgress === 'function') {
      request.addEventListener('progress', config.onDownloadProgress);
    }

    // Not all browsers support upload events
    if (typeof config.onUploadProgress === 'function' && request.upload) {
      request.upload.addEventListener('progress', config.onUploadProgress);
    }

    if (config.cancelToken) {
      // Handle cancellation
      config.cancelToken.promise.then(function onCanceled(cancel) {
        if (!request) {
          return;
        }

        request.abort();
        reject(cancel);
        // Clean up request
        request = null;
      });
    }

    if (!requestData) {
      requestData = null;
    }

    // Send the request
    request.send(requestData);
  });
};


/***/ }),

/***/ "./node_modules/axios/lib/axios.js":
/*!*****************************************!*\
  !*** ./node_modules/axios/lib/axios.js ***!
  \*****************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

"use strict";


var utils = __webpack_require__(/*! ./utils */ "./node_modules/axios/lib/utils.js");
var bind = __webpack_require__(/*! ./helpers/bind */ "./node_modules/axios/lib/helpers/bind.js");
var Axios = __webpack_require__(/*! ./core/Axios */ "./node_modules/axios/lib/core/Axios.js");
var mergeConfig = __webpack_require__(/*! ./core/mergeConfig */ "./node_modules/axios/lib/core/mergeConfig.js");
var defaults = __webpack_require__(/*! ./defaults */ "./node_modules/axios/lib/defaults.js");

/**
 * Create an instance of Axios
 *
 * @param {Object} defaultConfig The default config for the instance
 * @return {Axios} A new instance of Axios
 */
function createInstance(defaultConfig) {
  var context = new Axios(defaultConfig);
  var instance = bind(Axios.prototype.request, context);

  // Copy axios.prototype to instance
  utils.extend(instance, Axios.prototype, context);

  // Copy context to instance
  utils.extend(instance, context);

  return instance;
}

// Create the default instance to be exported
var axios = createInstance(defaults);

// Expose Axios class to allow class inheritance
axios.Axios = Axios;

// Factory for creating new instances
axios.create = function create(instanceConfig) {
  return createInstance(mergeConfig(axios.defaults, instanceConfig));
};

// Expose Cancel & CancelToken
axios.Cancel = __webpack_require__(/*! ./cancel/Cancel */ "./node_modules/axios/lib/cancel/Cancel.js");
axios.CancelToken = __webpack_require__(/*! ./cancel/CancelToken */ "./node_modules/axios/lib/cancel/CancelToken.js");
axios.isCancel = __webpack_require__(/*! ./cancel/isCancel */ "./node_modules/axios/lib/cancel/isCancel.js");

// Expose all/spread
axios.all = function all(promises) {
  return Promise.all(promises);
};
axios.spread = __webpack_require__(/*! ./helpers/spread */ "./node_modules/axios/lib/helpers/spread.js");

// Expose isAxiosError
axios.isAxiosError = __webpack_require__(/*! ./helpers/isAxiosError */ "./node_modules/axios/lib/helpers/isAxiosError.js");

module.exports = axios;

// Allow use of default import syntax in TypeScript
module.exports.default = axios;


/***/ }),

/***/ "./node_modules/axios/lib/cancel/Cancel.js":
/*!*************************************************!*\
  !*** ./node_modules/axios/lib/cancel/Cancel.js ***!
  \*************************************************/
/***/ ((module) => {

"use strict";


/**
 * A `Cancel` is an object that is thrown when an operation is canceled.
 *
 * @class
 * @param {string=} message The message.
 */
function Cancel(message) {
  this.message = message;
}

Cancel.prototype.toString = function toString() {
  return 'Cancel' + (this.message ? ': ' + this.message : '');
};

Cancel.prototype.__CANCEL__ = true;

module.exports = Cancel;


/***/ }),

/***/ "./node_modules/axios/lib/cancel/CancelToken.js":
/*!******************************************************!*\
  !*** ./node_modules/axios/lib/cancel/CancelToken.js ***!
  \******************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

"use strict";


var Cancel = __webpack_require__(/*! ./Cancel */ "./node_modules/axios/lib/cancel/Cancel.js");

/**
 * A `CancelToken` is an object that can be used to request cancellation of an operation.
 *
 * @class
 * @param {Function} executor The executor function.
 */
function CancelToken(executor) {
  if (typeof executor !== 'function') {
    throw new TypeError('executor must be a function.');
  }

  var resolvePromise;
  this.promise = new Promise(function promiseExecutor(resolve) {
    resolvePromise = resolve;
  });

  var token = this;
  executor(function cancel(message) {
    if (token.reason) {
      // Cancellation has already been requested
      return;
    }

    token.reason = new Cancel(message);
    resolvePromise(token.reason);
  });
}

/**
 * Throws a `Cancel` if cancellation has been requested.
 */
CancelToken.prototype.throwIfRequested = function throwIfRequested() {
  if (this.reason) {
    throw this.reason;
  }
};

/**
 * Returns an object that contains a new `CancelToken` and a function that, when called,
 * cancels the `CancelToken`.
 */
CancelToken.source = function source() {
  var cancel;
  var token = new CancelToken(function executor(c) {
    cancel = c;
  });
  return {
    token: token,
    cancel: cancel
  };
};

module.exports = CancelToken;


/***/ }),

/***/ "./node_modules/axios/lib/cancel/isCancel.js":
/*!***************************************************!*\
  !*** ./node_modules/axios/lib/cancel/isCancel.js ***!
  \***************************************************/
/***/ ((module) => {

"use strict";


module.exports = function isCancel(value) {
  return !!(value && value.__CANCEL__);
};


/***/ }),

/***/ "./node_modules/axios/lib/core/Axios.js":
/*!**********************************************!*\
  !*** ./node_modules/axios/lib/core/Axios.js ***!
  \**********************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

"use strict";


var utils = __webpack_require__(/*! ./../utils */ "./node_modules/axios/lib/utils.js");
var buildURL = __webpack_require__(/*! ../helpers/buildURL */ "./node_modules/axios/lib/helpers/buildURL.js");
var InterceptorManager = __webpack_require__(/*! ./InterceptorManager */ "./node_modules/axios/lib/core/InterceptorManager.js");
var dispatchRequest = __webpack_require__(/*! ./dispatchRequest */ "./node_modules/axios/lib/core/dispatchRequest.js");
var mergeConfig = __webpack_require__(/*! ./mergeConfig */ "./node_modules/axios/lib/core/mergeConfig.js");

/**
 * Create a new instance of Axios
 *
 * @param {Object} instanceConfig The default config for the instance
 */
function Axios(instanceConfig) {
  this.defaults = instanceConfig;
  this.interceptors = {
    request: new InterceptorManager(),
    response: new InterceptorManager()
  };
}

/**
 * Dispatch a request
 *
 * @param {Object} config The config specific for this request (merged with this.defaults)
 */
Axios.prototype.request = function request(config) {
  /*eslint no-param-reassign:0*/
  // Allow for axios('example/url'[, config]) a la fetch API
  if (typeof config === 'string') {
    config = arguments[1] || {};
    config.url = arguments[0];
  } else {
    config = config || {};
  }

  config = mergeConfig(this.defaults, config);

  // Set config.method
  if (config.method) {
    config.method = config.method.toLowerCase();
  } else if (this.defaults.method) {
    config.method = this.defaults.method.toLowerCase();
  } else {
    config.method = 'get';
  }

  // Hook up interceptors middleware
  var chain = [dispatchRequest, undefined];
  var promise = Promise.resolve(config);

  this.interceptors.request.forEach(function unshiftRequestInterceptors(interceptor) {
    chain.unshift(interceptor.fulfilled, interceptor.rejected);
  });

  this.interceptors.response.forEach(function pushResponseInterceptors(interceptor) {
    chain.push(interceptor.fulfilled, interceptor.rejected);
  });

  while (chain.length) {
    promise = promise.then(chain.shift(), chain.shift());
  }

  return promise;
};

Axios.prototype.getUri = function getUri(config) {
  config = mergeConfig(this.defaults, config);
  return buildURL(config.url, config.params, config.paramsSerializer).replace(/^\?/, '');
};

// Provide aliases for supported request methods
utils.forEach(['delete', 'get', 'head', 'options'], function forEachMethodNoData(method) {
  /*eslint func-names:0*/
  Axios.prototype[method] = function(url, config) {
    return this.request(mergeConfig(config || {}, {
      method: method,
      url: url,
      data: (config || {}).data
    }));
  };
});

utils.forEach(['post', 'put', 'patch'], function forEachMethodWithData(method) {
  /*eslint func-names:0*/
  Axios.prototype[method] = function(url, data, config) {
    return this.request(mergeConfig(config || {}, {
      method: method,
      url: url,
      data: data
    }));
  };
});

module.exports = Axios;


/***/ }),

/***/ "./node_modules/axios/lib/core/InterceptorManager.js":
/*!***********************************************************!*\
  !*** ./node_modules/axios/lib/core/InterceptorManager.js ***!
  \***********************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

"use strict";


var utils = __webpack_require__(/*! ./../utils */ "./node_modules/axios/lib/utils.js");

function InterceptorManager() {
  this.handlers = [];
}

/**
 * Add a new interceptor to the stack
 *
 * @param {Function} fulfilled The function to handle `then` for a `Promise`
 * @param {Function} rejected The function to handle `reject` for a `Promise`
 *
 * @return {Number} An ID used to remove interceptor later
 */
InterceptorManager.prototype.use = function use(fulfilled, rejected) {
  this.handlers.push({
    fulfilled: fulfilled,
    rejected: rejected
  });
  return this.handlers.length - 1;
};

/**
 * Remove an interceptor from the stack
 *
 * @param {Number} id The ID that was returned by `use`
 */
InterceptorManager.prototype.eject = function eject(id) {
  if (this.handlers[id]) {
    this.handlers[id] = null;
  }
};

/**
 * Iterate over all the registered interceptors
 *
 * This method is particularly useful for skipping over any
 * interceptors that may have become `null` calling `eject`.
 *
 * @param {Function} fn The function to call for each interceptor
 */
InterceptorManager.prototype.forEach = function forEach(fn) {
  utils.forEach(this.handlers, function forEachHandler(h) {
    if (h !== null) {
      fn(h);
    }
  });
};

module.exports = InterceptorManager;


/***/ }),

/***/ "./node_modules/axios/lib/core/buildFullPath.js":
/*!******************************************************!*\
  !*** ./node_modules/axios/lib/core/buildFullPath.js ***!
  \******************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

"use strict";


var isAbsoluteURL = __webpack_require__(/*! ../helpers/isAbsoluteURL */ "./node_modules/axios/lib/helpers/isAbsoluteURL.js");
var combineURLs = __webpack_require__(/*! ../helpers/combineURLs */ "./node_modules/axios/lib/helpers/combineURLs.js");

/**
 * Creates a new URL by combining the baseURL with the requestedURL,
 * only when the requestedURL is not already an absolute URL.
 * If the requestURL is absolute, this function returns the requestedURL untouched.
 *
 * @param {string} baseURL The base URL
 * @param {string} requestedURL Absolute or relative URL to combine
 * @returns {string} The combined full path
 */
module.exports = function buildFullPath(baseURL, requestedURL) {
  if (baseURL && !isAbsoluteURL(requestedURL)) {
    return combineURLs(baseURL, requestedURL);
  }
  return requestedURL;
};


/***/ }),

/***/ "./node_modules/axios/lib/core/createError.js":
/*!****************************************************!*\
  !*** ./node_modules/axios/lib/core/createError.js ***!
  \****************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

"use strict";


var enhanceError = __webpack_require__(/*! ./enhanceError */ "./node_modules/axios/lib/core/enhanceError.js");

/**
 * Create an Error with the specified message, config, error code, request and response.
 *
 * @param {string} message The error message.
 * @param {Object} config The config.
 * @param {string} [code] The error code (for example, 'ECONNABORTED').
 * @param {Object} [request] The request.
 * @param {Object} [response] The response.
 * @returns {Error} The created error.
 */
module.exports = function createError(message, config, code, request, response) {
  var error = new Error(message);
  return enhanceError(error, config, code, request, response);
};


/***/ }),

/***/ "./node_modules/axios/lib/core/dispatchRequest.js":
/*!********************************************************!*\
  !*** ./node_modules/axios/lib/core/dispatchRequest.js ***!
  \********************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

"use strict";


var utils = __webpack_require__(/*! ./../utils */ "./node_modules/axios/lib/utils.js");
var transformData = __webpack_require__(/*! ./transformData */ "./node_modules/axios/lib/core/transformData.js");
var isCancel = __webpack_require__(/*! ../cancel/isCancel */ "./node_modules/axios/lib/cancel/isCancel.js");
var defaults = __webpack_require__(/*! ../defaults */ "./node_modules/axios/lib/defaults.js");

/**
 * Throws a `Cancel` if cancellation has been requested.
 */
function throwIfCancellationRequested(config) {
  if (config.cancelToken) {
    config.cancelToken.throwIfRequested();
  }
}

/**
 * Dispatch a request to the server using the configured adapter.
 *
 * @param {object} config The config that is to be used for the request
 * @returns {Promise} The Promise to be fulfilled
 */
module.exports = function dispatchRequest(config) {
  throwIfCancellationRequested(config);

  // Ensure headers exist
  config.headers = config.headers || {};

  // Transform request data
  config.data = transformData(
    config.data,
    config.headers,
    config.transformRequest
  );

  // Flatten headers
  config.headers = utils.merge(
    config.headers.common || {},
    config.headers[config.method] || {},
    config.headers
  );

  utils.forEach(
    ['delete', 'get', 'head', 'post', 'put', 'patch', 'common'],
    function cleanHeaderConfig(method) {
      delete config.headers[method];
    }
  );

  var adapter = config.adapter || defaults.adapter;

  return adapter(config).then(function onAdapterResolution(response) {
    throwIfCancellationRequested(config);

    // Transform response data
    response.data = transformData(
      response.data,
      response.headers,
      config.transformResponse
    );

    return response;
  }, function onAdapterRejection(reason) {
    if (!isCancel(reason)) {
      throwIfCancellationRequested(config);

      // Transform response data
      if (reason && reason.response) {
        reason.response.data = transformData(
          reason.response.data,
          reason.response.headers,
          config.transformResponse
        );
      }
    }

    return Promise.reject(reason);
  });
};


/***/ }),

/***/ "./node_modules/axios/lib/core/enhanceError.js":
/*!*****************************************************!*\
  !*** ./node_modules/axios/lib/core/enhanceError.js ***!
  \*****************************************************/
/***/ ((module) => {

"use strict";


/**
 * Update an Error with the specified config, error code, and response.
 *
 * @param {Error} error The error to update.
 * @param {Object} config The config.
 * @param {string} [code] The error code (for example, 'ECONNABORTED').
 * @param {Object} [request] The request.
 * @param {Object} [response] The response.
 * @returns {Error} The error.
 */
module.exports = function enhanceError(error, config, code, request, response) {
  error.config = config;
  if (code) {
    error.code = code;
  }

  error.request = request;
  error.response = response;
  error.isAxiosError = true;

  error.toJSON = function toJSON() {
    return {
      // Standard
      message: this.message,
      name: this.name,
      // Microsoft
      description: this.description,
      number: this.number,
      // Mozilla
      fileName: this.fileName,
      lineNumber: this.lineNumber,
      columnNumber: this.columnNumber,
      stack: this.stack,
      // Axios
      config: this.config,
      code: this.code
    };
  };
  return error;
};


/***/ }),

/***/ "./node_modules/axios/lib/core/mergeConfig.js":
/*!****************************************************!*\
  !*** ./node_modules/axios/lib/core/mergeConfig.js ***!
  \****************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

"use strict";


var utils = __webpack_require__(/*! ../utils */ "./node_modules/axios/lib/utils.js");

/**
 * Config-specific merge-function which creates a new config-object
 * by merging two configuration objects together.
 *
 * @param {Object} config1
 * @param {Object} config2
 * @returns {Object} New object resulting from merging config2 to config1
 */
module.exports = function mergeConfig(config1, config2) {
  // eslint-disable-next-line no-param-reassign
  config2 = config2 || {};
  var config = {};

  var valueFromConfig2Keys = ['url', 'method', 'data'];
  var mergeDeepPropertiesKeys = ['headers', 'auth', 'proxy', 'params'];
  var defaultToConfig2Keys = [
    'baseURL', 'transformRequest', 'transformResponse', 'paramsSerializer',
    'timeout', 'timeoutMessage', 'withCredentials', 'adapter', 'responseType', 'xsrfCookieName',
    'xsrfHeaderName', 'onUploadProgress', 'onDownloadProgress', 'decompress',
    'maxContentLength', 'maxBodyLength', 'maxRedirects', 'transport', 'httpAgent',
    'httpsAgent', 'cancelToken', 'socketPath', 'responseEncoding'
  ];
  var directMergeKeys = ['validateStatus'];

  function getMergedValue(target, source) {
    if (utils.isPlainObject(target) && utils.isPlainObject(source)) {
      return utils.merge(target, source);
    } else if (utils.isPlainObject(source)) {
      return utils.merge({}, source);
    } else if (utils.isArray(source)) {
      return source.slice();
    }
    return source;
  }

  function mergeDeepProperties(prop) {
    if (!utils.isUndefined(config2[prop])) {
      config[prop] = getMergedValue(config1[prop], config2[prop]);
    } else if (!utils.isUndefined(config1[prop])) {
      config[prop] = getMergedValue(undefined, config1[prop]);
    }
  }

  utils.forEach(valueFromConfig2Keys, function valueFromConfig2(prop) {
    if (!utils.isUndefined(config2[prop])) {
      config[prop] = getMergedValue(undefined, config2[prop]);
    }
  });

  utils.forEach(mergeDeepPropertiesKeys, mergeDeepProperties);

  utils.forEach(defaultToConfig2Keys, function defaultToConfig2(prop) {
    if (!utils.isUndefined(config2[prop])) {
      config[prop] = getMergedValue(undefined, config2[prop]);
    } else if (!utils.isUndefined(config1[prop])) {
      config[prop] = getMergedValue(undefined, config1[prop]);
    }
  });

  utils.forEach(directMergeKeys, function merge(prop) {
    if (prop in config2) {
      config[prop] = getMergedValue(config1[prop], config2[prop]);
    } else if (prop in config1) {
      config[prop] = getMergedValue(undefined, config1[prop]);
    }
  });

  var axiosKeys = valueFromConfig2Keys
    .concat(mergeDeepPropertiesKeys)
    .concat(defaultToConfig2Keys)
    .concat(directMergeKeys);

  var otherKeys = Object
    .keys(config1)
    .concat(Object.keys(config2))
    .filter(function filterAxiosKeys(key) {
      return axiosKeys.indexOf(key) === -1;
    });

  utils.forEach(otherKeys, mergeDeepProperties);

  return config;
};


/***/ }),

/***/ "./node_modules/axios/lib/core/settle.js":
/*!***********************************************!*\
  !*** ./node_modules/axios/lib/core/settle.js ***!
  \***********************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

"use strict";


var createError = __webpack_require__(/*! ./createError */ "./node_modules/axios/lib/core/createError.js");

/**
 * Resolve or reject a Promise based on response status.
 *
 * @param {Function} resolve A function that resolves the promise.
 * @param {Function} reject A function that rejects the promise.
 * @param {object} response The response.
 */
module.exports = function settle(resolve, reject, response) {
  var validateStatus = response.config.validateStatus;
  if (!response.status || !validateStatus || validateStatus(response.status)) {
    resolve(response);
  } else {
    reject(createError(
      'Request failed with status code ' + response.status,
      response.config,
      null,
      response.request,
      response
    ));
  }
};


/***/ }),

/***/ "./node_modules/axios/lib/core/transformData.js":
/*!******************************************************!*\
  !*** ./node_modules/axios/lib/core/transformData.js ***!
  \******************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

"use strict";


var utils = __webpack_require__(/*! ./../utils */ "./node_modules/axios/lib/utils.js");

/**
 * Transform the data for a request or a response
 *
 * @param {Object|String} data The data to be transformed
 * @param {Array} headers The headers for the request or response
 * @param {Array|Function} fns A single function or Array of functions
 * @returns {*} The resulting transformed data
 */
module.exports = function transformData(data, headers, fns) {
  /*eslint no-param-reassign:0*/
  utils.forEach(fns, function transform(fn) {
    data = fn(data, headers);
  });

  return data;
};


/***/ }),

/***/ "./node_modules/axios/lib/defaults.js":
/*!********************************************!*\
  !*** ./node_modules/axios/lib/defaults.js ***!
  \********************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

"use strict";
/* provided dependency */ var process = __webpack_require__(/*! process/browser */ "./node_modules/process/browser.js");


var utils = __webpack_require__(/*! ./utils */ "./node_modules/axios/lib/utils.js");
var normalizeHeaderName = __webpack_require__(/*! ./helpers/normalizeHeaderName */ "./node_modules/axios/lib/helpers/normalizeHeaderName.js");

var DEFAULT_CONTENT_TYPE = {
  'Content-Type': 'application/x-www-form-urlencoded'
};

function setContentTypeIfUnset(headers, value) {
  if (!utils.isUndefined(headers) && utils.isUndefined(headers['Content-Type'])) {
    headers['Content-Type'] = value;
  }
}

function getDefaultAdapter() {
  var adapter;
  if (typeof XMLHttpRequest !== 'undefined') {
    // For browsers use XHR adapter
    adapter = __webpack_require__(/*! ./adapters/xhr */ "./node_modules/axios/lib/adapters/xhr.js");
  } else if (typeof process !== 'undefined' && Object.prototype.toString.call(process) === '[object process]') {
    // For node use HTTP adapter
    adapter = __webpack_require__(/*! ./adapters/http */ "./node_modules/axios/lib/adapters/xhr.js");
  }
  return adapter;
}

var defaults = {
  adapter: getDefaultAdapter(),

  transformRequest: [function transformRequest(data, headers) {
    normalizeHeaderName(headers, 'Accept');
    normalizeHeaderName(headers, 'Content-Type');
    if (utils.isFormData(data) ||
      utils.isArrayBuffer(data) ||
      utils.isBuffer(data) ||
      utils.isStream(data) ||
      utils.isFile(data) ||
      utils.isBlob(data)
    ) {
      return data;
    }
    if (utils.isArrayBufferView(data)) {
      return data.buffer;
    }
    if (utils.isURLSearchParams(data)) {
      setContentTypeIfUnset(headers, 'application/x-www-form-urlencoded;charset=utf-8');
      return data.toString();
    }
    if (utils.isObject(data)) {
      setContentTypeIfUnset(headers, 'application/json;charset=utf-8');
      return JSON.stringify(data);
    }
    return data;
  }],

  transformResponse: [function transformResponse(data) {
    /*eslint no-param-reassign:0*/
    if (typeof data === 'string') {
      try {
        data = JSON.parse(data);
      } catch (e) { /* Ignore */ }
    }
    return data;
  }],

  /**
   * A timeout in milliseconds to abort a request. If set to 0 (default) a
   * timeout is not created.
   */
  timeout: 0,

  xsrfCookieName: 'XSRF-TOKEN',
  xsrfHeaderName: 'X-XSRF-TOKEN',

  maxContentLength: -1,
  maxBodyLength: -1,

  validateStatus: function validateStatus(status) {
    return status >= 200 && status < 300;
  }
};

defaults.headers = {
  common: {
    'Accept': 'application/json, text/plain, */*'
  }
};

utils.forEach(['delete', 'get', 'head'], function forEachMethodNoData(method) {
  defaults.headers[method] = {};
});

utils.forEach(['post', 'put', 'patch'], function forEachMethodWithData(method) {
  defaults.headers[method] = utils.merge(DEFAULT_CONTENT_TYPE);
});

module.exports = defaults;


/***/ }),

/***/ "./node_modules/axios/lib/helpers/bind.js":
/*!************************************************!*\
  !*** ./node_modules/axios/lib/helpers/bind.js ***!
  \************************************************/
/***/ ((module) => {

"use strict";


module.exports = function bind(fn, thisArg) {
  return function wrap() {
    var args = new Array(arguments.length);
    for (var i = 0; i < args.length; i++) {
      args[i] = arguments[i];
    }
    return fn.apply(thisArg, args);
  };
};


/***/ }),

/***/ "./node_modules/axios/lib/helpers/buildURL.js":
/*!****************************************************!*\
  !*** ./node_modules/axios/lib/helpers/buildURL.js ***!
  \****************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

"use strict";


var utils = __webpack_require__(/*! ./../utils */ "./node_modules/axios/lib/utils.js");

function encode(val) {
  return encodeURIComponent(val).
    replace(/%3A/gi, ':').
    replace(/%24/g, '$').
    replace(/%2C/gi, ',').
    replace(/%20/g, '+').
    replace(/%5B/gi, '[').
    replace(/%5D/gi, ']');
}

/**
 * Build a URL by appending params to the end
 *
 * @param {string} url The base of the url (e.g., http://www.google.com)
 * @param {object} [params] The params to be appended
 * @returns {string} The formatted url
 */
module.exports = function buildURL(url, params, paramsSerializer) {
  /*eslint no-param-reassign:0*/
  if (!params) {
    return url;
  }

  var serializedParams;
  if (paramsSerializer) {
    serializedParams = paramsSerializer(params);
  } else if (utils.isURLSearchParams(params)) {
    serializedParams = params.toString();
  } else {
    var parts = [];

    utils.forEach(params, function serialize(val, key) {
      if (val === null || typeof val === 'undefined') {
        return;
      }

      if (utils.isArray(val)) {
        key = key + '[]';
      } else {
        val = [val];
      }

      utils.forEach(val, function parseValue(v) {
        if (utils.isDate(v)) {
          v = v.toISOString();
        } else if (utils.isObject(v)) {
          v = JSON.stringify(v);
        }
        parts.push(encode(key) + '=' + encode(v));
      });
    });

    serializedParams = parts.join('&');
  }

  if (serializedParams) {
    var hashmarkIndex = url.indexOf('#');
    if (hashmarkIndex !== -1) {
      url = url.slice(0, hashmarkIndex);
    }

    url += (url.indexOf('?') === -1 ? '?' : '&') + serializedParams;
  }

  return url;
};


/***/ }),

/***/ "./node_modules/axios/lib/helpers/combineURLs.js":
/*!*******************************************************!*\
  !*** ./node_modules/axios/lib/helpers/combineURLs.js ***!
  \*******************************************************/
/***/ ((module) => {

"use strict";


/**
 * Creates a new URL by combining the specified URLs
 *
 * @param {string} baseURL The base URL
 * @param {string} relativeURL The relative URL
 * @returns {string} The combined URL
 */
module.exports = function combineURLs(baseURL, relativeURL) {
  return relativeURL
    ? baseURL.replace(/\/+$/, '') + '/' + relativeURL.replace(/^\/+/, '')
    : baseURL;
};


/***/ }),

/***/ "./node_modules/axios/lib/helpers/cookies.js":
/*!***************************************************!*\
  !*** ./node_modules/axios/lib/helpers/cookies.js ***!
  \***************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

"use strict";


var utils = __webpack_require__(/*! ./../utils */ "./node_modules/axios/lib/utils.js");

module.exports = (
  utils.isStandardBrowserEnv() ?

  // Standard browser envs support document.cookie
    (function standardBrowserEnv() {
      return {
        write: function write(name, value, expires, path, domain, secure) {
          var cookie = [];
          cookie.push(name + '=' + encodeURIComponent(value));

          if (utils.isNumber(expires)) {
            cookie.push('expires=' + new Date(expires).toGMTString());
          }

          if (utils.isString(path)) {
            cookie.push('path=' + path);
          }

          if (utils.isString(domain)) {
            cookie.push('domain=' + domain);
          }

          if (secure === true) {
            cookie.push('secure');
          }

          document.cookie = cookie.join('; ');
        },

        read: function read(name) {
          var match = document.cookie.match(new RegExp('(^|;\\s*)(' + name + ')=([^;]*)'));
          return (match ? decodeURIComponent(match[3]) : null);
        },

        remove: function remove(name) {
          this.write(name, '', Date.now() - 86400000);
        }
      };
    })() :

  // Non standard browser env (web workers, react-native) lack needed support.
    (function nonStandardBrowserEnv() {
      return {
        write: function write() {},
        read: function read() { return null; },
        remove: function remove() {}
      };
    })()
);


/***/ }),

/***/ "./node_modules/axios/lib/helpers/isAbsoluteURL.js":
/*!*********************************************************!*\
  !*** ./node_modules/axios/lib/helpers/isAbsoluteURL.js ***!
  \*********************************************************/
/***/ ((module) => {

"use strict";


/**
 * Determines whether the specified URL is absolute
 *
 * @param {string} url The URL to test
 * @returns {boolean} True if the specified URL is absolute, otherwise false
 */
module.exports = function isAbsoluteURL(url) {
  // A URL is considered absolute if it begins with "<scheme>://" or "//" (protocol-relative URL).
  // RFC 3986 defines scheme name as a sequence of characters beginning with a letter and followed
  // by any combination of letters, digits, plus, period, or hyphen.
  return /^([a-z][a-z\d\+\-\.]*:)?\/\//i.test(url);
};


/***/ }),

/***/ "./node_modules/axios/lib/helpers/isAxiosError.js":
/*!********************************************************!*\
  !*** ./node_modules/axios/lib/helpers/isAxiosError.js ***!
  \********************************************************/
/***/ ((module) => {

"use strict";


/**
 * Determines whether the payload is an error thrown by Axios
 *
 * @param {*} payload The value to test
 * @returns {boolean} True if the payload is an error thrown by Axios, otherwise false
 */
module.exports = function isAxiosError(payload) {
  return (typeof payload === 'object') && (payload.isAxiosError === true);
};


/***/ }),

/***/ "./node_modules/axios/lib/helpers/isURLSameOrigin.js":
/*!***********************************************************!*\
  !*** ./node_modules/axios/lib/helpers/isURLSameOrigin.js ***!
  \***********************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

"use strict";


var utils = __webpack_require__(/*! ./../utils */ "./node_modules/axios/lib/utils.js");

module.exports = (
  utils.isStandardBrowserEnv() ?

  // Standard browser envs have full support of the APIs needed to test
  // whether the request URL is of the same origin as current location.
    (function standardBrowserEnv() {
      var msie = /(msie|trident)/i.test(navigator.userAgent);
      var urlParsingNode = document.createElement('a');
      var originURL;

      /**
    * Parse a URL to discover it's components
    *
    * @param {String} url The URL to be parsed
    * @returns {Object}
    */
      function resolveURL(url) {
        var href = url;

        if (msie) {
        // IE needs attribute set twice to normalize properties
          urlParsingNode.setAttribute('href', href);
          href = urlParsingNode.href;
        }

        urlParsingNode.setAttribute('href', href);

        // urlParsingNode provides the UrlUtils interface - http://url.spec.whatwg.org/#urlutils
        return {
          href: urlParsingNode.href,
          protocol: urlParsingNode.protocol ? urlParsingNode.protocol.replace(/:$/, '') : '',
          host: urlParsingNode.host,
          search: urlParsingNode.search ? urlParsingNode.search.replace(/^\?/, '') : '',
          hash: urlParsingNode.hash ? urlParsingNode.hash.replace(/^#/, '') : '',
          hostname: urlParsingNode.hostname,
          port: urlParsingNode.port,
          pathname: (urlParsingNode.pathname.charAt(0) === '/') ?
            urlParsingNode.pathname :
            '/' + urlParsingNode.pathname
        };
      }

      originURL = resolveURL(window.location.href);

      /**
    * Determine if a URL shares the same origin as the current location
    *
    * @param {String} requestURL The URL to test
    * @returns {boolean} True if URL shares the same origin, otherwise false
    */
      return function isURLSameOrigin(requestURL) {
        var parsed = (utils.isString(requestURL)) ? resolveURL(requestURL) : requestURL;
        return (parsed.protocol === originURL.protocol &&
            parsed.host === originURL.host);
      };
    })() :

  // Non standard browser envs (web workers, react-native) lack needed support.
    (function nonStandardBrowserEnv() {
      return function isURLSameOrigin() {
        return true;
      };
    })()
);


/***/ }),

/***/ "./node_modules/axios/lib/helpers/normalizeHeaderName.js":
/*!***************************************************************!*\
  !*** ./node_modules/axios/lib/helpers/normalizeHeaderName.js ***!
  \***************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

"use strict";


var utils = __webpack_require__(/*! ../utils */ "./node_modules/axios/lib/utils.js");

module.exports = function normalizeHeaderName(headers, normalizedName) {
  utils.forEach(headers, function processHeader(value, name) {
    if (name !== normalizedName && name.toUpperCase() === normalizedName.toUpperCase()) {
      headers[normalizedName] = value;
      delete headers[name];
    }
  });
};


/***/ }),

/***/ "./node_modules/axios/lib/helpers/parseHeaders.js":
/*!********************************************************!*\
  !*** ./node_modules/axios/lib/helpers/parseHeaders.js ***!
  \********************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

"use strict";


var utils = __webpack_require__(/*! ./../utils */ "./node_modules/axios/lib/utils.js");

// Headers whose duplicates are ignored by node
// c.f. https://nodejs.org/api/http.html#http_message_headers
var ignoreDuplicateOf = [
  'age', 'authorization', 'content-length', 'content-type', 'etag',
  'expires', 'from', 'host', 'if-modified-since', 'if-unmodified-since',
  'last-modified', 'location', 'max-forwards', 'proxy-authorization',
  'referer', 'retry-after', 'user-agent'
];

/**
 * Parse headers into an object
 *
 * ```
 * Date: Wed, 27 Aug 2014 08:58:49 GMT
 * Content-Type: application/json
 * Connection: keep-alive
 * Transfer-Encoding: chunked
 * ```
 *
 * @param {String} headers Headers needing to be parsed
 * @returns {Object} Headers parsed into an object
 */
module.exports = function parseHeaders(headers) {
  var parsed = {};
  var key;
  var val;
  var i;

  if (!headers) { return parsed; }

  utils.forEach(headers.split('\n'), function parser(line) {
    i = line.indexOf(':');
    key = utils.trim(line.substr(0, i)).toLowerCase();
    val = utils.trim(line.substr(i + 1));

    if (key) {
      if (parsed[key] && ignoreDuplicateOf.indexOf(key) >= 0) {
        return;
      }
      if (key === 'set-cookie') {
        parsed[key] = (parsed[key] ? parsed[key] : []).concat([val]);
      } else {
        parsed[key] = parsed[key] ? parsed[key] + ', ' + val : val;
      }
    }
  });

  return parsed;
};


/***/ }),

/***/ "./node_modules/axios/lib/helpers/spread.js":
/*!**************************************************!*\
  !*** ./node_modules/axios/lib/helpers/spread.js ***!
  \**************************************************/
/***/ ((module) => {

"use strict";


/**
 * Syntactic sugar for invoking a function and expanding an array for arguments.
 *
 * Common use case would be to use `Function.prototype.apply`.
 *
 *  ```js
 *  function f(x, y, z) {}
 *  var args = [1, 2, 3];
 *  f.apply(null, args);
 *  ```
 *
 * With `spread` this example can be re-written.
 *
 *  ```js
 *  spread(function(x, y, z) {})([1, 2, 3]);
 *  ```
 *
 * @param {Function} callback
 * @returns {Function}
 */
module.exports = function spread(callback) {
  return function wrap(arr) {
    return callback.apply(null, arr);
  };
};


/***/ }),

/***/ "./node_modules/axios/lib/utils.js":
/*!*****************************************!*\
  !*** ./node_modules/axios/lib/utils.js ***!
  \*****************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

"use strict";


var bind = __webpack_require__(/*! ./helpers/bind */ "./node_modules/axios/lib/helpers/bind.js");

/*global toString:true*/

// utils is a library of generic helper functions non-specific to axios

var toString = Object.prototype.toString;

/**
 * Determine if a value is an Array
 *
 * @param {Object} val The value to test
 * @returns {boolean} True if value is an Array, otherwise false
 */
function isArray(val) {
  return toString.call(val) === '[object Array]';
}

/**
 * Determine if a value is undefined
 *
 * @param {Object} val The value to test
 * @returns {boolean} True if the value is undefined, otherwise false
 */
function isUndefined(val) {
  return typeof val === 'undefined';
}

/**
 * Determine if a value is a Buffer
 *
 * @param {Object} val The value to test
 * @returns {boolean} True if value is a Buffer, otherwise false
 */
function isBuffer(val) {
  return val !== null && !isUndefined(val) && val.constructor !== null && !isUndefined(val.constructor)
    && typeof val.constructor.isBuffer === 'function' && val.constructor.isBuffer(val);
}

/**
 * Determine if a value is an ArrayBuffer
 *
 * @param {Object} val The value to test
 * @returns {boolean} True if value is an ArrayBuffer, otherwise false
 */
function isArrayBuffer(val) {
  return toString.call(val) === '[object ArrayBuffer]';
}

/**
 * Determine if a value is a FormData
 *
 * @param {Object} val The value to test
 * @returns {boolean} True if value is an FormData, otherwise false
 */
function isFormData(val) {
  return (typeof FormData !== 'undefined') && (val instanceof FormData);
}

/**
 * Determine if a value is a view on an ArrayBuffer
 *
 * @param {Object} val The value to test
 * @returns {boolean} True if value is a view on an ArrayBuffer, otherwise false
 */
function isArrayBufferView(val) {
  var result;
  if ((typeof ArrayBuffer !== 'undefined') && (ArrayBuffer.isView)) {
    result = ArrayBuffer.isView(val);
  } else {
    result = (val) && (val.buffer) && (val.buffer instanceof ArrayBuffer);
  }
  return result;
}

/**
 * Determine if a value is a String
 *
 * @param {Object} val The value to test
 * @returns {boolean} True if value is a String, otherwise false
 */
function isString(val) {
  return typeof val === 'string';
}

/**
 * Determine if a value is a Number
 *
 * @param {Object} val The value to test
 * @returns {boolean} True if value is a Number, otherwise false
 */
function isNumber(val) {
  return typeof val === 'number';
}

/**
 * Determine if a value is an Object
 *
 * @param {Object} val The value to test
 * @returns {boolean} True if value is an Object, otherwise false
 */
function isObject(val) {
  return val !== null && typeof val === 'object';
}

/**
 * Determine if a value is a plain Object
 *
 * @param {Object} val The value to test
 * @return {boolean} True if value is a plain Object, otherwise false
 */
function isPlainObject(val) {
  if (toString.call(val) !== '[object Object]') {
    return false;
  }

  var prototype = Object.getPrototypeOf(val);
  return prototype === null || prototype === Object.prototype;
}

/**
 * Determine if a value is a Date
 *
 * @param {Object} val The value to test
 * @returns {boolean} True if value is a Date, otherwise false
 */
function isDate(val) {
  return toString.call(val) === '[object Date]';
}

/**
 * Determine if a value is a File
 *
 * @param {Object} val The value to test
 * @returns {boolean} True if value is a File, otherwise false
 */
function isFile(val) {
  return toString.call(val) === '[object File]';
}

/**
 * Determine if a value is a Blob
 *
 * @param {Object} val The value to test
 * @returns {boolean} True if value is a Blob, otherwise false
 */
function isBlob(val) {
  return toString.call(val) === '[object Blob]';
}

/**
 * Determine if a value is a Function
 *
 * @param {Object} val The value to test
 * @returns {boolean} True if value is a Function, otherwise false
 */
function isFunction(val) {
  return toString.call(val) === '[object Function]';
}

/**
 * Determine if a value is a Stream
 *
 * @param {Object} val The value to test
 * @returns {boolean} True if value is a Stream, otherwise false
 */
function isStream(val) {
  return isObject(val) && isFunction(val.pipe);
}

/**
 * Determine if a value is a URLSearchParams object
 *
 * @param {Object} val The value to test
 * @returns {boolean} True if value is a URLSearchParams object, otherwise false
 */
function isURLSearchParams(val) {
  return typeof URLSearchParams !== 'undefined' && val instanceof URLSearchParams;
}

/**
 * Trim excess whitespace off the beginning and end of a string
 *
 * @param {String} str The String to trim
 * @returns {String} The String freed of excess whitespace
 */
function trim(str) {
  return str.replace(/^\s*/, '').replace(/\s*$/, '');
}

/**
 * Determine if we're running in a standard browser environment
 *
 * This allows axios to run in a web worker, and react-native.
 * Both environments support XMLHttpRequest, but not fully standard globals.
 *
 * web workers:
 *  typeof window -> undefined
 *  typeof document -> undefined
 *
 * react-native:
 *  navigator.product -> 'ReactNative'
 * nativescript
 *  navigator.product -> 'NativeScript' or 'NS'
 */
function isStandardBrowserEnv() {
  if (typeof navigator !== 'undefined' && (navigator.product === 'ReactNative' ||
                                           navigator.product === 'NativeScript' ||
                                           navigator.product === 'NS')) {
    return false;
  }
  return (
    typeof window !== 'undefined' &&
    typeof document !== 'undefined'
  );
}

/**
 * Iterate over an Array or an Object invoking a function for each item.
 *
 * If `obj` is an Array callback will be called passing
 * the value, index, and complete array for each item.
 *
 * If 'obj' is an Object callback will be called passing
 * the value, key, and complete object for each property.
 *
 * @param {Object|Array} obj The object to iterate
 * @param {Function} fn The callback to invoke for each item
 */
function forEach(obj, fn) {
  // Don't bother if no value provided
  if (obj === null || typeof obj === 'undefined') {
    return;
  }

  // Force an array if not already something iterable
  if (typeof obj !== 'object') {
    /*eslint no-param-reassign:0*/
    obj = [obj];
  }

  if (isArray(obj)) {
    // Iterate over array values
    for (var i = 0, l = obj.length; i < l; i++) {
      fn.call(null, obj[i], i, obj);
    }
  } else {
    // Iterate over object keys
    for (var key in obj) {
      if (Object.prototype.hasOwnProperty.call(obj, key)) {
        fn.call(null, obj[key], key, obj);
      }
    }
  }
}

/**
 * Accepts varargs expecting each argument to be an object, then
 * immutably merges the properties of each object and returns result.
 *
 * When multiple objects contain the same key the later object in
 * the arguments list will take precedence.
 *
 * Example:
 *
 * ```js
 * var result = merge({foo: 123}, {foo: 456});
 * console.log(result.foo); // outputs 456
 * ```
 *
 * @param {Object} obj1 Object to merge
 * @returns {Object} Result of all merge properties
 */
function merge(/* obj1, obj2, obj3, ... */) {
  var result = {};
  function assignValue(val, key) {
    if (isPlainObject(result[key]) && isPlainObject(val)) {
      result[key] = merge(result[key], val);
    } else if (isPlainObject(val)) {
      result[key] = merge({}, val);
    } else if (isArray(val)) {
      result[key] = val.slice();
    } else {
      result[key] = val;
    }
  }

  for (var i = 0, l = arguments.length; i < l; i++) {
    forEach(arguments[i], assignValue);
  }
  return result;
}

/**
 * Extends object a by mutably adding to it the properties of object b.
 *
 * @param {Object} a The object to be extended
 * @param {Object} b The object to copy properties from
 * @param {Object} thisArg The object to bind function to
 * @return {Object} The resulting value of object a
 */
function extend(a, b, thisArg) {
  forEach(b, function assignValue(val, key) {
    if (thisArg && typeof val === 'function') {
      a[key] = bind(val, thisArg);
    } else {
      a[key] = val;
    }
  });
  return a;
}

/**
 * Remove byte order marker. This catches EF BB BF (the UTF-8 BOM)
 *
 * @param {string} content with BOM
 * @return {string} content value without BOM
 */
function stripBOM(content) {
  if (content.charCodeAt(0) === 0xFEFF) {
    content = content.slice(1);
  }
  return content;
}

module.exports = {
  isArray: isArray,
  isArrayBuffer: isArrayBuffer,
  isBuffer: isBuffer,
  isFormData: isFormData,
  isArrayBufferView: isArrayBufferView,
  isString: isString,
  isNumber: isNumber,
  isObject: isObject,
  isPlainObject: isPlainObject,
  isUndefined: isUndefined,
  isDate: isDate,
  isFile: isFile,
  isBlob: isBlob,
  isFunction: isFunction,
  isStream: isStream,
  isURLSearchParams: isURLSearchParams,
  isStandardBrowserEnv: isStandardBrowserEnv,
  forEach: forEach,
  merge: merge,
  extend: extend,
  trim: trim,
  stripBOM: stripBOM
};


/***/ }),

/***/ "./node_modules/base64-js/index.js":
/*!*****************************************!*\
  !*** ./node_modules/base64-js/index.js ***!
  \*****************************************/
/***/ ((__unused_webpack_module, exports) => {

"use strict";


exports.byteLength = byteLength
exports.toByteArray = toByteArray
exports.fromByteArray = fromByteArray

var lookup = []
var revLookup = []
var Arr = typeof Uint8Array !== 'undefined' ? Uint8Array : Array

var code = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/'
for (var i = 0, len = code.length; i < len; ++i) {
  lookup[i] = code[i]
  revLookup[code.charCodeAt(i)] = i
}

// Support decoding URL-safe base64 strings, as Node.js does.
// See: https://en.wikipedia.org/wiki/Base64#URL_applications
revLookup['-'.charCodeAt(0)] = 62
revLookup['_'.charCodeAt(0)] = 63

function getLens (b64) {
  var len = b64.length

  if (len % 4 > 0) {
    throw new Error('Invalid string. Length must be a multiple of 4')
  }

  // Trim off extra bytes after placeholder bytes are found
  // See: https://github.com/beatgammit/base64-js/issues/42
  var validLen = b64.indexOf('=')
  if (validLen === -1) validLen = len

  var placeHoldersLen = validLen === len
    ? 0
    : 4 - (validLen % 4)

  return [validLen, placeHoldersLen]
}

// base64 is 4/3 + up to two characters of the original data
function byteLength (b64) {
  var lens = getLens(b64)
  var validLen = lens[0]
  var placeHoldersLen = lens[1]
  return ((validLen + placeHoldersLen) * 3 / 4) - placeHoldersLen
}

function _byteLength (b64, validLen, placeHoldersLen) {
  return ((validLen + placeHoldersLen) * 3 / 4) - placeHoldersLen
}

function toByteArray (b64) {
  var tmp
  var lens = getLens(b64)
  var validLen = lens[0]
  var placeHoldersLen = lens[1]

  var arr = new Arr(_byteLength(b64, validLen, placeHoldersLen))

  var curByte = 0

  // if there are placeholders, only get up to the last complete 4 chars
  var len = placeHoldersLen > 0
    ? validLen - 4
    : validLen

  var i
  for (i = 0; i < len; i += 4) {
    tmp =
      (revLookup[b64.charCodeAt(i)] << 18) |
      (revLookup[b64.charCodeAt(i + 1)] << 12) |
      (revLookup[b64.charCodeAt(i + 2)] << 6) |
      revLookup[b64.charCodeAt(i + 3)]
    arr[curByte++] = (tmp >> 16) & 0xFF
    arr[curByte++] = (tmp >> 8) & 0xFF
    arr[curByte++] = tmp & 0xFF
  }

  if (placeHoldersLen === 2) {
    tmp =
      (revLookup[b64.charCodeAt(i)] << 2) |
      (revLookup[b64.charCodeAt(i + 1)] >> 4)
    arr[curByte++] = tmp & 0xFF
  }

  if (placeHoldersLen === 1) {
    tmp =
      (revLookup[b64.charCodeAt(i)] << 10) |
      (revLookup[b64.charCodeAt(i + 1)] << 4) |
      (revLookup[b64.charCodeAt(i + 2)] >> 2)
    arr[curByte++] = (tmp >> 8) & 0xFF
    arr[curByte++] = tmp & 0xFF
  }

  return arr
}

function tripletToBase64 (num) {
  return lookup[num >> 18 & 0x3F] +
    lookup[num >> 12 & 0x3F] +
    lookup[num >> 6 & 0x3F] +
    lookup[num & 0x3F]
}

function encodeChunk (uint8, start, end) {
  var tmp
  var output = []
  for (var i = start; i < end; i += 3) {
    tmp =
      ((uint8[i] << 16) & 0xFF0000) +
      ((uint8[i + 1] << 8) & 0xFF00) +
      (uint8[i + 2] & 0xFF)
    output.push(tripletToBase64(tmp))
  }
  return output.join('')
}

function fromByteArray (uint8) {
  var tmp
  var len = uint8.length
  var extraBytes = len % 3 // if we have 1 byte left, pad 2 bytes
  var parts = []
  var maxChunkLength = 16383 // must be multiple of 3

  // go through the array every three bytes, we'll deal with trailing stuff later
  for (var i = 0, len2 = len - extraBytes; i < len2; i += maxChunkLength) {
    parts.push(encodeChunk(uint8, i, (i + maxChunkLength) > len2 ? len2 : (i + maxChunkLength)))
  }

  // pad the end with zeros, but make sure to not forget the extra bytes
  if (extraBytes === 1) {
    tmp = uint8[len - 1]
    parts.push(
      lookup[tmp >> 2] +
      lookup[(tmp << 4) & 0x3F] +
      '=='
    )
  } else if (extraBytes === 2) {
    tmp = (uint8[len - 2] << 8) + uint8[len - 1]
    parts.push(
      lookup[tmp >> 10] +
      lookup[(tmp >> 4) & 0x3F] +
      lookup[(tmp << 2) & 0x3F] +
      '='
    )
  }

  return parts.join('')
}


/***/ }),

/***/ "./node_modules/buffer/index.js":
/*!**************************************!*\
  !*** ./node_modules/buffer/index.js ***!
  \**************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {

"use strict";
/*!
 * The buffer module from node.js, for the browser.
 *
 * @author   Feross Aboukhadijeh <http://feross.org>
 * @license  MIT
 */
/* eslint-disable no-proto */



var base64 = __webpack_require__(/*! base64-js */ "./node_modules/base64-js/index.js")
var ieee754 = __webpack_require__(/*! ieee754 */ "./node_modules/ieee754/index.js")
var isArray = __webpack_require__(/*! isarray */ "./node_modules/isarray/index.js")

exports.Buffer = Buffer
exports.SlowBuffer = SlowBuffer
exports.INSPECT_MAX_BYTES = 50

/**
 * If `Buffer.TYPED_ARRAY_SUPPORT`:
 *   === true    Use Uint8Array implementation (fastest)
 *   === false   Use Object implementation (most compatible, even IE6)
 *
 * Browsers that support typed arrays are IE 10+, Firefox 4+, Chrome 7+, Safari 5.1+,
 * Opera 11.6+, iOS 4.2+.
 *
 * Due to various browser bugs, sometimes the Object implementation will be used even
 * when the browser supports typed arrays.
 *
 * Note:
 *
 *   - Firefox 4-29 lacks support for adding new properties to `Uint8Array` instances,
 *     See: https://bugzilla.mozilla.org/show_bug.cgi?id=695438.
 *
 *   - Chrome 9-10 is missing the `TypedArray.prototype.subarray` function.
 *
 *   - IE10 has a broken `TypedArray.prototype.subarray` function which returns arrays of
 *     incorrect length in some situations.

 * We detect these buggy browsers and set `Buffer.TYPED_ARRAY_SUPPORT` to `false` so they
 * get the Object implementation, which is slower but behaves correctly.
 */
Buffer.TYPED_ARRAY_SUPPORT = __webpack_require__.g.TYPED_ARRAY_SUPPORT !== undefined
  ? __webpack_require__.g.TYPED_ARRAY_SUPPORT
  : typedArraySupport()

/*
 * Export kMaxLength after typed array support is determined.
 */
exports.kMaxLength = kMaxLength()

function typedArraySupport () {
  try {
    var arr = new Uint8Array(1)
    arr.__proto__ = {__proto__: Uint8Array.prototype, foo: function () { return 42 }}
    return arr.foo() === 42 && // typed array instances can be augmented
        typeof arr.subarray === 'function' && // chrome 9-10 lack `subarray`
        arr.subarray(1, 1).byteLength === 0 // ie10 has broken `subarray`
  } catch (e) {
    return false
  }
}

function kMaxLength () {
  return Buffer.TYPED_ARRAY_SUPPORT
    ? 0x7fffffff
    : 0x3fffffff
}

function createBuffer (that, length) {
  if (kMaxLength() < length) {
    throw new RangeError('Invalid typed array length')
  }
  if (Buffer.TYPED_ARRAY_SUPPORT) {
    // Return an augmented `Uint8Array` instance, for best performance
    that = new Uint8Array(length)
    that.__proto__ = Buffer.prototype
  } else {
    // Fallback: Return an object instance of the Buffer class
    if (that === null) {
      that = new Buffer(length)
    }
    that.length = length
  }

  return that
}

/**
 * The Buffer constructor returns instances of `Uint8Array` that have their
 * prototype changed to `Buffer.prototype`. Furthermore, `Buffer` is a subclass of
 * `Uint8Array`, so the returned instances will have all the node `Buffer` methods
 * and the `Uint8Array` methods. Square bracket notation works as expected -- it
 * returns a single octet.
 *
 * The `Uint8Array` prototype remains unmodified.
 */

function Buffer (arg, encodingOrOffset, length) {
  if (!Buffer.TYPED_ARRAY_SUPPORT && !(this instanceof Buffer)) {
    return new Buffer(arg, encodingOrOffset, length)
  }

  // Common case.
  if (typeof arg === 'number') {
    if (typeof encodingOrOffset === 'string') {
      throw new Error(
        'If encoding is specified then the first argument must be a string'
      )
    }
    return allocUnsafe(this, arg)
  }
  return from(this, arg, encodingOrOffset, length)
}

Buffer.poolSize = 8192 // not used by this implementation

// TODO: Legacy, not needed anymore. Remove in next major version.
Buffer._augment = function (arr) {
  arr.__proto__ = Buffer.prototype
  return arr
}

function from (that, value, encodingOrOffset, length) {
  if (typeof value === 'number') {
    throw new TypeError('"value" argument must not be a number')
  }

  if (typeof ArrayBuffer !== 'undefined' && value instanceof ArrayBuffer) {
    return fromArrayBuffer(that, value, encodingOrOffset, length)
  }

  if (typeof value === 'string') {
    return fromString(that, value, encodingOrOffset)
  }

  return fromObject(that, value)
}

/**
 * Functionally equivalent to Buffer(arg, encoding) but throws a TypeError
 * if value is a number.
 * Buffer.from(str[, encoding])
 * Buffer.from(array)
 * Buffer.from(buffer)
 * Buffer.from(arrayBuffer[, byteOffset[, length]])
 **/
Buffer.from = function (value, encodingOrOffset, length) {
  return from(null, value, encodingOrOffset, length)
}

if (Buffer.TYPED_ARRAY_SUPPORT) {
  Buffer.prototype.__proto__ = Uint8Array.prototype
  Buffer.__proto__ = Uint8Array
  if (typeof Symbol !== 'undefined' && Symbol.species &&
      Buffer[Symbol.species] === Buffer) {
    // Fix subarray() in ES2016. See: https://github.com/feross/buffer/pull/97
    Object.defineProperty(Buffer, Symbol.species, {
      value: null,
      configurable: true
    })
  }
}

function assertSize (size) {
  if (typeof size !== 'number') {
    throw new TypeError('"size" argument must be a number')
  } else if (size < 0) {
    throw new RangeError('"size" argument must not be negative')
  }
}

function alloc (that, size, fill, encoding) {
  assertSize(size)
  if (size <= 0) {
    return createBuffer(that, size)
  }
  if (fill !== undefined) {
    // Only pay attention to encoding if it's a string. This
    // prevents accidentally sending in a number that would
    // be interpretted as a start offset.
    return typeof encoding === 'string'
      ? createBuffer(that, size).fill(fill, encoding)
      : createBuffer(that, size).fill(fill)
  }
  return createBuffer(that, size)
}

/**
 * Creates a new filled Buffer instance.
 * alloc(size[, fill[, encoding]])
 **/
Buffer.alloc = function (size, fill, encoding) {
  return alloc(null, size, fill, encoding)
}

function allocUnsafe (that, size) {
  assertSize(size)
  that = createBuffer(that, size < 0 ? 0 : checked(size) | 0)
  if (!Buffer.TYPED_ARRAY_SUPPORT) {
    for (var i = 0; i < size; ++i) {
      that[i] = 0
    }
  }
  return that
}

/**
 * Equivalent to Buffer(num), by default creates a non-zero-filled Buffer instance.
 * */
Buffer.allocUnsafe = function (size) {
  return allocUnsafe(null, size)
}
/**
 * Equivalent to SlowBuffer(num), by default creates a non-zero-filled Buffer instance.
 */
Buffer.allocUnsafeSlow = function (size) {
  return allocUnsafe(null, size)
}

function fromString (that, string, encoding) {
  if (typeof encoding !== 'string' || encoding === '') {
    encoding = 'utf8'
  }

  if (!Buffer.isEncoding(encoding)) {
    throw new TypeError('"encoding" must be a valid string encoding')
  }

  var length = byteLength(string, encoding) | 0
  that = createBuffer(that, length)

  var actual = that.write(string, encoding)

  if (actual !== length) {
    // Writing a hex string, for example, that contains invalid characters will
    // cause everything after the first invalid character to be ignored. (e.g.
    // 'abxxcd' will be treated as 'ab')
    that = that.slice(0, actual)
  }

  return that
}

function fromArrayLike (that, array) {
  var length = array.length < 0 ? 0 : checked(array.length) | 0
  that = createBuffer(that, length)
  for (var i = 0; i < length; i += 1) {
    that[i] = array[i] & 255
  }
  return that
}

function fromArrayBuffer (that, array, byteOffset, length) {
  array.byteLength // this throws if `array` is not a valid ArrayBuffer

  if (byteOffset < 0 || array.byteLength < byteOffset) {
    throw new RangeError('\'offset\' is out of bounds')
  }

  if (array.byteLength < byteOffset + (length || 0)) {
    throw new RangeError('\'length\' is out of bounds')
  }

  if (byteOffset === undefined && length === undefined) {
    array = new Uint8Array(array)
  } else if (length === undefined) {
    array = new Uint8Array(array, byteOffset)
  } else {
    array = new Uint8Array(array, byteOffset, length)
  }

  if (Buffer.TYPED_ARRAY_SUPPORT) {
    // Return an augmented `Uint8Array` instance, for best performance
    that = array
    that.__proto__ = Buffer.prototype
  } else {
    // Fallback: Return an object instance of the Buffer class
    that = fromArrayLike(that, array)
  }
  return that
}

function fromObject (that, obj) {
  if (Buffer.isBuffer(obj)) {
    var len = checked(obj.length) | 0
    that = createBuffer(that, len)

    if (that.length === 0) {
      return that
    }

    obj.copy(that, 0, 0, len)
    return that
  }

  if (obj) {
    if ((typeof ArrayBuffer !== 'undefined' &&
        obj.buffer instanceof ArrayBuffer) || 'length' in obj) {
      if (typeof obj.length !== 'number' || isnan(obj.length)) {
        return createBuffer(that, 0)
      }
      return fromArrayLike(that, obj)
    }

    if (obj.type === 'Buffer' && isArray(obj.data)) {
      return fromArrayLike(that, obj.data)
    }
  }

  throw new TypeError('First argument must be a string, Buffer, ArrayBuffer, Array, or array-like object.')
}

function checked (length) {
  // Note: cannot use `length < kMaxLength()` here because that fails when
  // length is NaN (which is otherwise coerced to zero.)
  if (length >= kMaxLength()) {
    throw new RangeError('Attempt to allocate Buffer larger than maximum ' +
                         'size: 0x' + kMaxLength().toString(16) + ' bytes')
  }
  return length | 0
}

function SlowBuffer (length) {
  if (+length != length) { // eslint-disable-line eqeqeq
    length = 0
  }
  return Buffer.alloc(+length)
}

Buffer.isBuffer = function isBuffer (b) {
  return !!(b != null && b._isBuffer)
}

Buffer.compare = function compare (a, b) {
  if (!Buffer.isBuffer(a) || !Buffer.isBuffer(b)) {
    throw new TypeError('Arguments must be Buffers')
  }

  if (a === b) return 0

  var x = a.length
  var y = b.length

  for (var i = 0, len = Math.min(x, y); i < len; ++i) {
    if (a[i] !== b[i]) {
      x = a[i]
      y = b[i]
      break
    }
  }

  if (x < y) return -1
  if (y < x) return 1
  return 0
}

Buffer.isEncoding = function isEncoding (encoding) {
  switch (String(encoding).toLowerCase()) {
    case 'hex':
    case 'utf8':
    case 'utf-8':
    case 'ascii':
    case 'latin1':
    case 'binary':
    case 'base64':
    case 'ucs2':
    case 'ucs-2':
    case 'utf16le':
    case 'utf-16le':
      return true
    default:
      return false
  }
}

Buffer.concat = function concat (list, length) {
  if (!isArray(list)) {
    throw new TypeError('"list" argument must be an Array of Buffers')
  }

  if (list.length === 0) {
    return Buffer.alloc(0)
  }

  var i
  if (length === undefined) {
    length = 0
    for (i = 0; i < list.length; ++i) {
      length += list[i].length
    }
  }

  var buffer = Buffer.allocUnsafe(length)
  var pos = 0
  for (i = 0; i < list.length; ++i) {
    var buf = list[i]
    if (!Buffer.isBuffer(buf)) {
      throw new TypeError('"list" argument must be an Array of Buffers')
    }
    buf.copy(buffer, pos)
    pos += buf.length
  }
  return buffer
}

function byteLength (string, encoding) {
  if (Buffer.isBuffer(string)) {
    return string.length
  }
  if (typeof ArrayBuffer !== 'undefined' && typeof ArrayBuffer.isView === 'function' &&
      (ArrayBuffer.isView(string) || string instanceof ArrayBuffer)) {
    return string.byteLength
  }
  if (typeof string !== 'string') {
    string = '' + string
  }

  var len = string.length
  if (len === 0) return 0

  // Use a for loop to avoid recursion
  var loweredCase = false
  for (;;) {
    switch (encoding) {
      case 'ascii':
      case 'latin1':
      case 'binary':
        return len
      case 'utf8':
      case 'utf-8':
      case undefined:
        return utf8ToBytes(string).length
      case 'ucs2':
      case 'ucs-2':
      case 'utf16le':
      case 'utf-16le':
        return len * 2
      case 'hex':
        return len >>> 1
      case 'base64':
        return base64ToBytes(string).length
      default:
        if (loweredCase) return utf8ToBytes(string).length // assume utf8
        encoding = ('' + encoding).toLowerCase()
        loweredCase = true
    }
  }
}
Buffer.byteLength = byteLength

function slowToString (encoding, start, end) {
  var loweredCase = false

  // No need to verify that "this.length <= MAX_UINT32" since it's a read-only
  // property of a typed array.

  // This behaves neither like String nor Uint8Array in that we set start/end
  // to their upper/lower bounds if the value passed is out of range.
  // undefined is handled specially as per ECMA-262 6th Edition,
  // Section 13.3.3.7 Runtime Semantics: KeyedBindingInitialization.
  if (start === undefined || start < 0) {
    start = 0
  }
  // Return early if start > this.length. Done here to prevent potential uint32
  // coercion fail below.
  if (start > this.length) {
    return ''
  }

  if (end === undefined || end > this.length) {
    end = this.length
  }

  if (end <= 0) {
    return ''
  }

  // Force coersion to uint32. This will also coerce falsey/NaN values to 0.
  end >>>= 0
  start >>>= 0

  if (end <= start) {
    return ''
  }

  if (!encoding) encoding = 'utf8'

  while (true) {
    switch (encoding) {
      case 'hex':
        return hexSlice(this, start, end)

      case 'utf8':
      case 'utf-8':
        return utf8Slice(this, start, end)

      case 'ascii':
        return asciiSlice(this, start, end)

      case 'latin1':
      case 'binary':
        return latin1Slice(this, start, end)

      case 'base64':
        return base64Slice(this, start, end)

      case 'ucs2':
      case 'ucs-2':
      case 'utf16le':
      case 'utf-16le':
        return utf16leSlice(this, start, end)

      default:
        if (loweredCase) throw new TypeError('Unknown encoding: ' + encoding)
        encoding = (encoding + '').toLowerCase()
        loweredCase = true
    }
  }
}

// The property is used by `Buffer.isBuffer` and `is-buffer` (in Safari 5-7) to detect
// Buffer instances.
Buffer.prototype._isBuffer = true

function swap (b, n, m) {
  var i = b[n]
  b[n] = b[m]
  b[m] = i
}

Buffer.prototype.swap16 = function swap16 () {
  var len = this.length
  if (len % 2 !== 0) {
    throw new RangeError('Buffer size must be a multiple of 16-bits')
  }
  for (var i = 0; i < len; i += 2) {
    swap(this, i, i + 1)
  }
  return this
}

Buffer.prototype.swap32 = function swap32 () {
  var len = this.length
  if (len % 4 !== 0) {
    throw new RangeError('Buffer size must be a multiple of 32-bits')
  }
  for (var i = 0; i < len; i += 4) {
    swap(this, i, i + 3)
    swap(this, i + 1, i + 2)
  }
  return this
}

Buffer.prototype.swap64 = function swap64 () {
  var len = this.length
  if (len % 8 !== 0) {
    throw new RangeError('Buffer size must be a multiple of 64-bits')
  }
  for (var i = 0; i < len; i += 8) {
    swap(this, i, i + 7)
    swap(this, i + 1, i + 6)
    swap(this, i + 2, i + 5)
    swap(this, i + 3, i + 4)
  }
  return this
}

Buffer.prototype.toString = function toString () {
  var length = this.length | 0
  if (length === 0) return ''
  if (arguments.length === 0) return utf8Slice(this, 0, length)
  return slowToString.apply(this, arguments)
}

Buffer.prototype.equals = function equals (b) {
  if (!Buffer.isBuffer(b)) throw new TypeError('Argument must be a Buffer')
  if (this === b) return true
  return Buffer.compare(this, b) === 0
}

Buffer.prototype.inspect = function inspect () {
  var str = ''
  var max = exports.INSPECT_MAX_BYTES
  if (this.length > 0) {
    str = this.toString('hex', 0, max).match(/.{2}/g).join(' ')
    if (this.length > max) str += ' ... '
  }
  return '<Buffer ' + str + '>'
}

Buffer.prototype.compare = function compare (target, start, end, thisStart, thisEnd) {
  if (!Buffer.isBuffer(target)) {
    throw new TypeError('Argument must be a Buffer')
  }

  if (start === undefined) {
    start = 0
  }
  if (end === undefined) {
    end = target ? target.length : 0
  }
  if (thisStart === undefined) {
    thisStart = 0
  }
  if (thisEnd === undefined) {
    thisEnd = this.length
  }

  if (start < 0 || end > target.length || thisStart < 0 || thisEnd > this.length) {
    throw new RangeError('out of range index')
  }

  if (thisStart >= thisEnd && start >= end) {
    return 0
  }
  if (thisStart >= thisEnd) {
    return -1
  }
  if (start >= end) {
    return 1
  }

  start >>>= 0
  end >>>= 0
  thisStart >>>= 0
  thisEnd >>>= 0

  if (this === target) return 0

  var x = thisEnd - thisStart
  var y = end - start
  var len = Math.min(x, y)

  var thisCopy = this.slice(thisStart, thisEnd)
  var targetCopy = target.slice(start, end)

  for (var i = 0; i < len; ++i) {
    if (thisCopy[i] !== targetCopy[i]) {
      x = thisCopy[i]
      y = targetCopy[i]
      break
    }
  }

  if (x < y) return -1
  if (y < x) return 1
  return 0
}

// Finds either the first index of `val` in `buffer` at offset >= `byteOffset`,
// OR the last index of `val` in `buffer` at offset <= `byteOffset`.
//
// Arguments:
// - buffer - a Buffer to search
// - val - a string, Buffer, or number
// - byteOffset - an index into `buffer`; will be clamped to an int32
// - encoding - an optional encoding, relevant is val is a string
// - dir - true for indexOf, false for lastIndexOf
function bidirectionalIndexOf (buffer, val, byteOffset, encoding, dir) {
  // Empty buffer means no match
  if (buffer.length === 0) return -1

  // Normalize byteOffset
  if (typeof byteOffset === 'string') {
    encoding = byteOffset
    byteOffset = 0
  } else if (byteOffset > 0x7fffffff) {
    byteOffset = 0x7fffffff
  } else if (byteOffset < -0x80000000) {
    byteOffset = -0x80000000
  }
  byteOffset = +byteOffset  // Coerce to Number.
  if (isNaN(byteOffset)) {
    // byteOffset: it it's undefined, null, NaN, "foo", etc, search whole buffer
    byteOffset = dir ? 0 : (buffer.length - 1)
  }

  // Normalize byteOffset: negative offsets start from the end of the buffer
  if (byteOffset < 0) byteOffset = buffer.length + byteOffset
  if (byteOffset >= buffer.length) {
    if (dir) return -1
    else byteOffset = buffer.length - 1
  } else if (byteOffset < 0) {
    if (dir) byteOffset = 0
    else return -1
  }

  // Normalize val
  if (typeof val === 'string') {
    val = Buffer.from(val, encoding)
  }

  // Finally, search either indexOf (if dir is true) or lastIndexOf
  if (Buffer.isBuffer(val)) {
    // Special case: looking for empty string/buffer always fails
    if (val.length === 0) {
      return -1
    }
    return arrayIndexOf(buffer, val, byteOffset, encoding, dir)
  } else if (typeof val === 'number') {
    val = val & 0xFF // Search for a byte value [0-255]
    if (Buffer.TYPED_ARRAY_SUPPORT &&
        typeof Uint8Array.prototype.indexOf === 'function') {
      if (dir) {
        return Uint8Array.prototype.indexOf.call(buffer, val, byteOffset)
      } else {
        return Uint8Array.prototype.lastIndexOf.call(buffer, val, byteOffset)
      }
    }
    return arrayIndexOf(buffer, [ val ], byteOffset, encoding, dir)
  }

  throw new TypeError('val must be string, number or Buffer')
}

function arrayIndexOf (arr, val, byteOffset, encoding, dir) {
  var indexSize = 1
  var arrLength = arr.length
  var valLength = val.length

  if (encoding !== undefined) {
    encoding = String(encoding).toLowerCase()
    if (encoding === 'ucs2' || encoding === 'ucs-2' ||
        encoding === 'utf16le' || encoding === 'utf-16le') {
      if (arr.length < 2 || val.length < 2) {
        return -1
      }
      indexSize = 2
      arrLength /= 2
      valLength /= 2
      byteOffset /= 2
    }
  }

  function read (buf, i) {
    if (indexSize === 1) {
      return buf[i]
    } else {
      return buf.readUInt16BE(i * indexSize)
    }
  }

  var i
  if (dir) {
    var foundIndex = -1
    for (i = byteOffset; i < arrLength; i++) {
      if (read(arr, i) === read(val, foundIndex === -1 ? 0 : i - foundIndex)) {
        if (foundIndex === -1) foundIndex = i
        if (i - foundIndex + 1 === valLength) return foundIndex * indexSize
      } else {
        if (foundIndex !== -1) i -= i - foundIndex
        foundIndex = -1
      }
    }
  } else {
    if (byteOffset + valLength > arrLength) byteOffset = arrLength - valLength
    for (i = byteOffset; i >= 0; i--) {
      var found = true
      for (var j = 0; j < valLength; j++) {
        if (read(arr, i + j) !== read(val, j)) {
          found = false
          break
        }
      }
      if (found) return i
    }
  }

  return -1
}

Buffer.prototype.includes = function includes (val, byteOffset, encoding) {
  return this.indexOf(val, byteOffset, encoding) !== -1
}

Buffer.prototype.indexOf = function indexOf (val, byteOffset, encoding) {
  return bidirectionalIndexOf(this, val, byteOffset, encoding, true)
}

Buffer.prototype.lastIndexOf = function lastIndexOf (val, byteOffset, encoding) {
  return bidirectionalIndexOf(this, val, byteOffset, encoding, false)
}

function hexWrite (buf, string, offset, length) {
  offset = Number(offset) || 0
  var remaining = buf.length - offset
  if (!length) {
    length = remaining
  } else {
    length = Number(length)
    if (length > remaining) {
      length = remaining
    }
  }

  // must be an even number of digits
  var strLen = string.length
  if (strLen % 2 !== 0) throw new TypeError('Invalid hex string')

  if (length > strLen / 2) {
    length = strLen / 2
  }
  for (var i = 0; i < length; ++i) {
    var parsed = parseInt(string.substr(i * 2, 2), 16)
    if (isNaN(parsed)) return i
    buf[offset + i] = parsed
  }
  return i
}

function utf8Write (buf, string, offset, length) {
  return blitBuffer(utf8ToBytes(string, buf.length - offset), buf, offset, length)
}

function asciiWrite (buf, string, offset, length) {
  return blitBuffer(asciiToBytes(string), buf, offset, length)
}

function latin1Write (buf, string, offset, length) {
  return asciiWrite(buf, string, offset, length)
}

function base64Write (buf, string, offset, length) {
  return blitBuffer(base64ToBytes(string), buf, offset, length)
}

function ucs2Write (buf, string, offset, length) {
  return blitBuffer(utf16leToBytes(string, buf.length - offset), buf, offset, length)
}

Buffer.prototype.write = function write (string, offset, length, encoding) {
  // Buffer#write(string)
  if (offset === undefined) {
    encoding = 'utf8'
    length = this.length
    offset = 0
  // Buffer#write(string, encoding)
  } else if (length === undefined && typeof offset === 'string') {
    encoding = offset
    length = this.length
    offset = 0
  // Buffer#write(string, offset[, length][, encoding])
  } else if (isFinite(offset)) {
    offset = offset | 0
    if (isFinite(length)) {
      length = length | 0
      if (encoding === undefined) encoding = 'utf8'
    } else {
      encoding = length
      length = undefined
    }
  // legacy write(string, encoding, offset, length) - remove in v0.13
  } else {
    throw new Error(
      'Buffer.write(string, encoding, offset[, length]) is no longer supported'
    )
  }

  var remaining = this.length - offset
  if (length === undefined || length > remaining) length = remaining

  if ((string.length > 0 && (length < 0 || offset < 0)) || offset > this.length) {
    throw new RangeError('Attempt to write outside buffer bounds')
  }

  if (!encoding) encoding = 'utf8'

  var loweredCase = false
  for (;;) {
    switch (encoding) {
      case 'hex':
        return hexWrite(this, string, offset, length)

      case 'utf8':
      case 'utf-8':
        return utf8Write(this, string, offset, length)

      case 'ascii':
        return asciiWrite(this, string, offset, length)

      case 'latin1':
      case 'binary':
        return latin1Write(this, string, offset, length)

      case 'base64':
        // Warning: maxLength not taken into account in base64Write
        return base64Write(this, string, offset, length)

      case 'ucs2':
      case 'ucs-2':
      case 'utf16le':
      case 'utf-16le':
        return ucs2Write(this, string, offset, length)

      default:
        if (loweredCase) throw new TypeError('Unknown encoding: ' + encoding)
        encoding = ('' + encoding).toLowerCase()
        loweredCase = true
    }
  }
}

Buffer.prototype.toJSON = function toJSON () {
  return {
    type: 'Buffer',
    data: Array.prototype.slice.call(this._arr || this, 0)
  }
}

function base64Slice (buf, start, end) {
  if (start === 0 && end === buf.length) {
    return base64.fromByteArray(buf)
  } else {
    return base64.fromByteArray(buf.slice(start, end))
  }
}

function utf8Slice (buf, start, end) {
  end = Math.min(buf.length, end)
  var res = []

  var i = start
  while (i < end) {
    var firstByte = buf[i]
    var codePoint = null
    var bytesPerSequence = (firstByte > 0xEF) ? 4
      : (firstByte > 0xDF) ? 3
      : (firstByte > 0xBF) ? 2
      : 1

    if (i + bytesPerSequence <= end) {
      var secondByte, thirdByte, fourthByte, tempCodePoint

      switch (bytesPerSequence) {
        case 1:
          if (firstByte < 0x80) {
            codePoint = firstByte
          }
          break
        case 2:
          secondByte = buf[i + 1]
          if ((secondByte & 0xC0) === 0x80) {
            tempCodePoint = (firstByte & 0x1F) << 0x6 | (secondByte & 0x3F)
            if (tempCodePoint > 0x7F) {
              codePoint = tempCodePoint
            }
          }
          break
        case 3:
          secondByte = buf[i + 1]
          thirdByte = buf[i + 2]
          if ((secondByte & 0xC0) === 0x80 && (thirdByte & 0xC0) === 0x80) {
            tempCodePoint = (firstByte & 0xF) << 0xC | (secondByte & 0x3F) << 0x6 | (thirdByte & 0x3F)
            if (tempCodePoint > 0x7FF && (tempCodePoint < 0xD800 || tempCodePoint > 0xDFFF)) {
              codePoint = tempCodePoint
            }
          }
          break
        case 4:
          secondByte = buf[i + 1]
          thirdByte = buf[i + 2]
          fourthByte = buf[i + 3]
          if ((secondByte & 0xC0) === 0x80 && (thirdByte & 0xC0) === 0x80 && (fourthByte & 0xC0) === 0x80) {
            tempCodePoint = (firstByte & 0xF) << 0x12 | (secondByte & 0x3F) << 0xC | (thirdByte & 0x3F) << 0x6 | (fourthByte & 0x3F)
            if (tempCodePoint > 0xFFFF && tempCodePoint < 0x110000) {
              codePoint = tempCodePoint
            }
          }
      }
    }

    if (codePoint === null) {
      // we did not generate a valid codePoint so insert a
      // replacement char (U+FFFD) and advance only 1 byte
      codePoint = 0xFFFD
      bytesPerSequence = 1
    } else if (codePoint > 0xFFFF) {
      // encode to utf16 (surrogate pair dance)
      codePoint -= 0x10000
      res.push(codePoint >>> 10 & 0x3FF | 0xD800)
      codePoint = 0xDC00 | codePoint & 0x3FF
    }

    res.push(codePoint)
    i += bytesPerSequence
  }

  return decodeCodePointsArray(res)
}

// Based on http://stackoverflow.com/a/22747272/680742, the browser with
// the lowest limit is Chrome, with 0x10000 args.
// We go 1 magnitude less, for safety
var MAX_ARGUMENTS_LENGTH = 0x1000

function decodeCodePointsArray (codePoints) {
  var len = codePoints.length
  if (len <= MAX_ARGUMENTS_LENGTH) {
    return String.fromCharCode.apply(String, codePoints) // avoid extra slice()
  }

  // Decode in chunks to avoid "call stack size exceeded".
  var res = ''
  var i = 0
  while (i < len) {
    res += String.fromCharCode.apply(
      String,
      codePoints.slice(i, i += MAX_ARGUMENTS_LENGTH)
    )
  }
  return res
}

function asciiSlice (buf, start, end) {
  var ret = ''
  end = Math.min(buf.length, end)

  for (var i = start; i < end; ++i) {
    ret += String.fromCharCode(buf[i] & 0x7F)
  }
  return ret
}

function latin1Slice (buf, start, end) {
  var ret = ''
  end = Math.min(buf.length, end)

  for (var i = start; i < end; ++i) {
    ret += String.fromCharCode(buf[i])
  }
  return ret
}

function hexSlice (buf, start, end) {
  var len = buf.length

  if (!start || start < 0) start = 0
  if (!end || end < 0 || end > len) end = len

  var out = ''
  for (var i = start; i < end; ++i) {
    out += toHex(buf[i])
  }
  return out
}

function utf16leSlice (buf, start, end) {
  var bytes = buf.slice(start, end)
  var res = ''
  for (var i = 0; i < bytes.length; i += 2) {
    res += String.fromCharCode(bytes[i] + bytes[i + 1] * 256)
  }
  return res
}

Buffer.prototype.slice = function slice (start, end) {
  var len = this.length
  start = ~~start
  end = end === undefined ? len : ~~end

  if (start < 0) {
    start += len
    if (start < 0) start = 0
  } else if (start > len) {
    start = len
  }

  if (end < 0) {
    end += len
    if (end < 0) end = 0
  } else if (end > len) {
    end = len
  }

  if (end < start) end = start

  var newBuf
  if (Buffer.TYPED_ARRAY_SUPPORT) {
    newBuf = this.subarray(start, end)
    newBuf.__proto__ = Buffer.prototype
  } else {
    var sliceLen = end - start
    newBuf = new Buffer(sliceLen, undefined)
    for (var i = 0; i < sliceLen; ++i) {
      newBuf[i] = this[i + start]
    }
  }

  return newBuf
}

/*
 * Need to make sure that buffer isn't trying to write out of bounds.
 */
function checkOffset (offset, ext, length) {
  if ((offset % 1) !== 0 || offset < 0) throw new RangeError('offset is not uint')
  if (offset + ext > length) throw new RangeError('Trying to access beyond buffer length')
}

Buffer.prototype.readUIntLE = function readUIntLE (offset, byteLength, noAssert) {
  offset = offset | 0
  byteLength = byteLength | 0
  if (!noAssert) checkOffset(offset, byteLength, this.length)

  var val = this[offset]
  var mul = 1
  var i = 0
  while (++i < byteLength && (mul *= 0x100)) {
    val += this[offset + i] * mul
  }

  return val
}

Buffer.prototype.readUIntBE = function readUIntBE (offset, byteLength, noAssert) {
  offset = offset | 0
  byteLength = byteLength | 0
  if (!noAssert) {
    checkOffset(offset, byteLength, this.length)
  }

  var val = this[offset + --byteLength]
  var mul = 1
  while (byteLength > 0 && (mul *= 0x100)) {
    val += this[offset + --byteLength] * mul
  }

  return val
}

Buffer.prototype.readUInt8 = function readUInt8 (offset, noAssert) {
  if (!noAssert) checkOffset(offset, 1, this.length)
  return this[offset]
}

Buffer.prototype.readUInt16LE = function readUInt16LE (offset, noAssert) {
  if (!noAssert) checkOffset(offset, 2, this.length)
  return this[offset] | (this[offset + 1] << 8)
}

Buffer.prototype.readUInt16BE = function readUInt16BE (offset, noAssert) {
  if (!noAssert) checkOffset(offset, 2, this.length)
  return (this[offset] << 8) | this[offset + 1]
}

Buffer.prototype.readUInt32LE = function readUInt32LE (offset, noAssert) {
  if (!noAssert) checkOffset(offset, 4, this.length)

  return ((this[offset]) |
      (this[offset + 1] << 8) |
      (this[offset + 2] << 16)) +
      (this[offset + 3] * 0x1000000)
}

Buffer.prototype.readUInt32BE = function readUInt32BE (offset, noAssert) {
  if (!noAssert) checkOffset(offset, 4, this.length)

  return (this[offset] * 0x1000000) +
    ((this[offset + 1] << 16) |
    (this[offset + 2] << 8) |
    this[offset + 3])
}

Buffer.prototype.readIntLE = function readIntLE (offset, byteLength, noAssert) {
  offset = offset | 0
  byteLength = byteLength | 0
  if (!noAssert) checkOffset(offset, byteLength, this.length)

  var val = this[offset]
  var mul = 1
  var i = 0
  while (++i < byteLength && (mul *= 0x100)) {
    val += this[offset + i] * mul
  }
  mul *= 0x80

  if (val >= mul) val -= Math.pow(2, 8 * byteLength)

  return val
}

Buffer.prototype.readIntBE = function readIntBE (offset, byteLength, noAssert) {
  offset = offset | 0
  byteLength = byteLength | 0
  if (!noAssert) checkOffset(offset, byteLength, this.length)

  var i = byteLength
  var mul = 1
  var val = this[offset + --i]
  while (i > 0 && (mul *= 0x100)) {
    val += this[offset + --i] * mul
  }
  mul *= 0x80

  if (val >= mul) val -= Math.pow(2, 8 * byteLength)

  return val
}

Buffer.prototype.readInt8 = function readInt8 (offset, noAssert) {
  if (!noAssert) checkOffset(offset, 1, this.length)
  if (!(this[offset] & 0x80)) return (this[offset])
  return ((0xff - this[offset] + 1) * -1)
}

Buffer.prototype.readInt16LE = function readInt16LE (offset, noAssert) {
  if (!noAssert) checkOffset(offset, 2, this.length)
  var val = this[offset] | (this[offset + 1] << 8)
  return (val & 0x8000) ? val | 0xFFFF0000 : val
}

Buffer.prototype.readInt16BE = function readInt16BE (offset, noAssert) {
  if (!noAssert) checkOffset(offset, 2, this.length)
  var val = this[offset + 1] | (this[offset] << 8)
  return (val & 0x8000) ? val | 0xFFFF0000 : val
}

Buffer.prototype.readInt32LE = function readInt32LE (offset, noAssert) {
  if (!noAssert) checkOffset(offset, 4, this.length)

  return (this[offset]) |
    (this[offset + 1] << 8) |
    (this[offset + 2] << 16) |
    (this[offset + 3] << 24)
}

Buffer.prototype.readInt32BE = function readInt32BE (offset, noAssert) {
  if (!noAssert) checkOffset(offset, 4, this.length)

  return (this[offset] << 24) |
    (this[offset + 1] << 16) |
    (this[offset + 2] << 8) |
    (this[offset + 3])
}

Buffer.prototype.readFloatLE = function readFloatLE (offset, noAssert) {
  if (!noAssert) checkOffset(offset, 4, this.length)
  return ieee754.read(this, offset, true, 23, 4)
}

Buffer.prototype.readFloatBE = function readFloatBE (offset, noAssert) {
  if (!noAssert) checkOffset(offset, 4, this.length)
  return ieee754.read(this, offset, false, 23, 4)
}

Buffer.prototype.readDoubleLE = function readDoubleLE (offset, noAssert) {
  if (!noAssert) checkOffset(offset, 8, this.length)
  return ieee754.read(this, offset, true, 52, 8)
}

Buffer.prototype.readDoubleBE = function readDoubleBE (offset, noAssert) {
  if (!noAssert) checkOffset(offset, 8, this.length)
  return ieee754.read(this, offset, false, 52, 8)
}

function checkInt (buf, value, offset, ext, max, min) {
  if (!Buffer.isBuffer(buf)) throw new TypeError('"buffer" argument must be a Buffer instance')
  if (value > max || value < min) throw new RangeError('"value" argument is out of bounds')
  if (offset + ext > buf.length) throw new RangeError('Index out of range')
}

Buffer.prototype.writeUIntLE = function writeUIntLE (value, offset, byteLength, noAssert) {
  value = +value
  offset = offset | 0
  byteLength = byteLength | 0
  if (!noAssert) {
    var maxBytes = Math.pow(2, 8 * byteLength) - 1
    checkInt(this, value, offset, byteLength, maxBytes, 0)
  }

  var mul = 1
  var i = 0
  this[offset] = value & 0xFF
  while (++i < byteLength && (mul *= 0x100)) {
    this[offset + i] = (value / mul) & 0xFF
  }

  return offset + byteLength
}

Buffer.prototype.writeUIntBE = function writeUIntBE (value, offset, byteLength, noAssert) {
  value = +value
  offset = offset | 0
  byteLength = byteLength | 0
  if (!noAssert) {
    var maxBytes = Math.pow(2, 8 * byteLength) - 1
    checkInt(this, value, offset, byteLength, maxBytes, 0)
  }

  var i = byteLength - 1
  var mul = 1
  this[offset + i] = value & 0xFF
  while (--i >= 0 && (mul *= 0x100)) {
    this[offset + i] = (value / mul) & 0xFF
  }

  return offset + byteLength
}

Buffer.prototype.writeUInt8 = function writeUInt8 (value, offset, noAssert) {
  value = +value
  offset = offset | 0
  if (!noAssert) checkInt(this, value, offset, 1, 0xff, 0)
  if (!Buffer.TYPED_ARRAY_SUPPORT) value = Math.floor(value)
  this[offset] = (value & 0xff)
  return offset + 1
}

function objectWriteUInt16 (buf, value, offset, littleEndian) {
  if (value < 0) value = 0xffff + value + 1
  for (var i = 0, j = Math.min(buf.length - offset, 2); i < j; ++i) {
    buf[offset + i] = (value & (0xff << (8 * (littleEndian ? i : 1 - i)))) >>>
      (littleEndian ? i : 1 - i) * 8
  }
}

Buffer.prototype.writeUInt16LE = function writeUInt16LE (value, offset, noAssert) {
  value = +value
  offset = offset | 0
  if (!noAssert) checkInt(this, value, offset, 2, 0xffff, 0)
  if (Buffer.TYPED_ARRAY_SUPPORT) {
    this[offset] = (value & 0xff)
    this[offset + 1] = (value >>> 8)
  } else {
    objectWriteUInt16(this, value, offset, true)
  }
  return offset + 2
}

Buffer.prototype.writeUInt16BE = function writeUInt16BE (value, offset, noAssert) {
  value = +value
  offset = offset | 0
  if (!noAssert) checkInt(this, value, offset, 2, 0xffff, 0)
  if (Buffer.TYPED_ARRAY_SUPPORT) {
    this[offset] = (value >>> 8)
    this[offset + 1] = (value & 0xff)
  } else {
    objectWriteUInt16(this, value, offset, false)
  }
  return offset + 2
}

function objectWriteUInt32 (buf, value, offset, littleEndian) {
  if (value < 0) value = 0xffffffff + value + 1
  for (var i = 0, j = Math.min(buf.length - offset, 4); i < j; ++i) {
    buf[offset + i] = (value >>> (littleEndian ? i : 3 - i) * 8) & 0xff
  }
}

Buffer.prototype.writeUInt32LE = function writeUInt32LE (value, offset, noAssert) {
  value = +value
  offset = offset | 0
  if (!noAssert) checkInt(this, value, offset, 4, 0xffffffff, 0)
  if (Buffer.TYPED_ARRAY_SUPPORT) {
    this[offset + 3] = (value >>> 24)
    this[offset + 2] = (value >>> 16)
    this[offset + 1] = (value >>> 8)
    this[offset] = (value & 0xff)
  } else {
    objectWriteUInt32(this, value, offset, true)
  }
  return offset + 4
}

Buffer.prototype.writeUInt32BE = function writeUInt32BE (value, offset, noAssert) {
  value = +value
  offset = offset | 0
  if (!noAssert) checkInt(this, value, offset, 4, 0xffffffff, 0)
  if (Buffer.TYPED_ARRAY_SUPPORT) {
    this[offset] = (value >>> 24)
    this[offset + 1] = (value >>> 16)
    this[offset + 2] = (value >>> 8)
    this[offset + 3] = (value & 0xff)
  } else {
    objectWriteUInt32(this, value, offset, false)
  }
  return offset + 4
}

Buffer.prototype.writeIntLE = function writeIntLE (value, offset, byteLength, noAssert) {
  value = +value
  offset = offset | 0
  if (!noAssert) {
    var limit = Math.pow(2, 8 * byteLength - 1)

    checkInt(this, value, offset, byteLength, limit - 1, -limit)
  }

  var i = 0
  var mul = 1
  var sub = 0
  this[offset] = value & 0xFF
  while (++i < byteLength && (mul *= 0x100)) {
    if (value < 0 && sub === 0 && this[offset + i - 1] !== 0) {
      sub = 1
    }
    this[offset + i] = ((value / mul) >> 0) - sub & 0xFF
  }

  return offset + byteLength
}

Buffer.prototype.writeIntBE = function writeIntBE (value, offset, byteLength, noAssert) {
  value = +value
  offset = offset | 0
  if (!noAssert) {
    var limit = Math.pow(2, 8 * byteLength - 1)

    checkInt(this, value, offset, byteLength, limit - 1, -limit)
  }

  var i = byteLength - 1
  var mul = 1
  var sub = 0
  this[offset + i] = value & 0xFF
  while (--i >= 0 && (mul *= 0x100)) {
    if (value < 0 && sub === 0 && this[offset + i + 1] !== 0) {
      sub = 1
    }
    this[offset + i] = ((value / mul) >> 0) - sub & 0xFF
  }

  return offset + byteLength
}

Buffer.prototype.writeInt8 = function writeInt8 (value, offset, noAssert) {
  value = +value
  offset = offset | 0
  if (!noAssert) checkInt(this, value, offset, 1, 0x7f, -0x80)
  if (!Buffer.TYPED_ARRAY_SUPPORT) value = Math.floor(value)
  if (value < 0) value = 0xff + value + 1
  this[offset] = (value & 0xff)
  return offset + 1
}

Buffer.prototype.writeInt16LE = function writeInt16LE (value, offset, noAssert) {
  value = +value
  offset = offset | 0
  if (!noAssert) checkInt(this, value, offset, 2, 0x7fff, -0x8000)
  if (Buffer.TYPED_ARRAY_SUPPORT) {
    this[offset] = (value & 0xff)
    this[offset + 1] = (value >>> 8)
  } else {
    objectWriteUInt16(this, value, offset, true)
  }
  return offset + 2
}

Buffer.prototype.writeInt16BE = function writeInt16BE (value, offset, noAssert) {
  value = +value
  offset = offset | 0
  if (!noAssert) checkInt(this, value, offset, 2, 0x7fff, -0x8000)
  if (Buffer.TYPED_ARRAY_SUPPORT) {
    this[offset] = (value >>> 8)
    this[offset + 1] = (value & 0xff)
  } else {
    objectWriteUInt16(this, value, offset, false)
  }
  return offset + 2
}

Buffer.prototype.writeInt32LE = function writeInt32LE (value, offset, noAssert) {
  value = +value
  offset = offset | 0
  if (!noAssert) checkInt(this, value, offset, 4, 0x7fffffff, -0x80000000)
  if (Buffer.TYPED_ARRAY_SUPPORT) {
    this[offset] = (value & 0xff)
    this[offset + 1] = (value >>> 8)
    this[offset + 2] = (value >>> 16)
    this[offset + 3] = (value >>> 24)
  } else {
    objectWriteUInt32(this, value, offset, true)
  }
  return offset + 4
}

Buffer.prototype.writeInt32BE = function writeInt32BE (value, offset, noAssert) {
  value = +value
  offset = offset | 0
  if (!noAssert) checkInt(this, value, offset, 4, 0x7fffffff, -0x80000000)
  if (value < 0) value = 0xffffffff + value + 1
  if (Buffer.TYPED_ARRAY_SUPPORT) {
    this[offset] = (value >>> 24)
    this[offset + 1] = (value >>> 16)
    this[offset + 2] = (value >>> 8)
    this[offset + 3] = (value & 0xff)
  } else {
    objectWriteUInt32(this, value, offset, false)
  }
  return offset + 4
}

function checkIEEE754 (buf, value, offset, ext, max, min) {
  if (offset + ext > buf.length) throw new RangeError('Index out of range')
  if (offset < 0) throw new RangeError('Index out of range')
}

function writeFloat (buf, value, offset, littleEndian, noAssert) {
  if (!noAssert) {
    checkIEEE754(buf, value, offset, 4, 3.4028234663852886e+38, -3.4028234663852886e+38)
  }
  ieee754.write(buf, value, offset, littleEndian, 23, 4)
  return offset + 4
}

Buffer.prototype.writeFloatLE = function writeFloatLE (value, offset, noAssert) {
  return writeFloat(this, value, offset, true, noAssert)
}

Buffer.prototype.writeFloatBE = function writeFloatBE (value, offset, noAssert) {
  return writeFloat(this, value, offset, false, noAssert)
}

function writeDouble (buf, value, offset, littleEndian, noAssert) {
  if (!noAssert) {
    checkIEEE754(buf, value, offset, 8, 1.7976931348623157E+308, -1.7976931348623157E+308)
  }
  ieee754.write(buf, value, offset, littleEndian, 52, 8)
  return offset + 8
}

Buffer.prototype.writeDoubleLE = function writeDoubleLE (value, offset, noAssert) {
  return writeDouble(this, value, offset, true, noAssert)
}

Buffer.prototype.writeDoubleBE = function writeDoubleBE (value, offset, noAssert) {
  return writeDouble(this, value, offset, false, noAssert)
}

// copy(targetBuffer, targetStart=0, sourceStart=0, sourceEnd=buffer.length)
Buffer.prototype.copy = function copy (target, targetStart, start, end) {
  if (!start) start = 0
  if (!end && end !== 0) end = this.length
  if (targetStart >= target.length) targetStart = target.length
  if (!targetStart) targetStart = 0
  if (end > 0 && end < start) end = start

  // Copy 0 bytes; we're done
  if (end === start) return 0
  if (target.length === 0 || this.length === 0) return 0

  // Fatal error conditions
  if (targetStart < 0) {
    throw new RangeError('targetStart out of bounds')
  }
  if (start < 0 || start >= this.length) throw new RangeError('sourceStart out of bounds')
  if (end < 0) throw new RangeError('sourceEnd out of bounds')

  // Are we oob?
  if (end > this.length) end = this.length
  if (target.length - targetStart < end - start) {
    end = target.length - targetStart + start
  }

  var len = end - start
  var i

  if (this === target && start < targetStart && targetStart < end) {
    // descending copy from end
    for (i = len - 1; i >= 0; --i) {
      target[i + targetStart] = this[i + start]
    }
  } else if (len < 1000 || !Buffer.TYPED_ARRAY_SUPPORT) {
    // ascending copy from start
    for (i = 0; i < len; ++i) {
      target[i + targetStart] = this[i + start]
    }
  } else {
    Uint8Array.prototype.set.call(
      target,
      this.subarray(start, start + len),
      targetStart
    )
  }

  return len
}

// Usage:
//    buffer.fill(number[, offset[, end]])
//    buffer.fill(buffer[, offset[, end]])
//    buffer.fill(string[, offset[, end]][, encoding])
Buffer.prototype.fill = function fill (val, start, end, encoding) {
  // Handle string cases:
  if (typeof val === 'string') {
    if (typeof start === 'string') {
      encoding = start
      start = 0
      end = this.length
    } else if (typeof end === 'string') {
      encoding = end
      end = this.length
    }
    if (val.length === 1) {
      var code = val.charCodeAt(0)
      if (code < 256) {
        val = code
      }
    }
    if (encoding !== undefined && typeof encoding !== 'string') {
      throw new TypeError('encoding must be a string')
    }
    if (typeof encoding === 'string' && !Buffer.isEncoding(encoding)) {
      throw new TypeError('Unknown encoding: ' + encoding)
    }
  } else if (typeof val === 'number') {
    val = val & 255
  }

  // Invalid ranges are not set to a default, so can range check early.
  if (start < 0 || this.length < start || this.length < end) {
    throw new RangeError('Out of range index')
  }

  if (end <= start) {
    return this
  }

  start = start >>> 0
  end = end === undefined ? this.length : end >>> 0

  if (!val) val = 0

  var i
  if (typeof val === 'number') {
    for (i = start; i < end; ++i) {
      this[i] = val
    }
  } else {
    var bytes = Buffer.isBuffer(val)
      ? val
      : utf8ToBytes(new Buffer(val, encoding).toString())
    var len = bytes.length
    for (i = 0; i < end - start; ++i) {
      this[i + start] = bytes[i % len]
    }
  }

  return this
}

// HELPER FUNCTIONS
// ================

var INVALID_BASE64_RE = /[^+\/0-9A-Za-z-_]/g

function base64clean (str) {
  // Node strips out invalid characters like \n and \t from the string, base64-js does not
  str = stringtrim(str).replace(INVALID_BASE64_RE, '')
  // Node converts strings with length < 2 to ''
  if (str.length < 2) return ''
  // Node allows for non-padded base64 strings (missing trailing ===), base64-js does not
  while (str.length % 4 !== 0) {
    str = str + '='
  }
  return str
}

function stringtrim (str) {
  if (str.trim) return str.trim()
  return str.replace(/^\s+|\s+$/g, '')
}

function toHex (n) {
  if (n < 16) return '0' + n.toString(16)
  return n.toString(16)
}

function utf8ToBytes (string, units) {
  units = units || Infinity
  var codePoint
  var length = string.length
  var leadSurrogate = null
  var bytes = []

  for (var i = 0; i < length; ++i) {
    codePoint = string.charCodeAt(i)

    // is surrogate component
    if (codePoint > 0xD7FF && codePoint < 0xE000) {
      // last char was a lead
      if (!leadSurrogate) {
        // no lead yet
        if (codePoint > 0xDBFF) {
          // unexpected trail
          if ((units -= 3) > -1) bytes.push(0xEF, 0xBF, 0xBD)
          continue
        } else if (i + 1 === length) {
          // unpaired lead
          if ((units -= 3) > -1) bytes.push(0xEF, 0xBF, 0xBD)
          continue
        }

        // valid lead
        leadSurrogate = codePoint

        continue
      }

      // 2 leads in a row
      if (codePoint < 0xDC00) {
        if ((units -= 3) > -1) bytes.push(0xEF, 0xBF, 0xBD)
        leadSurrogate = codePoint
        continue
      }

      // valid surrogate pair
      codePoint = (leadSurrogate - 0xD800 << 10 | codePoint - 0xDC00) + 0x10000
    } else if (leadSurrogate) {
      // valid bmp char, but last char was a lead
      if ((units -= 3) > -1) bytes.push(0xEF, 0xBF, 0xBD)
    }

    leadSurrogate = null

    // encode utf8
    if (codePoint < 0x80) {
      if ((units -= 1) < 0) break
      bytes.push(codePoint)
    } else if (codePoint < 0x800) {
      if ((units -= 2) < 0) break
      bytes.push(
        codePoint >> 0x6 | 0xC0,
        codePoint & 0x3F | 0x80
      )
    } else if (codePoint < 0x10000) {
      if ((units -= 3) < 0) break
      bytes.push(
        codePoint >> 0xC | 0xE0,
        codePoint >> 0x6 & 0x3F | 0x80,
        codePoint & 0x3F | 0x80
      )
    } else if (codePoint < 0x110000) {
      if ((units -= 4) < 0) break
      bytes.push(
        codePoint >> 0x12 | 0xF0,
        codePoint >> 0xC & 0x3F | 0x80,
        codePoint >> 0x6 & 0x3F | 0x80,
        codePoint & 0x3F | 0x80
      )
    } else {
      throw new Error('Invalid code point')
    }
  }

  return bytes
}

function asciiToBytes (str) {
  var byteArray = []
  for (var i = 0; i < str.length; ++i) {
    // Node's code seems to be doing this and not & 0x7F..
    byteArray.push(str.charCodeAt(i) & 0xFF)
  }
  return byteArray
}

function utf16leToBytes (str, units) {
  var c, hi, lo
  var byteArray = []
  for (var i = 0; i < str.length; ++i) {
    if ((units -= 2) < 0) break

    c = str.charCodeAt(i)
    hi = c >> 8
    lo = c % 256
    byteArray.push(lo)
    byteArray.push(hi)
  }

  return byteArray
}

function base64ToBytes (str) {
  return base64.toByteArray(base64clean(str))
}

function blitBuffer (src, dst, offset, length) {
  for (var i = 0; i < length; ++i) {
    if ((i + offset >= dst.length) || (i >= src.length)) break
    dst[i + offset] = src[i]
  }
  return i
}

function isnan (val) {
  return val !== val // eslint-disable-line no-self-compare
}


/***/ }),

/***/ "./node_modules/form-data/lib/browser.js":
/*!***********************************************!*\
  !*** ./node_modules/form-data/lib/browser.js ***!
  \***********************************************/
/***/ ((module) => {

/* eslint-env browser */
module.exports = typeof self == 'object' ? self.FormData : window.FormData;


/***/ }),

/***/ "./node_modules/ieee754/index.js":
/*!***************************************!*\
  !*** ./node_modules/ieee754/index.js ***!
  \***************************************/
/***/ ((__unused_webpack_module, exports) => {

/*! ieee754. BSD-3-Clause License. Feross Aboukhadijeh <https://feross.org/opensource> */
exports.read = function (buffer, offset, isLE, mLen, nBytes) {
  var e, m
  var eLen = (nBytes * 8) - mLen - 1
  var eMax = (1 << eLen) - 1
  var eBias = eMax >> 1
  var nBits = -7
  var i = isLE ? (nBytes - 1) : 0
  var d = isLE ? -1 : 1
  var s = buffer[offset + i]

  i += d

  e = s & ((1 << (-nBits)) - 1)
  s >>= (-nBits)
  nBits += eLen
  for (; nBits > 0; e = (e * 256) + buffer[offset + i], i += d, nBits -= 8) {}

  m = e & ((1 << (-nBits)) - 1)
  e >>= (-nBits)
  nBits += mLen
  for (; nBits > 0; m = (m * 256) + buffer[offset + i], i += d, nBits -= 8) {}

  if (e === 0) {
    e = 1 - eBias
  } else if (e === eMax) {
    return m ? NaN : ((s ? -1 : 1) * Infinity)
  } else {
    m = m + Math.pow(2, mLen)
    e = e - eBias
  }
  return (s ? -1 : 1) * m * Math.pow(2, e - mLen)
}

exports.write = function (buffer, value, offset, isLE, mLen, nBytes) {
  var e, m, c
  var eLen = (nBytes * 8) - mLen - 1
  var eMax = (1 << eLen) - 1
  var eBias = eMax >> 1
  var rt = (mLen === 23 ? Math.pow(2, -24) - Math.pow(2, -77) : 0)
  var i = isLE ? 0 : (nBytes - 1)
  var d = isLE ? 1 : -1
  var s = value < 0 || (value === 0 && 1 / value < 0) ? 1 : 0

  value = Math.abs(value)

  if (isNaN(value) || value === Infinity) {
    m = isNaN(value) ? 1 : 0
    e = eMax
  } else {
    e = Math.floor(Math.log(value) / Math.LN2)
    if (value * (c = Math.pow(2, -e)) < 1) {
      e--
      c *= 2
    }
    if (e + eBias >= 1) {
      value += rt / c
    } else {
      value += rt * Math.pow(2, 1 - eBias)
    }
    if (value * c >= 2) {
      e++
      c /= 2
    }

    if (e + eBias >= eMax) {
      m = 0
      e = eMax
    } else if (e + eBias >= 1) {
      m = ((value * c) - 1) * Math.pow(2, mLen)
      e = e + eBias
    } else {
      m = value * Math.pow(2, eBias - 1) * Math.pow(2, mLen)
      e = 0
    }
  }

  for (; mLen >= 8; buffer[offset + i] = m & 0xff, i += d, m /= 256, mLen -= 8) {}

  e = (e << mLen) | m
  eLen += mLen
  for (; eLen > 0; buffer[offset + i] = e & 0xff, i += d, e /= 256, eLen -= 8) {}

  buffer[offset + i - d] |= s * 128
}


/***/ }),

/***/ "./node_modules/isarray/index.js":
/*!***************************************!*\
  !*** ./node_modules/isarray/index.js ***!
  \***************************************/
/***/ ((module) => {

var toString = {}.toString;

module.exports = Array.isArray || function (arr) {
  return toString.call(arr) == '[object Array]';
};


/***/ }),

/***/ "./node_modules/isomorphic-ws/browser.js":
/*!***********************************************!*\
  !*** ./node_modules/isomorphic-ws/browser.js ***!
  \***********************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

// https://github.com/maxogden/websocket-stream/blob/48dc3ddf943e5ada668c31ccd94e9186f02fafbd/ws-fallback.js

var ws = null

if (typeof WebSocket !== 'undefined') {
  ws = WebSocket
} else if (typeof MozWebSocket !== 'undefined') {
  ws = MozWebSocket
} else if (typeof __webpack_require__.g !== 'undefined') {
  ws = __webpack_require__.g.WebSocket || __webpack_require__.g.MozWebSocket
} else if (typeof window !== 'undefined') {
  ws = window.WebSocket || window.MozWebSocket
} else if (typeof self !== 'undefined') {
  ws = self.WebSocket || self.MozWebSocket
}

module.exports = ws


/***/ }),

/***/ "./node_modules/process/browser.js":
/*!*****************************************!*\
  !*** ./node_modules/process/browser.js ***!
  \*****************************************/
/***/ ((module) => {

// shim for using process in browser
var process = module.exports = {};

// cached from whatever global is present so that test runners that stub it
// don't break things.  But we need to wrap it in a try catch in case it is
// wrapped in strict mode code which doesn't define any globals.  It's inside a
// function because try/catches deoptimize in certain engines.

var cachedSetTimeout;
var cachedClearTimeout;

function defaultSetTimout() {
    throw new Error('setTimeout has not been defined');
}
function defaultClearTimeout () {
    throw new Error('clearTimeout has not been defined');
}
(function () {
    try {
        if (typeof setTimeout === 'function') {
            cachedSetTimeout = setTimeout;
        } else {
            cachedSetTimeout = defaultSetTimout;
        }
    } catch (e) {
        cachedSetTimeout = defaultSetTimout;
    }
    try {
        if (typeof clearTimeout === 'function') {
            cachedClearTimeout = clearTimeout;
        } else {
            cachedClearTimeout = defaultClearTimeout;
        }
    } catch (e) {
        cachedClearTimeout = defaultClearTimeout;
    }
} ())
function runTimeout(fun) {
    if (cachedSetTimeout === setTimeout) {
        //normal enviroments in sane situations
        return setTimeout(fun, 0);
    }
    // if setTimeout wasn't available but was latter defined
    if ((cachedSetTimeout === defaultSetTimout || !cachedSetTimeout) && setTimeout) {
        cachedSetTimeout = setTimeout;
        return setTimeout(fun, 0);
    }
    try {
        // when when somebody has screwed with setTimeout but no I.E. maddness
        return cachedSetTimeout(fun, 0);
    } catch(e){
        try {
            // When we are in I.E. but the script has been evaled so I.E. doesn't trust the global object when called normally
            return cachedSetTimeout.call(null, fun, 0);
        } catch(e){
            // same as above but when it's a version of I.E. that must have the global object for 'this', hopfully our context correct otherwise it will throw a global error
            return cachedSetTimeout.call(this, fun, 0);
        }
    }


}
function runClearTimeout(marker) {
    if (cachedClearTimeout === clearTimeout) {
        //normal enviroments in sane situations
        return clearTimeout(marker);
    }
    // if clearTimeout wasn't available but was latter defined
    if ((cachedClearTimeout === defaultClearTimeout || !cachedClearTimeout) && clearTimeout) {
        cachedClearTimeout = clearTimeout;
        return clearTimeout(marker);
    }
    try {
        // when when somebody has screwed with setTimeout but no I.E. maddness
        return cachedClearTimeout(marker);
    } catch (e){
        try {
            // When we are in I.E. but the script has been evaled so I.E. doesn't  trust the global object when called normally
            return cachedClearTimeout.call(null, marker);
        } catch (e){
            // same as above but when it's a version of I.E. that must have the global object for 'this', hopfully our context correct otherwise it will throw a global error.
            // Some versions of I.E. have different rules for clearTimeout vs setTimeout
            return cachedClearTimeout.call(this, marker);
        }
    }



}
var queue = [];
var draining = false;
var currentQueue;
var queueIndex = -1;

function cleanUpNextTick() {
    if (!draining || !currentQueue) {
        return;
    }
    draining = false;
    if (currentQueue.length) {
        queue = currentQueue.concat(queue);
    } else {
        queueIndex = -1;
    }
    if (queue.length) {
        drainQueue();
    }
}

function drainQueue() {
    if (draining) {
        return;
    }
    var timeout = runTimeout(cleanUpNextTick);
    draining = true;

    var len = queue.length;
    while(len) {
        currentQueue = queue;
        queue = [];
        while (++queueIndex < len) {
            if (currentQueue) {
                currentQueue[queueIndex].run();
            }
        }
        queueIndex = -1;
        len = queue.length;
    }
    currentQueue = null;
    draining = false;
    runClearTimeout(timeout);
}

process.nextTick = function (fun) {
    var args = new Array(arguments.length - 1);
    if (arguments.length > 1) {
        for (var i = 1; i < arguments.length; i++) {
            args[i - 1] = arguments[i];
        }
    }
    queue.push(new Item(fun, args));
    if (queue.length === 1 && !draining) {
        runTimeout(drainQueue);
    }
};

// v8 likes predictible objects
function Item(fun, array) {
    this.fun = fun;
    this.array = array;
}
Item.prototype.run = function () {
    this.fun.apply(null, this.array);
};
process.title = 'browser';
process.browser = true;
process.env = {};
process.argv = [];
process.version = ''; // empty string to avoid regexp issues
process.versions = {};

function noop() {}

process.on = noop;
process.addListener = noop;
process.once = noop;
process.off = noop;
process.removeListener = noop;
process.removeAllListeners = noop;
process.emit = noop;
process.prependListener = noop;
process.prependOnceListener = noop;

process.listeners = function (name) { return [] }

process.binding = function (name) {
    throw new Error('process.binding is not supported');
};

process.cwd = function () { return '/' };
process.chdir = function (dir) {
    throw new Error('process.chdir is not supported');
};
process.umask = function() { return 0; };


/***/ }),

/***/ "./node_modules/regenerator-runtime/runtime.js":
/*!*****************************************************!*\
  !*** ./node_modules/regenerator-runtime/runtime.js ***!
  \*****************************************************/
/***/ ((module) => {

/**
 * Copyright (c) 2014-present, Facebook, Inc.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

var runtime = (function (exports) {
  "use strict";

  var Op = Object.prototype;
  var hasOwn = Op.hasOwnProperty;
  var undefined; // More compressible than void 0.
  var $Symbol = typeof Symbol === "function" ? Symbol : {};
  var iteratorSymbol = $Symbol.iterator || "@@iterator";
  var asyncIteratorSymbol = $Symbol.asyncIterator || "@@asyncIterator";
  var toStringTagSymbol = $Symbol.toStringTag || "@@toStringTag";

  function define(obj, key, value) {
    Object.defineProperty(obj, key, {
      value: value,
      enumerable: true,
      configurable: true,
      writable: true
    });
    return obj[key];
  }
  try {
    // IE 8 has a broken Object.defineProperty that only works on DOM objects.
    define({}, "");
  } catch (err) {
    define = function(obj, key, value) {
      return obj[key] = value;
    };
  }

  function wrap(innerFn, outerFn, self, tryLocsList) {
    // If outerFn provided and outerFn.prototype is a Generator, then outerFn.prototype instanceof Generator.
    var protoGenerator = outerFn && outerFn.prototype instanceof Generator ? outerFn : Generator;
    var generator = Object.create(protoGenerator.prototype);
    var context = new Context(tryLocsList || []);

    // The ._invoke method unifies the implementations of the .next,
    // .throw, and .return methods.
    generator._invoke = makeInvokeMethod(innerFn, self, context);

    return generator;
  }
  exports.wrap = wrap;

  // Try/catch helper to minimize deoptimizations. Returns a completion
  // record like context.tryEntries[i].completion. This interface could
  // have been (and was previously) designed to take a closure to be
  // invoked without arguments, but in all the cases we care about we
  // already have an existing method we want to call, so there's no need
  // to create a new function object. We can even get away with assuming
  // the method takes exactly one argument, since that happens to be true
  // in every case, so we don't have to touch the arguments object. The
  // only additional allocation required is the completion record, which
  // has a stable shape and so hopefully should be cheap to allocate.
  function tryCatch(fn, obj, arg) {
    try {
      return { type: "normal", arg: fn.call(obj, arg) };
    } catch (err) {
      return { type: "throw", arg: err };
    }
  }

  var GenStateSuspendedStart = "suspendedStart";
  var GenStateSuspendedYield = "suspendedYield";
  var GenStateExecuting = "executing";
  var GenStateCompleted = "completed";

  // Returning this object from the innerFn has the same effect as
  // breaking out of the dispatch switch statement.
  var ContinueSentinel = {};

  // Dummy constructor functions that we use as the .constructor and
  // .constructor.prototype properties for functions that return Generator
  // objects. For full spec compliance, you may wish to configure your
  // minifier not to mangle the names of these two functions.
  function Generator() {}
  function GeneratorFunction() {}
  function GeneratorFunctionPrototype() {}

  // This is a polyfill for %IteratorPrototype% for environments that
  // don't natively support it.
  var IteratorPrototype = {};
  IteratorPrototype[iteratorSymbol] = function () {
    return this;
  };

  var getProto = Object.getPrototypeOf;
  var NativeIteratorPrototype = getProto && getProto(getProto(values([])));
  if (NativeIteratorPrototype &&
      NativeIteratorPrototype !== Op &&
      hasOwn.call(NativeIteratorPrototype, iteratorSymbol)) {
    // This environment has a native %IteratorPrototype%; use it instead
    // of the polyfill.
    IteratorPrototype = NativeIteratorPrototype;
  }

  var Gp = GeneratorFunctionPrototype.prototype =
    Generator.prototype = Object.create(IteratorPrototype);
  GeneratorFunction.prototype = Gp.constructor = GeneratorFunctionPrototype;
  GeneratorFunctionPrototype.constructor = GeneratorFunction;
  GeneratorFunction.displayName = define(
    GeneratorFunctionPrototype,
    toStringTagSymbol,
    "GeneratorFunction"
  );

  // Helper for defining the .next, .throw, and .return methods of the
  // Iterator interface in terms of a single ._invoke method.
  function defineIteratorMethods(prototype) {
    ["next", "throw", "return"].forEach(function(method) {
      define(prototype, method, function(arg) {
        return this._invoke(method, arg);
      });
    });
  }

  exports.isGeneratorFunction = function(genFun) {
    var ctor = typeof genFun === "function" && genFun.constructor;
    return ctor
      ? ctor === GeneratorFunction ||
        // For the native GeneratorFunction constructor, the best we can
        // do is to check its .name property.
        (ctor.displayName || ctor.name) === "GeneratorFunction"
      : false;
  };

  exports.mark = function(genFun) {
    if (Object.setPrototypeOf) {
      Object.setPrototypeOf(genFun, GeneratorFunctionPrototype);
    } else {
      genFun.__proto__ = GeneratorFunctionPrototype;
      define(genFun, toStringTagSymbol, "GeneratorFunction");
    }
    genFun.prototype = Object.create(Gp);
    return genFun;
  };

  // Within the body of any async function, `await x` is transformed to
  // `yield regeneratorRuntime.awrap(x)`, so that the runtime can test
  // `hasOwn.call(value, "__await")` to determine if the yielded value is
  // meant to be awaited.
  exports.awrap = function(arg) {
    return { __await: arg };
  };

  function AsyncIterator(generator, PromiseImpl) {
    function invoke(method, arg, resolve, reject) {
      var record = tryCatch(generator[method], generator, arg);
      if (record.type === "throw") {
        reject(record.arg);
      } else {
        var result = record.arg;
        var value = result.value;
        if (value &&
            typeof value === "object" &&
            hasOwn.call(value, "__await")) {
          return PromiseImpl.resolve(value.__await).then(function(value) {
            invoke("next", value, resolve, reject);
          }, function(err) {
            invoke("throw", err, resolve, reject);
          });
        }

        return PromiseImpl.resolve(value).then(function(unwrapped) {
          // When a yielded Promise is resolved, its final value becomes
          // the .value of the Promise<{value,done}> result for the
          // current iteration.
          result.value = unwrapped;
          resolve(result);
        }, function(error) {
          // If a rejected Promise was yielded, throw the rejection back
          // into the async generator function so it can be handled there.
          return invoke("throw", error, resolve, reject);
        });
      }
    }

    var previousPromise;

    function enqueue(method, arg) {
      function callInvokeWithMethodAndArg() {
        return new PromiseImpl(function(resolve, reject) {
          invoke(method, arg, resolve, reject);
        });
      }

      return previousPromise =
        // If enqueue has been called before, then we want to wait until
        // all previous Promises have been resolved before calling invoke,
        // so that results are always delivered in the correct order. If
        // enqueue has not been called before, then it is important to
        // call invoke immediately, without waiting on a callback to fire,
        // so that the async generator function has the opportunity to do
        // any necessary setup in a predictable way. This predictability
        // is why the Promise constructor synchronously invokes its
        // executor callback, and why async functions synchronously
        // execute code before the first await. Since we implement simple
        // async functions in terms of async generators, it is especially
        // important to get this right, even though it requires care.
        previousPromise ? previousPromise.then(
          callInvokeWithMethodAndArg,
          // Avoid propagating failures to Promises returned by later
          // invocations of the iterator.
          callInvokeWithMethodAndArg
        ) : callInvokeWithMethodAndArg();
    }

    // Define the unified helper method that is used to implement .next,
    // .throw, and .return (see defineIteratorMethods).
    this._invoke = enqueue;
  }

  defineIteratorMethods(AsyncIterator.prototype);
  AsyncIterator.prototype[asyncIteratorSymbol] = function () {
    return this;
  };
  exports.AsyncIterator = AsyncIterator;

  // Note that simple async functions are implemented on top of
  // AsyncIterator objects; they just return a Promise for the value of
  // the final result produced by the iterator.
  exports.async = function(innerFn, outerFn, self, tryLocsList, PromiseImpl) {
    if (PromiseImpl === void 0) PromiseImpl = Promise;

    var iter = new AsyncIterator(
      wrap(innerFn, outerFn, self, tryLocsList),
      PromiseImpl
    );

    return exports.isGeneratorFunction(outerFn)
      ? iter // If outerFn is a generator, return the full iterator.
      : iter.next().then(function(result) {
          return result.done ? result.value : iter.next();
        });
  };

  function makeInvokeMethod(innerFn, self, context) {
    var state = GenStateSuspendedStart;

    return function invoke(method, arg) {
      if (state === GenStateExecuting) {
        throw new Error("Generator is already running");
      }

      if (state === GenStateCompleted) {
        if (method === "throw") {
          throw arg;
        }

        // Be forgiving, per 25.3.3.3.3 of the spec:
        // https://people.mozilla.org/~jorendorff/es6-draft.html#sec-generatorresume
        return doneResult();
      }

      context.method = method;
      context.arg = arg;

      while (true) {
        var delegate = context.delegate;
        if (delegate) {
          var delegateResult = maybeInvokeDelegate(delegate, context);
          if (delegateResult) {
            if (delegateResult === ContinueSentinel) continue;
            return delegateResult;
          }
        }

        if (context.method === "next") {
          // Setting context._sent for legacy support of Babel's
          // function.sent implementation.
          context.sent = context._sent = context.arg;

        } else if (context.method === "throw") {
          if (state === GenStateSuspendedStart) {
            state = GenStateCompleted;
            throw context.arg;
          }

          context.dispatchException(context.arg);

        } else if (context.method === "return") {
          context.abrupt("return", context.arg);
        }

        state = GenStateExecuting;

        var record = tryCatch(innerFn, self, context);
        if (record.type === "normal") {
          // If an exception is thrown from innerFn, we leave state ===
          // GenStateExecuting and loop back for another invocation.
          state = context.done
            ? GenStateCompleted
            : GenStateSuspendedYield;

          if (record.arg === ContinueSentinel) {
            continue;
          }

          return {
            value: record.arg,
            done: context.done
          };

        } else if (record.type === "throw") {
          state = GenStateCompleted;
          // Dispatch the exception by looping back around to the
          // context.dispatchException(context.arg) call above.
          context.method = "throw";
          context.arg = record.arg;
        }
      }
    };
  }

  // Call delegate.iterator[context.method](context.arg) and handle the
  // result, either by returning a { value, done } result from the
  // delegate iterator, or by modifying context.method and context.arg,
  // setting context.delegate to null, and returning the ContinueSentinel.
  function maybeInvokeDelegate(delegate, context) {
    var method = delegate.iterator[context.method];
    if (method === undefined) {
      // A .throw or .return when the delegate iterator has no .throw
      // method always terminates the yield* loop.
      context.delegate = null;

      if (context.method === "throw") {
        // Note: ["return"] must be used for ES3 parsing compatibility.
        if (delegate.iterator["return"]) {
          // If the delegate iterator has a return method, give it a
          // chance to clean up.
          context.method = "return";
          context.arg = undefined;
          maybeInvokeDelegate(delegate, context);

          if (context.method === "throw") {
            // If maybeInvokeDelegate(context) changed context.method from
            // "return" to "throw", let that override the TypeError below.
            return ContinueSentinel;
          }
        }

        context.method = "throw";
        context.arg = new TypeError(
          "The iterator does not provide a 'throw' method");
      }

      return ContinueSentinel;
    }

    var record = tryCatch(method, delegate.iterator, context.arg);

    if (record.type === "throw") {
      context.method = "throw";
      context.arg = record.arg;
      context.delegate = null;
      return ContinueSentinel;
    }

    var info = record.arg;

    if (! info) {
      context.method = "throw";
      context.arg = new TypeError("iterator result is not an object");
      context.delegate = null;
      return ContinueSentinel;
    }

    if (info.done) {
      // Assign the result of the finished delegate to the temporary
      // variable specified by delegate.resultName (see delegateYield).
      context[delegate.resultName] = info.value;

      // Resume execution at the desired location (see delegateYield).
      context.next = delegate.nextLoc;

      // If context.method was "throw" but the delegate handled the
      // exception, let the outer generator proceed normally. If
      // context.method was "next", forget context.arg since it has been
      // "consumed" by the delegate iterator. If context.method was
      // "return", allow the original .return call to continue in the
      // outer generator.
      if (context.method !== "return") {
        context.method = "next";
        context.arg = undefined;
      }

    } else {
      // Re-yield the result returned by the delegate method.
      return info;
    }

    // The delegate iterator is finished, so forget it and continue with
    // the outer generator.
    context.delegate = null;
    return ContinueSentinel;
  }

  // Define Generator.prototype.{next,throw,return} in terms of the
  // unified ._invoke helper method.
  defineIteratorMethods(Gp);

  define(Gp, toStringTagSymbol, "Generator");

  // A Generator should always return itself as the iterator object when the
  // @@iterator function is called on it. Some browsers' implementations of the
  // iterator prototype chain incorrectly implement this, causing the Generator
  // object to not be returned from this call. This ensures that doesn't happen.
  // See https://github.com/facebook/regenerator/issues/274 for more details.
  Gp[iteratorSymbol] = function() {
    return this;
  };

  Gp.toString = function() {
    return "[object Generator]";
  };

  function pushTryEntry(locs) {
    var entry = { tryLoc: locs[0] };

    if (1 in locs) {
      entry.catchLoc = locs[1];
    }

    if (2 in locs) {
      entry.finallyLoc = locs[2];
      entry.afterLoc = locs[3];
    }

    this.tryEntries.push(entry);
  }

  function resetTryEntry(entry) {
    var record = entry.completion || {};
    record.type = "normal";
    delete record.arg;
    entry.completion = record;
  }

  function Context(tryLocsList) {
    // The root entry object (effectively a try statement without a catch
    // or a finally block) gives us a place to store values thrown from
    // locations where there is no enclosing try statement.
    this.tryEntries = [{ tryLoc: "root" }];
    tryLocsList.forEach(pushTryEntry, this);
    this.reset(true);
  }

  exports.keys = function(object) {
    var keys = [];
    for (var key in object) {
      keys.push(key);
    }
    keys.reverse();

    // Rather than returning an object with a next method, we keep
    // things simple and return the next function itself.
    return function next() {
      while (keys.length) {
        var key = keys.pop();
        if (key in object) {
          next.value = key;
          next.done = false;
          return next;
        }
      }

      // To avoid creating an additional object, we just hang the .value
      // and .done properties off the next function object itself. This
      // also ensures that the minifier will not anonymize the function.
      next.done = true;
      return next;
    };
  };

  function values(iterable) {
    if (iterable) {
      var iteratorMethod = iterable[iteratorSymbol];
      if (iteratorMethod) {
        return iteratorMethod.call(iterable);
      }

      if (typeof iterable.next === "function") {
        return iterable;
      }

      if (!isNaN(iterable.length)) {
        var i = -1, next = function next() {
          while (++i < iterable.length) {
            if (hasOwn.call(iterable, i)) {
              next.value = iterable[i];
              next.done = false;
              return next;
            }
          }

          next.value = undefined;
          next.done = true;

          return next;
        };

        return next.next = next;
      }
    }

    // Return an iterator with no values.
    return { next: doneResult };
  }
  exports.values = values;

  function doneResult() {
    return { value: undefined, done: true };
  }

  Context.prototype = {
    constructor: Context,

    reset: function(skipTempReset) {
      this.prev = 0;
      this.next = 0;
      // Resetting context._sent for legacy support of Babel's
      // function.sent implementation.
      this.sent = this._sent = undefined;
      this.done = false;
      this.delegate = null;

      this.method = "next";
      this.arg = undefined;

      this.tryEntries.forEach(resetTryEntry);

      if (!skipTempReset) {
        for (var name in this) {
          // Not sure about the optimal order of these conditions:
          if (name.charAt(0) === "t" &&
              hasOwn.call(this, name) &&
              !isNaN(+name.slice(1))) {
            this[name] = undefined;
          }
        }
      }
    },

    stop: function() {
      this.done = true;

      var rootEntry = this.tryEntries[0];
      var rootRecord = rootEntry.completion;
      if (rootRecord.type === "throw") {
        throw rootRecord.arg;
      }

      return this.rval;
    },

    dispatchException: function(exception) {
      if (this.done) {
        throw exception;
      }

      var context = this;
      function handle(loc, caught) {
        record.type = "throw";
        record.arg = exception;
        context.next = loc;

        if (caught) {
          // If the dispatched exception was caught by a catch block,
          // then let that catch block handle the exception normally.
          context.method = "next";
          context.arg = undefined;
        }

        return !! caught;
      }

      for (var i = this.tryEntries.length - 1; i >= 0; --i) {
        var entry = this.tryEntries[i];
        var record = entry.completion;

        if (entry.tryLoc === "root") {
          // Exception thrown outside of any try block that could handle
          // it, so set the completion value of the entire function to
          // throw the exception.
          return handle("end");
        }

        if (entry.tryLoc <= this.prev) {
          var hasCatch = hasOwn.call(entry, "catchLoc");
          var hasFinally = hasOwn.call(entry, "finallyLoc");

          if (hasCatch && hasFinally) {
            if (this.prev < entry.catchLoc) {
              return handle(entry.catchLoc, true);
            } else if (this.prev < entry.finallyLoc) {
              return handle(entry.finallyLoc);
            }

          } else if (hasCatch) {
            if (this.prev < entry.catchLoc) {
              return handle(entry.catchLoc, true);
            }

          } else if (hasFinally) {
            if (this.prev < entry.finallyLoc) {
              return handle(entry.finallyLoc);
            }

          } else {
            throw new Error("try statement without catch or finally");
          }
        }
      }
    },

    abrupt: function(type, arg) {
      for (var i = this.tryEntries.length - 1; i >= 0; --i) {
        var entry = this.tryEntries[i];
        if (entry.tryLoc <= this.prev &&
            hasOwn.call(entry, "finallyLoc") &&
            this.prev < entry.finallyLoc) {
          var finallyEntry = entry;
          break;
        }
      }

      if (finallyEntry &&
          (type === "break" ||
           type === "continue") &&
          finallyEntry.tryLoc <= arg &&
          arg <= finallyEntry.finallyLoc) {
        // Ignore the finally entry if control is not jumping to a
        // location outside the try/catch block.
        finallyEntry = null;
      }

      var record = finallyEntry ? finallyEntry.completion : {};
      record.type = type;
      record.arg = arg;

      if (finallyEntry) {
        this.method = "next";
        this.next = finallyEntry.finallyLoc;
        return ContinueSentinel;
      }

      return this.complete(record);
    },

    complete: function(record, afterLoc) {
      if (record.type === "throw") {
        throw record.arg;
      }

      if (record.type === "break" ||
          record.type === "continue") {
        this.next = record.arg;
      } else if (record.type === "return") {
        this.rval = this.arg = record.arg;
        this.method = "return";
        this.next = "end";
      } else if (record.type === "normal" && afterLoc) {
        this.next = afterLoc;
      }

      return ContinueSentinel;
    },

    finish: function(finallyLoc) {
      for (var i = this.tryEntries.length - 1; i >= 0; --i) {
        var entry = this.tryEntries[i];
        if (entry.finallyLoc === finallyLoc) {
          this.complete(entry.completion, entry.afterLoc);
          resetTryEntry(entry);
          return ContinueSentinel;
        }
      }
    },

    "catch": function(tryLoc) {
      for (var i = this.tryEntries.length - 1; i >= 0; --i) {
        var entry = this.tryEntries[i];
        if (entry.tryLoc === tryLoc) {
          var record = entry.completion;
          if (record.type === "throw") {
            var thrown = record.arg;
            resetTryEntry(entry);
          }
          return thrown;
        }
      }

      // The context.catch method must only be called with a location
      // argument that corresponds to a known catch block.
      throw new Error("illegal catch attempt");
    },

    delegateYield: function(iterable, resultName, nextLoc) {
      this.delegate = {
        iterator: values(iterable),
        resultName: resultName,
        nextLoc: nextLoc
      };

      if (this.method === "next") {
        // Deliberately forget the last sent value so that we don't
        // accidentally pass it on to the delegate.
        this.arg = undefined;
      }

      return ContinueSentinel;
    }
  };

  // Regardless of whether this script is executing as a CommonJS module
  // or not, return the runtime object so that we can declare the variable
  // regeneratorRuntime in the outer scope, which allows this module to be
  // injected easily by `bin/regenerator --include-runtime script.js`.
  return exports;

}(
  // If this script is executing as a CommonJS module, use module.exports
  // as the regeneratorRuntime namespace. Otherwise create a new empty
  // object. Either way, the resulting object will be used to initialize
  // the regeneratorRuntime variable at the top of this file.
   true ? module.exports : 0
));

try {
  regeneratorRuntime = runtime;
} catch (accidentalStrictMode) {
  // This module should not be running in strict mode, so the above
  // assignment should always work unless something is misconfigured. Just
  // in case runtime.js accidentally runs in strict mode, we can escape
  // strict mode using a global Function call. This could conceivably fail
  // if a Content Security Policy forbids using Function, but in that case
  // the proper solution is to fix the accidental strict mode problem. If
  // you've misconfigured your bundler to force strict mode and applied a
  // CSP to forbid Function, and you're not willing to fix either of those
  // problems, please detail your unique predicament in a GitHub issue.
  Function("r", "regeneratorRuntime = r")(runtime);
}


/***/ }),

/***/ "./node_modules/stream-chat/dist/browser.es.js":
/*!*****************************************************!*\
  !*** ./node_modules/stream-chat/dist/browser.es.js ***!
  \*****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "Allow": () => (/* binding */ Allow),
/* harmony export */   "AllowAll": () => (/* binding */ AllowAll),
/* harmony export */   "AnyResource": () => (/* binding */ AnyResource),
/* harmony export */   "AnyRole": () => (/* binding */ AnyRole),
/* harmony export */   "BuiltinPermissions": () => (/* binding */ BuiltinPermissions),
/* harmony export */   "BuiltinRoles": () => (/* binding */ BuiltinRoles),
/* harmony export */   "Channel": () => (/* binding */ Channel),
/* harmony export */   "ChannelState": () => (/* binding */ ChannelState),
/* harmony export */   "CheckSignature": () => (/* binding */ CheckSignature),
/* harmony export */   "ClientState": () => (/* binding */ ClientState),
/* harmony export */   "Deny": () => (/* binding */ Deny),
/* harmony export */   "DenyAll": () => (/* binding */ DenyAll),
/* harmony export */   "DevToken": () => (/* binding */ DevToken),
/* harmony export */   "EVENT_MAP": () => (/* binding */ EVENT_MAP),
/* harmony export */   "JWTServerToken": () => (/* binding */ JWTServerToken),
/* harmony export */   "JWTUserToken": () => (/* binding */ JWTUserToken),
/* harmony export */   "MaxPriority": () => (/* binding */ MaxPriority),
/* harmony export */   "MinPriority": () => (/* binding */ MinPriority),
/* harmony export */   "Permission": () => (/* binding */ Permission),
/* harmony export */   "StableWSConnection": () => (/* binding */ StableWSConnection),
/* harmony export */   "StreamChat": () => (/* binding */ StreamChat),
/* harmony export */   "TokenManager": () => (/* binding */ TokenManager),
/* harmony export */   "UserFromToken": () => (/* binding */ UserFromToken),
/* harmony export */   "chatCodes": () => (/* binding */ chatCodes),
/* harmony export */   "decodeBase64": () => (/* binding */ decodeBase64),
/* harmony export */   "encodeBase64": () => (/* binding */ encodeBase64),
/* harmony export */   "isOwnUser": () => (/* binding */ isOwnUser),
/* harmony export */   "isValidEventType": () => (/* binding */ isValidEventType),
/* harmony export */   "logChatPromiseExecution": () => (/* binding */ logChatPromiseExecution)
/* harmony export */ });
/* harmony import */ var base64_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! base64-js */ "./node_modules/base64-js/index.js");
/* harmony import */ var _babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/extends */ "./node_modules/@babel/runtime/helpers/esm/extends.js");
/* harmony import */ var _babel_runtime_helpers_typeof__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @babel/runtime/helpers/typeof */ "./node_modules/@babel/runtime/helpers/esm/typeof.js");
/* harmony import */ var _babel_runtime_helpers_objectWithoutProperties__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @babel/runtime/helpers/objectWithoutProperties */ "./node_modules/@babel/runtime/helpers/esm/objectWithoutProperties.js");
/* harmony import */ var _babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @babel/runtime/helpers/toConsumableArray */ "./node_modules/@babel/runtime/helpers/esm/toConsumableArray.js");
/* harmony import */ var _babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @babel/runtime/helpers/asyncToGenerator */ "./node_modules/@babel/runtime/helpers/esm/asyncToGenerator.js");
/* harmony import */ var _babel_runtime_helpers_classCallCheck__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @babel/runtime/helpers/classCallCheck */ "./node_modules/@babel/runtime/helpers/esm/classCallCheck.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/esm/createClass.js");
/* harmony import */ var _babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! @babel/runtime/helpers/defineProperty */ "./node_modules/@babel/runtime/helpers/esm/defineProperty.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! axios */ "./node_modules/axios/index.js");
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(axios__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! @babel/runtime/helpers/slicedToArray */ "./node_modules/@babel/runtime/helpers/esm/slicedToArray.js");
/* harmony import */ var form_data__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! form-data */ "./node_modules/form-data/lib/browser.js");
/* harmony import */ var form_data__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(form_data__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var isomorphic_ws__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! isomorphic-ws */ "./node_modules/isomorphic-ws/browser.js");
/* harmony import */ var isomorphic_ws__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(isomorphic_ws__WEBPACK_IMPORTED_MODULE_13__);
/* provided dependency */ var Buffer = __webpack_require__(/*! buffer */ "./node_modules/buffer/index.js")["Buffer"];
/* provided dependency */ var process = __webpack_require__(/*! process/browser */ "./node_modules/process/browser.js");















function isString$1(arrayOrString) {
  return typeof arrayOrString === 'string';
}

function isMapStringCallback(arrayOrString, callback) {
  return !!callback && isString$1(arrayOrString);
} // source - https://github.com/beatgammit/base64-js/blob/master/test/convert.js#L72


function map(arrayOrString, callback) {
  var res = [];

  if (isString$1(arrayOrString) && isMapStringCallback(arrayOrString, callback)) {
    for (var k = 0, len = arrayOrString.length; k < len; k++) {
      if (arrayOrString.charAt(k)) {
        var kValue = arrayOrString.charAt(k);
        var mappedValue = callback(kValue, k, arrayOrString);
        res[k] = mappedValue;
      }
    }
  } else if (!isString$1(arrayOrString) && !isMapStringCallback(arrayOrString, callback)) {
    for (var _k = 0, _len = arrayOrString.length; _k < _len; _k++) {
      if (_k in arrayOrString) {
        var _kValue = arrayOrString[_k];

        var _mappedValue = callback(_kValue, _k, arrayOrString);

        res[_k] = _mappedValue;
      }
    }
  }

  return res;
}

var encodeBase64 = function encodeBase64(data) {
  return (0,base64_js__WEBPACK_IMPORTED_MODULE_0__.fromByteArray)(new Uint8Array(map(data, function (char) {
    return char.charCodeAt(0);
  })));
}; // base-64 decoder throws exception if encoded string is not padded by '=' to make string length
// in multiples of 4. So gonna use our own method for this purpose to keep backwards compatibility
// https://github.com/beatgammit/base64-js/blob/master/index.js#L26

var decodeBase64 = function decodeBase64(s) {
  var e = {},
      w = String.fromCharCode,
      L = s.length;
  var i,
      b = 0,
      c,
      x,
      l = 0,
      a,
      r = '';
  var A = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/';

  for (i = 0; i < 64; i++) {
    e[A.charAt(i)] = i;
  }

  for (x = 0; x < L; x++) {
    c = e[s.charAt(x)];
    b = (b << 6) + c;
    l += 6;

    while (l >= 8) {
      ((a = b >>> (l -= 8) & 0xff) || x < L - 2) && (r += w(a));
    }
  }

  return r;
};

var https = null;

function ownKeys$4(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); if (enumerableOnly) symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; }); keys.push.apply(keys, symbols); } return keys; }

function _objectSpread$4(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; if (i % 2) { ownKeys$4(Object(source), true).forEach(function (key) { (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(target, key, source[key]); }); } else if (Object.getOwnPropertyDescriptors) { Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)); } else { ownKeys$4(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } } return target; }

/**
 * ChannelState - A container class for the channel state.
 */
var ChannelState = /*#__PURE__*/function () {
  /**
   * Flag which indicates if channel state contain latest/recent messages or no.
   * This flag should be managed by UI sdks using a setter - setIsUpToDate.
   * When false, any new message (received by websocket event - message.new) will not
   * be pushed on to message list.
   */
  function ChannelState(channel) {
    var _this = this,
        _channel$state;

    (0,_babel_runtime_helpers_classCallCheck__WEBPACK_IMPORTED_MODULE_6__.default)(this, ChannelState);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "_channel", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "watcher_count", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "typing", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "read", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "messages", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "pinnedMessages", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "threads", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "mutedUsers", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "watchers", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "members", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "unreadCount", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "membership", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "last_message_at", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "isUpToDate", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "setIsUpToDate", function (isUpToDate) {
      _this.isUpToDate = isUpToDate;
    });

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "removeMessageFromArray", function (msgArray, msg) {
      var result = msgArray.filter(function (message) {
        return !(!!message.id && !!msg.id && message.id === msg.id);
      });
      return {
        removed: result.length < msgArray.length,
        result: result
      };
    });

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "updateUserMessages", function (user) {
      var _updateUserMessages = function _updateUserMessages(messages, user) {
        for (var i = 0; i < messages.length; i++) {
          var _m$user;

          var m = messages[i];

          if (((_m$user = m.user) === null || _m$user === void 0 ? void 0 : _m$user.id) === user.id) {
            messages[i] = _objectSpread$4(_objectSpread$4({}, m), {}, {
              user: user
            });
          }
        }
      };

      _updateUserMessages(_this.messages, user);

      for (var parentId in _this.threads) {
        _updateUserMessages(_this.threads[parentId], user);
      }

      _updateUserMessages(_this.pinnedMessages, user);
    });

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "deleteUserMessages", function (user) {
      var hardDelete = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;

      var _deleteUserMessages = function _deleteUserMessages(messages, user) {
        var hardDelete = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : false;

        for (var i = 0; i < messages.length; i++) {
          var _m$user2;

          var m = messages[i];

          if (((_m$user2 = m.user) === null || _m$user2 === void 0 ? void 0 : _m$user2.id) !== user.id) {
            continue;
          }

          if (hardDelete) {
            /**
             * In case of hard delete, we need to strip down all text, html,
             * attachments and all the custom properties on message
             */
            messages[i] = {
              cid: m.cid,
              created_at: m.created_at,
              deleted_at: user.deleted_at,
              id: m.id,
              latest_reactions: [],
              mentioned_users: [],
              own_reactions: [],
              parent_id: m.parent_id,
              reply_count: m.reply_count,
              status: m.status,
              thread_participants: m.thread_participants,
              type: 'deleted',
              updated_at: m.updated_at,
              user: m.user
            };
          } else {
            messages[i] = _objectSpread$4(_objectSpread$4({}, m), {}, {
              type: 'deleted',
              deleted_at: user.deleted_at
            });
          }
        }
      };

      _deleteUserMessages(_this.messages, user, hardDelete);

      for (var parentId in _this.threads) {
        _deleteUserMessages(_this.threads[parentId], user, hardDelete);
      }

      _deleteUserMessages(_this.pinnedMessages, user, hardDelete);
    });

    this._channel = channel;
    this.watcher_count = 0;
    this.typing = {};
    this.read = {};
    this.messages = [];
    this.pinnedMessages = [];
    this.threads = {}; // a list of users to hide messages from

    this.mutedUsers = [];
    this.watchers = {};
    this.members = {};
    this.membership = {};
    this.unreadCount = 0;
    /**
     * Flag which indicates if channel state contain latest/recent messages or no.
     * This flag should be managed by UI sdks using a setter - setIsUpToDate.
     * When false, any new message (received by websocket event - message.new) will not
     * be pushed on to message list.
     */

    this.isUpToDate = true;
    this.last_message_at = (channel === null || channel === void 0 ? void 0 : (_channel$state = channel.state) === null || _channel$state === void 0 ? void 0 : _channel$state.last_message_at) != null ? new Date(channel.state.last_message_at) : null;
  }
  /**
   * addMessageSorted - Add a message to the state
   *
   * @param {MessageResponse<AttachmentType, ChannelType, CommandType, MessageType, ReactionType, UserType>} newMessage A new message
   * @param {boolean} timestampChanged Whether updating a message with changed created_at value.
   *
   */


  (0,_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_7__.default)(ChannelState, [{
    key: "addMessageSorted",
    value: function addMessageSorted(newMessage) {
      var timestampChanged = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;
      return this.addMessagesSorted([newMessage], timestampChanged);
    }
    /**
     * formatMessage - Takes the message object. Parses the dates, sets __html
     * and sets the status to received if missing. Returns a message object
     *
     * @param {MessageResponse<AttachmentType, ChannelType, CommandType, MessageType, ReactionType, UserType>} message a message object
     *
     */

  }, {
    key: "formatMessage",
    value: function formatMessage(message) {
      return _objectSpread$4(_objectSpread$4({}, message), {}, {
        /**
         * @deprecated please use `html`
         */
        __html: message.html,
        // parse the date..
        pinned_at: message.pinned_at ? new Date(message.pinned_at) : null,
        created_at: message.created_at ? new Date(message.created_at) : new Date(),
        updated_at: message.updated_at ? new Date(message.updated_at) : new Date(),
        status: message.status || 'received'
      });
    }
    /**
     * addMessagesSorted - Add the list of messages to state and resorts the messages
     *
     * @param {Array<MessageResponse<AttachmentType, ChannelType, CommandType, MessageType, ReactionType, UserType>>} newMessages A list of messages
     * @param {boolean} timestampChanged Whether updating messages with changed created_at value.
     * @param {boolean} initializing Whether channel is being initialized.
     *
     */

  }, {
    key: "addMessagesSorted",
    value: function addMessagesSorted(newMessages) {
      var timestampChanged = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;
      var initializing = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : false;

      for (var i = 0; i < newMessages.length; i += 1) {
        var _this$_channel;

        var message = this.formatMessage(newMessages[i]);

        if (message.user && (_this$_channel = this._channel) !== null && _this$_channel !== void 0 && _this$_channel.cid) {
          /**
           * Store the reference to user for this channel, so that when we have to
           * handle updates to user, we can use the reference map, to determine which
           * channels need to be updated with updated user object.
           */
          this._channel.getClient().state.updateUserReference(message.user, this._channel.cid);
        }

        if (initializing && message.id && this.threads[message.id]) {
          // If we are initializing the state of channel (e.g., in case of connection recovery),
          // then in that case we remove thread related to this message from threads object.
          // This way we can ensure that we don't have any stale data in thread object
          // and consumer can refetch the replies.
          delete this.threads[message.id];
        }

        if (!this.last_message_at) {
          this.last_message_at = new Date(message.created_at.getTime());
        }

        if (message.created_at.getTime() > this.last_message_at.getTime()) {
          this.last_message_at = new Date(message.created_at.getTime());
        } // update or append the messages...


        var parentID = message.parent_id; // add to the main message list

        if (!parentID || message.show_in_channel) {
          this.messages = this._addToMessageList(this.messages, message, timestampChanged);
        } // add to the thread if applicable..


        if (parentID) {
          var thread = this.threads[parentID] || [];

          var threadMessages = this._addToMessageList(thread, message, timestampChanged);

          this.threads[parentID] = threadMessages;
        }
      }
    }
    /**
     * addPinnedMessages - adds messages in pinnedMessages property
     *
     * @param {Array<MessageResponse<AttachmentType, ChannelType, CommandType, MessageType, ReactionType, UserType>>} pinnedMessages A list of pinned messages
     *
     */

  }, {
    key: "addPinnedMessages",
    value: function addPinnedMessages(pinnedMessages) {
      for (var i = 0; i < pinnedMessages.length; i += 1) {
        this.addPinnedMessage(pinnedMessages[i]);
      }
    }
    /**
     * addPinnedMessage - adds message in pinnedMessages
     *
     * @param {MessageResponse<AttachmentType, ChannelType, CommandType, MessageType, ReactionType, UserType>} pinnedMessage message to update
     *
     */

  }, {
    key: "addPinnedMessage",
    value: function addPinnedMessage(pinnedMessage) {
      this.pinnedMessages = this._addToMessageList(this.pinnedMessages, this.formatMessage(pinnedMessage), false, 'pinned_at');
    }
    /**
     * removePinnedMessage - removes pinned message from pinnedMessages
     *
     * @param {MessageResponse<AttachmentType, ChannelType, CommandType, MessageType, ReactionType, UserType>} message message to remove
     *
     */

  }, {
    key: "removePinnedMessage",
    value: function removePinnedMessage(message) {
      var _this$removeMessageFr = this.removeMessageFromArray(this.pinnedMessages, message),
          result = _this$removeMessageFr.result;

      this.pinnedMessages = result;
    }
  }, {
    key: "addReaction",
    value: function addReaction(reaction, message, enforce_unique) {
      var _this2 = this;

      if (!message) return;
      var messageWithReaction = message;

      this._updateMessage(message, function (msg) {
        messageWithReaction.own_reactions = _this2._addOwnReactionToMessage(msg.own_reactions, reaction, enforce_unique);
        return _this2.formatMessage(messageWithReaction);
      });

      return messageWithReaction;
    }
  }, {
    key: "_addOwnReactionToMessage",
    value: function _addOwnReactionToMessage(ownReactions, reaction, enforce_unique) {
      if (enforce_unique) {
        ownReactions = [];
      } else {
        ownReactions = this._removeOwnReactionFromMessage(ownReactions, reaction);
      }

      ownReactions = ownReactions || [];

      if (this._channel.getClient().userID === reaction.user_id) {
        ownReactions.push(reaction);
      }

      return ownReactions;
    }
  }, {
    key: "_removeOwnReactionFromMessage",
    value: function _removeOwnReactionFromMessage(ownReactions, reaction) {
      if (ownReactions) {
        return ownReactions.filter(function (item) {
          return item.user_id !== reaction.user_id || item.type !== reaction.type;
        });
      }

      return ownReactions;
    }
  }, {
    key: "removeReaction",
    value: function removeReaction(reaction, message) {
      var _this3 = this;

      if (!message) return;
      var messageWithReaction = message;

      this._updateMessage(message, function (msg) {
        messageWithReaction.own_reactions = _this3._removeOwnReactionFromMessage(msg.own_reactions, reaction);
        return _this3.formatMessage(messageWithReaction);
      });

      return messageWithReaction;
    }
    /**
     * Updates all instances of given message in channel state
     * @param message
     * @param updateFunc
     */

  }, {
    key: "_updateMessage",
    value: function _updateMessage(message, updateFunc) {
      var parent_id = message.parent_id,
          show_in_channel = message.show_in_channel,
          pinned = message.pinned;

      if (parent_id && this.threads[parent_id]) {
        var thread = this.threads[parent_id];
        var msgIndex = thread.findIndex(function (msg) {
          return msg.id === message.id;
        });

        if (msgIndex !== -1) {
          thread[msgIndex] = updateFunc(thread[msgIndex]);
          this.threads[parent_id] = thread;
        }
      }

      if (!show_in_channel && !parent_id || show_in_channel) {
        var _msgIndex = this.messages.findIndex(function (msg) {
          return msg.id === message.id;
        });

        if (_msgIndex !== -1) {
          this.messages[_msgIndex] = updateFunc(this.messages[_msgIndex]);
        }
      }

      if (pinned) {
        var _msgIndex2 = this.pinnedMessages.findIndex(function (msg) {
          return msg.id === message.id;
        });

        if (_msgIndex2 !== -1) {
          this.pinnedMessages[_msgIndex2] = updateFunc(this.pinnedMessages[_msgIndex2]);
        }
      }
    }
    /**
     * Setter for isUpToDate.
     *
     * @param isUpToDate  Flag which indicates if channel state contain latest/recent messages or no.
     *                    This flag should be managed by UI sdks using a setter - setIsUpToDate.
     *                    When false, any new message (received by websocket event - message.new) will not
     *                    be pushed on to message list.
     */

  }, {
    key: "_addToMessageList",
    value:
    /**
     * _addToMessageList - Adds a message to a list of messages, tries to update first, appends if message isn't found
     *
     * @param {Array<ReturnType<ChannelState<AttachmentType, ChannelType, CommandType, EventType, MessageType, ReactionType, UserType>['formatMessage']>>} messages A list of messages
     * @param message
     * @param {boolean} timestampChanged Whether updating a message with changed created_at value.
     * @param {string} sortBy field name to use to sort the messages by
     */
    function _addToMessageList(messages, message) {
      var timestampChanged = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : false;
      var sortBy = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : 'created_at';
      var messageArr = messages; // if created_at has changed, message should be filtered and re-inserted in correct order
      // slow op but usually this only happens for a message inserted to state before actual response with correct timestamp

      if (timestampChanged) {
        messageArr = messageArr.filter(function (msg) {
          return !(msg.id && message.id === msg.id);
        });
      } // for empty list just concat and return


      if (messageArr.length === 0) return messageArr.concat(message);
      var messageTime = message[sortBy].getTime(); // if message is newer than last item in the list concat and return

      if (messageArr[messageArr.length - 1][sortBy].getTime() < messageTime) return messageArr.concat(message); // find the closest index to push the new message

      var left = 0;
      var middle = 0;
      var right = messageArr.length - 1;

      while (left <= right) {
        middle = Math.floor((right + left) / 2);
        if (messageArr[middle][sortBy].getTime() <= messageTime) left = middle + 1;else right = middle - 1;
      } // message already exists and not filtered due to timestampChanged, update and return


      if (!timestampChanged && message.id) {
        if (messageArr[left] && message.id === messageArr[left].id) {
          messageArr[left] = message;
          return (0,_babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_4__.default)(messageArr);
        }

        if (messageArr[left - 1] && message.id === messageArr[left - 1].id) {
          messageArr[left - 1] = message;
          return (0,_babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_4__.default)(messageArr);
        }
      }

      messageArr.splice(left, 0, message);
      return (0,_babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_4__.default)(messageArr);
    }
    /**
     * removeMessage - Description
     *
     * @param {{ id: string; parent_id?: string }} messageToRemove Object of the message to remove. Needs to have at id specified.
     *
     * @return {boolean} Returns if the message was removed
     */

  }, {
    key: "removeMessage",
    value: function removeMessage(messageToRemove) {
      var isRemoved = false;

      if (messageToRemove.parent_id && this.threads[messageToRemove.parent_id]) {
        var _this$removeMessageFr2 = this.removeMessageFromArray(this.threads[messageToRemove.parent_id], messageToRemove),
            removed = _this$removeMessageFr2.removed,
            threadMessages = _this$removeMessageFr2.result;

        this.threads[messageToRemove.parent_id] = threadMessages;
        isRemoved = removed;
      } else {
        var _this$removeMessageFr3 = this.removeMessageFromArray(this.messages, messageToRemove),
            _removed = _this$removeMessageFr3.removed,
            messages = _this$removeMessageFr3.result;

        this.messages = messages;
        isRemoved = _removed;
      }

      return isRemoved;
    }
  }, {
    key: "filterErrorMessages",
    value:
    /**
     * filterErrorMessages - Removes error messages from the channel state.
     *
     */
    function filterErrorMessages() {
      var filteredMessages = this.messages.filter(function (message) {
        return message.type !== 'error';
      });
      this.messages = filteredMessages;
    }
    /**
     * clean - Remove stale data such as users that stayed in typing state for more than 5 seconds
     */

  }, {
    key: "clean",
    value: function clean() {
      var now = new Date(); // prevent old users from showing up as typing

      for (var _i = 0, _Object$entries = Object.entries(this.typing); _i < _Object$entries.length; _i++) {
        var _Object$entries$_i = (0,_babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_11__.default)(_Object$entries[_i], 2),
            userID = _Object$entries$_i[0],
            lastEvent = _Object$entries$_i[1];

        var receivedAt = typeof lastEvent.received_at === 'string' ? new Date(lastEvent.received_at) : lastEvent.received_at || new Date();

        if (now.getTime() - receivedAt.getTime() > 7000) {
          delete this.typing[userID];

          this._channel.getClient().dispatchEvent({
            cid: this._channel.cid,
            type: 'typing.stop',
            user: {
              id: userID
            }
          });
        }
      }
    }
  }, {
    key: "clearMessages",
    value: function clearMessages() {
      this.messages = [];
    }
  }]);

  return ChannelState;
}();

function ownKeys$3(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); if (enumerableOnly) symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; }); keys.push.apply(keys, symbols); } return keys; }

function _objectSpread$3(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; if (i % 2) { ownKeys$3(Object(source), true).forEach(function (key) { (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(target, key, source[key]); }); } else if (Object.getOwnPropertyDescriptors) { Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)); } else { ownKeys$3(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } } return target; }

var EVENT_MAP = {
  'channel.created': true,
  'channel.deleted': true,
  'channel.hidden': true,
  'channel.muted': true,
  'channel.truncated': true,
  'channel.unmuted': true,
  'channel.updated': true,
  'channel.visible': true,
  'health.check': true,
  'member.added': true,
  'member.removed': true,
  'member.updated': true,
  'message.deleted': true,
  'message.new': true,
  'message.read': true,
  'message.updated': true,
  'notification.added_to_channel': true,
  'notification.channel_deleted': true,
  'notification.channel_mutes_updated': true,
  'notification.channel_truncated': true,
  'notification.invite_accepted': true,
  'notification.invite_rejected': true,
  'notification.invited': true,
  'notification.mark_read': true,
  'notification.message_new': true,
  'notification.mutes_updated': true,
  'notification.removed_from_channel': true,
  'reaction.deleted': true,
  'reaction.new': true,
  'reaction.updated': true,
  'typing.start': true,
  'typing.stop': true,
  'user.banned': true,
  'user.deleted': true,
  'user.presence.changed': true,
  'user.unbanned': true,
  'user.updated': true,
  'user.watching.start': true,
  'user.watching.stop': true,
  // local events
  'connection.changed': true,
  'connection.recovered': true
};

var IS_VALID_EVENT_MAP_TYPE = _objectSpread$3(_objectSpread$3({}, EVENT_MAP), {}, {
  all: true
});

var isValidEventType = function isValidEventType(eventType) {
  return IS_VALID_EVENT_MAP_TYPE[eventType] || false;
};

function _createForOfIteratorHelper$3(o, allowArrayLike) { var it; if (typeof Symbol === "undefined" || o[Symbol.iterator] == null) { if (Array.isArray(o) || (it = _unsupportedIterableToArray$3(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = o[Symbol.iterator](); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it.return != null) it.return(); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray$3(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray$3(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray$3(o, minLen); }

function _arrayLikeToArray$3(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

/**
 * logChatPromiseExecution - utility function for logging the execution of a promise..
 *  use this when you want to run the promise and handle errors by logging a warning
 *
 * @param {Promise<T>} promise The promise you want to run and log
 * @param {string} name    A descriptive name of what the promise does for log output
 *
 */
function logChatPromiseExecution(promise, name) {
  promise.then().catch(function (error) {
    console.warn("failed to do ".concat(name, ", ran into error: "), error);
  });
}
var sleep = function sleep(m) {
  return new Promise(function (r) {
    return setTimeout(r, m);
  });
};
function isFunction(value) {
  return value && (Object.prototype.toString.call(value) === '[object Function]' || 'function' === typeof value || value instanceof Function);
}
var chatCodes = {
  TOKEN_EXPIRED: 40,
  WS_CLOSED_SUCCESS: 1000
};

function isReadableStream(obj) {
  return obj !== null && (0,_babel_runtime_helpers_typeof__WEBPACK_IMPORTED_MODULE_2__.default)(obj) === 'object' && (obj.readable || typeof obj._read === 'function');
}

function isBuffer(obj) {
  return obj != null && obj.constructor != null && // @ts-expect-error
  typeof obj.constructor.isBuffer === 'function' && // @ts-expect-error
  obj.constructor.isBuffer(obj);
}

function isFileWebAPI(uri) {
  return typeof window !== 'undefined' && 'File' in window && uri instanceof File;
}

function isOwnUser(user) {
  return (user === null || user === void 0 ? void 0 : user.total_unread_count) !== undefined;
}
function addFileToFormData(uri, name, contentType) {
  var data = new (form_data__WEBPACK_IMPORTED_MODULE_12___default())();

  if (isReadableStream(uri) || isBuffer(uri) || isFileWebAPI(uri)) {
    if (name) data.append('file', uri, name);else data.append('file', uri);
  } else {
    data.append('file', {
      uri: uri,
      name: name || uri.split('/').reverse()[0],
      contentType: contentType || undefined,
      type: contentType || undefined
    });
  }

  return data;
}
function normalizeQuerySort(sort) {
  var sortFields = [];
  var sortArr = Array.isArray(sort) ? sort : [sort];

  var _iterator = _createForOfIteratorHelper$3(sortArr),
      _step;

  try {
    for (_iterator.s(); !(_step = _iterator.n()).done;) {
      var item = _step.value;
      var entries = Object.entries(item);

      if (entries.length > 1) {
        console.warn("client._buildSort() - multiple fields in a single sort object detected. Object's field order is not guaranteed");
      }

      for (var _i = 0, _entries = entries; _i < _entries.length; _i++) {
        var _entries$_i = (0,_babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_11__.default)(_entries[_i], 2),
            field = _entries$_i[0],
            direction = _entries$_i[1];

        sortFields.push({
          field: field,
          direction: direction
        });
      }
    }
  } catch (err) {
    _iterator.e(err);
  } finally {
    _iterator.f();
  }

  return sortFields;
}
/** adopted from https://github.com/ai/nanoid/blob/master/non-secure/index.js */

var alphabet = 'ModuleSymbhasOwnPr0123456789ABCDEFGHNRVfgctiUvzKqYTJkLxpZXIjQW';
function randomId() {
  var id = '';

  for (var i = 0; i < 21; i++) {
    id += alphabet[Math.random() * 64 | 0];
  }

  return id;
}

function _createForOfIteratorHelper$2(o, allowArrayLike) { var it; if (typeof Symbol === "undefined" || o[Symbol.iterator] == null) { if (Array.isArray(o) || (it = _unsupportedIterableToArray$2(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = o[Symbol.iterator](); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it.return != null) it.return(); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray$2(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray$2(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray$2(o, minLen); }

function _arrayLikeToArray$2(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

function ownKeys$2(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); if (enumerableOnly) symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; }); keys.push.apply(keys, symbols); } return keys; }

function _objectSpread$2(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; if (i % 2) { ownKeys$2(Object(source), true).forEach(function (key) { (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(target, key, source[key]); }); } else if (Object.getOwnPropertyDescriptors) { Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)); } else { ownKeys$2(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } } return target; }

/**
 * Channel - The Channel class manages it's own state.
 */
var Channel = /*#__PURE__*/function () {
  /**
   * constructor - Create a channel
   *
   * @param {StreamChat<AttachmentType, ChannelType, CommandType, EventType, MessageType, ReactionType, UserType>} client the chat client
   * @param {string} type  the type of channel
   * @param {string} [id]  the id of the chat
   * @param {ChannelData<ChannelType>} data any additional custom params
   *
   * @return {Channel<AttachmentType, ChannelType, CommandType, EventType, MessageType, ReactionType, UserType>} Returns a new uninitialized channel
   */
  function Channel(client, type, id, data) {
    var _this = this;

    (0,_babel_runtime_helpers_classCallCheck__WEBPACK_IMPORTED_MODULE_6__.default)(this, Channel);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "_client", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "type", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "id", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "data", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "_data", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "cid", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "listeners", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "state", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "initialized", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "lastKeyStroke", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "lastTypingEvent", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "isTyping", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "disconnected", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "create", /*#__PURE__*/(0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee() {
      var options;
      return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee$(_context) {
        while (1) {
          switch (_context.prev = _context.next) {
            case 0:
              options = {
                watch: false,
                state: false,
                presence: false
              };
              _context.next = 3;
              return _this.query(options);

            case 3:
              return _context.abrupt("return", _context.sent);

            case 4:
            case "end":
              return _context.stop();
          }
        }
      }, _callee);
    })));

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "_callChannelListeners", function (event) {
      var channel = _this; // gather and call the listeners

      var listeners = [];

      if (channel.listeners.all) {
        listeners.push.apply(listeners, (0,_babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_4__.default)(channel.listeners.all));
      }

      if (channel.listeners[event.type]) {
        listeners.push.apply(listeners, (0,_babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_4__.default)(channel.listeners[event.type]));
      } // call the event and send it to the listeners


      for (var _i = 0, _listeners = listeners; _i < _listeners.length; _i++) {
        var listener = _listeners[_i];

        if (typeof listener !== 'string') {
          listener(event);
        }
      }
    });

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "_channelURL", function () {
      if (!_this.id) {
        throw new Error('channel id is not defined');
      }

      return "".concat(_this.getClient().baseURL, "/channels/").concat(_this.type, "/").concat(_this.id);
    });

    var validTypeRe = /^[\w_-]+$/;
    var validIDRe = /^[\w!_-]+$/;

    if (!validTypeRe.test(type)) {
      throw new Error("Invalid chat type ".concat(type, ", letters, numbers and \"_-\" are allowed"));
    }

    if (typeof id === 'string' && !validIDRe.test(id)) {
      throw new Error("Invalid chat id ".concat(id, ", letters, numbers and \"!-_\" are allowed"));
    }

    this._client = client;
    this.type = type;
    this.id = id; // used by the frontend, gets updated:

    this.data = data; // this._data is used for the requests...

    this._data = _objectSpread$2({}, data);
    this.cid = "".concat(type, ":").concat(id);
    this.listeners = {}; // perhaps the state variable should be private

    this.state = new ChannelState(this);
    this.initialized = false;
    this.lastTypingEvent = null;
    this.isTyping = false;
    this.disconnected = false;
  }
  /**
   * getClient - Get the chat client for this channel. If client.disconnect() was called, this function will error
   *
   * @return {StreamChat<AttachmentType, ChannelType, CommandType, EventType, MessageType, ReactionType, UserType>}
   */


  (0,_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_7__.default)(Channel, [{
    key: "getClient",
    value: function getClient() {
      if (this.disconnected === true) {
        throw Error("You can't use a channel after client.disconnect() was called");
      }

      return this._client;
    }
    /**
     * getConfig - Get the configs for this channel type
     *
     * @return {Record<string, unknown>}
     */

  }, {
    key: "getConfig",
    value: function getConfig() {
      var client = this.getClient();
      return client.configs[this.type];
    }
    /**
     * sendMessage - Send a message to this channel
     *
     * @param {Message<AttachmentType, MessageType, UserType>} message The Message object
     * @param {{ skip_push?: boolean }} [options] Option object, {skip_push: true} to skip sending push notifications
     *
     * @return {Promise<SendMessageAPIResponse<AttachmentType, ChannelType, CommandType, MessageType, ReactionType, UserType>>} The Server Response
     */

  }, {
    key: "sendMessage",
    value: function () {
      var _sendMessage = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee2(message, options) {
        var sendMessageResponse;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee2$(_context2) {
          while (1) {
            switch (_context2.prev = _context2.next) {
              case 0:
                _context2.next = 2;
                return this.getClient().post(this._channelURL() + '/message', _objectSpread$2({
                  message: message
                }, options));

              case 2:
                sendMessageResponse = _context2.sent;
                // Reset unreadCount to 0.
                this.state.unreadCount = 0;
                return _context2.abrupt("return", sendMessageResponse);

              case 5:
              case "end":
                return _context2.stop();
            }
          }
        }, _callee2, this);
      }));

      function sendMessage(_x, _x2) {
        return _sendMessage.apply(this, arguments);
      }

      return sendMessage;
    }()
  }, {
    key: "sendFile",
    value: function sendFile(uri, name, contentType, user) {
      return this.getClient().sendFile("".concat(this._channelURL(), "/file"), uri, name, contentType, user);
    }
  }, {
    key: "sendImage",
    value: function sendImage(uri, name, contentType, user) {
      return this.getClient().sendFile("".concat(this._channelURL(), "/image"), uri, name, contentType, user);
    }
  }, {
    key: "deleteFile",
    value: function deleteFile(url) {
      return this.getClient().delete("".concat(this._channelURL(), "/file"), {
        url: url
      });
    }
  }, {
    key: "deleteImage",
    value: function deleteImage(url) {
      return this.getClient().delete("".concat(this._channelURL(), "/image"), {
        url: url
      });
    }
    /**
     * sendEvent - Send an event on this channel
     *
     * @param {Event<AttachmentType, ChannelType, CommandType, EventType, MessageType, ReactionType, UserType>} event for example {type: 'message.read'}
     *
     * @return {Promise<EventAPIResponse<AttachmentType, ChannelType, CommandType, EventType, MessageType, ReactionType, UserType>>} The Server Response
     */

  }, {
    key: "sendEvent",
    value: function () {
      var _sendEvent = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee3(event) {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee3$(_context3) {
          while (1) {
            switch (_context3.prev = _context3.next) {
              case 0:
                this._checkInitialized();

                _context3.next = 3;
                return this.getClient().post(this._channelURL() + '/event', {
                  event: event
                });

              case 3:
                return _context3.abrupt("return", _context3.sent);

              case 4:
              case "end":
                return _context3.stop();
            }
          }
        }, _callee3, this);
      }));

      function sendEvent(_x3) {
        return _sendEvent.apply(this, arguments);
      }

      return sendEvent;
    }()
    /**
     * search - Query messages
     *
     * @param {MessageFilters<AttachmentType, ChannelType, CommandType, MessageType, ReactionType, UserType> | string}  query search query or object MongoDB style filters
     * @param {{client_id?: string; connection_id?: string; limit?: number; offset?: number; query?: string; message_filter_conditions?: MessageFilters<AttachmentType, ChannelType, CommandType, MessageType, ReactionType, UserType>}} options Option object, {user_id: 'tommaso'}
     *
     * @return {Promise<SearchAPIResponse<AttachmentType, ChannelType, CommandType, MessageType, ReactionType, UserType>>} search messages response
     */

  }, {
    key: "search",
    value: function () {
      var _search = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee4(query) {
        var options,
            payload,
            _args4 = arguments;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee4$(_context4) {
          while (1) {
            switch (_context4.prev = _context4.next) {
              case 0:
                options = _args4.length > 1 && _args4[1] !== undefined ? _args4[1] : {};
                // Return a list of channels
                payload = _objectSpread$2({
                  filter_conditions: {
                    cid: this.cid
                  }
                }, options);

                if (!(typeof query === 'string')) {
                  _context4.next = 6;
                  break;
                }

                payload.query = query;
                _context4.next = 11;
                break;

              case 6:
                if (!((0,_babel_runtime_helpers_typeof__WEBPACK_IMPORTED_MODULE_2__.default)(query) === 'object')) {
                  _context4.next = 10;
                  break;
                }

                payload.message_filter_conditions = query;
                _context4.next = 11;
                break;

              case 10:
                throw Error("Invalid type ".concat((0,_babel_runtime_helpers_typeof__WEBPACK_IMPORTED_MODULE_2__.default)(query), " for query parameter"));

              case 11:
                _context4.next = 13;
                return this.getClient().wsPromise;

              case 13:
                _context4.next = 15;
                return this.getClient().get(this.getClient().baseURL + '/search', {
                  payload: payload
                });

              case 15:
                return _context4.abrupt("return", _context4.sent);

              case 16:
              case "end":
                return _context4.stop();
            }
          }
        }, _callee4, this);
      }));

      function search(_x4) {
        return _search.apply(this, arguments);
      }

      return search;
    }()
    /**
     * queryMembers - Query Members
     *
     * @param {UserFilters<UserType>}  filterConditions object MongoDB style filters
     * @param {UserSort<UserType>} [sort] Sort options, for instance [{created_at: -1}].
     * When using multiple fields, make sure you use array of objects to guarantee field order, for instance [{last_active: -1}, {created_at: 1}]
     * @param {{ limit?: number; offset?: number }} [options] Option object, {limit: 10, offset:10}
     *
     * @return {Promise<ChannelMemberAPIResponse<UserType>>} Query Members response
     */

  }, {
    key: "queryMembers",
    value: function () {
      var _queryMembers = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee5(filterConditions) {
        var _this$data;

        var sort,
            options,
            id,
            type,
            members,
            _args5 = arguments;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee5$(_context5) {
          while (1) {
            switch (_context5.prev = _context5.next) {
              case 0:
                sort = _args5.length > 1 && _args5[1] !== undefined ? _args5[1] : [];
                options = _args5.length > 2 && _args5[2] !== undefined ? _args5[2] : {};
                type = this.type;

                if (this.id) {
                  id = this.id;
                } else if ((_this$data = this.data) !== null && _this$data !== void 0 && _this$data.members && Array.isArray(this.data.members)) {
                  members = this.data.members;
                } // Return a list of members


                _context5.next = 6;
                return this.getClient().get(this.getClient().baseURL + '/members', {
                  payload: _objectSpread$2({
                    type: type,
                    id: id,
                    members: members,
                    sort: normalizeQuerySort(sort),
                    filter_conditions: filterConditions
                  }, options)
                });

              case 6:
                return _context5.abrupt("return", _context5.sent);

              case 7:
              case "end":
                return _context5.stop();
            }
          }
        }, _callee5, this);
      }));

      function queryMembers(_x5) {
        return _queryMembers.apply(this, arguments);
      }

      return queryMembers;
    }()
    /**
     * sendReaction - Send a reaction about a message
     *
     * @param {string} messageID the message id
     * @param {Reaction<ReactionType, UserType>} reaction the reaction object for instance {type: 'love'}
     * @param {{ enforce_unique?: boolean, skip_push?: boolean }} [options] Option object, {enforce_unique: true, skip_push: true} to override any existing reaction or skip sending push notifications
     *
     * @return {Promise<ReactionAPIResponse<AttachmentType, ChannelType, CommandType, MessageType, ReactionType, UserType>>} The Server Response
     */

  }, {
    key: "sendReaction",
    value: function () {
      var _sendReaction = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee6(messageID, reaction, options) {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee6$(_context6) {
          while (1) {
            switch (_context6.prev = _context6.next) {
              case 0:
                if (messageID) {
                  _context6.next = 2;
                  break;
                }

                throw Error("Message id is missing");

              case 2:
                if (!(!reaction || Object.keys(reaction).length === 0)) {
                  _context6.next = 4;
                  break;
                }

                throw Error("Reaction object is missing");

              case 4:
                _context6.next = 6;
                return this.getClient().post(this.getClient().baseURL + "/messages/".concat(messageID, "/reaction"), _objectSpread$2({
                  reaction: reaction
                }, options));

              case 6:
                return _context6.abrupt("return", _context6.sent);

              case 7:
              case "end":
                return _context6.stop();
            }
          }
        }, _callee6, this);
      }));

      function sendReaction(_x6, _x7, _x8) {
        return _sendReaction.apply(this, arguments);
      }

      return sendReaction;
    }()
    /**
     * deleteReaction - Delete a reaction by user and type
     *
     * @param {string} messageID the id of the message from which te remove the reaction
     * @param {string} reactionType the type of reaction that should be removed
     * @param {string} [user_id] the id of the user (used only for server side request) default null
     *
     * @return {Promise<ReactionAPIResponse<AttachmentType, ChannelType, CommandType, MessageType, ReactionType, UserType>>} The Server Response
     */

  }, {
    key: "deleteReaction",
    value: function deleteReaction(messageID, reactionType, user_id) {
      this._checkInitialized();

      if (!reactionType || !messageID) {
        throw Error('Deleting a reaction requires specifying both the message and reaction type');
      }

      var url = this.getClient().baseURL + "/messages/".concat(messageID, "/reaction/").concat(reactionType); //provided when server side request

      if (user_id) {
        return this.getClient().delete(url, {
          user_id: user_id
        });
      }

      return this.getClient().delete(url, {});
    }
    /**
     * update - Edit the channel's custom properties
     *
     * @param {ChannelData<ChannelType>} channelData The object to update the custom properties of this channel with
     * @param {Message<AttachmentType, MessageType, UserType>} [updateMessage] Optional message object for channel members notification
     * @param {{ skip_push?: boolean }} [options] Option object, {skip_push: true} to skip sending push notifications
     * @return {Promise<UpdateChannelAPIResponse<AttachmentType, ChannelType, CommandType, MessageType, ReactionType, UserType>>} The server response
     */

  }, {
    key: "update",
    value: function () {
      var _update = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee7() {
        var channelData,
            updateMessage,
            options,
            reserved,
            data,
            _args7 = arguments;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee7$(_context7) {
          while (1) {
            switch (_context7.prev = _context7.next) {
              case 0:
                channelData = _args7.length > 0 && _args7[0] !== undefined ? _args7[0] : {};
                updateMessage = _args7.length > 1 ? _args7[1] : undefined;
                options = _args7.length > 2 ? _args7[2] : undefined;
                // Strip out reserved names that will result in API errors.
                reserved = ['config', 'cid', 'created_by', 'id', 'member_count', 'type', 'created_at', 'updated_at', 'last_message_at'];
                reserved.forEach(function (key) {
                  delete channelData[key];
                });
                _context7.next = 7;
                return this.getClient().post(this._channelURL(), _objectSpread$2({
                  message: updateMessage,
                  data: channelData
                }, options));

              case 7:
                data = _context7.sent;
                this.data = data.channel;
                return _context7.abrupt("return", data);

              case 10:
              case "end":
                return _context7.stop();
            }
          }
        }, _callee7, this);
      }));

      function update() {
        return _update.apply(this, arguments);
      }

      return update;
    }()
    /**
     * updatePartial - partial update channel properties
     *
     * @param {PartialUpdateChannel<ChannelType>} partial update request
     *
     * @return {Promise<PartialUpdateChannelAPIResponse<ChannelType,CommandType, UserType>>}
     */

  }, {
    key: "updatePartial",
    value: function () {
      var _updatePartial = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee8(update) {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee8$(_context8) {
          while (1) {
            switch (_context8.prev = _context8.next) {
              case 0:
                _context8.next = 2;
                return this.getClient().patch(this._channelURL(), update);

              case 2:
                return _context8.abrupt("return", _context8.sent);

              case 3:
              case "end":
                return _context8.stop();
            }
          }
        }, _callee8, this);
      }));

      function updatePartial(_x9) {
        return _updatePartial.apply(this, arguments);
      }

      return updatePartial;
    }()
    /**
     * enableSlowMode - enable slow mode
     *
     * @param {number} coolDownInterval the cooldown interval in seconds
     * @return {Promise<UpdateChannelAPIResponse<AttachmentType, ChannelType, CommandType, MessageType, ReactionType, UserType>>} The server response
     */

  }, {
    key: "enableSlowMode",
    value: function () {
      var _enableSlowMode = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee9(coolDownInterval) {
        var data;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee9$(_context9) {
          while (1) {
            switch (_context9.prev = _context9.next) {
              case 0:
                _context9.next = 2;
                return this.getClient().post(this._channelURL(), {
                  cooldown: coolDownInterval
                });

              case 2:
                data = _context9.sent;
                this.data = data.channel;
                return _context9.abrupt("return", data);

              case 5:
              case "end":
                return _context9.stop();
            }
          }
        }, _callee9, this);
      }));

      function enableSlowMode(_x10) {
        return _enableSlowMode.apply(this, arguments);
      }

      return enableSlowMode;
    }()
    /**
     * disableSlowMode - disable slow mode
     *
     * @return {Promise<UpdateChannelAPIResponse<ChannelType, AttachmentType, MessageType, ReactionType, UserType>>} The server response
     */

  }, {
    key: "disableSlowMode",
    value: function () {
      var _disableSlowMode = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee10() {
        var data;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee10$(_context10) {
          while (1) {
            switch (_context10.prev = _context10.next) {
              case 0:
                _context10.next = 2;
                return this.getClient().post(this._channelURL(), {
                  cooldown: 0
                });

              case 2:
                data = _context10.sent;
                this.data = data.channel;
                return _context10.abrupt("return", data);

              case 5:
              case "end":
                return _context10.stop();
            }
          }
        }, _callee10, this);
      }));

      function disableSlowMode() {
        return _disableSlowMode.apply(this, arguments);
      }

      return disableSlowMode;
    }()
    /**
     * delete - Delete the channel. Messages are permanently removed.
     *
     * @return {Promise<DeleteChannelAPIResponse<ChannelType, CommandType, UserType>>} The server response
     */

  }, {
    key: "delete",
    value: function () {
      var _delete2 = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee11() {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee11$(_context11) {
          while (1) {
            switch (_context11.prev = _context11.next) {
              case 0:
                _context11.next = 2;
                return this.getClient().delete(this._channelURL(), {});

              case 2:
                return _context11.abrupt("return", _context11.sent);

              case 3:
              case "end":
                return _context11.stop();
            }
          }
        }, _callee11, this);
      }));

      function _delete() {
        return _delete2.apply(this, arguments);
      }

      return _delete;
    }()
    /**
     * truncate - Removes all messages from the channel
     *
     * @return {Promise<TruncateChannelAPIResponse<ChannelType, CommandType, UserType>>} The server response
     */

  }, {
    key: "truncate",
    value: function () {
      var _truncate = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee12() {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee12$(_context12) {
          while (1) {
            switch (_context12.prev = _context12.next) {
              case 0:
                _context12.next = 2;
                return this.getClient().post(this._channelURL() + '/truncate', {});

              case 2:
                return _context12.abrupt("return", _context12.sent);

              case 3:
              case "end":
                return _context12.stop();
            }
          }
        }, _callee12, this);
      }));

      function truncate() {
        return _truncate.apply(this, arguments);
      }

      return truncate;
    }()
    /**
     * acceptInvite - accept invitation to the channel
     *
     * @param {InviteOptions<AttachmentType, ChannelType, CommandType, MessageType, ReactionType, UserType>} [options] The object to update the custom properties of this channel with
     *
     * @return {Promise<UpdateChannelAPIResponse<AttachmentType, ChannelType, CommandType, MessageType, ReactionType, UserType>>} The server response
     */

  }, {
    key: "acceptInvite",
    value: function () {
      var _acceptInvite = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee13() {
        var options,
            data,
            _args13 = arguments;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee13$(_context13) {
          while (1) {
            switch (_context13.prev = _context13.next) {
              case 0:
                options = _args13.length > 0 && _args13[0] !== undefined ? _args13[0] : {};
                _context13.next = 3;
                return this.getClient().post(this._channelURL(), _objectSpread$2({
                  accept_invite: true
                }, options));

              case 3:
                data = _context13.sent;
                this.data = data.channel;
                return _context13.abrupt("return", data);

              case 6:
              case "end":
                return _context13.stop();
            }
          }
        }, _callee13, this);
      }));

      function acceptInvite() {
        return _acceptInvite.apply(this, arguments);
      }

      return acceptInvite;
    }()
    /**
     * rejectInvite - reject invitation to the channel
     *
     * @param {InviteOptions<AttachmentType, ChannelType, CommandType, MessageType, ReactionType, UserType>} [options] The object to update the custom properties of this channel with
     *
     * @return {Promise<UpdateChannelAPIResponse<AttachmentType, ChannelType, CommandType, MessageType, ReactionType, UserType>>} The server response
     */

  }, {
    key: "rejectInvite",
    value: function () {
      var _rejectInvite = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee14() {
        var options,
            data,
            _args14 = arguments;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee14$(_context14) {
          while (1) {
            switch (_context14.prev = _context14.next) {
              case 0:
                options = _args14.length > 0 && _args14[0] !== undefined ? _args14[0] : {};
                _context14.next = 3;
                return this.getClient().post(this._channelURL(), _objectSpread$2({
                  reject_invite: true
                }, options));

              case 3:
                data = _context14.sent;
                this.data = data.channel;
                return _context14.abrupt("return", data);

              case 6:
              case "end":
                return _context14.stop();
            }
          }
        }, _callee14, this);
      }));

      function rejectInvite() {
        return _rejectInvite.apply(this, arguments);
      }

      return rejectInvite;
    }()
    /**
     * addMembers - add members to the channel
     *
     * @param {string[]} members An array of member identifiers
     * @param {Message<AttachmentType, MessageType, UserType>} [message] Optional message object for channel members notification
     * @return {Promise<UpdateChannelAPIResponse<AttachmentType, ChannelType, CommandType, MessageType, ReactionType, UserType>>} The server response
     */

  }, {
    key: "addMembers",
    value: function () {
      var _addMembers = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee15(members, message) {
        var data;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee15$(_context15) {
          while (1) {
            switch (_context15.prev = _context15.next) {
              case 0:
                _context15.next = 2;
                return this.getClient().post(this._channelURL(), {
                  add_members: members,
                  message: message
                });

              case 2:
                data = _context15.sent;
                this.data = data.channel;
                return _context15.abrupt("return", data);

              case 5:
              case "end":
                return _context15.stop();
            }
          }
        }, _callee15, this);
      }));

      function addMembers(_x11, _x12) {
        return _addMembers.apply(this, arguments);
      }

      return addMembers;
    }()
    /**
     * addModerators - add moderators to the channel
     *
     * @param {string[]} members An array of member identifiers
     * @param {Message<AttachmentType, MessageType, UserType>} [message] Optional message object for channel members notification
     * @return {Promise<UpdateChannelAPIResponse<AttachmentType, ChannelType, CommandType, MessageType, ReactionType, UserType>>} The server response
     */

  }, {
    key: "addModerators",
    value: function () {
      var _addModerators = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee16(members, message) {
        var data;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee16$(_context16) {
          while (1) {
            switch (_context16.prev = _context16.next) {
              case 0:
                _context16.next = 2;
                return this.getClient().post(this._channelURL(), {
                  add_moderators: members,
                  message: message
                });

              case 2:
                data = _context16.sent;
                this.data = data.channel;
                return _context16.abrupt("return", data);

              case 5:
              case "end":
                return _context16.stop();
            }
          }
        }, _callee16, this);
      }));

      function addModerators(_x13, _x14) {
        return _addModerators.apply(this, arguments);
      }

      return addModerators;
    }()
    /**
     * inviteMembers - invite members to the channel
     *
     * @param {string[]} members An array of member identifiers
     * @param {Message<AttachmentType, MessageType, UserType>} [message] Optional message object for channel members notification
     * @return {Promise<UpdateChannelAPIResponse<AttachmentType, ChannelType, CommandType, MessageType, ReactionType, UserType>>} The server response
     */

  }, {
    key: "inviteMembers",
    value: function () {
      var _inviteMembers = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee17(members, message) {
        var data;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee17$(_context17) {
          while (1) {
            switch (_context17.prev = _context17.next) {
              case 0:
                _context17.next = 2;
                return this.getClient().post(this._channelURL(), {
                  invites: members,
                  message: message
                });

              case 2:
                data = _context17.sent;
                this.data = data.channel;
                return _context17.abrupt("return", data);

              case 5:
              case "end":
                return _context17.stop();
            }
          }
        }, _callee17, this);
      }));

      function inviteMembers(_x15, _x16) {
        return _inviteMembers.apply(this, arguments);
      }

      return inviteMembers;
    }()
    /**
     * removeMembers - remove members from channel
     *
     * @param {string[]} members An array of member identifiers
     * @param {Message<AttachmentType, MessageType, UserType>} [message] Optional message object for channel members notification
     * @return {Promise<UpdateChannelAPIResponse<AttachmentType, ChannelType, CommandType, MessageType, ReactionType, UserType>>} The server response
     */

  }, {
    key: "removeMembers",
    value: function () {
      var _removeMembers = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee18(members, message) {
        var data;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee18$(_context18) {
          while (1) {
            switch (_context18.prev = _context18.next) {
              case 0:
                _context18.next = 2;
                return this.getClient().post(this._channelURL(), {
                  remove_members: members,
                  message: message
                });

              case 2:
                data = _context18.sent;
                this.data = data.channel;
                return _context18.abrupt("return", data);

              case 5:
              case "end":
                return _context18.stop();
            }
          }
        }, _callee18, this);
      }));

      function removeMembers(_x17, _x18) {
        return _removeMembers.apply(this, arguments);
      }

      return removeMembers;
    }()
    /**
     * demoteModerators - remove moderator role from channel members
     *
     * @param {string[]} members An array of member identifiers
     * @param {Message<AttachmentType, MessageType, UserType>} [message] Optional message object for channel members notification
     * @return {Promise<UpdateChannelAPIResponse<AttachmentType, ChannelType, CommandType, MessageType, ReactionType, UserType>>} The server response
     */

  }, {
    key: "demoteModerators",
    value: function () {
      var _demoteModerators = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee19(members, message) {
        var data;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee19$(_context19) {
          while (1) {
            switch (_context19.prev = _context19.next) {
              case 0:
                _context19.next = 2;
                return this.getClient().post(this._channelURL(), {
                  demote_moderators: members,
                  message: message
                });

              case 2:
                data = _context19.sent;
                this.data = data.channel;
                return _context19.abrupt("return", data);

              case 5:
              case "end":
                return _context19.stop();
            }
          }
        }, _callee19, this);
      }));

      function demoteModerators(_x19, _x20) {
        return _demoteModerators.apply(this, arguments);
      }

      return demoteModerators;
    }()
    /**
     * mute - mutes the current channel
     * @param {{ user_id?: string, expiration?: string }} opts expiration in minutes or user_id
     * @return {Promise<MuteChannelAPIResponse<ChannelType, CommandType, UserType>>} The server response
     *
     * example with expiration:
     * await channel.mute({expiration: moment.duration(2, 'weeks')});
     *
     * example server side:
     * await channel.mute({user_id: userId});
     *
     */

  }, {
    key: "mute",
    value: function () {
      var _mute = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee20() {
        var opts,
            _args20 = arguments;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee20$(_context20) {
          while (1) {
            switch (_context20.prev = _context20.next) {
              case 0:
                opts = _args20.length > 0 && _args20[0] !== undefined ? _args20[0] : {};
                _context20.next = 3;
                return this.getClient().post(this.getClient().baseURL + '/moderation/mute/channel', _objectSpread$2({
                  channel_cid: this.cid
                }, opts));

              case 3:
                return _context20.abrupt("return", _context20.sent);

              case 4:
              case "end":
                return _context20.stop();
            }
          }
        }, _callee20, this);
      }));

      function mute() {
        return _mute.apply(this, arguments);
      }

      return mute;
    }()
    /**
     * unmute - mutes the current channel
     * @param {{ user_id?: string}} opts user_id
     * @return {Promise<APIResponse>} The server response
     *
     * example server side:
     * await channel.unmute({user_id: userId});
     */

  }, {
    key: "unmute",
    value: function () {
      var _unmute = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee21() {
        var opts,
            _args21 = arguments;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee21$(_context21) {
          while (1) {
            switch (_context21.prev = _context21.next) {
              case 0:
                opts = _args21.length > 0 && _args21[0] !== undefined ? _args21[0] : {};
                _context21.next = 3;
                return this.getClient().post(this.getClient().baseURL + '/moderation/unmute/channel', _objectSpread$2({
                  channel_cid: this.cid
                }, opts));

              case 3:
                return _context21.abrupt("return", _context21.sent);

              case 4:
              case "end":
                return _context21.stop();
            }
          }
        }, _callee21, this);
      }));

      function unmute() {
        return _unmute.apply(this, arguments);
      }

      return unmute;
    }()
    /**
     * muteStatus - returns the mute status for the current channel
     * @return {{ muted: boolean; createdAt?: string | null; expiresAt?: string | null }} { muted: true | false, createdAt: Date | null, expiresAt: Date | null}
     */

  }, {
    key: "muteStatus",
    value: function muteStatus() {
      this._checkInitialized();

      return this.getClient()._muteStatus(this.cid);
    }
  }, {
    key: "sendAction",
    value: function sendAction(messageID, formData) {
      this._checkInitialized();

      if (!messageID) {
        throw Error("Message id is missing");
      }

      return this.getClient().post(this.getClient().baseURL + "/messages/".concat(messageID, "/action"), {
        message_id: messageID,
        form_data: formData,
        id: this.id,
        type: this.type
      });
    }
    /**
     * keystroke - First of the typing.start and typing.stop events based on the users keystrokes.
     * Call this on every keystroke
     * @see {@link https://getstream.io/chat/docs/typing_indicators/?language=js|Docs}
     * @param {string} [parent_id] set this field to `message.id` to indicate that typing event is happening in a thread
     */

  }, {
    key: "keystroke",
    value: function () {
      var _keystroke = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee22(parent_id) {
        var _this$getConfig;

        var now, diff;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee22$(_context22) {
          while (1) {
            switch (_context22.prev = _context22.next) {
              case 0:
                if ((_this$getConfig = this.getConfig()) !== null && _this$getConfig !== void 0 && _this$getConfig.typing_events) {
                  _context22.next = 2;
                  break;
                }

                return _context22.abrupt("return");

              case 2:
                now = new Date();
                diff = this.lastTypingEvent && now.getTime() - this.lastTypingEvent.getTime();
                this.lastKeyStroke = now;
                this.isTyping = true; // send a typing.start every 2 seconds

                if (!(diff === null || diff > 2000)) {
                  _context22.next = 10;
                  break;
                }

                this.lastTypingEvent = new Date();
                _context22.next = 10;
                return this.sendEvent({
                  type: 'typing.start',
                  parent_id: parent_id
                });

              case 10:
              case "end":
                return _context22.stop();
            }
          }
        }, _callee22, this);
      }));

      function keystroke(_x21) {
        return _keystroke.apply(this, arguments);
      }

      return keystroke;
    }()
    /**
     * stopTyping - Sets last typing to null and sends the typing.stop event
     * @see {@link https://getstream.io/chat/docs/typing_indicators/?language=js|Docs}
     * @param {string} [parent_id] set this field to `message.id` to indicate that typing event is happening in a thread
     */

  }, {
    key: "stopTyping",
    value: function () {
      var _stopTyping = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee23(parent_id) {
        var _this$getConfig2;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee23$(_context23) {
          while (1) {
            switch (_context23.prev = _context23.next) {
              case 0:
                if ((_this$getConfig2 = this.getConfig()) !== null && _this$getConfig2 !== void 0 && _this$getConfig2.typing_events) {
                  _context23.next = 2;
                  break;
                }

                return _context23.abrupt("return");

              case 2:
                this.lastTypingEvent = null;
                this.isTyping = false;
                _context23.next = 6;
                return this.sendEvent({
                  type: 'typing.stop',
                  parent_id: parent_id
                });

              case 6:
              case "end":
                return _context23.stop();
            }
          }
        }, _callee23, this);
      }));

      function stopTyping(_x22) {
        return _stopTyping.apply(this, arguments);
      }

      return stopTyping;
    }()
    /**
     * lastMessage - return the last message, takes into account that last few messages might not be perfectly sorted
     *
     * @return {ReturnType<ChannelState<AttachmentType, ChannelType, CommandType, EventType, MessageType, ReactionType, UserType>['formatMessage']> | undefined} Description
     */

  }, {
    key: "lastMessage",
    value: function lastMessage() {
      // get last 5 messages, sort, return the latest
      // get a slice of the last 5
      var min = this.state.messages.length - 5;

      if (min < 0) {
        min = 0;
      }

      var max = this.state.messages.length + 1;
      var messageSlice = this.state.messages.slice(min, max); // sort by pk desc

      messageSlice.sort(function (a, b) {
        return b.created_at.getTime() - a.created_at.getTime();
      });
      return messageSlice[0];
    }
    /**
     * markRead - Send the mark read event for this user, only works if the `read_events` setting is enabled
     *
     * @param {MarkReadOptions<UserType>} data
     * @return {Promise<EventAPIResponse<AttachmentType, ChannelType, CommandType, EventType, MessageType, ReactionType, UserType> | null>} Description
     */

  }, {
    key: "markRead",
    value: function () {
      var _markRead = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee24() {
        var _this$getConfig3;

        var data,
            _args24 = arguments;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee24$(_context24) {
          while (1) {
            switch (_context24.prev = _context24.next) {
              case 0:
                data = _args24.length > 0 && _args24[0] !== undefined ? _args24[0] : {};

                this._checkInitialized();

                if ((_this$getConfig3 = this.getConfig()) !== null && _this$getConfig3 !== void 0 && _this$getConfig3.read_events) {
                  _context24.next = 4;
                  break;
                }

                return _context24.abrupt("return", Promise.resolve(null));

              case 4:
                _context24.next = 6;
                return this.getClient().post(this._channelURL() + '/read', _objectSpread$2({}, data));

              case 6:
                return _context24.abrupt("return", _context24.sent);

              case 7:
              case "end":
                return _context24.stop();
            }
          }
        }, _callee24, this);
      }));

      function markRead() {
        return _markRead.apply(this, arguments);
      }

      return markRead;
    }()
    /**
     * clean - Cleans the channel state and fires stop typing if needed
     */

  }, {
    key: "clean",
    value: function clean() {
      if (this.lastKeyStroke) {
        var now = new Date();
        var diff = now.getTime() - this.lastKeyStroke.getTime();

        if (diff > 1000 && this.isTyping) {
          logChatPromiseExecution(this.stopTyping(), 'stop typing event');
        }
      }

      this.state.clean();
    }
    /**
     * watch - Loads the initial channel state and watches for changes
     *
     * @param {ChannelQueryOptions<ChannelType, CommandType, UserType>} options additional options for the query endpoint
     *
     * @return {Promise<ChannelAPIResponse<AttachmentType, ChannelType, CommandType, MessageType, ReactionType, UserType>>} The server response
     */

  }, {
    key: "watch",
    value: function () {
      var _watch = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee25(options) {
        var defaultOptions, combined, state;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee25$(_context25) {
          while (1) {
            switch (_context25.prev = _context25.next) {
              case 0:
                defaultOptions = {
                  state: true,
                  watch: true,
                  presence: false
                }; // Make sure we wait for the connect promise if there is a pending one

                _context25.next = 3;
                return this.getClient().wsPromise;

              case 3:
                if (!this.getClient()._hasConnectionID()) {
                  defaultOptions.watch = false;
                }

                combined = _objectSpread$2(_objectSpread$2({}, defaultOptions), options);
                _context25.next = 7;
                return this.query(combined);

              case 7:
                state = _context25.sent;
                this.initialized = true;
                this.data = state.channel;

                this._client.logger('info', "channel:watch() - started watching channel ".concat(this.cid), {
                  tags: ['channel'],
                  channel: this
                });

                return _context25.abrupt("return", state);

              case 12:
              case "end":
                return _context25.stop();
            }
          }
        }, _callee25, this);
      }));

      function watch(_x23) {
        return _watch.apply(this, arguments);
      }

      return watch;
    }()
    /**
     * stopWatching - Stops watching the channel
     *
     * @return {Promise<APIResponse>} The server response
     */

  }, {
    key: "stopWatching",
    value: function () {
      var _stopWatching = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee26() {
        var response;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee26$(_context26) {
          while (1) {
            switch (_context26.prev = _context26.next) {
              case 0:
                _context26.next = 2;
                return this.getClient().post(this._channelURL() + '/stop-watching', {});

              case 2:
                response = _context26.sent;

                this._client.logger('info', "channel:watch() - stopped watching channel ".concat(this.cid), {
                  tags: ['channel'],
                  channel: this
                });

                return _context26.abrupt("return", response);

              case 5:
              case "end":
                return _context26.stop();
            }
          }
        }, _callee26, this);
      }));

      function stopWatching() {
        return _stopWatching.apply(this, arguments);
      }

      return stopWatching;
    }()
    /**
     * getReplies - List the message replies for a parent message
     *
     * @param {string} parent_id The message parent id, ie the top of the thread
     * @param {PaginationOptions & { user?: UserResponse<UserType>; user_id?: string }} options Pagination params, ie {limit:10, id_lte: 10}
     *
     * @return {Promise<GetRepliesAPIResponse<AttachmentType, ChannelType, CommandType, MessageType, ReactionType, UserType>>} A response with a list of messages
     */

  }, {
    key: "getReplies",
    value: function () {
      var _getReplies = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee27(parent_id, options) {
        var data;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee27$(_context27) {
          while (1) {
            switch (_context27.prev = _context27.next) {
              case 0:
                _context27.next = 2;
                return this.getClient().get(this.getClient().baseURL + "/messages/".concat(parent_id, "/replies"), _objectSpread$2({}, options));

              case 2:
                data = _context27.sent;

                // add any messages to our thread state
                if (data.messages) {
                  this.state.addMessagesSorted(data.messages);
                }

                return _context27.abrupt("return", data);

              case 5:
              case "end":
                return _context27.stop();
            }
          }
        }, _callee27, this);
      }));

      function getReplies(_x24, _x25) {
        return _getReplies.apply(this, arguments);
      }

      return getReplies;
    }()
    /**
     * getReactions - List the reactions, supports pagination
     *
     * @param {string} message_id The message id
     * @param {{ limit?: number; offset?: number }} options The pagination options
     *
     * @return {Promise<GetReactionsAPIResponse<ReactionType, UserType>>} Server response
     */

  }, {
    key: "getReactions",
    value: function getReactions(message_id, options) {
      return this.getClient().get(this.getClient().baseURL + "/messages/".concat(message_id, "/reactions"), _objectSpread$2({}, options));
    }
    /**
     * getMessagesById - Retrieves a list of messages by ID
     *
     * @param {string[]} messageIds The ids of the messages to retrieve from this channel
     *
     * @return {Promise<GetMultipleMessagesAPIResponse<AttachmentType, ChannelType, CommandType, MessageType, ReactionType, UserType>>} Server response
     */

  }, {
    key: "getMessagesById",
    value: function getMessagesById(messageIds) {
      return this.getClient().get(this._channelURL() + '/messages', {
        ids: messageIds.join(',')
      });
    }
    /**
     * lastRead - returns the last time the user marked the channel as read if the user never marked the channel as read, this will return null
     * @return {Date | null | undefined}
     */

  }, {
    key: "lastRead",
    value: function lastRead() {
      this._checkInitialized();

      var _this$getClient = this.getClient(),
          userID = _this$getClient.userID;

      if (userID) {
        return this.state.read[userID] ? this.state.read[userID].last_read : null;
      }
    }
  }, {
    key: "_countMessageAsUnread",
    value: function _countMessageAsUnread(message) {
      var _message$user, _message$user2;

      if (message.shadowed) return false;
      if (message.silent) return false;
      if (((_message$user = message.user) === null || _message$user === void 0 ? void 0 : _message$user.id) === this.getClient().userID) return false;
      if ((_message$user2 = message.user) !== null && _message$user2 !== void 0 && _message$user2.id && this.getClient().userMuteStatus(message.user.id)) return false;
      return true;
    }
    /**
     * countUnread - Count of unread messages
     *
     * @param {Date | null} [lastRead] lastRead the time that the user read a message, defaults to current user's read state
     *
     * @return {number} Unread count
     */

  }, {
    key: "countUnread",
    value: function countUnread(lastRead) {
      if (!lastRead) return this.state.unreadCount;
      var count = 0;

      for (var i = 0; i < this.state.messages.length; i += 1) {
        var message = this.state.messages[i];

        if (message.created_at > lastRead && this._countMessageAsUnread(message)) {
          count++;
        }
      }

      return count;
    }
    /**
     * countUnread - Count the number of unread messages mentioning the current user
     *
     * @return {number} Unread mentions count
     */

  }, {
    key: "countUnreadMentions",
    value: function countUnreadMentions() {
      var lastRead = this.lastRead();
      var userID = this.getClient().userID;
      var count = 0;

      for (var i = 0; i < this.state.messages.length; i += 1) {
        var _message$mentioned_us;

        var message = this.state.messages[i];

        if (this._countMessageAsUnread(message) && (!lastRead || message.created_at > lastRead) && (_message$mentioned_us = message.mentioned_users) !== null && _message$mentioned_us !== void 0 && _message$mentioned_us.some(function (user) {
          return user.id === userID;
        })) {
          count++;
        }
      }

      return count;
    }
    /**
     * create - Creates a new channel
     *
     * @return {Promise<ChannelAPIResponse<AttachmentType, ChannelType, CommandType, MessageType, ReactionType, UserType>>} The Server Response
     */

  }, {
    key: "query",
    value:
    /**
     * query - Query the API, get messages, members or other channel fields
     *
     * @param {ChannelQueryOptions<ChannelType, CommandType, UserType>} options The query options
     *
     * @return {Promise<ChannelAPIResponse<AttachmentType, ChannelType, CommandType, MessageType, ReactionType, UserType>>} Returns a query response
     */
    function () {
      var _query = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee28(options) {
        var queryURL, state, membersStr, tempChannelCid;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee28$(_context28) {
          while (1) {
            switch (_context28.prev = _context28.next) {
              case 0:
                _context28.next = 2;
                return this.getClient().wsPromise;

              case 2:
                queryURL = "".concat(this.getClient().baseURL, "/channels/").concat(this.type);

                if (this.id) {
                  queryURL += "/".concat(this.id);
                }

                _context28.next = 6;
                return this.getClient().post(queryURL + '/query', _objectSpread$2({
                  data: this._data,
                  state: true
                }, options));

              case 6:
                state = _context28.sent;

                // update the channel id if it was missing
                if (!this.id) {
                  this.id = state.channel.id;
                  this.cid = state.channel.cid; // set the channel as active...

                  membersStr = state.members.map(function (member) {
                    var _member$user;

                    return member.user_id || ((_member$user = member.user) === null || _member$user === void 0 ? void 0 : _member$user.id);
                  }).sort().join(',');
                  tempChannelCid = "".concat(this.type, ":!members-").concat(membersStr);

                  if (tempChannelCid in this.getClient().activeChannels) {
                    // This gets set in `client.channel()` function, when channel is created
                    // using members, not id.
                    delete this.getClient().activeChannels[tempChannelCid];
                  }

                  if (!(this.cid in this.getClient().activeChannels)) {
                    this.getClient().activeChannels[this.cid] = this;
                  }
                }

                this.getClient()._addChannelConfig(state); // add any messages to our channel state


                this._initializeState(state);

                return _context28.abrupt("return", state);

              case 11:
              case "end":
                return _context28.stop();
            }
          }
        }, _callee28, this);
      }));

      function query(_x26) {
        return _query.apply(this, arguments);
      }

      return query;
    }()
    /**
     * banUser - Bans a user from a channel
     *
     * @param {string} targetUserID
     * @param {BanUserOptions<UserType>} options
     * @returns {Promise<APIResponse>}
     */

  }, {
    key: "banUser",
    value: function () {
      var _banUser = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee29(targetUserID, options) {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee29$(_context29) {
          while (1) {
            switch (_context29.prev = _context29.next) {
              case 0:
                this._checkInitialized();

                _context29.next = 3;
                return this.getClient().banUser(targetUserID, _objectSpread$2(_objectSpread$2({}, options), {}, {
                  type: this.type,
                  id: this.id
                }));

              case 3:
                return _context29.abrupt("return", _context29.sent);

              case 4:
              case "end":
                return _context29.stop();
            }
          }
        }, _callee29, this);
      }));

      function banUser(_x27, _x28) {
        return _banUser.apply(this, arguments);
      }

      return banUser;
    }()
    /**
     * hides the channel from queryChannels for the user until a message is added
     * If clearHistory is set to true - all messages will be removed for the user
     *
     * @param {string | null} userId
     * @param {boolean} clearHistory
     * @returns {Promise<APIResponse>}
     */

  }, {
    key: "hide",
    value: function () {
      var _hide = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee30() {
        var userId,
            clearHistory,
            _args30 = arguments;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee30$(_context30) {
          while (1) {
            switch (_context30.prev = _context30.next) {
              case 0:
                userId = _args30.length > 0 && _args30[0] !== undefined ? _args30[0] : null;
                clearHistory = _args30.length > 1 && _args30[1] !== undefined ? _args30[1] : false;

                this._checkInitialized();

                _context30.next = 5;
                return this.getClient().post("".concat(this._channelURL(), "/hide"), {
                  user_id: userId,
                  clear_history: clearHistory
                });

              case 5:
                return _context30.abrupt("return", _context30.sent);

              case 6:
              case "end":
                return _context30.stop();
            }
          }
        }, _callee30, this);
      }));

      function hide() {
        return _hide.apply(this, arguments);
      }

      return hide;
    }()
    /**
     * removes the hidden status for a channel
     *
     * @param {string | null} userId
     * @returns {Promise<APIResponse>}
     */

  }, {
    key: "show",
    value: function () {
      var _show = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee31() {
        var userId,
            _args31 = arguments;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee31$(_context31) {
          while (1) {
            switch (_context31.prev = _context31.next) {
              case 0:
                userId = _args31.length > 0 && _args31[0] !== undefined ? _args31[0] : null;

                this._checkInitialized();

                _context31.next = 4;
                return this.getClient().post("".concat(this._channelURL(), "/show"), {
                  user_id: userId
                });

              case 4:
                return _context31.abrupt("return", _context31.sent);

              case 5:
              case "end":
                return _context31.stop();
            }
          }
        }, _callee31, this);
      }));

      function show() {
        return _show.apply(this, arguments);
      }

      return show;
    }()
    /**
     * unbanUser - Removes the bans for a user on a channel
     *
     * @param {string} targetUserID
     * @returns {Promise<APIResponse>}
     */

  }, {
    key: "unbanUser",
    value: function () {
      var _unbanUser = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee32(targetUserID) {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee32$(_context32) {
          while (1) {
            switch (_context32.prev = _context32.next) {
              case 0:
                this._checkInitialized();

                _context32.next = 3;
                return this.getClient().unbanUser(targetUserID, {
                  type: this.type,
                  id: this.id
                });

              case 3:
                return _context32.abrupt("return", _context32.sent);

              case 4:
              case "end":
                return _context32.stop();
            }
          }
        }, _callee32, this);
      }));

      function unbanUser(_x29) {
        return _unbanUser.apply(this, arguments);
      }

      return unbanUser;
    }()
    /**
     * shadowBan - Shadow bans a user from a channel
     *
     * @param {string} targetUserID
     * @param {BanUserOptions<UserType>} options
     * @returns {Promise<APIResponse>}
     */

  }, {
    key: "shadowBan",
    value: function () {
      var _shadowBan = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee33(targetUserID, options) {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee33$(_context33) {
          while (1) {
            switch (_context33.prev = _context33.next) {
              case 0:
                this._checkInitialized();

                _context33.next = 3;
                return this.getClient().shadowBan(targetUserID, _objectSpread$2(_objectSpread$2({}, options), {}, {
                  type: this.type,
                  id: this.id
                }));

              case 3:
                return _context33.abrupt("return", _context33.sent);

              case 4:
              case "end":
                return _context33.stop();
            }
          }
        }, _callee33, this);
      }));

      function shadowBan(_x30, _x31) {
        return _shadowBan.apply(this, arguments);
      }

      return shadowBan;
    }()
    /**
     * removeShadowBan - Removes the shadow ban for a user on a channel
     *
     * @param {string} targetUserID
     * @returns {Promise<APIResponse>}
     */

  }, {
    key: "removeShadowBan",
    value: function () {
      var _removeShadowBan = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee34(targetUserID) {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee34$(_context34) {
          while (1) {
            switch (_context34.prev = _context34.next) {
              case 0:
                this._checkInitialized();

                _context34.next = 3;
                return this.getClient().removeShadowBan(targetUserID, {
                  type: this.type,
                  id: this.id
                });

              case 3:
                return _context34.abrupt("return", _context34.sent);

              case 4:
              case "end":
                return _context34.stop();
            }
          }
        }, _callee34, this);
      }));

      function removeShadowBan(_x32) {
        return _removeShadowBan.apply(this, arguments);
      }

      return removeShadowBan;
    }()
    /**
     * on - Listen to events on this channel.
     *
     * channel.on('message.new', event => {console.log("my new message", event, channel.state.messages)})
     * or
     * channel.on(event => {console.log(event.type)})
     *
     * @param {EventHandler<AttachmentType, ChannelType, CommandType, EventType, MessageType, ReactionType, UserType> | EventTypes} callbackOrString  The event type to listen for (optional)
     * @param {EventHandler<AttachmentType, ChannelType, CommandType, EventType, MessageType, ReactionType, UserType>} [callbackOrNothing] The callback to call
     */

  }, {
    key: "on",
    value: function on(callbackOrString, callbackOrNothing) {
      var _this2 = this;

      var key = callbackOrNothing ? callbackOrString : 'all';
      var valid = isValidEventType(key);

      if (!valid) {
        throw Error("Invalid event type ".concat(key));
      }

      var callback = callbackOrNothing ? callbackOrNothing : callbackOrString;

      if (!(key in this.listeners)) {
        this.listeners[key] = [];
      }

      this._client.logger('info', "Attaching listener for ".concat(key, " event on channel ").concat(this.cid), {
        tags: ['event', 'channel'],
        channel: this
      });

      this.listeners[key].push(callback);
      return {
        unsubscribe: function unsubscribe() {
          _this2._client.logger('info', "Removing listener for ".concat(key, " event from channel ").concat(_this2.cid), {
            tags: ['event', 'channel'],
            channel: _this2
          });

          _this2.listeners[key] = _this2.listeners[key].filter(function (el) {
            return el !== callback;
          });
        }
      };
    }
    /**
     * off - Remove the event handler
     *
     */

  }, {
    key: "off",
    value: function off(callbackOrString, callbackOrNothing) {
      var key = callbackOrNothing ? callbackOrString : 'all';
      var valid = isValidEventType(key);

      if (!valid) {
        throw Error("Invalid event type ".concat(key));
      }

      var callback = callbackOrNothing ? callbackOrNothing : callbackOrString;

      if (!(key in this.listeners)) {
        this.listeners[key] = [];
      }

      this._client.logger('info', "Removing listener for ".concat(key, " event from channel ").concat(this.cid), {
        tags: ['event', 'channel'],
        channel: this
      });

      this.listeners[key] = this.listeners[key].filter(function (value) {
        return value !== callback;
      });
    } // eslint-disable-next-line sonarjs/cognitive-complexity

  }, {
    key: "_handleChannelEvent",
    value: function _handleChannelEvent(event) {
      var _event$user, _event$user2, _event$user3, _event$user5, _event$user6, _event$member, _event$user9;

      var channel = this;

      this._client.logger('info', "channel:_handleChannelEvent - Received event of type { ".concat(event.type, " } on ").concat(this.cid), {
        tags: ['event', 'channel'],
        channel: this
      });

      var channelState = channel.state;

      switch (event.type) {
        case 'typing.start':
          if ((_event$user = event.user) !== null && _event$user !== void 0 && _event$user.id) {
            channelState.typing[event.user.id] = event;
          }

          break;

        case 'typing.stop':
          if ((_event$user2 = event.user) !== null && _event$user2 !== void 0 && _event$user2.id) {
            delete channelState.typing[event.user.id];
          }

          break;

        case 'message.read':
          if ((_event$user3 = event.user) !== null && _event$user3 !== void 0 && _event$user3.id) {
            var _event$user4, _this$getClient$user;

            channelState.read[event.user.id] = {
              // because in client.ts the handleEvent call that flows to this sets this `event.received_at = new Date();`
              last_read: event.received_at,
              user: event.user
            };

            if (((_event$user4 = event.user) === null || _event$user4 === void 0 ? void 0 : _event$user4.id) === ((_this$getClient$user = this.getClient().user) === null || _this$getClient$user === void 0 ? void 0 : _this$getClient$user.id)) {
              channelState.unreadCount = 0;
            }
          }

          break;

        case 'user.watching.start':
        case 'user.updated':
          if ((_event$user5 = event.user) !== null && _event$user5 !== void 0 && _event$user5.id) {
            channelState.watchers[event.user.id] = event.user;
          }

          break;

        case 'user.watching.stop':
          if ((_event$user6 = event.user) !== null && _event$user6 !== void 0 && _event$user6.id) {
            delete channelState.watchers[event.user.id];
          }

          break;

        case 'message.deleted':
          if (event.message) {
            if (event.hard_delete) channelState.removeMessage(event.message);else channelState.addMessageSorted(event.message);

            if (event.message.pinned) {
              channelState.removePinnedMessage(event.message);
            }
          }

          break;

        case 'message.new':
          if (event.message) {
            var _event$user7, _this$getClient$user2, _event$user8;

            /* if message belongs to current user, always assume timestamp is changed to filter it out and add again to avoid duplication */
            var ownMessage = ((_event$user7 = event.user) === null || _event$user7 === void 0 ? void 0 : _event$user7.id) === ((_this$getClient$user2 = this.getClient().user) === null || _this$getClient$user2 === void 0 ? void 0 : _this$getClient$user2.id);
            var isThreadMessage = event.message.parent_id && !event.message.show_in_channel;

            if (this.state.isUpToDate || isThreadMessage) {
              channelState.addMessageSorted(event.message, ownMessage);
            }

            if (event.message.pinned) {
              channelState.addPinnedMessage(event.message);
            }

            if (ownMessage && (_event$user8 = event.user) !== null && _event$user8 !== void 0 && _event$user8.id) {
              channelState.unreadCount = 0;
              channelState.read[event.user.id] = {
                last_read: new Date(event.created_at),
                user: event.user
              };
            } else if (this._countMessageAsUnread(event.message)) {
              channelState.unreadCount = channelState.unreadCount + 1;
            }
          }

          break;

        case 'message.updated':
          if (event.message) {
            channelState.addMessageSorted(event.message);

            if (event.message.pinned) {
              channelState.addPinnedMessage(event.message);
            } else {
              channelState.removePinnedMessage(event.message);
            }
          }

          break;

        case 'channel.truncated':
          channelState.clearMessages();
          channelState.unreadCount = 0;
          break;

        case 'member.added':
        case 'member.updated':
          if ((_event$member = event.member) !== null && _event$member !== void 0 && _event$member.user_id) {
            channelState.members[event.member.user_id] = event.member;
          }

          break;

        case 'member.removed':
          if ((_event$user9 = event.user) !== null && _event$user9 !== void 0 && _event$user9.id) {
            delete channelState.members[event.user.id];
          }

          break;

        case 'channel.updated':
          if (event.channel) {
            channel.data = event.channel;
          }

          break;

        case 'reaction.new':
          if (event.message && event.reaction) {
            event.message = channelState.addReaction(event.reaction, event.message);
          }

          break;

        case 'reaction.deleted':
          if (event.reaction) {
            event.message = channelState.removeReaction(event.reaction, event.message);
          }

          break;

        case 'reaction.updated':
          if (event.reaction) {
            // assuming reaction.updated is only called if enforce_unique is true
            event.message = channelState.addReaction(event.reaction, event.message, true);
          }

          break;

        case 'channel.hidden':
          if (event.clear_history) {
            channelState.clearMessages();
          }

          break;
      } // any event can send over the online count


      if (event.watcher_count !== undefined) {
        channel.state.watcher_count = event.watcher_count;
      }
    }
  }, {
    key: "_checkInitialized",
    value: function _checkInitialized() {
      if (!this.initialized && !this.getClient()._isUsingServerAuth()) {
        throw Error("Channel ".concat(this.cid, " hasn't been initialized yet. Make sure to call .watch() and wait for it to resolve"));
      }
    } // eslint-disable-next-line sonarjs/cognitive-complexity

  }, {
    key: "_initializeState",
    value: function _initializeState(state) {
      var _this$getClient2 = this.getClient(),
          clientState = _this$getClient2.state,
          user = _this$getClient2.user,
          userID = _this$getClient2.userID; // add the Users


      if (state.members) {
        var _iterator = _createForOfIteratorHelper$2(state.members),
            _step;

        try {
          for (_iterator.s(); !(_step = _iterator.n()).done;) {
            var member = _step.value;

            if (member.user) {
              clientState.updateUserReference(member.user, this.cid);
            }
          }
        } catch (err) {
          _iterator.e(err);
        } finally {
          _iterator.f();
        }
      }

      this.state.membership = state.membership || {};
      var messages = state.messages || [];

      if (!this.state.messages) {
        this.state.messages = [];
      }

      this.state.addMessagesSorted(messages, false, true);

      if (!this.state.pinnedMessages) {
        this.state.pinnedMessages = [];
      }

      this.state.addPinnedMessages(state.pinned_messages || []);
      this.state.watcher_count = state.watcher_count || 0; // convert the arrays into objects for easier syncing...

      if (state.watchers) {
        var _iterator2 = _createForOfIteratorHelper$2(state.watchers),
            _step2;

        try {
          for (_iterator2.s(); !(_step2 = _iterator2.n()).done;) {
            var watcher = _step2.value;

            if (watcher) {
              clientState.updateUserReference(watcher, this.cid);
              this.state.watchers[watcher.id] = watcher;
            }
          }
        } catch (err) {
          _iterator2.e(err);
        } finally {
          _iterator2.f();
        }
      } // initialize read state to last message or current time if the channel is empty
      // if the user is a member, this value will be overwritten later on otherwise this ensures
      // that everything up to this point is not marked as unread


      if (userID != null) {
        var last_read = this.state.last_message_at || new Date();

        if (user) {
          this.state.read[user.id] = {
            user: user,
            last_read: last_read
          };
        }
      } // apply read state if part of the state


      if (state.read) {
        var _iterator3 = _createForOfIteratorHelper$2(state.read),
            _step3;

        try {
          for (_iterator3.s(); !(_step3 = _iterator3.n()).done;) {
            var read = _step3.value;

            var parsedRead = _objectSpread$2(_objectSpread$2({}, read), {}, {
              last_read: new Date(read.last_read)
            });

            this.state.read[read.user.id] = parsedRead;

            if (read.user.id === (user === null || user === void 0 ? void 0 : user.id) && typeof parsedRead.unread_messages === 'number') {
              this.state.unreadCount = parsedRead.unread_messages;
            }
          }
        } catch (err) {
          _iterator3.e(err);
        } finally {
          _iterator3.f();
        }
      }

      if (state.members) {
        var _iterator4 = _createForOfIteratorHelper$2(state.members),
            _step4;

        try {
          for (_iterator4.s(); !(_step4 = _iterator4.n()).done;) {
            var _member = _step4.value;

            if (_member.user) {
              this.state.members[_member.user.id] = _member;
            }
          }
        } catch (err) {
          _iterator4.e(err);
        } finally {
          _iterator4.f();
        }
      }
    }
  }, {
    key: "_disconnect",
    value: function _disconnect() {
      this._client.logger('info', "channel:disconnect() - Disconnecting the channel ".concat(this.cid), {
        tags: ['connection', 'channel'],
        channel: this
      });

      this.disconnected = true;
      this.state.setIsUpToDate(false);
    }
  }]);

  return Channel;
}();

function _createForOfIteratorHelper$1(o, allowArrayLike) { var it; if (typeof Symbol === "undefined" || o[Symbol.iterator] == null) { if (Array.isArray(o) || (it = _unsupportedIterableToArray$1(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = o[Symbol.iterator](); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it.return != null) it.return(); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray$1(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray$1(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray$1(o, minLen); }

function _arrayLikeToArray$1(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

/**
 * ClientState - A container class for the client state.
 */
var ClientState = /*#__PURE__*/function () {
  function ClientState() {
    (0,_babel_runtime_helpers_classCallCheck__WEBPACK_IMPORTED_MODULE_6__.default)(this, ClientState);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "users", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "userChannelReferences", void 0);

    // show the status for a certain user...
    // ie online, offline etc
    this.users = {}; // store which channels contain references to the specified user...

    this.userChannelReferences = {};
  }

  (0,_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_7__.default)(ClientState, [{
    key: "updateUsers",
    value: function updateUsers(users) {
      var _iterator = _createForOfIteratorHelper$1(users),
          _step;

      try {
        for (_iterator.s(); !(_step = _iterator.n()).done;) {
          var user = _step.value;
          this.updateUser(user);
        }
      } catch (err) {
        _iterator.e(err);
      } finally {
        _iterator.f();
      }
    }
  }, {
    key: "updateUser",
    value: function updateUser(user) {
      if (user != null) {
        this.users[user.id] = user;
      }
    }
  }, {
    key: "updateUserReference",
    value: function updateUserReference(user, channelID) {
      if (user == null) {
        return;
      }

      this.updateUser(user);

      if (!this.userChannelReferences[user.id]) {
        this.userChannelReferences[user.id] = {};
      }

      this.userChannelReferences[user.id][channelID] = true;
    }
  }]);

  return ClientState;
}();

// Type guards to check WebSocket error type
var isCloseEvent = function isCloseEvent(res) {
  return res.code !== undefined;
};

var isErrorEvent = function isErrorEvent(res) {
  return res.error !== undefined;
};

/**
 * StableWSConnection - A WS connection that reconnects upon failure.
 * - the browser will sometimes report that you're online or offline
 * - the WS connection can break and fail (there is a 30s health check)
 * - sometimes your WS connection will seem to work while the user is in fact offline
 * - to speed up online/offline detection you can use the window.addEventListener('offline');
 *
 * There are 4 ways in which a connection can become unhealthy:
 * - websocket.onerror is called
 * - websocket.onclose is called
 * - the health check fails and no event is received for ~40 seconds
 * - the browser indicates the connection is now offline
 *
 * There are 2 assumptions we make about the server:
 * - state can be recovered by querying the channel again
 * - if the servers fails to publish a message to the client, the WS connection is destroyed
 */
var StableWSConnection = /*#__PURE__*/function () {
  function StableWSConnection(_ref) {
    var _this = this;

    var apiKey = _ref.apiKey,
        authType = _ref.authType,
        clientID = _ref.clientID,
        eventCallback = _ref.eventCallback,
        logger = _ref.logger,
        messageCallback = _ref.messageCallback,
        recoverCallback = _ref.recoverCallback,
        tokenManager = _ref.tokenManager,
        user = _ref.user,
        userAgent = _ref.userAgent,
        userID = _ref.userID,
        wsBaseURL = _ref.wsBaseURL;

    (0,_babel_runtime_helpers_classCallCheck__WEBPACK_IMPORTED_MODULE_6__.default)(this, StableWSConnection);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "apiKey", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "authType", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "clientID", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "eventCallback", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "logger", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "messageCallback", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "recoverCallback", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "tokenManager", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "user", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "userAgent", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "userID", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "wsBaseURL", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "connectionID", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "connectionOpen", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "consecutiveFailures", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "healthCheckInterval", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "healthCheckIntervalRef", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "isConnecting", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "isHealthy", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "isResolved", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "lastEvent", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "monitorInterval", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "monitorIntervalRef", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "rejectPromise", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "resolvePromise", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "totalFailures", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "ws", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "wsID", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "_buildUrl", function () {
      var params = {
        user_id: _this.user.id,
        user_details: _this.user,
        user_token: _this.tokenManager.getToken(),
        server_determines_connection_id: true
      };
      var qs = encodeURIComponent(JSON.stringify(params));

      var token = _this.tokenManager.getToken();

      return "".concat(_this.wsBaseURL, "/connect?json=").concat(qs, "&api_key=").concat(_this.apiKey, "&authorization=").concat(token, "&stream-auth-type=").concat(_this.authType, "&X-Stream-Client=").concat(_this.userAgent);
    });

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "onlineStatusChanged", function (event) {
      if (event.type === 'offline') {
        // mark the connection as down
        _this.logger('info', 'connection:onlineStatusChanged() - Status changing to offline', {
          tags: ['connection']
        });

        _this._setHealth(false);
      } else if (event.type === 'online') {
        // retry right now...
        // We check this.isHealthy, not sure if it's always
        // smart to create a new WS connection if the old one is still up and running.
        // it's possible we didn't miss any messages, so this process is just expensive and not needed.
        _this.logger('info', "connection:onlineStatusChanged() - Status changing to online. isHealthy: ".concat(_this.isHealthy), {
          tags: ['connection']
        });

        if (!_this.isHealthy) {
          _this._reconnect({
            interval: 10
          });
        }
      }
    });

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "onopen", function (wsID) {
      if (_this.wsID !== wsID) return;

      _this.logger('info', 'connection:onopen() - onopen callback', {
        tags: ['connection'],
        wsID: wsID
      });
    });

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "onmessage", function (wsID, event) {
      if (_this.wsID !== wsID) return; // we wait till the first message before we consider the connection open..
      // the reason for this is that auth errors and similar errors trigger a ws.onopen and immediately
      // after that a ws.onclose..

      if (!_this.isResolved && typeof event.data === 'string') {
        var data = JSON.parse(event.data);

        if (data.error != null) {
          var _this$rejectPromise;

          (_this$rejectPromise = _this.rejectPromise) === null || _this$rejectPromise === void 0 ? void 0 : _this$rejectPromise.call(_this, _this._errorFromWSEvent(data, false));
          return;
        } else {
          var _this$resolvePromise;

          (_this$resolvePromise = _this.resolvePromise) === null || _this$resolvePromise === void 0 ? void 0 : _this$resolvePromise.call(_this, event); // set healthy..

          _this._setHealth(true);
        }
      } // trigger the event..


      _this.lastEvent = new Date();

      _this.logger('info', 'connection:onmessage() - onmessage callback', {
        tags: ['connection'],
        event: event,
        wsID: wsID
      });

      _this.messageCallback(event);
    });

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "onclose", function (wsID, event) {
      _this.logger('info', 'connection:onclose() - onclose callback - ' + event.code, {
        tags: ['connection'],
        event: event,
        wsID: wsID
      });

      if (_this.wsID !== wsID) return;

      if (event.code === chatCodes.WS_CLOSED_SUCCESS) {
        var _this$rejectPromise2;

        // this is a permanent error raised by stream..
        // usually caused by invalid auth details
        var error = new Error("WS connection reject with error ".concat(event.reason));
        error.reason = event.reason;
        (_this$rejectPromise2 = _this.rejectPromise) === null || _this$rejectPromise2 === void 0 ? void 0 : _this$rejectPromise2.call(_this, error);

        _this.logger('info', "connection:onclose() - WS connection reject with error ".concat(event.reason), {
          tags: ['connection'],
          event: event
        });
      } else {
        var _this$rejectPromise3;

        _this.consecutiveFailures += 1;
        _this.totalFailures += 1;

        _this._setHealth(false);

        (_this$rejectPromise3 = _this.rejectPromise) === null || _this$rejectPromise3 === void 0 ? void 0 : _this$rejectPromise3.call(_this, _this._errorFromWSEvent(event));

        _this.logger('info', "connection:onclose() - WS connection closed. Calling reconnect ...", {
          tags: ['connection'],
          event: event
        }); // reconnect if its an abnormal failure


        _this._reconnect();
      }
    });

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "onerror", function (wsID, event) {
      var _this$rejectPromise4;

      if (_this.wsID !== wsID) return;
      _this.consecutiveFailures += 1;
      _this.totalFailures += 1;

      _this._setHealth(false);

      (_this$rejectPromise4 = _this.rejectPromise) === null || _this$rejectPromise4 === void 0 ? void 0 : _this$rejectPromise4.call(_this, _this._errorFromWSEvent(event));

      _this.logger('info', "connection:onerror() - WS connection resulted into error", {
        tags: ['connection'],
        event: event
      });

      _this._reconnect();
    });

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "_setHealth", function (healthy) {
      if (healthy && !_this.isHealthy) {
        // yes we are online:
        _this.isHealthy = true;

        _this.eventCallback({
          type: 'connection.changed',
          online: true
        });
      }

      if (!healthy && _this.isHealthy) {
        // bummer we are offline
        _this.isHealthy = false;
        setTimeout(function () {
          if (!_this.isHealthy) {
            _this.eventCallback({
              type: 'connection.changed',
              online: false
            });
          }
        }, 5000);
      }
    });

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "_errorFromWSEvent", function (event) {
      var isWSFailure = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : true;
      var code;
      var statusCode;
      var message;

      if (isCloseEvent(event)) {
        code = event.code;
        statusCode = 'unknown';
        message = event.reason;
      }

      if (isErrorEvent(event)) {
        code = event.error.code;
        statusCode = event.error.StatusCode;
        message = event.error.message;
      } // Keeping this `warn` level log, to avoid cluttering of error logs from ws failures.


      _this.logger('warn', "connection:_errorFromWSEvent() - WS failed with code ".concat(code), {
        tags: ['connection'],
        event: event
      });

      var error = new Error("WS failed with code ".concat(code, " and reason - ").concat(message));
      error.code = code;
      /**
       * StatusCode does not exist on any event types but has been left
       * as is to preserve JS functionality during the TS implementation
       */

      error.StatusCode = statusCode;
      error.isWSFailure = isWSFailure;
      return error;
    });

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "_listenForConnectionChanges", function () {
      if (typeof window !== 'undefined' && window != null && window.addEventListener != null) {
        window.addEventListener('offline', _this.onlineStatusChanged);
        window.addEventListener('online', _this.onlineStatusChanged);
      }
    });

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "_removeConnectionListeners", function () {
      if (typeof window !== 'undefined' && window != null && window.addEventListener != null) {
        window.removeEventListener('offline', _this.onlineStatusChanged);
        window.removeEventListener('online', _this.onlineStatusChanged);
      }
    });

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "_retryInterval", function () {
      // try to reconnect in 0.25-25 seconds (random to spread out the load from failures)
      var max = Math.min(500 + _this.consecutiveFailures * 2000, 25000);
      var min = Math.min(Math.max(250, (_this.consecutiveFailures - 1) * 2000), 25000);
      return Math.floor(Math.random() * (max - min) + min);
    });

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "_setupConnectionPromise", function () {
      var that = _this;
      _this.isResolved = false;
      /** a promise that is resolved once ws.open is called */

      _this.connectionOpen = new Promise(function (resolve, reject) {
        that.resolvePromise = resolve;
        that.rejectPromise = reject;
      }).then(function (e) {
        if (e.data && typeof e.data === 'string') {
          var data = JSON.parse(e.data);

          if (data && data.error != null) {
            throw new Error(JSON.stringify(data.error));
          }

          return data;
        } else {
          return undefined;
        }
      }, function (error) {
        throw error;
      });
    });

    this.wsBaseURL = wsBaseURL;
    this.clientID = clientID;
    this.userID = userID;
    this.user = user;
    this.authType = authType;
    this.userAgent = userAgent;
    this.apiKey = apiKey;
    this.tokenManager = tokenManager;
    /** consecutive failures influence the duration of the timeout */

    this.consecutiveFailures = 0;
    /** keep track of the total number of failures */

    this.totalFailures = 0;
    /** We only make 1 attempt to reconnect at the same time.. */

    this.isConnecting = false;
    /** Boolean that indicates if we have a working connection to the server */

    this.isHealthy = false;
    /** Callback when the connection fails and recovers */

    this.recoverCallback = recoverCallback;
    this.messageCallback = messageCallback;
    this.eventCallback = eventCallback;
    this.logger = logger;
    /** Incremented when a new WS connection is made */

    this.wsID = 1;
    /** Store the last event time for health checks */

    this.lastEvent = null;
    /** Send a health check message every 30 seconds */

    this.healthCheckInterval = 30 * 1000;
    /** Every second we verify that we didn't miss any health checks */

    this.monitorInterval = 1 * 1000;

    this._listenForConnectionChanges();
  }
  /**
   * connect - Connect to the WS URL
   *
   * @return {ConnectAPIResponse<ChannelType, CommandType, UserType>} Promise that completes once the first health check message is received
   */


  (0,_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_7__.default)(StableWSConnection, [{
    key: "connect",
    value: function () {
      var _connect2 = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee() {
        var healthCheck;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                if (!this.isConnecting) {
                  _context.next = 2;
                  break;
                }

                throw Error("You've called connect twice, can only attempt 1 connection at the time");

              case 2:
                _context.prev = 2;
                this.isConnecting = true;
                _context.next = 6;
                return this._connect();

              case 6:
                healthCheck = _context.sent;
                this.isConnecting = false;
                this.consecutiveFailures = 0;

                this._startMonitor();

                this._startHealthCheck();

                this.logger('info', "connection:connect() - Established ws connection with healthcheck: ".concat(healthCheck), {
                  tags: ['connection']
                });
                return _context.abrupt("return", healthCheck);

              case 15:
                _context.prev = 15;
                _context.t0 = _context["catch"](2);
                this.isConnecting = false;
                this.isHealthy = false;
                this.consecutiveFailures += 1;

                if (!(_context.t0.code === chatCodes.TOKEN_EXPIRED && !this.tokenManager.isStatic())) {
                  _context.next = 23;
                  break;
                }

                this.logger('info', 'connection:connect() - WS failure due to expired token, so going to try to reload token and reconnect', {
                  tags: ['connection']
                });
                return _context.abrupt("return", this._reconnect({
                  refreshToken: true
                }));

              case 23:
                if (_context.t0.isWSFailure) {
                  _context.next = 25;
                  break;
                }

                throw new Error(JSON.stringify({
                  code: _context.t0.code,
                  StatusCode: _context.t0.StatusCode,
                  message: _context.t0.message,
                  isWSFailure: _context.t0.isWSFailure
                }));

              case 25:
              case "end":
                return _context.stop();
            }
          }
        }, _callee, this, [[2, 15]]);
      }));

      function connect() {
        return _connect2.apply(this, arguments);
      }

      return connect;
    }()
  }, {
    key: "disconnect",
    value:
    /**
     * disconnect - Disconnect the connection and doesn't recover...
     *
     */
    function disconnect(timeout) {
      var _this2 = this;

      this.logger('info', "connection:disconnect() - Closing the websocket connection for wsID ".concat(this.wsID), {
        tags: ['connection']
      });
      this.wsID += 1; // start by removing all the listeners

      if (this.healthCheckIntervalRef) {
        clearInterval(this.healthCheckIntervalRef);
      }

      if (this.monitorIntervalRef) {
        clearInterval(this.monitorIntervalRef);
      }

      this._removeConnectionListeners();

      this.isHealthy = false; // remove ws handlers...

      if (this.ws && this.ws.removeAllListeners) {
        this.ws.removeAllListeners();
      }

      var isClosedPromise; // and finally close...
      // Assigning to local here because we will remove it from this before the
      // promise resolves.

      var ws = this.ws;

      if (ws && ws.close && ws.readyState === ws.OPEN) {
        isClosedPromise = new Promise(function (resolve) {
          var onclose = function onclose(event) {
            _this2.logger('info', "connection:disconnect() - resolving isClosedPromise ".concat(event ? 'with' : 'without', " close frame"), {
              tags: ['connection'],
              event: event
            });

            resolve();
          };

          ws.onclose = onclose; // In case we don't receive close frame websocket server in time,
          // lets not wait for more than 1 seconds.

          setTimeout(onclose, timeout != null ? timeout : 1000);
        });
        this.logger('info', "connection:disconnect() - Manually closed connection by calling client.disconnect()", {
          tags: ['connection']
        });
        ws.close(chatCodes.WS_CLOSED_SUCCESS, 'Manually closed connection by calling client.disconnect()');
      } else {
        this.logger('info', "connection:disconnect() - ws connection doesn't exist or it is already closed.", {
          tags: ['connection']
        });
        isClosedPromise = Promise.resolve();
      }

      delete this.ws;
      return isClosedPromise;
    }
    /**
     * _connect - Connect to the WS endpoint
     *
     * @return {ConnectAPIResponse<ChannelType, CommandType, UserType>} Promise that completes once the first health check message is received
     */

  }, {
    key: "_connect",
    value: function () {
      var _connect3 = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee2() {
        var wsURL, response;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee2$(_context2) {
          while (1) {
            switch (_context2.prev = _context2.next) {
              case 0:
                _context2.next = 2;
                return this.tokenManager.tokenReady();

              case 2:
                this._setupConnectionPromise();

                wsURL = this._buildUrl();
                this.ws = new (isomorphic_ws__WEBPACK_IMPORTED_MODULE_13___default())(wsURL);
                this.ws.onopen = this.onopen.bind(this, this.wsID);
                this.ws.onclose = this.onclose.bind(this, this.wsID);
                this.ws.onerror = this.onerror.bind(this, this.wsID);
                this.ws.onmessage = this.onmessage.bind(this, this.wsID);
                _context2.next = 11;
                return this.connectionOpen;

              case 11:
                response = _context2.sent;

                if (!response) {
                  _context2.next = 15;
                  break;
                }

                this.connectionID = response.connection_id;
                return _context2.abrupt("return", response);

              case 15:
                return _context2.abrupt("return", undefined);

              case 16:
              case "end":
                return _context2.stop();
            }
          }
        }, _callee2, this);
      }));

      function _connect() {
        return _connect3.apply(this, arguments);
      }

      return _connect;
    }()
    /**
     * _reconnect - Retry the connection to WS endpoint
     *
     * @param {{ interval?: number; refreshToken?: boolean }} options Following options are available
     *
     * - `interval`	{int}			number of ms that function should wait before reconnecting
     * - `refreshToken` {boolean}	reload/refresh user token be refreshed before attempting reconnection.
     */

  }, {
    key: "_reconnect",
    value: function () {
      var _reconnect2 = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee3() {
        var options,
            interval,
            _open,
            _args3 = arguments;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee3$(_context3) {
          while (1) {
            switch (_context3.prev = _context3.next) {
              case 0:
                options = _args3.length > 0 && _args3[0] !== undefined ? _args3[0] : {};
                this.logger('info', 'connection:_reconnect() - Initiating the reconnect', {
                  tags: ['connection']
                }); // only allow 1 connection at the time

                if (!(this.isConnecting || this.isHealthy)) {
                  _context3.next = 5;
                  break;
                }

                this.logger('info', 'connection:_reconnect() - Abort (1) since already connecting or healthy', {
                  tags: ['connection']
                });
                return _context3.abrupt("return");

              case 5:
                // reconnect in case of on error or on close
                // also reconnect if the health check cycle fails
                interval = options.interval;

                if (!interval) {
                  interval = this._retryInterval();
                } // reconnect, or try again after a little while...


                _context3.next = 9;
                return sleep(interval);

              case 9:
                if (!(this.isConnecting || this.isHealthy)) {
                  _context3.next = 12;
                  break;
                }

                this.logger('info', 'connection:_reconnect() - Abort (2) since already connecting or healthy', {
                  tags: ['connection']
                });
                return _context3.abrupt("return");

              case 12:
                this.isConnecting = true; // cleanup the old connection

                this.logger('info', 'connection:_reconnect() - Destroying current WS connection', {
                  tags: ['connection']
                });

                this._destroyCurrentWSConnection();

                if (!options.refreshToken) {
                  _context3.next = 18;
                  break;
                }

                _context3.next = 18;
                return this.tokenManager.loadToken();

              case 18:
                _context3.prev = 18;
                _context3.next = 21;
                return this._connect();

              case 21:
                _open = _context3.sent;

                if (!this.recoverCallback) {
                  _context3.next = 27;
                  break;
                }

                this.logger('info', 'connection:_reconnect() - Waiting for recoverCallBack', {
                  tags: ['connection']
                });
                _context3.next = 26;
                return this.recoverCallback(_open);

              case 26:
                this.logger('info', 'connection:_reconnect() - Finished recoverCallBack', {
                  tags: ['connection']
                });

              case 27:
                this.isConnecting = false;
                this.consecutiveFailures = 0;
                _context3.next = 40;
                break;

              case 31:
                _context3.prev = 31;
                _context3.t0 = _context3["catch"](18);
                this.isConnecting = false;
                this.isHealthy = false;
                this.consecutiveFailures += 1;

                if (!(_context3.t0.code === chatCodes.TOKEN_EXPIRED && !this.tokenManager.isStatic())) {
                  _context3.next = 39;
                  break;
                }

                this.logger('info', 'connection:_reconnect() - WS failure due to expired token, so going to try to reload token and reconnect', {
                  tags: ['connection']
                });
                return _context3.abrupt("return", this._reconnect({
                  refreshToken: true
                }));

              case 39:
                // reconnect on WS failures, don't reconnect if there is a code bug
                if (_context3.t0.isWSFailure) {
                  this.logger('info', 'connection:_reconnect() - WS failure, so going to try to reconnect', {
                    tags: ['connection']
                  });

                  this._reconnect();
                }

              case 40:
                this.logger('info', 'connection:_reconnect() - == END ==', {
                  tags: ['connection']
                });

              case 41:
              case "end":
                return _context3.stop();
            }
          }
        }, _callee3, this, [[18, 31]]);
      }));

      function _reconnect() {
        return _reconnect2.apply(this, arguments);
      }

      return _reconnect;
    }()
    /**
     * onlineStatusChanged - this function is called when the browser connects or disconnects from the internet.
     *
     * @param {Event} event Event with type online or offline
     *
     */

  }, {
    key: "_destroyCurrentWSConnection",
    value:
    /**
     * _destroyCurrentWSConnection - Removes the current WS connection
     *
     */
    function _destroyCurrentWSConnection() {
      // increment the ID, meaning we will ignore all messages from the old
      // ws connection from now on.
      this.wsID += 1;

      try {
        if (this.ws && this.ws.removeAllListeners) {
          this.ws.removeAllListeners();
        }

        if (this.ws && this.ws.close) {
          this.ws.close();
        }
      } catch (e) {// we don't care
      }
    }
    /**
     * _retryInterval - A retry interval which increases after consecutive failures
     *
     * @return {number} Duration to wait in milliseconds
     */

  }, {
    key: "_startHealthCheck",
    value:
    /**
     * _startHealthCheck - Sends a message every 30s or so to see if the ws connection still works
     *
     */
    function _startHealthCheck() {
      var that = this; // 30 seconds is the recommended interval (messenger uses this)

      this.healthCheckIntervalRef = setInterval(function () {
        // send the healthcheck.., server replies with a health check event
        var data = [{
          type: 'health.check',
          client_id: that.clientID,
          user_id: that.userID
        }]; // try to send on the connection

        try {
          var _that$ws;

          (_that$ws = that.ws) === null || _that$ws === void 0 ? void 0 : _that$ws.send(JSON.stringify(data));
        } catch (e) {// error will already be detected elsewhere
        }
      }, that.healthCheckInterval);
    }
    /**
     * _startMonitor - Verifies we didn't miss any events. Marks the connection as failed in case we did.
     *
     */

  }, {
    key: "_startMonitor",
    value: function _startMonitor() {
      var _this3 = this;

      var that = this;
      this.monitorIntervalRef = setInterval(function () {
        var now = new Date(); // means we missed a health check

        if (that.lastEvent && now.getTime() - that.lastEvent.getTime() > _this3.healthCheckInterval + 10 * 1000) {
          _this3.logger('info', 'connection:_startMonitor - going to reconnect', {
            tags: ['connection']
          });

          that._setHealth(false);

          that._reconnect();
        }
      }, that.monitorInterval);
    }
  }]);

  return StableWSConnection;
}();

var jwt = null;

var crypto = null;

function ownKeys$1(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); if (enumerableOnly) symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; }); keys.push.apply(keys, symbols); } return keys; }

function _objectSpread$1(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; if (i % 2) { ownKeys$1(Object(source), true).forEach(function (key) { (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(target, key, source[key]); }); } else if (Object.getOwnPropertyDescriptors) { Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)); } else { ownKeys$1(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } } return target; }

/**
 * Creates the JWT token that can be used for a UserSession
 * @method JWTUserToken
 * @memberof signing
 * @private
 * @param {Secret} apiSecret - API Secret key
 * @param {string} userId - The user_id key in the JWT payload
 * @param {UnknownType} [extraData] - Extra that should be part of the JWT token
 * @param {SignOptions} [jwtOptions] - Options that can be past to jwt.sign
 * @return {string} JWT Token
 */
function JWTUserToken(apiSecret, userId) {
  var extraData = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};
  var jwtOptions = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : {};

  if (typeof userId !== 'string') {
    throw new TypeError('userId should be a string');
  }

  var payload = _objectSpread$1({
    user_id: userId
  }, extraData); // make sure we return a clear error when jwt is shimmed (ie. browser build)


  {
    throw Error("Unable to find jwt crypto, if you are getting this error is probably because you are trying to generate tokens on browser or React Native (or other environment where crypto functions are not available). Please Note: token should only be generated server-side.");
  }

  var opts = (0,_babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_1__.default)({
    algorithm: 'HS256',
    noTimestamp: true
  }, jwtOptions);
}
function JWTServerToken(apiSecret) {
  var jwtOptions = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};
  var payload = {
    server: true
  };

  var opts = (0,_babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_1__.default)({
    algorithm: 'HS256',
    noTimestamp: true
  }, jwtOptions);

  return jwt.sign(payload, apiSecret, opts);
}
function UserFromToken(token) {
  var fragments = token.split('.');

  if (fragments.length !== 3) {
    return '';
  }

  var b64Payload = fragments[1];
  var payload = decodeBase64(b64Payload);
  var data = JSON.parse(payload);
  return data.user_id;
}
/**
 *
 * @param {string} userId the id of the user
 * @return {string}
 */

function DevToken(userId) {
  return ['eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9', //{"alg": "HS256", "typ": "JWT"}
  encodeBase64(JSON.stringify({
    user_id: userId
  })), 'devtoken' // hardcoded signature
  ].join('.');
}
/**
 *
 * @param {string} body the signed message
 * @param {string} secret the shared secret used to generate the signature (Stream API secret)
 * @param {string} signature the signature to validate
 * @return {boolean}
 */

function CheckSignature(body, secret, signature) {
  var key = Buffer.from(secret, 'ascii');
  var hash = crypto.createHmac('sha256', key).update(body).digest('hex');
  return hash === signature;
}

/**
 * TokenManager
 *
 * Handles all the operations around user token.
 */
var TokenManager =
/**
 * Constructor
 *
 * @param {Secret} secret
 */
function TokenManager(secret) {
  var _this = this;

  (0,_babel_runtime_helpers_classCallCheck__WEBPACK_IMPORTED_MODULE_6__.default)(this, TokenManager);

  (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "loadTokenPromise", void 0);

  (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "type", void 0);

  (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "secret", void 0);

  (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "token", void 0);

  (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "tokenProvider", void 0);

  (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "user", void 0);

  (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "setTokenOrProvider", /*#__PURE__*/function () {
    var _ref = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee(tokenOrProvider, user) {
      return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee$(_context) {
        while (1) {
          switch (_context.prev = _context.next) {
            case 0:
              _this.validateToken(tokenOrProvider, user);

              _this.user = user;

              if (isFunction(tokenOrProvider)) {
                _this.tokenProvider = tokenOrProvider;
                _this.type = 'provider';
              }

              if (typeof tokenOrProvider === 'string') {
                _this.token = tokenOrProvider;
                _this.type = 'static';
              }

              if (!tokenOrProvider && _this.user && _this.secret) {
                _this.token = JWTUserToken(_this.secret, user.id, {}, {});
                _this.type = 'static';
              }

              _context.next = 7;
              return _this.loadToken();

            case 7:
            case "end":
              return _context.stop();
          }
        }
      }, _callee);
    }));

    return function (_x, _x2) {
      return _ref.apply(this, arguments);
    };
  }());

  (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "reset", function () {
    _this.token = undefined;
    _this.user = undefined;
    _this.loadTokenPromise = null;
  });

  (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "validateToken", function (tokenOrProvider, user) {
    // allow empty token for anon user
    if (user && user.anon && !tokenOrProvider) return; // Don't allow empty token for non-server side client.

    if (!_this.secret && !tokenOrProvider) {
      throw new Error('User token can not be empty');
    }

    if (tokenOrProvider && typeof tokenOrProvider !== 'string' && !isFunction(tokenOrProvider)) {
      throw new Error('user token should either be a string or a function');
    }

    if (typeof tokenOrProvider === 'string') {
      // Allow empty token for anonymous users
      if (user.anon && tokenOrProvider === '') return;
      var tokenUserId = UserFromToken(tokenOrProvider);

      if (tokenOrProvider != null && (tokenUserId == null || tokenUserId === '' || tokenUserId !== user.id)) {
        throw new Error('userToken does not have a user_id or is not matching with user.id');
      }
    }
  });

  (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "tokenReady", function () {
    return _this.loadTokenPromise;
  });

  (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "loadToken", function () {
    // eslint-disable-next-line no-async-promise-executor
    _this.loadTokenPromise = new Promise( /*#__PURE__*/function () {
      var _ref2 = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee2(resolve) {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee2$(_context2) {
          while (1) {
            switch (_context2.prev = _context2.next) {
              case 0:
                if (!(_this.type === 'static')) {
                  _context2.next = 2;
                  break;
                }

                return _context2.abrupt("return", resolve(_this.token));

              case 2:
                if (!(_this.tokenProvider && typeof _this.tokenProvider !== 'string')) {
                  _context2.next = 7;
                  break;
                }

                _context2.next = 5;
                return _this.tokenProvider();

              case 5:
                _this.token = _context2.sent;
                resolve(_this.token);

              case 7:
              case "end":
                return _context2.stop();
            }
          }
        }, _callee2);
      }));

      return function (_x3) {
        return _ref2.apply(this, arguments);
      };
    }());
    return _this.loadTokenPromise;
  });

  (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "getToken", function () {
    if (_this.token) {
      return _this.token;
    }

    if (_this.user && _this.user.anon && !_this.token) {
      return _this.token;
    }

    if (_this.secret) {
      return JWTServerToken(_this.secret);
    }

    throw new Error("Both secret and user tokens are not set. Either client.connectUser wasn't called or client.disconnect was called");
  });

  (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "isStatic", function () {
    return _this.type === 'static';
  });

  this.loadTokenPromise = null;

  if (secret) {
    this.secret = secret;
  }

  this.type = 'static';

  if (this.secret) {
    this.token = JWTServerToken(this.secret);
  }
}
/**
 * Set the static string token or token provider.
 * Token provider should return a token string or a promise which resolves to string token.
 *
 * @param {TokenOrProvider} tokenOrProvider
 * @param {UserResponse<UserType>} user
 */
;

function _createForOfIteratorHelper(o, allowArrayLike) { var it; if (typeof Symbol === "undefined" || o[Symbol.iterator] == null) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = o[Symbol.iterator](); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it.return != null) it.return(); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); if (enumerableOnly) symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; }); keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; if (i % 2) { ownKeys(Object(source), true).forEach(function (key) { (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(target, key, source[key]); }); } else if (Object.getOwnPropertyDescriptors) { Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)); } else { ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } } return target; }

function isString(x) {
  return typeof x === 'string' || x instanceof String;
}

var StreamChat = /*#__PURE__*/function () {
  function StreamChat(_key, secretOrOptions, _options) {
    var _this = this;

    (0,_babel_runtime_helpers_classCallCheck__WEBPACK_IMPORTED_MODULE_6__.default)(this, StreamChat);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "_user", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "activeChannels", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "anonymous", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "axiosInstance", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "baseURL", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "browser", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "cleaningIntervalRef", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "clientID", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "configs", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "connecting", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "connectionID", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "failures", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "key", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "listeners", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "logger", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "recoverStateOnReconnect", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "mutedChannels", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "mutedUsers", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "node", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "options", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "secret", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "setUserPromise", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "state", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "tokenManager", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "user", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "userAgent", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "userID", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "wsBaseURL", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "wsConnection", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "wsPromise", void 0);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "_hasConnectionID", function () {
      var _this$wsConnection;

      return Boolean((_this$wsConnection = _this.wsConnection) === null || _this$wsConnection === void 0 ? void 0 : _this$wsConnection.connectionID);
    });

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "connectUser", function (user, userTokenOrProvider) {
      if (!user.id) {
        throw new Error('The "id" field on the user is missing');
      }
      /**
       * Calling connectUser multiple times is potentially the result of a  bad integration, however,
       * If the user id remains the same we don't throw error
       */


      if (_this.userID === user.id && _this.setUserPromise) {
        console.warn('Consecutive calls to connectUser is detected, ideally you should only call this function once in your app.');
        return _this.setUserPromise;
      }

      if (_this.userID) {
        throw new Error('Use client.disconnect() before trying to connect as a different user. connectUser was called twice.');
      }

      if ((_this._isUsingServerAuth() || _this.node) && !_this.options.allowServerSideConnect) {
        console.warn('Please do not use connectUser server side. connectUser impacts MAU and concurrent connection usage and thus your bill. If you have a valid use-case, add "allowServerSideConnect: true" to the client options to disable this warning.');
      } // we generate the client id client side


      _this.userID = user.id;
      _this.anonymous = false;

      var setTokenPromise = _this._setToken(user, userTokenOrProvider);

      _this._setUser(user);

      var wsPromise = _this.openConnection();

      _this.setUserPromise = Promise.all([setTokenPromise, wsPromise]).then(function (result) {
        return result[1];
      } // We only return connection promise;
      );
      return _this.setUserPromise;
    });

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "setUser", this.connectUser);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "_setToken", function (user, userTokenOrProvider) {
      return _this.tokenManager.setTokenOrProvider(userTokenOrProvider, user);
    });

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "closeConnection", function (timeout) {
      if (_this.cleaningIntervalRef != null) {
        clearInterval(_this.cleaningIntervalRef);
        _this.cleaningIntervalRef = undefined;
      }

      if (!_this.wsConnection) {
        return Promise.resolve();
      }

      return _this.wsConnection.disconnect(timeout);
    });

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "openConnection", /*#__PURE__*/(0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee() {
      var _this$wsConnection2;

      return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee$(_context) {
        while (1) {
          switch (_context.prev = _context.next) {
            case 0:
              if (_this.userID) {
                _context.next = 2;
                break;
              }

              throw Error('User is not set on client, use client.connectUser or client.connectAnonymousUser instead');

            case 2:
              if (!((_this$wsConnection2 = _this.wsConnection) !== null && _this$wsConnection2 !== void 0 && _this$wsConnection2.isHealthy && _this._hasConnectionID())) {
                _context.next = 5;
                break;
              }

              _this.logger('info', 'client:openConnection() - openConnection called twice, healthy connection already exists', {
                tags: ['connection', 'client']
              });

              return _context.abrupt("return", Promise.resolve());

            case 5:
              _this.clientID = "".concat(_this.userID, "--").concat(randomId());
              _this.wsPromise = _this.connect();

              _this._startCleaning();

              return _context.abrupt("return", _this.wsPromise);

            case 9:
            case "end":
              return _context.stop();
          }
        }
      }, _callee);
    })));

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "_setupConnection", this.openConnection);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "disconnectUser", /*#__PURE__*/function () {
      var _ref2 = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee2(timeout) {
        var closePromise, _i, _Object$values, _channel;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee2$(_context2) {
          while (1) {
            switch (_context2.prev = _context2.next) {
              case 0:
                _this.logger('info', 'client:disconnect() - Disconnecting the client', {
                  tags: ['connection', 'client']
                }); // remove the user specific fields


                delete _this.user;
                delete _this._user;
                delete _this.userID;
                _this.anonymous = false;
                closePromise = _this.closeConnection(timeout);

                for (_i = 0, _Object$values = Object.values(_this.activeChannels); _i < _Object$values.length; _i++) {
                  _channel = _Object$values[_i];

                  _channel._disconnect();
                } // ensure we no longer return inactive channels


                _this.activeChannels = {}; // reset client state

                _this.state = new ClientState(); // reset token manager

                _this.tokenManager.reset(); // close the WS connection


                return _context2.abrupt("return", closePromise);

              case 11:
              case "end":
                return _context2.stop();
            }
          }
        }, _callee2);
      }));

      return function (_x) {
        return _ref2.apply(this, arguments);
      };
    }());

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "disconnect", this.disconnectUser);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "connectAnonymousUser", function () {
      if ((_this._isUsingServerAuth() || _this.node) && !_this.options.allowServerSideConnect) {
        console.warn('Please do not use connectUser server side. connectUser impacts MAU and concurrent connection usage and thus your bill. If you have a valid use-case, add "allowServerSideConnect: true" to the client options to disable this warning.');
      }

      _this.anonymous = true;
      _this.userID = randomId();
      var anonymousUser = {
        id: _this.userID,
        anon: true
      };

      _this._setToken(anonymousUser, '');

      _this._setUser(anonymousUser);

      return _this._setupConnection();
    });

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "setAnonymousUser", this.connectAnonymousUser);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "doAxiosRequest", /*#__PURE__*/function () {
      var _ref3 = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee3(type, url, data) {
        var options,
            requestConfig,
            response,
            _args3 = arguments;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee3$(_context3) {
          while (1) {
            switch (_context3.prev = _context3.next) {
              case 0:
                options = _args3.length > 3 && _args3[3] !== undefined ? _args3[3] : {};
                _context3.next = 3;
                return _this.tokenManager.tokenReady();

              case 3:
                requestConfig = _this._enrichAxiosOptions(options);
                _context3.prev = 4;

                _this._logApiRequest(type, url, data, requestConfig);

                _context3.t0 = type;
                _context3.next = _context3.t0 === 'get' ? 9 : _context3.t0 === 'delete' ? 13 : _context3.t0 === 'post' ? 17 : _context3.t0 === 'put' ? 21 : _context3.t0 === 'patch' ? 25 : _context3.t0 === 'options' ? 29 : 33;
                break;

              case 9:
                _context3.next = 11;
                return _this.axiosInstance.get(url, requestConfig);

              case 11:
                response = _context3.sent;
                return _context3.abrupt("break", 34);

              case 13:
                _context3.next = 15;
                return _this.axiosInstance.delete(url, requestConfig);

              case 15:
                response = _context3.sent;
                return _context3.abrupt("break", 34);

              case 17:
                _context3.next = 19;
                return _this.axiosInstance.post(url, data, requestConfig);

              case 19:
                response = _context3.sent;
                return _context3.abrupt("break", 34);

              case 21:
                _context3.next = 23;
                return _this.axiosInstance.put(url, data, requestConfig);

              case 23:
                response = _context3.sent;
                return _context3.abrupt("break", 34);

              case 25:
                _context3.next = 27;
                return _this.axiosInstance.patch(url, data, requestConfig);

              case 27:
                response = _context3.sent;
                return _context3.abrupt("break", 34);

              case 29:
                _context3.next = 31;
                return _this.axiosInstance.options(url, requestConfig);

              case 31:
                response = _context3.sent;
                return _context3.abrupt("break", 34);

              case 33:
                throw new Error('Invalid request type');

              case 34:
                _this._logApiResponse(type, url, response);

                return _context3.abrupt("return", _this.handleResponse(response));

              case 38:
                _context3.prev = 38;
                _context3.t1 = _context3["catch"](4);

                _this._logApiError(type, url, _context3.t1);

                if (!_context3.t1.response) {
                  _context3.next = 50;
                  break;
                }

                if (!(_context3.t1.response.data.code === chatCodes.TOKEN_EXPIRED && !_this.tokenManager.isStatic())) {
                  _context3.next = 47;
                  break;
                }

                _this.tokenManager.loadToken();

                _context3.next = 46;
                return _this.doAxiosRequest(type, url, data, options);

              case 46:
                return _context3.abrupt("return", _context3.sent);

              case 47:
                return _context3.abrupt("return", _this.handleResponse(_context3.t1.response));

              case 50:
                throw _context3.t1;

              case 51:
              case "end":
                return _context3.stop();
            }
          }
        }, _callee3, null, [[4, 38]]);
      }));

      return function (_x2, _x3, _x4) {
        return _ref3.apply(this, arguments);
      };
    }());

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "dispatchEvent", function (event) {
      // client event handlers
      _this._handleClientEvent(event); // channel event handlers


      var cid = event.cid;
      var channel = cid ? _this.activeChannels[cid] : undefined;

      if (channel) {
        channel._handleChannelEvent(event);
      }

      _this._callClientListeners(event);

      if (channel) {
        channel._callChannelListeners(event);
      }
    });

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "handleEvent", function (messageEvent) {
      // dispatch the event to the channel listeners
      var jsonString = messageEvent.data;
      var event = JSON.parse(jsonString);
      event.received_at = new Date();

      _this.dispatchEvent(event);
    });

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "_updateMemberWatcherReferences", function (user) {
      var refMap = _this.state.userChannelReferences[user.id] || {};

      for (var _channelID in refMap) {
        var _channel2 = _this.activeChannels[_channelID];
        /** search the members and watchers and update as needed... */

        if (_channel2 !== null && _channel2 !== void 0 && _channel2.state) {
          if (_channel2.state.members[user.id]) {
            _channel2.state.members[user.id].user = user;
          }

          if (_channel2.state.watchers[user.id]) {
            _channel2.state.watchers[user.id] = user;
          }
        }
      }
    });

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "_updateUserReferences", this._updateMemberWatcherReferences);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "_updateUserMessageReferences", function (user) {
      var refMap = _this.state.userChannelReferences[user.id] || {};

      for (var _channelID2 in refMap) {
        var _channel3 = _this.activeChannels[_channelID2];
        var state = _channel3.state;
        /** update the messages from this user. */

        state === null || state === void 0 ? void 0 : state.updateUserMessages(user);
      }
    });

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "_deleteUserMessageReference", function (user) {
      var hardDelete = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;
      var refMap = _this.state.userChannelReferences[user.id] || {};

      for (var _channelID3 in refMap) {
        var _channel4 = _this.activeChannels[_channelID3];
        var state = _channel4.state;
        /** deleted the messages from this user. */

        state === null || state === void 0 ? void 0 : state.deleteUserMessages(user, hardDelete);
      }
    });

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "_handleUserEvent", function (event) {
      if (!event.user) {
        return;
      }
      /** update the client.state with any changes to users */


      if (event.type === 'user.presence.changed' || event.type === 'user.updated') {
        var _event$user;

        if (((_event$user = event.user) === null || _event$user === void 0 ? void 0 : _event$user.id) === _this.userID) {
          _this.user = _this.user && _objectSpread(_objectSpread({}, _this.user), event.user);
          /** Updating only available properties in _user object. */

          Object.keys(event.user).forEach(function (key) {
            if (_this._user && key in _this._user) {
              /** @ts-expect-error */
              _this._user[key] = event.user[key];
            }
          });
        }

        _this.state.updateUser(event.user);

        _this._updateMemberWatcherReferences(event.user);
      }

      if (event.type === 'user.updated') {
        _this._updateUserMessageReferences(event.user);
      }

      if (event.type === 'user.deleted' && event.user.deleted_at && (event.mark_messages_deleted || event.hard_delete)) {
        _this._deleteUserMessageReference(event.user, event.hard_delete);
      }
    });

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "_callClientListeners", function (event) {
      var client = _this; // gather and call the listeners

      var listeners = [];

      if (client.listeners.all) {
        listeners.push.apply(listeners, (0,_babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_4__.default)(client.listeners.all));
      }

      if (client.listeners[event.type]) {
        listeners.push.apply(listeners, (0,_babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_4__.default)(client.listeners[event.type]));
      } // call the event and send it to the listeners


      for (var _i2 = 0, _listeners = listeners; _i2 < _listeners.length; _i2++) {
        var listener = _listeners[_i2];
        listener(event);
      }
    });

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "recoverState", /*#__PURE__*/(0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee4() {
      var _this$wsConnection3;

      var cids;
      return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee4$(_context4) {
        while (1) {
          switch (_context4.prev = _context4.next) {
            case 0:
              _this.logger('info', "client:recoverState() - Start of recoverState with connectionID ".concat((_this$wsConnection3 = _this.wsConnection) === null || _this$wsConnection3 === void 0 ? void 0 : _this$wsConnection3.connectionID), {
                tags: ['connection']
              });

              cids = Object.keys(_this.activeChannels);

              if (!(cids.length && _this.recoverStateOnReconnect)) {
                _context4.next = 10;
                break;
              }

              _this.logger('info', "client:recoverState() - Start the querying of ".concat(cids.length, " channels"), {
                tags: ['connection', 'client']
              });

              _context4.next = 6;
              return _this.queryChannels({
                cid: {
                  $in: cids
                }
              }, {
                last_message_at: -1
              }, {
                limit: 30
              });

            case 6:
              _this.logger('info', 'client:recoverState() - Querying channels finished', {
                tags: ['connection', 'client']
              });

              _this.dispatchEvent({
                type: 'connection.recovered'
              });

              _context4.next = 11;
              break;

            case 10:
              _this.dispatchEvent({
                type: 'connection.recovered'
              });

            case 11:
              _this.wsPromise = Promise.resolve();
              _this.setUserPromise = Promise.resolve();

            case 13:
            case "end":
              return _context4.stop();
          }
        }
      }, _callee4);
    })));

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "getChannelByMembers", function (channelType, custom) {
      // Check if the channel already exists.
      // Only allow 1 channel object per cid
      var membersStr = (0,_babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_4__.default)(custom.members || []).sort().join(',');

      var tempCid = "".concat(channelType, ":!members-").concat(membersStr);

      if (!membersStr) {
        throw Error('Please specify atleast one member when creating unique conversation');
      } // channel could exist in `activeChannels` list with either one of the following two keys:
      // 1. cid - Which gets set on channel only after calling channel.query or channel.watch or channel.create
      // 2. Sorted membersStr - E.g., "messaging:amin,vishal" OR "messaging:amin,jaap,tom"
      //                        This is set when you create a channel, but haven't queried yet. After query,
      //                        we will replace it with `cid`


      for (var _key2 in _this.activeChannels) {
        var _channel5 = _this.activeChannels[_key2];

        if (_key2 === tempCid) {
          return _channel5;
        }

        if (_key2.indexOf("".concat(channelType, ":!members-")) === 0) {
          var membersStrInExistingChannel = Object.keys(_channel5.state.members).sort().join(',');

          if (membersStrInExistingChannel === membersStr) {
            return _channel5;
          }
        }
      }

      var channel = new Channel(_this, channelType, undefined, custom); // For the time being set the key as membersStr, since we don't know the cid yet.
      // In channel.query, we will replace it with 'cid'.

      _this.activeChannels[tempCid] = channel;
      return channel;
    });

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "getChannelById", function (channelType, channelID, custom) {
      if (typeof channelID === 'string' && ~channelID.indexOf(':')) {
        throw Error("Invalid channel id ".concat(channelID, ", can't contain the : character"));
      } // only allow 1 channel object per cid


      var cid = "".concat(channelType, ":").concat(channelID);

      if (cid in _this.activeChannels) {
        var _channel6 = _this.activeChannels[cid];

        if (Object.keys(custom).length > 0) {
          _channel6.data = custom;
          _channel6._data = custom;
        }

        return _channel6;
      }

      var channel = new Channel(_this, channelType, channelID, custom);
      _this.activeChannels[channel.cid] = channel;
      return channel;
    });

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "updateUsers", this.upsertUsers);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "updateUser", this.upsertUser);

    (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "_isUsingServerAuth", function () {
      return !!_this.secret;
    });

    // set the key
    this.key = _key;
    this.listeners = {};
    this.state = new ClientState(); // a list of channels to hide ws events from

    this.mutedChannels = [];
    this.mutedUsers = []; // set the secret

    if (secretOrOptions && isString(secretOrOptions)) {
      this.secret = secretOrOptions;
    } // set the options... and figure out defaults...


    var inputOptions = _options ? _options : secretOrOptions && !isString(secretOrOptions) ? secretOrOptions : {};
    this.browser = typeof inputOptions.browser !== 'undefined' ? inputOptions.browser : typeof window !== 'undefined';
    this.node = !this.browser;
    this.options = _objectSpread({
      timeout: 3000,
      withCredentials: false,
      // making sure cookies are not sent
      warmUp: false,
      recoverStateOnReconnect: true
    }, inputOptions);

    if (this.node && !this.options.httpsAgent) {
      this.options.httpsAgent = new https.Agent({
        keepAlive: true,
        keepAliveMsecs: 3000
      });
    }

    this.axiosInstance = axios__WEBPACK_IMPORTED_MODULE_10___default().create(this.options);
    this.setBaseURL(this.options.baseURL || 'https://chat-us-east-1.stream-io-api.com');

    if (typeof process !== 'undefined' && process.env.STREAM_LOCAL_TEST_RUN) {
      this.setBaseURL('http://localhost:3030');
    }

    if (typeof process !== 'undefined' && process.env.STREAM_LOCAL_TEST_HOST) {
      this.setBaseURL('http://' + process.env.STREAM_LOCAL_TEST_HOST);
    } // WS connection is initialized when setUser is called


    this.wsConnection = null;
    this.wsPromise = null;
    this.setUserPromise = null; // keeps a reference to all the channels that are in use

    this.activeChannels = {}; // mapping between channel groups and configs

    this.configs = {};
    this.anonymous = false; // If its a server-side client, then lets initialize the tokenManager, since token will be
    // generated from secret.

    this.tokenManager = new TokenManager(this.secret);
    /**
     * logger function should accept 3 parameters:
     * @param logLevel string
     * @param message   string
     * @param extraData object
     *
     * e.g.,
     * const client = new StreamChat('api_key', {}, {
     * 		logger = (logLevel, message, extraData) => {
     * 			console.log(message);
     * 		}
     * })
     *
     * extraData contains tags array attached to log message. Tags can have one/many of following values:
     * 1. api
     * 2. api_request
     * 3. api_response
     * 4. client
     * 5. channel
     * 6. connection
     * 7. event
     *
     * It may also contains some extra data, some examples have been mentioned below:
     * 1. {
     * 		tags: ['api', 'api_request', 'client'],
     * 		url: string,
     * 		payload: object,
     * 		config: object
     * }
     * 2. {
     * 		tags: ['api', 'api_response', 'client'],
     * 		url: string,
     * 		response: object
     * }
     * 3. {
     * 		tags: ['api', 'api_response', 'client'],
     * 		url: string,
     * 		error: object
     * }
     * 4. {
     * 		tags: ['event', 'client'],
     * 		event: object
     * }
     * 5. {
     * 		tags: ['channel'],
     * 		channel: object
     * }
     */

    this.logger = isFunction(inputOptions.logger) ? inputOptions.logger : function () {
      return null;
    };
    this.recoverStateOnReconnect = this.options.recoverStateOnReconnect;
  }
  /**
   * Get a client instance
   *
   * This function always returns the same Client instance to avoid issues raised by multiple Client and WS connections
   *
   * **After the first call, the client configuration will not change if the key or options parameters change**
   *
   * @param {string} key - the api key
   * @param {string} [secret] - the api secret
   * @param {StreamChatOptions} [options] - additional options, here you can pass custom options to axios instance
   * @param {boolean} [options.browser] - enforce the client to be in browser mode
   * @param {boolean} [options.warmUp] - default to false, if true, client will open a connection as soon as possible to speed up following requests
   * @param {Logger} [options.Logger] - custom logger
   * @param {number} [options.timeout] - default to 3000
   * @param {httpsAgent} [options.httpsAgent] - custom httpsAgent, in node it's default to https.agent()
   * @example <caption>initialize the client in user mode</caption>
   * StreamChat.getInstance('api_key')
   * @example <caption>initialize the client in user mode with options</caption>
   * StreamChat.getInstance('api_key', { timeout:5000 })
   * @example <caption>secret is optional and only used in server side mode</caption>
   * StreamChat.getInstance('api_key', "secret", { httpsAgent: customAgent })
   */


  (0,_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_7__.default)(StreamChat, [{
    key: "devToken",
    value: function devToken(userID) {
      return DevToken(userID);
    }
  }, {
    key: "getAuthType",
    value: function getAuthType() {
      return this.anonymous ? 'anonymous' : 'jwt';
    }
  }, {
    key: "setBaseURL",
    value: function setBaseURL(baseURL) {
      this.baseURL = baseURL;
      this.wsBaseURL = this.baseURL.replace('http', 'ws').replace(':3030', ':8800');
    }
  }, {
    key: "_setUser",
    value: function _setUser(user) {
      // this one is used by the frontend
      this.user = user; // this one is actually used for requests...

      this._user = _objectSpread({}, user);
    }
    /**
     * Disconnects the websocket connection, without removing the user set on client.
     * client.closeConnection will not trigger default auto-retry mechanism for reconnection. You need
     * to call client.openConnection to reconnect to websocket.
     *
     * This is mainly useful on mobile side. You can only receive push notifications
     * if you don't have active websocket connection.
     * So when your app goes to background, you can call `client.closeConnection`.
     * And when app comes back to foreground, call `client.openConnection`.
     *
     * @param timeout Max number of ms, to wait for close event of websocket, before forcefully assuming succesful disconnection.
     *                https://developer.mozilla.org/en-US/docs/Web/API/CloseEvent
     */

  }, {
    key: "updateAppSettings",
    value:
    /**
    * updateAppSettings - updates application settings
    *
    * @param {AppSettings} options App settings.
    * 		IE: {
     			"apn_config": {
    			"auth_type": "token",
    			"auth_key": fs.readFileSync(
    				'./apn-push-auth-key.p8',
    				'utf-8',
    			),
    			"key_id": "keyid",
    			"team_id": "teamid", //either ALL these 3
    			"notification_template": "notification handlebars template",
    			"bundle_id": "com.apple.your.app",
    			"development": true
    		},
    		"firebase_config": {
    			"server_key": "server key from fcm",
    			"notification_template": "notification handlebars template"
    			"data_template": "data handlebars template"
    		},
    		"webhook_url": "https://acme.com/my/awesome/webhook/"
    	}
    */
    function () {
      var _updateAppSettings = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee5(options) {
        var _options$apn_config;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee5$(_context5) {
          while (1) {
            switch (_context5.prev = _context5.next) {
              case 0:
                if ((_options$apn_config = options.apn_config) !== null && _options$apn_config !== void 0 && _options$apn_config.p12_cert) {
                  options.apn_config.p12_cert = Buffer.from(options.apn_config.p12_cert).toString('base64');
                }

                _context5.next = 3;
                return this.patch(this.baseURL + '/app', options);

              case 3:
                return _context5.abrupt("return", _context5.sent);

              case 4:
              case "end":
                return _context5.stop();
            }
          }
        }, _callee5, this);
      }));

      function updateAppSettings(_x5) {
        return _updateAppSettings.apply(this, arguments);
      }

      return updateAppSettings;
    }()
    /**
     * getAppSettings - retrieves application settings
     */

  }, {
    key: "getAppSettings",
    value: function () {
      var _getAppSettings = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee6() {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee6$(_context6) {
          while (1) {
            switch (_context6.prev = _context6.next) {
              case 0:
                _context6.next = 2;
                return this.get(this.baseURL + '/app');

              case 2:
                return _context6.abrupt("return", _context6.sent);

              case 3:
              case "end":
                return _context6.stop();
            }
          }
        }, _callee6, this);
      }));

      function getAppSettings() {
        return _getAppSettings.apply(this, arguments);
      }

      return getAppSettings;
    }()
    /**
    * testPushSettings - Tests the push settings for a user with a random chat message and the configured push templates
    *
    * @param {string} userID User ID. If user has no devices, it will error
    * @param {TestPushDataInput} [data] Overrides for push templates/message used
    * 		IE: {
    		  messageID: 'id-of-message',//will error if message does not exist
    		  apnTemplate: '{}', //if app doesn't have apn configured it will error
    		  firebaseTemplate: '{}', //if app doesn't have firebase configured it will error
    		  firebaseDataTemplate: '{}', //if app doesn't have firebase configured it will error
    		  skipDevices: true, // skip config/device checks and sending to real devices
    	}
    */

  }, {
    key: "testPushSettings",
    value: function () {
      var _testPushSettings = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee7(userID) {
        var data,
            _args7 = arguments;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee7$(_context7) {
          while (1) {
            switch (_context7.prev = _context7.next) {
              case 0:
                data = _args7.length > 1 && _args7[1] !== undefined ? _args7[1] : {};
                _context7.next = 3;
                return this.post(this.baseURL + '/check_push', _objectSpread(_objectSpread(_objectSpread(_objectSpread(_objectSpread({
                  user_id: userID
                }, data.messageID ? {
                  message_id: data.messageID
                } : {}), data.apnTemplate ? {
                  apn_template: data.apnTemplate
                } : {}), data.firebaseTemplate ? {
                  firebase_template: data.firebaseTemplate
                } : {}), data.firebaseDataTemplate ? {
                  firebase_data_template: data.firebaseDataTemplate
                } : {}), data.skipDevices ? {
                  skip_devices: true
                } : {}));

              case 3:
                return _context7.abrupt("return", _context7.sent);

              case 4:
              case "end":
                return _context7.stop();
            }
          }
        }, _callee7, this);
      }));

      function testPushSettings(_x6) {
        return _testPushSettings.apply(this, arguments);
      }

      return testPushSettings;
    }()
    /**
     * testSQSSettings - Tests that the given or configured SQS configuration is valid
     *
     * @param {string} userID User ID. If user has no devices, it will error
     * @param {TestPushDataInput} [data] Overrides for push templates/message used
     * 		IE: {
    		  messageID: 'id-of-message',//will error if message does not exist
    		  apnTemplate: '{}', //if app doesn't have apn configured it will error
    		  firebaseTemplate: '{}', //if app doesn't have firebase configured it will error
    		  firebaseDataTemplate: '{}', //if app doesn't have firebase configured it will error
    	}
     */

  }, {
    key: "testSQSSettings",
    value: function () {
      var _testSQSSettings = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee8() {
        var data,
            _args8 = arguments;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee8$(_context8) {
          while (1) {
            switch (_context8.prev = _context8.next) {
              case 0:
                data = _args8.length > 0 && _args8[0] !== undefined ? _args8[0] : {};
                _context8.next = 3;
                return this.post(this.baseURL + '/check_sqs', data);

              case 3:
                return _context8.abrupt("return", _context8.sent);

              case 4:
              case "end":
                return _context8.stop();
            }
          }
        }, _callee8, this);
      }));

      function testSQSSettings() {
        return _testSQSSettings.apply(this, arguments);
      }

      return testSQSSettings;
    }()
    /**
     * Disconnects the websocket and removes the user from client.
     *
     * @param timeout Max number of ms, to wait for close event of websocket, before forcefully assuming successful disconnection.
     *                https://developer.mozilla.org/en-US/docs/Web/API/CloseEvent
     */

  }, {
    key: "setGuestUser",
    value:
    /**
     * setGuestUser - Setup a temporary guest user
     *
     * @param {UserResponse<UserType>} user Data about this user. IE {name: "john"}
     *
     * @return {ConnectAPIResponse<ChannelType, CommandType, UserType>} Returns a promise that resolves when the connection is setup
     */
    function () {
      var _setGuestUser = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee9(user) {
        var response, _response$user, guestUser;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee9$(_context9) {
          while (1) {
            switch (_context9.prev = _context9.next) {
              case 0:
                this.anonymous = true;
                _context9.prev = 1;
                _context9.next = 4;
                return this.post(this.baseURL + '/guest', {
                  user: user
                });

              case 4:
                response = _context9.sent;
                _context9.next = 11;
                break;

              case 7:
                _context9.prev = 7;
                _context9.t0 = _context9["catch"](1);
                this.anonymous = false;
                throw _context9.t0;

              case 11:
                this.anonymous = false; // eslint-disable-next-line @typescript-eslint/no-unused-vars

                _response$user = response.user, _response$user.created_at, _response$user.updated_at, _response$user.last_active, _response$user.online, guestUser = (0,_babel_runtime_helpers_objectWithoutProperties__WEBPACK_IMPORTED_MODULE_3__.default)(_response$user, ["created_at", "updated_at", "last_active", "online"]);
                _context9.next = 15;
                return this.connectUser(guestUser, response.access_token);

              case 15:
                return _context9.abrupt("return", _context9.sent);

              case 16:
              case "end":
                return _context9.stop();
            }
          }
        }, _callee9, this, [[1, 7]]);
      }));

      function setGuestUser(_x7) {
        return _setGuestUser.apply(this, arguments);
      }

      return setGuestUser;
    }()
    /**
     * createToken - Creates a token to authenticate this user. This function is used server side.
     * The resulting token should be passed to the client side when the users registers or logs in
     *
     * @param {string} userID The User ID
     * @param {number} [exp] The expiration time for the token expressed in the number of seconds since the epoch
     *
     * @return {string} Returns a token
     */

  }, {
    key: "createToken",
    value: function createToken(userID, exp) {
      if (this.secret == null) {
        throw Error("tokens can only be created server-side using the API Secret");
      }

      var extra = {};

      if (exp) {
        extra.exp = exp;
      }

      return JWTUserToken(this.secret, userID, extra, {});
    }
    /**
     * on - Listen to events on all channels and users your watching
     *
     * client.on('message.new', event => {console.log("my new message", event, channel.state.messages)})
     * or
     * client.on(event => {console.log(event.type)})
     *
     * @param {EventHandler<AttachmentType, ChannelType, CommandType, EventType, MessageType, ReactionType, UserType> | string} callbackOrString  The event type to listen for (optional)
     * @param {EventHandler<AttachmentType, ChannelType, CommandType, EventType, MessageType, ReactionType, UserType>} [callbackOrNothing] The callback to call
     *
     * @return {{ unsubscribe: () => void }} Description
     */

  }, {
    key: "on",
    value: function on(callbackOrString, callbackOrNothing) {
      var _this2 = this;

      var key = callbackOrNothing ? callbackOrString : 'all';
      var valid = isValidEventType(key);

      if (!valid) {
        throw Error("Invalid event type ".concat(key));
      }

      var callback = callbackOrNothing ? callbackOrNothing : callbackOrString;

      if (!(key in this.listeners)) {
        this.listeners[key] = [];
      }

      this.logger('info', "Attaching listener for ".concat(key, " event"), {
        tags: ['event', 'client']
      });
      this.listeners[key].push(callback);
      return {
        unsubscribe: function unsubscribe() {
          _this2.logger('info', "Removing listener for ".concat(key, " event"), {
            tags: ['event', 'client']
          });

          _this2.listeners[key] = _this2.listeners[key].filter(function (el) {
            return el !== callback;
          });
        }
      };
    }
    /**
     * off - Remove the event handler
     *
     */

  }, {
    key: "off",
    value: function off(callbackOrString, callbackOrNothing) {
      var key = callbackOrNothing ? callbackOrString : 'all';
      var valid = isValidEventType(key);

      if (!valid) {
        throw Error("Invalid event type ".concat(key));
      }

      var callback = callbackOrNothing ? callbackOrNothing : callbackOrString;

      if (!(key in this.listeners)) {
        this.listeners[key] = [];
      }

      this.logger('info', "Removing listener for ".concat(key, " event"), {
        tags: ['event', 'client']
      });
      this.listeners[key] = this.listeners[key].filter(function (value) {
        return value !== callback;
      });
    }
  }, {
    key: "_logApiRequest",
    value: function _logApiRequest(type, url, data, config) {
      this.logger('info', "client: ".concat(type, " - Request - ").concat(url), {
        tags: ['api', 'api_request', 'client'],
        url: url,
        payload: data,
        config: config
      });
    }
  }, {
    key: "_logApiResponse",
    value: function _logApiResponse(type, url, response) {
      this.logger('info', "client:".concat(type, " - Response - url: ").concat(url, " > status ").concat(response.status), {
        tags: ['api', 'api_response', 'client'],
        url: url,
        response: response
      });
    }
  }, {
    key: "_logApiError",
    value: function _logApiError(type, url, error) {
      this.logger('error', "client:".concat(type, " - Error - url: ").concat(url), {
        tags: ['api', 'api_response', 'client'],
        url: url,
        error: error
      });
    }
  }, {
    key: "get",
    value: function get(url, params) {
      return this.doAxiosRequest('get', url, null, {
        params: params
      });
    }
  }, {
    key: "put",
    value: function put(url, data) {
      return this.doAxiosRequest('put', url, data);
    }
  }, {
    key: "post",
    value: function post(url, data) {
      return this.doAxiosRequest('post', url, data);
    }
  }, {
    key: "patch",
    value: function patch(url, data) {
      return this.doAxiosRequest('patch', url, data);
    }
  }, {
    key: "delete",
    value: function _delete(url, params) {
      return this.doAxiosRequest('delete', url, null, {
        params: params
      });
    }
  }, {
    key: "sendFile",
    value: function sendFile(url, uri, name, contentType, user) {
      var data = addFileToFormData(uri, name, contentType);
      if (user != null) data.append('user', JSON.stringify(user));
      return this.doAxiosRequest('post', url, data, {
        headers: data.getHeaders ? data.getHeaders() : {},
        // node vs browser
        config: {
          timeout: 0,
          maxContentLength: Infinity,
          maxBodyLength: Infinity
        }
      });
    }
  }, {
    key: "errorFromResponse",
    value: function errorFromResponse(response) {
      var err;
      err = new Error("StreamChat error HTTP code: ".concat(response.status));

      if (response.data && response.data.code) {
        err = new Error("StreamChat error code ".concat(response.data.code, ": ").concat(response.data.message));
        err.code = response.data.code;
      }

      err.response = response;
      err.status = response.status;
      return err;
    }
  }, {
    key: "handleResponse",
    value: function handleResponse(response) {
      var data = response.data;

      if ((response.status + '')[0] !== '2') {
        throw this.errorFromResponse(response);
      }

      return data;
    }
  }, {
    key: "_handleClientEvent",
    value: function _handleClientEvent(event) {
      var _event$me, _event$me2;

      var client = this;
      this.logger('info', "client:_handleClientEvent - Received event of type { ".concat(event.type, " }"), {
        tags: ['event', 'client'],
        event: event
      });

      if (event.type === 'user.presence.changed' || event.type === 'user.updated' || event.type === 'user.deleted') {
        this._handleUserEvent(event);
      }

      if (event.type === 'health.check' && event.me) {
        client.user = event.me;
        client.state.updateUser(event.me);
        client.mutedChannels = event.me.channel_mutes;
        client.mutedUsers = event.me.mutes;
      }

      if (event.channel && event.type === 'notification.message_new') {
        this.configs[event.channel.type] = event.channel.config;
      }

      if (event.type === 'notification.channel_mutes_updated' && (_event$me = event.me) !== null && _event$me !== void 0 && _event$me.channel_mutes) {
        this.mutedChannels = event.me.channel_mutes;
      }

      if (event.type === 'notification.mutes_updated' && (_event$me2 = event.me) !== null && _event$me2 !== void 0 && _event$me2.mutes) {
        this.mutedUsers = event.me.mutes;
      }
    }
  }, {
    key: "_muteStatus",
    value: function _muteStatus(cid) {
      var muteStatus;
      this.mutedChannels.forEach(function (mute) {
        var _mute$channel;

        if (((_mute$channel = mute.channel) === null || _mute$channel === void 0 ? void 0 : _mute$channel.cid) === cid) {
          var muted = true;

          if (mute.expires) {
            muted = new Date(mute.expires).getTime() > new Date().getTime();
          }

          muteStatus = {
            muted: muted,
            createdAt: mute.created_at ? new Date(mute.created_at) : new Date(),
            expiresAt: mute.expires ? new Date(mute.expires) : null
          };
        }
      });

      if (muteStatus) {
        return muteStatus;
      }

      return {
        muted: false,
        createdAt: null,
        expiresAt: null
      };
    }
  }, {
    key: "connect",
    value:
    /**
     * @private
     */
    function () {
      var _connect = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee10() {
        var client, warmUpPromise, handshake;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee10$(_context10) {
          while (1) {
            switch (_context10.prev = _context10.next) {
              case 0:
                this.connecting = true;
                client = this;
                this.failures = 0;

                if (!(client.userID == null || this._user == null)) {
                  _context10.next = 5;
                  break;
                }

                throw Error('Call connectUser or connectAnonymousUser before starting the connection');

              case 5:
                if (!(client.wsBaseURL == null)) {
                  _context10.next = 7;
                  break;
                }

                throw Error('Websocket base url not set');

              case 7:
                if (!(client.clientID == null)) {
                  _context10.next = 9;
                  break;
                }

                throw Error('clientID is not set');

              case 9:
                // The StableWSConnection handles all the reconnection logic.
                this.wsConnection = new StableWSConnection({
                  wsBaseURL: client.wsBaseURL,
                  clientID: client.clientID,
                  userID: client.userID,
                  tokenManager: client.tokenManager,
                  user: this._user,
                  authType: this.getAuthType(),
                  userAgent: this.getUserAgent(),
                  apiKey: this.key,
                  recoverCallback: this.recoverState,
                  messageCallback: this.handleEvent,
                  eventCallback: this.dispatchEvent,
                  logger: this.logger
                });

                if (this.options.warmUp) {
                  warmUpPromise = this.doAxiosRequest('options', this.baseURL + '/connect');
                }

                _context10.next = 13;
                return this.wsConnection.connect();

              case 13:
                handshake = _context10.sent;
                _context10.prev = 14;
                _context10.next = 17;
                return warmUpPromise;

              case 17:
                _context10.next = 22;
                break;

              case 19:
                _context10.prev = 19;
                _context10.t0 = _context10["catch"](14);
                this.logger('error', 'Warmup request failed', {
                  error: _context10.t0
                });

              case 22:
                return _context10.abrupt("return", handshake);

              case 23:
              case "end":
                return _context10.stop();
            }
          }
        }, _callee10, this, [[14, 19]]);
      }));

      function connect() {
        return _connect.apply(this, arguments);
      }

      return connect;
    }()
    /**
     * queryUsers - Query users and watch user presence
     *
     * @param {UserFilters<UserType>} filterConditions MongoDB style filter conditions
     * @param {UserSort<UserType>} sort Sort options, for instance [{last_active: -1}].
     * When using multiple fields, make sure you use array of objects to guarantee field order, for instance [{last_active: -1}, {created_at: 1}]
     * @param {UserOptions} options Option object, {presence: true}
     *
     * @return {Promise<APIResponse & { users: Array<UserResponse<UserType>> }>} User Query Response
     */

  }, {
    key: "queryUsers",
    value: function () {
      var _queryUsers = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee11(filterConditions) {
        var sort,
            options,
            defaultOptions,
            data,
            _args11 = arguments;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee11$(_context11) {
          while (1) {
            switch (_context11.prev = _context11.next) {
              case 0:
                sort = _args11.length > 1 && _args11[1] !== undefined ? _args11[1] : [];
                options = _args11.length > 2 && _args11[2] !== undefined ? _args11[2] : {};
                defaultOptions = {
                  presence: false
                }; // Make sure we wait for the connect promise if there is a pending one

                _context11.next = 5;
                return this.setUserPromise;

              case 5:
                if (!this._hasConnectionID()) {
                  defaultOptions.presence = false;
                } // Return a list of users


                _context11.next = 8;
                return this.get(this.baseURL + '/users', {
                  payload: _objectSpread(_objectSpread({
                    filter_conditions: filterConditions,
                    sort: normalizeQuerySort(sort)
                  }, defaultOptions), options)
                });

              case 8:
                data = _context11.sent;
                this.state.updateUsers(data.users);
                return _context11.abrupt("return", data);

              case 11:
              case "end":
                return _context11.stop();
            }
          }
        }, _callee11, this);
      }));

      function queryUsers(_x8) {
        return _queryUsers.apply(this, arguments);
      }

      return queryUsers;
    }()
    /**
     * queryBannedUsers - Query user bans
     *
     * @param {BannedUsersFilters} filterConditions MongoDB style filter conditions
     * @param {BannedUsersSort} sort Sort options [{created_at: 1}].
     * @param {BannedUsersPaginationOptions} options Option object, {limit: 10, offset:0}
     *
     * @return {Promise<BannedUsersResponse<ChannelType, CommandType, UserType>>} Ban Query Response
     */

  }, {
    key: "queryBannedUsers",
    value: function () {
      var _queryBannedUsers = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee12() {
        var filterConditions,
            sort,
            options,
            _args12 = arguments;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee12$(_context12) {
          while (1) {
            switch (_context12.prev = _context12.next) {
              case 0:
                filterConditions = _args12.length > 0 && _args12[0] !== undefined ? _args12[0] : {};
                sort = _args12.length > 1 && _args12[1] !== undefined ? _args12[1] : [];
                options = _args12.length > 2 && _args12[2] !== undefined ? _args12[2] : {};
                _context12.next = 5;
                return this.get(this.baseURL + '/query_banned_users', {
                  payload: _objectSpread({
                    filter_conditions: filterConditions,
                    sort: normalizeQuerySort(sort)
                  }, options)
                });

              case 5:
                return _context12.abrupt("return", _context12.sent);

              case 6:
              case "end":
                return _context12.stop();
            }
          }
        }, _callee12, this);
      }));

      function queryBannedUsers() {
        return _queryBannedUsers.apply(this, arguments);
      }

      return queryBannedUsers;
    }()
    /**
     * queryChannels - Query channels
     *
     * @param {ChannelFilters<ChannelType, CommandType, UserType>} filterConditions object MongoDB style filters
     * @param {ChannelSort<ChannelType>} [sort] Sort options, for instance {created_at: -1}.
     * When using multiple fields, make sure you use array of objects to guarantee field order, for instance [{last_updated: -1}, {created_at: 1}]
     * @param {ChannelOptions} [options] Options object
     *
     * @return {Promise<APIResponse & { channels: Array<ChannelAPIResponse<AttachmentType,ChannelType,CommandType,MessageType,ReactionType,UserType>>}> } search channels response
     */

  }, {
    key: "queryChannels",
    value: function () {
      var _queryChannels = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee13(filterConditions) {
        var sort,
            options,
            defaultOptions,
            payload,
            data,
            channels,
            _iterator,
            _step,
            channelState,
            _iterator2,
            _step2,
            _channelState,
            c,
            _args13 = arguments;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee13$(_context13) {
          while (1) {
            switch (_context13.prev = _context13.next) {
              case 0:
                sort = _args13.length > 1 && _args13[1] !== undefined ? _args13[1] : [];
                options = _args13.length > 2 && _args13[2] !== undefined ? _args13[2] : {};
                defaultOptions = {
                  state: true,
                  watch: true,
                  presence: false
                }; // Make sure we wait for the connect promise if there is a pending one

                _context13.next = 5;
                return this.setUserPromise;

              case 5:
                if (!this._hasConnectionID()) {
                  defaultOptions.watch = false;
                } // Return a list of channels


                payload = _objectSpread(_objectSpread({
                  filter_conditions: filterConditions,
                  sort: normalizeQuerySort(sort)
                }, defaultOptions), options);
                _context13.next = 9;
                return this.post(this.baseURL + '/channels', payload);

              case 9:
                data = _context13.sent;
                channels = []; // update our cache of the configs

                _iterator = _createForOfIteratorHelper(data.channels);

                try {
                  for (_iterator.s(); !(_step = _iterator.n()).done;) {
                    channelState = _step.value;

                    this._addChannelConfig(channelState);
                  }
                } catch (err) {
                  _iterator.e(err);
                } finally {
                  _iterator.f();
                }

                _iterator2 = _createForOfIteratorHelper(data.channels);

                try {
                  for (_iterator2.s(); !(_step2 = _iterator2.n()).done;) {
                    _channelState = _step2.value;
                    c = this.channel(_channelState.channel.type, _channelState.channel.id);
                    c.data = _channelState.channel;
                    c.initialized = true;

                    c._initializeState(_channelState);

                    channels.push(c);
                  }
                } catch (err) {
                  _iterator2.e(err);
                } finally {
                  _iterator2.f();
                }

                return _context13.abrupt("return", channels);

              case 16:
              case "end":
                return _context13.stop();
            }
          }
        }, _callee13, this);
      }));

      function queryChannels(_x9) {
        return _queryChannels.apply(this, arguments);
      }

      return queryChannels;
    }()
    /**
     * search - Query messages
     *
     * @param {ChannelFilters<ChannelType, CommandType, UserType>} filterConditions MongoDB style filter conditions
     * @param {MessageFilters<AttachmentType, ChannelType, CommandType, MessageType, ReactionType, UserType> | string} query search query or object MongoDB style filters
     * @param {SearchOptions} [options] Option object, {user_id: 'tommaso'}
     *
     * @return {Promise<SearchAPIResponse<AttachmentType, ChannelType, CommandType, MessageType, ReactionType, UserType>>} search messages response
     */

  }, {
    key: "search",
    value: function () {
      var _search = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee14(filterConditions, query) {
        var options,
            payload,
            _args14 = arguments;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee14$(_context14) {
          while (1) {
            switch (_context14.prev = _context14.next) {
              case 0:
                options = _args14.length > 2 && _args14[2] !== undefined ? _args14[2] : {};
                // Return a list of channels
                payload = _objectSpread({
                  filter_conditions: filterConditions
                }, options);

                if (!(typeof query === 'string')) {
                  _context14.next = 6;
                  break;
                }

                payload.query = query;
                _context14.next = 11;
                break;

              case 6:
                if (!((0,_babel_runtime_helpers_typeof__WEBPACK_IMPORTED_MODULE_2__.default)(query) === 'object')) {
                  _context14.next = 10;
                  break;
                }

                payload.message_filter_conditions = query;
                _context14.next = 11;
                break;

              case 10:
                throw Error("Invalid type ".concat((0,_babel_runtime_helpers_typeof__WEBPACK_IMPORTED_MODULE_2__.default)(query), " for query parameter"));

              case 11:
                _context14.next = 13;
                return this.setUserPromise;

              case 13:
                _context14.next = 15;
                return this.get(this.baseURL + '/search', {
                  payload: payload
                });

              case 15:
                return _context14.abrupt("return", _context14.sent);

              case 16:
              case "end":
                return _context14.stop();
            }
          }
        }, _callee14, this);
      }));

      function search(_x10, _x11) {
        return _search.apply(this, arguments);
      }

      return search;
    }()
    /**
     * addDevice - Adds a push device for a user.
     *
     * @param {string} id the device id
     * @param {'apn' | 'firebase'} push_provider the push provider (apn or firebase)
     * @param {string} [userID] the user id (defaults to current user)
     *
     */

  }, {
    key: "addDevice",
    value: function () {
      var _addDevice = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee15(id, push_provider, userID) {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee15$(_context15) {
          while (1) {
            switch (_context15.prev = _context15.next) {
              case 0:
                _context15.next = 2;
                return this.post(this.baseURL + '/devices', _objectSpread({
                  id: id,
                  push_provider: push_provider
                }, userID != null ? {
                  user_id: userID
                } : {}));

              case 2:
                return _context15.abrupt("return", _context15.sent);

              case 3:
              case "end":
                return _context15.stop();
            }
          }
        }, _callee15, this);
      }));

      function addDevice(_x12, _x13, _x14) {
        return _addDevice.apply(this, arguments);
      }

      return addDevice;
    }()
    /**
     * getDevices - Returns the devices associated with a current user
     *
     * @param {string} [userID] User ID. Only works on serverside
     *
     * @return {APIResponse & Device<UserType>[]} Array of devices
     */

  }, {
    key: "getDevices",
    value: function () {
      var _getDevices = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee16(userID) {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee16$(_context16) {
          while (1) {
            switch (_context16.prev = _context16.next) {
              case 0:
                _context16.next = 2;
                return this.get(this.baseURL + '/devices', userID ? {
                  user_id: userID
                } : {});

              case 2:
                return _context16.abrupt("return", _context16.sent);

              case 3:
              case "end":
                return _context16.stop();
            }
          }
        }, _callee16, this);
      }));

      function getDevices(_x15) {
        return _getDevices.apply(this, arguments);
      }

      return getDevices;
    }()
    /**
     * removeDevice - Removes the device with the given id. Clientside users can only delete their own devices
     *
     * @param {string} id The device id
     * @param {string} [userID] The user id. Only specify this for serverside requests
     *
     */

  }, {
    key: "removeDevice",
    value: function () {
      var _removeDevice = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee17(id, userID) {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee17$(_context17) {
          while (1) {
            switch (_context17.prev = _context17.next) {
              case 0:
                _context17.next = 2;
                return this.delete(this.baseURL + '/devices', _objectSpread({
                  id: id
                }, userID ? {
                  user_id: userID
                } : {}));

              case 2:
                return _context17.abrupt("return", _context17.sent);

              case 3:
              case "end":
                return _context17.stop();
            }
          }
        }, _callee17, this);
      }));

      function removeDevice(_x16, _x17) {
        return _removeDevice.apply(this, arguments);
      }

      return removeDevice;
    }()
    /**
     * getRateLimits - Returns the rate limits quota and usage for the current app, possibly filter for a specific platform and/or endpoints.
     * Only available server-side.
     *
     * @param {object} [params] The params for the call. If none of the params are set, all limits for all platforms are returned.
     * @returns {Promise<GetRateLimitsResponse>}
     */

  }, {
    key: "getRateLimits",
    value: function () {
      var _getRateLimits = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee18(params) {
        var _ref5, serverSide, web, android, ios, endpoints;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee18$(_context18) {
          while (1) {
            switch (_context18.prev = _context18.next) {
              case 0:
                _ref5 = params || {}, serverSide = _ref5.serverSide, web = _ref5.web, android = _ref5.android, ios = _ref5.ios, endpoints = _ref5.endpoints;
                return _context18.abrupt("return", this.get(this.baseURL + '/rate_limits', {
                  server_side: serverSide,
                  web: web,
                  android: android,
                  ios: ios,
                  endpoints: endpoints ? endpoints.join(',') : undefined
                }));

              case 2:
              case "end":
                return _context18.stop();
            }
          }
        }, _callee18, this);
      }));

      function getRateLimits(_x18) {
        return _getRateLimits.apply(this, arguments);
      }

      return getRateLimits;
    }()
  }, {
    key: "_addChannelConfig",
    value: function _addChannelConfig(channelState) {
      this.configs[channelState.channel.type] = channelState.channel.config;
    }
    /**
     * channel - Returns a new channel with the given type, id and custom data
     *
     * If you want to create a unique conversation between 2 or more users; you can leave out the ID parameter and provide the list of members.
     * Make sure to await channel.create() or channel.watch() before accessing channel functions:
     * ie. channel = client.channel("messaging", {members: ["tommaso", "thierry"]})
     * await channel.create() to assign an ID to channel
     *
     * @param {string} channelType The channel type
     * @param {string | ChannelData<ChannelType> | null} [channelIDOrCustom]   The channel ID, you can leave this out if you want to create a conversation channel
     * @param {object} [custom]    Custom data to attach to the channel
     *
     * @return {channel} The channel object, initialize it using channel.watch()
     */

  }, {
    key: "channel",
    value: function channel(channelType, channelIDOrCustom) {
      var custom = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};

      if (!this.userID && !this._isUsingServerAuth()) {
        throw Error('Call connectUser or connectAnonymousUser before creating a channel');
      }

      if (~channelType.indexOf(':')) {
        throw Error("Invalid channel group ".concat(channelType, ", can't contain the : character"));
      } // support channel("messaging", null, {options})
      // support channel("messaging", undefined, {options})
      // support channel("messaging", "", {options})


      if (channelIDOrCustom == null || channelIDOrCustom === '') {
        return new Channel(this, channelType, undefined, custom);
      } // support channel("messaging", {options})


      if ((0,_babel_runtime_helpers_typeof__WEBPACK_IMPORTED_MODULE_2__.default)(channelIDOrCustom) === 'object') {
        return this.getChannelByMembers(channelType, channelIDOrCustom);
      }

      return this.getChannelById(channelType, channelIDOrCustom, custom);
    }
    /**
     * It's a helper method for `client.channel()` method, used to create unique conversation or
     * channel based on member list instead of id.
     *
     * If the channel already exists in `activeChannels` list, then we simply return it, since that
     * means the same channel was already requested or created.
     *
     * Otherwise we create a new instance of Channel class and return it.
     *
     * @private
     *
     * @param {string} channelType The channel type
     * @param {object} [custom]    Custom data to attach to the channel
     *
     * @return {channel} The channel object, initialize it using channel.watch()
     */

  }, {
    key: "partialUpdateUser",
    value:
    /**
     * partialUpdateUser - Update the given user object
     *
     * @param {PartialUserUpdate<UserType>} partialUserObject which should contain id and any of "set" or "unset" params;
     * example: {id: "user1", set:{field: value}, unset:["field2"]}
     *
     * @return {Promise<APIResponse & { users: { [key: string]: UserResponse<UserType> } }>} list of updated users
     */
    function () {
      var _partialUpdateUser = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee19(partialUserObject) {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee19$(_context19) {
          while (1) {
            switch (_context19.prev = _context19.next) {
              case 0:
                _context19.next = 2;
                return this.partialUpdateUsers([partialUserObject]);

              case 2:
                return _context19.abrupt("return", _context19.sent);

              case 3:
              case "end":
                return _context19.stop();
            }
          }
        }, _callee19, this);
      }));

      function partialUpdateUser(_x19) {
        return _partialUpdateUser.apply(this, arguments);
      }

      return partialUpdateUser;
    }()
    /**
     * upsertUsers - Batch upsert the list of users
     *
     * @param {UserResponse<UserType>[]} users list of users
     *
     * @return {Promise<APIResponse & { users: { [key: string]: UserResponse<UserType> } }>}
     */

  }, {
    key: "upsertUsers",
    value: function () {
      var _upsertUsers = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee20(users) {
        var userMap, _iterator3, _step3, userObject;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee20$(_context20) {
          while (1) {
            switch (_context20.prev = _context20.next) {
              case 0:
                userMap = {};
                _iterator3 = _createForOfIteratorHelper(users);
                _context20.prev = 2;

                _iterator3.s();

              case 4:
                if ((_step3 = _iterator3.n()).done) {
                  _context20.next = 11;
                  break;
                }

                userObject = _step3.value;

                if (userObject.id) {
                  _context20.next = 8;
                  break;
                }

                throw Error('User ID is required when updating a user');

              case 8:
                userMap[userObject.id] = userObject;

              case 9:
                _context20.next = 4;
                break;

              case 11:
                _context20.next = 16;
                break;

              case 13:
                _context20.prev = 13;
                _context20.t0 = _context20["catch"](2);

                _iterator3.e(_context20.t0);

              case 16:
                _context20.prev = 16;

                _iterator3.f();

                return _context20.finish(16);

              case 19:
                _context20.next = 21;
                return this.post(this.baseURL + '/users', {
                  users: userMap
                });

              case 21:
                return _context20.abrupt("return", _context20.sent);

              case 22:
              case "end":
                return _context20.stop();
            }
          }
        }, _callee20, this, [[2, 13, 16, 19]]);
      }));

      function upsertUsers(_x20) {
        return _upsertUsers.apply(this, arguments);
      }

      return upsertUsers;
    }()
    /**
     * @deprecated Please use upsertUsers() function instead.
     *
     * updateUsers - Batch update the list of users
     *
     * @param {UserResponse<UserType>[]} users list of users
     * @return {Promise<APIResponse & { users: { [key: string]: UserResponse<UserType> } }>}
     */

  }, {
    key: "upsertUser",
    value:
    /**
     * upsertUser - Update or Create the given user object
     *
     * @param {UserResponse<UserType>} userObject user object, the only required field is the user id. IE {id: "myuser"} is valid
     *
     * @return {Promise<APIResponse & { users: { [key: string]: UserResponse<UserType> } }>}
     */
    function upsertUser(userObject) {
      return this.upsertUsers([userObject]);
    }
    /**
     * @deprecated Please use upsertUser() function instead.
     *
     * updateUser - Update or Create the given user object
     *
     * @param {UserResponse<UserType>} userObject user object, the only required field is the user id. IE {id: "myuser"} is valid
     * @return {Promise<APIResponse & { users: { [key: string]: UserResponse<UserType> } }>}
     */

  }, {
    key: "partialUpdateUsers",
    value:
    /**
     * partialUpdateUsers - Batch partial update of users
     *
     * @param {PartialUserUpdate<UserType>[]} users list of partial update requests
     *
     * @return {Promise<APIResponse & { users: { [key: string]: UserResponse<UserType> } }>}
     */
    function () {
      var _partialUpdateUsers = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee21(users) {
        var _iterator4, _step4, userObject;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee21$(_context21) {
          while (1) {
            switch (_context21.prev = _context21.next) {
              case 0:
                _iterator4 = _createForOfIteratorHelper(users);
                _context21.prev = 1;

                _iterator4.s();

              case 3:
                if ((_step4 = _iterator4.n()).done) {
                  _context21.next = 9;
                  break;
                }

                userObject = _step4.value;

                if (userObject.id) {
                  _context21.next = 7;
                  break;
                }

                throw Error('User ID is required when updating a user');

              case 7:
                _context21.next = 3;
                break;

              case 9:
                _context21.next = 14;
                break;

              case 11:
                _context21.prev = 11;
                _context21.t0 = _context21["catch"](1);

                _iterator4.e(_context21.t0);

              case 14:
                _context21.prev = 14;

                _iterator4.f();

                return _context21.finish(14);

              case 17:
                _context21.next = 19;
                return this.patch(this.baseURL + '/users', {
                  users: users
                });

              case 19:
                return _context21.abrupt("return", _context21.sent);

              case 20:
              case "end":
                return _context21.stop();
            }
          }
        }, _callee21, this, [[1, 11, 14, 17]]);
      }));

      function partialUpdateUsers(_x21) {
        return _partialUpdateUsers.apply(this, arguments);
      }

      return partialUpdateUsers;
    }()
  }, {
    key: "deleteUser",
    value: function () {
      var _deleteUser = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee22(userID, params) {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee22$(_context22) {
          while (1) {
            switch (_context22.prev = _context22.next) {
              case 0:
                _context22.next = 2;
                return this.delete(this.baseURL + "/users/".concat(userID), params);

              case 2:
                return _context22.abrupt("return", _context22.sent);

              case 3:
              case "end":
                return _context22.stop();
            }
          }
        }, _callee22, this);
      }));

      function deleteUser(_x22, _x23) {
        return _deleteUser.apply(this, arguments);
      }

      return deleteUser;
    }()
  }, {
    key: "reactivateUser",
    value: function () {
      var _reactivateUser = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee23(userID, options) {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee23$(_context23) {
          while (1) {
            switch (_context23.prev = _context23.next) {
              case 0:
                _context23.next = 2;
                return this.post(this.baseURL + "/users/".concat(userID, "/reactivate"), _objectSpread({}, options));

              case 2:
                return _context23.abrupt("return", _context23.sent);

              case 3:
              case "end":
                return _context23.stop();
            }
          }
        }, _callee23, this);
      }));

      function reactivateUser(_x24, _x25) {
        return _reactivateUser.apply(this, arguments);
      }

      return reactivateUser;
    }()
  }, {
    key: "deactivateUser",
    value: function () {
      var _deactivateUser = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee24(userID, options) {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee24$(_context24) {
          while (1) {
            switch (_context24.prev = _context24.next) {
              case 0:
                _context24.next = 2;
                return this.post(this.baseURL + "/users/".concat(userID, "/deactivate"), _objectSpread({}, options));

              case 2:
                return _context24.abrupt("return", _context24.sent);

              case 3:
              case "end":
                return _context24.stop();
            }
          }
        }, _callee24, this);
      }));

      function deactivateUser(_x26, _x27) {
        return _deactivateUser.apply(this, arguments);
      }

      return deactivateUser;
    }()
  }, {
    key: "exportUser",
    value: function () {
      var _exportUser = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee25(userID, options) {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee25$(_context25) {
          while (1) {
            switch (_context25.prev = _context25.next) {
              case 0:
                _context25.next = 2;
                return this.get(this.baseURL + "/users/".concat(userID, "/export"), _objectSpread({}, options));

              case 2:
                return _context25.abrupt("return", _context25.sent);

              case 3:
              case "end":
                return _context25.stop();
            }
          }
        }, _callee25, this);
      }));

      function exportUser(_x28, _x29) {
        return _exportUser.apply(this, arguments);
      }

      return exportUser;
    }()
    /** banUser - bans a user from all channels
     *
     * @param {string} targetUserID
     * @param {BanUserOptions<UserType>} [options]
     * @returns {Promise<APIResponse>}
     */

  }, {
    key: "banUser",
    value: function () {
      var _banUser = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee26(targetUserID, options) {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee26$(_context26) {
          while (1) {
            switch (_context26.prev = _context26.next) {
              case 0:
                if ((options === null || options === void 0 ? void 0 : options.user_id) !== undefined) {
                  options.banned_by_id = options.user_id;
                  delete options.user_id;
                  console.warn("banUser: 'user_id' is deprecated, please consider switching to 'banned_by_id'");
                }

                if ((options === null || options === void 0 ? void 0 : options.user) !== undefined) {
                  options.banned_by = options.user;
                  delete options.user;
                  console.warn("banUser: 'user' is deprecated, please consider switching to 'banned_by'");
                }

                _context26.next = 4;
                return this.post(this.baseURL + '/moderation/ban', _objectSpread({
                  target_user_id: targetUserID
                }, options));

              case 4:
                return _context26.abrupt("return", _context26.sent);

              case 5:
              case "end":
                return _context26.stop();
            }
          }
        }, _callee26, this);
      }));

      function banUser(_x30, _x31) {
        return _banUser.apply(this, arguments);
      }

      return banUser;
    }()
    /** unbanUser - revoke global ban for a user
     *
     * @param {string} targetUserID
     * @param {UnBanUserOptions} [options]
     * @returns {Promise<APIResponse>}
     */

  }, {
    key: "unbanUser",
    value: function () {
      var _unbanUser = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee27(targetUserID, options) {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee27$(_context27) {
          while (1) {
            switch (_context27.prev = _context27.next) {
              case 0:
                _context27.next = 2;
                return this.delete(this.baseURL + '/moderation/ban', _objectSpread({
                  target_user_id: targetUserID
                }, options));

              case 2:
                return _context27.abrupt("return", _context27.sent);

              case 3:
              case "end":
                return _context27.stop();
            }
          }
        }, _callee27, this);
      }));

      function unbanUser(_x32, _x33) {
        return _unbanUser.apply(this, arguments);
      }

      return unbanUser;
    }()
    /** shadowBan - shadow bans a user from all channels
     *
     * @param {string} targetUserID
     * @param {BanUserOptions<UserType>} [options]
     * @returns {Promise<APIResponse>}
     */

  }, {
    key: "shadowBan",
    value: function () {
      var _shadowBan = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee28(targetUserID, options) {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee28$(_context28) {
          while (1) {
            switch (_context28.prev = _context28.next) {
              case 0:
                _context28.next = 2;
                return this.banUser(targetUserID, _objectSpread({
                  shadow: true
                }, options));

              case 2:
                return _context28.abrupt("return", _context28.sent);

              case 3:
              case "end":
                return _context28.stop();
            }
          }
        }, _callee28, this);
      }));

      function shadowBan(_x34, _x35) {
        return _shadowBan.apply(this, arguments);
      }

      return shadowBan;
    }()
    /** removeShadowBan - revoke global shadow ban for a user
     *
     * @param {string} targetUserID
     * @param {UnBanUserOptions} [options]
     * @returns {Promise<APIResponse>}
     */

  }, {
    key: "removeShadowBan",
    value: function () {
      var _removeShadowBan = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee29(targetUserID, options) {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee29$(_context29) {
          while (1) {
            switch (_context29.prev = _context29.next) {
              case 0:
                _context29.next = 2;
                return this.unbanUser(targetUserID, _objectSpread({
                  shadow: true
                }, options));

              case 2:
                return _context29.abrupt("return", _context29.sent);

              case 3:
              case "end":
                return _context29.stop();
            }
          }
        }, _callee29, this);
      }));

      function removeShadowBan(_x36, _x37) {
        return _removeShadowBan.apply(this, arguments);
      }

      return removeShadowBan;
    }()
    /** muteUser - mutes a user
     *
     * @param {string} targetID
     * @param {string} [userID] Only used with serverside auth
     * @param {MuteUserOptions<UserType>} [options]
     * @returns {Promise<MuteUserResponse<ChannelType, CommandType, UserType>>}
     */

  }, {
    key: "muteUser",
    value: function () {
      var _muteUser = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee30(targetID, userID) {
        var options,
            _args30 = arguments;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee30$(_context30) {
          while (1) {
            switch (_context30.prev = _context30.next) {
              case 0:
                options = _args30.length > 2 && _args30[2] !== undefined ? _args30[2] : {};
                _context30.next = 3;
                return this.post(this.baseURL + '/moderation/mute', _objectSpread(_objectSpread({
                  target_id: targetID
                }, userID ? {
                  user_id: userID
                } : {}), options));

              case 3:
                return _context30.abrupt("return", _context30.sent);

              case 4:
              case "end":
                return _context30.stop();
            }
          }
        }, _callee30, this);
      }));

      function muteUser(_x38, _x39) {
        return _muteUser.apply(this, arguments);
      }

      return muteUser;
    }()
    /** unmuteUser - unmutes a user
     *
     * @param {string} targetID
     * @param {string} [currentUserID] Only used with serverside auth
     * @returns {Promise<APIResponse>}
     */

  }, {
    key: "unmuteUser",
    value: function () {
      var _unmuteUser = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee31(targetID, currentUserID) {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee31$(_context31) {
          while (1) {
            switch (_context31.prev = _context31.next) {
              case 0:
                _context31.next = 2;
                return this.post(this.baseURL + '/moderation/unmute', _objectSpread({
                  target_id: targetID
                }, currentUserID ? {
                  user_id: currentUserID
                } : {}));

              case 2:
                return _context31.abrupt("return", _context31.sent);

              case 3:
              case "end":
                return _context31.stop();
            }
          }
        }, _callee31, this);
      }));

      function unmuteUser(_x40, _x41) {
        return _unmuteUser.apply(this, arguments);
      }

      return unmuteUser;
    }()
    /** userMuteStatus - check if a user is muted or not, can be used after connectUser() is called
     *
     * @param {string} targetID
     * @returns {boolean}
     */

  }, {
    key: "userMuteStatus",
    value: function userMuteStatus(targetID) {
      if (!this.user || !this.wsPromise) {
        throw new Error('Make sure to await connectUser() first.');
      }

      for (var i = 0; i < this.mutedUsers.length; i += 1) {
        if (this.mutedUsers[i].target.id === targetID) return true;
      }

      return false;
    }
    /**
     * flagMessage - flag a message
     * @param {string} targetMessageID
     * @param {string} [options.user_id] currentUserID, only used with serverside auth
     * @returns {Promise<APIResponse>}
     */

  }, {
    key: "flagMessage",
    value: function () {
      var _flagMessage = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee32(targetMessageID) {
        var options,
            _args32 = arguments;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee32$(_context32) {
          while (1) {
            switch (_context32.prev = _context32.next) {
              case 0:
                options = _args32.length > 1 && _args32[1] !== undefined ? _args32[1] : {};
                _context32.next = 3;
                return this.post(this.baseURL + '/moderation/flag', _objectSpread({
                  target_message_id: targetMessageID
                }, options));

              case 3:
                return _context32.abrupt("return", _context32.sent);

              case 4:
              case "end":
                return _context32.stop();
            }
          }
        }, _callee32, this);
      }));

      function flagMessage(_x42) {
        return _flagMessage.apply(this, arguments);
      }

      return flagMessage;
    }()
    /**
     * flagUser - flag a user
     * @param {string} targetID
     * @param {string} [options.user_id] currentUserID, only used with serverside auth
     * @returns {Promise<APIResponse>}
     */

  }, {
    key: "flagUser",
    value: function () {
      var _flagUser = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee33(targetID) {
        var options,
            _args33 = arguments;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee33$(_context33) {
          while (1) {
            switch (_context33.prev = _context33.next) {
              case 0:
                options = _args33.length > 1 && _args33[1] !== undefined ? _args33[1] : {};
                _context33.next = 3;
                return this.post(this.baseURL + '/moderation/flag', _objectSpread({
                  target_user_id: targetID
                }, options));

              case 3:
                return _context33.abrupt("return", _context33.sent);

              case 4:
              case "end":
                return _context33.stop();
            }
          }
        }, _callee33, this);
      }));

      function flagUser(_x43) {
        return _flagUser.apply(this, arguments);
      }

      return flagUser;
    }()
    /**
     * unflagMessage - unflag a message
     * @param {string} targetMessageID
     * @param {string} [options.user_id] currentUserID, only used with serverside auth
     * @returns {Promise<APIResponse>}
     */

  }, {
    key: "unflagMessage",
    value: function () {
      var _unflagMessage = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee34(targetMessageID) {
        var options,
            _args34 = arguments;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee34$(_context34) {
          while (1) {
            switch (_context34.prev = _context34.next) {
              case 0:
                options = _args34.length > 1 && _args34[1] !== undefined ? _args34[1] : {};
                _context34.next = 3;
                return this.post(this.baseURL + '/moderation/unflag', _objectSpread({
                  target_message_id: targetMessageID
                }, options));

              case 3:
                return _context34.abrupt("return", _context34.sent);

              case 4:
              case "end":
                return _context34.stop();
            }
          }
        }, _callee34, this);
      }));

      function unflagMessage(_x44) {
        return _unflagMessage.apply(this, arguments);
      }

      return unflagMessage;
    }()
    /**
     * unflagUser - unflag a user
     * @param {string} targetID
     * @param {string} [options.user_id] currentUserID, only used with serverside auth
     * @returns {Promise<APIResponse>}
     */

  }, {
    key: "unflagUser",
    value: function () {
      var _unflagUser = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee35(targetID) {
        var options,
            _args35 = arguments;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee35$(_context35) {
          while (1) {
            switch (_context35.prev = _context35.next) {
              case 0:
                options = _args35.length > 1 && _args35[1] !== undefined ? _args35[1] : {};
                _context35.next = 3;
                return this.post(this.baseURL + '/moderation/unflag', _objectSpread({
                  target_user_id: targetID
                }, options));

              case 3:
                return _context35.abrupt("return", _context35.sent);

              case 4:
              case "end":
                return _context35.stop();
            }
          }
        }, _callee35, this);
      }));

      function unflagUser(_x45) {
        return _unflagUser.apply(this, arguments);
      }

      return unflagUser;
    }()
    /**
     * markAllRead - marks all channels for this user as read
     * @param {MarkAllReadOptions<UserType>} [data]
     *
     * @return {Promise<APIResponse>}
     */

  }, {
    key: "markAllRead",
    value: function () {
      var _markAllRead = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee36() {
        var data,
            _args36 = arguments;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee36$(_context36) {
          while (1) {
            switch (_context36.prev = _context36.next) {
              case 0:
                data = _args36.length > 0 && _args36[0] !== undefined ? _args36[0] : {};
                _context36.next = 3;
                return this.post(this.baseURL + '/channels/read', _objectSpread({}, data));

              case 3:
              case "end":
                return _context36.stop();
            }
          }
        }, _callee36, this);
      }));

      function markAllRead() {
        return _markAllRead.apply(this, arguments);
      }

      return markAllRead;
    }()
  }, {
    key: "createCommand",
    value: function createCommand(data) {
      return this.post(this.baseURL + '/commands', data);
    }
  }, {
    key: "getCommand",
    value: function getCommand(name) {
      return this.get(this.baseURL + "/commands/".concat(name));
    }
  }, {
    key: "updateCommand",
    value: function updateCommand(name, data) {
      return this.put(this.baseURL + "/commands/".concat(name), data);
    }
  }, {
    key: "deleteCommand",
    value: function deleteCommand(name) {
      return this.delete(this.baseURL + "/commands/".concat(name));
    }
  }, {
    key: "listCommands",
    value: function listCommands() {
      return this.get(this.baseURL + "/commands");
    }
  }, {
    key: "createChannelType",
    value: function createChannelType(data) {
      var channelData = (0,_babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_1__.default)({}, {
        commands: ['all']
      }, data);

      return this.post(this.baseURL + '/channeltypes', channelData);
    }
  }, {
    key: "getChannelType",
    value: function getChannelType(channelType) {
      return this.get(this.baseURL + "/channeltypes/".concat(channelType));
    }
  }, {
    key: "updateChannelType",
    value: function updateChannelType(channelType, data) {
      return this.put(this.baseURL + "/channeltypes/".concat(channelType), data);
    }
  }, {
    key: "deleteChannelType",
    value: function deleteChannelType(channelType) {
      return this.delete(this.baseURL + "/channeltypes/".concat(channelType));
    }
  }, {
    key: "listChannelTypes",
    value: function listChannelTypes() {
      return this.get(this.baseURL + "/channeltypes");
    }
    /**
     * translateMessage - adds the translation to the message
     *
     * @param {string} messageId
     * @param {string} language
     *
     * @return {APIResponse & MessageResponse<AttachmentType, ChannelType, CommandType, MessageType, ReactionType, UserType>} Response that includes the message
     */

  }, {
    key: "translateMessage",
    value: function () {
      var _translateMessage = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee37(messageId, language) {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee37$(_context37) {
          while (1) {
            switch (_context37.prev = _context37.next) {
              case 0:
                _context37.next = 2;
                return this.post(this.baseURL + "/messages/".concat(messageId, "/translate"), {
                  language: language
                });

              case 2:
                return _context37.abrupt("return", _context37.sent);

              case 3:
              case "end":
                return _context37.stop();
            }
          }
        }, _callee37, this);
      }));

      function translateMessage(_x46, _x47) {
        return _translateMessage.apply(this, arguments);
      }

      return translateMessage;
    }()
    /**
     * pinMessage - pins provided message
     * @param {UpdatedMessage<AttachmentType,ChannelType,CommandType,MessageType,ReactionType,UserType>} message object
     * @param {undefined|number|string|Date} timeoutOrExpirationDate expiration date or timeout. Use number type to set timeout in seconds, string or Date to set exact expiration date
     */

  }, {
    key: "pinMessage",
    value: function pinMessage(message, timeoutOrExpirationDate) {
      var pinExpires;

      if (typeof timeoutOrExpirationDate === 'number') {
        var now = new Date();
        now.setSeconds(now.getSeconds() + timeoutOrExpirationDate);
        pinExpires = now.toISOString();
      } else if (isString(timeoutOrExpirationDate)) {
        pinExpires = timeoutOrExpirationDate;
      } else if (timeoutOrExpirationDate instanceof Date) {
        pinExpires = timeoutOrExpirationDate.toISOString();
      }

      return this.updateMessage(_objectSpread(_objectSpread({}, message), {}, {
        pinned: true,
        pin_expires: pinExpires
      }));
    }
    /**
     * unpinMessage - unpins provided message
     * @param {UpdatedMessage<AttachmentType,ChannelType,CommandType,MessageType,ReactionType,UserType>} message object
     */

  }, {
    key: "unpinMessage",
    value: function unpinMessage(message) {
      return this.updateMessage(_objectSpread(_objectSpread({}, message), {}, {
        pinned: false
      }));
    }
    /**
     * updateMessage - Update the given message
     *
     * @param {Omit<MessageResponse<AttachmentType, ChannelType, CommandType, MessageType, ReactionType, UserType>, 'mentioned_users'> & { mentioned_users?: string[] }} message object, id needs to be specified
     * @param {string | { id: string }} [userId]
     *
     * @return {APIResponse & { message: MessageResponse<AttachmentType, ChannelType, CommandType, MessageType, ReactionType, UserType> }} Response that includes the message
     */

  }, {
    key: "updateMessage",
    value: function () {
      var _updateMessage = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee38(message, userId) {
        var clonedMessage, reservedMessageFields;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee38$(_context38) {
          while (1) {
            switch (_context38.prev = _context38.next) {
              case 0:
                if (message.id) {
                  _context38.next = 2;
                  break;
                }

                throw Error('Please specify the message id when calling updateMessage');

              case 2:
                clonedMessage = (0,_babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_1__.default)({}, message);
                delete clonedMessage.id;
                reservedMessageFields = ['command', 'created_at', 'html', 'latest_reactions', 'own_reactions', 'reaction_counts', 'reply_count', 'type', 'updated_at', 'user', '__html'];
                reservedMessageFields.forEach(function (item) {
                  if (clonedMessage[item] != null) {
                    delete clonedMessage[item];
                  }
                });

                if (userId != null) {
                  if (isString(userId)) {
                    clonedMessage.user_id = userId;
                  } else {
                    clonedMessage.user = {
                      id: userId.id
                    };
                  }
                }
                /**
                 * Server always expects mentioned_users to be array of string. We are adding extra check, just in case
                 * SDK missed this conversion.
                 */


                if (Array.isArray(clonedMessage.mentioned_users) && !isString(clonedMessage.mentioned_users[0])) {
                  clonedMessage.mentioned_users = clonedMessage.mentioned_users.map(function (mu) {
                    return mu.id;
                  });
                }

                _context38.next = 10;
                return this.post(this.baseURL + "/messages/".concat(message.id), {
                  message: clonedMessage
                });

              case 10:
                return _context38.abrupt("return", _context38.sent);

              case 11:
              case "end":
                return _context38.stop();
            }
          }
        }, _callee38, this);
      }));

      function updateMessage(_x48, _x49) {
        return _updateMessage.apply(this, arguments);
      }

      return updateMessage;
    }()
  }, {
    key: "deleteMessage",
    value: function () {
      var _deleteMessage = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee39(messageID, hardDelete) {
        var params;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee39$(_context39) {
          while (1) {
            switch (_context39.prev = _context39.next) {
              case 0:
                params = {};

                if (hardDelete) {
                  params = {
                    hard: true
                  };
                }

                _context39.next = 4;
                return this.delete(this.baseURL + "/messages/".concat(messageID), params);

              case 4:
                return _context39.abrupt("return", _context39.sent);

              case 5:
              case "end":
                return _context39.stop();
            }
          }
        }, _callee39, this);
      }));

      function deleteMessage(_x50, _x51) {
        return _deleteMessage.apply(this, arguments);
      }

      return deleteMessage;
    }()
  }, {
    key: "getMessage",
    value: function () {
      var _getMessage = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee40(messageID) {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee40$(_context40) {
          while (1) {
            switch (_context40.prev = _context40.next) {
              case 0:
                _context40.next = 2;
                return this.get(this.baseURL + "/messages/".concat(messageID));

              case 2:
                return _context40.abrupt("return", _context40.sent);

              case 3:
              case "end":
                return _context40.stop();
            }
          }
        }, _callee40, this);
      }));

      function getMessage(_x52) {
        return _getMessage.apply(this, arguments);
      }

      return getMessage;
    }()
  }, {
    key: "getUserAgent",
    value: function getUserAgent() {
      return this.userAgent || "stream-chat-javascript-client-".concat(this.node ? 'node' : 'browser', "-", "3.9.0");
    }
  }, {
    key: "setUserAgent",
    value: function setUserAgent(userAgent) {
      this.userAgent = userAgent;
    }
    /**
     * _isUsingServerAuth - Returns true if we're using server side auth
     */

  }, {
    key: "_enrichAxiosOptions",
    value: function _enrichAxiosOptions() {
      var _this$wsConnection4;

      var options = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {
        params: {},
        headers: {},
        config: {}
      };

      var token = this._getToken();

      return _objectSpread({
        params: _objectSpread(_objectSpread({
          user_id: this.userID
        }, options.params), {}, {
          api_key: this.key,
          connection_id: (_this$wsConnection4 = this.wsConnection) === null || _this$wsConnection4 === void 0 ? void 0 : _this$wsConnection4.connectionID
        }),
        headers: _objectSpread({
          Authorization: token,
          'stream-auth-type': this.getAuthType(),
          'X-Stream-Client': this.getUserAgent()
        }, options.headers)
      }, options.config);
    }
  }, {
    key: "_getToken",
    value: function _getToken() {
      if (!this.tokenManager || this.anonymous) return null;
      return this.tokenManager.getToken();
    }
  }, {
    key: "_startCleaning",
    value: function _startCleaning() {
      var that = this;

      if (this.cleaningIntervalRef != null) {
        return;
      }

      this.cleaningIntervalRef = setInterval(function () {
        // call clean on the channel, used for calling the stop.typing event etc.
        for (var _i3 = 0, _Object$values2 = Object.values(that.activeChannels); _i3 < _Object$values2.length; _i3++) {
          var _channel7 = _Object$values2[_i3];

          _channel7.clean();
        }
      }, 500);
    }
  }, {
    key: "verifyWebhook",
    value: function verifyWebhook(requestBody, xSignature) {
      return !!this.secret && CheckSignature(requestBody, this.secret, xSignature);
    }
    /** getPermission - gets the definition for a permission
     *
     * @param {string} name
     * @returns {Promise<PermissionAPIResponse>}
     */

  }, {
    key: "getPermission",
    value: function getPermission(name) {
      return this.get("".concat(this.baseURL, "/custom_permission/").concat(name));
    }
    /** createPermission - creates a custom permission
     *
     * @param {CustomPermissionOptions} permissionData the permission data
     * @returns {Promise<APIResponse>}
     */

  }, {
    key: "createPermission",
    value: function createPermission(permissionData) {
      return this.post("".concat(this.baseURL, "/custom_permission"), _objectSpread({}, permissionData));
    }
    /** updatePermission - updates an existing custom permission
     *
     * @param {string} name
     * @param {CustomPermissionOptions} permissionData the permission data
     * @returns {Promise<APIResponse>}
     */

  }, {
    key: "updatePermission",
    value: function updatePermission(name, permissionData) {
      return this.post("".concat(this.baseURL, "/custom_permission/").concat(name), _objectSpread({}, permissionData));
    }
    /** deletePermission - deletes a custom permission
     *
     * @param {string} name
     * @returns {Promise<APIResponse>}
     */

  }, {
    key: "deletePermission",
    value: function deletePermission(name) {
      return this.delete("".concat(this.baseURL, "/custom_permission/").concat(name));
    }
    /** listPermissions - returns the list of custom permissions for this application
     *
     * @returns {Promise<APIResponse>}
     */

  }, {
    key: "listPermissions",
    value: function listPermissions() {
      return this.get("".concat(this.baseURL, "/custom_permission"));
    }
    /** createRole - creates a custom role
     *
     * @param {string} name the new role name
     * @returns {Promise<APIResponse>}
     */

  }, {
    key: "createRole",
    value: function createRole(name) {
      return this.post("".concat(this.baseURL, "/custom_role"), {
        name: name
      });
    }
    /** listRoles - returns the list of custom roles for this application
     *
     * @returns {Promise<APIResponse>}
     */

  }, {
    key: "listRoles",
    value: function listRoles() {
      return this.get("".concat(this.baseURL, "/custom_role"));
    }
    /** deleteRole - deletes a custom role
     *
     * @param {string} name the role name
     * @returns {Promise<APIResponse>}
     */

  }, {
    key: "deleteRole",
    value: function deleteRole(name) {
      return this.delete("".concat(this.baseURL, "/custom_role/").concat(name));
    }
    /** sync - returns all events that happened for a list of channels since last sync
     * @param {string[]} channel_cids list of channel CIDs
     * @param {string} last_sync_at last time the user was online and in sync. RFC3339 ie. "2020-05-06T15:05:01.207Z"
     */

  }, {
    key: "sync",
    value: function sync(channel_cids, last_sync_at) {
      return this.post("".concat(this.baseURL, "/sync"), {
        channel_cids: channel_cids,
        last_sync_at: last_sync_at
      });
    }
    /**
     * sendUserCustomEvent - Send a custom event to a user
     *
     * @param {string} targetUserID target user id
     * @param {UserCustomEvent} event for example {type: 'friendship-request'}
     *
     * @return {Promise<APIResponse>} The Server Response
     */

  }, {
    key: "sendUserCustomEvent",
    value: function () {
      var _sendUserCustomEvent = (0,_babel_runtime_helpers_asyncToGenerator__WEBPACK_IMPORTED_MODULE_5__.default)( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().mark(function _callee41(targetUserID, event) {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_9___default().wrap(function _callee41$(_context41) {
          while (1) {
            switch (_context41.prev = _context41.next) {
              case 0:
                _context41.next = 2;
                return this.post("".concat(this.baseURL, "/users/").concat(targetUserID, "/event"), {
                  target_user_id: targetUserID,
                  event: event
                });

              case 2:
                return _context41.abrupt("return", _context41.sent);

              case 3:
              case "end":
                return _context41.stop();
            }
          }
        }, _callee41, this);
      }));

      function sendUserCustomEvent(_x53, _x54) {
        return _sendUserCustomEvent.apply(this, arguments);
      }

      return sendUserCustomEvent;
    }()
  }, {
    key: "createBlockList",
    value: function createBlockList(blockList) {
      return this.post("".concat(this.baseURL, "/blocklists"), blockList);
    }
  }, {
    key: "listBlockLists",
    value: function listBlockLists() {
      return this.get("".concat(this.baseURL, "/blocklists"));
    }
  }, {
    key: "getBlockList",
    value: function getBlockList(name) {
      return this.get("".concat(this.baseURL, "/blocklists/").concat(name));
    }
  }, {
    key: "updateBlockList",
    value: function updateBlockList(name, data) {
      return this.put("".concat(this.baseURL, "/blocklists/").concat(name), data);
    }
  }, {
    key: "deleteBlockList",
    value: function deleteBlockList(name) {
      return this.delete("".concat(this.baseURL, "/blocklists/").concat(name));
    }
  }, {
    key: "exportChannels",
    value: function exportChannels(request) {
      var payload = {
        channels: request
      };
      return this.post("".concat(this.baseURL, "/export_channels"), payload);
    }
  }, {
    key: "exportChannel",
    value: function exportChannel(request) {
      return this.exportChannels([request]);
    }
  }, {
    key: "getExportChannelStatus",
    value: function getExportChannelStatus(id) {
      return this.get("".concat(this.baseURL, "/export_channels/").concat(id));
    }
  }], [{
    key: "getInstance",
    value: function getInstance(key, secretOrOptions, options) {
      if (!StreamChat._instance) {
        if (typeof secretOrOptions === 'string') {
          StreamChat._instance = new StreamChat(key, secretOrOptions, options);
        } else {
          StreamChat._instance = new StreamChat(key, secretOrOptions);
        }
      }

      return StreamChat._instance;
    }
  }]);

  return StreamChat;
}();

(0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(StreamChat, "_instance", void 0);

var Allow = 'Allow';
var Deny = 'Deny';
var AnyResource = ['*'];
var AnyRole = ['*'];
var MaxPriority = 999;
var MinPriority = 1; // deprecated permission object class, you should use the new permission system v2 and use permissions
// defined in BuiltinPermissions to configure your channel types

var Permission = function Permission(name, priority) {
  var resources = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : AnyResource;
  var roles = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : AnyRole;
  var owner = arguments.length > 4 && arguments[4] !== undefined ? arguments[4] : false;
  var action = arguments.length > 5 && arguments[5] !== undefined ? arguments[5] : Allow;

  (0,_babel_runtime_helpers_classCallCheck__WEBPACK_IMPORTED_MODULE_6__.default)(this, Permission);

  (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "name", void 0);

  (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "action", void 0);

  (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "owner", void 0);

  (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "priority", void 0);

  (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "resources", void 0);

  (0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_8__.default)(this, "roles", void 0);

  this.name = name;
  this.action = action;
  this.owner = owner;
  this.priority = priority;
  this.resources = resources;
  this.roles = roles;
}; // deprecated

var AllowAll = new Permission('Allow all', MaxPriority, AnyResource, AnyRole, false, Allow); // deprecated

var DenyAll = new Permission('Deny all', MinPriority, AnyResource, AnyRole, false, Deny);
var BuiltinRoles = {
  Admin: 'admin',
  Anonymous: 'anonymous',
  ChannelMember: 'channel_member',
  ChannelModerator: 'channel_moderator',
  Guest: 'guest',
  User: 'user'
};
var BuiltinPermissions = {
  AddLinks: 'Add Links',
  BanUser: 'Ban User',
  CreateChannel: 'Create Channel',
  CreateMessage: 'Create Message',
  CreateReaction: 'Create Reaction',
  DeleteAnyAttachment: 'Delete Any Attachment',
  DeleteAnyChannel: 'Delete Any Channel',
  DeleteAnyMessage: 'Delete Any Message',
  DeleteAnyReaction: 'Delete Any Reaction',
  DeleteOwnAttachment: 'Delete Own Attachment',
  DeleteOwnChannel: 'Delete Own Channel',
  DeleteOwnMessage: 'Delete Own Message',
  DeleteOwnReaction: 'Delete Own Reaction',
  ReadAnyChannel: 'Read Any Channel',
  ReadOwnChannel: 'Read Own Channel',
  RunMessageAction: 'Run Message Action',
  UpdateAnyChannel: 'Update Any Channel',
  UpdateAnyMessage: 'Update Any Message',
  UpdateMembersAnyChannel: 'Update Members Any Channel',
  UpdateMembersOwnChannel: 'Update Members Own Channel',
  UpdateOwnChannel: 'Update Own Channel',
  UpdateOwnMessage: 'Update Own Message',
  UploadAttachment: 'Upload Attachment',
  UseFrozenChannel: 'Send messages and reactions to frozen channels'
};


//# sourceMappingURL=browser.es.js.map


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/global */
/******/ 	(() => {
/******/ 		__webpack_require__.g = (function() {
/******/ 			if (typeof globalThis === 'object') return globalThis;
/******/ 			try {
/******/ 				return this || new Function('return this')();
/******/ 			} catch (e) {
/******/ 				if (typeof window === 'object') return window;
/******/ 			}
/******/ 		})();
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be in strict mode.
(() => {
"use strict";
/*!*************************************!*\
  !*** ./resources/js/stream-chat.js ***!
  \*************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var stream_chat__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! stream-chat */ "./node_modules/stream-chat/dist/browser.es.js");

window.StreamChat = stream_chat__WEBPACK_IMPORTED_MODULE_0__.StreamChat;
})();

/******/ })()
;