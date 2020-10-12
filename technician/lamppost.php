<?php 

// require_once __DIR__ . '/../classes/Repair.php';
require_once __DIR__ . '/../classes/Inventory.php';

$inv = new Inventory();
$item_names = $inv->getItemNames();
$item_names= $item_names->fetch_all();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/slider.css">
    <link rel="stylesheet" href="./css/tech.css">
    <link rel="stylesheet" href="./css/request.css">
    <link rel="stylesheet" href="./css/complete.css">
    <script src="https://kit.fontawesome.com/2b554022ef.js" crossorigin="anonymous"></script>
    <title>Add Lamp Post</title>
</head>

<body>
    <nav class="sidebar">
        <!-- <h2 class="link-text">MENU</h2> -->
        <ul>
            <li class="nav-logo"><span class="nav-link" href="#"><i class="fas fa-lightbulb"></i><span class="link-text"
                        style="margin-left: 5px;">LiFix</span></span></li>
            <li class="nav-item"><a class="nav-link " href="./index.php"><i class="fas fa-home"></i><span
                        class="link-text">Home</span> </a></li>
            <li class="nav-item"><a class="nav-link " href="./map.html"><i class="fas fa-map"></i><span
                        class="link-text">ViewMap</span> </a></li>
            <li class="nav-item"><a class="nav-link " href="./request.php"><i
                        class="fas fa-plus-square"></i><span class="link-text ">Request</span></a></li>
            <li class="nav-item"><a class="nav-link " href="./EmgRepair.php"><i class="fas fa-exclamation-circle"></i><span
                        class="link-text">EmgRepair</span></a></li>
            <li class="nav-item"><a class="nav-link active" href="#"><i class="fas fa-shower"></i><span
                        class="link-text">Lamppost</span></a></li>

        </ul>

    </nav>

    <script src="../js/slider.js"></script>


    <div class="main">
        <div class="con">


            <form method="POST" action="">
                <h2>Add Lamp Post</h2>
                <div class="feild-row">
                    <label for="lp_id">Lamp Post ID</label>
                    <input class="field" type="text" placeholder="#xxxx" name="bulb" id="">

                </div>
                <div class="feild-row">
                    <label for="lp_id">Road</label>
                    <input class="field" type="text" placeholder="" name="bulb" id="">

                </div>
                <div class="feild-row">
                    <label for="lp_id">Division</label>
                    <input class="field" type="text" placeholder="" name="bulb" id="">

                </div>
                <!-- <div class="feild-row"> -->
                    <label for="is_new">Is it new : </label>
                    <input type="checkbox" name="is_new" id="newcheck" onclick="toggleCollapse()">
                <!-- </div> -->
              

                <!-- collapse -->
                <div class="collapse" style="display: none;margin-top: 5px;">
                        
                    <?php 
                    foreach ($item_names as $item):
                    ?>
                    <div class="collapsible"><?= $item[1] ?></div>
                    <div class="content">
                        <input class="field" type="text" placeholder="Enter Used Amount" name="<?= $item[0] ?>_u" id="">
                    </div>
                    <?php endforeach ?>

                </div>
                <button type="submit" name="addlp" class="btn">Add Lamp Post</button>


            </form>

        </div>
    </div>

    <script>
        //for collapse
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = "50px";
                }
            });
        }


        //for checkbox
        function toggleCollapse() {
       
            var checkBox = document.getElementById("newcheck");
            var collapse = document.querySelector('.collapse');

            if (checkBox.checked == true){
                collapse.style.display = "block";
            } else {
                collapse.style.display = "none";
            }
        }
    </script>
</body>

</html>