---
Title: Installation
Index: 1.1
---

# Download Ubuntu

- Download the [Ubuntu Server 22.04 64-bit ISO](http://releases.ubuntu.com/jammy/).
- [Make a bootable USB drive](https://etcher.io/).
- Now boot from your USB drive. You probably will have to set this up in you BIOS.

<article class="message is-warning">
  <div class="message-header">
    <p>Connect to the internet</p>
  </div>
  <div class="message-body">
    During the installation process you will need to download packages from the internet. Please make sure. that your box is conected via Ethernet cable and reveives an IP address over DHCP.
  </div>
</article>

# Install the base system

Choose a language for the install process.

<img src="%base_url%/assets/manual/installation/010-install-language.png">

Press F4 and select “Install a minimal system” from the Modes menu.  
Then select “Install Ubuntu Server with HWE kernel” from the main menu.

<img src="%base_url%/assets/manual/installation/020-minimal-system.png">


## Language

Choose language timezone, locale keyboard layout to your liking. It won't have any real effect on your system. It’s just the language you will see in the console.

<img src="%base_url%/assets/manual/installation/030-system-language.png">
<img src="%base_url%/assets/manual/installation/040-location.png">
<img src="%base_url%/assets/manual/installation/050-locale.png">
<img src="%base_url%/assets/manual/installation/060-keyboard.png">


## Hostname and user

Enter a hostname.

<img src="%base_url%/assets/manual/installation/070-hostname.png">

Name the default user “tooloop”.

<img src="%base_url%/assets/manual/installation/080-user.png">

Don't encrypt the home directory.

<img src="%base_url%/assets/manual/installation/090-encryption.png">


## Partitions

Select auto paritioning.


## Proxy

Leave this blank (unless you have an IT guy to tell you otherwise).

<img src="%base_url%/assets/manual/installation/120-proxy.png">


## Auto updates

We don't want anything that’s not in our control.

<img src="%base_url%/assets/manual/installation/130-updates.png">


## Software selection

Select only “OpenSSH server”.

<img src="%base_url%/assets/manual/installation/140-software.png">

This way we can log into our box over SSH right after the first reboot.


## GRUB

Yes to GRUB.

<img src="%base_url%/assets/manual/installation/150-grub.png">


## Reboot

<img src="%base_url%/assets/manual/installation/160-reboot.png">


# Install Tooloop OS

After the base system was installed, log into your Tooloop box. You either do it on the machine or via [SSH](how-to#ssh).

Now get the Tooloop OS files and run the installer:

```bash
sudo apt install -y git && git clone https://github.com/vollstock/Tooloop-OS.git && sudo Tooloop-OS/install-tooloop-os.sh
```

After some minutes the system will automatically reboot into you new and shiny Tooloop OS.  
If your're curious what the installer does, [check the install script](https://github.com/vollstock/Tooloop-OS/blob/master/install-tooloop-os.sh).

Yay, you're done!  
Enjoy the <a href="%base_url%/Manual/Getting started/The desktop">first steps</a> on your new Tooloop Box.