import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IonicModule } from '@ionic/angular';

import { AdministrasiPage } from './administrasi.page';

describe('AdministrasiPage', () => {
  let component: AdministrasiPage;
  let fixture: ComponentFixture<AdministrasiPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AdministrasiPage ],
      imports: [IonicModule.forRoot()]
    }).compileComponents();

    fixture = TestBed.createComponent(AdministrasiPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
