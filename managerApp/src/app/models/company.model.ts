export interface Company {
  id: number;
  nombre: string;
  usoFrecuente: string;
  createdAt: string;
  updatedAt: string;
}

export interface CompanyResponse {
  products: Company[];
}