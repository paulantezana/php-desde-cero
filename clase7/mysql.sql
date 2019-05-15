-- Conectar al servidor MySQL
mysql -h127.0.0.1 -uroot -p

-- Desconectar
quit
exit

-- Ver la versión de MySQL
SELECT VERSION();

-- Ver la fecha actual
CURRENT_DATE();

-- Las palabras clave no son sensibles a mayúsculas y minúsculas.

-- Ver la fecha y la hora actual
SELECT NOW();

-- Ver usuario actual
SELECT USER();

-- Una sentencia puede ocupar varias líneas, MySQl ejecutará el comando cuando encuentre el punto y coma.

-- Si decidimos no ejecutar la consulta por cualquier razón, en lugar de colocar el punto y coma colocamos \c para cancelar.

-- Comando para ver las bases de datos
SHOW DATABASES;

-- Eliminar base de datos
DROP DATABASE tienda;

-- Crear una base de datos
CREATE DATABASE tienda;

--- Accesar a una base de datos
USE tienda;

-- Mostrar las tablas de una base de datos
SHOW TABLES;

-- Crear una tabla
CREATE TABLE productos (
  id int(11) unsigned NOT NULL AUTO_INCREMENT,
  nombre varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  talla varchar(5) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  precio int(11) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- Ver los detalles de una tabla
DESCRIBE productos;

-- Eliminar una tabla
DROP TABLE productos;

-- Insertar registros en la tabla
INSERT INTO `productos` (`id`, `nombre`, `talla`, `precio`) VALUES (NULL, 'Camiseta CSS', 'L', '1200');

INSERT INTO productos VALUES (NULL, 'Camiseta CSS', 'L', 1200);
INSERT INTO productos VALUES (NULL, 'Camiseta JS', 'S', 2000);
INSERT INTO productos VALUES (NULL, 'Camiseta HTML', 'M', 1200);
INSERT INTO productos VALUES (NULL, 'Camiseta PHP', 'L', 2000);

-- Seleccionar nombre y precio de productos
SELECT nombre, precio FROM productos;

-- Seleccionar Productos con precio 1200
SELECT nombre, precio FROM productos WHERE precio = 1200;

-- Ordenar resultados
SELECT id, nombre, precio FROM productos ORDER BY precio ASC;
SELECT nombre, precio FROM productos WHERE precio > 1200 ORDER BY nombre DESC;

-- Actualizar un registro
UPDATE productos SET precio = 1500 WHERE nombre = 'Camiseta CSS';
UPDATE productos SET precio = 1500 WHERE id = 1;

-- Seleccionar el nombre y el precio de los productos que tenga la letra S en cualquier parte del nombre y cuyo precio sea mayor o igual a 1500.
SELECT nombre, precio FROM productos WHERE nombre LIKE '%S%' AND precio >= 1500;

-- Eliminar registros: RECUERDEN NUNCA OLVIDAR EL WHERE
-- Elimina el producto con el id 3
DELETE FROM productos WHERE id = 3;
