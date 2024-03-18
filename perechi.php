<!DOCTYPE html>
<html lang="ro">
    <head>
        <meta charset="UTF-8">
        <title>Olimpiada de Patinaj Artistic - Perechi</title>
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
        <h1>Probe la Perechi - Olimpiada de Patinaj Artistic</h1>
        
        <p>Probele la perechi în cadrul Olimpiadei de Patinaj Artistic reprezintă un regal al eleganței și al tehnicilor sincronizate. Cuplurile de patinatori impresionează publicul și juriul cu acrobații spectaculoase și simbioza perfectă dintre cei doi parteneri.</p>

        <h2>Olimpiada de Patinaj Artistic - Sochi 2014</h2>
        <p>La Olimpiada de Patinaj Artistic de la Sochi 2014, echipajul rus Tatiana Volosozhar și Maxim Trankov a cucerit medalia de aur la proba de perechi. Ksenia Stolbova și Fedor Klimov, tot din Rusia, au obținut argintul, în timp ce Aliona Savchenko și Robin Szolkowy din Germania au completat podiumul cu medalia de bronz.</p>

        <h2>Olimpiada de Patinaj Artistic - PyeongChang 2018</h2>
        <p>La Olimpiada de Patinaj Artistic de la PyeongChang 2018, echipajul german Aljona Savchenko și Bruno Massot a cucerit medalia de aur la proba de perechi. Cuplurile din China și Canada, respectiv Sui Wenjing și Han Cong, și Meagan Duhamel și Eric Radford, au obținut medalii de argint și bronz.</p>

        <h2>Olimpiada de Patinaj Artistic - Beijing 2022</h2>
        <p>La Olimpiada de Patinaj Artistic de la Beijing 2022, competiția la proba de perechi a fost dominată de cuplurile din China. Sui Wenjing și Han Cong au cucerit medalia de aur, demonstrând o performanță extraordinară. Cuplurile din Rusia și Canada au obținut argintul, respectiv bronzul.</p>
    </div>
</body>
</html>