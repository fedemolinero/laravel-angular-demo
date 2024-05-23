import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Posicion } from '../../models/posicion.model';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class PosicionService {

  private apiUrl = "http://127.0.0.1:8000/api/posiciones";

  constructor(private http: HttpClient) { }

  getPosicion(): Observable<Posicion[]> {
    return this.http.get<Posicion[]>(this.apiUrl);
  }

  savePosicion(dataSave: any): Observable<Posicion[]> {
    return this.http.post<any>(this.apiUrl, dataSave)
  };
  
}

