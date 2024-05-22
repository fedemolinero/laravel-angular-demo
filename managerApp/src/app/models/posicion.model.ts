export interface Posicion {
  id: number;
  idEmpresa: number;
  idProducto: number;
  nombre_empresa: string;
  nombre_producto:string;
  fechaEntregaInicio: Date;
  moneda: string;
  precio: number;
  createdAt?: string;
  updatedAt?: string;
}

export interface PosicionResponse {
  posicion: Posicion[];
}