(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["login-login-module"],{

/***/ "./node_modules/raw-loader/dist/cjs.js!./src/app/login/login.page.html":
/*!*****************************************************************************!*\
  !*** ./node_modules/raw-loader/dist/cjs.js!./src/app/login/login.page.html ***!
  \*****************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("<ion-content>\n\t<ion-row>\n\t\t<img src=\"../../assets/icon/logo-poslogistik-logo.png\" class=\"logo-login\">\n\t\t<ion-col size=\"12\">\n\t\t\t<ion-item lines=\"full\">\n\t\t\t\t<ion-label style=\"color: black;\" position=\"floating\">Email</ion-label>\n\t\t\t\t<ion-input type=\"email\" [(ngModel)]=\"DataStorage.email\"></ion-input>\n\t\t\t</ion-item>\n\t\t</ion-col>\n\t\t<ion-col size=\"12\">\n\t\t\t<ion-item lines=\"full\">\n\t\t\t\t<ion-label style=\"color: black;\" position=\"floating\">Password</ion-label>\n\t\t\t\t<ion-input type=\"password\" [(ngModel)]=\"DataStorage.password\"></ion-input>\n\t\t\t</ion-item>\n\t\t</ion-col>\n\t\t<ion-col size=\"12\">\n\t\t\t<p class=\"forgotpass-text\">Forgot Password ?</p>\n\t\t</ion-col>\n\t\t<ion-col size=\"12\">\n\t\t\t<ion-button expand=\"block\" mode=\"ios\" color=\"vendorposlog\" (click)=\"Login()\">Sign In</ion-button>\n\t\t</ion-col>\n\t\t<ion-col size=\"12\">\n\t\t\t<p class=\"signup-text\">New Account ? <a (click)=\"Regiter()\" class=\"a-default\"><b>Sign Up</b></a></p>\n\t\t</ion-col>\n\t</ion-row>\n</ion-content>\n<ion-footer class=\"ion-no-border\">\n\t<ion-toolbar>\n\t\t<ion-title style=\"font-size: 10px; text-align: center;\">\n\t\t\tCopyright &copy; PT Pos Logistik Indonesia<br>\n\t\t\t2020\n\t\t</ion-title>\n\t</ion-toolbar>\n</ion-footer>");

/***/ }),

/***/ "./src/app/login/login-routing.module.ts":
/*!***********************************************!*\
  !*** ./src/app/login/login-routing.module.ts ***!
  \***********************************************/
/*! exports provided: LoginPageRoutingModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "LoginPageRoutingModule", function() { return LoginPageRoutingModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/__ivy_ngcc__/fesm2015/core.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/__ivy_ngcc__/fesm2015/router.js");
/* harmony import */ var _login_page__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./login.page */ "./src/app/login/login.page.ts");




const routes = [
    {
        path: '',
        component: _login_page__WEBPACK_IMPORTED_MODULE_3__["LoginPage"]
    }
];
let LoginPageRoutingModule = class LoginPageRoutingModule {
};
LoginPageRoutingModule = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
        imports: [_angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterModule"].forChild(routes)],
        exports: [_angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterModule"]],
    })
], LoginPageRoutingModule);



/***/ }),

/***/ "./src/app/login/login.module.ts":
/*!***************************************!*\
  !*** ./src/app/login/login.module.ts ***!
  \***************************************/
/*! exports provided: LoginPageModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "LoginPageModule", function() { return LoginPageModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/__ivy_ngcc__/fesm2015/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/__ivy_ngcc__/fesm2015/common.js");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/__ivy_ngcc__/fesm2015/forms.js");
/* harmony import */ var _ionic_angular__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @ionic/angular */ "./node_modules/@ionic/angular/__ivy_ngcc__/fesm2015/ionic-angular.js");
/* harmony import */ var _login_routing_module__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./login-routing.module */ "./src/app/login/login-routing.module.ts");
/* harmony import */ var _login_page__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./login.page */ "./src/app/login/login.page.ts");







let LoginPageModule = class LoginPageModule {
};
LoginPageModule = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
        imports: [
            _angular_common__WEBPACK_IMPORTED_MODULE_2__["CommonModule"],
            _angular_forms__WEBPACK_IMPORTED_MODULE_3__["FormsModule"],
            _ionic_angular__WEBPACK_IMPORTED_MODULE_4__["IonicModule"],
            _login_routing_module__WEBPACK_IMPORTED_MODULE_5__["LoginPageRoutingModule"]
        ],
        declarations: [_login_page__WEBPACK_IMPORTED_MODULE_6__["LoginPage"]]
    })
], LoginPageModule);



/***/ }),

/***/ "./src/app/login/login.page.scss":
/*!***************************************!*\
  !*** ./src/app/login/login.page.scss ***!
  \***************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = (".logo-login {\n  margin-bottom: 40px;\n  margin-top: 40px;\n  margin-left: auto;\n  margin-right: auto;\n  display: block;\n  height: 50px;\n  width: 150px;\n}\n\n.forgotpass-text {\n  color: #ff8a35;\n  font-weight: bold;\n  text-align: right;\n}\n\n.signup-text {\n  text-align: center;\n}\n\n.a-default {\n  color: #ff8a35;\n  text-decoration: none;\n}\n\n.ion-color-vendorposlog {\n  --ion-color-base: var(--ion-color-vendorposlog);\n  --ion-color-base-rgb: var(--ion-color-vendorposlog-rgb);\n  --ion-color-contrast: var(--ion-color-vendorposlog-contrast);\n  --ion-color-contrast-rgb: var(--ion-color-vendorposlog-contrast-rgb);\n  --ion-color-shade: var(--ion-color-vendorposlog-shade);\n  --ion-color-tint: var(--ion-color-vendorposlog-tint);\n}\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvbG9naW4vbG9naW4ucGFnZS5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0VBQ0MsbUJBQUE7RUFDQSxnQkFBQTtFQUNBLGlCQUFBO0VBQ0Esa0JBQUE7RUFDQSxjQUFBO0VBQ0EsWUFBQTtFQUNBLFlBQUE7QUFDRDs7QUFDQTtFQUNDLGNBQUE7RUFDQSxpQkFBQTtFQUNBLGlCQUFBO0FBRUQ7O0FBQUE7RUFDQyxrQkFBQTtBQUdEOztBQURBO0VBQ0MsY0FBQTtFQUNBLHFCQUFBO0FBSUQ7O0FBRkE7RUFDQywrQ0FBQTtFQUNBLHVEQUFBO0VBQ0EsNERBQUE7RUFDQSxvRUFBQTtFQUNBLHNEQUFBO0VBQ0Esb0RBQUE7QUFLRCIsImZpbGUiOiJzcmMvYXBwL2xvZ2luL2xvZ2luLnBhZ2Uuc2NzcyIsInNvdXJjZXNDb250ZW50IjpbIi5sb2dvLWxvZ2lue1xuXHRtYXJnaW4tYm90dG9tOiA0MHB4O1xuXHRtYXJnaW4tdG9wOiA0MHB4O1xuXHRtYXJnaW4tbGVmdDogYXV0bztcblx0bWFyZ2luLXJpZ2h0OiBhdXRvO1xuXHRkaXNwbGF5OmJsb2NrO1xuXHRoZWlnaHQ6IDUwcHg7XG5cdHdpZHRoOiAxNTBweDtcbn1cbi5mb3Jnb3RwYXNzLXRleHR7XG5cdGNvbG9yOiAjZmY4YTM1O1xuXHRmb250LXdlaWdodDogYm9sZDtcblx0dGV4dC1hbGlnbjogcmlnaHQ7XG59XG4uc2lnbnVwLXRleHR7XG5cdHRleHQtYWxpZ246IGNlbnRlcjtcbn1cbi5hLWRlZmF1bHR7XG5cdGNvbG9yOiAjZmY4YTM1O1xuXHR0ZXh0LWRlY29yYXRpb246bm9uZTtcbn1cbi5pb24tY29sb3ItdmVuZG9ycG9zbG9nIHtcblx0LS1pb24tY29sb3ItYmFzZTogdmFyKC0taW9uLWNvbG9yLXZlbmRvcnBvc2xvZyk7XG5cdC0taW9uLWNvbG9yLWJhc2UtcmdiOiB2YXIoLS1pb24tY29sb3ItdmVuZG9ycG9zbG9nLXJnYik7XG5cdC0taW9uLWNvbG9yLWNvbnRyYXN0OiB2YXIoLS1pb24tY29sb3ItdmVuZG9ycG9zbG9nLWNvbnRyYXN0KTtcblx0LS1pb24tY29sb3ItY29udHJhc3QtcmdiOiB2YXIoLS1pb24tY29sb3ItdmVuZG9ycG9zbG9nLWNvbnRyYXN0LXJnYik7XG5cdC0taW9uLWNvbG9yLXNoYWRlOiB2YXIoLS1pb24tY29sb3ItdmVuZG9ycG9zbG9nLXNoYWRlKTtcblx0LS1pb24tY29sb3ItdGludDogdmFyKC0taW9uLWNvbG9yLXZlbmRvcnBvc2xvZy10aW50KTtcbn0iXX0= */");

/***/ }),

/***/ "./src/app/login/login.page.ts":
/*!*************************************!*\
  !*** ./src/app/login/login.page.ts ***!
  \*************************************/
/*! exports provided: LoginPage */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "LoginPage", function() { return LoginPage; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/__ivy_ngcc__/fesm2015/core.js");
/* harmony import */ var _ionic_angular__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @ionic/angular */ "./node_modules/@ionic/angular/__ivy_ngcc__/fesm2015/ionic-angular.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/__ivy_ngcc__/fesm2015/router.js");
/* harmony import */ var _ionic_storage__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @ionic/storage */ "./node_modules/@ionic/storage/__ivy_ngcc__/fesm2015/ionic-storage.js");
/* harmony import */ var _apiservice_apiservice_service__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../apiservice/apiservice.service */ "./src/app/apiservice/apiservice.service.ts");






let LoginPage = class LoginPage {
    constructor(navCtrl, Router, loadingCtrl, alertCtrl, ApiserviceService, storage) {
        this.navCtrl = navCtrl;
        this.Router = Router;
        this.loadingCtrl = loadingCtrl;
        this.alertCtrl = alertCtrl;
        this.ApiserviceService = ApiserviceService;
        this.storage = storage;
        this.DataStorage = { email: '', password: '' };
    }
    ngOnInit() {
    }
    Login() {
        return Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__awaiter"])(this, void 0, void 0, function* () {
            let Loading = yield this.loadingCtrl.create({
                mode: 'ios'
            });
            Loading.present();
            if (this.DataStorage.email != '' && this.DataStorage.password != '') {
                this.ApiserviceService.GetByidUser(this.DataStorage).then(data => {
                    let Output = JSON.parse(JSON.stringify(data));
                    if (Output.condition == true) {
                        this.storage.set('storage_poslogvendor', Output).then(val => {
                            if (val.condition) {
                                Loading.dismiss();
                                this.presentAlert(Output.message);
                                this.Router.navigate(['home']);
                            }
                            else {
                                Loading.dismiss();
                                this.presentAlert('Storage cannot return');
                            }
                        });
                    }
                    else {
                        Loading.dismiss();
                        this.presentAlert(Output.message);
                    }
                });
            }
            else {
                Loading.dismiss();
                this.presentAlert('Email & Password cannot be null');
            }
        });
    }
    Regiter() {
        this.Router.navigate(['register']);
    }
    presentAlert(Msg) {
        return Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__awaiter"])(this, void 0, void 0, function* () {
            let Alert = yield this.alertCtrl.create({
                mode: 'ios',
                message: Msg,
                buttons: ['OK']
            });
            Alert.present();
        });
    }
};
LoginPage.ctorParameters = () => [
    { type: _ionic_angular__WEBPACK_IMPORTED_MODULE_2__["NavController"] },
    { type: _angular_router__WEBPACK_IMPORTED_MODULE_3__["Router"] },
    { type: _ionic_angular__WEBPACK_IMPORTED_MODULE_2__["LoadingController"] },
    { type: _ionic_angular__WEBPACK_IMPORTED_MODULE_2__["AlertController"] },
    { type: _apiservice_apiservice_service__WEBPACK_IMPORTED_MODULE_5__["ApiserviceService"] },
    { type: _ionic_storage__WEBPACK_IMPORTED_MODULE_4__["Storage"] }
];
LoginPage = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-login',
        template: Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! raw-loader!./login.page.html */ "./node_modules/raw-loader/dist/cjs.js!./src/app/login/login.page.html")).default,
        styles: [Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! ./login.page.scss */ "./src/app/login/login.page.scss")).default]
    })
], LoginPage);



/***/ })

}]);
//# sourceMappingURL=login-login-module-es2015.js.map