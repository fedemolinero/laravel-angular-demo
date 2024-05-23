import { TestBed } from '@angular/core/testing';
import { EmpresasService } from '../../services/empresas.service';
import { HttpClientTestingModule } from '@angular/common/http/testing';


describe('EmpresasService', () => {
  let service: EmpresasService;

  beforeEach(() => {
    TestBed.configureTestingModule({
      imports: [HttpClientTestingModule]
    });
    service = TestBed.inject(EmpresasService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
