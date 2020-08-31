import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { TravelsComponent } from './travels/travels.component';
import { BlogComponent } from './blog/blog.component';
import { ProductDetailsComponent } from './product-details/product-details.component';
import { CartComponent } from './cart/cart.component';
import { ContactComponent } from './contact/contact.component';



const routes: Routes = [
  {
    path: '', component: TravelsComponent,
  }, {
    path: 'app-blog', component: BlogComponent,
  }, {
    path: 'products/:productId', component: ProductDetailsComponent,
  }, {
    path: 'app-cart', component: CartComponent,
  }, {
    path: 'app-contact', component: ContactComponent,
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
