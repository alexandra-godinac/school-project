<!DOCTYPE html>
<html lang="ro">
    <head>
        <meta charset="UTF-8">
        <title>Olimpiada de Patinaj Artistic - Dans</title>
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
        <h1>Probe la Dans - Olimpiada de Patinaj Artistic</h1>
        
        <p>Probele la dans în cadrul Olimpiadei de Patinaj Artistic reprezintă o formă de artă în mișcare, în care cuplurile de patinatori pun în valoare expresivitatea și sincronizarea perfectă pe gheață.</p>

        <h2>Olimpiada de Patinaj Artistic - Sochi 2014</h2>
        <p>La Olimpiada de Patinaj Artistic de la Sochi 2014, cuplul american Meryl Davis și Charlie White a câștigat medalia de aur la proba de dans. Tessa Virtue și Scott Moir din Canada au obținut argintul, iar cuplul rus Elena Ilinykh și Nikita Katsalapov a ocupat locul trei pe podium.</p>

        <h2>Olimpiada de Patinaj Artistic - PyeongChang 2018</h2>
        <p>La Olimpiada de Patinaj Artistic de la PyeongChang 2018, cuplul canadian Tessa Virtue și Scott Moir a reușit să obțină aurul la proba de dans. Echipajele din Franța și Statele Unite, Gabriella Papadakis și Guillaume Cizeron, respectiv Maia Shibutani și Alex Shibutani, au câștigat argint și bronz.</p>

        <h2>Olimpiada de Patinaj Artistic - Beijing 2022</h2>
        <p>La Olimpiada de Patinaj Artistic de la Beijing 2022, cuplul canadian Tessa Virtue și Scott Moir a confirmat suprematia în proba de dans, câștigând medalia de aur. Echipajele din Franța și Statele Unite, Gabriella Papadakis și Guillaume Cizeron, respectiv Maia Shibutani și Alex Shibutani, au urcat din nou pe podium, obținând argint și bronz.</p>
    </div>
</body>
</html>