import { ComponentFixture, TestBed } from '@angular/core/testing';

import { BarralateralComponent } from './barralateral.component';
import { HttpClientTestingModule } from '@angular/common/http/testing';

describe('BarralateralComponent', () => {
  let component: BarralateralComponent;
  let fixture: ComponentFixture<BarralateralComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [BarralateralComponent],
      imports:[HttpClientTestingModule]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(BarralateralComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
