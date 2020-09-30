import { Component, OnInit } from '@angular/core';
import { ToastController, NavController, LoadingController, AlertController, Platform, IonRouterOutlet} from '@ionic/angular';
import { ActivatedRoute, Router, NavigationExtras, RouteReuseStrategy} from '@angular/router';
import { Storage } from '@ionic/storage';
import { ApiserviceService } from '../apiservice/apiservice.service';

@Component({
  selector: 'app-sertifikatform',
  templateUrl: './sertifikatform.page.html',
  styleUrls: ['./sertifikatform.page.scss'],
})
export class SertifikatformPage implements OnInit {

  StorageUser: any = {id_user: '', fullname: '', gender: '', email: '', level_id: '', job_title: '', password: ''};
  DataSertifikat: any = {awards_id: '', vendor_id: '', awards_type: '', awards_year: '', awards_num: '', awards_file: ''};
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
        this.DataSertifikat.vendor_id = Output.data.vendor_id;
      }
    });
  }

  async SertifikatProcess() {
    let Loading = await this.alertCtrl.create({
      mode: 'ios'
    });
    Loading.present();
    if(this.DataSertifikat.awards_type != '' && this.DataSertifikat.awards_year != '' && this.DataSertifikat.awards_num != '') {
      this.ApiserviceService.SertifikatProcess(this.DataSertifikat).then(data => {
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
