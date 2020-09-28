import { Component, OnInit } from '@angular/core';
import { ToastController, NavController, LoadingController, AlertController, Platform, IonRouterOutlet} from '@ionic/angular';
import { ActivatedRoute, Router, NavigationExtras, RouteReuseStrategy} from '@angular/router';
import { Storage } from '@ionic/storage';
import { ApiserviceService } from '../apiservice/apiservice.service';

@Component({
  selector: 'app-profile',
  templateUrl: './profile.page.html',
  styleUrls: ['./profile.page.scss'],
})
export class ProfilePage implements OnInit {

  Storage: any = {fullname: '', gender: '', email: '', level_id: '', job_title: '', password: ''};
  constructor(
    public navCtrl: NavController,
    public Router: Router,
    public loadingCtrl: LoadingController,
    public alertCtrl: AlertController,
    private ApiserviceService: ApiserviceService,
    private storage: Storage
  ) { }

  ngOnInit() {}
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
  async Logout() {
    let Loading = await this.loadingCtrl.create({
      mode: 'ios'
    });
    let Alert = await this.alertCtrl.create({
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
  }

}
