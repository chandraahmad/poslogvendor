import { Component, OnInit } from '@angular/core';
import { ToastController, NavController, LoadingController, AlertController, Platform, IonRouterOutlet} from '@ionic/angular';
import { ActivatedRoute, Router, NavigationExtras, RouteReuseStrategy} from '@angular/router';
import { Storage } from '@ionic/storage';
import { ApiserviceService } from '../apiservice/apiservice.service';

@Component({
  selector: 'app-vehicleform',
  templateUrl: './vehicleform.page.html',
  styleUrls: ['./vehicleform.page.scss'],
})
export class VehicleformPage implements OnInit {

  DataVehicle: any = {vehicle_id: '', vendor_id: '', vehicle_type: '', vehicle_brand: '', vehicle_qty: '', vehicle_year: '', type: '', vehicle_payload: '', vehicle_status: '', vehicle_history: ''};
  StorageUser: any = {id_user: '', fullname: '', gender: '', email: '', level_id: '', job_title: '', password: ''};
  constructor(
    public navCtrl: NavController,
    public Router: Router,
    public loadingCtrl: LoadingController,
    public alertCtrl: AlertController,
    private ApiserviceService: ApiserviceService,
    private storage: Storage
  ) { }

  ngOnInit() {}
  async ionViewWillEnter() {
    let Loading = await this.alertCtrl.create({
      mode: 'ios'
    });
    Loading.present();
    this.storage.get('storage_poslogvendor').then((data) => {
      this.StorageUser.id_user = data.data.id_user;
      this.GetByidVendor(this.StorageUser.id_user);
    });
    Loading.dismiss();
  }

  GetByidVendor(id_user) {
    this.ApiserviceService.GetByidVendor(id_user).then(data => {
      let Output = JSON.parse(JSON.stringify(data));
      if(Output.condition == true) {
        this.DataVehicle.vendor_id = Output.data.vendor_id;
      }
    });
  }

  async VehicleProcess() {
    let Loading = await this.alertCtrl.create({
      mode: 'ios'
    });
    Loading.present();
    if(this.DataVehicle.vehicle_type != '' && this.DataVehicle.vehicle_brand != '' && this.DataVehicle.vehicle_qty != '' && this.DataVehicle.vehicle_year != '' && this.DataVehicle.type != ''
    && this.DataVehicle.vehicle_payload != '' && this.DataVehicle.vehicle_status != '' && this.DataVehicle.vehicle_history != '') {
      this.ApiserviceService.VehicleProcess(this.DataVehicle).then(data => {
        let Output = JSON.parse(JSON.stringify(data));
  
        if(Output.condition == true) {
          Loading.dismiss();
          this.presentAlert(Output.message);
          this.Router.navigate(['aset']);
        }else{
          Loading.dismiss();
          this.presentAlert(Output.message);
        }
      });
    }else{
      Loading.dismiss();
      this.presentAlert('Column cannot be null');
    }
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
