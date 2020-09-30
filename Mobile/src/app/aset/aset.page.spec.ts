import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IonicModule } from '@ionic/angular';

import { AsetPage } from './aset.page';

describe('AsetPage', () => {
  let component: AsetPage;
  let fixture: ComponentFixture<AsetPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AsetPage ],
      imports: [IonicModule.forRoot()]
    }).compileComponents();

    fixture = TestBed.createComponent(AsetPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
