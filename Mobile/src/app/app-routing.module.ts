import { NgModule } from '@angular/core';
import { PreloadAllModules, RouterModule, Routes } from '@angular/router';

const routes: Routes = [
  {
    path: '',
    redirectTo: 'login',
    pathMatch: 'full'
  },
  {
    path: 'login',
    loadChildren: () => import('./login/login.module').then( m => m.LoginPageModule)
  },
  {
    path: 'home',
    loadChildren: () => import('./home/home.module').then( m => m.HomePageModule)
  },
  {
    path: 'register',
    loadChildren: () => import('./register/register.module').then( m => m.RegisterPageModule)
  },
  {
    path: 'profile',
    loadChildren: () => import('./profile/profile.module').then( m => m.ProfilePageModule)
  },
  {
    path: 'updateprofile',
    loadChildren: () => import('./updateprofile/updateprofile.module').then( m => m.UpdateprofilePageModule)
  },
  {
    path: 'updatepassword',
    loadChildren: () => import('./updatepassword/updatepassword.module').then( m => m.UpdatepasswordPageModule)
  },
  {
    path: 'administrasi',
    loadChildren: () => import('./administrasi/administrasi.module').then( m => m.AdministrasiPageModule)
  },
  {
    path: 'document',
    loadChildren: () => import('./document/document.module').then( m => m.DocumentPageModule)
  },
  {
    path: 'aset',
    loadChildren: () => import('./aset/aset.module').then( m => m.AsetPageModule)
  },
  {
    path: 'vehicleform',
    loadChildren: () => import('./vehicleform/vehicleform.module').then( m => m.VehicleformPageModule)
  },
  {
    path: 'general',
    loadChildren: () => import('./general/general.module').then( m => m.GeneralPageModule)
  },
  {
    path: 'sertifikatform',
    loadChildren: () => import('./sertifikatform/sertifikatform.module').then( m => m.SertifikatformPageModule)
  },
];

@NgModule({
  imports: [
    RouterModule.forRoot(routes, { preloadingStrategy: PreloadAllModules })
  ],
  exports: [RouterModule]
})
export class AppRoutingModule { }
