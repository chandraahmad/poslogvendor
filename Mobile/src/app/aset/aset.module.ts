import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { AsetPageRoutingModule } from './aset-routing.module';

import { AsetPage } from './aset.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    AsetPageRoutingModule
  ],
  declarations: [AsetPage]
})
export class AsetPageModule {}
