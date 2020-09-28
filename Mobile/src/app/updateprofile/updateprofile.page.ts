import { Component, OnInit } from '@angular/core';
import { ToastController, NavController, LoadingController, AlertController, Platform, IonRouterOutlet} from '@ionic/angular';
import { ActivatedRoute, Router, NavigationExtras, RouteReuseStrategy} from '@angular/router';
import { Storage } from '@ionic/storage';
import { ApiserviceService } from '../apiservice/apiservice.service';

@Component({
  selector: 'app-updateprofile',
  templateUrl: './updateprofile.page.html',
  styleUrls: ['./updateprofile.page.scss'],
})
export class UpdateprofilePage implements OnInit {

  Updateprofile: any = {id_user: '', fullname: '', gender: '', email: '', password: ''};
  getallgender: any;
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
      this.Updateprofile.id_user = data.data.id_user;
      this.Updateprofile.fullname = data.data.fullname;
      this.Updateprofile.gender = data.data.gender;
      this.Updateprofile.email = data.data.email;
      this.Updateprofile.password = data.data.password;
    });
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

  async UpdateProfileProcess() {
    let Loading = await this.loadingCtrl.create({
      mode: 'ios'
    });
    Loading.present();
    if(this.Updateprofile.fullname != '' && this.Updateprofile.gender != '' && this.Updateprofile.email != '') {
      this.ApiserviceService.UpdateProfileProcess(this.Updateprofile).then(data => {
        let Output = JSON.parse(JSON.stringify(data));
        this.ApiserviceService.GetByidUser2(this.Updateprofile).then(data => {
          var OutPutGetByidUser = JSON.parse(JSON.stringify(data));
          this.storage.clear();
          this.storage.set('storage_poslogvendor', OutPutGetByidUser).then(val => {
            Loading.dismiss();
            if(Output.condition == true) {
              this.presentAlert(Output.message);
              this.Router.navigate(['profile']);
            }else{
              this.presentAlert(Output.message);
            }
          });
        })
      })
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
