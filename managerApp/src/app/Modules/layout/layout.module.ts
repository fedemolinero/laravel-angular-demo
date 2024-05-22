// Modules
import { NgModule } from "@angular/core";
import { CommonModule } from "@angular/common";
import { HttpClientModule, provideHttpClient, withFetch } from "@angular/common/http";
import { FormsModule, ReactiveFormsModule } from "@angular/forms";
import { LayoutComponent } from './layout.component';
import { LayoutRoutingModule } from "./layout-routing.module";
import { CategoryService } from "../../services/category.service";
import { ProductosComponent } from "../components/productos/productos.component";
import { ProductService } from "../../services/product.service";
import { BarralateralComponent } from "../components/barralateral/barralateral.component";
import { PosicionesComponent } from "../components/posiciones/posiciones.component";
import { CompanyComponent } from "../components/company/company.component";
import { PosicionService } from "../../services/posicion.service";

@NgModule({
  imports: [
    CommonModule,
    HttpClientModule,
    ReactiveFormsModule,
    LayoutRoutingModule,
    FormsModule,
    CommonModule
  ],
  declarations: [
    LayoutComponent,
    BarralateralComponent,
    ProductosComponent,
    PosicionesComponent,
    CompanyComponent
  ],
  providers: [
    ProductService,
    PosicionService,
    CategoryService,
    provideHttpClient(withFetch()),
  ],
  exports: []
})

export class LayoutModule { }
