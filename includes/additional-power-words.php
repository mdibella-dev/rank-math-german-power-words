<?php
/**
 * Functions to handle the backend.
 *
 * @author  Marco Di Bella
 * @package rank-math-german-power-words
 */

namespace rank_math_german_power_words;


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;




add_filter( 'rank_math/metabox/power_words', function( $words ){

    $new_words = [

'abenteuerlich',
'abkassieren',
'ablehnen',
'ablehnung',

'abrechnen',

'abschreiben',

'abstoßend',

'absurd',

'abzocke',

'abzocken',

'ächten',

'achtstellig',

'adelig',

'akzeptanz',

'albtraum',

'alle',

'all-in-one-',

'altmeister',

'am besten',

'am größten',

'amüsant',

'anerkennen',

'anerkennung',

'anfeuern',

'angenehm',

'angreifen',

'anmutig',

'anpöbeln',

'anschließen',

'anwesen',

'apokalypse',

'arglist',

'arglistig',

'arrogant',

'arschloch',

'atemberaubend',

'attackieren',

'aufblühen',

'auffallend',

'aufgeregt',

'aufregend',

'aufschlussreich',

'aufsteigen',

'aufwändig',

'augenwischerei',

'ausbeuten',

'ausführlich',

'ausgezeichnet',

'ausrasten',

'außergewöhnlich',

'außergewöhnliche',

'außerordentlich',

'austausch',

'automatisch',

'autorität',

'bank',

'bankrott',

'baustein',

'beängstigend',

'bedeutend',

'bedeutsam',

'bedeutungsvoll',

'beeindruckend',

'befehlen',

'beglaubigen',

'beglaubigt',

'beglaubigung',

'begleiten',

'beglückend',

'beispiel',

'belastung',

'beliebt',

'bemerkenswert',

'berauschend',

'bereichern',

'berühmt',

'besiegen',

'besserwisser',

'beste',

'bestrafen',

'beteiligen',

'betrug',

'betucht',

'bewährt',

'bewegung',

'beweis',

'beweisen',

'bewundernswert',

'bezaubernd',

'beziehung',

'bezwingen',

'bindung',

'blamage',

'blamieren',

'blendend',

'bombe',

'bonus',

'boom',

'boomen',

'booster',

'börse',

'brillant',

'broker',

'brüderlichkeit',

'bullshit',

'bürgen',

'burn-out',

'business',

'case study',

'cash',

'cheatsheet',

'clever',

'club',

'community',

'dabei sein',

'dankbar',

'das beste',

'das größte',

'das stärkste',

'datenschutz',

'dazugehören',

'definitiv',

'definitive',

'demütigen',

'denkwürdig',

'diamant',

'direkt',

'diskret',

'dissertation',

'distinguiert',

'dividende',

'doktor',

'dominieren',

'doppeldeutig',

'doppelmoral',

'download',

'drama',

'draufgängerisch',

'dreist',

'dumm',

'dummheit',

'dunkel',

'dunkelheit',

'duty-free',

'echt',

'edel',

'effektiv',

'effizient',

'ehre',

'ehrlich',

'ehrlichkeit',

'eid',

'eigenmächtig',

'eindeutig',

'eindrucksvoll',

'eine überlegung wert',

'einfach',

'einflussreich',

'einführungspreis',

'einheit',

'einheitlich',

'einig',

'einklang',

'einmalig',

'einprägsam',

'einzigartig',

'ekelerregend',

'elegant',

'elemente',

'elitär',

'elite',

'empathie',

'empathisch',

'empfehlenswert',

'engagiert',

'enorm',

'entdecken',

'entfachen',

'entfesseln',

'enthüllen',

'enthüllung',

'entschlüsseln',

'enttäuschend',

'entwirrt',

'episch',

'erfahrungsbericht',

'erfinderisch',

'erfolg',

'erfolgreich',

'erfüllen',

'ergebnis',

'ergebnislos',

'erklären',

'erlesen',

'ermäßigen',

'ermutigen',

'erniedrigen',

'erobern',

'erprobt',

'erreichbar',

'erschwinglich',

'erspartes',

'erstattung',

'erstaunlich',

'erweisen',

'essenziell',

'euro',

'exklusiv',

'exklusive',

'exotisch',

'experiment',

'experte',

'explodieren',

'exquisit',

'extra',

'extra-',

'exzellent',

'fabelhaft',

'fahrplan',

'fake news',

'fakten',

'faktoren',

'falle',

'fälschen',

'fälschung',

'fantasievoll',

'fantastisch',

'farce',

'faszinierend',

'fatal',

'fatale',

'fehler',

'fehlerfrei',

'feiern',

'feigling',

'fein',

'fertig',

'fesselnd',

'festmahl',

'feuer',

'flucht',

'flüchten',

'folter',

'förderlich',

'formel',

'forscher',

'forschung',

'freebie',

'fremd',

'freude',

'frieden',

'frust',

'führend',

'fundamental',

'furchtlos',

'füreinander',

'fürst',

'fürstlich',

'garantie',

'garantieren',

'garantiert',

'geächtet',

'gebote',

'gefahr',

'gefährden',

'gefährlich',

'gefälscht',

'gefängnis',

'geheim',

'geheim-',

'geheimnis',

'geheimnisvoll',

'gehoben',

'geist',

'geiz',

'geld',

'geld-zurück-garantie',

'gemeinsam',

'gemeinsamkeit',

'gemeinschaft',

'gemeinschaftlich',

'generalabrechnung',

'generalangriff',

'genie',

'genormt',

'geschenk',

'geschickt',

'geschlossen',

'geschmackvoll',

'geschmuggelt',

'gesperrt',

'geständnis',

'getestet',

'gewalt',

'gewaltig',

'gewinn',

'gewinnen',

'gierig',

'gift',

'gigantisch',

'gigantische',

'glänzend',

'glaube',

'gleichgesinnt',

'gleichgesinnte',

'gleichklang',

'global',

'glück',

'glücklich',

'gold',

'golden',

'goldgrube',

'graf',

'grandios',

'gratis',

'großartig',

'großmeister',

'größte',

'großverdiener',

'großzügig',

'grund',

'gründe',

'grundlegend',

'gruppe',

'guide',

'günstig',

'gutschein',

'gutschrift',

'hacks',

'harmonie',

'harmonisch',

'hartnäckig',

'hass',

'hassen',

'hässlich',

'hater',

'heftig',

'held',

'heldenhaft',

'helfen',

'herausforderung',

'herrlich',

'herrschen',

'herrscher',

'hervorragend',

'herz',

'herzlich',

'heuchelei',

'heuchlerisch',

'hilfe',

'hinterhalt',

'hinterhältig',

'hinterlist',

'hinterlistig',

'hintertür',

'hiobsbotschaft',

'hochpreisig',

'hoffnung',

'how-to',

'hübsch',

'hundertprozentig',

'ideal',

'ideen',

'idiotensicher',

'illegal',

'im nu',

'imitieren',

'imponierend',

'inakzeptabel',

'inklusive',

'innovativ',

'inoffiziell',

'insider',

'insolvenz',

'inspirierend',

'intelligent',

'intensiv',

'interessant',

'intim',

'intrige',

'investor',

'irre',

'irrtümlich',

'jackpot',

'jeder',

'jetzt',

'jubeln',

'kaiser',

'kassieren',

'katastrophal',

'katastrophe',

'kinderleicht',

'klar',

'klasse',

'klauen',

'klug',

'kollege',

'kollektiv',

'kolossal',

'komfortabel',

'komponenten',

'könig',

'königlich',

'konkurrenzlos',

'kontrolle',

'kontrolliert',

'kontrovers',

'kooperation',

'kopieren',

'kosteneffizient',

'kostengünstig',

'kostenlos',

'kostspielig',

'kraftvoll',

'krankung',

'kreativ',

'kreis',

'kriminell',

'kühn',

'kult',

'lächerlich',

'langweilen',

'launch',

'lebendig',

'lebenslang',

'lebensverändernd',

'lebhaft',

'legalisieren',

'legendär',

'legende',

'leicht',

'leidenschaft',

'leidenschaftlich',

'lektionen',

'liebenswert',

'liste',

'lob',

'loben',

'loser',

'lüge',

'lügen',

'lust',

'lustig',

'luxuriös',

'luxus',

'machbar',

'machenschaften',

'macht',

'mächtig',

'magie',

'magisch',

'maharadscha',

'makellos',

'manipulation',

'manipulieren',

'massiv',

'mastermind',

'meister',

'meisterhaft',

'meistern',

'merkwürdig',

'milliardär',

'millionär',

'minuten',

'mitgefühl',

'mithilfe',

'mitmachen',

'mitreißend',

'mogul',

'mord',

'motivation',

'mühelos',

'mühsam',

'mulmig',

'mumm',

'muster',

'mut',

'mutig',

'mysteriös',

'mystisch',

'nachmachen',

'nazi',

'negativ',

'nervig',

'neu',

'nicht alltäglich',

'nie dagewesen',

'niederlage',

'niedrigpreis',

'nobel',

'normen',

'not',

'notgroschen',

'nützlich',

'oberschicht',

'offenbaren',

'offiziell',

'öffnen',

'okkult',

'organisieren',

'originell',

'packend',

'panisch',

'partner',

'partnerschaft',

'patentiert',

'pech',

'peinlich',

'perfekt',

'permanent',

'pfusch',

'phänomenal',

'platin',

'pleite',

'praktisch',

'preis',

'preisgekrönt',

'preisnachlass',

'preissenkung',

'premium-',

'prinzipen',

'privat',

'privatsphäre',

'probanden',

'problem',

'problemlos',

'professionell',

'professor',

'profit',

'profitabel',

'profitieren',

'protz',

'prozente',

'prüfung',

'prunk',

'punkten',

'qual',

'rabatt',

'rabatt-code',

'rar',

'rätsel',

'rätselhaft',

'rausch',

'reduzieren',

'reduziert',

'regeln',

'reibungslos',

'reich',

'reichtum',

'reinfall',

'reizend',

'reizvoll',

'rente',

'revolutionär',

'risiko',

'risikofrei',

'risikolos',

'riskieren',

'rückgrat',

'rufmord',

'ruhm',

'ruhmreich',

'ruin',

'rundumschlag',

'sagenumwoben',

'schämen',

'schatz',

'schema',

'schenken',

'schlau',

'schlimm',

'schloss',

'schmerzhaft',

'schmerzlos',

'schmuggeln',

'schmutzig',

'schnäppchen',

'schnell',

'schockierend',

'schriftlich',

'schritte',

'schwarzmarkt',

'schweigen',

'schwelgen',

'schwören',

'schwung',

'sechsstellig',

'sekte',

'sekunden',

'selbstmord',

'selten',

'sensationell',

'sich (weiter-)entwickeln',

'sich durchsetzen',

'sicher',

'siebenstellig',

'sieg',

'siegel',

'siegen',

'simpel',

'skandal',

'sklave',

'skrupellos',

'smart',

'sofort',

'solidarisch',

'solidarität',

'sonderpreis',

'sorge',

'sorgen',

'spannend',

'sparen',

'sparpreis',

'sparsam',

'sparschwein',

'spaßig',

'spektakulär',

'spezialist',

'spicken',

'spickzettel',

'stagnation',

'stagnieren',

'stark',

'stärken',

'stärkste',

'starten',

'statistik',

'steinreich',

'steuerfrei',

'stichprobe',

'stichprobenartig',

'still stehen',

'stilvoll',

'stinkreich',

'strafbar',

'strafe',

'strategien',

'stress',

'struktur',

'studie',

'stunt',

'sündhaft',

'sympathie',

'sympathisch',

'tabelle',

'tabu',

'tadellos',

'tapfer',

'tapferkeit',

'tatsächlich',

'täuschen',

'täuschung',

'team',

'techniken',

'teilhaben',

'teilnehmen',

'template',

'terror',

'testen',

'testergebnis',

'teuer',

'tiefpreis',

'tiefstpreis',

'tipps',

'titan',

'tod',

'todlangweilig',

'tödlich',

'todsicher',

'toll',

'tool',

'traumhaft',

'treu',

'treue',

'trick',

'tricks',

'triumph',

'tutorial',

'tyrann',

'übel',

'überdurchschnittlich',

'überlegen',

'übernatürlich',

'überprüften',

'überragend',

'überraschend',

'überraschung',

'übersetzen',

'übersinnlich',

'überwältigend',

'überwinden',

'überzeugen',

'überzeugend',

'überzeugt',

'ultimativ',

'ultimative',

'umwerfend',

'unangenehm',

'unausgesprochen',

'unausstehlich',

'unautorisiert',

'unbedingt',

'unbefugt',

'unbegreiflich',

'unbekannt',

'unbeschreiblich',

'unbewusst',

'unbezahlbar',

'undercover-',

'undurchsichtig',

'unehrlich',

'unerhört',

'unerkannt',

'unerreichbar',

'unerschwinglich',

'unerwartet',

'unfair',

'unfassbar',

'ungerecht',

'ungewöhnlich',

'unglaublich',

'unglück',

'unheimlich',

'universität',

'unkompliziert',

'unkonventionell',

'unmenschlich',

'unmoralisch',

'unschlagbar',

'untergrund',

'unterhaltsam',

'unterschlagen',

'unterstützen',

'unterstützung',

'untersuchung',

'unübertroffen',

'unverfroren',

'unvergesslich',

'unverhüllt',

'unverzichtbar',

'unwiderstehlich',

'unzensiert',

'vehement',

'verachten',

'verbergen',

'verbieten',

'verbilligen',

'verbinden',

'verblüffend',

'verborgen',

'verboten',

'verbundenheit',

'verbürgen',

'verdienen',

'verdoppeln',

'verdreifachen',

'verein',

'vereint',

'verführerisch',

'vergessen',

'vergnügen',

'vergnügt',

'vergolden',

'verheimlichen',

'verifiziert',

'verkommen',

'verlässlich',

'verletzen',

'verlockend',

'verloren',

'vermeiden',

'vermögen',

'vermögend',

'verraten',

'versagen',

'versager',

'verschlechtern',

'verschleiern',

'verschlimmbessern',

'verschlossen',

'verschweigen',

'verschwenden',

'verschwenderisch',

'verschwendung',

'verschwören',

'verschwörung',

'versichern',

'versiegelt',

'verständlich',

'verständnis',

'versteck',

'verstecken',

'versteckt',

'verstoßen',

'vertrag',

'vertraglich',

'vertraulich',

'vertuschen',

'vervierfachen',

'verwahrlost',

'verwegen',

'verweigern',

'verwundet',

'viral',

'vollkommen',

'vorausgefüllt',

'vorlage',

'vornehm',

'vorwurf',

'wahnsinn',

'wahnsinnig',

'wahrheit',

'wahrheiten',

'wallstreet',

'warmherzig',

'warnen',

'wege',

'weltmännisch',

'wenig bekannte',

'wertvoll',

'wichtig',

'widerlich',

'widerstand',

'wild',

'wildern',

'wirgefühl',

'wirklich',

'wirksam',

'wirkungsvoll',

'wissenschaft',

'wissenschaftlich',

'wucher',

'wunder',

'wunderbar',

'wundersam',

'wunderschön',

'wundervoll',

'würde',

'würdevoll',

'xxl',

'zar',

'zauberhaft',

'zeigen',

'zeitlos',

'zerschmettern',

'zerstören',

'zocken',

'zukunft',

'zusammen',

'zusammenbrechen',

'zusammenbruch',

'zusammengehörigkeit',

'zusammenhalt',

'zusammentun',

'zutaten',

'zuverlässig',

	];

	return array_merge( $words, $new_words );

});
