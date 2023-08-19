<?php

use Illuminate\Support\Facades\Route;
Route::get('/test', function (){
    $jsonArray = '[
    {
        "code": "1000",
        "name": "Lausanne",
        "": ""
    },
    {
        "code": "1003",
        "name": "Lausanne",
        "": ""
    },
    {
        "code": "1004",
        "name": "Lausanne",
        "": ""
    },
    {
        "code": "1005",
        "name": "Lausanne",
        "": ""
    },
    {
        "code": "1006",
        "name": "Lausanne",
        "": ""
    },
    {
        "code": "1007",
        "name": "Lausanne",
        "": ""
    },
    {
        "code": "1008",
        "name": "Jouxtens-Mézery",
        "": ""
    },
    {
        "code": "1008",
        "name": "Prilly",
        "": ""
    },
    {
        "code": "1009",
        "name": "Pully",
        "": ""
    },
    {
        "code": "1010",
        "name": "Lausanne",
        "": ""
    },
    {
        "code": "1011",
        "name": "Lausanne",
        "": ""
    },
    {
        "code": "1012",
        "name": "Lausanne",
        "": ""
    },
    {
        "code": "1015",
        "name": "Lausanne",
        "": ""
    },
    {
        "code": "1018",
        "name": "Lausanne",
        "": ""
    },
    {
        "code": "1020",
        "name": "Renens VD",
        "": ""
    },
    {
        "code": "1022",
        "name": "Chavannes-près-Renens",
        "": ""
    },
    {
        "code": "1023",
        "name": "Crissier",
        "": ""
    },
    {
        "code": "1024",
        "name": "Ecublens VD",
        "": ""
    },
    {
        "code": "1025",
        "name": "St-Sulpice VD",
        "": ""
    },
    {
        "code": "1026",
        "name": "Denges",
        "": ""
    },
    {
        "code": "1026",
        "name": "Echandens",
        "": ""
    },
    {
        "code": "1027",
        "name": "Lonay",
        "": ""
    },
    {
        "code": "1028",
        "name": "Préverenges",
        "": ""
    },
    {
        "code": "1029",
        "name": "Villars-Ste-Croix",
        "": ""
    },
    {
        "code": "1030",
        "name": "Bussigny-près-Lausanne",
        "": ""
    },
    {
        "code": "1031",
        "name": "Mex VD",
        "": ""
    },
    {
        "code": "1032",
        "name": "Romanel-sur-Lausanne",
        "": ""
    },
    {
        "code": "1033",
        "name": "Cheseaux-sur-Lausanne",
        "": ""
    },
    {
        "code": "1034",
        "name": "Boussens",
        "": ""
    },
    {
        "code": "1035",
        "name": "Bournens",
        "": ""
    },
    {
        "code": "1036",
        "name": "Sullens",
        "": ""
    },
    {
        "code": "1037",
        "name": "Etagnières",
        "": ""
    },
    {
        "code": "1038",
        "name": "Bercher",
        "": ""
    },
    {
        "code": "1040",
        "name": "St-Barthélemy VD",
        "": ""
    },
    {
        "code": "1040",
        "name": "Villars-le-Terroir",
        "": ""
    },
    {
        "code": "1040",
        "name": "Echallens",
        "": ""
    },
    {
        "code": "1041",
        "name": "Dommartin",
        "": ""
    },
    {
        "code": "1041",
        "name": "Poliez-Pittet",
        "": ""
    },
    {
        "code": "1041",
        "name": "Bottens",
        "": ""
    },
    {
        "code": "1041",
        "name": "Naz",
        "": ""
    },
    {
        "code": "1041",
        "name": "Montaubion-Chardonney",
        "": ""
    },
    {
        "code": "1041",
        "name": "Poliez-le-Grand",
        "": ""
    },
    {
        "code": "1042",
        "name": "Bettens",
        "": ""
    },
    {
        "code": "1042",
        "name": "Bioley-Orjulaz",
        "": ""
    },
    {
        "code": "1042",
        "name": "Assens",
        "": ""
    },
    {
        "code": "1043",
        "name": "Sugnens",
        "": ""
    },
    {
        "code": "1044",
        "name": "Fey",
        "": ""
    },
    {
        "code": "1045",
        "name": "Ogens",
        "": ""
    },
    {
        "code": "1046",
        "name": "Rueyres",
        "": ""
    },
    {
        "code": "1047",
        "name": "Oppens",
        "": ""
    },
    {
        "code": "1052",
        "name": "Le Mont-sur-Lausanne",
        "": ""
    },
    {
        "code": "1053",
        "name": "Bretigny-sur-Morrens",
        "": ""
    },
    {
        "code": "1053",
        "name": "Cugy VD",
        "": ""
    },
    {
        "code": "1054",
        "name": "Morrens VD",
        "": ""
    },
    {
        "code": "1055",
        "name": "Froideville",
        "": ""
    },
    {
        "code": "1058",
        "name": "Villars-Tiercelin",
        "": ""
    },
    {
        "code": "1059",
        "name": "Peney-le-Jorat",
        "": ""
    },
    {
        "code": "1061",
        "name": "Villars-Mendraz",
        "": ""
    },
    {
        "code": "1062",
        "name": "Sottens",
        "": ""
    },
    {
        "code": "1063",
        "name": "Peyres-Possens",
        "": ""
    },
    {
        "code": "1063",
        "name": "Boulens",
        "": ""
    },
    {
        "code": "1063",
        "name": "Chapelle-sur-Moudon",
        "": ""
    },
    {
        "code": "1063",
        "name": "Martherenges",
        "": ""
    },
    {
        "code": "1066",
        "name": "Epalinges",
        "": ""
    },
    {
        "code": "1068",
        "name": "Les Monts-de-Pully",
        "": ""
    },
    {
        "code": "1070",
        "name": "Puidoux",
        "": ""
    },
    {
        "code": "1071",
        "name": "Rivaz",
        "": ""
    },
    {
        "code": "1071",
        "name": "St-Saphorin (Lavaux)",
        "": ""
    },
    {
        "code": "1071",
        "name": "Chexbres",
        "": ""
    },
    {
        "code": "1072",
        "name": "Forel (Lavaux)",
        "": ""
    },
    {
        "code": "1073",
        "name": "Mollie-Margot",
        "": ""
    },
    {
        "code": "1073",
        "name": "Savigny",
        "": ""
    },
    {
        "code": "1076",
        "name": "Ferlens VD",
        "": ""
    },
    {
        "code": "1077",
        "name": "Servion",
        "": ""
    },
    {
        "code": "1078",
        "name": "Essertes",
        "": ""
    },
    {
        "code": "1080",
        "name": "Les Cullayes",
        "": ""
    },
    {
        "code": "1081",
        "name": "Montpreveyres",
        "": ""
    },
    {
        "code": "1082",
        "name": "Corcelles-le-Jorat",
        "": ""
    },
    {
        "code": "1083",
        "name": "Mézières VD",
        "": ""
    },
    {
        "code": "1084",
        "name": "Carrouge VD",
        "": ""
    },
    {
        "code": "1085",
        "name": "Vulliens",
        "": ""
    },
    {
        "code": "1088",
        "name": "Ropraz",
        "": ""
    },
    {
        "code": "1090",
        "name": "La Croix (Lutry)",
        "": ""
    },
    {
        "code": "1091",
        "name": "Aran",
        "": ""
    },
    {
        "code": "1091",
        "name": "Chenaux",
        "": ""
    },
    {
        "code": "1091",
        "name": "Grandvaux",
        "": ""
    },
    {
        "code": "1092",
        "name": "Belmont-sur-Lausanne",
        "": ""
    },
    {
        "code": "1093",
        "name": "La Conversion",
        "": ""
    },
    {
        "code": "1094",
        "name": "Paudex",
        "": ""
    },
    {
        "code": "1095",
        "name": "Lutry",
        "": ""
    },
    {
        "code": "1096",
        "name": "Villette (Lavaux)",
        "": ""
    },
    {
        "code": "1096",
        "name": "Cully",
        "": ""
    },
    {
        "code": "1097",
        "name": "Riex",
        "": ""
    },
    {
        "code": "1098",
        "name": "Epesses",
        "": ""
    },
    {
        "code": "1110",
        "name": "Morges",
        "": ""
    },
    {
        "code": "1112",
        "name": "Echichens",
        "": ""
    },
    {
        "code": "1113",
        "name": "St-Saphorin-sur-Morges",
        "": ""
    },
    {
        "code": "1114",
        "name": "Colombier VD",
        "": ""
    },
    {
        "code": "1115",
        "name": "Vullierens",
        "": ""
    },
    {
        "code": "1116",
        "name": "Cottens VD",
        "": ""
    },
    {
        "code": "1117",
        "name": "Grancy",
        "": ""
    },
    {
        "code": "1121",
        "name": "Bremblens",
        "": ""
    },
    {
        "code": "1122",
        "name": "Romanel-sur-Morges",
        "": ""
    },
    {
        "code": "1123",
        "name": "Aclens",
        "": ""
    },
    {
        "code": "1124",
        "name": "Gollion",
        "": ""
    },
    {
        "code": "1125",
        "name": "Monnaz",
        "": ""
    },
    {
        "code": "1126",
        "name": "Vaux-sur-Morges",
        "": ""
    },
    {
        "code": "1127",
        "name": "Clarmont",
        "": ""
    },
    {
        "code": "1128",
        "name": "Reverolle",
        "": ""
    },
    {
        "code": "1131",
        "name": "Tolochenaz",
        "": ""
    },
    {
        "code": "1132",
        "name": "Lully VD",
        "": ""
    },
    {
        "code": "1134",
        "name": "Vufflens-le-Château",
        "": ""
    },
    {
        "code": "1134",
        "name": "Chigny",
        "": ""
    },
    {
        "code": "1135",
        "name": "Denens",
        "": ""
    },
    {
        "code": "1136",
        "name": "Bussy-Chardonney",
        "": ""
    },
    {
        "code": "1141",
        "name": "Sévery",
        "": ""
    },
    {
        "code": "1142",
        "name": "Pampigny",
        "": ""
    },
    {
        "code": "1143",
        "name": "Apples",
        "": ""
    },
    {
        "code": "1144",
        "name": "Ballens",
        "": ""
    },
    {
        "code": "1145",
        "name": "Bière",
        "": ""
    },
    {
        "code": "1146",
        "name": "Mollens VD",
        "": ""
    },
    {
        "code": "1147",
        "name": "Montricher",
        "": ""
    },
    {
        "code": "1148",
        "name": "Cuarnens",
        "": ""
    },
    {
        "code": "1148",
        "name": "Moiry VD",
        "": ""
    },
    {
        "code": "1148",
        "name": "La Praz",
        "": ""
    },
    {
        "code": "1148",
        "name": "Mont-la-Ville",
        "": ""
    },
    {
        "code": "1148",
        "name": "Chavannes-le-Veyron",
        "": ""
    },
    {
        "code": "1148",
        "name": "Mauraz",
        "": ""
    },
    {
        "code": "1148",
        "name": "Villars-Bozon",
        "": ""
    },
    {
        "code": "1148",
        "name": "La Coudre",
        "": ""
    },
    {
        "code": "1148",
        "name": "LIsle",
        "": ""
    },
    {
        "code": "1149",
        "name": "Berolle",
        "": ""
    },
    {
        "code": "1162",
        "name": "St-Prex",
        "": ""
    },
    {
        "code": "1163",
        "name": "Etoy",
        "": ""
    },
    {
        "code": "1164",
        "name": "Buchillon",
        "": ""
    },
    {
        "code": "1165",
        "name": "Allaman",
        "": ""
    },
    {
        "code": "1166",
        "name": "Perroy",
        "": ""
    },
    {
        "code": "1167",
        "name": "Lussy-sur-Morges",
        "": ""
    },
    {
        "code": "1168",
        "name": "Villars-sous-Yens",
        "": ""
    },
    {
        "code": "1169",
        "name": "Yens",
        "": ""
    },
    {
        "code": "1170",
        "name": "Aubonne",
        "": ""
    },
    {
        "code": "1172",
        "name": "Bougy-Villars",
        "": ""
    },
    {
        "code": "1173",
        "name": "Féchy",
        "": ""
    },
    {
        "code": "1174",
        "name": "Montherod",
        "": ""
    },
    {
        "code": "1174",
        "name": "Pizy",
        "": ""
    },
    {
        "code": "1175",
        "name": "Lavigny",
        "": ""
    },
    {
        "code": "1176",
        "name": "St-Livres",
        "": ""
    },
    {
        "code": "1180",
        "name": "Tartegnin",
        "": ""
    },
    {
        "code": "1180",
        "name": "Rolle",
        "": ""
    },
    {
        "code": "1182",
        "name": "Gilly",
        "": ""
    },
    {
        "code": "1183",
        "name": "Bursins",
        "": ""
    },
    {
        "code": "1184",
        "name": "Vinzel",
        "": ""
    },
    {
        "code": "1184",
        "name": "Luins",
        "": ""
    },
    {
        "code": "1185",
        "name": "Mont-sur-Rolle",
        "": ""
    },
    {
        "code": "1186",
        "name": "Essertines-sur-Rolle",
        "": ""
    },
    {
        "code": "1187",
        "name": "St-Oyens",
        "": ""
    },
    {
        "code": "1188",
        "name": "Gimel",
        "": ""
    },
    {
        "code": "1188",
        "name": "St-George",
        "": ""
    },
    {
        "code": "1189",
        "name": "Saubraz",
        "": ""
    },
    {
        "code": "1195",
        "name": "Dully",
        "": ""
    },
    {
        "code": "1195",
        "name": "Bursinel",
        "": ""
    },
    {
        "code": "1196",
        "name": "Gland",
        "": ""
    },
    {
        "code": "1197",
        "name": "Prangins",
        "": ""
    },
    {
        "code": "1200",
        "name": "Genève",
        "": ""
    },
    {
        "code": "1201",
        "name": "Genève",
        "": ""
    },
    {
        "code": "1202",
        "name": "Genève",
        "": ""
    },
    {
        "code": "1203",
        "name": "Genève",
        "": ""
    },
    {
        "code": "1204",
        "name": "Genève",
        "": ""
    },
    {
        "code": "1205",
        "name": "Genève",
        "": ""
    },
    {
        "code": "1206",
        "name": "Genève",
        "": ""
    },
    {
        "code": "1207",
        "name": "Genève",
        "": ""
    },
    {
        "code": "1208",
        "name": "Genève",
        "": ""
    },
    {
        "code": "1209",
        "name": "Genève",
        "": ""
    },
    {
        "code": "1212",
        "name": "Grand-Lancy",
        "": ""
    },
    {
        "code": "1213",
        "name": "Petit-Lancy",
        "": ""
    },
    {
        "code": "1213",
        "name": "Onex",
        "": ""
    },
    {
        "code": "1214",
        "name": "Vernier",
        "": ""
    },
    {
        "code": "1215",
        "name": "Genève 15 Aéroport",
        "": ""
    },
    {
        "code": "1216",
        "name": "Cointrin",
        "": ""
    },
    {
        "code": "1217",
        "name": "Meyrin",
        "": ""
    },
    {
        "code": "1218",
        "name": "Le Grand-Saconnex",
        "": ""
    },
    {
        "code": "1219",
        "name": "Le Lignon",
        "": ""
    },
    {
        "code": "1219",
        "name": "Aïre",
        "": ""
    },
    {
        "code": "1219",
        "name": "Châtelaine",
        "": ""
    },
    {
        "code": "1220",
        "name": "Les Avanchets",
        "": ""
    },
    {
        "code": "1222",
        "name": "Vésenaz",
        "": ""
    },
    {
        "code": "1223",
        "name": "Cologny",
        "": ""
    },
    {
        "code": "1224",
        "name": "Chêne-Bougeries",
        "": ""
    },
    {
        "code": "1225",
        "name": "Chêne-Bourg",
        "": ""
    },
    {
        "code": "1226",
        "name": "Thônex",
        "": ""
    },
    {
        "code": "1227",
        "name": "Les Acacias",
        "": ""
    },
    {
        "code": "1227",
        "name": "Carouge GE",
        "": ""
    },
    {
        "code": "1228",
        "name": "Plan-les-Ouates",
        "": ""
    },
    {
        "code": "1231",
        "name": "Conches",
        "": ""
    },
    {
        "code": "1232",
        "name": "Confignon",
        "": ""
    },
    {
        "code": "1233",
        "name": "Bernex",
        "": ""
    },
    {
        "code": "1234",
        "name": "Vessy",
        "": ""
    },
    {
        "code": "1236",
        "name": "Cartigny",
        "": ""
    },
    {
        "code": "1237",
        "name": "Avully",
        "": ""
    },
    {
        "code": "1239",
        "name": "Collex",
        "": ""
    },
    {
        "code": "1241",
        "name": "Puplinge",
        "": ""
    },
    {
        "code": "1242",
        "name": "Satigny",
        "": ""
    },
    {
        "code": "1243",
        "name": "Presinge",
        "": ""
    },
    {
        "code": "1244",
        "name": "Choulex",
        "": ""
    },
    {
        "code": "1245",
        "name": "Collonge-Bellerive",
        "": ""
    },
    {
        "code": "1246",
        "name": "Corsier GE",
        "": ""
    },
    {
        "code": "1247",
        "name": "Anières",
        "": ""
    },
    {
        "code": "1248",
        "name": "Hermance",
        "": ""
    },
    {
        "code": "1251",
        "name": "Gy",
        "": ""
    },
    {
        "code": "1252",
        "name": "Meinier",
        "": ""
    },
    {
        "code": "1253",
        "name": "Vandoeuvres",
        "": ""
    },
    {
        "code": "1254",
        "name": "Jussy",
        "": ""
    },
    {
        "code": "1255",
        "name": "Veyrier",
        "": ""
    },
    {
        "code": "1256",
        "name": "Troinex",
        "": ""
    },
    {
        "code": "1257",
        "name": "La Croix-de-Rozon",
        "": ""
    },
    {
        "code": "1258",
        "name": "Perly",
        "": ""
    },
    {
        "code": "1260",
        "name": "Nyon",
        "": ""
    },
    {
        "code": "1261",
        "name": "Longirod",
        "": ""
    },
    {
        "code": "1261",
        "name": "Marchissy",
        "": ""
    },
    {
        "code": "1261",
        "name": "Le Vaud",
        "": ""
    },
    {
        "code": "1262",
        "name": "Eysins",
        "": ""
    },
    {
        "code": "1263",
        "name": "Crassier",
        "": ""
    },
    {
        "code": "1264",
        "name": "St-Cergue",
        "": ""
    },
    {
        "code": "1265",
        "name": "La Cure",
        "": ""
    },
    {
        "code": "1266",
        "name": "Duillier",
        "": ""
    },
    {
        "code": "1267",
        "name": "Vich",
        "": ""
    },
    {
        "code": "1267",
        "name": "Coinsins",
        "": ""
    },
    {
        "code": "1268",
        "name": "Burtigny",
        "": ""
    },
    {
        "code": "1268",
        "name": "Begnins",
        "": ""
    },
    {
        "code": "1269",
        "name": "Bassins",
        "": ""
    },
    {
        "code": "1270",
        "name": "Trélex",
        "": ""
    },
    {
        "code": "1271",
        "name": "Givrins",
        "": ""
    },
    {
        "code": "1272",
        "name": "Genolier",
        "": ""
    },
    {
        "code": "1273",
        "name": "Le Muids",
        "": ""
    },
    {
        "code": "1273",
        "name": "Arzier",
        "": ""
    },
    {
        "code": "1274",
        "name": "Grens",
        "": ""
    },
    {
        "code": "1274",
        "name": "Signy",
        "": ""
    },
    {
        "code": "1275",
        "name": "Chéserex",
        "": ""
    },
    {
        "code": "1276",
        "name": "Gingins",
        "": ""
    },
    {
        "code": "1277",
        "name": "Arnex-sur-Nyon",
        "": ""
    },
    {
        "code": "1277",
        "name": "Borex",
        "": ""
    },
    {
        "code": "1278",
        "name": "La Rippe",
        "": ""
    },
    {
        "code": "1279",
        "name": "Bogis-Bossey",
        "": ""
    },
    {
        "code": "1279",
        "name": "Chavannes-de-Bogis",
        "": ""
    },
    {
        "code": "1281",
        "name": "Russin",
        "": ""
    },
    {
        "code": "1283",
        "name": "Dardagny",
        "": ""
    },
    {
        "code": "1283",
        "name": "La Plaine",
        "": ""
    },
    {
        "code": "1284",
        "name": "Chancy",
        "": ""
    },
    {
        "code": "1285",
        "name": "Athenaz (Avusy)",
        "": ""
    },
    {
        "code": "1286",
        "name": "Soral",
        "": ""
    },
    {
        "code": "1287",
        "name": "Laconnex",
        "": ""
    },
    {
        "code": "1288",
        "name": "Aire-la-Ville",
        "": ""
    },
    {
        "code": "1290",
        "name": "Versoix",
        "": ""
    },
    {
        "code": "1290",
        "name": "Chavannes-des-Bois",
        "": ""
    },
    {
        "code": "1291",
        "name": "Commugny",
        "": ""
    },
    {
        "code": "1292",
        "name": "Chambésy",
        "": ""
    },
    {
        "code": "1293",
        "name": "Bellevue",
        "": ""
    },
    {
        "code": "1294",
        "name": "Genthod",
        "": ""
    },
    {
        "code": "1295",
        "name": "Mies",
        "": ""
    },
    {
        "code": "1295",
        "name": "Tannay",
        "": ""
    },
    {
        "code": "1296",
        "name": "Coppet",
        "": ""
    },
    {
        "code": "1297",
        "name": "Founex",
        "": ""
    },
    {
        "code": "1298",
        "name": "Céligny",
        "": ""
    },
    {
        "code": "1299",
        "name": "Crans-près-Céligny",
        "": ""
    },
    {
        "code": "1302",
        "name": "Vufflens-la-Ville",
        "": ""
    },
    {
        "code": "1303",
        "name": "Penthaz",
        "": ""
    },
    {
        "code": "1304",
        "name": "Senarclens",
        "": ""
    },
    {
        "code": "1304",
        "name": "Dizy",
        "": ""
    },
    {
        "code": "1304",
        "name": "Allens",
        "": ""
    },
    {
        "code": "1304",
        "name": "Cossonay-Ville",
        "": ""
    },
    {
        "code": "1305",
        "name": "Penthalaz",
        "": ""
    },
    {
        "code": "1306",
        "name": "Daillens",
        "": ""
    },
    {
        "code": "1307",
        "name": "Lussery-Villars",
        "": ""
    },
    {
        "code": "1308",
        "name": "La Chaux (Cossonay)",
        "": ""
    },
    {
        "code": "1312",
        "name": "Eclépens",
        "": ""
    },
    {
        "code": "1313",
        "name": "Ferreyres",
        "": ""
    },
    {
        "code": "1315",
        "name": "La Sarraz",
        "": ""
    },
    {
        "code": "1316",
        "name": "Chevilly",
        "": ""
    },
    {
        "code": "1317",
        "name": "Orny",
        "": ""
    },
    {
        "code": "1318",
        "name": "Pompaples",
        "": ""
    },
    {
        "code": "1321",
        "name": "Arnex-sur-Orbe",
        "": ""
    },
    {
        "code": "1322",
        "name": "Croy",
        "": ""
    },
    {
        "code": "1323",
        "name": "Romainmôtier",
        "": ""
    },
    {
        "code": "1324",
        "name": "Premier",
        "": ""
    },
    {
        "code": "1325",
        "name": "Vaulion",
        "": ""
    },
    {
        "code": "1326",
        "name": "Juriens",
        "": ""
    },
    {
        "code": "1329",
        "name": "Bretonnières",
        "": ""
    },
    {
        "code": "1337",
        "name": "Vallorbe",
        "": ""
    },
    {
        "code": "1338",
        "name": "Ballaigues",
        "": ""
    },
    {
        "code": "1341",
        "name": "Orient",
        "": ""
    },
    {
        "code": "1342",
        "name": "Le Pont",
        "": ""
    },
    {
        "code": "1343",
        "name": "Les Charbonnières",
        "": ""
    },
    {
        "code": "1344",
        "name": "LAbbaye",
        "": ""
    },
    {
        "code": "1345",
        "name": "Le Lieu",
        "": ""
    },
    {
        "code": "1346",
        "name": "Les Bioux",
        "": ""
    },
    {
        "code": "1347",
        "name": "Le Solliat",
        "": ""
    },
    {
        "code": "1347",
        "name": "Le Sentier",
        "": ""
    },
    {
        "code": "1348",
        "name": "Le Brassus",
        "": ""
    },
    {
        "code": "1350",
        "name": "Orbe",
        "": ""
    },
    {
        "code": "1352",
        "name": "Agiez",
        "": ""
    },
    {
        "code": "1353",
        "name": "Bofflens",
        "": ""
    },
    {
        "code": "1354",
        "name": "Montcherand",
        "": ""
    },
    {
        "code": "1355",
        "name": "Sergey",
        "": ""
    },
    {
        "code": "1355",
        "name": "L Abergement",
        "": ""
    },
    {
        "code": "1356",
        "name": "Les Clées",
        "": ""
    },
    {
        "code": "1356",
        "name": "La Russille",
        "": ""
    },
    {
        "code": "1357",
        "name": "Lignerolle",
        "": ""
    },
    {
        "code": "1358",
        "name": "Valeyres-sous-Rances",
        "": ""
    },
    {
        "code": "1372",
        "name": "Bavois",
        "": ""
    },
    {
        "code": "1373",
        "name": "Chavornay",
        "": ""
    },
    {
        "code": "1374",
        "name": "Corcelles-sur-Chavornay",
        "": ""
    },
    {
        "code": "1375",
        "name": "Penthéréaz",
        "": ""
    },
    {
        "code": "1376",
        "name": "Eclagnens",
        "": ""
    },
    {
        "code": "1376",
        "name": "Goumoens-le-Jux",
        "": ""
    },
    {
        "code": "1376",
        "name": "Goumoens-la-Ville",
        "": ""
    },
    {
        "code": "1377",
        "name": "Oulens-sous-Echallens",
        "": ""
    },
    {
        "code": "1400",
        "name": "Yverdon-les-Bains",
        "": ""
    },
    {
        "code": "1400",
        "name": "Cheseaux-Noréaz",
        "": ""
    },
    {
        "code": "1404",
        "name": "Cuarny",
        "": ""
    },
    {
        "code": "1404",
        "name": "Villars-Epeney",
        "": ""
    },
    {
        "code": "1405",
        "name": "Pomy",
        "": ""
    },
    {
        "code": "1406",
        "name": "Cronay",
        "": ""
    },
    {
        "code": "1407",
        "name": "Bioley-Magnoux",
        "": ""
    },
    {
        "code": "1407",
        "name": "Gossens",
        "": ""
    },
    {
        "code": "1407",
        "name": "Mézery-près-Donneloye",
        "": ""
    },
    {
        "code": "1407",
        "name": "Donneloye",
        "": ""
    },
    {
        "code": "1408",
        "name": "Prahins",
        "": ""
    },
    {
        "code": "1409",
        "name": "Chanéaz",
        "": ""
    },
    {
        "code": "1410",
        "name": "Prévondavaux",
        "": ""
    },
    {
        "code": "1410",
        "name": "St-Cierges",
        "": ""
    },
    {
        "code": "1410",
        "name": "Denezy",
        "": ""
    },
    {
        "code": "1410",
        "name": "Correvon",
        "": ""
    },
    {
        "code": "1410",
        "name": "Thierrens",
        "": ""
    },
    {
        "code": "1412",
        "name": "Valeyres-sous-Ursins",
        "": ""
    },
    {
        "code": "1412",
        "name": "Ursins",
        "": ""
    },
    {
        "code": "1413",
        "name": "Orzens",
        "": ""
    },
    {
        "code": "1415",
        "name": "Molondin",
        "": ""
    },
    {
        "code": "1415",
        "name": "Démoret",
        "": ""
    },
    {
        "code": "1416",
        "name": "Pailly",
        "": ""
    },
    {
        "code": "1417",
        "name": "Epautheyres",
        "": ""
    },
    {
        "code": "1417",
        "name": "Essertines-sur-Yverdon",
        "": ""
    },
    {
        "code": "1418",
        "name": "Vuarrens",
        "": ""
    },
    {
        "code": "1420",
        "name": "Fiez",
        "": ""
    },
    {
        "code": "1421",
        "name": "Fontaines-sur-Grandson",
        "": ""
    },
    {
        "code": "1421",
        "name": "Grandevent",
        "": ""
    },
    {
        "code": "1422",
        "name": "Grandson",
        "": ""
    },
    {
        "code": "1423",
        "name": "Fontanezier",
        "": ""
    },
    {
        "code": "1423",
        "name": "Romairon",
        "": ""
    },
    {
        "code": "1423",
        "name": "Vaugondry",
        "": ""
    },
    {
        "code": "1423",
        "name": "Villars-Burquin",
        "": ""
    },
    {
        "code": "1424",
        "name": "Champagne",
        "": ""
    },
    {
        "code": "1425",
        "name": "Onnens VD",
        "": ""
    },
    {
        "code": "1426",
        "name": "Corcelles-près-Concise",
        "": ""
    },
    {
        "code": "1426",
        "name": "Concise",
        "": ""
    },
    {
        "code": "1427",
        "name": "Bonvillars",
        "": ""
    },
    {
        "code": "1428",
        "name": "Mutrux",
        "": ""
    },
    {
        "code": "1428",
        "name": "Provence",
        "": ""
    },
    {
        "code": "1429",
        "name": "Giez",
        "": ""
    },
    {
        "code": "1430",
        "name": "Orges",
        "": ""
    },
    {
        "code": "1431",
        "name": "Vugelles-La Mothe",
        "": ""
    },
    {
        "code": "1431",
        "name": "Novalles",
        "": ""
    },
    {
        "code": "1432",
        "name": "Belmont-sur-Yverdon",
        "": ""
    },
    {
        "code": "1432",
        "name": "Gressy",
        "": ""
    },
    {
        "code": "1433",
        "name": "Suchy",
        "": ""
    },
    {
        "code": "1434",
        "name": "Ependes VD",
        "": ""
    },
    {
        "code": "1435",
        "name": "Essert-Pittet",
        "": ""
    },
    {
        "code": "1436",
        "name": "Treycovagnes",
        "": ""
    },
    {
        "code": "1436",
        "name": "Chamblon",
        "": ""
    },
    {
        "code": "1437",
        "name": "Suscévaz",
        "": ""
    },
    {
        "code": "1438",
        "name": "Mathod",
        "": ""
    },
    {
        "code": "1439",
        "name": "Rances",
        "": ""
    },
    {
        "code": "1441",
        "name": "Valeyres-sous-Montagny",
        "": ""
    },
    {
        "code": "1442",
        "name": "Montagny-près-Yverdon",
        "": ""
    },
    {
        "code": "1443",
        "name": "Champvent",
        "": ""
    },
    {
        "code": "1443",
        "name": "Essert-sous-Champvent",
        "": ""
    },
    {
        "code": "1443",
        "name": "Villars-sous-Champvent",
        "": ""
    },
    {
        "code": "1445",
        "name": "Vuiteboeuf",
        "": ""
    },
    {
        "code": "1446",
        "name": "Baulmes",
        "": ""
    },
    {
        "code": "1450",
        "name": "La Sagne (Ste-Croix)",
        "": ""
    },
    {
        "code": "1450",
        "name": "Le Château-de-Ste-Croix",
        "": ""
    },
    {
        "code": "1450",
        "name": "Ste-Croix",
        "": ""
    },
    {
        "code": "1452",
        "name": "Les Rasses",
        "": ""
    },
    {
        "code": "1453",
        "name": "Mauborget",
        "": ""
    },
    {
        "code": "1453",
        "name": "Bullet",
        "": ""
    },
    {
        "code": "1454",
        "name": "La Vraconnaz",
        "": ""
    },
    {
        "code": "1454",
        "name": "L Auberson",
        "": ""
    },
    {
        "code": "1462",
        "name": "Yvonand",
        "": ""
    },
    {
        "code": "1463",
        "name": "Rovray",
        "": ""
    },
    {
        "code": "1464",
        "name": "Chêne-Pâquier",
        "": ""
    },
    {
        "code": "1464",
        "name": "Chavannes-le-Chêne",
        "": ""
    },
    {
        "code": "1468",
        "name": "Cheyres",
        "": ""
    },
    {
        "code": "1470",
        "name": "Bollion",
        "": ""
    },
    {
        "code": "1470",
        "name": "Lully FR",
        "": ""
    },
    {
        "code": "1470",
        "name": "Seiry",
        "": ""
    },
    {
        "code": "1470",
        "name": "Estavayer-le-Lac",
        "": ""
    },
    {
        "code": "1473",
        "name": "Font",
        "": ""
    },
    {
        "code": "1473",
        "name": "Châtillon FR",
        "": ""
    },
    {
        "code": "1474",
        "name": "Châbles FR",
        "": ""
    },
    {
        "code": "1475",
        "name": "Autavaux",
        "": ""
    },
    {
        "code": "1475",
        "name": "Forel FR",
        "": ""
    },
    {
        "code": "1475",
        "name": "Montbrelloz",
        "": ""
    },
    {
        "code": "1482",
        "name": "Cugy FR",
        "": ""
    },
    {
        "code": "1483",
        "name": "Frasses",
        "": ""
    },
    {
        "code": "1483",
        "name": "Vesin",
        "": ""
    },
    {
        "code": "1483",
        "name": "Montet (Broye)",
        "": ""
    },
    {
        "code": "1484",
        "name": "Aumont",
        "": ""
    },
    {
        "code": "1484",
        "name": "Granges-de-Vesin",
        "": ""
    },
    {
        "code": "1485",
        "name": "Nuvilly",
        "": ""
    },
    {
        "code": "1486",
        "name": "Vuissens",
        "": ""
    },
    {
        "code": "1489",
        "name": "Murist",
        "": ""
    },
    {
        "code": "1509",
        "name": "Vucherens",
        "": ""
    },
    {
        "code": "1510",
        "name": "Syens",
        "": ""
    },
    {
        "code": "1510",
        "name": "Moudon",
        "": ""
    },
    {
        "code": "1512",
        "name": "Chavannes-sur-Moudon",
        "": ""
    },
    {
        "code": "1513",
        "name": "Hermenches",
        "": ""
    },
    {
        "code": "1513",
        "name": "Rossenges",
        "": ""
    },
    {
        "code": "1514",
        "name": "Bussy-sur-Moudon",
        "": ""
    },
    {
        "code": "1515",
        "name": "Neyruz-sur-Moudon",
        "": ""
    },
    {
        "code": "1515",
        "name": "Villars-le-Comte",
        "": ""
    },
    {
        "code": "1521",
        "name": "Curtilles",
        "": ""
    },
    {
        "code": "1522",
        "name": "Oulens-sur-Lucens",
        "": ""
    },
    {
        "code": "1522",
        "name": "Lucens",
        "": ""
    },
    {
        "code": "1523",
        "name": "Granges-près-Marnand",
        "": ""
    },
    {
        "code": "1524",
        "name": "Marnand",
        "": ""
    },
    {
        "code": "1525",
        "name": "Seigneux",
        "": ""
    },
    {
        "code": "1525",
        "name": "Henniez",
        "": ""
    },
    {
        "code": "1526",
        "name": "Forel-sur-Lucens",
        "": ""
    },
    {
        "code": "1526",
        "name": "Cremin",
        "": ""
    },
    {
        "code": "1527",
        "name": "Villeneuve FR",
        "": ""
    },
    {
        "code": "1528",
        "name": "Praratoud",
        "": ""
    },
    {
        "code": "1528",
        "name": "Surpierre",
        "": ""
    },
    {
        "code": "1529",
        "name": "Cheiry",
        "": ""
    },
    {
        "code": "1530",
        "name": "Payerne",
        "": ""
    },
    {
        "code": "1532",
        "name": "Fétigny",
        "": ""
    },
    {
        "code": "1533",
        "name": "Ménières",
        "": ""
    },
    {
        "code": "1534",
        "name": "Chapelle (Broye)",
        "": ""
    },
    {
        "code": "1534",
        "name": "Sassel",
        "": ""
    },
    {
        "code": "1535",
        "name": "Combremont-le-Grand",
        "": ""
    },
    {
        "code": "1536",
        "name": "Combremont-le-Petit",
        "": ""
    },
    {
        "code": "1537",
        "name": "Champtauroz",
        "": ""
    },
    {
        "code": "1538",
        "name": "Treytorrens (Payerne)",
        "": ""
    },
    {
        "code": "1541",
        "name": "Morens FR",
        "": ""
    },
    {
        "code": "1541",
        "name": "Sévaz",
        "": ""
    },
    {
        "code": "1541",
        "name": "Bussy FR",
        "": ""
    },
    {
        "code": "1542",
        "name": "Rueyres-les-Prés",
        "": ""
    },
    {
        "code": "1543",
        "name": "Grandcour",
        "": ""
    },
    {
        "code": "1544",
        "name": "Gletterens",
        "": ""
    },
    {
        "code": "1545",
        "name": "Chevroux",
        "": ""
    },
    {
        "code": "1551",
        "name": "Vers-chez-Perrin",
        "": ""
    },
    {
        "code": "1552",
        "name": "Trey",
        "": ""
    },
    {
        "code": "1553",
        "name": "Châtonnaye",
        "": ""
    },
    {
        "code": "1554",
        "name": "Sédeilles",
        "": ""
    },
    {
        "code": "1554",
        "name": "Rossens VD",
        "": ""
    },
    {
        "code": "1555",
        "name": "Villarzel",
        "": ""
    },
    {
        "code": "1562",
        "name": "Corcelles-près-Payerne",
        "": ""
    },
    {
        "code": "1563",
        "name": "Dompierre FR",
        "": ""
    },
    {
        "code": "1564",
        "name": "Domdidier",
        "": ""
    },
    {
        "code": "1565",
        "name": "Vallon",
        "": ""
    },
    {
        "code": "1565",
        "name": "Missy",
        "": ""
    },
    {
        "code": "1566",
        "name": "Les Friques",
        "": ""
    },
    {
        "code": "1566",
        "name": "St-Aubin FR",
        "": ""
    },
    {
        "code": "1567",
        "name": "Delley",
        "": ""
    },
    {
        "code": "1568",
        "name": "Portalban",
        "": ""
    },
    {
        "code": "1580",
        "name": "Oleyres",
        "": ""
    },
    {
        "code": "1580",
        "name": "Avenches",
        "": ""
    },
    {
        "code": "1582",
        "name": "Donatyre",
        "": ""
    },
    {
        "code": "1583",
        "name": "Villarepos",
        "": ""
    },
    {
        "code": "1584",
        "name": "Villars-le-Grand",
        "": ""
    },
    {
        "code": "1585",
        "name": "Bellerive VD",
        "": ""
    },
    {
        "code": "1585",
        "name": "Cotterd",
        "": ""
    },
    {
        "code": "1585",
        "name": "Salavaux",
        "": ""
    },
    {
        "code": "1586",
        "name": "Vallamand",
        "": ""
    },
    {
        "code": "1587",
        "name": "Montmagny",
        "": ""
    },
    {
        "code": "1587",
        "name": "Constantine",
        "": ""
    },
    {
        "code": "1588",
        "name": "Cudrefin",
        "": ""
    },
    {
        "code": "1589",
        "name": "Chabrey",
        "": ""
    },
    {
        "code": "1595",
        "name": "Clavaleyres",
        "": ""
    },
    {
        "code": "1595",
        "name": "Faoug",
        "": ""
    },
    {
        "code": "1607",
        "name": "Les Tavernes",
        "": ""
    },
    {
        "code": "1607",
        "name": "Les Thioleyres",
        "": ""
    },
    {
        "code": "1607",
        "name": "Palézieux-Village",
        "": ""
    },
    {
        "code": "1607",
        "name": "Palézieux",
        "": ""
    },
    {
        "code": "1608",
        "name": "Chapelle (Glâne)",
        "": ""
    },
    {
        "code": "1608",
        "name": "Bussigny-sur-Oron",
        "": ""
    },
    {
        "code": "1608",
        "name": "Chesalles-sur-Oron",
        "": ""
    },
    {
        "code": "1608",
        "name": "Oron-le-Châtel",
        "": ""
    },
    {
        "code": "1609",
        "name": "Besencens",
        "": ""
    },
    {
        "code": "1609",
        "name": "Fiaugères",
        "": ""
    },
    {
        "code": "1609",
        "name": "Le Jordil",
        "": ""
    },
    {
        "code": "1609",
        "name": "St-Martin FR",
        "": ""
    },
    {
        "code": "1610",
        "name": "Châtillens",
        "": ""
    },
    {
        "code": "1610",
        "name": "Vuibroye",
        "": ""
    },
    {
        "code": "1610",
        "name": "Oron-la-Ville",
        "": ""
    },
    {
        "code": "1611",
        "name": "Le Crêt-près-Semsales",
        "": ""
    },
    {
        "code": "1612",
        "name": "Ecoteaux",
        "": ""
    },
    {
        "code": "1613",
        "name": "Maracon",
        "": ""
    },
    {
        "code": "1614",
        "name": "Granges (Veveyse)",
        "": ""
    },
    {
        "code": "1615",
        "name": "Bossonnens",
        "": ""
    },
    {
        "code": "1616",
        "name": "Attalens",
        "": ""
    },
    {
        "code": "1617",
        "name": "Tatroz",
        "": ""
    },
    {
        "code": "1617",
        "name": "Remaufens",
        "": ""
    },
    {
        "code": "1618",
        "name": "Châtel-St-Denis",
        "": ""
    },
    {
        "code": "1619",
        "name": "Les Paccots",
        "": ""
    },
    {
        "code": "1623",
        "name": "Semsales",
        "": ""
    },
    {
        "code": "1624",
        "name": "La Verrerie",
        "": ""
    },
    {
        "code": "1624",
        "name": "Grattavache",
        "": ""
    },
    {
        "code": "1624",
        "name": "Progens",
        "": ""
    },
    {
        "code": "1625",
        "name": "Maules",
        "": ""
    },
    {
        "code": "1625",
        "name": "Sâles (Gruyère)",
        "": ""
    },
    {
        "code": "1626",
        "name": "Romanens",
        "": ""
    },
    {
        "code": "1626",
        "name": "Treyfayes",
        "": ""
    },
    {
        "code": "1626",
        "name": "Rueyres-Treyfayes",
        "": ""
    },
    {
        "code": "1627",
        "name": "Vaulruz",
        "": ""
    },
    {
        "code": "1628",
        "name": "Vuadens",
        "": ""
    },
    {
        "code": "1630",
        "name": "Bulle",
        "": ""
    },
    {
        "code": "1632",
        "name": "Riaz",
        "": ""
    },
    {
        "code": "1633",
        "name": "Vuippens",
        "": ""
    },
    {
        "code": "1633",
        "name": "Marsens",
        "": ""
    },
    {
        "code": "1634",
        "name": "La Roche FR",
        "": ""
    },
    {
        "code": "1635",
        "name": "La Tour-de-Trême",
        "": ""
    },
    {
        "code": "1636",
        "name": "Broc",
        "": ""
    },
    {
        "code": "1637",
        "name": "Charmey (Gruyère)",
        "": ""
    },
    {
        "code": "1638",
        "name": "Morlon",
        "": ""
    },
    {
        "code": "1642",
        "name": "Sorens",
        "": ""
    },
    {
        "code": "1643",
        "name": "Gumefens",
        "": ""
    },
    {
        "code": "1644",
        "name": "Avry-devant-Pont",
        "": ""
    },
    {
        "code": "1645",
        "name": "Le Bry",
        "": ""
    },
    {
        "code": "1646",
        "name": "Echarlens",
        "": ""
    },
    {
        "code": "1647",
        "name": "Corbières",
        "": ""
    },
    {
        "code": "1648",
        "name": "Hauteville",
        "": ""
    },
    {
        "code": "1649",
        "name": "Pont-la-Ville",
        "": ""
    },
    {
        "code": "1651",
        "name": "Villarvolard",
        "": ""
    },
    {
        "code": "1652",
        "name": "Botterens",
        "": ""
    },
    {
        "code": "1652",
        "name": "Villarbeney",
        "": ""
    },
    {
        "code": "1653",
        "name": "Châtel-sur-Montsalvens",
        "": ""
    },
    {
        "code": "1653",
        "name": "Crésuz",
        "": ""
    },
    {
        "code": "1654",
        "name": "Cerniat FR",
        "": ""
    },
    {
        "code": "1656",
        "name": "Im Fang",
        "": ""
    },
    {
        "code": "1656",
        "name": "Jaun",
        "": ""
    },
    {
        "code": "1657",
        "name": "Abländschen",
        "": ""
    },
    {
        "code": "1658",
        "name": "La Tine",
        "": ""
    },
    {
        "code": "1658",
        "name": "Rossinière",
        "": ""
    },
    {
        "code": "1659",
        "name": "Flendruz",
        "": ""
    },
    {
        "code": "1659",
        "name": "Rougemont",
        "": ""
    },
    {
        "code": "1660",
        "name": "Les Moulins",
        "": ""
    },
    {
        "code": "1660",
        "name": "L Etivaz",
        "": ""
    },
    {
        "code": "1660",
        "name": "Château-d Oex",
        "": ""
    },
    {
        "code": "1660",
        "name": "La Lécherette",
        "": ""
    },
    {
        "code": "1661",
        "name": "Le Pâquier-Montbarry",
        "": ""
    },
    {
        "code": "1663",
        "name": "Moléson-sur-Gruyères",
        "": ""
    },
    {
        "code": "1663",
        "name": "Pringy",
        "": ""
    },
    {
        "code": "1663",
        "name": "Gruyères",
        "": ""
    },
    {
        "code": "1663",
        "name": "Epagny",
        "": ""
    },
    {
        "code": "1665",
        "name": "Estavannens",
        "": ""
    },
    {
        "code": "1666",
        "name": "Villars-sous-Mont",
        "": ""
    },
    {
        "code": "1666",
        "name": "Grandvillard",
        "": ""
    },
    {
        "code": "1667",
        "name": "Enney",
        "": ""
    },
    {
        "code": "1669",
        "name": "Neirivue",
        "": ""
    },
    {
        "code": "1669",
        "name": "Les Sciernes-d Albeuve",
        "": ""
    },
    {
        "code": "1669",
        "name": "Montbovon",
        "": ""
    },
    {
        "code": "1669",
        "name": "Lessoc",
        "": ""
    },
    {
        "code": "1669",
        "name": "Albeuve",
        "": ""
    },
    {
        "code": "1670",
        "name": "Bionnens",
        "": ""
    },
    {
        "code": "1670",
        "name": "Esmonts",
        "": ""
    },
    {
        "code": "1670",
        "name": "Ursy",
        "": ""
    },
    {
        "code": "1673",
        "name": "Auboranges",
        "": ""
    },
    {
        "code": "1673",
        "name": "Ecublens FR",
        "": ""
    },
    {
        "code": "1673",
        "name": "Rue",
        "": ""
    },
    {
        "code": "1673",
        "name": "Gillarens",
        "": ""
    },
    {
        "code": "1673",
        "name": "Promasens",
        "": ""
    },
    {
        "code": "1674",
        "name": "Vuarmarens",
        "": ""
    },
    {
        "code": "1674",
        "name": "Montet (Glâne)",
        "": ""
    },
    {
        "code": "1674",
        "name": "Morlens",
        "": ""
    },
    {
        "code": "1675",
        "name": "Vauderens",
        "": ""
    },
    {
        "code": "1675",
        "name": "Blessens",
        "": ""
    },
    {
        "code": "1675",
        "name": "Mossel",
        "": ""
    },
    {
        "code": "1676",
        "name": "Chavannes-les-Forts",
        "": ""
    },
    {
        "code": "1677",
        "name": "Prez-vers-Siviriez",
        "": ""
    },
    {
        "code": "1678",
        "name": "Siviriez",
        "": ""
    },
    {
        "code": "1679",
        "name": "Villaraboud",
        "": ""
    },
    {
        "code": "1680",
        "name": "Berlens",
        "": ""
    },
    {
        "code": "1680",
        "name": "Romont FR",
        "": ""
    },
    {
        "code": "1681",
        "name": "Billens",
        "": ""
    },
    {
        "code": "1681",
        "name": "Hennens",
        "": ""
    },
    {
        "code": "1682",
        "name": "Villars-Bramard",
        "": ""
    },
    {
        "code": "1682",
        "name": "Dompierre VD",
        "": ""
    },
    {
        "code": "1682",
        "name": "Lovatens",
        "": ""
    },
    {
        "code": "1682",
        "name": "Cerniaz VD",
        "": ""
    },
    {
        "code": "1682",
        "name": "Prévonloup",
        "": ""
    },
    {
        "code": "1683",
        "name": "Brenles",
        "": ""
    },
    {
        "code": "1683",
        "name": "Chesalles-sur-Moudon",
        "": ""
    },
    {
        "code": "1683",
        "name": "Sarzens",
        "": ""
    },
    {
        "code": "1684",
        "name": "Mézières FR",
        "": ""
    },
    {
        "code": "1685",
        "name": "Villariaz",
        "": ""
    },
    {
        "code": "1686",
        "name": "Grangettes-près-Romont",
        "": ""
    },
    {
        "code": "1686",
        "name": "La Neirigue",
        "": ""
    },
    {
        "code": "1687",
        "name": "Estévenens",
        "": ""
    },
    {
        "code": "1687",
        "name": "La Magne",
        "": ""
    },
    {
        "code": "1687",
        "name": "Vuisternens-devant-Romont",
        "": ""
    },
    {
        "code": "1688",
        "name": "Sommentier",
        "": ""
    },
    {
        "code": "1688",
        "name": "Lieffrens",
        "": ""
    },
    {
        "code": "1689",
        "name": "Le Châtelard-près-Romont",
        "": ""
    },
    {
        "code": "1690",
        "name": "Lussy FR",
        "": ""
    },
    {
        "code": "1690",
        "name": "Villaz-St-Pierre",
        "": ""
    },
    {
        "code": "1691",
        "name": "Villarimboud",
        "": ""
    },
    {
        "code": "1692",
        "name": "Massonnens",
        "": ""
    },
    {
        "code": "1694",
        "name": "Orsonnens",
        "": ""
    },
    {
        "code": "1694",
        "name": "Chavannes-sous-Orsonnens",
        "": ""
    },
    {
        "code": "1694",
        "name": "Villargiroud",
        "": ""
    },
    {
        "code": "1694",
        "name": "Villarsiviriaux",
        "": ""
    },
    {
        "code": "1695",
        "name": "Villarlod",
        "": ""
    },
    {
        "code": "1695",
        "name": "Estavayer-le-Gibloux",
        "": ""
    },
    {
        "code": "1695",
        "name": "Rueyres-St-Laurent",
        "": ""
    },
    {
        "code": "1695",
        "name": "Villarsel-le-Gibloux",
        "": ""
    },
    {
        "code": "1696",
        "name": "Vuisternens-en-Ogoz",
        "": ""
    },
    {
        "code": "1697",
        "name": "La Joux FR",
        "": ""
    },
    {
        "code": "1697",
        "name": "Les Ecasseys",
        "": ""
    },
    {
        "code": "1699",
        "name": "Bouloz",
        "": ""
    },
    {
        "code": "1699",
        "name": "Pont (Veveyse)",
        "": ""
    },
    {
        "code": "1699",
        "name": "Porsel",
        "": ""
    },
    {
        "code": "1700",
        "name": "Fribourg",
        "": ""
    },
    {
        "code": "1708",
        "name": "Fribourg",
        "": ""
    },
    {
        "code": "1712",
        "name": "Tafers",
        "": ""
    },
    {
        "code": "1713",
        "name": "St. Antoni",
        "": ""
    },
    {
        "code": "1714",
        "name": "Heitenried",
        "": ""
    },
    {
        "code": "1715",
        "name": "Alterswil FR",
        "": ""
    },
    {
        "code": "1716",
        "name": "Oberschrot",
        "": ""
    },
    {
        "code": "1716",
        "name": "Schwarzsee",
        "": ""
    },
    {
        "code": "1716",
        "name": "Plaffeien",
        "": ""
    },
    {
        "code": "1717",
        "name": "St. Ursen",
        "": ""
    },
    {
        "code": "1718",
        "name": "Rechthalten",
        "": ""
    },
    {
        "code": "1719",
        "name": "Zumholz",
        "": ""
    },
    {
        "code": "1719",
        "name": "Brünisried",
        "": ""
    },
    {
        "code": "1720",
        "name": "Chésopelloz",
        "": ""
    },
    {
        "code": "1720",
        "name": "Corminboeuf",
        "": ""
    },
    {
        "code": "1721",
        "name": "Cormérod",
        "": ""
    },
    {
        "code": "1721",
        "name": "Courtion",
        "": ""
    },
    {
        "code": "1721",
        "name": "Misery",
        "": ""
    },
    {
        "code": "1722",
        "name": "Bourguillon",
        "": ""
    },
    {
        "code": "1723",
        "name": "Marly",
        "": ""
    },
    {
        "code": "1723",
        "name": "Pierrafortscha",
        "": ""
    },
    {
        "code": "1723",
        "name": "Villarsel-sur-Marly",
        "": ""
    },
    {
        "code": "1724",
        "name": "Bonnefontaine",
        "": ""
    },
    {
        "code": "1724",
        "name": "Essert FR",
        "": ""
    },
    {
        "code": "1724",
        "name": "Ferpicloz",
        "": ""
    },
    {
        "code": "1724",
        "name": "Montévraz",
        "": ""
    },
    {
        "code": "1724",
        "name": "Oberried FR",
        "": ""
    },
    {
        "code": "1724",
        "name": "Senèdes",
        "": ""
    },
    {
        "code": "1724",
        "name": "Zénauva",
        "": ""
    },
    {
        "code": "1724",
        "name": "Le Mouret",
        "": ""
    },
    {
        "code": "1725",
        "name": "Posieux",
        "": ""
    },
    {
        "code": "1726",
        "name": "Farvagny-le-Petit",
        "": ""
    },
    {
        "code": "1726",
        "name": "Grenilles",
        "": ""
    },
    {
        "code": "1726",
        "name": "Posat",
        "": ""
    },
    {
        "code": "1726",
        "name": "Farvagny",
        "": ""
    },
    {
        "code": "1727",
        "name": "Magnedens",
        "": ""
    },
    {
        "code": "1727",
        "name": "Corpataux-Magnedens",
        "": ""
    },
    {
        "code": "1728",
        "name": "Rossens FR",
        "": ""
    },
    {
        "code": "1730",
        "name": "Ecuvillens",
        "": ""
    },
    {
        "code": "1731",
        "name": "Ependes FR",
        "": ""
    },
    {
        "code": "1732",
        "name": "Arconciel",
        "": ""
    },
    {
        "code": "1733",
        "name": "Treyvaux",
        "": ""
    },
    {
        "code": "1734",
        "name": "Tentlingen",
        "": ""
    },
    {
        "code": "1735",
        "name": "Giffers",
        "": ""
    },
    {
        "code": "1736",
        "name": "St. Silvester",
        "": ""
    },
    {
        "code": "1737",
        "name": "Plasselb",
        "": ""
    },
    {
        "code": "1738",
        "name": "Sangernboden",
        "": ""
    },
    {
        "code": "1740",
        "name": "Neyruz FR",
        "": ""
    },
    {
        "code": "1741",
        "name": "Cottens FR",
        "": ""
    },
    {
        "code": "1742",
        "name": "Autigny",
        "": ""
    },
    {
        "code": "1744",
        "name": "Chénens",
        "": ""
    },
    {
        "code": "1745",
        "name": "Lentigny",
        "": ""
    },
    {
        "code": "1746",
        "name": "Prez-vers-Noréaz",
        "": ""
    },
    {
        "code": "1747",
        "name": "Corserey",
        "": ""
    },
    {
        "code": "1748",
        "name": "Torny-le-Grand",
        "": ""
    },
    {
        "code": "1749",
        "name": "Middes",
        "": ""
    },
    {
        "code": "1752",
        "name": "Villars-sur-Glâne",
        "": ""
    },
    {
        "code": "1753",
        "name": "Matran",
        "": ""
    },
    {
        "code": "1754",
        "name": "Rosé",
        "": ""
    },
    {
        "code": "1754",
        "name": "Corjolens",
        "": ""
    },
    {
        "code": "1754",
        "name": "Avry-sur-Matran",
        "": ""
    },
    {
        "code": "1754",
        "name": "Avry-Centre FR",
        "": ""
    },
    {
        "code": "1756",
        "name": "Onnens FR",
        "": ""
    },
    {
        "code": "1756",
        "name": "Lovens",
        "": ""
    },
    {
        "code": "1757",
        "name": "Noréaz",
        "": ""
    },
    {
        "code": "1762",
        "name": "Givisiez",
        "": ""
    },
    {
        "code": "1763",
        "name": "Granges-Paccot",
        "": ""
    },
    {
        "code": "1772",
        "name": "Ponthaux",
        "": ""
    },
    {
        "code": "1772",
        "name": "Nierlet-les-Bois",
        "": ""
    },
    {
        "code": "1772",
        "name": "Grolley",
        "": ""
    },
    {
        "code": "1773",
        "name": "Léchelles",
        "": ""
    },
    {
        "code": "1773",
        "name": "Chandon",
        "": ""
    },
    {
        "code": "1773",
        "name": "Russy",
        "": ""
    },
    {
        "code": "1774",
        "name": "Montagny-les-Monts",
        "": ""
    },
    {
        "code": "1774",
        "name": "Cousset",
        "": ""
    },
    {
        "code": "1775",
        "name": "Mannens",
        "": ""
    },
    {
        "code": "1775",
        "name": "Grandsivaz",
        "": ""
    },
    {
        "code": "1776",
        "name": "Montagny-la-Ville",
        "": ""
    },
    {
        "code": "1782",
        "name": "Autafond",
        "": ""
    },
    {
        "code": "1782",
        "name": "La Corbaz",
        "": ""
    },
    {
        "code": "1782",
        "name": "Cormagens",
        "": ""
    },
    {
        "code": "1782",
        "name": "Lossy",
        "": ""
    },
    {
        "code": "1782",
        "name": "Formangueires",
        "": ""
    },
    {
        "code": "1782",
        "name": "Belfaux",
        "": ""
    },
    {
        "code": "1783",
        "name": "Pensier",
        "": ""
    },
    {
        "code": "1783",
        "name": "Barberêche",
        "": ""
    },
    {
        "code": "1784",
        "name": "Cournillens",
        "": ""
    },
    {
        "code": "1784",
        "name": "Wallenried",
        "": ""
    },
    {
        "code": "1784",
        "name": "Courtepin",
        "": ""
    },
    {
        "code": "1785",
        "name": "Cressier FR",
        "": ""
    },
    {
        "code": "1786",
        "name": "Sugiez",
        "": ""
    },
    {
        "code": "1787",
        "name": "Môtier (Vully)",
        "": ""
    },
    {
        "code": "1787",
        "name": "Mur (Vully) FR",
        "": ""
    },
    {
        "code": "1787",
        "name": "Mur (Vully) VD",
        "": ""
    },
    {
        "code": "1788",
        "name": "Praz (Vully)",
        "": ""
    },
    {
        "code": "1789",
        "name": "Lugnorre",
        "": ""
    },
    {
        "code": "1791",
        "name": "Courtaman",
        "": ""
    },
    {
        "code": "1792",
        "name": "Guschelmuth",
        "": ""
    },
    {
        "code": "1792",
        "name": "Cordast",
        "": ""
    },
    {
        "code": "1793",
        "name": "Jeuss",
        "": ""
    },
    {
        "code": "1794",
        "name": "Salvenach",
        "": ""
    },
    {
        "code": "1795",
        "name": "Courlevon",
        "": ""
    },
    {
        "code": "1796",
        "name": "Courgevaux",
        "": ""
    },
    {
        "code": "1797",
        "name": "Münchenwiler",
        "": ""
    },
    {
        "code": "1800",
        "name": "Vevey",
        "": ""
    },
    {
        "code": "1801",
        "name": "Le Mont-Pèlerin",
        "": ""
    },
    {
        "code": "1802",
        "name": "Corseaux",
        "": ""
    },
    {
        "code": "1803",
        "name": "Chardonne",
        "": ""
    },
    {
        "code": "1804",
        "name": "Corsier-sur-Vevey",
        "": ""
    },
    {
        "code": "1805",
        "name": "Jongny",
        "": ""
    },
    {
        "code": "1806",
        "name": "St-Légier-La Chiésaz",
        "": ""
    },
    {
        "code": "1807",
        "name": "Blonay",
        "": ""
    },
    {
        "code": "1808",
        "name": "Les Monts-de-Corsier",
        "": ""
    },
    {
        "code": "1809",
        "name": "Fenil-sur-Corsier",
        "": ""
    },
    {
        "code": "1814",
        "name": "La Tour-de-Peilz",
        "": ""
    },
    {
        "code": "1815",
        "name": "Clarens",
        "": ""
    },
    {
        "code": "1816",
        "name": "Chailly-Montreux",
        "": ""
    },
    {
        "code": "1817",
        "name": "Brent",
        "": ""
    },
    {
        "code": "1820",
        "name": "Montreux",
        "": ""
    },
    {
        "code": "1820",
        "name": "Veytaux",
        "": ""
    },
    {
        "code": "1820",
        "name": "Territet",
        "": ""
    },
    {
        "code": "1822",
        "name": "Chernex",
        "": ""
    },
    {
        "code": "1823",
        "name": "Glion",
        "": ""
    },
    {
        "code": "1824",
        "name": "Caux",
        "": ""
    },
    {
        "code": "1832",
        "name": "Villard-sur-Chamby",
        "": ""
    },
    {
        "code": "1832",
        "name": "Chamby",
        "": ""
    },
    {
        "code": "1833",
        "name": "Les Avants",
        "": ""
    },
    {
        "code": "1844",
        "name": "Villeneuve VD",
        "": ""
    },
    {
        "code": "1845",
        "name": "Noville",
        "": ""
    },
    {
        "code": "1846",
        "name": "Chessel",
        "": ""
    },
    {
        "code": "1847",
        "name": "Rennaz",
        "": ""
    },
    {
        "code": "1852",
        "name": "Roche VD",
        "": ""
    },
    {
        "code": "1853",
        "name": "Yvorne",
        "": ""
    },
    {
        "code": "1854",
        "name": "Leysin",
        "": ""
    },
    {
        "code": "1856",
        "name": "Corbeyrier",
        "": ""
    },
    {
        "code": "1860",
        "name": "Aigle",
        "": ""
    },
    {
        "code": "1862",
        "name": "La Comballaz",
        "": ""
    },
    {
        "code": "1862",
        "name": "Les Mosses",
        "": ""
    },
    {
        "code": "1863",
        "name": "Le Sépey",
        "": ""
    },
    {
        "code": "1864",
        "name": "Vers-L Eglise",
        "": ""
    },
    {
        "code": "1865",
        "name": "Les Diablerets",
        "": ""
    },
    {
        "code": "1866",
        "name": "La Forclaz VD",
        "": ""
    },
    {
        "code": "1867",
        "name": "St-Triphon",
        "": ""
    },
    {
        "code": "1867",
        "name": "Panex",
        "": ""
    },
    {
        "code": "1867",
        "name": "Ollon VD",
        "": ""
    },
    {
        "code": "1868",
        "name": "Collombey",
        "": ""
    },
    {
        "code": "1869",
        "name": "Massongex",
        "": ""
    },
    {
        "code": "1870",
        "name": "Monthey",
        "": ""
    },
    {
        "code": "1871",
        "name": "Choëx",
        "": ""
    },
    {
        "code": "1871",
        "name": "Les Giettes",
        "": ""
    },
    {
        "code": "1872",
        "name": "Troistorrents",
        "": ""
    },
    {
        "code": "1873",
        "name": "Champoussin",
        "": ""
    },
    {
        "code": "1873",
        "name": "Les Crosets",
        "": ""
    },
    {
        "code": "1873",
        "name": "Val-d Illiez",
        "": ""
    },
    {
        "code": "1874",
        "name": "Champéry",
        "": ""
    },
    {
        "code": "1875",
        "name": "Morgins",
        "": ""
    },
    {
        "code": "1880",
        "name": "Fenalet-sur-Bex",
        "": ""
    },
    {
        "code": "1880",
        "name": "Frenières-sur-Bex",
        "": ""
    },
    {
        "code": "1880",
        "name": "Les Plans-sur-Bex",
        "": ""
    },
    {
        "code": "1880",
        "name": "Bex",
        "": ""
    },
    {
        "code": "1882",
        "name": "Les Posses-sur-Bex",
        "": ""
    },
    {
        "code": "1882",
        "name": "Gryon",
        "": ""
    },
    {
        "code": "1884",
        "name": "Huémoz",
        "": ""
    },
    {
        "code": "1884",
        "name": "Arveyes",
        "": ""
    },
    {
        "code": "1884",
        "name": "Villars-sur-Ollon",
        "": ""
    },
    {
        "code": "1885",
        "name": "Chesières",
        "": ""
    },
    {
        "code": "1890",
        "name": "Mex VS",
        "": ""
    },
    {
        "code": "1890",
        "name": "St-Maurice",
        "": ""
    },
    {
        "code": "1891",
        "name": "Vérossaz",
        "": ""
    },
    {
        "code": "1892",
        "name": "Lavey-les-Bains",
        "": ""
    },
    {
        "code": "1892",
        "name": "Morcles",
        "": ""
    },
    {
        "code": "1892",
        "name": "Lavey-Village",
        "": ""
    },
    {
        "code": "1893",
        "name": "Muraz (Collombey)",
        "": ""
    },
    {
        "code": "1895",
        "name": "Vionnaz",
        "": ""
    },
    {
        "code": "1896",
        "name": "Miex",
        "": ""
    },
    {
        "code": "1896",
        "name": "Vouvry",
        "": ""
    },
    {
        "code": "1897",
        "name": "Les Evouettes",
        "": ""
    },
    {
        "code": "1897",
        "name": "Bouveret",
        "": ""
    },
    {
        "code": "1898",
        "name": "St-Gingolph",
        "": ""
    },
    {
        "code": "1899",
        "name": "Torgon",
        "": ""
    },
    {
        "code": "1902",
        "name": "Evionnaz",
        "": ""
    },
    {
        "code": "1903",
        "name": "Collonges",
        "": ""
    },
    {
        "code": "1904",
        "name": "Vernayaz",
        "": ""
    },
    {
        "code": "1905",
        "name": "Dorénaz",
        "": ""
    },
    {
        "code": "1906",
        "name": "Charrat",
        "": ""
    },
    {
        "code": "1907",
        "name": "Saxon",
        "": ""
    },
    {
        "code": "1908",
        "name": "Riddes",
        "": ""
    },
    {
        "code": "1911",
        "name": "Mayens-de-Chamoson",
        "": ""
    },
    {
        "code": "1911",
        "name": "Ovronnaz",
        "": ""
    },
    {
        "code": "1912",
        "name": "Produit (Leytron)",
        "": ""
    },
    {
        "code": "1912",
        "name": "Montagnon (Leytron)",
        "": ""
    },
    {
        "code": "1912",
        "name": "Dugny (Leytron)",
        "": ""
    },
    {
        "code": "1912",
        "name": "Leytron",
        "": ""
    },
    {
        "code": "1913",
        "name": "Saillon",
        "": ""
    },
    {
        "code": "1914",
        "name": "Auddes-sur-Riddes",
        "": ""
    },
    {
        "code": "1914",
        "name": "Isérables",
        "": ""
    },
    {
        "code": "1918",
        "name": "La Tzoumaz",
        "": ""
    },
    {
        "code": "1920",
        "name": "Martigny",
        "": ""
    },
    {
        "code": "1921",
        "name": "Martigny-Croix",
        "": ""
    },
    {
        "code": "1922",
        "name": "Les Granges (Salvan)",
        "": ""
    },
    {
        "code": "1922",
        "name": "Salvan",
        "": ""
    },
    {
        "code": "1923",
        "name": "Le Trétien",
        "": ""
    },
    {
        "code": "1923",
        "name": "Les Marécottes",
        "": ""
    },
    {
        "code": "1925",
        "name": "Le Châtelard VS",
        "": ""
    },
    {
        "code": "1925",
        "name": "Finhaut",
        "": ""
    },
    {
        "code": "1926",
        "name": "Fully",
        "": ""
    },
    {
        "code": "1927",
        "name": "Chemin",
        "": ""
    },
    {
        "code": "1928",
        "name": "Ravoire",
        "": ""
    },
    {
        "code": "1929",
        "name": "Trient",
        "": ""
    },
    {
        "code": "1932",
        "name": "Les Valettes (Bovernier)",
        "": ""
    },
    {
        "code": "1932",
        "name": "Bovernier",
        "": ""
    },
    {
        "code": "1933",
        "name": "Vens (Sembrancher)",
        "": ""
    },
    {
        "code": "1933",
        "name": "Chamoille (Sembrancher)",
        "": ""
    },
    {
        "code": "1933",
        "name": "La Garde (Sembrancher)",
        "": ""
    },
    {
        "code": "1933",
        "name": "Sembrancher",
        "": ""
    },
    {
        "code": "1934",
        "name": "Bruson",
        "": ""
    },
    {
        "code": "1934",
        "name": "Cotterg (Le Châble VS)",
        "": ""
    },
    {
        "code": "1934",
        "name": "Villette (Le Châble VS)",
        "": ""
    },
    {
        "code": "1934",
        "name": "Fontenelle (Le Châble VS)",
        "": ""
    },
    {
        "code": "1934",
        "name": "Montagnier (Le Châble VS)",
        "": ""
    },
    {
        "code": "1934",
        "name": "Le Châble VS",
        "": ""
    },
    {
        "code": "1936",
        "name": "Verbier",
        "": ""
    },
    {
        "code": "1937",
        "name": "Orsières",
        "": ""
    },
    {
        "code": "1938",
        "name": "Champex-Lac",
        "": ""
    },
    {
        "code": "1941",
        "name": "Cries (Vollèges)",
        "": ""
    },
    {
        "code": "1941",
        "name": "Vollèges",
        "": ""
    },
    {
        "code": "1942",
        "name": "Levron",
        "": ""
    },
    {
        "code": "1943",
        "name": "Praz-de-Fort",
        "": ""
    },
    {
        "code": "1944",
        "name": "La Fouly VS",
        "": ""
    },
    {
        "code": "1945",
        "name": "Liddes",
        "": ""
    },
    {
        "code": "1945",
        "name": "Fontaine Dessus (Liddes)",
        "": ""
    },
    {
        "code": "1945",
        "name": "Fontaine Dessous (Liddes)",
        "": ""
    },
    {
        "code": "1945",
        "name": "Dranse (Liddes)",
        "": ""
    },
    {
        "code": "1945",
        "name": "Chandonne (Liddes)",
        "": ""
    },
    {
        "code": "1945",
        "name": "Rive Haute (Liddes)",
        "": ""
    },
    {
        "code": "1945",
        "name": "Fornex (Liddes)",
        "": ""
    },
    {
        "code": "1945",
        "name": "Les Moulins VS (Liddes)",
        "": ""
    },
    {
        "code": "1945",
        "name": "Vichères (Liddes)",
        "": ""
    },
    {
        "code": "1945",
        "name": "Palasuit (Liddes)",
        "": ""
    },
    {
        "code": "1945",
        "name": "Chez Petit (Liddes)",
        "": ""
    },
    {
        "code": "1945",
        "name": "Petit Vichères (Liddes)",
        "": ""
    },
    {
        "code": "1946",
        "name": "Bourg-St-Pierre",
        "": ""
    },
    {
        "code": "1947",
        "name": "Prarreyer (Versegères)",
        "": ""
    },
    {
        "code": "1947",
        "name": "Les Places (Versegères)",
        "": ""
    },
    {
        "code": "1947",
        "name": "La Montoz (Versegères)",
        "": ""
    },
    {
        "code": "1947",
        "name": "Champsec (Versegères)",
        "": ""
    },
    {
        "code": "1947",
        "name": "Le Fregnoley (Versegères)",
        "": ""
    },
    {
        "code": "1947",
        "name": "Versegères",
        "": ""
    },
    {
        "code": "1948",
        "name": "Lourtier",
        "": ""
    },
    {
        "code": "1948",
        "name": "Fionnay",
        "": ""
    },
    {
        "code": "1948",
        "name": "Sarreyer",
        "": ""
    },
    {
        "code": "1948",
        "name": "Le Planchamp (Lourtier)",
        "": ""
    },
    {
        "code": "1948",
        "name": "Le Morgnes (Lourtier)",
        "": ""
    },
    {
        "code": "1950",
        "name": "Sion",
        "": ""
    },
    {
        "code": "1955",
        "name": "St-Pierre-de-Clages",
        "": ""
    },
    {
        "code": "1955",
        "name": "Les Vérines (Chamoson)",
        "": ""
    },
    {
        "code": "1955",
        "name": "Némiaz (Chamoson)",
        "": ""
    },
    {
        "code": "1955",
        "name": "Grugnay (Chamoson)",
        "": ""
    },
    {
        "code": "1955",
        "name": "Chamoson",
        "": ""
    },
    {
        "code": "1957",
        "name": "Ardon",
        "": ""
    },
    {
        "code": "1958",
        "name": "Uvrier",
        "": ""
    },
    {
        "code": "1958",
        "name": "St-Léonard",
        "": ""
    },
    {
        "code": "1961",
        "name": "Vernamiège",
        "": ""
    },
    {
        "code": "1962",
        "name": "Pont-de-la-Morge (Sion)",
        "": ""
    },
    {
        "code": "1963",
        "name": "Vétroz",
        "": ""
    },
    {
        "code": "1964",
        "name": "Conthey",
        "": ""
    },
    {
        "code": "1965",
        "name": "Chandolin-près-Savièse",
        "": ""
    },
    {
        "code": "1965",
        "name": "Drône VS",
        "": ""
    },
    {
        "code": "1965",
        "name": "Roumaz (Savièse)",
        "": ""
    },
    {
        "code": "1965",
        "name": "Granois (Savièse)",
        "": ""
    },
    {
        "code": "1965",
        "name": "St-Germain (Savièse)",
        "": ""
    },
    {
        "code": "1965",
        "name": "Ormône (Savièse)",
        "": ""
    },
    {
        "code": "1965",
        "name": "Mayens-de-la-Zour (Savièse)",
        "": ""
    },
    {
        "code": "1965",
        "name": "Monteiller-Savièse",
        "": ""
    },
    {
        "code": "1965",
        "name": "Savièse",
        "": ""
    },
    {
        "code": "1966",
        "name": "Signèse (Ayent)",
        "": ""
    },
    {
        "code": "1966",
        "name": "Fortunau (Ayent)",
        "": ""
    },
    {
        "code": "1966",
        "name": "Luc (Ayent)",
        "": ""
    },
    {
        "code": "1966",
        "name": "St-Romain (Ayent)",
        "": ""
    },
    {
        "code": "1966",
        "name": "Saxonne (Ayent)",
        "": ""
    },
    {
        "code": "1966",
        "name": "Villa (Ayent)",
        "": ""
    },
    {
        "code": "1966",
        "name": "La Place (Ayent)",
        "": ""
    },
    {
        "code": "1966",
        "name": "Botyre (Ayent)",
        "": ""
    },
    {
        "code": "1966",
        "name": "Blignoud (Ayent)",
        "": ""
    },
    {
        "code": "1966",
        "name": "Argnoud (Ayent)",
        "": ""
    },
    {
        "code": "1967",
        "name": "Bramois",
        "": ""
    },
    {
        "code": "1968",
        "name": "Mase",
        "": ""
    },
    {
        "code": "1969",
        "name": "Liez (St-Martin)",
        "": ""
    },
    {
        "code": "1969",
        "name": "Trogne (St-Martin)",
        "": ""
    },
    {
        "code": "1969",
        "name": "Suen (St-Martin)",
        "": ""
    },
    {
        "code": "1969",
        "name": "Eison (St.Martin)",
        "": ""
    },
    {
        "code": "1969",
        "name": "St-Martin VS",
        "": ""
    },
    {
        "code": "1971",
        "name": "Champlan (Grimisuat)",
        "": ""
    },
    {
        "code": "1971",
        "name": "Coméraz (Grimisuat)",
        "": ""
    },
    {
        "code": "1971",
        "name": "Grimisuat",
        "": ""
    },
    {
        "code": "1972",
        "name": "Anzère",
        "": ""
    },
    {
        "code": "1973",
        "name": "Nax",
        "": ""
    },
    {
        "code": "1974",
        "name": "Arbaz",
        "": ""
    },
    {
        "code": "1975",
        "name": "St-Séverin",
        "": ""
    },
    {
        "code": "1976",
        "name": "Aven",
        "": ""
    },
    {
        "code": "1976",
        "name": "Daillon",
        "": ""
    },
    {
        "code": "1976",
        "name": "Erde",
        "": ""
    },
    {
        "code": "1977",
        "name": "Icogne",
        "": ""
    },
    {
        "code": "1978",
        "name": "Lens",
        "": ""
    },
    {
        "code": "1981",
        "name": "Vex",
        "": ""
    },
    {
        "code": "1982",
        "name": "Euseigne",
        "": ""
    },
    {
        "code": "1983",
        "name": "Lana (Evolène)",
        "": ""
    },
    {
        "code": "1983",
        "name": "Evolène",
        "": ""
    },
    {
        "code": "1984",
        "name": "Les Haudères",
        "": ""
    },
    {
        "code": "1985",
        "name": "La Sage",
        "": ""
    },
    {
        "code": "1986",
        "name": "Arolla",
        "": ""
    },
    {
        "code": "1987",
        "name": "Mâche",
        "": ""
    },
    {
        "code": "1987",
        "name": "Hérémence",
        "": ""
    },
    {
        "code": "1988",
        "name": "Les Collons",
        "": ""
    },
    {
        "code": "1988",
        "name": "Thyon",
        "": ""
    },
    {
        "code": "1991",
        "name": "Arvillard (Salins)",
        "": ""
    },
    {
        "code": "1991",
        "name": "Pravidondaz (Salins)",
        "": ""
    },
    {
        "code": "1991",
        "name": "Turin (Salins)",
        "": ""
    },
    {
        "code": "1991",
        "name": "Misériez (Salins)",
        "": ""
    },
    {
        "code": "1991",
        "name": "Salins",
        "": ""
    },
    {
        "code": "1992",
        "name": "Les Agettes",
        "": ""
    },
    {
        "code": "1992",
        "name": "Les Mayens-de-Sion",
        "": ""
    },
    {
        "code": "1992",
        "name": "La Vernaz (Les Agettes)",
        "": ""
    },
    {
        "code": "1992",
        "name": "Crête-à-L Oeil(Les Agettes)",
        "": ""
    },
    {
        "code": "1993",
        "name": "Clèbes (Nendaz)",
        "": ""
    },
    {
        "code": "1993",
        "name": "Veysonnaz",
        "": ""
    },
    {
        "code": "1994",
        "name": "Aproz (Nendaz)",
        "": ""
    },
    {
        "code": "1996",
        "name": "Fey (Nendaz)",
        "": ""
    },
    {
        "code": "1996",
        "name": "Beuson (Nendaz)",
        "": ""
    },
    {
        "code": "1996",
        "name": "Baar (Nendaz)",
        "": ""
    },
    {
        "code": "1996",
        "name": "Brignon (Nendaz)",
        "": ""
    },
    {
        "code": "1996",
        "name": "Bioley-de-Brignon (Nendaz)",
        "": ""
    },
    {
        "code": "1996",
        "name": "Bieudron (Nendaz)",
        "": ""
    },
    {
        "code": "1996",
        "name": "Condémines (Nendaz)",
        "": ""
    },
    {
        "code": "1996",
        "name": "Saclentz (Nendaz)",
        "": ""
    },
    {
        "code": "1996",
        "name": "Basse-Nendaz",
        "": ""
    },
    {
        "code": "1997",
        "name": "Siviez (Nendaz)",
        "": ""
    },
    {
        "code": "1997",
        "name": "Haute-Nendaz",
        "": ""
    },
    {
        "code": "2000",
        "name": "Neuchâtel",
        "": ""
    },
    {
        "code": "2012",
        "name": "Auvernier",
        "": ""
    },
    {
        "code": "2013",
        "name": "Colombier NE",
        "": ""
    },
    {
        "code": "2014",
        "name": "Bôle",
        "": ""
    },
    {
        "code": "2015",
        "name": "Areuse",
        "": ""
    },
    {
        "code": "2016",
        "name": "Cortaillod",
        "": ""
    },
    {
        "code": "2017",
        "name": "Boudry",
        "": ""
    },
    {
        "code": "2019",
        "name": "Chambrelien",
        "": ""
    },
    {
        "code": "2019",
        "name": "Rochefort",
        "": ""
    },
    {
        "code": "2022",
        "name": "Bevaix",
        "": ""
    },
    {
        "code": "2023",
        "name": "Gorgier",
        "": ""
    },
    {
        "code": "2024",
        "name": "St-Aubin-Sauges",
        "": ""
    },
    {
        "code": "2025",
        "name": "Chez-le-Bart",
        "": ""
    },
    {
        "code": "2027",
        "name": "Montalchez",
        "": ""
    },
    {
        "code": "2027",
        "name": "Fresens",
        "": ""
    },
    {
        "code": "2028",
        "name": "Vaumarcus",
        "": ""
    },
    {
        "code": "2034",
        "name": "Peseux",
        "": ""
    },
    {
        "code": "2035",
        "name": "Corcelles NE",
        "": ""
    },
    {
        "code": "2036",
        "name": "Cormondrèche",
        "": ""
    },
    {
        "code": "2037",
        "name": "Montmollin",
        "": ""
    },
    {
        "code": "2037",
        "name": "Montezillon",
        "": ""
    },
    {
        "code": "2042",
        "name": "Valangin",
        "": ""
    },
    {
        "code": "2043",
        "name": "Boudevilliers",
        "": ""
    },
    {
        "code": "2046",
        "name": "Fontaines NE",
        "": ""
    },
    {
        "code": "2052",
        "name": "La Vue-des-Alpes",
        "": ""
    },
    {
        "code": "2052",
        "name": "Fontainemelon",
        "": ""
    },
    {
        "code": "2053",
        "name": "Cernier",
        "": ""
    },
    {
        "code": "2054",
        "name": "Les Vieux-Prés",
        "": ""
    },
    {
        "code": "2054",
        "name": "Chézard-St-Martin",
        "": ""
    },
    {
        "code": "2056",
        "name": "Dombresson",
        "": ""
    },
    {
        "code": "2057",
        "name": "Villiers",
        "": ""
    },
    {
        "code": "2058",
        "name": "Le Pâquier NE",
        "": ""
    },
    {
        "code": "2063",
        "name": "Engollon",
        "": ""
    },
    {
        "code": "2063",
        "name": "Fenin",
        "": ""
    },
    {
        "code": "2063",
        "name": "Saules",
        "": ""
    },
    {
        "code": "2063",
        "name": "Vilars NE",
        "": ""
    },
    {
        "code": "2065",
        "name": "Savagnier",
        "": ""
    },
    {
        "code": "2067",
        "name": "Chaumont",
        "": ""
    },
    {
        "code": "2068",
        "name": "Hauterive NE",
        "": ""
    },
    {
        "code": "2072",
        "name": "St-Blaise",
        "": ""
    },
    {
        "code": "2073",
        "name": "Enges",
        "": ""
    },
    {
        "code": "2074",
        "name": "Marin-Epagnier",
        "": ""
    },
    {
        "code": "2075",
        "name": "Thielle",
        "": ""
    },
    {
        "code": "2075",
        "name": "Wavre",
        "": ""
    },
    {
        "code": "2087",
        "name": "Cornaux NE",
        "": ""
    },
    {
        "code": "2088",
        "name": "Cressier NE",
        "": ""
    },
    {
        "code": "2103",
        "name": "Noiraigue",
        "": ""
    },
    {
        "code": "2105",
        "name": "Travers",
        "": ""
    },
    {
        "code": "2108",
        "name": "Couvet",
        "": ""
    },
    {
        "code": "2112",
        "name": "Môtiers NE",
        "": ""
    },
    {
        "code": "2113",
        "name": "Boveresse",
        "": ""
    },
    {
        "code": "2114",
        "name": "Fleurier",
        "": ""
    },
    {
        "code": "2115",
        "name": "Buttes",
        "": ""
    },
    {
        "code": "2116",
        "name": "Mont-de-Buttes",
        "": ""
    },
    {
        "code": "2117",
        "name": "La Côte-aux-Fées",
        "": ""
    },
    {
        "code": "2123",
        "name": "St-Sulpice NE",
        "": ""
    },
    {
        "code": "2124",
        "name": "Les Sagnettes",
        "": ""
    },
    {
        "code": "2126",
        "name": "Les Verrières",
        "": ""
    },
    {
        "code": "2127",
        "name": "Les Bayards",
        "": ""
    },
    {
        "code": "2149",
        "name": "Champ-du-Moulin",
        "": ""
    },
    {
        "code": "2149",
        "name": "Fretereules",
        "": ""
    },
    {
        "code": "2149",
        "name": "Brot-Dessous",
        "": ""
    },
    {
        "code": "2206",
        "name": "Les Geneveys-sur-Coffrane",
        "": ""
    },
    {
        "code": "2207",
        "name": "Coffrane",
        "": ""
    },
    {
        "code": "2208",
        "name": "Les Hauts-Geneveys",
        "": ""
    },
    {
        "code": "2300",
        "name": "La Chaux-de-Fonds",
        "": ""
    },
    {
        "code": "2300",
        "name": "La Cibourg",
        "": ""
    },
    {
        "code": "2314",
        "name": "La Sagne NE",
        "": ""
    },
    {
        "code": "2316",
        "name": "Petit-Martel",
        "": ""
    },
    {
        "code": "2316",
        "name": "Les Ponts-de-Martel",
        "": ""
    },
    {
        "code": "2318",
        "name": "Brot-Plamboz",
        "": ""
    },
    {
        "code": "2322",
        "name": "Le Crêt-du-Locle",
        "": ""
    },
    {
        "code": "2325",
        "name": "Les Planchettes",
        "": ""
    },
    {
        "code": "2325",
        "name": "Les Joux-Derrière",
        "": ""
    },
    {
        "code": "2333",
        "name": "La Cibourg",
        "": ""
    },
    {
        "code": "2333",
        "name": "La Ferrière",
        "": ""
    },
    {
        "code": "2336",
        "name": "Les Bois",
        "": ""
    },
    {
        "code": "2338",
        "name": "Les Emibois",
        "": ""
    },
    {
        "code": "2338",
        "name": "Muriaux",
        "": ""
    },
    {
        "code": "2340",
        "name": "Le Noirmont",
        "": ""
    },
    {
        "code": "2345",
        "name": "Le Cerneux-Veusil",
        "": ""
    },
    {
        "code": "2345",
        "name": "La Chaux-des-Breuleux",
        "": ""
    },
    {
        "code": "2345",
        "name": "Les Breuleux",
        "": ""
    },
    {
        "code": "2350",
        "name": "Saignelégier",
        "": ""
    },
    {
        "code": "2353",
        "name": "Les Pommerats",
        "": ""
    },
    {
        "code": "2354",
        "name": "Goumois",
        "": ""
    },
    {
        "code": "2360",
        "name": "Le Bémont",
        "": ""
    },
    {
        "code": "2362",
        "name": "Montfavergier",
        "": ""
    },
    {
        "code": "2362",
        "name": "Montfaucon",
        "": ""
    },
    {
        "code": "2363",
        "name": "Les Enfers",
        "": ""
    },
    {
        "code": "2364",
        "name": "St-Brais",
        "": ""
    },
    {
        "code": "2400",
        "name": "Le Prévoux",
        "": ""
    },
    {
        "code": "2400",
        "name": "Le Locle",
        "": ""
    },
    {
        "code": "2405",
        "name": "La Chaux-du-Milieu",
        "": ""
    },
    {
        "code": "2406",
        "name": "Le Brouillet",
        "": ""
    },
    {
        "code": "2406",
        "name": "Les Taillères",
        "": ""
    },
    {
        "code": "2406",
        "name": "La Châtagne",
        "": ""
    },
    {
        "code": "2406",
        "name": "La Brévine",
        "": ""
    },
    {
        "code": "2414",
        "name": "Le Cerneux-Péquignot",
        "": ""
    },
    {
        "code": "2416",
        "name": "Les Brenets",
        "": ""
    },
    {
        "code": "2500",
        "name": "Biel/Bienne",
        "": ""
    },
    {
        "code": "2502",
        "name": "Biel/Bienne",
        "": ""
    },
    {
        "code": "2503",
        "name": "Biel/Bienne",
        "": ""
    },
    {
        "code": "2504",
        "name": "Biel/Bienne",
        "": ""
    },
    {
        "code": "2505",
        "name": "Biel/Bienne",
        "": ""
    },
    {
        "code": "2512",
        "name": "Tüscherz-Alfermée",
        "": ""
    },
    {
        "code": "2513",
        "name": "Twann",
        "": ""
    },
    {
        "code": "2514",
        "name": "Ligerz",
        "": ""
    },
    {
        "code": "2515",
        "name": "Prêles",
        "": ""
    },
    {
        "code": "2516",
        "name": "Lamboing",
        "": ""
    },
    {
        "code": "2517",
        "name": "Diesse",
        "": ""
    },
    {
        "code": "2518",
        "name": "Nods",
        "": ""
    },
    {
        "code": "2520",
        "name": "La Neuveville",
        "": ""
    },
    {
        "code": "2523",
        "name": "Lignières",
        "": ""
    },
    {
        "code": "2525",
        "name": "Le Landeron",
        "": ""
    },
    {
        "code": "2532",
        "name": "Magglingen/Macolin",
        "": ""
    },
    {
        "code": "2533",
        "name": "Evilard",
        "": ""
    },
    {
        "code": "2534",
        "name": "Les Prés-d Orvin",
        "": ""
    },
    {
        "code": "2534",
        "name": "Orvin",
        "": ""
    },
    {
        "code": "2535",
        "name": "Frinvillier",
        "": ""
    },
    {
        "code": "2536",
        "name": "Plagne",
        "": ""
    },
    {
        "code": "2537",
        "name": "Vauffelin",
        "": ""
    },
    {
        "code": "2538",
        "name": "Romont BE",
        "": ""
    },
    {
        "code": "2540",
        "name": "Grenchen",
        "": ""
    },
    {
        "code": "2542",
        "name": "Pieterlen",
        "": ""
    },
    {
        "code": "2543",
        "name": "Lengnau BE",
        "": ""
    },
    {
        "code": "2544",
        "name": "Bettlach",
        "": ""
    },
    {
        "code": "2545",
        "name": "Selzach",
        "": ""
    },
    {
        "code": "2552",
        "name": "Orpund",
        "": ""
    },
    {
        "code": "2553",
        "name": "Safnern",
        "": ""
    },
    {
        "code": "2554",
        "name": "Meinisberg",
        "": ""
    },
    {
        "code": "2555",
        "name": "Brügg BE",
        "": ""
    },
    {
        "code": "2556",
        "name": "Scheuren",
        "": ""
    },
    {
        "code": "2556",
        "name": "Schwadernau",
        "": ""
    },
    {
        "code": "2557",
        "name": "Studen BE",
        "": ""
    },
    {
        "code": "2558",
        "name": "Aegerten",
        "": ""
    },
    {
        "code": "2560",
        "name": "Nidau",
        "": ""
    },
    {
        "code": "2562",
        "name": "Port",
        "": ""
    },
    {
        "code": "2563",
        "name": "Ipsach",
        "": ""
    },
    {
        "code": "2564",
        "name": "Bellmund",
        "": ""
    },
    {
        "code": "2565",
        "name": "Jens",
        "": ""
    },
    {
        "code": "2572",
        "name": "Mörigen",
        "": ""
    },
    {
        "code": "2572",
        "name": "Sutz",
        "": ""
    },
    {
        "code": "2575",
        "name": "Hagneck",
        "": ""
    },
    {
        "code": "2575",
        "name": "Gerolfingen",
        "": ""
    },
    {
        "code": "2575",
        "name": "Täuffelen",
        "": ""
    },
    {
        "code": "2576",
        "name": "Lüscherz",
        "": ""
    },
    {
        "code": "2577",
        "name": "Finsterhennen",
        "": ""
    },
    {
        "code": "2577",
        "name": "Siselen BE",
        "": ""
    },
    {
        "code": "2603",
        "name": "Péry",
        "": ""
    },
    {
        "code": "2604",
        "name": "La Heutte",
        "": ""
    },
    {
        "code": "2605",
        "name": "Sonceboz-Sombeval",
        "": ""
    },
    {
        "code": "2606",
        "name": "Corgémont",
        "": ""
    },
    {
        "code": "2607",
        "name": "Cortébert",
        "": ""
    },
    {
        "code": "2608",
        "name": "Montagne-de-Courtelary",
        "": ""
    },
    {
        "code": "2608",
        "name": "Courtelary",
        "": ""
    },
    {
        "code": "2610",
        "name": "Mont-Soleil",
        "": ""
    },
    {
        "code": "2610",
        "name": "Mont-Crosin",
        "": ""
    },
    {
        "code": "2610",
        "name": "Les Pontins",
        "": ""
    },
    {
        "code": "2610",
        "name": "St-Imier",
        "": ""
    },
    {
        "code": "2612",
        "name": "Cormoret",
        "": ""
    },
    {
        "code": "2613",
        "name": "Villeret",
        "": ""
    },
    {
        "code": "2615",
        "name": "Montagne-de-Sonvilier",
        "": ""
    },
    {
        "code": "2615",
        "name": "Sonvilier",
        "": ""
    },
    {
        "code": "2616",
        "name": "La Cibourg",
        "": ""
    },
    {
        "code": "2616",
        "name": "Renan BE",
        "": ""
    },
    {
        "code": "2710",
        "name": "Tavannes",
        "": ""
    },
    {
        "code": "2712",
        "name": "Le Fuet",
        "": ""
    },
    {
        "code": "2713",
        "name": "Bellelay",
        "": ""
    },
    {
        "code": "2714",
        "name": "Le Prédame",
        "": ""
    },
    {
        "code": "2714",
        "name": "Les Genevez JU",
        "": ""
    },
    {
        "code": "2715",
        "name": "Monible",
        "": ""
    },
    {
        "code": "2715",
        "name": "Châtelat",
        "": ""
    },
    {
        "code": "2716",
        "name": "Sornetan",
        "": ""
    },
    {
        "code": "2717",
        "name": "Fornet-Dessous",
        "": ""
    },
    {
        "code": "2717",
        "name": "Rebévelier",
        "": ""
    },
    {
        "code": "2718",
        "name": "Fornet-Dessus",
        "": ""
    },
    {
        "code": "2718",
        "name": "Lajoux JU",
        "": ""
    },
    {
        "code": "2720",
        "name": "La Tanne",
        "": ""
    },
    {
        "code": "2720",
        "name": "Tramelan",
        "": ""
    },
    {
        "code": "2722",
        "name": "Les Reussilles",
        "": ""
    },
    {
        "code": "2723",
        "name": "Mont-Tramelan",
        "": ""
    },
    {
        "code": "2732",
        "name": "Saicourt",
        "": ""
    },
    {
        "code": "2732",
        "name": "Saules BE",
        "": ""
    },
    {
        "code": "2732",
        "name": "Loveresse",
        "": ""
    },
    {
        "code": "2732",
        "name": "Reconvilier",
        "": ""
    },
    {
        "code": "2733",
        "name": "Pontenet",
        "": ""
    },
    {
        "code": "2735",
        "name": "Bévilard",
        "": ""
    },
    {
        "code": "2735",
        "name": "Champoz",
        "": ""
    },
    {
        "code": "2735",
        "name": "Malleray",
        "": ""
    },
    {
        "code": "2736",
        "name": "Sorvilier",
        "": ""
    },
    {
        "code": "2738",
        "name": "Court",
        "": ""
    },
    {
        "code": "2740",
        "name": "Moutier",
        "": ""
    },
    {
        "code": "2742",
        "name": "Perrefitte",
        "": ""
    },
    {
        "code": "2743",
        "name": "Eschert",
        "": ""
    },
    {
        "code": "2744",
        "name": "Belprahon",
        "": ""
    },
    {
        "code": "2745",
        "name": "Grandval",
        "": ""
    },
    {
        "code": "2746",
        "name": "Crémines",
        "": ""
    },
    {
        "code": "2747",
        "name": "Seehof",
        "": ""
    },
    {
        "code": "2747",
        "name": "Corcelles BE",
        "": ""
    },
    {
        "code": "2748",
        "name": "Souboz",
        "": ""
    },
    {
        "code": "2748",
        "name": "Les Ecorcheresses",
        "": ""
    },
    {
        "code": "2762",
        "name": "Roches BE",
        "": ""
    },
    {
        "code": "2800",
        "name": "Delémont",
        "": ""
    },
    {
        "code": "2802",
        "name": "Develier",
        "": ""
    },
    {
        "code": "2803",
        "name": "Bourrignon",
        "": ""
    },
    {
        "code": "2805",
        "name": "Soyhières",
        "": ""
    },
    {
        "code": "2806",
        "name": "Mettembert",
        "": ""
    },
    {
        "code": "2807",
        "name": "Lucelle",
        "": ""
    },
    {
        "code": "2807",
        "name": "Pleigne",
        "": ""
    },
    {
        "code": "2812",
        "name": "Movelier",
        "": ""
    },
    {
        "code": "2813",
        "name": "Ederswiler",
        "": ""
    },
    {
        "code": "2814",
        "name": "Roggenburg",
        "": ""
    },
    {
        "code": "2822",
        "name": "Courroux",
        "": ""
    },
    {
        "code": "2823",
        "name": "Courcelon",
        "": ""
    },
    {
        "code": "2824",
        "name": "Vicques",
        "": ""
    },
    {
        "code": "2825",
        "name": "Courchapoix",
        "": ""
    },
    {
        "code": "2826",
        "name": "Corban",
        "": ""
    },
    {
        "code": "2827",
        "name": "Schelten",
        "": ""
    },
    {
        "code": "2827",
        "name": "Mervelier",
        "": ""
    },
    {
        "code": "2828",
        "name": "Montsevelier",
        "": ""
    },
    {
        "code": "2829",
        "name": "Vermes",
        "": ""
    },
    {
        "code": "2830",
        "name": "Vellerat",
        "": ""
    },
    {
        "code": "2830",
        "name": "Courrendlin",
        "": ""
    },
    {
        "code": "2832",
        "name": "Rebeuvelier",
        "": ""
    },
    {
        "code": "2842",
        "name": "Rossemaison",
        "": ""
    },
    {
        "code": "2843",
        "name": "Châtillon JU",
        "": ""
    },
    {
        "code": "2852",
        "name": "Courtételle",
        "": ""
    },
    {
        "code": "2853",
        "name": "Courfaivre",
        "": ""
    },
    {
        "code": "2854",
        "name": "Bassecourt",
        "": ""
    },
    {
        "code": "2855",
        "name": "Glovelier",
        "": ""
    },
    {
        "code": "2856",
        "name": "Boécourt",
        "": ""
    },
    {
        "code": "2857",
        "name": "Montavon",
        "": ""
    },
    {
        "code": "2863",
        "name": "Undervelier",
        "": ""
    },
    {
        "code": "2864",
        "name": "Soulce",
        "": ""
    },
    {
        "code": "2873",
        "name": "Saulcy",
        "": ""
    },
    {
        "code": "2874",
        "name": "Montfavergier",
        "": ""
    },
    {
        "code": "2874",
        "name": "St-Brais",
        "": ""
    },
    {
        "code": "2875",
        "name": "Les Enfers",
        "": ""
    },
    {
        "code": "2875",
        "name": "Montfaucon",
        "": ""
    },
    {
        "code": "2877",
        "name": "Le Bémont JU",
        "": ""
    },
    {
        "code": "2882",
        "name": "St-Ursanne",
        "": ""
    },
    {
        "code": "2883",
        "name": "Montmelon",
        "": ""
    },
    {
        "code": "2884",
        "name": "Montenol",
        "": ""
    },
    {
        "code": "2885",
        "name": "Epauvillers",
        "": ""
    },
    {
        "code": "2886",
        "name": "Epiquerez",
        "": ""
    },
    {
        "code": "2887",
        "name": "Soubey",
        "": ""
    },
    {
        "code": "2888",
        "name": "Seleute",
        "": ""
    },
    {
        "code": "2889",
        "name": "Ocourt",
        "": ""
    },
    {
        "code": "2900",
        "name": "Porrentruy",
        "": ""
    },
    {
        "code": "2902",
        "name": "Fontenais",
        "": ""
    },
    {
        "code": "2903",
        "name": "Villars-sur Fontenais",
        "": ""
    },
    {
        "code": "2904",
        "name": "Bressaucourt",
        "": ""
    },
    {
        "code": "2905",
        "name": "Courtedoux",
        "": ""
    },
    {
        "code": "2906",
        "name": "Chevenez",
        "": ""
    },
    {
        "code": "2907",
        "name": "Rocourt",
        "": ""
    },
    {
        "code": "2908",
        "name": "Grandfontaine",
        "": ""
    },
    {
        "code": "2912",
        "name": "Roche-d Or",
        "": ""
    },
    {
        "code": "2912",
        "name": "Réclère",
        "": ""
    },
    {
        "code": "2914",
        "name": "Damvant",
        "": ""
    },
    {
        "code": "2915",
        "name": "Bure",
        "": ""
    },
    {
        "code": "2916",
        "name": "Fahy",
        "": ""
    },
    {
        "code": "2922",
        "name": "Courchavon",
        "": ""
    },
    {
        "code": "2923",
        "name": "Courtemaîche",
        "": ""
    },
    {
        "code": "2924",
        "name": "Montignez",
        "": ""
    },
    {
        "code": "2925",
        "name": "Buix",
        "": ""
    },
    {
        "code": "2926",
        "name": "Boncourt",
        "": ""
    },
    {
        "code": "2932",
        "name": "Coeuve",
        "": ""
    },
    {
        "code": "2933",
        "name": "Damphreux",
        "": ""
    },
    {
        "code": "2933",
        "name": "Lugnez",
        "": ""
    },
    {
        "code": "2935",
        "name": "Beurnevésin",
        "": ""
    },
    {
        "code": "2942",
        "name": "Alle",
        "": ""
    },
    {
        "code": "2943",
        "name": "Vendlincourt",
        "": ""
    },
    {
        "code": "2944",
        "name": "Bonfol",
        "": ""
    },
    {
        "code": "2946",
        "name": "Miécourt",
        "": ""
    },
    {
        "code": "2947",
        "name": "Charmoille",
        "": ""
    },
    {
        "code": "2950",
        "name": "Courtemautruy",
        "": ""
    },
    {
        "code": "2950",
        "name": "Courgenay",
        "": ""
    },
    {
        "code": "2952",
        "name": "Cornol",
        "": ""
    },
    {
        "code": "2953",
        "name": "Fregiécourt",
        "": ""
    },
    {
        "code": "2953",
        "name": "Pleujouse",
        "": ""
    },
    {
        "code": "2954",
        "name": "Asuel",
        "": ""
    },
    {
        "code": "3000",
        "name": "Bern",
        "": ""
    },
    {
        "code": "3004",
        "name": "Bern",
        "": ""
    },
    {
        "code": "3005",
        "name": "Bern",
        "": ""
    },
    {
        "code": "3006",
        "name": "Bern",
        "": ""
    },
    {
        "code": "3007",
        "name": "Bern",
        "": ""
    },
    {
        "code": "3008",
        "name": "Bern",
        "": ""
    },
    {
        "code": "3010",
        "name": "Bern",
        "": ""
    },
    {
        "code": "3011",
        "name": "Bern",
        "": ""
    },
    {
        "code": "3012",
        "name": "Bern",
        "": ""
    },
    {
        "code": "3013",
        "name": "Bern",
        "": ""
    },
    {
        "code": "3014",
        "name": "Bern",
        "": ""
    },
    {
        "code": "3015",
        "name": "Bern",
        "": ""
    },
    {
        "code": "3018",
        "name": "Bern",
        "": ""
    },
    {
        "code": "3019",
        "name": "Bern",
        "": ""
    },
    {
        "code": "3020",
        "name": "Bern",
        "": ""
    },
    {
        "code": "3027",
        "name": "Bern",
        "": ""
    },
    {
        "code": "3032",
        "name": "Hinterkappelen",
        "": ""
    },
    {
        "code": "3033",
        "name": "Wohlen b. Bern",
        "": ""
    },
    {
        "code": "3034",
        "name": "Murzelen",
        "": ""
    },
    {
        "code": "3035",
        "name": "Frieswil",
        "": ""
    },
    {
        "code": "3036",
        "name": "Detligen",
        "": ""
    },
    {
        "code": "3037",
        "name": "Herrenschwanden",
        "": ""
    },
    {
        "code": "3038",
        "name": "Kirchlindach",
        "": ""
    },
    {
        "code": "3042",
        "name": "Ortschwaben",
        "": ""
    },
    {
        "code": "3043",
        "name": "Uettligen",
        "": ""
    },
    {
        "code": "3044",
        "name": "Innerberg",
        "": ""
    },
    {
        "code": "3045",
        "name": "Meikirch",
        "": ""
    },
    {
        "code": "3046",
        "name": "Wahlendorf",
        "": ""
    },
    {
        "code": "3047",
        "name": "Bremgarten b. Bern",
        "": ""
    },
    {
        "code": "3048",
        "name": "Worblaufen",
        "": ""
    },
    {
        "code": "3049",
        "name": "Säriswil",
        "": ""
    },
    {
        "code": "3052",
        "name": "Zollikofen",
        "": ""
    },
    {
        "code": "3053",
        "name": "Deisswil b. Münchenbuchsee",
        "": ""
    },
    {
        "code": "3053",
        "name": "Diemerswil",
        "": ""
    },
    {
        "code": "3053",
        "name": "Wiggiswil",
        "": ""
    },
    {
        "code": "3053",
        "name": "Lätti",
        "": ""
    },
    {
        "code": "3053",
        "name": "Münchenbuchsee",
        "": ""
    },
    {
        "code": "3054",
        "name": "Schüpfen",
        "": ""
    },
    {
        "code": "3063",
        "name": "Ittigen",
        "": ""
    },
    {
        "code": "3065",
        "name": "Bolligen",
        "": ""
    },
    {
        "code": "3066",
        "name": "Stettlen",
        "": ""
    },
    {
        "code": "3067",
        "name": "Boll",
        "": ""
    },
    {
        "code": "3068",
        "name": "Utzigen",
        "": ""
    },
    {
        "code": "3072",
        "name": "Ostermundigen",
        "": ""
    },
    {
        "code": "3073",
        "name": "Gümligen",
        "": ""
    },
    {
        "code": "3074",
        "name": "Muri b. Bern",
        "": ""
    },
    {
        "code": "3075",
        "name": "Rüfenacht BE",
        "": ""
    },
    {
        "code": "3076",
        "name": "Worb",
        "": ""
    },
    {
        "code": "3077",
        "name": "Enggistein",
        "": ""
    },
    {
        "code": "3078",
        "name": "Richigen",
        "": ""
    },
    {
        "code": "3082",
        "name": "Schlosswil",
        "": ""
    },
    {
        "code": "3083",
        "name": "Trimstein",
        "": ""
    },
    {
        "code": "3084",
        "name": "Wabern",
        "": ""
    },
    {
        "code": "3086",
        "name": "Englisberg",
        "": ""
    },
    {
        "code": "3086",
        "name": "Zimmerwald",
        "": ""
    },
    {
        "code": "3087",
        "name": "Niedermuhlern",
        "": ""
    },
    {
        "code": "3088",
        "name": "Oberbütschel",
        "": ""
    },
    {
        "code": "3088",
        "name": "Rüeggisberg",
        "": ""
    },
    {
        "code": "3089",
        "name": "Hinterfultigen",
        "": ""
    },
    {
        "code": "3095",
        "name": "Spiegel b. Bern",
        "": ""
    },
    {
        "code": "3096",
        "name": "Oberbalm",
        "": ""
    },
    {
        "code": "3097",
        "name": "Liebefeld",
        "": ""
    },
    {
        "code": "3098",
        "name": "Köniz",
        "": ""
    },
    {
        "code": "3098",
        "name": "Schliern b. Köniz",
        "": ""
    },
    {
        "code": "3099",
        "name": "Rüti b. Riggisberg",
        "": ""
    },
    {
        "code": "3110",
        "name": "Münsingen",
        "": ""
    },
    {
        "code": "3111",
        "name": "Tägertschi",
        "": ""
    },
    {
        "code": "3112",
        "name": "Allmendingen b. Bern",
        "": ""
    },
    {
        "code": "3113",
        "name": "Rubigen",
        "": ""
    },
    {
        "code": "3114",
        "name": "Wichtrach",
        "": ""
    },
    {
        "code": "3115",
        "name": "Gerzensee",
        "": ""
    },
    {
        "code": "3116",
        "name": "Mühledorf BE",
        "": ""
    },
    {
        "code": "3116",
        "name": "Noflen BE",
        "": ""
    },
    {
        "code": "3116",
        "name": "Kirchdorf BE",
        "": ""
    },
    {
        "code": "3122",
        "name": "Kehrsatz",
        "": ""
    },
    {
        "code": "3123",
        "name": "Belp",
        "": ""
    },
    {
        "code": "3124",
        "name": "Belpberg",
        "": ""
    },
    {
        "code": "3125",
        "name": "Toffen",
        "": ""
    },
    {
        "code": "3126",
        "name": "Gelterfingen",
        "": ""
    },
    {
        "code": "3126",
        "name": "Kaufdorf",
        "": ""
    },
    {
        "code": "3127",
        "name": "Lohnstorf",
        "": ""
    },
    {
        "code": "3127",
        "name": "Mühlethurnen",
        "": ""
    },
    {
        "code": "3128",
        "name": "Kirchenthurnen",
        "": ""
    },
    {
        "code": "3128",
        "name": "Rümligen",
        "": ""
    },
    {
        "code": "3132",
        "name": "Riggisberg",
        "": ""
    },
    {
        "code": "3144",
        "name": "Gasel",
        "": ""
    },
    {
        "code": "3145",
        "name": "Niederscherli",
        "": ""
    },
    {
        "code": "3147",
        "name": "Mittelhäusern",
        "": ""
    },
    {
        "code": "3148",
        "name": "Lanzenhäusern",
        "": ""
    },
    {
        "code": "3150",
        "name": "Schwarzenburg",
        "": ""
    },
    {
        "code": "3152",
        "name": "Mamishaus",
        "": ""
    },
    {
        "code": "3153",
        "name": "Rüschegg Gambach",
        "": ""
    },
    {
        "code": "3154",
        "name": "Rüschegg Heubach",
        "": ""
    },
    {
        "code": "3155",
        "name": "Helgisried-Rohrbach",
        "": ""
    },
    {
        "code": "3156",
        "name": "Riffenmatt",
        "": ""
    },
    {
        "code": "3157",
        "name": "Milken",
        "": ""
    },
    {
        "code": "3158",
        "name": "Guggisberg",
        "": ""
    },
    {
        "code": "3159",
        "name": "Riedstätt",
        "": ""
    },
    {
        "code": "3172",
        "name": "Niederwangen b. Bern",
        "": ""
    },
    {
        "code": "3173",
        "name": "Oberwangen b. Bern",
        "": ""
    },
    {
        "code": "3174",
        "name": "Thörishaus",
        "": ""
    },
    {
        "code": "3175",
        "name": "Flamatt",
        "": ""
    },
    {
        "code": "3176",
        "name": "Neuenegg",
        "": ""
    },
    {
        "code": "3177",
        "name": "Laupen BE",
        "": ""
    },
    {
        "code": "3178",
        "name": "Bösingen",
        "": ""
    },
    {
        "code": "3179",
        "name": "Kriechenwil",
        "": ""
    },
    {
        "code": "3182",
        "name": "Ueberstorf",
        "": ""
    },
    {
        "code": "3183",
        "name": "Albligen",
        "": ""
    },
    {
        "code": "3184",
        "name": "Wünnewil",
        "": ""
    },
    {
        "code": "3185",
        "name": "Schmitten FR",
        "": ""
    },
    {
        "code": "3186",
        "name": "Düdingen",
        "": ""
    },
    {
        "code": "3202",
        "name": "Frauenkappelen",
        "": ""
    },
    {
        "code": "3203",
        "name": "Mühleberg",
        "": ""
    },
    {
        "code": "3204",
        "name": "Rosshäusern",
        "": ""
    },
    {
        "code": "3205",
        "name": "Gümmenen",
        "": ""
    },
    {
        "code": "3206",
        "name": "Rizenbach",
        "": ""
    },
    {
        "code": "3206",
        "name": "Ferenbalm",
        "": ""
    },
    {
        "code": "3206",
        "name": "Biberen",
        "": ""
    },
    {
        "code": "3206",
        "name": "Gammen",
        "": ""
    },
    {
        "code": "3206",
        "name": "Wallenbuch",
        "": ""
    },
    {
        "code": "3207",
        "name": "Wileroltigen",
        "": ""
    },
    {
        "code": "3207",
        "name": "Golaten",
        "": ""
    },
    {
        "code": "3208",
        "name": "Gurbrü",
        "": ""
    },
    {
        "code": "3210",
        "name": "Kerzers",
        "": ""
    },
    {
        "code": "3212",
        "name": "Kleingurmels",
        "": ""
    },
    {
        "code": "3212",
        "name": "Gurmels",
        "": ""
    },
    {
        "code": "3213",
        "name": "Liebistorf",
        "": ""
    },
    {
        "code": "3213",
        "name": "Kleinbösingen",
        "": ""
    },
    {
        "code": "3214",
        "name": "Ulmiz",
        "": ""
    },
    {
        "code": "3215",
        "name": "Gempenach",
        "": ""
    },
    {
        "code": "3215",
        "name": "Büchslen",
        "": ""
    },
    {
        "code": "3215",
        "name": "Lurtigen",
        "": ""
    },
    {
        "code": "3216",
        "name": "Agriswil",
        "": ""
    },
    {
        "code": "3216",
        "name": "Ried b. Kerzers",
        "": ""
    },
    {
        "code": "3225",
        "name": "Müntschemier",
        "": ""
    },
    {
        "code": "3226",
        "name": "Treiten",
        "": ""
    },
    {
        "code": "3232",
        "name": "Ins",
        "": ""
    },
    {
        "code": "3233",
        "name": "Tschugg",
        "": ""
    },
    {
        "code": "3234",
        "name": "Vinelz",
        "": ""
    },
    {
        "code": "3235",
        "name": "Erlach",
        "": ""
    },
    {
        "code": "3236",
        "name": "Gampelen",
        "": ""
    },
    {
        "code": "3237",
        "name": "Brüttelen",
        "": ""
    },
    {
        "code": "3238",
        "name": "Gals",
        "": ""
    },
    {
        "code": "3250",
        "name": "Lyss",
        "": ""
    },
    {
        "code": "3251",
        "name": "Ruppoldsried",
        "": ""
    },
    {
        "code": "3251",
        "name": "Wengi b. Büren",
        "": ""
    },
    {
        "code": "3252",
        "name": "Worben",
        "": ""
    },
    {
        "code": "3253",
        "name": "Schnottwil",
        "": ""
    },
    {
        "code": "3254",
        "name": "Balm b. Messen",
        "": ""
    },
    {
        "code": "3254",
        "name": "Messen",
        "": ""
    },
    {
        "code": "3255",
        "name": "Rapperswil BE",
        "": ""
    },
    {
        "code": "3256",
        "name": "Dieterswil",
        "": ""
    },
    {
        "code": "3256",
        "name": "Bangerten b. Dieterswil",
        "": ""
    },
    {
        "code": "3256",
        "name": "Seewil",
        "": ""
    },
    {
        "code": "3257",
        "name": "Ammerzwil BE",
        "": ""
    },
    {
        "code": "3257",
        "name": "Grossaffoltern",
        "": ""
    },
    {
        "code": "3262",
        "name": "Suberg",
        "": ""
    },
    {
        "code": "3263",
        "name": "Büetigen",
        "": ""
    },
    {
        "code": "3264",
        "name": "Diessbach b. Büren",
        "": ""
    },
    {
        "code": "3266",
        "name": "Wiler b. Seedorf",
        "": ""
    },
    {
        "code": "3267",
        "name": "Seedorf BE",
        "": ""
    },
    {
        "code": "3268",
        "name": "Lobsigen",
        "": ""
    },
    {
        "code": "3270",
        "name": "Aarberg",
        "": ""
    },
    {
        "code": "3271",
        "name": "Radelfingen b. Aarberg",
        "": ""
    },
    {
        "code": "3272",
        "name": "Epsach",
        "": ""
    },
    {
        "code": "3272",
        "name": "Walperswil",
        "": ""
    },
    {
        "code": "3273",
        "name": "Kappelen",
        "": ""
    },
    {
        "code": "3274",
        "name": "Hermrigen",
        "": ""
    },
    {
        "code": "3274",
        "name": "Bühl b. Aarberg",
        "": ""
    },
    {
        "code": "3274",
        "name": "Merzligen",
        "": ""
    },
    {
        "code": "3280",
        "name": "Meyriez",
        "": ""
    },
    {
        "code": "3280",
        "name": "Greng",
        "": ""
    },
    {
        "code": "3280",
        "name": "Murten",
        "": ""
    },
    {
        "code": "3282",
        "name": "Bargen BE",
        "": ""
    },
    {
        "code": "3283",
        "name": "Niederried b. Kallnach",
        "": ""
    },
    {
        "code": "3283",
        "name": "Kallnach",
        "": ""
    },
    {
        "code": "3284",
        "name": "Fräschels",
        "": ""
    },
    {
        "code": "3285",
        "name": "Galmiz",
        "": ""
    },
    {
        "code": "3286",
        "name": "Muntelier",
        "": ""
    },
    {
        "code": "3292",
        "name": "Busswil b. Büren",
        "": ""
    },
    {
        "code": "3293",
        "name": "Dotzigen",
        "": ""
    },
    {
        "code": "3294",
        "name": "Meienried",
        "": ""
    },
    {
        "code": "3294",
        "name": "Büren an der Aare",
        "": ""
    },
    {
        "code": "3295",
        "name": "Rüti b. Büren",
        "": ""
    },
    {
        "code": "3296",
        "name": "Arch",
        "": ""
    },
    {
        "code": "3297",
        "name": "Leuzigen",
        "": ""
    },
    {
        "code": "3298",
        "name": "Oberwil b. Büren",
        "": ""
    },
    {
        "code": "3302",
        "name": "Moosseedorf",
        "": ""
    },
    {
        "code": "3303",
        "name": "Zuzwil BE",
        "": ""
    },
    {
        "code": "3303",
        "name": "Ballmoos",
        "": ""
    },
    {
        "code": "3303",
        "name": "Münchringen",
        "": ""
    },
    {
        "code": "3303",
        "name": "Jegenstorf",
        "": ""
    },
    {
        "code": "3305",
        "name": "Iffwil",
        "": ""
    },
    {
        "code": "3305",
        "name": "Scheunen",
        "": ""
    },
    {
        "code": "3306",
        "name": "Etzelkofen",
        "": ""
    },
    {
        "code": "3307",
        "name": "Brunnenthal",
        "": ""
    },
    {
        "code": "3308",
        "name": "Grafenried",
        "": ""
    },
    {
        "code": "3309",
        "name": "Kernenried",
        "": ""
    },
    {
        "code": "3309",
        "name": "Zauggenried",
        "": ""
    },
    {
        "code": "3312",
        "name": "Fraubrunnen",
        "": ""
    },
    {
        "code": "3313",
        "name": "Büren zum Hof",
        "": ""
    },
    {
        "code": "3314",
        "name": "Schalunen",
        "": ""
    },
    {
        "code": "3315",
        "name": "Kräiligen",
        "": ""
    },
    {
        "code": "3315",
        "name": "Bätterkinden",
        "": ""
    },
    {
        "code": "3317",
        "name": "Limpach",
        "": ""
    },
    {
        "code": "3317",
        "name": "Mülchi",
        "": ""
    },
    {
        "code": "3322",
        "name": "Mattstetten",
        "": ""
    },
    {
        "code": "3322",
        "name": "Urtenen-Schönbühl",
        "": ""
    },
    {
        "code": "3323",
        "name": "Bäriswil BE",
        "": ""
    },
    {
        "code": "3324",
        "name": "Mötschwil",
        "": ""
    },
    {
        "code": "3324",
        "name": "Hindelbank",
        "": ""
    },
    {
        "code": "3325",
        "name": "Hettiswil b. Hindelbank",
        "": ""
    },
    {
        "code": "3326",
        "name": "Krauchthal",
        "": ""
    },
    {
        "code": "3360",
        "name": "Herzogenbuchsee",
        "": ""
    },
    {
        "code": "3362",
        "name": "Niederönz",
        "": ""
    },
    {
        "code": "3363",
        "name": "Oberönz",
        "": ""
    },
    {
        "code": "3365",
        "name": "Seeberg",
        "": ""
    },
    {
        "code": "3365",
        "name": "Grasswil",
        "": ""
    },
    {
        "code": "3366",
        "name": "Bettenhausen",
        "": ""
    },
    {
        "code": "3366",
        "name": "Bollodingen",
        "": ""
    },
    {
        "code": "3367",
        "name": "Ochlenberg",
        "": ""
    },
    {
        "code": "3367",
        "name": "Thörigen",
        "": ""
    },
    {
        "code": "3368",
        "name": "Bleienbach",
        "": ""
    },
    {
        "code": "3372",
        "name": "Wanzwil",
        "": ""
    },
    {
        "code": "3373",
        "name": "Heimenhausen",
        "": ""
    },
    {
        "code": "3373",
        "name": "Röthenbach Herzogenbuchsee",
        "": ""
    },
    {
        "code": "3374",
        "name": "Wangenried",
        "": ""
    },
    {
        "code": "3375",
        "name": "Inkwil",
        "": ""
    },
    {
        "code": "3376",
        "name": "Graben",
        "": ""
    },
    {
        "code": "3376",
        "name": "Berken",
        "": ""
    },
    {
        "code": "3377",
        "name": "Walliswil b. Wangen",
        "": ""
    },
    {
        "code": "3380",
        "name": "Walliswil b. Niederbipp",
        "": ""
    },
    {
        "code": "3380",
        "name": "Wangen an der Aare",
        "": ""
    },
    {
        "code": "3400",
        "name": "Burgdorf",
        "": ""
    },
    {
        "code": "3412",
        "name": "Heimiswil",
        "": ""
    },
    {
        "code": "3413",
        "name": "Kaltacker",
        "": ""
    },
    {
        "code": "3414",
        "name": "Oberburg",
        "": ""
    },
    {
        "code": "3415",
        "name": "Schafhausen im Emmental",
        "": ""
    },
    {
        "code": "3415",
        "name": "Rüegsauschachen",
        "": ""
    },
    {
        "code": "3415",
        "name": "Hasle b. Burgdorf",
        "": ""
    },
    {
        "code": "3416",
        "name": "Affoltern im Emmental",
        "": ""
    },
    {
        "code": "3417",
        "name": "Rüegsau",
        "": ""
    },
    {
        "code": "3418",
        "name": "Rüegsbach",
        "": ""
    },
    {
        "code": "3419",
        "name": "Biembach im Emmental",
        "": ""
    },
    {
        "code": "3421",
        "name": "Rüti b. Lyssach",
        "": ""
    },
    {
        "code": "3421",
        "name": "Lyssach",
        "": ""
    },
    {
        "code": "3422",
        "name": "Rüdtligen",
        "": ""
    },
    {
        "code": "3422",
        "name": "Alchenflüh",
        "": ""
    },
    {
        "code": "3422",
        "name": "Kirchberg BE",
        "": ""
    },
    {
        "code": "3423",
        "name": "Ersigen",
        "": ""
    },
    {
        "code": "3424",
        "name": "Niederösch",
        "": ""
    },
    {
        "code": "3424",
        "name": "Oberösch",
        "": ""
    },
    {
        "code": "3425",
        "name": "Willadingen",
        "": ""
    },
    {
        "code": "3425",
        "name": "Koppigen",
        "": ""
    },
    {
        "code": "3426",
        "name": "Aefligen",
        "": ""
    },
    {
        "code": "3427",
        "name": "Utzenstorf",
        "": ""
    },
    {
        "code": "3428",
        "name": "Wiler b. Utzenstorf",
        "": ""
    },
    {
        "code": "3429",
        "name": "Hellsau",
        "": ""
    },
    {
        "code": "3429",
        "name": "Höchstetten",
        "": ""
    },
    {
        "code": "3432",
        "name": "Lützelflüh-Goldbach",
        "": ""
    },
    {
        "code": "3433",
        "name": "Schwanden im Emmental",
        "": ""
    },
    {
        "code": "3434",
        "name": "Obergoldbach",
        "": ""
    },
    {
        "code": "3435",
        "name": "Ramsei",
        "": ""
    },
    {
        "code": "3436",
        "name": "Zollbrück",
        "": ""
    },
    {
        "code": "3437",
        "name": "Rüderswil",
        "": ""
    },
    {
        "code": "3438",
        "name": "Lauperswil",
        "": ""
    },
    {
        "code": "3439",
        "name": "Ranflüh",
        "": ""
    },
    {
        "code": "3452",
        "name": "Grünenmatt",
        "": ""
    },
    {
        "code": "3453",
        "name": "Heimisbach",
        "": ""
    },
    {
        "code": "3454",
        "name": "Sumiswald",
        "": ""
    },
    {
        "code": "3455",
        "name": "Grünen",
        "": ""
    },
    {
        "code": "3456",
        "name": "Trachselwald",
        "": ""
    },
    {
        "code": "3457",
        "name": "Wasen im Emmental",
        "": ""
    },
    {
        "code": "3462",
        "name": "Weier im Emmental",
        "": ""
    },
    {
        "code": "3463",
        "name": "Häusernmoos im Emmental",
        "": ""
    },
    {
        "code": "3464",
        "name": "Schmidigen-Mühleweg",
        "": ""
    },
    {
        "code": "3465",
        "name": "Dürrenroth",
        "": ""
    },
    {
        "code": "3472",
        "name": "Rumendingen",
        "": ""
    },
    {
        "code": "3472",
        "name": "Wynigen",
        "": ""
    },
    {
        "code": "3473",
        "name": "Alchenstorf",
        "": ""
    },
    {
        "code": "3474",
        "name": "Rüedisbach",
        "": ""
    },
    {
        "code": "3475",
        "name": "Riedtwil",
        "": ""
    },
    {
        "code": "3475",
        "name": "Hermiswil",
        "": ""
    },
    {
        "code": "3476",
        "name": "Oschwand",
        "": ""
    },
    {
        "code": "3503",
        "name": "Gysenstein",
        "": ""
    },
    {
        "code": "3504",
        "name": "Niederhünigen",
        "": ""
    },
    {
        "code": "3504",
        "name": "Oberhünigen",
        "": ""
    },
    {
        "code": "3506",
        "name": "Grosshöchstetten",
        "": ""
    },
    {
        "code": "3507",
        "name": "Biglen",
        "": ""
    },
    {
        "code": "3508",
        "name": "Arni BE",
        "": ""
    },
    {
        "code": "3510",
        "name": "Freimettigen",
        "": ""
    },
    {
        "code": "3510",
        "name": "Häutligen",
        "": ""
    },
    {
        "code": "3510",
        "name": "Konolfingen",
        "": ""
    },
    {
        "code": "3512",
        "name": "Walkringen",
        "": ""
    },
    {
        "code": "3513",
        "name": "Bigenthal",
        "": ""
    },
    {
        "code": "3531",
        "name": "Oberthal",
        "": ""
    },
    {
        "code": "3532",
        "name": "Mirchel",
        "": ""
    },
    {
        "code": "3532",
        "name": "Zäziwil",
        "": ""
    },
    {
        "code": "3533",
        "name": "Bowil",
        "": ""
    },
    {
        "code": "3534",
        "name": "Signau",
        "": ""
    },
    {
        "code": "3535",
        "name": "Schüpbach",
        "": ""
    },
    {
        "code": "3536",
        "name": "Aeschau",
        "": ""
    },
    {
        "code": "3537",
        "name": "Eggiwil",
        "": ""
    },
    {
        "code": "3538",
        "name": "Röthenbach im Emmental",
        "": ""
    },
    {
        "code": "3543",
        "name": "Emmenmatt",
        "": ""
    },
    {
        "code": "3550",
        "name": "Langnau im Emmental",
        "": ""
    },
    {
        "code": "3551",
        "name": "Oberfrittenbach",
        "": ""
    },
    {
        "code": "3552",
        "name": "Bärau",
        "": ""
    },
    {
        "code": "3553",
        "name": "Gohl",
        "": ""
    },
    {
        "code": "3555",
        "name": "Trubschachen",
        "": ""
    },
    {
        "code": "3556",
        "name": "Trub",
        "": ""
    },
    {
        "code": "3557",
        "name": "Fankhaus (Trub)",
        "": ""
    },
    {
        "code": "3600",
        "name": "Thun",
        "": ""
    },
    {
        "code": "3603",
        "name": "Thun",
        "": ""
    },
    {
        "code": "3604",
        "name": "Thun",
        "": ""
    },
    {
        "code": "3608",
        "name": "Thun",
        "": ""
    },
    {
        "code": "3612",
        "name": "Steffisburg",
        "": ""
    },
    {
        "code": "3613",
        "name": "Steffisburg",
        "": ""
    },
    {
        "code": "3614",
        "name": "Unterlangenegg",
        "": ""
    },
    {
        "code": "3615",
        "name": "Heimenschwand",
        "": ""
    },
    {
        "code": "3616",
        "name": "Schwarzenegg",
        "": ""
    },
    {
        "code": "3617",
        "name": "Fahrni b. Thun",
        "": ""
    },
    {
        "code": "3618",
        "name": "Süderen",
        "": ""
    },
    {
        "code": "3619",
        "name": "Eriz",
        "": ""
    },
    {
        "code": "3619",
        "name": "Innereriz",
        "": ""
    },
    {
        "code": "3622",
        "name": "Homberg b. Thun",
        "": ""
    },
    {
        "code": "3623",
        "name": "Teuffenthal b. Thun",
        "": ""
    },
    {
        "code": "3623",
        "name": "Horrenbach",
        "": ""
    },
    {
        "code": "3623",
        "name": "Buchen BE",
        "": ""
    },
    {
        "code": "3624",
        "name": "Schwendibach",
        "": ""
    },
    {
        "code": "3624",
        "name": "Goldiwil (Thun)",
        "": ""
    },
    {
        "code": "3625",
        "name": "Heiligenschwendi",
        "": ""
    },
    {
        "code": "3626",
        "name": "Hünibach",
        "": ""
    },
    {
        "code": "3627",
        "name": "Heimberg",
        "": ""
    },
    {
        "code": "3628",
        "name": "Kienersrüti",
        "": ""
    },
    {
        "code": "3628",
        "name": "Uttigen",
        "": ""
    },
    {
        "code": "3629",
        "name": "Oppligen",
        "": ""
    },
    {
        "code": "3629",
        "name": "Jaberg",
        "": ""
    },
    {
        "code": "3629",
        "name": "Kiesen",
        "": ""
    },
    {
        "code": "3631",
        "name": "Höfen b. Thun",
        "": ""
    },
    {
        "code": "3632",
        "name": "Niederstocken",
        "": ""
    },
    {
        "code": "3632",
        "name": "Oberstocken",
        "": ""
    },
    {
        "code": "3633",
        "name": "Amsoldingen",
        "": ""
    },
    {
        "code": "3634",
        "name": "Thierachern",
        "": ""
    },
    {
        "code": "3635",
        "name": "Uebeschi",
        "": ""
    },
    {
        "code": "3636",
        "name": "Längenbühl",
        "": ""
    },
    {
        "code": "3636",
        "name": "Forst b. Längenbühl",
        "": ""
    },
    {
        "code": "3638",
        "name": "Pohlern",
        "": ""
    },
    {
        "code": "3638",
        "name": "Blumenstein",
        "": ""
    },
    {
        "code": "3645",
        "name": "Gwatt (Thun)",
        "": ""
    },
    {
        "code": "3645",
        "name": "Zwieselberg",
        "": ""
    },
    {
        "code": "3646",
        "name": "Einigen",
        "": ""
    },
    {
        "code": "3647",
        "name": "Reutigen",
        "": ""
    },
    {
        "code": "3652",
        "name": "Hilterfingen",
        "": ""
    },
    {
        "code": "3653",
        "name": "Oberhofen am Thunersee",
        "": ""
    },
    {
        "code": "3654",
        "name": "Gunten",
        "": ""
    },
    {
        "code": "3655",
        "name": "Sigriswil",
        "": ""
    },
    {
        "code": "3656",
        "name": "Tschingel ob Gunten",
        "": ""
    },
    {
        "code": "3656",
        "name": "Aeschlen ob Gunten",
        "": ""
    },
    {
        "code": "3656",
        "name": "Ringoldswil",
        "": ""
    },
    {
        "code": "3657",
        "name": "Schwanden (Sigriswil)",
        "": ""
    },
    {
        "code": "3658",
        "name": "Merligen",
        "": ""
    },
    {
        "code": "3661",
        "name": "Uetendorf",
        "": ""
    },
    {
        "code": "3662",
        "name": "Seftigen",
        "": ""
    },
    {
        "code": "3663",
        "name": "Gurzelen",
        "": ""
    },
    {
        "code": "3664",
        "name": "Burgistein",
        "": ""
    },
    {
        "code": "3665",
        "name": "Wattenwil",
        "": ""
    },
    {
        "code": "3671",
        "name": "Herbligen",
        "": ""
    },
    {
        "code": "3671",
        "name": "Brenzikofen",
        "": ""
    },
    {
        "code": "3672",
        "name": "Aeschlen b. Oberdiessbach",
        "": ""
    },
    {
        "code": "3672",
        "name": "Oberdiessbach",
        "": ""
    },
    {
        "code": "3673",
        "name": "Linden",
        "": ""
    },
    {
        "code": "3674",
        "name": "Bleiken b. Oberdiessbach",
        "": ""
    },
    {
        "code": "3700",
        "name": "Spiez",
        "": ""
    },
    {
        "code": "3702",
        "name": "Hondrich",
        "": ""
    },
    {
        "code": "3703",
        "name": "Aeschiried",
        "": ""
    },
    {
        "code": "3703",
        "name": "Aeschi b. Spiez",
        "": ""
    },
    {
        "code": "3704",
        "name": "Krattigen",
        "": ""
    },
    {
        "code": "3705",
        "name": "Faulensee",
        "": ""
    },
    {
        "code": "3706",
        "name": "Leissigen",
        "": ""
    },
    {
        "code": "3707",
        "name": "Därligen",
        "": ""
    },
    {
        "code": "3711",
        "name": "Emdthal",
        "": ""
    },
    {
        "code": "3711",
        "name": "Mülenen",
        "": ""
    },
    {
        "code": "3713",
        "name": "Reichenbach im Kandertal",
        "": ""
    },
    {
        "code": "3714",
        "name": "Wengi b. Frutigen",
        "": ""
    },
    {
        "code": "3714",
        "name": "Frutigen",
        "": ""
    },
    {
        "code": "3715",
        "name": "Adelboden",
        "": ""
    },
    {
        "code": "3716",
        "name": "Kandergrund",
        "": ""
    },
    {
        "code": "3717",
        "name": "Blausee-Mitholz",
        "": ""
    },
    {
        "code": "3718",
        "name": "Kandersteg",
        "": ""
    },
    {
        "code": "3722",
        "name": "Scharnachtal",
        "": ""
    },
    {
        "code": "3723",
        "name": "Kiental",
        "": ""
    },
    {
        "code": "3724",
        "name": "Ried (Frutigen)",
        "": ""
    },
    {
        "code": "3725",
        "name": "Achseten",
        "": ""
    },
    {
        "code": "3752",
        "name": "Wimmis",
        "": ""
    },
    {
        "code": "3753",
        "name": "Oey",
        "": ""
    },
    {
        "code": "3754",
        "name": "Diemtigen",
        "": ""
    },
    {
        "code": "3755",
        "name": "Horboden",
        "": ""
    },
    {
        "code": "3756",
        "name": "Zwischenflüh",
        "": ""
    },
    {
        "code": "3757",
        "name": "Schwenden im Diemtigtal",
        "": ""
    },
    {
        "code": "3758",
        "name": "Latterbach",
        "": ""
    },
    {
        "code": "3762",
        "name": "Erlenbach im Simmental",
        "": ""
    },
    {
        "code": "3763",
        "name": "Därstetten",
        "": ""
    },
    {
        "code": "3764",
        "name": "Weissenburg",
        "": ""
    },
    {
        "code": "3765",
        "name": "Oberwil im Simmental",
        "": ""
    },
    {
        "code": "3766",
        "name": "Boltigen",
        "": ""
    },
    {
        "code": "3770",
        "name": "Zweisimmen",
        "": ""
    },
    {
        "code": "3771",
        "name": "Blankenburg",
        "": ""
    },
    {
        "code": "3772",
        "name": "St. Stephan",
        "": ""
    },
    {
        "code": "3773",
        "name": "Matten (St. Stephan)",
        "": ""
    },
    {
        "code": "3775",
        "name": "Lenk im Simmental",
        "": ""
    },
    {
        "code": "3776",
        "name": "Oeschseite",
        "": ""
    },
    {
        "code": "3777",
        "name": "Saanenmöser",
        "": ""
    },
    {
        "code": "3778",
        "name": "Schönried",
        "": ""
    },
    {
        "code": "3780",
        "name": "Gstaad",
        "": ""
    },
    {
        "code": "3781",
        "name": "Turbach",
        "": ""
    },
    {
        "code": "3782",
        "name": "Lauenen b. Gstaad",
        "": ""
    },
    {
        "code": "3783",
        "name": "Grund b. Gstaad",
        "": ""
    },
    {
        "code": "3784",
        "name": "Feutersoey",
        "": ""
    },
    {
        "code": "3785",
        "name": "Gsteig b. Gstaad",
        "": ""
    },
    {
        "code": "3792",
        "name": "Saanen",
        "": ""
    },
    {
        "code": "3800",
        "name": "Sundlauenen",
        "": ""
    },
    {
        "code": "3800",
        "name": "Interlaken",
        "": ""
    },
    {
        "code": "3800",
        "name": "Unterseen",
        "": ""
    },
    {
        "code": "3800",
        "name": "Matten b. Interlaken",
        "": ""
    },
    {
        "code": "3801",
        "name": "Jungfraujoch",
        "": ""
    },
    {
        "code": "3803",
        "name": "Beatenberg",
        "": ""
    },
    {
        "code": "3804",
        "name": "Habkern",
        "": ""
    },
    {
        "code": "3805",
        "name": "Goldswil b. Interlaken",
        "": ""
    },
    {
        "code": "3806",
        "name": "Bönigen b. Interlaken",
        "": ""
    },
    {
        "code": "3807",
        "name": "Iseltwald",
        "": ""
    },
    {
        "code": "3812",
        "name": "Wilderswil",
        "": ""
    },
    {
        "code": "3813",
        "name": "Saxeten",
        "": ""
    },
    {
        "code": "3814",
        "name": "Gsteigwiler",
        "": ""
    },
    {
        "code": "3815",
        "name": "Zweilütschinen",
        "": ""
    },
    {
        "code": "3815",
        "name": "Gündlischwand",
        "": ""
    },
    {
        "code": "3816",
        "name": "Lütschental",
        "": ""
    },
    {
        "code": "3816",
        "name": "Burglauenen",
        "": ""
    },
    {
        "code": "3818",
        "name": "Grindelwald",
        "": ""
    },
    {
        "code": "3822",
        "name": "Isenfluh",
        "": ""
    },
    {
        "code": "3822",
        "name": "Lauterbrunnen",
        "": ""
    },
    {
        "code": "3823",
        "name": "Kleine Scheidegg",
        "": ""
    },
    {
        "code": "3823",
        "name": "Eigergletscher",
        "": ""
    },
    {
        "code": "3823",
        "name": "Wengen",
        "": ""
    },
    {
        "code": "3824",
        "name": "Stechelberg",
        "": ""
    },
    {
        "code": "3825",
        "name": "Mürren",
        "": ""
    },
    {
        "code": "3826",
        "name": "Gimmelwald",
        "": ""
    },
    {
        "code": "3852",
        "name": "Ringgenberg BE",
        "": ""
    },
    {
        "code": "3853",
        "name": "Niederried b. Interlaken",
        "": ""
    },
    {
        "code": "3854",
        "name": "Oberried am Brienzersee",
        "": ""
    },
    {
        "code": "3855",
        "name": "Schwanden b. Brienz",
        "": ""
    },
    {
        "code": "3855",
        "name": "Brienz BE",
        "": ""
    },
    {
        "code": "3855",
        "name": "Axalp",
        "": ""
    },
    {
        "code": "3856",
        "name": "Brienzwiler",
        "": ""
    },
    {
        "code": "3857",
        "name": "Unterbach BE",
        "": ""
    },
    {
        "code": "3858",
        "name": "Hofstetten b. Brienz",
        "": ""
    },
    {
        "code": "3860",
        "name": "Rosenlaui",
        "": ""
    },
    {
        "code": "3860",
        "name": "Schattenhalb",
        "": ""
    },
    {
        "code": "3860",
        "name": "Meiringen",
        "": ""
    },
    {
        "code": "3860",
        "name": "Brünig",
        "": ""
    },
    {
        "code": "3862",
        "name": "Innertkirchen",
        "": ""
    },
    {
        "code": "3863",
        "name": "Gadmen",
        "": ""
    },
    {
        "code": "3864",
        "name": "Guttannen",
        "": ""
    },
    {
        "code": "3900",
        "name": "Gamsen",
        "": ""
    },
    {
        "code": "3900",
        "name": "Brigerbad",
        "": ""
    },
    {
        "code": "3900",
        "name": "Brig",
        "": ""
    },
    {
        "code": "3901",
        "name": "Rothwald",
        "": ""
    },
    {
        "code": "3902",
        "name": "Glis",
        "": ""
    },
    {
        "code": "3903",
        "name": "Birgisch",
        "": ""
    },
    {
        "code": "3903",
        "name": "Mund",
        "": ""
    },
    {
        "code": "3904",
        "name": "Naters",
        "": ""
    },
    {
        "code": "3905",
        "name": "Saas-Almagell",
        "": ""
    },
    {
        "code": "3906",
        "name": "Saas-Fee",
        "": ""
    },
    {
        "code": "3907",
        "name": "Simplon Hospiz",
        "": ""
    },
    {
        "code": "3907",
        "name": "Gabi (Simplon)",
        "": ""
    },
    {
        "code": "3907",
        "name": "Gondo",
        "": ""
    },
    {
        "code": "3907",
        "name": "Simplon Dorf",
        "": ""
    },
    {
        "code": "3908",
        "name": "Saas-Balen",
        "": ""
    },
    {
        "code": "3910",
        "name": "Saas-Grund",
        "": ""
    },
    {
        "code": "3911",
        "name": "Ried-Brig",
        "": ""
    },
    {
        "code": "3912",
        "name": "Termen",
        "": ""
    },
    {
        "code": "3913",
        "name": "Rosswald",
        "": ""
    },
    {
        "code": "3914",
        "name": "Belalp",
        "": ""
    },
    {
        "code": "3914",
        "name": "Blatten b. Naters",
        "": ""
    },
    {
        "code": "3916",
        "name": "Ferden",
        "": ""
    },
    {
        "code": "3917",
        "name": "Goppenstein",
        "": ""
    },
    {
        "code": "3917",
        "name": "Kippel",
        "": ""
    },
    {
        "code": "3918",
        "name": "Wiler (Lötschen)",
        "": ""
    },
    {
        "code": "3919",
        "name": "Blatten (Lötschen)",
        "": ""
    },
    {
        "code": "3920",
        "name": "Zermatt",
        "": ""
    },
    {
        "code": "3922",
        "name": "Eisten",
        "": ""
    },
    {
        "code": "3922",
        "name": "Kalpetran",
        "": ""
    },
    {
        "code": "3922",
        "name": "Stalden VS",
        "": ""
    },
    {
        "code": "3923",
        "name": "Törbel",
        "": ""
    },
    {
        "code": "3924",
        "name": "Gasenried",
        "": ""
    },
    {
        "code": "3924",
        "name": "St. Niklaus VS",
        "": ""
    },
    {
        "code": "3925",
        "name": "Grächen",
        "": ""
    },
    {
        "code": "3926",
        "name": "Embd",
        "": ""
    },
    {
        "code": "3927",
        "name": "Herbriggen",
        "": ""
    },
    {
        "code": "3928",
        "name": "Randa",
        "": ""
    },
    {
        "code": "3929",
        "name": "Täsch",
        "": ""
    },
    {
        "code": "3930",
        "name": "Eyholz",
        "": ""
    },
    {
        "code": "3930",
        "name": "Visp",
        "": ""
    },
    {
        "code": "3931",
        "name": "Lalden",
        "": ""
    },
    {
        "code": "3932",
        "name": "Visperterminen",
        "": ""
    },
    {
        "code": "3933",
        "name": "Staldenried",
        "": ""
    },
    {
        "code": "3934",
        "name": "Zeneggen",
        "": ""
    },
    {
        "code": "3935",
        "name": "Bürchen",
        "": ""
    },
    {
        "code": "3937",
        "name": "Baltschieder",
        "": ""
    },
    {
        "code": "3938",
        "name": "Ausserberg",
        "": ""
    },
    {
        "code": "3939",
        "name": "Eggerberg",
        "": ""
    },
    {
        "code": "3940",
        "name": "Steg VS",
        "": ""
    },
    {
        "code": "3942",
        "name": "Niedergesteln",
        "": ""
    },
    {
        "code": "3942",
        "name": "St. German",
        "": ""
    },
    {
        "code": "3942",
        "name": "Raron",
        "": ""
    },
    {
        "code": "3943",
        "name": "Eischoll",
        "": ""
    },
    {
        "code": "3944",
        "name": "Unterbäch VS",
        "": ""
    },
    {
        "code": "3945",
        "name": "Gampel",
        "": ""
    },
    {
        "code": "3945",
        "name": "Niedergampel",
        "": ""
    },
    {
        "code": "3946",
        "name": "Gruben",
        "": ""
    },
    {
        "code": "3946",
        "name": "Turtmann",
        "": ""
    },
    {
        "code": "3947",
        "name": "Ergisch",
        "": ""
    },
    {
        "code": "3948",
        "name": "Unterems",
        "": ""
    },
    {
        "code": "3948",
        "name": "Oberems",
        "": ""
    },
    {
        "code": "3949",
        "name": "Hohtenn",
        "": ""
    },
    {
        "code": "3951",
        "name": "Agarn",
        "": ""
    },
    {
        "code": "3952",
        "name": "Susten",
        "": ""
    },
    {
        "code": "3953",
        "name": "Inden",
        "": ""
    },
    {
        "code": "3953",
        "name": "Varen",
        "": ""
    },
    {
        "code": "3953",
        "name": "Leuk Stadt",
        "": ""
    },
    {
        "code": "3954",
        "name": "Leukerbad",
        "": ""
    },
    {
        "code": "3955",
        "name": "Albinen",
        "": ""
    },
    {
        "code": "3956",
        "name": "Guttet-Feschel",
        "": ""
    },
    {
        "code": "3957",
        "name": "Bratsch",
        "": ""
    },
    {
        "code": "3957",
        "name": "Erschmatt",
        "": ""
    },
    {
        "code": "3960",
        "name": "Corin-de-la-Crête",
        "": ""
    },
    {
        "code": "3960",
        "name": "Loc",
        "": ""
    },
    {
        "code": "3960",
        "name": "Muraz (Sierre)",
        "": ""
    },
    {
        "code": "3960",
        "name": "Niouc",
        "": ""
    },
    {
        "code": "3960",
        "name": "Sierre",
        "": ""
    },
    {
        "code": "3961",
        "name": "Chandolin",
        "": ""
    },
    {
        "code": "3961",
        "name": "Ayer",
        "": ""
    },
    {
        "code": "3961",
        "name": "St-Jean VS",
        "": ""
    },
    {
        "code": "3961",
        "name": "Vissoie",
        "": ""
    },
    {
        "code": "3961",
        "name": "St-Luc",
        "": ""
    },
    {
        "code": "3961",
        "name": "Zinal",
        "": ""
    },
    {
        "code": "3961",
        "name": "Grimentz",
        "": ""
    },
    {
        "code": "3963",
        "name": "Montana",
        "": ""
    },
    {
        "code": "3963",
        "name": "Crans-Montana",
        "": ""
    },
    {
        "code": "3963",
        "name": "Aminona",
        "": ""
    },
    {
        "code": "3965",
        "name": "Chippis",
        "": ""
    },
    {
        "code": "3966",
        "name": "Réchy",
        "": ""
    },
    {
        "code": "3966",
        "name": "Chalais",
        "": ""
    },
    {
        "code": "3967",
        "name": "Vercorin",
        "": ""
    },
    {
        "code": "3968",
        "name": "Veyras",
        "": ""
    },
    {
        "code": "3970",
        "name": "Salgesch",
        "": ""
    },
    {
        "code": "3971",
        "name": "Chermignon-d en-Bas",
        "": ""
    },
    {
        "code": "3971",
        "name": "Ollon VS",
        "": ""
    },
    {
        "code": "3971",
        "name": "Chermignon",
        "": ""
    },
    {
        "code": "3972",
        "name": "Miège",
        "": ""
    },
    {
        "code": "3973",
        "name": "Venthône",
        "": ""
    },
    {
        "code": "3974",
        "name": "Mollens VS",
        "": ""
    },
    {
        "code": "3975",
        "name": "Randogne",
        "": ""
    },
    {
        "code": "3976",
        "name": "Champzabé",
        "": ""
    },
    {
        "code": "3976",
        "name": "Noës",
        "": ""
    },
    {
        "code": "3977",
        "name": "Granges VS",
        "": ""
    },
    {
        "code": "3978",
        "name": "Flanthey",
        "": ""
    },
    {
        "code": "3979",
        "name": "Grône",
        "": ""
    },
    {
        "code": "3982",
        "name": "Bitsch",
        "": ""
    },
    {
        "code": "3983",
        "name": "Bister",
        "": ""
    },
    {
        "code": "3983",
        "name": "Filet",
        "": ""
    },
    {
        "code": "3983",
        "name": "Goppisberg",
        "": ""
    },
    {
        "code": "3983",
        "name": "Greich",
        "": ""
    },
    {
        "code": "3983",
        "name": "Mörel",
        "": ""
    },
    {
        "code": "3984",
        "name": "Fieschertal",
        "": ""
    },
    {
        "code": "3984",
        "name": "Fiesch",
        "": ""
    },
    {
        "code": "3985",
        "name": "Geschinen",
        "": ""
    },
    {
        "code": "3985",
        "name": "Münster VS",
        "": ""
    },
    {
        "code": "3986",
        "name": "Ried-Mörel",
        "": ""
    },
    {
        "code": "3987",
        "name": "Riederalp",
        "": ""
    },
    {
        "code": "3988",
        "name": "Obergesteln",
        "": ""
    },
    {
        "code": "3988",
        "name": "Ulrichen",
        "": ""
    },
    {
        "code": "3989",
        "name": "Niederwald",
        "": ""
    },
    {
        "code": "3989",
        "name": "Blitzingen",
        "": ""
    },
    {
        "code": "3989",
        "name": "Biel VS",
        "": ""
    },
    {
        "code": "3989",
        "name": "Ritzingen",
        "": ""
    },
    {
        "code": "3989",
        "name": "Selkingen",
        "": ""
    },
    {
        "code": "3991",
        "name": "Betten",
        "": ""
    },
    {
        "code": "3992",
        "name": "Bettmeralp",
        "": ""
    },
    {
        "code": "3993",
        "name": "Grengiols",
        "": ""
    },
    {
        "code": "3994",
        "name": "Lax",
        "": ""
    },
    {
        "code": "3994",
        "name": "Martisberg",
        "": ""
    },
    {
        "code": "3995",
        "name": "Ausserbinn",
        "": ""
    },
    {
        "code": "3995",
        "name": "Mühlebach (Goms)",
        "": ""
    },
    {
        "code": "3995",
        "name": "Steinhaus",
        "": ""
    },
    {
        "code": "3995",
        "name": "Ernen",
        "": ""
    },
    {
        "code": "3996",
        "name": "Binn",
        "": ""
    },
    {
        "code": "3997",
        "name": "Bellwald",
        "": ""
    },
    {
        "code": "3998",
        "name": "Gluringen",
        "": ""
    },
    {
        "code": "3998",
        "name": "Reckingen VS",
        "": ""
    },
    {
        "code": "3999",
        "name": "Oberwald",
        "": ""
    },
    {
        "code": "4000",
        "name": "Basel",
        "": ""
    },
    {
        "code": "4001",
        "name": "Basel",
        "": ""
    },
    {
        "code": "4031",
        "name": "Basel Universitätsspital",
        "": ""
    },
    {
        "code": "4051",
        "name": "Basel",
        "": ""
    },
    {
        "code": "4052",
        "name": "Basel",
        "": ""
    },
    {
        "code": "4053",
        "name": "Basel",
        "": ""
    },
    {
        "code": "4054",
        "name": "Basel",
        "": ""
    },
    {
        "code": "4055",
        "name": "Basel",
        "": ""
    },
    {
        "code": "4056",
        "name": "Basel",
        "": ""
    },
    {
        "code": "4057",
        "name": "Basel",
        "": ""
    },
    {
        "code": "4058",
        "name": "Basel",
        "": ""
    },
    {
        "code": "4059",
        "name": "Basel",
        "": ""
    },
    {
        "code": "4101",
        "name": "Bruderholz",
        "": ""
    },
    {
        "code": "4102",
        "name": "Binningen",
        "": ""
    },
    {
        "code": "4103",
        "name": "Bottmingen",
        "": ""
    },
    {
        "code": "4104",
        "name": "Oberwil BL",
        "": ""
    },
    {
        "code": "4105",
        "name": "Biel-Benken BL",
        "": ""
    },
    {
        "code": "4106",
        "name": "Therwil",
        "": ""
    },
    {
        "code": "4107",
        "name": "Ettingen",
        "": ""
    },
    {
        "code": "4108",
        "name": "Witterswil",
        "": ""
    },
    {
        "code": "4112",
        "name": "Bättwil",
        "": ""
    },
    {
        "code": "4112",
        "name": "Flüh",
        "": ""
    },
    {
        "code": "4114",
        "name": "Hofstetten SO",
        "": ""
    },
    {
        "code": "4115",
        "name": "Mariastein",
        "": ""
    },
    {
        "code": "4116",
        "name": "Metzerlen",
        "": ""
    },
    {
        "code": "4117",
        "name": "Burg im Leimental",
        "": ""
    },
    {
        "code": "4118",
        "name": "Rodersdorf",
        "": ""
    },
    {
        "code": "4123",
        "name": "Allschwil",
        "": ""
    },
    {
        "code": "4124",
        "name": "Schönenbuch",
        "": ""
    },
    {
        "code": "4125",
        "name": "Riehen",
        "": ""
    },
    {
        "code": "4126",
        "name": "Bettingen",
        "": ""
    },
    {
        "code": "4127",
        "name": "Birsfelden",
        "": ""
    },
    {
        "code": "4132",
        "name": "Muttenz",
        "": ""
    },
    {
        "code": "4133",
        "name": "Pratteln",
        "": ""
    },
    {
        "code": "4142",
        "name": "Münchenstein",
        "": ""
    },
    {
        "code": "4143",
        "name": "Dornach",
        "": ""
    },
    {
        "code": "4144",
        "name": "Arlesheim",
        "": ""
    },
    {
        "code": "4145",
        "name": "Gempen",
        "": ""
    },
    {
        "code": "4146",
        "name": "Hochwald",
        "": ""
    },
    {
        "code": "4147",
        "name": "Aesch BL",
        "": ""
    },
    {
        "code": "4148",
        "name": "Pfeffingen",
        "": ""
    },
    {
        "code": "4153",
        "name": "Reinach BL",
        "": ""
    },
    {
        "code": "4202",
        "name": "Duggingen",
        "": ""
    },
    {
        "code": "4203",
        "name": "Grellingen",
        "": ""
    },
    {
        "code": "4204",
        "name": "Himmelried",
        "": ""
    },
    {
        "code": "4206",
        "name": "Seewen SO",
        "": ""
    },
    {
        "code": "4207",
        "name": "Bretzwil",
        "": ""
    },
    {
        "code": "4208",
        "name": "Nunningen",
        "": ""
    },
    {
        "code": "4222",
        "name": "Zwingen",
        "": ""
    },
    {
        "code": "4223",
        "name": "Blauen",
        "": ""
    },
    {
        "code": "4224",
        "name": "Nenzlingen",
        "": ""
    },
    {
        "code": "4225",
        "name": "Brislach",
        "": ""
    },
    {
        "code": "4226",
        "name": "Breitenbach",
        "": ""
    },
    {
        "code": "4227",
        "name": "Büsserach",
        "": ""
    },
    {
        "code": "4228",
        "name": "Erschwil",
        "": ""
    },
    {
        "code": "4229",
        "name": "Beinwil SO",
        "": ""
    },
    {
        "code": "4232",
        "name": "Fehren",
        "": ""
    },
    {
        "code": "4233",
        "name": "Meltingen",
        "": ""
    },
    {
        "code": "4234",
        "name": "Zullwil",
        "": ""
    },
    {
        "code": "4242",
        "name": "Laufen",
        "": ""
    },
    {
        "code": "4243",
        "name": "Dittingen",
        "": ""
    },
    {
        "code": "4244",
        "name": "Röschenz",
        "": ""
    },
    {
        "code": "4245",
        "name": "Kleinlützel",
        "": ""
    },
    {
        "code": "4246",
        "name": "Wahlen b. Laufen",
        "": ""
    },
    {
        "code": "4247",
        "name": "Grindel",
        "": ""
    },
    {
        "code": "4252",
        "name": "Bärschwil",
        "": ""
    },
    {
        "code": "4253",
        "name": "Liesberg",
        "": ""
    },
    {
        "code": "4254",
        "name": "Liesberg Dorf",
        "": ""
    },
    {
        "code": "4302",
        "name": "Augst BL",
        "": ""
    },
    {
        "code": "4303",
        "name": "Kaiseraugst",
        "": ""
    },
    {
        "code": "4304",
        "name": "Giebenach",
        "": ""
    },
    {
        "code": "4305",
        "name": "Olsberg",
        "": ""
    },
    {
        "code": "4310",
        "name": "Rheinfelden",
        "": ""
    },
    {
        "code": "4312",
        "name": "Magden",
        "": ""
    },
    {
        "code": "4313",
        "name": "Möhlin",
        "": ""
    },
    {
        "code": "4314",
        "name": "Zeiningen",
        "": ""
    },
    {
        "code": "4315",
        "name": "Zuzgen",
        "": ""
    },
    {
        "code": "4316",
        "name": "Hellikon",
        "": ""
    },
    {
        "code": "4317",
        "name": "Wegenstetten",
        "": ""
    },
    {
        "code": "4322",
        "name": "Mumpf",
        "": ""
    },
    {
        "code": "4323",
        "name": "Wallbach",
        "": ""
    },
    {
        "code": "4324",
        "name": "Obermumpf",
        "": ""
    },
    {
        "code": "4325",
        "name": "Schupfart",
        "": ""
    },
    {
        "code": "4332",
        "name": "Stein AG",
        "": ""
    },
    {
        "code": "4333",
        "name": "Münchwilen AG",
        "": ""
    },
    {
        "code": "4334",
        "name": "Sisseln AG",
        "": ""
    },
    {
        "code": "4402",
        "name": "Frenkendorf",
        "": ""
    },
    {
        "code": "4410",
        "name": "Liestal",
        "": ""
    },
    {
        "code": "4411",
        "name": "Seltisberg",
        "": ""
    },
    {
        "code": "4412",
        "name": "Nuglar",
        "": ""
    },
    {
        "code": "4413",
        "name": "Büren SO",
        "": ""
    },
    {
        "code": "4414",
        "name": "Füllinsdorf",
        "": ""
    },
    {
        "code": "4415",
        "name": "Lausen",
        "": ""
    },
    {
        "code": "4416",
        "name": "Bubendorf",
        "": ""
    },
    {
        "code": "4417",
        "name": "Ziefen",
        "": ""
    },
    {
        "code": "4418",
        "name": "Reigoldswil",
        "": ""
    },
    {
        "code": "4419",
        "name": "Lupsingen",
        "": ""
    },
    {
        "code": "4421",
        "name": "St. Pantaleon",
        "": ""
    },
    {
        "code": "4422",
        "name": "Arisdorf",
        "": ""
    },
    {
        "code": "4423",
        "name": "Hersberg",
        "": ""
    },
    {
        "code": "4424",
        "name": "Arboldswil",
        "": ""
    },
    {
        "code": "4425",
        "name": "Titterten",
        "": ""
    },
    {
        "code": "4426",
        "name": "Lauwil",
        "": ""
    },
    {
        "code": "4431",
        "name": "Bennwil",
        "": ""
    },
    {
        "code": "4432",
        "name": "Lampenberg",
        "": ""
    },
    {
        "code": "4433",
        "name": "Ramlinsburg",
        "": ""
    },
    {
        "code": "4434",
        "name": "Hölstein",
        "": ""
    },
    {
        "code": "4435",
        "name": "Niederdorf",
        "": ""
    },
    {
        "code": "4436",
        "name": "Liedertswil",
        "": ""
    },
    {
        "code": "4436",
        "name": "Oberdorf BL",
        "": ""
    },
    {
        "code": "4437",
        "name": "Waldenburg",
        "": ""
    },
    {
        "code": "4438",
        "name": "Langenbruck",
        "": ""
    },
    {
        "code": "4441",
        "name": "Thürnen",
        "": ""
    },
    {
        "code": "4442",
        "name": "Diepflingen",
        "": ""
    },
    {
        "code": "4443",
        "name": "Wittinsburg",
        "": ""
    },
    {
        "code": "4444",
        "name": "Rümlingen",
        "": ""
    },
    {
        "code": "4445",
        "name": "Häfelfingen",
        "": ""
    },
    {
        "code": "4446",
        "name": "Buckten",
        "": ""
    },
    {
        "code": "4447",
        "name": "Känerkinden",
        "": ""
    },
    {
        "code": "4448",
        "name": "Läufelfingen",
        "": ""
    },
    {
        "code": "4450",
        "name": "Sissach",
        "": ""
    },
    {
        "code": "4451",
        "name": "Wintersingen",
        "": ""
    },
    {
        "code": "4452",
        "name": "Itingen",
        "": ""
    },
    {
        "code": "4453",
        "name": "Nusshof",
        "": ""
    },
    {
        "code": "4455",
        "name": "Zunzgen",
        "": ""
    },
    {
        "code": "4456",
        "name": "Tenniken",
        "": ""
    },
    {
        "code": "4457",
        "name": "Diegten",
        "": ""
    },
    {
        "code": "4458",
        "name": "Eptingen",
        "": ""
    },
    {
        "code": "4460",
        "name": "Gelterkinden",
        "": ""
    },
    {
        "code": "4461",
        "name": "Böckten",
        "": ""
    },
    {
        "code": "4462",
        "name": "Rickenbach BL",
        "": ""
    },
    {
        "code": "4463",
        "name": "Buus",
        "": ""
    },
    {
        "code": "4464",
        "name": "Maisprach",
        "": ""
    },
    {
        "code": "4465",
        "name": "Hemmiken",
        "": ""
    },
    {
        "code": "4466",
        "name": "Ormalingen",
        "": ""
    },
    {
        "code": "4467",
        "name": "Rothenfluh",
        "": ""
    },
    {
        "code": "4468",
        "name": "Kienberg",
        "": ""
    },
    {
        "code": "4469",
        "name": "Anwil",
        "": ""
    },
    {
        "code": "4492",
        "name": "Tecknau",
        "": ""
    },
    {
        "code": "4493",
        "name": "Wenslingen",
        "": ""
    },
    {
        "code": "4494",
        "name": "Oltingen",
        "": ""
    },
    {
        "code": "4495",
        "name": "Zeglingen",
        "": ""
    },
    {
        "code": "4496",
        "name": "Kilchberg BL",
        "": ""
    },
    {
        "code": "4497",
        "name": "Rünenberg",
        "": ""
    },
    {
        "code": "4500",
        "name": "Solothurn",
        "": ""
    },
    {
        "code": "4512",
        "name": "Bellach",
        "": ""
    },
    {
        "code": "4513",
        "name": "Langendorf",
        "": ""
    },
    {
        "code": "4514",
        "name": "Lommiswil",
        "": ""
    },
    {
        "code": "4515",
        "name": "Weissenstein b. Solothurn",
        "": ""
    },
    {
        "code": "4515",
        "name": "Oberdorf SO",
        "": ""
    },
    {
        "code": "4522",
        "name": "Rüttenen",
        "": ""
    },
    {
        "code": "4523",
        "name": "Niederwil SO",
        "": ""
    },
    {
        "code": "4524",
        "name": "Balmberg",
        "": ""
    },
    {
        "code": "4524",
        "name": "Oberbalmberg",
        "": ""
    },
    {
        "code": "4524",
        "name": "Günsberg",
        "": ""
    },
    {
        "code": "4525",
        "name": "Balm b. Günsberg",
        "": ""
    },
    {
        "code": "4528",
        "name": "Zuchwil",
        "": ""
    },
    {
        "code": "4532",
        "name": "Feldbrunnen",
        "": ""
    },
    {
        "code": "4533",
        "name": "Riedholz",
        "": ""
    },
    {
        "code": "4534",
        "name": "Flumenthal",
        "": ""
    },
    {
        "code": "4535",
        "name": "Hubersdorf",
        "": ""
    },
    {
        "code": "4535",
        "name": "Kammersrohr",
        "": ""
    },
    {
        "code": "4536",
        "name": "Attiswil",
        "": ""
    },
    {
        "code": "4537",
        "name": "Wiedlisbach",
        "": ""
    },
    {
        "code": "4538",
        "name": "Oberbipp",
        "": ""
    },
    {
        "code": "4539",
        "name": "Rumisberg",
        "": ""
    },
    {
        "code": "4539",
        "name": "Farnern",
        "": ""
    },
    {
        "code": "4542",
        "name": "Luterbach",
        "": ""
    },
    {
        "code": "4543",
        "name": "Deitingen",
        "": ""
    },
    {
        "code": "4552",
        "name": "Derendingen",
        "": ""
    },
    {
        "code": "4553",
        "name": "Subingen",
        "": ""
    },
    {
        "code": "4554",
        "name": "Hüniken",
        "": ""
    },
    {
        "code": "4554",
        "name": "Etziken",
        "": ""
    },
    {
        "code": "4556",
        "name": "Bolken",
        "": ""
    },
    {
        "code": "4556",
        "name": "Burgäschi",
        "": ""
    },
    {
        "code": "4556",
        "name": "Steinhof SO",
        "": ""
    },
    {
        "code": "4556",
        "name": "Aeschi SO",
        "": ""
    },
    {
        "code": "4557",
        "name": "Horriwil",
        "": ""
    },
    {
        "code": "4558",
        "name": "Hersiwil",
        "": ""
    },
    {
        "code": "4558",
        "name": "Heinrichswil",
        "": ""
    },
    {
        "code": "4558",
        "name": "Winistorf",
        "": ""
    },
    {
        "code": "4562",
        "name": "Biberist",
        "": ""
    },
    {
        "code": "4563",
        "name": "Gerlafingen",
        "": ""
    },
    {
        "code": "4564",
        "name": "Zielebach",
        "": ""
    },
    {
        "code": "4564",
        "name": "Obergerlafingen",
        "": ""
    },
    {
        "code": "4565",
        "name": "Recherswil",
        "": ""
    },
    {
        "code": "4566",
        "name": "Halten",
        "": ""
    },
    {
        "code": "4566",
        "name": "Oekingen",
        "": ""
    },
    {
        "code": "4566",
        "name": "Kriegstetten",
        "": ""
    },
    {
        "code": "4571",
        "name": "Ichertswil",
        "": ""
    },
    {
        "code": "4571",
        "name": "Lüterkofen",
        "": ""
    },
    {
        "code": "4573",
        "name": "Lohn-Ammannsegg",
        "": ""
    },
    {
        "code": "4574",
        "name": "Lüsslingen",
        "": ""
    },
    {
        "code": "4574",
        "name": "Nennigkofen",
        "": ""
    },
    {
        "code": "4576",
        "name": "Tscheppach",
        "": ""
    },
    {
        "code": "4577",
        "name": "Hessigkofen",
        "": ""
    },
    {
        "code": "4578",
        "name": "Bibern SO",
        "": ""
    },
    {
        "code": "4579",
        "name": "Gossliwil",
        "": ""
    },
    {
        "code": "4581",
        "name": "Küttigkofen",
        "": ""
    },
    {
        "code": "4582",
        "name": "Brügglen",
        "": ""
    },
    {
        "code": "4583",
        "name": "Aetigkofen",
        "": ""
    },
    {
        "code": "4583",
        "name": "Mühledorf SO",
        "": ""
    },
    {
        "code": "4584",
        "name": "Gächliwil",
        "": ""
    },
    {
        "code": "4584",
        "name": "Lüterswil",
        "": ""
    },
    {
        "code": "4585",
        "name": "Biezwil",
        "": ""
    },
    {
        "code": "4586",
        "name": "Kyburg-Buchegg",
        "": ""
    },
    {
        "code": "4587",
        "name": "Aetingen",
        "": ""
    },
    {
        "code": "4588",
        "name": "Unterramsern",
        "": ""
    },
    {
        "code": "4588",
        "name": "Oberramsern",
        "": ""
    },
    {
        "code": "4588",
        "name": "Brittern",
        "": ""
    },
    {
        "code": "4600",
        "name": "Olten",
        "": ""
    },
    {
        "code": "4612",
        "name": "Wangen b. Olten",
        "": ""
    },
    {
        "code": "4613",
        "name": "Rickenbach SO",
        "": ""
    },
    {
        "code": "4614",
        "name": "Hägendorf",
        "": ""
    },
    {
        "code": "4615",
        "name": "Allerheiligenberg",
        "": ""
    },
    {
        "code": "4616",
        "name": "Kappel SO",
        "": ""
    },
    {
        "code": "4617",
        "name": "Gunzgen",
        "": ""
    },
    {
        "code": "4618",
        "name": "Boningen",
        "": ""
    },
    {
        "code": "4622",
        "name": "Egerkingen",
        "": ""
    },
    {
        "code": "4623",
        "name": "Neuendorf",
        "": ""
    },
    {
        "code": "4624",
        "name": "Härkingen",
        "": ""
    },
    {
        "code": "4625",
        "name": "Oberbuchsiten",
        "": ""
    },
    {
        "code": "4626",
        "name": "Niederbuchsiten",
        "": ""
    },
    {
        "code": "4628",
        "name": "Wolfwil",
        "": ""
    },
    {
        "code": "4629",
        "name": "Fulenbach",
        "": ""
    },
    {
        "code": "4632",
        "name": "Trimbach",
        "": ""
    },
    {
        "code": "4633",
        "name": "Hauenstein",
        "": ""
    },
    {
        "code": "4634",
        "name": "Wisen SO",
        "": ""
    },
    {
        "code": "4652",
        "name": "Winznau",
        "": ""
    },
    {
        "code": "4653",
        "name": "Obergösgen",
        "": ""
    },
    {
        "code": "4654",
        "name": "Lostorf",
        "": ""
    },
    {
        "code": "4655",
        "name": "Rohr b. Olten",
        "": ""
    },
    {
        "code": "4655",
        "name": "Stüsslingen",
        "": ""
    },
    {
        "code": "4656",
        "name": "Starrkirch-Wil",
        "": ""
    },
    {
        "code": "4657",
        "name": "Dulliken",
        "": ""
    },
    {
        "code": "4658",
        "name": "Däniken SO",
        "": ""
    },
    {
        "code": "4663",
        "name": "Aarburg",
        "": ""
    },
    {
        "code": "4665",
        "name": "Oftringen",
        "": ""
    },
    {
        "code": "4702",
        "name": "Oensingen",
        "": ""
    },
    {
        "code": "4703",
        "name": "Kestenholz",
        "": ""
    },
    {
        "code": "4704",
        "name": "Wolfisberg",
        "": ""
    },
    {
        "code": "4704",
        "name": "Niederbipp",
        "": ""
    },
    {
        "code": "4710",
        "name": "Balsthal",
        "": ""
    },
    {
        "code": "4712",
        "name": "Laupersdorf",
        "": ""
    },
    {
        "code": "4713",
        "name": "Matzendorf",
        "": ""
    },
    {
        "code": "4714",
        "name": "Aedermannsdorf",
        "": ""
    },
    {
        "code": "4715",
        "name": "Herbetswil",
        "": ""
    },
    {
        "code": "4716",
        "name": "Gänsbrunnen",
        "": ""
    },
    {
        "code": "4716",
        "name": "Welschenrohr",
        "": ""
    },
    {
        "code": "4717",
        "name": "Mümliswil",
        "": ""
    },
    {
        "code": "4718",
        "name": "Holderbank SO",
        "": ""
    },
    {
        "code": "4719",
        "name": "Ramiswil",
        "": ""
    },
    {
        "code": "4800",
        "name": "Zofingen",
        "": ""
    },
    {
        "code": "4802",
        "name": "Strengelbach",
        "": ""
    },
    {
        "code": "4803",
        "name": "Vordemwald",
        "": ""
    },
    {
        "code": "4805",
        "name": "Brittnau",
        "": ""
    },
    {
        "code": "4806",
        "name": "Wikon",
        "": ""
    },
    {
        "code": "4812",
        "name": "Mühlethal",
        "": ""
    },
    {
        "code": "4813",
        "name": "Uerkheim",
        "": ""
    },
    {
        "code": "4814",
        "name": "Bottenwil",
        "": ""
    },
    {
        "code": "4852",
        "name": "Rothrist",
        "": ""
    },
    {
        "code": "4853",
        "name": "Riken AG",
        "": ""
    },
    {
        "code": "4853",
        "name": "Murgenthal",
        "": ""
    },
    {
        "code": "4856",
        "name": "Glashütten",
        "": ""
    },
    {
        "code": "4900",
        "name": "Langenthal",
        "": ""
    },
    {
        "code": "4911",
        "name": "Schwarzhäusern",
        "": ""
    },
    {
        "code": "4912",
        "name": "Aarwangen",
        "": ""
    },
    {
        "code": "4913",
        "name": "Bannwil",
        "": ""
    },
    {
        "code": "4914",
        "name": "Roggwil BE",
        "": ""
    },
    {
        "code": "4915",
        "name": "St. Urban",
        "": ""
    },
    {
        "code": "4916",
        "name": "Untersteckholz",
        "": ""
    },
    {
        "code": "4917",
        "name": "Busswil b. Melchnau",
        "": ""
    },
    {
        "code": "4917",
        "name": "Melchnau",
        "": ""
    },
    {
        "code": "4919",
        "name": "Reisiswil",
        "": ""
    },
    {
        "code": "4922",
        "name": "Thunstetten",
        "": ""
    },
    {
        "code": "4922",
        "name": "Bützberg",
        "": ""
    },
    {
        "code": "4923",
        "name": "Wynau",
        "": ""
    },
    {
        "code": "4924",
        "name": "Obersteckholz",
        "": ""
    },
    {
        "code": "4932",
        "name": "Gutenburg",
        "": ""
    },
    {
        "code": "4932",
        "name": "Lotzwil",
        "": ""
    },
    {
        "code": "4933",
        "name": "Rütschelen",
        "": ""
    },
    {
        "code": "4934",
        "name": "Madiswil",
        "": ""
    },
    {
        "code": "4935",
        "name": "Leimiswil",
        "": ""
    },
    {
        "code": "4936",
        "name": "Kleindietwil",
        "": ""
    },
    {
        "code": "4937",
        "name": "Ursenbach",
        "": ""
    },
    {
        "code": "4938",
        "name": "Rohrbachgraben",
        "": ""
    },
    {
        "code": "4938",
        "name": "Rohrbach",
        "": ""
    },
    {
        "code": "4942",
        "name": "Walterswil BE",
        "": ""
    },
    {
        "code": "4943",
        "name": "Oeschenbach",
        "": ""
    },
    {
        "code": "4944",
        "name": "Auswil",
        "": ""
    },
    {
        "code": "4950",
        "name": "Huttwil",
        "": ""
    },
    {
        "code": "4952",
        "name": "Eriswil",
        "": ""
    },
    {
        "code": "4953",
        "name": "Schwarzenbach (Huttwil)",
        "": ""
    },
    {
        "code": "4954",
        "name": "Wyssachen",
        "": ""
    },
    {
        "code": "4955",
        "name": "Gondiswil",
        "": ""
    },
    {
        "code": "5000",
        "name": "Aarau",
        "": ""
    },
    {
        "code": "5004",
        "name": "Aarau",
        "": ""
    },
    {
        "code": "5012",
        "name": "Eppenberg",
        "": ""
    },
    {
        "code": "5012",
        "name": "Wöschnau",
        "": ""
    },
    {
        "code": "5012",
        "name": "Schönenwerd",
        "": ""
    },
    {
        "code": "5013",
        "name": "Niedergösgen",
        "": ""
    },
    {
        "code": "5014",
        "name": "Gretzenbach",
        "": ""
    },
    {
        "code": "5015",
        "name": "Erlinsbach SO",
        "": ""
    },
    {
        "code": "5017",
        "name": "Barmelweid",
        "": ""
    },
    {
        "code": "5018",
        "name": "Erlinsbach",
        "": ""
    },
    {
        "code": "5022",
        "name": "Rombach",
        "": ""
    },
    {
        "code": "5023",
        "name": "Biberstein",
        "": ""
    },
    {
        "code": "5024",
        "name": "Küttigen",
        "": ""
    },
    {
        "code": "5025",
        "name": "Asp",
        "": ""
    },
    {
        "code": "5026",
        "name": "Densbüren",
        "": ""
    },
    {
        "code": "5027",
        "name": "Herznach",
        "": ""
    },
    {
        "code": "5028",
        "name": "Ueken",
        "": ""
    },
    {
        "code": "5032",
        "name": "Aarau Rohr",
        "": ""
    },
    {
        "code": "5033",
        "name": "Buchs AG",
        "": ""
    },
    {
        "code": "5034",
        "name": "Suhr",
        "": ""
    },
    {
        "code": "5035",
        "name": "Unterentfelden",
        "": ""
    },
    {
        "code": "5036",
        "name": "Oberentfelden",
        "": ""
    },
    {
        "code": "5037",
        "name": "Muhen",
        "": ""
    },
    {
        "code": "5040",
        "name": "Schöftland",
        "": ""
    },
    {
        "code": "5042",
        "name": "Hirschthal",
        "": ""
    },
    {
        "code": "5043",
        "name": "Holziken",
        "": ""
    },
    {
        "code": "5044",
        "name": "Schlossrued",
        "": ""
    },
    {
        "code": "5046",
        "name": "Schmiedrued",
        "": ""
    },
    {
        "code": "5046",
        "name": "Walde AG",
        "": ""
    },
    {
        "code": "5046",
        "name": "Schmiedrued-Walde",
        "": ""
    },
    {
        "code": "5053",
        "name": "Wittwil",
        "": ""
    },
    {
        "code": "5053",
        "name": "Staffelbach",
        "": ""
    },
    {
        "code": "5054",
        "name": "Kirchleerau",
        "": ""
    },
    {
        "code": "5054",
        "name": "Moosleerau",
        "": ""
    },
    {
        "code": "5056",
        "name": "Attelwil",
        "": ""
    },
    {
        "code": "5057",
        "name": "Reitnau",
        "": ""
    },
    {
        "code": "5058",
        "name": "Wiliberg",
        "": ""
    },
    {
        "code": "5062",
        "name": "Oberhof",
        "": ""
    },
    {
        "code": "5063",
        "name": "Wölflinswil",
        "": ""
    },
    {
        "code": "5064",
        "name": "Wittnau",
        "": ""
    },
    {
        "code": "5070",
        "name": "Frick",
        "": ""
    },
    {
        "code": "5072",
        "name": "Oeschgen",
        "": ""
    },
    {
        "code": "5073",
        "name": "Gipf-Oberfrick",
        "": ""
    },
    {
        "code": "5074",
        "name": "Eiken",
        "": ""
    },
    {
        "code": "5075",
        "name": "Hornussen",
        "": ""
    },
    {
        "code": "5076",
        "name": "Bözen",
        "": ""
    },
    {
        "code": "5077",
        "name": "Elfingen",
        "": ""
    },
    {
        "code": "5078",
        "name": "Effingen",
        "": ""
    },
    {
        "code": "5079",
        "name": "Zeihen",
        "": ""
    },
    {
        "code": "5080",
        "name": "Laufenburg",
        "": ""
    },
    {
        "code": "5082",
        "name": "Kaisten",
        "": ""
    },
    {
        "code": "5083",
        "name": "Ittenthal",
        "": ""
    },
    {
        "code": "5084",
        "name": "Rheinsulz",
        "": ""
    },
    {
        "code": "5085",
        "name": "Sulz AG",
        "": ""
    },
    {
        "code": "5102",
        "name": "Rupperswil",
        "": ""
    },
    {
        "code": "5103",
        "name": "Wildegg",
        "": ""
    },
    {
        "code": "5103",
        "name": "Möriken AG",
        "": ""
    },
    {
        "code": "5105",
        "name": "Auenstein",
        "": ""
    },
    {
        "code": "5106",
        "name": "Veltheim AG",
        "": ""
    },
    {
        "code": "5107",
        "name": "Schinznach Dorf",
        "": ""
    },
    {
        "code": "5108",
        "name": "Oberflachs",
        "": ""
    },
    {
        "code": "5112",
        "name": "Thalheim AG",
        "": ""
    },
    {
        "code": "5113",
        "name": "Holderbank AG",
        "": ""
    },
    {
        "code": "5116",
        "name": "Schinznach Bad",
        "": ""
    },
    {
        "code": "5200",
        "name": "Brugg AG",
        "": ""
    },
    {
        "code": "5210",
        "name": "Windisch",
        "": ""
    },
    {
        "code": "5212",
        "name": "Hausen AG",
        "": ""
    },
    {
        "code": "5213",
        "name": "Villnachern",
        "": ""
    },
    {
        "code": "5222",
        "name": "Umiken",
        "": ""
    },
    {
        "code": "5223",
        "name": "Riniken",
        "": ""
    },
    {
        "code": "5224",
        "name": "Gallenkirch",
        "": ""
    },
    {
        "code": "5224",
        "name": "Linn",
        "": ""
    },
    {
        "code": "5224",
        "name": "Unterbözberg",
        "": ""
    },
    {
        "code": "5225",
        "name": "Oberbözberg",
        "": ""
    },
    {
        "code": "5233",
        "name": "Stilli",
        "": ""
    },
    {
        "code": "5234",
        "name": "Villigen",
        "": ""
    },
    {
        "code": "5235",
        "name": "Rüfenach AG",
        "": ""
    },
    {
        "code": "5236",
        "name": "Remigen",
        "": ""
    },
    {
        "code": "5237",
        "name": "Mönthal",
        "": ""
    },
    {
        "code": "5242",
        "name": "Birr",
        "": ""
    },
    {
        "code": "5242",
        "name": "Lupfig",
        "": ""
    },
    {
        "code": "5243",
        "name": "Mülligen",
        "": ""
    },
    {
        "code": "5244",
        "name": "Birrhard",
        "": ""
    },
    {
        "code": "5245",
        "name": "Habsburg",
        "": ""
    },
    {
        "code": "5246",
        "name": "Scherz",
        "": ""
    },
    {
        "code": "5272",
        "name": "Gansingen",
        "": ""
    },
    {
        "code": "5273",
        "name": "Oberhofen AG",
        "": ""
    },
    {
        "code": "5274",
        "name": "Mettau",
        "": ""
    },
    {
        "code": "5275",
        "name": "Etzgen",
        "": ""
    },
    {
        "code": "5276",
        "name": "Wil AG",
        "": ""
    },
    {
        "code": "5277",
        "name": "Hottwil",
        "": ""
    },
    {
        "code": "5300",
        "name": "Turgi",
        "": ""
    },
    {
        "code": "5301",
        "name": "Siggenthal Station",
        "": ""
    },
    {
        "code": "5303",
        "name": "Würenlingen",
        "": ""
    },
    {
        "code": "5304",
        "name": "Endingen",
        "": ""
    },
    {
        "code": "5305",
        "name": "Unterendingen",
        "": ""
    },
    {
        "code": "5306",
        "name": "Tegerfelden",
        "": ""
    },
    {
        "code": "5312",
        "name": "Döttingen",
        "": ""
    },
    {
        "code": "5313",
        "name": "Klingnau",
        "": ""
    },
    {
        "code": "5314",
        "name": "Kleindöttingen",
        "": ""
    },
    {
        "code": "5315",
        "name": "Böttstein",
        "": ""
    },
    {
        "code": "5316",
        "name": "Felsenau AG",
        "": ""
    },
    {
        "code": "5316",
        "name": "Leuggern",
        "": ""
    },
    {
        "code": "5317",
        "name": "Hettenschwil",
        "": ""
    },
    {
        "code": "5318",
        "name": "Mandach",
        "": ""
    },
    {
        "code": "5322",
        "name": "Koblenz",
        "": ""
    },
    {
        "code": "5323",
        "name": "Rietheim",
        "": ""
    },
    {
        "code": "5324",
        "name": "Full-Reuenthal",
        "": ""
    },
    {
        "code": "5325",
        "name": "Leibstadt",
        "": ""
    },
    {
        "code": "5326",
        "name": "Schwaderloch",
        "": ""
    },
    {
        "code": "5330",
        "name": "Bad Zurzach",
        "": ""
    },
    {
        "code": "5332",
        "name": "Rekingen AG",
        "": ""
    },
    {
        "code": "5333",
        "name": "Baldingen",
        "": ""
    },
    {
        "code": "5334",
        "name": "Böbikon",
        "": ""
    },
    {
        "code": "5400",
        "name": "Baden",
        "": ""
    },
    {
        "code": "5404",
        "name": "Baden",
        "": ""
    },
    {
        "code": "5405",
        "name": "Dättwil AG",
        "": ""
    },
    {
        "code": "5406",
        "name": "Rütihof",
        "": ""
    },
    {
        "code": "5408",
        "name": "Ennetbaden",
        "": ""
    },
    {
        "code": "5412",
        "name": "Gebenstorf",
        "": ""
    },
    {
        "code": "5413",
        "name": "Birmenstorf AG",
        "": ""
    },
    {
        "code": "5415",
        "name": "Hertenstein AG",
        "": ""
    },
    {
        "code": "5415",
        "name": "Rieden AG",
        "": ""
    },
    {
        "code": "5415",
        "name": "Nussbaumen AG",
        "": ""
    },
    {
        "code": "5416",
        "name": "Kirchdorf AG",
        "": ""
    },
    {
        "code": "5417",
        "name": "Untersiggenthal",
        "": ""
    },
    {
        "code": "5420",
        "name": "Ehrendingen",
        "": ""
    },
    {
        "code": "5423",
        "name": "Freienwil",
        "": ""
    },
    {
        "code": "5425",
        "name": "Schneisingen",
        "": ""
    },
    {
        "code": "5426",
        "name": "Lengnau AG",
        "": ""
    },
    {
        "code": "5430",
        "name": "Wettingen",
        "": ""
    },
    {
        "code": "5432",
        "name": "Neuenhof",
        "": ""
    },
    {
        "code": "5436",
        "name": "Würenlos",
        "": ""
    },
    {
        "code": "5442",
        "name": "Fislisbach",
        "": ""
    },
    {
        "code": "5443",
        "name": "Niederrohrdorf",
        "": ""
    },
    {
        "code": "5444",
        "name": "Künten",
        "": ""
    },
    {
        "code": "5445",
        "name": "Eggenwil",
        "": ""
    },
    {
        "code": "5452",
        "name": "Oberrohrdorf",
        "": ""
    },
    {
        "code": "5453",
        "name": "Remetschwil",
        "": ""
    },
    {
        "code": "5454",
        "name": "Bellikon",
        "": ""
    },
    {
        "code": "5462",
        "name": "Siglistorf",
        "": ""
    },
    {
        "code": "5463",
        "name": "Wislikofen",
        "": ""
    },
    {
        "code": "5464",
        "name": "Rümikon AG",
        "": ""
    },
    {
        "code": "5465",
        "name": "Mellikon",
        "": ""
    },
    {
        "code": "5466",
        "name": "Kaiserstuhl AG",
        "": ""
    },
    {
        "code": "5467",
        "name": "Fisibach",
        "": ""
    },
    {
        "code": "5502",
        "name": "Hunzenschwil",
        "": ""
    },
    {
        "code": "5503",
        "name": "Schafisheim",
        "": ""
    },
    {
        "code": "5504",
        "name": "Othmarsingen",
        "": ""
    },
    {
        "code": "5505",
        "name": "Brunegg",
        "": ""
    },
    {
        "code": "5506",
        "name": "Mägenwil",
        "": ""
    },
    {
        "code": "5507",
        "name": "Mellingen",
        "": ""
    },
    {
        "code": "5512",
        "name": "Wohlenschwil",
        "": ""
    },
    {
        "code": "5522",
        "name": "Tägerig",
        "": ""
    },
    {
        "code": "5524",
        "name": "Nesselnbach",
        "": ""
    },
    {
        "code": "5524",
        "name": "Niederwil AG",
        "": ""
    },
    {
        "code": "5525",
        "name": "Fischbach-Göslikon",
        "": ""
    },
    {
        "code": "5600",
        "name": "Lenzburg",
        "": ""
    },
    {
        "code": "5600",
        "name": "Ammerswil AG",
        "": ""
    },
    {
        "code": "5603",
        "name": "Staufen",
        "": ""
    },
    {
        "code": "5604",
        "name": "Hendschiken",
        "": ""
    },
    {
        "code": "5605",
        "name": "Dottikon",
        "": ""
    },
    {
        "code": "5606",
        "name": "Dintikon",
        "": ""
    },
    {
        "code": "5607",
        "name": "Hägglingen",
        "": ""
    },
    {
        "code": "5608",
        "name": "Stetten AG",
        "": ""
    },
    {
        "code": "5610",
        "name": "Wohlen AG",
        "": ""
    },
    {
        "code": "5611",
        "name": "Anglikon",
        "": ""
    },
    {
        "code": "5612",
        "name": "Villmergen",
        "": ""
    },
    {
        "code": "5613",
        "name": "Hilfikon",
        "": ""
    },
    {
        "code": "5614",
        "name": "Sarmenstorf",
        "": ""
    },
    {
        "code": "5615",
        "name": "Fahrwangen",
        "": ""
    },
    {
        "code": "5616",
        "name": "Meisterschwanden",
        "": ""
    },
    {
        "code": "5617",
        "name": "Tennwil",
        "": ""
    },
    {
        "code": "5618",
        "name": "Bettwil",
        "": ""
    },
    {
        "code": "5619",
        "name": "Büttikon AG",
        "": ""
    },
    {
        "code": "5619",
        "name": "Uezwil",
        "": ""
    },
    {
        "code": "5620",
        "name": "Bremgarten AG",
        "": ""
    },
    {
        "code": "5621",
        "name": "Zufikon",
        "": ""
    },
    {
        "code": "5622",
        "name": "Waltenschwil",
        "": ""
    },
    {
        "code": "5623",
        "name": "Boswil",
        "": ""
    },
    {
        "code": "5624",
        "name": "Waldhäusern AG",
        "": ""
    },
    {
        "code": "5624",
        "name": "Bünzen",
        "": ""
    },
    {
        "code": "5625",
        "name": "Kallern",
        "": ""
    },
    {
        "code": "5626",
        "name": "Hermetschwil-Staffeln",
        "": ""
    },
    {
        "code": "5627",
        "name": "Besenbüren",
        "": ""
    },
    {
        "code": "5628",
        "name": "Aristau",
        "": ""
    },
    {
        "code": "5630",
        "name": "Muri AG",
        "": ""
    },
    {
        "code": "5632",
        "name": "Buttwil",
        "": ""
    },
    {
        "code": "5634",
        "name": "Merenschwand",
        "": ""
    },
    {
        "code": "5636",
        "name": "Benzenschwil",
        "": ""
    },
    {
        "code": "5637",
        "name": "Geltwil",
        "": ""
    },
    {
        "code": "5637",
        "name": "Beinwil (Freiamt)",
        "": ""
    },
    {
        "code": "5642",
        "name": "Mühlau",
        "": ""
    },
    {
        "code": "5643",
        "name": "Alikon",
        "": ""
    },
    {
        "code": "5643",
        "name": "Meienberg",
        "": ""
    },
    {
        "code": "5643",
        "name": "Sins",
        "": ""
    },
    {
        "code": "5644",
        "name": "Auw",
        "": ""
    },
    {
        "code": "5645",
        "name": "Aettenschwil",
        "": ""
    },
    {
        "code": "5645",
        "name": "Fenkrieden",
        "": ""
    },
    {
        "code": "5646",
        "name": "Abtwil AG",
        "": ""
    },
    {
        "code": "5647",
        "name": "Oberrüti",
        "": ""
    },
    {
        "code": "5702",
        "name": "Niederlenz",
        "": ""
    },
    {
        "code": "5703",
        "name": "Seon",
        "": ""
    },
    {
        "code": "5704",
        "name": "Egliswil",
        "": ""
    },
    {
        "code": "5705",
        "name": "Hallwil",
        "": ""
    },
    {
        "code": "5706",
        "name": "Boniswil",
        "": ""
    },
    {
        "code": "5707",
        "name": "Seengen",
        "": ""
    },
    {
        "code": "5708",
        "name": "Birrwil",
        "": ""
    },
    {
        "code": "5712",
        "name": "Beinwil am See",
        "": ""
    },
    {
        "code": "5722",
        "name": "Gränichen",
        "": ""
    },
    {
        "code": "5723",
        "name": "Teufenthal AG",
        "": ""
    },
    {
        "code": "5724",
        "name": "Dürrenäsch",
        "": ""
    },
    {
        "code": "5725",
        "name": "Leutwil",
        "": ""
    },
    {
        "code": "5726",
        "name": "Unterkulm",
        "": ""
    },
    {
        "code": "5727",
        "name": "Oberkulm",
        "": ""
    },
    {
        "code": "5728",
        "name": "Gontenschwil",
        "": ""
    },
    {
        "code": "5732",
        "name": "Zetzwil",
        "": ""
    },
    {
        "code": "5733",
        "name": "Leimbach AG",
        "": ""
    },
    {
        "code": "5734",
        "name": "Reinach AG",
        "": ""
    },
    {
        "code": "5735",
        "name": "Pfeffikon LU",
        "": ""
    },
    {
        "code": "5736",
        "name": "Burg AG",
        "": ""
    },
    {
        "code": "5737",
        "name": "Menziken",
        "": ""
    },
    {
        "code": "5742",
        "name": "Kölliken",
        "": ""
    },
    {
        "code": "5745",
        "name": "Safenwil",
        "": ""
    },
    {
        "code": "5746",
        "name": "Walterswil SO",
        "": ""
    },
    {
        "code": "6000",
        "name": "Luzern",
        "": ""
    },
    {
        "code": "6003",
        "name": "Luzern",
        "": ""
    },
    {
        "code": "6004",
        "name": "Luzern",
        "": ""
    },
    {
        "code": "6005",
        "name": "Luzern",
        "": ""
    },
    {
        "code": "6005",
        "name": "St. Niklausen LU",
        "": ""
    },
    {
        "code": "6006",
        "name": "Luzern",
        "": ""
    },
    {
        "code": "6010",
        "name": "Kriens",
        "": ""
    },
    {
        "code": "6010",
        "name": "Pilatus Kulm",
        "": ""
    },
    {
        "code": "6012",
        "name": "Obernau",
        "": ""
    },
    {
        "code": "6013",
        "name": "Eigenthal",
        "": ""
    },
    {
        "code": "6014",
        "name": "Luzern",
        "": ""
    },
    {
        "code": "6015",
        "name": "Luzern",
        "": ""
    },
    {
        "code": "6016",
        "name": "Hellbühl",
        "": ""
    },
    {
        "code": "6017",
        "name": "Ruswil",
        "": ""
    },
    {
        "code": "6018",
        "name": "Buttisholz",
        "": ""
    },
    {
        "code": "6019",
        "name": "Sigigen",
        "": ""
    },
    {
        "code": "6020",
        "name": "Emmenbrücke",
        "": ""
    },
    {
        "code": "6022",
        "name": "Grosswangen",
        "": ""
    },
    {
        "code": "6023",
        "name": "Rothenburg",
        "": ""
    },
    {
        "code": "6024",
        "name": "Hildisrieden",
        "": ""
    },
    {
        "code": "6025",
        "name": "Neudorf",
        "": ""
    },
    {
        "code": "6026",
        "name": "Rain",
        "": ""
    },
    {
        "code": "6027",
        "name": "Römerswil LU",
        "": ""
    },
    {
        "code": "6028",
        "name": "Herlisberg",
        "": ""
    },
    {
        "code": "6030",
        "name": "Ebikon",
        "": ""
    },
    {
        "code": "6032",
        "name": "Emmen",
        "": ""
    },
    {
        "code": "6033",
        "name": "Buchrain",
        "": ""
    },
    {
        "code": "6034",
        "name": "Inwil",
        "": ""
    },
    {
        "code": "6035",
        "name": "Perlen",
        "": ""
    },
    {
        "code": "6036",
        "name": "Dierikon",
        "": ""
    },
    {
        "code": "6037",
        "name": "Root",
        "": ""
    },
    {
        "code": "6038",
        "name": "Gisikon",
        "": ""
    },
    {
        "code": "6038",
        "name": "Honau",
        "": ""
    },
    {
        "code": "6039",
        "name": "Root Längenbold",
        "": ""
    },
    {
        "code": "6042",
        "name": "Dietwil",
        "": ""
    },
    {
        "code": "6043",
        "name": "Adligenswil",
        "": ""
    },
    {
        "code": "6044",
        "name": "Udligenswil",
        "": ""
    },
    {
        "code": "6045",
        "name": "Meggen",
        "": ""
    },
    {
        "code": "6047",
        "name": "Kastanienbaum",
        "": ""
    },
    {
        "code": "6048",
        "name": "Horw",
        "": ""
    },
    {
        "code": "6052",
        "name": "Hergiswil NW",
        "": ""
    },
    {
        "code": "6053",
        "name": "Alpnachstad",
        "": ""
    },
    {
        "code": "6055",
        "name": "Alpnach Dorf",
        "": ""
    },
    {
        "code": "6056",
        "name": "Kägiswil",
        "": ""
    },
    {
        "code": "6060",
        "name": "Sarnen",
        "": ""
    },
    {
        "code": "6060",
        "name": "Ramersberg",
        "": ""
    },
    {
        "code": "6062",
        "name": "Wilen (Sarnen)",
        "": ""
    },
    {
        "code": "6063",
        "name": "Stalden (Sarnen)",
        "": ""
    },
    {
        "code": "6064",
        "name": "Kerns",
        "": ""
    },
    {
        "code": "6066",
        "name": "St. Niklausen OW",
        "": ""
    },
    {
        "code": "6067",
        "name": "Melchtal",
        "": ""
    },
    {
        "code": "6068",
        "name": "Melchsee-Frutt",
        "": ""
    },
    {
        "code": "6072",
        "name": "Sachseln",
        "": ""
    },
    {
        "code": "6073",
        "name": "Flüeli-Ranft",
        "": ""
    },
    {
        "code": "6074",
        "name": "Giswil",
        "": ""
    },
    {
        "code": "6078",
        "name": "Bürglen OW",
        "": ""
    },
    {
        "code": "6078",
        "name": "Lungern",
        "": ""
    },
    {
        "code": "6083",
        "name": "Hasliberg Hohfluh",
        "": ""
    },
    {
        "code": "6084",
        "name": "Hasliberg Wasserwendi",
        "": ""
    },
    {
        "code": "6085",
        "name": "Hasliberg Goldern",
        "": ""
    },
    {
        "code": "6086",
        "name": "Hasliberg Reuti",
        "": ""
    },
    {
        "code": "6102",
        "name": "Malters",
        "": ""
    },
    {
        "code": "6103",
        "name": "Schwarzenberg LU",
        "": ""
    },
    {
        "code": "6105",
        "name": "Schachen LU",
        "": ""
    },
    {
        "code": "6106",
        "name": "Werthenstein",
        "": ""
    },
    {
        "code": "6110",
        "name": "Fontannen b. Wolhusen",
        "": ""
    },
    {
        "code": "6110",
        "name": "Wolhusen",
        "": ""
    },
    {
        "code": "6112",
        "name": "Doppleschwand",
        "": ""
    },
    {
        "code": "6113",
        "name": "Romoos",
        "": ""
    },
    {
        "code": "6114",
        "name": "Steinhuserberg",
        "": ""
    },
    {
        "code": "6122",
        "name": "Menznau",
        "": ""
    },
    {
        "code": "6123",
        "name": "Geiss",
        "": ""
    },
    {
        "code": "6125",
        "name": "Menzberg",
        "": ""
    },
    {
        "code": "6126",
        "name": "Daiwil",
        "": ""
    },
    {
        "code": "6130",
        "name": "Willisau",
        "": ""
    },
    {
        "code": "6132",
        "name": "Rohrmatt",
        "": ""
    },
    {
        "code": "6133",
        "name": "Hergiswil b. Willisau",
        "": ""
    },
    {
        "code": "6142",
        "name": "Gettnau",
        "": ""
    },
    {
        "code": "6143",
        "name": "Ohmstal",
        "": ""
    },
    {
        "code": "6144",
        "name": "Zell LU",
        "": ""
    },
    {
        "code": "6145",
        "name": "Fischbach LU",
        "": ""
    },
    {
        "code": "6146",
        "name": "Grossdietwil",
        "": ""
    },
    {
        "code": "6147",
        "name": "Altbüron",
        "": ""
    },
    {
        "code": "6152",
        "name": "Hüswil",
        "": ""
    },
    {
        "code": "6153",
        "name": "Ufhusen",
        "": ""
    },
    {
        "code": "6154",
        "name": "Hofstatt",
        "": ""
    },
    {
        "code": "6156",
        "name": "Luthern Bad",
        "": ""
    },
    {
        "code": "6156",
        "name": "Luthern",
        "": ""
    },
    {
        "code": "6162",
        "name": "Rengg",
        "": ""
    },
    {
        "code": "6162",
        "name": "Finsterwald b. Entlebuch",
        "": ""
    },
    {
        "code": "6162",
        "name": "Entlebuch",
        "": ""
    },
    {
        "code": "6163",
        "name": "Ebnet",
        "": ""
    },
    {
        "code": "6166",
        "name": "Hasle LU",
        "": ""
    },
    {
        "code": "6167",
        "name": "Bramboden",
        "": ""
    },
    {
        "code": "6170",
        "name": "Schüpfheim",
        "": ""
    },
    {
        "code": "6173",
        "name": "Flühli LU",
        "": ""
    },
    {
        "code": "6174",
        "name": "Sörenberg",
        "": ""
    },
    {
        "code": "6182",
        "name": "Escholzmatt",
        "": ""
    },
    {
        "code": "6192",
        "name": "Wiggen",
        "": ""
    },
    {
        "code": "6196",
        "name": "Marbach LU",
        "": ""
    },
    {
        "code": "6197",
        "name": "Schangnau",
        "": ""
    },
    {
        "code": "6203",
        "name": "Sempach Station",
        "": ""
    },
    {
        "code": "6204",
        "name": "Sempach",
        "": ""
    },
    {
        "code": "6205",
        "name": "Eich",
        "": ""
    },
    {
        "code": "6206",
        "name": "Neuenkirch",
        "": ""
    },
    {
        "code": "6207",
        "name": "Nottwil",
        "": ""
    },
    {
        "code": "6208",
        "name": "Oberkirch LU",
        "": ""
    },
    {
        "code": "6210",
        "name": "Sursee",
        "": ""
    },
    {
        "code": "6211",
        "name": "Buchs LU",
        "": ""
    },
    {
        "code": "6212",
        "name": "Kaltbach",
        "": ""
    },
    {
        "code": "6212",
        "name": "St. Erhard",
        "": ""
    },
    {
        "code": "6213",
        "name": "Knutwil",
        "": ""
    },
    {
        "code": "6214",
        "name": "Schenkon",
        "": ""
    },
    {
        "code": "6215",
        "name": "Schwarzenbach Beromünster",
        "": ""
    },
    {
        "code": "6215",
        "name": "Beromünster",
        "": ""
    },
    {
        "code": "6216",
        "name": "Mauensee",
        "": ""
    },
    {
        "code": "6217",
        "name": "Kottwil",
        "": ""
    },
    {
        "code": "6218",
        "name": "Ettiswil",
        "": ""
    },
    {
        "code": "6221",
        "name": "Rickenbach LU",
        "": ""
    },
    {
        "code": "6222",
        "name": "Gunzwil",
        "": ""
    },
    {
        "code": "6231",
        "name": "Schlierbach",
        "": ""
    },
    {
        "code": "6232",
        "name": "Geuensee",
        "": ""
    },
    {
        "code": "6233",
        "name": "Büron",
        "": ""
    },
    {
        "code": "6234",
        "name": "Kulmerau",
        "": ""
    },
    {
        "code": "6234",
        "name": "Triengen",
        "": ""
    },
    {
        "code": "6235",
        "name": "Winikon",
        "": ""
    },
    {
        "code": "6236",
        "name": "Wilihof",
        "": ""
    },
    {
        "code": "6242",
        "name": "Wauwil",
        "": ""
    },
    {
        "code": "6243",
        "name": "Egolzwil",
        "": ""
    },
    {
        "code": "6244",
        "name": "Nebikon",
        "": ""
    },
    {
        "code": "6245",
        "name": "Ebersecken",
        "": ""
    },
    {
        "code": "6246",
        "name": "Altishofen",
        "": ""
    },
    {
        "code": "6247",
        "name": "Schötz",
        "": ""
    },
    {
        "code": "6248",
        "name": "Alberswil",
        "": ""
    },
    {
        "code": "6252",
        "name": "Dagmersellen",
        "": ""
    },
    {
        "code": "6253",
        "name": "Uffikon",
        "": ""
    },
    {
        "code": "6260",
        "name": "Reidermoos",
        "": ""
    },
    {
        "code": "6260",
        "name": "Hintermoos",
        "": ""
    },
    {
        "code": "6260",
        "name": "Mehlsecken",
        "": ""
    },
    {
        "code": "6260",
        "name": "Reiden",
        "": ""
    },
    {
        "code": "6262",
        "name": "Langnau b. Reiden",
        "": ""
    },
    {
        "code": "6263",
        "name": "Richenthal",
        "": ""
    },
    {
        "code": "6264",
        "name": "Pfaffnau",
        "": ""
    },
    {
        "code": "6265",
        "name": "Roggliswil",
        "": ""
    },
    {
        "code": "6274",
        "name": "Eschenbach LU",
        "": ""
    },
    {
        "code": "6275",
        "name": "Ballwil",
        "": ""
    },
    {
        "code": "6276",
        "name": "Hohenrain",
        "": ""
    },
    {
        "code": "6277",
        "name": "Kleinwangen",
        "": ""
    },
    {
        "code": "6277",
        "name": "Lieli LU",
        "": ""
    },
    {
        "code": "6280",
        "name": "Hochdorf",
        "": ""
    },
    {
        "code": "6280",
        "name": "Urswil",
        "": ""
    },
    {
        "code": "6283",
        "name": "Baldegg",
        "": ""
    },
    {
        "code": "6284",
        "name": "Sulz LU",
        "": ""
    },
    {
        "code": "6284",
        "name": "Gelfingen",
        "": ""
    },
    {
        "code": "6285",
        "name": "Retschwil",
        "": ""
    },
    {
        "code": "6285",
        "name": "Hitzkirch",
        "": ""
    },
    {
        "code": "6286",
        "name": "Altwis",
        "": ""
    },
    {
        "code": "6287",
        "name": "Aesch LU",
        "": ""
    },
    {
        "code": "6288",
        "name": "Schongau",
        "": ""
    },
    {
        "code": "6289",
        "name": "Müswangen",
        "": ""
    },
    {
        "code": "6289",
        "name": "Hämikon",
        "": ""
    },
    {
        "code": "6294",
        "name": "Ermensee",
        "": ""
    },
    {
        "code": "6295",
        "name": "Mosen",
        "": ""
    },
    {
        "code": "6300",
        "name": "Zug",
        "": ""
    },
    {
        "code": "6300",
        "name": "Zugerberg",
        "": ""
    },
    {
        "code": "6312",
        "name": "Steinhausen",
        "": ""
    },
    {
        "code": "6313",
        "name": "Edlibach",
        "": ""
    },
    {
        "code": "6313",
        "name": "Finstersee",
        "": ""
    },
    {
        "code": "6313",
        "name": "Menzingen",
        "": ""
    },
    {
        "code": "6314",
        "name": "Neuägeri",
        "": ""
    },
    {
        "code": "6314",
        "name": "Unterägeri",
        "": ""
    },
    {
        "code": "6315",
        "name": "Morgarten",
        "": ""
    },
    {
        "code": "6315",
        "name": "Alosen",
        "": ""
    },
    {
        "code": "6315",
        "name": "Oberägeri",
        "": ""
    },
    {
        "code": "6317",
        "name": "Oberwil b. Zug",
        "": ""
    },
    {
        "code": "6318",
        "name": "Walchwil",
        "": ""
    },
    {
        "code": "6319",
        "name": "Allenwinden",
        "": ""
    },
    {
        "code": "6330",
        "name": "Cham",
        "": ""
    },
    {
        "code": "6331",
        "name": "Hünenberg",
        "": ""
    },
    {
        "code": "6332",
        "name": "Hagendorn",
        "": ""
    },
    {
        "code": "6333",
        "name": "Hünenberg See",
        "": ""
    },
    {
        "code": "6340",
        "name": "Baar",
        "": ""
    },
    {
        "code": "6340",
        "name": "Sihlbrugg",
        "": ""
    },
    {
        "code": "6343",
        "name": "Buonas",
        "": ""
    },
    {
        "code": "6343",
        "name": "Risch",
        "": ""
    },
    {
        "code": "6343",
        "name": "Holzhäusern ZG",
        "": ""
    },
    {
        "code": "6343",
        "name": "Rotkreuz",
        "": ""
    },
    {
        "code": "6344",
        "name": "Meierskappel",
        "": ""
    },
    {
        "code": "6345",
        "name": "Neuheim",
        "": ""
    },
    {
        "code": "6353",
        "name": "Weggis",
        "": ""
    },
    {
        "code": "6354",
        "name": "Vitznau",
        "": ""
    },
    {
        "code": "6356",
        "name": "Rigi Kaltbad",
        "": ""
    },
    {
        "code": "6362",
        "name": "Stansstad",
        "": ""
    },
    {
        "code": "6363",
        "name": "Obbürgen",
        "": ""
    },
    {
        "code": "6363",
        "name": "Bürgenstock",
        "": ""
    },
    {
        "code": "6363",
        "name": "Fürigen",
        "": ""
    },
    {
        "code": "6365",
        "name": "Kehrsiten",
        "": ""
    },
    {
        "code": "6370",
        "name": "Stans",
        "": ""
    },
    {
        "code": "6370",
        "name": "Oberdorf NW",
        "": ""
    },
    {
        "code": "6372",
        "name": "Ennetmoos",
        "": ""
    },
    {
        "code": "6373",
        "name": "Ennetbürgen",
        "": ""
    },
    {
        "code": "6374",
        "name": "Buochs",
        "": ""
    },
    {
        "code": "6375",
        "name": "Beckenried",
        "": ""
    },
    {
        "code": "6376",
        "name": "Emmetten",
        "": ""
    },
    {
        "code": "6377",
        "name": "Seelisberg",
        "": ""
    },
    {
        "code": "6382",
        "name": "Büren NW",
        "": ""
    },
    {
        "code": "6383",
        "name": "Niederrickenbach",
        "": ""
    },
    {
        "code": "6383",
        "name": "Wiesenberg",
        "": ""
    },
    {
        "code": "6383",
        "name": "Wirzweli",
        "": ""
    },
    {
        "code": "6383",
        "name": "Dallenwil",
        "": ""
    },
    {
        "code": "6386",
        "name": "Wolfenschiessen",
        "": ""
    },
    {
        "code": "6387",
        "name": "Oberrickenbach",
        "": ""
    },
    {
        "code": "6388",
        "name": "Grafenort",
        "": ""
    },
    {
        "code": "6390",
        "name": "Engelberg",
        "": ""
    },
    {
        "code": "6402",
        "name": "Merlischachen",
        "": ""
    },
    {
        "code": "6403",
        "name": "Küssnacht am Rigi",
        "": ""
    },
    {
        "code": "6404",
        "name": "Greppen",
        "": ""
    },
    {
        "code": "6405",
        "name": "Immensee",
        "": ""
    },
    {
        "code": "6410",
        "name": "Rigi Klösterli",
        "": ""
    },
    {
        "code": "6410",
        "name": "Rigi Staffel",
        "": ""
    },
    {
        "code": "6410",
        "name": "Rigi Kulm",
        "": ""
    },
    {
        "code": "6410",
        "name": "Rigi Scheidegg",
        "": ""
    },
    {
        "code": "6410",
        "name": "Goldau",
        "": ""
    },
    {
        "code": "6414",
        "name": "Oberarth",
        "": ""
    },
    {
        "code": "6415",
        "name": "Arth",
        "": ""
    },
    {
        "code": "6416",
        "name": "Steinerberg",
        "": ""
    },
    {
        "code": "6417",
        "name": "Sattel",
        "": ""
    },
    {
        "code": "6418",
        "name": "Rothenthurm",
        "": ""
    },
    {
        "code": "6422",
        "name": "Steinen",
        "": ""
    },
    {
        "code": "6423",
        "name": "Seewen SZ",
        "": ""
    },
    {
        "code": "6424",
        "name": "Lauerz",
        "": ""
    },
    {
        "code": "6430",
        "name": "Schwyz",
        "": ""
    },
    {
        "code": "6432",
        "name": "Rickenbach b. Schwyz",
        "": ""
    },
    {
        "code": "6433",
        "name": "Stoos SZ",
        "": ""
    },
    {
        "code": "6434",
        "name": "Illgau",
        "": ""
    },
    {
        "code": "6436",
        "name": "Ried (Muotathal)",
        "": ""
    },
    {
        "code": "6436",
        "name": "Bisisthal",
        "": ""
    },
    {
        "code": "6436",
        "name": "Muotathal",
        "": ""
    },
    {
        "code": "6438",
        "name": "Ibach",
        "": ""
    },
    {
        "code": "6440",
        "name": "Brunnen",
        "": ""
    },
    {
        "code": "6441",
        "name": "Rütli",
        "": ""
    },
    {
        "code": "6442",
        "name": "Gersau",
        "": ""
    },
    {
        "code": "6443",
        "name": "Morschach",
        "": ""
    },
    {
        "code": "6452",
        "name": "Riemenstalden",
        "": ""
    },
    {
        "code": "6452",
        "name": "Sisikon",
        "": ""
    },
    {
        "code": "6454",
        "name": "Flüelen",
        "": ""
    },
    {
        "code": "6460",
        "name": "Altdorf UR",
        "": ""
    },
    {
        "code": "6461",
        "name": "Isenthal",
        "": ""
    },
    {
        "code": "6462",
        "name": "Seedorf UR",
        "": ""
    },
    {
        "code": "6463",
        "name": "Bürglen UR",
        "": ""
    },
    {
        "code": "6464",
        "name": "Spiringen",
        "": ""
    },
    {
        "code": "6465",
        "name": "Unterschächen",
        "": ""
    },
    {
        "code": "6466",
        "name": "Bauen",
        "": ""
    },
    {
        "code": "6467",
        "name": "Schattdorf",
        "": ""
    },
    {
        "code": "6468",
        "name": "Attinghausen",
        "": ""
    },
    {
        "code": "6469",
        "name": "Haldi b. Schattdorf",
        "": ""
    },
    {
        "code": "6472",
        "name": "Erstfeld",
        "": ""
    },
    {
        "code": "6473",
        "name": "Silenen",
        "": ""
    },
    {
        "code": "6474",
        "name": "Amsteg",
        "": ""
    },
    {
        "code": "6475",
        "name": "Bristen",
        "": ""
    },
    {
        "code": "6476",
        "name": "Intschi",
        "": ""
    },
    {
        "code": "6482",
        "name": "Gurtnellen",
        "": ""
    },
    {
        "code": "6484",
        "name": "Wassen UR",
        "": ""
    },
    {
        "code": "6485",
        "name": "Meien",
        "": ""
    },
    {
        "code": "6487",
        "name": "Göschenen",
        "": ""
    },
    {
        "code": "6490",
        "name": "Andermatt",
        "": ""
    },
    {
        "code": "6491",
        "name": "Realp",
        "": ""
    },
    {
        "code": "6493",
        "name": "Hospental",
        "": ""
    },
    {
        "code": "6500",
        "name": "Bellinzona",
        "": ""
    },
    {
        "code": "6503",
        "name": "Bellinzona",
        "": ""
    },
    {
        "code": "6512",
        "name": "Giubiasco",
        "": ""
    },
    {
        "code": "6513",
        "name": "Monte Carasso",
        "": ""
    },
    {
        "code": "6514",
        "name": "Sementina",
        "": ""
    },
    {
        "code": "6515",
        "name": "Gudo",
        "": ""
    },
    {
        "code": "6516",
        "name": "Cugnasco",
        "": ""
    },
    {
        "code": "6517",
        "name": "Arbedo",
        "": ""
    },
    {
        "code": "6518",
        "name": "Gorduno",
        "": ""
    },
    {
        "code": "6523",
        "name": "Preonzo",
        "": ""
    },
    {
        "code": "6524",
        "name": "Moleno",
        "": ""
    },
    {
        "code": "6525",
        "name": "Gnosca",
        "": ""
    },
    {
        "code": "6526",
        "name": "Prosito",
        "": ""
    },
    {
        "code": "6527",
        "name": "Lodrino",
        "": ""
    },
    {
        "code": "6528",
        "name": "Camorino",
        "": ""
    },
    {
        "code": "6532",
        "name": "Castione",
        "": ""
    },
    {
        "code": "6533",
        "name": "Lumino",
        "": ""
    },
    {
        "code": "6534",
        "name": "S. Vittore",
        "": ""
    },
    {
        "code": "6535",
        "name": "Roveredo GR",
        "": ""
    },
    {
        "code": "6537",
        "name": "Grono",
        "": ""
    },
    {
        "code": "6538",
        "name": "Verdabbio",
        "": ""
    },
    {
        "code": "6540",
        "name": "Castaneda",
        "": ""
    },
    {
        "code": "6541",
        "name": "Sta. Maria in Calanca",
        "": ""
    },
    {
        "code": "6542",
        "name": "Buseno",
        "": ""
    },
    {
        "code": "6543",
        "name": "Arvigo",
        "": ""
    },
    {
        "code": "6544",
        "name": "Braggio",
        "": ""
    },
    {
        "code": "6545",
        "name": "Selma",
        "": ""
    },
    {
        "code": "6546",
        "name": "Cauco",
        "": ""
    },
    {
        "code": "6547",
        "name": "Augio",
        "": ""
    },
    {
        "code": "6548",
        "name": "Rossa",
        "": ""
    },
    {
        "code": "6549",
        "name": "Laura",
        "": ""
    },
    {
        "code": "6556",
        "name": "Leggia",
        "": ""
    },
    {
        "code": "6557",
        "name": "Cama",
        "": ""
    },
    {
        "code": "6558",
        "name": "Lostallo",
        "": ""
    },
    {
        "code": "6562",
        "name": "Soazza",
        "": ""
    },
    {
        "code": "6563",
        "name": "Mesocco",
        "": ""
    },
    {
        "code": "6565",
        "name": "S. Bernardino",
        "": ""
    },
    {
        "code": "6571",
        "name": "Indemini",
        "": ""
    },
    {
        "code": "6572",
        "name": "Quartino",
        "": ""
    },
    {
        "code": "6573",
        "name": "Magadino",
        "": ""
    },
    {
        "code": "6574",
        "name": "Vira (Gambarogno)",
        "": ""
    },
    {
        "code": "6575",
        "name": "Vairano",
        "": ""
    },
    {
        "code": "6575",
        "name": "S. Nazzaro",
        "": ""
    },
    {
        "code": "6576",
        "name": "Gerra (Gambarogno)",
        "": ""
    },
    {
        "code": "6577",
        "name": "Ranzo",
        "": ""
    },
    {
        "code": "6578",
        "name": "Caviano",
        "": ""
    },
    {
        "code": "6579",
        "name": "Piazzogna",
        "": ""
    },
    {
        "code": "6582",
        "name": "Pianezzo",
        "": ""
    },
    {
        "code": "6583",
        "name": "S. Antonio (Val Morobbia)",
        "": ""
    },
    {
        "code": "6584",
        "name": "Carena",
        "": ""
    },
    {
        "code": "6592",
        "name": "S. Antonino",
        "": ""
    },
    {
        "code": "6593",
        "name": "Cadenazzo",
        "": ""
    },
    {
        "code": "6594",
        "name": "Contone",
        "": ""
    },
    {
        "code": "6595",
        "name": "Riazzino",
        "": ""
    },
    {
        "code": "6596",
        "name": "Gordola",
        "": ""
    },
    {
        "code": "6597",
        "name": "Agarone",
        "": ""
    },
    {
        "code": "6598",
        "name": "Tenero",
        "": ""
    },
    {
        "code": "6599",
        "name": "Robasacco",
        "": ""
    },
    {
        "code": "6600",
        "name": "Locarno",
        "": ""
    },
    {
        "code": "6600",
        "name": "Muralto",
        "": ""
    },
    {
        "code": "6600",
        "name": "Solduno",
        "": ""
    },
    {
        "code": "6605",
        "name": "Monte Brè sopra Locarno",
        "": ""
    },
    {
        "code": "6605",
        "name": "Locarno",
        "": ""
    },
    {
        "code": "6611",
        "name": "Mosogno",
        "": ""
    },
    {
        "code": "6611",
        "name": "Gresso",
        "": ""
    },
    {
        "code": "6611",
        "name": "Crana",
        "": ""
    },
    {
        "code": "6612",
        "name": "Ascona",
        "": ""
    },
    {
        "code": "6613",
        "name": "Porto Ronco",
        "": ""
    },
    {
        "code": "6614",
        "name": "Isole di Brissago",
        "": ""
    },
    {
        "code": "6614",
        "name": "Brissago",
        "": ""
    },
    {
        "code": "6616",
        "name": "Losone",
        "": ""
    },
    {
        "code": "6618",
        "name": "Arcegno",
        "": ""
    },
    {
        "code": "6622",
        "name": "Ronco sopra Ascona",
        "": ""
    },
    {
        "code": "6631",
        "name": "Corippo",
        "": ""
    },
    {
        "code": "6632",
        "name": "Vogorno",
        "": ""
    },
    {
        "code": "6633",
        "name": "Lavertezzo",
        "": ""
    },
    {
        "code": "6634",
        "name": "Brione (Verzasca)",
        "": ""
    },
    {
        "code": "6635",
        "name": "Gerra (Verzasca)",
        "": ""
    },
    {
        "code": "6636",
        "name": "Frasco",
        "": ""
    },
    {
        "code": "6637",
        "name": "Sonogno",
        "": ""
    },
    {
        "code": "6644",
        "name": "Orselina",
        "": ""
    },
    {
        "code": "6645",
        "name": "Brione sopra Minusio",
        "": ""
    },
    {
        "code": "6646",
        "name": "Contra",
        "": ""
    },
    {
        "code": "6647",
        "name": "Mergoscia",
        "": ""
    },
    {
        "code": "6648",
        "name": "Minusio",
        "": ""
    },
    {
        "code": "6652",
        "name": "Tegna",
        "": ""
    },
    {
        "code": "6653",
        "name": "Verscio",
        "": ""
    },
    {
        "code": "6654",
        "name": "Cavigliano",
        "": ""
    },
    {
        "code": "6655",
        "name": "Verdasio",
        "": ""
    },
    {
        "code": "6655",
        "name": "Rasa",
        "": ""
    },
    {
        "code": "6655",
        "name": "Intragna",
        "": ""
    },
    {
        "code": "6656",
        "name": "Golino",
        "": ""
    },
    {
        "code": "6657",
        "name": "Palagnedra",
        "": ""
    },
    {
        "code": "6658",
        "name": "Borgnone",
        "": ""
    },
    {
        "code": "6659",
        "name": "Moneto",
        "": ""
    },
    {
        "code": "6659",
        "name": "Camedo",
        "": ""
    },
    {
        "code": "6661",
        "name": "Auressio",
        "": ""
    },
    {
        "code": "6661",
        "name": "Berzona",
        "": ""
    },
    {
        "code": "6661",
        "name": "Loco",
        "": ""
    },
    {
        "code": "6662",
        "name": "Russo",
        "": ""
    },
    {
        "code": "6663",
        "name": "Comologno",
        "": ""
    },
    {
        "code": "6663",
        "name": "Spruga",
        "": ""
    },
    {
        "code": "6664",
        "name": "Vergeletto",
        "": ""
    },
    {
        "code": "6670",
        "name": "Avegno",
        "": ""
    },
    {
        "code": "6672",
        "name": "Gordevio",
        "": ""
    },
    {
        "code": "6673",
        "name": "Maggia",
        "": ""
    },
    {
        "code": "6674",
        "name": "Riveo",
        "": ""
    },
    {
        "code": "6674",
        "name": "Someo",
        "": ""
    },
    {
        "code": "6675",
        "name": "Cevio",
        "": ""
    },
    {
        "code": "6676",
        "name": "Bignasco",
        "": ""
    },
    {
        "code": "6677",
        "name": "Moghegno",
        "": ""
    },
    {
        "code": "6677",
        "name": "Aurigeno",
        "": ""
    },
    {
        "code": "6678",
        "name": "Coglio",
        "": ""
    },
    {
        "code": "6678",
        "name": "Lodano",
        "": ""
    },
    {
        "code": "6678",
        "name": "Giumaglio",
        "": ""
    },
    {
        "code": "6682",
        "name": "Linescio",
        "": ""
    },
    {
        "code": "6683",
        "name": "Cerentino",
        "": ""
    },
    {
        "code": "6683",
        "name": "Niva (Vallemaggia)",
        "": ""
    },
    {
        "code": "6684",
        "name": "Campo (Vallemaggia)",
        "": ""
    },
    {
        "code": "6684",
        "name": "Cimalmotto",
        "": ""
    },
    {
        "code": "6685",
        "name": "Bosco/Gurin",
        "": ""
    },
    {
        "code": "6690",
        "name": "Cavergno",
        "": ""
    },
    {
        "code": "6690",
        "name": "S. Carlo (Val Bavona)",
        "": ""
    },
    {
        "code": "6692",
        "name": "Brontallo",
        "": ""
    },
    {
        "code": "6692",
        "name": "Menzonio",
        "": ""
    },
    {
        "code": "6693",
        "name": "Broglio",
        "": ""
    },
    {
        "code": "6694",
        "name": "Prato-Sornico",
        "": ""
    },
    {
        "code": "6695",
        "name": "Peccia",
        "": ""
    },
    {
        "code": "6695",
        "name": "Piano di Peccia",
        "": ""
    },
    {
        "code": "6696",
        "name": "Fusio",
        "": ""
    },
    {
        "code": "6702",
        "name": "Claro",
        "": ""
    },
    {
        "code": "6703",
        "name": "Osogna",
        "": ""
    },
    {
        "code": "6705",
        "name": "Cresciano",
        "": ""
    },
    {
        "code": "6707",
        "name": "Iragna",
        "": ""
    },
    {
        "code": "6710",
        "name": "Biasca",
        "": ""
    },
    {
        "code": "6710",
        "name": "Biasca Stazione",
        "": ""
    },
    {
        "code": "6713",
        "name": "Malvaglia",
        "": ""
    },
    {
        "code": "6714",
        "name": "Semione",
        "": ""
    },
    {
        "code": "6715",
        "name": "Dongio",
        "": ""
    },
    {
        "code": "6716",
        "name": "Leontica",
        "": ""
    },
    {
        "code": "6716",
        "name": "Lottigna",
        "": ""
    },
    {
        "code": "6716",
        "name": "Acquarossa",
        "": ""
    },
    {
        "code": "6717",
        "name": "Dangio-Torre",
        "": ""
    },
    {
        "code": "6717",
        "name": "Torre",
        "": ""
    },
    {
        "code": "6718",
        "name": "Camperio",
        "": ""
    },
    {
        "code": "6718",
        "name": "Olivone",
        "": ""
    },
    {
        "code": "6719",
        "name": "Aquila",
        "": ""
    },
    {
        "code": "6720",
        "name": "Campo (Blenio)",
        "": ""
    },
    {
        "code": "6720",
        "name": "Ghirone",
        "": ""
    },
    {
        "code": "6721",
        "name": "Ludiano",
        "": ""
    },
    {
        "code": "6721",
        "name": "Motto (Blenio)",
        "": ""
    },
    {
        "code": "6722",
        "name": "Corzoneso",
        "": ""
    },
    {
        "code": "6723",
        "name": "Prugiasco",
        "": ""
    },
    {
        "code": "6723",
        "name": "Castro",
        "": ""
    },
    {
        "code": "6723",
        "name": "Marolta",
        "": ""
    },
    {
        "code": "6724",
        "name": "Ponto Valentino",
        "": ""
    },
    {
        "code": "6724",
        "name": "Largario",
        "": ""
    },
    {
        "code": "6742",
        "name": "Pollegio",
        "": ""
    },
    {
        "code": "6743",
        "name": "Bodio TI",
        "": ""
    },
    {
        "code": "6744",
        "name": "Personico",
        "": ""
    },
    {
        "code": "6745",
        "name": "Giornico",
        "": ""
    },
    {
        "code": "6746",
        "name": "Calonico",
        "": ""
    },
    {
        "code": "6746",
        "name": "Nivo",
        "": ""
    },
    {
        "code": "6746",
        "name": "Lavorgo",
        "": ""
    },
    {
        "code": "6747",
        "name": "Chironico",
        "": ""
    },
    {
        "code": "6748",
        "name": "Anzonico",
        "": ""
    },
    {
        "code": "6749",
        "name": "Sobrio",
        "": ""
    },
    {
        "code": "6749",
        "name": "Cavagnago",
        "": ""
    },
    {
        "code": "6760",
        "name": "Molare",
        "": ""
    },
    {
        "code": "6760",
        "name": "Calpiogna",
        "": ""
    },
    {
        "code": "6760",
        "name": "Carì",
        "": ""
    },
    {
        "code": "6760",
        "name": "Rossura",
        "": ""
    },
    {
        "code": "6760",
        "name": "Faido",
        "": ""
    },
    {
        "code": "6760",
        "name": "Campello",
        "": ""
    },
    {
        "code": "6763",
        "name": "Mairengo",
        "": ""
    },
    {
        "code": "6763",
        "name": "Osco",
        "": ""
    },
    {
        "code": "6764",
        "name": "Chiggiogna",
        "": ""
    },
    {
        "code": "6772",
        "name": "Rodi-Fiesso",
        "": ""
    },
    {
        "code": "6773",
        "name": "Prato (Leventina)",
        "": ""
    },
    {
        "code": "6774",
        "name": "Dalpe",
        "": ""
    },
    {
        "code": "6775",
        "name": "Ambrì",
        "": ""
    },
    {
        "code": "6776",
        "name": "Piotta",
        "": ""
    },
    {
        "code": "6777",
        "name": "Quinto",
        "": ""
    },
    {
        "code": "6777",
        "name": "Varenzo",
        "": ""
    },
    {
        "code": "6780",
        "name": "Madrano",
        "": ""
    },
    {
        "code": "6780",
        "name": "Airolo",
        "": ""
    },
    {
        "code": "6781",
        "name": "Villa Bedretto",
        "": ""
    },
    {
        "code": "6781",
        "name": "Bedretto",
        "": ""
    },
    {
        "code": "6802",
        "name": "Rivera",
        "": ""
    },
    {
        "code": "6803",
        "name": "Camignolo",
        "": ""
    },
    {
        "code": "6804",
        "name": "Bironico",
        "": ""
    },
    {
        "code": "6805",
        "name": "Mezzovico",
        "": ""
    },
    {
        "code": "6806",
        "name": "Sigirino",
        "": ""
    },
    {
        "code": "6807",
        "name": "Taverne",
        "": ""
    },
    {
        "code": "6808",
        "name": "Torricella",
        "": ""
    },
    {
        "code": "6809",
        "name": "Medeglia",
        "": ""
    },
    {
        "code": "6810",
        "name": "Isone",
        "": ""
    },
    {
        "code": "6814",
        "name": "Lamone",
        "": ""
    },
    {
        "code": "6814",
        "name": "Cadempino",
        "": ""
    },
    {
        "code": "6815",
        "name": "Melide",
        "": ""
    },
    {
        "code": "6816",
        "name": "Bissone",
        "": ""
    },
    {
        "code": "6817",
        "name": "Maroggia",
        "": ""
    },
    {
        "code": "6818",
        "name": "Melano",
        "": ""
    },
    {
        "code": "6821",
        "name": "Rovio",
        "": ""
    },
    {
        "code": "6822",
        "name": "Arogno",
        "": ""
    },
    {
        "code": "6823",
        "name": "Pugerna",
        "": ""
    },
    {
        "code": "6825",
        "name": "Capolago",
        "": ""
    },
    {
        "code": "6826",
        "name": "Riva San Vitale",
        "": ""
    },
    {
        "code": "6827",
        "name": "Brusino Arsizio",
        "": ""
    },
    {
        "code": "6828",
        "name": "Balerna",
        "": ""
    },
    {
        "code": "6830",
        "name": "Chiasso",
        "": ""
    },
    {
        "code": "6832",
        "name": "Seseglio",
        "": ""
    },
    {
        "code": "6832",
        "name": "Pedrinate",
        "": ""
    },
    {
        "code": "6833",
        "name": "Vacallo",
        "": ""
    },
    {
        "code": "6834",
        "name": "Morbio Inferiore",
        "": ""
    },
    {
        "code": "6835",
        "name": "Morbio Superiore",
        "": ""
    },
    {
        "code": "6837",
        "name": "Bruzella",
        "": ""
    },
    {
        "code": "6837",
        "name": "Caneggio",
        "": ""
    },
    {
        "code": "6838",
        "name": "Cabbio",
        "": ""
    },
    {
        "code": "6838",
        "name": "Scudellate",
        "": ""
    },
    {
        "code": "6838",
        "name": "Muggio",
        "": ""
    },
    {
        "code": "6839",
        "name": "Sagno",
        "": ""
    },
    {
        "code": "6850",
        "name": "Mendrisio",
        "": ""
    },
    {
        "code": "6852",
        "name": "Genestrerio",
        "": ""
    },
    {
        "code": "6853",
        "name": "Ligornetto",
        "": ""
    },
    {
        "code": "6854",
        "name": "S. Pietro",
        "": ""
    },
    {
        "code": "6855",
        "name": "Stabio",
        "": ""
    },
    {
        "code": "6862",
        "name": "Rancate",
        "": ""
    },
    {
        "code": "6863",
        "name": "Besazio",
        "": ""
    },
    {
        "code": "6864",
        "name": "Arzo",
        "": ""
    },
    {
        "code": "6865",
        "name": "Tremona",
        "": ""
    },
    {
        "code": "6866",
        "name": "Meride",
        "": ""
    },
    {
        "code": "6867",
        "name": "Serpiano",
        "": ""
    },
    {
        "code": "6872",
        "name": "Salorino",
        "": ""
    },
    {
        "code": "6872",
        "name": "Somazzo",
        "": ""
    },
    {
        "code": "6873",
        "name": "Corteglia",
        "": ""
    },
    {
        "code": "6874",
        "name": "Castel San Pietro",
        "": ""
    },
    {
        "code": "6875",
        "name": "Casima",
        "": ""
    },
    {
        "code": "6875",
        "name": "Monte",
        "": ""
    },
    {
        "code": "6877",
        "name": "Coldrerio",
        "": ""
    },
    {
        "code": "6883",
        "name": "Novazzano",
        "": ""
    },
    {
        "code": "6900",
        "name": "Lugano",
        "": ""
    },
    {
        "code": "6900",
        "name": "Massagno",
        "": ""
    },
    {
        "code": "6900",
        "name": "Paradiso",
        "": ""
    },
    {
        "code": "6911",
        "name": "Campione d Italia",
        "": ""
    },
    {
        "code": "6912",
        "name": "Pazzallo",
        "": ""
    },
    {
        "code": "6913",
        "name": "Carabbia",
        "": ""
    },
    {
        "code": "6914",
        "name": "Carona",
        "": ""
    },
    {
        "code": "6915",
        "name": "Pambio-Noranco",
        "": ""
    },
    {
        "code": "6916",
        "name": "Grancia",
        "": ""
    },
    {
        "code": "6917",
        "name": "Barbengo",
        "": ""
    },
    {
        "code": "6918",
        "name": "Figino",
        "": ""
    },
    {
        "code": "6919",
        "name": "Carabietta",
        "": ""
    },
    {
        "code": "6921",
        "name": "Vico Morcote",
        "": ""
    },
    {
        "code": "6922",
        "name": "Morcote",
        "": ""
    },
    {
        "code": "6924",
        "name": "Sorengo",
        "": ""
    },
    {
        "code": "6925",
        "name": "Gentilino",
        "": ""
    },
    {
        "code": "6926",
        "name": "Montagnola",
        "": ""
    },
    {
        "code": "6927",
        "name": "Agra",
        "": ""
    },
    {
        "code": "6928",
        "name": "Manno",
        "": ""
    },
    {
        "code": "6929",
        "name": "Gravesano",
        "": ""
    },
    {
        "code": "6930",
        "name": "Bedano",
        "": ""
    },
    {
        "code": "6932",
        "name": "Breganzona",
        "": ""
    },
    {
        "code": "6933",
        "name": "Muzzano",
        "": ""
    },
    {
        "code": "6934",
        "name": "Bioggio",
        "": ""
    },
    {
        "code": "6935",
        "name": "Bosco Luganese",
        "": ""
    },
    {
        "code": "6936",
        "name": "Cademario",
        "": ""
    },
    {
        "code": "6937",
        "name": "Breno",
        "": ""
    },
    {
        "code": "6938",
        "name": "Vezio",
        "": ""
    },
    {
        "code": "6938",
        "name": "Fescoggia",
        "": ""
    },
    {
        "code": "6939",
        "name": "Arosio",
        "": ""
    },
    {
        "code": "6939",
        "name": "Mugena",
        "": ""
    },
    {
        "code": "6942",
        "name": "Savosa",
        "": ""
    },
    {
        "code": "6943",
        "name": "Vezia",
        "": ""
    },
    {
        "code": "6944",
        "name": "Cureglia",
        "": ""
    },
    {
        "code": "6945",
        "name": "Origlio",
        "": ""
    },
    {
        "code": "6946",
        "name": "Ponte Capriasca",
        "": ""
    },
    {
        "code": "6947",
        "name": "Vaglio",
        "": ""
    },
    {
        "code": "6948",
        "name": "Porza",
        "": ""
    },
    {
        "code": "6949",
        "name": "Comano",
        "": ""
    },
    {
        "code": "6950",
        "name": "Tesserete",
        "": ""
    },
    {
        "code": "6951",
        "name": "Insone",
        "": ""
    },
    {
        "code": "6951",
        "name": "Odogno",
        "": ""
    },
    {
        "code": "6951",
        "name": "Colla",
        "": ""
    },
    {
        "code": "6951",
        "name": "Bogno",
        "": ""
    },
    {
        "code": "6951",
        "name": "Cozzo",
        "": ""
    },
    {
        "code": "6951",
        "name": "Signôra",
        "": ""
    },
    {
        "code": "6951",
        "name": "Scareglia",
        "": ""
    },
    {
        "code": "6952",
        "name": "Canobbio",
        "": ""
    },
    {
        "code": "6953",
        "name": "Lugaggia",
        "": ""
    },
    {
        "code": "6954",
        "name": "Sala Capriasca",
        "": ""
    },
    {
        "code": "6954",
        "name": "Bigorio",
        "": ""
    },
    {
        "code": "6955",
        "name": "Cagiallo",
        "": ""
    },
    {
        "code": "6955",
        "name": "Oggio",
        "": ""
    },
    {
        "code": "6956",
        "name": "Lopagno",
        "": ""
    },
    {
        "code": "6957",
        "name": "Roveredo TI",
        "": ""
    },
    {
        "code": "6958",
        "name": "Bidogno",
        "": ""
    },
    {
        "code": "6958",
        "name": "Corticiasca",
        "": ""
    },
    {
        "code": "6959",
        "name": "Cimadera",
        "": ""
    },
    {
        "code": "6959",
        "name": "Certara",
        "": ""
    },
    {
        "code": "6959",
        "name": "Curtina",
        "": ""
    },
    {
        "code": "6959",
        "name": "Piandera Paese",
        "": ""
    },
    {
        "code": "6959",
        "name": "Maglio di Colla",
        "": ""
    },
    {
        "code": "6962",
        "name": "Viganello",
        "": ""
    },
    {
        "code": "6963",
        "name": "Cureggia",
        "": ""
    },
    {
        "code": "6963",
        "name": "Pregassona",
        "": ""
    },
    {
        "code": "6964",
        "name": "Davesco-Soragno",
        "": ""
    },
    {
        "code": "6965",
        "name": "Cadro",
        "": ""
    },
    {
        "code": "6966",
        "name": "Villa Luganese",
        "": ""
    },
    {
        "code": "6967",
        "name": "Dino",
        "": ""
    },
    {
        "code": "6968",
        "name": "Sonvico",
        "": ""
    },
    {
        "code": "6974",
        "name": "Aldesago",
        "": ""
    },
    {
        "code": "6976",
        "name": "Castagnola",
        "": ""
    },
    {
        "code": "6977",
        "name": "Ruvigliana",
        "": ""
    },
    {
        "code": "6978",
        "name": "Gandria",
        "": ""
    },
    {
        "code": "6979",
        "name": "Brè sopra Lugano",
        "": ""
    },
    {
        "code": "6980",
        "name": "Castelrotto",
        "": ""
    },
    {
        "code": "6981",
        "name": "Bedigliora",
        "": ""
    },
    {
        "code": "6981",
        "name": "Biogno-Beride",
        "": ""
    },
    {
        "code": "6981",
        "name": "Bombinasco",
        "": ""
    },
    {
        "code": "6981",
        "name": "Banco",
        "": ""
    },
    {
        "code": "6982",
        "name": "Agno",
        "": ""
    },
    {
        "code": "6983",
        "name": "Magliaso",
        "": ""
    },
    {
        "code": "6984",
        "name": "Pura",
        "": ""
    },
    {
        "code": "6986",
        "name": "Miglieglia",
        "": ""
    },
    {
        "code": "6986",
        "name": "Curio",
        "": ""
    },
    {
        "code": "6986",
        "name": "Novaggio",
        "": ""
    },
    {
        "code": "6987",
        "name": "Caslano",
        "": ""
    },
    {
        "code": "6988",
        "name": "Ponte Tresa",
        "": ""
    },
    {
        "code": "6989",
        "name": "Purasca",
        "": ""
    },
    {
        "code": "6990",
        "name": "Cassina d Agno",
        "": ""
    },
    {
        "code": "6991",
        "name": "Neggio",
        "": ""
    },
    {
        "code": "6992",
        "name": "Cimo",
        "": ""
    },
    {
        "code": "6992",
        "name": "Vernate",
        "": ""
    },
    {
        "code": "6993",
        "name": "Iseo",
        "": ""
    },
    {
        "code": "6994",
        "name": "Aranno",
        "": ""
    },
    {
        "code": "6995",
        "name": "Madonna del Piano",
        "": ""
    },
    {
        "code": "6995",
        "name": "Molinazzo di Monteggio",
        "": ""
    },
    {
        "code": "6996",
        "name": "Ponte Cremenaga",
        "": ""
    },
    {
        "code": "6997",
        "name": "Sessa",
        "": ""
    },
    {
        "code": "6998",
        "name": "Termine",
        "": ""
    },
    {
        "code": "6999",
        "name": "Astano",
        "": ""
    },
    {
        "code": "7000",
        "name": "Chur",
        "": ""
    },
    {
        "code": "7012",
        "name": "Felsberg",
        "": ""
    },
    {
        "code": "7013",
        "name": "Domat/Ems",
        "": ""
    },
    {
        "code": "7014",
        "name": "Trin",
        "": ""
    },
    {
        "code": "7015",
        "name": "Tamins",
        "": ""
    },
    {
        "code": "7016",
        "name": "Trin Mulin",
        "": ""
    },
    {
        "code": "7017",
        "name": "Flims Dorf",
        "": ""
    },
    {
        "code": "7018",
        "name": "Flims Waldhaus",
        "": ""
    },
    {
        "code": "7019",
        "name": "Fidaz",
        "": ""
    },
    {
        "code": "7023",
        "name": "Haldenstein",
        "": ""
    },
    {
        "code": "7026",
        "name": "Maladers",
        "": ""
    },
    {
        "code": "7027",
        "name": "Lüen",
        "": ""
    },
    {
        "code": "7027",
        "name": "Castiel",
        "": ""
    },
    {
        "code": "7027",
        "name": "Calfreisen",
        "": ""
    },
    {
        "code": "7028",
        "name": "Pagig",
        "": ""
    },
    {
        "code": "7028",
        "name": "St. Peter",
        "": ""
    },
    {
        "code": "7029",
        "name": "Peist",
        "": ""
    },
    {
        "code": "7031",
        "name": "Laax GR",
        "": ""
    },
    {
        "code": "7032",
        "name": "Laax GR 2",
        "": ""
    },
    {
        "code": "7050",
        "name": "Arosa",
        "": ""
    },
    {
        "code": "7056",
        "name": "Molinis",
        "": ""
    },
    {
        "code": "7057",
        "name": "Langwies",
        "": ""
    },
    {
        "code": "7058",
        "name": "Litzirüti",
        "": ""
    },
    {
        "code": "7062",
        "name": "Passugg-Araschgen",
        "": ""
    },
    {
        "code": "7063",
        "name": "Praden",
        "": ""
    },
    {
        "code": "7064",
        "name": "Tschiertschen",
        "": ""
    },
    {
        "code": "7074",
        "name": "Malix",
        "": ""
    },
    {
        "code": "7075",
        "name": "Churwalden",
        "": ""
    },
    {
        "code": "7076",
        "name": "Parpan",
        "": ""
    },
    {
        "code": "7077",
        "name": "Valbella",
        "": ""
    },
    {
        "code": "7078",
        "name": "Lenzerheide/Lai",
        "": ""
    },
    {
        "code": "7082",
        "name": "Vaz/Obervaz",
        "": ""
    },
    {
        "code": "7083",
        "name": "Lantsch/Lenz",
        "": ""
    },
    {
        "code": "7084",
        "name": "Brienz/Brinzauls GR",
        "": ""
    },
    {
        "code": "7104",
        "name": "Arezen",
        "": ""
    },
    {
        "code": "7104",
        "name": "Versam",
        "": ""
    },
    {
        "code": "7106",
        "name": "Tenna",
        "": ""
    },
    {
        "code": "7107",
        "name": "Safien Platz",
        "": ""
    },
    {
        "code": "7109",
        "name": "Thalkirch",
        "": ""
    },
    {
        "code": "7110",
        "name": "Peiden",
        "": ""
    },
    {
        "code": "7111",
        "name": "Pitasch",
        "": ""
    },
    {
        "code": "7112",
        "name": "Duvin",
        "": ""
    },
    {
        "code": "7113",
        "name": "Camuns",
        "": ""
    },
    {
        "code": "7114",
        "name": "Uors (Lumnezia)",
        "": ""
    },
    {
        "code": "7115",
        "name": "Surcasti",
        "": ""
    },
    {
        "code": "7116",
        "name": "Tersnaus",
        "": ""
    },
    {
        "code": "7116",
        "name": "St. Martin (Lugnez)",
        "": ""
    },
    {
        "code": "7122",
        "name": "Valendas",
        "": ""
    },
    {
        "code": "7122",
        "name": "Carrera",
        "": ""
    },
    {
        "code": "7126",
        "name": "Castrisch",
        "": ""
    },
    {
        "code": "7127",
        "name": "Sevgein",
        "": ""
    },
    {
        "code": "7128",
        "name": "Riein",
        "": ""
    },
    {
        "code": "7130",
        "name": "Schnaus",
        "": ""
    },
    {
        "code": "7130",
        "name": "Ilanz",
        "": ""
    },
    {
        "code": "7132",
        "name": "Vals",
        "": ""
    },
    {
        "code": "7133",
        "name": "Obersaxen Affeier",
        "": ""
    },
    {
        "code": "7134",
        "name": "Obersaxen Meierhof",
        "": ""
    },
    {
        "code": "7135",
        "name": "Obersaxen Giraniga",
        "": ""
    },
    {
        "code": "7136",
        "name": "Obersaxen Friggahüs",
        "": ""
    },
    {
        "code": "7137",
        "name": "Flond",
        "": ""
    },
    {
        "code": "7138",
        "name": "Surcuolm",
        "": ""
    },
    {
        "code": "7141",
        "name": "Luven",
        "": ""
    },
    {
        "code": "7142",
        "name": "Cumbel",
        "": ""
    },
    {
        "code": "7143",
        "name": "Morissen",
        "": ""
    },
    {
        "code": "7144",
        "name": "Vella",
        "": ""
    },
    {
        "code": "7145",
        "name": "Degen",
        "": ""
    },
    {
        "code": "7146",
        "name": "Vattiz",
        "": ""
    },
    {
        "code": "7147",
        "name": "Vignogn",
        "": ""
    },
    {
        "code": "7148",
        "name": "Surin",
        "": ""
    },
    {
        "code": "7148",
        "name": "Lumbrein",
        "": ""
    },
    {
        "code": "7149",
        "name": "Vrin",
        "": ""
    },
    {
        "code": "7151",
        "name": "Schluein",
        "": ""
    },
    {
        "code": "7152",
        "name": "Sagogn",
        "": ""
    },
    {
        "code": "7153",
        "name": "Falera",
        "": ""
    },
    {
        "code": "7154",
        "name": "Ruschein",
        "": ""
    },
    {
        "code": "7155",
        "name": "Ladir",
        "": ""
    },
    {
        "code": "7156",
        "name": "Pigniu",
        "": ""
    },
    {
        "code": "7156",
        "name": "Rueun",
        "": ""
    },
    {
        "code": "7157",
        "name": "Siat",
        "": ""
    },
    {
        "code": "7158",
        "name": "Waltensburg/Vuorz",
        "": ""
    },
    {
        "code": "7159",
        "name": "Andiast",
        "": ""
    },
    {
        "code": "7162",
        "name": "Tavanasa",
        "": ""
    },
    {
        "code": "7163",
        "name": "Danis",
        "": ""
    },
    {
        "code": "7164",
        "name": "Dardin",
        "": ""
    },
    {
        "code": "7165",
        "name": "Breil/Brigels",
        "": ""
    },
    {
        "code": "7166",
        "name": "Trun",
        "": ""
    },
    {
        "code": "7167",
        "name": "Zignau",
        "": ""
    },
    {
        "code": "7168",
        "name": "Schlans",
        "": ""
    },
    {
        "code": "7172",
        "name": "Rabius",
        "": ""
    },
    {
        "code": "7173",
        "name": "Surrein",
        "": ""
    },
    {
        "code": "7174",
        "name": "S. Benedetg",
        "": ""
    },
    {
        "code": "7175",
        "name": "Sumvitg",
        "": ""
    },
    {
        "code": "7176",
        "name": "Cumpadials",
        "": ""
    },
    {
        "code": "7180",
        "name": "Disentis/Mustér",
        "": ""
    },
    {
        "code": "7182",
        "name": "Cavardiras",
        "": ""
    },
    {
        "code": "7183",
        "name": "Mompé Medel",
        "": ""
    },
    {
        "code": "7184",
        "name": "Curaglia",
        "": ""
    },
    {
        "code": "7185",
        "name": "Platta",
        "": ""
    },
    {
        "code": "7186",
        "name": "Segnas",
        "": ""
    },
    {
        "code": "7187",
        "name": "Camischolas",
        "": ""
    },
    {
        "code": "7188",
        "name": "Sedrun",
        "": ""
    },
    {
        "code": "7189",
        "name": "Rueras",
        "": ""
    },
    {
        "code": "7201",
        "name": "Untervaz Bahnhof",
        "": ""
    },
    {
        "code": "7202",
        "name": "Says",
        "": ""
    },
    {
        "code": "7203",
        "name": "Trimmis",
        "": ""
    },
    {
        "code": "7204",
        "name": "Untervaz",
        "": ""
    },
    {
        "code": "7205",
        "name": "Zizers",
        "": ""
    },
    {
        "code": "7206",
        "name": "Igis",
        "": ""
    },
    {
        "code": "7208",
        "name": "Malans GR",
        "": ""
    },
    {
        "code": "7212",
        "name": "Seewis Dorf",
        "": ""
    },
    {
        "code": "7213",
        "name": "Valzeina",
        "": ""
    },
    {
        "code": "7214",
        "name": "Seewis-Pardisla",
        "": ""
    },
    {
        "code": "7214",
        "name": "Seewis-Schmitten",
        "": ""
    },
    {
        "code": "7214",
        "name": "Grüsch",
        "": ""
    },
    {
        "code": "7215",
        "name": "Fanas",
        "": ""
    },
    {
        "code": "7220",
        "name": "Schiers",
        "": ""
    },
    {
        "code": "7222",
        "name": "Mittellunden",
        "": ""
    },
    {
        "code": "7223",
        "name": "Buchen im Prättigau",
        "": ""
    },
    {
        "code": "7224",
        "name": "Putz",
        "": ""
    },
    {
        "code": "7226",
        "name": "Stels",
        "": ""
    },
    {
        "code": "7226",
        "name": "Fajauna",
        "": ""
    },
    {
        "code": "7228",
        "name": "Schuders",
        "": ""
    },
    {
        "code": "7228",
        "name": "Pusserein",
        "": ""
    },
    {
        "code": "7231",
        "name": "Pragg-Jenaz",
        "": ""
    },
    {
        "code": "7232",
        "name": "Furna",
        "": ""
    },
    {
        "code": "7233",
        "name": "Jenaz",
        "": ""
    },
    {
        "code": "7235",
        "name": "Fideris",
        "": ""
    },
    {
        "code": "7240",
        "name": "Küblis",
        "": ""
    },
    {
        "code": "7241",
        "name": "Conters im Prättigau",
        "": ""
    },
    {
        "code": "7242",
        "name": "Luzein",
        "": ""
    },
    {
        "code": "7243",
        "name": "Pany",
        "": ""
    },
    {
        "code": "7244",
        "name": "Gadenstätt",
        "": ""
    },
    {
        "code": "7245",
        "name": "Ascharina",
        "": ""
    },
    {
        "code": "7246",
        "name": "St. Antönien",
        "": ""
    },
    {
        "code": "7247",
        "name": "Saas im Prättigau",
        "": ""
    },
    {
        "code": "7249",
        "name": "Serneus",
        "": ""
    },
    {
        "code": "7250",
        "name": "Klosters",
        "": ""
    },
    {
        "code": "7252",
        "name": "Klosters Dorf",
        "": ""
    },
    {
        "code": "7260",
        "name": "Davos Dorf",
        "": ""
    },
    {
        "code": "7265",
        "name": "Davos Wolfgang",
        "": ""
    },
    {
        "code": "7270",
        "name": "Davos Platz",
        "": ""
    },
    {
        "code": "7272",
        "name": "Davos Clavadel",
        "": ""
    },
    {
        "code": "7276",
        "name": "Davos Frauenkirch",
        "": ""
    },
    {
        "code": "7277",
        "name": "Davos Glaris",
        "": ""
    },
    {
        "code": "7278",
        "name": "Davos Monstein",
        "": ""
    },
    {
        "code": "7302",
        "name": "Landquart",
        "": ""
    },
    {
        "code": "7303",
        "name": "Mastrils",
        "": ""
    },
    {
        "code": "7304",
        "name": "Maienfeld",
        "": ""
    },
    {
        "code": "7306",
        "name": "Fläsch",
        "": ""
    },
    {
        "code": "7307",
        "name": "Jenins",
        "": ""
    },
    {
        "code": "7310",
        "name": "Bad Ragaz",
        "": ""
    },
    {
        "code": "7312",
        "name": "Pfäfers",
        "": ""
    },
    {
        "code": "7313",
        "name": "St. Margrethenberg",
        "": ""
    },
    {
        "code": "7314",
        "name": "Vadura",
        "": ""
    },
    {
        "code": "7315",
        "name": "Vättis",
        "": ""
    },
    {
        "code": "7317",
        "name": "Vasön",
        "": ""
    },
    {
        "code": "7317",
        "name": "Valens",
        "": ""
    },
    {
        "code": "7320",
        "name": "Sargans",
        "": ""
    },
    {
        "code": "7323",
        "name": "Wangs",
        "": ""
    },
    {
        "code": "7324",
        "name": "Vilters",
        "": ""
    },
    {
        "code": "7325",
        "name": "Schwendi im Weisstannental",
        "": ""
    },
    {
        "code": "7326",
        "name": "Weisstannen",
        "": ""
    },
    {
        "code": "7402",
        "name": "Bonaduz",
        "": ""
    },
    {
        "code": "7403",
        "name": "Rhäzüns",
        "": ""
    },
    {
        "code": "7404",
        "name": "Feldis/Veulden",
        "": ""
    },
    {
        "code": "7405",
        "name": "Rothenbrunnen",
        "": ""
    },
    {
        "code": "7407",
        "name": "Trans",
        "": ""
    },
    {
        "code": "7408",
        "name": "Realta",
        "": ""
    },
    {
        "code": "7408",
        "name": "Cazis",
        "": ""
    },
    {
        "code": "7411",
        "name": "Sils im Domleschg",
        "": ""
    },
    {
        "code": "7412",
        "name": "Scharans",
        "": ""
    },
    {
        "code": "7413",
        "name": "Fürstenaubruck",
        "": ""
    },
    {
        "code": "7414",
        "name": "Fürstenau",
        "": ""
    },
    {
        "code": "7415",
        "name": "Pratval",
        "": ""
    },
    {
        "code": "7415",
        "name": "Rodels",
        "": ""
    },
    {
        "code": "7416",
        "name": "Almens",
        "": ""
    },
    {
        "code": "7417",
        "name": "Paspels",
        "": ""
    },
    {
        "code": "7418",
        "name": "Tumegl/Tomils",
        "": ""
    },
    {
        "code": "7419",
        "name": "Scheid",
        "": ""
    },
    {
        "code": "7421",
        "name": "Summaprada",
        "": ""
    },
    {
        "code": "7422",
        "name": "Tartar",
        "": ""
    },
    {
        "code": "7423",
        "name": "Sarn",
        "": ""
    },
    {
        "code": "7423",
        "name": "Portein",
        "": ""
    },
    {
        "code": "7424",
        "name": "Präz",
        "": ""
    },
    {
        "code": "7424",
        "name": "Dalin",
        "": ""
    },
    {
        "code": "7425",
        "name": "Masein",
        "": ""
    },
    {
        "code": "7426",
        "name": "Flerden",
        "": ""
    },
    {
        "code": "7427",
        "name": "Urmein",
        "": ""
    },
    {
        "code": "7428",
        "name": "Tschappina",
        "": ""
    },
    {
        "code": "7428",
        "name": "Glaspass",
        "": ""
    },
    {
        "code": "7430",
        "name": "Rongellen",
        "": ""
    },
    {
        "code": "7430",
        "name": "Thusis",
        "": ""
    },
    {
        "code": "7431",
        "name": "Mutten",
        "": ""
    },
    {
        "code": "7431",
        "name": "Obermutten",
        "": ""
    },
    {
        "code": "7432",
        "name": "Zillis",
        "": ""
    },
    {
        "code": "7433",
        "name": "Farden",
        "": ""
    },
    {
        "code": "7433",
        "name": "Wergenstein",
        "": ""
    },
    {
        "code": "7433",
        "name": "Lohn GR",
        "": ""
    },
    {
        "code": "7433",
        "name": "Donat",
        "": ""
    },
    {
        "code": "7433",
        "name": "Mathon",
        "": ""
    },
    {
        "code": "7434",
        "name": "Sufers",
        "": ""
    },
    {
        "code": "7435",
        "name": "Splügen",
        "": ""
    },
    {
        "code": "7436",
        "name": "Medels im Rheinwald",
        "": ""
    },
    {
        "code": "7437",
        "name": "Nufenen",
        "": ""
    },
    {
        "code": "7438",
        "name": "Hinterrhein",
        "": ""
    },
    {
        "code": "7440",
        "name": "Andeer",
        "": ""
    },
    {
        "code": "7442",
        "name": "Clugin",
        "": ""
    },
    {
        "code": "7443",
        "name": "Pignia",
        "": ""
    },
    {
        "code": "7444",
        "name": "Ausserferrera",
        "": ""
    },
    {
        "code": "7445",
        "name": "Innerferrera",
        "": ""
    },
    {
        "code": "7446",
        "name": "Campsut-Cröt",
        "": ""
    },
    {
        "code": "7447",
        "name": "Cresta (Avers)",
        "": ""
    },
    {
        "code": "7447",
        "name": "Am Bach (Avers)",
        "": ""
    },
    {
        "code": "7448",
        "name": "Juf",
        "": ""
    },
    {
        "code": "7450",
        "name": "Tiefencastel",
        "": ""
    },
    {
        "code": "7451",
        "name": "Alvaschein",
        "": ""
    },
    {
        "code": "7452",
        "name": "Cunter",
        "": ""
    },
    {
        "code": "7453",
        "name": "Tinizong",
        "": ""
    },
    {
        "code": "7454",
        "name": "Rona",
        "": ""
    },
    {
        "code": "7455",
        "name": "Mulegns",
        "": ""
    },
    {
        "code": "7456",
        "name": "Sur",
        "": ""
    },
    {
        "code": "7456",
        "name": "Marmorera",
        "": ""
    },
    {
        "code": "7457",
        "name": "Bivio",
        "": ""
    },
    {
        "code": "7458",
        "name": "Mon",
        "": ""
    },
    {
        "code": "7459",
        "name": "Stierva",
        "": ""
    },
    {
        "code": "7460",
        "name": "Savognin",
        "": ""
    },
    {
        "code": "7462",
        "name": "Salouf",
        "": ""
    },
    {
        "code": "7463",
        "name": "Riom",
        "": ""
    },
    {
        "code": "7464",
        "name": "Parsonz",
        "": ""
    },
    {
        "code": "7472",
        "name": "Surava",
        "": ""
    },
    {
        "code": "7473",
        "name": "Alvaneu Bad",
        "": ""
    },
    {
        "code": "7477",
        "name": "Filisur",
        "": ""
    },
    {
        "code": "7482",
        "name": "Stugl/Stuls",
        "": ""
    },
    {
        "code": "7482",
        "name": "Preda",
        "": ""
    },
    {
        "code": "7482",
        "name": "Bergün/Bravuogn",
        "": ""
    },
    {
        "code": "7484",
        "name": "Latsch",
        "": ""
    },
    {
        "code": "7492",
        "name": "Alvaneu Dorf",
        "": ""
    },
    {
        "code": "7493",
        "name": "Schmitten (Albula)",
        "": ""
    },
    {
        "code": "7494",
        "name": "Wiesen GR",
        "": ""
    },
    {
        "code": "7500",
        "name": "St. Moritz",
        "": ""
    },
    {
        "code": "7502",
        "name": "Bever",
        "": ""
    },
    {
        "code": "7503",
        "name": "Samedan",
        "": ""
    },
    {
        "code": "7504",
        "name": "Pontresina",
        "": ""
    },
    {
        "code": "7505",
        "name": "Celerina/Schlarigna",
        "": ""
    },
    {
        "code": "7512",
        "name": "Champfèr",
        "": ""
    },
    {
        "code": "7513",
        "name": "Silvaplana-Surlej",
        "": ""
    },
    {
        "code": "7513",
        "name": "Silvaplana",
        "": ""
    },
    {
        "code": "7514",
        "name": "Fex",
        "": ""
    },
    {
        "code": "7514",
        "name": "Sils/Segl Maria",
        "": ""
    },
    {
        "code": "7515",
        "name": "Sils/Segl Baselgia",
        "": ""
    },
    {
        "code": "7516",
        "name": "Maloja",
        "": ""
    },
    {
        "code": "7517",
        "name": "Plaun da Lej",
        "": ""
    },
    {
        "code": "7522",
        "name": "La Punt-Chamues-ch",
        "": ""
    },
    {
        "code": "7523",
        "name": "Madulain",
        "": ""
    },
    {
        "code": "7524",
        "name": "Zuoz",
        "": ""
    },
    {
        "code": "7525",
        "name": "S-chanf",
        "": ""
    },
    {
        "code": "7526",
        "name": "Cinuos-chel",
        "": ""
    },
    {
        "code": "7527",
        "name": "Brail",
        "": ""
    },
    {
        "code": "7530",
        "name": "Zernez",
        "": ""
    },
    {
        "code": "7532",
        "name": "Tschierv",
        "": ""
    },
    {
        "code": "7533",
        "name": "Fuldera",
        "": ""
    },
    {
        "code": "7534",
        "name": "Lü",
        "": ""
    },
    {
        "code": "7535",
        "name": "Valchava",
        "": ""
    },
    {
        "code": "7536",
        "name": "Sta. Maria Val Müstair",
        "": ""
    },
    {
        "code": "7537",
        "name": "Müstair",
        "": ""
    },
    {
        "code": "7542",
        "name": "Susch",
        "": ""
    },
    {
        "code": "7543",
        "name": "Lavin",
        "": ""
    },
    {
        "code": "7545",
        "name": "Guarda",
        "": ""
    },
    {
        "code": "7546",
        "name": "Ardez",
        "": ""
    },
    {
        "code": "7550",
        "name": "Scuol",
        "": ""
    },
    {
        "code": "7551",
        "name": "Ftan",
        "": ""
    },
    {
        "code": "7552",
        "name": "Vulpera",
        "": ""
    },
    {
        "code": "7553",
        "name": "Tarasp",
        "": ""
    },
    {
        "code": "7554",
        "name": "Crusch",
        "": ""
    },
    {
        "code": "7554",
        "name": "Sent",
        "": ""
    },
    {
        "code": "7556",
        "name": "Ramosch",
        "": ""
    },
    {
        "code": "7557",
        "name": "Vnà",
        "": ""
    },
    {
        "code": "7558",
        "name": "Strada",
        "": ""
    },
    {
        "code": "7559",
        "name": "Tschlin",
        "": ""
    },
    {
        "code": "7560",
        "name": "Martina",
        "": ""
    },
    {
        "code": "7562",
        "name": "Samnaun-Compatsch",
        "": ""
    },
    {
        "code": "7563",
        "name": "Samnaun Dorf",
        "": ""
    },
    {
        "code": "7602",
        "name": "Casaccia",
        "": ""
    },
    {
        "code": "7603",
        "name": "Vicosoprano",
        "": ""
    },
    {
        "code": "7604",
        "name": "Borgonovo",
        "": ""
    },
    {
        "code": "7605",
        "name": "Stampa",
        "": ""
    },
    {
        "code": "7606",
        "name": "Promontogno",
        "": ""
    },
    {
        "code": "7608",
        "name": "Castasegna",
        "": ""
    },
    {
        "code": "7610",
        "name": "Soglio",
        "": ""
    },
    {
        "code": "7710",
        "name": "Ospizio Bernina",
        "": ""
    },
    {
        "code": "7710",
        "name": "Alp Grüm",
        "": ""
    },
    {
        "code": "7741",
        "name": "S. Carlo (Poschiavo)",
        "": ""
    },
    {
        "code": "7742",
        "name": "Sfazù",
        "": ""
    },
    {
        "code": "7742",
        "name": "La Rösa",
        "": ""
    },
    {
        "code": "7742",
        "name": "Poschiavo",
        "": ""
    },
    {
        "code": "7743",
        "name": "Miralago",
        "": ""
    },
    {
        "code": "7743",
        "name": "Brusio",
        "": ""
    },
    {
        "code": "7744",
        "name": "Campocologno",
        "": ""
    },
    {
        "code": "7745",
        "name": "Li Curt",
        "": ""
    },
    {
        "code": "7746",
        "name": "Le Prese",
        "": ""
    },
    {
        "code": "7747",
        "name": "Viano",
        "": ""
    },
    {
        "code": "7748",
        "name": "Campascio",
        "": ""
    },
    {
        "code": "8000",
        "name": "Zürich",
        "": ""
    },
    {
        "code": "8001",
        "name": "Zürich",
        "": ""
    },
    {
        "code": "8002",
        "name": "Zürich",
        "": ""
    },
    {
        "code": "8003",
        "name": "Zürich",
        "": ""
    },
    {
        "code": "8004",
        "name": "Zürich",
        "": ""
    },
    {
        "code": "8005",
        "name": "Zürich",
        "": ""
    },
    {
        "code": "8006",
        "name": "Zürich",
        "": ""
    },
    {
        "code": "8008",
        "name": "Zürich",
        "": ""
    },
    {
        "code": "8032",
        "name": "Zürich",
        "": ""
    },
    {
        "code": "8037",
        "name": "Zürich",
        "": ""
    },
    {
        "code": "8038",
        "name": "Zürich",
        "": ""
    },
    {
        "code": "8041",
        "name": "Zürich",
        "": ""
    },
    {
        "code": "8044",
        "name": "Gockhausen",
        "": ""
    },
    {
        "code": "8044",
        "name": "Zürich",
        "": ""
    },
    {
        "code": "8045",
        "name": "Zürich",
        "": ""
    },
    {
        "code": "8046",
        "name": "Zürich",
        "": ""
    },
    {
        "code": "8047",
        "name": "Zürich",
        "": ""
    },
    {
        "code": "8048",
        "name": "Zürich",
        "": ""
    },
    {
        "code": "8049",
        "name": "Zürich",
        "": ""
    },
    {
        "code": "8050",
        "name": "Zürich",
        "": ""
    },
    {
        "code": "8051",
        "name": "Zürich",
        "": ""
    },
    {
        "code": "8052",
        "name": "Zürich",
        "": ""
    },
    {
        "code": "8053",
        "name": "Zürich",
        "": ""
    },
    {
        "code": "8055",
        "name": "Zürich",
        "": ""
    },
    {
        "code": "8057",
        "name": "Zürich",
        "": ""
    },
    {
        "code": "8063",
        "name": "Zürich",
        "": ""
    },
    {
        "code": "8064",
        "name": "Zürich",
        "": ""
    },
    {
        "code": "8099",
        "name": "Zürich",
        "": ""
    },
    {
        "code": "8102",
        "name": "Oberengstringen",
        "": ""
    },
    {
        "code": "8103",
        "name": "Unterengstringen",
        "": ""
    },
    {
        "code": "8104",
        "name": "Weiningen ZH",
        "": ""
    },
    {
        "code": "8105",
        "name": "Regensdorf",
        "": ""
    },
    {
        "code": "8105",
        "name": "Watt",
        "": ""
    },
    {
        "code": "8106",
        "name": "Adlikon b. Regensdorf",
        "": ""
    },
    {
        "code": "8107",
        "name": "Buchs ZH",
        "": ""
    },
    {
        "code": "8108",
        "name": "Dällikon",
        "": ""
    },
    {
        "code": "8109",
        "name": "Kloster Fahr",
        "": ""
    },
    {
        "code": "8112",
        "name": "Otelfingen",
        "": ""
    },
    {
        "code": "8113",
        "name": "Boppelsen",
        "": ""
    },
    {
        "code": "8114",
        "name": "Dänikon ZH",
        "": ""
    },
    {
        "code": "8115",
        "name": "Hüttikon",
        "": ""
    },
    {
        "code": "8117",
        "name": "Fällanden",
        "": ""
    },
    {
        "code": "8118",
        "name": "Pfaffhausen",
        "": ""
    },
    {
        "code": "8121",
        "name": "Benglen",
        "": ""
    },
    {
        "code": "8122",
        "name": "Binz",
        "": ""
    },
    {
        "code": "8123",
        "name": "Ebmatingen",
        "": ""
    },
    {
        "code": "8124",
        "name": "Maur",
        "": ""
    },
    {
        "code": "8125",
        "name": "Zollikerberg",
        "": ""
    },
    {
        "code": "8126",
        "name": "Zumikon",
        "": ""
    },
    {
        "code": "8127",
        "name": "Forch",
        "": ""
    },
    {
        "code": "8132",
        "name": "Hinteregg",
        "": ""
    },
    {
        "code": "8132",
        "name": "Egg b. Zürich",
        "": ""
    },
    {
        "code": "8133",
        "name": "Esslingen",
        "": ""
    },
    {
        "code": "8134",
        "name": "Adliswil",
        "": ""
    },
    {
        "code": "8135",
        "name": "Sihlbrugg Station",
        "": ""
    },
    {
        "code": "8135",
        "name": "Sihlwald",
        "": ""
    },
    {
        "code": "8135",
        "name": "Langnau am Albis",
        "": ""
    },
    {
        "code": "8136",
        "name": "Gattikon",
        "": ""
    },
    {
        "code": "8142",
        "name": "Uitikon Waldegg",
        "": ""
    },
    {
        "code": "8143",
        "name": "Uetliberg",
        "": ""
    },
    {
        "code": "8143",
        "name": "Stallikon",
        "": ""
    },
    {
        "code": "8152",
        "name": "Glattpark (Opfikon)",
        "": ""
    },
    {
        "code": "8152",
        "name": "Glattbrugg",
        "": ""
    },
    {
        "code": "8152",
        "name": "Opfikon",
        "": ""
    },
    {
        "code": "8153",
        "name": "Rümlang",
        "": ""
    },
    {
        "code": "8154",
        "name": "Oberglatt ZH",
        "": ""
    },
    {
        "code": "8155",
        "name": "Niederhasli",
        "": ""
    },
    {
        "code": "8156",
        "name": "Oberhasli",
        "": ""
    },
    {
        "code": "8157",
        "name": "Dielsdorf",
        "": ""
    },
    {
        "code": "8158",
        "name": "Regensberg",
        "": ""
    },
    {
        "code": "8162",
        "name": "Steinmaur",
        "": ""
    },
    {
        "code": "8164",
        "name": "Bachs",
        "": ""
    },
    {
        "code": "8165",
        "name": "Oberweningen",
        "": ""
    },
    {
        "code": "8165",
        "name": "Schleinikon",
        "": ""
    },
    {
        "code": "8165",
        "name": "Schöfflisdorf",
        "": ""
    },
    {
        "code": "8166",
        "name": "Niederweningen",
        "": ""
    },
    {
        "code": "8172",
        "name": "Niederglatt ZH",
        "": ""
    },
    {
        "code": "8173",
        "name": "Neerach",
        "": ""
    },
    {
        "code": "8174",
        "name": "Stadel b. Niederglatt",
        "": ""
    },
    {
        "code": "8175",
        "name": "Windlach",
        "": ""
    },
    {
        "code": "8180",
        "name": "Bülach",
        "": ""
    },
    {
        "code": "8181",
        "name": "Höri",
        "": ""
    },
    {
        "code": "8182",
        "name": "Hochfelden",
        "": ""
    },
    {
        "code": "8184",
        "name": "Bachenbülach",
        "": ""
    },
    {
        "code": "8185",
        "name": "Winkel",
        "": ""
    },
    {
        "code": "8187",
        "name": "Weiach",
        "": ""
    },
    {
        "code": "8192",
        "name": "Zweidlen",
        "": ""
    },
    {
        "code": "8192",
        "name": "Glattfelden",
        "": ""
    },
    {
        "code": "8193",
        "name": "Eglisau",
        "": ""
    },
    {
        "code": "8194",
        "name": "Hüntwangen",
        "": ""
    },
    {
        "code": "8195",
        "name": "Wasterkingen",
        "": ""
    },
    {
        "code": "8196",
        "name": "Wil ZH",
        "": ""
    },
    {
        "code": "8197",
        "name": "Rafz",
        "": ""
    },
    {
        "code": "8200",
        "name": "Schaffhausen",
        "": ""
    },
    {
        "code": "8203",
        "name": "Schaffhausen",
        "": ""
    },
    {
        "code": "8207",
        "name": "Schaffhausen",
        "": ""
    },
    {
        "code": "8208",
        "name": "Schaffhausen",
        "": ""
    },
    {
        "code": "8212",
        "name": "Neuhausen am Rheinfall",
        "": ""
    },
    {
        "code": "8212",
        "name": "Nohl",
        "": ""
    },
    {
        "code": "8213",
        "name": "Neunkirch",
        "": ""
    },
    {
        "code": "8214",
        "name": "Gächlingen",
        "": ""
    },
    {
        "code": "8215",
        "name": "Hallau",
        "": ""
    },
    {
        "code": "8216",
        "name": "Oberhallau",
        "": ""
    },
    {
        "code": "8217",
        "name": "Wilchingen",
        "": ""
    },
    {
        "code": "8218",
        "name": "Osterfingen",
        "": ""
    },
    {
        "code": "8219",
        "name": "Trasadingen",
        "": ""
    },
    {
        "code": "8222",
        "name": "Beringen",
        "": ""
    },
    {
        "code": "8223",
        "name": "Guntmadingen",
        "": ""
    },
    {
        "code": "8224",
        "name": "Löhningen",
        "": ""
    },
    {
        "code": "8225",
        "name": "Siblingen",
        "": ""
    },
    {
        "code": "8226",
        "name": "Schleitheim",
        "": ""
    },
    {
        "code": "8228",
        "name": "Beggingen",
        "": ""
    },
    {
        "code": "8231",
        "name": "Hemmental",
        "": ""
    },
    {
        "code": "8232",
        "name": "Merishausen",
        "": ""
    },
    {
        "code": "8233",
        "name": "Bargen SH",
        "": ""
    },
    {
        "code": "8234",
        "name": "Stetten SH",
        "": ""
    },
    {
        "code": "8235",
        "name": "Lohn SH",
        "": ""
    },
    {
        "code": "8236",
        "name": "Opfertshofen SH",
        "": ""
    },
    {
        "code": "8236",
        "name": "Büttenhardt",
        "": ""
    },
    {
        "code": "8238",
        "name": "Büsingen",
        "": ""
    },
    {
        "code": "8239",
        "name": "Dörflingen",
        "": ""
    },
    {
        "code": "8240",
        "name": "Thayngen",
        "": ""
    },
    {
        "code": "8241",
        "name": "Barzheim",
        "": ""
    },
    {
        "code": "8242",
        "name": "Hofen SH",
        "": ""
    },
    {
        "code": "8242",
        "name": "Bibern SH",
        "": ""
    },
    {
        "code": "8243",
        "name": "Altdorf SH",
        "": ""
    },
    {
        "code": "8245",
        "name": "Feuerthalen",
        "": ""
    },
    {
        "code": "8246",
        "name": "Langwiesen",
        "": ""
    },
    {
        "code": "8247",
        "name": "Flurlingen",
        "": ""
    },
    {
        "code": "8248",
        "name": "Uhwiesen",
        "": ""
    },
    {
        "code": "8252",
        "name": "Schlatt TG",
        "": ""
    },
    {
        "code": "8253",
        "name": "Willisdorf",
        "": ""
    },
    {
        "code": "8253",
        "name": "Diessenhofen",
        "": ""
    },
    {
        "code": "8254",
        "name": "Basadingen",
        "": ""
    },
    {
        "code": "8255",
        "name": "Schlattingen",
        "": ""
    },
    {
        "code": "8259",
        "name": "Kaltenbach",
        "": ""
    },
    {
        "code": "8259",
        "name": "Etzwilen",
        "": ""
    },
    {
        "code": "8259",
        "name": "Wagenhausen",
        "": ""
    },
    {
        "code": "8259",
        "name": "Rheinklingen",
        "": ""
    },
    {
        "code": "8260",
        "name": "Stein am Rhein",
        "": ""
    },
    {
        "code": "8261",
        "name": "Hemishofen",
        "": ""
    },
    {
        "code": "8262",
        "name": "Ramsen",
        "": ""
    },
    {
        "code": "8263",
        "name": "Buch SH",
        "": ""
    },
    {
        "code": "8264",
        "name": "Eschenz",
        "": ""
    },
    {
        "code": "8265",
        "name": "Mammern",
        "": ""
    },
    {
        "code": "8266",
        "name": "Steckborn",
        "": ""
    },
    {
        "code": "8267",
        "name": "Berlingen",
        "": ""
    },
    {
        "code": "8268",
        "name": "Salenstein",
        "": ""
    },
    {
        "code": "8268",
        "name": "Mannenbach-Salenstein",
        "": ""
    },
    {
        "code": "8269",
        "name": "Fruthwilen",
        "": ""
    },
    {
        "code": "8272",
        "name": "Ermatingen",
        "": ""
    },
    {
        "code": "8273",
        "name": "Triboltingen",
        "": ""
    },
    {
        "code": "8274",
        "name": "Gottlieben",
        "": ""
    },
    {
        "code": "8274",
        "name": "Tägerwilen",
        "": ""
    },
    {
        "code": "8280",
        "name": "Kreuzlingen",
        "": ""
    },
    {
        "code": "8302",
        "name": "Kloten",
        "": ""
    },
    {
        "code": "8303",
        "name": "Bassersdorf",
        "": ""
    },
    {
        "code": "8304",
        "name": "Wallisellen",
        "": ""
    },
    {
        "code": "8305",
        "name": "Dietlikon",
        "": ""
    },
    {
        "code": "8306",
        "name": "Brüttisellen",
        "": ""
    },
    {
        "code": "8307",
        "name": "Ottikon b. Kemptthal",
        "": ""
    },
    {
        "code": "8307",
        "name": "Effretikon",
        "": ""
    },
    {
        "code": "8308",
        "name": "Agasul",
        "": ""
    },
    {
        "code": "8308",
        "name": "Illnau",
        "": ""
    },
    {
        "code": "8309",
        "name": "Nürensdorf",
        "": ""
    },
    {
        "code": "8310",
        "name": "Kemptthal",
        "": ""
    },
    {
        "code": "8310",
        "name": "Grafstal",
        "": ""
    },
    {
        "code": "8311",
        "name": "Brütten",
        "": ""
    },
    {
        "code": "8312",
        "name": "Winterberg ZH",
        "": ""
    },
    {
        "code": "8314",
        "name": "Kyburg",
        "": ""
    },
    {
        "code": "8315",
        "name": "Lindau",
        "": ""
    },
    {
        "code": "8317",
        "name": "Tagelswangen",
        "": ""
    },
    {
        "code": "8320",
        "name": "Fehraltorf",
        "": ""
    },
    {
        "code": "8322",
        "name": "Madetswil",
        "": ""
    },
    {
        "code": "8330",
        "name": "Hermatswil",
        "": ""
    },
    {
        "code": "8330",
        "name": "Pfäffikon ZH",
        "": ""
    },
    {
        "code": "8331",
        "name": "Auslikon",
        "": ""
    },
    {
        "code": "8332",
        "name": "Russikon",
        "": ""
    },
    {
        "code": "8335",
        "name": "Hittnau",
        "": ""
    },
    {
        "code": "8340",
        "name": "Hinwil",
        "": ""
    },
    {
        "code": "8342",
        "name": "Wernetshausen",
        "": ""
    },
    {
        "code": "8344",
        "name": "Bäretswil",
        "": ""
    },
    {
        "code": "8345",
        "name": "Adetswil",
        "": ""
    },
    {
        "code": "8352",
        "name": "Ricketwil (Winterthur)",
        "": ""
    },
    {
        "code": "8352",
        "name": "Elsau",
        "": ""
    },
    {
        "code": "8353",
        "name": "Elgg",
        "": ""
    },
    {
        "code": "8354",
        "name": "Hofstetten ZH",
        "": ""
    },
    {
        "code": "8355",
        "name": "Aadorf",
        "": ""
    },
    {
        "code": "8356",
        "name": "Ettenhausen TG",
        "": ""
    },
    {
        "code": "8357",
        "name": "Guntershausen b. Aadorf",
        "": ""
    },
    {
        "code": "8360",
        "name": "Wallenwil",
        "": ""
    },
    {
        "code": "8360",
        "name": "Eschlikon TG",
        "": ""
    },
    {
        "code": "8362",
        "name": "Balterswil",
        "": ""
    },
    {
        "code": "8363",
        "name": "Bichelsee",
        "": ""
    },
    {
        "code": "8370",
        "name": "Busswil TG",
        "": ""
    },
    {
        "code": "8370",
        "name": "Sirnach",
        "": ""
    },
    {
        "code": "8372",
        "name": "Wiezikon b. Sirnach",
        "": ""
    },
    {
        "code": "8374",
        "name": "Oberwangen TG",
        "": ""
    },
    {
        "code": "8374",
        "name": "Dussnang",
        "": ""
    },
    {
        "code": "8376",
        "name": "Fischingen",
        "": ""
    },
    {
        "code": "8376",
        "name": "Au TG",
        "": ""
    },
    {
        "code": "8400",
        "name": "Winterthur",
        "": ""
    },
    {
        "code": "8404",
        "name": "Reutlingen (Winterthur)",
        "": ""
    },
    {
        "code": "8404",
        "name": "Stadel (Winterthur)",
        "": ""
    },
    {
        "code": "8404",
        "name": "Winterthur",
        "": ""
    },
    {
        "code": "8405",
        "name": "Winterthur",
        "": ""
    },
    {
        "code": "8406",
        "name": "Winterthur",
        "": ""
    },
    {
        "code": "8408",
        "name": "Winterthur",
        "": ""
    },
    {
        "code": "8409",
        "name": "Winterthur",
        "": ""
    },
    {
        "code": "8412",
        "name": "Aesch (Neftenbach)",
        "": ""
    },
    {
        "code": "8412",
        "name": "Riet (Neftenbach)",
        "": ""
    },
    {
        "code": "8412",
        "name": "Hünikon (Neftenbach)",
        "": ""
    },
    {
        "code": "8413",
        "name": "Neftenbach",
        "": ""
    },
    {
        "code": "8414",
        "name": "Buch am Irchel",
        "": ""
    },
    {
        "code": "8415",
        "name": "Berg am Irchel",
        "": ""
    },
    {
        "code": "8415",
        "name": "Gräslikon",
        "": ""
    },
    {
        "code": "8416",
        "name": "Flaach",
        "": ""
    },
    {
        "code": "8418",
        "name": "Schlatt b. Winterthur",
        "": ""
    },
    {
        "code": "8421",
        "name": "Dättlikon",
        "": ""
    },
    {
        "code": "8422",
        "name": "Pfungen",
        "": ""
    },
    {
        "code": "8424",
        "name": "Embrach",
        "": ""
    },
    {
        "code": "8425",
        "name": "Oberembrach",
        "": ""
    },
    {
        "code": "8426",
        "name": "Lufingen",
        "": ""
    },
    {
        "code": "8427",
        "name": "Freienstein",
        "": ""
    },
    {
        "code": "8427",
        "name": "Rorbas",
        "": ""
    },
    {
        "code": "8428",
        "name": "Teufen ZH",
        "": ""
    },
    {
        "code": "8442",
        "name": "Hettlingen",
        "": ""
    },
    {
        "code": "8444",
        "name": "Henggart",
        "": ""
    },
    {
        "code": "8447",
        "name": "Dachsen",
        "": ""
    },
    {
        "code": "8450",
        "name": "Andelfingen",
        "": ""
    },
    {
        "code": "8451",
        "name": "Kleinandelfingen",
        "": ""
    },
    {
        "code": "8452",
        "name": "Adlikon b. Andelfingen",
        "": ""
    },
    {
        "code": "8453",
        "name": "Alten",
        "": ""
    },
    {
        "code": "8454",
        "name": "Buchberg",
        "": ""
    },
    {
        "code": "8455",
        "name": "Rüdlingen",
        "": ""
    },
    {
        "code": "8457",
        "name": "Humlikon",
        "": ""
    },
    {
        "code": "8458",
        "name": "Dorf",
        "": ""
    },
    {
        "code": "8459",
        "name": "Volken",
        "": ""
    },
    {
        "code": "8460",
        "name": "Marthalen",
        "": ""
    },
    {
        "code": "8461",
        "name": "Oerlingen",
        "": ""
    },
    {
        "code": "8462",
        "name": "Rheinau",
        "": ""
    },
    {
        "code": "8463",
        "name": "Benken ZH",
        "": ""
    },
    {
        "code": "8464",
        "name": "Ellikon am Rhein",
        "": ""
    },
    {
        "code": "8465",
        "name": "Rudolfingen",
        "": ""
    },
    {
        "code": "8465",
        "name": "Wildensbuch",
        "": ""
    },
    {
        "code": "8466",
        "name": "Trüllikon",
        "": ""
    },
    {
        "code": "8467",
        "name": "Truttikon",
        "": ""
    },
    {
        "code": "8468",
        "name": "Waltalingen",
        "": ""
    },
    {
        "code": "8468",
        "name": "Guntalingen",
        "": ""
    },
    {
        "code": "8471",
        "name": "Rutschwil (Dägerlen)",
        "": ""
    },
    {
        "code": "8471",
        "name": "Dägerlen",
        "": ""
    },
    {
        "code": "8471",
        "name": "Oberwil (Dägerlen)",
        "": ""
    },
    {
        "code": "8471",
        "name": "Berg (Dägerlen)",
        "": ""
    },
    {
        "code": "8471",
        "name": "Bänk (Dägerlen)",
        "": ""
    },
    {
        "code": "8472",
        "name": "Seuzach",
        "": ""
    },
    {
        "code": "8474",
        "name": "Dinhard",
        "": ""
    },
    {
        "code": "8475",
        "name": "Ossingen",
        "": ""
    },
    {
        "code": "8476",
        "name": "Unterstammheim",
        "": ""
    },
    {
        "code": "8477",
        "name": "Oberstammheim",
        "": ""
    },
    {
        "code": "8478",
        "name": "Thalheim an der Thur",
        "": ""
    },
    {
        "code": "8479",
        "name": "Altikon",
        "": ""
    },
    {
        "code": "8482",
        "name": "Sennhof (Winterthur)",
        "": ""
    },
    {
        "code": "8483",
        "name": "Kollbrunn",
        "": ""
    },
    {
        "code": "8484",
        "name": "Neschwil",
        "": ""
    },
    {
        "code": "8484",
        "name": "Theilingen",
        "": ""
    },
    {
        "code": "8484",
        "name": "Weisslingen",
        "": ""
    },
    {
        "code": "8486",
        "name": "Rikon im Tösstal",
        "": ""
    },
    {
        "code": "8487",
        "name": "Rämismühle",
        "": ""
    },
    {
        "code": "8487",
        "name": "Zell ZH",
        "": ""
    },
    {
        "code": "8488",
        "name": "Turbenthal",
        "": ""
    },
    {
        "code": "8489",
        "name": "Wildberg",
        "": ""
    },
    {
        "code": "8492",
        "name": "Wila",
        "": ""
    },
    {
        "code": "8493",
        "name": "Saland",
        "": ""
    },
    {
        "code": "8494",
        "name": "Bauma",
        "": ""
    },
    {
        "code": "8495",
        "name": "Schmidrüti",
        "": ""
    },
    {
        "code": "8496",
        "name": "Steg im Tösstal",
        "": ""
    },
    {
        "code": "8497",
        "name": "Fischenthal",
        "": ""
    },
    {
        "code": "8498",
        "name": "Gibswil-Ried",
        "": ""
    },
    {
        "code": "8499",
        "name": "Sternenberg",
        "": ""
    },
    {
        "code": "8500",
        "name": "Frauenfeld",
        "": ""
    },
    {
        "code": "8500",
        "name": "Gerlikon",
        "": ""
    },
    {
        "code": "8505",
        "name": "Dettighofen",
        "": ""
    },
    {
        "code": "8505",
        "name": "Pfyn",
        "": ""
    },
    {
        "code": "8506",
        "name": "Lanzenneunforn",
        "": ""
    },
    {
        "code": "8507",
        "name": "Hörhausen",
        "": ""
    },
    {
        "code": "8508",
        "name": "Homburg",
        "": ""
    },
    {
        "code": "8512",
        "name": "Lustdorf",
        "": ""
    },
    {
        "code": "8512",
        "name": "Wetzikon TG",
        "": ""
    },
    {
        "code": "8512",
        "name": "Thundorf",
        "": ""
    },
    {
        "code": "8514",
        "name": "Amlikon-Bissegg",
        "": ""
    },
    {
        "code": "8522",
        "name": "Häuslenen",
        "": ""
    },
    {
        "code": "8522",
        "name": "Aawangen",
        "": ""
    },
    {
        "code": "8523",
        "name": "Hagenbuch ZH",
        "": ""
    },
    {
        "code": "8524",
        "name": "Buch b. Frauenfeld",
        "": ""
    },
    {
        "code": "8524",
        "name": "Uesslingen",
        "": ""
    },
    {
        "code": "8525",
        "name": "Niederneunforn",
        "": ""
    },
    {
        "code": "8525",
        "name": "Wilen b. Neunforn",
        "": ""
    },
    {
        "code": "8526",
        "name": "Oberneunforn",
        "": ""
    },
    {
        "code": "8532",
        "name": "Weiningen TG",
        "": ""
    },
    {
        "code": "8532",
        "name": "Warth",
        "": ""
    },
    {
        "code": "8535",
        "name": "Herdern",
        "": ""
    },
    {
        "code": "8536",
        "name": "Hüttwilen",
        "": ""
    },
    {
        "code": "8537",
        "name": "Nussbaumen TG",
        "": ""
    },
    {
        "code": "8537",
        "name": "Uerschhausen",
        "": ""
    },
    {
        "code": "8542",
        "name": "Wiesendangen",
        "": ""
    },
    {
        "code": "8543",
        "name": "Bertschikon",
        "": ""
    },
    {
        "code": "8543",
        "name": "Gundetswil",
        "": ""
    },
    {
        "code": "8543",
        "name": "Kefikon ZH",
        "": ""
    },
    {
        "code": "8544",
        "name": "Attikon",
        "": ""
    },
    {
        "code": "8545",
        "name": "Rickenbach ZH",
        "": ""
    },
    {
        "code": "8545",
        "name": "Rickenbach Sulz",
        "": ""
    },
    {
        "code": "8546",
        "name": "Kefikon TG",
        "": ""
    },
    {
        "code": "8546",
        "name": "Islikon",
        "": ""
    },
    {
        "code": "8546",
        "name": "Menzengrüt",
        "": ""
    },
    {
        "code": "8547",
        "name": "Gachnang",
        "": ""
    },
    {
        "code": "8548",
        "name": "Ellikon an der Thur",
        "": ""
    },
    {
        "code": "8552",
        "name": "Felben-Wellhausen",
        "": ""
    },
    {
        "code": "8553",
        "name": "Eschikofen",
        "": ""
    },
    {
        "code": "8553",
        "name": "Harenwilen",
        "": ""
    },
    {
        "code": "8553",
        "name": "Mettendorf TG",
        "": ""
    },
    {
        "code": "8553",
        "name": "Hüttlingen",
        "": ""
    },
    {
        "code": "8554",
        "name": "Müllheim-Wigoltingen",
        "": ""
    },
    {
        "code": "8554",
        "name": "Bonau",
        "": ""
    },
    {
        "code": "8555",
        "name": "Müllheim Dorf",
        "": ""
    },
    {
        "code": "8556",
        "name": "Engwang",
        "": ""
    },
    {
        "code": "8556",
        "name": "Illhart",
        "": ""
    },
    {
        "code": "8556",
        "name": "Lamperswil TG",
        "": ""
    },
    {
        "code": "8556",
        "name": "Wigoltingen",
        "": ""
    },
    {
        "code": "8558",
        "name": "Raperswilen",
        "": ""
    },
    {
        "code": "8560",
        "name": "Märstetten",
        "": ""
    },
    {
        "code": "8561",
        "name": "Ottoberg",
        "": ""
    },
    {
        "code": "8564",
        "name": "Lipperswil",
        "": ""
    },
    {
        "code": "8564",
        "name": "Engwilen",
        "": ""
    },
    {
        "code": "8564",
        "name": "Wäldi",
        "": ""
    },
    {
        "code": "8564",
        "name": "Sonterswil",
        "": ""
    },
    {
        "code": "8564",
        "name": "Wagerswil",
        "": ""
    },
    {
        "code": "8564",
        "name": "Hattenhausen",
        "": ""
    },
    {
        "code": "8564",
        "name": "Gunterswilen",
        "": ""
    },
    {
        "code": "8564",
        "name": "Hefenhausen",
        "": ""
    },
    {
        "code": "8565",
        "name": "Hugelshofen",
        "": ""
    },
    {
        "code": "8566",
        "name": "Dotnacht",
        "": ""
    },
    {
        "code": "8566",
        "name": "Neuwilen",
        "": ""
    },
    {
        "code": "8566",
        "name": "Ellighausen",
        "": ""
    },
    {
        "code": "8566",
        "name": "Lippoldswilen",
        "": ""
    },
    {
        "code": "8570",
        "name": "Weinfelden",
        "": ""
    },
    {
        "code": "8572",
        "name": "Andhausen",
        "": ""
    },
    {
        "code": "8572",
        "name": "Graltshausen",
        "": ""
    },
    {
        "code": "8572",
        "name": "Guntershausen b. Berg",
        "": ""
    },
    {
        "code": "8572",
        "name": "Berg TG",
        "": ""
    },
    {
        "code": "8573",
        "name": "Alterswilen",
        "": ""
    },
    {
        "code": "8573",
        "name": "Altishausen",
        "": ""
    },
    {
        "code": "8573",
        "name": "Siegershausen",
        "": ""
    },
    {
        "code": "8574",
        "name": "Illighausen",
        "": ""
    },
    {
        "code": "8574",
        "name": "Lengwil-Oberhofen",
        "": ""
    },
    {
        "code": "8575",
        "name": "Istighofen",
        "": ""
    },
    {
        "code": "8575",
        "name": "Bürglen TG",
        "": ""
    },
    {
        "code": "8576",
        "name": "Mauren TG",
        "": ""
    },
    {
        "code": "8577",
        "name": "Toos",
        "": ""
    },
    {
        "code": "8577",
        "name": "Schönholzerswilen",
        "": ""
    },
    {
        "code": "8580",
        "name": "Sommeri",
        "": ""
    },
    {
        "code": "8580",
        "name": "Hagenwil b. Amriswil",
        "": ""
    },
    {
        "code": "8580",
        "name": "Hefenhofen",
        "": ""
    },
    {
        "code": "8580",
        "name": "Amriswil",
        "": ""
    },
    {
        "code": "8581",
        "name": "Schocherswil",
        "": ""
    },
    {
        "code": "8582",
        "name": "Dozwil",
        "": ""
    },
    {
        "code": "8583",
        "name": "Götighofen",
        "": ""
    },
    {
        "code": "8583",
        "name": "Donzhausen",
        "": ""
    },
    {
        "code": "8583",
        "name": "Sulgen",
        "": ""
    },
    {
        "code": "8584",
        "name": "Leimbach TG",
        "": ""
    },
    {
        "code": "8584",
        "name": "Opfershofen TG",
        "": ""
    },
    {
        "code": "8585",
        "name": "Happerswil",
        "": ""
    },
    {
        "code": "8585",
        "name": "Eggethof",
        "": ""
    },
    {
        "code": "8585",
        "name": "Zuben",
        "": ""
    },
    {
        "code": "8585",
        "name": "Schönenbaumgarten",
        "": ""
    },
    {
        "code": "8585",
        "name": "Herrenhof",
        "": ""
    },
    {
        "code": "8585",
        "name": "Birwinken",
        "": ""
    },
    {
        "code": "8585",
        "name": "Klarsreuti",
        "": ""
    },
    {
        "code": "8585",
        "name": "Mattwil",
        "": ""
    },
    {
        "code": "8585",
        "name": "Langrickenbach",
        "": ""
    },
    {
        "code": "8586",
        "name": "Andwil TG",
        "": ""
    },
    {
        "code": "8586",
        "name": "Kümmertshausen",
        "": ""
    },
    {
        "code": "8586",
        "name": "Riedt b. Erlen",
        "": ""
    },
    {
        "code": "8586",
        "name": "Buchackern",
        "": ""
    },
    {
        "code": "8586",
        "name": "Engishofen",
        "": ""
    },
    {
        "code": "8586",
        "name": "Ennetaach",
        "": ""
    },
    {
        "code": "8586",
        "name": "Buch b. Kümmertshausen",
        "": ""
    },
    {
        "code": "8586",
        "name": "Erlen",
        "": ""
    },
    {
        "code": "8587",
        "name": "Oberaach",
        "": ""
    },
    {
        "code": "8588",
        "name": "Zihlschlacht",
        "": ""
    },
    {
        "code": "8589",
        "name": "Sitterdorf",
        "": ""
    },
    {
        "code": "8590",
        "name": "Romanshorn",
        "": ""
    },
    {
        "code": "8592",
        "name": "Uttwil",
        "": ""
    },
    {
        "code": "8593",
        "name": "Kesswil",
        "": ""
    },
    {
        "code": "8594",
        "name": "Güttingen",
        "": ""
    },
    {
        "code": "8595",
        "name": "Altnau",
        "": ""
    },
    {
        "code": "8596",
        "name": "Münsterlingen",
        "": ""
    },
    {
        "code": "8596",
        "name": "Scherzingen",
        "": ""
    },
    {
        "code": "8597",
        "name": "Landschlacht",
        "": ""
    },
    {
        "code": "8598",
        "name": "Bottighofen",
        "": ""
    },
    {
        "code": "8599",
        "name": "Salmsach",
        "": ""
    },
    {
        "code": "8600",
        "name": "Dübendorf",
        "": ""
    },
    {
        "code": "8602",
        "name": "Wangen b. Dübendorf",
        "": ""
    },
    {
        "code": "8603",
        "name": "Schwerzenbach",
        "": ""
    },
    {
        "code": "8604",
        "name": "Volketswil",
        "": ""
    },
    {
        "code": "8605",
        "name": "Gutenswil",
        "": ""
    },
    {
        "code": "8606",
        "name": "Nänikon",
        "": ""
    },
    {
        "code": "8606",
        "name": "Greifensee",
        "": ""
    },
    {
        "code": "8607",
        "name": "Aathal-Seegräben",
        "": ""
    },
    {
        "code": "8608",
        "name": "Bubikon",
        "": ""
    },
    {
        "code": "8610",
        "name": "Uster",
        "": ""
    },
    {
        "code": "8614",
        "name": "Sulzbach",
        "": ""
    },
    {
        "code": "8614",
        "name": "Bertschikon (Gossau ZH)",
        "": ""
    },
    {
        "code": "8615",
        "name": "Wermatswil",
        "": ""
    },
    {
        "code": "8615",
        "name": "Freudwil",
        "": ""
    },
    {
        "code": "8616",
        "name": "Riedikon",
        "": ""
    },
    {
        "code": "8617",
        "name": "Mönchaltorf",
        "": ""
    },
    {
        "code": "8618",
        "name": "Oetwil am See",
        "": ""
    },
    {
        "code": "8620",
        "name": "Wetzikon ZH",
        "": ""
    },
    {
        "code": "8623",
        "name": "Wetzikon ZH",
        "": ""
    },
    {
        "code": "8624",
        "name": "Grüt (Gossau ZH)",
        "": ""
    },
    {
        "code": "8625",
        "name": "Gossau ZH",
        "": ""
    },
    {
        "code": "8626",
        "name": "Ottikon (Gossau ZH)",
        "": ""
    },
    {
        "code": "8627",
        "name": "Grüningen",
        "": ""
    },
    {
        "code": "8630",
        "name": "Rüti ZH",
        "": ""
    },
    {
        "code": "8632",
        "name": "Tann",
        "": ""
    },
    {
        "code": "8633",
        "name": "Wolfhausen",
        "": ""
    },
    {
        "code": "8634",
        "name": "Hombrechtikon",
        "": ""
    },
    {
        "code": "8635",
        "name": "Dürnten",
        "": ""
    },
    {
        "code": "8636",
        "name": "Wald ZH",
        "": ""
    },
    {
        "code": "8637",
        "name": "Laupen ZH",
        "": ""
    },
    {
        "code": "8638",
        "name": "Goldingen",
        "": ""
    },
    {
        "code": "8639",
        "name": "Faltigberg",
        "": ""
    },
    {
        "code": "8640",
        "name": "Rapperswil SG",
        "": ""
    },
    {
        "code": "8640",
        "name": "Hurden",
        "": ""
    },
    {
        "code": "8645",
        "name": "Jona",
        "": ""
    },
    {
        "code": "8646",
        "name": "Wagen",
        "": ""
    },
    {
        "code": "8700",
        "name": "Küsnacht ZH",
        "": ""
    },
    {
        "code": "8702",
        "name": "Zollikon",
        "": ""
    },
    {
        "code": "8703",
        "name": "Erlenbach ZH",
        "": ""
    },
    {
        "code": "8704",
        "name": "Herrliberg",
        "": ""
    },
    {
        "code": "8706",
        "name": "Meilen",
        "": ""
    },
    {
        "code": "8707",
        "name": "Uetikon am See",
        "": ""
    },
    {
        "code": "8708",
        "name": "Männedorf",
        "": ""
    },
    {
        "code": "8712",
        "name": "Stäfa",
        "": ""
    },
    {
        "code": "8713",
        "name": "Uerikon",
        "": ""
    },
    {
        "code": "8714",
        "name": "Feldbach",
        "": ""
    },
    {
        "code": "8715",
        "name": "Bollingen",
        "": ""
    },
    {
        "code": "8716",
        "name": "Schmerikon",
        "": ""
    },
    {
        "code": "8717",
        "name": "Benken SG",
        "": ""
    },
    {
        "code": "8718",
        "name": "Schänis",
        "": ""
    },
    {
        "code": "8722",
        "name": "Kaltbrunn",
        "": ""
    },
    {
        "code": "8723",
        "name": "Rufi",
        "": ""
    },
    {
        "code": "8725",
        "name": "Gebertingen",
        "": ""
    },
    {
        "code": "8725",
        "name": "Ernetschwil",
        "": ""
    },
    {
        "code": "8726",
        "name": "Ricken SG",
        "": ""
    },
    {
        "code": "8727",
        "name": "Walde SG",
        "": ""
    },
    {
        "code": "8730",
        "name": "Uznach",
        "": ""
    },
    {
        "code": "8732",
        "name": "Neuhaus SG",
        "": ""
    },
    {
        "code": "8733",
        "name": "Eschenbach SG",
        "": ""
    },
    {
        "code": "8734",
        "name": "Ermenswil",
        "": ""
    },
    {
        "code": "8735",
        "name": "Rüeterswil",
        "": ""
    },
    {
        "code": "8735",
        "name": "St. Gallenkappel",
        "": ""
    },
    {
        "code": "8737",
        "name": "Gommiswald",
        "": ""
    },
    {
        "code": "8738",
        "name": "Uetliburg SG",
        "": ""
    },
    {
        "code": "8739",
        "name": "Rieden SG",
        "": ""
    },
    {
        "code": "8750",
        "name": "Klöntal",
        "": ""
    },
    {
        "code": "8750",
        "name": "Glarus",
        "": ""
    },
    {
        "code": "8750",
        "name": "Riedern",
        "": ""
    },
    {
        "code": "8751",
        "name": "Urnerboden",
        "": ""
    },
    {
        "code": "8752",
        "name": "Näfels",
        "": ""
    },
    {
        "code": "8753",
        "name": "Mollis",
        "": ""
    },
    {
        "code": "8754",
        "name": "Netstal",
        "": ""
    },
    {
        "code": "8755",
        "name": "Ennenda",
        "": ""
    },
    {
        "code": "8756",
        "name": "Mitlödi",
        "": ""
    },
    {
        "code": "8757",
        "name": "Filzbach",
        "": ""
    },
    {
        "code": "8758",
        "name": "Obstalden",
        "": ""
    },
    {
        "code": "8762",
        "name": "Schwändi b. Schwanden",
        "": ""
    },
    {
        "code": "8762",
        "name": "Sool",
        "": ""
    },
    {
        "code": "8762",
        "name": "Schwanden GL",
        "": ""
    },
    {
        "code": "8765",
        "name": "Engi",
        "": ""
    },
    {
        "code": "8766",
        "name": "Matt",
        "": ""
    },
    {
        "code": "8767",
        "name": "Elm",
        "": ""
    },
    {
        "code": "8772",
        "name": "Nidfurn",
        "": ""
    },
    {
        "code": "8773",
        "name": "Haslen GL",
        "": ""
    },
    {
        "code": "8774",
        "name": "Leuggelbach",
        "": ""
    },
    {
        "code": "8775",
        "name": "Luchsingen",
        "": ""
    },
    {
        "code": "8775",
        "name": "Hätzingen",
        "": ""
    },
    {
        "code": "8777",
        "name": "Diesbach GL",
        "": ""
    },
    {
        "code": "8777",
        "name": "Betschwanden",
        "": ""
    },
    {
        "code": "8782",
        "name": "Rüti GL",
        "": ""
    },
    {
        "code": "8783",
        "name": "Linthal",
        "": ""
    },
    {
        "code": "8784",
        "name": "Braunwald",
        "": ""
    },
    {
        "code": "8800",
        "name": "Thalwil",
        "": ""
    },
    {
        "code": "8802",
        "name": "Kilchberg ZH",
        "": ""
    },
    {
        "code": "8803",
        "name": "Rüschlikon",
        "": ""
    },
    {
        "code": "8804",
        "name": "Au ZH",
        "": ""
    },
    {
        "code": "8805",
        "name": "Richterswil",
        "": ""
    },
    {
        "code": "8806",
        "name": "Bäch SZ",
        "": ""
    },
    {
        "code": "8807",
        "name": "Freienbach",
        "": ""
    },
    {
        "code": "8808",
        "name": "Pfäffikon SZ",
        "": ""
    },
    {
        "code": "8810",
        "name": "Horgen",
        "": ""
    },
    {
        "code": "8815",
        "name": "Horgenberg",
        "": ""
    },
    {
        "code": "8816",
        "name": "Hirzel",
        "": ""
    },
    {
        "code": "8820",
        "name": "Wädenswil",
        "": ""
    },
    {
        "code": "8824",
        "name": "Schönenberg ZH",
        "": ""
    },
    {
        "code": "8825",
        "name": "Hütten",
        "": ""
    },
    {
        "code": "8832",
        "name": "Wilen b. Wollerau",
        "": ""
    },
    {
        "code": "8832",
        "name": "Wollerau",
        "": ""
    },
    {
        "code": "8833",
        "name": "Samstagern",
        "": ""
    },
    {
        "code": "8834",
        "name": "Schindellegi",
        "": ""
    },
    {
        "code": "8835",
        "name": "Feusisberg",
        "": ""
    },
    {
        "code": "8836",
        "name": "Bennau",
        "": ""
    },
    {
        "code": "8840",
        "name": "Trachslau",
        "": ""
    },
    {
        "code": "8840",
        "name": "Einsiedeln",
        "": ""
    },
    {
        "code": "8841",
        "name": "Gross",
        "": ""
    },
    {
        "code": "8842",
        "name": "Unteriberg",
        "": ""
    },
    {
        "code": "8843",
        "name": "Oberiberg",
        "": ""
    },
    {
        "code": "8844",
        "name": "Euthal",
        "": ""
    },
    {
        "code": "8845",
        "name": "Studen SZ",
        "": ""
    },
    {
        "code": "8846",
        "name": "Willerzell",
        "": ""
    },
    {
        "code": "8847",
        "name": "Egg SZ",
        "": ""
    },
    {
        "code": "8849",
        "name": "Alpthal",
        "": ""
    },
    {
        "code": "8852",
        "name": "Altendorf",
        "": ""
    },
    {
        "code": "8853",
        "name": "Lachen SZ",
        "": ""
    },
    {
        "code": "8854",
        "name": "Siebnen",
        "": ""
    },
    {
        "code": "8854",
        "name": "Galgenen",
        "": ""
    },
    {
        "code": "8855",
        "name": "Wangen SZ",
        "": ""
    },
    {
        "code": "8856",
        "name": "Tuggen",
        "": ""
    },
    {
        "code": "8857",
        "name": "Vorderthal",
        "": ""
    },
    {
        "code": "8858",
        "name": "Innerthal",
        "": ""
    },
    {
        "code": "8862",
        "name": "Schübelbach",
        "": ""
    },
    {
        "code": "8863",
        "name": "Buttikon SZ",
        "": ""
    },
    {
        "code": "8864",
        "name": "Reichenburg",
        "": ""
    },
    {
        "code": "8865",
        "name": "Bilten",
        "": ""
    },
    {
        "code": "8866",
        "name": "Ziegelbrücke",
        "": ""
    },
    {
        "code": "8867",
        "name": "Niederurnen",
        "": ""
    },
    {
        "code": "8868",
        "name": "Oberurnen",
        "": ""
    },
    {
        "code": "8872",
        "name": "Weesen",
        "": ""
    },
    {
        "code": "8873",
        "name": "Amden",
        "": ""
    },
    {
        "code": "8874",
        "name": "Mühlehorn",
        "": ""
    },
    {
        "code": "8877",
        "name": "Murg",
        "": ""
    },
    {
        "code": "8878",
        "name": "Quinten",
        "": ""
    },
    {
        "code": "8880",
        "name": "Walenstadt",
        "": ""
    },
    {
        "code": "8881",
        "name": "Knoblisbühl",
        "": ""
    },
    {
        "code": "8881",
        "name": "Tscherlach",
        "": ""
    },
    {
        "code": "8881",
        "name": "Walenstadtberg",
        "": ""
    },
    {
        "code": "8882",
        "name": "Unterterzen",
        "": ""
    },
    {
        "code": "8883",
        "name": "Quarten",
        "": ""
    },
    {
        "code": "8884",
        "name": "Oberterzen",
        "": ""
    },
    {
        "code": "8885",
        "name": "Mols",
        "": ""
    },
    {
        "code": "8886",
        "name": "Mädris-Vermol",
        "": ""
    },
    {
        "code": "8887",
        "name": "Mels",
        "": ""
    },
    {
        "code": "8888",
        "name": "Heiligkreuz (Mels)",
        "": ""
    },
    {
        "code": "8889",
        "name": "Plons",
        "": ""
    },
    {
        "code": "8890",
        "name": "Flums",
        "": ""
    },
    {
        "code": "8892",
        "name": "Berschis",
        "": ""
    },
    {
        "code": "8893",
        "name": "Flums Hochwiese",
        "": ""
    },
    {
        "code": "8894",
        "name": "Flumserberg Saxli",
        "": ""
    },
    {
        "code": "8895",
        "name": "Flumserberg Portels",
        "": ""
    },
    {
        "code": "8896",
        "name": "Flumserberg Bergheim",
        "": ""
    },
    {
        "code": "8897",
        "name": "Flumserberg Tannenheim",
        "": ""
    },
    {
        "code": "8898",
        "name": "Flumserberg Tannenbodenalp",
        "": ""
    },
    {
        "code": "8902",
        "name": "Urdorf",
        "": ""
    },
    {
        "code": "8903",
        "name": "Birmensdorf ZH",
        "": ""
    },
    {
        "code": "8904",
        "name": "Aesch ZH",
        "": ""
    },
    {
        "code": "8905",
        "name": "Islisberg",
        "": ""
    },
    {
        "code": "8905",
        "name": "Arni AG",
        "": ""
    },
    {
        "code": "8906",
        "name": "Bonstetten",
        "": ""
    },
    {
        "code": "8907",
        "name": "Wettswil",
        "": ""
    },
    {
        "code": "8908",
        "name": "Hedingen",
        "": ""
    },
    {
        "code": "8909",
        "name": "Zwillikon",
        "": ""
    },
    {
        "code": "8910",
        "name": "Affoltern am Albis",
        "": ""
    },
    {
        "code": "8911",
        "name": "Rifferswil",
        "": ""
    },
    {
        "code": "8912",
        "name": "Obfelden",
        "": ""
    },
    {
        "code": "8913",
        "name": "Ottenbach",
        "": ""
    },
    {
        "code": "8914",
        "name": "Aeugstertal",
        "": ""
    },
    {
        "code": "8914",
        "name": "Aeugst am Albis",
        "": ""
    },
    {
        "code": "8915",
        "name": "Hausen am Albis",
        "": ""
    },
    {
        "code": "8916",
        "name": "Jonen",
        "": ""
    },
    {
        "code": "8917",
        "name": "Oberlunkhofen",
        "": ""
    },
    {
        "code": "8918",
        "name": "Unterlunkhofen",
        "": ""
    },
    {
        "code": "8919",
        "name": "Rottenschwil",
        "": ""
    },
    {
        "code": "8925",
        "name": "Ebertswil",
        "": ""
    },
    {
        "code": "8926",
        "name": "Hauptikon",
        "": ""
    },
    {
        "code": "8926",
        "name": "Uerzlikon",
        "": ""
    },
    {
        "code": "8926",
        "name": "Kappel am Albis",
        "": ""
    },
    {
        "code": "8932",
        "name": "Mettmenstetten",
        "": ""
    },
    {
        "code": "8933",
        "name": "Maschwanden",
        "": ""
    },
    {
        "code": "8934",
        "name": "Knonau",
        "": ""
    },
    {
        "code": "8942",
        "name": "Oberrieden",
        "": ""
    },
    {
        "code": "8951",
        "name": "Fahrweid",
        "": ""
    },
    {
        "code": "8952",
        "name": "Schlieren",
        "": ""
    },
    {
        "code": "8953",
        "name": "Dietikon",
        "": ""
    },
    {
        "code": "8954",
        "name": "Geroldswil",
        "": ""
    },
    {
        "code": "8955",
        "name": "Oetwil an der Limmat",
        "": ""
    },
    {
        "code": "8956",
        "name": "Killwangen",
        "": ""
    },
    {
        "code": "8957",
        "name": "Spreitenbach",
        "": ""
    },
    {
        "code": "8962",
        "name": "Bergdietikon",
        "": ""
    },
    {
        "code": "8964",
        "name": "Rudolfstetten",
        "": ""
    },
    {
        "code": "8965",
        "name": "Berikon",
        "": ""
    },
    {
        "code": "8966",
        "name": "Oberwil-Lieli",
        "": ""
    },
    {
        "code": "8967",
        "name": "Widen",
        "": ""
    },
    {
        "code": "9000",
        "name": "St. Gallen",
        "": ""
    },
    {
        "code": "9007",
        "name": "St. Gallen",
        "": ""
    },
    {
        "code": "9008",
        "name": "St. Gallen",
        "": ""
    },
    {
        "code": "9010",
        "name": "St. Gallen",
        "": ""
    },
    {
        "code": "9011",
        "name": "St. Gallen",
        "": ""
    },
    {
        "code": "9012",
        "name": "St. Gallen",
        "": ""
    },
    {
        "code": "9014",
        "name": "St. Gallen",
        "": ""
    },
    {
        "code": "9015",
        "name": "St. Gallen",
        "": ""
    },
    {
        "code": "9016",
        "name": "St. Gallen",
        "": ""
    },
    {
        "code": "9030",
        "name": "Abtwil SG",
        "": ""
    },
    {
        "code": "9032",
        "name": "Engelburg",
        "": ""
    },
    {
        "code": "9033",
        "name": "Untereggen",
        "": ""
    },
    {
        "code": "9034",
        "name": "Eggersriet",
        "": ""
    },
    {
        "code": "9035",
        "name": "Grub AR",
        "": ""
    },
    {
        "code": "9036",
        "name": "Grub SG",
        "": ""
    },
    {
        "code": "9037",
        "name": "Speicherschwendi",
        "": ""
    },
    {
        "code": "9038",
        "name": "Rehetobel",
        "": ""
    },
    {
        "code": "9042",
        "name": "Speicher",
        "": ""
    },
    {
        "code": "9043",
        "name": "Trogen",
        "": ""
    },
    {
        "code": "9044",
        "name": "Wald AR",
        "": ""
    },
    {
        "code": "9050",
        "name": "Appenzell Eggerstanden",
        "": ""
    },
    {
        "code": "9050",
        "name": "Appenzell Enggenhütten",
        "": ""
    },
    {
        "code": "9050",
        "name": "Appenzell Meistersrüte",
        "": ""
    },
    {
        "code": "9050",
        "name": "Appenzell Steinegg",
        "": ""
    },
    {
        "code": "9050",
        "name": "Appenzell Schlatt",
        "": ""
    },
    {
        "code": "9050",
        "name": "Appenzell",
        "": ""
    },
    {
        "code": "9052",
        "name": "Niederteufen",
        "": ""
    },
    {
        "code": "9053",
        "name": "Teufen AR",
        "": ""
    },
    {
        "code": "9054",
        "name": "Haslen AI",
        "": ""
    },
    {
        "code": "9055",
        "name": "Bühler",
        "": ""
    },
    {
        "code": "9056",
        "name": "Gais",
        "": ""
    },
    {
        "code": "9057",
        "name": "Schwende",
        "": ""
    },
    {
        "code": "9057",
        "name": "Wasserauen",
        "": ""
    },
    {
        "code": "9057",
        "name": "Weissbad",
        "": ""
    },
    {
        "code": "9058",
        "name": "Brülisau",
        "": ""
    },
    {
        "code": "9062",
        "name": "Lustmühle",
        "": ""
    },
    {
        "code": "9063",
        "name": "Stein AR",
        "": ""
    },
    {
        "code": "9064",
        "name": "Hundwil",
        "": ""
    },
    {
        "code": "9100",
        "name": "Herisau",
        "": ""
    },
    {
        "code": "9103",
        "name": "Schwellbrunn",
        "": ""
    },
    {
        "code": "9104",
        "name": "Waldstatt",
        "": ""
    },
    {
        "code": "9105",
        "name": "Schönengrund",
        "": ""
    },
    {
        "code": "9107",
        "name": "Urnäsch",
        "": ""
    },
    {
        "code": "9108",
        "name": "Gontenbad",
        "": ""
    },
    {
        "code": "9108",
        "name": "Jakobsbad",
        "": ""
    },
    {
        "code": "9108",
        "name": "Gonten",
        "": ""
    },
    {
        "code": "9112",
        "name": "Schachen b. Herisau",
        "": ""
    },
    {
        "code": "9113",
        "name": "Degersheim",
        "": ""
    },
    {
        "code": "9114",
        "name": "Hoffeld",
        "": ""
    },
    {
        "code": "9115",
        "name": "Dicken",
        "": ""
    },
    {
        "code": "9116",
        "name": "Wolfertswil",
        "": ""
    },
    {
        "code": "9122",
        "name": "Ebersol",
        "": ""
    },
    {
        "code": "9122",
        "name": "Mogelsberg",
        "": ""
    },
    {
        "code": "9123",
        "name": "Nassen",
        "": ""
    },
    {
        "code": "9125",
        "name": "Brunnadern",
        "": ""
    },
    {
        "code": "9126",
        "name": "Necker",
        "": ""
    },
    {
        "code": "9127",
        "name": "St. Peterzell",
        "": ""
    },
    {
        "code": "9200",
        "name": "Gossau SG",
        "": ""
    },
    {
        "code": "9203",
        "name": "Niederwil SG",
        "": ""
    },
    {
        "code": "9204",
        "name": "Andwil SG",
        "": ""
    },
    {
        "code": "9205",
        "name": "Waldkirch",
        "": ""
    },
    {
        "code": "9212",
        "name": "Arnegg",
        "": ""
    },
    {
        "code": "9213",
        "name": "Hauptwil",
        "": ""
    },
    {
        "code": "9214",
        "name": "Kradolf",
        "": ""
    },
    {
        "code": "9215",
        "name": "Schönenberg an der Thur",
        "": ""
    },
    {
        "code": "9215",
        "name": "Buhwil",
        "": ""
    },
    {
        "code": "9216",
        "name": "Heldswil",
        "": ""
    },
    {
        "code": "9216",
        "name": "Hohentannen",
        "": ""
    },
    {
        "code": "9217",
        "name": "Neukirch an der Thur",
        "": ""
    },
    {
        "code": "9220",
        "name": "Bischofszell",
        "": ""
    },
    {
        "code": "9223",
        "name": "Schweizersholz",
        "": ""
    },
    {
        "code": "9223",
        "name": "Halden",
        "": ""
    },
    {
        "code": "9225",
        "name": "Wilen (Gottshaus)",
        "": ""
    },
    {
        "code": "9225",
        "name": "St. Pelagiberg",
        "": ""
    },
    {
        "code": "9230",
        "name": "Flawil",
        "": ""
    },
    {
        "code": "9231",
        "name": "Egg (Flawil)",
        "": ""
    },
    {
        "code": "9240",
        "name": "Niederglatt SG",
        "": ""
    },
    {
        "code": "9240",
        "name": "Uzwil",
        "": ""
    },
    {
        "code": "9242",
        "name": "Oberuzwil",
        "": ""
    },
    {
        "code": "9243",
        "name": "Jonschwil",
        "": ""
    },
    {
        "code": "9244",
        "name": "Niederuzwil",
        "": ""
    },
    {
        "code": "9245",
        "name": "Sonnental",
        "": ""
    },
    {
        "code": "9245",
        "name": "Oberbüren",
        "": ""
    },
    {
        "code": "9246",
        "name": "Niederbüren",
        "": ""
    },
    {
        "code": "9247",
        "name": "Henau",
        "": ""
    },
    {
        "code": "9248",
        "name": "Bichwil",
        "": ""
    },
    {
        "code": "9249",
        "name": "Oberstetten",
        "": ""
    },
    {
        "code": "9249",
        "name": "Niederstetten",
        "": ""
    },
    {
        "code": "9249",
        "name": "Algetshausen",
        "": ""
    },
    {
        "code": "9300",
        "name": "Wittenbach",
        "": ""
    },
    {
        "code": "9304",
        "name": "Bernhardzell",
        "": ""
    },
    {
        "code": "9305",
        "name": "Berg SG",
        "": ""
    },
    {
        "code": "9306",
        "name": "Freidorf TG",
        "": ""
    },
    {
        "code": "9308",
        "name": "Lömmenschwil",
        "": ""
    },
    {
        "code": "9312",
        "name": "Häggenschwil",
        "": ""
    },
    {
        "code": "9313",
        "name": "Muolen",
        "": ""
    },
    {
        "code": "9314",
        "name": "Steinebrunn",
        "": ""
    },
    {
        "code": "9315",
        "name": "Winden",
        "": ""
    },
    {
        "code": "9315",
        "name": "Neukirch (Egnach)",
        "": ""
    },
    {
        "code": "9320",
        "name": "Frasnacht",
        "": ""
    },
    {
        "code": "9320",
        "name": "Stachen",
        "": ""
    },
    {
        "code": "9320",
        "name": "Arbon",
        "": ""
    },
    {
        "code": "9322",
        "name": "Egnach",
        "": ""
    },
    {
        "code": "9323",
        "name": "Steinach",
        "": ""
    },
    {
        "code": "9325",
        "name": "Roggwil TG",
        "": ""
    },
    {
        "code": "9326",
        "name": "Horn",
        "": ""
    },
    {
        "code": "9327",
        "name": "Tübach",
        "": ""
    },
    {
        "code": "9400",
        "name": "Rorschach",
        "": ""
    },
    {
        "code": "9402",
        "name": "Mörschwil",
        "": ""
    },
    {
        "code": "9403",
        "name": "Goldach",
        "": ""
    },
    {
        "code": "9404",
        "name": "Rorschacherberg",
        "": ""
    },
    {
        "code": "9405",
        "name": "Wienacht-Tobel",
        "": ""
    },
    {
        "code": "9410",
        "name": "Heiden",
        "": ""
    },
    {
        "code": "9411",
        "name": "Reute AR",
        "": ""
    },
    {
        "code": "9413",
        "name": "Oberegg",
        "": ""
    },
    {
        "code": "9414",
        "name": "Schachen b. Reute",
        "": ""
    },
    {
        "code": "9422",
        "name": "Staad SG",
        "": ""
    },
    {
        "code": "9423",
        "name": "Altenrhein",
        "": ""
    },
    {
        "code": "9424",
        "name": "Rheineck",
        "": ""
    },
    {
        "code": "9425",
        "name": "Thal",
        "": ""
    },
    {
        "code": "9426",
        "name": "Lutzenberg",
        "": ""
    },
    {
        "code": "9427",
        "name": "Zelg (Wolfhalden)",
        "": ""
    },
    {
        "code": "9427",
        "name": "Wolfhalden",
        "": ""
    },
    {
        "code": "9428",
        "name": "Walzenhausen",
        "": ""
    },
    {
        "code": "9430",
        "name": "St. Margrethen SG",
        "": ""
    },
    {
        "code": "9434",
        "name": "Au SG",
        "": ""
    },
    {
        "code": "9435",
        "name": "Heerbrugg",
        "": ""
    },
    {
        "code": "9436",
        "name": "Balgach",
        "": ""
    },
    {
        "code": "9437",
        "name": "Marbach SG",
        "": ""
    },
    {
        "code": "9442",
        "name": "Büriswilen",
        "": ""
    },
    {
        "code": "9442",
        "name": "Berneck",
        "": ""
    },
    {
        "code": "9443",
        "name": "Widnau",
        "": ""
    },
    {
        "code": "9444",
        "name": "Diepoldsau",
        "": ""
    },
    {
        "code": "9445",
        "name": "Rebstein",
        "": ""
    },
    {
        "code": "9450",
        "name": "Lüchingen",
        "": ""
    },
    {
        "code": "9450",
        "name": "Altstätten SG",
        "": ""
    },
    {
        "code": "9451",
        "name": "Kriessern",
        "": ""
    },
    {
        "code": "9452",
        "name": "Hinterforst",
        "": ""
    },
    {
        "code": "9453",
        "name": "Eichberg",
        "": ""
    },
    {
        "code": "9462",
        "name": "Montlingen",
        "": ""
    },
    {
        "code": "9463",
        "name": "Oberriet SG",
        "": ""
    },
    {
        "code": "9464",
        "name": "Lienz",
        "": ""
    },
    {
        "code": "9464",
        "name": "Rüthi (Rheintal)",
        "": ""
    },
    {
        "code": "9465",
        "name": "Salez",
        "": ""
    },
    {
        "code": "9466",
        "name": "Sennwald",
        "": ""
    },
    {
        "code": "9467",
        "name": "Frümsen",
        "": ""
    },
    {
        "code": "9468",
        "name": "Sax",
        "": ""
    },
    {
        "code": "9469",
        "name": "Haag (Rheintal)",
        "": ""
    },
    {
        "code": "9470",
        "name": "Buchs SG",
        "": ""
    },
    {
        "code": "9470",
        "name": "Werdenberg",
        "": ""
    },
    {
        "code": "9472",
        "name": "Grabserberg",
        "": ""
    },
    {
        "code": "9472",
        "name": "Grabs",
        "": ""
    },
    {
        "code": "9473",
        "name": "Gams",
        "": ""
    },
    {
        "code": "9475",
        "name": "Sevelen",
        "": ""
    },
    {
        "code": "9476",
        "name": "Fontnas",
        "": ""
    },
    {
        "code": "9476",
        "name": "Weite",
        "": ""
    },
    {
        "code": "9477",
        "name": "Trübbach",
        "": ""
    },
    {
        "code": "9478",
        "name": "Azmoos",
        "": ""
    },
    {
        "code": "9479",
        "name": "Gretschins",
        "": ""
    },
    {
        "code": "9479",
        "name": "Malans SG",
        "": ""
    },
    {
        "code": "9479",
        "name": "Oberschan",
        "": ""
    },
    {
        "code": "9485",
        "name": "Nendeln",
        "": ""
    },
    {
        "code": "9486",
        "name": "Schaanwald",
        "": ""
    },
    {
        "code": "9487",
        "name": "Gamprin-Bendern",
        "": ""
    },
    {
        "code": "9488",
        "name": "Schellenberg",
        "": ""
    },
    {
        "code": "9490",
        "name": "Vaduz",
        "": ""
    },
    {
        "code": "9491",
        "name": "Ruggell",
        "": ""
    },
    {
        "code": "9492",
        "name": "Eschen",
        "": ""
    },
    {
        "code": "9493",
        "name": "Mauren FL",
        "": ""
    },
    {
        "code": "9494",
        "name": "Schaan",
        "": ""
    },
    {
        "code": "9495",
        "name": "Triesen",
        "": ""
    },
    {
        "code": "9496",
        "name": "Balzers",
        "": ""
    },
    {
        "code": "9497",
        "name": "Triesenberg",
        "": ""
    },
    {
        "code": "9498",
        "name": "Planken",
        "": ""
    },
    {
        "code": "9500",
        "name": "Wil SG",
        "": ""
    },
    {
        "code": "9502",
        "name": "Braunau",
        "": ""
    },
    {
        "code": "9503",
        "name": "Stehrenberg",
        "": ""
    },
    {
        "code": "9503",
        "name": "Lanterswil",
        "": ""
    },
    {
        "code": "9504",
        "name": "Friltschen",
        "": ""
    },
    {
        "code": "9506",
        "name": "Lommis",
        "": ""
    },
    {
        "code": "9507",
        "name": "Stettfurt",
        "": ""
    },
    {
        "code": "9508",
        "name": "Weingarten-Kalthäusern",
        "": ""
    },
    {
        "code": "9512",
        "name": "Rossrüti",
        "": ""
    },
    {
        "code": "9514",
        "name": "Wuppenau",
        "": ""
    },
    {
        "code": "9515",
        "name": "Hosenruck",
        "": ""
    },
    {
        "code": "9517",
        "name": "Mettlen",
        "": ""
    },
    {
        "code": "9523",
        "name": "Züberwangen",
        "": ""
    },
    {
        "code": "9524",
        "name": "Zuzwil SG",
        "": ""
    },
    {
        "code": "9525",
        "name": "Lenggenwil",
        "": ""
    },
    {
        "code": "9526",
        "name": "Zuckenriet",
        "": ""
    },
    {
        "code": "9527",
        "name": "Niederhelfenschwil",
        "": ""
    },
    {
        "code": "9532",
        "name": "Rickenbach b. Wil",
        "": ""
    },
    {
        "code": "9533",
        "name": "Kirchberg SG",
        "": ""
    },
    {
        "code": "9534",
        "name": "Gähwil",
        "": ""
    },
    {
        "code": "9535",
        "name": "Wilen b. Wil",
        "": ""
    },
    {
        "code": "9536",
        "name": "Schwarzenbach SG",
        "": ""
    },
    {
        "code": "9542",
        "name": "Münchwilen TG",
        "": ""
    },
    {
        "code": "9543",
        "name": "St. Margarethen TG",
        "": ""
    },
    {
        "code": "9545",
        "name": "Wängi",
        "": ""
    },
    {
        "code": "9546",
        "name": "Tuttwil",
        "": ""
    },
    {
        "code": "9547",
        "name": "Wittenwil",
        "": ""
    },
    {
        "code": "9548",
        "name": "Matzingen",
        "": ""
    },
    {
        "code": "9552",
        "name": "Bronschhofen",
        "": ""
    },
    {
        "code": "9553",
        "name": "Bettwiesen",
        "": ""
    },
    {
        "code": "9554",
        "name": "Tägerschen",
        "": ""
    },
    {
        "code": "9555",
        "name": "Tobel",
        "": ""
    },
    {
        "code": "9556",
        "name": "Zezikon",
        "": ""
    },
    {
        "code": "9556",
        "name": "Affeltrangen",
        "": ""
    },
    {
        "code": "9562",
        "name": "Buch b. Märwil",
        "": ""
    },
    {
        "code": "9562",
        "name": "Märwil",
        "": ""
    },
    {
        "code": "9565",
        "name": "Rothenhausen",
        "": ""
    },
    {
        "code": "9565",
        "name": "Schmidshof",
        "": ""
    },
    {
        "code": "9565",
        "name": "Oppikon",
        "": ""
    },
    {
        "code": "9565",
        "name": "Oberbussnang",
        "": ""
    },
    {
        "code": "9565",
        "name": "Bussnang",
        "": ""
    },
    {
        "code": "9573",
        "name": "Littenheid",
        "": ""
    },
    {
        "code": "9601",
        "name": "Lütisburg Station",
        "": ""
    },
    {
        "code": "9602",
        "name": "Müselbach",
        "": ""
    },
    {
        "code": "9602",
        "name": "Bazenheid",
        "": ""
    },
    {
        "code": "9604",
        "name": "Oberrindal",
        "": ""
    },
    {
        "code": "9604",
        "name": "Unterrindal",
        "": ""
    },
    {
        "code": "9604",
        "name": "Lütisburg",
        "": ""
    },
    {
        "code": "9606",
        "name": "Bütschwil",
        "": ""
    },
    {
        "code": "9607",
        "name": "Mosnang",
        "": ""
    },
    {
        "code": "9608",
        "name": "Ganterschwil",
        "": ""
    },
    {
        "code": "9612",
        "name": "Dreien",
        "": ""
    },
    {
        "code": "9613",
        "name": "Mühlrüti",
        "": ""
    },
    {
        "code": "9614",
        "name": "Libingen",
        "": ""
    },
    {
        "code": "9615",
        "name": "Dietfurt",
        "": ""
    },
    {
        "code": "9620",
        "name": "Lichtensteig",
        "": ""
    },
    {
        "code": "9621",
        "name": "Oberhelfenschwil",
        "": ""
    },
    {
        "code": "9622",
        "name": "Krinau",
        "": ""
    },
    {
        "code": "9630",
        "name": "Wattwil",
        "": ""
    },
    {
        "code": "9631",
        "name": "Ulisbach",
        "": ""
    },
    {
        "code": "9633",
        "name": "Bächli (Hemberg)",
        "": ""
    },
    {
        "code": "9633",
        "name": "Hemberg",
        "": ""
    },
    {
        "code": "9642",
        "name": "Ebnat-Kappel",
        "": ""
    },
    {
        "code": "9643",
        "name": "Krummenau",
        "": ""
    },
    {
        "code": "9650",
        "name": "Nesslau",
        "": ""
    },
    {
        "code": "9651",
        "name": "Ennetbühl",
        "": ""
    },
    {
        "code": "9652",
        "name": "Neu St. Johann",
        "": ""
    },
    {
        "code": "9655",
        "name": "Stein SG",
        "": ""
    },
    {
        "code": "9656",
        "name": "Alt St. Johann",
        "": ""
    },
    {
        "code": "9657",
        "name": "Unterwasser",
        "": ""
    },
    {
        "code": "9658",
        "name": "Wildhaus",
        "": ""
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
            $city->country_id = 2;
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