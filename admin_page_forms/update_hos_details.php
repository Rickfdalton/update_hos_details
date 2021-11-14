<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Hospital Details</title>
    <link rel="stylesheet" href="del_hos.css" >
</head>
<body>
    
    <div class="container">
        <input class="search" type="text" placeholder="Search hospital.." />
    <?php
    
    $hospitals=["District General Hospital Vavuniya",
                "Abisha Hospital Vavuniya",
                "District General Hospital Mannar",
                "Northern Central Hospital",
                "Jaffna Teaching Hospital",
                "STS Hospital Jaffna"];
    
    echo "<div class=\"container\">";
    foreach ($hospitals as $hospital){
        $div=" <div class=\"hospital\"> <img src=\"minus.png\"> <div class=\"hos-name\">".$hospital.
                "</div> </div>";
        echo $div;
    }
    
    
    ?>
    </div>
    
    <script src="./update_hos_details_script.js"></script>
</body>
</html>