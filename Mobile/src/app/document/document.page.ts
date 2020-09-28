import { Component, OnInit } from '@angular/core';
import { ToastController, NavController, LoadingController, AlertController, ActionSheetController, Platform, IonRouterOutlet} from '@ionic/angular';
import { ActivatedRoute, Router, NavigationExtras, RouteReuseStrategy} from '@angular/router';
import { Storage } from '@ionic/storage';
import { FileTransfer, FileUploadOptions, FileTransferObject } from '@ionic-native/file-transfer/ngx';
import { File } from '@ionic-native/file';
import { FileOpener } from '@ionic-native/file-opener/ngx';
import { FileChooser } from '@ionic-native/file-chooser/ngx';
import { FilePath } from '@ionic-native/file-path/ngx';
import { Base64 } from '@ionic-native/base64/ngx';
import { ApiserviceService } from '../apiservice/apiservice.service';

@Component({
  selector: 'app-document',
  templateUrl: './document.page.html',
  styleUrls: ['./document.page.scss'],
})
export class DocumentPage implements OnInit {

  StorageUser: any = {id_user: '', fullname: '', gender: '', email: '', level_id: '', job_title: '', password: ''};
  Administration: any = {vendor_id: ''};
  Document: any = {office_id: '', akta_pendirian: '', pengesahan_kemenkumham: '', akta_perubahan: '', pengesahan_kemenkumham2: '',
  surat_izin_usaha: '', TDP: '', NPWP: '', SPPKP: '', surat_izin_tempat_usaha: ''};

  AdministrationCondition: any;
  constructor(
    public navCtrl: NavController,
    public Router: Router,
    public loadingCtrl: LoadingController,
    public alertCtrl: AlertController,
    public actionSheetController: ActionSheetController,
    private ApiserviceService: ApiserviceService,
    private storage: Storage,
    private filetransfer: FileTransfer, 
    // private file: File,
    private fileOpener: FileOpener,
    private fileChooser: FileChooser,
    private filePath: FilePath,
    private base64: Base64
  ) { }

  ngOnInit() {}
  async ionViewWillEnter() {
    let Loading = await this.alertCtrl.create({
      mode: 'ios'
    });
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
    this.storage.get('storage_poslogvendor').then((data) => {
      this.StorageUser.id_user = data.data.id_user;
      this.GetByidVendor(this.StorageUser.id_user);
    });
    Loading.dismiss();
  }

  GetByidVendor(id_user) {
    this.ApiserviceService.GetByidVendor(id_user).then(data => {
      let Output = JSON.parse(JSON.stringify(data));
      this.AdministrationCondition = Output.condition;
      this.Administration.id_user = id_user;
      if(Output.condition == true) {
        this.Administration.vendor_id = Output.data.vendor_id;
      }else{
        this.Administration.vendor_id = '';
      }
    });
  }

  async ShowActionSheet(DocumentName) {
    const actionSheet = await this.actionSheetController.create({
      header: 'Choose One',
      mode: 'ios',
      cssClass: 'my-custom-class',
      buttons: [{
        text: 'Document',
        role: 'destructive',
        handler: () => {
          this.GetDocument(DocumentName);
        }
      }]
    })
    await actionSheet.present();
  }

  GetDocument(DocumentName) {
    this.fileChooser.open().then(url => {
      this.UploadFile(url, DocumentName);
    }).catch(e => this.presentAlert(e));
  }

  UploadFile(Path, DocumentName) {
    const fileTransfer: FileTransferObject = this.filetransfer.create();
    let options: FileUploadOptions = {
      fileKey: 'file',
      fileName: this.Administration.vendor_id+'_'+DocumentName+'.docx',
      chunkedMode: false,
      // mimeType: 'image/png',
      headers: {}
    }
    fileTransfer.upload(Path, 'https://filateli.co.id/Welcome/upload_prisma', options, true).then(async (data) => {
    // fileTransfer.upload(Path, 'http://192.168.64.2/poslogvendor/Aplikasi/index.php/PoslogApiVendor/UploadFileDokumen', options, true).then(async (data) => {
      let Output = JSON.parse(JSON.stringify(data));
      this.presentAlert('Upload Successfully');
      this.ionViewWillEnter();
    }, (err) => {
      this.presentAlert("Image Not Uploaded "+err);
      this.ionViewWillEnter();
    });
  }

  async presentAlert(Msg) {
    let Alert = await this.alertCtrl.create({
      mode: 'ios',
      message: Msg,
      buttons: ['OK']
    })
    Alert.present();
  }

}
