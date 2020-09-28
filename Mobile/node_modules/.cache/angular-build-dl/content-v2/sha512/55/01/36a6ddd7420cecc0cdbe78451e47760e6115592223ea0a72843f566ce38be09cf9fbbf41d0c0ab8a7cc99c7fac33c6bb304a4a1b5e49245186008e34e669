(function () {
  function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

  function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

  function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  (window["webpackJsonp"] = window["webpackJsonp"] || []).push([["administrasi-administrasi-module"], {
    /***/
    "./node_modules/raw-loader/dist/cjs.js!./src/app/administrasi/administrasi.page.html":
    /*!*******************************************************************************************!*\
      !*** ./node_modules/raw-loader/dist/cjs.js!./src/app/administrasi/administrasi.page.html ***!
      \*******************************************************************************************/

    /*! exports provided: default */

    /***/
    function node_modulesRawLoaderDistCjsJsSrcAppAdministrasiAdministrasiPageHtml(module, __webpack_exports__, __webpack_require__) {
      "use strict";

      __webpack_require__.r(__webpack_exports__);
      /* harmony default export */


      __webpack_exports__["default"] = "<ion-header>\n    <ion-toolbar>\n        <ion-buttons slot=\"start\">\n            <ion-back-button color=\"vendorposlog\" text=\"\" icon=\"close-circle-outline\" defaultHref=\"/home\"></ion-back-button>\n        </ion-buttons>\n        <ion-title class=\"header-title\">Form Administration</ion-title>\n    </ion-toolbar>\n</ion-header>\n\n<ion-content>\n    <ion-row>\n\t\t<ion-col size=\"12\">\n\t\t\t<ion-item>\n\t\t\t\t<ion-label style=\"color: black;\" position=\"floating\">Nama Perusahaan *</ion-label>\n\t\t\t\t<ion-input type=\"text\" [(ngModel)]=\"Administration.vendor_name\"></ion-input>\n\t\t\t</ion-item>\n        </ion-col>\n        <ion-col size=\"12\">\n\t\t\t<ion-item>\n\t\t\t\t<ion-label style=\"color: black;\" position=\"floating\">Alamat *</ion-label>\n\t\t\t\t<ion-input type=\"text\" [(ngModel)]=\"Administration.address\"></ion-input>\n\t\t\t</ion-item>\n        </ion-col>\n        <ion-col size=\"12\">\n\t\t\t<ion-item>\n\t\t\t\t<ion-label style=\"color: black;\" position=\"floating\">Kode Pos *</ion-label>\n\t\t\t\t<ion-input type=\"number\" [(ngModel)]=\"Administration.postcode\"></ion-input>\n\t\t\t</ion-item>\n        </ion-col>\n        <ion-col size=\"12\">\n\t\t\t<ion-item>\n\t\t\t\t<ion-label style=\"color: black;\" position=\"floating\">Telephone *</ion-label>\n\t\t\t\t<ion-input type=\"number\" [(ngModel)]=\"Administration.vendor_phone\"></ion-input>\n\t\t\t</ion-item>\n        </ion-col>\n        <ion-col size=\"12\">\n\t\t\t<ion-item>\n\t\t\t\t<ion-label style=\"color: black;\" position=\"floating\">Fax *</ion-label>\n\t\t\t\t<ion-input type=\"number\" [(ngModel)]=\"Administration.vendor_fax\"></ion-input>\n\t\t\t</ion-item>\n        </ion-col>\n        <ion-col size=\"12\">\n\t\t\t<ion-item>\n\t\t\t\t<ion-label style=\"color: black;\" position=\"floating\">PIC *</ion-label>\n\t\t\t\t<ion-input type=\"text\" [(ngModel)]=\"StorageUser.fullname\"></ion-input>\n\t\t\t</ion-item>\n        </ion-col>\n        <ion-col size=\"12\">\n\t\t\t<ion-item>\n\t\t\t\t<ion-label style=\"color: black;\" position=\"floating\">Email *</ion-label>\n\t\t\t\t<ion-input type=\"text\" [(ngModel)]=\"Administration.vendor_email\"></ion-input>\n\t\t\t</ion-item>\n        </ion-col>\n        <ion-col size=\"12\">\n\t\t\t<ion-item>\n\t\t\t\t<ion-label style=\"color: black;\" position=\"floating\">Website *</ion-label>\n\t\t\t\t<ion-input type=\"text\" [(ngModel)]=\"Administration.vendor_website\"></ion-input>\n\t\t\t</ion-item>\n        </ion-col>\n        <ion-col size=\"12\">\n\t\t\t<ion-item>\n\t\t\t\t<ion-label style=\"color: black;\" position=\"floating\">Bidang Usaha *</ion-label>\n\t\t\t\t<ion-select mode=\"ios\" [(ngModel)]=\"Administration.business_field_id\" (ionChange)=\"GetByidAllCategory($event)\">\n                    <ion-select-option *ngFor=\"let vBusinessField of BusinessField\" value=\"{{ vBusinessField.business_field_id }}\">{{ vBusinessField.business_field_name }}</ion-select-option>\n                </ion-select>\n\t\t\t</ion-item>\n        </ion-col>\n        <ng-template [ngIf]=\"CategoryCondition != null && CategoryCondition != false\">\n            <ion-col size=\"12\">\n                <ion-item>\n                    <ion-label style=\"color: black;\" position=\"floating\">Kategori Bidang Usaha *</ion-label>\n                    <ion-select mode=\"ios\" [(ngModel)]=\"Administration.category_id\">\n                        <ion-select-option *ngFor=\"let vCategory of Category\" value=\"{{ vCategory.category_id }}\">{{ vCategory.category_name }}</ion-select-option>\n                    </ion-select>\n                </ion-item>\n            </ion-col>\n        </ng-template>\n        <ion-col size=\"12\">\n\t\t\t<ion-item>\n\t\t\t\t<ion-label style=\"color: black;\" position=\"floating\">Deskripsi Umum Perusahaan *</ion-label>\n\t\t\t\t<ion-input type=\"text\" [(ngModel)]=\"Administration.vendor_desc\"></ion-input>\n\t\t\t</ion-item>\n        </ion-col>\n        <ion-col size=\"12\">\n            <ng-template [ngIf]=\"AdministrationCondition == true\">\n                <ion-button expand=\"block\" mode=\"ios\" color=\"vendorposlog\" (click)=\"AdministrationProcess()\">Update Administration</ion-button>\n            </ng-template>\n            <ng-template [ngIf]=\"AdministrationCondition == false\">\n                <ion-button expand=\"block\" mode=\"ios\" color=\"vendorposlog\" (click)=\"AdministrationProcess()\">Save Administration</ion-button>\n            </ng-template>\n\t\t</ion-col>\n    </ion-row>\n</ion-content>\n";
      /***/
    },

    /***/
    "./src/app/administrasi/administrasi-routing.module.ts":
    /*!*************************************************************!*\
      !*** ./src/app/administrasi/administrasi-routing.module.ts ***!
      \*************************************************************/

    /*! exports provided: AdministrasiPageRoutingModule */

    /***/
    function srcAppAdministrasiAdministrasiRoutingModuleTs(module, __webpack_exports__, __webpack_require__) {
      "use strict";

      __webpack_require__.r(__webpack_exports__);
      /* harmony export (binding) */


      __webpack_require__.d(__webpack_exports__, "AdministrasiPageRoutingModule", function () {
        return AdministrasiPageRoutingModule;
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


      var _administrasi_page__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(
      /*! ./administrasi.page */
      "./src/app/administrasi/administrasi.page.ts");

      var routes = [{
        path: '',
        component: _administrasi_page__WEBPACK_IMPORTED_MODULE_3__["AdministrasiPage"]
      }];

      var AdministrasiPageRoutingModule = function AdministrasiPageRoutingModule() {
        _classCallCheck(this, AdministrasiPageRoutingModule);
      };

      AdministrasiPageRoutingModule = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
        imports: [_angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterModule"].forChild(routes)],
        exports: [_angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterModule"]]
      })], AdministrasiPageRoutingModule);
      /***/
    },

    /***/
    "./src/app/administrasi/administrasi.module.ts":
    /*!*****************************************************!*\
      !*** ./src/app/administrasi/administrasi.module.ts ***!
      \*****************************************************/

    /*! exports provided: AdministrasiPageModule */

    /***/
    function srcAppAdministrasiAdministrasiModuleTs(module, __webpack_exports__, __webpack_require__) {
      "use strict";

      __webpack_require__.r(__webpack_exports__);
      /* harmony export (binding) */


      __webpack_require__.d(__webpack_exports__, "AdministrasiPageModule", function () {
        return AdministrasiPageModule;
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


      var _administrasi_routing_module__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(
      /*! ./administrasi-routing.module */
      "./src/app/administrasi/administrasi-routing.module.ts");
      /* harmony import */


      var _administrasi_page__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(
      /*! ./administrasi.page */
      "./src/app/administrasi/administrasi.page.ts");

      var AdministrasiPageModule = function AdministrasiPageModule() {
        _classCallCheck(this, AdministrasiPageModule);
      };

      AdministrasiPageModule = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
        imports: [_angular_common__WEBPACK_IMPORTED_MODULE_2__["CommonModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_3__["FormsModule"], _ionic_angular__WEBPACK_IMPORTED_MODULE_4__["IonicModule"], _administrasi_routing_module__WEBPACK_IMPORTED_MODULE_5__["AdministrasiPageRoutingModule"]],
        declarations: [_administrasi_page__WEBPACK_IMPORTED_MODULE_6__["AdministrasiPage"]]
      })], AdministrasiPageModule);
      /***/
    },

    /***/
    "./src/app/administrasi/administrasi.page.scss":
    /*!*****************************************************!*\
      !*** ./src/app/administrasi/administrasi.page.scss ***!
      \*****************************************************/

    /*! exports provided: default */

    /***/
    function srcAppAdministrasiAdministrasiPageScss(module, __webpack_exports__, __webpack_require__) {
      "use strict";

      __webpack_require__.r(__webpack_exports__);
      /* harmony default export */


      __webpack_exports__["default"] = ".header-title {\n  font-size: 18px;\n  color: #ff8a35;\n}\n\n.ion-color-vendorposlog {\n  --ion-color-base: var(--ion-color-vendorposlog);\n  --ion-color-base-rgb: var(--ion-color-vendorposlog-rgb);\n  --ion-color-contrast: var(--ion-color-vendorposlog-contrast);\n  --ion-color-contrast-rgb: var(--ion-color-vendorposlog-contrast-rgb);\n  --ion-color-shade: var(--ion-color-vendorposlog-shade);\n  --ion-color-tint: var(--ion-color-vendorposlog-tint);\n}\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvYWRtaW5pc3RyYXNpL2FkbWluaXN0cmFzaS5wYWdlLnNjc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7RUFDSSxlQUFBO0VBQ0EsY0FBQTtBQUNKOztBQUNBO0VBQ0MsK0NBQUE7RUFDQSx1REFBQTtFQUNBLDREQUFBO0VBQ0Esb0VBQUE7RUFDQSxzREFBQTtFQUNBLG9EQUFBO0FBRUQiLCJmaWxlIjoic3JjL2FwcC9hZG1pbmlzdHJhc2kvYWRtaW5pc3RyYXNpLnBhZ2Uuc2NzcyIsInNvdXJjZXNDb250ZW50IjpbIi5oZWFkZXItdGl0bGV7XG4gICAgZm9udC1zaXplOiAxOHB4O1xuICAgIGNvbG9yOiAjZmY4YTM1O1xufVxuLmlvbi1jb2xvci12ZW5kb3Jwb3Nsb2cge1xuXHQtLWlvbi1jb2xvci1iYXNlOiB2YXIoLS1pb24tY29sb3ItdmVuZG9ycG9zbG9nKTtcblx0LS1pb24tY29sb3ItYmFzZS1yZ2I6IHZhcigtLWlvbi1jb2xvci12ZW5kb3Jwb3Nsb2ctcmdiKTtcblx0LS1pb24tY29sb3ItY29udHJhc3Q6IHZhcigtLWlvbi1jb2xvci12ZW5kb3Jwb3Nsb2ctY29udHJhc3QpO1xuXHQtLWlvbi1jb2xvci1jb250cmFzdC1yZ2I6IHZhcigtLWlvbi1jb2xvci12ZW5kb3Jwb3Nsb2ctY29udHJhc3QtcmdiKTtcblx0LS1pb24tY29sb3Itc2hhZGU6IHZhcigtLWlvbi1jb2xvci12ZW5kb3Jwb3Nsb2ctc2hhZGUpO1xuXHQtLWlvbi1jb2xvci10aW50OiB2YXIoLS1pb24tY29sb3ItdmVuZG9ycG9zbG9nLXRpbnQpO1xufSJdfQ== */";
      /***/
    },

    /***/
    "./src/app/administrasi/administrasi.page.ts":
    /*!***************************************************!*\
      !*** ./src/app/administrasi/administrasi.page.ts ***!
      \***************************************************/

    /*! exports provided: AdministrasiPage */

    /***/
    function srcAppAdministrasiAdministrasiPageTs(module, __webpack_exports__, __webpack_require__) {
      "use strict";

      __webpack_require__.r(__webpack_exports__);
      /* harmony export (binding) */


      __webpack_require__.d(__webpack_exports__, "AdministrasiPage", function () {
        return AdministrasiPage;
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

      var AdministrasiPage = /*#__PURE__*/function () {
        function AdministrasiPage(navCtrl, Router, loadingCtrl, alertCtrl, ApiserviceService, storage) {
          _classCallCheck(this, AdministrasiPage);

          this.navCtrl = navCtrl;
          this.Router = Router;
          this.loadingCtrl = loadingCtrl;
          this.alertCtrl = alertCtrl;
          this.ApiserviceService = ApiserviceService;
          this.storage = storage;
          this.StorageUser = {
            id_user: '',
            fullname: '',
            gender: '',
            email: '',
            level_id: '',
            job_title: '',
            password: ''
          };
          this.Administration = {
            vendor_name: '',
            address: '',
            postcode: '',
            vendor_fax: '',
            vendor_phone: '',
            vendor_email: '',
            vendor_website: '',
            business_field_id: '',
            category_id: '',
            vendor_desc: '',
            id_user: ''
          };
        }

        _createClass(AdministrasiPage, [{
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
                        _this.StorageUser.id_user = data.data.id_user;
                        _this.StorageUser.fullname = data.data.fullname;
                        _this.StorageUser.gender = data.data.gender;
                        _this.StorageUser.email = data.data.email;
                        _this.StorageUser.level_id = data.data.level_id;
                        _this.StorageUser.password = data.data.password;

                        _this.GetByidVendor(_this.StorageUser.id_user);
                      });
                      this.GetAllBusinessField();
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
          key: "GetByidVendor",
          value: function GetByidVendor(id_user) {
            var _this2 = this;

            this.ApiserviceService.GetByidVendor(id_user).then(function (data) {
              var Output = JSON.parse(JSON.stringify(data));
              _this2.AdministrationCondition = Output.condition;
              _this2.Administration.id_user = id_user;

              if (Output.condition == true) {
                _this2.Administration.vendor_name = Output.data.vendor_name;
                _this2.Administration.address = Output.data.address;
                _this2.Administration.postcode = Output.data.postcode;
                _this2.Administration.vendor_phone = Output.data.vendor_phone;
                _this2.Administration.vendor_fax = Output.data.vendor_fax;
                _this2.Administration.vendor_email = Output.data.vendor_email;
                _this2.Administration.vendor_website = Output.data.vendor_website;
                _this2.Administration.business_field_id = Output.data.business_field_id;
                _this2.Administration.vendor_desc = Output.data.vendor_desc;
                _this2.Administration.category_id = Output.data.category_id;
              }
            });
          }
        }, {
          key: "GetAllBusinessField",
          value: function GetAllBusinessField() {
            var _this3 = this;

            this.ApiserviceService.GetAllBusinessField().then(function (data) {
              var Output = JSON.parse(JSON.stringify(data));
              _this3.BusinessField = Output.data;
            });
          }
        }, {
          key: "GetByidAllCategory",
          value: function GetByidAllCategory(event) {
            var _this4 = this;

            this.ApiserviceService.GetByidAllCategory(event.detail.value).then(function (data) {
              var Output = JSON.parse(JSON.stringify(data));
              _this4.CategoryCondition = Output.condition;
              _this4.Category = Output.data;
            });
          }
        }, {
          key: "AdministrationProcess",
          value: function AdministrationProcess() {
            return Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__awaiter"])(this, void 0, void 0, /*#__PURE__*/regeneratorRuntime.mark(function _callee2() {
              var _this5 = this;

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

                      if (this.Administration.vendor_name != '' && this.Administration.address != '' && this.Administration.postcode != '' && this.Administration.vendor_phone != '' && this.Administration.vendor_fax != '' && this.Administration.id_user != '' && this.Administration.vendor_email != '' && this.Administration.vendor_website != '' && this.Administration.business_field_id != '' && this.Administration.vendor_desc != '') {
                        if (this.CategoryCondition == true && this.Administration.category_id != '') {
                          this.ApiserviceService.AdministrationProcess(this.Administration).then(function (data) {
                            var Output = JSON.parse(JSON.stringify(data));

                            if (Output.condition == true) {
                              Loading.dismiss();

                              _this5.presentAlert(Output.message);

                              _this5.ngOnInit();
                            } else {
                              Loading.dismiss();

                              _this5.presentAlert(Output.message);
                            }
                          });
                        } else {
                          if (this.CategoryCondition == false) {
                            this.Administration.category_id = '';
                            this.ApiserviceService.AdministrationProcess(this.Administration).then(function (data) {
                              var Output = JSON.parse(JSON.stringify(data));

                              if (Output.condition == true) {
                                Loading.dismiss();

                                _this5.presentAlert(Output.message);

                                _this5.ngOnInit();
                              } else {
                                Loading.dismiss();

                                _this5.presentAlert(Output.message);
                              }
                            });
                          } else {
                            Loading.dismiss();
                            this.presentAlert('Column cannot be null');
                          }
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

        return AdministrasiPage;
      }();

      AdministrasiPage.ctorParameters = function () {
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

      AdministrasiPage = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-administrasi',
        template: Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(
        /*! raw-loader!./administrasi.page.html */
        "./node_modules/raw-loader/dist/cjs.js!./src/app/administrasi/administrasi.page.html"))["default"],
        styles: [Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(
        /*! ./administrasi.page.scss */
        "./src/app/administrasi/administrasi.page.scss"))["default"]]
      })], AdministrasiPage);
      /***/
    }
  }]);
})();
//# sourceMappingURL=administrasi-administrasi-module-es5.js.map