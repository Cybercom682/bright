<?php

namespace controller\tools;

class updater {
    private $repository;
    private $localPath;

    public function __construct($repository, $localPath) {
        $this->repository = $repository;
        $this->localPath = $localPath;
    }

    public function checkForUpdates() {
        $latestVersion = $this->getLatestGitHubVersion();
        $currentVersion = $this->getCurrentLocalVersion();

        if ($latestVersion && $currentVersion && version_compare($latestVersion, $currentVersion, '>')) {
            $this->updateFromGitHub();
        } else {
            echo "Kein Update verfügbar.";
        }
    }

    private function getLatestGitHubVersion() {
        $url = "https://api.github.com/repos/{$this->repository}/releases/latest";
        $response = json_decode(file_get_contents($url), true);

        if (isset($response['tag_name'])) {
            return $response['tag_name'];
        }

        return null;
    }

    private function getCurrentLocalVersion() {
        return BRIGHT_VERSION;
    }

    private function updateFromGitHub() {
        exec("git clone https://github.com/{$this->repository}.git {$this->localPath}");
        echo "Update erfolgreich durchgeführt.";
    }


    public function exampleUse()
    {
        $repository = "IhrGitHubBenutzer/IhrGitHubRepository";
        $localPath = "/pfad/zum/backend";

        $updater = new updater($repository, $localPath);
        $updater->checkForUpdates();
    }
}
