<!DOCTYPE html>
<html lang="ro">
    <head>
        <meta charset="UTF-8">
        <title>Sochi 2014</title>
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
        <h1>Olimpiada de Patinaj Artistic - Sochi 2014</h1>
        
        <p>Olimpiada de Patinaj Artistic de la Sochi 2014 a fost o competiție memorabilă care a adus împreună cei mai talentați patinatori din lume. Desfășurată în perioada 6 - 22 februarie 2014, evenimentul a oferit momente de excepție și emoții intense pentru iubitorii de patinaj.</p>

        <h2>Individual Masculin</h2>
        <p>Competiția la individual masculin a fost condusă de performanțe extraordinare. Yuzuru Hanyu din Japonia a obținut medalia de aur cu un program impresionant, urmat de Patrick Chan din Canada și Denis Ten din Kazahstan.</p>
        <ol>
            <li><strong>Yuzuru Hanyu (Japonia)</strong> - Medalie de Aur</li>
            <li><strong>Patrick Chan (Canada)</strong> - Medalie de Argint</li>
            <li><strong>Denis Ten (Kazahstan)</strong> - Medalie de Bronz</li>
        </ol>
        <h2>Individual Feminin</h2>
        <p>În competiția la individual feminin, Adelina Sotnikova din Rusia a surprins lumea și a câștigat medalia de aur în fața unei competiții foarte puternice. Kim Yuna din Coreea de Sud și Carolina Kostner din Italia au obținut medalii de argint, respectiv bronz.</p>
        <ol>
            <li><strong>Adelina Sotnikova (Rusia)</strong> - Medalie de Aur</li>
            <li><strong>Kim Yuna (Coreea de Sud)</strong> - Medalie de Argint</li>
            <li><strong>Carolina Kostner (Italia)</strong> - Medalie de Bronz</li>
        </ol>
        <h2>Perechi</h2>
        <p>Probele la perechi au fost dominate de echipele rusești. Tatiana Volosozhar și Maxim Trankov au cucerit aurul, iar Ksenia Stolbova și Fedor Klimov au obținut argintul. Aliona Savchenko și Robin Szolkowy din Germania au completat podiumul cu medalia de bronz.</p>
        <ol>
            <li><strong>Tatiana Volosozhar și Maxim Trankov (Rusia)</strong> - Medalie de Aur</li>
            <li><strong>Ksenia Stolbova și Fedor Klimov (Rusia)</strong> - Medalie de Argint</li>
            <li><strong>Aliona Savchenko și Robin Szolkowy (Germania)</strong> - Medalie de Bronz</li>
        </ol>
        <h2>Dans</h2>
        <p>Competiția la dans a adus în prim-plan expresivitatea și tehnica remarcabilă a cuplurilor de patinatori. Meryl Davis și Charlie White din SUA au câștigat medalia de aur, fiind urmați de Tessa Virtue și Scott Moir din Canada și Elena Ilinykh și Nikita Katsalapov din Rusia.</p>
        <ol>
            <li><strong>Meryl Davis și Charlie White (SUA)</strong> - Medalie de Aur</li>
            <li><strong>Tessa Virtue și Scott Moir (Canada)</strong> - Medalie de Argint</li>
            <li><strong>Elena Ilinykh și Nikita Katsalapov (Rusia)</strong> - Medalie de Bronz</li>
        </ol>
    </div>
</body>
</html>