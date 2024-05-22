import { ComponentFixture, TestBed } from '@angular/core/testing';
import { CreatePosicionComponent } from './createposicion.component';
import { HttpClientTestingModule } from '@angular/common/http/testing';
import { ReactiveFormsModule } from '@angular/forms';


describe('CreateposicionComponent', () => {
  let component: CreatePosicionComponent;
  let fixture: ComponentFixture<CreatePosicionComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [CreatePosicionComponent],
      imports: [
        HttpClientTestingModule,
        ReactiveFormsModule
      ]
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
