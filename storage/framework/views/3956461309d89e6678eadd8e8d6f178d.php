<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('css_index/Eleyenda.css')); ?>">

</head>
<body>

<header>
<a href="<?php echo e(route('inicio')); ?>" class="logo">
    <img src="<?php echo e(asset('local_storage/img/logo.png')); ?>"  alt="">
    <h2>La Mágica Colombia</h2>
</a>


<nav>
    <a href="<?php echo e(route('subirhistoria')); ?>" class="link">¿Quieres subir tú historia?</a>
    <a href="<?php echo e(route('info')); ?>" class="link">¿Quienes Somos?</a>
    <a href="<?php echo e(route('contac')); ?>" class="link">Contacto</a>
    <a href="<?php echo e(route('registro')); ?>" class="link">Registráte</a>
</nav>
</header>

<div class="audioo">
    <h2>Música de ambiente</h2>
    <div class="ojoo">
        <img src="<?php echo e(asset('local_storage/img/ojo.gif')); ?>" >
    </div>
<audio  controls autoplay >
    <source src="<?php echo e(asset('local_storage/img/musicafondo.mp3')); ?>"  type="audio/mpeg">
    
</audio></div>

<div class="leyenda">
    <div id="fondoo">

    </div>
    <h1>La Candileja</h1>
    <figure>
        <img id="candileja" src="<?php echo e(asset('local_storage/img/Rezo.png')); ?>"  alt="">
    </figure>
    
    <p> El rezo del pescado es un ritual generalizado en los grupos llaneros, el cual se desarrolla con ocasión del comienzo del destete de los bebés antes de su primer año y con ocasión de la primera menstruación femenina. En este trabajo se presenta una descripción del ritual de acuerdo a nuestras observaciones en las comunidades Cuiba de Mochuelo y Sikuani de Tsamani en Casanare. Se incluyen igualmente los textos de los rezos que aunque hasta el momento sólo han sido parcialmente traducidos, presentan un interés especial para la comprensión del simbolismo y el ritual. </p>
    
    
        <a href="<?php echo e(route('leyenda')); ?>"><img id="flecha" src="<?php echo e(asset('local_storage/img/derecha.png')); ?>"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="<?php echo e(asset('local_storage/img/ojo.gif')); ?>" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="<?php echo e(asset('local_storage/img/musicafondo.mp3')); ?>"  type="audio/mpeg">
    
</audio></div><?php /**PATH C:\xampp\htdocs\Magica_colombia\resources\views/HistoriasMeta/HistoriaElRezoDelPesacdo.blade.php ENDPATH**/ ?>