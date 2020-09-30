import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IonicModule } from '@ionic/angular';

import { VehicleformPage } from './vehicleform.page';

describe('VehicleformPage', () => {
  let component: VehicleformPage;
  let fixture: ComponentFixture<VehicleformPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ VehicleformPage ],
      imports: [IonicModule.forRoot()]
    }).compileComponents();

    fixture = TestBed.createComponent(VehicleformPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
