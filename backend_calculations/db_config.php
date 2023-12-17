<?php
        $user = 'root';
        $server = 'localhost';
        $password = '';
        $db = 'resistor_calculator';
        $connection = new mysqli($server,$user, $password, $db);
        $prekes_query = "SELECT * FROM prekes";
        $prekes_result = $connection -> query($prekes_query );
        $prekes_result_rows = $prekes_result -> num_rows;
       
        function updatePrekesTable() {
            $tableContent = array (
                // prek. pavadinimas, aprasymas, kaina, varza
                ['REZISTORIUS 780R 0.25W 5%, 0204 ø1.8x3.5mm', 'Rezistoriaus tipas: anglies plėvelinis
                Maksimali perkrovos įtampa: 800 V
                Išvadų matmenys: ø0.45 x 28 mm
                ', 0.30, 780],
                ['REZISTORIUS 1001R 0.50W 5%, 0204 ø1.8x3.5mm', 'Rezistoriaus tipas: anglies plėvelinis
                Maksimali perkrovos įtampa: 900 V
                Išvadų matmenys: ø0.45 x 28 mm
                ', 0.10, 1001],['REZISTORIUS  0.75W 5%, 0204 ø1.8x3.5mm', 'Rezistoriaus tipas: anglies plėvelinis
                Maksimali perkrovos įtampa: 1000 V
                Išvadų matmenys: ø0.45 x 28 mm
                ', 0.20, 100001],
                ['REZISTORIUS MFR 62R 0.6W 1% ø2.5x6.8mm', 'Metalo plėvelinis 0.6W galios rezistorius
                Temperatūrinis koeficientas : 50 ppm/°C
                Korpuso matmenys : Ø2.5x6.8mm
                Išvadai : Ø0.6 x 28mm
                ', 0.10, 1000000],
                ['REZISTORIUS MFR 62R 0.6W 1% ø2.5x6.8mm', 'Metalo plėvelinis 0.6W galios rezistorius
                Temperatūrinis koeficientas : 50 ppm/°C
                Korpuso matmenys : Ø2.5x6.8mm
                Išvadai : Ø0.6 x 28mm
                ', 0.10, 1000000],
                ['REZISTORIUS MFR 62R 0.6W 1% ø2.5x6.8mm', 'Metalo plėvelinis 0.6W galios rezistorius
                Temperatūrinis koeficientas : 50 ppm/°C
                Korpuso matmenys : Ø2.5x6.8mm
                Išvadai : Ø0.6 x 28mm
                ', 0.10, 100000000],
                ['REZISTORIUS MFR 62R 0.6W 1% ø2.5x6.8mm', 'Metalo plėvelinis 0.6W galios rezistorius
                Temperatūrinis koeficientas : 50 ppm/°C
                Korpuso matmenys : Ø2.5x6.8mm
                Išvadai : Ø0.6 x 28mm
                ', 0.10, 1000000000],
                ['REZISTORIUS MFR 62R 0.6W 1% ø2.5x6.8mm', 'Metalo plėvelinis 0.6W galios rezistorius
                Temperatūrinis koeficientas : 50 ppm/°C
                Korpuso matmenys : Ø2.5x6.8mm
                Išvadai : Ø0.6 x 28mm
                ', 0.10, 100000000],
                ['REZISTORIUS 82R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 'Rezistoriaus tipas: anglies plėvelinis
                Maksimali perkrovos įtampa: 400 V
                Išvadų matmenys: ø0.45 x 28 mm
                ', 0.03, 82],
                ['REZISTORIUS 100R 0.25W 5%, 0204 ø1.8x3.5mm', 'Rezistoriaus tipas: anglies plėvelinis
                Maksimali perkrovos įtampa: 500 V
                Išvadų matmenys: ø0.45 x 28 mm
                ', 0.05, 100],
                ['REZISTORIUS MOR 120R 1W ø4x10mm 5%', 'Metalo oksido 1 W rezistorius. Padengtas aukštos kokybės apsauginiu sluoksniu. Atsparus išoriniam poveikiui. Korpusas pagamintas iš itin švarios keramikos.
                Maksimali perkrovos įtampa: 700 V
                Rezistoriaus išvadai: 0,7 x 28 mm
                ', 0.08, 120],
                ['REZISTORIUS 180R 0.25W 5%, 0204 ø1.8x3.5mm', 'Rezistoriaus tipas: anglies plėvelinis
                Maksimali perkrovos įtampa: 500 V
                Išvadų matmenys: ø0.45 x 28 mm
                ', 0.05, 180],
                ['REZISTORIUS MFR 240R 0.6W 1% ø2.5x6.8mm', 'Metalo plėvelinis 0.6W galios rezistorius
                Temperatūrinis koeficientas : 50 ppm/°C
                Korpuso matmenys : Ø2.5x6.8mm
                Išvadai : Ø0.6 x 28mm
                ', 0.10, 240],
                ['REZISTORIUS 360R 0.25W 5%, 0204 ø1.8x3.5mm', 'Rezistoriaus tipas: anglies plėvelinis
                Maksimali perkrovos įtampa: 500 V
                Išvadų matmenys: ø0.45 x 28 mm
                ', 0.05, 780],
                ['REZISTORIUS 780R 0.25W 5%, 0204 ø1.8x3.5mm', 'Rezistoriaus tipas: anglies plėvelinis
                Maksimali perkrovos įtampa: 800 V
                Išvadų matmenys: ø0.45 x 28 mm
                ', 0.30, 780],
                ['REZISTORIUS 1001R 0.50W 5%, 0204 ø1.8x3.5mm', 'Rezistoriaus tipas: anglies plėvelinis
                Maksimali perkrovos įtampa: 900 V
                Išvadų matmenys: ø0.45 x 28 mm
                ', 0.10, 1001],['REZISTORIUS  0.75W 5%, 0204 ø1.8x3.5mm', 'Rezistoriaus tipas: anglies plėvelinis
                Maksimali perkrovos įtampa: 1000 V
                Išvadų matmenys: ø0.45 x 28 mm
                ', 0.20, 100001],
                ['REZISTORIUS MFR 62R 0.6W 1% ø2.5x6.8mm', 'Metalo plėvelinis 0.6W galios rezistorius
                Temperatūrinis koeficientas : 50 ppm/°C
                Korpuso matmenys : Ø2.5x6.8mm
                Išvadai : Ø0.6 x 28mm
                ', 0.10, 1000000],
                ['REZISTORIUS MFR 62R 0.6W 1% ø2.5x6.8mm', 'Metalo plėvelinis 0.6W galios rezistorius
                Temperatūrinis koeficientas : 50 ppm/°C
                Korpuso matmenys : Ø2.5x6.8mm
                Išvadai : Ø0.6 x 28mm
                ', 0.10, 1000000],
                ['REZISTORIUS MFR 62R 0.6W 1% ø2.5x6.8mm', 'Metalo plėvelinis 0.6W galios rezistorius
                Temperatūrinis koeficientas : 50 ppm/°C
                Korpuso matmenys : Ø2.5x6.8mm
                Išvadai : Ø0.6 x 28mm
                ', 0.10, 1000000],
                ['REZISTORIUS MFR 62R 0.6W 1% ø2.5x6.8mm', 'Metalo plėvelinis 0.6W galios rezistorius
                Temperatūrinis koeficientas : 50 ppm/°C
                Korpuso matmenys : Ø2.5x6.8mm
                Išvadai : Ø0.6 x 28mm
                ', 0.10, 998985],
                ['REZISTORIUS MFR 62R 0.6W 1% ø2.5x6.8mm', 'Metalo plėvelinis 0.6W galios rezistorius
                Temperatūrinis koeficientas : 50 ppm/°C
                Korpuso matmenys : Ø2.5x6.8mm
                Išvadai : Ø0.6 x 28mm
                ', 0.10, 999999999],
                ['REZISTORIUS 82R 0.125W, ±5 %, 0204, ø1.8x3.5mm', 'Rezistoriaus tipas: anglies plėvelinis
                Maksimali perkrovos įtampa: 400 V
                Išvadų matmenys: ø0.45 x 28 mm
                ', 0.03, 64],
                ['REZISTORIUS 100R 0.25W 5%, 0204 ø1.8x3.5mm', 'Rezistoriaus tipas: anglies plėvelinis
                Maksimali perkrovos įtampa: 500 V
                Išvadų matmenys: ø0.45 x 28 mm
                ', 0.05, 150000],
                ['REZISTORIUS MOR 120R 1W ø4x10mm 5%', 'Metalo oksido 1 W rezistorius. Padengtas aukštos kokybės apsauginiu sluoksniu. Atsparus išoriniam poveikiui. Korpusas pagamintas iš itin švarios keramikos.
                Maksimali perkrovos įtampa: 700 V
                Rezistoriaus išvadai: 0,7 x 28 mm
                ', 0.08, 180000],
                ['REZISTORIUS 180R 0.25W 5%, 0204 ø1.8x3.5mm', 'Rezistoriaus tipas: anglies plėvelinis
                Maksimali perkrovos įtampa: 500 V
                Išvadų matmenys: ø0.45 x 28 mm
                ', 0.05, 2000000],
                ['REZISTORIUS MFR 240R 0.6W 1% ø2.5x6.8mm', 'Metalo plėvelinis 0.6W galios rezistorius
                Temperatūrinis koeficientas : 50 ppm/°C
                Korpuso matmenys : Ø2.5x6.8mm
                Išvadai : Ø0.6 x 28mm
                ', 0.10, 5000000],
                ['REZISTORIUS 360R 0.25W 5%, 0204 ø1.8x3.5mm', 'Rezistoriaus tipas: anglies plėvelinis
                Maksimali perkrovos įtampa: 500 V
                Išvadų matmenys: ø0.45 x 28 mm
                ', 0.05, 7000000]

            );
        
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "resistor_calculator";
        
            $conn = new mysqli($servername, $username, $password, $database);
            $id = 0;   
         
            foreach ($tableContent as $element) {       
                $prekes_pavadinimas = $element[0];
                $aprasymas = $element[1];
                $kaina = $element[2];
                $varza = $element[3];
                $ohm_id_array = array (1,2,3,4,5,6,7);
                if($varza < 100){$ohm_id = $ohm_id_array[0];}
                else if($varza < 1000){$ohm_id = $ohm_id_array[1];}
                else if($varza < 10000){$ohm_id = $ohm_id_array[2];}
                else if($varza < 100000){$ohm_id = $ohm_id_array[3];}
                else if($varza < 1000000){$ohm_id = $ohm_id_array[4];}
                else if($varza < 10000000){$ohm_id = $ohm_id_array[5];}
                else if($varza < 100000000){$ohm_id = $ohm_id_array[6];}
                else if($varza < 1000000000){$ohm_id = $ohm_id_array[7];}
                $id++;
                $updateQuery = "UPDATE prekes SET prekes_pavadinimas = '$prekes_pavadinimas', kaina = '$kaina', prekes_aprasymas = '$aprasymas', varza = '$varza', ohm_id = '$ohm_id' WHERE prekes.prekes_id = $id;";
                $result = $conn->query($updateQuery);
                
            }
            return $result;
        
            }

            function updateResistorTypeColumn()
            {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "resistor_calculator";
            
                $conn = new mysqli($servername, $username, $password, $database); 
                $types = array("Metalizuotas", "Metalo oksido", "Anglies pluošto");

                
  
                for($id = 1; $id <=147; $id++) {
                    $randomType = $types[array_rand($types)];
                    $updateResistorType = "UPDATE prekes SET resistor_type = '$randomType' WHERE prekes.prekes_id = '$id';";
                    $result = $conn->query($updateResistorType);
                    
                }
                return $result;
            }
        
        function updateNuotraukaColumn() {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "resistor_calculator";
        
            // Array of image filenames
            $images = array(
                "img1.jpg", "img2.jpg", "img3.jpg", "img4.jpg", "img5.jpg",
                "img6.jpg", "img7.jpg", "img8.jpg", "img9.jpg", "img10.jpg",
                "img11.jpg", "img12.jpg", "img13.jpg", "img14.jpg", "img15.jpg"
            );
        
            // Create connection
            $conn = new mysqli($servername, $username, $password, $database);
        
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
        
            // Retrieve the number of rows in the 'prekes' table
            $result = $conn->query("SELECT COUNT(*) AS count FROM prekes");
            $row = $result->fetch_assoc();
            $rowCount = $row['count'];
        
            // Generate and execute the UPDATE query for each row
            $imageCount = count($images);
            $imageIndex = 0;
        
            for ($id = 1; $id <= $rowCount; $id++) {
                $imagePath = "../../media/" . $images[$imageIndex];
                $sql = "UPDATE prekes SET nuotrauka = '$imagePath' WHERE prekes_id = $id";
        
                if ($conn->query($sql) === TRUE) {
                    echo "Record updated successfully for ID: " . $id . "<br>";
                } else {
                    echo "Error updating record: " . $conn->error . "<br>";
                }
        
                // Move to the next image in a circular manner
                $imageIndex = ($imageIndex + 1) % $imageCount;
            }
            // Close the database connection
            $conn->close();
        }
    ?>
