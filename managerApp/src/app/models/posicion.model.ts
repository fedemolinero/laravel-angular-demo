export interface Posicion {
  id: number;
  idEmpresa: number;
  idProducto: number;
  nombreEmpresa: string;
  nombreProducto:string;
  fechaEntregaInicio: Date;
  moneda: string;
  precio: number;
  createdAt?: string;
  updatedAt?: string;
}

export interface PosicionResponse {
  posicion: Posicion[];
}