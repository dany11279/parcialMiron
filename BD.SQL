CREATE TABLE insumos (
    insumo_id serial primary key not null,
    nombre_insumo varchar(50) not null,
    existencia integer not null,
    marca_producto varchar(50) not null,
    nombre_proveedor varchar(50) not null,
    precio_insumo integer not null
    );