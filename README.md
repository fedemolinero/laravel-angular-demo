# CRM INTEGRADO CON MERCADO DE GRANOS
El CRM se alimentará de la información generada en herramienta comercial mediante la vinculación entre posiciones y ofertas. Permitiendo generar una trazabilidad del negocio desde su nacimiento. 

La herramienta comercial mostrará las posiciones de mercado vigentes que sean de interés para el usuario logueado en el sistema. Dicho interés lo podrá configurar cada usuario fácilmente y en cualquier momento.

Los principales usuarios del sistema serán los comerciales de la empresa Negocios de granos. 


# Layout de la Plataforma (Usuarios, Roles y Funciones )
La nómina de funcionalidades la trabajaremos en el archivo Funcionalidades a los fines de poder agregar vinculaciones a usuarios con acceso

- Roles de Usuarios con acceso a la plataforma:

Administrador de la plataforma, Responsable Comerciales, Comerciales, Administrativos, Representantes: son comerciales externos a la organización. Podrán visualizar sólo la información de sus clientes a diferencia de los comerciales que podrán visualizar la información todos los clientes del sistema. Acceden a la información completa de todos los compradores de la plataforma (accede a datos relacionados a la demanda). 
Accede sólo a la información de la oferta de los clientes que pertenecen a su propia cartera. 
Soporte Equipo: Es el rol por defecto que asigna la plataforma a cualquier usuario que ingresa por primera vez y tendrá accesos restringidos.

- De un usuario se guardará la siguiente información:

Nombre y Apellido: dato de ingreso obligatorio. Se tomará de Gsuit  
Teléfono: dato numérico de ingreso obligatorio. Se tomará de Gsuit. 
Correo electrónico: se deberá registrar la cuenta de Gsuite y la misma se utilizará para el login en el ingreso a la plataforma. https://developers.google.com/identity/choose-auth  
Rol: el sistema asignará el rol 6-Soporte Equipo hasta tanto el administrador de la plataforma le asigne el rol correspondiente, las opciones posibles serán: administrador de la plataforma, administrativo, comercial, representante y responsable comercial. Los responsables comerciales tendrá accesos diferenciales en las consultas de operaciones por vendedor (probablemente, a diferencia del resto de los comerciales, tendrán acceso a las operaciones de todos los comerciales que de ellos dependan)
Oficina: oficina a la que pertenece el usuario. Este dato lo ingresará el administrador de la plataforma luego de haber sido generado el usuario. Las opciones posibles se encuentran en la solapa Layout del archivo Datos Base.
Un comercial tendrá asociada una sola oficina. Se registrarán las dependencias entre oficinas con fines de consolidación de datos para informes de gestión. 
El proceso de alta de usuarios se detalla en el documento Caso de uso: Creación de usuarios. El sistema permitirá sólo el ingreso de usuarios con cuenta de gsuit cuyo dominio es @ngranos.com.ar


Los comerciales podrán:
Registrar y editar empresas/clientes.
Registrar contactos/personas y asociarlos a empresas.
Registrar los volúmenes estimados de compra y venta 
Crear comunicaciones / eventos
Crear hitos en CRM
Clientes (Persona Jurídica)
No tendrán acceso a la plataforma.
Se partirá de la base disponible en el sistema actual. Para esto se importará la base de datos de clientes. En el siguiente archivo se están revisando los datos mínimos requerido por cliente: Planilla alta cliente
Los clientes de Negocios de Granos se registran en el sistema como empresas.

De un cliente se guardará la siguiente información:
Cuit: el sistema realizará la validación de este dato 
Nombre o Razón social: dato de ingreso obligatorio
Teléfono oficina: dato de ingreso obligatorio 
Correo electrónico: dato de ingreso opcional
Dirección (Dirección, Localidad, Provincia, Código postal oficina): dato de ingreso obligatorio. Se registrará una única dirección. Se obtendrán los datos por Georreferencia
Oficina: el sistema deberá permitir la carga adicional de datos de contacto de las oficinas pertenecientes a la empresa  
Nombre oficina:
Teléfono oficina: dato de ingreso obligatorio 
Correo electrónico: dato de ingreso opcional
Direcciones (Dirección, Localidad, Provincia, Código postal oficina): dato de ingreso obligatorio. Se registrará una única dirección. Se obtendrán los datos por Georreferencia
Perfil: campo obligatorio, opciones posibles: vendedor, comprador, vendedor y comprador
Categoría: dato de ingreso obligatorio. El usuario podrá ingresar más de una. La nómina de valores posibles detectadas hasta el momento se encuentra en la Solapa Clientes del archivo Datos Base. El sistema ofrecerá las opciones según el perfil ingresado previamente y en base a la configuración de perfil que se define en la categoría.  
Comisión Comprador: este dato sólo se solicitará si el perfil es comprador, es un   valor porcentual de ingreso obligatorio (en general es del 1%) 
Comisión Vendedor: este dato sólo se solicitará si el perfil es comprador, es un   valor porcentual de ingreso obligatorio 
Nota: el sistema solicitará ambas comisiones para el casos en el que el perfil del cliente es vendedor y comprador 
Actividad: dato de ingreso obligatorio para consumo. La nómina de valores posibles detectadas hasta el momento se encuentra en la solapa Clientes del archivo Datos Base. El usuario podrá seleccionar más de una opción.
Categoría Crediticia: las opciones posibles vender (verde), preguntar (amarillo), no vender (rojo). Lo carga un responsable administrativo, la evaluación y cambio puede ser puntual o de revisión general periódica. (filtro por cliente activo/inactivo)  
Nivel de afinidad: campo obligatorio, opciones posibles: Fidelizado / No Fidelizado
Archivos adjuntos, serán obligatorios para habilitar un cliente.
Cuando un cliente se da de alta, se notificará a administración (todos los usuarios habilitados cuyo rol es 5-Administrativo) vía email para que lo evalúe y lo pase a activo si lo considera.

- Mail
Asunto: Registro de nuevo cliente 
Cuerpo: Se registró el cliente “Cuit+Razón Social”, ingrese al sistema para completar la información necesaria y habilitarlo para operar 
 
- La documentación que deberá estar adjunta es:
Constancia de inscripción en Afip
Constancia de inscripción en IIBB. Tiene vencimiento  
CM05 (convenio multilateral): sólo en caso de que corresponda. Tiene vencimiento 
Certificados de exclusión. Tiene vencimiento 
Datos Bancarios: adjunto con información del banco, cuenta y CBU para depósito de Iva y depósito de mercadería
El sistema ofrecerá al usuario la posibilidad de seleccionar el tipo de archivo que desea adjuntar, solicitará la carga del mismo y el ingreso de la fecha de caducidad. El sistema contará con la posibilidad de cargar nuevos tipos de archivos indicando si los mismos son de ingreso obligatorio (para operar) y si poseen fecha de caducidad
Comerciales: el sistema ofrecerá, por defecto, el usuario logueado pero permitirá la selección de cualquiera de los comerciales (donde comercial es cualquier usuario del sistema cuyo rol es:  comercial, responsable comercial o representante). El usuario podrá optar por no completar este dato
Contactos relacionados: la especificación de los datos a registrar se desarrollará en la sección “Contactos (Persona Física)” de este documento. Se puede dar de alta un cliente sin contactos asociados (para clientes potenciales, es probable que se registre primero la empresa y luego los contactos) 
Establecimientos: el usuario deberá cargar la nómina de establecimientos sólo para clientes cuyo perfil es vendedor (Una empresa tiene N establecimientos y un establecimientos pertenece a una única empresa)  Comprador de consumo interno o fábrica de girasol: 
Nombre del establecimiento. Dato de ingreso obligatorio
Tipo: Campo o Planta de Acopio
Establecimiento Propio: dato obligatorio, las opciones posibles son: Si / No
Puerto Principal: Cada establecimiento tiene su puerto natural, aunque en algún caso en particular pueda vender a otro puerto si el precio es lo suficientemente conveniente para absorber el costo extra de logística. El sistema ofrecerá al usuario la nómina de puertos disponibles y el usuario podrá seleccionar sólo uno, las opciones detectadas hasta el momento están en la solapa Mercado del archivo Datos Base
Hectáreas agrícolas: este dato aparecerá sólo para establecimientos cuyo tipo es “Campo” (principalmente interesa conocer quién tiene más o menos de 1000 ha). Es un dato de ingreso no obligatorio (con opción no conozco/no aplica)
Hectáreas ganaderas: este dato aparecerá sólo para establecimientos cuyo tipo es “Campo”. Es un dato de ingreso no obligatorio (con opción no conozco)
Capacidad de Almacenaje: este dato aparecerá sólo para establecimientos cuyo tipo es “Planta de Acopio”
Ubicación del Establecimiento (campo). Se utilizará la georreferenciación permitiendo al usuario buscar la localidad y luego utilizar el mapa para ubicar el lugar exacto en donde el mismo está emplazado. En base a la georreferenciación, el sistema registrará los datos de Localidad, Provincia para poder ser utilizada como filtros de manera más óptima 
Nota: Alrededor del 70% de los establecimientos permanece constante (campos propios). El resto puede variar cada 1, 2 o 3 años pero, en general, se mantienen en la zona geográfica 

- Ejemplo (estancia La Paz, 1500 ha, Gral Lagos, CP 2100, Pto Gral San martin)
Volúmenes estimados de compra o venta. La especificación de los datos a registrar se desarrollará en la sección “Volúmenes estimados de compra y venta por cliente” de este documento. 
Estados: las opciones son potencial, activo o inactivo.
Un cliente es potencial cuando los comerciales consiguen su contacto y lo registran en el sistema para luego comunicarse con él ya que piensan que podrían atraerlo como cliente activo.
Un cliente es activo cuando se encuentra realizando operaciones con frecuencia y normalidad.
Un cliente es inactivo cuando no registra operaciones en los últimos 6 a 12 meses 

Las 3 calificaciones se van a inferir de los datos de la plataforma verificando si tiene órdenes o posiciones. 

- Un cliente nuevo quedará pendiente de habilitación. El área de administración será la responsable de realizar la evaluación del cliente para evitar fraudes y lo podrá habilitar o deshabilitar según considere. En cualquier momento, los administrativos, los comerciales, los responsables comerciales, los representantes y el administrador de la plataforma pueden Deshabilitar clientes.

- Las acciones que se podrán realizar con Clientes que se encuentran pendientes de habilitación son:
Ver y editar sus datos
Asociar contactos
Cargar eventos de CRM
Cargar datos de existencias estimadas

- Si un cliente no está habilitado no se podrá:
Cargar Posiciones
Cargar Órdenes
Asociar Órdenes y Posiciones
Cerrar un negocio  (slip) 


Cuando un cliente es pasado a Activo por la administración, se le envía un correo electrónico a la dirección de correo asociada a la empresa (si existe). En dicho correo se incluye un link a un formulario Web donde deberá cargar información personal relacionada a Productos que tiene disponibles con volúmenes comercializados y pendientes de comercializar, datos de sus establecimientos, datos de contacto, Puerto principal, etc. 

Mail:

Remitente: noreply@ngranos.com.ar

Asunto: Bienvenido
La empresa A REGUEIRA Y CIA. S.A. CEREALES  se encuentra activa para operar con Negocio de granos.
Lo invitamos a llenar el siguiente formulario para completar los datos de su empresa.   
Saludos

- Se almacenará la última fecha de contacto con cada cliente para poder utilizarlo en filtro de clientes con operaciones en un determinado periodo, o clientes que no operan desde hace X tiempo. 
Volúmenes estimados de Compra y Venta por cliente
Por cada cliente se realizará, periódicamente, un relevamiento respecto a los volúmenes estimados de compra o venta (dependiendo del tipo de cliente) para cada uno de los productos que comercializa

Dependiendo del tipo de cliente, comprador o vendedor, el sistema solicitará los volúmenes estimados de venta o compra con los siguientes datos:
Fecha disponible: dato de ingreso obligatorio. Se registrará en formato de mes y año (ejemplo 09/2020). Es una fecha estima, luego, al momento de buscar ofertas para  cubrir la demanda, el sistema traerá posiciones cuyo periodo esté dentro de un rango más amplio 
Establecimiento: ubicación
Producto: dato de ingreso obligatorio. La nómina de valores posibles detectadas hasta el momento se encuentra en la Solapa Clientes del archivo Datos Base (incluirá hacienda) 
Cantidad aproximada: dato de ingreso obligatorio. El usuario ingresará un valor numérico. Las unidades posibles son Toneladas o Cabezas dependiendo del producto ingresado en el campo anterior. Ejemplos: 10 toneladas, 50 cabezas

El sistema registrará los datos y guardará la fecha y hora de carga y el usuario que la realiza.

Volúmenes estimados de Compra
Volúmenes estimados de Venta
Fecha disponible: (año)
Fecha disponible: octubre 2021
Cantidad aproximada:
Cantidad aproximada: 
Establecimiento:
Establecimiento: 
Producto:
Producto:


- Contactos (Persona Física)
Los contactos podrán ser asignados a los comerciales, un contacto podrá tener más de un comercial asociado (comercial, responsable comercial o responsable comercial) para que éstos puedan realizar el seguimiento de sus necesidades, órdenes y negocios fácilmente. Éstas asignaciones podrán ser modificadas en cualquier momento ya que se podrán dar ocasiones donde el comercial se ausenta y sus clientes deberán ser asistidos por otra persona para que sus negocios no queden descuidados. Por defecto se asignan al comercial que los crea. 

- De un contacto se guardará la siguiente información:
Nombre del contacto: dato de ingreso obligatorio
Teléfono celular: dato de ingreso obligatorio
Teléfono fijo:
Correo electrónico: dato de ingreso opcional
Empresa a la cual pertenece (un contacto pertenece a una única empresa): dato de ingreso obligatorio (no nulo)
Fecha de cumpleaños: dato de ingreso opcional
Cargo ( combo): dato de ingreso obligatorio. 
Las opciones posibles son:
Comercial
Logística
Administración
Gerencia
Director 	
Nivel de jerarquía (1, 2, 3, 4, 5): dato de ingreso obligatorio
Redes sociales: dato de ingreso opcional. Nombre red social + Link 
Twitter 
Facebook
Instagram

- El sistema permitirá a los comerciales consultar 
Información sobre las empresas.
Información sobre los contactos de las empresas con filtros según ‘cliente propio’ y ‘empresa sin comercial’. 
Clientes que operen con determinado producto y volumen de hectáreas, estos datos deberán estar cargados en su perfil. 
Todas las órdenes cargadas, según su estado y podrá filtrarlos por cliente, puerto, producto, volumen, etc. 
Listado de Comunicaciones / eventos según estado y usuario asignado (vencidas, tareas para hoy, tareas futuras).

- Filtros sobre clientes:
Campo propio S/N: se le puede generar por ej, una tarjeta de crédito.
Mis clientes
Cantidad de hectáreas (más de 1000)  Definir escalas. 
Categoría: productor, cooperativa, acopiador, intermediario, otros  
Puerto Base/Zona
Último contacto: Cada cuánto hay que contactarse para: mantener vínculo, fidelizar, asegurar el contacto (se mantiene comunicación con el 50% de los clientes y la herramienta recuerda que hay que comunicarse). Por ej, en Cargil había que contactar 50 clientes por semana  

- De cada cliente/empresa se podrá consultar 
Toda la información de su perfil.
Contactos asociados.
Órdenes según estado.
Posiciones sobre las cuales se realizaron órdenes confirmadas. 

- Mercado activo 
Cada comercial y representante deberá cargar las órdenes y posiciones de sus clientes y así poder compartir dicha información con el resto de los interesados. 
Posiciones

- De una posición (demanda), el sistema registrará los siguientes datos:
Producto: campos de ingreso obligatorio. Se seleccionará de la lista de productos del sistema, las opciones detectadas hasta el momento se encuentran en la solapa Productos del archivo Datos Base. Se utilizará el atributo “Uso frecuente” para marcar los productos más utilizados y que el sistema los muestra en las primeras posiciones. Nota: el Maíz y el Trigo son el 90% del mercado interno. 
Calidad: campo de ingreso obligatorio, el sistema ofrecerá las opciones según las calidades que existan en el sistema, las opciones detectadas hasta el momento se encuentran en la solapa Productos del archivo Datos Base y el usuario podrá seleccionar sólo una. Para los productos que no tienen calidad definida, el usuario podrá elegir la opción cámara.
Observación de calidad: campo de ingreso opcional, de texto libre
Rango de fecha de entrega: dato de ingreso obligatorio. Se registrará como fecha desde y hasta en formato de día, mes y año y luego, desde algunas secciones, se visualizará en formato de mes desde, mes hasta 
Comprador (Cliente): campo de ingreso obligatorio, se seleccionará de la lista de clientes. En general existen entre 5 y 6 compradores que representan el 80% de las ventas (exportación y fábrica), luego existen alrededor de 30 clientes (mercado de consumo) que representan el 20% restante.
Destino: el sistema muestra 2 campos: 
Puerto: el sistema permitirá la selección de uno de los puertos de la nómina existente en el sistema (para posiciones con destino exportación) 
Establecimiento: este campo aparecerá sólo si el cliente posee establecimientos asociados.
El sistema permitirá la carga de un puerto o un establecimiento pero no ambos.  
Moneda: Las opciones posibles son Pesos y USD, utilizar las abreviaciones AR$ y USD respectivamente. El campo no tendrá ningún valor asignado por defecto   El valor por defecto será USD 
Precio: una posición tendrá varios precios a lo largo del tiempo, que deberán ser actualizados por los comerciales durante la vigencia de la posición. Tendrá un único precio vigente por período, producto y destino.  
Condición de Pago: campos de ingreso No obligatorio. El usuario podrá seleccionar uno de los valores posibles. El listado se encuentra en la solapa Mercado del archivo Datos Base. Cualquier aclaración adicional se ingresará en el campo de observaciones. 
Posición excepcional (S/N): Las posiciones marcadas como excepcionales aparecerán en el panel independientemente de los filtros que cada comercial posea. En el panel de mercado deberá utilizarse alguna iconografía que las distinga. Opción por defecto: No.   
Volumen limitado (S/N): El operador podrá marcar si la posición es de volumen limitado o no. En posiciones de volumen limitado (que pueden alcanzar sólo el 10%), los comerciales, deben reaccionar de manera rápida antes de que se cierre la posición. En el panel de mercado deberá utilizarse alguna iconografía que las distinga. Opción por defecto: No   
Posición a trabajar (Si/No): indica que el comprador puede devolverlas si lo desea. En el panel de mercado deberá utilizarse alguna iconografía que las distinga. Opción por defecto: No   
Crop: opciones new crop/old crop. Sin ninguna por defecto 
Observaciones: campo de ingreso opcional, de texto libre
Usuario creador: el sistema asignará el usuario que está realizando la carga de la posición 
Fecha y hora de creación: el sistema asignará de forma automática la fecha y hora en la que se ingresó la posición


Estados de las posiciones
Creada: esta inicial que toman las posiciones al momento de la carga
Denunciada: Los comerciales podrán denunciar una posición cargada con información que, por algún motivo, no sea válida o se encuentre desactualizada, para que su creador se encargue de actualizarla. Las posiciones denunciadas figuran en el listado de posiciones ‘Activas’ pero resaltadas para mostrar su situación. Al denunciar, el sistema solicitará la carga de un comentario de texto libre donde, el denunciante, deberá cargar una breve descripción de la información que no es válida
Vencida: Al finalizar el día, el sistema sacará de vigencia todas las posiciones previo control de que no existan órdenes asociadas. 
Baja: Cuando una posición cargada en el sistema se retira del mercado, un comercial deberá darla de baja en el sistema. Una vez dada de baja la posición ya no se verá en el listado principal de posiciones vigentes, esta información se verá reflejada automáticamente en todas las pantallas de los usuarios evitando que trabajen sobre información desactualizada. 

Los comerciales tendrán la posibilidad de tomar cualquier posición pre-existente y generar una nueva a partir de sus datos. Esta acción acelerará los procesos de carga de posiciones 

Una posición sólo puede ser eliminada ( baja, denunciada) por el usuario que la creó 

Una posición eliminada sólo puede consultarse, en el caso de requerir su activación, el sistema permitirá crear una nueva posición a partir de los datos de esta.
Acumulador de posiciones
Las posiciones que ingresen los comerciales se registran en el acumulador de posiciones. Al ingresar una posición nueva o al volver a estar en vigencia una vencida el sistema verificará la existencia de ofertas que pueden llegar a coincidir y enviará un mail a los usuarios creadores de las mismas.
Bosquejo pantalla de posiciones 
