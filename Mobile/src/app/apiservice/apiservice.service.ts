import { Injectable } from '@angular/core';
import { ToastController, AlertController, LoadingController, Platform} from '@ionic/angular';
import { HttpClient, HttpHeaders, HttpErrorResponse } from '@angular/common/http';

let ApiUrl = "http://192.168.64.2/poslogvendor/Aplikasi/index.php/PoslogApiVendor/";
@Injectable({
  providedIn: 'root'
})
export class ApiserviceService {

  constructor(
    public alertCtrl: AlertController,
    public toastCtrl: ToastController,
    public loadingCtrl: LoadingController,
    private httpClient: HttpClient
  ) { }

  GetByidUser(data) {
    return new Promise((resolve, rejects) => {
      this.httpClient.post(ApiUrl+'GetByidUser/', JSON.stringify(data))
      .subscribe(data => {resolve(data)}, err => {this.PresentToast(err.name); this.loadingCtrl.dismiss();})
    })
  }

  GetByidUser2(data) {
    return new Promise((resolve, rejects) => {
      this.httpClient.post(ApiUrl+'GetByidUser2/', JSON.stringify(data))
      .subscribe(data => {resolve(data)}, err => {this.PresentToast(err.name); this.loadingCtrl.dismiss();})
    })
  }

  GetByidVendor(id_user) {
    return new Promise((resolve, rejects) => {
      this.httpClient.get(ApiUrl+'GetByidVendor?id_user='+id_user)
      .subscribe(data => {resolve(data)}, err => {this.PresentToast(err.name); this.loadingCtrl.dismiss();})
    })
  }

  GetAllGender() {
    return new Promise((resolve, rejects) => {
      this.httpClient.get(ApiUrl+'GetAllGender/')
      .subscribe(data => {resolve(data)}, err => {this.PresentToast(err.name); this.loadingCtrl.dismiss();})
    })
  }

  GetAllAsset() {
    return new Promise((resolve, rejects) => {
      this.httpClient.get(ApiUrl+'GetAllAsset/')
      .subscribe(data => {resolve(data)}, err => {this.PresentToast(err.name); this.loadingCtrl.dismiss();})
    })
  }

  GetAllBusinessField() {
    return new Promise((resolve, rejects) => {
      this.httpClient.get(ApiUrl+'GetAllBusinessField/')
      .subscribe(data => {resolve(data)}, err => {this.PresentToast(err.name); this.loadingCtrl.dismiss();})
    })
  }

  GetByidAllCategory(business_field_id) {
    return new Promise((resolve, rejects) => {
      this.httpClient.get(ApiUrl+'GetByidAllCategory?business_field_id='+business_field_id)
      .subscribe(data => {resolve(data)}, err => {this.PresentToast(err.name); this.loadingCtrl.dismiss();})
    })
  }

  GetByidAllVehicle(vendor_id) {
    return new Promise((resolve, rejects) => {
      this.httpClient.get(ApiUrl+'GetByidAllVehicle?vendor_id='+vendor_id)
      .subscribe(data => {resolve(data)}, err => {this.PresentToast(err.name); this.loadingCtrl.dismiss();})
    })
  }

  GetByidAllGeneral(vendor_id) {
    return new Promise((resolve, rejects) => {
      this.httpClient.get(ApiUrl+'GetByidAllGeneral?vendor_id='+vendor_id)
      .subscribe(data => {resolve(data)}, err => {this.PresentToast(err.name); this.loadingCtrl.dismiss();})
    })
  }

  GetByidAllSertifikat(vendor_id) {
    return new Promise((resolve, rejects) => {
      this.httpClient.get(ApiUrl+'GetByidAllSertifikat?vendor_id='+vendor_id)
      .subscribe(data => {resolve(data)}, err => {this.PresentToast(err.name); this.loadingCtrl.dismiss();})
    })
  }

  RegisterProcess(data) {
    return new Promise((resolve, rejects) => {
      this.httpClient.post(ApiUrl+'RegisterProcess/', JSON.stringify(data))
      .subscribe(data => {resolve(data)}, err => {this.PresentToast(err.name); this.loadingCtrl.dismiss();})
    })
  }

  UpdateProfileProcess(data) {
    return new Promise((resolve, rejects) => {
      this.httpClient.post(ApiUrl+'UpdateProfileProcess/', JSON.stringify(data))
      .subscribe(data => {resolve(data)}, err => {this.PresentToast(err.name); this.loadingCtrl.dismiss();})
    })
  }

  UpdatePasswordProcess(data) {
    return new Promise((resolve, rejects) => {
      this.httpClient.post(ApiUrl+'UpdatePasswordProcess/', JSON.stringify(data))
      .subscribe(data => {resolve(data)}, err => {this.PresentToast(err.name); this.loadingCtrl.dismiss();})
    })
  }

  AdministrationProcess(data) {
    return new Promise((resolve, rejects) => {
      this.httpClient.post(ApiUrl+'AdministrationProcess/', JSON.stringify(data))
      .subscribe(data => {resolve(data)}, err => {this.PresentToast(err.name); this.loadingCtrl.dismiss();})
    })
  }

  VehicleProcess(data) {
    return new Promise((resolve, rejects) => {
      this.httpClient.post(ApiUrl+'VehicleProcess/', JSON.stringify(data))
      .subscribe(data => {resolve(data)}, err => {this.PresentToast(err.name); this.loadingCtrl.dismiss();})
    })
  }

  GeneralProcess(data) {
    return new Promise((resolve, rejects) => {
      this.httpClient.post(ApiUrl+'GeneralProcess/', JSON.stringify(data))
      .subscribe(data => {resolve(data)}, err => {this.PresentToast(err.name); this.loadingCtrl.dismiss();})
    })
  }

  SertifikatProcess(data) {
    return new Promise((resolve, rejects) => {
      this.httpClient.post(ApiUrl+'SertifikatProcess/', JSON.stringify(data))
      .subscribe(data => {resolve(data)}, err => {this.PresentToast(err.name); this.loadingCtrl.dismiss();})
    })
  }

  DeleteVehile(vehicle_id) {
    return new Promise((resolve, rejects) => {
      this.httpClient.get(ApiUrl+'DeleteVehile?vehicle_id='+vehicle_id)
      .subscribe(data => {resolve(data)}, err => {this.PresentToast(err.name); this.loadingCtrl.dismiss();})
    })
  }

  DeleteGeneral(general_id) {
    return new Promise((resolve, rejects) => {
      this.httpClient.get(ApiUrl+'DeleteGeneral?general_id='+general_id)
      .subscribe(data => {resolve(data)}, err => {this.PresentToast(err.name); this.loadingCtrl.dismiss();})
    })
  }

  DeleteSertifikat(awards_id) {
    return new Promise((resolve, rejects) => {
      this.httpClient.get(ApiUrl+'DeleteSertifikat?awards_id='+awards_id)
      .subscribe(data => {resolve(data)}, err => {this.PresentToast(err.name); this.loadingCtrl.dismiss();})
    })
  }

  async PresentToast(Msg) {
    let Toast = await this.toastCtrl.create({
      mode: 'ios',
      message: Msg,
      duration: 3000
    })
    await Toast.present();
  }
}
