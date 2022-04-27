# CarterelaCine

CarterelaCine

## Requisitos

- Aviso de cookies
- Dos áreas en la web
  - Pública
    - Mensaje bienvenida
    - Login
  - Privada
    - Dar de alta película
    - Buscar
    - Listado

## Base de datos

```
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

## Datos de ejemplo
