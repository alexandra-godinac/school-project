<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Campioni</title>
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
        <h1>Campioni la Olimpiada de Patinaj Artistic</h1>
        
        <h2>Individual Masculin</h2>
            <p><strong>Yuzuru Hanyu (Japonia)</strong> - Sochi 2014, PyeongChang 2018, Beijing 2022</p>

        <h2>Individual Feminin</h2>
            <p><strong>Adelina Sotnikova (Rusia)</strong> - Sochi 2014</p>
            <p><strong>Alina Zagitova (Rusia)</strong> - PyeongChang 2018</p>
            <p><strong>Kamila Valieva (Rusia)</strong> - Beijing 2022</p>

        <h2>Perechi</h2>
            <p><strong>Tatiana Volosozhar și Maxim Trankov (Rusia)</strong> - Sochi 2014</p>
            <p><strong>Aljona Savchenko și Bruno Massot (Germania)</strong> - PyeongChang 2018</p>
            <p><strong>Sui Wenjing și Han Cong (China)</strong> - Beijing 2022</p>

        <h2>Dans</h2>
            <p><strong>Meryl Davis și Charlie White (SUA)</strong> - Sochi 2014</p>
            <p><strong>Tessa Virtue și Scott Moir (Canada)</strong> - PyeongChang 2018, Beijing 2022</p>
    </div>
    </body>
</html>