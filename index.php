<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Referrer-Policy: no-referrer");
header("Content-Type: application/json; charset=UTF-8");

$products = [
  0 => [
    'id' => 1,
    'title' => 'Banan Rättvisemärkt Klase',
    'description' => 'En ekologiskt och rättvisemärkt odlad banan. Bananer passar bra som mellanmål. Bananen är temperaturkänslig, mycket känslig för uttorkning, etylen och kylskador. Förvaras i rumstemperatur eller svalt, aldrig i kylskåp. Observera att ursprungsland för denna produkt kan variera beroende på säsong och tillgång. ',
    'image' => 'https://d1hr6nb56yyl1.cloudfront.net/product-images/96529-230.jpg',
    'price' => 28.48,
    'category' => 'Frukter/Grönsaker'
  ],
  1 => [
    'id' => 2,
    'title' => 'Halloumi',
    'description' => 'Halloumiost från Cypern gjord på mjölk från kor, får och getter. Halloumi kan stekas, grillas eller ätas som den är. Vilken är din ostfavorit? Kika närmre i vårt skafferi av ostar. Mjölkursprung: Cypern TILLAGNING Kan stekas, grillas eller ätas som den är.',
    'image' => 'https://d1hr6nb56yyl1.cloudfront.net/product-images/92128-230.jpg',
    'price' => 19.17,
    'category' => 'Mejeri'
  ],
  2 => [
    'id' => 3,
    'title' => 'Spetskål',
    'description' => 'Spetskål har en mild smak och kan användas som vitkål. Passar även att gratineras. Observera att ursprungsland för denna produkt kan variera beroende på säsong och tillgång. Om varans ursprungsland är av stor vikt för dig finns möjligheten att tacka nej till en ersättningsvara. ',
    'image' => 'https://d1hr6nb56yyl1.cloudfront.net/product-images/95064-230.jpg',
    'price' => 25.56,
    'category' => 'Frukter/Grönsaker'
  ],
  3 => [
    'id' => 4,
    'title' => 'Svinngoda Morötter',
    'description' => 'Morotens orangeröda färg kommer från det höga innehållet av betakaroten, vilket i kroppen omvandlas till A-vitamin. Smakmässigt är moroten söt, med en knaprig konsistens. Morötter kan ätas råa, och används även i grytor, gratänger, soppor och wok.',
    'image' => 'https://d1hr6nb56yyl1.cloudfront.net/product-images/95782-230.jpg',
    'price' => 5.00,
    'category' => 'Frukter/Grönsaker'
  ],
  4 => [
    'id' => 5,
    'title' => 'Ruccola',
    'description' => 'Vår ekologiska ruccola, eller senapskål som det också kallas, är en småbladssallad som har intensiv pepprig smak, liknande rädisa. Ruccola används ofta i blandade sallader, men även till pastarätter eller på pizza.',
    'image' => 'https://d1hr6nb56yyl1.cloudfront.net/product-images/96563-230.jpg',
    'price' => 10.00,
    'category' => 'Frukter/Grönsaker'
  ],
  5 => [
    'id' => 6,
    'title' => 'Mango',
    'description' => 'Mangon har en frisk, kraftig och söt smak, men en speciell exotisk nyans. Inuti finns en stor, oval kärna som fruktköttet är fastvuxet i. Detta gör att bästa sättet att skära upp mango är med skalet på. Dela frukten genom att skära längs med på båda sidor om kärnan. ',
    'image' => 'https://d1hr6nb56yyl1.cloudfront.net/product-images/94709-230.jpg',
    'price' => 15.00,
    'category' => 'Frukter/Grönsaker'
  ],
  6 => [
    'id' => 7,
    'title' => 'Brioche Bagel',
    'description' => 'I särklass det godaste brödet! Låt oss presentera våra franska brioche bagels bakade på smör. Vi garanterar att de tar dina lunchmackor till högre höjder. Ursprung vetemjöl: Frankrike. ',
    'image' => 'https://d1hr6nb56yyl1.cloudfront.net/product-images/122656-230.jpg',
    'price' => 20.00,
    'category' => 'Bröd'
  ],
  7 => [
    'id' => 8,
    'title' => 'Classic Glasflaska',
    'description' => 'Coca-Cola classic är världens mest välkända och älskade läskedryck. Den har släckt törsten hos folk världen över sedan den skapades av apotekaren Dr. John Pemberton i Atlanta i USA 1886.',
    'image' => 'https://d1hr6nb56yyl1.cloudfront.net/product-images/67627-230.jpg',
    'price' => 62.95,
    'category' => 'Dryck'
  ],
  8 => [
    'id' => 9,
    'title' => 'Crème Fraîche 32%',
    'description' => 'Naturell crème fraiche med mild syrlig smak och tjock krämig konsistens. Produkten framställs genom syrning av grädde från svenska Arlagårdar. Crème fraiche är mycket användbar i både kall och varm matlagning. ',
    'image' => 'https://d1hr6nb56yyl1.cloudfront.net/product-images/4703-230.jpg',
    'price' => 29.95,
    'category' => 'Mejeri'
  ],
  9 => [
    'id' => 10,
    'title' => 'Pasta Penne Rigate',
    'description' => 'Pasta Penne Rigate från Barilla är en kort pasta med många olika namn. Eftersom Penne pasta är så älskad av italienare ger varje region sitt unika namn till hela Italiens favoritpasta. I södra Italien kallas det exempelvis \\"Maltagliati\\" pasta (dåligt skurna), medan det i Umbrien heter \\"Spole\\" (spolar).',
    'image' => 'https://d1hr6nb56yyl1.cloudfront.net/product-images/10221-230.jpg',
    'price' => 13.95,
    'category' => 'Pasta'
  ],
  10 => [
    'id' => 11,
    'title' => 'Grädde Matlagning 15%',
    'description' => 'Arla Köket® Matlagningsgrädde 13% är en kokbar grädde med lägre fetthalt och längre hållbarhet. Matgrädden som lockar fram det bästa i vardagsmatlagningen – även en liten mängd grädde gör skillnad för smaken. Den har en fyllig, gräddig smak och är idealisk att använda i grytor, soppor och såser. ',
    'image' => 'https://d1hr6nb56yyl1.cloudfront.net/product-images/4554-230.jpg',
    'price' => 23.50,
    'category' => 'Mejeri'
  ],
  11 => [
    'id' => 12,
    'title' => 'Filmjölk 3%',
    'description' => 'Klassisk filmjölk gjord på svensk mjölk från Arlagårdar. Smaken är svagt syrlig med karakteristisk filarom och lätt gräddighet. Konsistensen är lite tjockare och filen kan med fördel ätas med müsli, flingor, frukt eller bär.',
    'image' => 'https://d1hr6nb56yyl1.cloudfront.net/product-images/36436-230.jpg',
    'price' => 12.95,
    'category' => 'Mejeri'
  ],
  12 => [
    'id' => 13,
    'title' => 'Natur Toalettpapper',
    'description' => 'Längd per rulle: 28m. 3-lagspapper. Varning! Tänk på kvävningsrisken. Låt inte små barn leka med plastförpackningen.',
    'image' => 'https://d1hr6nb56yyl1.cloudfront.net/product-images/93880-230.jpg',
    'price' => 59.95,
    'category' => 'Övrigt'
  ],
  13 => [
    'id' => 14,
    'title' => 'Präst 31% Mellanlagrad',
    'description' => 'Vår goda Arla Ko® Präst® är en härligt gräddig ost, med inslag av sälta, behaglig beska och sötma. Osten passar perfekt som pålägg eller på din lasagne. Präst® har sina rötter i 1700-talets Småland. ',
    'image' => 'https://d1hr6nb56yyl1.cloudfront.net/product-images/81679-230.jpg',
    'price' => 66.97,
    'category' => 'Mejeri'
  ],
  14 => [
    'id' => 15,
    'title' => 'Normalsaltat 75%',
    'description' => 'Så naturligt och så gott. Bregott Normalsaltat har varit en favorit på den svenska smörgåsen sedan 1969. Smöret kärnas av grädde som sedan blandas med rapsolja och en nypa salt. Grädden finns med för den goda smakens skull och rapsoljan gör det lättare att bre på brödet.',
    'image' => 'https://d1hr6nb56yyl1.cloudfront.net/product-images/4189-230.jpg',
    'price' => 49.95,
    'category' => 'Mejeri'
  ],
  15 => [
    'id' => 16,
    'title' => 'Gourmetskinka Rökt Skivad',
    'description' => 'Vår klassiska varmrökta gourmetskinka är Sveriges mest köpta – testa den och du förstår varför. Här kombineras en smakrik karaktär med en tunn och mjäll konsistens. Svensk köttråvara.',
    'image' => 'https://d1hr6nb56yyl1.cloudfront.net/product-images/1063-230.jpg',
    'price' => 28.95,
    'category' => 'Övrigt'
  ],
  16 => [
    'id' => 17,
    'title' => 'Champinjoner',
    'description' => 'Champinjonen har en fin, mild och nötig smak. Den kan ätas rå i t.ex. sallades, men är även god att kokas, stekas eller friteras.',
    'image' => 'https://d1hr6nb56yyl1.cloudfront.net/product-images/95067-230.jpg',
    'price' => 16.95,
    'category' => 'Frukter/Grönsaker'
  ],
  17 => [
    'id' => 18,
    'title' => 'Gul Lök',
    'description' => 'Gul lök är en bra smaksättare. Passar bra både som kall och varm i matlagning.',
    'image' => 'https://d1hr6nb56yyl1.cloudfront.net/product-images/95711-230.jpg',
    'price' => 2.09,
    'category' => 'Frukter/Grönsaker'
  ],
  18 => [
    'id' => 19,
    'title' => 'Paprika Mix',
    'description' => 'Obs, färg kan variera! Paprikamixen innehåller 2-3 paprikor beroende på storlek, som passar utmärkt i grytan eller råa i en sallad.',
    'image' => 'https://d1hr6nb56yyl1.cloudfront.net/product-images/95787-230.jpg',
    'price' => 42.50,
    'category' => 'Frukter/Grönsaker'
  ]
];

echo json_encode($products, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

?>