<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

Para usarlo en su pc tienen que hacer los siguientes pasos<br>
0- Ver si tienen PHP 8.2.12 o xampp 8.2.12, y node JS
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://i.ytimg.com/vi/Xhogt0cKqcU/maxresdefault.jpg" width="400" alt="Laravel Logo"></a></p>
1- Instalar composer
<p align="center"> Para instalarlo se van a aca <a href="https://getcomposer.org/download/"> descargan e instalan </a>  hacen la del ingeniero (reinician) y luego abren la terminal
</p>
2- instalar Laravel
<p align="center">ejecutar el siguiete comando <br><i><b>composer global require laravel/installer</b></i><br>
y luego de que se ejecute toda esa webada crean un nuevo proyecto de laravel: <br>
     <i><b>laravel new example-app</b></i><br> o <br>
    <i><b>composer create-project laravel/laravel example-app</b></i><br>
</p>
3- Instalar el andamiaje de Auth y Boostrap
<p align="center">
luego de que hayan creado el proyecto en la carpeta de su servidor(si no como sirve :b) dentro de la carpeta del proyecto ejecutan el siguiente comanddo (en la terminal claro)
<br><i><b>composer require laravel/ui</b></i><br>
luego añaden el andamiaje de boostrap con <br>
     <i><b>php artisan ui bootstrap</b></i><br>
    para luego implementarlo con:
     <i><b>php artisan ui bootstrap --auth</b></i><br>
</p>
3- ya pueden clonar este proyecto en esa carpeta 🩹
<br>
<b>Nota:</b>
👨‍🦲 Al principio tiende haber problemas en cuanto node compila las dependencias de css y js por lo tanto es recomendable ejecutar  <i><b>npm run build</b></i> y  <i><b>npm run dev</b></i> si el proyecto no habre en su servidor local ejecuten el comando  <i><b>php artisan serve</b></i> y ya.
