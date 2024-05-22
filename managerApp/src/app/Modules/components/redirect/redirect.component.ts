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
      this.router.navigate(['/layout']);
    }

  }

}
