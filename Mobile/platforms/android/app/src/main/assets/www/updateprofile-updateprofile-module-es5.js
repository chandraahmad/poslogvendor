(function () {
  function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

  function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

  function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  (window["webpackJsonp"] = window["webpackJsonp"] || []).push([["updateprofile-updateprofile-module"], {
    /***/
    "./node_modules/raw-loader/dist/cjs.js!./src/app/updateprofile/updateprofile.page.html":
    /*!*********************************************************************************************!*\
      !*** ./node_modules/raw-loader/dist/cjs.js!./src/app/updateprofile/updateprofile.page.html ***!
      \*********************************************************************************************/

    /*! exports provided: default */

    /***/
    function node_modulesRawLoaderDistCjsJsSrcAppUpdateprofileUpdateprofilePageHtml(module, __webpack_exports__, __webpack_require__) {
      "use strict";

      __webpack_require__.r(__webpack_exports__);
      /* harmony default export */


      __webpack_exports__["default"] = "<ion-header>\n    <ion-toolbar>\n        <ion-buttons slot=\"start\">\n            <ion-back-button color=\"vendorposlog\" text=\"\" icon=\"close-circle-outline\" defaultHref=\"/profile\"></ion-back-button>\n        </ion-buttons>\n        <ion-title class=\"header-title\">Update your profile</ion-title>\n    </ion-toolbar>\n</ion-header>\n\n<ion-content>\n    <ion-row>\n\t\t<ion-col size=\"12\">\n\t\t\t<ion-item>\n\t\t\t\t<ion-label style=\"color: black;\" position=\"floating\">Full Name *</ion-label>\n\t\t\t\t<ion-input type=\"text\" [(ngModel)]=\"Updateprofile.fullname\"></ion-input>\n\t\t\t</ion-item>\n        </ion-col>\n        <ion-col size=\"12\">\n\t\t\t<ion-item>\n\t\t\t\t<ion-label style=\"color: black;\" position=\"floating\">Gender *</ion-label>\n\t\t\t\t<ion-select mode=\"ios\" [selectedText]=\"Updateprofile.gender\" [(ngModel)]=\"Updateprofile.gender\">\n                    <ion-select-option *ngFor=\"let vgetallgender of getallgender\" value=\"{{ vgetallgender }}\">{{ vgetallgender }}</ion-select-option>\n                </ion-select>\n\t\t\t</ion-item>\n\t\t</ion-col>\n        <ion-col size=\"12\">\n\t\t\t<ion-item>\n\t\t\t\t<ion-label style=\"color: black;\" position=\"floating\">Email *</ion-label>\n\t\t\t\t<ion-input type=\"email\" [(ngModel)]=\"Updateprofile.email\"></ion-input>\n\t\t\t</ion-item>\n\t\t</ion-col>\n\t\t<ion-col size=\"12\">\n\t\t\t<p style=\"font-size: 12px; padding-left: 10px; font-style: italic;\">Note : * Column cannot be null</p>\n\t\t</ion-col>\n\t\t<ion-col size=\"12\">\n\t\t\t<ion-button expand=\"block\" mode=\"ios\" color=\"vendorposlog\" (click)=\"UpdateProfileProcess()\">Update Now</ion-button>\n\t\t</ion-col>\n\t</ion-row>\n</ion-content>\n";
      /***/
    },

    /***/
    "./src/app/updateprofile/updateprofile-routing.module.ts":
    /*!***************************************************************!*\
      !*** ./src/app/updateprofile/updateprofile-routing.module.ts ***!
      \***************************************************************/

    /*! exports provided: UpdateprofilePageRoutingModule */

    /***/
    function srcAppUpdateprofileUpdateprofileRoutingModuleTs(module, __webpack_exports__, __webpack_require__) {
      "use strict";

      __webpack_require__.r(__webpack_exports__);
      /* harmony export (binding) */


      __webpack_require__.d(__webpack_exports__, "UpdateprofilePageRoutingModule", function () {
        return UpdateprofilePageRoutingModule;
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


      var _updateprofile_page__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(
      /*! ./updateprofile.page */
      "./src/app/updateprofile/updateprofile.page.ts");

      var routes = [{
        path: '',
        component: _updateprofile_page__WEBPACK_IMPORTED_MODULE_3__["UpdateprofilePage"]
      }];

      var UpdateprofilePageRoutingModule = function UpdateprofilePageRoutingModule() {
        _classCallCheck(this, UpdateprofilePageRoutingModule);
      };

      UpdateprofilePageRoutingModule = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
        imports: [_angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterModule"].forChild(routes)],
        exports: [_angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterModule"]]
      })], UpdateprofilePageRoutingModule);
      /***/
    },

    /***/
    "./src/app/updateprofile/updateprofile.module.ts":
    /*!*******************************************************!*\
      !*** ./src/app/updateprofile/updateprofile.module.ts ***!
      \*******************************************************/

    /*! exports provided: UpdateprofilePageModule */

    /***/
    function srcAppUpdateprofileUpdateprofileModuleTs(module, __webpack_exports__, __webpack_require__) {
      "use strict";

      __webpack_require__.r(__webpack_exports__);
      /* harmony export (binding) */


      __webpack_require__.d(__webpack_exports__, "UpdateprofilePageModule", function () {
        return UpdateprofilePageModule;
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


      var _updateprofile_routing_module__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(
      /*! ./updateprofile-routing.module */
      "./src/app/updateprofile/updateprofile-routing.module.ts");
      /* harmony import */


      var _updateprofile_page__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(
      /*! ./updateprofile.page */
      "./src/app/updateprofile/updateprofile.page.ts");

      var UpdateprofilePageModule = function UpdateprofilePageModule() {
        _classCallCheck(this, UpdateprofilePageModule);
      };

      UpdateprofilePageModule = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
        imports: [_angular_common__WEBPACK_IMPORTED_MODULE_2__["CommonModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_3__["FormsModule"], _ionic_angular__WEBPACK_IMPORTED_MODULE_4__["IonicModule"], _updateprofile_routing_module__WEBPACK_IMPORTED_MODULE_5__["UpdateprofilePageRoutingModule"]],
        declarations: [_updateprofile_page__WEBPACK_IMPORTED_MODULE_6__["UpdateprofilePage"]]
      })], UpdateprofilePageModule);
      /***/
    },

    /***/
    "./src/app/updateprofile/updateprofile.page.scss":
    /*!*******************************************************!*\
      !*** ./src/app/updateprofile/updateprofile.page.scss ***!
      \*******************************************************/

    /*! exports provided: default */

    /***/
    function srcAppUpdateprofileUpdateprofilePageScss(module, __webpack_exports__, __webpack_require__) {
      "use strict";

      __webpack_require__.r(__webpack_exports__);
      /* harmony default export */


      __webpack_exports__["default"] = ".header-title {\n  font-size: 18px;\n  color: #ff8a35;\n}\n\n.ion-color-vendorposlog {\n  --ion-color-base: var(--ion-color-vendorposlog);\n  --ion-color-base-rgb: var(--ion-color-vendorposlog-rgb);\n  --ion-color-contrast: var(--ion-color-vendorposlog-contrast);\n  --ion-color-contrast-rgb: var(--ion-color-vendorposlog-contrast-rgb);\n  --ion-color-shade: var(--ion-color-vendorposlog-shade);\n  --ion-color-tint: var(--ion-color-vendorposlog-tint);\n}\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvdXBkYXRlcHJvZmlsZS91cGRhdGVwcm9maWxlLnBhZ2Uuc2NzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtFQUNJLGVBQUE7RUFDQSxjQUFBO0FBQ0o7O0FBQ0E7RUFDQywrQ0FBQTtFQUNBLHVEQUFBO0VBQ0EsNERBQUE7RUFDQSxvRUFBQTtFQUNBLHNEQUFBO0VBQ0Esb0RBQUE7QUFFRCIsImZpbGUiOiJzcmMvYXBwL3VwZGF0ZXByb2ZpbGUvdXBkYXRlcHJvZmlsZS5wYWdlLnNjc3MiLCJzb3VyY2VzQ29udGVudCI6WyIuaGVhZGVyLXRpdGxle1xuICAgIGZvbnQtc2l6ZTogMThweDtcbiAgICBjb2xvcjogI2ZmOGEzNTtcbn1cbi5pb24tY29sb3ItdmVuZG9ycG9zbG9nIHtcblx0LS1pb24tY29sb3ItYmFzZTogdmFyKC0taW9uLWNvbG9yLXZlbmRvcnBvc2xvZyk7XG5cdC0taW9uLWNvbG9yLWJhc2UtcmdiOiB2YXIoLS1pb24tY29sb3ItdmVuZG9ycG9zbG9nLXJnYik7XG5cdC0taW9uLWNvbG9yLWNvbnRyYXN0OiB2YXIoLS1pb24tY29sb3ItdmVuZG9ycG9zbG9nLWNvbnRyYXN0KTtcblx0LS1pb24tY29sb3ItY29udHJhc3QtcmdiOiB2YXIoLS1pb24tY29sb3ItdmVuZG9ycG9zbG9nLWNvbnRyYXN0LXJnYik7XG5cdC0taW9uLWNvbG9yLXNoYWRlOiB2YXIoLS1pb24tY29sb3ItdmVuZG9ycG9zbG9nLXNoYWRlKTtcblx0LS1pb24tY29sb3ItdGludDogdmFyKC0taW9uLWNvbG9yLXZlbmRvcnBvc2xvZy10aW50KTtcbn0iXX0= */";
      /***/
    },

    /***/
    "./src/app/updateprofile/updateprofile.page.ts":
    /*!*****************************************************!*\
      !*** ./src/app/updateprofile/updateprofile.page.ts ***!
      \*****************************************************/

    /*! exports provided: UpdateprofilePage */

    /***/
    function srcAppUpdateprofileUpdateprofilePageTs(module, __webpack_exports__, __webpack_require__) {
      "use strict";

      __webpack_require__.r(__webpack_exports__);
      /* harmony export (binding) */


      __webpack_require__.d(__webpack_exports__, "UpdateprofilePage", function () {
        return UpdateprofilePage;
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


      var _ionic_storage__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(
      /*! @ionic/storage */
      "./node_modules/@ionic/storage/__ivy_ngcc__/fesm2015/ionic-storage.js");
      /* harmony import */


      var _apiservice_apiservice_service__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(
      /*! ../apiservice/apiservice.service */
      "./src/app/apiservice/apiservice.service.ts");

      var UpdateprofilePage = /*#__PURE__*/function () {
        function UpdateprofilePage(navCtrl, Router, loadingCtrl, alertCtrl, ApiserviceService, storage) {
          _classCallCheck(this, UpdateprofilePage);

          this.navCtrl = navCtrl;
          this.Router = Router;
          this.loadingCtrl = loadingCtrl;
          this.alertCtrl = alertCtrl;
          this.ApiserviceService = ApiserviceService;
          this.storage = storage;
          this.Updateprofile = {
            id_user: '',
            fullname: '',
            gender: '',
            email: '',
            password: ''
          };
        }

        _createClass(UpdateprofilePage, [{
          key: "ngOnInit",
          value: function ngOnInit() {
            return Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__awaiter"])(this, void 0, void 0, /*#__PURE__*/regeneratorRuntime.mark(function _callee() {
              var _this = this;

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
                      this.storage.get('storage_poslogvendor').then(function (data) {
                        _this.Updateprofile.id_user = data.data.id_user;
                        _this.Updateprofile.fullname = data.data.fullname;
                        _this.Updateprofile.gender = data.data.gender;
                        _this.Updateprofile.email = data.data.email;
                        _this.Updateprofile.password = data.data.password;
                      });
                      this.GetAllGender();
                      Loading.dismiss();

                    case 7:
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
            var _this2 = this;

            this.ApiserviceService.GetAllGender().then(function (data) {
              var Output = JSON.parse(JSON.stringify(data));

              if (Output.condition == true) {
                _this2.getallgender = Output.data;
              } else {
                _this2.getallgender = null;

                _this2.presentAlert(Output.message);
              }
            });
          }
        }, {
          key: "UpdateProfileProcess",
          value: function UpdateProfileProcess() {
            return Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__awaiter"])(this, void 0, void 0, /*#__PURE__*/regeneratorRuntime.mark(function _callee2() {
              var _this3 = this;

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

                      if (this.Updateprofile.fullname != '' && this.Updateprofile.gender != '' && this.Updateprofile.email != '') {
                        this.ApiserviceService.UpdateProfileProcess(this.Updateprofile).then(function (data) {
                          var Output = JSON.parse(JSON.stringify(data));

                          _this3.ApiserviceService.GetByidUser2(_this3.Updateprofile).then(function (data) {
                            var OutPutGetByidUser = JSON.parse(JSON.stringify(data));

                            _this3.storage.clear();

                            _this3.storage.set('storage_poslogvendor', OutPutGetByidUser).then(function (val) {
                              Loading.dismiss();

                              if (Output.condition == true) {
                                _this3.presentAlert(Output.message);

                                _this3.Router.navigate(['profile']);
                              } else {
                                _this3.presentAlert(Output.message);
                              }
                            });
                          });
                        });
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

        return UpdateprofilePage;
      }();

      UpdateprofilePage.ctorParameters = function () {
        return [{
          type: _ionic_angular__WEBPACK_IMPORTED_MODULE_2__["NavController"]
        }, {
          type: _angular_router__WEBPACK_IMPORTED_MODULE_3__["Router"]
        }, {
          type: _ionic_angular__WEBPACK_IMPORTED_MODULE_2__["LoadingController"]
        }, {
          type: _ionic_angular__WEBPACK_IMPORTED_MODULE_2__["AlertController"]
        }, {
          type: _apiservice_apiservice_service__WEBPACK_IMPORTED_MODULE_5__["ApiserviceService"]
        }, {
          type: _ionic_storage__WEBPACK_IMPORTED_MODULE_4__["Storage"]
        }];
      };

      UpdateprofilePage = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-updateprofile',
        template: Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(
        /*! raw-loader!./updateprofile.page.html */
        "./node_modules/raw-loader/dist/cjs.js!./src/app/updateprofile/updateprofile.page.html"))["default"],
        styles: [Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(
        /*! ./updateprofile.page.scss */
        "./src/app/updateprofile/updateprofile.page.scss"))["default"]]
      })], UpdateprofilePage);
      /***/
    }
  }]);
})();
//# sourceMappingURL=updateprofile-updateprofile-module-es5.js.map