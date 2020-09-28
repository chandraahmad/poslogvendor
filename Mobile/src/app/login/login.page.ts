import { Component, OnInit } from '@angular/core';
import { ToastController, NavController, LoadingController, AlertController, Platform, IonRouterOutlet} from '@ionic/angular';
import { ActivatedRoute, Router, NavigationExtras, RouteReuseStrategy} from '@angular/router';
import { Storage } from '@ionic/storage';
import { ApiserviceService } from '../apiservice/apiservice.service';
import { async } from '@angular/core/testing';

@Component({
  selector: 'app-login',
  templateUrl: './login.page.html',
  styleUrls: ['./login.page.scss'],
})
export class LoginPage implements OnInit {

  DataStorage: any = {email: '', password: ''};
  constructor(
    public navCtrl: NavController,
    public Router: Router,
    public loadingCtrl: LoadingController,
    public alertCtrl: AlertController,
    private ApiserviceService: ApiserviceService,
    private storage: Storage
  ) { }

  ngOnInit() {
  }

  async Login() {
    let Loading = await this.loadingCtrl.create({
      mode: 'ios'
    });
    Loading.present();
    if(this.DataStorage.email != '' && this.DataStorage.password != '') {
      this.ApiserviceService.GetByidUser(this.DataStorage).then(data => {
        let Output = JSON.parse(JSON.stringify(data));
        if(Output.condition == true) {
          this.storage.set('storage_poslogvendor', Output).then(val => {
            if(val.condition) {
              Loading.dismiss();
              this.presentAlert(Output.message);
              this.Router.navigate(['home']);
            }else{
              Loading.dismiss();
              this.presentAlert('Storage cannot return');
            }
          });
        }else{
          Loading.dismiss();
          this.presentAlert(Output.message);
        }
      });
    }else{
      Loading.dismiss();
      this.presentAlert('Email & Password cannot be null');
    }
  }

  Regiter() {
    this.Router.navigate(['register']);
  }

  async presentAlert(Msg) {
    let Alert = await this.alertCtrl.create({
      mode: 'ios',
      message: Msg,
      buttons: ['OK']
    });
    Alert.present();
  }

}
