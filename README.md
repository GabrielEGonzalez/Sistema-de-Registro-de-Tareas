
---

# **Sistema de Registro de Tareas**

## 📋 **Descripción**

Este proyecto es una aplicación web desarrollada en **PHP** que permite gestionar una lista de tareas pendientes. Los usuarios pueden **agregar**, **editar**, **eliminar** y **cambiar el estado** de las tareas. Los datos se almacenan en un archivo **JSON**, lo que permite la persistencia entre sesiones.

---

## 🚀 **Requerimientos**

### 1. **Página Principal (Lista de Tareas)**

* Muestra una tabla con las tareas registradas, incluyendo:

  * **Nombre de la tarea**
  * **Descripción**
  * **Fecha límite**
  * **Estado** (Pendiente, En Progreso, Completada)
  * Opciones para **Editar**, **Cambiar Estado** o **Eliminar** la tarea

### 2. **Agregar Tarea**

* Un formulario que permite agregar una nueva tarea con:

  * **Nombre** de la tarea (obligatorio)
  * **Descripción** (opcional)
  * **Fecha límite** (obligatorio)
  * Estado inicial: **Pendiente**
* Valida que el **nombre** y la **fecha límite** sean correctos.

### 3. **Editar Tarea**

* Permite modificar los datos de una tarea existente.
* Guarda los cambios y redirige a la página principal.

### 4. **Cambiar Estado**

* Permite cambiar el estado de una tarea entre:

  * **Pendiente**
  * **En Progreso**
  * **Completada**

### 5. **Eliminar Tarea**

* Permite eliminar una tarea seleccionada de la lista.
* Muestra un mensaje de confirmación antes de proceder con la eliminación.

---

## 🗂️ **Estructura de Archivos**

```plaintext
tareas_app/
│
├── index.php  # Página principal con lista de tareas.
├── public/       
│   ├── add.php              # Formulario para agregar una nueva tarea.
│   ├── edit.php             # Formulario para editar una tarea existente.
│   ├── delete.php           # Página para eliminar una tarea.
│   ├── cambiar_estado.php  # Cambia el estado de una tarea.
│   └── style.css            # Estilos personalizados para la aplicación.
│
├── data/
│   └── tareas.json          # Archivo JSON para almacenar las tareas.
│
├── helpers/
│   └── funciones.php       # Funciones auxiliares (validaciones, filtrado, etc).
│
└── README.md               # Descripción y guías para el proyecto.
```

---

## 📥 **Instrucciones de Instalación**

1. **Clona el repositorio**:

   ```bash
   git clone https://github.com/tu_usuario/tareas_app.git
   ```

2. **Configura tu servidor local**:

   * Si usas **XAMPP** o cualquier servidor PHP compatible, coloca la carpeta del proyecto en el directorio **htdocs**.
   * Si usas otro servidor, asegúrate de que el servidor esté configurado para ejecutar PHP correctamente.

3. **Accede a la aplicación**:

   * Abre tu navegador y accede a la URL: `http://localhost/tareas_app/public/index.php`

4. **Persistencia de datos**:

   * Las tareas se almacenan en el archivo **`data/tareas.json`**. Asegúrate de que el servidor tenga permisos de escritura sobre este archivo para que los datos se guarden correctamente.

---

## ⚙️ **Funcionalidades**

* **Agregar Tarea**: Permite agregar tareas con nombre, descripción y fecha límite.
* **Editar Tarea**: Modifica los detalles de una tarea existente.
* **Eliminar Tarea**: Elimina tareas de la lista.
* **Cambiar Estado**: Cambia el estado de las tareas entre "Pendiente", "En Progreso" o "Completada".
* **Filtrar Tareas**: Filtra las tareas por estado (Pendiente, En Progreso, Completada).

---

## 🛠️ **Tecnologías Usadas**

* **PHP**: Lenguaje de backend para la lógica y la manipulación de datos.
* **HTML**: Estructura de la interfaz de usuario.
* **CSS**: Diseño visual de la aplicación (con Bootstrap para el estilo y personalización).
* **JSON**: Persistencia de datos para almacenar las tareas de manera sencilla.

---

## 🌱 **Contribuciones**

¡Las contribuciones son bienvenidas! Si deseas mejorar el proyecto, realiza un **fork**, haz tus cambios y envía un **pull request**. Aquí algunos ejemplos de mejoras que puedes aportar:

* Mejorar la validación de datos.
* Agregar nuevas funcionalidades, como la autenticación de usuarios.
* Hacer mejoras en el diseño.

---

## 📄 **Licencia**

Este proyecto está bajo la licencia **MIT**. Puedes ver más detalles en el archivo **LICENSE**.

---


