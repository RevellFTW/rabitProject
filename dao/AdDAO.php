<?php

function getAds($conn)
{
    $sql = 'SELECT * FROM advertisements';
    $res = $conn->query($sql);
    $sqlName = 'SELECT * FROM users INNER JOIN advertisements ON users.id = advertisements.userid';
    $resName = $conn->query($sqlName);
    if (mysqli_num_rows($res) == 0) {
        redirect('index.php');
    }
    else{
        ?>
        <ul>
            <?php
            while(($row = mysqli_fetch_assoc($res)) && $rowName = mysqli_fetch_assoc($resName) ){
                ?>
                <li><?php echo $rowName['name'].' : '.$row['title']?></li>

            <?php } ?>
        </ul>
        <?php
    }
}





