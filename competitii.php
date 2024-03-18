<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Competitii</title>
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

#competitii{
    max-width: 800px;
    margin: 2em auto;
    text-align: justify;
    padding: 30px 30px;
    word-wrap: break-word;
    background-color: rgba(237, 237, 237, 0.589);
    font-size: 18px;
    font-weight: 500;

}

    .jocuri-sectiune{
        text-align: center;
    }
    </style>
            
    </head>
    <body background="./assets/landing-page.jpg">


    <?php include 'navigation.php'; ?>
    <section id="competitii">
        <h1 class="jocuri-sectiune">Jocurile Olimpice de Iarna</h1>

        <h2>Jocurile Olimpice de Iarnă 2014</h2>
        <p>La Sochi, Rusia, Yuzuru Hanyu a devenit primul japonez care a câștigat medalia de aur la patinaj masculin. Adelina Sotnikova a surprins lumea câștigând medalia de aur la patinaj feminin, marcând o competiție istorică.</p>
        <p><strong>Vezi competiția:</strong> <a href="https://www.youtube.com/watch?v=hgXKJvTVW9g&pp=ygUcZmlndXJlIHNrYXRpbmcgb2x5bXBpY3MgMjAxNA%3D%3D" target="_blank">Individual Feminin 2014</a></p>
        <p><strong>Vezi competiția:</strong> <a href="https://www.youtube.com/watch?v=1Kgs930W4-g&pp=ygUcZmlndXJlIHNrYXRpbmcgb2x5bXBpY3MgMjAxNA%3D%3D" target="_blank">Individual Masculin 2014</a></p>

        <h2>Jocurile Olimpice de Iarnă 2018</h2>
        <p>La PyeongChang, Coreea de Sud, Yuzuru Hanyu și Nathan Chen au oferit o rivalitate epica, iar Alina Zagitova și Evgenia Medvedeva au impresionat în patinajul feminin, ambele câștigând medalii de aur și argint.</p>
        <p><strong>Vezi competiția:</strong> <a href="https://www.youtube.com/watch?v=JEtYYtwX1sM&pp=ygUcZmlndXJlIHNrYXRpbmcgb2x5bXBpY3MgMjAxOA%3D%3D" target="_blank">Individual Feminin 2018</a></p>
        <p><strong>Vezi competiția:</strong> <a href="https://www.youtube.com/watch?v=WtfxFNBPKUY&pp=ygUcZmlndXJlIHNrYXRpbmcgb2x5bXBpY3MgMjAxOA%3D%3D" target="_blank">Individual Masculin 2018</a></p>

        <h2>Jocurile Olimpice de Iarnă 2022</h2>
        <p>La Beijing, China, Shoma Uno și Yuma Kagiyama au adus o nouă dimensiune în patinajul masculin, iar Kamila Valieva a uimit lumea la doar 15 ani, câștigând aurul la patinaj feminin, în ciuda controversei legate de utilizarea substanțelor interzise.</p>
        <p><strong>Vezi competiția:</strong> <a href="https://www.youtube.com/watch?v=wmYLoi8sD-Y&pp=ygUcZmlndXJlIHNrYXRpbmcgb2x5bXBpY3MgMjAyMg%3D%3D" target="_blank">Individual Feminin 2022</a></p>
        <p><strong>Vezi competiția:</strong> <a href="https://www.youtube.com/watch?v=O8cvyDXX99Y&pp=ygUcZmlndXJlIHNrYXRpbmcgb2x5bXBpY3MgMjAyMg%3D%3D" target="_blank">Individual Masculin 2022</a></p>
    </section>
    </body>
</html>