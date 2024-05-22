import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-redirect',
  template: '',
})
export class RedirectComponent implements OnInit {

  constructor(
    private router: Router
  ) { }


  ngOnInit(): void {

    if (window.location.pathname === '/') {
      console.log('its here')
      this.router.navigate(['/layout']);
    }

  }

}
