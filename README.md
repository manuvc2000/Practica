Preparación del despliegue de una Aplicación Web, Emanuel 2º Daw 

 

¿Dónde va a realizarse el despliegue? 

El despliegue de esta aplicación web se va a realizar en Apache ya que he elegido una aplicación de PHP 

 

¿Existe un workflow automatizado definido para el despliegue? 

No existe ningún proceso automatizado 

 

¿Existe un entorno de pre-producción? 

Nuestro entorno de pre producción sería XAMPP, iniciamos el servicio y podemos ejecutar nuestro código PHP en local 

 

El despliegue 

 

1.Instalables: 

 
- Los instalables están en esta ruta  https://github.com/manuvc2000/Practica.git 

 
- Conseguir conexión con MySQL e introducir el siguiente script: 

(El nombre de la base de datos es en mayusculas)

CREATE DATABASE EJERCICIO; 

USE EJERCICIO;

CREATE TABLE clientes ( 
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
); 

2.Prerrequisitos: 

 - S. O Linux 

 - Ip fija en el servidor Linux.  

 - Puerto 80 abierto en el router. 

 - Apache 

 - Instalar paquete PHP en linux 

 
3.Instrucciones: 

 - Crear directorio y cambiar permisos a permisos de propietarios. 

 - Después crear un archivo nombrephp.conf 

 - Dentro del archivo nombrephp.conf  se pone el nombre del servidor al que se accederá 

 - Habilitar el sitio web y luego recargarlo con los comandos de apache 

 - Crear dos archivos, uno HTML y otro php y que el archivo HTML tenga como nombre “índex” 

 - Buscamos el archivo hosts e introducimos el nombre del servidor que pusimos en el directorio nombrephp.conf junto con su IP 

 - En Azure, habilitamos el puerto 80 para que nuestra aplicación PHP pueda conectarse al servidor (Si es que no se ha hecho en la parte de prerrequisitos) 

 - Buscar en el navegador de internet el nombre del servidor que se puso 

 

 

4.Verificaciones: 

 - Comprobar que la base de datos se ha creado correctamente  

 - Comprobar que los botones de la página redirigen correctamente a la página que tiene que redirigir 

 - Comprobar que se han descargado todos los archivos necesarios  

 - Comprobar que se cumplen todos los prerrequisitos 

 - Comprobar que la aplicación PHP se conecta correctamente al servidor 

 

 

5.Rollback: 

 - Si la base de datos no se ha creado correctamente hay que ver si la conexión entre el código y la base de datos es correcta. También habrá que analizar el código y comprobar que no haya fallos 

 
 - Si los botones no redirigen donde deberían hay que mirar si la conexión con la página es correcta. También habrá que comprobar que el archivo de enlace cuando pulsamos un botón es correcto 

 
 - Si los archivos no se han descargado hay que comprobar que el Firewall, el antivirus, o protección del navegador no esté borrando los archivos descargados, normalmente esto no debería ser un problema 


- Si uno de los pre requisitos no se ha cumplido se debería comprobar cuál de ellos falta por cumplirse, ya que si no se cumplen todos no se podrá desplegar la aplicación web 

 
 - Si hemos comprobado todo eso y hemos visto que todo está correcto, pero aun así no funciona la aplicación o el despliegue web, tenemos que dar unos cuantos pasos atrás para desinstalar la aplicación. 

Borramos el directorio que creamos en la ruta /var/www/nombreDirectorio, para ello accedemos a la ruta en la que se encuentra el archivo: cd /var/www y luego ponemos rm nombreDirectorio. Ahora nos dirigimos a la ruta /etc/apache2/sites-available y hacemos lo mismo, borramos el archivo nombrephp.conf y los volvemos a crear de la misma manera de antes realizando los mismos pasos. 
