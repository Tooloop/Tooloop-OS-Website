---
Title: Virtual machine
Template: docs
Index: 04
---

You can easily install Tooloop OS in a virtual machine.

This guide is using [VirtualBox](https://www.virtualbox.org/) but any other virtualization software will probably just work the same.

# New machine

Click on “New” to create a new machine.  
Name it and give it some memory. 4 GB is a size that the mid-range boxes specify and your computer can probably spare.

<img src="%base_url%/assets/manual/installation-vm/010-new.png" style="box-shadow: 0 3px 10px rgba(0,0,0,0.75);">

# Disk image

Create a disk image for the new machine. Using 25 GB of size will let you follow the default installation process with standard partition sizes.

<img src="%base_url%/assets/manual/installation-vm/020-disk.png" style="box-shadow: 0 3px 10px rgba(0,0,0,0.75);">

# System

Now click “Settings”.

In the “System” tab, add as many CPU cores as you want to share with the VM.

<img src="%base_url%/assets/manual/installation-vm/030-system.png" style="box-shadow: 0 3px 10px rgba(0,0,0,0.75); width: 100%; max-width: 656px;">

# Display

In the “Display tab, max out the video memory and activate 3D acceleration.

<img src="%base_url%/assets/manual/installation-vm/040-display.png" style="box-shadow: 0 3px 10px rgba(0,0,0,0.75); width: 100%; max-width: 656px;">

# Storage

In the “Storage” tab, add the Ubuntu ISO in the optical drive.

<img src="%base_url%/assets/manual/installation-vm/050-storage.png" style="box-shadow: 0 3px 10px rgba(0,0,0,0.75); width: 100%; max-width: 656px;">

# Network

If you want to test network features of Tooloop OS you should forward the local SSH and HTTP ports.

In the “Network” tab open the advanced features and click on “Port Forwarding”.

<img src="%base_url%/assets/manual/installation-vm/060-port-forwarding.png" style="box-shadow: 0 3px 10px rgba(0,0,0,0.75); width: 100%; max-width: 656px;">

Forward the ports 80 and 22 like in the picture.


<img src="%base_url%/assets/manual/installation-vm/070-ports.png" style="box-shadow: 0 3px 10px rgba(0,0,0,0.75); width: 100%; max-width: 656px;">

After the OS installation you will now be able to open the settings server in your browser at this URL

    http://localhost:8080

and connect via SSH like this

    ssh tooloop@localhost -p 10022


# Install Tooloop OS

Your virtual machine is ready. You can now start the [standard installation process](Installation).
