<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $pokemon = ["gengar", "flareon", "bewear", "luxray", "poliwrath"];
        $img = ["https://assets.pokemon.com/assets/cms2/img/pokedex/full/094.png", 
                "https://assets.pokemon.com/assets/cms2/img/pokedex/full/136.png",
                "https://assets.pokemon.com/assets/cms2/img/pokedex/full/760.png", 
                "https://assets.pokemon.com/assets/cms2/img/pokedex/full/405.png", 
                "https://assets.pokemon.com/assets/cms2/img/pokedex/full/062.png"];
        print_r($pokemon);
        print_r($img);

        for ($i=0; $i < count($pokemon); $i++) { 
        ?>
         <article>
            <p><?= $pokemon[$i] ?></p>
            <img src= "<?= $img[$i] ?>" alt="fotos">
         </article> 
         <?php  
        }
        
            
        
    ?>

</body>
</html>