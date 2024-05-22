import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { RedirectComponent } from './Modules/components/redirect/redirect.component';

const routes: Routes = [
  { path: '', component: RedirectComponent },
  {
    path: 'layout',
    loadChildren: () =>
      import("./Modules/layout/layout.module").then(m => m.LayoutModule)
  },
  { path: "**", redirectTo: "", pathMatch: "full" }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
