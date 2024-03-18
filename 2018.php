<!DOCTYPE html>
<html lang="ro">
    <head>
        <meta charset="UTF-8">
        <title>Jocurile olimpice de iarna 2018</title>
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
        <h1>Olimpiada de Patinaj Artistic - PyeongChang 2018</h1>
        
        <p>Olimpiada de Patinaj Artistic de la PyeongChang 2018 a fost un eveniment spectaculos care a adunat cei mai talentați patinatori din întreaga lume. Desfășurată în perioada 9 - 25 februarie 2018, competiția a fost marcată de performanțe remarcabile și momente emoționante.</p>

        <h2>Individual Masculin</h2>
        <p>În proba de individual masculin, japonezul Yuzuru Hanyu a demonstrat încă o dată suprematia sa, câștigând medalia de aur. Shoma Uno, tot din Japonia, și spaniolul Javier Fernandez au ocupat locurile doi și trei.</p>
        <ol>
            <li><strong>Yuzuru Hanyu (Japonia)</strong> - Medalie de Aur</li>
            <li><strong>Shoma Uno (Japonia)</strong> - Medalie de Argint</li>
            <li><strong>Javier Fernandez (Spania)</strong> - Medalie de Bronz</li>
        </ol>

        <h2>Individual Feminin</h2>
        <p>La individual feminin, Alina Zagitova din Rusia a impresionat juriul și publicul și a câștigat medalia de aur. Compatrioata sa, Evgenia Medvedeva, și canadianca Kaetlyn Osmond au completat podiumul.</p>
        <ol>
            <li><strong>Alina Zagitova (Rusia)</strong> - Medalie de Aur</li>
            <li><strong>Evgenia Medvedeva (Rusia)</strong> - Medalie de Argint</li>
            <li><strong>Kaetlyn Osmond (Canada)</strong> - Medalie de Bronz</li>
        </ol>

        <h2>Perechi</h2>
        <p>Probele la perechi au fost dominante pentru echipajul german, compus din Aljona Savchenko și Bruno Massot, care au cucerit medalia de aur. Cuplurile din China și Canada au obținut medalii de argint, respectiv bronz.</p>
        <ol>
            <li><strong>Aljona Savchenko și Bruno Massot (Germania)</strong> - Medalie de Aur</li>
            <li><strong>Sui Wenjing și Han Cong (China)</strong> - Medalie de Argint</li>
            <li><strong>Meagan Duhamel și Eric Radford (Canada)</strong> - Medalie de Bronz</li>
        </ol>

        <h2>Dans</h2>
        <p>Competiția la dans a fost câștigată de cuplul canadian Tessa Virtue și Scott Moir, care au obținut medalia de aur. Echipajele din Franța și Statele Unite au urcat pe locurile doi și trei ale podiumului.</p>
        <ol>
            <li><strong>Tessa Virtue și Scott Moir (Canada)</strong> - Medalie de Aur</li>
            <li><strong>Gabriella Papadakis și Guillaume Cizeron (Franța)</strong> - Medalie de Argint</li>
            <li><strong>Maia Shibutani și Alex Shibutani (Statele Unite)</strong> - Medalie de Bronz</li>
        </ol>
    </div>
    </body>
</html>