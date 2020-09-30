import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { SertifikatformPageRoutingModule } from './sertifikatform-routing.module';

import { SertifikatformPage } from './sertifikatform.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    SertifikatformPageRoutingModule
  ],
  declarations: [SertifikatformPage]
})
export class SertifikatformPageModule {}
