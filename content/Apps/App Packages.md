---
Index: 2.4
Title: App Packages
---

You can bundle your app so it can be installed in the App Center section in the [Control Center](/Getting%20Started/Control%20Center).  
Have a look at the [bundled apps on GitHub](https://github.com/Tooloop/Tooloop-Packages) for some examples.

## Package format

Tooloop Packages are ZIP files, wrapping a [Debian package (.deb)](https://en.wikipedia.org/wiki/Deb_(file_format)) and additional images, that are displayed in the App center:

    package.zip
    │
    ├─ <package-name>_v.v.v_aaa.deb (mandatory)
    │
    └─ media/
       ├─ <preview_image>.jpg (mandatory)
       ├─ <optional-image>.png
       ├─ <optional-image>.jpg
       └─ ...


## The Debian package


This is the folder structure:

```
│
├─ media/ (your image files)
│  ├─ some-image.jpg
│  └─ ...
│
package/ (the Debian package)
├─ DEBIAN/
│  ├─ control (mandatory)
│  ├─ postinst (optional)
│  ├─ postrm (optional)
│  └─ ...
│
└─ assets/
    ├─ presentation/
    │  ├─ LICENSE.md
    │  ├─ README.md
    │  ├─ start-presentation.sh (mandatory)
    │  ├─ stop-presentation.sh (mandatory)
    │  └─ ...
    │
    └─ data/
        └─ ...
```

The `/DEBIAN` folder contains the package information and some control files. All other folders are simply copied to disk for you.


**The DEBIAN/control file**

This file contains all the information about your package.
It’s used to display information in the app center.

https://linux.die.net/man/5/deb-control

```YAML
Package: my-app
# Use semantic versioning https://semver.org/
Version: 1.0.0
Maintainer: Tooloop Multimedia
Homepage: https://www.tooloop.de
Bugs: https://github.com/Tooloop/Tooloop-Packages
# One of "tooloop/presentation", "tooloop/addon"
Section: tooloop/presentation
Architecture: amd64
Depends: tooloop-transparent-cursor
# App name shown in the app center.
Name: My App
# The thumbnail shown in the app center
Thumbnail: my-app-thumbnail.jpg
# The media files, shown in the detail view of the package
# can be JPGs and PNGs
Media: my-app-image1.jpg, my-app-image2.png
# First line is the short description shown in the app center.
# All following lines are used as detailed description.
Description: A simple example, how to make a processing app
 Longer description, indented by one space
 .
 empty lines have just a single point
 *Markdown* _is_ ok
 ends with one additional line break

```