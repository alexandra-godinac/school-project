<!DOCTYPE html>
<html lang="ro">
    <head>
        <meta charset="UTF-8">
        <title>Olimpiada de Patinaj Artistic - Individual Masculin</title>
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
    background-color: darkcyan;
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
#continut {
    max-width: 800px;
    margin: 2em auto;
    text-align: justify;
    padding: 30px 30px;
    word-wrap: break-word;
    background-color: rgba(237, 237, 237, 0.589);
    font-size: 18px;
    font-weight: 500;
}

</style>
</head>
<body background="./assets/landing-page.jpg">

    <?php include 'navigation.php'; ?>
    <div id="continut">
        <h1>Proba Individual Masculin - Olimpiada de Patinaj Artistic</h1>
        
        <p>Proba de patinaj artistic la individual masculin este una dintre cele mai spectaculoase și competitive competiții din cadrul Jocurilor Olimpice de Iarnă. În această probă, patinatorii își demonstrează abilitățile tehnice, forța și eleganța în fața publicului și a juriului.</p>

        <h2>Olimpiada de Patinaj Artistic - Sochi 2014</h2>
        <p>La Olimpiada de Patinaj Artistic de la Sochi 2014, Yuzuru Hanyu din Japonia a cucerit medalia de aur la individual masculin cu un program impresionant. Patrick Chan din Canada a obținut argintul, în timp ce Denis Ten din Kazahstan a câștigat medalia de bronz.</p>

        <h2>Olimpiada de Patinaj Artistic - PyeongChang 2018</h2>
        <p>La Olimpiada de Patinaj Artistic de la PyeongChang 2018, japonezul Yuzuru Hanyu a confirmat suprematia sa, câștigând medalia de aur la individual masculin. Shoma Uno, tot din Japonia, și spaniolul Javier Fernandez au ocupat locurile doi și trei.</p>

        <h2>Olimpiada de Patinaj Artistic - Beijing 2022</h2>
        <p>La Olimpiada de Patinaj Artistic de la Beijing 2022, competiția la individual masculin a fost una extrem de disputată. Nathan Chen din SUA s-a remarcat prin performanțe de excepție, câștigând medalia de aur. Shoma Uno din Japonia și Yuma Kagiyama, tot din Japonia, au obținut locurile doi, respectiv trei.</p>
    </div>
</body>
</html>