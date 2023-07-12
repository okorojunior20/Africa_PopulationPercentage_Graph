 <!DOCTYPE html>
<html>
<head>
    <title>Population Bar Chart</title>
    <style>
        .bar-chart {
            display: flex;
            justify-content:center;
            align-content:center;
            flex-direction:column;
            align-items:;
          
        }

        .bar {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            
        }

        .bar .flag {
            width: 30px;
            height: 20px;
            background-repeat: no-repeat;
            background-size: contain;
            margin-right: 10px;
        }

        .bar .percentage {
            width: 100%;
            background-color: #2196F3;
            color: #fff;
            text-align: right;
            padding: 4px;
            margin-right: 0px;
        }

        .bar .population {
            width: 150px;
            background-color: #f1f1f1;
            padding: 4px;
            text-align: right;
        }
    </style>
</head>
<body>
    
    <div class="bar-chart">
        <?php
        $continentPopulation = 1868169232;

        $countryPopulations = array(
            'Nigeria' => 223804632,
            'Niger' => 27144573,
            'Rwanda' => 14094683,
            'Zambia' => 20569737,
            'Zimbabwe' => 15378243,
            'Algeria' => 46181212,
            'Angola' => 36684202,
            'Benin Republic' => 12953540,
            'Botswana' => 2675352,
            'Burkina Faso' => 23251485,
            'Burundi' => 13238559,
            'Cameroon' => 28647293,
            'Cabo Verde' => 598682,
            'Central African Republic' => 5742315,
            'Chad' => 18278568,
            'Comoros' => 852075,
            'Congo, Democratic Republic of the - Kinshasa' => 102262808,
            'Congo, Republic of the - Brazzaville' => 6106869,
            "Cote d'Ivoire (Ivory Coast)" => 28262050,
            "Djibouti" => 1136455,
            'Egypt' => 112716598,
            'Equatorial Guinea' => 1714671,
            'Eritrea' => 3748901,
            'Eswatini' => 1210822,
            'Ethiopia' => 126527060,
            'Gabon' => 2436566,
            'Gambia' => 2773168,
            'Ghana' => 34121985,
            'Guinea' => 14190612,
            'Guinea-Bissau' => 2012000,
            'Kenya' => 55100586,
            'Lesotho' => 2330318,
            'Liberia' => 5045000,
            'Libya' => 6888388,
            'Madagascar' => 30325732,
            'Malawi' => 20931751,
            'Mali' => 23293698,
            'Mauritania' => 4862989,
            'Mauritius' => 1300557,
            'Morocco' => 37840044,
            'Mozambique' => 33897354,
            'Namibia' => 260472,
            'Réunion' => 873102,
            'Sao Tome and Principe' => 231856,
            'Senegal' => 17763163,
            'Seychelles' => 107660,
            'Sierra Leone' => 8052000,
            'Somalia' => 18143378,
            'South Africa' => 60867543,
            'South Sudan' => 11511031,
            'Sudan' => 48109006,
            'Tanzania' => 67438106,
            'Togo' => 9053799,
            'Tunisia' => 12458223,
            'Uganda' => 48582334,
          
    
        ); 
        $flags = array(
            'Nigeria' => "data:image/png;base64,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",

            
        );

        foreach ($countryPopulations as $country => $population) {
            $percentage = ($population / $continentPopulation) * 100/1;
            echo '<div class="bar">';
            echo '<div class="flag" style="background-image: url(./flags/' . $country . '.png);"></div>';
            echo '<div class="country-name">' . $country .'===>' .'</div>';
            echo '<div class="percentage" style="width:' . $percentage .'%'. '%;">' . number_format($percentage, 2) . '%</div>';
            echo '<div class="population">' . number_format($population) . '</div>';
            echo '</div>';
         
        }
        ?>
    </div>
   
</body>
</html> 

