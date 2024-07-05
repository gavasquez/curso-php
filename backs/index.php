<?php

  $name = "Andres";
  $isDev = true;
  $age = 39;

  /* Constantes */
  define('LOGO_URL', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4UEqKmemOWxpXkepqlKidQHvkAOP3nTMcGw&s'); // Constantes no se pueden cambiar
  const NOMBRE = 'Miguel';


  var_dump( $name );

  $output = "Hola $name, con edad de $age";

  //* Ternaria
  $outputAge = $isDev ? 'Eres desarrollador' : 'No eres desarrollador';
  echo $outputAge;

  //* Match
  $outputAge2 = match($age) {
    0,1,2 => 'Eres un bebé',
    3,5,6,7,9,10 => 'Eres un niño',
    11,12,13,15,16 => 'Eres un adolecente',
    default => 'Eres un adulto'
  };

  //* Arrays
  $bestLanguages = ["PHP", "JavaScript", "Python", 1 ,2];
  $bestLanguages[] = "Java"; // Agregar un elemento al final del array
  $bestLanguages[3] = "TypeScript";

  $person = [
    "name" => "Miguel",
    "age" => 27,
    "isDev" => true,
    "languages" => ["PHP", "JavaScript", "Python"],
  ];

  $person["name"] = "Andres";
  $person["languages"][] = "Java";

  echo $person["name"];

?>

<h3>
  El mejor lenguaje es: <?= $bestLanguages[3] ?>
</h3>
<ul>
  <?php foreach($bestLanguages as $key => $language) : ?>
    <li><?= $key . " ". $language ?></li>
  <?php endforeach ?>
</ul>

<h2><?= $outputAge2 ?></h2>


<?php if ($isDev) :?>
  <h2>Eres desarrollador</h2>
<?php else : ?>
  <h2>No eres desarrollador</h2>
<?php endif;?>

<h1>
<?php

echo "Hola ". $name ."<br>";
echo $output;
?>
</h1>
<img src="<?= LOGO_URL ?>" alt="PHP Logo" width="200" height="200" />
<h3>
  <?= NOMBRE ?>
</h3>
<style>
  :root{
    color-scheme: light dark;
  }

  body{
    display: grid;
    place-content: center;
  }
</style>