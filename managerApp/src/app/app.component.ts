import { HttpClient } from '@angular/common/http';
import { Component, OnInit, VERSION } from '@angular/core';

interface FeDeX {
  IdTipoProducto: number;
  descripcion: string;
  created_at: string;
  updated_at: string;
}

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrl: './app.component.scss'
})
export class AppComponent implements OnInit {

  title = 'managerApp';

  name = "Angular " + VERSION.full;
  url = "http://127.0.0.1:8000/api/productos";
  url1 = "http://127.0.0.1:8000/api/posiciones";

  constructor(private http: HttpClient) { }

  ngOnInit() {
    this.callApi();
  }

  datos: any;

  callApi() {
    this.http.get<any>(this.url)
      .subscribe(
        (datax: any) => {
          console.log(datax)
        });
  }

}
