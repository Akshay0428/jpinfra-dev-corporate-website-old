<?php
//Include database configuration file
include('dbConfig.php');


// if(isset($_POST["code_id"]) && !empty($_POST["code_id"])){
//     //Get all state data
//     $query = $db->query("SELECT code FROM countries WHERE country_id = ".$_POST['country_id']." AND status = 1 ORDER BY code ASC");
    
//     //Count total number of rows
//     $rowCount = $query->num_rows;
    
//     //Display states list
//     if($rowCount > 0){
//         echo '<input type="text" name="ccode" id="ccode" value="" placeholde="country code">';
//         while($row = $query->fetch_assoc()){ 
            
//             echo '<input type="text" name="ccode" id="ccode" value="'.$row['code_id'].'">'.$row['code'].' placeholde="country code">'
//         }
//     }else{
//         echo '<input type="text" name="ccode" id="ccode" value="" placeholde="country code">';
//     }
// }


if(isset($_POST["country_id"]) && !empty($_POST["country_id"])){
    //Get all state data
    $query = $db->query("SELECT * FROM countries WHERE country_id = ".$_POST['country_id']." AND status = 1 ORDER BY country_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;

    //Display states list
    if($rowCount > 0){
        
        while($row = $query->fetch_assoc()){
            var_dump($row);
            echo '<div id="country_code1"><input type="text" name="ccode" class="form-control asp_code" id="code_dailing1" value="+'.$row['code'].'" readonly></div>';
            echo '<div id="selected_country_name1"><input type="hidden" id="selected_country1" value="'.$row['country_name'].'"></div>';
            
            echo '<div id="country_code2"><input type="text" name="ccode" class="form-control asp_code" id="code_dailing2" value="+'.$row['code'].'" readonly></div>';
            echo '<div id="selected_country_name2"><input type="hidden" id="selected_country2" value="'.$row['country_name'].'"></div>';
            
            echo '<div id="country_code3"><input type="text" name="ccode" class="form-control asp_code" id="code_dailing3" value="+'.$row['code'].'" readonly></div>';
            echo '<div id="selected_country_name3"><input type="hidden" id="selected_country3" value="'.$row['country_name'].'"></div>';
            // echo $row['code'];
        }
    }else{
        echo 'invalid';
    }
}





// if(isset($_POST["country_id"]) && !empty($_POST["country_id"])){
//     //Get all state data
//     $query = $db->query("SELECT * FROM states WHERE country_id = ".$_POST['country_id']." AND status = 1 ORDER BY state_name ASC");
    
//     //Count total number of rows
//     $rowCount = $query->num_rows;
    
//     //Display states list
//     if($rowCount > 0){
//         echo '<option value="">Select state</option>';
//         while($row = $query->fetch_assoc()){ 
//             echo '<option value="'.$row['state_id'].'">'.$row['state_name'].'</option>';
//         }
//     }else{
//         echo '<option value="">State not available</option>';
//     }
// }

if(isset($_POST["country_id"]) && !empty($_POST["country_id"])){
    //Get all city data
    // $query = $db->query("SELECT * FROM cities WHERE state_id = ".$_POST['state_id']." AND status = 1 ORDER BY city_name ASC");
    
    $query = $db->query("SELECT c.city_id, c.city_name, st.state_id, st.state_name, co.country_id, co.country_name
FROM cities c
JOIN states st
	ON c.state_id = st.state_id
JOIN countries co
	ON st.country_id = co.country_id
WHERE co.country_id = ".$_POST['country_id']." ORDER BY asp_city DESC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display cities list
    if($rowCount > 0){
        echo '<option name="city" id="insightly_City" value="">Select city</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['city_name'].'">'.$row['city_name'].'</option>';
        }
    }else{
        echo '<option value="">City not available</option>';
    }
}






?>