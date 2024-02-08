<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Utilisateur</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }
        h1{
            text-align: center;
            font-weight: bold;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        input[type="password"],
        input[type="file"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 5px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-right: 10px;
        }

        input[type="button"]:hover {
            background-color: #45a049;
        }

        .alignement-radio,.alignement-matiere {
            display: flex;
            flex-direction: center;
        }

        .alignement-radio label,.alignement-matiere label {
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <?php
        include('config/modifier.php');
    ?>
    <h1>Modifier une Personne</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" value="<?php echo $user['nom']; ?>">

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" value="<?php echo $user['prenom']; ?>">

        <label for="datenaissance">Date de naissance :</label>
        <input type="date" id="datenaissance" name="datenaissance" value="<?php echo $user['datenaissance']; ?>">

        <label for="couleur">Couleur :</label>
        <input type="text" id="couleur" name="couleur" value="<?php echo $user['couleur']; ?>">

        <label for="nationalite">Nationalité :</label>
        <select id="nationalite" name="nationalite">
            <option value="AFG" <?php if ($user['nationalite'] == "AFG") echo 'selected'; ?>>Afghane (Afghanistan)</option>
            <option value="ALB" <?php if ($user['nationalite'] == "ALB") echo 'selected'; ?>>Albanaise (Albanie)</option>
            <option value="DZA" <?php if ($user['nationalite'] == "DZA") echo 'selected'; ?>>Algérienne (Algérie)</option>
            <option value="DEU" <?php if ($user['nationalite'] == "DEU") echo 'selected'; ?>>Allemande (Allemagne)</option>
            <option value="USA" <?php if ($user['nationalite'] == "USA") echo 'selected'; ?>>Americaine (États-Unis)</option>
            <option value="AND" <?php if ($user['nationalite'] == "AND") echo 'selected'; ?>>Andorrane (Andorre)</option>
            <option value="AGO" <?php if ($user['nationalite'] == "AGO") echo 'selected'; ?>>Angolaise (Angola)</option>
            <option value="ATG" <?php if ($user['nationalite'] == "ATG") echo 'selected'; ?>>Antiguaise-et-Barbudienne (Antigua-et-Barbuda)</option>
            <option value="ARG" <?php if ($user['nationalite'] == "ARG") echo 'selected'; ?>>Argentine (Argentine)</option>
            <option value="ARM" <?php if ($user['nationalite'] == "ARM") echo 'selected'; ?>>Armenienne (Arménie)</option>
            <option value="AUS" <?php if ($user['nationalite'] == "AUS") echo 'selected'; ?>>Australienne (Australie)</option>
            <option value="AUT" <?php if ($user['nationalite'] == "AUT") echo 'selected'; ?>>Autrichienne (Autriche)</option>
            <option value="AZE" <?php if ($user['nationalite'] == "AZE") echo 'selected'; ?>>Azerbaïdjanaise (Azerbaïdjan)</option>
            <option value="BHS" <?php if ($user['nationalite'] == "BHS") echo 'selected'; ?>>Bahamienne (Bahamas)</option>
            <option value="BHR" <?php if ($user['nationalite'] == "BHR") echo 'selected'; ?>>Bahreinienne (Bahreïn)</option>
            <option value="BGD" <?php if ($user['nationalite'] == "BGD") echo 'selected'; ?>>Bangladaise (Bangladesh)</option>
            <option value="BRB" <?php if ($user['nationalite'] == "BRB") echo 'selected'; ?>>Barbadienne (Barbade)</option>
            <option value="BEL" <?php if ($user['nationalite'] == "BEL") echo 'selected'; ?>>Belge (Belgique)</option>
            <option value="BLZ" <?php if ($user['nationalite'] == "BLZ") echo 'selected'; ?>>Belizienne (Belize)</option>
            <option value="BEN" <?php if ($user['nationalite'] == "BEN") echo 'selected'; ?>>Béninoise (Bénin)</option>
            <option value="BTN" <?php if ($user['nationalite'] == "BTN") echo 'selected'; ?>>Bhoutanaise (Bhoutan)</option>
            <option value="BLR" <?php if ($user['nationalite'] == "BLR") echo 'selected'; ?>>Biélorusse (Biélorussie)</option>
            <option value="MMR" <?php if ($user['nationalite'] == "MMR") echo 'selected'; ?>>Birmane (Birmanie)</option>
            <option value="GNB" <?php if ($user['nationalite'] == "GNB") echo 'selected'; ?>>Bissau-Guinéenne (Guinée-Bissau)</option>
            <option value="BOL" <?php if ($user['nationalite'] == "BOL") echo 'selected'; ?>>Bolivienne (Bolivie)</option>
            <option value="BIH" <?php if ($user['nationalite'] == "BIH") echo 'selected'; ?>>Bosnienne (Bosnie-Herzégovine)</option>
            <option value="BWA" <?php if ($user['nationalite'] == "BWA") echo 'selected'; ?>>Botswanaise (Botswana)</option>
            <option value="BRA" <?php if ($user['nationalite'] == "BRA") echo 'selected'; ?>>Brésilienne (Brésil)</option>
            <option value="GBR" <?php if ($user['nationalite'] == "GBR") echo 'selected'; ?>>Britannique (Royaume-Uni)</option>
            <option value="BRN" <?php if ($user['nationalite'] == "BRN") echo 'selected'; ?>>Brunéienne (Brunéi)</option>
            <option value="BGR" <?php if ($user['nationalite'] == "BGR") echo 'selected'; ?>>Bulgare (Bulgarie)</option>
            <option value="BFA" <?php if ($user['nationalite'] == "BFA") echo 'selected'; ?>>Burkinabée (Burkina)</option>
            <option value="BDI" <?php if ($user['nationalite'] == "BDI") echo 'selected'; ?>>Burundaise (Burundi)</option>
            <option value="KHM" <?php if ($user['nationalite'] == "KHM") echo 'selected'; ?>>Cambodgienne (Cambodge)</option>
            <option value="CMR" <?php if ($user['nationalite'] == "CMR") echo 'selected'; ?>>Camerounaise (Cameroun)</option>
            <option value="CAN" <?php if ($user['nationalite'] == "CAN") echo 'selected'; ?>>Canadienne (Canada)</option>
            <option value="CPV" <?php if ($user['nationalite'] == "CPV") echo 'selected'; ?>>Cap-verdienne (Cap-Vert)</option>
            <option value="CAF" <?php if ($user['nationalite'] == "CAF") echo 'selected'; ?>>Centrafricaine (Centrafrique)</option>
            <option value="CHL" <?php if ($user['nationalite'] == "CHL") echo 'selected'; ?>>Chilienne (Chili)</option>
            <option value="CHN" <?php if ($user['nationalite'] == "CHN") echo 'selected'; ?>>Chinoise (Chine)</option>
            <option value="CYP" <?php if ($user['nationalite'] == "CYP") echo 'selected'; ?>>Chypriote (Chypre)</option>
            <option value="COL" <?php if ($user['nationalite'] == "COL") echo 'selected'; ?>>Colombienne (Colombie)</option>
            <option value="COM" <?php if ($user['nationalite'] == "COM") echo 'selected'; ?>>Comorienne (Comores)</option>
            <option value="COG" <?php if ($user['nationalite'] == "COG") echo 'selected'; ?>>Congolaise (Congo-Brazzaville)</option>
            <option value="COD" <?php if ($user['nationalite'] == "COD") echo 'selected'; ?>>Congolaise (Congo-Kinshasa)</option>
            <option value="COK" <?php if ($user['nationalite'] == "COK") echo 'selected'; ?>>Cookienne (Îles Cook)</option>
            <option value="CRI" <?php if ($user['nationalite'] == "CRI") echo 'selected'; ?>>Costaricaine (Costa Rica)</option>
            <option value="HRV" <?php if ($user['nationalite'] == "HRV") echo 'selected'; ?>>Croate (Croatie)</option>
            <option value="CUB" <?php if ($user['nationalite'] == "CUB") echo 'selected'; ?>>Cubaine (Cuba)</option>
            <option value="DNK" <?php if ($user['nationalite'] == "DNK") echo 'selected'; ?>>Danoise (Danemark)</option>
            <option value="DJI" <?php if ($user['nationalite'] == "DJI") echo 'selected'; ?>>Djiboutienne (Djibouti)</option>
            <option value="DOM" <?php if ($user['nationalite'] == "DOM") echo 'selected'; ?>>Dominicaine (République dominicaine)</option>
            <option value="DMA" <?php if ($user['nationalite'] == "DMA") echo 'selected'; ?>>Dominiquaise (Dominique)</option>
            <option value="EGY" <?php if ($user['nationalite'] == "EGY") echo 'selected'; ?>>Égyptienne (Égypte)</option>
            <option value="ARE" <?php if ($user['nationalite'] == "ARE") echo 'selected'; ?>>Émirienne (Émirats arabes unis)</option>
            <option value="GNQ" <?php if ($user['nationalite'] == "GNQ") echo 'selected'; ?>>Équato-guineenne (Guinée équatoriale)</option>
            <option value="ECU" <?php if ($user['nationalite'] == "ECU") echo 'selected'; ?>>Équatorienne (Équateur)</option>
            <option value="ERI" <?php if ($user['nationalite'] == "ERI") echo 'selected'; ?>>Érythréenne (Érythrée)</option>
            <option value="ESP" <?php if ($user['nationalite'] == "ESP") echo 'selected'; ?>>Espagnole (Espagne)</option>
            <option value="TLS" <?php if ($user['nationalite'] == "TLS") echo 'selected'; ?>>Est-timoraise (Timor-Leste)</option>
            <option value="EST" <?php if ($user['nationalite'] == "EST") echo 'selected'; ?>>Estonienne (Estonie)</option>
            <option value="ETH" <?php if ($user['nationalite'] == "ETH") echo 'selected'; ?>>Éthiopienne (Éthiopie)</option>
            <option value="FJI" <?php if ($user['nationalite'] == "FJI") echo 'selected'; ?>>Fidjienne (Fidji)</option>
            <option value="FIN" <?php if ($user['nationalite'] == "FIN") echo 'selected'; ?>>Finlandaise (Finlande)</option>
            <option value="FRA" <?php if ($user['nationalite'] == "FRA") echo 'selected'; ?>>Française (France)</option>
            <option value="GAB" <?php if ($user['nationalite'] == "GAB") echo 'selected'; ?>>Gabonaise (Gabon)</option>
            <option value="GMB" <?php if ($user['nationalite'] == "GMB") echo 'selected'; ?>>Gambienne (Gambie)</option>
            <option value="GEO" <?php if ($user['nationalite'] == "GEO") echo 'selected'; ?>>Georgienne (Géorgie)</option>
            <option value="GHA" <?php if ($user['nationalite'] == "GHA") echo 'selected'; ?>>Ghanéenne (Ghana)</option>
            <option value="GRD" <?php if ($user['nationalite'] == "GRD") echo 'selected'; ?>>Grenadienne (Grenade)</option>
            <option value="GTM" <?php if ($user['nationalite'] == "GTM") echo 'selected'; ?>>Guatémaltèque (Guatemala)</option>
            <option value="GIN" <?php if ($user['nationalite'] == "GIN") echo 'selected'; ?>>Guinéenne (Guinée)</option>
            <option value="GUY" <?php if ($user['nationalite'] == "GUY") echo 'selected'; ?>>Guyanienne (Guyana)</option>
            <option value="HTI" <?php if ($user['nationalite'] == "HTI") echo 'selected'; ?>>Haïtienne (Haïti)</option>
            <option value="GRC" <?php if ($user['nationalite'] == "GRC") echo 'selected'; ?>>Hellénique (Grèce)</option>
            <option value="HND" <?php if ($user['nationalite'] == "HND") echo 'selected'; ?>>Hondurienne (Honduras)</option>
            <option value="HUN" <?php if ($user['nationalite'] == "HUN") echo 'selected'; ?>>Hongroise (Hongrie)</option>
            <option value="IND" <?php if ($user['nationalite'] == "IND") echo 'selected'; ?>>Indienne (Inde)</option>
            <option value="IDN" <?php if ($user['nationalite'] == "IDN") echo 'selected'; ?>>Indonésienne (Indonésie)</option>
            <option value="IRQ" <?php if ($user['nationalite'] == "IRQ") echo 'selected'; ?>>Irakienne (Iraq)</option>
            <option value="IRN" <?php if ($user['nationalite'] == "IRN") echo 'selected'; ?>>Iranienne (Iran)</option>
            <option value="IRL" <?php if ($user['nationalite'] == "IRL") echo 'selected'; ?>>Irlandaise (Irlande)</option>
            <option value="ISL" <?php if ($user['nationalite'] == "ISL") echo 'selected'; ?>>Islandaise (Islande)</option>
            <option value="ISR" <?php if ($user['nationalite'] == "ISR") echo 'selected'; ?>>Israélienne (Israël)</option>
            <option value="ITA" <?php if ($user['nationalite'] == "ITA") echo 'selected'; ?>>Italienne (Italie)</option>
            <option value="CIV" <?php if ($user['nationalite'] == "CIV") echo 'selected'; ?>>Ivoirienne (Côte d'Ivoire)</option>
            <option value="JAM" <?php if ($user['nationalite'] == "JAM") echo 'selected'; ?>>Jamaïcaine (Jamaïque)</option>
            <option value="JPN" <?php if ($user['nationalite'] == "JPN") echo 'selected'; ?>>Japonaise (Japon)</option>
            <option value="JOR" <?php if ($user['nationalite'] == "JOR") echo 'selected'; ?>>Jordanienne (Jordanie)</option>
            <option value="KAZ" <?php if ($user['nationalite'] == "KAZ") echo 'selected'; ?>>Kazakhstanaise (Kazakhstan)</option>
            <option value="KEN" <?php if ($user['nationalite'] == "KEN") echo 'selected'; ?>>Kenyane (Kenya)</option>
            <option value="KGZ" <?php if ($user['nationalite'] == "KGZ") echo 'selected'; ?>>Kirghize (Kirghizistan)</option>
            <option value="KIR" <?php if ($user['nationalite'] == "KIR") echo 'selected'; ?>>Kiribatienne (Kiribati)</option>
            <option value="KWT" <?php if ($user['nationalite'] == "KWT") echo 'selected'; ?>>Koweïtienne (Koweït)</option>
            <option value="LAO" <?php if ($user['nationalite'] == "LAO") echo 'selected'; ?>>Laotienne (Laos)</option>
            <option value="LSO" <?php if ($user['nationalite'] == "LSO") echo 'selected'; ?>>Lesothane (Lesotho)</option>
            <option value="LVA" <?php if ($user['nationalite'] == "LVA") echo 'selected'; ?>>Lettone (Lettonie)</option>
            <option value="LBN" <?php if ($user['nationalite'] == "LBN") echo 'selected'; ?>>Libanaise (Liban)</option>
            <option value="LBR" <?php if ($user['nationalite'] == "LBR") echo 'selected'; ?>>Liberienne (Liberia)</option>
            <option value="LBY" <?php if ($user['nationalite'] == "LBY") echo 'selected'; ?>>Libyenne (Libye)</option>
            <option value="LIE" <?php if ($user['nationalite'] == "LIE") echo 'selected'; ?>>Liechtensteinoise (Liechtenstein)</option>
            <option value="LTU" <?php if ($user['nationalite'] == "LTU") echo 'selected'; ?>>Lituanienne (Lituanie)</option>
            <option value="LUX" <?php if ($user['nationalite'] == "LUX") echo 'selected'; ?>>Luxembourgeoise (Luxembourg)</option>
            <option value="MKD" <?php if ($user['nationalite'] == "MKD") echo 'selected'; ?>>Macédonienne (Macédoine)</option>
            <option value="MDG" <?php if ($user['nationalite'] == "MDG") echo 'selected'; ?>>Malgache (Madagascar)</option>
            <option value="MYS" <?php if ($user['nationalite'] == "MYS") echo 'selected'; ?>>Malaisienne (Malaisie)</option>
            <option value="MWI" <?php if ($user['nationalite'] == "MWI") echo 'selected'; ?>>Malawienne (Malawi)</option>
            <option value="MDV" <?php if ($user['nationalite'] == "MDV") echo 'selected'; ?>>Maldivienne (Maldives)</option>
            <option value="MLI" <?php if ($user['nationalite'] == "MLI") echo 'selected'; ?>>Maliennes (Mali)</option>
            <option value="MLT" <?php if ($user['nationalite'] == "MLT") echo 'selected'; ?>>Maltaise (Malte)</option>
            <option value="MAR" <?php if ($user['nationalite'] == "MAR") echo 'selected'; ?>>Marocaine (Maroc)</option>
            <option value="MHL" <?php if ($user['nationalite'] == "MHL") echo 'selected'; ?>>Marshallaise (Îles Marshall)</option>
            <option value="MRT" <?php if ($user['nationalite'] == "MRT") echo 'selected'; ?>>Mauritanienne (Mauritanie)</option>
            <option value="MUS" <?php if ($user['nationalite'] == "MUS") echo 'selected'; ?>>Mauricienne (Maurice)</option>
            <option value="MEX" <?php if ($user['nationalite'] == "MEX") echo 'selected'; ?>>Mexicaine (Mexique)</option>
            <option value="FSM" <?php if ($user['nationalite'] == "FSM") echo 'selected'; ?>>Micronésienne (Micronésie)</option>
            <option value="MDA" <?php if ($user['nationalite'] == "MDA") echo 'selected'; ?>>Moldave (Moldavie)</option>
            <option value="MCO" <?php if ($user['nationalite'] == "MCO") echo 'selected'; ?>>Monegasque (Monaco)</option>
            <option value="MNG" <?php if ($user['nationalite'] == "MNG") echo 'selected'; ?>>Mongole (Mongolie)</option>
            <option value="MNE" <?php if ($user['nationalite'] == "MNE") echo 'selected'; ?>>Monténégrine (Monténégro)</option>
            <option value="MOZ" <?php if ($user['nationalite'] == "MOZ") echo 'selected'; ?>>Mozambicaine (Mozambique)</option>
            <option value="NAM" <?php if ($user['nationalite'] == "NAM") echo 'selected'; ?>>Namibienne (Namibie)</option>
            <option value="NRU" <?php if ($user['nationalite'] == "NRU") echo 'selected'; ?>>Nauruane (Nauru)</option>
            <option value="NPL" <?php if ($user['nationalite'] == "NPL") echo 'selected'; ?>>Népalaise (Népal)</option>
            <option value="NIC" <?php if ($user['nationalite'] == "NIC") echo 'selected'; ?>>Nicaraguayenne (Nicaragua)</option>
            <option value="NGA" <?php if ($user['nationalite'] == "NGA") echo 'selected'; ?>>Nigériane (Nigeria)</option>
            <option value="NER" <?php if ($user['nationalite'] == "NER") echo 'selected'; ?>>Nigérienne (Niger)</option>
            <option value="NIU" <?php if ($user['nationalite'] == "NIU") echo 'selected'; ?>>Niuéenne (Niué)</option>
            <option value="NOR" <?php if ($user['nationalite'] == "NOR") echo 'selected'; ?>>Norvégienne (Norvège)</option>
            <option value="NZL" <?php if ($user['nationalite'] == "NZL") echo 'selected'; ?>>Néo-zélandaise (Nouvelle-Zélande)</option>
            <option value="OMN" <?php if ($user['nationalite'] == "OMN") echo 'selected'; ?>>Omanaise (Oman)</option>
            <option value="UGA" <?php if ($user['nationalite'] == "UGA") echo 'selected'; ?>>Ougandaise (Ouganda)</option>
            <option value="UZB" <?php if ($user['nationalite'] == "UZB") echo 'selected'; ?>>Ouzbéke (Ouzbékistan)</option>
            <option value="PAK" <?php if ($user['nationalite'] == "PAK") echo 'selected'; ?>>Pakistanaise (Pakistan)</option>
            <option value="PLW" <?php if ($user['nationalite'] == "PLW") echo 'selected'; ?>>Palaosienne (Palaos)</option>
            <option value="PSE" <?php if ($user['nationalite'] == "PSE") echo 'selected'; ?>>Palestinienne (Palestine)</option>
            <option value="PAN" <?php if ($user['nationalite'] == "PAN") echo 'selected'; ?>>Panaméenne (Panama)</option>
            <option value="PNG" <?php if ($user['nationalite'] == "PNG") echo 'selected'; ?>>Papouane-Néo-Guinéenne (Papouasie-Nouvelle-Guinée)</option>
            <option value="PRY" <?php if ($user['nationalite'] == "PRY") echo 'selected'; ?>>Paraguayenne (Paraguay)</option>
            <option value="PER" <?php if ($user['nationalite'] == "PER") echo 'selected'; ?>>Péruvienne (Pérou)</option>
            <option value="PHL" <?php if ($user['nationalite'] == "PHL") echo 'selected'; ?>>Philippine (Philippines)</option>
            <option value="POL" <?php if ($user['nationalite'] == "POL") echo 'selected'; ?>>Polonaise (Pologne)</option>
            <option value="PRT" <?php if ($user['nationalite'] == "PRT") echo 'selected'; ?>>Portugaise (Portugal)</option>
            <option value="QAT" <?php if ($user['nationalite'] == "QAT") echo 'selected'; ?>>Qatarienne (Qatar)</option>
            <option value="ROU" <?php if ($user['nationalite'] == "ROU") echo 'selected'; ?>>Roumaine (Roumanie)</option>
            <option value="RUS" <?php if ($user['nationalite'] == "RUS") echo 'selected'; ?>>Russe (Russie)</option>
            <option value="RWA" <?php if ($user['nationalite'] == "RWA") echo 'selected'; ?>>Rwandaise (Rwanda)</option>
            <option value="KNA" <?php if ($user['nationalite'] == "KNA") echo 'selected'; ?>>Saint-Lucienne (Saint-Christophe-et-Niévès)</option>
            <option value="SMR" <?php if ($user['nationalite'] == "SMR") echo 'selected'; ?>>Saint-Marinaise (Saint-Marin)</option>
            <option value="VCT" <?php if ($user['nationalite'] == "VCT") echo 'selected'; ?>>Saint-Vincentaise-et-Grenadine (Saint-Vincent-et-les-Grenadines)</option>
            <option value="SLB" <?php if ($user['nationalite'] == "SLB") echo 'selected'; ?>>Salomonaise (Salomon)</option>
            <option value="SLV" <?php if ($user['nationalite'] == "SLV") echo 'selected'; ?>>Salvadorienne (Salvador)</option>
            <option value="WSM" <?php if ($user['nationalite'] == "WSM") echo 'selected'; ?>>Samoane (Samoa)</option>
            <option value="STP" <?php if ($user['nationalite'] == "STP") echo 'selected'; ?>>Santoméenne (Sao Tomé-et-Principe)</option>
            <option value="SAU" <?php if ($user['nationalite'] == "SAU") echo 'selected'; ?>>Saoudienne (Arabie saoudite)</option>
            <option value="SEN" <?php if ($user['nationalite'] == "SEN") echo 'selected'; ?>>Sénégalaise (Sénégal)</option>
            <option value="SRB" <?php if ($user['nationalite'] == "SRB") echo 'selected'; ?>>Serbe (Serbie)</option>
            <option value="SYC" <?php if ($user['nationalite'] == "SYC") echo 'selected'; ?>>Seychelloise (Seychelles)</option>
            <option value="SLE" <?php if ($user['nationalite'] == "SLE") echo 'selected'; ?>>Sierra-Léonaise (Sierra Leone)</option>
            <option value="SGP" <?php if ($user['nationalite'] == "SGP") echo 'selected'; ?>>Singapourienne (Singapour)</option>
            <option value="SVK" <?php if ($user['nationalite'] == "SVK") echo 'selected'; ?>>Slovaque (Slovaquie)</option>
            <option value="SVN" <?php if ($user['nationalite'] == "SVN") echo 'selected'; ?>>Slovène (Slovénie)</option>
            <option value="SOM" <?php if ($user['nationalite'] == "SOM") echo 'selected'; ?>>Somalienne (Somalie)</option>
            <option value="SDN" <?php if ($user['nationalite'] == "SDN") echo 'selected'; ?>>Soudanaise (Soudan)</option>
            <option value="LKA" <?php if ($user['nationalite'] == "LKA") echo 'selected'; ?>>Sri-Lankaise (Sri Lanka)</option>
            <option value="ZAF" <?php if ($user['nationalite'] == "ZAF") echo 'selected'; ?>>Sud-Africaine (Afrique du Sud)</option>
            <option value="KOR" <?php if ($user['nationalite'] == "KOR") echo 'selected'; ?>>Sud-Coréenne (Corée du Sud)</option>
            <option value="SSD" <?php if ($user['nationalite'] == "SSD") echo 'selected'; ?>>Sud-Soudanaise (Soudan du Sud)</option>
            <option value="SUR" <?php if ($user['nationalite'] == "SUR") echo 'selected'; ?>>Surinamaise (Suriname)</option>
            <option value="SWE" <?php if ($user['nationalite'] == "SWE") echo 'selected'; ?>>Suédoise (Suède)</option>
            <option value="CHE" <?php if ($user['nationalite'] == "CHE") echo 'selected'; ?>>Suisse (Suisse)</option>
            <option value="SWZ" <?php if ($user['nationalite'] == "SWZ") echo 'selected'; ?>>Swazie (Swaziland)</option>
            <option value="SYR" <?php if ($user['nationalite'] == "SYR") echo 'selected'; ?>>Syrienne (Syrie)</option>
            <option value="TJK" <?php if ($user['nationalite'] == "TJK") echo 'selected'; ?>>Tadjike (Tadjikistan)</option>
            <option value="TZA" <?php if ($user['nationalite'] == "TZA") echo 'selected'; ?>>Tanzanienne (Tanzanie)</option>
            <option value="TCD" <?php if ($user['nationalite'] == "TCD") echo 'selected'; ?>>Tchadienne (Tchad)</option>
            <option value="CZE" <?php if ($user['nationalite'] == "CZE") echo 'selected'; ?>>Tchèque (Tchéquie)</option>
            <option value="THA" <?php if ($user['nationalite'] == "THA") echo 'selected'; ?>>Thaïlandaise (Thaïlande)</option>
            <option value="TGO" <?php if ($user['nationalite'] == "TGO") echo 'selected'; ?>>Togolaise (Togo)</option>
            <option value="TON" <?php if ($user['nationalite'] == "TON") echo 'selected'; ?>>Tongienne (Tonga)</option>
            <option value="TTO" <?php if ($user['nationalite'] == "TTO") echo 'selected'; ?>>Trinidadienne (Trinité-et-Tobago)</option>
            <option value="TUN" <?php if ($user['nationalite'] == "TUN") echo 'selected'; ?>>Tunisienne (Tunisie)</option>
            <option value="TKM" <?php if ($user['nationalite'] == "TKM") echo 'selected'; ?>>Turkmène (Turkménistan)</option>
            <option value="TUR" <?php if ($user['nationalite'] == "TUR") echo 'selected'; ?>>Turque (Turquie)</option>
            <option value="TUV" <?php if ($user['nationalite'] == "TUV") echo 'selected'; ?>>Tuvaluane (Tuvalu)</option>
            <option value="UKR" <?php if ($user['nationalite'] == "UKR") echo 'selected'; ?>>Ukrainienne (Ukraine)</option>
            <option value="URY" <?php if ($user['nationalite'] == "URY") echo 'selected'; ?>>Uruguayenne (Uruguay)</option>
            <option value="VUT" <?php if ($user['nationalite'] == "VUT") echo 'selected'; ?>>Vanuatuane (Vanuatu)</option>
            <option value="VAT" <?php if ($user['nationalite'] == "VAT") echo 'selected'; ?>>Vaticane (Saint-Siège)</option>
            <option value="VEN" <?php if ($user['nationalite'] == "VEN") echo 'selected'; ?>>Vénézuélienne (Venezuela)</option>
            <option value="VNM" <?php if ($user['nationalite'] == "VNM") echo 'selected'; ?>>Vietnamienne (Vietnam)</option>
            <option value="YEM" <?php if ($user['nationalite'] == "YEM") echo 'selected'; ?>>Yéménite (Yémen)</option>
            <option value="ZMB" <?php if ($user['nationalite'] == "ZMB") echo 'selected'; ?>>Zambienne (Zambie)</option>
            <option value="ZWE" <?php if ($user['nationalite'] == "ZWE") echo 'selected'; ?>>Zimbabwéenne (Zimbabwe)</option>
        </select>


        <label for="genre">Genre :</label>
        <input type="text" id="genre" name="genre" value="<?php echo $user['genre']; ?>">

        <label for="matiere">Matière :</label>
        <input type="text" id="matiere" name="matiere" value="<?php echo $user['matiere']; ?>">

        <label for="image">Image :</label>
        <input type="file" id="image" name="image" value="<?php echo $user['image']; ?>">

        <?php if (!empty($user['image'])) : ?>
            <img src="C:/wamp64/www/ProjetClass/images/<?php echo $user['image']; ?>" alt="Image actuelle">
        <?php endif; ?>

        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password">

        <input type="submit" name="modifier" value="Modifier">
    </form>
</body>
</html>