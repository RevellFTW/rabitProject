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
            <table>
                <tbody><?php
                /**
                 * @res : All rows from advertisements, is an sql query.
                 * @row : A single row from the users table
                 */
                while($row = mysqli_fetch_assoc($res) ){?>
                    <tr>
                        <td><a><?php echo $row['name']?></a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            <?php
        }
    }





