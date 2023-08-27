# Raspberry Pi Nagios Plugins

with needed root access

## Paths to find

The paths of many Nagios components differs by installationtype. This repository will use paths by installation from source <code>/usr/local/nagios/</code>. If you use Nagios installed by the paketmanager, you may need to change them to <code>/usr/lib/nagios/</code>.

## Preparation

First its mandatory to get sudo rights for the user Nagios is running with. Use <code>visudo</code> to edit the sudoers file.

```
# The nagios user will not need a tty
Defaults:nagios !requiretty
 
# Allows members of group nagios to execute commands from plugins directory
%nagios ALL=(ALL) NOPASSWD: /usr/local/nagios/libexec/
```

Copy the content from [commands.cfg](https://github.com/chrisschm/rpi_nagios_plugins/blob/08df0c219c5a10c0c9e5fb5616ee190c6d03919b/root/commands.cfg) into <code>/usr/local/nagios/objects/commands.cfg</code> and take care its uncommented in <code>/usr/local/nagios/etc/nagios.cfg</code>.

```
# You can specify individual object config files as shown below:
cfg_file=/usr/local/nagios/etc/objects/commands.cfg
```

Now it could be used in any host.cfg file as the module needs.
