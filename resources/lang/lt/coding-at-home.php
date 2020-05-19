<?php

return [

    'title' => 'Coding@Home',
    'questions' => 'Klausimai',
    'material' => [
        "required" => "Būtini reikmenys",
        "chequered" => "languota lenta",
        "footprint" => "žaidimo plytelės su atspausdintais pėdsakais"
    ],
    'intro' => [
        'title' => 'Supažindinimas su „Coding@Home“',
    ],
    'explorer' => [
        'title' => 'Tyrinėtojas',
        'text' => 'Tyrinėtojas yra pirmas „Coding@Home“ žaidimas. Jame tyrinėtoją reikia vedžioti per lentą ir padėti pasiekti kelionės tikslą, aplankant kiek įmanoma daugiau langelių.',
        'questions' => [
            'content' =>
                [
                    1 => 'K1. Naudojant vaizdo įraše pateiktus pradžios ir pabaigos taškus, ar tyrinėtojas gali aplankyti visus langelius lentoje?',
                    2 => 'K2. Kurios pradžios ir pabaigos padėtys neleistų tyrinėtojui aplankyti daugiausia langelių lentoje?'
                ]

        ]

    ],

    'right-and-left' => [
        'title' => 'Kairė ir dešinė',
        'text' => ' „Kairė ir dešinė“ yra varžybinis ir bendradarbiavimo žaidimas. Dvi komandos bendradarbiauja, tiesdamos kelią iki tikslo, ir tuo pačiu varžosi, siekdamos panaudoti kuo daugiau jiems skirtų žaidimo plytelių: geltonoji komanda stengiasi įterpti į kelią kuo daugiau posūkių į kairę, o raudonoji komanda stengiasi padėti kiek įmanoma daugiau plytelių su posūkiu į dešinę.',
        'questions' => [
            'content' =>
                [
                    1 => 'K1. Naudojant vaizdo įraše, pirmame žaidime pateiktas pradžios ir pabaigos padėtis, ar įmanoma vienai komandai laimėti?',
                    2 => 'K2. Naudojant pradžios ir pabaigos padėtis žaidime, kurį laimėjo Anna, ar galimos lygiosios?',
                    3 => 'K3. Ar yra tokių pradžios ir pabaigos padėčių išdėstymų, kurios suteiktų privalumą vienai iš komandų?',
                    4 => 'K4. Naudojant pradžios ir pabaigos padėčių išdėstymą, ar įmanoma numatyti taškų skirtumą tarp laimėjusios ir pralaimėjusios komandos? '
                ]

        ]

    ],


    'keep-off-my-path' => [
        'title' => 'Šalin nuo mano tako',
        'text' => '„Šalin nuo mano tako“ yra varžybinis žaidimas dviem komandoms. Komandos pradeda žaidimą priešingose lentos pusėse ir tiesia kelius taip, kad jie užkirstų priešingos komandos kelius. Laimi ta komanda, kuri neleidžia kitai komandai nutiesti kelio.',
        'questions' => [
            'content' =>
                [
                    1 => 'K1. Ar yra tokių pradžios taškų, kurie suteiktų pranašumą vienai iš komandų?',
                    2 => 'K2. Ar gali būti pasiektos lygiosios?',
                    3 => 'K3. Ar žaidėjas, kuris pradeda pirmas, įgyja pranašumą?',
                    4 => 'K4. Ar yra tokia absoliučios pergalės žaidimo strategija, kurią naudodamas žaidimą pradedantis žaidėjas niekada nepralaimėtų?'
                ]

        ]

    ],

    'tug-of-war' => [
        'title' => 'Virvės traukimas',
        'text' => ' „Virvės traukimas“ yra bendradarbiavimo ir varžybinis žaidimas. Dvi komandos (geltonoji ir raudonoji) pradeda žaidimą nuo lentos apačios vidurio ir bendradarbiauja, norėdamos pasiekti lentos viršų. Geltonoji komanda stengiasi pasiekti langelius kairėje, o raudonoji komanda – langelius dešinėje.',
        'questions' => [
            'content' =>
                [
                    1 => 'K1. Ar yra tokia žaidimo strategija, kuri visada užtikrintų pergalę?',
                    2 => 'K2. Ar žaidėjas, kuris pradeda pirmas, įgyja pranašumą?',
                    3 => 'K3. Jei abu žaidėjai žaidžia vienodai atidžiai, ar žaidimas visada pasibaigs lygiosiomis, t. y. centre?',
                ]

        ]

    ],

    'explorer-without-footprints' => [
        'title' => 'Tyrinėtojas',
        'text' => ' „Tyrinėtojas“ vaikšto po lentą nuo pradžios taško iki pabaigos taško, stengdamasis aplankyti visus langelius. Eidamas „tyrinėtojas“ palieka spalvotus pėdsakus, kurie leidžia robotui jais sekti, iššifruojant spalvas. Žaidimas tampa dar įdomesnis, kai „tyrinėtojas“ ištrina pėdsakus ir palieka tik spalvas.',
        'material' => 'ir raudonas, geltonas ir pilkas žymekliai (arba pieštukai)',
        'questions' => [
            'content' =>
                [
                    1 => 'K1. Kuo skiriasi lenta, pilna spalvotų pėdsakų, nuo lentos su spalvomis, bet be pėdsakų?',
                    2 => 'K2. Kuri lenta suteikia didesnę judėjimo laisvę, taikant tas pačias krypčių pagal spalvas taisykles?',
                    3 => 'K3. Ar lentoje su spalvomis yra tokių galimų kelių, kurie negalimi lentoje su spalvotais pėdsakais?',
                    4 => 'K4. Ar lentoje su spalvotais pėdsakais yra tokių galimų kelių, kurie negalimi lentoje tik su spalvomis? '
                ]

        ]

    ],

    'texts' => [
        1 => ' „Coding@Home“ – tai trumpų vaizdo įrašų, „pasidaryk pats“ reikmenų, galvosūkių, žaidimų ir programavimo iššūkių rinkinys, tinkantis kasdien naudoti namuose ir mokykloje. Norint mėgautis šiais užsiėmimais, nebūtina turėti jokių ankstesnių žinių ar elektroninių prietaisų. Užsiėmimai skirti ugdyti informatinį mąstymą ir lavinti mokinių, jų tėvų ir mokytojų žinias tiek namų aplinkoje, tiek mokykloje.',
        2 => 'ES programavimo savaitės „Coding@Home“ vaizdo įrašų serija sukurta remiantis Urbino universiteto ir CodeMOOCnet asociacijos <a href="https://www.raicultura.it/speciali/codinginfamiglia/" target="_blank">“Coding in famiglia”</a> iniciatyva bendradarbiaujant su „Rai Cultura“. Alessandro Bogliolo dirba Informacijos tvarkymo sistemų profesoriumi Urbino universitete, yra <a href="/ambassadors?country_iso=IT" target="_blank">Italijos ES programavimo savaitės ambasadorius</a> ir visų ambasadorių koordinatorius bei Skaitmeninių įgūdžių ir užimtumo koalicijos valdybos narys.',
        3 => 'Jei norite daugiau analoginių užsiėmimų arba užsiėmimų įvairiomis programavimo kalbomis, jus domina robotika, „micro:bit“ ir t. t., apsilankykite <a href="/training">ES programavimo savaitės mokymosi segmentų</a> puslapyje, kuriame rasite vaizdo mokymo priemonių ir pamokų planų pradinio, pagrindinio ir vidurinio ugdymo mokykloms. Taip pat apsilankykite ES programavimo savaitės <a href="/resources/learn">mokiniams</a> ir <a href="/resources/teach">mokytojams</a> skirtų išteklių puslapyje.'
    ]
];