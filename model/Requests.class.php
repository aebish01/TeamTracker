<?php

class Request extends Database
{
    public function findPending()
    {
        $query = 'SELECT u.firstName, u.lastName, t.startDate, t.endDate, t.type, t.message FROM timeoff AS t LEFT JOIN users AS u ON t.uID = u.userId WHERE t.approved = 0';
        $stmt = $this->query($query);

        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);

                echo "  <div class='request'>
                            <p>$firstName</p>
                            <p>$lastName</p>
                            <p>$startDate</p>
                            <p>$endDate</p>
                            <p>$type</p>
                            <p>$message</p>
                            <button class='button'>Approve</button>
                        </div>";
            }
            return;
        } else {
            echo "<div class='gridItem availDescription'>
                    No Pending Requests Found
                  </div>";

            return;
        }
    }
}
