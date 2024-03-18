<!DOCTYPE html>
<html lang="ro">
    <head>
        <meta charset="UTF-8">
        <title>Olimpiada de Patinaj Artistic - Individual Feminin</title>
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
        <h1>Proba Individual Feminin - Olimpiada de Patinaj Artistic</h1>
        
        <p>Proba de patinaj artistic la individual feminin este una dintre cele mai așteptate și spectaculoase competiții din cadrul Jocurilor Olimpice de Iarnă. Această probă evidențiază grația, forța și tehnica patinatoarelor, oferind publicului momente de neuitat.</p>

        <h2>Olimpiada de Patinaj Artistic - Sochi 2014</h2>
        <p>La Olimpiada de Patinaj Artistic de la Sochi 2014, competiția la individual feminin a fost marcată de performanțe extraordinare. Adelina Sotnikova din Rusia a câștigat medalia de aur în fața unei competiții foarte puternice, inclusiv a celei considerate până atunci regina patinajului, Kim Yuna din Coreea de Sud, care a obținut argintul. Medalia de bronz a fost câștigată de Carolina Kostner din Italia.</p>

        <h2>Olimpiada de Patinaj Artistic - PyeongChang 2018</h2>
        <p>La Olimpiada de Patinaj Artistic de la PyeongChang 2018, competiția la individual feminin a fost dominată de patinatoarele rusești. Alina Zagitova a impresionat juriul și publicul, câștigând medalia de aur, în timp ce Evgenia Medvedeva a obținut argintul. Medalia de bronz a revenit canadiencei Kaetlyn Osmond.</p>

        <h2>Olimpiada de Patinaj Artistic - Beijing 2022</h2>
        <p>La Olimpiada de Patinaj Artistic de la Beijing 2022, probele la individual feminin au continuat să ofere momente de excepție. Kamila Valieva din Rusia a cucerit aurul, într-o competiție cu o atenție mediatică ridicată. Anna Shcherbakova, tot din Rusia, a obținut argintul, iar Alexandra Trusova, tot din Rusia, a completat podiumul cu medalia de bronz.</p>
    </div>
   
</body>
</html>