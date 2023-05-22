---
Title: Install NVIDIA drivers
---

List all devices that Ubuntu finds that need a driver

```bash
ubuntu-drivers devices
```

This will print a list like this:

```bash
== /sys/devices/pci0000:00/0000:00:01.0/0000:01:00.0 ==
modalias : pci:v000010DEd00001FF2sv000010DEsd00001613bc03sc00i00
vendor   : NVIDIA Corporation
driver   : nvidia-driver-510 - distro non-free
driver   : nvidia-driver-530 - distro non-free
driver   : nvidia-driver-525-server - distro non-free
driver   : nvidia-driver-515 - distro non-free
driver   : nvidia-driver-470 - distro non-free
driver   : nvidia-driver-470-server - distro non-free
driver   : nvidia-driver-515-open - distro non-free
driver   : nvidia-driver-530-open - distro non-free recommended
driver   : nvidia-driver-525 - distro non-free
driver   : nvidia-driver-525-open - distro non-free
driver   : nvidia-driver-515-server - distro non-free
driver   : xserver-xorg-video-nouveau - distro free builtin
```

Select a driver and install it with

```bash
sudo apt install nvidia-driver-530
```