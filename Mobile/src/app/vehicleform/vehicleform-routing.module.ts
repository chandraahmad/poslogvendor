import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { VehicleformPage } from './vehicleform.page';

const routes: Routes = [
  {
    path: '',
    component: VehicleformPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class VehicleformPageRoutingModule {}
