import { ComponentFixture, TestBed } from '@angular/core/testing';
import { CreatePosicionComponent } from './createposicion.component';


describe('CreateposicionComponent', () => {
  let component: CreatePosicionComponent;
  let fixture: ComponentFixture<CreatePosicionComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [CreatePosicionComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(CreatePosicionComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
