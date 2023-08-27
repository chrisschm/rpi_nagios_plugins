# Raspberry Pi Nagios Plugins

## Paths to find components

The paths of many Nagios components differs by installationtype. This repository will use paths by installation from source <code>/usr/local/nagios/</code>. If you use Nagios installed by the paketmanager, you may need to change them to <code>/usr/lib/nagios/</code>.

## Preparation

Copy the content from [commands.cfg](https://github.com/chrisschm/rpi_nagios_plugins/blob/main/commands.cfg) into <code>/usr/local/nagios/objects/commands.cfg</code> and take care its uncommented in <code>/usr/local/nagios/etc/nagios.cfg</code>.

```
# You can specify individual object config files as shown below:
cfg_file=/usr/local/nagios/etc/objects/commands.cfg
```

Now it could be used in any host.cfg file as the module needs.
