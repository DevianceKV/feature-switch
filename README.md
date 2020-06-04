# feature-switch
A simple service that provides status (enabled or disabled) of features used.

## What is the structure?
* .ini file that contains features and their status.
* A service with methods that return:
  1. All features and their statuses.
  1. Names of all features that are enabled.
  1. Names of all features that are disabled.
  1. Status of a given feature.
* A simple console script that displays all the results.

## How to use it?
* Clone the project.
* Navigate to root folder in your console.
* Run ```php -f features-script.php``` command. (After this step, results of first three methods will be shown in console.)
* To check the status of a single feature type features name in console.
* To terminate program press Ctrl-C.
