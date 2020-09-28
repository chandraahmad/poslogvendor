(function () {
  function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

  function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

  function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

  (window["webpackJsonp"] = window["webpackJsonp"] || []).push([["document-document-module"], {
    /***/
    "./node_modules/raw-loader/dist/cjs.js!./src/app/document/document.page.html":
    /*!***********************************************************************************!*\
      !*** ./node_modules/raw-loader/dist/cjs.js!./src/app/document/document.page.html ***!
      \***********************************************************************************/

    /*! exports provided: default */

    /***/
    function node_modulesRawLoaderDistCjsJsSrcAppDocumentDocumentPageHtml(module, __webpack_exports__, __webpack_require__) {
      "use strict";

      __webpack_require__.r(__webpack_exports__);
      /* harmony default export */


      __webpack_exports__["default"] = "<ion-header>\n    <ion-toolbar>\n        <ion-buttons slot=\"start\">\n            <ion-back-button color=\"vendorposlog\" text=\"\" icon=\"close-circle-outline\" defaultHref=\"/home\"></ion-back-button>\n        </ion-buttons>\n        <ion-title class=\"header-title\">Document</ion-title>\n    </ion-toolbar>\n</ion-header>\n\n<ion-content>\n    <ion-row>\n        <ion-col size=\"12\">\n            <ion-list>\n                <ion-item lines=\"full\">\n                    <ion-label style=\"color: black; font-size: 12px;\" position=\"floating\">Nomor NIB *</ion-label>\n\t\t\t\t    <ion-input type=\"text\" [(ngModel)]=\"Document.office_id\"></ion-input>\n                </ion-item>\n                <ion-item lines=\"full\">\n                    <ion-label style=\"color: black; font-size: 12px;\">Akta Pendirian *</ion-label>\n                    <ion-button mode=\"ios\" size=\"small\" (click)=\"ShowActionSheet(Document.akta_pendirian)\">Upload</ion-button>\n                </ion-item>\n                <ion-item lines=\"full\">\n                    <ion-label style=\"color: black; font-size: 12px;\">Pengesahan Kemenkumham *</ion-label>\n                    <ion-button mode=\"ios\" size=\"small\" (click)=\"ShowActionSheet(Document.pengesahan_kemenkumham)\">Upload</ion-button>\n                </ion-item>\n                <ion-item lines=\"full\">\n                    <ion-label style=\"color: black; font-size: 12px;\">Akta Perubahan</ion-label>\n                    <ion-button mode=\"ios\" size=\"small\" (click)=\"ShowActionSheet(Document.akta_perubahan)\">Upload</ion-button>\n                </ion-item>\n                <ion-item lines=\"full\">\n                    <ion-label style=\"color: black; font-size: 12px;\">Pengesahan Kemenkumham</ion-label>\n                    <ion-button mode=\"ios\" size=\"small\" (click)=\"ShowActionSheet(Document.pengesahan_kemenkumham2)\">Upload</ion-button>\n                </ion-item>\n                <ion-item lines=\"full\">\n                    <ion-label style=\"color: black; font-size: 12px;\">Surat Izin Usaha *</ion-label>\n                    <ion-button mode=\"ios\" size=\"small\" (click)=\"ShowActionSheet(Document.surat_izin_usaha)\">Upload</ion-button>\n                </ion-item>\n                <ion-item lines=\"full\">\n                    <ion-label style=\"color: black; font-size: 12px;\">TDP *</ion-label>\n                    <ion-button mode=\"ios\" size=\"small\" (click)=\"ShowActionSheet(Document.TDP)\">Upload</ion-button>\n                </ion-item>\n                <ion-item lines=\"full\">\n                    <ion-label style=\"color: black; font-size: 12px;\">NPWP *</ion-label>\n                    <ion-button mode=\"ios\" size=\"small\" (click)=\"ShowActionSheet(Document.NPWP)\">Upload</ion-button>\n                </ion-item>\n                <ion-item lines=\"full\">\n                    <ion-label style=\"color: black; font-size: 12px;\">SPPKP</ion-label>\n                    <ion-button mode=\"ios\" size=\"small\" (click)=\"ShowActionSheet(Document.SPPKP)\">Upload</ion-button>\n                </ion-item>\n                <ion-item lines=\"full\">\n                    <ion-label style=\"color: black; font-size: 12px;\">Surat Izin Tempat Usaha *</ion-label>\n                    <ion-button mode=\"ios\" size=\"small\" (click)=\"ShowActionSheet(Document.surat_izin_tempat_usaha)\">Upload</ion-button>\n                </ion-item>\n            </ion-list>\n        </ion-col>\n    </ion-row>\n</ion-content>\n";
      /***/
    },

    /***/
    "./src/app/document/document-routing.module.ts":
    /*!*****************************************************!*\
      !*** ./src/app/document/document-routing.module.ts ***!
      \*****************************************************/

    /*! exports provided: DocumentPageRoutingModule */

    /***/
    function srcAppDocumentDocumentRoutingModuleTs(module, __webpack_exports__, __webpack_require__) {
      "use strict";

      __webpack_require__.r(__webpack_exports__);
      /* harmony export (binding) */


      __webpack_require__.d(__webpack_exports__, "DocumentPageRoutingModule", function () {
        return DocumentPageRoutingModule;
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


      var _document_page__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(
      /*! ./document.page */
      "./src/app/document/document.page.ts");

      var routes = [{
        path: '',
        component: _document_page__WEBPACK_IMPORTED_MODULE_3__["DocumentPage"]
      }];

      var DocumentPageRoutingModule = function DocumentPageRoutingModule() {
        _classCallCheck(this, DocumentPageRoutingModule);
      };

      DocumentPageRoutingModule = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
        imports: [_angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterModule"].forChild(routes)],
        exports: [_angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterModule"]]
      })], DocumentPageRoutingModule);
      /***/
    },

    /***/
    "./src/app/document/document.module.ts":
    /*!*********************************************!*\
      !*** ./src/app/document/document.module.ts ***!
      \*********************************************/

    /*! exports provided: DocumentPageModule */

    /***/
    function srcAppDocumentDocumentModuleTs(module, __webpack_exports__, __webpack_require__) {
      "use strict";

      __webpack_require__.r(__webpack_exports__);
      /* harmony export (binding) */


      __webpack_require__.d(__webpack_exports__, "DocumentPageModule", function () {
        return DocumentPageModule;
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


      var _document_routing_module__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(
      /*! ./document-routing.module */
      "./src/app/document/document-routing.module.ts");
      /* harmony import */


      var _document_page__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(
      /*! ./document.page */
      "./src/app/document/document.page.ts");

      var DocumentPageModule = function DocumentPageModule() {
        _classCallCheck(this, DocumentPageModule);
      };

      DocumentPageModule = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
        imports: [_angular_common__WEBPACK_IMPORTED_MODULE_2__["CommonModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_3__["FormsModule"], _ionic_angular__WEBPACK_IMPORTED_MODULE_4__["IonicModule"], _document_routing_module__WEBPACK_IMPORTED_MODULE_5__["DocumentPageRoutingModule"]],
        declarations: [_document_page__WEBPACK_IMPORTED_MODULE_6__["DocumentPage"]]
      })], DocumentPageModule);
      /***/
    },

    /***/
    "./src/app/document/document.page.scss":
    /*!*********************************************!*\
      !*** ./src/app/document/document.page.scss ***!
      \*********************************************/

    /*! exports provided: default */

    /***/
    function srcAppDocumentDocumentPageScss(module, __webpack_exports__, __webpack_require__) {
      "use strict";

      __webpack_require__.r(__webpack_exports__);
      /* harmony default export */


      __webpack_exports__["default"] = ".header-title {\n  font-size: 18px;\n  color: #ff8a35;\n}\n\n.ion-color-vendorposlog {\n  --ion-color-base: var(--ion-color-vendorposlog);\n  --ion-color-base-rgb: var(--ion-color-vendorposlog-rgb);\n  --ion-color-contrast: var(--ion-color-vendorposlog-contrast);\n  --ion-color-contrast-rgb: var(--ion-color-vendorposlog-contrast-rgb);\n  --ion-color-shade: var(--ion-color-vendorposlog-shade);\n  --ion-color-tint: var(--ion-color-vendorposlog-tint);\n}\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvZG9jdW1lbnQvZG9jdW1lbnQucGFnZS5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0VBQ0ksZUFBQTtFQUNBLGNBQUE7QUFDSjs7QUFDQTtFQUNDLCtDQUFBO0VBQ0EsdURBQUE7RUFDQSw0REFBQTtFQUNBLG9FQUFBO0VBQ0Esc0RBQUE7RUFDQSxvREFBQTtBQUVEIiwiZmlsZSI6InNyYy9hcHAvZG9jdW1lbnQvZG9jdW1lbnQucGFnZS5zY3NzIiwic291cmNlc0NvbnRlbnQiOlsiLmhlYWRlci10aXRsZXtcbiAgICBmb250LXNpemU6IDE4cHg7XG4gICAgY29sb3I6ICNmZjhhMzU7XG59XG4uaW9uLWNvbG9yLXZlbmRvcnBvc2xvZyB7XG5cdC0taW9uLWNvbG9yLWJhc2U6IHZhcigtLWlvbi1jb2xvci12ZW5kb3Jwb3Nsb2cpO1xuXHQtLWlvbi1jb2xvci1iYXNlLXJnYjogdmFyKC0taW9uLWNvbG9yLXZlbmRvcnBvc2xvZy1yZ2IpO1xuXHQtLWlvbi1jb2xvci1jb250cmFzdDogdmFyKC0taW9uLWNvbG9yLXZlbmRvcnBvc2xvZy1jb250cmFzdCk7XG5cdC0taW9uLWNvbG9yLWNvbnRyYXN0LXJnYjogdmFyKC0taW9uLWNvbG9yLXZlbmRvcnBvc2xvZy1jb250cmFzdC1yZ2IpO1xuXHQtLWlvbi1jb2xvci1zaGFkZTogdmFyKC0taW9uLWNvbG9yLXZlbmRvcnBvc2xvZy1zaGFkZSk7XG5cdC0taW9uLWNvbG9yLXRpbnQ6IHZhcigtLWlvbi1jb2xvci12ZW5kb3Jwb3Nsb2ctdGludCk7XG59Il19 */";
      /***/
    },

    /***/
    "./src/app/document/document.page.ts":
    /*!*******************************************!*\
      !*** ./src/app/document/document.page.ts ***!
      \*******************************************/

    /*! exports provided: DocumentPage */

    /***/
    function srcAppDocumentDocumentPageTs(module, __webpack_exports__, __webpack_require__) {
      "use strict";

      __webpack_require__.r(__webpack_exports__);
      /* harmony export (binding) */


      __webpack_require__.d(__webpack_exports__, "DocumentPage", function () {
        return DocumentPage;
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


      var _ionic_native_file_transfer_ngx__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(
      /*! @ionic-native/file-transfer/ngx */
      "./node_modules/@ionic-native/file-transfer/__ivy_ngcc__/ngx/index.js");
      /* harmony import */


      var _ionic_native_file_opener_ngx__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(
      /*! @ionic-native/file-opener/ngx */
      "./node_modules/@ionic-native/file-opener/__ivy_ngcc__/ngx/index.js");
      /* harmony import */


      var _ionic_native_file_chooser_ngx__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(
      /*! @ionic-native/file-chooser/ngx */
      "./node_modules/@ionic-native/file-chooser/__ivy_ngcc__/ngx/index.js");
      /* harmony import */


      var _ionic_native_file_path_ngx__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(
      /*! @ionic-native/file-path/ngx */
      "./node_modules/@ionic-native/file-path/__ivy_ngcc__/ngx/index.js");
      /* harmony import */


      var _ionic_native_base64_ngx__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(
      /*! @ionic-native/base64/ngx */
      "./node_modules/@ionic-native/base64/__ivy_ngcc__/ngx/index.js");
      /* harmony import */


      var _apiservice_apiservice_service__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(
      /*! ../apiservice/apiservice.service */
      "./src/app/apiservice/apiservice.service.ts");

      var DocumentPage = /*#__PURE__*/function () {
        function DocumentPage(navCtrl, Router, loadingCtrl, alertCtrl, actionSheetController, ApiserviceService, storage, filetransfer, // private file: File,
        fileOpener, fileChooser, filePath, base64) {
          _classCallCheck(this, DocumentPage);

          this.navCtrl = navCtrl;
          this.Router = Router;
          this.loadingCtrl = loadingCtrl;
          this.alertCtrl = alertCtrl;
          this.actionSheetController = actionSheetController;
          this.ApiserviceService = ApiserviceService;
          this.storage = storage;
          this.filetransfer = filetransfer;
          this.fileOpener = fileOpener;
          this.fileChooser = fileChooser;
          this.filePath = filePath;
          this.base64 = base64;
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
            vendor_id: ''
          };
          this.Document = {
            office_id: '',
            akta_pendirian: '',
            pengesahan_kemenkumham: '',
            akta_perubahan: '',
            pengesahan_kemenkumham2: '',
            surat_izin_usaha: '',
            TDP: '',
            NPWP: '',
            SPPKP: '',
            surat_izin_tempat_usaha: ''
          };
        }

        _createClass(DocumentPage, [{
          key: "ngOnInit",
          value: function ngOnInit() {}
        }, {
          key: "ionViewWillEnter",
          value: function ionViewWillEnter() {
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
                      this.Document.akta_pendirian = 'akta_pendirian';
                      this.Document.pengesahan_kemenkumham = 'pengesahan_kemenkumham';
                      this.Document.akta_perubahan = 'akta_perubahan';
                      this.Document.pengesahan_kemenkumham2 = 'pengesahan_kemenkumham2';
                      this.Document.surat_izin_usaha = 'surat_izin_usaha';
                      this.Document.TDP = 'TDP';
                      this.Document.NPWP = 'NPWP';
                      this.Document.SPPKP = 'SPPKP';
                      this.Document.surat_izin_tempat_usaha = 'surat_izin_tempat_usaha';
                      this.storage.get('storage_poslogvendor').then(function (data) {
                        _this.StorageUser.id_user = data.data.id_user;

                        _this.GetByidVendor(_this.StorageUser.id_user);
                      });
                      Loading.dismiss();

                    case 15:
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
                _this2.Administration.vendor_id = Output.data.vendor_id;
              } else {
                _this2.Administration.vendor_id = '';
              }
            });
          }
        }, {
          key: "ShowActionSheet",
          value: function ShowActionSheet(DocumentName) {
            return Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__awaiter"])(this, void 0, void 0, /*#__PURE__*/regeneratorRuntime.mark(function _callee2() {
              var _this3 = this;

              var actionSheet;
              return regeneratorRuntime.wrap(function _callee2$(_context2) {
                while (1) {
                  switch (_context2.prev = _context2.next) {
                    case 0:
                      _context2.next = 2;
                      return this.actionSheetController.create({
                        header: 'Choose One',
                        mode: 'ios',
                        cssClass: 'my-custom-class',
                        buttons: [{
                          text: 'Document',
                          role: 'destructive',
                          handler: function handler() {
                            _this3.GetDocument(DocumentName);
                          }
                        }]
                      });

                    case 2:
                      actionSheet = _context2.sent;
                      _context2.next = 5;
                      return actionSheet.present();

                    case 5:
                    case "end":
                      return _context2.stop();
                  }
                }
              }, _callee2, this);
            }));
          }
        }, {
          key: "GetDocument",
          value: function GetDocument(DocumentName) {
            var _this4 = this;

            this.fileChooser.open().then(function (url) {
              _this4.UploadFile(url, DocumentName);
            })["catch"](function (e) {
              return _this4.presentAlert(e);
            });
          }
        }, {
          key: "UploadFile",
          value: function UploadFile(Path, DocumentName) {
            var _this5 = this;

            var fileTransfer = this.filetransfer.create();
            var options = {
              fileKey: 'file',
              fileName: this.Administration.vendor_id + '_' + DocumentName + '.docx',
              chunkedMode: false,
              // mimeType: 'image/png',
              headers: {}
            };
            fileTransfer.upload(Path, 'https://filateli.co.id/Welcome/upload_prisma', options, true).then(function (data) {
              return Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__awaiter"])(_this5, void 0, void 0, /*#__PURE__*/regeneratorRuntime.mark(function _callee3() {
                var Output;
                return regeneratorRuntime.wrap(function _callee3$(_context3) {
                  while (1) {
                    switch (_context3.prev = _context3.next) {
                      case 0:
                        // fileTransfer.upload(Path, 'http://192.168.64.2/poslogvendor/Aplikasi/index.php/PoslogApiVendor/UploadFileDokumen', options, true).then(async (data) => {
                        Output = JSON.parse(JSON.stringify(data));
                        this.presentAlert('Upload Successfully');
                        this.ionViewWillEnter();

                      case 3:
                      case "end":
                        return _context3.stop();
                    }
                  }
                }, _callee3, this);
              }));
            }, function (err) {
              _this5.presentAlert("Image Not Uploaded " + err);

              _this5.ionViewWillEnter();
            });
          }
        }, {
          key: "presentAlert",
          value: function presentAlert(Msg) {
            return Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__awaiter"])(this, void 0, void 0, /*#__PURE__*/regeneratorRuntime.mark(function _callee4() {
              var Alert;
              return regeneratorRuntime.wrap(function _callee4$(_context4) {
                while (1) {
                  switch (_context4.prev = _context4.next) {
                    case 0:
                      _context4.next = 2;
                      return this.alertCtrl.create({
                        mode: 'ios',
                        message: Msg,
                        buttons: ['OK']
                      });

                    case 2:
                      Alert = _context4.sent;
                      Alert.present();

                    case 4:
                    case "end":
                      return _context4.stop();
                  }
                }
              }, _callee4, this);
            }));
          }
        }]);

        return DocumentPage;
      }();

      DocumentPage.ctorParameters = function () {
        return [{
          type: _ionic_angular__WEBPACK_IMPORTED_MODULE_2__["NavController"]
        }, {
          type: _angular_router__WEBPACK_IMPORTED_MODULE_3__["Router"]
        }, {
          type: _ionic_angular__WEBPACK_IMPORTED_MODULE_2__["LoadingController"]
        }, {
          type: _ionic_angular__WEBPACK_IMPORTED_MODULE_2__["AlertController"]
        }, {
          type: _ionic_angular__WEBPACK_IMPORTED_MODULE_2__["ActionSheetController"]
        }, {
          type: _apiservice_apiservice_service__WEBPACK_IMPORTED_MODULE_10__["ApiserviceService"]
        }, {
          type: _ionic_storage__WEBPACK_IMPORTED_MODULE_4__["Storage"]
        }, {
          type: _ionic_native_file_transfer_ngx__WEBPACK_IMPORTED_MODULE_5__["FileTransfer"]
        }, {
          type: _ionic_native_file_opener_ngx__WEBPACK_IMPORTED_MODULE_6__["FileOpener"]
        }, {
          type: _ionic_native_file_chooser_ngx__WEBPACK_IMPORTED_MODULE_7__["FileChooser"]
        }, {
          type: _ionic_native_file_path_ngx__WEBPACK_IMPORTED_MODULE_8__["FilePath"]
        }, {
          type: _ionic_native_base64_ngx__WEBPACK_IMPORTED_MODULE_9__["Base64"]
        }];
      };

      DocumentPage = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-document',
        template: Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(
        /*! raw-loader!./document.page.html */
        "./node_modules/raw-loader/dist/cjs.js!./src/app/document/document.page.html"))["default"],
        styles: [Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(
        /*! ./document.page.scss */
        "./src/app/document/document.page.scss"))["default"]]
      })], DocumentPage);
      /***/
    }
  }]);
})();
//# sourceMappingURL=document-document-module-es5.js.map