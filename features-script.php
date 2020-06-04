<?php

include "Service\FeatureStatus.php";

use App\Service\FeatureStatus;

$featureStatus = new FeatureStatus();

$all = $featureStatus->getAllFeatures();
print_r("All features:\n");
foreach($all as $key=>$status) {
    print_r($key . " - " . $status . "\n");
}
print_r("\n");

$enabled = $featureStatus->getAllEnabledFeatures();
print_r("All enabled features:\n");
foreach($enabled as $feature) {
    print_r($feature . "\n");
}
print_r("\n");

$enabled = $featureStatus->getAllDisabledFeatures();
print_r("All enabled features:\n");
foreach($enabled as $feature) {
    print_r($feature . "\n");
}
print_r("\n");

while(true) {
    print_r("Enter feature name to see its status.\n");
    $name = readline("Command: ");
    $status = $featureStatus->getStatusByFeatureName($name);
    print_r($status . "\n\n");
}

