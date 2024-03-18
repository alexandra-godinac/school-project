<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Despre Patinajul Artistic Competitv</title>
        <style>
/* ------------------- */
/* Reset               */
/* ------------------- */

/* Box sizing */

*,
*::before,
*::after {
    box-sizing: border-box;
}

*{
    margin: 0;
    padding: 0;
    line-height: 1.5;
}

body {
    position: relative;
    background-size: cover;
    background-repeat: no-repeat;
}

nav {
    display: flex;
    flex-direction: column;
    padding: 2em;
    background-color: rgb(1, 134, 134);
}

ul {
    display: flex;
    justify-content: space-around;
    text-transform: uppercase;
    list-style: none; /* Eliminarea stilului implicit al listei */
}

a {
    text-decoration: none;
    color: #ffffff; /* Culoarea link-urilor */
    font-weight: bold;
    font-size: 1.2em;
    transition: color 0.3s ease; /* Tranzitie de culoare pentru link-uri */
}

a:hover {
    color: #555; /* Culoarea link-urilor la hover */
}

/* Stilul pentru sectiunea "Despre" */
#despre {
    max-width: 800px;
    margin: 2em auto;
    text-align: justify;
    padding: 30px 30px;
    word-wrap: break-word;
    background-color: rgba(237, 237, 237, 0.589);
    font-size: 18px;
    font-weight: 500;
}

#despre h1 {
    font-size: 2em;
    margin-bottom: 1em;
    color: #313131;
    text-align: center;
}

#despre p {
    font-size: 1.1em;
    margin-bottom: 2em;
    color: #525252;
    
}

        </style>
    </head>
    <body background="./assets/landing-page.jpg">

    <?php include 'navigation.php'; ?>

        <section id="despre">
            <h1>Despre Patinajul Artistic Competitiv</h1>
            <p>
                Patinajul artistic competitiv reprezintă o formă spectaculoasă de artă și performanță, în care patinatorii își demonstrează abilitățile în fața unei audiențe și a juriului. Fiecare competiție aduce cu sine emoție, tehnică avansată și eleganță.
            </p>
            <p>
                În cadrul acestui sport, patinatorii își construiesc rutine complexe, integrate cu elemente de dans și sărituri. Competițiile sunt evaluate nu doar pentru tehnică, ci și pentru expresivitate și conexiunea cu publicul.
            </p>
            <p>
                Explorează mai multe despre această formă impresionantă de artă pe site și descoperă lumea captivantă a patinajului artistic competitiv.
            </p>
        </section>
    </body>
</html>