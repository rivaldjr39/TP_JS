<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP DOM</title>
</head>
<body>
    <h1 id="titre">Bienvenue sur mon site</h1>

    <p class="intro">Ceci est une introduction</p>
    <p class="intro"> Deuxieme paragraphe d'introduction</p>

    <div>
        <p>Paragraphe dans une div</p>
    </div>
    <script>
        const h1 = document.getElementById("titre");
        console.log(h1.innerText);

        const para = document.getElementsByClassName("intro");
        console.log(para[0].innerText);
        console.log(para[1].innerText);
        
        const p1 = document.querySelector(".intro");
        console.log(p1.innerText);

        const tag = document.getElementsByTagName("p");
         console.log(tag.length);
    </script>
</body>
</html>