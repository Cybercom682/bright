<?php
namespace controller;

class visitors {
    private $visits = array();
    private $dataFile = 'visits.txt';

    public function __construct() {
        $this->loadVisitsData();
    }

    public function recordVisit() {
        $timestamp = time();

        $this->visits[] = $timestamp;

        $this->saveVisitsData();
    }

    public function getVisitsToday() {
        $today = strtotime('today');
        $count = 0;

        foreach ($this->visits as $timestamp) {
            if ($timestamp >= $today) {
                $count++;
            }
        }

        return $count;
    }

    public function getVisitsThisMonth() {
        $startOfMonth = strtotime('first day of this month');
        $count = 0;

        foreach ($this->visits as $timestamp) {
            if ($timestamp >= $startOfMonth) {
                $count++;
            }
        }

        return $count;
    }

    public function getVisitsThisYear() {
        $startOfYear = strtotime('first day of January this year');
        $count = 0;

        foreach ($this->visits as $timestamp) {
            if ($timestamp >= $startOfYear) {
                $count++;
            }
        }

        return $count;
    }

    private function loadVisitsData() {
        if (file_exists($this->dataFile)) {
            $data = file_get_contents($this->dataFile);
            $this->visits = unserialize($data);
        } else {
            $this->visits = array();
        }
    }

    private function saveVisitsData() {
        $data = serialize($this->visits);
        file_put_contents($this->dataFile, $data);
    }

    public function initSmarty($smarty){

        $this->recordVisit();

        $visitsToday = $this->getVisitsToday();
        $visitsThisMonth = $this->getVisitsThisMonth();
        $visitsThisYear = $this->getVisitsThisYear();

        return $smarty->assign('visitToday', $visitsToday)
            ->assign('visitThisMonth', $visitsThisMonth)
            ->assign('visitThisYear', $visitsThisYear);
    }
}
