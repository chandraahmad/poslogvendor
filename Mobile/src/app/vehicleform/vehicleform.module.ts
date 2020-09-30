import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { VehicleformPageRoutingModule } from './vehicleform-routing.module';

import { VehicleformPage } from './vehicleform.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    VehicleformPageRoutingModule
  ],
  declarations: [VehicleformPage]
})
export class VehicleformPageModule {}
