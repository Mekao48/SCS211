<?php
$people_obj = json_decode(file_get_contents("https://raw.githubusercontent.com/arc6828/SCS211/main/week13/staff.json"),true);
$people = $people_obj["people"];
?>
<?php foreach($people as $row){ ?>
    <div><?=$row["name"]?> | 
    <?=$row["education"]?> | 
    <?=$row["role"]?> <?=$row["email"]?> | 
    <?=$row["phone"]?> |<img src="<?=$row["image"]?>" style="height: 30%; margin: 10px;"></img>
    </div>
<?php } ?>
