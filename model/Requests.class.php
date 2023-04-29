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

                echo "
                            <p>$firstName</p>
                            <p>$lastName</p>
                            <p>$startDate</p>
                            <p>$endDate</p>
                            <p>$type</p>
                            <p>$message</p>
                            <form class='requestForm' method='post'>
                                <button name='actionA'>Approve</button>
                            </form>
                            <form class='requestForm' method='delete'>
                                <button name='actionD'>Deny</button>
                            </form>";
            }
            return;
        } else {
            echo "<div class='availDescription' style='grid-column: span 7'>
                    No Pending Requests Found
                  </div>";

            return;
        }
    }

    public function findApproved()
    {
        $query = 'SELECT u.firstName, u.lastName, t.startDate, t.endDate, t.type, t.message FROM timeoff AS t LEFT JOIN users AS u ON t.uID = u.userId WHERE t.approved = 1';
        $stmt = $this->query($query);

        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);

                echo "
                            <p>$firstName</p>
                            <p>$lastName</p>
                            <p>$startDate</p>
                            <p>$endDate</p>
                            <p>$type</p>
                            <p>$message</p>
                            <p></p>
                            <form class='requestForm' method='delete'>
                                <button name='actionD'>Deny</button>
                            </form>";
            }
            return;
        } else {
            echo "<div class='gridItem availDescription'>
                    No Approved Requests Found
                  </div>";

            return;
        }
    }

    public function approveRequest()
    {
    }

    public function denyRequest()
    {
    }
}
