---
Title: DMX
---

# USB Controller

Out of the box, Tooloop OS has support for [Enttec USB DMX](https://www.enttec.com/eu/range/controls/dmx-usb/) devices built-in.  
Those should just work.

# OLA 


[OLA (Open Lighting Architecture)](https://www.openlighting.org/ola/) can easily be installed with the [optional stuff installer](%base_url%?Manual/Installation/Install%20optionals).

It runs a deamon on your computer that will talk DMX using attached hardware (like the USB controller mentioned above) or network protocols like ArtNet or SACN.

You can configure it to translate inbetween protocols and it provides an API that your application can talk to so you don't have to care about different DMX interfaces.


