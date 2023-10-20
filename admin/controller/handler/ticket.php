<?php

namespace controller\handler;

use Exception;

class ticket
{
    public function create($db)
    {
        try {
            $cTitle = $_POST['t_title'];
            $cContent = $_POST['t_task'];
            $cPrio = $_POST['t_prio'];
            $cStatus = $_POST['t_status'];

            // Überprüft, ob ein Eintrag mit denselben Daten bereits existiert
            $existingEntry = $db->query("SELECT kTicket FROM ttickets WHERE cTitle = '$cTitle' AND cContent = '$cContent' AND cPrio = '$cPrio' AND cStatus = '$cStatus'");

            if (empty($existingEntry)) {
                $nextID = $db->getNextID('ttickets', 'kTicket');

                $data = [
                    'kTicket' => $nextID,
                    'cTitle' => $cTitle,
                    'cContent' => $cContent,
                    'cPrio' => $cPrio,
                    'cStatus' => $cStatus
                ];

                $db->insertData('ttickets', $data);
            } else {
                echo "Ein Eintrag mit denselben Daten existiert bereits.";
            }
        } catch (Exception $e) {
            // echo $e;
        }
    }

    public function update($db)
    {
        try{
            $kTicket = $_POST['t_id'];
            $cTitle = $_POST['t_title'];
            $cContent = $_POST['t_task'];
            $cPrio = $_POST['t_prio'];
            $cStatus = $_POST['t_status'];

            $data = [
                'cTitle' => $cTitle,
                'cContent' => $cContent,
                'cPrio' => $cPrio,
                'cStatus' => $cStatus
            ];

            $db->updateData('ttickets',$data,'kTicket',$kTicket);
        }catch (Exception $e){
            //echo $e;
        }
    }

    public function delete($db)
    {
        try {
            $db->deleteData('ttickets','kTicket',$_POST['t_id']);
        }catch (Exception $e){
            //echo $e;
        }
    }

}