<?php

namespace controller\tools;
include (__DIR__ . '/alert.php');
class cache
{
    /**
     * @param $smarty
     */
    public function clearTemplateCache($smarty): void
    {
        try {
            $smarty->clearAllCache();
            (new alert())->execute('success','Erfolgt!');
        }catch (\Exception $e){
            (new alert())->execute('danger',$e);
        }
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