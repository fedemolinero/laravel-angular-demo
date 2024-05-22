import { Component } from '@angular/core';
import { Posicion } from '../../../models/posicion.model';
import { PosicionService } from '../../../services/posicion.service';
import { Subscription } from 'rxjs';
import { Router } from '@angular/router';

@Component({
  selector: 'app-posiciones',
  templateUrl: './posiciones.component.html',
  styleUrl: './posiciones.component.scss'
})
export class PosicionesComponent {

  posiciones: Posicion[] = [];
  private subscription: Subscription = new Subscription();

  constructor(
    private posicionService: PosicionService,
    private router: Router
  ) { }

  ngOnDestroy(): void {
    this.subscription.unsubscribe();
  }

  ngOnInit(): void {

      this.subscription.add(

        this.posicionService.getPosicion()
          .subscribe(
            {
              next: (posiciones: any) => {
                this.posiciones = posiciones
                console.log(posiciones)
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
