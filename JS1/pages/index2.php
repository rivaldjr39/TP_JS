<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/bootstrap5_3/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>TP2 DOM</title>
</head>
<body>
    <header class="d-flex">
        <h1>TP2 DOM</h1>
        <nav>
            <ul class="d-flex gap-5">
                <li><a href="#" class ="fw-bold text-decoration-none text-black">Cours</a></li>
                <li><a href="#" class ="fw-bold text-decoration-none text-black">Contact</a></li>
                <li><a href="#" class ="fw-bold text-decoration-none text-black">Accueil</a></li>
            </ul>
        </nav>
        
    </header>

    <main>
        <h2 class = "section-title">Articles recent</h2>
        <article>
            <h3>Article 1</h3>
            <p>Texte de l'article 1</p>
        </article>
        <article>
            <h3>Article 2</h3>
            <p>Texte de l'article 2</p>
        </article>
    </main>
    <script>
        const sectionTitle = document.querySelector('.section-title');
        console.log(sectionTitle.innerText);

        const getliensAll = document.getElementsByTagName('a');
        console.log(getliensAll[0].innerText);
        console.log(getliensAll[1].innerText);
        console.log(getliensAll[2].innerText);

        const gettitlearticle2 = document.querySelectorAll('article h3');
        console.log(gettitlearticle2[1].innerText);

        const getparaarticle = document.getElementsByTagName('p');
        console.log(getparaarticle[0].innerText);
        console.log(getparaarticle[1].innerText);
        


    </script>
</body>
</html>