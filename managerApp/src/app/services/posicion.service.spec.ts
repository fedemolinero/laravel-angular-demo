import { TestBed } from '@angular/core/testing';

import { PosicionService } from './posicion.service';
import { HttpClientTestingModule } from '@angular/common/http/testing';

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
