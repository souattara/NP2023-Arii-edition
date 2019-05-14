<?php

// src/Arii/JIDBundle/Twig/JIDExtension.php
namespace Arii\JIDBundle\Twig;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class JIDExtension extends \Twig\Extension\AbstractExtension
{
    public function getFilters()
    {
        return array(
            'log' => new TwigFunction('logFilter', [$this, 'logFilter']),
            'refresh' => new TwigFunction('refreshFilter', [$this, 'refreshFilter']),
        );
    }

    public function logFilter($line)
    {
        $date = substr($line,0,23);
        $info = substr($line,24);
        $end = strpos($info,']');
        $class = substr($info,1,$end-1);
        $info = substr($info,$end+2);
        return "<td class='log'>$date</td><td>$class</td><td class='$class'>$info</td>";
    }

    public function refreshFilter($default)
    {
        return $default;
    }

    public function getName()
    {
        return 'jid_extension';
    }
}

?>