<?php

namespace controller\tools;

class cache
{
    /**
     * @param $smarty
     * @return mixed
     */
    public function clearTemplateCache($smarty): mixed
    {
        return $smarty->clearAllCache();
    }

    /**
     * @param $folder
     * @return void
     */
    public function clearFullTemplateCache($folder): void
    {
        if (is_dir($folder)) {
            $files = scandir($folder);
            foreach ($files as $file) {
                if ($file != '.' && $file != '..') {
                    $filePath = $folder . '/' . $file;
                    if (is_dir($filePath)) {
                        $this->clearFullTemplateCache($filePath);
                        rmdir($filePath);
                    } else {
                        unlink($filePath);
                    }
                }
            }
        }
    }

}