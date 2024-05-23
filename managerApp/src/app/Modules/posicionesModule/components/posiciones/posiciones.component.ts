import { Component } from '@angular/core';
import { Subscription } from 'rxjs';
import { Router } from '@angular/router';
import { PosicionService } from '../../services/posicion.service';
import { Posicion } from '../../models/posicion.model';

@Component({
  selector: 'app-posiciones',
  templateUrl: './posiciones.component.html',
  styleUrl: './posiciones.component.scss'
})
export class PosicionesComponent {

  posiciones: Posicion[] = [];
  private posicionSubscription: Subscription = new Subscription();

  constructor(
    private posicionService: PosicionService,
    private router: Router
  ) { }

  ngOnDestroy(): void {
    this.posicionSubscription.unsubscribe();
  }

  ngOnInit(): void {

    this.posicionSubscription.add(
      this.posicionService.getPosicion()
        .subscribe(
          {
            next: (posiciones: Posicion[]) => {
              this.posiciones = posiciones
            },
            error: (e) => console.error(e)
          }
        )
    );
  }

  creaPosicion() {
    this.router.navigate(['createposicion']);
  }

}
