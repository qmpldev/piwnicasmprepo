<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="stylesheet2.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
        <div class="nick">
            <img src="./media/logo.png" alt="">
        </div>
        <div class="options">
            <a href="#przepustki" style="text-decoration: none; color: black;"><p>Przepustki</p></a>
            <a href="#modpack" style="text-decoration: none; color: black;"><p>Modpack</p></a>
        </div>
    </nav>
    <main>
        <div class="container">
            <div class="left-img">
                
            </div>
            <div class="right-desc">
                <h1>Hej piwniczaku! 👋</h1>
                    <p>Tutaj kupisz <B>przepustkę</B> na oficjalny serwer Minecraft <B>Piwnica SMP!</b></p>
                    <h3>O serwerze:</h3>
                    <ul>
                        <li>🎮 Wersja: 1.19.2</li>
                        <li>💻 Paczka: Better Minecraft</li>
                        <li>⚔️ Gildie, teamy itd.</li>
                        <li>💵 Niska cena (w ramach zrzutki)</li>
                        <li>👍 Porządna administracja</li>
                    </ul>
            </div>
        </div>
    </main>
    <div class="separator" id="przepustki">
        <p>Przepustki</p>
        <img src="./media/plus.svg" class="login">
    </div>
    <div class="artykuly">
        <?php
        $servername = "localhost";
        $username = "portfolio";
        $password = "123";
        $dbname = "piwnicasmp";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT Tytul, Opis, Cena, Link, img, kolor FROM przepustki ORDER BY ID DESC LIMIT 3";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "
                <a href=\"$row[Link]\" class=\"link\" target=\"popup\" onclick=\"window.open('$row[Link]','name','width=480,height=848')\">
                <div class=\"artykul\">
                    <div class=\"artykulimg\" style=\"background-image: url($row[img]); border: 10px solid $row[kolor];\">
                        
                    </div>
                    <div class=\"opis\">".
                        "<h2>$row[Tytul]</h2>
                        <p>$row[Opis]</p>
                        <h2 style=\"color: rgb(56, 56, 56);\">Cena: $row[Cena]€ (miesięcznie)</h2>
                    </div>
                </div>
                </a>                
                ";
            }
          } 
        ?>
    </div>
    <div class="separator" id="modpack">
        <p>Modpack</p>
    </div>
    <main>
        <div class="container2">
            <div class="left-desc">
                    <h1>Jak pobrać? 🗺️</h1>
                    <p><B>Curseforge</B> - Modpack możesz pobrać na stronie i w aplikacji Curseforge.</p>
                    <h3>Modpack:</h3>
                    <ul>
                        <li>⚔️ Better Minecraft - FABRIC</li>
                    </ul>
            </div>
            <div class="right-img">

            </div>
        </div>
    </main>
    <main>
        <div class="container2">
            <div class="right-img2">

            </div>
            <div class="left-desc2">
                    <h1>Better Minecraft 🎮</h1>
                    <p><B>Better Minecraft</B> - Luna Pixel Studios</p>
                    <h3>Przykładowe mody:</h3>
                    <ul>
                        <li>🌍 Oh The Biomes You'll Go</li>
                        <li>🖌️ Shadery</li>
                        <li>🔥 BetterEnd, BetterNether, BetterX</li>
                        <li>🗺️ Nowe wymiary</li>
                    </ul>
            </div>
        </div>
    </main>
    <div class="separator">
        <p>Gildie i pluginy</p>
    </div>
    <div class="ideas">
        <div class="idea">
            <div class="ideaimg" style="background-image: url(https://s3.amazonaws.com/assets.enjin.com/wall_embed_images/1396317510_MyMCVillage-Deathlikerabbit.jpg);">

            </div>
            <div class="opis">
               <h1>Gildie</h1> 
            </div>
        </div>
        <div class="idea">
            <div class="ideaimg" style="background-image: url(https://camo.githubusercontent.com/d6ea8b33ade1a12a67f6b36e706487202fd57b9344d7c9d13daa4f4b758ec18f/68747470733a2f2f662e636c6f75642e6769746875622e636f6d2f6173736574732f343531313338352f3535353836312f32363462323532612d633363392d313165322d396535392d3764346362396664376534322e706e67);">

            </div>
            <div class="opis">
               <h1>Logblock</h1> 
            </div>
        </div>
        <div class="idea">
            <div class="ideaimg" style="background-image: url(https://www.onlineunitedstatescasinos.com/app/uploads/2022/05/minecraft-casino-680x382.png);">

            </div>
            <div class="opis">
               <h1>Gambling</h1> 
            </div>
        </div>
    </div>
    <nav style="border-top: 1px solid black; margin-top: 5vh">
        <div class="nick">
            <p>psmp 2023</p>
        </div>
        <div class="options">
            <p>Discord</p>
            <p>Ko-fi</p>
        </div>
    </nav>
</body>
</html>