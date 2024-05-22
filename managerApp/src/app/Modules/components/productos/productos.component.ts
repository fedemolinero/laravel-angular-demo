import { Component, OnDestroy, OnInit } from '@angular/core';
import { Subscription, map } from 'rxjs';
import { Router } from '@angular/router';
import { ProductService } from '../../../services/product.service';

@Component({
  selector: 'app-productos',
  templateUrl: './productos.component.html',
  styleUrl: './productos.component.scss'
})
export class ProductosComponent implements OnInit, OnDestroy {

  products: string[] = [];
  private subscription: Subscription = new Subscription();

  constructor(
    private productService: ProductService,
  ) { }

  ngOnDestroy(): void {
    this.subscription.unsubscribe();
  }

  ngOnInit(): void {
    this.subscription.add(
      this.productService.getProducts()
        .subscribe(
          {
            next: (products: any) => {
              this.products = products
            },
            error: (e) => console.error(e)
          }
        )
    );
  }


}
