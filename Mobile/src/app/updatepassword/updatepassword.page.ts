import { Component, OnInit } from '@angular/core';
import { ToastController, NavController, LoadingController, AlertController, Platform, IonRouterOutlet} from '@ionic/angular';
import { ActivatedRoute, Router, NavigationExtras, RouteReuseStrategy} from '@angular/router';
import { Storage } from '@ionic/storage';
import { ApiserviceService } from '../apiservice/apiservice.service';

@Component({
  selector: 'app-updatepassword',
  templateUrl: './updatepassword.page.html',
  styleUrls: ['./updatepassword.page.scss'],
})
export class UpdatepasswordPage implements OnInit {

  Updatepassword: any = {id_user: '', email: '', password: '', password2: '', password3: ''};
  constructor(
    public navCtrl: NavController,
    public Router: Router,
    public loadingCtrl: LoadingController,
    public alertCtrl: AlertController,
    private ApiserviceService: ApiserviceService,
    private storage: Storage
  ) { }

  async ngOnInit() {
    let Loading = await this.alertCtrl.create({
      mode: 'ios'
    });
    Loading.present();
    this.storage.get('storage_poslogvendor').then((data) => {
      this.Updatepassword.id_user = data.data.id_user;
      this.Updatepassword.email = data.data.email;
      this.Updatepassword.password = data.data.password;
    });
    Loading.dismiss();
  }

  async UpdatePasswordProcess() {
    let Loading = await this.loadingCtrl.create({
      mode: 'ios'
    });
    Loading.present();
    if(this.Updatepassword.password3 != '' && this.Updatepassword.password2 != '') {
      if(this.Updatepassword.password3 == this.Updatepassword.password2) {
        this.ApiserviceService.UpdatePasswordProcess(this.Updatepassword).then(data => {
          let Output = JSON.parse(JSON.stringify(data));
          this.storage.clear();
          this.storage.set('storage_poslogvendor', Output).then(val => {
            Loading.dismiss();
            if(Output.condition == true) {
              this.presentAlert(Output.message);
              this.Router.navigate(['profile']);
            }else{
              this.presentAlert(Output.message);
            }
          });
        })
      }else{
        Loading.dismiss();
        this.presentAlert('Password not macth');
      }
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
