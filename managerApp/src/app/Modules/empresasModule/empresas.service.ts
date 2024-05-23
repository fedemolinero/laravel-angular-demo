import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { HttpClient } from '@angular/common/http';
import { Company } from './models/company.model';

@Injectable({
  providedIn: 'root'
})
export class EmpresasService {

  private apiUrl = "http://127.0.0.1:8000/api/empresas";

  constructor(private http: HttpClient) { }

  getEmpresas(): Observable<Company[]> {
    return this.http.get<Company[]>(this.apiUrl);
  }

}
