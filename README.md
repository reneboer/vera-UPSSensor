# vera-UPSSensor
Sensor device that monitors your UPS status can trigger an alert as needed.

This is tested with an APC UPS attached to a Synology NAS and NUT on a Rasberry Pi.
- Follow these instructions to install NUT https://www.domoticz.com/forum/viewtopic.php?t=2266
- test the installtion using the command : upsc ups@(your NAS IP)

When on Vera you need a remote server to run the upsc command. Put the php script in the default sever directory. 
Configure the IP address of your NAS.
For a Pi with Apache and default settings this is /var/www/html 

When you have installed on openLuup you do not need the php script, but then you need to set the Remote variable to 0.

Install the plugin by uploading the D_UPSSensor1.xml and I_UPSSensor1.xml files to your Vera. Then manually create a device using these two files.

The device is a default door/windows sensor so it will behave as such. Extra variables will be set like Watts, just have a look.

The only configuration required is to set the IP address for the web server running the script in the ip attribute.

When running local on openLuup you must enter the IP address of your NAS and set the Remote variable to 0. 

Some more background information 
   variables possible  http://networkupstools.org/docs/user-manual.chunked/apcs01.html 
   status details APC  http://www.mathstat.dal.ca/~selinger/ups/backups.html
