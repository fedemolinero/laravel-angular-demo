import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable, of } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class CategoryService {
  private apiUrl = 'https://dummyjson.com/products/categories';

  constructor(private http: HttpClient) { }

  getCategories(): Observable<string[]> {
    return of(['MENU ITEM 1', 'MENU ITEM 2', 'MENU ITEM 3', 'MENU ITEM 4']);
    // return this.http.get<string[]>(this.apiUrl);
  }

}