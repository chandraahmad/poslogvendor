(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["profile-profile-module"],{

/***/ "./node_modules/raw-loader/dist/cjs.js!./src/app/profile/profile.page.html":
/*!*********************************************************************************!*\
  !*** ./node_modules/raw-loader/dist/cjs.js!./src/app/profile/profile.page.html ***!
  \*********************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("<ion-header>\n    <ion-toolbar>\n        <ion-buttons slot=\"start\">\n            <ion-back-button color=\"vendorposlog\" text=\"\" icon=\"arrow-back-outline\" defaultHref=\"/home\"></ion-back-button>\n        </ion-buttons>\n        <ion-title class=\"header-title\">My Account</ion-title>\n    </ion-toolbar>\n</ion-header>\n\n<ion-content>\n    <ion-row>\n        <ion-col size=\"12\" class=\"profile-image\">\n            <img src=\"https://meterai.posindonesia.co.id/image/man.svg\" alt=\"Edit Profile\"><br>\n            <ion-button shape=\"round\" fill=\"outline\" mode=\"ios\" size=\"small\" color=\"vendorposlog\" (click)=\"UpdateImage()\"><ion-icon name=\"create\" color=\"vendorposlog\"></ion-icon></ion-button>\n        </ion-col>\n        <ion-col size=\"12\">\n            <ion-list>\n                <ion-list-header>\n                    <ion-label style=\"font-size: 15px;\">My Profile</ion-label>\n                    <ion-button shape=\"round\" fill=\"outline\" mode=\"ios\" size=\"small\" color=\"vendorposlog\" (click)=\"UpdateProfile()\"><ion-icon name=\"create\" color=\"vendorposlog\"></ion-icon></ion-button>\n                </ion-list-header>\n                <ion-item>\n                    <ion-label>\n                        <p class=\"profile-font\">Full Name</p>\n\t                    <h2 class=\"profile-font\">{{Storage.fullname}}</h2>\n                    </ion-label>\n                </ion-item>\n                <ion-item>\n                    <ion-label>\n                        <p class=\"profile-font\">Gender</p>\n\t                    <h2 class=\"profile-font\">{{Storage.gender}}</h2>\n                    </ion-label>\n                </ion-item>\n                <ion-item>\n                    <ion-label>\n                        <p class=\"profile-font\">Email</p>\n\t                    <h2 class=\"profile-font\">{{Storage.email}}</h2>\n                    </ion-label>\n                </ion-item>\n            </ion-list>\n            <ion-list>\n                <ion-list-header>\n                    <ion-label style=\"font-size: 15px;\">Your Password</ion-label>\n                    <ion-button shape=\"round\" fill=\"outline\" mode=\"ios\" size=\"small\" color=\"vendorposlog\" (click)=\"UpdatePassword()\"><ion-icon name=\"create\" color=\"vendorposlog\"></ion-icon></ion-button>\n                </ion-list-header>\n                <ion-item>\n                    <ion-label>\n                        <h2 class=\"profile-font\">*********</h2>\n                    </ion-label>\n                </ion-item>\n                <ion-item (click)=\"Logout()\">\n                    <ion-icon name=\"log-out-outline\"></ion-icon>\n                    <ion-label style=\"font-size: 15px; margin-left: 10px;\">Logout</ion-label>\n                </ion-item>\n            </ion-list>\n        </ion-col>\n    </ion-row>\n</ion-content>\n");

/***/ }),

/***/ "./src/app/profile/profile-routing.module.ts":
/*!***************************************************!*\
  !*** ./src/app/profile/profile-routing.module.ts ***!
  \***************************************************/
/*! exports provided: ProfilePageRoutingModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ProfilePageRoutingModule", function() { return ProfilePageRoutingModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/__ivy_ngcc__/fesm2015/core.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/__ivy_ngcc__/fesm2015/router.js");
/* harmony import */ var _profile_page__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./profile.page */ "./src/app/profile/profile.page.ts");




const routes = [
    {
        path: '',
        component: _profile_page__WEBPACK_IMPORTED_MODULE_3__["ProfilePage"]
    }
];
let ProfilePageRoutingModule = class ProfilePageRoutingModule {
};
ProfilePageRoutingModule = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
        imports: [_angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterModule"].forChild(routes)],
        exports: [_angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterModule"]],
    })
], ProfilePageRoutingModule);



/***/ }),

/***/ "./src/app/profile/profile.module.ts":
/*!*******************************************!*\
  !*** ./src/app/profile/profile.module.ts ***!
  \*******************************************/
/*! exports provided: ProfilePageModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ProfilePageModule", function() { return ProfilePageModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/__ivy_ngcc__/fesm2015/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/__ivy_ngcc__/fesm2015/common.js");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/__ivy_ngcc__/fesm2015/forms.js");
/* harmony import */ var _ionic_angular__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @ionic/angular */ "./node_modules/@ionic/angular/__ivy_ngcc__/fesm2015/ionic-angular.js");
/* harmony import */ var _profile_routing_module__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./profile-routing.module */ "./src/app/profile/profile-routing.module.ts");
/* harmony import */ var _profile_page__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./profile.page */ "./src/app/profile/profile.page.ts");







let ProfilePageModule = class ProfilePageModule {
};
ProfilePageModule = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
        imports: [
            _angular_common__WEBPACK_IMPORTED_MODULE_2__["CommonModule"],
            _angular_forms__WEBPACK_IMPORTED_MODULE_3__["FormsModule"],
            _ionic_angular__WEBPACK_IMPORTED_MODULE_4__["IonicModule"],
            _profile_routing_module__WEBPACK_IMPORTED_MODULE_5__["ProfilePageRoutingModule"]
        ],
        declarations: [_profile_page__WEBPACK_IMPORTED_MODULE_6__["ProfilePage"]]
    })
], ProfilePageModule);



/***/ }),

/***/ "./src/app/profile/profile.page.scss":
/*!*******************************************!*\
  !*** ./src/app/profile/profile.page.scss ***!
  \*******************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = (".header-title {\n  font-size: 18px;\n  color: #ff8a35;\n}\n\n.profile-image {\n  padding-top: 30px;\n  margin-left: auto;\n  margin-right: auto;\n  text-align: center;\n}\n\n.profile-image img {\n  width: 90px;\n  height: 90px;\n}\n\n.profile-font {\n  font-size: 12px;\n}\n\n.ion-color-vendorposlog {\n  --ion-color-base: var(--ion-color-vendorposlog);\n  --ion-color-base-rgb: var(--ion-color-vendorposlog-rgb);\n  --ion-color-contrast: var(--ion-color-vendorposlog-contrast);\n  --ion-color-contrast-rgb: var(--ion-color-vendorposlog-contrast-rgb);\n  --ion-color-shade: var(--ion-color-vendorposlog-shade);\n  --ion-color-tint: var(--ion-color-vendorposlog-tint);\n}\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvcHJvZmlsZS9wcm9maWxlLnBhZ2Uuc2NzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtFQUNJLGVBQUE7RUFDQSxjQUFBO0FBQ0o7O0FBQ0E7RUFDQyxpQkFBQTtFQUNBLGlCQUFBO0VBQ0Esa0JBQUE7RUFDQSxrQkFBQTtBQUVEOztBQUFBO0VBQ0MsV0FBQTtFQUNFLFlBQUE7QUFHSDs7QUFEQTtFQUNDLGVBQUE7QUFJRDs7QUFGQTtFQUNDLCtDQUFBO0VBQ0EsdURBQUE7RUFDQSw0REFBQTtFQUNBLG9FQUFBO0VBQ0Esc0RBQUE7RUFDQSxvREFBQTtBQUtEIiwiZmlsZSI6InNyYy9hcHAvcHJvZmlsZS9wcm9maWxlLnBhZ2Uuc2NzcyIsInNvdXJjZXNDb250ZW50IjpbIi5oZWFkZXItdGl0bGV7XG4gICAgZm9udC1zaXplOiAxOHB4O1xuICAgIGNvbG9yOiAjZmY4YTM1O1xufVxuLnByb2ZpbGUtaW1hZ2V7XG5cdHBhZGRpbmctdG9wOiAzMHB4O1xuXHRtYXJnaW4tbGVmdDogYXV0bztcblx0bWFyZ2luLXJpZ2h0OiBhdXRvO1xuXHR0ZXh0LWFsaWduOiBjZW50ZXI7XG59XG4ucHJvZmlsZS1pbWFnZSBpbWd7XG5cdHdpZHRoOiA5MHB4O1xuICBcdGhlaWdodDogOTBweDtcbn1cbi5wcm9maWxlLWZvbnR7XG5cdGZvbnQtc2l6ZTogMTJweDtcbn1cbi5pb24tY29sb3ItdmVuZG9ycG9zbG9nIHtcblx0LS1pb24tY29sb3ItYmFzZTogdmFyKC0taW9uLWNvbG9yLXZlbmRvcnBvc2xvZyk7XG5cdC0taW9uLWNvbG9yLWJhc2UtcmdiOiB2YXIoLS1pb24tY29sb3ItdmVuZG9ycG9zbG9nLXJnYik7XG5cdC0taW9uLWNvbG9yLWNvbnRyYXN0OiB2YXIoLS1pb24tY29sb3ItdmVuZG9ycG9zbG9nLWNvbnRyYXN0KTtcblx0LS1pb24tY29sb3ItY29udHJhc3QtcmdiOiB2YXIoLS1pb24tY29sb3ItdmVuZG9ycG9zbG9nLWNvbnRyYXN0LXJnYik7XG5cdC0taW9uLWNvbG9yLXNoYWRlOiB2YXIoLS1pb24tY29sb3ItdmVuZG9ycG9zbG9nLXNoYWRlKTtcblx0LS1pb24tY29sb3ItdGludDogdmFyKC0taW9uLWNvbG9yLXZlbmRvcnBvc2xvZy10aW50KTtcbn0iXX0= */");

/***/ }),

/***/ "./src/app/profile/profile.page.ts":
/*!*****************************************!*\
  !*** ./src/app/profile/profile.page.ts ***!
  \*****************************************/
/*! exports provided: ProfilePage */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ProfilePage", function() { return ProfilePage; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/__ivy_ngcc__/fesm2015/core.js");
/* harmony import */ var _ionic_angular__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @ionic/angular */ "./node_modules/@ionic/angular/__ivy_ngcc__/fesm2015/ionic-angular.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/__ivy_ngcc__/fesm2015/router.js");
/* harmony import */ var _ionic_storage__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @ionic/storage */ "./node_modules/@ionic/storage/__ivy_ngcc__/fesm2015/ionic-storage.js");
/* harmony import */ var _apiservice_apiservice_service__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../apiservice/apiservice.service */ "./src/app/apiservice/apiservice.service.ts");






let ProfilePage = class ProfilePage {
    constructor(navCtrl, Router, loadingCtrl, alertCtrl, ApiserviceService, storage) {
        this.navCtrl = navCtrl;
        this.Router = Router;
        this.loadingCtrl = loadingCtrl;
        this.alertCtrl = alertCtrl;
        this.ApiserviceService = ApiserviceService;
        this.storage = storage;
        this.Storage = { fullname: '', gender: '', email: '', level_id: '', job_title: '', password: '' };
    }
    ngOnInit() { }
    ionViewWillEnter() {
        this.storage.get('storage_poslogvendor').then((data) => {
            this.Storage.fullname = data.data.fullname;
            this.Storage.gender = data.data.gender;
            this.Storage.email = data.data.email;
            this.Storage.password = data.data.password;
        });
    }
    UpdateProfile() {
        this.Router.navigate(['updateprofile']);
    }
    UpdatePassword() {
        this.Router.navigate(['updatepassword']);
    }
    Logout() {
        return Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__awaiter"])(this, void 0, void 0, function* () {
            let Loading = yield this.loadingCtrl.create({
                mode: 'ios'
            });
            let Alert = yield this.alertCtrl.create({
                mode: 'ios',
                header: 'Do you want to log out ?',
                message: 'Click OK if you want to log out',
                buttons: [{
                        text: 'OK',
                        handler: () => {
                            Loading.present();
                            this.storage.clear();
                            Loading.dismiss();
                            this.Router.navigate(['login']);
                        }
                    }]
            });
            Alert.present();
        });
    }
};
ProfilePage.ctorParameters = () => [
    { type: _ionic_angular__WEBPACK_IMPORTED_MODULE_2__["NavController"] },
    { type: _angular_router__WEBPACK_IMPORTED_MODULE_3__["Router"] },
    { type: _ionic_angular__WEBPACK_IMPORTED_MODULE_2__["LoadingController"] },
    { type: _ionic_angular__WEBPACK_IMPORTED_MODULE_2__["AlertController"] },
    { type: _apiservice_apiservice_service__WEBPACK_IMPORTED_MODULE_5__["ApiserviceService"] },
    { type: _ionic_storage__WEBPACK_IMPORTED_MODULE_4__["Storage"] }
];
ProfilePage = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-profile',
        template: Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! raw-loader!./profile.page.html */ "./node_modules/raw-loader/dist/cjs.js!./src/app/profile/profile.page.html")).default,
        styles: [Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! ./profile.page.scss */ "./src/app/profile/profile.page.scss")).default]
    })
], ProfilePage);



/***/ })

}]);
//# sourceMappingURL=profile-profile-module-es2015.js.map