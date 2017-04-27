*> Hackerrank - Algoritmos / Implementación*

# El libro de colorear
---

### Planteamiento

El profesor de dibujo de Brie le pidio a la clase que tomarán su libro con **n** páginas en la pagina **p**. Brie puede comenzar a pasar paginas desde el inicio (ej. desde la pagina 1) o desde el final (ej. desde la pagina **n**), y ella siempre pasa las paginas 1 por 1. Cuando ella abre el libro la pagina 1 siempre esta de lado derecho.

![Libro de Brie](https://s3.amazonaws.com/hr-challenge-images/0/1481920803-d2b54f38f0-book.png)

Cada pagina en el libro tiene 2 caras, frente y trasera, eceptuando la ultima que solo cuanta con frente, dependiendo del número total de paginas en el libro.

Dado **n** y **p**, encuenta el número de paginas que Brie debe pasar para poder llegar a **p**.

#### Formato de los datos

- La primer linea contiene un número entero **n**, mostrando el número de paginas en el libro.
- La segunda linea contiene un número entero **p**, mostrando la pagina a la que Brie debe llegar.

#### Condicionales

- 1 <= **n** <= 10^5^ | (1,000,000)
- 1 <= **p** <= **n**

#### Resultado esperado

Encuentra el número entero mostrando el total de páginas que Brie tuvo que pasar para llegar a **p**.

### Ejemplos

#### Datos

```
6
2
```

#### Resultado

```
1
```

#### Explicación

Dados los datos presentados podemos saber que Brie necesita encontrar la pagina 2 (**p**), de un libro de 6 paginas (**n**), **por lo tanto**:

- Si empiesa desde la pagina 1 tendría que pasar 1 pagina
	![Paso 1](https://s3.amazonaws.com/hr-challenge-images/22564/1467398713-1decf68d06-UntitledDiagram6.png)
- Si comienza de la pagina 6, tendría que pasar 2 paginas
	![Paso 2](https://s3.amazonaws.com/hr-challenge-images/22564/1467397150-52d0a8213b-UntitledDiagram3.png)
==Siempre buscamos pasar el menor número de paginas por lo que nuestro resultado correcto seria la opción 1==