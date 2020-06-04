<?php

namespace App\Service;

class FeatureStatus
{
    private $fatures;

    // Loading all features from features.ini file.
    // Path should be changed when implementing.
    function __construct($file) {
        $this->features = parse_ini_file($file);
    }

    // Returning array of features where key is a feature name
    // and value is features status.
    public function getAllFeatures() {
        return $this->features;
    }

    // Returning names of all enabled features.
    public function getAllEnabledFeatures() {
        $enabled = [];
    
        foreach($this->features as $name=>$status) {
            if ($status === 'enabled') {
                array_push($enabled, $name);
            }
        }
    
        return $enabled;
    }

    // Returning names of all disabled features.
    public function getAllDisabledFeatures() {
        $disabled = [];
    
        foreach($this->features as $name=>$status) {
            if ($status === 'disabled') {
                array_push($disabled, $name);
            }
        }
    
        return $disabled;
    }

    // Returning status of given feature.
    function getStatusByFeatureName($nameLookup) {
        foreach($this->features as $name=>$status) {
            if ($name === $nameLookup) {
                return $status;
            }
        }
    }
}
