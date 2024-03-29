<?php
include_once  __DIR__ . '/../utils/classloader.php';
$clerck = new classes\Clerck();
$data =  $clerck->Purchase();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon/favicon-16x16.png">
	<link rel="manifest" href="../assets/favicon/site.webmanifest">
    <link rel="stylesheet" href="../css/slider.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/itemList.css">


    <link rel="stylesheet" href="../css/clerk/clerk.css">
    <link rel="stylesheet" href="../css/clerk/repairHistory.css">
    <link rel="stylesheet" href="../css/clerk/purchase.css">
    <!-- <link rel="stylesheet" href="./a.css"> -->
    <script src="https://kit.fontawesome.com/2b554022ef.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Purchases</title>

</head>

<body>

    <?php include "./views/nav.php" ?>

    <?php $clerck->getSession()->showMessage() ?>

    <div class="main_content">
        <header>
            <h1>Purchases</h1>
        </header>
        <div class="container">

            <!-- purchase_list -->
            <?php include_once "./views/purchase_list.php"  ?>

            <div class="table-section">

                <!-- purchase_addnew -->


                <?php include_once "./views/purchase_addnew.php"  ?>


                <!-- item table -->
                <table id="p-table" class="content-table">
                    <thead>
                        <tr>
                            <th>ITEM ID</th>
                            <th>ITEM NAME</th>
                            <th>QUANTITY</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>

            </div>


        </div>
    </div>

    <script>
        const btnAdd = document.querySelector('#btnAdd');
        const table_section = document.querySelector('.content-table');
        const addnew_section = document.querySelector('.add-new');
        const list_items = document.querySelectorAll('.repair-item');

        btnAdd.addEventListener('click', () => {
            table_section.style.display = 'none';
            addnew_section.style.display = 'block';

        })

        list_items.forEach(item => {
            item.addEventListener('click', () => {
                addnew_section.style.display = 'none';
                table_section.style.display = 'table ';

            })
        })
    </script>
    <script src="./../js/clerck/purchase.js"></script>

</html>