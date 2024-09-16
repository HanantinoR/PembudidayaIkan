#!/bin/bash
# SCRIPT FOR SENDING DATA TO WASIS

echo "SCRIPT TO SEND DATA to WASIS"
echo "RUNNING SEND SCRIPT"

php -f /var/www/html/PembudidayaIkan/app/Http/Controllers/kirimwasis/DontRunSendToWasis.php
