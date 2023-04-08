<?php
    header('Access-Control-Allow-Origin: *');
  
    $plants = [
        [   
            "img" => "Alder.png",
            "name" => "Alder",
            "description" => "Alders are trees comprising the genus Alnus in the birch family Betulaceae. The genus comprises about 35 species[2] of monoecious trees and shrubs, a few reaching a large size, distributed throughout the north temperate zone with a few species extending into Central America, as well as the northern and southern Andes.",
            "scientific" => "Alnus",
            "family" => ["Black Alder","Common Alder","False Alder","Gray Alder",]
        ],
        [   
            "img" => "Ash.png",
            "name" => "Ash",
            "description" => " Commonly called ash, is a genus of flowering plants in the olive and lilac family, Oleaceae. It contains 45–65 species of usually medium to large trees, mostly deciduous, though a number of subtropical species are evergreen. The genus is widespread across much of Europe, Asia, and North America",
            "scientific" => "Fraxinus",
            "family" => ["Black ash ","Blue ash","Cane ash","European ash",]
        ],
        [   
            "img" => "Birch.jpg",
            "name" => "Birch",
            "description" => "A birch is a thin-leaved deciduous hardwood tree of the genus Betula (/ˈbɛtjʊlə/),[2] in the family Betulaceae, which also includes alders, hazels, and hornbeams. It is closely related to the beech-oak family Fagaceae",
            "scientific" => "Betula",
            "family" => ["Black birch","Bolean birch","Canoe birch","Cherry birch",]
        ],
        [   
            "img" => "Cabbage.jpg",
            "name" => "Cabbage",
            "description" => "Brassica oleracea is a plant species from family Brassicaceae that includes many common cultivars used as vegetables, such as cabbage, broccoli, cauliflower, kale, Brussels sprouts, collard greens, Savoy cabbage, kohlrabi, and gai lan",
            "scientific" => "Brassica oleracea",
            "family" => ["Clumpfoot cabbage","Meadow cabbage","Skunk cabbage","Swamp cabbage",]
        ],
        [   
            "img" => "Dogwood.jpg",
            "name" => "Dogwood ",
            "description" => "Cornus is a genus of about 30–60 species[Note 1] of woody plants in the family Cornaceae, commonly known as dogwoods, which can generally be distinguished by their blossoms, berries, and distinctive bark",
            "scientific" => "Cornus",
            "family" => ["American dogwood","Florida dogwood","Flowering dogwood","Kousa dogwood",]
        ],
        [   
            "img" => "Dahlia.jpg",
            "name" => "Dahlia",
            "description" => "Dahlia is a genus of bushy, tuberous, herbaceous perennial plants native to Mexico and Central America. A member of the Asteraceae family of dicotyledonous plants, its relatives thus include the sunflower, daisy, chrysanthemum, and zinnia. ",
            "scientific" => "Dahlia",
            "family" => ["Asteraceae","Sunflower","Daisy","Zinnia",]
        ],
        
  

    ];

    $data = json_encode($plants);
    echo $data;
    
?>