import { Component, OnInit } from '@angular/core';
import { ToastController, NavController, LoadingController, AlertController, Platform, IonRouterOutlet} from '@ionic/angular';
import { ActivatedRoute, Router, NavigationExtras, RouteReuseStrategy} from '@angular/router';
import { Storage } from '@ionic/storage';
import { ApiserviceService } from '../apiservice/apiservice.service';

@Component({
  selector: 'app-administrasi',
  templateUrl: './administrasi.page.html',
  styleUrls: ['./administrasi.page.scss'],
})
export class AdministrasiPage implements OnInit {

  StorageUser: any = {id_user: '', fullname: '', gender: '', email: '', level_id: '', job_title: '', password: ''};
  Administration: any = {vendor_name: '', address: '', postcode: '', vendor_fax: '', vendor_phone: '', vendor_email: '', vendor_website: '', 
  business_field_id: '', category_id: '', vendor_desc: '', id_user: ''};
  
  AdministrationCondition: any;
  BusinessField: any;
  Category: any;
  CategoryCondition: any;
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
      this.StorageUser.id_user = data.data.id_user;
      this.StorageUser.fullname = data.data.fullname;
      this.StorageUser.gender = data.data.gender;
      this.StorageUser.email = data.data.email;
      this.StorageUser.level_id = data.data.level_id;
      this.StorageUser.password = data.data.password;
      this.GetByidVendor(this.StorageUser.id_user);
    });
    this.GetAllBusinessField();
    Loading.dismiss();
  }

  GetByidVendor(id_user) {
    this.ApiserviceService.GetByidVendor(id_user).then(data => {
      let Output = JSON.parse(JSON.stringify(data));
      this.AdministrationCondition = Output.condition;
      this.Administration.id_user = id_user;
      if(Output.condition == true) {
        this.Administration.vendor_name = Output.data.vendor_name;
        this.Administration.address = Output.data.address;
        this.Administration.postcode = Output.data.postcode;
        this.Administration.vendor_phone = Output.data.vendor_phone;
        this.Administration.vendor_fax = Output.data.vendor_fax;
        this.Administration.vendor_email = Output.data.vendor_email;
        this.Administration.vendor_website = Output.data.vendor_website;
        this.Administration.business_field_id = Output.data.business_field_id;
        this.Administration.vendor_desc = Output.data.vendor_desc;
        this.Administration.category_id = Output.data.category_id;
      }
    });
  }

  GetAllBusinessField() {
    this.ApiserviceService.GetAllBusinessField().then(data => {
      let Output = JSON.parse(JSON.stringify(data));
      this.BusinessField = Output.data;
    });
  }

  GetByidAllCategory(event) {
    this.ApiserviceService.GetByidAllCategory(event.detail.value).then(data => {
      let Output = JSON.parse(JSON.stringify(data));
      this.CategoryCondition  = Output.condition;
      this.Category = Output.data;
    });
  }

  async AdministrationProcess() {
    let Loading = await this.loadingCtrl.create({
      mode: 'ios'
    });
    Loading.present();
    if(this.Administration.vendor_name != '' && this.Administration.address != '' && this.Administration.postcode != '' && this.Administration.vendor_phone != '' && 
    this.Administration.vendor_fax != '' && this.Administration.id_user != '' && this.Administration.vendor_email != '' && this.Administration.vendor_website != '' &&
    this.Administration.business_field_id != '' && this.Administration.vendor_desc != ''){
      if(this.CategoryCondition == true && this.Administration.category_id != '') {
        this.ApiserviceService.AdministrationProcess(this.Administration).then(data => {
          let Output = JSON.parse(JSON.stringify(data));
          if(Output.condition == true) {
            Loading.dismiss();
            this.presentAlert(Output.message);
            this.ngOnInit();
          }else{
            Loading.dismiss();
            this.presentAlert(Output.message);
          }
        })
      }else{
        if(this.CategoryCondition == false) {
          this.Administration.category_id = '';
          this.ApiserviceService.AdministrationProcess(this.Administration).then(data => {
            let Output = JSON.parse(JSON.stringify(data));
            if(Output.condition == true) {
              Loading.dismiss();
              this.presentAlert(Output.message);
              this.ngOnInit();
            }else{
              Loading.dismiss();
              this.presentAlert(Output.message);
            }
          })
        }else{
          Loading.dismiss();
          this.presentAlert('Column cannot be null');
        }
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
