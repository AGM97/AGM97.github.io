#***Pasos para usar el GIT***
##1. Loguearse en GIT
Para loguearse en GIT hay que conectarse a GIT CMD.
* Introducimos **git config --global user.name "Vuestro_Nombre"**
* Introducimos **git config --global user.email "Vuestro_correo_electronico"**

##2. Recoger los datos que se han subido.
Existen dos proceson según el momento en que se usen:
* La primera vez que nos conectamos usamos el comando **Git clone https://github.com/AGM97/AGM97.github.io.git**
* En el resto de casos accedemos a la carpeta de trabajo mediante `CD` y usamos el comando **Git pull**

##3. Enviar archivos.
Antes de todo vamos a comprobar que los archivos están subidos mediante el comando **Git status**
En caso de que esten saldra el archivo en rojo.

Después ponemos el comando **Git add .**

Cuando subamos el archivo ponemos en comando **git commit -m "Algún_comentario_propio"** para subir un comentario para llevar un registro

Por último usamos el siguiente comando para subir los archivos con su commit complementado **Git push**
