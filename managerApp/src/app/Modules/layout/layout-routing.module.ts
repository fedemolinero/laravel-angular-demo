import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { LayoutComponent } from './layout.component';
import { PosicionesComponent } from '../components/posiciones/posiciones.component';
import { CompanyComponent } from '../components/company/company.component';
import { ProductosComponent } from '../components/productos/productos.component';

const routes: Routes = [
  { path: '', component: LayoutComponent },
  { path: 'empresas', component: CompanyComponent },
  { path: 'posiciones', component: PosicionesComponent },
  { path: 'productos', component: ProductosComponent },
  // { path: "**", redirectTo: "", pathMatch: "full" }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class LayoutRoutingModule { }
