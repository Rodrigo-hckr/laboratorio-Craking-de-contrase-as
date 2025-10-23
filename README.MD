# Laboratorio de Login Vulnerable para Hacking Ético

Este proyecto simula un sistema de autenticación web vulnerable, ideal para prácticas de hacking ético ofensivo en entornos controlados. Permite realizar pruebas de técnicas como:

- Fuerza bruta
- Inyección SQL
- Bypass de autenticación
- Enumeración de usuarios

# Estructura del proyecto

/login-lab/ 

├── index.php # Formulario de login 
├── login.php # Lógica de autenticación (vulnerable) 
├── db.php # Conexión a la base de datos 
├── success.php # Página de bienvenida 
├── error.php # Página de error 
└── /sql/ 
      └── init.sql # Script para crear la base de datos


## 🛠 Requisitos

- Servidor web Apache (XAMPP, LAMP, etc.)
- PHP 7+
- MySQL
- Navegador web

## ⚙️ Instalación

1. Clona o descarga este repositorio en tu servidor local.
2. Importa el archivo `sql/init.sql` en MySQL para crear la base de datos.
3. Asegúrate de que Apache y MySQL estén activos.
4. Accede a `index.php` desde tu navegador.

## Pruebas ofensivas sugeridas

- `admin' --` → Bypass de autenticación
- `' OR '1'='1` → Inyección lógica
- Ataques con herramientas como `sqlmap`, `Hydra`, `Burp Suite`

## Advertencia

Este entorno es **exclusivamente educativo**. No debe utilizarse en sistemas reales ni redes públicas. Asegúrate de tener permisos explícitos para realizar pruebas ofensivas.

## Créditos

Desarrollado como parte de prácticas de hacking ético ofensivo. Inspirado en entornos de aprendizaje como TryHackMe, Hack The Box y OWASP.

