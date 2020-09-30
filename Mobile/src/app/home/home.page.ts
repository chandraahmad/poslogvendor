import { Component, OnInit } from '@angular/core';
import { ToastController, NavController, LoadingController, AlertController, Platform, IonRouterOutlet} from '@ionic/angular';
import { ActivatedRoute, Router, NavigationExtras, RouteReuseStrategy} from '@angular/router';
import { Storage } from '@ionic/storage';
import { ApiserviceService } from '../apiservice/apiservice.service';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage {

  Storage: any = {id_user: '', fullname: '', gender: '', email: '', level_id: '', job_title: ''};
  Administration: any = {vendor_name: '', address: '', postcode: '', vendor_fax: '', vendor_phone: '', vendor_email: '', vendor_website: '', 
  business_field_id: '', category_id: '', vendor_desc: '', id_user: '', vendor_status: ''};
  
  AdministrationCondition: any;
  constructor(
    public navCtrl: NavController,
    public Router: Router,
    public loadingCtrl: LoadingController,
    public alertCtrl: AlertController,
    private ApiserviceService: ApiserviceService,
    private storage: Storage
  ) {}

  ngOnInit() {}
  ionViewWillEnter() {
    this.storage.get('storage_poslogvendor').then((data) => {
      this.Storage.id_user = data.data.id_user;
      this.Storage.fullname = data.data.fullname;
      this.Storage.email = data.data.email;
      this.GetByidVendor(this.Storage.id_user);
    });
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
        this.Administration.vendor_status = Output.data.vendor_status;
      }else{
        this.Administration.vendor_name = 'Company Name';
        this.Administration.vendor_phone = 'Company Contact';
        this.Administration.vendor_email = 'Company Email';
        this.Administration.vendor_status = '0';
      }
    });
  }

  Profile() {
    this.Router.navigate(['profile']);
  }

  Administrasi() {
    this.Router.navigate(['administrasi']);
  }

  Document() {
    this.Router.navigate(['document']);
  }

  Aset() {
    this.Router.navigate(['aset']);
  }

}
