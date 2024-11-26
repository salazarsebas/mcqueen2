# Paso 1: Imagen base para React
FROM node:18 AS build

# Paso 2: Establecer el directorio de trabajo
WORKDIR /app

# Paso 3: Copiar los archivos del proyecto React
COPY ./frontend/package.json ./frontend/package-lock.json ./

# Paso 4: Instalar las dependencias
RUN npm install

# Paso 5: Construir la aplicación React
COPY ./frontend ./
RUN npm run build

# Paso 6: Servir los archivos estáticos usando Nginx
FROM nginx:alpine

# Copiar los archivos estáticos construidos a la carpeta de Nginx
COPY --from=build /app/build /usr/share/nginx/html

# Exponer el puerto en el que se sirve la app
EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]
