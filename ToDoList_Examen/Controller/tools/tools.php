<?php
function Duration($startTime, $endTime): array
{
    $deltaTimestamp = $endTime - $startTime;
    $duration["Years"] = intdiv($deltaTimestamp, 31556926);
    $duration["Months"] = intdiv(($deltaTimestamp % 31556926), 2629743);
    $duration["Weeks"] = intdiv(($deltaTimestamp % 2629743), 604800);
    $duration["Days"] = intdiv(($deltaTimestamp % 604800), 86400);
    $duration["Hours"] = intdiv(($deltaTimestamp % 86400), 3600);
    $duration["Minutes"] = intdiv(($deltaTimestamp % 3600), 60);
    $duration["Seconds"] = intdiv(($deltaTimestamp % 60), 60);
    return $duration;
}