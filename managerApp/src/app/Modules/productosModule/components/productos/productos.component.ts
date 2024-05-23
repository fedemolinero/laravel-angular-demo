import { Component, OnDestroy, OnInit } from '@angular/core';
import { Subscription } from 'rxjs';
import { Product } from '../../models/product.model';
import { ProductService } from '../../services/product.service';

@Component({
  selector: 'app-productos',
  templateUrl: './productos.component.html',
  styleUrl: './productos.component.scss'
})
export class ProductosComponent implements OnInit, OnDestroy {

  products: Product[] = [];
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
            next: (products: Product[]) => {
              this.products = products
            },
            error: (e) => console.error(e)
          }
        )
    );
  }


}
