---
Title: General
Template: docs
Index: 1
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