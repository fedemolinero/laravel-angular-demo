// Modules
import { NgModule } from "@angular/core";
import { CommonModule } from "@angular/common";
import { HttpClientModule, provideHttpClient, withFetch } from "@angular/common/http";
import { FormsModule, ReactiveFormsModule } from "@angular/forms";
import { LayoutComponent } from './layout.component';
import { CompanyComponent } from "../../empresasModule/company/company.component";
import { CreatePosicionComponent } from "../../posicionesModule/components/posiciones/createposicion/createposicion.component";
import { PosicionesComponent } from "../../posicionesModule/components/posiciones/posiciones.component";
import { PosicionService } from "../../posicionesModule/services/posicion.service";
import { ProductosComponent } from "../../productosModule/components/productos/productos.component";
import { BarralateralComponent } from "../barralateral/barralateral.component";
import { CategoryService } from "../services/category.service";
import { LayoutRoutingModule } from "./layout-routing.module";
import { ProductService } from "../../productosModule/services/product.service";

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
    CompanyComponent,
    CreatePosicionComponent
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
