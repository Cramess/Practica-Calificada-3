Desarrollo de Aplicaciones en Internet

Garcia Ccencho Cristian Rufino 

En este ejercicio, deberás crear una base de datos y conectar una tabla llamada mascota a una aplicación Laravel. La tabla deberá tener al menos los siguientes campos:
•	id (autoincremental, clave primaria)
•	nombre (string)
•	tipo (string) — Ejemplo: "Perro", "Gato", "Pájaro", etc.
•	edad (integer) — Edad en años.
•	raza (string)
•	peso (decimal) — En kilogramos.
•	fecha_adopcion (date) — Fecha de adopción.
Instrucciones:
1.	Crear la base de datos y la tabla
Crea la base de datos con una tabla llamada mascota en Laravel. Utiliza migraciones para crear la tabla con los campos mencionados.

2.	Insertar Datos Ficticios
Inserta al menos 15 registros de prueba en la tabla mascota con diferentes valores para cada campo.

3.	Modelo y Controlador
Crea un modelo Mascota que se corresponda con la tabla mascota y un controlador MascotaController.
modelo Mascota

Dentro del controlador, implementa las siguientes consultas utilizando Eloquent:
o	Consulta 1: Devuelve todas las mascotas de determinado tipo con todos sus datos 
(el usuario podrá elegir el tipo a través de un formulario).

o	Consulta 2: Devuelve las mascotas ordenadas por el campo edad de forma ascendente 
(el usuario podrá elegir a través de un formulario si quiere ordenar de forma ascendente o descendente).

o	Consulta 3: Devuelve las mascotas filtradas por el campo tipo y raza, mostrando solo una cantidad 
específica de registros de esta consulta (el usuario puede elegir la cantidad de registros a través
de un formulario).

4.	Vista
Crea las vistas necesarias para mostrar todas las consultas solicitadas. Utiliza Blade para mostrar
 la información de las mascotas devuelta por el controlador.

5.	Rutas
Configura las rutas necesarias en web.php para conectar la vista con el controlador. Asegúrate de que
cada acción esté accesible desde su respectiva URL.
Requisitos:
•	Usa Eloquent ORM para las consultas y el controlador.
•	Usa Blade para la vista.
•	Asegúrate de que la aplicación esté correctamente conectada a la base de datos.


