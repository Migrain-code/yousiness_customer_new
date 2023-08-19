<?php

use Illuminate\Support\Facades\Route;
Route::get('/test', function (){
    $jsonArray = '[
    {
        "name": "Bedburg-Hau",
        "code": "47551"
    },
    {
        "name": "Alsdorf",
        "code": "52477"
    },
    {
        "name": "Roetgen",
        "code": "52159"
    },
    {
        "name": "Monschau",
        "code": "52156"
    },
    {
        "name": "Simmerath",
        "code": "52152"
    },
    {
        "name": "Niederzier",
        "code": "52382"
    },
    {
        "name": "Welschbillig, Igel, Aach",
        "code": "54298"
    },
    {
        "name": "Neukirchen-Vluyn",
        "code": "47506"
    },
    {
        "name": "Dudeldorf",
        "code": "54647"
    },
    {
        "name": "Pluwig",
        "code": "54316"
    },
    {
        "name": "Duisburg",
        "code": "47139"
    },
    {
        "name": "Pulheim",
        "code": "50259"
    },
    {
        "name": "Düsseldorf",
        "code": "40468"
    },
    {
        "name": "Mehren u.a.",
        "code": "54552"
    },
    {
        "name": "Düsseldorf",
        "code": "40470"
    },
    {
        "name": "Düsseldorf",
        "code": "40599"
    },
    {
        "name": "Gusenburg",
        "code": "54413"
    },
    {
        "name": "Mülheim an der Ruhr",
        "code": "45475"
    },
    {
        "name": "Köln",
        "code": "50739"
    },
    {
        "name": "Tholey",
        "code": "66636"
    },
    {
        "name": "Saarbrücken",
        "code": "66117"
    },
    {
        "name": "Köln",
        "code": "50968"
    },
    {
        "name": "Gevenich",
        "code": "56825"
    },
    {
        "name": "Bonn",
        "code": "53125"
    },
    {
        "name": "Brücken, Oberbrombach u.a.",
        "code": "55767"
    },
    {
        "name": "Rosendahl",
        "code": "48720"
    },
    {
        "name": "Titisee-Neustadt",
        "code": "79822"
    },
    {
        "name": "Driedorf",
        "code": "35759"
    },
    {
        "name": "Rastatt",
        "code": "76437"
    },
    {
        "name": "Bissendorf",
        "code": "49143"
    },
    {
        "name": "Oldenburg",
        "code": "26122"
    },
    {
        "name": "Baden-Baden",
        "code": "76532"
    },
    {
        "name": "Küssaberg",
        "code": "79790"
    },
    {
        "name": "Mainz-Kastel",
        "code": "55252"
    },
    {
        "name": "Rheinzabern",
        "code": "76764"
    },
    {
        "name": "Dillenburg",
        "code": "35684"
    },
    {
        "name": "Karlsruhe",
        "code": "76189"
    },
    {
        "name": "Alsheim",
        "code": "67577"
    },
    {
        "name": "Stadland",
        "code": "26936"
    },
    {
        "name": "Schwegenheim",
        "code": "67365"
    },
    {
        "name": "Lippstadt",
        "code": "59557"
    },
    {
        "name": "Dötlingen",
        "code": "27801"
    },
    {
        "name": "Rüthen",
        "code": "59602"
    },
    {
        "name": "Limburgerhof",
        "code": "67117"
    },
    {
        "name": "Steimel",
        "code": "57614"
    },
    {
        "name": "Dürrholz",
        "code": "56307"
    },
    {
        "name": "Kindsbach",
        "code": "66862"
    },
    {
        "name": "Waldböckelheim",
        "code": "55596"
    },
    {
        "name": "Eitelborn",
        "code": "56337"
    },
    {
        "name": "Hirschhorn",
        "code": "67732"
    },
    {
        "name": "Bornich, Patersberg",
        "code": "56348"
    },
    {
        "name": "Nußbach",
        "code": "67759"
    },
    {
        "name": "Malsburg-Marzell",
        "code": "79429"
    },
    {
        "name": "Kaub",
        "code": "56349"
    },
    {
        "name": "Otterberg",
        "code": "67697"
    },
    {
        "name": "Mettingen",
        "code": "49497"
    },
    {
        "name": "Bad Ems Umland",
        "code": "56132"
    },
    {
        "name": "Lorch",
        "code": "65391"
    },
    {
        "name": "Hachenburg",
        "code": "57627"
    },
    {
        "name": "Emmerzhausen, Niederdreisbach, Steinebach",
        "code": "57520"
    },
    {
        "name": "Lienen",
        "code": "49536"
    },
    {
        "name": "Steinbach, Weitersweiler, Bennhausen, Mörsfeld, Würzweiler, Ruppertsecken u.a.",
        "code": "67808"
    },
    {
        "name": "Waldleiningen, Fischbach",
        "code": "67693"
    },
    {
        "name": "Münchweiler an der Alsenz",
        "code": "67728"
    },
    {
        "name": "Ense",
        "code": "59469"
    },
    {
        "name": "Emmerzhausen, Niederdreisbach, Steinebach",
        "code": "57520"
    },
    {
        "name": "Diez, Hambach, Aull",
        "code": "65582"
    },
    {
        "name": "Birlenbach",
        "code": "65626"
    },
    {
        "name": "Frankenstein, Neidenfels, Frankeneck",
        "code": "67468"
    },
    {
        "name": "Wallertheim",
        "code": "55578"
    },
    {
        "name": "Möhnesee",
        "code": "59519"
    },
    {
        "name": "Arnsberg",
        "code": "59823"
    },
    {
        "name": "Wilnsdorf",
        "code": "57234"
    },
    {
        "name": "Albisheim (Pfrimm)",
        "code": "67308"
    },
    {
        "name": "Nordrach",
        "code": "77787"
    },
    {
        "name": "Wachenheim an der Weinstraße",
        "code": "67157"
    },
    {
        "name": "Surwold",
        "code": "26903"
    },
    {
        "name": "Langeoog",
        "code": "26465"
    },
    {
        "name": "Bottenbach",
        "code": "66504"
    },
    {
        "name": "Waldesch, Hünenfeld",
        "code": "56323"
    },
    {
        "name": "Lüdenscheid",
        "code": "58515"
    },
    {
        "name": "Münster",
        "code": "48159"
    },
    {
        "name": "Mendig",
        "code": "56743"
    },
    {
        "name": "Berglangenbach, Ruschberg u.a.",
        "code": "55776"
    },
    {
        "name": "Dickenschied u.a.",
        "code": "55483"
    },
    {
        "name": "Polch",
        "code": "56751"
    },
    {
        "name": "Osterrönfeld",
        "code": "24783"
    },
    {
        "name": "Eislingen/Fils",
        "code": "73054"
    },
    {
        "name": "Ottenbach",
        "code": "73113"
    },
    {
        "name": "Schenklengsfeld",
        "code": "36277"
    },
    {
        "name": "Laupheim",
        "code": "88471"
    },
    {
        "name": "Bovenden",
        "code": "37120"
    },
    {
        "name": "Hannover",
        "code": "30629"
    },
    {
        "name": "Wietzendorf",
        "code": "29649"
    },
    {
        "name": "Argenbühl",
        "code": "88260"
    },
    {
        "name": "Hildesheim",
        "code": "31137"
    },
    {
        "name": "Arnis, Marienhof",
        "code": "24399"
    },
    {
        "name": "Bartholomä",
        "code": "73566"
    },
    {
        "name": "Göttingen",
        "code": "37075"
    },
    {
        "name": "Sandberg",
        "code": "97657"
    },
    {
        "name": "Hamburg",
        "code": "20359"
    },
    {
        "name": "Aalen",
        "code": "73434"
    },
    {
        "name": "Nordheim v.d. Rhön",
        "code": "97647"
    },
    {
        "name": "Wahlstedt",
        "code": "23812"
    },
    {
        "name": "Kiel",
        "code": "24113"
    },
    {
        "name": "Aalen",
        "code": "73433"
    },
    {
        "name": "Waigolshausen",
        "code": "97534"
    },
    {
        "name": "Hamburg",
        "code": "22159"
    },
    {
        "name": "Heidenheim an der Brenz",
        "code": "89520"
    },
    {
        "name": "Marksuhl, Krauthausen u.a.",
        "code": "99819"
    },
    {
        "name": "Niederstotzingen",
        "code": "89168"
    },
    {
        "name": "Marksuhl, Krauthausen u.a.",
        "code": "99819"
    },
    {
        "name": "Hattorf",
        "code": "37197"
    },
    {
        "name": "Trunkelsberg",
        "code": "87779"
    },
    {
        "name": "Holzgünz",
        "code": "87752"
    },
    {
        "name": "Sontheim an der Brenz",
        "code": "89567"
    },
    {
        "name": "Syrgenstein",
        "code": "89428"
    },
    {
        "name": "Schmalensee",
        "code": "24638"
    },
    {
        "name": "Walldorf",
        "code": "98639"
    },
    {
        "name": "Goslar",
        "code": "38644"
    },
    {
        "name": "Kammeltal",
        "code": "89358"
    },
    {
        "name": "Selent",
        "code": "24238"
    },
    {
        "name": "Amerdingen",
        "code": "86735"
    },
    {
        "name": "Geiselwind",
        "code": "96160"
    },
    {
        "name": "Röfingen",
        "code": "89365"
    },
    {
        "name": "Trittau",
        "code": "22946"
    },
    {
        "name": "Apfeltrach",
        "code": "87742"
    },
    {
        "name": "Dietersheim",
        "code": "91463"
    },
    {
        "name": "Braunschweig",
        "code": "38114"
    },
    {
        "name": "Ludwigshafen am Rhein",
        "code": "67061"
    },
    {
        "name": "Preußisch Oldendorf",
        "code": "32361"
    },
    {
        "name": "Salzkotten",
        "code": "33154"
    },
    {
        "name": "Wetzlar",
        "code": "35585"
    },
    {
        "name": "Einhausen",
        "code": "64683"
    },
    {
        "name": "Bösingen",
        "code": "78662"
    },
    {
        "name": "Remchingen",
        "code": "75196"
    },
    {
        "name": "Walzbachtal",
        "code": "75045"
    },
    {
        "name": "Hövelhof",
        "code": "33161"
    },
    {
        "name": "Weinheim",
        "code": "69469"
    },
    {
        "name": "Bremen",
        "code": "28719"
    },
    {
        "name": "Beverstedt",
        "code": "27616"
    },
    {
        "name": "Frankfurt am Main",
        "code": "60594"
    },
    {
        "name": "Bad Vilbel",
        "code": "61118"
    },
    {
        "name": "Bad Lippspringe",
        "code": "33175"
    },
    {
        "name": "Wöllstadt",
        "code": "61206"
    },
    {
        "name": "Bahrenborstel, Barenburg, Kirchdorf",
        "code": "27245"
    },
    {
        "name": "Heusenstamm",
        "code": "63150"
    },
    {
        "name": "Minden",
        "code": "32429"
    },
    {
        "name": "Bad Oeynhausen",
        "code": "32547"
    },
    {
        "name": "Brensbach",
        "code": "64395"
    },
    {
        "name": "Otzberg",
        "code": "64853"
    },
    {
        "name": "Steyerberg",
        "code": "31595"
    },
    {
        "name": "Sindelfingen",
        "code": "71069"
    },
    {
        "name": "Lunden",
        "code": "25774"
    },
    {
        "name": "Magstadt",
        "code": "71106"
    },
    {
        "name": "Bremen",
        "code": "28325"
    },
    {
        "name": "Neuhaus (Oste)",
        "code": "21785"
    },
    {
        "name": "Tarmstedt, Breddorf u.a.",
        "code": "27412"
    },
    {
        "name": "Oberriexingen",
        "code": "71739"
    },
    {
        "name": "Massenbachhausen",
        "code": "74252"
    },
    {
        "name": "Neustadt",
        "code": "35279"
    },
    {
        "name": "Schotten",
        "code": "63679"
    },
    {
        "name": "Mildstedt",
        "code": "25866"
    },
    {
        "name": "Wiedensahl",
        "code": "31719"
    },
    {
        "name": "Nordhastedt",
        "code": "25785"
    },
    {
        "name": "Kornwestheim",
        "code": "70806"
    },
    {
        "name": "Hösbach",
        "code": "63768"
    },
    {
        "name": "Ludwigsburg",
        "code": "71640"
    },
    {
        "name": "Walldürn",
        "code": "74731"
    },
    {
        "name": "Waldaschaff, Waldaschaffer Forst",
        "code": "63857"
    },
    {
        "name": "Waiblingen",
        "code": "71332"
    },
    {
        "name": "Pohle, Lauenau, Messenkamp, Hülsede etc",
        "code": "31867"
    },
    {
        "name": "Hardheim",
        "code": "74736"
    },
    {
        "name": "Kirchheim unter Teck",
        "code": "73230"
    },
    {
        "name": "Markt Erlbach",
        "code": "91459"
    },
    {
        "name": "Rügland",
        "code": "91622"
    },
    {
        "name": "Cremlingen",
        "code": "38162"
    },
    {
        "name": "Remlingen",
        "code": "38319"
    },
    {
        "name": "Lehre",
        "code": "38165"
    },
    {
        "name": "Bad Bodenteich",
        "code": "29389"
    },
    {
        "name": "Ornbau",
        "code": "91737"
    },
    {
        "name": "Lichtenau",
        "code": "91586"
    },
    {
        "name": "Huisheim",
        "code": "86685"
    },
    {
        "name": "Stettfeld",
        "code": "96188"
    },
    {
        "name": "Biberbach",
        "code": "86485"
    },
    {
        "name": "Großfahner, Dachwig u.a.",
        "code": "99100"
    },
    {
        "name": "Fuchstal",
        "code": "86925"
    },
    {
        "name": "Untermerzbach",
        "code": "96190"
    },
    {
        "name": "Oberottmarshausen",
        "code": "86507"
    },
    {
        "name": "Augsburg",
        "code": "86179"
    },
    {
        "name": "Heroldsbach",
        "code": "91336"
    },
    {
        "name": "Ballenstedt, Harzgerode",
        "code": "06493"
    },
    {
        "name": "Nürnberg",
        "code": "90441"
    },
    {
        "name": "Dannewerk",
        "code": "24867"
    },
    {
        "name": "Reichenbach an der Fils",
        "code": "73262"
    },
    {
        "name": "Bad Salzschlirf",
        "code": "36364"
    },
    {
        "name": "Körle",
        "code": "34327"
    },
    {
        "name": "Todenbüttel",
        "code": "24819"
    },
    {
        "name": "Aichelberg",
        "code": "73101"
    },
    {
        "name": "Halvesbostel",
        "code": "21646"
    },
    {
        "name": "Bad Boll",
        "code": "73087"
    },
    {
        "name": "Spangenberg",
        "code": "34286"
    },
    {
        "name": "Gruibingen",
        "code": "73344"
    },
    {
        "name": "Steinfeld",
        "code": "97854"
    },
    {
        "name": "Elmshorn",
        "code": "25336"
    },
    {
        "name": "Assamstadt",
        "code": "97959"
    },
    {
        "name": "Berg b.Neumarkt i.d.OPf.",
        "code": "92348"
    },
    {
        "name": "Schwerin",
        "code": "19053"
    },
    {
        "name": "Glashütten",
        "code": "95496"
    },
    {
        "name": "Manching",
        "code": "85077"
    },
    {
        "name": "Oberschleißheim",
        "code": "85764"
    },
    {
        "name": "München",
        "code": "80634"
    },
    {
        "name": "Paunzhausen",
        "code": "85307"
    },
    {
        "name": "Allershausen",
        "code": "85391"
    },
    {
        "name": "Eching",
        "code": "85386"
    },
    {
        "name": "München",
        "code": "80538"
    },
    {
        "name": "Magdeburg",
        "code": "39112"
    },
    {
        "name": "Karsdorf",
        "code": "06638"
    },
    {
        "name": "Helmbrechts",
        "code": "95233"
    },
    {
        "name": "Neubiberg",
        "code": "85579"
    },
    {
        "name": "Kirchdorf a.d. Amper",
        "code": "85414"
    },
    {
        "name": "Sulzbach-Rosenberg",
        "code": "92237"
    },
    {
        "name": "Gmund a. Tegernsee",
        "code": "83703"
    },
    {
        "name": "Salzatal",
        "code": "06198"
    },
    {
        "name": "Fichtelberg",
        "code": "95686"
    },
    {
        "name": "Attenhofen",
        "code": "84091"
    },
    {
        "name": "Irschenberg",
        "code": "83737"
    },
    {
        "name": "Moosburg a.d. Isar",
        "code": "85368"
    },
    {
        "name": "Rieden",
        "code": "92286"
    },
    {
        "name": "Kirschkau, Pausa-Mühltroff",
        "code": "07919"
    },
    {
        "name": "Tangermünde",
        "code": "39590"
    },
    {
        "name": "Sinzing",
        "code": "93161"
    },
    {
        "name": "Schkopau",
        "code": "06258"
    },
    {
        "name": "Bad Feilnbach",
        "code": "83075"
    },
    {
        "name": "Forstern",
        "code": "85659"
    },
    {
        "name": "Hohenthann",
        "code": "84098"
    },
    {
        "name": "Maitenbeth",
        "code": "83558"
    },
    {
        "name": "Gumtow, Kyritz u.a.",
        "code": "16866"
    },
    {
        "name": "Haag i. OB",
        "code": "83527"
    },
    {
        "name": "Milower Land, Schollene, Nennhausen u.a.",
        "code": "14715"
    },
    {
        "name": "Nußdorf a. Inn",
        "code": "83131"
    },
    {
        "name": "Zeitlarn",
        "code": "93197"
    },
    {
        "name": "Dessau-Roßlau",
        "code": "06842"
    },
    {
        "name": "Rhinow",
        "code": "14728"
    },
    {
        "name": "Gräfenhainichen",
        "code": "06772"
    },
    {
        "name": "Gößnitz",
        "code": "04639"
    },
    {
        "name": "Leipzig",
        "code": "04275"
    },
    {
        "name": "Lichtentanne",
        "code": "08115"
    },
    {
        "name": "Leipzig",
        "code": "04347"
    },
    {
        "name": "Leipzig",
        "code": "04299"
    },
    {
        "name": "Crinitzberg",
        "code": "08147"
    },
    {
        "name": "Lehnin",
        "code": "14797"
    },
    {
        "name": "Weiding",
        "code": "92557"
    },
    {
        "name": "Feichten a.d. Alz",
        "code": "84550"
    },
    {
        "name": "Lauter-Bernsbach",
        "code": "08315"
    },
    {
        "name": "Chemnitz",
        "code": "09224"
    },
    {
        "name": "Fridolfing",
        "code": "83413"
    },
    {
        "name": "Blaibach",
        "code": "93476"
    },
    {
        "name": "Plattling",
        "code": "94447"
    },
    {
        "name": "Oberwiesenthal",
        "code": "09484"
    },
    {
        "name": "Osterhofen",
        "code": "94486"
    },
    {
        "name": "Demmin",
        "code": "17109"
    },
    {
        "name": "Rakow",
        "code": "18516"
    },
    {
        "name": "Aldersbach",
        "code": "94501"
    },
    {
        "name": "Potsdam",
        "code": "14482"
    },
    {
        "name": "Lalling",
        "code": "94551"
    },
    {
        "name": "Bayerbach",
        "code": "94137"
    },
    {
        "name": "Pockau-Lengefeld (Lengefeld)",
        "code": "09514"
    },
    {
        "name": "Garz/ Rügen",
        "code": "18574"
    },
    {
        "name": "Gingst",
        "code": "18569"
    },
    {
        "name": "Brand-Erbisdorf, Großhartmannsdorf",
        "code": "09618"
    },
    {
        "name": "Thurmansbang",
        "code": "94169"
    },
    {
        "name": "Neubrandenburg",
        "code": "17036"
    },
    {
        "name": "Berlin Wilmersdorf",
        "code": "10713"
    },
    {
        "name": "Berlin Charlottenburg",
        "code": "10625"
    },
    {
        "name": "Berlin Lankwitz",
        "code": "12247"
    },
    {
        "name": "Weißenborn, Oberschöna",
        "code": "09600"
    },
    {
        "name": "Grafenau",
        "code": "94481"
    },
    {
        "name": "Erfurt",
        "code": "99099"
    },
    {
        "name": "Eurasburg",
        "code": "86495"
    },
    {
        "name": "Nürnberg",
        "code": "90461"
    },
    {
        "name": "Nürnberg",
        "code": "90489"
    },
    {
        "name": "Murnau a. Staffelsee",
        "code": "82418"
    },
    {
        "name": "Rohrenfels",
        "code": "86701"
    },
    {
        "name": "Pampow",
        "code": "19075"
    },
    {
        "name": "Hiltpoltstein",
        "code": "91355"
    },
    {
        "name": "Kasendorf",
        "code": "95359"
    },
    {
        "name": "Roßleben-Wiehe, Gehofen",
        "code": "06571"
    },
    {
        "name": "Germering",
        "code": "82110"
    },
    {
        "name": "Prezelle",
        "code": "29491"
    },
    {
        "name": "Ottensoos",
        "code": "91242"
    },
    {
        "name": "Hettstedt, Endorf",
        "code": "06333"
    },
    {
        "name": "Stolpen, Dürrröhrsdorf-Dittersbach",
        "code": "01833"
    },
    {
        "name": "Biesendahlshof, Berkholz-Meyenburg",
        "code": "16306"
    },
    {
        "name": "Burkau",
        "code": "01906"
    },
    {
        "name": "Weißenberg, Hochkirch u.a.",
        "code": "02627"
    },
    {
        "name": "Treplin, Jacobsdorf, Frankfurt (Oder)",
        "code": "15236"
    },
    {
        "name": "Forst/ Lausitz",
        "code": "03149"
    },
    {
        "name": "Ebersbach-Neugersdorf",
        "code": "02727"
    },
    {
        "name": "Salzweg",
        "code": "94121"
    },
    {
        "name": "Hohenau",
        "code": "94545"
    },
    {
        "name": "Finsterwalde",
        "code": "03238"
    },
    {
        "name": "Moritzburg",
        "code": "01468"
    },
    {
        "name": "Anklam",
        "code": "17389"
    },
    {
        "name": "Ruhland",
        "code": "01945"
    },
    {
        "name": "Karlshagen",
        "code": "17449"
    },
    {
        "name": "Bergen",
        "code": "55608"
    },
    {
        "name": "Bergen",
        "code": "55608"
    },
    {
        "name": "Bawinkel",
        "code": "49844"
    },
    {
        "name": "Andervenne, Beesten, Freren, Messingen, Thuine",
        "code": "49832"
    },
    {
        "name": "Holm",
        "code": "25488"
    },
    {
        "name": "Elmshorn",
        "code": "25337"
    },
    {
        "name": "Kosel, Rieseby u.a.",
        "code": "24354"
    },
    {
        "name": "Merklingen",
        "code": "89188"
    },
    {
        "name": "Wartmannsroth",
        "code": "97797"
    },
    {
        "name": "Schemmerhofen",
        "code": "88433"
    },
    {
        "name": "Osterby",
        "code": "24367"
    },
    {
        "name": "Rosdorf",
        "code": "37124"
    },
    {
        "name": "Waldbüttelbrunn",
        "code": "97297"
    },
    {
        "name": "Brokstedt",
        "code": "24616"
    },
    {
        "name": "Gelting",
        "code": "24395"
    },
    {
        "name": "Obersontheim",
        "code": "74423"
    },
    {
        "name": "Hamburg",
        "code": "22549"
    },
    {
        "name": "Hamburg",
        "code": "21079"
    },
    {
        "name": "Würzburg",
        "code": "97072"
    },
    {
        "name": "Elfershausen",
        "code": "97725"
    },
    {
        "name": "Freden (Leine)",
        "code": "31084"
    },
    {
        "name": "Neumünster",
        "code": "24539"
    },
    {
        "name": "Gerbrunn",
        "code": "97218"
    },
    {
        "name": "Neu-Ulm",
        "code": "89233"
    },
    {
        "name": "Werneck",
        "code": "97440"
    },
    {
        "name": "Groß Kummerfeld",
        "code": "24626"
    },
    {
        "name": "Tangstedt",
        "code": "22889"
    },
    {
        "name": "Dänischenhagen",
        "code": "24229"
    },
    {
        "name": "Kaltennordheim",
        "code": "36452"
    },
    {
        "name": "Wulfsen",
        "code": "21445"
    },
    {
        "name": "Kiel",
        "code": "24159"
    },
    {
        "name": "Bargfeld-Stegen",
        "code": "23863"
    },
    {
        "name": "Garstedt",
        "code": "21441"
    },
    {
        "name": "Wienhausen",
        "code": "29342"
    },
    {
        "name": "Heimertingen",
        "code": "87751"
    },
    {
        "name": "Ahrensburg",
        "code": "22926"
    },
    {
        "name": "Grafenrheinfeld",
        "code": "97506"
    },
    {
        "name": "Burgdorf",
        "code": "38272"
    },
    {
        "name": "Rödelsee",
        "code": "97348"
    },
    {
        "name": "Wittenborn",
        "code": "23829"
    },
    {
        "name": "Oberstreu",
        "code": "97640"
    },
    {
        "name": "Winsen",
        "code": "21423"
    },
    {
        "name": "Kempten (Allgäu)",
        "code": "87439"
    },
    {
        "name": "Zöschingen",
        "code": "89447"
    },
    {
        "name": "Reppenstedt, Lüneburg",
        "code": "21391"
    },
    {
        "name": "Hoisdorf",
        "code": "22961"
    },
    {
        "name": "Lasbek",
        "code": "23847"
    },
    {
        "name": "Breitenbrunn",
        "code": "87739"
    },
    {
        "name": "Mühlhausen, Unstruttal",
        "code": "99974"
    },
    {
        "name": "Herrieden",
        "code": "91567"
    },
    {
        "name": "Scheinfeld",
        "code": "91443"
    },
    {
        "name": "Linau",
        "code": "22959"
    },
    {
        "name": "Eggenthal",
        "code": "87653"
    },
    {
        "name": "Biebesheim am Rhein",
        "code": "64584"
    },
    {
        "name": "Hattersheim",
        "code": "65795"
    },
    {
        "name": "Mannheim",
        "code": "68165"
    },
    {
        "name": "Bad Homburg v.d. Höhe",
        "code": "61350"
    },
    {
        "name": "Mannheim",
        "code": "68259"
    },
    {
        "name": "Rahden",
        "code": "32369"
    },
    {
        "name": "Altensteig",
        "code": "72213"
    },
    {
        "name": "Frankfurt am Main",
        "code": "60529"
    },
    {
        "name": "Edingen-Neckarhausen",
        "code": "68535"
    },
    {
        "name": "Seeheim-Jugenheim",
        "code": "64342"
    },
    {
        "name": "Büsingen am Hochrhein",
        "code": "78266"
    },
    {
        "name": "Osterholz-Scharmbeck",
        "code": "27711"
    },
    {
        "name": "Lage",
        "code": "32791"
    },
    {
        "name": "Paderborn",
        "code": "33098"
    },
    {
        "name": "Gailingen am Hochrhein",
        "code": "78262"
    },
    {
        "name": "Schönau",
        "code": "69250"
    },
    {
        "name": "Offenbach am Main",
        "code": "63071"
    },
    {
        "name": "Niederdorfelden",
        "code": "61138"
    },
    {
        "name": "Vöhl",
        "code": "34516"
    },
    {
        "name": "Obertshausen",
        "code": "63179"
    },
    {
        "name": "Bremen",
        "code": "28205"
    },
    {
        "name": "Bredstedt, Breklum u.a.",
        "code": "25821"
    },
    {
        "name": "Zaberfeld",
        "code": "74374"
    },
    {
        "name": "Oldenswort",
        "code": "25870"
    },
    {
        "name": "Bremen",
        "code": "28355"
    },
    {
        "name": "Fridingen an der Donau",
        "code": "78567"
    },
    {
        "name": "Leck",
        "code": "25917"
    },
    {
        "name": "Eberbach",
        "code": "69412"
    },
    {
        "name": "Stinstedt",
        "code": "21772"
    },
    {
        "name": "Kahl am Main",
        "code": "63796"
    },
    {
        "name": "Sindelfingen",
        "code": "71069"
    },
    {
        "name": "Högel",
        "code": "25858"
    },
    {
        "name": "Schwieberdingen",
        "code": "71701"
    },
    {
        "name": "Stuttgart",
        "code": "70197"
    },
    {
        "name": "Konstanz",
        "code": "78465"
    },
    {
        "name": "Waldenbuch",
        "code": "71111"
    },
    {
        "name": "Niedernberg",
        "code": "63843"
    },
    {
        "name": "Feldatal",
        "code": "36325"
    },
    {
        "name": "Sonnenbühl",
        "code": "72820"
    },
    {
        "name": "Stuttgart",
        "code": "70469"
    },
    {
        "name": "Stuttgart",
        "code": "70439"
    },
    {
        "name": "Haselund",
        "code": "25855"
    },
    {
        "name": "Kleinwallstadt",
        "code": "63839"
    },
    {
        "name": "Großheubach",
        "code": "63920"
    },
    {
        "name": "Besigheim",
        "code": "74354"
    },
    {
        "name": "Bessenbach",
        "code": "63856"
    },
    {
        "name": "Schneeberg",
        "code": "63936"
    },
    {
        "name": "Handewitt",
        "code": "24983"
    },
    {
        "name": "Bürgstadt",
        "code": "63927"
    },
    {
        "name": "Wolfschlugen",
        "code": "72649"
    },
    {
        "name": "Hohenstein",
        "code": "72531"
    },
    {
        "name": "Treia, Ahrenviölfeld",
        "code": "24896"
    },
    {
        "name": "Oeversee",
        "code": "24988"
    },
    {
        "name": "Suthfeld",
        "code": "31555"
    },
    {
        "name": "Oberaula",
        "code": "36280"
    },
    {
        "name": "Kremperheide",
        "code": "25569"
    },
    {
        "name": "Owen",
        "code": "73277"
    },
    {
        "name": "Nortrup",
        "code": "49638"
    },
    {
        "name": "Langenlonsheim",
        "code": "55450"
    },
    {
        "name": "Gundelfingen, Heuweiler",
        "code": "79194"
    },
    {
        "name": "Hohberg",
        "code": "77749"
    },
    {
        "name": "Freiburg im Breisgau",
        "code": "79106"
    },
    {
        "name": "Warendorf",
        "code": "48231"
    },
    {
        "name": "Albersweiler, Silz u.a.",
        "code": "76857"
    },
    {
        "name": "Helgoland",
        "code": "27498"
    },
    {
        "name": "Emmerzhausen, Niederdreisbach, Steinebach",
        "code": "57520"
    },
    {
        "name": "Emmerzhausen, Niederdreisbach, Steinebach",
        "code": "57520"
    },
    {
        "name": "Nisterau u.a.",
        "code": "56472"
    },
    {
        "name": "Glottertal",
        "code": "79286"
    },
    {
        "name": "Altendiez",
        "code": "65624"
    },
    {
        "name": "Billigheim-Ingenheim, Birkweiler",
        "code": "76831"
    },
    {
        "name": "Hadamar",
        "code": "65589"
    },
    {
        "name": "Oberkirch",
        "code": "77704"
    },
    {
        "name": "Niederneisen",
        "code": "65629"
    },
    {
        "name": "St. Blasien, Ibach",
        "code": "79837"
    },
    {
        "name": "Limburg",
        "code": "65554"
    },
    {
        "name": "Limburg",
        "code": "65550"
    },
    {
        "name": "Steinweiler",
        "code": "76872"
    },
    {
        "name": "Ostercappeln",
        "code": "49179"
    },
    {
        "name": "Walluf",
        "code": "65396"
    },
    {
        "name": "Baden-Baden",
        "code": "76532"
    },
    {
        "name": "Bad Peterstal-Griesbach",
        "code": "77740"
    },
    {
        "name": "Oldenburg (Oldenburg)",
        "code": "26123"
    },
    {
        "name": "Kuppenheim",
        "code": "76456"
    },
    {
        "name": "Dillenburg",
        "code": "35685"
    },
    {
        "name": "Dillenburg",
        "code": "35683"
    },
    {
        "name": "Melle",
        "code": "49324"
    },
    {
        "name": "Elsfleth",
        "code": "26931"
    },
    {
        "name": "Schenkenzell",
        "code": "77773"
    },
    {
        "name": "Weilrod",
        "code": "61276"
    },
    {
        "name": "Unterkirnach",
        "code": "78089"
    },
    {
        "name": "Loffenau",
        "code": "76597"
    },
    {
        "name": "Ludwigshafen am Rhein",
        "code": "67065"
    },
    {
        "name": "Hosenfeld",
        "code": "36154"
    },
    {
        "name": "Faulbach",
        "code": "97906"
    },
    {
        "name": "Großsolt",
        "code": "24991"
    },
    {
        "name": "Partenstein",
        "code": "97846"
    },
    {
        "name": "Langenargen",
        "code": "88085"
    },
    {
        "name": "Hohenlockstedt",
        "code": "25551"
    },
    {
        "name": "Sinntal",
        "code": "36391"
    },
    {
        "name": "Erlenbach b. Marktheidenfeld",
        "code": "97837"
    },
    {
        "name": "Zeitlofs",
        "code": "97799"
    },
    {
        "name": "Helmstadt",
        "code": "97264"
    },
    {
        "name": "Marienheide",
        "code": "51709"
    },
    {
        "name": "Dortmund",
        "code": "44141"
    },
    {
        "name": "Rieschweiler-Mühlbach",
        "code": "66509"
    },
    {
        "name": "Leiningen",
        "code": "56291"
    },
    {
        "name": "Medard, Rathskirchen u.a.",
        "code": "67744"
    },
    {
        "name": "Koblenz",
        "code": "56076"
    },
    {
        "name": "Pirmasens",
        "code": "66953"
    },
    {
        "name": "Binzen",
        "code": "79589"
    },
    {
        "name": "Lindern (Oldenburg)",
        "code": "49699"
    },
    {
        "name": "Braubach",
        "code": "56338"
    },
    {
        "name": "Mertloch, Welling u.a.",
        "code": "56753"
    },
    {
        "name": "Rheinbrohl",
        "code": "56598"
    },
    {
        "name": "Dickenschied u.a.",
        "code": "55483"
    },
    {
        "name": "Aurich",
        "code": "26605"
    },
    {
        "name": "Quedlinburg",
        "code": "06484"
    },
    {
        "name": "Grafrath",
        "code": "82284"
    },
    {
        "name": "Unterleinleiter",
        "code": "91364"
    },
    {
        "name": "Weimar",
        "code": "99428"
    },
    {
        "name": "Gräfenberg",
        "code": "91322"
    },
    {
        "name": "Rudolstadt",
        "code": "07407"
    },
    {
        "name": "Mitwitz",
        "code": "96268"
    },
    {
        "name": "Egloffstein",
        "code": "91349"
    },
    {
        "name": "Kalbe",
        "code": "39624"
    },
    {
        "name": "Gößweinstein",
        "code": "91327"
    },
    {
        "name": "Ingolstadt",
        "code": "85049"
    },
    {
        "name": "Feldafing",
        "code": "82340"
    },
    {
        "name": "Gauting",
        "code": "82131"
    },
    {
        "name": "Simmelsdorf",
        "code": "91245"
    },
    {
        "name": "Planegg/Krailling",
        "code": "82152"
    },
    {
        "name": "Betzenstein",
        "code": "91282"
    },
    {
        "name": "Kirchdorf",
        "code": "93348"
    },
    {
        "name": "Aßling",
        "code": "85617"
    },
    {
        "name": "Walpertskirchen",
        "code": "85469"
    },
    {
        "name": "Jerichow",
        "code": "39319"
    },
    {
        "name": "Gera",
        "code": "07545"
    },
    {
        "name": "Schierling",
        "code": "84069"
    },
    {
        "name": "Rostock",
        "code": "18055"
    },
    {
        "name": "Wenzenbach",
        "code": "93173"
    },
    {
        "name": "Prutting",
        "code": "83134"
    },
    {
        "name": "Altfraunhofen",
        "code": "84169"
    },
    {
        "name": "Baierbach",
        "code": "84171"
    },
    {
        "name": "Elsteraue",
        "code": "06729"
    },
    {
        "name": "Bernhardswald",
        "code": "93170"
    },
    {
        "name": "Soyen",
        "code": "83564"
    },
    {
        "name": "Gars a. Inn",
        "code": "83536"
    },
    {
        "name": "Neunburg vorm Wald",
        "code": "92431"
    },
    {
        "name": "Crimmitschau",
        "code": "08451"
    },
    {
        "name": "Wörth an der Donau",
        "code": "93086"
    },
    {
        "name": "Leipzig",
        "code": "04157"
    },
    {
        "name": "Rettenbach",
        "code": "93191"
    },
    {
        "name": "Zwickau",
        "code": "08056"
    },
    {
        "name": "Eslarn",
        "code": "92693"
    },
    {
        "name": "Trostberg",
        "code": "83308"
    },
    {
        "name": "Schönthal",
        "code": "93488"
    },
    {
        "name": "Cham",
        "code": "93413"
    },
    {
        "name": "Parkstetten",
        "code": "94365"
    },
    {
        "name": "Massing",
        "code": "84323"
    },
    {
        "name": "Penig",
        "code": "09322"
    },
    {
        "name": "Haselbach",
        "code": "94354"
    },
    {
        "name": "Surberg",
        "code": "83362"
    },
    {
        "name": "Schwarzenberg/Erzgeb.",
        "code": "08340"
    },
    {
        "name": "Chemnitz",
        "code": "09117"
    },
    {
        "name": "Thum",
        "code": "09419"
    },
    {
        "name": "Torgau",
        "code": "04861"
    },
    {
        "name": "Haarbach",
        "code": "94542"
    },
    {
        "name": "Samtens",
        "code": "18573"
    },
    {
        "name": "Ludwigsfelde",
        "code": "14974"
    },
    {
        "name": "Ortenburg",
        "code": "94496"
    },
    {
        "name": "Eging a. See",
        "code": "94535"
    },
    {
        "name": "Kirchham",
        "code": "94148"
    },
    {
        "name": "Berlin Dahlem",
        "code": "14195"
    },
    {
        "name": "Berlin Zehlendorf",
        "code": "14167"
    },
    {
        "name": "Freiberg",
        "code": "09599"
    },
    {
        "name": "Berlin Charlottenburg",
        "code": "14059"
    },
    {
        "name": "Spiegelau",
        "code": "94518"
    },
    {
        "name": "Berlin Hermsdorf",
        "code": "13467"
    },
    {
        "name": "Berlin Moabit",
        "code": "10553"
    },
    {
        "name": "Berlin Charlottenburg",
        "code": "10623"
    },
    {
        "name": "Neuhaus a. Inn",
        "code": "94152"
    },
    {
        "name": "Berlin Neukölln",
        "code": "12053"
    },
    {
        "name": "Kröv",
        "code": "54536"
    },
    {
        "name": "Gelsenkirchen",
        "code": "45892"
    },
    {
        "name": "Gelsenkirchen",
        "code": "45879"
    },
    {
        "name": "Bonn",
        "code": "53175"
    },
    {
        "name": "Ediger-Eller",
        "code": "56814"
    },
    {
        "name": "Bonn",
        "code": "53113"
    },
    {
        "name": "Ochtrup",
        "code": "48607"
    },
    {
        "name": "Birkenfeld u.a.",
        "code": "55765"
    },
    {
        "name": "Bonn",
        "code": "53173"
    },
    {
        "name": "Wuppertal",
        "code": "42107"
    },
    {
        "name": "Remscheid",
        "code": "42855"
    },
    {
        "name": "Lohmar",
        "code": "53797"
    },
    {
        "name": "Herne",
        "code": "44628"
    },
    {
        "name": "Bochum",
        "code": "44803"
    },
    {
        "name": "Burgbrohl",
        "code": "56659"
    },
    {
        "name": "Weeze",
        "code": "47652"
    },
    {
        "name": "Roetgen",
        "code": "52159"
    },
    {
        "name": "Monschau",
        "code": "52156"
    },
    {
        "name": "Aldenhoven",
        "code": "52457"
    },
    {
        "name": "Rheinberg",
        "code": "47495"
    },
    {
        "name": "Rehlingen-Siersburg",
        "code": "66780"
    },
    {
        "name": "Welschbillig, Igel, Aach",
        "code": "54298"
    },
    {
        "name": "Neuss",
        "code": "41472"
    },
    {
        "name": "Zerf",
        "code": "54314"
    },
    {
        "name": "Duisburg",
        "code": "47167"
    },
    {
        "name": "Düsseldorf",
        "code": "40233"
    },
    {
        "name": "Dormagen",
        "code": "41539"
    },
    {
        "name": "Malborn",
        "code": "54426"
    },
    {
        "name": "Köln",
        "code": "50667"
    },
    {
        "name": "Essen",
        "code": "45145"
    },
    {
        "name": "Malborn",
        "code": "54426"
    },
    {
        "name": "Saarbrücken",
        "code": "66133"
    },
    {
        "name": "Ingolstadt",
        "code": "85057"
    },
    {
        "name": "Apolda",
        "code": "99510"
    },
    {
        "name": "Ilmmünster",
        "code": "85304"
    },
    {
        "name": "Bad Tölz, Wackersberg",
        "code": "83646"
    },
    {
        "name": "Dietramszell",
        "code": "83623"
    },
    {
        "name": "München",
        "code": "80992"
    },
    {
        "name": "Jena, Bucha, Großpürschütz u.a.",
        "code": "07751"
    },
    {
        "name": "Neuenmarkt",
        "code": "95339"
    },
    {
        "name": "Münchsmünster",
        "code": "85126"
    },
    {
        "name": "Neustadt/ Orla",
        "code": "07806"
    },
    {
        "name": "Neustadt a.d. Donau",
        "code": "93333"
    },
    {
        "name": "Zolling",
        "code": "85406"
    },
    {
        "name": "Oberding",
        "code": "85445"
    },
    {
        "name": "Marzling",
        "code": "85417"
    },
    {
        "name": "Leupoldsgrün",
        "code": "95191"
    },
    {
        "name": "Satow",
        "code": "18239"
    },
    {
        "name": "Südliches Anhalt, Köthen",
        "code": "06388"
    },
    {
        "name": "Südliches Anhalt u.a.",
        "code": "06369"
    },
    {
        "name": "Kulmain",
        "code": "95508"
    },
    {
        "name": "Halle/ Saale",
        "code": "06120"
    },
    {
        "name": "Saal a.d. Donau",
        "code": "93342"
    },
    {
        "name": "Steinbach-Hallenberg",
        "code": "98587"
    },
    {
        "name": "Klein Wesenberg",
        "code": "23860"
    },
    {
        "name": "Braunschweig",
        "code": "38102"
    },
    {
        "name": "Sassenburg",
        "code": "38524"
    },
    {
        "name": "Lübeck",
        "code": "23560"
    },
    {
        "name": "Braunlage",
        "code": "38700"
    },
    {
        "name": "Unterschwaningen",
        "code": "91743"
    },
    {
        "name": "Hopferau",
        "code": "87659"
    },
    {
        "name": "Schöppenstedt",
        "code": "38170"
    },
    {
        "name": "Lisberg",
        "code": "96170"
    },
    {
        "name": "Schönwalde am Bungsberg",
        "code": "23744"
    },
    {
        "name": "Oberhof",
        "code": "98559"
    },
    {
        "name": "Lübeck",
        "code": "23569"
    },
    {
        "name": "Lechbruck",
        "code": "86983"
    },
    {
        "name": "Tosterglope",
        "code": "21371"
    },
    {
        "name": "Aurachtal",
        "code": "91086"
    },
    {
        "name": "Ilmenau",
        "code": "98693"
    },
    {
        "name": "Bamberg",
        "code": "96049"
    },
    {
        "name": "Königslutter am Elm",
        "code": "38154"
    },
    {
        "name": "Beierstedt",
        "code": "38382"
    },
    {
        "name": "Niederschönenfeld",
        "code": "86694"
    },
    {
        "name": "Prittriching",
        "code": "86931"
    },
    {
        "name": "Wildsteig",
        "code": "82409"
    },
    {
        "name": "Staffelstein",
        "code": "96231"
    },
    {
        "name": "Fürth",
        "code": "90765"
    },
    {
        "name": "Kindelbrück",
        "code": "99638"
    },
    {
        "name": "Peißenberg",
        "code": "82380"
    },
    {
        "name": "Berlin Neukölln",
        "code": "12059"
    },
    {
        "name": "Berlin Lichtenberg",
        "code": "10369"
    },
    {
        "name": "Freyung",
        "code": "94078"
    },
    {
        "name": "Berlin Köpenik",
        "code": "12555"
    },
    {
        "name": "Dresden",
        "code": "01156"
    },
    {
        "name": "Radebeul",
        "code": "01445"
    },
    {
        "name": "Märkisch Buchholz",
        "code": "15748"
    },
    {
        "name": "Heidenau",
        "code": "01809"
    },
    {
        "name": "Dresden",
        "code": "01237"
    },
    {
        "name": "Löcknitz, Rothenklempenow",
        "code": "17321"
    },
    {
        "name": "Schleife",
        "code": "02959"
    },
    {
        "name": "Weißwasser, Boxberg",
        "code": "02943"
    },
    {
        "name": "Hähnichen, Horka, Kodersdorf",
        "code": "02923"
    },
    {
        "name": "Egeln, Borne, Wolmirsleben u.a.",
        "code": "39435"
    },
    {
        "name": "Hersbruck",
        "code": "91217"
    },
    {
        "name": "Bad Heilbrunn",
        "code": "83670"
    },
    {
        "name": "München",
        "code": "80689"
    },
    {
        "name": "München",
        "code": "80687"
    },
    {
        "name": "Hohenkammer",
        "code": "85411"
    },
    {
        "name": "Staßfurt",
        "code": "39418"
    },
    {
        "name": "Gesees",
        "code": "95494"
    },
    {
        "name": "Ranis",
        "code": "07389"
    },
    {
        "name": "Warin",
        "code": "19417"
    },
    {
        "name": "Geisenfeld",
        "code": "85290"
    },
    {
        "name": "Taufkirchen",
        "code": "82024"
    },
    {
        "name": "Kastl",
        "code": "92280"
    },
    {
        "name": "Stammbach",
        "code": "95236"
    },
    {
        "name": "Bernburg (Saale)",
        "code": "06406"
    },
    {
        "name": "Münchberg",
        "code": "95213"
    },
    {
        "name": "Rochau",
        "code": "39579"
    },
    {
        "name": "Rudelzhausen",
        "code": "84104"
    },
    {
        "name": "Selbitz",
        "code": "95152"
    },
    {
        "name": "Schönebeck (Elbe)",
        "code": "39217"
    },
    {
        "name": "Finsing",
        "code": "85464"
    },
    {
        "name": "Vaterstetten",
        "code": "85591"
    },
    {
        "name": "Train",
        "code": "93358"
    },
    {
        "name": "Feldkirchen-Westerham",
        "code": "83620"
    },
    {
        "name": "Marnitz, Siggelkow",
        "code": "19376"
    },
    {
        "name": "Kirchseeon",
        "code": "85614"
    },
    {
        "name": "Polling",
        "code": "82398"
    },
    {
        "name": "Heiligenstadt i. OFr.",
        "code": "91332"
    },
    {
        "name": "Sielenbach",
        "code": "86577"
    },
    {
        "name": "Wallgau",
        "code": "82499"
    },
    {
        "name": "Alling",
        "code": "82239"
    },
    {
        "name": "Lemgow",
        "code": "29485"
    },
    {
        "name": "Hilgertshausen-Tandern",
        "code": "86567"
    },
    {
        "name": "Seeland",
        "code": "06467"
    },
    {
        "name": "Schlehdorf",
        "code": "82444"
    },
    {
        "name": "Waidhofen",
        "code": "86579"
    },
    {
        "name": "Wilhelmsthal",
        "code": "96352"
    },
    {
        "name": "Schwerin",
        "code": "19061"
    },
    {
        "name": "Teuchern",
        "code": "06682"
    },
    {
        "name": "Halle/ Saale",
        "code": "06118"
    },
    {
        "name": "Schwaan u.a.",
        "code": "18258"
    },
    {
        "name": "Rott a. Inn",
        "code": "83543"
    },
    {
        "name": "Dessau-Roßlau",
        "code": "06847"
    },
    {
        "name": "Rostock, Gelbensande, Rövershagen u.a.",
        "code": "18182"
    },
    {
        "name": "Elsteraue",
        "code": "06729"
    },
    {
        "name": "Tirschenreuth",
        "code": "95643"
    },
    {
        "name": "Buchbach",
        "code": "84428"
    },
    {
        "name": "Meuselwitz",
        "code": "04610"
    },
    {
        "name": "Bayerbach bei Ergoldsbach",
        "code": "84092"
    },
    {
        "name": "Ampfing",
        "code": "84539"
    },
    {
        "name": "Markkleeberg",
        "code": "04416"
    },
    {
        "name": "Dieterskirchen",
        "code": "92542"
    },
    {
        "name": "Marquartstein",
        "code": "83250"
    },
    {
        "name": "Altenmarkt a.d. Alz",
        "code": "83352"
    },
    {
        "name": "Roding",
        "code": "93426"
    },
    {
        "name": "Ruhpolding",
        "code": "83324"
    },
    {
        "name": "Vachendorf",
        "code": "83377"
    },
    {
        "name": "Brandis",
        "code": "04821"
    },
    {
        "name": "Barth",
        "code": "18356"
    },
    {
        "name": "Zandt",
        "code": "93499"
    },
    {
        "name": "Lugau/Erzgeb.",
        "code": "09385"
    },
    {
        "name": "Erlbach",
        "code": "84567"
    },
    {
        "name": "Fehrbellin, Temnitzquell, Märkisch Linden u.a.",
        "code": "16818"
    },
    {
        "name": "Viechtach",
        "code": "94234"
    },
    {
        "name": "Hohenwarth",
        "code": "93480"
    },
    {
        "name": "Sehma",
        "code": "09465"
    },
    {
        "name": "Nuthe-Urstromtal",
        "code": "14947"
    },
    {
        "name": "Bischofsmais",
        "code": "94253"
    },
    {
        "name": "Ering",
        "code": "94140"
    },
    {
        "name": "Börnichen, Gornau",
        "code": "09437"
    },
    {
        "name": "Hofkirchen",
        "code": "94544"
    },
    {
        "name": "Oederan",
        "code": "09569"
    },
    {
        "name": "Rinchnach",
        "code": "94269"
    },
    {
        "name": "Berlin Zehlendorf",
        "code": "14163"
    },
    {
        "name": "Berlin Zehlendorf",
        "code": "14169"
    },
    {
        "name": "Tiefenbach",
        "code": "94113"
    },
    {
        "name": "Gingst",
        "code": "18569"
    },
    {
        "name": "Berlin Mariendorf",
        "code": "12105"
    },
    {
        "name": "Ruderting",
        "code": "94161"
    },
    {
        "name": "Berlin Gesundbrunnen",
        "code": "13359"
    },
    {
        "name": "Berlin Tempelhof",
        "code": "12099"
    },
    {
        "name": "Berlin Prenzlauer Berg",
        "code": "10439"
    },
    {
        "name": "Berlin Neukölln",
        "code": "12049"
    },
    {
        "name": "Hennstedt",
        "code": "25581"
    },
    {
        "name": "Otter",
        "code": "21259"
    },
    {
        "name": "Wrist",
        "code": "25563"
    },
    {
        "name": "Untermünkheim",
        "code": "74547"
    },
    {
        "name": "Moringen",
        "code": "37186"
    },
    {
        "name": "Hannover",
        "code": "30459"
    },
    {
        "name": "Hannover",
        "code": "30165"
    },
    {
        "name": "Bebra",
        "code": "36179"
    },
    {
        "name": "Fitzbek",
        "code": "25579"
    },
    {
        "name": "Hannover",
        "code": "30163"
    },
    {
        "name": "Donzdorf",
        "code": "73072"
    },
    {
        "name": "Hofbieber",
        "code": "36145"
    },
    {
        "name": "Sehestedt",
        "code": "24814"
    },
    {
        "name": "Burgwedel",
        "code": "30938"
    },
    {
        "name": "Stoltebüll",
        "code": "24409"
    },
    {
        "name": "Giesen",
        "code": "31180"
    },
    {
        "name": "Geroda",
        "code": "97779"
    },
    {
        "name": "Blumenthal",
        "code": "24241"
    },
    {
        "name": "Munster",
        "code": "29633"
    },
    {
        "name": "Hamburg",
        "code": "20459"
    },
    {
        "name": "Hamburg",
        "code": "20148"
    },
    {
        "name": "Herleshausen",
        "code": "37293"
    },
    {
        "name": "Ballendorf",
        "code": "89177"
    },
    {
        "name": "Hamburg",
        "code": "22309"
    },
    {
        "name": "Illertissen",
        "code": "89257"
    },
    {
        "name": "Altusried",
        "code": "87452"
    },
    {
        "name": "Börnhöved",
        "code": "24619"
    },
    {
        "name": "Woringen",
        "code": "87789"
    },
    {
        "name": "Ellenberg",
        "code": "73488"
    },
    {
        "name": "Meiningen",
        "code": "98617"
    },
    {
        "name": "Wörnitz",
        "code": "91637"
    },
    {
        "name": "Peine",
        "code": "31224"
    },
    {
        "name": "Seth",
        "code": "23845"
    },
    {
        "name": "Böhen",
        "code": "87736"
    },
    {
        "name": "Wiesenbach",
        "code": "86519"
    },
    {
        "name": "Kempten (Allgäu)",
        "code": "87437"
    },
    {
        "name": "Sulzberg",
        "code": "87477"
    },
    {
        "name": "Mönchsroth",
        "code": "91614"
    },
    {
        "name": "Ruhla",
        "code": "99842"
    },
    {
        "name": "Grabfeld",
        "code": "98631"
    },
    {
        "name": "Hamfelde, Kasseburg, Köthel, Rausdorf, Schönberg",
        "code": "22929"
    },
    {
        "name": "Hamfelde, Kasseburg, Köthel, Rausdorf, Schönberg",
        "code": "22929"
    },
    {
        "name": "Fuhlenhagen",
        "code": "21493"
    },
    {
        "name": "Goslar",
        "code": "38690"
    },
    {
        "name": "Walkenried",
        "code": "37445"
    },
    {
        "name": "Schöffengrund",
        "code": "35641"
    },
    {
        "name": "Altlußheim",
        "code": "68804"
    },
    {
        "name": "Oberursel (Taunus)",
        "code": "61440"
    },
    {
        "name": "Nordenham",
        "code": "26954"
    },
    {
        "name": "Hallig Hooge",
        "code": "25859"
    },
    {
        "name": "Lübbecke",
        "code": "32312"
    },
    {
        "name": "Frankfurt am Main",
        "code": "65936"
    },
    {
        "name": "Bielefeld",
        "code": "33729"
    },
    {
        "name": "Egenhausen",
        "code": "72227"
    },
    {
        "name": "Süderoog, Pellworm",
        "code": "25849"
    },
    {
        "name": "Darmstadt",
        "code": "64285"
    },
    {
        "name": "Leopoldshöhe",
        "code": "33818"
    },
    {
        "name": "Frankfurt am Main",
        "code": "60435"
    },
    {
        "name": "Frankfurt am Main",
        "code": "60318"
    },
    {
        "name": "Rosenthal",
        "code": "35119"
    },
    {
        "name": "Zuzenhausen",
        "code": "74939"
    },
    {
        "name": "Emmingen-Liptingen",
        "code": "78576"
    },
    {
        "name": "Porta Westfalica",
        "code": "32457"
    },
    {
        "name": "Meßstetten",
        "code": "72469"
    },
    {
        "name": "Kronprinzenkoog, Marne u.a.",
        "code": "25709"
    },
    {
        "name": "Schwenningen",
        "code": "72477"
    },
    {
        "name": "Bad Wildungen",
        "code": "34537"
    },
    {
        "name": "Hemmingen",
        "code": "71282"
    },
    {
        "name": "Rottenburg am Neckar",
        "code": "72108"
    },
    {
        "name": "Cadenberge",
        "code": "21781"
    },
    {
        "name": "Extertal",
        "code": "32699"
    },
    {
        "name": "Löchgau",
        "code": "74369"
    },
    {
        "name": "Hennstedt",
        "code": "25779"
    },
    {
        "name": "Joldelund",
        "code": "25862"
    },
    {
        "name": "Leingarten",
        "code": "74211"
    },
    {
        "name": "Osten",
        "code": "21756"
    },
    {
        "name": "Estorf",
        "code": "21727"
    },
    {
        "name": "Trochtelfingen",
        "code": "72818"
    },
    {
        "name": "Stapel",
        "code": "25879"
    },
    {
        "name": "Krombach",
        "code": "63829"
    },
    {
        "name": "Hettingen",
        "code": "72513"
    },
    {
        "name": "Delve",
        "code": "25788"
    },
    {
        "name": "Rohrsen",
        "code": "31627"
    },
    {
        "name": "Heemsen",
        "code": "31622"
    },
    {
        "name": "Beckedorf",
        "code": "31699"
    },
    {
        "name": "Eggebek, Langstedt, Sollerup, Süderhackstedt",
        "code": "24852"
    },
    {
        "name": "Bermatingen",
        "code": "88697"
    },
    {
        "name": "Brevörde, Polle, Vahlbruch",
        "code": "37647"
    },
    {
        "name": "Leutenbach",
        "code": "71397"
    },
    {
        "name": "Felsberg",
        "code": "34587"
    },
    {
        "name": "Wilhelmsdorf",
        "code": "88271"
    },
    {
        "name": "Plochingen",
        "code": "73207"
    },
    {
        "name": "Borsfleth",
        "code": "25376"
    },
    {
        "name": "Oldendorf",
        "code": "25588"
    },
    {
        "name": "Woltersdorf, Müssen u.a.",
        "code": "21516"
    },
    {
        "name": "Aichen",
        "code": "86479"
    },
    {
        "name": "Burgwindheim",
        "code": "96154"
    },
    {
        "name": "Deiningen",
        "code": "86738"
    },
    {
        "name": "Sand a. Main",
        "code": "97522"
    },
    {
        "name": "Berkenthin",
        "code": "23919"
    },
    {
        "name": "Thomasburg",
        "code": "21401"
    },
    {
        "name": "Harburg",
        "code": "86655"
    },
    {
        "name": "Lübeck",
        "code": "23566"
    },
    {
        "name": "Amt Neuhaus, Stapel",
        "code": "19273"
    },
    {
        "name": "Ingenried",
        "code": "86980"
    },
    {
        "name": "Wehringen",
        "code": "86517"
    },
    {
        "name": "Burggen",
        "code": "86977"
    },
    {
        "name": "Gerach",
        "code": "96161"
    },
    {
        "name": "Meeder",
        "code": "96484"
    },
    {
        "name": "Räbke",
        "code": "38375"
    },
    {
        "name": "Söllingen",
        "code": "38387"
    },
    {
        "name": "Parsau",
        "code": "38470"
    },
    {
        "name": "Königsbrunn",
        "code": "86343"
    },
    {
        "name": "Augsburg",
        "code": "86169"
    },
    {
        "name": "Waddeweitz",
        "code": "29496"
    },
    {
        "name": "Fürth",
        "code": "90768"
    },
    {
        "name": "Merching",
        "code": "86504"
    },
    {
        "name": "Erlangen",
        "code": "91056"
    },
    {
        "name": "Erfurt",
        "code": "99094"
    },
    {
        "name": "Hausen",
        "code": "91353"
    },
    {
        "name": "Höttingen",
        "code": "91798"
    },
    {
        "name": "Petersdorf",
        "code": "86574"
    },
    {
        "name": "Erlangen",
        "code": "91052"
    },
    {
        "name": "Baiersdorf",
        "code": "91083"
    },
    {
        "name": "Grub a. Forst",
        "code": "96271"
    },
    {
        "name": "Lützkampen",
        "code": "54617"
    },
    {
        "name": "Stolberg (Rhld.)",
        "code": "52223"
    },
    {
        "name": "Eschweiler",
        "code": "52249"
    },
    {
        "name": "Geldern",
        "code": "47608"
    },
    {
        "name": "Arzfeld",
        "code": "54687"
    },
    {
        "name": "Monschau",
        "code": "52156"
    },
    {
        "name": "Wincheringen",
        "code": "54457"
    },
    {
        "name": "Bocholt",
        "code": "46395"
    },
    {
        "name": "Konz",
        "code": "54329"
    },
    {
        "name": "Wesel",
        "code": "46483"
    },
    {
        "name": "Bergheim",
        "code": "50127"
    },
    {
        "name": "Trier",
        "code": "54292"
    },
    {
        "name": "Bergheim",
        "code": "50129"
    },
    {
        "name": "Überherrn",
        "code": "66802"
    },
    {
        "name": "Üxheim",
        "code": "54579"
    },
    {
        "name": "Kenn",
        "code": "54344"
    },
    {
        "name": "Düsseldorf",
        "code": "40221"
    },
    {
        "name": "Duisburg",
        "code": "47269"
    },
    {
        "name": "Düsseldorf",
        "code": "40213"
    },
    {
        "name": "Düsseldorf",
        "code": "40227"
    },
    {
        "name": "Mülheim an der Ruhr",
        "code": "45476"
    },
    {
        "name": "Neumagen-Dhron",
        "code": "54347"
    },
    {
        "name": "Köln",
        "code": "50823"
    },
    {
        "name": "Köln",
        "code": "50672"
    },
    {
        "name": "Ulmen",
        "code": "56766"
    },
    {
        "name": "Reken",
        "code": "48734"
    },
    {
        "name": "Köln",
        "code": "50999"
    },
    {
        "name": "Illingen",
        "code": "66557"
    },
    {
        "name": "Marpingen",
        "code": "66646"
    },
    {
        "name": "Köln",
        "code": "51065"
    },
    {
        "name": "Gelsenkirchen",
        "code": "45894"
    },
    {
        "name": "Velbert",
        "code": "42551"
    },
    {
        "name": "Bonn",
        "code": "53123"
    },
    {
        "name": "Solingen",
        "code": "42655"
    },
    {
        "name": "Vogtsburg im Kaiserstuhl",
        "code": "79235"
    },
    {
        "name": "Sasbach am Kaiserstuhl",
        "code": "79361"
    },
    {
        "name": "Koblenz",
        "code": "56068"
    },
    {
        "name": "Niederburg",
        "code": "55432"
    },
    {
        "name": "Waldfischbach-Burgalben",
        "code": "67714"
    },
    {
        "name": "Höhr-Grenzhausen",
        "code": "56203"
    },
    {
        "name": "Rodenbach",
        "code": "67688"
    },
    {
        "name": "Kleinmaischeid",
        "code": "56271"
    },
    {
        "name": "Rheinhausen",
        "code": "79365"
    },
    {
        "name": "Dahn",
        "code": "66994"
    },
    {
        "name": "Obermoschel, Schiersfeld",
        "code": "67823"
    },
    {
        "name": "Katzwinkel (Sieg)",
        "code": "57581"
    },
    {
        "name": "Berlin Neukölln",
        "code": "12045"
    },
    {
        "name": "Berlin Neukölln",
        "code": "12057"
    },
    {
        "name": "Berlin Buch",
        "code": "13125"
    },
    {
        "name": "Berlin",
        "code": "12557"
    },
    {
        "name": "Berlin Mahlsdorf",
        "code": "12623"
    },
    {
        "name": "Dresden",
        "code": "01139"
    },
    {
        "name": "Elstra, Oßling u.a.",
        "code": "01920"
    },
    {
        "name": "Großröhrsdorf, Bretnig-Hauswalde",
        "code": "01900"
    },
    {
        "name": "Cottbus",
        "code": "03046"
    },
    {
        "name": "Lohsa",
        "code": "02999"
    },
    {
        "name": "Cottbus",
        "code": "03053"
    },
    {
        "name": "Großschönau",
        "code": "02779"
    },
    {
        "name": "Reichenbach, Vierkirchen",
        "code": "02894"
    },
    {
        "name": "Battweiler u.a.",
        "code": "66484"
    },
    {
        "name": "Dortmund",
        "code": "44139"
    },
    {
        "name": "Mülheim-Kärlich",
        "code": "56218"
    },
    {
        "name": "Oberlahr",
        "code": "57641"
    },
    {
        "name": "Hagen",
        "code": "58093"
    },
    {
        "name": "Greven",
        "code": "48268"
    },
    {
        "name": "Pirmasens",
        "code": "66955"
    },
    {
        "name": "Freiburg im Breisgau",
        "code": "79106"
    },
    {
        "name": "Finnentrop",
        "code": "57413"
    },
    {
        "name": "Weitefeld",
        "code": "57586"
    },
    {
        "name": "Kreuztal",
        "code": "57223"
    },
    {
        "name": "Bad Marienberg (Westerwald)",
        "code": "56470"
    },
    {
        "name": "Schlangenbad",
        "code": "65388"
    },
    {
        "name": "Achern (Abweichung Exklaven)",
        "code": "77855"
    },
    {
        "name": "Schönborn",
        "code": "56370"
    },
    {
        "name": "Ottersweier",
        "code": "77833"
    },
    {
        "name": "Zell am Harmersbach",
        "code": "77736"
    },
    {
        "name": "Bühl",
        "code": "77815"
    },
    {
        "name": "Albig",
        "code": "55234"
    },
    {
        "name": "Albbruck",
        "code": "79774"
    },
    {
        "name": "Schollbrunn",
        "code": "97852"
    },
    {
        "name": "Stade",
        "code": "21680"
    },
    {
        "name": "Breiholz, Tackesdorf-Nord",
        "code": "24797"
    },
    {
        "name": "Kassel, Fuldatal",
        "code": "34233"
    },
    {
        "name": "Schlierbach",
        "code": "73278"
    },
    {
        "name": "Melsungen",
        "code": "34212"
    },
    {
        "name": "Fellen",
        "code": "97778"
    },
    {
        "name": "Schleswig",
        "code": "24837"
    },
    {
        "name": "Esselbach",
        "code": "97839"
    },
    {
        "name": "Murrhardt",
        "code": "71540"
    },
    {
        "name": "Bad Hersfeld, Ludwigsau",
        "code": "36251"
    },
    {
        "name": "Ravensburg",
        "code": "88213"
    },
    {
        "name": "Karlstadt",
        "code": "97753"
    },
    {
        "name": "Wiesbaden",
        "code": "65199"
    },
    {
        "name": "Wadersloh",
        "code": "59329"
    },
    {
        "name": "Weilheim",
        "code": "79809"
    },
    {
        "name": "Lohne",
        "code": "49393"
    },
    {
        "name": "Venningen",
        "code": "67482"
    },
    {
        "name": "Sasbach",
        "code": "77880"
    },
    {
        "name": "Vöhrenbach",
        "code": "78147"
    },
    {
        "name": "Ellerstadt",
        "code": "67158"
    },
    {
        "name": "Worms",
        "code": "67551"
    },
    {
        "name": "Trebur",
        "code": "65468"
    },
    {
        "name": "Solingen",
        "code": "42659"
    },
    {
        "name": "Saarbrücken",
        "code": "66131"
    },
    {
        "name": "Odenthal",
        "code": "51519"
    },
    {
        "name": "Bell",
        "code": "56745"
    },
    {
        "name": "Wuppertal",
        "code": "42105"
    },
    {
        "name": "Kirkel",
        "code": "66459"
    },
    {
        "name": "Bochum",
        "code": "44801"
    },
    {
        "name": "Breitscheid, Dattenberg, Hausen, Hümmerich, Kasbach-Ohlenberg, Roßbach u.a.",
        "code": "53547"
    },
    {
        "name": "Witten",
        "code": "58455"
    },
    {
        "name": "Neunkirchen-Seelscheid",
        "code": "53819"
    },
    {
        "name": "Kastellaun",
        "code": "56288"
    },
    {
        "name": "Plaidt",
        "code": "56637"
    },
    {
        "name": "Breckerfeld",
        "code": "58339"
    },
    {
        "name": "Halle/ Saale",
        "code": "06122"
    },
    {
        "name": "Marktleuthen",
        "code": "95168"
    },
    {
        "name": "Bruckberg",
        "code": "84079"
    },
    {
        "name": "Pettendorf",
        "code": "93186"
    },
    {
        "name": "Kohlberg",
        "code": "92702"
    },
    {
        "name": "Weißenfels",
        "code": "06688"
    },
    {
        "name": "Rostock, Papendorf u.a.",
        "code": "18059"
    },
    {
        "name": "Raubling",
        "code": "83064"
    },
    {
        "name": "Weiden in der OPf., Theisseil",
        "code": "92637"
    },
    {
        "name": "Regensburg",
        "code": "93047"
    },
    {
        "name": "Plauen",
        "code": "08523"
    },
    {
        "name": "Stulln",
        "code": "92551"
    },
    {
        "name": "Schkeuditz",
        "code": "04435"
    },
    {
        "name": "Babensham",
        "code": "83547"
    },
    {
        "name": "Neustadt (Dosse) u.a.",
        "code": "16845"
    },
    {
        "name": "Wredenhagen",
        "code": "17209"
    },
    {
        "name": "Bitterfeld-Wolfen",
        "code": "06749"
    },
    {
        "name": "Lengenfeld",
        "code": "08485"
    },
    {
        "name": "Sanitz",
        "code": "18190"
    },
    {
        "name": "Rackwitz",
        "code": "04519"
    },
    {
        "name": "Leipzig",
        "code": "04177"
    },
    {
        "name": "Zell",
        "code": "93199"
    },
    {
        "name": "Kraiburg a. Inn",
        "code": "84559"
    },
    {
        "name": "Grabowhöfe, Moltzow u.a.",
        "code": "17194"
    },
    {
        "name": "Klingenthal/Sa.",
        "code": "08248"
    },
    {
        "name": "Leipzig",
        "code": "04288"
    },
    {
        "name": "Wittenberg",
        "code": "06886"
    },
    {
        "name": "Frohburg",
        "code": "04654"
    },
    {
        "name": "Zingst a. Darß",
        "code": "18374"
    },
    {
        "name": "Tittmoning",
        "code": "84529"
    },
    {
        "name": "Möllenbeck",
        "code": "17237"
    },
    {
        "name": "Chemnitz",
        "code": "09122"
    },
    {
        "name": "Dallgow-Döberitz",
        "code": "14624"
    },
    {
        "name": "Hengersberg",
        "code": "94491"
    },
    {
        "name": "Iggensbach",
        "code": "94547"
    },
    {
        "name": "Großschirma",
        "code": "09603"
    },
    {
        "name": "Teltow",
        "code": "14513"
    },
    {
        "name": "Berlin Frohnau",
        "code": "13465"
    },
    {
        "name": "Berlin Wilmersdorf",
        "code": "10717"
    },
    {
        "name": "Lichtenberg/Erzgeb.",
        "code": "09638"
    },
    {
        "name": "Berlin Schöneberg",
        "code": "10779"
    },
    {
        "name": "Blankenfelde-Mahlow",
        "code": "15831"
    },
    {
        "name": "Nünchritz, Glaubitz",
        "code": "01612"
    },
    {
        "name": "Greifswald",
        "code": "17491"
    },
    {
        "name": "Berlin Neukölln",
        "code": "12051"
    },
    {
        "name": "Berlin Weißensee",
        "code": "13088"
    },
    {
        "name": "Berlin Teltowkanal III",
        "code": "12489"
    },
    {
        "name": "Berlin",
        "code": "12685"
    },
    {
        "name": "Berlin",
        "code": "12679"
    },
    {
        "name": "Berlin Hellersdorf",
        "code": "12627"
    },
    {
        "name": "Dresden",
        "code": "01257"
    },
    {
        "name": "Radeberg, Wachau",
        "code": "01454"
    },
    {
        "name": "Pirna, Struppen, Dohma",
        "code": "01796"
    },
    {
        "name": "Vogelsang-Warsin, Meiersberg, Mönkebude u.a.",
        "code": "17375"
    },
    {
        "name": "Wehlen",
        "code": "01829"
    },
    {
        "name": "Senftenberg",
        "code": "01996"
    },
    {
        "name": "Cottbus",
        "code": "03044"
    },
    {
        "name": "Treplin, Jacobsdorf, Frankfurt (Oder)",
        "code": "15236"
    },
    {
        "name": "Treplin, Jacobsdorf, Frankfurt (Oder)",
        "code": "15236"
    },
    {
        "name": "Jänschwalde",
        "code": "03197"
    },
    {
        "name": "Frankfurt/ Oder",
        "code": "15232"
    },
    {
        "name": "Krauschwitz, Weißkeißel",
        "code": "02957"
    },
    {
        "name": "Hamm",
        "code": "59069"
    },
    {
        "name": "Niederfischbach",
        "code": "57572"
    },
    {
        "name": "Bad Kreuznach",
        "code": "55543"
    },
    {
        "name": "Enkenbach-Alsenborn",
        "code": "67677"
    },
    {
        "name": "Freiburg im Breisgau",
        "code": "79102"
    },
    {
        "name": "Malberg, Norken, Höchstenbach u.a.",
        "code": "57629"
    },
    {
        "name": "Kirchzarten",
        "code": "79199"
    },
    {
        "name": "Daaden",
        "code": "57567"
    },
    {
        "name": "Sprendlingen",
        "code": "55576"
    },
    {
        "name": "Arnsberg",
        "code": "59755"
    },
    {
        "name": "Cappeln (Oldenburg)",
        "code": "49692"
    },
    {
        "name": "Osnabrück",
        "code": "49082"
    },
    {
        "name": "Siegen",
        "code": "57074"
    },
    {
        "name": "Hinterzarten",
        "code": "79856"
    },
    {
        "name": "Eslohe",
        "code": "59889"
    },
    {
        "name": "Aachen",
        "code": "52070"
    },
    {
        "name": "Üttfeld",
        "code": "54619"
    },
    {
        "name": "Stolberg",
        "code": "52224"
    },
    {
        "name": "Uedem",
        "code": "47589"
    },
    {
        "name": "Kevelaer-Kervenheim",
        "code": "47627"
    },
    {
        "name": "Jülich",
        "code": "52428"
    },
    {
        "name": "Ferschweiler",
        "code": "54668"
    },
    {
        "name": "Isselburg",
        "code": "46419"
    },
    {
        "name": "Mönchengladbach",
        "code": "41238"
    },
    {
        "name": "Bitburg",
        "code": "54634"
    },
    {
        "name": "Badem, Gindorf, Neidenbach",
        "code": "54657"
    },
    {
        "name": "Trier",
        "code": "54294"
    },
    {
        "name": "Pelm, Neroth u.a.",
        "code": "54570"
    },
    {
        "name": "Trier",
        "code": "54296"
    },
    {
        "name": "Kerpen",
        "code": "50170"
    },
    {
        "name": "Pellingen",
        "code": "54331"
    },
    {
        "name": "Duisburg",
        "code": "47228"
    },
    {
        "name": "Osburg, Gusterath, Farschweiler, Kasel u.a.",
        "code": "54317"
    },
    {
        "name": "Waldrach",
        "code": "54320"
    },
    {
        "name": "Reifferscheid, Kaltenborn, Wershofen u.a.",
        "code": "53520"
    },
    {
        "name": "Weilerswist",
        "code": "53919"
    },
    {
        "name": "Düsseldorf",
        "code": "40210"
    },
    {
        "name": "Düsseldorf",
        "code": "40211"
    },
    {
        "name": "Mülheim an der Ruhr",
        "code": "45472"
    },
    {
        "name": "Gescher",
        "code": "48712"
    },
    {
        "name": "Essen",
        "code": "45131"
    },
    {
        "name": "Mülheim (Mosel)",
        "code": "54486"
    },
    {
        "name": "Wuppertal",
        "code": "42329"
    },
    {
        "name": "Legden",
        "code": "48739"
    },
    {
        "name": "Steinwenden u.a.",
        "code": "66879"
    },
    {
        "name": "Lünen",
        "code": "44532"
    },
    {
        "name": "Medard, Rathskirchen u.a.",
        "code": "67744"
    },
    {
        "name": "Bergkamen",
        "code": "59192"
    },
    {
        "name": "Kamp-Bornhofen-Filsen",
        "code": "56341"
    },
    {
        "name": "Münster",
        "code": "48151"
    },
    {
        "name": "Großmaischeid",
        "code": "56276"
    },
    {
        "name": "Schallbach",
        "code": "79597"
    },
    {
        "name": "Bergneustadt",
        "code": "51702"
    },
    {
        "name": "Grenzach-Wyhlen",
        "code": "79639"
    },
    {
        "name": "Krickenbach",
        "code": "67706"
    },
    {
        "name": "Mammelzen",
        "code": "57636"
    },
    {
        "name": "Fachbach, Exklave Lahnstein",
        "code": "56133"
    },
    {
        "name": "Schopp",
        "code": "67707"
    },
    {
        "name": "Nußbach",
        "code": "67759"
    },
    {
        "name": "Kaiserslautern",
        "code": "67661"
    },
    {
        "name": "Werdohl",
        "code": "58791"
    },
    {
        "name": "Hachenburg",
        "code": "57627"
    },
    {
        "name": "Schopfheim",
        "code": "79650"
    },
    {
        "name": "Freiburg im Breisgau",
        "code": "79108"
    },
    {
        "name": "Alsenz",
        "code": "67821"
    },
    {
        "name": "Attendorn",
        "code": "57439"
    },
    {
        "name": "Belm",
        "code": "49191"
    },
    {
        "name": "Lenzkirch",
        "code": "79853"
    },
    {
        "name": "Mengerskirchen",
        "code": "35794"
    },
    {
        "name": "Villmar",
        "code": "65606"
    },
    {
        "name": "Oldenburg (Oldenburg)",
        "code": "26127"
    },
    {
        "name": "Flörsheim-Dalsheim",
        "code": "67592"
    },
    {
        "name": "Mainz",
        "code": "55128"
    },
    {
        "name": "Erwitte",
        "code": "59597"
    },
    {
        "name": "Offstein",
        "code": "67591"
    },
    {
        "name": "Worms",
        "code": "67550"
    },
    {
        "name": "Schramberg",
        "code": "78144"
    },
    {
        "name": "Lauchringen",
        "code": "79787"
    },
    {
        "name": "Unterkirnach",
        "code": "78089"
    },
    {
        "name": "Unterkirnach",
        "code": "78089"
    },
    {
        "name": "Vettelschloß, Kretzhaus (Linz am Rhein)",
        "code": "53560"
    },
    {
        "name": "Bochum",
        "code": "44892"
    },
    {
        "name": "Münstermaifeld",
        "code": "56294"
    },
    {
        "name": "Dortmund",
        "code": "44379"
    },
    {
        "name": "Kobern-Gondorf",
        "code": "56330"
    },
    {
        "name": "Selm",
        "code": "59379"
    },
    {
        "name": "Ediger-Eller",
        "code": "56814"
    },
    {
        "name": "Solingen",
        "code": "42651"
    },
    {
        "name": "Peterswald-Löffelscheid u.a.",
        "code": "56858"
    },
    {
        "name": "Recklinghausen",
        "code": "45661"
    },
    {
        "name": "Emden",
        "code": "26725"
    },
    {
        "name": "Peterswald-Löffelscheid u.a.",
        "code": "56858"
    },
    {
        "name": "Pommern",
        "code": "56829"
    },
    {
        "name": "Henfenfeld",
        "code": "91239"
    },
    {
        "name": "Dorf Mecklenburg, Lübow u.a.",
        "code": "23972"
    },
    {
        "name": "Geretsried",
        "code": "82538"
    },
    {
        "name": "Velden/Hartenstein",
        "code": "91235"
    },
    {
        "name": "Lauterhofen",
        "code": "92283"
    },
    {
        "name": "Eckartsberga",
        "code": "06648"
    },
    {
        "name": "Glashütten",
        "code": "95496"
    },
    {
        "name": "Wurzbach",
        "code": "07343"
    },
    {
        "name": "München",
        "code": "81479"
    },
    {
        "name": "Ernsgaden",
        "code": "85119"
    },
    {
        "name": "München",
        "code": "80797"
    },
    {
        "name": "Unterhaching",
        "code": "82008"
    },
    {
        "name": "Dornburg-Camburg u.a.",
        "code": "07774"
    },
    {
        "name": "Magdeburg",
        "code": "39124"
    },
    {
        "name": "Au in der Hallertau",
        "code": "84072"
    },
    {
        "name": "Issigau",
        "code": "95188"
    },
    {
        "name": "Kemnath",
        "code": "95478"
    },
    {
        "name": "Bad Kohlgrub",
        "code": "82433"
    },
    {
        "name": "Bilzingsleben Kannawurf Oldisleben",
        "code": "06578"
    },
    {
        "name": "Kirchehrenbach",
        "code": "91356"
    },
    {
        "name": "Udestedt, Mönchenholzhausen u.a.",
        "code": "99198"
    },
    {
        "name": "Leutenbach",
        "code": "91359"
    },
    {
        "name": "Thalmässing",
        "code": "91177"
    },
    {
        "name": "Bad Berka u.a.",
        "code": "99438"
    },
    {
        "name": "Ohlstadt",
        "code": "82441"
    },
    {
        "name": "Boltenhagen",
        "code": "23946"
    },
    {
        "name": "Maisach",
        "code": "82216"
    },
    {
        "name": "Falkenstein",
        "code": "06543"
    },
    {
        "name": "Weßling",
        "code": "82234"
    },
    {
        "name": "Wismar, Groß Krankow u.a.",
        "code": "23966"
    },
    {
        "name": "Bad Kleinen u.a.",
        "code": "23996"
    },
    {
        "name": "Thurnau",
        "code": "95349"
    },
    {
        "name": "Haldensleben",
        "code": "39340"
    },
    {
        "name": "Göppingen",
        "code": "73037"
    },
    {
        "name": "Birenbach",
        "code": "73102"
    },
    {
        "name": "Gschwend",
        "code": "74417"
    },
    {
        "name": "Braunsbach",
        "code": "74542"
    },
    {
        "name": "Hamburg",
        "code": "22589"
    },
    {
        "name": "Hettstadt",
        "code": "97265"
    },
    {
        "name": "Hamburg",
        "code": "21149"
    },
    {
        "name": "Ummendorf",
        "code": "88444"
    },
    {
        "name": "Witzenhausen",
        "code": "37215"
    },
    {
        "name": "Jesteburg",
        "code": "21266"
    },
    {
        "name": "Northeim",
        "code": "37154"
    },
    {
        "name": "Hamburg",
        "code": "22527"
    },
    {
        "name": "Ulm",
        "code": "89081"
    },
    {
        "name": "Ulm",
        "code": "89081"
    },
    {
        "name": "Hamburg",
        "code": "21077"
    },
    {
        "name": "Göttingen",
        "code": "37077"
    },
    {
        "name": "Hamburg",
        "code": "22453"
    },
    {
        "name": "Gelchsheim, Sonderhofen",
        "code": "97255"
    },
    {
        "name": "Unterbreizbach",
        "code": "36414"
    },
    {
        "name": "Kiel",
        "code": "24107"
    },
    {
        "name": "Gaukönigshofen",
        "code": "97253"
    },
    {
        "name": "Hamburg",
        "code": "20249"
    },
    {
        "name": "Brackel",
        "code": "21438"
    },
    {
        "name": "Hamburg",
        "code": "22177"
    },
    {
        "name": "Hamburg",
        "code": "22111"
    },
    {
        "name": "Kiel",
        "code": "24145"
    },
    {
        "name": "Nüdlingen",
        "code": "97720"
    },
    {
        "name": "Hamburg",
        "code": "22045"
    },
    {
        "name": "Peine",
        "code": "31226"
    },
    {
        "name": "Tiefenort",
        "code": "36469"
    },
    {
        "name": "Fichtenau",
        "code": "74579"
    },
    {
        "name": "Oberroth",
        "code": "89294"
    },
    {
        "name": "Baddeckenstedt",
        "code": "38271"
    },
    {
        "name": "Küllstedt",
        "code": "37359"
    },
    {
        "name": "Maßbach",
        "code": "97711"
    },
    {
        "name": "Rodeberg, Dünwald u.a.",
        "code": "99976"
    },
    {
        "name": "Breitungen/Werra",
        "code": "98597"
    },
    {
        "name": "Ichenhausen",
        "code": "89335"
    },
    {
        "name": "Rödelsee",
        "code": "97348"
    },
    {
        "name": "Elmenhorst",
        "code": "23869"
    },
    {
        "name": "Gochsheim",
        "code": "97469"
    },
    {
        "name": "Bad Oldesloe",
        "code": "23843"
    },
    {
        "name": "Barchfeld-Immelborn",
        "code": "36456"
    },
    {
        "name": "Wiesentheid",
        "code": "97353"
    },
    {
        "name": "Großhansdorf",
        "code": "22927"
    },
    {
        "name": "Reppenstedt, Lüneburg",
        "code": "21391"
    },
    {
        "name": "Haverlah",
        "code": "38275"
    },
    {
        "name": "Seth",
        "code": "23845"
    },
    {
        "name": "Altenau, Schulenberg",
        "code": "38707"
    },
    {
        "name": "Hamfelde, Kasseburg, Köthel, Rausdorf, Schönberg",
        "code": "22929"
    },
    {
        "name": "Fremdingen",
        "code": "86742"
    },
    {
        "name": "Schwülper",
        "code": "38179"
    },
    {
        "name": "Ebrach",
        "code": "96157"
    },
    {
        "name": "Floh-Seligenthal",
        "code": "98593"
    },
    {
        "name": "Geesthacht",
        "code": "21502"
    },
    {
        "name": "Eppishausen",
        "code": "87745"
    },
    {
        "name": "Holzheim",
        "code": "89438"
    },
    {
        "name": "Wassertrüdingen",
        "code": "91717"
    },
    {
        "name": "Karlsruhe",
        "code": "76131"
    },
    {
        "name": "Marxzell",
        "code": "76359"
    },
    {
        "name": "Stutensee",
        "code": "76297"
    },
    {
        "name": "Niedereschach",
        "code": "78078"
    },
    {
        "name": "Villingendorf",
        "code": "78667"
    },
    {
        "name": "Mannheim",
        "code": "68229"
    },
    {
        "name": "Schömberg",
        "code": "75328"
    },
    {
        "name": "Darmstadt",
        "code": "64297"
    },
    {
        "name": "Nußloch",
        "code": "69226"
    },
    {
        "name": "Nagold",
        "code": "72202"
    },
    {
        "name": "Frankfurt am Main",
        "code": "60389"
    },
    {
        "name": "Bremen",
        "code": "28239"
    },
    {
        "name": "Nordstrand, Elisabeth-Sophien-Koog, Südfall",
        "code": "25845"
    },
    {
        "name": "Knittlingen",
        "code": "75438"
    },
    {
        "name": "Offenbach am Main",
        "code": "63071"
    },
    {
        "name": "Offenbach am Main",
        "code": "63071"
    },
    {
        "name": "Böttingen",
        "code": "78583"
    },
    {
        "name": "Warmsen",
        "code": "31606"
    },
    {
        "name": "Mahlstetten",
        "code": "78601"
    },
    {
        "name": "Reiskirchen",
        "code": "35447"
    },
    {
        "name": "Altenbeken",
        "code": "33184"
    },
    {
        "name": "Neckarbischofsheim",
        "code": "74924"
    },
    {
        "name": "Mühlingen",
        "code": "78357"
    },
    {
        "name": "Karlstein am Main",
        "code": "63791"
    },
    {
        "name": "Breuberg",
        "code": "64747"
    },
    {
        "name": "Sindelfingen",
        "code": "71063"
    },
    {
        "name": "Eddelak, Averlak, Dingen, Ramhusen",
        "code": "25715"
    },
    {
        "name": "Stuttgart",
        "code": "70563"
    },
    {
        "name": "Heilbronn",
        "code": "74080"
    },
    {
        "name": "Aerzen",
        "code": "31855"
    },
    {
        "name": "Offenau",
        "code": "74254"
    },
    {
        "name": "Ostenfeld",
        "code": "25872"
    },
    {
        "name": "Winnert",
        "code": "25887"
    },
    {
        "name": "Stuttgart",
        "code": "70188"
    },
    {
        "name": "Jörl",
        "code": "24992"
    },
    {
        "name": "Oedheim",
        "code": "74229"
    },
    {
        "name": "Wanderup",
        "code": "24997"
    },
    {
        "name": "Nürtingen",
        "code": "72622"
    },
    {
        "name": "Großbettlingen",
        "code": "72663"
    },
    {
        "name": "Stetten",
        "code": "88719"
    },
    {
        "name": "Bad Münder am Deister",
        "code": "31848"
    },
    {
        "name": "Baunatal",
        "code": "34225"
    },
    {
        "name": "Homberg",
        "code": "34576"
    },
    {
        "name": "Deggenhausertal",
        "code": "88693"
    },
    {
        "name": "Ottenstein",
        "code": "31868"
    },
    {
        "name": "Riedlingen",
        "code": "88499"
    },
    {
        "name": "Scheeßel",
        "code": "27383"
    },
    {
        "name": "Bad Wörishofen",
        "code": "86825"
    },
    {
        "name": "Bad Colberg-Heldburg",
        "code": "98663"
    },
    {
        "name": "Ebern",
        "code": "96106"
    },
    {
        "name": "Sickte, Dettum u.a.",
        "code": "38173"
    },
    {
        "name": "Hainsfarth",
        "code": "86744"
    },
    {
        "name": "Sterley",
        "code": "23883"
    },
    {
        "name": "Heidenheim",
        "code": "91719"
    },
    {
        "name": "Ratekau",
        "code": "23626"
    },
    {
        "name": "Langenzenn",
        "code": "90579"
    },
    {
        "name": "Treuchtlingen",
        "code": "91757"
    },
    {
        "name": "Oberreichenbach",
        "code": "91097"
    },
    {
        "name": "Otting",
        "code": "86700"
    },
    {
        "name": "Blankenburg, Oberharz am Brocken",
        "code": "38889"
    },
    {
        "name": "Schnega",
        "code": "29465"
    },
    {
        "name": "Rühen",
        "code": "38471"
    },
    {
        "name": "Großenseebach",
        "code": "91091"
    },
    {
        "name": "Röttenbach",
        "code": "91341"
    },
    {
        "name": "Ballenstedt, Harzgerode",
        "code": "06493"
    },
    {
        "name": "Oberasbach",
        "code": "90522"
    },
    {
        "name": "Röttenbach",
        "code": "91187"
    },
    {
        "name": "Jameln",
        "code": "29479"
    },
    {
        "name": "Lübtheen",
        "code": "19249"
    },
    {
        "name": "Buttenheim",
        "code": "96155"
    },
    {
        "name": "Kassel",
        "code": "34119"
    },
    {
        "name": "Ravensburg",
        "code": "88213"
    },
    {
        "name": "Stadtoldendorf u.a.",
        "code": "37627"
    },
    {
        "name": "Salzhemmendorf",
        "code": "31020"
    },
    {
        "name": "Kaufungen",
        "code": "34260"
    },
    {
        "name": "Reinhardshagen",
        "code": "34359"
    },
    {
        "name": "Schaalby, Geelbek",
        "code": "24882"
    },
    {
        "name": "Karbach",
        "code": "97842"
    },
    {
        "name": "Jork",
        "code": "21635"
    },
    {
        "name": "Weißenfels, Stößen",
        "code": "06667"
    },
    {
        "name": "Selb",
        "code": "95100"
    },
    {
        "name": "Lützen",
        "code": "06686"
    },
    {
        "name": "Großkarolinenfeld",
        "code": "83109"
    },
    {
        "name": "Höchstädt",
        "code": "95186"
    },
    {
        "name": "Krummennaab",
        "code": "92703"
    },
    {
        "name": "Ergolding, Landshut",
        "code": "84030"
    },
    {
        "name": "Neufahrn i. NB",
        "code": "84088"
    },
    {
        "name": "Neubeuern",
        "code": "83115"
    },
    {
        "name": "Bitterfeld-Wolfen",
        "code": "06766"
    },
    {
        "name": "Roggentin, Broderstorf u.a.",
        "code": "18184"
    },
    {
        "name": "Schwindegg",
        "code": "84419"
    },
    {
        "name": "Bruck i.d. OPf.",
        "code": "92436"
    },
    {
        "name": "Zwenkau",
        "code": "04442"
    },
    {
        "name": "Muldestausee",
        "code": "06774"
    },
    {
        "name": "Wörth a.d. Isar",
        "code": "84109"
    },
    {
        "name": "Schönberg",
        "code": "84573"
    },
    {
        "name": "Zwickau",
        "code": "08066"
    },
    {
        "name": "Gottfrieding",
        "code": "84177"
    },
    {
        "name": "Niemegk",
        "code": "14823"
    },
    {
        "name": "Oberschneiding",
        "code": "94363"
    },
    {
        "name": "Colditz",
        "code": "04680"
    },
    {
        "name": "Oberlungwitz",
        "code": "09353"
    },
    {
        "name": "Breitenbrunn/Erzgeb.",
        "code": "08359"
    },
    {
        "name": "Neuruppin",
        "code": "16816"
    },
    {
        "name": "Rheinsberg",
        "code": "16831"
    },
    {
        "name": "Schwarzach",
        "code": "94374"
    },
    {
        "name": "Bernried",
        "code": "94505"
    },
    {
        "name": "Burkhardtsdorf",
        "code": "09235"
    },
    {
        "name": "Eschlkam",
        "code": "93458"
    },
    {
        "name": "Buchhofen",
        "code": "94533"
    },
    {
        "name": "Penzlin",
        "code": "17217"
    },
    {
        "name": "Falkensee",
        "code": "14612"
    },
    {
        "name": "Berlin Wilhelmstadt",
        "code": "13593"
    },
    {
        "name": "Berlin Falkenhagener Feld",
        "code": "13589"
    },
    {
        "name": "Dranske",
        "code": "18556"
    },
    {
        "name": "Frauenau",
        "code": "94258"
    },
    {
        "name": "Berlin Westend",
        "code": "14050"
    },
    {
        "name": "Fürstenzell",
        "code": "94081"
    },
    {
        "name": "Berlin Reinickendorf",
        "code": "13509"
    },
    {
        "name": "Schönberg",
        "code": "94513"
    },
    {
        "name": "Berlin Lichtenfelde",
        "code": "12207"
    },
    {
        "name": "Berlin-West",
        "code": "10823"
    },
    {
        "name": "Berlin Mitte",
        "code": "10178"
    },
    {
        "name": "Golßen",
        "code": "15938"
    },
    {
        "name": "Schönefeld",
        "code": "12529"
    },
    {
        "name": "Kulmbach",
        "code": "95326"
    },
    {
        "name": "Dachau",
        "code": "85221"
    },
    {
        "name": "Wismar, Groß Krankow u.a.",
        "code": "23966"
    },
    {
        "name": "Neudrossenfeld",
        "code": "95512"
    },
    {
        "name": "Wismar, Groß Krankow u.a.",
        "code": "23966"
    },
    {
        "name": "Pilsach",
        "code": "92367"
    },
    {
        "name": "Altmannstein",
        "code": "93336"
    },
    {
        "name": "Jena",
        "code": "07743"
    },
    {
        "name": "Bayreuth",
        "code": "95448"
    },
    {
        "name": "München",
        "code": "80469"
    },
    {
        "name": "München",
        "code": "80807"
    },
    {
        "name": "München",
        "code": "81669"
    },
    {
        "name": "Welsleben, Biere, Eickendorf u.a.",
        "code": "39221"
    },
    {
        "name": "Domsühl, Mestlin, Obere Warnow u.a.",
        "code": "19374"
    },
    {
        "name": "Mainburg",
        "code": "84048"
    },
    {
        "name": "Kühlungsborn",
        "code": "18225"
    },
    {
        "name": "Vilseck",
        "code": "92249"
    },
    {
        "name": "Magdeburg",
        "code": "39114"
    },
    {
        "name": "Moosach",
        "code": "85665"
    },
    {
        "name": "Mauern",
        "code": "85419"
    },
    {
        "name": "Erding",
        "code": "85435"
    },
    {
        "name": "Kirschkau, Pausa-Mühltroff",
        "code": "07919"
    },
    {
        "name": "Ensdorf",
        "code": "92266"
    },
    {
        "name": "Inchenhofen",
        "code": "86570"
    },
    {
        "name": "Schrobenhausen",
        "code": "86529"
    },
    {
        "name": "Mittenwald",
        "code": "82481"
    },
    {
        "name": "Pöcking",
        "code": "82343"
    },
    {
        "name": "Ingolstadt",
        "code": "85051"
    },
    {
        "name": "Föhr",
        "code": "25938"
    },
    {
        "name": "Bürstadt",
        "code": "68642"
    },
    {
        "name": "Brigachtal",
        "code": "78086"
    },
    {
        "name": "Barver, Dickel, Hemsloh, Rehden, Wetschen, Wehrblecker Heide",
        "code": "49453"
    },
    {
        "name": "Mannheim",
        "code": "68161"
    },
    {
        "name": "Wehrheim",
        "code": "61273"
    },
    {
        "name": "Neuweiler",
        "code": "75389"
    },
    {
        "name": "Horb am Neckar",
        "code": "72160"
    },
    {
        "name": "Frankfurt am Main",
        "code": "65934"
    },
    {
        "name": "Bielefeld",
        "code": "33719"
    },
    {
        "name": "Frankfurt am Main",
        "code": "60489"
    },
    {
        "name": "Lahntal",
        "code": "35094"
    },
    {
        "name": "Schiffdorf",
        "code": "27619"
    },
    {
        "name": "Frankfurt am Main",
        "code": "60437"
    },
    {
        "name": "Schriesheim",
        "code": "69198"
    },
    {
        "name": "Pforzheim",
        "code": "75173"
    },
    {
        "name": "Wiesloch",
        "code": "69168"
    },
    {
        "name": "Ritterhude",
        "code": "27721"
    },
    {
        "name": "Sulzfeld",
        "code": "75056"
    },
    {
        "name": "Egesheim",
        "code": "78592"
    },
    {
        "name": "Grafenau",
        "code": "71120"
    },
    {
        "name": "Haina",
        "code": "35114"
    },
    {
        "name": "Oberzent",
        "code": "64760"
    },
    {
        "name": "Steißlingen",
        "code": "78256"
    },
    {
        "name": "Minden",
        "code": "32423"
    },
    {
        "name": "Hanau",
        "code": "63450"
    },
    {
        "name": "Helmstadt-Bargen",
        "code": "74921"
    },
    {
        "name": "Böblingen",
        "code": "71034"
    },
    {
        "name": "Weil im Schönbuch",
        "code": "71093"
    },
    {
        "name": "Helpsen, Seggebruch",
        "code": "31691"
    },
    {
        "name": "Kleinostheim",
        "code": "63801"
    },
    {
        "name": "Kefenrod",
        "code": "63699"
    },
    {
        "name": "Pliezhausen",
        "code": "72124"
    },
    {
        "name": "Auetal",
        "code": "31749"
    },
    {
        "name": "Reichenau",
        "code": "78479"
    },
    {
        "name": "Bietigheim-Bissingen",
        "code": "74321"
    },
    {
        "name": "Eystrup, Hassel u.a.",
        "code": "27324"
    },
    {
        "name": "Pfullendorf",
        "code": "88630"
    },
    {
        "name": "Konstanz",
        "code": "78465"
    },
    {
        "name": "Stuttgart",
        "code": "70190"
    },
    {
        "name": "Buchen",
        "code": "74722"
    },
    {
        "name": "Zierenberg",
        "code": "34289"
    },
    {
        "name": "Walldürn",
        "code": "74731"
    },
    {
        "name": "Calden",
        "code": "34379"
    },
    {
        "name": "Trendelburg",
        "code": "34388"
    },
    {
        "name": "Dellstedt",
        "code": "25786"
    },
    {
        "name": "Jossgrund",
        "code": "63637"
    },
    {
        "name": "Höpfingen",
        "code": "74746"
    },
    {
        "name": "Künzell",
        "code": "36093"
    },
    {
        "name": "Aukrug, Wiedenborstel",
        "code": "24613"
    },
    {
        "name": "Süßen",
        "code": "73079"
    },
    {
        "name": "Neu Wulmstorf",
        "code": "21629"
    },
    {
        "name": "Himmelstadt",
        "code": "97267"
    },
    {
        "name": "Sulzbach-Laufen",
        "code": "74429"
    },
    {
        "name": "Tangstedt",
        "code": "25499"
    },
    {
        "name": "Höchberg",
        "code": "97204"
    },
    {
        "name": "Hausen b. Würzburg",
        "code": "97262"
    },
    {
        "name": "Hamburg",
        "code": "22081"
    },
    {
        "name": "Euerbach",
        "code": "97502"
    },
    {
        "name": "Aalen",
        "code": "73432"
    },
    {
        "name": "Schnelldorf",
        "code": "91625"
    },
    {
        "name": "Hamburg",
        "code": "22147"
    },
    {
        "name": "Barsbüttel",
        "code": "22885"
    },
    {
        "name": "Kiel",
        "code": "24148"
    },
    {
        "name": "Bad Grönenbach",
        "code": "87730"
    },
    {
        "name": "Hamburg",
        "code": "21039"
    },
    {
        "name": "Dietmannsried",
        "code": "87463"
    },
    {
        "name": "Sülfeld",
        "code": "23867"
    },
    {
        "name": "Bad Segeberg",
        "code": "23795"
    },
    {
        "name": "Seth",
        "code": "23845"
    },
    {
        "name": "Wendeburg",
        "code": "38176"
    },
    {
        "name": "Müden (Aller)",
        "code": "38539"
    },
    {
        "name": "Marktbergel",
        "code": "91613"
    },
    {
        "name": "Donnersdorf",
        "code": "97499"
    },
    {
        "name": "Ummern",
        "code": "29369"
    },
    {
        "name": "Hamfelde, Kasseburg, Köthel, Rausdorf, Schönberg",
        "code": "22929"
    },
    {
        "name": "Finningen",
        "code": "89435"
    },
    {
        "name": "Sollstedt",
        "code": "99759"
    },
    {
        "name": "Ehingen",
        "code": "91725"
    },
    {
        "name": "Rammingen",
        "code": "86871"
    },
    {
        "name": "Isenbüttel",
        "code": "38550"
    },
    {
        "name": "Lübeck",
        "code": "23556"
    },
    {
        "name": "Alerheim",
        "code": "86733"
    },
    {
        "name": "Dachsbach",
        "code": "91462"
    },
    {
        "name": "Suhl",
        "code": "98528"
    },
    {
        "name": "Schwangau",
        "code": "87645"
    },
    {
        "name": "Viereth-Trunstadt",
        "code": "96191"
    },
    {
        "name": "Stoetze",
        "code": "29597"
    },
    {
        "name": "Zernien",
        "code": "29499"
    },
    {
        "name": "Vellahn",
        "code": "19260"
    },
    {
        "name": "Thaining",
        "code": "86943"
    },
    {
        "name": "Friedberg",
        "code": "86316"
    },
    {
        "name": "Klötze, Apenburg-Winterfeld",
        "code": "38486"
    },
    {
        "name": "Bayersoien",
        "code": "82435"
    },
    {
        "name": "Moorenweis",
        "code": "82272"
    },
    {
        "name": "Erlangen",
        "code": "91054"
    },
    {
        "name": "Fuldabrück",
        "code": "34277"
    },
    {
        "name": "Unlingen",
        "code": "88527"
    },
    {
        "name": "Oberweser",
        "code": "34399"
    },
    {
        "name": "Haseldorf",
        "code": "25489"
    },
    {
        "name": "Hann. Münden, Gutsbezirk Reinhardswald",
        "code": "34346"
    },
    {
        "name": "Tauberbischofsheim",
        "code": "97941"
    },
    {
        "name": "Lüerdissen",
        "code": "37635"
    },
    {
        "name": "Neuenkirchen",
        "code": "29643"
    },
    {
        "name": "Grünkraut",
        "code": "88287"
    },
    {
        "name": "Lindau (Bodensee)",
        "code": "88131"
    },
    {
        "name": "Berlin Neukölln",
        "code": "12059"
    },
    {
        "name": "Weinböhla",
        "code": "01689"
    },
    {
        "name": "Werneuchen",
        "code": "16356"
    },
    {
        "name": "Wildau",
        "code": "15745"
    },
    {
        "name": "Eberswalde",
        "code": "16225"
    },
    {
        "name": "Dresden",
        "code": "01187"
    },
    {
        "name": "Haidmühle",
        "code": "94145"
    },
    {
        "name": "Dresden",
        "code": "01189"
    },
    {
        "name": "Kröslin, Krummin, Lassan u.a.",
        "code": "17440"
    },
    {
        "name": "Spreenhagen",
        "code": "15528"
    },
    {
        "name": "Wolgast",
        "code": "17438"
    },
    {
        "name": "Liebstadt",
        "code": "01825"
    },
    {
        "name": "Bahretal",
        "code": "01819"
    },
    {
        "name": "Blankensee, Grambow u.a.",
        "code": "17322"
    },
    {
        "name": "Seelow, Lietzen u.a.",
        "code": "15306"
    },
    {
        "name": "Bautzen",
        "code": "02625"
    },
    {
        "name": "Brieskow-Finkenheerd",
        "code": "15295"
    },
    {
        "name": "Oderwitz",
        "code": "02791"
    },
    {
        "name": "Mönchengladbach",
        "code": "41169"
    },
    {
        "name": "Saarburg",
        "code": "54439"
    },
    {
        "name": "Pronsfeld",
        "code": "54597"
    },
    {
        "name": "Willich",
        "code": "47877"
    },
    {
        "name": "Bocholt",
        "code": "46399"
    },
    {
        "name": "Langsur",
        "code": "54308"
    },
    {
        "name": "Krefeld",
        "code": "47805"
    },
    {
        "name": "Pelm, Neroth u.a.",
        "code": "54570"
    },
    {
        "name": "Walsdorf, Nohn u.a.",
        "code": "54578"
    },
    {
        "name": "Düsseldorf",
        "code": "40545"
    },
    {
        "name": "Euskirchen",
        "code": "53879"
    },
    {
        "name": "Kell am See",
        "code": "54427"
    },
    {
        "name": "Köln",
        "code": "50769"
    },
    {
        "name": "Schmelz",
        "code": "66839"
    },
    {
        "name": "Mülheim an der Ruhr",
        "code": "45481"
    },
    {
        "name": "Düsseldorf",
        "code": "40627"
    },
    {
        "name": "Trittenheim",
        "code": "54349"
    },
    {
        "name": "Köln",
        "code": "50825"
    },
    {
        "name": "Dorsten",
        "code": "46286"
    },
    {
        "name": "Gladbeck",
        "code": "45966"
    },
    {
        "name": "Köln",
        "code": "50735"
    },
    {
        "name": "Essen",
        "code": "45149"
    },
    {
        "name": "Leverkusen",
        "code": "51377"
    },
    {
        "name": "Gelsenkirchen",
        "code": "45899"
    },
    {
        "name": "Sulzbach/Saar",
        "code": "66280"
    },
    {
        "name": "Dortmund",
        "code": "44225"
    },
    {
        "name": "Münster",
        "code": "48161"
    },
    {
        "name": "Schalksmühle",
        "code": "58579"
    },
    {
        "name": "Urmitz",
        "code": "56220"
    },
    {
        "name": "Kleinmaischeid",
        "code": "56271"
    },
    {
        "name": "Wangerland",
        "code": "26434"
    },
    {
        "name": "Nentershausen, Hübingen, Niederelbert u.a.",
        "code": "56412"
    },
    {
        "name": "Nauroth",
        "code": "57583"
    },
    {
        "name": "Quakenbrück",
        "code": "49610"
    },
    {
        "name": "Siegen",
        "code": "57078"
    },
    {
        "name": "Albig",
        "code": "55234"
    },
    {
        "name": "Nisterau u.a.",
        "code": "56472"
    },
    {
        "name": "Ockenheim",
        "code": "55437"
    },
    {
        "name": "Osnabrück",
        "code": "49078"
    },
    {
        "name": "Gehrde",
        "code": "49596"
    },
    {
        "name": "Sassenberg",
        "code": "48336"
    },
    {
        "name": "Gau-Algesheim",
        "code": "55435"
    },
    {
        "name": "Billigheim-Ingenheim, Birkweiler",
        "code": "76831"
    },
    {
        "name": "Eltville am Rhein",
        "code": "65347"
    },
    {
        "name": "Hilchenbach",
        "code": "57271"
    },
    {
        "name": "Laufenburg (Baden)",
        "code": "79725"
    },
    {
        "name": "Lindenberg",
        "code": "67473"
    },
    {
        "name": "Dierdorf",
        "code": "56269"
    },
    {
        "name": "Urbar (bei Koblenz)",
        "code": "56182"
    },
    {
        "name": "Spay",
        "code": "56322"
    },
    {
        "name": "Uplengen",
        "code": "26670"
    },
    {
        "name": "Hamm",
        "code": "59077"
    },
    {
        "name": "Ehrenkirchen",
        "code": "79238"
    },
    {
        "name": "Obermoschel, Schiersfeld",
        "code": "67823"
    },
    {
        "name": "Merzen, Neuenkirchen",
        "code": "49586"
    },
    {
        "name": "Bornich, Patersberg",
        "code": "56348"
    },
    {
        "name": "Nassau",
        "code": "56377"
    },
    {
        "name": "Hinterweidenthal",
        "code": "66999"
    },
    {
        "name": "Rhaunen",
        "code": "55624"
    },
    {
        "name": "Bochum",
        "code": "44894"
    },
    {
        "name": "Much",
        "code": "53804"
    },
    {
        "name": "Lonnig",
        "code": "56295"
    },
    {
        "name": "Herdecke",
        "code": "58313"
    },
    {
        "name": "Neustadt (Wied)",
        "code": "53577"
    },
    {
        "name": "Hennweiler",
        "code": "55619"
    },
    {
        "name": "Essen",
        "code": "45276"
    },
    {
        "name": "Köln",
        "code": "51145"
    },
    {
        "name": "Sankt Wendel",
        "code": "66606"
    },
    {
        "name": "Ottweiler",
        "code": "66564"
    },
    {
        "name": "Ediger-Eller",
        "code": "56814"
    },
    {
        "name": "Cochem",
        "code": "56812"
    },
    {
        "name": "Irmenach",
        "code": "56843"
    },
    {
        "name": "Wuppertal",
        "code": "42279"
    },
    {
        "name": "Emsbüren",
        "code": "48488"
    },
    {
        "name": "Remscheid",
        "code": "42897"
    },
    {
        "name": "Neustadt an der Weinstraße",
        "code": "67435"
    },
    {
        "name": "Beselich",
        "code": "65614"
    },
    {
        "name": "Bad Sassendorf",
        "code": "59505"
    },
    {
        "name": "Kindenheim",
        "code": "67271"
    },
    {
        "name": "Mainz",
        "code": "55122"
    },
    {
        "name": "Ovelgönne",
        "code": "26939"
    },
    {
        "name": "Kirchen (Sieg)",
        "code": "57548"
    },
    {
        "name": "Freiburg im Breisgau",
        "code": "79100"
    },
    {
        "name": "Arnsberg",
        "code": "59757"
    },
    {
        "name": "Ennigerloh",
        "code": "59320"
    },
    {
        "name": "Kriegsfeld",
        "code": "67819"
    },
    {
        "name": "Seelbach",
        "code": "77960"
    },
    {
        "name": "Steinbach, Weitersweiler, Bennhausen, Mörsfeld, Würzweiler, Ruppertsecken u.a.",
        "code": "67808"
    },
    {
        "name": "Weidenthal",
        "code": "67475"
    },
    {
        "name": "Arnsberg",
        "code": "59759"
    },
    {
        "name": "Neuenkirchen-Vörden",
        "code": "49434"
    },
    {
        "name": "Osnabrück",
        "code": "49074"
    },
    {
        "name": "Ober-Olm",
        "code": "55270"
    },
    {
        "name": "St. Märgen",
        "code": "79274"
    },
    {
        "name": "Wardenburg",
        "code": "26203"
    },
    {
        "name": "Venningen",
        "code": "67482"
    },
    {
        "name": "Kleve",
        "code": "47533"
    },
    {
        "name": "Wegberg",
        "code": "41844"
    },
    {
        "name": "Linnich",
        "code": "52441"
    },
    {
        "name": "Kempen",
        "code": "47906"
    },
    {
        "name": "Tönisvorst",
        "code": "47918"
    },
    {
        "name": "Mönchengladbach",
        "code": "41236"
    },
    {
        "name": "Mettlach",
        "code": "66693"
    },
    {
        "name": "Krefeld",
        "code": "47803"
    },
    {
        "name": "Krefeld",
        "code": "47799"
    },
    {
        "name": "Neuss",
        "code": "41464"
    },
    {
        "name": "Duisburg",
        "code": "47178"
    },
    {
        "name": "Leiwen u.a.",
        "code": "54340"
    },
    {
        "name": "Hetzerath, Dierscheid, Heckenmünster",
        "code": "54523"
    },
    {
        "name": "Düsseldorf",
        "code": "40219"
    },
    {
        "name": "Walsdorf, Nohn u.a.",
        "code": "54578"
    },
    {
        "name": "Düsseldorf",
        "code": "40215"
    },
    {
        "name": "Reifferscheid, Kaltenborn, Wershofen u.a.",
        "code": "53520"
    },
    {
        "name": "Euskirchen",
        "code": "53879"
    },
    {
        "name": "Düsseldorf",
        "code": "40229"
    },
    {
        "name": "Ratingen",
        "code": "40882"
    },
    {
        "name": "Düsseldorf",
        "code": "40625"
    },
    {
        "name": "Köln",
        "code": "51063"
    },
    {
        "name": "Essen",
        "code": "45138"
    },
    {
        "name": "Bad Bentheim",
        "code": "48455"
    },
    {
        "name": "Friedrichsthal",
        "code": "66299"
    },
    {
        "name": "Bonn",
        "code": "53177"
    },
    {
        "name": "Gelsenkirchen",
        "code": "45889"
    },
    {
        "name": "Norden",
        "code": "26506"
    },
    {
        "name": "Wuppertal",
        "code": "42349"
    },
    {
        "name": "Herten",
        "code": "45699"
    },
    {
        "name": "Troisdorf",
        "code": "53840"
    },
    {
        "name": "Upgant-Schott, Osteel u.a.",
        "code": "26529"
    },
    {
        "name": "Billerbeck",
        "code": "48727"
    },
    {
        "name": "Büchenbeuren",
        "code": "55491"
    },
    {
        "name": "Weener",
        "code": "26826"
    },
    {
        "name": "Nickenich",
        "code": "56645"
    },
    {
        "name": "Andernach",
        "code": "56626"
    },
    {
        "name": "Olfen",
        "code": "59399"
    },
    {
        "name": "Dickenschied u.a.",
        "code": "55483"
    },
    {
        "name": "Kastellaun",
        "code": "56288"
    },
    {
        "name": "Niederbreitbach",
        "code": "56589"
    },
    {
        "name": "Glan-Münchweiler",
        "code": "66907"
    },
    {
        "name": "Weisweil",
        "code": "79367"
    },
    {
        "name": "Inzlingen",
        "code": "79594"
    },
    {
        "name": "Schallodenbach",
        "code": "67701"
    },
    {
        "name": "Hargesheim",
        "code": "55595"
    },
    {
        "name": "Herschbach",
        "code": "56249"
    },
    {
        "name": "Malberg, Norken, Höchstenbach u.a.",
        "code": "57629"
    },
    {
        "name": "Schwanau",
        "code": "77963"
    },
    {
        "name": "Wirges, Stadt",
        "code": "56422"
    },
    {
        "name": "Freilingen, Freirachdorf u.a.",
        "code": "56244"
    },
    {
        "name": "Plettenberg",
        "code": "58840"
    },
    {
        "name": "Willroth",
        "code": "56594"
    },
    {
        "name": "Elsterwerda",
        "code": "04910"
    },
    {
        "name": "Berlin",
        "code": "12679"
    },
    {
        "name": "Zeuthen",
        "code": "15738"
    },
    {
        "name": "Groß Köris",
        "code": "15746"
    },
    {
        "name": "Dresden",
        "code": "01169"
    },
    {
        "name": "Dresden",
        "code": "01159"
    },
    {
        "name": "Neureichenau",
        "code": "94089"
    },
    {
        "name": "Kreischa",
        "code": "01731"
    },
    {
        "name": "Fredersdorf-Vogelsdorf, Petershagen",
        "code": "15370"
    },
    {
        "name": "Rüdersdorf",
        "code": "15562"
    },
    {
        "name": "Dresden",
        "code": "01259"
    },
    {
        "name": "Dresden",
        "code": "01324"
    },
    {
        "name": "Ostseebad Heringsdorf",
        "code": "17424"
    },
    {
        "name": "Treplin, Jacobsdorf, Frankfurt (Oder)",
        "code": "15236"
    },
    {
        "name": "Eurasburg",
        "code": "82547"
    },
    {
        "name": "München",
        "code": "81249"
    },
    {
        "name": "Höhbeck",
        "code": "29478"
    },
    {
        "name": "München",
        "code": "81245"
    },
    {
        "name": "Querfurt, Obhausen, Mücheln u.a.",
        "code": "06268"
    },
    {
        "name": "Kahla",
        "code": "07768"
    },
    {
        "name": "Hettstedt, Endorf",
        "code": "06333"
    },
    {
        "name": "Happurg",
        "code": "91230"
    },
    {
        "name": "Neuburg-Steinhausen, Hornstorf",
        "code": "23974"
    },
    {
        "name": "Ködnitz",
        "code": "95361"
    },
    {
        "name": "Bayreuth",
        "code": "95445"
    },
    {
        "name": "Haimhausen",
        "code": "85778"
    },
    {
        "name": "München",
        "code": "80337"
    },
    {
        "name": "Wolnzach",
        "code": "85283"
    },
    {
        "name": "München",
        "code": "81543"
    },
    {
        "name": "Velburg",
        "code": "92355"
    },
    {
        "name": "Garching b. München",
        "code": "85748"
    },
    {
        "name": "Sachsenkam",
        "code": "83679"
    },
    {
        "name": "Alsleben/Saale, Plötzkau",
        "code": "06425"
    },
    {
        "name": "Bad Lauchstädt",
        "code": "06246"
    },
    {
        "name": "Biederitz, Gerwisch, Menz u.a.",
        "code": "39175"
    },
    {
        "name": "Nandlstadt",
        "code": "85405"
    },
    {
        "name": "Neuching",
        "code": "85467"
    },
    {
        "name": "Weißdorf",
        "code": "95237"
    },
    {
        "name": "Mehlmeisel",
        "code": "95694"
    },
    {
        "name": "Güterglück, Lindau, Deetz u.a.",
        "code": "39264"
    },
    {
        "name": "Fensterbach",
        "code": "92269"
    },
    {
        "name": "Brahmenau",
        "code": "07554"
    },
    {
        "name": "Kirchberg",
        "code": "84434"
    },
    {
        "name": "Steinberg",
        "code": "92449"
    },
    {
        "name": "Wiesau",
        "code": "95676"
    },
    {
        "name": "Pöhl",
        "code": "08543"
    },
    {
        "name": "Mohlsdorf-Teichwolframsdorf",
        "code": "07987"
    },
    {
        "name": "Hagelstadt",
        "code": "93095"
    },
    {
        "name": "Rostock, Graal-Müritz",
        "code": "18181"
    },
    {
        "name": "Barbing",
        "code": "93092"
    },
    {
        "name": "Velden",
        "code": "84149"
    },
    {
        "name": "Görzke",
        "code": "14828"
    },
    {
        "name": "Ziesar",
        "code": "14793"
    },
    {
        "name": "Rimsting",
        "code": "83253"
    },
    {
        "name": "Leipzig",
        "code": "04179"
    },
    {
        "name": "Regis-Breitingen",
        "code": "04565"
    },
    {
        "name": "Moosthenning",
        "code": "84164"
    },
    {
        "name": "Leipzig",
        "code": "04289"
    },
    {
        "name": "Bad Sülze",
        "code": "18334"
    },
    {
        "name": "Leipzig",
        "code": "04329"
    },
    {
        "name": "Naunhof",
        "code": "04683"
    },
    {
        "name": "Töging a. Inn",
        "code": "84513"
    },
    {
        "name": "Palling",
        "code": "83349"
    },
    {
        "name": "Rheinsberg",
        "code": "16837"
    },
    {
        "name": "Taching a. See",
        "code": "83373"
    },
    {
        "name": "Mirow",
        "code": "17252"
    },
    {
        "name": "Niederfrohna",
        "code": "09243"
    },
    {
        "name": "Rattenberg",
        "code": "94371"
    },
    {
        "name": "Niederwürschnitz",
        "code": "09399"
    },
    {
        "name": "Burgstädt",
        "code": "09217"
    },
    {
        "name": "Burghausen",
        "code": "84489"
    },
    {
        "name": "Schönau",
        "code": "84337"
    },
    {
        "name": "Chemnitz",
        "code": "09228"
    },
    {
        "name": "Metten",
        "code": "94526"
    },
    {
        "name": "Dahlen",
        "code": "04774"
    },
    {
        "name": "Winzer",
        "code": "94577"
    },
    {
        "name": "Zschopau, Gornau",
        "code": "09405"
    },
    {
        "name": "Stralsund",
        "code": "18435"
    },
    {
        "name": "Potsdam",
        "code": "14480"
    },
    {
        "name": "Griesbach i. Rottal",
        "code": "94086"
    },
    {
        "name": "Berlin Spandau",
        "code": "13585"
    },
    {
        "name": "Berlin Haselhorst",
        "code": "13599"
    },
    {
        "name": "Lychen",
        "code": "17279"
    },
    {
        "name": "Berlin Lübars",
        "code": "13469"
    },
    {
        "name": "Berlin Wilmersdorf",
        "code": "10707"
    },
    {
        "name": "Schildow",
        "code": "16552"
    },
    {
        "name": "Berlin",
        "code": "12307"
    },
    {
        "name": "Wäschenbeuren",
        "code": "73116"
    },
    {
        "name": "Ascheffel",
        "code": "24358"
    },
    {
        "name": "Rottenacker",
        "code": "89616"
    },
    {
        "name": "Ingoldingen",
        "code": "88456"
    },
    {
        "name": "Steinberg, Steinbergkirche",
        "code": "24972"
    },
    {
        "name": "Großrinderfeld",
        "code": "97950"
    },
    {
        "name": "Eckernförde",
        "code": "24340"
    },
    {
        "name": "Mutlangen",
        "code": "73557"
    },
    {
        "name": "Hamburg",
        "code": "21129"
    },
    {
        "name": "Esgrus",
        "code": "24402"
    },
    {
        "name": "Hammelburg",
        "code": "97762"
    },
    {
        "name": "Göttingen",
        "code": "37079"
    },
    {
        "name": "Eisingen",
        "code": "97249"
    },
    {
        "name": "Poppenhausen",
        "code": "36163"
    },
    {
        "name": "Schrozberg",
        "code": "74575"
    },
    {
        "name": "Iggingen",
        "code": "73574"
    },
    {
        "name": "Hamburg",
        "code": "22607"
    },
    {
        "name": "Veitshöchheim",
        "code": "97209"
    },
    {
        "name": "Langwedel",
        "code": "24631"
    },
    {
        "name": "Bartholomä",
        "code": "73566"
    },
    {
        "name": "Hamburg",
        "code": "22767"
    },
    {
        "name": "Osdorf",
        "code": "24251"
    },
    {
        "name": "Hamburg",
        "code": "20144"
    },
    {
        "name": "Celle, Wittbeck",
        "code": "29229"
    },
    {
        "name": "Altenholz",
        "code": "24161"
    },
    {
        "name": "Hamburg",
        "code": "22391"
    },
    {
        "name": "Holzheim",
        "code": "89291"
    },
    {
        "name": "Burglauer",
        "code": "97724"
    },
    {
        "name": "Kiel",
        "code": "24147"
    },
    {
        "name": "Schweinfurt",
        "code": "97424"
    },
    {
        "name": "Sommerach",
        "code": "97334"
    },
    {
        "name": "Gebsattel",
        "code": "91607"
    },
    {
        "name": "Rannungen",
        "code": "97517"
    },
    {
        "name": "Habighorst",
        "code": "29359"
    },
    {
        "name": "Hamburg",
        "code": "21039"
    },
    {
        "name": "Schweinfurt",
        "code": "97421"
    },
    {
        "name": "Südeichsfeld",
        "code": "99988"
    },
    {
        "name": "Lachen",
        "code": "87760"
    },
    {
        "name": "Sennfeld",
        "code": "97526"
    },
    {
        "name": "Stödtlen",
        "code": "73495"
    },
    {
        "name": "Tannhausen",
        "code": "73497"
    },
    {
        "name": "Plön",
        "code": "24306"
    },
    {
        "name": "Lüneburg",
        "code": "21339"
    },
    {
        "name": "Hillerse",
        "code": "38543"
    },
    {
        "name": "Ronsberg",
        "code": "87671"
    },
    {
        "name": "Steinhorst",
        "code": "29367"
    },
    {
        "name": "Salzgitter",
        "code": "38239"
    },
    {
        "name": "Wittislingen",
        "code": "89426"
    },
    {
        "name": "Seebach",
        "code": "99846"
    },
    {
        "name": "Lehrberg",
        "code": "91611"
    },
    {
        "name": "Haßfurt",
        "code": "97437"
    },
    {
        "name": "Wendisch Evern",
        "code": "21403"
    },
    {
        "name": "Pfronten",
        "code": "87459"
    },
    {
        "name": "Görisried",
        "code": "87657"
    },
    {
        "name": "Bad Bevensen",
        "code": "29549"
    },
    {
        "name": "Bertelsmann",
        "code": "33333"
    },
    {
        "name": "Dunningen",
        "code": "78655"
    },
    {
        "name": "Bad Soden am Taunus",
        "code": "65812"
    },
    {
        "name": "Wetzlar",
        "code": "35586"
    },
    {
        "name": "Blumberg",
        "code": "78176"
    },
    {
        "name": "Zimmern ob Rottweil",
        "code": "78658"
    },
    {
        "name": "Hallig Hooge",
        "code": "25859"
    },
    {
        "name": "Lottstetten",
        "code": "79807"
    },
    {
        "name": "Alsbach-Hähnlein",
        "code": "64665"
    },
    {
        "name": "Heddesheim",
        "code": "68542"
    },
    {
        "name": "Kronau",
        "code": "76709"
    },
    {
        "name": "Laudenbach",
        "code": "69514"
    },
    {
        "name": "Dietingen",
        "code": "78661"
    },
    {
        "name": "Engelsbrand",
        "code": "75331"
    },
    {
        "name": "Frankfurt am Main",
        "code": "60431"
    },
    {
        "name": "Tating, Westerhever, Tümlauer Koog",
        "code": "25881"
    },
    {
        "name": "Heidelberg",
        "code": "69121"
    },
    {
        "name": "Frankfurt am Main",
        "code": "60320"
    },
    {
        "name": "Leimen",
        "code": "69181"
    },
    {
        "name": "Gunningen",
        "code": "78594"
    },
    {
        "name": "Karben",
        "code": "61184"
    },
    {
        "name": "Modautal",
        "code": "64397"
    },
    {
        "name": "Frankfurt am Main",
        "code": "60386"
    },
    {
        "name": "Hambergen, Holste u.a.",
        "code": "27729"
    },
    {
        "name": "Oberderdingen",
        "code": "75038"
    },
    {
        "name": "Offenbach am Main",
        "code": "63065"
    },
    {
        "name": "Fischbachtal",
        "code": "64405"
    },
    {
        "name": "Bremen",
        "code": "28201"
    },
    {
        "name": "Frankenau",
        "code": "35110"
    },
    {
        "name": "Friedrichskoog",
        "code": "25718"
    },
    {
        "name": "Hanau",
        "code": "63456"
    },
    {
        "name": "Bruchhausen-Vilsen, Süstedt",
        "code": "27305"
    },
    {
        "name": "Bruchköbel",
        "code": "63486"
    },
    {
        "name": "Bremen",
        "code": "28307"
    },
    {
        "name": "Reichartshausen",
        "code": "74934"
    },
    {
        "name": "Barlt, Busenwurth",
        "code": "25719"
    },
    {
        "name": "Bad Driburg",
        "code": "33014"
    },
    {
        "name": "Ortenberg",
        "code": "63683"
    },
    {
        "name": "Sindelfingen",
        "code": "71065"
    },
    {
        "name": "Lützelbach",
        "code": "64750"
    },
    {
        "name": "Meerbeck",
        "code": "31715"
    },
    {
        "name": "Weilbach",
        "code": "63937"
    },
    {
        "name": "Kirchheim am Neckar",
        "code": "74366"
    },
    {
        "name": "Nienstädt",
        "code": "31688"
    },
    {
        "name": "Hessisch Oldendorf",
        "code": "31840"
    },
    {
        "name": "Filderstadt",
        "code": "70794"
    },
    {
        "name": "Bad Friedrichshall",
        "code": "74177"
    },
    {
        "name": "Albersdorf",
        "code": "25767"
    },
    {
        "name": "Hausen",
        "code": "63840"
    },
    {
        "name": "Haßbergen",
        "code": "31626"
    },
    {
        "name": "Liebenau (Hessen)",
        "code": "34396"
    },
    {
        "name": "Birstein",
        "code": "63633"
    },
    {
        "name": "Emmerthal",
        "code": "31860"
    },
    {
        "name": "Wacken",
        "code": "25596"
    },
    {
        "name": "Marbach am Neckar",
        "code": "71672"
    },
    {
        "name": "Roigheim",
        "code": "74255"
    },
    {
        "name": "Ottrau",
        "code": "34633"
    },
    {
        "name": "Bad Nenndorf",
        "code": "31542"
    },
    {
        "name": "Adelsheim",
        "code": "74740"
    },
    {
        "name": "Hülben",
        "code": "72584"
    },
    {
        "name": "Stade",
        "code": "21683"
    },
    {
        "name": "Wernau (Neckar)",
        "code": "73249"
    },
    {
        "name": "Hodenhagen u.a.",
        "code": "29693"
    },
    {
        "name": "Barsinghausen",
        "code": "30890"
    },
    {
        "name": "Sittensen u.a.",
        "code": "27419"
    },
    {
        "name": "Bischbrunn",
        "code": "97836"
    },
    {
        "name": "Schernfeld",
        "code": "85132"
    },
    {
        "name": "Dollnstein",
        "code": "91795"
    },
    {
        "name": "Bad Frankenhausen/Kyffhäuser",
        "code": "06567"
    },
    {
        "name": "Nürnberg",
        "code": "90443"
    },
    {
        "name": "Türkenfeld",
        "code": "82299"
    },
    {
        "name": "Nürnberg",
        "code": "90455"
    },
    {
        "name": "Redwitz a.d. Rodach",
        "code": "96257"
    },
    {
        "name": "Kölleda",
        "code": "99625"
    },
    {
        "name": "Wanzleben-Börde",
        "code": "39164"
    },
    {
        "name": "Gilching",
        "code": "82205"
    },
    {
        "name": "Seeshaupt",
        "code": "82402"
    },
    {
        "name": "Bernried",
        "code": "82347"
    },
    {
        "name": "Winkelhaid",
        "code": "90610"
    },
    {
        "name": "Kipfenberg",
        "code": "85110"
    },
    {
        "name": "Emmering",
        "code": "82275"
    },
    {
        "name": "Probstzella",
        "code": "07330"
    },
    {
        "name": "Seeland",
        "code": "06469"
    },
    {
        "name": "Berching",
        "code": "92334"
    },
    {
        "name": "Auhausen",
        "code": "86736"
    },
    {
        "name": "Altenmedingen",
        "code": "29575"
    },
    {
        "name": "Eltmann",
        "code": "97483"
    },
    {
        "name": "Bleckede",
        "code": "21354"
    },
    {
        "name": "Lübeck",
        "code": "23558"
    },
    {
        "name": "Ziethen",
        "code": "23911"
    },
    {
        "name": "Himbergen",
        "code": "29584"
    },
    {
        "name": "Bruckberg",
        "code": "91590"
    },
    {
        "name": "Bonstetten",
        "code": "86486"
    },
    {
        "name": "Oberostendorf",
        "code": "86869"
    },
    {
        "name": "Rentweinsdorf",
        "code": "96184"
    },
    {
        "name": "Walsdorf",
        "code": "96194"
    },
    {
        "name": "Dähre, Diesdorf, Wallstawe",
        "code": "29413"
    },
    {
        "name": "Igling",
        "code": "86859"
    },
    {
        "name": "Schwabsoien",
        "code": "86987"
    },
    {
        "name": "Cadolzburg",
        "code": "90556"
    },
    {
        "name": "Tülau",
        "code": "38474"
    },
    {
        "name": "Schmiechen",
        "code": "86511"
    },
    {
        "name": "Salzwedel",
        "code": "29410"
    },
    {
        "name": "Saulgrub",
        "code": "82442"
    },
    {
        "name": "Rennertshofen",
        "code": "86643"
    },
    {
        "name": "Solnhofen",
        "code": "91807"
    },
    {
        "name": "Litzendorf",
        "code": "96123"
    },
    {
        "name": "Pöttmes",
        "code": "86554"
    },
    {
        "name": "Burgheim",
        "code": "86666"
    },
    {
        "name": "Nürnberg",
        "code": "90431"
    },
    {
        "name": "Eggolsheim",
        "code": "91330"
    },
    {
        "name": "Aichach",
        "code": "86551"
    },
    {
        "name": "Langensendelbach",
        "code": "91094"
    },
    {
        "name": "Runkel",
        "code": "65594"
    },
    {
        "name": "Wilhelmshaven",
        "code": "26382"
    },
    {
        "name": "Hilter",
        "code": "49176"
    },
    {
        "name": "Hausach",
        "code": "77756"
    },
    {
        "name": "Schmallenberg",
        "code": "57392"
    },
    {
        "name": "Hochstadt",
        "code": "76879"
    },
    {
        "name": "Gau-Odernheim",
        "code": "55239"
    },
    {
        "name": "Offenbach an der Queich",
        "code": "76877"
    },
    {
        "name": "Monsheim",
        "code": "67590"
    },
    {
        "name": "Mainz",
        "code": "55120"
    },
    {
        "name": "Gerolsheim",
        "code": "67229"
    },
    {
        "name": "Oldenburg (Oldenburg)",
        "code": "26135"
    },
    {
        "name": "Bonndorf im Schwarzwald",
        "code": "79848"
    },
    {
        "name": "Lustadt",
        "code": "67363"
    },
    {
        "name": "Hochdorf-Assenheim",
        "code": "67126"
    },
    {
        "name": "Löffingen",
        "code": "79843"
    },
    {
        "name": "Hude (Oldenburg)",
        "code": "27798"
    },
    {
        "name": "Dillenburg",
        "code": "35690"
    },
    {
        "name": "Neupotz",
        "code": "76777"
    },
    {
        "name": "Villingen-Schwenningen",
        "code": "78052"
    },
    {
        "name": "Frankenthal (Pfalz)",
        "code": "67227"
    },
    {
        "name": "Hanhofen",
        "code": "67374"
    },
    {
        "name": "Eggenstein-Leopoldshafen",
        "code": "76344"
    },
    {
        "name": "Glashütten",
        "code": "61479"
    },
    {
        "name": "Römerberg",
        "code": "67354"
    },
    {
        "name": "Rosenberg",
        "code": "74749"
    },
    {
        "name": "Allmersbach im Tal",
        "code": "71573"
    },
    {
        "name": "Hochdorf",
        "code": "73269"
    },
    {
        "name": "Stolk",
        "code": "24890"
    },
    {
        "name": "Unterwaldhausen",
        "code": "88379"
    },
    {
        "name": "Dürmentingen",
        "code": "88525"
    },
    {
        "name": "Söhrewald",
        "code": "34320"
    },
    {
        "name": "Staufenberg",
        "code": "34355"
    },
    {
        "name": "Wiesensteig",
        "code": "73349"
    },
    {
        "name": "Beckdorf",
        "code": "21643"
    },
    {
        "name": "Nübbel",
        "code": "24809"
    },
    {
        "name": "Alheim",
        "code": "36211"
    },
    {
        "name": "Weida, Harth-Pöllnitz, Wünschendorf",
        "code": "07570"
    },
    {
        "name": "Goldberg",
        "code": "19399"
    },
    {
        "name": "Wartenberg",
        "code": "85456"
    },
    {
        "name": "Kabelsketal",
        "code": "06184"
    },
    {
        "name": "Milower Land, Schollene, Nennhausen u.a.",
        "code": "14715"
    },
    {
        "name": "Neuensalz",
        "code": "08541"
    },
    {
        "name": "Leipzig",
        "code": "04249"
    },
    {
        "name": "Raguhn-Jeßnitz",
        "code": "06800"
    },
    {
        "name": "Reichenbach",
        "code": "93189"
    },
    {
        "name": "Leipzig",
        "code": "04129"
    },
    {
        "name": "Nobitz, Göhren, Windischleuba",
        "code": "04603"
    },
    {
        "name": "Perkam",
        "code": "94368"
    },
    {
        "name": "Michelsneukirchen",
        "code": "93185"
    },
    {
        "name": "Grabenstätt",
        "code": "83355"
    },
    {
        "name": "Töging a. Inn",
        "code": "84513"
    },
    {
        "name": "Winhöring",
        "code": "84543"
    },
    {
        "name": "Kirchweidach",
        "code": "84558"
    },
    {
        "name": "Weiding",
        "code": "93495"
    },
    {
        "name": "Dommitzsch",
        "code": "04880"
    },
    {
        "name": "Furth i. Wald",
        "code": "93437"
    },
    {
        "name": "Stavenhagen",
        "code": "17153"
    },
    {
        "name": "Oberpöring",
        "code": "94562"
    },
    {
        "name": "Chemnitz",
        "code": "09116"
    },
    {
        "name": "Deggendorf",
        "code": "94469"
    },
    {
        "name": "Chemnitz",
        "code": "09120"
    },
    {
        "name": "Schlettau",
        "code": "09487"
    },
    {
        "name": "Mügeln",
        "code": "04769"
    },
    {
        "name": "Neukirchen b. Hl. Blut",
        "code": "93453"
    },
    {
        "name": "Zachenberg",
        "code": "94239"
    },
    {
        "name": "Simbach a. Inn",
        "code": "84359"
    },
    {
        "name": "Bad Birnbach",
        "code": "84364"
    },
    {
        "name": "Stralsund",
        "code": "18439"
    },
    {
        "name": "Berlin Gatow",
        "code": "14089"
    },
    {
        "name": "Stralsund",
        "code": "18439"
    },
    {
        "name": "Bentzin",
        "code": "17129"
    },
    {
        "name": "Bergen/ Rügen",
        "code": "18528"
    },
    {
        "name": "Berlin Steglitz",
        "code": "12165"
    },
    {
        "name": "Berlin Schöneberg",
        "code": "10789"
    },
    {
        "name": "Berlin Wedding",
        "code": "13349"
    },
    {
        "name": "Berlin",
        "code": "10825"
    },
    {
        "name": "Gröditz, Wülknitz, Röderaue",
        "code": "01609"
    },
    {
        "name": "Berlin Schöneberg",
        "code": "10781"
    },
    {
        "name": "Blankenfelde-Mahlow",
        "code": "15831"
    },
    {
        "name": "Wandlitz",
        "code": "16348"
    },
    {
        "name": "Berlin Französisch Buchholz",
        "code": "13127"
    },
    {
        "name": "Karlsburg",
        "code": "17495"
    },
    {
        "name": "Fürsteneck",
        "code": "94142"
    },
    {
        "name": "Remlingen",
        "code": "97280"
    },
    {
        "name": "Fulda",
        "code": "36037"
    },
    {
        "name": "Bergatreute",
        "code": "88368"
    },
    {
        "name": "Greußenheim",
        "code": "97259"
    },
    {
        "name": "Hannover",
        "code": "30159"
    },
    {
        "name": "Eberhardzell",
        "code": "88436"
    },
    {
        "name": "Kummerfeld",
        "code": "25495"
    },
    {
        "name": "Gnutz",
        "code": "24622"
    },
    {
        "name": "Hannover",
        "code": "30655"
    },
    {
        "name": "Großalmerode",
        "code": "37247"
    },
    {
        "name": "Thüngershem",
        "code": "97291"
    },
    {
        "name": "Oberthulba",
        "code": "97723"
    },
    {
        "name": "Warder",
        "code": "24646"
    },
    {
        "name": "Witzenhausen",
        "code": "37214"
    },
    {
        "name": "Lehrte",
        "code": "31275"
    },
    {
        "name": "Harsum",
        "code": "31177"
    },
    {
        "name": "Bad Gandersheim",
        "code": "37581"
    },
    {
        "name": "Harmstorf",
        "code": "21228"
    },
    {
        "name": "Kiel",
        "code": "24107"
    },
    {
        "name": "Neumünster",
        "code": "24534"
    },
    {
        "name": "Vacha, Unterbreizbach",
        "code": "36404"
    },
    {
        "name": "Mielkendorf",
        "code": "24247"
    },
    {
        "name": "Ulm",
        "code": "89073"
    },
    {
        "name": "Rottendorf",
        "code": "97228"
    },
    {
        "name": "Neenstetten",
        "code": "89189"
    },
    {
        "name": "Hamburg",
        "code": "20097"
    },
    {
        "name": "Balzheim",
        "code": "88481"
    },
    {
        "name": "Satteldorf",
        "code": "74589"
    },
    {
        "name": "Sievershütten",
        "code": "24641"
    },
    {
        "name": "Hohenroth",
        "code": "97618"
    },
    {
        "name": "Hamburg, Oststeinbek",
        "code": "22113"
    },
    {
        "name": "Weitnau",
        "code": "87480"
    },
    {
        "name": "Hamburg",
        "code": "21035"
    },
    {
        "name": "Kronburg",
        "code": "87758"
    },
    {
        "name": "Edemissen",
        "code": "31234"
    },
    {
        "name": "Obernbreit",
        "code": "97342"
    },
    {
        "name": "Leipheim",
        "code": "89340"
    },
    {
        "name": "Bergrheinfeld",
        "code": "97493"
    },
    {
        "name": "Eicklingen",
        "code": "29358"
    },
    {
        "name": "Wiggensbach",
        "code": "87487"
    },
    {
        "name": "Ammersbek",
        "code": "22949"
    },
    {
        "name": "Rammingen",
        "code": "89192"
    },
    {
        "name": "Niederrieden",
        "code": "87767"
    },
    {
        "name": "Giengen an der Brenz",
        "code": "89537"
    },
    {
        "name": "Kettershausen",
        "code": "86498"
    },
    {
        "name": "Schwebheim",
        "code": "97525"
    },
    {
        "name": "Rettenberg",
        "code": "87549"
    },
    {
        "name": "Tensfeld",
        "code": "23824"
    },
    {
        "name": "Bad Hindelang",
        "code": "87541"
    },
    {
        "name": "Seedorf",
        "code": "23823"
    },
    {
        "name": "Lauingen (Donau)",
        "code": "89415"
    },
    {
        "name": "Oberdachstetten",
        "code": "91617"
    },
    {
        "name": "Wildpoldsried",
        "code": "87499"
    },
    {
        "name": "Aidhausen",
        "code": "97491"
    },
    {
        "name": "Römhild",
        "code": "98630"
    },
    {
        "name": "Hankensbüttel, Obernholz, Dedelstorf",
        "code": "29386"
    },
    {
        "name": "Friesenried",
        "code": "87654"
    },
    {
        "name": "Baudenbach",
        "code": "91460"
    },
    {
        "name": "Großengottern, Heroldishausen",
        "code": "99991"
    },
    {
        "name": "Waldfeucht, Heinsberg",
        "code": "52525"
    },
    {
        "name": "Aachen",
        "code": "52076"
    },
    {
        "name": "Aachen",
        "code": "52064"
    },
    {
        "name": "Pronsfeld",
        "code": "54597"
    },
    {
        "name": "Pronsfeld",
        "code": "54597"
    },
    {
        "name": "Rees",
        "code": "46459"
    },
    {
        "name": "Rittersdorf u.a.",
        "code": "54636"
    },
    {
        "name": "Viersen",
        "code": "41747"
    },
    {
        "name": "Kreuzau",
        "code": "52372"
    },
    {
        "name": "Pellingen",
        "code": "54331"
    },
    {
        "name": "Welschbillig, Igel, Aach",
        "code": "54298"
    },
    {
        "name": "Serrig",
        "code": "54455"
    },
    {
        "name": "Bergheim",
        "code": "50126"
    },
    {
        "name": "Hillesheim",
        "code": "54576"
    },
    {
        "name": "Schweich",
        "code": "54338"
    },
    {
        "name": "Schillingen",
        "code": "54429"
    },
    {
        "name": "Großrosseln",
        "code": "66352"
    },
    {
        "name": "Düsseldorf",
        "code": "40591"
    },
    {
        "name": "Düsseldorf",
        "code": "40629"
    },
    {
        "name": "Juist, Memmert",
        "code": "26571"
    },
    {
        "name": "Nonnweiler",
        "code": "66620"
    },
    {
        "name": "Essen",
        "code": "45219"
    },
    {
        "name": "Köln",
        "code": "50737"
    },
    {
        "name": "Maring-Noviand",
        "code": "54484"
    },
    {
        "name": "Meckenheim",
        "code": "53340"
    },
    {
        "name": "Köln",
        "code": "50996"
    },
    {
        "name": "Emden",
        "code": "26723"
    },
    {
        "name": "Saarbrücken",
        "code": "66130"
    },
    {
        "name": "Niederwörresbach",
        "code": "55758"
    },
    {
        "name": "Bonn",
        "code": "53225"
    },
    {
        "name": "Velbert",
        "code": "42555"
    },
    {
        "name": "Hattingen",
        "code": "45527"
    },
    {
        "name": "Bruchhausen, Unkel",
        "code": "53572"
    },
    {
        "name": "Bullay, Alf, Zell",
        "code": "56859"
    },
    {
        "name": "Ramstein-Miesenbach",
        "code": "66877"
    },
    {
        "name": "Thaleischweiler-Fröschen",
        "code": "66987"
    },
    {
        "name": "Koblenz",
        "code": "56070"
    },
    {
        "name": "Weilerbach u.a.",
        "code": "67685"
    },
    {
        "name": "Pirmasens",
        "code": "66955"
    },
    {
        "name": "Pfaffenhofen a.d. Ilm",
        "code": "85276"
    },
    {
        "name": "Rugendorf",
        "code": "95365"
    },
    {
        "name": "Reichertshausen",
        "code": "85293"
    },
    {
        "name": "Bad Bibra, Finne u.a.",
        "code": "06647"
    },
    {
        "name": "München",
        "code": "81377"
    },
    {
        "name": "Erxleben, Nordgermersleben u.a.",
        "code": "39343"
    },
    {
        "name": "München",
        "code": "80335"
    },
    {
        "name": "Staßfurt",
        "code": "39443"
    },
    {
        "name": "Stendal",
        "code": "39576"
    },
    {
        "name": "München",
        "code": "81541"
    },
    {
        "name": "Aschheim",
        "code": "85609"
    },
    {
        "name": "Ursensollen",
        "code": "92289"
    },
    {
        "name": "Essing",
        "code": "93343"
    },
    {
        "name": "Baldham",
        "code": "85598"
    },
    {
        "name": "Hausham",
        "code": "83734"
    },
    {
        "name": "Schliersee",
        "code": "83727"
    },
    {
        "name": "Frauenstein",
        "code": "09623"
    },
    {
        "name": "Hermsdorf/Erzgeb.",
        "code": "01776"
    },
    {
        "name": "Uckerland, Groß Luckow, Schönhausen",
        "code": "17337"
    },
    {
        "name": "Crinitz",
        "code": "03246"
    },
    {
        "name": "Dresden",
        "code": "01307"
    },
    {
        "name": "Schwarzheide N.L.",
        "code": "01987"
    },
    {
        "name": "Dresden",
        "code": "01328"
    },
    {
        "name": "Altdöbern, Luckaitztal",
        "code": "03229"
    },
    {
        "name": "Lauta",
        "code": "02991"
    },
    {
        "name": "Drebkau",
        "code": "03116"
    },
    {
        "name": "Cottbus",
        "code": "03051"
    },
    {
        "name": "Neuzelle",
        "code": "15898"
    },
    {
        "name": "Döbern",
        "code": "03159"
    },
    {
        "name": "Roth",
        "code": "91154"
    },
    {
        "name": "Schwanebeck, Gröningen, Kroppenstedt",
        "code": "39397"
    },
    {
        "name": "Nennslingen",
        "code": "91790"
    },
    {
        "name": "Wattendorf",
        "code": "96196"
    },
    {
        "name": "Andechs",
        "code": "82346"
    },
    {
        "name": "Weismain",
        "code": "96260"
    },
    {
        "name": "Döschnitz, Sitzendorf, Rohrbach",
        "code": "07429"
    },
    {
        "name": "Nürnberg-Feucht, Feuchter Forst",
        "code": "90537"
    },
    {
        "name": "Bergheim",
        "code": "86673"
    },
    {
        "name": "Küps",
        "code": "96328"
    },
    {
        "name": "Stockheim",
        "code": "96342"
    },
    {
        "name": "Gerolsbach",
        "code": "85302"
    },
    {
        "name": "Berngau",
        "code": "92361"
    },
    {
        "name": "Mönchweiler",
        "code": "78087"
    },
    {
        "name": "Mannheim",
        "code": "68159"
    },
    {
        "name": "Altrip",
        "code": "67122"
    },
    {
        "name": "Glatten",
        "code": "72293"
    },
    {
        "name": "Straubenhardt",
        "code": "75334"
    },
    {
        "name": "Grömbach",
        "code": "72294"
    },
    {
        "name": "Bromskirchen, Hallenberg",
        "code": "59969"
    },
    {
        "name": "Wetzlar",
        "code": "35584"
    },
    {
        "name": "Keltern",
        "code": "75210"
    },
    {
        "name": "Wörnersberg",
        "code": "72299"
    },
    {
        "name": "Sankt Leon-Rot",
        "code": "68789"
    },
    {
        "name": "Erzhausen",
        "code": "64390"
    },
    {
        "name": "Talheim",
        "code": "78607"
    },
    {
        "name": "Aldingen",
        "code": "78554"
    },
    {
        "name": "Darmstadt",
        "code": "64283"
    },
    {
        "name": "Frankfurt am Main",
        "code": "60596"
    },
    {
        "name": "Bremen",
        "code": "28717"
    },
    {
        "name": "Frankfurt am Main",
        "code": "60313"
    },
    {
        "name": "Denkingen",
        "code": "78588"
    },
    {
        "name": "Buseck",
        "code": "35418"
    },
    {
        "name": "Bad Salzuflen",
        "code": "32108"
    },
    {
        "name": "Offenbach am Main",
        "code": "63067"
    },
    {
        "name": "Detmold",
        "code": "32758"
    },
    {
        "name": "Mauer",
        "code": "69256"
    },
    {
        "name": "Allendorf",
        "code": "35469"
    },
    {
        "name": "Reinheim",
        "code": "64354"
    },
    {
        "name": "Wurmberg",
        "code": "75449"
    },
    {
        "name": "Schönbrunn",
        "code": "69436"
    },
    {
        "name": "Ammerbuch",
        "code": "72119"
    },
    {
        "name": "Neuhausen ob Eck",
        "code": "78579"
    },
    {
        "name": "Borstel",
        "code": "27246"
    },
    {
        "name": "Bremen",
        "code": "28329"
    },
    {
        "name": "Gilserberg",
        "code": "34630"
    },
    {
        "name": "Obrigheim",
        "code": "74847"
    },
    {
        "name": "Straßberg",
        "code": "72479"
    },
    {
        "name": "Liebenau",
        "code": "31618"
    },
    {
        "name": "Hohenfels",
        "code": "78355"
    },
    {
        "name": "Hemmoor",
        "code": "21745"
    },
    {
        "name": "Freigericht",
        "code": "63579"
    },
    {
        "name": "Blender",
        "code": "27337"
    },
    {
        "name": "Schieder-Schwalenberg",
        "code": "32816"
    },
    {
        "name": "Neufra",
        "code": "72419"
    },
    {
        "name": "Kirchentellinsfurt",
        "code": "72138"
    },
    {
        "name": "Stuttgart",
        "code": "70439"
    },
    {
        "name": "Stuttgart",
        "code": "70178"
    },
    {
        "name": "Altenriet",
        "code": "72657"
    },
    {
        "name": "Konstanz",
        "code": "78464"
    },
    {
        "name": "Tellingstedt",
        "code": "25782"
    },
    {
        "name": "Reutlingen",
        "code": "72760"
    },
    {
        "name": "Reutlingen",
        "code": "72764"
    },
    {
        "name": "Salem",
        "code": "88682"
    },
    {
        "name": "Neckartailfingen",
        "code": "72666"
    },
    {
        "name": "Brachttal",
        "code": "63636"
    },
    {
        "name": "Heuerßen",
        "code": "31700"
    },
    {
        "name": "Neuenstadt am Kocher",
        "code": "74196"
    },
    {
        "name": "Köngen",
        "code": "73257"
    },
    {
        "name": "Edermünde",
        "code": "34295"
    },
    {
        "name": "Fredenbeck",
        "code": "21717"
    },
    {
        "name": "Grebenstein",
        "code": "34393"
    },
    {
        "name": "Bollingstedt, Jübek",
        "code": "24855"
    },
    {
        "name": "Deizisau",
        "code": "73779"
    },
    {
        "name": "Neuhütten",
        "code": "97843"
    },
    {
        "name": "Erkenbrechtsweiler",
        "code": "73268"
    },
    {
        "name": "Barendorf, Vastorf",
        "code": "21397"
    },
    {
        "name": "Braunschweig",
        "code": "38106"
    },
    {
        "name": "Neuhof a.d.Zenn",
        "code": "90616"
    },
    {
        "name": "Tapfheim",
        "code": "86660"
    },
    {
        "name": "Tambach-Dietharz/ Thür.",
        "code": "99897"
    },
    {
        "name": "Sarkwitz",
        "code": "23629"
    },
    {
        "name": "Jengen",
        "code": "86860"
    },
    {
        "name": "Gunzenhausen",
        "code": "91710"
    },
    {
        "name": "Kutzenhausen",
        "code": "86500"
    },
    {
        "name": "Semmenstedt",
        "code": "38327"
    },
    {
        "name": "Breitbrunn",
        "code": "96151"
    },
    {
        "name": "Nordhausen",
        "code": "99734"
    },
    {
        "name": "Buchloe",
        "code": "86807"
    },
    {
        "name": "Stöttwang",
        "code": "87677"
    },
    {
        "name": "Oberhof",
        "code": "98559"
    },
    {
        "name": "Tappenbeck",
        "code": "38479"
    },
    {
        "name": "Wolfsburg",
        "code": "38448"
    },
    {
        "name": "Denklingen",
        "code": "86920"
    },
    {
        "name": "Gablingen",
        "code": "86456"
    },
    {
        "name": "Neuendettelsau",
        "code": "91564"
    },
    {
        "name": "Stadtbergen",
        "code": "86391"
    },
    {
        "name": "Badersleben u.a.",
        "code": "38836"
    },
    {
        "name": "Schleusegrund",
        "code": "98667"
    },
    {
        "name": "Schongau",
        "code": "86956"
    },
    {
        "name": "Hitzacker (Elbe)",
        "code": "29456"
    },
    {
        "name": "Grafhorst",
        "code": "38462"
    },
    {
        "name": "Heßdorf",
        "code": "91093"
    },
    {
        "name": "Baar",
        "code": "86674"
    },
    {
        "name": "Mörnsheim",
        "code": "91804"
    },
    {
        "name": "Georgensgmünd",
        "code": "91166"
    },
    {
        "name": "Erfurt",
        "code": "99095"
    },
    {
        "name": "Windach",
        "code": "86949"
    },
    {
        "name": "Rockhausen, Klettbach",
        "code": "99102"
    },
    {
        "name": "Uttenreuth, Marloffstein",
        "code": "91080"
    },
    {
        "name": "Olsbrücken",
        "code": "67737"
    },
    {
        "name": "Saterland",
        "code": "26683"
    },
    {
        "name": "Forchheim",
        "code": "79362"
    },
    {
        "name": "Herscheid",
        "code": "58849"
    },
    {
        "name": "Sankt Goarshausen u.a.",
        "code": "56346"
    },
    {
        "name": "Lahr/Schwarzwald",
        "code": "77933"
    },
    {
        "name": "Kehl",
        "code": "77694"
    },
    {
        "name": "Westerkappeln",
        "code": "49492"
    },
    {
        "name": "Bad Kreuznach",
        "code": "55545"
    },
    {
        "name": "Hausen im Wiesental",
        "code": "79688"
    },
    {
        "name": "Burgschwalbach",
        "code": "65558"
    },
    {
        "name": "Zetel",
        "code": "26340"
    },
    {
        "name": "Bad Bergzabern u.a.",
        "code": "76887"
    },
    {
        "name": "Sippersfeld",
        "code": "67729"
    },
    {
        "name": "Gensingen",
        "code": "55457"
    },
    {
        "name": "Kirchhundem",
        "code": "57399"
    },
    {
        "name": "Wallenhorst",
        "code": "49134"
    },
    {
        "name": "Beckum",
        "code": "59269"
    },
    {
        "name": "Lichtenau",
        "code": "77839"
    },
    {
        "name": "Landau in der Pfalz",
        "code": "76829"
    },
    {
        "name": "Sankt Peter",
        "code": "79271"
    },
    {
        "name": "Limburg",
        "code": "65549"
    },
    {
        "name": "Eltville am Rhein",
        "code": "65343"
    },
    {
        "name": "Dachsberg",
        "code": "79875"
    },
    {
        "name": "Ravenstein",
        "code": "74747"
    },
    {
        "name": "Neuenstein (Hessen)",
        "code": "36286"
    },
    {
        "name": "Seelze",
        "code": "30926"
    },
    {
        "name": "Oberweser",
        "code": "34399"
    },
    {
        "name": "Albershausen",
        "code": "73095"
    },
    {
        "name": "Obersinn",
        "code": "97791"
    },
    {
        "name": "Wedemark",
        "code": "30900"
    },
    {
        "name": "Künzelsau, Ingelfingen",
        "code": "74653"
    },
    {
        "name": "Dransfeld u.a.",
        "code": "37127"
    },
    {
        "name": "Kirrweiler (Pfalz)",
        "code": "67489"
    },
    {
        "name": "Offstein",
        "code": "67591"
    },
    {
        "name": "Gundersheim",
        "code": "67598"
    },
    {
        "name": "Friedelsheim",
        "code": "67159"
    },
    {
        "name": "Neuburg am Rhein",
        "code": "76776"
    },
    {
        "name": "Gundheim",
        "code": "67599"
    },
    {
        "name": "Bechtheim",
        "code": "67595"
    },
    {
        "name": "Dillenburg",
        "code": "35687"
    },
    {
        "name": "Dorn-Dürkheim",
        "code": "67585"
    },
    {
        "name": "Lambsheim",
        "code": "67245"
    },
    {
        "name": "Maxdorf",
        "code": "67133"
    },
    {
        "name": "Wiesbaden",
        "code": "55246"
    },
    {
        "name": "Gimbsheim",
        "code": "67578"
    },
    {
        "name": "Eggingen",
        "code": "79805"
    },
    {
        "name": "Fraunberg",
        "code": "85447"
    },
    {
        "name": "Gattendorf",
        "code": "95185"
    },
    {
        "name": "Weihmichl",
        "code": "84107"
    },
    {
        "name": "Erbendorf",
        "code": "92681"
    },
    {
        "name": "Bad Alexandersbad",
        "code": "95680"
    },
    {
        "name": "Lengdorf",
        "code": "84435"
    },
    {
        "name": "Rostock",
        "code": "18106"
    },
    {
        "name": "Bad Dürrenberg",
        "code": "06231"
    },
    {
        "name": "Dorfen",
        "code": "84405"
    },
    {
        "name": "Rostock",
        "code": "18057"
    },
    {
        "name": "Neustadt (Dosse) u.a.",
        "code": "16845"
    },
    {
        "name": "Mallersdorf-Pfaffenberg",
        "code": "84066"
    },
    {
        "name": "Wackersdorf",
        "code": "92442"
    },
    {
        "name": "Griesstätt",
        "code": "83556"
    },
    {
        "name": "Raguhn-Jeßnitz",
        "code": "06779"
    },
    {
        "name": "Bodenwöhr",
        "code": "92439"
    },
    {
        "name": "Floß",
        "code": "92685"
    },
    {
        "name": "Schöneck/Vogtl.",
        "code": "08261"
    },
    {
        "name": "Wurmsham",
        "code": "84189"
    },
    {
        "name": "Wald",
        "code": "93192"
    },
    {
        "name": "Leipzig",
        "code": "04317"
    },
    {
        "name": "Leipzig",
        "code": "04318"
    },
    {
        "name": "Leipzig",
        "code": "04316"
    },
    {
        "name": "Schneeberg",
        "code": "08289"
    },
    {
        "name": "Löbnitz",
        "code": "18314"
    },
    {
        "name": "Bad Schmiedeberg",
        "code": "06905"
    },
    {
        "name": "Callenberg, Hohenstein-Ernstthal, Bernsdorf",
        "code": "09337"
    },
    {
        "name": "Wittenberg",
        "code": "06888"
    },
    {
        "name": "Tribsees",
        "code": "18465"
    },
    {
        "name": "Röhrsdorf",
        "code": "09247"
    },
    {
        "name": "Wallerfing",
        "code": "94574"
    },
    {
        "name": "Arnbruck",
        "code": "93471"
    },
    {
        "name": "Triftern",
        "code": "84371"
    },
    {
        "name": "Prohn",
        "code": "18445"
    },
    {
        "name": "Frankenberg",
        "code": "09669"
    },
    {
        "name": "Marktschellenberg",
        "code": "83487"
    },
    {
        "name": "Regen",
        "code": "94209"
    },
    {
        "name": "Nuthetal",
        "code": "14558"
    },
    {
        "name": "Herzberg/ Elster",
        "code": "04916"
    },
    {
        "name": "Zschopau",
        "code": "09434"
    },
    {
        "name": "Pockau-Lengefeld (Pockau)",
        "code": "09509"
    },
    {
        "name": "Borgsdorf",
        "code": "16556"
    },
    {
        "name": "Liebenwalde",
        "code": "16559"
    },
    {
        "name": "Hohen Neuendorf OT Bergfelde",
        "code": "16562"
    },
    {
        "name": "Berlin Lichtenfelde",
        "code": "12203"
    },
    {
        "name": "Mühlenbecker Land",
        "code": "16567"
    },
    {
        "name": "Berlin Steglitz",
        "code": "12167"
    },
    {
        "name": "Berlin Wilhelmsdorf",
        "code": "10715"
    },
    {
        "name": "Berlin",
        "code": "10827"
    },
    {
        "name": "Greifswald",
        "code": "17489"
    },
    {
        "name": "Königstein im Taunus",
        "code": "61462"
    },
    {
        "name": "Karlsruhe",
        "code": "76139"
    },
    {
        "name": "Bruchsal",
        "code": "76646"
    },
    {
        "name": "Bielefeld",
        "code": "33605"
    },
    {
        "name": "Bielefeld",
        "code": "33609"
    },
    {
        "name": "Cuxhaven",
        "code": "27478"
    },
    {
        "name": "Delmenhorst",
        "code": "27753"
    },
    {
        "name": "Kämpfelbach",
        "code": "75236"
    },
    {
        "name": "Neubulach",
        "code": "75387"
    },
    {
        "name": "Oerlinghausen",
        "code": "33813"
    },
    {
        "name": "Frankfurt am Main",
        "code": "60487"
    },
    {
        "name": "Ebhausen",
        "code": "72224"
    },
    {
        "name": "Bad Liebenzell",
        "code": "75378"
    },
    {
        "name": "Eisingen",
        "code": "75239"
    },
    {
        "name": "Herford",
        "code": "32049"
    },
    {
        "name": "Birkenau",
        "code": "69488"
    },
    {
        "name": "Marburg",
        "code": "35037"
    },
    {
        "name": "Marburg",
        "code": "35039"
    },
    {
        "name": "Niddatal",
        "code": "61194"
    },
    {
        "name": "Schwaförden",
        "code": "27252"
    },
    {
        "name": "Zaisenhausen",
        "code": "75059"
    },
    {
        "name": "Wiesenbach",
        "code": "69257"
    },
    {
        "name": "Reichelsheim (Wetterau)",
        "code": "61203"
    },
    {
        "name": "Schöneck",
        "code": "61137"
    },
    {
        "name": "Bremen",
        "code": "28213"
    },
    {
        "name": "Tönning",
        "code": "25832"
    },
    {
        "name": "Königsheim",
        "code": "78598"
    },
    {
        "name": "Illingen",
        "code": "75428"
    },
    {
        "name": "Sachsenheim",
        "code": "74343"
    },
    {
        "name": "Vaihingen an der Enz",
        "code": "71665"
    },
    {
        "name": "Schwaigern",
        "code": "74193"
    },
    {
        "name": "Grasberg",
        "code": "28879"
    },
    {
        "name": "Dörentrup",
        "code": "32694"
    },
    {
        "name": "Rottenburg am Neckar",
        "code": "72108"
    },
    {
        "name": "Rinteln",
        "code": "31737"
    },
    {
        "name": "Büdingen",
        "code": "63654"
    },
    {
        "name": "Zeven, Elsdorf",
        "code": "27404"
    },
    {
        "name": "Reichenau",
        "code": "78479"
    },
    {
        "name": "Viöl",
        "code": "25884"
    },
    {
        "name": "Herdwangen-Schönach",
        "code": "88634"
    },
    {
        "name": "Antrifttal",
        "code": "36326"
    },
    {
        "name": "Stuttgart",
        "code": "70192"
    },
    {
        "name": "Nordsehl",
        "code": "31717"
    },
    {
        "name": "Marienmünster",
        "code": "37696"
    },
    {
        "name": "Stuttgart",
        "code": "70174"
    },
    {
        "name": "Stuttgart",
        "code": "70599"
    },
    {
        "name": "Billigheim",
        "code": "74842"
    },
    {
        "name": "Stuttgart",
        "code": "70376"
    },
    {
        "name": "Pleidelsheim",
        "code": "74385"
    },
    {
        "name": "Fritzlar",
        "code": "34560"
    },
    {
        "name": "Sailauf",
        "code": "63877"
    },
    {
        "name": "Fellbach",
        "code": "70734"
    },
    {
        "name": "Mengen",
        "code": "88512"
    },
    {
        "name": "Wabern",
        "code": "34590"
    },
    {
        "name": "Lauterbach",
        "code": "36341"
    },
    {
        "name": "Dammbach",
        "code": "63874"
    },
    {
        "name": "Meersburg",
        "code": "88709"
    },
    {
        "name": "Immenstaad am Bodensee",
        "code": "88090"
    },
    {
        "name": "Gomadingen",
        "code": "72532"
    },
    {
        "name": "Obersulm",
        "code": "74182"
    },
    {
        "name": "Altbach",
        "code": "73776"
    },
    {
        "name": "Kassel",
        "code": "34132"
    },
    {
        "name": "Münsingen",
        "code": "72525"
    },
    {
        "name": "Icking",
        "code": "82057"
    },
    {
        "name": "Denkendorf",
        "code": "85095"
    },
    {
        "name": "Hettstedt, Endorf",
        "code": "06333"
    },
    {
        "name": "Straßlach-Dingharting",
        "code": "82064"
    },
    {
        "name": "Remptendorf",
        "code": "07368"
    },
    {
        "name": "Jena",
        "code": "07745"
    },
    {
        "name": "Hirschbach",
        "code": "92275"
    },
    {
        "name": "Bayreuth",
        "code": "95447"
    },
    {
        "name": "Bindlach",
        "code": "95463"
    },
    {
        "name": "Breitenbrunn",
        "code": "92363"
    },
    {
        "name": "München",
        "code": "81667"
    },
    {
        "name": "Bad Steben",
        "code": "95138"
    },
    {
        "name": "Nienburg (Saale)",
        "code": "06429"
    },
    {
        "name": "Schönebeck",
        "code": "39218"
    },
    {
        "name": "Gefrees",
        "code": "95482"
    },
    {
        "name": "Schauenstein",
        "code": "95197"
    },
    {
        "name": "Hallbergmoos",
        "code": "85399"
    },
    {
        "name": "Calbe, Rosenburg u.a.",
        "code": "39240"
    },
    {
        "name": "Siegenburg",
        "code": "93354"
    },
    {
        "name": "Hof",
        "code": "95030"
    },
    {
        "name": "Halle/ Saale",
        "code": "06126"
    },
    {
        "name": "Klingenmünster u.a.",
        "code": "76889"
    },
    {
        "name": "Hasel",
        "code": "79686"
    },
    {
        "name": "Westerburg",
        "code": "56457"
    },
    {
        "name": "Bockhorn",
        "code": "26345"
    },
    {
        "name": "Sprendlingen",
        "code": "55576"
    },
    {
        "name": "Biberach",
        "code": "77781"
    },
    {
        "name": "Soest",
        "code": "59494"
    },
    {
        "name": "Wörrstadt",
        "code": "55286"
    },
    {
        "name": "Sinzheim",
        "code": "76547"
    },
    {
        "name": "Heidesheim am Rhein",
        "code": "55262"
    },
    {
        "name": "Bad Waldsee",
        "code": "88339"
    },
    {
        "name": "Soltau",
        "code": "29614"
    },
    {
        "name": "Borgstedt",
        "code": "24794"
    },
    {
        "name": "Hamburg",
        "code": "22559"
    },
    {
        "name": "Hardegsen",
        "code": "37181"
    },
    {
        "name": "Hannover",
        "code": "30161"
    },
    {
        "name": "Hannover",
        "code": "30161"
    },
    {
        "name": "Nüsttal",
        "code": "36167"
    },
    {
        "name": "Ilshofen",
        "code": "74532"
    },
    {
        "name": "Undeloh",
        "code": "21274"
    },
    {
        "name": "Diekholzen",
        "code": "31199"
    },
    {
        "name": "Frankenhardt",
        "code": "74586"
    },
    {
        "name": "Rot an der Rot",
        "code": "88430"
    },
    {
        "name": "Göttingen",
        "code": "37085"
    },
    {
        "name": "Bendestorf",
        "code": "21227"
    },
    {
        "name": "Hamburg",
        "code": "22767"
    },
    {
        "name": "Hamburg",
        "code": "22041"
    },
    {
        "name": "Stimpfach",
        "code": "74597"
    },
    {
        "name": "Bellenberg",
        "code": "89287"
    },
    {
        "name": "Marktbreit",
        "code": "97340"
    },
    {
        "name": "Albertshofen",
        "code": "97320"
    },
    {
        "name": "Wathlingen",
        "code": "29339"
    },
    {
        "name": "Bad Salzungen",
        "code": "36433"
    },
    {
        "name": "Volkach",
        "code": "97332"
    },
    {
        "name": "Kirchgellersen, Westergellersen, Südergellersen",
        "code": "21394"
    },
    {
        "name": "Babenhausen",
        "code": "87727"
    },
    {
        "name": "Beedenbostel",
        "code": "29355"
    },
    {
        "name": "Oberschönegg",
        "code": "87770"
    },
    {
        "name": "Salzgitter",
        "code": "38229"
    },
    {
        "name": "Haldenwang",
        "code": "87490"
    },
    {
        "name": "Burgau",
        "code": "89331"
    },
    {
        "name": "Leiferde",
        "code": "38542"
    },
    {
        "name": "Stetten",
        "code": "87778"
    },
    {
        "name": "Ursberg",
        "code": "86513"
    },
    {
        "name": "Pfaffenhausen",
        "code": "87772"
    },
    {
        "name": "Hamfelde, Kasseburg, Köthel, Rausdorf, Schönberg",
        "code": "22929"
    },
    {
        "name": "Glött",
        "code": "89353"
    },
    {
        "name": "Möttingen",
        "code": "86753"
    },
    {
        "name": "Eutin, Süsel",
        "code": "23701"
    },
    {
        "name": "Fischach",
        "code": "86850"
    },
    {
        "name": "Scherstetten",
        "code": "86872"
    },
    {
        "name": "Schlotheim",
        "code": "99994"
    },
    {
        "name": "Westendorf",
        "code": "87679"
    },
    {
        "name": "Bernbeuren",
        "code": "86975"
    },
    {
        "name": "Meinheim",
        "code": "91802"
    },
    {
        "name": "Lübeck",
        "code": "23570"
    },
    {
        "name": "Aindling",
        "code": "86447"
    },
    {
        "name": "Rehling",
        "code": "86508"
    },
    {
        "name": "Heiligenhafen",
        "code": "23774"
    },
    {
        "name": "Halberstadt",
        "code": "38820"
    },
    {
        "name": "Erlangen",
        "code": "91054"
    },
    {
        "name": "Kassel",
        "code": "34134"
    },
    {
        "name": "Kollmar, Pagensand",
        "code": "25377"
    },
    {
        "name": "Bissingen an der Teck",
        "code": "73266"
    },
    {
        "name": "Friedrichshafen",
        "code": "88046"
    },
    {
        "name": "Großerlach",
        "code": "71577"
    },
    {
        "name": "Uslar",
        "code": "37170"
    },
    {
        "name": "Meckenbeuren",
        "code": "88074"
    },
    {
        "name": "Selk, Geltdorf, Hahnekrug",
        "code": "24884"
    },
    {
        "name": "Seester",
        "code": "25370"
    },
    {
        "name": "Sörup",
        "code": "24966"
    },
    {
        "name": "Nonnenhorn",
        "code": "88149"
    },
    {
        "name": "Haunetal",
        "code": "36166"
    },
    {
        "name": "Börtlingen",
        "code": "73104"
    },
    {
        "name": "Hünstetten, Idstein",
        "code": "65510"
    },
    {
        "name": "Mainz",
        "code": "55126"
    },
    {
        "name": "Greifenstein",
        "code": "35753"
    },
    {
        "name": "Hornberg",
        "code": "78132"
    },
    {
        "name": "Vechta",
        "code": "49377"
    },
    {
        "name": "Wiesbaden",
        "code": "65187"
    },
    {
        "name": "Offstein",
        "code": "67591"
    },
    {
        "name": "Mainz",
        "code": "55118"
    },
    {
        "name": "Drebber",
        "code": "49457"
    },
    {
        "name": "Gütersloh",
        "code": "33332"
    },
    {
        "name": "Bilzingsleben Kannawurf Oldisleben",
        "code": "06578"
    },
    {
        "name": "Fehmarn",
        "code": "23769"
    },
    {
        "name": "Eglfing",
        "code": "82436"
    },
    {
        "name": "Lützow",
        "code": "19209"
    },
    {
        "name": "Eschenlohe",
        "code": "82438"
    },
    {
        "name": "Igensdorf",
        "code": "91338"
    },
    {
        "name": "Pyrbaum",
        "code": "90602"
    },
    {
        "name": "Hollfeld",
        "code": "96142"
    },
    {
        "name": "Rückersdorf",
        "code": "90607"
    },
    {
        "name": "Arendsee",
        "code": "39619"
    },
    {
        "name": "Postbauer-Heng",
        "code": "92353"
    },
    {
        "name": "Gorleben",
        "code": "29475"
    },
    {
        "name": "Berlin Wartenberg",
        "code": "13059"
    },
    {
        "name": "Berlin Falkenberg",
        "code": "13057"
    },
    {
        "name": "Putbus",
        "code": "18581"
    },
    {
        "name": "Plessa, Schraden",
        "code": "04928"
    },
    {
        "name": "Berlin Köpenick",
        "code": "12559"
    },
    {
        "name": "Dresden",
        "code": "01097"
    },
    {
        "name": "Dresden",
        "code": "01326"
    },
    {
        "name": "Karlshagen",
        "code": "17449"
    },
    {
        "name": "Strausberg",
        "code": "15344"
    },
    {
        "name": "Straupitz",
        "code": "15913"
    },
    {
        "name": "Kolkwitz",
        "code": "03099"
    },
    {
        "name": "Vogelsang-Warsin, Meiersberg, Mönkebude u.a.",
        "code": "17375"
    },
    {
        "name": "Vogelsang-Warsin, Meiersberg, Mönkebude u.a.",
        "code": "17375"
    },
    {
        "name": "Cottbus",
        "code": "03055"
    },
    {
        "name": "Kevelaer-Twisteden",
        "code": "47624"
    },
    {
        "name": "Waxweiler",
        "code": "54649"
    },
    {
        "name": "Elsdorf",
        "code": "50189"
    },
    {
        "name": "Newel",
        "code": "54309"
    },
    {
        "name": "Saarlouis",
        "code": "66740"
    },
    {
        "name": "Niersbach, Sehlem, Plein u.a.",
        "code": "54518"
    },
    {
        "name": "Osburg, Gusterath, Farschweiler, Kasel u.a.",
        "code": "54317"
    },
    {
        "name": "Düsseldorf",
        "code": "40474"
    },
    {
        "name": "Duisburg",
        "code": "47058"
    },
    {
        "name": "Salmtal",
        "code": "54528"
    },
    {
        "name": "Mülheim an der Ruhr",
        "code": "45478"
    },
    {
        "name": "Ahaus",
        "code": "48683"
    },
    {
        "name": "Piesport",
        "code": "54498"
    },
    {
        "name": "Mülheim an der Ruhr",
        "code": "45468"
    },
    {
        "name": "Eppelborn",
        "code": "66571"
    },
    {
        "name": "Malborn",
        "code": "54426"
    },
    {
        "name": "Gelsenkirchen",
        "code": "45896"
    },
    {
        "name": "Solingen",
        "code": "42719"
    },
    {
        "name": "Saarbrücken",
        "code": "66132"
    },
    {
        "name": "Kandern",
        "code": "79400"
    },
    {
        "name": "Dortmund",
        "code": "44289"
    },
    {
        "name": "Ellern (Hunsrück), Schnorbach",
        "code": "55497"
    },
    {
        "name": "Lüdenscheid",
        "code": "58509"
    },
    {
        "name": "Reichshof",
        "code": "51580"
    },
    {
        "name": "Sankt Goar",
        "code": "56329"
    },
    {
        "name": "Bad Krozingen",
        "code": "79189"
    },
    {
        "name": "Ladbergen",
        "code": "49549"
    },
    {
        "name": "Otterbach",
        "code": "67731"
    },
    {
        "name": "Bruchweiler-Bärenbach u.a.",
        "code": "76891"
    },
    {
        "name": "Kaiserslautern",
        "code": "67657"
    },
    {
        "name": "Siershahn",
        "code": "56427"
    },
    {
        "name": "Dortmund",
        "code": "44229"
    },
    {
        "name": "Lehmen, Niederfell, Oberfell, Wolken u.a.",
        "code": "56332"
    },
    {
        "name": "Windeck",
        "code": "51570"
    },
    {
        "name": "Hundsbach",
        "code": "55621"
    },
    {
        "name": "Pfeffelbach",
        "code": "66871"
    },
    {
        "name": "Breitscheid, Dattenberg, Hausen, Hümmerich, Kasbach-Ohlenberg, Roßbach u.a.",
        "code": "53547"
    },
    {
        "name": "Gevelsberg",
        "code": "58285"
    },
    {
        "name": "Kirchberg u.a.",
        "code": "55481"
    },
    {
        "name": "Witten",
        "code": "58453"
    },
    {
        "name": "Baltrum",
        "code": "26579"
    },
    {
        "name": "Dickenschied u.a.",
        "code": "55483"
    },
    {
        "name": "Burscheid",
        "code": "51399"
    },
    {
        "name": "Pünderich",
        "code": "56862"
    },
    {
        "name": "Bochum",
        "code": "44879"
    },
    {
        "name": "Meppen",
        "code": "49716"
    },
    {
        "name": "Kleinich",
        "code": "54483"
    },
    {
        "name": "Bochum",
        "code": "44867"
    },
    {
        "name": "Siegburg",
        "code": "53721"
    },
    {
        "name": "Schwörstadt",
        "code": "79739"
    },
    {
        "name": "Guldental",
        "code": "55452"
    },
    {
        "name": "Freiburg im Breisgau",
        "code": "79117"
    },
    {
        "name": "Hackenheim",
        "code": "55546"
    },
    {
        "name": "Nistertal, Enspel",
        "code": "57647"
    },
    {
        "name": "Bad Dürkheim",
        "code": "67098"
    },
    {
        "name": "Buchenbach",
        "code": "79256"
    },
    {
        "name": "Ockenheim",
        "code": "55437"
    },
    {
        "name": "Maikammer",
        "code": "67487"
    },
    {
        "name": "Gommersheim",
        "code": "67377"
    },
    {
        "name": "Hünfelden",
        "code": "65597"
    },
    {
        "name": "Versmold",
        "code": "33775"
    },
    {
        "name": "Aachen",
        "code": "52066"
    },
    {
        "name": "Wassenberg",
        "code": "41849"
    },
    {
        "name": "Kalkar",
        "code": "47546"
    },
    {
        "name": "Mönchengladbach",
        "code": "41063"
    },
    {
        "name": "Nörvenich",
        "code": "52388"
    },
    {
        "name": "Welschbillig, Igel, Aach",
        "code": "54298"
    },
    {
        "name": "Losheim",
        "code": "66679"
    },
    {
        "name": "Kerpen",
        "code": "50169"
    },
    {
        "name": "Duisburg",
        "code": "47055"
    },
    {
        "name": "Oberhausen",
        "code": "46147"
    },
    {
        "name": "Düsseldorf",
        "code": "40472"
    },
    {
        "name": "Stadtlohn",
        "code": "48703"
    },
    {
        "name": "Mehren u.a.",
        "code": "54552"
    },
    {
        "name": "Köln",
        "code": "51107"
    },
    {
        "name": "Hagen",
        "code": "58091"
    },
    {
        "name": "Dortmund",
        "code": "44145"
    },
    {
        "name": "Tiefenbach u.a.",
        "code": "55471"
    },
    {
        "name": "Bergen",
        "code": "55608"
    },
    {
        "name": "Neuwied",
        "code": "56566"
    },
    {
        "name": "Dortmund",
        "code": "44269"
    },
    {
        "name": "Mittelbrunn, Queidersbach u.a.",
        "code": "66851"
    },
    {
        "name": "Hopsten",
        "code": "48496"
    },
    {
        "name": "Schliengen",
        "code": "79418"
    },
    {
        "name": "Lautenbach",
        "code": "77794"
    },
    {
        "name": "Wiesbaden",
        "code": "65201"
    },
    {
        "name": "Breitscheid",
        "code": "35767"
    },
    {
        "name": "Kindenheim",
        "code": "67271"
    },
    {
        "name": "Steinfeld",
        "code": "49439"
    },
    {
        "name": "Grafenhausen",
        "code": "79865"
    },
    {
        "name": "Erpolzheim",
        "code": "67167"
    },
    {
        "name": "Niederkirchen bei Deidesheim",
        "code": "67150"
    },
    {
        "name": "Halle (Westfalen)",
        "code": "33790"
    },
    {
        "name": "Oppenheim",
        "code": "55276"
    },
    {
        "name": "Lüdenscheid",
        "code": "58507"
    },
    {
        "name": "Münster",
        "code": "48147"
    },
    {
        "name": "Fröndenberg/Ruhr",
        "code": "58730"
    },
    {
        "name": "Vinningen, Trulben, Ruppertsweiler u.a.",
        "code": "66957"
    },
    {
        "name": "Telgte",
        "code": "48291"
    },
    {
        "name": "Hinterweidenthal",
        "code": "66999"
    },
    {
        "name": "Lengerich",
        "code": "49525"
    },
    {
        "name": "Bollschweil",
        "code": "79283"
    },
    {
        "name": "Norheim u.a.",
        "code": "55585"
    },
    {
        "name": "Singhofen",
        "code": "56379"
    },
    {
        "name": "Haren",
        "code": "49733"
    },
    {
        "name": "Schalkenbach, Königsfeld, Dedenbach",
        "code": "53426"
    },
    {
        "name": "Bochum",
        "code": "44869"
    },
    {
        "name": "Remagen",
        "code": "53424"
    },
    {
        "name": "Bonn",
        "code": "53179"
    },
    {
        "name": "Dersum",
        "code": "26906"
    },
    {
        "name": "Jemgum",
        "code": "26844"
    },
    {
        "name": "Schwanebeck, Gröningen, Kroppenstedt",
        "code": "39397"
    },
    {
        "name": "Heideck",
        "code": "91180"
    },
    {
        "name": "Quedlinburg, Ballenstedt",
        "code": "06485"
    },
    {
        "name": "Harsleben",
        "code": "38829"
    },
    {
        "name": "Schwaigen",
        "code": "82445"
    },
    {
        "name": "Stadelhofen",
        "code": "96187"
    },
    {
        "name": "Rockhausen, Klettbach",
        "code": "99102"
    },
    {
        "name": "Mammendorf",
        "code": "82291"
    },
    {
        "name": "Kranichfeld u.a.",
        "code": "99448"
    },
    {
        "name": "Pretzfeld",
        "code": "91362"
    },
    {
        "name": "Barnekow, Gägelow u.a.",
        "code": "23968"
    },
    {
        "name": "Jachenau",
        "code": "83676"
    },
    {
        "name": "Altdorf bei Nürnberg",
        "code": "90518"
    },
    {
        "name": "Berg",
        "code": "82335"
    },
    {
        "name": "Gröbenzell",
        "code": "82194"
    },
    {
        "name": "Adelebsen",
        "code": "37139"
    },
    {
        "name": "Fichtenberg",
        "code": "74427"
    },
    {
        "name": "Böel",
        "code": "24401"
    },
    {
        "name": "Wangen im Allgäu",
        "code": "88239"
    },
    {
        "name": "Altheim",
        "code": "89605"
    },
    {
        "name": "Allmendingen",
        "code": "89604"
    },
    {
        "name": "Donzdorf",
        "code": "73072"
    },
    {
        "name": "Cornberg",
        "code": "36219"
    },
    {
        "name": "Hamburg",
        "code": "21147"
    },
    {
        "name": "Langenburg",
        "code": "74595"
    },
    {
        "name": "Scheidegg",
        "code": "88175"
    },
    {
        "name": "Hamburg",
        "code": "22547"
    },
    {
        "name": "Göttingen",
        "code": "37081"
    },
    {
        "name": "Philippsthal",
        "code": "36269"
    },
    {
        "name": "Burgrieden",
        "code": "88483"
    },
    {
        "name": "Waabs",
        "code": "24369"
    },
    {
        "name": "Göttingen",
        "code": "37083"
    },
    {
        "name": "Seevetal",
        "code": "21218"
    },
    {
        "name": "Neumünster",
        "code": "24537"
    },
    {
        "name": "Ulm",
        "code": "89075"
    },
    {
        "name": "Schmalfeld",
        "code": "24640"
    },
    {
        "name": "Neumünster",
        "code": "24536"
    },
    {
        "name": "Hamburg",
        "code": "21073"
    },
    {
        "name": "Hamburg",
        "code": "22453"
    },
    {
        "name": "Neu-Ulm",
        "code": "89231"
    },
    {
        "name": "Hamburg",
        "code": "22085"
    },
    {
        "name": "Kürnach",
        "code": "97273"
    },
    {
        "name": "Wallhausen",
        "code": "74599"
    },
    {
        "name": "Seulingen, Waake u.a.",
        "code": "37136"
    },
    {
        "name": "Heiligenstadt",
        "code": "37308"
    },
    {
        "name": "Hamburg",
        "code": "22399"
    },
    {
        "name": "Celle",
        "code": "29227"
    },
    {
        "name": "Kronshagen",
        "code": "24119"
    },
    {
        "name": "Lautrach",
        "code": "87763"
    },
    {
        "name": "Geldersheim",
        "code": "97505"
    },
    {
        "name": "Börnhöved",
        "code": "24619"
    },
    {
        "name": "Rothenburg ob der Tauber",
        "code": "91541"
    },
    {
        "name": "Hamburg",
        "code": "21033"
    },
    {
        "name": "Eschede",
        "code": "29348"
    },
    {
        "name": "Fellheim",
        "code": "87748"
    },
    {
        "name": "Unterroth",
        "code": "89299"
    },
    {
        "name": "Kiel",
        "code": "24149"
    },
    {
        "name": "Waltenhofen",
        "code": "87448"
    },
    {
        "name": "Röthlein",
        "code": "97520"
    },
    {
        "name": "Lachendorf",
        "code": "29331"
    },
    {
        "name": "Sehlde",
        "code": "38279"
    },
    {
        "name": "Schwarzach a. Main",
        "code": "97359"
    },
    {
        "name": "Leinefelde-Worbis, Wingerode, Hausen",
        "code": "37327"
    },
    {
        "name": "Breitenthal",
        "code": "86488"
    },
    {
        "name": "Lauben",
        "code": "87493"
    },
    {
        "name": "Vechelde",
        "code": "38159"
    },
    {
        "name": "Erkheim",
        "code": "87746"
    },
    {
        "name": "Witzhave",
        "code": "22969"
    },
    {
        "name": "Handorf",
        "code": "21447"
    },
    {
        "name": "Geesthacht",
        "code": "21502"
    },
    {
        "name": "Aurach",
        "code": "91589"
    },
    {
        "name": "Schwienau",
        "code": "29593"
    },
    {
        "name": "Markt Bibart",
        "code": "91477"
    },
    {
        "name": "Langlingen",
        "code": "29364"
    },
    {
        "name": "Wertach",
        "code": "87497"
    },
    {
        "name": "Kammlach",
        "code": "87754"
    },
    {
        "name": "Didderse",
        "code": "38530"
    },
    {
        "name": "Hamfelde, Kasseburg, Köthel, Rausdorf, Schönberg",
        "code": "22929"
    },
    {
        "name": "Riesbürg",
        "code": "73469"
    },
    {
        "name": "Langfurth",
        "code": "91731"
    },
    {
        "name": "Dorstadt, Flöthe, Börßum u.a.",
        "code": "38312"
    },
    {
        "name": "Sandesneben u.a.",
        "code": "23898"
    },
    {
        "name": "Grebin",
        "code": "24329"
    },
    {
        "name": "Balzhausen",
        "code": "86483"
    },
    {
        "name": "Neustadt a.d.Aisch",
        "code": "91413"
    },
    {
        "name": "Braunlage",
        "code": "37444"
    },
    {
        "name": "Zeulenroda-Triebes, Langenwolschendorf",
        "code": "07937"
    },
    {
        "name": "Hof",
        "code": "95028"
    },
    {
        "name": "Regnitzlosau",
        "code": "95194"
    },
    {
        "name": "Altenstadt a.d. Waldnaab",
        "code": "92665"
    },
    {
        "name": "Maxhütte-Haidhof",
        "code": "93142"
    },
    {
        "name": "Schechen",
        "code": "83135"
    },
    {
        "name": "Rechtmehring",
        "code": "83562"
    },
    {
        "name": "Stephanskirchen",
        "code": "83071"
    },
    {
        "name": "Neufraunhofen",
        "code": "84181"
    },
    {
        "name": "Reichertsheim",
        "code": "84437"
    },
    {
        "name": "Trausnitz",
        "code": "92555"
    },
    {
        "name": "Leipzig",
        "code": "04205"
    },
    {
        "name": "Reichenbach/Vogtl.",
        "code": "08468"
    },
    {
        "name": "Niedermurach",
        "code": "92545"
    },
    {
        "name": "Nobitz, Göhren, Windischleuba",
        "code": "04603"
    },
    {
        "name": "Eggstätt",
        "code": "83125"
    },
    {
        "name": "Moosbach",
        "code": "92709"
    },
    {
        "name": "Jördenstorf, Prebberede u.a.",
        "code": "17168"
    },
    {
        "name": "Kirchberg",
        "code": "08107"
    },
    {
        "name": "Brandenburg/ Havel",
        "code": "14772"
    },
    {
        "name": "Saal",
        "code": "18317"
    },
    {
        "name": "Nauen",
        "code": "14641"
    },
    {
        "name": "Landau a.d. Isar",
        "code": "94405"
    },
    {
        "name": "Eichendorf",
        "code": "94428"
    },
    {
        "name": "Zwönitz",
        "code": "08297"
    },
    {
        "name": "Mariaposching",
        "code": "94553"
    },
    {
        "name": "Fehrbellin, Temnitzquell, Märkisch Linden u.a.",
        "code": "16818"
    },
    {
        "name": "Wesenberg",
        "code": "17255"
    },
    {
        "name": "Mittweida, Kriebstein",
        "code": "09648"
    },
    {
        "name": "Lindow u.a.",
        "code": "16835"
    },
    {
        "name": "Bischofswiesen",
        "code": "83483"
    },
    {
        "name": "Chemnitz",
        "code": "09131"
    },
    {
        "name": "Belgern-Schildau",
        "code": "04874"
    },
    {
        "name": "Lohberg",
        "code": "93470"
    },
    {
        "name": "Roßwein",
        "code": "04741"
    },
    {
        "name": "Kirchberg",
        "code": "94259"
    },
    {
        "name": "Oranienburg, Mühlenbecker Land",
        "code": "16515"
    },
    {
        "name": "Tettenweis",
        "code": "94167"
    },
    {
        "name": "Birkenwerder",
        "code": "16547"
    },
    {
        "name": "Berlin Charlottenburg",
        "code": "14057"
    },
    {
        "name": "Glienicke/Nordbahn",
        "code": "16548"
    },
    {
        "name": "Berlin Steglitz",
        "code": "12169"
    },
    {
        "name": "Berlin Friedenau",
        "code": "12159"
    },
    {
        "name": "Berlin Wedding",
        "code": "13347"
    },
    {
        "name": "Berlin",
        "code": "12277"
    },
    {
        "name": "Berlin Mitte",
        "code": "10115"
    },
    {
        "name": "Riedlhütte",
        "code": "94566"
    },
    {
        "name": "Berlin Kreuzberg",
        "code": "10963"
    },
    {
        "name": "Berlin Buckow",
        "code": "12349"
    },
    {
        "name": "Berlin Kreuzberg",
        "code": "10997"
    },
    {
        "name": "Berlin Prenzlauer Berg",
        "code": "10409"
    },
    {
        "name": "Barnstorf, Eydelstedt, Drentwede",
        "code": "49406"
    },
    {
        "name": "Eschbronn",
        "code": "78664"
    },
    {
        "name": "Biedenkopf",
        "code": "35216"
    },
    {
        "name": "Bünde",
        "code": "32257"
    },
    {
        "name": "Mannheim",
        "code": "68239"
    },
    {
        "name": "Bielefeld",
        "code": "33689"
    },
    {
        "name": "Lahnau",
        "code": "35633"
    },
    {
        "name": "Deißlingen",
        "code": "78652"
    },
    {
        "name": "Bensheim",
        "code": "64625"
    },
    {
        "name": "Hiddenhausen",
        "code": "32120"
    },
    {
        "name": "Trossingen",
        "code": "78647"
    },
    {
        "name": "Gondelsheim",
        "code": "75053"
    },
    {
        "name": "Friedberg (Hessen)",
        "code": "61169"
    },
    {
        "name": "Frankfurt am Main",
        "code": "60323"
    },
    {
        "name": "Östringen",
        "code": "76684"
    },
    {
        "name": "Bad Nauheim",
        "code": "61231"
    },
    {
        "name": "Gosheim",
        "code": "78559"
    },
    {
        "name": "Fernwald",
        "code": "35463"
    },
    {
        "name": "Worpswede",
        "code": "27726"
    },
    {
        "name": "Sternenfels",
        "code": "75447"
    },
    {
        "name": "Gärtringen",
        "code": "71116"
    },
    {
        "name": "Volkertshausen",
        "code": "78269"
    },
    {
        "name": "Renquishausen",
        "code": "78603"
    },
    {
        "name": "Bordelum",
        "code": "25852"
    },
    {
        "name": "Horn-Bad Meinberg",
        "code": "32805"
    },
    {
        "name": "Brombachtal",
        "code": "64753"
    },
    {
        "name": "Leibertingen, Buchheim",
        "code": "88637"
    },
    {
        "name": "Stockach",
        "code": "78333"
    },
    {
        "name": "Tübingen",
        "code": "72070"
    },
    {
        "name": "Pennigsehl",
        "code": "31621"
    },
    {
        "name": "Tübingen",
        "code": "72072"
    },
    {
        "name": "Gemünden (Felda)",
        "code": "35329"
    },
    {
        "name": "Burladingen",
        "code": "72393"
    },
    {
        "name": "Tübingen",
        "code": "72074"
    },
    {
        "name": "Hasselroth",
        "code": "63594"
    },
    {
        "name": "Luhden",
        "code": "31711"
    },
    {
        "name": "Marklohe",
        "code": "31608"
    },
    {
        "name": "Haßmersheim",
        "code": "74855"
    },
    {
        "name": "Limbach",
        "code": "74838"
    },
    {
        "name": "Walddorfhäslach",
        "code": "72141"
    },
    {
        "name": "Stuttgart",
        "code": "70199"
    },
    {
        "name": "Elsenfeld",
        "code": "63820"
    },
    {
        "name": "Husum",
        "code": "31632"
    },
    {
        "name": "Flein",
        "code": "74223"
    },
    {
        "name": "Überlingen",
        "code": "88662"
    },
    {
        "name": "Benningen am Neckar",
        "code": "71726"
    },
    {
        "name": "Freiburg (Elbe)",
        "code": "21729"
    },
    {
        "name": "Amorbach",
        "code": "63916"
    },
    {
        "name": "Grebenhain",
        "code": "36355"
    },
    {
        "name": "Scheer",
        "code": "72516"
    },
    {
        "name": "Möckmühl",
        "code": "74219"
    },
    {
        "name": "Waiblingen",
        "code": "71336"
    },
    {
        "name": "Dörpstedt",
        "code": "24869"
    },
    {
        "name": "Ellhofen",
        "code": "74248"
    },
    {
        "name": "Wiesen, Wiesener Forst",
        "code": "63831"
    },
    {
        "name": "Illmensee",
        "code": "88636"
    },
    {
        "name": "Hameln",
        "code": "31785"
    },
    {
        "name": "Hardthausen am Kocher",
        "code": "74239"
    },
    {
        "name": "Hayingen",
        "code": "72534"
    },
    {
        "name": "Meggerdorf, Friedrichsholm, Friedrichsgraben u.a.",
        "code": "24799"
    },
    {
        "name": "Börde-Hakel",
        "code": "39448"
    },
    {
        "name": "Reichertshofen",
        "code": "85084"
    },
    {
        "name": "Neuhaus a.d.Pegnitz",
        "code": "91284"
    },
    {
        "name": "Grünwald",
        "code": "82031"
    },
    {
        "name": "München",
        "code": "80339"
    },
    {
        "name": "Harsdorf",
        "code": "95499"
    },
    {
        "name": "Karstädt, Dambeck, Klüß",
        "code": "19357"
    },
    {
        "name": "Birgland",
        "code": "92262"
    },
    {
        "name": "München",
        "code": "80331"
    },
    {
        "name": "Marktleugast",
        "code": "95352"
    },
    {
        "name": "Riedenburg",
        "code": "93339"
    },
    {
        "name": "München",
        "code": "81679"
    },
    {
        "name": "Magdeburg",
        "code": "39104"
    },
    {
        "name": "Stadtroda u.a.",
        "code": "07646"
    },
    {
        "name": "Magdeburg",
        "code": "39126"
    },
    {
        "name": "Hohenbrunn",
        "code": "85662"
    },
    {
        "name": "Haar",
        "code": "85540"
    },
    {
        "name": "Barby",
        "code": "39249"
    },
    {
        "name": "Bad Doberan, Bartenshagen-Parkentin u.a.",
        "code": "18209"
    },
    {
        "name": "Ensdorf",
        "code": "92266"
    },
    {
        "name": "Brand",
        "code": "95682"
    },
    {
        "name": "Schmidmühlen",
        "code": "92287"
    },
    {
        "name": "Menteroda, Obermehler",
        "code": "99996"
    },
    {
        "name": "Bad Sachsa",
        "code": "37441"
    },
    {
        "name": "Meine",
        "code": "38527"
    },
    {
        "name": "Benshausen",
        "code": "98554"
    },
    {
        "name": "Sachsen b. Ansbach",
        "code": "91623"
    },
    {
        "name": "Wittmar",
        "code": "38329"
    },
    {
        "name": "Mauerstetten",
        "code": "87665"
    },
    {
        "name": "Oberharz am Brocken",
        "code": "38877"
    },
    {
        "name": "Wolframs-Eschenbach",
        "code": "91639"
    },
    {
        "name": "Lamerdingen",
        "code": "86862"
    },
    {
        "name": "Roklum",
        "code": "38325"
    },
    {
        "name": "Gräfenroda",
        "code": "99330"
    },
    {
        "name": "Pommersfelden",
        "code": "96178"
    },
    {
        "name": "Bergfeld",
        "code": "38467"
    },
    {
        "name": "Ammerndorf",
        "code": "90614"
    },
    {
        "name": "Abenberg",
        "code": "91183"
    },
    {
        "name": "Arnstadt",
        "code": "99310"
    },
    {
        "name": "Schwabach",
        "code": "91126"
    },
    {
        "name": "Bergen",
        "code": "29468"
    },
    {
        "name": "Grainau",
        "code": "82491"
    },
    {
        "name": "Lichtenfels",
        "code": "96215"
    },
    {
        "name": "Kelbra (Kyffhäuser)",
        "code": "06537"
    },
    {
        "name": "Flensburg, Tastrup",
        "code": "24943"
    },
    {
        "name": "Neuhof",
        "code": "36119"
    },
    {
        "name": "Krempe, Grevenkop, Süderau, Muchelndorf",
        "code": "25361"
    },
    {
        "name": "Ebersbach an der Fils",
        "code": "73061"
    },
    {
        "name": "Kassel",
        "code": "34123"
    },
    {
        "name": "Aura i. Sinngrund",
        "code": "97773"
    },
    {
        "name": "Münsterdorf",
        "code": "25587"
    },
    {
        "name": "Rothenfels",
        "code": "97851"
    },
    {
        "name": "Lägerdorf",
        "code": "25566"
    },
    {
        "name": "Burgsinn",
        "code": "97775"
    },
    {
        "name": "Roden",
        "code": "97849"
    },
    {
        "name": "Rieneck",
        "code": "97794"
    },
    {
        "name": "Bad Schussenried",
        "code": "88427"
    },
    {
        "name": "Buxtehude",
        "code": "21614"
    },
    {
        "name": "Uslar",
        "code": "37170"
    },
    {
        "name": "Schneverdingen, Heimbuch",
        "code": "29640"
    },
    {
        "name": "Mühlhausen im Täle",
        "code": "73347"
    },
    {
        "name": "Alfdorf, Schillinghof",
        "code": "73553"
    },
    {
        "name": "Gammelshausen",
        "code": "73108"
    },
    {
        "name": "Berlin Gropiusstadt",
        "code": "12353"
    },
    {
        "name": "Berlin Alt Treptow",
        "code": "12435"
    },
    {
        "name": "Berlin",
        "code": "10319"
    },
    {
        "name": "Berlin Biesdorf",
        "code": "12683"
    },
    {
        "name": "Uckerland, Groß Luckow, Schönhausen",
        "code": "17337"
    },
    {
        "name": "Melchow, Chorin u.a.",
        "code": "16230"
    },
    {
        "name": "Glashütte",
        "code": "01768"
    },
    {
        "name": "Bannewitz",
        "code": "01728"
    },
    {
        "name": "Angermünde",
        "code": "16278"
    },
    {
        "name": "Neu-Seeland, Neupetershain",
        "code": "03103"
    },
    {
        "name": "Letschin",
        "code": "15324"
    },
    {
        "name": "Weißenberg, Hochkirch u.a.",
        "code": "02627"
    },
    {
        "name": "Zittau u.a.",
        "code": "02763"
    },
    {
        "name": "Görlitz",
        "code": "02828"
    },
    {
        "name": "Müllheim",
        "code": "79379"
    },
    {
        "name": "Staudernheim",
        "code": "55568"
    },
    {
        "name": "Heitersheim",
        "code": "79423"
    },
    {
        "name": "Holzwickede",
        "code": "59439"
    },
    {
        "name": "Ibbenbüren",
        "code": "49479"
    },
    {
        "name": "Fischbach, Erfweiler u.a.",
        "code": "66996"
    },
    {
        "name": "Heitersheim",
        "code": "79423"
    },
    {
        "name": "Drensteinfurt",
        "code": "48317"
    },
    {
        "name": "Münster",
        "code": "48145"
    },
    {
        "name": "Friedeburg",
        "code": "26446"
    },
    {
        "name": "Bad Ems Umland",
        "code": "56132"
    },
    {
        "name": "Miehlen u.a.",
        "code": "56357"
    },
    {
        "name": "Winterborn, Waldgrehweiler, Niedermoschel, u.a.",
        "code": "67822"
    },
    {
        "name": "Hemer",
        "code": "58675"
    },
    {
        "name": "Nußbach",
        "code": "67759"
    },
    {
        "name": "Malberg, Norken, Höchstenbach u.a.",
        "code": "57629"
    },
    {
        "name": "Bad Kreuznach",
        "code": "55583"
    },
    {
        "name": "Hügelsheim",
        "code": "76549"
    },
    {
        "name": "Wilhelmshaven",
        "code": "26384"
    },
    {
        "name": "Ottenhöfen im Schwarzwald",
        "code": "77883"
    },
    {
        "name": "Bockenheim an der Weinstraße",
        "code": "67278"
    },
    {
        "name": "Kirchheim an der Weinstraße",
        "code": "67281"
    },
    {
        "name": "Weilburg",
        "code": "35781"
    },
    {
        "name": "Mainz",
        "code": "55127"
    },
    {
        "name": "Oldenburg (Oldenburg)",
        "code": "26121"
    },
    {
        "name": "Rheda-Wiedenbrück",
        "code": "33378"
    },
    {
        "name": "Melle",
        "code": "49326"
    },
    {
        "name": "Bad Rippoldsau-Schapbach",
        "code": "77776"
    },
    {
        "name": "Visbek",
        "code": "49429"
    },
    {
        "name": "Wiesbaden",
        "code": "65189"
    },
    {
        "name": "Freudenstadt",
        "code": "72250"
    },
    {
        "name": "Bellheim",
        "code": "76756"
    },
    {
        "name": "Gernsbach",
        "code": "76593"
    },
    {
        "name": "Malsch",
        "code": "76316"
    },
    {
        "name": "Weilmünster",
        "code": "35789"
    },
    {
        "name": "Dillenburg",
        "code": "35689"
    },
    {
        "name": "Donaueschingen",
        "code": "78166"
    },
    {
        "name": "Mittenaar",
        "code": "35756"
    },
    {
        "name": "Bestwig",
        "code": "59909"
    },
    {
        "name": "Lembruch, Burlage",
        "code": "49459"
    },
    {
        "name": "Düngenheim",
        "code": "56761"
    },
    {
        "name": "Herten",
        "code": "45701"
    },
    {
        "name": "Niederwörresbach",
        "code": "55758"
    },
    {
        "name": "Bonn",
        "code": "53229"
    },
    {
        "name": "Remscheid",
        "code": "42857"
    },
    {
        "name": "Hinte",
        "code": "26759"
    },
    {
        "name": "Klotten",
        "code": "56818"
    },
    {
        "name": "Irmenach",
        "code": "56843"
    },
    {
        "name": "Neunkirchen",
        "code": "66538"
    },
    {
        "name": "Bochum",
        "code": "44797"
    },
    {
        "name": "Herne",
        "code": "44623"
    },
    {
        "name": "Binningen",
        "code": "56754"
    },
    {
        "name": "Horstmar",
        "code": "48612"
    },
    {
        "name": "Daleiden, Preischeid u.a.",
        "code": "54689"
    },
    {
        "name": "Grefrath",
        "code": "47929"
    },
    {
        "name": "Prüm",
        "code": "54595"
    },
    {
        "name": "Mönchengladbach",
        "code": "41189"
    },
    {
        "name": "Pronsfeld",
        "code": "54597"
    },
    {
        "name": "Viersen",
        "code": "41748"
    },
    {
        "name": "Düren",
        "code": "52355"
    },
    {
        "name": "Ayl, Trassem u.a.",
        "code": "54441"
    },
    {
        "name": "Irrel",
        "code": "54666"
    },
    {
        "name": "Schüller",
        "code": "54586"
    },
    {
        "name": "Kaarst",
        "code": "41564"
    },
    {
        "name": "Badem, Gindorf, Neidenbach",
        "code": "54657"
    },
    {
        "name": "Duisburg",
        "code": "47137"
    },
    {
        "name": "Daun",
        "code": "54550"
    },
    {
        "name": "Mülheim an der Ruhr",
        "code": "45479"
    },
    {
        "name": "Oberhausen",
        "code": "46145"
    },
    {
        "name": "Zeltingen-Rachtig, Erden, Lösnich u.a.",
        "code": "54492"
    },
    {
        "name": "Alfter",
        "code": "53347"
    },
    {
        "name": "Malborn",
        "code": "54426"
    },
    {
        "name": "Haltern am See",
        "code": "45721"
    },
    {
        "name": "Sögel u.a.",
        "code": "49751"
    },
    {
        "name": "Aurich",
        "code": "26603"
    },
    {
        "name": "Esens, Neuharlingersiel u.a.",
        "code": "26427"
    },
    {
        "name": "Pirmasens",
        "code": "66954"
    },
    {
        "name": "Koblenz",
        "code": "56075"
    },
    {
        "name": "Koblenz",
        "code": "56073"
    },
    {
        "name": "Esterwegen u.a.",
        "code": "26897"
    },
    {
        "name": "Dortmund",
        "code": "44287"
    },
    {
        "name": "Puderbach",
        "code": "56305"
    },
    {
        "name": "Dürrholz",
        "code": "56307"
    },
    {
        "name": "Imsbach",
        "code": "67817"
    },
    {
        "name": "Oberried",
        "code": "79254"
    },
    {
        "name": "Gundersweiler, Gonbach u.a.",
        "code": "67724"
    },
    {
        "name": "Waldkirch",
        "code": "79183"
    },
    {
        "name": "Schönborn",
        "code": "56370"
    },
    {
        "name": "Göllheim",
        "code": "67307"
    },
    {
        "name": "Rieste",
        "code": "49597"
    },
    {
        "name": "Bad Iburg",
        "code": "49186"
    },
    {
        "name": "Görwihl",
        "code": "79733"
    },
    {
        "name": "Aarbergen",
        "code": "65326"
    },
    {
        "name": "Osnabrück",
        "code": "49088"
    },
    {
        "name": "Homburg",
        "code": "66424"
    },
    {
        "name": "Kruft",
        "code": "56642"
    },
    {
        "name": "Zweibrücken",
        "code": "66482"
    },
    {
        "name": "Dortmund",
        "code": "44388"
    },
    {
        "name": "Kretz",
        "code": "56630"
    },
    {
        "name": "Haselünne",
        "code": "49740"
    },
    {
        "name": "Gemünden",
        "code": "55490"
    },
    {
        "name": "Bergen",
        "code": "55608"
    },
    {
        "name": "Urmitz",
        "code": "56220"
    },
    {
        "name": "Dollerup",
        "code": "24989"
    },
    {
        "name": "Bad Fallingbostel, Osterheide",
        "code": "29683"
    },
    {
        "name": "Groß Wittensee",
        "code": "24361"
    },
    {
        "name": "Sterup",
        "code": "24996"
    },
    {
        "name": "Stadt Schwäbisch Gmünd",
        "code": "73529"
    },
    {
        "name": "Bodnegg",
        "code": "88285"
    },
    {
        "name": "Salach",
        "code": "73084"
    },
    {
        "name": "Hannover",
        "code": "30559"
    },
    {
        "name": "Hannover",
        "code": "30521"
    },
    {
        "name": "Friedland",
        "code": "37133"
    },
    {
        "name": "Gerabronn",
        "code": "74582"
    },
    {
        "name": "Hamburg",
        "code": "22605"
    },
    {
        "name": "Alveslohe",
        "code": "25486"
    },
    {
        "name": "Hamburg",
        "code": "22523"
    },
    {
        "name": "Gettorf u.a.",
        "code": "24214"
    },
    {
        "name": "Gerstetten",
        "code": "89547"
    },
    {
        "name": "Norderstedt",
        "code": "22846"
    },
    {
        "name": "Crailsheim",
        "code": "74564"
    },
    {
        "name": "Norderstedt",
        "code": "22844"
    },
    {
        "name": "Oberstaufen",
        "code": "87534"
    },
    {
        "name": "Isny im Allgäu",
        "code": "88316"
    },
    {
        "name": "Euerdorf",
        "code": "97717"
    },
    {
        "name": "Maasholm, Schleimünde",
        "code": "24404"
    },
    {
        "name": "Langenau",
        "code": "89129"
    },
    {
        "name": "Hamburg",
        "code": "22337"
    },
    {
        "name": "Dettelbach",
        "code": "97337"
    },
    {
        "name": "Seth",
        "code": "23845"
    },
    {
        "name": "Hamburg",
        "code": "22359"
    },
    {
        "name": "Buch",
        "code": "89290"
    },
    {
        "name": "Leezen",
        "code": "23816"
    },
    {
        "name": "Laboe",
        "code": "24235"
    },
    {
        "name": "Wört",
        "code": "73499"
    },
    {
        "name": "Ungerhausen",
        "code": "87781"
    },
    {
        "name": "Markt Nordheim",
        "code": "91478"
    },
    {
        "name": "Meinersen",
        "code": "38536"
    },
    {
        "name": "Dombühl",
        "code": "91601"
    },
    {
        "name": "Sugenheim",
        "code": "91484"
    },
    {
        "name": "Prichsenstadt",
        "code": "97357"
    },
    {
        "name": "Neuburg a.d. Kammel",
        "code": "86476"
    },
    {
        "name": "Bad Windsheim",
        "code": "91438"
    },
    {
        "name": "Oberschwarzach",
        "code": "97516"
    },
    {
        "name": "Münsterhausen",
        "code": "86505"
    },
    {
        "name": "Hohenfelde",
        "code": "24257"
    },
    {
        "name": "Wieseth",
        "code": "91632"
    },
    {
        "name": "Knetzgau",
        "code": "97478"
    },
    {
        "name": "Malente, Kirchnüchel",
        "code": "23714"
    },
    {
        "name": "Bichl",
        "code": "83673"
    },
    {
        "name": "Neumarkt i.d. OPf.",
        "code": "92318"
    },
    {
        "name": "Deining",
        "code": "92364"
    },
    {
        "name": "München",
        "code": "80636"
    },
    {
        "name": "Pößneck",
        "code": "07381"
    },
    {
        "name": "Lobenstein",
        "code": "07356"
    },
    {
        "name": "Neufahrn b. Freising",
        "code": "85375"
    },
    {
        "name": "Weidenberg, Kirchenpingarten",
        "code": "95466"
    },
    {
        "name": "Ilberstedt",
        "code": "06408"
    },
    {
        "name": "Hahnbach",
        "code": "92256"
    },
    {
        "name": "Ammerthal",
        "code": "92260"
    },
    {
        "name": "Kümmersbruck",
        "code": "92245"
    },
    {
        "name": "Deuerling",
        "code": "93180"
    },
    {
        "name": "Wörth",
        "code": "85457"
    },
    {
        "name": "Kirschkau, Pausa-Mühltroff",
        "code": "07919"
    },
    {
        "name": "Nürnberg",
        "code": "90419"
    },
    {
        "name": "Gardelegen",
        "code": "39649"
    },
    {
        "name": "Oberweißbach u.a.",
        "code": "98744"
    },
    {
        "name": "Pinzberg",
        "code": "91361"
    },
    {
        "name": "Jesenwang",
        "code": "82287"
    },
    {
        "name": "Krün",
        "code": "82493"
    },
    {
        "name": "Wörthsee",
        "code": "82237"
    },
    {
        "name": "Kronach",
        "code": "96317"
    },
    {
        "name": "Plankenfels",
        "code": "95515"
    },
    {
        "name": "Gaimersheim",
        "code": "85080"
    },
    {
        "name": "Hecklingen",
        "code": "39444"
    },
    {
        "name": "Stadland",
        "code": "26935"
    },
    {
        "name": "Villingen-Schwenningen",
        "code": "78048"
    },
    {
        "name": "Neuhofen",
        "code": "67141"
    },
    {
        "name": "Ludwigshafen am Rhein",
        "code": "67059"
    },
    {
        "name": "Waldolms",
        "code": "35647"
    },
    {
        "name": "Bad Wildbad",
        "code": "75323"
    },
    {
        "name": "Bremen",
        "code": "28777"
    },
    {
        "name": "Lemwerder",
        "code": "27809"
    },
    {
        "name": "Lohra",
        "code": "35102"
    },
    {
        "name": "Delmenhorst",
        "code": "27755"
    },
    {
        "name": "Frankfurt am Main",
        "code": "60488"
    },
    {
        "name": "Leimen",
        "code": "69181"
    },
    {
        "name": "Frankfurt am Main",
        "code": "60438"
    },
    {
        "name": "Delmenhorst",
        "code": "27749"
    },
    {
        "name": "Frankfurt am Main",
        "code": "60433"
    },
    {
        "name": "Heidelberg",
        "code": "69115"
    },
    {
        "name": "Bremen",
        "code": "28237"
    },
    {
        "name": "Hilzingen",
        "code": "78247"
    },
    {
        "name": "Habel, Gröde",
        "code": "25869"
    },
    {
        "name": "Lindenfels",
        "code": "64678"
    },
    {
        "name": "Affinghausen und Sudwalde",
        "code": "27257"
    },
    {
        "name": "Florstadt",
        "code": "61197"
    },
    {
        "name": "Babenhausen",
        "code": "64832"
    },
    {
        "name": "Bremen",
        "code": "28309"
    },
    {
        "name": "Renningen",
        "code": "71272"
    },
    {
        "name": "Meldorf",
        "code": "25704"
    },
    {
        "name": "Kleinostheim",
        "code": "63801"
    },
    {
        "name": "Allensbach",
        "code": "78476"
    },
    {
        "name": "Binau",
        "code": "74862"
    },
    {
        "name": "Bitz",
        "code": "72475"
    },
    {
        "name": "Buchholz",
        "code": "31710"
    },
    {
        "name": "Fahrenbach",
        "code": "74864"
    },
    {
        "name": "Gundelsheim",
        "code": "74831"
    },
    {
        "name": "Stuttgart",
        "code": "70193"
    },
    {
        "name": "Breuna",
        "code": "34479"
    },
    {
        "name": "Pollhagen",
        "code": "31718"
    },
    {
        "name": "Romrod",
        "code": "36329"
    },
    {
        "name": "Wölpinghausen",
        "code": "31556"
    },
    {
        "name": "Reutlingen",
        "code": "72768"
    },
    {
        "name": "Veringenstadt",
        "code": "72519"
    },
    {
        "name": "Krauchenwies",
        "code": "72505"
    },
    {
        "name": "Sigmaringendorf",
        "code": "72517"
    },
    {
        "name": "Neuhausen auf den Fildern",
        "code": "73765"
    },
    {
        "name": "Pahlen",
        "code": "25794"
    },
    {
        "name": "Freudenberg, Collenberg",
        "code": "97896"
    },
    {
        "name": "Mengen",
        "code": "88512"
    },
    {
        "name": "Haste, Hohnhorst",
        "code": "31559"
    },
    {
        "name": "Neunkirchen",
        "code": "63930"
    },
    {
        "name": "Winnenden",
        "code": "71364"
    },
    {
        "name": "Backnang",
        "code": "71522"
    },
    {
        "name": "Stade",
        "code": "21684"
    },
    {
        "name": "Riedhausen",
        "code": "88377"
    },
    {
        "name": "Klein Wesenberg",
        "code": "23860"
    },
    {
        "name": "Münchsteinach",
        "code": "91481"
    },
    {
        "name": "Ilsenburg, Nordharz",
        "code": "38871"
    },
    {
        "name": "Gutenstetten",
        "code": "91468"
    },
    {
        "name": "Mickhausen",
        "code": "86866"
    },
    {
        "name": "Krummesse, Klempau",
        "code": "23628"
    },
    {
        "name": "Breitenfelde, Lankau",
        "code": "23881"
    },
    {
        "name": "Buttenwiesen",
        "code": "86647"
    },
    {
        "name": "Bobingen",
        "code": "86399"
    },
    {
        "name": "Gnotzheim",
        "code": "91728"
    },
    {
        "name": "Kaltental",
        "code": "87662"
    },
    {
        "name": "Kaisheim",
        "code": "86687"
    },
    {
        "name": "Geschwenda",
        "code": "98716"
    },
    {
        "name": "Gevensleben",
        "code": "38384"
    },
    {
        "name": "Pfofeld",
        "code": "91738"
    },
    {
        "name": "Ilmenau",
        "code": "98694"
    },
    {
        "name": "Pürgen",
        "code": "86932"
    },
    {
        "name": "Weißenburg i. Bay.",
        "code": "91781"
    },
    {
        "name": "Finning",
        "code": "86923"
    },
    {
        "name": "Harbke, Sommersdorf, Wefensleben, Ummendorf, Eilsleben",
        "code": "39365"
    },
    {
        "name": "Coppenbrügge",
        "code": "31863"
    },
    {
        "name": "Forchtenberg",
        "code": "74670"
    },
    {
        "name": "Kassel",
        "code": "34121"
    },
    {
        "name": "Großenlüder",
        "code": "36137"
    },
    {
        "name": "Böklund u.a.",
        "code": "24860"
    },
    {
        "name": "Weilheim an der Teck",
        "code": "73235"
    },
    {
        "name": "Neidlingen",
        "code": "73272"
    },
    {
        "name": "Esselbach",
        "code": "97839"
    },
    {
        "name": "Schwäbisch Hall",
        "code": "74523"
    },
    {
        "name": "Kupferzell",
        "code": "74635"
    },
    {
        "name": "Duingen",
        "code": "31089"
    },
    {
        "name": "Pausa-Mühltroff",
        "code": "07952"
    },
    {
        "name": "Bad Aibling",
        "code": "83043"
    },
    {
        "name": "Rostock, Lambrechtshagen",
        "code": "18069"
    },
    {
        "name": "Halle/ Saale",
        "code": "06116"
    },
    {
        "name": "Plauen, Rößnitz",
        "code": "08527"
    },
    {
        "name": "Schwarzenfeld",
        "code": "92521"
    },
    {
        "name": "Regensburg",
        "code": "93055"
    },
    {
        "name": "Tegernheim",
        "code": "93105"
    },
    {
        "name": "Püchersreuth",
        "code": "92715"
    },
    {
        "name": "Rostock, Graal-Müritz",
        "code": "18181"
    },
    {
        "name": "Mintraching",
        "code": "93098"
    },
    {
        "name": "Neustadt (Dosse) u.a.",
        "code": "16845"
    },
    {
        "name": "Groitzsch",
        "code": "04539"
    },
    {
        "name": "Guteneck",
        "code": "92543"
    },
    {
        "name": "Flossenbürg",
        "code": "92696"
    },
    {
        "name": "Pittenhart",
        "code": "83132"
    },
    {
        "name": "Jettenbach",
        "code": "84555"
    },
    {
        "name": "Falkenstein",
        "code": "93167"
    },
    {
        "name": "Seeon-Seebruck",
        "code": "83358"
    },
    {
        "name": "Belzig",
        "code": "14806"
    },
    {
        "name": "Brandenburg/ Havel",
        "code": "14770"
    },
    {
        "name": "Wittenberg",
        "code": "06888"
    },
    {
        "name": "Groß Kreutz",
        "code": "14550"
    },
    {
        "name": "Velgast",
        "code": "18469"
    },
    {
        "name": "Neukirchen am Teisenberg",
        "code": "83364"
    },
    {
        "name": "Mühlau",
        "code": "09241"
    },
    {
        "name": "Jahnsdorf",
        "code": "09387"
    },
    {
        "name": "Chemnitz",
        "code": "09117"
    },
    {
        "name": "Leisnig",
        "code": "04703"
    },
    {
        "name": "Michendorf",
        "code": "14552"
    },
    {
        "name": "Niederwiesa",
        "code": "09577"
    },
    {
        "name": "Künzing",
        "code": "94550"
    },
    {
        "name": "Rotthalmünster",
        "code": "94094"
    },
    {
        "name": "Samtens",
        "code": "18573"
    },
    {
        "name": "Riesa",
        "code": "01587"
    },
    {
        "name": "Bad Liebenwerda",
        "code": "04924"
    },
    {
        "name": "Jarmen",
        "code": "17126"
    },
    {
        "name": "Am Mellensee",
        "code": "15838"
    },
    {
        "name": "Dorfchemnitz, Mulda, Sayda",
        "code": "09619"
    },
    {
        "name": "Berlin Niederschönhausen",
        "code": "13156"
    },
    {
        "name": "Berlin Rudow",
        "code": "12355"
    },
    {
        "name": "Thyrnau",
        "code": "94136"
    },
    {
        "name": "Berlin Mahlsdorf",
        "code": "12623"
    },
    {
        "name": "Freital",
        "code": "01705"
    },
    {
        "name": "Joachimsthal u.a.",
        "code": "16247"
    },
    {
        "name": "Schönwalde",
        "code": "15910"
    },
    {
        "name": "Lübben (Spreewald)",
        "code": "15907"
    },
    {
        "name": "Dresden",
        "code": "01465"
    },
    {
        "name": "Kröslin, Krummin, Lassan u.a.",
        "code": "17440"
    },
    {
        "name": "Benz, Heringsdorf u.a.",
        "code": "17429"
    },
    {
        "name": "Beeskow",
        "code": "15848"
    },
    {
        "name": "Seebad Ahlbeck",
        "code": "17419"
    },
    {
        "name": "Wittichenau",
        "code": "02997"
    },
    {
        "name": "Löbau, Kottmar u.a.",
        "code": "02708"
    },
    {
        "name": "Achberg",
        "code": "88147"
    },
    {
        "name": "Deggingen",
        "code": "73326"
    },
    {
        "name": "Appen",
        "code": "25482"
    },
    {
        "name": "Bad Mergentheim",
        "code": "97980"
    },
    {
        "name": "Eiterfeld",
        "code": "36132"
    },
    {
        "name": "Gingen an der Fils",
        "code": "73333"
    },
    {
        "name": "Hannover",
        "code": "30175"
    },
    {
        "name": "Hochdorf",
        "code": "88454"
    },
    {
        "name": "Hannover",
        "code": "30625"
    },
    {
        "name": "Kist, Irtenberger Wald",
        "code": "97270"
    },
    {
        "name": "Erlabrunn",
        "code": "97250"
    },
    {
        "name": "Quickborn",
        "code": "25451"
    },
    {
        "name": "Geroldshausen",
        "code": "97256"
    },
    {
        "name": "Hambühren",
        "code": "29313"
    },
    {
        "name": "Hamburg",
        "code": "22609"
    },
    {
        "name": "Lamspringe",
        "code": "31195"
    },
    {
        "name": "Burkardroth",
        "code": "97705"
    },
    {
        "name": "Wildeck",
        "code": "36208"
    },
    {
        "name": "Röthenbach (Allgäu)",
        "code": "88167"
    },
    {
        "name": "Staig",
        "code": "89195"
    },
    {
        "name": "Essingen",
        "code": "73457"
    },
    {
        "name": "Hamburg",
        "code": "20354"
    },
    {
        "name": "Theilheim",
        "code": "97288"
    },
    {
        "name": "Dietenheim",
        "code": "89165"
    },
    {
        "name": "Bad Bocklet",
        "code": "97708"
    },
    {
        "name": "Hamburg",
        "code": "22089"
    },
    {
        "name": "Bergtheim, Oberpleichfeld",
        "code": "97241"
    },
    {
        "name": "Katlenburg-Lindau",
        "code": "37191"
    },
    {
        "name": "Frickenhausen",
        "code": "97252"
    },
    {
        "name": "Hamburg",
        "code": "22043"
    },
    {
        "name": "Blaichach",
        "code": "87544"
    },
    {
        "name": "Nahe",
        "code": "23866"
    },
    {
        "name": "Treffurt/Ifta",
        "code": "99830"
    },
    {
        "name": "Kolitzheim",
        "code": "97509"
    },
    {
        "name": "Heere",
        "code": "38277"
    },
    {
        "name": "Bubesheim",
        "code": "89347"
    },
    {
        "name": "Egg an der Günz",
        "code": "87743"
    },
    {
        "name": "Mihla",
        "code": "99826"
    },
    {
        "name": "Herzberg, Elbingerode, Hörden",
        "code": "37412"
    },
    {
        "name": "Schonungen",
        "code": "97453"
    },
    {
        "name": "Sulzfeld",
        "code": "97633"
    },
    {
        "name": "Dürrwangen",
        "code": "91602"
    },
    {
        "name": "Lütjensee",
        "code": "22952"
    },
    {
        "name": "Lüneburg",
        "code": "21335"
    },
    {
        "name": "Gerdau",
        "code": "29581"
    },
    {
        "name": "Markt Bibart",
        "code": "91477"
    },
    {
        "name": "Dingolshausen",
        "code": "97497"
    },
    {
        "name": "Kirchheim in Schwaben",
        "code": "87757"
    },
    {
        "name": "Adendorf",
        "code": "21365"
    },
    {
        "name": "Zarpen",
        "code": "23619"
    },
    {
        "name": "Goslar",
        "code": "38642"
    },
    {
        "name": "Suhl, Marisfeld, Rohr u.a.",
        "code": "98530"
    },
    {
        "name": "Winterbach",
        "code": "89368"
    },
    {
        "name": "Goslar",
        "code": "38642"
    },
    {
        "name": "Ebeleben",
        "code": "99713"
    },
    {
        "name": "Wesendorf",
        "code": "29392"
    },
    {
        "name": "Braunschweig",
        "code": "38124"
    },
    {
        "name": "Insel Poel",
        "code": "23999"
    },
    {
        "name": "Kirchensittenbach",
        "code": "91241"
    },
    {
        "name": "München",
        "code": "80999"
    },
    {
        "name": "Hummeltal",
        "code": "95503"
    },
    {
        "name": "Pinnow",
        "code": "19065"
    },
    {
        "name": "München",
        "code": "81373"
    },
    {
        "name": "München",
        "code": "81369"
    },
    {
        "name": "Neuengönna u.a.",
        "code": "07778"
    },
    {
        "name": "Königstein",
        "code": "92281"
    },
    {
        "name": "München",
        "code": "80805"
    },
    {
        "name": "Ranis",
        "code": "07389"
    },
    {
        "name": "Goldkronach",
        "code": "95497"
    },
    {
        "name": "Schleiz",
        "code": "07907"
    },
    {
        "name": "Tegernsee",
        "code": "83684"
    },
    {
        "name": "Magdeburg",
        "code": "39114"
    },
    {
        "name": "Plattenburg",
        "code": "19339"
    },
    {
        "name": "Gammelsdorf",
        "code": "85408"
    },
    {
        "name": "Tuntenhausen",
        "code": "83104"
    },
    {
        "name": "Eching",
        "code": "84174"
    },
    {
        "name": "Landshut",
        "code": "84034"
    },
    {
        "name": "Kiefersfelden",
        "code": "83088"
    },
    {
        "name": "Flintsbach a. Inn",
        "code": "83126"
    },
    {
        "name": "Weiden in der OPf., Theisseil",
        "code": "92637"
    },
    {
        "name": "Thalmassing",
        "code": "93107"
    },
    {
        "name": "Regensburg",
        "code": "93057"
    },
    {
        "name": "Dessau-Roßlau",
        "code": "06862"
    },
    {
        "name": "Berga/Elster",
        "code": "07980"
    },
    {
        "name": "Schirmitz",
        "code": "92718"
    },
    {
        "name": "Sandersdorf-Brehna",
        "code": "06794"
    },
    {
        "name": "Riedering",
        "code": "83083"
    },
    {
        "name": "Treuen",
        "code": "08233"
    },
    {
        "name": "Großpösna",
        "code": "04463"
    },
    {
        "name": "Unterwössen",
        "code": "83246"
    },
    {
        "name": "Kienberg",
        "code": "83361"
    },
    {
        "name": "Wusterhausen",
        "code": "16868"
    },
    {
        "name": "Reit im Winkl",
        "code": "83242"
    },
    {
        "name": "Schönsee",
        "code": "92539"
    },
    {
        "name": "Traunreut",
        "code": "83301"
    },
    {
        "name": "Mamming",
        "code": "94437"
    },
    {
        "name": "Pleiskirchen",
        "code": "84568"
    },
    {
        "name": "Wittenberg",
        "code": "06889"
    },
    {
        "name": "Zschorlau",
        "code": "08321"
    },
    {
        "name": "Brück, Borkheide u.a.",
        "code": "14822"
    },
    {
        "name": "Waging a. See",
        "code": "83329"
    },
    {
        "name": "Straßkirchen",
        "code": "94342"
    },
    {
        "name": "Zingst a. Darß",
        "code": "18374"
    },
    {
        "name": "Kirchdorf a. Inn",
        "code": "84375"
    },
    {
        "name": "Pfarrkirchen",
        "code": "84347"
    },
    {
        "name": "Chemnitz",
        "code": "09125"
    },
    {
        "name": "Chemnitz",
        "code": "09130"
    },
    {
        "name": "Marktschellenberg",
        "code": "83487"
    },
    {
        "name": "Leubsdorf, Gornau, Augustusburg",
        "code": "09573"
    },
    {
        "name": "Schöfweg",
        "code": "94572"
    },
    {
        "name": "Außernzell",
        "code": "94532"
    },
    {
        "name": "Feldberger Seenlandschaft",
        "code": "17258"
    },
    {
        "name": "Eppenschlag",
        "code": "94536"
    },
    {
        "name": "Berlin Charlottenburg",
        "code": "10627"
    },
    {
        "name": "Berlin Märkisches Viertel",
        "code": "13439"
    },
    {
        "name": "Berlin Rosenthal",
        "code": "13158"
    },
    {
        "name": "Passau",
        "code": "94034"
    },
    {
        "name": "Putbus",
        "code": "18581"
    },
    {
        "name": "Berlin Pankow",
        "code": "13189"
    },
    {
        "name": "Berlin Britz",
        "code": "12347"
    },
    {
        "name": "Wellheim",
        "code": "91809"
    },
    {
        "name": "Althegnenberg",
        "code": "82278"
    },
    {
        "name": "Oberhausen",
        "code": "86697"
    },
    {
        "name": "Raisting",
        "code": "82399"
    },
    {
        "name": "Effeltrich",
        "code": "91090"
    },
    {
        "name": "Steinach",
        "code": "96523"
    },
    {
        "name": "Oberschweinbach",
        "code": "82294"
    },
    {
        "name": "Marktzeuln",
        "code": "96275"
    },
    {
        "name": "Altomünster",
        "code": "85250"
    },
    {
        "name": "Allersberg",
        "code": "90584"
    },
    {
        "name": "Walchensee",
        "code": "82432"
    },
    {
        "name": "Iffeldorf",
        "code": "82393"
    },
    {
        "name": "Rastow",
        "code": "19077"
    },
    {
        "name": "Hettstedt, Endorf",
        "code": "06333"
    },
    {
        "name": "Marktrodach",
        "code": "96364"
    },
    {
        "name": "Lutzingen",
        "code": "89440"
    },
    {
        "name": "Zusmarshausen",
        "code": "86441"
    },
    {
        "name": "Schönewörde",
        "code": "29396"
    },
    {
        "name": "Westheim",
        "code": "91747"
    },
    {
        "name": "Weste",
        "code": "29599"
    },
    {
        "name": "Großaitingen",
        "code": "86845"
    },
    {
        "name": "Gessertshausen",
        "code": "86459"
    },
    {
        "name": "Lübeck",
        "code": "23552"
    },
    {
        "name": "Langerringen",
        "code": "86853"
    },
    {
        "name": "Bad Tennstedt",
        "code": "99955"
    },
    {
        "name": "Wolfsburg",
        "code": "38440"
    },
    {
        "name": "Göhrde",
        "code": "29473"
    },
    {
        "name": "Mitteleschenbach",
        "code": "91734"
    },
    {
        "name": "Landsberg a. Lech",
        "code": "86899"
    },
    {
        "name": "Frensdorf",
        "code": "96158"
    },
    {
        "name": "Alesheim",
        "code": "91793"
    },
    {
        "name": "Peiting",
        "code": "86971"
    },
    {
        "name": "Vilgertshofen",
        "code": "86946"
    },
    {
        "name": "Rain",
        "code": "86641"
    },
    {
        "name": "Helmstedt",
        "code": "38350"
    },
    {
        "name": "Hötensleben, Völpke, Ottleben u.a.",
        "code": "39393"
    },
    {
        "name": "Scheßlitz",
        "code": "96110"
    },
    {
        "name": "Dörfles-Esbach",
        "code": "96487"
    },
    {
        "name": "Rockhausen, Klettbach",
        "code": "99102"
    },
    {
        "name": "Waldkirchen",
        "code": "94065"
    },
    {
        "name": "Obernzell",
        "code": "94130"
    },
    {
        "name": "Berlin Köpenick",
        "code": "12559"
    },
    {
        "name": "Uckerland, Groß Luckow, Schönhausen",
        "code": "17337"
    },
    {
        "name": "Königs Wusterhausen",
        "code": "15712"
    },
    {
        "name": "Erkner",
        "code": "15537"
    },
    {
        "name": "Großräschen",
        "code": "01983"
    },
    {
        "name": "Hohenaspe",
        "code": "25582"
    },
    {
        "name": "Kassel",
        "code": "34127"
    },
    {
        "name": "Fronreute",
        "code": "88273"
    },
    {
        "name": "Kassel, Fuldatal",
        "code": "34233"
    },
    {
        "name": "Mittelangeln",
        "code": "24986"
    },
    {
        "name": "Hetlingen",
        "code": "25491"
    },
    {
        "name": "Fockbek",
        "code": "24787"
    },
    {
        "name": "Weißbach",
        "code": "74679"
    },
    {
        "name": "Lorch",
        "code": "73547"
    },
    {
        "name": "Heiningen",
        "code": "73092"
    },
    {
        "name": "Schwedt",
        "code": "16303"
    },
    {
        "name": "Biesendahlshof, Berkholz-Meyenburg",
        "code": "16306"
    },
    {
        "name": "Müllrose",
        "code": "15299"
    },
    {
        "name": "Ostritz, Schönau-Berzdorf",
        "code": "02899"
    },
    {
        "name": "Groß-Gerau",
        "code": "64521"
    },
    {
        "name": "Nauheim",
        "code": "64569"
    },
    {
        "name": "Karlsruhe",
        "code": "76227"
    },
    {
        "name": "Graben-Neudorf",
        "code": "76676"
    },
    {
        "name": "Büren",
        "code": "33142"
    },
    {
        "name": "Battenberg",
        "code": "35088"
    },
    {
        "name": "Frankfurt am Main",
        "code": "65929"
    },
    {
        "name": "Bremerhaven",
        "code": "27580"
    },
    {
        "name": "Herford",
        "code": "32051"
    },
    {
        "name": "Heuchelheim",
        "code": "35452"
    },
    {
        "name": "Frankfurt am Main",
        "code": "60528"
    },
    {
        "name": "Ober-Mörlen",
        "code": "61239"
    },
    {
        "name": "Langen",
        "code": "63225"
    },
    {
        "name": "Linden",
        "code": "35440"
    },
    {
        "name": "Herford",
        "code": "32052"
    },
    {
        "name": "Darmstadt",
        "code": "64291"
    },
    {
        "name": "Lautertal (Odenwald)",
        "code": "64686"
    },
    {
        "name": "Tuttlingen",
        "code": "78532"
    },
    {
        "name": "Hille",
        "code": "32479"
    },
    {
        "name": "Pforzheim",
        "code": "75175"
    },
    {
        "name": "Frankfurt am Main",
        "code": "60385"
    },
    {
        "name": "Zimmern unter der Burg",
        "code": "72369"
    },
    {
        "name": "Staufenberg",
        "code": "35460"
    },
    {
        "name": "Lich",
        "code": "35423"
    },
    {
        "name": "Rödermark",
        "code": "63322"
    },
    {
        "name": "Cölbe",
        "code": "35091"
    },
    {
        "name": "Ebsdorfergrund",
        "code": "35085"
    },
    {
        "name": "Tiefenbronn",
        "code": "75233"
    },
    {
        "name": "Münster",
        "code": "64839"
    },
    {
        "name": "Petershagen",
        "code": "32469"
    },
    {
        "name": "Maintal",
        "code": "63477"
    },
    {
        "name": "Risum-Lindholm, Stedesand",
        "code": "25920"
    },
    {
        "name": "Mönsheim",
        "code": "71297"
    },
    {
        "name": "Eschelbronn",
        "code": "74927"
    },
    {
        "name": "Öhningen",
        "code": "78337"
    },
    {
        "name": "Nusplingen",
        "code": "72362"
    },
    {
        "name": "Mossautal",
        "code": "64756"
    },
    {
        "name": "Orsingen-Nenzingen",
        "code": "78359"
    },
    {
        "name": "Diemelstadt",
        "code": "34474"
    },
    {
        "name": "Neuenkirchen",
        "code": "25792"
    },
    {
        "name": "Aglasterhausen",
        "code": "74858"
    },
    {
        "name": "Ladelund",
        "code": "25926"
    },
    {
        "name": "Edertal",
        "code": "34549"
    },
    {
        "name": "Albstadt",
        "code": "72458"
    },
    {
        "name": "Neckargerach",
        "code": "69437"
    },
    {
        "name": "Aschaffenburg",
        "code": "63741"
    },
    {
        "name": "Stuttgart",
        "code": "70565"
    },
    {
        "name": "Heilbronn",
        "code": "74081"
    },
    {
        "name": "Sulzbach am Main",
        "code": "63834"
    },
    {
        "name": "Dörverden",
        "code": "27313"
    },
    {
        "name": "Ludwigsburg",
        "code": "71638"
    },
    {
        "name": "Behrendorf, Bondelum",
        "code": "25850"
    },
    {
        "name": "Reutlingen",
        "code": "72766"
    },
    {
        "name": "Eschau",
        "code": "63863"
    },
    {
        "name": "Eggstedt",
        "code": "25721"
    },
    {
        "name": "Altdorf",
        "code": "72655"
    },
    {
        "name": "Brokdorf",
        "code": "25576"
    },
    {
        "name": "Neukirchen (Knüll)",
        "code": "34626"
    },
    {
        "name": "Kernen im Remstal",
        "code": "71394"
    },
    {
        "name": "Hanerau-Hademarschen, Seefeld u.a.",
        "code": "25557"
    },
    {
        "name": "Aspach",
        "code": "71546"
    },
    {
        "name": "Wewelsfleth",
        "code": "25599"
    },
    {
        "name": "Wrohm",
        "code": "25799"
    },
    {
        "name": "Wertheim",
        "code": "97877"
    },
    {
        "name": "Dettingen unter Teck",
        "code": "73265"
    },
    {
        "name": "Öhringen",
        "code": "74613"
    },
    {
        "name": "Hagen",
        "code": "58099"
    },
    {
        "name": "Lünen",
        "code": "44534"
    },
    {
        "name": "Gummersbach",
        "code": "51645"
    },
    {
        "name": "Ochtersum",
        "code": "26489"
    },
    {
        "name": "Dortmund",
        "code": "44267"
    },
    {
        "name": "Hagen",
        "code": "58099"
    },
    {
        "name": "Mittelbrunn, Queidersbach u.a.",
        "code": "66851"
    },
    {
        "name": "Sobernheim",
        "code": "55566"
    },
    {
        "name": "Übach-Palenberg",
        "code": "52531"
    },
    {
        "name": "Kevelaer-Winnekendonk",
        "code": "47626"
    },
    {
        "name": "Viersen",
        "code": "41748"
    },
    {
        "name": "Krefeld",
        "code": "47804"
    },
    {
        "name": "Krefeld",
        "code": "47829"
    },
    {
        "name": "Bettenfeld, Niederöfflingen u.a.",
        "code": "54533"
    },
    {
        "name": "Dillingen/Saar",
        "code": "66763"
    },
    {
        "name": "Oberhausen",
        "code": "46045"
    },
    {
        "name": "Köln",
        "code": "50767"
    },
    {
        "name": "Malborn",
        "code": "54426"
    },
    {
        "name": "Adenau, Kottenborn u.a.",
        "code": "53518"
    },
    {
        "name": "Saarbrücken",
        "code": "66128"
    },
    {
        "name": "Köln",
        "code": "50677"
    },
    {
        "name": "Essen",
        "code": "45147"
    },
    {
        "name": "Wülfrath",
        "code": "42489"
    },
    {
        "name": "Gelsenkirchen",
        "code": "45897"
    },
    {
        "name": "Leverkusen",
        "code": "51375"
    },
    {
        "name": "Deuselbach, Hermeskeil, Rorodt",
        "code": "54411"
    },
    {
        "name": "Meschede",
        "code": "59872"
    },
    {
        "name": "Edesheim",
        "code": "67483"
    },
    {
        "name": "Herxheim",
        "code": "76863"
    },
    {
        "name": "Wiesbaden",
        "code": "65197"
    },
    {
        "name": "Herborn",
        "code": "35745"
    },
    {
        "name": "Dittelsheim-Heßloch",
        "code": "67596"
    },
    {
        "name": "Wiesbaden",
        "code": "65193"
    },
    {
        "name": "Dirmstein",
        "code": "67246"
    },
    {
        "name": "Gommersheim",
        "code": "67377"
    },
    {
        "name": "Bodenheim",
        "code": "55294"
    },
    {
        "name": "Lauterbach",
        "code": "78730"
    },
    {
        "name": "Westheim (Pfalz)",
        "code": "67368"
    },
    {
        "name": "Lingenfeld",
        "code": "67360"
    },
    {
        "name": "Gütersloh",
        "code": "33330"
    },
    {
        "name": "Werther (Westf.)",
        "code": "33824"
    },
    {
        "name": "Biblis",
        "code": "68647"
    },
    {
        "name": "Breidenbach",
        "code": "35236"
    },
    {
        "name": "Solms",
        "code": "35606"
    },
    {
        "name": "Mehlingen",
        "code": "67678"
    },
    {
        "name": "Mogendorf, Ebernhahn, Staudt u.a.",
        "code": "56424"
    },
    {
        "name": "Lohnsfeld",
        "code": "67727"
    },
    {
        "name": "Freiburg im Breisgau",
        "code": "79110"
    },
    {
        "name": "Essen (Oldenburg)",
        "code": "49632"
    },
    {
        "name": "Katzenelnbogen",
        "code": "56368"
    },
    {
        "name": "Bad Säckingen",
        "code": "79713"
    },
    {
        "name": "Steinbach, Weitersweiler, Bennhausen, Mörsfeld, Würzweiler, Ruppertsecken u.a.",
        "code": "67808"
    },
    {
        "name": "Feldberg",
        "code": "79868"
    },
    {
        "name": "Carlsberg",
        "code": "67316"
    },
    {
        "name": "Flonheim",
        "code": "55237"
    },
    {
        "name": "Burgschwalbach",
        "code": "65558"
    },
    {
        "name": "Simonswald",
        "code": "79263"
    },
    {
        "name": "Breitnau",
        "code": "79874"
    },
    {
        "name": "Burgschwalbach",
        "code": "65558"
    },
    {
        "name": "Steinweiler",
        "code": "76872"
    },
    {
        "name": "Oelde",
        "code": "59302"
    },
    {
        "name": "Solingen",
        "code": "42653"
    },
    {
        "name": "Büchel",
        "code": "56823"
    },
    {
        "name": "Bad Neuenahr-Ahrweiler",
        "code": "53474"
    },
    {
        "name": "Bonn",
        "code": "53115"
    },
    {
        "name": "Peterswald-Löffelscheid u.a.",
        "code": "56858"
    },
    {
        "name": "Bell",
        "code": "56745"
    },
    {
        "name": "Hattingen",
        "code": "45529"
    },
    {
        "name": "Wermelskirchen",
        "code": "42929"
    },
    {
        "name": "Bochum",
        "code": "44791"
    },
    {
        "name": "Remscheid",
        "code": "42899"
    },
    {
        "name": "Peterswald-Löffelscheid u.a.",
        "code": "56858"
    },
    {
        "name": "Dickenschied u.a.",
        "code": "55483"
    },
    {
        "name": "Südbrookmerland",
        "code": "26624"
    },
    {
        "name": "Unna",
        "code": "59425"
    },
    {
        "name": "Lörrach",
        "code": "79540"
    },
    {
        "name": "Fürthen",
        "code": "57539"
    },
    {
        "name": "Kleinmaischeid",
        "code": "56271"
    },
    {
        "name": "Voltlage",
        "code": "49599"
    },
    {
        "name": "Tecklenburg",
        "code": "49545"
    },
    {
        "name": "Freilingen, Freirachdorf u.a.",
        "code": "56244"
    },
    {
        "name": "Hattert",
        "code": "57644"
    },
    {
        "name": "Kaiserslautern",
        "code": "67655"
    },
    {
        "name": "Steinbach, Weitersweiler, Bennhausen, Mörsfeld, Würzweiler, Ruppertsecken u.a.",
        "code": "67808"
    },
    {
        "name": "Feilbingert",
        "code": "67824"
    },
    {
        "name": "Salzbergen",
        "code": "48499"
    },
    {
        "name": "Westoverledingen",
        "code": "26810"
    },
    {
        "name": "Havixbeck",
        "code": "48329"
    },
    {
        "name": "Bechhofen",
        "code": "66894"
    },
    {
        "name": "Dortmund",
        "code": "44227"
    },
    {
        "name": "Dickenschied u.a.",
        "code": "55483"
    },
    {
        "name": "Neuschönau",
        "code": "94556"
    },
    {
        "name": "Panketal",
        "code": "16341"
    },
    {
        "name": "Berlin",
        "code": "12619"
    },
    {
        "name": "Sonnen",
        "code": "94164"
    },
    {
        "name": "Bad Freienwalde u.a.",
        "code": "16259"
    },
    {
        "name": "Neuhausen/Spree",
        "code": "03058"
    },
    {
        "name": "Golzow, Zechin u.a.",
        "code": "15328"
    },
    {
        "name": "Bernstadt a. d. Eigen",
        "code": "02748"
    },
    {
        "name": "Brüggen",
        "code": "41379"
    },
    {
        "name": "Aachen",
        "code": "52062"
    },
    {
        "name": "Nettetal",
        "code": "41334"
    },
    {
        "name": "Winterspelt",
        "code": "54616"
    },
    {
        "name": "Körperich u.a.",
        "code": "54675"
    },
    {
        "name": "Sonsbeck",
        "code": "47665"
    },
    {
        "name": "Wasserliesch",
        "code": "54332"
    },
    {
        "name": "Mechernich",
        "code": "53894"
    },
    {
        "name": "Moers",
        "code": "47441"
    },
    {
        "name": "Wallerfangen",
        "code": "66798"
    },
    {
        "name": "Trier",
        "code": "54293"
    },
    {
        "name": "Wesel",
        "code": "46485"
    },
    {
        "name": "Erftstadt",
        "code": "50374"
    },
    {
        "name": "Ringe, Laar, Emlichheim",
        "code": "49824"
    },
    {
        "name": "Duisburg",
        "code": "47169"
    },
    {
        "name": "Duisburg",
        "code": "47051"
    },
    {
        "name": "Köln",
        "code": "50827"
    },
    {
        "name": "Altenahr, Berg, Kalenborn, Kirchsahr",
        "code": "53505"
    },
    {
        "name": "Heiden",
        "code": "46359"
    },
    {
        "name": "Saarbrücken",
        "code": "66113"
    },
    {
        "name": "Köln",
        "code": "51105"
    },
    {
        "name": "Essen",
        "code": "45134"
    },
    {
        "name": "Wuppertal",
        "code": "42327"
    },
    {
        "name": "Deuselbach, Hermeskeil, Rorodt",
        "code": "54411"
    },
    {
        "name": "Dissen",
        "code": "49201"
    },
    {
        "name": "Jade",
        "code": "26349"
    },
    {
        "name": "Wolfach, Oberwolfach",
        "code": "77709"
    },
    {
        "name": "Elchesheim-Illingen",
        "code": "76477"
    },
    {
        "name": "Westhofen, Bermersheim",
        "code": "67593"
    },
    {
        "name": "Haßloch",
        "code": "67454"
    },
    {
        "name": "Bad Berleburg",
        "code": "57319"
    },
    {
        "name": "Mainz Ebersheim, Hechtsheim",
        "code": "55129"
    },
    {
        "name": "Friedenweiler",
        "code": "79877"
    },
    {
        "name": "St. Georgen",
        "code": "78112"
    },
    {
        "name": "Hördt",
        "code": "76771"
    },
    {
        "name": "Wildeshausen",
        "code": "27793"
    },
    {
        "name": "Villingen-Schwenningen",
        "code": "78052"
    },
    {
        "name": "Karlsruhe",
        "code": "76135"
    },
    {
        "name": "Dettenheim",
        "code": "76706"
    },
    {
        "name": "Wieden",
        "code": "79695"
    },
    {
        "name": "Geisenheim",
        "code": "65366"
    },
    {
        "name": "Emmerzhausen, Niederdreisbach, Steinebach",
        "code": "57520"
    },
    {
        "name": "Rickenbach",
        "code": "79736"
    },
    {
        "name": "Durbach",
        "code": "77770"
    },
    {
        "name": "Burgschwalbach",
        "code": "65558"
    },
    {
        "name": "Gau-Bickelheim",
        "code": "55599"
    },
    {
        "name": "Hohenstein",
        "code": "65329"
    },
    {
        "name": "Altleiningen",
        "code": "67317"
    },
    {
        "name": "Limburg",
        "code": "65555"
    },
    {
        "name": "Kindenheim",
        "code": "67271"
    },
    {
        "name": "Münster",
        "code": "48149"
    },
    {
        "name": "Lorup, Rastdorf",
        "code": "26901"
    },
    {
        "name": "Münster",
        "code": "48153"
    },
    {
        "name": "Recke",
        "code": "49509"
    },
    {
        "name": "Wittlingen",
        "code": "79599"
    },
    {
        "name": "Ibbenbüren",
        "code": "49477"
    },
    {
        "name": "Mehlbach",
        "code": "67735"
    },
    {
        "name": "Kaiserslautern",
        "code": "67659"
    },
    {
        "name": "Ransbach-Baumbach",
        "code": "56235"
    },
    {
        "name": "Kaiserslautern",
        "code": "67663"
    },
    {
        "name": "Drolshagen",
        "code": "57489"
    },
    {
        "name": "Mogendorf, Ebernhahn, Staudt u.a.",
        "code": "56424"
    },
    {
        "name": "Berschweiler bei Baumholder",
        "code": "55777"
    },
    {
        "name": "Waltrop",
        "code": "45731"
    },
    {
        "name": "Lehmen, Niederfell, Oberfell, Wolken u.a.",
        "code": "56332"
    },
    {
        "name": "Wildenbungert, Gondershausen, Nörtershausen u.a.",
        "code": "56283"
    },
    {
        "name": "Rammelsbach u.a.",
        "code": "66887"
    },
    {
        "name": "Gummersbach",
        "code": "51643"
    },
    {
        "name": "Waldbröl",
        "code": "51545"
    },
    {
        "name": "Merxheim",
        "code": "55627"
    },
    {
        "name": "Hesel, Neukamperfehn u.a.",
        "code": "26835"
    },
    {
        "name": "Hinzweiler",
        "code": "67756"
    },
    {
        "name": "Grumbach",
        "code": "67745"
    },
    {
        "name": "Sankt Ingbert",
        "code": "66386"
    },
    {
        "name": "Dülmen",
        "code": "48249"
    },
    {
        "name": "Bochum",
        "code": "44867"
    },
    {
        "name": "Birkenfeld u.a.",
        "code": "55765"
    },
    {
        "name": "Herne",
        "code": "44653"
    },
    {
        "name": "Metelen",
        "code": "48629"
    },
    {
        "name": "Wuppertal",
        "code": "42285"
    },
    {
        "name": "Dickenschied u.a.",
        "code": "55483"
    },
    {
        "name": "Nebra, Kaiserpfalz",
        "code": "06642"
    },
    {
        "name": "Egling",
        "code": "82544"
    },
    {
        "name": "München",
        "code": "80997"
    },
    {
        "name": "Baierbrunn",
        "code": "82065"
    },
    {
        "name": "Nordhalben",
        "code": "96365"
    },
    {
        "name": "Helbra",
        "code": "06311"
    },
    {
        "name": "Osterburg, Altmärkische Höhe",
        "code": "39606"
    },
    {
        "name": "Mistelbach",
        "code": "95511"
    },
    {
        "name": "München",
        "code": "81476"
    },
    {
        "name": "Schnabelwaid",
        "code": "91289"
    },
    {
        "name": "München",
        "code": "80798"
    },
    {
        "name": "Bischofsgrün",
        "code": "95493"
    },
    {
        "name": "Weißenstadt",
        "code": "95163"
    },
    {
        "name": "Warmensteinach",
        "code": "95485"
    },
    {
        "name": "Glonn",
        "code": "85625"
    },
    {
        "name": "Feilitzsch",
        "code": "95183"
    },
    {
        "name": "Laaber, Brunn",
        "code": "93164"
    },
    {
        "name": "Ettenstatt",
        "code": "91796"
    },
    {
        "name": "Nürnberg",
        "code": "90408"
    },
    {
        "name": "Sonnefeld",
        "code": "96242"
    },
    {
        "name": "Weidhausen b. Coburg",
        "code": "96279"
    },
    {
        "name": "Weimar",
        "code": "99428"
    },
    {
        "name": "Gardelegen",
        "code": "39638"
    },
    {
        "name": "Karlshuld",
        "code": "86668"
    },
    {
        "name": "Großweil",
        "code": "82439"
    },
    {
        "name": "Hitzhofen",
        "code": "85122"
    },
    {
        "name": "Steinbach a. Wald",
        "code": "96361"
    },
    {
        "name": "Mistelgau",
        "code": "95490"
    },
    {
        "name": "Attenweiler",
        "code": "88448"
    },
    {
        "name": "Bad Ditzenbach",
        "code": "73342"
    },
    {
        "name": "Pattensen",
        "code": "30982"
    },
    {
        "name": "Hannover",
        "code": "30179"
    },
    {
        "name": "Schwäbisch Gmünd, Täferrot",
        "code": "73527"
    },
    {
        "name": "Wildflecken",
        "code": "97772"
    },
    {
        "name": "Leinach",
        "code": "97274"
    },
    {
        "name": "Weikersheim",
        "code": "97990"
    },
    {
        "name": "Berkatal",
        "code": "37297"
    },
    {
        "name": "Heimenkirch",
        "code": "88178"
    },
    {
        "name": "Bühlerzell",
        "code": "74426"
    },
    {
        "name": "Sibbesse",
        "code": "31079"
    },
    {
        "name": "Hamburg",
        "code": "22459"
    },
    {
        "name": "Hamburg",
        "code": "20355"
    },
    {
        "name": "Hamburg",
        "code": "20146"
    },
    {
        "name": "Unterpleichfeld",
        "code": "97294"
    },
    {
        "name": "Rumohr",
        "code": "24254"
    },
    {
        "name": "Hamburg",
        "code": "22083"
    },
    {
        "name": "Großharrie",
        "code": "24625"
    },
    {
        "name": "Hamburg",
        "code": "22415"
    },
    {
        "name": "Elchingen",
        "code": "89275"
    },
    {
        "name": "Kirchdorf an der Iller",
        "code": "88457"
    },
    {
        "name": "Kiel Russee",
        "code": "24111"
    },
    {
        "name": "Hamburg",
        "code": "22049"
    },
    {
        "name": "Hüttlingen",
        "code": "73460"
    },
    {
        "name": "Faßberg",
        "code": "29328"
    },
    {
        "name": "Holle",
        "code": "31188"
    },
    {
        "name": "Hamburg",
        "code": "22395"
    },
    {
        "name": "Albertshofen",
        "code": "97320"
    },
    {
        "name": "Schwanfeld",
        "code": "97523"
    },
    {
        "name": "Heidenheim an der Brenz",
        "code": "89522"
    },
    {
        "name": "Steinsfeld",
        "code": "91628"
    },
    {
        "name": "Wipfeld",
        "code": "97537"
    },
    {
        "name": "Schwentinetal",
        "code": "24223"
    },
    {
        "name": "Neresheim",
        "code": "73450"
    },
    {
        "name": "Elbe",
        "code": "38274"
    },
    {
        "name": "Buch a. Wald",
        "code": "91592"
    },
    {
        "name": "Offingen",
        "code": "89362"
    },
    {
        "name": "Bad Lauterberg",
        "code": "37431"
    },
    {
        "name": "Dürrlauingen",
        "code": "89350"
    },
    {
        "name": "Brunstorf",
        "code": "21524"
    },
    {
        "name": "Lüneburg",
        "code": "21337"
    },
    {
        "name": "Braunschweig",
        "code": "38116"
    },
    {
        "name": "Königsberg i. Bay.",
        "code": "97486"
    },
    {
        "name": "Ansbach",
        "code": "91522"
    },
    {
        "name": "Körner, Weinbergen",
        "code": "99998"
    },
    {
        "name": "Goslar",
        "code": "38644"
    },
    {
        "name": "Schmitten",
        "code": "61389"
    },
    {
        "name": "Bischoffen",
        "code": "35649"
    },
    {
        "name": "Mannheim",
        "code": "68199"
    },
    {
        "name": "Waldbronn",
        "code": "76337"
    },
    {
        "name": "Wurster Nordseeküste",
        "code": "27639"
    },
    {
        "name": "Hagen",
        "code": "27628"
    },
    {
        "name": "Karlsdorf-Neuthard",
        "code": "76689"
    },
    {
        "name": "Neulußheim",
        "code": "68809"
    },
    {
        "name": "Hambrücken",
        "code": "76707"
    },
    {
        "name": "Pfungstadt",
        "code": "64319"
    },
    {
        "name": "Heidelberg",
        "code": "69123"
    },
    {
        "name": "Bremerhaven",
        "code": "27574"
    },
    {
        "name": "Rosenfeld",
        "code": "72348"
    },
    {
        "name": "Frankfurt am Main",
        "code": "60329"
    },
    {
        "name": "Paderborn",
        "code": "33104"
    },
    {
        "name": "Oland",
        "code": "25867"
    },
    {
        "name": "Engen",
        "code": "78234"
    },
    {
        "name": "Gorxheimertal",
        "code": "69517"
    },
    {
        "name": "Dieburg",
        "code": "64807"
    },
    {
        "name": "Groß-Bieberau",
        "code": "64401"
    },
    {
        "name": "Deckenpfronn",
        "code": "75392"
    },
    {
        "name": "Süderlügum, Braderup u.a.",
        "code": "25923"
    },
    {
        "name": "Nordstrand, Elisabeth-Sophien-Koog, Südfall",
        "code": "25845"
    },
    {
        "name": "Bremen",
        "code": "28279"
    },
    {
        "name": "Bremen",
        "code": "28359"
    },
    {
        "name": "Wesselburen",
        "code": "25764"
    },
    {
        "name": "Otterndorf",
        "code": "21762"
    },
    {
        "name": "Echzell",
        "code": "61209"
    },
    {
        "name": "Ittlingen",
        "code": "74930"
    },
    {
        "name": "Hanau",
        "code": "63457"
    },
    {
        "name": "Michelstadt",
        "code": "64720"
    },
    {
        "name": "Irndorf",
        "code": "78597"
    },
    {
        "name": "Ottersberg",
        "code": "28870"
    },
    {
        "name": "Sindelfingen",
        "code": "71063"
    },
    {
        "name": "Holzgerlingen",
        "code": "71088"
    },
    {
        "name": "Wietzen",
        "code": "31613"
    },
    {
        "name": "Stockstadt am Main",
        "code": "63811"
    },
    {
        "name": "Sankt Annen, Rehm-Flehde-Bargen",
        "code": "25776"
    },
    {
        "name": "Hemmingstedt",
        "code": "25770"
    },
    {
        "name": "Leinfelden-Echterdingen",
        "code": "70771"
    },
    {
        "name": "Tamm",
        "code": "71732"
    },
    {
        "name": "Mosbach",
        "code": "74821"
    },
    {
        "name": "Waldenbuch",
        "code": "71111"
    },
    {
        "name": "Wolfhagen",
        "code": "34466"
    },
    {
        "name": "Balge",
        "code": "31609"
    },
    {
        "name": "Mömbris",
        "code": "63776"
    },
    {
        "name": "Süderhastedt",
        "code": "25727"
    },
    {
        "name": "Neckarwestheim",
        "code": "74382"
    },
    {
        "name": "Stuttgart",
        "code": "70184"
    },
    {
        "name": "Uhldingen-Mühlhofen",
        "code": "88690"
    },
    {
        "name": "Neckartenzlingen",
        "code": "72654"
    },
    {
        "name": "Lindhorst",
        "code": "31698"
    },
    {
        "name": "Wilster",
        "code": "25554"
    },
    {
        "name": "Erdmannhausen",
        "code": "71729"
    },
    {
        "name": "Denkendorf",
        "code": "73770"
    },
    {
        "name": "Meggerdorf, Friedrichsholm, Friedrichsgraben u.a.",
        "code": "24799"
    },
    {
        "name": "Dorfprozelten",
        "code": "97904"
    },
    {
        "name": "Schuby",
        "code": "24850"
    },
    {
        "name": "Bodenwerder, Pegestorf, Kirchbrak, Hehlen",
        "code": "37619"
    },
    {
        "name": "Elbe-Parey",
        "code": "39317"
    },
    {
        "name": "Stäbelow, Kritzmow",
        "code": "18198"
    },
    {
        "name": "Regensburg",
        "code": "93059"
    },
    {
        "name": "Langenwetzendorf",
        "code": "07957"
    },
    {
        "name": "Zeitz",
        "code": "06711"
    },
    {
        "name": "Mitterteich",
        "code": "95666"
    },
    {
        "name": "Unterreit",
        "code": "83567"
    },
    {
        "name": "Amerang",
        "code": "83123"
    },
    {
        "name": "Wusterwitz, Rosenau, Bensdorf",
        "code": "14789"
    },
    {
        "name": "Leipzig",
        "code": "04107"
    },
    {
        "name": "Ellefeld",
        "code": "08236"
    },
    {
        "name": "Rötha",
        "code": "04571"
    },
    {
        "name": "Havelsee",
        "code": "14798"
    },
    {
        "name": "Zwickau",
        "code": "08058"
    },
    {
        "name": "Meerane",
        "code": "08393"
    },
    {
        "name": "Kirchroth",
        "code": "94356"
    },
    {
        "name": "Seeon-Seebruck",
        "code": "83376"
    },
    {
        "name": "Bad Düben",
        "code": "04849"
    },
    {
        "name": "Remse",
        "code": "08373"
    },
    {
        "name": "Steinach",
        "code": "94377"
    },
    {
        "name": "Langenleuba-Niederhain",
        "code": "04618"
    },
    {
        "name": "Teising",
        "code": "84576"
    },
    {
        "name": "Lichtenstein",
        "code": "09350"
    },
    {
        "name": "Burgkirchen an der Alz",
        "code": "84508"
    },
    {
        "name": "Teisendorf",
        "code": "83317"
    },
    {
        "name": "Taura b. Burgstädt",
        "code": "09249"
    },
    {
        "name": "Rimbach",
        "code": "93485"
    },
    {
        "name": "Postmünster",
        "code": "84389"
    },
    {
        "name": "Geyer",
        "code": "09468"
    },
    {
        "name": "Bayerisch Gmain",
        "code": "83457"
    },
    {
        "name": "Auerbach",
        "code": "09392"
    },
    {
        "name": "Neustrelitz",
        "code": "17235"
    },
    {
        "name": "Potsdam",
        "code": "14473"
    },
    {
        "name": "Langdorf",
        "code": "94264"
    },
    {
        "name": "Berlin Spandau",
        "code": "13581"
    },
    {
        "name": "Altentreptow",
        "code": "17087"
    },
    {
        "name": "Berlin Charlottenburg",
        "code": "10585"
    },
    {
        "name": "Berlin Schöneberg",
        "code": "10783"
    },
    {
        "name": "Berlin Kreuzberg",
        "code": "10969"
    },
    {
        "name": "Greifswald",
        "code": "17493"
    },
    {
        "name": "Berlin Mitte",
        "code": "10119"
    },
    {
        "name": "Röckingen",
        "code": "91740"
    },
    {
        "name": "Stockelsdorf",
        "code": "23617"
    },
    {
        "name": "Tambach-Dietharz/ Thür.",
        "code": "99897"
    },
    {
        "name": "Langenneufnach",
        "code": "86863"
    },
    {
        "name": "Emskirchen",
        "code": "91448"
    },
    {
        "name": "Lübeck St. Lorenz Nord",
        "code": "23554"
    },
    {
        "name": "Wittingen",
        "code": "29378"
    },
    {
        "name": "Großvargula, Tonna",
        "code": "99958"
    },
    {
        "name": "Mühlhausen",
        "code": "96172"
    },
    {
        "name": "Heilsbronn",
        "code": "91560"
    },
    {
        "name": "Soltendiek",
        "code": "29594"
    },
    {
        "name": "Gersthofen",
        "code": "86368"
    },
    {
        "name": "Wolfsburg",
        "code": "38446"
    },
    {
        "name": "Groß Twülpstedt",
        "code": "38464"
    },
    {
        "name": "Thierhaupten",
        "code": "86672"
    },
    {
        "name": "Augsburg",
        "code": "86165"
    },
    {
        "name": "Augsburg",
        "code": "86163"
    },
    {
        "name": "Büddenstedt",
        "code": "38372"
    },
    {
        "name": "Ried",
        "code": "86510"
    },
    {
        "name": "Kuhfelde",
        "code": "29416"
    },
    {
        "name": "Flensburg, Tastrup",
        "code": "24943"
    },
    {
        "name": "Ottenbüttel",
        "code": "25591"
    },
    {
        "name": "Idstedt",
        "code": "24879"
    },
    {
        "name": "Garbsen",
        "code": "30826"
    },
    {
        "name": "Negenborn",
        "code": "37643"
    },
    {
        "name": "Uttenweiler",
        "code": "88524"
    },
    {
        "name": "Esselbach",
        "code": "97839"
    },
    {
        "name": "Osterstedt",
        "code": "25590"
    },
    {
        "name": "Michelfeld",
        "code": "74545"
    },
    {
        "name": "Waldenburg",
        "code": "74638"
    },
    {
        "name": "Munderkingen",
        "code": "89597"
    },
    {
        "name": "Heist",
        "code": "25492"
    },
    {
        "name": "Berglern",
        "code": "85459"
    },
    {
        "name": "Pastetten",
        "code": "85669"
    },
    {
        "name": "Pressath",
        "code": "92690"
    },
    {
        "name": "Röslau",
        "code": "95195"
    },
    {
        "name": "Hausen",
        "code": "93345"
    },
    {
        "name": "Halle/ Saale",
        "code": "06110"
    },
    {
        "name": "Pullenreuth",
        "code": "95704"
    },
    {
        "name": "Aken (Elbe)",
        "code": "06385"
    },
    {
        "name": "Schnaittenbach",
        "code": "92253"
    },
    {
        "name": "Langquaid",
        "code": "84085"
    },
    {
        "name": "Isen",
        "code": "84424"
    },
    {
        "name": "Hohenmölsen",
        "code": "06679"
    },
    {
        "name": "Regensburg",
        "code": "93049"
    },
    {
        "name": "Herrngiersdorf",
        "code": "84097"
    },
    {
        "name": "Gera",
        "code": "07551"
    },
    {
        "name": "Ramerberg",
        "code": "83561"
    },
    {
        "name": "Güstrow",
        "code": "18273"
    },
    {
        "name": "Neustadt a.d. Waldnaab",
        "code": "92660"
    },
    {
        "name": "Rostock, Gelbensande, Rövershagen u.a.",
        "code": "18182"
    },
    {
        "name": "Bechtsried",
        "code": "92699"
    },
    {
        "name": "Eiselfing",
        "code": "83549"
    },
    {
        "name": "Aufhausen",
        "code": "93089"
    },
    {
        "name": "Aschau i. Chiemgau",
        "code": "83229"
    },
    {
        "name": "Bach an der Donau",
        "code": "93090"
    },
    {
        "name": "Markneukirchen",
        "code": "08258"
    },
    {
        "name": "Oranienbaum-Wörlitz",
        "code": "06785"
    },
    {
        "name": "Coswig (Anhalt)",
        "code": "06869"
    },
    {
        "name": "Brennberg",
        "code": "93179"
    },
    {
        "name": "Obing",
        "code": "83119"
    },
    {
        "name": "Gräfenhainichen",
        "code": "06773"
    },
    {
        "name": "Walderbach",
        "code": "93194"
    },
    {
        "name": "Marlow",
        "code": "18337"
    },
    {
        "name": "Taufkirchen",
        "code": "84574"
    },
    {
        "name": "Rositz, Starkenberg, Treben",
        "code": "04617"
    },
    {
        "name": "Thanstein",
        "code": "92554"
    },
    {
        "name": "Schönheide",
        "code": "08304"
    },
    {
        "name": "Taucha",
        "code": "04425"
    },
    {
        "name": "Polling",
        "code": "84570"
    },
    {
        "name": "Garching a.d. Alz",
        "code": "84518"
    },
    {
        "name": "St. Georgen",
        "code": "83368"
    },
    {
        "name": "Traitsching",
        "code": "93455"
    },
    {
        "name": "Traunreut",
        "code": "83374"
    },
    {
        "name": "Kastl",
        "code": "84556"
    },
    {
        "name": "Simbach",
        "code": "94436"
    },
    {
        "name": "Franzburg, Richtenberg, u.a.",
        "code": "18461"
    },
    {
        "name": "Otzing",
        "code": "94563"
    },
    {
        "name": "Niepars",
        "code": "18442"
    },
    {
        "name": "Bad Reichenhall",
        "code": "83435"
    },
    {
        "name": "Chemnitz",
        "code": "09114"
    },
    {
        "name": "Waldheim",
        "code": "04736"
    },
    {
        "name": "Grimmen",
        "code": "18507"
    },
    {
        "name": "Egglham",
        "code": "84385"
    },
    {
        "name": "Trebbin",
        "code": "14959"
    },
    {
        "name": "Grünhainichen",
        "code": "09579"
    },
    {
        "name": "Hiddensee",
        "code": "18565"
    },
    {
        "name": "Berlin Westend",
        "code": "14052"
    },
    {
        "name": "Berlin Wedding",
        "code": "13405"
    },
    {
        "name": "Berlin Reinickendorf",
        "code": "13403"
    },
    {
        "name": "Berlin Wilmersdorf",
        "code": "10719"
    },
    {
        "name": "Berlin Moabit",
        "code": "10555"
    },
    {
        "name": "Berlin Lankwitz",
        "code": "12249"
    },
    {
        "name": "Krien u.a.",
        "code": "17391"
    },
    {
        "name": "Berlin Schöneberg",
        "code": "10829"
    },
    {
        "name": "Berlin",
        "code": "12309"
    },
    {
        "name": "Lehesten",
        "code": "07349"
    },
    {
        "name": "Tschirn",
        "code": "96367"
    },
    {
        "name": "Jena, Bucha, Großpürschütz u.a.",
        "code": "07751"
    },
    {
        "name": "Jena, Bucha, Großpürschütz u.a.",
        "code": "07751"
    },
    {
        "name": "Presseck",
        "code": "95355"
    },
    {
        "name": "Hummeltal",
        "code": "95503"
    },
    {
        "name": "Banzkow, Sukow",
        "code": "19079"
    },
    {
        "name": "München",
        "code": "81475"
    },
    {
        "name": "Bismark",
        "code": "39629"
    },
    {
        "name": "Schnackenburg",
        "code": "29493"
    },
    {
        "name": "Tangerhütte u.a.",
        "code": "39517"
    },
    {
        "name": "Oberschleißheim",
        "code": "85764"
    },
    {
        "name": "München",
        "code": "80993"
    },
    {
        "name": "Creußen",
        "code": "95473"
    },
    {
        "name": "München",
        "code": "81545"
    },
    {
        "name": "Auerbach i.d. OPf.",
        "code": "91275"
    },
    {
        "name": "München",
        "code": "80933"
    },
    {
        "name": "Neukloster",
        "code": "23992"
    },
    {
        "name": "Sauerlach",
        "code": "82054"
    },
    {
        "name": "Freyburg, Balgstädt",
        "code": "06632"
    },
    {
        "name": "Emtmannsberg",
        "code": "95517"
    },
    {
        "name": "Ziegenrück",
        "code": "07924"
    },
    {
        "name": "Magdeburg",
        "code": "39114"
    },
    {
        "name": "Pliening",
        "code": "85652"
    },
    {
        "name": "Bützow u.a.",
        "code": "18246"
    },
    {
        "name": "Eisenberg, Gösen, Hainspitz",
        "code": "07607"
    },
    {
        "name": "Nittendorf",
        "code": "93152"
    },
    {
        "name": "Hamm",
        "code": "59063"
    },
    {
        "name": "Merzhausen",
        "code": "79249"
    },
    {
        "name": "Freiburg im Breisgau",
        "code": "79098"
    },
    {
        "name": "Rüdesheim am Rhein",
        "code": "65385"
    },
    {
        "name": "Freiburg im Breisgau",
        "code": "79108"
    },
    {
        "name": "Glandorf",
        "code": "49219"
    },
    {
        "name": "Sundern",
        "code": "59846"
    },
    {
        "name": "Oestrich-Winkel",
        "code": "65375"
    },
    {
        "name": "Höhn",
        "code": "56462"
    },
    {
        "name": "Gutach im Breisgau",
        "code": "79261"
    },
    {
        "name": "Esthal",
        "code": "67472"
    },
    {
        "name": "Landau in der Pfalz",
        "code": "76829"
    },
    {
        "name": "Arnsberg",
        "code": "59821"
    },
    {
        "name": "Bernau im Schwarzwald",
        "code": "79872"
    },
    {
        "name": "Holdorf",
        "code": "49451"
    },
    {
        "name": "Scheibenhardt",
        "code": "76779"
    },
    {
        "name": "Mühlenbach",
        "code": "77796"
    },
    {
        "name": "Medard, Rathskirchen u.a.",
        "code": "67744"
    },
    {
        "name": "Melsbach",
        "code": "56581"
    },
    {
        "name": "Wildenbungert, Gondershausen, Nörtershausen u.a.",
        "code": "56283"
    },
    {
        "name": "Hagen",
        "code": "58097"
    },
    {
        "name": "Nümbrecht",
        "code": "51588"
    },
    {
        "name": "Reifenberg",
        "code": "66507"
    },
    {
        "name": "Nordkirchen",
        "code": "59394"
    },
    {
        "name": "Höheinöd, Petersberg u.a.",
        "code": "66989"
    },
    {
        "name": "Hagen",
        "code": "58095"
    },
    {
        "name": "Winningen",
        "code": "56333"
    },
    {
        "name": "Birnbach",
        "code": "57612"
    },
    {
        "name": "Mönchengladbach",
        "code": "41069"
    },
    {
        "name": "Rheurdt",
        "code": "47509"
    },
    {
        "name": "Tawern",
        "code": "54456"
    },
    {
        "name": "Stadtkyll",
        "code": "54589"
    },
    {
        "name": "Kyllburg",
        "code": "54655"
    },
    {
        "name": "Moers",
        "code": "47447"
    },
    {
        "name": "Oberhausen",
        "code": "46117"
    },
    {
        "name": "Oberhausen",
        "code": "46119"
    },
    {
        "name": "Erkrath",
        "code": "40699"
    },
    {
        "name": "Reifferscheid, Kaltenborn, Wershofen u.a.",
        "code": "53520"
    },
    {
        "name": "Dorsten",
        "code": "46282"
    },
    {
        "name": "Essen",
        "code": "45359"
    },
    {
        "name": "Leverkusen",
        "code": "51371"
    },
    {
        "name": "Köln",
        "code": "50931"
    },
    {
        "name": "Morbach",
        "code": "54497"
    },
    {
        "name": "Köln",
        "code": "51103"
    },
    {
        "name": "Essen",
        "code": "45136"
    },
    {
        "name": "Saarbrücken",
        "code": "66129"
    },
    {
        "name": "Essen",
        "code": "45309"
    },
    {
        "name": "Neustadt an der Weinstraße",
        "code": "67435"
    },
    {
        "name": "Seebach",
        "code": "77889"
    },
    {
        "name": "Wiesbaden",
        "code": "65195"
    },
    {
        "name": "Selters",
        "code": "65618"
    },
    {
        "name": "Mainz",
        "code": "55116"
    },
    {
        "name": "Rheinstetten",
        "code": "76287"
    },
    {
        "name": "Nierstein",
        "code": "55283"
    },
    {
        "name": "Schifferstadt",
        "code": "67105"
    },
    {
        "name": "Hofheim am Taunus",
        "code": "65719"
    },
    {
        "name": "Karlsruhe",
        "code": "76199"
    },
    {
        "name": "Karlsruhe",
        "code": "76137"
    },
    {
        "name": "Kirn",
        "code": "55606"
    },
    {
        "name": "Dortmund",
        "code": "44319"
    },
    {
        "name": "Iserlohn",
        "code": "58642"
    },
    {
        "name": "Altenkirchen (Westerwald)",
        "code": "57610"
    },
    {
        "name": "Münster",
        "code": "48157"
    },
    {
        "name": "Wyhl",
        "code": "79369"
    },
    {
        "name": "Niederkirchen",
        "code": "67700"
    },
    {
        "name": "Hamm (Sieg)",
        "code": "57577"
    },
    {
        "name": "Schallstadt",
        "code": "79227"
    },
    {
        "name": "Medard, Rathskirchen u.a.",
        "code": "67744"
    },
    {
        "name": "Selters (Westerwald)",
        "code": "56242"
    },
    {
        "name": "Steinen",
        "code": "79585"
    },
    {
        "name": "Riegel Kaiserstuhl",
        "code": "79359"
    },
    {
        "name": "Sohren",
        "code": "55487"
    },
    {
        "name": "Bad Hönningen",
        "code": "53557"
    },
    {
        "name": "Dortmund",
        "code": "44359"
    },
    {
        "name": "Dortmund",
        "code": "44357"
    },
    {
        "name": "Kirn",
        "code": "55606"
    },
    {
        "name": "Briedel",
        "code": "56867"
    },
    {
        "name": "Sinzig",
        "code": "53489"
    },
    {
        "name": "Senheim",
        "code": "56820"
    },
    {
        "name": "Udestedt, Mönchenholzhausen u.a.",
        "code": "99198"
    },
    {
        "name": "Nürnberg",
        "code": "90471"
    },
    {
        "name": "Pollenfeld",
        "code": "85131"
    },
    {
        "name": "Wittenförden u.a.",
        "code": "19073"
    },
    {
        "name": "Schwaig b. Nürnberg, Behringersdorfer Forst",
        "code": "90571"
    },
    {
        "name": "Bad Blankenburg",
        "code": "07422"
    },
    {
        "name": "Tutzing",
        "code": "82327"
    },
    {
        "name": "Trebel",
        "code": "29494"
    },
    {
        "name": "Mansfeld",
        "code": "06343"
    },
    {
        "name": "Olching",
        "code": "82140"
    },
    {
        "name": "Lübstorf",
        "code": "19069"
    },
    {
        "name": "Weißenbrunn",
        "code": "96369"
    },
    {
        "name": "Lenggries",
        "code": "83661"
    },
    {
        "name": "Neukirch",
        "code": "88099"
    },
    {
        "name": "Langenhagen",
        "code": "30851"
    },
    {
        "name": "Warthausen",
        "code": "88447"
    },
    {
        "name": "Mulfingen",
        "code": "74673"
    },
    {
        "name": "Alfeld (Leine)",
        "code": "31061"
    },
    {
        "name": "Ebersburg",
        "code": "36157"
    },
    {
        "name": "Schenefeld",
        "code": "22869"
    },
    {
        "name": "Bütthard",
        "code": "97244"
    },
    {
        "name": "Zell a. Main",
        "code": "97299"
    },
    {
        "name": "Retzstadt",
        "code": "97282"
    },
    {
        "name": "Ochsenhausen",
        "code": "88416"
    },
    {
        "name": "Abtsgmünd",
        "code": "73453"
    },
    {
        "name": "Heubach",
        "code": "73540"
    },
    {
        "name": "Hamburg",
        "code": "20457"
    },
    {
        "name": "Rot am See",
        "code": "74585"
    },
    {
        "name": "Hamburg",
        "code": "21107"
    },
    {
        "name": "Laupheim",
        "code": "88471"
    },
    {
        "name": "Hamburg",
        "code": "20251"
    },
    {
        "name": "Ochsenfurt",
        "code": "97199"
    },
    {
        "name": "Eggestorf",
        "code": "21272"
    },
    {
        "name": "Hamburg",
        "code": "20537"
    },
    {
        "name": "Flintbek",
        "code": "24220"
    },
    {
        "name": "Hamburg",
        "code": "22393"
    },
    {
        "name": "Buxheim",
        "code": "87740"
    },
    {
        "name": "Kiel",
        "code": "24105"
    },
    {
        "name": "Vierhöfen",
        "code": "21444"
    },
    {
        "name": "Windelsbach",
        "code": "91635"
    },
    {
        "name": "Niederstotzingen",
        "code": "89168"
    },
    {
        "name": "Probsteierhagen",
        "code": "24253"
    },
    {
        "name": "Ahnsbeck",
        "code": "29353"
    },
    {
        "name": "Eimke",
        "code": "29578"
    },
    {
        "name": "Waldstetten",
        "code": "89367"
    },
    {
        "name": "Betzendorf",
        "code": "21386"
    },
    {
        "name": "Fargau-Pratjau",
        "code": "24256"
    },
    {
        "name": "Bardowick, Wittorf, Barum",
        "code": "21357"
    },
    {
        "name": "Wilburgstetten",
        "code": "91634"
    },
    {
        "name": "Hohenhorn",
        "code": "21526"
    },
    {
        "name": "Reinfeld (Holstein)",
        "code": "23858"
    },
    {
        "name": "Sprakensehl",
        "code": "29365"
    },
    {
        "name": "Goslar",
        "code": "38640"
    },
    {
        "name": "Bosau",
        "code": "23715"
    },
    {
        "name": "Flachslanden",
        "code": "91604"
    },
    {
        "name": "Braunschweig",
        "code": "38118"
    },
    {
        "name": "Spenge",
        "code": "32139"
    },
    {
        "name": "Nordenham",
        "code": "26954"
    },
    {
        "name": "Ketsch",
        "code": "68775"
    },
    {
        "name": "Oberndorf am Neckar",
        "code": "78727"
    },
    {
        "name": "Epfendorf",
        "code": "78736"
    },
    {
        "name": "Münchhausen",
        "code": "35117"
    },
    {
        "name": "Vöhringen",
        "code": "72189"
    },
    {
        "name": "Paderborn",
        "code": "33106"
    },
    {
        "name": "Wildberg",
        "code": "72218"
    },
    {
        "name": "Gießen",
        "code": "35392"
    },
    {
        "name": "Wellendingen",
        "code": "78669"
    },
    {
        "name": "Neuenkirchen, Scholen",
        "code": "27251"
    },
    {
        "name": "Pohlheim",
        "code": "35415"
    },
    {
        "name": "Frankfurt am Main",
        "code": "60599"
    },
    {
        "name": "Korbach",
        "code": "34497"
    },
    {
        "name": "Simmozheim",
        "code": "75397"
    },
    {
        "name": "Dotternhausen",
        "code": "72359"
    },
    {
        "name": "Ötisheim",
        "code": "75443"
    },
    {
        "name": "Herrenberg",
        "code": "71083"
    },
    {
        "name": "Kirchhain",
        "code": "35274"
    },
    {
        "name": "Groß-Umstadt",
        "code": "64823"
    },
    {
        "name": "Bisingen",
        "code": "72406"
    },
    {
        "name": "Hanau",
        "code": "63452"
    },
    {
        "name": "Hechingen",
        "code": "72379"
    },
    {
        "name": "Ranstadt",
        "code": "63691"
    },
    {
        "name": "Hammersbach",
        "code": "63546"
    },
    {
        "name": "Neufeld, Schmedeswurth",
        "code": "25724"
    },
    {
        "name": "Erlensee",
        "code": "63526"
    },
    {
        "name": "Schaafheim",
        "code": "64850"
    },
    {
        "name": "Rodenbach",
        "code": "63517"
    },
    {
        "name": "Dußlingen",
        "code": "72144"
    },
    {
        "name": "Brunsbüttel",
        "code": "25541"
    },
    {
        "name": "Siegelsbach",
        "code": "74936"
    },
    {
        "name": "Dettenhausen",
        "code": "72135"
    },
    {
        "name": "Niederwöhren",
        "code": "31712"
    },
    {
        "name": "Neckarzimmern",
        "code": "74865"
    },
    {
        "name": "Oederquart",
        "code": "21734"
    },
    {
        "name": "Ludwigsburg",
        "code": "71636"
    },
    {
        "name": "Talheim",
        "code": "74388"
    },
    {
        "name": "Sankt Margarethen",
        "code": "25572"
    },
    {
        "name": "Stuttgart",
        "code": "70327"
    },
    {
        "name": "Untergruppenbach",
        "code": "74199"
    },
    {
        "name": "Bothel, Kirchwalsede u.a.",
        "code": "27386"
    },
    {
        "name": "Rotenburg",
        "code": "27356"
    },
    {
        "name": "Hohentengen",
        "code": "88367"
    },
    {
        "name": "Kassel",
        "code": "34131"
    },
    {
        "name": "Ahnatal",
        "code": "34292"
    },
    {
        "name": "Grebenau",
        "code": "36323"
    },
    {
        "name": "Oberboihingen",
        "code": "72644"
    },
    {
        "name": "Zwiefalten",
        "code": "88529"
    },
    {
        "name": "Köngen",
        "code": "73257"
    },
    {
        "name": "Glückstadt",
        "code": "25348"
    },
    {
        "name": "Grabenstetten",
        "code": "72582"
    },
    {
        "name": "Stade",
        "code": "21682"
    },
    {
        "name": "Reimlingen",
        "code": "86756"
    },
    {
        "name": "Reinstorf",
        "code": "21400"
    },
    {
        "name": "Boizenburg, Gresse, Greven u.a.",
        "code": "19258"
    },
    {
        "name": "Calberlah",
        "code": "38547"
    },
    {
        "name": "Welden",
        "code": "86465"
    },
    {
        "name": "Suhl",
        "code": "98529"
    },
    {
        "name": "Schwenningen",
        "code": "89443"
    },
    {
        "name": "Großvargula, Tonna",
        "code": "99958"
    },
    {
        "name": "Schönewörde",
        "code": "29396"
    },
    {
        "name": "Wilhelmsdorf",
        "code": "91489"
    },
    {
        "name": "Jembke",
        "code": "38477"
    },
    {
        "name": "Roßtal",
        "code": "90574"
    },
    {
        "name": "Beetzendorf, Rohrberg, Jübar",
        "code": "38489"
    },
    {
        "name": "Süpplingen, Frellstedt",
        "code": "38373"
    },
    {
        "name": "Warberg",
        "code": "38378"
    },
    {
        "name": "Velpke",
        "code": "38458"
    },
    {
        "name": "Gundelsheim",
        "code": "96163"
    },
    {
        "name": "Hirschaid",
        "code": "96114"
    },
    {
        "name": "Zapfendorf",
        "code": "96199"
    },
    {
        "name": "Hofstetten",
        "code": "86928"
    },
    {
        "name": "Huy",
        "code": "38838"
    },
    {
        "name": "Wessobrunn",
        "code": "82405"
    },
    {
        "name": "Großenbrode",
        "code": "23775"
    },
    {
        "name": "Ehekirchen",
        "code": "86676"
    },
    {
        "name": "Horgenzell",
        "code": "88263"
    },
    {
        "name": "Lütjenwestedt, Tackesdorf",
        "code": "25585"
    },
    {
        "name": "Altshausen",
        "code": "88361"
    },
    {
        "name": "Kirchheim (Hessen)",
        "code": "36275"
    },
    {
        "name": "Hollern-Twielenfleth",
        "code": "21723"
    },
    {
        "name": "Jagel, Lottorf",
        "code": "24878"
    },
    {
        "name": "Sauensiek",
        "code": "21644"
    },
    {
        "name": "Althütte",
        "code": "71566"
    },
    {
        "name": "Gehrden",
        "code": "30989"
    },
    {
        "name": "Apensen",
        "code": "21641"
    },
    {
        "name": "Kalbach",
        "code": "36148"
    },
    {
        "name": "Luckau, Waldrehna, Heideblick, Fürstlich Drehna",
        "code": "15926"
    },
    {
        "name": "Binz",
        "code": "18609"
    },
    {
        "name": "Berlin Bohnsdorf",
        "code": "12526"
    },
    {
        "name": "Biesenthal",
        "code": "16359"
    },
    {
        "name": "Philippsreut",
        "code": "94158"
    },
    {
        "name": "Karlshagen",
        "code": "17449"
    },
    {
        "name": "Königsbrück u.a.",
        "code": "01936"
    },
    {
        "name": "Karlshagen",
        "code": "17449"
    },
    {
        "name": "Dresden",
        "code": "01465"
    },
    {
        "name": "Torgelow",
        "code": "17358"
    },
    {
        "name": "Eisenhüttenstadt",
        "code": "15890"
    },
    {
        "name": "Zittau",
        "code": "02788"
    },
    {
        "name": "Rothenburg/O.L.",
        "code": "02929"
    },
    {
        "name": "Wettstetten",
        "code": "85139"
    },
    {
        "name": "Petershausen",
        "code": "85238"
    },
    {
        "name": "Plech",
        "code": "91287"
    },
    {
        "name": "Stadtsteinach",
        "code": "95346"
    },
    {
        "name": "Seehausen, Werben, Leppin u.a.",
        "code": "39615"
    },
    {
        "name": "Jena, Bucha, Großpürschütz u.a.",
        "code": "07751"
    },
    {
        "name": "Ludwigschorgast",
        "code": "95364"
    },
    {
        "name": "München",
        "code": "80796"
    },
    {
        "name": "Bad Berneck im Fichtelgebirge",
        "code": "95460"
    },
    {
        "name": "Miesbach",
        "code": "83714"
    },
    {
        "name": "Anzing",
        "code": "85646"
    },
    {
        "name": "Weißenfels, Stößen",
        "code": "06667"
    },
    {
        "name": "Freihung",
        "code": "92271"
    },
    {
        "name": "Kirschkau, Pausa-Mühltroff",
        "code": "07919"
    },
    {
        "name": "Freudenberg",
        "code": "92272"
    },
    {
        "name": "Frankleben",
        "code": "06259"
    },
    {
        "name": "Nagel",
        "code": "95697"
    },
    {
        "name": "Gera, Zedlitz u.a.",
        "code": "07557"
    },
    {
        "name": "Leuna",
        "code": "06237"
    },
    {
        "name": "Regensburg",
        "code": "93051"
    },
    {
        "name": "Landshut, Altdorf",
        "code": "84032"
    },
    {
        "name": "Friedenfels",
        "code": "95688"
    },
    {
        "name": "Albaching",
        "code": "83544"
    },
    {
        "name": "Zeitlarn",
        "code": "93197"
    },
    {
        "name": "Dummerstorf",
        "code": "18196"
    },
    {
        "name": "Ronneburg, Braunichswalde, Großenstein u.a.",
        "code": "07580"
    },
    {
        "name": "Schwarzach b. Nabburg",
        "code": "92548"
    },
    {
        "name": "Dessau-Roßlau",
        "code": "06844"
    },
    {
        "name": "Rathenow",
        "code": "14712"
    },
    {
        "name": "Bad Brambach",
        "code": "08648"
    },
    {
        "name": "Leipzig",
        "code": "04159"
    },
    {
        "name": "Wittstock/Dosse, Heiligengrabe",
        "code": "16909"
    },
    {
        "name": "Schnaitsee",
        "code": "83530"
    },
    {
        "name": "Auerbach/Vogtl.",
        "code": "08209"
    },
    {
        "name": "Brandenburg/ Havel",
        "code": "14774"
    },
    {
        "name": "Leipzig",
        "code": "04349"
    },
    {
        "name": "Engelsberg",
        "code": "84549"
    },
    {
        "name": "Pilsting",
        "code": "94431"
    },
    {
        "name": "Pemfling",
        "code": "93482"
    },
    {
        "name": "Waldmünchen",
        "code": "93449"
    },
    {
        "name": "Schlema",
        "code": "08301"
    },
    {
        "name": "Treuenbrietzen",
        "code": "14929"
    },
    {
        "name": "Kirchanschöring",
        "code": "83417"
    },
    {
        "name": "Hartmannsdorf",
        "code": "09232"
    },
    {
        "name": "Kötzting",
        "code": "93444"
    },
    {
        "name": "Amtsberg",
        "code": "09439"
    },
    {
        "name": "Flöha",
        "code": "09557"
    },
    {
        "name": "Miltzow u.a.",
        "code": "18519"
    },
    {
        "name": "Riesa",
        "code": "01591"
    },
    {
        "name": "Sponholz, Neunkirchen u.a.",
        "code": "17039"
    },
    {
        "name": "Berlin Schmargendorf",
        "code": "14199"
    },
    {
        "name": "Fürstenstein",
        "code": "94538"
    },
    {
        "name": "Berlin Reinickendorf",
        "code": "13437"
    },
    {
        "name": "Gützkow",
        "code": "17506"
    },
    {
        "name": "Berlin Mariendorf",
        "code": "12109"
    },
    {
        "name": "Röderland, Großthiemig u.a.",
        "code": "04932"
    },
    {
        "name": "Wilsdruff",
        "code": "01723"
    },
    {
        "name": "Berlin Prenzlauer Berg",
        "code": "10407"
    },
    {
        "name": "Tharandt u.a.",
        "code": "01737"
    },
    {
        "name": "Bernau",
        "code": "16321"
    },
    {
        "name": "Berlin Alt-Hohenschönhausen",
        "code": "13055"
    },
    {
        "name": "Berlin Friedrichsfelde",
        "code": "10315"
    },
    {
        "name": "Dorfhain",
        "code": "01738"
    },
    {
        "name": "Teupitz",
        "code": "15755"
    },
    {
        "name": "Friedland, Galenbeck, Datzetal",
        "code": "17099"
    },
    {
        "name": "Berlin",
        "code": "12629"
    },
    {
        "name": "Bestensee",
        "code": "15741"
    },
    {
        "name": "Kröslin, Krummin, Lassan u.a.",
        "code": "17440"
    },
    {
        "name": "Eggesin",
        "code": "17367"
    },
    {
        "name": "Göda",
        "code": "02633"
    },
    {
        "name": "Nürnberg",
        "code": "90411"
    },
    {
        "name": "Rockhausen, Klettbach",
        "code": "99102"
    },
    {
        "name": "Odelzhausen",
        "code": "85235"
    },
    {
        "name": "Pähl",
        "code": "82396"
    },
    {
        "name": "Landsberied",
        "code": "82290"
    },
    {
        "name": "Seefeld",
        "code": "82229"
    },
    {
        "name": "Woltersdorf",
        "code": "29497"
    },
    {
        "name": "Krün",
        "code": "82494"
    },
    {
        "name": "Ludwigslust",
        "code": "19288"
    },
    {
        "name": "Lenzen",
        "code": "19309"
    },
    {
        "name": "Weichering",
        "code": "86706"
    },
    {
        "name": "Benediktbeuern",
        "code": "83671"
    },
    {
        "name": "Teuschnitz",
        "code": "96358"
    },
    {
        "name": "Aachen",
        "code": "52072"
    },
    {
        "name": "Viersen",
        "code": "41751"
    },
    {
        "name": "Mönchengladbach",
        "code": "41061"
    },
    {
        "name": "Kamp-Lintfort",
        "code": "47475"
    },
    {
        "name": "Düren",
        "code": "52351"
    },
    {
        "name": "Preist",
        "code": "54664"
    },
    {
        "name": "Dinslaken",
        "code": "46535"
    },
    {
        "name": "Schermbeck",
        "code": "46514"
    },
    {
        "name": "Borken",
        "code": "46325"
    },
    {
        "name": "Reifferscheid, Kaltenborn, Wershofen u.a.",
        "code": "53520"
    },
    {
        "name": "Düsseldorf",
        "code": "40223"
    },
    {
        "name": "Köln",
        "code": "50765"
    },
    {
        "name": "Swisttal",
        "code": "53913"
    },
    {
        "name": "Hoogstede",
        "code": "49846"
    },
    {
        "name": "Ahrbrück, Heckenbach, Hönningen, Kesseling, Rech",
        "code": "53506"
    },
    {
        "name": "Köln",
        "code": "50670"
    },
    {
        "name": "Essen",
        "code": "45143"
    },
    {
        "name": "Ürzig",
        "code": "54539"
    },
    {
        "name": "Gladbeck",
        "code": "45968"
    },
    {
        "name": "Merchweiler",
        "code": "66589"
    },
    {
        "name": "Bonn",
        "code": "53121"
    },
    {
        "name": "Rammelsbach u.a.",
        "code": "66887"
    },
    {
        "name": "Gummersbach",
        "code": "51647"
    },
    {
        "name": "Mittelbrunn, Queidersbach u.a.",
        "code": "66851"
    },
    {
        "name": "Detern",
        "code": "26847"
    },
    {
        "name": "Mackenbach",
        "code": "67686"
    },
    {
        "name": "Peterswald-Löffelscheid u.a.",
        "code": "56858"
    },
    {
        "name": "Hückeswagen",
        "code": "42499"
    },
    {
        "name": "Radevormwald",
        "code": "42477"
    },
    {
        "name": "Witten",
        "code": "58452"
    },
    {
        "name": "Asbach, Buchholz",
        "code": "53567"
    },
    {
        "name": "Leer",
        "code": "26789"
    },
    {
        "name": "Tiefenbach u.a.",
        "code": "55471"
    },
    {
        "name": "Gelsenkirchen Rotthausen",
        "code": "45884"
    },
    {
        "name": "Schöppingen",
        "code": "48624"
    },
    {
        "name": "Herne",
        "code": "44649"
    },
    {
        "name": "Norderney",
        "code": "26548"
    },
    {
        "name": "Oberlangen, Niederlangen",
        "code": "49779"
    },
    {
        "name": "Wuppertal",
        "code": "42281"
    },
    {
        "name": "Bunde",
        "code": "26831"
    },
    {
        "name": "Herne",
        "code": "44629"
    },
    {
        "name": "Bad Breisig, Waldorf, Gönnersdorf",
        "code": "53498"
    },
    {
        "name": "Waldsee",
        "code": "67165"
    },
    {
        "name": "Ganderkesee",
        "code": "27777"
    },
    {
        "name": "Twistringen",
        "code": "27239"
    },
    {
        "name": "Harpstedt, Groß Ippener, Colnrade u.a.",
        "code": "27243"
    },
    {
        "name": "Pfalzgrafenweiler",
        "code": "72285"
    },
    {
        "name": "Mannheim",
        "code": "68309"
    },
    {
        "name": "Weiterstadt",
        "code": "64331"
    },
    {
        "name": "Bad Homburg v.d. Höhe",
        "code": "61348"
    },
    {
        "name": "Königsbach-Stein",
        "code": "75203"
    },
    {
        "name": "Wetter",
        "code": "35083"
    },
    {
        "name": "Wettenberg",
        "code": "35435"
    },
    {
        "name": "Weimar (Lahn)",
        "code": "35096"
    },
    {
        "name": "Mühltal",
        "code": "64367"
    },
    {
        "name": "Borchen",
        "code": "33178"
    },
    {
        "name": "Delmenhorst",
        "code": "27755"
    },
    {
        "name": "Frankfurt am Main",
        "code": "60311"
    },
    {
        "name": "Gießen",
        "code": "35394"
    },
    {
        "name": "Mörlenbach",
        "code": "69509"
    },
    {
        "name": "Diepenau",
        "code": "31603"
    },
    {
        "name": "Burgwald",
        "code": "35099"
    },
    {
        "name": "Marburg",
        "code": "35043"
    },
    {
        "name": "Gottmadingen",
        "code": "78244"
    },
    {
        "name": "Vlotho",
        "code": "32602"
    },
    {
        "name": "Lichtenau",
        "code": "33165"
    },
    {
        "name": "Offenbach am Main",
        "code": "63075"
    },
    {
        "name": "Bondorf",
        "code": "71149"
    },
    {
        "name": "Bremen",
        "code": "28277"
    },
    {
        "name": "Neckarsteinach",
        "code": "69239"
    },
    {
        "name": "Rauschenberg",
        "code": "35282"
    },
    {
        "name": "Worpswede",
        "code": "27726"
    },
    {
        "name": "Heimsheim",
        "code": "71296"
    },
    {
        "name": "Neuenkirchen",
        "code": "21763"
    },
    {
        "name": "Albstadt",
        "code": "72459"
    },
    {
        "name": "Bodelshausen",
        "code": "72411"
    },
    {
        "name": "Ditzingen",
        "code": "71254"
    },
    {
        "name": "Leonberg",
        "code": "71229"
    },
    {
        "name": "Lamstedt",
        "code": "21769"
    },
    {
        "name": "Ofterdingen",
        "code": "72131"
    },
    {
        "name": "Hirzenhain",
        "code": "63697"
    },
    {
        "name": "Großwallstadt",
        "code": "63868"
    },
    {
        "name": "Stadthagen",
        "code": "31655"
    },
    {
        "name": "Hessigheim",
        "code": "74394"
    },
    {
        "name": "Untereisesheim",
        "code": "74257"
    },
    {
        "name": "Bad Pyrmont",
        "code": "31812"
    },
    {
        "name": "Drakenburg",
        "code": "31623"
    },
    {
        "name": "Stöckse",
        "code": "31638"
    },
    {
        "name": "Wunstorf",
        "code": "31515"
    },
    {
        "name": "Collenberg",
        "code": "97903"
    },
    {
        "name": "Bad Soden-Salmünster",
        "code": "63628"
    },
    {
        "name": "Löwenstein",
        "code": "74245"
    },
    {
        "name": "Handewitt",
        "code": "24976"
    },
    {
        "name": "Spiegelberg",
        "code": "71579"
    },
    {
        "name": "Flensburg",
        "code": "24939"
    },
    {
        "name": "Gräfendorf",
        "code": "97782"
    },
    {
        "name": "Hannover",
        "code": "30167"
    },
    {
        "name": "Wrist",
        "code": "25563"
    },
    {
        "name": "Amtzell",
        "code": "88279"
    },
    {
        "name": "Prisdorf",
        "code": "25497"
    },
    {
        "name": "Erbach",
        "code": "89155"
    },
    {
        "name": "Ruppertshofen",
        "code": "73577"
    },
    {
        "name": "Waldstetten",
        "code": "73550"
    },
    {
        "name": "Oberdischingen",
        "code": "89610"
    },
    {
        "name": "Rellingen",
        "code": "25462"
    },
    {
        "name": "Thüngen",
        "code": "97289"
    },
    {
        "name": "Vellberg",
        "code": "74541"
    },
    {
        "name": "Ulm",
        "code": "89079"
    },
    {
        "name": "Böhmenkirch",
        "code": "89558"
    },
    {
        "name": "Kappeln",
        "code": "24376"
    },
    {
        "name": "Hamburg",
        "code": "22763"
    },
    {
        "name": "Burgdorf",
        "code": "31303"
    },
    {
        "name": "Hildesheim",
        "code": "31134"
    },
    {
        "name": "Randersacker",
        "code": "97236"
    },
    {
        "name": "Hamburg",
        "code": "22335"
    },
    {
        "name": "Wain",
        "code": "88489"
    },
    {
        "name": "Hamburg",
        "code": "22297"
    },
    {
        "name": "Bernstadt",
        "code": "89182"
    },
    {
        "name": "Hamburg",
        "code": "22299"
    },
    {
        "name": "Oldendorf (Luhe), Amelinghausen, Rehlingen",
        "code": "21385"
    },
    {
        "name": "Ellwangen (Jagst)",
        "code": "73479"
    },
    {
        "name": "Hamburg",
        "code": "22047"
    },
    {
        "name": "Nersingen",
        "code": "89278"
    },
    {
        "name": "Osterode am Harz",
        "code": "37520"
    },
    {
        "name": "Duderstadt",
        "code": "37115"
    },
    {
        "name": "Eisenheim",
        "code": "97247"
    },
    {
        "name": "Höfer",
        "code": "29361"
    },
    {
        "name": "Glinde",
        "code": "21509"
    },
    {
        "name": "Schwentinental",
        "code": "24222"
    },
    {
        "name": "Radbruch",
        "code": "21449"
    },
    {
        "name": "Ascheberg",
        "code": "24326"
    },
    {
        "name": "Ascheberg",
        "code": "24326"
    },
    {
        "name": "Vierhöfen",
        "code": "21444"
    },
    {
        "name": "Schönberg (Holstein)",
        "code": "24217"
    },
    {
        "name": "Kröppelshagen-Fahrendorf",
        "code": "21529"
    },
    {
        "name": "Hanstedt",
        "code": "29582"
    },
    {
        "name": "Seth",
        "code": "23845"
    },
    {
        "name": "Markt Rettenbach",
        "code": "87733"
    },
    {
        "name": "Wallerstein",
        "code": "86757"
    },
    {
        "name": "Braunschweig",
        "code": "38122"
    },
    {
        "name": "Ahrensbök",
        "code": "23623"
    },
    {
        "name": "Vordorf",
        "code": "38533"
    },
    {
        "name": "Rötgesbüttel",
        "code": "38531"
    },
    {
        "name": "Braunschweig",
        "code": "38108"
    },
    {
        "name": "Oberaurach",
        "code": "97514"
    },
    {
        "name": "Weihenzell",
        "code": "91629"
    },
    {
        "name": "Kissenbrück",
        "code": "38324"
    },
    {
        "name": "Wasbüttel",
        "code": "38553"
    },
    {
        "name": "Vestenbergsgreuth",
        "code": "91487"
    },
    {
        "name": "Biessenhofen",
        "code": "87640"
    },
    {
        "name": "Burgebrach",
        "code": "96138"
    },
    {
        "name": "Zella-Mehlis",
        "code": "98544"
    },
    {
        "name": "Pansdorf",
        "code": "23689"
    },
    {
        "name": "Rieden am Forggensee",
        "code": "87669"
    },
    {
        "name": "Suhl",
        "code": "98527"
    },
    {
        "name": "Harztor",
        "code": "99768"
    },
    {
        "name": "Großhabersdorf",
        "code": "90613"
    },
    {
        "name": "Suhl",
        "code": "98711"
    },
    {
        "name": "Langweid a. Lech",
        "code": "86462"
    },
    {
        "name": "Oberndorf a.Lech",
        "code": "86698"
    },
    {
        "name": "Münster",
        "code": "86692"
    },
    {
        "name": "Reichling",
        "code": "86934"
    },
    {
        "name": "Schöningen",
        "code": "38364"
    },
    {
        "name": "Holzheim",
        "code": "86684"
    },
    {
        "name": "Ilmenau",
        "code": "98694"
    },
    {
        "name": "Unterammergau",
        "code": "82497"
    },
    {
        "name": "Stadtilm, Ilmtal",
        "code": "99326"
    },
    {
        "name": "Oberammergau",
        "code": "82487"
    },
    {
        "name": "Dannenberg",
        "code": "29451"
    },
    {
        "name": "Betzdorf",
        "code": "57518"
    },
    {
        "name": "Edewecht",
        "code": "26188"
    },
    {
        "name": "Herdorf",
        "code": "57562"
    },
    {
        "name": "Garrel",
        "code": "49681"
    },
    {
        "name": "Appenweier",
        "code": "77767"
    },
    {
        "name": "Cloppenburg",
        "code": "49661"
    },
    {
        "name": "Landau in der Pfalz",
        "code": "76829"
    },
    {
        "name": "Bad Laer",
        "code": "49196"
    },
    {
        "name": "Wörth",
        "code": "76744"
    },
    {
        "name": "Ruppertsberg",
        "code": "67152"
    },
    {
        "name": "Herzebrock-Clarholz",
        "code": "33442"
    },
    {
        "name": "Ühlingen-Birkendorf",
        "code": "79777"
    },
    {
        "name": "Freudenstadt",
        "code": "72250"
    },
    {
        "name": "Hörnum (Sylt)",
        "code": "25997"
    },
    {
        "name": "Stadland",
        "code": "26937"
    },
    {
        "name": "Germersheim",
        "code": "76726"
    },
    {
        "name": "Rüsselsheim",
        "code": "65428"
    },
    {
        "name": "Ludwigshafen am Rhein",
        "code": "67067"
    },
    {
        "name": "Gütersloh",
        "code": "33330"
    },
    {
        "name": "Aichhalden",
        "code": "78733"
    },
    {
        "name": "Schlitz",
        "code": "36110"
    },
    {
        "name": "Niederaula",
        "code": "36272"
    },
    {
        "name": "Alt Duvenstedt",
        "code": "24791"
    },
    {
        "name": "Dassel",
        "code": "37586"
    },
    {
        "name": "Fahrdorf",
        "code": "24857"
    },
    {
        "name": "Schelklingen",
        "code": "89601"
    },
    {
        "name": "Göppingen",
        "code": "73033"
    },
    {
        "name": "Nieste",
        "code": "34329"
    },
    {
        "name": "Alfdorf, Schillinghof",
        "code": "73553"
    },
    {
        "name": "Kellinghusen",
        "code": "25548"
    },
    {
        "name": "Fulda",
        "code": "36039"
    },
    {
        "name": "Steimel",
        "code": "57614"
    },
    {
        "name": "Kamen",
        "code": "59174"
    },
    {
        "name": "Lauterecken u.a.",
        "code": "67742"
    },
    {
        "name": "Fürthen",
        "code": "57539"
    },
    {
        "name": "Eitelborn",
        "code": "56337"
    },
    {
        "name": "Morsbach",
        "code": "51597"
    },
    {
        "name": "Iserlohn",
        "code": "58638"
    },
    {
        "name": "Bad Ems",
        "code": "56130"
    },
    {
        "name": "Weiler bei Bingen",
        "code": "55413"
    },
    {
        "name": "Bönen",
        "code": "59199"
    },
    {
        "name": "Singhofen",
        "code": "56379"
    },
    {
        "name": "Mogendorf, Ebernhahn, Staudt u.a.",
        "code": "56424"
    },
    {
        "name": "Waldalgesheim",
        "code": "55425"
    },
    {
        "name": "Westerstede",
        "code": "26655"
    },
    {
        "name": "Weilheim i. OB",
        "code": "82362"
    },
    {
        "name": "Nürnberg",
        "code": "90409"
    },
    {
        "name": "Nürnberg",
        "code": "90478"
    },
    {
        "name": "Eching a. Ammersee",
        "code": "82279"
    },
    {
        "name": "Oschersleben (Bode)",
        "code": "39387"
    },
    {
        "name": "Nassenfels",
        "code": "85128"
    },
    {
        "name": "Haldensleben, Flechtingen, Bülstringen u.a.",
        "code": "39345"
    },
    {
        "name": "Egweil",
        "code": "85116"
    },
    {
        "name": "Sulzemoos",
        "code": "85254"
    },
    {
        "name": "Sulzemoos",
        "code": "85259"
    },
    {
        "name": "Erdweg",
        "code": "85253"
    },
    {
        "name": "Buttstädt, Großbrembach, Kleinbrembach",
        "code": "99628"
    },
    {
        "name": "Weißenbrunn",
        "code": "96369"
    },
    {
        "name": "Arnstein",
        "code": "06456"
    },
    {
        "name": "Allstedt",
        "code": "06542"
    },
    {
        "name": "Gartow",
        "code": "29471"
    },
    {
        "name": "Penzberg",
        "code": "82377"
    },
    {
        "name": "Böhmfeld",
        "code": "85113"
    },
    {
        "name": "Kaulsdorf",
        "code": "07338"
    },
    {
        "name": "Schäftlarn",
        "code": "82069"
    },
    {
        "name": "Schwerin",
        "code": "19055"
    },
    {
        "name": "Baar-Ebenhausen",
        "code": "85107"
    },
    {
        "name": "Ingolstadt",
        "code": "85053"
    },
    {
        "name": "Pommelsbrunn",
        "code": "91224"
    },
    {
        "name": "Kösching",
        "code": "85092"
    },
    {
        "name": "Schraplau, Farnstädt",
        "code": "06279"
    },
    {
        "name": "Etzelwang",
        "code": "92268"
    },
    {
        "name": "Oberdolling",
        "code": "85129"
    },
    {
        "name": "München",
        "code": "80802"
    },
    {
        "name": "München",
        "code": "81927"
    },
    {
        "name": "Hemau",
        "code": "93155"
    },
    {
        "name": "Möckern, Schermen, Nedlitz u.a.",
        "code": "39291"
    },
    {
        "name": "Gefell",
        "code": "07926"
    },
    {
        "name": "Weyarn",
        "code": "83629"
    },
    {
        "name": "Bernitt, Qualitz, Warnow, Zernin u.a.",
        "code": "18249"
    },
    {
        "name": "Hermsdorf",
        "code": "07629"
    },
    {
        "name": "Crossen, Heideland u.a.",
        "code": "07613"
    },
    {
        "name": "Pronsfeld",
        "code": "54597"
    },
    {
        "name": "Bettingen",
        "code": "54646"
    },
    {
        "name": "Düren",
        "code": "52353"
    },
    {
        "name": "Alpen",
        "code": "46519"
    },
    {
        "name": "Grevenbroich",
        "code": "41516"
    },
    {
        "name": "Krefeld",
        "code": "47800"
    },
    {
        "name": "Meerbusch",
        "code": "40668"
    },
    {
        "name": "Trier",
        "code": "54295"
    },
    {
        "name": "Frechen",
        "code": "50226"
    },
    {
        "name": "Raesfeld",
        "code": "46348"
    },
    {
        "name": "Düsseldorf",
        "code": "40479"
    },
    {
        "name": "Düsseldorf",
        "code": "40477"
    },
    {
        "name": "Bous",
        "code": "66359"
    },
    {
        "name": "Düsseldorf",
        "code": "40235"
    },
    {
        "name": "Düsseldorf",
        "code": "40597"
    },
    {
        "name": "Köln",
        "code": "50939"
    },
    {
        "name": "Bausendorf",
        "code": "54538"
    },
    {
        "name": "Bottrop",
        "code": "46238"
    },
    {
        "name": "Köln",
        "code": "50667"
    },
    {
        "name": "Thalfang",
        "code": "54424"
    },
    {
        "name": "Lutzerath",
        "code": "56826"
    },
    {
        "name": "Gusenburg",
        "code": "54413"
    },
    {
        "name": "Grafschaft",
        "code": "53501"
    },
    {
        "name": "Velbert",
        "code": "42549"
    },
    {
        "name": "Bad Bertrich",
        "code": "56864"
    },
    {
        "name": "Marl",
        "code": "45768"
    },
    {
        "name": "Freiburg im Breisgau",
        "code": "79115"
    },
    {
        "name": "Nastätten u.a.",
        "code": "56355"
    },
    {
        "name": "Schwarzengraben, St. Alban, Gerbach",
        "code": "67813"
    },
    {
        "name": "Wehr",
        "code": "79664"
    },
    {
        "name": "Lotte",
        "code": "49504"
    },
    {
        "name": "Emmerzhausen, Niederdreisbach, Steinebach",
        "code": "57520"
    },
    {
        "name": "Offenburg",
        "code": "77652"
    },
    {
        "name": "Herrischried",
        "code": "79737"
    },
    {
        "name": "Berghaupten",
        "code": "77791"
    },
    {
        "name": "Bad Schwalbach",
        "code": "65307"
    },
    {
        "name": "Elzach, Biederbach",
        "code": "79215"
    },
    {
        "name": "Winden im Elztal",
        "code": "79297"
    },
    {
        "name": "Oberrod u.a.",
        "code": "56479"
    },
    {
        "name": "Frankweiler",
        "code": "76833"
    },
    {
        "name": "Rhodt u.a.",
        "code": "76835"
    },
    {
        "name": "Dinklage",
        "code": "49413"
    },
    {
        "name": "Halver",
        "code": "58553"
    },
    {
        "name": "Neuwied",
        "code": "56564"
    },
    {
        "name": "Hagen",
        "code": "58095"
    },
    {
        "name": "Simmertal",
        "code": "55618"
    },
    {
        "name": "Dortmund",
        "code": "44328"
    },
    {
        "name": "Bad Bellingen",
        "code": "79415"
    },
    {
        "name": "Hagen",
        "code": "58119"
    },
    {
        "name": "Riesweiler",
        "code": "55499"
    },
    {
        "name": "Werne",
        "code": "59368"
    },
    {
        "name": "Neitersen",
        "code": "57638"
    },
    {
        "name": "Saerbeck",
        "code": "48369"
    },
    {
        "name": "Neustadt an der Weinstraße",
        "code": "67433"
    },
    {
        "name": "Insheim",
        "code": "76865"
    },
    {
        "name": "Berg",
        "code": "76768"
    },
    {
        "name": "Hatzenbühl",
        "code": "76770"
    },
    {
        "name": "Hatten",
        "code": "26209"
    },
    {
        "name": "Weisenheim am Sand",
        "code": "67256"
    },
    {
        "name": "Hillesheim",
        "code": "67586"
    },
    {
        "name": "Bad Laasphe",
        "code": "57334"
    },
    {
        "name": "Rülzheim",
        "code": "76761"
    },
    {
        "name": "Eschenburg",
        "code": "35713"
    },
    {
        "name": "Nackenheim",
        "code": "55299"
    },
    {
        "name": "Hochheim am Main",
        "code": "65239"
    },
    {
        "name": "Lippstadt",
        "code": "59558"
    },
    {
        "name": "Ludwigshafen am Rhein",
        "code": "67069"
    },
    {
        "name": "Bad Herrenalb",
        "code": "76332"
    },
    {
        "name": "Hamdorf",
        "code": "24805"
    },
    {
        "name": "Breitenbach am Herzberg",
        "code": "36287"
    },
    {
        "name": "Sulzbach an der Murr",
        "code": "71560"
    },
    {
        "name": "Lichtenwald",
        "code": "73669"
    },
    {
        "name": "Grünendeich",
        "code": "21720"
    },
    {
        "name": "Göppingen",
        "code": "73035"
    },
    {
        "name": "Neubrunn",
        "code": "97277"
    },
    {
        "name": "Fleckeby u.a.",
        "code": "24357"
    },
    {
        "name": "Langenhagen",
        "code": "30855"
    },
    {
        "name": "Essen",
        "code": "45289"
    },
    {
        "name": "Spiesen-Elversberg",
        "code": "66583"
    },
    {
        "name": "Bonn",
        "code": "53227"
    },
    {
        "name": "Wuppertal",
        "code": "42109"
    },
    {
        "name": "Herne",
        "code": "44652"
    },
    {
        "name": "Blieskastel",
        "code": "66440"
    },
    {
        "name": "Emden",
        "code": "26721"
    },
    {
        "name": "Neunkirchen",
        "code": "66539"
    },
    {
        "name": "Recklinghausen",
        "code": "45663"
    },
    {
        "name": "Bexbach",
        "code": "66450"
    },
    {
        "name": "Blankenrath u.a.",
        "code": "56865"
    },
    {
        "name": "Bochum",
        "code": "44805"
    },
    {
        "name": "Beltheim",
        "code": "56290"
    },
    {
        "name": "Herschweiler-Pettersheim",
        "code": "66909"
    },
    {
        "name": "Angelburg",
        "code": "35719"
    },
    {
        "name": "Villingen-Schwenningen",
        "code": "78050"
    },
    {
        "name": "Fluorn-Winzeln",
        "code": "78737"
    },
    {
        "name": "Winterberg",
        "code": "59955"
    },
    {
        "name": "Frankfurt am Main",
        "code": "65931"
    },
    {
        "name": "Waghäusel",
        "code": "68753"
    },
    {
        "name": "Hüttenberg",
        "code": "35625"
    },
    {
        "name": "Enger",
        "code": "32130"
    },
    {
        "name": "Ilvesheim",
        "code": "68549"
    },
    {
        "name": "Steinbach (Taunus)",
        "code": "61449"
    },
    {
        "name": "Cuxhaven",
        "code": "27476"
    },
    {
        "name": "Schloß Holte-Stukenbrock",
        "code": "33758"
    },
    {
        "name": "Bickenbach",
        "code": "64404"
    },
    {
        "name": "Forst",
        "code": "76694"
    },
    {
        "name": "Bad Schönborn",
        "code": "76669"
    },
    {
        "name": "Löhne",
        "code": "32584"
    },
    {
        "name": "Pforzheim",
        "code": "75172"
    },
    {
        "name": "Gießen",
        "code": "35396"
    },
    {
        "name": "Delmenhorst",
        "code": "27755"
    },
    {
        "name": "Augustdorf",
        "code": "32832"
    },
    {
        "name": "Wanna",
        "code": "21776"
    },
    {
        "name": "Gaiberg",
        "code": "69251"
    },
    {
        "name": "Schlangen",
        "code": "33189"
    },
    {
        "name": "Deilingen",
        "code": "78586"
    },
    {
        "name": "Grasellenbach",
        "code": "64689"
    },
    {
        "name": "Lobbach",
        "code": "74931"
    },
    {
        "name": "Amöneburg",
        "code": "35287"
    },
    {
        "name": "Altdorf",
        "code": "71155"
    },
    {
        "name": "Ahrenshöft",
        "code": "25853"
    },
    {
        "name": "Großostheim",
        "code": "63762"
    },
    {
        "name": "Horstedt",
        "code": "25860"
    },
    {
        "name": "Jesberg",
        "code": "34632"
    },
    {
        "name": "Gründau",
        "code": "63584"
    },
    {
        "name": "Überlingen",
        "code": "88662"
    },
    {
        "name": "Wörth a.Main",
        "code": "63939"
    },
    {
        "name": "Rantrum",
        "code": "25873"
    },
    {
        "name": "Aschaffenburg",
        "code": "63739"
    },
    {
        "name": "Gedern",
        "code": "63688"
    },
    {
        "name": "Willingshausen",
        "code": "34628"
    },
    {
        "name": "Gemmrigheim",
        "code": "74376"
    },
    {
        "name": "Linsengericht",
        "code": "63589"
    },
    {
        "name": "Stuttgart",
        "code": "70176"
    },
    {
        "name": "Hechthausen",
        "code": "21755"
    },
    {
        "name": "Reutlingen",
        "code": "72762"
    },
    {
        "name": "Stuttgart/Leinfelden-Echterdingen",
        "code": "70629"
    },
    {
        "name": "Leidersbach",
        "code": "63849"
    },
    {
        "name": "Heilbronn",
        "code": "74076"
    },
    {
        "name": "Bad Emstal",
        "code": "34308"
    },
    {
        "name": "Frickingen",
        "code": "88699"
    },
    {
        "name": "Reutlingen",
        "code": "72766"
    },
    {
        "name": "Stuttgart",
        "code": "70374"
    },
    {
        "name": "Remseck am Neckar",
        "code": "71686"
    },
    {
        "name": "Wischhafen",
        "code": "21737"
    },
    {
        "name": "Hagenburg",
        "code": "31558"
    },
    {
        "name": "Kirchlinteln",
        "code": "27308"
    },
    {
        "name": "Abstatt",
        "code": "74232"
    },
    {
        "name": "Treia, Ahrenviölfeld",
        "code": "24896"
    },
    {
        "name": "Habichtswald",
        "code": "34317"
    },
    {
        "name": "Beilstein",
        "code": "71717"
    },
    {
        "name": "Kohlberg",
        "code": "72664"
    },
    {
        "name": "Rethem (Aller), Häuslingen, Frankenfeld",
        "code": "27336"
    },
    {
        "name": "Schwaikheim",
        "code": "71409"
    },
    {
        "name": "Ahlerstedt",
        "code": "21702"
    },
    {
        "name": "Bad Saulgau, Allmannsweiler",
        "code": "88348"
    },
    {
        "name": "Königseggwald",
        "code": "88376"
    },
    {
        "name": "Rodewald",
        "code": "31637"
    },
    {
        "name": "Wartenberg",
        "code": "36367"
    },
    {
        "name": "Hoßkirch",
        "code": "88374"
    },
    {
        "name": "Ebnath",
        "code": "95683"
    },
    {
        "name": "Oberaudorf",
        "code": "83080"
    },
    {
        "name": "Gumtow, Kyritz u.a.",
        "code": "16866"
    },
    {
        "name": "Plauen",
        "code": "08523"
    },
    {
        "name": "Windischeschenbach",
        "code": "92670"
    },
    {
        "name": "Söchtenau",
        "code": "83139"
    },
    {
        "name": "Adlkofen",
        "code": "84166"
    },
    {
        "name": "Dessau-Roßlau",
        "code": "06842"
    },
    {
        "name": "Waldsassen",
        "code": "95652"
    },
    {
        "name": "Bad Endorf",
        "code": "83093"
    },
    {
        "name": "Bitterfeld-Wolfen",
        "code": "06803"
    },
    {
        "name": "Bitterfeld-Wolfen",
        "code": "06808"
    },
    {
        "name": "Nossentiner Hütte",
        "code": "17214"
    },
    {
        "name": "Neukirchen/Pleiße",
        "code": "08459"
    },
    {
        "name": "Leipzig",
        "code": "04277"
    },
    {
        "name": "Neualbenreuth",
        "code": "95698"
    },
    {
        "name": "Muldenhammer",
        "code": "08262"
    },
    {
        "name": "Aholfing",
        "code": "94345"
    },
    {
        "name": "Stamsried",
        "code": "93491"
    },
    {
        "name": "Stützengrün",
        "code": "08328"
    },
    {
        "name": "Frontenhausen",
        "code": "84160"
    },
    {
        "name": "Eibenstock",
        "code": "08309"
    },
    {
        "name": "Waldenburg",
        "code": "08396"
    },
    {
        "name": "Waren/ Müritz",
        "code": "17192"
    },
    {
        "name": "Wurzen",
        "code": "04808"
    },
    {
        "name": "Fehrbellin",
        "code": "16833"
    },
    {
        "name": "Halsbach",
        "code": "84553"
    },
    {
        "name": "Wallersdorf",
        "code": "94522"
    },
    {
        "name": "Runding",
        "code": "93486"
    },
    {
        "name": "Niederwinkling",
        "code": "94559"
    },
    {
        "name": "Grünhain-Beierfeld",
        "code": "08344"
    },
    {
        "name": "Neuruppin",
        "code": "16827"
    },
    {
        "name": "Grafenwiesen",
        "code": "93479"
    },
    {
        "name": "Julbach",
        "code": "84387"
    },
    {
        "name": "Potsdam",
        "code": "14469"
    },
    {
        "name": "Drebach",
        "code": "09430"
    },
    {
        "name": "Großrückerswalde",
        "code": "09518"
    },
    {
        "name": "Gingst",
        "code": "18569"
    },
    {
        "name": "Berlin Hakenfelde",
        "code": "13587"
    },
    {
        "name": "Hennigsdorf",
        "code": "16761"
    },
    {
        "name": "Lommatzsch",
        "code": "01623"
    },
    {
        "name": "Riesa",
        "code": "01589"
    },
    {
        "name": "Halsbrücke",
        "code": "09633"
    },
    {
        "name": "Tittling",
        "code": "94104"
    },
    {
        "name": "Rosengarten",
        "code": "74538"
    },
    {
        "name": "Witzenhausen",
        "code": "37217"
    },
    {
        "name": "Hannover",
        "code": "30169"
    },
    {
        "name": "Berghülen",
        "code": "89180"
    },
    {
        "name": "Motten",
        "code": "97786"
    },
    {
        "name": "Bad Bramstedt",
        "code": "24576"
    },
    {
        "name": "Isernhagen",
        "code": "30916"
    },
    {
        "name": "Hamburg",
        "code": "22609"
    },
    {
        "name": "Loose",
        "code": "24366"
    },
    {
        "name": "Riedenberg",
        "code": "97792"
    },
    {
        "name": "Bühlerzell",
        "code": "74426"
    },
    {
        "name": "Hamburg",
        "code": "22769"
    },
    {
        "name": "Hildesheim",
        "code": "31141"
    },
    {
        "name": "Bieberehren",
        "code": "97243"
    },
    {
        "name": "Melsdorf",
        "code": "24109"
    },
    {
        "name": "Norderstedt",
        "code": "22851"
    },
    {
        "name": "Großharrie",
        "code": "24625"
    },
    {
        "name": "Jagstzell",
        "code": "73489"
    },
    {
        "name": "Krayenberggemeinde, Frauensee",
        "code": "36460"
    },
    {
        "name": "Toppenstedt",
        "code": "21442"
    },
    {
        "name": "Heidenheim an der Brenz",
        "code": "89518"
    },
    {
        "name": "Hamburg",
        "code": "22117"
    },
    {
        "name": "Kellmünz a.d. Iller",
        "code": "89293"
    },
    {
        "name": "Bastheim",
        "code": "97654"
    },
    {
        "name": "Lahstedt",
        "code": "31246"
    },
    {
        "name": "Kiel",
        "code": "24146"
    },
    {
        "name": "Hattorf",
        "code": "37197"
    },
    {
        "name": "Dittelbrunn",
        "code": "97456"
    },
    {
        "name": "Üchtelhausen",
        "code": "97532"
    },
    {
        "name": "Günzburg",
        "code": "89312"
    },
    {
        "name": "Lauben",
        "code": "87761"
    },
    {
        "name": "Langlingen",
        "code": "29364"
    },
    {
        "name": "Westerheim",
        "code": "87784"
    },
    {
        "name": "Nehms",
        "code": "23813"
    },
    {
        "name": "Deisenhausen",
        "code": "86489"
    },
    {
        "name": "Sulzheim",
        "code": "97529"
    },
    {
        "name": "Bad Liebenstein",
        "code": "36448"
    },
    {
        "name": "Hamfelde, Kasseburg, Köthel, Rausdorf, Schönberg",
        "code": "22929"
    },
    {
        "name": "Wutha-Farnroda",
        "code": "99848"
    },
    {
        "name": "Lasbek",
        "code": "23847"
    },
    {
        "name": "Kirchheim am Ries",
        "code": "73467"
    },
    {
        "name": "Burtenbach",
        "code": "89349"
    },
    {
        "name": "Lütjenburg",
        "code": "24321"
    },
    {
        "name": "Unterthingau",
        "code": "87647"
    },
    {
        "name": "Pronstorf",
        "code": "23820"
    },
    {
        "name": "Scharnebeck, Echem, Lüdersburg, Rullstorf",
        "code": "21379"
    },
    {
        "name": "Tabarz/ Thür. Wald",
        "code": "99891"
    },
    {
        "name": "Lengenwang",
        "code": "87663"
    },
    {
        "name": "Bidingen",
        "code": "87651"
    },
    {
        "name": "Ziethen",
        "code": "23911"
    },
    {
        "name": "Höchstadt a.d.Aisch",
        "code": "91315"
    },
    {
        "name": "Oberharz am Brocken",
        "code": "38899"
    },
    {
        "name": "Hurlach",
        "code": "86857"
    },
    {
        "name": "Rattelsdorf",
        "code": "96179"
    },
    {
        "name": "Augsburg",
        "code": "86157"
    },
    {
        "name": "Scheuring",
        "code": "86937"
    },
    {
        "name": "Erfurt",
        "code": "99092"
    },
    {
        "name": "Augsburg",
        "code": "86154"
    },
    {
        "name": "Ebensfeld",
        "code": "96250"
    },
    {
        "name": "Bamberg",
        "code": "96050"
    },
    {
        "name": "Tagmersheim",
        "code": "86704"
    },
    {
        "name": "Katzhütte",
        "code": "98746"
    },
    {
        "name": "Erfurt",
        "code": "99097"
    },
    {
        "name": "Sömmerda",
        "code": "99610"
    },
    {
        "name": "Hartheim",
        "code": "79258"
    },
    {
        "name": "Wolfstein",
        "code": "67752"
    },
    {
        "name": "Lüdenscheid",
        "code": "58511"
    },
    {
        "name": "Bacharach, Breitscheid",
        "code": "55422"
    },
    {
        "name": "Stromberg",
        "code": "55442"
    },
    {
        "name": "Bahlingen am Kaiserstuhl",
        "code": "79353"
    },
    {
        "name": "Nußbach",
        "code": "67759"
    },
    {
        "name": "Berlin Lichtenberg",
        "code": "10367"
    },
    {
        "name": "Sassnitz",
        "code": "18546"
    },
    {
        "name": "Grainet",
        "code": "94143"
    },
    {
        "name": "Altenberg",
        "code": "01773"
    },
    {
        "name": "Altenberg",
        "code": "01778"
    },
    {
        "name": "Karlshagen",
        "code": "17449"
    },
    {
        "name": "Lübbenau/ Spreewald",
        "code": "03222"
    },
    {
        "name": "Zeschdorf, Podelzig, Lebus",
        "code": "15326"
    },
    {
        "name": "Briesen, Rauen u.a.",
        "code": "15518"
    },
    {
        "name": "Großschönau",
        "code": "02799"
    },
    {
        "name": "Krauschwitz, Weißkeißel",
        "code": "02957"
    },
    {
        "name": "Jonsdorf",
        "code": "02796"
    },
    {
        "name": "Hutthurm",
        "code": "94116"
    },
    {
        "name": "Coswig",
        "code": "01640"
    },
    {
        "name": "Mauth",
        "code": "94151"
    },
    {
        "name": "Untergriesbach",
        "code": "94107"
    },
    {
        "name": "Rabenau",
        "code": "01734"
    },
    {
        "name": "Uckerland, Groß Luckow, Schönhausen",
        "code": "17337"
    },
    {
        "name": "Strasburg",
        "code": "17335"
    },
    {
        "name": "Pasewalk u.a.",
        "code": "17309"
    },
    {
        "name": "Lichtenow, Altlandsberg u.a.",
        "code": "15345"
    },
    {
        "name": "Koserow",
        "code": "17459"
    },
    {
        "name": "Arnsdorf b. Dresden",
        "code": "01477"
    },
    {
        "name": "Harsewinkel",
        "code": "33428"
    },
    {
        "name": "Gütenbach",
        "code": "78148"
    },
    {
        "name": "Budenheim",
        "code": "55257"
    },
    {
        "name": "Baden-Baden",
        "code": "76530"
    },
    {
        "name": "Oldenburg (Oldenburg)",
        "code": "26125"
    },
    {
        "name": "Amrum",
        "code": "25946"
    },
    {
        "name": "Karlsruhe",
        "code": "76187"
    },
    {
        "name": "Alpirsbach",
        "code": "72275"
    },
    {
        "name": "Königsfeld im Schwarzwald",
        "code": "78126"
    },
    {
        "name": "Unterkirnach",
        "code": "78089"
    },
    {
        "name": "Speyer",
        "code": "67346"
    },
    {
        "name": "Philippsburg",
        "code": "76661"
    },
    {
        "name": "Schönau im Schwarzwald",
        "code": "79677"
    },
    {
        "name": "Willstätt",
        "code": "77731"
    },
    {
        "name": "Denzlingen",
        "code": "79211"
    },
    {
        "name": "Hochspeyer",
        "code": "67691"
    },
    {
        "name": "Freiburg im Breisgau",
        "code": "79106"
    },
    {
        "name": "Helgoland",
        "code": "27498"
    },
    {
        "name": "Frankenstein, Neidenfels, Frankeneck",
        "code": "67468"
    },
    {
        "name": "Ingelheim am Rhein",
        "code": "55218"
    },
    {
        "name": "Weisenheim am Berg",
        "code": "67273"
    },
    {
        "name": "Beelen",
        "code": "48361"
    },
    {
        "name": "Kamenz",
        "code": "01917"
    },
    {
        "name": "Krackow, Nadrensee",
        "code": "17329"
    },
    {
        "name": "Cottbus",
        "code": "03048"
    },
    {
        "name": "Treplin, Jacobsdorf, Frankfurt (Oder)",
        "code": "15236"
    },
    {
        "name": "Cottbus",
        "code": "03052"
    },
    {
        "name": "Markersdorf, Neißeaue u.a.",
        "code": "02829"
    },
    {
        "name": "Görlitz",
        "code": "02826"
    },
    {
        "name": "Jetzendorf",
        "code": "85305"
    },
    {
        "name": "Gräfelfing",
        "code": "82166"
    },
    {
        "name": "Querfurt, Obhausen, Mücheln u.a.",
        "code": "06268"
    },
    {
        "name": "Schwerin",
        "code": "19063"
    },
    {
        "name": "Sülzetal",
        "code": "39171"
    },
    {
        "name": "Bad Sulza",
        "code": "99518"
    },
    {
        "name": "Seegebiet Mansfelder Land",
        "code": "06317"
    },
    {
        "name": "München",
        "code": "81539"
    },
    {
        "name": "München",
        "code": "80939"
    },
    {
        "name": "Freising",
        "code": "85354"
    },
    {
        "name": "Edelsfeld",
        "code": "92265"
    },
    {
        "name": "Naumburg",
        "code": "06618"
    },
    {
        "name": "Kelheim",
        "code": "93309"
    },
    {
        "name": "Hohenburg",
        "code": "92277"
    },
    {
        "name": "Magdeburg",
        "code": "39114"
    },
    {
        "name": "Hohenfels",
        "code": "92366"
    },
    {
        "name": "Poing",
        "code": "85586"
    },
    {
        "name": "Ebersberg",
        "code": "85560"
    },
    {
        "name": "Weißenstadt",
        "code": "95163"
    },
    {
        "name": "Peterswald-Löffelscheid u.a.",
        "code": "56858"
    },
    {
        "name": "Lüdinghausen",
        "code": "59348"
    },
    {
        "name": "Laer",
        "code": "48366"
    },
    {
        "name": "Beltheim",
        "code": "56290"
    },
    {
        "name": "Schönenberg-Kübelberg",
        "code": "66901"
    },
    {
        "name": "Neuenkirchen",
        "code": "48485"
    },
    {
        "name": "Ochtendung",
        "code": "56299"
    },
    {
        "name": "Witten",
        "code": "58454"
    },
    {
        "name": "Altenkirchen",
        "code": "66903"
    },
    {
        "name": "Kirn",
        "code": "55606"
    },
    {
        "name": "Essen",
        "code": "45279"
    },
    {
        "name": "Wietmarschen",
        "code": "49835"
    },
    {
        "name": "Gelsenkirchen",
        "code": "45886"
    },
    {
        "name": "Zell (Mosel)",
        "code": "56856"
    },
    {
        "name": "Remscheid",
        "code": "42853"
    },
    {
        "name": "Wuppertal",
        "code": "42283"
    },
    {
        "name": "Bad Honnef",
        "code": "53604"
    },
    {
        "name": "Altenglan",
        "code": "66885"
    },
    {
        "name": "Senden",
        "code": "48308"
    },
    {
        "name": "Dortmund",
        "code": "44135"
    },
    {
        "name": "Efringen-Kirchen",
        "code": "79588"
    },
    {
        "name": "Monzingen",
        "code": "55569"
    },
    {
        "name": "Heroldsberg",
        "code": "90562"
    },
    {
        "name": "Wustrow",
        "code": "29462"
    },
    {
        "name": "Erfurt",
        "code": "99098"
    },
    {
        "name": "Königsfeld",
        "code": "96167"
    },
    {
        "name": "Nürnberg",
        "code": "90475"
    },
    {
        "name": "Burgkunstadt",
        "code": "96224"
    },
    {
        "name": "Schwarzenbruck",
        "code": "90592"
    },
    {
        "name": "Gräfenthal",
        "code": "98743"
    },
    {
        "name": "Tettau",
        "code": "96355"
    },
    {
        "name": "Großweil",
        "code": "82439"
    },
    {
        "name": "Gauting",
        "code": "82131"
    },
    {
        "name": "Brunnen",
        "code": "86564"
    },
    {
        "name": "Münsing",
        "code": "82541"
    },
    {
        "name": "Obersüßbach",
        "code": "84101"
    },
    {
        "name": "Merseburg",
        "code": "06217"
    },
    {
        "name": "Triglitz, Putlitz",
        "code": "16949"
    },
    {
        "name": "Wunsiedel",
        "code": "95632"
    },
    {
        "name": "Halle/ Saale",
        "code": "06108"
    },
    {
        "name": "Furth",
        "code": "84095"
    },
    {
        "name": "Mantel",
        "code": "92708"
    },
    {
        "name": "Havelberg",
        "code": "39539"
    },
    {
        "name": "Greiz",
        "code": "07973"
    },
    {
        "name": "Hohenpolding",
        "code": "84432"
    },
    {
        "name": "Berga/Elster",
        "code": "07980"
    },
    {
        "name": "Pfreimd",
        "code": "92536"
    },
    {
        "name": "Markranstädt",
        "code": "04420"
    },
    {
        "name": "Krakow, Dobbin-Linstow u.a.",
        "code": "18292"
    },
    {
        "name": "Alteglofsheim",
        "code": "93087"
    },
    {
        "name": "Pfakofen",
        "code": "93101"
    },
    {
        "name": "Leipzig",
        "code": "04109"
    },
    {
        "name": "Atting",
        "code": "94348"
    },
    {
        "name": "Marklkofen",
        "code": "84163"
    },
    {
        "name": "Wiesenfelden",
        "code": "94344"
    },
    {
        "name": "Glauchau",
        "code": "08371"
    },
    {
        "name": "Kitzscher",
        "code": "04567"
    },
    {
        "name": "Tiefenbach",
        "code": "93464"
    },
    {
        "name": "Bad Lausick",
        "code": "04651"
    },
    {
        "name": "Siegsdorf",
        "code": "83313"
    },
    {
        "name": "Bennewitz, Machern",
        "code": "04828"
    },
    {
        "name": "Trebsen/Mulde",
        "code": "04687"
    },
    {
        "name": "Malgersdorf",
        "code": "84333"
    },
    {
        "name": "Ketzin",
        "code": "14669"
    },
    {
        "name": "Prackenbach",
        "code": "94267"
    },
    {
        "name": "Annaburg",
        "code": "06925"
    },
    {
        "name": "Laufen",
        "code": "83410"
    },
    {
        "name": "Berchtesgaden & Schönau",
        "code": "83471"
    },
    {
        "name": "Gransee, Löwenberg",
        "code": "16775"
    },
    {
        "name": "Niederalteich",
        "code": "94557"
    },
    {
        "name": "Oschatz",
        "code": "04758"
    },
    {
        "name": "Potsdam",
        "code": "14467"
    },
    {
        "name": "Gingst",
        "code": "18569"
    },
    {
        "name": "Berlin Westend",
        "code": "14055"
    },
    {
        "name": "Neubrandenburg",
        "code": "17034"
    },
    {
        "name": "Berlin Wilmersdorf",
        "code": "10777"
    },
    {
        "name": "Berlin-West",
        "code": "13407"
    },
    {
        "name": "Berlin Blankenfelde",
        "code": "13159"
    },
    {
        "name": "Berlin Prenzlauer Berg",
        "code": "10435"
    },
    {
        "name": "Sagard",
        "code": "18551"
    },
    {
        "name": "Aßlar",
        "code": "35614"
    },
    {
        "name": "Mannheim",
        "code": "68307"
    },
    {
        "name": "Brake",
        "code": "26919"
    },
    {
        "name": "Mannheim",
        "code": "68169"
    },
    {
        "name": "Liederbach am Taunus",
        "code": "65835"
    },
    {
        "name": "Butzbach",
        "code": "35510"
    },
    {
        "name": "Espelkamp",
        "code": "32339"
    },
    {
        "name": "Bielefeld",
        "code": "33609"
    },
    {
        "name": "Sulz am Neckar",
        "code": "72172"
    },
    {
        "name": "Zwingenberg",
        "code": "64673"
    },
    {
        "name": "Kirchlengern",
        "code": "32278"
    },
    {
        "name": "Dossenheim",
        "code": "69221"
    },
    {
        "name": "Pforzheim",
        "code": "75180"
    },
    {
        "name": "Bremen",
        "code": "28197"
    },
    {
        "name": "Gießen",
        "code": "35390"
    },
    {
        "name": "Frankfurt am Main",
        "code": "60322"
    },
    {
        "name": "Heppenheim (Bergstraße)",
        "code": "64646"
    },
    {
        "name": "Mühlhausen",
        "code": "69242"
    },
    {
        "name": "Bremen",
        "code": "28259"
    },
    {
        "name": "Ölbronn-Dürrn",
        "code": "75248"
    },
    {
        "name": "Schömberg",
        "code": "72355"
    },
    {
        "name": "Syke",
        "code": "28857"
    },
    {
        "name": "Althengstett",
        "code": "75382"
    },
    {
        "name": "Bammental",
        "code": "69245"
    },
    {
        "name": "Wilhelmsfeld",
        "code": "69259"
    },
    {
        "name": "Fränkisch-Crumbach",
        "code": "64407"
    },
    {
        "name": "Minden",
        "code": "32425"
    },
    {
        "name": "Wohratal",
        "code": "35288"
    },
    {
        "name": "Nidda",
        "code": "63667"
    },
    {
        "name": "Hattstedt u.a.",
        "code": "25856"
    },
    {
        "name": "Gemmingen",
        "code": "75050"
    },
    {
        "name": "Stolzenau",
        "code": "31592"
    },
    {
        "name": "Neuberg",
        "code": "63543"
    },
    {
        "name": "Kirchardt",
        "code": "74912"
    },
    {
        "name": "Tübingen",
        "code": "72076"
    },
    {
        "name": "Volkmarsen",
        "code": "34471"
    },
    {
        "name": "Mömlingen",
        "code": "63853"
    },
    {
        "name": "Heilbronn",
        "code": "74078"
    },
    {
        "name": "Obernburg a.Main",
        "code": "63785"
    },
    {
        "name": "Wald",
        "code": "88639"
    },
    {
        "name": "Bad Wimpfen",
        "code": "74206"
    },
    {
        "name": "Lauffen am Neckar",
        "code": "74348"
    },
    {
        "name": "Wannweil",
        "code": "72827"
    },
    {
        "name": "Burg (Dithmarschen)",
        "code": "25712"
    },
    {
        "name": "Neckarsulm",
        "code": "74172"
    },
    {
        "name": "Heilbronn",
        "code": "74074"
    },
    {
        "name": "Auhagen, Sachsenhagen",
        "code": "31553"
    },
    {
        "name": "Stuttgart",
        "code": "70372"
    },
    {
        "name": "Seckach",
        "code": "74743"
    },
    {
        "name": "Großbettlingen",
        "code": "72663"
    },
    {
        "name": "Holstenniendorf",
        "code": "25584"
    },
    {
        "name": "Schneeberg",
        "code": "63936"
    },
    {
        "name": "Beuren",
        "code": "72660"
    },
    {
        "name": "Meggerdorf, Friedrichsholm, Friedrichsgraben u.a.",
        "code": "24799"
    },
    {
        "name": "Hohnstorf (Elbe), Hittbergen",
        "code": "21522"
    },
    {
        "name": "Braunschweig",
        "code": "38100"
    },
    {
        "name": "Leinatal",
        "code": "99894"
    },
    {
        "name": "Irsee",
        "code": "87660"
    },
    {
        "name": "Walkertshofen",
        "code": "86877"
    },
    {
        "name": "Hildburghausen",
        "code": "98646"
    },
    {
        "name": "Blindheim",
        "code": "89434"
    },
    {
        "name": "Oberharz am Brocken",
        "code": "38875"
    },
    {
        "name": "Wolfsburg",
        "code": "38442"
    },
    {
        "name": "Pfarrweisach",
        "code": "96176"
    },
    {
        "name": "Oldenburg in Holstein",
        "code": "23758"
    },
    {
        "name": "Rosche",
        "code": "29571"
    },
    {
        "name": "Schönberg",
        "code": "23923"
    },
    {
        "name": "Prem",
        "code": "86984"
    },
    {
        "name": "Asbach-Bäumenheim",
        "code": "86663"
    },
    {
        "name": "Gremsdorf",
        "code": "91350"
    },
    {
        "name": "Ilmenau",
        "code": "98694"
    },
    {
        "name": "Gebesee",
        "code": "99189"
    },
    {
        "name": "Schwifting",
        "code": "86940"
    },
    {
        "name": "Röttenbach",
        "code": "91341"
    },
    {
        "name": "Böbing",
        "code": "82389"
    },
    {
        "name": "Rottenbuch",
        "code": "82401"
    },
    {
        "name": "Altendorf",
        "code": "96146"
    },
    {
        "name": "Neukirchen",
        "code": "23779"
    },
    {
        "name": "Grevesmühlen, Stepenitztal, Upahl u.a.",
        "code": "23936"
    },
    {
        "name": "Nürnberg",
        "code": "90427"
    },
    {
        "name": "Luckau (Wendland)",
        "code": "29487"
    },
    {
        "name": "Fehmarn",
        "code": "23769"
    },
    {
        "name": "Erfurt",
        "code": "99084"
    },
    {
        "name": "Erfurt",
        "code": "99086"
    },
    {
        "name": "Weil am Rhein",
        "code": "79576"
    },
    {
        "name": "Lemberg",
        "code": "66969"
    },
    {
        "name": "Lahnstein",
        "code": "56112"
    },
    {
        "name": "Filsum",
        "code": "26849"
    },
    {
        "name": "Münster",
        "code": "48165"
    },
    {
        "name": "Koblenz",
        "code": "56077"
    },
    {
        "name": "Rümmingen",
        "code": "79595"
    },
    {
        "name": "Unna",
        "code": "59427"
    },
    {
        "name": "Meisenheim",
        "code": "55590"
    },
    {
        "name": "Badenweiler",
        "code": "79410"
    },
    {
        "name": "Hillscheid",
        "code": "56204"
    },
    {
        "name": "Selters (Westerwald)",
        "code": "56242"
    },
    {
        "name": "Kleines Wiesental",
        "code": "79692"
    },
    {
        "name": "Balve",
        "code": "58802"
    },
    {
        "name": "Vörstetten",
        "code": "79279"
    },
    {
        "name": "Schlat",
        "code": "73114"
    },
    {
        "name": "Brokstedt",
        "code": "24616"
    },
    {
        "name": "Laatzen",
        "code": "30880"
    },
    {
        "name": "Waldkappel",
        "code": "37284"
    },
    {
        "name": "Blaustein",
        "code": "89134"
    },
    {
        "name": "Amstetten",
        "code": "73340"
    },
    {
        "name": "Damp",
        "code": "24351"
    },
    {
        "name": "Achstetten",
        "code": "88480"
    },
    {
        "name": "Nörten-Hardenberg",
        "code": "37176"
    },
    {
        "name": "Hamburg",
        "code": "21075"
    },
    {
        "name": "Henstedt-Ulzburg",
        "code": "24558"
    },
    {
        "name": "Altheim (Alb)",
        "code": "89174"
    },
    {
        "name": "Illerkirchberg",
        "code": "89171"
    },
    {
        "name": "Königsbronn",
        "code": "89551"
    },
    {
        "name": "Missen-Wilhams",
        "code": "87547"
    },
    {
        "name": "Bark",
        "code": "23826"
    },
    {
        "name": "Kiel",
        "code": "24118"
    },
    {
        "name": "Neusitz",
        "code": "91616"
    },
    {
        "name": "Reinbek",
        "code": "21465"
    },
    {
        "name": "Langelsheim",
        "code": "38685"
    },
    {
        "name": "Burgbernheim",
        "code": "91593"
    },
    {
        "name": "Medlingen",
        "code": "89441"
    },
    {
        "name": "Lülsfeld",
        "code": "97511"
    },
    {
        "name": "Gundremmingen",
        "code": "89355"
    },
    {
        "name": "Aachen",
        "code": "52068"
    },
    {
        "name": "Aachen",
        "code": "52080"
    },
    {
        "name": "Hallschlag",
        "code": "54611"
    },
    {
        "name": "Krefeld",
        "code": "47807"
    },
    {
        "name": "Krefeld",
        "code": "47798"
    },
    {
        "name": "Meerbusch",
        "code": "40667"
    },
    {
        "name": "Neuss",
        "code": "41460"
    },
    {
        "name": "Bad Münstereifel",
        "code": "53902"
    },
    {
        "name": "Südlohn",
        "code": "46354"
    },
    {
        "name": "Wilsum",
        "code": "49849"
    },
    {
        "name": "Düsseldorf",
        "code": "40217"
    },
    {
        "name": "Düsseldorf",
        "code": "40212"
    },
    {
        "name": "Köln",
        "code": "50935"
    },
    {
        "name": "Rheinbach",
        "code": "53359"
    },
    {
        "name": "Bottrop",
        "code": "46240"
    },
    {
        "name": "Gladbeck",
        "code": "45964"
    },
    {
        "name": "Saarbrücken",
        "code": "66111"
    },
    {
        "name": "Leverkusen",
        "code": "51381"
    },
    {
        "name": "Traben-Trarbach",
        "code": "56841"
    },
    {
        "name": "Schöntal",
        "code": "74214"
    },
    {
        "name": "Havetoft",
        "code": "24873"
    },
    {
        "name": "Dägeling, Neuenbrook",
        "code": "25578"
    },
    {
        "name": "Golmbach",
        "code": "37640"
    },
    {
        "name": "Elmshorn",
        "code": "25335"
    },
    {
        "name": "Halle",
        "code": "37620"
    },
    {
        "name": "Obermarchtal",
        "code": "89611"
    },
    {
        "name": "Hattenhofen",
        "code": "73110"
    },
    {
        "name": "Hetlingen",
        "code": "25491"
    },
    {
        "name": "Laichingen",
        "code": "89150"
    },
    {
        "name": "Allmendingen",
        "code": "89604"
    },
    {
        "name": "Hünfeld",
        "code": "36088"
    },
    {
        "name": "Rechberghausen",
        "code": "73098"
    },
    {
        "name": "Eckersdorf",
        "code": "95488"
    },
    {
        "name": "Grabow u.a.",
        "code": "19300"
    },
    {
        "name": "München",
        "code": "81241"
    },
    {
        "name": "Wolmirstedt u.a.",
        "code": "39326"
    },
    {
        "name": "Schwarzenbach a. Wald",
        "code": "95131"
    },
    {
        "name": "Crivitz, Friedrichsruhe u.a.",
        "code": "19089"
    },
    {
        "name": "Bayreuth",
        "code": "95444"
    },
    {
        "name": "München",
        "code": "81547"
    },
    {
        "name": "München",
        "code": "81549"
    },
    {
        "name": "Lanitz-Hassel-Tal, Molauer Land",
        "code": "06628"
    },
    {
        "name": "Holzkirchen",
        "code": "83607"
    },
    {
        "name": "Unterföhring",
        "code": "85774"
    },
    {
        "name": "München",
        "code": "81739"
    },
    {
        "name": "Grafenwöhr",
        "code": "92655"
    },
    {
        "name": "Bad Wiessee",
        "code": "83707"
    },
    {
        "name": "Mücheln/ Geiseltal",
        "code": "06249"
    },
    {
        "name": "Beratzhausen",
        "code": "93176"
    },
    {
        "name": "Poppenricht",
        "code": "92284"
    },
    {
        "name": "Zorneding",
        "code": "85604"
    },
    {
        "name": "Goldbeck, Arneburg u.a.",
        "code": "39596"
    },
    {
        "name": "Immenreuth",
        "code": "95505"
    },
    {
        "name": "Ebermannsdorf",
        "code": "92263"
    },
    {
        "name": "Zerbst/Anhalt",
        "code": "39261"
    },
    {
        "name": "Gera",
        "code": "07549"
    },
    {
        "name": "Plauen",
        "code": "08525"
    },
    {
        "name": "Luhe-Wildenau",
        "code": "92706"
    },
    {
        "name": "Vilsheim",
        "code": "84186"
    },
    {
        "name": "Rostock",
        "code": "18146"
    },
    {
        "name": "Nittenau",
        "code": "93149"
    },
    {
        "name": "Samerberg",
        "code": "83122"
    },
    {
        "name": "Neutraubling",
        "code": "93073"
    },
    {
        "name": "Geisenhausen",
        "code": "84144"
    },
    {
        "name": "Mylau",
        "code": "08499"
    },
    {
        "name": "Falkenstein/Vogtl.",
        "code": "08223"
    },
    {
        "name": "Niederaichbach",
        "code": "84100"
    },
    {
        "name": "Bärnau",
        "code": "95671"
    },
    {
        "name": "Niederviehbach",
        "code": "84183"
    },
    {
        "name": "Altenburg",
        "code": "04600"
    },
    {
        "name": "Rain",
        "code": "94369"
    },
    {
        "name": "Leiblfing",
        "code": "94339"
    },
    {
        "name": "Tacherting",
        "code": "83342"
    },
    {
        "name": "Chieming",
        "code": "83339"
    },
    {
        "name": "Schorndorf",
        "code": "93489"
    },
    {
        "name": "Malchin",
        "code": "17139"
    },
    {
        "name": "Mitterfels",
        "code": "94360"
    },
    {
        "name": "Aue",
        "code": "08280"
    },
    {
        "name": "Stephansposching",
        "code": "94569"
    },
    {
        "name": "Piding",
        "code": "83451"
    },
    {
        "name": "Chemnitz",
        "code": "09119"
    },
    {
        "name": "Moos",
        "code": "94554"
    },
    {
        "name": "Jöhstadt",
        "code": "09477"
    },
    {
        "name": "Luckenwalde",
        "code": "14943"
    },
    {
        "name": "Berlin Staaken",
        "code": "13591"
    },
    {
        "name": "Bayerisch Eisenstein",
        "code": "94252"
    },
    {
        "name": "Nossen",
        "code": "01683"
    },
    {
        "name": "Berlin Siemensstadt",
        "code": "13629"
    },
    {
        "name": "Berlin Wilmersdorf",
        "code": "10709"
    },
    {
        "name": "Berlin Charlottenburg",
        "code": "10629"
    },
    {
        "name": "Reinsberg",
        "code": "09629"
    },
    {
        "name": "Berlin Märkisches Viertel",
        "code": "13435"
    },
    {
        "name": "Greifswald",
        "code": "17493"
    },
    {
        "name": "Berlin Kreuzberg",
        "code": "10999"
    },
    {
        "name": "Usingen",
        "code": "61250"
    },
    {
        "name": "Karlsruhe",
        "code": "76228"
    },
    {
        "name": "Karlsruhe",
        "code": "76229"
    },
    {
        "name": "Bielefeld",
        "code": "33613"
    },
    {
        "name": "Lorsch",
        "code": "64653"
    },
    {
        "name": "Frankfurt am Main",
        "code": "60549"
    },
    {
        "name": "Stuhr",
        "code": "28816"
    },
    {
        "name": "Fronhausen",
        "code": "35112"
    },
    {
        "name": "Unterreichenbach",
        "code": "75399"
    },
    {
        "name": "Frankenberg",
        "code": "35066"
    },
    {
        "name": "Eutingen im Gäu",
        "code": "72184"
    },
    {
        "name": "Kieselbronn",
        "code": "75249"
    },
    {
        "name": "Tetenbüll",
        "code": "25882"
    },
    {
        "name": "Mühlhausen-Ehingen",
        "code": "78259"
    },
    {
        "name": "Wald-Michelbach",
        "code": "69483"
    },
    {
        "name": "Bubsheim",
        "code": "78585"
    },
    {
        "name": "Neidenstein",
        "code": "74933"
    },
    {
        "name": "Mücke",
        "code": "35325"
    },
    {
        "name": "Gaienhofen",
        "code": "78343"
    },
    {
        "name": "Cleebronn",
        "code": "74389"
    },
    {
        "name": "Sankt Michaelisdonn,Gudendorf,Volsemenhusen,Trennewurth",
        "code": "25693"
    },
    {
        "name": "Meßkirch, Sauldorf",
        "code": "88605"
    },
    {
        "name": "Balje",
        "code": "21730"
    },
    {
        "name": "Nehren",
        "code": "72147"
    },
    {
        "name": "Binnen",
        "code": "31619"
    },
    {
        "name": "Badisch Schöllenbach",
        "code": "64754"
    },
    {
        "name": "Kusterdingen",
        "code": "72127"
    },
    {
        "name": "Ahnsen",
        "code": "31708"
    },
    {
        "name": "Hespe",
        "code": "31693"
    },
    {
        "name": "Walddorfhäslach",
        "code": "72141"
    },
    {
        "name": "Drage, Seeth",
        "code": "25878"
    },
    {
        "name": "Neuental",
        "code": "34599"
    },
    {
        "name": "Albersdorf",
        "code": "25767"
    },
    {
        "name": "Stuttgart",
        "code": "70619"
    },
    {
        "name": "Ilsfeld",
        "code": "74360"
    },
    {
        "name": "Großenwörden",
        "code": "21712"
    },
    {
        "name": "Neudenau",
        "code": "74861"
    },
    {
        "name": "Meersburg",
        "code": "88709"
    },
    {
        "name": "Biebergemünd",
        "code": "63599"
    },
    {
        "name": "Vaale",
        "code": "25594"
    },
    {
        "name": "Esslingen am Neckar",
        "code": "73732"
    },
    {
        "name": "Unterensingen",
        "code": "72669"
    },
    {
        "name": "Markdorf",
        "code": "88677"
    },
    {
        "name": "Meggerdorf, Friedrichsholm, Friedrichsgraben u.a.",
        "code": "24799"
    },
    {
        "name": "Weinstadt",
        "code": "71384"
    },
    {
        "name": "Korb",
        "code": "71404"
    },
    {
        "name": "Lauenförde",
        "code": "37697"
    },
    {
        "name": "Kropp u.a.",
        "code": "24848"
    },
    {
        "name": "Bad Saulgau, Allmannsweiler",
        "code": "88348"
    },
    {
        "name": "Neuhausen/Erzgeb.",
        "code": "09544"
    },
    {
        "name": "Berlin Friedrichshain",
        "code": "10245"
    },
    {
        "name": "Berlin Karlshorst",
        "code": "10318"
    },
    {
        "name": "Sellin",
        "code": "18586"
    },
    {
        "name": "Radeburg",
        "code": "01471"
    },
    {
        "name": "Kröslin, Krummin, Lassan u.a.",
        "code": "17440"
    },
    {
        "name": "Lichtenow, Altlandsberg u.a.",
        "code": "15345"
    },
    {
        "name": "Ferdinandshof u.a.",
        "code": "17379"
    },
    {
        "name": "Dresden",
        "code": "01109"
    },
    {
        "name": "Melchow, Chorin u.a.",
        "code": "16230"
    },
    {
        "name": "Dresden",
        "code": "01239"
    },
    {
        "name": "Dresden",
        "code": "01309"
    },
    {
        "name": "Dresden",
        "code": "01257"
    },
    {
        "name": "Karlshagen",
        "code": "17449"
    },
    {
        "name": "Schipkau",
        "code": "01993"
    },
    {
        "name": "Bad Gottleuba-Berggießhübel",
        "code": "01816"
    },
    {
        "name": "Kröslin, Krummin, Lassan u.a.",
        "code": "17440"
    },
    {
        "name": "Ueckermünde",
        "code": "17373"
    },
    {
        "name": "Königstein/Sächs.Schw.",
        "code": "01824"
    },
    {
        "name": "Burg/Spreewald u.a.",
        "code": "03096"
    },
    {
        "name": "Welzow",
        "code": "03119"
    },
    {
        "name": "Königswartha",
        "code": "02699"
    },
    {
        "name": "Gartz (Oder)",
        "code": "16307"
    },
    {
        "name": "Cottbus",
        "code": "03050"
    },
    {
        "name": "Herrnhut",
        "code": "02747"
    },
    {
        "name": "Dickenschied u.a.",
        "code": "55483"
    },
    {
        "name": "Weyerbusch",
        "code": "57635"
    },
    {
        "name": "Dortmund",
        "code": "44263"
    },
    {
        "name": "Lähden",
        "code": "49774"
    },
    {
        "name": "Obernheim-Kirchenarnbach u.a.",
        "code": "66919"
    },
    {
        "name": "Meinerzhagen",
        "code": "58540"
    },
    {
        "name": "Bornich, Patersberg",
        "code": "56348"
    },
    {
        "name": "Sulzburg",
        "code": "79295"
    },
    {
        "name": "Schmalenberg",
        "code": "67718"
    },
    {
        "name": "Malberg, Norken, Höchstenbach u.a.",
        "code": "57629"
    },
    {
        "name": "Ringsheim",
        "code": "77975"
    },
    {
        "name": "March",
        "code": "79232"
    },
    {
        "name": "Hamm",
        "code": "59065"
    },
    {
        "name": "Wenden",
        "code": "57482"
    },
    {
        "name": "Bergisch Gladbach",
        "code": "51469"
    },
    {
        "name": "Engden, Isterberg, Schüttorf u.a.",
        "code": "48465"
    },
    {
        "name": "Wuppertal",
        "code": "42111"
    },
    {
        "name": "Neunkirchen",
        "code": "66540"
    },
    {
        "name": "Wuppertal",
        "code": "42119"
    },
    {
        "name": "Walchum",
        "code": "26907"
    },
    {
        "name": "Königswinter",
        "code": "53639"
    },
    {
        "name": "Wuppertal",
        "code": "42287"
    },
    {
        "name": "Ellenz-Poltersdorf",
        "code": "56821"
    },
    {
        "name": "Erpel",
        "code": "53579"
    },
    {
        "name": "Ennepetal",
        "code": "58256"
    },
    {
        "name": "Herrstein",
        "code": "55756"
    },
    {
        "name": "Neustadt b. Coburg",
        "code": "96465"
    },
    {
        "name": "Nürnberg",
        "code": "90455"
    },
    {
        "name": "Inning a. Ammersee",
        "code": "82266"
    },
    {
        "name": "Egenhofen",
        "code": "82281"
    },
    {
        "name": "Schwarzburg",
        "code": "07427"
    },
    {
        "name": "Falkenstein",
        "code": "06463"
    },
    {
        "name": "Aschersleben",
        "code": "06449"
    },
    {
        "name": "Waldburg",
        "code": "88289"
    },
    {
        "name": "Grünenplan, Delligsen",
        "code": "31073"
    },
    {
        "name": "Hannover",
        "code": "30451"
    },
    {
        "name": "Altertheim",
        "code": "97237"
    },
    {
        "name": "Hannover",
        "code": "30177"
    },
    {
        "name": "Barkelsby",
        "code": "24360"
    },
    {
        "name": "Güntersleben",
        "code": "97261"
    },
    {
        "name": "Hamburg",
        "code": "22525"
    },
    {
        "name": "Adelmannsfelden",
        "code": "73486"
    },
    {
        "name": "Rimpar",
        "code": "97222"
    },
    {
        "name": "Röttingen, Tauberrettersheim",
        "code": "97285"
    },
    {
        "name": "Hüttisheim",
        "code": "89185"
    },
    {
        "name": "Würzburg",
        "code": "97078"
    },
    {
        "name": "Berka/ Werra",
        "code": "99837"
    },
    {
        "name": "Würzburg",
        "code": "97076"
    },
    {
        "name": "Norderstedt",
        "code": "22844"
    },
    {
        "name": "Breitingen",
        "code": "89183"
    },
    {
        "name": "Estenfeld",
        "code": "97230"
    },
    {
        "name": "Vöhringen",
        "code": "89269"
    },
    {
        "name": "Ramsthal",
        "code": "97729"
    },
    {
        "name": "Soderstorf",
        "code": "21388"
    },
    {
        "name": "Adelshofen",
        "code": "91587"
    },
    {
        "name": "Pfaffenhofen a.d. Roth",
        "code": "89284"
    },
    {
        "name": "Worbis",
        "code": "37339"
    },
    {
        "name": "Albertshofen",
        "code": "97320"
    },
    {
        "name": "Iphofen",
        "code": "97346"
    },
    {
        "name": "Oberstreu",
        "code": "97640"
    },
    {
        "name": "Clausthal-Zellerfeld, Oberschulenberg",
        "code": "38678"
    },
    {
        "name": "Kirchhaslach",
        "code": "87755"
    },
    {
        "name": "Gerolzhofen",
        "code": "97447"
    },
    {
        "name": "Todendorf",
        "code": "22965"
    },
    {
        "name": "Sontheim",
        "code": "87776"
    },
    {
        "name": "Stadtlauringen",
        "code": "97488"
    },
    {
        "name": "Gädheim",
        "code": "97503"
    },
    {
        "name": "Colmberg",
        "code": "91598"
    },
    {
        "name": "Oberrieden",
        "code": "87769"
    },
    {
        "name": "Groß Oesingen",
        "code": "29393"
    },
    {
        "name": "Trittau",
        "code": "22946"
    },
    {
        "name": "Gülzow",
        "code": "21483"
    },
    {
        "name": "Bechhofen",
        "code": "91572"
    },
    {
        "name": "Sulzdorf a.d. Lederhecke",
        "code": "97528"
    },
    {
        "name": "Schleusingen u.a.",
        "code": "98553"
    },
    {
        "name": "Germaringen",
        "code": "87656"
    },
    {
        "name": "Wachenroth",
        "code": "96193"
    },
    {
        "name": "Lübeck",
        "code": "23562"
    },
    {
        "name": "Wolferstadt",
        "code": "86709"
    },
    {
        "name": "Scharbeutz",
        "code": "23683"
    },
    {
        "name": "Bischberg",
        "code": "96120"
    },
    {
        "name": "Stegaurach",
        "code": "96135"
    },
    {
        "name": "Hallstadt",
        "code": "96103"
    },
    {
        "name": "Veitsbronn",
        "code": "90587"
    },
    {
        "name": "Itzgrund",
        "code": "96274"
    },
    {
        "name": "Hohenfurch",
        "code": "86978"
    },
    {
        "name": "Garmisch-Partenkirchen",
        "code": "82467"
    },
    {
        "name": "Augsburg",
        "code": "86153"
    },
    {
        "name": "Königslutter am Elm",
        "code": "38154"
    },
    {
        "name": "Dassow",
        "code": "23942"
    },
    {
        "name": "Wolsdorf",
        "code": "38379"
    },
    {
        "name": "Stein",
        "code": "90547"
    },
    {
        "name": "Kissing",
        "code": "86438"
    },
    {
        "name": "Rott",
        "code": "86935"
    },
    {
        "name": "Großrudestedt, Schloßvippach u.a.",
        "code": "99195"
    },
    {
        "name": "Steindorf",
        "code": "82297"
    },
    {
        "name": "Eresing",
        "code": "86922"
    },
    {
        "name": "Pronsfeld",
        "code": "54597"
    },
    {
        "name": "Viersen",
        "code": "41749"
    },
    {
        "name": "Mönchengladbach",
        "code": "41065"
    },
    {
        "name": "Jüchen",
        "code": "41363"
    },
    {
        "name": "Welschbillig, Igel, Aach",
        "code": "54298"
    },
    {
        "name": "Krefeld",
        "code": "47802"
    },
    {
        "name": "Esch",
        "code": "54585"
    },
    {
        "name": "Krefeld",
        "code": "47809"
    },
    {
        "name": "Föhren",
        "code": "54343"
    },
    {
        "name": "Fell",
        "code": "54341"
    },
    {
        "name": "Duisburg",
        "code": "47057"
    },
    {
        "name": "Oberhausen",
        "code": "46049"
    },
    {
        "name": "Klausen",
        "code": "54524"
    },
    {
        "name": "Mülheim an der Ruhr",
        "code": "45473"
    },
    {
        "name": "Köln",
        "code": "50735"
    },
    {
        "name": "Essen",
        "code": "45355"
    },
    {
        "name": "Solingen",
        "code": "42697"
    },
    {
        "name": "Monzelfeld, Hochscheid u.a.",
        "code": "54472"
    },
    {
        "name": "Köln",
        "code": "51061"
    },
    {
        "name": "Saarbrücken",
        "code": "66125"
    },
    {
        "name": "Nordhorn",
        "code": "48527"
    },
    {
        "name": "Mayschoß",
        "code": "53508"
    },
    {
        "name": "Krummhörn",
        "code": "26736"
    },
    {
        "name": "Köln",
        "code": "51109"
    },
    {
        "name": "Vellmar",
        "code": "34246"
    },
    {
        "name": "Unterwaldhausen",
        "code": "88379"
    },
    {
        "name": "Flensburg",
        "code": "24944"
    },
    {
        "name": "Husby",
        "code": "24975"
    },
    {
        "name": "Mainhardt",
        "code": "74535"
    },
    {
        "name": "Elmshorn",
        "code": "25335"
    },
    {
        "name": "Reher",
        "code": "25593"
    },
    {
        "name": "Staufenberg",
        "code": "34355"
    },
    {
        "name": "Gemünden a. Main",
        "code": "97737"
    },
    {
        "name": "Boxberg",
        "code": "97944"
    },
    {
        "name": "Oberrot",
        "code": "74420"
    },
    {
        "name": "Witzenhausen, Gutsbezirk",
        "code": "37216"
    },
    {
        "name": "Freudenberg",
        "code": "57258"
    },
    {
        "name": "Wangerooge",
        "code": "26486"
    },
    {
        "name": "Bingen am Rhein",
        "code": "55411"
    },
    {
        "name": "Bingen am Rhein",
        "code": "55411"
    },
    {
        "name": "Sexau",
        "code": "79350"
    },
    {
        "name": "Dannenfels",
        "code": "67814"
    },
    {
        "name": "Aspisheim, Grolsheim",
        "code": "55459"
    },
    {
        "name": "Annweiler am Trifels",
        "code": "76855"
    },
    {
        "name": "Rheinmünster",
        "code": "77836"
    },
    {
        "name": "Burbach",
        "code": "57299"
    },
    {
        "name": "Marnheim",
        "code": "67297"
    },
    {
        "name": "Hahnstätten u.a.",
        "code": "65623"
    },
    {
        "name": "Eltville am Rhein",
        "code": "65345"
    },
    {
        "name": "Wilhelmshaven",
        "code": "26386"
    },
    {
        "name": "Limburg",
        "code": "65552"
    },
    {
        "name": "Saulheim",
        "code": "55291"
    },
    {
        "name": "Eisenbach",
        "code": "79871"
    },
    {
        "name": "Dillenburg",
        "code": "35686"
    },
    {
        "name": "Baiersbronn",
        "code": "72270"
    },
    {
        "name": "Osthofen",
        "code": "67574"
    },
    {
        "name": "Waldems",
        "code": "65529"
    },
    {
        "name": "Unterkirnach",
        "code": "78089"
    },
    {
        "name": "Bobenheim-Roxheim",
        "code": "67240"
    },
    {
        "name": "Linkenheim-Hochstetten",
        "code": "76351"
    },
    {
        "name": "Karlsruhe",
        "code": "76133"
    },
    {
        "name": "Halle/ Saale",
        "code": "06128"
    },
    {
        "name": "Döhlau",
        "code": "95182"
    },
    {
        "name": "Rottenburg a.d. Laaber",
        "code": "84056"
    },
    {
        "name": "Brannenburg",
        "code": "83098"
    },
    {
        "name": "Zeitz, Gutenborn u.a.",
        "code": "06712"
    },
    {
        "name": "Landshut, Altdorf",
        "code": "84032"
    },
    {
        "name": "Rosenbach",
        "code": "08548"
    },
    {
        "name": "Gera",
        "code": "07551"
    },
    {
        "name": "Wernberg-Köblitz",
        "code": "92533"
    },
    {
        "name": "Landshut",
        "code": "84036"
    },
    {
        "name": "Vogtareuth",
        "code": "83569"
    },
    {
        "name": "Hohenberg a.d. Eger",
        "code": "95691"
    },
    {
        "name": "Pegau, Elstertrebnitz",
        "code": "04523"
    },
    {
        "name": "Konnersreuth",
        "code": "95692"
    },
    {
        "name": "Sandersdorf-Brehna",
        "code": "06792"
    },
    {
        "name": "Waldthurn",
        "code": "92727"
    },
    {
        "name": "Tännesberg",
        "code": "92723"
    },
    {
        "name": "Pfatter",
        "code": "93102"
    },
    {
        "name": "Gars am Inn",
        "code": "83546"
    },
    {
        "name": "Premnitz",
        "code": "14727"
    },
    {
        "name": "Neukieritzsch, Deutzen",
        "code": "04575"
    },
    {
        "name": "Neukirchen-Balbini",
        "code": "92445"
    },
    {
        "name": "Rodewisch",
        "code": "08228"
    },
    {
        "name": "Zwickau",
        "code": "08062"
    },
    {
        "name": "Saal",
        "code": "18317"
    },
    {
        "name": "Gräfenhainichen",
        "code": "06772"
    },
    {
        "name": "Traunstein",
        "code": "83278"
    },
    {
        "name": "Ascha",
        "code": "94347"
    },
    {
        "name": "Konzell",
        "code": "94357"
    },
    {
        "name": "Wonneberg",
        "code": "83379"
    },
    {
        "name": "Stollberg/Erzgeb.",
        "code": "09366"
    },
    {
        "name": "Neukalen",
        "code": "17154"
    },
    {
        "name": "Gleißenberg",
        "code": "93477"
    },
    {
        "name": "Mockrehna",
        "code": "04862"
    },
    {
        "name": "Marktl",
        "code": "84533"
    },
    {
        "name": "Teisnach",
        "code": "94244"
    },
    {
        "name": "Seddiner See",
        "code": "14554"
    },
    {
        "name": "Berlin Wannsee",
        "code": "14109"
    },
    {
        "name": "Zwiesel",
        "code": "94227"
    },
    {
        "name": "Berlin Westend",
        "code": "14053"
    },
    {
        "name": "Innernzell",
        "code": "94548"
    },
    {
        "name": "Großbeeren",
        "code": "14979"
    },
    {
        "name": "Berlin-Lichterfelde",
        "code": "12209"
    },
    {
        "name": "Berlin Wedding",
        "code": "13351"
    },
    {
        "name": "Schlier",
        "code": "88281"
    },
    {
        "name": "Eschenbach",
        "code": "73107"
    },
    {
        "name": "Brodersby, Goltoft",
        "code": "24864"
    },
    {
        "name": "Steinfeld",
        "code": "24888"
    },
    {
        "name": "Emkendorf",
        "code": "24802"
    },
    {
        "name": "Winsen (Aller)",
        "code": "29308"
    },
    {
        "name": "Geislingen an der Steige",
        "code": "73312"
    },
    {
        "name": "Oberleichtersbach",
        "code": "97789"
    },
    {
        "name": "Dipperz",
        "code": "36160"
    },
    {
        "name": "Schondra",
        "code": "97795"
    },
    {
        "name": "Hemdingen",
        "code": "25485"
    },
    {
        "name": "Halstenbek",
        "code": "25469"
    },
    {
        "name": "Holzdorf",
        "code": "24364"
    },
    {
        "name": "Kaltenkirchen",
        "code": "24568"
    },
    {
        "name": "Würzburg",
        "code": "97080"
    },
    {
        "name": "Geisa",
        "code": "36419"
    },
    {
        "name": "Bühlertann",
        "code": "74424"
    },
    {
        "name": "Hohenroda",
        "code": "36284"
    },
    {
        "name": "Würzburg",
        "code": "97070"
    },
    {
        "name": "Weidenstetten",
        "code": "89197"
    },
    {
        "name": "Bad Salzdetfurth",
        "code": "31162"
    },
    {
        "name": "Rosenberg",
        "code": "73494"
    },
    {
        "name": "Oberelsbach",
        "code": "97656"
    },
    {
        "name": "Seevetal",
        "code": "21220"
    },
    {
        "name": "Flintbek",
        "code": "24220"
    },
    {
        "name": "Salzhausen",
        "code": "21376"
    },
    {
        "name": "Dettingen an der Iller",
        "code": "88451"
    },
    {
        "name": "Uetze",
        "code": "31311"
    },
    {
        "name": "Celle",
        "code": "29221"
    },
    {
        "name": "Hamburg",
        "code": "22119"
    },
    {
        "name": "Altenstadt",
        "code": "89281"
    },
    {
        "name": "Legau",
        "code": "87764"
    },
    {
        "name": "Herbrechtingen",
        "code": "89542"
    },
    {
        "name": "Rainau",
        "code": "73492"
    },
    {
        "name": "Rickling",
        "code": "24635"
    },
    {
        "name": "Kirchbarkau",
        "code": "24245"
    },
    {
        "name": "Trappenkamp",
        "code": "24610"
    },
    {
        "name": "Pleß",
        "code": "87773"
    },
    {
        "name": "Benningen",
        "code": "87734"
    },
    {
        "name": "Winterrieden",
        "code": "87785"
    },
    {
        "name": "Dinkelsbühl",
        "code": "91550"
    },
    {
        "name": "Mellrichstadt",
        "code": "97638"
    },
    {
        "name": "Feuchtwangen",
        "code": "91555"
    },
    {
        "name": "Grettstadt",
        "code": "97508"
    },
    {
        "name": "Eldingen",
        "code": "29351"
    },
    {
        "name": "Liebenburg",
        "code": "38704"
    },
    {
        "name": "Ziertheim",
        "code": "89446"
    },
    {
        "name": "Kuddewörde",
        "code": "22958"
    },
    {
        "name": "Bienenbüttel",
        "code": "29553"
    },
    {
        "name": "Bad Langensalza",
        "code": "99947"
    },
    {
        "name": "Grönwohld",
        "code": "22956"
    },
    {
        "name": "Waltershausen",
        "code": "99880"
    },
    {
        "name": "Dillingen a.d. Donau",
        "code": "89407"
    },
    {
        "name": "Salgen",
        "code": "87775"
    },
    {
        "name": "Ribbesbüttel",
        "code": "38551"
    },
    {
        "name": "Suhl, Marisfeld, Rohr u.a.",
        "code": "98530"
    },
    {
        "name": "Suhl, Marisfeld, Rohr u.a.",
        "code": "98530"
    },
    {
        "name": "Hohenahr",
        "code": "35644"
    },
    {
        "name": "Bielefeld",
        "code": "33647"
    },
    {
        "name": "Bielefeld",
        "code": "33739"
    },
    {
        "name": "Dornhan",
        "code": "72175"
    },
    {
        "name": "Gladenbach",
        "code": "35075"
    },
    {
        "name": "Dauchingen",
        "code": "78083"
    },
    {
        "name": "Schopfloch",
        "code": "72296"
    },
    {
        "name": "Reilingen",
        "code": "68799"
    },
    {
        "name": "Langgöns",
        "code": "35428"
    },
    {
        "name": "Rottweil",
        "code": "78628"
    },
    {
        "name": "Darmstadt",
        "code": "64295"
    },
    {
        "name": "Frankfurt am Main",
        "code": "60439"
    },
    {
        "name": "Haiterbach",
        "code": "72221"
    },
    {
        "name": "Eppelheim",
        "code": "69214"
    },
    {
        "name": "Durchhausen",
        "code": "78591"
    },
    {
        "name": "Rohrdorf",
        "code": "72229"
    },
    {
        "name": "Frankfurt am Main",
        "code": "60314"
    },
    {
        "name": "Rimbach",
        "code": "64668"
    },
    {
        "name": "Balgheim",
        "code": "78582"
    },
    {
        "name": "Eppertshausen",
        "code": "64859"
    },
    {
        "name": "Bremen",
        "code": "28199"
    },
    {
        "name": "Weyhe",
        "code": "28844"
    },
    {
        "name": "Dürbheim",
        "code": "78589"
    },
    {
        "name": "Offenbach am Main",
        "code": "63073"
    },
    {
        "name": "Singen",
        "code": "78224"
    },
    {
        "name": "Waibstadt",
        "code": "74915"
    },
    {
        "name": "Kolbingen",
        "code": "78600"
    },
    {
        "name": "Unter-Hainbrunn",
        "code": "64757"
    },
    {
        "name": "Warburg",
        "code": "34414"
    },
    {
        "name": "Moos",
        "code": "78345"
    },
    {
        "name": "Bad Rappenau",
        "code": "74906"
    },
    {
        "name": "Mainhausen",
        "code": "63533"
    },
    {
        "name": "Bodman-Ludwigshafen",
        "code": "78351"
    },
    {
        "name": "Sersheim",
        "code": "74372"
    },
    {
        "name": "Zwingenberg",
        "code": "69439"
    },
    {
        "name": "Freudental",
        "code": "74392"
    },
    {
        "name": "Stuttgart",
        "code": "70569"
    },
    {
        "name": "Erligheim",
        "code": "74391"
    },
    {
        "name": "Sipplingen",
        "code": "78354"
    },
    {
        "name": "Landesbergen",
        "code": "31628"
    },
    {
        "name": "Ulrichstein",
        "code": "35327"
    },
    {
        "name": "Miltenberg",
        "code": "63897"
    },
    {
        "name": "Borgentreich",
        "code": "34434"
    },
    {
        "name": "Ludwigsburg",
        "code": "71634"
    },
    {
        "name": "Aichtal",
        "code": "72631"
    },
    {
        "name": "Ingersheim",
        "code": "74379"
    },
    {
        "name": "Freiberg am Neckar",
        "code": "71691"
    },
    {
        "name": "Geiselbach",
        "code": "63826"
    },
    {
        "name": "Ludwigsburg",
        "code": "71642"
    },
    {
        "name": "Bempflingen",
        "code": "72658"
    },
    {
        "name": "Erfde",
        "code": "24803"
    },
    {
        "name": "Mespelbrunn",
        "code": "63875"
    },
    {
        "name": "Rotenburg",
        "code": "27356"
    },
    {
        "name": "Waiblingen",
        "code": "71334"
    },
    {
        "name": "Ostrach",
        "code": "88356"
    },
    {
        "name": "Silberstedt, Schwittschau",
        "code": "24887"
    },
    {
        "name": "Aichwald",
        "code": "73773"
    },
    {
        "name": "Kassel",
        "code": "34128"
    },
    {
        "name": "Boffzen, Derental",
        "code": "37691"
    },
    {
        "name": "Külsheim",
        "code": "97900"
    },
    {
        "name": "Querfurt, Obhausen, Mücheln u.a.",
        "code": "06268"
    },
    {
        "name": "Röhrmoos",
        "code": "85244"
    },
    {
        "name": "Vierkirchen",
        "code": "85256"
    },
    {
        "name": "München",
        "code": "81247"
    },
    {
        "name": "Eisleben",
        "code": "06295"
    },
    {
        "name": "Krölpa",
        "code": "07387"
    },
    {
        "name": "München",
        "code": "80639"
    },
    {
        "name": "Staßfurt",
        "code": "39446"
    },
    {
        "name": "München",
        "code": "81371"
    },
    {
        "name": "Guttenberg",
        "code": "95358"
    },
    {
        "name": "Schweitenkirchen",
        "code": "85301"
    },
    {
        "name": "München",
        "code": "80803"
    },
    {
        "name": "Neufahrn b. Freising",
        "code": "85376"
    },
    {
        "name": "Magdeburg",
        "code": "39108"
    },
    {
        "name": "München",
        "code": "81925"
    },
    {
        "name": "Illschwang",
        "code": "92278"
    },
    {
        "name": "Haar",
        "code": "85540"
    },
    {
        "name": "Teutschenthal",
        "code": "06179"
    },
    {
        "name": "Moosinning",
        "code": "85452"
    },
    {
        "name": "Neustadt a. Kulm",
        "code": "95514"
    },
    {
        "name": "Wittenberge, Rühstädt",
        "code": "19322"
    },
    {
        "name": "Trabitz",
        "code": "92724"
    },
    {
        "name": "Kastl",
        "code": "95506"
    },
    {
        "name": "Spornitz",
        "code": "19372"
    },
    {
        "name": "Wildenberg",
        "code": "93359"
    },
    {
        "name": "Südharz, Berga",
        "code": "06536"
    },
    {
        "name": "Erxleben, Nordgermersleben u.a.",
        "code": "39343"
    },
    {
        "name": "Weilersbach",
        "code": "91365"
    },
    {
        "name": "Brüsewitz",
        "code": "19071"
    },
    {
        "name": "Hedersleben",
        "code": "06458"
    },
    {
        "name": "Pressig",
        "code": "96332"
    },
    {
        "name": "Seeland",
        "code": "06464"
    },
    {
        "name": "Ahorntal",
        "code": "95491"
    },
    {
        "name": "Aitrang",
        "code": "87648"
    },
    {
        "name": "Burgpreppach",
        "code": "97496"
    },
    {
        "name": "Blekendorf",
        "code": "24327"
    },
    {
        "name": "Hedeper",
        "code": "38322"
    },
    {
        "name": "Wiedergeltingen",
        "code": "86879"
    },
    {
        "name": "Kirchlauter",
        "code": "96166"
    },
    {
        "name": "Gudow",
        "code": "23899"
    },
    {
        "name": "Seßlach",
        "code": "96145"
    },
    {
        "name": "Amt Neuhaus, Stapel",
        "code": "19273"
    },
    {
        "name": "Veilsdorf",
        "code": "98669"
    },
    {
        "name": "Reckendorf",
        "code": "96182"
    },
    {
        "name": "Arnstadt",
        "code": "99338"
    },
    {
        "name": "Genderkingen",
        "code": "86682"
    },
    {
        "name": "Biberau, Masserberg",
        "code": "98666"
    },
    {
        "name": "Spalt",
        "code": "91174"
    },
    {
        "name": "Langenstein, Derenburg",
        "code": "38895"
    },
    {
        "name": "Kinsau",
        "code": "86981"
    },
    {
        "name": "Penzing",
        "code": "86929"
    },
    {
        "name": "Lautertal",
        "code": "96486"
    },
    {
        "name": "Fürth",
        "code": "90762"
    },
    {
        "name": "Erfurt",
        "code": "99087"
    },
    {
        "name": "Nürnberg",
        "code": "90451"
    },
    {
        "name": "Malsfeld",
        "code": "34323"
    },
    {
        "name": "Visselhövede",
        "code": "27374"
    },
    {
        "name": "Guxhagen",
        "code": "34302"
    },
    {
        "name": "Pfedelbach",
        "code": "74629"
    },
    {
        "name": "Herzhorn, Kamerlanderdeich",
        "code": "25379"
    },
    {
        "name": "Glücksburg, Munkbrarup",
        "code": "24960"
    },
    {
        "name": "Wees",
        "code": "24999"
    },
    {
        "name": "Uhingen",
        "code": "73066"
    },
    {
        "name": "Lohfelden",
        "code": "34253"
    },
    {
        "name": "Berg",
        "code": "88276"
    },
    {
        "name": "Ravensburg",
        "code": "88214"
    },
    {
        "name": "Hollern-Twielenfleth",
        "code": "21723"
    },
    {
        "name": "Westerheim",
        "code": "72589"
    },
    {
        "name": "Hohenwestedt",
        "code": "24594"
    },
    {
        "name": "Untermarchtal",
        "code": "89617"
    },
    {
        "name": "Tolk, Twedt",
        "code": "24894"
    },
    {
        "name": "Dürnau",
        "code": "73105"
    },
    {
        "name": "Hannover",
        "code": "30455"
    },
    {
        "name": "Hannover",
        "code": "30453"
    },
    {
        "name": "Röhrnbach",
        "code": "94133"
    },
    {
        "name": "Büchlberg",
        "code": "94124"
    },
    {
        "name": "Berlin Altglienicke",
        "code": "12524"
    },
    {
        "name": "Wolgast",
        "code": "17438"
    },
    {
        "name": "Dresden",
        "code": "01157"
    },
    {
        "name": "Woltersdorf",
        "code": "15569"
    },
    {
        "name": "Dresden",
        "code": "01069"
    },
    {
        "name": "Rüdersdorf",
        "code": "15378"
    },
    {
        "name": "Bad Saarow-Pieskow",
        "code": "15526"
    },
    {
        "name": "Blankensee, Grambow u.a.",
        "code": "17322"
    },
    {
        "name": "Cottbus",
        "code": "03054"
    },
    {
        "name": "Sohland a. d. Spree",
        "code": "02689"
    },
    {
        "name": "Görlitz",
        "code": "02827"
    },
    {
        "name": "Halle/ Saale",
        "code": "06124"
    },
    {
        "name": "Pielenhofen",
        "code": "93188"
    },
    {
        "name": "Schwandorf",
        "code": "92421"
    },
    {
        "name": "Waldershof",
        "code": "95679"
    },
    {
        "name": "Gera",
        "code": "07548"
    },
    {
        "name": "Kolbermoor",
        "code": "83059"
    },
    {
        "name": "Rosenheim",
        "code": "83024"
    },
    {
        "name": "Pechbrunn",
        "code": "95701"
    },
    {
        "name": "Berga/Elster",
        "code": "07980"
    },
    {
        "name": "Störnstein",
        "code": "92721"
    },
    {
        "name": "Netzschkau, Limbach",
        "code": "08491"
    },
    {
        "name": "Coswig (Anhalt)",
        "code": "06868"
    },
    {
        "name": "Leipzig",
        "code": "04209"
    },
    {
        "name": "Gars a. Inn",
        "code": "83559"
    },
    {
        "name": "Wiesent",
        "code": "93109"
    },
    {
        "name": "Leipzig",
        "code": "04356"
    },
    {
        "name": "Leipzig",
        "code": "04357"
    },
    {
        "name": "Kemberg",
        "code": "06901"
    },
    {
        "name": "Waidhaus",
        "code": "92726"
    },
    {
        "name": "Aiterhofen",
        "code": "94330"
    },
    {
        "name": "Nußdorf",
        "code": "83365"
    },
    {
        "name": "Falkenfels",
        "code": "94350"
    },
    {
        "name": "Waffenbrunn",
        "code": "93494"
    },
    {
        "name": "Rechlin",
        "code": "17248"
    },
    {
        "name": "Haibach",
        "code": "94353"
    },
    {
        "name": "Lößnitz",
        "code": "08294"
    },
    {
        "name": "Chamerau",
        "code": "93466"
    },
    {
        "name": "Wurmannsquick",
        "code": "84329"
    },
    {
        "name": "Arnstorf",
        "code": "94424"
    },
    {
        "name": "Werder/ Havel",
        "code": "14542"
    },
    {
        "name": "Kremmen",
        "code": "16766"
    },
    {
        "name": "Roßbach",
        "code": "94439"
    },
    {
        "name": "Potsdam",
        "code": "14476"
    },
    {
        "name": "Ehrenfriedersdorf",
        "code": "09427"
    },
    {
        "name": "Döbeln, Großweitzschen u.a.",
        "code": "04720"
    },
    {
        "name": "Falkenberg/ Elster",
        "code": "04895"
    },
    {
        "name": "Eppendorf",
        "code": "09575"
    },
    {
        "name": "Berlin Tegel",
        "code": "13503"
    },
    {
        "name": "Aicha vorm Wald",
        "code": "94529"
    },
    {
        "name": "Berlin Moabit",
        "code": "10559"
    },
    {
        "name": "Bobritzsch",
        "code": "09627"
    },
    {
        "name": "Berlin Mitte",
        "code": "10179"
    },
    {
        "name": "Friedrichshafen",
        "code": "88045"
    },
    {
        "name": "Rechtenbach",
        "code": "97848"
    },
    {
        "name": "Beringstedt",
        "code": "25575"
    },
    {
        "name": "Esselbach",
        "code": "97839"
    },
    {
        "name": "Niestetal",
        "code": "34266"
    },
    {
        "name": "Ebersbach-Musbach",
        "code": "88371"
    },
    {
        "name": "Krautheim",
        "code": "74238"
    },
    {
        "name": "Neuendorf",
        "code": "97788"
    },
    {
        "name": "Hannover",
        "code": "30419"
    },
    {
        "name": "Baienfurt",
        "code": "88255"
    },
    {
        "name": "Büdelsdorf, Rickert",
        "code": "24782"
    },
    {
        "name": "Mittenwalde",
        "code": "15749"
    },
    {
        "name": "Berlin",
        "code": "12487"
    },
    {
        "name": "Halbe",
        "code": "15757"
    },
    {
        "name": "Dresden",
        "code": "01127"
    },
    {
        "name": "Breitenberg",
        "code": "94139"
    },
    {
        "name": "Calau, Bronkow",
        "code": "03205"
    },
    {
        "name": "Oberbarnim, Märkische Höhe u.a.",
        "code": "15377"
    },
    {
        "name": "Großharthau, Frankenthal",
        "code": "01909"
    },
    {
        "name": "Beiersdorf, Oppach",
        "code": "02736"
    },
    {
        "name": "Ostrhauderfehn",
        "code": "26842"
    },
    {
        "name": "Clausen",
        "code": "66978"
    },
    {
        "name": "Kreimbach-Kaulbach",
        "code": "67757"
    },
    {
        "name": "Becherbach",
        "code": "67827"
    },
    {
        "name": "Spiekeroog",
        "code": "26474"
    },
    {
        "name": "Geiselberg",
        "code": "67715"
    },
    {
        "name": "Freilingen, Freirachdorf u.a.",
        "code": "56244"
    },
    {
        "name": "Birken-Honigsessen",
        "code": "57587"
    },
    {
        "name": "Wilgartswiesen",
        "code": "76848"
    },
    {
        "name": "Menden",
        "code": "58706"
    },
    {
        "name": "Malberg, Norken, Höchstenbach u.a.",
        "code": "57629"
    },
    {
        "name": "Kippenheim",
        "code": "77971"
    },
    {
        "name": "Dielkirchen",
        "code": "67811"
    },
    {
        "name": "Jever",
        "code": "26441"
    },
    {
        "name": "Nastätten u.a.",
        "code": "56355"
    },
    {
        "name": "Wilgartswiesen",
        "code": "76848"
    },
    {
        "name": "Annweiler am Trifels",
        "code": "76855"
    },
    {
        "name": "Schortens",
        "code": "26419"
    },
    {
        "name": "Freiburg im Breisgau",
        "code": "79115"
    },
    {
        "name": "Rheinau",
        "code": "77866"
    },
    {
        "name": "Elkenroth",
        "code": "57578"
    },
    {
        "name": "Bolanden",
        "code": "67295"
    },
    {
        "name": "Bischheim u.a.",
        "code": "67294"
    },
    {
        "name": "Renchen",
        "code": "77871"
    },
    {
        "name": "Dreisen, Standenbühl",
        "code": "67816"
    },
    {
        "name": "Venningen",
        "code": "67482"
    },
    {
        "name": "Frankenstein, Neidenfels, Frankeneck",
        "code": "67468"
    },
    {
        "name": "Bakum",
        "code": "49456"
    },
    {
        "name": "Waldbrunn",
        "code": "65620"
    },
    {
        "name": "Köln",
        "code": "51147"
    },
    {
        "name": "Essen",
        "code": "45307"
    },
    {
        "name": "Reil",
        "code": "56861"
    },
    {
        "name": "Schiffweiler",
        "code": "66578"
    },
    {
        "name": "Wuppertal",
        "code": "42115"
    },
    {
        "name": "Enkirch u.a.",
        "code": "56850"
    },
    {
        "name": "Lingen",
        "code": "49808"
    },
    {
        "name": "Bochum",
        "code": "44807"
    },
    {
        "name": "Bochum",
        "code": "44799"
    },
    {
        "name": "Wettringen",
        "code": "48493"
    },
    {
        "name": "Breitenbach",
        "code": "66916"
    },
    {
        "name": "Bochum",
        "code": "44799"
    },
    {
        "name": "Linz am Rhein, Ockenfels",
        "code": "53545"
    },
    {
        "name": "Wetter (Ruhr)",
        "code": "58300"
    },
    {
        "name": "Dornum",
        "code": "26553"
    },
    {
        "name": "Sankt Katharinen (Landkreis Neuwied)",
        "code": "53562"
    },
    {
        "name": "Eitorf",
        "code": "53783"
    },
    {
        "name": "Bergen",
        "code": "55608"
    },
    {
        "name": "Wildenbungert, Gondershausen, Nörtershausen u.a.",
        "code": "56283"
    },
    {
        "name": "Medard, Rathskirchen u.a.",
        "code": "67744"
    },
    {
        "name": "Rheine",
        "code": "48432"
    },
    {
        "name": "Auggen",
        "code": "79424"
    },
    {
        "name": "Goch",
        "code": "47574"
    },
    {
        "name": "Baesweiler",
        "code": "52499"
    },
    {
        "name": "Bleialf",
        "code": "54608"
    },
    {
        "name": "Wachtendonk",
        "code": "47669"
    },
    {
        "name": "Viersen",
        "code": "41747"
    },
    {
        "name": "Ralingen",
        "code": "54310"
    },
    {
        "name": "Kall",
        "code": "53925"
    },
    {
        "name": "Walsdorf, Nohn u.a.",
        "code": "54578"
    },
    {
        "name": "Duisburg",
        "code": "47179"
    },
    {
        "name": "Neuss",
        "code": "41470"
    },
    {
        "name": "Euskirchen",
        "code": "53881"
    },
    {
        "name": "Völklingen",
        "code": "66333"
    },
    {
        "name": "Duisburg",
        "code": "47166"
    },
    {
        "name": "Düsseldorf",
        "code": "40547"
    },
    {
        "name": "Uelsen, Halle, Gölenkamp, Getelo",
        "code": "49843"
    },
    {
        "name": "Düsseldorf",
        "code": "40237"
    },
    {
        "name": "Düsseldorf",
        "code": "40593"
    },
    {
        "name": "Bornheim",
        "code": "53332"
    },
    {
        "name": "Essen",
        "code": "45356"
    },
    {
        "name": "Ettringen",
        "code": "56729"
    },
    {
        "name": "Leverkusen",
        "code": "51379"
    },
    {
        "name": "Leichlingen",
        "code": "42799"
    },
    {
        "name": "Quierschied",
        "code": "66287"
    },
    {
        "name": "Essen",
        "code": "45130"
    },
    {
        "name": "Essen",
        "code": "45128"
    },
    {
        "name": "Köln",
        "code": "51069"
    },
    {
        "name": "Rastede",
        "code": "26180"
    },
    {
        "name": "Schonach im Schwarzwald",
        "code": "78136"
    },
    {
        "name": "Kallstadt",
        "code": "67169"
    },
    {
        "name": "Anröchte",
        "code": "59609"
    },
    {
        "name": "Butjadingen",
        "code": "26969"
    },
    {
        "name": "Wiesbaden",
        "code": "65183"
    },
    {
        "name": "Wiesbaden",
        "code": "65185"
    },
    {
        "name": "Durmersheim",
        "code": "76448"
    },
    {
        "name": "Wintersheim",
        "code": "67587"
    },
    {
        "name": "Bräunlingen",
        "code": "78199"
    },
    {
        "name": "Freudenstadt",
        "code": "72250"
    },
    {
        "name": "Lemförde u.a.",
        "code": "49448"
    },
    {
        "name": "Lippstadt",
        "code": "59555"
    },
    {
        "name": "Dillenburg",
        "code": "35688"
    },
    {
        "name": "Donaueschingen",
        "code": "78166"
    },
    {
        "name": "Dudenhofen",
        "code": "67373"
    },
    {
        "name": "Lampertheim",
        "code": "68623"
    },
    {
        "name": "Stockstadt am Rhein",
        "code": "64589"
    },
    {
        "name": "Fischbach, Erfweiler u.a.",
        "code": "66996"
    },
    {
        "name": "Bad Bergzabern u.a.",
        "code": "76887"
    },
    {
        "name": "Malterdingen",
        "code": "79364"
    },
    {
        "name": "Münster-Sarmsheim",
        "code": "55424"
    },
    {
        "name": "Freiburg im Breisgau",
        "code": "79106"
    },
    {
        "name": "Freiburg im Breisgau",
        "code": "79117"
    },
    {
        "name": "Offenburg",
        "code": "77656"
    },
    {
        "name": "Todtnau",
        "code": "79674"
    },
    {
        "name": "Osnabrück",
        "code": "49076"
    },
    {
        "name": "Rhodt u.a.",
        "code": "76835"
    },
    {
        "name": "Nisterau u.a.",
        "code": "56472"
    },
    {
        "name": "Siegen",
        "code": "57072"
    },
    {
        "name": "Offenburg",
        "code": "77654"
    },
    {
        "name": "Ramsen",
        "code": "67305"
    },
    {
        "name": "Ohlsbach",
        "code": "77797"
    },
    {
        "name": "Gommersheim",
        "code": "67377"
    },
    {
        "name": "Georgsmarienhütte",
        "code": "49124"
    },
    {
        "name": "Murg",
        "code": "79730"
    },
    {
        "name": "Schluchsee",
        "code": "79859"
    },
    {
        "name": "Raubach",
        "code": "56316"
    },
    {
        "name": "Altena",
        "code": "58762"
    },
    {
        "name": "Unna",
        "code": "59425"
    },
    {
        "name": "Lörrach",
        "code": "79541"
    },
    {
        "name": "Bad Ems Umland",
        "code": "56132"
    },
    {
        "name": "Sankt Goarshausen u.a.",
        "code": "56346"
    },
    {
        "name": "Münster",
        "code": "48167"
    },
    {
        "name": "Sendenhorst",
        "code": "48324"
    },
    {
        "name": "Eichstetten",
        "code": "79356"
    },
    {
        "name": "Hamm",
        "code": "59075"
    },
    {
        "name": "Friesoythe",
        "code": "26169"
    },
    {
        "name": "Rockenhausen, Bisterschied u.a.",
        "code": "67806"
    },
    {
        "name": "Montabaur",
        "code": "56410"
    },
    {
        "name": "Gundersweiler, Gonbach u.a.",
        "code": "67724"
    },
    {
        "name": "Pfaffenweiler",
        "code": "79292"
    },
    {
        "name": "Winterborn, Waldgrehweiler, Niedermoschel, u.a.",
        "code": "67822"
    },
    {
        "name": "Freiburg im Breisgau",
        "code": "79114"
    },
    {
        "name": "Bochum",
        "code": "44866"
    },
    {
        "name": "Namborn",
        "code": "66640"
    },
    {
        "name": "Bergisch Gladbach",
        "code": "51429"
    },
    {
        "name": "Wehr",
        "code": "56653"
    },
    {
        "name": "Herne",
        "code": "44625"
    },
    {
        "name": "Bochum",
        "code": "44789"
    },
    {
        "name": "Dörpen, Lehe, u.a.",
        "code": "26892"
    },
    {
        "name": "Castrop-Rauxel",
        "code": "44579"
    },
    {
        "name": "Nordwalde",
        "code": "48356"
    },
    {
        "name": "Dortmund",
        "code": "44137"
    },
    {
        "name": "Lünne, Schapen, Spelle",
        "code": "48480"
    },
    {
        "name": "Königsdorf",
        "code": "82549"
    },
    {
        "name": "Wallenfels",
        "code": "96346"
    },
    {
        "name": "München",
        "code": "80995"
    },
    {
        "name": "Neustadt-Glewe",
        "code": "19306"
    },
    {
        "name": "Jena, Bucha, Großpürschütz u.a.",
        "code": "07751"
    },
    {
        "name": "München",
        "code": "80935"
    },
    {
        "name": "Jena",
        "code": "07749"
    },
    {
        "name": "München",
        "code": "81671"
    },
    {
        "name": "Otterfing",
        "code": "83624"
    },
    {
        "name": "München",
        "code": "81829"
    },
    {
        "name": "Berg",
        "code": "95180"
    },
    {
        "name": "Amberg",
        "code": "92224"
    },
    {
        "name": "Ihrlerstein",
        "code": "93346"
    },
    {
        "name": "Immenreuth",
        "code": "95505"
    },
    {
        "name": "Braunsbedra",
        "code": "06242"
    },
    {
        "name": "Güterglück, Lindau, Deetz u.a.",
        "code": "39264"
    },
    {
        "name": "Schwarzenbach a.d. Saale",
        "code": "95126"
    },
    {
        "name": "Tröstau",
        "code": "95709"
    },
    {
        "name": "Kallmünz",
        "code": "93183"
    },
    {
        "name": "Duggendorf",
        "code": "93182"
    },
    {
        "name": "Farchant",
        "code": "82490"
    },
    {
        "name": "Nürnberg",
        "code": "90469"
    },
    {
        "name": "Nürnberg",
        "code": "90491"
    },
    {
        "name": "Herrsching a. Ammersee",
        "code": "82211"
    },
    {
        "name": "Udestedt, Mönchenholzhausen u.a.",
        "code": "99198"
    },
    {
        "name": "Boltenhagen",
        "code": "23946"
    },
    {
        "name": "Schöngeising",
        "code": "82296"
    },
    {
        "name": "Saalfeld/Saale",
        "code": "07318"
    },
    {
        "name": "Neu Kaliß",
        "code": "19294"
    },
    {
        "name": "Blankenhain",
        "code": "99444"
    },
    {
        "name": "Burgthann",
        "code": "90559"
    },
    {
        "name": "Rastenberg",
        "code": "99636"
    },
    {
        "name": "Pottenstein",
        "code": "91278"
    },
    {
        "name": "Klein Offenseth-Sparrieshoop",
        "code": "25365"
    },
    {
        "name": "Unterstadion",
        "code": "89619"
    },
    {
        "name": "Petersberg",
        "code": "36100"
    },
    {
        "name": "Mittelbiberach",
        "code": "88441"
    },
    {
        "name": "Langenhagen",
        "code": "30853"
    },
    {
        "name": "Waldbrunn, Irtenberger Wald",
        "code": "97295"
    },
    {
        "name": "Stadt Schwäbisch Gmünd",
        "code": "73525"
    },
    {
        "name": "Igersheim",
        "code": "97999"
    },
    {
        "name": "Kleinrinderfeld",
        "code": "97271"
    },
    {
        "name": "Margetshöchheim",
        "code": "97276"
    },
    {
        "name": "Lonsee",
        "code": "89173"
    },
    {
        "name": "Mietingen",
        "code": "88487"
    },
    {
        "name": "Freden (Leine)",
        "code": "31084"
    },
    {
        "name": "Neu-Eichenberg",
        "code": "37249"
    },
    {
        "name": "Felde",
        "code": "24242"
    },
    {
        "name": "Hamburg",
        "code": "22457"
    },
    {
        "name": "Hanstedt, Asendorf",
        "code": "21271"
    },
    {
        "name": "Rabenkirchen-Faulück",
        "code": "24407"
    },
    {
        "name": "Algermissen",
        "code": "31191"
    },
    {
        "name": "Norderstedt",
        "code": "22848"
    },
    {
        "name": "Hamburg",
        "code": "20255"
    },
    {
        "name": "Hamburg",
        "code": "20357"
    },
    {
        "name": "Bad Kissingen",
        "code": "97688"
    },
    {
        "name": "Kisdorf",
        "code": "24629"
    },
    {
        "name": "Hamburg",
        "code": "20149"
    },
    {
        "name": "Celle",
        "code": "29223"
    },
    {
        "name": "Hohenhameln",
        "code": "31249"
    },
    {
        "name": "Aub",
        "code": "97239"
    },
    {
        "name": "Hamburg",
        "code": "21037"
    },
    {
        "name": "Schillsdorf",
        "code": "24637"
    },
    {
        "name": "Stadtlengsfeld, Weilar, Urnshausen",
        "code": "36457"
    },
    {
        "name": "Bad Grund",
        "code": "37539"
    },
    {
        "name": "Wankendorf",
        "code": "24601"
    },
    {
        "name": "Hahausen, Lutter, Wallmoden",
        "code": "38729"
    },
    {
        "name": "Sonthofen",
        "code": "87527"
    },
    {
        "name": "Hamburg",
        "code": "21029"
    },
    {
        "name": "Nattheim",
        "code": "89564"
    },
    {
        "name": "Reinbek",
        "code": "21465"
    },
    {
        "name": "Schopfloch",
        "code": "91626"
    },
    {
        "name": "Ottobeuren",
        "code": "87724"
    },
    {
        "name": "Hoisdorf",
        "code": "22955"
    },
    {
        "name": "Theres",
        "code": "97531"
    },
    {
        "name": "Tannhausen",
        "code": "73497"
    },
    {
        "name": "Michelau i. Steigerwald, Hundelshausen",
        "code": "97513"
    },
    {
        "name": "Braunschweig",
        "code": "38112"
    },
    {
        "name": "Obernzenn",
        "code": "91619"
    },
    {
        "name": "Nördlingen",
        "code": "86720"
    },
    {
        "name": "Viernau u.a.",
        "code": "98547"
    },
    {
        "name": "Kollow",
        "code": "21527"
    },
    {
        "name": "Wrestedt",
        "code": "29559"
    },
    {
        "name": "Hofheim i. UFr.",
        "code": "97461"
    },
    {
        "name": "Braunschweig",
        "code": "38110"
    },
    {
        "name": "Wagenhoff, Ringelah",
        "code": "38559"
    },
    {
        "name": "Jelmstorf",
        "code": "29585"
    },
    {
        "name": "Dinkelscherben",
        "code": "86424"
    },
    {
        "name": "Bayrischzell",
        "code": "83735"
    },
    {
        "name": "Teugn",
        "code": "93356"
    },
    {
        "name": "Halle/ Saale",
        "code": "06112"
    },
    {
        "name": "Sandau",
        "code": "39524"
    },
    {
        "name": "Regensburg",
        "code": "93053"
    },
    {
        "name": "Obertraubling",
        "code": "93083"
    },
    {
        "name": "Arzberg",
        "code": "95659"
    },
    {
        "name": "Laage, Wardow u.a.",
        "code": "18299"
    },
    {
        "name": "Schirnding",
        "code": "95706"
    },
    {
        "name": "Leipzig",
        "code": "04158"
    },
    {
        "name": "Leipzig",
        "code": "04105"
    },
    {
        "name": "Böhlen",
        "code": "04564"
    },
    {
        "name": "Breitbrunn a. Chiemsee",
        "code": "83254"
    },
    {
        "name": "Beetzsee, Wollin, Wenzlow, Golzow u.a.",
        "code": "14778"
    },
    {
        "name": "Leipzig",
        "code": "04315"
    },
    {
        "name": "Winklarn",
        "code": "92559"
    },
    {
        "name": "Falkenberg",
        "code": "84326"
    },
    {
        "name": "Bockau",
        "code": "08324"
    },
    {
        "name": "Johanngeorgenstadt",
        "code": "08349"
    },
    {
        "name": "Hohndorf",
        "code": "09394"
    },
    {
        "name": "Neuötting",
        "code": "84524"
    },
    {
        "name": "Reischach",
        "code": "84571"
    },
    {
        "name": "Mitterskirchen",
        "code": "84335"
    },
    {
        "name": "Sankt Englmar",
        "code": "94379"
    },
    {
        "name": "Claußnitz",
        "code": "09236"
    },
    {
        "name": "Potsdam",
        "code": "14478"
    },
    {
        "name": "Kleinmachnow",
        "code": "14532"
    },
    {
        "name": "Berlin Nikolassee",
        "code": "14129"
    },
    {
        "name": "Zenting",
        "code": "94579"
    },
    {
        "name": "Kirchdorf i. Wald",
        "code": "94261"
    },
    {
        "name": "Hohen Neuendorf",
        "code": "16540"
    },
    {
        "name": "Dahme u.a.",
        "code": "15936"
    },
    {
        "name": "Baruth",
        "code": "15837"
    },
    {
        "name": "Berlin Wedding",
        "code": "13353"
    },
    {
        "name": "Berlin Tiergarten",
        "code": "10787"
    },
    {
        "name": "Berlin Moabit",
        "code": "10557"
    },
    {
        "name": "Doberlug-Kirchhain",
        "code": "03253"
    },
    {
        "name": "Groß Miltzow",
        "code": "17349"
    },
    {
        "name": "Berlin Tempelhof",
        "code": "12101"
    },
    {
        "name": "Sankt Oswald",
        "code": "94568"
    },
    {
        "name": "Berlin Prenzlauer Berg",
        "code": "10437"
    },
    {
        "name": "Berlin Prenzlauer Berg",
        "code": "10405"
    },
    {
        "name": "Berlin",
        "code": "12305"
    },
    {
        "name": "Friedland, Galenbeck, Datzetal",
        "code": "17099"
    },
    {
        "name": "Delbrück",
        "code": "33129"
    },
    {
        "name": "Kriftel",
        "code": "65830"
    },
    {
        "name": "Wetzlar",
        "code": "35580"
    },
    {
        "name": "Neuwerk",
        "code": "27499"
    },
    {
        "name": "Bad Dürrheim",
        "code": "78073"
    },
    {
        "name": "Bremerhaven, Bremen",
        "code": "27568"
    },
    {
        "name": "Bremerhaven, Bremen",
        "code": "27568"
    },
    {
        "name": "Hüllhorst",
        "code": "32609"
    },
    {
        "name": "Bremen",
        "code": "28755"
    },
    {
        "name": "Bassum",
        "code": "27211"
    },
    {
        "name": "Malsch",
        "code": "69254"
    },
    {
        "name": "Calw",
        "code": "75365"
    },
    {
        "name": "Roßdorf",
        "code": "64380"
    },
    {
        "name": "Rottenburg am Neckar",
        "code": "72108"
    },
    {
        "name": "Weilen unter den Rinnen",
        "code": "72367"
    },
    {
        "name": "Dormettingen",
        "code": "72358"
    },
    {
        "name": "Simmozheim",
        "code": "75397"
    },
    {
        "name": "Rodgau",
        "code": "63110"
    },
    {
        "name": "Bremen",
        "code": "28211"
    },
    {
        "name": "Aach",
        "code": "78267"
    },
    {
        "name": "Eigeltingen",
        "code": "78253"
    },
    {
        "name": "Grünberg",
        "code": "35305"
    },
    {
        "name": "Grosselfingen",
        "code": "72415"
    },
    {
        "name": "Bärenthal",
        "code": "78580"
    },
    {
        "name": "Gnarrenburg",
        "code": "27442"
    },
    {
        "name": "Achim",
        "code": "28832"
    },
    {
        "name": "Stadtallendorf",
        "code": "35260"
    },
    {
        "name": "Steinheim",
        "code": "32839"
    },
    {
        "name": "Nieheim",
        "code": "33039"
    },
    {
        "name": "Stuttgart",
        "code": "70499"
    },
    {
        "name": "Besigheim",
        "code": "74354"
    },
    {
        "name": "Stuttgart",
        "code": "70435"
    },
    {
        "name": "Kleinheubach, Rüdenau",
        "code": "63924"
    },
    {
        "name": "Linden, Barkenholm",
        "code": "25791"
    },
    {
        "name": "Himmelpforten",
        "code": "21709"
    },
    {
        "name": "Bingen",
        "code": "72511"
    },
    {
        "name": "Marbach am Neckar",
        "code": "71672"
    },
    {
        "name": "Schwalmtal",
        "code": "36318"
    },
    {
        "name": "Herbstein",
        "code": "36358"
    },
    {
        "name": "Schafstedt, Weidenhof, Bornholt",
        "code": "25725"
    },
    {
        "name": "Langenenslingen",
        "code": "88515"
    },
    {
        "name": "Oberstenfeld",
        "code": "71720"
    },
    {
        "name": "St. Johann",
        "code": "72813"
    },
    {
        "name": "Affalterbach",
        "code": "71563"
    },
    {
        "name": "Heinrichsthal",
        "code": "63871"
    },
    {
        "name": "Flensburg",
        "code": "24941"
    },
    {
        "name": "Hameln",
        "code": "31789"
    },
    {
        "name": "Kassel",
        "code": "34130"
    },
    {
        "name": "Bodenfelde, Wahlsburg",
        "code": "37194"
    },
    {
        "name": "Tussenhausen",
        "code": "86874"
    },
    {
        "name": "Seeg",
        "code": "87637"
    },
    {
        "name": "Werther Hohenstein Wolkramshausen",
        "code": "99735"
    },
    {
        "name": "Maroldsweisach",
        "code": "96126"
    },
    {
        "name": "Türkheim",
        "code": "86842"
    },
    {
        "name": "Schönbrunn i. Steigerwald",
        "code": "96185"
    },
    {
        "name": "Ustersbach",
        "code": "86514"
    },
    {
        "name": "Dahlenburg",
        "code": "21368"
    },
    {
        "name": "Osloß",
        "code": "38557"
    },
    {
        "name": "Schwabmünchen",
        "code": "86830"
    },
    {
        "name": "Polsingen",
        "code": "91805"
    },
    {
        "name": "Rodach b. Coburg",
        "code": "96476"
    },
    {
        "name": "Hagenbüchach",
        "code": "91469"
    },
    {
        "name": "Lauter",
        "code": "96169"
    },
    {
        "name": "Neusäß",
        "code": "86356"
    },
    {
        "name": "Westendorf, Kühlenthal",
        "code": "86707"
    },
    {
        "name": "Markt Berolzheim",
        "code": "91801"
    },
    {
        "name": "Brome",
        "code": "38465"
    },
    {
        "name": "Neu Darchau",
        "code": "29490"
    },
    {
        "name": "Süpplingenburg",
        "code": "38376"
    },
    {
        "name": "Affing",
        "code": "86444"
    },
    {
        "name": "Pettstadt",
        "code": "96175"
    },
    {
        "name": "Augsburg",
        "code": "86161"
    },
    {
        "name": "Karwitz",
        "code": "29481"
    },
    {
        "name": "Bahrdorf",
        "code": "38459"
    },
    {
        "name": "Büchenbach",
        "code": "91186"
    },
    {
        "name": "Berglen",
        "code": "73663"
    },
    {
        "name": "Knüllwald",
        "code": "34593"
    },
    {
        "name": "Lohr a. Main",
        "code": "97816"
    },
    {
        "name": "Seestermühe",
        "code": "25371"
    },
    {
        "name": "Wolpertswende",
        "code": "88284"
    },
    {
        "name": "Kiebitzreihe",
        "code": "25368"
    },
    {
        "name": "Ravensburg",
        "code": "88212"
    },
    {
        "name": "Mittelsinn",
        "code": "97785"
    },
    {
        "name": "Ronnenberg",
        "code": "30952"
    },
    {
        "name": "Lorch",
        "code": "73547"
    },
    {
        "name": "Hessisch Lichtenau",
        "code": "37235"
    },
    {
        "name": "Berlin Buckow",
        "code": "12351"
    },
    {
        "name": "Berlin Friedrichshain",
        "code": "10247"
    },
    {
        "name": "Klingenberg",
        "code": "01774"
    },
    {
        "name": "Berlin Schmöckwitz",
        "code": "12527"
    },
    {
        "name": "Schulzendorf b. Eichenwade",
        "code": "15732"
    },
    {
        "name": "Dorfhain",
        "code": "01738"
    },
    {
        "name": "Ducherow",
        "code": "17398"
    },
    {
        "name": "Dresden",
        "code": "01127"
    },
    {
        "name": "Dresden",
        "code": "01219"
    },
    {
        "name": "Dresden",
        "code": "01277"
    },
    {
        "name": "Senftenberg",
        "code": "01968"
    },
    {
        "name": "Fürstenwalde/ Spree",
        "code": "15517"
    },
    {
        "name": "Müncheberg",
        "code": "15374"
    },
    {
        "name": "Hoyerswerda",
        "code": "02977"
    },
    {
        "name": "Cunewalde",
        "code": "02733"
    },
    {
        "name": "Frankfurt/ Oder",
        "code": "15230"
    },
    {
        "name": "Krauschwitz, Weißkeißel",
        "code": "02957"
    },
    {
        "name": "Rietschen",
        "code": "02956"
    },
    {
        "name": "Oybin",
        "code": "02797"
    },
    {
        "name": "Neuerburg u.a.",
        "code": "54673"
    },
    {
        "name": "Stolberg (Rhld.)",
        "code": "52222"
    },
    {
        "name": "Bollendorf",
        "code": "54669"
    },
    {
        "name": "Freudenburg",
        "code": "54450"
    },
    {
        "name": "Zülpich",
        "code": "53909"
    },
    {
        "name": "Blankenheim",
        "code": "53945"
    },
    {
        "name": "Beckingen",
        "code": "66701"
    },
    {
        "name": "Duisburg",
        "code": "47229"
    },
    {
        "name": "Itterbeck/Wielen",
        "code": "49847"
    },
    {
        "name": "Neuss",
        "code": "41469"
    },
    {
        "name": "Dinslaken",
        "code": "46537"
    },
    {
        "name": "Dormagen",
        "code": "41540"
    },
    {
        "name": "Ensdorf",
        "code": "66806"
    },
    {
        "name": "Ratingen",
        "code": "40880"
    },
    {
        "name": "Oberhausen",
        "code": "46149"
    },
    {
        "name": "Bettenfeld, Niederöfflingen u.a.",
        "code": "54533"
    },
    {
        "name": "Monheim am Rhein",
        "code": "40789"
    },
    {
        "name": "Köln",
        "code": "50937"
    },
    {
        "name": "Köln",
        "code": "50997"
    },
    {
        "name": "Hilden",
        "code": "40724"
    },
    {
        "name": "Köln",
        "code": "50668"
    },
    {
        "name": "Essen",
        "code": "45141"
    },
    {
        "name": "Essen",
        "code": "45327"
    },
    {
        "name": "Oberthal",
        "code": "66649"
    },
    {
        "name": "Lüdenscheid",
        "code": "58513"
    },
    {
        "name": "Buggingen",
        "code": "79426"
    },
    {
        "name": "Rust",
        "code": "77977"
    },
    {
        "name": "Menden",
        "code": "58708"
    },
    {
        "name": "Kappel-Grafenhausen",
        "code": "77966"
    },
    {
        "name": "Malberg, Norken, Höchstenbach u.a.",
        "code": "57629"
    },
    {
        "name": "Everswinkel",
        "code": "48351"
    },
    {
        "name": "Singhofen",
        "code": "56379"
    },
    {
        "name": "Olpe",
        "code": "57462"
    },
    {
        "name": "Zell im Wiesental",
        "code": "79669"
    },
    {
        "name": "Freiamt",
        "code": "79348"
    },
    {
        "name": "Alfhausen",
        "code": "49594"
    },
    {
        "name": "Börrstadt",
        "code": "67725"
    },
    {
        "name": "Bad Zwischenahn",
        "code": "26160"
    },
    {
        "name": "Lippetal",
        "code": "59510"
    },
    {
        "name": "Neunkirchen",
        "code": "57290"
    },
    {
        "name": "Armsheim",
        "code": "55288"
    },
    {
        "name": "Netphen",
        "code": "57250"
    },
    {
        "name": "Rennerod, Zehnhausen, Nister-Möhrendorf, Waigandshain",
        "code": "56477"
    },
    {
        "name": "Papenburg",
        "code": "26871"
    },
    {
        "name": "Beltheim",
        "code": "56290"
    },
    {
        "name": "Neuwied",
        "code": "56567"
    },
    {
        "name": "Dickenschied u.a.",
        "code": "55483"
    },
    {
        "name": "Contwig",
        "code": "66497"
    },
    {
        "name": "Altenberge",
        "code": "48341"
    },
    {
        "name": "Kleinbundenbach",
        "code": "66501"
    },
    {
        "name": "Weisenheim am Berg",
        "code": "67273"
    },
    {
        "name": "Furtwangen im Schwarzwald",
        "code": "78120"
    },
    {
        "name": "Freinsheim",
        "code": "67251"
    },
    {
        "name": "Oldenburg (Oldenburg)",
        "code": "26133"
    },
    {
        "name": "Bietigheim",
        "code": "76467"
    },
    {
        "name": "Fußgönheim",
        "code": "67136"
    },
    {
        "name": "Bad Essen",
        "code": "49152"
    },
    {
        "name": "Rietberg",
        "code": "33397"
    },
    {
        "name": "Mommenheim",
        "code": "55278"
    },
    {
        "name": "Karlsruhe",
        "code": "76149"
    },
    {
        "name": "Wutach",
        "code": "79879"
    },
    {
        "name": "Essen",
        "code": "45277"
    },
    {
        "name": "Bonn",
        "code": "53127"
    },
    {
        "name": "Marl",
        "code": "45770"
    },
    {
        "name": "Gelsenkirchen",
        "code": "45888"
    },
    {
        "name": "Sankt Augustin",
        "code": "53757"
    },
    {
        "name": "Recklinghausen",
        "code": "45659"
    },
    {
        "name": "Bochum",
        "code": "44795"
    },
    {
        "name": "Ediger-Eller",
        "code": "56814"
    },
    {
        "name": "Briedel",
        "code": "56867"
    },
    {
        "name": "Simmern/Hunsrück u.a.",
        "code": "55469"
    },
    {
        "name": "Rengsdorf",
        "code": "56579"
    },
    {
        "name": "Großefehn",
        "code": "26629"
    },
    {
        "name": "Münster",
        "code": "48163"
    },
    {
        "name": "Dortmund",
        "code": "44309"
    },
    {
        "name": "Ascheberg",
        "code": "59387"
    },
    {
        "name": "Rothselberg u.a.",
        "code": "67753"
    },
    {
        "name": "Taarstedt",
        "code": "24893"
    },
    {
        "name": "Barmstedt",
        "code": "25355"
    },
    {
        "name": "Hannover",
        "code": "30171"
    },
    {
        "name": "Hannover",
        "code": "30659"
    },
    {
        "name": "Dornstadt",
        "code": "89160"
    },
    {
        "name": "Bergen, Lohheide u.a.",
        "code": "29303"
    },
    {
        "name": "Holtsee",
        "code": "24363"
    },
    {
        "name": "Lauterstein",
        "code": "73111"
    },
    {
        "name": "Ronshausen",
        "code": "36217"
    },
    {
        "name": "Ellerbek",
        "code": "25474"
    },
    {
        "name": "Bispingen",
        "code": "29646"
    },
    {
        "name": "Weiler-Simmerberg",
        "code": "88171"
    },
    {
        "name": "Ulm",
        "code": "89081"
    },
    {
        "name": "Nentershausen",
        "code": "36214"
    },
    {
        "name": "Böbingen an der Rems",
        "code": "73560"
    },
    {
        "name": "Hilders, Ehrenberg",
        "code": "36115"
    },
    {
        "name": "Schechingen",
        "code": "73579"
    },
    {
        "name": "Heringen",
        "code": "36266"
    },
    {
        "name": "Kirchberg an der Jagst",
        "code": "74592"
    },
    {
        "name": "Schwendi",
        "code": "88477"
    },
    {
        "name": "Hamburg",
        "code": "22765"
    },
    {
        "name": "Hamburg",
        "code": "21109"
    },
    {
        "name": "Aichstetten",
        "code": "88317"
    },
    {
        "name": "Schellerten",
        "code": "31174"
    },
    {
        "name": "Berkheim",
        "code": "88450"
    },
    {
        "name": "Struvenhütten",
        "code": "24643"
    },
    {
        "name": "Fladungen",
        "code": "97650"
    },
    {
        "name": "Aalen",
        "code": "73431"
    },
    {
        "name": "Nienhagen",
        "code": "29336"
    },
    {
        "name": "Stelle",
        "code": "21435"
    },
    {
        "name": "Hamburg",
        "code": "22179"
    },
    {
        "name": "Hamburg",
        "code": "22397"
    },
    {
        "name": "Ippesheim",
        "code": "97258"
    },
    {
        "name": "Poppenhausen",
        "code": "97490"
    },
    {
        "name": "Herbrechtingen",
        "code": "89542"
    },
    {
        "name": "Oerlenbach",
        "code": "97714"
    },
    {
        "name": "Münnerstadt",
        "code": "97702"
    },
    {
        "name": "Wettringen",
        "code": "91631"
    },
    {
        "name": "Kreßberg",
        "code": "74594"
    },
    {
        "name": "Buchenberg",
        "code": "87474"
    },
    {
        "name": "Immenstadt im Allgäu",
        "code": "87509"
    },
    {
        "name": "Peine",
        "code": "31228"
    },
    {
        "name": "Insingen",
        "code": "91610"
    },
    {
        "name": "Ohrenbach",
        "code": "91620"
    },
    {
        "name": "Hohenroth",
        "code": "97618"
    },
    {
        "name": "Kleinlangheim",
        "code": "97355"
    },
    {
        "name": "Hawangen",
        "code": "87749"
    },
    {
        "name": "Siek",
        "code": "22962"
    },
    {
        "name": "Embsen",
        "code": "21409"
    },
    {
        "name": "Salzgitter",
        "code": "38259"
    },
    {
        "name": "Ebershausen",
        "code": "86491"
    },
    {
        "name": "Untrasried",
        "code": "87496"
    },
    {
        "name": "Oy-Mittelberg",
        "code": "87466"
    },
    {
        "name": "Melbeck, Barnstedt",
        "code": "21406"
    },
    {
        "name": "Rohlstorf",
        "code": "23821"
    },
    {
        "name": "Geschendorf",
        "code": "23815"
    },
    {
        "name": "Thannhausen",
        "code": "86470"
    },
    {
        "name": "Ellrich",
        "code": "99755"
    },
    {
        "name": "Barum",
        "code": "29576"
    },
    {
        "name": "Gerolfingen",
        "code": "91726"
    },
    {
        "name": "Poxdorf",
        "code": "91099"
    },
    {
        "name": "Mittelstetten",
        "code": "82293"
    },
    {
        "name": "Sangerhausen",
        "code": "06526"
    },
    {
        "name": "Neunkirchen a. Brand",
        "code": "91077"
    },
    {
        "name": "Wendelstein",
        "code": "90530"
    },
    {
        "name": "Neuburg an der Donau",
        "code": "86633"
    },
    {
        "name": "Igensdorf",
        "code": "91338"
    },
    {
        "name": "Aufseß",
        "code": "91347"
    },
    {
        "name": "Obersöchering",
        "code": "82395"
    },
    {
        "name": "Schiltberg",
        "code": "86576"
    },
    {
        "name": "Gardelegen",
        "code": "39638"
    },
    {
        "name": "Buxheim",
        "code": "85114"
    },
    {
        "name": "Antdorf",
        "code": "82387"
    },
    {
        "name": "Pentenried",
        "code": "82349"
    },
    {
        "name": "Mühlhausen",
        "code": "92360"
    },
    {
        "name": "Schwerin",
        "code": "19059"
    },
    {
        "name": "Börde-Hakel",
        "code": "39448"
    },
    {
        "name": "Hepberg",
        "code": "85120"
    },
    {
        "name": "Plate",
        "code": "19086"
    },
    {
        "name": "Rerik, Bastorf, Biendorf",
        "code": "18230"
    },
    {
        "name": "Seubersdorf i.d. OPf.",
        "code": "92358"
    },
    {
        "name": "Vohburg a.d. Donau",
        "code": "85088"
    },
    {
        "name": "Magdeburg",
        "code": "39122"
    },
    {
        "name": "Attenkirchen",
        "code": "85395"
    },
    {
        "name": "Höhenkirchen-Siegertsbrunn",
        "code": "85635"
    },
    {
        "name": "Feldkirchen",
        "code": "85622"
    },
    {
        "name": "Burg",
        "code": "39288"
    },
    {
        "name": "Tanna",
        "code": "07922"
    },
    {
        "name": "Volkenschwand",
        "code": "84106"
    },
    {
        "name": "Markt Schwaben",
        "code": "85570"
    },
    {
        "name": "Groß-Rohrheim",
        "code": "68649"
    },
    {
        "name": "Rödinghausen",
        "code": "32289"
    },
    {
        "name": "Kronberg im Taunus",
        "code": "61476"
    },
    {
        "name": "Büttelborn",
        "code": "64572"
    },
    {
        "name": "Mannheim",
        "code": "68219"
    },
    {
        "name": "Schwalbach am Taunus",
        "code": "65824"
    },
    {
        "name": "Biebertal",
        "code": "35444"
    },
    {
        "name": "Birkenfeld",
        "code": "75217"
    },
    {
        "name": "Oberreichenbach",
        "code": "75394"
    },
    {
        "name": "Ubstadt-Weiher",
        "code": "76698"
    },
    {
        "name": "Medebach",
        "code": "59964"
    },
    {
        "name": "Frankfurt am Main",
        "code": "60327"
    },
    {
        "name": "Bremen",
        "code": "28759"
    },
    {
        "name": "Pforzheim",
        "code": "75177"
    },
    {
        "name": "Cuxhaven",
        "code": "27472"
    },
    {
        "name": "Niebüll",
        "code": "25899"
    },
    {
        "name": "Heidelberg",
        "code": "69117"
    },
    {
        "name": "Heidelberg",
        "code": "69118"
    },
    {
        "name": "Jettingen",
        "code": "71131"
    },
    {
        "name": "Habel, Gröde",
        "code": "25869"
    },
    {
        "name": "Starzach",
        "code": "72181"
    },
    {
        "name": "Balingen",
        "code": "72336"
    },
    {
        "name": "Mühlacker",
        "code": "75417"
    },
    {
        "name": "Reichelsheim (Odenwald)",
        "code": "64385"
    },
    {
        "name": "Büsum",
        "code": "25761"
    },
    {
        "name": "Rangendingen",
        "code": "72414"
    },
    {
        "name": "Nufringen",
        "code": "71154"
    },
    {
        "name": "Bremen",
        "code": "28327"
    },
    {
        "name": "Ehningen",
        "code": "71139"
    },
    {
        "name": "Radolfzell am Bodensee",
        "code": "78315"
    },
    {
        "name": "Eberdingen",
        "code": "71735"
    },
    {
        "name": "Höchst i. Odw.",
        "code": "64739"
    },
    {
        "name": "Großkrotzenburg",
        "code": "63538"
    },
    {
        "name": "Brackenheim",
        "code": "74336"
    },
    {
        "name": "Sankt Annen, Rehm-Flehde-Bargen",
        "code": "25776"
    },
    {
        "name": "Markgröningen",
        "code": "71706"
    },
    {
        "name": "Bönnigheim",
        "code": "74357"
    },
    {
        "name": "Korntal-Münchingen",
        "code": "70825"
    },
    {
        "name": "Medelby",
        "code": "24994"
    },
    {
        "name": "Konstanz",
        "code": "78467"
    },
    {
        "name": "Glattbach",
        "code": "63864"
    },
    {
        "name": "Erlenbach a.Main",
        "code": "63906"
    },
    {
        "name": "Oldendorf",
        "code": "21726"
    },
    {
        "name": "Kutenholz",
        "code": "27449"
    },
    {
        "name": "Esslingen am Neckar",
        "code": "73730"
    },
    {
        "name": "Freiensteinau",
        "code": "36399"
    },
    {
        "name": "Weibersbrunn, Rohrbrunner Forst",
        "code": "63879"
    },
    {
        "name": "Rothenbuch, Rothenbucher Forst",
        "code": "63860"
    },
    {
        "name": "Riedlingen",
        "code": "88499"
    },
    {
        "name": "Burgstetten",
        "code": "71576"
    },
    {
        "name": "Heinsen",
        "code": "37649"
    },
    {
        "name": "Steinau an der Straße",
        "code": "36396"
    },
    {
        "name": "Herbertingen",
        "code": "88518"
    },
    {
        "name": "Groß Rheide",
        "code": "24872"
    },
    {
        "name": "Bad Karlshafen",
        "code": "34385"
    },
    {
        "name": "Hafenlohr, Rothenbuch",
        "code": "97840"
    },
    {
        "name": "Marktoberdorf",
        "code": "87616"
    },
    {
        "name": "Diespeck",
        "code": "91456"
    },
    {
        "name": "Kaufbeuren",
        "code": "87600"
    },
    {
        "name": "Wernigerode",
        "code": "38879"
    },
    {
        "name": "Füssen",
        "code": "87629"
    },
    {
        "name": "Megesheim",
        "code": "86750"
    },
    {
        "name": "Merkendorf",
        "code": "91732"
    },
    {
        "name": "Wernigerode, Nordharz",
        "code": "38855"
    },
    {
        "name": "Gerhardshofen",
        "code": "91466"
    },
    {
        "name": "Muhr a. See",
        "code": "91735"
    },
    {
        "name": "Diedorf",
        "code": "86420"
    },
    {
        "name": "Wolfsburg",
        "code": "38444"
    },
    {
        "name": "Monheim",
        "code": "86653"
    },
    {
        "name": "Buchdorf",
        "code": "86675"
    },
    {
        "name": "Herzogenaurach",
        "code": "91074"
    },
    {
        "name": "Zarrentin",
        "code": "19246"
    },
    {
        "name": "Nesse-Apfelstädt, Nottleben",
        "code": "99192"
    },
    {
        "name": "Kyffhäuserland",
        "code": "99707"
    },
    {
        "name": "Oebisfelde",
        "code": "39646"
    },
    {
        "name": "Erlangen",
        "code": "91058"
    },
    {
        "name": "Gangelt, Selfkant",
        "code": "52538"
    },
    {
        "name": "Kevelaer-Mitte",
        "code": "47623"
    },
    {
        "name": "Kevelaer-Wetten",
        "code": "47625"
    },
    {
        "name": "Hellenthal",
        "code": "53940"
    },
    {
        "name": "Titz",
        "code": "52445"
    },
    {
        "name": "Nideggen",
        "code": "52385"
    },
    {
        "name": "Nittel",
        "code": "54453"
    },
    {
        "name": "Moers",
        "code": "47445"
    },
    {
        "name": "Meerbusch",
        "code": "40670"
    },
    {
        "name": "Landscheid",
        "code": "54526"
    },
    {
        "name": "Duisburg",
        "code": "47059"
    },
    {
        "name": "Duisburg",
        "code": "47119"
    },
    {
        "name": "Wadgassen",
        "code": "66787"
    },
    {
        "name": "Düsseldorf",
        "code": "40225"
    },
    {
        "name": "Schwalbach",
        "code": "66773"
    },
    {
        "name": "Dormagen",
        "code": "41541"
    },
    {
        "name": "Wittlich",
        "code": "54516"
    },
    {
        "name": "Juist, Memmert",
        "code": "26571"
    },
    {
        "name": "Riegelsberg",
        "code": "66292"
    },
    {
        "name": "Uersfeld",
        "code": "56767"
    },
    {
        "name": "Essen",
        "code": "45133"
    },
    {
        "name": "Essen",
        "code": "45144"
    },
    {
        "name": "Köln",
        "code": "50678"
    },
    {
        "name": "Nohfelden",
        "code": "66625"
    },
    {
        "name": "Twist",
        "code": "49767"
    },
    {
        "name": "Kaisersesch",
        "code": "56759"
    },
    {
        "name": "Mainz",
        "code": "55124"
    },
    {
        "name": "Lippstadt",
        "code": "59556"
    },
    {
        "name": "Löhnberg",
        "code": "35792"
    },
    {
        "name": "Forbach",
        "code": "76596"
    },
    {
        "name": "Weinbach",
        "code": "35796"
    },
    {
        "name": "Dietzhölztal",
        "code": "35716"
    },
    {
        "name": "Mainz",
        "code": "55130"
    },
    {
        "name": "Ginsheim-Gustavsburg",
        "code": "65462"
    },
    {
        "name": "Worms",
        "code": "67549"
    },
    {
        "name": "Ehringshausen",
        "code": "35630"
    },
    {
        "name": "Melle",
        "code": "49328"
    },
    {
        "name": "Eich",
        "code": "67575"
    },
    {
        "name": "Bielefeld",
        "code": "33649"
    },
    {
        "name": "Seewald",
        "code": "72297"
    },
    {
        "name": "Hardt",
        "code": "78739"
    },
    {
        "name": "Oberkotzau",
        "code": "95145"
    },
    {
        "name": "Weischlitz u.a.",
        "code": "08538"
    },
    {
        "name": "Kaltenbrunn",
        "code": "92700"
    },
    {
        "name": "Lübz, Passow",
        "code": "19386"
    },
    {
        "name": "Rohr i. NB",
        "code": "93352"
    },
    {
        "name": "Rostock",
        "code": "18109"
    },
    {
        "name": "Thierstein",
        "code": "95199"
    },
    {
        "name": "Berga/Elster",
        "code": "07980"
    },
    {
        "name": "Ergoldsbach",
        "code": "84061"
    },
    {
        "name": "Plauen",
        "code": "08529"
    },
    {
        "name": "Köfering",
        "code": "93096"
    },
    {
        "name": "Donaustauf",
        "code": "93093"
    },
    {
        "name": "Bad Elster",
        "code": "08645"
    },
    {
        "name": "Langenbernsdorf",
        "code": "08428"
    },
    {
        "name": "Rositz, Starkenberg, Treben",
        "code": "04617"
    },
    {
        "name": "Vohenstrauß",
        "code": "92648"
    },
    {
        "name": "Sünching",
        "code": "93104"
    },
    {
        "name": "Neumark",
        "code": "08496"
    },
    {
        "name": "Mengkofen",
        "code": "84152"
    },
    {
        "name": "Grassau",
        "code": "83224"
    },
    {
        "name": "Mettenheim",
        "code": "84562"
    },
    {
        "name": "Prerow a. Darß",
        "code": "18375"
    },
    {
        "name": "Langenweißbach, Wildenfels",
        "code": "08134"
    },
    {
        "name": "Tüßling",
        "code": "84577"
    },
    {
        "name": "St. Egidien",
        "code": "09356"
    },
    {
        "name": "Rattiszell",
        "code": "94372"
    },
    {
        "name": "Geratskirchen",
        "code": "84552"
    },
    {
        "name": "Perasdorf",
        "code": "94366"
    },
    {
        "name": "Belgern-Schildau",
        "code": "04889"
    },
    {
        "name": "Dietersburg",
        "code": "84378"
    },
    {
        "name": "Saaldorf",
        "code": "83416"
    },
    {
        "name": "Hartha",
        "code": "04746"
    },
    {
        "name": "Schönwalde",
        "code": "14621"
    },
    {
        "name": "Wiesa",
        "code": "09488"
    },
    {
        "name": "Potsdam",
        "code": "14471"
    },
    {
        "name": "Böbrach",
        "code": "94255"
    },
    {
        "name": "Lam",
        "code": "93462"
    },
    {
        "name": "Stubenberg",
        "code": "94166"
    },
    {
        "name": "Ostrau",
        "code": "04749"
    },
    {
        "name": "Burow",
        "code": "17089"
    },
    {
        "name": "Neubrandenburg",
        "code": "17033"
    },
    {
        "name": "Berlin Spandau",
        "code": "13597"
    },
    {
        "name": "Weißenborn, Oberschöna",
        "code": "09600"
    },
    {
        "name": "Bad Füssing",
        "code": "94072"
    },
    {
        "name": "Berlin Zehlendorf",
        "code": "14165"
    },
    {
        "name": "Berlin Tegel",
        "code": "13507"
    },
    {
        "name": "Passau",
        "code": "94036"
    },
    {
        "name": "Reinsberg",
        "code": "09634"
    },
    {
        "name": "Greifswald",
        "code": "17489"
    },
    {
        "name": "Käbschütztal, Klipphausen, Diera-Zehren",
        "code": "01665"
    },
    {
        "name": "Berlin Kreuzberg",
        "code": "10961"
    },
    {
        "name": "Berlin",
        "code": "12305"
    },
    {
        "name": "Berlin Pankow",
        "code": "13187"
    },
    {
        "name": "Berlin Friedrichshain",
        "code": "10249"
    },
    {
        "name": "Ringelai",
        "code": "94160"
    },
    {
        "name": "Engelthal/Offenhausen",
        "code": "91238"
    },
    {
        "name": "Bad Bibra, Finne u.a.",
        "code": "06647"
    },
    {
        "name": "Beilngries",
        "code": "92339"
    },
    {
        "name": "Wallhausen, Blankenheim",
        "code": "06528"
    },
    {
        "name": "Neuried",
        "code": "82061"
    },
    {
        "name": "Pullach i. Isartal",
        "code": "82049"
    },
    {
        "name": "München",
        "code": "81379"
    },
    {
        "name": "Rosenthal am Rennsteig",
        "code": "07366"
    },
    {
        "name": "Grafengehaig",
        "code": "95356"
    },
    {
        "name": "Mindelstetten",
        "code": "93349"
    },
    {
        "name": "Himmelkron",
        "code": "95502"
    },
    {
        "name": "Laucha an der Unstrut",
        "code": "06636"
    },
    {
        "name": "Marktschorgast",
        "code": "95509"
    },
    {
        "name": "Spornitz",
        "code": "19372"
    },
    {
        "name": "Waakirchen",
        "code": "83666"
    },
    {
        "name": "Brunnthal",
        "code": "85649"
    },
    {
        "name": "Warngau",
        "code": "83627"
    },
    {
        "name": "Edelsfeld",
        "code": "92265"
    },
    {
        "name": "Perleberg, Berge u.a.",
        "code": "19348"
    },
    {
        "name": "Vorbach",
        "code": "95519"
    },
    {
        "name": "Kröpelin, Carinerland",
        "code": "18236"
    },
    {
        "name": "Warmensteinach",
        "code": "95485"
    },
    {
        "name": "Petersberg",
        "code": "06193"
    },
    {
        "name": "Hirschberg",
        "code": "07927"
    },
    {
        "name": "Mücheln",
        "code": "06255"
    },
    {
        "name": "Abensberg",
        "code": "93326"
    },
    {
        "name": "Bad Klosterlausnitz",
        "code": "07639"
    },
    {
        "name": "Markt Schwaben",
        "code": "85570"
    },
    {
        "name": "Bad Köstritz",
        "code": "07586"
    },
    {
        "name": "Bruckmühl",
        "code": "83052"
    },
    {
        "name": "Berlin Oberschöneweide",
        "code": "12459"
    },
    {
        "name": "Prenzlau, Nordwestuckermark u.a.",
        "code": "17291"
    },
    {
        "name": "Königs Wusterhausen",
        "code": "15711"
    },
    {
        "name": "Uckerland, Groß Luckow, Schönhausen",
        "code": "17337"
    },
    {
        "name": "Dresden",
        "code": "01217"
    },
    {
        "name": "Ottendorf-Okrilla",
        "code": "01458"
    },
    {
        "name": "Wolgast",
        "code": "17438"
    },
    {
        "name": "Karlshagen",
        "code": "17449"
    },
    {
        "name": "Wendisch Rietz",
        "code": "15864"
    },
    {
        "name": "Brüssow",
        "code": "17326"
    },
    {
        "name": "Weißwasser, Boxberg",
        "code": "02943"
    },
    {
        "name": "Neusalza-Spremberg",
        "code": "02742"
    },
    {
        "name": "Rheinböllen",
        "code": "55494"
    },
    {
        "name": "Neuenburg am Rhein",
        "code": "79395"
    },
    {
        "name": "Odenbach",
        "code": "67748"
    },
    {
        "name": "Braubach",
        "code": "56338"
    },
    {
        "name": "Endingen am Kaiserstuhl",
        "code": "79346"
    },
    {
        "name": "Freiburg im Breisgau",
        "code": "79112"
    },
    {
        "name": "Schneckenhausen",
        "code": "67699"
    },
    {
        "name": "Hamm",
        "code": "59067"
    },
    {
        "name": "Münstertal",
        "code": "79244"
    },
    {
        "name": "Ettenheim",
        "code": "77955"
    },
    {
        "name": "Malterdingen",
        "code": "79364"
    },
    {
        "name": "Reute",
        "code": "79276"
    },
    {
        "name": "Roetgen",
        "code": "52159"
    },
    {
        "name": "Mönchengladbach",
        "code": "41179"
    },
    {
        "name": "Mönchengladbach",
        "code": "41069"
    },
    {
        "name": "Perl",
        "code": "66706"
    },
    {
        "name": "Viersen",
        "code": "41747"
    },
    {
        "name": "Issum",
        "code": "47661"
    },
    {
        "name": "Ayl, Trassem u.a.",
        "code": "54441"
    },
    {
        "name": "Bedburg",
        "code": "50181"
    },
    {
        "name": "Wesel",
        "code": "46487"
    },
    {
        "name": "Tawern",
        "code": "54456"
    },
    {
        "name": "Vettweiß",
        "code": "52391"
    },
    {
        "name": "Kerpen",
        "code": "50170"
    },
    {
        "name": "Rommerskirchen",
        "code": "41569"
    },
    {
        "name": "Trier",
        "code": "54290"
    },
    {
        "name": "Vreden",
        "code": "48691"
    },
    {
        "name": "Duisburg",
        "code": "47053"
    },
    {
        "name": "Nalbach",
        "code": "66809"
    },
    {
        "name": "Großlittgen",
        "code": "54534"
    },
    {
        "name": "Köln",
        "code": "50859"
    },
    {
        "name": "Köln",
        "code": "50858"
    },
    {
        "name": "Düsseldorf",
        "code": "40595"
    },
    {
        "name": "Dorsten",
        "code": "46284"
    },
    {
        "name": "Köln",
        "code": "50969"
    },
    {
        "name": "Köln",
        "code": "50674"
    },
    {
        "name": "Neuhütten",
        "code": "54422"
    },
    {
        "name": "Solingen",
        "code": "42699"
    },
    {
        "name": "Saarbrücken",
        "code": "66121"
    },
    {
        "name": "Kempenich",
        "code": "56746"
    },
    {
        "name": "Wachtberg",
        "code": "53343"
    },
    {
        "name": "Wipperfürth",
        "code": "51688"
    },
    {
        "name": "Ruppichteroth",
        "code": "53809"
    },
    {
        "name": "Waldbreitbach, Hasuen",
        "code": "56588"
    },
    {
        "name": "Hagen",
        "code": "58089"
    },
    {
        "name": "Bruchmühlbach-Miesau",
        "code": "66892"
    },
    {
        "name": "Aurich",
        "code": "26607"
    },
    {
        "name": "Troisdorf",
        "code": "53842"
    },
    {
        "name": "Wuppertal",
        "code": "42117"
    },
    {
        "name": "Enkirch u.a.",
        "code": "56850"
    },
    {
        "name": "Hoppstädten-Weiersbach",
        "code": "55768"
    },
    {
        "name": "Wuppertal",
        "code": "42369"
    },
    {
        "name": "Brücken, Oberbrombach u.a.",
        "code": "55767"
    },
    {
        "name": "Recklinghausen",
        "code": "45657"
    },
    {
        "name": "Oer-Erkenschwick",
        "code": "45739"
    },
    {
        "name": "Wuppertal",
        "code": "42289"
    },
    {
        "name": "Bochum",
        "code": "44787"
    },
    {
        "name": "Rheinbreitbach",
        "code": "53619"
    },
    {
        "name": "Herne",
        "code": "44623"
    },
    {
        "name": "Hagen",
        "code": "58089"
    },
    {
        "name": "Herzlake, Dohren",
        "code": "49770"
    },
    {
        "name": "Nürnberg",
        "code": "90439"
    },
    {
        "name": "Rätzlingen, Wegenstedt, Calvörde, Böddensell u.a.",
        "code": "39359"
    },
    {
        "name": "Utting a. Ammersee",
        "code": "86919"
    },
    {
        "name": "Uffing a. Staffelsee",
        "code": "82449"
    },
    {
        "name": "Nürnberg",
        "code": "90403"
    },
    {
        "name": "Wielenbach",
        "code": "82407"
    },
    {
        "name": "Nürnberg",
        "code": "90482"
    },
    {
        "name": "Sonneberg",
        "code": "96515"
    },
    {
        "name": "Wegeleben",
        "code": "38828"
    },
    {
        "name": "Nürnberg",
        "code": "90473"
    },
    {
        "name": "Nürnberg",
        "code": "90411"
    },
    {
        "name": "Neuhaus-Schierschnitz, Judenbach",
        "code": "96524"
    },
    {
        "name": "Eckental",
        "code": "90542"
    },
    {
        "name": "Langenmosen",
        "code": "86571"
    },
    {
        "name": "Aresing",
        "code": "86561"
    },
    {
        "name": "Eitensheim",
        "code": "85117"
    },
    {
        "name": "Obertrubach",
        "code": "91286"
    },
    {
        "name": "Ludwigshafen am Rhein",
        "code": "67067"
    },
    {
        "name": "Neuwerk",
        "code": "27499"
    },
    {
        "name": "Dettighofen",
        "code": "79802"
    },
    {
        "name": "Gernsheim",
        "code": "64579"
    },
    {
        "name": "Bremerhaven",
        "code": "27572"
    },
    {
        "name": "Süderoog, Pellworm",
        "code": "25849"
    },
    {
        "name": "Willingen (Upland)",
        "code": "34508"
    },
    {
        "name": "Ladenburg",
        "code": "68526"
    },
    {
        "name": "Tuningen",
        "code": "78609"
    },
    {
        "name": "Hemsbach",
        "code": "69502"
    },
    {
        "name": "Walldorf",
        "code": "69190"
    },
    {
        "name": "Egelsbach",
        "code": "63329"
    },
    {
        "name": "Delmenhorst",
        "code": "27751"
    },
    {
        "name": "Ispringen",
        "code": "75228"
    },
    {
        "name": "Darmstadt",
        "code": "64287"
    },
    {
        "name": "Spaichingen",
        "code": "78549"
    },
    {
        "name": "Frankfurt am Main, Opernturm",
        "code": "60306"
    },
    {
        "name": "Bad Salzuflen",
        "code": "32105"
    },
    {
        "name": "Nordleda",
        "code": "21765"
    },
    {
        "name": "Abtsteinach",
        "code": "69518"
    },
    {
        "name": "Hirschhorn, Brombach, Heddesbach",
        "code": "69434"
    },
    {
        "name": "Kürnbach",
        "code": "75057"
    },
    {
        "name": "Bremen",
        "code": "28209"
    },
    {
        "name": "Aidlingen",
        "code": "71134"
    },
    {
        "name": "Ostelsheim",
        "code": "75395"
    },
    {
        "name": "Neustetten",
        "code": "72149"
    },
    {
        "name": "Bremervörde",
        "code": "27432"
    },
    {
        "name": "Husum, Schwesing u.a.",
        "code": "25813"
    },
    {
        "name": "Leibertingen, Buchheim",
        "code": "88637"
    },
    {
        "name": "Güglingen",
        "code": "74363"
    },
    {
        "name": "Waldbrunn",
        "code": "69429"
    },
    {
        "name": "Gerlingen",
        "code": "70839"
    },
    {
        "name": "Mainaschaff",
        "code": "63814"
    },
    {
        "name": "Selsingen",
        "code": "27446"
    },
    {
        "name": "Nordheim",
        "code": "74226"
    },
    {
        "name": "Heeßen, Bad Eilsen",
        "code": "31707"
    },
    {
        "name": "Steinenbronn",
        "code": "71144"
    },
    {
        "name": "Schwabstedt",
        "code": "25876"
    },
    {
        "name": "Naumburg",
        "code": "34311"
    },
    {
        "name": "Schlaitdorf",
        "code": "72667"
    },
    {
        "name": "Mönchberg",
        "code": "63933"
    },
    {
        "name": "Reutlingen",
        "code": "72762"
    },
    {
        "name": "Lüdersfeld",
        "code": "31702"
    },
    {
        "name": "Eningen",
        "code": "72800"
    },
    {
        "name": "Riederich",
        "code": "72585"
    },
    {
        "name": "Heimbuchenthal",
        "code": "63872"
    },
    {
        "name": "Laufach",
        "code": "63846"
    },
    {
        "name": "Grafenberg",
        "code": "72661"
    },
    {
        "name": "Gudensberg",
        "code": "34281"
    },
    {
        "name": "Dettingen an der Erms",
        "code": "72581"
    },
    {
        "name": "Hameln",
        "code": "31789"
    },
    {
        "name": "Börm",
        "code": "24863"
    },
    {
        "name": "Oppenweiler",
        "code": "71570"
    },
    {
        "name": "Eschenbach",
        "code": "73107"
    },
    {
        "name": "Birkenfeld",
        "code": "97834"
    },
    {
        "name": "Moisburg",
        "code": "21647"
    },
    {
        "name": "Hauneck",
        "code": "36282"
    },
    {
        "name": "Aukrug, Wiedenborstel",
        "code": "24613"
    },
    {
        "name": "Schacht-Audorf",
        "code": "24790"
    },
    {
        "name": "Bad Brückenau",
        "code": "97769"
    },
    {
        "name": "Gössenheim",
        "code": "97780"
    },
    {
        "name": "Altheim",
        "code": "89605"
    },
    {
        "name": "Eußenheim",
        "code": "97776"
    },
    {
        "name": "Bredenbek",
        "code": "24796"
    },
    {
        "name": "Lentföhrden",
        "code": "24632"
    },
    {
        "name": "Handeloh",
        "code": "21256"
    },
    {
        "name": "Blaufelden",
        "code": "74572"
    },
    {
        "name": "Rasdorf",
        "code": "36169"
    },
    {
        "name": "Arnstein",
        "code": "97450"
    },
    {
        "name": "Hamburg",
        "code": "22457"
    },
    {
        "name": "Hamburg",
        "code": "20257"
    },
    {
        "name": "Adelheidsdorf",
        "code": "29352"
    },
    {
        "name": "Hamburg",
        "code": "20539"
    },
    {
        "name": "Hamburg",
        "code": "22303"
    },
    {
        "name": "Schönau a.d. Brend",
        "code": "97659"
    },
    {
        "name": "Tangstedt",
        "code": "22889"
    },
    {
        "name": "Oberstdorf",
        "code": "87561"
    },
    {
        "name": "Westhausen",
        "code": "73463"
    },
    {
        "name": "Geslau",
        "code": "91608"
    },
    {
        "name": "Bopfingen",
        "code": "73441"
    },
    {
        "name": "Mechtersen",
        "code": "21358"
    },
    {
        "name": "Rödelsee",
        "code": "97348"
    },
    {
        "name": "Burk",
        "code": "91596"
    },
    {
        "name": "Lauenburg/Elbe",
        "code": "21481"
    },
    {
        "name": "Uelzen",
        "code": "29525"
    },
    {
        "name": "Aitrang",
        "code": "87648"
    },
    {
        "name": "Malente, Kirchnüchel",
        "code": "23714"
    },
    {
        "name": "Ziemetshausen",
        "code": "86473"
    },
    {
        "name": "Wahrenholz",
        "code": "29399"
    },
    {
        "name": "Osterwieck",
        "code": "38835"
    },
    {
        "name": "Römstedt",
        "code": "29591"
    },
    {
        "name": "Bad Schwartau",
        "code": "23611"
    },
    {
        "name": "Roßhaupten",
        "code": "87672"
    },
    {
        "name": "Lübeck",
        "code": "23564"
    },
    {
        "name": "Königslutter am Elm",
        "code": "38154"
    },
    {
        "name": "Augsburg",
        "code": "86199"
    },
    {
        "name": "Untermeitingen",
        "code": "86836"
    },
    {
        "name": "Unterdießen",
        "code": "86944"
    },
    {
        "name": "Zirndorf",
        "code": "90513"
    },
    {
        "name": "Rottenbuch",
        "code": "82401"
    },
    {
        "name": "Ettal",
        "code": "82488"
    },
    {
        "name": "Katzhütte",
        "code": "98746"
    },
    {
        "name": "Erfurt",
        "code": "99091"
    },
    {
        "name": "Weißensee",
        "code": "99631"
    },
    {
        "name": "Weferlingen, Behnsdorf, Belsdorf u.a.",
        "code": "39356"
    },
    {
        "name": "Ballenstedt, Harzgerode",
        "code": "06493"
    },
    {
        "name": "Königsee-Rottenbach u.a.",
        "code": "07426"
    },
    {
        "name": "Nürnberg",
        "code": "90429"
    },
    {
        "name": "Erfurt",
        "code": "99096"
    },
    {
        "name": "Ebertsheim",
        "code": "67280"
    },
    {
        "name": "Lauf",
        "code": "77886"
    },
    {
        "name": "Oppenau",
        "code": "77728"
    },
    {
        "name": "Bad Rothenfelde",
        "code": "49214"
    },
    {
        "name": "Erndtebrück",
        "code": "57339"
    },
    {
        "name": "Triberg im Schwarzwald",
        "code": "78098"
    },
    {
        "name": "Hagenbach",
        "code": "76767"
    },
    {
        "name": "Freisbach",
        "code": "67361"
    },
    {
        "name": "Muggensturm",
        "code": "76461"
    },
    {
        "name": "Langenberg",
        "code": "33449"
    },
    {
        "name": "Dannstadt-Schauernheim",
        "code": "67125"
    },
    {
        "name": "Stemwede",
        "code": "32351"
    },
    {
        "name": "Wenningstedt-Braderup (Sylt)",
        "code": "25996"
    },
    {
        "name": "Harthausen",
        "code": "67376"
    },
    {
        "name": "Stühlingen",
        "code": "79780"
    },
    {
        "name": "Kampen (Sylt)",
        "code": "25999"
    },
    {
        "name": "Worms",
        "code": "67547"
    },
    {
        "name": "Karlsruhe",
        "code": "76185"
    },
    {
        "name": "Flörsheim am Main",
        "code": "65439"
    },
    {
        "name": "Riedstadt",
        "code": "64560"
    },
    {
        "name": "Ludwigshafen am Rhein",
        "code": "67063"
    },
    {
        "name": "Friesenheim",
        "code": "77948"
    },
    {
        "name": "Meudt, Molsberg, Hundsangen, Niederahr u.a.",
        "code": "56414"
    },
    {
        "name": "Wöllstein",
        "code": "55597"
    },
    {
        "name": "Stegen",
        "code": "79252"
    },
    {
        "name": "Sande",
        "code": "26452"
    },
    {
        "name": "Kirrweiler (Pfalz)",
        "code": "67489"
    },
    {
        "name": "Siegen",
        "code": "57076"
    },
    {
        "name": "Landau in der Pfalz",
        "code": "76829"
    },
    {
        "name": "Kiedrich",
        "code": "65399"
    },
    {
        "name": "Osnabrück",
        "code": "49086"
    },
    {
        "name": "Schlüchtern",
        "code": "36381"
    },
    {
        "name": "Römerstein",
        "code": "72587"
    },
    {
        "name": "Schorndorf",
        "code": "73614"
    },
    {
        "name": "Horst",
        "code": "25358"
    },
    {
        "name": "Ohmden",
        "code": "73275"
    },
    {
        "name": "Horneburg",
        "code": "21640"
    },
    {
        "name": "Urbach",
        "code": "73660"
    },
    {
        "name": "Plüderhausen",
        "code": "73655"
    },
    {
        "name": "Adelberg",
        "code": "73099"
    },
    {
        "name": "Dielmissen",
        "code": "37633"
    },
    {
        "name": "Bomlitz",
        "code": "29699"
    },
    {
        "name": "Struxdorf, Schnarup-Thumby",
        "code": "24891"
    },
    {
        "name": "Tostedt, Kakenstorf u.a.",
        "code": "21255"
    },
    {
        "name": "Jevenstedt",
        "code": "24808"
    },
    {
        "name": "Mohrkirch, Rügge",
        "code": "24405"
    },
    {
        "name": "Hannover",
        "code": "30457"
    },
    {
        "name": "Blaubeuren",
        "code": "89143"
    },
    {
        "name": "Sigmarszell",
        "code": "88138"
    },
    {
        "name": "Grünsfeld",
        "code": "97947"
    },
    {
        "name": "Stadt Schwäbisch Gmünd",
        "code": "73529"
    },
    {
        "name": "Vogt",
        "code": "88267"
    },
    {
        "name": "Buchholz in der Nordheide",
        "code": "21244"
    },
    {
        "name": "Nortorf",
        "code": "24589"
    },
    {
        "name": "Wolpertshausen",
        "code": "74549"
    },
    {
        "name": "Hannover",
        "code": "30627"
    },
    {
        "name": "Rosengarten",
        "code": "21224"
    },
    {
        "name": "Friedewald",
        "code": "36289"
    },
    {
        "name": "Leinzell",
        "code": "73575"
    },
    {
        "name": "Ilshofen",
        "code": "74532"
    },
    {
        "name": "Ulm",
        "code": "89081"
    },
    {
        "name": "Neumünster",
        "code": "24536"
    },
    {
        "name": "Eschwege",
        "code": "37269"
    },
    {
        "name": "Hamburg",
        "code": "20253"
    },
    {
        "name": "Creglingen",
        "code": "97993"
    },
    {
        "name": "Norderstedt",
        "code": "22850"
    },
    {
        "name": "Celle",
        "code": "29225"
    },
    {
        "name": "Aitrach",
        "code": "88319"
    },
    {
        "name": "Illerrieden",
        "code": "89186"
    },
    {
        "name": "Bönebüttel",
        "code": "24620"
    },
    {
        "name": "Kaltennordheim",
        "code": "36452"
    },
    {
        "name": "Seesen",
        "code": "38723"
    },
    {
        "name": "Weißenborn",
        "code": "37299"
    },
    {
        "name": "Memmingen",
        "code": "87700"
    },
    {
        "name": "Kiel",
        "code": "24114"
    },
    {
        "name": "Boos",
        "code": "87737"
    },
    {
        "name": "Lauchheim",
        "code": "73466"
    },
    {
        "name": "Wolfertschwenden",
        "code": "87787"
    },
    {
        "name": "Langlingen",
        "code": "29364"
    },
    {
        "name": "Hohne",
        "code": "29362"
    },
    {
        "name": "Mellrichstadt",
        "code": "97638"
    },
    {
        "name": "Wensin",
        "code": "23827"
    },
    {
        "name": "Ebstorf",
        "code": "29574"
    },
    {
        "name": "Illesheim",
        "code": "91471"
    },
    {
        "name": "Oberscheinfeld",
        "code": "91483"
    },
    {
        "name": "Riesbürg",
        "code": "73469"
    },
    {
        "name": "Wonfurt",
        "code": "97539"
    },
    {
        "name": "Ederheim",
        "code": "86739"
    },
    {
        "name": "Unteregg",
        "code": "87782"
    },
    {
        "name": "Marktoffingen",
        "code": "86748"
    },
    {
        "name": "Artlenburg",
        "code": "21380"
    },
    {
        "name": "Rauhenebrach",
        "code": "96181"
    },
    {
        "name": "Goslar",
        "code": "38644"
    },
    {
        "name": "Glasau",
        "code": "23719"
    },
    {
        "name": "Geseke",
        "code": "59590"
    },
    {
        "name": "Oberhausen-Rheinhausen",
        "code": "68794"
    },
    {
        "name": "Wetzlar",
        "code": "35578"
    },
    {
        "name": "Hatzfeld",
        "code": "35116"
    },
    {
        "name": "Bielefeld",
        "code": "33659"
    },
    {
        "name": "Wetzlar Garbeinheim",
        "code": "35583"
    },
    {
        "name": "Bielefeld",
        "code": "33602"
    },
    {
        "name": "Bielefeld",
        "code": "33604"
    },
    {
        "name": "Bielefeld",
        "code": "33607"
    },
    {
        "name": "Gießen",
        "code": "35398"
    },
    {
        "name": "Rottweil",
        "code": "78628"
    },
    {
        "name": "Frankfurt am Main",
        "code": "60486"
    },
    {
        "name": "Heidelberg",
        "code": "69124"
    },
    {
        "name": "Frankfurt am Main",
        "code": "60326"
    },
    {
        "name": "Bremen",
        "code": "28757"
    },
    {
        "name": "Bad Salzuflen",
        "code": "32107"
    },
    {
        "name": "Frankfurt am Main",
        "code": "60598"
    },
    {
        "name": "Sulingen",
        "code": "27232"
    },
    {
        "name": "Neukirchen, Aventoft",
        "code": "25927"
    },
    {
        "name": "Garding, Osterhever, Poppenbüll u.a.",
        "code": "25836"
    },
    {
        "name": "Ober-Ramstadt",
        "code": "64372"
    },
    {
        "name": "Hausen ob Verena",
        "code": "78595"
    },
    {
        "name": "Maulbronn",
        "code": "75433"
    },
    {
        "name": "Weil der Stadt",
        "code": "71263"
    },
    {
        "name": "Rielasingen-Worblingen",
        "code": "78239"
    },
    {
        "name": "Bremen",
        "code": "28203"
    },
    {
        "name": "Obernheim",
        "code": "72364"
    },
    {
        "name": "Wiernsheim",
        "code": "75446"
    },
    {
        "name": "Ihlienworth",
        "code": "21775"
    },
    {
        "name": "Hanau",
        "code": "63454"
    },
    {
        "name": "Kalletal",
        "code": "32689"
    },
    {
        "name": "Gemünden",
        "code": "35285"
    },
    {
        "name": "Rutesheim",
        "code": "71277"
    },
    {
        "name": "Asendorf",
        "code": "27330"
    },
    {
        "name": "Uelvesbüll, Witzwort",
        "code": "25889"
    },
    {
        "name": "Glauburg",
        "code": "63695"
    },
    {
        "name": "Kirtorf",
        "code": "36320"
    },
    {
        "name": "Reichenau",
        "code": "78479"
    },
    {
        "name": "Großenwiehe, Lindewitt",
        "code": "24969"
    },
    {
        "name": "Leese",
        "code": "31633"
    },
    {
        "name": "Windbergen",
        "code": "25729"
    },
    {
        "name": "Goldbach",
        "code": "63773"
    },
    {
        "name": "Nienburg/Weser",
        "code": "31582"
    },
    {
        "name": "Pfullingen",
        "code": "72793"
    },
    {
        "name": "Stuttgart",
        "code": "70191"
    },
    {
        "name": "Lügde",
        "code": "32676"
    },
    {
        "name": "Lauenhagen",
        "code": "31714"
    },
    {
        "name": "Ostfildern",
        "code": "73760"
    },
    {
        "name": "Drochtersen",
        "code": "21706"
    },
    {
        "name": "Heiligenberg",
        "code": "88633"
    },
    {
        "name": "Daisendorf",
        "code": "88718"
    },
    {
        "name": "Freudenberg, Collenberg",
        "code": "97896"
    },
    {
        "name": "Steimbke",
        "code": "31634"
    },
    {
        "name": "Eberstadt",
        "code": "74246"
    },
    {
        "name": "Hofgeismar",
        "code": "34369"
    },
    {
        "name": "Harrislee",
        "code": "24955"
    },
    {
        "name": "Stadtprozelten",
        "code": "97909"
    },
    {
        "name": "Beidenfleth, Klein Kampen",
        "code": "25573"
    },
    {
        "name": "Widdern",
        "code": "74259"
    },
    {
        "name": "Hohn",
        "code": "24806"
    },
    {
        "name": "Wiesthal",
        "code": "97859"
    },
    {
        "name": "Tetenhusen",
        "code": "24817"
    },
    {
        "name": "Markt Taschendorf",
        "code": "91480"
    },
    {
        "name": "Trautskirchen",
        "code": "90619"
    },
    {
        "name": "Uehlfeld",
        "code": "91486"
    },
    {
        "name": "Neustadt",
        "code": "23730"
    },
    {
        "name": "Oberhaid",
        "code": "96173"
    },
    {
        "name": "Halblech",
        "code": "87642"
    },
    {
        "name": "Baunach",
        "code": "96148"
    },
    {
        "name": "Eisfeld, Auengrund",
        "code": "98673"
    },
    {
        "name": "Nordendorf",
        "code": "86695"
    },
    {
        "name": "Greußen Clingen Großenehrich",
        "code": "99718"
    },
    {
        "name": "Adelsdorf",
        "code": "91325"
    },
    {
        "name": "Rennau, Querenhorst, Mariental, Grasleben",
        "code": "38368"
    },
    {
        "name": "Südharz, Berga",
        "code": "06536"
    },
    {
        "name": "Egling a.d. Paar",
        "code": "86492"
    },
    {
        "name": "Hohenpeißenberg",
        "code": "82383"
    },
    {
        "name": "Rödental",
        "code": "96472"
    },
    {
        "name": "Erfurt",
        "code": "99089"
    },
    {
        "name": "Obergriesbach",
        "code": "86573"
    },
    {
        "name": "Werlte, Vrees, Lahn",
        "code": "49757"
    },
    {
        "name": "Thaleischweiler-Fröschen",
        "code": "66987"
    },
    {
        "name": "Vallendar",
        "code": "56179"
    },
    {
        "name": "Rehborn",
        "code": "55592"
    },
    {
        "name": "Rothselberg u.a.",
        "code": "67753"
    },
    {
        "name": "Wiesmoor",
        "code": "26639"
    },
    {
        "name": "Münchweiler an der Rodalb",
        "code": "66981"
    },
    {
        "name": "Barßel",
        "code": "26676"
    },
    {
        "name": "Heltersberg",
        "code": "67716"
    },
    {
        "name": "Trippstadt u.a.",
        "code": "67705"
    },
    {
        "name": "Nastätten u.a.",
        "code": "56355"
    },
    {
        "name": "Ostbevern",
        "code": "48346"
    },
    {
        "name": "Neuried",
        "code": "77743"
    },
    {
        "name": "Teningen",
        "code": "79331"
    },
    {
        "name": "Maulburg",
        "code": "79689"
    },
    {
        "name": "Ebringen",
        "code": "79285"
    },
    {
        "name": "Gebhardshain",
        "code": "57580"
    },
    {
        "name": "Alzey",
        "code": "55232"
    },
    {
        "name": "Taunusstein",
        "code": "65232"
    },
    {
        "name": "Wackernheim",
        "code": "55263"
    },
    {
        "name": "Armsheim",
        "code": "55288"
    },
    {
        "name": "Haiger",
        "code": "35708"
    },
    {
        "name": "Höchenschwand",
        "code": "79862"
    },
    {
        "name": "Dogern",
        "code": "79804"
    },
    {
        "name": "Hochstadt",
        "code": "76879"
    },
    {
        "name": "Steinmauern",
        "code": "76479"
    },
    {
        "name": "Warstein",
        "code": "59581"
    },
    {
        "name": "Bad Camberg",
        "code": "65520"
    },
    {
        "name": "Wiesbaden",
        "code": "65205"
    },
    {
        "name": "Weingarten (Pfalz)",
        "code": "67366"
    },
    {
        "name": "Kuhardt",
        "code": "76773"
    },
    {
        "name": "Itzehoe",
        "code": "25524"
    },
    {
        "name": "Fintel, Lauenbrück u.a.",
        "code": "27389"
    },
    {
        "name": "Ebenweiler",
        "code": "88370"
    },
    {
        "name": "Neustadt a. Main",
        "code": "97845"
    },
    {
        "name": "Holzmaden",
        "code": "73271"
    },
    {
        "name": "Nübel",
        "code": "24881"
    },
    {
        "name": "Busdorf",
        "code": "24866"
    },
    {
        "name": "Weingarten",
        "code": "88250"
    },
    {
        "name": "Heroldstatt",
        "code": "72535"
    },
    {
        "name": "Freiburg im Breisgau",
        "code": "79106"
    },
    {
        "name": "Alpenrod",
        "code": "57642"
    },
    {
        "name": "Unnau",
        "code": "57648"
    },
    {
        "name": "Bretzenheim",
        "code": "55559"
    },
    {
        "name": "Mudersbach",
        "code": "57555"
    },
    {
        "name": "Limburg",
        "code": "65556"
    },
    {
        "name": "Wilhelmshaven",
        "code": "26388"
    },
    {
        "name": "Neustadt an der Weinstraße",
        "code": "67434"
    },
    {
        "name": "Burgschwalbach",
        "code": "65558"
    },
    {
        "name": "Alzey",
        "code": "55232"
    },
    {
        "name": "Hettenleidelheim",
        "code": "67310"
    },
    {
        "name": "Bernsdorf",
        "code": "02994"
    },
    {
        "name": "Hohnstein",
        "code": "01848"
    },
    {
        "name": "Spreetal, Elsterheide",
        "code": "02979"
    },
    {
        "name": "Neukirch/Lausitz",
        "code": "01904"
    },
    {
        "name": "Sebnitz",
        "code": "01855"
    },
    {
        "name": "Wilthen",
        "code": "02681"
    },
    {
        "name": "Treplin, Jacobsdorf, Frankfurt (Oder)",
        "code": "15236"
    },
    {
        "name": "Berlin Weißensee",
        "code": "13086"
    },
    {
        "name": "Berlin Britz",
        "code": "12359"
    },
    {
        "name": "Berlin",
        "code": "12687"
    },
    {
        "name": "Berlin",
        "code": "12685"
    },
    {
        "name": "Dippoldiswalde",
        "code": "01744"
    },
    {
        "name": "Dresden",
        "code": "01069"
    },
    {
        "name": "Kröslin, Krummin, Lassan u.a.",
        "code": "17440"
    },
    {
        "name": "Weichs",
        "code": "85258"
    },
    {
        "name": "Bismark",
        "code": "39628"
    },
    {
        "name": "Wolfratshausen",
        "code": "82515"
    },
    {
        "name": "Hebertshausen",
        "code": "85241"
    },
    {
        "name": "Wismar",
        "code": "23970"
    },
    {
        "name": "München",
        "code": "81375"
    },
    {
        "name": "Untersteinach",
        "code": "95369"
    },
    {
        "name": "Rohrbach",
        "code": "85296"
    },
    {
        "name": "Weigendorf",
        "code": "91249"
    },
    {
        "name": "Güsten",
        "code": "39439"
    },
    {
        "name": "Kupferberg",
        "code": "95362"
    },
    {
        "name": "Brüel",
        "code": "19412"
    },
    {
        "name": "Magdeburg",
        "code": "39128"
    },
    {
        "name": "Jena",
        "code": "07747"
    },
    {
        "name": "München",
        "code": "81673"
    },
    {
        "name": "Parsberg",
        "code": "92331"
    },
    {
        "name": "Feldkirchen",
        "code": "85622"
    },
    {
        "name": "Grasbrunn",
        "code": "85630"
    },
    {
        "name": "Köditz",
        "code": "95189"
    },
    {
        "name": "Adelshofen",
        "code": "82276"
    },
    {
        "name": "Nürnberg",
        "code": "90480"
    },
    {
        "name": "Titting",
        "code": "85135"
    },
    {
        "name": "Wallhausen, Blankenheim",
        "code": "06528"
    },
    {
        "name": "Altenkunstadt",
        "code": "96264"
    },
    {
        "name": "Walting",
        "code": "85137"
    },
    {
        "name": "Greding",
        "code": "91171"
    },
    {
        "name": "Freystadt",
        "code": "92342"
    },
    {
        "name": "Eichenau",
        "code": "82223"
    },
    {
        "name": "Schwabhausen",
        "code": "85247"
    },
    {
        "name": "Lehnstedt u.a.",
        "code": "99441"
    },
    {
        "name": "Aachen",
        "code": "52074"
    },
    {
        "name": "Geilenkirchen",
        "code": "52511"
    },
    {
        "name": "Kerken",
        "code": "47647"
    },
    {
        "name": "Schleiden",
        "code": "53937"
    },
    {
        "name": "Hamminkeln",
        "code": "46499"
    },
    {
        "name": "Jünkerath",
        "code": "54584"
    },
    {
        "name": "Wiltingen",
        "code": "54459"
    },
    {
        "name": "Voerde (Niederrhein)",
        "code": "46562"
    },
    {
        "name": "Moers",
        "code": "47443"
    },
    {
        "name": "Leiwen u.a.",
        "code": "54340"
    },
    {
        "name": "Düsseldorf",
        "code": "40239"
    },
    {
        "name": "Wadern",
        "code": "66687"
    },
    {
        "name": "Bottrop",
        "code": "46244"
    },
    {
        "name": "Oberhausen",
        "code": "46047"
    },
    {
        "name": "Hilden, Düsseldorf",
        "code": "40721"
    },
    {
        "name": "Hilden, Düsseldorf",
        "code": "40721"
    },
    {
        "name": "Langenfeld",
        "code": "40764"
    },
    {
        "name": "Saarbrücken",
        "code": "66115"
    },
    {
        "name": "Saarbrücken",
        "code": "66119"
    },
    {
        "name": "Essen",
        "code": "45329"
    },
    {
        "name": "Köln",
        "code": "51067"
    },
    {
        "name": "Gelsenkirchen",
        "code": "45883"
    },
    {
        "name": "Dernau",
        "code": "53507"
    },
    {
        "name": "Wiehl",
        "code": "51674"
    },
    {
        "name": "Medard, Rathskirchen u.a.",
        "code": "67744"
    },
    {
        "name": "Hörstel",
        "code": "48477"
    },
    {
        "name": "Straßenhaus",
        "code": "56587"
    },
    {
        "name": "Vinningen, Trulben, Ruppertsweiler u.a.",
        "code": "66957"
    },
    {
        "name": "Rhauderfehn",
        "code": "26817"
    },
    {
        "name": "Eßweiler",
        "code": "67754"
    },
    {
        "name": "Sobernheim",
        "code": "55566"
    },
    {
        "name": "Wuppertal",
        "code": "42113"
    },
    {
        "name": "Enkirch u.a.",
        "code": "56850"
    },
    {
        "name": "Kürten",
        "code": "51515"
    },
    {
        "name": "Wuppertal",
        "code": "42275"
    },
    {
        "name": "Castrop-Rauxel",
        "code": "44581"
    },
    {
        "name": "Waldmohr",
        "code": "66914"
    },
    {
        "name": "Castrop-Rauxel",
        "code": "44577"
    },
    {
        "name": "Dickenschied u.a.",
        "code": "55483"
    },
    {
        "name": "Bergen",
        "code": "55608"
    },
    {
        "name": "Niederwörresbach",
        "code": "55758"
    },
    {
        "name": "Lengerich u.a.",
        "code": "49838"
    },
    {
        "name": "Neubörger, Neulehe",
        "code": "26909"
    },
    {
        "name": "Loburg, Leitzkau",
        "code": "39279"
    },
    {
        "name": "Langenpreising",
        "code": "85465"
    },
    {
        "name": "Rosenbach",
        "code": "08539"
    },
    {
        "name": "Burglengenfeld",
        "code": "93133"
    },
    {
        "name": "Zeulenroda-Triebes, Weißendorf",
        "code": "07950"
    },
    {
        "name": "Rehau",
        "code": "95111"
    },
    {
        "name": "Genthin, Hohenseeden, Zabakuck u.a.",
        "code": "39307"
    },
    {
        "name": "Elmenhorst/Lichtenhagen, Rostock",
        "code": "18107"
    },
    {
        "name": "Elmenhorst/Lichtenhagen, Rostock",
        "code": "18107"
    },
    {
        "name": "Buch a. Erlbach",
        "code": "84172"
    },
    {
        "name": "Thiersheim",
        "code": "95707"
    },
    {
        "name": "Adorf",
        "code": "08626"
    },
    {
        "name": "Fuchsmühl",
        "code": "95689"
    },
    {
        "name": "Landshut",
        "code": "84036"
    },
    {
        "name": "Rohrdorf",
        "code": "83101"
    },
    {
        "name": "Pirk",
        "code": "92712"
    },
    {
        "name": "Landshut",
        "code": "84028"
    },
    {
        "name": "Sandersdorf-Brehna",
        "code": "06796"
    },
    {
        "name": "Bergen",
        "code": "08239"
    },
    {
        "name": "Postau",
        "code": "84103"
    },
    {
        "name": "Tännesberg",
        "code": "92723"
    },
    {
        "name": "Dierhagen",
        "code": "18347"
    },
    {
        "name": "Geiselhöring",
        "code": "94333"
    },
    {
        "name": "Schleching",
        "code": "83259"
    },
    {
        "name": "Tessin, Grammow u.a.",
        "code": "18195"
    },
    {
        "name": "Gerzen",
        "code": "84175"
    },
    {
        "name": "Gstadt a. Chiemsee",
        "code": "83257"
    },
    {
        "name": "Loiching",
        "code": "84180"
    },
    {
        "name": "Hirschfeld",
        "code": "08144"
    },
    {
        "name": "Egglkofen",
        "code": "84546"
    },
    {
        "name": "Gangkofen",
        "code": "84140"
    },
    {
        "name": "Langenleuba-Niederhain",
        "code": "04618"
    },
    {
        "name": "Barth",
        "code": "18356"
    },
    {
        "name": "Geithain",
        "code": "04643"
    },
    {
        "name": "Bogen",
        "code": "94327"
    },
    {
        "name": "Limbach-Oberfrohna",
        "code": "09212"
    },
    {
        "name": "Zahna-Elster",
        "code": "06895"
    },
    {
        "name": "Mehring",
        "code": "84561"
    },
    {
        "name": "Neukirchen/Erzgeb.",
        "code": "09221"
    },
    {
        "name": "Geringswalde",
        "code": "09326"
    },
    {
        "name": "Wermsdorf",
        "code": "04779"
    },
    {
        "name": "Gelenau/Erzgeb.",
        "code": "09423"
    },
    {
        "name": "Chemnitz",
        "code": "09126"
    },
    {
        "name": "Drachselsried",
        "code": "94256"
    },
    {
        "name": "Stralsund",
        "code": "18437"
    },
    {
        "name": "Leubsdorf, Gornau, Augustusburg",
        "code": "09573"
    },
    {
        "name": "Börnichen, Gornau",
        "code": "09437"
    },
    {
        "name": "Marienberg",
        "code": "09496"
    },
    {
        "name": "Leegebruch",
        "code": "16767"
    },
    {
        "name": "Strehla",
        "code": "01616"
    },
    {
        "name": "Berlin Halensee",
        "code": "10711"
    },
    {
        "name": "Berlin-West",
        "code": "13409"
    },
    {
        "name": "Großenhain, Ebersbach u.a.",
        "code": "01561"
    },
    {
        "name": "Meißen",
        "code": "01662"
    },
    {
        "name": "Forstinning",
        "code": "85661"
    },
    {
        "name": "Bockhorn",
        "code": "85461"
    },
    {
        "name": "Neusorg",
        "code": "95700"
    },
    {
        "name": "Halle/ Saale",
        "code": "06132"
    },
    {
        "name": "Weiherhammer",
        "code": "92729"
    },
    {
        "name": "Halle/ Saale",
        "code": "06130"
    },
    {
        "name": "Bad Abbach",
        "code": "93077"
    },
    {
        "name": "Oelsnitz",
        "code": "08606"
    },
    {
        "name": "Landsberg",
        "code": "06188"
    },
    {
        "name": "Rostock",
        "code": "18119"
    },
    {
        "name": "Zörbig",
        "code": "06780"
    },
    {
        "name": "Emmering",
        "code": "83550"
    },
    {
        "name": "Rosenheim",
        "code": "83026"
    },
    {
        "name": "Tiefenbach",
        "code": "84184"
    },
    {
        "name": "Ergolding, Landshut",
        "code": "84030"
    },
    {
        "name": "Elsterberg",
        "code": "07985"
    },
    {
        "name": "Plößberg",
        "code": "95703"
    },
    {
        "name": "Roitzsch, Petersroda",
        "code": "06809"
    },
    {
        "name": "Halfing",
        "code": "83128"
    },
    {
        "name": "Frasdorf",
        "code": "83112"
    },
    {
        "name": "Wiesenburg",
        "code": "14827"
    },
    {
        "name": "Vilsbiburg",
        "code": "84137"
    },
    {
        "name": "Prien a. Chiemsee, Herrenchiemssee",
        "code": "83209"
    },
    {
        "name": "Georgenberg",
        "code": "92697"
    },
    {
        "name": "Mähring",
        "code": "95695"
    },
    {
        "name": "Mühldorf a. Inn",
        "code": "84453"
    },
    {
        "name": "Bergen",
        "code": "83346"
    },
    {
        "name": "Fehrbellin, Temnitzquell, Märkisch Linden u.a.",
        "code": "16818"
    },
    {
        "name": "Stein a.d. Traun",
        "code": "83371"
    },
    {
        "name": "Unterdietfurt",
        "code": "84339"
    },
    {
        "name": "Lunzenau",
        "code": "09328"
    },
    {
        "name": "Schneizlreuth",
        "code": "83458"
    },
    {
        "name": "Inzell",
        "code": "83334"
    },
    {
        "name": "Neukirchen",
        "code": "94362"
    },
    {
        "name": "Emmerting",
        "code": "84547"
    },
    {
        "name": "Anger",
        "code": "83454"
    },
    {
        "name": "Arnschwang",
        "code": "93473"
    },
    {
        "name": "Petting",
        "code": "83367"
    },
    {
        "name": "Jüterbog",
        "code": "14913"
    },
    {
        "name": "Ramsau b. Berchtesgaden",
        "code": "83486"
    },
    {
        "name": "Achslach",
        "code": "94250"
    },
    {
        "name": "Möllenhagen",
        "code": "17219"
    },
    {
        "name": "Demmin u.a.",
        "code": "17111"
    },
    {
        "name": "Lichtenau",
        "code": "09244"
    },
    {
        "name": "Chemnitz",
        "code": "09113"
    },
    {
        "name": "Freilassing",
        "code": "83395"
    },
    {
        "name": "Berlin Spandau",
        "code": "13583"
    },
    {
        "name": "Cölpin",
        "code": "17094"
    },
    {
        "name": "Zehdenick",
        "code": "16792"
    },
    {
        "name": "Zeithain",
        "code": "01619"
    },
    {
        "name": "Passau",
        "code": "94036"
    },
    {
        "name": "Berlin Friedenau",
        "code": "12161"
    },
    {
        "name": "Greifswald",
        "code": "17493"
    },
    {
        "name": "Berlin Wedding",
        "code": "13355"
    },
    {
        "name": "Berlin Heinelsdorf",
        "code": "13089"
    },
    {
        "name": "Eichenbarleben, Irxleben, Niederndodeleben u.a.",
        "code": "39167"
    },
    {
        "name": "Unterschleißheim",
        "code": "85716"
    },
    {
        "name": "München",
        "code": "80809"
    },
    {
        "name": "München",
        "code": "80336"
    },
    {
        "name": "Karstädt, Dambeck, Klüß",
        "code": "19357"
    },
    {
        "name": "München",
        "code": "80333"
    },
    {
        "name": "München",
        "code": "80937"
    },
    {
        "name": "Jena, Bucha, Großpürschütz u.a.",
        "code": "07751"
    },
    {
        "name": "Magdeburg",
        "code": "39118"
    },
    {
        "name": "Kreuth",
        "code": "83708"
    },
    {
        "name": "München",
        "code": "81737"
    },
    {
        "name": "München",
        "code": "81735"
    },
    {
        "name": "Lichtenberg",
        "code": "95192"
    },
    {
        "name": "Bürgel u.a.",
        "code": "07616"
    },
    {
        "name": "Speichersdorf",
        "code": "95469"
    },
    {
        "name": "Freising",
        "code": "85356"
    },
    {
        "name": "Eschenbach i.d. OPf.",
        "code": "92676"
    },
    {
        "name": "Magdeburg",
        "code": "39114"
    },
    {
        "name": "Elsendorf",
        "code": "84094"
    },
    {
        "name": "Oberpframmern",
        "code": "85667"
    },
    {
        "name": "Hirschau",
        "code": "92242"
    },
    {
        "name": "Nürnberg",
        "code": "90425"
    },
    {
        "name": "Nürnberg",
        "code": "90459"
    },
    {
        "name": "Adelzhausen",
        "code": "86559"
    },
    {
        "name": "Fürstenfeldbruck",
        "code": "82256"
    },
    {
        "name": "Röthenbach an der Pegnitz",
        "code": "90552"
    },
    {
        "name": "Markt Indersdorf",
        "code": "85229"
    },
    {
        "name": "Planegg/Krailling",
        "code": "82152"
    },
    {
        "name": "Karlskron",
        "code": "85123"
    },
    {
        "name": "Börde-Hakel",
        "code": "39448"
    },
    {
        "name": "Berlin Rummelsburg",
        "code": "10317"
    },
    {
        "name": "Klein Bünzow",
        "code": "17390"
    },
    {
        "name": "Schöneiche bei Berlin",
        "code": "15566"
    },
    {
        "name": "Wegscheid",
        "code": "94110"
    },
    {
        "name": "Storkow",
        "code": "15859"
    },
    {
        "name": "Vogelsang-Warsin, Meiersberg, Mönkebude u.a.",
        "code": "17375"
    },
    {
        "name": "Oderberg u.a.",
        "code": "16248"
    },
    {
        "name": "Schipkau",
        "code": "01994"
    },
    {
        "name": "Zinnowitz",
        "code": "17454"
    },
    {
        "name": "Sebnitz",
        "code": "01855"
    },
    {
        "name": "Frankfurt/ Oder",
        "code": "15234"
    },
    {
        "name": "Emmerich am Rhein",
        "code": "46446"
    },
    {
        "name": "Schwalmtal",
        "code": "41366"
    },
    {
        "name": "Heimbach",
        "code": "52396"
    },
    {
        "name": "Mönchengladbach",
        "code": "41063"
    },
    {
        "name": "Mönchengladbach",
        "code": "41199"
    },
    {
        "name": "Düren",
        "code": "52349"
    },
    {
        "name": "Mönchengladbach",
        "code": "41061"
    },
    {
        "name": "Grevenbroich",
        "code": "41517"
    },
    {
        "name": "Trierweiler",
        "code": "54311"
    },
    {
        "name": "Grevenbroich",
        "code": "41515"
    },
    {
        "name": "Welschbillig, Igel, Aach",
        "code": "54298"
    },
    {
        "name": "Rhede",
        "code": "46414"
    },
    {
        "name": "Duisburg",
        "code": "47226"
    },
    {
        "name": "Weiskirchen",
        "code": "66709"
    },
    {
        "name": "Bettenfeld, Niederöfflingen u.a.",
        "code": "54533"
    },
    {
        "name": "Heusweiler",
        "code": "66265"
    },
    {
        "name": "Ratingen",
        "code": "40883"
    },
    {
        "name": "Deuselbach, Hermeskeil, Rorodt",
        "code": "54411"
    },
    {
        "name": "Köln",
        "code": "50939"
    },
    {
        "name": "Gronau",
        "code": "48599"
    },
    {
        "name": "Neuhütten",
        "code": "54422"
    },
    {
        "name": "Essen",
        "code": "45326"
    },
    {
        "name": "Essen",
        "code": "45257"
    },
    {
        "name": "Weißenthurm",
        "code": "56575"
    },
    {
        "name": "Rheine",
        "code": "48429"
    },
    {
        "name": "Emsdetten",
        "code": "48282"
    },
    {
        "name": "Börger",
        "code": "26904"
    },
    {
        "name": "Boppard",
        "code": "56154"
    },
    {
        "name": "Mittelbrunn, Queidersbach u.a.",
        "code": "66851"
    },
    {
        "name": "Koblenz",
        "code": "56072"
    },
    {
        "name": "Hagen",
        "code": "58093"
    },
    {
        "name": "Dortmund",
        "code": "44329"
    },
    {
        "name": "Kierspe",
        "code": "58566"
    },
    {
        "name": "Bergisch Gladbach",
        "code": "51467"
    },
    {
        "name": "Mandelbachtal",
        "code": "66399"
    },
    {
        "name": "Wuppertal",
        "code": "42103"
    },
    {
        "name": "Herne",
        "code": "44651"
    },
    {
        "name": "Bochum",
        "code": "44793"
    },
    {
        "name": "Bochum",
        "code": "44809"
    },
    {
        "name": "Wuppertal",
        "code": "42277"
    },
    {
        "name": "Bochum",
        "code": "44801"
    },
    {
        "name": "Lindlar",
        "code": "51789"
    },
    {
        "name": "Schwelm",
        "code": "58332"
    },
    {
        "name": "Altenkirchen",
        "code": "66903"
    },
    {
        "name": "Dortmund",
        "code": "44149"
    },
    {
        "name": "Neubörger, Neulehe",
        "code": "26909"
    },
    {
        "name": "Niederwörresbach",
        "code": "55758"
    },
    {
        "name": "Kastellaun",
        "code": "56288"
    },
    {
        "name": "Pfeffelbach",
        "code": "66871"
    },
    {
        "name": "Olsberg",
        "code": "59939"
    },
    {
        "name": "Otterstadt",
        "code": "67166"
    },
    {
        "name": "Bad Endbach",
        "code": "35080"
    },
    {
        "name": "Verl",
        "code": "33415"
    },
    {
        "name": "Simmersfeld",
        "code": "72226"
    },
    {
        "name": "Mannheim",
        "code": "68163"
    },
    {
        "name": "Dobel",
        "code": "75335"
    },
    {
        "name": "Brilon",
        "code": "59929"
    },
    {
        "name": "Villingen-Schwenningen",
        "code": "78054"
    },
    {
        "name": "Bruchsal",
        "code": "76646"
    },
    {
        "name": "Villingen-Schwenningen",
        "code": "78056"
    },
    {
        "name": "Bielefeld",
        "code": "33611"
    },
    {
        "name": "Langeneß",
        "code": "25863"
    },
    {
        "name": "Schwetzingen",
        "code": "68723"
    },
    {
        "name": "Bremerhaven",
        "code": "27570"
    },
    {
        "name": "Geisingen",
        "code": "78187"
    },
    {
        "name": "Rosbach v.d. Höhe",
        "code": "61191"
    },
    {
        "name": "Rauenberg",
        "code": "69231"
    },
    {
        "name": "Frankfurt",
        "code": "60308"
    },
    {
        "name": "Heidelberg",
        "code": "69126"
    },
    {
        "name": "Seitingen-Oberflacht",
        "code": "78606"
    },
    {
        "name": "Fürth",
        "code": "64658"
    },
    {
        "name": "Groß-Zimmern",
        "code": "64846"
    },
    {
        "name": "Sinsheim",
        "code": "74889"
    },
    {
        "name": "Wimsheim",
        "code": "71299"
    },
    {
        "name": "Lilienthal",
        "code": "28865"
    },
    {
        "name": "Maasen, Mellinghausen",
        "code": "27249"
    },
    {
        "name": "Bremen",
        "code": "28329"
    },
    {
        "name": "Twistetal",
        "code": "34477"
    },
    {
        "name": "Riede",
        "code": "27339"
    },
    {
        "name": "Hainburg",
        "code": "63512"
    },
    {
        "name": "Seligenstadt",
        "code": "63500"
    },
    {
        "name": "Bad Arolsen",
        "code": "34454"
    },
    {
        "name": "Pfaffenhofen",
        "code": "74397"
    },
    {
        "name": "Mittelstenahe",
        "code": "21770"
    },
    {
        "name": "Böblingen",
        "code": "71032"
    },
    {
        "name": "Waldbrunn",
        "code": "69429"
    },
    {
        "name": "Alzenau",
        "code": "63755"
    },
    {
        "name": "Schönaich",
        "code": "71101"
    },
    {
        "name": "Schweringen, Warpe, Bücken",
        "code": "27333"
    },
    {
        "name": "Reichenau",
        "code": "78479"
    },
    {
        "name": "Obernkirchen",
        "code": "31683"
    },
    {
        "name": "Rehburg-Loccum",
        "code": "31547"
    },
    {
        "name": "Stuttgart",
        "code": "70597"
    },
    {
        "name": "Konstanz",
        "code": "78462"
    },
    {
        "name": "Krummendeich",
        "code": "21732"
    },
    {
        "name": "Reutlingen",
        "code": "72764"
    },
    {
        "name": "Zierenberg",
        "code": "34289"
    },
    {
        "name": "Fellbach",
        "code": "70736"
    },
    {
        "name": "Apelern, Rodenberg",
        "code": "31552"
    },
    {
        "name": "Linsburg",
        "code": "31636"
    },
    {
        "name": "Marbach am Neckar",
        "code": "71672"
    },
    {
        "name": "Bad Urach",
        "code": "72574"
    },
    {
        "name": "Langenbrettach",
        "code": "74243"
    },
    {
        "name": "Walsrode, Ostenholz",
        "code": "29664"
    },
    {
        "name": "Hameln",
        "code": "31789"
    },
    {
        "name": "Friedrichshafen",
        "code": "88048"
    },
    {
        "name": "Baltmannsweiler",
        "code": "73666"
    },
    {
        "name": "Holzminden",
        "code": "37603"
    },
    {
        "name": "Biberach an der Riß",
        "code": "88400"
    },
    {
        "name": "Hannover",
        "code": "30449"
    },
    {
        "name": "Pinneberg",
        "code": "25421"
    },
    {
        "name": "Öpfingen",
        "code": "89614"
    },
    {
        "name": "Bad Wurzach",
        "code": "88410"
    },
    {
        "name": "Eschach, Obergröningen",
        "code": "73569"
    },
    {
        "name": "Maselheim",
        "code": "88437"
    },
    {
        "name": "Wasbek",
        "code": "24647"
    },
    {
        "name": "Niederstetten",
        "code": "97996"
    },
    {
        "name": "Timmaspe",
        "code": "24644"
    },
    {
        "name": "Hildesheim",
        "code": "31139"
    },
    {
        "name": "Wiemersdorf",
        "code": "24649"
    },
    {
        "name": "Hamburg",
        "code": "22761"
    },
    {
        "name": "Riedenheim",
        "code": "97283"
    },
    {
        "name": "Wehretal",
        "code": "37287"
    },
    {
        "name": "Gutenzell-Hürbel",
        "code": "88484"
    },
    {
        "name": "Heuchlingen",
        "code": "73572"
    },
    {
        "name": "Hamburg",
        "code": "22455"
    },
    {
        "name": "Mögglingen",
        "code": "73563"
    },
    {
        "name": "Beimerstetten",
        "code": "89179"
    },
    {
        "name": "Göttingen",
        "code": "37085"
    },
    {
        "name": "Hamburg",
        "code": "20259"
    },
    {
        "name": "Winterhausen",
        "code": "97286"
    },
    {
        "name": "Marxen",
        "code": "21439"
    },
    {
        "name": "Hamburg",
        "code": "20099"
    },
    {
        "name": "Hartenholm",
        "code": "24628"
    },
    {
        "name": "Tannheim",
        "code": "88459"
    },
    {
        "name": "Hamburg, Oststeinbek",
        "code": "22113"
    },
    {
        "name": "Seth",
        "code": "23845"
    },
    {
        "name": "Tangstedt",
        "code": "22889"
    },
    {
        "name": "Hamburg",
        "code": "22149"
    },
    {
        "name": "Wriedel",
        "code": "29565"
    },
    {
        "name": "Asselfingen",
        "code": "89176"
    },
    {
        "name": "Eisenach",
        "code": "99817"
    },
    {
        "name": "Schwallungen",
        "code": "98590"
    },
    {
        "name": "Memmingerberg",
        "code": "87766"
    },
    {
        "name": "Trittau",
        "code": "22946"
    },
    {
        "name": "Burgberg im Allgäu",
        "code": "87545"
    },
    {
        "name": "Aumühle",
        "code": "21521"
    },
    {
        "name": "Gundelfingen a.d. Donau",
        "code": "89423"
    },
    {
        "name": "Kempten (Allgäu)",
        "code": "87435"
    },
    {
        "name": "Vogtei, Kammerforst u.a.",
        "code": "99986"
    },
    {
        "name": "Winsen",
        "code": "21423"
    },
    {
        "name": "Leutershausen",
        "code": "91578"
    },
    {
        "name": "Steinburg",
        "code": "22964"
    },
    {
        "name": "Haldenwang",
        "code": "89356"
    },
    {
        "name": "Höheinöd, Petersberg u.a.",
        "code": "66989"
    },
    {
        "name": "Eimeldingen",
        "code": "79591"
    },
    {
        "name": "Hargesheim",
        "code": "55595"
    },
    {
        "name": "Osterspai",
        "code": "56340"
    },
    {
        "name": "Pracht",
        "code": "57589"
    },
    {
        "name": "Weitersburg",
        "code": "56191"
    },
    {
        "name": "Nauort",
        "code": "56237"
    },
    {
        "name": "Rümmingen",
        "code": "79595"
    },
    {
        "name": "Oberwesel",
        "code": "55430"
    },
    {
        "name": "Wissen, Hövels u.a.",
        "code": "57537"
    },
    {
        "name": "Dierdorf",
        "code": "56269"
    },
    {
        "name": "Medard, Rathskirchen u.a.",
        "code": "67744"
    },
    {
        "name": "Kenzingen",
        "code": "79341"
    },
    {
        "name": "Neuenrade",
        "code": "58809"
    },
    {
        "name": "Umkirch",
        "code": "79224"
    },
    {
        "name": "Meißenheim",
        "code": "77974"
    },
    {
        "name": "Hallgarten",
        "code": "67826"
    },
    {
        "name": "Singhofen",
        "code": "56379"
    },
    {
        "name": "Ehingen a. Ries",
        "code": "86741"
    },
    {
        "name": "Höchstädt a.d. Donau",
        "code": "89420"
    },
    {
        "name": "Wolfenbüttel",
        "code": "38302"
    },
    {
        "name": "Emmendorf",
        "code": "29579"
    },
    {
        "name": "Markt Wald",
        "code": "86865"
    },
    {
        "name": "Neetze",
        "code": "21398"
    },
    {
        "name": "Horgau",
        "code": "86497"
    },
    {
        "name": "Bokensdorf",
        "code": "38556"
    },
    {
        "name": "Ratzeburg",
        "code": "23909"
    },
    {
        "name": "Lübeck Schlutup/St. Gertrud",
        "code": "23568"
    },
    {
        "name": "Fünfstetten",
        "code": "86681"
    },
    {
        "name": "Nahrendorf",
        "code": "21369"
    },
    {
        "name": "Tiddische",
        "code": "38473"
    },
    {
        "name": "Schwabbruck",
        "code": "86986"
    },
    {
        "name": "Puschendorf",
        "code": "90617"
    },
    {
        "name": "Augsburg",
        "code": "86156"
    },
    {
        "name": "Bamberg",
        "code": "96052"
    },
    {
        "name": "Kaufering",
        "code": "86916"
    },
    {
        "name": "Heßdorf",
        "code": "91093"
    },
    {
        "name": "Danndorf",
        "code": "38461"
    },
    {
        "name": "Coburg",
        "code": "96450"
    },
    {
        "name": "Grömitz",
        "code": "23743"
    },
    {
        "name": "Rögling",
        "code": "86703"
    },
    {
        "name": "Mering",
        "code": "86415"
    },
    {
        "name": "Niederfüllbach",
        "code": "96489"
    },
    {
        "name": "Menden",
        "code": "58710"
    },
    {
        "name": "Hauenstein",
        "code": "76846"
    },
    {
        "name": "Wittnau",
        "code": "79299"
    },
    {
        "name": "Waldleiningen, Fischbach",
        "code": "67693"
    },
    {
        "name": "Horben",
        "code": "79289"
    },
    {
        "name": "Ahlen",
        "code": "59229"
    },
    {
        "name": "Bellingen, Kölbingen, Gemünden u.a.",
        "code": "56459"
    },
    {
        "name": "Bösel",
        "code": "26219"
    },
    {
        "name": "Hagen am Teutoburger Wald",
        "code": "49170"
    },
    {
        "name": "Gau-Bickelheim",
        "code": "55599"
    },
    {
        "name": "Hasbergen",
        "code": "49205"
    },
    {
        "name": "Eltville am Rhein",
        "code": "65346"
    },
    {
        "name": "Bad Bergzabern u.a.",
        "code": "76887"
    },
    {
        "name": "Osnabrück",
        "code": "49084"
    },
    {
        "name": "Oberharmersbach",
        "code": "77784"
    },
    {
        "name": "Eltville am Rhein",
        "code": "65344"
    },
    {
        "name": "Forst an der Weinstraße",
        "code": "67147"
    },
    {
        "name": "Bohmte",
        "code": "49163"
    },
    {
        "name": "Meckenheim",
        "code": "67149"
    },
    {
        "name": "Borgholzhausen",
        "code": "33829"
    },
    {
        "name": "Birkenheide",
        "code": "67134"
    },
    {
        "name": "Mainz",
        "code": "55131"
    },
    {
        "name": "Beindersheim",
        "code": "67259"
    },
    {
        "name": "Diepholz",
        "code": "49356"
    },
    {
        "name": "Braunfels",
        "code": "35619"
    },
    {
        "name": "Guntersblum",
        "code": "67583"
    },
    {
        "name": "Bischofsheim",
        "code": "65474"
    },
    {
        "name": "Notzingen",
        "code": "73274"
    },
    {
        "name": "Immenhausen",
        "code": "34376"
    },
    {
        "name": "Flieden",
        "code": "36103"
    },
    {
        "name": "Mehrstetten",
        "code": "72537"
    },
    {
        "name": "Morschen",
        "code": "34326"
    },
    {
        "name": "Triefenstein",
        "code": "97855"
    },
    {
        "name": "Holzen, Eschershausen, Eimen",
        "code": "37632"
    },
    {
        "name": "Hamweddel",
        "code": "24816"
    },
    {
        "name": "Garbsen",
        "code": "30827"
    },
    {
        "name": "Oberstadion",
        "code": "89613"
    },
    {
        "name": "Fischbachau",
        "code": "83730"
    },
    {
        "name": "Frauenneuharting",
        "code": "83553"
    },
    {
        "name": "Schmidgaden",
        "code": "92546"
    },
    {
        "name": "Jößnitz",
        "code": "08547"
    },
    {
        "name": "Neustadt (Dosse) u.a.",
        "code": "16845"
    },
    {
        "name": "Dessau-Roßlau",
        "code": "06846"
    },
    {
        "name": "Delitzsch, Krostitz u.a.",
        "code": "04509"
    },
    {
        "name": "Dessau-Roßlau",
        "code": "06862"
    },
    {
        "name": "Schwarzhofen",
        "code": "92447"
    },
    {
        "name": "Heldenstein",
        "code": "84431"
    },
    {
        "name": "Aschau a. Inn",
        "code": "84544"
    },
    {
        "name": "Klingenthal",
        "code": "08267"
    },
    {
        "name": "Zwickau",
        "code": "08064"
    },
    {
        "name": "Brandenburg/Havel",
        "code": "14776"
    },
    {
        "name": "Wilkau-Haßlau",
        "code": "08112"
    },
    {
        "name": "Gnoien u.a.",
        "code": "17179"
    },
    {
        "name": "Grimma",
        "code": "04668"
    },
    {
        "name": "Hartenstein",
        "code": "08118"
    },
    {
        "name": "Dargun",
        "code": "17159"
    },
    {
        "name": "Scheibenberg",
        "code": "09481"
    },
    {
        "name": "Schwielowswee",
        "code": "14548"
    },
    {
        "name": "Wittenhagen",
        "code": "18510"
    },
    {
        "name": "Chemnitz",
        "code": "09112"
    },
    {
        "name": "Chemnitz",
        "code": "09111"
    },
    {
        "name": "Chemnitz",
        "code": "09128"
    },
    {
        "name": "Hainichen, Rossau, Striegistal",
        "code": "09661"
    },
    {
        "name": "Wolkenstein",
        "code": "09429"
    },
    {
        "name": "Vilshofen an der Donau",
        "code": "94474"
    },
    {
        "name": "Berlin",
        "code": "12279"
    },
    {
        "name": "Berlin Tempelhof",
        "code": "12103"
    },
    {
        "name": "Rangsdorf",
        "code": "15834"
    },
    {
        "name": "Woldegk",
        "code": "17348"
    },
    {
        "name": "Berlin Mariendorf",
        "code": "12107"
    },
    {
        "name": "Friedland",
        "code": "17098"
    },
    {
        "name": "Süderbrarup",
        "code": "24392"
    },
    {
        "name": "Bad Überkingen",
        "code": "73337"
    },
    {
        "name": "Hannover",
        "code": "30159"
    },
    {
        "name": "Wolfegg",
        "code": "88364"
    },
    {
        "name": "Ellerhoop",
        "code": "25373"
    },
    {
        "name": "Einbeck, Kreiensen",
        "code": "37574"
    },
    {
        "name": "Hamburg",
        "code": "22587"
    },
    {
        "name": "Witzenhausen",
        "code": "37218"
    },
    {
        "name": "Ehingen (Donau), Lauterach",
        "code": "89584"
    },
    {
        "name": "Padenstedt",
        "code": "24634"
    },
    {
        "name": "Bad Sooden-Allendorf",
        "code": "37242"
    },
    {
        "name": "Ellerau",
        "code": "25479"
    },
    {
        "name": "Dörphof",
        "code": "24398"
    },
    {
        "name": "Würzburg",
        "code": "97084"
    },
    {
        "name": "Bischofsheim a.d. Rhön",
        "code": "97653"
    },
    {
        "name": "Hamburg",
        "code": "22529"
    },
    {
        "name": "Tann",
        "code": "36142"
    },
    {
        "name": "Ringgau",
        "code": "37296"
    },
    {
        "name": "Hamburg",
        "code": "22419"
    },
    {
        "name": "Erolzheim",
        "code": "88453"
    },
    {
        "name": "Meinhard",
        "code": "37276"
    },
    {
        "name": "Hamburg",
        "code": "22087"
    },
    {
        "name": "Hamburg",
        "code": "20535"
    },
    {
        "name": "Oberkochen",
        "code": "73447"
    },
    {
        "name": "Ostheim v.d. Rhön",
        "code": "97645"
    },
    {
        "name": "Prosselsheim",
        "code": "97279"
    },
    {
        "name": "Nettelsee",
        "code": "24250"
    },
    {
        "name": "Kiel",
        "code": "24143"
    },
    {
        "name": "Osterberg",
        "code": "89296"
    },
    {
        "name": "Hamburg, Oststeinbek",
        "code": "22113"
    },
    {
        "name": "Hamburg",
        "code": "21031"
    },
    {
        "name": "Schillingsfürst",
        "code": "91583"
    },
    {
        "name": "Unterlüß",
        "code": "29345"
    },
    {
        "name": "Mönkeberg",
        "code": "24248"
    },
    {
        "name": "Mainbernheim",
        "code": "97350"
    },
    {
        "name": "Roggenburg",
        "code": "89297"
    },
    {
        "name": "Salzgitter",
        "code": "38228"
    },
    {
        "name": "Hamfelde, Kasseburg, Köthel, Rausdorf, Schönberg",
        "code": "22929"
    },
    {
        "name": "Aletshausen",
        "code": "86480"
    },
    {
        "name": "Durach",
        "code": "87471"
    },
    {
        "name": "Am Ohmberg, Sonnenstein",
        "code": "37345"
    },
    {
        "name": "Riedbach",
        "code": "97519"
    },
    {
        "name": "Jettingen-Scheppach",
        "code": "89343"
    },
    {
        "name": "Wittelshofen",
        "code": "91749"
    },
    {
        "name": "Adenbüttel",
        "code": "38528"
    },
    {
        "name": "Goslar",
        "code": "38642"
    },
    {
        "name": "Ipsheim",
        "code": "91472"
    },
    {
        "name": "Schladen-Werla",
        "code": "38315"
    },
    {
        "name": "Hohenaltheim",
        "code": "86745"
    },
    {
        "name": "Bad Harzburg, Torfhaus",
        "code": "38667"
    },
    {
        "name": "Stammham",
        "code": "85134"
    },
    {
        "name": "Pegnitz",
        "code": "91257"
    },
    {
        "name": "Heinersreuth",
        "code": "95500"
    },
    {
        "name": "Jena, Bucha, Großpürschütz u.a.",
        "code": "07751"
    },
    {
        "name": "Fahrenzhausen",
        "code": "85777"
    },
    {
        "name": "Geroldsgrün",
        "code": "95179"
    },
    {
        "name": "Neubukow, Ravensberg u.a.",
        "code": "18233"
    },
    {
        "name": "München",
        "code": "81675"
    },
    {
        "name": "Pförring",
        "code": "85104"
    },
    {
        "name": "München",
        "code": "81825"
    },
    {
        "name": "Nienburg (Saale)",
        "code": "06429"
    },
    {
        "name": "Zell",
        "code": "95239"
    },
    {
        "name": "Gommern, Dannigkow",
        "code": "39245"
    },
    {
        "name": "Perleberg, Berge u.a.",
        "code": "19348"
    },
    {
        "name": "Osternienburger Land",
        "code": "06386"
    },
    {
        "name": "Rückholz",
        "code": "87494"
    },
    {
        "name": "Ruderatshofen",
        "code": "87674"
    },
    {
        "name": "Georgenthal/ Thür. Wald",
        "code": "99887"
    },
    {
        "name": "Denkte",
        "code": "38321"
    },
    {
        "name": "Munningen",
        "code": "86754"
    },
    {
        "name": "Dietenhofen",
        "code": "90599"
    },
    {
        "name": "Petersaurach",
        "code": "91580"
    },
    {
        "name": "Donauwörth",
        "code": "86609"
    },
    {
        "name": "Suhlendorf",
        "code": "29562"
    },
    {
        "name": "Wilhermsdorf",
        "code": "91452"
    },
    {
        "name": "Adelsried",
        "code": "86477"
    },
    {
        "name": "Welden",
        "code": "86465"
    },
    {
        "name": "Ehra-Lessien",
        "code": "38468"
    },
    {
        "name": "Barwedel",
        "code": "38476"
    },
    {
        "name": "Theilenhofen",
        "code": "91741"
    },
    {
        "name": "Absberg",
        "code": "91720"
    },
    {
        "name": "Weitramsdorf",
        "code": "96479"
    },
    {
        "name": "Langenaltheim",
        "code": "91799"
    },
    {
        "name": "Ahorn",
        "code": "96482"
    },
    {
        "name": "Breitengüßbach",
        "code": "96149"
    },
    {
        "name": "Großheirath",
        "code": "96269"
    },
    {
        "name": "Halberstadt, Groß Quenstedt",
        "code": "38822"
    },
    {
        "name": "Schwabach",
        "code": "91126"
    },
    {
        "name": "Apfeldorf",
        "code": "86974"
    },
    {
        "name": "Strullendorf",
        "code": "96129"
    },
    {
        "name": "Oebisfelde",
        "code": "39646"
    },
    {
        "name": "Nürnberg",
        "code": "90453"
    },
    {
        "name": "Bubenreuth",
        "code": "91088"
    },
    {
        "name": "Ballenstedt, Harzgerode",
        "code": "06493"
    },
    {
        "name": "Nürnberg",
        "code": "90402"
    },
    {
        "name": "Hilpoltstein",
        "code": "91161"
    },
    {
        "name": "Eichstätt",
        "code": "85072"
    },
    {
        "name": "Hochstadt a. Main",
        "code": "96272"
    },
    {
        "name": "Heldrungen",
        "code": "06577"
    },
    {
        "name": "Schneckenlohe",
        "code": "96277"
    },
    {
        "name": "Weißenohe",
        "code": "91367"
    },
    {
        "name": "Habach",
        "code": "82392"
    },
    {
        "name": "Schwerin",
        "code": "19057"
    },
    {
        "name": "Dortmund",
        "code": "44143"
    },
    {
        "name": "Wallhalben u.a.",
        "code": "66917"
    },
    {
        "name": "Maßweiler",
        "code": "66506"
    },
    {
        "name": "Schwerte",
        "code": "58239"
    },
    {
        "name": "Koblenz",
        "code": "56070"
    },
    {
        "name": "Rhens",
        "code": "56321"
    },
    {
        "name": "Kleinmaischeid",
        "code": "56271"
    },
    {
        "name": "Berlin Rudow",
        "code": "12357"
    },
    {
        "name": "Hohenleipisch",
        "code": "04934"
    },
    {
        "name": "Berlin",
        "code": "12689"
    },
    {
        "name": "Neuenhagen, Hoppegarten",
        "code": "15366"
    },
    {
        "name": "Königs Wusterhausen",
        "code": "15713"
    },
    {
        "name": "Dresden",
        "code": "01099"
    },
    {
        "name": "Kröslin, Krummin, Lassan u.a.",
        "code": "17440"
    },
    {
        "name": "Dresden",
        "code": "01279"
    },
    {
        "name": "Schipkau",
        "code": "01998"
    },
    {
        "name": "Lieberose",
        "code": "15868"
    },
    {
        "name": "Spremberg, Tschernitz u.a.",
        "code": "03130"
    },
    {
        "name": "Ebersbach-Neugersdorf",
        "code": "02730"
    },
    {
        "name": "Enzklösterle",
        "code": "75337"
    },
    {
        "name": "Raunheim",
        "code": "65479"
    },
    {
        "name": "Hüfingen",
        "code": "78183"
    },
    {
        "name": "Hockenheim",
        "code": "68766"
    },
    {
        "name": "Viernheim",
        "code": "68519"
    },
    {
        "name": "Hirschberg an der Bergstraße",
        "code": "69493"
    },
    {
        "name": "Marburg",
        "code": "35041"
    },
    {
        "name": "Ehrenburg",
        "code": "27248"
    },
    {
        "name": "Dreieich",
        "code": "63303"
    },
    {
        "name": "Frankfurt am Main (Taunusturm)",
        "code": "60310"
    },
    {
        "name": "Pforzheim",
        "code": "75181"
    },
    {
        "name": "Marsberg",
        "code": "34431"
    },
    {
        "name": "Offenbach am Main",
        "code": "63069"
    },
    {
        "name": "Messel",
        "code": "64409"
    },
    {
        "name": "Dietzenbach",
        "code": "63128"
    },
    {
        "name": "Paderborn",
        "code": "33100"
    },
    {
        "name": "Bremen",
        "code": "28195"
    },
    {
        "name": "Gechingen",
        "code": "75391"
    },
    {
        "name": "Bremen",
        "code": "28215"
    },
    {
        "name": "Detmold",
        "code": "32756"
    },
    {
        "name": "Epfenbach",
        "code": "74925"
    },
    {
        "name": "Altenstadt",
        "code": "63674"
    },
    {
        "name": "Laubach",
        "code": "35321"
    },
    {
        "name": "Bad König",
        "code": "64732"
    },
    {
        "name": "Thedinghausen, Emtinghausen",
        "code": "27321"
    },
    {
        "name": "Bülkau",
        "code": "21782"
    },
    {
        "name": "Sindelfingen",
        "code": "71067"
    },
    {
        "name": "Martfeld, Schwarme",
        "code": "27327"
    },
    {
        "name": "Jungingen",
        "code": "72417"
    },
    {
        "name": "Friedrichstadt, Koldenbüttel u.a.",
        "code": "25840"
    },
    {
        "name": "Gomaringen",
        "code": "72810"
    },
    {
        "name": "Bietigheim-Bissingen",
        "code": "74321"
    },
    {
        "name": "Bad Zwesten",
        "code": "34596"
    },
    {
        "name": "Möglingen",
        "code": "71696"
    },
    {
        "name": "Alsfeld",
        "code": "36304"
    },
    {
        "name": "Altenriet",
        "code": "72657"
    },
    {
        "name": "Erlenbach",
        "code": "74235"
    },
    {
        "name": "Beverungen",
        "code": "37688"
    },
    {
        "name": "Engstingen",
        "code": "72829"
    },
    {
        "name": "Kleinkahl",
        "code": "63828"
    },
    {
        "name": "Esslingen am Neckar",
        "code": "73733"
    },
    {
        "name": "Bergenhusen",
        "code": "24861"
    },
    {
        "name": "Eichenbühl",
        "code": "63928"
    },
    {
        "name": "Hollingstedt",
        "code": "24876"
    },
    {
        "name": "Osterburken",
        "code": "74706"
    },
    {
        "name": "Altenbuch",
        "code": "97901"
    },
    {
        "name": "Kropp u.a.",
        "code": "24848"
    },
    {
        "name": "Fürstenberg",
        "code": "37699"
    },
    {
        "name": "Remshalden",
        "code": "73630"
    },
    {
        "name": "Flensburg",
        "code": "24937"
    },
    {
        "name": "Erkelenz",
        "code": "41812"
    },
    {
        "name": "Viersen",
        "code": "41748"
    },
    {
        "name": "Mönchengladbach",
        "code": "41061"
    },
    {
        "name": "Ralingen",
        "code": "54310"
    },
    {
        "name": "Merzig",
        "code": "66663"
    },
    {
        "name": "Gerolstein",
        "code": "54568"
    },
    {
        "name": "Kerpen",
        "code": "50171"
    },
    {
        "name": "Speicher",
        "code": "54662"
    },
    {
        "name": "Bocholt",
        "code": "46397"
    },
    {
        "name": "Duisburg",
        "code": "47199"
    },
    {
        "name": "Duisburg",
        "code": "47198"
    },
    {
        "name": "Dormagen",
        "code": "41542"
    },
    {
        "name": "Manderscheid",
        "code": "54531"
    },
    {
        "name": "Düsseldorf",
        "code": "40476"
    },
    {
        "name": "Mehring",
        "code": "54346"
    },
    {
        "name": "Ratingen",
        "code": "40878"
    },
    {
        "name": "Mettmann",
        "code": "40822"
    },
    {
        "name": "Retterath",
        "code": "56769"
    },
    {
        "name": "Haan",
        "code": "42781"
    },
    {
        "name": "Bonn",
        "code": "53117"
    },
    {
        "name": "Sasbachwalden",
        "code": "77887"
    },
    {
        "name": "Stadecken-Elsheim",
        "code": "55271"
    },
    {
        "name": "Großenkneten",
        "code": "26197"
    },
    {
        "name": "Brechen",
        "code": "65611"
    },
    {
        "name": "Waldshut-Tiengen",
        "code": "79761"
    },
    {
        "name": "Kindenheim",
        "code": "67271"
    },
    {
        "name": "Merenberg",
        "code": "35799"
    },
    {
        "name": "Ötigheim",
        "code": "76470"
    },
    {
        "name": "Jockgrim",
        "code": "76751"
    },
    {
        "name": "Wiesbaden",
        "code": "65191"
    },
    {
        "name": "Schiltach",
        "code": "77761"
    },
    {
        "name": "Lembruch, Burlage",
        "code": "49459"
    },
    {
        "name": "Wutöschingen",
        "code": "79793"
    },
    {
        "name": "Klettgau",
        "code": "79771"
    },
    {
        "name": "Loßburg",
        "code": "72290"
    },
    {
        "name": "Siegbach",
        "code": "35768"
    },
    {
        "name": "Grävenwiesbach",
        "code": "61279"
    },
    {
        "name": "Elsdorf-Westermühlen",
        "code": "24800"
    },
    {
        "name": "Springe",
        "code": "31832"
    },
    {
        "name": "Kassel",
        "code": "34127"
    },
    {
        "name": "Auenwald",
        "code": "71549"
    },
    {
        "name": "Esselbach",
        "code": "97839"
    },
    {
        "name": "Kreuzwertheim",
        "code": "97892"
    },
    {
        "name": "Owschlag u.a.",
        "code": "24811"
    },
    {
        "name": "Fulda",
        "code": "36041"
    },
    {
        "name": "Langballig",
        "code": "24977"
    },
    {
        "name": "Uetersen",
        "code": "25436"
    },
    {
        "name": "Westermoor",
        "code": "25597"
    },
    {
        "name": "Heidenau",
        "code": "21258"
    },
    {
        "name": "Schülp bei Rendsburg",
        "code": "24813"
    },
    {
        "name": "Kaisersbach",
        "code": "73667"
    },
    {
        "name": "Burghaun",
        "code": "36151"
    },
    {
        "name": "Westerrönfeld",
        "code": "24784"
    },
    {
        "name": "Rothselberg u.a.",
        "code": "67753"
    },
    {
        "name": "Grumbach",
        "code": "67745"
    },
    {
        "name": "Rodalben",
        "code": "66976"
    },
    {
        "name": "Berge, Bippen",
        "code": "49626"
    },
    {
        "name": "Kaiserslautern",
        "code": "67661"
    },
    {
        "name": "Lörrach",
        "code": "79539"
    },
    {
        "name": "Callbach",
        "code": "67829"
    },
    {
        "name": "Bötzingen",
        "code": "79268"
    },
    {
        "name": "Gottenheim",
        "code": "79288"
    },
    {
        "name": "Friesenhagen",
        "code": "51598"
    },
    {
        "name": "Nastätten u.a.",
        "code": "56355"
    },
    {
        "name": "Nentershausen, Hübingen, Niederelbert u.a.",
        "code": "56412"
    },
    {
        "name": "Singhofen",
        "code": "56379"
    },
    {
        "name": "Steinbach, Weitersweiler, Bennhausen, Mörsfeld, Würzweiler, Ruppertsecken u.a.",
        "code": "67808"
    },
    {
        "name": "Sölden",
        "code": "79294"
    },
    {
        "name": "Molbergen",
        "code": "49696"
    },
    {
        "name": "Lastrup",
        "code": "49688"
    },
    {
        "name": "Emmendingen",
        "code": "79312"
    },
    {
        "name": "Nister",
        "code": "57645"
    },
    {
        "name": "Scheuerfeld",
        "code": "57584"
    },
    {
        "name": "Sembach",
        "code": "67681"
    },
    {
        "name": "Bramsche",
        "code": "49565"
    },
    {
        "name": "Badbergen",
        "code": "49635"
    },
    {
        "name": "Malberg, Norken, Höchstenbach u.a.",
        "code": "57629"
    },
    {
        "name": "Heidenrod",
        "code": "65321"
    },
    {
        "name": "Utzenfeld",
        "code": "79694"
    },
    {
        "name": "Todtmoos",
        "code": "79682"
    },
    {
        "name": "Osnabrück",
        "code": "49090"
    },
    {
        "name": "Dornburg",
        "code": "65599"
    },
    {
        "name": "Wallertheim",
        "code": "55578"
    },
    {
        "name": "Wilhelmshaven",
        "code": "26389"
    },
    {
        "name": "Armsheim",
        "code": "55288"
    },
    {
        "name": "Weisenheim am Sand",
        "code": "67256"
    },
    {
        "name": "Sasbach",
        "code": "77880"
    },
    {
        "name": "Wuppertal",
        "code": "42399"
    },
    {
        "name": "Nottuln",
        "code": "48301"
    },
    {
        "name": "Brohl-Lützing",
        "code": "56656"
    },
    {
        "name": "Baumholder",
        "code": "55774"
    },
    {
        "name": "Castrop-Rauxel",
        "code": "44577"
    },
    {
        "name": "Stavern",
        "code": "49777"
    },
    {
        "name": "Bergen",
        "code": "55608"
    },
    {
        "name": "Bundenbach",
        "code": "55626"
    },
    {
        "name": "Bechhofen",
        "code": "66894"
    },
    {
        "name": "Bullay, Alf, Zell",
        "code": "56859"
    },
    {
        "name": "Bergisch Gladbach",
        "code": "51465"
    },
    {
        "name": "Geeste",
        "code": "49744"
    },
    {
        "name": "Sustrum, Lathen u.a.",
        "code": "49762"
    },
    {
        "name": "Remscheid",
        "code": "42859"
    },
    {
        "name": "Overath",
        "code": "51491"
    },
    {
        "name": "Herne",
        "code": "44623"
    },
    {
        "name": "Herne",
        "code": "44627"
    },
    {
        "name": "Dickenschied u.a.",
        "code": "55483"
    },
    {
        "name": "Grafing b. München",
        "code": "85567"
    },
    {
        "name": "Südliches Anhalt u.a.",
        "code": "06369"
    },
    {
        "name": "Rostock, Papendorf u.a.",
        "code": "18059"
    },
    {
        "name": "Brahmenau",
        "code": "07554"
    },
    {
        "name": "Marktredwitz",
        "code": "95615"
    },
    {
        "name": "Pfaffing",
        "code": "83539"
    },
    {
        "name": "Edling",
        "code": "83533"
    },
    {
        "name": "Reuth b. Erbendorf",
        "code": "92717"
    },
    {
        "name": "Plau am See",
        "code": "19395"
    },
    {
        "name": "Dessau-Roßlau",
        "code": "06861"
    },
    {
        "name": "Wasserburg a. Inn",
        "code": "83512"
    },
    {
        "name": "Schonstett",
        "code": "83137"
    },
    {
        "name": "Altenthann",
        "code": "93177"
    },
    {
        "name": "Malchow u.a.",
        "code": "17213"
    },
    {
        "name": "Roding",
        "code": "93426"
    },
    {
        "name": "Oberviechtach",
        "code": "92526"
    },
    {
        "name": "Waldkraiburg",
        "code": "84478"
    },
    {
        "name": "Zwickau",
        "code": "08060"
    },
    {
        "name": "Dahmen, Groß Wokern, Teterow",
        "code": "17166"
    },
    {
        "name": "Leipzig",
        "code": "04328"
    },
    {
        "name": "Borna",
        "code": "04552"
    },
    {
        "name": "Feldkirchen",
        "code": "94351"
    },
    {
        "name": "Mülsen",
        "code": "08132"
    },
    {
        "name": "Friesack",
        "code": "14662"
    },
    {
        "name": "Reinsdorf",
        "code": "08141"
    },
    {
        "name": "Pösing",
        "code": "93483"
    },
    {
        "name": "Reisbach",
        "code": "94419"
    },
    {
        "name": "Unterneukirchen",
        "code": "84579"
    },
    {
        "name": "Stallwang",
        "code": "94375"
    },
    {
        "name": "Hunderdorf",
        "code": "94336"
    },
    {
        "name": "Glewitz",
        "code": "18513"
    },
    {
        "name": "Hebertsfelden",
        "code": "84332"
    },
    {
        "name": "Kollnburg",
        "code": "94262"
    },
    {
        "name": "Offenberg",
        "code": "94560"
    },
    {
        "name": "Chemnitz",
        "code": "09123"
    },
    {
        "name": "Ainring",
        "code": "83404"
    },
    {
        "name": "Möllenbeck",
        "code": "17237"
    },
    {
        "name": "Grafling",
        "code": "94539"
    },
    {
        "name": "Loitz",
        "code": "17121"
    },
    {
        "name": "Bärenstein",
        "code": "09471"
    },
    {
        "name": "Fürstenberg",
        "code": "16798"
    },
    {
        "name": "Großolbersdorf",
        "code": "09432"
    },
    {
        "name": "Auerbach",
        "code": "94530"
    },
    {
        "name": "Stralsund",
        "code": "18439"
    },
    {
        "name": "Schöllnach",
        "code": "94508"
    },
    {
        "name": "Windorf",
        "code": "94575"
    },
    {
        "name": "Pocking",
        "code": "94060"
    },
    {
        "name": "Olbernhau, Pfaffroda, Heidersdorf",
        "code": "09526"
    },
    {
        "name": "Berlin Charlottenburg-Nord",
        "code": "13627"
    },
    {
        "name": "Berlin Lichtenfelde",
        "code": "12205"
    },
    {
        "name": "Berlin Wilmersdorf",
        "code": "14197"
    },
    {
        "name": "Greifswald",
        "code": "17493"
    },
    {
        "name": "Neukirchen vorm Wald",
        "code": "94154"
    },
    {
        "name": "Berlin Tiergarten",
        "code": "10785"
    },
    {
        "name": "Berlin Kreuzberg",
        "code": "10967"
    },
    {
        "name": "Ingolstadt",
        "code": "85055"
    },
    {
        "name": "Vorra",
        "code": "91247"
    },
    {
        "name": "Leezen",
        "code": "19067"
    },
    {
        "name": "München",
        "code": "80686"
    },
    {
        "name": "München",
        "code": "80637"
    },
    {
        "name": "Gaißach",
        "code": "83674"
    },
    {
        "name": "Neukirchen b. Sulzbach-Rosen",
        "code": "92259"
    },
    {
        "name": "Freyburg, Balgstädt",
        "code": "06632"
    },
    {
        "name": "Saalburg-Ebersdorf",
        "code": "07929"
    },
    {
        "name": "München",
        "code": "81677"
    },
    {
        "name": "Naila",
        "code": "95119"
    },
    {
        "name": "München",
        "code": "81929"
    },
    {
        "name": "Ottobrunn/Riemerling",
        "code": "85521"
    },
    {
        "name": "Ismaning",
        "code": "85737"
    },
    {
        "name": "Neuengönna u.a.",
        "code": "07778"
    },
    {
        "name": "Putzbrunn",
        "code": "85640"
    },
    {
        "name": "Aying",
        "code": "85653"
    },
    {
        "name": "Bad Berneck im Fichtelgebirge",
        "code": "95460"
    },
    {
        "name": "Rottach-Egern",
        "code": "83700"
    },
    {
        "name": "Egmating",
        "code": "85658"
    },
    {
        "name": "Eitting",
        "code": "85462"
    },
    {
        "name": "Gebenbach",
        "code": "92274"
    },
    {
        "name": "Hof",
        "code": "95032"
    },
    {
        "name": "Auma-Weidatal",
        "code": "07955"
    },
    {
        "name": "Ebersdorf b. Coburg",
        "code": "96237"
    },
    {
        "name": "Michelau i. OFr.",
        "code": "96247"
    },
    {
        "name": "Hattenhofen",
        "code": "82285"
    },
    {
        "name": "Wiesenthau",
        "code": "91369"
    },
    {
        "name": "Damnatz",
        "code": "29472"
    },
    {
        "name": "Kühbach",
        "code": "86556"
    },
    {
        "name": "Gusborn",
        "code": "29476"
    },
    {
        "name": "Wiesenttal",
        "code": "91346"
    },
    {
        "name": "Berg im Gau",
        "code": "86562"
    },
    {
        "name": "Weimar",
        "code": "99427"
    },
    {
        "name": "Leinburg",
        "code": "91227"
    },
    {
        "name": "Ludwigsstadt",
        "code": "96337"
    },
    {
        "name": "Hohenwart",
        "code": "86558"
    },
    {
        "name": "Unterwellenborn",
        "code": "07333"
    },
    {
        "name": "Nusse",
        "code": "23896"
    },
    {
        "name": "Braunschweig",
        "code": "38104"
    },
    {
        "name": "Arberg",
        "code": "91722"
    },
    {
        "name": "Sondershausen",
        "code": "99706"
    },
    {
        "name": "Gotha",
        "code": "99867"
    },
    {
        "name": "Wittingen",
        "code": "29379"
    },
    {
        "name": "Mölln",
        "code": "23879"
    },
    {
        "name": "Kasseedorf",
        "code": "23717"
    },
    {
        "name": "Laugna",
        "code": "86502"
    },
    {
        "name": "Meitingen",
        "code": "86405"
    },
    {
        "name": "Ehingen",
        "code": "86678"
    },
    {
        "name": "Lensahn",
        "code": "23738"
    },
    {
        "name": "Altenstadt",
        "code": "86972"
    },
    {
        "name": "Erfurt",
        "code": "99090"
    },
    {
        "name": "Marxheim",
        "code": "86688"
    },
    {
        "name": "Ellingen",
        "code": "91792"
    },
    {
        "name": "Augsburg",
        "code": "86159"
    },
    {
        "name": "Augsburg",
        "code": "86167"
    },
    {
        "name": "Untersiemau",
        "code": "96253"
    },
    {
        "name": "Gadebusch",
        "code": "19205"
    },
    {
        "name": "Möhrendorf/Mark",
        "code": "91096"
    },
    {
        "name": "Fürth",
        "code": "90763"
    },
    {
        "name": "Nürnberg",
        "code": "90449"
    },
    {
        "name": "Neuhaus am Rennweg, Lauscha",
        "code": "98724"
    },
    {
        "name": "Berlin Neukölln",
        "code": "12055"
    },
    {
        "name": "Großenhain",
        "code": "01558"
    },
    {
        "name": "Berlin Lichtenberg",
        "code": "10365"
    },
    {
        "name": "Lubmin",
        "code": "17509"
    },
    {
        "name": "Berlin Neu-Schönhausen",
        "code": "13051"
    },
    {
        "name": "Hartmannsdorf-Reichenau",
        "code": "01762"
    },
    {
        "name": "Uckerland, Groß Luckow, Schönhausen",
        "code": "17337"
    },
    {
        "name": "Heidesee",
        "code": "15754"
    },
    {
        "name": "Eberswalde",
        "code": "16227"
    },
    {
        "name": "Briesen, Rauen u.a.",
        "code": "15518"
    },
    {
        "name": "Peitz",
        "code": "03185"
    },
    {
        "name": "Doberschau-Gaußig, Großpostwitz, Obergurig",
        "code": "02692"
    },
    {
        "name": "Seifhennersdorf",
        "code": "02782"
    },
    {
        "name": "Kottmar",
        "code": "02739"
    },
    {
        "name": "Hamm",
        "code": "67580"
    },
    {
        "name": "Mannheim",
        "code": "68305"
    },
    {
        "name": "Kelsterbach",
        "code": "65451"
    },
    {
        "name": "Neu-Anspach",
        "code": "61267"
    },
    {
        "name": "Weingarten",
        "code": "76356"
    },
    {
        "name": "Pfinztal",
        "code": "76327"
    },
    {
        "name": "Mörfelden-Walldorf",
        "code": "64546"
    },
    {
        "name": "Geestland",
        "code": "27607"
    },
    {
        "name": "Neuenbürg",
        "code": "75305"
    },
    {
        "name": "Jestetten",
        "code": "79798"
    },
    {
        "name": "Höfen an der Enz",
        "code": "75339"
    },
    {
        "name": "Rodenäs",
        "code": "25924"
    },
    {
        "name": "Bielefeld",
        "code": "33699"
    },
    {
        "name": "Frankfurt am Main",
        "code": "65933"
    },
    {
        "name": "Bremerhaven",
        "code": "27578"
    },
    {
        "name": "Darmstadt",
        "code": "64293"
    },
    {
        "name": "Sandhausen",
        "code": "69207"
    },
    {
        "name": "Tengen",
        "code": "78250"
    },
    {
        "name": "Wünnenberg",
        "code": "33181"
    },
    {
        "name": "Bremerhaven",
        "code": "27578"
    },
    {
        "name": "Cuxhaven",
        "code": "27474"
    },
    {
        "name": "Empfingen",
        "code": "72186"
    },
    {
        "name": "Friedrichskoog",
        "code": "25718"
    },
    {
        "name": "Geislingen",
        "code": "72351"
    },
    {
        "name": "Angelbachtal",
        "code": "74918"
    },
    {
        "name": "Wurmlingen",
        "code": "78573"
    },
    {
        "name": "Heiligkreuzsteinach",
        "code": "69253"
    },
    {
        "name": "Bremen",
        "code": "28219"
    },
    {
        "name": "Wölfersheim",
        "code": "61200"
    },
    {
        "name": "Meckesheim",
        "code": "74909"
    },
    {
        "name": "Gäufelden",
        "code": "71126"
    },
    {
        "name": "Detmold",
        "code": "32760"
    },
    {
        "name": "Hungen",
        "code": "35410"
    },
    {
        "name": "Hausen am Tann",
        "code": "72361"
    },
    {
        "name": "Eppingen",
        "code": "75031"
    },
    {
        "name": "Brensbach",
        "code": "64395"
    },
    {
        "name": "Spechbach",
        "code": "74937"
    },
    {
        "name": "Hirrlingen",
        "code": "72145"
    },
    {
        "name": "Weissach",
        "code": "71287"
    },
    {
        "name": "Siedenburg, Staffhorst",
        "code": "27254"
    },
    {
        "name": "Beuron",
        "code": "88631"
    },
    {
        "name": "Waldeck",
        "code": "34513"
    },
    {
        "name": "Schwarzach",
        "code": "74869"
    },
    {
        "name": "Heide u.a.",
        "code": "25746"
    },
    {
        "name": "Mössingen",
        "code": "72116"
    },
    {
        "name": "Hüffenhardt",
        "code": "74928"
    },
    {
        "name": "Winterlingen",
        "code": "72474"
    },
    {
        "name": "Amorbach",
        "code": "63916"
    },
    {
        "name": "Reichenau",
        "code": "78479"
    },
    {
        "name": "Inzigkofen",
        "code": "72514"
    },
    {
        "name": "Aschaffenburg",
        "code": "63743"
    },
    {
        "name": "Klingenberg a. Main",
        "code": "63911"
    },
    {
        "name": "Löwenstedt",
        "code": "25864"
    },
    {
        "name": "Elztal",
        "code": "74834"
    },
    {
        "name": "Stuttgart",
        "code": "70173"
    },
    {
        "name": "Steinheim, Murr",
        "code": "71711"
    },
    {
        "name": "Lichtenstein",
        "code": "72805"
    },
    {
        "name": "Schefflenz",
        "code": "74850"
    },
    {
        "name": "Neustadt am Rübenberge",
        "code": "31535"
    },
    {
        "name": "Frielendorf",
        "code": "34621"
    },
    {
        "name": "Wohlde",
        "code": "24899"
    },
    {
        "name": "Hameln",
        "code": "31787"
    },
    {
        "name": "Tarp",
        "code": "24963"
    },
    {
        "name": "Frammersbach",
        "code": "97833"
    },
    {
        "name": "Wendlingen am Neckar",
        "code": "73240"
    },
    {
        "name": "Ellingstedt",
        "code": "24870"
    },
    {
        "name": "Ertingen",
        "code": "88521"
    },
    {
        "name": "Hameln",
        "code": "31789"
    },
    {
        "name": "Sieverstedt",
        "code": "24885"
    },
    {
        "name": "Monschau",
        "code": "52156"
    },
    {
        "name": "Stolberg (Rhld.)",
        "code": "52222"
    },
    {
        "name": "Mönchengladbach",
        "code": "41068"
    },
    {
        "name": "Ayl, Trassem u.a.",
        "code": "54441"
    },
    {
        "name": "Büdesheim",
        "code": "54610"
    },
    {
        "name": "Duisburg",
        "code": "47239"
    },
    {
        "name": "Duisburg",
        "code": "47259"
    },
    {
        "name": "Neuss",
        "code": "41466"
    },
    {
        "name": "Saarwellingen",
        "code": "66793"
    },
    {
        "name": "Leiwen u.a.",
        "code": "54340"
    },
    {
        "name": "Barweiler, Bauler, Hoffeld, Pomster, Wiesemscheid, Wirft",
        "code": "53534"
    },
    {
        "name": "Bodenbach, Kelberg, Kirsbach u.a.",
        "code": "53539"
    },
    {
        "name": "Köln",
        "code": "50933"
    },
    {
        "name": "Bottrop",
        "code": "46242"
    },
    {
        "name": "Saarbrücken",
        "code": "66126"
    },
    {
        "name": "Esche, Georgsdorf, Lage, Neuenhaus, Osterwald",
        "code": "49828"
    },
    {
        "name": "Leverkusen",
        "code": "51373"
    },
    {
        "name": "Malborn",
        "code": "54426"
    },
    {
        "name": "Velbert",
        "code": "42553"
    },
    {
        "name": "Gelsenkirchen",
        "code": "45881"
    },
    {
        "name": "Wedel",
        "code": "22880"
    },
    {
        "name": "Urspringen",
        "code": "97857"
    },
    {
        "name": "Hollenstedt, Drestedt u.a.",
        "code": "21279"
    },
    {
        "name": "Zellingen",
        "code": "97225"
    },
    {
        "name": "Bargstedt, Brammer, Oldenbüttel",
        "code": "24793"
    },
    {
        "name": "Gronau (Leine)",
        "code": "31028"
    },
    {
        "name": "Großalmerode",
        "code": "37247"
    },
    {
        "name": "Michelbach an der Bilz",
        "code": "74544"
    },
    {
        "name": "Witzenhausen",
        "code": "37213"
    },
    {
        "name": "Rabenkirchen-Faulück",
        "code": "24407"
    },
    {
        "name": "Kirchheim",
        "code": "97268"
    },
    {
        "name": "Göggingen",
        "code": "73571"
    },
    {
        "name": "Würzburg",
        "code": "97082"
    },
    {
        "name": "Großenaspe",
        "code": "24623"
    },
    {
        "name": "Leutkirch im Allgäu",
        "code": "88299"
    },
    {
        "name": "Göttingen",
        "code": "37073"
    },
    {
        "name": "Hamburg",
        "code": "22453"
    },
    {
        "name": "Wasserlosen",
        "code": "97535"
    },
    {
        "name": "Hamburg",
        "code": "22301"
    },
    {
        "name": "Neuler",
        "code": "73491"
    },
    {
        "name": "Hamburg",
        "code": "22307"
    },
    {
        "name": "Wasungen",
        "code": "98634"
    },
    {
        "name": "Kiel",
        "code": "24113"
    },
    {
        "name": "Gieboldehausen, Rhumequelle",
        "code": "37434"
    },
    {
        "name": "Dermbach, Wiesenthal",
        "code": "36466"
    },
    {
        "name": "Wanfried",
        "code": "37281"
    },
    {
        "name": "Bargfeld-Stegen",
        "code": "23863"
    },
    {
        "name": "Ilsede",
        "code": "31241"
    },
    {
        "name": "Kötz",
        "code": "89359"
    },
    {
        "name": "Aumühle",
        "code": "21521"
    },
    {
        "name": "Wildemann",
        "code": "38709"
    },
    {
        "name": "Tremsbüttel",
        "code": "22967"
    },
    {
        "name": "Suderburg",
        "code": "29556"
    },
    {
        "name": "Mindelheim",
        "code": "87719"
    },
    {
        "name": "Burghaslach",
        "code": "96152"
    },
    {
        "name": "Maihingen",
        "code": "86747"
    },
    {
        "name": "Winnweiler",
        "code": "67722"
    },
    {
        "name": "Au (Breisgau)",
        "code": "79280"
    },
    {
        "name": "Wickede (Ruhr)",
        "code": "58739"
    },
    {
        "name": "Schutterwald",
        "code": "77746"
    },
    {
        "name": "Hamm",
        "code": "59071"
    },
    {
        "name": "Freiburg im Breisgau",
        "code": "79104"
    },
    {
        "name": "Alpenrod",
        "code": "57642"
    },
    {
        "name": "Schönborn",
        "code": "56370"
    },
    {
        "name": "Nisterau u.a.",
        "code": "56472"
    },
    {
        "name": "Welver",
        "code": "59514"
    },
    {
        "name": "Frankenstein, Neidenfels, Frankeneck",
        "code": "67468"
    },
    {
        "name": "Ortenberg",
        "code": "77799"
    },
    {
        "name": "Gengenbach",
        "code": "77723"
    },
    {
        "name": "Sankt Peter",
        "code": "79271"
    },
    {
        "name": "Osnabrück",
        "code": "49080"
    },
    {
        "name": "Varel",
        "code": "26316"
    },
    {
        "name": "Edenkoben",
        "code": "67480"
    },
    {
        "name": "Elbtal",
        "code": "65627"
    },
    {
        "name": "Emstek",
        "code": "49685"
    },
    {
        "name": "Oldenburg (Oldenburg)",
        "code": "26131"
    },
    {
        "name": "Schönwald im Schwarzwald",
        "code": "78141"
    },
    {
        "name": "Au am Rhein",
        "code": "76474"
    },
    {
        "name": "Mommenheim",
        "code": "55278"
    },
    {
        "name": "Ober-Olm",
        "code": "55270"
    },
    {
        "name": "Zeiskam",
        "code": "67378"
    },
    {
        "name": "Bischweier",
        "code": "76476"
    },
    {
        "name": "Leun",
        "code": "35638"
    },
    {
        "name": "Böhl-Iggelheim",
        "code": "67459"
    },
    {
        "name": "Gütersloh",
        "code": "33334"
    },
    {
        "name": "Eppstein",
        "code": "65817"
    },
    {
        "name": "Weisenbach",
        "code": "76599"
    },
    {
        "name": "Ettlingen",
        "code": "76275"
    },
    {
        "name": "List",
        "code": "25992"
    },
    {
        "name": "Kelkheim",
        "code": "65779"
    },
    {
        "name": "Berne",
        "code": "27804"
    },
    {
        "name": "Hasloch",
        "code": "97907"
    },
    {
        "name": "Ahorn",
        "code": "74744"
    },
    {
        "name": "Tettnang",
        "code": "88069"
    },
    {
        "name": "Kressbronn am Bodensee",
        "code": "88079"
    },
    {
        "name": "Welzheim",
        "code": "73642"
    },
    {
        "name": "Regesbostel",
        "code": "21649"
    },
    {
        "name": "Schneverdingen, Heimbuch",
        "code": "29640"
    },
    {
        "name": "Elze",
        "code": "31008"
    },
    {
        "name": "Hohenstadt/Drackenstein",
        "code": "73345"
    },
    {
        "name": "Bergisch Gladbach",
        "code": "51467"
    },
    {
        "name": "Düngenheim",
        "code": "56761"
    },
    {
        "name": "Bergisch Gladbach",
        "code": "51427"
    },
    {
        "name": "Bonn",
        "code": "53129"
    },
    {
        "name": "Mayen",
        "code": "56727"
    },
    {
        "name": "Niederzissen",
        "code": "56651"
    },
    {
        "name": "Rösrath",
        "code": "51503"
    },
    {
        "name": "Gersheim",
        "code": "66453"
    },
    {
        "name": "Hattingen",
        "code": "45525"
    },
    {
        "name": "Idar-Oberstein",
        "code": "55743"
    },
    {
        "name": "Hennef (Sieg)",
        "code": "53773"
    },
    {
        "name": "Fischingen",
        "code": "79592"
    },
    {
        "name": "Lauterecken u.a.",
        "code": "67742"
    },
    {
        "name": "Iserlohn",
        "code": "58644"
    },
    {
        "name": "Odernheim am Glan",
        "code": "55571"
    },
    {
        "name": "Menslage",
        "code": "49637"
    },
    {
        "name": "Norheim u.a.",
        "code": "55585"
    },
    {
        "name": "Dernbach (Westerwald)",
        "code": "56428"
    },
    {
        "name": "Freiburg im Breisgau",
        "code": "79110"
    },
    {
        "name": "Ihlow",
        "code": "26632"
    },
    {
        "name": "Lingen",
        "code": "49811"
    },
    {
        "name": "Müden",
        "code": "56254"
    },
    {
        "name": "Brücken (Pfalz)",
        "code": "66904"
    },
    {
        "name": "Hagen",
        "code": "58135"
    },
    {
        "name": "Herschweiler-Pettersheim",
        "code": "66909"
    },
    {
        "name": "Langweiler",
        "code": "67746"
    },
    {
        "name": "Steinwenden u.a.",
        "code": "66879"
    },
    {
        "name": "Wildenbungert, Gondershausen, Nörtershausen u.a.",
        "code": "56283"
    },
    {
        "name": "Blomberg, Neuschoo",
        "code": "26487"
    },
    {
        "name": "Offenbach-Hundheim",
        "code": "67749"
    },
    {
        "name": "Birnbach",
        "code": "57612"
    },
    {
        "name": "Pfeffenhausen",
        "code": "84076"
    },
    {
        "name": "Wolfsegg",
        "code": "93195"
    },
    {
        "name": "Gera, Zedlitz u.a.",
        "code": "07557"
    },
    {
        "name": "Rostock, Lambrechtshagen",
        "code": "18069"
    },
    {
        "name": "Parkstein",
        "code": "92711"
    },
    {
        "name": "Lappersdorf",
        "code": "93138"
    },
    {
        "name": "Sankt Wolfgang",
        "code": "84427"
    },
    {
        "name": "Rostock",
        "code": "18147"
    },
    {
        "name": "Plauen",
        "code": "08523"
    },
    {
        "name": "Falkenberg",
        "code": "95685"
    },
    {
        "name": "Schmölln, Altkirchen, Nöbdenitz u.a.",
        "code": "04626"
    },
    {
        "name": "Werdau",
        "code": "08412"
    },
    {
        "name": "Ribnitz-Damgarten",
        "code": "18311"
    },
    {
        "name": "Bernau a. Chiemsee",
        "code": "83233"
    },
    {
        "name": "Weng",
        "code": "84187"
    },
    {
        "name": "Bodenkirchen",
        "code": "84155"
    },
    {
        "name": "Seeon-Seebruck",
        "code": "83370"
    },
    {
        "name": "Übersee",
        "code": "83236"
    },
    {
        "name": "Steinberg",
        "code": "08237"
    },
    {
        "name": "Leipzig",
        "code": "04319"
    },
    {
        "name": "Oberneukirchen",
        "code": "84565"
    },
    {
        "name": "Straubing",
        "code": "94315"
    },
    {
        "name": "Borsdorf",
        "code": "04451"
    },
    {
        "name": "Brandis",
        "code": "04824"
    },
    {
        "name": "Altötting",
        "code": "84503"
    },
    {
        "name": "Oelsnitz/Erzgebirge",
        "code": "09376"
    },
    {
        "name": "Rochlitz",
        "code": "09306"
    },
    {
        "name": "Aholming",
        "code": "94527"
    },
    {
        "name": "Brieselang",
        "code": "14656"
    },
    {
        "name": "Arzberg, Beilrode",
        "code": "04886"
    },
    {
        "name": "Chemnitz",
        "code": "09127"
    },
    {
        "name": "Rosenow",
        "code": "17091"
    },
    {
        "name": "Arrach",
        "code": "93474"
    },
    {
        "name": "Velten, Oberkrämer",
        "code": "16727"
    },
    {
        "name": "Schaufling",
        "code": "94571"
    },
    {
        "name": "Bodenmais",
        "code": "94249"
    },
    {
        "name": "Hiddensee",
        "code": "18565"
    },
    {
        "name": "Sponholz, Neunkirchen u.a.",
        "code": "17039"
    },
    {
        "name": "Grattersdorf",
        "code": "94541"
    },
    {
        "name": "Mühlberg, Bad Liebenwerda",
        "code": "04931"
    },
    {
        "name": "Berlin Grunewald",
        "code": "14193"
    },
    {
        "name": "Zossen",
        "code": "15806"
    },
    {
        "name": "Berlin Charlottenburg",
        "code": "10623"
    },
    {
        "name": "Templin, Boitzenburg u.a.",
        "code": "17268"
    },
    {
        "name": "Berlin Schöneberg",
        "code": "12157"
    },
    {
        "name": "Blankenfelde-Mahlow",
        "code": "15827"
    },
    {
        "name": "Berlin Mitte",
        "code": "10117"
    },
    {
        "name": "Greifswald",
        "code": "17493"
    },
    {
        "name": "Spantekow",
        "code": "17392"
    },
    {
        "name": "Karlsbad",
        "code": "76307"
    },
    {
        "name": "Brühl",
        "code": "68782"
    },
    {
        "name": "Mannheim",
        "code": "68167"
    },
    {
        "name": "Loxstedt",
        "code": "27612"
    },
    {
        "name": "Sulzbach (Taunus)",
        "code": "65843"
    },
    {
        "name": "Eschborn",
        "code": "65760"
    },
    {
        "name": "Friedrichsdorf",
        "code": "61381"
    },
    {
        "name": "Bremen",
        "code": "28755"
    },
    {
        "name": "Freistatt, Varrel, Wehrbleck",
        "code": "27259"
    },
    {
        "name": "Pforzheim",
        "code": "75179"
    },
    {
        "name": "Lollar",
        "code": "35457"
    },
    {
        "name": "Geestland",
        "code": "27624"
    },
    {
        "name": "Frankfurt am Main",
        "code": "60316"
    },
    {
        "name": "Neuhausen",
        "code": "75242"
    },
    {
        "name": "Bad Oeynhausen",
        "code": "32549"
    },
    {
        "name": "Langenhorn, Ockholm u.a.",
        "code": "25842"
    },
    {
        "name": "Wehingen, Reichenbach",
        "code": "78564"
    },
    {
        "name": "Bad Oeynhausen",
        "code": "32545"
    },
    {
        "name": "Bremen",
        "code": "28357"
    },
    {
        "name": "Ratshausen",
        "code": "72365"
    },
    {
        "name": "Lemgo",
        "code": "32657"
    },
    {
        "name": "Mühlheim am Main",
        "code": "63165"
    },
    {
        "name": "Nidderau",
        "code": "61130"
    },
    {
        "name": "Asendorf",
        "code": "27330"
    },
    {
        "name": "Homberg (Ohm)",
        "code": "35315"
    },
    {
        "name": "Stockach",
        "code": "78333"
    },
    {
        "name": "Wöhrden",
        "code": "25797"
    },
    {
        "name": "Oyten",
        "code": "28876"
    },
    {
        "name": "Wingst",
        "code": "21789"
    },
    {
        "name": "Reichenau",
        "code": "78479"
    },
    {
        "name": "Weddingstedt",
        "code": "25795"
    },
    {
        "name": "Hoya, Hoyerhagen, Hilgermissen",
        "code": "27318"
    },
    {
        "name": "Brakel",
        "code": "33034"
    },
    {
        "name": "Kirchzell",
        "code": "63931"
    },
    {
        "name": "Estorf",
        "code": "31629"
    },
    {
        "name": "Schwalmstadt",
        "code": "34613"
    },
    {
        "name": "Gelnhausen",
        "code": "63571"
    },
    {
        "name": "Laudenbach",
        "code": "63925"
    },
    {
        "name": "Verden",
        "code": "27283"
    },
    {
        "name": "Haibach",
        "code": "63808"
    },
    {
        "name": "Wächtersbach",
        "code": "63607"
    },
    {
        "name": "Borken",
        "code": "34582"
    },
    {
        "name": "Röllbach",
        "code": "63934"
    },
    {
        "name": "Metzingen",
        "code": "72555"
    },
    {
        "name": "Esslingen am Neckar",
        "code": "73728"
    },
    {
        "name": "Bad Orb",
        "code": "63619"
    },
    {
        "name": "Kirchberg",
        "code": "71737"
    },
    {
        "name": "Frickenhausen",
        "code": "72636"
    },
    {
        "name": "Pfronstetten",
        "code": "72539"
    },
    {
        "name": "Bretzfeld",
        "code": "74626"
    },
    {
        "name": "Flörsbachtal",
        "code": "63639"
    },
    {
        "name": "Schenefeld",
        "code": "25560"
    },
    {
        "name": "Schwarzenborn",
        "code": "34639"
    },
    {
        "name": "Bodenfelde, Wahlsburg",
        "code": "37194"
    },
    {
        "name": "Greifenberg",
        "code": "86926"
    },
    {
        "name": "Dahme",
        "code": "23747"
    },
    {
        "name": "Huglfing",
        "code": "82386"
    },
    {
        "name": "Adelschlag",
        "code": "85111"
    },
    {
        "name": "Artern/Unstrut u.a.",
        "code": "06556"
    },
    {
        "name": "Gachenbach",
        "code": "86565"
    },
    {
        "name": "Starnberg",
        "code": "82319"
    },
    {
        "name": "Neunkirchen am Sand",
        "code": "91233"
    },
    {
        "name": "Hergisdorf",
        "code": "06313"
    },
    {
        "name": "Schäftlarn",
        "code": "82067"
    },
    {
        "name": "München",
        "code": "80638"
    },
    {
        "name": "Gerbstedt",
        "code": "06347"
    },
    {
        "name": "Magdeburg",
        "code": "39116"
    },
    {
        "name": "Kranzberg",
        "code": "85402"
    },
    {
        "name": "München",
        "code": "81545"
    },
    {
        "name": "München",
        "code": "80799"
    },
    {
        "name": "München",
        "code": "80801"
    },
    {
        "name": "Jena, Bucha, Großpürschütz u.a.",
        "code": "07751"
    },
    {
        "name": "Könnern",
        "code": "06420"
    },
    {
        "name": "Magdeburg",
        "code": "39114"
    },
    {
        "name": "Aiglsbach",
        "code": "84089"
    },
    {
        "name": "Biederitz, Gerwisch, Menz u.a.",
        "code": "39175"
    },
    {
        "name": "Kirchheim b. München",
        "code": "85551"
    },
    {
        "name": "Parchim",
        "code": "19370"
    },
    {
        "name": "Triptis",
        "code": "07819"
    },
    {
        "name": "Schönebeck (Elbe)",
        "code": "39217"
    },
    {
        "name": "Konradsreuth",
        "code": "95176"
    },
    {
        "name": "Berlin Baumschulenweg",
        "code": "12437"
    },
    {
        "name": "Sonnewalde",
        "code": "03249"
    },
    {
        "name": "Hauzenberg",
        "code": "94051"
    },
    {
        "name": "Hinterschmiding",
        "code": "94146"
    },
    {
        "name": "Berlin Wiesengrund",
        "code": "12587"
    },
    {
        "name": "Jandelsbrunn",
        "code": "94118"
    },
    {
        "name": "Berlin Rahnsdorf",
        "code": "12589"
    },
    {
        "name": "Dresden",
        "code": "01187"
    },
    {
        "name": "Ortrand",
        "code": "01990"
    },
    {
        "name": "Dresden",
        "code": "01067"
    },
    {
        "name": "Dresden",
        "code": "01129"
    },
    {
        "name": "Dresden",
        "code": "01108"
    },
    {
        "name": "Kröslin, Krummin, Lassan u.a.",
        "code": "17440"
    },
    {
        "name": "Lohmen",
        "code": "01847"
    },
    {
        "name": "Bischofswerda u.a.",
        "code": "01877"
    },
    {
        "name": "Neustadt i. Sa.",
        "code": "01844"
    },
    {
        "name": "Cottbus",
        "code": "03042"
    },
    {
        "name": "Leutersdorf, Spitzkunnersdorf",
        "code": "02794"
    },
    {
        "name": "Olbersdorf",
        "code": "02785"
    },
    {
        "name": "Dickenschied u.a.",
        "code": "55483"
    },
    {
        "name": "Flammersfeld",
        "code": "57632"
    },
    {
        "name": "Dortmund",
        "code": "44265"
    },
    {
        "name": "Bergen",
        "code": "55608"
    },
    {
        "name": "Seesbach",
        "code": "55629"
    },
    {
        "name": "Anhausen",
        "code": "56584"
    },
    {
        "name": "Landstuhl",
        "code": "66849"
    },
    {
        "name": "Medard, Rathskirchen u.a.",
        "code": "67744"
    },
    {
        "name": "Urbach",
        "code": "56317"
    },
    {
        "name": "Bendorf",
        "code": "56170"
    },
    {
        "name": "Argenthal",
        "code": "55496"
    },
    {
        "name": "Coesfeld",
        "code": "48653"
    },
    {
        "name": "Marl",
        "code": "45772"
    },
    {
        "name": "Gelsenkirchen",
        "code": "45897"
    },
    {
        "name": "Heimbach",
        "code": "55779"
    },
    {
        "name": "Hage, Halbemond u.a.",
        "code": "26524"
    },
    {
        "name": "Wuppertal",
        "code": "42389"
    },
    {
        "name": "Treis-Karden",
        "code": "56253"
    },
    {
        "name": "Witten",
        "code": "58456"
    },
    {
        "name": "Castrop-Rauxel",
        "code": "44575"
    },
    {
        "name": "Mastershausen",
        "code": "56869"
    },
    {
        "name": "Kusel",
        "code": "66869"
    },
    {
        "name": "Westerholt, Schweindorf u.a.",
        "code": "26556"
    },
    {
        "name": "Hütschenhausen",
        "code": "66882"
    },
    {
        "name": "Bodnegg",
        "code": "88285"
    },
    {
        "name": "Langenhagen (Flughafen)",
        "code": "30669"
    },
    {
        "name": "Nellingen",
        "code": "89191"
    },
    {
        "name": "Karsbach",
        "code": "97783"
    },
    {
        "name": "Spraitbach",
        "code": "73565"
    },
    {
        "name": "Hannover",
        "code": "30173"
    },
    {
        "name": "Welle",
        "code": "21261"
    },
    {
        "name": "Durlangen, Weggen-Ziegelhütte, Leinhäusle",
        "code": "73568"
    },
    {
        "name": "Griesingen",
        "code": "89608"
    },
    {
        "name": "Kuchen",
        "code": "73329"
    },
    {
        "name": "Wittighausen",
        "code": "97957"
    },
    {
        "name": "Dornstadt",
        "code": "89160"
    },
    {
        "name": "Hannover",
        "code": "30539"
    },
    {
        "name": "Reichenberg, Guttenberger Wald",
        "code": "97234"
    },
    {
        "name": "Lindenberg im Allgäu",
        "code": "88161"
    },
    {
        "name": "Fuchsstadt",
        "code": "97727"
    },
    {
        "name": "Würzburg",
        "code": "97074"
    },
    {
        "name": "Schnürpflingen",
        "code": "89194"
    },
    {
        "name": "Hermannsburg",
        "code": "29320"
    },
    {
        "name": "Senden",
        "code": "89250"
    },
    {
        "name": "Hamburg",
        "code": "22339"
    },
    {
        "name": "Kirchberg an der Iller",
        "code": "88486"
    },
    {
        "name": "Kitzingen",
        "code": "97318"
    },
    {
        "name": "Winsen",
        "code": "21423"
    },
    {
        "name": "Wulften",
        "code": "37199"
    },
    {
        "name": "Bad Neustadt an der Saale",
        "code": "97616"
    },
    {
        "name": "Bibertal",
        "code": "89346"
    },
    {
        "name": "Bargteheide, Delingsdorf u.a.",
        "code": "22941"
    },
    {
        "name": "Heikendorf",
        "code": "24226"
    },
    {
        "name": "Schweinfurt",
        "code": "97422"
    },
    {
        "name": "Dingelstädt",
        "code": "37351"
    },
    {
        "name": "Gallmersgarten",
        "code": "91605"
    },
    {
        "name": "Lengede",
        "code": "38268"
    },
    {
        "name": "Schmalkalden",
        "code": "98574"
    },
    {
        "name": "Ellzee",
        "code": "89352"
    },
    {
        "name": "Bachhagel",
        "code": "89429"
    },
    {
        "name": "Bächingen a.d. Brenz",
        "code": "89431"
    },
    {
        "name": "Salzgitter",
        "code": "38226"
    },
    {
        "name": "Marschacht",
        "code": "21436"
    },
    {
        "name": "Betzigau",
        "code": "87488"
    },
    {
        "name": "Brotterode-Trusetal",
        "code": "98596"
    },
    {
        "name": "Obergünzburg",
        "code": "87634"
    },
    {
        "name": "Hörselberg-Hainich",
        "code": "99820"
    },
    {
        "name": "Dentlein a. Forst",
        "code": "91599"
    },
    {
        "name": "Weiltingen",
        "code": "91744"
    },
    {
        "name": "Aislingen",
        "code": "89344"
    },
    {
        "name": "Wolfenbüttel",
        "code": "38304"
    },
    {
        "name": "Bundorf",
        "code": "97494"
    },
    {
        "name": "Herzberg, Elbingerode, Hörden",
        "code": "37412"
    },
    {
        "name": "Landensberg",
        "code": "89361"
    },
    {
        "name": "Mittelneufnach",
        "code": "86868"
    },
    {
        "name": "Woltersdorf, Müssen u.a.",
        "code": "21516"
    },
    {
        "name": "Scharbeutz, Süsel",
        "code": "23684"
    },
    {
        "name": "Rieden",
        "code": "87668"
    },
    {
        "name": "Rätzlingen",
        "code": "29590"
    },
    {
        "name": "Emersacker",
        "code": "86494"
    },
    {
        "name": "Oberhof",
        "code": "98559"
    },
    {
        "name": "Stötten am Auerberg",
        "code": "87675"
    },
    {
        "name": "Groß Grönau",
        "code": "23627"
    },
    {
        "name": "Lonnerstadt",
        "code": "91475"
    },
    {
        "name": "Haundorf",
        "code": "91729"
    },
    {
        "name": "Dittenheim",
        "code": "91723"
    },
    {
        "name": "Waal",
        "code": "86875"
    },
    {
        "name": "Weisendorf",
        "code": "91085"
    },
    {
        "name": "Untermeitingen",
        "code": "86836"
    },
    {
        "name": "Kemmern",
        "code": "96164"
    },
    {
        "name": "Ellgau",
        "code": "86679"
    },
    {
        "name": "Augsburg",
        "code": "86152"
    },
    {
        "name": "Thale, Blankenburg",
        "code": "06502"
    },
    {
        "name": "Straußfurt",
        "code": "99634"
    },
    {
        "name": "Memmelsdorf",
        "code": "96117"
    },
    {
        "name": "Frankenblick, Schalkau, Bachfeld",
        "code": "96528"
    },
    {
        "name": "Fürth",
        "code": "90766"
    },
    {
        "name": "Heringsdorf",
        "code": "23777"
    },
    {
        "name": "Wittenburg u.a.",
        "code": "19243"
    },
    {
        "name": "Dasing",
        "code": "86453"
    },
    {
        "name": "Forchheim",
        "code": "91301"
    },
    {
        "name": "Klütz",
        "code": "23948"
    },
    {
        "name": "Aachen",
        "code": "52078"
    },
    {
        "name": "Straelen",
        "code": "47638"
    },
    {
        "name": "Hürtgenwald",
        "code": "52393"
    },
    {
        "name": "Xanten",
        "code": "46509"
    },
    {
        "name": "Lasel",
        "code": "54612"
    },
    {
        "name": "Mönchengladbach",
        "code": "41066"
    },
    {
        "name": "Krefeld",
        "code": "47839"
    },
    {
        "name": "Korschenbroich",
        "code": "41352"
    },
    {
        "name": "Nettersheim",
        "code": "53947"
    },
    {
        "name": "Birresborn",
        "code": "54574"
    },
    {
        "name": "Welschbillig, Igel, Aach",
        "code": "54298"
    },
    {
        "name": "Spangdahlem",
        "code": "54529"
    },
    {
        "name": "Hünxe",
        "code": "46569"
    },
    {
        "name": "Hürth",
        "code": "50354"
    },
    {
        "name": "Düsseldorf",
        "code": "40211"
    },
    {
        "name": "Ratingen",
        "code": "40885"
    },
    {
        "name": "Düsseldorf",
        "code": "40231"
    },
    {
        "name": "Lebach",
        "code": "66822"
    },
    {
        "name": "Püttlingen",
        "code": "66346"
    },
    {
        "name": "Gusenburg",
        "code": "54413"
    },
    {
        "name": "Mülheim an der Ruhr",
        "code": "45470"
    },
    {
        "name": "Reifferscheid, Kaltenborn, Wershofen u.a.",
        "code": "53520"
    },
    {
        "name": "Essen",
        "code": "45357"
    },
    {
        "name": "Bottrop",
        "code": "46236"
    },
    {
        "name": "Hilden",
        "code": "40723"
    },
    {
        "name": "Ulmen",
        "code": "56766"
    },
    {
        "name": "Wintrich",
        "code": "54487"
    },
    {
        "name": "Essen",
        "code": "45239"
    },
    {
        "name": "Köln",
        "code": "50679"
    },
    {
        "name": "Niederkassel",
        "code": "53859"
    },
    {
        "name": "Saarbrücken",
        "code": "66123"
    },
    {
        "name": "Köln",
        "code": "51149"
    },
    {
        "name": "Solingen",
        "code": "42657"
    },
    {
        "name": "Kleinblittersdorf",
        "code": "66271"
    },
    {
        "name": "Espenau",
        "code": "34314"
    },
    {
        "name": "Winterbach",
        "code": "73650"
    },
    {
        "name": "Zweiflingen",
        "code": "74639"
    },
    {
        "name": "Fleischwangen",
        "code": "88373"
    },
    {
        "name": "Bevern",
        "code": "37639"
    },
    {
        "name": "Rudersberg",
        "code": "73635"
    },
    {
        "name": "Kassel",
        "code": "34125"
    },
    {
        "name": "Garbsen",
        "code": "30823"
    },
    {
        "name": "Bad Buchau",
        "code": "88422"
    },
    {
        "name": "Oberweser",
        "code": "34399"
    },
    {
        "name": "Neuenstein",
        "code": "74632"
    },
    {
        "name": "Niedernhall",
        "code": "74676"
    },
    {
        "name": "Wasserburg (Bodensee)",
        "code": "88142"
    },
    {
        "name": "Breisach am Rhein",
        "code": "79206"
    },
    {
        "name": "Katzweiler",
        "code": "67734"
    },
    {
        "name": "Münster",
        "code": "48155"
    },
    {
        "name": "Löningen",
        "code": "49624"
    },
    {
        "name": "Wittmund",
        "code": "26409"
    },
    {
        "name": "Merdingen",
        "code": "79291"
    },
    {
        "name": "Hilgert",
        "code": "56206"
    },
    {
        "name": "Ballrechten-Dottingen",
        "code": "79282"
    },
    {
        "name": "Staufen im Breisgau",
        "code": "79219"
    },
    {
        "name": "Apen",
        "code": "26689"
    },
    {
        "name": "Neuhäusel",
        "code": "56335"
    },
    {
        "name": "Rheinfelden (Baden)",
        "code": "79618"
    },
    {
        "name": "Freiburg im Breisgau",
        "code": "79111"
    },
    {
        "name": "Mahlberg",
        "code": "77972"
    },
    {
        "name": "Rüdesheim",
        "code": "55593"
    },
    {
        "name": "Ahlen",
        "code": "59227"
    },
    {
        "name": "Kappelrodeck",
        "code": "77876"
    },
    {
        "name": "Deidesheim",
        "code": "67146"
    },
    {
        "name": "Kandel",
        "code": "76870"
    },
    {
        "name": "Bühlertal",
        "code": "77830"
    },
    {
        "name": "Gutach (Schwarzwaldbahn)",
        "code": "77793"
    },
    {
        "name": "Nieder-Olm",
        "code": "55268"
    },
    {
        "name": "Niedernhausen",
        "code": "65527"
    },
    {
        "name": "Wiesbaden",
        "code": "65207"
    },
    {
        "name": "Freudenstadt",
        "code": "72250"
    },
    {
        "name": "Sylt",
        "code": "25980"
    },
    {
        "name": "Mettenheim",
        "code": "67582"
    },
    {
        "name": "Leimersheim",
        "code": "76774"
    },
    {
        "name": "Hohentengen am Hochrhein",
        "code": "79801"
    },
    {
        "name": "Schramberg",
        "code": "78713"
    },
    {
        "name": "Nordenham",
        "code": "26954"
    },
    {
        "name": "Emmerzhausen, Niederdreisbach, Steinebach",
        "code": "57520"
    },
    {
        "name": "Elmstein",
        "code": "67471"
    },
    {
        "name": "Werl",
        "code": "59457"
    },
    {
        "name": "Nastätten u.a.",
        "code": "56355"
    },
    {
        "name": "Bersenbrück",
        "code": "49593"
    },
    {
        "name": "Wattenheim",
        "code": "67319"
    },
    {
        "name": "Eisenberg (Pfalz)",
        "code": "67304"
    },
    {
        "name": "Elz",
        "code": "65604"
    },
    {
        "name": "Lambrecht (Pfalz)",
        "code": "67466"
    },
    {
        "name": "Fischerbach, Haslach, Hofstetten",
        "code": "77716"
    },
    {
        "name": "Hohenlinden",
        "code": "85664"
    },
    {
        "name": "Schwarzenbach",
        "code": "92720"
    },
    {
        "name": "Reimershagen, Lohmen, Zehna, Hägerfelde u.a.",
        "code": "18276"
    },
    {
        "name": "Pentling",
        "code": "93080"
    },
    {
        "name": "Regenstauf",
        "code": "93128"
    },
    {
        "name": "Gera",
        "code": "07552"
    },
    {
        "name": "Teublitz",
        "code": "93158"
    },
    {
        "name": "Taufkirchen (Vils)",
        "code": "84416"
    },
    {
        "name": "Schönwald",
        "code": "95173"
    },
    {
        "name": "Steinkirchen",
        "code": "84439"
    },
    {
        "name": "Gera",
        "code": "07546"
    },
    {
        "name": "Rosenheim",
        "code": "83022"
    },
    {
        "name": "Essenbach",
        "code": "84051"
    },
    {
        "name": "Dessau-Roßlau",
        "code": "06849"
    },
    {
        "name": "Leipzig",
        "code": "04178"
    },
    {
        "name": "Lucka",
        "code": "04613"
    },
    {
        "name": "Gars a. Inn",
        "code": "83555"
    },
    {
        "name": "Höslwang",
        "code": "83129"
    },
    {
        "name": "Fraureuth",
        "code": "08427"
    },
    {
        "name": "Leipzig",
        "code": "04229"
    },
    {
        "name": "Wiesent",
        "code": "93109"
    },
    {
        "name": "Leipzig",
        "code": "04155"
    },
    {
        "name": "Mötzing",
        "code": "93099"
    },
    {
        "name": "Leipzig",
        "code": "04103"
    },
    {
        "name": "Neumarkt-Sankt Veit",
        "code": "84494"
    },
    {
        "name": "Beetzsee, Wollin, Wenzlow, Golzow u.a.",
        "code": "14778"
    },
    {
        "name": "Treffelstein",
        "code": "93492"
    },
    {
        "name": "Loitzendorf",
        "code": "94359"
    },
    {
        "name": "Gersdorf",
        "code": "09355"
    },
    {
        "name": "Eggenfelden",
        "code": "84307"
    },
    {
        "name": "Miltach",
        "code": "93468"
    },
    {
        "name": "Jessen (Elster)",
        "code": "06917"
    },
    {
        "name": "Beelitz",
        "code": "14547"
    },
    {
        "name": "Raschau",
        "code": "08352"
    },
    {
        "name": "Thalheim/Erzgebirge",
        "code": "09380"
    },
    {
        "name": "Gornsdorf",
        "code": "09390"
    },
    {
        "name": "Prohn",
        "code": "18445"
    },
    {
        "name": "Nuthetal",
        "code": "14558"
    },
    {
        "name": "Gingst",
        "code": "18569"
    },
    {
        "name": "Berlin Wlhelmstadt",
        "code": "13595"
    },
    {
        "name": "Riesa, Stauchitz, Hirschstein",
        "code": "01594"
    },
    {
        "name": "Berlin Tegel",
        "code": "13505"
    },
    {
        "name": "Neuenkirchen",
        "code": "17498"
    },
    {
        "name": "Uebigau-Wahrenbrück",
        "code": "04938"
    },
    {
        "name": "Saldenburg",
        "code": "94163"
    },
    {
        "name": "Seiffen/Erzgeb.",
        "code": "09548"
    },
    {
        "name": "Berlin Kreuzberg",
        "code": "12047"
    },
    {
        "name": "Passau",
        "code": "94032"
    },
    {
        "name": "Pörnbach",
        "code": "85309"
    },
    {
        "name": "Lenting",
        "code": "85101"
    },
    {
        "name": "Trebgast",
        "code": "95367"
    },
    {
        "name": "Tangerhütte u.a.",
        "code": "39517"
    },
    {
        "name": "Dietfurt a.d. Altmühl",
        "code": "92345"
    },
    {
        "name": "Oberhaching",
        "code": "82041"
    },
    {
        "name": "Magdeburg",
        "code": "39130"
    },
    {
        "name": "Magdeburg",
        "code": "39120"
    },
    {
        "name": "München",
        "code": "80539"
    },
    {
        "name": "Kirchenthumbach",
        "code": "91281"
    },
    {
        "name": "Magdeburg",
        "code": "39106"
    },
    {
        "name": "München",
        "code": "81827"
    },
    {
        "name": "Valley",
        "code": "83626"
    },
    {
        "name": "Schkölen",
        "code": "07619"
    },
    {
        "name": "Sternberg",
        "code": "19406"
    },
    {
        "name": "Langenbach",
        "code": "85416"
    },
    {
        "name": "Haag a.d. Amper",
        "code": "85410"
    },
    {
        "name": "Mehlmeisel",
        "code": "95694"
    },
    {
        "name": "Retschow, Admannshagen-Bargeshagen u.a.",
        "code": "18211"
    },
    {
        "name": "Pritzwalk, Groß Pankow",
        "code": "16928"
    },
    {
        "name": "Retschow, Admannshagen-Bargeshagen u.a.",
        "code": "18211"
    },
    {
        "name": "Meineweh, Osterfeld",
        "code": "06721"
    },
    {
        "name": "Berlin Blankenburg",
        "code": "13129"
    },
    {
        "name": "Berlin Alt-Hohenschönhausen",
        "code": "13053"
    },
    {
        "name": "Berlin",
        "code": "12681"
    },
    {
        "name": "Berlin Kaulsdorf",
        "code": "12621"
    },
    {
        "name": "Kröslin, Krummin, Lassan u.a.",
        "code": "17440"
    },
    {
        "name": "Pulsnitz",
        "code": "01896"
    },
    {
        "name": "Vetschau",
        "code": "03226"
    },
    {
        "name": "Penkun u.a.",
        "code": "17328"
    },
    {
        "name": "Großdubrau, Malschwitz",
        "code": "02694"
    },
    {
        "name": "Bad Muskau, Groß Düben, Gablenz",
        "code": "02953"
    },
    {
        "name": "Niesky, Hohendubrau u.a.",
        "code": "02906"
    },
    {
        "name": "Nauroth",
        "code": "57583"
    },
    {
        "name": "Häg-Ehrsberg",
        "code": "79685"
    },
    {
        "name": "Siegen",
        "code": "57080"
    },
    {
        "name": "Bad Bergzabern u.a.",
        "code": "76887"
    },
    {
        "name": "Lennestadt",
        "code": "57368"
    },
    {
        "name": "Aspisheim, Grolsheim",
        "code": "55459"
    },
    {
        "name": "Steinach",
        "code": "77790"
    },
    {
        "name": "Edesheim",
        "code": "67483"
    },
    {
        "name": "Limburg",
        "code": "65553"
    },
    {
        "name": "Brande-Hörnerkirchen",
        "code": "25364"
    },
    {
        "name": "Fulda",
        "code": "36043"
    },
    {
        "name": "Rotenburg an der Fulda",
        "code": "36199"
    },
    {
        "name": "Gaildorf",
        "code": "74405"
    },
    {
        "name": "Wietze",
        "code": "29323"
    },
    {
        "name": "Hannover",
        "code": "30519"
    },
    {
        "name": "Hannover",
        "code": "30657"
    },
    {
        "name": "Gersfeld",
        "code": "36129"
    },
    {
        "name": "Sibbesse",
        "code": "31079"
    },
    {
        "name": "Sontra",
        "code": "36205"
    },
    {
        "name": "Westensee",
        "code": "24259"
    },
    {
        "name": "Sehnde",
        "code": "31319"
    },
    {
        "name": "Arenshausen, Uder u.a.",
        "code": "37318"
    },
    {
        "name": "Gleichen",
        "code": "37130"
    },
    {
        "name": "Ulm",
        "code": "89077"
    },
    {
        "name": "Achterwehr",
        "code": "24239"
    },
    {
        "name": "Hildesheim",
        "code": "31135"
    },
    {
        "name": "Boostedt",
        "code": "24598"
    },
    {
        "name": "Seevetal",
        "code": "21217"
    },
    {
        "name": "Kalefeld",
        "code": "37589"
    },
    {
        "name": "Hamburg",
        "code": "22415"
    },
    {
        "name": "Melsdorf",
        "code": "24109"
    },
    {
        "name": "Hamburg",
        "code": "22417"
    },
    {
        "name": "Felm",
        "code": "24244"
    },
    {
        "name": "Fischen im Allgäu",
        "code": "87538"
    },
    {
        "name": "Aalen",
        "code": "73430"
    },
    {
        "name": "Kiel",
        "code": "24106"
    },
    {
        "name": "Kirchdorf an der Iller",
        "code": "88457"
    },
    {
        "name": "Weißenhorn",
        "code": "89264"
    },
    {
        "name": "Kiel",
        "code": "24103"
    },
    {
        "name": "Niederwerrn",
        "code": "97464"
    },
    {
        "name": "Söhlde",
        "code": "31185"
    },
    {
        "name": "Preetz",
        "code": "24211"
    },
    {
        "name": "Hamburg, Oststeinbek",
        "code": "22113"
    },
    {
        "name": "Trittau",
        "code": "22946"
    },
    {
        "name": "Ergersheim",
        "code": "91465"
    },
    {
        "name": "Unterschneidheim",
        "code": "73485"
    },
    {
        "name": "Dischingen",
        "code": "89561"
    },
    {
        "name": "Haunsheim",
        "code": "89437"
    },
    {
        "name": "Rettenbach",
        "code": "89364"
    },
    {
        "name": "Krumbach (Schwaben)",
        "code": "86381"
    },
    {
        "name": "Neuengörs",
        "code": "23818"
    },
    {
        "name": "Niederorschel u.a.",
        "code": "37355"
    },
    {
        "name": "Tespe",
        "code": "21395"
    },
    {
        "name": "Brietlingen",
        "code": "21382"
    },
    {
        "name": "Natendorf",
        "code": "29587"
    },
    {
        "name": "Bad Königshofen i. Grabfeld",
        "code": "97631"
    },
    {
        "name": "Nesselwang",
        "code": "87484"
    },
    {
        "name": "Langenfeld",
        "code": "91474"
    },
    {
        "name": "Bissingen",
        "code": "86657"
    },
    {
        "name": "Südharz, Berga",
        "code": "06536"
    },
    {
        "name": "Lüchow",
        "code": "29439"
    },
    {
        "name": "Schondorf a. Ammersee",
        "code": "86938"
    },
    {
        "name": "Oberau",
        "code": "82496"
    },
    {
        "name": "Schwanstetten",
        "code": "90596"
    },
    {
        "name": "Udestedt, Mönchenholzhausen u.a.",
        "code": "99198"
    },
    {
        "name": "Königsmoos",
        "code": "86669"
    },
    {
        "name": "Kunreuth",
        "code": "91358"
    },
    {
        "name": "Lübbow",
        "code": "29488"
    },
    {
        "name": "Lauf an der Pegnitz",
        "code": "91207"
    },
    {
        "name": "Berlstedt",
        "code": "99439"
    },
    {
        "name": "Langendorf",
        "code": "29484"
    },
    {
        "name": "Sindelsdorf",
        "code": "82404"
    },
    {
        "name": "Weimar",
        "code": "99423"
    },
    {
        "name": "Allstedt",
        "code": "06542"
    },
    {
        "name": "Steffenberg",
        "code": "35239"
    },
    {
        "name": "Wetzlar",
        "code": "35579"
    },
    {
        "name": "Dornstetten",
        "code": "72280"
    },
    {
        "name": "Wetzlar",
        "code": "35576"
    },
    {
        "name": "Dautphetal",
        "code": "35232"
    },
    {
        "name": "Bielefeld",
        "code": "33617"
    },
    {
        "name": "Bromskirchen, Hallenberg",
        "code": "59969"
    },
    {
        "name": "Waldachtal",
        "code": "72178"
    },
    {
        "name": "Schopfloch",
        "code": "72296"
    },
    {
        "name": "Wetzlar",
        "code": "35581"
    },
    {
        "name": "Bremen",
        "code": "28779"
    },
    {
        "name": "Sankt Peter-Ording",
        "code": "25826"
    },
    {
        "name": "Allendorf",
        "code": "35108"
    },
    {
        "name": "Neu-Isenburg",
        "code": "63263"
    },
    {
        "name": "Bad Homburg v.d. Höhe",
        "code": "61352"
    },
    {
        "name": "Immendingen",
        "code": "78194"
    },
    {
        "name": "Kraichtal",
        "code": "76703"
    },
    {
        "name": "Heidelberg",
        "code": "69120"
    },
    {
        "name": "Münzenberg",
        "code": "35516"
    },
    {
        "name": "Frittlingen",
        "code": "78665"
    },
    {
        "name": "Dielheim",
        "code": "69234"
    },
    {
        "name": "Dautmergen",
        "code": "72356"
    },
    {
        "name": "Rietheim-Weilheim",
        "code": "78604"
    },
    {
        "name": "Niefern-Öschelbronn",
        "code": "75223"
    },
    {
        "name": "Uchte",
        "code": "31600"
    },
    {
        "name": "Bredstedt, Breklum u.a.",
        "code": "25821"
    },
    {
        "name": "Minden",
        "code": "32427"
    },
    {
        "name": "Mühlheim an der Donau",
        "code": "78570"
    },
    {
        "name": "Hirrlingen",
        "code": "72145"
    },
    {
        "name": "Neunkirchen",
        "code": "74867"
    },
    {
        "name": "Langenselbold",
        "code": "63505"
    },
    {
        "name": "Barntrup",
        "code": "32683"
    },
    {
        "name": "Mudau",
        "code": "69427"
    },
    {
        "name": "Schafflund, Meyn u.a.",
        "code": "24980"
    },
    {
        "name": "Johannesberg",
        "code": "63867"
    },
    {
        "name": "Oberndorf",
        "code": "21787"
    },
    {
        "name": "Stuttgart",
        "code": "70195"
    },
    {
        "name": "Walheim",
        "code": "74399"
    },
    {
        "name": "Stuttgart",
        "code": "70567"
    },
    {
        "name": "Wester-Ohrstedt",
        "code": "25885"
    },
    {
        "name": "Sottrum, Reeßum, Bötersen u.a.",
        "code": "27367"
    },
    {
        "name": "Stuttgart",
        "code": "70180"
    },
    {
        "name": "Stuttgart",
        "code": "70182"
    },
    {
        "name": "Gammertingen",
        "code": "72501"
    },
    {
        "name": "Mundelsheim",
        "code": "74395"
    },
    {
        "name": "Stuttgart",
        "code": "70329"
    },
    {
        "name": "Großbottwar",
        "code": "71723"
    },
    {
        "name": "Schafstedt, Weidenhof, Bornholt",
        "code": "25725"
    },
    {
        "name": "Schauenburg",
        "code": "34270"
    },
    {
        "name": "Weinsberg",
        "code": "74189"
    },
    {
        "name": "Engelschoff",
        "code": "21710"
    },
    {
        "name": "Niedenstein",
        "code": "34305"
    },
    {
        "name": "Lehrensteinsfeld",
        "code": "74251"
    },
    {
        "name": "Eichenbühl",
        "code": "63928"
    },
    {
        "name": "Wüstenrot, Beilstein-Stocksberg",
        "code": "71543"
    },
    {
        "name": "Mertloch, Welling u.a.",
        "code": "56753"
    },
    {
        "name": "Castrop-Rauxel",
        "code": "44577"
    },
    {
        "name": "Moormerland",
        "code": "26802"
    },
    {
        "name": "Lingen",
        "code": "49809"
    },
    {
        "name": "Windhagen",
        "code": "53578"
    },
    {
        "name": "Engelskirchen",
        "code": "51766"
    },
    {
        "name": "Battweiler u.a.",
        "code": "66484"
    },
    {
        "name": "Rheine",
        "code": "48432"
    },
    {
        "name": "Dortmund",
        "code": "44369"
    },
    {
        "name": "Rheine",
        "code": "48431"
    },
    {
        "name": "Herschweiler-Pettersheim",
        "code": "66909"
    },
    {
        "name": "Gelsenkirchen",
        "code": "45891"
    },
    {
        "name": "Nordhorn",
        "code": "48531"
    },
    {
        "name": "Troisdorf",
        "code": "53844"
    },
    {
        "name": "Bonn",
        "code": "53111"
    },
    {
        "name": "Sprockhövel",
        "code": "45549"
    },
    {
        "name": "Monzelfeld, Hochscheid u.a.",
        "code": "54472"
    },
    {
        "name": "Recklinghausen",
        "code": "45665"
    },
    {
        "name": "Kottenheim",
        "code": "56736"
    },
    {
        "name": "Datteln",
        "code": "45711"
    },
    {
        "name": "Dortmund",
        "code": "44147"
    },
    {
        "name": "Vinningen, Trulben, Ruppertsweiler u.a.",
        "code": "66957"
    },
    {
        "name": "Breitenfelde, Lankau",
        "code": "23881"
    },
    {
        "name": "Goslar",
        "code": "38644"
    },
    {
        "name": "Baisweil",
        "code": "87650"
    },
    {
        "name": "Schlüsselfeld",
        "code": "96132"
    },
    {
        "name": "Altenmünster",
        "code": "86450"
    },
    {
        "name": "Braunschweig",
        "code": "38126"
    },
    {
        "name": "Zeil a. Main",
        "code": "97475"
    },
    {
        "name": "Bröthen",
        "code": "21514"
    },
    {
        "name": "Wertingen",
        "code": "86637"
    },
    {
        "name": "Burgoberbach",
        "code": "91595"
    },
    {
        "name": "Pforzen",
        "code": "87666"
    },
    {
        "name": "Wechingen",
        "code": "86759"
    },
    {
        "name": "Weidenbach",
        "code": "91746"
    },
    {
        "name": "Oetzen",
        "code": "29588"
    },
    {
        "name": "Oberhof",
        "code": "98559"
    },
    {
        "name": "Wemding",
        "code": "86650"
    },
    {
        "name": "Hiltenfingen",
        "code": "86856"
    },
    {
        "name": "Aystetten",
        "code": "86482"
    },
    {
        "name": "Windsbach",
        "code": "91575"
    },
    {
        "name": "Rehna, Carlow u.a.",
        "code": "19217"
    },
    {
        "name": "Heringen/ Helme",
        "code": "99765"
    },
    {
        "name": "Steingaden",
        "code": "86989"
    },
    {
        "name": "Elleben, Wachsenburg",
        "code": "99334"
    },
    {
        "name": "Clenze",
        "code": "29459"
    },
    {
        "name": "Weil",
        "code": "86947"
    },
    {
        "name": "Großbreitenbach",
        "code": "98701"
    },
    {
        "name": "Hemhofen",
        "code": "91334"
    },
    {
        "name": "Geltendorf",
        "code": "82269"
    },
    {
        "name": "Dießen a. Ammersee",
        "code": "86911"
    },
    {
        "name": "Küsten",
        "code": "29482"
    },
    {
        "name": "Eresing",
        "code": "86941"
    },
    {
        "name": "Kranenburg",
        "code": "47559"
    },
    {
        "name": "Würselen",
        "code": "52146"
    },
    {
        "name": "Hückelhoven",
        "code": "41836"
    },
    {
        "name": "Simmerath",
        "code": "52152"
    },
    {
        "name": "Inden",
        "code": "52459"
    },
    {
        "name": "Mönchengladbach",
        "code": "41239"
    },
    {
        "name": "Merzenich",
        "code": "52399"
    },
    {
        "name": "Kordel",
        "code": "54306"
    },
    {
        "name": "Zemmer",
        "code": "54313"
    },
    {
        "name": "Bettenfeld, Niederöfflingen u.a.",
        "code": "54533"
    },
    {
        "name": "Borkum",
        "code": "26757"
    },
    {
        "name": "Mertesdorf",
        "code": "54318"
    },
    {
        "name": "Düsseldorf",
        "code": "40549"
    },
    {
        "name": "Duisburg",
        "code": "47249"
    },
    {
        "name": "Duisburg",
        "code": "47138"
    },
    {
        "name": "Duisburg",
        "code": "47279"
    },
    {
        "name": "Düsseldorf",
        "code": "40589"
    },
    {
        "name": "Köln",
        "code": "50829"
    },
    {
        "name": "Brühl",
        "code": "50321"
    },
    {
        "name": "Deuselbach, Hermeskeil, Rorodt",
        "code": "54411"
    },
    {
        "name": "Heiligenhaus",
        "code": "42579"
    },
    {
        "name": "Wesseling",
        "code": "50389"
    },
    {
        "name": "Köln",
        "code": "51143"
    },
    {
        "name": "Heek",
        "code": "48619"
    },
    {
        "name": "Essen",
        "code": "45139"
    },
    {
        "name": "Weissach im Tal",
        "code": "71554"
    },
    {
        "name": "Kassel",
        "code": "34117"
    },
    {
        "name": "Marktheidenfeld",
        "code": "97828"
    },
    {
        "name": "Forchtenberg",
        "code": "74670"
    },
    {
        "name": "Lauda-Königshofen",
        "code": "97922"
    },
    {
        "name": "Rendsburg",
        "code": "24768"
    },
    {
        "name": "Emerkingen",
        "code": "89607"
    },
    {
        "name": "Üttingen, Holzkirchen",
        "code": "97292"
    },
    {
        "name": "Steimel",
        "code": "57614"
    },
    {
        "name": "Münster",
        "code": "48143"
    },
    {
        "name": "Oberdreis",
        "code": "57639"
    },
    {
        "name": "Iserlohn",
        "code": "58636"
    },
    {
        "name": "Medard, Rathskirchen u.a.",
        "code": "67744"
    },
    {
        "name": "Malberg, Norken, Höchstenbach u.a.",
        "code": "57629"
    },
    {
        "name": "Sankt Goarshausen u.a.",
        "code": "56346"
    },
    {
        "name": "Lorch",
        "code": "65391"
    },
    {
        "name": "Winterborn, Waldgrehweiler, Niedermoschel, u.a.",
        "code": "67822"
    },
    {
        "name": "Tiefenthal",
        "code": "67311"
    },
    {
        "name": "Weisenheim am Sand",
        "code": "67256"
    },
    {
        "name": "Iffezheim",
        "code": "76473"
    },
    {
        "name": "Damme",
        "code": "49401"
    },
    {
        "name": "Oldenburg (Oldenburg)",
        "code": "26129"
    },
    {
        "name": "Wiesbaden",
        "code": "65203"
    },
    {
        "name": "Gönnheim",
        "code": "67161"
    },
    {
        "name": "Harxheim",
        "code": "55296"
    },
    {
        "name": "Gaggenau",
        "code": "76571"
    },
    {
        "name": "Ludwigshafen am Rhein",
        "code": "67071"
    },
    {
        "name": "Mutterstadt",
        "code": "67112"
    },
    {
        "name": "Gütersloh",
        "code": "33335"
    },
    {
        "name": "Bielefeld",
        "code": "33619"
    },
    {
        "name": "Villingen-Schwenningen",
        "code": "78052"
    },
    {
        "name": "Schwanewede",
        "code": "28790"
    },
    {
        "name": "Bielefeld",
        "code": "33615"
    },
    {
        "name": "Wagenfeld",
        "code": "49419"
    },
    {
        "name": "Griesheim",
        "code": "64347"
    },
    {
        "name": "Wetzlar",
        "code": "35582"
    },
    {
        "name": "Bremerhaven",
        "code": "27576"
    },
    {
        "name": "Heppenheim (Bergstraße)",
        "code": "64646"
    },
    {
        "name": "Bad Teinach-Zavelstein",
        "code": "75385"
    },
    {
        "name": "Bretten",
        "code": "75015"
    },
    {
        "name": "Frankfurt am Main",
        "code": "60325"
    },
    {
        "name": "Darmstadt",
        "code": "64289"
    },
    {
        "name": "Diemelsee",
        "code": "34519"
    },
    {
        "name": "Neulingen",
        "code": "75245"
    },
    {
        "name": "Lichtenfels",
        "code": "35104"
    },
    {
        "name": "Rockenberg",
        "code": "35519"
    },
    {
        "name": "Paderborn",
        "code": "33102"
    },
    {
        "name": "Frankfurt am Main",
        "code": "60388"
    },
    {
        "name": "Haigerloch",
        "code": "72401"
    },
    {
        "name": "Bremen",
        "code": "28217"
    },
    {
        "name": "Neckargemünd",
        "code": "69151"
    },
    {
        "name": "Mötzingen",
        "code": "71159"
    },
    {
        "name": "Friolzheim",
        "code": "71292"
    },
    {
        "name": "Nordstrand, Elisabeth-Sophien-Koog, Südfall",
        "code": "25845"
    },
    {
        "name": "Hirschhorn, Brombach, Heddesbach",
        "code": "69434"
    },
    {
        "name": "Rabenau",
        "code": "35466"
    },
    {
        "name": "Bremen",
        "code": "28207"
    },
    {
        "name": "Raddestorf",
        "code": "31604"
    },
    {
        "name": "Hildrizhausen",
        "code": "71157"
    },
    {
        "name": "Eberbach",
        "code": "69412"
    },
    {
        "name": "Erbach",
        "code": "64711"
    },
    {
        "name": "Albstadt",
        "code": "72461"
    },
    {
        "name": "Limeshain",
        "code": "63694"
    },
    {
        "name": "Blomberg",
        "code": "32825"
    },
    {
        "name": "Bückeburg",
        "code": "31675"
    },
    {
        "name": "Willebadessen",
        "code": "34439"
    },
    {
        "name": "Stetten am kalten Markt",
        "code": "72510"
    },
    {
        "name": "Ronneburg",
        "code": "63549"
    },
    {
        "name": "Langwedel",
        "code": "27299"
    },
    {
        "name": "Sigmaringen",
        "code": "72488"
    },
    {
        "name": "Owingen",
        "code": "88696"
    },
    {
        "name": "Reutlingen",
        "code": "72770"
    },
    {
        "name": "Asperg",
        "code": "71679"
    },
    {
        "name": "Stuttgart",
        "code": "70437"
    },
    {
        "name": "Stuttgart",
        "code": "70186"
    },
    {
        "name": "Schöllkrippen, Blankenbach",
        "code": "63825"
    },
    {
        "name": "Heilbronn",
        "code": "74072"
    },
    {
        "name": "Stuttgart",
        "code": "70378"
    },
    {
        "name": "Schrecksbach",
        "code": "34637"
    },
    {
        "name": "Lautertal",
        "code": "36369"
    },
    {
        "name": "Höxter",
        "code": "37671"
    },
    {
        "name": "Esslingen am Neckar",
        "code": "73734"
    },
    {
        "name": "Heigenbrücken",
        "code": "63869"
    },
    {
        "name": "Neuffen",
        "code": "72639"
    },
    {
        "name": "Hammah",
        "code": "21714"
    },
    {
        "name": "Harsefeld",
        "code": "21698"
    },
    {
        "name": "Hafenlohr, Rothenbuch",
        "code": "97840"
    },
    {
        "name": "Eichenzell",
        "code": "36124"
    },
    {
        "name": "Dörzbach",
        "code": "74677"
    },
    {
        "name": "Hemmingen",
        "code": "30966"
    },
    {
        "name": "Nordstemmen",
        "code": "31171"
    },
    {
        "name": "Ulsnis",
        "code": "24897"
    },
    {
        "name": "Sarstedt",
        "code": "31157"
    },
    {
        "name": "Buchholz in der Nordheide",
        "code": "21244"
    },
    {
        "name": "Borstel-Hohenraden",
        "code": "25494"
    },
    {
        "name": "Hergatz",
        "code": "88145"
    },
    {
        "name": "Kißlegg",
        "code": "88353"
    },
    {
        "name": "Meißner",
        "code": "37290"
    },
    {
        "name": "Giebelstadt",
        "code": "97232"
    },
    {
        "name": "Oberreute",
        "code": "88179"
    },
    {
        "name": "Westerstetten",
        "code": "89198"
    },
    {
        "name": "Bordesholm",
        "code": "24582"
    },
    {
        "name": "Steinheim am Albuch",
        "code": "89555"
    },
    {
        "name": "Eibelstadt",
        "code": "97246"
    },
    {
        "name": "Hamburg",
        "code": "20095"
    },
    {
        "name": "Dietenheim",
        "code": "89165"
    },
    {
        "name": "Bockenem",
        "code": "31167"
    },
    {
        "name": "Gerstungen",
        "code": "99834"
    },
    {
        "name": "Hamburg",
        "code": "22305"
    },
    {
        "name": "Hamburg",
        "code": "22175"
    },
    {
        "name": "Uffenheim",
        "code": "97215"
    },
    {
        "name": "Kiel",
        "code": "24116"
    },
    {
        "name": "Hamburg",
        "code": "22115"
    },
    {
        "name": "Hamburg",
        "code": "22143"
    },
    {
        "name": "Hamburg",
        "code": "22145"
    },
    {
        "name": "Hamburg",
        "code": "22145"
    },
    {
        "name": "Stimpfach",
        "code": "74597"
    },
    {
        "name": "Bröckel",
        "code": "29356"
    },
    {
        "name": "Creuzburg",
        "code": "99831"
    },
    {
        "name": "Schönkirchen",
        "code": "24232"
    },
    {
        "name": "Hermaringen",
        "code": "89568"
    },
    {
        "name": "Vögelsen",
        "code": "21360"
    },
    {
        "name": "Deutsch Evern",
        "code": "21407"
    },
    {
        "name": "Gifhorn",
        "code": "38518"
    },
    {
        "name": "Braunschweig",
        "code": "38120"
    },
    {
        "name": "Drei Gleichen",
        "code": "99869"
    },
    {
        "name": "Bleicherode",
        "code": "99752"
    },
    {
        "name": "Wolfenbüttel",
        "code": "38300"
    },
    {
        "name": "Oettingen i. Bay.",
        "code": "86732"
    },
    {
        "name": "Mönchsdeggingen",
        "code": "86751"
    },
    {
        "name": "Themar",
        "code": "98660"
    },
    {
        "name": "Lüder",
        "code": "29394"
    },
    {
        "name": "Ettringen",
        "code": "86833"
    },
    {
        "name": "Ebelsbach",
        "code": "97500"
    },
    {
        "name": "Luisenthal, Ohrdruf, Wolfis",
        "code": "99885"
    },
    {
        "name": "Amberg",
        "code": "86854"
    },
    {
        "name": "Weyhausen",
        "code": "38554"
    },
    {
        "name": "Timmendorfer Strand",
        "code": "23669"
    },
    {
        "name": "Mertingen",
        "code": "86690"
    },
    {
        "name": "Jerxheim",
        "code": "38381"
    },
    {
        "name": "Bamberg",
        "code": "96047"
    },
    {
        "name": "Rohr",
        "code": "91189"
    },
    {
        "name": "Pleinfeld",
        "code": "91785"
    },
    {
        "name": "Augsburg",
        "code": "86150"
    },
    {
        "name": "Hallerndorf",
        "code": "91352"
    },
    {
        "name": "Pappenheim",
        "code": "91788"
    },
    {
        "name": "Garmisch-Partenkirchen (Schneefernerhaus)",
        "code": "82475"
    },
    {
        "name": "Grube",
        "code": "23749"
    },
    {
        "name": "Hollenbach",
        "code": "86568"
    },
    {
        "name": "Kellenhusen",
        "code": "23746"
    },
    {
        "name": "Hagenow u.a.",
        "code": "19230"
    },
    {
        "name": "Jagsthausen",
        "code": "74249"
    },
    {
        "name": "Oberteuringen",
        "code": "88094"
    },
    {
        "name": "Lenningen",
        "code": "73252"
    },
    {
        "name": "Leutenbach",
        "code": "71397"
    },
    {
        "name": "Wennigsen (Deister)",
        "code": "30974"
    },
    {
        "name": "Schwarmstedt u.a.",
        "code": "29690"
    },
    {
        "name": "Kollmar, Pagensand",
        "code": "25377"
    },
    {
        "name": "Dollern",
        "code": "21739"
    },
    {
        "name": "Boffzen, Derental",
        "code": "37691"
    },
    {
        "name": "Königheim",
        "code": "97953"
    },
    {
        "name": "Ehingen (Donau), Lauterach",
        "code": "89584"
    },
    {
        "name": "Eriskirch",
        "code": "88097"
    },
    {
        "name": "Werbach",
        "code": "97956"
    },
    {
        "name": "Zell unter Aichelberg",
        "code": "73119"
    },
    {
        "name": "Holenberg",
        "code": "37642"
    },
    {
        "name": "Aulendorf",
        "code": "88326"
    },
    {
        "name": "Wangen",
        "code": "73117"
    },
    {
        "name": "Helsa",
        "code": "34298"
    },
    {
        "name": "Eime",
        "code": "31036"
    },
    {
        "name": "Nachrodt-Wiblingwerde",
        "code": "58769"
    },
    {
        "name": "Eschbach",
        "code": "79427"
    },
    {
        "name": "Fürstenau",
        "code": "49584"
    },
    {
        "name": "Ihringen",
        "code": "79241"
    },
    {
        "name": "Iserlohn",
        "code": "58640"
    },
    {
        "name": "Seibersbach",
        "code": "55444"
    },
    {
        "name": "Unna",
        "code": "59423"
    },
    {
        "name": "Guldental",
        "code": "55452"
    },
    {
        "name": "Sankt Goarshausen u.a.",
        "code": "56346"
    },
    {
        "name": "Herbolzheim",
        "code": "79336"
    },
    {
        "name": "Kettenkamp, Eggermühlen, Ankum",
        "code": "49577"
    },
    {
        "name": "Hamm",
        "code": "59073"
    },
    {
        "name": "Limburg",
        "code": "65551"
    },
    {
        "name": "Baden-Baden",
        "code": "76534"
    },
    {
        "name": "Grünstadt",
        "code": "67269"
    },
    {
        "name": "Obrigheim (Pfalz)",
        "code": "67283"
    },
    {
        "name": "Rödersheim-Gronau",
        "code": "67127"
    },
    {
        "name": "Heßheim",
        "code": "67258"
    },
    {
        "name": "Sinn",
        "code": "35764"
    },
    {
        "name": "Steinhagen",
        "code": "33803"
    },
    {
        "name": "Goldenstedt",
        "code": "49424"
    },
    {
        "name": "Nastätten u.a.",
        "code": "56355"
    },
    {
        "name": "Sembach",
        "code": "67681"
    },
    {
        "name": "Emmerzhausen, Niederdreisbach, Steinebach",
        "code": "57520"
    },
    {
        "name": "Neuhemsbach",
        "code": "67680"
    },
    {
        "name": "Schuttertal",
        "code": "77978"
    },
    {
        "name": "Kirchheimbolanden",
        "code": "67292"
    },
    {
        "name": "Bischheim u.a.",
        "code": "67294"
    },
    {
        "name": "Edenkoben",
        "code": "67480"
    },
    {
        "name": "Wiefelstede",
        "code": "26215"
    },
    {
        "name": "Herzogenrath",
        "code": "52134"
    },
    {
        "name": "Niederkrüchten",
        "code": "41372"
    },
    {
        "name": "Langerwehe",
        "code": "52379"
    },
    {
        "name": "Schönecken",
        "code": "54614"
    },
    {
        "name": "Dahlem",
        "code": "53949"
    },
    {
        "name": "Welschbillig, Igel, Aach",
        "code": "54298"
    },
    {
        "name": "Lissendorf",
        "code": "54587"
    },
    {
        "name": "Irsch",
        "code": "54451"
    },
    {
        "name": "Neuss",
        "code": "41462"
    },
    {
        "name": "Trier",
        "code": "54295"
    },
    {
        "name": "Neuss",
        "code": "41468"
    },
    {
        "name": "Düsseldorf",
        "code": "40489"
    },
    {
        "name": "Dinslaken",
        "code": "46539"
    },
    {
        "name": "Antweiler, Aremberg, Dorsel, Eichenbach, Aremberg, Fuchshofen und Müsch",
        "code": "53533"
    },
    {
        "name": "Düsseldorf",
        "code": "40472"
    },
    {
        "name": "Reifferscheid, Kaltenborn, Wershofen u.a.",
        "code": "53520"
    },
    {
        "name": "Saarbrücken",
        "code": "66127"
    },
    {
        "name": "Reinsfeld",
        "code": "54421"
    },
    {
        "name": "Gillenfeld",
        "code": "54558"
    },
    {
        "name": "Velen",
        "code": "46342"
    },
    {
        "name": "Köln",
        "code": "50676"
    },
    {
        "name": "Köln",
        "code": "50733"
    },
    {
        "name": "Ettringen",
        "code": "56729"
    },
    {
        "name": "Essen",
        "code": "45127"
    },
    {
        "name": "Bernkastel-Kues u.a.",
        "code": "54470"
    },
    {
        "name": "Alflen",
        "code": "56828"
    },
    {
        "name": "Nordhorn",
        "code": "48529"
    },
    {
        "name": "Bonn",
        "code": "53119"
    },
    {
        "name": "Essen",
        "code": "45259"
    },
    {
        "name": "Steinfurt",
        "code": "48565"
    },
    {
        "name": "Großheide",
        "code": "26532"
    },
    {
        "name": "Hornbach",
        "code": "66500"
    },
    {
        "name": "Leutesdorf",
        "code": "56599"
    },
    {
        "name": "Saffig",
        "code": "56648"
    },
    {
        "name": "Irmenach",
        "code": "56843"
    },
    {
        "name": "Freisen",
        "code": "66629"
    },
    {
        "name": "Rhede (Ems)",
        "code": "26899"
    },
    {
        "name": "Ediger-Eller",
        "code": "56814"
    },
    {
        "name": "Kirchenlamitz",
        "code": "95158"
    },
    {
        "name": "Köthen",
        "code": "06366"
    },
    {
        "name": "Droyßig, Wetterzeube",
        "code": "06722"
    },
    {
        "name": "Halle/ Saale",
        "code": "06114"
    },
    {
        "name": "Buch a. Buchrain",
        "code": "85656"
    },
    {
        "name": "Steinhöring",
        "code": "85643"
    },
    {
        "name": "Meyenburg, Kümmernitztal u.a.",
        "code": "16945"
    },
    {
        "name": "Hohenleuben",
        "code": "07958"
    },
    {
        "name": "Etzenricht",
        "code": "92694"
    },
    {
        "name": "Nabburg",
        "code": "92507"
    },
    {
        "name": "Leuchtenberg",
        "code": "92705"
    },
    {
        "name": "Altendorf",
        "code": "92540"
    },
    {
        "name": "Laberweinting",
        "code": "84082"
    },
    {
        "name": "Leipzig",
        "code": "04207"
    },
    {
        "name": "Lalendorf, Langhagen",
        "code": "18279"
    },
    {
        "name": "Kröning",
        "code": "84178"
    },
    {
        "name": "Oberbergkirchen",
        "code": "84564"
    },
    {
        "name": "Teunz",
        "code": "92552"
    },
    {
        "name": "Pleystein",
        "code": "92714"
    },
    {
        "name": "Leipzig",
        "code": "04279"
    },
    {
        "name": "Chiemsee",
        "code": "83256"
    },
    {
        "name": "Aham",
        "code": "84168"
    },
    {
        "name": "Dingolfing",
        "code": "84130"
    },
    {
        "name": "Rötz",
        "code": "92444"
    },
    {
        "name": "Eilenburg u.a.",
        "code": "04838"
    },
    {
        "name": "Ahrenshagen-Daskow, Trinwillershagen u.a.",
        "code": "18320"
    },
    {
        "name": "Röbel/Müritz",
        "code": "17207"
    },
    {
        "name": "Machern",
        "code": "04827"
    },
    {
        "name": "Stadlern",
        "code": "92549"
    },
    {
        "name": "Willmering",
        "code": "93497"
    },
    {
        "name": "Torgau, Dreiheide",
        "code": "04860"
    },
    {
        "name": "Tann",
        "code": "84367"
    },
    {
        "name": "Crottendorf",
        "code": "09474"
    },
    {
        "name": "Johanniskirchen",
        "code": "84381"
    },
    {
        "name": "Patersdorf",
        "code": "94265"
    },
    {
        "name": "Potsdam",
        "code": "14476"
    },
    {
        "name": "Wittibreut",
        "code": "84384"
    },
    {
        "name": "Annaberg-Buchholz, Mildenau",
        "code": "09456"
    },
    {
        "name": "Kößlarn",
        "code": "94149"
    },
    {
        "name": "Ruhstorf a.d. Rott",
        "code": "94099"
    },
    {
        "name": "Schlieben",
        "code": "04936"
    },
    {
        "name": "Berlin Charlottenburg",
        "code": "10589"
    },
    {
        "name": "Berlin Charlottenburg",
        "code": "10587"
    },
    {
        "name": "Berlin Steglitz",
        "code": "12163"
    },
    {
        "name": "Berlin Moabit",
        "code": "10551"
    },
    {
        "name": "Neuburg a. Inn",
        "code": "94127"
    },
    {
        "name": "Berlin Mariendorf",
        "code": "12107"
    },
    {
        "name": "Berlin Kreuzberg",
        "code": "10965"
    },
    {
        "name": "Berlin Gesundbrunnen",
        "code": "13357"
    },
    {
        "name": "Perlesreut",
        "code": "94157"
    },
    {
        "name": "Schorfheide",
        "code": "16244"
    },
    {
        "name": "Berlin Friedrichshain",
        "code": "10243"
    },
    {
        "name": "Berlin Neukölln",
        "code": "12043"
    },
    {
        "name": "Erfurt",
        "code": "99085"
    },
    {
        "name": "Dömitz",
        "code": "19303"
    },
    {
        "name": "Kottgeisering",
        "code": "82288"
    },
    {
        "name": "Ebermannstadt",
        "code": "91320"
    },
    {
        "name": "Nürnberg",
        "code": "90471"
    },
    {
        "name": "Wittenförden u.a.",
        "code": "19073"
    },
    {
        "name": "Spatzenhausen",
        "code": "82447"
    },
    {
        "name": "Eberfing",
        "code": "82390"
    },
    {
        "name": "Seeland",
        "code": "06466"
    },
    {
        "name": "Wonsees",
        "code": "96197"
    },
    {
        "name": "Waischenfeld",
        "code": "91344"
    },
    {
        "name": "Schnaittach",
        "code": "91220"
    },
    {
        "name": "Weimar",
        "code": "99425"
    },
    {
        "name": "Bergkirchen",
        "code": "85232"
    },
    {
        "name": "Kinding",
        "code": "85125"
    },
    {
        "name": "Mainleus",
        "code": "95336"
    },
    {
        "name": "Kochel a. See",
        "code": "82431"
    },
    {
        "name": "Puchheim",
        "code": "82178"
    },
    {
        "name": "Reichenschwand",
        "code": "91244"
    },
    {
        "name": "Schwerin",
        "code": "19055"
    },
    {
        "name": "Scheyern",
        "code": "85298"
    },
    {
        "name": "Sengenthal",
        "code": "92369"
    },
    {
        "name": "Steinwiesen",
        "code": "96349"
    },
    {
        "name": "München",
        "code": "81243"
    },
    {
        "name": "Karlsfeld",
        "code": "85757"
    },
    {
        "name": "Klostermansfeld, Benndorf",
        "code": "06308"
    },
    {
        "name": "Alfeld",
        "code": "91236"
    },
    {
        "name": "Großmehring",
        "code": "85098"
    },
    {
        "name": "München",
        "code": "81477"
    },
    {
        "name": "Paunzhausen",
        "code": "85307"
    },
    {
        "name": "Magdeburg",
        "code": "39110"
    },
    {
        "name": "Barleben",
        "code": "39179"
    },
    {
        "name": "München",
        "code": "80804"
    },
    {
        "name": "Reichersbeuern",
        "code": "83677"
    },
    {
        "name": "Wittenberge, Rühstädt",
        "code": "19322"
    },
    {
        "name": "Painten",
        "code": "93351"
    },
    {
        "name": "Parsdorf/Hergolding",
        "code": "85599"
    },
    {
        "name": "Sparneck",
        "code": "95234"
    },
    {
        "name": "Hörgertshausen",
        "code": "85413"
    },
    {
        "name": "Legde/Quitzöbel, Bad Wilsnack",
        "code": "19336"
    },
    {
        "name": "Münchenbernsdorf, Schwarzbach, Bocka",
        "code": "07589"
    },
    {
        "name": "Wriezen",
        "code": "16269"
    },
    {
        "name": "Briesen, Rauen u.a.",
        "code": "15518"
    },
    {
        "name": "Bad Schandau",
        "code": "01814"
    },
    {
        "name": "Neutrebbin, Neuhardenberg",
        "code": "15320"
    },
    {
        "name": "Blankensee, Grambow u.a.",
        "code": "17322"
    },
    {
        "name": "Guben, Schenkendöbern",
        "code": "03172"
    },
    {
        "name": "Berlin Niederschöneweide",
        "code": "12439"
    },
    {
        "name": "Lauchhammer",
        "code": "01979"
    },
    {
        "name": "Usedom u.a.",
        "code": "17406"
    },
    {
        "name": "Lünen",
        "code": "44536"
    },
    {
        "name": "Dortmund",
        "code": "44339"
    },
    {
        "name": "Dellfeld",
        "code": "66503"
    },
    {
        "name": "Horhausen (Westerwald)",
        "code": "56593"
    },
    {
        "name": "Lauterecken u.a.",
        "code": "67742"
    },
    {
        "name": "Emmelshausen",
        "code": "56281"
    },
    {
        "name": "Nortmoor",
        "code": "26845"
    },
    {
        "name": "Neuenburg am Rhein",
        "code": "79395"
    }
]';
    $data = json_decode($jsonArray, true);
    $benzerSehirler = [];
    foreach ($data as $item) {
        $name = $item['name'];
        $code = $item['code'];
        $findCity = \App\Models\City::where("post_code", $code)->first();
        if ($findCity){
            $benzerSehirler[] = $name;
        }
        else{
            $city = new \App\Models\City();
            $city->name = $name;
            $city->slug = \Illuminate\Support\Str::slug($name);
            $city->post_code= $code;
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