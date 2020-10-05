<?php

require __DIR__ . '/../../classes/Repair.php';

$repair = new Repair();
$list_assign = $repair->getRepairs('x');
$list_avail = $repair->getRepairs('a');



?>


<div id="x" class="list">
    <h2>Assigned</h2>
    <?php
    if ($list_assign->num_rows > 0) {
        while ($row = $list_assign->fetch_assoc()) { ?>
            <div id="<?php echo $row["repair_id"] ?>" class="list-item" draggable="true">
                <div class="address"><?php echo $row["division"] ?></div>
                <div class="row1">
                    <span>#<?php echo $row["lp_id"] ?></span>
                    <span><?php echo $row["date"] ?></span>
                </div>
            </div>

    <?php
        }
    }
    ?>

</div>


<div id="a" class="list">
    <h2>Other</h2>
    <?php
    if ($list_avail->num_rows > 0) {
        while ($row = $list_avail->fetch_assoc()) { ?>
            <div id="<?php echo $row["repair_id"] ?>" class="list-item" draggable="true">
                <div class="address"><?php echo $row["division"] ?></div>
                <div class="row1">
                    <span>#<?php echo $row["lp_id"] ?></span>
                    <span><?php echo $row["date"] ?></span>
                </div>
            </div>

    <?php
        }
    }
    ?>

</div>