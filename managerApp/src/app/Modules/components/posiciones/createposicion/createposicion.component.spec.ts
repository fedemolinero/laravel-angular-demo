import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CreateposicionComponent } from './createposicion.component';

describe('CreateposicionComponent', () => {
  let component: CreateposicionComponent;
  let fixture: ComponentFixture<CreateposicionComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [CreateposicionComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(CreateposicionComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
