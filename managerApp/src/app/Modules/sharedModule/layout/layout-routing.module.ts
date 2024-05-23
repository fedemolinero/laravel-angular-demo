import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { LayoutComponent } from './layout.component';
import { CompanyComponent } from '../../empresasModule/company/company.component';
import { CreatePosicionComponent } from '../../posicionesModule/components/posiciones/createposicion/createposicion.component';
import { PosicionesComponent } from '../../posicionesModule/components/posiciones/posiciones.component';
import { ProductosComponent } from '../../productosModule/components/productos/productos.component';

const routes: Routes = [
  { path: '', component: LayoutComponent },
  { path: 'empresas', component: CompanyComponent },
  { path: 'posiciones', component: PosicionesComponent },
  { path: 'productos', component: ProductosComponent },
  { path: 'createposicion', component: CreatePosicionComponent },
  { path: "**", redirectTo: "", pathMatch: "full" }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class LayoutRoutingModule { }
