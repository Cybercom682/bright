<?php

namespace controller\handler;

use Exception;

class ticket
{
    public function create($db)
    {
        try {
            $nextID = $db->getNextID('ttickets', 'kTicket');

            $data = [
                'kTicket' => $nextID,
                'cTitle' => $_POST['t_title'],
                'cContent' => $_POST['t_task'],
                'cPrio' => $_POST['t_prio'],
                'cStatus' => $_POST['t_status']
            ];

            $db->insertData('ttickets', $data);
        } catch (Exception $e) {
            echo $e;
        }
    }
}