import { Component, OnDestroy, OnInit } from '@angular/core';
import { CategoryService } from '../../../services/category.service';
import { Router } from '@angular/router';
import { Subscription, map } from 'rxjs';

@Component({
  selector: 'app-barralateral',
  templateUrl: './barralateral.component.html',
  styleUrl: './barralateral.component.scss'
})
export class BarralateralComponent implements OnInit, OnDestroy {

  categories: string[] = [];
  private subscription: Subscription = new Subscription();

  constructor(
    private categoryService: CategoryService,
    private router: Router
  ) { }

  ngOnDestroy(): void {
    this.subscription.unsubscribe();
  }

  ngOnInit(): void {
    this.subscription.add(
      this.categoryService.getCategories()
        // Limitar a los primeros tres elementos después de recibir los datos
        .pipe(
          map
            (data => data.slice(0, 3))
        )
        .subscribe(
          {
            next: (categories: string[]) => {
              this.categories = categories
            },
            error: (e) => console.error(e)
          }
        )
    );
  }

  goBack() {
    this.router.navigate(['']);
  }

}
