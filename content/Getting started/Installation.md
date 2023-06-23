---
Title: Installation
Index: 1.1
---

Follow this guide and you can get your Tooloop Box up and running in about 30 minutes.


# Install the base system


<article class="message is-warning">
  <div class="message-header">
    <p>Connect to the internet</p>
  </div>
  <div class="message-body">
    During the installation process you will need to download packages from the internet. Please make sure that your box is conected via Ethernet cable and receives an IP address over DHCP.
  </div>
</article>


1. Download [Ubuntu Server 22.04 LTS](https://ubuntu.com/download/server)
2. [Make a bootable USB drive](https://etcher.io/).
3. Now boot from your USB drive. You probably will have to set this up in you BIOS.
4. When asked for a user name during installation, name the user `tooloop`
5. Also install the SSH server.


# Set it up Tooloop OS

Once you have Ubuntu installed, we can turn it into a media server:

   1. SSH into your machine
    ```bash
    ssh tooloop@<IP_ADDRESS>
    ```
   2. Get the Tooloop OS installer from GitHub
    ```bash
    git clone https://github.com/Tooloop/Tooloop-OS
    ```
1. Run the install script
    ```bash
    cd Tooloop-OS
    sudo ./install-tooloop-os.sh
    ```


After some minutes the system will automatically reboot into your new and shiny Tooloop OS.  
If you're curious what the installer does, [check the install script](https://github.com/vollstock/Tooloop-OS/blob/master/install-tooloop-os.sh).

Yay, you're done!  

Enjoy the <a href="%base_url%/Manual/Getting started/The desktop">first steps</a> on your new Tooloop Box.