import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { PosicionService } from '../../../../services/posicion.service';
import { EmpresasService } from '../../../../services/empresas.service';
import { Company } from '../../../../models/company.model';
import { ProductService } from '../../../../services/product.service';
import { Product } from '../../../../models/product.model';

@Component({
  selector: 'app-createposicion',
  templateUrl: './createposicion.component.html',
  styleUrls: ['./createposicion.component.scss']
})
export class CreatePosicionComponent implements OnInit {
  posicionForm!: FormGroup;
  empresas: Company[] = [];
  productos: Product[] = [];

  constructor(
    private formBuilder: FormBuilder,
    private posicionService: PosicionService,
    private empresasService: EmpresasService,
    private productService: ProductService,
  ) { }

  ngOnInit(): void {

    this.empresasService.getEmpresas()
      .subscribe(
        {
          next: (empresas: Company[]) => {
            this.empresas = empresas
          },
          error: (e) => console.error(e)
        }
      ),

      this.productService.getProducts()
        .subscribe(
          {
            next: (productos: Product[]) => {
              this.productos = productos
            },
            error: (e) => console.error(e)
          }
        ),

      this.posicionForm = this.formBuilder.group({
        idEmpresa: ['1', [Validators.required]],
        idProducto: ['1', [Validators.required]],
        fechaEntrega: ['', [Validators.required]],
        moneda: ['USD', [Validators.required]],
        precio: ['', [Validators.required, Validators.min(0)]],
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

              console.log(response)
            },
            error: (e) => console.error(e)
          }
        )
    }
  }


}