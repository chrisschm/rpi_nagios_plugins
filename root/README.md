# Raspberry Pi Nagios Plugins
with needed root access

## Paths to find components
The paths of many Nagios components differs by installationtype. This repository will use paths by installation from source <code>/usr/local/nagios/</code>. If you use Nagios installed by the paketmanager, you may need to change them to <code>/usr/lib/nagios/</code>.


## Preparation
First its mandatory to get sudo rights for the user Nagios is running with. Use <code>visudo</code> to edit the sudoers file.

```
# The nagios user will not need a tty
Defaults:nagios !requiretty
 
# Allows members of group nagios to execute commands from plugins directory
%nagios ALL=(ALL) NOPASSWD: /usr/local/nagios/libexec/
```
