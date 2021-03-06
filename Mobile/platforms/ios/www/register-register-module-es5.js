(function () {
  function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

  function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

  function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  (window["webpackJsonp"] = window["webpackJsonp"] || []).push([["register-register-module"], {
    /***/
    "./node_modules/raw-loader/dist/cjs.js!./src/app/register/register.page.html":
    /*!***********************************************************************************!*\
      !*** ./node_modules/raw-loader/dist/cjs.js!./src/app/register/register.page.html ***!
      \***********************************************************************************/

    /*! exports provided: default */

    /***/
    function node_modulesRawLoaderDistCjsJsSrcAppRegisterRegisterPageHtml(module, __webpack_exports__, __webpack_require__) {
      "use strict";

      __webpack_require__.r(__webpack_exports__);
      /* harmony default export */


      __webpack_exports__["default"] = "<ion-header>\n    <ion-toolbar>\n        <ion-buttons slot=\"start\">\n            <ion-back-button color=\"vendorposlog\" text=\"\" icon=\"arrow-back-outline\" defaultHref=\"/login\"></ion-back-button>\n        </ion-buttons>\n        <ion-title class=\"header-title\">Create your account</ion-title>\n    </ion-toolbar>\n</ion-header>\n\n<ion-content>\n    <ion-row>\n\t\t<ion-col size=\"12\">\n\t\t\t<ion-item>\n\t\t\t\t<ion-label style=\"color: black;\" position=\"floating\">Full Name *</ion-label>\n\t\t\t\t<ion-input type=\"text\" [(ngModel)]=\"Register.fullname\"></ion-input>\n\t\t\t</ion-item>\n        </ion-col>\n        <ion-col size=\"12\">\n\t\t\t<ion-item>\n\t\t\t\t<ion-label style=\"color: black;\" position=\"floating\">Gender *</ion-label>\n\t\t\t\t<ion-select mode=\"ios\" [(ngModel)]=\"Register.gender\">\n                    <ion-select-option *ngFor=\"let vgetallgender of getallgender\" value=\"{{ vgetallgender }}\">{{ vgetallgender }}</ion-select-option>\n                </ion-select>\n\t\t\t</ion-item>\n\t\t</ion-col>\n        <ion-col size=\"12\">\n\t\t\t<ion-item>\n\t\t\t\t<ion-label style=\"color: black;\" position=\"floating\">Email *</ion-label>\n\t\t\t\t<ion-input type=\"email\" [(ngModel)]=\"Register.email\"></ion-input>\n\t\t\t</ion-item>\n\t\t</ion-col>\n\t\t<ion-col size=\"12\">\n\t\t\t<ion-item>\n\t\t\t\t<ion-label style=\"color: black;\" position=\"floating\">Password *</ion-label>\n\t\t\t\t<ion-input type=\"password\" [(ngModel)]=\"Register.password\"></ion-input>\n\t\t\t</ion-item>\n        </ion-col>\n        <ion-col size=\"12\">\n\t\t\t<ion-item>\n\t\t\t\t<ion-label style=\"color: black;\" position=\"floating\">Retry Password *</ion-label>\n\t\t\t\t<ion-input type=\"password\" [(ngModel)]=\"Register.password2\"></ion-input>\n\t\t\t</ion-item>\n\t\t</ion-col>\n\t\t<ion-col size=\"12\">\n\t\t\t<p style=\"font-size: 12px; padding-left: 10px; font-style: italic;\">Note : * Column cannot be null</p>\n\t\t</ion-col>\n\t\t<ion-col size=\"12\">\n\t\t\t<ion-button expand=\"block\" mode=\"ios\" color=\"vendorposlog\" (click)=\"RegisterProcess()\">Register Now</ion-button>\n\t\t</ion-col>\n\t</ion-row>\n</ion-content>\n";
      /***/
    },

    /***/
    "./src/app/register/register-routing.module.ts":
    /*!*****************************************************!*\
      !*** ./src/app/register/register-routing.module.ts ***!
      \*****************************************************/

    /*! exports provided: RegisterPageRoutingModule */

    /***/
    function srcAppRegisterRegisterRoutingModuleTs(module, __webpack_exports__, __webpack_require__) {
      "use strict";

      __webpack_require__.r(__webpack_exports__);
      /* harmony export (binding) */


      __webpack_require__.d(__webpack_exports__, "RegisterPageRoutingModule", function () {
        return RegisterPageRoutingModule;
      });
      /* harmony import */


      var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! tslib */
      "./node_modules/tslib/tslib.es6.js");
      /* harmony import */


      var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
      /*! @angular/core */
      "./node_modules/@angular/core/__ivy_ngcc__/fesm2015/core.js");
      /* harmony import */


      var _angular_router__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(
      /*! @angular/router */
      "./node_modules/@angular/router/__ivy_ngcc__/fesm2015/router.js");
      /* harmony import */


      var _register_page__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(
      /*! ./register.page */
      "./src/app/register/register.page.ts");

      var routes = [{
        path: '',
        component: _register_page__WEBPACK_IMPORTED_MODULE_3__["RegisterPage"]
      }];

      var RegisterPageRoutingModule = function RegisterPageRoutingModule() {
        _classCallCheck(this, RegisterPageRoutingModule);
      };

      RegisterPageRoutingModule = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
        imports: [_angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterModule"].forChild(routes)],
        exports: [_angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterModule"]]
      })], RegisterPageRoutingModule);
      /***/
    },

    /***/
    "./src/app/register/register.module.ts":
    /*!*********************************************!*\
      !*** ./src/app/register/register.module.ts ***!
      \*********************************************/

    /*! exports provided: RegisterPageModule */

    /***/
    function srcAppRegisterRegisterModuleTs(module, __webpack_exports__, __webpack_require__) {
      "use strict";

      __webpack_require__.r(__webpack_exports__);
      /* harmony export (binding) */


      __webpack_require__.d(__webpack_exports__, "RegisterPageModule", function () {
        return RegisterPageModule;
      });
      /* harmony import */


      var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! tslib */
      "./node_modules/tslib/tslib.es6.js");
      /* harmony import */


      var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
      /*! @angular/core */
      "./node_modules/@angular/core/__ivy_ngcc__/fesm2015/core.js");
      /* harmony import */


      var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(
      /*! @angular/common */
      "./node_modules/@angular/common/__ivy_ngcc__/fesm2015/common.js");
      /* harmony import */


      var _angular_forms__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(
      /*! @angular/forms */
      "./node_modules/@angular/forms/__ivy_ngcc__/fesm2015/forms.js");
      /* harmony import */


      var _ionic_angular__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(
      /*! @ionic/angular */
      "./node_modules/@ionic/angular/__ivy_ngcc__/fesm2015/ionic-angular.js");
      /* harmony import */


      var _register_routing_module__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(
      /*! ./register-routing.module */
      "./src/app/register/register-routing.module.ts");
      /* harmony import */


      var _register_page__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(
      /*! ./register.page */
      "./src/app/register/register.page.ts");

      var RegisterPageModule = function RegisterPageModule() {
        _classCallCheck(this, RegisterPageModule);
      };

      RegisterPageModule = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
        imports: [_angular_common__WEBPACK_IMPORTED_MODULE_2__["CommonModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_3__["FormsModule"], _ionic_angular__WEBPACK_IMPORTED_MODULE_4__["IonicModule"], _register_routing_module__WEBPACK_IMPORTED_MODULE_5__["RegisterPageRoutingModule"]],
        declarations: [_register_page__WEBPACK_IMPORTED_MODULE_6__["RegisterPage"]]
      })], RegisterPageModule);
      /***/
    },

    /***/
    "./src/app/register/register.page.scss":
    /*!*********************************************!*\
      !*** ./src/app/register/register.page.scss ***!
      \*********************************************/

    /*! exports provided: default */

    /***/
    function srcAppRegisterRegisterPageScss(module, __webpack_exports__, __webpack_require__) {
      "use strict";

      __webpack_require__.r(__webpack_exports__);
      /* harmony default export */


      __webpack_exports__["default"] = ".header-title {\n  font-size: 18px;\n  color: #ff8a35;\n}\n\n.ion-color-vendorposlog {\n  --ion-color-base: var(--ion-color-vendorposlog);\n  --ion-color-base-rgb: var(--ion-color-vendorposlog-rgb);\n  --ion-color-contrast: var(--ion-color-vendorposlog-contrast);\n  --ion-color-contrast-rgb: var(--ion-color-vendorposlog-contrast-rgb);\n  --ion-color-shade: var(--ion-color-vendorposlog-shade);\n  --ion-color-tint: var(--ion-color-vendorposlog-tint);\n}\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvcmVnaXN0ZXIvcmVnaXN0ZXIucGFnZS5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0VBQ0ksZUFBQTtFQUNBLGNBQUE7QUFDSjs7QUFDQTtFQUNDLCtDQUFBO0VBQ0EsdURBQUE7RUFDQSw0REFBQTtFQUNBLG9FQUFBO0VBQ0Esc0RBQUE7RUFDQSxvREFBQTtBQUVEIiwiZmlsZSI6InNyYy9hcHAvcmVnaXN0ZXIvcmVnaXN0ZXIucGFnZS5zY3NzIiwic291cmNlc0NvbnRlbnQiOlsiLmhlYWRlci10aXRsZXtcbiAgICBmb250LXNpemU6IDE4cHg7XG4gICAgY29sb3I6ICNmZjhhMzU7XG59XG4uaW9uLWNvbG9yLXZlbmRvcnBvc2xvZyB7XG5cdC0taW9uLWNvbG9yLWJhc2U6IHZhcigtLWlvbi1jb2xvci12ZW5kb3Jwb3Nsb2cpO1xuXHQtLWlvbi1jb2xvci1iYXNlLXJnYjogdmFyKC0taW9uLWNvbG9yLXZlbmRvcnBvc2xvZy1yZ2IpO1xuXHQtLWlvbi1jb2xvci1jb250cmFzdDogdmFyKC0taW9uLWNvbG9yLXZlbmRvcnBvc2xvZy1jb250cmFzdCk7XG5cdC0taW9uLWNvbG9yLWNvbnRyYXN0LXJnYjogdmFyKC0taW9uLWNvbG9yLXZlbmRvcnBvc2xvZy1jb250cmFzdC1yZ2IpO1xuXHQtLWlvbi1jb2xvci1zaGFkZTogdmFyKC0taW9uLWNvbG9yLXZlbmRvcnBvc2xvZy1zaGFkZSk7XG5cdC0taW9uLWNvbG9yLXRpbnQ6IHZhcigtLWlvbi1jb2xvci12ZW5kb3Jwb3Nsb2ctdGludCk7XG59Il19 */";
      /***/
    },

    /***/
    "./src/app/register/register.page.ts":
    /*!*******************************************!*\
      !*** ./src/app/register/register.page.ts ***!
      \*******************************************/

    /*! exports provided: RegisterPage */

    /***/
    function srcAppRegisterRegisterPageTs(module, __webpack_exports__, __webpack_require__) {
      "use strict";

      __webpack_require__.r(__webpack_exports__);
      /* harmony export (binding) */


      __webpack_require__.d(__webpack_exports__, "RegisterPage", function () {
        return RegisterPage;
      });
      /* harmony import */


      var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
      /*! tslib */
      "./node_modules/tslib/tslib.es6.js");
      /* harmony import */


      var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
      /*! @angular/core */
      "./node_modules/@angular/core/__ivy_ngcc__/fesm2015/core.js");
      /* harmony import */


      var _ionic_angular__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(
      /*! @ionic/angular */
      "./node_modules/@ionic/angular/__ivy_ngcc__/fesm2015/ionic-angular.js");
      /* harmony import */


      var _angular_router__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(
      /*! @angular/router */
      "./node_modules/@angular/router/__ivy_ngcc__/fesm2015/router.js");
      /* harmony import */


      var _apiservice_apiservice_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(
      /*! ../apiservice/apiservice.service */
      "./src/app/apiservice/apiservice.service.ts");

      var RegisterPage = /*#__PURE__*/function () {
        function RegisterPage(navCtrl, Router, loadingCtrl, alertCtrl, ApiserviceService) {
          _classCallCheck(this, RegisterPage);

          this.navCtrl = navCtrl;
          this.Router = Router;
          this.loadingCtrl = loadingCtrl;
          this.alertCtrl = alertCtrl;
          this.ApiserviceService = ApiserviceService;
          this.Register = {
            fullname: '',
            gender: '',
            email: '',
            password: '',
            password2: ''
          };
        }

        _createClass(RegisterPage, [{
          key: "ngOnInit",
          value: function ngOnInit() {
            return Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__awaiter"])(this, void 0, void 0, /*#__PURE__*/regeneratorRuntime.mark(function _callee() {
              var Loading;
              return regeneratorRuntime.wrap(function _callee$(_context) {
                while (1) {
                  switch (_context.prev = _context.next) {
                    case 0:
                      _context.next = 2;
                      return this.alertCtrl.create({
                        mode: 'ios'
                      });

                    case 2:
                      Loading = _context.sent;
                      Loading.present();
                      this.GetAllGender();
                      Loading.dismiss();

                    case 6:
                    case "end":
                      return _context.stop();
                  }
                }
              }, _callee, this);
            }));
          }
        }, {
          key: "GetAllGender",
          value: function GetAllGender() {
            var _this = this;

            this.ApiserviceService.GetAllGender().then(function (data) {
              var Output = JSON.parse(JSON.stringify(data));

              if (Output.condition == true) {
                _this.getallgender = Output.data;
              } else {
                _this.getallgender = null;

                _this.presentAlert(Output.message);
              }
            });
          }
        }, {
          key: "RegisterProcess",
          value: function RegisterProcess() {
            return Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__awaiter"])(this, void 0, void 0, /*#__PURE__*/regeneratorRuntime.mark(function _callee2() {
              var _this2 = this;

              var Loading;
              return regeneratorRuntime.wrap(function _callee2$(_context2) {
                while (1) {
                  switch (_context2.prev = _context2.next) {
                    case 0:
                      _context2.next = 2;
                      return this.loadingCtrl.create({
                        mode: 'ios'
                      });

                    case 2:
                      Loading = _context2.sent;
                      Loading.present();

                      if (this.Register.fullname != '' && this.Register.gender != '' && this.Register.email != '' && this.Register.password != '' && this.Register.password2 != '') {
                        if (this.Register.password == this.Register.password2) {
                          this.ApiserviceService.RegisterProcess(this.Register).then(function (data) {
                            var Output = JSON.parse(JSON.stringify(data));
                            Loading.dismiss();

                            if (Output.condition == true) {
                              _this2.presentAlert(Output.message);

                              _this2.Router.navigate(['login']);
                            } else {
                              _this2.presentAlert(Output.message);
                            }
                          });
                        } else {
                          Loading.dismiss();
                          this.presentAlert('Password not macth');
                        }
                      } else {
                        Loading.dismiss();
                        this.presentAlert('Column cannot be null');
                      }

                    case 5:
                    case "end":
                      return _context2.stop();
                  }
                }
              }, _callee2, this);
            }));
          }
        }, {
          key: "presentAlert",
          value: function presentAlert(Msg) {
            return Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__awaiter"])(this, void 0, void 0, /*#__PURE__*/regeneratorRuntime.mark(function _callee3() {
              var Alert;
              return regeneratorRuntime.wrap(function _callee3$(_context3) {
                while (1) {
                  switch (_context3.prev = _context3.next) {
                    case 0:
                      _context3.next = 2;
                      return this.alertCtrl.create({
                        mode: 'ios',
                        message: Msg,
                        buttons: ['OK']
                      });

                    case 2:
                      Alert = _context3.sent;
                      Alert.present();

                    case 4:
                    case "end":
                      return _context3.stop();
                  }
                }
              }, _callee3, this);
            }));
          }
        }]);

        return RegisterPage;
      }();

      RegisterPage.ctorParameters = function () {
        return [{
          type: _ionic_angular__WEBPACK_IMPORTED_MODULE_2__["NavController"]
        }, {
          type: _angular_router__WEBPACK_IMPORTED_MODULE_3__["Router"]
        }, {
          type: _ionic_angular__WEBPACK_IMPORTED_MODULE_2__["LoadingController"]
        }, {
          type: _ionic_angular__WEBPACK_IMPORTED_MODULE_2__["AlertController"]
        }, {
          type: _apiservice_apiservice_service__WEBPACK_IMPORTED_MODULE_4__["ApiserviceService"]
        }];
      };

      RegisterPage = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-register',
        template: Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(
        /*! raw-loader!./register.page.html */
        "./node_modules/raw-loader/dist/cjs.js!./src/app/register/register.page.html"))["default"],
        styles: [Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(
        /*! ./register.page.scss */
        "./src/app/register/register.page.scss"))["default"]]
      })], RegisterPage);
      /***/
    }
  }]);
})();
//# sourceMappingURL=register-register-module-es5.js.map