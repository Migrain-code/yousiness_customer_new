<?php

use Illuminate\Support\Facades\Route;
Route::get('/test', function (){
    $jsonArray = '[
    {
        "name": "Eisenstadt",
        "code": "7000"
    },
    {
        "name": "Rust",
        "code": "7071"
    },
    {
        "name": "Breitenbrunn am Neusiedler See",
        "code": "7091"
    },
    {
        "name": "Donnerskirchen",
        "code": "7082"
    },
    {
        "name": "Großhöflein",
        "code": "7051"
    },
    {
        "name": "Hornstein",
        "code": "7053"
    },
    {
        "name": "Klingenbach",
        "code": "7013"
    },
    {
        "name": "Leithaprodersdorf",
        "code": "2443"
    },
    {
        "name": "Mörbisch am See",
        "code": "7072"
    },
    {
        "name": "Müllendorf",
        "code": "7052"
    },
    {
        "name": "Neufeld an der Leitha",
        "code": "2491"
    },
    {
        "name": "Oggau am Neusiedler See",
        "code": "7063"
    },
    {
        "name": "Oslip",
        "code": "7064"
    },
    {
        "name": "Purbach am Neusiedler See",
        "code": "7083"
    },
    {
        "name": "Sankt Margarethen im Burgenland",
        "code": "7062"
    },
    {
        "name": "Schützen am Gebirge",
        "code": "7081"
    },
    {
        "name": "Siegendorf",
        "code": "7011"
    },
    {
        "name": "Steinbrunn",
        "code": "7035"
    },
    {
        "name": "Trausdorf an der Wulka",
        "code": "7061"
    },
    {
        "name": "Wimpassing an der Leitha",
        "code": "2485"
    },
    {
        "name": "Wulkaprodersdorf",
        "code": "7041"
    },
    {
        "name": "Loretto",
        "code": "2443"
    },
    {
        "name": "Stotzing",
        "code": "2443"
    },
    {
        "name": "Zillingtal",
        "code": "7034"
    },
    {
        "name": "Zagersdorf",
        "code": "7012"
    },
    {
        "name": "Bocksdorf",
        "code": "7551"
    },
    {
        "name": "Burgauberg-Neudauberg",
        "code": "8291"
    },
    {
        "name": "Eberau",
        "code": "7521"
    },
    {
        "name": "Gerersdorf-Sulz",
        "code": "7542"
    },
    {
        "name": "Güssing",
        "code": "7540"
    },
    {
        "name": "Güttenbach",
        "code": "7536"
    },
    {
        "name": "Heiligenbrunn",
        "code": "7522"
    },
    {
        "name": "Kukmirn",
        "code": "7543"
    },
    {
        "name": "Neuberg im Burgenland",
        "code": "7537"
    },
    {
        "name": "Neustift bei Güssing",
        "code": "7540"
    },
    {
        "name": "Olbendorf",
        "code": "7534"
    },
    {
        "name": "Ollersdorf im Burgenland",
        "code": "7533"
    },
    {
        "name": "Sankt Michael im Burgenland",
        "code": "7535"
    },
    {
        "name": "Stegersbach",
        "code": "7551"
    },
    {
        "name": "Stinatz",
        "code": "7552"
    },
    {
        "name": "Strem",
        "code": "7522"
    },
    {
        "name": "Tobaj",
        "code": "7544"
    },
    {
        "name": "Hackerberg",
        "code": "8292"
    },
    {
        "name": "Wörterberg",
        "code": "8293"
    },
    {
        "name": "Großmürbisch",
        "code": "7540"
    },
    {
        "name": "Inzenhof",
        "code": "7540"
    },
    {
        "name": "Kleinmürbisch",
        "code": "7540"
    },
    {
        "name": "Tschanigraben",
        "code": "7540"
    },
    {
        "name": "Heugraben",
        "code": "7551"
    },
    {
        "name": "Rohr im Burgenland",
        "code": "7551"
    },
    {
        "name": "Bildein",
        "code": "7521"
    },
    {
        "name": "Rauchwart",
        "code": "7535"
    },
    {
        "name": "Moschendorf",
        "code": "7540"
    },
    {
        "name": "Deutsch Kaltenbrunn",
        "code": "7572"
    },
    {
        "name": "Eltendorf",
        "code": "7562"
    },
    {
        "name": "Jennersdorf",
        "code": "8380"
    },
    {
        "name": "Minihof-Liebau",
        "code": "8384"
    },
    {
        "name": "Mogersdorf",
        "code": "8382"
    },
    {
        "name": "Neuhaus am Klausenbach",
        "code": "8385"
    },
    {
        "name": "Rudersdorf",
        "code": "7571"
    },
    {
        "name": "Sankt Martin an der Raab",
        "code": "8383"
    },
    {
        "name": "Weichselbaum",
        "code": "8382"
    },
    {
        "name": "Königsdorf",
        "code": "7563"
    },
    {
        "name": "Mühlgraben",
        "code": "8385"
    },
    {
        "name": "Draßburg",
        "code": "7021"
    },
    {
        "name": "Forchtenstein",
        "code": "7212"
    },
    {
        "name": "Hirm",
        "code": "7024"
    },
    {
        "name": "Marz",
        "code": "7221"
    },
    {
        "name": "Mattersburg",
        "code": "7210"
    },
    {
        "name": "Neudörfl",
        "code": "7201"
    },
    {
        "name": "Pöttelsdorf",
        "code": "7023"
    },
    {
        "name": "Rohrbach bei Mattersburg",
        "code": "7222"
    },
    {
        "name": "Bad Sauerbrunn",
        "code": "7202"
    },
    {
        "name": "Schattendorf",
        "code": "7022"
    },
    {
        "name": "Sieggraben",
        "code": "7223"
    },
    {
        "name": "Sigleß",
        "code": "7032"
    },
    {
        "name": "Wiesen",
        "code": "7203"
    },
    {
        "name": "Antau",
        "code": "7042"
    },
    {
        "name": "Baumgarten",
        "code": "7021"
    },
    {
        "name": "Zemendorf-Stöttera",
        "code": "7023"
    },
    {
        "name": "Krensdorf",
        "code": "7031"
    },
    {
        "name": "Andau",
        "code": "7163"
    },
    {
        "name": "Apetlon",
        "code": "7143"
    },
    {
        "name": "Bruckneudorf",
        "code": "2460"
    },
    {
        "name": "Deutsch Jahrndorf",
        "code": "2423"
    },
    {
        "name": "Frauenkirchen",
        "code": "7132"
    },
    {
        "name": "Gattendorf",
        "code": "2474"
    },
    {
        "name": "Gols",
        "code": "7122"
    },
    {
        "name": "Halbturn",
        "code": "7131"
    },
    {
        "name": "Illmitz",
        "code": "7142"
    },
    {
        "name": "Jois",
        "code": "7093"
    },
    {
        "name": "Kittsee",
        "code": "2421"
    },
    {
        "name": "Mönchhof",
        "code": "7123"
    },
    {
        "name": "Neusiedl am See",
        "code": "7100"
    },
    {
        "name": "Nickelsdorf",
        "code": "2425"
    },
    {
        "name": "Pama",
        "code": "2422"
    },
    {
        "name": "Pamhagen",
        "code": "7152"
    },
    {
        "name": "Parndorf",
        "code": "7111"
    },
    {
        "name": "Podersdorf am See",
        "code": "7141"
    },
    {
        "name": "Sankt Andrä am Zicksee",
        "code": "7161"
    },
    {
        "name": "Tadten",
        "code": "7162"
    },
    {
        "name": "Wallern im Burgenland",
        "code": "7151"
    },
    {
        "name": "Weiden am See",
        "code": "7121"
    },
    {
        "name": "Winden am See",
        "code": "7092"
    },
    {
        "name": "Zurndorf",
        "code": "2424"
    },
    {
        "name": "Neudorf",
        "code": "2475"
    },
    {
        "name": "Potzneusiedl",
        "code": "2473"
    },
    {
        "name": "Edelstal",
        "code": "2413"
    },
    {
        "name": "Deutschkreutz",
        "code": "7301"
    },
    {
        "name": "Draßmarkt",
        "code": "7372"
    },
    {
        "name": "Frankenau-Unterpullendorf",
        "code": "7361"
    },
    {
        "name": "Großwarasdorf",
        "code": "7304"
    },
    {
        "name": "Horitschon",
        "code": "7312"
    },
    {
        "name": "Kaisersdorf",
        "code": "7342"
    },
    {
        "name": "Kobersdorf",
        "code": "7332"
    },
    {
        "name": "Lackenbach",
        "code": "7322"
    },
    {
        "name": "Lockenhaus",
        "code": "7442"
    },
    {
        "name": "Lutzmannsburg",
        "code": "7361"
    },
    {
        "name": "Mannersdorf an der Rabnitz",
        "code": "7444"
    },
    {
        "name": "Markt Sankt Martin",
        "code": "7341"
    },
    {
        "name": "Neckenmarkt",
        "code": "7311"
    },
    {
        "name": "Neutal",
        "code": "7343"
    },
    {
        "name": "Nikitsch",
        "code": "7302"
    },
    {
        "name": "Oberpullendorf",
        "code": "7350"
    },
    {
        "name": "Pilgersdorf",
        "code": "7441"
    },
    {
        "name": "Piringsdorf",
        "code": "7373"
    },
    {
        "name": "Raiding",
        "code": "7321"
    },
    {
        "name": "Ritzing",
        "code": "7323"
    },
    {
        "name": "Steinberg-Dörfl",
        "code": "7453"
    },
    {
        "name": "Stoob",
        "code": "7344"
    },
    {
        "name": "Weppersdorf",
        "code": "7331"
    },
    {
        "name": "Lackendorf",
        "code": "7321"
    },
    {
        "name": "Unterfrauenhaid",
        "code": "7321"
    },
    {
        "name": "Unterrabnitz-Schwendgraben",
        "code": "7371"
    },
    {
        "name": "Weingraben",
        "code": "7374"
    },
    {
        "name": "Oberloisdorf",
        "code": "7451"
    },
    {
        "name": "Bad Tatzmannsdorf",
        "code": "7431"
    },
    {
        "name": "Bernstein",
        "code": "7434"
    },
    {
        "name": "Deutsch Schützen-Eisenberg",
        "code": "7474"
    },
    {
        "name": "Grafenschachen",
        "code": "7423"
    },
    {
        "name": "Großpetersdorf",
        "code": "7503"
    },
    {
        "name": "Hannersdorf",
        "code": "7473"
    },
    {
        "name": "Kemeten",
        "code": "7531"
    },
    {
        "name": "Kohfidisch",
        "code": "7512"
    },
    {
        "name": "Litzelsdorf",
        "code": "7532"
    },
    {
        "name": "Loipersdorf-Kitzladen",
        "code": "7410"
    },
    {
        "name": "Mariasdorf",
        "code": "7433"
    },
    {
        "name": "Markt Allhau",
        "code": "7411"
    },
    {
        "name": "Markt Neuhodis",
        "code": "7464"
    },
    {
        "name": "Mischendorf",
        "code": "7511"
    },
    {
        "name": "Oberdorf im Burgenland",
        "code": "7501"
    },
    {
        "name": "Oberschützen",
        "code": "7432"
    },
    {
        "name": "Oberwart",
        "code": "7400"
    },
    {
        "name": "Pinkafeld",
        "code": "7423"
    },
    {
        "name": "Rechnitz",
        "code": "7471"
    },
    {
        "name": "Riedlingsdorf",
        "code": "7422"
    },
    {
        "name": "Rotenturm an der Pinka",
        "code": "7501"
    },
    {
        "name": "Schachendorf",
        "code": "7472"
    },
    {
        "name": "Stadtschlaining",
        "code": "7461"
    },
    {
        "name": "Unterkohlstätten",
        "code": "7435"
    },
    {
        "name": "Unterwart",
        "code": "7501"
    },
    {
        "name": "Weiden bei Rechnitz",
        "code": "7463"
    },
    {
        "name": "Wiesfleck",
        "code": "7423"
    },
    {
        "name": "Wolfau",
        "code": "7412"
    },
    {
        "name": "Neustift an der Lafnitz",
        "code": "7423"
    },
    {
        "name": "Jabing",
        "code": "7503"
    },
    {
        "name": "Badersdorf",
        "code": "7512"
    },
    {
        "name": "Schandorf",
        "code": "7472"
    },
    {
        "name": "Klagenfurt am Wörthersee",
        "code": "9020"
    },
    {
        "name": "Villach",
        "code": "9500"
    },
    {
        "name": "Dellach",
        "code": "9635"
    },
    {
        "name": "Hermagor-Pressegger See",
        "code": "9620"
    },
    {
        "name": "Kirchbach",
        "code": "9632"
    },
    {
        "name": "Kötschach-Mauthen",
        "code": "9640"
    },
    {
        "name": "St. Stefan im Gailtal",
        "code": "9623"
    },
    {
        "name": "Gitschtal",
        "code": "9622"
    },
    {
        "name": "Lesachtal",
        "code": "9653"
    },
    {
        "name": "Ebenthal in Kärnten",
        "code": "9065"
    },
    {
        "name": "Feistritz im Rosental",
        "code": "9181"
    },
    {
        "name": "Ferlach",
        "code": "9170"
    },
    {
        "name": "Grafenstein",
        "code": "9131"
    },
    {
        "name": "Keutschach am See",
        "code": "9074"
    },
    {
        "name": "Köttmannsdorf",
        "code": "9071"
    },
    {
        "name": "Krumpendorf am Wörthersee",
        "code": "9201"
    },
    {
        "name": "Ludmannsdorf",
        "code": "9072"
    },
    {
        "name": "Maria Rain",
        "code": "9161"
    },
    {
        "name": "Maria Saal",
        "code": "9063"
    },
    {
        "name": "Maria Wörth",
        "code": "9081"
    },
    {
        "name": "Moosburg",
        "code": "9062"
    },
    {
        "name": "Pörtschach am Wörther See",
        "code": "9210"
    },
    {
        "name": "Poggersdorf",
        "code": "9130"
    },
    {
        "name": "St. Margareten im Rosental",
        "code": "9173"
    },
    {
        "name": "Schiefling am Wörthersee",
        "code": "9535"
    },
    {
        "name": "Techelsberg am Wörther See",
        "code": "9212"
    },
    {
        "name": "Zell",
        "code": "9170"
    },
    {
        "name": "Magdalensberg",
        "code": "9064"
    },
    {
        "name": "Althofen",
        "code": "9330"
    },
    {
        "name": "Brückl",
        "code": "9371"
    },
    {
        "name": "Deutsch-Griffen",
        "code": "9572"
    },
    {
        "name": "Eberstein",
        "code": "9372"
    },
    {
        "name": "Friesach",
        "code": "9360"
    },
    {
        "name": "Glödnitz",
        "code": "9346"
    },
    {
        "name": "Gurk",
        "code": "9342"
    },
    {
        "name": "Guttaring",
        "code": "9334"
    },
    {
        "name": "Hüttenberg",
        "code": "9375"
    },
    {
        "name": "Kappel am Krappfeld",
        "code": "9321"
    },
    {
        "name": "Klein St. Paul",
        "code": "9373"
    },
    {
        "name": "Liebenfels",
        "code": "9556"
    },
    {
        "name": "Metnitz",
        "code": "9363"
    },
    {
        "name": "Micheldorf",
        "code": "9322"
    },
    {
        "name": "Mölbling",
        "code": "9330"
    },
    {
        "name": "St. Georgen am Längsee",
        "code": "9314"
    },
    {
        "name": "St. Veit an der Glan",
        "code": "9300"
    },
    {
        "name": "Straßburg",
        "code": "9341"
    },
    {
        "name": "Weitensfeld im Gurktal",
        "code": "9344"
    },
    {
        "name": "Frauenstein",
        "code": "9311"
    },
    {
        "name": "Bad Kleinkirchheim",
        "code": "9546"
    },
    {
        "name": "Baldramsdorf",
        "code": "9805"
    },
    {
        "name": "Berg im Drautal",
        "code": "9771"
    },
    {
        "name": "Dellach im Drautal",
        "code": "9772"
    },
    {
        "name": "Großkirchheim",
        "code": "9843"
    },
    {
        "name": "Flattach",
        "code": "9831"
    },
    {
        "name": "Gmünd in Kärnten",
        "code": "9853"
    },
    {
        "name": "Greifenburg",
        "code": "9761"
    },
    {
        "name": "Heiligenblut am Großglockner",
        "code": "9844"
    },
    {
        "name": "Irschen",
        "code": "9773"
    },
    {
        "name": "Kleblach-Lind",
        "code": "9753"
    },
    {
        "name": "Lendorf",
        "code": "9811"
    },
    {
        "name": "Mallnitz",
        "code": "9822"
    },
    {
        "name": "Malta",
        "code": "9854"
    },
    {
        "name": "Millstatt am See",
        "code": "9872"
    },
    {
        "name": "Mörtschach",
        "code": "9842"
    },
    {
        "name": "Mühldorf",
        "code": "9814"
    },
    {
        "name": "Oberdrauburg",
        "code": "9781"
    },
    {
        "name": "Obervellach",
        "code": "9821"
    },
    {
        "name": "Radenthein",
        "code": "9545"
    },
    {
        "name": "Rangersdorf",
        "code": "9833"
    },
    {
        "name": "Rennweg am Katschberg",
        "code": "9863"
    },
    {
        "name": "Sachsenburg",
        "code": "9751"
    },
    {
        "name": "Seeboden am Millstätter See",
        "code": "9871"
    },
    {
        "name": "Spittal an der Drau",
        "code": "9800"
    },
    {
        "name": "Stall",
        "code": "9832"
    },
    {
        "name": "Steinfeld",
        "code": "9754"
    },
    {
        "name": "Trebesing",
        "code": "9852"
    },
    {
        "name": "Weißensee",
        "code": "9762"
    },
    {
        "name": "Winklern",
        "code": "9841"
    },
    {
        "name": "Krems in Kärnten",
        "code": "9861"
    },
    {
        "name": "Lurnfeld",
        "code": "9813"
    },
    {
        "name": "Reißeck",
        "code": "9815"
    },
    {
        "name": "Afritz am See",
        "code": "9542"
    },
    {
        "name": "Arnoldstein",
        "code": "9601"
    },
    {
        "name": "Arriach",
        "code": "9543"
    },
    {
        "name": "Bad Bleiberg",
        "code": "9530"
    },
    {
        "name": "Feistritz an der Gail",
        "code": "9613"
    },
    {
        "name": "Feld am See",
        "code": "9544"
    },
    {
        "name": "Ferndorf",
        "code": "9702"
    },
    {
        "name": "Finkenstein am Faaker See",
        "code": "9584"
    },
    {
        "name": "Fresach",
        "code": "9712"
    },
    {
        "name": "Hohenthurn",
        "code": "9613"
    },
    {
        "name": "Nötsch im Gailtal",
        "code": "9611"
    },
    {
        "name": "Paternion",
        "code": "9711"
    },
    {
        "name": "Rosegg",
        "code": "9232"
    },
    {
        "name": "St. Jakob im Rosental",
        "code": "9184"
    },
    {
        "name": "Stockenboi",
        "code": "9713"
    },
    {
        "name": "Treffen am Ossiacher See",
        "code": "9521"
    },
    {
        "name": "Velden am Wörther See",
        "code": "9220"
    },
    {
        "name": "Weißenstein",
        "code": "9721"
    },
    {
        "name": "Wernberg",
        "code": "9241"
    },
    {
        "name": "Bleiburg",
        "code": "9150"
    },
    {
        "name": "Diex",
        "code": "9103"
    },
    {
        "name": "Eberndorf",
        "code": "9141"
    },
    {
        "name": "Eisenkappel-Vellach",
        "code": "9135"
    },
    {
        "name": "Feistritz ob Bleiburg",
        "code": "9143"
    },
    {
        "name": "Gallizien",
        "code": "9132"
    },
    {
        "name": "Globasnitz",
        "code": "9142"
    },
    {
        "name": "Griffen",
        "code": "9112"
    },
    {
        "name": "Neuhaus",
        "code": "9155"
    },
    {
        "name": "Ruden",
        "code": "9113"
    },
    {
        "name": "St. Kanzian am Klopeiner See",
        "code": "9122"
    },
    {
        "name": "Sittersdorf",
        "code": "9133"
    },
    {
        "name": "Völkermarkt",
        "code": "9100"
    },
    {
        "name": "Bad St. Leonhard im Lavanttal",
        "code": "9462"
    },
    {
        "name": "Frantschach-St. Gertraud",
        "code": "9413"
    },
    {
        "name": "Lavamünd",
        "code": "9473"
    },
    {
        "name": "Preitenegg",
        "code": "9451"
    },
    {
        "name": "Reichenfels",
        "code": "9463"
    },
    {
        "name": "St. Andrä",
        "code": "9433"
    },
    {
        "name": "St. Georgen im Lavanttal",
        "code": "9423"
    },
    {
        "name": "St. Paul im Lavanttal",
        "code": "9470"
    },
    {
        "name": "Wolfsberg",
        "code": "9400"
    },
    {
        "name": "Albeck",
        "code": "9571"
    },
    {
        "name": "Feldkirchen in Kärnten",
        "code": "9560"
    },
    {
        "name": "Glanegg",
        "code": "9555"
    },
    {
        "name": "Gnesau",
        "code": "9563"
    },
    {
        "name": "Himmelberg",
        "code": "9562"
    },
    {
        "name": "Ossiach",
        "code": "9570"
    },
    {
        "name": "Reichenau",
        "code": "9565"
    },
    {
        "name": "St. Urban",
        "code": "9554"
    },
    {
        "name": "Steindorf am Ossiacher See",
        "code": "9551"
    },
    {
        "name": "Steuerberg",
        "code": "9560"
    },
    {
        "name": "Krems an der Donau",
        "code": "3500"
    },
    {
        "name": "St. Pölten",
        "code": "3100"
    },
    {
        "name": "Waidhofen an der Ybbs",
        "code": "3340"
    },
    {
        "name": "Wiener Neustadt",
        "code": "2700"
    },
    {
        "name": "Allhartsberg",
        "code": "3365"
    },
    {
        "name": "Amstetten",
        "code": "3300"
    },
    {
        "name": "Ardagger",
        "code": "3321"
    },
    {
        "name": "Aschbach-Markt",
        "code": "3361"
    },
    {
        "name": "Behamberg",
        "code": "4441"
    },
    {
        "name": "Biberbach",
        "code": "3353"
    },
    {
        "name": "Ennsdorf",
        "code": "4482"
    },
    {
        "name": "Ernsthofen",
        "code": "4432"
    },
    {
        "name": "Ertl",
        "code": "3355"
    },
    {
        "name": "Euratsfeld",
        "code": "3324"
    },
    {
        "name": "Ferschnitz",
        "code": "3325"
    },
    {
        "name": "Haag",
        "code": "3350"
    },
    {
        "name": "Haidershofen",
        "code": "4431"
    },
    {
        "name": "Hollenstein an der Ybbs",
        "code": "3343"
    },
    {
        "name": "Kematen an der Ybbs",
        "code": "3331"
    },
    {
        "name": "Neuhofen an der Ybbs",
        "code": "3364"
    },
    {
        "name": "Neustadtl an der Donau",
        "code": "3323"
    },
    {
        "name": "Oed-Oehling",
        "code": "3362"
    },
    {
        "name": "Opponitz",
        "code": "3342"
    },
    {
        "name": "St. Georgen am Reith",
        "code": "3344"
    },
    {
        "name": "St. Georgen am Ybbsfelde",
        "code": "3304"
    },
    {
        "name": "St. Pantaleon-Erla",
        "code": "4303"
    },
    {
        "name": "St. Peter in der Au",
        "code": "3352"
    },
    {
        "name": "St. Valentin",
        "code": "4300"
    },
    {
        "name": "Seitenstetten",
        "code": "3353"
    },
    {
        "name": "Sonntagberg",
        "code": "3332"
    },
    {
        "name": "Strengberg",
        "code": "3314"
    },
    {
        "name": "Viehdorf",
        "code": "3322"
    },
    {
        "name": "Wallsee-Sindelburg",
        "code": "3313"
    },
    {
        "name": "Weistrach",
        "code": "3351"
    },
    {
        "name": "Winklarn",
        "code": "3300"
    },
    {
        "name": "Wolfsbach",
        "code": "3354"
    },
    {
        "name": "Ybbsitz",
        "code": "3341"
    },
    {
        "name": "Zeillern",
        "code": "3311"
    },
    {
        "name": "Alland",
        "code": "2534"
    },
    {
        "name": "Altenmarkt an der Triesting",
        "code": "2571"
    },
    {
        "name": "Bad Vöslau",
        "code": "2540"
    },
    {
        "name": "Baden",
        "code": "2500"
    },
    {
        "name": "Berndorf",
        "code": "2560"
    },
    {
        "name": "Ebreichsdorf",
        "code": "2483"
    },
    {
        "name": "Enzesfeld-Lindabrunn",
        "code": "2551"
    },
    {
        "name": "Furth an der Triesting",
        "code": "2564"
    },
    {
        "name": "Günselsdorf",
        "code": "2525"
    },
    {
        "name": "Heiligenkreuz",
        "code": "2532"
    },
    {
        "name": "Hernstein",
        "code": "2560"
    },
    {
        "name": "Hirtenberg",
        "code": "2552"
    },
    {
        "name": "Klausen-Leopoldsdorf",
        "code": "2533"
    },
    {
        "name": "Kottingbrunn",
        "code": "2542"
    },
    {
        "name": "Leobersdorf",
        "code": "2544"
    },
    {
        "name": "Mitterndorf an der Fischa",
        "code": "2441"
    },
    {
        "name": "Oberwaltersdorf",
        "code": "2522"
    },
    {
        "name": "Pfaffstätten",
        "code": "2511"
    },
    {
        "name": "Pottendorf",
        "code": "2486"
    },
    {
        "name": "Pottenstein",
        "code": "2563"
    },
    {
        "name": "Reisenberg",
        "code": "2440"
    },
    {
        "name": "Schönau an der Triesting",
        "code": "2525"
    },
    {
        "name": "Seibersdorf",
        "code": "2443"
    },
    {
        "name": "Sooß",
        "code": "2504"
    },
    {
        "name": "Tattendorf",
        "code": "2523"
    },
    {
        "name": "Teesdorf",
        "code": "2524"
    },
    {
        "name": "Traiskirchen",
        "code": "2514"
    },
    {
        "name": "Trumau",
        "code": "2521"
    },
    {
        "name": "Weissenbach an der Triesting",
        "code": "2564"
    },
    {
        "name": "Blumau-Neurißhof",
        "code": "2602"
    },
    {
        "name": "Au am Leithaberge",
        "code": "2451"
    },
    {
        "name": "Bad Deutsch-Altenburg",
        "code": "2405"
    },
    {
        "name": "Berg",
        "code": "2413"
    },
    {
        "name": "Bruck an der Leitha",
        "code": "2460"
    },
    {
        "name": "Göttlesbrunn-Arbesthal",
        "code": "2464"
    },
    {
        "name": "Götzendorf an der Leitha",
        "code": "2434"
    },
    {
        "name": "Hainburg a.d. Donau",
        "code": "2410"
    },
    {
        "name": "Haslau-Maria Ellend",
        "code": "2402"
    },
    {
        "name": "Höflein",
        "code": "2465"
    },
    {
        "name": "Hof am Leithaberge",
        "code": "2451"
    },
    {
        "name": "Hundsheim",
        "code": "2405"
    },
    {
        "name": "Mannersdorf am Leithagebirge",
        "code": "2452"
    },
    {
        "name": "Petronell-Carnuntum",
        "code": "2404"
    },
    {
        "name": "Prellenkirchen",
        "code": "2472"
    },
    {
        "name": "Rohrau",
        "code": "2471"
    },
    {
        "name": "Scharndorf",
        "code": "2403"
    },
    {
        "name": "Sommerein",
        "code": "2453"
    },
    {
        "name": "Trautmannsdorf an der Leitha",
        "code": "2454"
    },
    {
        "name": "Wolfsthal",
        "code": "2412"
    },
    {
        "name": "Aderklaa",
        "code": "2232"
    },
    {
        "name": "Andlersdorf",
        "code": "2301"
    },
    {
        "name": "Angern an der March",
        "code": "2261"
    },
    {
        "name": "Auersthal",
        "code": "2214"
    },
    {
        "name": "Bad Pirawarth",
        "code": "2222"
    },
    {
        "name": "Deutsch-Wagram",
        "code": "2232"
    },
    {
        "name": "Drösing",
        "code": "2265"
    },
    {
        "name": "Dürnkrut",
        "code": "2263"
    },
    {
        "name": "Ebenthal",
        "code": "2251"
    },
    {
        "name": "Eckartsau",
        "code": "2305"
    },
    {
        "name": "Engelhartstetten",
        "code": "2292"
    },
    {
        "name": "Gänserndorf",
        "code": "2230"
    },
    {
        "name": "Glinzendorf",
        "code": "2282"
    },
    {
        "name": "Groß-Enzersdorf",
        "code": "2301"
    },
    {
        "name": "Großhofen",
        "code": "2282"
    },
    {
        "name": "Groß-Schweinbarth",
        "code": "2221"
    },
    {
        "name": "Haringsee",
        "code": "2286"
    },
    {
        "name": "Hauskirchen",
        "code": "2184"
    },
    {
        "name": "Hohenau an der March",
        "code": "2273"
    },
    {
        "name": "Hohenruppersdorf",
        "code": "2223"
    },
    {
        "name": "Jedenspeigen",
        "code": "2264"
    },
    {
        "name": "Lassee",
        "code": "2291"
    },
    {
        "name": "Leopoldsdorf im Marchfelde",
        "code": "2285"
    },
    {
        "name": "Mannsdorf an der Donau",
        "code": "2304"
    },
    {
        "name": "Marchegg",
        "code": "2293"
    },
    {
        "name": "Markgrafneusiedl",
        "code": "2282"
    },
    {
        "name": "Matzen-Raggendorf",
        "code": "2243"
    },
    {
        "name": "Neusiedl an der Zaya",
        "code": "2183"
    },
    {
        "name": "Obersiebenbrunn",
        "code": "2283"
    },
    {
        "name": "Orth an der Donau",
        "code": "2304"
    },
    {
        "name": "Palterndorf-Dobermannsdorf",
        "code": "2181"
    },
    {
        "name": "Parbasdorf",
        "code": "2232"
    },
    {
        "name": "Prottes",
        "code": "2242"
    },
    {
        "name": "Raasdorf",
        "code": "2281"
    },
    {
        "name": "Ringelsdorf-Niederabsdorf",
        "code": "2272"
    },
    {
        "name": "Schönkirchen-Reyersdorf",
        "code": "2241"
    },
    {
        "name": "Spannberg",
        "code": "2244"
    },
    {
        "name": "Strasshof an der Nordbahn",
        "code": "2231"
    },
    {
        "name": "Sulz im Weinviertel",
        "code": "2224"
    },
    {
        "name": "Untersiebenbrunn",
        "code": "2284"
    },
    {
        "name": "Velm-Götzendorf",
        "code": "2245"
    },
    {
        "name": "Weikendorf",
        "code": "2253"
    },
    {
        "name": "Zistersdorf",
        "code": "2225"
    },
    {
        "name": "Weiden an der March",
        "code": "2295"
    },
    {
        "name": "Amaliendorf-Aalfang",
        "code": "3872"
    },
    {
        "name": "Brand-Nagelberg",
        "code": "3871"
    },
    {
        "name": "Eggern",
        "code": "3861"
    },
    {
        "name": "Eisgarn",
        "code": "3862"
    },
    {
        "name": "Gmünd",
        "code": "3950"
    },
    {
        "name": "Großdietmanns",
        "code": "3950"
    },
    {
        "name": "Bad Großpertholz",
        "code": "3972"
    },
    {
        "name": "Großschönau",
        "code": "3922"
    },
    {
        "name": "Moorbad Harbach",
        "code": "3970"
    },
    {
        "name": "Haugschlag",
        "code": "3874"
    },
    {
        "name": "Heidenreichstein",
        "code": "3860"
    },
    {
        "name": "Hirschbach",
        "code": "3942"
    },
    {
        "name": "Hoheneich",
        "code": "3945"
    },
    {
        "name": "Kirchberg am Walde",
        "code": "3932"
    },
    {
        "name": "Litschau",
        "code": "3874"
    },
    {
        "name": "Reingers",
        "code": "3863"
    },
    {
        "name": "St. Martin",
        "code": "3971"
    },
    {
        "name": "Schrems",
        "code": "3943"
    },
    {
        "name": "Unserfrau-Altweitra",
        "code": "3970"
    },
    {
        "name": "Waldenstein",
        "code": "3961"
    },
    {
        "name": "Weitra",
        "code": "3970"
    },
    {
        "name": "Alberndorf im Pulkautal",
        "code": "2054"
    },
    {
        "name": "Göllersdorf",
        "code": "2013"
    },
    {
        "name": "Grabern",
        "code": "2020"
    },
    {
        "name": "Guntersdorf",
        "code": "2042"
    },
    {
        "name": "Hadres",
        "code": "2061"
    },
    {
        "name": "Hardegg",
        "code": "2083"
    },
    {
        "name": "Haugsdorf",
        "code": "2054"
    },
    {
        "name": "Heldenberg",
        "code": "3704"
    },
    {
        "name": "Hohenwarth-Mühlbach a.M.",
        "code": "3472"
    },
    {
        "name": "Hollabrunn",
        "code": "2020"
    },
    {
        "name": "Mailberg",
        "code": "2024"
    },
    {
        "name": "Maissau",
        "code": "3712"
    },
    {
        "name": "Nappersdorf-Kammersdorf",
        "code": "2033"
    },
    {
        "name": "Pernersdorf",
        "code": "2052"
    },
    {
        "name": "Pulkau",
        "code": "3741"
    },
    {
        "name": "Ravelsbach",
        "code": "3720"
    },
    {
        "name": "Retz",
        "code": "2070"
    },
    {
        "name": "Retzbach",
        "code": "2074"
    },
    {
        "name": "Schrattenthal",
        "code": "2073"
    },
    {
        "name": "Seefeld-Kadolz",
        "code": "2062"
    },
    {
        "name": "Sitzendorf an der Schmida",
        "code": "3714"
    },
    {
        "name": "Wullersdorf",
        "code": "2041"
    },
    {
        "name": "Zellerndorf",
        "code": "2051"
    },
    {
        "name": "Ziersdorf",
        "code": "3710"
    },
    {
        "name": "Altenburg",
        "code": "3591"
    },
    {
        "name": "Brunn an der Wild",
        "code": "3595"
    },
    {
        "name": "Burgschleinitz-Kühnring",
        "code": "3730"
    },
    {
        "name": "Drosendorf-Zissersdorf",
        "code": "2095"
    },
    {
        "name": "Gars am Kamp",
        "code": "3571"
    },
    {
        "name": "Geras",
        "code": "2093"
    },
    {
        "name": "Horn",
        "code": "3580"
    },
    {
        "name": "Irnfritz-Messern",
        "code": "3754"
    },
    {
        "name": "Japons",
        "code": "3763"
    },
    {
        "name": "Langau",
        "code": "2091"
    },
    {
        "name": "Meiseldorf",
        "code": "3744"
    },
    {
        "name": "Pernegg",
        "code": "3753"
    },
    {
        "name": "Röhrenbach",
        "code": "3592"
    },
    {
        "name": "Rosenburg-Mold",
        "code": "3573"
    },
    {
        "name": "St. Bernhard-Frauenhofen",
        "code": "3580"
    },
    {
        "name": "Sigmundsherberg",
        "code": "3751"
    },
    {
        "name": "Weitersfeld",
        "code": "2084"
    },
    {
        "name": "Straning-Grafenberg",
        "code": "3722"
    },
    {
        "name": "Bisamberg",
        "code": "2102"
    },
    {
        "name": "Enzersfeld im Weinviertel",
        "code": "2202"
    },
    {
        "name": "Ernstbrunn",
        "code": "2115"
    },
    {
        "name": "Großmugl",
        "code": "2002"
    },
    {
        "name": "Großrußbach",
        "code": "2114"
    },
    {
        "name": "Hagenbrunn",
        "code": "2102"
    },
    {
        "name": "Harmannsdorf",
        "code": "2111"
    },
    {
        "name": "Hausleiten",
        "code": "3464"
    },
    {
        "name": "Korneuburg",
        "code": "2100"
    },
    {
        "name": "Langenzersdorf",
        "code": "2103"
    },
    {
        "name": "Leitzersdorf",
        "code": "2003"
    },
    {
        "name": "Leobendorf",
        "code": "2100"
    },
    {
        "name": "Rußbach",
        "code": "3702"
    },
    {
        "name": "Sierndorf",
        "code": "2011"
    },
    {
        "name": "Spillern",
        "code": "2104"
    },
    {
        "name": "Stetten",
        "code": "2100"
    },
    {
        "name": "Stockerau",
        "code": "2000"
    },
    {
        "name": "Niederhollabrunn",
        "code": "2004"
    },
    {
        "name": "Aggsbach",
        "code": "3641"
    },
    {
        "name": "Albrechtsberg an der Großen Krems",
        "code": "3613"
    },
    {
        "name": "Bergern im Dunkelsteinerwald",
        "code": "3512"
    },
    {
        "name": "Dürnstein",
        "code": "3601"
    },
    {
        "name": "Grafenegg",
        "code": "3492"
    },
    {
        "name": "Furth bei Göttweig",
        "code": "3511"
    },
    {
        "name": "Gedersdorf",
        "code": "3494"
    },
    {
        "name": "Gföhl",
        "code": "3542"
    },
    {
        "name": "Hadersdorf-Kammern",
        "code": "3493"
    },
    {
        "name": "Jaidhof",
        "code": "3542"
    },
    {
        "name": "Krumau am Kamp",
        "code": "3543"
    },
    {
        "name": "Langenlois",
        "code": "3550"
    },
    {
        "name": "Lengenfeld",
        "code": "3552"
    },
    {
        "name": "Lichtenau im Waldviertel",
        "code": "3522"
    },
    {
        "name": "Maria Laach am Jauerling",
        "code": "3643"
    },
    {
        "name": "Mautern an der Donau",
        "code": "3512"
    },
    {
        "name": "Mühldorf",
        "code": "3622"
    },
    {
        "name": "Paudorf",
        "code": "3508"
    },
    {
        "name": "Rastenfeld",
        "code": "3532"
    },
    {
        "name": "Rohrendorf bei Krems",
        "code": "3495"
    },
    {
        "name": "Rossatz-Arnsdorf",
        "code": "3602"
    },
    {
        "name": "St. Leonhard am Hornerwald",
        "code": "3572"
    },
    {
        "name": "Senftenberg",
        "code": "3541"
    },
    {
        "name": "Spitz",
        "code": "3620"
    },
    {
        "name": "Straß im Straßertale",
        "code": "3491"
    },
    {
        "name": "Stratzing",
        "code": "3552"
    },
    {
        "name": "Weinzierl am Walde",
        "code": "3521"
    },
    {
        "name": "Weißenkirchen in der Wachau",
        "code": "3610"
    },
    {
        "name": "Schönberg am Kamp",
        "code": "3562"
    },
    {
        "name": "Droß",
        "code": "3552"
    },
    {
        "name": "Annaberg",
        "code": "3222"
    },
    {
        "name": "Eschenau",
        "code": "3153"
    },
    {
        "name": "Hainfeld",
        "code": "3170"
    },
    {
        "name": "Hohenberg",
        "code": "3192"
    },
    {
        "name": "Kaumberg",
        "code": "2572"
    },
    {
        "name": "Kleinzell",
        "code": "3171"
    },
    {
        "name": "Lilienfeld",
        "code": "3180"
    },
    {
        "name": "Mitterbach am Erlaufsee",
        "code": "3224"
    },
    {
        "name": "Ramsau",
        "code": "3172"
    },
    {
        "name": "Rohrbach an der Gölsen",
        "code": "3163"
    },
    {
        "name": "St. Aegyd am Neuwalde",
        "code": "3193"
    },
    {
        "name": "St. Veit an der Gölsen",
        "code": "3161"
    },
    {
        "name": "Traisen",
        "code": "3160"
    },
    {
        "name": "Türnitz",
        "code": "3184"
    },
    {
        "name": "Artstetten-Pöbring",
        "code": "3661"
    },
    {
        "name": "Bergland",
        "code": "3254"
    },
    {
        "name": "Bischofstetten",
        "code": "3232"
    },
    {
        "name": "Blindenmarkt",
        "code": "3372"
    },
    {
        "name": "Dorfstetten",
        "code": "4392"
    },
    {
        "name": "Dunkelsteinerwald",
        "code": "3392"
    },
    {
        "name": "Erlauf",
        "code": "3253"
    },
    {
        "name": "Golling an der Erlauf",
        "code": "3381"
    },
    {
        "name": "Hofamt Priel",
        "code": "3681"
    },
    {
        "name": "Hürm",
        "code": "3383"
    },
    {
        "name": "Kilb",
        "code": "3233"
    },
    {
        "name": "Kirnberg an der Mank",
        "code": "3241"
    },
    {
        "name": "Klein-Pöchlarn",
        "code": "3660"
    },
    {
        "name": "Krummnußbaum",
        "code": "3375"
    },
    {
        "name": "Leiben",
        "code": "3652"
    },
    {
        "name": "Loosdorf",
        "code": "3382"
    },
    {
        "name": "Mank",
        "code": "3240"
    },
    {
        "name": "Marbach an der Donau",
        "code": "3671"
    },
    {
        "name": "Maria Taferl",
        "code": "3672"
    },
    {
        "name": "Melk",
        "code": "3390"
    },
    {
        "name": "Münichreith-Laimbach",
        "code": "3662"
    },
    {
        "name": "Neumarkt an der Ybbs",
        "code": "3371"
    },
    {
        "name": "Nöchling",
        "code": "3691"
    },
    {
        "name": "Persenbeug-Gottsdorf",
        "code": "3680"
    },
    {
        "name": "Petzenkirchen",
        "code": "3252"
    },
    {
        "name": "Pöchlarn",
        "code": "3380"
    },
    {
        "name": "Pöggstall",
        "code": "3650"
    },
    {
        "name": "Raxendorf",
        "code": "3654"
    },
    {
        "name": "Ruprechtshofen",
        "code": "3244"
    },
    {
        "name": "St. Leonhard am Forst",
        "code": "3243"
    },
    {
        "name": "St. Martin-Karlsbach",
        "code": "3376"
    },
    {
        "name": "St. Oswald",
        "code": "3684"
    },
    {
        "name": "Schönbühel-Aggsbach",
        "code": "3642"
    },
    {
        "name": "Schollach",
        "code": "3382"
    },
    {
        "name": "Weiten",
        "code": "3653"
    },
    {
        "name": "Ybbs an der Donau",
        "code": "3370"
    },
    {
        "name": "Zelking-Matzleinsdorf",
        "code": "3393"
    },
    {
        "name": "Texingtal",
        "code": "3242"
    },
    {
        "name": "Yspertal",
        "code": "3683"
    },
    {
        "name": "Emmersdorf an der Donau",
        "code": "3644"
    },
    {
        "name": "Altlichtenwarth",
        "code": "2144"
    },
    {
        "name": "Asparn an der Zaya",
        "code": "2151"
    },
    {
        "name": "Bernhardsthal",
        "code": "2275"
    },
    {
        "name": "Bockfließ",
        "code": "2213"
    },
    {
        "name": "Drasenhofen",
        "code": "2165"
    },
    {
        "name": "Falkenstein",
        "code": "2162"
    },
    {
        "name": "Fallbach",
        "code": "2133"
    },
    {
        "name": "Gaubitsch",
        "code": "2154"
    },
    {
        "name": "Gaweinstal",
        "code": "2191"
    },
    {
        "name": "Großebersdorf",
        "code": "2203"
    },
    {
        "name": "Großengersdorf",
        "code": "2212"
    },
    {
        "name": "Großharras",
        "code": "2034"
    },
    {
        "name": "Großkrut",
        "code": "2143"
    },
    {
        "name": "Hausbrunn",
        "code": "2145"
    },
    {
        "name": "Herrnbaumgarten",
        "code": "2171"
    },
    {
        "name": "Hochleithen",
        "code": "2123"
    },
    {
        "name": "Kreuttal",
        "code": "2123"
    },
    {
        "name": "Kreuzstetten",
        "code": "2124"
    },
    {
        "name": "Laa an der Thaya",
        "code": "2136"
    },
    {
        "name": "Ladendorf",
        "code": "2126"
    },
    {
        "name": "Mistelbach",
        "code": "2130"
    },
    {
        "name": "Neudorf bei Staatz",
        "code": "2135"
    },
    {
        "name": "Pillichsdorf",
        "code": "2211"
    },
    {
        "name": "Poysdorf",
        "code": "2170"
    },
    {
        "name": "Rabensburg",
        "code": "2274"
    },
    {
        "name": "Schrattenberg",
        "code": "2172"
    },
    {
        "name": "Staatz",
        "code": "2134"
    },
    {
        "name": "Stronsdorf",
        "code": "2153"
    },
    {
        "name": "Ulrichskirchen-Schleinbach",
        "code": "2122"
    },
    {
        "name": "Unterstinkenbrunn",
        "code": "2154"
    },
    {
        "name": "Wildendürnbach",
        "code": "2164"
    },
    {
        "name": "Wilfersdorf",
        "code": "2193"
    },
    {
        "name": "Wolkersdorf im Weinviertel",
        "code": "2120"
    },
    {
        "name": "Ottenthal",
        "code": "2163"
    },
    {
        "name": "Achau",
        "code": "2481"
    },
    {
        "name": "Biedermannsdorf",
        "code": "2362"
    },
    {
        "name": "Breitenfurt bei Wien",
        "code": "2384"
    },
    {
        "name": "Brunn am Gebirge",
        "code": "2345"
    },
    {
        "name": "Gaaden",
        "code": "2531"
    },
    {
        "name": "Gießhübl",
        "code": "2372"
    },
    {
        "name": "Gumpoldskirchen",
        "code": "2352"
    },
    {
        "name": "Guntramsdorf",
        "code": "2353"
    },
    {
        "name": "Hennersdorf",
        "code": "2332"
    },
    {
        "name": "Hinterbrühl",
        "code": "2371"
    },
    {
        "name": "Kaltenleutgeben",
        "code": "2391"
    },
    {
        "name": "Laab im Walde",
        "code": "2381"
    },
    {
        "name": "Laxenburg",
        "code": "2361"
    },
    {
        "name": "Maria Enzersdorf",
        "code": "2344"
    },
    {
        "name": "Mödling",
        "code": "2340"
    },
    {
        "name": "Münchendorf",
        "code": "2482"
    },
    {
        "name": "Perchtoldsdorf",
        "code": "2380"
    },
    {
        "name": "Vösendorf",
        "code": "2331"
    },
    {
        "name": "Wiener Neudorf",
        "code": "2351"
    },
    {
        "name": "Wienerwald",
        "code": "2392"
    },
    {
        "name": "Altendorf",
        "code": "2632"
    },
    {
        "name": "Aspang-Markt",
        "code": "2870"
    },
    {
        "name": "Aspangberg-St. Peter",
        "code": "2870"
    },
    {
        "name": "Breitenau",
        "code": "2624"
    },
    {
        "name": "Breitenstein",
        "code": "2673"
    },
    {
        "name": "Buchbach",
        "code": "2630"
    },
    {
        "name": "Edlitz",
        "code": "2842"
    },
    {
        "name": "Enzenreith",
        "code": "2640"
    },
    {
        "name": "Feistritz am Wechsel",
        "code": "2873"
    },
    {
        "name": "Gloggnitz",
        "code": "2640"
    },
    {
        "name": "Grafenbach-St. Valentin",
        "code": "2632"
    },
    {
        "name": "Grimmenstein",
        "code": "2840"
    },
    {
        "name": "Grünbach am Schneeberg",
        "code": "2733"
    },
    {
        "name": "Kirchberg am Wechsel",
        "code": "2880"
    },
    {
        "name": "Mönichkirchen",
        "code": "2872"
    },
    {
        "name": "Natschbach-Loipersbach",
        "code": "2620"
    },
    {
        "name": "Neunkirchen",
        "code": "2620"
    },
    {
        "name": "Otterthal",
        "code": "2880"
    },
    {
        "name": "Payerbach",
        "code": "2650"
    },
    {
        "name": "Pitten",
        "code": "2823"
    },
    {
        "name": "Prigglitz",
        "code": "2640"
    },
    {
        "name": "Puchberg am Schneeberg",
        "code": "2734"
    },
    {
        "name": "Raach am Hochgebirge",
        "code": "2640"
    },
    {
        "name": "Reichenau an der Rax",
        "code": "2651"
    },
    {
        "name": "St. Corona am Wechsel",
        "code": "2880"
    },
    {
        "name": "St. Egyden am Steinfeld",
        "code": "2731"
    },
    {
        "name": "Scheiblingkirchen-Thernberg",
        "code": "2831"
    },
    {
        "name": "Schottwien",
        "code": "2641"
    },
    {
        "name": "Schrattenbach",
        "code": "2733"
    },
    {
        "name": "Schwarzau am Steinfeld",
        "code": "2625"
    },
    {
        "name": "Schwarzau im Gebirge",
        "code": "2662"
    },
    {
        "name": "Seebenstein",
        "code": "2824"
    },
    {
        "name": "Semmering",
        "code": "2680"
    },
    {
        "name": "Ternitz",
        "code": "2630"
    },
    {
        "name": "Trattenbach",
        "code": "2881"
    },
    {
        "name": "Bürg-Vöstenhof",
        "code": "2630"
    },
    {
        "name": "Warth",
        "code": "2831"
    },
    {
        "name": "Wartmannstetten",
        "code": "2620"
    },
    {
        "name": "Willendorf",
        "code": "2732"
    },
    {
        "name": "Wimpassing im Schwarzatale",
        "code": "2632"
    },
    {
        "name": "Würflach",
        "code": "2732"
    },
    {
        "name": "Zöbern",
        "code": "2871"
    },
    {
        "name": "Höflein an der Hohen Wand",
        "code": "2732"
    },
    {
        "name": "Altlengbach",
        "code": "3033"
    },
    {
        "name": "Asperhofen",
        "code": "3041"
    },
    {
        "name": "Böheimkirchen",
        "code": "3071"
    },
    {
        "name": "Brand-Laaben",
        "code": "3053"
    },
    {
        "name": "Eichgraben",
        "code": "3032"
    },
    {
        "name": "Frankenfels",
        "code": "3213"
    },
    {
        "name": "Gerersdorf",
        "code": "3385"
    },
    {
        "name": "Hofstetten-Grünau",
        "code": "3202"
    },
    {
        "name": "Hafnerbach",
        "code": "3386"
    },
    {
        "name": "Haunoldstein",
        "code": "3384"
    },
    {
        "name": "Herzogenburg",
        "code": "3130"
    },
    {
        "name": "Inzersdorf-Getzersdorf",
        "code": "3131"
    },
    {
        "name": "Kapelln",
        "code": "3141"
    },
    {
        "name": "Karlstetten",
        "code": "3121"
    },
    {
        "name": "Kasten bei Böheimkirchen",
        "code": "3072"
    },
    {
        "name": "Kirchberg an der Pielach",
        "code": "3204"
    },
    {
        "name": "Kirchstetten",
        "code": "3062"
    },
    {
        "name": "Loich",
        "code": "3211"
    },
    {
        "name": "Maria-Anzbach",
        "code": "3034"
    },
    {
        "name": "Markersdorf-Haindorf",
        "code": "3385"
    },
    {
        "name": "Michelbach",
        "code": "3074"
    },
    {
        "name": "Neidling",
        "code": "3110"
    },
    {
        "name": "Neulengbach",
        "code": "3040"
    },
    {
        "name": "Neustift-Innermanzing",
        "code": "3052"
    },
    {
        "name": "Nußdorf ob der Traisen",
        "code": "3134"
    },
    {
        "name": "Ober-Grafendorf",
        "code": "3200"
    },
    {
        "name": "Obritzberg-Rust",
        "code": "3123"
    },
    {
        "name": "Prinzersdorf",
        "code": "3385"
    },
    {
        "name": "Pyhra",
        "code": "3143"
    },
    {
        "name": "Rabenstein an der Pielach",
        "code": "3203"
    },
    {
        "name": "St. Margarethen an der Sierning",
        "code": "3231"
    },
    {
        "name": "Schwarzenbach an der Pielach",
        "code": "3212"
    },
    {
        "name": "Statzendorf",
        "code": "3125"
    },
    {
        "name": "Stössing",
        "code": "3073"
    },
    {
        "name": "Traismauer",
        "code": "3133"
    },
    {
        "name": "Weinburg",
        "code": "3205"
    },
    {
        "name": "Perschling",
        "code": "3142"
    },
    {
        "name": "Wilhelmsburg",
        "code": "3150"
    },
    {
        "name": "Wölbling",
        "code": "3124"
    },
    {
        "name": "Gaming",
        "code": "3292"
    },
    {
        "name": "Göstling an der Ybbs",
        "code": "3345"
    },
    {
        "name": "Gresten",
        "code": "3264"
    },
    {
        "name": "Gresten-Land",
        "code": "3264"
    },
    {
        "name": "Lunz am See",
        "code": "3293"
    },
    {
        "name": "Oberndorf an der Melk",
        "code": "3281"
    },
    {
        "name": "Puchenstuben",
        "code": "3214"
    },
    {
        "name": "Purgstall an der Erlauf",
        "code": "3251"
    },
    {
        "name": "Randegg",
        "code": "3263"
    },
    {
        "name": "Reinsberg",
        "code": "3264"
    },
    {
        "name": "St. Anton an der Jeßnitz",
        "code": "3283"
    },
    {
        "name": "St. Georgen an der Leys",
        "code": "3282"
    },
    {
        "name": "Scheibbs",
        "code": "3270"
    },
    {
        "name": "Steinakirchen am Forst",
        "code": "3261"
    },
    {
        "name": "Wang",
        "code": "3262"
    },
    {
        "name": "Wieselburg",
        "code": "3250"
    },
    {
        "name": "Wieselburg-Land",
        "code": "3250"
    },
    {
        "name": "Wolfpassing",
        "code": "3261"
    },
    {
        "name": "Absdorf",
        "code": "3462"
    },
    {
        "name": "Atzenbrugg",
        "code": "3452"
    },
    {
        "name": "Fels am Wagram",
        "code": "3481"
    },
    {
        "name": "Grafenwörth",
        "code": "3484"
    },
    {
        "name": "Großriedenthal",
        "code": "3471"
    },
    {
        "name": "Großweikersdorf",
        "code": "3701"
    },
    {
        "name": "Judenau-Baumgarten",
        "code": "3441"
    },
    {
        "name": "Kirchberg am Wagram",
        "code": "3470"
    },
    {
        "name": "Königsbrunn am Wagram",
        "code": "3465"
    },
    {
        "name": "Königstetten",
        "code": "3433"
    },
    {
        "name": "Langenrohr",
        "code": "3442"
    },
    {
        "name": "Michelhausen",
        "code": "3451"
    },
    {
        "name": "Sieghartskirchen",
        "code": "3443"
    },
    {
        "name": "Sitzenberg-Reidling",
        "code": "3454"
    },
    {
        "name": "Tulbing",
        "code": "3434"
    },
    {
        "name": "Tulln an der Donau",
        "code": "3430"
    },
    {
        "name": "Würmla",
        "code": "3042"
    },
    {
        "name": "Zeiselmauer-Wolfpassing",
        "code": "3424"
    },
    {
        "name": "Zwentendorf an der Donau",
        "code": "3435"
    },
    {
        "name": "St. Andrä-Wördern",
        "code": "3423"
    },
    {
        "name": "Muckendorf-Wipfing",
        "code": "3426"
    },
    {
        "name": "Dietmanns",
        "code": "3813"
    },
    {
        "name": "Dobersberg",
        "code": "3843"
    },
    {
        "name": "Gastern",
        "code": "3852"
    },
    {
        "name": "Groß-Siegharts",
        "code": "3812"
    },
    {
        "name": "Karlstein an der Thaya",
        "code": "3822"
    },
    {
        "name": "Kautzen",
        "code": "3851"
    },
    {
        "name": "Ludweis-Aigen",
        "code": "3762"
    },
    {
        "name": "Pfaffenschlag bei Waidhofen a.d.Thaya",
        "code": "3834"
    },
    {
        "name": "Raabs an der Thaya",
        "code": "3820"
    },
    {
        "name": "Thaya",
        "code": "3842"
    },
    {
        "name": "Vitis",
        "code": "3902"
    },
    {
        "name": "Waidhofen an der Thaya",
        "code": "3830"
    },
    {
        "name": "Waidhofen an der Thaya-Land",
        "code": "3830"
    },
    {
        "name": "Waldkirchen an der Thaya",
        "code": "3844"
    },
    {
        "name": "Windigsteig",
        "code": "3841"
    },
    {
        "name": "Bad Fischau-Brunn",
        "code": "2721"
    },
    {
        "name": "Bad Schönau",
        "code": "2853"
    },
    {
        "name": "Ebenfurth",
        "code": "2490"
    },
    {
        "name": "Eggendorf",
        "code": "2492"
    },
    {
        "name": "Bad Erlach",
        "code": "2822"
    },
    {
        "name": "Felixdorf",
        "code": "2603"
    },
    {
        "name": "Gutenstein",
        "code": "2770"
    },
    {
        "name": "Hochneukirchen-Gschaidt",
        "code": "2852"
    },
    {
        "name": "Hochwolkersdorf",
        "code": "2802"
    },
    {
        "name": "Hohe Wand",
        "code": "2724"
    },
    {
        "name": "Hollenthon",
        "code": "2812"
    },
    {
        "name": "Katzelsdorf",
        "code": "2801"
    },
    {
        "name": "Kirchschlag in der Buckligen Welt",
        "code": "2860"
    },
    {
        "name": "Krumbach",
        "code": "2851"
    },
    {
        "name": "Lanzenkirchen",
        "code": "2821"
    },
    {
        "name": "Lichtenegg",
        "code": "2813"
    },
    {
        "name": "Lichtenwörth",
        "code": "2493"
    },
    {
        "name": "Markt Piesting",
        "code": "2753"
    },
    {
        "name": "Matzendorf-Hölles",
        "code": "2751"
    },
    {
        "name": "Miesenbach",
        "code": "2761"
    },
    {
        "name": "Muggendorf",
        "code": "2763"
    },
    {
        "name": "Pernitz",
        "code": "2763"
    },
    {
        "name": "Rohr im Gebirge",
        "code": "2663"
    },
    {
        "name": "Bromberg",
        "code": "2833"
    },
    {
        "name": "Schwarzenbach",
        "code": "2803"
    },
    {
        "name": "Sollenau",
        "code": "2601"
    },
    {
        "name": "Theresienfeld",
        "code": "2604"
    },
    {
        "name": "Waidmannsfeld",
        "code": "2763"
    },
    {
        "name": "Waldegg",
        "code": "2754"
    },
    {
        "name": "Walpersbach",
        "code": "2822"
    },
    {
        "name": "Weikersdorf am Steinfelde",
        "code": "2722"
    },
    {
        "name": "Wiesmath",
        "code": "2811"
    },
    {
        "name": "Winzendorf-Muthmannsdorf",
        "code": "2722"
    },
    {
        "name": "Wöllersdorf-Steinabrückl",
        "code": "2752"
    },
    {
        "name": "Zillingdorf",
        "code": "2492"
    },
    {
        "name": "Ebergassing",
        "code": "2435"
    },
    {
        "name": "Fischamend",
        "code": "2401"
    },
    {
        "name": "Gablitz",
        "code": "3003"
    },
    {
        "name": "Gerasdorf bei Wien",
        "code": "2201"
    },
    {
        "name": "Gramatneusiedl",
        "code": "2440"
    },
    {
        "name": "Himberg",
        "code": "2325"
    },
    {
        "name": "Klein-Neusiedl",
        "code": "2431"
    },
    {
        "name": "Klosterneuburg",
        "code": "3400"
    },
    {
        "name": "Lanzendorf",
        "code": "2326"
    },
    {
        "name": "Leopoldsdorf",
        "code": "2333"
    },
    {
        "name": "Maria-Lanzendorf",
        "code": "2326"
    },
    {
        "name": "Mauerbach",
        "code": "3001"
    },
    {
        "name": "Moosbrunn",
        "code": "2440"
    },
    {
        "name": "Pressbaum",
        "code": "3021"
    },
    {
        "name": "Purkersdorf",
        "code": "3002"
    },
    {
        "name": "Rauchenwarth",
        "code": "2320"
    },
    {
        "name": "Schwadorf",
        "code": "2432"
    },
    {
        "name": "Schwechat",
        "code": "2320"
    },
    {
        "name": "Tullnerbach",
        "code": "3013"
    },
    {
        "name": "Wolfsgraben",
        "code": "3012"
    },
    {
        "name": "Zwölfaxing",
        "code": "2322"
    },
    {
        "name": "Allentsteig",
        "code": "3804"
    },
    {
        "name": "Arbesbach",
        "code": "3925"
    },
    {
        "name": "Bärnkopf",
        "code": "3665"
    },
    {
        "name": "Echsenbach",
        "code": "3903"
    },
    {
        "name": "Göpfritz an der Wild",
        "code": "3800"
    },
    {
        "name": "Grafenschlag",
        "code": "3912"
    },
    {
        "name": "Groß Gerungs",
        "code": "3920"
    },
    {
        "name": "Großgöttfritz",
        "code": "3913"
    },
    {
        "name": "Gutenbrunn",
        "code": "3665"
    },
    {
        "name": "Kirchschlag",
        "code": "3631"
    },
    {
        "name": "Kottes-Purk",
        "code": "3623"
    },
    {
        "name": "Langschlag",
        "code": "3921"
    },
    {
        "name": "Martinsberg",
        "code": "3664"
    },
    {
        "name": "Ottenschlag",
        "code": "3631"
    },
    {
        "name": "Altmelon",
        "code": "3925"
    },
    {
        "name": "Pölla",
        "code": "3593"
    },
    {
        "name": "Rappottenstein",
        "code": "3911"
    },
    {
        "name": "Sallingberg",
        "code": "3525"
    },
    {
        "name": "Schönbach",
        "code": "3633"
    },
    {
        "name": "Schwarzenau",
        "code": "3900"
    },
    {
        "name": "Schweiggers",
        "code": "3931"
    },
    {
        "name": "Bad Traunstein",
        "code": "3632"
    },
    {
        "name": "Waldhausen",
        "code": "3914"
    },
    {
        "name": "Zwettl-Niederösterreich",
        "code": "3910"
    },
    {
        "name": "Linz",
        "code": "4020"
    },
    {
        "name": "Steyr",
        "code": "4400"
    },
    {
        "name": "Wels",
        "code": "4600"
    },
    {
        "name": "Altheim",
        "code": "4950"
    },
    {
        "name": "Aspach",
        "code": "5252"
    },
    {
        "name": "Auerbach",
        "code": "5224"
    },
    {
        "name": "Braunau am Inn",
        "code": "5280"
    },
    {
        "name": "Burgkirchen",
        "code": "5274"
    },
    {
        "name": "Eggelsberg",
        "code": "5142"
    },
    {
        "name": "Feldkirchen bei Mattighofen",
        "code": "5143"
    },
    {
        "name": "Franking",
        "code": "5131"
    },
    {
        "name": "Geretsberg",
        "code": "5132"
    },
    {
        "name": "Gilgenberg am Weilhart",
        "code": "5133"
    },
    {
        "name": "Haigermoos",
        "code": "5120"
    },
    {
        "name": "Handenberg",
        "code": "5144"
    },
    {
        "name": "Helpfau-Uttendorf",
        "code": "5261"
    },
    {
        "name": "Hochburg-Ach",
        "code": "5122"
    },
    {
        "name": "Höhnhart",
        "code": "5251"
    },
    {
        "name": "Jeging",
        "code": "5225"
    },
    {
        "name": "Kirchberg bei Mattighofen",
        "code": "5232"
    },
    {
        "name": "Lengau",
        "code": "5211"
    },
    {
        "name": "Lochen am See",
        "code": "5221"
    },
    {
        "name": "Maria Schmolln",
        "code": "5241"
    },
    {
        "name": "Mattighofen",
        "code": "5230"
    },
    {
        "name": "Mauerkirchen",
        "code": "5270"
    },
    {
        "name": "Mining",
        "code": "4962"
    },
    {
        "name": "Moosbach",
        "code": "5271"
    },
    {
        "name": "Moosdorf",
        "code": "5141"
    },
    {
        "name": "Munderfing",
        "code": "5222"
    },
    {
        "name": "Neukirchen an der Enknach",
        "code": "5145"
    },
    {
        "name": "Ostermiething",
        "code": "5121"
    },
    {
        "name": "Palting",
        "code": "5163"
    },
    {
        "name": "Perwang am Grabensee",
        "code": "5166"
    },
    {
        "name": "Pfaffstätt",
        "code": "5223"
    },
    {
        "name": "Pischelsdorf am Engelbach",
        "code": "5233"
    },
    {
        "name": "Polling im Innkreis",
        "code": "4951"
    },
    {
        "name": "Roßbach",
        "code": "5273"
    },
    {
        "name": "St. Georgen am Fillmannsbach",
        "code": "5144"
    },
    {
        "name": "St. Johann am Walde",
        "code": "5242"
    },
    {
        "name": "St. Pantaleon",
        "code": "5120"
    },
    {
        "name": "St. Peter am Hart",
        "code": "4963"
    },
    {
        "name": "St. Radegund",
        "code": "5121"
    },
    {
        "name": "St. Veit im Innkreis",
        "code": "5273"
    },
    {
        "name": "Schalchen",
        "code": "5231"
    },
    {
        "name": "Schwand im Innkreis",
        "code": "5134"
    },
    {
        "name": "Tarsdorf",
        "code": "5121"
    },
    {
        "name": "Treubach",
        "code": "5272"
    },
    {
        "name": "Überackern",
        "code": "5122"
    },
    {
        "name": "Weng im Innkreis",
        "code": "4952"
    },
    {
        "name": "Alkoven",
        "code": "4072"
    },
    {
        "name": "Aschach an der Donau",
        "code": "4082"
    },
    {
        "name": "Eferding",
        "code": "4070"
    },
    {
        "name": "Fraham",
        "code": "4070"
    },
    {
        "name": "Haibach ob der Donau",
        "code": "4083"
    },
    {
        "name": "Hartkirchen",
        "code": "4081"
    },
    {
        "name": "Hinzenbach",
        "code": "4070"
    },
    {
        "name": "Prambachkirchen",
        "code": "4731"
    },
    {
        "name": "Pupping",
        "code": "4070"
    },
    {
        "name": "St. Marienkirchen an der Polsenz",
        "code": "4076"
    },
    {
        "name": "Scharten",
        "code": "4612"
    },
    {
        "name": "Stroheim",
        "code": "4074"
    },
    {
        "name": "Freistadt",
        "code": "4240"
    },
    {
        "name": "Grünbach",
        "code": "4264"
    },
    {
        "name": "Gutau",
        "code": "4293"
    },
    {
        "name": "Hagenberg im Mühlkreis",
        "code": "4232"
    },
    {
        "name": "Hirschbach im Mühlkreis",
        "code": "4242"
    },
    {
        "name": "Kaltenberg",
        "code": "4273"
    },
    {
        "name": "Kefermarkt",
        "code": "4292"
    },
    {
        "name": "Königswiesen",
        "code": "4280"
    },
    {
        "name": "Lasberg",
        "code": "4291"
    },
    {
        "name": "Leopoldschlag",
        "code": "4262"
    },
    {
        "name": "Liebenau",
        "code": "4252"
    },
    {
        "name": "Neumarkt im Mühlkreis",
        "code": "4212"
    },
    {
        "name": "Pierbach",
        "code": "4282"
    },
    {
        "name": "Pregarten",
        "code": "4230"
    },
    {
        "name": "Rainbach im Mühlkreis",
        "code": "4261"
    },
    {
        "name": "Sandl",
        "code": "4251"
    },
    {
        "name": "St. Leonhard bei Freistadt",
        "code": "4294"
    },
    {
        "name": "St. Oswald bei Freistadt",
        "code": "4271"
    },
    {
        "name": "Schönau im Mühlkreis",
        "code": "4274"
    },
    {
        "name": "Tragwein",
        "code": "4284"
    },
    {
        "name": "Unterweißenbach",
        "code": "4273"
    },
    {
        "name": "Unterweitersdorf",
        "code": "4210"
    },
    {
        "name": "Waldburg",
        "code": "4240"
    },
    {
        "name": "Wartberg ob der Aist",
        "code": "4224"
    },
    {
        "name": "Weitersfelden",
        "code": "4272"
    },
    {
        "name": "Windhaag bei Freistadt",
        "code": "4263"
    },
    {
        "name": "Bad Zell",
        "code": "4283"
    },
    {
        "name": "Altmünster",
        "code": "4813"
    },
    {
        "name": "Bad Goisern am Hallstättersee",
        "code": "4822"
    },
    {
        "name": "Bad Ischl",
        "code": "4820"
    },
    {
        "name": "Ebensee",
        "code": "4802"
    },
    {
        "name": "Gmunden",
        "code": "4810"
    },
    {
        "name": "Gosau",
        "code": "4824"
    },
    {
        "name": "Grünau im Almtal",
        "code": "4645"
    },
    {
        "name": "Gschwandt",
        "code": "4816"
    },
    {
        "name": "Hallstatt",
        "code": "4830"
    },
    {
        "name": "Kirchham",
        "code": "4656"
    },
    {
        "name": "Laakirchen",
        "code": "4663"
    },
    {
        "name": "Obertraun",
        "code": "4831"
    },
    {
        "name": "Ohlsdorf",
        "code": "4694"
    },
    {
        "name": "Pinsdorf",
        "code": "4812"
    },
    {
        "name": "Roitham",
        "code": "4661"
    },
    {
        "name": "St. Konrad",
        "code": "4817"
    },
    {
        "name": "St. Wolfgang im Salzkammergut",
        "code": "5360"
    },
    {
        "name": "Traunkirchen",
        "code": "4801"
    },
    {
        "name": "Scharnstein",
        "code": "4644"
    },
    {
        "name": "Vorchdorf",
        "code": "4655"
    },
    {
        "name": "Aistersheim",
        "code": "4676"
    },
    {
        "name": "Bad Schallerbach",
        "code": "4701"
    },
    {
        "name": "Bruck-Waasen",
        "code": "4722"
    },
    {
        "name": "Eschenau im Hausruckkreis",
        "code": "4724"
    },
    {
        "name": "Gallspach",
        "code": "4713"
    },
    {
        "name": "Gaspoltshofen",
        "code": "4673"
    },
    {
        "name": "Geboltskirchen",
        "code": "4682"
    },
    {
        "name": "Grieskirchen",
        "code": "4710"
    },
    {
        "name": "Haag am Hausruck",
        "code": "4680"
    },
    {
        "name": "Heiligenberg",
        "code": "4733"
    },
    {
        "name": "Hofkirchen an der Trattnach",
        "code": "4716"
    },
    {
        "name": "Kallham",
        "code": "4720"
    },
    {
        "name": "Kematen am Innbach",
        "code": "4633"
    },
    {
        "name": "Meggenhofen",
        "code": "4714"
    },
    {
        "name": "Michaelnbach",
        "code": "4712"
    },
    {
        "name": "Natternbach",
        "code": "4723"
    },
    {
        "name": "Neukirchen am Walde",
        "code": "4724"
    },
    {
        "name": "Neumarkt im Hausruckkreis",
        "code": "4720"
    },
    {
        "name": "Peuerbach",
        "code": "4722"
    },
    {
        "name": "Pötting",
        "code": "4720"
    },
    {
        "name": "Pollham",
        "code": "4710"
    },
    {
        "name": "Pram",
        "code": "4742"
    },
    {
        "name": "Rottenbach",
        "code": "4681"
    },
    {
        "name": "St. Agatha",
        "code": "4084"
    },
    {
        "name": "St. Georgen bei Grieskirchen",
        "code": "4710"
    },
    {
        "name": "St. Thomas",
        "code": "4732"
    },
    {
        "name": "Schlüßlberg",
        "code": "4707"
    },
    {
        "name": "Steegen",
        "code": "4722"
    },
    {
        "name": "Taufkirchen an der Trattnach",
        "code": "4715"
    },
    {
        "name": "Tollet",
        "code": "4710"
    },
    {
        "name": "Waizenkirchen",
        "code": "4730"
    },
    {
        "name": "Wallern an der Trattnach",
        "code": "4702"
    },
    {
        "name": "Weibern",
        "code": "4675"
    },
    {
        "name": "Wendling",
        "code": "4741"
    },
    {
        "name": "Edlbach",
        "code": "4580"
    },
    {
        "name": "Grünburg",
        "code": "4594"
    },
    {
        "name": "Hinterstoder",
        "code": "4573"
    },
    {
        "name": "Inzersdorf im Kremstal",
        "code": "4565"
    },
    {
        "name": "Kirchdorf an der Krems",
        "code": "4560"
    },
    {
        "name": "Klaus an der Pyhrnbahn",
        "code": "4564"
    },
    {
        "name": "Kremsmünster",
        "code": "4550"
    },
    {
        "name": "Micheldorf in Oberösterreich",
        "code": "4563"
    },
    {
        "name": "Molln",
        "code": "4591"
    },
    {
        "name": "Nußbach",
        "code": "4542"
    },
    {
        "name": "Oberschlierbach",
        "code": "4554"
    },
    {
        "name": "Pettenbach",
        "code": "4643"
    },
    {
        "name": "Ried im Traunkreis",
        "code": "4551"
    },
    {
        "name": "Rosenau am Hengstpaß",
        "code": "4581"
    },
    {
        "name": "Roßleithen",
        "code": "4575"
    },
    {
        "name": "St. Pankraz",
        "code": "4572"
    },
    {
        "name": "Schlierbach",
        "code": "4553"
    },
    {
        "name": "Spital am Pyhrn",
        "code": "4582"
    },
    {
        "name": "Steinbach am Ziehberg",
        "code": "4562"
    },
    {
        "name": "Steinbach an der Steyr",
        "code": "4596"
    },
    {
        "name": "Vorderstoder",
        "code": "4574"
    },
    {
        "name": "Wartberg an der Krems",
        "code": "4552"
    },
    {
        "name": "Windischgarsten",
        "code": "4580"
    },
    {
        "name": "Allhaming",
        "code": "4511"
    },
    {
        "name": "Ansfelden",
        "code": "4053"
    },
    {
        "name": "Asten",
        "code": "4481"
    },
    {
        "name": "Eggendorf im Traunkreis",
        "code": "4622"
    },
    {
        "name": "Enns",
        "code": "4470"
    },
    {
        "name": "Hargelsberg",
        "code": "4483"
    },
    {
        "name": "Hörsching",
        "code": "4063"
    },
    {
        "name": "Hofkirchen im Traunkreis",
        "code": "4492"
    },
    {
        "name": "Kematen an der Krems",
        "code": "4531"
    },
    {
        "name": "Kirchberg-Thening",
        "code": "4062"
    },
    {
        "name": "Kronstorf",
        "code": "4484"
    },
    {
        "name": "Leonding",
        "code": "4060"
    },
    {
        "name": "St. Florian",
        "code": "4490"
    },
    {
        "name": "Neuhofen an der Krems",
        "code": "4501"
    },
    {
        "name": "Niederneukirchen",
        "code": "4491"
    },
    {
        "name": "Oftering",
        "code": "4064"
    },
    {
        "name": "Pasching",
        "code": "4061"
    },
    {
        "name": "Piberbach",
        "code": "4533"
    },
    {
        "name": "Pucking",
        "code": "4055"
    },
    {
        "name": "St. Marien",
        "code": "4502"
    },
    {
        "name": "Traun",
        "code": "4050"
    },
    {
        "name": "Wilhering",
        "code": "4073"
    },
    {
        "name": "Allerheiligen im Mühlkreis",
        "code": "4320"
    },
    {
        "name": "Arbing",
        "code": "4341"
    },
    {
        "name": "Baumgartenberg",
        "code": "4342"
    },
    {
        "name": "Dimbach",
        "code": "4371"
    },
    {
        "name": "Grein",
        "code": "4360"
    },
    {
        "name": "Katsdorf",
        "code": "4223"
    },
    {
        "name": "Klam",
        "code": "4352"
    },
    {
        "name": "Bad Kreuzen",
        "code": "4362"
    },
    {
        "name": "Langenstein",
        "code": "4222"
    },
    {
        "name": "Luftenberg an der Donau",
        "code": "4225"
    },
    {
        "name": "Mauthausen",
        "code": "4310"
    },
    {
        "name": "Mitterkirchen im Machland",
        "code": "4343"
    },
    {
        "name": "Münzbach",
        "code": "4323"
    },
    {
        "name": "Naarn im Machlande",
        "code": "4331"
    },
    {
        "name": "Pabneukirchen",
        "code": "4363"
    },
    {
        "name": "Perg",
        "code": "4320"
    },
    {
        "name": "Rechberg",
        "code": "4324"
    },
    {
        "name": "Ried in der Riedmark",
        "code": "4312"
    },
    {
        "name": "St. Georgen am Walde",
        "code": "4372"
    },
    {
        "name": "St. Georgen an der Gusen",
        "code": "4222"
    },
    {
        "name": "St. Nikola an der Donau",
        "code": "4381"
    },
    {
        "name": "St. Thomas am Blasenstein",
        "code": "4364"
    },
    {
        "name": "Saxen",
        "code": "4351"
    },
    {
        "name": "Schwertberg",
        "code": "4311"
    },
    {
        "name": "Waldhausen im Strudengau",
        "code": "4391"
    },
    {
        "name": "Windhaag bei Perg",
        "code": "4322"
    },
    {
        "name": "Andrichsfurt",
        "code": "4754"
    },
    {
        "name": "Antiesenhofen",
        "code": "4980"
    },
    {
        "name": "Aurolzmünster",
        "code": "4971"
    },
    {
        "name": "Eberschwang",
        "code": "4906"
    },
    {
        "name": "Eitzing",
        "code": "4970"
    },
    {
        "name": "Geiersberg",
        "code": "4922"
    },
    {
        "name": "Geinberg",
        "code": "4943"
    },
    {
        "name": "Gurten",
        "code": "4942"
    },
    {
        "name": "Hohenzell",
        "code": "4921"
    },
    {
        "name": "Kirchdorf am Inn",
        "code": "4982"
    },
    {
        "name": "Kirchheim im Innkreis",
        "code": "4932"
    },
    {
        "name": "Lambrechten",
        "code": "4772"
    },
    {
        "name": "Lohnsburg am Kobernaußerwald",
        "code": "4923"
    },
    {
        "name": "Mehrnbach",
        "code": "4941"
    },
    {
        "name": "Mettmach",
        "code": "4931"
    },
    {
        "name": "Mörschwang",
        "code": "4982"
    },
    {
        "name": "Mühlheim am Inn",
        "code": "4961"
    },
    {
        "name": "Neuhofen im Innkreis",
        "code": "4912"
    },
    {
        "name": "Obernberg am Inn",
        "code": "4982"
    },
    {
        "name": "Ort im Innkreis",
        "code": "4974"
    },
    {
        "name": "Pattigham",
        "code": "4910"
    },
    {
        "name": "Peterskirchen",
        "code": "4743"
    },
    {
        "name": "Pramet",
        "code": "4925"
    },
    {
        "name": "Reichersberg",
        "code": "4981"
    },
    {
        "name": "Ried im Innkreis",
        "code": "4910"
    },
    {
        "name": "St. Georgen bei Obernberg am Inn",
        "code": "4983"
    },
    {
        "name": "St. Marienkirchen am Hausruck",
        "code": "4926"
    },
    {
        "name": "St. Martin im Innkreis",
        "code": "4973"
    },
    {
        "name": "Schildorn",
        "code": "4920"
    },
    {
        "name": "Senftenbach",
        "code": "4973"
    },
    {
        "name": "Taiskirchen im Innkreis",
        "code": "4753"
    },
    {
        "name": "Tumeltsham",
        "code": "4911"
    },
    {
        "name": "Utzenaich",
        "code": "4972"
    },
    {
        "name": "Waldzell",
        "code": "4924"
    },
    {
        "name": "Weilbach",
        "code": "4984"
    },
    {
        "name": "Wippenham",
        "code": "4942"
    },
    {
        "name": "Afiesl",
        "code": "4184"
    },
    {
        "name": "Ahorn",
        "code": "4184"
    },
    {
        "name": "Altenfelden",
        "code": "4121"
    },
    {
        "name": "Arnreit",
        "code": "4122"
    },
    {
        "name": "Atzesberg",
        "code": "4152"
    },
    {
        "name": "Auberg",
        "code": "4171"
    },
    {
        "name": "Haslach an der Mühl",
        "code": "4170"
    },
    {
        "name": "Helfenberg",
        "code": "4184"
    },
    {
        "name": "Hörbich",
        "code": "4132"
    },
    {
        "name": "Hofkirchen im Mühlkreis",
        "code": "4142"
    },
    {
        "name": "Julbach",
        "code": "4162"
    },
    {
        "name": "Kirchberg ob der Donau",
        "code": "4131"
    },
    {
        "name": "Klaffer am Hochficht",
        "code": "4163"
    },
    {
        "name": "Kleinzell im Mühlkreis",
        "code": "4115"
    },
    {
        "name": "Kollerschlag",
        "code": "4154"
    },
    {
        "name": "Lembach im Mühlkreis",
        "code": "4132"
    },
    {
        "name": "Lichtenau im Mühlkreis",
        "code": "4170"
    },
    {
        "name": "Nebelberg",
        "code": "4155"
    },
    {
        "name": "Neufelden",
        "code": "4120"
    },
    {
        "name": "Niederkappel",
        "code": "4133"
    },
    {
        "name": "Niederwaldkirchen",
        "code": "4174"
    },
    {
        "name": "Oberkappel",
        "code": "4144"
    },
    {
        "name": "Oepping",
        "code": "4151"
    },
    {
        "name": "Peilstein im Mühlviertel",
        "code": "4153"
    },
    {
        "name": "Pfarrkirchen im Mühlkreis",
        "code": "4141"
    },
    {
        "name": "Putzleinsdorf",
        "code": "4134"
    },
    {
        "name": "Neustift im Mühlkreis",
        "code": "4143"
    },
    {
        "name": "St. Johann am Wimberg",
        "code": "4172"
    },
    {
        "name": "St. Martin im Mühlkreis",
        "code": "4113"
    },
    {
        "name": "St. Oswald bei Haslach",
        "code": "4170"
    },
    {
        "name": "St. Peter am Wimberg",
        "code": "4171"
    },
    {
        "name": "St. Stefan am Walde",
        "code": "4170"
    },
    {
        "name": "St. Ulrich im Mühlkreis",
        "code": "4116"
    },
    {
        "name": "St. Veit im Mühlkreis",
        "code": "4173"
    },
    {
        "name": "Sarleinsbach",
        "code": "4152"
    },
    {
        "name": "Schönegg",
        "code": "4184"
    },
    {
        "name": "Schwarzenberg am Böhmerwald",
        "code": "4164"
    },
    {
        "name": "Ulrichsberg",
        "code": "4161"
    },
    {
        "name": "Aigen-Schlägl",
        "code": "4160"
    },
    {
        "name": "Rohrbach-Berg",
        "code": "4150"
    },
    {
        "name": "Altschwendt",
        "code": "4721"
    },
    {
        "name": "Andorf",
        "code": "4770"
    },
    {
        "name": "Brunnenthal",
        "code": "4786"
    },
    {
        "name": "Diersbach",
        "code": "4776"
    },
    {
        "name": "Dorf an der Pram",
        "code": "4751"
    },
    {
        "name": "Eggerding",
        "code": "4773"
    },
    {
        "name": "Engelhartszell",
        "code": "4090"
    },
    {
        "name": "Enzenkirchen",
        "code": "4761"
    },
    {
        "name": "Esternberg",
        "code": "4092"
    },
    {
        "name": "Freinberg",
        "code": "4785"
    },
    {
        "name": "Kopfing im Innkreis",
        "code": "4794"
    },
    {
        "name": "Mayrhof",
        "code": "4777"
    },
    {
        "name": "Münzkirchen",
        "code": "4792"
    },
    {
        "name": "Raab",
        "code": "4760"
    },
    {
        "name": "Rainbach im Innkreis",
        "code": "4791"
    },
    {
        "name": "Riedau",
        "code": "4752"
    },
    {
        "name": "St. Aegidi",
        "code": "4725"
    },
    {
        "name": "St. Florian am Inn",
        "code": "4782"
    },
    {
        "name": "St. Marienkirchen bei Schärding",
        "code": "4774"
    },
    {
        "name": "St. Roman",
        "code": "4793"
    },
    {
        "name": "St. Willibald",
        "code": "4762"
    },
    {
        "name": "Schärding",
        "code": "4780"
    },
    {
        "name": "Schardenberg",
        "code": "4784"
    },
    {
        "name": "Sigharting",
        "code": "4771"
    },
    {
        "name": "Suben",
        "code": "4975"
    },
    {
        "name": "Taufkirchen an der Pram",
        "code": "4775"
    },
    {
        "name": "Vichtenstein",
        "code": "4091"
    },
    {
        "name": "Waldkirchen am Wesen",
        "code": "4085"
    },
    {
        "name": "Wernstein am Inn",
        "code": "4783"
    },
    {
        "name": "Zell an der Pram",
        "code": "4755"
    },
    {
        "name": "Adlwang",
        "code": "4541"
    },
    {
        "name": "Aschach an der Steyr",
        "code": "4421"
    },
    {
        "name": "Bad Hall",
        "code": "4540"
    },
    {
        "name": "Dietach",
        "code": "4407"
    },
    {
        "name": "Gaflenz",
        "code": "3334"
    },
    {
        "name": "Garsten",
        "code": "4451"
    },
    {
        "name": "Großraming",
        "code": "4463"
    },
    {
        "name": "Laussa",
        "code": "4461"
    },
    {
        "name": "Losenstein",
        "code": "4460"
    },
    {
        "name": "Maria Neustift",
        "code": "4443"
    },
    {
        "name": "Pfarrkirchen bei Bad Hall",
        "code": "4540"
    },
    {
        "name": "Reichraming",
        "code": "4462"
    },
    {
        "name": "Rohr im Kremstal",
        "code": "4532"
    },
    {
        "name": "St. Ulrich bei Steyr",
        "code": "4400"
    },
    {
        "name": "Schiedlberg",
        "code": "4521"
    },
    {
        "name": "Sierning",
        "code": "4522"
    },
    {
        "name": "Ternberg",
        "code": "4452"
    },
    {
        "name": "Waldneukirchen",
        "code": "4595"
    },
    {
        "name": "Wolfern",
        "code": "4493"
    },
    {
        "name": "Weyer",
        "code": "3335"
    },
    {
        "name": "Alberndorf in der Riedmark",
        "code": "4211"
    },
    {
        "name": "Altenberg bei Linz",
        "code": "4203"
    },
    {
        "name": "Bad Leonfelden",
        "code": "4190"
    },
    {
        "name": "Eidenberg",
        "code": "4201"
    },
    {
        "name": "Engerwitzdorf",
        "code": "4209"
    },
    {
        "name": "Feldkirchen an der Donau",
        "code": "4101"
    },
    {
        "name": "Gallneukirchen",
        "code": "4210"
    },
    {
        "name": "Goldwörth",
        "code": "4102"
    },
    {
        "name": "Gramastetten",
        "code": "4201"
    },
    {
        "name": "Haibach im Mühlkreis",
        "code": "4204"
    },
    {
        "name": "Hellmonsödt",
        "code": "4202"
    },
    {
        "name": "Herzogsdorf",
        "code": "4175"
    },
    {
        "name": "Kirchschlag bei Linz",
        "code": "4202"
    },
    {
        "name": "Lichtenberg",
        "code": "4040"
    },
    {
        "name": "Oberneukirchen",
        "code": "4181"
    },
    {
        "name": "Ottenschlag im Mühlkreis",
        "code": "4204"
    },
    {
        "name": "Ottensheim",
        "code": "4100"
    },
    {
        "name": "Puchenau",
        "code": "4048"
    },
    {
        "name": "Reichenau im Mühlkreis",
        "code": "4204"
    },
    {
        "name": "Reichenthal",
        "code": "4193"
    },
    {
        "name": "St. Gotthard im Mühlkreis",
        "code": "4112"
    },
    {
        "name": "Schenkenfelden",
        "code": "4192"
    },
    {
        "name": "Sonnberg im Mühlkreis",
        "code": "4180"
    },
    {
        "name": "Steyregg",
        "code": "4221"
    },
    {
        "name": "Vorderweißenbach",
        "code": "4191"
    },
    {
        "name": "Walding",
        "code": "4111"
    },
    {
        "name": "Zwettl an der Rodl",
        "code": "4180"
    },
    {
        "name": "Ampflwang im Hausruckwald",
        "code": "4843"
    },
    {
        "name": "Attersee am Attersee",
        "code": "4864"
    },
    {
        "name": "Attnang-Puchheim",
        "code": "4800"
    },
    {
        "name": "Atzbach",
        "code": "4904"
    },
    {
        "name": "Aurach am Hongar",
        "code": "4861"
    },
    {
        "name": "Berg im Attergau",
        "code": "4880"
    },
    {
        "name": "Desselbrunn",
        "code": "4693"
    },
    {
        "name": "Fornach",
        "code": "4892"
    },
    {
        "name": "Frankenburg am Hausruck",
        "code": "4873"
    },
    {
        "name": "Frankenmarkt",
        "code": "4890"
    },
    {
        "name": "Gampern",
        "code": "4851"
    },
    {
        "name": "Innerschwand am Mondsee",
        "code": "5310"
    },
    {
        "name": "Lenzing",
        "code": "4860"
    },
    {
        "name": "Manning",
        "code": "4903"
    },
    {
        "name": "Mondsee",
        "code": "5310"
    },
    {
        "name": "Neukirchen an der Vöckla",
        "code": "4872"
    },
    {
        "name": "Niederthalheim",
        "code": "4692"
    },
    {
        "name": "Nußdorf am Attersee",
        "code": "4865"
    },
    {
        "name": "Oberhofen am Irrsee",
        "code": "4894"
    },
    {
        "name": "Oberndorf bei Schwanenstadt",
        "code": "4690"
    },
    {
        "name": "Oberwang",
        "code": "4882"
    },
    {
        "name": "Ottnang am Hausruck",
        "code": "4901"
    },
    {
        "name": "Pfaffing",
        "code": "4870"
    },
    {
        "name": "Pilsbach",
        "code": "4840"
    },
    {
        "name": "Pitzenberg",
        "code": "4690"
    },
    {
        "name": "Pöndorf",
        "code": "4891"
    },
    {
        "name": "Puchkirchen am Trattberg",
        "code": "4849"
    },
    {
        "name": "Pühret",
        "code": "4690"
    },
    {
        "name": "Redleiten",
        "code": "4873"
    },
    {
        "name": "Redlham",
        "code": "4846"
    },
    {
        "name": "Regau",
        "code": "4844"
    },
    {
        "name": "Rüstorf",
        "code": "4690"
    },
    {
        "name": "Rutzenham",
        "code": "4690"
    },
    {
        "name": "St. Georgen im Attergau",
        "code": "4880"
    },
    {
        "name": "St. Lorenz",
        "code": "5310"
    },
    {
        "name": "Schlatt",
        "code": "4690"
    },
    {
        "name": "Schörfling am Attersee",
        "code": "4861"
    },
    {
        "name": "Schwanenstadt",
        "code": "4690"
    },
    {
        "name": "Seewalchen am Attersee",
        "code": "4863"
    },
    {
        "name": "Steinbach am Attersee",
        "code": "4853"
    },
    {
        "name": "Straß im Attergau",
        "code": "4881"
    },
    {
        "name": "Tiefgraben",
        "code": "5310"
    },
    {
        "name": "Timelkam",
        "code": "4850"
    },
    {
        "name": "Ungenach",
        "code": "4841"
    },
    {
        "name": "Unterach am Attersee",
        "code": "4866"
    },
    {
        "name": "Vöcklabruck",
        "code": "4840"
    },
    {
        "name": "Vöcklamarkt",
        "code": "4870"
    },
    {
        "name": "Weißenkirchen im Attergau",
        "code": "4890"
    },
    {
        "name": "Weyregg am Attersee",
        "code": "4852"
    },
    {
        "name": "Wolfsegg am Hausruck",
        "code": "4902"
    },
    {
        "name": "Zell am Moos",
        "code": "4893"
    },
    {
        "name": "Zell am Pettenfirst",
        "code": "4842"
    },
    {
        "name": "Aichkirchen",
        "code": "4671"
    },
    {
        "name": "Bachmanning",
        "code": "4672"
    },
    {
        "name": "Bad Wimsbach-Neydharting",
        "code": "4654"
    },
    {
        "name": "Buchkirchen",
        "code": "4611"
    },
    {
        "name": "Eberstalzell",
        "code": "4653"
    },
    {
        "name": "Edt bei Lambach",
        "code": "4650"
    },
    {
        "name": "Fischlham",
        "code": "4652"
    },
    {
        "name": "Gunskirchen",
        "code": "4623"
    },
    {
        "name": "Holzhausen",
        "code": "4615"
    },
    {
        "name": "Krenglbach",
        "code": "4631"
    },
    {
        "name": "Lambach",
        "code": "4650"
    },
    {
        "name": "Marchtrenk",
        "code": "4614"
    },
    {
        "name": "Neukirchen bei Lambach",
        "code": "4671"
    },
    {
        "name": "Offenhausen",
        "code": "4625"
    },
    {
        "name": "Pennewang",
        "code": "4624"
    },
    {
        "name": "Pichl bei Wels",
        "code": "4632"
    },
    {
        "name": "Sattledt",
        "code": "4642"
    },
    {
        "name": "Schleißheim",
        "code": "4600"
    },
    {
        "name": "Sipbachzell",
        "code": "4621"
    },
    {
        "name": "Stadl-Paura",
        "code": "4651"
    },
    {
        "name": "Steinerkirchen an der Traun",
        "code": "4652"
    },
    {
        "name": "Steinhaus",
        "code": "4641"
    },
    {
        "name": "Thalheim bei Wels",
        "code": "4600"
    },
    {
        "name": "Weißkirchen an der Traun",
        "code": "4616"
    },
    {
        "name": "Salzburg",
        "code": "5020"
    },
    {
        "name": "Abtenau",
        "code": "5441"
    },
    {
        "name": "Adnet",
        "code": "5421"
    },
    {
        "name": "Annaberg-Lungötz",
        "code": "5524"
    },
    {
        "name": "Golling an der Salzach",
        "code": "5440"
    },
    {
        "name": "Hallein",
        "code": "5400"
    },
    {
        "name": "Krispl",
        "code": "5425"
    },
    {
        "name": "Kuchl",
        "code": "5431"
    },
    {
        "name": "Oberalm",
        "code": "5411"
    },
    {
        "name": "Puch bei Hallein",
        "code": "5412"
    },
    {
        "name": "Rußbach am Paß Gschütt",
        "code": "5442"
    },
    {
        "name": "Sankt Koloman",
        "code": "5423"
    },
    {
        "name": "Scheffau am Tennengebirge",
        "code": "5440"
    },
    {
        "name": "Bad Vigaun",
        "code": "5424"
    },
    {
        "name": "Anif",
        "code": "5081"
    },
    {
        "name": "Anthering",
        "code": "5102"
    },
    {
        "name": "Bergheim",
        "code": "5101"
    },
    {
        "name": "Berndorf bei Salzburg",
        "code": "5165"
    },
    {
        "name": "Bürmoos",
        "code": "5111"
    },
    {
        "name": "Dorfbeuern",
        "code": "5152"
    },
    {
        "name": "Ebenau",
        "code": "5323"
    },
    {
        "name": "Elixhausen",
        "code": "5161"
    },
    {
        "name": "Elsbethen",
        "code": "5061"
    },
    {
        "name": "Eugendorf",
        "code": "5301"
    },
    {
        "name": "Faistenau",
        "code": "5324"
    },
    {
        "name": "Fuschl am See",
        "code": "5330"
    },
    {
        "name": "Göming",
        "code": "5114"
    },
    {
        "name": "Grödig",
        "code": "5082"
    },
    {
        "name": "Großgmain",
        "code": "5084"
    },
    {
        "name": "Hallwang",
        "code": "5300"
    },
    {
        "name": "Henndorf am Wallersee",
        "code": "5302"
    },
    {
        "name": "Hintersee",
        "code": "5324"
    },
    {
        "name": "Hof bei Salzburg",
        "code": "5322"
    },
    {
        "name": "Köstendorf",
        "code": "5203"
    },
    {
        "name": "Koppl",
        "code": "5321"
    },
    {
        "name": "Lamprechtshausen",
        "code": "5112"
    },
    {
        "name": "Mattsee",
        "code": "5163"
    },
    {
        "name": "Neumarkt am Wallersee",
        "code": "5202"
    },
    {
        "name": "Nußdorf am Haunsberg",
        "code": "5151"
    },
    {
        "name": "Oberndorf bei Salzburg",
        "code": "5110"
    },
    {
        "name": "Obertrum am See",
        "code": "5162"
    },
    {
        "name": "Plainfeld",
        "code": "5325"
    },
    {
        "name": "Sankt Georgen bei Salzburg",
        "code": "5113"
    },
    {
        "name": "Sankt Gilgen",
        "code": "5340"
    },
    {
        "name": "Schleedorf",
        "code": "5205"
    },
    {
        "name": "Seeham",
        "code": "5164"
    },
    {
        "name": "Straßwalchen",
        "code": "5204"
    },
    {
        "name": "Strobl",
        "code": "5350"
    },
    {
        "name": "Thalgau",
        "code": "5303"
    },
    {
        "name": "Wals-Siezenheim",
        "code": "5071"
    },
    {
        "name": "Seekirchen am Wallersee",
        "code": "5201"
    },
    {
        "name": "Altenmarkt im Pongau",
        "code": "5541"
    },
    {
        "name": "Bad Hofgastein",
        "code": "5630"
    },
    {
        "name": "Bad Gastein",
        "code": "5640"
    },
    {
        "name": "Bischofshofen",
        "code": "5500"
    },
    {
        "name": "Dorfgastein",
        "code": "5632"
    },
    {
        "name": "Eben im Pongau",
        "code": "5531"
    },
    {
        "name": "Filzmoos",
        "code": "5532"
    },
    {
        "name": "Flachau",
        "code": "5542"
    },
    {
        "name": "Forstau",
        "code": "5552"
    },
    {
        "name": "Goldegg",
        "code": "5622"
    },
    {
        "name": "Großarl",
        "code": "5611"
    },
    {
        "name": "Hüttau",
        "code": "5511"
    },
    {
        "name": "Hüttschlag",
        "code": "5612"
    },
    {
        "name": "Kleinarl",
        "code": "5603"
    },
    {
        "name": "Mühlbach am Hochkönig",
        "code": "5505"
    },
    {
        "name": "Pfarrwerfen",
        "code": "5452"
    },
    {
        "name": "Radstadt",
        "code": "5550"
    },
    {
        "name": "Sankt Johann im Pongau",
        "code": "5600"
    },
    {
        "name": "Sankt Martin am Tennengebirge",
        "code": "5522"
    },
    {
        "name": "Sankt Veit im Pongau",
        "code": "5621"
    },
    {
        "name": "Schwarzach im Pongau",
        "code": "5620"
    },
    {
        "name": "Untertauern",
        "code": "5561"
    },
    {
        "name": "Wagrain",
        "code": "5602"
    },
    {
        "name": "Werfen",
        "code": "5450"
    },
    {
        "name": "Werfenweng",
        "code": "5453"
    },
    {
        "name": "Göriach",
        "code": "5574"
    },
    {
        "name": "Lessach",
        "code": "5575"
    },
    {
        "name": "Mariapfarr",
        "code": "5571"
    },
    {
        "name": "Mauterndorf",
        "code": "5570"
    },
    {
        "name": "Muhr",
        "code": "5583"
    },
    {
        "name": "Ramingstein",
        "code": "5591"
    },
    {
        "name": "Sankt Andrä im Lungau",
        "code": "5572"
    },
    {
        "name": "Sankt Margarethen im Lungau",
        "code": "5581"
    },
    {
        "name": "Sankt Michael im Lungau",
        "code": "5582"
    },
    {
        "name": "Tamsweg",
        "code": "5580"
    },
    {
        "name": "Thomatal",
        "code": "5592"
    },
    {
        "name": "Tweng",
        "code": "5563"
    },
    {
        "name": "Unternberg",
        "code": "5585"
    },
    {
        "name": "Weißpriach",
        "code": "5573"
    },
    {
        "name": "Zederhaus",
        "code": "5584"
    },
    {
        "name": "Bramberg am Wildkogel",
        "code": "5733"
    },
    {
        "name": "Bruck an der Großglocknerstraße",
        "code": "5671"
    },
    {
        "name": "Dienten am Hochkönig",
        "code": "5652"
    },
    {
        "name": "Fusch an der Großglocknerstraße",
        "code": "5672"
    },
    {
        "name": "Hollersbach im Pinzgau",
        "code": "5731"
    },
    {
        "name": "Kaprun",
        "code": "5710"
    },
    {
        "name": "Krimml",
        "code": "5743"
    },
    {
        "name": "Lend",
        "code": "5651"
    },
    {
        "name": "Leogang",
        "code": "5771"
    },
    {
        "name": "Lofer",
        "code": "5090"
    },
    {
        "name": "Maishofen",
        "code": "5751"
    },
    {
        "name": "Maria Alm am Steinernen Meer",
        "code": "5761"
    },
    {
        "name": "Mittersill",
        "code": "5730"
    },
    {
        "name": "Neukirchen am Großvenediger",
        "code": "5741"
    },
    {
        "name": "Niedernsill",
        "code": "5722"
    },
    {
        "name": "Piesendorf",
        "code": "5721"
    },
    {
        "name": "Rauris",
        "code": "5661"
    },
    {
        "name": "Saalbach-Hinterglemm",
        "code": "5753"
    },
    {
        "name": "Saalfelden am Steinernen Meer",
        "code": "5760"
    },
    {
        "name": "Sankt Martin bei Lofer",
        "code": "5092"
    },
    {
        "name": "Stuhlfelden",
        "code": "5724"
    },
    {
        "name": "Taxenbach",
        "code": "5660"
    },
    {
        "name": "Unken",
        "code": "5091"
    },
    {
        "name": "Uttendorf",
        "code": "5723"
    },
    {
        "name": "Viehhofen",
        "code": "5752"
    },
    {
        "name": "Wald im Pinzgau",
        "code": "5742"
    },
    {
        "name": "Weißbach bei Lofer",
        "code": "5093"
    },
    {
        "name": "Zell am See",
        "code": "5700"
    },
    {
        "name": "Graz",
        "code": "8010"
    },
    {
        "name": "Frauental an der Laßnitz",
        "code": "8523"
    },
    {
        "name": "Lannach",
        "code": "8502"
    },
    {
        "name": "Pölfing-Brunn",
        "code": "8544"
    },
    {
        "name": "Preding",
        "code": "8504"
    },
    {
        "name": "Sankt Josef (Weststeiermark)",
        "code": "8503"
    },
    {
        "name": "Sankt Peter im Sulmtal",
        "code": "8542"
    },
    {
        "name": "Wettmannstätten",
        "code": "8521"
    },
    {
        "name": "Deutschlandsberg",
        "code": "8530"
    },
    {
        "name": "Eibiswald",
        "code": "8552"
    },
    {
        "name": "Groß Sankt Florian",
        "code": "8522"
    },
    {
        "name": "Sankt Martin im Sulmtal",
        "code": "8543"
    },
    {
        "name": "Sankt Stefan ob Stainz",
        "code": "8511"
    },
    {
        "name": "Schwanberg",
        "code": "8541"
    },
    {
        "name": "Stainz",
        "code": "8510"
    },
    {
        "name": "Wies",
        "code": "8551"
    },
    {
        "name": "Feldkirchen bei Graz",
        "code": "8073"
    },
    {
        "name": "Gössendorf",
        "code": "8077"
    },
    {
        "name": "Gratkorn",
        "code": "8101"
    },
    {
        "name": "Hart bei Graz",
        "code": "8075"
    },
    {
        "name": "Haselsdorf-Tobelbad",
        "code": "8144"
    },
    {
        "name": "Hausmannstätten",
        "code": "8071"
    },
    {
        "name": "Kainbach bei Graz",
        "code": "8010"
    },
    {
        "name": "Kalsdorf bei Graz",
        "code": "8401"
    },
    {
        "name": "Kumberg",
        "code": "8062"
    },
    {
        "name": "Laßnitzhöhe",
        "code": "8301"
    },
    {
        "name": "Lieboch",
        "code": "8501"
    },
    {
        "name": "Peggau",
        "code": "8120"
    },
    {
        "name": "Sankt Bartholomä",
        "code": "8113"
    },
    {
        "name": "Sankt Oswald bei Plankenwarth",
        "code": "8113"
    },
    {
        "name": "Sankt Radegund bei Graz",
        "code": "8061"
    },
    {
        "name": "Semriach",
        "code": "8102"
    },
    {
        "name": "Stattegg",
        "code": "8046"
    },
    {
        "name": "Stiwoll",
        "code": "8113"
    },
    {
        "name": "Thal",
        "code": "8051"
    },
    {
        "name": "Übelbach",
        "code": "8124"
    },
    {
        "name": "Vasoldsberg",
        "code": "8076"
    },
    {
        "name": "Weinitzen",
        "code": "8044"
    },
    {
        "name": "Werndorf",
        "code": "8402"
    },
    {
        "name": "Wundschuh",
        "code": "8142"
    },
    {
        "name": "Deutschfeistritz",
        "code": "8121"
    },
    {
        "name": "Dobl-Zwaring",
        "code": "8143"
    },
    {
        "name": "Eggersdorf bei Graz",
        "code": "8063"
    },
    {
        "name": "Fernitz-Mellach",
        "code": "8072"
    },
    {
        "name": "Frohnleiten",
        "code": "8130"
    },
    {
        "name": "Gratwein-Straßengel",
        "code": "8111"
    },
    {
        "name": "Nestelbach bei Graz",
        "code": "8302"
    },
    {
        "name": "Raaba-Grambach",
        "code": "8074"
    },
    {
        "name": "Sankt Marein bei Graz",
        "code": "8323"
    },
    {
        "name": "Seiersberg-Pirka",
        "code": "8054"
    },
    {
        "name": "Premstätten",
        "code": "8141"
    },
    {
        "name": "Allerheiligen bei Wildon",
        "code": "8412"
    },
    {
        "name": "Arnfels",
        "code": "8454"
    },
    {
        "name": "Empersdorf",
        "code": "8081"
    },
    {
        "name": "Gabersdorf",
        "code": "8424"
    },
    {
        "name": "Gralla",
        "code": "8431"
    },
    {
        "name": "Großklein",
        "code": "8452"
    },
    {
        "name": "Heimschuh",
        "code": "8451"
    },
    {
        "name": "Hengsberg",
        "code": "8411"
    },
    {
        "name": "Kitzeck im Sausal",
        "code": "8442"
    },
    {
        "name": "Lang",
        "code": "8403"
    },
    {
        "name": "Lebring-Sankt Margarethen",
        "code": "8403"
    },
    {
        "name": "Oberhaag",
        "code": "8455"
    },
    {
        "name": "Ragnitz",
        "code": "8413"
    },
    {
        "name": "Sankt Andrä-Höch",
        "code": "8444"
    },
    {
        "name": "Sankt Johann im Saggautal",
        "code": "8453"
    },
    {
        "name": "Sankt Nikolai im Sausal",
        "code": "8505"
    },
    {
        "name": "Tillmitsch",
        "code": "8430"
    },
    {
        "name": "Wagna",
        "code": "8435"
    },
    {
        "name": "Ehrenhausen an der Weinstraße",
        "code": "8461"
    },
    {
        "name": "Gamlitz",
        "code": "8462"
    },
    {
        "name": "Gleinstätten",
        "code": "8443"
    },
    {
        "name": "Heiligenkreuz am Waasen",
        "code": "8081"
    },
    {
        "name": "Leibnitz",
        "code": "8430"
    },
    {
        "name": "Leutschach an der Weinstraße",
        "code": "8463"
    },
    {
        "name": "Sankt Georgen an der Stiefing",
        "code": "8413"
    },
    {
        "name": "Sankt Veit in der Südsteiermark",
        "code": "8423"
    },
    {
        "name": "Schwarzautal",
        "code": "8421"
    },
    {
        "name": "Straß in Steiermark",
        "code": "8472"
    },
    {
        "name": "Wildon",
        "code": "8410"
    },
    {
        "name": "Eisenerz",
        "code": "8790"
    },
    {
        "name": "Kalwang",
        "code": "8775"
    },
    {
        "name": "Kammern im Liesingtal",
        "code": "8773"
    },
    {
        "name": "Kraubath an der Mur",
        "code": "8714"
    },
    {
        "name": "Leoben",
        "code": "8700"
    },
    {
        "name": "Mautern in Steiermark",
        "code": "8774"
    },
    {
        "name": "Niklasdorf",
        "code": "8712"
    },
    {
        "name": "Proleb",
        "code": "8712"
    },
    {
        "name": "Radmer",
        "code": "8795"
    },
    {
        "name": "Sankt Michael in Obersteiermark",
        "code": "8770"
    },
    {
        "name": "Sankt Peter-Freienstein",
        "code": "8792"
    },
    {
        "name": "Sankt Stefan ob Leoben",
        "code": "8713"
    },
    {
        "name": "Traboch",
        "code": "8772"
    },
    {
        "name": "Vordernberg",
        "code": "8794"
    },
    {
        "name": "Wald am Schoberpaß",
        "code": "8781"
    },
    {
        "name": "Trofaiach",
        "code": "8793"
    },
    {
        "name": "Aigen im Ennstal",
        "code": "8943"
    },
    {
        "name": "Altaussee",
        "code": "8992"
    },
    {
        "name": "Altenmarkt bei Sankt Gallen",
        "code": "8934"
    },
    {
        "name": "Ardning",
        "code": "8904"
    },
    {
        "name": "Bad Aussee",
        "code": "8990"
    },
    {
        "name": "Gröbming",
        "code": "8962"
    },
    {
        "name": "Grundlsee",
        "code": "8993"
    },
    {
        "name": "Haus",
        "code": "8967"
    },
    {
        "name": "Lassing",
        "code": "8903"
    },
    {
        "name": "Ramsau am Dachstein",
        "code": "8972"
    },
    {
        "name": "Selzthal",
        "code": "8900"
    },
    {
        "name": "Trieben",
        "code": "8784"
    },
    {
        "name": "Wildalpen",
        "code": "8924"
    },
    {
        "name": "Wörschach",
        "code": "8942"
    },
    {
        "name": "Admont",
        "code": "8911"
    },
    {
        "name": "Aich",
        "code": "8966"
    },
    {
        "name": "Bad Mitterndorf",
        "code": "8983"
    },
    {
        "name": "Gaishorn am See",
        "code": "8783"
    },
    {
        "name": "Irdning-Donnersbachtal",
        "code": "8952"
    },
    {
        "name": "Gams bei Hieflau",
        "code": "8931"
    },
    {
        "name": "Liezen",
        "code": "8940"
    },
    {
        "name": "Michaelerberg-Pruggern",
        "code": "8965"
    },
    {
        "name": "Mitterberg-Sankt Martin",
        "code": "8962"
    },
    {
        "name": "Öblarn",
        "code": "8960"
    },
    {
        "name": "Rottenmann",
        "code": "8786"
    },
    {
        "name": "Sankt Gallen",
        "code": "8933"
    },
    {
        "name": "Schladming",
        "code": "8970"
    },
    {
        "name": "Sölk",
        "code": "8961"
    },
    {
        "name": "Stainach-Pürgg",
        "code": "8950"
    },
    {
        "name": "Mühlen",
        "code": "8822"
    },
    {
        "name": "Niederwölz",
        "code": "8831"
    },
    {
        "name": "St. Peter am Kammersberg",
        "code": "8843"
    },
    {
        "name": "Schöder",
        "code": "8844"
    },
    {
        "name": "Krakau",
        "code": "8854"
    },
    {
        "name": "Murau",
        "code": "8850"
    },
    {
        "name": "Neumarkt in der Steiermark",
        "code": "8820"
    },
    {
        "name": "Oberwölz",
        "code": "8832"
    },
    {
        "name": "Ranten",
        "code": "8853"
    },
    {
        "name": "Sankt Georgen am Kreischberg",
        "code": "8861"
    },
    {
        "name": "Sankt Lambrecht",
        "code": "8813"
    },
    {
        "name": "Scheifling",
        "code": "8811"
    },
    {
        "name": "Stadl-Predlitz",
        "code": "8862"
    },
    {
        "name": "Teufenbach-Katsch",
        "code": "8833"
    },
    {
        "name": "Krottendorf-Gaisfeld",
        "code": "8564"
    },
    {
        "name": "Ligist",
        "code": "8563"
    },
    {
        "name": "Mooskirchen",
        "code": "8562"
    },
    {
        "name": "Rosental an der Kainach",
        "code": "8582"
    },
    {
        "name": "Sankt Martin am Wöllmißberg",
        "code": "8580"
    },
    {
        "name": "Stallhofen",
        "code": "8152"
    },
    {
        "name": "Voitsberg",
        "code": "8570"
    },
    {
        "name": "Bärnbach",
        "code": "8572"
    },
    {
        "name": "Edelschrott",
        "code": "8583"
    },
    {
        "name": "Geistthal-Södingberg",
        "code": "8152"
    },
    {
        "name": "Hirschegg-Pack",
        "code": "8584"
    },
    {
        "name": "Kainach bei Voitsberg",
        "code": "8573"
    },
    {
        "name": "Köflach",
        "code": "8580"
    },
    {
        "name": "Maria Lankowitz",
        "code": "8591"
    },
    {
        "name": "Söding-Sankt Johann",
        "code": "8561"
    },
    {
        "name": "Albersdorf-Prebuch",
        "code": "8200"
    },
    {
        "name": "Fischbach",
        "code": "8654"
    },
    {
        "name": "Floing",
        "code": "8183"
    },
    {
        "name": "Gasen",
        "code": "8616"
    },
    {
        "name": "Markt Hartmannsdorf",
        "code": "8311"
    },
    {
        "name": "Hofstätten an der Raab",
        "code": "8200"
    },
    {
        "name": "Ludersdorf-Wilfersdorf",
        "code": "8200"
    },
    {
        "name": "Miesenbach bei Birkfeld",
        "code": "8190"
    },
    {
        "name": "Mitterdorf an der Raab",
        "code": "8181"
    },
    {
        "name": "Mortantsch",
        "code": "8160"
    },
    {
        "name": "Naas",
        "code": "8160"
    },
    {
        "name": "Puch bei Weiz",
        "code": "8182"
    },
    {
        "name": "Ratten",
        "code": "8673"
    },
    {
        "name": "Rettenegg",
        "code": "8674"
    },
    {
        "name": "St. Kathrein am Hauenstein",
        "code": "8672"
    },
    {
        "name": "Sankt Kathrein am Offenegg",
        "code": "8171"
    },
    {
        "name": "St. Margarethen an der Raab",
        "code": "8321"
    },
    {
        "name": "Sinabelkirchen",
        "code": "8261"
    },
    {
        "name": "Strallegg",
        "code": "8192"
    },
    {
        "name": "Thannhausen",
        "code": "8160"
    },
    {
        "name": "Anger",
        "code": "8184"
    },
    {
        "name": "Birkfeld",
        "code": "8190"
    },
    {
        "name": "Fladnitz an der Teichalm",
        "code": "8163"
    },
    {
        "name": "Gersdorf an der Feistritz",
        "code": "8212"
    },
    {
        "name": "Gleisdorf",
        "code": "8200"
    },
    {
        "name": "Gutenberg-Stenzengreith",
        "code": "8160"
    },
    {
        "name": "Ilztal",
        "code": "8211"
    },
    {
        "name": "Passail",
        "code": "8162"
    },
    {
        "name": "Pischelsdorf am Kulm",
        "code": "8212"
    },
    {
        "name": "Sankt Ruprecht an der Raab",
        "code": "8181"
    },
    {
        "name": "Weiz",
        "code": "8160"
    },
    {
        "name": "Fohnsdorf",
        "code": "8753"
    },
    {
        "name": "Gaal",
        "code": "8731"
    },
    {
        "name": "Hohentauern",
        "code": "8785"
    },
    {
        "name": "Kobenz",
        "code": "8723"
    },
    {
        "name": "Pusterwald",
        "code": "8764"
    },
    {
        "name": "Sankt Georgen ob Judenburg",
        "code": "8756"
    },
    {
        "name": "Sankt Peter ob Judenburg",
        "code": "8755"
    },
    {
        "name": "Seckau",
        "code": "8732"
    },
    {
        "name": "Unzmarkt-Frauenburg",
        "code": "8800"
    },
    {
        "name": "Zeltweg",
        "code": "8740"
    },
    {
        "name": "Lobmingtal",
        "code": "8734"
    },
    {
        "name": "Judenburg",
        "code": "8750"
    },
    {
        "name": "Knittelfeld",
        "code": "8720"
    },
    {
        "name": "Obdach",
        "code": "8742"
    },
    {
        "name": "Pöls-Oberkurzheim",
        "code": "8761"
    },
    {
        "name": "Pölstal",
        "code": "8763"
    },
    {
        "name": "Sankt Marein-Feistritz",
        "code": "8733"
    },
    {
        "name": "Sankt Margarethen bei Knittelfeld",
        "code": "8720"
    },
    {
        "name": "Spielberg",
        "code": "8724"
    },
    {
        "name": "Weißkirchen in Steiermark",
        "code": "8741"
    },
    {
        "name": "Breitenau am Hochlantsch",
        "code": "8614"
    },
    {
        "name": "Krieglach",
        "code": "8670"
    },
    {
        "name": "Langenwang",
        "code": "8665"
    },
    {
        "name": "Pernegg an der Mur",
        "code": "8132"
    },
    {
        "name": "Sankt Lorenzen im Mürztal",
        "code": "8642"
    },
    {
        "name": "Spital am Semmering",
        "code": "8684"
    },
    {
        "name": "Stanz im Mürztal",
        "code": "8653"
    },
    {
        "name": "Turnau",
        "code": "8625"
    },
    {
        "name": "Aflenz",
        "code": "8623"
    },
    {
        "name": "Bruck an der Mur",
        "code": "8600"
    },
    {
        "name": "Kapfenberg",
        "code": "8605"
    },
    {
        "name": "Kindberg",
        "code": "8650"
    },
    {
        "name": "Mariazell",
        "code": "8630"
    },
    {
        "name": "Mürzzuschlag",
        "code": "8680"
    },
    {
        "name": "Neuberg an der Mürz",
        "code": "8692"
    },
    {
        "name": "Sankt Barbara im Mürztal",
        "code": "8662"
    },
    {
        "name": "Sankt Marein im Mürztal",
        "code": "8641"
    },
    {
        "name": "Thörl",
        "code": "8621"
    },
    {
        "name": "Tragöß-Sankt Katharein",
        "code": "8611"
    },
    {
        "name": "Bad Blumau",
        "code": "8283"
    },
    {
        "name": "Buch-St. Magdalena",
        "code": "8274"
    },
    {
        "name": "Burgau",
        "code": "8291"
    },
    {
        "name": "Ebersdorf",
        "code": "8273"
    },
    {
        "name": "Friedberg",
        "code": "8240"
    },
    {
        "name": "Greinbach",
        "code": "8230"
    },
    {
        "name": "Großsteinbach",
        "code": "8265"
    },
    {
        "name": "Hartberg",
        "code": "8230"
    },
    {
        "name": "Hartberg Umgebung",
        "code": "8230"
    },
    {
        "name": "Lafnitz",
        "code": "8233"
    },
    {
        "name": "Ottendorf an der Rittschein",
        "code": "8312"
    },
    {
        "name": "Pinggau",
        "code": "8243"
    },
    {
        "name": "Pöllauberg",
        "code": "8225"
    },
    {
        "name": "Sankt Jakob im Walde",
        "code": "8255"
    },
    {
        "name": "Sankt Johann in der Haide",
        "code": "8295"
    },
    {
        "name": "Sankt Lorenzen am Wechsel",
        "code": "8242"
    },
    {
        "name": "Schäffern",
        "code": "8244"
    },
    {
        "name": "Söchau",
        "code": "8362"
    },
    {
        "name": "Stubenberg",
        "code": "8223"
    },
    {
        "name": "Wenigzell",
        "code": "8254"
    },
    {
        "name": "Bad Waltersdorf",
        "code": "8271"
    },
    {
        "name": "Dechantskirchen",
        "code": "8241"
    },
    {
        "name": "Feistritztal",
        "code": "8221"
    },
    {
        "name": "Fürstenfeld",
        "code": "8280"
    },
    {
        "name": "Grafendorf bei Hartberg",
        "code": "8232"
    },
    {
        "name": "Großwilfersdorf",
        "code": "8263"
    },
    {
        "name": "Hartl",
        "code": "8224"
    },
    {
        "name": "Ilz",
        "code": "8262"
    },
    {
        "name": "Kaindorf",
        "code": "8224"
    },
    {
        "name": "Loipersdorf bei Fürstenfeld",
        "code": "8282"
    },
    {
        "name": "Neudau",
        "code": "8292"
    },
    {
        "name": "Pöllau",
        "code": "8225"
    },
    {
        "name": "Rohr bei Hartberg",
        "code": "8294"
    },
    {
        "name": "Rohrbach an der Lafnitz",
        "code": "8234"
    },
    {
        "name": "Vorau",
        "code": "8250"
    },
    {
        "name": "Waldbach-Mönichwald",
        "code": "8252"
    },
    {
        "name": "Edelsbach bei Feldbach",
        "code": "8332"
    },
    {
        "name": "Eichkögl",
        "code": "8322"
    },
    {
        "name": "Halbenrain",
        "code": "8492"
    },
    {
        "name": "Jagerberg",
        "code": "8091"
    },
    {
        "name": "Kapfenstein",
        "code": "8353"
    },
    {
        "name": "Klöch",
        "code": "8493"
    },
    {
        "name": "Mettersdorf am Saßbach",
        "code": "8092"
    },
    {
        "name": "Murfeld",
        "code": "8473"
    },
    {
        "name": "Tieschen",
        "code": "8355"
    },
    {
        "name": "Unterlamm",
        "code": "8352"
    },
    {
        "name": "Bad Gleichenberg",
        "code": "8344"
    },
    {
        "name": "Bad Radkersburg",
        "code": "8490"
    },
    {
        "name": "Deutsch Goritz",
        "code": "8483"
    },
    {
        "name": "Fehring",
        "code": "8350"
    },
    {
        "name": "Feldbach",
        "code": "8330"
    },
    {
        "name": "Gnas",
        "code": "8342"
    },
    {
        "name": "Kirchbach-Zerlach",
        "code": "8082"
    },
    {
        "name": "Kirchberg an der Raab",
        "code": "8324"
    },
    {
        "name": "Mureck",
        "code": "8480"
    },
    {
        "name": "Paldau",
        "code": "8341"
    },
    {
        "name": "Pirching am Traubenberg",
        "code": "8081"
    },
    {
        "name": "Riegersburg",
        "code": "8333"
    },
    {
        "name": "Sankt Anna am Aigen",
        "code": "8354"
    },
    {
        "name": "Sankt Peter am Ottersbach",
        "code": "8093"
    },
    {
        "name": "Sankt Stefan im Rosental",
        "code": "8083"
    },
    {
        "name": "Straden",
        "code": "8345"
    },
    {
        "name": "Innsbruck",
        "code": "6020"
    },
    {
        "name": "Arzl im Pitztal",
        "code": "6471"
    },
    {
        "name": "Haiming",
        "code": "6425"
    },
    {
        "name": "Imst",
        "code": "6460"
    },
    {
        "name": "Imsterberg",
        "code": "6492"
    },
    {
        "name": "Jerzens",
        "code": "6474"
    },
    {
        "name": "Karres",
        "code": "6462"
    },
    {
        "name": "Karrösten",
        "code": "6463"
    },
    {
        "name": "Längenfeld",
        "code": "6444"
    },
    {
        "name": "Mieming",
        "code": "6414"
    },
    {
        "name": "Mils bei Imst",
        "code": "6493"
    },
    {
        "name": "Mötz",
        "code": "6423"
    },
    {
        "name": "Nassereith",
        "code": "6465"
    },
    {
        "name": "Obsteig",
        "code": "6416"
    },
    {
        "name": "Oetz",
        "code": "6433"
    },
    {
        "name": "Rietz",
        "code": "6421"
    },
    {
        "name": "Roppen",
        "code": "6426"
    },
    {
        "name": "St. Leonhard im Pitztal",
        "code": "6481"
    },
    {
        "name": "Sautens",
        "code": "6432"
    },
    {
        "name": "Silz",
        "code": "6424"
    },
    {
        "name": "Sölden",
        "code": "6450"
    },
    {
        "name": "Stams",
        "code": "6422"
    },
    {
        "name": "Tarrenz",
        "code": "6464"
    },
    {
        "name": "Umhausen",
        "code": "6441"
    },
    {
        "name": "Wenns",
        "code": "6473"
    },
    {
        "name": "Absam",
        "code": "6067"
    },
    {
        "name": "Aldrans",
        "code": "6071"
    },
    {
        "name": "Ampass",
        "code": "6070"
    },
    {
        "name": "Axams",
        "code": "6094"
    },
    {
        "name": "Baumkirchen",
        "code": "6121"
    },
    {
        "name": "Birgitz",
        "code": "6092"
    },
    {
        "name": "Ellbögen",
        "code": "6083"
    },
    {
        "name": "Flaurling",
        "code": "6403"
    },
    {
        "name": "Fritzens",
        "code": "6122"
    },
    {
        "name": "Fulpmes",
        "code": "6166"
    },
    {
        "name": "Gnadenwald",
        "code": "6069"
    },
    {
        "name": "Götzens",
        "code": "6091"
    },
    {
        "name": "Gries am Brenner",
        "code": "6156"
    },
    {
        "name": "Gries im Sellrain",
        "code": "6182"
    },
    {
        "name": "Grinzens",
        "code": "6095"
    },
    {
        "name": "Gschnitz",
        "code": "6150"
    },
    {
        "name": "Hatting",
        "code": "6402"
    },
    {
        "name": "Inzing",
        "code": "6401"
    },
    {
        "name": "Kematen in Tirol",
        "code": "6175"
    },
    {
        "name": "Kolsass",
        "code": "6114"
    },
    {
        "name": "Kolsassberg",
        "code": "6115"
    },
    {
        "name": "Lans",
        "code": "6072"
    },
    {
        "name": "Leutasch",
        "code": "6105"
    },
    {
        "name": "Matrei am Brenner",
        "code": "6143"
    },
    {
        "name": "Mieders",
        "code": "6142"
    },
    {
        "name": "Mils",
        "code": "6068"
    },
    {
        "name": "Mühlbachl",
        "code": "6143"
    },
    {
        "name": "Mutters",
        "code": "6162"
    },
    {
        "name": "Natters",
        "code": "6161"
    },
    {
        "name": "Navis",
        "code": "6145"
    },
    {
        "name": "Neustift im Stubaital",
        "code": "6167"
    },
    {
        "name": "Oberhofen im Inntal",
        "code": "6406"
    },
    {
        "name": "Obernberg am Brenner",
        "code": "6157"
    },
    {
        "name": "Oberperfuss",
        "code": "6173"
    },
    {
        "name": "Patsch",
        "code": "6082"
    },
    {
        "name": "Pettnau",
        "code": "6408"
    },
    {
        "name": "Pfaffenhofen",
        "code": "6405"
    },
    {
        "name": "Pfons",
        "code": "6143"
    },
    {
        "name": "Polling in Tirol",
        "code": "6404"
    },
    {
        "name": "Ranggen",
        "code": "6179"
    },
    {
        "name": "Reith bei Seefeld",
        "code": "6103"
    },
    {
        "name": "Rinn",
        "code": "6074"
    },
    {
        "name": "Rum",
        "code": "6063"
    },
    {
        "name": "St. Sigmund im Sellrain",
        "code": "6184"
    },
    {
        "name": "Scharnitz",
        "code": "6108"
    },
    {
        "name": "Schmirn",
        "code": "6154"
    },
    {
        "name": "Schönberg im Stubaital",
        "code": "6141"
    },
    {
        "name": "Seefeld in Tirol",
        "code": "6100"
    },
    {
        "name": "Sellrain",
        "code": "6181"
    },
    {
        "name": "Sistrans",
        "code": "6073"
    },
    {
        "name": "Hall in Tirol",
        "code": "6060"
    },
    {
        "name": "Steinach am Brenner",
        "code": "6150"
    },
    {
        "name": "Telfes im Stubai",
        "code": "6165"
    },
    {
        "name": "Telfs",
        "code": "6410"
    },
    {
        "name": "Trins",
        "code": "6152"
    },
    {
        "name": "Tulfes",
        "code": "6075"
    },
    {
        "name": "Unterperfuss",
        "code": "6178"
    },
    {
        "name": "Vals",
        "code": "6154"
    },
    {
        "name": "Völs",
        "code": "6176"
    },
    {
        "name": "Volders",
        "code": "6111"
    },
    {
        "name": "Wattenberg",
        "code": "6113"
    },
    {
        "name": "Wattens",
        "code": "6112"
    },
    {
        "name": "Wildermieming",
        "code": "6413"
    },
    {
        "name": "Zirl",
        "code": "6170"
    },
    {
        "name": "Aurach bei Kitzbühel",
        "code": "6371"
    },
    {
        "name": "Brixen im Thale",
        "code": "6364"
    },
    {
        "name": "Fieberbrunn",
        "code": "6391"
    },
    {
        "name": "Going am Wilden Kaiser",
        "code": "6353"
    },
    {
        "name": "Hochfilzen",
        "code": "6395"
    },
    {
        "name": "Hopfgarten im Brixental",
        "code": "6361"
    },
    {
        "name": "Itter",
        "code": "6305"
    },
    {
        "name": "Jochberg",
        "code": "6373"
    },
    {
        "name": "Kirchberg in Tirol",
        "code": "6365"
    },
    {
        "name": "Kirchdorf in Tirol",
        "code": "6382"
    },
    {
        "name": "Kitzbühel",
        "code": "6370"
    },
    {
        "name": "Kössen",
        "code": "6345"
    },
    {
        "name": "Oberndorf in Tirol",
        "code": "6372"
    },
    {
        "name": "Reith bei Kitzbühel",
        "code": "6370"
    },
    {
        "name": "St. Jakob in Haus",
        "code": "6392"
    },
    {
        "name": "St. Johann in Tirol",
        "code": "6380"
    },
    {
        "name": "St. Ulrich am Pillersee",
        "code": "6393"
    },
    {
        "name": "Schwendt",
        "code": "6385"
    },
    {
        "name": "Waidring",
        "code": "6384"
    },
    {
        "name": "Westendorf",
        "code": "6363"
    },
    {
        "name": "Alpbach",
        "code": "6236"
    },
    {
        "name": "Angath",
        "code": "6321"
    },
    {
        "name": "Bad Häring",
        "code": "6323"
    },
    {
        "name": "Brandenberg",
        "code": "6234"
    },
    {
        "name": "Breitenbach am Inn",
        "code": "6252"
    },
    {
        "name": "Brixlegg",
        "code": "6230"
    },
    {
        "name": "Ebbs",
        "code": "6341"
    },
    {
        "name": "Ellmau",
        "code": "6352"
    },
    {
        "name": "Erl",
        "code": "6343"
    },
    {
        "name": "Kirchbichl",
        "code": "6322"
    },
    {
        "name": "Kramsach",
        "code": "6233"
    },
    {
        "name": "Kufstein",
        "code": "6330"
    },
    {
        "name": "Kundl",
        "code": "6250"
    },
    {
        "name": "Langkampfen",
        "code": "6336"
    },
    {
        "name": "Mariastein",
        "code": "6324"
    },
    {
        "name": "Münster",
        "code": "6232"
    },
    {
        "name": "Niederndorf",
        "code": "6342"
    },
    {
        "name": "Niederndorferberg",
        "code": "6346"
    },
    {
        "name": "Radfeld",
        "code": "6241"
    },
    {
        "name": "Rattenberg",
        "code": "6240"
    },
    {
        "name": "Reith im Alpbachtal",
        "code": "6235"
    },
    {
        "name": "Rettenschöss",
        "code": "6347"
    },
    {
        "name": "Scheffau am Wilden Kaiser",
        "code": "6351"
    },
    {
        "name": "Schwoich",
        "code": "6334"
    },
    {
        "name": "Söll",
        "code": "6306"
    },
    {
        "name": "Thiersee",
        "code": "6335"
    },
    {
        "name": "Angerberg",
        "code": "6320"
    },
    {
        "name": "Walchsee",
        "code": "6344"
    },
    {
        "name": "Wildschönau",
        "code": "6311"
    },
    {
        "name": "Wörgl",
        "code": "6300"
    },
    {
        "name": "Faggen",
        "code": "6525"
    },
    {
        "name": "Fendels",
        "code": "6528"
    },
    {
        "name": "Fiss",
        "code": "6533"
    },
    {
        "name": "Fließ",
        "code": "6521"
    },
    {
        "name": "Flirsch",
        "code": "6572"
    },
    {
        "name": "Galtür",
        "code": "6563"
    },
    {
        "name": "Grins",
        "code": "6591"
    },
    {
        "name": "Ischgl",
        "code": "6561"
    },
    {
        "name": "Kappl",
        "code": "6555"
    },
    {
        "name": "Kaunerberg",
        "code": "6527"
    },
    {
        "name": "Kaunertal",
        "code": "6524"
    },
    {
        "name": "Kauns",
        "code": "6526"
    },
    {
        "name": "Ladis",
        "code": "6532"
    },
    {
        "name": "Landeck",
        "code": "6500"
    },
    {
        "name": "Pettneu am Arlberg",
        "code": "6574"
    },
    {
        "name": "Pfunds",
        "code": "6542"
    },
    {
        "name": "Pians",
        "code": "6551"
    },
    {
        "name": "Prutz",
        "code": "6522"
    },
    {
        "name": "Ried im Oberinntal",
        "code": "6531"
    },
    {
        "name": "St. Anton am Arlberg",
        "code": "6580"
    },
    {
        "name": "Schönwies",
        "code": "6491"
    },
    {
        "name": "See",
        "code": "6553"
    },
    {
        "name": "Serfaus",
        "code": "6534"
    },
    {
        "name": "Spiss",
        "code": "6544"
    },
    {
        "name": "Stanz bei Landeck",
        "code": "6500"
    },
    {
        "name": "Strengen",
        "code": "6571"
    },
    {
        "name": "Tobadill",
        "code": "6552"
    },
    {
        "name": "Tösens",
        "code": "6541"
    },
    {
        "name": "Zams",
        "code": "6511"
    },
    {
        "name": "Abfaltersbach",
        "code": "9913"
    },
    {
        "name": "Ainet",
        "code": "9951"
    },
    {
        "name": "Amlach",
        "code": "9908"
    },
    {
        "name": "Anras",
        "code": "9912"
    },
    {
        "name": "Assling",
        "code": "9911"
    },
    {
        "name": "Außervillgraten",
        "code": "9931"
    },
    {
        "name": "Dölsach",
        "code": "9991"
    },
    {
        "name": "Gaimberg",
        "code": "9905"
    },
    {
        "name": "Hopfgarten in Defereggen",
        "code": "9961"
    },
    {
        "name": "Innervillgraten",
        "code": "9932"
    },
    {
        "name": "Iselsberg-Stronach",
        "code": "9992"
    },
    {
        "name": "Kals am Großglockner",
        "code": "9981"
    },
    {
        "name": "Kartitsch",
        "code": "9941"
    },
    {
        "name": "Lavant",
        "code": "9906"
    },
    {
        "name": "Leisach",
        "code": "9909"
    },
    {
        "name": "Lienz",
        "code": "9900"
    },
    {
        "name": "Matrei in Osttirol",
        "code": "9971"
    },
    {
        "name": "Nikolsdorf",
        "code": "9782"
    },
    {
        "name": "Nußdorf-Debant",
        "code": "9990"
    },
    {
        "name": "Oberlienz",
        "code": "9903"
    },
    {
        "name": "Obertilliach",
        "code": "9942"
    },
    {
        "name": "Prägraten am Großvenediger",
        "code": "9974"
    },
    {
        "name": "St. Jakob in Defereggen",
        "code": "9963"
    },
    {
        "name": "St. Johann im Walde",
        "code": "9952"
    },
    {
        "name": "St. Veit in Defereggen",
        "code": "9962"
    },
    {
        "name": "Schlaiten",
        "code": "9954"
    },
    {
        "name": "Sillian",
        "code": "9920"
    },
    {
        "name": "Strassen",
        "code": "9918"
    },
    {
        "name": "Thurn",
        "code": "9904"
    },
    {
        "name": "Tristach",
        "code": "9907"
    },
    {
        "name": "Untertilliach",
        "code": "9943"
    },
    {
        "name": "Virgen",
        "code": "9972"
    },
    {
        "name": "Heinfels",
        "code": "9919"
    },
    {
        "name": "Bach",
        "code": "6653"
    },
    {
        "name": "Berwang",
        "code": "6622"
    },
    {
        "name": "Biberwier",
        "code": "6633"
    },
    {
        "name": "Bichlbach",
        "code": "6621"
    },
    {
        "name": "Breitenwang",
        "code": "6600"
    },
    {
        "name": "Ehenbichl",
        "code": "6600"
    },
    {
        "name": "Ehrwald",
        "code": "6632"
    },
    {
        "name": "Elbigenalp",
        "code": "6652"
    },
    {
        "name": "Elmen",
        "code": "6644"
    },
    {
        "name": "Forchach",
        "code": "6670"
    },
    {
        "name": "Grän",
        "code": "6673"
    },
    {
        "name": "Gramais",
        "code": "6650"
    },
    {
        "name": "Häselgehr",
        "code": "6651"
    },
    {
        "name": "Heiterwang",
        "code": "6611"
    },
    {
        "name": "Hinterhornbach",
        "code": "6646"
    },
    {
        "name": "Höfen",
        "code": "6604"
    },
    {
        "name": "Holzgau",
        "code": "6654"
    },
    {
        "name": "Jungholz",
        "code": "6691"
    },
    {
        "name": "Kaisers",
        "code": "6655"
    },
    {
        "name": "Lechaschau",
        "code": "6600"
    },
    {
        "name": "Lermoos",
        "code": "6631"
    },
    {
        "name": "Musau",
        "code": "6600"
    },
    {
        "name": "Namlos",
        "code": "6623"
    },
    {
        "name": "Nesselwängle",
        "code": "6672"
    },
    {
        "name": "Pfafflar",
        "code": "6647"
    },
    {
        "name": "Pflach",
        "code": "6600"
    },
    {
        "name": "Pinswang",
        "code": "6600"
    },
    {
        "name": "Reutte",
        "code": "6600"
    },
    {
        "name": "Schattwald",
        "code": "6677"
    },
    {
        "name": "Stanzach",
        "code": "6642"
    },
    {
        "name": "Steeg",
        "code": "6655"
    },
    {
        "name": "Tannheim",
        "code": "6675"
    },
    {
        "name": "Vils",
        "code": "6682"
    },
    {
        "name": "Vorderhornbach",
        "code": "6645"
    },
    {
        "name": "Weißenbach am Lech",
        "code": "6671"
    },
    {
        "name": "Zöblen",
        "code": "6677"
    },
    {
        "name": "Achenkirch",
        "code": "6215"
    },
    {
        "name": "Aschau im Zillertal",
        "code": "6274"
    },
    {
        "name": "Brandberg",
        "code": "6290"
    },
    {
        "name": "Bruck am Ziller",
        "code": "6260"
    },
    {
        "name": "Buch in Tirol",
        "code": "6220"
    },
    {
        "name": "Eben am Achensee",
        "code": "6212"
    },
    {
        "name": "Finkenberg",
        "code": "6292"
    },
    {
        "name": "Fügen",
        "code": "6263"
    },
    {
        "name": "Fügenberg",
        "code": "6264"
    },
    {
        "name": "Gallzein",
        "code": "6222"
    },
    {
        "name": "Gerlos",
        "code": "6281"
    },
    {
        "name": "Gerlosberg",
        "code": "6280"
    },
    {
        "name": "Hainzenberg",
        "code": "6278"
    },
    {
        "name": "Hart im Zillertal",
        "code": "6265"
    },
    {
        "name": "Hippach",
        "code": "6283"
    },
    {
        "name": "Jenbach",
        "code": "6200"
    },
    {
        "name": "Kaltenbach",
        "code": "6272"
    },
    {
        "name": "Mayrhofen",
        "code": "6290"
    },
    {
        "name": "Pill",
        "code": "6136"
    },
    {
        "name": "Ramsau im Zillertal",
        "code": "6284"
    },
    {
        "name": "Ried im Zillertal",
        "code": "6273"
    },
    {
        "name": "Rohrberg",
        "code": "6280"
    },
    {
        "name": "Schlitters",
        "code": "6262"
    },
    {
        "name": "Schwaz",
        "code": "6130"
    },
    {
        "name": "Schwendau",
        "code": "6283"
    },
    {
        "name": "Stans",
        "code": "6135"
    },
    {
        "name": "Steinberg am Rofan",
        "code": "6215"
    },
    {
        "name": "Strass im Zillertal",
        "code": "6261"
    },
    {
        "name": "Stumm",
        "code": "6275"
    },
    {
        "name": "Stummerberg",
        "code": "6275"
    },
    {
        "name": "Terfens",
        "code": "6123"
    },
    {
        "name": "Tux",
        "code": "6293"
    },
    {
        "name": "Uderns",
        "code": "6271"
    },
    {
        "name": "Vomp",
        "code": "6134"
    },
    {
        "name": "Weer",
        "code": "6116"
    },
    {
        "name": "Weerberg",
        "code": "6133"
    },
    {
        "name": "Wiesing",
        "code": "6210"
    },
    {
        "name": "Zell am Ziller",
        "code": "6280"
    },
    {
        "name": "Zellberg",
        "code": "6277"
    },
    {
        "name": "Bartholomäberg",
        "code": "6781"
    },
    {
        "name": "Blons",
        "code": "6723"
    },
    {
        "name": "Bludenz",
        "code": "6700"
    },
    {
        "name": "Bludesch",
        "code": "6719"
    },
    {
        "name": "Brand",
        "code": "6708"
    },
    {
        "name": "Bürs",
        "code": "6706"
    },
    {
        "name": "Bürserberg",
        "code": "6707"
    },
    {
        "name": "Dalaas",
        "code": "6752"
    },
    {
        "name": "Fontanella",
        "code": "6733"
    },
    {
        "name": "Gaschurn",
        "code": "6793"
    },
    {
        "name": "Innerbraz",
        "code": "6751"
    },
    {
        "name": "Klösterle",
        "code": "6754"
    },
    {
        "name": "Lech",
        "code": "6764"
    },
    {
        "name": "Lorüns",
        "code": "6700"
    },
    {
        "name": "Ludesch",
        "code": "6713"
    },
    {
        "name": "Nenzing",
        "code": "6710"
    },
    {
        "name": "Nüziders",
        "code": "6714"
    },
    {
        "name": "Raggal",
        "code": "6741"
    },
    {
        "name": "St. Anton im Montafon",
        "code": "6771"
    },
    {
        "name": "St. Gallenkirch",
        "code": "6791"
    },
    {
        "name": "St. Gerold",
        "code": "6722"
    },
    {
        "name": "Schruns",
        "code": "6780"
    },
    {
        "name": "Silbertal",
        "code": "6782"
    },
    {
        "name": "Sonntag",
        "code": "6731"
    },
    {
        "name": "Stallehr",
        "code": "6700"
    },
    {
        "name": "Thüringen",
        "code": "6712"
    },
    {
        "name": "Thüringerberg",
        "code": "6721"
    },
    {
        "name": "Tschagguns",
        "code": "6774"
    },
    {
        "name": "Vandans",
        "code": "6773"
    },
    {
        "name": "Alberschwende",
        "code": "6861"
    },
    {
        "name": "Andelsbuch",
        "code": "6866"
    },
    {
        "name": "Au",
        "code": "6883"
    },
    {
        "name": "Bezau",
        "code": "6870"
    },
    {
        "name": "Bildstein",
        "code": "6858"
    },
    {
        "name": "Bizau",
        "code": "6874"
    },
    {
        "name": "Bregenz",
        "code": "6900"
    },
    {
        "name": "Buch",
        "code": "6960"
    },
    {
        "name": "Damüls",
        "code": "6884"
    },
    {
        "name": "Doren",
        "code": "6933"
    },
    {
        "name": "Egg",
        "code": "6863"
    },
    {
        "name": "Eichenberg",
        "code": "6911"
    },
    {
        "name": "Fußach",
        "code": "6972"
    },
    {
        "name": "Gaißau",
        "code": "6974"
    },
    {
        "name": "Hard",
        "code": "6971"
    },
    {
        "name": "Hittisau",
        "code": "6952"
    },
    {
        "name": "Höchst",
        "code": "6973"
    },
    {
        "name": "Hörbranz",
        "code": "6912"
    },
    {
        "name": "Hohenweiler",
        "code": "6914"
    },
    {
        "name": "Kennelbach",
        "code": "6921"
    },
    {
        "name": "Krumbach",
        "code": "6942"
    },
    {
        "name": "Langen bei Bregenz",
        "code": "6932"
    },
    {
        "name": "Langenegg",
        "code": "6941"
    },
    {
        "name": "Lauterach",
        "code": "6923"
    },
    {
        "name": "Lingenau",
        "code": "6951"
    },
    {
        "name": "Lochau",
        "code": "6911"
    },
    {
        "name": "Mellau",
        "code": "6881"
    },
    {
        "name": "Mittelberg",
        "code": "6991"
    },
    {
        "name": "Möggers",
        "code": "6900"
    },
    {
        "name": "Reuthe",
        "code": "6870"
    },
    {
        "name": "Riefensberg",
        "code": "6943"
    },
    {
        "name": "Schnepfau",
        "code": "6882"
    },
    {
        "name": "Schoppernau",
        "code": "6886"
    },
    {
        "name": "Schröcken",
        "code": "6888"
    },
    {
        "name": "Schwarzach",
        "code": "6858"
    },
    {
        "name": "Schwarzenberg",
        "code": "6867"
    },
    {
        "name": "Sibratsgfäll",
        "code": "6952"
    },
    {
        "name": "Sulzberg",
        "code": "6934"
    },
    {
        "name": "Warth",
        "code": "6767"
    },
    {
        "name": "Wolfurt",
        "code": "6922"
    },
    {
        "name": "Dornbirn",
        "code": "6850"
    },
    {
        "name": "Hohenems",
        "code": "6845"
    },
    {
        "name": "Lustenau",
        "code": "6890"
    },
    {
        "name": "Altach",
        "code": "6844"
    },
    {
        "name": "Düns",
        "code": "6822"
    },
    {
        "name": "Dünserberg",
        "code": "6822"
    },
    {
        "name": "Feldkirch",
        "code": "6800"
    },
    {
        "name": "Frastanz",
        "code": "6820"
    },
    {
        "name": "Fraxern",
        "code": "6833"
    },
    {
        "name": "Göfis",
        "code": "6811"
    },
    {
        "name": "Götzis",
        "code": "6840"
    },
    {
        "name": "Klaus",
        "code": "6833"
    },
    {
        "name": "Koblach",
        "code": "6842"
    },
    {
        "name": "Laterns",
        "code": "6830"
    },
    {
        "name": "Mäder",
        "code": "6841"
    },
    {
        "name": "Meiningen",
        "code": "6812"
    },
    {
        "name": "Rankweil",
        "code": "6830"
    },
    {
        "name": "Röns",
        "code": "6822"
    },
    {
        "name": "Röthis",
        "code": "6832"
    },
    {
        "name": "Satteins",
        "code": "6822"
    },
    {
        "name": "Schlins",
        "code": "6824"
    },
    {
        "name": "Schnifis",
        "code": "6822"
    },
    {
        "name": "Sulz",
        "code": "6832"
    },
    {
        "name": "Übersaxen",
        "code": "6834"
    },
    {
        "name": "Viktorsberg",
        "code": "6836"
    },
    {
        "name": "Weiler",
        "code": "6833"
    },
    {
        "name": "Zwischenwasser",
        "code": "6835"
    },
    {
        "name": "Wien-Innere Stadt",
        "code": "1010"
    },
    {
        "name": "Wien-Leopoldstadt",
        "code": "1020"
    },
    {
        "name": "Wien-Landstraße",
        "code": "1030"
    },
    {
        "name": "Wien-Wieden",
        "code": "1040"
    },
    {
        "name": "Wien-Margareten",
        "code": "1050"
    },
    {
        "name": "Wien-Mariahilf",
        "code": "1060"
    },
    {
        "name": "Wien-Neubau",
        "code": "1070"
    },
    {
        "name": "Wien-Josefstadt",
        "code": "1080"
    },
    {
        "name": "Wien-Alsergrund",
        "code": "1090"
    },
    {
        "name": "Wien-Favoriten",
        "code": "1100"
    },
    {
        "name": "Wien-Simmering",
        "code": "1110"
    },
    {
        "name": "Wien-Meidling",
        "code": "1120"
    },
    {
        "name": "Wien-Hietzing",
        "code": "1130"
    },
    {
        "name": "Wien-Penzing",
        "code": "1140"
    },
    {
        "name": "Wien-Rudolfsheim-Fünfhaus",
        "code": "1150"
    },
    {
        "name": "Wien-Ottakring",
        "code": "1160"
    },
    {
        "name": "Wien-Hernals",
        "code": "1170"
    },
    {
        "name": "Wien-Währing",
        "code": "1180"
    },
    {
        "name": "Wien-Döbling",
        "code": "1190"
    },
    {
        "name": "Wien-Brigittenau",
        "code": "1200"
    },
    {
        "name": "Wien-Floridsdorf",
        "code": "1210"
    },
    {
        "name": "Wien-Donaustadt",
        "code": "1220"
    },
    {
        "name": "Wien-Liesing",
        "code": "1230"
    },
    {
        "name": "Heiligenkreuz im Lafnitztal",
        "code": "7561"
    },
    {
        "name": "Loipersbach im Burgenland",
        "code": "7020"
    },
    {
        "name": "Pöttsching",
        "code": "7033"
    },
    {
        "name": "Enzersdorf an der Fischa",
        "code": "2431"
    },
    {
        "name": "Eggenburg",
        "code": "3730"
    },
    {
        "name": "Röschitz",
        "code": "3743"
    },
    {
        "name": "Stetteldorf am Wagram",
        "code": "3463"
    },
    {
        "name": "Gnadendorf",
        "code": "2152"
    },
    {
        "name": "Niederleis",
        "code": "2116"
    },
    {
        "name": "Thomasberg",
        "code": "2842"
    },
    {
        "name": "Hitzendorf",
        "code": "8151"
    },
    {
        "name": "Thaur",
        "code": "6065"
    },
    {
        "name": "Nauders",
        "code": "6543"
    },
    {
        "name": "Wängle",
        "code": "6610"
    }
]';
    $data = json_decode($jsonArray, true);
    $benzerSehirler = [];
    foreach ($data as $item) {
        $name = $item['name'];
        $code = $item['code'];
        $findCity = \App\Models\City::where("post_code", $code)->where('country_id', 3)->first();
        if ($findCity){
            $benzerSehirler[] = $name;
        }
        else{
            $city = new \App\Models\City();
            $city->name = $name;
            $city->slug = \Illuminate\Support\Str::slug($name);
            $city->post_code= $code;
            $city->country_id = 3;
            $city->save();
        }
    }
    dd($benzerSehirler);
});
Route::controller(\App\Http\Controllers\HomeController::class)->group(function (){
    Route::get('/', 'index')->name('welcome');
    Route::get('/salonlar', 'allBusiness')->name('business.all');
    Route::get('/salon-kategori/{slug}', 'businessCategory')->name('business.category');
    Route::get('/salon/{slug}/detay', 'businessDetail')->name('business.detail');

    Route::get('sayfa/{slug}', 'pageDetail')->name('page.detail');

    Route::get('/bloglar','blogs')->name('blog.index');
    Route::get('/blog/{slug}/detay','blogDetail')->name('blog.detail');
    Route::post('/blog/yorum/kaydet', 'blogCommentStore')->name('blog.comment.store');
    Route::get('/etkinlikler','activities')->name('activity.index');
    Route::get('/etkinlik/{slug}/detay','activityDetail')->name('activity.detail');
    Route::post('/activity/personel/control', 'personelControl')->name('activity.personel.control');

    Route::get('/hakkimizda','about')->name('about');
    Route::get('/sss','faq')->name('faq');

    Route::get('/tum-hizmetler','allService')->name('service.all');
    Route::get('/hizmet/{slug}','serviceDetail')->name('service.detail');

    Route::post('/hizmet-ara','serviceSearch')->name('searchService');
    Route::get('/hizmet-ara/{city}/{service}','serviceAllGet')->name('serviceAllGet');
    Route::get('/hizmet-turu-ara/{category}/{service}','serviceSubCategoryGet')->name('serviceSubCategoryGet');
    Route::get('/hizmet-ara/{city}','serviceCityGet')->name('serviceCityGet');
    Route::get('/hizmet/{service}','serviceGet')->name('serviceGet');

    Route::post('/salon-ara', 'businessCategorySearch')->name('businessCategorySearch');
    Route::get('/salon-ara/{city}/{category}','categoryAllGet')->name('categoryAllGet');
    Route::get('/sehir-ara/{city}','categoryCityGet')->name('categoryCityGet');
    Route::get('/salon-ara/{category}','categoryGet')->name('categoryGet');

    Route::get('/live-search', 'liveSearch')->name('live-search');
    Route::get('/iletisim', 'contact')->name('contact');
    Route::post('/iletisim/save', 'contactStore')->name('contact.store');

});


Route::get('randevu-olustur/{business}', [\App\Http\Controllers\AppointmentController::class, 'step1Show'])->name('step1.show');
Route::get('randevu-olustur/adim-1/save', [\App\Http\Controllers\AppointmentController::class, 'step1Store'])->name('step1.store');
Route::post('randevu-olustur', [\App\Http\Controllers\AppointmentController::class, 'appointmentCreate'])->name('appointment.create');
Route::get('randevu-olusturuldu/{appointment}', [\App\Http\Controllers\AppointmentController::class, 'step5Show'])->name('appointment.success');
Route::post('appointment/time/control', [\App\Http\Controllers\AppointmentController::class, 'appointmentTimeControl'])->name('appointment.time.control');
Route::group(['prefix' => 'customer', 'as' => 'customer.'], function () {
    Route::get('/login', [\App\Http\Controllers\Customer\Auth\LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [\App\Http\Controllers\Customer\Auth\LoginController::class, 'login']);

    Route::post('/logout', [\App\Http\Controllers\Customer\Auth\LoginController::class, 'logout'])->name('logout');

    Route::get('/register', [\App\Http\Controllers\Customer\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [\App\Http\Controllers\Customer\Auth\RegisterController::class, 'register']);

    Route::get('/sifremi-unuttum', [\App\Http\Controllers\Customer\Auth\VerifyController::class, 'showForgotView'])->name('showForgotView');
    Route::post('/sifremi-unuttum', [\App\Http\Controllers\Customer\Auth\VerifyController::class, 'forgotPassword'])->name('forgotPassword');

    Route::get('/telefon-dogrulama', [\App\Http\Controllers\Customer\Auth\VerifyController::class, 'phoneVerify'])->name('phone.verify');
    Route::post('/telefon-dogrulama', [\App\Http\Controllers\Customer\Auth\VerifyController::class, 'phoneVerifyAction'])->name('phone.verify.action');

    Route::get('/verify-phone', [\App\Http\Controllers\Customer\Auth\VerifyController::class, 'index'])->name('verify');
    Route::post('/code/test', [\App\Http\Controllers\Customer\Auth\VerifyController::class, 'verifyCode'])->name('verify.code');

    Route::middleware(['auth:customer', 'active'])->group(function () {
        Route::get('/home', [\App\Http\Controllers\Customer\HomeController::class, 'index'])->name('home');
        Route::get('/permissions', [\App\Http\Controllers\Customer\HomeController::class,'permissions'])->name('permissions');
        Route::get('/yorumlar', [\App\Http\Controllers\Customer\HomeController::class, 'comments'])->name('comments');
        Route::get('/favori-isletmeler', [\App\Http\Controllers\Customer\HomeController::class, 'favorites'])->name('favorite.index');
        Route::get('/islem-yaptigim-isletmeler', [\App\Http\Controllers\Customer\HomeController::class, 'addicted'])->name('addicted.index');
        Route::get('/ürün-siparislerim', [\App\Http\Controllers\Customer\HomeController::class, 'orders'])->name('order.index');
        Route::get('/paketlerim', [\App\Http\Controllers\Customer\HomeController::class, 'packets'])->name('packet.index');
        Route::get('/kampanyalarim', [\App\Http\Controllers\Customer\HomeController::class, 'campaigns'])->name('campaign.index');
        Route::get('/paket/{id}/detay', [\App\Http\Controllers\Customer\HomeController::class, 'packetDetail'])->name('packet.detail');
        Route::get('/gecmis-randevularım', [\App\Http\Controllers\Customer\HomeController::class, 'appointments'])->name('appointment.index');
        Route::get('/randevu/{id}/detay', [\App\Http\Controllers\Customer\HomeController::class, 'appointmentDetail'])->name('appointment.detail');

        Route::post('update/permissions', [\App\Http\Controllers\Customer\HomeController::class, 'permissionUpdate'])->name('permissions.update');
        Route::post('district/get', [\App\Http\Controllers\Customer\HomeController::class, 'getDistrict'])->name('getDistrict');
        Route::post('/appointment/cancel', [\App\Http\Controllers\Customer\HomeController::class, 'cancelAppointment'])->name('appointment.cancel');
        Route::post('/add/favorite', [\App\Http\Controllers\Customer\HomeController::class, 'addFavorite'])->name('favorite.add');
        Route::post('/remove/favorite', [\App\Http\Controllers\Customer\HomeController::class, 'removeFavorite'])->name('favorite.remove');
        Route::post('/appointment/comment/store', [\App\Http\Controllers\Customer\HomeController::class, 'addComment'])->name('appointment.comment.store');
        Route::post('/campaign/detail', [\App\Http\Controllers\Customer\HomeController::class, 'campaignDetail'])->name('campaign.detail');

        Route::controller(\App\Http\Controllers\Customer\ProfileController::class)->prefix('profile')->as('profile.')->group(function () {
            Route::get('/hesap-ayarlari', 'edit')->name('edit');
            Route::get('/sifre-degistir', 'editPassword')->name('password.edit');
            Route::post('/update', 'update')->name('update');
            Route::post('/change-password', 'changePassword')->name('change-password');
        });
    });
});