<?php

return [

    'title' => 'Coding@Home',
    'questions' => 'Kysymykset',
    'material' => [
        "required" => "Tarvittava materiaali",
        "chequered" => "ruutulauta ja laatat",
        "footprint" => "joissa on jalanjäljen kuvat"
    ],
    'intro' => [
        'title' => 'Johdanto Coding@Home',
    ],
    'explorer' => [
        'title' => 'Tutkimusmatkailija',
        'text' => 'Tutkimusmatkailija on ensimmäinen Coding@Home-harjoitus. Liikuta tutkimusmatkailijaa ympäri lautaa päästäksesi maaliin sen jälkeen, kun olet vieraillut niin monella neliöllä kuin mahdollista.',
        'questions' => [
            'content' =>
                [
                    1 => 'Q1. Onko tutkimusmatkailijan mahdollista käydä kaikissa laudan ruuduissa videolla annettujen aloitus- ja maalipaikan mukaan.',
                    2 => 'Q2. Mitkä aloitus- ja maalipaikat estävät tutkijaa käymästä suurimmassa mahdollisessa ruutumäärässä?'
                ]

        ]

    ],

    'right-and-left' => [
        'title' => 'Oikea ja vasen',
        'text' => 'Oikea ja vasen on kilpailu- ja yhteistyöpeli. Molemmat joukkueet tekevät yhteistyötä luodakseen polun kohti tavoitetta, kun taas samalla he kilpailevat käyttääkseen mahdollisimman monta niille osoitettua laattaa: keltainen joukkue yrittää lisätä mahdollisimman monta käännöstä vasemmalle ja punainen joukkue yrittää lisätä mahdollisimman monta käännöstä oikealle.',
        'questions' => [
            'content' =>
                [
                    1 => 'Q1. Jos aloitus ja maali on järjestetty kuten tämän videon ensimmäisessä ottelussa, onko jommankumman joukkueen mahdollista voittaa?',
                    2 => 'Q2. Kun aloitus ja maali järjestetään, kuten Annan voittamassa pelissä, onko tasapeli mahdollinen?',
                    3 => 'Q3. Onko olemassa aloitus- ja maalijärjestelyjä, jotka suosivat jompaa kumpaa joukkuetta?',
                    4 => 'Q4. Ottaen huomioon aloitus- ja maalipaikkojen välimatkan, onko mahdollista ennustaa, mikä on ero voittavan ja häviävän joukkueen välillä?'
                ]

        ]

    ],


    'keep-off-my-path' => [
        'title' => 'Pysy poissa polultani',
        'text' => 'Pysy poissa polultani on kilpailullinen peli, jossa on kaksi joukkuetta. Alkaen pelilaudan vastakkaisista päistä, kaksi joukkuetta rakentavat polkuja, joilla pyritään estämään toista joukkuetta. Se joka onnistuu estämään toista pidentämästä polkuaan, voittaa.',
        'questions' => [
            'content' =>
                [
                    1 => '1. Onko olemassa aloituspaikkoja, jotka suosivat jompaa kumpaa joukkuetta?',
                    2 => '2. Onko tasapeli mahdollinen?',
                    3 => '3. Onko pelaajalla, joka aloittaa, etulyöntiasema?',
                    4 => '4. Onko olemassa vedenpitävää pelistrategiaa, jonka ensimmäisen siirron tehnyt pelaaja voi ottaa käyttöönsä varmistaakseen, ettei koskaan häviä.'
                ]

        ]

    ],

    'tug-of-war' => [
        'title' => 'Köydenveto',
        'text' => 'Köydenveto on yhteistyöhön perustuva ja kilpailullinen peli. Kaksi joukkuetta (keltainen ja punainen) työskentelevät yhdessä päästäkseen pelilaudan ylimpiin ruutuihin aloittaen reitin rakentamisen alimmaisten ruutujen keskimmäisestä ruudusta. Keltainen joukkue yrittää päästä vasemmalla puolella oleviin ruutuihin, kun taas punainen joukkue yrittää päästä oikealla puolella oleviin ruutuihin.',
        'questions' => [
            'content' =>
                [
                    1 => '1. Onko olemassa strategiaa, joka johtaa aina voittoon?',
                    2 => '2. Onko aloittavalla pelaajalla etulyöntiasema?',
                    3 => '3. Jos molemmat pelaajat (tai joukkueet) ovat yhtä tarkkaavaisia, loppuuko peli aina tasapeliin, toisin sanoen keskelle?',
                ]

        ]

    ],

    'explorer-without-footprints' => [
        'title' => 'Tutkimusmatkailija',
        'text' => 'Tutkimusmatkailija kulkee ympäri pelilautaa aloituspisteestä maaliin yrittäen käydä kaikissa ruuduissa. Tutkimusmatkailijan kulkiessa pelialustalla hän jättää erivärisiä jalanjälkiä, joita seuraamalla ja askelten värejä tulkitsemalla robotti voi kulkea maaliin. Pelistä tulee entistä kiehtovampi, kun tutkimusmatkailija poistaa jalanjäljet ja jättää ruutuihin vain värit.',
        'material' => 'ja punaisia, keltaisia ja harmaita tusseja (tai lyijykyniä)',
        'questions' => [
            'content' =>
                [
                    1 => '1. Mitä eroa on pelilaudalla, jolla on värillisiä jalanjälkiä, ja pelilaudalla, jolla on pelkästään värejä ilman jalanjälkiä?',
                    2 => '2. Kumpi pelilauta tarjoaa enemmän liikkumisvapautta, jos voimassa ovat samat kääntymissäännöt, jotka perustuvat väreihin?',
                    3 => '3. Onko pelilaudalla mahdollisia reittejä, kun käytetään pelkkiä värejä, jotka eivät ole mahdollisia, kun käytetään värillisiä jalanjälkiä?',
                    4 => '4. Onko pelilaudalla mahdollisia reittejä, kun käytetään värillisiä jalanjälkiä, jotka eivät ole mahdollisia, kun käytetään pelkkiä värejä?'
                ]

        ]

    ],

    'texts' => [
        1 => '"Coding@Home" sisältää lyhyitä videoita, joissa on tee-se-itse-materiaalia, pulmapelejä, arvoituksia, kiinnostavia pelejä ja koodaushaasteita jokapäiväiseen käyttöön perheen parissa tai koulussa. Et tarvitse aikaisempaa tietoa ohjelmoinnista etkä elektronisia laitteita harjoitusten tekemiseen. Harjoitukset stimuloivat laskennallista ajattelua ja kasvattavat oppilaiden, vanhempien ja opettajien taitoja kotona tai koulussa.',
        2 => 'Euroopan Unionin koodausviikon Coding@Home-sarja perustuu Urbinon yliopiston ja CodeMOOCnet-yhdistyksen <a href="https://www.raicultura.it/speciali/codinginfamiglia/" target="_blank">“Coding in famiglia”</a> -aloitteeseen yhteistyössä Rai Culturan kanssa. Tehtäviä vetää Alessandro Bogliolo, joka on tietokonejärjestelmien opettaja Urbinon yliopistossa, <a href="/ambassadors?country_iso=IT" target="_blank">Italian EU-koodiviikon lähettiläs</a> ja kaikkien lähettiläiden koordinaattori sekä Digital Skills and Jobs -koalition hallintoneuvoston jäsen. ',
        3 => 'Jos olet kiinnostunut enemmän harjoituksista ilman digitaalista teknologiaa tai harjoituksista eri ohjelmointikielillä, robotiikasta, micro:bitistä ja niin edelleen, tutustu <a href="/training">Euroopan koodausviikon “oppimismoduuleihin”</a>, jotka sisältävät opetusvideoita ja alakoulua, yläkoulua ja toisen asteen oppilaitoksia varten erikseen tehdyt tuntisuunnitelmat. Tutustu myös Euroopan Unionin koodausviikon <a href="/resources/learn">oppijoiden</a> ja <a href="/resources/teach">opettajien</a> resurssisivuihin. '
    ]
];