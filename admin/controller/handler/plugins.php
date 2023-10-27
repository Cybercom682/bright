<?php
namespace controller\handler {

    class plugin {
        public function findPluginXMLFiles($path): array
        {
            $xmlReader = new \xmlHelper();
            $pluginXMLFiles = array();

            if (is_dir($path)) {
                $directories = glob($path . '/*', GLOB_ONLYDIR);
                foreach ($directories as $directory) {
                    $pluginXMLFile = $directory . '/plugin.xml';
                    if (file_exists($pluginXMLFile)) {
                        $pluginXMLFiles[] = $xmlReader->readFromXml($pluginXMLFile, 0);
                    }
                }
            }

            return $pluginXMLFiles;
        }
    }
}