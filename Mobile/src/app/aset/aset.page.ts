import { Component, OnInit } from '@angular/core';
import { ToastController, NavController, LoadingController, AlertController, Platform, IonRouterOutlet} from '@ionic/angular';
import { ActivatedRoute, Router, NavigationExtras, RouteReuseStrategy} from '@angular/router';
import { Storage } from '@ionic/storage';
import { ApiserviceService } from '../apiservice/apiservice.service';

@Component({
  selector: 'app-aset',
  templateUrl: './aset.page.html',
  styleUrls: ['./aset.page.scss'],
})
export class AsetPage implements OnInit {

  DataVehicle: any = {vehicle_id: '', vendor_id: '', vehicle_type: '', vehicle_brand: '', vehicle_qty: '', vehicle_year: '', type: '', vehicle_payload: '', vehicle_status: '', vehicle_history: ''};
  StorageUser: any = {id_user: '', fullname: '', gender: '', email: '', level_id: '', job_title: '', password: ''};
  
  Asset: any;
  Vehile: any;
  General: any;
  Sertifikat: any;
  constructor(
    public navCtrl: NavController,
    public Router: Router,
    public loadingCtrl: LoadingController,
    public alertCtrl: AlertController,
    private ApiserviceService: ApiserviceService,
    private storage: Storage
  ) { }

  async ngOnInit() {}
  async ionViewWillEnter() {
    let Loading = await this.alertCtrl.create({
      mode: 'ios'
    });
    Loading.present();
    this.storage.get('storage_poslogvendor').then((data) => {
      this.StorageUser.id_user = data.data.id_user;
      this.GetByidVendor(this.StorageUser.id_user);
    });
    this.GetAllAsset();
    Loading.dismiss();
  }

  GetAllAsset() {
    this.ApiserviceService.GetAllAsset().then(data => {
      let Output = JSON.parse(JSON.stringify(data));

      this.Asset = Output.data;
    })
  }

  GetByidVendor(id_user) {
    this.ApiserviceService.GetByidVendor(id_user).then(data => {
      let Output = JSON.parse(JSON.stringify(data));
      if(Output.condition == true) {
        this.DataVehicle.vendor_id = Output.data.vendor_id;
      }else{
        this.DataVehicle.vendor_id = '';
        this.presentAlert('Daftarkan perusahaan anda terlebih dahulu di menu administrasi');
        this.Router.navigate(['home']);
      }
      this.ApiserviceService.GetByidAllVehicle(Output.data.vendor_id).then(data => {
        let OutputVehile = JSON.parse(JSON.stringify(data));
  
        this.Vehile = OutputVehile.data;
      })

      this.ApiserviceService.GetByidAllGeneral(Output.data.vendor_id).then(data => {
        let OutputGeneral = JSON.parse(JSON.stringify(data));

        this.General = OutputGeneral.data;
      })

      this.ApiserviceService.GetByidAllSertifikat(Output.data.vendor_id).then(data => {
        let OutputSertifikat = JSON.parse(JSON.stringify(data));

        this.Sertifikat = OutputSertifikat.data;
      })
    });
  }

  VehicleForm() {
    this.Router.navigate(['vehicleform']);
  }

  GeneralForm() {
    this.Router.navigate(['general']);
  }

  SertifikatForm() {
    this.Router.navigate(['sertifikatform']);
  }

  async DeleteVehile(vehicle_id) {
    let Loading = await this.alertCtrl.create({
      mode: 'ios'
    });
    let Alert = await this.alertCtrl.create({
      mode: 'ios',
      message: 'Apakah anda yakin ?',
      buttons: [{
        text: 'OK',
        handler: () => {
          Loading.present();
          this.ApiserviceService.DeleteVehile(vehicle_id).then(data => {
            let Output = JSON.parse(JSON.stringify(data));

            if(Output.condition == true) {
              Loading.dismiss();
              this.presentAlert(Output.message);
              this.ionViewWillEnter();
            }else{
              Loading.dismiss();
              this.presentAlert(Output.message);
            }
          });
        }
      },{
        text: 'Cancel'
      }]
    });
    Alert.present();
  }

  async DeleteGeneral(general_id) {
    let Loading = await this.alertCtrl.create({
      mode: 'ios'
    });
    let Alert = await this.alertCtrl.create({
      mode: 'ios',
      message: 'Apakah anda yakin ?',
      buttons: [{
        text: 'OK',
        handler: () => {
          Loading.present();
          this.ApiserviceService.DeleteGeneral(general_id).then(data => {
            let Output = JSON.parse(JSON.stringify(data));

            if(Output.condition == true) {
              Loading.dismiss();
              this.presentAlert(Output.message);
              this.ionViewWillEnter();
            }else{
              Loading.dismiss();
              this.presentAlert(Output.message);
            }
          });
        }
      },{
        text: 'Cancel'
      }]
    });
    Alert.present();
  }

  async DeleteSertifikat(awards_id) {
    let Loading = await this.alertCtrl.create({
      mode: 'ios'
    });
    let Alert = await this.alertCtrl.create({
      mode: 'ios',
      message: 'Apakah anda yakin ?',
      buttons: [{
        text: 'OK',
        handler: () => {
          Loading.present();
          this.ApiserviceService.DeleteSertifikat(awards_id).then(data => {
            let Output = JSON.parse(JSON.stringify(data));

            if(Output.condition == true) {
              Loading.dismiss();
              this.presentAlert(Output.message);
              this.ionViewWillEnter();
            }else{
              Loading.dismiss();
              this.presentAlert(Output.message);
            }
          });
        }
      },{
        text: 'Cancel'
      }]
    });
    Alert.present();
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
