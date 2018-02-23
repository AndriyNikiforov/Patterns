<?php

require "ShareFacade.php";

$facade = new ShareFacade(new FactoryObject());
$facade->share("Hello world");

unset($facade);