import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IonicModule } from '@ionic/angular';

import { SertifikatformPage } from './sertifikatform.page';

describe('SertifikatformPage', () => {
  let component: SertifikatformPage;
  let fixture: ComponentFixture<SertifikatformPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ SertifikatformPage ],
      imports: [IonicModule.forRoot()]
    }).compileComponents();

    fixture = TestBed.createComponent(SertifikatformPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
