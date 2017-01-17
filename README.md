# vera-UPSSensor
Sensor device that monitors your UPS status can trigger an alert as needed.

This is tested with an APC UPS attached to a Synology NAS on Vera UI7 and openLuup.

Install the plugin from the Vera App market on ALTUI App Store.

The device is a default door/windows sensor so it will behave as such. Extra variables will be set like Watts, BatteryStatus and all data read from the UPS, just have a look.

The only configuration required is to set the IP address for the UPS server in the ip attribute. The default port is 3493. If your UPS server is setup with a different one, specify the port with the ip address (ip:port). The default UPS name is ups. this is the default for a UPS attached to a Synology NAS. The name can be configured in the UPSName variable in the plugin advanced options.

This version does not support SSL communication so if your UPS server is setup for that this will not work.

Some more background information 
- variables possible  http://networkupstools.org/docs/user-manual.chunked/apcs01.html 
- status details APC  http://www.mathstat.dal.ca/~selinger/ups/backups.html

Have fun
