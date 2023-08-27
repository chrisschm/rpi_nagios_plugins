# Raspberry Pi Nagios Plugins
with needed root access

## Preparation
First its mandatory to get sudo rights for the user Nagios is running with. Use <code>visudo</code> to edit the sudoers file.

```
# The nagios user will not need a tty
Defaults:nagios !requiretty
 
# Allows members of group nagios to execute commands from plugins directory
%nagios ALL=(ALL) NOPASSWD: /usr/local/nagios/libexec/
```
