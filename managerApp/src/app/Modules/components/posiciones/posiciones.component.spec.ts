import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PosicionesComponent } from './posiciones.component';
import { HttpClientTestingModule } from '@angular/common/http/testing';

describe('PosicionesComponent', () => {
  let component: PosicionesComponent;
  let fixture: ComponentFixture<PosicionesComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [PosicionesComponent],
      imports:[HttpClientTestingModule]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(PosicionesComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
