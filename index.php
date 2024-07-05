<?php
/* curl https://whenisthenextmcufilm.com/api */
const api = 'https://whenisthenextmcufilm.com/api';
# Inicializar una nueva sesion de CURL; ch = CURL handle

$ch = curl_init(api);
# Indicar que queremos recibir el resultado de la peticion y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/* Ejecutar la peticion y guardamos el resultado */
$result = curl_exec($ch);
// Transformamos a un array
$data = json_decode($result, true);
curl_close($ch);
//var_dump($data);

// una alternativa seria utlizar file_get_contents
// $result = file_get_contents(API_URL); // Si solo quieres hacer un GET de una api
?>

<head>
  <title>La proxima Pelicula de Marvel</title>
  <!-- Centered viewport --> 
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
  />
</head>

<main>
  <section>
    <!-- <pre style="font-size: 8px; overflow: scroll; height: 250px;">
      <?php var_dump($data); ?>
    </pre> -->
    <img src="<?= $data['poster_url']?>" width="300" height="300" style="border-radius: 16px;"/>
  </section>
  <hgroup>
    <h1><?= $data['title']?></h1>
    <p>Fecha de estreno <?= $data['release_date'] ?></p>
    <p>La siguiente es: <?= $data['following_production']['title']?></p>
  </hgroup>
</main>

<style>
  :root{
    color-scheme: light dark;
  }

  body{
    display: grid;
    place-content: center;
  }

  section {
    display: flex;
    justify-content: center;
    text-align: center;
  }

  hgroup{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  img {
    margin: 0 auto;
  }
</style>