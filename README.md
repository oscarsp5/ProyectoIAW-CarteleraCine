
<h1>💻 Proyecto Cartelera Cine   |   En proceso 🛠 </h1>
  <h2>Pagina Web Cartelera Cine/h2>
   <h2>⌨ Esta pagina contiene codigo:</h2>
      <ul>
  <li>HTML</li>
  <li>CSS</li>
  <li>PHP</li>
  <li>JS</li>
      </ul>
  
  <h2>📋 Los requisitos que nos piden son: </h2>
  
  <ul>
    <li>Aviso de cookies</li>
   <li>Dos areas en la web:
  	<ul>
  		<li>Publica</li>
  		  <ul>
        <li>Mensaje Bienvenida</li>
          <li>Login</li>
  	    </ul>
      <li>Privada</li>
        <ul>
          <li>Dar de alta una película</li>
          <li>Buscar una pelicula</li>
          <li>Listado de peliculas</li>
  	    </ul>
  	</ul>
  </li>
  </ul>

   <h2>🗂 Para esta pagina usaremos la siguiente base de datos:</h2>
      CREATE DATABASE cartelera;

DROP TABLE IF EXISTS peliculas;
DROP TABLE IF EXISTS usuarios;

CREATE TABLE peliculas(
    id          MEDIUMINT NOT NULL AUTO_INCREMENT,
    titulo      varchar(100),
    duracion    int,
    descripcion varchar(2048),
    caratula    varchar(50),
    trailer     varchar(255),
    PRIMARY KEY (id)
);

CREATE TABLE usuarios(
    id          MEDIUMINT NOT NULL AUTO_INCREMENT,
    login       varchar(100),
    pass_hash   varchar(255),
    PRIMARY KEY (id)
);
```
