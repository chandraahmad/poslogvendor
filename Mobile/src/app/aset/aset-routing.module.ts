import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { AsetPage } from './aset.page';

const routes: Routes = [
  {
    path: '',
    component: AsetPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class AsetPageRoutingModule {}
