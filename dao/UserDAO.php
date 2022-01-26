<?php

    function getUsers($conn)
    {
        $sql = 'SELECT * FROM users';
        $res = $conn->query($sql);
        if (mysqli_num_rows($res) == 0) {
            redirect('index.php');
        }
        else{
            ?>
            <ul>
                <?php
                while($row = mysqli_fetch_assoc($res)){
                    ?>
                    <li><?php echo $row['name'] ?></li><?php
                }?>
            </ul>
            <?php
        }
    }





