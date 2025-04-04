import { Component, OnDestroy, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { Subscription } from 'rxjs';
import { Product } from '../../../../productosModule/models/product.model';
import { Company } from '../../../../empresasModule/models/company.model';
import { PosicionService } from '../../../services/posicion.service';
import { EmpresasService } from '../../../../empresasModule/empresas.service';
import { ProductService } from '../../../../productosModule/services/product.service';

@Component({
  selector: 'app-createposicion',
  templateUrl: './createposicion.component.html',
  styleUrls: ['./createposicion.component.scss']
})
export class CreatePosicionComponent implements OnInit, OnDestroy {
  posicionForm!: FormGroup;
  empresas: Company[] = [];
  productos: Product[] = [];

  private empresasSubscription: Subscription = new Subscription();
  private productosSubscription: Subscription = new Subscription();

  constructor(
    private formBuilder: FormBuilder,
    private posicionService: PosicionService,
    private empresasService: EmpresasService,
    private productService: ProductService,
    private router: Router
  ) { }


  ngOnDestroy(): void {
    this.empresasSubscription.unsubscribe();
    this.productosSubscription.unsubscribe();
  }

  ngOnInit(): void {

    this.empresasSubscription.add(

      this.empresasService.getEmpresas()
        .subscribe(
          {
            next: (empresas: Company[]) => {
              this.empresas = empresas
            },
            error: (e) => console.error(e)
          }
        )
    );

    this.productosSubscription.add(
      this.productService.getProducts()
        .subscribe(
          {
            next: (productos: Product[]) => {
              this.productos = productos
            },
            error: (e) => console.error(e)
          }
        )
    );

    this.posicionForm = this.formBuilder.group({
      idEmpresa: ['', [Validators.required]],
      idProducto: ['', [Validators.required]],
      fechaEntrega: ['', [Validators.required]],
      moneda: ['USD', [Validators.required]],
      precio: ['0', [Validators.required, Validators.min(0)]],
    });
  }

  onSubmit() {
    if (this.posicionForm.invalid) {
      return;
    } else {
      this.posicionService.savePosicion(this.posicionForm.value)
        .subscribe(
          {
            next: (response: any) => {
              this.router.navigate(['']);
            },
            error: (e) => console.error(e)
          }
        )
    }
  }


}