---
Title: DMX
---

# USB Controller

Out of the box, Tooloop OS has support for [Enttec USB DMX](https://www.enttec.com/eu/range/controls/dmx-usb/) devices. Those should just work.


# OLA 

It’s also fairly easy to install [OLA (Open Lighting Architecture)](https://www.openlighting.org/ola/) on your box:

```bash
sudo apt install ola
```

It runs a deamon on your computer that will talk DMX using attached hardware (like the USB controller mentioned above) or network protocols like ArtNet or SACN.

You can configure it to translate inbetween protocols and it provides an API that your application can talk to so you don't have to care about different DMX interfaces.

