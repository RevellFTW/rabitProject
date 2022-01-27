<?php
function getAds($conn)
{
    $sql = 'SELECT * FROM advertisements';
    $res = $conn->query($sql);
    $sqlName = 'SELECT * FROM users INNER JOIN advertisements ON
                users.id = advertisements.userid';
    $resName = $conn->query($sqlName);
    if (mysqli_num_rows($res) == 0) {
        redirect('index.php');
    }
    else{?>
        <table>
        <tbody>
            <?php while(($row = mysqli_fetch_assoc($res)) && $rowName = mysqli_fetch_assoc($resName) ){?>
                <tr>
                <td><a><?php echo $rowName['name']?></a></td>
                <td><a><?php echo $row['title']?></a></td>
                </tr>
            <?php } ?>
        </tbody>
        </table>
        <?php
        }
}





