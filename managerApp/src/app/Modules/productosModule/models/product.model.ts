export interface Product {
  id: number;
  nombre: string;
  usoFrecuente: string;
  createdAt: string;
  updatedAt: string;
}

export interface ProductResponse {
  products: Product[];
}