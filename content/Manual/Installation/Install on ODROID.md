---
Title: Install on ODROID
Template: docs
Index: 02
---

# Download an Image

In the [ODROID wiki](https://wiki.odroid.com/odroid-xu4/os_images/linux/ubuntu_4.14/ubuntu_4.14) find and download a minimal Ubuntu image. It should be named something like

***Ubuntu 16.04.X (YYYYMMDD) (MINIMAL, BARE OS)***

The date and version might change over time).  
Flash it on your eMMC module or SD card and boot from it.


# Create the tooloop user

Log in as 

User: `root`  
Password: `odroid`  

You either do it on the machine or via [SSH](how-to#ssh).

Optional change root password

<pre class="command-line" data-prompt="~$"><code class="language-bash">passwd</code></pre>

Create tooloop user

<pre class="command-line" data-prompt="~$"><code class="language-bash">adduser tooloop
usermod -a -G sudo tooloop</code></pre>


# Set locale and keyboard layout

<pre class="command-line" data-prompt="~$"><code class="language-bash">dpkg-reconfigure locales
dpkg-reconfigure keyboard-configuration
sudo dpkg --configure -a</code></pre>


# Install Tooloop OS

Now get the Tooloop OS files and run the installer:

<pre class="command-line" data-prompt="~$"><code class="language-bash">sudo apt install -y git && git clone https://github.com/vollstock/Tooloop-OS.git && sudo Tooloop-OS/install-tooloop-os.sh</code></pre>

While updating the base system, the installer will inform you that a new **boot.ini** was installed. That’s ok.

<img src="%base_url%/assets/manual/installation/odroid-new-boot-ini.png">

After some minutes the system will automatically reboot into you new and shiny Tooloop OS.  
If your're curious what the installer does, [check the install script](https://github.com/vollstock/Tooloop-OS/blob/master/install-tooloop-os.sh).

Yay, you're done!  
Enjoy the <a href="%base_url%/Manual/Usage/Getting Started">first steps</a> on your new Tooloop Box.