(function () {
  function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

  function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

  function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  (window["webpackJsonp"] = window["webpackJsonp"] || []).push([["home-home-module"], {
    /***/
    "./node_modules/raw-loader/dist/cjs.js!./src/app/home/home.page.html":
    /*!***************************************************************************!*\
      !*** ./node_modules/raw-loader/dist/cjs.js!./src/app/home/home.page.html ***!
      \***************************************************************************/

    /*! exports provided: default */

    /***/
    function node_modulesRawLoaderDistCjsJsSrcAppHomeHomePageHtml(module, __webpack_exports__, __webpack_require__) {
      "use strict";

      __webpack_require__.r(__webpack_exports__);
      /* harmony default export */


      __webpack_exports__["default"] = "<ion-content padding>\n    <ion-row class=\"welcome-row\">\n        <ion-col class=\"welcome-col\">\n            <h2>Welcome</h2>\n            <p>{{ Storage.fullname }}</p>\n        </ion-col>\n        <ion-col size=\"12\">\n            <ion-card class=\"profile-card\">\n                <ion-card-content>\n                    <ion-item lines=\"none\">\n                        <p style=\"font-size: 12px;\" slot=\"start\">\n                            {{ Administration.vendor_name }}<br>\n                            {{ Administration.vendor_phone }}<br>\n                            {{ Administration.vendor_email }}\n                        </p>\n                        <ion-row slot=\"end\">\n                            <ion-col class=\"profile-col\" (click)=\"Profile()\">\n                                <ion-icon class=\"profile-icon\" color=\"vendorposlog\" name=\"person\"></ion-icon>\n                                <p>My Account</p>\n                            </ion-col>\n                        </ion-row>\n                    </ion-item>\n                </ion-card-content>\n            </ion-card>\n        </ion-col>\n    </ion-row>\n    <ion-row class=\"status-row\">\n        <ion-col size=\"12\">\n            <ng-template [ngIf]=\"Administration.vendor_status == '1'\">\n                <ion-card class=\"status-card\">\n                    <ion-card-content>\n                        <ion-item class=\"status-item\">\n                            <p>\n                                <b>{{ Administration.vendor_name }}</b><br>\n                                <b>Belum Terverifikasi</b><br>\n                                Selamat anda telah terrecord dalam sistem kami dan sedang kami verifikasi\n                            </p>\n                        </ion-item>\n                    </ion-card-content>\n                </ion-card>\n            </ng-template>\n            <ng-template [ngIf]=\"Administration.vendor_status == '0'\">\n                <ion-card class=\"status-card\">\n                    <ion-card-content>\n                        <ion-item class=\"status-item\">\n                            <p>\n                                <b>{{ Storage.fullname }}</b><br>\n                                <b>Pendaftaran Perusahaan</b><br>\n                                Lakukan pendaftaran perusahaan pada menu Administrasi segera !\n                            </p>\n                        </ion-item>\n                    </ion-card-content>\n                </ion-card>\n            </ng-template>\n        </ion-col>\n    </ion-row>\n    <ion-row class=\"menu-row\">\n        <ion-col size=\"3\" class=\"menu-col\">\n            <a class=\"menu-href\" (click)=\"Administrasi()\">\n                <ion-icon name=\"newspaper-outline\" class=\"menu-icon\"></ion-icon>\n                <p>Administrasi</p>\n            </a>\n        </ion-col>\n        <ion-col size=\"3\" class=\"menu-col\">\n            <a class=\"menu-href\" (click)=\"Document()\">\n                <ion-icon name=\"document-text-outline\" class=\"menu-icon\"></ion-icon>\n                <p>Dokumen</p>\n            </a>\n        </ion-col>\n        <ion-col size=\"3\" class=\"menu-col\">\n            <a class=\"menu-href\">\n                <ion-icon name=\"briefcase-outline\" class=\"menu-icon\"></ion-icon>\n                <p>Aset</p>\n            </a>\n        </ion-col>\n    </ion-row>\n</ion-content>\n";
      /***/
    },

    /***/
    "./src/app/home/home-routing.module.ts":
    /*!*********************************************!*\
      !*** ./src/app/home/home-routing.module.ts ***!
      \*********************************************/

    /*! exports provided: HomePageRoutingModule */

    /***/
    function srcAppHomeHomeRoutingModuleTs(module, __webpack_exports__, __webpack_require__) {
      "use strict";

      __webpack_require__.r(__webpack_exports__);
      /* harmony export (binding) */


      __webpack_require__.d(__webpack_exports__, "HomePageRoutingModule", function () {
        return HomePageRoutingModule;
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


      var _home_page__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(
      /*! ./home.page */
      "./src/app/home/home.page.ts");

      var routes = [{
        path: '',
        component: _home_page__WEBPACK_IMPORTED_MODULE_3__["HomePage"]
      }];

      var HomePageRoutingModule = function HomePageRoutingModule() {
        _classCallCheck(this, HomePageRoutingModule);
      };

      HomePageRoutingModule = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
        imports: [_angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterModule"].forChild(routes)],
        exports: [_angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterModule"]]
      })], HomePageRoutingModule);
      /***/
    },

    /***/
    "./src/app/home/home.module.ts":
    /*!*************************************!*\
      !*** ./src/app/home/home.module.ts ***!
      \*************************************/

    /*! exports provided: HomePageModule */

    /***/
    function srcAppHomeHomeModuleTs(module, __webpack_exports__, __webpack_require__) {
      "use strict";

      __webpack_require__.r(__webpack_exports__);
      /* harmony export (binding) */


      __webpack_require__.d(__webpack_exports__, "HomePageModule", function () {
        return HomePageModule;
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


      var _ionic_angular__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(
      /*! @ionic/angular */
      "./node_modules/@ionic/angular/__ivy_ngcc__/fesm2015/ionic-angular.js");
      /* harmony import */


      var _angular_forms__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(
      /*! @angular/forms */
      "./node_modules/@angular/forms/__ivy_ngcc__/fesm2015/forms.js");
      /* harmony import */


      var _home_page__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(
      /*! ./home.page */
      "./src/app/home/home.page.ts");
      /* harmony import */


      var _home_routing_module__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(
      /*! ./home-routing.module */
      "./src/app/home/home-routing.module.ts");

      var HomePageModule = function HomePageModule() {
        _classCallCheck(this, HomePageModule);
      };

      HomePageModule = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
        imports: [_angular_common__WEBPACK_IMPORTED_MODULE_2__["CommonModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_4__["FormsModule"], _ionic_angular__WEBPACK_IMPORTED_MODULE_3__["IonicModule"], _home_routing_module__WEBPACK_IMPORTED_MODULE_6__["HomePageRoutingModule"]],
        declarations: [_home_page__WEBPACK_IMPORTED_MODULE_5__["HomePage"]]
      })], HomePageModule);
      /***/
    },

    /***/
    "./src/app/home/home.page.scss":
    /*!*************************************!*\
      !*** ./src/app/home/home.page.scss ***!
      \*************************************/

    /*! exports provided: default */

    /***/
    function srcAppHomeHomePageScss(module, __webpack_exports__, __webpack_require__) {
      "use strict";

      __webpack_require__.r(__webpack_exports__);
      /* harmony default export */


      __webpack_exports__["default"] = ".welcome-row {\n  background: linear-gradient(162deg, rgba(56, 70, 108, 0.8) 20%, rgba(56, 70, 108, 0.8) 100%), url('national-transport.jpg') no-repeat;\n  background-size: 100% 200px;\n  height: 200px;\n}\n\n.welcome-col {\n  margin-left: auto;\n  margin-right: auto;\n  padding-top: 10px;\n}\n\n.welcome-col p {\n  text-align: center;\n  color: #ffffff;\n  font-size: 15px;\n  font-weight: bold;\n}\n\n.welcome-col h2 {\n  text-align: center;\n  color: #ffffff;\n  font-weight: bold;\n}\n\n.profile-col {\n  margin-left: auto;\n  margin-right: auto;\n  text-align: center;\n}\n\n.profile-icon {\n  width: 30px;\n  height: 30px;\n}\n\n.profile-card {\n  border-radius: 15px;\n  box-shadow: 0px 0px 17px 0px rgba(255, 137, 53, 0.55);\n}\n\n.menu-col {\n  margin-left: auto;\n  margin-right: auto;\n  border: solid 3px #ff8a35;\n  border-radius: 15px;\n  text-align: center;\n  font-size: 12px;\n}\n\n.menu-row {\n  margin-top: 20px;\n  padding-top: 50px;\n}\n\n.menu-icon {\n  width: 30px;\n  height: 30px;\n}\n\n.menu-href {\n  color: #d22429;\n}\n\n.status-row {\n  margin-top: 20px;\n  padding-top: 10px;\n}\n\n.status-card {\n  border-radius: 15px;\n  box-shadow: 0px 0px 17px 0px rgba(255, 137, 53, 0.55);\n}\n\n.status-item p {\n  margin-left: auto;\n  margin-right: auto;\n  font-size: 15px;\n  text-align: center;\n}\n\n.ion-color-vendorposlog {\n  --ion-color-base: var(--ion-color-vendorposlog);\n  --ion-color-base-rgb: var(--ion-color-vendorposlog-rgb);\n  --ion-color-contrast: var(--ion-color-vendorposlog-contrast);\n  --ion-color-contrast-rgb: var(--ion-color-vendorposlog-contrast-rgb);\n  --ion-color-shade: var(--ion-color-vendorposlog-shade);\n  --ion-color-tint: var(--ion-color-vendorposlog-tint);\n}\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvaG9tZS9ob21lLnBhZ2Uuc2NzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtFQUNFLHFJQUFBO0VBQ0EsMkJBQUE7RUFDQSxhQUFBO0FBQ0Y7O0FBQ0E7RUFDRSxpQkFBQTtFQUNBLGtCQUFBO0VBQ0EsaUJBQUE7QUFFRjs7QUFBQTtFQUNFLGtCQUFBO0VBQ0EsY0FBQTtFQUNBLGVBQUE7RUFDQSxpQkFBQTtBQUdGOztBQURBO0VBQ0Usa0JBQUE7RUFDQSxjQUFBO0VBQ0EsaUJBQUE7QUFJRjs7QUFGQTtFQUNFLGlCQUFBO0VBQ0Esa0JBQUE7RUFDQSxrQkFBQTtBQUtGOztBQUhBO0VBQ0UsV0FBQTtFQUNBLFlBQUE7QUFNRjs7QUFKQTtFQUNFLG1CQUFBO0VBR0EscURBQUE7QUFPRjs7QUFMQTtFQUNFLGlCQUFBO0VBQ0Esa0JBQUE7RUFDQSx5QkFBQTtFQUNBLG1CQUFBO0VBQ0Esa0JBQUE7RUFDQSxlQUFBO0FBUUY7O0FBTkE7RUFDRSxnQkFBQTtFQUNBLGlCQUFBO0FBU0Y7O0FBUEE7RUFDRSxXQUFBO0VBQ0EsWUFBQTtBQVVGOztBQVJBO0VBQ0UsY0FBQTtBQVdGOztBQVJBO0VBQ0UsZ0JBQUE7RUFDQSxpQkFBQTtBQVdGOztBQVJBO0VBQ0UsbUJBQUE7RUFHQSxxREFBQTtBQVdGOztBQVRBO0VBQ0UsaUJBQUE7RUFDQSxrQkFBQTtFQUNBLGVBQUE7RUFDQSxrQkFBQTtBQVlGOztBQVZBO0VBQ0MsK0NBQUE7RUFDQSx1REFBQTtFQUNBLDREQUFBO0VBQ0Esb0VBQUE7RUFDQSxzREFBQTtFQUNBLG9EQUFBO0FBYUQiLCJmaWxlIjoic3JjL2FwcC9ob21lL2hvbWUucGFnZS5zY3NzIiwic291cmNlc0NvbnRlbnQiOlsiLndlbGNvbWUtcm93e1xuICBiYWNrZ3JvdW5kOiBsaW5lYXItZ3JhZGllbnQoMTYyZGVnLCByZ2JhKDU2LCA3MCwgMTA4LCAuOCkgMjAlLCByZ2JhKDU2LCA3MCwgMTA4LCAuOCkgMTAwJSksIHVybCgnLi4vLi4vYXNzZXRzL2ltYWdlcy9uYXRpb25hbC10cmFuc3BvcnQuanBnJykgbm8tcmVwZWF0O1xuICBiYWNrZ3JvdW5kLXNpemU6IDEwMCUgMjAwcHg7XG4gIGhlaWdodDogMjAwcHg7XG59XG4ud2VsY29tZS1jb2x7XG4gIG1hcmdpbi1sZWZ0OiBhdXRvO1xuICBtYXJnaW4tcmlnaHQ6IGF1dG87XG4gIHBhZGRpbmctdG9wOiAxMHB4O1xufVxuLndlbGNvbWUtY29sIHB7XG4gIHRleHQtYWxpZ246IGNlbnRlcjtcbiAgY29sb3I6ICNmZmZmZmY7XG4gIGZvbnQtc2l6ZTogMTVweDtcbiAgZm9udC13ZWlnaHQ6IGJvbGQ7XG59XG4ud2VsY29tZS1jb2wgaDJ7XG4gIHRleHQtYWxpZ246IGNlbnRlcjtcbiAgY29sb3I6ICNmZmZmZmY7XG4gIGZvbnQtd2VpZ2h0OiBib2xkO1xufVxuLnByb2ZpbGUtY29se1xuICBtYXJnaW4tbGVmdDogYXV0bztcbiAgbWFyZ2luLXJpZ2h0OiBhdXRvO1xuICB0ZXh0LWFsaWduOiBjZW50ZXI7XG59XG4ucHJvZmlsZS1pY29ue1xuICB3aWR0aDogMzBweDtcbiAgaGVpZ2h0OiAzMHB4O1xufVxuLnByb2ZpbGUtY2FyZHtcbiAgYm9yZGVyLXJhZGl1czogMTVweDtcbiAgLXdlYmtpdC1ib3gtc2hhZG93OiAwcHggMHB4IDE3cHggMHB4IHJnYmEoMjU1LDEzNyw1MywwLjUzKTtcbiAgLW1vei1ib3gtc2hhZG93OiAwcHggMHB4IDE3cHggMHB4IHJnYmEoMjU1LDEzNyw1MywwLjUzKTtcbiAgYm94LXNoYWRvdzogMHB4IDBweCAxN3B4IDBweCByZ2JhKDI1NSwxMzcsNTMsMC41NSk7XG59XG4ubWVudS1jb2x7XG4gIG1hcmdpbi1sZWZ0OiBhdXRvO1xuICBtYXJnaW4tcmlnaHQ6IGF1dG87XG4gIGJvcmRlcjogc29saWQgM3B4ICNmZjhhMzU7XG4gIGJvcmRlci1yYWRpdXM6IDE1cHg7XG4gIHRleHQtYWxpZ246IGNlbnRlcjtcbiAgZm9udC1zaXplOiAxMnB4O1xufVxuLm1lbnUtcm93e1xuICBtYXJnaW4tdG9wOiAyMHB4O1xuICBwYWRkaW5nLXRvcDogNTBweDtcbn1cbi5tZW51LWljb257XG4gIHdpZHRoOiAzMHB4O1xuICBoZWlnaHQ6IDMwcHg7XG59XG4ubWVudS1ocmVme1xuICBjb2xvcjogI2QyMjQyOTtcbn1cblxuLnN0YXR1cy1yb3d7XG4gIG1hcmdpbi10b3A6IDIwcHg7XG4gIHBhZGRpbmctdG9wOiAxMHB4O1xufVxuXG4uc3RhdHVzLWNhcmR7XG4gIGJvcmRlci1yYWRpdXM6IDE1cHg7XG4gIC13ZWJraXQtYm94LXNoYWRvdzogMHB4IDBweCAxN3B4IDBweCByZ2JhKDI1NSwxMzcsNTMsMC41Myk7XG4gIC1tb3otYm94LXNoYWRvdzogMHB4IDBweCAxN3B4IDBweCByZ2JhKDI1NSwxMzcsNTMsMC41Myk7XG4gIGJveC1zaGFkb3c6IDBweCAwcHggMTdweCAwcHggcmdiYSgyNTUsMTM3LDUzLDAuNTUpO1xufVxuLnN0YXR1cy1pdGVtIHB7XG4gIG1hcmdpbi1sZWZ0OiBhdXRvO1xuICBtYXJnaW4tcmlnaHQ6IGF1dG87XG4gIGZvbnQtc2l6ZTogMTVweDsgXG4gIHRleHQtYWxpZ246IGNlbnRlcjtcbn1cbi5pb24tY29sb3ItdmVuZG9ycG9zbG9nIHtcblx0LS1pb24tY29sb3ItYmFzZTogdmFyKC0taW9uLWNvbG9yLXZlbmRvcnBvc2xvZyk7XG5cdC0taW9uLWNvbG9yLWJhc2UtcmdiOiB2YXIoLS1pb24tY29sb3ItdmVuZG9ycG9zbG9nLXJnYik7XG5cdC0taW9uLWNvbG9yLWNvbnRyYXN0OiB2YXIoLS1pb24tY29sb3ItdmVuZG9ycG9zbG9nLWNvbnRyYXN0KTtcblx0LS1pb24tY29sb3ItY29udHJhc3QtcmdiOiB2YXIoLS1pb24tY29sb3ItdmVuZG9ycG9zbG9nLWNvbnRyYXN0LXJnYik7XG5cdC0taW9uLWNvbG9yLXNoYWRlOiB2YXIoLS1pb24tY29sb3ItdmVuZG9ycG9zbG9nLXNoYWRlKTtcblx0LS1pb24tY29sb3ItdGludDogdmFyKC0taW9uLWNvbG9yLXZlbmRvcnBvc2xvZy10aW50KTtcbn0iXX0= */";
      /***/
    },

    /***/
    "./src/app/home/home.page.ts":
    /*!***********************************!*\
      !*** ./src/app/home/home.page.ts ***!
      \***********************************/

    /*! exports provided: HomePage */

    /***/
    function srcAppHomeHomePageTs(module, __webpack_exports__, __webpack_require__) {
      "use strict";

      __webpack_require__.r(__webpack_exports__);
      /* harmony export (binding) */


      __webpack_require__.d(__webpack_exports__, "HomePage", function () {
        return HomePage;
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

      var HomePage = /*#__PURE__*/function () {
        function HomePage(navCtrl, Router, loadingCtrl, alertCtrl, ApiserviceService, storage) {
          _classCallCheck(this, HomePage);

          this.navCtrl = navCtrl;
          this.Router = Router;
          this.loadingCtrl = loadingCtrl;
          this.alertCtrl = alertCtrl;
          this.ApiserviceService = ApiserviceService;
          this.storage = storage;
          this.Storage = {
            id_user: '',
            fullname: '',
            gender: '',
            email: '',
            level_id: '',
            job_title: ''
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
            id_user: '',
            vendor_status: ''
          };
        }

        _createClass(HomePage, [{
          key: "ngOnInit",
          value: function ngOnInit() {}
        }, {
          key: "ionViewWillEnter",
          value: function ionViewWillEnter() {
            var _this = this;

            this.storage.get('storage_poslogvendor').then(function (data) {
              _this.Storage.id_user = data.data.id_user;
              _this.Storage.fullname = data.data.fullname;
              _this.Storage.email = data.data.email;

              _this.GetByidVendor(_this.Storage.id_user);
            });
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
                _this2.Administration.vendor_status = Output.data.vendor_status;
              } else {
                _this2.Administration.vendor_name = 'Company Name';
                _this2.Administration.vendor_phone = 'Company Contact';
                _this2.Administration.vendor_email = 'Company Email';
                _this2.Administration.vendor_status = '0';
              }
            });
          }
        }, {
          key: "Profile",
          value: function Profile() {
            this.Router.navigate(['profile']);
          }
        }, {
          key: "Administrasi",
          value: function Administrasi() {
            this.Router.navigate(['administrasi']);
          }
        }, {
          key: "Document",
          value: function Document() {
            this.Router.navigate(['document']);
          }
        }]);

        return HomePage;
      }();

      HomePage.ctorParameters = function () {
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

      HomePage = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-home',
        template: Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(
        /*! raw-loader!./home.page.html */
        "./node_modules/raw-loader/dist/cjs.js!./src/app/home/home.page.html"))["default"],
        styles: [Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(
        /*! ./home.page.scss */
        "./src/app/home/home.page.scss"))["default"]]
      })], HomePage);
      /***/
    }
  }]);
})();
//# sourceMappingURL=home-home-module-es5.js.map