import { Component, OnInit } from '@angular/core';
import { ToastController, NavController, LoadingController, AlertController, Platform, IonRouterOutlet} from '@ionic/angular';
import { ActivatedRoute, Router, NavigationExtras, RouteReuseStrategy} from '@angular/router';
import { Storage } from '@ionic/storage';
import { ApiserviceService } from '../apiservice/apiservice.service';

@Component({
  selector: 'app-general',
  templateUrl: './general.page.html',
  styleUrls: ['./general.page.scss'],
})
export class GeneralPage implements OnInit {

  StorageUser: any = {id_user: '', fullname: '', gender: '', email: '', level_id: '', job_title: '', password: ''};
  DataGeneral: any = {general_id: '', vendor_id: '', general_type: '', general_qty: '', general_status: ''};
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
        this.DataGeneral.vendor_id = Output.data.vendor_id;
      }
    });
  }

  async GeneralProcess() {
    let Loading = await this.alertCtrl.create({
      mode: 'ios'
    });
    Loading.present();
    if(this.DataGeneral.general_type != '' && this.DataGeneral.general_qty != '' && this.DataGeneral.general_status != '') {
      this.ApiserviceService.GeneralProcess(this.DataGeneral).then(data => {
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
