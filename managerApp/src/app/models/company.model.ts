export interface Company {
  id: number;
  cuit: string;
  Razon_Social: string;
  createdAt: string;
  updatedAt: string;
}

export interface CompanyResponse {
  company: Company[];
}