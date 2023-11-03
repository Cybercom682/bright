<?php

namespace controller\interfaces;

interface pluginInterface
{
    public function initialize($db,$smarty);
    public function getPlugin();
}