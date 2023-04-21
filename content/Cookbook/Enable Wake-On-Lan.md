# Enable Wake-On-Lan

Follow this guide, if for some reasons Wake-On-Lan is not working, even if you 
enabled it in the BIOS.

Get all ethernet interfaces:

```bash
ip a 
```

Check if it supports WoL using `ethtool`.

```bash
sudo apt install ethtool

# enp1s0 could be different on your machine
sudo ethtool enp1s0
```

The output will look something like this:

```yaml
Settings for enp1s0:
	Supported ports: [ TP	 MII ]
	Supported link modes:   10baseT/Half 10baseT/Full
	                        100baseT/Half 100baseT/Full
	                        1000baseT/Full
	Supported pause frame use: Symmetric Receive-only
	Supports auto-negotiation: Yes
	Supported FEC modes: Not reported
	Advertised link modes:  10baseT/Half 10baseT/Full
	                        100baseT/Half 100baseT/Full
	                        1000baseT/Full
	Advertised pause frame use: Symmetric Receive-only
	Advertised auto-negotiation: Yes
	Advertised FEC modes: Not reported
	Link partner advertised link modes:  10baseT/Half 10baseT/Full
	                                     100baseT/Half 100baseT/Full
	                                     1000baseT/Full
	Link partner advertised pause frame use: No
	Link partner advertised auto-negotiation: Yes
	Link partner advertised FEC modes: Not reported
	Speed: 1000Mb/s
	Duplex: Full
	Auto-negotiation: on
	master-slave cfg: preferred slave
	master-slave status: slave
	Port: Twisted Pair
	PHYAD: 0
	Transceiver: external
	MDI-X: Unknown
	Supports Wake-on: pumbg
	Wake-on: g
	Link detected: yes
```

Note the line *`Wake-on: g`*.  
`g` means enabled, `d` is disabled.

If you want to enable it permanently you can do so in a [netplan](https://netplan.io/) configuration file:

`/etc/netplan/99_tooloop.yaml`

```yaml
network:
  version: 2
  renderer: networkd
  ethernets:
    enp1s0:
      dhcp4: true
      wakeonlan: true
    enp2s0:
      dhcp4: true
      wakeonlan: true
```