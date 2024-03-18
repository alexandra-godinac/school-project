<!DOCTYPE html>
<html lang="ro">
    <head>
        <meta charset="UTF-8">
        <title>Jocurile olimpice de iarna 2022</title>
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
        <h1>Olimpiada de Patinaj Artistic - Beijing 2022</h1>
        
        <p>Olimpiada de Patinaj Artistic de la Beijing 2022 a adus în prim-plan talentele patinatorilor și emoțiile competiției la cel mai înalt nivel. Desfășurată în perioada 4 - 20 februarie 2022, evenimentul a captivat publicul din întreaga lume.</p>

        <h2>Individual Masculin</h2>
        <p>În competiția la individual masculin, Nathan Chen din SUA s-a remarcat prin performanțe de excepție și a câștigat medalia de aur. Shoma Uno din Japonia și Yuma Kagiyama, tot din Japonia, au obținut locurile doi, respectiv trei.</p>
        <ol>
            <li><strong>Nathan Chen (SUA)</strong> - Medalie de Aur</li>
            <li><strong>Shoma Uno (Japonia)</strong> - Medalie de Argint</li>
            <li><strong>Yuma Kagiyama (Japonia)</strong> - Medalie de Bronz</li>
        </ol>

        <h2>Individual Feminin</h2>
        <p>Probele la individual feminin au fost dominate de patinatoarele rusești. Kamila Valieva a câștigat aurul, iar compatrioata sa, Anna Shcherbakova, a obținut argintul. Medalia de bronz a fost câștigată de Alexandra Trusova, tot din Rusia.</p>
        <ol>
            <li><strong>Kamila Valieva (Rusia)</strong> - Medalie de Aur</li>
            <li><strong>Anna Shcherbakova (Rusia)</strong> - Medalie de Argint</li>
            <li><strong>Alexandra Trusova (Rusia)</strong> - Medalie de Bronz</li>
        </ol>

        <h2>Perechi</h2>
        <p>Probele la perechi au fost câștigate de cuplul chinez Sui Wenjing și Han Cong, care au obținut medalia de aur. Evgenia Tarasova și Vladimir Morozov din Rusia au cucerit argintul, în timp ce Meagan Duhamel și Eric Radford din Canada au obținut bronzul.</p>
        <ol>
            <li><strong>Sui Wenjing și Han Cong (China)</strong> - Medalie de Aur</li>
            <li><strong>Evgenia Tarasova și Vladimir Morozov (Rusia)</strong> - Medalie de Argint</li>
            <li><strong>Meagan Duhamel și Eric Radford (Canada)</strong> - Medalie de Bronz</li>
        </ol>

        <h2>Dans</h2>
        <p>Competiția la dans a fost câștigată de cuplul american Madison Hubbell și Zachary Donohue, care au obținut medalia de aur. Echipajele din Rusia și Canada au urcat pe locurile doi și trei ale podiumului.</p>
        <ol>
            <li><strong>Madison Hubbell și Zachary Donohue (SUA)</strong> - Medalie de Aur</li>
            <li><strong>Viktoria Sinitsina și Nikita Katsalapov (Rusia)</strong> - Medalie de Argint</li>
            <li><strong>Piper Gilles și Paul Poirier (Canada)</strong> - Medalie de Bronz</li>
        </ol>
    </div>   
</body>
</html>