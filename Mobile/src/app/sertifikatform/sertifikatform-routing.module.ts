import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { SertifikatformPage } from './sertifikatform.page';

const routes: Routes = [
  {
    path: '',
    component: SertifikatformPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class SertifikatformPageRoutingModule {}
