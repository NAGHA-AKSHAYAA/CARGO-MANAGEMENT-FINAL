<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ordering.css">
    <title>Document</title>
</head>
<body>
    <form action="ordering.php" method = "get" id = "f">
    <h1>Order Placement:</h1>
    <p></p>
    <lable for = "city_pick_up">Pick Up City:</lable>
    <p></p>
    <select name="city_pick_up" id="city_pick_up">
    <?php
        $cities =  array(


                        'Adilabad',
                        'Anantapur',
                        'Chittoor',
                        'Kakinada',
                        'Guntur',
                        'Hyderabad',
                        'Karimnagar',
                        'Khammam',
                        'Krishna',
                        'Kurnool',
                        'Mahbubnagar',
                        'Medak',
                        'Nalgonda',
                        'Nizamabad',
                        'Ongole',
                        'Hyderabad',
                        'Srikakulam',
                        'Nellore',
                        'Visakhapatnam',
                        'Vizianagaram',
                        'Warangal',
                        'Eluru',
                        'Kadapa',

                        'Anjaw',
                        'Changlang',
                        'East Siang',
                        'Kurung Kumey',
                        'Lohit',
                        'Lower Dibang Valley',
                        'Lower Subansiri',
                        'Papum Pare',
                        'Tawang',
                        'Tirap',
                        'Dibang Valley',
                        'Upper Siang',
                        'Upper Subansiri',
                        'West Kameng',
                        'West Siang',

                        'Baksa',
                        'Barpeta',
                        'Bongaigaon',
                        'Cachar',
                        'Chirang',
                        'Darrang',
                        'Dhemaji',
                        'Dima Hasao',
                        'Dhubri',
                        'Dibrugarh',
                        'Goalpara',
                        'Golaghat',
                        'Hailakandi',
                        'Jorhat',
                        'Kamrup',
                        'Kamrup Metropolitan',
                        'Karbi Anglong',
                        'Karimganj',
                        'Kokrajhar',
                        'Lakhimpur',
                        'Marigaon',
                        'Nagaon',
                        'Nalbari',
                        'Sibsagar',
                        'Sonitpur',
                        'Tinsukia',
                        'Udalguri',

                        'Araria',
                        'Arwal',
                        'Aurangabad',
                        'Banka',
                        'Begusarai',
                        'Bhagalpur',
                        'Bhojpur',
                        'Buxar',
                        'Darbhanga',
                        'East Champaran',
                        'Gaya',
                        'Gopalganj',
                        'Jamui',
                        'Jehanabad',
                        'Kaimur',
                        'Katihar',
                        'Khagaria',
                        'Kishanganj',
                        'Lakhisarai',
                        'Madhepura',
                        'Madhubani',
                        'Munger',
                        'Muzaffarpur',
                        'Nalanda',
                        'Nawada',
                        'Patna',
                        'Purnia',
                        'Rohtas',
                        'Saharsa',
                        'Samastipur',
                        'Saran',
                        'Sheikhpura',
                        'Sheohar',
                        'Sitamarhi',
                        'Siwan',
                        'Supaul',
                        'Vaishali',
                        'West Champaran',
                        'Chandigarh',

                        'Bastar',
                        'Bijapur',
                        'Bilaspur',
                        'Dantewada',
                        'Dhamtari',
                        'Durg',
                        'Jashpur',
                        'Janjgir-Champa',
                        'Korba',
                        'Koriya',
                        'Kanker',
                        'Kabirdham (Kawardha)',
                        'Mahasamund',
                        'Narayanpur',
                        'Raigarh',
                        'Rajnandgaon',
                        'Raipur',
                        'Surguja',

                        'Dadra and Nagar Haveli',

                        'Daman',
                        'Diu',

                        'Central Delhi',
                        'East Delhi',
                        'New Delhi',
                        'North Delhi',
                        'North East Delhi',
                        'North West Delhi',
                        'South Delhi',
                        'South West Delhi',
                        'West Delhi',

                        'North Goa',
                        'South Goa',

                        'Ahmedabad',
                        'Amreli district',
                        'Anand',
                        'Banaskantha',
                        'Bharuch',
                        'Bhavnagar',
                        'Dahod',
                        'The Dangs',
                        'Gandhinagar',
                        'Jamnagar',
                        'Junagadh',
                        'Kutch',
                        'Kheda',
                        'Mehsana',
                        'Narmada',
                        'Navsari',
                        'Patan',
                        'Panchmahal',
                        'Porbandar',
                        'Rajkot',
                        'Sabarkantha',
                        'Surendranagar',
                        'Surat',
                        'Vyara',
                        'Vadodara',
                        'Valsad',

                        'Ambala',
                        'Bhiwani',
                        'Faridabad',
                        'Fatehabad',
                        'Gurgaon',
                        'Hissar',
                        'Jhajjar',
                        'Jind',
                        'Karnal',
                        'Kaithal',
                        'Kurukshetra',
                        'Mahendragarh',
                        'Mewat',
                        'Palwal',
                        'Panchkula',
                        'Panipat',
                        'Rewari',
                        'Rohtak',
                        'Sirsa',
                        'Sonipat',
                        'Yamuna Nagar',

                        'Bilaspur',
                        'Chamba',
                        'Hamirpur',
                        'Kangra',
                        'Kinnaur',
                        'Kullu',
                        'Lahaul and Spiti',
                        'Mandi',
                        'Shimla',
                        'Sirmaur',
                        'Solan',
                        'Una',

                        'Anantnag',
                        'Badgam',
                        'Bandipora',
                        'Baramulla',
                        'Doda',
                        'Ganderbal',
                        'Jammu',
                        'Kargil',
                        'Kathua',
                        'Kishtwar',
                        'Kupwara',
                        'Kulgam',
                        'Leh',
                        'Poonch',
                        'Pulwama',
                        'Rajauri',
                        'Ramban',
                        'Reasi',
                        'Samba',
                        'Shopian',
                        'Srinagar',
                        'Udhampur',

                        'Bokaro',
                        'Chatra',
                        'Deoghar',
                        'Dhanbad',
                        'Dumka',
                        'East Singhbhum',
                        'Garhwa',
                        'Giridih',
                        'Godda',
                        'Gumla',
                        'Hazaribag',
                        'Jamtara',
                        'Khunti',
                        'Koderma',
                        'Latehar',
                        'Lohardaga',
                        'Pakur',
                        'Palamu',
                        'Ramgarh',
                        'Ranchi',
                        'Sahibganj',
                        'Seraikela Kharsawan',
                        'Simdega',
                        'West Singhbhum',

                        'Bagalkot',
                        'Bangalore Rural',
                        'Bangalore Urban',
                        'Belgaum',
                        'Bellary',
                        'Bidar',
                        'Bijapur',
                        'Chamarajnagar',
                        'Chikkamagaluru',
                        'Chikkaballapur',
                        'Chitradurga',
                        'Davanagere',
                        'Dharwad',
                        'Dakshina Kannada',
                        'Gadag',
                        'Gulbarga',
                        'Hassan',
                        'Haveri district',
                        'Kodagu',
                        'Kolar',
                        'Koppal',
                        'Mandya',
                        'Mysore',
                        'Raichur',
                        'Shimoga',
                        'Tumkur',
                        'Udupi',
                        'Uttara Kannada',
                        'Ramanagara',
                        'Yadgir',

                        'Alappuzha',
                        'Ernakulam',
                        'Idukki',
                        'Kannur',
                        'Kasaragod',
                        'Kollam',
                        'Kottayam',
                        'Kozhikode',
                        'Malappuram',
                        'Palakkad',
                        'Pathanamthitta',
                        'Thrissur',
                        'Thiruvananthapuram',
                        'Wayanad',

                        'Alirajpur',
                        'Anuppur',
                        'Ashok Nagar',
                        'Balaghat',
                        'Barwani',
                        'Betul',
                        'Bhind',
                        'Bhopal',
                        'Burhanpur',
                        'Chhatarpur',
                        'Chhindwara',
                        'Damoh',
                        'Datia',
                        'Dewas',
                        'Dhar',
                        'Dindori',
                        'Guna',
                        'Gwalior',
                        'Harda',
                        'Hoshangabad',
                        'Indore',
                        'Jabalpur',
                        'Jhabua',
                        'Katni',
                        'Khandwa (East Nimar)',
                        'Khargone (West Nimar)',
                        'Mandla',
                        'Mandsaur',
                        'Morena',
                        'Narsinghpur',
                        'Neemuch',
                        'Panna',
                        'Rewa',
                        'Rajgarh',
                        'Ratlam',
                        'Raisen',
                        'Sagar',
                        'Satna',
                        'Sehore',
                        'Seoni',
                        'Shahdol',
                        'Shajapur',
                        'Sheopur',
                        'Shivpuri',
                        'Sidhi',
                        'Singrauli',
                        'Tikamgarh',
                        'Ujjain',
                        'Umaria',
                        'Vidisha',

                        'Ahmednagar',
                        'Akola',
                        'Amravati',
                        'Aurangabad',
                        'Bhandara',
                        'Beed',
                        'Buldhana',
                        'Chandrapur',
                        'Dhule',
                        'Gadchiroli',
                        'Gondia',
                        'Hingoli',
                        'Jalgaon',
                        'Jalna',
                        'Kolhapur',
                        'Latur',
                        'Mumbai City',
                        'Mumbai suburban',
                        'Nandurbar',
                        'Nanded',
                        'Nagpur',
                        'Nashik',
                        'Osmanabad',
                        'Parbhani',
                        'Pune',
                        'Raigad',
                        'Ratnagiri',
                        'Sindhudurg',
                        'Sangli',
                        'Solapur',
                        'Satara',
                        'Thane',
                        'Wardha',
                        'Washim',
                        'Yavatmal',

                        'Bishnupur',
                        'Churachandpur',
                        'Chandel',
                        'Imphal East',
                        'Senapati',
                        'Tamenglong',
                        'Thoubal',
                        'Ukhrul',
                        'Imphal West',

                        'East Garo Hills',
                        'East Khasi Hills',
                        'Jaintia Hills',
                        'Ri Bhoi',
                        'South Garo Hills',
                        'West Garo Hills',
                        'West Khasi Hills',

                        'Aizawl',
                        'Champhai',
                        'Kolasib',
                        'Lawngtlai',
                        'Lunglei',
                        'Mamit',
                        'Saiha',
                        'Serchhip',

                        'Dimapur',
                        'Kohima',
                        'Mokokchung',
                        'Mon',
                        'Phek',
                        'Tuensang',
                        'Wokha',
                        'Zunheboto',

                        'Angul',
                        'Boudh (Bauda)',
                        'Bhadrak',
                        'Balangir',
                        'Bargarh (Baragarh)',
                        'Balasore',
                        'Cuttack',
                        'Debagarh (Deogarh)',
                        'Dhenkanal',
                        'Ganjam',
                        'Gajapati',
                        'Jharsuguda',
                        'Jajpur',
                        'Jagatsinghpur',
                        'Khordha',
                        'Kendujhar (Keonjhar)',
                        'Kalahandi',
                        'Kandhamal',
                        'Koraput',
                        'Kendrapara',
                        'Malkangiri',
                        'Mayurbhanj',
                        'Nabarangpur',
                        'Nuapada',
                        'Nayagarh',
                        'Puri',
                        'Rayagada',
                        'Sambalpur',
                        'Subarnapur (Sonepur)',
                        'Sundergarh',

                        'Karaikal',
                        'Mahe',
                        'Pondicherry',
                        'Yanam',

                        'Amritsar',
                        'Barnala',
                        'Bathinda',
                        'Firozpur',
                        'Faridkot',
                        'Fatehgarh Sahib',
                        'Fazilka',
                        'Gurdaspur',
                        'Hoshiarpur',
                        'Jalandhar',
                        'Kapurthala',
                        'Ludhiana',
                        'Mansa',
                        'Moga',
                        'Sri Muktsar Sahib',
                        'Pathankot',
                        'Patiala',
                        'Rupnagar',
                        'Ajitgarh (Mohali)',
                        'Sangrur',
                        'Nawanshahr',
                        'Tarn Taran',

                        'Ajmer',
                        'Alwar',
                        'Bikaner',
                        'Barmer',
                        'Banswara',
                        'Bharatpur',
                        'Baran',
                        'Bundi',
                        'Bhilwara',
                        'Churu',
                        'Chittorgarh',
                        'Dausa',
                        'Dholpur',
                        'Dungapur',
                        'Ganganagar',
                        'Hanumangarh',
                        'Jhunjhunu',
                        'Jalore',
                        'Jodhpur',
                        'Jaipur',
                        'Jaisalmer',
                        'Jhalawar',
                        'Karauli',
                        'Kota',
                        'Nagaur',
                        'Pali',
                        'Pratapgarh',
                        'Rajsamand',
                        'Sikar',
                        'Sawai Madhopur',
                        'Sirohi',
                        'Tonk',
                        'Udaipur',

                        'East Sikkim',
                        'North Sikkim',
                        'South Sikkim',
                        'West Sikkim',

                        'Ariyalur',
                        'Chennai',
                        'Coimbatore',
                        'Cuddalore',
                        'Dharmapuri',
                        'Dindigul',
                        'Erode',
                        'Kanchipuram',
                        'Kanyakumari',
                        'Karur',
                        'Madurai',
                        'Nagapattinam',
                        'Nilgiris',
                        'Namakkal',
                        'Perambalur',
                        'Pudukkottai',
                        'Ramanathapuram',
                        'Salem',
                        'Sivaganga',
                        'Tirupur',
                        'Tiruchirappalli',
                        'Theni',
                        'Tirunelveli',
                        'Thanjavur',
                        'Thoothukudi',
                        'Tiruvallur',
                        'Tiruvarur',
                        'Tiruvannamalai',
                        'Vellore',
                        'Viluppuram',
                        'Virudhunagar',

                        'Dhalai',
                        'North Tripura',
                        'South Tripura',
                        'Khowai',
                        'West Tripura',

                        'Agra',
                        'Allahabad',
                        'Aligarh',
                        'Ambedkar Nagar',
                        'Auraiya',
                        'Azamgarh',
                        'Barabanki',
                        'Budaun',
                        'Bagpat',
                        'Bahraich',
                        'Bijnor',
                        'Ballia',
                        'Banda',
                        'Balrampur',
                        'Bareilly',
                        'Basti',
                        'Bulandshahr',
                        'Chandauli',
                        'Chhatrapati Shahuji Maharaj Nagar',
                        'Chitrakoot',
                        'Deoria',
                        'Etah',
                        'Kanshi Ram Nagar',
                        'Etawah',
                        'Firozabad',
                        'Farrukhabad',
                        'Fatehpur',
                        'Faizabad',
                        'Gautam Buddh Nagar',
                        'Gonda',
                        'Ghazipur',
                        'Gorakhpur',
                        'Ghaziabad',
                        'Hamirpur',
                        'Hardoi',
                        'Mahamaya Nagar',
                        'Jhansi',
                        'Jalaun',
                        'Jyotiba Phule Nagar',
                        'Jaunpur district',
                        'Ramabai Nagar (Kanpur Dehat)',
                        'Kannauj',
                        'Kanpur',
                        'Kaushambi',
                        'Kushinagar',
                        'Lalitpur',
                        'Lakhimpur Kheri',
                        'Lucknow',
                        'Mau',
                        'Meerut',
                        'Maharajganj',
                        'Mahoba',
                        'Mirzapur',
                        'Moradabad',
                        'Mainpuri',
                        'Mathura',
                        'Muzaffarnagar',
                        'Panchsheel Nagar district (Hapur)',
                        'Pilibhit',
                        'Shamli',
                        'Pratapgarh',
                        'Rampur',
                        'Raebareli',
                        'Saharanpur',
                        'Sitapur',
                        'Shahjahanpur',
                        'Sant Kabir Nagar',
                        'Siddharthnagar',
                        'Sonbhadra',
                        'Sant Ravidas Nagar',
                        'Sultanpur',
                        'Shravasti',
                        'Unnao',
                        'Varanasi',

                        'Almora',
                        'Bageshwar',
                        'Chamoli',
                        'Champawat',
                        'Dehradun',
                        'Haridwar',
                        'Nainital',
                        'Pauri Garhwal',
                        'Pithoragarh',
                        'Rudraprayag',
                        'Tehri Garhwal',
                        'Udham Singh Nagar',
                        'Uttarkashi',

                        'Birbhum',
                        'Bankura',
                        'Bardhaman',
                        'Darjeeling',
                        'Dakshin Dinajpur',
                        'Hooghly',
                        'Howrah',
                        'Jalpaiguri',
                        'Cooch Behar',
                        'Kolkata',
                        'Maldah',
                        'Paschim Medinipur',
                        'Purba Medinipur',
                        'Murshidabad',
                        'Nadia',
                        'North 24 Parganas',
                        'South 24 Parganas',
                        'Purulia',
                        'Uttar Dinajpur',

        );
        $goods = array(
            "Electrical/Electronics",
            "Furniture",
            "House Shifting",
            "Machines/Equipments/SpareParts",
            "Wood/Timber/Plywood",
            "Courier/Mover and Packers",
            "Vehicles/Automotive parts",
            "Chemiclas/Paints/Oil",
            "Tiles/Ceramic/Sanitaryware",
            "Pipes/Metal rods (less than 7 feet)",
            "Metal Sheets",
            "Garments/Apparel/Textile"
        );

        sort($cities);
        sort($goods);
        foreach($cities as $city){
            echo "<option value = '$city'>$city</option>";
        }
    ?>
    </select>
    <p></p>
    <lable>Drop city:</lable>
    <p></p>
    <select name="drop_city" id="drop_city">
    <?php
    foreach($cities as $city){
        echo "<option value = '$city'>$city</option>";
    }
    ?>
    </select>
    <p></p>
    <lable>goods type:</lable>
    <p></p>
    <select name="good_type" id="good_type">
    <?php
    foreach($goods as $good){
        echo "<option value = '$good'>$good</option>";
    }
    ?>
    </select>
    <p></p>
    <label>Truck:</label>
    <p></p>
    <select name="truck" id="truck">
    <?php
    $tr = array("32 FEET SINGLE AXEL TRUCK (7.5 TON CAPACITY) [CONTAINER TRUCK]",
                "32 FEET MULTI AXEL TRUCK (16 TON CAPACITY) [CONTAINER TRUCK]",
                "24 FEET SINGLE AXEL TRUCK (7.5 TON CAPACITY) [CONTAINER TRUCK]",
                "24 FEET MULTI AXEL TRUCK (16 TON CAPACITY) [CONTAINER TRUCK]",
                "20 FEET SINGLE AXEL TRUCK (7.5 TON CAPACITY) [CONTAINER TRUCK]",
                "20 FEET MULTI AXEL TRUCK (16 TON CAPACITY) [CONTAINER TRUCK]");
                foreach($tr as $good){
                    echo "<option value = '$good'>$good</option>";
                }
    ?>
    </select>
    <p></p>
    <lable>Pick Up date:</lable>
    <p></p>
    <input type="text" name = "pick_up_date" id = "pick_up_date" placeholder="yy-mm-dd" required>
    <p></p>
    <p></p>
    <lable>Drop date:</lable>
    <p></p>
    <input type="text" name = "days" id = "drop_date" placeholder="yy-mm-dd" required>
    <p></p>
    <input type="submit" name="sub" id="sub">
    </form>
    <?php
        $pick_up_date = $_GET["pick_up_date"];
        $drop_date = $_GET["days"];
        $pick_up_loc = $_GET["city_pick_up"];
        $drop_loc = $_GET["drop_city"];
        $good_type = $_GET["good_type"];
        $choosen_truck = $_GET["truck"];

        if (!empty($pick_up_date) && !empty($drop_date)){
            //echo "<p>$pick_up</p>";
            //echo "<p>$drop</p>";
            $start = strtotime($pick_up_date);
            $end = strtotime($drop_date);
            echo $start;
            $diff = $end - $start;
            //echo $diff;
            //$diff = floor($diff/(60*60*24));
            //echo ($diff);
            //echo "<p>no errors</p>";
            if ($diff < 0){
                echo "<p class = 'error'>The dates you have typed are not valid!!</p>";
            }

        }

        //connecting to database
        $conn = mysql_connect('localhost', 'root', '', 'cargo_management');

        //if connection is not successful
        if (!$conn){
            echo "connection error " . mysql_connect_error();
        }

        //writing query to wheck if truck is available
        //assuming their are 15 trucks of each type so
        $sql = "SELECT * FORM ORDERING";

        //making query ans getting result
        $result = mysqli_query($conn, $sql);

        //fetch the resulting row as an array
        $trucks = mysql_fetch_all($result, MYSQLI_ASSOC); //this is an array

        $i = 0;
        foreach($trucks as $truck){
            if ($choosen_truck == $truck["truck_type"] && (($truck["start_date"] <= $start) || $truck["end_date"] >= $end)){
                $i++;
            }
        }
        if (i == 15){
            echo "<p class = 'info'>Sorry! this truck is not available at the moment try picking some another truck</p>";
        }
        else{
            echo "<p class = 'info'>Your Truck has been booked</p>";
            //writing query and getting result
            $res2 = mysqli_query($conn, "INSERT INTO ordering VALUES ('', '$start', '$end', '$pick_up_loc', '$drop_loc','$good_type', '$choosen_truck')");
        }
        mysqli_fee_results($results); //clear results

        //closing connections with data base:
        mysqli_close($conn);

    ?>

</body>
</html>
