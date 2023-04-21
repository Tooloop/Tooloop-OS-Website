---
Title: App Packages
---

You want to develop an app of yourself – cool, that’s what *Tooloop* is for :-)  
Simply follow some conventions and it will behave as a first class citizen on *Tooloop OS*.

You application should live in `/assets/presentation/`.

Tooloop OS uses two scripts to start, stop or restart the app.

`/assets/presentation/start-presentation.sh`  
`/assets/presentation/stop-presentation.sh`

Whatever command is needed to start or stop your app, put it in there.

These scripts are called from

- the desktop menu
- the terminal aliases `tooloop-presentation-start` and `tooloop-presentation-stop`
- the settings server

# Package format

You can bundle your app so it can be installed in the App Center section in the <a href="%base_url%/Manual/Management/System settings">System Settings</a>.  
Just put your bundle in the `/assets/apps/` folder.

Have a look at the [examples on GitHub](https://github.com/vollstock/Tooloop-Examples) if you want to see how those are done.

# Bundle structure

```yaml
- [APP_NAME]/
   |
   |- README.md (optional)
   |- LICENSE.md (optional)
   |
   +- bundle/
   |   |- app.json
   |   |- preview_image.jpg (320 × 180 px)
   |   |- install.sh (optional)
   |   |- uninstall.sh (optional)
   |   |- controller.py (optional)
   |   |- settings.html (optional)
   |
   +- presentation/
   |   |- start-presentation.sh
   |   |- stop-presentation.sh
   |   |- ...
   |
   +- data/ (optional)
   |   |- ...
```

# App definition

In the bundle there’s a json file that the settings server uses to display information about the app.

It’s contents have to have this structure:

```json
{
  "name": "Awesome Super Trooper",
  "description": "256 characters short description",
  "media": [
    {
      "type": "video",
      "url": "https://youtu.be/GynFoGzOWds",
      "description": "Description of video 1"
    }, {
      "type": "image",
      "url": "https://www.cool-dude.com/awesome-super-trooper/img/app-preview-1.jpg",
      "description": "Description of image 1"
    }, {
      "type": "image",
      "url": "https://www.cool-dude.com/awesome-super-trooper/img/app-preview-2.jpg",
      "description": "Description of image 2"
    }, {
      "type": "video",
      "url": "https://vimeo.com/6912147",
      "description": "Description of video 2"
    }
  ],
  "version": "1.0",
  "last_updated": "2017-01-22",
  "license": "Commercial",
  "category": "Tools",
  "tags": ["examples"],
  "developer": "Cool dude",
  "homepage": "http://www.cool-dude.com/awesome-super-trooper/",
  "compatibility": {
    "s": "False",
    "m": "True",
    "l": "True",
    "xl": "True"
  }
}
```