# Proyecto Prueba 1 WordPress – Theme con Tailwind CSS

## 📌 Descripción general
Este proyecto consiste en el desarrollo de un **theme WordPress custom** basado en **_tw de Greg Sullivan**, utilizando **Tailwind CSS** como sistema de estilos principal. El enfoque está orientado a:

- Código limpio y mantenible
- Separación clara entre **contenido** y **UI / decoración**
- Buenas prácticas de performance y versionado
- Diseño responsive mobile-first

El theme está pensado para ser **versionado con Git** y desplegado en entornos profesionales.

**Incluye**
Top bar con email y botón de contacto.
Menú principal flotando sobre el hero, con versión desktop y mobile funcional.
Hero / slider principal funcional y administrable desde el backend.
Secciones del home basadas en mockup, implementadas con template-parts/home.
CPT (Custom Post Types), reemplazando ACF por limitaciones de licencia.

## Gestión del Home Slider

El Home Slider principal se gestiona mediante una **página administrativa personalizada**
(`admin.php?page=home-slider`) incluida en el plugin `vgst-core`.

### Motivo de la implementación

El slider del home fue tratado como un **componente único y global del sitio**, y no como
contenido reutilizable. Por este motivo:

- No se registró como Custom Post Type independiente.
- Se administran sus datos desde una pantalla de configuración específica.
- Su lógica está desacoplada del contenido editorial (productos).

Esta decisión permite:

- Mantener una interfaz administrativa simple y enfocada.
- Evitar sobrecargar el panel con tipos de contenido adicionales.
- Centralizar la gestión del slider principal del sitio.

Los **productos**, en cambio, sí se implementaron como **Custom Post Type**, ya que representan
contenido dinámico, reutilizable y exportable, con ciclo de vida propio.

---

## 🧱 Stack técnico

- **WordPress** (theme custom)
- **PHP** (templates y partials)
- **Plugins** (creación del plugin vgst-core)
- **Tailwind CSS** (layout, spacing, tipografía)
- **HTML semántico**
- **SVG inline y SVG como assets** para UI

## Configuración inicial, resúmen ##

Configuré una página estática como inicio para que WordPress utilice automáticamente front-page.php, respetando la jerarquía de templates y manteniendo el home desacoplado del contenido.


## No se utilizó en este caso ACF Free / ACF Pro

- Decisión consciente por limitaciones de licencia en el caso de ACF Pro.
- ACF Free presenta limitaciones para el normal desarrollo.
- Se resolvió con Custom Post Type + campos nativos:
    o	Imagen destacada
    o	Título
    o	Excerpt (para la descripción de 3 líneas)
    o	Enlace al single
- **Esto es 100% WordPress core, estable, portable.**

---

## 📁 Estructura relevante del theme

```
/wp-content/themes/vgst-tailwind-theme
│
├── assets/
│ ├── js/
│ │ ├── modules/
│ │ │ ├── form-presupuesto.js # Manejo de formularios de presupuesto
│ │ │ ├── hero-slider.js # Lógica del slider principal del home
│ │ │ ├── mobile-menu.js # Toggle y apertura/cierre del menú mobile
│ │ │ └── resenas-slider.js # Slider de reseñas/testimonios
│ └── images/
│ ├── email.svg # Icono email top bar
│ ├── phone.svg # Icono teléfono top bar
│ └── (otros recursos gráficos del front-end)
│
├── template-parts/
│ ├── layout/
│ │ ├── header-content.php # Header principal, top bar, menú desktop y mobile
│ │ └── footer.php # Footer del tema
│ └── home/
│ ├── hero.php # Hero / slider principal
│ ├── card-producto.php # Sección productos
│ ├── resenas.php # Sección reseñas/testimonios
│ └── (otras secciones según mockup del home)
│
├── tailwind.css # Tailwind CSS compilado
├── tailwind.config.js # Configuración de Tailwind, safelist y rutas
├── functions.php # Hooks, enqueue scripts/styles, registro CPT, menus
├── front-page.php # Página principal que incluye todas las secciones del home
└── style.css # Hoja de estilos base del tema (comentarios y overrides)
```

---

## 🎨 Criterios de UI y estilos (Resúmen)

### Tipografía

**Font-size estándar** del proyecto: **Roboto**
`@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');`

---

## 🧩 Subrayados decorativos en títulos

Algunos títulos del sitio incluyen **subrayados realizados mediante imágenes**, por requerimiento de diseño.

### Decisión técnica

Estos subrayados se consideran **elementos decorativos de UI**, no contenido editorial.

Por este motivo:

- ✅ **Se almacenan dentro del theme**
- ❌ No se suben a la Media Library

### Ubicación

```
/assets/images/ui/
```

### Icons

```
/assets/images/icons/
```

### Justificación

- Evita contaminar la librería de medios
- Permite versionado con Git
- Reduce riesgo de borrado accidental
- Refuerza la separación contenido / presentación

---

## 📱 Responsive

- Mobile-first
- Grillas adaptativas con Tailwind
- Footer pasa a columnas apiladas en mobile
- Botones y controles optimizados para touch

---

## Instalación y Configuración

**Requisitos Previos**
- WordPress 6.5
- PHP 7.4+
- MySQL 5.6+

**Pasos de Instalación**

- Clonar repositorio en wp-content/themes/
- Activar el tema desde el administrador de WordPress
- Instalar y activar el plugin vgst-core

## Plugin requerido

Este proyecto utiliza un plugin personalizado para la gestión de contenido dinámico.

Repositorio del plugin:
https://github.com/andresgomesz/vgst-core

### Funcionalidad del plugin

- Registro de CPT para Productos
- Registro de CPT para Home Slider
- Separación clara entre lógica de administración y frontend
- Evita dependencia de ACF (Free o Pro)

## 📁 Estructura del plugin

```
vgst-core/
├── vgst-core.php              # Punto de entrada principal del plugin
├── admin/
│   └── home-slider-admin.php  # Interfaz administrativa para sliders
├── frontend/
│   └── home-slider.php        # Lógica de presentación de sliders
└── includes/
    └── post-types/
        └── producto.php       # Definición del CPT para productos
```
---

**Desarrollo**

# Instalar dependencias de desarrollo
```
npm install
```

# Compilar assets para desarrollo
```
npm run dev
```

# Compilar para producción
```
npm run build
```

---

## 🧠 Criterios generales del proyecto

- No se utilizan imágenes para layout cuando CSS puede resolverlo
- Cuando el diseño lo exige, se documenta la decisión
- UI ≠ contenido
- Todo lo decorativo vive en el theme
- Código legible > hacks visuales

---

## ✍️ Notas finales

Este README documenta **decisiones técnicas reales**, no solo estructura. Su objetivo es:

- Facilitar mantenimiento futuro
- Justificar elecciones de diseño
- Alinear criterios entre desarrolladores (No aplica en este caso)

---

© 2026 – Andrés Sebastián Gómez

