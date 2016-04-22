<?php


// library auto load
require_once '/vendor/autoload.php';

use Weaverryan\DangerZone\HalloThere;

use IamProgrammerlk\IamGitHubTester\IamGitHubTester;

use IamProgrammerlk\IamGitHubComposerTester\IamGitHubComposerTester;
use IamProgrammerlk\IamGitHubComposerTester\IamGitHubComposerTesterSecond;

$IamGitHubComposerTester = new IamGitHubComposerTester();

$IamGitHubComposerTesterSecond = new IamGitHubComposerTesterSecond();

$IamGitHubTester = new IamGitHubTester();

echo  '<br>' . HalloThere::sayHallo();

//echo a::sayHallo();

$namespaces=array();
foreach(get_declared_classes() as $name) {
    if(preg_match_all("@[^\\\]+(?=\\\)@iU", $name, $matches)) {
        $matches = $matches[0];
        $parent =&$namespaces;
        while(count($matches)) {
            $match = array_shift($matches);
            if(!isset($parent[$match]) && count($matches))
                $parent[$match] = array();
            $parent =&$parent[$match];

        }
    }
}

print_r($namespaces);