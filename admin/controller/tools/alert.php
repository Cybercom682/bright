<?php

namespace controller\tools;

class alert
{
    private function initScript($content): string
    {
        $output = '<script>';
        $output .= $content;
        $output .= '</script>';
        return $output;
    }

    private function queryJS($selektor,$function,$content): string
    {
        return '$("'.$selektor.'").'.$function.'("'.$content.'")';
    }

    private function alert($type, $message): string
    {
        return "<div class='alert alert-".$type." m-3'>".$message."</div>";
    }

    public function execute($type, $message): void
    {
        echo $this->initScript($this->queryJS('#nav-tabContent','before',$this->alert($type,$message)));
    }
}