export interface Company {
  id: number;
  cuit: string;
  razonSocial: string;
  createdAt: string;
  updatedAt: string;
}

export interface CompanyResponse {
  company: Company[];
}