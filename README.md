# Instalación

Capacitación de Symfony 2.4

1) Instalar php
    ```sh
    $ sudo apt install php-pear php-fpm php-dev php-zip php-curl php-xmlrpc php-gd php-mysql php-mbstring php-xml libapache2-mod-php
    ```

2) Instalar curl
    ```sh
    $ sudo apt-get install curl
    ```
3) Instalar apache
	```sh
	$ sudo apt install apache2
	```

4) Instalar mysql
	```sh
	$ sudo apt install mysql-server
	```

5) Descargar el composer
	```sh
	$ curl -s https://getcomposer.org/installer | php
	```

6) Descargar el proyecto de symfony
	```sh
	$ php composer.phar create-project symfony/framework-standard-edition $pathProject '2.4.*'
	```

7) Configurar el servidor apache ([referencia](https://stackoverflow.com/questions/25878618/give-php-apache-read-access-outside-of-html)):
	7.1. Indicamos el nombre del dominio virtual host. Se crea el archivo ```settings.php``` en caso de no existir.
	```sh
    $ sudo nano /var/www/config/settings.php
    ```
    7.2. Ingresamos el contenido: donde el ```DocumentRoot``` es la ruta en que descargamos el proyecto ```$pathProject``` y el ```ServerName``` es el nombre del host.

		<VirtualHost *:80>
		    DocumentRoot  /home/lcabrera/Symfony/Administracion
			ServerName symfony.administracion.com
		</VirtualHost> 

    7.3. Configurar el webRoot del apache.
    ```sh
    $ sudo nano /etc/apache2/sites-available/000-default.conf
    ```
    Se modifica la variable ```DocumentRoot``` a la ruta ```$pathProject```  
    ```DocumentRoot  /home/lcabrera/Symfony/Administracion```
    
	7.4. Agregamos el host a nuestras configuraciones:
	```sh
	$ sudo nano /etc/hosts
	```
	
	Se agrega la línea:
	```127.0.0.1    symfony.administracion.com```

8) Reiniciar el servidor apache
    ```sh
    $ sudo service apache2 restart
    ```

# Referencias  

| Tema | Fuente |
| ------ | ------ |
| Instalación Symfony | [Documentación](https://symfony.com/doc/2.4/book/installation.html) |
| Instalación Apache | [Documentación](https://howtoubuntu.org/how-to-install-lamp-on-ubuntu) |

