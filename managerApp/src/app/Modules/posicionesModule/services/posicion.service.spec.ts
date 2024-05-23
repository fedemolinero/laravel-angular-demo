import { TestBed } from '@angular/core/testing';

import { HttpClientTestingModule } from '@angular/common/http/testing';
import { PosicionService } from './posicion.service';

describe('PosicionService', () => {
  let service: PosicionService;

  beforeEach(() => {
    TestBed.configureTestingModule({
      imports: [HttpClientTestingModule]
    });
    service = TestBed.inject(PosicionService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
