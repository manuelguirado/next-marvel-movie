<?php
//make a request to this API https://whenisthenextmcufilm.com/api
header("Access-Control-Allow-Origin:");
$url = "https://whenisthenextmcufilm.com/api";
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
$data = json_decode($result, true);
curl_close($ch);
  
   

?>
<main>
    <section>
        <h1><?= $data["title"]; ?></h1>
            
           
            <img src="<?= $data["poster_url"];?>" style="border-radius: 16px"; width="300px" alt="poster de <?= $data["title"]; ?>">
            <p> fecha de estreno : <?=  $data["release_date"]; ?></p>
            <p>le quedan : <?= $data["days_until"]; ?> dias</p>
            
            <p> descripcion: <?=  $data["overview"]; ?></p>
            <p><?= $data["type"]; ?></p>
            <p>la siguiente pelicula es: <?= $data["following_production"]["title"]; ?></p>
    </section>

</main>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>la proxima pelicula de marvel</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
>
</head>
<style>
    :root{
        color-scheme: light dark;   
      
        
    }
    body{
       display: grid;
       place-content: center;

          
    }
    section{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
</style>
