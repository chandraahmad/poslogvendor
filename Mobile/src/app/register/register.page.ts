import { Component, OnInit, Output } from '@angular/core';
import { ToastController, NavController, LoadingController, AlertController, Platform, IonRouterOutlet} from '@ionic/angular';
import { ActivatedRoute, Router, NavigationExtras, RouteReuseStrategy} from '@angular/router';
import { ApiserviceService } from '../apiservice/apiservice.service';

@Component({
  selector: 'app-register',
  templateUrl: './register.page.html',
  styleUrls: ['./register.page.scss'],
})
export class RegisterPage implements OnInit {

  Register: any = {fullname: '', gender: '', email: '', password: '', password2: ''};
  getallgender: any;
  constructor(
    public navCtrl: NavController,
    public Router: Router,
    public loadingCtrl: LoadingController,
    public alertCtrl: AlertController,
    private ApiserviceService: ApiserviceService
  ) { }

  async ngOnInit() {
    let Loading = await this.alertCtrl.create({
      mode: 'ios'
    });
    Loading.present();
    this.GetAllGender();
    Loading.dismiss();
  }

  GetAllGender() {
    this.ApiserviceService.GetAllGender().then(data =>  {
      let Output = JSON.parse(JSON.stringify(data));
      if(Output.condition == true) {
        this.getallgender = Output.data;
      }else{
        this.getallgender = null;
        this.presentAlert(Output.message);
      }
    })
  }

  async RegisterProcess() {
    let Loading = await this.loadingCtrl.create({
      mode: 'ios'
    });
    Loading.present();
    if(this.Register.fullname != '' && this.Register.gender != '' && this.Register.email != '' && this.Register.password != '' && this.Register.password2 != '') {
      if(this.Register.password == this.Register.password2) {
        this.ApiserviceService.RegisterProcess(this.Register).then(data => {
          let Output = JSON.parse(JSON.stringify(data));
          Loading.dismiss();
          if(Output.condition == true) {
            this.presentAlert(Output.message);
            this.Router.navigate(['login']);
          }else{
            this.presentAlert(Output.message);
          }
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
