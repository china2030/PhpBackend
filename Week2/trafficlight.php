<?php

$color=readline('Traffic Light:');
function traffic($color)
{
    switch ($color) {
        case "Green":
            echo "Go";
            break;
        case "Yellow":
            echo "Get ready";
            break;
        case "Red":
            echo "Stop";
            break;
        default:
            echo "Traffic light is broken";
    }
}

traffic($color);