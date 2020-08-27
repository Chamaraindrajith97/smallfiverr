<!DOCTYPE html>
<!-- saved from url=(0027)http://10.100.1.52:3000/app -->
<html lang="en" dir="ltr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <title>Vertical</title>
  <!--<base href="/">-->
  <base href=".">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="http://10.100.1.52:3000/favicon.ico">
  <link href="./Vertical_files/css" rel="stylesheet">
  <link href="./Vertical_files/icon" rel="stylesheet">
  <link rel="stylesheet" href="./Vertical_files/font-awesome.min.css">
  <style type="text/css">
    /*! jQuery UI - v1.12.1 - 2016-09-14
* http://jqueryui.com
* Includes: core.css, accordion.css, autocomplete.css, menu.css, button.css, controlgroup.css, checkboxradio.css, datepicker.css, dialog.css, draggable.css, resizable.css, progressbar.css, selectable.css, selectmenu.css, slider.css, sortable.css, spinner.css, tabs.css, tooltip.css, theme.css
* To view and modify this theme, visit http://jqueryui.com/themeroller/?bgShadowXPos=&bgOverlayXPos=&bgErrorXPos=&bgHighlightXPos=&bgContentXPos=&bgHeaderXPos=&bgActiveXPos=&bgHoverXPos=&bgDefaultXPos=&bgShadowYPos=&bgOverlayYPos=&bgErrorYPos=&bgHighlightYPos=&bgContentYPos=&bgHeaderYPos=&bgActiveYPos=&bgHoverYPos=&bgDefaultYPos=&bgShadowRepeat=&bgOverlayRepeat=&bgErrorRepeat=&bgHighlightRepeat=&bgContentRepeat=&bgHeaderRepeat=&bgActiveRepeat=&bgHoverRepeat=&bgDefaultRepeat=&iconsHover=url(%22images%2Fui-icons_555555_256x240.png%22)&iconsHighlight=url(%22images%2Fui-icons_777620_256x240.png%22)&iconsHeader=url(%22images%2Fui-icons_444444_256x240.png%22)&iconsError=url(%22images%2Fui-icons_cc0000_256x240.png%22)&iconsDefault=url(%22images%2Fui-icons_777777_256x240.png%22)&iconsContent=url(%22images%2Fui-icons_444444_256x240.png%22)&iconsActive=url(%22images%2Fui-icons_ffffff_256x240.png%22)&bgImgUrlShadow=&bgImgUrlOverlay=&bgImgUrlHover=&bgImgUrlHighlight=&bgImgUrlHeader=&bgImgUrlError=&bgImgUrlDefault=&bgImgUrlContent=&bgImgUrlActive=&opacityFilterShadow=Alpha(Opacity%3D30)&opacityFilterOverlay=Alpha(Opacity%3D30)&opacityShadowPerc=30&opacityOverlayPerc=30&iconColorHover=%23555555&iconColorHighlight=%23777620&iconColorHeader=%23444444&iconColorError=%23cc0000&iconColorDefault=%23777777&iconColorContent=%23444444&iconColorActive=%23ffffff&bgImgOpacityShadow=0&bgImgOpacityOverlay=0&bgImgOpacityError=95&bgImgOpacityHighlight=55&bgImgOpacityContent=75&bgImgOpacityHeader=75&bgImgOpacityActive=65&bgImgOpacityHover=75&bgImgOpacityDefault=75&bgTextureShadow=flat&bgTextureOverlay=flat&bgTextureError=flat&bgTextureHighlight=flat&bgTextureContent=flat&bgTextureHeader=flat&bgTextureActive=flat&bgTextureHover=flat&bgTextureDefault=flat&cornerRadius=3px&fwDefault=normal&ffDefault=Arial%2CHelvetica%2Csans-serif&fsDefault=1em&cornerRadiusShadow=8px&thicknessShadow=5px&offsetLeftShadow=0px&offsetTopShadow=0px&opacityShadow=.3&bgColorShadow=%23666666&opacityOverlay=.3&bgColorOverlay=%23aaaaaa&fcError=%235f3f3f&borderColorError=%23f1a899&bgColorError=%23fddfdf&fcHighlight=%23777620&borderColorHighlight=%23dad55e&bgColorHighlight=%23fffa90&fcContent=%23333333&borderColorContent=%23dddddd&bgColorContent=%23ffffff&fcHeader=%23333333&borderColorHeader=%23dddddd&bgColorHeader=%23e9e9e9&fcActive=%23ffffff&borderColorActive=%23003eff&bgColorActive=%23007fff&fcHover=%232b2b2b&borderColorHover=%23cccccc&bgColorHover=%23ededed&fcDefault=%23454545&borderColorDefault=%23c5c5c5&bgColorDefault=%23f6f6f6
* Copyright jQuery Foundation and other contributors; Licensed MIT */

    .ui-helper-hidden {
      display: none
    }

    .ui-helper-hidden-accessible {
      border: 0;
      clip: rect(0 0 0 0);
      height: 1px;
      margin: -1px;
      overflow: hidden;
      padding: 0;
      position: absolute;
      width: 1px
    }

    .ui-helper-reset {
      margin: 0;
      padding: 0;
      border: 0;
      outline: 0;
      line-height: 1.3;
      text-decoration: none;
      font-size: 100%;
      list-style: none
    }

    .ui-helper-clearfix:before,
    .ui-helper-clearfix:after {
      content: "";
      display: table;
      border-collapse: collapse
    }

    .ui-helper-clearfix:after {
      clear: both
    }

    .ui-helper-zfix {
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      position: absolute;
      opacity: 0;
      filter: Alpha(Opacity=0)
    }

    .ui-front {
      z-index: 100
    }

    .ui-state-disabled {
      cursor: default !important;
      pointer-events: none
    }

    .ui-icon {
      display: inline-block;
      vertical-align: middle;
      margin-top: -.25em;
      position: relative;
      text-indent: -99999px;
      overflow: hidden;
      background-repeat: no-repeat
    }

    .ui-widget-icon-block {
      left: 50%;
      margin-left: -8px;
      display: block
    }

    .ui-widget-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%
    }

    .ui-accordion .ui-accordion-header {
      display: block;
      cursor: pointer;
      position: relative;
      margin: 2px 0 0 0;
      padding: .5em .5em .5em .7em;
      font-size: 100%
    }

    .ui-accordion .ui-accordion-content {
      padding: 1em 2.2em;
      border-top: 0;
      overflow: auto
    }

    .ui-autocomplete {
      position: absolute;
      top: 0;
      left: 0;
      cursor: default
    }

    .ui-menu {
      list-style: none;
      padding: 0;
      margin: 0;
      display: block;
      outline: 0
    }

    .ui-menu .ui-menu {
      position: absolute
    }

    .ui-menu .ui-menu-item {
      margin: 0;
      cursor: pointer;
      list-style-image: url("data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7")
    }

    .ui-menu .ui-menu-item-wrapper {
      position: relative;
      padding: 3px 1em 3px .4em
    }

    .ui-menu .ui-menu-divider {
      margin: 5px 0;
      height: 0;
      font-size: 0;
      line-height: 0;
      border-width: 1px 0 0 0
    }

    .ui-menu .ui-state-focus,
    .ui-menu .ui-state-active {
      margin: -1px
    }

    .ui-menu-icons {
      position: relative
    }

    .ui-menu-icons .ui-menu-item-wrapper {
      padding-left: 2em
    }

    .ui-menu .ui-icon {
      position: absolute;
      top: 0;
      bottom: 0;
      left: .2em;
      margin: auto 0
    }

    .ui-menu .ui-menu-icon {
      left: auto;
      right: 0
    }

    .ui-button {
      padding: .4em 1em;
      display: inline-block;
      position: relative;
      line-height: normal;
      margin-right: .1em;
      cursor: pointer;
      vertical-align: middle;
      text-align: center;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      overflow: visible
    }

    .ui-button,
    .ui-button:link,
    .ui-button:visited,
    .ui-button:hover,
    .ui-button:active {
      text-decoration: none
    }

    .ui-button-icon-only {
      width: 2em;
      box-sizing: border-box;
      text-indent: -9999px;
      white-space: nowrap
    }

    input.ui-button.ui-button-icon-only {
      text-indent: 0
    }

    .ui-button-icon-only .ui-icon {
      position: absolute;
      top: 50%;
      left: 50%;
      margin-top: -8px;
      margin-left: -8px
    }

    .ui-button.ui-icon-notext .ui-icon {
      padding: 0;
      width: 2.1em;
      height: 2.1em;
      text-indent: -9999px;
      white-space: nowrap
    }

    input.ui-button.ui-icon-notext .ui-icon {
      width: auto;
      height: auto;
      text-indent: 0;
      white-space: normal;
      padding: .4em 1em
    }

    input.ui-button::-moz-focus-inner,
    button.ui-button::-moz-focus-inner {
      border: 0;
      padding: 0
    }

    .ui-controlgroup {
      vertical-align: middle;
      display: inline-block
    }

    .ui-controlgroup>.ui-controlgroup-item {
      float: left;
      margin-left: 0;
      margin-right: 0
    }

    .ui-controlgroup>.ui-controlgroup-item:focus,
    .ui-controlgroup>.ui-controlgroup-item.ui-visual-focus {
      z-index: 9999
    }

    .ui-controlgroup-vertical>.ui-controlgroup-item {
      display: block;
      float: none;
      width: 100%;
      margin-top: 0;
      margin-bottom: 0;
      text-align: left
    }

    .ui-controlgroup-vertical .ui-controlgroup-item {
      box-sizing: border-box
    }

    .ui-controlgroup .ui-controlgroup-label {
      padding: .4em 1em
    }

    .ui-controlgroup .ui-controlgroup-label span {
      font-size: 80%
    }

    .ui-controlgroup-horizontal .ui-controlgroup-label+.ui-controlgroup-item {
      border-left: none
    }

    .ui-controlgroup-vertical .ui-controlgroup-label+.ui-controlgroup-item {
      border-top: none
    }

    .ui-controlgroup-horizontal .ui-controlgroup-label.ui-widget-content {
      border-right: none
    }

    .ui-controlgroup-vertical .ui-controlgroup-label.ui-widget-content {
      border-bottom: none
    }

    .ui-controlgroup-vertical .ui-spinner-input {
      width: 75%;
      width: calc(100% - 2.4em)
    }

    .ui-controlgroup-vertical .ui-spinner .ui-spinner-up {
      border-top-style: solid
    }

    .ui-checkboxradio-label .ui-icon-background {
      box-shadow: inset 1px 1px 1px #ccc;
      border-radius: .12em;
      border: none
    }

    .ui-checkboxradio-radio-label .ui-icon-background {
      width: 16px;
      height: 16px;
      border-radius: 1em;
      overflow: visible;
      border: none
    }

    .ui-checkboxradio-radio-label.ui-checkboxradio-checked .ui-icon,
    .ui-checkboxradio-radio-label.ui-checkboxradio-checked:hover .ui-icon {
      background-image: none;
      width: 8px;
      height: 8px;
      border-width: 4px;
      border-style: solid
    }

    .ui-checkboxradio-disabled {
      pointer-events: none
    }

    .ui-datepicker {
      width: 17em;
      padding: .2em .2em 0;
      display: none
    }

    .ui-datepicker .ui-datepicker-header {
      position: relative;
      padding: .2em 0
    }

    .ui-datepicker .ui-datepicker-prev,
    .ui-datepicker .ui-datepicker-next {
      position: absolute;
      top: 2px;
      width: 1.8em;
      height: 1.8em
    }

    .ui-datepicker .ui-datepicker-prev-hover,
    .ui-datepicker .ui-datepicker-next-hover {
      top: 1px
    }

    .ui-datepicker .ui-datepicker-prev {
      left: 2px
    }

    .ui-datepicker .ui-datepicker-next {
      right: 2px
    }

    .ui-datepicker .ui-datepicker-prev-hover {
      left: 1px
    }

    .ui-datepicker .ui-datepicker-next-hover {
      right: 1px
    }

    .ui-datepicker .ui-datepicker-prev span,
    .ui-datepicker .ui-datepicker-next span {
      display: block;
      position: absolute;
      left: 50%;
      margin-left: -8px;
      top: 50%;
      margin-top: -8px
    }

    .ui-datepicker .ui-datepicker-title {
      margin: 0 2.3em;
      line-height: 1.8em;
      text-align: center
    }

    .ui-datepicker .ui-datepicker-title select {
      font-size: 1em;
      margin: 1px 0
    }

    .ui-datepicker select.ui-datepicker-month,
    .ui-datepicker select.ui-datepicker-year {
      width: 45%
    }

    .ui-datepicker table {
      width: 100%;
      font-size: .9em;
      border-collapse: collapse;
      margin: 0 0 .4em
    }

    .ui-datepicker th {
      padding: .7em .3em;
      text-align: center;
      font-weight: bold;
      border: 0
    }

    .ui-datepicker td {
      border: 0;
      padding: 1px
    }

    .ui-datepicker td span,
    .ui-datepicker td a {
      display: block;
      padding: .2em;
      text-align: right;
      text-decoration: none
    }

    .ui-datepicker .ui-datepicker-buttonpane {
      background-image: none;
      margin: .7em 0 0 0;
      padding: 0 .2em;
      border-left: 0;
      border-right: 0;
      border-bottom: 0
    }

    .ui-datepicker .ui-datepicker-buttonpane button {
      float: right;
      margin: .5em .2em .4em;
      cursor: pointer;
      padding: .2em .6em .3em .6em;
      width: auto;
      overflow: visible
    }

    .ui-datepicker .ui-datepicker-buttonpane button.ui-datepicker-current {
      float: left
    }

    .ui-datepicker.ui-datepicker-multi {
      width: auto
    }

    .ui-datepicker-multi .ui-datepicker-group {
      float: left
    }

    .ui-datepicker-multi .ui-datepicker-group table {
      width: 95%;
      margin: 0 auto .4em
    }

    .ui-datepicker-multi-2 .ui-datepicker-group {
      width: 50%
    }

    .ui-datepicker-multi-3 .ui-datepicker-group {
      width: 33.3%
    }

    .ui-datepicker-multi-4 .ui-datepicker-group {
      width: 25%
    }

    .ui-datepicker-multi .ui-datepicker-group-last .ui-datepicker-header,
    .ui-datepicker-multi .ui-datepicker-group-middle .ui-datepicker-header {
      border-left-width: 0
    }

    .ui-datepicker-multi .ui-datepicker-buttonpane {
      clear: left
    }

    .ui-datepicker-row-break {
      clear: both;
      width: 100%;
      font-size: 0
    }

    .ui-datepicker-rtl {
      direction: rtl
    }

    .ui-datepicker-rtl .ui-datepicker-prev {
      right: 2px;
      left: auto
    }

    .ui-datepicker-rtl .ui-datepicker-next {
      left: 2px;
      right: auto
    }

    .ui-datepicker-rtl .ui-datepicker-prev:hover {
      right: 1px;
      left: auto
    }

    .ui-datepicker-rtl .ui-datepicker-next:hover {
      left: 1px;
      right: auto
    }

    .ui-datepicker-rtl .ui-datepicker-buttonpane {
      clear: right
    }

    .ui-datepicker-rtl .ui-datepicker-buttonpane button {
      float: left
    }

    .ui-datepicker-rtl .ui-datepicker-buttonpane button.ui-datepicker-current,
    .ui-datepicker-rtl .ui-datepicker-group {
      float: right
    }

    .ui-datepicker-rtl .ui-datepicker-group-last .ui-datepicker-header,
    .ui-datepicker-rtl .ui-datepicker-group-middle .ui-datepicker-header {
      border-right-width: 0;
      border-left-width: 1px
    }

    .ui-datepicker .ui-icon {
      display: block;
      text-indent: -99999px;
      overflow: hidden;
      background-repeat: no-repeat;
      left: .5em;
      top: .3em
    }

    .ui-dialog {
      position: absolute;
      top: 0;
      left: 0;
      padding: .2em;
      outline: 0
    }

    .ui-dialog .ui-dialog-titlebar {
      padding: .4em 1em;
      position: relative
    }

    .ui-dialog .ui-dialog-title {
      float: left;
      margin: .1em 0;
      white-space: nowrap;
      width: 90%;
      overflow: hidden;
      text-overflow: ellipsis
    }

    .ui-dialog .ui-dialog-titlebar-close {
      position: absolute;
      right: .3em;
      top: 50%;
      width: 20px;
      margin: -10px 0 0 0;
      padding: 1px;
      height: 20px
    }

    .ui-dialog .ui-dialog-content {
      position: relative;
      border: 0;
      padding: .5em 1em;
      background: none;
      overflow: auto
    }

    .ui-dialog .ui-dialog-buttonpane {
      text-align: left;
      border-width: 1px 0 0 0;
      background-image: none;
      margin-top: .5em;
      padding: .3em 1em .5em .4em
    }

    .ui-dialog .ui-dialog-buttonpane .ui-dialog-buttonset {
      float: right
    }

    .ui-dialog .ui-dialog-buttonpane button {
      margin: .5em .4em .5em 0;
      cursor: pointer
    }

    .ui-dialog .ui-resizable-n {
      height: 2px;
      top: 0
    }

    .ui-dialog .ui-resizable-e {
      width: 2px;
      right: 0
    }

    .ui-dialog .ui-resizable-s {
      height: 2px;
      bottom: 0
    }

    .ui-dialog .ui-resizable-w {
      width: 2px;
      left: 0
    }

    .ui-dialog .ui-resizable-se,
    .ui-dialog .ui-resizable-sw,
    .ui-dialog .ui-resizable-ne,
    .ui-dialog .ui-resizable-nw {
      width: 7px;
      height: 7px
    }

    .ui-dialog .ui-resizable-se {
      right: 0;
      bottom: 0
    }

    .ui-dialog .ui-resizable-sw {
      left: 0;
      bottom: 0
    }

    .ui-dialog .ui-resizable-ne {
      right: 0;
      top: 0
    }

    .ui-dialog .ui-resizable-nw {
      left: 0;
      top: 0
    }

    .ui-draggable .ui-dialog-titlebar {
      cursor: move
    }

    .ui-draggable-handle {
      touch-action: none
    }

    .ui-resizable {
      position: relative
    }

    .ui-resizable-handle {
      position: absolute;
      font-size: 0.1px;
      display: block;
      touch-action: none
    }

    .ui-resizable-disabled .ui-resizable-handle,
    .ui-resizable-autohide .ui-resizable-handle {
      display: none
    }

    .ui-resizable-n {
      cursor: n-resize;
      height: 7px;
      width: 100%;
      top: -5px;
      left: 0
    }

    .ui-resizable-s {
      cursor: s-resize;
      height: 7px;
      width: 100%;
      bottom: -5px;
      left: 0
    }

    .ui-resizable-e {
      cursor: e-resize;
      width: 7px;
      right: -5px;
      top: 0;
      height: 100%
    }

    .ui-resizable-w {
      cursor: w-resize;
      width: 7px;
      left: -5px;
      top: 0;
      height: 100%
    }

    .ui-resizable-se {
      cursor: se-resize;
      width: 12px;
      height: 12px;
      right: 1px;
      bottom: 1px
    }

    .ui-resizable-sw {
      cursor: sw-resize;
      width: 9px;
      height: 9px;
      left: -5px;
      bottom: -5px
    }

    .ui-resizable-nw {
      cursor: nw-resize;
      width: 9px;
      height: 9px;
      left: -5px;
      top: -5px
    }

    .ui-resizable-ne {
      cursor: ne-resize;
      width: 9px;
      height: 9px;
      right: -5px;
      top: -5px
    }

    .ui-progressbar {
      height: 2em;
      text-align: left;
      overflow: hidden
    }

    .ui-progressbar .ui-progressbar-value {
      margin: -1px;
      height: 100%
    }

    .ui-progressbar .ui-progressbar-overlay {
      background: url("data:image/gif;base64,R0lGODlhKAAoAIABAAAAAP///yH/C05FVFNDQVBFMi4wAwEAAAAh+QQJAQABACwAAAAAKAAoAAACkYwNqXrdC52DS06a7MFZI+4FHBCKoDeWKXqymPqGqxvJrXZbMx7Ttc+w9XgU2FB3lOyQRWET2IFGiU9m1frDVpxZZc6bfHwv4c1YXP6k1Vdy292Fb6UkuvFtXpvWSzA+HycXJHUXiGYIiMg2R6W459gnWGfHNdjIqDWVqemH2ekpObkpOlppWUqZiqr6edqqWQAAIfkECQEAAQAsAAAAACgAKAAAApSMgZnGfaqcg1E2uuzDmmHUBR8Qil95hiPKqWn3aqtLsS18y7G1SzNeowWBENtQd+T1JktP05nzPTdJZlR6vUxNWWjV+vUWhWNkWFwxl9VpZRedYcflIOLafaa28XdsH/ynlcc1uPVDZxQIR0K25+cICCmoqCe5mGhZOfeYSUh5yJcJyrkZWWpaR8doJ2o4NYq62lAAACH5BAkBAAEALAAAAAAoACgAAAKVDI4Yy22ZnINRNqosw0Bv7i1gyHUkFj7oSaWlu3ovC8GxNso5fluz3qLVhBVeT/Lz7ZTHyxL5dDalQWPVOsQWtRnuwXaFTj9jVVh8pma9JjZ4zYSj5ZOyma7uuolffh+IR5aW97cHuBUXKGKXlKjn+DiHWMcYJah4N0lYCMlJOXipGRr5qdgoSTrqWSq6WFl2ypoaUAAAIfkECQEAAQAsAAAAACgAKAAAApaEb6HLgd/iO7FNWtcFWe+ufODGjRfoiJ2akShbueb0wtI50zm02pbvwfWEMWBQ1zKGlLIhskiEPm9R6vRXxV4ZzWT2yHOGpWMyorblKlNp8HmHEb/lCXjcW7bmtXP8Xt229OVWR1fod2eWqNfHuMjXCPkIGNileOiImVmCOEmoSfn3yXlJWmoHGhqp6ilYuWYpmTqKUgAAIfkECQEAAQAsAAAAACgAKAAAApiEH6kb58biQ3FNWtMFWW3eNVcojuFGfqnZqSebuS06w5V80/X02pKe8zFwP6EFWOT1lDFk8rGERh1TTNOocQ61Hm4Xm2VexUHpzjymViHrFbiELsefVrn6XKfnt2Q9G/+Xdie499XHd2g4h7ioOGhXGJboGAnXSBnoBwKYyfioubZJ2Hn0RuRZaflZOil56Zp6iioKSXpUAAAh+QQJAQABACwAAAAAKAAoAAACkoQRqRvnxuI7kU1a1UU5bd5tnSeOZXhmn5lWK3qNTWvRdQxP8qvaC+/yaYQzXO7BMvaUEmJRd3TsiMAgswmNYrSgZdYrTX6tSHGZO73ezuAw2uxuQ+BbeZfMxsexY35+/Qe4J1inV0g4x3WHuMhIl2jXOKT2Q+VU5fgoSUI52VfZyfkJGkha6jmY+aaYdirq+lQAACH5BAkBAAEALAAAAAAoACgAAAKWBIKpYe0L3YNKToqswUlvznigd4wiR4KhZrKt9Upqip61i9E3vMvxRdHlbEFiEXfk9YARYxOZZD6VQ2pUunBmtRXo1Lf8hMVVcNl8JafV38aM2/Fu5V16Bn63r6xt97j09+MXSFi4BniGFae3hzbH9+hYBzkpuUh5aZmHuanZOZgIuvbGiNeomCnaxxap2upaCZsq+1kAACH5BAkBAAEALAAAAAAoACgAAAKXjI8By5zf4kOxTVrXNVlv1X0d8IGZGKLnNpYtm8Lr9cqVeuOSvfOW79D9aDHizNhDJidFZhNydEahOaDH6nomtJjp1tutKoNWkvA6JqfRVLHU/QUfau9l2x7G54d1fl995xcIGAdXqMfBNadoYrhH+Mg2KBlpVpbluCiXmMnZ2Sh4GBqJ+ckIOqqJ6LmKSllZmsoq6wpQAAAh+QQJAQABACwAAAAAKAAoAAAClYx/oLvoxuJDkU1a1YUZbJ59nSd2ZXhWqbRa2/gF8Gu2DY3iqs7yrq+xBYEkYvFSM8aSSObE+ZgRl1BHFZNr7pRCavZ5BW2142hY3AN/zWtsmf12p9XxxFl2lpLn1rseztfXZjdIWIf2s5dItwjYKBgo9yg5pHgzJXTEeGlZuenpyPmpGQoKOWkYmSpaSnqKileI2FAAACH5BAkBAAEALAAAAAAoACgAAAKVjB+gu+jG4kORTVrVhRlsnn2dJ3ZleFaptFrb+CXmO9OozeL5VfP99HvAWhpiUdcwkpBH3825AwYdU8xTqlLGhtCosArKMpvfa1mMRae9VvWZfeB2XfPkeLmm18lUcBj+p5dnN8jXZ3YIGEhYuOUn45aoCDkp16hl5IjYJvjWKcnoGQpqyPlpOhr3aElaqrq56Bq7VAAAOw==");
      height: 100%;
      filter: alpha(opacity=25);
      opacity: 0.25
    }

    .ui-progressbar-indeterminate .ui-progressbar-value {
      background-image: none
    }

    .ui-selectable {
      touch-action: none
    }

    .ui-selectable-helper {
      position: absolute;
      z-index: 100;
      border: 1px dotted black
    }

    .ui-selectmenu-menu {
      padding: 0;
      margin: 0;
      position: absolute;
      top: 0;
      left: 0;
      display: none
    }

    .ui-selectmenu-menu .ui-menu {
      overflow: auto;
      overflow-x: hidden;
      padding-bottom: 1px
    }

    .ui-selectmenu-menu .ui-menu .ui-selectmenu-optgroup {
      font-size: 1em;
      font-weight: bold;
      line-height: 1.5;
      padding: 2px 0.4em;
      margin: 0.5em 0 0 0;
      height: auto;
      border: 0
    }

    .ui-selectmenu-open {
      display: block
    }

    .ui-selectmenu-text {
      display: block;
      margin-right: 20px;
      overflow: hidden;
      text-overflow: ellipsis
    }

    .ui-selectmenu-button.ui-button {
      text-align: left;
      white-space: nowrap;
      width: 14em
    }

    .ui-selectmenu-icon.ui-icon {
      float: right;
      margin-top: 0
    }

    .ui-slider {
      position: relative;
      text-align: left
    }

    .ui-slider .ui-slider-handle {
      position: absolute;
      z-index: 2;
      width: 1.2em;
      height: 1.2em;
      cursor: default;
      touch-action: none
    }

    .ui-slider .ui-slider-range {
      position: absolute;
      z-index: 1;
      font-size: .7em;
      display: block;
      border: 0;
      background-position: 0 0
    }

    .ui-slider.ui-state-disabled .ui-slider-handle,
    .ui-slider.ui-state-disabled .ui-slider-range {
      -webkit-filter: inherit;
      filter: inherit
    }

    .ui-slider-horizontal {
      height: .8em
    }

    .ui-slider-horizontal .ui-slider-handle {
      top: -.3em;
      margin-left: -.6em
    }

    .ui-slider-horizontal .ui-slider-range {
      top: 0;
      height: 100%
    }

    .ui-slider-horizontal .ui-slider-range-min {
      left: 0
    }

    .ui-slider-horizontal .ui-slider-range-max {
      right: 0
    }

    .ui-slider-vertical {
      width: .8em;
      height: 100px
    }

    .ui-slider-vertical .ui-slider-handle {
      left: -.3em;
      margin-left: 0;
      margin-bottom: -.6em
    }

    .ui-slider-vertical .ui-slider-range {
      left: 0;
      width: 100%
    }

    .ui-slider-vertical .ui-slider-range-min {
      bottom: 0
    }

    .ui-slider-vertical .ui-slider-range-max {
      top: 0
    }

    .ui-sortable-handle {
      touch-action: none
    }

    .ui-spinner {
      position: relative;
      display: inline-block;
      overflow: hidden;
      padding: 0;
      vertical-align: middle
    }

    .ui-spinner-input {
      border: none;
      background: none;
      color: inherit;
      padding: .222em 0;
      margin: .2em 0;
      vertical-align: middle;
      margin-left: .4em;
      margin-right: 2em
    }

    .ui-spinner-button {
      width: 1.6em;
      height: 50%;
      font-size: .5em;
      padding: 0;
      margin: 0;
      text-align: center;
      position: absolute;
      cursor: default;
      display: block;
      overflow: hidden;
      right: 0
    }

    .ui-spinner a.ui-spinner-button {
      border-top-style: none;
      border-bottom-style: none;
      border-right-style: none
    }

    .ui-spinner-up {
      top: 0
    }

    .ui-spinner-down {
      bottom: 0
    }

    .ui-tabs {
      position: relative;
      padding: .2em
    }

    .ui-tabs .ui-tabs-nav {
      margin: 0;
      padding: .2em .2em 0
    }

    .ui-tabs .ui-tabs-nav li {
      list-style: none;
      float: left;
      position: relative;
      top: 0;
      margin: 1px .2em 0 0;
      border-bottom-width: 0;
      padding: 0;
      white-space: nowrap
    }

    .ui-tabs .ui-tabs-nav .ui-tabs-anchor {
      float: left;
      padding: .5em 1em;
      text-decoration: none
    }

    .ui-tabs .ui-tabs-nav li.ui-tabs-active {
      margin-bottom: -1px;
      padding-bottom: 1px
    }

    .ui-tabs .ui-tabs-nav li.ui-tabs-active .ui-tabs-anchor,
    .ui-tabs .ui-tabs-nav li.ui-state-disabled .ui-tabs-anchor,
    .ui-tabs .ui-tabs-nav li.ui-tabs-loading .ui-tabs-anchor {
      cursor: text
    }

    .ui-tabs-collapsible .ui-tabs-nav li.ui-tabs-active .ui-tabs-anchor {
      cursor: pointer
    }

    .ui-tabs .ui-tabs-panel {
      display: block;
      border-width: 0;
      padding: 1em 1.4em;
      background: none
    }

    .ui-tooltip {
      padding: 8px;
      position: absolute;
      z-index: 9999;
      max-width: 300px
    }

    body .ui-tooltip {
      border-width: 2px
    }

    .ui-widget {
      font-family: Arial, Helvetica, sans-serif;
      font-size: 1em
    }

    .ui-widget .ui-widget {
      font-size: 1em
    }

    .ui-widget input,
    .ui-widget select,
    .ui-widget textarea,
    .ui-widget button {
      font-family: Arial, Helvetica, sans-serif;
      font-size: 1em
    }

    .ui-widget.ui-widget-content {
      border: 1px solid #c5c5c5
    }

    .ui-widget-content {
      border: 1px solid #ddd;
      background: #fff;
      color: #333
    }

    .ui-widget-content a {
      color: #333
    }

    .ui-widget-header {
      border: 1px solid #ddd;
      background: #e9e9e9;
      color: #333;
      font-weight: bold
    }

    .ui-widget-header a {
      color: #333
    }

    .ui-state-default,
    .ui-widget-content .ui-state-default,
    .ui-widget-header .ui-state-default,
    .ui-button,
    html .ui-button.ui-state-disabled:hover,
    html .ui-button.ui-state-disabled:active {
      border: 1px solid #c5c5c5;
      background: #f6f6f6;
      font-weight: normal;
      color: #454545
    }

    .ui-state-default a,
    .ui-state-default a:link,
    .ui-state-default a:visited,
    a.ui-button,
    a:link.ui-button,
    a:visited.ui-button,
    .ui-button {
      color: #454545;
      text-decoration: none
    }

    .ui-state-hover,
    .ui-widget-content .ui-state-hover,
    .ui-widget-header .ui-state-hover,
    .ui-state-focus,
    .ui-widget-content .ui-state-focus,
    .ui-widget-header .ui-state-focus,
    .ui-button:hover,
    .ui-button:focus {
      border: 1px solid #ccc;
      background: #ededed;
      font-weight: normal;
      color: #2b2b2b
    }

    .ui-state-hover a,
    .ui-state-hover a:hover,
    .ui-state-hover a:link,
    .ui-state-hover a:visited,
    .ui-state-focus a,
    .ui-state-focus a:hover,
    .ui-state-focus a:link,
    .ui-state-focus a:visited,
    a.ui-button:hover,
    a.ui-button:focus {
      color: #2b2b2b;
      text-decoration: none
    }

    .ui-visual-focus {
      box-shadow: 0 0 3px 1px rgb(94, 158, 214)
    }

    .ui-state-active,
    .ui-widget-content .ui-state-active,
    .ui-widget-header .ui-state-active,
    a.ui-button:active,
    .ui-button:active,
    .ui-button.ui-state-active:hover {
      border: 1px solid #003eff;
      background: #007fff;
      font-weight: normal;
      color: #fff
    }

    .ui-icon-background,
    .ui-state-active .ui-icon-background {
      border: #003eff;
      background-color: #fff
    }

    .ui-state-active a,
    .ui-state-active a:link,
    .ui-state-active a:visited {
      color: #fff;
      text-decoration: none
    }

    .ui-state-highlight,
    .ui-widget-content .ui-state-highlight,
    .ui-widget-header .ui-state-highlight {
      border: 1px solid #dad55e;
      background: #fffa90;
      color: #777620
    }

    .ui-state-checked {
      border: 1px solid #dad55e;
      background: #fffa90
    }

    .ui-state-highlight a,
    .ui-widget-content .ui-state-highlight a,
    .ui-widget-header .ui-state-highlight a {
      color: #777620
    }

    .ui-state-error,
    .ui-widget-content .ui-state-error,
    .ui-widget-header .ui-state-error {
      border: 1px solid #f1a899;
      background: #fddfdf;
      color: #5f3f3f
    }

    .ui-state-error a,
    .ui-widget-content .ui-state-error a,
    .ui-widget-header .ui-state-error a {
      color: #5f3f3f
    }

    .ui-state-error-text,
    .ui-widget-content .ui-state-error-text,
    .ui-widget-header .ui-state-error-text {
      color: #5f3f3f
    }

    .ui-priority-primary,
    .ui-widget-content .ui-priority-primary,
    .ui-widget-header .ui-priority-primary {
      font-weight: bold
    }

    .ui-priority-secondary,
    .ui-widget-content .ui-priority-secondary,
    .ui-widget-header .ui-priority-secondary {
      opacity: .7;
      filter: Alpha(Opacity=70);
      font-weight: normal
    }

    .ui-state-disabled,
    .ui-widget-content .ui-state-disabled,
    .ui-widget-header .ui-state-disabled {
      opacity: .35;
      filter: Alpha(Opacity=35);
      background-image: none
    }

    .ui-state-disabled .ui-icon {
      filter: Alpha(Opacity=35)
    }

    .ui-icon {
      width: 16px;
      height: 16px
    }

    .ui-icon,
    .ui-widget-content .ui-icon {
      background-image: url('ui-icons_444444_256x240.png')
    }

    .ui-widget-header .ui-icon {
      background-image: url('ui-icons_444444_256x240.png')
    }

    .ui-state-hover .ui-icon,
    .ui-state-focus .ui-icon,
    .ui-button:hover .ui-icon,
    .ui-button:focus .ui-icon {
      background-image: url('ui-icons_555555_256x240.png')
    }

    .ui-state-active .ui-icon,
    .ui-button:active .ui-icon {
      background-image: url('ui-icons_ffffff_256x240.png')
    }

    .ui-state-highlight .ui-icon,
    .ui-button .ui-state-highlight.ui-icon {
      background-image: url('ui-icons_777620_256x240.png')
    }

    .ui-state-error .ui-icon,
    .ui-state-error-text .ui-icon {
      background-image: url('ui-icons_cc0000_256x240.png')
    }

    .ui-button .ui-icon {
      background-image: url('ui-icons_777777_256x240.png')
    }

    .ui-icon-blank {
      background-position: 16px 16px
    }

    .ui-icon-caret-1-n {
      background-position: 0 0
    }

    .ui-icon-caret-1-ne {
      background-position: -16px 0
    }

    .ui-icon-caret-1-e {
      background-position: -32px 0
    }

    .ui-icon-caret-1-se {
      background-position: -48px 0
    }

    .ui-icon-caret-1-s {
      background-position: -65px 0
    }

    .ui-icon-caret-1-sw {
      background-position: -80px 0
    }

    .ui-icon-caret-1-w {
      background-position: -96px 0
    }

    .ui-icon-caret-1-nw {
      background-position: -112px 0
    }

    .ui-icon-caret-2-n-s {
      background-position: -128px 0
    }

    .ui-icon-caret-2-e-w {
      background-position: -144px 0
    }

    .ui-icon-triangle-1-n {
      background-position: 0 -16px
    }

    .ui-icon-triangle-1-ne {
      background-position: -16px -16px
    }

    .ui-icon-triangle-1-e {
      background-position: -32px -16px
    }

    .ui-icon-triangle-1-se {
      background-position: -48px -16px
    }

    .ui-icon-triangle-1-s {
      background-position: -65px -16px
    }

    .ui-icon-triangle-1-sw {
      background-position: -80px -16px
    }

    .ui-icon-triangle-1-w {
      background-position: -96px -16px
    }

    .ui-icon-triangle-1-nw {
      background-position: -112px -16px
    }

    .ui-icon-triangle-2-n-s {
      background-position: -128px -16px
    }

    .ui-icon-triangle-2-e-w {
      background-position: -144px -16px
    }

    .ui-icon-arrow-1-n {
      background-position: 0 -32px
    }

    .ui-icon-arrow-1-ne {
      background-position: -16px -32px
    }

    .ui-icon-arrow-1-e {
      background-position: -32px -32px
    }

    .ui-icon-arrow-1-se {
      background-position: -48px -32px
    }

    .ui-icon-arrow-1-s {
      background-position: -65px -32px
    }

    .ui-icon-arrow-1-sw {
      background-position: -80px -32px
    }

    .ui-icon-arrow-1-w {
      background-position: -96px -32px
    }

    .ui-icon-arrow-1-nw {
      background-position: -112px -32px
    }

    .ui-icon-arrow-2-n-s {
      background-position: -128px -32px
    }

    .ui-icon-arrow-2-ne-sw {
      background-position: -144px -32px
    }

    .ui-icon-arrow-2-e-w {
      background-position: -160px -32px
    }

    .ui-icon-arrow-2-se-nw {
      background-position: -176px -32px
    }

    .ui-icon-arrowstop-1-n {
      background-position: -192px -32px
    }

    .ui-icon-arrowstop-1-e {
      background-position: -208px -32px
    }

    .ui-icon-arrowstop-1-s {
      background-position: -224px -32px
    }

    .ui-icon-arrowstop-1-w {
      background-position: -240px -32px
    }

    .ui-icon-arrowthick-1-n {
      background-position: 1px -48px
    }

    .ui-icon-arrowthick-1-ne {
      background-position: -16px -48px
    }

    .ui-icon-arrowthick-1-e {
      background-position: -32px -48px
    }

    .ui-icon-arrowthick-1-se {
      background-position: -48px -48px
    }

    .ui-icon-arrowthick-1-s {
      background-position: -64px -48px
    }

    .ui-icon-arrowthick-1-sw {
      background-position: -80px -48px
    }

    .ui-icon-arrowthick-1-w {
      background-position: -96px -48px
    }

    .ui-icon-arrowthick-1-nw {
      background-position: -112px -48px
    }

    .ui-icon-arrowthick-2-n-s {
      background-position: -128px -48px
    }

    .ui-icon-arrowthick-2-ne-sw {
      background-position: -144px -48px
    }

    .ui-icon-arrowthick-2-e-w {
      background-position: -160px -48px
    }

    .ui-icon-arrowthick-2-se-nw {
      background-position: -176px -48px
    }

    .ui-icon-arrowthickstop-1-n {
      background-position: -192px -48px
    }

    .ui-icon-arrowthickstop-1-e {
      background-position: -208px -48px
    }

    .ui-icon-arrowthickstop-1-s {
      background-position: -224px -48px
    }

    .ui-icon-arrowthickstop-1-w {
      background-position: -240px -48px
    }

    .ui-icon-arrowreturnthick-1-w {
      background-position: 0 -64px
    }

    .ui-icon-arrowreturnthick-1-n {
      background-position: -16px -64px
    }

    .ui-icon-arrowreturnthick-1-e {
      background-position: -32px -64px
    }

    .ui-icon-arrowreturnthick-1-s {
      background-position: -48px -64px
    }

    .ui-icon-arrowreturn-1-w {
      background-position: -64px -64px
    }

    .ui-icon-arrowreturn-1-n {
      background-position: -80px -64px
    }

    .ui-icon-arrowreturn-1-e {
      background-position: -96px -64px
    }

    .ui-icon-arrowreturn-1-s {
      background-position: -112px -64px
    }

    .ui-icon-arrowrefresh-1-w {
      background-position: -128px -64px
    }

    .ui-icon-arrowrefresh-1-n {
      background-position: -144px -64px
    }

    .ui-icon-arrowrefresh-1-e {
      background-position: -160px -64px
    }

    .ui-icon-arrowrefresh-1-s {
      background-position: -176px -64px
    }

    .ui-icon-arrow-4 {
      background-position: 0 -80px
    }

    .ui-icon-arrow-4-diag {
      background-position: -16px -80px
    }

    .ui-icon-extlink {
      background-position: -32px -80px
    }

    .ui-icon-newwin {
      background-position: -48px -80px
    }

    .ui-icon-refresh {
      background-position: -64px -80px
    }

    .ui-icon-shuffle {
      background-position: -80px -80px
    }

    .ui-icon-transfer-e-w {
      background-position: -96px -80px
    }

    .ui-icon-transferthick-e-w {
      background-position: -112px -80px
    }

    .ui-icon-folder-collapsed {
      background-position: 0 -96px
    }

    .ui-icon-folder-open {
      background-position: -16px -96px
    }

    .ui-icon-document {
      background-position: -32px -96px
    }

    .ui-icon-document-b {
      background-position: -48px -96px
    }

    .ui-icon-note {
      background-position: -64px -96px
    }

    .ui-icon-mail-closed {
      background-position: -80px -96px
    }

    .ui-icon-mail-open {
      background-position: -96px -96px
    }

    .ui-icon-suitcase {
      background-position: -112px -96px
    }

    .ui-icon-comment {
      background-position: -128px -96px
    }

    .ui-icon-person {
      background-position: -144px -96px
    }

    .ui-icon-print {
      background-position: -160px -96px
    }

    .ui-icon-trash {
      background-position: -176px -96px
    }

    .ui-icon-locked {
      background-position: -192px -96px
    }

    .ui-icon-unlocked {
      background-position: -208px -96px
    }

    .ui-icon-bookmark {
      background-position: -224px -96px
    }

    .ui-icon-tag {
      background-position: -240px -96px
    }

    .ui-icon-home {
      background-position: 0 -112px
    }

    .ui-icon-flag {
      background-position: -16px -112px
    }

    .ui-icon-calendar {
      background-position: -32px -112px
    }

    .ui-icon-cart {
      background-position: -48px -112px
    }

    .ui-icon-pencil {
      background-position: -64px -112px
    }

    .ui-icon-clock {
      background-position: -80px -112px
    }

    .ui-icon-disk {
      background-position: -96px -112px
    }

    .ui-icon-calculator {
      background-position: -112px -112px
    }

    .ui-icon-zoomin {
      background-position: -128px -112px
    }

    .ui-icon-zoomout {
      background-position: -144px -112px
    }

    .ui-icon-search {
      background-position: -160px -112px
    }

    .ui-icon-wrench {
      background-position: -176px -112px
    }

    .ui-icon-gear {
      background-position: -192px -112px
    }

    .ui-icon-heart {
      background-position: -208px -112px
    }

    .ui-icon-star {
      background-position: -224px -112px
    }

    .ui-icon-link {
      background-position: -240px -112px
    }

    .ui-icon-cancel {
      background-position: 0 -128px
    }

    .ui-icon-plus {
      background-position: -16px -128px
    }

    .ui-icon-plusthick {
      background-position: -32px -128px
    }

    .ui-icon-minus {
      background-position: -48px -128px
    }

    .ui-icon-minusthick {
      background-position: -64px -128px
    }

    .ui-icon-close {
      background-position: -80px -128px
    }

    .ui-icon-closethick {
      background-position: -96px -128px
    }

    .ui-icon-key {
      background-position: -112px -128px
    }

    .ui-icon-lightbulb {
      background-position: -128px -128px
    }

    .ui-icon-scissors {
      background-position: -144px -128px
    }

    .ui-icon-clipboard {
      background-position: -160px -128px
    }

    .ui-icon-copy {
      background-position: -176px -128px
    }

    .ui-icon-contact {
      background-position: -192px -128px
    }

    .ui-icon-image {
      background-position: -208px -128px
    }

    .ui-icon-video {
      background-position: -224px -128px
    }

    .ui-icon-script {
      background-position: -240px -128px
    }

    .ui-icon-alert {
      background-position: 0 -144px
    }

    .ui-icon-info {
      background-position: -16px -144px
    }

    .ui-icon-notice {
      background-position: -32px -144px
    }

    .ui-icon-help {
      background-position: -48px -144px
    }

    .ui-icon-check {
      background-position: -64px -144px
    }

    .ui-icon-bullet {
      background-position: -80px -144px
    }

    .ui-icon-radio-on {
      background-position: -96px -144px
    }

    .ui-icon-radio-off {
      background-position: -112px -144px
    }

    .ui-icon-pin-w {
      background-position: -128px -144px
    }

    .ui-icon-pin-s {
      background-position: -144px -144px
    }

    .ui-icon-play {
      background-position: 0 -160px
    }

    .ui-icon-pause {
      background-position: -16px -160px
    }

    .ui-icon-seek-next {
      background-position: -32px -160px
    }

    .ui-icon-seek-prev {
      background-position: -48px -160px
    }

    .ui-icon-seek-end {
      background-position: -64px -160px
    }

    .ui-icon-seek-start {
      background-position: -80px -160px
    }

    .ui-icon-seek-first {
      background-position: -80px -160px
    }

    .ui-icon-stop {
      background-position: -96px -160px
    }

    .ui-icon-eject {
      background-position: -112px -160px
    }

    .ui-icon-volume-off {
      background-position: -128px -160px
    }

    .ui-icon-volume-on {
      background-position: -144px -160px
    }

    .ui-icon-power {
      background-position: 0 -176px
    }

    .ui-icon-signal-diag {
      background-position: -16px -176px
    }

    .ui-icon-signal {
      background-position: -32px -176px
    }

    .ui-icon-battery-0 {
      background-position: -48px -176px
    }

    .ui-icon-battery-1 {
      background-position: -64px -176px
    }

    .ui-icon-battery-2 {
      background-position: -80px -176px
    }

    .ui-icon-battery-3 {
      background-position: -96px -176px
    }

    .ui-icon-circle-plus {
      background-position: 0 -192px
    }

    .ui-icon-circle-minus {
      background-position: -16px -192px
    }

    .ui-icon-circle-close {
      background-position: -32px -192px
    }

    .ui-icon-circle-triangle-e {
      background-position: -48px -192px
    }

    .ui-icon-circle-triangle-s {
      background-position: -64px -192px
    }

    .ui-icon-circle-triangle-w {
      background-position: -80px -192px
    }

    .ui-icon-circle-triangle-n {
      background-position: -96px -192px
    }

    .ui-icon-circle-arrow-e {
      background-position: -112px -192px
    }

    .ui-icon-circle-arrow-s {
      background-position: -128px -192px
    }

    .ui-icon-circle-arrow-w {
      background-position: -144px -192px
    }

    .ui-icon-circle-arrow-n {
      background-position: -160px -192px
    }

    .ui-icon-circle-zoomin {
      background-position: -176px -192px
    }

    .ui-icon-circle-zoomout {
      background-position: -192px -192px
    }

    .ui-icon-circle-check {
      background-position: -208px -192px
    }

    .ui-icon-circlesmall-plus {
      background-position: 0 -208px
    }

    .ui-icon-circlesmall-minus {
      background-position: -16px -208px
    }

    .ui-icon-circlesmall-close {
      background-position: -32px -208px
    }

    .ui-icon-squaresmall-plus {
      background-position: -48px -208px
    }

    .ui-icon-squaresmall-minus {
      background-position: -64px -208px
    }

    .ui-icon-squaresmall-close {
      background-position: -80px -208px
    }

    .ui-icon-grip-dotted-vertical {
      background-position: 0 -224px
    }

    .ui-icon-grip-dotted-horizontal {
      background-position: -16px -224px
    }

    .ui-icon-grip-solid-vertical {
      background-position: -32px -224px
    }

    .ui-icon-grip-solid-horizontal {
      background-position: -48px -224px
    }

    .ui-icon-gripsmall-diagonal-se {
      background-position: -64px -224px
    }

    .ui-icon-grip-diagonal-se {
      background-position: -80px -224px
    }

    .ui-corner-all,
    .ui-corner-top,
    .ui-corner-left,
    .ui-corner-tl {
      border-top-left-radius: 3px
    }

    .ui-corner-all,
    .ui-corner-top,
    .ui-corner-right,
    .ui-corner-tr {
      border-top-right-radius: 3px
    }

    .ui-corner-all,
    .ui-corner-bottom,
    .ui-corner-left,
    .ui-corner-bl {
      border-bottom-left-radius: 3px
    }

    .ui-corner-all,
    .ui-corner-bottom,
    .ui-corner-right,
    .ui-corner-br {
      border-bottom-right-radius: 3px
    }

    .ui-widget-overlay {
      background: #aaa;
      opacity: .003;
      filter: Alpha(Opacity=.3)
    }

    .ui-widget-shadow {
      box-shadow: 0 0 5px #666
    }


  </style>
  <style type="text/css">
    /* Slider */
    .slick-slider {
      position: relative;
      display: block;
      box-sizing: border-box;
      -webkit-touch-callout: none;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      touch-action: pan-y;
      -webkit-tap-highlight-color: transparent;
    }

    .slick-list {
      position: relative;
      overflow: hidden;
      display: block;
      margin: 0;
      padding: 0;
    }

    .slick-list:focus {
      outline: none;
    }

    .slick-list.dragging {
      cursor: pointer;
      cursor: hand;
    }

    .slick-slider .slick-track,
    .slick-slider .slick-list {
      transform: translate3d(0, 0, 0);
    }

    .slick-track {
      position: relative;
      left: 0;
      top: 0;
      display: block;
      margin-left: auto;
      margin-right: auto;
    }

    .slick-track:before,
    .slick-track:after {
      content: "";
      display: table;
    }

    .slick-track:after {
      clear: both;
    }

    .slick-loading .slick-track {
      visibility: hidden;
    }

    .slick-slide {
      float: left;
      height: 100%;
      min-height: 1px;
      display: none;
    }

    [dir="rtl"] .slick-slide {
      float: right;
    }

    .slick-slide img {
      display: block;
    }

    .slick-slide.slick-loading img {
      display: none;
    }

    .slick-slide.dragging img {
      pointer-events: none;
    }

    .slick-initialized .slick-slide {
      display: block;
    }

    .slick-loading .slick-slide {
      visibility: hidden;
    }

    .slick-vertical .slick-slide {
      display: block;
      height: auto;
      border: 1px solid transparent;
    }

    .slick-arrow.slick-hidden {
      display: none;
    }

    /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm5vZGVfbW9kdWxlcy9zbGljay1jYXJvdXNlbC9zbGljay9DOlxcU291cmNlXFxWZXJ0aWNhbENsaWVudC9ub2RlX21vZHVsZXNcXHNsaWNrLWNhcm91c2VsXFxzbGlja1xcc2xpY2suc2NzcyIsIm5vZGVfbW9kdWxlcy9zbGljay1jYXJvdXNlbC9zbGljay9zbGljay5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBLFdBQUE7QUFFQTtFQUNJLGtCQUFrQjtFQUNsQixjQUFjO0VBQ2Qsc0JBQXNCO0VBQ3RCLDJCQUEyQjtFQUMzQix5QkFBeUI7RUFFekIsc0JBQXNCO0VBQ3RCLHFCQUFxQjtFQUNyQixpQkFBaUI7RUFFakIsbUJBQW1CO0VBQ25CLHdDQUF3QyxFQUFBO0FBRTVDO0VBQ0ksa0JBQWtCO0VBQ2xCLGdCQUFnQjtFQUNoQixjQUFjO0VBQ2QsU0FBUztFQUNULFVBQVUsRUFBQTtBQUxkO0lBUVEsYUFBYSxFQUFBO0FBUnJCO0lBWVEsZUFBZTtJQUNmLFlBQVksRUFBQTtBQUdwQjs7RUFNSSwrQkFBK0IsRUFBQTtBQUduQztFQUNJLGtCQUFrQjtFQUNsQixPQUFPO0VBQ1AsTUFBTTtFQUNOLGNBQWM7RUFDZCxpQkFBaUI7RUFDakIsa0JBQWtCLEVBQUE7QUFOdEI7SUFVUSxXQUFXO0lBQ1gsY0FBYyxFQUFBO0FBWHRCO0lBZVEsV0FBVyxFQUFBO0FBR2Y7SUFDSSxrQkFBa0IsRUFBQTtBQUcxQjtFQUNJLFdBQVc7RUFDWCxZQUFZO0VBQ1osZUFBZTtFQVdmLGFBQWEsRUFBQTtBQ3RCZjtJRGFNLFlBQVksRUFBQTtBQUxwQjtJQVFRLGNBQWMsRUFBQTtBQVJ0QjtJQVdRLGFBQWEsRUFBQTtBQVhyQjtJQWlCUSxvQkFBb0IsRUFBQTtBQUd4QjtJQUNJLGNBQWMsRUFBQTtBQUdsQjtJQUNJLGtCQUFrQixFQUFBO0FBR3RCO0lBQ0ksY0FBYztJQUNkLFlBQVk7SUFDWiw2QkFBNkIsRUFBQTtBQUdyQztFQUNJLGFBQWEsRUFBQSIsImZpbGUiOiJub2RlX21vZHVsZXMvc2xpY2stY2Fyb3VzZWwvc2xpY2svc2xpY2suc2NzcyIsInNvdXJjZXNDb250ZW50IjpbIi8qIFNsaWRlciAqL1xuXG4uc2xpY2stc2xpZGVyIHtcbiAgICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gICAgZGlzcGxheTogYmxvY2s7XG4gICAgYm94LXNpemluZzogYm9yZGVyLWJveDtcbiAgICAtd2Via2l0LXRvdWNoLWNhbGxvdXQ6IG5vbmU7XG4gICAgLXdlYmtpdC11c2VyLXNlbGVjdDogbm9uZTtcbiAgICAta2h0bWwtdXNlci1zZWxlY3Q6IG5vbmU7XG4gICAgLW1vei11c2VyLXNlbGVjdDogbm9uZTtcbiAgICAtbXMtdXNlci1zZWxlY3Q6IG5vbmU7XG4gICAgdXNlci1zZWxlY3Q6IG5vbmU7XG4gICAgLW1zLXRvdWNoLWFjdGlvbjogcGFuLXk7XG4gICAgdG91Y2gtYWN0aW9uOiBwYW4teTtcbiAgICAtd2Via2l0LXRhcC1oaWdobGlnaHQtY29sb3I6IHRyYW5zcGFyZW50O1xufVxuLnNsaWNrLWxpc3Qge1xuICAgIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgICBvdmVyZmxvdzogaGlkZGVuO1xuICAgIGRpc3BsYXk6IGJsb2NrO1xuICAgIG1hcmdpbjogMDtcbiAgICBwYWRkaW5nOiAwO1xuXG4gICAgJjpmb2N1cyB7XG4gICAgICAgIG91dGxpbmU6IG5vbmU7XG4gICAgfVxuXG4gICAgJi5kcmFnZ2luZyB7XG4gICAgICAgIGN1cnNvcjogcG9pbnRlcjtcbiAgICAgICAgY3Vyc29yOiBoYW5kO1xuICAgIH1cbn1cbi5zbGljay1zbGlkZXIgLnNsaWNrLXRyYWNrLFxuLnNsaWNrLXNsaWRlciAuc2xpY2stbGlzdCB7XG4gICAgLXdlYmtpdC10cmFuc2Zvcm06IHRyYW5zbGF0ZTNkKDAsIDAsIDApO1xuICAgIC1tb3otdHJhbnNmb3JtOiB0cmFuc2xhdGUzZCgwLCAwLCAwKTtcbiAgICAtbXMtdHJhbnNmb3JtOiB0cmFuc2xhdGUzZCgwLCAwLCAwKTtcbiAgICAtby10cmFuc2Zvcm06IHRyYW5zbGF0ZTNkKDAsIDAsIDApO1xuICAgIHRyYW5zZm9ybTogdHJhbnNsYXRlM2QoMCwgMCwgMCk7XG59XG5cbi5zbGljay10cmFjayB7XG4gICAgcG9zaXRpb246IHJlbGF0aXZlO1xuICAgIGxlZnQ6IDA7XG4gICAgdG9wOiAwO1xuICAgIGRpc3BsYXk6IGJsb2NrO1xuICAgIG1hcmdpbi1sZWZ0OiBhdXRvO1xuICAgIG1hcmdpbi1yaWdodDogYXV0bztcblxuICAgICY6YmVmb3JlLFxuICAgICY6YWZ0ZXIge1xuICAgICAgICBjb250ZW50OiBcIlwiO1xuICAgICAgICBkaXNwbGF5OiB0YWJsZTtcbiAgICB9XG5cbiAgICAmOmFmdGVyIHtcbiAgICAgICAgY2xlYXI6IGJvdGg7XG4gICAgfVxuXG4gICAgLnNsaWNrLWxvYWRpbmcgJiB7XG4gICAgICAgIHZpc2liaWxpdHk6IGhpZGRlbjtcbiAgICB9XG59XG4uc2xpY2stc2xpZGUge1xuICAgIGZsb2F0OiBsZWZ0O1xuICAgIGhlaWdodDogMTAwJTtcbiAgICBtaW4taGVpZ2h0OiAxcHg7XG4gICAgW2Rpcj1cInJ0bFwiXSAmIHtcbiAgICAgICAgZmxvYXQ6IHJpZ2h0O1xuICAgIH1cbiAgICBpbWcge1xuICAgICAgICBkaXNwbGF5OiBibG9jaztcbiAgICB9XG4gICAgJi5zbGljay1sb2FkaW5nIGltZyB7XG4gICAgICAgIGRpc3BsYXk6IG5vbmU7XG4gICAgfVxuXG4gICAgZGlzcGxheTogbm9uZTtcblxuICAgICYuZHJhZ2dpbmcgaW1nIHtcbiAgICAgICAgcG9pbnRlci1ldmVudHM6IG5vbmU7XG4gICAgfVxuXG4gICAgLnNsaWNrLWluaXRpYWxpemVkICYge1xuICAgICAgICBkaXNwbGF5OiBibG9jaztcbiAgICB9XG5cbiAgICAuc2xpY2stbG9hZGluZyAmIHtcbiAgICAgICAgdmlzaWJpbGl0eTogaGlkZGVuO1xuICAgIH1cblxuICAgIC5zbGljay12ZXJ0aWNhbCAmIHtcbiAgICAgICAgZGlzcGxheTogYmxvY2s7XG4gICAgICAgIGhlaWdodDogYXV0bztcbiAgICAgICAgYm9yZGVyOiAxcHggc29saWQgdHJhbnNwYXJlbnQ7XG4gICAgfVxufVxuLnNsaWNrLWFycm93LnNsaWNrLWhpZGRlbiB7XG4gICAgZGlzcGxheTogbm9uZTtcbn1cbiIsIi8qIFNsaWRlciAqL1xuLnNsaWNrLXNsaWRlciB7XG4gIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgZGlzcGxheTogYmxvY2s7XG4gIGJveC1zaXppbmc6IGJvcmRlci1ib3g7XG4gIC13ZWJraXQtdG91Y2gtY2FsbG91dDogbm9uZTtcbiAgLXdlYmtpdC11c2VyLXNlbGVjdDogbm9uZTtcbiAgLWtodG1sLXVzZXItc2VsZWN0OiBub25lO1xuICAtbW96LXVzZXItc2VsZWN0OiBub25lO1xuICAtbXMtdXNlci1zZWxlY3Q6IG5vbmU7XG4gIHVzZXItc2VsZWN0OiBub25lO1xuICAtbXMtdG91Y2gtYWN0aW9uOiBwYW4teTtcbiAgdG91Y2gtYWN0aW9uOiBwYW4teTtcbiAgLXdlYmtpdC10YXAtaGlnaGxpZ2h0LWNvbG9yOiB0cmFuc3BhcmVudDsgfVxuXG4uc2xpY2stbGlzdCB7XG4gIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgb3ZlcmZsb3c6IGhpZGRlbjtcbiAgZGlzcGxheTogYmxvY2s7XG4gIG1hcmdpbjogMDtcbiAgcGFkZGluZzogMDsgfVxuICAuc2xpY2stbGlzdDpmb2N1cyB7XG4gICAgb3V0bGluZTogbm9uZTsgfVxuICAuc2xpY2stbGlzdC5kcmFnZ2luZyB7XG4gICAgY3Vyc29yOiBwb2ludGVyO1xuICAgIGN1cnNvcjogaGFuZDsgfVxuXG4uc2xpY2stc2xpZGVyIC5zbGljay10cmFjayxcbi5zbGljay1zbGlkZXIgLnNsaWNrLWxpc3Qge1xuICAtd2Via2l0LXRyYW5zZm9ybTogdHJhbnNsYXRlM2QoMCwgMCwgMCk7XG4gIC1tb3otdHJhbnNmb3JtOiB0cmFuc2xhdGUzZCgwLCAwLCAwKTtcbiAgLW1zLXRyYW5zZm9ybTogdHJhbnNsYXRlM2QoMCwgMCwgMCk7XG4gIC1vLXRyYW5zZm9ybTogdHJhbnNsYXRlM2QoMCwgMCwgMCk7XG4gIHRyYW5zZm9ybTogdHJhbnNsYXRlM2QoMCwgMCwgMCk7IH1cblxuLnNsaWNrLXRyYWNrIHtcbiAgcG9zaXRpb246IHJlbGF0aXZlO1xuICBsZWZ0OiAwO1xuICB0b3A6IDA7XG4gIGRpc3BsYXk6IGJsb2NrO1xuICBtYXJnaW4tbGVmdDogYXV0bztcbiAgbWFyZ2luLXJpZ2h0OiBhdXRvOyB9XG4gIC5zbGljay10cmFjazpiZWZvcmUsIC5zbGljay10cmFjazphZnRlciB7XG4gICAgY29udGVudDogXCJcIjtcbiAgICBkaXNwbGF5OiB0YWJsZTsgfVxuICAuc2xpY2stdHJhY2s6YWZ0ZXIge1xuICAgIGNsZWFyOiBib3RoOyB9XG4gIC5zbGljay1sb2FkaW5nIC5zbGljay10cmFjayB7XG4gICAgdmlzaWJpbGl0eTogaGlkZGVuOyB9XG5cbi5zbGljay1zbGlkZSB7XG4gIGZsb2F0OiBsZWZ0O1xuICBoZWlnaHQ6IDEwMCU7XG4gIG1pbi1oZWlnaHQ6IDFweDtcbiAgZGlzcGxheTogbm9uZTsgfVxuICBbZGlyPVwicnRsXCJdIC5zbGljay1zbGlkZSB7XG4gICAgZmxvYXQ6IHJpZ2h0OyB9XG4gIC5zbGljay1zbGlkZSBpbWcge1xuICAgIGRpc3BsYXk6IGJsb2NrOyB9XG4gIC5zbGljay1zbGlkZS5zbGljay1sb2FkaW5nIGltZyB7XG4gICAgZGlzcGxheTogbm9uZTsgfVxuICAuc2xpY2stc2xpZGUuZHJhZ2dpbmcgaW1nIHtcbiAgICBwb2ludGVyLWV2ZW50czogbm9uZTsgfVxuICAuc2xpY2staW5pdGlhbGl6ZWQgLnNsaWNrLXNsaWRlIHtcbiAgICBkaXNwbGF5OiBibG9jazsgfVxuICAuc2xpY2stbG9hZGluZyAuc2xpY2stc2xpZGUge1xuICAgIHZpc2liaWxpdHk6IGhpZGRlbjsgfVxuICAuc2xpY2stdmVydGljYWwgLnNsaWNrLXNsaWRlIHtcbiAgICBkaXNwbGF5OiBibG9jaztcbiAgICBoZWlnaHQ6IGF1dG87XG4gICAgYm9yZGVyOiAxcHggc29saWQgdHJhbnNwYXJlbnQ7IH1cblxuLnNsaWNrLWFycm93LnNsaWNrLWhpZGRlbiB7XG4gIGRpc3BsYXk6IG5vbmU7IH1cbiJdfQ== */
  </style>
  <style type="text/css">
    @charset "UTF-8";

    /* Slider */
    .slick-loading .slick-list {
      background: #fff url('ajax-loader.gif') center center no-repeat;
    }

    /* Icons */
    @font-face {
      font-family: "slick";
      src: url('slick.eot');
      src: url('slick.eot?#iefix') format("embedded-opentype"), url('slick.woff') format("woff"), url('slick.ttf') format("truetype"), url('slick.svg#slick') format("svg");
      font-weight: normal;
      font-style: normal;
    }

    /* Arrows */
    .slick-prev,
    .slick-next {
      position: absolute;
      display: block;
      height: 20px;
      width: 20px;
      line-height: 0px;
      font-size: 0px;
      cursor: pointer;
      background: transparent;
      color: transparent;
      top: 50%;
      transform: translate(0, -50%);
      padding: 0;
      border: none;
      outline: none;
    }

    .slick-prev:hover,
    .slick-prev:focus,
    .slick-next:hover,
    .slick-next:focus {
      outline: none;
      background: transparent;
      color: transparent;
    }

    .slick-prev:hover:before,
    .slick-prev:focus:before,
    .slick-next:hover:before,
    .slick-next:focus:before {
      opacity: 1;
    }

    .slick-prev.slick-disabled:before,
    .slick-next.slick-disabled:before {
      opacity: 0.25;
    }

    .slick-prev:before,
    .slick-next:before {
      font-family: "slick";
      font-size: 20px;
      line-height: 1;
      color: white;
      opacity: 0.75;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    .slick-prev {
      left: -25px;
    }

    [dir="rtl"] .slick-prev {
      left: auto;
      right: -25px;
    }

    .slick-prev:before {
      content: "←";
    }

    [dir="rtl"] .slick-prev:before {
      content: "→";
    }

    .slick-next {
      right: -25px;
    }

    [dir="rtl"] .slick-next {
      left: -25px;
      right: auto;
    }

    .slick-next:before {
      content: "→";
    }

    [dir="rtl"] .slick-next:before {
      content: "←";
    }

    /* Dots */
    .slick-dotted.slick-slider {
      margin-bottom: 30px;
    }

    .slick-dots {
      position: absolute;
      bottom: -25px;
      list-style: none;
      display: block;
      text-align: center;
      padding: 0;
      margin: 0;
      width: 100%;
    }

    .slick-dots li {
      position: relative;
      display: inline-block;
      height: 20px;
      width: 20px;
      margin: 0 5px;
      padding: 0;
      cursor: pointer;
    }

    .slick-dots li button {
      border: 0;
      background: transparent;
      display: block;
      height: 20px;
      width: 20px;
      outline: none;
      line-height: 0px;
      font-size: 0px;
      color: transparent;
      padding: 5px;
      cursor: pointer;
    }

    .slick-dots li button:hover,
    .slick-dots li button:focus {
      outline: none;
    }

    .slick-dots li button:hover:before,
    .slick-dots li button:focus:before {
      opacity: 1;
    }

    .slick-dots li button:before {
      position: absolute;
      top: 0;
      left: 0;
      content: "•";
      width: 20px;
      height: 20px;
      font-family: "slick";
      font-size: 6px;
      line-height: 20px;
      text-align: center;
      color: black;
      opacity: 0.25;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    .slick-dots li.slick-active button:before {
      color: black;
      opacity: 0.75;
    }

    /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm5vZGVfbW9kdWxlcy9zbGljay1jYXJvdXNlbC9zbGljay9zbGljay10aGVtZS5zY3NzIiwibm9kZV9tb2R1bGVzL3NsaWNrLWNhcm91c2VsL3NsaWNrL0M6XFxTb3VyY2VcXFZlcnRpY2FsQ2xpZW50L25vZGVfbW9kdWxlc1xcc2xpY2stY2Fyb3VzZWxcXHNsaWNrXFxzbGljay10aGVtZS5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBLGdCQUFnQjtBQ3lDaEIsV0FBQTtBQUdJO0VBQ0ksK0RBQTJFLEVBQUE7QUFJbkYsVUFBQTtBQUVJO0VBQ0ksb0JBQW9CO0VBQ3BCLHFCQWhCb0M7RUFpQnBDLHFLQUFpTjtFQUNqTixtQkFBbUI7RUFDbkIsa0JBQWtCLEVBQUE7QUFJMUIsV0FBQTtBQUVBOztFQUVJLGtCQUFrQjtFQUNsQixjQUFjO0VBQ2QsWUFBWTtFQUNaLFdBQVc7RUFDWCxnQkFBZ0I7RUFDaEIsY0FBYztFQUNkLGVBQWU7RUFDZix1QkFBdUI7RUFDdkIsa0JBQWtCO0VBQ2xCLFFBQVE7RUFHUiw2QkFBNkI7RUFDN0IsVUFBVTtFQUNWLFlBQVk7RUFDWixhQUFhLEVBQUE7QUFqQmpCOzs7SUFtQlEsYUFBYTtJQUNiLHVCQUF1QjtJQUN2QixrQkFBa0IsRUFBQTtBQXJCMUI7OztNQXVCWSxVQWpFYyxFQUFBO0FBMEMxQjs7SUEyQlEsYUFwRXVCLEVBQUE7QUF5Qy9COztJQThCUSxvQkFsRm1CO0lBbUZuQixlQUFlO0lBQ2YsY0FBYztJQUNkLFlBbkZpQjtJQW9GakIsYUE3RW9CO0lBOEVwQixtQ0FBbUM7SUFDbkMsa0NBQWtDLEVBQUE7QUFJMUM7RUFDSSxXQUFXLEVBQUE7QUQ5Q2I7SUNnRE0sVUFBVTtJQUNWLFlBQVksRUFBQTtBQUpwQjtJQU9RLFlBOUZlLEVBQU87QUQrQzFCO01DaURRLFlBL0ZXLEVBQU87QUFvRzlCO0VBQ0ksWUFBWSxFQUFBO0FEbERkO0lDb0RNLFdBQVc7SUFDWCxXQUFXLEVBQUE7QUFKbkI7SUFPUSxZQTNHZSxFQUFPO0FEd0QxQjtNQ3FEUSxZQTlHVyxFQUFPO0FBbUg5QixTQUFBO0FBRUE7RUFDSSxtQkFBbUIsRUFBQTtBQUd2QjtFQUNJLGtCQUFrQjtFQUNsQixhQUFhO0VBQ2IsZ0JBQWdCO0VBQ2hCLGNBQWM7RUFDZCxrQkFBa0I7RUFDbEIsVUFBVTtFQUNWLFNBQVM7RUFDVCxXQUFXLEVBQUE7QUFSZjtJQVVRLGtCQUFrQjtJQUNsQixxQkFBcUI7SUFDckIsWUFBWTtJQUNaLFdBQVc7SUFDWCxhQUFhO0lBQ2IsVUFBVTtJQUNWLGVBQWUsRUFBQTtBQWhCdkI7TUFrQlksU0FBUztNQUNULHVCQUF1QjtNQUN2QixjQUFjO01BQ2QsWUFBWTtNQUNaLFdBQVc7TUFDWCxhQUFhO01BQ2IsZ0JBQWdCO01BQ2hCLGNBQWM7TUFDZCxrQkFBa0I7TUFDbEIsWUFBWTtNQUNaLGVBQWUsRUFBQTtBQTVCM0I7UUE4QmdCLGFBQWEsRUFBQTtBQTlCN0I7VUFnQ29CLFVBcEpNLEVBQUE7QUFvSDFCO1FBb0NnQixrQkFBa0I7UUFDbEIsTUFBTTtRQUNOLE9BQU87UUFDUCxZQTlKTTtRQStKTixXQUFXO1FBQ1gsWUFBWTtRQUNaLG9CQXhLVztRQXlLWCxjQWpLSTtRQWtLSixpQkFBaUI7UUFDakIsa0JBQWtCO1FBQ2xCLFlBektPO1FBMEtQLGFBbEtlO1FBbUtmLG1DQUFtQztRQUNuQyxrQ0FBa0MsRUFBQTtBQWpEbEQ7TUFxRFksWUFoTFc7TUFpTFgsYUEzS2dCLEVBQUEiLCJmaWxlIjoibm9kZV9tb2R1bGVzL3NsaWNrLWNhcm91c2VsL3NsaWNrL3NsaWNrLXRoZW1lLnNjc3MiLCJzb3VyY2VzQ29udGVudCI6WyJAY2hhcnNldCBcIlVURi04XCI7XG4vKiBTbGlkZXIgKi9cbi5zbGljay1sb2FkaW5nIC5zbGljay1saXN0IHtcbiAgYmFja2dyb3VuZDogI2ZmZiB1cmwoXCIuL2FqYXgtbG9hZGVyLmdpZlwiKSBjZW50ZXIgY2VudGVyIG5vLXJlcGVhdDsgfVxuXG4vKiBJY29ucyAqL1xuQGZvbnQtZmFjZSB7XG4gIGZvbnQtZmFtaWx5OiBcInNsaWNrXCI7XG4gIHNyYzogdXJsKFwiLi9mb250cy9zbGljay5lb3RcIik7XG4gIHNyYzogdXJsKFwiLi9mb250cy9zbGljay5lb3Q/I2llZml4XCIpIGZvcm1hdChcImVtYmVkZGVkLW9wZW50eXBlXCIpLCB1cmwoXCIuL2ZvbnRzL3NsaWNrLndvZmZcIikgZm9ybWF0KFwid29mZlwiKSwgdXJsKFwiLi9mb250cy9zbGljay50dGZcIikgZm9ybWF0KFwidHJ1ZXR5cGVcIiksIHVybChcIi4vZm9udHMvc2xpY2suc3ZnI3NsaWNrXCIpIGZvcm1hdChcInN2Z1wiKTtcbiAgZm9udC13ZWlnaHQ6IG5vcm1hbDtcbiAgZm9udC1zdHlsZTogbm9ybWFsOyB9XG5cbi8qIEFycm93cyAqL1xuLnNsaWNrLXByZXYsXG4uc2xpY2stbmV4dCB7XG4gIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgZGlzcGxheTogYmxvY2s7XG4gIGhlaWdodDogMjBweDtcbiAgd2lkdGg6IDIwcHg7XG4gIGxpbmUtaGVpZ2h0OiAwcHg7XG4gIGZvbnQtc2l6ZTogMHB4O1xuICBjdXJzb3I6IHBvaW50ZXI7XG4gIGJhY2tncm91bmQ6IHRyYW5zcGFyZW50O1xuICBjb2xvcjogdHJhbnNwYXJlbnQ7XG4gIHRvcDogNTAlO1xuICAtd2Via2l0LXRyYW5zZm9ybTogdHJhbnNsYXRlKDAsIC01MCUpO1xuICAtbXMtdHJhbnNmb3JtOiB0cmFuc2xhdGUoMCwgLTUwJSk7XG4gIHRyYW5zZm9ybTogdHJhbnNsYXRlKDAsIC01MCUpO1xuICBwYWRkaW5nOiAwO1xuICBib3JkZXI6IG5vbmU7XG4gIG91dGxpbmU6IG5vbmU7IH1cbiAgLnNsaWNrLXByZXY6aG92ZXIsIC5zbGljay1wcmV2OmZvY3VzLFxuICAuc2xpY2stbmV4dDpob3ZlcixcbiAgLnNsaWNrLW5leHQ6Zm9jdXMge1xuICAgIG91dGxpbmU6IG5vbmU7XG4gICAgYmFja2dyb3VuZDogdHJhbnNwYXJlbnQ7XG4gICAgY29sb3I6IHRyYW5zcGFyZW50OyB9XG4gICAgLnNsaWNrLXByZXY6aG92ZXI6YmVmb3JlLCAuc2xpY2stcHJldjpmb2N1czpiZWZvcmUsXG4gICAgLnNsaWNrLW5leHQ6aG92ZXI6YmVmb3JlLFxuICAgIC5zbGljay1uZXh0OmZvY3VzOmJlZm9yZSB7XG4gICAgICBvcGFjaXR5OiAxOyB9XG4gIC5zbGljay1wcmV2LnNsaWNrLWRpc2FibGVkOmJlZm9yZSxcbiAgLnNsaWNrLW5leHQuc2xpY2stZGlzYWJsZWQ6YmVmb3JlIHtcbiAgICBvcGFjaXR5OiAwLjI1OyB9XG4gIC5zbGljay1wcmV2OmJlZm9yZSxcbiAgLnNsaWNrLW5leHQ6YmVmb3JlIHtcbiAgICBmb250LWZhbWlseTogXCJzbGlja1wiO1xuICAgIGZvbnQtc2l6ZTogMjBweDtcbiAgICBsaW5lLWhlaWdodDogMTtcbiAgICBjb2xvcjogd2hpdGU7XG4gICAgb3BhY2l0eTogMC43NTtcbiAgICAtd2Via2l0LWZvbnQtc21vb3RoaW5nOiBhbnRpYWxpYXNlZDtcbiAgICAtbW96LW9zeC1mb250LXNtb290aGluZzogZ3JheXNjYWxlOyB9XG5cbi5zbGljay1wcmV2IHtcbiAgbGVmdDogLTI1cHg7IH1cbiAgW2Rpcj1cInJ0bFwiXSAuc2xpY2stcHJldiB7XG4gICAgbGVmdDogYXV0bztcbiAgICByaWdodDogLTI1cHg7IH1cbiAgLnNsaWNrLXByZXY6YmVmb3JlIHtcbiAgICBjb250ZW50OiBcIuKGkFwiOyB9XG4gICAgW2Rpcj1cInJ0bFwiXSAuc2xpY2stcHJldjpiZWZvcmUge1xuICAgICAgY29udGVudDogXCLihpJcIjsgfVxuXG4uc2xpY2stbmV4dCB7XG4gIHJpZ2h0OiAtMjVweDsgfVxuICBbZGlyPVwicnRsXCJdIC5zbGljay1uZXh0IHtcbiAgICBsZWZ0OiAtMjVweDtcbiAgICByaWdodDogYXV0bzsgfVxuICAuc2xpY2stbmV4dDpiZWZvcmUge1xuICAgIGNvbnRlbnQ6IFwi4oaSXCI7IH1cbiAgICBbZGlyPVwicnRsXCJdIC5zbGljay1uZXh0OmJlZm9yZSB7XG4gICAgICBjb250ZW50OiBcIuKGkFwiOyB9XG5cbi8qIERvdHMgKi9cbi5zbGljay1kb3R0ZWQuc2xpY2stc2xpZGVyIHtcbiAgbWFyZ2luLWJvdHRvbTogMzBweDsgfVxuXG4uc2xpY2stZG90cyB7XG4gIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgYm90dG9tOiAtMjVweDtcbiAgbGlzdC1zdHlsZTogbm9uZTtcbiAgZGlzcGxheTogYmxvY2s7XG4gIHRleHQtYWxpZ246IGNlbnRlcjtcbiAgcGFkZGluZzogMDtcbiAgbWFyZ2luOiAwO1xuICB3aWR0aDogMTAwJTsgfVxuICAuc2xpY2stZG90cyBsaSB7XG4gICAgcG9zaXRpb246IHJlbGF0aXZlO1xuICAgIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbiAgICBoZWlnaHQ6IDIwcHg7XG4gICAgd2lkdGg6IDIwcHg7XG4gICAgbWFyZ2luOiAwIDVweDtcbiAgICBwYWRkaW5nOiAwO1xuICAgIGN1cnNvcjogcG9pbnRlcjsgfVxuICAgIC5zbGljay1kb3RzIGxpIGJ1dHRvbiB7XG4gICAgICBib3JkZXI6IDA7XG4gICAgICBiYWNrZ3JvdW5kOiB0cmFuc3BhcmVudDtcbiAgICAgIGRpc3BsYXk6IGJsb2NrO1xuICAgICAgaGVpZ2h0OiAyMHB4O1xuICAgICAgd2lkdGg6IDIwcHg7XG4gICAgICBvdXRsaW5lOiBub25lO1xuICAgICAgbGluZS1oZWlnaHQ6IDBweDtcbiAgICAgIGZvbnQtc2l6ZTogMHB4O1xuICAgICAgY29sb3I6IHRyYW5zcGFyZW50O1xuICAgICAgcGFkZGluZzogNXB4O1xuICAgICAgY3Vyc29yOiBwb2ludGVyOyB9XG4gICAgICAuc2xpY2stZG90cyBsaSBidXR0b246aG92ZXIsIC5zbGljay1kb3RzIGxpIGJ1dHRvbjpmb2N1cyB7XG4gICAgICAgIG91dGxpbmU6IG5vbmU7IH1cbiAgICAgICAgLnNsaWNrLWRvdHMgbGkgYnV0dG9uOmhvdmVyOmJlZm9yZSwgLnNsaWNrLWRvdHMgbGkgYnV0dG9uOmZvY3VzOmJlZm9yZSB7XG4gICAgICAgICAgb3BhY2l0eTogMTsgfVxuICAgICAgLnNsaWNrLWRvdHMgbGkgYnV0dG9uOmJlZm9yZSB7XG4gICAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICAgICAgdG9wOiAwO1xuICAgICAgICBsZWZ0OiAwO1xuICAgICAgICBjb250ZW50OiBcIuKAolwiO1xuICAgICAgICB3aWR0aDogMjBweDtcbiAgICAgICAgaGVpZ2h0OiAyMHB4O1xuICAgICAgICBmb250LWZhbWlseTogXCJzbGlja1wiO1xuICAgICAgICBmb250LXNpemU6IDZweDtcbiAgICAgICAgbGluZS1oZWlnaHQ6IDIwcHg7XG4gICAgICAgIHRleHQtYWxpZ246IGNlbnRlcjtcbiAgICAgICAgY29sb3I6IGJsYWNrO1xuICAgICAgICBvcGFjaXR5OiAwLjI1O1xuICAgICAgICAtd2Via2l0LWZvbnQtc21vb3RoaW5nOiBhbnRpYWxpYXNlZDtcbiAgICAgICAgLW1vei1vc3gtZm9udC1zbW9vdGhpbmc6IGdyYXlzY2FsZTsgfVxuICAgIC5zbGljay1kb3RzIGxpLnNsaWNrLWFjdGl2ZSBidXR0b246YmVmb3JlIHtcbiAgICAgIGNvbG9yOiBibGFjaztcbiAgICAgIG9wYWNpdHk6IDAuNzU7IH1cbiIsIkBjaGFyc2V0IFwiVVRGLThcIjtcblxuLy8gRGVmYXVsdCBWYXJpYWJsZXNcblxuLy8gU2xpY2sgaWNvbiBlbnRpdHkgY29kZXMgb3V0cHV0cyB0aGUgZm9sbG93aW5nXG4vLyBcIlxcMjE5MFwiIG91dHB1dHMgYXNjaWkgY2hhcmFjdGVyIFwi4oaQXCJcbi8vIFwiXFwyMTkyXCIgb3V0cHV0cyBhc2NpaSBjaGFyYWN0ZXIgXCLihpJcIlxuLy8gXCJcXDIwMjJcIiBvdXRwdXRzIGFzY2lpIGNoYXJhY3RlciBcIuKAolwiXG5cbiRzbGljay1mb250LXBhdGg6IFwiLi9mb250cy9cIiAhZGVmYXVsdDtcbiRzbGljay1mb250LWZhbWlseTogXCJzbGlja1wiICFkZWZhdWx0O1xuJHNsaWNrLWxvYWRlci1wYXRoOiBcIi4vXCIgIWRlZmF1bHQ7XG4kc2xpY2stYXJyb3ctY29sb3I6IHdoaXRlICFkZWZhdWx0O1xuJHNsaWNrLWRvdC1jb2xvcjogYmxhY2sgIWRlZmF1bHQ7XG4kc2xpY2stZG90LWNvbG9yLWFjdGl2ZTogJHNsaWNrLWRvdC1jb2xvciAhZGVmYXVsdDtcbiRzbGljay1wcmV2LWNoYXJhY3RlcjogXCJcXDIxOTBcIiAhZGVmYXVsdDtcbiRzbGljay1uZXh0LWNoYXJhY3RlcjogXCJcXDIxOTJcIiAhZGVmYXVsdDtcbiRzbGljay1kb3QtY2hhcmFjdGVyOiBcIlxcMjAyMlwiICFkZWZhdWx0O1xuJHNsaWNrLWRvdC1zaXplOiA2cHggIWRlZmF1bHQ7XG4kc2xpY2stb3BhY2l0eS1kZWZhdWx0OiAwLjc1ICFkZWZhdWx0O1xuJHNsaWNrLW9wYWNpdHktb24taG92ZXI6IDEgIWRlZmF1bHQ7XG4kc2xpY2stb3BhY2l0eS1ub3QtYWN0aXZlOiAwLjI1ICFkZWZhdWx0O1xuXG5AZnVuY3Rpb24gc2xpY2staW1hZ2UtdXJsKCR1cmwpIHtcbiAgICBAaWYgZnVuY3Rpb24tZXhpc3RzKGltYWdlLXVybCkge1xuICAgICAgICBAcmV0dXJuIGltYWdlLXVybCgkdXJsKTtcbiAgICB9XG4gICAgQGVsc2Uge1xuICAgICAgICBAcmV0dXJuIHVybCgkc2xpY2stbG9hZGVyLXBhdGggKyAkdXJsKTtcbiAgICB9XG59XG5cbkBmdW5jdGlvbiBzbGljay1mb250LXVybCgkdXJsKSB7XG4gICAgQGlmIGZ1bmN0aW9uLWV4aXN0cyhmb250LXVybCkge1xuICAgICAgICBAcmV0dXJuIGZvbnQtdXJsKCR1cmwpO1xuICAgIH1cbiAgICBAZWxzZSB7XG4gICAgICAgIEByZXR1cm4gdXJsKCRzbGljay1mb250LXBhdGggKyAkdXJsKTtcbiAgICB9XG59XG5cbi8qIFNsaWRlciAqL1xuXG4uc2xpY2stbGlzdCB7XG4gICAgLnNsaWNrLWxvYWRpbmcgJiB7XG4gICAgICAgIGJhY2tncm91bmQ6ICNmZmYgc2xpY2staW1hZ2UtdXJsKFwiYWpheC1sb2FkZXIuZ2lmXCIpIGNlbnRlciBjZW50ZXIgbm8tcmVwZWF0O1xuICAgIH1cbn1cblxuLyogSWNvbnMgKi9cbkBpZiAkc2xpY2stZm9udC1mYW1pbHkgPT0gXCJzbGlja1wiIHtcbiAgICBAZm9udC1mYWNlIHtcbiAgICAgICAgZm9udC1mYW1pbHk6IFwic2xpY2tcIjtcbiAgICAgICAgc3JjOiBzbGljay1mb250LXVybChcInNsaWNrLmVvdFwiKTtcbiAgICAgICAgc3JjOiBzbGljay1mb250LXVybChcInNsaWNrLmVvdD8jaWVmaXhcIikgZm9ybWF0KFwiZW1iZWRkZWQtb3BlbnR5cGVcIiksIHNsaWNrLWZvbnQtdXJsKFwic2xpY2sud29mZlwiKSBmb3JtYXQoXCJ3b2ZmXCIpLCBzbGljay1mb250LXVybChcInNsaWNrLnR0ZlwiKSBmb3JtYXQoXCJ0cnVldHlwZVwiKSwgc2xpY2stZm9udC11cmwoXCJzbGljay5zdmcjc2xpY2tcIikgZm9ybWF0KFwic3ZnXCIpO1xuICAgICAgICBmb250LXdlaWdodDogbm9ybWFsO1xuICAgICAgICBmb250LXN0eWxlOiBub3JtYWw7XG4gICAgfVxufVxuXG4vKiBBcnJvd3MgKi9cblxuLnNsaWNrLXByZXYsXG4uc2xpY2stbmV4dCB7XG4gICAgcG9zaXRpb246IGFic29sdXRlO1xuICAgIGRpc3BsYXk6IGJsb2NrO1xuICAgIGhlaWdodDogMjBweDtcbiAgICB3aWR0aDogMjBweDtcbiAgICBsaW5lLWhlaWdodDogMHB4O1xuICAgIGZvbnQtc2l6ZTogMHB4O1xuICAgIGN1cnNvcjogcG9pbnRlcjtcbiAgICBiYWNrZ3JvdW5kOiB0cmFuc3BhcmVudDtcbiAgICBjb2xvcjogdHJhbnNwYXJlbnQ7XG4gICAgdG9wOiA1MCU7XG4gICAgLXdlYmtpdC10cmFuc2Zvcm06IHRyYW5zbGF0ZSgwLCAtNTAlKTtcbiAgICAtbXMtdHJhbnNmb3JtOiB0cmFuc2xhdGUoMCwgLTUwJSk7XG4gICAgdHJhbnNmb3JtOiB0cmFuc2xhdGUoMCwgLTUwJSk7XG4gICAgcGFkZGluZzogMDtcbiAgICBib3JkZXI6IG5vbmU7XG4gICAgb3V0bGluZTogbm9uZTtcbiAgICAmOmhvdmVyLCAmOmZvY3VzIHtcbiAgICAgICAgb3V0bGluZTogbm9uZTtcbiAgICAgICAgYmFja2dyb3VuZDogdHJhbnNwYXJlbnQ7XG4gICAgICAgIGNvbG9yOiB0cmFuc3BhcmVudDtcbiAgICAgICAgJjpiZWZvcmUge1xuICAgICAgICAgICAgb3BhY2l0eTogJHNsaWNrLW9wYWNpdHktb24taG92ZXI7XG4gICAgICAgIH1cbiAgICB9XG4gICAgJi5zbGljay1kaXNhYmxlZDpiZWZvcmUge1xuICAgICAgICBvcGFjaXR5OiAkc2xpY2stb3BhY2l0eS1ub3QtYWN0aXZlO1xuICAgIH1cbiAgICAmOmJlZm9yZSB7XG4gICAgICAgIGZvbnQtZmFtaWx5OiAkc2xpY2stZm9udC1mYW1pbHk7XG4gICAgICAgIGZvbnQtc2l6ZTogMjBweDtcbiAgICAgICAgbGluZS1oZWlnaHQ6IDE7XG4gICAgICAgIGNvbG9yOiAkc2xpY2stYXJyb3ctY29sb3I7XG4gICAgICAgIG9wYWNpdHk6ICRzbGljay1vcGFjaXR5LWRlZmF1bHQ7XG4gICAgICAgIC13ZWJraXQtZm9udC1zbW9vdGhpbmc6IGFudGlhbGlhc2VkO1xuICAgICAgICAtbW96LW9zeC1mb250LXNtb290aGluZzogZ3JheXNjYWxlO1xuICAgIH1cbn1cblxuLnNsaWNrLXByZXYge1xuICAgIGxlZnQ6IC0yNXB4O1xuICAgIFtkaXI9XCJydGxcIl0gJiB7XG4gICAgICAgIGxlZnQ6IGF1dG87XG4gICAgICAgIHJpZ2h0OiAtMjVweDtcbiAgICB9XG4gICAgJjpiZWZvcmUge1xuICAgICAgICBjb250ZW50OiAkc2xpY2stcHJldi1jaGFyYWN0ZXI7XG4gICAgICAgIFtkaXI9XCJydGxcIl0gJiB7XG4gICAgICAgICAgICBjb250ZW50OiAkc2xpY2stbmV4dC1jaGFyYWN0ZXI7XG4gICAgICAgIH1cbiAgICB9XG59XG5cbi5zbGljay1uZXh0IHtcbiAgICByaWdodDogLTI1cHg7XG4gICAgW2Rpcj1cInJ0bFwiXSAmIHtcbiAgICAgICAgbGVmdDogLTI1cHg7XG4gICAgICAgIHJpZ2h0OiBhdXRvO1xuICAgIH1cbiAgICAmOmJlZm9yZSB7XG4gICAgICAgIGNvbnRlbnQ6ICRzbGljay1uZXh0LWNoYXJhY3RlcjtcbiAgICAgICAgW2Rpcj1cInJ0bFwiXSAmIHtcbiAgICAgICAgICAgIGNvbnRlbnQ6ICRzbGljay1wcmV2LWNoYXJhY3RlcjtcbiAgICAgICAgfVxuICAgIH1cbn1cblxuLyogRG90cyAqL1xuXG4uc2xpY2stZG90dGVkLnNsaWNrLXNsaWRlciB7XG4gICAgbWFyZ2luLWJvdHRvbTogMzBweDtcbn1cblxuLnNsaWNrLWRvdHMge1xuICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICBib3R0b206IC0yNXB4O1xuICAgIGxpc3Qtc3R5bGU6IG5vbmU7XG4gICAgZGlzcGxheTogYmxvY2s7XG4gICAgdGV4dC1hbGlnbjogY2VudGVyO1xuICAgIHBhZGRpbmc6IDA7XG4gICAgbWFyZ2luOiAwO1xuICAgIHdpZHRoOiAxMDAlO1xuICAgIGxpIHtcbiAgICAgICAgcG9zaXRpb246IHJlbGF0aXZlO1xuICAgICAgICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XG4gICAgICAgIGhlaWdodDogMjBweDtcbiAgICAgICAgd2lkdGg6IDIwcHg7XG4gICAgICAgIG1hcmdpbjogMCA1cHg7XG4gICAgICAgIHBhZGRpbmc6IDA7XG4gICAgICAgIGN1cnNvcjogcG9pbnRlcjtcbiAgICAgICAgYnV0dG9uIHtcbiAgICAgICAgICAgIGJvcmRlcjogMDtcbiAgICAgICAgICAgIGJhY2tncm91bmQ6IHRyYW5zcGFyZW50O1xuICAgICAgICAgICAgZGlzcGxheTogYmxvY2s7XG4gICAgICAgICAgICBoZWlnaHQ6IDIwcHg7XG4gICAgICAgICAgICB3aWR0aDogMjBweDtcbiAgICAgICAgICAgIG91dGxpbmU6IG5vbmU7XG4gICAgICAgICAgICBsaW5lLWhlaWdodDogMHB4O1xuICAgICAgICAgICAgZm9udC1zaXplOiAwcHg7XG4gICAgICAgICAgICBjb2xvcjogdHJhbnNwYXJlbnQ7XG4gICAgICAgICAgICBwYWRkaW5nOiA1cHg7XG4gICAgICAgICAgICBjdXJzb3I6IHBvaW50ZXI7XG4gICAgICAgICAgICAmOmhvdmVyLCAmOmZvY3VzIHtcbiAgICAgICAgICAgICAgICBvdXRsaW5lOiBub25lO1xuICAgICAgICAgICAgICAgICY6YmVmb3JlIHtcbiAgICAgICAgICAgICAgICAgICAgb3BhY2l0eTogJHNsaWNrLW9wYWNpdHktb24taG92ZXI7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfVxuICAgICAgICAgICAgJjpiZWZvcmUge1xuICAgICAgICAgICAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICAgICAgICAgICAgICB0b3A6IDA7XG4gICAgICAgICAgICAgICAgbGVmdDogMDtcbiAgICAgICAgICAgICAgICBjb250ZW50OiAkc2xpY2stZG90LWNoYXJhY3RlcjtcbiAgICAgICAgICAgICAgICB3aWR0aDogMjBweDtcbiAgICAgICAgICAgICAgICBoZWlnaHQ6IDIwcHg7XG4gICAgICAgICAgICAgICAgZm9udC1mYW1pbHk6ICRzbGljay1mb250LWZhbWlseTtcbiAgICAgICAgICAgICAgICBmb250LXNpemU6ICRzbGljay1kb3Qtc2l6ZTtcbiAgICAgICAgICAgICAgICBsaW5lLWhlaWdodDogMjBweDtcbiAgICAgICAgICAgICAgICB0ZXh0LWFsaWduOiBjZW50ZXI7XG4gICAgICAgICAgICAgICAgY29sb3I6ICRzbGljay1kb3QtY29sb3I7XG4gICAgICAgICAgICAgICAgb3BhY2l0eTogJHNsaWNrLW9wYWNpdHktbm90LWFjdGl2ZTtcbiAgICAgICAgICAgICAgICAtd2Via2l0LWZvbnQtc21vb3RoaW5nOiBhbnRpYWxpYXNlZDtcbiAgICAgICAgICAgICAgICAtbW96LW9zeC1mb250LXNtb290aGluZzogZ3JheXNjYWxlO1xuICAgICAgICAgICAgfVxuICAgICAgICB9XG4gICAgICAgICYuc2xpY2stYWN0aXZlIGJ1dHRvbjpiZWZvcmUge1xuICAgICAgICAgICAgY29sb3I6ICRzbGljay1kb3QtY29sb3ItYWN0aXZlO1xuICAgICAgICAgICAgb3BhY2l0eTogJHNsaWNrLW9wYWNpdHktZGVmYXVsdDtcbiAgICAgICAgfVxuICAgIH1cbn1cbiJdfQ== */
  </style>
  <style type="text/css">
    /*!
 * Bootstrap v4.4.1 (https://getbootstrap.com/)
 * Copyright 2011-2019 The Bootstrap Authors
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
    :root {
      --blue: #007bff;
      --indigo: #6610f2;
      --purple: #6f42c1;
      --pink: #e83e8c;
      --red: #dc3545;
      --orange: #fd7e14;
      --yellow: #ffc107;
      --green: #28a745;
      --teal: #20c997;
      --cyan: #17a2b8;
      --white: #fff;
      --gray: #6c757d;
      --gray-dark: #343a40;
      --primary: #007bff;
      --secondary: #6c757d;
      --success: #28a745;
      --info: #17a2b8;
      --warning: #ffc107;
      --danger: #dc3545;
      --light: #f8f9fa;
      --dark: #343a40;
      --breakpoint-xs: 0;
      --breakpoint-sm: 576px;
      --breakpoint-md: 768px;
      --breakpoint-lg: 992px;
      --breakpoint-xl: 1200px;
      --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
    }

    *,
    *::before,
    *::after {
      box-sizing: border-box;
    }

    html {
      font-family: sans-serif;
      line-height: 1.15;
      -webkit-text-size-adjust: 100%;
      -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    article,
    aside,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    main,
    nav,
    section {
      display: block;
    }

    body {
      margin: 0;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: #212529;
      text-align: left;
      background-color: #fff;
    }

    [tabindex="-1"]:focus:not(:focus-visible) {
      outline: 0 !important;
    }

    hr {
      box-sizing: content-box;
      height: 0;
      overflow: visible;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      margin-top: 0;
      margin-bottom: 0.5rem;
    }

    p {
      margin-top: 0;
      margin-bottom: 1rem;
    }

    abbr[title],
    abbr[data-original-title] {
      text-decoration: underline;
      -webkit-text-decoration: underline dotted;
      text-decoration: underline dotted;
      cursor: help;
      border-bottom: 0;
      -webkit-text-decoration-skip-ink: none;
      text-decoration-skip-ink: none;
    }

    address {
      margin-bottom: 1rem;
      font-style: normal;
      line-height: inherit;
    }

    ol,
    ul,
    dl {
      margin-top: 0;
      margin-bottom: 1rem;
    }

    ol ol,
    ul ul,
    ol ul,
    ul ol {
      margin-bottom: 0;
    }

    dt {
      font-weight: 700;
    }

    dd {
      margin-bottom: .5rem;
      margin-left: 0;
    }

    blockquote {
      margin: 0 0 1rem;
    }

    b,
    strong {
      font-weight: bolder;
    }

    small {
      font-size: 80%;
    }

    sub,
    sup {
      position: relative;
      font-size: 75%;
      line-height: 0;
      vertical-align: baseline;
    }

    sub {
      bottom: -.25em;
    }

    sup {
      top: -.5em;
    }

    a {
      color: #007bff;
      text-decoration: none;
      background-color: transparent;
    }

    a:hover {
      color: #0056b3;
      text-decoration: underline;
    }

    a:not([href]) {
      color: inherit;
      text-decoration: none;
    }

    a:not([href]):hover {
      color: inherit;
      text-decoration: none;
    }

    pre,
    code,
    kbd,
    samp {
      font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
      font-size: 1em;
    }

    pre {
      margin-top: 0;
      margin-bottom: 1rem;
      overflow: auto;
    }

    figure {
      margin: 0 0 1rem;
    }

    img {
      vertical-align: middle;
      border-style: none;
    }

    svg {
      overflow: hidden;
      vertical-align: middle;
    }

    table {
      border-collapse: collapse;
    }

    caption {
      padding-top: 0.75rem;
      padding-bottom: 0.75rem;
      color: #6c757d;
      text-align: left;
      caption-side: bottom;
    }

    th {
      text-align: inherit;
    }

    label {
      display: inline-block;
      margin-bottom: 0.5rem;
    }

    button {
      border-radius: 0;
    }

    button:focus {
      outline: 1px dotted;
      outline: 5px auto -webkit-focus-ring-color;
    }

    input,
    button,
    select,
    optgroup,
    textarea {
      margin: 0;
      font-family: inherit;
      font-size: inherit;
      line-height: inherit;
    }

    button,
    input {
      overflow: visible;
    }

    button,
    select {
      text-transform: none;
    }

    select {
      word-wrap: normal;
    }

    button,
    [type="button"],
    [type="reset"],
    [type="submit"] {
      -webkit-appearance: button;
    }

    button:not(:disabled),
    [type="button"]:not(:disabled),
    [type="reset"]:not(:disabled),
    [type="submit"]:not(:disabled) {
      cursor: pointer;
    }

    button::-moz-focus-inner,
    [type="button"]::-moz-focus-inner,
    [type="reset"]::-moz-focus-inner,
    [type="submit"]::-moz-focus-inner {
      padding: 0;
      border-style: none;
    }

    input[type="radio"],
    input[type="checkbox"] {
      box-sizing: border-box;
      padding: 0;
    }

    input[type="date"],
    input[type="time"],
    input[type="datetime-local"],
    input[type="month"] {
      -webkit-appearance: listbox;
    }

    textarea {
      overflow: auto;
      resize: vertical;
    }

    fieldset {
      min-width: 0;
      padding: 0;
      margin: 0;
      border: 0;
    }

    legend {
      display: block;
      width: 100%;
      max-width: 100%;
      padding: 0;
      margin-bottom: .5rem;
      font-size: 1.5rem;
      line-height: inherit;
      color: inherit;
      white-space: normal;
    }

    progress {
      vertical-align: baseline;
    }

    [type="number"]::-webkit-inner-spin-button,
    [type="number"]::-webkit-outer-spin-button {
      height: auto;
    }

    [type="search"] {
      outline-offset: -2px;
      -webkit-appearance: none;
    }

    [type="search"]::-webkit-search-decoration {
      -webkit-appearance: none;
    }

    ::-webkit-file-upload-button {
      font: inherit;
      -webkit-appearance: button;
    }

    output {
      display: inline-block;
    }

    summary {
      display: list-item;
      cursor: pointer;
    }

    template {
      display: none;
    }

    [hidden] {
      display: none !important;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6 {
      margin-bottom: 0.5rem;
      font-weight: 500;
      line-height: 1.2;
    }

    h1,
    .h1 {
      font-size: 2.5rem;
    }

    h2,
    .h2 {
      font-size: 2rem;
    }

    h3,
    .h3 {
      font-size: 1.75rem;
    }

    h4,
    .h4 {
      font-size: 1.5rem;
    }

    h5,
    .h5 {
      font-size: 1.25rem;
    }

    h6,
    .h6 {
      font-size: 1rem;
    }

    .lead {
      font-size: 1.25rem;
      font-weight: 300;
    }

    .display-1 {
      font-size: 6rem;
      font-weight: 300;
      line-height: 1.2;
    }

    .display-2 {
      font-size: 5.5rem;
      font-weight: 300;
      line-height: 1.2;
    }

    .display-3 {
      font-size: 4.5rem;
      font-weight: 300;
      line-height: 1.2;
    }

    .display-4 {
      font-size: 3.5rem;
      font-weight: 300;
      line-height: 1.2;
    }

    hr {
      margin-top: 1rem;
      margin-bottom: 1rem;
      border: 0;
      border-top: 1px solid rgba(0, 0, 0, 0.1);
    }

    small,
    .small {
      font-size: 80%;
      font-weight: 400;
    }

    mark,
    .mark {
      padding: 0.2em;
      background-color: #fcf8e3;
    }

    .list-unstyled {
      padding-left: 0;
      list-style: none;
    }

    .list-inline {
      padding-left: 0;
      list-style: none;
    }

    .list-inline-item {
      display: inline-block;
    }

    .list-inline-item:not(:last-child) {
      margin-right: 0.5rem;
    }

    .initialism {
      font-size: 90%;
      text-transform: uppercase;
    }

    .blockquote {
      margin-bottom: 1rem;
      font-size: 1.25rem;
    }

    .blockquote-footer {
      display: block;
      font-size: 80%;
      color: #6c757d;
    }

    .blockquote-footer::before {
      content: "\2014\00A0";
    }

    .img-fluid {
      max-width: 100%;
      height: auto;
    }

    .img-thumbnail {
      padding: 0.25rem;
      background-color: #fff;
      border: 1px solid #dee2e6;
      border-radius: 0.25rem;
      max-width: 100%;
      height: auto;
    }

    .figure {
      display: inline-block;
    }

    .figure-img {
      margin-bottom: 0.5rem;
      line-height: 1;
    }

    .figure-caption {
      font-size: 90%;
      color: #6c757d;
    }

    code {
      font-size: 87.5%;
      color: #e83e8c;
      word-wrap: break-word;
    }

    a>code {
      color: inherit;
    }

    kbd {
      padding: 0.2rem 0.4rem;
      font-size: 87.5%;
      color: #fff;
      background-color: #212529;
      border-radius: 0.2rem;
    }

    kbd kbd {
      padding: 0;
      font-size: 100%;
      font-weight: 700;
    }

    pre {
      display: block;
      font-size: 87.5%;
      color: #212529;
    }

    pre code {
      font-size: inherit;
      color: inherit;
      word-break: normal;
    }

    .pre-scrollable {
      max-height: 340px;
      overflow-y: scroll;
    }

    .container {
      width: 100%;
      padding-right: 15px;
      padding-left: 15px;
      margin-right: auto;
      margin-left: auto;
    }

    @media (min-width: 576px) {
      .container {
        max-width: 540px;
      }
    }

    @media (min-width: 768px) {
      .container {
        max-width: 720px;
      }
    }

    @media (min-width: 992px) {
      .container {
        max-width: 960px;
      }
    }

    @media (min-width: 1200px) {
      .container {
        max-width: 1140px;
      }
    }

    .container-fluid,
    .container-sm,
    .container-md,
    .container-lg,
    .container-xl {
      width: 100%;
      padding-right: 15px;
      padding-left: 15px;
      margin-right: auto;
      margin-left: auto;
    }

    @media (min-width: 576px) {

      .container,
      .container-sm {
        max-width: 540px;
      }
    }

    @media (min-width: 768px) {

      .container,
      .container-sm,
      .container-md {
        max-width: 720px;
      }
    }

    @media (min-width: 992px) {

      .container,
      .container-sm,
      .container-md,
      .container-lg {
        max-width: 960px;
      }
    }

    @media (min-width: 1200px) {

      .container,
      .container-sm,
      .container-md,
      .container-lg,
      .container-xl {
        max-width: 1140px;
      }
    }

    .row {
      display: flex;
      flex-wrap: wrap;
      margin-right: -15px;
      margin-left: -15px;
    }

    .no-gutters {
      margin-right: 0;
      margin-left: 0;
    }

    .no-gutters>.col,
    .no-gutters>[class*="col-"] {
      padding-right: 0;
      padding-left: 0;
    }

    .col-1,
    .col-2,
    .col-3,
    .col-4,
    .col-5,
    .col-6,
    .col-7,
    .col-8,
    .col-9,
    .col-10,
    .col-11,
    .col-12,
    .col,
    .col-auto,
    .col-sm-1,
    .col-sm-2,
    .col-sm-3,
    .col-sm-4,
    .col-sm-5,
    .col-sm-6,
    .col-sm-7,
    .col-sm-8,
    .col-sm-9,
    .col-sm-10,
    .col-sm-11,
    .col-sm-12,
    .col-sm,
    .col-sm-auto,
    .col-md-1,
    .col-md-2,
    .col-md-3,
    .col-md-4,
    .col-md-5,
    .col-md-6,
    .col-md-7,
    .col-md-8,
    .col-md-9,
    .col-md-10,
    .col-md-11,
    .col-md-12,
    .col-md,
    .col-md-auto,
    .col-lg-1,
    .col-lg-2,
    .col-lg-3,
    .col-lg-4,
    .col-lg-5,
    .col-lg-6,
    .col-lg-7,
    .col-lg-8,
    .col-lg-9,
    .col-lg-10,
    .col-lg-11,
    .col-lg-12,
    .col-lg,
    .col-lg-auto,
    .col-xl-1,
    .col-xl-2,
    .col-xl-3,
    .col-xl-4,
    .col-xl-5,
    .col-xl-6,
    .col-xl-7,
    .col-xl-8,
    .col-xl-9,
    .col-xl-10,
    .col-xl-11,
    .col-xl-12,
    .col-xl,
    .col-xl-auto {
      position: relative;
      width: 100%;
      padding-right: 15px;
      padding-left: 15px;
    }

    .col {
      flex-basis: 0;
      flex-grow: 1;
      max-width: 100%;
    }

    .row-cols-1>* {
      flex: 0 0 100%;
      max-width: 100%;
    }

    .row-cols-2>* {
      flex: 0 0 50%;
      max-width: 50%;
    }

    .row-cols-3>* {
      flex: 0 0 33.333333%;
      max-width: 33.333333%;
    }

    .row-cols-4>* {
      flex: 0 0 25%;
      max-width: 25%;
    }

    .row-cols-5>* {
      flex: 0 0 20%;
      max-width: 20%;
    }

    .row-cols-6>* {
      flex: 0 0 16.666667%;
      max-width: 16.666667%;
    }

    .col-auto {
      flex: 0 0 auto;
      width: auto;
      max-width: 100%;
    }

    .col-1 {
      flex: 0 0 8.333333%;
      max-width: 8.333333%;
    }

    .col-2 {
      flex: 0 0 16.666667%;
      max-width: 16.666667%;
    }

    .col-3 {
      flex: 0 0 25%;
      max-width: 25%;
    }

    .col-4 {
      flex: 0 0 33.333333%;
      max-width: 33.333333%;
    }

    .col-5 {
      flex: 0 0 41.666667%;
      max-width: 41.666667%;
    }

    .col-6 {
      flex: 0 0 50%;
      max-width: 50%;
    }

    .col-7 {
      flex: 0 0 58.333333%;
      max-width: 58.333333%;
    }

    .col-8 {
      flex: 0 0 66.666667%;
      max-width: 66.666667%;
    }

    .col-9 {
      flex: 0 0 75%;
      max-width: 75%;
    }

    .col-10 {
      flex: 0 0 83.333333%;
      max-width: 83.333333%;
    }

    .col-11 {
      flex: 0 0 91.666667%;
      max-width: 91.666667%;
    }

    .col-12 {
      flex: 0 0 100%;
      max-width: 100%;
    }

    .order-first {
      order: -1;
    }

    .order-last {
      order: 13;
    }

    .order-0 {
      order: 0;
    }

    .order-1 {
      order: 1;
    }

    .order-2 {
      order: 2;
    }

    .order-3 {
      order: 3;
    }

    .order-4 {
      order: 4;
    }

    .order-5 {
      order: 5;
    }

    .order-6 {
      order: 6;
    }

    .order-7 {
      order: 7;
    }

    .order-8 {
      order: 8;
    }

    .order-9 {
      order: 9;
    }

    .order-10 {
      order: 10;
    }

    .order-11 {
      order: 11;
    }

    .order-12 {
      order: 12;
    }

    .offset-1 {
      margin-left: 8.333333%;
    }

    .offset-2 {
      margin-left: 16.666667%;
    }

    .offset-3 {
      margin-left: 25%;
    }

    .offset-4 {
      margin-left: 33.333333%;
    }

    .offset-5 {
      margin-left: 41.666667%;
    }

    .offset-6 {
      margin-left: 50%;
    }

    .offset-7 {
      margin-left: 58.333333%;
    }

    .offset-8 {
      margin-left: 66.666667%;
    }

    .offset-9 {
      margin-left: 75%;
    }

    .offset-10 {
      margin-left: 83.333333%;
    }

    .offset-11 {
      margin-left: 91.666667%;
    }

    @media (min-width: 576px) {
      .col-sm {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%;
      }

      .row-cols-sm-1>* {
        flex: 0 0 100%;
        max-width: 100%;
      }

      .row-cols-sm-2>* {
        flex: 0 0 50%;
        max-width: 50%;
      }

      .row-cols-sm-3>* {
        flex: 0 0 33.333333%;
        max-width: 33.333333%;
      }

      .row-cols-sm-4>* {
        flex: 0 0 25%;
        max-width: 25%;
      }

      .row-cols-sm-5>* {
        flex: 0 0 20%;
        max-width: 20%;
      }

      .row-cols-sm-6>* {
        flex: 0 0 16.666667%;
        max-width: 16.666667%;
      }

      .col-sm-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%;
      }

      .col-sm-1 {
        flex: 0 0 8.333333%;
        max-width: 8.333333%;
      }

      .col-sm-2 {
        flex: 0 0 16.666667%;
        max-width: 16.666667%;
      }

      .col-sm-3 {
        flex: 0 0 25%;
        max-width: 25%;
      }

      .col-sm-4 {
        flex: 0 0 33.333333%;
        max-width: 33.333333%;
      }

      .col-sm-5 {
        flex: 0 0 41.666667%;
        max-width: 41.666667%;
      }

      .col-sm-6 {
        flex: 0 0 50%;
        max-width: 50%;
      }

      .col-sm-7 {
        flex: 0 0 58.333333%;
        max-width: 58.333333%;
      }

      .col-sm-8 {
        flex: 0 0 66.666667%;
        max-width: 66.666667%;
      }

      .col-sm-9 {
        flex: 0 0 75%;
        max-width: 75%;
      }

      .col-sm-10 {
        flex: 0 0 83.333333%;
        max-width: 83.333333%;
      }

      .col-sm-11 {
        flex: 0 0 91.666667%;
        max-width: 91.666667%;
      }

      .col-sm-12 {
        flex: 0 0 100%;
        max-width: 100%;
      }

      .order-sm-first {
        order: -1;
      }

      .order-sm-last {
        order: 13;
      }

      .order-sm-0 {
        order: 0;
      }

      .order-sm-1 {
        order: 1;
      }

      .order-sm-2 {
        order: 2;
      }

      .order-sm-3 {
        order: 3;
      }

      .order-sm-4 {
        order: 4;
      }

      .order-sm-5 {
        order: 5;
      }

      .order-sm-6 {
        order: 6;
      }

      .order-sm-7 {
        order: 7;
      }

      .order-sm-8 {
        order: 8;
      }

      .order-sm-9 {
        order: 9;
      }

      .order-sm-10 {
        order: 10;
      }

      .order-sm-11 {
        order: 11;
      }

      .order-sm-12 {
        order: 12;
      }

      .offset-sm-0 {
        margin-left: 0;
      }

      .offset-sm-1 {
        margin-left: 8.333333%;
      }

      .offset-sm-2 {
        margin-left: 16.666667%;
      }

      .offset-sm-3 {
        margin-left: 25%;
      }

      .offset-sm-4 {
        margin-left: 33.333333%;
      }

      .offset-sm-5 {
        margin-left: 41.666667%;
      }

      .offset-sm-6 {
        margin-left: 50%;
      }

      .offset-sm-7 {
        margin-left: 58.333333%;
      }

      .offset-sm-8 {
        margin-left: 66.666667%;
      }

      .offset-sm-9 {
        margin-left: 75%;
      }

      .offset-sm-10 {
        margin-left: 83.333333%;
      }

      .offset-sm-11 {
        margin-left: 91.666667%;
      }
    }

    @media (min-width: 768px) {
      .col-md {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%;
      }

      .row-cols-md-1>* {
        flex: 0 0 100%;
        max-width: 100%;
      }

      .row-cols-md-2>* {
        flex: 0 0 50%;
        max-width: 50%;
      }

      .row-cols-md-3>* {
        flex: 0 0 33.333333%;
        max-width: 33.333333%;
      }

      .row-cols-md-4>* {
        flex: 0 0 25%;
        max-width: 25%;
      }

      .row-cols-md-5>* {
        flex: 0 0 20%;
        max-width: 20%;
      }

      .row-cols-md-6>* {
        flex: 0 0 16.666667%;
        max-width: 16.666667%;
      }

      .col-md-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%;
      }

      .col-md-1 {
        flex: 0 0 8.333333%;
        max-width: 8.333333%;
      }

      .col-md-2 {
        flex: 0 0 16.666667%;
        max-width: 16.666667%;
      }

      .col-md-3 {
        flex: 0 0 25%;
        max-width: 25%;
      }

      .col-md-4 {
        flex: 0 0 33.333333%;
        max-width: 33.333333%;
      }

      .col-md-5 {
        flex: 0 0 41.666667%;
        max-width: 41.666667%;
      }

      .col-md-6 {
        flex: 0 0 50%;
        max-width: 50%;
      }

      .col-md-7 {
        flex: 0 0 58.333333%;
        max-width: 58.333333%;
      }

      .col-md-8 {
        flex: 0 0 66.666667%;
        max-width: 66.666667%;
      }

      .col-md-9 {
        flex: 0 0 75%;
        max-width: 75%;
      }

      .col-md-10 {
        flex: 0 0 83.333333%;
        max-width: 83.333333%;
      }

      .col-md-11 {
        flex: 0 0 91.666667%;
        max-width: 91.666667%;
      }

      .col-md-12 {
        flex: 0 0 100%;
        max-width: 100%;
      }

      .order-md-first {
        order: -1;
      }

      .order-md-last {
        order: 13;
      }

      .order-md-0 {
        order: 0;
      }

      .order-md-1 {
        order: 1;
      }

      .order-md-2 {
        order: 2;
      }

      .order-md-3 {
        order: 3;
      }

      .order-md-4 {
        order: 4;
      }

      .order-md-5 {
        order: 5;
      }

      .order-md-6 {
        order: 6;
      }

      .order-md-7 {
        order: 7;
      }

      .order-md-8 {
        order: 8;
      }

      .order-md-9 {
        order: 9;
      }

      .order-md-10 {
        order: 10;
      }

      .order-md-11 {
        order: 11;
      }

      .order-md-12 {
        order: 12;
      }

      .offset-md-0 {
        margin-left: 0;
      }

      .offset-md-1 {
        margin-left: 8.333333%;
      }

      .offset-md-2 {
        margin-left: 16.666667%;
      }

      .offset-md-3 {
        margin-left: 25%;
      }

      .offset-md-4 {
        margin-left: 33.333333%;
      }

      .offset-md-5 {
        margin-left: 41.666667%;
      }

      .offset-md-6 {
        margin-left: 50%;
      }

      .offset-md-7 {
        margin-left: 58.333333%;
      }

      .offset-md-8 {
        margin-left: 66.666667%;
      }

      .offset-md-9 {
        margin-left: 75%;
      }

      .offset-md-10 {
        margin-left: 83.333333%;
      }

      .offset-md-11 {
        margin-left: 91.666667%;
      }
    }

    @media (min-width: 992px) {
      .col-lg {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%;
      }

      .row-cols-lg-1>* {
        flex: 0 0 100%;
        max-width: 100%;
      }

      .row-cols-lg-2>* {
        flex: 0 0 50%;
        max-width: 50%;
      }

      .row-cols-lg-3>* {
        flex: 0 0 33.333333%;
        max-width: 33.333333%;
      }

      .row-cols-lg-4>* {
        flex: 0 0 25%;
        max-width: 25%;
      }

      .row-cols-lg-5>* {
        flex: 0 0 20%;
        max-width: 20%;
      }

      .row-cols-lg-6>* {
        flex: 0 0 16.666667%;
        max-width: 16.666667%;
      }

      .col-lg-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%;
      }

      .col-lg-1 {
        flex: 0 0 8.333333%;
        max-width: 8.333333%;
      }

      .col-lg-2 {
        flex: 0 0 16.666667%;
        max-width: 16.666667%;
      }

      .col-lg-3 {
        flex: 0 0 25%;
        max-width: 25%;
      }

      .col-lg-4 {
        flex: 0 0 33.333333%;
        max-width: 33.333333%;
      }

      .col-lg-5 {
        flex: 0 0 41.666667%;
        max-width: 41.666667%;
      }

      .col-lg-6 {
        flex: 0 0 50%;
        max-width: 50%;
      }

      .col-lg-7 {
        flex: 0 0 58.333333%;
        max-width: 58.333333%;
      }

      .col-lg-8 {
        flex: 0 0 66.666667%;
        max-width: 66.666667%;
      }

      .col-lg-9 {
        flex: 0 0 75%;
        max-width: 75%;
      }

      .col-lg-10 {
        flex: 0 0 83.333333%;
        max-width: 83.333333%;
      }

      .col-lg-11 {
        flex: 0 0 91.666667%;
        max-width: 91.666667%;
      }

      .col-lg-12 {
        flex: 0 0 100%;
        max-width: 100%;
      }

      .order-lg-first {
        order: -1;
      }

      .order-lg-last {
        order: 13;
      }

      .order-lg-0 {
        order: 0;
      }

      .order-lg-1 {
        order: 1;
      }

      .order-lg-2 {
        order: 2;
      }

      .order-lg-3 {
        order: 3;
      }

      .order-lg-4 {
        order: 4;
      }

      .order-lg-5 {
        order: 5;
      }

      .order-lg-6 {
        order: 6;
      }

      .order-lg-7 {
        order: 7;
      }

      .order-lg-8 {
        order: 8;
      }

      .order-lg-9 {
        order: 9;
      }

      .order-lg-10 {
        order: 10;
      }

      .order-lg-11 {
        order: 11;
      }

      .order-lg-12 {
        order: 12;
      }

      .offset-lg-0 {
        margin-left: 0;
      }

      .offset-lg-1 {
        margin-left: 8.333333%;
      }

      .offset-lg-2 {
        margin-left: 16.666667%;
      }

      .offset-lg-3 {
        margin-left: 25%;
      }

      .offset-lg-4 {
        margin-left: 33.333333%;
      }

      .offset-lg-5 {
        margin-left: 41.666667%;
      }

      .offset-lg-6 {
        margin-left: 50%;
      }

      .offset-lg-7 {
        margin-left: 58.333333%;
      }

      .offset-lg-8 {
        margin-left: 66.666667%;
      }

      .offset-lg-9 {
        margin-left: 75%;
      }

      .offset-lg-10 {
        margin-left: 83.333333%;
      }

      .offset-lg-11 {
        margin-left: 91.666667%;
      }
    }

    @media (min-width: 1200px) {
      .col-xl {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%;
      }

      .row-cols-xl-1>* {
        flex: 0 0 100%;
        max-width: 100%;
      }

      .row-cols-xl-2>* {
        flex: 0 0 50%;
        max-width: 50%;
      }

      .row-cols-xl-3>* {
        flex: 0 0 33.333333%;
        max-width: 33.333333%;
      }

      .row-cols-xl-4>* {
        flex: 0 0 25%;
        max-width: 25%;
      }

      .row-cols-xl-5>* {
        flex: 0 0 20%;
        max-width: 20%;
      }

      .row-cols-xl-6>* {
        flex: 0 0 16.666667%;
        max-width: 16.666667%;
      }

      .col-xl-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%;
      }

      .col-xl-1 {
        flex: 0 0 8.333333%;
        max-width: 8.333333%;
      }

      .col-xl-2 {
        flex: 0 0 16.666667%;
        max-width: 16.666667%;
      }

      .col-xl-3 {
        flex: 0 0 25%;
        max-width: 25%;
      }

      .col-xl-4 {
        flex: 0 0 33.333333%;
        max-width: 33.333333%;
      }

      .col-xl-5 {
        flex: 0 0 41.666667%;
        max-width: 41.666667%;
      }

      .col-xl-6 {
        flex: 0 0 50%;
        max-width: 50%;
      }

      .col-xl-7 {
        flex: 0 0 58.333333%;
        max-width: 58.333333%;
      }

      .col-xl-8 {
        flex: 0 0 66.666667%;
        max-width: 66.666667%;
      }

      .col-xl-9 {
        flex: 0 0 75%;
        max-width: 75%;
      }

      .col-xl-10 {
        flex: 0 0 83.333333%;
        max-width: 83.333333%;
      }

      .col-xl-11 {
        flex: 0 0 91.666667%;
        max-width: 91.666667%;
      }

      .col-xl-12 {
        flex: 0 0 100%;
        max-width: 100%;
      }

      .order-xl-first {
        order: -1;
      }

      .order-xl-last {
        order: 13;
      }

      .order-xl-0 {
        order: 0;
      }

      .order-xl-1 {
        order: 1;
      }

      .order-xl-2 {
        order: 2;
      }

      .order-xl-3 {
        order: 3;
      }

      .order-xl-4 {
        order: 4;
      }

      .order-xl-5 {
        order: 5;
      }

      .order-xl-6 {
        order: 6;
      }

      .order-xl-7 {
        order: 7;
      }

      .order-xl-8 {
        order: 8;
      }

      .order-xl-9 {
        order: 9;
      }

      .order-xl-10 {
        order: 10;
      }

      .order-xl-11 {
        order: 11;
      }

      .order-xl-12 {
        order: 12;
      }

      .offset-xl-0 {
        margin-left: 0;
      }

      .offset-xl-1 {
        margin-left: 8.333333%;
      }

      .offset-xl-2 {
        margin-left: 16.666667%;
      }

      .offset-xl-3 {
        margin-left: 25%;
      }

      .offset-xl-4 {
        margin-left: 33.333333%;
      }

      .offset-xl-5 {
        margin-left: 41.666667%;
      }

      .offset-xl-6 {
        margin-left: 50%;
      }

      .offset-xl-7 {
        margin-left: 58.333333%;
      }

      .offset-xl-8 {
        margin-left: 66.666667%;
      }

      .offset-xl-9 {
        margin-left: 75%;
      }

      .offset-xl-10 {
        margin-left: 83.333333%;
      }

      .offset-xl-11 {
        margin-left: 91.666667%;
      }
    }

    .table {
      width: 100%;
      margin-bottom: 1rem;
      color: #212529;
    }

    .table th,
    .table td {
      padding: 0.75rem;
      vertical-align: top;
      border-top: 1px solid #dee2e6;
    }

    .table thead th {
      vertical-align: bottom;
      border-bottom: 2px solid #dee2e6;
    }

    .table tbody+tbody {
      border-top: 2px solid #dee2e6;
    }

    .table-sm th,
    .table-sm td {
      padding: 0.3rem;
    }

    .table-bordered {
      border: 1px solid #dee2e6;
    }

    .table-bordered th,
    .table-bordered td {
      border: 1px solid #dee2e6;
    }

    .table-bordered thead th,
    .table-bordered thead td {
      border-bottom-width: 2px;
    }

    .table-borderless th,
    .table-borderless td,
    .table-borderless thead th,
    .table-borderless tbody+tbody {
      border: 0;
    }

    .table-striped tbody tr:nth-of-type(odd) {
      background-color: rgba(0, 0, 0, 0.05);
    }

    .table-hover tbody tr:hover {
      color: #212529;
      background-color: rgba(0, 0, 0, 0.075);
    }

    .table-primary,
    .table-primary>th,
    .table-primary>td {
      background-color: #b8daff;
    }

    .table-primary th,
    .table-primary td,
    .table-primary thead th,
    .table-primary tbody+tbody {
      border-color: #7abaff;
    }

    .table-hover .table-primary:hover {
      background-color: #9fcdff;
    }

    .table-hover .table-primary:hover>td,
    .table-hover .table-primary:hover>th {
      background-color: #9fcdff;
    }

    .table-secondary,
    .table-secondary>th,
    .table-secondary>td {
      background-color: #d6d8db;
    }

    .table-secondary th,
    .table-secondary td,
    .table-secondary thead th,
    .table-secondary tbody+tbody {
      border-color: #b3b7bb;
    }

    .table-hover .table-secondary:hover {
      background-color: #c8cbcf;
    }

    .table-hover .table-secondary:hover>td,
    .table-hover .table-secondary:hover>th {
      background-color: #c8cbcf;
    }

    .table-success,
    .table-success>th,
    .table-success>td {
      background-color: #c3e6cb;
    }

    .table-success th,
    .table-success td,
    .table-success thead th,
    .table-success tbody+tbody {
      border-color: #8fd19e;
    }

    .table-hover .table-success:hover {
      background-color: #b1dfbb;
    }

    .table-hover .table-success:hover>td,
    .table-hover .table-success:hover>th {
      background-color: #b1dfbb;
    }

    .table-info,
    .table-info>th,
    .table-info>td {
      background-color: #bee5eb;
    }

    .table-info th,
    .table-info td,
    .table-info thead th,
    .table-info tbody+tbody {
      border-color: #86cfda;
    }

    .table-hover .table-info:hover {
      background-color: #abdde5;
    }

    .table-hover .table-info:hover>td,
    .table-hover .table-info:hover>th {
      background-color: #abdde5;
    }

    .table-warning,
    .table-warning>th,
    .table-warning>td {
      background-color: #ffeeba;
    }

    .table-warning th,
    .table-warning td,
    .table-warning thead th,
    .table-warning tbody+tbody {
      border-color: #ffdf7e;
    }

    .table-hover .table-warning:hover {
      background-color: #ffe8a1;
    }

    .table-hover .table-warning:hover>td,
    .table-hover .table-warning:hover>th {
      background-color: #ffe8a1;
    }

    .table-danger,
    .table-danger>th,
    .table-danger>td {
      background-color: #f5c6cb;
    }

    .table-danger th,
    .table-danger td,
    .table-danger thead th,
    .table-danger tbody+tbody {
      border-color: #ed969e;
    }

    .table-hover .table-danger:hover {
      background-color: #f1b0b7;
    }

    .table-hover .table-danger:hover>td,
    .table-hover .table-danger:hover>th {
      background-color: #f1b0b7;
    }

    .table-light,
    .table-light>th,
    .table-light>td {
      background-color: #fdfdfe;
    }

    .table-light th,
    .table-light td,
    .table-light thead th,
    .table-light tbody+tbody {
      border-color: #fbfcfc;
    }

    .table-hover .table-light:hover {
      background-color: #ececf6;
    }

    .table-hover .table-light:hover>td,
    .table-hover .table-light:hover>th {
      background-color: #ececf6;
    }

    .table-dark,
    .table-dark>th,
    .table-dark>td {
      background-color: #c6c8ca;
    }

    .table-dark th,
    .table-dark td,
    .table-dark thead th,
    .table-dark tbody+tbody {
      border-color: #95999c;
    }

    .table-hover .table-dark:hover {
      background-color: #b9bbbe;
    }

    .table-hover .table-dark:hover>td,
    .table-hover .table-dark:hover>th {
      background-color: #b9bbbe;
    }

    .table-active,
    .table-active>th,
    .table-active>td {
      background-color: rgba(0, 0, 0, 0.075);
    }

    .table-hover .table-active:hover {
      background-color: rgba(0, 0, 0, 0.075);
    }

    .table-hover .table-active:hover>td,
    .table-hover .table-active:hover>th {
      background-color: rgba(0, 0, 0, 0.075);
    }

    .table .thead-dark th {
      color: #fff;
      background-color: #343a40;
      border-color: #454d55;
    }

    .table .thead-light th {
      color: #495057;
      background-color: #e9ecef;
      border-color: #dee2e6;
    }

    .table-dark {
      color: #fff;
      background-color: #343a40;
    }

    .table-dark th,
    .table-dark td,
    .table-dark thead th {
      border-color: #454d55;
    }

    .table-dark.table-bordered {
      border: 0;
    }

    .table-dark.table-striped tbody tr:nth-of-type(odd) {
      background-color: rgba(255, 255, 255, 0.05);
    }

    .table-dark.table-hover tbody tr:hover {
      color: #fff;
      background-color: rgba(255, 255, 255, 0.075);
    }

    @media (max-width: 575.98px) {
      .table-responsive-sm {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
      }

      .table-responsive-sm>.table-bordered {
        border: 0;
      }
    }

    @media (max-width: 767.98px) {
      .table-responsive-md {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
      }

      .table-responsive-md>.table-bordered {
        border: 0;
      }
    }

    @media (max-width: 991.98px) {
      .table-responsive-lg {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
      }

      .table-responsive-lg>.table-bordered {
        border: 0;
      }
    }

    @media (max-width: 1199.98px) {
      .table-responsive-xl {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
      }

      .table-responsive-xl>.table-bordered {
        border: 0;
      }
    }

    .table-responsive {
      display: block;
      width: 100%;
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
    }

    .table-responsive>.table-bordered {
      border: 0;
    }

    .form-control {
      display: block;
      width: 100%;
      height: calc(1.5em + 0.75rem + 2px);
      padding: 0.375rem 0.75rem;
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: #495057;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid #ced4da;
      border-radius: 0.25rem;
      transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
      .form-control {
        transition: none;
      }
    }

    .form-control::-ms-expand {
      background-color: transparent;
      border: 0;
    }

    .form-control:-moz-focusring {
      color: transparent;
      text-shadow: 0 0 0 #495057;
    }

    .form-control:focus {
      color: #495057;
      background-color: #fff;
      border-color: #80bdff;
      outline: 0;
      box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .form-control::-webkit-input-placeholder {
      color: #6c757d;
      opacity: 1;
    }

    .form-control::-moz-placeholder {
      color: #6c757d;
      opacity: 1;
    }

    .form-control:-ms-input-placeholder {
      color: #6c757d;
      opacity: 1;
    }

    .form-control::-ms-input-placeholder {
      color: #6c757d;
      opacity: 1;
    }

    .form-control::placeholder {
      color: #6c757d;
      opacity: 1;
    }

    .form-control:disabled,
    .form-control[readonly] {
      background-color: #e9ecef;
      opacity: 1;
    }

    select.form-control:focus::-ms-value {
      color: #495057;
      background-color: #fff;
    }

    .form-control-file,
    .form-control-range {
      display: block;
      width: 100%;
    }

    .col-form-label {
      padding-top: calc(0.375rem + 1px);
      padding-bottom: calc(0.375rem + 1px);
      margin-bottom: 0;
      font-size: inherit;
      line-height: 1.5;
    }

    .col-form-label-lg {
      padding-top: calc(0.5rem + 1px);
      padding-bottom: calc(0.5rem + 1px);
      font-size: 1.25rem;
      line-height: 1.5;
    }

    .col-form-label-sm {
      padding-top: calc(0.25rem + 1px);
      padding-bottom: calc(0.25rem + 1px);
      font-size: 0.875rem;
      line-height: 1.5;
    }

    .form-control-plaintext {
      display: block;
      width: 100%;
      padding: 0.375rem 0;
      margin-bottom: 0;
      font-size: 1rem;
      line-height: 1.5;
      color: #212529;
      background-color: transparent;
      border: solid transparent;
      border-width: 1px 0;
    }

    .form-control-plaintext.form-control-sm,
    .form-control-plaintext.form-control-lg {
      padding-right: 0;
      padding-left: 0;
    }

    .form-control-sm {
      height: calc(1.5em + 0.5rem + 2px);
      padding: 0.25rem 0.5rem;
      font-size: 0.875rem;
      line-height: 1.5;
      border-radius: 0.2rem;
    }

    .form-control-lg {
      height: calc(1.5em + 1rem + 2px);
      padding: 0.5rem 1rem;
      font-size: 1.25rem;
      line-height: 1.5;
      border-radius: 0.3rem;
    }

    select.form-control[size],
    select.form-control[multiple] {
      height: auto;
    }

    textarea.form-control {
      height: auto;
    }

    .form-group {
      margin-bottom: 1rem;
    }

    .form-text {
      display: block;
      margin-top: 0.25rem;
    }

    .form-row {
      display: flex;
      flex-wrap: wrap;
      margin-right: -5px;
      margin-left: -5px;
    }

    .form-row>.col,
    .form-row>[class*="col-"] {
      padding-right: 5px;
      padding-left: 5px;
    }

    .form-check {
      position: relative;
      display: block;
      padding-left: 1.25rem;
    }

    .form-check-input {
      position: absolute;
      margin-top: 0.3rem;
      margin-left: -1.25rem;
    }

    .form-check-input[disabled]~.form-check-label,
    .form-check-input:disabled~.form-check-label {
      color: #6c757d;
    }

    .form-check-label {
      margin-bottom: 0;
    }

    .form-check-inline {
      display: inline-flex;
      align-items: center;
      padding-left: 0;
      margin-right: 0.75rem;
    }

    .form-check-inline .form-check-input {
      position: static;
      margin-top: 0;
      margin-right: 0.3125rem;
      margin-left: 0;
    }

    .valid-feedback {
      display: none;
      width: 100%;
      margin-top: 0.25rem;
      font-size: 80%;
      color: #28a745;
    }

    .valid-tooltip {
      position: absolute;
      top: 100%;
      z-index: 5;
      display: none;
      max-width: 100%;
      padding: 0.25rem 0.5rem;
      margin-top: .1rem;
      font-size: 0.875rem;
      line-height: 1.5;
      color: #fff;
      background-color: rgba(40, 167, 69, 0.9);
      border-radius: 0.25rem;
    }

    .was-validated :valid~.valid-feedback,
    .was-validated :valid~.valid-tooltip,
    .is-valid~.valid-feedback,
    .is-valid~.valid-tooltip {
      display: block;
    }

    .was-validated .form-control:valid,
    .form-control.is-valid {
      border-color: #28a745;
      padding-right: calc(1.5em + 0.75rem);
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
      background-repeat: no-repeat;
      background-position: right calc(0.375em + 0.1875rem) center;
      background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
    }

    .was-validated .form-control:valid:focus,
    .form-control.is-valid:focus {
      border-color: #28a745;
      box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
    }

    .was-validated textarea.form-control:valid,
    textarea.form-control.is-valid {
      padding-right: calc(1.5em + 0.75rem);
      background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
    }

    .was-validated .custom-select:valid,
    .custom-select.is-valid {
      border-color: #28a745;
      padding-right: calc(0.75em + 2.3125rem);
      background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e") #fff no-repeat center right 1.75rem/calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
    }

    .was-validated .custom-select:valid:focus,
    .custom-select.is-valid:focus {
      border-color: #28a745;
      box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
    }

    .was-validated .form-check-input:valid~.form-check-label,
    .form-check-input.is-valid~.form-check-label {
      color: #28a745;
    }

    .was-validated .form-check-input:valid~.valid-feedback,
    .was-validated .form-check-input:valid~.valid-tooltip,
    .form-check-input.is-valid~.valid-feedback,
    .form-check-input.is-valid~.valid-tooltip {
      display: block;
    }

    .was-validated .custom-control-input:valid~.custom-control-label,
    .custom-control-input.is-valid~.custom-control-label {
      color: #28a745;
    }

    .was-validated .custom-control-input:valid~.custom-control-label::before,
    .custom-control-input.is-valid~.custom-control-label::before {
      border-color: #28a745;
    }

    .was-validated .custom-control-input:valid:checked~.custom-control-label::before,
    .custom-control-input.is-valid:checked~.custom-control-label::before {
      border-color: #34ce57;
      background-color: #34ce57;
    }

    .was-validated .custom-control-input:valid:focus~.custom-control-label::before,
    .custom-control-input.is-valid:focus~.custom-control-label::before {
      box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
    }

    .was-validated .custom-control-input:valid:focus:not(:checked)~.custom-control-label::before,
    .custom-control-input.is-valid:focus:not(:checked)~.custom-control-label::before {
      border-color: #28a745;
    }

    .was-validated .custom-file-input:valid~.custom-file-label,
    .custom-file-input.is-valid~.custom-file-label {
      border-color: #28a745;
    }

    .was-validated .custom-file-input:valid:focus~.custom-file-label,
    .custom-file-input.is-valid:focus~.custom-file-label {
      border-color: #28a745;
      box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
    }

    .invalid-feedback {
      display: none;
      width: 100%;
      margin-top: 0.25rem;
      font-size: 80%;
      color: #dc3545;
    }

    .invalid-tooltip {
      position: absolute;
      top: 100%;
      z-index: 5;
      display: none;
      max-width: 100%;
      padding: 0.25rem 0.5rem;
      margin-top: .1rem;
      font-size: 0.875rem;
      line-height: 1.5;
      color: #fff;
      background-color: rgba(220, 53, 69, 0.9);
      border-radius: 0.25rem;
    }

    .was-validated :invalid~.invalid-feedback,
    .was-validated :invalid~.invalid-tooltip,
    .is-invalid~.invalid-feedback,
    .is-invalid~.invalid-tooltip {
      display: block;
    }

    .was-validated .form-control:invalid,
    .form-control.is-invalid {
      border-color: #dc3545;
      padding-right: calc(1.5em + 0.75rem);
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
      background-repeat: no-repeat;
      background-position: right calc(0.375em + 0.1875rem) center;
      background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
    }

    .was-validated .form-control:invalid:focus,
    .form-control.is-invalid:focus {
      border-color: #dc3545;
      box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
    }

    .was-validated textarea.form-control:invalid,
    textarea.form-control.is-invalid {
      padding-right: calc(1.5em + 0.75rem);
      background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
    }

    .was-validated .custom-select:invalid,
    .custom-select.is-invalid {
      border-color: #dc3545;
      padding-right: calc(0.75em + 2.3125rem);
      background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e") #fff no-repeat center right 1.75rem/calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
    }

    .was-validated .custom-select:invalid:focus,
    .custom-select.is-invalid:focus {
      border-color: #dc3545;
      box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
    }

    .was-validated .form-check-input:invalid~.form-check-label,
    .form-check-input.is-invalid~.form-check-label {
      color: #dc3545;
    }

    .was-validated .form-check-input:invalid~.invalid-feedback,
    .was-validated .form-check-input:invalid~.invalid-tooltip,
    .form-check-input.is-invalid~.invalid-feedback,
    .form-check-input.is-invalid~.invalid-tooltip {
      display: block;
    }

    .was-validated .custom-control-input:invalid~.custom-control-label,
    .custom-control-input.is-invalid~.custom-control-label {
      color: #dc3545;
    }

    .was-validated .custom-control-input:invalid~.custom-control-label::before,
    .custom-control-input.is-invalid~.custom-control-label::before {
      border-color: #dc3545;
    }

    .was-validated .custom-control-input:invalid:checked~.custom-control-label::before,
    .custom-control-input.is-invalid:checked~.custom-control-label::before {
      border-color: #e4606d;
      background-color: #e4606d;
    }

    .was-validated .custom-control-input:invalid:focus~.custom-control-label::before,
    .custom-control-input.is-invalid:focus~.custom-control-label::before {
      box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
    }

    .was-validated .custom-control-input:invalid:focus:not(:checked)~.custom-control-label::before,
    .custom-control-input.is-invalid:focus:not(:checked)~.custom-control-label::before {
      border-color: #dc3545;
    }

    .was-validated .custom-file-input:invalid~.custom-file-label,
    .custom-file-input.is-invalid~.custom-file-label {
      border-color: #dc3545;
    }

    .was-validated .custom-file-input:invalid:focus~.custom-file-label,
    .custom-file-input.is-invalid:focus~.custom-file-label {
      border-color: #dc3545;
      box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
    }

    .form-inline {
      display: flex;
      flex-flow: row wrap;
      align-items: center;
    }

    .form-inline .form-check {
      width: 100%;
    }

    @media (min-width: 576px) {
      .form-inline label {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 0;
      }

      .form-inline .form-group {
        display: flex;
        flex: 0 0 auto;
        flex-flow: row wrap;
        align-items: center;
        margin-bottom: 0;
      }

      .form-inline .form-control {
        display: inline-block;
        width: auto;
        vertical-align: middle;
      }

      .form-inline .form-control-plaintext {
        display: inline-block;
      }

      .form-inline .input-group,
      .form-inline .custom-select {
        width: auto;
      }

      .form-inline .form-check {
        display: flex;
        align-items: center;
        justify-content: center;
        width: auto;
        padding-left: 0;
      }

      .form-inline .form-check-input {
        position: relative;
        flex-shrink: 0;
        margin-top: 0;
        margin-right: 0.25rem;
        margin-left: 0;
      }

      .form-inline .custom-control {
        align-items: center;
        justify-content: center;
      }

      .form-inline .custom-control-label {
        margin-bottom: 0;
      }
    }

    .btn {
      display: inline-block;
      font-weight: 400;
      color: #212529;
      text-align: center;
      vertical-align: middle;
      cursor: pointer;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      background-color: transparent;
      border: 1px solid transparent;
      padding: 0.375rem 0.75rem;
      font-size: 1rem;
      line-height: 1.5;
      border-radius: 0.25rem;
      transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
      .btn {
        transition: none;
      }
    }

    .btn:hover {
      color: #212529;
      text-decoration: none;
    }

    .btn:focus,
    .btn.focus {
      outline: 0;
      box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .btn.disabled,
    .btn:disabled {
      opacity: 0.65;
    }

    a.btn.disabled,
    fieldset:disabled a.btn {
      pointer-events: none;
    }

    .btn-primary {
      color: #fff;
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-primary:hover {
      color: #fff;
      background-color: #0069d9;
      border-color: #0062cc;
    }

    .btn-primary:focus,
    .btn-primary.focus {
      color: #fff;
      background-color: #0069d9;
      border-color: #0062cc;
      box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
    }

    .btn-primary.disabled,
    .btn-primary:disabled {
      color: #fff;
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-primary:not(:disabled):not(.disabled):active,
    .btn-primary:not(:disabled):not(.disabled).active,
    .show>.btn-primary.dropdown-toggle {
      color: #fff;
      background-color: #0062cc;
      border-color: #005cbf;
    }

    .btn-primary:not(:disabled):not(.disabled):active:focus,
    .btn-primary:not(:disabled):not(.disabled).active:focus,
    .show>.btn-primary.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
    }

    .btn-secondary {
      color: #fff;
      background-color: #6c757d;
      border-color: #6c757d;
    }

    .btn-secondary:hover {
      color: #fff;
      background-color: #5a6268;
      border-color: #545b62;
    }

    .btn-secondary:focus,
    .btn-secondary.focus {
      color: #fff;
      background-color: #5a6268;
      border-color: #545b62;
      box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5);
    }

    .btn-secondary.disabled,
    .btn-secondary:disabled {
      color: #fff;
      background-color: #6c757d;
      border-color: #6c757d;
    }

    .btn-secondary:not(:disabled):not(.disabled):active,
    .btn-secondary:not(:disabled):not(.disabled).active,
    .show>.btn-secondary.dropdown-toggle {
      color: #fff;
      background-color: #545b62;
      border-color: #4e555b;
    }

    .btn-secondary:not(:disabled):not(.disabled):active:focus,
    .btn-secondary:not(:disabled):not(.disabled).active:focus,
    .show>.btn-secondary.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5);
    }

    .btn-success {
      color: #fff;
      background-color: #28a745;
      border-color: #28a745;
    }

    .btn-success:hover {
      color: #fff;
      background-color: #218838;
      border-color: #1e7e34;
    }

    .btn-success:focus,
    .btn-success.focus {
      color: #fff;
      background-color: #218838;
      border-color: #1e7e34;
      box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5);
    }

    .btn-success.disabled,
    .btn-success:disabled {
      color: #fff;
      background-color: #28a745;
      border-color: #28a745;
    }

    .btn-success:not(:disabled):not(.disabled):active,
    .btn-success:not(:disabled):not(.disabled).active,
    .show>.btn-success.dropdown-toggle {
      color: #fff;
      background-color: #1e7e34;
      border-color: #1c7430;
    }

    .btn-success:not(:disabled):not(.disabled):active:focus,
    .btn-success:not(:disabled):not(.disabled).active:focus,
    .show>.btn-success.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5);
    }

    .btn-info {
      color: #fff;
      background-color: #17a2b8;
      border-color: #17a2b8;
    }

    .btn-info:hover {
      color: #fff;
      background-color: #138496;
      border-color: #117a8b;
    }

    .btn-info:focus,
    .btn-info.focus {
      color: #fff;
      background-color: #138496;
      border-color: #117a8b;
      box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5);
    }

    .btn-info.disabled,
    .btn-info:disabled {
      color: #fff;
      background-color: #17a2b8;
      border-color: #17a2b8;
    }

    .btn-info:not(:disabled):not(.disabled):active,
    .btn-info:not(:disabled):not(.disabled).active,
    .show>.btn-info.dropdown-toggle {
      color: #fff;
      background-color: #117a8b;
      border-color: #10707f;
    }

    .btn-info:not(:disabled):not(.disabled):active:focus,
    .btn-info:not(:disabled):not(.disabled).active:focus,
    .show>.btn-info.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5);
    }

    .btn-warning {
      color: #212529;
      background-color: #ffc107;
      border-color: #ffc107;
    }

    .btn-warning:hover {
      color: #212529;
      background-color: #e0a800;
      border-color: #d39e00;
    }

    .btn-warning:focus,
    .btn-warning.focus {
      color: #212529;
      background-color: #e0a800;
      border-color: #d39e00;
      box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5);
    }

    .btn-warning.disabled,
    .btn-warning:disabled {
      color: #212529;
      background-color: #ffc107;
      border-color: #ffc107;
    }

    .btn-warning:not(:disabled):not(.disabled):active,
    .btn-warning:not(:disabled):not(.disabled).active,
    .show>.btn-warning.dropdown-toggle {
      color: #212529;
      background-color: #d39e00;
      border-color: #c69500;
    }

    .btn-warning:not(:disabled):not(.disabled):active:focus,
    .btn-warning:not(:disabled):not(.disabled).active:focus,
    .show>.btn-warning.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5);
    }

    .btn-danger {
      color: #fff;
      background-color: #dc3545;
      border-color: #dc3545;
    }

    .btn-danger:hover {
      color: #fff;
      background-color: #c82333;
      border-color: #bd2130;
    }

    .btn-danger:focus,
    .btn-danger.focus {
      color: #fff;
      background-color: #c82333;
      border-color: #bd2130;
      box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5);
    }

    .btn-danger.disabled,
    .btn-danger:disabled {
      color: #fff;
      background-color: #dc3545;
      border-color: #dc3545;
    }

    .btn-danger:not(:disabled):not(.disabled):active,
    .btn-danger:not(:disabled):not(.disabled).active,
    .show>.btn-danger.dropdown-toggle {
      color: #fff;
      background-color: #bd2130;
      border-color: #b21f2d;
    }

    .btn-danger:not(:disabled):not(.disabled):active:focus,
    .btn-danger:not(:disabled):not(.disabled).active:focus,
    .show>.btn-danger.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5);
    }

    .btn-light {
      color: #212529;
      background-color: #f8f9fa;
      border-color: #f8f9fa;
    }

    .btn-light:hover {
      color: #212529;
      background-color: #e2e6ea;
      border-color: #dae0e5;
    }

    .btn-light:focus,
    .btn-light.focus {
      color: #212529;
      background-color: #e2e6ea;
      border-color: #dae0e5;
      box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5);
    }

    .btn-light.disabled,
    .btn-light:disabled {
      color: #212529;
      background-color: #f8f9fa;
      border-color: #f8f9fa;
    }

    .btn-light:not(:disabled):not(.disabled):active,
    .btn-light:not(:disabled):not(.disabled).active,
    .show>.btn-light.dropdown-toggle {
      color: #212529;
      background-color: #dae0e5;
      border-color: #d3d9df;
    }

    .btn-light:not(:disabled):not(.disabled):active:focus,
    .btn-light:not(:disabled):not(.disabled).active:focus,
    .show>.btn-light.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5);
    }

    .btn-dark {
      color: #fff;
      background-color: #343a40;
      border-color: #343a40;
    }

    .btn-dark:hover {
      color: #fff;
      background-color: #23272b;
      border-color: #1d2124;
    }

    .btn-dark:focus,
    .btn-dark.focus {
      color: #fff;
      background-color: #23272b;
      border-color: #1d2124;
      box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5);
    }

    .btn-dark.disabled,
    .btn-dark:disabled {
      color: #fff;
      background-color: #343a40;
      border-color: #343a40;
    }

    .btn-dark:not(:disabled):not(.disabled):active,
    .btn-dark:not(:disabled):not(.disabled).active,
    .show>.btn-dark.dropdown-toggle {
      color: #fff;
      background-color: #1d2124;
      border-color: #171a1d;
    }

    .btn-dark:not(:disabled):not(.disabled):active:focus,
    .btn-dark:not(:disabled):not(.disabled).active:focus,
    .show>.btn-dark.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5);
    }

    .btn-outline-primary {
      color: #007bff;
      border-color: #007bff;
    }

    .btn-outline-primary:hover {
      color: #fff;
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-outline-primary:focus,
    .btn-outline-primary.focus {
      box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
    }

    .btn-outline-primary.disabled,
    .btn-outline-primary:disabled {
      color: #007bff;
      background-color: transparent;
    }

    .btn-outline-primary:not(:disabled):not(.disabled):active,
    .btn-outline-primary:not(:disabled):not(.disabled).active,
    .show>.btn-outline-primary.dropdown-toggle {
      color: #fff;
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-outline-primary:not(:disabled):not(.disabled):active:focus,
    .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-primary.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
    }

    .btn-outline-secondary {
      color: #6c757d;
      border-color: #6c757d;
    }

    .btn-outline-secondary:hover {
      color: #fff;
      background-color: #6c757d;
      border-color: #6c757d;
    }

    .btn-outline-secondary:focus,
    .btn-outline-secondary.focus {
      box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
    }

    .btn-outline-secondary.disabled,
    .btn-outline-secondary:disabled {
      color: #6c757d;
      background-color: transparent;
    }

    .btn-outline-secondary:not(:disabled):not(.disabled):active,
    .btn-outline-secondary:not(:disabled):not(.disabled).active,
    .show>.btn-outline-secondary.dropdown-toggle {
      color: #fff;
      background-color: #6c757d;
      border-color: #6c757d;
    }

    .btn-outline-secondary:not(:disabled):not(.disabled):active:focus,
    .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-secondary.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
    }

    .btn-outline-success {
      color: #28a745;
      border-color: #28a745;
    }

    .btn-outline-success:hover {
      color: #fff;
      background-color: #28a745;
      border-color: #28a745;
    }

    .btn-outline-success:focus,
    .btn-outline-success.focus {
      box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
    }

    .btn-outline-success.disabled,
    .btn-outline-success:disabled {
      color: #28a745;
      background-color: transparent;
    }

    .btn-outline-success:not(:disabled):not(.disabled):active,
    .btn-outline-success:not(:disabled):not(.disabled).active,
    .show>.btn-outline-success.dropdown-toggle {
      color: #fff;
      background-color: #28a745;
      border-color: #28a745;
    }

    .btn-outline-success:not(:disabled):not(.disabled):active:focus,
    .btn-outline-success:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-success.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
    }

    .btn-outline-info {
      color: #17a2b8;
      border-color: #17a2b8;
    }

    .btn-outline-info:hover {
      color: #fff;
      background-color: #17a2b8;
      border-color: #17a2b8;
    }

    .btn-outline-info:focus,
    .btn-outline-info.focus {
      box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
    }

    .btn-outline-info.disabled,
    .btn-outline-info:disabled {
      color: #17a2b8;
      background-color: transparent;
    }

    .btn-outline-info:not(:disabled):not(.disabled):active,
    .btn-outline-info:not(:disabled):not(.disabled).active,
    .show>.btn-outline-info.dropdown-toggle {
      color: #fff;
      background-color: #17a2b8;
      border-color: #17a2b8;
    }

    .btn-outline-info:not(:disabled):not(.disabled):active:focus,
    .btn-outline-info:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-info.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
    }

    .btn-outline-warning {
      color: #ffc107;
      border-color: #ffc107;
    }

    .btn-outline-warning:hover {
      color: #212529;
      background-color: #ffc107;
      border-color: #ffc107;
    }

    .btn-outline-warning:focus,
    .btn-outline-warning.focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
    }

    .btn-outline-warning.disabled,
    .btn-outline-warning:disabled {
      color: #ffc107;
      background-color: transparent;
    }

    .btn-outline-warning:not(:disabled):not(.disabled):active,
    .btn-outline-warning:not(:disabled):not(.disabled).active,
    .show>.btn-outline-warning.dropdown-toggle {
      color: #212529;
      background-color: #ffc107;
      border-color: #ffc107;
    }

    .btn-outline-warning:not(:disabled):not(.disabled):active:focus,
    .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-warning.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
    }

    .btn-outline-danger {
      color: #dc3545;
      border-color: #dc3545;
    }

    .btn-outline-danger:hover {
      color: #fff;
      background-color: #dc3545;
      border-color: #dc3545;
    }

    .btn-outline-danger:focus,
    .btn-outline-danger.focus {
      box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
    }

    .btn-outline-danger.disabled,
    .btn-outline-danger:disabled {
      color: #dc3545;
      background-color: transparent;
    }

    .btn-outline-danger:not(:disabled):not(.disabled):active,
    .btn-outline-danger:not(:disabled):not(.disabled).active,
    .show>.btn-outline-danger.dropdown-toggle {
      color: #fff;
      background-color: #dc3545;
      border-color: #dc3545;
    }

    .btn-outline-danger:not(:disabled):not(.disabled):active:focus,
    .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-danger.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
    }

    .btn-outline-light {
      color: #f8f9fa;
      border-color: #f8f9fa;
    }

    .btn-outline-light:hover {
      color: #212529;
      background-color: #f8f9fa;
      border-color: #f8f9fa;
    }

    .btn-outline-light:focus,
    .btn-outline-light.focus {
      box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
    }

    .btn-outline-light.disabled,
    .btn-outline-light:disabled {
      color: #f8f9fa;
      background-color: transparent;
    }

    .btn-outline-light:not(:disabled):not(.disabled):active,
    .btn-outline-light:not(:disabled):not(.disabled).active,
    .show>.btn-outline-light.dropdown-toggle {
      color: #212529;
      background-color: #f8f9fa;
      border-color: #f8f9fa;
    }

    .btn-outline-light:not(:disabled):not(.disabled):active:focus,
    .btn-outline-light:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-light.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
    }

    .btn-outline-dark {
      color: #343a40;
      border-color: #343a40;
    }

    .btn-outline-dark:hover {
      color: #fff;
      background-color: #343a40;
      border-color: #343a40;
    }

    .btn-outline-dark:focus,
    .btn-outline-dark.focus {
      box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
    }

    .btn-outline-dark.disabled,
    .btn-outline-dark:disabled {
      color: #343a40;
      background-color: transparent;
    }

    .btn-outline-dark:not(:disabled):not(.disabled):active,
    .btn-outline-dark:not(:disabled):not(.disabled).active,
    .show>.btn-outline-dark.dropdown-toggle {
      color: #fff;
      background-color: #343a40;
      border-color: #343a40;
    }

    .btn-outline-dark:not(:disabled):not(.disabled):active:focus,
    .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-dark.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
    }

    .btn-link {
      font-weight: 400;
      color: #007bff;
      text-decoration: none;
    }

    .btn-link:hover {
      color: #0056b3;
      text-decoration: underline;
    }

    .btn-link:focus,
    .btn-link.focus {
      text-decoration: underline;
      box-shadow: none;
    }

    .btn-link:disabled,
    .btn-link.disabled {
      color: #6c757d;
      pointer-events: none;
    }

    .btn-lg,
    .btn-group-lg>.btn {
      padding: 0.5rem 1rem;
      font-size: 1.25rem;
      line-height: 1.5;
      border-radius: 0.3rem;
    }

    .btn-sm,
    .btn-group-sm>.btn {
      padding: 0.25rem 0.5rem;
      font-size: 0.875rem;
      line-height: 1.5;
      border-radius: 0.2rem;
    }

    .btn-block {
      display: block;
      width: 100%;
    }

    .btn-block+.btn-block {
      margin-top: 0.5rem;
    }

    input[type="submit"].btn-block,
    input[type="reset"].btn-block,
    input[type="button"].btn-block {
      width: 100%;
    }

    .fade {
      transition: opacity 0.15s linear;
    }

    @media (prefers-reduced-motion: reduce) {
      .fade {
        transition: none;
      }
    }

    .fade:not(.show) {
      opacity: 0;
    }

    .collapse:not(.show) {
      display: none;
    }

    .collapsing {
      position: relative;
      height: 0;
      overflow: hidden;
      transition: height 0.35s ease;
    }

    @media (prefers-reduced-motion: reduce) {
      .collapsing {
        transition: none;
      }
    }

    .dropup,
    .dropright,
    .dropdown,
    .dropleft {
      position: relative;
    }

    .dropdown-toggle {
      white-space: nowrap;
    }

    .dropdown-toggle::after {
      display: inline-block;
      margin-left: 0.255em;
      vertical-align: 0.255em;
      content: "";
      border-top: 0.3em solid;
      border-right: 0.3em solid transparent;
      border-bottom: 0;
      border-left: 0.3em solid transparent;
    }

    .dropdown-toggle:empty::after {
      margin-left: 0;
    }

    .dropdown-menu {
      position: absolute;
      top: 100%;
      left: 0;
      z-index: 1000;
      display: none;
      float: left;
      min-width: 10rem;
      padding: 0.5rem 0;
      margin: 0.125rem 0 0;
      font-size: 1rem;
      color: #212529;
      text-align: left;
      list-style: none;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid rgba(0, 0, 0, 0.15);
      border-radius: 0.25rem;
    }

    .dropdown-menu-left {
      right: auto;
      left: 0;
    }

    .dropdown-menu-right {
      right: 0;
      left: auto;
    }

    @media (min-width: 576px) {
      .dropdown-menu-sm-left {
        right: auto;
        left: 0;
      }

      .dropdown-menu-sm-right {
        right: 0;
        left: auto;
      }
    }

    @media (min-width: 768px) {
      .dropdown-menu-md-left {
        right: auto;
        left: 0;
      }

      .dropdown-menu-md-right {
        right: 0;
        left: auto;
      }
    }

    @media (min-width: 992px) {
      .dropdown-menu-lg-left {
        right: auto;
        left: 0;
      }

      .dropdown-menu-lg-right {
        right: 0;
        left: auto;
      }
    }

    @media (min-width: 1200px) {
      .dropdown-menu-xl-left {
        right: auto;
        left: 0;
      }

      .dropdown-menu-xl-right {
        right: 0;
        left: auto;
      }
    }

    .dropup .dropdown-menu {
      top: auto;
      bottom: 100%;
      margin-top: 0;
      margin-bottom: 0.125rem;
    }

    .dropup .dropdown-toggle::after {
      display: inline-block;
      margin-left: 0.255em;
      vertical-align: 0.255em;
      content: "";
      border-top: 0;
      border-right: 0.3em solid transparent;
      border-bottom: 0.3em solid;
      border-left: 0.3em solid transparent;
    }

    .dropup .dropdown-toggle:empty::after {
      margin-left: 0;
    }

    .dropright .dropdown-menu {
      top: 0;
      right: auto;
      left: 100%;
      margin-top: 0;
      margin-left: 0.125rem;
    }

    .dropright .dropdown-toggle::after {
      display: inline-block;
      margin-left: 0.255em;
      vertical-align: 0.255em;
      content: "";
      border-top: 0.3em solid transparent;
      border-right: 0;
      border-bottom: 0.3em solid transparent;
      border-left: 0.3em solid;
    }

    .dropright .dropdown-toggle:empty::after {
      margin-left: 0;
    }

    .dropright .dropdown-toggle::after {
      vertical-align: 0;
    }

    .dropleft .dropdown-menu {
      top: 0;
      right: 100%;
      left: auto;
      margin-top: 0;
      margin-right: 0.125rem;
    }

    .dropleft .dropdown-toggle::after {
      display: inline-block;
      margin-left: 0.255em;
      vertical-align: 0.255em;
      content: "";
    }

    .dropleft .dropdown-toggle::after {
      display: none;
    }

    .dropleft .dropdown-toggle::before {
      display: inline-block;
      margin-right: 0.255em;
      vertical-align: 0.255em;
      content: "";
      border-top: 0.3em solid transparent;
      border-right: 0.3em solid;
      border-bottom: 0.3em solid transparent;
    }

    .dropleft .dropdown-toggle:empty::after {
      margin-left: 0;
    }

    .dropleft .dropdown-toggle::before {
      vertical-align: 0;
    }

    .dropdown-menu[x-placement^="top"],
    .dropdown-menu[x-placement^="right"],
    .dropdown-menu[x-placement^="bottom"],
    .dropdown-menu[x-placement^="left"] {
      right: auto;
      bottom: auto;
    }

    .dropdown-divider {
      height: 0;
      margin: 0.5rem 0;
      overflow: hidden;
      border-top: 1px solid #e9ecef;
    }

    .dropdown-item {
      display: block;
      width: 100%;
      padding: 0.25rem 1.5rem;
      clear: both;
      font-weight: 400;
      color: #212529;
      text-align: inherit;
      white-space: nowrap;
      background-color: transparent;
      border: 0;
    }

    .dropdown-item:hover,
    .dropdown-item:focus {
      color: #16181b;
      text-decoration: none;
      background-color: #f8f9fa;
    }

    .dropdown-item.active,
    .dropdown-item:active {
      color: #fff;
      text-decoration: none;
      background-color: #007bff;
    }

    .dropdown-item.disabled,
    .dropdown-item:disabled {
      color: #6c757d;
      pointer-events: none;
      background-color: transparent;
    }

    .dropdown-menu.show {
      display: block;
    }

    .dropdown-header {
      display: block;
      padding: 0.5rem 1.5rem;
      margin-bottom: 0;
      font-size: 0.875rem;
      color: #6c757d;
      white-space: nowrap;
    }

    .dropdown-item-text {
      display: block;
      padding: 0.25rem 1.5rem;
      color: #212529;
    }

    .btn-group,
    .btn-group-vertical {
      position: relative;
      display: inline-flex;
      vertical-align: middle;
    }

    .btn-group>.btn,
    .btn-group-vertical>.btn {
      position: relative;
      flex: 1 1 auto;
    }

    .btn-group>.btn:hover,
    .btn-group-vertical>.btn:hover {
      z-index: 1;
    }

    .btn-group>.btn:focus,
    .btn-group>.btn:active,
    .btn-group>.btn.active,
    .btn-group-vertical>.btn:focus,
    .btn-group-vertical>.btn:active,
    .btn-group-vertical>.btn.active {
      z-index: 1;
    }

    .btn-toolbar {
      display: flex;
      flex-wrap: wrap;
      justify-content: flex-start;
    }

    .btn-toolbar .input-group {
      width: auto;
    }

    .btn-group>.btn:not(:first-child),
    .btn-group>.btn-group:not(:first-child) {
      margin-left: -1px;
    }

    .btn-group>.btn:not(:last-child):not(.dropdown-toggle),
    .btn-group>.btn-group:not(:last-child)>.btn {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0;
    }

    .btn-group>.btn:not(:first-child),
    .btn-group>.btn-group:not(:first-child)>.btn {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
    }

    .dropdown-toggle-split {
      padding-right: 0.5625rem;
      padding-left: 0.5625rem;
    }

    .dropdown-toggle-split::after,
    .dropup .dropdown-toggle-split::after,
    .dropright .dropdown-toggle-split::after {
      margin-left: 0;
    }

    .dropleft .dropdown-toggle-split::before {
      margin-right: 0;
    }

    .btn-sm+.dropdown-toggle-split,
    .btn-group-sm>.btn+.dropdown-toggle-split {
      padding-right: 0.375rem;
      padding-left: 0.375rem;
    }

    .btn-lg+.dropdown-toggle-split,
    .btn-group-lg>.btn+.dropdown-toggle-split {
      padding-right: 0.75rem;
      padding-left: 0.75rem;
    }

    .btn-group-vertical {
      flex-direction: column;
      align-items: flex-start;
      justify-content: center;
    }

    .btn-group-vertical>.btn,
    .btn-group-vertical>.btn-group {
      width: 100%;
    }

    .btn-group-vertical>.btn:not(:first-child),
    .btn-group-vertical>.btn-group:not(:first-child) {
      margin-top: -1px;
    }

    .btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle),
    .btn-group-vertical>.btn-group:not(:last-child)>.btn {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }

    .btn-group-vertical>.btn:not(:first-child),
    .btn-group-vertical>.btn-group:not(:first-child)>.btn {
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }

    .btn-group-toggle>.btn,
    .btn-group-toggle>.btn-group>.btn {
      margin-bottom: 0;
    }

    .btn-group-toggle>.btn input[type="radio"],
    .btn-group-toggle>.btn input[type="checkbox"],
    .btn-group-toggle>.btn-group>.btn input[type="radio"],
    .btn-group-toggle>.btn-group>.btn input[type="checkbox"] {
      position: absolute;
      clip: rect(0, 0, 0, 0);
      pointer-events: none;
    }

    .input-group {
      position: relative;
      display: flex;
      flex-wrap: wrap;
      align-items: stretch;
      width: 100%;
    }

    .input-group>.form-control,
    .input-group>.form-control-plaintext,
    .input-group>.custom-select,
    .input-group>.custom-file {
      position: relative;
      flex: 1 1 0%;
      min-width: 0;
      margin-bottom: 0;
    }

    .input-group>.form-control+.form-control,
    .input-group>.form-control+.custom-select,
    .input-group>.form-control+.custom-file,
    .input-group>.form-control-plaintext+.form-control,
    .input-group>.form-control-plaintext+.custom-select,
    .input-group>.form-control-plaintext+.custom-file,
    .input-group>.custom-select+.form-control,
    .input-group>.custom-select+.custom-select,
    .input-group>.custom-select+.custom-file,
    .input-group>.custom-file+.form-control,
    .input-group>.custom-file+.custom-select,
    .input-group>.custom-file+.custom-file {
      margin-left: -1px;
    }

    .input-group>.form-control:focus,
    .input-group>.custom-select:focus,
    .input-group>.custom-file .custom-file-input:focus~.custom-file-label {
      z-index: 3;
    }

    .input-group>.custom-file .custom-file-input:focus {
      z-index: 4;
    }

    .input-group>.form-control:not(:last-child),
    .input-group>.custom-select:not(:last-child) {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0;
    }

    .input-group>.form-control:not(:first-child),
    .input-group>.custom-select:not(:first-child) {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
    }

    .input-group>.custom-file {
      display: flex;
      align-items: center;
    }

    .input-group>.custom-file:not(:last-child) .custom-file-label,
    .input-group>.custom-file:not(:last-child) .custom-file-label::after {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0;
    }

    .input-group>.custom-file:not(:first-child) .custom-file-label {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
    }

    .input-group-prepend,
    .input-group-append {
      display: flex;
    }

    .input-group-prepend .btn,
    .input-group-append .btn {
      position: relative;
      z-index: 2;
    }

    .input-group-prepend .btn:focus,
    .input-group-append .btn:focus {
      z-index: 3;
    }

    .input-group-prepend .btn+.btn,
    .input-group-prepend .btn+.input-group-text,
    .input-group-prepend .input-group-text+.input-group-text,
    .input-group-prepend .input-group-text+.btn,
    .input-group-append .btn+.btn,
    .input-group-append .btn+.input-group-text,
    .input-group-append .input-group-text+.input-group-text,
    .input-group-append .input-group-text+.btn {
      margin-left: -1px;
    }

    .input-group-prepend {
      margin-right: -1px;
    }

    .input-group-append {
      margin-left: -1px;
    }

    .input-group-text {
      display: flex;
      align-items: center;
      padding: 0.375rem 0.75rem;
      margin-bottom: 0;
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: #495057;
      text-align: center;
      white-space: nowrap;
      background-color: #e9ecef;
      border: 1px solid #ced4da;
      border-radius: 0.25rem;
    }

    .input-group-text input[type="radio"],
    .input-group-text input[type="checkbox"] {
      margin-top: 0;
    }

    .input-group-lg>.form-control:not(textarea),
    .input-group-lg>.custom-select {
      height: calc(1.5em + 1rem + 2px);
    }

    .input-group-lg>.form-control,
    .input-group-lg>.custom-select,
    .input-group-lg>.input-group-prepend>.input-group-text,
    .input-group-lg>.input-group-append>.input-group-text,
    .input-group-lg>.input-group-prepend>.btn,
    .input-group-lg>.input-group-append>.btn {
      padding: 0.5rem 1rem;
      font-size: 1.25rem;
      line-height: 1.5;
      border-radius: 0.3rem;
    }

    .input-group-sm>.form-control:not(textarea),
    .input-group-sm>.custom-select {
      height: calc(1.5em + 0.5rem + 2px);
    }

    .input-group-sm>.form-control,
    .input-group-sm>.custom-select,
    .input-group-sm>.input-group-prepend>.input-group-text,
    .input-group-sm>.input-group-append>.input-group-text,
    .input-group-sm>.input-group-prepend>.btn,
    .input-group-sm>.input-group-append>.btn {
      padding: 0.25rem 0.5rem;
      font-size: 0.875rem;
      line-height: 1.5;
      border-radius: 0.2rem;
    }

    .input-group-lg>.custom-select,
    .input-group-sm>.custom-select {
      padding-right: 1.75rem;
    }

    .input-group>.input-group-prepend>.btn,
    .input-group>.input-group-prepend>.input-group-text,
    .input-group>.input-group-append:not(:last-child)>.btn,
    .input-group>.input-group-append:not(:last-child)>.input-group-text,
    .input-group>.input-group-append:last-child>.btn:not(:last-child):not(.dropdown-toggle),
    .input-group>.input-group-append:last-child>.input-group-text:not(:last-child) {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0;
    }

    .input-group>.input-group-append>.btn,
    .input-group>.input-group-append>.input-group-text,
    .input-group>.input-group-prepend:not(:first-child)>.btn,
    .input-group>.input-group-prepend:not(:first-child)>.input-group-text,
    .input-group>.input-group-prepend:first-child>.btn:not(:first-child),
    .input-group>.input-group-prepend:first-child>.input-group-text:not(:first-child) {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
    }

    .custom-control {
      position: relative;
      display: block;
      min-height: 1.5rem;
      padding-left: 1.5rem;
    }

    .custom-control-inline {
      display: inline-flex;
      margin-right: 1rem;
    }

    .custom-control-input {
      position: absolute;
      left: 0;
      z-index: -1;
      width: 1rem;
      height: 1.25rem;
      opacity: 0;
    }

    .custom-control-input:checked~.custom-control-label::before {
      color: #fff;
      border-color: #007bff;
      background-color: #007bff;
    }

    .custom-control-input:focus~.custom-control-label::before {
      box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .custom-control-input:focus:not(:checked)~.custom-control-label::before {
      border-color: #80bdff;
    }

    .custom-control-input:not(:disabled):active~.custom-control-label::before {
      color: #fff;
      background-color: #b3d7ff;
      border-color: #b3d7ff;
    }

    .custom-control-input[disabled]~.custom-control-label,
    .custom-control-input:disabled~.custom-control-label {
      color: #6c757d;
    }

    .custom-control-input[disabled]~.custom-control-label::before,
    .custom-control-input:disabled~.custom-control-label::before {
      background-color: #e9ecef;
    }

    .custom-control-label {
      position: relative;
      margin-bottom: 0;
      vertical-align: top;
    }

    .custom-control-label::before {
      position: absolute;
      top: 0.25rem;
      left: -1.5rem;
      display: block;
      width: 1rem;
      height: 1rem;
      pointer-events: none;
      content: "";
      background-color: #fff;
      border: #adb5bd solid 1px;
    }

    .custom-control-label::after {
      position: absolute;
      top: 0.25rem;
      left: -1.5rem;
      display: block;
      width: 1rem;
      height: 1rem;
      content: "";
      background: no-repeat 50% / 50% 50%;
    }

    .custom-checkbox .custom-control-label::before {
      border-radius: 0.25rem;
    }

    .custom-checkbox .custom-control-input:checked~.custom-control-label::after {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z'/%3e%3c/svg%3e");
    }

    .custom-checkbox .custom-control-input:indeterminate~.custom-control-label::before {
      border-color: #007bff;
      background-color: #007bff;
    }

    .custom-checkbox .custom-control-input:indeterminate~.custom-control-label::after {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e");
    }

    .custom-checkbox .custom-control-input:disabled:checked~.custom-control-label::before {
      background-color: rgba(0, 123, 255, 0.5);
    }

    .custom-checkbox .custom-control-input:disabled:indeterminate~.custom-control-label::before {
      background-color: rgba(0, 123, 255, 0.5);
    }

    .custom-radio .custom-control-label::before {
      border-radius: 50%;
    }

    .custom-radio .custom-control-input:checked~.custom-control-label::after {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
    }

    .custom-radio .custom-control-input:disabled:checked~.custom-control-label::before {
      background-color: rgba(0, 123, 255, 0.5);
    }

    .custom-switch {
      padding-left: 2.25rem;
    }

    .custom-switch .custom-control-label::before {
      left: -2.25rem;
      width: 1.75rem;
      pointer-events: all;
      border-radius: 0.5rem;
    }

    .custom-switch .custom-control-label::after {
      top: calc(0.25rem + 2px);
      left: calc(-2.25rem + 2px);
      width: calc(1rem - 4px);
      height: calc(1rem - 4px);
      background-color: #adb5bd;
      border-radius: 0.5rem;
      transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
      .custom-switch .custom-control-label::after {
        transition: none;
      }
    }

    .custom-switch .custom-control-input:checked~.custom-control-label::after {
      background-color: #fff;
      transform: translateX(0.75rem);
    }

    .custom-switch .custom-control-input:disabled:checked~.custom-control-label::before {
      background-color: rgba(0, 123, 255, 0.5);
    }

    .custom-select {
      display: inline-block;
      width: 100%;
      height: calc(1.5em + 0.75rem + 2px);
      padding: 0.375rem 1.75rem 0.375rem 0.75rem;
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: #495057;
      vertical-align: middle;
      background: #fff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px;
      border: 1px solid #ced4da;
      border-radius: 0.25rem;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
    }

    .custom-select:focus {
      border-color: #80bdff;
      outline: 0;
      box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .custom-select:focus::-ms-value {
      color: #495057;
      background-color: #fff;
    }

    .custom-select[multiple],
    .custom-select[size]:not([size="1"]) {
      height: auto;
      padding-right: 0.75rem;
      background-image: none;
    }

    .custom-select:disabled {
      color: #6c757d;
      background-color: #e9ecef;
    }

    .custom-select::-ms-expand {
      display: none;
    }

    .custom-select:-moz-focusring {
      color: transparent;
      text-shadow: 0 0 0 #495057;
    }

    .custom-select-sm {
      height: calc(1.5em + 0.5rem + 2px);
      padding-top: 0.25rem;
      padding-bottom: 0.25rem;
      padding-left: 0.5rem;
      font-size: 0.875rem;
    }

    .custom-select-lg {
      height: calc(1.5em + 1rem + 2px);
      padding-top: 0.5rem;
      padding-bottom: 0.5rem;
      padding-left: 1rem;
      font-size: 1.25rem;
    }

    .custom-file {
      position: relative;
      display: inline-block;
      width: 100%;
      height: calc(1.5em + 0.75rem + 2px);
      margin-bottom: 0;
    }

    .custom-file-input {
      position: relative;
      z-index: 2;
      width: 100%;
      height: calc(1.5em + 0.75rem + 2px);
      margin: 0;
      opacity: 0;
    }

    .custom-file-input:focus~.custom-file-label {
      border-color: #80bdff;
      box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .custom-file-input[disabled]~.custom-file-label,
    .custom-file-input:disabled~.custom-file-label {
      background-color: #e9ecef;
    }

    .custom-file-input:lang(en)~.custom-file-label::after {
      content: "Browse";
    }

    .custom-file-input~.custom-file-label[data-browse]::after {
      content: attr(data-browse);
    }

    .custom-file-label {
      position: absolute;
      top: 0;
      right: 0;
      left: 0;
      z-index: 1;
      height: calc(1.5em + 0.75rem + 2px);
      padding: 0.375rem 0.75rem;
      font-weight: 400;
      line-height: 1.5;
      color: #495057;
      background-color: #fff;
      border: 1px solid #ced4da;
      border-radius: 0.25rem;
    }

    .custom-file-label::after {
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      z-index: 3;
      display: block;
      height: calc(1.5em + 0.75rem);
      padding: 0.375rem 0.75rem;
      line-height: 1.5;
      color: #495057;
      content: "Browse";
      background-color: #e9ecef;
      border-left: inherit;
      border-radius: 0 0.25rem 0.25rem 0;
    }

    .custom-range {
      width: 100%;
      height: 1.4rem;
      padding: 0;
      background-color: transparent;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
    }

    .custom-range:focus {
      outline: none;
    }

    .custom-range:focus::-webkit-slider-thumb {
      box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .custom-range:focus::-moz-range-thumb {
      box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .custom-range:focus::-ms-thumb {
      box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .custom-range::-moz-focus-outer {
      border: 0;
    }

    .custom-range::-webkit-slider-thumb {
      width: 1rem;
      height: 1rem;
      margin-top: -0.25rem;
      background-color: #007bff;
      border: 0;
      border-radius: 1rem;
      transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
      -webkit-appearance: none;
      appearance: none;
    }

    @media (prefers-reduced-motion: reduce) {
      .custom-range::-webkit-slider-thumb {
        transition: none;
      }
    }

    .custom-range::-webkit-slider-thumb:active {
      background-color: #b3d7ff;
    }

    .custom-range::-webkit-slider-runnable-track {
      width: 100%;
      height: 0.5rem;
      color: transparent;
      cursor: pointer;
      background-color: #dee2e6;
      border-color: transparent;
      border-radius: 1rem;
    }

    .custom-range::-moz-range-thumb {
      width: 1rem;
      height: 1rem;
      background-color: #007bff;
      border: 0;
      border-radius: 1rem;
      transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
      -moz-appearance: none;
      appearance: none;
    }

    @media (prefers-reduced-motion: reduce) {
      .custom-range::-moz-range-thumb {
        transition: none;
      }
    }

    .custom-range::-moz-range-thumb:active {
      background-color: #b3d7ff;
    }

    .custom-range::-moz-range-track {
      width: 100%;
      height: 0.5rem;
      color: transparent;
      cursor: pointer;
      background-color: #dee2e6;
      border-color: transparent;
      border-radius: 1rem;
    }

    .custom-range::-ms-thumb {
      width: 1rem;
      height: 1rem;
      margin-top: 0;
      margin-right: 0.2rem;
      margin-left: 0.2rem;
      background-color: #007bff;
      border: 0;
      border-radius: 1rem;
      transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
      appearance: none;
    }

    @media (prefers-reduced-motion: reduce) {
      .custom-range::-ms-thumb {
        transition: none;
      }
    }

    .custom-range::-ms-thumb:active {
      background-color: #b3d7ff;
    }

    .custom-range::-ms-track {
      width: 100%;
      height: 0.5rem;
      color: transparent;
      cursor: pointer;
      background-color: transparent;
      border-color: transparent;
      border-width: 0.5rem;
    }

    .custom-range::-ms-fill-lower {
      background-color: #dee2e6;
      border-radius: 1rem;
    }

    .custom-range::-ms-fill-upper {
      margin-right: 15px;
      background-color: #dee2e6;
      border-radius: 1rem;
    }

    .custom-range:disabled::-webkit-slider-thumb {
      background-color: #adb5bd;
    }

    .custom-range:disabled::-webkit-slider-runnable-track {
      cursor: default;
    }

    .custom-range:disabled::-moz-range-thumb {
      background-color: #adb5bd;
    }

    .custom-range:disabled::-moz-range-track {
      cursor: default;
    }

    .custom-range:disabled::-ms-thumb {
      background-color: #adb5bd;
    }

    .custom-control-label::before,
    .custom-file-label,
    .custom-select {
      transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {

      .custom-control-label::before,
      .custom-file-label,
      .custom-select {
        transition: none;
      }
    }

    .nav {
      display: flex;
      flex-wrap: wrap;
      padding-left: 0;
      margin-bottom: 0;
      list-style: none;
    }

    .nav-link {
      display: block;
      padding: 0.5rem 1rem;
    }

    .nav-link:hover,
    .nav-link:focus {
      text-decoration: none;
    }

    .nav-link.disabled {
      color: #6c757d;
      pointer-events: none;
      cursor: default;
    }

    .nav-tabs {
      border-bottom: 1px solid #dee2e6;
    }

    .nav-tabs .nav-item {
      margin-bottom: -1px;
    }

    .nav-tabs .nav-link {
      border: 1px solid transparent;
      border-top-left-radius: 0.25rem;
      border-top-right-radius: 0.25rem;
    }

    .nav-tabs .nav-link:hover,
    .nav-tabs .nav-link:focus {
      border-color: #e9ecef #e9ecef #dee2e6;
    }

    .nav-tabs .nav-link.disabled {
      color: #6c757d;
      background-color: transparent;
      border-color: transparent;
    }

    .nav-tabs .nav-link.active,
    .nav-tabs .nav-item.show .nav-link {
      color: #495057;
      background-color: #fff;
      border-color: #dee2e6 #dee2e6 #fff;
    }

    .nav-tabs .dropdown-menu {
      margin-top: -1px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }

    .nav-pills .nav-link {
      border-radius: 0.25rem;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
      color: #fff;
      background-color: #007bff;
    }

    .nav-fill .nav-item {
      flex: 1 1 auto;
      text-align: center;
    }

    .nav-justified .nav-item {
      flex-basis: 0;
      flex-grow: 1;
      text-align: center;
    }

    .tab-content>.tab-pane {
      display: none;
    }

    .tab-content>.active {
      display: block;
    }

    .navbar {
      position: relative;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      padding: 0.5rem 1rem;
    }

    .navbar .container,
    .navbar .container-fluid,
    .navbar .container-sm,
    .navbar .container-md,
    .navbar .container-lg,
    .navbar .container-xl {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
    }

    .navbar-brand {
      display: inline-block;
      padding-top: 0.3125rem;
      padding-bottom: 0.3125rem;
      margin-right: 1rem;
      font-size: 1.25rem;
      line-height: inherit;
      white-space: nowrap;
    }

    .navbar-brand:hover,
    .navbar-brand:focus {
      text-decoration: none;
    }

    .navbar-nav {
      display: flex;
      flex-direction: column;
      padding-left: 0;
      margin-bottom: 0;
      list-style: none;
    }

    .navbar-nav .nav-link {
      padding-right: 0;
      padding-left: 0;
    }

    .navbar-nav .dropdown-menu {
      position: static;
      float: none;
    }

    .navbar-text {
      display: inline-block;
      padding-top: 0.5rem;
      padding-bottom: 0.5rem;
    }

    .navbar-collapse {
      flex-basis: 100%;
      flex-grow: 1;
      align-items: center;
    }

    .navbar-toggler {
      padding: 0.25rem 0.75rem;
      font-size: 1.25rem;
      line-height: 1;
      background-color: transparent;
      border: 1px solid transparent;
      border-radius: 0.25rem;
    }

    .navbar-toggler:hover,
    .navbar-toggler:focus {
      text-decoration: none;
    }

    .navbar-toggler-icon {
      display: inline-block;
      width: 1.5em;
      height: 1.5em;
      vertical-align: middle;
      content: "";
      background: no-repeat center center;
      background-size: 100% 100%;
    }

    @media (max-width: 575.98px) {

      .navbar-expand-sm>.container,
      .navbar-expand-sm>.container-fluid,
      .navbar-expand-sm>.container-sm,
      .navbar-expand-sm>.container-md,
      .navbar-expand-sm>.container-lg,
      .navbar-expand-sm>.container-xl {
        padding-right: 0;
        padding-left: 0;
      }
    }

    @media (min-width: 576px) {
      .navbar-expand-sm {
        flex-flow: row nowrap;
        justify-content: flex-start;
      }

      .navbar-expand-sm .navbar-nav {
        flex-direction: row;
      }

      .navbar-expand-sm .navbar-nav .dropdown-menu {
        position: absolute;
      }

      .navbar-expand-sm .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem;
      }

      .navbar-expand-sm>.container,
      .navbar-expand-sm>.container-fluid,
      .navbar-expand-sm>.container-sm,
      .navbar-expand-sm>.container-md,
      .navbar-expand-sm>.container-lg,
      .navbar-expand-sm>.container-xl {
        flex-wrap: nowrap;
      }

      .navbar-expand-sm .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
      }

      .navbar-expand-sm .navbar-toggler {
        display: none;
      }
    }

    @media (max-width: 767.98px) {

      .navbar-expand-md>.container,
      .navbar-expand-md>.container-fluid,
      .navbar-expand-md>.container-sm,
      .navbar-expand-md>.container-md,
      .navbar-expand-md>.container-lg,
      .navbar-expand-md>.container-xl {
        padding-right: 0;
        padding-left: 0;
      }
    }

    @media (min-width: 768px) {
      .navbar-expand-md {
        flex-flow: row nowrap;
        justify-content: flex-start;
      }

      .navbar-expand-md .navbar-nav {
        flex-direction: row;
      }

      .navbar-expand-md .navbar-nav .dropdown-menu {
        position: absolute;
      }

      .navbar-expand-md .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem;
      }

      .navbar-expand-md>.container,
      .navbar-expand-md>.container-fluid,
      .navbar-expand-md>.container-sm,
      .navbar-expand-md>.container-md,
      .navbar-expand-md>.container-lg,
      .navbar-expand-md>.container-xl {
        flex-wrap: nowrap;
      }

      .navbar-expand-md .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
      }

      .navbar-expand-md .navbar-toggler {
        display: none;
      }
    }

    @media (max-width: 991.98px) {

      .navbar-expand-lg>.container,
      .navbar-expand-lg>.container-fluid,
      .navbar-expand-lg>.container-sm,
      .navbar-expand-lg>.container-md,
      .navbar-expand-lg>.container-lg,
      .navbar-expand-lg>.container-xl {
        padding-right: 0;
        padding-left: 0;
      }
    }

    @media (min-width: 992px) {
      .navbar-expand-lg {
        flex-flow: row nowrap;
        justify-content: flex-start;
      }

      .navbar-expand-lg .navbar-nav {
        flex-direction: row;
      }

      .navbar-expand-lg .navbar-nav .dropdown-menu {
        position: absolute;
      }

      .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem;
      }

      .navbar-expand-lg>.container,
      .navbar-expand-lg>.container-fluid,
      .navbar-expand-lg>.container-sm,
      .navbar-expand-lg>.container-md,
      .navbar-expand-lg>.container-lg,
      .navbar-expand-lg>.container-xl {
        flex-wrap: nowrap;
      }

      .navbar-expand-lg .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
      }

      .navbar-expand-lg .navbar-toggler {
        display: none;
      }
    }

    @media (max-width: 1199.98px) {

      .navbar-expand-xl>.container,
      .navbar-expand-xl>.container-fluid,
      .navbar-expand-xl>.container-sm,
      .navbar-expand-xl>.container-md,
      .navbar-expand-xl>.container-lg,
      .navbar-expand-xl>.container-xl {
        padding-right: 0;
        padding-left: 0;
      }
    }

    @media (min-width: 1200px) {
      .navbar-expand-xl {
        flex-flow: row nowrap;
        justify-content: flex-start;
      }

      .navbar-expand-xl .navbar-nav {
        flex-direction: row;
      }

      .navbar-expand-xl .navbar-nav .dropdown-menu {
        position: absolute;
      }

      .navbar-expand-xl .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem;
      }

      .navbar-expand-xl>.container,
      .navbar-expand-xl>.container-fluid,
      .navbar-expand-xl>.container-sm,
      .navbar-expand-xl>.container-md,
      .navbar-expand-xl>.container-lg,
      .navbar-expand-xl>.container-xl {
        flex-wrap: nowrap;
      }

      .navbar-expand-xl .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
      }

      .navbar-expand-xl .navbar-toggler {
        display: none;
      }
    }

    .navbar-expand {
      flex-flow: row nowrap;
      justify-content: flex-start;
    }

    .navbar-expand>.container,
    .navbar-expand>.container-fluid,
    .navbar-expand>.container-sm,
    .navbar-expand>.container-md,
    .navbar-expand>.container-lg,
    .navbar-expand>.container-xl {
      padding-right: 0;
      padding-left: 0;
    }

    .navbar-expand .navbar-nav {
      flex-direction: row;
    }

    .navbar-expand .navbar-nav .dropdown-menu {
      position: absolute;
    }

    .navbar-expand .navbar-nav .nav-link {
      padding-right: 0.5rem;
      padding-left: 0.5rem;
    }

    .navbar-expand>.container,
    .navbar-expand>.container-fluid,
    .navbar-expand>.container-sm,
    .navbar-expand>.container-md,
    .navbar-expand>.container-lg,
    .navbar-expand>.container-xl {
      flex-wrap: nowrap;
    }

    .navbar-expand .navbar-collapse {
      display: flex !important;
      flex-basis: auto;
    }

    .navbar-expand .navbar-toggler {
      display: none;
    }

    .navbar-light .navbar-brand {
      color: rgba(0, 0, 0, 0.9);
    }

    .navbar-light .navbar-brand:hover,
    .navbar-light .navbar-brand:focus {
      color: rgba(0, 0, 0, 0.9);
    }

    .navbar-light .navbar-nav .nav-link {
      color: rgba(0, 0, 0, 0.5);
    }

    .navbar-light .navbar-nav .nav-link:hover,
    .navbar-light .navbar-nav .nav-link:focus {
      color: rgba(0, 0, 0, 0.7);
    }

    .navbar-light .navbar-nav .nav-link.disabled {
      color: rgba(0, 0, 0, 0.3);
    }

    .navbar-light .navbar-nav .show>.nav-link,
    .navbar-light .navbar-nav .active>.nav-link,
    .navbar-light .navbar-nav .nav-link.show,
    .navbar-light .navbar-nav .nav-link.active {
      color: rgba(0, 0, 0, 0.9);
    }

    .navbar-light .navbar-toggler {
      color: rgba(0, 0, 0, 0.5);
      border-color: rgba(0, 0, 0, 0.1);
    }

    .navbar-light .navbar-toggler-icon {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0, 0, 0, 0.5)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    .navbar-light .navbar-text {
      color: rgba(0, 0, 0, 0.5);
    }

    .navbar-light .navbar-text a {
      color: rgba(0, 0, 0, 0.9);
    }

    .navbar-light .navbar-text a:hover,
    .navbar-light .navbar-text a:focus {
      color: rgba(0, 0, 0, 0.9);
    }

    .navbar-dark .navbar-brand {
      color: #fff;
    }

    .navbar-dark .navbar-brand:hover,
    .navbar-dark .navbar-brand:focus {
      color: #fff;
    }

    .navbar-dark .navbar-nav .nav-link {
      color: rgba(255, 255, 255, 0.5);
    }

    .navbar-dark .navbar-nav .nav-link:hover,
    .navbar-dark .navbar-nav .nav-link:focus {
      color: rgba(255, 255, 255, 0.75);
    }

    .navbar-dark .navbar-nav .nav-link.disabled {
      color: rgba(255, 255, 255, 0.25);
    }

    .navbar-dark .navbar-nav .show>.nav-link,
    .navbar-dark .navbar-nav .active>.nav-link,
    .navbar-dark .navbar-nav .nav-link.show,
    .navbar-dark .navbar-nav .nav-link.active {
      color: #fff;
    }

    .navbar-dark .navbar-toggler {
      color: rgba(255, 255, 255, 0.5);
      border-color: rgba(255, 255, 255, 0.1);
    }

    .navbar-dark .navbar-toggler-icon {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 255, 255, 0.5)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    .navbar-dark .navbar-text {
      color: rgba(255, 255, 255, 0.5);
    }

    .navbar-dark .navbar-text a {
      color: #fff;
    }

    .navbar-dark .navbar-text a:hover,
    .navbar-dark .navbar-text a:focus {
      color: #fff;
    }

    .card {
      position: relative;
      display: flex;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 1px solid rgba(0, 0, 0, 0.125);
      border-radius: 0.25rem;
    }

    .card>hr {
      margin-right: 0;
      margin-left: 0;
    }

    .card>.list-group:first-child .list-group-item:first-child {
      border-top-left-radius: 0.25rem;
      border-top-right-radius: 0.25rem;
    }

    .card>.list-group:last-child .list-group-item:last-child {
      border-bottom-right-radius: 0.25rem;
      border-bottom-left-radius: 0.25rem;
    }

    .card-body {
      flex: 1 1 auto;
      min-height: 1px;
      padding: 1.25rem;
    }

    .card-title {
      margin-bottom: 0.75rem;
    }

    .card-subtitle {
      margin-top: -0.375rem;
      margin-bottom: 0;
    }

    .card-text:last-child {
      margin-bottom: 0;
    }

    .card-link:hover {
      text-decoration: none;
    }

    .card-link+.card-link {
      margin-left: 1.25rem;
    }

    .card-header {
      padding: 0.75rem 1.25rem;
      margin-bottom: 0;
      background-color: rgba(0, 0, 0, 0.03);
      border-bottom: 1px solid rgba(0, 0, 0, 0.125);
    }

    .card-header:first-child {
      border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
    }

    .card-header+.list-group .list-group-item:first-child {
      border-top: 0;
    }

    .card-footer {
      padding: 0.75rem 1.25rem;
      background-color: rgba(0, 0, 0, 0.03);
      border-top: 1px solid rgba(0, 0, 0, 0.125);
    }

    .card-footer:last-child {
      border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px);
    }

    .card-header-tabs {
      margin-right: -0.625rem;
      margin-bottom: -0.75rem;
      margin-left: -0.625rem;
      border-bottom: 0;
    }

    .card-header-pills {
      margin-right: -0.625rem;
      margin-left: -0.625rem;
    }

    .card-img-overlay {
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      padding: 1.25rem;
    }

    .card-img,
    .card-img-top,
    .card-img-bottom {
      flex-shrink: 0;
      width: 100%;
    }

    .card-img,
    .card-img-top {
      border-top-left-radius: calc(0.25rem - 1px);
      border-top-right-radius: calc(0.25rem - 1px);
    }

    .card-img,
    .card-img-bottom {
      border-bottom-right-radius: calc(0.25rem - 1px);
      border-bottom-left-radius: calc(0.25rem - 1px);
    }

    .card-deck .card {
      margin-bottom: 15px;
    }

    @media (min-width: 576px) {
      .card-deck {
        display: flex;
        flex-flow: row wrap;
        margin-right: -15px;
        margin-left: -15px;
      }

      .card-deck .card {
        flex: 1 0 0%;
        margin-right: 15px;
        margin-bottom: 0;
        margin-left: 15px;
      }
    }

    .card-group>.card {
      margin-bottom: 15px;
    }

    @media (min-width: 576px) {
      .card-group {
        display: flex;
        flex-flow: row wrap;
      }

      .card-group>.card {
        flex: 1 0 0%;
        margin-bottom: 0;
      }

      .card-group>.card+.card {
        margin-left: 0;
        border-left: 0;
      }

      .card-group>.card:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
      }

      .card-group>.card:not(:last-child) .card-img-top,
      .card-group>.card:not(:last-child) .card-header {
        border-top-right-radius: 0;
      }

      .card-group>.card:not(:last-child) .card-img-bottom,
      .card-group>.card:not(:last-child) .card-footer {
        border-bottom-right-radius: 0;
      }

      .card-group>.card:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
      }

      .card-group>.card:not(:first-child) .card-img-top,
      .card-group>.card:not(:first-child) .card-header {
        border-top-left-radius: 0;
      }

      .card-group>.card:not(:first-child) .card-img-bottom,
      .card-group>.card:not(:first-child) .card-footer {
        border-bottom-left-radius: 0;
      }
    }

    .card-columns .card {
      margin-bottom: 0.75rem;
    }

    @media (min-width: 576px) {
      .card-columns {
        -moz-column-count: 3;
        column-count: 3;
        -moz-column-gap: 1.25rem;
        column-gap: 1.25rem;
        orphans: 1;
        widows: 1;
      }

      .card-columns .card {
        display: inline-block;
        width: 100%;
      }
    }

    .accordion>.card {
      overflow: hidden;
    }

    .accordion>.card:not(:last-of-type) {
      border-bottom: 0;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }

    .accordion>.card:not(:first-of-type) {
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }

    .accordion>.card>.card-header {
      border-radius: 0;
      margin-bottom: -1px;
    }

    .breadcrumb {
      display: flex;
      flex-wrap: wrap;
      padding: 0.75rem 1rem;
      margin-bottom: 1rem;
      list-style: none;
      background-color: #e9ecef;
      border-radius: 0.25rem;
    }

    .breadcrumb-item+.breadcrumb-item {
      padding-left: 0.5rem;
    }

    .breadcrumb-item+.breadcrumb-item::before {
      display: inline-block;
      padding-right: 0.5rem;
      color: #6c757d;
      content: "/";
    }

    .breadcrumb-item+.breadcrumb-item:hover::before {
      text-decoration: underline;
    }

    .breadcrumb-item+.breadcrumb-item:hover::before {
      text-decoration: none;
    }

    .breadcrumb-item.active {
      color: #6c757d;
    }

    .pagination {
      display: flex;
      padding-left: 0;
      list-style: none;
      border-radius: 0.25rem;
    }

    .page-link {
      position: relative;
      display: block;
      padding: 0.5rem 0.75rem;
      margin-left: -1px;
      line-height: 1.25;
      color: #007bff;
      background-color: #fff;
      border: 1px solid #dee2e6;
    }

    .page-link:hover {
      z-index: 2;
      color: #0056b3;
      text-decoration: none;
      background-color: #e9ecef;
      border-color: #dee2e6;
    }

    .page-link:focus {
      z-index: 3;
      outline: 0;
      box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .page-item:first-child .page-link {
      margin-left: 0;
      border-top-left-radius: 0.25rem;
      border-bottom-left-radius: 0.25rem;
    }

    .page-item:last-child .page-link {
      border-top-right-radius: 0.25rem;
      border-bottom-right-radius: 0.25rem;
    }

    .page-item.active .page-link {
      z-index: 3;
      color: #fff;
      background-color: #007bff;
      border-color: #007bff;
    }

    .page-item.disabled .page-link {
      color: #6c757d;
      pointer-events: none;
      cursor: auto;
      background-color: #fff;
      border-color: #dee2e6;
    }

    .pagination-lg .page-link {
      padding: 0.75rem 1.5rem;
      font-size: 1.25rem;
      line-height: 1.5;
    }

    .pagination-lg .page-item:first-child .page-link {
      border-top-left-radius: 0.3rem;
      border-bottom-left-radius: 0.3rem;
    }

    .pagination-lg .page-item:last-child .page-link {
      border-top-right-radius: 0.3rem;
      border-bottom-right-radius: 0.3rem;
    }

    .pagination-sm .page-link {
      padding: 0.25rem 0.5rem;
      font-size: 0.875rem;
      line-height: 1.5;
    }

    .pagination-sm .page-item:first-child .page-link {
      border-top-left-radius: 0.2rem;
      border-bottom-left-radius: 0.2rem;
    }

    .pagination-sm .page-item:last-child .page-link {
      border-top-right-radius: 0.2rem;
      border-bottom-right-radius: 0.2rem;
    }

    .badge {
      display: inline-block;
      padding: 0.25em 0.4em;
      font-size: 75%;
      font-weight: 700;
      line-height: 1;
      text-align: center;
      white-space: nowrap;
      vertical-align: baseline;
      border-radius: 0.25rem;
      transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
      .badge {
        transition: none;
      }
    }

    a.badge:hover,
    a.badge:focus {
      text-decoration: none;
    }

    .badge:empty {
      display: none;
    }

    .btn .badge {
      position: relative;
      top: -1px;
    }

    .badge-pill {
      padding-right: 0.6em;
      padding-left: 0.6em;
      border-radius: 10rem;
    }

    .badge-primary {
      color: #fff;
      background-color: #007bff;
    }

    a.badge-primary:hover,
    a.badge-primary:focus {
      color: #fff;
      background-color: #0062cc;
    }

    a.badge-primary:focus,
    a.badge-primary.focus {
      outline: 0;
      box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
    }

    .badge-secondary {
      color: #fff;
      background-color: #6c757d;
    }

    a.badge-secondary:hover,
    a.badge-secondary:focus {
      color: #fff;
      background-color: #545b62;
    }

    a.badge-secondary:focus,
    a.badge-secondary.focus {
      outline: 0;
      box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
    }

    .badge-success {
      color: #fff;
      background-color: #28a745;
    }

    a.badge-success:hover,
    a.badge-success:focus {
      color: #fff;
      background-color: #1e7e34;
    }

    a.badge-success:focus,
    a.badge-success.focus {
      outline: 0;
      box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
    }

    .badge-info {
      color: #fff;
      background-color: #17a2b8;
    }

    a.badge-info:hover,
    a.badge-info:focus {
      color: #fff;
      background-color: #117a8b;
    }

    a.badge-info:focus,
    a.badge-info.focus {
      outline: 0;
      box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
    }

    .badge-warning {
      color: #212529;
      background-color: #ffc107;
    }

    a.badge-warning:hover,
    a.badge-warning:focus {
      color: #212529;
      background-color: #d39e00;
    }

    a.badge-warning:focus,
    a.badge-warning.focus {
      outline: 0;
      box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
    }

    .badge-danger {
      color: #fff;
      background-color: #dc3545;
    }

    a.badge-danger:hover,
    a.badge-danger:focus {
      color: #fff;
      background-color: #bd2130;
    }

    a.badge-danger:focus,
    a.badge-danger.focus {
      outline: 0;
      box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
    }

    .badge-light {
      color: #212529;
      background-color: #f8f9fa;
    }

    a.badge-light:hover,
    a.badge-light:focus {
      color: #212529;
      background-color: #dae0e5;
    }

    a.badge-light:focus,
    a.badge-light.focus {
      outline: 0;
      box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
    }

    .badge-dark {
      color: #fff;
      background-color: #343a40;
    }

    a.badge-dark:hover,
    a.badge-dark:focus {
      color: #fff;
      background-color: #1d2124;
    }

    a.badge-dark:focus,
    a.badge-dark.focus {
      outline: 0;
      box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
    }

    .jumbotron {
      padding: 2rem 1rem;
      margin-bottom: 2rem;
      background-color: #e9ecef;
      border-radius: 0.3rem;
    }

    @media (min-width: 576px) {
      .jumbotron {
        padding: 4rem 2rem;
      }
    }

    .jumbotron-fluid {
      padding-right: 0;
      padding-left: 0;
      border-radius: 0;
    }

    .alert {
      position: relative;
      padding: 0.75rem 1.25rem;
      margin-bottom: 1rem;
      border: 1px solid transparent;
      border-radius: 0.25rem;
    }

    .alert-heading {
      color: inherit;
    }

    .alert-link {
      font-weight: 700;
    }

    .alert-dismissible {
      padding-right: 4rem;
    }

    .alert-dismissible .close {
      position: absolute;
      top: 0;
      right: 0;
      padding: 0.75rem 1.25rem;
      color: inherit;
    }

    .alert-primary {
      color: #004085;
      background-color: #cce5ff;
      border-color: #b8daff;
    }

    .alert-primary hr {
      border-top-color: #9fcdff;
    }

    .alert-primary .alert-link {
      color: #002752;
    }

    .alert-secondary {
      color: #383d41;
      background-color: #e2e3e5;
      border-color: #d6d8db;
    }

    .alert-secondary hr {
      border-top-color: #c8cbcf;
    }

    .alert-secondary .alert-link {
      color: #202326;
    }

    .alert-success {
      color: #155724;
      background-color: #d4edda;
      border-color: #c3e6cb;
    }

    .alert-success hr {
      border-top-color: #b1dfbb;
    }

    .alert-success .alert-link {
      color: #0b2e13;
    }

    .alert-info {
      color: #0c5460;
      background-color: #d1ecf1;
      border-color: #bee5eb;
    }

    .alert-info hr {
      border-top-color: #abdde5;
    }

    .alert-info .alert-link {
      color: #062c33;
    }

    .alert-warning {
      color: #856404;
      background-color: #fff3cd;
      border-color: #ffeeba;
    }

    .alert-warning hr {
      border-top-color: #ffe8a1;
    }

    .alert-warning .alert-link {
      color: #533f03;
    }

    .alert-danger {
      color: #721c24;
      background-color: #f8d7da;
      border-color: #f5c6cb;
    }

    .alert-danger hr {
      border-top-color: #f1b0b7;
    }

    .alert-danger .alert-link {
      color: #491217;
    }

    .alert-light {
      color: #818182;
      background-color: #fefefe;
      border-color: #fdfdfe;
    }

    .alert-light hr {
      border-top-color: #ececf6;
    }

    .alert-light .alert-link {
      color: #686868;
    }

    .alert-dark {
      color: #1b1e21;
      background-color: #d6d8d9;
      border-color: #c6c8ca;
    }

    .alert-dark hr {
      border-top-color: #b9bbbe;
    }

    .alert-dark .alert-link {
      color: #040505;
    }

    @-webkit-keyframes progress-bar-stripes {
      from {
        background-position: 1rem 0;
      }

      to {
        background-position: 0 0;
      }
    }

    @keyframes progress-bar-stripes {
      from {
        background-position: 1rem 0;
      }

      to {
        background-position: 0 0;
      }
    }

    .progress {
      display: flex;
      height: 1rem;
      overflow: hidden;
      font-size: 0.75rem;
      background-color: #e9ecef;
      border-radius: 0.25rem;
    }

    .progress-bar {
      display: flex;
      flex-direction: column;
      justify-content: center;
      overflow: hidden;
      color: #fff;
      text-align: center;
      white-space: nowrap;
      background-color: #007bff;
      transition: width 0.6s ease;
    }

    @media (prefers-reduced-motion: reduce) {
      .progress-bar {
        transition: none;
      }
    }

    .progress-bar-striped {
      background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
      background-size: 1rem 1rem;
    }

    .progress-bar-animated {
      -webkit-animation: progress-bar-stripes 1s linear infinite;
      animation: progress-bar-stripes 1s linear infinite;
    }

    @media (prefers-reduced-motion: reduce) {
      .progress-bar-animated {
        -webkit-animation: none;
        animation: none;
      }
    }

    .media {
      display: flex;
      align-items: flex-start;
    }

    .media-body {
      flex: 1;
    }

    .list-group {
      display: flex;
      flex-direction: column;
      padding-left: 0;
      margin-bottom: 0;
    }

    .list-group-item-action {
      width: 100%;
      color: #495057;
      text-align: inherit;
    }

    .list-group-item-action:hover,
    .list-group-item-action:focus {
      z-index: 1;
      color: #495057;
      text-decoration: none;
      background-color: #f8f9fa;
    }

    .list-group-item-action:active {
      color: #212529;
      background-color: #e9ecef;
    }

    .list-group-item {
      position: relative;
      display: block;
      padding: 0.75rem 1.25rem;
      background-color: #fff;
      border: 1px solid rgba(0, 0, 0, 0.125);
    }

    .list-group-item:first-child {
      border-top-left-radius: 0.25rem;
      border-top-right-radius: 0.25rem;
    }

    .list-group-item:last-child {
      border-bottom-right-radius: 0.25rem;
      border-bottom-left-radius: 0.25rem;
    }

    .list-group-item.disabled,
    .list-group-item:disabled {
      color: #6c757d;
      pointer-events: none;
      background-color: #fff;
    }

    .list-group-item.active {
      z-index: 2;
      color: #fff;
      background-color: #007bff;
      border-color: #007bff;
    }

    .list-group-item+.list-group-item {
      border-top-width: 0;
    }

    .list-group-item+.list-group-item.active {
      margin-top: -1px;
      border-top-width: 1px;
    }

    .list-group-horizontal {
      flex-direction: row;
    }

    .list-group-horizontal .list-group-item:first-child {
      border-bottom-left-radius: 0.25rem;
      border-top-right-radius: 0;
    }

    .list-group-horizontal .list-group-item:last-child {
      border-top-right-radius: 0.25rem;
      border-bottom-left-radius: 0;
    }

    .list-group-horizontal .list-group-item.active {
      margin-top: 0;
    }

    .list-group-horizontal .list-group-item+.list-group-item {
      border-top-width: 1px;
      border-left-width: 0;
    }

    .list-group-horizontal .list-group-item+.list-group-item.active {
      margin-left: -1px;
      border-left-width: 1px;
    }

    @media (min-width: 576px) {
      .list-group-horizontal-sm {
        flex-direction: row;
      }

      .list-group-horizontal-sm .list-group-item:first-child {
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0;
      }

      .list-group-horizontal-sm .list-group-item:last-child {
        border-top-right-radius: 0.25rem;
        border-bottom-left-radius: 0;
      }

      .list-group-horizontal-sm .list-group-item.active {
        margin-top: 0;
      }

      .list-group-horizontal-sm .list-group-item+.list-group-item {
        border-top-width: 1px;
        border-left-width: 0;
      }

      .list-group-horizontal-sm .list-group-item+.list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px;
      }
    }

    @media (min-width: 768px) {
      .list-group-horizontal-md {
        flex-direction: row;
      }

      .list-group-horizontal-md .list-group-item:first-child {
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0;
      }

      .list-group-horizontal-md .list-group-item:last-child {
        border-top-right-radius: 0.25rem;
        border-bottom-left-radius: 0;
      }

      .list-group-horizontal-md .list-group-item.active {
        margin-top: 0;
      }

      .list-group-horizontal-md .list-group-item+.list-group-item {
        border-top-width: 1px;
        border-left-width: 0;
      }

      .list-group-horizontal-md .list-group-item+.list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px;
      }
    }

    @media (min-width: 992px) {
      .list-group-horizontal-lg {
        flex-direction: row;
      }

      .list-group-horizontal-lg .list-group-item:first-child {
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0;
      }

      .list-group-horizontal-lg .list-group-item:last-child {
        border-top-right-radius: 0.25rem;
        border-bottom-left-radius: 0;
      }

      .list-group-horizontal-lg .list-group-item.active {
        margin-top: 0;
      }

      .list-group-horizontal-lg .list-group-item+.list-group-item {
        border-top-width: 1px;
        border-left-width: 0;
      }

      .list-group-horizontal-lg .list-group-item+.list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px;
      }
    }

    @media (min-width: 1200px) {
      .list-group-horizontal-xl {
        flex-direction: row;
      }

      .list-group-horizontal-xl .list-group-item:first-child {
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0;
      }

      .list-group-horizontal-xl .list-group-item:last-child {
        border-top-right-radius: 0.25rem;
        border-bottom-left-radius: 0;
      }

      .list-group-horizontal-xl .list-group-item.active {
        margin-top: 0;
      }

      .list-group-horizontal-xl .list-group-item+.list-group-item {
        border-top-width: 1px;
        border-left-width: 0;
      }

      .list-group-horizontal-xl .list-group-item+.list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px;
      }
    }

    .list-group-flush .list-group-item {
      border-right-width: 0;
      border-left-width: 0;
      border-radius: 0;
    }

    .list-group-flush .list-group-item:first-child {
      border-top-width: 0;
    }

    .list-group-flush:last-child .list-group-item:last-child {
      border-bottom-width: 0;
    }

    .list-group-item-primary {
      color: #004085;
      background-color: #b8daff;
    }

    .list-group-item-primary.list-group-item-action:hover,
    .list-group-item-primary.list-group-item-action:focus {
      color: #004085;
      background-color: #9fcdff;
    }

    .list-group-item-primary.list-group-item-action.active {
      color: #fff;
      background-color: #004085;
      border-color: #004085;
    }

    .list-group-item-secondary {
      color: #383d41;
      background-color: #d6d8db;
    }

    .list-group-item-secondary.list-group-item-action:hover,
    .list-group-item-secondary.list-group-item-action:focus {
      color: #383d41;
      background-color: #c8cbcf;
    }

    .list-group-item-secondary.list-group-item-action.active {
      color: #fff;
      background-color: #383d41;
      border-color: #383d41;
    }

    .list-group-item-success {
      color: #155724;
      background-color: #c3e6cb;
    }

    .list-group-item-success.list-group-item-action:hover,
    .list-group-item-success.list-group-item-action:focus {
      color: #155724;
      background-color: #b1dfbb;
    }

    .list-group-item-success.list-group-item-action.active {
      color: #fff;
      background-color: #155724;
      border-color: #155724;
    }

    .list-group-item-info {
      color: #0c5460;
      background-color: #bee5eb;
    }

    .list-group-item-info.list-group-item-action:hover,
    .list-group-item-info.list-group-item-action:focus {
      color: #0c5460;
      background-color: #abdde5;
    }

    .list-group-item-info.list-group-item-action.active {
      color: #fff;
      background-color: #0c5460;
      border-color: #0c5460;
    }

    .list-group-item-warning {
      color: #856404;
      background-color: #ffeeba;
    }

    .list-group-item-warning.list-group-item-action:hover,
    .list-group-item-warning.list-group-item-action:focus {
      color: #856404;
      background-color: #ffe8a1;
    }

    .list-group-item-warning.list-group-item-action.active {
      color: #fff;
      background-color: #856404;
      border-color: #856404;
    }

    .list-group-item-danger {
      color: #721c24;
      background-color: #f5c6cb;
    }

    .list-group-item-danger.list-group-item-action:hover,
    .list-group-item-danger.list-group-item-action:focus {
      color: #721c24;
      background-color: #f1b0b7;
    }

    .list-group-item-danger.list-group-item-action.active {
      color: #fff;
      background-color: #721c24;
      border-color: #721c24;
    }

    .list-group-item-light {
      color: #818182;
      background-color: #fdfdfe;
    }

    .list-group-item-light.list-group-item-action:hover,
    .list-group-item-light.list-group-item-action:focus {
      color: #818182;
      background-color: #ececf6;
    }

    .list-group-item-light.list-group-item-action.active {
      color: #fff;
      background-color: #818182;
      border-color: #818182;
    }

    .list-group-item-dark {
      color: #1b1e21;
      background-color: #c6c8ca;
    }

    .list-group-item-dark.list-group-item-action:hover,
    .list-group-item-dark.list-group-item-action:focus {
      color: #1b1e21;
      background-color: #b9bbbe;
    }

    .list-group-item-dark.list-group-item-action.active {
      color: #fff;
      background-color: #1b1e21;
      border-color: #1b1e21;
    }

    .close {
      float: right;
      font-size: 1.5rem;
      font-weight: 700;
      line-height: 1;
      color: #000;
      text-shadow: 0 1px 0 #fff;
      opacity: .5;
    }

    .close:hover {
      color: #000;
      text-decoration: none;
    }

    .close:not(:disabled):not(.disabled):hover,
    .close:not(:disabled):not(.disabled):focus {
      opacity: .75;
    }

    button.close {
      padding: 0;
      background-color: transparent;
      border: 0;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
    }

    a.close.disabled {
      pointer-events: none;
    }

    .toast {
      max-width: 350px;
      overflow: hidden;
      font-size: 0.875rem;
      background-color: rgba(255, 255, 255, 0.85);
      background-clip: padding-box;
      border: 1px solid rgba(0, 0, 0, 0.1);
      box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
      -webkit-backdrop-filter: blur(10px);
      backdrop-filter: blur(10px);
      opacity: 0;
      border-radius: 0.25rem;
    }

    .toast:not(:last-child) {
      margin-bottom: 0.75rem;
    }

    .toast.showing {
      opacity: 1;
    }

    .toast.show {
      display: block;
      opacity: 1;
    }

    .toast.hide {
      display: none;
    }

    .toast-header {
      display: flex;
      align-items: center;
      padding: 0.25rem 0.75rem;
      color: #6c757d;
      background-color: rgba(255, 255, 255, 0.85);
      background-clip: padding-box;
      border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }

    .toast-body {
      padding: 0.75rem;
    }

    .modal-open {
      overflow: hidden;
    }

    .modal-open .modal {
      overflow-x: hidden;
      overflow-y: auto;
    }

    .modal {
      position: fixed;
      top: 0;
      left: 0;
      z-index: 1050;
      display: none;
      width: 100%;
      height: 100%;
      overflow: hidden;
      outline: 0;
    }

    .modal-dialog {
      position: relative;
      width: auto;
      margin: 0.5rem;
      pointer-events: none;
    }

    .modal.fade .modal-dialog {
      transition: transform 0.3s ease-out;
      transform: translate(0, -50px);
    }

    @media (prefers-reduced-motion: reduce) {
      .modal.fade .modal-dialog {
        transition: none;
      }
    }

    .modal.show .modal-dialog {
      transform: none;
    }

    .modal.modal-static .modal-dialog {
      transform: scale(1.02);
    }

    .modal-dialog-scrollable {
      display: flex;
      max-height: calc(100% - 1rem);
    }

    .modal-dialog-scrollable .modal-content {
      max-height: calc(100vh - 1rem);
      overflow: hidden;
    }

    .modal-dialog-scrollable .modal-header,
    .modal-dialog-scrollable .modal-footer {
      flex-shrink: 0;
    }

    .modal-dialog-scrollable .modal-body {
      overflow-y: auto;
    }

    .modal-dialog-centered {
      display: flex;
      align-items: center;
      min-height: calc(100% - 1rem);
    }

    .modal-dialog-centered::before {
      display: block;
      height: calc(100vh - 1rem);
      content: "";
    }

    .modal-dialog-centered.modal-dialog-scrollable {
      flex-direction: column;
      justify-content: center;
      height: 100%;
    }

    .modal-dialog-centered.modal-dialog-scrollable .modal-content {
      max-height: none;
    }

    .modal-dialog-centered.modal-dialog-scrollable::before {
      content: none;
    }

    .modal-content {
      position: relative;
      display: flex;
      flex-direction: column;
      width: 100%;
      pointer-events: auto;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid rgba(0, 0, 0, 0.2);
      border-radius: 0.3rem;
      outline: 0;
    }

    .modal-backdrop {
      position: fixed;
      top: 0;
      left: 0;
      z-index: 1040;
      width: 100vw;
      height: 100vh;
      background-color: #000;
    }

    .modal-backdrop.fade {
      opacity: 0;
    }

    .modal-backdrop.show {
      opacity: 0.5;
    }

    .modal-header {
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
      padding: 1rem 1rem;
      border-bottom: 1px solid #dee2e6;
      border-top-left-radius: calc(0.3rem - 1px);
      border-top-right-radius: calc(0.3rem - 1px);
    }

    .modal-header .close {
      padding: 1rem 1rem;
      margin: -1rem -1rem -1rem auto;
    }

    .modal-title {
      margin-bottom: 0;
      line-height: 1.5;
    }

    .modal-body {
      position: relative;
      flex: 1 1 auto;
      padding: 1rem;
    }

    .modal-footer {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: flex-end;
      padding: 0.75rem;
      border-top: 1px solid #dee2e6;
      border-bottom-right-radius: calc(0.3rem - 1px);
      border-bottom-left-radius: calc(0.3rem - 1px);
    }

    .modal-footer>* {
      margin: 0.25rem;
    }

    .modal-scrollbar-measure {
      position: absolute;
      top: -9999px;
      width: 50px;
      height: 50px;
      overflow: scroll;
    }

    @media (min-width: 576px) {
      .modal-dialog {
        max-width: 500px;
        margin: 1.75rem auto;
      }

      .modal-dialog-scrollable {
        max-height: calc(100% - 3.5rem);
      }

      .modal-dialog-scrollable .modal-content {
        max-height: calc(100vh - 3.5rem);
      }

      .modal-dialog-centered {
        min-height: calc(100% - 3.5rem);
      }

      .modal-dialog-centered::before {
        height: calc(100vh - 3.5rem);
      }

      .modal-sm {
        max-width: 300px;
      }
    }

    @media (min-width: 992px) {

      .modal-lg,
      .modal-xl {
        max-width: 800px;
      }
    }

    @media (min-width: 1200px) {
      .modal-xl {
        max-width: 1140px;
      }
    }

    .tooltip {
      position: absolute;
      z-index: 1070;
      display: block;
      margin: 0;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      font-style: normal;
      font-weight: 400;
      line-height: 1.5;
      text-align: left;
      text-align: start;
      text-decoration: none;
      text-shadow: none;
      text-transform: none;
      letter-spacing: normal;
      word-break: normal;
      word-spacing: normal;
      white-space: normal;
      line-break: auto;
      font-size: 0.875rem;
      word-wrap: break-word;
      opacity: 0;
    }

    .tooltip.show {
      opacity: 0.9;
    }

    .tooltip .arrow {
      position: absolute;
      display: block;
      width: 0.8rem;
      height: 0.4rem;
    }

    .tooltip .arrow::before {
      position: absolute;
      content: "";
      border-color: transparent;
      border-style: solid;
    }

    .bs-tooltip-top,
    .bs-tooltip-auto[x-placement^="top"] {
      padding: 0.4rem 0;
    }

    .bs-tooltip-top .arrow,
    .bs-tooltip-auto[x-placement^="top"] .arrow {
      bottom: 0;
    }

    .bs-tooltip-top .arrow::before,
    .bs-tooltip-auto[x-placement^="top"] .arrow::before {
      top: 0;
      border-width: 0.4rem 0.4rem 0;
      border-top-color: #000;
    }

    .bs-tooltip-right,
    .bs-tooltip-auto[x-placement^="right"] {
      padding: 0 0.4rem;
    }

    .bs-tooltip-right .arrow,
    .bs-tooltip-auto[x-placement^="right"] .arrow {
      left: 0;
      width: 0.4rem;
      height: 0.8rem;
    }

    .bs-tooltip-right .arrow::before,
    .bs-tooltip-auto[x-placement^="right"] .arrow::before {
      right: 0;
      border-width: 0.4rem 0.4rem 0.4rem 0;
      border-right-color: #000;
    }

    .bs-tooltip-bottom,
    .bs-tooltip-auto[x-placement^="bottom"] {
      padding: 0.4rem 0;
    }

    .bs-tooltip-bottom .arrow,
    .bs-tooltip-auto[x-placement^="bottom"] .arrow {
      top: 0;
    }

    .bs-tooltip-bottom .arrow::before,
    .bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
      bottom: 0;
      border-width: 0 0.4rem 0.4rem;
      border-bottom-color: #000;
    }

    .bs-tooltip-left,
    .bs-tooltip-auto[x-placement^="left"] {
      padding: 0 0.4rem;
    }

    .bs-tooltip-left .arrow,
    .bs-tooltip-auto[x-placement^="left"] .arrow {
      right: 0;
      width: 0.4rem;
      height: 0.8rem;
    }

    .bs-tooltip-left .arrow::before,
    .bs-tooltip-auto[x-placement^="left"] .arrow::before {
      left: 0;
      border-width: 0.4rem 0 0.4rem 0.4rem;
      border-left-color: #000;
    }

    .tooltip-inner {
      max-width: 200px;
      padding: 0.25rem 0.5rem;
      color: #fff;
      text-align: center;
      background-color: #000;
      border-radius: 0.25rem;
    }

    .popover {
      position: absolute;
      top: 0;
      left: 0;
      z-index: 1060;
      display: block;
      max-width: 276px;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      font-style: normal;
      font-weight: 400;
      line-height: 1.5;
      text-align: left;
      text-align: start;
      text-decoration: none;
      text-shadow: none;
      text-transform: none;
      letter-spacing: normal;
      word-break: normal;
      word-spacing: normal;
      white-space: normal;
      line-break: auto;
      font-size: 0.875rem;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid rgba(0, 0, 0, 0.2);
      border-radius: 0.3rem;
    }

    .popover .arrow {
      position: absolute;
      display: block;
      width: 1rem;
      height: 0.5rem;
      margin: 0 0.3rem;
    }

    .popover .arrow::before,
    .popover .arrow::after {
      position: absolute;
      display: block;
      content: "";
      border-color: transparent;
      border-style: solid;
    }

    .bs-popover-top,
    .bs-popover-auto[x-placement^="top"] {
      margin-bottom: 0.5rem;
    }

    .bs-popover-top>.arrow,
    .bs-popover-auto[x-placement^="top"]>.arrow {
      bottom: calc(-0.5rem - 1px);
    }

    .bs-popover-top>.arrow::before,
    .bs-popover-auto[x-placement^="top"]>.arrow::before {
      bottom: 0;
      border-width: 0.5rem 0.5rem 0;
      border-top-color: rgba(0, 0, 0, 0.25);
    }

    .bs-popover-top>.arrow::after,
    .bs-popover-auto[x-placement^="top"]>.arrow::after {
      bottom: 1px;
      border-width: 0.5rem 0.5rem 0;
      border-top-color: #fff;
    }

    .bs-popover-right,
    .bs-popover-auto[x-placement^="right"] {
      margin-left: 0.5rem;
    }

    .bs-popover-right>.arrow,
    .bs-popover-auto[x-placement^="right"]>.arrow {
      left: calc(-0.5rem - 1px);
      width: 0.5rem;
      height: 1rem;
      margin: 0.3rem 0;
    }

    .bs-popover-right>.arrow::before,
    .bs-popover-auto[x-placement^="right"]>.arrow::before {
      left: 0;
      border-width: 0.5rem 0.5rem 0.5rem 0;
      border-right-color: rgba(0, 0, 0, 0.25);
    }

    .bs-popover-right>.arrow::after,
    .bs-popover-auto[x-placement^="right"]>.arrow::after {
      left: 1px;
      border-width: 0.5rem 0.5rem 0.5rem 0;
      border-right-color: #fff;
    }

    .bs-popover-bottom,
    .bs-popover-auto[x-placement^="bottom"] {
      margin-top: 0.5rem;
    }

    .bs-popover-bottom>.arrow,
    .bs-popover-auto[x-placement^="bottom"]>.arrow {
      top: calc(-0.5rem - 1px);
    }

    .bs-popover-bottom>.arrow::before,
    .bs-popover-auto[x-placement^="bottom"]>.arrow::before {
      top: 0;
      border-width: 0 0.5rem 0.5rem 0.5rem;
      border-bottom-color: rgba(0, 0, 0, 0.25);
    }

    .bs-popover-bottom>.arrow::after,
    .bs-popover-auto[x-placement^="bottom"]>.arrow::after {
      top: 1px;
      border-width: 0 0.5rem 0.5rem 0.5rem;
      border-bottom-color: #fff;
    }

    .bs-popover-bottom .popover-header::before,
    .bs-popover-auto[x-placement^="bottom"] .popover-header::before {
      position: absolute;
      top: 0;
      left: 50%;
      display: block;
      width: 1rem;
      margin-left: -0.5rem;
      content: "";
      border-bottom: 1px solid #f7f7f7;
    }

    .bs-popover-left,
    .bs-popover-auto[x-placement^="left"] {
      margin-right: 0.5rem;
    }

    .bs-popover-left>.arrow,
    .bs-popover-auto[x-placement^="left"]>.arrow {
      right: calc(-0.5rem - 1px);
      width: 0.5rem;
      height: 1rem;
      margin: 0.3rem 0;
    }

    .bs-popover-left>.arrow::before,
    .bs-popover-auto[x-placement^="left"]>.arrow::before {
      right: 0;
      border-width: 0.5rem 0 0.5rem 0.5rem;
      border-left-color: rgba(0, 0, 0, 0.25);
    }

    .bs-popover-left>.arrow::after,
    .bs-popover-auto[x-placement^="left"]>.arrow::after {
      right: 1px;
      border-width: 0.5rem 0 0.5rem 0.5rem;
      border-left-color: #fff;
    }

    .popover-header {
      padding: 0.5rem 0.75rem;
      margin-bottom: 0;
      font-size: 1rem;
      background-color: #f7f7f7;
      border-bottom: 1px solid #ebebeb;
      border-top-left-radius: calc(0.3rem - 1px);
      border-top-right-radius: calc(0.3rem - 1px);
    }

    .popover-header:empty {
      display: none;
    }

    .popover-body {
      padding: 0.5rem 0.75rem;
      color: #212529;
    }

    .carousel {
      position: relative;
    }

    .carousel.pointer-event {
      touch-action: pan-y;
    }

    .carousel-inner {
      position: relative;
      width: 100%;
      overflow: hidden;
    }

    .carousel-inner::after {
      display: block;
      clear: both;
      content: "";
    }

    .carousel-item {
      position: relative;
      display: none;
      float: left;
      width: 100%;
      margin-right: -100%;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
      transition: transform 0.6s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
      .carousel-item {
        transition: none;
      }
    }

    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
      display: block;
    }

    .carousel-item-next:not(.carousel-item-left),
    .active.carousel-item-right {
      transform: translateX(100%);
    }

    .carousel-item-prev:not(.carousel-item-right),
    .active.carousel-item-left {
      transform: translateX(-100%);
    }

    .carousel-fade .carousel-item {
      opacity: 0;
      transition-property: opacity;
      transform: none;
    }

    .carousel-fade .carousel-item.active,
    .carousel-fade .carousel-item-next.carousel-item-left,
    .carousel-fade .carousel-item-prev.carousel-item-right {
      z-index: 1;
      opacity: 1;
    }

    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-right {
      z-index: 0;
      opacity: 0;
      transition: opacity 0s 0.6s;
    }

    @media (prefers-reduced-motion: reduce) {

      .carousel-fade .active.carousel-item-left,
      .carousel-fade .active.carousel-item-right {
        transition: none;
      }
    }

    .carousel-control-prev,
    .carousel-control-next {
      position: absolute;
      top: 0;
      bottom: 0;
      z-index: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 15%;
      color: #fff;
      text-align: center;
      opacity: 0.5;
      transition: opacity 0.15s ease;
    }

    @media (prefers-reduced-motion: reduce) {

      .carousel-control-prev,
      .carousel-control-next {
        transition: none;
      }
    }

    .carousel-control-prev:hover,
    .carousel-control-prev:focus,
    .carousel-control-next:hover,
    .carousel-control-next:focus {
      color: #fff;
      text-decoration: none;
      outline: 0;
      opacity: 0.9;
    }

    .carousel-control-prev {
      left: 0;
    }

    .carousel-control-next {
      right: 0;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      display: inline-block;
      width: 20px;
      height: 20px;
      background: no-repeat 50% / 100% 100%;
    }

    .carousel-control-prev-icon {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z'/%3e%3c/svg%3e");
    }

    .carousel-control-next-icon {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3e%3c/svg%3e");
    }

    .carousel-indicators {
      position: absolute;
      right: 0;
      bottom: 0;
      left: 0;
      z-index: 15;
      display: flex;
      justify-content: center;
      padding-left: 0;
      margin-right: 15%;
      margin-left: 15%;
      list-style: none;
    }

    .carousel-indicators li {
      box-sizing: content-box;
      flex: 0 1 auto;
      width: 30px;
      height: 3px;
      margin-right: 3px;
      margin-left: 3px;
      text-indent: -999px;
      cursor: pointer;
      background-color: #fff;
      background-clip: padding-box;
      border-top: 10px solid transparent;
      border-bottom: 10px solid transparent;
      opacity: .5;
      transition: opacity 0.6s ease;
    }

    @media (prefers-reduced-motion: reduce) {
      .carousel-indicators li {
        transition: none;
      }
    }

    .carousel-indicators .active {
      opacity: 1;
    }

    .carousel-caption {
      position: absolute;
      right: 15%;
      bottom: 20px;
      left: 15%;
      z-index: 10;
      padding-top: 20px;
      padding-bottom: 20px;
      color: #fff;
      text-align: center;
    }

    @-webkit-keyframes spinner-border {
      to {
        transform: rotate(360deg);
      }
    }

    @keyframes spinner-border {
      to {
        transform: rotate(360deg);
      }
    }

    .spinner-border {
      display: inline-block;
      width: 2rem;
      height: 2rem;
      vertical-align: text-bottom;
      border: 0.25em solid currentColor;
      border-right-color: transparent;
      border-radius: 50%;
      -webkit-animation: spinner-border .75s linear infinite;
      animation: spinner-border .75s linear infinite;
    }

    .spinner-border-sm {
      width: 1rem;
      height: 1rem;
      border-width: 0.2em;
    }

    @-webkit-keyframes spinner-grow {
      0% {
        transform: scale(0);
      }

      50% {
        opacity: 1;
      }
    }

    @keyframes spinner-grow {
      0% {
        transform: scale(0);
      }

      50% {
        opacity: 1;
      }
    }

    .spinner-grow {
      display: inline-block;
      width: 2rem;
      height: 2rem;
      vertical-align: text-bottom;
      background-color: currentColor;
      border-radius: 50%;
      opacity: 0;
      -webkit-animation: spinner-grow .75s linear infinite;
      animation: spinner-grow .75s linear infinite;
    }

    .spinner-grow-sm {
      width: 1rem;
      height: 1rem;
    }

    .align-baseline {
      vertical-align: baseline !important;
    }

    .align-top {
      vertical-align: top !important;
    }

    .align-middle {
      vertical-align: middle !important;
    }

    .align-bottom {
      vertical-align: bottom !important;
    }

    .align-text-bottom {
      vertical-align: text-bottom !important;
    }

    .align-text-top {
      vertical-align: text-top !important;
    }

    .bg-primary {
      background-color: #007bff !important;
    }

    a.bg-primary:hover,
    a.bg-primary:focus,
    button.bg-primary:hover,
    button.bg-primary:focus {
      background-color: #0062cc !important;
    }

    .bg-secondary {
      background-color: #6c757d !important;
    }

    a.bg-secondary:hover,
    a.bg-secondary:focus,
    button.bg-secondary:hover,
    button.bg-secondary:focus {
      background-color: #545b62 !important;
    }

    .bg-success {
      background-color: #28a745 !important;
    }

    a.bg-success:hover,
    a.bg-success:focus,
    button.bg-success:hover,
    button.bg-success:focus {
      background-color: #1e7e34 !important;
    }

    .bg-info {
      background-color: #17a2b8 !important;
    }

    a.bg-info:hover,
    a.bg-info:focus,
    button.bg-info:hover,
    button.bg-info:focus {
      background-color: #117a8b !important;
    }

    .bg-warning {
      background-color: #ffc107 !important;
    }

    a.bg-warning:hover,
    a.bg-warning:focus,
    button.bg-warning:hover,
    button.bg-warning:focus {
      background-color: #d39e00 !important;
    }

    .bg-danger {
      background-color: #dc3545 !important;
    }

    a.bg-danger:hover,
    a.bg-danger:focus,
    button.bg-danger:hover,
    button.bg-danger:focus {
      background-color: #bd2130 !important;
    }

    .bg-light {
      background-color: #f8f9fa !important;
    }

    a.bg-light:hover,
    a.bg-light:focus,
    button.bg-light:hover,
    button.bg-light:focus {
      background-color: #dae0e5 !important;
    }

    .bg-dark {
      background-color: #343a40 !important;
    }

    a.bg-dark:hover,
    a.bg-dark:focus,
    button.bg-dark:hover,
    button.bg-dark:focus {
      background-color: #1d2124 !important;
    }

    .bg-white {
      background-color: #fff !important;
    }

    .bg-transparent {
      background-color: transparent !important;
    }

    .border {
      border: 1px solid #dee2e6 !important;
    }

    .border-top {
      border-top: 1px solid #dee2e6 !important;
    }

    .border-right {
      border-right: 1px solid #dee2e6 !important;
    }

    .border-bottom {
      border-bottom: 1px solid #dee2e6 !important;
    }

    .border-left {
      border-left: 1px solid #dee2e6 !important;
    }

    .border-0 {
      border: 0 !important;
    }

    .border-top-0 {
      border-top: 0 !important;
    }

    .border-right-0 {
      border-right: 0 !important;
    }

    .border-bottom-0 {
      border-bottom: 0 !important;
    }

    .border-left-0 {
      border-left: 0 !important;
    }

    .border-primary {
      border-color: #007bff !important;
    }

    .border-secondary {
      border-color: #6c757d !important;
    }

    .border-success {
      border-color: #28a745 !important;
    }

    .border-info {
      border-color: #17a2b8 !important;
    }

    .border-warning {
      border-color: #ffc107 !important;
    }

    .border-danger {
      border-color: #dc3545 !important;
    }

    .border-light {
      border-color: #f8f9fa !important;
    }

    .border-dark {
      border-color: #343a40 !important;
    }

    .border-white {
      border-color: #fff !important;
    }

    .rounded-sm {
      border-radius: 0.2rem !important;
    }

    .rounded {
      border-radius: 0.25rem !important;
    }

    .rounded-top {
      border-top-left-radius: 0.25rem !important;
      border-top-right-radius: 0.25rem !important;
    }

    .rounded-right {
      border-top-right-radius: 0.25rem !important;
      border-bottom-right-radius: 0.25rem !important;
    }

    .rounded-bottom {
      border-bottom-right-radius: 0.25rem !important;
      border-bottom-left-radius: 0.25rem !important;
    }

    .rounded-left {
      border-top-left-radius: 0.25rem !important;
      border-bottom-left-radius: 0.25rem !important;
    }

    .rounded-lg {
      border-radius: 0.3rem !important;
    }

    .rounded-circle {
      border-radius: 50% !important;
    }

    .rounded-pill {
      border-radius: 50rem !important;
    }

    .rounded-0 {
      border-radius: 0 !important;
    }

    .clearfix::after {
      display: block;
      clear: both;
      content: "";
    }

    .d-none {
      display: none !important;
    }

    .d-inline {
      display: inline !important;
    }

    .d-inline-block {
      display: inline-block !important;
    }

    .d-block {
      display: block !important;
    }

    .d-table {
      display: table !important;
    }

    .d-table-row {
      display: table-row !important;
    }

    .d-table-cell {
      display: table-cell !important;
    }

    .d-flex {
      display: flex !important;
    }

    .d-inline-flex {
      display: inline-flex !important;
    }

    @media (min-width: 576px) {
      .d-sm-none {
        display: none !important;
      }

      .d-sm-inline {
        display: inline !important;
      }

      .d-sm-inline-block {
        display: inline-block !important;
      }

      .d-sm-block {
        display: block !important;
      }

      .d-sm-table {
        display: table !important;
      }

      .d-sm-table-row {
        display: table-row !important;
      }

      .d-sm-table-cell {
        display: table-cell !important;
      }

      .d-sm-flex {
        display: flex !important;
      }

      .d-sm-inline-flex {
        display: inline-flex !important;
      }
    }

    @media (min-width: 768px) {
      .d-md-none {
        display: none !important;
      }

      .d-md-inline {
        display: inline !important;
      }

      .d-md-inline-block {
        display: inline-block !important;
      }

      .d-md-block {
        display: block !important;
      }

      .d-md-table {
        display: table !important;
      }

      .d-md-table-row {
        display: table-row !important;
      }

      .d-md-table-cell {
        display: table-cell !important;
      }

      .d-md-flex {
        display: flex !important;
      }

      .d-md-inline-flex {
        display: inline-flex !important;
      }
    }

    @media (min-width: 992px) {
      .d-lg-none {
        display: none !important;
      }

      .d-lg-inline {
        display: inline !important;
      }

      .d-lg-inline-block {
        display: inline-block !important;
      }

      .d-lg-block {
        display: block !important;
      }

      .d-lg-table {
        display: table !important;
      }

      .d-lg-table-row {
        display: table-row !important;
      }

      .d-lg-table-cell {
        display: table-cell !important;
      }

      .d-lg-flex {
        display: flex !important;
      }

      .d-lg-inline-flex {
        display: inline-flex !important;
      }
    }

    @media (min-width: 1200px) {
      .d-xl-none {
        display: none !important;
      }

      .d-xl-inline {
        display: inline !important;
      }

      .d-xl-inline-block {
        display: inline-block !important;
      }

      .d-xl-block {
        display: block !important;
      }

      .d-xl-table {
        display: table !important;
      }

      .d-xl-table-row {
        display: table-row !important;
      }

      .d-xl-table-cell {
        display: table-cell !important;
      }

      .d-xl-flex {
        display: flex !important;
      }

      .d-xl-inline-flex {
        display: inline-flex !important;
      }
    }

    @media print {
      .d-print-none {
        display: none !important;
      }

      .d-print-inline {
        display: inline !important;
      }

      .d-print-inline-block {
        display: inline-block !important;
      }

      .d-print-block {
        display: block !important;
      }

      .d-print-table {
        display: table !important;
      }

      .d-print-table-row {
        display: table-row !important;
      }

      .d-print-table-cell {
        display: table-cell !important;
      }

      .d-print-flex {
        display: flex !important;
      }

      .d-print-inline-flex {
        display: inline-flex !important;
      }
    }

    .embed-responsive {
      position: relative;
      display: block;
      width: 100%;
      padding: 0;
      overflow: hidden;
    }

    .embed-responsive::before {
      display: block;
      content: "";
    }

    .embed-responsive .embed-responsive-item,
    .embed-responsive iframe,
    .embed-responsive embed,
    .embed-responsive object,
    .embed-responsive video {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: 0;
    }

    .embed-responsive-21by9::before {
      padding-top: 42.857143%;
    }

    .embed-responsive-16by9::before {
      padding-top: 56.25%;
    }

    .embed-responsive-4by3::before {
      padding-top: 75%;
    }

    .embed-responsive-1by1::before {
      padding-top: 100%;
    }

    .flex-row {
      flex-direction: row !important;
    }

    .flex-column {
      flex-direction: column !important;
    }

    .flex-row-reverse {
      flex-direction: row-reverse !important;
    }

    .flex-column-reverse {
      flex-direction: column-reverse !important;
    }

    .flex-wrap {
      flex-wrap: wrap !important;
    }

    .flex-nowrap {
      flex-wrap: nowrap !important;
    }

    .flex-wrap-reverse {
      flex-wrap: wrap-reverse !important;
    }

    .flex-fill {
      flex: 1 1 auto !important;
    }

    .flex-grow-0 {
      flex-grow: 0 !important;
    }

    .flex-grow-1 {
      flex-grow: 1 !important;
    }

    .flex-shrink-0 {
      flex-shrink: 0 !important;
    }

    .flex-shrink-1 {
      flex-shrink: 1 !important;
    }

    .justify-content-start {
      justify-content: flex-start !important;
    }

    .justify-content-end {
      justify-content: flex-end !important;
    }

    .justify-content-center {
      justify-content: center !important;
    }

    .justify-content-between {
      justify-content: space-between !important;
    }

    .justify-content-around {
      justify-content: space-around !important;
    }

    .align-items-start {
      align-items: flex-start !important;
    }

    .align-items-end {
      align-items: flex-end !important;
    }

    .align-items-center {
      align-items: center !important;
    }

    .align-items-baseline {
      align-items: baseline !important;
    }

    .align-items-stretch {
      align-items: stretch !important;
    }

    .align-content-start {
      align-content: flex-start !important;
    }

    .align-content-end {
      align-content: flex-end !important;
    }

    .align-content-center {
      align-content: center !important;
    }

    .align-content-between {
      align-content: space-between !important;
    }

    .align-content-around {
      align-content: space-around !important;
    }

    .align-content-stretch {
      align-content: stretch !important;
    }

    .align-self-auto {
      align-self: auto !important;
    }

    .align-self-start {
      align-self: flex-start !important;
    }

    .align-self-end {
      align-self: flex-end !important;
    }

    .align-self-center {
      align-self: center !important;
    }

    .align-self-baseline {
      align-self: baseline !important;
    }

    .align-self-stretch {
      align-self: stretch !important;
    }

    @media (min-width: 576px) {
      .flex-sm-row {
        flex-direction: row !important;
      }

      .flex-sm-column {
        flex-direction: column !important;
      }

      .flex-sm-row-reverse {
        flex-direction: row-reverse !important;
      }

      .flex-sm-column-reverse {
        flex-direction: column-reverse !important;
      }

      .flex-sm-wrap {
        flex-wrap: wrap !important;
      }

      .flex-sm-nowrap {
        flex-wrap: nowrap !important;
      }

      .flex-sm-wrap-reverse {
        flex-wrap: wrap-reverse !important;
      }

      .flex-sm-fill {
        flex: 1 1 auto !important;
      }

      .flex-sm-grow-0 {
        flex-grow: 0 !important;
      }

      .flex-sm-grow-1 {
        flex-grow: 1 !important;
      }

      .flex-sm-shrink-0 {
        flex-shrink: 0 !important;
      }

      .flex-sm-shrink-1 {
        flex-shrink: 1 !important;
      }

      .justify-content-sm-start {
        justify-content: flex-start !important;
      }

      .justify-content-sm-end {
        justify-content: flex-end !important;
      }

      .justify-content-sm-center {
        justify-content: center !important;
      }

      .justify-content-sm-between {
        justify-content: space-between !important;
      }

      .justify-content-sm-around {
        justify-content: space-around !important;
      }

      .align-items-sm-start {
        align-items: flex-start !important;
      }

      .align-items-sm-end {
        align-items: flex-end !important;
      }

      .align-items-sm-center {
        align-items: center !important;
      }

      .align-items-sm-baseline {
        align-items: baseline !important;
      }

      .align-items-sm-stretch {
        align-items: stretch !important;
      }

      .align-content-sm-start {
        align-content: flex-start !important;
      }

      .align-content-sm-end {
        align-content: flex-end !important;
      }

      .align-content-sm-center {
        align-content: center !important;
      }

      .align-content-sm-between {
        align-content: space-between !important;
      }

      .align-content-sm-around {
        align-content: space-around !important;
      }

      .align-content-sm-stretch {
        align-content: stretch !important;
      }

      .align-self-sm-auto {
        align-self: auto !important;
      }

      .align-self-sm-start {
        align-self: flex-start !important;
      }

      .align-self-sm-end {
        align-self: flex-end !important;
      }

      .align-self-sm-center {
        align-self: center !important;
      }

      .align-self-sm-baseline {
        align-self: baseline !important;
      }

      .align-self-sm-stretch {
        align-self: stretch !important;
      }
    }

    @media (min-width: 768px) {
      .flex-md-row {
        flex-direction: row !important;
      }

      .flex-md-column {
        flex-direction: column !important;
      }

      .flex-md-row-reverse {
        flex-direction: row-reverse !important;
      }

      .flex-md-column-reverse {
        flex-direction: column-reverse !important;
      }

      .flex-md-wrap {
        flex-wrap: wrap !important;
      }

      .flex-md-nowrap {
        flex-wrap: nowrap !important;
      }

      .flex-md-wrap-reverse {
        flex-wrap: wrap-reverse !important;
      }

      .flex-md-fill {
        flex: 1 1 auto !important;
      }

      .flex-md-grow-0 {
        flex-grow: 0 !important;
      }

      .flex-md-grow-1 {
        flex-grow: 1 !important;
      }

      .flex-md-shrink-0 {
        flex-shrink: 0 !important;
      }

      .flex-md-shrink-1 {
        flex-shrink: 1 !important;
      }

      .justify-content-md-start {
        justify-content: flex-start !important;
      }

      .justify-content-md-end {
        justify-content: flex-end !important;
      }

      .justify-content-md-center {
        justify-content: center !important;
      }

      .justify-content-md-between {
        justify-content: space-between !important;
      }

      .justify-content-md-around {
        justify-content: space-around !important;
      }

      .align-items-md-start {
        align-items: flex-start !important;
      }

      .align-items-md-end {
        align-items: flex-end !important;
      }

      .align-items-md-center {
        align-items: center !important;
      }

      .align-items-md-baseline {
        align-items: baseline !important;
      }

      .align-items-md-stretch {
        align-items: stretch !important;
      }

      .align-content-md-start {
        align-content: flex-start !important;
      }

      .align-content-md-end {
        align-content: flex-end !important;
      }

      .align-content-md-center {
        align-content: center !important;
      }

      .align-content-md-between {
        align-content: space-between !important;
      }

      .align-content-md-around {
        align-content: space-around !important;
      }

      .align-content-md-stretch {
        align-content: stretch !important;
      }

      .align-self-md-auto {
        align-self: auto !important;
      }

      .align-self-md-start {
        align-self: flex-start !important;
      }

      .align-self-md-end {
        align-self: flex-end !important;
      }

      .align-self-md-center {
        align-self: center !important;
      }

      .align-self-md-baseline {
        align-self: baseline !important;
      }

      .align-self-md-stretch {
        align-self: stretch !important;
      }
    }

    @media (min-width: 992px) {
      .flex-lg-row {
        flex-direction: row !important;
      }

      .flex-lg-column {
        flex-direction: column !important;
      }

      .flex-lg-row-reverse {
        flex-direction: row-reverse !important;
      }

      .flex-lg-column-reverse {
        flex-direction: column-reverse !important;
      }

      .flex-lg-wrap {
        flex-wrap: wrap !important;
      }

      .flex-lg-nowrap {
        flex-wrap: nowrap !important;
      }

      .flex-lg-wrap-reverse {
        flex-wrap: wrap-reverse !important;
      }

      .flex-lg-fill {
        flex: 1 1 auto !important;
      }

      .flex-lg-grow-0 {
        flex-grow: 0 !important;
      }

      .flex-lg-grow-1 {
        flex-grow: 1 !important;
      }

      .flex-lg-shrink-0 {
        flex-shrink: 0 !important;
      }

      .flex-lg-shrink-1 {
        flex-shrink: 1 !important;
      }

      .justify-content-lg-start {
        justify-content: flex-start !important;
      }

      .justify-content-lg-end {
        justify-content: flex-end !important;
      }

      .justify-content-lg-center {
        justify-content: center !important;
      }

      .justify-content-lg-between {
        justify-content: space-between !important;
      }

      .justify-content-lg-around {
        justify-content: space-around !important;
      }

      .align-items-lg-start {
        align-items: flex-start !important;
      }

      .align-items-lg-end {
        align-items: flex-end !important;
      }

      .align-items-lg-center {
        align-items: center !important;
      }

      .align-items-lg-baseline {
        align-items: baseline !important;
      }

      .align-items-lg-stretch {
        align-items: stretch !important;
      }

      .align-content-lg-start {
        align-content: flex-start !important;
      }

      .align-content-lg-end {
        align-content: flex-end !important;
      }

      .align-content-lg-center {
        align-content: center !important;
      }

      .align-content-lg-between {
        align-content: space-between !important;
      }

      .align-content-lg-around {
        align-content: space-around !important;
      }

      .align-content-lg-stretch {
        align-content: stretch !important;
      }

      .align-self-lg-auto {
        align-self: auto !important;
      }

      .align-self-lg-start {
        align-self: flex-start !important;
      }

      .align-self-lg-end {
        align-self: flex-end !important;
      }

      .align-self-lg-center {
        align-self: center !important;
      }

      .align-self-lg-baseline {
        align-self: baseline !important;
      }

      .align-self-lg-stretch {
        align-self: stretch !important;
      }
    }

    @media (min-width: 1200px) {
      .flex-xl-row {
        flex-direction: row !important;
      }

      .flex-xl-column {
        flex-direction: column !important;
      }

      .flex-xl-row-reverse {
        flex-direction: row-reverse !important;
      }

      .flex-xl-column-reverse {
        flex-direction: column-reverse !important;
      }

      .flex-xl-wrap {
        flex-wrap: wrap !important;
      }

      .flex-xl-nowrap {
        flex-wrap: nowrap !important;
      }

      .flex-xl-wrap-reverse {
        flex-wrap: wrap-reverse !important;
      }

      .flex-xl-fill {
        flex: 1 1 auto !important;
      }

      .flex-xl-grow-0 {
        flex-grow: 0 !important;
      }

      .flex-xl-grow-1 {
        flex-grow: 1 !important;
      }

      .flex-xl-shrink-0 {
        flex-shrink: 0 !important;
      }

      .flex-xl-shrink-1 {
        flex-shrink: 1 !important;
      }

      .justify-content-xl-start {
        justify-content: flex-start !important;
      }

      .justify-content-xl-end {
        justify-content: flex-end !important;
      }

      .justify-content-xl-center {
        justify-content: center !important;
      }

      .justify-content-xl-between {
        justify-content: space-between !important;
      }

      .justify-content-xl-around {
        justify-content: space-around !important;
      }

      .align-items-xl-start {
        align-items: flex-start !important;
      }

      .align-items-xl-end {
        align-items: flex-end !important;
      }

      .align-items-xl-center {
        align-items: center !important;
      }

      .align-items-xl-baseline {
        align-items: baseline !important;
      }

      .align-items-xl-stretch {
        align-items: stretch !important;
      }

      .align-content-xl-start {
        align-content: flex-start !important;
      }

      .align-content-xl-end {
        align-content: flex-end !important;
      }

      .align-content-xl-center {
        align-content: center !important;
      }

      .align-content-xl-between {
        align-content: space-between !important;
      }

      .align-content-xl-around {
        align-content: space-around !important;
      }

      .align-content-xl-stretch {
        align-content: stretch !important;
      }

      .align-self-xl-auto {
        align-self: auto !important;
      }

      .align-self-xl-start {
        align-self: flex-start !important;
      }

      .align-self-xl-end {
        align-self: flex-end !important;
      }

      .align-self-xl-center {
        align-self: center !important;
      }

      .align-self-xl-baseline {
        align-self: baseline !important;
      }

      .align-self-xl-stretch {
        align-self: stretch !important;
      }
    }

    .float-left {
      float: left !important;
    }

    .float-right {
      float: right !important;
    }

    .float-none {
      float: none !important;
    }

    @media (min-width: 576px) {
      .float-sm-left {
        float: left !important;
      }

      .float-sm-right {
        float: right !important;
      }

      .float-sm-none {
        float: none !important;
      }
    }

    @media (min-width: 768px) {
      .float-md-left {
        float: left !important;
      }

      .float-md-right {
        float: right !important;
      }

      .float-md-none {
        float: none !important;
      }
    }

    @media (min-width: 992px) {
      .float-lg-left {
        float: left !important;
      }

      .float-lg-right {
        float: right !important;
      }

      .float-lg-none {
        float: none !important;
      }
    }

    @media (min-width: 1200px) {
      .float-xl-left {
        float: left !important;
      }

      .float-xl-right {
        float: right !important;
      }

      .float-xl-none {
        float: none !important;
      }
    }

    .overflow-auto {
      overflow: auto !important;
    }

    .overflow-hidden {
      overflow: hidden !important;
    }

    .position-static {
      position: static !important;
    }

    .position-relative {
      position: relative !important;
    }

    .position-absolute {
      position: absolute !important;
    }

    .position-fixed {
      position: fixed !important;
    }

    .position-sticky {
      position: -webkit-sticky !important;
      position: sticky !important;
    }

    .fixed-top {
      position: fixed;
      top: 0;
      right: 0;
      left: 0;
      z-index: 1030;
    }

    .fixed-bottom {
      position: fixed;
      right: 0;
      bottom: 0;
      left: 0;
      z-index: 1030;
    }

    @supports ((position: -webkit-sticky) or (position: sticky)) {
      .sticky-top {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        z-index: 1020;
      }
    }

    .sr-only {
      position: absolute;
      width: 1px;
      height: 1px;
      padding: 0;
      margin: -1px;
      overflow: hidden;
      clip: rect(0, 0, 0, 0);
      white-space: nowrap;
      border: 0;
    }

    .sr-only-focusable:active,
    .sr-only-focusable:focus {
      position: static;
      width: auto;
      height: auto;
      overflow: visible;
      clip: auto;
      white-space: normal;
    }

    .shadow-sm {
      box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
    }

    .shadow {
      box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
    }

    .shadow-lg {
      box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
    }

    .shadow-none {
      box-shadow: none !important;
    }

    .w-25 {
      width: 25% !important;
    }

    .w-50 {
      width: 50% !important;
    }

    .w-75 {
      width: 75% !important;
    }

    .w-100 {
      width: 100% !important;
    }

    .w-auto {
      width: auto !important;
    }

    .h-25 {
      height: 25% !important;
    }

    .h-50 {
      height: 50% !important;
    }

    .h-75 {
      height: 75% !important;
    }

    .h-100 {
      height: 100% !important;
    }

    .h-auto {
      height: auto !important;
    }

    .mw-100 {
      max-width: 100% !important;
    }

    .mh-100 {
      max-height: 100% !important;
    }

    .min-vw-100 {
      min-width: 100vw !important;
    }

    .min-vh-100 {
      min-height: 100vh !important;
    }

    .vw-100 {
      width: 100vw !important;
    }

    .vh-100 {
      height: 100vh !important;
    }

    .stretched-link::after {
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      z-index: 1;
      pointer-events: auto;
      content: "";
      background-color: rgba(0, 0, 0, 0);
    }

    .m-0 {
      margin: 0 !important;
    }

    .mt-0,
    .my-0 {
      margin-top: 0 !important;
    }

    .mr-0,
    .mx-0 {
      margin-right: 0 !important;
    }

    .mb-0,
    .my-0 {
      margin-bottom: 0 !important;
    }

    .ml-0,
    .mx-0 {
      margin-left: 0 !important;
    }

    .m-1 {
      margin: 0.25rem !important;
    }

    .mt-1,
    .my-1 {
      margin-top: 0.25rem !important;
    }

    .mr-1,
    .mx-1 {
      margin-right: 0.25rem !important;
    }

    .mb-1,
    .my-1 {
      margin-bottom: 0.25rem !important;
    }

    .ml-1,
    .mx-1 {
      margin-left: 0.25rem !important;
    }

    .m-2 {
      margin: 0.5rem !important;
    }

    .mt-2,
    .my-2 {
      margin-top: 0.5rem !important;
    }

    .mr-2,
    .mx-2 {
      margin-right: 0.5rem !important;
    }

    .mb-2,
    .my-2 {
      margin-bottom: 0.5rem !important;
    }

    .ml-2,
    .mx-2 {
      margin-left: 0.5rem !important;
    }

    .m-3 {
      margin: 1rem !important;
    }

    .mt-3,
    .my-3 {
      margin-top: 1rem !important;
    }

    .mr-3,
    .mx-3 {
      margin-right: 1rem !important;
    }

    .mb-3,
    .my-3 {
      margin-bottom: 1rem !important;
    }

    .ml-3,
    .mx-3 {
      margin-left: 1rem !important;
    }

    .m-4 {
      margin: 1.5rem !important;
    }

    .mt-4,
    .my-4 {
      margin-top: 1.5rem !important;
    }

    .mr-4,
    .mx-4 {
      margin-right: 1.5rem !important;
    }

    .mb-4,
    .my-4 {
      margin-bottom: 1.5rem !important;
    }

    .ml-4,
    .mx-4 {
      margin-left: 1.5rem !important;
    }

    .m-5 {
      margin: 3rem !important;
    }

    .mt-5,
    .my-5 {
      margin-top: 3rem !important;
    }

    .mr-5,
    .mx-5 {
      margin-right: 3rem !important;
    }

    .mb-5,
    .my-5 {
      margin-bottom: 3rem !important;
    }

    .ml-5,
    .mx-5 {
      margin-left: 3rem !important;
    }

    .p-0 {
      padding: 0 !important;
    }

    .pt-0,
    .py-0 {
      padding-top: 0 !important;
    }

    .pr-0,
    .px-0 {
      padding-right: 0 !important;
    }

    .pb-0,
    .py-0 {
      padding-bottom: 0 !important;
    }

    .pl-0,
    .px-0 {
      padding-left: 0 !important;
    }

    .p-1 {
      padding: 0.25rem !important;
    }

    .pt-1,
    .py-1 {
      padding-top: 0.25rem !important;
    }

    .pr-1,
    .px-1 {
      padding-right: 0.25rem !important;
    }

    .pb-1,
    .py-1 {
      padding-bottom: 0.25rem !important;
    }

    .pl-1,
    .px-1 {
      padding-left: 0.25rem !important;
    }

    .p-2 {
      padding: 0.5rem !important;
    }

    .pt-2,
    .py-2 {
      padding-top: 0.5rem !important;
    }

    .pr-2,
    .px-2 {
      padding-right: 0.5rem !important;
    }

    .pb-2,
    .py-2 {
      padding-bottom: 0.5rem !important;
    }

    .pl-2,
    .px-2 {
      padding-left: 0.5rem !important;
    }

    .p-3 {
      padding: 1rem !important;
    }

    .pt-3,
    .py-3 {
      padding-top: 1rem !important;
    }

    .pr-3,
    .px-3 {
      padding-right: 1rem !important;
    }

    .pb-3,
    .py-3 {
      padding-bottom: 1rem !important;
    }

    .pl-3,
    .px-3 {
      padding-left: 1rem !important;
    }

    .p-4 {
      padding: 1.5rem !important;
    }

    .pt-4,
    .py-4 {
      padding-top: 1.5rem !important;
    }

    .pr-4,
    .px-4 {
      padding-right: 1.5rem !important;
    }

    .pb-4,
    .py-4 {
      padding-bottom: 1.5rem !important;
    }

    .pl-4,
    .px-4 {
      padding-left: 1.5rem !important;
    }

    .p-5 {
      padding: 3rem !important;
    }

    .pt-5,
    .py-5 {
      padding-top: 3rem !important;
    }

    .pr-5,
    .px-5 {
      padding-right: 3rem !important;
    }

    .pb-5,
    .py-5 {
      padding-bottom: 3rem !important;
    }

    .pl-5,
    .px-5 {
      padding-left: 3rem !important;
    }

    .m-n1 {
      margin: -0.25rem !important;
    }

    .mt-n1,
    .my-n1 {
      margin-top: -0.25rem !important;
    }

    .mr-n1,
    .mx-n1 {
      margin-right: -0.25rem !important;
    }

    .mb-n1,
    .my-n1 {
      margin-bottom: -0.25rem !important;
    }

    .ml-n1,
    .mx-n1 {
      margin-left: -0.25rem !important;
    }

    .m-n2 {
      margin: -0.5rem !important;
    }

    .mt-n2,
    .my-n2 {
      margin-top: -0.5rem !important;
    }

    .mr-n2,
    .mx-n2 {
      margin-right: -0.5rem !important;
    }

    .mb-n2,
    .my-n2 {
      margin-bottom: -0.5rem !important;
    }

    .ml-n2,
    .mx-n2 {
      margin-left: -0.5rem !important;
    }

    .m-n3 {
      margin: -1rem !important;
    }

    .mt-n3,
    .my-n3 {
      margin-top: -1rem !important;
    }

    .mr-n3,
    .mx-n3 {
      margin-right: -1rem !important;
    }

    .mb-n3,
    .my-n3 {
      margin-bottom: -1rem !important;
    }

    .ml-n3,
    .mx-n3 {
      margin-left: -1rem !important;
    }

    .m-n4 {
      margin: -1.5rem !important;
    }

    .mt-n4,
    .my-n4 {
      margin-top: -1.5rem !important;
    }

    .mr-n4,
    .mx-n4 {
      margin-right: -1.5rem !important;
    }

    .mb-n4,
    .my-n4 {
      margin-bottom: -1.5rem !important;
    }

    .ml-n4,
    .mx-n4 {
      margin-left: -1.5rem !important;
    }

    .m-n5 {
      margin: -3rem !important;
    }

    .mt-n5,
    .my-n5 {
      margin-top: -3rem !important;
    }

    .mr-n5,
    .mx-n5 {
      margin-right: -3rem !important;
    }

    .mb-n5,
    .my-n5 {
      margin-bottom: -3rem !important;
    }

    .ml-n5,
    .mx-n5 {
      margin-left: -3rem !important;
    }

    .m-auto {
      margin: auto !important;
    }

    .mt-auto,
    .my-auto {
      margin-top: auto !important;
    }

    .mr-auto,
    .mx-auto {
      margin-right: auto !important;
    }

    .mb-auto,
    .my-auto {
      margin-bottom: auto !important;
    }

    .ml-auto,
    .mx-auto {
      margin-left: auto !important;
    }

    @media (min-width: 576px) {
      .m-sm-0 {
        margin: 0 !important;
      }

      .mt-sm-0,
      .my-sm-0 {
        margin-top: 0 !important;
      }

      .mr-sm-0,
      .mx-sm-0 {
        margin-right: 0 !important;
      }

      .mb-sm-0,
      .my-sm-0 {
        margin-bottom: 0 !important;
      }

      .ml-sm-0,
      .mx-sm-0 {
        margin-left: 0 !important;
      }

      .m-sm-1 {
        margin: 0.25rem !important;
      }

      .mt-sm-1,
      .my-sm-1 {
        margin-top: 0.25rem !important;
      }

      .mr-sm-1,
      .mx-sm-1 {
        margin-right: 0.25rem !important;
      }

      .mb-sm-1,
      .my-sm-1 {
        margin-bottom: 0.25rem !important;
      }

      .ml-sm-1,
      .mx-sm-1 {
        margin-left: 0.25rem !important;
      }

      .m-sm-2 {
        margin: 0.5rem !important;
      }

      .mt-sm-2,
      .my-sm-2 {
        margin-top: 0.5rem !important;
      }

      .mr-sm-2,
      .mx-sm-2 {
        margin-right: 0.5rem !important;
      }

      .mb-sm-2,
      .my-sm-2 {
        margin-bottom: 0.5rem !important;
      }

      .ml-sm-2,
      .mx-sm-2 {
        margin-left: 0.5rem !important;
      }

      .m-sm-3 {
        margin: 1rem !important;
      }

      .mt-sm-3,
      .my-sm-3 {
        margin-top: 1rem !important;
      }

      .mr-sm-3,
      .mx-sm-3 {
        margin-right: 1rem !important;
      }

      .mb-sm-3,
      .my-sm-3 {
        margin-bottom: 1rem !important;
      }

      .ml-sm-3,
      .mx-sm-3 {
        margin-left: 1rem !important;
      }

      .m-sm-4 {
        margin: 1.5rem !important;
      }

      .mt-sm-4,
      .my-sm-4 {
        margin-top: 1.5rem !important;
      }

      .mr-sm-4,
      .mx-sm-4 {
        margin-right: 1.5rem !important;
      }

      .mb-sm-4,
      .my-sm-4 {
        margin-bottom: 1.5rem !important;
      }

      .ml-sm-4,
      .mx-sm-4 {
        margin-left: 1.5rem !important;
      }

      .m-sm-5 {
        margin: 3rem !important;
      }

      .mt-sm-5,
      .my-sm-5 {
        margin-top: 3rem !important;
      }

      .mr-sm-5,
      .mx-sm-5 {
        margin-right: 3rem !important;
      }

      .mb-sm-5,
      .my-sm-5 {
        margin-bottom: 3rem !important;
      }

      .ml-sm-5,
      .mx-sm-5 {
        margin-left: 3rem !important;
      }

      .p-sm-0 {
        padding: 0 !important;
      }

      .pt-sm-0,
      .py-sm-0 {
        padding-top: 0 !important;
      }

      .pr-sm-0,
      .px-sm-0 {
        padding-right: 0 !important;
      }

      .pb-sm-0,
      .py-sm-0 {
        padding-bottom: 0 !important;
      }

      .pl-sm-0,
      .px-sm-0 {
        padding-left: 0 !important;
      }

      .p-sm-1 {
        padding: 0.25rem !important;
      }

      .pt-sm-1,
      .py-sm-1 {
        padding-top: 0.25rem !important;
      }

      .pr-sm-1,
      .px-sm-1 {
        padding-right: 0.25rem !important;
      }

      .pb-sm-1,
      .py-sm-1 {
        padding-bottom: 0.25rem !important;
      }

      .pl-sm-1,
      .px-sm-1 {
        padding-left: 0.25rem !important;
      }

      .p-sm-2 {
        padding: 0.5rem !important;
      }

      .pt-sm-2,
      .py-sm-2 {
        padding-top: 0.5rem !important;
      }

      .pr-sm-2,
      .px-sm-2 {
        padding-right: 0.5rem !important;
      }

      .pb-sm-2,
      .py-sm-2 {
        padding-bottom: 0.5rem !important;
      }

      .pl-sm-2,
      .px-sm-2 {
        padding-left: 0.5rem !important;
      }

      .p-sm-3 {
        padding: 1rem !important;
      }

      .pt-sm-3,
      .py-sm-3 {
        padding-top: 1rem !important;
      }

      .pr-sm-3,
      .px-sm-3 {
        padding-right: 1rem !important;
      }

      .pb-sm-3,
      .py-sm-3 {
        padding-bottom: 1rem !important;
      }

      .pl-sm-3,
      .px-sm-3 {
        padding-left: 1rem !important;
      }

      .p-sm-4 {
        padding: 1.5rem !important;
      }

      .pt-sm-4,
      .py-sm-4 {
        padding-top: 1.5rem !important;
      }

      .pr-sm-4,
      .px-sm-4 {
        padding-right: 1.5rem !important;
      }

      .pb-sm-4,
      .py-sm-4 {
        padding-bottom: 1.5rem !important;
      }

      .pl-sm-4,
      .px-sm-4 {
        padding-left: 1.5rem !important;
      }

      .p-sm-5 {
        padding: 3rem !important;
      }

      .pt-sm-5,
      .py-sm-5 {
        padding-top: 3rem !important;
      }

      .pr-sm-5,
      .px-sm-5 {
        padding-right: 3rem !important;
      }

      .pb-sm-5,
      .py-sm-5 {
        padding-bottom: 3rem !important;
      }

      .pl-sm-5,
      .px-sm-5 {
        padding-left: 3rem !important;
      }

      .m-sm-n1 {
        margin: -0.25rem !important;
      }

      .mt-sm-n1,
      .my-sm-n1 {
        margin-top: -0.25rem !important;
      }

      .mr-sm-n1,
      .mx-sm-n1 {
        margin-right: -0.25rem !important;
      }

      .mb-sm-n1,
      .my-sm-n1 {
        margin-bottom: -0.25rem !important;
      }

      .ml-sm-n1,
      .mx-sm-n1 {
        margin-left: -0.25rem !important;
      }

      .m-sm-n2 {
        margin: -0.5rem !important;
      }

      .mt-sm-n2,
      .my-sm-n2 {
        margin-top: -0.5rem !important;
      }

      .mr-sm-n2,
      .mx-sm-n2 {
        margin-right: -0.5rem !important;
      }

      .mb-sm-n2,
      .my-sm-n2 {
        margin-bottom: -0.5rem !important;
      }

      .ml-sm-n2,
      .mx-sm-n2 {
        margin-left: -0.5rem !important;
      }

      .m-sm-n3 {
        margin: -1rem !important;
      }

      .mt-sm-n3,
      .my-sm-n3 {
        margin-top: -1rem !important;
      }

      .mr-sm-n3,
      .mx-sm-n3 {
        margin-right: -1rem !important;
      }

      .mb-sm-n3,
      .my-sm-n3 {
        margin-bottom: -1rem !important;
      }

      .ml-sm-n3,
      .mx-sm-n3 {
        margin-left: -1rem !important;
      }

      .m-sm-n4 {
        margin: -1.5rem !important;
      }

      .mt-sm-n4,
      .my-sm-n4 {
        margin-top: -1.5rem !important;
      }

      .mr-sm-n4,
      .mx-sm-n4 {
        margin-right: -1.5rem !important;
      }

      .mb-sm-n4,
      .my-sm-n4 {
        margin-bottom: -1.5rem !important;
      }

      .ml-sm-n4,
      .mx-sm-n4 {
        margin-left: -1.5rem !important;
      }

      .m-sm-n5 {
        margin: -3rem !important;
      }

      .mt-sm-n5,
      .my-sm-n5 {
        margin-top: -3rem !important;
      }

      .mr-sm-n5,
      .mx-sm-n5 {
        margin-right: -3rem !important;
      }

      .mb-sm-n5,
      .my-sm-n5 {
        margin-bottom: -3rem !important;
      }

      .ml-sm-n5,
      .mx-sm-n5 {
        margin-left: -3rem !important;
      }

      .m-sm-auto {
        margin: auto !important;
      }

      .mt-sm-auto,
      .my-sm-auto {
        margin-top: auto !important;
      }

      .mr-sm-auto,
      .mx-sm-auto {
        margin-right: auto !important;
      }

      .mb-sm-auto,
      .my-sm-auto {
        margin-bottom: auto !important;
      }

      .ml-sm-auto,
      .mx-sm-auto {
        margin-left: auto !important;
      }
    }

    @media (min-width: 768px) {
      .m-md-0 {
        margin: 0 !important;
      }

      .mt-md-0,
      .my-md-0 {
        margin-top: 0 !important;
      }

      .mr-md-0,
      .mx-md-0 {
        margin-right: 0 !important;
      }

      .mb-md-0,
      .my-md-0 {
        margin-bottom: 0 !important;
      }

      .ml-md-0,
      .mx-md-0 {
        margin-left: 0 !important;
      }

      .m-md-1 {
        margin: 0.25rem !important;
      }

      .mt-md-1,
      .my-md-1 {
        margin-top: 0.25rem !important;
      }

      .mr-md-1,
      .mx-md-1 {
        margin-right: 0.25rem !important;
      }

      .mb-md-1,
      .my-md-1 {
        margin-bottom: 0.25rem !important;
      }

      .ml-md-1,
      .mx-md-1 {
        margin-left: 0.25rem !important;
      }

      .m-md-2 {
        margin: 0.5rem !important;
      }

      .mt-md-2,
      .my-md-2 {
        margin-top: 0.5rem !important;
      }

      .mr-md-2,
      .mx-md-2 {
        margin-right: 0.5rem !important;
      }

      .mb-md-2,
      .my-md-2 {
        margin-bottom: 0.5rem !important;
      }

      .ml-md-2,
      .mx-md-2 {
        margin-left: 0.5rem !important;
      }

      .m-md-3 {
        margin: 1rem !important;
      }

      .mt-md-3,
      .my-md-3 {
        margin-top: 1rem !important;
      }

      .mr-md-3,
      .mx-md-3 {
        margin-right: 1rem !important;
      }

      .mb-md-3,
      .my-md-3 {
        margin-bottom: 1rem !important;
      }

      .ml-md-3,
      .mx-md-3 {
        margin-left: 1rem !important;
      }

      .m-md-4 {
        margin: 1.5rem !important;
      }

      .mt-md-4,
      .my-md-4 {
        margin-top: 1.5rem !important;
      }

      .mr-md-4,
      .mx-md-4 {
        margin-right: 1.5rem !important;
      }

      .mb-md-4,
      .my-md-4 {
        margin-bottom: 1.5rem !important;
      }

      .ml-md-4,
      .mx-md-4 {
        margin-left: 1.5rem !important;
      }

      .m-md-5 {
        margin: 3rem !important;
      }

      .mt-md-5,
      .my-md-5 {
        margin-top: 3rem !important;
      }

      .mr-md-5,
      .mx-md-5 {
        margin-right: 3rem !important;
      }

      .mb-md-5,
      .my-md-5 {
        margin-bottom: 3rem !important;
      }

      .ml-md-5,
      .mx-md-5 {
        margin-left: 3rem !important;
      }

      .p-md-0 {
        padding: 0 !important;
      }

      .pt-md-0,
      .py-md-0 {
        padding-top: 0 !important;
      }

      .pr-md-0,
      .px-md-0 {
        padding-right: 0 !important;
      }

      .pb-md-0,
      .py-md-0 {
        padding-bottom: 0 !important;
      }

      .pl-md-0,
      .px-md-0 {
        padding-left: 0 !important;
      }

      .p-md-1 {
        padding: 0.25rem !important;
      }

      .pt-md-1,
      .py-md-1 {
        padding-top: 0.25rem !important;
      }

      .pr-md-1,
      .px-md-1 {
        padding-right: 0.25rem !important;
      }

      .pb-md-1,
      .py-md-1 {
        padding-bottom: 0.25rem !important;
      }

      .pl-md-1,
      .px-md-1 {
        padding-left: 0.25rem !important;
      }

      .p-md-2 {
        padding: 0.5rem !important;
      }

      .pt-md-2,
      .py-md-2 {
        padding-top: 0.5rem !important;
      }

      .pr-md-2,
      .px-md-2 {
        padding-right: 0.5rem !important;
      }

      .pb-md-2,
      .py-md-2 {
        padding-bottom: 0.5rem !important;
      }

      .pl-md-2,
      .px-md-2 {
        padding-left: 0.5rem !important;
      }

      .p-md-3 {
        padding: 1rem !important;
      }

      .pt-md-3,
      .py-md-3 {
        padding-top: 1rem !important;
      }

      .pr-md-3,
      .px-md-3 {
        padding-right: 1rem !important;
      }

      .pb-md-3,
      .py-md-3 {
        padding-bottom: 1rem !important;
      }

      .pl-md-3,
      .px-md-3 {
        padding-left: 1rem !important;
      }

      .p-md-4 {
        padding: 1.5rem !important;
      }

      .pt-md-4,
      .py-md-4 {
        padding-top: 1.5rem !important;
      }

      .pr-md-4,
      .px-md-4 {
        padding-right: 1.5rem !important;
      }

      .pb-md-4,
      .py-md-4 {
        padding-bottom: 1.5rem !important;
      }

      .pl-md-4,
      .px-md-4 {
        padding-left: 1.5rem !important;
      }

      .p-md-5 {
        padding: 3rem !important;
      }

      .pt-md-5,
      .py-md-5 {
        padding-top: 3rem !important;
      }

      .pr-md-5,
      .px-md-5 {
        padding-right: 3rem !important;
      }

      .pb-md-5,
      .py-md-5 {
        padding-bottom: 3rem !important;
      }

      .pl-md-5,
      .px-md-5 {
        padding-left: 3rem !important;
      }

      .m-md-n1 {
        margin: -0.25rem !important;
      }

      .mt-md-n1,
      .my-md-n1 {
        margin-top: -0.25rem !important;
      }

      .mr-md-n1,
      .mx-md-n1 {
        margin-right: -0.25rem !important;
      }

      .mb-md-n1,
      .my-md-n1 {
        margin-bottom: -0.25rem !important;
      }

      .ml-md-n1,
      .mx-md-n1 {
        margin-left: -0.25rem !important;
      }

      .m-md-n2 {
        margin: -0.5rem !important;
      }

      .mt-md-n2,
      .my-md-n2 {
        margin-top: -0.5rem !important;
      }

      .mr-md-n2,
      .mx-md-n2 {
        margin-right: -0.5rem !important;
      }

      .mb-md-n2,
      .my-md-n2 {
        margin-bottom: -0.5rem !important;
      }

      .ml-md-n2,
      .mx-md-n2 {
        margin-left: -0.5rem !important;
      }

      .m-md-n3 {
        margin: -1rem !important;
      }

      .mt-md-n3,
      .my-md-n3 {
        margin-top: -1rem !important;
      }

      .mr-md-n3,
      .mx-md-n3 {
        margin-right: -1rem !important;
      }

      .mb-md-n3,
      .my-md-n3 {
        margin-bottom: -1rem !important;
      }

      .ml-md-n3,
      .mx-md-n3 {
        margin-left: -1rem !important;
      }

      .m-md-n4 {
        margin: -1.5rem !important;
      }

      .mt-md-n4,
      .my-md-n4 {
        margin-top: -1.5rem !important;
      }

      .mr-md-n4,
      .mx-md-n4 {
        margin-right: -1.5rem !important;
      }

      .mb-md-n4,
      .my-md-n4 {
        margin-bottom: -1.5rem !important;
      }

      .ml-md-n4,
      .mx-md-n4 {
        margin-left: -1.5rem !important;
      }

      .m-md-n5 {
        margin: -3rem !important;
      }

      .mt-md-n5,
      .my-md-n5 {
        margin-top: -3rem !important;
      }

      .mr-md-n5,
      .mx-md-n5 {
        margin-right: -3rem !important;
      }

      .mb-md-n5,
      .my-md-n5 {
        margin-bottom: -3rem !important;
      }

      .ml-md-n5,
      .mx-md-n5 {
        margin-left: -3rem !important;
      }

      .m-md-auto {
        margin: auto !important;
      }

      .mt-md-auto,
      .my-md-auto {
        margin-top: auto !important;
      }

      .mr-md-auto,
      .mx-md-auto {
        margin-right: auto !important;
      }

      .mb-md-auto,
      .my-md-auto {
        margin-bottom: auto !important;
      }

      .ml-md-auto,
      .mx-md-auto {
        margin-left: auto !important;
      }
    }

    @media (min-width: 992px) {
      .m-lg-0 {
        margin: 0 !important;
      }

      .mt-lg-0,
      .my-lg-0 {
        margin-top: 0 !important;
      }

      .mr-lg-0,
      .mx-lg-0 {
        margin-right: 0 !important;
      }

      .mb-lg-0,
      .my-lg-0 {
        margin-bottom: 0 !important;
      }

      .ml-lg-0,
      .mx-lg-0 {
        margin-left: 0 !important;
      }

      .m-lg-1 {
        margin: 0.25rem !important;
      }

      .mt-lg-1,
      .my-lg-1 {
        margin-top: 0.25rem !important;
      }

      .mr-lg-1,
      .mx-lg-1 {
        margin-right: 0.25rem !important;
      }

      .mb-lg-1,
      .my-lg-1 {
        margin-bottom: 0.25rem !important;
      }

      .ml-lg-1,
      .mx-lg-1 {
        margin-left: 0.25rem !important;
      }

      .m-lg-2 {
        margin: 0.5rem !important;
      }

      .mt-lg-2,
      .my-lg-2 {
        margin-top: 0.5rem !important;
      }

      .mr-lg-2,
      .mx-lg-2 {
        margin-right: 0.5rem !important;
      }

      .mb-lg-2,
      .my-lg-2 {
        margin-bottom: 0.5rem !important;
      }

      .ml-lg-2,
      .mx-lg-2 {
        margin-left: 0.5rem !important;
      }

      .m-lg-3 {
        margin: 1rem !important;
      }

      .mt-lg-3,
      .my-lg-3 {
        margin-top: 1rem !important;
      }

      .mr-lg-3,
      .mx-lg-3 {
        margin-right: 1rem !important;
      }

      .mb-lg-3,
      .my-lg-3 {
        margin-bottom: 1rem !important;
      }

      .ml-lg-3,
      .mx-lg-3 {
        margin-left: 1rem !important;
      }

      .m-lg-4 {
        margin: 1.5rem !important;
      }

      .mt-lg-4,
      .my-lg-4 {
        margin-top: 1.5rem !important;
      }

      .mr-lg-4,
      .mx-lg-4 {
        margin-right: 1.5rem !important;
      }

      .mb-lg-4,
      .my-lg-4 {
        margin-bottom: 1.5rem !important;
      }

      .ml-lg-4,
      .mx-lg-4 {
        margin-left: 1.5rem !important;
      }

      .m-lg-5 {
        margin: 3rem !important;
      }

      .mt-lg-5,
      .my-lg-5 {
        margin-top: 3rem !important;
      }

      .mr-lg-5,
      .mx-lg-5 {
        margin-right: 3rem !important;
      }

      .mb-lg-5,
      .my-lg-5 {
        margin-bottom: 3rem !important;
      }

      .ml-lg-5,
      .mx-lg-5 {
        margin-left: 3rem !important;
      }

      .p-lg-0 {
        padding: 0 !important;
      }

      .pt-lg-0,
      .py-lg-0 {
        padding-top: 0 !important;
      }

      .pr-lg-0,
      .px-lg-0 {
        padding-right: 0 !important;
      }

      .pb-lg-0,
      .py-lg-0 {
        padding-bottom: 0 !important;
      }

      .pl-lg-0,
      .px-lg-0 {
        padding-left: 0 !important;
      }

      .p-lg-1 {
        padding: 0.25rem !important;
      }

      .pt-lg-1,
      .py-lg-1 {
        padding-top: 0.25rem !important;
      }

      .pr-lg-1,
      .px-lg-1 {
        padding-right: 0.25rem !important;
      }

      .pb-lg-1,
      .py-lg-1 {
        padding-bottom: 0.25rem !important;
      }

      .pl-lg-1,
      .px-lg-1 {
        padding-left: 0.25rem !important;
      }

      .p-lg-2 {
        padding: 0.5rem !important;
      }

      .pt-lg-2,
      .py-lg-2 {
        padding-top: 0.5rem !important;
      }

      .pr-lg-2,
      .px-lg-2 {
        padding-right: 0.5rem !important;
      }

      .pb-lg-2,
      .py-lg-2 {
        padding-bottom: 0.5rem !important;
      }

      .pl-lg-2,
      .px-lg-2 {
        padding-left: 0.5rem !important;
      }

      .p-lg-3 {
        padding: 1rem !important;
      }

      .pt-lg-3,
      .py-lg-3 {
        padding-top: 1rem !important;
      }

      .pr-lg-3,
      .px-lg-3 {
        padding-right: 1rem !important;
      }

      .pb-lg-3,
      .py-lg-3 {
        padding-bottom: 1rem !important;
      }

      .pl-lg-3,
      .px-lg-3 {
        padding-left: 1rem !important;
      }

      .p-lg-4 {
        padding: 1.5rem !important;
      }

      .pt-lg-4,
      .py-lg-4 {
        padding-top: 1.5rem !important;
      }

      .pr-lg-4,
      .px-lg-4 {
        padding-right: 1.5rem !important;
      }

      .pb-lg-4,
      .py-lg-4 {
        padding-bottom: 1.5rem !important;
      }

      .pl-lg-4,
      .px-lg-4 {
        padding-left: 1.5rem !important;
      }

      .p-lg-5 {
        padding: 3rem !important;
      }

      .pt-lg-5,
      .py-lg-5 {
        padding-top: 3rem !important;
      }

      .pr-lg-5,
      .px-lg-5 {
        padding-right: 3rem !important;
      }

      .pb-lg-5,
      .py-lg-5 {
        padding-bottom: 3rem !important;
      }

      .pl-lg-5,
      .px-lg-5 {
        padding-left: 3rem !important;
      }

      .m-lg-n1 {
        margin: -0.25rem !important;
      }

      .mt-lg-n1,
      .my-lg-n1 {
        margin-top: -0.25rem !important;
      }

      .mr-lg-n1,
      .mx-lg-n1 {
        margin-right: -0.25rem !important;
      }

      .mb-lg-n1,
      .my-lg-n1 {
        margin-bottom: -0.25rem !important;
      }

      .ml-lg-n1,
      .mx-lg-n1 {
        margin-left: -0.25rem !important;
      }

      .m-lg-n2 {
        margin: -0.5rem !important;
      }

      .mt-lg-n2,
      .my-lg-n2 {
        margin-top: -0.5rem !important;
      }

      .mr-lg-n2,
      .mx-lg-n2 {
        margin-right: -0.5rem !important;
      }

      .mb-lg-n2,
      .my-lg-n2 {
        margin-bottom: -0.5rem !important;
      }

      .ml-lg-n2,
      .mx-lg-n2 {
        margin-left: -0.5rem !important;
      }

      .m-lg-n3 {
        margin: -1rem !important;
      }

      .mt-lg-n3,
      .my-lg-n3 {
        margin-top: -1rem !important;
      }

      .mr-lg-n3,
      .mx-lg-n3 {
        margin-right: -1rem !important;
      }

      .mb-lg-n3,
      .my-lg-n3 {
        margin-bottom: -1rem !important;
      }

      .ml-lg-n3,
      .mx-lg-n3 {
        margin-left: -1rem !important;
      }

      .m-lg-n4 {
        margin: -1.5rem !important;
      }

      .mt-lg-n4,
      .my-lg-n4 {
        margin-top: -1.5rem !important;
      }

      .mr-lg-n4,
      .mx-lg-n4 {
        margin-right: -1.5rem !important;
      }

      .mb-lg-n4,
      .my-lg-n4 {
        margin-bottom: -1.5rem !important;
      }

      .ml-lg-n4,
      .mx-lg-n4 {
        margin-left: -1.5rem !important;
      }

      .m-lg-n5 {
        margin: -3rem !important;
      }

      .mt-lg-n5,
      .my-lg-n5 {
        margin-top: -3rem !important;
      }

      .mr-lg-n5,
      .mx-lg-n5 {
        margin-right: -3rem !important;
      }

      .mb-lg-n5,
      .my-lg-n5 {
        margin-bottom: -3rem !important;
      }

      .ml-lg-n5,
      .mx-lg-n5 {
        margin-left: -3rem !important;
      }

      .m-lg-auto {
        margin: auto !important;
      }

      .mt-lg-auto,
      .my-lg-auto {
        margin-top: auto !important;
      }

      .mr-lg-auto,
      .mx-lg-auto {
        margin-right: auto !important;
      }

      .mb-lg-auto,
      .my-lg-auto {
        margin-bottom: auto !important;
      }

      .ml-lg-auto,
      .mx-lg-auto {
        margin-left: auto !important;
      }
    }

    @media (min-width: 1200px) {
      .m-xl-0 {
        margin: 0 !important;
      }

      .mt-xl-0,
      .my-xl-0 {
        margin-top: 0 !important;
      }

      .mr-xl-0,
      .mx-xl-0 {
        margin-right: 0 !important;
      }

      .mb-xl-0,
      .my-xl-0 {
        margin-bottom: 0 !important;
      }

      .ml-xl-0,
      .mx-xl-0 {
        margin-left: 0 !important;
      }

      .m-xl-1 {
        margin: 0.25rem !important;
      }

      .mt-xl-1,
      .my-xl-1 {
        margin-top: 0.25rem !important;
      }

      .mr-xl-1,
      .mx-xl-1 {
        margin-right: 0.25rem !important;
      }

      .mb-xl-1,
      .my-xl-1 {
        margin-bottom: 0.25rem !important;
      }

      .ml-xl-1,
      .mx-xl-1 {
        margin-left: 0.25rem !important;
      }

      .m-xl-2 {
        margin: 0.5rem !important;
      }

      .mt-xl-2,
      .my-xl-2 {
        margin-top: 0.5rem !important;
      }

      .mr-xl-2,
      .mx-xl-2 {
        margin-right: 0.5rem !important;
      }

      .mb-xl-2,
      .my-xl-2 {
        margin-bottom: 0.5rem !important;
      }

      .ml-xl-2,
      .mx-xl-2 {
        margin-left: 0.5rem !important;
      }

      .m-xl-3 {
        margin: 1rem !important;
      }

      .mt-xl-3,
      .my-xl-3 {
        margin-top: 1rem !important;
      }

      .mr-xl-3,
      .mx-xl-3 {
        margin-right: 1rem !important;
      }

      .mb-xl-3,
      .my-xl-3 {
        margin-bottom: 1rem !important;
      }

      .ml-xl-3,
      .mx-xl-3 {
        margin-left: 1rem !important;
      }

      .m-xl-4 {
        margin: 1.5rem !important;
      }

      .mt-xl-4,
      .my-xl-4 {
        margin-top: 1.5rem !important;
      }

      .mr-xl-4,
      .mx-xl-4 {
        margin-right: 1.5rem !important;
      }

      .mb-xl-4,
      .my-xl-4 {
        margin-bottom: 1.5rem !important;
      }

      .ml-xl-4,
      .mx-xl-4 {
        margin-left: 1.5rem !important;
      }

      .m-xl-5 {
        margin: 3rem !important;
      }

      .mt-xl-5,
      .my-xl-5 {
        margin-top: 3rem !important;
      }

      .mr-xl-5,
      .mx-xl-5 {
        margin-right: 3rem !important;
      }

      .mb-xl-5,
      .my-xl-5 {
        margin-bottom: 3rem !important;
      }

      .ml-xl-5,
      .mx-xl-5 {
        margin-left: 3rem !important;
      }

      .p-xl-0 {
        padding: 0 !important;
      }

      .pt-xl-0,
      .py-xl-0 {
        padding-top: 0 !important;
      }

      .pr-xl-0,
      .px-xl-0 {
        padding-right: 0 !important;
      }

      .pb-xl-0,
      .py-xl-0 {
        padding-bottom: 0 !important;
      }

      .pl-xl-0,
      .px-xl-0 {
        padding-left: 0 !important;
      }

      .p-xl-1 {
        padding: 0.25rem !important;
      }

      .pt-xl-1,
      .py-xl-1 {
        padding-top: 0.25rem !important;
      }

      .pr-xl-1,
      .px-xl-1 {
        padding-right: 0.25rem !important;
      }

      .pb-xl-1,
      .py-xl-1 {
        padding-bottom: 0.25rem !important;
      }

      .pl-xl-1,
      .px-xl-1 {
        padding-left: 0.25rem !important;
      }

      .p-xl-2 {
        padding: 0.5rem !important;
      }

      .pt-xl-2,
      .py-xl-2 {
        padding-top: 0.5rem !important;
      }

      .pr-xl-2,
      .px-xl-2 {
        padding-right: 0.5rem !important;
      }

      .pb-xl-2,
      .py-xl-2 {
        padding-bottom: 0.5rem !important;
      }

      .pl-xl-2,
      .px-xl-2 {
        padding-left: 0.5rem !important;
      }

      .p-xl-3 {
        padding: 1rem !important;
      }

      .pt-xl-3,
      .py-xl-3 {
        padding-top: 1rem !important;
      }

      .pr-xl-3,
      .px-xl-3 {
        padding-right: 1rem !important;
      }

      .pb-xl-3,
      .py-xl-3 {
        padding-bottom: 1rem !important;
      }

      .pl-xl-3,
      .px-xl-3 {
        padding-left: 1rem !important;
      }

      .p-xl-4 {
        padding: 1.5rem !important;
      }

      .pt-xl-4,
      .py-xl-4 {
        padding-top: 1.5rem !important;
      }

      .pr-xl-4,
      .px-xl-4 {
        padding-right: 1.5rem !important;
      }

      .pb-xl-4,
      .py-xl-4 {
        padding-bottom: 1.5rem !important;
      }

      .pl-xl-4,
      .px-xl-4 {
        padding-left: 1.5rem !important;
      }

      .p-xl-5 {
        padding: 3rem !important;
      }

      .pt-xl-5,
      .py-xl-5 {
        padding-top: 3rem !important;
      }

      .pr-xl-5,
      .px-xl-5 {
        padding-right: 3rem !important;
      }

      .pb-xl-5,
      .py-xl-5 {
        padding-bottom: 3rem !important;
      }

      .pl-xl-5,
      .px-xl-5 {
        padding-left: 3rem !important;
      }

      .m-xl-n1 {
        margin: -0.25rem !important;
      }

      .mt-xl-n1,
      .my-xl-n1 {
        margin-top: -0.25rem !important;
      }

      .mr-xl-n1,
      .mx-xl-n1 {
        margin-right: -0.25rem !important;
      }

      .mb-xl-n1,
      .my-xl-n1 {
        margin-bottom: -0.25rem !important;
      }

      .ml-xl-n1,
      .mx-xl-n1 {
        margin-left: -0.25rem !important;
      }

      .m-xl-n2 {
        margin: -0.5rem !important;
      }

      .mt-xl-n2,
      .my-xl-n2 {
        margin-top: -0.5rem !important;
      }

      .mr-xl-n2,
      .mx-xl-n2 {
        margin-right: -0.5rem !important;
      }

      .mb-xl-n2,
      .my-xl-n2 {
        margin-bottom: -0.5rem !important;
      }

      .ml-xl-n2,
      .mx-xl-n2 {
        margin-left: -0.5rem !important;
      }

      .m-xl-n3 {
        margin: -1rem !important;
      }

      .mt-xl-n3,
      .my-xl-n3 {
        margin-top: -1rem !important;
      }

      .mr-xl-n3,
      .mx-xl-n3 {
        margin-right: -1rem !important;
      }

      .mb-xl-n3,
      .my-xl-n3 {
        margin-bottom: -1rem !important;
      }

      .ml-xl-n3,
      .mx-xl-n3 {
        margin-left: -1rem !important;
      }

      .m-xl-n4 {
        margin: -1.5rem !important;
      }

      .mt-xl-n4,
      .my-xl-n4 {
        margin-top: -1.5rem !important;
      }

      .mr-xl-n4,
      .mx-xl-n4 {
        margin-right: -1.5rem !important;
      }

      .mb-xl-n4,
      .my-xl-n4 {
        margin-bottom: -1.5rem !important;
      }

      .ml-xl-n4,
      .mx-xl-n4 {
        margin-left: -1.5rem !important;
      }

      .m-xl-n5 {
        margin: -3rem !important;
      }

      .mt-xl-n5,
      .my-xl-n5 {
        margin-top: -3rem !important;
      }

      .mr-xl-n5,
      .mx-xl-n5 {
        margin-right: -3rem !important;
      }

      .mb-xl-n5,
      .my-xl-n5 {
        margin-bottom: -3rem !important;
      }

      .ml-xl-n5,
      .mx-xl-n5 {
        margin-left: -3rem !important;
      }

      .m-xl-auto {
        margin: auto !important;
      }

      .mt-xl-auto,
      .my-xl-auto {
        margin-top: auto !important;
      }

      .mr-xl-auto,
      .mx-xl-auto {
        margin-right: auto !important;
      }

      .mb-xl-auto,
      .my-xl-auto {
        margin-bottom: auto !important;
      }

      .ml-xl-auto,
      .mx-xl-auto {
        margin-left: auto !important;
      }
    }

    .text-monospace {
      font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important;
    }

    .text-justify {
      text-align: justify !important;
    }

    .text-wrap {
      white-space: normal !important;
    }

    .text-nowrap {
      white-space: nowrap !important;
    }

    .text-truncate {
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }

    .text-left {
      text-align: left !important;
    }

    .text-right {
      text-align: right !important;
    }

    .text-center {
      text-align: center !important;
    }

    @media (min-width: 576px) {
      .text-sm-left {
        text-align: left !important;
      }

      .text-sm-right {
        text-align: right !important;
      }

      .text-sm-center {
        text-align: center !important;
      }
    }

    @media (min-width: 768px) {
      .text-md-left {
        text-align: left !important;
      }

      .text-md-right {
        text-align: right !important;
      }

      .text-md-center {
        text-align: center !important;
      }
    }

    @media (min-width: 992px) {
      .text-lg-left {
        text-align: left !important;
      }

      .text-lg-right {
        text-align: right !important;
      }

      .text-lg-center {
        text-align: center !important;
      }
    }

    @media (min-width: 1200px) {
      .text-xl-left {
        text-align: left !important;
      }

      .text-xl-right {
        text-align: right !important;
      }

      .text-xl-center {
        text-align: center !important;
      }
    }

    .text-lowercase {
      text-transform: lowercase !important;
    }

    .text-uppercase {
      text-transform: uppercase !important;
    }

    .text-capitalize {
      text-transform: capitalize !important;
    }

    .font-weight-light {
      font-weight: 300 !important;
    }

    .font-weight-lighter {
      font-weight: lighter !important;
    }

    .font-weight-normal {
      font-weight: 400 !important;
    }

    .font-weight-bold {
      font-weight: 700 !important;
    }

    .font-weight-bolder {
      font-weight: bolder !important;
    }

    .font-italic {
      font-style: italic !important;
    }

    .text-white {
      color: #fff !important;
    }

    .text-primary {
      color: #007bff !important;
    }

    a.text-primary:hover,
    a.text-primary:focus {
      color: #0056b3 !important;
    }

    .text-secondary {
      color: #6c757d !important;
    }

    a.text-secondary:hover,
    a.text-secondary:focus {
      color: #494f54 !important;
    }

    .text-success {
      color: #28a745 !important;
    }

    a.text-success:hover,
    a.text-success:focus {
      color: #19692c !important;
    }

    .text-info {
      color: #17a2b8 !important;
    }

    a.text-info:hover,
    a.text-info:focus {
      color: #0f6674 !important;
    }

    .text-warning {
      color: #ffc107 !important;
    }

    a.text-warning:hover,
    a.text-warning:focus {
      color: #ba8b00 !important;
    }

    .text-danger {
      color: #dc3545 !important;
    }

    a.text-danger:hover,
    a.text-danger:focus {
      color: #a71d2a !important;
    }

    .text-light {
      color: #f8f9fa !important;
    }

    a.text-light:hover,
    a.text-light:focus {
      color: #cbd3da !important;
    }

    .text-dark {
      color: #343a40 !important;
    }

    a.text-dark:hover,
    a.text-dark:focus {
      color: #121416 !important;
    }

    .text-body {
      color: #212529 !important;
    }

    .text-muted {
      color: #6c757d !important;
    }

    .text-black-50 {
      color: rgba(0, 0, 0, 0.5) !important;
    }

    .text-white-50 {
      color: rgba(255, 255, 255, 0.5) !important;
    }

    .text-hide {
      font: 0/0 a;
      color: transparent;
      text-shadow: none;
      background-color: transparent;
      border: 0;
    }

    .text-decoration-none {
      text-decoration: none !important;
    }

    .text-break {
      word-break: break-word !important;
      overflow-wrap: break-word !important;
    }

    .text-reset {
      color: inherit !important;
    }

    .visible {
      visibility: visible !important;
    }

    .invisible {
      visibility: hidden !important;
    }

    @media print {

      *,
      *::before,
      *::after {
        text-shadow: none !important;
        box-shadow: none !important;
      }

      a:not(.btn) {
        text-decoration: underline;
      }

      abbr[title]::after {
        content: " ("attr(title) ")";
      }

      pre {
        white-space: pre-wrap !important;
      }

      pre,
      blockquote {
        border: 1px solid #adb5bd;
        page-break-inside: avoid;
      }

      thead {
        display: table-header-group;
      }

      tr,
      img {
        page-break-inside: avoid;
      }

      p,
      h2,
      h3 {
        orphans: 3;
        widows: 3;
      }

      h2,
      h3 {
        page-break-after: avoid;
      }

      @page {
        size: a3;
      }

      body {
        min-width: 992px !important;
      }

      .container {
        min-width: 992px !important;
      }

      .navbar {
        display: none;
      }

      .badge {
        border: 1px solid #000;
      }

      .table {
        border-collapse: collapse !important;
      }

      .table td,
      .table th {
        background-color: #fff !important;
      }

      .table-bordered th,
      .table-bordered td {
        border: 1px solid #dee2e6 !important;
      }

      .table-dark {
        color: inherit;
      }

      .table-dark th,
      .table-dark td,
      .table-dark thead th,
      .table-dark tbody+tbody {
        border-color: #dee2e6;
      }

      .table .thead-dark th {
        color: inherit;
        border-color: #dee2e6;
      }
    }

    /*# sourceMappingURL=bootstrap.css.map */

  </style>
  <style type="text/css">
    .cdk-global-overlay-wrapper,
    .cdk-overlay-container {
      pointer-events: none;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%
    }

    .cdk-overlay-container {
      position: fixed;
      z-index: 1000
    }

    .cdk-overlay-container:empty {
      display: none
    }

    .cdk-global-overlay-wrapper {
      display: flex;
      position: absolute;
      z-index: 1000
    }

    .cdk-overlay-pane {
      position: absolute;
      pointer-events: auto;
      box-sizing: border-box;
      z-index: 1000;
      display: flex;
      max-width: 100%;
      max-height: 100%
    }

    .cdk-overlay-backdrop {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      z-index: 1000;
      pointer-events: auto;
      -webkit-tap-highlight-color: transparent;
      transition: opacity 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
      opacity: 0
    }

    .cdk-overlay-backdrop.cdk-overlay-backdrop-showing {
      opacity: 1
    }

    @media screen and (-ms-high-contrast: active) {
      .cdk-overlay-backdrop.cdk-overlay-backdrop-showing {
        opacity: .6
      }
    }

    .cdk-overlay-dark-backdrop {
      background: rgba(0, 0, 0, 0.32)
    }

    .cdk-overlay-transparent-backdrop,
    .cdk-overlay-transparent-backdrop.cdk-overlay-backdrop-showing {
      opacity: 0
    }

    .cdk-overlay-connected-position-bounding-box {
      position: absolute;
      z-index: 1000;
      display: flex;
      flex-direction: column;
      min-width: 1px;
      min-height: 1px
    }

    .cdk-global-scrollblock {
      position: fixed;
      width: 100%;
      overflow-y: scroll
    }

    .nb-global-scrollblock {
      position: static;
      width: auto;
      overflow: hidden
    }

    /*!
 * @license
 * Copyright Akveo. All Rights Reserved.
 * Licensed under the MIT License. See License.txt in the project root for license information.
 */
    /*!
 * @license
 * Copyright Akveo. All Rights Reserved.
 * Licensed under the MIT License. See License.txt in the project root for license information.
 */
    html {
      box-sizing: border-box
    }

    *,
    *::before,
    *::after {
      box-sizing: inherit
    }

    html,
    body {
      margin: 0;
      padding: 0
    }

    html {
      line-height: 1.15;
      -webkit-text-size-adjust: 100%
    }

    body {
      margin: 0
    }

    h1 {
      font-size: 2em;
      margin: 0.67em 0
    }

    hr {
      box-sizing: content-box;
      height: 0;
      overflow: visible
    }

    pre {
      font-family: monospace, monospace;
      font-size: 1em
    }

    a {
      background-color: transparent
    }

    abbr[title] {
      border-bottom: none;
      text-decoration: underline;
      -webkit-text-decoration: underline dotted;
      text-decoration: underline dotted
    }

    b,
    strong {
      font-weight: bolder
    }

    code,
    kbd,
    samp {
      font-family: monospace, monospace;
      font-size: 1em
    }

    small {
      font-size: 80%
    }

    sub,
    sup {
      font-size: 75%;
      line-height: 0;
      position: relative;
      vertical-align: baseline
    }

    sub {
      bottom: -0.25em
    }

    sup {
      top: -0.5em
    }

    img {
      border-style: none
    }

    button,
    input,
    optgroup,
    select,
    textarea {
      font-family: inherit;
      font-size: 100%;
      line-height: 1.15;
      margin: 0
    }

    button,
    input {
      overflow: visible
    }

    button,
    select {
      text-transform: none
    }

    button,
    [type='button'],
    [type='reset'],
    [type='submit'] {
      -webkit-appearance: button
    }

    button::-moz-focus-inner,
    [type='button']::-moz-focus-inner,
    [type='reset']::-moz-focus-inner,
    [type='submit']::-moz-focus-inner {
      border-style: none;
      padding: 0
    }

    button:-moz-focusring,
    [type='button']:-moz-focusring,
    [type='reset']:-moz-focusring,
    [type='submit']:-moz-focusring {
      outline: 1px dotted ButtonText
    }

    fieldset {
      padding: 0.35em 0.75em 0.625em
    }

    legend {
      box-sizing: border-box;
      color: inherit;
      display: table;
      max-width: 100%;
      padding: 0;
      white-space: normal
    }

    progress {
      vertical-align: baseline
    }

    textarea {
      overflow: auto
    }

    [type='checkbox'],
    [type='radio'] {
      box-sizing: border-box;
      padding: 0
    }

    [type='number']::-webkit-inner-spin-button,
    [type='number']::-webkit-outer-spin-button {
      height: auto
    }

    [type='search'] {
      -webkit-appearance: textfield;
      outline-offset: -2px
    }

    [type='search']::-webkit-search-decoration {
      -webkit-appearance: none
    }

    ::-webkit-file-upload-button {
      -webkit-appearance: button;
      font: inherit
    }

    details {
      display: block
    }

    summary {
      display: list-item
    }

    template {
      display: none
    }

    [hidden] {
      display: none
    }

    /*!
 * @license
 * Copyright Akveo. All Rights Reserved.
 * Licensed under the MIT License. See License.txt in the project root for license information.
 */
    .visually-hidden {
      position: absolute !important;
      height: 1px;
      width: 1px;
      overflow: hidden;
      clip: rect(1px 1px 1px 1px);
      clip: rect(1px, 1px, 1px, 1px)
    }

    .nb-theme-default nb-layout .scrollable-container {
      scrollbar-face-color: #e4e9f2;
      scrollbar-track-color: #f7f9fc
    }

    .nb-theme-default nb-layout .scrollable-container::-webkit-scrollbar {
      width: .3125rem;
      height: .3125rem
    }

    .nb-theme-default nb-layout .scrollable-container::-webkit-scrollbar-thumb {
      background: #e4e9f2;
      cursor: pointer;
      border-radius: .15625rem
    }

    .nb-theme-default nb-layout .scrollable-container::-webkit-scrollbar-track {
      background: #f7f9fc
    }

    .nb-theme-default nb-layout.with-scroll .scrollable-container {
      overflow: auto;
      height: 100vh;
      display: block
    }

    @media (max-width: 767.98px) {
      .nb-theme-default nb-layout.with-scroll .scrollable-container {
        overflow-y: scroll;
        -webkit-overflow-scrolling: touch
      }
    }

    .nb-theme-default .layout {
      min-width: 300px
    }

    .nb-theme-default nb-layout.window-mode {
      background: #edf1f7;
      display: block
    }

    .nb-theme-default nb-layout.window-mode .scrollable-container {
      max-width: 1920px;
      margin: 0 auto
    }

    .nb-theme-default nb-layout.window-mode .layout nb-layout-header {
      max-width: 1920px;
      margin-left: auto;
      margin-right: auto;
      width: 100%
    }

    .nb-theme-default nb-layout.window-mode .layout nb-layout-header nav {
      max-width: 1920px;
      margin: 0 auto
    }

    @media screen and (min-width: 1940px) {
      .nb-theme-default nb-layout.window-mode {
        padding-top: 1.1875rem
      }

      .nb-theme-default nb-layout.window-mode nb-layout-header.fixed {
        top: 1.1875rem
      }

      .nb-theme-default nb-layout.window-mode nb-layout-header.fixed~.layout-container nb-sidebar .main-container-fixed {
        height: calc(100vh - 1.1875rem - 4.75rem);
        top: calc(1.1875rem + 4.75rem)
      }

      .nb-theme-default nb-layout.window-mode nb-sidebar.fixed {
        left: calc((100vw - 1920px) / 2)
      }

      .nb-theme-default nb-layout.window-mode .layout .layout-container nb-sidebar.fixed.right {
        right: calc((100vw - 1920px) / 2)
      }

      .nb-theme-default nb-layout.window-mode .layout .layout-container nb-sidebar.fixed {
        top: calc(4.75rem + 1.1875rem)
      }

      .nb-theme-default nb-layout.window-mode .scrollable-container {
        height: calc(100vh - 1.1875rem);
        box-shadow: 0 0.5rem 1rem 0 rgba(44, 51, 73, 0.1)
      }

      .nb-theme-default nb-layout.window-mode nb-layout.with-scroll .scrollable-container {
        height: calc(100vh - 1.1875rem)
      }
    }

    @media screen and (min-width: 2070px) {
      .nb-theme-default nb-layout.window-mode {
        padding-top: 2.375rem
      }

      .nb-theme-default nb-layout.window-mode nb-layout-header.fixed {
        top: 2.375rem
      }

      .nb-theme-default nb-layout.window-mode nb-layout-header.fixed~.layout-container nb-sidebar .main-container-fixed {
        height: calc(100vh - 2.375rem - 4.75rem);
        top: calc(2.375rem + 4.75rem)
      }

      .nb-theme-default nb-layout.window-mode nb-sidebar.fixed {
        left: calc((100vw - 1920px) / 2)
      }

      .nb-theme-default nb-layout.window-mode .layout .layout-container nb-sidebar.fixed.right {
        right: calc((100vw - 1920px) / 2)
      }

      .nb-theme-default nb-layout.window-mode .layout .layout-container nb-sidebar.fixed {
        top: calc(4.75rem + 2.375rem)
      }

      .nb-theme-default nb-layout.window-mode .scrollable-container {
        height: calc(100vh - 2.375rem);
        box-shadow: 0 0.5rem 1rem 0 rgba(44, 51, 73, 0.1)
      }

      .nb-theme-default nb-layout.window-mode nb-layout.with-scroll .scrollable-container {
        height: calc(100vh - 2.375rem)
      }
    }

    @media screen and (min-width: 2220px) {
      .nb-theme-default nb-layout.window-mode {
        padding-top: 4.75rem
      }

      .nb-theme-default nb-layout.window-mode nb-layout-header.fixed {
        top: 4.75rem
      }

      .nb-theme-default nb-layout.window-mode nb-layout-header.fixed~.layout-container nb-sidebar .main-container-fixed {
        height: calc(100vh - 4.75rem - 4.75rem);
        top: calc(4.75rem + 4.75rem)
      }

      .nb-theme-default nb-layout.window-mode nb-sidebar.fixed {
        left: calc((100vw - 1920px) / 2)
      }

      .nb-theme-default nb-layout.window-mode .layout .layout-container nb-sidebar.fixed.right {
        right: calc((100vw - 1920px) / 2)
      }

      .nb-theme-default nb-layout.window-mode .layout .layout-container nb-sidebar.fixed {
        top: calc(4.75rem + 4.75rem)
      }

      .nb-theme-default nb-layout.window-mode .scrollable-container {
        height: calc(100vh - 4.75rem);
        box-shadow: 0 0.5rem 1rem 0 rgba(44, 51, 73, 0.1)
      }

      .nb-theme-default nb-layout.window-mode nb-layout.with-scroll .scrollable-container {
        height: calc(100vh - 4.75rem)
      }
    }

    .nb-theme-default nb-layout .layout {
      background-color: #edf1f7;
      color: #222b45;
      font-family: Open Sans, sans-serif;
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem;
      min-height: 100vh
    }

    .nb-theme-default nb-layout .layout .layout-container nb-sidebar.fixed,
    .nb-theme-default nb-layout .layout .layout-container nb-sidebar .main-container-fixed {
      top: 4.75rem
    }

    .nb-theme-default nb-layout .layout .layout-container .content nb-layout-footer {
      box-shadow: 0 0.5rem 1rem 0 rgba(44, 51, 73, 0.1)
    }

    .nb-theme-default nb-layout .layout .layout-container .content nb-layout-footer nav {
      background-color: #fff;
      border-top: 1px solid #edf1f7;
      color: #222b45;
      font-family: Open Sans, sans-serif;
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem;
      padding: 1.25rem
    }

    .nb-theme-default nb-layout .layout .layout-container .content nb-layout-footer nav a {
      color: #598bff
    }

    .nb-theme-default nb-layout .layout .layout-container .content nb-layout-footer nav a:focus,
    .nb-theme-default nb-layout .layout .layout-container .content nb-layout-footer nav a:active,
    .nb-theme-default nb-layout .layout .layout-container .content nb-layout-footer nav a:hover {
      color: #598bff
    }

    .nb-theme-default nb-layout .layout .layout-container .content.center {
      width: 900px;
      flex: 0 100 900px !important
    }

    .nb-theme-default nb-layout .layout .layout-container .content .columns nb-layout-column {
      padding: 2.25rem 2.25rem 0.75rem
    }

    @media (max-width: 991.98px) {
      .nb-theme-default nb-layout .layout .layout-container .content .columns nb-layout-column {
        padding: 1.5rem 1.5rem 0.5rem
      }
    }

    @media (max-width: 767.98px) {
      .nb-theme-default nb-layout .layout .layout-container .content .columns nb-layout-column {
        padding: 1rem 1rem 0
      }
    }

    .nb-theme-default nb-layout-header {
      background-color: #fff;
      color: #222b45;
      font-family: Open Sans, sans-serif;
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem
    }

    .nb-theme-default nb-layout-header nav {
      color: #222b45;
      box-shadow: 0 0.5rem 1rem 0 rgba(44, 51, 73, 0.1);
      height: 4.75rem;
      padding: 1.25rem
    }

    .nb-theme-default nb-layout-header nav a {
      color: #222b45
    }

    .nb-theme-default nb-layout-header nav a:focus,
    .nb-theme-default nb-layout-header nav a:active,
    .nb-theme-default nb-layout-header nav a:hover {
      color: #222b45
    }

    .nb-theme-default nb-layout-header~.layout-container {
      min-height: calc(100vh - 4.75rem)
    }

    .nb-theme-default nb-layout-header.fixed~.layout-container {
      padding-top: 4.75rem;
      min-height: 100vh
    }

    .nb-theme-default nb-layout-header.fixed~.layout-container nb-sidebar .main-container {
      height: calc(100vh - 4.75rem)
    }

    .nb-theme-default nb-layout.with-subheader nb-sidebar .main-container {
      box-shadow: none
    }

    .nb-theme-default nb-sidebar {
      background-color: #fff;
      box-shadow: 0 0.5rem 1rem 0 rgba(44, 51, 73, 0.1);
      color: #222b45;
      font-family: Open Sans, sans-serif;
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem;
      width: 16rem
    }

    .nb-theme-default nb-sidebar .main-container {
      height: 100vh;
      width: 16rem
    }

    .nb-theme-default nb-sidebar .scrollable {
      padding: 1.25rem;
      position: relative;
      -webkit-transform: translate3d(0, 0, 0);
      scrollbar-face-color: #e4e9f2;
      scrollbar-track-color: #f7f9fc
    }

    @media (max-width: 767.98px) {
      .nb-theme-default nb-sidebar .scrollable {
        overflow-y: scroll;
        -webkit-overflow-scrolling: touch
      }
    }

    .nb-theme-default nb-sidebar .scrollable::-webkit-scrollbar {
      width: .3125rem;
      height: .3125rem
    }

    .nb-theme-default nb-sidebar .scrollable::-webkit-scrollbar-thumb {
      background: #e4e9f2;
      cursor: pointer;
      border-radius: .15625rem
    }

    .nb-theme-default nb-sidebar .scrollable::-webkit-scrollbar-track {
      background: #f7f9fc
    }

    .nb-theme-default nb-sidebar.collapsed {
      width: 0;
      padding: 0
    }

    .nb-theme-default nb-sidebar.collapsed .main-container {
      width: 0;
      padding: 0
    }

    .nb-theme-default nb-sidebar.collapsed .scrollable {
      width: 0;
      padding: 0;
      overflow: hidden
    }

    .nb-theme-default nb-sidebar.collapsed nb-sidebar-header,
    .nb-theme-default nb-sidebar.collapsed nb-sidebar-footer {
      width: 0;
      padding: 0;
      overflow: hidden
    }

    .nb-theme-default nb-sidebar.compacted {
      width: 3.5rem
    }

    .nb-theme-default nb-sidebar.compacted .main-container {
      width: 3.5rem
    }

    .nb-theme-default nb-sidebar.compacted nb-menu {
      width: 3.5rem
    }

    .nb-theme-default nb-sidebar.compacted nb-menu .menu-item a.active {
      position: relative
    }

    .nb-theme-default nb-sidebar.compacted nb-menu .menu-item a.active::before {
      position: absolute;
      content: '';
      top: 0;
      height: 100%;
      width: 4px;
      background: #36f
    }

    [dir=ltr] .nb-theme-default nb-sidebar.compacted nb-menu .menu-item a.active::before {
      left: 0
    }

    [dir=rtl] .nb-theme-default nb-sidebar.compacted nb-menu .menu-item a.active::before {
      right: 0
    }

    .nb-theme-default nb-sidebar.compacted nb-menu>.menu-items>.menu-item>a span,
    .nb-theme-default nb-sidebar.compacted nb-menu>.menu-items>.menu-item>a .expand-state {
      display: none
    }

    .nb-theme-default nb-sidebar.compacted nb-menu .menu-items>.menu-item {
      transition: border-color 1s ease
    }

    .nb-theme-default nb-sidebar.compacted nb-menu .menu-items>.menu-item.menu-group {
      display: block;
      color: transparent;
      width: 0;
      padding: 0;
      overflow: hidden
    }

    .nb-theme-default nb-sidebar.compacted nb-menu .menu-items>.menu-item i {
      margin-right: 0
    }

    .nb-theme-default nb-sidebar.compacted nb-menu .menu-items>.menu-item a {
      justify-content: center
    }

    .nb-theme-default nb-sidebar.compacted nb-menu .menu-items>.menu-item>.expanded {
      display: none
    }

    .nb-theme-default nb-sidebar.compacted.left.fixed~.content {
      margin-left: 3.5rem
    }

    .nb-theme-default nb-sidebar.compacted.fixed.right~.content {
      margin-left: 0;
      margin-right: 3.5rem
    }

    .nb-theme-default nb-sidebar.compacted.left.fixed~.content.center {
      padding-left: 3.5rem
    }

    .nb-theme-default nb-sidebar.compacted.fixed.right~.content.center {
      padding-left: 0;
      padding-right: 3.5rem
    }

    [dir=ltr] .nb-theme-default nb-sidebar.compacted.start.fixed~.content {
      margin-left: 3.5rem
    }

    [dir=rtl] .nb-theme-default nb-sidebar.compacted.start.fixed~.content {
      margin-right: 3.5rem
    }

    [dir=ltr] .nb-theme-default nb-sidebar.compacted.fixed.end~.content {
      margin-right: 3.5rem
    }

    [dir=rtl] .nb-theme-default nb-sidebar.compacted.fixed.end~.content {
      margin-left: 3.5rem
    }

    [dir=ltr] .nb-theme-default nb-sidebar.compacted.start.fixed~.content.center {
      padding-left: 3.5rem
    }

    [dir=rtl] .nb-theme-default nb-sidebar.compacted.start.fixed~.content.center {
      padding-right: 3.5rem
    }

    [dir=ltr] .nb-theme-default nb-sidebar.compacted.fixed.end~.content.center {
      padding-right: 3.5rem
    }

    [dir=rtl] .nb-theme-default nb-sidebar.compacted.fixed.end~.content.center {
      padding-left: 3.5rem
    }

    .nb-theme-default nb-sidebar.fixed.left.collapsed+.content,
    .nb-theme-default nb-sidebar.fixed.start.collapsed+.content {
      margin-left: 0
    }

    .nb-theme-default nb-sidebar.fixed.right.collapsed+.content,
    .nb-theme-default nb-sidebar.fixed.end.collapsed+.content {
      margin-right: 0
    }

    .nb-theme-default nb-sidebar.expanded {
      width: 16rem
    }

    .nb-theme-default nb-sidebar.expanded>.scrollable {
      width: 16rem
    }

    .nb-theme-default nb-sidebar nb-sidebar-header {
      padding: 1.25rem;
      height: 3.5rem
    }

    .nb-theme-default nb-sidebar nb-sidebar-footer {
      padding: 1.25rem;
      height: 3.5rem
    }

    .nb-theme-default nb-sidebar nb-menu {
      margin: 0 -1.25rem -1.25rem
    }

    .nb-theme-default nb-calendar-header .header {
      display: flex;
      flex-direction: column;
      color: #222b45;
      font-family: Open Sans, sans-serif
    }

    .nb-theme-default nb-calendar-header .title {
      display: flex;
      align-items: center;
      font-size: 1.125rem;
      font-weight: 700;
      line-height: 1.5rem
    }

    .nb-theme-default nb-calendar-header .title .nb-arrow-dropright {
      margin-left: 0.5rem
    }

    .nb-theme-default nb-calendar-header .title .nb-arrow-dropleft {
      margin-right: 0.5rem
    }

    .nb-theme-default nb-calendar-header .title:hover {
      color: #598bff;
      cursor: pointer
    }

    .nb-theme-default nb-calendar-header .title:active {
      color: #274bdb
    }

    .nb-theme-default nb-calendar-header .sub-title {
      font-size: 1.125rem;
      font-weight: 400;
      line-height: 1.125rem
    }

    .nb-theme-default nb-calendar-navigation button[nbButton] {
      width: 10rem
    }

    .nb-theme-default nb-calendar-week-numbers {
      background: #f7f9fc;
      font-size: .75rem;
      font-weight: 700;
      line-height: 1rem;
      border-right: 1px solid #edf1f7;
      border-top: 1px solid #edf1f7
    }

    .nb-theme-default nb-calendar-week-numbers .sign {
      border-bottom: 1px solid #edf1f7
    }

    .nb-theme-default nb-calendar-week-numbers.size-medium .sign,
    .nb-theme-default nb-calendar-week-numbers.size-medium .week-cell {
      height: 2.625rem
    }

    .nb-theme-default nb-calendar-week-numbers.size-large .sign,
    .nb-theme-default nb-calendar-week-numbers.size-large .week-cell {
      height: 3rem
    }

    .nb-theme-default nb-calendar-week-numbers .sign,
    .nb-theme-default nb-calendar-week-numbers .week-cell {
      height: 2.625rem;
      width: 2.625rem
    }

    .nb-theme-default nb-calendar-days-names {
      background: #f7f9fc;
      border-top: 1px solid #edf1f7;
      border-bottom: 1px solid #edf1f7
    }

    .nb-theme-default nb-calendar-days-names .day {
      width: 2.625rem;
      height: 2.625rem;
      color: #8f9bb3;
      font-size: .75rem;
      font-weight: 700;
      line-height: 1rem
    }

    .nb-theme-default nb-calendar-days-names .day.holiday {
      color: #8f9bb3
    }

    .nb-theme-default nb-calendar-day-picker.medium .day-cell {
      width: 2.625rem;
      height: 2.625rem
    }

    .nb-theme-default nb-calendar-day-picker.large .day-cell {
      width: 3rem;
      height: 3rem
    }

    .nb-theme-default nb-calendar-day-picker.large .day {
      height: 3rem;
      width: 3rem
    }

    .nb-theme-default nb-calendar-month-picker.medium .month-cell {
      width: 4.25rem;
      height: 2.375rem
    }

    .nb-theme-default nb-calendar-month-picker.large .month-cell {
      width: 4.25rem;
      height: 2.375rem
    }

    .nb-theme-default nb-calendar-year-picker.medium .year-cell {
      width: 4.25rem;
      height: 2.375rem
    }

    .nb-theme-default nb-calendar-year-picker.large .year-cell {
      width: 4.25rem;
      height: 2.375rem
    }

    .nb-theme-default nb-calendar-day-picker .day-cell.bounding-month {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-calendar-day-picker .day-cell:not(.disabled):not(.empty):hover {
      background-color: #598bff;
      color: #fff;
      font-size: .9375rem;
      font-weight: 600;
      line-height: 1.5rem
    }

    .nb-theme-default nb-calendar-week-numbers .week-cell,
    .nb-theme-default nb-calendar-week-numbers .sign,
    .nb-theme-default nb-calendar-day-picker .day-cell,
    .nb-theme-default nb-calendar-month-picker .month-cell,
    .nb-theme-default nb-calendar-year-picker .year-cell {
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 1px
    }

    .nb-theme-default nb-calendar-week-numbers .week-cell,
    .nb-theme-default nb-calendar-week-numbers .sign {
      margin-left: 0;
      margin-right: 0
    }

    .nb-theme-default nb-calendar-day-picker .day-cell,
    .nb-theme-default nb-calendar-month-picker .month-cell,
    .nb-theme-default nb-calendar-year-picker .year-cell {
      font-family: Open Sans, sans-serif;
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem;
      border-radius: .25rem;
      color: #222b45
    }

    .nb-theme-default nb-calendar-day-picker .day-cell:not(.empty):not(.disabled),
    .nb-theme-default nb-calendar-month-picker .month-cell:not(.empty):not(.disabled),
    .nb-theme-default nb-calendar-year-picker .year-cell:not(.empty):not(.disabled) {
      cursor: pointer
    }

    .nb-theme-default nb-calendar-day-picker .day-cell.disabled,
    .nb-theme-default nb-calendar-month-picker .month-cell.disabled,
    .nb-theme-default nb-calendar-year-picker .year-cell.disabled {
      background-color: #edf1f7;
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-calendar-day-picker .day-cell.today,
    .nb-theme-default nb-calendar-month-picker .month-cell.today,
    .nb-theme-default nb-calendar-year-picker .year-cell.today {
      background-color: #edf1f7;
      color: #222b45;
      font-size: .9375rem;
      font-weight: 600;
      line-height: 1.5rem
    }

    .nb-theme-default nb-calendar-day-picker .day-cell.selected,
    .nb-theme-default nb-calendar-day-picker .day-cell.range-cell.start,
    .nb-theme-default nb-calendar-day-picker .day-cell.range-cell.end,
    .nb-theme-default nb-calendar-month-picker .month-cell.selected,
    .nb-theme-default nb-calendar-month-picker nb-calendar-day-picker .month-cell.range-cell.start,
    .nb-theme-default nb-calendar-day-picker nb-calendar-month-picker .month-cell.range-cell.start,
    .nb-theme-default nb-calendar-month-picker nb-calendar-day-picker .month-cell.range-cell.end,
    .nb-theme-default nb-calendar-day-picker nb-calendar-month-picker .month-cell.range-cell.end,
    .nb-theme-default nb-calendar-year-picker .year-cell.selected,
    .nb-theme-default nb-calendar-year-picker nb-calendar-day-picker .year-cell.range-cell.start,
    .nb-theme-default nb-calendar-day-picker nb-calendar-year-picker .year-cell.range-cell.start,
    .nb-theme-default nb-calendar-year-picker nb-calendar-day-picker .year-cell.range-cell.end,
    .nb-theme-default nb-calendar-day-picker nb-calendar-year-picker .year-cell.range-cell.end {
      background-color: #36f;
      color: #fff;
      font-size: .9375rem;
      font-weight: 600;
      line-height: 1.5rem
    }

    .nb-theme-default nb-calendar-month-picker .month-cell:hover,
    .nb-theme-default nb-calendar-month-picker .month-cell:hover:active,
    .nb-theme-default nb-calendar-year-picker .year-cell:hover,
    .nb-theme-default nb-calendar-year-picker .year-cell:hover:active {
      background-color: #598bff;
      color: #fff;
      font-size: .9375rem;
      font-weight: 600;
      line-height: 1.5rem
    }

    .nb-theme-default nb-calendar-month-picker .month-cell:active,
    .nb-theme-default nb-calendar-year-picker .year-cell:active {
      background-color: #274bdb;
      color: #274bdb;
      font-size: .9375rem;
      font-weight: 600;
      line-height: 1.5rem
    }

    .nb-theme-default nb-base-calendar nb-card {
      overflow: hidden
    }

    .nb-theme-default nb-base-calendar.medium nb-card {
      width: 19.25rem
    }

    .nb-theme-default nb-base-calendar.medium nb-card nb-card-body {
      height: 25.625rem
    }

    .nb-theme-default nb-base-calendar.large nb-card {
      width: 21.875rem
    }

    .nb-theme-default nb-base-calendar.large nb-card nb-card-body {
      height: 27.75rem
    }

    .nb-theme-default nb-base-calendar.has-week-number.medium nb-card {
      width: calc(19.25rem + 2.625rem + 1px)
    }

    .nb-theme-default nb-base-calendar.has-week-number.large nb-card {
      width: calc(21.875rem + 2.625rem + 1px)
    }

    .nb-theme-default nb-base-calendar nb-card {
      border: none;
      margin: 0
    }

    .nb-theme-default nb-base-calendar nb-card-body {
      padding: 0
    }

    .nb-theme-default nb-base-calendar nb-card-body>nb-calendar-pageable-navigation,
    .nb-theme-default nb-base-calendar nb-card-body>nb-calendar-navigation {
      padding: 1rem 0
    }

    .nb-theme-default nb-calendar-day-picker .range-cell {
      flex: 1;
      margin: 1px 0
    }

    .nb-theme-default nb-calendar-day-picker .range-cell .day-cell {
      margin: 0
    }

    .nb-theme-default nb-calendar-day-picker .range-cell.in-range {
      background: #d9e4ff
    }

    .nb-theme-default nb-calendar-day-picker .range-cell.in-range {
      border-radius: 0
    }

    .nb-theme-default nb-calendar-day-picker .range-cell.start,
    .nb-theme-default nb-calendar-day-picker .range-cell.end {
      background: #d9e4ff
    }

    .nb-theme-default nb-calendar-day-picker .range-cell.start {
      border-top-left-radius: .25rem;
      border-bottom-left-radius: .25rem
    }

    .nb-theme-default nb-calendar-day-picker .range-cell.start .day-cell {
      margin-left: 0
    }

    .nb-theme-default nb-calendar-day-picker .range-cell.end {
      border-top-right-radius: .25rem;
      border-bottom-right-radius: .25rem
    }

    .nb-theme-default nb-calendar-day-picker .range-cell.end .day-cell {
      margin-right: 0
    }

    .nb-theme-default nb-calendar-day-picker .range-cell:first-of-type {
      border-top-left-radius: .25rem;
      border-bottom-left-radius: .25rem
    }

    .nb-theme-default nb-calendar-day-picker .range-cell:last-of-type {
      border-top-right-radius: .25rem;
      border-bottom-right-radius: .25rem
    }

    .nb-theme-default nb-card {
      background-color: #fff;
      border: 0 solid rgba(0, 0, 0, 0);
      border-radius: .25rem;
      box-shadow: 0 0.5rem 1rem 0 rgba(44, 51, 73, 0.1);
      color: #222b45;
      font-family: Open Sans, sans-serif;
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem;
      margin-bottom: 1.875rem;
      scrollbar-face-color: #e4e9f2;
      scrollbar-track-color: #f7f9fc
    }

    .nb-theme-default nb-card::-webkit-scrollbar {
      width: .3125rem;
      height: .3125rem
    }

    .nb-theme-default nb-card::-webkit-scrollbar-thumb {
      background: #e4e9f2;
      cursor: pointer;
      border-radius: .15625rem
    }

    .nb-theme-default nb-card::-webkit-scrollbar-track {
      background: #f7f9fc
    }

    .nb-theme-default nb-card.size-tiny {
      height: 13.5rem
    }

    .nb-theme-default nb-card.size-small {
      height: 21.1875rem
    }

    .nb-theme-default nb-card.size-medium {
      height: 28.875rem
    }

    .nb-theme-default nb-card.size-large {
      height: 36.5625rem
    }

    .nb-theme-default nb-card.size-giant {
      height: 44.25rem
    }

    .nb-theme-default nb-card.status-basic nb-card-header {
      background-color: #f7f9fc;
      border-bottom-width: 0;
      border-bottom-color: #f7f9fc;
      color: #222b45
    }

    .nb-theme-default nb-card.status-basic nb-card-header a,
    .nb-theme-default nb-card.status-basic nb-card-header a:hover {
      color: #222b45
    }

    .nb-theme-default nb-card.accent-basic {
      border-top-color: #f7f9fc
    }

    .nb-theme-default nb-card.status-primary nb-card-header {
      background-color: #36f;
      border-bottom-width: 0;
      border-bottom-color: #36f;
      color: #fff
    }

    .nb-theme-default nb-card.status-primary nb-card-header a,
    .nb-theme-default nb-card.status-primary nb-card-header a:hover {
      color: #fff
    }

    .nb-theme-default nb-card.accent-primary {
      border-top-color: #36f
    }

    .nb-theme-default nb-card.status-success nb-card-header {
      background-color: #00d68f;
      border-bottom-width: 0;
      border-bottom-color: #00d68f;
      color: #fff
    }

    .nb-theme-default nb-card.status-success nb-card-header a,
    .nb-theme-default nb-card.status-success nb-card-header a:hover {
      color: #fff
    }

    .nb-theme-default nb-card.accent-success {
      border-top-color: #00d68f
    }

    .nb-theme-default nb-card.status-warning nb-card-header {
      background-color: #fa0;
      border-bottom-width: 0;
      border-bottom-color: #fa0;
      color: #fff
    }

    .nb-theme-default nb-card.status-warning nb-card-header a,
    .nb-theme-default nb-card.status-warning nb-card-header a:hover {
      color: #fff
    }

    .nb-theme-default nb-card.accent-warning {
      border-top-color: #fa0
    }

    .nb-theme-default nb-card.status-danger nb-card-header {
      background-color: #ff3d71;
      border-bottom-width: 0;
      border-bottom-color: #ff3d71;
      color: #fff
    }

    .nb-theme-default nb-card.status-danger nb-card-header a,
    .nb-theme-default nb-card.status-danger nb-card-header a:hover {
      color: #fff
    }

    .nb-theme-default nb-card.accent-danger {
      border-top-color: #ff3d71
    }

    .nb-theme-default nb-card.status-info nb-card-header {
      background-color: #0095ff;
      border-bottom-width: 0;
      border-bottom-color: #0095ff;
      color: #fff
    }

    .nb-theme-default nb-card.status-info nb-card-header a,
    .nb-theme-default nb-card.status-info nb-card-header a:hover {
      color: #fff
    }

    .nb-theme-default nb-card.accent-info {
      border-top-color: #0095ff
    }

    .nb-theme-default nb-card.status-control nb-card-header {
      background-color: #fff;
      border-bottom-width: 0;
      border-bottom-color: #fff;
      color: #222b45
    }

    .nb-theme-default nb-card.status-control nb-card-header a,
    .nb-theme-default nb-card.status-control nb-card-header a:hover {
      color: #222b45
    }

    .nb-theme-default nb-card.accent-control {
      border-top-color: #fff
    }

    .nb-theme-default nb-card.accent {
      border-top-style: solid;
      border-top-width: .25rem
    }

    .nb-theme-default nb-card.accent nb-card-header {
      border-radius: 0
    }

    .nb-theme-default nb-card-body {
      flex: 1;
      -ms-flex: 1 1 auto;
      overflow: auto;
      padding: 1rem 1.25rem;
      position: relative;
      scrollbar-face-color: #e4e9f2;
      scrollbar-track-color: #f7f9fc
    }

    .nb-theme-default nb-card-body::-webkit-scrollbar {
      width: .3125rem;
      height: .3125rem
    }

    .nb-theme-default nb-card-body::-webkit-scrollbar-thumb {
      background: #e4e9f2;
      cursor: pointer;
      border-radius: .15625rem
    }

    .nb-theme-default nb-card-body::-webkit-scrollbar-track {
      background: #f7f9fc
    }

    .nb-theme-default nb-card-footer {
      padding: 1rem 1.25rem;
      border-top: 1px solid #edf1f7;
      border-bottom-left-radius: .25rem;
      border-bottom-right-radius: .25rem
    }

    .nb-theme-default nb-card-header {
      padding: 1rem 1.25rem;
      border-bottom: 1px solid #edf1f7;
      border-top-left-radius: .25rem;
      border-top-right-radius: .25rem;
      color: #222b45;
      font-family: Open Sans, sans-serif;
      font-size: .9375rem;
      font-weight: 600;
      line-height: 1.5rem
    }

    .nb-theme-default nb-card-header h1 {
      margin: 0
    }

    .nb-theme-default nb-card-header h2 {
      margin: 0
    }

    .nb-theme-default nb-card-header h3 {
      margin: 0
    }

    .nb-theme-default nb-card-header h4 {
      margin: 0
    }

    .nb-theme-default nb-card-header h5 {
      margin: 0
    }

    .nb-theme-default nb-card-header h6 {
      margin: 0
    }

    .nb-theme-default nb-reveal-card {
      box-shadow: 0 0.5rem 1rem 0 rgba(44, 51, 73, 0.1);
      margin-bottom: 1.875rem
    }

    .nb-theme-default .second-card-container {
      height: 100%;
      border-radius: .25rem
    }

    .nb-theme-default .reveal-button {
      line-height: 1.25rem;
      padding: 1rem 1.25rem
    }

    .nb-theme-default .flip-button {
      line-height: 1.25rem;
      margin-bottom: 1.875rem;
      padding: 1rem 1.25rem
    }

    [dir=ltr] .nb-theme-default .flipcard-body .front-container {
      margin-right: -100%
    }

    [dir=rtl] .nb-theme-default .flipcard-body .front-container {
      margin-left: -100%
    }

    .nb-theme-default nb-tabset {
      background-color: rgba(0, 0, 0, 0);
      border-radius: 0;
      box-shadow: none
    }

    .nb-theme-default nb-tabset .tabset {
      border-bottom: 1px solid #edf1f7
    }

    .nb-theme-default nb-tabset .tab-link {
      background-color: rgba(0, 0, 0, 0);
      cursor: pointer;
      padding: 1rem 2rem;
      color: #8f9bb3;
      font-family: Open Sans, sans-serif;
      font-size: .875rem;
      font-weight: 700;
      line-height: 1rem;
      text-transform: uppercase
    }

    .nb-theme-default nb-tabset .tab-link::before {
      background-color: rgba(0, 0, 0, 0);
      height: .25rem
    }

    .nb-theme-default nb-tabset .tab.active .tab-link {
      background-color: rgba(0, 0, 0, 0);
      color: #36f
    }

    .nb-theme-default nb-tabset .tab.active .tab-link::before {
      background-color: #36f
    }

    .nb-theme-default nb-tabset .tab:focus .tab-link {
      background-color: rgba(0, 0, 0, 0);
      color: #274bdb
    }

    .nb-theme-default nb-tabset .tab:focus .tab-link::before {
      background-color: #274bdb
    }

    .nb-theme-default nb-tabset .tab:hover .tab-link {
      color: #598bff;
      background-color: rgba(0, 0, 0, 0)
    }

    .nb-theme-default nb-tabset .tab:hover .tab-link::before {
      background-color: #598bff
    }

    .nb-theme-default nb-tabset .tab.disabled {
      cursor: default;
      pointer-events: none
    }

    .nb-theme-default nb-tabset .tab.disabled .tab-link {
      background-color: rgba(0, 0, 0, 0);
      color: rgba(143, 155, 179, 0.48);
      cursor: default;
      pointer-events: none
    }

    .nb-theme-default nb-tabset .tab.disabled .tab-link::before {
      background-color: rgba(0, 0, 0, 0)
    }

    @media screen and (max-width: 36rem) {
      .nb-theme-default nb-tabset .tab.responsive .tab-text {
        display: none
      }
    }

    .nb-theme-default nb-tabset nb-tab {
      background-color: rgba(0, 0, 0, 0);
      color: #222b45;
      font-family: Open Sans, sans-serif;
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem;
      padding: 1rem 2rem;
      scrollbar-face-color: #e4e9f2;
      scrollbar-track-color: #f7f9fc
    }

    .nb-theme-default nb-tabset nb-tab::-webkit-scrollbar {
      width: .3125rem;
      height: .3125rem
    }

    .nb-theme-default nb-tabset nb-tab::-webkit-scrollbar-thumb {
      background: #e4e9f2;
      cursor: pointer;
      border-radius: .15625rem
    }

    .nb-theme-default nb-tabset nb-tab::-webkit-scrollbar-track {
      background: #f7f9fc
    }

    .nb-theme-default nb-route-tabset {
      scrollbar-face-color: #e4e9f2;
      scrollbar-track-color: #f7f9fc;
      background-color: rgba(0, 0, 0, 0);
      border-radius: 0;
      box-shadow: none
    }

    .nb-theme-default nb-route-tabset::-webkit-scrollbar {
      width: .3125rem;
      height: .3125rem
    }

    .nb-theme-default nb-route-tabset::-webkit-scrollbar-thumb {
      background: #e4e9f2;
      cursor: pointer;
      border-radius: .15625rem
    }

    .nb-theme-default nb-route-tabset::-webkit-scrollbar-track {
      background: #f7f9fc
    }

    .nb-theme-default nb-route-tabset .route-tabset {
      border-bottom: 1px solid #edf1f7
    }

    .nb-theme-default nb-route-tabset .tab-link {
      background-color: rgba(0, 0, 0, 0);
      cursor: pointer;
      padding: 1rem 2rem;
      color: #8f9bb3;
      font-family: Open Sans, sans-serif;
      font-size: .875rem;
      font-weight: 700;
      line-height: 1rem;
      text-transform: uppercase
    }

    .nb-theme-default nb-route-tabset .tab-link::before {
      background-color: rgba(0, 0, 0, 0);
      height: .25rem
    }

    .nb-theme-default nb-route-tabset .route-tab.active .tab-link {
      background-color: rgba(0, 0, 0, 0);
      color: #36f
    }

    .nb-theme-default nb-route-tabset .route-tab.active .tab-link::before {
      background-color: #36f
    }

    .nb-theme-default nb-route-tabset .route-tab:focus .tab-link {
      background-color: rgba(0, 0, 0, 0);
      color: #274bdb
    }

    .nb-theme-default nb-route-tabset .route-tab:focus .tab-link::before {
      background-color: #274bdb
    }

    .nb-theme-default nb-route-tabset .route-tab:hover .tab-link {
      background-color: rgba(0, 0, 0, 0);
      color: #598bff
    }

    .nb-theme-default nb-route-tabset .route-tab:hover .tab-link::before {
      background-color: #598bff
    }

    .nb-theme-default nb-route-tabset .route-tab.disabled {
      cursor: default;
      pointer-events: none
    }

    .nb-theme-default nb-route-tabset .route-tab.disabled .tab-link {
      background-color: rgba(0, 0, 0, 0);
      color: rgba(143, 155, 179, 0.48);
      cursor: default;
      pointer-events: none
    }

    .nb-theme-default nb-route-tabset .route-tab.disabled .tab-link::before {
      background-color: rgba(0, 0, 0, 0)
    }

    @media screen and (max-width: 36rem) {
      .nb-theme-default nb-route-tabset .route-tab.responsive .tab-text {
        display: none
      }
    }

    .nb-theme-default nb-menu {
      background-color: rgba(0, 0, 0, 0)
    }

    .nb-theme-default nb-menu ul.menu-items {
      margin: 0;
      padding: 0
    }

    .nb-theme-default nb-menu .menu-group,
    .nb-theme-default nb-menu .menu-item a {
      font-family: Open Sans, sans-serif;
      font-size: .8125rem;
      font-weight: 600;
      line-height: 1.5rem;
      padding: 0.75rem 1rem
    }

    .nb-theme-default nb-menu .menu-group,
    .nb-theme-default nb-menu .menu-group nb-icon.menu-icon {
      color: #8f9bb3
    }

    .nb-theme-default nb-menu .menu-item a {
      color: #222b45;
      border-radius: 0
    }

    .nb-theme-default nb-menu .menu-item a.active {
      background-color: rgba(0, 0, 0, 0);
      color: #36f
    }

    .nb-theme-default nb-menu .menu-item a.active .menu-icon {
      color: #36f
    }

    .nb-theme-default nb-menu .menu-item a:hover {
      background-color: rgba(0, 0, 0, 0);
      color: #598bff;
      cursor: pointer
    }

    .nb-theme-default nb-menu .menu-item a:hover .menu-icon {
      color: #598bff
    }

    .nb-theme-default nb-menu .menu-item .menu-icon {
      color: #8f9bb3;
      font-size: 1.5rem;
      margin: 0 0.5rem 0 0;
      width: 1em;
      text-align: center
    }

    .nb-theme-default nb-menu .menu-item .expand-state {
      color: #8f9bb3
    }

    .nb-theme-default nb-menu .menu-item {
      border-bottom: 1px solid #edf1f7
    }

    .nb-theme-default nb-menu .menu-item:first-child {
      border-top: none
    }

    .nb-theme-default nb-menu .menu-item:last-child {
      border-bottom: none
    }

    .nb-theme-default nb-menu .menu-item .menu-item:first-child {
      border-top: 1px solid #edf1f7
    }

    .nb-theme-default nb-menu .menu-item>.menu-items {
      background-color: rgba(0, 0, 0, 0);
      margin: 0;
      padding: 0 1.25rem
    }

    .nb-theme-default nb-menu .menu-item>.menu-items>.menu-item {
      background: rgba(0, 0, 0, 0);
      color: #222b45
    }

    .nb-theme-default nb-menu .menu-item>.menu-items>.menu-item a {
      border-color: rgba(0, 0, 0, 0);
      border-style: solid;
      border-width: 0;
      padding: 0.75rem 1rem
    }

    .nb-theme-default nb-menu .menu-item>.menu-items>.menu-item a.active {
      background-color: rgba(0, 0, 0, 0);
      border-color: #36f;
      color: #36f
    }

    .nb-theme-default nb-menu .menu-item>.menu-items>.menu-item a.active .menu-icon {
      color: #36f
    }

    .nb-theme-default nb-menu .menu-item>.menu-items>.menu-item a:hover {
      background-color: rgba(0, 0, 0, 0);
      border-color: rgba(0, 0, 0, 0);
      color: #598bff
    }

    .nb-theme-default nb-menu .menu-item>.menu-items>.menu-item a:hover .menu-icon {
      color: #598bff
    }

    .nb-theme-default nb-menu .menu-item>.menu-items>.menu-item a.active:hover {
      background-color: rgba(0, 0, 0, 0);
      border-color: #598bff;
      color: #598bff
    }

    .nb-theme-default nb-menu .menu-item>.menu-items>.menu-item a.active:hover .menu-icon {
      color: #598bff
    }

    .nb-theme-default nb-menu .menu-item>.menu-items>.menu-group,
    .nb-theme-default nb-menu .menu-item>.menu-items>.menu-group nb-icon.menu-icon {
      color: #8f9bb3
    }

    .nb-theme-default nb-user .user-picture {
      background-color: rgba(0, 0, 0, 0);
      border: 1px solid #edf1f7
    }

    .nb-theme-default nb-user .initials {
      color: #222b45;
      font-family: Open Sans, sans-serif;
      font-weight: 400
    }

    .nb-theme-default nb-user .user-name {
      color: #222b45;
      font-family: Open Sans, sans-serif;
      font-weight: 400
    }

    .nb-theme-default nb-user .user-title {
      color: #222b45;
      font-family: Open Sans, sans-serif;
      font-weight: 400
    }

    .nb-theme-default nb-user.size-tiny .user-picture {
      height: 1.25rem;
      width: 1.25rem
    }

    .nb-theme-default nb-user.size-tiny .initials {
      font-size: .75rem;
      line-height: 1rem
    }

    .nb-theme-default nb-user.size-tiny .user-name {
      font-size: .75rem;
      line-height: 1rem
    }

    .nb-theme-default nb-user.size-tiny .user-title {
      font-size: .75rem;
      line-height: 1rem
    }

    .nb-theme-default nb-user.size-small .user-picture {
      height: 1.5rem;
      width: 1.5rem
    }

    .nb-theme-default nb-user.size-small .initials {
      font-size: .75rem;
      line-height: 1rem
    }

    .nb-theme-default nb-user.size-small .user-name {
      font-size: .75rem;
      line-height: 1rem
    }

    .nb-theme-default nb-user.size-small .user-title {
      font-size: .75rem;
      line-height: 1rem
    }

    .nb-theme-default nb-user.size-medium .user-picture {
      height: 2.5rem;
      width: 2.5rem
    }

    .nb-theme-default nb-user.size-medium .initials {
      font-size: .9375rem;
      line-height: 1.25rem
    }

    .nb-theme-default nb-user.size-medium .user-name {
      font-size: .9375rem;
      line-height: 1.25rem
    }

    .nb-theme-default nb-user.size-medium .user-title {
      font-size: .75rem;
      line-height: 1rem
    }

    .nb-theme-default nb-user.size-large .user-picture {
      height: 3.25rem;
      width: 3.25rem
    }

    .nb-theme-default nb-user.size-large .initials {
      font-size: .9375rem;
      line-height: 1.25rem
    }

    .nb-theme-default nb-user.size-large .user-name {
      font-size: .9375rem;
      line-height: 1.25rem
    }

    .nb-theme-default nb-user.size-large .user-title {
      font-size: .8125rem;
      line-height: 1.125rem
    }

    .nb-theme-default nb-user.size-giant .user-picture {
      height: 4rem;
      width: 4rem
    }

    .nb-theme-default nb-user.size-giant .initials {
      font-size: .9375rem;
      line-height: 1.25rem
    }

    .nb-theme-default nb-user.size-giant .user-name {
      font-size: .9375rem;
      line-height: 1.25rem
    }

    .nb-theme-default nb-user.size-giant .user-title {
      font-size: .9375rem;
      line-height: 1.25rem
    }

    .nb-theme-default nb-user.shape-rectangle .user-picture {
      border-radius: .5rem
    }

    .nb-theme-default nb-user.shape-semi-round .user-picture {
      border-radius: .75rem
    }

    .nb-theme-default nb-user.shape-round .user-picture {
      border-radius: 50%
    }

    .nb-theme-default nb-actions {
      background-color: rgba(0, 0, 0, 0);
      color: #222b45;
      font-family: Open Sans, sans-serif;
      font-weight: 700;
      line-height: 1rem
    }

    .nb-theme-default nb-actions.size-tiny nb-action {
      font-size: .625rem;
      height: 1rem;
      padding: 0 1.25rem
    }

    .nb-theme-default nb-actions.size-tiny nb-action nb-icon {
      font-size: 1rem
    }

    .nb-theme-default nb-actions.size-small nb-action {
      font-size: .75rem;
      height: 1.5rem;
      padding: 0 1.25rem
    }

    .nb-theme-default nb-actions.size-small nb-action nb-icon {
      font-size: 1.5rem
    }

    .nb-theme-default nb-actions.size-medium nb-action {
      font-size: .875rem;
      height: 2.25rem;
      padding: 0 1.25rem
    }

    .nb-theme-default nb-actions.size-medium nb-action nb-icon {
      font-size: 2.25rem
    }

    .nb-theme-default nb-actions.size-large nb-action {
      font-size: 1rem;
      height: 3.5rem;
      padding: 0 1.25rem
    }

    .nb-theme-default nb-actions.size-large nb-action nb-icon {
      font-size: 3.5rem
    }

    .nb-theme-default nb-actions.size-giant nb-action {
      font-size: 1.125rem;
      height: 4rem;
      padding: 0 1.25rem
    }

    .nb-theme-default nb-actions.size-giant nb-action nb-icon {
      font-size: 4rem
    }

    [dir=ltr] .nb-theme-default nb-action {
      border-left: 1px solid #edf1f7
    }

    [dir=rtl] .nb-theme-default nb-action {
      border-right: 1px solid #edf1f7
    }

    [dir=ltr] .nb-theme-default nb-action:first-child {
      border-left: none !important
    }

    [dir=rtl] .nb-theme-default nb-action:first-child {
      border-right: none !important
    }

    .nb-theme-default nb-action nb-icon {
      color: #8f9bb3
    }

    .nb-theme-default nb-action.disabled {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-action.disabled nb-icon {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-search-field .close-button {
      z-index: 1
    }

    .nb-theme-default nb-search-field .search {
      background: #fff
    }

    .nb-theme-default nb-search-field .search span.info {
      color: #8f9bb3;
      font-family: Open Sans, sans-serif;
      font-size: .9375rem;
      font-weight: 600;
      line-height: 1.5rem
    }

    .nb-theme-default nb-search-field .search input {
      border-bottom: 1px solid #edf1f7;
      color: #222b45;
      font-family: Open Sans, sans-serif;
      font-size: 2.25rem;
      font-weight: 700;
      line-height: 3rem
    }

    .nb-theme-default nb-search-field .search input::-webkit-input-placeholder {
      color: #8f9bb3
    }

    .nb-theme-default nb-search-field .search input::-moz-placeholder {
      color: #8f9bb3
    }

    .nb-theme-default nb-search-field .search input:-ms-input-placeholder {
      color: #8f9bb3
    }

    .nb-theme-default nb-search-field .search input::-ms-input-placeholder {
      color: #8f9bb3
    }

    .nb-theme-default nb-search-field .search input::placeholder {
      color: #8f9bb3
    }

    .nb-theme-default nb-search-field .search input::-ms-clear {
      display: none
    }

    .nb-theme-default nb-search-field.rotate-layout {
      opacity: 0;
      background: #fff
    }

    .nb-theme-default nb-search-field.modal-zoomin .search::before,
    .nb-theme-default nb-search-field.modal-zoomin .search::after {
      border: 1.5rem solid #36f
    }

    .nb-theme-default nb-search-field.modal-half .form-wrapper {
      background: #fff
    }

    .nb-theme-default nb-search-field.modal-half .search::before {
      background: #36f
    }

    .nb-theme-default nb-search-field.modal-drop .form-content::after {
      background: #edf1f7
    }

    .nb-theme-default nb-search-field.modal-drop .search::before {
      background: #fff
    }

    .nb-theme-default nb-search-field.curtain .search::after {
      background: #fff
    }

    .nb-theme-default nb-search-field.curtain .search {
      background: #fff
    }

    .nb-theme-default nb-search-field.column-curtain::before {
      background: #fff
    }

    .nb-theme-default nb-search-field.column-curtain::after {
      background: transparent
    }

    .nb-theme-default nb-search-field.column-curtain.show::after {
      background: #36f
    }

    .nb-theme-default .nb-spinner-container {
      position: relative
    }

    .nb-theme-default nb-spinner .message {
      color: #222b45;
      font-family: Open Sans, sans-serif;
      font-size: .875rem;
      font-weight: 700;
      line-height: 1rem
    }

    .nb-theme-default nb-spinner.status-basic {
      background-color: rgba(143, 155, 179, 0.16)
    }

    .nb-theme-default nb-spinner.status-basic .spin-circle {
      border-top-color: #8f9bb3;
      border-right-color: rgba(0, 0, 0, 0);
      border-bottom-color: #8f9bb3;
      border-left-color: #8f9bb3
    }

    .nb-theme-default nb-spinner.status-primary {
      background-color: rgba(143, 155, 179, 0.16)
    }

    .nb-theme-default nb-spinner.status-primary .spin-circle {
      border-top-color: #36f;
      border-right-color: rgba(0, 0, 0, 0);
      border-bottom-color: #36f;
      border-left-color: #36f
    }

    .nb-theme-default nb-spinner.status-success {
      background-color: rgba(143, 155, 179, 0.16)
    }

    .nb-theme-default nb-spinner.status-success .spin-circle {
      border-top-color: #00d68f;
      border-right-color: rgba(0, 0, 0, 0);
      border-bottom-color: #00d68f;
      border-left-color: #00d68f
    }

    .nb-theme-default nb-spinner.status-warning {
      background-color: rgba(143, 155, 179, 0.16)
    }

    .nb-theme-default nb-spinner.status-warning .spin-circle {
      border-top-color: #fa0;
      border-right-color: rgba(0, 0, 0, 0);
      border-bottom-color: #fa0;
      border-left-color: #fa0
    }

    .nb-theme-default nb-spinner.status-danger {
      background-color: rgba(143, 155, 179, 0.16)
    }

    .nb-theme-default nb-spinner.status-danger .spin-circle {
      border-top-color: #ff3d71;
      border-right-color: rgba(0, 0, 0, 0);
      border-bottom-color: #ff3d71;
      border-left-color: #ff3d71
    }

    .nb-theme-default nb-spinner.status-info {
      background-color: rgba(143, 155, 179, 0.16)
    }

    .nb-theme-default nb-spinner.status-info .spin-circle {
      border-top-color: #0095ff;
      border-right-color: rgba(0, 0, 0, 0);
      border-bottom-color: #0095ff;
      border-left-color: #0095ff
    }

    .nb-theme-default nb-spinner.status-control {
      background-color: rgba(255, 255, 255, 0.16)
    }

    .nb-theme-default nb-spinner.status-control .spin-circle {
      border-top-color: #fff;
      border-right-color: rgba(0, 0, 0, 0);
      border-bottom-color: #fff;
      border-left-color: #fff
    }

    .nb-theme-default nb-spinner.size-tiny {
      font-size: 1rem
    }

    .nb-theme-default nb-spinner.size-small {
      font-size: 1.25rem
    }

    .nb-theme-default nb-spinner.size-medium {
      font-size: 1.5rem
    }

    .nb-theme-default nb-spinner.size-large {
      font-size: 1.75rem
    }

    .nb-theme-default nb-spinner.size-giant {
      font-size: 2rem
    }

    @-webkit-keyframes spin {
      0% {
        transform: rotate(0deg)
      }

      40% {
        transform: rotate(230deg)
      }

      100% {
        transform: rotate(360deg)
      }
    }

    @keyframes spin {
      0% {
        transform: rotate(0deg)
      }

      40% {
        transform: rotate(230deg)
      }

      100% {
        transform: rotate(360deg)
      }
    }

    .nb-theme-default nb-checkbox .label {
      padding: 0
    }

    .nb-theme-default nb-checkbox .custom-checkbox {
      width: 1.125rem;
      height: 1.125rem;
      border-style: solid;
      border-width: 1px;
      border-radius: 3px;
      position: relative
    }

    .nb-theme-default nb-checkbox .native-input:focus:not(:checked)+.custom-checkbox {
      box-shadow: 0 0 0 .375rem rgba(143, 155, 179, 0.16)
    }

    .nb-theme-default nb-checkbox .native-input:focus:not(:checked)+.custom-checkbox:not(:hover):not(:active) {
      box-shadow: 0 0 0 .375rem rgba(143, 155, 179, 0.16), inset 0 0 0 100vmax rgba(143, 155, 179, 0.16)
    }

    .nb-theme-default nb-checkbox .native-input:focus:checked+.custom-checkbox {
      box-shadow: 0 0 0 .375rem rgba(143, 155, 179, 0.16)
    }

    .nb-theme-default nb-checkbox nb-icon {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 50%
    }

    .nb-theme-default nb-checkbox .text {
      font-family: Open Sans, sans-serif;
      font-size: .8125rem;
      font-weight: 600;
      line-height: 1.5rem
    }

    [dir=ltr] .nb-theme-default nb-checkbox .text:not(:empty) {
      padding-left: .6875rem
    }

    [dir=rtl] .nb-theme-default nb-checkbox .text:not(:empty) {
      padding-right: .6875rem
    }

    .nb-theme-default nb-checkbox.status-basic .custom-checkbox {
      background-color: rgba(143, 155, 179, 0.08);
      border-color: #8f9bb3
    }

    .nb-theme-default nb-checkbox.status-basic .text {
      color: #222b45
    }

    .nb-theme-default nb-checkbox.status-basic .custom-checkbox.checked {
      background-color: #36f;
      border-color: #36f
    }

    .nb-theme-default nb-checkbox.status-basic .custom-checkbox.checked nb-icon {
      color: #fff
    }

    .nb-theme-default nb-checkbox.status-basic .custom-checkbox.indeterminate {
      background-color: #36f;
      border-color: #36f
    }

    .nb-theme-default nb-checkbox.status-basic .custom-checkbox.indeterminate nb-icon {
      color: #fff
    }

    .nb-theme-default nb-checkbox.status-basic .native-input:enabled:focus+.custom-checkbox {
      background-color: rgba(143, 155, 179, 0.24);
      border-color: #8f9bb3
    }

    .nb-theme-default nb-checkbox.status-basic .native-input:enabled:focus+.custom-checkbox.indeterminate,
    .nb-theme-default nb-checkbox.status-basic .native-input:enabled:focus+.custom-checkbox.checked {
      background-color: #274bdb;
      border-color: #1a34b8
    }

    .nb-theme-default nb-checkbox.status-basic .custom-checkbox:hover {
      background-color: rgba(51, 102, 255, 0.16);
      border-color: #36f
    }

    .nb-theme-default nb-checkbox.status-basic .custom-checkbox:hover.indeterminate,
    .nb-theme-default nb-checkbox.status-basic .custom-checkbox:hover.checked {
      background-color: #598bff;
      border-color: #598bff
    }

    .nb-theme-default nb-checkbox.status-basic .native-input:enabled:active+.custom-checkbox {
      background-color: rgba(143, 155, 179, 0.24);
      border-color: #8f9bb3
    }

    .nb-theme-default nb-checkbox.status-basic .native-input:enabled:active+.custom-checkbox.indeterminate,
    .nb-theme-default nb-checkbox.status-basic .native-input:enabled:active+.custom-checkbox.checked {
      background-color: #274bdb;
      border-color: #274bdb
    }

    .nb-theme-default nb-checkbox.status-basic .native-input:disabled+.custom-checkbox {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(143, 155, 179, 0.24)
    }

    .nb-theme-default nb-checkbox.status-basic .native-input:disabled+.custom-checkbox nb-icon {
      color: #fff
    }

    .nb-theme-default nb-checkbox.status-basic .native-input:disabled~.text {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-checkbox.status-basic .native-input:disabled:indeterminate+.custom-checkbox,
    .nb-theme-default nb-checkbox.status-basic .native-input:disabled:checked+.custom-checkbox {
      background-color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-checkbox.status-primary .custom-checkbox {
      background-color: rgba(51, 102, 255, 0.08);
      border-color: #36f
    }

    .nb-theme-default nb-checkbox.status-primary .text {
      color: #222b45
    }

    .nb-theme-default nb-checkbox.status-primary .custom-checkbox.checked {
      background-color: #36f;
      border-color: #36f
    }

    .nb-theme-default nb-checkbox.status-primary .custom-checkbox.checked nb-icon {
      color: #fff
    }

    .nb-theme-default nb-checkbox.status-primary .custom-checkbox.indeterminate {
      background-color: #36f;
      border-color: #36f
    }

    .nb-theme-default nb-checkbox.status-primary .custom-checkbox.indeterminate nb-icon {
      color: #fff
    }

    .nb-theme-default nb-checkbox.status-primary .native-input:enabled:focus+.custom-checkbox {
      background-color: rgba(51, 102, 255, 0.24);
      border-color: #36f
    }

    .nb-theme-default nb-checkbox.status-primary .native-input:enabled:focus+.custom-checkbox.indeterminate,
    .nb-theme-default nb-checkbox.status-primary .native-input:enabled:focus+.custom-checkbox.checked {
      background-color: #274bdb;
      border-color: #1a34b8
    }

    .nb-theme-default nb-checkbox.status-primary .custom-checkbox:hover {
      background-color: rgba(51, 102, 255, 0.16);
      border-color: #36f
    }

    .nb-theme-default nb-checkbox.status-primary .custom-checkbox:hover.indeterminate,
    .nb-theme-default nb-checkbox.status-primary .custom-checkbox:hover.checked {
      background-color: #598bff;
      border-color: #598bff
    }

    .nb-theme-default nb-checkbox.status-primary .native-input:enabled:active+.custom-checkbox {
      background-color: rgba(51, 102, 255, 0.24);
      border-color: #36f
    }

    .nb-theme-default nb-checkbox.status-primary .native-input:enabled:active+.custom-checkbox.indeterminate,
    .nb-theme-default nb-checkbox.status-primary .native-input:enabled:active+.custom-checkbox.checked {
      background-color: #274bdb;
      border-color: #274bdb
    }

    .nb-theme-default nb-checkbox.status-primary .native-input:disabled+.custom-checkbox {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(143, 155, 179, 0.24)
    }

    .nb-theme-default nb-checkbox.status-primary .native-input:disabled+.custom-checkbox nb-icon {
      color: #fff
    }

    .nb-theme-default nb-checkbox.status-primary .native-input:disabled~.text {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-checkbox.status-primary .native-input:disabled:indeterminate+.custom-checkbox,
    .nb-theme-default nb-checkbox.status-primary .native-input:disabled:checked+.custom-checkbox {
      background-color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-checkbox.status-success .custom-checkbox {
      background-color: rgba(0, 214, 143, 0.08);
      border-color: #00d68f
    }

    .nb-theme-default nb-checkbox.status-success .text {
      color: #222b45
    }

    .nb-theme-default nb-checkbox.status-success .custom-checkbox.checked {
      background-color: #00d68f;
      border-color: #00d68f
    }

    .nb-theme-default nb-checkbox.status-success .custom-checkbox.checked nb-icon {
      color: #fff
    }

    .nb-theme-default nb-checkbox.status-success .custom-checkbox.indeterminate {
      background-color: #00d68f;
      border-color: #00d68f
    }

    .nb-theme-default nb-checkbox.status-success .custom-checkbox.indeterminate nb-icon {
      color: #fff
    }

    .nb-theme-default nb-checkbox.status-success .native-input:enabled:focus+.custom-checkbox {
      background-color: rgba(0, 214, 143, 0.24);
      border-color: #00d68f
    }

    .nb-theme-default nb-checkbox.status-success .native-input:enabled:focus+.custom-checkbox.indeterminate,
    .nb-theme-default nb-checkbox.status-success .native-input:enabled:focus+.custom-checkbox.checked {
      background-color: #00b887;
      border-color: #00997a
    }

    .nb-theme-default nb-checkbox.status-success .custom-checkbox:hover {
      background-color: rgba(0, 214, 143, 0.16);
      border-color: #00d68f
    }

    .nb-theme-default nb-checkbox.status-success .custom-checkbox:hover.indeterminate,
    .nb-theme-default nb-checkbox.status-success .custom-checkbox:hover.checked {
      background-color: #2ce69b;
      border-color: #2ce69b
    }

    .nb-theme-default nb-checkbox.status-success .native-input:enabled:active+.custom-checkbox {
      background-color: rgba(0, 214, 143, 0.24);
      border-color: #00d68f
    }

    .nb-theme-default nb-checkbox.status-success .native-input:enabled:active+.custom-checkbox.indeterminate,
    .nb-theme-default nb-checkbox.status-success .native-input:enabled:active+.custom-checkbox.checked {
      background-color: #00b887;
      border-color: #00b887
    }

    .nb-theme-default nb-checkbox.status-success .native-input:disabled+.custom-checkbox {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(143, 155, 179, 0.24)
    }

    .nb-theme-default nb-checkbox.status-success .native-input:disabled+.custom-checkbox nb-icon {
      color: #fff
    }

    .nb-theme-default nb-checkbox.status-success .native-input:disabled~.text {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-checkbox.status-success .native-input:disabled:indeterminate+.custom-checkbox,
    .nb-theme-default nb-checkbox.status-success .native-input:disabled:checked+.custom-checkbox {
      background-color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-checkbox.status-warning .custom-checkbox {
      background-color: rgba(255, 170, 0, 0.08);
      border-color: #fa0
    }

    .nb-theme-default nb-checkbox.status-warning .text {
      color: #222b45
    }

    .nb-theme-default nb-checkbox.status-warning .custom-checkbox.checked {
      background-color: #fa0;
      border-color: #fa0
    }

    .nb-theme-default nb-checkbox.status-warning .custom-checkbox.checked nb-icon {
      color: #fff
    }

    .nb-theme-default nb-checkbox.status-warning .custom-checkbox.indeterminate {
      background-color: #fa0;
      border-color: #fa0
    }

    .nb-theme-default nb-checkbox.status-warning .custom-checkbox.indeterminate nb-icon {
      color: #fff
    }

    .nb-theme-default nb-checkbox.status-warning .native-input:enabled:focus+.custom-checkbox {
      background-color: rgba(255, 170, 0, 0.24);
      border-color: #fa0
    }

    .nb-theme-default nb-checkbox.status-warning .native-input:enabled:focus+.custom-checkbox.indeterminate,
    .nb-theme-default nb-checkbox.status-warning .native-input:enabled:focus+.custom-checkbox.checked {
      background-color: #db8b00;
      border-color: #b86e00
    }

    .nb-theme-default nb-checkbox.status-warning .custom-checkbox:hover {
      background-color: rgba(255, 170, 0, 0.16);
      border-color: #fa0
    }

    .nb-theme-default nb-checkbox.status-warning .custom-checkbox:hover.indeterminate,
    .nb-theme-default nb-checkbox.status-warning .custom-checkbox:hover.checked {
      background-color: #ffc94d;
      border-color: #ffc94d
    }

    .nb-theme-default nb-checkbox.status-warning .native-input:enabled:active+.custom-checkbox {
      background-color: rgba(255, 170, 0, 0.24);
      border-color: #fa0
    }

    .nb-theme-default nb-checkbox.status-warning .native-input:enabled:active+.custom-checkbox.indeterminate,
    .nb-theme-default nb-checkbox.status-warning .native-input:enabled:active+.custom-checkbox.checked {
      background-color: #db8b00;
      border-color: #db8b00
    }

    .nb-theme-default nb-checkbox.status-warning .native-input:disabled+.custom-checkbox {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(143, 155, 179, 0.24)
    }

    .nb-theme-default nb-checkbox.status-warning .native-input:disabled+.custom-checkbox nb-icon {
      color: #fff
    }

    .nb-theme-default nb-checkbox.status-warning .native-input:disabled~.text {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-checkbox.status-warning .native-input:disabled:indeterminate+.custom-checkbox,
    .nb-theme-default nb-checkbox.status-warning .native-input:disabled:checked+.custom-checkbox {
      background-color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-checkbox.status-danger .custom-checkbox {
      background-color: rgba(255, 61, 113, 0.08);
      border-color: #ff3d71
    }

    .nb-theme-default nb-checkbox.status-danger .text {
      color: #222b45
    }

    .nb-theme-default nb-checkbox.status-danger .custom-checkbox.checked {
      background-color: #ff3d71;
      border-color: #ff3d71
    }

    .nb-theme-default nb-checkbox.status-danger .custom-checkbox.checked nb-icon {
      color: #fff
    }

    .nb-theme-default nb-checkbox.status-danger .custom-checkbox.indeterminate {
      background-color: #ff3d71;
      border-color: #ff3d71
    }

    .nb-theme-default nb-checkbox.status-danger .custom-checkbox.indeterminate nb-icon {
      color: #fff
    }

    .nb-theme-default nb-checkbox.status-danger .native-input:enabled:focus+.custom-checkbox {
      background-color: rgba(255, 61, 113, 0.24);
      border-color: #ff3d71
    }

    .nb-theme-default nb-checkbox.status-danger .native-input:enabled:focus+.custom-checkbox.indeterminate,
    .nb-theme-default nb-checkbox.status-danger .native-input:enabled:focus+.custom-checkbox.checked {
      background-color: #db2c66;
      border-color: #b81d5b
    }

    .nb-theme-default nb-checkbox.status-danger .custom-checkbox:hover {
      background-color: rgba(255, 61, 113, 0.16);
      border-color: #ff3d71
    }

    .nb-theme-default nb-checkbox.status-danger .custom-checkbox:hover.indeterminate,
    .nb-theme-default nb-checkbox.status-danger .custom-checkbox:hover.checked {
      background-color: #ff708d;
      border-color: #ff708d
    }

    .nb-theme-default nb-checkbox.status-danger .native-input:enabled:active+.custom-checkbox {
      background-color: rgba(255, 61, 113, 0.24);
      border-color: #ff3d71
    }

    .nb-theme-default nb-checkbox.status-danger .native-input:enabled:active+.custom-checkbox.indeterminate,
    .nb-theme-default nb-checkbox.status-danger .native-input:enabled:active+.custom-checkbox.checked {
      background-color: #db2c66;
      border-color: #db2c66
    }

    .nb-theme-default nb-checkbox.status-danger .native-input:disabled+.custom-checkbox {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(143, 155, 179, 0.24)
    }

    .nb-theme-default nb-checkbox.status-danger .native-input:disabled+.custom-checkbox nb-icon {
      color: #fff
    }

    .nb-theme-default nb-checkbox.status-danger .native-input:disabled~.text {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-checkbox.status-danger .native-input:disabled:indeterminate+.custom-checkbox,
    .nb-theme-default nb-checkbox.status-danger .native-input:disabled:checked+.custom-checkbox {
      background-color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-checkbox.status-info .custom-checkbox {
      background-color: rgba(0, 149, 255, 0.08);
      border-color: #0095ff
    }

    .nb-theme-default nb-checkbox.status-info .text {
      color: #222b45
    }

    .nb-theme-default nb-checkbox.status-info .custom-checkbox.checked {
      background-color: #0095ff;
      border-color: #0095ff
    }

    .nb-theme-default nb-checkbox.status-info .custom-checkbox.checked nb-icon {
      color: #fff
    }

    .nb-theme-default nb-checkbox.status-info .custom-checkbox.indeterminate {
      background-color: #0095ff;
      border-color: #0095ff
    }

    .nb-theme-default nb-checkbox.status-info .custom-checkbox.indeterminate nb-icon {
      color: #fff
    }

    .nb-theme-default nb-checkbox.status-info .native-input:enabled:focus+.custom-checkbox {
      background-color: rgba(0, 149, 255, 0.24);
      border-color: #0095ff
    }

    .nb-theme-default nb-checkbox.status-info .native-input:enabled:focus+.custom-checkbox.indeterminate,
    .nb-theme-default nb-checkbox.status-info .native-input:enabled:focus+.custom-checkbox.checked {
      background-color: #006fd6;
      border-color: #0057c2
    }

    .nb-theme-default nb-checkbox.status-info .custom-checkbox:hover {
      background-color: rgba(0, 149, 255, 0.16);
      border-color: #0095ff
    }

    .nb-theme-default nb-checkbox.status-info .custom-checkbox:hover.indeterminate,
    .nb-theme-default nb-checkbox.status-info .custom-checkbox:hover.checked {
      background-color: #42aaff;
      border-color: #42aaff
    }

    .nb-theme-default nb-checkbox.status-info .native-input:enabled:active+.custom-checkbox {
      background-color: rgba(0, 149, 255, 0.24);
      border-color: #0095ff
    }

    .nb-theme-default nb-checkbox.status-info .native-input:enabled:active+.custom-checkbox.indeterminate,
    .nb-theme-default nb-checkbox.status-info .native-input:enabled:active+.custom-checkbox.checked {
      background-color: #006fd6;
      border-color: #006fd6
    }

    .nb-theme-default nb-checkbox.status-info .native-input:disabled+.custom-checkbox {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(143, 155, 179, 0.24)
    }

    .nb-theme-default nb-checkbox.status-info .native-input:disabled+.custom-checkbox nb-icon {
      color: #fff
    }

    .nb-theme-default nb-checkbox.status-info .native-input:disabled~.text {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-checkbox.status-info .native-input:disabled:indeterminate+.custom-checkbox,
    .nb-theme-default nb-checkbox.status-info .native-input:disabled:checked+.custom-checkbox {
      background-color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-checkbox.status-control .custom-checkbox {
      background-color: rgba(255, 255, 255, 0.08);
      border-color: #fff
    }

    .nb-theme-default nb-checkbox.status-control .text {
      color: #fff
    }

    .nb-theme-default nb-checkbox.status-control .custom-checkbox.checked {
      background-color: #fff;
      border-color: #fff
    }

    .nb-theme-default nb-checkbox.status-control .custom-checkbox.checked nb-icon {
      color: #222b45
    }

    .nb-theme-default nb-checkbox.status-control .custom-checkbox.indeterminate {
      background-color: #fff;
      border-color: #fff
    }

    .nb-theme-default nb-checkbox.status-control .custom-checkbox.indeterminate nb-icon {
      color: #222b45
    }

    .nb-theme-default nb-checkbox.status-control .native-input:enabled:focus+.custom-checkbox {
      background-color: rgba(255, 255, 255, 0.24);
      border-color: #fff
    }

    .nb-theme-default nb-checkbox.status-control .native-input:enabled:focus+.custom-checkbox.indeterminate,
    .nb-theme-default nb-checkbox.status-control .native-input:enabled:focus+.custom-checkbox.checked {
      background-color: #edf1f7;
      border-color: #c5cee0
    }

    .nb-theme-default nb-checkbox.status-control .custom-checkbox:hover {
      background-color: rgba(255, 255, 255, 0.16);
      border-color: #fff
    }

    .nb-theme-default nb-checkbox.status-control .custom-checkbox:hover.indeterminate,
    .nb-theme-default nb-checkbox.status-control .custom-checkbox:hover.checked {
      background-color: #f7f9fc;
      border-color: #f7f9fc
    }

    .nb-theme-default nb-checkbox.status-control .native-input:enabled:active+.custom-checkbox {
      background-color: rgba(255, 255, 255, 0.24);
      border-color: #fff
    }

    .nb-theme-default nb-checkbox.status-control .native-input:enabled:active+.custom-checkbox.indeterminate,
    .nb-theme-default nb-checkbox.status-control .native-input:enabled:active+.custom-checkbox.checked {
      background-color: #edf1f7;
      border-color: #edf1f7
    }

    .nb-theme-default nb-checkbox.status-control .native-input:disabled+.custom-checkbox {
      background-color: rgba(255, 255, 255, 0.16);
      border-color: rgba(255, 255, 255, 0.4)
    }

    .nb-theme-default nb-checkbox.status-control .native-input:disabled+.custom-checkbox nb-icon {
      color: #fff
    }

    .nb-theme-default nb-checkbox.status-control .native-input:disabled~.text {
      color: #fff
    }

    .nb-theme-default nb-checkbox.status-control .native-input:disabled:indeterminate+.custom-checkbox,
    .nb-theme-default nb-checkbox.status-control .native-input:disabled:checked+.custom-checkbox {
      background-color: rgba(255, 255, 255, 0.16)
    }

    .nb-theme-default nb-toggle .toggle {
      height: 1.875rem;
      width: 3.125rem;
      border-width: 1px;
      border-style: solid;
      border-radius: 100px;
      cursor: pointer
    }

    [dir=ltr] .nb-theme-default nb-toggle .toggle.checked .toggle-switcher {
      left: calc(100% - 1.75rem - 1px)
    }

    [dir=ltr] .nb-theme-default nb-toggle .toggle:not(.checked) .toggle-switcher {
      right: 0
    }

    [dir=rtl] .nb-theme-default nb-toggle .toggle.checked .toggle-switcher {
      right: calc(100% - 1.75rem - 1px)
    }

    [dir=rtl] .nb-theme-default nb-toggle .toggle:not(.checked) .toggle-switcher {
      left: 0
    }

    .nb-theme-default nb-toggle .native-input:enabled:focus+.toggle {
      box-shadow: 0 0 0 .375rem rgba(143, 155, 179, 0.16)
    }

    .nb-theme-default nb-toggle .native-input:disabled+.toggle {
      cursor: default
    }

    .nb-theme-default nb-toggle .toggle-switcher {
      width: 1.75rem;
      height: 1.75rem
    }

    .nb-theme-default nb-toggle .text {
      font-family: Open Sans, sans-serif;
      font-size: .8125rem;
      font-weight: 600;
      line-height: 1.5rem
    }

    .nb-theme-default nb-toggle.status-basic .text {
      color: #222b45
    }

    .nb-theme-default nb-toggle.status-basic .toggle {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: #c5cee0
    }

    .nb-theme-default nb-toggle.status-basic .toggle.checked {
      background-color: #36f;
      border-color: #36f
    }

    .nb-theme-default nb-toggle.status-basic .native-input:enabled:focus+.toggle {
      background-color: rgba(143, 155, 179, 0.4);
      border-color: #8f9bb3
    }

    .nb-theme-default nb-toggle.status-basic .native-input:enabled:focus+.toggle.checked {
      background-color: #274bdb;
      border-color: #1a34b8
    }

    .nb-theme-default nb-toggle.status-basic .native-input:enabled:active+.toggle {
      background-color: rgba(143, 155, 179, 0.4);
      border-color: #8f9bb3
    }

    .nb-theme-default nb-toggle.status-basic .native-input:enabled:active+.toggle.checked {
      background-color: #274bdb;
      border-color: #274bdb
    }

    .nb-theme-default nb-toggle.status-basic .native-input:enabled+.toggle:hover {
      background-color: rgba(51, 102, 255, 0.16);
      border-color: #598bff
    }

    .nb-theme-default nb-toggle.status-basic .native-input:enabled+.toggle:hover.checked {
      background-color: #598bff;
      border-color: #598bff
    }

    .nb-theme-default nb-toggle.status-basic .toggle-switcher {
      background-color: #fff
    }

    .nb-theme-default nb-toggle.status-basic .toggle-switcher nb-icon {
      color: #36f
    }

    .nb-theme-default nb-toggle.status-basic .native-input:disabled+.toggle {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(143, 155, 179, 0.24)
    }

    .nb-theme-default nb-toggle.status-basic .native-input:disabled+.toggle .toggle-switcher {
      background-color: rgba(143, 155, 179, 0.24)
    }

    .nb-theme-default nb-toggle.status-basic .native-input:disabled+.toggle .toggle-switcher nb-icon {
      color: #fff
    }

    .nb-theme-default nb-toggle.status-basic .native-input:disabled~.text {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-toggle.status-primary .text {
      color: #222b45
    }

    .nb-theme-default nb-toggle.status-primary .toggle {
      background-color: rgba(51, 102, 255, 0.08);
      border-color: #36f
    }

    .nb-theme-default nb-toggle.status-primary .toggle.checked {
      background-color: #36f;
      border-color: #36f
    }

    .nb-theme-default nb-toggle.status-primary .native-input:enabled:focus+.toggle {
      background-color: rgba(51, 102, 255, 0.24);
      border-color: #36f
    }

    .nb-theme-default nb-toggle.status-primary .native-input:enabled:focus+.toggle.checked {
      background-color: #274bdb;
      border-color: #1a34b8
    }

    .nb-theme-default nb-toggle.status-primary .native-input:enabled:active+.toggle {
      background-color: rgba(51, 102, 255, 0.24);
      border-color: #36f
    }

    .nb-theme-default nb-toggle.status-primary .native-input:enabled:active+.toggle.checked {
      background-color: #274bdb;
      border-color: #274bdb
    }

    .nb-theme-default nb-toggle.status-primary .native-input:enabled+.toggle:hover {
      background-color: rgba(51, 102, 255, 0.16);
      border-color: #36f
    }

    .nb-theme-default nb-toggle.status-primary .native-input:enabled+.toggle:hover.checked {
      background-color: #598bff;
      border-color: #598bff
    }

    .nb-theme-default nb-toggle.status-primary .toggle-switcher {
      background-color: #fff
    }

    .nb-theme-default nb-toggle.status-primary .toggle-switcher nb-icon {
      color: #36f
    }

    .nb-theme-default nb-toggle.status-primary .native-input:disabled+.toggle {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(143, 155, 179, 0.24)
    }

    .nb-theme-default nb-toggle.status-primary .native-input:disabled+.toggle .toggle-switcher {
      background-color: rgba(143, 155, 179, 0.24)
    }

    .nb-theme-default nb-toggle.status-primary .native-input:disabled+.toggle .toggle-switcher nb-icon {
      color: #fff
    }

    .nb-theme-default nb-toggle.status-primary .native-input:disabled~.text {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-toggle.status-success .text {
      color: #222b45
    }

    .nb-theme-default nb-toggle.status-success .toggle {
      background-color: rgba(0, 214, 143, 0.08);
      border-color: #00d68f
    }

    .nb-theme-default nb-toggle.status-success .toggle.checked {
      background-color: #00d68f;
      border-color: #00d68f
    }

    .nb-theme-default nb-toggle.status-success .native-input:enabled:focus+.toggle {
      background-color: rgba(0, 214, 143, 0.24);
      border-color: #00d68f
    }

    .nb-theme-default nb-toggle.status-success .native-input:enabled:focus+.toggle.checked {
      background-color: #00b887;
      border-color: #00997a
    }

    .nb-theme-default nb-toggle.status-success .native-input:enabled:active+.toggle {
      background-color: rgba(0, 214, 143, 0.24);
      border-color: #00d68f
    }

    .nb-theme-default nb-toggle.status-success .native-input:enabled:active+.toggle.checked {
      background-color: #00b887;
      border-color: #00b887
    }

    .nb-theme-default nb-toggle.status-success .native-input:enabled+.toggle:hover {
      background-color: rgba(0, 214, 143, 0.16);
      border-color: #00d68f
    }

    .nb-theme-default nb-toggle.status-success .native-input:enabled+.toggle:hover.checked {
      background-color: #2ce69b;
      border-color: #2ce69b
    }

    .nb-theme-default nb-toggle.status-success .toggle-switcher {
      background-color: #fff
    }

    .nb-theme-default nb-toggle.status-success .toggle-switcher nb-icon {
      color: #00d68f
    }

    .nb-theme-default nb-toggle.status-success .native-input:disabled+.toggle {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(143, 155, 179, 0.24)
    }

    .nb-theme-default nb-toggle.status-success .native-input:disabled+.toggle .toggle-switcher {
      background-color: rgba(143, 155, 179, 0.24)
    }

    .nb-theme-default nb-toggle.status-success .native-input:disabled+.toggle .toggle-switcher nb-icon {
      color: #fff
    }

    .nb-theme-default nb-toggle.status-success .native-input:disabled~.text {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-toggle.status-warning .text {
      color: #222b45
    }

    .nb-theme-default nb-toggle.status-warning .toggle {
      background-color: rgba(255, 170, 0, 0.08);
      border-color: #fa0
    }

    .nb-theme-default nb-toggle.status-warning .toggle.checked {
      background-color: #fa0;
      border-color: #fa0
    }

    .nb-theme-default nb-toggle.status-warning .native-input:enabled:focus+.toggle {
      background-color: rgba(255, 170, 0, 0.24);
      border-color: #fa0
    }

    .nb-theme-default nb-toggle.status-warning .native-input:enabled:focus+.toggle.checked {
      background-color: #db8b00;
      border-color: #b86e00
    }

    .nb-theme-default nb-toggle.status-warning .native-input:enabled:active+.toggle {
      background-color: rgba(255, 170, 0, 0.24);
      border-color: #fa0
    }

    .nb-theme-default nb-toggle.status-warning .native-input:enabled:active+.toggle.checked {
      background-color: #db8b00;
      border-color: #db8b00
    }

    .nb-theme-default nb-toggle.status-warning .native-input:enabled+.toggle:hover {
      background-color: rgba(255, 170, 0, 0.16);
      border-color: #fa0
    }

    .nb-theme-default nb-toggle.status-warning .native-input:enabled+.toggle:hover.checked {
      background-color: #ffc94d;
      border-color: #ffc94d
    }

    .nb-theme-default nb-toggle.status-warning .toggle-switcher {
      background-color: #fff
    }

    .nb-theme-default nb-toggle.status-warning .toggle-switcher nb-icon {
      color: #fa0
    }

    .nb-theme-default nb-toggle.status-warning .native-input:disabled+.toggle {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(143, 155, 179, 0.24)
    }

    .nb-theme-default nb-toggle.status-warning .native-input:disabled+.toggle .toggle-switcher {
      background-color: rgba(143, 155, 179, 0.24)
    }

    .nb-theme-default nb-toggle.status-warning .native-input:disabled+.toggle .toggle-switcher nb-icon {
      color: #fff
    }

    .nb-theme-default nb-toggle.status-warning .native-input:disabled~.text {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-toggle.status-danger .text {
      color: #222b45
    }

    .nb-theme-default nb-toggle.status-danger .toggle {
      background-color: rgba(255, 61, 113, 0.08);
      border-color: #ff3d71
    }

    .nb-theme-default nb-toggle.status-danger .toggle.checked {
      background-color: #ff3d71;
      border-color: #ff3d71
    }

    .nb-theme-default nb-toggle.status-danger .native-input:enabled:focus+.toggle {
      background-color: rgba(255, 61, 113, 0.24);
      border-color: #ff3d71
    }

    .nb-theme-default nb-toggle.status-danger .native-input:enabled:focus+.toggle.checked {
      background-color: #db2c66;
      border-color: #b81d5b
    }

    .nb-theme-default nb-toggle.status-danger .native-input:enabled:active+.toggle {
      background-color: rgba(255, 61, 113, 0.24);
      border-color: #ff3d71
    }

    .nb-theme-default nb-toggle.status-danger .native-input:enabled:active+.toggle.checked {
      background-color: #db2c66;
      border-color: #db2c66
    }

    .nb-theme-default nb-toggle.status-danger .native-input:enabled+.toggle:hover {
      background-color: rgba(255, 61, 113, 0.16);
      border-color: #ff3d71
    }

    .nb-theme-default nb-toggle.status-danger .native-input:enabled+.toggle:hover.checked {
      background-color: #ff708d;
      border-color: #ff708d
    }

    .nb-theme-default nb-toggle.status-danger .toggle-switcher {
      background-color: #fff
    }

    .nb-theme-default nb-toggle.status-danger .toggle-switcher nb-icon {
      color: #ff3d71
    }

    .nb-theme-default nb-toggle.status-danger .native-input:disabled+.toggle {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(143, 155, 179, 0.24)
    }

    .nb-theme-default nb-toggle.status-danger .native-input:disabled+.toggle .toggle-switcher {
      background-color: rgba(143, 155, 179, 0.24)
    }

    .nb-theme-default nb-toggle.status-danger .native-input:disabled+.toggle .toggle-switcher nb-icon {
      color: #fff
    }

    .nb-theme-default nb-toggle.status-danger .native-input:disabled~.text {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-toggle.status-info .text {
      color: #222b45
    }

    .nb-theme-default nb-toggle.status-info .toggle {
      background-color: rgba(0, 149, 255, 0.08);
      border-color: #0095ff
    }

    .nb-theme-default nb-toggle.status-info .toggle.checked {
      background-color: #0095ff;
      border-color: #0095ff
    }

    .nb-theme-default nb-toggle.status-info .native-input:enabled:focus+.toggle {
      background-color: rgba(0, 149, 255, 0.24);
      border-color: #0095ff
    }

    .nb-theme-default nb-toggle.status-info .native-input:enabled:focus+.toggle.checked {
      background-color: #006fd6;
      border-color: #0057c2
    }

    .nb-theme-default nb-toggle.status-info .native-input:enabled:active+.toggle {
      background-color: rgba(0, 149, 255, 0.24);
      border-color: #0095ff
    }

    .nb-theme-default nb-toggle.status-info .native-input:enabled:active+.toggle.checked {
      background-color: #006fd6;
      border-color: #006fd6
    }

    .nb-theme-default nb-toggle.status-info .native-input:enabled+.toggle:hover {
      background-color: rgba(0, 149, 255, 0.16);
      border-color: #0095ff
    }

    .nb-theme-default nb-toggle.status-info .native-input:enabled+.toggle:hover.checked {
      background-color: #42aaff;
      border-color: #42aaff
    }

    .nb-theme-default nb-toggle.status-info .toggle-switcher {
      background-color: #fff
    }

    .nb-theme-default nb-toggle.status-info .toggle-switcher nb-icon {
      color: #0095ff
    }

    .nb-theme-default nb-toggle.status-info .native-input:disabled+.toggle {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(143, 155, 179, 0.24)
    }

    .nb-theme-default nb-toggle.status-info .native-input:disabled+.toggle .toggle-switcher {
      background-color: rgba(143, 155, 179, 0.24)
    }

    .nb-theme-default nb-toggle.status-info .native-input:disabled+.toggle .toggle-switcher nb-icon {
      color: #fff
    }

    .nb-theme-default nb-toggle.status-info .native-input:disabled~.text {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-toggle.status-control .text {
      color: #fff
    }

    .nb-theme-default nb-toggle.status-control .toggle {
      background-color: rgba(255, 255, 255, 0.24);
      border-color: rgba(255, 255, 255, 0.4)
    }

    .nb-theme-default nb-toggle.status-control .toggle.checked {
      background-color: rgba(255, 255, 255, 0.24);
      border-color: #fff
    }

    .nb-theme-default nb-toggle.status-control .native-input:enabled:focus+.toggle {
      background-color: rgba(255, 255, 255, 0.4);
      border-color: #fff
    }

    .nb-theme-default nb-toggle.status-control .native-input:enabled:focus+.toggle.checked {
      background-color: rgba(255, 255, 255, 0.4);
      border-color: #fff
    }

    .nb-theme-default nb-toggle.status-control .native-input:enabled:active+.toggle {
      background-color: rgba(255, 255, 255, 0.4);
      border-color: #fff
    }

    .nb-theme-default nb-toggle.status-control .native-input:enabled:active+.toggle.checked {
      background-color: rgba(255, 255, 255, 0.4);
      border-color: #fff
    }

    .nb-theme-default nb-toggle.status-control .native-input:enabled+.toggle:hover {
      background-color: rgba(255, 255, 255, 0.32);
      border-color: rgba(255, 255, 255, 0.4)
    }

    .nb-theme-default nb-toggle.status-control .native-input:enabled+.toggle:hover.checked {
      background-color: rgba(255, 255, 255, 0.32);
      border-color: #fff
    }

    .nb-theme-default nb-toggle.status-control .toggle-switcher {
      background-color: #fff
    }

    .nb-theme-default nb-toggle.status-control .toggle-switcher nb-icon {
      color: #2e3a59
    }

    .nb-theme-default nb-toggle.status-control .native-input:disabled+.toggle {
      background-color: rgba(255, 255, 255, 0.16);
      border-color: rgba(255, 255, 255, 0.4)
    }

    .nb-theme-default nb-toggle.status-control .native-input:disabled+.toggle .toggle-switcher {
      background-color: rgba(255, 255, 255, 0.32)
    }

    .nb-theme-default nb-toggle.status-control .native-input:disabled+.toggle .toggle-switcher nb-icon {
      color: #fff
    }

    .nb-theme-default nb-toggle.status-control .native-input:disabled~.text {
      color: #fff
    }

    .nb-theme-default nb-progress-bar .progress-container {
      border-radius: .25rem
    }

    .nb-theme-default nb-progress-bar .progress-value {
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: Open Sans, sans-serif;
      transition-duration: 400ms;
      transition-property: width, background-color
    }

    .nb-theme-default nb-progress-bar.size-tiny .progress-container {
      height: 1rem
    }

    .nb-theme-default nb-progress-bar.size-tiny .progress-value {
      font-size: .8125rem;
      font-weight: 600;
      line-height: 1.5rem
    }

    .nb-theme-default nb-progress-bar.size-small .progress-container {
      height: 1.25rem
    }

    .nb-theme-default nb-progress-bar.size-small .progress-value {
      font-size: .8125rem;
      font-weight: 600;
      line-height: 1.5rem
    }

    .nb-theme-default nb-progress-bar.size-medium .progress-container {
      height: 1.375rem
    }

    .nb-theme-default nb-progress-bar.size-medium .progress-value {
      font-size: .9375rem;
      font-weight: 600;
      line-height: 1.5rem
    }

    .nb-theme-default nb-progress-bar.size-large .progress-container {
      height: 1.5rem
    }

    .nb-theme-default nb-progress-bar.size-large .progress-value {
      font-size: .9375rem;
      font-weight: 600;
      line-height: 1.5rem
    }

    .nb-theme-default nb-progress-bar.size-giant .progress-container {
      height: 1.75rem
    }

    .nb-theme-default nb-progress-bar.size-giant .progress-value {
      font-size: .9375rem;
      font-weight: 600;
      line-height: 1.5rem
    }

    .nb-theme-default nb-progress-bar.status-basic .progress-container {
      background-color: #f7f9fc
    }

    .nb-theme-default nb-progress-bar.status-basic .progress-value {
      background-color: #e4e9f2;
      color: #222b45
    }

    .nb-theme-default nb-progress-bar.status-primary .progress-container {
      background-color: #edf1f7
    }

    .nb-theme-default nb-progress-bar.status-primary .progress-value {
      background-color: #36f;
      color: #fff
    }

    .nb-theme-default nb-progress-bar.status-success .progress-container {
      background-color: #edf1f7
    }

    .nb-theme-default nb-progress-bar.status-success .progress-value {
      background-color: #00d68f;
      color: #fff
    }

    .nb-theme-default nb-progress-bar.status-warning .progress-container {
      background-color: #edf1f7
    }

    .nb-theme-default nb-progress-bar.status-warning .progress-value {
      background-color: #fa0;
      color: #fff
    }

    .nb-theme-default nb-progress-bar.status-danger .progress-container {
      background-color: #edf1f7
    }

    .nb-theme-default nb-progress-bar.status-danger .progress-value {
      background-color: #ff3d71;
      color: #fff
    }

    .nb-theme-default nb-progress-bar.status-info .progress-container {
      background-color: #edf1f7
    }

    .nb-theme-default nb-progress-bar.status-info .progress-value {
      background-color: #0095ff;
      color: #fff
    }

    .nb-theme-default nb-progress-bar.status-control .progress-container {
      background-color: #edf1f7
    }

    .nb-theme-default nb-progress-bar.status-control .progress-value {
      background-color: #fff;
      color: #222b45
    }

    .nb-theme-default nb-badge {
      border-radius: .25rem;
      font-family: Open Sans, sans-serif;
      font-size: .625rem;
      font-weight: 700;
      line-height: .75rem;
      padding: 0.25rem 0.4rem
    }

    .nb-theme-default nb-badge.status-basic {
      color: #222b45;
      background-color: #f7f9fc
    }

    .nb-theme-default nb-badge.status-primary {
      color: #fff;
      background-color: #36f
    }

    .nb-theme-default nb-badge.status-success {
      color: #fff;
      background-color: #00d68f
    }

    .nb-theme-default nb-badge.status-warning {
      color: #fff;
      background-color: #fa0
    }

    .nb-theme-default nb-badge.status-danger {
      color: #fff;
      background-color: #ff3d71
    }

    .nb-theme-default nb-badge.status-info {
      color: #fff;
      background-color: #0095ff
    }

    .nb-theme-default nb-badge.status-control {
      color: #222b45;
      background-color: #fff
    }

    .nb-theme-default nb-stepper.horizontal .header .step {
      width: 2rem;
      margin: 0 1rem
    }

    .nb-theme-default nb-stepper.horizontal .header .connector {
      margin: 1rem
    }

    .nb-theme-default nb-stepper.vertical .header .connector {
      margin: 1rem
    }

    .nb-theme-default nb-stepper .header .connector {
      background-color: #edf1f7
    }

    .nb-theme-default nb-stepper .header .connector-past {
      background-color: #36f
    }

    .nb-theme-default nb-stepper .header .label-index {
      border-radius: 50%;
      border-color: #e4e9f2;
      border-style: solid;
      border-width: 1px;
      width: 2rem;
      height: 2rem
    }

    .nb-theme-default nb-stepper .header .step {
      color: #8f9bb3;
      font-family: Open Sans, sans-serif;
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem
    }

    .nb-theme-default nb-stepper .header .step.label-index {
      border-color: #e4e9f2
    }

    .nb-theme-default nb-stepper .header .step.selected,
    .nb-theme-default nb-stepper .header nb-calendar-day-picker .step.range-cell.start,
    .nb-theme-default nb-calendar-day-picker nb-stepper .header .step.range-cell.start,
    .nb-theme-default nb-stepper .header nb-calendar-day-picker .step.range-cell.end,
    .nb-theme-default nb-calendar-day-picker nb-stepper .header .step.range-cell.end {
      color: #274bdb
    }

    .nb-theme-default nb-stepper .header .step.selected .label-index,
    .nb-theme-default nb-stepper .header nb-calendar-day-picker .step.range-cell.start .label-index,
    .nb-theme-default nb-calendar-day-picker nb-stepper .header .step.range-cell.start .label-index,
    .nb-theme-default nb-stepper .header nb-calendar-day-picker .step.range-cell.end .label-index,
    .nb-theme-default nb-calendar-day-picker nb-stepper .header .step.range-cell.end .label-index {
      border-color: #274bdb
    }

    .nb-theme-default nb-stepper .header .step.completed {
      color: #36f
    }

    .nb-theme-default nb-stepper .header .step.completed .label-index {
      background-color: #36f;
      border-color: #36f;
      color: #fff
    }

    .nb-theme-default nb-stepper .step-content {
      padding: 1.25rem
    }

    .nb-theme-default nb-alert {
      border-radius: .25rem;
      box-shadow: none;
      font-family: Open Sans, sans-serif;
      font-size: .9375rem;
      font-weight: 600;
      line-height: 1.5rem;
      padding: 1rem 1.125rem;
      margin-bottom: 1.5rem;
      scrollbar-face-color: #e4e9f2;
      scrollbar-track-color: #f7f9fc
    }

    .nb-theme-default nb-alert::-webkit-scrollbar {
      width: .3125rem;
      height: .3125rem
    }

    .nb-theme-default nb-alert::-webkit-scrollbar-thumb {
      background: #e4e9f2;
      cursor: pointer;
      border-radius: .15625rem
    }

    .nb-theme-default nb-alert::-webkit-scrollbar-track {
      background: #f7f9fc
    }

    [dir=ltr] .nb-theme-default nb-alert.closable {
      padding-right: 3rem
    }

    [dir=rtl] .nb-theme-default nb-alert.closable {
      padding-left: 3rem
    }

    .nb-theme-default nb-alert .close {
      padding: 1rem 1.125rem;
      font-size: 1.5rem;
      line-height: 1;
      cursor: pointer;
      font-family: monospace
    }

    .nb-theme-default nb-alert.size-tiny {
      height: 4.5rem
    }

    .nb-theme-default nb-alert.size-small {
      height: 5.75rem
    }

    .nb-theme-default nb-alert.size-medium {
      height: 7rem
    }

    .nb-theme-default nb-alert.size-large {
      height: 8.25rem
    }

    .nb-theme-default nb-alert.size-giant {
      height: 9.5rem
    }

    .nb-theme-default nb-alert.status-basic {
      color: #222b45;
      background-color: #f7f9fc
    }

    .nb-theme-default nb-alert.status-basic a,
    .nb-theme-default nb-alert.status-basic a:hover {
      color: #222b45
    }

    .nb-theme-default nb-alert.accent-basic {
      border-top: .25rem solid #edf1f7
    }

    .nb-theme-default nb-alert.outline-basic {
      border: 1px solid #c5cee0
    }

    .nb-theme-default nb-alert.status-primary {
      color: #fff;
      background-color: #36f
    }

    .nb-theme-default nb-alert.status-primary a,
    .nb-theme-default nb-alert.status-primary a:hover {
      color: #fff
    }

    .nb-theme-default nb-alert.accent-primary {
      border-top: .25rem solid #36f
    }

    .nb-theme-default nb-alert.outline-primary {
      border: 1px solid #1a34b8
    }

    .nb-theme-default nb-alert.status-success {
      color: #fff;
      background-color: #00d68f
    }

    .nb-theme-default nb-alert.status-success a,
    .nb-theme-default nb-alert.status-success a:hover {
      color: #fff
    }

    .nb-theme-default nb-alert.accent-success {
      border-top: .25rem solid #00d68f
    }

    .nb-theme-default nb-alert.outline-success {
      border: 1px solid #00997a
    }

    .nb-theme-default nb-alert.status-warning {
      color: #fff;
      background-color: #fa0
    }

    .nb-theme-default nb-alert.status-warning a,
    .nb-theme-default nb-alert.status-warning a:hover {
      color: #fff
    }

    .nb-theme-default nb-alert.accent-warning {
      border-top: .25rem solid #fa0
    }

    .nb-theme-default nb-alert.outline-warning {
      border: 1px solid #b86e00
    }

    .nb-theme-default nb-alert.status-danger {
      color: #fff;
      background-color: #ff3d71
    }

    .nb-theme-default nb-alert.status-danger a,
    .nb-theme-default nb-alert.status-danger a:hover {
      color: #fff
    }

    .nb-theme-default nb-alert.accent-danger {
      border-top: .25rem solid #ff3d71
    }

    .nb-theme-default nb-alert.outline-danger {
      border: 1px solid #b81d5b
    }

    .nb-theme-default nb-alert.status-info {
      color: #fff;
      background-color: #0095ff
    }

    .nb-theme-default nb-alert.status-info a,
    .nb-theme-default nb-alert.status-info a:hover {
      color: #fff
    }

    .nb-theme-default nb-alert.accent-info {
      border-top: .25rem solid #0095ff
    }

    .nb-theme-default nb-alert.outline-info {
      border: 1px solid #0057c2
    }

    .nb-theme-default nb-alert.status-control {
      color: #222b45;
      background-color: #fff
    }

    .nb-theme-default nb-alert.status-control a,
    .nb-theme-default nb-alert.status-control a:hover {
      color: #222b45
    }

    .nb-theme-default nb-alert.accent-control {
      border-top: .25rem solid #fff
    }

    .nb-theme-default nb-alert.outline-control {
      border: 1px solid #c5cee0
    }

    .nb-theme-default nb-chat {
      background-color: #fff;
      border: none;
      border-radius: .25rem;
      box-shadow: 0 0.5rem 1rem 0 rgba(44, 51, 73, 0.1);
      color: #222b45;
      font-family: Open Sans, sans-serif;
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem
    }

    .nb-theme-default nb-chat nb-icon {
      font-size: inherit
    }

    .nb-theme-default nb-chat .header {
      border-bottom: 1px solid #edf1f7;
      border-top-left-radius: .25rem;
      border-top-right-radius: .25rem;
      padding: 1rem 1.25rem;
      font-family: Open Sans, sans-serif;
      font-size: .9375rem;
      font-weight: 600;
      line-height: 1.5rem
    }

    .nb-theme-default nb-chat .scrollable {
      overflow: auto;
      flex: 1;
      scrollbar-face-color: #e4e9f2;
      scrollbar-track-color: #f7f9fc
    }

    .nb-theme-default nb-chat .scrollable::-webkit-scrollbar {
      width: .3125rem;
      height: .3125rem
    }

    .nb-theme-default nb-chat .scrollable::-webkit-scrollbar-thumb {
      background: #e4e9f2;
      cursor: pointer;
      border-radius: .15625rem
    }

    .nb-theme-default nb-chat .scrollable::-webkit-scrollbar-track {
      background: #f7f9fc
    }

    .nb-theme-default nb-chat .messages {
      padding: 1rem 1.25rem;
      overflow-y: auto;
      overflow-x: hidden;
      display: flex;
      flex-shrink: 0;
      flex-direction: column
    }

    .nb-theme-default nb-chat .no-messages {
      text-align: center
    }

    .nb-theme-default nb-chat.size-tiny {
      height: 13.5rem
    }

    .nb-theme-default nb-chat.size-small {
      height: 21rem
    }

    .nb-theme-default nb-chat.size-medium {
      height: 28.5rem
    }

    .nb-theme-default nb-chat.size-large {
      height: 36rem
    }

    .nb-theme-default nb-chat.size-giant {
      height: 43.5rem
    }

    .nb-theme-default nb-chat.status-basic .header {
      background-color: #fff;
      color: #222b45
    }

    .nb-theme-default nb-chat.status-primary .header {
      background-color: #36f;
      color: #fff
    }

    .nb-theme-default nb-chat.status-success .header {
      background-color: #00d68f;
      color: #fff
    }

    .nb-theme-default nb-chat.status-warning .header {
      background-color: #fa0;
      color: #fff
    }

    .nb-theme-default nb-chat.status-danger .header {
      background-color: #ff3d71;
      color: #fff
    }

    .nb-theme-default nb-chat.status-info .header {
      background-color: #0095ff;
      color: #fff
    }

    .nb-theme-default nb-chat.status-control .header {
      background-color: #fff;
      color: #222b45
    }

    .nb-theme-default nb-chat-message {
      margin-bottom: 1.5rem;
      display: flex;
      flex-direction: row
    }

    .nb-theme-default nb-chat-message .message {
      flex: 1
    }

    .nb-theme-default nb-chat-message .avatar {
      border-radius: 50%;
      flex-shrink: 0;
      background: #c5cee0;
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
      width: 2.5rem;
      height: 2.5rem;
      text-align: center;
      line-height: 2.5rem;
      font-size: 0.875rem;
      color: white
    }

    .nb-theme-default nb-chat-message nb-chat-message-text {
      display: flex;
      flex-direction: column
    }

    .nb-theme-default nb-chat-message nb-chat-message-text .sender {
      font-size: 0.875rem;
      color: #8f9bb3;
      margin-bottom: 0.5rem
    }

    .nb-theme-default nb-chat-message nb-chat-message-text p {
      word-break: break-word;
      white-space: pre-wrap;
      max-width: 100%;
      margin-bottom: 0
    }

    .nb-theme-default nb-chat-message nb-chat-message-text .text {
      padding: 1rem;
      border-radius: 0.5rem
    }

    .nb-theme-default nb-chat-message nb-chat-message-file {
      display: flex;
      flex-direction: column
    }

    .nb-theme-default nb-chat-message nb-chat-message-file a {
      color: #8f9bb3;
      background: rgba(0, 0, 0, 0);
      font-size: 4rem;
      text-align: center;
      border: 1px solid #8f9bb3;
      width: 10rem;
      height: 10rem;
      overflow: hidden;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-shrink: 0;
      border-radius: 0.5rem
    }

    .nb-theme-default nb-chat-message nb-chat-message-file a:hover,
    .nb-theme-default nb-chat-message nb-chat-message-file a:focus {
      text-decoration: none;
      color: #8f9bb3
    }

    .nb-theme-default nb-chat-message nb-chat-message-file a div {
      background-size: cover;
      width: 100%;
      height: 100%
    }

    .nb-theme-default nb-chat-message nb-chat-message-file nb-chat-message-text {
      display: block;
      margin-bottom: 0.5rem
    }

    .nb-theme-default nb-chat-message nb-chat-message-file .message-content-group {
      display: flex;
      flex-direction: row;
      justify-content: flex-end;
      flex-wrap: wrap
    }

    .nb-theme-default nb-chat-message nb-chat-message-file .message-content-group a {
      margin-bottom: 1rem;
      width: 5rem;
      height: 5rem
    }

    [dir=ltr] .nb-theme-default nb-chat-message nb-chat-message-file .message-content-group a {
      margin-right: 1rem
    }

    [dir=rtl] .nb-theme-default nb-chat-message nb-chat-message-file .message-content-group a {
      margin-left: 1rem
    }

    .nb-theme-default nb-chat-message nb-chat-message-quote p.quote {
      font-style: italic;
      font-size: 0.875rem;
      background: #f7f9fc;
      color: #8f9bb3;
      padding: 1rem;
      border-radius: 0.5rem;
      margin-bottom: 0.5rem
    }

    .nb-theme-default nb-chat-message nb-chat-message-quote .sender {
      font-size: 0.875rem;
      color: #8f9bb3;
      margin-bottom: 0.5rem
    }

    [dir=ltr] .nb-theme-default nb-chat-message.not-reply .message {
      margin-left: .5rem
    }

    [dir=rtl] .nb-theme-default nb-chat-message.not-reply .message {
      margin-right: .5rem
    }

    [dir=ltr] .nb-theme-default nb-chat-message.not-reply .message {
      margin-right: 3rem
    }

    [dir=rtl] .nb-theme-default nb-chat-message.not-reply .message {
      margin-left: 3rem
    }

    .nb-theme-default nb-chat-message.not-reply nb-chat-message-text {
      align-items: flex-start
    }

    .nb-theme-default nb-chat-message.not-reply nb-chat-message-text .text {
      background: #36f;
      color: #fff
    }

    [dir=ltr] .nb-theme-default nb-chat-message.not-reply nb-chat-message-text .text {
      border-top-left-radius: 0
    }

    [dir=rtl] .nb-theme-default nb-chat-message.not-reply nb-chat-message-text .text {
      border-top-right-radius: 0
    }

    .nb-theme-default nb-chat-message.not-reply nb-chat-message-file {
      align-items: flex-start
    }

    .nb-theme-default nb-chat-message.reply {
      flex-direction: row-reverse
    }

    .nb-theme-default nb-chat-message.reply .message {
      margin-left: 0
    }

    [dir=ltr] .nb-theme-default nb-chat-message.reply .message {
      margin-right: .5rem
    }

    [dir=rtl] .nb-theme-default nb-chat-message.reply .message {
      margin-left: .5rem
    }

    [dir=ltr] .nb-theme-default nb-chat-message.reply .message {
      margin-left: 3rem
    }

    [dir=rtl] .nb-theme-default nb-chat-message.reply .message {
      margin-right: 3rem
    }

    .nb-theme-default nb-chat-message.reply nb-chat-message-text {
      align-items: flex-end
    }

    [dir=ltr] .nb-theme-default nb-chat-message.reply nb-chat-message-text .sender {
      text-align: right
    }

    [dir=rtl] .nb-theme-default nb-chat-message.reply nb-chat-message-text .sender {
      text-align: left
    }

    .nb-theme-default nb-chat-message.reply nb-chat-message-text .text {
      background: #f7f9fc;
      color: #222b45
    }

    [dir=ltr] .nb-theme-default nb-chat-message.reply nb-chat-message-text .text {
      border-top-right-radius: 0
    }

    [dir=rtl] .nb-theme-default nb-chat-message.reply nb-chat-message-text .text {
      border-top-left-radius: 0
    }

    .nb-theme-default nb-chat-message.reply nb-chat-message-file {
      align-items: flex-end
    }

    .nb-theme-default nb-chat-form {
      display: flex;
      flex-direction: column;
      padding: 1rem 1.25rem;
      border-top: 1px solid #edf1f7
    }

    .nb-theme-default nb-chat-form .message-row {
      flex-direction: row;
      display: flex
    }

    .nb-theme-default nb-chat-form input {
      flex: 1
    }

    .nb-theme-default nb-chat-form input.with-button {
      border-bottom-right-radius: 0;
      border-top-right-radius: 0
    }

    [dir=ltr] .nb-theme-default nb-chat-form input.with-button {
      border-bottom-right-radius: 0
    }

    [dir=ltr] .nb-theme-default nb-chat-form input.with-button {
      border-top-right-radius: 0
    }

    [dir=rtl] .nb-theme-default nb-chat-form input.with-button {
      border-bottom-left-radius: 0
    }

    [dir=rtl] .nb-theme-default nb-chat-form input.with-button {
      border-top-left-radius: 0
    }

    .nb-theme-default nb-chat-form .send-button nb-icon {
      font-size: 1.5rem
    }

    [dir=ltr] .nb-theme-default nb-chat-form .send-button {
      border-bottom-left-radius: 0;
      border-top-left-radius: 0
    }

    [dir=rtl] .nb-theme-default nb-chat-form .send-button {
      border-bottom-right-radius: 0;
      border-top-right-radius: 0
    }

    .nb-theme-default nb-chat-form .dropped-files {
      display: flex;
      flex-direction: row;
      margin-bottom: 0.5rem;
      flex-wrap: wrap
    }

    .nb-theme-default nb-chat-form .dropped-files div {
      background-size: cover;
      width: 3rem;
      height: 3rem;
      border-radius: 0.5rem;
      margin-bottom: 0.5rem;
      border: 1px solid currentColor;
      text-align: center;
      font-size: 2rem;
      position: relative
    }

    [dir=ltr] .nb-theme-default nb-chat-form .dropped-files div {
      margin-right: .5rem
    }

    [dir=rtl] .nb-theme-default nb-chat-form .dropped-files div {
      margin-left: .5rem
    }

    .nb-theme-default nb-chat-form .dropped-files div .remove {
      position: absolute;
      right: -0.5rem;
      top: -0.875rem;
      font-size: 0.875rem;
      line-height: 1;
      cursor: pointer
    }

    .nb-theme-default nb-chat-form .dropped-files div nb-icon {
      width: 65%;
      height: 100%
    }

    .nb-theme-default nb-accordion {
      display: block;
      box-shadow: 0 0.5rem 1rem 0 rgba(44, 51, 73, 0.1);
      border-radius: .25rem
    }

    .nb-theme-default nb-accordion nb-accordion-item-header {
      position: relative;
      border-bottom-width: 1px;
      border-bottom-style: solid;
      border-bottom-color: #edf1f7;
      color: #222b45;
      font-family: Open Sans, sans-serif;
      font-size: .9375rem;
      font-weight: 600;
      line-height: 1.5rem;
      padding: 1.25rem
    }

    .nb-theme-default nb-accordion nb-accordion-item-header h1 {
      margin: 0
    }

    .nb-theme-default nb-accordion nb-accordion-item-header h2 {
      margin: 0
    }

    .nb-theme-default nb-accordion nb-accordion-item-header h3 {
      margin: 0
    }

    .nb-theme-default nb-accordion nb-accordion-item-header h4 {
      margin: 0
    }

    .nb-theme-default nb-accordion nb-accordion-item-header h5 {
      margin: 0
    }

    .nb-theme-default nb-accordion nb-accordion-item-header h6 {
      margin: 0
    }

    .nb-theme-default nb-accordion nb-accordion-item-header .expansion-indicator {
      position: absolute
    }

    [dir=ltr] .nb-theme-default nb-accordion nb-accordion-item-header .expansion-indicator {
      right: 1rem
    }

    [dir=rtl] .nb-theme-default nb-accordion nb-accordion-item-header .expansion-indicator {
      left: 1rem
    }

    .nb-theme-default nb-accordion nb-accordion-item {
      background-color: #fff;
      color: #222b45;
      font-family: Open Sans, sans-serif;
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem
    }

    .nb-theme-default nb-accordion nb-accordion-item.disabled nb-accordion-item-header {
      color: rgba(143, 155, 179, 0.48);
      cursor: default
    }

    .nb-theme-default nb-accordion nb-accordion-item:first-child {
      border-top-left-radius: .25rem;
      border-top-right-radius: .25rem
    }

    .nb-theme-default nb-accordion nb-accordion-item:last-child {
      border-bottom-left-radius: .25rem;
      border-bottom-right-radius: .25rem
    }

    .nb-theme-default nb-accordion nb-accordion-item:last-child.collapsed nb-accordion-item-header {
      border-bottom: none
    }

    .nb-theme-default nb-accordion nb-accordion-item:not(.collapsed)+nb-accordion-item nb-accordion-item-header {
      border-top-color: #edf1f7;
      border-top-style: solid;
      border-top-width: 1px
    }

    .nb-theme-default nb-accordion nb-accordion-item-body .item-body {
      flex: 1;
      -ms-flex: 1 1 auto;
      overflow: auto;
      padding: 1.25rem;
      position: relative
    }

    .nb-theme-default [nbButton] {
      cursor: pointer;
      font-family: Open Sans, sans-serif;
      font-weight: 700
    }

    .nb-theme-default [nbButton]:focus {
      outline: none;
      box-shadow: 0 0 0 .375rem rgba(143, 155, 179, 0.16)
    }

    .nb-theme-default [nbButton][disabled] {
      cursor: default
    }

    .nb-theme-default [nbButton].size-tiny {
      font-size: .625rem;
      line-height: .75rem
    }

    .nb-theme-default [nbButton].size-tiny nb-icon {
      font-size: .625rem;
      height: .75rem;
      width: .75rem
    }

    .nb-theme-default [nbButton].size-small {
      font-size: .75rem;
      line-height: 1rem
    }

    .nb-theme-default [nbButton].size-small nb-icon {
      font-size: .75rem;
      height: 1rem;
      width: 1rem
    }

    .nb-theme-default [nbButton].size-medium {
      font-size: .875rem;
      line-height: 1rem
    }

    .nb-theme-default [nbButton].size-medium nb-icon {
      font-size: .875rem;
      height: 1rem;
      width: 1rem
    }

    .nb-theme-default [nbButton].size-large {
      font-size: 1rem;
      line-height: 1.25rem
    }

    .nb-theme-default [nbButton].size-large nb-icon {
      font-size: 1rem;
      height: 1.25rem;
      width: 1.25rem
    }

    .nb-theme-default [nbButton].size-giant {
      font-size: 1.125rem;
      line-height: 1.5rem
    }

    .nb-theme-default [nbButton].size-giant nb-icon {
      font-size: 1.125rem;
      height: 1.5rem;
      width: 1.5rem
    }

    .nb-theme-default [nbButton].shape-rectangle {
      border-radius: .25rem
    }

    .nb-theme-default [nbButton].shape-semi-round {
      border-radius: .75rem
    }

    .nb-theme-default [nbButton].shape-round {
      border-radius: 1.5rem
    }

    .nb-theme-default [nbButton].appearance-filled {
      border-style: solid;
      border-width: .0625rem;
      text-transform: uppercase
    }

    .nb-theme-default [nbButton].appearance-filled.size-tiny {
      padding: 0.3125rem 0.625rem
    }

    .nb-theme-default [nbButton].appearance-filled.size-small {
      padding: 0.4375rem 0.875rem
    }

    .nb-theme-default [nbButton].appearance-filled.size-medium {
      padding: 0.6875rem 1.125rem
    }

    .nb-theme-default [nbButton].appearance-filled.size-large {
      padding: 0.8125rem 1.125rem
    }

    .nb-theme-default [nbButton].appearance-filled.size-giant {
      padding: 0.9375rem 1.375rem
    }

    .nb-theme-default [nbButton].appearance-filled.status-basic {
      background-color: #edf1f7;
      border-color: #edf1f7;
      color: #222b45
    }

    .nb-theme-default [nbButton].appearance-filled.status-basic:focus {
      background-color: #e4e9f2;
      border-color: #c5cee0
    }

    .nb-theme-default [nbButton].appearance-filled.status-basic:hover {
      background-color: #f7f9fc;
      border-color: #f7f9fc
    }

    .nb-theme-default [nbButton].appearance-filled.status-basic:active {
      background-color: #e4e9f2;
      border-color: #e4e9f2
    }

    .nb-theme-default [nbButton].appearance-filled.status-basic[disabled] {
      background-color: rgba(143, 155, 179, 0.24);
      border-color: rgba(0, 0, 0, 0);
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbButton].appearance-filled.status-primary {
      background-color: #36f;
      border-color: #36f;
      color: #fff
    }

    .nb-theme-default [nbButton].appearance-filled.status-primary:focus {
      background-color: #274bdb;
      border-color: #1a34b8
    }

    .nb-theme-default [nbButton].appearance-filled.status-primary:hover {
      background-color: #598bff;
      border-color: #598bff
    }

    .nb-theme-default [nbButton].appearance-filled.status-primary:active {
      background-color: #274bdb;
      border-color: #274bdb
    }

    .nb-theme-default [nbButton].appearance-filled.status-primary[disabled] {
      background-color: rgba(143, 155, 179, 0.24);
      border-color: rgba(0, 0, 0, 0);
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbButton].appearance-filled.status-success {
      background-color: #00d68f;
      border-color: #00d68f;
      color: #fff
    }

    .nb-theme-default [nbButton].appearance-filled.status-success:focus {
      background-color: #00b887;
      border-color: #00997a
    }

    .nb-theme-default [nbButton].appearance-filled.status-success:hover {
      background-color: #2ce69b;
      border-color: #2ce69b
    }

    .nb-theme-default [nbButton].appearance-filled.status-success:active {
      background-color: #00b887;
      border-color: #00b887
    }

    .nb-theme-default [nbButton].appearance-filled.status-success[disabled] {
      background-color: rgba(143, 155, 179, 0.24);
      border-color: rgba(0, 0, 0, 0);
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbButton].appearance-filled.status-warning {
      background-color: #fa0;
      border-color: #fa0;
      color: #fff
    }

    .nb-theme-default [nbButton].appearance-filled.status-warning:focus {
      background-color: #db8b00;
      border-color: #b86e00
    }

    .nb-theme-default [nbButton].appearance-filled.status-warning:hover {
      background-color: #ffc94d;
      border-color: #ffc94d
    }

    .nb-theme-default [nbButton].appearance-filled.status-warning:active {
      background-color: #db8b00;
      border-color: #db8b00
    }

    .nb-theme-default [nbButton].appearance-filled.status-warning[disabled] {
      background-color: rgba(143, 155, 179, 0.24);
      border-color: rgba(0, 0, 0, 0);
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbButton].appearance-filled.status-danger {
      background-color: #ff3d71;
      border-color: #ff3d71;
      color: #fff
    }

    .nb-theme-default [nbButton].appearance-filled.status-danger:focus {
      background-color: #db2c66;
      border-color: #b81d5b
    }

    .nb-theme-default [nbButton].appearance-filled.status-danger:hover {
      background-color: #ff708d;
      border-color: #ff708d
    }

    .nb-theme-default [nbButton].appearance-filled.status-danger:active {
      background-color: #db2c66;
      border-color: #db2c66
    }

    .nb-theme-default [nbButton].appearance-filled.status-danger[disabled] {
      background-color: rgba(143, 155, 179, 0.24);
      border-color: rgba(0, 0, 0, 0);
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbButton].appearance-filled.status-info {
      background-color: #0095ff;
      border-color: #0095ff;
      color: #fff
    }

    .nb-theme-default [nbButton].appearance-filled.status-info:focus {
      background-color: #006fd6;
      border-color: #0057c2
    }

    .nb-theme-default [nbButton].appearance-filled.status-info:hover {
      background-color: #42aaff;
      border-color: #42aaff
    }

    .nb-theme-default [nbButton].appearance-filled.status-info:active {
      background-color: #006fd6;
      border-color: #006fd6
    }

    .nb-theme-default [nbButton].appearance-filled.status-info[disabled] {
      background-color: rgba(143, 155, 179, 0.24);
      border-color: rgba(0, 0, 0, 0);
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbButton].appearance-filled.status-control {
      background-color: #fff;
      border-color: #fff;
      color: #222b45
    }

    .nb-theme-default [nbButton].appearance-filled.status-control:focus {
      background-color: #edf1f7;
      border-color: #c5cee0
    }

    .nb-theme-default [nbButton].appearance-filled.status-control:hover {
      background-color: #f7f9fc;
      border-color: #f7f9fc
    }

    .nb-theme-default [nbButton].appearance-filled.status-control:active {
      background-color: #edf1f7;
      border-color: #edf1f7
    }

    .nb-theme-default [nbButton].appearance-filled.status-control[disabled] {
      background-color: rgba(143, 155, 179, 0.24);
      border-color: rgba(0, 0, 0, 0);
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbButton].appearance-outline {
      border-style: solid;
      border-width: .0625rem;
      text-transform: uppercase
    }

    .nb-theme-default [nbButton].appearance-outline:focus {
      box-shadow: 0 0 0 .375rem rgba(143, 155, 179, 0.16)
    }

    .nb-theme-default [nbButton].appearance-outline:focus:not(:hover):not(:active) {
      box-shadow: 0 0 0 .375rem rgba(143, 155, 179, 0.16), inset 0 0 0 100vmax rgba(143, 155, 179, 0.16)
    }

    .nb-theme-default [nbButton].appearance-outline.size-tiny {
      padding: 0.3125rem 0.625rem
    }

    .nb-theme-default [nbButton].appearance-outline.size-small {
      padding: 0.4375rem 0.875rem
    }

    .nb-theme-default [nbButton].appearance-outline.size-medium {
      padding: 0.6875rem 1.125rem
    }

    .nb-theme-default [nbButton].appearance-outline.size-large {
      padding: 0.8125rem 1.125rem
    }

    .nb-theme-default [nbButton].appearance-outline.size-giant {
      padding: 0.9375rem 1.375rem
    }

    .nb-theme-default [nbButton].appearance-outline.status-basic {
      background-color: rgba(143, 155, 179, 0.08);
      border-color: #8f9bb3;
      color: #8f9bb3
    }

    .nb-theme-default [nbButton].appearance-outline.status-basic:focus {
      background-color: rgba(143, 155, 179, 0.24);
      border-color: #8f9bb3;
      color: #8f9bb3
    }

    .nb-theme-default [nbButton].appearance-outline.status-basic:hover {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: #8f9bb3;
      color: #8f9bb3
    }

    .nb-theme-default [nbButton].appearance-outline.status-basic:active {
      background-color: rgba(143, 155, 179, 0.24);
      border-color: #8f9bb3;
      color: #8f9bb3
    }

    .nb-theme-default [nbButton].appearance-outline.status-basic[disabled] {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(143, 155, 179, 0.24);
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbButton].appearance-outline.status-primary {
      background-color: rgba(51, 102, 255, 0.08);
      border-color: #36f;
      color: #36f
    }

    .nb-theme-default [nbButton].appearance-outline.status-primary:focus {
      background-color: rgba(51, 102, 255, 0.24);
      border-color: #36f;
      color: #36f
    }

    .nb-theme-default [nbButton].appearance-outline.status-primary:hover {
      background-color: rgba(51, 102, 255, 0.16);
      border-color: #36f;
      color: #36f
    }

    .nb-theme-default [nbButton].appearance-outline.status-primary:active {
      background-color: rgba(51, 102, 255, 0.24);
      border-color: #36f;
      color: #36f
    }

    .nb-theme-default [nbButton].appearance-outline.status-primary[disabled] {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(143, 155, 179, 0.24);
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbButton].appearance-outline.status-success {
      background-color: rgba(0, 214, 143, 0.08);
      border-color: #00d68f;
      color: #00d68f
    }

    .nb-theme-default [nbButton].appearance-outline.status-success:focus {
      background-color: rgba(0, 214, 143, 0.24);
      border-color: #00d68f;
      color: #00d68f
    }

    .nb-theme-default [nbButton].appearance-outline.status-success:hover {
      background-color: rgba(0, 214, 143, 0.16);
      border-color: #00d68f;
      color: #00d68f
    }

    .nb-theme-default [nbButton].appearance-outline.status-success:active {
      background-color: rgba(0, 214, 143, 0.24);
      border-color: #00d68f;
      color: #00d68f
    }

    .nb-theme-default [nbButton].appearance-outline.status-success[disabled] {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(143, 155, 179, 0.24);
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbButton].appearance-outline.status-warning {
      background-color: rgba(255, 170, 0, 0.08);
      border-color: #fa0;
      color: #fa0
    }

    .nb-theme-default [nbButton].appearance-outline.status-warning:focus {
      background-color: rgba(255, 170, 0, 0.24);
      border-color: #fa0;
      color: #fa0
    }

    .nb-theme-default [nbButton].appearance-outline.status-warning:hover {
      background-color: rgba(255, 170, 0, 0.16);
      border-color: #fa0;
      color: #fa0
    }

    .nb-theme-default [nbButton].appearance-outline.status-warning:active {
      background-color: rgba(255, 170, 0, 0.24);
      border-color: #fa0;
      color: #fa0
    }

    .nb-theme-default [nbButton].appearance-outline.status-warning[disabled] {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(143, 155, 179, 0.24);
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbButton].appearance-outline.status-danger {
      background-color: rgba(255, 61, 113, 0.08);
      border-color: #ff3d71;
      color: #ff3d71
    }

    .nb-theme-default [nbButton].appearance-outline.status-danger:focus {
      background-color: rgba(255, 61, 113, 0.24);
      border-color: #ff3d71;
      color: #ff3d71
    }

    .nb-theme-default [nbButton].appearance-outline.status-danger:hover {
      background-color: rgba(255, 61, 113, 0.16);
      border-color: #ff3d71;
      color: #ff3d71
    }

    .nb-theme-default [nbButton].appearance-outline.status-danger:active {
      background-color: rgba(255, 61, 113, 0.24);
      border-color: #ff3d71;
      color: #ff3d71
    }

    .nb-theme-default [nbButton].appearance-outline.status-danger[disabled] {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(143, 155, 179, 0.24);
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbButton].appearance-outline.status-info {
      background-color: rgba(0, 149, 255, 0.08);
      border-color: #0095ff;
      color: #0095ff
    }

    .nb-theme-default [nbButton].appearance-outline.status-info:focus {
      background-color: rgba(0, 149, 255, 0.24);
      border-color: #0095ff;
      color: #0095ff
    }

    .nb-theme-default [nbButton].appearance-outline.status-info:hover {
      background-color: rgba(0, 149, 255, 0.16);
      border-color: #0095ff;
      color: #0095ff
    }

    .nb-theme-default [nbButton].appearance-outline.status-info:active {
      background-color: rgba(0, 149, 255, 0.24);
      border-color: #0095ff;
      color: #0095ff
    }

    .nb-theme-default [nbButton].appearance-outline.status-info[disabled] {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(143, 155, 179, 0.24);
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbButton].appearance-outline.status-control {
      background-color: rgba(255, 255, 255, 0.08);
      border-color: #fff;
      color: #fff
    }

    .nb-theme-default [nbButton].appearance-outline.status-control:focus {
      background-color: rgba(255, 255, 255, 0.24);
      border-color: #fff;
      color: #fff
    }

    .nb-theme-default [nbButton].appearance-outline.status-control:hover {
      background-color: rgba(255, 255, 255, 0.16);
      border-color: #fff;
      color: #fff
    }

    .nb-theme-default [nbButton].appearance-outline.status-control:active {
      background-color: rgba(255, 255, 255, 0.24);
      border-color: #fff;
      color: #fff
    }

    .nb-theme-default [nbButton].appearance-outline.status-control[disabled] {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(143, 155, 179, 0.24);
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbButton].appearance-ghost {
      background-color: rgba(0, 0, 0, 0);
      border-color: rgba(0, 0, 0, 0);
      border-style: solid;
      border-width: .0625rem;
      text-transform: uppercase
    }

    .nb-theme-default [nbButton].appearance-ghost:focus {
      box-shadow: 0 0 0 .375rem rgba(143, 155, 179, 0.16)
    }

    .nb-theme-default [nbButton].appearance-ghost:focus:not(:hover):not(:active) {
      box-shadow: 0 0 0 .375rem rgba(143, 155, 179, 0.16), inset 0 0 0 100vmax rgba(143, 155, 179, 0.16)
    }

    .nb-theme-default [nbButton].appearance-ghost.size-tiny {
      padding: 0.3125rem 0.625rem
    }

    .nb-theme-default [nbButton].appearance-ghost.size-small {
      padding: 0.4375rem 0.875rem
    }

    .nb-theme-default [nbButton].appearance-ghost.size-medium {
      padding: 0.6875rem 1.125rem
    }

    .nb-theme-default [nbButton].appearance-ghost.size-large {
      padding: 0.8125rem 1.125rem
    }

    .nb-theme-default [nbButton].appearance-ghost.size-giant {
      padding: 0.9375rem 1.375rem
    }

    .nb-theme-default [nbButton].appearance-ghost.status-basic {
      color: #8f9bb3
    }

    .nb-theme-default [nbButton].appearance-ghost.status-basic:focus {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(143, 155, 179, 0.4);
      color: #8f9bb3
    }

    .nb-theme-default [nbButton].appearance-ghost.status-basic:hover {
      background-color: rgba(143, 155, 179, 0.08);
      border-color: rgba(0, 0, 0, 0);
      color: #8f9bb3
    }

    .nb-theme-default [nbButton].appearance-ghost.status-basic:active {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(0, 0, 0, 0);
      color: #8f9bb3
    }

    .nb-theme-default [nbButton].appearance-ghost.status-basic[disabled] {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(0, 0, 0, 0);
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbButton].appearance-ghost.status-primary {
      color: #36f
    }

    .nb-theme-default [nbButton].appearance-ghost.status-primary:focus {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(143, 155, 179, 0.4);
      color: #36f
    }

    .nb-theme-default [nbButton].appearance-ghost.status-primary:hover {
      background-color: rgba(143, 155, 179, 0.08);
      border-color: rgba(0, 0, 0, 0);
      color: #36f
    }

    .nb-theme-default [nbButton].appearance-ghost.status-primary:active {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(0, 0, 0, 0);
      color: #36f
    }

    .nb-theme-default [nbButton].appearance-ghost.status-primary[disabled] {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(0, 0, 0, 0);
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbButton].appearance-ghost.status-success {
      color: #00d68f
    }

    .nb-theme-default [nbButton].appearance-ghost.status-success:focus {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(143, 155, 179, 0.4);
      color: #00d68f
    }

    .nb-theme-default [nbButton].appearance-ghost.status-success:hover {
      background-color: rgba(143, 155, 179, 0.08);
      border-color: rgba(0, 0, 0, 0);
      color: #00d68f
    }

    .nb-theme-default [nbButton].appearance-ghost.status-success:active {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(0, 0, 0, 0);
      color: #00d68f
    }

    .nb-theme-default [nbButton].appearance-ghost.status-success[disabled] {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(0, 0, 0, 0);
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbButton].appearance-ghost.status-warning {
      color: #fa0
    }

    .nb-theme-default [nbButton].appearance-ghost.status-warning:focus {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(143, 155, 179, 0.4);
      color: #fa0
    }

    .nb-theme-default [nbButton].appearance-ghost.status-warning:hover {
      background-color: rgba(143, 155, 179, 0.08);
      border-color: rgba(0, 0, 0, 0);
      color: #fa0
    }

    .nb-theme-default [nbButton].appearance-ghost.status-warning:active {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(0, 0, 0, 0);
      color: #fa0
    }

    .nb-theme-default [nbButton].appearance-ghost.status-warning[disabled] {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(0, 0, 0, 0);
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbButton].appearance-ghost.status-danger {
      color: #ff3d71
    }

    .nb-theme-default [nbButton].appearance-ghost.status-danger:focus {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(143, 155, 179, 0.4);
      color: #ff3d71
    }

    .nb-theme-default [nbButton].appearance-ghost.status-danger:hover {
      background-color: rgba(143, 155, 179, 0.08);
      border-color: rgba(0, 0, 0, 0);
      color: #ff3d71
    }

    .nb-theme-default [nbButton].appearance-ghost.status-danger:active {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(0, 0, 0, 0);
      color: #ff3d71
    }

    .nb-theme-default [nbButton].appearance-ghost.status-danger[disabled] {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(0, 0, 0, 0);
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbButton].appearance-ghost.status-info {
      color: #0095ff
    }

    .nb-theme-default [nbButton].appearance-ghost.status-info:focus {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(143, 155, 179, 0.4);
      color: #0095ff
    }

    .nb-theme-default [nbButton].appearance-ghost.status-info:hover {
      background-color: rgba(143, 155, 179, 0.08);
      border-color: rgba(0, 0, 0, 0);
      color: #0095ff
    }

    .nb-theme-default [nbButton].appearance-ghost.status-info:active {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(0, 0, 0, 0);
      color: #0095ff
    }

    .nb-theme-default [nbButton].appearance-ghost.status-info[disabled] {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(0, 0, 0, 0);
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbButton].appearance-ghost.status-control {
      color: #fff
    }

    .nb-theme-default [nbButton].appearance-ghost.status-control:focus {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(143, 155, 179, 0.4);
      color: #fff
    }

    .nb-theme-default [nbButton].appearance-ghost.status-control:hover {
      background-color: rgba(143, 155, 179, 0.08);
      border-color: rgba(0, 0, 0, 0);
      color: #fff
    }

    .nb-theme-default [nbButton].appearance-ghost.status-control:active {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(0, 0, 0, 0);
      color: #fff
    }

    .nb-theme-default [nbButton].appearance-ghost.status-control[disabled] {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(0, 0, 0, 0);
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbButton].appearance-hero {
      text-shadow: 0 0.5rem 1rem 0 rgba(44, 51, 73, 0.1);
      text-transform: uppercase
    }

    .nb-theme-default [nbButton].appearance-hero.size-tiny {
      padding: 0.375rem 0.6875rem
    }

    .nb-theme-default [nbButton].appearance-hero.size-small {
      padding: 0.5rem 0.9375rem
    }

    .nb-theme-default [nbButton].appearance-hero.size-medium {
      padding: 0.75rem 1.1875rem
    }

    .nb-theme-default [nbButton].appearance-hero.size-large {
      padding: 0.875rem 1.1875rem
    }

    .nb-theme-default [nbButton].appearance-hero.size-giant {
      padding: 1rem 1.4375rem
    }

    .nb-theme-default [nbButton].appearance-hero.status-basic {
      background-image: linear-gradient(to right, #f7f9fc, #edf1f7);
      border: none;
      box-shadow: 0 0 0 0 #8f9bb3, 0 0 0 0 #2e3a59, 0 0 transparent;
      color: #8f9bb3
    }

    .nb-theme-default [nbButton].appearance-hero.status-basic:focus {
      background-image: linear-gradient(to right, #edf1f7, #e4e9f2);
      box-shadow: 0 0 0 0 #8f9bb3, 0 0 0 0 #2e3a59, 0 0 transparent, 0 0 0 .375rem rgba(143, 155, 179, 0.16)
    }

    .nb-theme-default [nbButton].appearance-hero.status-basic:hover {
      background-image: linear-gradient(to right, #fff, #f7f9fc)
    }

    .nb-theme-default [nbButton].appearance-hero.status-basic:active {
      background-image: linear-gradient(to right, #edf1f7, #e4e9f2)
    }

    .nb-theme-default [nbButton].appearance-hero.status-basic[disabled] {
      background-color: rgba(143, 155, 179, 0.24);
      background-image: none;
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbButton].appearance-hero.status-basic.button-pulse {
      -webkit-animation: button-hero-basic-pulse 0.75s infinite alternate;
      animation: button-hero-basic-pulse 0.75s infinite alternate
    }

    @-webkit-keyframes button-hero-basic-pulse {
      0% {
        box-shadow: none;
        opacity: 0.3
      }

      100% {
        box-shadow: 0 0 1rem 0 #f7f9fc;
        opacity: 0.8
      }
    }

    @keyframes button-hero-basic-pulse {
      0% {
        box-shadow: none;
        opacity: 0.3
      }

      100% {
        box-shadow: 0 0 1rem 0 #f7f9fc;
        opacity: 0.8
      }
    }

    .nb-theme-default [nbButton].appearance-hero.status-primary {
      background-image: linear-gradient(to right, #598bff, #36f);
      border: none;
      box-shadow: 0 0 0 0 #274bdb, 0 0 0 0 #1a34b8, 0 0 transparent;
      color: #fff
    }

    .nb-theme-default [nbButton].appearance-hero.status-primary:focus {
      background-image: linear-gradient(to right, #36f, #274bdb);
      box-shadow: 0 0 0 0 #274bdb, 0 0 0 0 #1a34b8, 0 0 transparent, 0 0 0 .375rem rgba(143, 155, 179, 0.16)
    }

    .nb-theme-default [nbButton].appearance-hero.status-primary:hover {
      background-image: linear-gradient(to right, #a6c1ff, #598bff)
    }

    .nb-theme-default [nbButton].appearance-hero.status-primary:active {
      background-image: linear-gradient(to right, #36f, #274bdb)
    }

    .nb-theme-default [nbButton].appearance-hero.status-primary[disabled] {
      background-color: rgba(143, 155, 179, 0.24);
      background-image: none;
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbButton].appearance-hero.status-primary.button-pulse {
      -webkit-animation: button-hero-primary-pulse 0.75s infinite alternate;
      animation: button-hero-primary-pulse 0.75s infinite alternate
    }

    @-webkit-keyframes button-hero-primary-pulse {
      0% {
        box-shadow: none;
        opacity: 0.3
      }

      100% {
        box-shadow: 0 0 1rem 0 #598bff;
        opacity: 0.8
      }
    }

    @keyframes button-hero-primary-pulse {
      0% {
        box-shadow: none;
        opacity: 0.3
      }

      100% {
        box-shadow: 0 0 1rem 0 #598bff;
        opacity: 0.8
      }
    }

    .nb-theme-default [nbButton].appearance-hero.status-success {
      background-image: linear-gradient(to right, #2ce69b, #00d68f);
      border: none;
      box-shadow: 0 0 0 0 #00b887, 0 0 0 0 #00997a, 0 0 transparent;
      color: #fff
    }

    .nb-theme-default [nbButton].appearance-hero.status-success:focus {
      background-image: linear-gradient(to right, #00d68f, #00b887);
      box-shadow: 0 0 0 0 #00b887, 0 0 0 0 #00997a, 0 0 transparent, 0 0 0 .375rem rgba(143, 155, 179, 0.16)
    }

    .nb-theme-default [nbButton].appearance-hero.status-success:hover {
      background-image: linear-gradient(to right, #8cfac7, #2ce69b)
    }

    .nb-theme-default [nbButton].appearance-hero.status-success:active {
      background-image: linear-gradient(to right, #00d68f, #00b887)
    }

    .nb-theme-default [nbButton].appearance-hero.status-success[disabled] {
      background-color: rgba(143, 155, 179, 0.24);
      background-image: none;
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbButton].appearance-hero.status-success.button-pulse {
      -webkit-animation: button-hero-success-pulse 0.75s infinite alternate;
      animation: button-hero-success-pulse 0.75s infinite alternate
    }

    @-webkit-keyframes button-hero-success-pulse {
      0% {
        box-shadow: none;
        opacity: 0.3
      }

      100% {
        box-shadow: 0 0 1rem 0 #2ce69b;
        opacity: 0.8
      }
    }

    @keyframes button-hero-success-pulse {
      0% {
        box-shadow: none;
        opacity: 0.3
      }

      100% {
        box-shadow: 0 0 1rem 0 #2ce69b;
        opacity: 0.8
      }
    }

    .nb-theme-default [nbButton].appearance-hero.status-warning {
      background-image: linear-gradient(to right, #ffc94d, #fa0);
      border: none;
      box-shadow: 0 0 0 0 #db8b00, 0 0 0 0 #b86e00, 0 0 transparent;
      color: #fff
    }

    .nb-theme-default [nbButton].appearance-hero.status-warning:focus {
      background-image: linear-gradient(to right, #fa0, #db8b00);
      box-shadow: 0 0 0 0 #db8b00, 0 0 0 0 #b86e00, 0 0 transparent, 0 0 0 .375rem rgba(143, 155, 179, 0.16)
    }

    .nb-theme-default [nbButton].appearance-hero.status-warning:hover {
      background-image: linear-gradient(to right, #ffe59e, #ffc94d)
    }

    .nb-theme-default [nbButton].appearance-hero.status-warning:active {
      background-image: linear-gradient(to right, #fa0, #db8b00)
    }

    .nb-theme-default [nbButton].appearance-hero.status-warning[disabled] {
      background-color: rgba(143, 155, 179, 0.24);
      background-image: none;
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbButton].appearance-hero.status-warning.button-pulse {
      -webkit-animation: button-hero-warning-pulse 0.75s infinite alternate;
      animation: button-hero-warning-pulse 0.75s infinite alternate
    }

    @-webkit-keyframes button-hero-warning-pulse {
      0% {
        box-shadow: none;
        opacity: 0.3
      }

      100% {
        box-shadow: 0 0 1rem 0 #ffc94d;
        opacity: 0.8
      }
    }

    @keyframes button-hero-warning-pulse {
      0% {
        box-shadow: none;
        opacity: 0.3
      }

      100% {
        box-shadow: 0 0 1rem 0 #ffc94d;
        opacity: 0.8
      }
    }

    .nb-theme-default [nbButton].appearance-hero.status-danger {
      background-image: linear-gradient(to right, #ff708d, #ff3d71);
      border: none;
      box-shadow: 0 0 0 0 #db2c66, 0 0 0 0 #b81d5b, 0 0 transparent;
      color: #fff
    }

    .nb-theme-default [nbButton].appearance-hero.status-danger:focus {
      background-image: linear-gradient(to right, #ff3d71, #db2c66);
      box-shadow: 0 0 0 0 #db2c66, 0 0 0 0 #b81d5b, 0 0 transparent, 0 0 0 .375rem rgba(143, 155, 179, 0.16)
    }

    .nb-theme-default [nbButton].appearance-hero.status-danger:hover {
      background-image: linear-gradient(to right, #ffa8b4, #ff708d)
    }

    .nb-theme-default [nbButton].appearance-hero.status-danger:active {
      background-image: linear-gradient(to right, #ff3d71, #db2c66)
    }

    .nb-theme-default [nbButton].appearance-hero.status-danger[disabled] {
      background-color: rgba(143, 155, 179, 0.24);
      background-image: none;
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbButton].appearance-hero.status-danger.button-pulse {
      -webkit-animation: button-hero-danger-pulse 0.75s infinite alternate;
      animation: button-hero-danger-pulse 0.75s infinite alternate
    }

    @-webkit-keyframes button-hero-danger-pulse {
      0% {
        box-shadow: none;
        opacity: 0.3
      }

      100% {
        box-shadow: 0 0 1rem 0 #ff708d;
        opacity: 0.8
      }
    }

    @keyframes button-hero-danger-pulse {
      0% {
        box-shadow: none;
        opacity: 0.3
      }

      100% {
        box-shadow: 0 0 1rem 0 #ff708d;
        opacity: 0.8
      }
    }

    .nb-theme-default [nbButton].appearance-hero.status-info {
      background-image: linear-gradient(to right, #42aaff, #0095ff);
      border: none;
      box-shadow: 0 0 0 0 #006fd6, 0 0 0 0 #0057c2, 0 0 transparent;
      color: #fff
    }

    .nb-theme-default [nbButton].appearance-hero.status-info:focus {
      background-image: linear-gradient(to right, #0095ff, #006fd6);
      box-shadow: 0 0 0 0 #006fd6, 0 0 0 0 #0057c2, 0 0 transparent, 0 0 0 .375rem rgba(143, 155, 179, 0.16)
    }

    .nb-theme-default [nbButton].appearance-hero.status-info:hover {
      background-image: linear-gradient(to right, #94cbff, #42aaff)
    }

    .nb-theme-default [nbButton].appearance-hero.status-info:active {
      background-image: linear-gradient(to right, #0095ff, #006fd6)
    }

    .nb-theme-default [nbButton].appearance-hero.status-info[disabled] {
      background-color: rgba(143, 155, 179, 0.24);
      background-image: none;
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbButton].appearance-hero.status-info.button-pulse {
      -webkit-animation: button-hero-info-pulse 0.75s infinite alternate;
      animation: button-hero-info-pulse 0.75s infinite alternate
    }

    @-webkit-keyframes button-hero-info-pulse {
      0% {
        box-shadow: none;
        opacity: 0.3
      }

      100% {
        box-shadow: 0 0 1rem 0 #42aaff;
        opacity: 0.8
      }
    }

    @keyframes button-hero-info-pulse {
      0% {
        box-shadow: none;
        opacity: 0.3
      }

      100% {
        box-shadow: 0 0 1rem 0 #42aaff;
        opacity: 0.8
      }
    }

    .nb-theme-default [nbButton].appearance-hero.status-control {
      background-image: linear-gradient(to right, #fff, #fff);
      border: none;
      box-shadow: 0 0 0 0 #8f9bb3, 0 0 0 0 #2e3a59, 0 0 transparent;
      color: #222b45
    }

    .nb-theme-default [nbButton].appearance-hero.status-control:focus {
      background-image: linear-gradient(to right, #f7f9fc, #edf1f7);
      box-shadow: 0 0 0 0 #8f9bb3, 0 0 0 0 #2e3a59, 0 0 transparent, 0 0 0 .375rem rgba(143, 155, 179, 0.16)
    }

    .nb-theme-default [nbButton].appearance-hero.status-control:hover {
      background-image: linear-gradient(to right, #fff, #f7f9fc)
    }

    .nb-theme-default [nbButton].appearance-hero.status-control:active {
      background-image: linear-gradient(to right, #f7f9fc, #edf1f7)
    }

    .nb-theme-default [nbButton].appearance-hero.status-control[disabled] {
      background-color: rgba(143, 155, 179, 0.24);
      background-image: none;
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbButton].appearance-hero.status-control.button-pulse {
      -webkit-animation: button-hero-control-pulse 0.75s infinite alternate;
      animation: button-hero-control-pulse 0.75s infinite alternate
    }

    @-webkit-keyframes button-hero-control-pulse {
      0% {
        box-shadow: none;
        opacity: 0.3
      }

      100% {
        box-shadow: 0 0 1rem 0 #fff;
        opacity: 0.8
      }
    }

    @keyframes button-hero-control-pulse {
      0% {
        box-shadow: none;
        opacity: 0.3
      }

      100% {
        box-shadow: 0 0 1rem 0 #fff;
        opacity: 0.8
      }
    }

    .nb-theme-default nb-list-item {
      border-bottom: 1px solid #edf1f7;
      color: #222b45;
      font-family: Open Sans, sans-serif;
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem;
      padding: 1rem
    }

    .nb-theme-default nb-list-item:first-child {
      border-top: 1px solid #edf1f7
    }

    .nb-theme-default [nbInput] {
      border-style: solid;
      border-width: 1px;
      font-family: Open Sans, sans-serif;
      -webkit-appearance: none;
      transition-duration: 0.15s;
      transition-property: border, background-color, color, box-shadow;
      transition-timing-function: ease-in
    }

    .nb-theme-default [nbInput]::-webkit-input-placeholder {
      font-family: Open Sans, sans-serif;
      text-overflow: ellipsis
    }

    .nb-theme-default [nbInput]::-moz-placeholder {
      font-family: Open Sans, sans-serif;
      text-overflow: ellipsis
    }

    .nb-theme-default [nbInput]:-ms-input-placeholder {
      font-family: Open Sans, sans-serif;
      text-overflow: ellipsis
    }

    .nb-theme-default [nbInput]::-ms-input-placeholder {
      font-family: Open Sans, sans-serif;
      text-overflow: ellipsis
    }

    .nb-theme-default [nbInput]::placeholder {
      font-family: Open Sans, sans-serif;
      text-overflow: ellipsis
    }

    .nb-theme-default [nbInput]:focus {
      outline: none
    }

    .nb-theme-default [nbInput].input-full-width {
      width: 100%
    }

    .nb-theme-default [nbInput].status-basic {
      background-color: #f7f9fc;
      border-color: #e4e9f2;
      color: #222b45
    }

    .nb-theme-default [nbInput].status-basic::-webkit-input-placeholder {
      color: #8f9bb3
    }

    .nb-theme-default [nbInput].status-basic::-moz-placeholder {
      color: #8f9bb3
    }

    .nb-theme-default [nbInput].status-basic:-ms-input-placeholder {
      color: #8f9bb3
    }

    .nb-theme-default [nbInput].status-basic::-ms-input-placeholder {
      color: #8f9bb3
    }

    .nb-theme-default [nbInput].status-basic::placeholder {
      color: #8f9bb3
    }

    .nb-theme-default [nbInput].status-basic:focus {
      background-color: #fff;
      border-color: #36f
    }

    .nb-theme-default [nbInput].status-basic:hover {
      background-color: #edf1f7;
      border-color: #e4e9f2
    }

    .nb-theme-default [nbInput].status-basic:disabled {
      background-color: #f7f9fc;
      border-color: #e4e9f2;
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbInput].status-basic:disabled::-webkit-input-placeholder {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbInput].status-basic:disabled::-moz-placeholder {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbInput].status-basic:disabled:-ms-input-placeholder {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbInput].status-basic:disabled::-ms-input-placeholder {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbInput].status-basic:disabled::placeholder {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbInput].status-primary {
      background-color: #f7f9fc;
      border-color: #36f;
      color: #222b45
    }

    .nb-theme-default [nbInput].status-primary::-webkit-input-placeholder {
      color: #8f9bb3
    }

    .nb-theme-default [nbInput].status-primary::-moz-placeholder {
      color: #8f9bb3
    }

    .nb-theme-default [nbInput].status-primary:-ms-input-placeholder {
      color: #8f9bb3
    }

    .nb-theme-default [nbInput].status-primary::-ms-input-placeholder {
      color: #8f9bb3
    }

    .nb-theme-default [nbInput].status-primary::placeholder {
      color: #8f9bb3
    }

    .nb-theme-default [nbInput].status-primary:focus {
      background-color: #fff;
      border-color: #274bdb
    }

    .nb-theme-default [nbInput].status-primary:hover {
      background-color: #edf1f7;
      border-color: #598bff
    }

    .nb-theme-default [nbInput].status-primary:disabled {
      background-color: #f7f9fc;
      border-color: #e4e9f2;
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbInput].status-primary:disabled::-webkit-input-placeholder {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbInput].status-primary:disabled::-moz-placeholder {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbInput].status-primary:disabled:-ms-input-placeholder {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbInput].status-primary:disabled::-ms-input-placeholder {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbInput].status-primary:disabled::placeholder {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbInput].status-success {
      background-color: #f7f9fc;
      border-color: #00d68f;
      color: #222b45
    }

    .nb-theme-default [nbInput].status-success::-webkit-input-placeholder {
      color: #8f9bb3
    }

    .nb-theme-default [nbInput].status-success::-moz-placeholder {
      color: #8f9bb3
    }

    .nb-theme-default [nbInput].status-success:-ms-input-placeholder {
      color: #8f9bb3
    }

    .nb-theme-default [nbInput].status-success::-ms-input-placeholder {
      color: #8f9bb3
    }

    .nb-theme-default [nbInput].status-success::placeholder {
      color: #8f9bb3
    }

    .nb-theme-default [nbInput].status-success:focus {
      background-color: #fff;
      border-color: #00b887
    }

    .nb-theme-default [nbInput].status-success:hover {
      background-color: #edf1f7;
      border-color: #2ce69b
    }

    .nb-theme-default [nbInput].status-success:disabled {
      background-color: #f7f9fc;
      border-color: #e4e9f2;
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbInput].status-success:disabled::-webkit-input-placeholder {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbInput].status-success:disabled::-moz-placeholder {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbInput].status-success:disabled:-ms-input-placeholder {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbInput].status-success:disabled::-ms-input-placeholder {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbInput].status-success:disabled::placeholder {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbInput].status-warning {
      background-color: #f7f9fc;
      border-color: #fa0;
      color: #222b45
    }

    .nb-theme-default [nbInput].status-warning::-webkit-input-placeholder {
      color: #8f9bb3
    }

    .nb-theme-default [nbInput].status-warning::-moz-placeholder {
      color: #8f9bb3
    }

    .nb-theme-default [nbInput].status-warning:-ms-input-placeholder {
      color: #8f9bb3
    }

    .nb-theme-default [nbInput].status-warning::-ms-input-placeholder {
      color: #8f9bb3
    }

    .nb-theme-default [nbInput].status-warning::placeholder {
      color: #8f9bb3
    }

    .nb-theme-default [nbInput].status-warning:focus {
      background-color: #fff;
      border-color: #db8b00
    }

    .nb-theme-default [nbInput].status-warning:hover {
      background-color: #edf1f7;
      border-color: #ffc94d
    }

    .nb-theme-default [nbInput].status-warning:disabled {
      background-color: #f7f9fc;
      border-color: #e4e9f2;
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbInput].status-warning:disabled::-webkit-input-placeholder {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbInput].status-warning:disabled::-moz-placeholder {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbInput].status-warning:disabled:-ms-input-placeholder {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbInput].status-warning:disabled::-ms-input-placeholder {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbInput].status-warning:disabled::placeholder {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbInput].status-danger {
      background-color: #f7f9fc;
      border-color: #ff3d71;
      color: #222b45
    }

    .nb-theme-default [nbInput].status-danger::-webkit-input-placeholder {
      color: #8f9bb3
    }

    .nb-theme-default [nbInput].status-danger::-moz-placeholder {
      color: #8f9bb3
    }

    .nb-theme-default [nbInput].status-danger:-ms-input-placeholder {
      color: #8f9bb3
    }

    .nb-theme-default [nbInput].status-danger::-ms-input-placeholder {
      color: #8f9bb3
    }

    .nb-theme-default [nbInput].status-danger::placeholder {
      color: #8f9bb3
    }

    .nb-theme-default [nbInput].status-danger:focus {
      background-color: #fff;
      border-color: #db2c66
    }

    .nb-theme-default [nbInput].status-danger:hover {
      background-color: #edf1f7;
      border-color: #ff708d
    }

    .nb-theme-default [nbInput].status-danger:disabled {
      background-color: #f7f9fc;
      border-color: #e4e9f2;
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbInput].status-danger:disabled::-webkit-input-placeholder {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbInput].status-danger:disabled::-moz-placeholder {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbInput].status-danger:disabled:-ms-input-placeholder {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbInput].status-danger:disabled::-ms-input-placeholder {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbInput].status-danger:disabled::placeholder {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbInput].status-info {
      background-color: #f7f9fc;
      border-color: #0095ff;
      color: #222b45
    }

    .nb-theme-default [nbInput].status-info::-webkit-input-placeholder {
      color: #8f9bb3
    }

    .nb-theme-default [nbInput].status-info::-moz-placeholder {
      color: #8f9bb3
    }

    .nb-theme-default [nbInput].status-info:-ms-input-placeholder {
      color: #8f9bb3
    }

    .nb-theme-default [nbInput].status-info::-ms-input-placeholder {
      color: #8f9bb3
    }

    .nb-theme-default [nbInput].status-info::placeholder {
      color: #8f9bb3
    }

    .nb-theme-default [nbInput].status-info:focus {
      background-color: #fff;
      border-color: #006fd6
    }

    .nb-theme-default [nbInput].status-info:hover {
      background-color: #edf1f7;
      border-color: #42aaff
    }

    .nb-theme-default [nbInput].status-info:disabled {
      background-color: #f7f9fc;
      border-color: #e4e9f2;
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbInput].status-info:disabled::-webkit-input-placeholder {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbInput].status-info:disabled::-moz-placeholder {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbInput].status-info:disabled:-ms-input-placeholder {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbInput].status-info:disabled::-ms-input-placeholder {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbInput].status-info:disabled::placeholder {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default [nbInput].status-control {
      background-color: rgba(255, 255, 255, 0.24);
      border-color: rgba(255, 255, 255, 0.4);
      color: #fff
    }

    .nb-theme-default [nbInput].status-control::-webkit-input-placeholder {
      color: #fff
    }

    .nb-theme-default [nbInput].status-control::-moz-placeholder {
      color: #fff
    }

    .nb-theme-default [nbInput].status-control:-ms-input-placeholder {
      color: #fff
    }

    .nb-theme-default [nbInput].status-control::-ms-input-placeholder {
      color: #fff
    }

    .nb-theme-default [nbInput].status-control::placeholder {
      color: #fff
    }

    .nb-theme-default [nbInput].status-control:focus {
      background-color: rgba(255, 255, 255, 0.4);
      border-color: #fff
    }

    .nb-theme-default [nbInput].status-control:hover {
      background-color: rgba(255, 255, 255, 0.32);
      border-color: #fff
    }

    .nb-theme-default [nbInput].status-control:disabled {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(143, 155, 179, 0.24);
      color: #fff
    }

    .nb-theme-default [nbInput].status-control:disabled::-webkit-input-placeholder {
      color: #fff
    }

    .nb-theme-default [nbInput].status-control:disabled::-moz-placeholder {
      color: #fff
    }

    .nb-theme-default [nbInput].status-control:disabled:-ms-input-placeholder {
      color: #fff
    }

    .nb-theme-default [nbInput].status-control:disabled::-ms-input-placeholder {
      color: #fff
    }

    .nb-theme-default [nbInput].status-control:disabled::placeholder {
      color: #fff
    }

    .nb-theme-default [nbInput].size-tiny {
      font-size: .75rem;
      font-weight: 600;
      line-height: 1rem;
      padding: 0.1875rem 1.125rem
    }

    .nb-theme-default [nbInput].size-tiny:not(.input-full-width) {
      max-width: 20rem
    }

    .nb-theme-default [nbInput].size-tiny::-webkit-input-placeholder {
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem
    }

    .nb-theme-default [nbInput].size-tiny::-moz-placeholder {
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem
    }

    .nb-theme-default [nbInput].size-tiny:-ms-input-placeholder {
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem
    }

    .nb-theme-default [nbInput].size-tiny::-ms-input-placeholder {
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem
    }

    .nb-theme-default [nbInput].size-tiny::placeholder {
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem
    }

    .nb-theme-default [nbInput].size-small {
      font-size: .8125rem;
      font-weight: 600;
      line-height: 1.5rem;
      padding: 0.1875rem 1.125rem
    }

    .nb-theme-default [nbInput].size-small:not(.input-full-width) {
      max-width: 20rem
    }

    .nb-theme-default [nbInput].size-small::-webkit-input-placeholder {
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem
    }

    .nb-theme-default [nbInput].size-small::-moz-placeholder {
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem
    }

    .nb-theme-default [nbInput].size-small:-ms-input-placeholder {
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem
    }

    .nb-theme-default [nbInput].size-small::-ms-input-placeholder {
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem
    }

    .nb-theme-default [nbInput].size-small::placeholder {
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem
    }

    .nb-theme-default [nbInput].size-medium {
      font-size: .9375rem;
      font-weight: 600;
      line-height: 1.5rem;
      padding: 0.4375rem 1.125rem
    }

    .nb-theme-default [nbInput].size-medium:not(.input-full-width) {
      max-width: 20rem
    }

    .nb-theme-default [nbInput].size-medium::-webkit-input-placeholder {
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem
    }

    .nb-theme-default [nbInput].size-medium::-moz-placeholder {
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem
    }

    .nb-theme-default [nbInput].size-medium:-ms-input-placeholder {
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem
    }

    .nb-theme-default [nbInput].size-medium::-ms-input-placeholder {
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem
    }

    .nb-theme-default [nbInput].size-medium::placeholder {
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem
    }

    .nb-theme-default [nbInput].size-large {
      font-size: .9375rem;
      font-weight: 600;
      line-height: 1.5rem;
      padding: 0.6875rem 1.125rem
    }

    .nb-theme-default [nbInput].size-large:not(.input-full-width) {
      max-width: 30rem
    }

    .nb-theme-default [nbInput].size-large::-webkit-input-placeholder {
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem
    }

    .nb-theme-default [nbInput].size-large::-moz-placeholder {
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem
    }

    .nb-theme-default [nbInput].size-large:-ms-input-placeholder {
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem
    }

    .nb-theme-default [nbInput].size-large::-ms-input-placeholder {
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem
    }

    .nb-theme-default [nbInput].size-large::placeholder {
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem
    }

    .nb-theme-default [nbInput].size-giant {
      font-size: 1.125rem;
      font-weight: 700;
      line-height: 1.5rem;
      padding: 0.9375rem 1.125rem
    }

    .nb-theme-default [nbInput].size-giant:not(.input-full-width) {
      max-width: 30rem
    }

    .nb-theme-default [nbInput].size-giant::-webkit-input-placeholder {
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem
    }

    .nb-theme-default [nbInput].size-giant::-moz-placeholder {
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem
    }

    .nb-theme-default [nbInput].size-giant:-ms-input-placeholder {
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem
    }

    .nb-theme-default [nbInput].size-giant::-ms-input-placeholder {
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem
    }

    .nb-theme-default [nbInput].size-giant::placeholder {
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem
    }

    .nb-theme-default [nbInput].shape-rectangle {
      border-radius: .25rem
    }

    .nb-theme-default [nbInput].shape-semi-round {
      border-radius: .75rem
    }

    .nb-theme-default [nbInput].shape-round {
      border-radius: 1.5rem
    }

    .nb-theme-default .overlay-backdrop {
      background: rgba(0, 0, 0, 0.35)
    }

    .nb-theme-default .cdk-overlay-container {
      z-index: 1040
    }

    .nb-theme-default nb-popover {
      border: 1px solid rgba(0, 0, 0, 0);
      border-radius: .25rem;
      background: #fff;
      box-shadow: 0 0.5rem 1rem 0 rgba(44, 51, 73, 0.1);
      color: #222b45
    }

    .nb-theme-default nb-popover .primitive-overlay {
      font-family: Open Sans, sans-serif;
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem;
      padding: 0.75rem 1rem
    }

    .nb-theme-default nb-popover .arrow {
      border-left: .6875rem solid transparent;
      border-right: .6875rem solid transparent;
      border-bottom: .6875rem solid rgba(0, 0, 0, 0)
    }

    .nb-theme-default nb-popover .arrow::after {
      position: absolute;
      content: ' ';
      width: 0;
      height: 0;
      top: 3px;
      left: calc(50% - .6875rem);
      border-left: .6875rem solid transparent;
      border-right: .6875rem solid transparent;
      border-bottom: .6875rem solid #fff;
      -webkit-clip-path: inset(0 0 2px);
      clip-path: inset(0 0 2px)
    }

    .nb-theme-default nb-popover.nb-overlay-bottom .arrow {
      top: calc(-1 * .6875rem + 1px);
      left: calc(50% - .6875rem)
    }

    .nb-theme-default nb-popover.nb-overlay-bottom-start .arrow {
      top: calc(-1 * .6875rem + 1px)
    }

    [dir=ltr] .nb-theme-default nb-popover.nb-overlay-bottom-start .arrow {
      right: .6875rem
    }

    [dir=rtl] .nb-theme-default nb-popover.nb-overlay-bottom-start .arrow {
      left: .6875rem
    }

    .nb-theme-default nb-popover.nb-overlay-bottom-end .arrow {
      top: calc(-1 * .6875rem + 1px)
    }

    [dir=ltr] .nb-theme-default nb-popover.nb-overlay-bottom-end .arrow {
      left: .6875rem
    }

    [dir=rtl] .nb-theme-default nb-popover.nb-overlay-bottom-end .arrow {
      right: .6875rem
    }

    .nb-theme-default nb-popover.nb-overlay-left .arrow {
      right: calc(-1 * .6875rem - .6875rem / 2 + 2px);
      top: calc(50% - .34375rem);
      transform: rotate(90deg)
    }

    .nb-theme-default nb-popover.nb-overlay-start-top .arrow {
      right: calc(-1 * .6875rem - .6875rem / 2 + 2px);
      bottom: .6875rem;
      transform: rotate(90deg)
    }

    .nb-theme-default nb-popover.nb-overlay-start-bottom .arrow {
      right: calc(-1 * .6875rem - .6875rem / 2 + 2px);
      top: .6875rem;
      transform: rotate(90deg)
    }

    .nb-theme-default nb-popover.nb-overlay-top .arrow {
      bottom: calc(-1 * .6875rem + 1px);
      left: calc(50% - .6875rem);
      transform: rotate(180deg)
    }

    .nb-theme-default nb-popover.nb-overlay-top-start .arrow {
      bottom: calc(-1 * .6875rem + 1px);
      transform: rotate(180deg)
    }

    [dir=ltr] .nb-theme-default nb-popover.nb-overlay-top-start .arrow {
      right: .6875rem
    }

    [dir=rtl] .nb-theme-default nb-popover.nb-overlay-top-start .arrow {
      left: .6875rem
    }

    .nb-theme-default nb-popover.nb-overlay-top-end .arrow {
      bottom: calc(-1 * .6875rem + 1px);
      transform: rotate(180deg)
    }

    [dir=ltr] .nb-theme-default nb-popover.nb-overlay-top-end .arrow {
      left: .6875rem
    }

    [dir=rtl] .nb-theme-default nb-popover.nb-overlay-top-end .arrow {
      right: .6875rem
    }

    .nb-theme-default nb-popover.nb-overlay-right .arrow {
      left: calc(-1 * .6875rem - .6875rem / 2 + 2px);
      top: calc(50% - .34375rem);
      transform: rotate(270deg)
    }

    .nb-theme-default nb-popover.nb-overlay-end-top .arrow {
      left: calc(-1 * .6875rem - .6875rem / 2 + 2px);
      bottom: .6875rem;
      transform: rotate(270deg)
    }

    .nb-theme-default nb-popover.nb-overlay-end-bottom .arrow {
      left: calc(-1 * .6875rem - .6875rem / 2 + 2px);
      top: .6875rem;
      transform: rotate(270deg)
    }

    .nb-theme-default .context-menu-host {
      cursor: pointer
    }

    .nb-theme-default nb-context-menu {
      background-color: #fff;
      border-color: rgba(0, 0, 0, 0);
      border-style: solid;
      border-width: 0;
      border-radius: .25rem;
      box-shadow: 0 0.5rem 1rem 0 rgba(44, 51, 73, 0.1);
      min-width: 10rem;
      max-width: 15rem
    }

    .nb-theme-default nb-context-menu nb-menu {
      border-radius: .25rem;
      overflow: hidden;
      text-align: center
    }

    .nb-theme-default nb-select .select-button {
      min-width: 13rem;
      cursor: pointer
    }

    .nb-theme-default nb-select .select-button.placeholder {
      font-family: Open Sans, sans-serif
    }

    .nb-theme-default nb-select .select-button:focus {
      outline: none
    }

    .nb-theme-default nb-select .select-button[disabled] {
      cursor: default
    }

    .nb-theme-default .options-list-container {
      box-shadow: 0 0.5rem 1rem 0 rgba(44, 51, 73, 0.1);
      border-style: solid;
      border-width: 0;
      overflow: hidden
    }

    .nb-theme-default .options-list-container.top {
      border-bottom: none
    }

    .nb-theme-default .options-list-container.bottom {
      border-top: none
    }

    .nb-theme-default .options-list-container>.options-list {
      margin: 0;
      padding: 0
    }

    .nb-theme-default .options-list {
      background-color: #fff;
      max-height: 20rem;
      height: 100%;
      overflow: auto
    }

    .nb-theme-default nb-option {
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none
    }

    .nb-theme-default nb-option:focus {
      outline: none
    }

    .nb-theme-default nb-select .select-button,
    .nb-theme-default nb-option,
    .nb-theme-default nb-option-group {
      font-family: Open Sans, sans-serif
    }

    .nb-theme-default nb-select.size-tiny .select-button,
    .nb-theme-default .size-tiny nb-option {
      font-size: .75rem;
      font-weight: 600;
      line-height: 1rem
    }

    .nb-theme-default nb-select.size-tiny .select-button.placeholder {
      font-size: .9375rem;
      font-weight: 400
    }

    .nb-theme-default nb-select.size-tiny .select-button.empty::before {
      content: ' ';
      display: block;
      height: 1rem
    }

    .nb-theme-default nb-select.size-tiny:not(.full-width),
    .nb-theme-default .options-list:not(.full-width) {
      max-width: 20rem
    }

    .nb-theme-default nb-select.size-small .select-button,
    .nb-theme-default .size-small nb-option {
      font-size: .8125rem;
      font-weight: 600;
      line-height: 1.5rem
    }

    .nb-theme-default nb-select.size-small .select-button.placeholder {
      font-size: .9375rem;
      font-weight: 400
    }

    .nb-theme-default nb-select.size-small .select-button.empty::before {
      content: ' ';
      display: block;
      height: 1.5rem
    }

    .nb-theme-default nb-select.size-small:not(.full-width),
    .nb-theme-default .options-list:not(.full-width) {
      max-width: 20rem
    }

    .nb-theme-default nb-select.size-medium .select-button,
    .nb-theme-default .size-medium nb-option {
      font-size: .9375rem;
      font-weight: 600;
      line-height: 1.5rem
    }

    .nb-theme-default nb-select.size-medium .select-button.placeholder {
      font-size: .9375rem;
      font-weight: 400
    }

    .nb-theme-default nb-select.size-medium .select-button.empty::before {
      content: ' ';
      display: block;
      height: 1.5rem
    }

    .nb-theme-default nb-select.size-medium:not(.full-width),
    .nb-theme-default .options-list:not(.full-width) {
      max-width: 20rem
    }

    .nb-theme-default nb-select.size-large .select-button,
    .nb-theme-default .size-large nb-option {
      font-size: .9375rem;
      font-weight: 600;
      line-height: 1.5rem
    }

    .nb-theme-default nb-select.size-large .select-button.placeholder {
      font-size: .9375rem;
      font-weight: 400
    }

    .nb-theme-default nb-select.size-large .select-button.empty::before {
      content: ' ';
      display: block;
      height: 1.5rem
    }

    .nb-theme-default nb-select.size-large:not(.full-width),
    .nb-theme-default .options-list:not(.full-width) {
      max-width: 30rem
    }

    .nb-theme-default nb-select.size-giant .select-button,
    .nb-theme-default .size-giant nb-option {
      font-size: 1.125rem;
      font-weight: 700;
      line-height: 1.5rem
    }

    .nb-theme-default nb-select.size-giant .select-button.placeholder {
      font-size: .9375rem;
      font-weight: 400
    }

    .nb-theme-default nb-select.size-giant .select-button.empty::before {
      content: ' ';
      display: block;
      height: 1.5rem
    }

    .nb-theme-default nb-select.size-giant:not(.full-width),
    .nb-theme-default .options-list:not(.full-width) {
      max-width: 30rem
    }

    .nb-theme-default nb-select.shape-rectangle .select-button {
      border-radius: .25rem
    }

    .nb-theme-default .options-list-container.shape-rectangle.bottom {
      border-bottom-left-radius: .25rem;
      border-bottom-right-radius: .25rem
    }

    .nb-theme-default .options-list-container.shape-rectangle.top {
      border-top-left-radius: .25rem;
      border-top-right-radius: .25rem
    }

    .nb-theme-default nb-select.shape-semi-round .select-button {
      border-radius: .75rem
    }

    .nb-theme-default .options-list-container.shape-semi-round.bottom {
      border-bottom-left-radius: .75rem;
      border-bottom-right-radius: .75rem
    }

    .nb-theme-default .options-list-container.shape-semi-round.top {
      border-top-left-radius: .75rem;
      border-top-right-radius: .75rem
    }

    .nb-theme-default nb-select.shape-round .select-button {
      border-radius: 1.5rem
    }

    .nb-theme-default .options-list-container.shape-round.bottom {
      border-bottom-left-radius: 1.5rem;
      border-bottom-right-radius: 1.5rem
    }

    .nb-theme-default .options-list-container.shape-round.top {
      border-top-left-radius: 1.5rem;
      border-top-right-radius: 1.5rem
    }

    .nb-theme-default nb-option-group,
    .nb-theme-default nb-option {
      background-color: #fff;
      color: #222b45
    }

    .nb-theme-default nb-option-group[disabled],
    .nb-theme-default nb-option[disabled] {
      background-color: #fff;
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-option.selected,
    .nb-theme-default nb-calendar-day-picker nb-option.range-cell.start,
    .nb-theme-default nb-calendar-day-picker nb-option.range-cell.end {
      background-color: #fff;
      color: #36f
    }

    .nb-theme-default nb-option:focus {
      background-color: #fff;
      color: #274bdb
    }

    .nb-theme-default nb-option:hover {
      background-color: #fff;
      color: #598bff
    }

    .nb-theme-default nb-select.appearance-outline .select-button {
      border-style: solid;
      border-width: 1px
    }

    .nb-theme-default nb-select.appearance-outline .select-button.top {
      border-top-style: solid;
      border-top-width: 1px
    }

    .nb-theme-default nb-select.appearance-outline .select-button.bottom {
      border-bottom-style: solid;
      border-bottom-width: 1px
    }

    .nb-theme-default nb-select.appearance-outline.status-basic .select-button {
      background-color: #f7f9fc;
      border-color: #e4e9f2;
      color: #222b45
    }

    .nb-theme-default nb-select.appearance-outline.status-basic .select-button.placeholder {
      color: #8f9bb3
    }

    .nb-theme-default nb-select.appearance-outline.status-basic .select-button nb-icon {
      color: #222b45
    }

    .nb-theme-default nb-select.appearance-outline.status-basic .select-button:focus {
      background-color: #fff;
      border-color: #36f
    }

    .nb-theme-default nb-select.appearance-outline.status-basic .select-button:hover {
      background-color: #edf1f7;
      border-color: #e4e9f2
    }

    .nb-theme-default nb-select.appearance-outline.status-basic .select-button[disabled] {
      color: rgba(143, 155, 179, 0.48);
      background-color: #f7f9fc;
      border-color: #e4e9f2
    }

    .nb-theme-default nb-select.appearance-outline.status-basic .select-button[disabled] nb-icon {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-select.appearance-outline.status-basic .select-button.bottom,
    .nb-theme-default nb-select.appearance-outline.status-basic .select-button.top {
      border-color: #e4e9f2
    }

    .nb-theme-default nb-select.appearance-outline.status-basic .select-button.top {
      border-top-color: #e4e9f2
    }

    .nb-theme-default nb-select.appearance-outline.status-basic .select-button.bottom {
      border-bottom-color: #e4e9f2
    }

    .nb-theme-default .options-list-container.appearance-outline.status-basic {
      border-color: #8f9bb3
    }

    .nb-theme-default nb-select.appearance-outline.status-primary .select-button {
      background-color: #f7f9fc;
      border-color: #36f;
      color: #222b45
    }

    .nb-theme-default nb-select.appearance-outline.status-primary .select-button.placeholder {
      color: #8f9bb3
    }

    .nb-theme-default nb-select.appearance-outline.status-primary .select-button nb-icon {
      color: #222b45
    }

    .nb-theme-default nb-select.appearance-outline.status-primary .select-button:focus {
      background-color: #fff;
      border-color: #274bdb
    }

    .nb-theme-default nb-select.appearance-outline.status-primary .select-button:hover {
      background-color: #edf1f7;
      border-color: #598bff
    }

    .nb-theme-default nb-select.appearance-outline.status-primary .select-button[disabled] {
      color: rgba(143, 155, 179, 0.48);
      background-color: #f7f9fc;
      border-color: #e4e9f2
    }

    .nb-theme-default nb-select.appearance-outline.status-primary .select-button[disabled] nb-icon {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-select.appearance-outline.status-primary .select-button.bottom,
    .nb-theme-default nb-select.appearance-outline.status-primary .select-button.top {
      border-color: #36f
    }

    .nb-theme-default nb-select.appearance-outline.status-primary .select-button.top {
      border-top-color: #36f
    }

    .nb-theme-default nb-select.appearance-outline.status-primary .select-button.bottom {
      border-bottom-color: #36f
    }

    .nb-theme-default .options-list-container.appearance-outline.status-primary {
      border-color: #36f
    }

    .nb-theme-default nb-select.appearance-outline.status-success .select-button {
      background-color: #f7f9fc;
      border-color: #00d68f;
      color: #222b45
    }

    .nb-theme-default nb-select.appearance-outline.status-success .select-button.placeholder {
      color: #8f9bb3
    }

    .nb-theme-default nb-select.appearance-outline.status-success .select-button nb-icon {
      color: #222b45
    }

    .nb-theme-default nb-select.appearance-outline.status-success .select-button:focus {
      background-color: #fff;
      border-color: #00b887
    }

    .nb-theme-default nb-select.appearance-outline.status-success .select-button:hover {
      background-color: #edf1f7;
      border-color: #2ce69b
    }

    .nb-theme-default nb-select.appearance-outline.status-success .select-button[disabled] {
      color: rgba(143, 155, 179, 0.48);
      background-color: #f7f9fc;
      border-color: #e4e9f2
    }

    .nb-theme-default nb-select.appearance-outline.status-success .select-button[disabled] nb-icon {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-select.appearance-outline.status-success .select-button.bottom,
    .nb-theme-default nb-select.appearance-outline.status-success .select-button.top {
      border-color: #00d68f
    }

    .nb-theme-default nb-select.appearance-outline.status-success .select-button.top {
      border-top-color: #00d68f
    }

    .nb-theme-default nb-select.appearance-outline.status-success .select-button.bottom {
      border-bottom-color: #00d68f
    }

    .nb-theme-default .options-list-container.appearance-outline.status-success {
      border-color: #00d68f
    }

    .nb-theme-default nb-select.appearance-outline.status-warning .select-button {
      background-color: #f7f9fc;
      border-color: #fa0;
      color: #222b45
    }

    .nb-theme-default nb-select.appearance-outline.status-warning .select-button.placeholder {
      color: #8f9bb3
    }

    .nb-theme-default nb-select.appearance-outline.status-warning .select-button nb-icon {
      color: #222b45
    }

    .nb-theme-default nb-select.appearance-outline.status-warning .select-button:focus {
      background-color: #fff;
      border-color: #db8b00
    }

    .nb-theme-default nb-select.appearance-outline.status-warning .select-button:hover {
      background-color: #edf1f7;
      border-color: #ffc94d
    }

    .nb-theme-default nb-select.appearance-outline.status-warning .select-button[disabled] {
      color: rgba(143, 155, 179, 0.48);
      background-color: #f7f9fc;
      border-color: #e4e9f2
    }

    .nb-theme-default nb-select.appearance-outline.status-warning .select-button[disabled] nb-icon {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-select.appearance-outline.status-warning .select-button.bottom,
    .nb-theme-default nb-select.appearance-outline.status-warning .select-button.top {
      border-color: #fa0
    }

    .nb-theme-default nb-select.appearance-outline.status-warning .select-button.top {
      border-top-color: #fa0
    }

    .nb-theme-default nb-select.appearance-outline.status-warning .select-button.bottom {
      border-bottom-color: #fa0
    }

    .nb-theme-default .options-list-container.appearance-outline.status-warning {
      border-color: #fa0
    }

    .nb-theme-default nb-select.appearance-outline.status-danger .select-button {
      background-color: #f7f9fc;
      border-color: #ff3d71;
      color: #222b45
    }

    .nb-theme-default nb-select.appearance-outline.status-danger .select-button.placeholder {
      color: #8f9bb3
    }

    .nb-theme-default nb-select.appearance-outline.status-danger .select-button nb-icon {
      color: #222b45
    }

    .nb-theme-default nb-select.appearance-outline.status-danger .select-button:focus {
      background-color: #fff;
      border-color: #db2c66
    }

    .nb-theme-default nb-select.appearance-outline.status-danger .select-button:hover {
      background-color: #edf1f7;
      border-color: #ff708d
    }

    .nb-theme-default nb-select.appearance-outline.status-danger .select-button[disabled] {
      color: rgba(143, 155, 179, 0.48);
      background-color: #f7f9fc;
      border-color: #e4e9f2
    }

    .nb-theme-default nb-select.appearance-outline.status-danger .select-button[disabled] nb-icon {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-select.appearance-outline.status-danger .select-button.bottom,
    .nb-theme-default nb-select.appearance-outline.status-danger .select-button.top {
      border-color: #ff3d71
    }

    .nb-theme-default nb-select.appearance-outline.status-danger .select-button.top {
      border-top-color: #ff3d71
    }

    .nb-theme-default nb-select.appearance-outline.status-danger .select-button.bottom {
      border-bottom-color: #ff3d71
    }

    .nb-theme-default .options-list-container.appearance-outline.status-danger {
      border-color: #ff3d71
    }

    .nb-theme-default nb-select.appearance-outline.status-info .select-button {
      background-color: #f7f9fc;
      border-color: #0095ff;
      color: #222b45
    }

    .nb-theme-default nb-select.appearance-outline.status-info .select-button.placeholder {
      color: #8f9bb3
    }

    .nb-theme-default nb-select.appearance-outline.status-info .select-button nb-icon {
      color: #222b45
    }

    .nb-theme-default nb-select.appearance-outline.status-info .select-button:focus {
      background-color: #fff;
      border-color: #006fd6
    }

    .nb-theme-default nb-select.appearance-outline.status-info .select-button:hover {
      background-color: #edf1f7;
      border-color: #42aaff
    }

    .nb-theme-default nb-select.appearance-outline.status-info .select-button[disabled] {
      color: rgba(143, 155, 179, 0.48);
      background-color: #f7f9fc;
      border-color: #e4e9f2
    }

    .nb-theme-default nb-select.appearance-outline.status-info .select-button[disabled] nb-icon {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-select.appearance-outline.status-info .select-button.bottom,
    .nb-theme-default nb-select.appearance-outline.status-info .select-button.top {
      border-color: #0095ff
    }

    .nb-theme-default nb-select.appearance-outline.status-info .select-button.top {
      border-top-color: #0095ff
    }

    .nb-theme-default nb-select.appearance-outline.status-info .select-button.bottom {
      border-bottom-color: #0095ff
    }

    .nb-theme-default .options-list-container.appearance-outline.status-info {
      border-color: #0095ff
    }

    .nb-theme-default nb-select.appearance-outline.status-control .select-button {
      background-color: rgba(255, 255, 255, 0.24);
      border-color: rgba(255, 255, 255, 0.4);
      color: #fff
    }

    .nb-theme-default nb-select.appearance-outline.status-control .select-button.placeholder {
      color: #fff
    }

    .nb-theme-default nb-select.appearance-outline.status-control .select-button nb-icon {
      color: #fff
    }

    .nb-theme-default nb-select.appearance-outline.status-control .select-button:focus {
      background-color: rgba(255, 255, 255, 0.4);
      border-color: #fff
    }

    .nb-theme-default nb-select.appearance-outline.status-control .select-button:hover {
      background-color: rgba(255, 255, 255, 0.32);
      border-color: #fff
    }

    .nb-theme-default nb-select.appearance-outline.status-control .select-button[disabled] {
      color: #fff;
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(255, 255, 255, 0.4)
    }

    .nb-theme-default nb-select.appearance-outline.status-control .select-button[disabled] nb-icon {
      color: #fff
    }

    .nb-theme-default nb-select.appearance-outline.status-control .select-button.bottom,
    .nb-theme-default nb-select.appearance-outline.status-control .select-button.top {
      border-color: rgba(255, 255, 255, 0.4)
    }

    .nb-theme-default nb-select.appearance-outline.status-control .select-button.top {
      border-top-color: rgba(255, 255, 255, 0.4)
    }

    .nb-theme-default nb-select.appearance-outline.status-control .select-button.bottom {
      border-bottom-color: rgba(255, 255, 255, 0.4)
    }

    .nb-theme-default .options-list-container.appearance-outline.status-control {
      border-color: #fff
    }

    .nb-theme-default nb-select.appearance-outline.size-tiny .select-button {
      padding: 0.1875rem 1.125rem
    }

    .nb-theme-default .appearance-outline.size-tiny nb-option-group .option-group-title,
    .nb-theme-default .appearance-outline.size-tiny nb-option {
      padding: 0.1875rem 1.125rem
    }

    .nb-theme-default .appearance-outline.size-tiny nb-option-group nb-option {
      padding-left: 1.25rem
    }

    .nb-theme-default nb-select.appearance-outline.size-small .select-button {
      padding: 0.1875rem 1.125rem
    }

    .nb-theme-default .appearance-outline.size-small nb-option-group .option-group-title,
    .nb-theme-default .appearance-outline.size-small nb-option {
      padding: 0.1875rem 1.125rem
    }

    .nb-theme-default .appearance-outline.size-small nb-option-group nb-option {
      padding-left: 1.75rem
    }

    .nb-theme-default nb-select.appearance-outline.size-medium .select-button {
      padding: 0.4375rem 1.125rem
    }

    .nb-theme-default .appearance-outline.size-medium nb-option-group .option-group-title,
    .nb-theme-default .appearance-outline.size-medium nb-option {
      padding: 0.4375rem 1.125rem
    }

    .nb-theme-default .appearance-outline.size-medium nb-option-group nb-option {
      padding-left: 2.25rem
    }

    .nb-theme-default nb-select.appearance-outline.size-large .select-button {
      padding: 0.6875rem 1.125rem
    }

    .nb-theme-default .appearance-outline.size-large nb-option-group .option-group-title,
    .nb-theme-default .appearance-outline.size-large nb-option {
      padding: 0.6875rem 1.125rem
    }

    .nb-theme-default .appearance-outline.size-large nb-option-group nb-option {
      padding-left: 2.25rem
    }

    .nb-theme-default nb-select.appearance-outline.size-giant .select-button {
      padding: 0.9375rem 1.125rem
    }

    .nb-theme-default .appearance-outline.size-giant nb-option-group .option-group-title,
    .nb-theme-default .appearance-outline.size-giant nb-option {
      padding: 0.9375rem 1.125rem
    }

    .nb-theme-default .appearance-outline.size-giant nb-option-group nb-option {
      padding-left: 2.75rem
    }

    .nb-theme-default nb-select.appearance-filled .select-button {
      border-style: solid;
      border-width: 1px
    }

    .nb-theme-default nb-select.appearance-filled.size-tiny .select-button {
      padding: 0.1875rem 1.125rem
    }

    .nb-theme-default .appearance-filled.size-tiny nb-option-group .option-group-title,
    .nb-theme-default .appearance-filled.size-tiny nb-option {
      padding: 0.1875rem 1.125rem
    }

    .nb-theme-default .appearance-filled.size-tiny nb-option-group nb-option {
      padding-left: 1.25rem
    }

    .nb-theme-default nb-select.appearance-filled.size-small .select-button {
      padding: 0.1875rem 1.125rem
    }

    .nb-theme-default .appearance-filled.size-small nb-option-group .option-group-title,
    .nb-theme-default .appearance-filled.size-small nb-option {
      padding: 0.1875rem 1.125rem
    }

    .nb-theme-default .appearance-filled.size-small nb-option-group nb-option {
      padding-left: 1.75rem
    }

    .nb-theme-default nb-select.appearance-filled.size-medium .select-button {
      padding: 0.4375rem 1.125rem
    }

    .nb-theme-default .appearance-filled.size-medium nb-option-group .option-group-title,
    .nb-theme-default .appearance-filled.size-medium nb-option {
      padding: 0.4375rem 1.125rem
    }

    .nb-theme-default .appearance-filled.size-medium nb-option-group nb-option {
      padding-left: 2.25rem
    }

    .nb-theme-default nb-select.appearance-filled.size-large .select-button {
      padding: 0.6875rem 1.125rem
    }

    .nb-theme-default .appearance-filled.size-large nb-option-group .option-group-title,
    .nb-theme-default .appearance-filled.size-large nb-option {
      padding: 0.6875rem 1.125rem
    }

    .nb-theme-default .appearance-filled.size-large nb-option-group nb-option {
      padding-left: 2.25rem
    }

    .nb-theme-default nb-select.appearance-filled.size-giant .select-button {
      padding: 0.9375rem 1.125rem
    }

    .nb-theme-default .appearance-filled.size-giant nb-option-group .option-group-title,
    .nb-theme-default .appearance-filled.size-giant nb-option {
      padding: 0.9375rem 1.125rem
    }

    .nb-theme-default .appearance-filled.size-giant nb-option-group nb-option {
      padding-left: 2.75rem
    }

    .nb-theme-default nb-select.appearance-filled.status-basic .select-button {
      background-color: #edf1f7;
      border-color: #edf1f7;
      color: #222b45
    }

    .nb-theme-default nb-select.appearance-filled.status-basic .select-button.placeholder {
      color: #8f9bb3
    }

    .nb-theme-default nb-select.appearance-filled.status-basic .select-button:focus {
      background-color: #e4e9f2;
      border-color: #c5cee0
    }

    .nb-theme-default nb-select.appearance-filled.status-basic .select-button:hover {
      background-color: #f7f9fc;
      border-color: #f7f9fc
    }

    .nb-theme-default nb-select.appearance-filled.status-basic .select-button[disabled] {
      background-color: #f7f9fc;
      border-color: #f7f9fc;
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-select.appearance-filled.status-basic .select-button[disabled] nb-icon {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-select.appearance-filled.status-basic .select-button nb-icon {
      color: #222b45
    }

    .nb-theme-default .options-list-container.appearance-filled.status-basic {
      border-color: #8f9bb3
    }

    .nb-theme-default nb-select.appearance-filled.status-primary .select-button {
      background-color: #36f;
      border-color: #36f;
      color: #fff
    }

    .nb-theme-default nb-select.appearance-filled.status-primary .select-button.placeholder {
      color: #fff
    }

    .nb-theme-default nb-select.appearance-filled.status-primary .select-button:focus {
      background-color: #274bdb;
      border-color: #1a34b8
    }

    .nb-theme-default nb-select.appearance-filled.status-primary .select-button:hover {
      background-color: #598bff;
      border-color: #598bff
    }

    .nb-theme-default nb-select.appearance-filled.status-primary .select-button[disabled] {
      background-color: #f7f9fc;
      border-color: #f7f9fc;
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-select.appearance-filled.status-primary .select-button[disabled] nb-icon {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-select.appearance-filled.status-primary .select-button nb-icon {
      color: #fff
    }

    .nb-theme-default .options-list-container.appearance-filled.status-primary {
      border-color: #36f
    }

    .nb-theme-default nb-select.appearance-filled.status-success .select-button {
      background-color: #00d68f;
      border-color: #00d68f;
      color: #fff
    }

    .nb-theme-default nb-select.appearance-filled.status-success .select-button.placeholder {
      color: #fff
    }

    .nb-theme-default nb-select.appearance-filled.status-success .select-button:focus {
      background-color: #00b887;
      border-color: #00997a
    }

    .nb-theme-default nb-select.appearance-filled.status-success .select-button:hover {
      background-color: #2ce69b;
      border-color: #2ce69b
    }

    .nb-theme-default nb-select.appearance-filled.status-success .select-button[disabled] {
      background-color: #f7f9fc;
      border-color: #f7f9fc;
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-select.appearance-filled.status-success .select-button[disabled] nb-icon {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-select.appearance-filled.status-success .select-button nb-icon {
      color: #fff
    }

    .nb-theme-default .options-list-container.appearance-filled.status-success {
      border-color: #00d68f
    }

    .nb-theme-default nb-select.appearance-filled.status-warning .select-button {
      background-color: #fa0;
      border-color: #fa0;
      color: #fff
    }

    .nb-theme-default nb-select.appearance-filled.status-warning .select-button.placeholder {
      color: #fff
    }

    .nb-theme-default nb-select.appearance-filled.status-warning .select-button:focus {
      background-color: #db8b00;
      border-color: #b86e00
    }

    .nb-theme-default nb-select.appearance-filled.status-warning .select-button:hover {
      background-color: #ffc94d;
      border-color: #ffc94d
    }

    .nb-theme-default nb-select.appearance-filled.status-warning .select-button[disabled] {
      background-color: #f7f9fc;
      border-color: #f7f9fc;
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-select.appearance-filled.status-warning .select-button[disabled] nb-icon {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-select.appearance-filled.status-warning .select-button nb-icon {
      color: #fff
    }

    .nb-theme-default .options-list-container.appearance-filled.status-warning {
      border-color: #fa0
    }

    .nb-theme-default nb-select.appearance-filled.status-danger .select-button {
      background-color: #ff3d71;
      border-color: #ff3d71;
      color: #fff
    }

    .nb-theme-default nb-select.appearance-filled.status-danger .select-button.placeholder {
      color: #fff
    }

    .nb-theme-default nb-select.appearance-filled.status-danger .select-button:focus {
      background-color: #db2c66;
      border-color: #b81d5b
    }

    .nb-theme-default nb-select.appearance-filled.status-danger .select-button:hover {
      background-color: #ff708d;
      border-color: #ff708d
    }

    .nb-theme-default nb-select.appearance-filled.status-danger .select-button[disabled] {
      background-color: #f7f9fc;
      border-color: #f7f9fc;
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-select.appearance-filled.status-danger .select-button[disabled] nb-icon {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-select.appearance-filled.status-danger .select-button nb-icon {
      color: #fff
    }

    .nb-theme-default .options-list-container.appearance-filled.status-danger {
      border-color: #ff3d71
    }

    .nb-theme-default nb-select.appearance-filled.status-info .select-button {
      background-color: #0095ff;
      border-color: #0095ff;
      color: #fff
    }

    .nb-theme-default nb-select.appearance-filled.status-info .select-button.placeholder {
      color: #fff
    }

    .nb-theme-default nb-select.appearance-filled.status-info .select-button:focus {
      background-color: #006fd6;
      border-color: #0057c2
    }

    .nb-theme-default nb-select.appearance-filled.status-info .select-button:hover {
      background-color: #42aaff;
      border-color: #42aaff
    }

    .nb-theme-default nb-select.appearance-filled.status-info .select-button[disabled] {
      background-color: #f7f9fc;
      border-color: #f7f9fc;
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-select.appearance-filled.status-info .select-button[disabled] nb-icon {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-select.appearance-filled.status-info .select-button nb-icon {
      color: #fff
    }

    .nb-theme-default .options-list-container.appearance-filled.status-info {
      border-color: #0095ff
    }

    .nb-theme-default nb-select.appearance-filled.status-control .select-button {
      background-color: #fff;
      border-color: #fff;
      color: #222b45
    }

    .nb-theme-default nb-select.appearance-filled.status-control .select-button.placeholder {
      color: #8f9bb3
    }

    .nb-theme-default nb-select.appearance-filled.status-control .select-button:focus {
      background-color: #edf1f7;
      border-color: #c5cee0
    }

    .nb-theme-default nb-select.appearance-filled.status-control .select-button:hover {
      background-color: #f7f9fc;
      border-color: #f7f9fc
    }

    .nb-theme-default nb-select.appearance-filled.status-control .select-button[disabled] {
      background-color: #f7f9fc;
      border-color: #f7f9fc;
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-select.appearance-filled.status-control .select-button[disabled] nb-icon {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-select.appearance-filled.status-control .select-button nb-icon {
      color: #222b45
    }

    .nb-theme-default .options-list-container.appearance-filled.status-control {
      border-color: #edf1f7
    }

    .nb-theme-default nb-select.appearance-hero .select-button {
      border: none
    }

    .nb-theme-default nb-select.appearance-hero.size-tiny .select-button {
      padding: 0.25rem 1.125rem
    }

    .nb-theme-default .appearance-hero.size-tiny nb-option-group .option-group-title,
    .nb-theme-default .appearance-hero.size-tiny nb-option {
      padding: 0.25rem 1.125rem
    }

    .nb-theme-default .appearance-hero.size-tiny nb-option-group nb-option {
      padding-left: 1.25rem
    }

    .nb-theme-default nb-select.appearance-hero.size-small .select-button {
      padding: 0.25rem 1.125rem
    }

    .nb-theme-default .appearance-hero.size-small nb-option-group .option-group-title,
    .nb-theme-default .appearance-hero.size-small nb-option {
      padding: 0.25rem 1.125rem
    }

    .nb-theme-default .appearance-hero.size-small nb-option-group nb-option {
      padding-left: 1.75rem
    }

    .nb-theme-default nb-select.appearance-hero.size-medium .select-button {
      padding: 0.5rem 1.125rem
    }

    .nb-theme-default .appearance-hero.size-medium nb-option-group .option-group-title,
    .nb-theme-default .appearance-hero.size-medium nb-option {
      padding: 0.5rem 1.125rem
    }

    .nb-theme-default .appearance-hero.size-medium nb-option-group nb-option {
      padding-left: 2.25rem
    }

    .nb-theme-default nb-select.appearance-hero.size-large .select-button {
      padding: 0.75rem 1.125rem
    }

    .nb-theme-default .appearance-hero.size-large nb-option-group .option-group-title,
    .nb-theme-default .appearance-hero.size-large nb-option {
      padding: 0.75rem 1.125rem
    }

    .nb-theme-default .appearance-hero.size-large nb-option-group nb-option {
      padding-left: 2.25rem
    }

    .nb-theme-default nb-select.appearance-hero.size-giant .select-button {
      padding: 1rem 1.125rem
    }

    .nb-theme-default .appearance-hero.size-giant nb-option-group .option-group-title,
    .nb-theme-default .appearance-hero.size-giant nb-option {
      padding: 1rem 1.125rem
    }

    .nb-theme-default .appearance-hero.size-giant nb-option-group nb-option {
      padding-left: 2.75rem
    }

    .nb-theme-default nb-select.appearance-hero.status-basic .select-button {
      background-image: linear-gradient(to right, #f7f9fc, #edf1f7);
      color: #222b45
    }

    .nb-theme-default nb-select.appearance-hero.status-basic .select-button.placeholder {
      color: #8f9bb3
    }

    .nb-theme-default nb-select.appearance-hero.status-basic .select-button:focus {
      background-image: linear-gradient(to right, #edf1f7, #e4e9f2)
    }

    .nb-theme-default nb-select.appearance-hero.status-basic .select-button:hover {
      background-image: linear-gradient(to right, #fff, #f7f9fc)
    }

    .nb-theme-default nb-select.appearance-hero.status-basic .select-button[disabled] {
      color: rgba(143, 155, 179, 0.48);
      background-color: #f7f9fc;
      background-image: none
    }

    .nb-theme-default nb-select.appearance-hero.status-basic .select-button[disabled] nb-icon {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-select.appearance-hero.status-basic .select-button nb-icon {
      color: #222b45
    }

    .nb-theme-default .options-list-container.appearance-hero.status-basic {
      border-color: #8f9bb3
    }

    .nb-theme-default nb-select.appearance-hero.status-primary .select-button {
      background-image: linear-gradient(to right, #598bff, #36f);
      color: #fff
    }

    .nb-theme-default nb-select.appearance-hero.status-primary .select-button.placeholder {
      color: #fff
    }

    .nb-theme-default nb-select.appearance-hero.status-primary .select-button:focus {
      background-image: linear-gradient(to right, #36f, #274bdb)
    }

    .nb-theme-default nb-select.appearance-hero.status-primary .select-button:hover {
      background-image: linear-gradient(to right, #a6c1ff, #598bff)
    }

    .nb-theme-default nb-select.appearance-hero.status-primary .select-button[disabled] {
      color: rgba(143, 155, 179, 0.48);
      background-color: #f7f9fc;
      background-image: none
    }

    .nb-theme-default nb-select.appearance-hero.status-primary .select-button[disabled] nb-icon {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-select.appearance-hero.status-primary .select-button nb-icon {
      color: #fff
    }

    .nb-theme-default .options-list-container.appearance-hero.status-primary {
      border-color: #36f
    }

    .nb-theme-default nb-select.appearance-hero.status-success .select-button {
      background-image: linear-gradient(to right, #2ce69b, #00d68f);
      color: #fff
    }

    .nb-theme-default nb-select.appearance-hero.status-success .select-button.placeholder {
      color: #fff
    }

    .nb-theme-default nb-select.appearance-hero.status-success .select-button:focus {
      background-image: linear-gradient(to right, #00d68f, #00b887)
    }

    .nb-theme-default nb-select.appearance-hero.status-success .select-button:hover {
      background-image: linear-gradient(to right, #8cfac7, #2ce69b)
    }

    .nb-theme-default nb-select.appearance-hero.status-success .select-button[disabled] {
      color: rgba(143, 155, 179, 0.48);
      background-color: #f7f9fc;
      background-image: none
    }

    .nb-theme-default nb-select.appearance-hero.status-success .select-button[disabled] nb-icon {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-select.appearance-hero.status-success .select-button nb-icon {
      color: #fff
    }

    .nb-theme-default .options-list-container.appearance-hero.status-success {
      border-color: #00d68f
    }

    .nb-theme-default nb-select.appearance-hero.status-warning .select-button {
      background-image: linear-gradient(to right, #ffc94d, #fa0);
      color: #fff
    }

    .nb-theme-default nb-select.appearance-hero.status-warning .select-button.placeholder {
      color: #fff
    }

    .nb-theme-default nb-select.appearance-hero.status-warning .select-button:focus {
      background-image: linear-gradient(to right, #fa0, #db8b00)
    }

    .nb-theme-default nb-select.appearance-hero.status-warning .select-button:hover {
      background-image: linear-gradient(to right, #ffe59e, #ffc94d)
    }

    .nb-theme-default nb-select.appearance-hero.status-warning .select-button[disabled] {
      color: rgba(143, 155, 179, 0.48);
      background-color: #f7f9fc;
      background-image: none
    }

    .nb-theme-default nb-select.appearance-hero.status-warning .select-button[disabled] nb-icon {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-select.appearance-hero.status-warning .select-button nb-icon {
      color: #fff
    }

    .nb-theme-default .options-list-container.appearance-hero.status-warning {
      border-color: #fa0
    }

    .nb-theme-default nb-select.appearance-hero.status-danger .select-button {
      background-image: linear-gradient(to right, #ff708d, #ff3d71);
      color: #fff
    }

    .nb-theme-default nb-select.appearance-hero.status-danger .select-button.placeholder {
      color: #fff
    }

    .nb-theme-default nb-select.appearance-hero.status-danger .select-button:focus {
      background-image: linear-gradient(to right, #ff3d71, #db2c66)
    }

    .nb-theme-default nb-select.appearance-hero.status-danger .select-button:hover {
      background-image: linear-gradient(to right, #ffa8b4, #ff708d)
    }

    .nb-theme-default nb-select.appearance-hero.status-danger .select-button[disabled] {
      color: rgba(143, 155, 179, 0.48);
      background-color: #f7f9fc;
      background-image: none
    }

    .nb-theme-default nb-select.appearance-hero.status-danger .select-button[disabled] nb-icon {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-select.appearance-hero.status-danger .select-button nb-icon {
      color: #fff
    }

    .nb-theme-default .options-list-container.appearance-hero.status-danger {
      border-color: #ff3d71
    }

    .nb-theme-default nb-select.appearance-hero.status-info .select-button {
      background-image: linear-gradient(to right, #42aaff, #0095ff);
      color: #fff
    }

    .nb-theme-default nb-select.appearance-hero.status-info .select-button.placeholder {
      color: #fff
    }

    .nb-theme-default nb-select.appearance-hero.status-info .select-button:focus {
      background-image: linear-gradient(to right, #0095ff, #006fd6)
    }

    .nb-theme-default nb-select.appearance-hero.status-info .select-button:hover {
      background-image: linear-gradient(to right, #94cbff, #42aaff)
    }

    .nb-theme-default nb-select.appearance-hero.status-info .select-button[disabled] {
      color: rgba(143, 155, 179, 0.48);
      background-color: #f7f9fc;
      background-image: none
    }

    .nb-theme-default nb-select.appearance-hero.status-info .select-button[disabled] nb-icon {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-select.appearance-hero.status-info .select-button nb-icon {
      color: #fff
    }

    .nb-theme-default .options-list-container.appearance-hero.status-info {
      border-color: #0095ff
    }

    .nb-theme-default nb-select.appearance-hero.status-control .select-button {
      background-image: linear-gradient(to right, #fff, #fff);
      color: #222b45
    }

    .nb-theme-default nb-select.appearance-hero.status-control .select-button.placeholder {
      color: #8f9bb3
    }

    .nb-theme-default nb-select.appearance-hero.status-control .select-button:focus {
      background-image: linear-gradient(to right, #f7f9fc, #edf1f7)
    }

    .nb-theme-default nb-select.appearance-hero.status-control .select-button:hover {
      background-image: linear-gradient(to right, #fff, #f7f9fc)
    }

    .nb-theme-default nb-select.appearance-hero.status-control .select-button[disabled] {
      color: rgba(143, 155, 179, 0.48);
      background-color: #f7f9fc;
      background-image: none
    }

    .nb-theme-default nb-select.appearance-hero.status-control .select-button[disabled] nb-icon {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-select.appearance-hero.status-control .select-button nb-icon {
      color: #222b45
    }

    .nb-theme-default .options-list-container.appearance-hero.status-control {
      border-color: #fff
    }

    .nb-theme-default nb-toast {
      border-style: solid;
      border-width: 1px;
      border-radius: .25rem;
      padding: 1rem;
      box-shadow: 0 0.5rem 1rem 0 rgba(44, 51, 73, 0.1)
    }

    .nb-theme-default nb-toast .title {
      font-family: Open Sans, sans-serif;
      font-size: .9375rem;
      font-weight: 600;
      line-height: 1.5rem
    }

    .nb-theme-default nb-toast .message {
      font-family: Open Sans, sans-serif;
      font-size: .8125rem;
      font-weight: 400;
      line-height: 1.125rem
    }

    .nb-theme-default nb-toast .icon-container {
      border-radius: .25rem;
      min-width: 2.5rem;
      min-height: 2.5rem;
      display: flex;
      justify-content: center;
      align-items: center
    }

    [dir=ltr] .nb-theme-default nb-toast .icon-container {
      margin-right: 1.25rem
    }

    [dir=rtl] .nb-theme-default nb-toast .icon-container {
      margin-left: 1.25rem
    }

    .nb-theme-default nb-toast .icon-container nb-icon {
      font-size: 1.5rem
    }

    .nb-theme-default nb-toast.status-basic {
      background: #fff;
      border-color: #edf1f7;
      color: #222b45
    }

    .nb-theme-default nb-toast.status-basic .title {
      color: #222b45
    }

    .nb-theme-default nb-toast.status-basic.destroy-by-click:hover {
      background: #fff;
      border-color: #edf1f7
    }

    .nb-theme-default nb-toast.status-basic .icon-container {
      background: #fff;
      color: #222b45
    }

    .nb-theme-default nb-toast.status-primary {
      background: #36f;
      border-color: #36f;
      color: #fff
    }

    .nb-theme-default nb-toast.status-primary .title {
      color: #fff
    }

    .nb-theme-default nb-toast.status-primary.destroy-by-click:hover {
      background: #598bff;
      border-color: #598bff
    }

    .nb-theme-default nb-toast.status-primary .icon-container {
      background: #fff;
      color: #36f
    }

    .nb-theme-default nb-toast.status-success {
      background: #00d68f;
      border-color: #00d68f;
      color: #fff
    }

    .nb-theme-default nb-toast.status-success .title {
      color: #fff
    }

    .nb-theme-default nb-toast.status-success.destroy-by-click:hover {
      background: #2ce69b;
      border-color: #2ce69b
    }

    .nb-theme-default nb-toast.status-success .icon-container {
      background: #fff;
      color: #00d68f
    }

    .nb-theme-default nb-toast.status-warning {
      background: #fa0;
      border-color: #fa0;
      color: #fff
    }

    .nb-theme-default nb-toast.status-warning .title {
      color: #fff
    }

    .nb-theme-default nb-toast.status-warning.destroy-by-click:hover {
      background: #ffc94d;
      border-color: #ffc94d
    }

    .nb-theme-default nb-toast.status-warning .icon-container {
      background: #fff;
      color: #fa0
    }

    .nb-theme-default nb-toast.status-danger {
      background: #ff3d71;
      border-color: #ff3d71;
      color: #fff
    }

    .nb-theme-default nb-toast.status-danger .title {
      color: #fff
    }

    .nb-theme-default nb-toast.status-danger.destroy-by-click:hover {
      background: #ff708d;
      border-color: #ff708d
    }

    .nb-theme-default nb-toast.status-danger .icon-container {
      background: #fff;
      color: #ff3d71
    }

    .nb-theme-default nb-toast.status-info {
      background: #0095ff;
      border-color: #0095ff;
      color: #fff
    }

    .nb-theme-default nb-toast.status-info .title {
      color: #fff
    }

    .nb-theme-default nb-toast.status-info.destroy-by-click:hover {
      background: #42aaff;
      border-color: #42aaff
    }

    .nb-theme-default nb-toast.status-info .icon-container {
      background: #fff;
      color: #0095ff
    }

    .nb-theme-default nb-toast.status-control {
      background: #fff;
      border-color: #fff;
      color: #222b45
    }

    .nb-theme-default nb-toast.status-control .title {
      color: #222b45
    }

    .nb-theme-default nb-toast.status-control.destroy-by-click:hover {
      background: #f7f9fc;
      border-color: #f7f9fc
    }

    .nb-theme-default nb-toast.status-control .icon-container {
      background: #fff;
      color: #222b45
    }

    .nb-theme-default .toastr-overlay-container {
      z-index: 1041
    }

    .nb-theme-default nb-tooltip {
      box-shadow: 0 0.5rem 1rem 0 rgba(44, 51, 73, 0.1);
      background: #151a30;
      border: 0 dashed rgba(0, 0, 0, 0);
      border-radius: .25rem;
      padding: 0.5rem 1rem;
      max-width: 16rem
    }

    .nb-theme-default nb-tooltip nb-icon:only-child {
      height: 1rem;
      width: 1rem
    }

    .nb-theme-default nb-tooltip nb-icon:not(:only-child) {
      height: .75rem;
      width: .75rem
    }

    .nb-theme-default nb-tooltip .content {
      color: #fff;
      font-family: Open Sans, sans-serif;
      font-size: .75rem;
      font-weight: 400;
      line-height: 1rem
    }

    .nb-theme-default nb-tooltip .arrow {
      border-bottom: 6px dashed #151a30
    }

    .nb-theme-default nb-tooltip.status-basic {
      background: #edf1f7;
      border-color: rgba(0, 0, 0, 0)
    }

    .nb-theme-default nb-tooltip.status-basic .arrow {
      border-bottom-color: #edf1f7
    }

    .nb-theme-default nb-tooltip.status-basic .content {
      color: #222b45
    }

    .nb-theme-default nb-tooltip.status-primary {
      background: #36f;
      border-color: rgba(0, 0, 0, 0)
    }

    .nb-theme-default nb-tooltip.status-primary .arrow {
      border-bottom-color: #36f
    }

    .nb-theme-default nb-tooltip.status-primary .content {
      color: #fff
    }

    .nb-theme-default nb-tooltip.status-success {
      background: #00d68f;
      border-color: rgba(0, 0, 0, 0)
    }

    .nb-theme-default nb-tooltip.status-success .arrow {
      border-bottom-color: #00d68f
    }

    .nb-theme-default nb-tooltip.status-success .content {
      color: #fff
    }

    .nb-theme-default nb-tooltip.status-warning {
      background: #fa0;
      border-color: rgba(0, 0, 0, 0)
    }

    .nb-theme-default nb-tooltip.status-warning .arrow {
      border-bottom-color: #fa0
    }

    .nb-theme-default nb-tooltip.status-warning .content {
      color: #fff
    }

    .nb-theme-default nb-tooltip.status-danger {
      background: #ff3d71;
      border-color: rgba(0, 0, 0, 0)
    }

    .nb-theme-default nb-tooltip.status-danger .arrow {
      border-bottom-color: #ff3d71
    }

    .nb-theme-default nb-tooltip.status-danger .content {
      color: #fff
    }

    .nb-theme-default nb-tooltip.status-info {
      background: #0095ff;
      border-color: rgba(0, 0, 0, 0)
    }

    .nb-theme-default nb-tooltip.status-info .arrow {
      border-bottom-color: #0095ff
    }

    .nb-theme-default nb-tooltip.status-info .content {
      color: #fff
    }

    .nb-theme-default nb-tooltip.status-control {
      background: #fff;
      border-color: rgba(0, 0, 0, 0)
    }

    .nb-theme-default nb-tooltip.status-control .arrow {
      border-bottom-color: #fff
    }

    .nb-theme-default nb-tooltip.status-control .content {
      color: #222b45
    }

    .nb-theme-default nb-datepicker-container {
      border-color: #fff;
      border-style: solid;
      border-width: 0;
      border-radius: .25rem;
      background: #fff;
      box-shadow: 0 0.5rem 1rem 0 rgba(44, 51, 73, 0.1)
    }

    .nb-theme-default nb-datepicker-container .primitive-overlay {
      color: #222b45
    }

    .nb-theme-default nb-datepicker-container nb-card {
      box-shadow: none
    }

    .nb-theme-default nb-datepicker-container .arrow {
      border-left: .6875rem solid transparent;
      border-right: .6875rem solid transparent;
      border-bottom: .6875rem solid #fff
    }

    .nb-theme-default nb-datepicker-container .arrow::after {
      position: absolute;
      content: ' ';
      width: 0;
      height: 0;
      top: 3px;
      left: calc(50% - calc(.6875rem - 2px));
      border-left: calc(.6875rem - 2px) solid transparent;
      border-right: calc(.6875rem - 2px) solid transparent;
      border-bottom: calc(.6875rem - 2px) solid #fff
    }

    .nb-theme-default nb-datepicker-container.nb-overlay-bottom .arrow {
      top: calc(-1 * .6875rem + 1px);
      left: calc(50% - .6875rem)
    }

    .nb-theme-default nb-datepicker-container.nb-overlay-bottom-start .arrow {
      top: calc(-1 * .6875rem + 1px)
    }

    [dir=ltr] .nb-theme-default nb-datepicker-container.nb-overlay-bottom-start .arrow {
      right: .6875rem
    }

    [dir=rtl] .nb-theme-default nb-datepicker-container.nb-overlay-bottom-start .arrow {
      left: .6875rem
    }

    .nb-theme-default nb-datepicker-container.nb-overlay-bottom-end .arrow {
      top: calc(-1 * .6875rem + 1px)
    }

    [dir=ltr] .nb-theme-default nb-datepicker-container.nb-overlay-bottom-end .arrow {
      left: .6875rem
    }

    [dir=rtl] .nb-theme-default nb-datepicker-container.nb-overlay-bottom-end .arrow {
      right: .6875rem
    }

    .nb-theme-default nb-datepicker-container.nb-overlay-left .arrow {
      right: calc(-1 * .6875rem - .6875rem / 2 + 2px);
      top: calc(50% - .34375rem);
      transform: rotate(90deg)
    }

    .nb-theme-default nb-datepicker-container.nb-overlay-start-top .arrow {
      right: calc(-1 * .6875rem - .6875rem / 2 + 2px);
      bottom: .6875rem;
      transform: rotate(90deg)
    }

    .nb-theme-default nb-datepicker-container.nb-overlay-start-bottom .arrow {
      right: calc(-1 * .6875rem - .6875rem / 2 + 2px);
      top: .6875rem;
      transform: rotate(90deg)
    }

    .nb-theme-default nb-datepicker-container.nb-overlay-top .arrow {
      bottom: calc(-1 * .6875rem + 1px);
      left: calc(50% - .6875rem);
      transform: rotate(180deg)
    }

    .nb-theme-default nb-datepicker-container.nb-overlay-top-start .arrow {
      bottom: calc(-1 * .6875rem + 1px);
      transform: rotate(180deg)
    }

    [dir=ltr] .nb-theme-default nb-datepicker-container.nb-overlay-top-start .arrow {
      right: .6875rem
    }

    [dir=rtl] .nb-theme-default nb-datepicker-container.nb-overlay-top-start .arrow {
      left: .6875rem
    }

    .nb-theme-default nb-datepicker-container.nb-overlay-top-end .arrow {
      bottom: calc(-1 * .6875rem + 1px);
      transform: rotate(180deg)
    }

    [dir=ltr] .nb-theme-default nb-datepicker-container.nb-overlay-top-end .arrow {
      left: .6875rem
    }

    [dir=rtl] .nb-theme-default nb-datepicker-container.nb-overlay-top-end .arrow {
      right: .6875rem
    }

    .nb-theme-default nb-datepicker-container.nb-overlay-right .arrow {
      left: calc(-1 * .6875rem - .6875rem / 2 + 2px);
      top: calc(50% - .34375rem);
      transform: rotate(270deg)
    }

    .nb-theme-default nb-datepicker-container.nb-overlay-end-top .arrow {
      left: calc(-1 * .6875rem - .6875rem / 2 + 2px);
      bottom: .6875rem;
      transform: rotate(270deg)
    }

    .nb-theme-default nb-datepicker-container.nb-overlay-end-bottom .arrow {
      left: calc(-1 * .6875rem - .6875rem / 2 + 2px);
      top: .6875rem;
      transform: rotate(270deg)
    }

    .nb-theme-default nb-radio .outer-circle,
    .nb-theme-default nb-radio .inner-circle {
      height: 1.125rem;
      width: 1.125rem
    }

    .nb-theme-default nb-radio .outer-circle {
      border-style: solid;
      border-width: 1px
    }

    .nb-theme-default nb-radio .native-input:enabled:focus+.outer-circle {
      box-shadow: 0 0 0 .375rem rgba(143, 155, 179, 0.16)
    }

    .nb-theme-default nb-radio.status-basic .native-input:enabled+.outer-circle {
      background-color: rgba(143, 155, 179, 0.08);
      border-color: #8f9bb3
    }

    .nb-theme-default nb-radio.status-basic .native-input:enabled:checked+.outer-circle {
      background-color: rgba(0, 0, 0, 0);
      border-color: #36f
    }

    .nb-theme-default nb-radio.status-basic .native-input:enabled:checked~.inner-circle {
      background-color: #36f
    }

    .nb-theme-default nb-radio.status-basic .native-input:enabled:focus+.outer-circle {
      border-color: #1a34b8
    }

    .nb-theme-default nb-radio.status-basic .native-input:enabled:checked:focus~.inner-circle {
      background-color: #274bdb
    }

    .nb-theme-default nb-radio.status-basic label:hover .native-input:enabled+.outer-circle {
      background-color: rgba(51, 102, 255, 0.16);
      border-color: #36f
    }

    .nb-theme-default nb-radio.status-basic label:hover .native-input:checked:enabled+.outer-circle {
      background-color: rgba(0, 0, 0, 0)
    }

    .nb-theme-default nb-radio.status-basic label:hover .native-input:checked:enabled~.inner-circle {
      background-color: #598bff
    }

    .nb-theme-default nb-radio.status-basic label .native-input:enabled:active+.outer-circle {
      border-color: #274bdb
    }

    .nb-theme-default nb-radio.status-basic label .native-input:enabled:checked:active~.inner-circle {
      background-color: #274bdb
    }

    .nb-theme-default nb-radio.status-basic .text {
      color: #222b45
    }

    .nb-theme-default nb-radio.status-basic .native-input:disabled+.outer-circle {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(143, 155, 179, 0.24)
    }

    .nb-theme-default nb-radio.status-basic .native-input:disabled~.text {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-radio.status-basic .native-input:disabled:checked+.outer-circle {
      background-color: rgba(0, 0, 0, 0);
      border-color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-radio.status-basic .native-input:disabled:checked~.inner-circle {
      background-color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-radio.status-primary .native-input:enabled+.outer-circle {
      background-color: rgba(51, 102, 255, 0.08);
      border-color: #36f
    }

    .nb-theme-default nb-radio.status-primary .native-input:enabled:checked+.outer-circle {
      background-color: rgba(0, 0, 0, 0);
      border-color: #36f
    }

    .nb-theme-default nb-radio.status-primary .native-input:enabled:checked~.inner-circle {
      background-color: #36f
    }

    .nb-theme-default nb-radio.status-primary .native-input:enabled:focus+.outer-circle {
      border-color: #1a34b8
    }

    .nb-theme-default nb-radio.status-primary .native-input:enabled:checked:focus~.inner-circle {
      background-color: #274bdb
    }

    .nb-theme-default nb-radio.status-primary label:hover .native-input:enabled+.outer-circle {
      background-color: rgba(51, 102, 255, 0.16);
      border-color: #36f
    }

    .nb-theme-default nb-radio.status-primary label:hover .native-input:checked:enabled+.outer-circle {
      background-color: rgba(0, 0, 0, 0)
    }

    .nb-theme-default nb-radio.status-primary label:hover .native-input:checked:enabled~.inner-circle {
      background-color: #598bff
    }

    .nb-theme-default nb-radio.status-primary label .native-input:enabled:active+.outer-circle {
      border-color: #274bdb
    }

    .nb-theme-default nb-radio.status-primary label .native-input:enabled:checked:active~.inner-circle {
      background-color: #274bdb
    }

    .nb-theme-default nb-radio.status-primary .text {
      color: #222b45
    }

    .nb-theme-default nb-radio.status-primary .native-input:disabled+.outer-circle {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(143, 155, 179, 0.24)
    }

    .nb-theme-default nb-radio.status-primary .native-input:disabled~.text {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-radio.status-primary .native-input:disabled:checked+.outer-circle {
      background-color: rgba(0, 0, 0, 0);
      border-color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-radio.status-primary .native-input:disabled:checked~.inner-circle {
      background-color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-radio.status-success .native-input:enabled+.outer-circle {
      background-color: rgba(0, 214, 143, 0.08);
      border-color: #00d68f
    }

    .nb-theme-default nb-radio.status-success .native-input:enabled:checked+.outer-circle {
      background-color: rgba(0, 0, 0, 0);
      border-color: #00d68f
    }

    .nb-theme-default nb-radio.status-success .native-input:enabled:checked~.inner-circle {
      background-color: #00d68f
    }

    .nb-theme-default nb-radio.status-success .native-input:enabled:focus+.outer-circle {
      border-color: #00997a
    }

    .nb-theme-default nb-radio.status-success .native-input:enabled:checked:focus~.inner-circle {
      background-color: #00b887
    }

    .nb-theme-default nb-radio.status-success label:hover .native-input:enabled+.outer-circle {
      background-color: rgba(0, 214, 143, 0.16);
      border-color: #00d68f
    }

    .nb-theme-default nb-radio.status-success label:hover .native-input:checked:enabled+.outer-circle {
      background-color: rgba(0, 0, 0, 0)
    }

    .nb-theme-default nb-radio.status-success label:hover .native-input:checked:enabled~.inner-circle {
      background-color: #2ce69b
    }

    .nb-theme-default nb-radio.status-success label .native-input:enabled:active+.outer-circle {
      border-color: #00b887
    }

    .nb-theme-default nb-radio.status-success label .native-input:enabled:checked:active~.inner-circle {
      background-color: #00b887
    }

    .nb-theme-default nb-radio.status-success .text {
      color: #222b45
    }

    .nb-theme-default nb-radio.status-success .native-input:disabled+.outer-circle {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(143, 155, 179, 0.24)
    }

    .nb-theme-default nb-radio.status-success .native-input:disabled~.text {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-radio.status-success .native-input:disabled:checked+.outer-circle {
      background-color: rgba(0, 0, 0, 0);
      border-color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-radio.status-success .native-input:disabled:checked~.inner-circle {
      background-color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-radio.status-warning .native-input:enabled+.outer-circle {
      background-color: rgba(255, 170, 0, 0.08);
      border-color: #fa0
    }

    .nb-theme-default nb-radio.status-warning .native-input:enabled:checked+.outer-circle {
      background-color: rgba(0, 0, 0, 0);
      border-color: #fa0
    }

    .nb-theme-default nb-radio.status-warning .native-input:enabled:checked~.inner-circle {
      background-color: #fa0
    }

    .nb-theme-default nb-radio.status-warning .native-input:enabled:focus+.outer-circle {
      border-color: #b86e00
    }

    .nb-theme-default nb-radio.status-warning .native-input:enabled:checked:focus~.inner-circle {
      background-color: #db8b00
    }

    .nb-theme-default nb-radio.status-warning label:hover .native-input:enabled+.outer-circle {
      background-color: rgba(255, 170, 0, 0.16);
      border-color: #fa0
    }

    .nb-theme-default nb-radio.status-warning label:hover .native-input:checked:enabled+.outer-circle {
      background-color: rgba(0, 0, 0, 0)
    }

    .nb-theme-default nb-radio.status-warning label:hover .native-input:checked:enabled~.inner-circle {
      background-color: #ffc94d
    }

    .nb-theme-default nb-radio.status-warning label .native-input:enabled:active+.outer-circle {
      border-color: #db8b00
    }

    .nb-theme-default nb-radio.status-warning label .native-input:enabled:checked:active~.inner-circle {
      background-color: #db8b00
    }

    .nb-theme-default nb-radio.status-warning .text {
      color: #222b45
    }

    .nb-theme-default nb-radio.status-warning .native-input:disabled+.outer-circle {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(143, 155, 179, 0.24)
    }

    .nb-theme-default nb-radio.status-warning .native-input:disabled~.text {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-radio.status-warning .native-input:disabled:checked+.outer-circle {
      background-color: rgba(0, 0, 0, 0);
      border-color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-radio.status-warning .native-input:disabled:checked~.inner-circle {
      background-color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-radio.status-danger .native-input:enabled+.outer-circle {
      background-color: rgba(255, 61, 113, 0.08);
      border-color: #ff3d71
    }

    .nb-theme-default nb-radio.status-danger .native-input:enabled:checked+.outer-circle {
      background-color: rgba(0, 0, 0, 0);
      border-color: #ff3d71
    }

    .nb-theme-default nb-radio.status-danger .native-input:enabled:checked~.inner-circle {
      background-color: #ff3d71
    }

    .nb-theme-default nb-radio.status-danger .native-input:enabled:focus+.outer-circle {
      border-color: #b81d5b
    }

    .nb-theme-default nb-radio.status-danger .native-input:enabled:checked:focus~.inner-circle {
      background-color: #db2c66
    }

    .nb-theme-default nb-radio.status-danger label:hover .native-input:enabled+.outer-circle {
      background-color: rgba(255, 61, 113, 0.16);
      border-color: #ff3d71
    }

    .nb-theme-default nb-radio.status-danger label:hover .native-input:checked:enabled+.outer-circle {
      background-color: rgba(0, 0, 0, 0)
    }

    .nb-theme-default nb-radio.status-danger label:hover .native-input:checked:enabled~.inner-circle {
      background-color: #ff708d
    }

    .nb-theme-default nb-radio.status-danger label .native-input:enabled:active+.outer-circle {
      border-color: #db2c66
    }

    .nb-theme-default nb-radio.status-danger label .native-input:enabled:checked:active~.inner-circle {
      background-color: #db2c66
    }

    .nb-theme-default nb-radio.status-danger .text {
      color: #222b45
    }

    .nb-theme-default nb-radio.status-danger .native-input:disabled+.outer-circle {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(143, 155, 179, 0.24)
    }

    .nb-theme-default nb-radio.status-danger .native-input:disabled~.text {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-radio.status-danger .native-input:disabled:checked+.outer-circle {
      background-color: rgba(0, 0, 0, 0);
      border-color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-radio.status-danger .native-input:disabled:checked~.inner-circle {
      background-color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-radio.status-info .native-input:enabled+.outer-circle {
      background-color: rgba(0, 149, 255, 0.08);
      border-color: #0095ff
    }

    .nb-theme-default nb-radio.status-info .native-input:enabled:checked+.outer-circle {
      background-color: rgba(0, 0, 0, 0);
      border-color: #0095ff
    }

    .nb-theme-default nb-radio.status-info .native-input:enabled:checked~.inner-circle {
      background-color: #0095ff
    }

    .nb-theme-default nb-radio.status-info .native-input:enabled:focus+.outer-circle {
      border-color: #0057c2
    }

    .nb-theme-default nb-radio.status-info .native-input:enabled:checked:focus~.inner-circle {
      background-color: #006fd6
    }

    .nb-theme-default nb-radio.status-info label:hover .native-input:enabled+.outer-circle {
      background-color: rgba(0, 149, 255, 0.16);
      border-color: #0095ff
    }

    .nb-theme-default nb-radio.status-info label:hover .native-input:checked:enabled+.outer-circle {
      background-color: rgba(0, 0, 0, 0)
    }

    .nb-theme-default nb-radio.status-info label:hover .native-input:checked:enabled~.inner-circle {
      background-color: #42aaff
    }

    .nb-theme-default nb-radio.status-info label .native-input:enabled:active+.outer-circle {
      border-color: #006fd6
    }

    .nb-theme-default nb-radio.status-info label .native-input:enabled:checked:active~.inner-circle {
      background-color: #006fd6
    }

    .nb-theme-default nb-radio.status-info .text {
      color: #222b45
    }

    .nb-theme-default nb-radio.status-info .native-input:disabled+.outer-circle {
      background-color: rgba(143, 155, 179, 0.16);
      border-color: rgba(143, 155, 179, 0.24)
    }

    .nb-theme-default nb-radio.status-info .native-input:disabled~.text {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-radio.status-info .native-input:disabled:checked+.outer-circle {
      background-color: rgba(0, 0, 0, 0);
      border-color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-radio.status-info .native-input:disabled:checked~.inner-circle {
      background-color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default nb-radio.status-control .native-input:enabled+.outer-circle {
      background-color: rgba(255, 255, 255, 0.24);
      border-color: #fff
    }

    .nb-theme-default nb-radio.status-control .native-input:enabled:checked+.outer-circle {
      background-color: rgba(0, 0, 0, 0);
      border-color: #fff
    }

    .nb-theme-default nb-radio.status-control .native-input:enabled:checked~.inner-circle {
      background-color: #fff
    }

    .nb-theme-default nb-radio.status-control .native-input:enabled:focus+.outer-circle {
      border-color: #fff
    }

    .nb-theme-default nb-radio.status-control .native-input:enabled:checked:focus~.inner-circle {
      background-color: #fff
    }

    .nb-theme-default nb-radio.status-control label:hover .native-input:enabled+.outer-circle {
      background-color: rgba(255, 255, 255, 0.32);
      border-color: #fff
    }

    .nb-theme-default nb-radio.status-control label:hover .native-input:checked:enabled+.outer-circle {
      background-color: rgba(0, 0, 0, 0)
    }

    .nb-theme-default nb-radio.status-control label:hover .native-input:checked:enabled~.inner-circle {
      background-color: #fff
    }

    .nb-theme-default nb-radio.status-control label .native-input:enabled:active+.outer-circle {
      border-color: #fff
    }

    .nb-theme-default nb-radio.status-control label .native-input:enabled:checked:active~.inner-circle {
      background-color: #fff
    }

    .nb-theme-default nb-radio.status-control .text {
      color: #fff
    }

    .nb-theme-default nb-radio.status-control .native-input:disabled+.outer-circle {
      background-color: rgba(255, 255, 255, 0.16);
      border-color: rgba(255, 255, 255, 0.4)
    }

    .nb-theme-default nb-radio.status-control .native-input:disabled~.text {
      color: #fff
    }

    .nb-theme-default nb-radio.status-control .native-input:disabled:checked+.outer-circle {
      background-color: rgba(0, 0, 0, 0);
      border-color: rgba(255, 255, 255, 0.4)
    }

    .nb-theme-default nb-radio.status-control .native-input:disabled:checked~.inner-circle {
      background-color: rgba(255, 255, 255, 0.32)
    }

    .nb-theme-default nb-radio .text {
      font-family: Open Sans, sans-serif;
      font-size: .8125rem;
      font-weight: 600;
      line-height: 1.5rem
    }

    [dir=ltr] .nb-theme-default nb-radio .text {
      margin-left: 1.125rem
    }

    [dir=rtl] .nb-theme-default nb-radio .text {
      margin-right: 1.125rem
    }

    .nb-theme-default .nb-tree-grid-header-cell,
    .nb-theme-default .nb-tree-grid-cell,
    .nb-theme-default .nb-tree-grid-footer-cell {
      height: 2rem;
      padding: 0.875rem 1.25rem;
      border: 1px solid #f7f9fc
    }

    .nb-theme-default .nb-tree-grid-header-row {
      background: #fff;
      color: #222b45;
      font-family: Open Sans, sans-serif;
      font-size: .9375rem;
      font-weight: 600;
      line-height: 1.5rem
    }

    .nb-theme-default .nb-tree-grid-footer-row {
      background: #fff;
      color: #222b45;
      font-family: Open Sans, sans-serif;
      font-size: .9375rem;
      font-weight: 600;
      line-height: 1.5rem
    }

    .nb-theme-default .nb-tree-grid-row {
      background: #fff;
      color: #222b45;
      font-family: Open Sans, sans-serif;
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem
    }

    .nb-theme-default .nb-tree-grid-row:hover {
      background: #fff
    }

    .nb-theme-default .nb-tree-grid-row:nth-child(2n):not(:hover) {
      background-color: #fff
    }

    .nb-theme-default .nb-tree-grid-header-cell button {
      vertical-align: middle
    }

    .nb-theme-default nb-tree-grid-row-toggle nb-icon,
    .nb-theme-default nb-sort-icon nb-icon {
      font-size: inherit;
      vertical-align: middle;
      color: currentColor
    }

    .nb-theme-default .nb-tree-grid-header-change-sort-button {
      background: rgba(0, 0, 0, 0);
      border: none;
      padding: 0;
      color: inherit;
      font-size: inherit;
      font-weight: inherit;
      font-family: inherit;
      line-height: inherit
    }

    .nb-theme-default nb-icon {
      font-size: 1.25rem;
      line-height: 1;
      width: 1em;
      height: 1em
    }

    .nb-theme-default nb-icon svg {
      vertical-align: top
    }

    .nb-theme-default nb-icon.status-basic {
      color: #8f9bb3
    }

    .nb-theme-default nb-icon.status-primary {
      color: #36f
    }

    .nb-theme-default nb-icon.status-success {
      color: #00d68f
    }

    .nb-theme-default nb-icon.status-warning {
      color: #fa0
    }

    .nb-theme-default nb-icon.status-danger {
      color: #ff3d71
    }

    .nb-theme-default nb-icon.status-info {
      color: #0095ff
    }

    .nb-theme-default nb-icon.status-control {
      color: #fff
    }

    .nb-theme-default body {
      color: #222b45;
      font-family: Open Sans, sans-serif;
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem
    }

    .nb-theme-default h1,
    .nb-theme-default h2,
    .nb-theme-default h3,
    .nb-theme-default h4,
    .nb-theme-default h5,
    .nb-theme-default h6,
    .nb-theme-default .h1,
    .nb-theme-default .h2,
    .nb-theme-default .h3,
    .nb-theme-default .h4,
    .nb-theme-default .h5,
    .nb-theme-default .h6 {
      color: #222b45
    }

    .nb-theme-default h1,
    .nb-theme-default .h1 {
      font-size: 2.25rem;
      font-family: Open Sans, sans-serif;
      font-weight: 700;
      line-height: 3rem
    }

    .nb-theme-default h2,
    .nb-theme-default .h2 {
      font-size: 2rem;
      font-family: Open Sans, sans-serif;
      font-weight: 700;
      line-height: 2.5rem
    }

    .nb-theme-default h3,
    .nb-theme-default .h3 {
      font-size: 1.875rem;
      font-family: Open Sans, sans-serif;
      font-weight: 700;
      line-height: 2.5rem
    }

    .nb-theme-default h4,
    .nb-theme-default .h4 {
      font-size: 1.625rem;
      font-family: Open Sans, sans-serif;
      font-weight: 700;
      line-height: 2rem
    }

    .nb-theme-default h5,
    .nb-theme-default .h5 {
      font-size: 1.375rem;
      font-family: Open Sans, sans-serif;
      font-weight: 700;
      line-height: 2rem
    }

    .nb-theme-default h6,
    .nb-theme-default .h6 {
      font-size: 1.125rem;
      font-family: Open Sans, sans-serif;
      font-weight: 700;
      line-height: 1.5rem
    }

    .nb-theme-default .subtitle,
    .nb-theme-default .subtitle-2 {
      color: #222b45
    }

    .nb-theme-default .subtitle {
      font-family: Open Sans, sans-serif;
      font-size: .9375rem;
      font-weight: 600;
      line-height: 1.5rem
    }

    .nb-theme-default .subtitle-2 {
      font-family: Open Sans, sans-serif;
      font-size: .8125rem;
      font-weight: 600;
      line-height: 1.5rem
    }

    .nb-theme-default p,
    .nb-theme-default .paragraph {
      color: #222b45;
      font-family: Open Sans, sans-serif;
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem
    }

    .nb-theme-default .paragraph-2 {
      color: #222b45;
      font-family: Open Sans, sans-serif;
      font-size: .8125rem;
      font-weight: 400;
      line-height: 1.125rem
    }

    .nb-theme-default a {
      color: #36f;
      font-size: inherit;
      font-style: inherit;
      font-weight: inherit;
      line-height: inherit
    }

    .nb-theme-default a:focus {
      color: #274bdb
    }

    .nb-theme-default a:hover {
      color: #598bff
    }

    .nb-theme-default a .link-control,
    .nb-theme-default a .link-control:hover {
      color: #fff
    }

    .nb-theme-default a .link-alternate,
    .nb-theme-default a .link-alternate:hover {
      color: #fff
    }

    .nb-theme-default .label {
      color: #8f9bb3;
      font-family: Open Sans, sans-serif;
      font-size: .75rem;
      font-weight: 700;
      line-height: 1rem
    }

    .nb-theme-default .caption {
      font-family: Open Sans, sans-serif;
      font-size: .75rem;
      font-weight: 400;
      line-height: 1rem
    }

    .nb-theme-default .caption-2 {
      font-family: Open Sans, sans-serif;
      font-size: .75rem;
      font-weight: 600;
      line-height: 1rem
    }

    .nb-theme-default .caption,
    .nb-theme-default .caption-2 {
      color: #8f9bb3
    }

    .nb-theme-default .caption.status-basic,
    .nb-theme-default .caption-2.status-basic {
      color: #222b45
    }

    .nb-theme-default .caption.status-primary,
    .nb-theme-default .caption-2.status-primary {
      color: #36f
    }

    .nb-theme-default .caption.status-success,
    .nb-theme-default .caption-2.status-success {
      color: #00d68f
    }

    .nb-theme-default .caption.status-warning,
    .nb-theme-default .caption-2.status-warning {
      color: #fa0
    }

    .nb-theme-default .caption.status-danger,
    .nb-theme-default .caption-2.status-danger {
      color: #ff3d71
    }

    .nb-theme-default .caption.status-info,
    .nb-theme-default .caption-2.status-info {
      color: #0095ff
    }

    .nb-theme-default .caption.status-control,
    .nb-theme-default .caption-2.status-control {
      color: #fff
    }

    .nb-theme-default li {
      color: #222b45;
      font-family: Open Sans, sans-serif;
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem
    }

    .nb-theme-default .text-basic {
      color: #222b45
    }

    .nb-theme-default .text-alternate {
      color: #fff
    }

    .nb-theme-default .text-control {
      color: #fff
    }

    .nb-theme-default .text-disabled {
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default .text-hint {
      color: #8f9bb3
    }

    .nb-theme-default .text-basic {
      color: #edf1f7
    }

    .nb-theme-default .text-primary {
      color: #36f
    }

    .nb-theme-default .text-success {
      color: #00d68f
    }

    .nb-theme-default .text-warning {
      color: #fa0
    }

    .nb-theme-default .text-danger {
      color: #ff3d71
    }

    .nb-theme-default .text-info {
      color: #0095ff
    }

    .nb-theme-default .text-control {
      color: #fff
    }

    .nb-theme-default ng2-smart-table table tr th,
    .nb-theme-default ng2-smart-table table tr th a {
      font-family: Open Sans, sans-serif;
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem;
      color: #222b45
    }

    .nb-theme-default ng2-smart-table table tr td {
      font-family: Open Sans, sans-serif;
      font-size: .9375rem;
      font-weight: 400;
      line-height: 1.25rem;
      color: #222b45
    }

    .nb-theme-default ng2-smart-table table tr th,
    .nb-theme-default ng2-smart-table table tr td {
      position: relative;
      padding: 0.875rem 1.25rem;
      border: 1px solid #edf1f7;
      vertical-align: middle
    }

    .nb-theme-default ng2-smart-table table tr.ng2-smart-titles th {
      padding: 0.875rem 1.25rem
    }

    [dir=ltr] .nb-theme-default ng2-smart-table table tr.ng2-smart-titles th {
      padding-right: 1.75rem
    }

    [dir=rtl] .nb-theme-default ng2-smart-table table tr.ng2-smart-titles th {
      padding-left: 1.75rem
    }

    .nb-theme-default ng2-smart-table table tr.ng2-smart-titles th a:hover,
    .nb-theme-default ng2-smart-table table tr.ng2-smart-titles th a:active,
    .nb-theme-default ng2-smart-table table tr.ng2-smart-titles th a:visited {
      color: #222b45;
      text-decoration: none
    }

    .nb-theme-default ng2-smart-table table tr.ng2-smart-titles th a.sort.asc,
    .nb-theme-default ng2-smart-table table tr.ng2-smart-titles th a.sort.desc {
      font-weight: 400
    }

    .nb-theme-default ng2-smart-table table tr.ng2-smart-titles th a.sort.asc::after,
    .nb-theme-default ng2-smart-table table tr.ng2-smart-titles th a.sort.desc::after {
      border-bottom-color: #222b45;
      border-width: 0.375rem;
      position: absolute;
      margin: 0;
      top: 50%;
      transform: translate(0, -50%)
    }

    [dir=ltr] .nb-theme-default ng2-smart-table table tr.ng2-smart-titles th a.sort.asc::after,
    [dir=ltr] .nb-theme-default ng2-smart-table table tr.ng2-smart-titles th a.sort.desc::after {
      right: .75rem
    }

    [dir=rtl] .nb-theme-default ng2-smart-table table tr.ng2-smart-titles th a.sort.asc::after,
    [dir=rtl] .nb-theme-default ng2-smart-table table tr.ng2-smart-titles th a.sort.desc::after {
      left: .75rem
    }

    .nb-theme-default ng2-smart-table table tr.ng2-smart-titles th a.sort.asc.desc::after,
    .nb-theme-default ng2-smart-table table tr.ng2-smart-titles th a.sort.desc.desc::after {
      transform: translate(0, -50%) rotate(180deg)
    }

    .nb-theme-default ng2-smart-table thead tr {
      background: #fff
    }

    .nb-theme-default ng2-smart-table thead tr.ng2-smart-filters th {
      padding: 0.375rem 0.5rem
    }

    .nb-theme-default ng2-smart-table thead tr.ng2-smart-filters th .ng2-smart-filter input {
      line-height: 1.25rem
    }

    .nb-theme-default ng2-smart-table tbody tr.selected,
    .nb-theme-default ng2-smart-table tbody nb-calendar-day-picker tr.range-cell.start,
    .nb-theme-default nb-calendar-day-picker ng2-smart-table tbody tr.range-cell.start,
    .nb-theme-default ng2-smart-table tbody nb-calendar-day-picker tr.range-cell.end,
    .nb-theme-default nb-calendar-day-picker ng2-smart-table tbody tr.range-cell.end,
    .nb-theme-default ng2-smart-table tbody tr:hover {
      background: #edf1f7 !important
    }

    .nb-theme-default ng2-smart-table tbody tr:nth-child(2n) {
      background-color: #f7f9fc
    }

    .nb-theme-default ng2-smart-table th.ng2-smart-actions-title-add a {
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.75rem !important;
      padding: 0.375rem 0.5rem;
      border-color: #36f;
      background-color: #36f;
      color: #fff;
      border-radius: 0.375rem
    }

    .nb-theme-default ng2-smart-table th.ng2-smart-actions-title-add a:focus {
      border-color: #1a34b8
    }

    .nb-theme-default ng2-smart-table th.ng2-smart-actions-title-add a:hover {
      text-decoration: none;
      background-color: #598bff;
      border-color: #598bff
    }

    .nb-theme-default ng2-smart-table th.ng2-smart-actions-title-add a:active {
      background-color: #274bdb;
      border-color: #274bdb
    }

    .nb-theme-default ng2-smart-table .ng2-smart-actions {
      padding: 0;
      height: 1px
    }

    .nb-theme-default ng2-smart-table .ng2-smart-actions ng2-st-tbody-edit-delete,
    .nb-theme-default ng2-smart-table .ng2-smart-actions ng2-st-tbody-create-cancel,
    .nb-theme-default ng2-smart-table .ng2-smart-actions ng2-st-actions {
      display: flex;
      height: 100%
    }

    .nb-theme-default ng2-smart-table .ng2-smart-actions a.ng2-smart-action {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100%;
      width: 100%;
      font-size: 2rem !important;
      color: #222b45
    }

    .nb-theme-default ng2-smart-table .ng2-smart-actions a.ng2-smart-action:not(:last-child) {
      border-right: 1px solid #edf1f7
    }

    .nb-theme-default ng2-smart-table .ng2-smart-actions a.ng2-smart-action:hover {
      text-decoration: none
    }

    .nb-theme-default ng2-smart-table .ng2-smart-actions .ng2-smart-action-add-create:hover,
    .nb-theme-default ng2-smart-table .ng2-smart-actions .ng2-smart-action-edit-edit:hover,
    .nb-theme-default ng2-smart-table .ng2-smart-actions .ng2-smart-action-edit-save:hover {
      color: #36f
    }

    .nb-theme-default ng2-smart-table .ng2-smart-actions .ng2-smart-action-add-cancel:hover,
    .nb-theme-default ng2-smart-table .ng2-smart-actions .ng2-smart-action-delete-delete:hover,
    .nb-theme-default ng2-smart-table .ng2-smart-actions .ng2-smart-action-edit-cancel:hover {
      color: #ff3d71
    }

    .nb-theme-default ng2-smart-table table-cell-edit-mode {
      display: block;
      margin: -7.5px -12px
    }

    .nb-theme-default ng2-smart-table ng2-smart-table-pager {
      display: block
    }

    .nb-theme-default ng2-smart-table nav.ng2-smart-pagination-nav {
      display: flex;
      justify-content: center;
      margin-top: 1.25rem
    }

    .nb-theme-default ng2-smart-table nav.ng2-smart-pagination-nav .ng2-smart-pagination {
      display: flex;
      padding: 0
    }

    .nb-theme-default ng2-smart-table nav.ng2-smart-pagination-nav .ng2-smart-pagination .page-item.disabled .page-link,
    .nb-theme-default ng2-smart-table nav.ng2-smart-pagination-nav .ng2-smart-pagination .page-item.disabled .page-link:focus,
    .nb-theme-default ng2-smart-table nav.ng2-smart-pagination-nav .ng2-smart-pagination .page-item.disabled .page-link:hover {
      background-color: rgba(0, 0, 0, 0);
      color: rgba(143, 155, 179, 0.48)
    }

    .nb-theme-default ng2-smart-table nav.ng2-smart-pagination-nav .pagination {
      font-family: Open Sans, sans-serif;
      font-size: .875rem;
      line-height: 1rem;
      border: #edf1f7 solid 1px;
      border-radius: .25rem
    }

    .nb-theme-default ng2-smart-table nav.ng2-smart-pagination-nav .pagination li {
      overflow: hidden
    }

    [dir=ltr] .nb-theme-default ng2-smart-table nav.ng2-smart-pagination-nav .pagination li:not(:last-child) {
      border-right: 1px solid #edf1f7
    }

    [dir=rtl] .nb-theme-default ng2-smart-table nav.ng2-smart-pagination-nav .pagination li:not(:last-child) {
      border-left: 1px solid #edf1f7
    }

    .nb-theme-default ng2-smart-table nav.ng2-smart-pagination-nav .pagination li a.page-link-prev,
    .nb-theme-default ng2-smart-table nav.ng2-smart-pagination-nav .pagination li a.page-link-next {
      font-size: .875rem;
      line-height: 1rem
    }

    .nb-theme-default ng2-smart-table nav.ng2-smart-pagination-nav .pagination li a,
    .nb-theme-default ng2-smart-table nav.ng2-smart-pagination-nav .pagination li>span {
      font-size: .875rem;
      line-height: 1rem;
      background-color: transparent;
      color: #36f;
      padding: 0.75rem 1.25rem;
      border: none
    }

    .nb-theme-default ng2-smart-table nav.ng2-smart-pagination-nav .pagination li a:focus,
    .nb-theme-default ng2-smart-table nav.ng2-smart-pagination-nav .pagination li>span:focus {
      border-color: #36f;
      color: #36f
    }

    .nb-theme-default ng2-smart-table nav.ng2-smart-pagination-nav .pagination li a:hover,
    .nb-theme-default ng2-smart-table nav.ng2-smart-pagination-nav .pagination li>span:hover {
      background-color: rgba(0, 0, 0, 0);
      border-color: #36f;
      color: #36f;
      text-decoration: none
    }

    [dir=ltr] .nb-theme-default ng2-smart-table nav.ng2-smart-pagination-nav .pagination li:first-child a,
    [dir=ltr] .nb-theme-default ng2-smart-table nav.ng2-smart-pagination-nav .pagination li:first-child>span {
      border-top-left-radius: .25rem;
      border-bottom-left-radius: .25rem
    }

    [dir=rtl] .nb-theme-default ng2-smart-table nav.ng2-smart-pagination-nav .pagination li:first-child a,
    [dir=rtl] .nb-theme-default ng2-smart-table nav.ng2-smart-pagination-nav .pagination li:first-child>span {
      border-top-right-radius: .25rem;
      border-bottom-right-radius: .25rem
    }

    [dir=ltr] .nb-theme-default ng2-smart-table nav.ng2-smart-pagination-nav .pagination li:last-child a,
    [dir=ltr] .nb-theme-default ng2-smart-table nav.ng2-smart-pagination-nav .pagination li:last-child>span {
      border-top-right-radius: .25rem;
      border-bottom-right-radius: .25rem
    }

    [dir=rtl] .nb-theme-default ng2-smart-table nav.ng2-smart-pagination-nav .pagination li:last-child a,
    [dir=rtl] .nb-theme-default ng2-smart-table nav.ng2-smart-pagination-nav .pagination li:last-child>span {
      border-top-left-radius: .25rem;
      border-bottom-left-radius: .25rem
    }

    .nb-theme-default ng2-smart-table nav.ng2-smart-pagination-nav .pagination li.active a,
    .nb-theme-default ng2-smart-table nav.ng2-smart-pagination-nav .pagination li.active a:hover,
    .nb-theme-default ng2-smart-table nav.ng2-smart-pagination-nav .pagination li.active a:focus,
    .nb-theme-default ng2-smart-table nav.ng2-smart-pagination-nav .pagination li.active>span,
    .nb-theme-default ng2-smart-table nav.ng2-smart-pagination-nav .pagination li.active>span:hover,
    .nb-theme-default ng2-smart-table nav.ng2-smart-pagination-nav .pagination li.active>span:focus {
      color: #fff;
      background-color: #36f
    }

    
  </style>
  <style type="text/css">
    /* You can add global styles to this file, and also import other style files */
    /* @import "~@angular/material/prebuilt-themes/indigo-pink.css"; */
    /**
 ****************************
 * Generic Styles
 ****************************
*/
    ag-grid,
    ag-grid-angular,
    ag-grid-ng2,
    ag-grid-polymer,
    ag-grid-aurelia {
      display: block;
    }

    .ag-hidden {
      display: none !important;
    }

    .ag-invisible {
      visibility: hidden !important;
    }

    .ag-faded {
      opacity: 0.3;
    }

    .ag-width-half {
      display: inline-block;
      width: 50% !important;
    }

    .ag-unselectable {
      -webkit-user-select: none !important;
      -moz-user-select: none !important;
      -ms-user-select: none !important;
      user-select: none !important;
    }

    .ag-selectable {
      -webkit-user-select: text !important;
      -moz-user-select: text !important;
      -ms-user-select: text !important;
      user-select: text !important;
    }

    .ag-select-agg-func-popup {
      position: absolute;
    }

    .ag-input-wrapper {
      display: flex;
      flex: 1 1 auto;
      align-items: center;
      line-height: normal;
      position: relative;
      overflow: hidden;
    }

    .ag-shake-left-to-right {
      -webkit-animation-direction: alternate;
      animation-direction: alternate;
      -webkit-animation-duration: 0.2s;
      animation-duration: 0.2s;
      -webkit-animation-iteration-count: infinite;
      animation-iteration-count: infinite;
      -webkit-animation-name: ag-shake-left-to-right;
      animation-name: ag-shake-left-to-right;
    }

    @-webkit-keyframes ag-shake-left-to-right {
      from {
        padding-left: 6px;
        padding-right: 2px;
      }

      to {
        padding-left: 2px;
        padding-right: 6px;
      }
    }

    @keyframes ag-shake-left-to-right {
      from {
        padding-left: 6px;
        padding-right: 2px;
      }

      to {
        padding-left: 2px;
        padding-right: 6px;
      }
    }

    .ag-root-wrapper {
      cursor: default;
      position: relative;
      display: flex;
      flex-direction: column;
      overflow: hidden;
    }

    .ag-root-wrapper.ag-layout-normal {
      height: 100%;
    }

    .ag-root-wrapper .ag-watermark {
      position: absolute;
      bottom: 10px;
      right: 25px;
      opacity: 0.5;
      transition: opacity 1s ease-out 3s;
    }

    .ag-root-wrapper .ag-watermark:before {
      content: '';
      background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iNDk0cHgiIGhlaWdodD0iMjM5cHgiIHZpZXdCb3g9IjAgMCA0OTQgMjM5IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPgogICAgPCEtLSBHZW5lcmF0b3I6IFNrZXRjaCA0Ny4xICg0NTQyMikgLSBodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2ggLS0+CiAgICA8dGl0bGU+TG9nbzwvdGl0bGU+CiAgICA8ZGVzYz5DcmVhdGVkIHdpdGggU2tldGNoLjwvZGVzYz4KICAgIDxkZWZzPgogICAgICAgIDxwYXRoIGQ9Ik0wLjYxMjg0OTkzMSwxMDggTDAuNjEyODQ5OTMxLDY3LjQ1OTYzNzQgTDAuNjEyODQ5OTMxLDY3LjQ1OTYzNzQgQzAuNjEyODQ5OTMxLDYyLjEwMDY1MzYgMy40NzE4MzM3OCw1Ny4xNDg3NDgzIDguMTEyODQ5OTMsNTQuNDY5MjU2NCBMOTguMzA2NDI1LDIuMzk1OTcxNTcgTDk4LjMwNjQyNSwyLjM5NTk3MTU3IEMxMDIuOTQ3NDQxLC0wLjI4MzUyMDM1OCAxMDguNjY1NDA5LC0wLjI4MzUyMDM1OCAxMTMuMzA2NDI1LDIuMzk1OTcxNTcgTDExMy4zMDY0MjUsMi4zOTU5NzE1NyBMMjAzLjUsNTQuNDY5MjU2NCBMMjAzLjUsNTQuNDY5MjU2NCBDMjA4LjE0MTAxNiw1Ny4xNDg3NDgzIDIxMSw2Mi4xMDA2NTM2IDIxMSw2Ny40NTk2Mzc0IEwyMTEsMTM4IEwxODEsMTM4IEwxODAuOTk3MDQxLDkzLjk5OTk5OTggTDE4MC45OTYwMzIsOTMuOTk5OTk5OSBDMTgwLjk5NTQ3NSw4NS43MTYxMjI2IDE3NC4yNzk5MDksNzkuMDAxMDA4NyAxNjUuOTk2MDMyLDc5LjAwMTAwODcgTDEyMiw3OC45OTk5OTk5IEMxMTMuNzE1NzI5LDc4Ljk5OTk5OTkgMTA3LDg1LjcxNTcyODYgMTA3LDkzLjk5OTk5OTkgTDEwNywxMzYuMDE1NjIzIEwxMDcsMTM2LjAxNTYyMyBDMTA3LDE0NC4yOTk4OTUgMTEzLjcxNTcyOSwxNTEuMDE1NjIzIDEyMiwxNTEuMDE1NjIzIEwxNjgsMTUxLjAxNTYyMyBMMTY4LDE2MyBDMTY4LDE2NC42NTY4NTQgMTY2LjY1Njg1NCwxNjYgMTY1LDE2NiBMMTIwLDE2NiBMMTIwLDE3OSBMMTY1Ljk5NjAzMiwxNzkgTDE2NS45OTYwMzIsMTc4Ljk5Nzg3NyBDMTc0LjI3OTQ3NCwxNzguOTk3ODc3IDE4MC45OTQ4NiwxNzIuMjgzNDQyIDE4MC45OTYwMzIsMTY0IEwxODEsMTUwLjk2MDU1NCBMMjExLDE1MC45NjA1NTQgTDIxMSwxNzEuNjA2MjA3IEwyMTEsMTcxLjYwNjIwNyBDMjExLDE3Ni45NjUxOTEgMjA4LjE0MTAxNiwxODEuOTE3MDk2IDIwMy41LDE4NC41OTY1ODggTDExMy4zMDY0MjUsMjM2LjY2OTg3MyBMMTEzLjMwNjQyNSwyMzYuNjY5ODczIEMxMDguNjY1NDA5LDIzOS4zNDkzNjUgMTAyLjk0NzQ0MSwyMzkuMzQ5MzY1IDk4LjMwNjQyNSwyMzYuNjY5ODczIEw4LjExMjg0OTkzLDE4NC41OTY1ODggTDguMTEyODQ5OTMsMTg0LjU5NjU4OCBDMy40NzE4MzM3OCwxODEuOTE3MDk2IDAuNjEyODQ5OTMxLDE3Ni45NjUxOTEgMC42MTI4NDk5MzEsMTcxLjYwNjIwNyBMMC42MTI4NDk5MzEsMTIxIEwyNywxMjEgTDI3LDEzNiBDMjcsMTQ0LjI4NDI3MSAzMy43MTU3Mjg3LDE1MSA0MiwxNTEgTDQyLDE1MSBMMTAwLDE1MSBMMTAwLDk0IEMxMDAsODUuNzE1NzI4OCA5My4yODQyNzEyLDc5IDg1LDc5IEwyNyw3OSBMMjcsOTIgTDg0LDkyIEM4NS42NTY4NTQyLDkyIDg3LDkzLjM0MzE0NTggODcsOTUgTDg3LDk1IEw4NywxMDggTDAuNjEyODQ5OTMxLDEwOCBaIiBpZD0icGF0aC0xIj48L3BhdGg+CiAgICA8L2RlZnM+CiAgICA8ZyBpZD0iU3ltYm9scyIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPGcgaWQ9IkxvZ28iPgogICAgICAgICAgICA8cGF0aCBkPSJNNDc3LDU1IEw0OTQsNTUgTDQ5NCwxNTEgTDQzNSwxNTEgQzQyNi43MTU3MjksMTUxIDQyMCwxNDQuMjg0MjcxIDQyMCwxMzYgTDQyMCw5NiBDNDIwLDg3LjcxNTcyODggNDI2LjcxNTcyOSw4MSA0MzUsODEgTDQzNSw4MSBMNDc3LDgxIEw0NzcsNTUgWiBNNDQwLDk4IEM0MzguMzQzMTQ2LDk4IDQzNyw5OS4zNDMxNDU4IDQzNywxMDEgTDQzNywxMzEgQzQzNywxMzIuNjU2ODU0IDQzOC4zNDMxNDYsMTM0IDQ0MCwxMzQgTDQ3NywxMzQgTDQ3Nyw5OCBMNDQwLDk4IFoiIGlkPSJkIiBmaWxsPSIjRkZGRkZGIj48L3BhdGg+CiAgICAgICAgICAgIDxnIGlkPSJpIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgzOTYuMDAwMDAwLCA1NS4wMDAwMDApIj4KICAgICAgICAgICAgICAgIDxwb2x5Z29uIGlkPSJQYXRoLTYiIGZpbGw9IiNGRkZGRkYiIHBvaW50cz0iMCAyNiAxNyAyNiAxNyA5NiAwIDk2Ij48L3BvbHlnb24+CiAgICAgICAgICAgICAgICA8cG9seWdvbiBpZD0iUGF0aC03IiBmaWxsPSIjRTExRjIyIiBwb2ludHM9IjAgMS4xMzY4NjgzOGUtMTMgMTcgMS4xMzY4NjgzOGUtMTMgMTcgMTcgMCAxNyI+PC9wb2x5Z29uPgogICAgICAgICAgICA8L2c+CiAgICAgICAgICAgIDxwYXRoIGQ9Ik0zMzEsMTUxIEwzNDgsMTUxIEwzNDgsMTAxIEwzNDgsMTAxIEMzNDgsOTkuMzQzMTQ1OCAzNDkuMzQzMTQ2LDk4IDM1MSw5OCBMMzg5LDk4IEwzODksODEgTDM0Niw4MSBMMzQ2LDgxIEMzMzcuNzE1NzI5LDgxIDMzMSw4Ny43MTU3Mjg4IDMzMSw5NiBMMzMxLDE1MSBaIiBpZD0iciIgZmlsbD0iI0ZGRkZGRiI+PC9wYXRoPgogICAgICAgICAgICA8cGF0aCBkPSJNMzI0LDg2IEwzMjQsNzYgTDMyNCw3NiBDMzI0LDY3LjcxNTcyODggMzE3LjI4NDI3MSw2MSAzMDksNjEgTDI0OSw2MSBMMjQ5LDYxIEMyNDAuNzE1NzI5LDYxIDIzNCw2Ny43MTU3Mjg4IDIzNCw3NiBMMjM0LDEzNiBMMjM0LDEzNiBDMjM0LDE0NC4yODQyNzEgMjQwLjcxNTcyOSwxNTEgMjQ5LDE1MSBMMzA5LDE1MSBMMzA5LDE1MSBDMzE3LjI4NDI3MSwxNTEgMzI0LDE0NC4yODQyNzEgMzI0LDEzNiBMMzI0LDEwMCBMMjg3LDEwMCBMMjg3LDExNyBMMzA3LDExNyBMMzA3LDEzMSBMMzA3LDEzMSBDMzA3LDEzMi42NTY4NTQgMzA1LjY1Njg1NCwxMzQgMzA0LDEzNCBMMjU0LDEzNCBMMjU0LDEzNCBDMjUyLjM0MzE0NiwxMzQgMjUxLDEzMi42NTY4NTQgMjUxLDEzMSBMMjUxLDgxIEwyNTEsODEgQzI1MSw3OS4zNDMxNDU4IDI1Mi4zNDMxNDYsNzggMjU0LDc4IEwzMDQsNzggTDMwNCw3OCBDMzA1LjY1Njg1NCw3OCAzMDcsNzkuMzQzMTQ1OCAzMDcsODEgTDMwNyw4NiBMMzI0LDg2IFoiIGlkPSJHIiBmaWxsPSIjRkZGRkZGIj48L3BhdGg+CiAgICAgICAgICAgIDxnIGlkPSJhZyI+CiAgICAgICAgICAgICAgICA8ZyBpZD0iQ29tYmluZWQtU2hhcGUiPgogICAgICAgICAgICAgICAgICAgIDxtYXNrIGlkPSJtYXNrLTIiIGZpbGw9IndoaXRlIj4KICAgICAgICAgICAgICAgICAgICAgICAgPHVzZSB4bGluazpocmVmPSIjcGF0aC0xIj48L3VzZT4KICAgICAgICAgICAgICAgICAgICA8L21hc2s+CiAgICAgICAgICAgICAgICAgICAgPHVzZSBmaWxsPSIjRTExRjIyIiB4bGluazpocmVmPSIjcGF0aC0xIj48L3VzZT4KICAgICAgICAgICAgICAgIDwvZz4KICAgICAgICAgICAgICAgIDxyZWN0IGlkPSJnIiBmaWxsPSIjRTExRjIyIiB4PSIxMjAiIHk9IjkyIiB3aWR0aD0iNDgiIGhlaWdodD0iNDYiIHJ4PSIzIj48L3JlY3Q+CiAgICAgICAgICAgICAgICA8cGF0aCBkPSJNNDAsMTIxIEw4NywxMjEgTDg3LDEzOCBMNDMsMTM4IEw0MywxMzggQzQxLjM0MzE0NTgsMTM4IDQwLDEzNi42NTY4NTQgNDAsMTM1IEw0MCwxMjEgWiIgaWQ9IkNvbWJpbmVkLVNoYXBlIiBmaWxsPSIjRTExRjIyIj48L3BhdGg+CiAgICAgICAgICAgIDwvZz4KICAgICAgICA8L2c+CiAgICA8L2c+Cjwvc3ZnPg==);
      -webkit-filter: invert(50%);
      filter: invert(50%);
      background-repeat: no-repeat;
      background-size: 110px 60px;
      display: block;
      height: 60px;
      width: 110px;
    }

    .ag-root-wrapper .ag-watermark .ag-watermark-text {
      opacity: 0.5;
      font-weight: bold;
      font-family: Impact;
      font-size: 19px;
    }

    .ag-root-wrapper-body {
      display: flex;
      flex-direction: row;
    }

    .ag-root-wrapper-body.ag-layout-normal {
      flex: 1 1 auto;
      height: 0;
      min-height: 0;
    }

    .ag-root {
      position: relative;
      display: flex;
      flex-direction: column;
    }

    .ag-root.ag-layout-normal,
    .ag-root.ag-layout-auto-height {
      overflow: hidden;
      flex: 1 1 auto;
      width: 0;
    }

    .ag-root.ag-layout-normal {
      height: 100%;
    }

    /**
 ****************************
 * Viewports
 ****************************
*/
    .ag-header-viewport,
    .ag-floating-top-viewport,
    .ag-body-viewport,
    .ag-pinned-left-cols-viewport,
    .ag-center-cols-viewport,
    .ag-pinned-right-cols-viewport,
    .ag-floating-bottom-viewport,
    .ag-body-horizontal-scroll-viewport,
    .ag-virtual-list-viewport {
      position: relative;
      height: 100%;
      min-width: 0px;
      overflow: hidden;
      flex: 1 1 auto;
    }

    @media print {
      .ag-layout-normal {
        display: none;
      }

      .ag-root-wrapper,
      .ag-root-wrapper-body,
      .ag-root,
      .ag-body-viewport,
      .ag-center-cols-container,
      .ag-center-cols-viewport,
      .ag-center-cols-clipper,
      .ag-body-horizontal-scroll-viewport,
      .ag-virtual-list-viewport {
        height: auto !important;
        overflow: visible !important;
        display: block !important;
      }
    }

    .ag-body-viewport {
      display: flex;
    }

    .ag-body-viewport.ag-layout-normal {
      overflow-y: auto;
      -webkit-overflow-scrolling: touch;
    }

    .ag-body-viewport:not(.ag-layout-print).ag-force-vertical-scroll {
      overflow-y: scroll;
    }

    .ag-pinned-left-cols-viewport,
    .ag-pinned-right-cols-viewport {
      flex-grow: 1000;
    }

    .ag-center-cols-viewport {
      width: 100%;
      overflow-x: auto;
    }

    .ag-body-horizontal-scroll-viewport {
      overflow-x: scroll;
    }

    .ag-virtual-list-viewport {
      overflow: auto;
      width: 100%;
    }

    /**
 ****************************
 * Containers
 ****************************
*/
    .ag-header-container,
    .ag-floating-top-container,
    .ag-body-container,
    .ag-pinned-right-cols-container,
    .ag-center-cols-container,
    .ag-pinned-left-cols-container,
    .ag-floating-bottom-container,
    .ag-body-horizontal-scroll-container,
    .ag-full-width-container,
    .ag-floating-bottom-full-width-container,
    .ag-virtual-list-container {
      position: relative;
    }

    .ag-header-container,
    .ag-floating-top-container,
    .ag-floating-bottom-container {
      height: 100%;
      white-space: nowrap;
    }

    .ag-body-viewport .ag-center-cols-clipper {
      min-height: 100%;
    }

    .ag-body-viewport.ag-layout-auto-height .ag-center-cols-clipper,
    .ag-body-viewport.ag-layout-auto-height .ag-center-cols-container {
      min-height: 50px;
    }

    .ag-body-viewport .ag-center-cols-container {
      display: block;
    }

    .ag-body-viewport.ag-layout-print {
      flex: none;
    }

    .ag-body-viewport.ag-layout-print .ag-center-cols-clipper {
      min-width: 100%;
    }

    .ag-pinned-right-cols-container {
      display: block;
    }

    .ag-body-horizontal-scroll-container {
      height: 100%;
    }

    .ag-full-width-container,
    .ag-floating-top-full-width-container,
    .ag-floating-bottom-full-width-container {
      position: absolute;
      top: 0px;
      left: 0px;
      pointer-events: none;
    }

    .ag-full-width-container {
      width: 100%;
    }

    .ag-floating-bottom-full-width-container,
    .ag-floating-top-full-width-container {
      display: inline-block;
      overflow: hidden;
      height: 100%;
      width: 100%;
    }

    .ag-virtual-list-container {
      overflow: hidden;
    }

    /**
 ****************************
 * Scrollers
 ****************************
*/
    .ag-center-cols-clipper {
      flex: 1;
      min-width: 0;
      overflow: hidden;
    }

    .ag-body-horizontal-scroll {
      min-height: 0;
      min-width: 0;
      width: 100%;
      display: flex;
      position: relative;
    }

    .ag-layout-print .ag-body-horizontal-scroll {
      display: none;
    }

    .ag-horizontal-left-spacer,
    .ag-horizontal-right-spacer {
      height: 100%;
      min-width: 0;
      flex-grow: 1000;
      overflow-x: scroll;
    }

    .ag-horizontal-left-spacer.ag-scroller-corner,
    .ag-horizontal-right-spacer.ag-scroller-corner {
      overflow-x: hidden;
    }

    /**
 ****************************
 * Headers
 ****************************
*/
    .ag-header,
    .ag-pinned-left-header,
    .ag-pinned-right-header {
      display: inline-block;
      overflow: hidden;
    }

    .ag-header .ag-header-cell-sortable,
    .ag-pinned-left-header .ag-header-cell-sortable,
    .ag-pinned-right-header .ag-header-cell-sortable {
      cursor: pointer;
    }

    .ag-header {
      display: flex;
      width: 100%;
      white-space: nowrap;
    }

    .ag-header-icon {
      display: flex;
    }

    .ag-pinned-left-header {
      height: 100%;
    }

    .ag-pinned-right-header {
      height: 100%;
    }

    .ag-header-row {
      position: absolute;
      overflow: hidden;
    }

    .ag-header-overlay {
      display: block;
      position: absolute;
    }

    .ag-header-cell {
      display: inline-flex;
      align-items: center;
      position: absolute;
      height: 100%;
      overflow: hidden;
    }

    .ag-header-group-cell-label,
    .ag-header-cell-label {
      display: flex;
      flex: 1 1 auto;
      overflow: hidden;
      align-items: center;
      text-overflow: ellipsis;
      align-self: stretch;
    }

    .ag-header-cell-label .ag-header-cell-text {
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }

    .ag-numeric-header .ag-header-cell-label {
      flex-direction: row-reverse;
    }

    .ag-header-group-text {
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }

    .ag-header-cell-resize {
      position: absolute;
      z-index: 1;
      height: 100%;
      width: 4px;
    }

    .ag-header-expand-icon {
      padding-left: 4px;
    }

    .ag-header-select-all {
      display: flex;
    }

    /**
 ****************************
 * Columns
 ****************************
*/
    .ag-column-moving .ag-cell {
      transition: left 0.2s;
    }

    .ag-column-moving .ag-header-cell {
      transition: left 0.2s;
    }

    .ag-column-moving .ag-header-group-cell {
      transition: left 0.2s, width 0.2s;
    }

    /**
 ****************************
 * Column Panel
 ****************************
*/
    .ag-column-panel {
      display: flex;
      flex-direction: column;
      overflow: hidden;
      flex: 1 1 auto;
    }

    .ag-column-select-panel {
      display: flex;
      flex-direction: column;
      overflow: hidden;
      flex-grow: 4;
      flex-shrink: 1;
      flex-basis: 0;
    }

    .ag-column-select-panel .ag-primary-cols-header-panel {
      display: flex;
      flex: none;
    }

    .ag-column-select-panel .ag-primary-cols-header-panel .ag-column-name-filter {
      flex: 1 1 auto;
    }

    .ag-column-select-panel .ag-primary-cols-header-panel .ag-primary-cols-filter-wrapper {
      flex: 1 1 auto;
    }

    .ag-column-select-panel .ag-primary-cols-header-panel .ag-primary-cols-filter-wrapper input {
      width: 100%;
    }

    .ag-column-select-panel .ag-primary-cols-list-panel {
      flex: 1 1 auto;
      overflow: auto;
    }

    .ag-column-drop {
      display: inline-flex;
      align-items: center;
      overflow: auto;
      width: 100%;
    }

    .ag-column-drop .ag-column-drop-list {
      display: flex;
      align-items: center;
    }

    .ag-column-drop .ag-column-drop-list .ag-column-drop-cell {
      display: flex;
      align-items: center;
    }

    .ag-column-drop .ag-column-drop-list .ag-column-drop-cell .ag-column-drop-cell-text {
      overflow: hidden;
      flex: 1 1 auto;
      text-overflow: ellipsis;
      white-space: nowrap;
    }

    .ag-column-drop.ag-column-drop-vertical {
      display: flex;
      flex-direction: column;
      overflow: hidden;
      flex: 1 1 0;
      align-items: stretch;
    }

    .ag-column-drop.ag-column-drop-vertical>div {
      display: flex;
      align-items: center;
    }

    .ag-column-drop.ag-column-drop-vertical .ag-column-drop-list {
      align-items: stretch;
      flex-grow: 1;
      flex-direction: column;
      overflow-x: auto;
    }

    .ag-column-drop.ag-column-drop-vertical .ag-column-drop-empty-message {
      display: block;
    }

    .ag-column-drop.ag-column-drop-horizontal {
      white-space: nowrap;
      overflow: hidden;
    }

    .ag-filter-panel {
      display: flex;
      flex-direction: column;
      flex: 1 1 auto;
    }

    .ag-filter-panel .ag-filter-toolpanel-header {
      display: flex;
    }

    .ag-filter-panel .ag-filter-toolpanel-header div:not(.ag-input-wrapper) {
      display: flex;
      align-items: center;
    }

    .ag-filter-panel .ag-group-item {
      flex-direction: column;
    }

    /**
 ****************************
 * Rows
 ****************************
*/
    .ag-row-animation .ag-row {
      transition: transform 0.4s, top 0.4s, height 0.4s, background-color 0.1s, opacity 0.2s;
    }

    .ag-row-no-animation .ag-row {
      transition: background-color 0.1s;
    }

    .ag-row {
      white-space: nowrap;
      width: 100%;
    }

    .ag-row-position-absolute {
      position: absolute;
    }

    .ag-row-position-relative {
      position: relative;
    }

    .ag-full-width-row {
      overflow: hidden;
      pointer-events: all;
    }

    .ag-row-inline-editing {
      z-index: 1;
    }

    .ag-row-dragging {
      z-index: 2;
    }

    .ag-stub-cell {
      display: flex;
      align-items: center;
    }

    /**
 ****************************
 * Cells
 ****************************
*/
    .ag-cell {
      display: inline-block;
      overflow: hidden;
      position: absolute;
      text-overflow: ellipsis;
      white-space: nowrap;
    }

    .ag-cell-wrapper {
      display: flex;
      align-items: center;
      width: 100%;
      height: 100%;
    }

    .ag-cell-wrapper.ag-row-group {
      align-items: flex-start;
    }

    .ag-cell-wrapper .ag-cell-value,
    .ag-cell-wrapper .ag-group-value {
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .ag-full-width-row.ag-row-group .ag-cell-wrapper {
      align-items: center;
    }

    .ag-cell-with-height {
      height: 100%;
    }

    .ag-group-cell-entire-row {
      display: inline-block;
      height: 100%;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
      width: 100%;
    }

    .ag-footer-cell-entire-row {
      display: inline-block;
      height: 100%;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
      width: 100%;
    }

    .ag-cell-inline-editing {
      z-index: 1;
    }

    .ag-cell-inline-editing .ag-cell-edit-input,
    .ag-cell-inline-editing .ag-input-wrapper {
      height: 100%;
      width: 100%;
      line-height: normal;
    }

    /**
 ****************************
 * Filters
 ****************************
*/
    .ag-set-filter-item {
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
      display: flex;
      align-items: center;
    }

    .ag-set-filter-item>div,
    .ag-set-filter-item>span {
      display: flex;
    }

    .ag-filter .ag-filter-checkbox {
      pointer-events: none;
    }

    .ag-filter .ag-filter-body-wrapper {
      display: flex;
      flex-direction: column;
    }

    .ag-filter .ag-filter-filter {
      flex: 1 1 auto;
    }

    /**
 ****************************
 * Floating Filter
 ****************************
*/
    .ag-floating-filter-full-body .ag-react-container,
    .ag-floating-filter-body .ag-react-container {
      height: 100%;
    }

    .ag-floating-filter-body {
      display: flex;
      flex: 1 1 auto;
      height: 100%;
    }

    .ag-floating-filter-body input {
      margin: 0;
      flex: 1 1 auto;
      max-height: calc(100% - 1px);
    }

    .ag-floating-filter-full-body {
      display: flex;
      align-items: center;
      height: 100%;
      width: 100%;
    }

    .ag-floating-filter-full-body>div {
      flex: 1 1 auto;
    }

    .ag-floating-filter-full-body input {
      margin: 0;
      width: 100%;
    }

    .ag-floating-filter-full-body input[type="range"] {
      height: 100%;
    }

    .ag-floating-filter {
      display: inline-block;
      position: absolute;
    }

    .ag-floating-filter-input {
      width: 100%;
    }

    .ag-floating-filter-input:-moz-read-only {
      background-color: #eee;
    }

    .ag-floating-filter-input:read-only {
      background-color: #eee;
    }

    .ag-floating-filter-menu {
      position: absolute;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    .ag-floating-filter-button {
      display: flex;
      flex: none;
    }

    /**
 ****************************
 * Drag & Drop
 ****************************
*/
    .ag-dnd-ghost {
      display: flex;
      align-items: center;
      background: #e5e5e5;
      border: 1px solid black;
      cursor: move;
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-size: 14px;
      overflow: hidden;
      padding: 3px;
      position: absolute;
      text-overflow: ellipsis;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      z-index: 10;
    }

    .ag-dnd-ghost-icon {
      padding: 2px;
    }

    /**
 ****************************
 * Overlay
 ****************************
*/
    .ag-overlay {
      height: 100%;
      left: 0;
      pointer-events: none;
      position: absolute;
      top: 0;
      width: 100%;
    }

    .ag-overlay-panel {
      display: flex;
      height: 100%;
      pointer-events: none;
      width: 100%;
    }

    .ag-overlay-wrapper {
      display: flex;
      flex: none;
      width: 100%;
      height: 100%;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    .ag-overlay-wrapper.ag-overlay-loading-wrapper {
      pointer-events: all;
    }

    .ag-overlay-no-rows-wrapper.ag-layout-auto-height {
      padding-top: 30px;
    }

    /**
 ****************************
 * Popup
 ****************************
*/
    .ag-popup>div {
      z-index: 5;
    }

    .ag-popup-backdrop {
      height: 100%;
      left: 0;
      position: fixed;
      top: 0;
      width: 100%;
    }

    .ag-popup-editor {
      position: absolute;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      z-index: 1;
    }

    /**
 ****************************
 * Virtual Lists
 ****************************
*/
    .ag-virtual-list-item {
      position: absolute;
      width: 100%;
    }

    .ag-virtual-list-item span:empty:not(.ag-icon) {
      border-left: 1px solid transparent;
    }

    /**
 ****************************
 * Floating Top and Bottom
 ****************************
*/
    .ag-floating-top {
      overflow: hidden;
      white-space: nowrap;
      width: 100%;
      position: relative;
      display: flex;
    }

    .ag-pinned-left-floating-top {
      display: inline-block;
      overflow: hidden;
      position: relative;
      min-width: 0px;
      flex-grow: 1000;
    }

    .ag-pinned-right-floating-top {
      display: inline-block;
      overflow: hidden;
      position: relative;
      min-width: 0px;
      flex-grow: 1000;
    }

    .ag-floating-bottom {
      overflow: hidden;
      white-space: nowrap;
      width: 100%;
      position: relative;
      display: flex;
    }

    .ag-pinned-left-floating-bottom {
      display: inline-block;
      overflow: hidden;
      position: relative;
      min-width: 0px;
      flex-grow: 1000;
    }

    .ag-pinned-right-floating-bottom {
      display: inline-block;
      overflow: hidden;
      position: relative;
      min-width: 0px;
      flex-grow: 1000;
    }

    /**
 ****************************
 * Dialog
 ****************************
*/
    .ag-dialog,
    .ag-panel {
      display: flex;
      flex-direction: column;
      position: relative;
      overflow: hidden;
    }

    .ag-dialog .ag-title-bar,
    .ag-panel .ag-title-bar {
      display: flex;
      flex: none;
      align-items: center;
      cursor: default;
    }

    .ag-dialog .ag-title-bar .ag-title-bar-title,
    .ag-panel .ag-title-bar .ag-title-bar-title {
      flex: 1 1 auto;
    }

    .ag-dialog .ag-title-bar .ag-title-bar-buttons,
    .ag-panel .ag-title-bar .ag-title-bar-buttons {
      display: flex;
    }

    .ag-dialog .ag-title-bar .ag-title-bar-buttons .ag-button,
    .ag-panel .ag-title-bar .ag-title-bar-buttons .ag-button {
      cursor: pointer;
    }

    .ag-dialog .ag-panel-content-wrapper,
    .ag-panel .ag-panel-content-wrapper {
      display: flex;
      flex: 1 1 auto;
      position: relative;
      overflow: hidden;
    }

    .ag-dialog .ag-panel-content-wrapper>div,
    .ag-panel .ag-panel-content-wrapper>div {
      width: 100%;
      height: 100%;
    }

    .ag-dialog {
      position: absolute;
    }

    .ag-dialog .ag-resizer {
      position: absolute;
      pointer-events: none;
      z-index: 1;
    }

    .ag-dialog .ag-resizer.ag-resizer-topLeft {
      top: 0;
      left: 0;
      height: 5px;
      width: 5px;
      cursor: nwse-resize;
    }

    .ag-dialog .ag-resizer.ag-resizer-top {
      top: 0;
      left: 5px;
      right: 5px;
      height: 5px;
      cursor: ns-resize;
    }

    .ag-dialog .ag-resizer.ag-resizer-topRight {
      top: 0;
      right: 0;
      height: 5px;
      width: 5px;
      cursor: nesw-resize;
    }

    .ag-dialog .ag-resizer.ag-resizer-right {
      top: 5px;
      right: 0;
      bottom: 5px;
      width: 5px;
      cursor: ew-resize;
    }

    .ag-dialog .ag-resizer.ag-resizer-bottomRight {
      bottom: 0;
      right: 0;
      height: 5px;
      width: 5px;
      cursor: nwse-resize;
    }

    .ag-dialog .ag-resizer.ag-resizer-bottom {
      bottom: 0;
      left: 5px;
      right: 5px;
      height: 5px;
      cursor: ns-resize;
    }

    .ag-dialog .ag-resizer.ag-resizer-bottomLeft {
      bottom: 0;
      left: 0;
      height: 5px;
      width: 5px;
      cursor: nesw-resize;
    }

    .ag-dialog .ag-resizer.ag-resizer-left {
      left: 0;
      top: 5px;
      bottom: 5px;
      width: 5px;
      cursor: ew-resize;
    }

    .ag-dialog .ag-message-box {
      width: 100%;
      height: 100%;
      display: flex;
      flex-direction: column;
    }

    .ag-dialog .ag-message-box .ag-message-box-content {
      display: flex;
      flex: 1 1 auto;
      justify-content: center;
      align-items: center;
    }

    .ag-dialog .ag-message-box .ag-message-box-button-bar {
      display: flex;
      justify-content: center;
    }

    /**
 ****************************
 * Tooltip
 ****************************
*/
    .ag-tooltip {
      position: absolute;
      pointer-events: none;
      z-index: 99999;
    }

    .ag-chart-tooltip {
      display: table;
      position: absolute;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      pointer-events: none;
      white-space: nowrap;
      z-index: 99999;
      font: 12px Verdana, sans-serif;
      color: black;
      background: #f4f4f4;
      border-radius: 5px;
      box-shadow: 0 0 1px rgba(3, 3, 3, 0.7), 0.5vh 0.5vh 1vh rgba(3, 3, 3, 0.25);
      opacity: 0;
      transform: scale(0.9);
      transition: 0.3s cubic-bezier(0.19, 1, 0.22, 1);
      transition-property: opacity, transform;
    }

    .ag-chart-tooltip.visible {
      opacity: 1;
      transform: scale(1);
    }

    .ag-chart-tooltip .title {
      font-weight: bold;
      padding: 7px;
      border-top-left-radius: 5px;
      border-top-right-radius: 5px;
      color: white;
      background-color: #888888;
    }

    .ag-chart-tooltip .content {
      padding: 7px;
      line-height: 1.7em;
    }

    /**
 ****************************
 * Animations
 ****************************
*/
    .ag-value-slide-out {
      margin-right: 5px;
      opacity: 1;
      transition: opacity 3s, margin-right 3s;
      transition-timing-function: linear;
    }

    .ag-value-slide-out-end {
      margin-right: 10px;
      opacity: 0;
    }

    .ag-opacity-zero {
      opacity: 0 !important;
    }

    /**
 ****************************
 * Menu
 ****************************
*/
    .ag-menu {
      max-height: 100%;
      overflow-y: auto;
      position: absolute;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    .ag-menu-column-select-wrapper {
      height: 265px;
      overflow: auto;
      width: 200px;
    }

    .ag-menu-list {
      display: table;
    }

    .ag-menu-option,
    .ag-menu-separator {
      display: table-row;
    }

    .ag-menu-option>span,
    .ag-menu-separator>span {
      display: table-cell;
      vertical-align: middle;
    }

    .ag-menu-option-text {
      white-space: nowrap;
    }

    .ag-menu-column-select-wrapper .ag-column-select-panel {
      height: 100%;
    }

    /**
 ****************************
 * Rich Select
 ****************************
*/
    .ag-rich-select {
      cursor: default;
      outline: none;
    }

    .ag-rich-select .ag-rich-select-value {
      display: flex;
      align-items: center;
    }

    .ag-rich-select .ag-rich-select-value>span {
      flex: 1 1 auto;
    }

    .ag-rich-select .ag-rich-select-value>span.ag-icon {
      order: 1;
      flex: none;
    }

    .ag-rich-select .ag-rich-select-list {
      position: relative;
    }

    .ag-rich-select .ag-rich-select-list .ag-virtual-list-item {
      display: flex;
    }

    .ag-rich-select .ag-rich-select-list .ag-virtual-list-item .ag-rich-select-row {
      display: flex;
      flex: 1 1 auto;
      align-items: center;
      white-space: nowrap;
    }

    /**
 ****************************
 * Pagination
 ****************************
*/
    .ag-paging-panel {
      align-items: center;
      display: flex;
      justify-content: flex-end;
    }

    .ag-paging-panel .ag-paging-row-summary-panel {
      display: flex;
    }

    .ag-paging-panel .ag-paging-row-summary-panel span {
      margin: 0 3px;
    }

    .ag-paging-page-summary-panel {
      display: flex;
      align-items: center;
    }

    .ag-paging-page-summary-panel .ag-disabled {
      pointer-events: none;
    }

    .ag-paging-page-summary-panel .ag-paging-button {
      position: relative;
      overflow: hidden;
    }

    .ag-paging-page-summary-panel .ag-paging-button button {
      position: absolute;
    }

    /**
 ****************************
 * Tool Panel
 ****************************
*/
    .ag-tool-panel-wrapper {
      display: flex;
      overflow-y: auto;
      cursor: default;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      width: 200px;
    }

    .ag-column-tool-panel-column,
    .ag-column-tool-panel-column-group {
      align-items: center;
      display: flex;
      flex-direction: row;
      flex-wrap: nowrap;
      text-overflow: ellipsis;
      white-space: nowrap;
    }

    .ag-column-tool-panel-column .ag-column-tool-panel-column,
    .ag-column-tool-panel-column .ag-column-tool-panel-column-group,
    .ag-column-tool-panel-column-group .ag-column-tool-panel-column,
    .ag-column-tool-panel-column-group .ag-column-tool-panel-column-group {
      flex: 1 1 auto;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .ag-column-select-checkbox {
      display: flex;
    }

    .ag-tool-panel-horizontal-resize {
      cursor: col-resize;
      height: 100%;
      position: absolute;
      top: 0;
      width: 5px;
      z-index: 1;
    }

    .ag-ltr .ag-side-bar-left .ag-tool-panel-horizontal-resize,
    .ag-rtl .ag-side-bar-right .ag-tool-panel-horizontal-resize {
      transform: translateX(3px);
      right: 0;
    }

    .ag-ltr .ag-side-bar-right .ag-tool-panel-horizontal-resize,
    .ag-rtl .ag-side-bar-left .ag-tool-panel-horizontal-resize {
      transform: translateX(-3px);
      left: 0;
    }

    .loading-filter {
      background-color: #e6e6e6;
      height: 100%;
      padding: 5px;
      position: absolute;
      top: 34px;
      width: 100%;
      z-index: 1;
    }

    .ag-details-row {
      height: 100%;
      width: 100%;
    }

    .ag-details-grid {
      height: 100%;
      width: 100%;
    }

    .ag-header-group-cell {
      display: flex;
      align-items: center;
      height: 100%;
      overflow: hidden;
      position: absolute;
      text-overflow: ellipsis;
    }

    .ag-cell-label-container {
      display: flex;
      justify-content: space-between;
      flex-direction: row-reverse;
      align-items: center;
      width: 100%;
    }

    .ag-numeric-header .ag-cell-label-container {
      flex-direction: row;
    }

    /**
 ****************************
 * Side Bar
 ****************************
*/
    .ag-side-bar {
      display: flex;
      flex-direction: row-reverse;
    }

    .ag-side-bar.ag-side-bar-left {
      order: -1;
      flex-direction: row;
    }

    .ag-side-bar .ag-side-buttons div button {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      flex-wrap: nowrap;
      white-space: nowrap;
      outline: none;
      cursor: pointer;
    }

    .ag-side-bar .ag-side-buttons div button span:not(.ag-icon) {
      -webkit-writing-mode: tb;
      writing-mode: tb;
      -webkit-writing-mode: vertical-lr;
      writing-mode: vertical-lr;
    }

    .ag-side-bar .ag-side-buttons div button .ag-icon {
      display: inline;
    }

    .ag-side-bar .panel-container {
      width: 180px;
    }

    .ag-side-bar.full-width .panel-container {
      width: 200px;
    }

    .ag-rtl .ag-side-bar .ag-side-buttons button span:not(.ag-icon) {
      -webkit-writing-mode: tb-rl;
      writing-mode: tb-rl;
      -webkit-writing-mode: vertical-rl;
      writing-mode: vertical-rl;
    }

    /**
 ****************************
 * Status Bar
 ****************************
*/
    .ag-status-bar {
      display: flex;
      justify-content: space-between;
      overflow: hidden;
    }

    .ag-status-bar .ag-status-panel {
      display: inline-flex;
    }

    .ag-status-bar .ag-name-value {
      white-space: nowrap;
    }

    .ag-status-bar-left {
      display: inline-flex;
    }

    .ag-status-bar-center {
      display: inline-flex;
    }

    .ag-status-bar-right {
      display: inline-flex;
    }

    /**
 ****************************
 * Widgets
 ****************************
*/
    .ag-group-component {
      position: relative;
      flex: 1 1 100%;
    }

    .ag-group-component .ag-group-component-title-bar,
    .ag-group-component .ag-group-component-title {
      display: flex;
      align-items: center;
    }

    .ag-group-component .ag-group-component-toolbar {
      display: flex;
      align-items: center;
    }

    .ag-group-component .ag-group-component-container {
      display: flex;
      flex-direction: column;
    }

    .ag-group-component .ag-group-component-container .ag-group-subgroup {
      display: flex;
      align-self: stretch;
    }

    .ag-group-component .ag-column-group-icons>span {
      display: block;
    }

    .ag-group-component .ag-group-item {
      display: flex;
      flex: 1 1 auto;
      align-items: center;
    }

    .ag-group-component.ag-alignment-stretch .ag-group-item {
      align-items: stretch;
    }

    .ag-group-component.ag-alignment-start .ag-group-item {
      align-items: flex-start;
    }

    .ag-group-component.ag-alignment-end .ag-group-item {
      align-items: flex-end;
    }

    .ag-group-component.ag-disabled .ag-group-component-container {
      pointer-events: none;
    }

    .ag-group-component.ag-collapsed .ag-group-component-toolbar,
    .ag-group-component.ag-collapsed .ag-group-component-container {
      display: none;
    }

    .ag-toggle-button .ag-input-wrapper .ag-icon {
      transition: right 0.3s;
      position: absolute;
      top: -1px;
    }

    .ag-input-field {
      display: flex;
      flex-direction: row;
      align-items: center;
    }

    .ag-input-field input,
    .ag-input-field select,
    .ag-input-field textarea {
      flex: 1 1 auto;
      width: 100%;
      min-width: 0;
    }

    .ag-range-field {
      display: flex;
      align-items: center;
    }

    .ag-picker-field>.ag-wrapper,
    .ag-slider>.ag-wrapper,
    .ag-angle-select>.ag-wrapper {
      display: flex;
    }

    .ag-picker-field>.ag-wrapper>div,
    .ag-slider>.ag-wrapper>div,
    .ag-angle-select>.ag-wrapper>div {
      flex: 1 1 auto;
    }

    .ag-angle-select {
      display: flex;
      align-items: center;
    }

    .ag-angle-select .ag-angle-select-field .ag-parent-circle {
      display: block;
      position: relative;
    }

    .ag-angle-select .ag-angle-select-field .ag-child-circle {
      position: absolute;
    }

    .ag-picker-field {
      display: flex;
      align-items: center;
    }

    .ag-picker-field>.ag-wrapper>button {
      display: flex;
      border: 0;
      padding: 0;
      margin: 0;
    }

    .ag-color-picker>.ag-wrapper {
      align-items: stretch;
      overflow: hidden;
    }

    .ag-color-picker button {
      cursor: pointer;
    }

    .ag-labeled.ag-label-align-right label {
      order: 1;
    }

    .ag-labeled.ag-label-align-right>div {
      flex: none;
    }

    .ag-labeled.ag-label-align-top {
      flex-direction: column;
      align-items: flex-start;
    }

    .ag-labeled.ag-label-align-top>div {
      align-self: stretch;
    }

    .ag-color-panel {
      display: flex;
      flex-direction: column;
      text-align: center;
    }

    .ag-color-panel .ag-spectrum-color {
      flex: 1 1 auto;
      position: relative;
      overflow: hidden;
      cursor: default;
    }

    .ag-color-panel .ag-fill {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
    }

    .ag-color-panel .ag-spectrum-val {
      cursor: pointer;
    }

    .ag-color-panel .ag-spectrum-dragger {
      position: absolute;
      pointer-events: none;
      cursor: pointer;
    }

    .ag-color-panel .ag-spectrum-hue {
      cursor: default;
      background: linear-gradient(to left, #ff0000 3%, #ffff00 17%, #00ff00 33%, #00ffff 50%, #0000ff 67%, #ff00ff 83%, #ff0000 100%);
    }

    .ag-color-panel .ag-spectrum-alpha {
      cursor: default;
    }

    .ag-color-panel .ag-spectrum-hue-background {
      width: 100%;
      height: 100%;
    }

    .ag-color-panel .ag-spectrum-alpha-background {
      background-image: linear-gradient(to right, rgba(0, 0, 0, 0), black);
      width: 100%;
      height: 100%;
    }

    .ag-color-panel .ag-hue-alpha {
      cursor: pointer;
    }

    .ag-color-panel .ag-spectrum-slider {
      position: absolute;
      pointer-events: none;
    }

    .ag-color-panel .ag-spectrum-text-value {
      display: inline-block;
      text-align: center;
      overflow: hidden;
      white-space: nowrap;
    }

    .ag-color-panel .ag-spectrum-text-value:focus {
      outline: none;
      outline-offset: 0;
    }

    .ag-color-panel .ag-recent-colors {
      display: flex;
    }

    .ag-color-panel .ag-recent-colors>div {
      cursor: pointer;
    }

    .ag-ltr .ag-toolpanel-indent-1 {
      padding-left: 10px;
    }

    .ag-rtl .ag-toolpanel-indent-1 {
      padding-right: 10px;
    }

    .ag-ltr .ag-row-group-indent-1 {
      padding-left: 10px;
    }

    .ag-rtl .ag-row-group-indent-1 {
      padding-right: 10px;
    }

    .ag-ltr .ag-toolpanel-indent-2 {
      padding-left: 20px;
    }

    .ag-rtl .ag-toolpanel-indent-2 {
      padding-right: 20px;
    }

    .ag-ltr .ag-row-group-indent-2 {
      padding-left: 20px;
    }

    .ag-rtl .ag-row-group-indent-2 {
      padding-right: 20px;
    }

    .ag-ltr .ag-toolpanel-indent-3 {
      padding-left: 30px;
    }

    .ag-rtl .ag-toolpanel-indent-3 {
      padding-right: 30px;
    }

    .ag-ltr .ag-row-group-indent-3 {
      padding-left: 30px;
    }

    .ag-rtl .ag-row-group-indent-3 {
      padding-right: 30px;
    }

    .ag-ltr .ag-toolpanel-indent-4 {
      padding-left: 40px;
    }

    .ag-rtl .ag-toolpanel-indent-4 {
      padding-right: 40px;
    }

    .ag-ltr .ag-row-group-indent-4 {
      padding-left: 40px;
    }

    .ag-rtl .ag-row-group-indent-4 {
      padding-right: 40px;
    }

    .ag-ltr .ag-toolpanel-indent-5 {
      padding-left: 50px;
    }

    .ag-rtl .ag-toolpanel-indent-5 {
      padding-right: 50px;
    }

    .ag-ltr .ag-row-group-indent-5 {
      padding-left: 50px;
    }

    .ag-rtl .ag-row-group-indent-5 {
      padding-right: 50px;
    }

    .ag-ltr .ag-toolpanel-indent-6 {
      padding-left: 60px;
    }

    .ag-rtl .ag-toolpanel-indent-6 {
      padding-right: 60px;
    }

    .ag-ltr .ag-row-group-indent-6 {
      padding-left: 60px;
    }

    .ag-rtl .ag-row-group-indent-6 {
      padding-right: 60px;
    }

    .ag-ltr .ag-toolpanel-indent-7 {
      padding-left: 70px;
    }

    .ag-rtl .ag-toolpanel-indent-7 {
      padding-right: 70px;
    }

    .ag-ltr .ag-row-group-indent-7 {
      padding-left: 70px;
    }

    .ag-rtl .ag-row-group-indent-7 {
      padding-right: 70px;
    }

    .ag-ltr .ag-toolpanel-indent-8 {
      padding-left: 80px;
    }

    .ag-rtl .ag-toolpanel-indent-8 {
      padding-right: 80px;
    }

    .ag-ltr .ag-row-group-indent-8 {
      padding-left: 80px;
    }

    .ag-rtl .ag-row-group-indent-8 {
      padding-right: 80px;
    }

    .ag-ltr .ag-toolpanel-indent-9 {
      padding-left: 90px;
    }

    .ag-rtl .ag-toolpanel-indent-9 {
      padding-right: 90px;
    }

    .ag-ltr .ag-row-group-indent-9 {
      padding-left: 90px;
    }

    .ag-rtl .ag-row-group-indent-9 {
      padding-right: 90px;
    }

    .ag-ltr .ag-toolpanel-indent-10 {
      padding-left: 100px;
    }

    .ag-rtl .ag-toolpanel-indent-10 {
      padding-right: 100px;
    }

    .ag-ltr .ag-row-group-indent-10 {
      padding-left: 100px;
    }

    .ag-rtl .ag-row-group-indent-10 {
      padding-right: 100px;
    }

    .ag-ltr .ag-toolpanel-indent-11 {
      padding-left: 110px;
    }

    .ag-rtl .ag-toolpanel-indent-11 {
      padding-right: 110px;
    }

    .ag-ltr .ag-row-group-indent-11 {
      padding-left: 110px;
    }

    .ag-rtl .ag-row-group-indent-11 {
      padding-right: 110px;
    }

    .ag-ltr .ag-toolpanel-indent-12 {
      padding-left: 120px;
    }

    .ag-rtl .ag-toolpanel-indent-12 {
      padding-right: 120px;
    }

    .ag-ltr .ag-row-group-indent-12 {
      padding-left: 120px;
    }

    .ag-rtl .ag-row-group-indent-12 {
      padding-right: 120px;
    }

    .ag-ltr .ag-toolpanel-indent-13 {
      padding-left: 130px;
    }

    .ag-rtl .ag-toolpanel-indent-13 {
      padding-right: 130px;
    }

    .ag-ltr .ag-row-group-indent-13 {
      padding-left: 130px;
    }

    .ag-rtl .ag-row-group-indent-13 {
      padding-right: 130px;
    }

    .ag-ltr .ag-toolpanel-indent-14 {
      padding-left: 140px;
    }

    .ag-rtl .ag-toolpanel-indent-14 {
      padding-right: 140px;
    }

    .ag-ltr .ag-row-group-indent-14 {
      padding-left: 140px;
    }

    .ag-rtl .ag-row-group-indent-14 {
      padding-right: 140px;
    }

    .ag-ltr .ag-toolpanel-indent-15 {
      padding-left: 150px;
    }

    .ag-rtl .ag-toolpanel-indent-15 {
      padding-right: 150px;
    }

    .ag-ltr .ag-row-group-indent-15 {
      padding-left: 150px;
    }

    .ag-rtl .ag-row-group-indent-15 {
      padding-right: 150px;
    }

    .ag-ltr .ag-toolpanel-indent-16 {
      padding-left: 160px;
    }

    .ag-rtl .ag-toolpanel-indent-16 {
      padding-right: 160px;
    }

    .ag-ltr .ag-row-group-indent-16 {
      padding-left: 160px;
    }

    .ag-rtl .ag-row-group-indent-16 {
      padding-right: 160px;
    }

    .ag-ltr .ag-toolpanel-indent-17 {
      padding-left: 170px;
    }

    .ag-rtl .ag-toolpanel-indent-17 {
      padding-right: 170px;
    }

    .ag-ltr .ag-row-group-indent-17 {
      padding-left: 170px;
    }

    .ag-rtl .ag-row-group-indent-17 {
      padding-right: 170px;
    }

    .ag-ltr .ag-toolpanel-indent-18 {
      padding-left: 180px;
    }

    .ag-rtl .ag-toolpanel-indent-18 {
      padding-right: 180px;
    }

    .ag-ltr .ag-row-group-indent-18 {
      padding-left: 180px;
    }

    .ag-rtl .ag-row-group-indent-18 {
      padding-right: 180px;
    }

    .ag-ltr .ag-toolpanel-indent-19 {
      padding-left: 190px;
    }

    .ag-rtl .ag-toolpanel-indent-19 {
      padding-right: 190px;
    }

    .ag-ltr .ag-row-group-indent-19 {
      padding-left: 190px;
    }

    .ag-rtl .ag-row-group-indent-19 {
      padding-right: 190px;
    }

    .ag-ltr .ag-toolpanel-indent-20 {
      padding-left: 200px;
    }

    .ag-rtl .ag-toolpanel-indent-20 {
      padding-right: 200px;
    }

    .ag-ltr .ag-row-group-indent-20 {
      padding-left: 200px;
    }

    .ag-rtl .ag-row-group-indent-20 {
      padding-right: 200px;
    }

    .ag-ltr .ag-toolpanel-indent-21 {
      padding-left: 210px;
    }

    .ag-rtl .ag-toolpanel-indent-21 {
      padding-right: 210px;
    }

    .ag-ltr .ag-row-group-indent-21 {
      padding-left: 210px;
    }

    .ag-rtl .ag-row-group-indent-21 {
      padding-right: 210px;
    }

    .ag-ltr .ag-toolpanel-indent-22 {
      padding-left: 220px;
    }

    .ag-rtl .ag-toolpanel-indent-22 {
      padding-right: 220px;
    }

    .ag-ltr .ag-row-group-indent-22 {
      padding-left: 220px;
    }

    .ag-rtl .ag-row-group-indent-22 {
      padding-right: 220px;
    }

    .ag-ltr .ag-toolpanel-indent-23 {
      padding-left: 230px;
    }

    .ag-rtl .ag-toolpanel-indent-23 {
      padding-right: 230px;
    }

    .ag-ltr .ag-row-group-indent-23 {
      padding-left: 230px;
    }

    .ag-rtl .ag-row-group-indent-23 {
      padding-right: 230px;
    }

    .ag-ltr .ag-toolpanel-indent-24 {
      padding-left: 240px;
    }

    .ag-rtl .ag-toolpanel-indent-24 {
      padding-right: 240px;
    }

    .ag-ltr .ag-row-group-indent-24 {
      padding-left: 240px;
    }

    .ag-rtl .ag-row-group-indent-24 {
      padding-right: 240px;
    }

    .ag-ltr .ag-toolpanel-indent-25 {
      padding-left: 250px;
    }

    .ag-rtl .ag-toolpanel-indent-25 {
      padding-right: 250px;
    }

    .ag-ltr .ag-row-group-indent-25 {
      padding-left: 250px;
    }

    .ag-rtl .ag-row-group-indent-25 {
      padding-right: 250px;
    }

    .ag-ltr .ag-toolpanel-indent-26 {
      padding-left: 260px;
    }

    .ag-rtl .ag-toolpanel-indent-26 {
      padding-right: 260px;
    }

    .ag-ltr .ag-row-group-indent-26 {
      padding-left: 260px;
    }

    .ag-rtl .ag-row-group-indent-26 {
      padding-right: 260px;
    }

    .ag-ltr .ag-toolpanel-indent-27 {
      padding-left: 270px;
    }

    .ag-rtl .ag-toolpanel-indent-27 {
      padding-right: 270px;
    }

    .ag-ltr .ag-row-group-indent-27 {
      padding-left: 270px;
    }

    .ag-rtl .ag-row-group-indent-27 {
      padding-right: 270px;
    }

    .ag-ltr .ag-toolpanel-indent-28 {
      padding-left: 280px;
    }

    .ag-rtl .ag-toolpanel-indent-28 {
      padding-right: 280px;
    }

    .ag-ltr .ag-row-group-indent-28 {
      padding-left: 280px;
    }

    .ag-rtl .ag-row-group-indent-28 {
      padding-right: 280px;
    }

    .ag-ltr .ag-toolpanel-indent-29 {
      padding-left: 290px;
    }

    .ag-rtl .ag-toolpanel-indent-29 {
      padding-right: 290px;
    }

    .ag-ltr .ag-row-group-indent-29 {
      padding-left: 290px;
    }

    .ag-rtl .ag-row-group-indent-29 {
      padding-right: 290px;
    }

    .ag-ltr .ag-toolpanel-indent-30 {
      padding-left: 300px;
    }

    .ag-rtl .ag-toolpanel-indent-30 {
      padding-right: 300px;
    }

    .ag-ltr .ag-row-group-indent-30 {
      padding-left: 300px;
    }

    .ag-rtl .ag-row-group-indent-30 {
      padding-right: 300px;
    }

    .ag-ltr .ag-toolpanel-indent-31 {
      padding-left: 310px;
    }

    .ag-rtl .ag-toolpanel-indent-31 {
      padding-right: 310px;
    }

    .ag-ltr .ag-row-group-indent-31 {
      padding-left: 310px;
    }

    .ag-rtl .ag-row-group-indent-31 {
      padding-right: 310px;
    }

    .ag-ltr .ag-toolpanel-indent-32 {
      padding-left: 320px;
    }

    .ag-rtl .ag-toolpanel-indent-32 {
      padding-right: 320px;
    }

    .ag-ltr .ag-row-group-indent-32 {
      padding-left: 320px;
    }

    .ag-rtl .ag-row-group-indent-32 {
      padding-right: 320px;
    }

    .ag-ltr .ag-toolpanel-indent-33 {
      padding-left: 330px;
    }

    .ag-rtl .ag-toolpanel-indent-33 {
      padding-right: 330px;
    }

    .ag-ltr .ag-row-group-indent-33 {
      padding-left: 330px;
    }

    .ag-rtl .ag-row-group-indent-33 {
      padding-right: 330px;
    }

    .ag-ltr .ag-toolpanel-indent-34 {
      padding-left: 340px;
    }

    .ag-rtl .ag-toolpanel-indent-34 {
      padding-right: 340px;
    }

    .ag-ltr .ag-row-group-indent-34 {
      padding-left: 340px;
    }

    .ag-rtl .ag-row-group-indent-34 {
      padding-right: 340px;
    }

    .ag-ltr .ag-toolpanel-indent-35 {
      padding-left: 350px;
    }

    .ag-rtl .ag-toolpanel-indent-35 {
      padding-right: 350px;
    }

    .ag-ltr .ag-row-group-indent-35 {
      padding-left: 350px;
    }

    .ag-rtl .ag-row-group-indent-35 {
      padding-right: 350px;
    }

    .ag-ltr .ag-toolpanel-indent-36 {
      padding-left: 360px;
    }

    .ag-rtl .ag-toolpanel-indent-36 {
      padding-right: 360px;
    }

    .ag-ltr .ag-row-group-indent-36 {
      padding-left: 360px;
    }

    .ag-rtl .ag-row-group-indent-36 {
      padding-right: 360px;
    }

    .ag-ltr .ag-toolpanel-indent-37 {
      padding-left: 370px;
    }

    .ag-rtl .ag-toolpanel-indent-37 {
      padding-right: 370px;
    }

    .ag-ltr .ag-row-group-indent-37 {
      padding-left: 370px;
    }

    .ag-rtl .ag-row-group-indent-37 {
      padding-right: 370px;
    }

    .ag-ltr .ag-toolpanel-indent-38 {
      padding-left: 380px;
    }

    .ag-rtl .ag-toolpanel-indent-38 {
      padding-right: 380px;
    }

    .ag-ltr .ag-row-group-indent-38 {
      padding-left: 380px;
    }

    .ag-rtl .ag-row-group-indent-38 {
      padding-right: 380px;
    }

    .ag-ltr .ag-toolpanel-indent-39 {
      padding-left: 390px;
    }

    .ag-rtl .ag-toolpanel-indent-39 {
      padding-right: 390px;
    }

    .ag-ltr .ag-row-group-indent-39 {
      padding-left: 390px;
    }

    .ag-rtl .ag-row-group-indent-39 {
      padding-right: 390px;
    }

    .ag-ltr .ag-toolpanel-indent-40 {
      padding-left: 400px;
    }

    .ag-rtl .ag-toolpanel-indent-40 {
      padding-right: 400px;
    }

    .ag-ltr .ag-row-group-indent-40 {
      padding-left: 400px;
    }

    .ag-rtl .ag-row-group-indent-40 {
      padding-right: 400px;
    }

    .ag-ltr .ag-toolpanel-indent-41 {
      padding-left: 410px;
    }

    .ag-rtl .ag-toolpanel-indent-41 {
      padding-right: 410px;
    }

    .ag-ltr .ag-row-group-indent-41 {
      padding-left: 410px;
    }

    .ag-rtl .ag-row-group-indent-41 {
      padding-right: 410px;
    }

    .ag-ltr .ag-toolpanel-indent-42 {
      padding-left: 420px;
    }

    .ag-rtl .ag-toolpanel-indent-42 {
      padding-right: 420px;
    }

    .ag-ltr .ag-row-group-indent-42 {
      padding-left: 420px;
    }

    .ag-rtl .ag-row-group-indent-42 {
      padding-right: 420px;
    }

    .ag-ltr .ag-toolpanel-indent-43 {
      padding-left: 430px;
    }

    .ag-rtl .ag-toolpanel-indent-43 {
      padding-right: 430px;
    }

    .ag-ltr .ag-row-group-indent-43 {
      padding-left: 430px;
    }

    .ag-rtl .ag-row-group-indent-43 {
      padding-right: 430px;
    }

    .ag-ltr .ag-toolpanel-indent-44 {
      padding-left: 440px;
    }

    .ag-rtl .ag-toolpanel-indent-44 {
      padding-right: 440px;
    }

    .ag-ltr .ag-row-group-indent-44 {
      padding-left: 440px;
    }

    .ag-rtl .ag-row-group-indent-44 {
      padding-right: 440px;
    }

    .ag-ltr .ag-toolpanel-indent-45 {
      padding-left: 450px;
    }

    .ag-rtl .ag-toolpanel-indent-45 {
      padding-right: 450px;
    }

    .ag-ltr .ag-row-group-indent-45 {
      padding-left: 450px;
    }

    .ag-rtl .ag-row-group-indent-45 {
      padding-right: 450px;
    }

    .ag-ltr .ag-toolpanel-indent-46 {
      padding-left: 460px;
    }

    .ag-rtl .ag-toolpanel-indent-46 {
      padding-right: 460px;
    }

    .ag-ltr .ag-row-group-indent-46 {
      padding-left: 460px;
    }

    .ag-rtl .ag-row-group-indent-46 {
      padding-right: 460px;
    }

    .ag-ltr .ag-toolpanel-indent-47 {
      padding-left: 470px;
    }

    .ag-rtl .ag-toolpanel-indent-47 {
      padding-right: 470px;
    }

    .ag-ltr .ag-row-group-indent-47 {
      padding-left: 470px;
    }

    .ag-rtl .ag-row-group-indent-47 {
      padding-right: 470px;
    }

    .ag-ltr .ag-toolpanel-indent-48 {
      padding-left: 480px;
    }

    .ag-rtl .ag-toolpanel-indent-48 {
      padding-right: 480px;
    }

    .ag-ltr .ag-row-group-indent-48 {
      padding-left: 480px;
    }

    .ag-rtl .ag-row-group-indent-48 {
      padding-right: 480px;
    }

    .ag-ltr .ag-toolpanel-indent-49 {
      padding-left: 490px;
    }

    .ag-rtl .ag-toolpanel-indent-49 {
      padding-right: 490px;
    }

    .ag-ltr .ag-row-group-indent-49 {
      padding-left: 490px;
    }

    .ag-rtl .ag-row-group-indent-49 {
      padding-right: 490px;
    }

    .ag-ltr {
      direction: ltr;
    }

    .ag-ltr .ag-body,
    .ag-ltr .ag-floating-top,
    .ag-ltr .ag-floating-bottom,
    .ag-ltr .ag-header,
    .ag-ltr .ag-body-viewport,
    .ag-ltr .ag-body-horizontal-scroll {
      flex-direction: row;
    }

    .ag-ltr .ag-header-cell-resize {
      right: -4px;
    }

    .ag-ltr .ag-pinned-right-header .ag-header-cell-resize {
      left: -4px;
    }

    .ag-rtl {
      direction: rtl;
    }

    .ag-rtl .ag-body,
    .ag-rtl .ag-floating-top,
    .ag-rtl .ag-floating-bottom,
    .ag-rtl .ag-header,
    .ag-rtl .ag-body-viewport,
    .ag-rtl .ag-body-horizontal-scroll {
      flex-direction: row-reverse;
    }

    .ag-rtl .ag-header-cell-resize {
      left: -4px;
    }

    .ag-rtl .ag-pinned-left-header .ag-header-cell-resize {
      right: -4px;
    }

    .ag-rtl .ag-group-component .ag-column-group-icons .ag-column-group-closed-icon {
      transform: rotate(180deg);
    }

    .ag-rtl .ag-filter-toolpanel-instance .ag-filter-toolpanel-header .ag-icon-tree-closed {
      transform: rotate(180deg);
    }

    .ag-rtl .ag-primary-cols-header-panel .ag-icon-tree-closed,
    .ag-rtl .ag-filter-toolpanel-header.ag-filter-header .ag-icon-tree-closed {
      transform: rotate(180deg);
    }

    .ag-rtl .ag-header-group-cell .ag-header-icon.ag-header-expand-icon-expanded,
    .ag-rtl .ag-header-group-cell .ag-header-icon.ag-header-expand-icon-collapsed,
    .ag-rtl .ag-cell-wrapper .ag-group-contracted {
      transform: rotate(180deg);
    }

    @media print {
      .ag-body-viewport {
        display: block;
      }

      .ag-row {
        page-break-inside: avoid;
      }
    }

    .ag-body .ag-pinned-left-cols-viewport,
    .ag-body .ag-body-viewport,
    .ag-body .ag-pinned-right-cols-viewport {
      -webkit-overflow-scrolling: touch;
    }

    .ag-chart {
      position: relative;
      display: flex;
      overflow: hidden;
      width: 100%;
      height: 100%;
    }

    .ag-chart .ag-chart-components-wrapper {
      position: relative;
      display: flex;
      flex: 1 1 auto;
      overflow: hidden;
    }

    .ag-chart .ag-chart-components-wrapper .ag-chart-canvas-wrapper {
      position: relative;
      flex: 1 1 auto;
      overflow: hidden;
    }

    .ag-chart .ag-chart-components-wrapper .ag-chart-canvas-wrapper canvas {
      display: block;
    }

    .ag-chart .ag-chart-components-wrapper .ag-chart-menu {
      position: absolute;
      top: 10px;
      right: 20px;
      width: 24px;
      overflow: hidden;
      display: flex;
      flex-direction: column;
    }

    .ag-chart:not(.ag-has-menu):hover .ag-chart-menu {
      opacity: 1;
      pointer-events: all;
    }

    .ag-chart .ag-chart-docked-container {
      position: relative;
      width: 0;
      min-width: 0;
      transition: min-width 0.4s;
    }

    .ag-chart .ag-chart-docked-container .ag-panel {
      border-width: 0 0 0 1px;
    }

    .ag-chart-tabbed-menu>div {
      width: 100%;
      height: 100%;
      display: flex;
      flex-direction: column;
      overflow: hidden;
    }

    .ag-chart-tabbed-menu .ag-tab-header {
      flex: none;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      cursor: default;
    }

    .ag-chart-tabbed-menu .ag-tab-body {
      display: flex;
      flex: 1 1 auto;
      align-items: stretch;
      overflow: hidden;
    }

    .ag-chart-tabbed-menu .ag-tab-body>div {
      width: 100%;
      overflow: hidden;
      overflow-y: auto;
    }

    .ag-chart-tabbed-menu .ag-chart-settings {
      overflow-x: hidden;
    }

    .ag-chart-tabbed-menu .ag-chart-settings .ag-chart-settings-wrapper {
      position: relative;
      flex-direction: column;
      width: 100%;
      height: 100%;
      display: flex;
      overflow: hidden;
    }

    .ag-chart-tabbed-menu .ag-chart-settings .ag-chart-settings-wrapper .ag-chart-settings-nav-bar {
      width: 100%;
      display: flex;
      height: 30px;
      align-items: center;
    }

    .ag-chart-tabbed-menu .ag-chart-settings .ag-chart-settings-wrapper .ag-chart-settings-nav-bar .ag-nav-card-selector {
      display: flex;
      align-items: center;
      justify-content: space-around;
      flex: 1 1 auto;
      height: 100%;
    }

    .ag-chart-tabbed-menu .ag-chart-settings .ag-chart-settings-wrapper .ag-chart-settings-nav-bar .ag-nav-card-selector .ag-nav-card-item {
      opacity: 0.2;
    }

    .ag-chart-tabbed-menu .ag-chart-settings .ag-chart-settings-wrapper .ag-chart-settings-nav-bar .ag-nav-card-selector .ag-nav-card-item.ag-selected {
      opacity: 1;
    }

    .ag-chart-tabbed-menu .ag-chart-settings .ag-chart-settings-wrapper .ag-chart-settings-nav-bar .ag-chart-settings-prev-btn,
    .ag-chart-tabbed-menu .ag-chart-settings .ag-chart-settings-wrapper .ag-chart-settings-nav-bar .ag-chart-settings-next-btn {
      position: relative;
      flex: none;
    }

    .ag-chart-tabbed-menu .ag-chart-settings .ag-chart-settings-wrapper .ag-chart-settings-nav-bar .ag-chart-settings-prev-btn button,
    .ag-chart-tabbed-menu .ag-chart-settings .ag-chart-settings-wrapper .ag-chart-settings-nav-bar .ag-chart-settings-next-btn button {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      cursor: pointer;
      opacity: 0;
    }

    .ag-chart-tabbed-menu .ag-chart-settings .ag-chart-settings-wrapper .ag-chart-settings-mini-charts-container {
      position: relative;
      flex: 1 1 auto;
      overflow-x: hidden;
      overflow-y: auto;
    }

    .ag-chart-tabbed-menu .ag-chart-settings .ag-chart-settings-wrapper .ag-chart-settings-mini-charts-container .ag-chart-settings-mini-wrapper {
      position: absolute;
      top: 0;
      left: 0;
      display: flex;
      flex-direction: column;
      width: 100%;
      min-height: 100%;
      overflow: hidden;
    }

    .ag-chart-tabbed-menu .ag-chart-settings .ag-chart-settings-wrapper .ag-chart-settings-mini-charts-container .ag-chart-settings-mini-wrapper .ag-group-component {
      flex: none;
    }

    .ag-chart-tabbed-menu .ag-chart-settings .ag-chart-settings-wrapper .ag-chart-settings-mini-charts-container .ag-chart-settings-mini-wrapper .ag-group-component-container {
      flex-direction: row;
      flex-wrap: wrap;
    }

    .ag-chart-tabbed-menu .ag-chart-settings .ag-chart-settings-wrapper .ag-chart-settings-mini-charts-container .ag-chart-settings-mini-wrapper .ag-group-component-container .ag-chart-mini-thumbnail {
      flex: none;
    }

    .ag-chart-tabbed-menu .ag-chart-settings .ag-chart-settings-wrapper .ag-chart-settings-mini-charts-container .ag-chart-settings-mini-wrapper.ag-animating,
    .ag-chart-tabbed-menu .ag-chart-settings .ag-chart-settings-wrapper .ag-chart-settings-mini-charts-container .ag-chart-settings-mini-wrapper.ag-animating {
      transition: left 0.3s;
      transition-timing-function: ease-in-out;
    }

    .ag-chart-tabbed-menu .ag-chart-settings .ag-chart-settings-wrapper .ag-chart-settings-mini-charts-container .ag-chart-settings-mini-wrapper .ag-chart-mini-thumbnail {
      cursor: pointer;
    }

    .ag-chart-tabbed-menu .ag-chart-settings .ag-chart-settings-wrapper .ag-chart-settings-mini-charts-container .ag-chart-settings-mini-wrapper .ag-chart-mini-thumbnail canvas {
      display: block;
    }

    .ag-chart-tabbed-menu .ag-chart-data-wrapper,
    .ag-chart-tabbed-menu .ag-chart-format-wrapper {
      display: flex;
      flex-direction: column;
      position: relative;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    .ag-chart-tabbed-menu .ag-chart-data-wrapper>div,
    .ag-chart-tabbed-menu .ag-chart-format-wrapper>div {
      display: flex;
      margin: 0;
      padding-bottom: 2px;
    }

    .ag-chart-tabbed-menu .ag-chart-data-wrapper>div:not(:first-child),
    .ag-chart-tabbed-menu .ag-chart-format-wrapper>div:not(:first-child) {
      margin-top: 0;
    }

    .ag-chart-tabbed-menu .ag-chart-format-wrapper {
      overflow-x: hidden;
    }

    .ag-chart-tabbed-menu .ag-chart-format-wrapper .ag-group-component .ag-group-subgroup {
      justify-content: space-between;
    }

    .ag-chart .ag-chart-canvas-wrapper.ag-chart-empty>canvas {
      visibility: hidden;
    }

    .ag-chart .ag-chart-canvas-wrapper.ag-chart-empty .ag-chart-empty-text {
      display: flex;
    }

    .ag-chart .ag-chart-empty-text {
      display: none;
      position: absolute;
      top: 0;
      width: 100%;
      height: 100%;
      align-items: center;
      justify-content: center;
    }

    .ag-chart .ag-chart-menu {
      opacity: 0;
      pointer-events: none;
    }

    .ag-chart .ag-chart-menu>span {
      opacity: 0.5;
      line-height: 24px;
      font-size: 24px;
      width: 24px;
      height: 24px;
      margin: 2px 0;
      cursor: pointer;
    }

    .ag-chart .ag-chart-menu>span:hover {
      border-radius: 5px;
    }

    .ag-chart .ag-chart-docked-container {
      min-width: 0;
      width: 0;
    }

    .ag-chart-tabbed-menu .ag-tab-body {
      padding: 0;
    }

    .ag-chart-tabbed-menu .ag-chart-settings .ag-chart-settings-nav-bar {
      padding: 0 10px;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    .ag-chart-tabbed-menu .ag-chart-settings .ag-chart-settings-nav-bar .ag-nav-card-selector {
      padding: 0 10px;
    }

    .ag-chart-tabbed-menu .ag-chart-settings .ag-chart-settings-nav-bar .ag-nav-card-selector .ag-nav-card-item {
      cursor: pointer;
    }

    @charset "UTF-8";

    @font-face {
      font-family: "agGridBalham";
      src: url("data:application/font-woff;charset=utf-8;base64,d09GRgABAAAAABiwAAsAAAAALDAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAABHU1VCAAABCAAAAn0AAATCahlq/09TLzIAAAOIAAAAPgAAAFZWTFJ+Y21hcAAAA8gAAAINAAAF1HcMY7RnbHlmAAAF2AAADvMAABlsXuKk82hlYWQAABTMAAAALwAAADZ2zsSBaGhlYQAAFPwAAAAbAAAAJAfTBDNobXR4AAAVGAAAABIAAAEsv2gAAGxvY2EAABUsAAAAcQAAAJg8aUIQbWF4cAAAFaAAAAAfAAAAIAFhAHVuYW1lAAAVwAAAATUAAAJG0OP3eXBvc3QAABb4AAABtgAAAo9jrTZLeJx9lLtyE0EQRe9q18YP+YExBgSYNxiDDSy7K61lybZeCBcBAUVAkZgEqHI5ogj4AkICvoJvIOADCAiJ+AKKmJDTvTIyrjKa0mim+/ad7js9UiBpQnfVVKnTe/RE07s7b/ZUUaTiY/6D62D39csdje3v8EX+O6YgeqoZXdUzvdXXoBS8Ct4Hn0tLYTN8F34Mv4e/okwhuItaBT+p+4xEKXOsTFXVlKukUWwJ6zXVQYfM626d02mNuKernk5xakJMzxmXta2bmoWn7TwtbYLKGMbZYu4zlsnuaESuW/BXyaapIs9z5HlC43pAji3yaBBdxzuHb4uTY2La+NqaB2+oyJXs6znznNdmkdUBLuObqOP72HdlVNhHrcNfg9/4Vjh1317jpJSIO7BXQW245mc0dSRrofEyNzFJdAZHDHfDNTX2MvEpFWS6wsoqT6m8DH5Nj/XCs+oMYlqucqHJCtUN7W3ny6nzoLUBVx/sKjkMrXZjtzkr5p6s6gqYPX3QJ33RN/3QT/0OomBax7TASalXuQn/1n/VG+Psw+gu3vW/Vqt2lL44jPoXMU5GNdcnwdcbqGynlanN9MlYx1gzx0+Sp+G7ZJNzYxOcMdxH7GLPIsU2wmiyT4idHvRvnTHlyvfomhnuyzrReqeiJbCLzl90ao7252G0VZFtxXWsE3HW79HULnmVs+7J+B53j70cY7U+XtMF9IqpvuoaPsR/CYvxDi2X/QXk5FOngyLvu6732z2wOfUM87COWaTLMlS1F2H9uu1vy6Kv4S+yTHXDWbe9F5fgajjiOnVXBy9+Xie9xsbglhc8IvH4wF9t8U+ReUTd30qbrK2v+n8A5GJ1egAAAHicY2Bk6mWcwMDKwMBUxbSHgYGhB0IzPmAwZGQCijKwMjNgBQFprikMDgy6H82YXwC5UWASqBFEAADV/ApqAAB4nLXUZ1IbQRCG4VdIZGFyxpEcRJCQyDnzx2fAmcKBwpnz+Ry+w5wAf73dPgCu8lQ9++1Mzc7O7qoF1AN5mZMC1HWQ0xm5Fo3msvE8Ldl4gd/qF2miTuclLrnmNtXu7jRa4oIrblIu6/1tOc0uMsIENfX2KbPLJgdUOaXCNivssMUha6xyzDIbmnfEOevsccKZrq/T3QvaYwONum+zdtKqFdt4QDsddNJFNz300kc/AwwyxLDu94jHPOEpzzR3lDHGtYNJpjR7mhlm9UwlnReZZ0HHRfWWtNkG7tf27znfWnl386B6WtnWk28drq3qoTdqR+freydn/7DYf2hFO+R/Re859mWdPe1FKMuLsCsvw6a8CgfyOlTlTTiVt6Ei78K2XIYVuQo78j5syYdwKB/DmnwKq3IdjuUmLMvnsCFfgv0yv4Yj+RbO5XtYlx9hT36GE7kN+oAp56xuUp3DMu+szlLBWa2lemc1mBoclo0OyyaHZbPDssVZbaZWh2XR2ZdMbQ7LBw7Ldodlh8Oy02HZ5bDsdlj2OCx7HZZ9Dst+h+WAw3LQYTnksBx2WI44LB861TMpqLJJQTVOCqp2UlDdk0L2HkYdlmMOy3GH5YTDctJhOeWwnHbZO5lx2Nisw8bmHDZWcvbfmuad1VJacNk6iy7b55LD5pYdNrfisjnLDruu6rI1a46lP5OArvAAAAB4nO1Ze3Abx3m/b48ACOJ9wOEAkHgeHiRexBsiSB4kSqJJStaTpKyxLFXV0xHtWKocZSzBrh+RLVmeONJYSVpN6nQm8VgzzWSaqcbTSEnGydj01GJUN+nUcqZ/OGkiu62iVJrOGA0u/fbuAJGyGjv5u8Td7bd33367++33+O2SYRn8Y7/FfosRmDyzg2EgQASOtRJDVyxLEsQpkWpUF9HbQM+7hAAIXTEJqhybhURcjOh1Ylnk3YL20xuUH18sF/lwolStVJG3Uq3EE/RXDrOO/tVJ6OqC5Op++efyz2/XwC//KrYMgO0iJRECEBBLxGRCevrB5f8DZ+tNcJpCAavbZO/x2EJxq9Csyyegy8BbV1h5vT4QzHF+gCPsq3cTDX6lNlaJbXt5/Rc+0xatdcOyzTpr48xut9nJ9Y25LR6/VbDXG6ZBPuoy58xOm6PPE3WFxJVUVaDo6yvsV5ggwzgFQ6IqGMIOpUg4wkpRDTuUQnDMT6TPnElPgGVpKd/U6j+9+/vOd4vWH3mDdTHdWNH6EeGnxzPvvJM5LpFzx9PvvJM+Li+jw1LGdoA9wLiYAaaM/BG6HC66NAW6DiW6DoYCrbvoF2VdKvSLE+WiZJSfqMKtvVtmCsViYWbL221i78zkeDKVSo5PnqcEJJGa+Ubmm9/MfEN5sgeWsCuEtJRdoeSb7Rb4ZDpj9rAepAyMCXVadIj0rhZ58Uqj8eHhwx88+ih5UN5HJlqvNZu323zAXmOcTIJBMQMQyULZUZKgGC4EgHe4rMCGI1ZKBeg7iX7NggFQf8CWWn+e35zLbc4TtRxsNfwFP17kaaXsl7e/XfwqfPY2R15pwf61P+9vHcMHXuQZfPwGOQtfhUfuHFPq04+JDaNffNKIVrR+REY+eThydkIxlyVjYaDdvRjuDEl3t5GUFgmnnT11xyjYa4u/0nL8zhFoevg8u5vRocV6GMYIBsEIbDUIamxwuQuVMjVE8u/yjtouuQXS/Pyb3zaZvDZ3fnXebfPC6/D1Yfwg/xBG5+cliyXQG/dG8vmIN9YX6MwPLrBWxWaYmOgoGhxFB1xoNi823iMFSZ6CC8jSpYwlo/GZGJvK69RuoPeFev27knSxXm9dliRs21q4fXf8nZxhdTgfnAv1D3JavpH+xS/ScEsttTnfi37nZEQmR3tpK3q4o3wWoyUSbnxTwU9x7F2xDT6M78nf3EpNppKTaVqkJuO/jVcqykPuWp6cTMFL8r5YuYHfoKgwpOTL+CCFSlz+EWWFkXhFNhMuNZGql2O3x/0GeYP6FCzx7kVuS0KL3VGnzOM8e56JoAWXmFFmDNviamUBrYXaSgEFYdhXKtRsSiivWIZIvFQpuF16tk0424QRBCjDC/bchh0bBgc35GKR/fsjsRyld2zI2fdB4ZnWqlixOFksRtXifaPFwlksMCA3t0CRfCcSx2ZKc9u+fYvlyJfTxEJbTBZbN9USJmhTzgIvyx9tgUIap2NQ5rSHnUVrNDM8E1DmNohxJqKnpliK68phnm1XDHTQdPA6dEtYXHndF4uVolFyonXzrEr6HB5PxOslFvkvYK/c5YtGS7EYudS6SSxgo3Qpun/zZjhFeUsx3ou8Ee/0NCxTX+zfvGidtPiu5Y0icWrxHdaq8R3m77RFdCuDEchpNED5BtjJv1CLtIMdWdR1fIWtoTUOMWuZGWY7XcdqEVO7mqGpNVghoeblqpIB0DQEK9hASeS0qleMuFQFCeqQJdimUqTG7DLE0IupMdRV2xAjBhB3PMhte/XJqMXB9fpC8dH05JrzG6dXbczbnUaTyW5P10fSUm6tAPGN63fu2eZ29dUmR3YPp+HZ3BoBAodf+qs1Ym1yeE8tJS/4UvekBhNpX3IiOZggv8mz7Lrn7uuLBJJ9YS8KjnEuPjc825t1efgAP5oaTX85eF+ZbJVGXXxA39OXGt49PFmT/zG0tUwmHh5lIxF8MzJZu9o/iBJ96cRgCgumEx9eYUWml8kyw6gpBf1oKtIvVg/iGMFK2tpRNWJAbaBjo5bQkQXNS/xt14BWRx9rHvrMZw9t3VDQdFH/wRysfeHhoKaLjU+KVAETtZ212s7DO4eGdv5zcmJ6Iqk8WLEz+XVR0WpbXtuiTXxmd1edjM6tVifu9z26ns42OIQiVDn/BEkqJEnUopMXMmwGsR5mKNDm6QdDtaJNNj4KYZ1Lw3N8tayaRqXMZmDAM1b1dF8EIGDwVMa8A+Rg63K3QqGJqF/JtUTOP5zzGc1/dmrmUM3U7c2PBnLR1XWH0Zcf9eeiTw9u7s/5a3mf0aGNhzQVeza2LVrnEB3kI82q5T+ROobtls1wC31YmQO53onpTpxNL6IxUcm76NlVsVwUFt2xT6g3lfh/OwvcvdJsqH91rZS0EofTvQRDl9HnRpkVzGpm8g9F004cDY01sTvKPxI3n2s04Ij8JgzJJzqUGalbND/+cVC59Z+SJNW1e5EPkV8xfTjvaWY/zpnazhIn0iIM/QkRNf5oOwY18mi2l1Df8S6taVaJUGpDISLqDVaiNcEvWYDWi/seLxtNFs7l7f3Cjcb2uUGjyerke/tGNq+ahV73nnXb4nqj2cZNHd3+udlVa8NKpTI7to0UUoW+sNnsGRhLre6fdHsAzJbeUCqUBZLlY1GI+Mek8T4HiQX5EPklKYw+ybn5gBDgttuNlfohp9sd9AScA5wNJGJIZKdtnN1jH+esdvNAdsLGOTCGuzlUp9URjJbCfQFXyKDTd8UC4X4xGHZ5uvV10BmSQ7luTqcT+dqgQcd+zB9UtEFRCklpiONfJamNOlr/jd7Q9ulDbC9aoYP6EAIK6kasUE2g5VQTJFGHE/KR+kn5KsQXFvINeF8ONPLkRemidBLiEJevLhTQmgttWQcRxySZLUp8QBM1oLFaQVmLSh3K8UQe18YKuFAB3NvV0fVxkZwRhQtf0uXMah9oaxd+wNd5JYYqUkTiQUwY7u3p6Zvzb+6Plgx6t5czs1zM3mez2sXUsaFkcC7j8QvJ3cl7/QcGhT4hFegGQ8zLmzjaJFUFwcWBieVEa5+rx7QyGx8gq41mXe+mgbj/gN9psYzGxXEfx4oxLsonduXy0VSvYAsdyD47nA2CMYRSnxnOhQJGky64OyOgVKfVtj7rL7uUNmFn9IFMfr3T/v86uZtO1Hj3PPv8x2IwQyMWxZk6vJXohXdVqxuQxggoPTKfnofX0/Np8DabrYVmcw3SZDu+xUi8vRlEAq90ASPMdizxmn+12cH9pEVajJ7BrbEzSB3EEBsERLfV/2DfHT+08RD8g1bOX2Vp+TW10DB6hvy4vc8E9I72j820vojZTLvBW0d/qLfXPoL4QOlP60jrFn7cpXT0JbW//3q3C4uD8P132fGDmw5pbQ+QTeoehfam48Nl9kCLI9dbG7GXsxcxhmp853GPovpvGwGi26ubfaidyr53NXtqBfzdCqTeGzwFG55OXb6cehoutRbgkkrjCKmcp9gjjJtJM8uY5Qruo7EYs4xbMU+0SWqFVYkItGrQa/aKyV+xQWSjbxPxQTCCW4m6g+AOAiitMHQrUVmoxqH5wOzGh3rMyfi9k6/d98DK0eWExEIPP79iw8Sq+43GWHzTukvrZpJid/fW8akt10N6/frRsalSPgGPyb8uzg0kbQ7npbGhfvl41OTxVWqbjFKpwLu53wXZz5FS/pXte+7fsKwc493S0Nemt0yt2FWpk3TyhQ0z967PpnTJzOzkzMYXU5m3RifHG5GoQedzw1H5y/beWLxUG36bBNzy8frpFSsHMjqJHegfkYZ/16Ot/xx7FK20nxlBzSiHIUo24sWPb4bFzk4AwpE4vqoMA65fseBGRj05aLZ6g7NBr9XciAxF8IJbatl0UJTvBZNsxg2Brw5HJNwtsH7O5bFynNXj4pBJntIaXcCHwxPy4NV6OeaFC75ooxH1yVPeWCe2H8MxRxBRMNDJo7gGtKgDXS4ll9KIhH5HIV0QDHGcFajrVxXcRQXOw8bTQLp0Rn9tsLqr22b2coILAvzy1fsR0bEuPiOcxQTzb06judt+rtJfcICvWyDQTV7q7jHZrJz9J/D4acSvNnO/yWja6Qt4ep2cVX6/b8a8R6/zllM5wYQSyBftdqfVfc7Ksr3yL/WuhKfEnUV0YejmfkKn07MIK4VwJVYw48waxA33MzuZvf8HXgo73MpBoo5CpiBCa9UzeATfBlE9glOBRMwlFMsJvaFYriYBNVJEsMcXqXXH9KKBL1bjIl/8fWAKHmu9+evriHSMrW5A3BOCv+9Jz0ynjcnx/sPG9MxMumd5tOALQOstOHYUoFEvrUH09VgdLj1G+VEdQ8knvr/snid+L7z6bestvRHZr1922LEzOAo2Rbjxkf57UsSYnsZ+EB843cnA+LLHvzdVfuKjSmxH/dixCAVhAMca8HjHPtayazGeCai7Ii/yYhmjbLloQLJIz2GxSjY1mxfp0UizKTWbZBOlm3VKS01NxjX2mnJmqJ0Y2qlJhahK7XecGEZonR7sVuDWc4cPrly1auXBw2BvU88d2burNjJS27X3OhLDw0iw1+gH+cZSZmkJDyVG2mdo7bFIf9Bo7jjPVHg+7RDh23c5qfzU45anZpa2pMLuxGUUy2EKwCQoIEDDLJJgD8pXT9blI3CifjLfkAPwfiO/sIDo7upJisxOUki2sKDJmUP8YcHIzoAjjPsjlxsDVaXs0LWzBetpvbY5HyETkbz8nbnalSu1uWkU9TOIyj+jJ2cQ7ZsbvnJleA7OdM6wdeSMcqZFqkKV7ZJvKLCS7KXbLiSYO/mAnh/hPiOtbseeUssOz+vt8zEBeeTTf5s+DmPkJSQyz8JYR1aGuOgqO1EHF5Vk65Q657kPsXO47incNzHOCG6QcBeKmYseMmCkxvzkRCwVIBj0Eobb2CsBFGUJSnig/4BQaZroxFcIiRLyl7DsQ6JTKHn+Q2LPCn73pj/dFZUykvhg0hM2dPM+KQNfH1jnx1eOjHdwlnM4gkgHQ3p3765lmMOjKOCcPP8BCgQ9OQfVD4n8eYRNyB9UBJl77dm+6FQvCpoKKXLcrK6Q7t+KcurB2W39+WGc4f8CdkccOAB4nGNgZGBgAOIL59kPxPPbfGXgZn4BFIjifLyvAUEzMDC/BIkzcDAwgXgAYKgL6QB4nGNgZGBgfsHAACH//2d+ycDIgAq8AXBtBQ4AeJxjYGBgYH4x9DE9AAD62iz8AAB4nGNgAIIZDBcYnjE6MEYxLmF8xaTBFMWUxzSBaRHTG2Y25gLmA8zXmF+x1LF8Y7VjjWBdxKbAdoztATsb+wQOKY4wjhKOPo41HAc4nnCWcJ7jsuC6x83A7ca9hvsC9y8ePh4FHhMeJ55tpEMAZDotzAAAAHicY2BkYGDwZshk4GEAASYg5gJCBob/YD4DABuIAdcAeJx1jz9OwzAYxV9oWkSLEBISYsMTC1L6Z2Do2KHZO3RgcxsnbZXEkeNW6sYxOAHHYOQInIJD8BK+oUKqLTk///zeJwXALb4QoFkBrtuzWRe45O2PO6Q74ZD8KNzFAM/CPfoX4T7tTHjAZsEJQXhF84A34Qvc4F24Q/8hHJI/hbu4x7dwj/5HuI9lEAoP8BS86ix222Sm840uFibb59qdqlNeGldvbanG0ehUx6Y0TnuTqNVR1Yds4n2qUmcLNbelN3luVeXszqx9tPG+mg6HqfhobQtoZIjhsEXCP9fIseFZYAHDlz3vmq/nUuf8km2Hmt6ihMIYEUZn0zHTZdvQ8PwmbKxw5FnjwM6E1iPlPWXGsqEwbyc36Zzb0lTt245mTR9xdtOqMMWQO/2Xj5jipF9al2jJAAAAeJxtkulu2zAQhP3FkqM4SeO6bXrf96G26X2n95W+BEPRMhGJFEjKR56+RFwECND9szOD5exgwc5SZ1H9zv9rhyW6JKT0WCZjhT6rrLHOMTYYcJwhJzjJKTY5zRnOco7zXOAil7jMFa5yjevc4Ca3uM0d7nKP+zwg5yGPeMwWT3jKM57zgpe84jVveMs73vOBbT7yic984Svf+M4PfvKL3+zwp7MqytKpUgRtTU84Z6e+K7zsSWGkqlI5Fi4M5FjJvV07yw+AKjYPBW0KFZSrtRFBDQ/l1vybXJO2si5vdCSuF0lbm+VF831pTXBCBlUk0jbzVDrrfVe2ISlEEEmhvMzUrBFxR7Gi5ir3lfDjbkS9ka7i2nSknQ9J6XSTls62zfqRPEkcD0mlRqFXaRPTZIuWby1XVhTalFktZrrW+yqplWmz+OyApRG0PjHWqFVjQy6qyk5VkTbRT3UbbdJGT2xImqr1AxedbL7bhmBNbkejjaOCSZ0uxyHxYqL6vo5WeWGnJlvAtklCvM0wOKWOHjNrzSItghKHIqCxGKZ4JBVj9thlFr9AQU1Lw5wR+0w6nb+gD68QAAA=") format("woff"), url("data:application/x-font-ttf;charset=utf-8;base64,AAEAAAALAIAAAwAwR1NVQmoZav8AAAE4AAAEwk9TLzJWTFJ+AAAF/AAAAFZjbWFwdwxjtAAAB4AAAAXUZ2x5Zl7ipPMAAA3sAAAZbGhlYWR2zsSBAAAA4AAAADZoaGVhB9MEMwAAALwAAAAkaG10eL9oAAAAAAZUAAABLGxvY2E8aUIQAAANVAAAAJhtYXhwAWEAdQAAARgAAAAgbmFtZdDj93kAACdYAAACRnBvc3RjrTZLAAApoAAAAo8AAQAAA+gAAAAAA+gAAP//A+kAAQAAAAAAAAAAAAAAAAAAAEsAAQAAAAEAANDPqjhfDzz1AAsD6AAAAVoJ476AAAABWgnjvoAAAAAAA+kD6AAAAAgAAgAAAAAAAAABAAAASwBpAAwAAAAAAAIAAAAKAAoAAAD/AAAAAAAAAAEAAAAKADAAPgACREZMVAAObGF0bgAaAAQAAAAAAAAAAQAAAAQAAAAAAAAAAQAAAAFsaWdhAAgAAAABAAAAAQAEAAQAAAABAAgAAQRWAA8AJABaAHYAzAECAWgBiAG8AigDPgN6A5QD2APuBDYAAwAIACAALgABAAsAMwAzADQANQAzADIANgA3ADgAOQACAAYANAA0ADgAOgA7AAMAAwA7ADwAAgAGABIAGAAFADQAOABFAEYAFwAEADQANwBGAAMACAAqAEoAKQAQADIAQwA3ADgAQgBAAEUANgA2ADgAOQBCADgASABIACoADwAyAEMANwA4AEIAQABFADYANgA4ADkAQgA4ADkAKwAFADcAMwA+ADYAAwAIABwALgATAAkARwA1AEIAOwA9ADIAOwA+ABIACABBAEYAMgA5AEMANQBDABQAAwBHADUABAAKADAASABcADAAEgA0ADUANQBCADcAOQBDADUANgA1ADQARAA3ADkAMgA2ADUADAALADQANQA1AEIAPAA9ADgAOwA1AEMALQAJADQANQA1AEIAOABGADUAOQAvAAQANwA8AD8AAQAEABkADQA5AEMANQA2ADUANABEADcAOQAyADYANQADAAgAIAAqACQACwA4ADYAQgAyAD0APQA4ADoANQBDAAwABAA1AEEANgAjAAQAOAA5ADUABQAMACQAOgBQAGIADAALAEQAMgA9AD0AQgA0ADcAMwA+ADYALQAKAEQAMgA9AD0AQgBDADgAOgA5ABIACgBEADIAPQA9AEIAPQA1AEgANgAuAAgARAAyAD0APQBCAEUARgAsAAQAMgBKADUADAAaAEgAbgCQAKoAwADQAN4A7AD4AQQBDgAHABYAPgA1ADwAPwBAADgAQQBCADcAOQBDADUANgA1ADQARAA3ADkAMgA2ADUACAASAD4ANQA8AD8AQAA4AEEAQgBFADkAPAA+ADUAPAA/ADUAQwAGABAAPgA1ADwAPwBAADgAQQBCADwAPgA1ADwAPwA1AEMACQAMADgAPQA4ADQAQgBGADcAPAA/ADUANAAMAAoAOAA5ADYANAAyADwANgA1AEMACwAHADgAPQBFAEQAOQA7AAoABgA4AD0ARQBEADkABAAGADIAOQA8ADUAPQAFAAUAPgAyADQANgAOAAUANAA4ADsAOwANAAQAOABGAEcADwADAEUANgAEAAoAGgAoADIAHgAHADgAMgBDADcAOQAzAB0ABgA3ADkAPwA1AEMAGgAEADIAOwA2ABsABAA1AEgANgACAAYAEAAQAAQAMgA2ADIAEQAEADUAOwA8AAQACgAcAC4AOgAfAAgAMgBBADcARAA3AEkANQAhAAgANwA5ADcARAA3AEkANQAiAAUANwA5AEUAOwAgAAQANQA5AEUAAQAEADEACAA5AD0ANwA5AD8ANQBDAAUADAAeACoANgBAABIACAA0ADUASgA3ADgARQA7ACUABQAyADsANgA1ACcABQA3AEoAOAA2ACgABAA9AEUAOwAmAAMANwA5AAIABgAUABUABgA3AD0ANgA1ADQAFgAFADcANAA7ADYAAQAPADIAMwA0ADUANgA3ADkAOwA8AD0AQwBEAEUARgBIAAAAAQKNAZAABQAAAnoCvAAAAIwCegK8AAAB4AAxAQIAAAIABQMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAUGZFZABAAC3xNgPoAAAAWgPoAAAAAAABAAAAAAAAAAAAAAPoAAAD6AAAA+gAAAPoAAAD6AAAA+gAAAPoAAAD6AAAA+gAAAPoAAAD6AAAA+gAAAPoAAAD6AAAA+gAAAPoAAAD6AAAA+gAAAPoAAAD6AAAA+gAAAPoAAAD6AAAA+gAAAPoAAAD6AAAA+gAAAPoAAAD6AAAA+gAAAPoAAAD6AAAA+gAAAPoAAAD6AAAA+gAAAPoAAAD6AAAA+gAAAPoAAAD6AAAA+gAAAPoAAAD6AAAA+gAAAPoAAAD6AAAA+gAAAPoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABQAAAAMAAAAsAAAABAAAAhAAAQAAAAABCgADAAEAAAAsAAMACgAAAhAABADeAAAADAAIAAIABAAtAGkAcAB68Tb//wAAAC0AYQBrAHLxAf//AAAAAAAAAAAAAAABAAwADAAcACYANgAAAEIAMgBAADwAQwA1AEgAMwA+ADcAPwA9AEQAOQA4AEYANAA7ADYARQBKADoAQQBHAEkAAQACAAMABAAFAAYABwAIAAkACgALAAwADQAOAA8AEAARABIAEwAUABUAFgAXABgAGQAaABsAHAAeAB8AIAAhACIADAAjACQAJQAmACcAKAASACkAKgArACwALQASAAwALgAvAAwAMAAtADEAAAEGAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABCAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMkA8QzVIMz43AD89RDk4RgA0OzZFSjpBR0kAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAwAAAAAA8QAAAAAAAAATwAAAC0AAAAtAAAAQgAAAGEAAABhAAAAMgAAAGIAAABiAAAAQAAAAGMAAABjAAAAPAAAAGQAAABkAAAAQwAAAGUAAABlAAAANQAAAGYAAABmAAAASAAAAGcAAABnAAAAMwAAAGgAAABoAAAAPgAAAGkAAABpAAAANwAAAGsAAABrAAAAPwAAAGwAAABsAAAAPQAAAG0AAABtAAAARAAAAG4AAABuAAAAOQAAAG8AAABvAAAAOAAAAHAAAABwAAAARgAAAHIAAAByAAAANAAAAHMAAABzAAAAOwAAAHQAAAB0AAAANgAAAHUAAAB1AAAARQAAAHYAAAB2AAAASgAAAHcAAAB3AAAAOgAAAHgAAAB4AAAAQQAAAHkAAAB5AAAARwAAAHoAAAB6AAAASQAA8QEAAPEBAAAAAQAA8QIAAPECAAAAAgAA8QMAAPEDAAAAAwAA8QQAAPEEAAAABAAA8QUAAPEFAAAABQAA8QYAAPEGAAAABgAA8QcAAPEHAAAABwAA8QgAAPEIAAAACAAA8QkAAPEJAAAACQAA8QoAAPEKAAAACgAA8QsAAPELAAAACwAA8QwAAPEMAAAADAAA8Q0AAPENAAAADQAA8Q4AAPEOAAAADgAA8Q8AAPEPAAAADwAA8RAAAPEQAAAAEAAA8REAAPERAAAAEQAA8RIAAPESAAAAEgAA8RMAAPETAAAAEwAA8RQAAPEUAAAAFAAA8RUAAPEVAAAAFQAA8RYAAPEWAAAAFgAA8RcAAPEXAAAAFwAA8RgAAPEYAAAAGAAA8RkAAPEZAAAAGQAA8RoAAPEaAAAAGgAA8RsAAPEbAAAAGwAA8RwAAPEcAAAAHAAA8R0AAPEdAAAAHgAA8R4AAPEeAAAAHwAA8R8AAPEfAAAAIAAA8SAAAPEgAAAAIQAA8SEAAPEhAAAAIgAA8SIAAPEiAAAADAAA8SMAAPEjAAAAIwAA8SQAAPEkAAAAJAAA8SUAAPElAAAAJQAA8SYAAPEmAAAAJgAA8ScAAPEnAAAAJwAA8SgAAPEoAAAAKAAA8SkAAPEpAAAAEgAA8SoAAPEqAAAAKQAA8SsAAPErAAAAKgAA8SwAAPEsAAAAKwAA8S0AAPEtAAAALAAA8S4AAPEuAAAALQAA8S8AAPEvAAAAEgAA8TAAAPEwAAAADAAA8TEAAPExAAAALgAA8TIAAPEyAAAALwAA8TMAAPEzAAAADAAA8TQAAPE0AAAAMAAA8TUAAPE1AAAALQAA8TYAAPE2AAAAMQAAAAAAmADQAOYBQAFaAaQB6gIoAloCbgKQAqIC7AMGA3ADwAPWA+oEfgT2BT4FWAWiBiAGxgbgBwYHkAgaCFYIdAiOCKwIwAjkCXQJzgo4Ct4LAAtGC6wL0Av6DA4MIAw0DEIMtgy2DLYMtgy2DLYMtgy2DLYMtgy2DLYMtgy2DLYMtgy2DLYMtgy2DLYMtgy2DLYMtgy2AAMAAAAAA64DrgAXADEAXwAAAR4CFxIDDgIHBCUuAicCEz4CNyQFIgYPAQYVFBceARcEJT4BNxIDLgEnJiMiBgUjNSMVFhcWFxYXFhcWBgcGBwYHBhUzNTMVISc0NzY3PgE3Njc2JicmJyYnNSEDEShFKgEEBAEqRSj+4/7jKEUqAQQEASpFKAEd/uclOAEBAwQCNCMBHgEeIzQCCwsCNCNUaUD7AZY/+gETCyAeDhYLEAoYDyAmDhf6P/6JAQQHFQ5BDhUGBh4fMBIdAQF3A6kBKkUo/uP+4yhFKgEEBAEqRSgBHQEdKEUqAQRCNiVcoE+FaiM0AgsLAjQjAR4BHiM0AgMD+j8DDxIMFhYMExIcQhYNGB0OFxA/fQsvFSQUDDAMEw8RHBgkFCAjQwAAAAABAAAAAAOYA5gAHwAAExcHJzcXByERByc3FwcnESEnNxcHJzchETcXByc3FxHISCyTkyxIAQ1ILJOTLEgBDUgsk5MsSP7zSCyTkyxIAdVILJOTLEgBDUgsk5MsSP7zSCyTkyxI/vNILJOTLEgBDQAAAQAAAAACxgMUAAgAAAEHJzcXBycRIwHVhi3S0i2GPgKchizS0iyG/jgAAAADAAAAAANrA2sAFAApADUAAAEiBwYHBhQXFhcWMjc2NzY0JyYnJgcyFxYXFhQHBgcGJicmJyY2NzY3NhM3FwcXBycHJzcnNwH0ZldVMjMzMlVXzFdVMjMzMlVXZlVJRiorKypGSapJRiorASoqRklVpS2mpi2lpS2mpi0DazMyVVfMV1UyMzMyVVfMV1UyMz4rKkZJqklGKisBKipGSapJRior/vOmLaWlLaamLaWlLQAAAAADAAAAAAMYAxgAAwAHAAsAABMzESMTMxEjNzMVI9B9fep0dOl1dQJp/mcCSP24+voAAAAAAwAAAAAD6QPoABMAJwAtAAApASIuATURND4BMyEyHgEVERQOAQMhIg4BFREUHgEzITI+ATURNC4BBwEnNxcBAzT9gDFTMDBTMQKAMVMwMFMv/X0dMh0dMh0Cgx0yHR0yKP5ezDOZAW8wUzECgDFTMDBTMf2AMVMwA6IdMR39fB0xHR0xHQKEHTEd8f5ezDKZAXAAAAMAAAAAA+kD6AATACcAKwAAKQEiLgE1ETQ+ATMhMh4BFREUDgEDISIOARURFB4BMyEyPgE1ETQuAQMhNSEDNP2AMVMwMFMxAoAxUzAwUy/9fR0yHR0yHQKDHTIdHTJB/cQCPDBTMQKAMVMwMFMx/YAxUzADoh0xHf18HTEdHTEdAoQdMR3+LkgAAAAAAgAAAAAD6QPoABMAJwAAATIeARURFA4BIyEiLgE1ETQ+ATMFISIOARURFB4BMyEyPgE1ETQuAQM0MVMwMFMx/YAxUzAwUzECgv19HTIdHTIdAoMdMh0dMgPoMFMx/YAxUzAwUzECgDFTMEYdMR39fB0xHR0xHQKEHTEdAAMAAAAAA3gDZAAFAAgAGAAACQEHFwkBAzcfAQYHBgcGFRQWMjY1NCcmJwLr/l86Y/79AT7IyMewCwsZDxYxRTEWDxkBwgGhO2P+/f7DAT3IyD4NDR4bJhkiMTEiGSUcHgAAAAACAAAAAAG2Aw4AAwAHAAAlIxEzBxEzEQG2+vq8fdsCMj7+SgG2AAAABAAAAAADLQMOAAMABwALAA8AACUjETMTIxEzEyMRMwEjETMBtj8/uz4+vD8//c0+PtsCMv3OAjL9zgIy/c4CMgAAAAABAAAAAAKTAwUABQAACQEnNyc3ApL+8Czk5CwB9P7wLOTkLAADAAAAAANNA2sAEwAjADAAACUjIi4BNRE0PgE7ATIeARURFA4BAyMiBhURFBY7ATI2NRE0JgEjETQ+ATMhFSEiBhUCrfQrSSsqSSz0K0krK0km/CY2Nib8JjY2/gRAKkkrAZX+ZyU1fStJKwEzK0krK0kr/s0rSSsCMjYm/sQmNjYmATwmNv4MAhIrSCs/NSUAAAAAAQAAAAACxgLGAAsAAAE3FwcXBycHJzcnNwH0pS2mpi2lpS2mpi0CIKYtpaUtpqYtpaUtAAUAAAAAA6oDqgAiACsANAA9AEIAAAE2NTQuASIOARQeATMyNxcHJiMiDgEUHgEyPgE1NCc3ATM1ASImNDYyFhQGAyImNDYyFhQGEyImNDYyFhQGCQEXATUBjRAwUF9QLy9QMCUiaGgiJTBQLy9QX1AwEGcBMoT9RCUzM0kzMyQlMzNJMzPiCQ0NEg0NASn++lcBMwKzIiYvUDAwUF9QLw9nZxAwUF9QLy9QMCUiaP7NLAINM0kzM0kz/fMzSTMzSTMBSA0SDQ0SDQGg/vlXATIsAAAABwAAAAADZQNWAAgADAAVAB4AIgArAC8AABMiBhQWMjY0JgU1IRUDIgYUFjI2NCYHMhYUBiImNDYFITUhATIWFAYiJjQ2BSE1IcIaJSU0JCQCif3zlholJTQkJBoRGBgiGRkCDf6aAWb+BBokJDQlJQK9/fMCDQEPJDQlJTQkaFNTAYwlNCQkNCUVGSIZGSIZVFQBOCU0JCQ0JWhTAAAAAAEAAAAAAsYDFAAIAAABNxcHJzcXETMCE4Yt0tIthj4BTIYs0tIshgHIAAAAAQAAAAACkwMFAAUAAAEHFwcJAQKS5OQs/vABEALY5OQsARABEAAAAAUAAAAAA6cDOgAjADkATABVAF4AAAE2NzMeAhcHBgcGBwYHFwcnDgEnJicmJyYnNzY3Njc2Nyc3Fw4BDwEWFxYXFjc2NycGIyIuATU0NwE+AT8BLgIGBxc2MzIeARUUByUGFRQeATMyPwE2NTQuASMiBwEjX2kSXKmBJA0REhsaICY9LElLqlFURFExEBMJCwsQECw/PCw+MEwXASZRT2FlXBYUHDpJPGQ7LAGHMEsXAR50lZ9LIzpJO2U6K/7OGitHKy8nLBoqSCovJwLxMQMDTohYHCIeKhwhGT0sSSUSFBUwO1YbLhQYFR4VPSs9LJcfWDUCWT49FBUeBgocKztkO0k6/tEgWTUCSG49AyIiKztkPEk62igvKkgqGiwnLytIKhoAAAAABAAAAAADpwMjABsALgA7AEwAAAEeAhcHBgcGBwYHBicmJyYnJic3Njc2Nz4BNxcOAg8BFhcWFxY3PgE/AS4CBzIeARQOASIuATQ+ARc1NC4BIg4BHQEUHgEyPgE1Af1cqYEkDRESGxpLbWpvcllQMhATCQsLEBA/wGwBTI1uHwEmUU9hZVxRgSMBHnSVSDphOjphdGE5OWHWKkhUSCoqSFRIKgMjA06IWBwiHiocTiQjDg9AOlcbLhQYFR4VVWQEPwI9bEUCWT49FBUdGnVPAkhuPR85YXRhOjphdGE50wEqSCoqSCoCKkgqKkgqAAAAAgAAAAADLQMtABcAKwAAAQYHBgcGBwYdAQc3NicmJyYnJicmPQEhBRQXFhcWFxYXFTc1Njc2NzY3NjUDLQEpGEI3GAi8AQECAQcYNkIZKQJx/c0IGDZCGSkBPgEpGEI3GAgC6CcwHTswGgkMc4xVcjoLCBkxPR4wJEU/EQkaMT0dMCSDL1MoMB06MRoJEQAAAgAAAAAC+gMFAAUACQAAAQcXBwkBBREjEQL55OQs/vABEP5gPgLY5OQsARABEBb+DAH0AAwAAAAAAy0C7gADAAcACwAPABMAFwAbAB8AIwAnACsALwAANyM1MxcjNTMXIzUzFyM1MyUjNTMXIzUzFyM1MxcjNTMlIzUzFyM1MxcjNTMXIzUz+j4+vD8/uz4+vD8//c0+Prw/P7s+Prw/P/3NPj68Pz+7Pj68Pz/6fX19fX19fT99fX19fX19Pn19fX19fX0AAAAIAAAAAAOuA64AFwAxADUAOQA9AEEARQBJAAABHgIXEgMOAgcEJS4CJwITPgI3JAUiBg8BBhUUFx4BFwQlPgE3EgMuAScmIyIGEyM1MwUhNSElIzUzBSE1ISUjNTMFITUhAxEoRSoBBAQBKkUo/uP+4yhFKgEEBAEqRSgBHf7nJTgBAQMEAjQjAR4BHiM0AgsLAjQjVGlA+5x9fQF3/scBOf6JfX0Bd/7HATn+DH19AfT+SgG2A6kBKkUo/uP+4yhFKgEEBAEqRSgBHQEdKEUqAQRCNiVcoE+FaiM0AgsLAjQjAR4BHiM0AgMD/e0+Pj4/Pj4+Pz4+PgAAAAAEAAAAAAOnAucAHAA5AFQAaAAAARYXFhcHBgcGBwYHBicmJyYnNzY3Njc2NzY3NjcXIgcGBwYHFxYXFhcWFxY3Njc2NycmJyYnJicmJxcWFxYXFhUUBwYHBgcGJy4BJyYnJjc2NzY3NhciIwYHDgIWFxY3Njc2LgEnLgEB/ZBnfjUJCw0SFBkbhfB9XmwvCQsOExUbHDxTRFYBGxZlTlwmBgkMDxJKe152VkRMIQYJDA8SNlZCXAIyKzIcIQwMGClCK0UoSRYYAQEMDRsgKyAuAQIuFSUkASIdQj5GHBECJR8VIALmAjI9gRIWFR4XHhJeEAk2P3ITFhYfGB4TKRIPAT4CBycuVA8SEBgQRhIOEAwpLkgPEhEXETMWEgEdAQ4RHyQ0IRweFCAHBQYEJR4hKCMfIRQYCAY/AQUHKjkwCBIFBSMVOi8HBQMAAAIAAAAAAvoDBQAFAAkAAAkBJzcnNwEjETMCK/7wLOTkLAHePj4B9P7wLOTkLP32AfQAAAACAAAAAANyAxsACAARAAABByEVIRcHCQEDFzcnITUhNycCJz8Bif53P4r+2gEmzs4xfQHi/h59MQKQPrw+igEmASb+2s4yfT59MgAAAgAAAAADcQNrACoAVwAAAQYHFx4BBwYPAQ4BJy4BJyY2PwE1JicxBwYHDgEXFhceATc2PwE+AScmJxMiBg8BDgEXFhc3NjcnLgE3Nj8BPgEXHgEHFAYPARcWFzE3Njc+AScuAScmIwIYCQEHIRsKChxsHVMoJDQHBhYZEgwDEiUQHA8OECMrfDkqH2wtGB0XKmQqTR1rLxccFyseCAEHJRkVCxJsHVMoKzcBFxQSAQsDEiMOHBQKC0MuJikCRQkMBRtSKSYdax0TDQ09JiNGGhIDIyUSJBUnYzAxJCsbFw8gay6HOy4fAQkgHWsvhDswIB4JCwUfZC0XEmwdEw4PTy4dNRQSAyMlEiETJF0tMU8TEAAAAgAAAAADcQNrACoAVwAAAQYHFx4BBwYPAQ4BJy4BJyY2PwE1JicxBwYHDgEXFhceATc2PwE+AScmJxMiBg8BDgEXFhc3NjcnLgE3Nj8BPgEXHgEHFAYPARcWFzE3Njc+AScuAScmIwIYCQEHIRsKChxsHVMoJDQHBhYZEgwDEiUQHA8OECMrfDkqH2wtGB0XKmQqTR1rLxccFyseCAEHJRkVCxJsHVMoKzcBFxQSAQsDEiMOHBQKC0MuJikCRQkMBRtSKSYdax0TDQ09JiNGGhIDIyUSJBUnYzAxJCsbFw8gay6HOy4fAQkgHWsvhDswIB4JCwUfZC0XEmwdEw4PTy4dNRQSAyMlEiETJF0tMU8TEAAACAAAAAADiwOLAAMABwALAA8AEwAXABsAHwAAJSM1MycHJzcFByc3JSM1MwUjNTM3Byc3BQcnNwcjNTMCEz4+cMgsyAHCLMgsARn6+v3O+vpLLMgsAl7ILMj6Pj5e+h/ILMjILMgsMj4+Pl4syCwsyCzIqfoAAAAAAgAAAAAC/QL9AAYADQAAEx8BJzcnByUvARcHFzfsA9lGclFyAcsD2UZyUXIByNoDRnJRcp7aA0ZyUXIAAwAAAAADLQLPAAMABwALAAABITUhNSE1ITUhNSEDLf2PAnH9jwJx/Y8CcQEZP30+fT8AAAIAAAAAAyIDIwAGAA0AACUvARcHFzcTHwEnNycHAc8E2UZyUXKRA9lGclFy8tkERnJRcQG/2QNGcVJyAAIAAAAAA2sCUgADAAcAAAEhNSEFFSE1A2v9EgLu/VECcQGWvD8+PgACAAAAAAOqAw4ACAARAAABNxcHJzcXETMBIxEHJzcXBycBOowu29oujEEBtUGMLtvbL4wBUIMrzc0rgwG9/c4BvYMrzc0rgwAGAAAAAAOCA3cAFgAsADgAQABMAFUAAAEWFx4BFxYHBgcOAScmJy4BNzY3PgIXBgcOAQcGFxYXHgE3Njc2Jy4BJyYjFxYHDgEHBicmLwEJARY2NzY3Ni8BFh8BAS4BNzY3NjcXBgcGBwYXNyYB+l1WUW0KDComTUm4WF1DPUACAiUgbotBUEhEWwkJJSZSTr1OVSojCAhZRkpX7iAGBk89Qko0MScBev7vM2wpKg8RE71COSj+hiQLGBo2OlIJPjQyFRYS/x8DdgI0MadeZVtQODUlFRY+OZ5UV0pBYzY/AiwqjVBVTU8uKwUqLVZJVVGQKy3JPUlGfSIkBwUaFgF7/pcQGyUmNDo7zAIeFv6GP5JBQyktBT4DKSg8Pjv/CgADAAAAAANsA3sAHwAoADwAAAE0JyYnJiIHBgcGFSMiDgEVERQeATMhMj4BNRE0LgEjBzIWFAYiJjQ2ASEiJjURNDY7ARUhNTMyFhURFAYCcQwOGR9WHxkODH0iOSIiOSIB9CI5IiI5IvoRGRkiGRkBC/4MGiQkGj8Bdz4aJSUDHRIUGA4SEg4YFBIiOSL+SiI5IiI5IgG2IjkiERggGBggGP2gJRkBthokfX0kGv5KGSUAAAACAAAAAAN8A3sAIgA9AAABJzc2NzY3Njc2FzcmNzY3Nj8BAQcGJwcXFhcWBwYPAScHJwEGBwYfAQcmBwYHATc2NzYvATcXFjMWNzY3JwFRkgECBAUJHTovN2MIDwwZEhcUAR4VQEVoAQECAxQVLReW5CwB5RMJDAgQnDYoMhEBGggXAgEIApUICgsPDhIQ1AF+kgkLCw8MKAsJC2EaHhgbExIO/uIcVQxlBgUZNSswFwuW5CwCjxAQEw4WnA4DAxv+5gYUJxg0EpYEBAEHCBLUAAAAAAoAAAAAA64DrgAXACAAKABBAEYASwBUAFsAYQBmAAABHgIXEgMOAgcEJS4CJwITPgI3JAUhERY3PgE3NgUUFx4BHwE1AQcnNxcHJxUUDgEHIxcHJzcXBxY3Njc2NyUUFzM1JwYHMzU3KgEGDwEzNTMlFTMnLgEnJQYjBxUzNyYjFTMDEShFKgEEBAEqRSj+4/7jKEUqAQQEASpFKAEdAXr9x+/uIzQCCf0IAQI0IyABugosVVQsCSpGKHQJLFVVLApAJDIaHgH9yQF8ewEBfT80SzgBAXo/Ab16AQI0I/7iHDkqf784R38DqQEqRSj+4/7jKEUqAQQEASpFKAEdAR0oRSoBBPz9yQYJAjQj7s0RECM0AgF7AQ8JLFVVLAlwKEcrAgksVFUsCgEFBxMWKh5GOH6+SjV/+TYlXz98fCIjNAIDAQF8fQF+AAAAAgAAAAADTANMAAsAFwAAATMVIxUjNSM1MzUzBxUjFTMVMzUzNSM1AlL6+rz6+rx9+vo++voCUrz6+rz6P/o++vo++gACAAAAAAPoA+gAFAApAAABIgcGBwYQFxYXFiA3Njc2ECcmJyYHMhcWFxYUBwYHBiInJicmNDc2NzYB9Ih0cUNERENxdAEQdHFDRERDcXSId2ZjOjw8OmNm7mZjOjs7OmNmA+hEQ3F0/vB0cUNERENxdAEQdHFDRD48OmNm7mZjOjs7OmNm7mZjOjwAAAMAAAAAA+gD6AAUACkAPgAAASIHBgcGEBcWFxYgNzY3NhAnJicmBzIXFhcWFAcGBwYiJyYnJjQ3Njc2ARQHBgcGJicmJyY2NzY3NjIXFhcWAfSIdHFDRERDcXQBEHRxQ0REQ3F0iHdmYzo8PDpjZu5mYzo7OzpjZgGwKypGSapJRiorASoqRkmqSUYqKwPoRENxdP7wdHFDRERDcXQBEHRxQ0Q+PDpjZu5mYzo7OzpjZu5mYzo8/kpVSUYqKwEqKkZJqklGKisrKkZJAAIAAAAAA3IDGwAIABEAAAkBJzchNSEnNwcXIRUhBxc3JwNx/tqKP/53AYk/ijF9/h4B4n0xzs4B9P7aij68PoqKfT59Ms7OAAIAAAAAA2wDawANABYAAAERIREjERQWMyEyNjURBTcXByc3FxEzAxj9uFMxIgJIIjH+s2w60NA6bFQB9P7cAST+3CIxMSIBJBxsO9DQO2wBkwAAAAEAAAAAAwUCkwAFAAAJAjcXNwME/vD+8Czk5AJm/vABECzk5AAAAAABAAAAAAMFApMABQAAAQcnBycBAwQs5OQsARABgizk5CwBEAABAAAAAAMFAsIABQAACQEnNxcBAwT+krIshgFCApX+krIthwFCAAAAAQAAAAADLQIUAAMAABMhFSG8AnH9jwITPgAAAAMAAAAAA20DbAAUACsARQAAEyIPAQYUFxYBFxYyPwE2NCcmAScmEw4BFx4CNj8BJwcOAScuAScmNj8BJwEiBg8BFzc+ATc2FhcWBg8BFzc+ASYnLgEjpwICJAICmwE46gIFAiQCApv+yOoCEC4XHRZSYmMkPi0+I2kqGCEHCBUaPi0BoSlOHT4tPhEtGS9WEhERHz4tPh8gBhYbYzgDawIkAgUCnP7I6QICJAEGApwBN+oC/nguhzstPhEfJD4tPiMMGxAuHCRKGz4tAUogHT4tPhEWAwUyLChZHz4tPx9WXCgxOwAAAAAAABAAxgABAAAAAAABAAwAAAABAAAAAAACAAcADAABAAAAAAADAAwAEwABAAAAAAAEAAwAHwABAAAAAAAFAAsAKwABAAAAAAAGAAwANgABAAAAAAAKACsAQgABAAAAAAALABMAbQADAAEECQABABgAgAADAAEECQACAA4AmAADAAEECQADABgApgADAAEECQAEABgAvgADAAEECQAFABYA1gADAAEECQAGABgA7AADAAEECQAKAFYBBAADAAEECQALACYBWmFnR3JpZEJhbGhhbVJlZ3VsYXJhZ0dyaWRCYWxoYW1hZ0dyaWRCYWxoYW1WZXJzaW9uIDEuMGFnR3JpZEJhbGhhbUdlbmVyYXRlZCBieSBzdmcydHRmIGZyb20gRm9udGVsbG8gcHJvamVjdC5odHRwOi8vZm9udGVsbG8uY29tAGEAZwBHAHIAaQBkAEIAYQBsAGgAYQBtAFIAZQBnAHUAbABhAHIAYQBnAEcAcgBpAGQAQgBhAGwAaABhAG0AYQBnAEcAcgBpAGQAQgBhAGwAaABhAG0AVgBlAHIAcwBpAG8AbgAgADEALgAwAGEAZwBHAHIAaQBkAEIAYQBsAGgAYQBtAEcAZQBuAGUAcgBhAHQAZQBkACAAYgB5ACAAcwB2AGcAMgB0AHQAZgAgAGYAcgBvAG0AIABGAG8AbgB0AGUAbABsAG8AIABwAHIAbwBqAGUAYwB0AC4AaAB0AHQAcAA6AC8ALwBmAG8AbgB0AGUAbABsAG8ALgBjAG8AbQAAAAIAAAAAAAAACgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAASwECAQMBBAEFAQYBBwEIAQkBCgELAQwBDQEOAQ8BEAERARIBEwEUARUBFgEXARgBGQEaARsBHAEdAR4BHwEgASEBIgEjASQBJQEmAScBKAEpASoBKwEsAS0BLgEvATABMQEyATMBNAE1ATYBNwE4ATkBOgE7ATwBPQE+AT8BQAFBAUIBQwFEAUUBRgFHAUgBSQFKAUsBTAALYWdncmVnYXRpb24GYXJyb3dzA2FzYwZjYW5jZWwFY2hhcnQQY2hlY2tib3gtY2hlY2tlZBZjaGVja2JveC1pbmRldGVybWluYXRlEmNoZWNrYm94LXVuY2hlY2tlZAxjb2xvci1waWNrZXIGY29sdW1uB2NvbHVtbnMKY29udHJhY3RlZARjb3B5BWNyb3NzA2N1dARkYXRhBGRlc2MIZXhwYW5kZWQJZXllLXNsYXNoA2V5ZQZmaWx0ZXIFZmlyc3QEZ3JpcAVncm91cA1pbmRldGVybWluYXRlBGxhc3QEbGVmdAZsaW5rZWQIbGlua2VkLTEHbG9hZGluZwhtYXhpbWl6ZQRtZW51CG1pbmltaXplBW1pbnVzBG5vbmULbm90LWFsbG93ZWQFcGFzdGUDcGluBXBpdm90BHBsdXMQcmFkaW8tYnV0dG9uLW9mZg9yYWRpby1idXR0b24tb24FcmlnaHQEc2F2ZQpzbWFsbC1kb3duCHNtYWxsLXVwBHRpY2sSdHJlZS1pbmRldGVybWluYXRlCHVubGlua2VkAWEBZwFyAWUBdAFpAW8BbgF3AXMBYwFsAWgBawFiAXgBLQFkAW0BdQFwAXkBZgF6AXYAAAA=") format("truetype");
      font-weight: normal;
      font-style: normal;
    }

    .ag-theme-balham {
      -webkit-font-smoothing: antialiased;
      background-color: white;
      color: #000;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
      font-weight: 400;
      font-size: 12px;
      line-height: normal;
    }

    .ag-theme-balham .ag-menu,
    .ag-theme-balham .ag-theme-balham.ag-dnd-ghost,
    .ag-theme-balham .ag-cell.ag-cell-inline-editing,
    .ag-theme-balham .ag-popup-editor,
    .ag-theme-balham .ag-select-agg-func-popup,
    .ag-theme-balham .ag-overlay-loading-center {
      border: 1px solid #BDC3C7;
    }

    .ag-theme-balham .ag-tab-header .ag-tab {
      border: 1px solid transparent;
      border-bottom-width: 0;
      margin: 4px;
      margin-bottom: 0;
      padding: 4px 8px;
    }

    .ag-theme-balham .ag-tab-header .ag-tab.ag-tab-selected {
      background-color: white;
      border-bottom: 2px solid #0091EA;
      border-bottom: 2px solid white;
      border-color: #BDC3C7;
    }

    .ag-theme-balham label {
      margin-bottom: 0;
    }

    .ag-theme-balham * {
      box-sizing: border-box;
    }

    .ag-theme-balham *:focus,
    .ag-theme-balham * *:before,
    .ag-theme-balham * *:after {
      outline: none;
      box-sizing: border-box;
    }

    .ag-theme-balham .ag-tab {
      box-sizing: content-box;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-1 {
      padding-left: 20px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-1 {
      padding-right: 20px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-1 {
      padding-left: 28px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-1 {
      padding-right: 28px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-2 {
      padding-left: 40px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-2 {
      padding-right: 40px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-2 {
      padding-left: 56px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-2 {
      padding-right: 56px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-3 {
      padding-left: 60px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-3 {
      padding-right: 60px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-3 {
      padding-left: 84px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-3 {
      padding-right: 84px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-4 {
      padding-left: 80px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-4 {
      padding-right: 80px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-4 {
      padding-left: 112px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-4 {
      padding-right: 112px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-5 {
      padding-left: 100px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-5 {
      padding-right: 100px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-5 {
      padding-left: 140px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-5 {
      padding-right: 140px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-6 {
      padding-left: 120px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-6 {
      padding-right: 120px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-6 {
      padding-left: 168px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-6 {
      padding-right: 168px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-7 {
      padding-left: 140px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-7 {
      padding-right: 140px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-7 {
      padding-left: 196px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-7 {
      padding-right: 196px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-8 {
      padding-left: 160px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-8 {
      padding-right: 160px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-8 {
      padding-left: 224px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-8 {
      padding-right: 224px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-9 {
      padding-left: 180px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-9 {
      padding-right: 180px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-9 {
      padding-left: 252px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-9 {
      padding-right: 252px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-10 {
      padding-left: 200px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-10 {
      padding-right: 200px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-10 {
      padding-left: 280px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-10 {
      padding-right: 280px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-11 {
      padding-left: 220px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-11 {
      padding-right: 220px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-11 {
      padding-left: 308px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-11 {
      padding-right: 308px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-12 {
      padding-left: 240px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-12 {
      padding-right: 240px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-12 {
      padding-left: 336px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-12 {
      padding-right: 336px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-13 {
      padding-left: 260px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-13 {
      padding-right: 260px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-13 {
      padding-left: 364px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-13 {
      padding-right: 364px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-14 {
      padding-left: 280px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-14 {
      padding-right: 280px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-14 {
      padding-left: 392px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-14 {
      padding-right: 392px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-15 {
      padding-left: 300px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-15 {
      padding-right: 300px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-15 {
      padding-left: 420px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-15 {
      padding-right: 420px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-16 {
      padding-left: 320px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-16 {
      padding-right: 320px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-16 {
      padding-left: 448px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-16 {
      padding-right: 448px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-17 {
      padding-left: 340px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-17 {
      padding-right: 340px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-17 {
      padding-left: 476px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-17 {
      padding-right: 476px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-18 {
      padding-left: 360px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-18 {
      padding-right: 360px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-18 {
      padding-left: 504px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-18 {
      padding-right: 504px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-19 {
      padding-left: 380px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-19 {
      padding-right: 380px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-19 {
      padding-left: 532px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-19 {
      padding-right: 532px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-20 {
      padding-left: 400px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-20 {
      padding-right: 400px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-20 {
      padding-left: 560px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-20 {
      padding-right: 560px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-21 {
      padding-left: 420px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-21 {
      padding-right: 420px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-21 {
      padding-left: 588px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-21 {
      padding-right: 588px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-22 {
      padding-left: 440px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-22 {
      padding-right: 440px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-22 {
      padding-left: 616px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-22 {
      padding-right: 616px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-23 {
      padding-left: 460px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-23 {
      padding-right: 460px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-23 {
      padding-left: 644px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-23 {
      padding-right: 644px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-24 {
      padding-left: 480px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-24 {
      padding-right: 480px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-24 {
      padding-left: 672px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-24 {
      padding-right: 672px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-25 {
      padding-left: 500px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-25 {
      padding-right: 500px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-25 {
      padding-left: 700px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-25 {
      padding-right: 700px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-26 {
      padding-left: 520px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-26 {
      padding-right: 520px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-26 {
      padding-left: 728px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-26 {
      padding-right: 728px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-27 {
      padding-left: 540px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-27 {
      padding-right: 540px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-27 {
      padding-left: 756px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-27 {
      padding-right: 756px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-28 {
      padding-left: 560px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-28 {
      padding-right: 560px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-28 {
      padding-left: 784px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-28 {
      padding-right: 784px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-29 {
      padding-left: 580px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-29 {
      padding-right: 580px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-29 {
      padding-left: 812px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-29 {
      padding-right: 812px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-30 {
      padding-left: 600px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-30 {
      padding-right: 600px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-30 {
      padding-left: 840px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-30 {
      padding-right: 840px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-31 {
      padding-left: 620px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-31 {
      padding-right: 620px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-31 {
      padding-left: 868px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-31 {
      padding-right: 868px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-32 {
      padding-left: 640px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-32 {
      padding-right: 640px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-32 {
      padding-left: 896px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-32 {
      padding-right: 896px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-33 {
      padding-left: 660px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-33 {
      padding-right: 660px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-33 {
      padding-left: 924px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-33 {
      padding-right: 924px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-34 {
      padding-left: 680px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-34 {
      padding-right: 680px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-34 {
      padding-left: 952px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-34 {
      padding-right: 952px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-35 {
      padding-left: 700px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-35 {
      padding-right: 700px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-35 {
      padding-left: 980px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-35 {
      padding-right: 980px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-36 {
      padding-left: 720px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-36 {
      padding-right: 720px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-36 {
      padding-left: 1008px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-36 {
      padding-right: 1008px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-37 {
      padding-left: 740px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-37 {
      padding-right: 740px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-37 {
      padding-left: 1036px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-37 {
      padding-right: 1036px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-38 {
      padding-left: 760px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-38 {
      padding-right: 760px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-38 {
      padding-left: 1064px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-38 {
      padding-right: 1064px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-39 {
      padding-left: 780px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-39 {
      padding-right: 780px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-39 {
      padding-left: 1092px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-39 {
      padding-right: 1092px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-40 {
      padding-left: 800px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-40 {
      padding-right: 800px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-40 {
      padding-left: 1120px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-40 {
      padding-right: 1120px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-41 {
      padding-left: 820px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-41 {
      padding-right: 820px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-41 {
      padding-left: 1148px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-41 {
      padding-right: 1148px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-42 {
      padding-left: 840px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-42 {
      padding-right: 840px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-42 {
      padding-left: 1176px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-42 {
      padding-right: 1176px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-43 {
      padding-left: 860px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-43 {
      padding-right: 860px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-43 {
      padding-left: 1204px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-43 {
      padding-right: 1204px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-44 {
      padding-left: 880px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-44 {
      padding-right: 880px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-44 {
      padding-left: 1232px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-44 {
      padding-right: 1232px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-45 {
      padding-left: 900px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-45 {
      padding-right: 900px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-45 {
      padding-left: 1260px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-45 {
      padding-right: 1260px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-46 {
      padding-left: 920px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-46 {
      padding-right: 920px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-46 {
      padding-left: 1288px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-46 {
      padding-right: 1288px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-47 {
      padding-left: 940px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-47 {
      padding-right: 940px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-47 {
      padding-left: 1316px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-47 {
      padding-right: 1316px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-48 {
      padding-left: 960px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-48 {
      padding-right: 960px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-48 {
      padding-left: 1344px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-48 {
      padding-right: 1344px;
    }

    .ag-theme-balham .ag-ltr .ag-toolpanel-indent-49 {
      padding-left: 980px;
    }

    .ag-theme-balham .ag-rtl .ag-toolpanel-indent-49 {
      padding-right: 980px;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-indent-49 {
      padding-left: 1372px;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-indent-49 {
      padding-right: 1372px;
    }

    .ag-theme-balham .ag-cell .ag-icon {
      display: inline-block;
      vertical-align: middle;
    }

    .ag-theme-balham .ag-checkbox,
    .ag-theme-balham .ag-radio-button,
    .ag-theme-balham .ag-toggle-button {
      display: flex;
      align-items: center;
      cursor: default;
    }

    .ag-theme-balham .ag-checkbox label,
    .ag-theme-balham .ag-radio-button label,
    .ag-theme-balham .ag-toggle-button label {
      cursor: default;
    }

    .ag-theme-balham .ag-checkbox label:empty,
    .ag-theme-balham .ag-radio-button label:empty,
    .ag-theme-balham .ag-toggle-button label:empty {
      margin: 0;
    }

    .ag-theme-balham .ag-checkbox:not(.ag-label-align-left) label,
    .ag-theme-balham .ag-radio-button:not(.ag-label-align-left) label,
    .ag-theme-balham .ag-toggle-button:not(.ag-label-align-left) label {
      margin-left: 4px;
    }

    .ag-theme-balham .ag-cell {
      -webkit-font-smoothing: subpixel-antialiased;
    }

    .ag-theme-balham .ag-ltr .ag-row-group-leaf-indent {
      margin-left: 28px;
    }

    .ag-theme-balham .ag-ltr .ag-cell {
      border-right: 1px solid transparent;
    }

    .ag-theme-balham .ag-ltr .ag-cell:not(.ag-cell-focus).ag-cell-first-right-pinned:not(.ag-cell-range-left),
    .ag-theme-balham .ag-ltr .ag-cell.ag-cell-range-selected:not(.ag-cell-range-single-cell).ag-cell-first-right-pinned:not(.ag-cell-range-left),
    .ag-theme-balham .ag-ltr .ag-root:not(.ag-has-focus) .ag-cell.ag-cell-first-right-pinned:not(.ag-cell-range-left) {
      border-left: 1px solid #BDC3C7;
    }

    .ag-theme-balham .ag-ltr .ag-cell:not(.ag-cell-focus).ag-cell-last-left-pinned:not(.ag-cell-range-right),
    .ag-theme-balham .ag-ltr .ag-cell.ag-cell-range-selected:not(.ag-cell-range-single-cell).ag-cell-last-left-pinned:not(.ag-cell-range-right),
    .ag-theme-balham .ag-ltr .ag-root:not(.ag-has-focus) .ag-cell.ag-cell-last-left-pinned:not(.ag-cell-range-right) {
      border-right: 1px solid #BDC3C7;
    }

    .ag-theme-balham .ag-value-change-delta {
      padding-right: 2px;
    }

    .ag-theme-balham .ag-value-change-delta-up {
      color: #43a047;
    }

    .ag-theme-balham .ag-value-change-delta-down {
      color: #e53935;
    }

    .ag-theme-balham .ag-value-change-value {
      background-color: transparent;
      border-radius: 1px;
      padding-left: 1px;
      padding-right: 1px;
      transition: background-color 1s;
    }

    .ag-theme-balham .ag-value-change-value-highlight {
      background-color: rgba(22, 160, 133, 0.5);
      transition: background-color 0.1s;
    }

    .ag-theme-balham .ag-input-wrapper input:not([type]),
    .ag-theme-balham .ag-input-wrapper input[type='text'],
    .ag-theme-balham .ag-input-wrapper input[type='number'],
    .ag-theme-balham .ag-input-wrapper input[type='tel'],
    .ag-theme-balham .ag-input-wrapper input[type='date'],
    .ag-theme-balham .ag-input-wrapper input[type='datetime-local'] {
      border-width: 1px;
      border-style: solid;
      border-color: #95A5A6;
    }

    .ag-theme-balham .ag-input-wrapper input:not([type]):disabled,
    .ag-theme-balham .ag-input-wrapper input[type='text']:disabled,
    .ag-theme-balham .ag-input-wrapper input[type='number']:disabled,
    .ag-theme-balham .ag-input-wrapper input[type='tel']:disabled,
    .ag-theme-balham .ag-input-wrapper input[type='date']:disabled,
    .ag-theme-balham .ag-input-wrapper input[type='datetime-local']:disabled {
      color: rgba(0, 0, 0, 0.38);
      background-color: #ebebeb;
      border-color: rgba(149, 165, 166, 0.3);
    }

    .ag-theme-balham .ag-input-wrapper input[type='date'] {
      flex: 1 1 auto;
    }

    .ag-theme-balham .ag-input-wrapper input[type='range'] {
      padding: 0;
    }

    .ag-theme-balham .ag-input-wrapper textarea {
      border-width: 1px;
      border-style: solid;
      border-color: #95A5A6;
    }

    .ag-theme-balham .ag-input-wrapper textarea:disabled {
      color: rgba(0, 0, 0, 0.38);
      background-color: #ebebeb;
      border-color: rgba(149, 165, 166, 0.3);
    }

    .ag-theme-balham .ag-header {
      background-color: #f5f7f7;
      color: rgba(0, 0, 0, 0.54);
      font-weight: 600;
      font-size: 12px;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
      border-bottom: 1px solid #BDC3C7;
    }

    .ag-theme-balham .ag-pinned-right-header {
      border-left: 1px solid #BDC3C7;
    }

    .ag-theme-balham .ag-pinned-left-header {
      border-right: 1px solid #BDC3C7;
    }

    .ag-theme-balham .ag-header-row {
      border: none;
      height: 32px;
    }

    .ag-theme-balham .ag-row {
      border-style: solid;
      border-color: #BDC3C7;
      height: 28px;
      border-width: 0;
    }

    .ag-theme-balham .ag-row:not(.ag-row-first) {
      border-width: 1px 0 0;
    }

    .ag-theme-balham .ag-row.ag-row-last {
      border-bottom-width: 1px;
    }

    .ag-theme-balham .ag-row-odd {
      background-color: #fcfdfe;
    }

    .ag-theme-balham .ag-row-even {
      background-color: white;
    }

    .ag-theme-balham .ag-horizontal-left-spacer {
      border-right: 1px solid #BDC3C7;
    }

    .ag-theme-balham .ag-horizontal-left-spacer.ag-scroller-corner {
      border-right: none;
    }

    .ag-theme-balham .ag-horizontal-right-spacer {
      border-left: 1px solid #BDC3C7;
    }

    .ag-theme-balham .ag-horizontal-right-spacer.ag-scroller-corner {
      border-left: none;
    }

    .ag-theme-balham .ag-row-hover {
      background-color: #ECF0F1;
    }

    .ag-theme-balham .ag-numeric-cell {
      text-align: right;
    }

    .ag-theme-balham .ag-header-cell-label .ag-header-icon {
      margin-left: 4px;
      opacity: 0.87;
    }

    .ag-theme-balham .ag-header-cell,
    .ag-theme-balham .ag-header-group-cell {
      border-style: solid;
      border-color: #BDC3C7;
      padding-left: 12px;
      padding-right: 12px;
      border-width: 0;
    }

    .ag-theme-balham .ag-header-cell.ag-header-cell-moving,
    .ag-theme-balham .ag-header-group-cell.ag-header-cell-moving {
      background-color: white;
    }

    .ag-theme-balham .ag-header-cell:not(.ag-header-group-cell-no-group),
    .ag-theme-balham .ag-header-group-cell:not(.ag-header-group-cell-no-group) {
      border-top-width: 1px;
    }

    .ag-theme-balham .ag-header-row:first-child .ag-header-cell,
    .ag-theme-balham .ag-header-row:first-child .ag-header-group-cell {
      border-top-width: 0;
    }

    .ag-theme-balham .ag-header-cell-resize {
      cursor: col-resize;
    }

    .ag-theme-balham .ag-header-select-all {
      margin-right: 12px;
    }

    .ag-theme-balham .ag-cell {
      line-height: 26px;
      padding-left: 12px;
      padding-right: 12px;
      border: 1px solid transparent;
      padding-left: 11px;
      padding-right: 11px;
    }

    .ag-theme-balham .ag-row-drag {
      cursor: move;
      cursor: -webkit-grab;
      cursor: grab;
      min-width: 28px;
    }

    .ag-theme-balham .ag-row-dragging,
    .ag-theme-balham .ag-row-dragging .ag-row-drag {
      cursor: move;
    }

    .ag-theme-balham .ag-column-drag {
      cursor: move;
      cursor: -webkit-grab;
      cursor: grab;
    }

    .ag-theme-balham .ag-row-dragging {
      opacity: 0.5;
    }

    .ag-theme-balham .ag-ltr .ag-has-focus .ag-cell-focus:not(.ag-cell-range-selected),
    .ag-theme-balham .ag-ltr .ag-has-focus .ag-cell-focus.ag-cell-range-single-cell,
    .ag-theme-balham .ag-ltr .ag-cell-focus.ag-cell-range-single-cell.ag-cell-range-handle,
    .ag-theme-balham .ag-rtl .ag-has-focus .ag-cell-focus:not(.ag-cell-range-selected),
    .ag-theme-balham .ag-rtl .ag-has-focus .ag-cell-focus.ag-cell-range-single-cell,
    .ag-theme-balham .ag-rtl .ag-cell-focus.ag-cell-range-single-cell.ag-cell-range-handle {
      border: 1px solid #0091EA;
      outline: initial;
    }

    .ag-theme-balham .ag-header-cell-resize {
      width: 8px;
    }

    .ag-theme-balham .ag-menu {
      background: white;
      border-radius: 2px;
      box-shadow: none;
      padding: 4px;
      padding: 0;
    }

    .ag-theme-balham .ag-menu .ag-menu-list {
      cursor: default;
      margin-bottom: 4px;
      margin-top: 4px;
      width: 100%;
    }

    .ag-theme-balham .ag-menu .ag-menu-option-active {
      background-color: #ECF0F1;
    }

    .ag-theme-balham .ag-menu .ag-menu-option-disabled {
      opacity: 0.5;
    }

    .ag-theme-balham .ag-menu .ag-menu-option-text {
      margin-left: 4px;
    }

    .ag-theme-balham .ag-menu .ag-menu-option-icon {
      padding-left: 4px;
      padding-right: 4px;
      min-width: 24px;
    }

    .ag-theme-balham .ag-menu .ag-menu-option-shortcut {
      padding-left: 8px;
    }

    .ag-theme-balham .ag-menu .ag-menu-separator {
      height: 8px;
    }

    .ag-theme-balham .ag-menu .ag-menu-separator>span {
      background-image: url("data:image/svg+xml,%3Csvg%20width%3D'1'%20height%3D'8px'%20viewBox%3D'0%200%201%208px'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%3E%3Cline%20x1%3D'0'%20y1%3D'4px'%20x2%3D'1'%20y2%3D'4px'%20stroke-width%3D'1'%20stroke%3D'%23BDC3C7'%2F%3E%3C%2Fsvg%3E");
    }

    .ag-theme-balham .ag-menu .ag-menu-option-popup-pointer {
      width: 24px;
      text-align: center;
    }

    .ag-theme-balham.ag-dnd-ghost {
      background: white;
      border-radius: 2px;
      box-shadow: none;
      padding: 4px;
      border: 1px solid #BDC3C7;
      color: rgba(0, 0, 0, 0.54);
      font-weight: 600;
      font-size: 12px;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
      height: 32px !important;
      line-height: 32px;
      margin: 0;
      padding: 0 8px;
      transform: translateY(8px);
    }

    .ag-theme-balham.ag-dnd-ghost span,
    .ag-theme-balham.ag-dnd-ghost div {
      height: 100%;
      margin: 0;
      padding: 0;
    }

    .ag-theme-balham.ag-dnd-ghost .ag-dnd-ghost-icon {
      margin-right: 4px;
      opacity: 0.87;
    }

    .ag-theme-balham .ag-tab-header {
      background: #f5f7f7;
      min-width: 220px;
      width: 100%;
      display: flex;
    }

    .ag-theme-balham .ag-tab-header .ag-tab {
      display: flex;
      border-bottom: 2px solid transparent;
      height: 16px;
      flex: none;
      align-items: center;
      justify-content: center;
    }

    .ag-theme-balham .ag-tab-body {
      padding: 2px 0;
    }

    .ag-theme-balham .ag-tab-body .ag-menu-list {
      margin-bottom: 0;
      margin-top: 0;
    }

    .ag-theme-balham .ag-tab-body .ag-menu-list>div:first-child>span {
      padding-top: 0;
    }

    .ag-theme-balham .ag-tab-body .ag-menu-list>div:last-child>span {
      padding-bottom: 0;
    }

    .ag-theme-balham .ag-tab-body .ag-menu-list>div:last-child>.ag-menu-option-popup-pointer {
      background-position-y: 0;
    }

    .ag-theme-balham .ag-filter .ag-filter-select,
    .ag-theme-balham .ag-filter .ag-filter-body {
      margin-bottom: 4px;
    }

    .ag-theme-balham .ag-filter .ag-filter-body {
      margin-top: 0;
    }

    .ag-theme-balham .ag-filter .ag-filter-filter {
      margin-left: 4px;
      margin-right: 4px;
    }

    .ag-theme-balham .ag-filter .ag-filter-select {
      margin: 4px;
    }

    .ag-theme-balham .ag-filter input[type='radio'] {
      margin: 0 3px 0 6px;
      width: 12px;
      height: 17px;
      vertical-align: top;
    }

    .ag-theme-balham .ag-filter input[type='text'],
    .ag-theme-balham .ag-filter input[type='date'] {
      padding-left: 4px;
    }

    .ag-theme-balham .ag-filter .ag-set-filter-list {
      height: 168px;
    }

    .ag-theme-balham .ag-filter .ag-set-filter-item {
      height: 28px;
    }

    .ag-theme-balham .ag-filter .ag-set-filter-item>div,
    .ag-theme-balham .ag-filter .ag-set-filter-item>span {
      margin-left: 5px;
    }

    .ag-theme-balham .ag-filter .ag-filter-header-container {
      border-bottom: 1px solid #BDC3C7;
      padding-bottom: 2px;
    }

    .ag-theme-balham .ag-filter .ag-filter-apply-panel {
      display: flex;
      justify-content: flex-end;
      padding: 4px;
      padding-top: 8px;
    }

    .ag-theme-balham .ag-filter .ag-filter-apply-panel button {
      line-height: 1.5;
    }

    .ag-theme-balham .ag-filter .ag-filter-apply-panel button+button {
      margin-left: 8px;
    }

    .ag-theme-balham .ag-column-select-panel .ag-column-tool-panel-column-group,
    .ag-theme-balham .ag-column-select-panel .ag-column-tool-panel-column {
      height: 16px;
    }

    .ag-theme-balham .ag-column-select-panel .ag-column-tool-panel-column-group .ag-column-select-checkbox,
    .ag-theme-balham .ag-column-select-panel .ag-column-tool-panel-column-group .ag-column-tool-panel-column-label,
    .ag-theme-balham .ag-column-select-panel .ag-column-tool-panel-column-group .ag-column-group-icons,
    .ag-theme-balham .ag-column-select-panel .ag-column-tool-panel-column .ag-column-select-checkbox,
    .ag-theme-balham .ag-column-select-panel .ag-column-tool-panel-column .ag-column-tool-panel-column-label,
    .ag-theme-balham .ag-column-select-panel .ag-column-tool-panel-column .ag-column-group-icons {
      margin-left: 4px;
      margin-right: 4px;
    }

    .ag-theme-balham .ag-column-select-panel .ag-primary-cols-list-panel {
      border-top: 1px solid #BDC3C7;
      padding-top: 4px;
    }

    .ag-theme-balham .ag-column-select-panel .ag-primary-cols-list-panel>div {
      cursor: pointer;
    }

    .ag-theme-balham .ag-column-select-panel .ag-column-tool-panel-column.ag-toolpanel-add-group-indent {
      margin-left: 24px;
    }

    .ag-theme-balham .ag-primary-cols-header-panel {
      border-top: 1px solid #BDC3C7;
      height: 32px;
      align-items: center;
    }

    .ag-theme-balham .ag-primary-cols-header-panel>div {
      cursor: pointer;
      margin: 0 4px;
    }

    .ag-theme-balham .ag-primary-cols-header-panel .ag-filter-body {
      margin-left: 4px;
      margin-right: 4px;
    }

    .ag-theme-balham .ag-tool-panel-wrapper {
      border-right: 0;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel {
      color: rgba(0, 0, 0, 0.54);
      font-weight: 600;
      font-size: 12px;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-filter-toolpanel-header.ag-filter-header {
      min-height: 32px;
      height: 32px;
      border-bottom: 1px solid #BDC3C7;
      box-sizing: content-box;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-filter-toolpanel-header>div:not(.ag-input-wrapper) {
      margin: 0 2px;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-filter-toolpanel-header>div.ag-input-wrapper {
      padding-left: 4px;
      padding-right: 4px;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-filter-toolpanel-header>div.ag-input-wrapper input {
      width: 100%;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-filter-list-panel {
      flex: 1 1 auto;
      overflow: auto;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-filter-list-panel>div.ag-first-group-visible>.ag-group-component>.ag-group-component-title-bar {
      border-top: none;
      min-height: calc(32px - 1px);
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-filter-list-panel>div.ag-last-group-visible>.ag-group-component.ag-collapsed {
      border-bottom: 1px solid #BDC3C7;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component {
      border: none;
      background-color: #f5f7f7;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component .ag-group-component-title-bar {
      min-height: 32px;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component .ag-group-component-title-bar .ag-group-component-title {
      white-space: nowrap;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component .ag-group-component-title-bar .ag-column-group-icons {
      margin: 0 4px;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component.ag-level-0>.ag-group-component-title-bar {
      border: 0 solid #BDC3C7;
      border-top-width: 1px;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component.ag-has-filter>.ag-group-component-title-bar .ag-group-component-title:after {
      content: "";
      font-family: "agGridBalham";
      font-size: 16px;
      margin-left: 4px;
      color: #7F8C8D;
      font-weight: normal;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container {
      margin-left: 0;
      padding: 0;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item:not(.ag-filter-toolpanel-instance) {
      margin-top: 0;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item .ag-group-component-title-bar {
      background-color: #f8f9fa;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item .ag-filter-toolpanel-header {
      padding: 2px 0;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item .ag-filter-toolpanel-body:not(:empty) {
      margin: 4px 0;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item .ag-filter-toolpanel-body .ag-filter-air {
      border: 1px solid #BDC3C7;
      padding-top: 4px;
      color: #000;
      font-weight: 400;
      font-size: 12px;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item:not(.ag-filter-toolpanel-instance),
    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item>.ag-group-component {
      border-top: none;
      margin-bottom: 0;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item:not(.ag-filter-toolpanel-instance) .ag-group-component-title-bar,
    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item>.ag-group-component .ag-group-component-title-bar {
      min-height: unset;
      height: unset;
      margin: 4px 0;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-pivot-mode-panel {
      height: 32px;
      display: flex;
      flex: none;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-pivot-mode-panel .ag-pivot-mode-select {
      display: flex;
      align-items: center;
      margin-left: 4px;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-column-select-panel {
      border-bottom: 1px solid #BDC3C7;
      padding-bottom: 3px;
      padding-top: 0;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-column-drop {
      border-bottom: 1px solid #BDC3C7;
      padding: 4px 0;
      padding-bottom: 8px;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-column-drop .ag-column-drop-empty-message {
      color: rgba(0, 0, 0, 0.38);
      font-weight: 600;
      font-size: 12px;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
      padding-left: 24px;
      padding-right: 4px;
      margin-top: 4px;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-column-drop .ag-column-drop-list {
      cursor: default;
      margin-top: 4px;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-column-drop>div:first-child>span:first-child {
      margin-left: 4px;
      margin-right: 4px;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-column-drop.ag-last-column-drop {
      border-bottom-width: 0;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-filter-toolpanel-header>div:not(.ag-input-wrapper) {
      padding-left: 2px;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item {
      margin-top: 4px;
      margin-right: 2px;
      margin-bottom: 4px;
      margin-left: 0;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item:not(.ag-filter-toolpanel-instance).ag-level-1 .ag-filter-toolpanel-header,
    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item>.ag-group-component.ag-level-1 .ag-filter-toolpanel-header {
      padding-left: 1rem;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item:not(.ag-filter-toolpanel-instance).ag-level-2 .ag-group-component-title-bar,
    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item>.ag-group-component.ag-level-2 .ag-group-component-title-bar {
      padding-left: 1rem;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item:not(.ag-filter-toolpanel-instance).ag-level-2 .ag-filter-toolpanel-header,
    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item>.ag-group-component.ag-level-2 .ag-filter-toolpanel-header {
      padding-left: 2rem;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item:not(.ag-filter-toolpanel-instance).ag-level-3 .ag-group-component-title-bar,
    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item>.ag-group-component.ag-level-3 .ag-group-component-title-bar {
      padding-left: 2rem;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item:not(.ag-filter-toolpanel-instance).ag-level-3 .ag-filter-toolpanel-header,
    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item>.ag-group-component.ag-level-3 .ag-filter-toolpanel-header {
      padding-left: 3rem;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item:not(.ag-filter-toolpanel-instance).ag-level-4 .ag-group-component-title-bar,
    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item>.ag-group-component.ag-level-4 .ag-group-component-title-bar {
      padding-left: 3rem;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item:not(.ag-filter-toolpanel-instance).ag-level-4 .ag-filter-toolpanel-header,
    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item>.ag-group-component.ag-level-4 .ag-filter-toolpanel-header {
      padding-left: 4rem;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item:not(.ag-filter-toolpanel-instance).ag-level-5 .ag-group-component-title-bar,
    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item>.ag-group-component.ag-level-5 .ag-group-component-title-bar {
      padding-left: 4rem;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item:not(.ag-filter-toolpanel-instance).ag-level-5 .ag-filter-toolpanel-header,
    .ag-theme-balham .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item>.ag-group-component.ag-level-5 .ag-filter-toolpanel-header {
      padding-left: 5rem;
    }

    .ag-theme-balham .ag-numeric-header .ag-header-cell-label .ag-header-icon {
      margin-left: 0;
      margin-right: 4px;
    }

    .ag-theme-balham .ag-paging-panel {
      border-top: 1px solid #BDC3C7;
      color: rgba(0, 0, 0, 0.54);
      height: 32px;
      padding: 0 12px;
    }

    .ag-theme-balham .ag-paging-panel>span {
      margin-left: 16px;
    }

    .ag-theme-balham .ag-paging-page-summary-panel .ag-icon {
      width: 16px;
      height: 16px;
    }

    .ag-theme-balham .ag-paging-page-summary-panel .ag-paging-button button {
      cursor: pointer;
      opacity: 0;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      padding: 0;
    }

    .ag-theme-balham .ag-paging-page-summary-panel .ag-paging-button.ag-disabled .ag-icon {
      color: rgba(0, 0, 0, 0.38);
      opacity: 0.38;
    }

    .ag-theme-balham .ag-paging-page-summary-panel .ag-paging-button.ag-disabled button {
      cursor: default;
    }

    .ag-theme-balham .ag-paging-page-summary-panel span {
      margin: 0 4px;
    }

    .ag-theme-balham .ag-row-selected {
      background-color: #b7e4ff;
    }

    .ag-theme-balham .ag-ltr .ag-cell.ag-cell-range-selected:not(.ag-cell-range-single-cell),
    .ag-theme-balham .ag-rtl .ag-cell.ag-cell-range-selected:not(.ag-cell-range-single-cell) {
      border: 1px solid transparent;
    }

    .ag-theme-balham .ag-ltr .ag-cell.ag-cell-range-selected:not(.ag-cell-range-single-cell).ag-cell-range-top,
    .ag-theme-balham .ag-rtl .ag-cell.ag-cell-range-selected:not(.ag-cell-range-single-cell).ag-cell-range-top {
      border-top-color: #0091EA;
    }

    .ag-theme-balham .ag-ltr .ag-cell.ag-cell-range-selected:not(.ag-cell-range-single-cell).ag-cell-range-right,
    .ag-theme-balham .ag-rtl .ag-cell.ag-cell-range-selected:not(.ag-cell-range-single-cell).ag-cell-range-right {
      border-right-color: #0091EA;
    }

    .ag-theme-balham .ag-ltr .ag-cell.ag-cell-range-selected:not(.ag-cell-range-single-cell).ag-cell-range-bottom,
    .ag-theme-balham .ag-rtl .ag-cell.ag-cell-range-selected:not(.ag-cell-range-single-cell).ag-cell-range-bottom {
      border-bottom-color: #0091EA;
    }

    .ag-theme-balham .ag-ltr .ag-cell.ag-cell-range-selected:not(.ag-cell-range-single-cell).ag-cell-range-left,
    .ag-theme-balham .ag-rtl .ag-cell.ag-cell-range-selected:not(.ag-cell-range-single-cell).ag-cell-range-left {
      border-left-color: #0091EA;
    }

    .ag-theme-balham .ag-cell-range-selected:not(.ag-cell-focus) {
      background-color: rgba(0, 145, 234, 0.2);
    }

    .ag-theme-balham .ag-cell-range-selected:not(.ag-cell-focus).ag-cell-range-chart {
      background-color: rgba(0, 88, 255, 0.1);
    }

    .ag-theme-balham .ag-cell-range-selected:not(.ag-cell-focus).ag-cell-range-chart.ag-cell-range-chart-category {
      background-color: rgba(0, 255, 132, 0.1);
    }

    .ag-theme-balham .ag-cell-range-selected-1:not(.ag-cell-focus) {
      background-color: rgba(0, 145, 234, 0.3);
    }

    .ag-theme-balham .ag-cell-range-selected-2:not(.ag-cell-focus) {
      background-color: rgba(0, 145, 234, 0.4);
    }

    .ag-theme-balham .ag-cell-range-selected-3:not(.ag-cell-focus) {
      background-color: rgba(0, 145, 234, 0.5);
    }

    .ag-theme-balham .ag-cell-range-selected-4:not(.ag-cell-focus) {
      background-color: rgba(0, 145, 234, 0.6);
    }

    .ag-theme-balham .ag-ltr .ag-selection-fill-top,
    .ag-theme-balham .ag-rtl .ag-selection-fill-top {
      border-top: 1px dashed #0091EA;
    }

    .ag-theme-balham .ag-ltr .ag-selection-fill-top.ag-cell.ag-cell-range-selected,
    .ag-theme-balham .ag-rtl .ag-selection-fill-top.ag-cell.ag-cell-range-selected {
      border-top: 1px dashed #869198;
    }

    .ag-theme-balham .ag-ltr .ag-selection-fill-right,
    .ag-theme-balham .ag-rtl .ag-selection-fill-right {
      border-right: 1px dashed #0091EA;
    }

    .ag-theme-balham .ag-ltr .ag-selection-fill-right.ag-cell.ag-cell-range-selected,
    .ag-theme-balham .ag-rtl .ag-selection-fill-right.ag-cell.ag-cell-range-selected {
      border-right: 1px dashed #869198;
    }

    .ag-theme-balham .ag-ltr .ag-selection-fill-bottom,
    .ag-theme-balham .ag-rtl .ag-selection-fill-bottom {
      border-bottom: 1px dashed #0091EA;
    }

    .ag-theme-balham .ag-ltr .ag-selection-fill-bottom.ag-cell.ag-cell-range-selected,
    .ag-theme-balham .ag-rtl .ag-selection-fill-bottom.ag-cell.ag-cell-range-selected {
      border-bottom: 1px dashed #869198;
    }

    .ag-theme-balham .ag-ltr .ag-selection-fill-left,
    .ag-theme-balham .ag-rtl .ag-selection-fill-left {
      border-left: 1px dashed #0091EA;
    }

    .ag-theme-balham .ag-ltr .ag-selection-fill-left.ag-cell.ag-cell-range-selected,
    .ag-theme-balham .ag-rtl .ag-selection-fill-left.ag-cell.ag-cell-range-selected {
      border-left: 1px dashed #869198;
    }

    .ag-theme-balham .ag-fill-handle,
    .ag-theme-balham .ag-range-handle {
      position: absolute;
      width: 6px;
      height: 6px;
      bottom: -1px;
      right: -1px;
      background-color: #0091EA;
    }

    .ag-theme-balham .ag-fill-handle {
      cursor: cell;
    }

    .ag-theme-balham .ag-range-handle {
      cursor: nwse-resize;
    }

    .ag-theme-balham .ag-cell.ag-cell-inline-editing {
      padding: 12px;
      height: 40px;
    }

    .ag-theme-balham .ag-cell.ag-cell-inline-editing {
      background: white;
      border-radius: 2px;
      box-shadow: none;
      padding: 4px;
      background-color: #f5f7f7;
    }

    .ag-theme-balham .ag-popup-editor {
      background: white;
      border-radius: 2px;
      box-shadow: none;
      padding: 4px;
      background-color: #f5f7f7;
      padding: 0;
    }

    .ag-theme-balham .ag-popup-editor .ag-large-textarea textarea {
      height: auto;
      padding: 12px;
    }

    .ag-theme-balham .ag-virtual-list-container .ag-virtual-list-item {
      height: 28px;
    }

    .ag-theme-balham .ag-rich-select {
      background-color: #f5f7f7;
    }

    .ag-theme-balham .ag-rich-select .ag-rich-select-list {
      width: 100%;
      min-width: 200px;
      height: 182px;
    }

    .ag-theme-balham .ag-rich-select .ag-rich-select-value {
      padding: 0 4px 0 12px;
      height: 28px;
    }

    .ag-theme-balham .ag-rich-select .ag-virtual-list-item {
      cursor: default;
      height: 28px;
    }

    .ag-theme-balham .ag-rich-select .ag-virtual-list-item:hover {
      background-color: #ECF0F1;
    }

    .ag-theme-balham .ag-rich-select .ag-rich-select-row {
      padding-left: 12px;
    }

    .ag-theme-balham .ag-rich-select .ag-rich-select-row-selected {
      background-color: #b7e4ff;
    }

    .ag-theme-balham .ag-ltr .ag-floating-filter-button {
      margin-left: 12px;
    }

    .ag-theme-balham .ag-floating-filter-button button {
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      background: transparent;
      border: 0;
      height: 16px;
      padding: 0;
      width: 16px;
    }

    .ag-theme-balham .ag-selection-checkbox:not(.ag-hidden)~.ag-cell-value:not(:empty),
    .ag-theme-balham .ag-selection-checkbox:not(.ag-hidden)+.ag-group-value:not(:empty),
    .ag-theme-balham .ag-group-expanded:not(.ag-hidden)~.ag-cell-value:not(:empty),
    .ag-theme-balham .ag-group-expanded:not(.ag-hidden)+.ag-group-value:not(:empty),
    .ag-theme-balham .ag-group-contracted:not(.ag-hidden)~.ag-cell-value:not(:empty),
    .ag-theme-balham .ag-group-contracted:not(.ag-hidden)+.ag-group-value:not(:empty),
    .ag-theme-balham .ag-group-checkbox:not(.ag-invisible)~.ag-cell-value:not(:empty),
    .ag-theme-balham .ag-group-checkbox:not(.ag-invisible)+.ag-group-value:not(:empty) {
      margin-left: 12px;
    }

    .ag-theme-balham .ag-selection-checkbox:not(.ag-hidden)~.ag-group-checkbox,
    .ag-theme-balham .ag-group-expanded:not(.ag-hidden)~.ag-group-checkbox,
    .ag-theme-balham .ag-group-contracted:not(.ag-hidden)~.ag-group-checkbox,
    .ag-theme-balham .ag-group-checkbox:not(.ag-invisible)~.ag-group-checkbox {
      margin-left: 12px;
    }

    .ag-theme-balham .ag-group-child-count {
      margin-left: 2px;
    }

    .ag-theme-balham .ag-selection-checkbox span {
      position: relative;
    }

    .ag-theme-balham .ag-column-drop-horizontal {
      background-color: #f5f7f7;
      height: 28px;
      padding-left: 12px;
    }

    .ag-theme-balham .ag-column-drop-horizontal .ag-icon-group,
    .ag-theme-balham .ag-column-drop-horizontal .ag-icon-pivot {
      margin-right: 12px;
    }

    .ag-theme-balham .ag-column-drop-horizontal .ag-icon-small-left,
    .ag-theme-balham .ag-column-drop-horizontal .ag-icon-small-right {
      margin: 0 4px;
      opacity: 0.54;
    }

    .ag-theme-balham .ag-column-drop-horizontal .ag-column-drop-empty-message {
      opacity: 0.38;
    }

    .ag-theme-balham .ag-column-drop-cell {
      background: #dde4e6;
      border-radius: 16px;
      min-height: 16px;
      padding: 0 2px;
    }

    .ag-theme-balham .ag-column-drop-cell .ag-column-drop-cell-text {
      margin: 0 4px;
    }

    .ag-theme-balham .ag-column-drop-cell .ag-column-drop-cell-button {
      min-width: 16px;
      margin: 0 2px;
      opacity: 0.54;
    }

    .ag-theme-balham .ag-column-drop-cell .ag-column-drop-cell-button:hover {
      opacity: 0.87;
    }

    .ag-theme-balham .ag-column-drop-cell .ag-column-drag {
      margin-left: 8px;
    }

    .ag-theme-balham .ag-column-drop-vertical .ag-column-drop-cell {
      margin-top: 4px;
    }

    .ag-theme-balham .ag-select-agg-func-popup {
      background: white;
      border-radius: 2px;
      box-shadow: none;
      padding: 4px;
      background: white;
      height: 70px;
      padding: 0;
    }

    .ag-theme-balham .ag-select-agg-func-popup .ag-virtual-list-item {
      cursor: default;
      line-height: 20px;
      padding-left: 8px;
    }

    .ag-theme-balham .ag-set-filter-list,
    .ag-theme-balham .ag-menu-column-select-wrapper {
      width: auto;
    }

    .ag-theme-balham .ag-column-drop-vertical>.ag-column-drop-cell {
      margin-left: 4px;
      margin-top: 0;
    }

    .ag-theme-balham .ag-cell-data-changed {
      background-color: rgba(22, 160, 133, 0.5) !important;
    }

    .ag-theme-balham .ag-cell-data-changed-animation {
      background-color: transparent;
      transition: background-color 1s;
    }

    .ag-theme-balham .ag-row-stub {
      background-color: inherit;
    }

    .ag-theme-balham .ag-stub-cell {
      padding-left: 12px;
      padding-top: 4px;
    }

    .ag-theme-balham .ag-stub-cell .ag-loading-icon {
      -webkit-animation-name: spin;
      animation-name: spin;
      -webkit-animation-duration: 1000ms;
      animation-duration: 1000ms;
      -webkit-animation-iteration-count: infinite;
      animation-iteration-count: infinite;
      -webkit-animation-timing-function: linear;
      animation-timing-function: linear;
    }

    @-webkit-keyframes spin {
      from {
        transform: rotate(0deg);
      }

      to {
        transform: rotate(360deg);
      }
    }

    @keyframes spin {
      from {
        transform: rotate(0deg);
      }

      to {
        transform: rotate(360deg);
      }
    }

    .ag-theme-balham .ag-stub-cell .ag-loading-text {
      margin-left: 4px;
      margin-top: 4px;
    }

    .ag-theme-balham .ag-floating-top {
      border-bottom: 1px solid #BDC3C7;
    }

    .ag-theme-balham .ag-floating-bottom {
      border-top: 1px solid #BDC3C7;
    }

    .ag-theme-balham .ag-floating-top,
    .ag-theme-balham .ag-floating-bottom {
      background-color: inherit;
    }

    .ag-theme-balham .ag-floating-top .ag-row,
    .ag-theme-balham .ag-floating-bottom .ag-row {
      background-color: inherit;
    }

    .ag-theme-balham .ag-status-bar {
      background: white;
      border: 1px solid #BDC3C7;
      border-top-width: 0;
      color: rgba(0, 0, 0, 0.38);
      font-weight: 600;
      font-size: 12px;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
      padding-right: 16px;
      padding-left: 16px;
      line-height: 1.5;
    }

    .ag-theme-balham .ag-name-value-value {
      color: #000;
    }

    .ag-theme-balham .ag-status-bar-center {
      text-align: center;
    }

    .ag-theme-balham .ag-name-value {
      margin-left: 4px;
      margin-right: 4px;
      padding-top: 8px;
      padding-bottom: 8px;
    }

    .ag-theme-balham .ag-details-row {
      padding: 20px;
    }

    .ag-theme-balham .ag-overlay-loading-wrapper {
      background-color: rgba(255, 255, 255, 0.5);
    }

    .ag-theme-balham .ag-overlay-loading-center {
      background: white;
      border-radius: 2px;
      box-shadow: none;
      padding: 4px;
    }

    .ag-theme-balham .ag-ltr .ag-side-bar.ag-side-bar-left,
    .ag-theme-balham .ag-rtl .ag-side-bar.ag-side-bar-right {
      border-left: 1px solid #BDC3C7;
    }

    .ag-theme-balham .ag-ltr .ag-side-bar.ag-side-bar-left .ag-side-button.ag-selected button,
    .ag-theme-balham .ag-rtl .ag-side-bar.ag-side-bar-right .ag-side-button.ag-selected button {
      margin-right: -1px;
      padding-right: 1px;
    }

    .ag-theme-balham .ag-ltr .ag-side-bar.ag-side-bar-left .ag-tool-panel-wrapper,
    .ag-theme-balham .ag-rtl .ag-side-bar.ag-side-bar-right .ag-tool-panel-wrapper {
      border-left: 1px solid #BDC3C7;
    }

    .ag-theme-balham .ag-ltr .ag-side-bar.ag-side-bar-right,
    .ag-theme-balham .ag-rtl .ag-side-bar.ag-side-bar-left {
      border-right: 1px solid #BDC3C7;
    }

    .ag-theme-balham .ag-ltr .ag-side-bar.ag-side-bar-right .ag-side-button.ag-selected button,
    .ag-theme-balham .ag-rtl .ag-side-bar.ag-side-bar-left .ag-side-button.ag-selected button {
      margin-left: -1px;
      padding-left: 1px;
    }

    .ag-theme-balham .ag-ltr .ag-side-bar.ag-side-bar-right .ag-tool-panel-wrapper,
    .ag-theme-balham .ag-rtl .ag-side-bar.ag-side-bar-left .ag-tool-panel-wrapper {
      border-right: 1px solid #BDC3C7;
    }

    .ag-theme-balham .ag-side-bar {
      background-color: #f5f7f7;
      border: 1px solid #BDC3C7;
      border-left-width: 0;
      position: relative;
    }

    .ag-theme-balham .ag-side-bar .ag-side-buttons {
      padding-top: 16px;
      background: white;
      width: 20px;
      position: relative;
    }

    .ag-theme-balham .ag-side-bar .ag-side-buttons .ag-side-button button {
      background: transparent;
      border: 0;
      color: #000;
      padding: 8px 0 8px 0;
      width: calc(100% + 1px);
      margin: 0;
      min-height: 72px;
      border-width: 1px 0 1px 0;
      border-style: solid;
      border-color: transparent;
      background-position-y: center;
      background-position-x: center;
      background-repeat: no-repeat;
    }

    .ag-theme-balham .ag-side-bar .ag-side-buttons .ag-selected button {
      background-color: #f5f7f7;
      border-color: #BDC3C7;
    }

    .ag-theme-balham .ag-side-bar .ag-panel-container {
      border-right: 1px solid #BDC3C7;
    }

    .ag-theme-balham .ag-side-bar.full-width .ag-panel-container {
      border-right: 0;
    }

    .ag-theme-balham .ag-side-bar .ag-column-drop {
      min-height: 50px;
    }

    .ag-theme-balham .ag-primary-cols-filter-wrapper {
      margin-left: 4px;
      margin-right: 4px;
    }

    .ag-theme-balham .ag-group-component {
      background-color: #f8f9fa;
      padding: 0px;
      border: 0 solid #cbd0d3;
      border-top-width: 1px;
    }

    .ag-theme-balham .ag-group-component.ag-disabled>.ag-group-component-label .ag-group-component-title,
    .ag-theme-balham .ag-group-component.ag-disabled>.ag-group-component-container {
      opacity: 0.5;
    }

    .ag-theme-balham .ag-group-component .ag-group-component-title-bar {
      background-color: #e9eeef;
      height: 16px;
      font-size: 12px;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
      height: 26px;
    }

    .ag-theme-balham .ag-group-component:not(.ag-collapsible)>div {
      margin-left: 0;
    }

    .ag-theme-balham .ag-group-component:not(.ag-collapsible)>.ag-group-component-title-bar {
      margin-left: 0;
      padding: 4px;
    }

    .ag-theme-balham .ag-group-component:not(.ag-collapsible)>.ag-group-component-title-bar .ag-column-group-icons {
      display: none;
    }

    .ag-theme-balham .ag-group-component .ag-group-component-toolbar {
      background-color: #f2f5f5;
      padding: 4px;
      border: 0 solid #BDC3C7;
    }

    .ag-theme-balham .ag-group-component>.ag-group-component-container {
      margin-left: 8px;
      padding: 4px;
    }

    .ag-theme-balham .ag-group-component .ag-group-item {
      margin: 2px 0;
    }

    .ag-theme-balham .ag-group-component .ag-group-item .ag-group-component-title-bar {
      height: 18px;
    }

    .ag-theme-balham .ag-labeled label {
      margin-right: 4px;
      white-space: nowrap;
    }

    .ag-theme-balham .ag-labeled.ag-label-align-top label {
      margin-bottom: 2px;
    }

    .ag-theme-balham .ag-slider>.ag-wrapper>div:not(:first-of-type),
    .ag-theme-balham .ag-angle-select>.ag-wrapper>div:not(:first-of-type) {
      margin-left: 8px;
    }

    .ag-theme-balham .ag-angle-select .ag-angle-select-field .ag-parent-circle {
      width: 24px;
      height: 24px;
      border-radius: 12px;
      box-shadow: 0 0 2px rgba(0, 0, 0, 0.9);
      background-color: #ffffff;
    }

    .ag-theme-balham .ag-angle-select .ag-angle-select-field .ag-child-circle {
      top: 4px;
      left: 12px;
      width: 6px;
      height: 6px;
      margin-left: -3px;
      margin-top: -4px;
      border-radius: 3px;
      background-color: #4c4c4c;
    }

    .ag-theme-balham .ag-toggle-button .ag-input-wrapper {
      height: 16px;
      width: 40px;
      background-color: white;
      border: 1px solid #7F8C8D;
      border-radius: 500rem;
    }

    .ag-theme-balham .ag-toggle-button .ag-input-wrapper .ag-icon {
      width: 16px;
      height: 16px;
      border: 1px solid #7F8C8D;
      border-radius: 500rem;
      right: calc(100% - 16px);
    }

    .ag-theme-balham .ag-toggle-button.ag-selected .ag-input-wrapper {
      background-color: #0091EA;
    }

    .ag-theme-balham .ag-toggle-button.ag-selected .ag-input-wrapper .ag-icon {
      background: white;
      right: -1px;
    }

    .ag-theme-balham .ag-color-picker>.ag-wrapper {
      border: 1px solid #BDC3C7;
      border-radius: 5px;
    }

    .ag-theme-balham .ag-color-picker>.ag-wrapper>div {
      width: 16px;
      height: 16px;
    }

    .ag-theme-balham .ag-color-picker>.ag-wrapper button {
      background-color: white;
    }

    .ag-theme-balham .ag-color-picker>.ag-wrapper button:hover {
      background-color: #ECF0F1;
    }

    .ag-theme-balham .ag-dialog.ag-color-dialog {
      border-radius: 5px;
    }

    .ag-theme-balham .ag-color-panel {
      padding: 4px;
    }

    .ag-theme-balham .ag-color-panel .ag-spectrum-color {
      background-color: red;
      border-radius: 2px;
    }

    .ag-theme-balham .ag-color-panel .ag-spectrum-tools {
      padding: 10px;
    }

    .ag-theme-balham .ag-color-panel .ag-spectrum-sat {
      background-image: linear-gradient(to right, white, rgba(204, 154, 129, 0));
    }

    .ag-theme-balham .ag-color-panel .ag-spectrum-val {
      background-image: linear-gradient(to top, black, rgba(204, 154, 129, 0));
    }

    .ag-theme-balham .ag-color-panel .ag-spectrum-dragger {
      border-radius: 12px;
      height: 12px;
      width: 12px;
      border: 1px solid white;
      background: black;
      box-shadow: 0 0 2px 0px rgba(0, 0, 0, 0.24);
    }

    .ag-theme-balham .ag-color-panel .ag-spectrum-hue-background {
      border-radius: 2px;
    }

    .ag-theme-balham .ag-color-panel .ag-spectrum-alpha-background {
      border-radius: 2px;
    }

    .ag-theme-balham .ag-color-panel .ag-hue-alpha {
      margin-bottom: 10px;
      height: 11px;
      border-radius: 2px;
    }

    .ag-theme-balham .ag-color-panel .ag-spectrum-slider {
      margin-top: -12px;
      width: 13px;
      height: 13px;
      border-radius: 13px;
      background-color: #f8f8f8;
      box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.37);
    }

    .ag-theme-balham .ag-color-panel .ag-spectrum-text-value {
      font-weight: bold;
      line-height: 20px;
      color: #333;
    }

    .ag-theme-balham .ag-color-panel .ag-spectrum-text-value:focus {
      border: 1px solid #0d77e4;
      padding: 2px;
    }

    .ag-theme-balham .ag-color-panel .ag-recent-colors>div {
      margin: 0 3px;
    }

    .ag-theme-balham .ag-color-panel .ag-recent-colors>div:first-child {
      margin-left: 0;
    }

    .ag-theme-balham .ag-color-panel .ag-recent-colors>div:last-child {
      margin-right: 0;
    }

    .ag-theme-balham.ag-popup>div:not(.ag-tooltip-custom) {
      box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
    }

    .ag-theme-balham .ag-panel {
      background-color: white;
      border: 1px solid #BDC3C7;
    }

    .ag-dragging-range-handle .ag-theme-balham .ag-panel.ag-dialog,
    .ag-dragging-fill-handle .ag-theme-balham .ag-panel.ag-dialog {
      opacity: 0.7;
      pointer-events: none;
    }

    .ag-theme-balham .ag-panel .ag-title-bar {
      background-color: #f5f7f7;
      border-bottom: 1px solid #d9dcde;
      color: rgba(0, 0, 0, 0.54);
      height: 32px;
      font-size: 12px;
      font-weight: 600;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
      padding: 5px 10px;
      padding-left: 12px;
    }

    .ag-theme-balham .ag-panel .ag-title-bar .ag-title-bar-buttons .ag-button {
      height: 20px;
      width: 20px;
      border-radius: 5px;
    }

    .ag-theme-balham .ag-panel .ag-title-bar .ag-title-bar-buttons .ag-button .ag-icon {
      line-height: 20px;
      font-size: 20px;
    }

    .ag-theme-balham .ag-panel .ag-title-bar .ag-title-bar-buttons .ag-button:hover,
    .ag-theme-balham .ag-panel .ag-title-bar .ag-title-bar-buttons .ag-button.ag-has-popup {
      background-color: #d7e0e2;
    }

    .ag-theme-balham .ag-panel .ag-title-bar .ag-title-bar-buttons .ag-button:not(:last-child) {
      margin-right: 5px;
    }

    .ag-theme-balham .ag-panel .ag-message-box .ag-message-box-button-bar {
      height: 30px;
      background-color: #f5f7f7;
      padding: 2px;
    }

    .ag-theme-balham .ag-panel .ag-message-box .ag-message-box-button-bar button {
      border-radius: 2px;
    }

    .ag-theme-balham .ag-tooltip {
      background-color: #cbd0d3;
      color: #000;
      border-radius: 2px;
      padding: 5px;
      border-width: 1px;
      border-style: solid;
      border-color: #cbd0d3;
      transition: opacity 1s;
    }

    .ag-theme-balham .ag-tooltip.ag-tooltip-hiding {
      opacity: 0;
    }

    .ag-theme-balham .ag-chart .ag-chart-menu {
      border-radius: 5px;
      background: white;
    }

    .ag-theme-balham .ag-chart .ag-chart-menu>span:hover {
      background-color: #e6e6e6;
    }

    .ag-theme-balham .ag-chart-tabbed-menu .ag-chart-settings .ag-chart-settings-mini-wrapper .ag-group-component-container {
      margin-left: 0;
    }

    .ag-theme-balham .ag-chart-tabbed-menu .ag-chart-settings .ag-chart-settings-mini-wrapper .ag-chart-mini-thumbnail {
      border: 1px solid #BDC3C7;
      border-radius: 5px;
      margin: 5px;
    }

    .ag-theme-balham .ag-chart-tabbed-menu .ag-chart-settings .ag-chart-settings-mini-wrapper .ag-chart-mini-thumbnail:nth-child(2n + 2):not(:last-child) {
      margin-left: auto;
      margin-right: auto;
    }

    .ag-theme-balham .ag-chart-tabbed-menu .ag-chart-settings .ag-chart-settings-mini-wrapper .ag-chart-mini-thumbnail:nth-child(3n + 1) {
      margin-left: 2px;
    }

    .ag-theme-balham .ag-chart-tabbed-menu .ag-chart-settings .ag-chart-settings-mini-wrapper .ag-chart-mini-thumbnail:nth-child(3n) {
      margin-right: 2px;
    }

    .ag-theme-balham .ag-chart-tabbed-menu .ag-chart-settings .ag-chart-settings-mini-wrapper .ag-chart-mini-thumbnail.ag-selected {
      border-color: #0091EA;
    }

    .ag-theme-balham .ag-chart-tabbed-menu .ag-chart-settings .ag-chart-settings-nav-bar .ag-nav-card-selector .ag-nav-card-item {
      background: #000;
      width: 8px;
      height: 8px;
      border-radius: 4px;
    }

    .ag-theme-balham .ag-chart-tabbed-menu .ag-chart-settings .ag-chart-settings-nav-bar .ag-nav-card-selector .ag-nav-card-item.ag-selected {
      background: #0091EA;
    }

    .ag-theme-balham .ag-chart-tabbed-menu .ag-chart-data .ag-data-select-checkbox .ag-column-drag {
      margin-left: 4px;
    }

    .ag-theme-balham .ag-chart-tabbed-menu .ag-chart-data .ag-chart-data-wrapper .ag-toggle-button.ag-group-item {
      margin: 4.8px 0;
    }

    .ag-theme-balham .ag-chart-tabbed-menu .ag-chart-format .ag-chart-format-wrapper .ag-group-item {
      margin: 4.8px 0;
    }

    .ag-theme-balham .ag-icon {
      /* use !important to prevent issues with browser extensions that change fonts */
      font-family: "agGridBalham";
      display: block;
      speak: none;
      font-size: 16px;
      color: #7F8C8D;
      font-style: normal;
      font-weight: normal;
      font-variant: normal;
      text-transform: none;
      /* Better Font Rendering =========== */
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    .ag-theme-balham .ag-icon-aggregation:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-arrows:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-asc:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-cancel:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-chart:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-checkbox-checked:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-checkbox-indeterminate:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-checkbox-unchecked:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-color-picker:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-column:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-columns:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-contracted:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-copy:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-cross:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-cut:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-data:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-desc:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-expanded:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-eye-slash:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-eye:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-filter:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-first:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-grip:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-group:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-indeterminate:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-last:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-left:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-linked:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-loading:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-maximize:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-menu:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-minimize:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-minus:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-next:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-none:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-not-allowed:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-paste:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-pin:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-pivot:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-plus:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-previous:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-radio-button-off:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-radio-button-on:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-right:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-save:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-small-down:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-small-left:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-small-right:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-small-up:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-tick:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-tree-closed:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-tree-indeterminate:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-tree-open:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-unlinked:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-checkbox-checked,
    .ag-theme-balham .ag-icon-checkbox-indeterminate,
    .ag-theme-balham .ag-icon-checkbox-unchecked {
      background-color: white;
      line-height: 16px;
      border-radius: 3px;
    }

    .ag-theme-balham .ag-icon-checkbox-checked-readonly,
    .ag-theme-balham .ag-icon-checkbox-indeterminate-readonly,
    .ag-theme-balham .ag-icon-checkbox-unchecked-readonly {
      cursor: default;
      opacity: 0.38;
    }

    .ag-theme-balham .ag-icon-checkbox-checked {
      color: #0091EA;
    }

    .ag-theme-balham .ag-icon-checkbox-checked-readonly:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-checkbox-indeterminate-readonly:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-checkbox-unchecked-readonly:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-row-drag:before {
      content: "";
    }

    .ag-theme-balham .ag-right-arrow:before {
      content: "";
    }

    .ag-theme-balham .ag-icon-radio-button-on {
      color: #0091EA;
    }

    .ag-theme-balham .ag-right-arrow:before {
      content: "";
    }

    .ag-theme-balham .ag-rtl {
      text-align: right;
    }

    .ag-theme-balham .ag-rtl .ag-numeric-cell {
      text-align: left;
    }

    .ag-theme-balham .ag-rtl .ag-checkbox:not(.ag-label-align-left) label,
    .ag-theme-balham .ag-rtl .ag-radio-button:not(.ag-label-align-left) label,
    .ag-theme-balham .ag-rtl .ag-toggle-button:not(.ag-label-align-left) label {
      margin-right: 4px;
      margin-left: 0;
    }

    .ag-theme-balham .ag-rtl .ag-tool-panel-wrapper .ag-pivot-mode-panel .ag-pivot-mode-select {
      margin-right: 4px;
    }

    .ag-theme-balham .ag-rtl .ag-tool-panel-wrapper .ag-column-drop .ag-column-drop-empty-message {
      padding-left: 4px;
      padding-right: 16px;
    }

    .ag-theme-balham .ag-rtl .ag-column-select-panel .ag-column-tool-panel-column-group .ag-column-select-checkbox,
    .ag-theme-balham .ag-rtl .ag-column-select-panel .ag-column-tool-panel-column-group .ag-column-group-icons,
    .ag-theme-balham .ag-rtl .ag-column-select-panel .ag-column-tool-panel-column .ag-column-select-checkbox,
    .ag-theme-balham .ag-rtl .ag-column-select-panel .ag-column-tool-panel-column .ag-column-group-icons {
      margin-left: 4px;
      margin-right: 4px;
    }

    .ag-theme-balham .ag-rtl .ag-column-select-panel .ag-column-group-closed-icon {
      display: block;
      transform: rotate(180deg);
    }

    .ag-theme-balham .ag-rtl .ag-column-select-panel .ag-column-tool-panel-column.ag-toolpanel-add-group-indent {
      margin-left: 0;
      margin-right: 24px;
    }

    .ag-theme-balham .ag-rtl .ag-header-select-all {
      margin-left: 12px;
      margin-right: 0;
    }

    .ag-theme-balham .ag-rtl .ag-selection-checkbox+.ag-cell-value:not(:empty),
    .ag-theme-balham .ag-rtl .ag-selection-checkbox+.ag-group-value:not(:empty),
    .ag-theme-balham .ag-rtl .ag-group-checkbox+.ag-cell-value:not(:empty),
    .ag-theme-balham .ag-rtl .ag-group-checkbox+.ag-group-value:not(:empty),
    .ag-theme-balham .ag-rtl .ag-group-expanded+.ag-cell-value:not(:empty),
    .ag-theme-balham .ag-rtl .ag-group-expanded+.ag-group-value:not(:empty),
    .ag-theme-balham .ag-rtl .ag-group-contracted+.ag-cell-value:not(:empty),
    .ag-theme-balham .ag-rtl .ag-group-contracted+.ag-group-value:not(:empty) {
      margin-right: 12px;
      margin-left: initial;
    }

    .ag-theme-balham .ag-rtl .ag-selection-checkbox+.ag-group-checkbox,
    .ag-theme-balham .ag-rtl .ag-group-checkbox+.ag-group-checkbox,
    .ag-theme-balham .ag-rtl .ag-group-expanded+.ag-group-checkbox,
    .ag-theme-balham .ag-rtl .ag-group-contracted+.ag-group-checkbox {
      margin-right: 12px;
      margin-left: initial;
    }

    .ag-theme-balham .ag-rtl .ag-group-child-count {
      margin-left: unset;
      margin-right: 2px;
    }

    .ag-theme-balham .ag-rtl .ag-column-drop-horizontal {
      padding-right: 12px;
    }

    .ag-theme-balham .ag-rtl .ag-column-drop-horizontal .ag-icon-group,
    .ag-theme-balham .ag-rtl .ag-column-drop-horizontal .ag-icon-pivot {
      margin-left: 12px;
      margin-right: 0;
    }

    .ag-theme-balham .ag-rtl .ag-floating-filter-button {
      margin-right: 12px;
    }

    .ag-theme-balham .ag-rtl .ag-set-filter-item>div,
    .ag-theme-balham .ag-rtl .ag-set-filter-item>span {
      margin-left: 0;
      margin-right: 5px;
    }

    .ag-theme-balham .ag-rtl .ag-header .ag-header-cell-resize::after {
      border-left: 1px solid #BDC3C7;
      border-right: 0;
    }

    .ag-theme-balham .ag-rtl .ag-row-group-leaf-indent {
      margin-right: 28px;
    }

    .ag-theme-balham .ag-rtl .ag-cell {
      border-left: 1px solid transparent;
    }

    .ag-theme-balham .ag-rtl .ag-cell:not(.ag-cell-focus).ag-cell-first-right-pinned:not(.ag-cell-range-left),
    .ag-theme-balham .ag-rtl .ag-cell.ag-cell-range-selected:not(.ag-cell-range-single-cell).ag-cell-first-right-pinned:not(.ag-cell-range-left),
    .ag-theme-balham .ag-rtl .ag-root:not(.ag-has-focus) .ag-cell.ag-cell-first-right-pinned:not(.ag-cell-range-left) {
      border-left: 1px solid #BDC3C7;
    }

    .ag-theme-balham .ag-rtl .ag-cell:not(.ag-cell-focus).ag-cell-last-left-pinned:not(.ag-cell-range-right),
    .ag-theme-balham .ag-rtl .ag-cell.ag-cell-range-selected:not(.ag-cell-range-single-cell).ag-cell-last-left-pinned:not(.ag-cell-range-right),
    .ag-theme-balham .ag-rtl .ag-root:not(.ag-has-focus) .ag-cell.ag-cell-last-left-pinned:not(.ag-cell-range-right) {
      border-right: 1px solid #BDC3C7;
    }

    .ag-theme-balham .ag-rtl .ag-side-bar {
      border-right-width: 0;
    }

    .ag-theme-balham .ag-rtl .ag-side-bar .ag-panel-container {
      border-left: 1px solid #BDC3C7;
      border-right: 0;
    }

    .ag-theme-balham .ag-rtl .ag-side-bar.full-width .ag-panel-container {
      border-left: 0;
    }

    .ag-theme-balham .ag-rtl .ag-tool-panel-wrapper .ag-filter-panel .ag-filter-toolpanel-header>div:not(.ag-input-wrapper) {
      padding-right: 2px;
    }

    .ag-theme-balham .ag-rtl .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item {
      margin-top: 4px;
      margin-bottom: 4px;
      margin-right: 0;
      margin-left: 2px;
    }

    .ag-theme-balham .ag-rtl .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item:not(.ag-filter-toolpanel-instance).ag-level-1 .ag-filter-toolpanel-header,
    .ag-theme-balham .ag-rtl .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item>.ag-group-component.ag-level-1 .ag-filter-toolpanel-header {
      padding-right: 1rem;
    }

    .ag-theme-balham .ag-rtl .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item:not(.ag-filter-toolpanel-instance).ag-level-2 .ag-group-component-title-bar,
    .ag-theme-balham .ag-rtl .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item>.ag-group-component.ag-level-2 .ag-group-component-title-bar {
      padding-right: 1rem;
    }

    .ag-theme-balham .ag-rtl .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item:not(.ag-filter-toolpanel-instance).ag-level-2 .ag-filter-toolpanel-header,
    .ag-theme-balham .ag-rtl .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item>.ag-group-component.ag-level-2 .ag-filter-toolpanel-header {
      padding-right: 2rem;
    }

    .ag-theme-balham .ag-rtl .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item:not(.ag-filter-toolpanel-instance).ag-level-3 .ag-group-component-title-bar,
    .ag-theme-balham .ag-rtl .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item>.ag-group-component.ag-level-3 .ag-group-component-title-bar {
      padding-right: 2rem;
    }

    .ag-theme-balham .ag-rtl .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item:not(.ag-filter-toolpanel-instance).ag-level-3 .ag-filter-toolpanel-header,
    .ag-theme-balham .ag-rtl .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item>.ag-group-component.ag-level-3 .ag-filter-toolpanel-header {
      padding-right: 3rem;
    }

    .ag-theme-balham .ag-rtl .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item:not(.ag-filter-toolpanel-instance).ag-level-4 .ag-group-component-title-bar,
    .ag-theme-balham .ag-rtl .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item>.ag-group-component.ag-level-4 .ag-group-component-title-bar {
      padding-right: 3rem;
    }

    .ag-theme-balham .ag-rtl .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item:not(.ag-filter-toolpanel-instance).ag-level-4 .ag-filter-toolpanel-header,
    .ag-theme-balham .ag-rtl .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item>.ag-group-component.ag-level-4 .ag-filter-toolpanel-header {
      padding-right: 4rem;
    }

    .ag-theme-balham .ag-rtl .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item:not(.ag-filter-toolpanel-instance).ag-level-5 .ag-group-component-title-bar,
    .ag-theme-balham .ag-rtl .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item>.ag-group-component.ag-level-5 .ag-group-component-title-bar {
      padding-right: 4rem;
    }

    .ag-theme-balham .ag-rtl .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item:not(.ag-filter-toolpanel-instance).ag-level-5 .ag-filter-toolpanel-header,
    .ag-theme-balham .ag-rtl .ag-tool-panel-wrapper .ag-filter-panel .ag-group-component-container .ag-group-item>.ag-group-component.ag-level-5 .ag-filter-toolpanel-header {
      padding-right: 5rem;
    }

    .ag-theme-balham .sass-variables::after {
      content: '{ "autoSizePadding": "12px", "headerHeight": "32px", "groupPaddingSize": "28px", "footerPaddingAddition": "16px", "virtualItemHeight": "28px", "aggFuncPopupHeight": "98px", "checkboxIndentWidth": "20px", "leafNodePadding": "12px", "rowHeight": "28px", "gridSize": "4px", "iconSize": "16px" }';
      display: none;
    }

    .ag-theme-balham .ag-cell-highlight {
      background-color: #0091EA !important;
    }

    .ag-theme-balham .ag-header-cell-resize::after {
      height: 80%;
      margin-top: 8px;
    }

    .ag-theme-balham .ag-header-cell::after,
    .ag-theme-balham .ag-header-group-cell::after {
      border-right: 1px solid rgba(189, 195, 199, 0.5);
      content: " ";
      height: 16px;
      margin-top: 8px;
      position: absolute;
      text-indent: -2000px;
      top: 0;
    }

    .ag-theme-balham .ag-ltr .ag-header-cell::after,
    .ag-theme-balham .ag-ltr .ag-header-group-cell::after {
      right: 0;
    }

    .ag-theme-balham .ag-rtl .ag-header-cell::after,
    .ag-theme-balham .ag-rtl .ag-header-group-cell::after {
      left: 0;
    }

    .ag-theme-balham .ag-column-drop-horizontal.ag-column-drop {
      border: 1px solid #BDC3C7;
      border-bottom: 0;
    }

    .ag-theme-balham .ag-ltr .ag-column-drop-horizontal.ag-column-drop.ag-width-half:first-child {
      border-right: 0;
    }

    .ag-theme-balham .ag-rtl .ag-column-drop-horizontal.ag-column-drop.ag-width-half:first-child {
      border-left: 0;
    }

    .ag-theme-balham .ag-row {
      border-color: #d9dcde;
    }

    .ag-theme-balham .ag-row-selected {
      border-color: #b7e4ff;
    }

    .ag-theme-balham .ag-column-drop-cell {
      min-height: 24px;
    }

    .ag-theme-balham .ag-column-drop-cell .ag-column-drop-cell-button {
      margin-bottom: 2px;
      margin-top: 2px;
    }

    .ag-theme-balham .ag-column-drop-cell .ag-column-drop-cell-button:hover {
      opacity: 1;
    }

    .ag-theme-balham .ag-column-drop-vertical .ag-column-drop-cell {
      margin-left: 8px;
      margin-right: 8px;
    }

    .ag-theme-balham .ag-column-drop-vertical .ag-column-drop-cell .ag-column-drop-cell-text {
      margin-left: 8px;
    }

    .ag-theme-balham .ag-column-drop-horizontal {
      background-color: #f5f7f7;
      height: 32px;
    }

    .ag-theme-balham .ag-column-drop-horizontal .ag-column-drop-cell-text {
      margin-left: 8px;
    }

    .ag-theme-balham .ag-root {
      border: 1px solid #BDC3C7;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-column-select-panel .ag-column-tool-panel-column-group,
    .ag-theme-balham .ag-tool-panel-wrapper .ag-column-select-panel .ag-column-tool-panel-column {
      min-height: 20px;
    }

    .ag-theme-balham .ag-tool-panel-wrapper .ag-column-drop {
      padding-bottom: 8px;
      padding-top: 8px;
    }

    .ag-theme-balham .ag-menu-option {
      height: 28px;
    }

    .ag-theme-balham .ag-column-select-panel .ag-column-tool-panel-column-group,
    .ag-theme-balham .ag-column-select-panel .ag-column-tool-panel-column {
      height: 20px;
    }

    .ag-theme-balham .ag-tab-header {
      border-bottom: 1px solid #BDC3C7;
    }

    .ag-theme-balham .ag-tab-header .ag-tab {
      margin-bottom: -2px;
    }

    .ag-theme-balham .ag-tab-header .ag-tab.ag-tab-selected {
      background-color: white;
      border-bottom-color: transparent;
    }

    .ag-theme-balham .ag-tab-body,
    .ag-theme-balham .ag-popup-editor,
    .ag-theme-balham .ag-menu {
      background-color: white;
      color: #000;
    }

    .ag-theme-balham .ag-cell.ag-cell-inline-editing {
      height: 28px;
      padding: 0;
    }

    .ag-theme-balham .ag-details-row {
      background-color: white;
    }

    .ag-theme-balham .ag-overlay-loading-wrapper {
      background-color: rgba(255, 255, 255, 0.5);
    }

    .ag-theme-balham .ag-overlay-loading-center {
      background-color: white;
      border: 1px solid #BDC3C7;
      color: #000;
      padding: 16px;
    }

    .ag-theme-balham .ag-cell-range-selected-1:not(.ag-cell-focus) {
      background-color: rgba(0, 145, 234, 0.3);
    }

    .ag-theme-balham .ag-cell-range-selected-2:not(.ag-cell-focus) {
      background-color: rgba(0, 145, 234, 0.4);
    }

    .ag-theme-balham .ag-cell-range-selected-3:not(.ag-cell-focus) {
      background-color: rgba(0, 145, 234, 0.5);
    }

    .ag-theme-balham .ag-cell-range-selected-4:not(.ag-cell-focus) {
      background-color: rgba(0, 145, 234, 0.6);
    }

    .ag-theme-balham .ag-rich-select-value {
      border-bottom: 1px solid #BDC3C7;
    }

    .ag-theme-balham .ag-filter-apply-panel {
      border-top: 1px solid #BDC3C7;
    }

    .ag-theme-balham .ag-group-expanded .ag-icon-expanded:empty:before {
      content: "";
    }

    .ag-theme-balham .ag-filter-toolpanel-body {
      background-color: white;
    }

    .ng-select.ng-select-opened>.ng-select-container {
      background: #fff;
      border-color: #b3b3b3 #ccc #d9d9d9
    }

    .ng-select.ng-select-opened>.ng-select-container:hover {
      box-shadow: none
    }

    .ng-select.ng-select-opened>.ng-select-container .ng-arrow {
      top: -2px;
      border-color: transparent transparent #999;
      border-width: 0 5px 5px
    }

    .ng-select.ng-select-opened>.ng-select-container .ng-arrow:hover {
      border-color: transparent transparent #333
    }

    .ng-select.ng-select-opened.ng-select-bottom>.ng-select-container {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0
    }

    .ng-select.ng-select-opened.ng-select-top>.ng-select-container {
      border-top-right-radius: 0;
      border-top-left-radius: 0
    }

    .ng-select.ng-select-focused:not(.ng-select-opened)>.ng-select-container {
      border-color: #007eff;
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 0 3px rgba(0, 126, 255, 0.1)
    }

    .ng-select.ng-select-disabled>.ng-select-container {
      background-color: #f9f9f9
    }

    .ng-select .ng-has-value .ng-placeholder {
      display: none
    }

    .ng-select .ng-select-container {
      color: #333;
      background-color: #fff;
      border-radius: 4px;
      border: 1px solid #ccc;
      min-height: 36px;
      align-items: center
    }

    .ng-select .ng-select-container:hover {
      box-shadow: 0 1px 0 rgba(0, 0, 0, 0.06)
    }

    .ng-select .ng-select-container .ng-value-container {
      align-items: center;
      padding-left: 10px
    }

    [dir="rtl"] .ng-select .ng-select-container .ng-value-container {
      padding-right: 10px;
      padding-left: 0
    }

    .ng-select .ng-select-container .ng-value-container .ng-placeholder {
      color: #999
    }

    .ng-select.ng-select-single .ng-select-container {
      height: 36px
    }

    .ng-select.ng-select-single .ng-select-container .ng-value-container .ng-input {
      top: 5px;
      left: 0;
      padding-left: 10px;
      padding-right: 50px
    }

    [dir="rtl"] .ng-select.ng-select-single .ng-select-container .ng-value-container .ng-input {
      padding-right: 10px;
      padding-left: 50px
    }

    .ng-select.ng-select-multiple.ng-select-disabled>.ng-select-container .ng-value-container .ng-value {
      background-color: #f9f9f9;
      border: 1px solid #e6e6e6
    }

    .ng-select.ng-select-multiple.ng-select-disabled>.ng-select-container .ng-value-container .ng-value .ng-value-label {
      padding: 0 5px
    }

    .ng-select.ng-select-multiple .ng-select-container .ng-value-container {
      padding-top: 5px;
      padding-left: 7px
    }

    [dir="rtl"] .ng-select.ng-select-multiple .ng-select-container .ng-value-container {
      padding-right: 7px;
      padding-left: 0
    }

    .ng-select.ng-select-multiple .ng-select-container .ng-value-container .ng-value {
      font-size: .9em;
      margin-bottom: 5px;
      background-color: #ebf5ff;
      border-radius: 2px;
      margin-right: 5px
    }

    [dir="rtl"] .ng-select.ng-select-multiple .ng-select-container .ng-value-container .ng-value {
      margin-right: 0;
      margin-left: 5px
    }

    .ng-select.ng-select-multiple .ng-select-container .ng-value-container .ng-value.ng-value-disabled {
      background-color: #f9f9f9
    }

    .ng-select.ng-select-multiple .ng-select-container .ng-value-container .ng-value.ng-value-disabled .ng-value-label {
      padding-left: 5px
    }

    [dir="rtl"] .ng-select.ng-select-multiple .ng-select-container .ng-value-container .ng-value.ng-value-disabled .ng-value-label {
      padding-left: 0;
      padding-right: 5px
    }

    .ng-select.ng-select-multiple .ng-select-container .ng-value-container .ng-value .ng-value-label {
      display: inline-block;
      padding: 1px 5px
    }

    .ng-select.ng-select-multiple .ng-select-container .ng-value-container .ng-value .ng-value-icon {
      display: inline-block;
      padding: 1px 5px
    }

    .ng-select.ng-select-multiple .ng-select-container .ng-value-container .ng-value .ng-value-icon:hover {
      background-color: #d1e8ff
    }

    .ng-select.ng-select-multiple .ng-select-container .ng-value-container .ng-value .ng-value-icon.left {
      border-right: 1px solid #b8dbff
    }

    [dir="rtl"] .ng-select.ng-select-multiple .ng-select-container .ng-value-container .ng-value .ng-value-icon.left {
      border-left: 1px solid #b8dbff;
      border-right: none
    }

    .ng-select.ng-select-multiple .ng-select-container .ng-value-container .ng-value .ng-value-icon.right {
      border-left: 1px solid #b8dbff
    }

    [dir="rtl"] .ng-select.ng-select-multiple .ng-select-container .ng-value-container .ng-value .ng-value-icon.right {
      border-left: 0;
      border-right: 1px solid #b8dbff
    }

    .ng-select.ng-select-multiple .ng-select-container .ng-value-container .ng-input {
      padding: 0 0 3px 3px
    }

    [dir="rtl"] .ng-select.ng-select-multiple .ng-select-container .ng-value-container .ng-input {
      padding: 0 3px 3px 0
    }

    .ng-select.ng-select-multiple .ng-select-container .ng-value-container .ng-placeholder {
      top: 5px;
      padding-bottom: 5px;
      padding-left: 3px
    }

    [dir="rtl"] .ng-select.ng-select-multiple .ng-select-container .ng-value-container .ng-placeholder {
      padding-right: 3px;
      padding-left: 0
    }

    .ng-select .ng-clear-wrapper {
      color: #999
    }

    .ng-select .ng-clear-wrapper:hover .ng-clear {
      color: #D0021B
    }

    .ng-select .ng-spinner-zone {
      padding: 5px 5px 0 0
    }

    [dir="rtl"] .ng-select .ng-spinner-zone {
      padding: 5px 0 0 5px
    }

    .ng-select .ng-arrow-wrapper {
      width: 25px;
      padding-right: 5px
    }

    [dir="rtl"] .ng-select .ng-arrow-wrapper {
      padding-left: 5px;
      padding-right: 0
    }

    .ng-select .ng-arrow-wrapper:hover .ng-arrow {
      border-top-color: #666
    }

    .ng-select .ng-arrow-wrapper .ng-arrow {
      border-color: #999 transparent transparent;
      border-style: solid;
      border-width: 5px 5px 2.5px
    }

    .ng-dropdown-panel {
      background-color: #fff;
      border: 1px solid #ccc;
      box-shadow: 0 1px 0 rgba(0, 0, 0, 0.06);
      left: 0
    }

    .ng-dropdown-panel.ng-select-bottom {
      top: 100%;
      border-bottom-right-radius: 4px;
      border-bottom-left-radius: 4px;
      border-top-color: #e6e6e6;
      margin-top: -1px
    }

    .ng-dropdown-panel.ng-select-bottom .ng-dropdown-panel-items .ng-option:last-child {
      border-bottom-right-radius: 4px;
      border-bottom-left-radius: 4px
    }

    .ng-dropdown-panel.ng-select-top {
      bottom: 100%;
      border-top-right-radius: 4px;
      border-top-left-radius: 4px;
      border-bottom-color: #e6e6e6;
      margin-bottom: -1px
    }

    .ng-dropdown-panel.ng-select-top .ng-dropdown-panel-items .ng-option:first-child {
      border-top-right-radius: 4px;
      border-top-left-radius: 4px
    }

    .ng-dropdown-panel .ng-dropdown-header {
      border-bottom: 1px solid #ccc;
      padding: 5px 7px
    }

    .ng-dropdown-panel .ng-dropdown-footer {
      border-top: 1px solid #ccc;
      padding: 5px 7px
    }

    .ng-dropdown-panel .ng-dropdown-panel-items .ng-optgroup {
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      padding: 8px 10px;
      font-weight: 500;
      color: rgba(0, 0, 0, 0.54);
      cursor: pointer
    }

    .ng-dropdown-panel .ng-dropdown-panel-items .ng-optgroup.ng-option-disabled {
      cursor: default
    }

    .ng-dropdown-panel .ng-dropdown-panel-items .ng-optgroup.ng-option-marked {
      background-color: #f5faff
    }

    .ng-dropdown-panel .ng-dropdown-panel-items .ng-optgroup.ng-option-selected,
    .ng-dropdown-panel .ng-dropdown-panel-items .ng-optgroup.ng-option-selected.ng-option-marked {
      background-color: #ebf5ff;
      font-weight: 600
    }

    .ng-dropdown-panel .ng-dropdown-panel-items .ng-option {
      background-color: #fff;
      color: rgba(0, 0, 0, 0.87);
      padding: 8px 10px
    }

    .ng-dropdown-panel .ng-dropdown-panel-items .ng-option.ng-option-selected,
    .ng-dropdown-panel .ng-dropdown-panel-items .ng-option.ng-option-selected.ng-option-marked {
      color: #333;
      background-color: #ebf5ff
    }

    .ng-dropdown-panel .ng-dropdown-panel-items .ng-option.ng-option-selected .ng-option-label,
    .ng-dropdown-panel .ng-dropdown-panel-items .ng-option.ng-option-selected.ng-option-marked .ng-option-label {
      font-weight: 600
    }

    .ng-dropdown-panel .ng-dropdown-panel-items .ng-option.ng-option-marked {
      background-color: #f5faff;
      color: #333
    }

    .ng-dropdown-panel .ng-dropdown-panel-items .ng-option.ng-option-disabled {
      color: #ccc
    }

    .ng-dropdown-panel .ng-dropdown-panel-items .ng-option.ng-option-child {
      padding-left: 22px
    }

    [dir="rtl"] .ng-dropdown-panel .ng-dropdown-panel-items .ng-option.ng-option-child {
      padding-right: 22px;
      padding-left: 0
    }

    .ng-dropdown-panel .ng-dropdown-panel-items .ng-option .ng-tag-label {
      font-size: 80%;
      font-weight: 400;
      padding-right: 5px
    }

    [dir="rtl"] .ng-dropdown-panel .ng-dropdown-panel-items .ng-option .ng-tag-label {
      padding-left: 5px;
      padding-right: 0
    }

    [dir="rtl"] .ng-dropdown-panel {
      direction: rtl;
      text-align: right
    }

    @font-face {
      font-family: VerticalFont;
      src: url('Aaargh.ttf') format("truetype");
    }

    html,
    body {
      height: 100%;
    }

    body {
      margin: 0;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    .button {
      background-color: #e9e8e8;
      color: gray;
    }

    .custom_label {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      color: grey;
      font-size: small;
    }

    .cursor-pointer {
      cursor: pointer;
    }

    .cursor-pointer:hover {
      text-decoration: underline !important;
    }

    .ck-editor__editable {
      min-height: 350px !important;
    }

    .page__inner img {
      max-width: 100%;
    }

  </style>
  <style type="text/css"
    id="s./node_modules/css-loader/index.js!./node_modules/sass-loader/lib/loader.js!./package/src/animation.scss-0">
    /**
 * @license
 * Copyright Akveo. All Rights Reserved.
 * Licensed under the MIT License. See License.txt in the project root for license information.
 */
    .eva-animation {
      animation-duration: 1s;
      animation-fill-mode: both;
    }

    .eva-infinite {
      animation-iteration-count: infinite;
    }

    .eva-icon-shake {
      animation-name: eva-shake;
    }

    .eva-icon-zoom {
      animation-name: eva-zoomIn;
    }

    .eva-icon-pulse {
      animation-name: eva-pulse;
    }

    .eva-icon-flip {
      animation-name: eva-flipInY;
    }

    .eva-hover {
      display: inline-block;
    }

    .eva-hover:hover .eva-icon-hover-shake,
    .eva-parent-hover:hover .eva-icon-hover-shake {
      animation-name: eva-shake;
    }

    .eva-hover:hover .eva-icon-hover-zoom,
    .eva-parent-hover:hover .eva-icon-hover-zoom {
      animation-name: eva-zoomIn;
    }

    .eva-hover:hover .eva-icon-hover-pulse,
    .eva-parent-hover:hover .eva-icon-hover-pulse {
      animation-name: eva-pulse;
    }

    .eva-hover:hover .eva-icon-hover-flip,
    .eva-parent-hover:hover .eva-icon-hover-flip {
      animation-name: eva-flipInY;
    }

    @keyframes eva-flipInY {
      from {
        transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
        animation-timing-function: ease-in;
        opacity: 0;
      }

      40% {
        transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
        animation-timing-function: ease-in;
      }

      60% {
        transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
        opacity: 1;
      }

      80% {
        transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
      }

      to {
        transform: perspective(400px);
      }
    }

    @keyframes eva-shake {

      from,
      to {
        transform: translate3d(0, 0, 0);
      }

      10%,
      30%,
      50%,
      70%,
      90% {
        transform: translate3d(-3px, 0, 0);
      }

      20%,
      40%,
      60%,
      80% {
        transform: translate3d(3px, 0, 0);
      }
    }

    @keyframes eva-pulse {
      from {
        transform: scale3d(1, 1, 1);
      }

      50% {
        transform: scale3d(1.2, 1.2, 1.2);
      }

      to {
        transform: scale3d(1, 1, 1);
      }
    }

    @keyframes eva-zoomIn {
      from {
        opacity: 1;
        transform: scale3d(0.5, 0.5, 0.5);
      }

      50% {
        opacity: 1;
      }
    }
  </style>
  <style>
    nb-card {

      border-radius: 1rem !important;

    }

    /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvYXBwLmNvbXBvbmVudC5jc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7O0lBRUksOEJBQThCOztBQUVsQyIsImZpbGUiOiJzcmMvYXBwL2FwcC5jb21wb25lbnQuY3NzIiwic291cmNlc0NvbnRlbnQiOlsiOjpuZy1kZWVwIG5iLWNhcmQge1xyXG5cclxuICAgIGJvcmRlci1yYWRpdXM6IDFyZW0gIWltcG9ydGFudDtcclxuXHJcbn0iXX0= */
  </style>
  <script charset="utf-8"
    src="./Vertical_files/default_modules-blogs-blogs-module_modules-dashboard-dashboard-module_modules-featured-featured-modu_21a9dfab.js.download"></script>
  <script charset="utf-8"
    src="./Vertical_files/default_modules-dashboard-dashboard-module_modules-featured-featured-module.js.download"></script>
  <script charset="utf-8" src="./Vertical_files/common.js.download"></script>
  <script charset="utf-8" src="./Vertical_files/modules-dashboard-dashboard-module.js.download"></script>
  <style>
    [_nghost-wdd-c1] nb-layout-header[_ngcontent-wdd-c1] {
      background-color: #417fb2;
      background-image: linear-gradient(to right, #417fb2 0%, #417fb2 100%);
      align-items: center;
    }

    [_nghost-wdd-c1] nb-layout-header[_ngcontent-wdd-c1] nav {
      padding: 1.25rem 2.25rem;
      box-shadow: none;
    }

    [_nghost-wdd-c1] nb-layout-header.header-wrapper[_ngcontent-wdd-c1] nav {
      height: auto;
      padding-top: 10px;
      padding-bottom: 0px;
    }

    [_nghost-wdd-c1] .offcanvas__outer[_ngcontent-wdd-c1] {
      height: 100%;
      position: relative;
      transform: none;
      transition: all 0.2s cubic-bezier(0.56, 1.09, 0.7, 1.05);
      margin-left: 225px;
    }

    [_nghost-wdd-c1] .offcanvas__outer[_ngcontent-wdd-c1] .layout__main[_ngcontent-wdd-c1] {
      background-color: #f5f5f5;
    }

    @media (max-width: 1099px) {
      [_nghost-wdd-c1] .offcanvas__outer[_ngcontent-wdd-c1] {
        margin-left: 0;
      }
    }

    /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvc2hhcmVkL2xheW91dHMvYWRtaW4tbGF5b3V0L0M6XFxTb3VyY2VcXFZlcnRpY2FsQ2xpZW50L3NyY1xcYXBwXFxzaGFyZWRcXGxheW91dHNcXGFkbWluLWxheW91dFxcYWRtaW4tbGF5b3V0LmNvbXBvbmVudC5zY3NzIiwic3JjL2FwcC9zaGFyZWQvbGF5b3V0cy9hZG1pbi1sYXlvdXQvQzpcXFNvdXJjZVxcVmVydGljYWxDbGllbnQvc3JjXFxhc3NldHNcXHN0eWxlc1xcYmFzZVxcX3ZhcmlhYmxlcy5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUVBO0VBRUkseUJDSmdCO0VES2hCLHFFQUE2RTtFQUM3RSxtQkFBbUIsRUFBQTtFQUp2QjtJQVFRLHdCQUF3QjtJQUN4QixnQkFBZ0IsRUFBQTtFQVR4QjtJQWdCVSxZQUFZO0lBQ1osaUJBQWlCO0lBQ2pCLG1CQUFtQixFQUFBO0VBbEI3QjtFQTBCSSxZQUFZO0VBQ1osa0JBQWtCO0VBQ2xCLGVBQWU7RUFDZix3REFBd0Q7RUFDeEQsa0JBQWtCLEVBQUE7RUE5QnRCO0lBaUNNLHlCQUF5QixFQUFBO0VBSTdCO0VBckNGO0lBdUNNLGNBQWMsRUFBQSxFQUNmIiwiZmlsZSI6InNyYy9hcHAvc2hhcmVkL2xheW91dHMvYWRtaW4tbGF5b3V0L2FkbWluLWxheW91dC5jb21wb25lbnQuc2NzcyIsInNvdXJjZXNDb250ZW50IjpbIkBpbXBvcnQgJ2Jhc2UvdmFyaWFibGVzJztcclxuXHJcbjpob3N0IHtcclxuICBuYi1sYXlvdXQtaGVhZGVyIHtcclxuICAgIGJhY2tncm91bmQtY29sb3I6ICRicmFuZENvbG9yO1xyXG4gICAgYmFja2dyb3VuZC1pbWFnZTogbGluZWFyLWdyYWRpZW50KHRvIHJpZ2h0LCAkYnJhbmRDb2xvciAwJSwgJGJyYW5kQ29sb3IgMTAwJSk7XHJcbiAgICBhbGlnbi1pdGVtczogY2VudGVyO1xyXG5cclxuICAgIDo6bmctZGVlcCB7XHJcbiAgICAgIG5hdiB7XHJcbiAgICAgICAgcGFkZGluZzogMS4yNXJlbSAyLjI1cmVtO1xyXG4gICAgICAgIGJveC1zaGFkb3c6IG5vbmU7XHJcbiAgICAgIH1cclxuICAgIH1cclxuXHJcbiAgICAmLmhlYWRlci13cmFwcGVyIHtcclxuICAgICAgOjpuZy1kZWVwIHtcclxuICAgICAgICBuYXYge1xyXG4gICAgICAgICAgaGVpZ2h0OiBhdXRvO1xyXG4gICAgICAgICAgcGFkZGluZy10b3A6IDEwcHg7XHJcbiAgICAgICAgICBwYWRkaW5nLWJvdHRvbTogMHB4O1xyXG4gICAgICAgIH1cclxuICAgICAgfVxyXG4gICAgfVxyXG5cclxuICB9XHJcblxyXG4gIC5vZmZjYW52YXNfX291dGVyIHtcclxuICAgIGhlaWdodDogMTAwJTtcclxuICAgIHBvc2l0aW9uOiByZWxhdGl2ZTtcclxuICAgIHRyYW5zZm9ybTogbm9uZTtcclxuICAgIHRyYW5zaXRpb246IGFsbCAwLjJzIGN1YmljLWJlemllcigwLjU2LCAxLjA5LCAwLjcsIDEuMDUpO1xyXG4gICAgbWFyZ2luLWxlZnQ6IDIyNXB4O1xyXG5cclxuICAgIC5sYXlvdXRfX21haW4ge1xyXG4gICAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjZjVmNWY1O1xyXG4gICAgfVxyXG4gIH1cclxuXHJcbiAgQG1lZGlhIChtYXgtd2lkdGg6IDEwOTlweCkge1xyXG4gICAgLm9mZmNhbnZhc19fb3V0ZXIge1xyXG4gICAgICBtYXJnaW4tbGVmdDogMDtcclxuICAgIH1cclxuICB9XHJcbn0iLCIkYnJhbmRDb2xvcjogIzQxN2ZiMjtcclxuJHdoaXRlOiAjZmZmO1xyXG4kb3JhbmdlOiBvcmFuZ2U7XHJcbiJdfQ== */
  </style>
  <style>
    [_nghost-wdd-c2] {
      -webkit-font-smoothing: antialiased
    }

    [dir=ltr] [_nghost-wdd-c2] {
      text-align: left
    }

    [dir=rtl] [_nghost-wdd-c2] {
      text-align: right
    }

    [_nghost-wdd-c2] .layout[_ngcontent-wdd-c2] {
      display: flex;
      flex-direction: column
    }

    [_nghost-wdd-c2] nb-layout-header {
      display: block
    }

    [_nghost-wdd-c2] nb-layout-header nav {
      align-items: center;
      justify-content: flex-start;
      display: flex
    }

    [_nghost-wdd-c2] nb-layout-header.fixed {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1040
    }

    [_nghost-wdd-c2] .layout-container[_ngcontent-wdd-c2] {
      display: flex;
      flex: 1;
      -ms-flex: 1 1 auto;
      flex-direction: row
    }

    [dir=ltr] [_nghost-wdd-c2] .layout-container[_ngcontent-wdd-c2] nb-sidebar.left {
      order: 0
    }

    [dir=rtl] [_nghost-wdd-c2] .layout-container[_ngcontent-wdd-c2] nb-sidebar.left {
      order: 2
    }

    [dir=ltr] [_nghost-wdd-c2] .layout-container[_ngcontent-wdd-c2] nb-sidebar.right {
      order: 2
    }

    [dir=rtl] [_nghost-wdd-c2] .layout-container[_ngcontent-wdd-c2] nb-sidebar.right {
      order: 0
    }

    [_nghost-wdd-c2] .layout-container[_ngcontent-wdd-c2] nb-sidebar.end {
      order: 2
    }

    [_nghost-wdd-c2] .layout-container[_ngcontent-wdd-c2] nb-sidebar .fixed {
      position: fixed;
      width: 100%;
      overflow-y: auto;
      height: 100%
    }

    [_nghost-wdd-c2] .layout-container[_ngcontent-wdd-c2] .content[_ngcontent-wdd-c2] {
      display: flex;
      flex: 1;
      -ms-flex: 1 1 auto;
      flex-direction: column;
      min-width: 0
    }

    [_nghost-wdd-c2] .layout-container[_ngcontent-wdd-c2] .content.center[_ngcontent-wdd-c2] {
      max-width: 100%;
      position: relative;
      margin-left: auto;
      margin-right: auto
    }

    [_nghost-wdd-c2] .layout-container[_ngcontent-wdd-c2] .content[_ngcontent-wdd-c2] .columns[_ngcontent-wdd-c2] {
      display: flex;
      flex: 1;
      -ms-flex: 1 1 auto;
      flex-direction: row;
      width: 100%
    }

    [_nghost-wdd-c2] .layout-container[_ngcontent-wdd-c2] .content[_ngcontent-wdd-c2] .columns[_ngcontent-wdd-c2] nb-layout-column {
      order: 1;
      flex: 1 0;
      min-width: 0
    }

    [dir=ltr] [_nghost-wdd-c2] .layout-container[_ngcontent-wdd-c2] .content[_ngcontent-wdd-c2] .columns[_ngcontent-wdd-c2] nb-layout-column.left {
      order: 0
    }

    [dir=rtl] [_nghost-wdd-c2] .layout-container[_ngcontent-wdd-c2] .content[_ngcontent-wdd-c2] .columns[_ngcontent-wdd-c2] nb-layout-column.left {
      order: 2
    }

    [_nghost-wdd-c2] .layout-container[_ngcontent-wdd-c2] .content[_ngcontent-wdd-c2] .columns[_ngcontent-wdd-c2] nb-layout-column.start {
      order: 0
    }

    [_nghost-wdd-c2] .layout-container[_ngcontent-wdd-c2] .content[_ngcontent-wdd-c2] nb-layout-footer {
      display: block;
      margin-top: auto
    }

    [_nghost-wdd-c2] .layout-container[_ngcontent-wdd-c2] .content[_ngcontent-wdd-c2] nb-layout-footer nav {
      justify-content: center;
      display: flex
    }
  </style>
  <style>
    [_nghost-wdd-c3] {
      display: block;
      position: relative;
      width: 100%;
      margin: 0 auto;
    }

    [_nghost-wdd-c3] .header[_ngcontent-wdd-c3] .layout__content--contained[_ngcontent-wdd-c3] {
      display: flex;
    }

    [_nghost-wdd-c3] .header[_ngcontent-wdd-c3] .company-name[_ngcontent-wdd-c3] {
      color: #fff;
      font-size: 17px;
      letter-spacing: 5px;
      font-weight: 300;
      font-size: 20px;
      font: large;
    }

    [_nghost-wdd-c3] .header[_ngcontent-wdd-c3] app-breadcrums[_ngcontent-wdd-c3] {
      display: block;
      position: relative;
      top: 15px;
    }

    [_nghost-wdd-c3] .header[_ngcontent-wdd-c3] nb-user[_ngcontent-wdd-c3] .user-picture {
      color: orange;
    }

    [_nghost-wdd-c3] .header[_ngcontent-wdd-c3] nb-user[_ngcontent-wdd-c3] .user-name {
      color: #fff;
      text-transform: capitalize;
    }

    [_nghost-wdd-c3] .header[_ngcontent-wdd-c3] nb-icon[_ngcontent-wdd-c3] {
      color: #fff;
    }

    /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvc2hhcmVkL2NvbXBvbmVudHMvaGVhZGVyL0M6XFxTb3VyY2VcXFZlcnRpY2FsQ2xpZW50L3NyY1xcYXBwXFxzaGFyZWRcXGNvbXBvbmVudHNcXGhlYWRlclxcaGVhZGVyLmNvbXBvbmVudC5zY3NzIiwic3JjL2FwcC9zaGFyZWQvY29tcG9uZW50cy9oZWFkZXIvQzpcXFNvdXJjZVxcVmVydGljYWxDbGllbnQvc3JjXFxhc3NldHNcXHN0eWxlc1xcYmFzZVxcX3ZhcmlhYmxlcy5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUVBO0VBQ0UsY0FBYztFQUNkLGtCQUFrQjtFQUNsQixXQUFXO0VBQ1gsY0FBYyxFQUFBO0VBSmhCO0lBUU0sYUFBYSxFQUFBO0VBUm5CO0lBWU0sV0NiTTtJRGNOLGVBQWU7SUFDZixtQkFBbUI7SUFDbkIsZ0JBQWdCO0lBQ2hCLGVBQWU7SUFDZixXQUFXLEVBQUE7RUFqQmpCO0lBcUJNLGNBQWM7SUFDZCxrQkFBa0I7SUFDbEIsU0FBUyxFQUFBO0VBdkJmO0lBNkJVLGFDN0JLLEVBQUE7RURBZjtJQWlDVSxXQ2xDRTtJRG1DRiwwQkFBMEIsRUFBQTtFQWxDcEM7SUF3Q00sV0N6Q00sRUFBQSIsImZpbGUiOiJzcmMvYXBwL3NoYXJlZC9jb21wb25lbnRzL2hlYWRlci9oZWFkZXIuY29tcG9uZW50LnNjc3MiLCJzb3VyY2VzQ29udGVudCI6WyJAaW1wb3J0ICdiYXNlL3ZhcmlhYmxlcyc7XHJcblxyXG46aG9zdCB7XHJcbiAgZGlzcGxheTogYmxvY2s7XHJcbiAgcG9zaXRpb246IHJlbGF0aXZlO1xyXG4gIHdpZHRoOiAxMDAlO1xyXG4gIG1hcmdpbjogMCBhdXRvO1xyXG5cclxuICAuaGVhZGVyIHtcclxuICAgIC5sYXlvdXRfX2NvbnRlbnQtLWNvbnRhaW5lZCB7XHJcbiAgICAgIGRpc3BsYXk6IGZsZXg7XHJcbiAgICB9XHJcblxyXG4gICAgLmNvbXBhbnktbmFtZSB7XHJcbiAgICAgIGNvbG9yOiAkd2hpdGU7XHJcbiAgICAgIGZvbnQtc2l6ZTogMTdweDtcclxuICAgICAgbGV0dGVyLXNwYWNpbmc6IDVweDtcclxuICAgICAgZm9udC13ZWlnaHQ6IDMwMDtcclxuICAgICAgZm9udC1zaXplOiAyMHB4O1xyXG4gICAgICBmb250OiBsYXJnZTs7XHJcbiAgICB9XHJcblxyXG4gICAgYXBwLWJyZWFkY3J1bXMge1xyXG4gICAgICBkaXNwbGF5OiBibG9jaztcclxuICAgICAgcG9zaXRpb246IHJlbGF0aXZlO1xyXG4gICAgICB0b3A6IDE1cHg7XHJcbiAgICB9XHJcblxyXG4gICAgbmItdXNlciB7XHJcbiAgICAgIDo6bmctZGVlcCB7XHJcbiAgICAgICAgLnVzZXItcGljdHVyZSB7XHJcbiAgICAgICAgICBjb2xvcjogJG9yYW5nZTtcclxuICAgICAgICB9XHJcblxyXG4gICAgICAgIC51c2VyLW5hbWUge1xyXG4gICAgICAgICAgY29sb3I6ICR3aGl0ZTtcclxuICAgICAgICAgIHRleHQtdHJhbnNmb3JtOiBjYXBpdGFsaXplO1xyXG4gICAgICAgIH1cclxuICAgICAgfVxyXG4gICAgfVxyXG5cclxuICAgIG5iLWljb24ge1xyXG4gICAgICBjb2xvcjogJHdoaXRlO1xyXG4gICAgfVxyXG4gIH1cclxufSIsIiRicmFuZENvbG9yOiAjNDE3ZmIyO1xyXG4kd2hpdGU6ICNmZmY7XHJcbiRvcmFuZ2U6IG9yYW5nZTtcclxuIl19 */
  </style>
  <style>
    [_nghost-wdd-c4] {
      display: flex;
      flex-direction: column;
      overflow: hidden;
      z-index: auto;
      order: 0
    }

    [_nghost-wdd-c4] .scrollable[_ngcontent-wdd-c4] {
      overflow-y: auto;
      overflow-x: hidden;
      flex: 1
    }

    [_nghost-wdd-c4] .main-container[_ngcontent-wdd-c4] {
      transform: translate3d(0, 0, 0);
      display: flex;
      flex-direction: column
    }

    [_nghost-wdd-c4] .main-container-fixed[_ngcontent-wdd-c4] {
      position: fixed
    }

    .right[_nghost-wdd-c4] {
      margin-right: 0;
      margin-left: auto
    }

    [dir=ltr] .right[_nghost-wdd-c4] {
      order: 4
    }

    [dir=rtl] .right[_nghost-wdd-c4] {
      order: 0
    }

    .end[_nghost-wdd-c4] {
      order: 4
    }

    [dir=ltr] .end[_nghost-wdd-c4] {
      margin-right: 0;
      margin-left: auto
    }

    [dir=rtl] .end[_nghost-wdd-c4] {
      margin-left: 0;
      margin-right: auto
    }

    .fixed[_nghost-wdd-c4] {
      position: fixed;
      height: 100%;
      z-index: 999;
      top: 0;
      bottom: 0;
      left: 0
    }

    .fixed.right[_nghost-wdd-c4] {
      right: 0
    }

    [dir=ltr] .fixed.start[_nghost-wdd-c4] {
      left: 0
    }

    [dir=rtl] .fixed.start[_nghost-wdd-c4] {
      right: 0
    }

    [dir=ltr] .fixed.end[_nghost-wdd-c4] {
      right: 0
    }

    [dir=rtl] .fixed.end[_nghost-wdd-c4] {
      left: 0
    }

    [_nghost-wdd-c4] nb-sidebar-footer {
      margin-top: auto;
      display: block
    }

    [_nghost-wdd-c4] nb-sidebar-header {
      display: block
    }
  </style>
  <style>
    [_nghost-wdd-c5] {
      display: block;
      height: 100%;
    }

    /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvc2hhcmVkL2NvbXBvbmVudHMvc2lkZWJhci9DOlxcU291cmNlXFxWZXJ0aWNhbENsaWVudC9zcmNcXGFwcFxcc2hhcmVkXFxjb21wb25lbnRzXFxzaWRlYmFyXFxzaWRlYmFyLmNvbXBvbmVudC5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0VBQ0UsY0FBYztFQUNkLFlBQVksRUFBQSIsImZpbGUiOiJzcmMvYXBwL3NoYXJlZC9jb21wb25lbnRzL3NpZGViYXIvc2lkZWJhci5jb21wb25lbnQuc2NzcyIsInNvdXJjZXNDb250ZW50IjpbIjpob3N0IHtcclxuICBkaXNwbGF5OiBibG9jaztcclxuICBoZWlnaHQ6IDEwMCU7XHJcbn1cclxuIl19 */
  </style>
  <style>
    [_nghost-wdd-c6] .weather[_ngcontent-wdd-c6] nb-user[_ngcontent-wdd-c6] .user-name {
      color: orange;
    }

    [_nghost-wdd-c6] .weather[_ngcontent-wdd-c6] nb-user[_ngcontent-wdd-c6] .user-title {
      color: #fff;
    }

    [_nghost-wdd-c6] .weather-border[_ngcontent-wdd-c6] {
      height: 30px;
    }

    [_nghost-wdd-c6] .date-time[_ngcontent-wdd-c6] .date[_ngcontent-wdd-c6] {
      color: orange;
    }

    [_nghost-wdd-c6] .date-time[_ngcontent-wdd-c6] .day-time[_ngcontent-wdd-c6] {
      color: #fff;
    }

    /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvc2hhcmVkL21vZHVsZXMvd2VhdGhlci9DOlxcU291cmNlXFxWZXJ0aWNhbENsaWVudC9zcmNcXGFwcFxcc2hhcmVkXFxtb2R1bGVzXFx3ZWF0aGVyXFx3ZWF0aGVyLmNvbXBvbmVudC5zY3NzIiwic3JjL2FwcC9zaGFyZWQvbW9kdWxlcy93ZWF0aGVyL0M6XFxTb3VyY2VcXFZlcnRpY2FsQ2xpZW50L3NyY1xcYXNzZXRzXFxzdHlsZXNcXGJhc2VcXF92YXJpYWJsZXMuc2NzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFJQTtFQUtVLGFDUEssRUFBQTs7QURFZjtFQVNVLFdDWkUsRUFBQTs7QURHWjtFQWdCSSxZQUFZLEVBQUE7O0FBaEJoQjtFQXFCTSxhQ3ZCUyxFQUFBOztBREVmO0VBeUJNLFdDNUJNLEVBQUEiLCJmaWxlIjoic3JjL2FwcC9zaGFyZWQvbW9kdWxlcy93ZWF0aGVyL3dlYXRoZXIuY29tcG9uZW50LnNjc3MiLCJzb3VyY2VzQ29udGVudCI6WyJAaW1wb3J0ICdiYXNlL3ZhcmlhYmxlcyc7XHJcblxyXG4kZGF0ZVRpbWVNYXJnaW5Ub3A6IDdweDtcclxuXHJcbjpob3N0IHtcclxuICAud2VhdGhlciB7XHJcbiAgICBuYi11c2VyIHtcclxuICAgICAgOjpuZy1kZWVwIHtcclxuICAgICAgICAudXNlci1uYW1lIHtcclxuICAgICAgICAgIGNvbG9yOiAkb3JhbmdlO1xyXG4gICAgICAgIH1cclxuXHJcbiAgICAgICAgLnVzZXItdGl0bGUge1xyXG4gICAgICAgICAgY29sb3I6ICR3aGl0ZTtcclxuICAgICAgICB9XHJcbiAgICAgIH1cclxuICAgIH1cclxuICB9XHJcblxyXG4gIC53ZWF0aGVyLWJvcmRlciB7XHJcbiAgICBoZWlnaHQ6IDMwcHg7XHJcbiAgfVxyXG5cclxuICAuZGF0ZS10aW1lIHtcclxuICAgIC5kYXRlIHtcclxuICAgICAgY29sb3I6ICRvcmFuZ2U7XHJcbiAgICB9XHJcblxyXG4gICAgLmRheS10aW1lIHtcclxuICAgICAgY29sb3I6ICR3aGl0ZTtcclxuICAgIH1cclxuICB9XHJcbn1cclxuIiwiJGJyYW5kQ29sb3I6ICM0MTdmYjI7XHJcbiR3aGl0ZTogI2ZmZjtcclxuJG9yYW5nZTogb3JhbmdlO1xyXG4iXX0= */
  </style>
  <style>
    [_nghost-wdd-c7] {
      display: flex
    }

    [_nghost-wdd-c7] .user-container[_ngcontent-wdd-c7] {
      position: relative;
      display: flex;
      align-items: center
    }

    [_nghost-wdd-c7] .user-picture[_ngcontent-wdd-c7] {
      position: relative;
      flex-shrink: 0
    }

    [_nghost-wdd-c7] .user-picture.image[_ngcontent-wdd-c7] {
      background-size: cover;
      background-repeat: no-repeat
    }

    [_nghost-wdd-c7] .user-picture.initials[_ngcontent-wdd-c7] {
      display: flex;
      align-items: center;
      justify-content: center
    }

    [dir=rtl] [_nghost-wdd-c7] .user-name[_ngcontent-wdd-c7],
    [dir=rtl] [_nghost-wdd-c7] .user-title[_ngcontent-wdd-c7] {
      text-align: right
    }

    [dir=ltr] [_nghost-wdd-c7] .info-container[_ngcontent-wdd-c7] {
      margin-left: .5rem
    }

    [dir=rtl] [_nghost-wdd-c7] .info-container[_ngcontent-wdd-c7] {
      margin-right: .5rem
    }
  </style>
  <style>
    [_nghost-wdd-c8] {
      display: inline-block
    }
  </style>
  <style>
    .breadcrumbs[_ngcontent-wdd-c9] {
      background: #fff;
      width: 100%;
      left: 0;
      padding: 15px 20px;
      border-radius: 4px;
    }

    .list-app[_ngcontent-wdd-c9] li[_ngcontent-wdd-c9] {
      display: inline-block;
      margin-left: 20px;
    }

    .list-app[_ngcontent-wdd-c9] li[_ngcontent-wdd-c9]:first-child {
      margin-left: 0;
    }

    /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvc2hhcmVkL2NvbXBvbmVudHMvaGVhZGVyL2JyZWFkY3J1bWJzL0M6XFxTb3VyY2VcXFZlcnRpY2FsQ2xpZW50L3NyY1xcYXBwXFxzaGFyZWRcXGNvbXBvbmVudHNcXGhlYWRlclxcYnJlYWRjcnVtYnNcXGJyZWFkY3J1bWJzLmNvbXBvbmVudC5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0VBQ0ksZ0JBQWdCO0VBQ2hCLFdBQVc7RUFDWCxPQUFPO0VBQ1Asa0JBQWtCO0VBQ2xCLGtCQUFrQixFQUFBOztBQUd0QjtFQUVRLHFCQUFxQjtFQUNyQixpQkFBaUIsRUFBQTs7QUFIekI7SUFNWSxjQUFjLEVBQUEiLCJmaWxlIjoic3JjL2FwcC9zaGFyZWQvY29tcG9uZW50cy9oZWFkZXIvYnJlYWRjcnVtYnMvYnJlYWRjcnVtYnMuY29tcG9uZW50LnNjc3MiLCJzb3VyY2VzQ29udGVudCI6WyIuYnJlYWRjcnVtYnMge1xyXG4gICAgYmFja2dyb3VuZDogI2ZmZjtcclxuICAgIHdpZHRoOiAxMDAlO1xyXG4gICAgbGVmdDogMDtcclxuICAgIHBhZGRpbmc6IDE1cHggMjBweDtcclxuICAgIGJvcmRlci1yYWRpdXM6IDRweDtcclxufVxyXG5cclxuLmxpc3QtYXBwIHtcclxuICAgIGxpIHtcclxuICAgICAgICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XHJcbiAgICAgICAgbWFyZ2luLWxlZnQ6IDIwcHg7XHJcblxyXG4gICAgICAgICY6Zmlyc3QtY2hpbGQge1xyXG4gICAgICAgICAgICBtYXJnaW4tbGVmdDogMDtcclxuICAgICAgICB9XHJcbiAgICB9XHJcbn0iXX0= */
  </style>
  <style>
    [_nghost-wdd-c11] {
      display: block;
    }

    [_nghost-wdd-c11] .btn-app[_ngcontent-wdd-c11] {
      cursor: pointer;
    }

    /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvc2hhcmVkL2NvbXBvbmVudHMvaGVhZGVyL2JyZWFkY3J1bWJzL3F1aWNrLWFwcC9DOlxcU291cmNlXFxWZXJ0aWNhbENsaWVudC9zcmNcXGFwcFxcc2hhcmVkXFxjb21wb25lbnRzXFxoZWFkZXJcXGJyZWFkY3J1bWJzXFxxdWljay1hcHBcXHF1aWNrLWFwcC5jb21wb25lbnQuc2NzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtFQUNJLGNBQWMsRUFBQTtFQURsQjtJQUlRLGVBQWUsRUFBQSIsImZpbGUiOiJzcmMvYXBwL3NoYXJlZC9jb21wb25lbnRzL2hlYWRlci9icmVhZGNydW1icy9xdWljay1hcHAvcXVpY2stYXBwLmNvbXBvbmVudC5zY3NzIiwic291cmNlc0NvbnRlbnQiOlsiOmhvc3Qge1xyXG4gICAgZGlzcGxheTogYmxvY2s7XHJcblxyXG4gICAgLmJ0bi1hcHAge1xyXG4gICAgICAgIGN1cnNvcjogcG9pbnRlcjtcclxuICAgIH1cclxufSJdfQ== */
  </style>
  <style>
    [_nghost-wdd-c12] {
      display: block
    }

    [_nghost-wdd-c12] .menu-items,
    [_nghost-wdd-c12] .menu-item>.menu-items {
      list-style-type: none;
      overflow: hidden
    }

    [_nghost-wdd-c12] .menu-item a {
      display: flex;
      color: inherit;
      text-decoration: none;
      align-items: center
    }

    [_nghost-wdd-c12] .menu-item a .menu-title {
      flex: 1 0 auto
    }

    [dir=rtl] [_nghost-wdd-c12] .menu-item a .menu-title {
      text-align: right
    }

    [_nghost-wdd-c12] .menu-group span {
      display: flex
    }
  </style>
  <style>
    .calendar[_ngcontent-wdd-c14] nb-calendar[_ngcontent-wdd-c14] nb-card-header {
      display: none;
    }

    .calendar[_ngcontent-wdd-c14] nb-calendar[_ngcontent-wdd-c14] nb-card {
      width: 100%;
    }

    .calendar[_ngcontent-wdd-c14] nb-calendar-pageable-navigation {
      padding-top: 5px;
      padding-bottom: 5px;
    }

    .panel[_ngcontent-wdd-c14] .title[_ngcontent-wdd-c14] h3[_ngcontent-wdd-c14] {
      color: #417fb2;
      font-size: 14px;
      font-weight: 100;
    }

    /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvbW9kdWxlcy9kYXNoYm9hcmQvQzpcXFNvdXJjZVxcVmVydGljYWxDbGllbnQvc3JjXFxhcHBcXG1vZHVsZXNcXGRhc2hib2FyZFxcZGFzaGJvYXJkLmNvbXBvbmVudC5zY3NzIiwic3JjL2FwcC9tb2R1bGVzL2Rhc2hib2FyZC9DOlxcU291cmNlXFxWZXJ0aWNhbENsaWVudC9zcmNcXGFzc2V0c1xcc3R5bGVzXFxiYXNlXFxfdmFyaWFibGVzLnNjc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBRUE7RUFJZ0IsYUFBYSxFQUFBOztBQUo3QjtFQVFnQixXQUFXLEVBQUE7O0FBUjNCO0VBZ0JZLGdCQUFnQjtFQUNoQixtQkFBbUIsRUFBQTs7QUFNL0I7RUFHWSxjQzVCUTtFRDZCUixlQUFlO0VBQ2YsZ0JBQWdCLEVBQUEiLCJmaWxlIjoic3JjL2FwcC9tb2R1bGVzL2Rhc2hib2FyZC9kYXNoYm9hcmQuY29tcG9uZW50LnNjc3MiLCJzb3VyY2VzQ29udGVudCI6WyJAaW1wb3J0IFwiYmFzZS92YXJpYWJsZXNcIjtcclxuXHJcbi5jYWxlbmRhciB7XHJcbiAgICBuYi1jYWxlbmRhciB7XHJcbiAgICAgICAgOjpuZy1kZWVwIHtcclxuICAgICAgICAgICAgbmItY2FyZC1oZWFkZXIge1xyXG4gICAgICAgICAgICAgICAgZGlzcGxheTogbm9uZTtcclxuICAgICAgICAgICAgfVxyXG5cclxuICAgICAgICAgICAgbmItY2FyZCB7XHJcbiAgICAgICAgICAgICAgICB3aWR0aDogMTAwJTtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH1cclxuICAgIH1cclxuXHJcbiAgICA6Om5nLWRlZXAge1xyXG4gICAgICAgIG5iLWNhbGVuZGFyLXBhZ2VhYmxlLW5hdmlnYXRpb24ge1xyXG5cclxuICAgICAgICAgICAgcGFkZGluZy10b3A6IDVweDtcclxuICAgICAgICAgICAgcGFkZGluZy1ib3R0b206IDVweDtcclxuICAgICAgICB9XHJcbiAgICB9XHJcblxyXG59XHJcblxyXG4ucGFuZWwge1xyXG4gICAgLnRpdGxlIHtcclxuICAgICAgICBoMyB7XHJcbiAgICAgICAgICAgIGNvbG9yOiAkYnJhbmRDb2xvcjtcclxuICAgICAgICAgICAgZm9udC1zaXplOiAxNHB4O1xyXG4gICAgICAgICAgICBmb250LXdlaWdodDogMTAwO1xyXG4gICAgICAgIH1cclxuXHJcbiAgICB9XHJcbn0iLCIkYnJhbmRDb2xvcjogIzQxN2ZiMjtcclxuJHdoaXRlOiAjZmZmO1xyXG4kb3JhbmdlOiBvcmFuZ2U7XHJcbiJdfQ== */
  </style>
  <style>
    .announcements[_ngcontent-wdd-c15] {
      background-color: #019588;
    }

    .announcements[_ngcontent-wdd-c15] .title[_ngcontent-wdd-c15] {
      color: #fff;
    }

    .announcements[_ngcontent-wdd-c15] .announcements-item[_ngcontent-wdd-c15] {
      display: block;
      padding: 15px;
      margin: 10px 0;
      border-radius: 4px;
      background-color: #01776d;
      color: #fff;
      font-weight: 600;
    }

    .announcements[_ngcontent-wdd-c15] .announcements-item-link[_ngcontent-wdd-c15] {
      cursor: pointer;
      color: #01776d;
      background-color: #e6f4f3;
    }

    .list-group-gray[_ngcontent-wdd-c15] .list-group-item[_ngcontent-wdd-c15] {
      color: #417fb2;
      font-weight: bold;
      border-width: 0;
      background-color: #f1f1f1;
      margin: 5px 0;
      border-radius: 3px;
      font-size: 13px;
      transition: all 0.1s ease-out;
    }

    .list-group-gray[_ngcontent-wdd-c15] .list-group-item[_ngcontent-wdd-c15]:hover,
    .list-group-gray[_ngcontent-wdd-c15] .list-group-item.active[_ngcontent-wdd-c15] {
      color: #fff;
      background-color: #417fb2;
    }

    /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvbW9kdWxlcy9kYXNoYm9hcmQvY29tcG9uZW50cy9hbm5vdW5jZW1lbnRzL0M6XFxTb3VyY2VcXFZlcnRpY2FsQ2xpZW50L3NyY1xcYXBwXFxtb2R1bGVzXFxkYXNoYm9hcmRcXGNvbXBvbmVudHNcXGFubm91bmNlbWVudHNcXGFubm91bmNlbWVudHMuY29tcG9uZW50LnNjc3MiLCJzcmMvYXBwL21vZHVsZXMvZGFzaGJvYXJkL2NvbXBvbmVudHMvYW5ub3VuY2VtZW50cy9DOlxcU291cmNlXFxWZXJ0aWNhbENsaWVudC9zcmNcXGFzc2V0c1xcc3R5bGVzXFxiYXNlXFxfdmFyaWFibGVzLnNjc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBUUE7RUFDRSx5QkFQZSxFQUFBO0VBTWpCO0lBSUksV0FBVyxFQUFBO0VBSmY7SUFTTSxjQUFjO0lBQ2QsYUFBYTtJQUNiLGNBQWM7SUFDZCxrQkFBa0I7SUFDbEIseUJBQXlCO0lBQ3pCLFdBQVc7SUFDWCxnQkFBZ0IsRUFBQTtFQWZ0QjtNQWtCUSxlQUFlO01BQ2YsY0FBYztNQUNkLHlCQUF5QixFQUFBO0VBTWpDO0VBRUksY0NwQ2dCO0VEcUNoQixpQkFBaUI7RUFDakIsZUFBZTtFQUNmLHlCQUF5QjtFQUN6QixhQUFhO0VBQ2Isa0JBQWtCO0VBQ2xCLGVBQWU7RUFDZiw2QkFBNkIsRUFBQTtFQVRqQztJQWFNLFdDOUNNO0lEK0NOLHlCQ2hEYyxFQUFBIiwiZmlsZSI6InNyYy9hcHAvbW9kdWxlcy9kYXNoYm9hcmQvY29tcG9uZW50cy9hbm5vdW5jZW1lbnRzL2Fubm91bmNlbWVudHMuY29tcG9uZW50LnNjc3MiLCJzb3VyY2VzQ29udGVudCI6WyJAaW1wb3J0IFwiYmFzZS92YXJpYWJsZXNcIjtcclxuXHJcbiRiZ0NvbG9yOiAjMDE5NTg4O1xyXG5cclxuLnBhbmVsLWhlYWRlcntcclxuICBcclxufVxyXG5cclxuLmFubm91bmNlbWVudHMge1xyXG4gIGJhY2tncm91bmQtY29sb3I6ICRiZ0NvbG9yO1xyXG5cclxuICAudGl0bGUge1xyXG4gICAgY29sb3I6ICNmZmY7XHJcbiAgfVxyXG5cclxuICAuYW5ub3VuY2VtZW50cyB7XHJcbiAgICAmLWl0ZW0ge1xyXG4gICAgICBkaXNwbGF5OiBibG9jaztcclxuICAgICAgcGFkZGluZzogMTVweDtcclxuICAgICAgbWFyZ2luOiAxMHB4IDA7XHJcbiAgICAgIGJvcmRlci1yYWRpdXM6IDRweDtcclxuICAgICAgYmFja2dyb3VuZC1jb2xvcjogIzAxNzc2ZDtcclxuICAgICAgY29sb3I6ICNmZmY7XHJcbiAgICAgIGZvbnQtd2VpZ2h0OiA2MDA7XHJcblxyXG4gICAgICAmLWxpbmsge1xyXG4gICAgICAgIGN1cnNvcjogcG9pbnRlcjtcclxuICAgICAgICBjb2xvcjogIzAxNzc2ZDtcclxuICAgICAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjZTZmNGYzO1xyXG4gICAgICB9XHJcbiAgICB9XHJcbiAgfVxyXG59XHJcblxyXG4ubGlzdC1ncm91cC1ncmF5IHtcclxuICAubGlzdC1ncm91cC1pdGVtIHtcclxuICAgIGNvbG9yOiAkYnJhbmRDb2xvcjtcclxuICAgIGZvbnQtd2VpZ2h0OiBib2xkO1xyXG4gICAgYm9yZGVyLXdpZHRoOiAwO1xyXG4gICAgYmFja2dyb3VuZC1jb2xvcjogI2YxZjFmMTtcclxuICAgIG1hcmdpbjogNXB4IDA7XHJcbiAgICBib3JkZXItcmFkaXVzOiAzcHg7XHJcbiAgICBmb250LXNpemU6IDEzcHg7XHJcbiAgICB0cmFuc2l0aW9uOiBhbGwgMC4xcyBlYXNlLW91dDtcclxuXHJcbiAgICAmOmhvdmVyLFxyXG4gICAgJi5hY3RpdmUge1xyXG4gICAgICBjb2xvcjogJHdoaXRlO1xyXG4gICAgICBiYWNrZ3JvdW5kLWNvbG9yOiAkYnJhbmRDb2xvcjtcclxuICAgIH1cclxuICB9XHJcbn0iLCIkYnJhbmRDb2xvcjogIzQxN2ZiMjtcclxuJHdoaXRlOiAjZmZmO1xyXG4kb3JhbmdlOiBvcmFuZ2U7XHJcbiJdfQ== */
  </style>
  <style>
    [_nghost-wdd-c16] {
      position: relative;
      display: block;
    }

    [_nghost-wdd-c16] ngx-slick-carousel[_ngcontent-wdd-c16] {
      border-radius: 1rem;
      overflow: hidden;
    }

    [_nghost-wdd-c16] .slide[_ngcontent-wdd-c16] {
      height: 300px;
    }

    [_nghost-wdd-c16] .slide[_ngcontent-wdd-c16]:before {
      content: "";
      display: block;
      width: 100%;
      height: calc(100% - 50px);
      position: absolute;
      background: rgba(255, 255, 255, 0.01);
      top: 0px;
      left: 0px;
    }

    [_nghost-wdd-c16] .slide[_ngcontent-wdd-c16] .img-render[_ngcontent-wdd-c16] {
      position: relative;
      display: flex;
      height: calc(100% - 50px);
    }

    [_nghost-wdd-c16] .slide[_ngcontent-wdd-c16] .img-render[_ngcontent-wdd-c16] img[_ngcontent-wdd-c16] {
      width: 100%;
      -o-object-fit: cover;
      object-fit: cover;
    }

    [_nghost-wdd-c16] ngx-slick-carousel[_ngcontent-wdd-c16] .slick-dots {
      bottom: 70px;
    }

    [_nghost-wdd-c16] ngx-slick-carousel[_ngcontent-wdd-c16] .slick-dots button:before {
      font-size: 12px;
    }

    [_nghost-wdd-c16] ngx-slick-carousel[_ngcontent-wdd-c16] .slick-arrow {
      top: 45%;
      z-index: 1;
    }

    [_nghost-wdd-c16] ngx-slick-carousel[_ngcontent-wdd-c16] .slick-next {
      right: 15px;
    }

    [_nghost-wdd-c16] ngx-slick-carousel[_ngcontent-wdd-c16] .slick-prev {
      left: 15px;
    }

    [_nghost-wdd-c16] .title[_ngcontent-wdd-c16] {
      background: #fff;
      padding: 5px 10px;
    }

    [_nghost-wdd-c16] .title[_ngcontent-wdd-c16] a[_ngcontent-wdd-c16] {
      outline: none;
      display: block;
      width: calc(100% - 50px);
    }

    [_nghost-wdd-c16] .title[_ngcontent-wdd-c16] a[_ngcontent-wdd-c16] h3[_ngcontent-wdd-c16] {
      color: #417fb2;
      font-size: 14px;
      text-overflow: ellipsis;
      overflow: hidden;
      white-space: nowrap;
      font-weight: 100;
      text-align: center;
    }

    [_nghost-wdd-c16] .loadmore[_ngcontent-wdd-c16] {
      position: absolute;
      bottom: 15px;
      right: 10px;
    }

    [_nghost-wdd-c16] .loadmore[_ngcontent-wdd-c16] a[_ngcontent-wdd-c16] {
      font-size: 14px;
      font-weight: bold;
    }

    [_nghost-wdd-c16] .loadmore[_ngcontent-wdd-c16] a[_ngcontent-wdd-c16] nb-icon[_ngcontent-wdd-c16] {
      font-size: 14px;
    }

    /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvbW9kdWxlcy9kYXNoYm9hcmQvY29tcG9uZW50cy9ibG9ncy1zbGlkZXIvQzpcXFNvdXJjZVxcVmVydGljYWxDbGllbnQvc3JjXFxhcHBcXG1vZHVsZXNcXGRhc2hib2FyZFxcY29tcG9uZW50c1xcYmxvZ3Mtc2xpZGVyXFxibG9ncy1zbGlkZXIuY29tcG9uZW50LnNjc3MiLCJzcmMvYXBwL21vZHVsZXMvZGFzaGJvYXJkL2NvbXBvbmVudHMvYmxvZ3Mtc2xpZGVyL0M6XFxTb3VyY2VcXFZlcnRpY2FsQ2xpZW50L3NyY1xcYXNzZXRzXFxzdHlsZXNcXGJhc2VcXF92YXJpYWJsZXMuc2NzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFHQTtFQUNJLGtCQUFrQjtFQUNsQixjQUFjLEVBQUE7RUFGbEI7SUFLUSxtQkFBbUI7SUFDbkIsZ0JBQWdCLEVBQUE7RUFOeEI7SUFVUSxhQUFhLEVBQUE7RUFWckI7TUFhWSxXQUFXO01BQ1gsY0FBYztNQUNkLFdBQVc7TUFDWCx5QkFBeUI7TUFDekIsa0JBQWtCO01BQ2xCLHFDQUFxQztNQUNyQyxRQUFRO01BQ1IsU0FBUyxFQUFBO0VBcEJyQjtNQXdCWSxrQkFBa0I7TUFDbEIsYUFBYTtNQUNiLHlCQUF5QixFQUFBO0VBMUJyQztRQTZCZ0IsV0FBVztRQUNYLG9CQUFpQjtXQUFqQixpQkFBaUIsRUFBQTtFQTlCakM7SUFzQ2dCLFlBQVksRUFBQTtFQXRDNUI7TUEwQ3dCLGVBQWUsRUFBQTtFQTFDdkM7SUFnRGdCLFFBQVE7SUFDUixVQUFVLEVBQUE7RUFqRDFCO0lBcURnQixXQUFXLEVBQUE7RUFyRDNCO0lBeURnQixVQUFVLEVBQUE7RUF6RDFCO0lBK0RRLGdCQ2pFSTtJRGtFSixpQkFBaUIsRUFBQTtFQWhFekI7TUFtRVksYUFBYTtNQUNiLGNBQWM7TUFDZCx3QkFBd0IsRUFBQTtFQXJFcEM7UUF3RWdCLGNDM0VJO1FENEVKLGVBQWU7UUFDZix1QkFBdUI7UUFDdkIsZ0JBQWdCO1FBQ2hCLG1CQUFtQjtRQUNuQixnQkFBZ0I7UUFDaEIsa0JBQWtCLEVBQUE7RUE5RWxDO0lBb0ZRLGtCQUFrQjtJQUNsQixZQUFZO0lBQ1osV0FBVyxFQUFBO0VBdEZuQjtNQXlGWSxlQUFlO01BQ2YsaUJBQWlCLEVBQUE7RUExRjdCO1FBNkZnQixlQUNKLEVBQUEiLCJmaWxlIjoic3JjL2FwcC9tb2R1bGVzL2Rhc2hib2FyZC9jb21wb25lbnRzL2Jsb2dzLXNsaWRlci9ibG9ncy1zbGlkZXIuY29tcG9uZW50LnNjc3MiLCJzb3VyY2VzQ29udGVudCI6WyJAaW1wb3J0IFwiYmFzZS92YXJpYWJsZXNcIjtcclxuXHJcblxyXG46aG9zdCB7XHJcbiAgICBwb3NpdGlvbjogcmVsYXRpdmU7XHJcbiAgICBkaXNwbGF5OiBibG9jaztcclxuXHJcbiAgICBuZ3gtc2xpY2stY2Fyb3VzZWwge1xyXG4gICAgICAgIGJvcmRlci1yYWRpdXM6IDFyZW07XHJcbiAgICAgICAgb3ZlcmZsb3c6IGhpZGRlbjtcclxuICAgIH1cclxuXHJcbiAgICAuc2xpZGUge1xyXG4gICAgICAgIGhlaWdodDogMzAwcHg7XHJcblxyXG4gICAgICAgICY6YmVmb3JlIHtcclxuICAgICAgICAgICAgY29udGVudDogXCJcIjtcclxuICAgICAgICAgICAgZGlzcGxheTogYmxvY2s7XHJcbiAgICAgICAgICAgIHdpZHRoOiAxMDAlO1xyXG4gICAgICAgICAgICBoZWlnaHQ6IGNhbGMoMTAwJSAtIDUwcHgpO1xyXG4gICAgICAgICAgICBwb3NpdGlvbjogYWJzb2x1dGU7XHJcbiAgICAgICAgICAgIGJhY2tncm91bmQ6IHJnYmEoMjU1LCAyNTUsIDI1NSwgMC4wMSk7XHJcbiAgICAgICAgICAgIHRvcDogMHB4O1xyXG4gICAgICAgICAgICBsZWZ0OiAwcHg7XHJcbiAgICAgICAgfVxyXG5cclxuICAgICAgICAuaW1nLXJlbmRlciB7XHJcbiAgICAgICAgICAgIHBvc2l0aW9uOiByZWxhdGl2ZTtcclxuICAgICAgICAgICAgZGlzcGxheTogZmxleDtcclxuICAgICAgICAgICAgaGVpZ2h0OiBjYWxjKDEwMCUgLSA1MHB4KTtcclxuXHJcbiAgICAgICAgICAgIGltZyB7XHJcbiAgICAgICAgICAgICAgICB3aWR0aDogMTAwJTtcclxuICAgICAgICAgICAgICAgIG9iamVjdC1maXQ6IGNvdmVyO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgfVxyXG4gICAgfVxyXG5cclxuICAgIG5neC1zbGljay1jYXJvdXNlbCB7XHJcbiAgICAgICAgOjpuZy1kZWVwIHtcclxuICAgICAgICAgICAgLnNsaWNrLWRvdHMge1xyXG4gICAgICAgICAgICAgICAgYm90dG9tOiA3MHB4O1xyXG5cclxuICAgICAgICAgICAgICAgIGJ1dHRvbiB7XHJcbiAgICAgICAgICAgICAgICAgICAgJjpiZWZvcmUge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICBmb250LXNpemU6IDEycHg7XHJcbiAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICB9XHJcblxyXG4gICAgICAgICAgICAuc2xpY2stYXJyb3cge1xyXG4gICAgICAgICAgICAgICAgdG9wOiA0NSU7XHJcbiAgICAgICAgICAgICAgICB6LWluZGV4OiAxO1xyXG4gICAgICAgICAgICB9XHJcblxyXG4gICAgICAgICAgICAuc2xpY2stbmV4dCB7XHJcbiAgICAgICAgICAgICAgICByaWdodDogMTVweDtcclxuICAgICAgICAgICAgfVxyXG5cclxuICAgICAgICAgICAgLnNsaWNrLXByZXYge1xyXG4gICAgICAgICAgICAgICAgbGVmdDogMTVweDtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH1cclxuICAgIH1cclxuXHJcbiAgICAudGl0bGUge1xyXG4gICAgICAgIGJhY2tncm91bmQ6ICR3aGl0ZTtcclxuICAgICAgICBwYWRkaW5nOiA1cHggMTBweDtcclxuXHJcbiAgICAgICAgYSB7XHJcbiAgICAgICAgICAgIG91dGxpbmU6IG5vbmU7XHJcbiAgICAgICAgICAgIGRpc3BsYXk6IGJsb2NrO1xyXG4gICAgICAgICAgICB3aWR0aDogY2FsYygxMDAlIC0gNTBweCk7XHJcblxyXG4gICAgICAgICAgICBoMyB7XHJcbiAgICAgICAgICAgICAgICBjb2xvcjogJGJyYW5kQ29sb3I7XHJcbiAgICAgICAgICAgICAgICBmb250LXNpemU6IDE0cHg7XHJcbiAgICAgICAgICAgICAgICB0ZXh0LW92ZXJmbG93OiBlbGxpcHNpcztcclxuICAgICAgICAgICAgICAgIG92ZXJmbG93OiBoaWRkZW47XHJcbiAgICAgICAgICAgICAgICB3aGl0ZS1zcGFjZTogbm93cmFwO1xyXG4gICAgICAgICAgICAgICAgZm9udC13ZWlnaHQ6IDEwMDtcclxuICAgICAgICAgICAgICAgIHRleHQtYWxpZ246IGNlbnRlcjtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH1cclxuICAgIH1cclxuXHJcbiAgICAubG9hZG1vcmUge1xyXG4gICAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcclxuICAgICAgICBib3R0b206IDE1cHg7XHJcbiAgICAgICAgcmlnaHQ6IDEwcHg7XHJcblxyXG4gICAgICAgIGEge1xyXG4gICAgICAgICAgICBmb250LXNpemU6IDE0cHg7XHJcbiAgICAgICAgICAgIGZvbnQtd2VpZ2h0OiBib2xkO1xyXG5cclxuICAgICAgICAgICAgbmItaWNvbiB7XHJcbiAgICAgICAgICAgICAgICBmb250LXNpemU6IDE0cHhcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH1cclxuICAgIH1cclxufSIsIiRicmFuZENvbG9yOiAjNDE3ZmIyO1xyXG4kd2hpdGU6ICNmZmY7XHJcbiRvcmFuZ2U6IG9yYW5nZTtcclxuIl19 */
  </style>
  <style>
    .list-group-gray[_ngcontent-wdd-c17] .list-group-item[_ngcontent-wdd-c17] {
      color: #417fb2;
      font-weight: bold;
      border-width: 0;
      background-color: #f1f1f1;
      margin: 5px 0;
      border-radius: 3px;
      font-size: 13px;
      transition: all 0.1s ease-out;
    }

    .list-group-gray[_ngcontent-wdd-c17] .list-group-item[_ngcontent-wdd-c17]:hover,
    .list-group-gray[_ngcontent-wdd-c17] .list-group-item.active[_ngcontent-wdd-c17] {
      color: #fff;
      background-color: #417fb2;
    }

    /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvbW9kdWxlcy9kYXNoYm9hcmQvY29tcG9uZW50cy9yZWNlbnQtYXdhcmRzL0M6XFxTb3VyY2VcXFZlcnRpY2FsQ2xpZW50L3NyY1xcYXBwXFxtb2R1bGVzXFxkYXNoYm9hcmRcXGNvbXBvbmVudHNcXHJlY2VudC1hd2FyZHNcXHJlY2VudC1hd2FyZHMuY29tcG9uZW50LnNjc3MiLCJzcmMvYXBwL21vZHVsZXMvZGFzaGJvYXJkL2NvbXBvbmVudHMvcmVjZW50LWF3YXJkcy9DOlxcU291cmNlXFxWZXJ0aWNhbENsaWVudC9zcmNcXGFzc2V0c1xcc3R5bGVzXFxiYXNlXFxfdmFyaWFibGVzLnNjc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBRUE7RUFFUSxjQ0pZO0VES1osaUJBQWlCO0VBQ2pCLGVBQWU7RUFDZix5QkFBeUI7RUFDekIsYUFBYTtFQUNiLGtCQUFrQjtFQUNsQixlQUFlO0VBQ2YsNkJBQTZCLEVBQUE7RUFUckM7SUFhWSxXQ2RBO0lEZUEseUJDaEJRLEVBQUEiLCJmaWxlIjoic3JjL2FwcC9tb2R1bGVzL2Rhc2hib2FyZC9jb21wb25lbnRzL3JlY2VudC1hd2FyZHMvcmVjZW50LWF3YXJkcy5jb21wb25lbnQuc2NzcyIsInNvdXJjZXNDb250ZW50IjpbIkBpbXBvcnQgXCJiYXNlL3ZhcmlhYmxlc1wiO1xyXG5cclxuLmxpc3QtZ3JvdXAtZ3JheSB7XHJcbiAgICAubGlzdC1ncm91cC1pdGVtIHtcclxuICAgICAgICBjb2xvcjogJGJyYW5kQ29sb3I7XHJcbiAgICAgICAgZm9udC13ZWlnaHQ6IGJvbGQ7XHJcbiAgICAgICAgYm9yZGVyLXdpZHRoOiAwO1xyXG4gICAgICAgIGJhY2tncm91bmQtY29sb3I6ICNmMWYxZjE7XHJcbiAgICAgICAgbWFyZ2luOiA1cHggMDtcclxuICAgICAgICBib3JkZXItcmFkaXVzOiAzcHg7XHJcbiAgICAgICAgZm9udC1zaXplOiAxM3B4O1xyXG4gICAgICAgIHRyYW5zaXRpb246IGFsbCAwLjFzIGVhc2Utb3V0O1xyXG5cclxuICAgICAgICAmOmhvdmVyLFxyXG4gICAgICAgICYuYWN0aXZlIHtcclxuICAgICAgICAgICAgY29sb3I6ICR3aGl0ZTtcclxuICAgICAgICAgICAgYmFja2dyb3VuZC1jb2xvcjogJGJyYW5kQ29sb3I7XHJcbiAgICAgICAgfVxyXG4gICAgfVxyXG59IiwiJGJyYW5kQ29sb3I6ICM0MTdmYjI7XHJcbiR3aGl0ZTogI2ZmZjtcclxuJG9yYW5nZTogb3JhbmdlO1xyXG4iXX0= */
  </style>
  <style>
    .list-group-gray[_ngcontent-wdd-c18] .list-group-item[_ngcontent-wdd-c18] {
      color: #417fb2;
      font-weight: bold;
      border-width: 0;
      background-color: #f1f1f1;
      margin: 5px 0;
      border-radius: 3px;
      font-size: 13px;
      transition: all 0.1s ease-out;
    }

    .list-group-gray[_ngcontent-wdd-c18] .list-group-item[_ngcontent-wdd-c18]:hover,
    .list-group-gray[_ngcontent-wdd-c18] .list-group-item.active[_ngcontent-wdd-c18] {
      color: #fff;
      background-color: #417fb2;
    }

    /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvbW9kdWxlcy9kYXNoYm9hcmQvY29tcG9uZW50cy9xdWljay1saW5rL0M6XFxTb3VyY2VcXFZlcnRpY2FsQ2xpZW50L3NyY1xcYXBwXFxtb2R1bGVzXFxkYXNoYm9hcmRcXGNvbXBvbmVudHNcXHF1aWNrLWxpbmtcXHF1aWNrLWxpbmsuY29tcG9uZW50LnNjc3MiLCJzcmMvYXBwL21vZHVsZXMvZGFzaGJvYXJkL2NvbXBvbmVudHMvcXVpY2stbGluay9DOlxcU291cmNlXFxWZXJ0aWNhbENsaWVudC9zcmNcXGFzc2V0c1xcc3R5bGVzXFxiYXNlXFxfdmFyaWFibGVzLnNjc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBRUE7RUFFUSxjQ0pZO0VES1osaUJBQWlCO0VBQ2pCLGVBQWU7RUFDZix5QkFBeUI7RUFDekIsYUFBYTtFQUNiLGtCQUFrQjtFQUNsQixlQUFlO0VBQ2YsNkJBQTZCLEVBQUE7RUFUckM7SUFhWSxXQ2RBO0lEZUEseUJDaEJRLEVBQUEiLCJmaWxlIjoic3JjL2FwcC9tb2R1bGVzL2Rhc2hib2FyZC9jb21wb25lbnRzL3F1aWNrLWxpbmsvcXVpY2stbGluay5jb21wb25lbnQuc2NzcyIsInNvdXJjZXNDb250ZW50IjpbIkBpbXBvcnQgXCJiYXNlL3ZhcmlhYmxlc1wiO1xyXG5cclxuLmxpc3QtZ3JvdXAtZ3JheSB7XHJcbiAgICAubGlzdC1ncm91cC1pdGVtIHtcclxuICAgICAgICBjb2xvcjogJGJyYW5kQ29sb3I7XHJcbiAgICAgICAgZm9udC13ZWlnaHQ6IGJvbGQ7XHJcbiAgICAgICAgYm9yZGVyLXdpZHRoOiAwO1xyXG4gICAgICAgIGJhY2tncm91bmQtY29sb3I6ICNmMWYxZjE7XHJcbiAgICAgICAgbWFyZ2luOiA1cHggMDtcclxuICAgICAgICBib3JkZXItcmFkaXVzOiAzcHg7XHJcbiAgICAgICAgZm9udC1zaXplOiAxM3B4O1xyXG4gICAgICAgIHRyYW5zaXRpb246IGFsbCAwLjFzIGVhc2Utb3V0O1xyXG5cclxuICAgICAgICAmOmhvdmVyLFxyXG4gICAgICAgICYuYWN0aXZlIHtcclxuICAgICAgICAgICAgY29sb3I6ICR3aGl0ZTtcclxuICAgICAgICAgICAgYmFja2dyb3VuZC1jb2xvcjogJGJyYW5kQ29sb3I7XHJcbiAgICAgICAgfVxyXG4gICAgfVxyXG59IiwiJGJyYW5kQ29sb3I6ICM0MTdmYjI7XHJcbiR3aGl0ZTogI2ZmZjtcclxuJG9yYW5nZTogb3JhbmdlO1xyXG4iXX0= */
  </style>
  <style>
    .birthday[_ngcontent-wdd-c19] {
      background-image: url("/assets/images/birthdays.jpg");
      background-size: cover;
      min-height: 325px;
    }

    .title[_ngcontent-wdd-c19] {
      color: orange;
      text-align: center;
    }

    .birthday-list[_ngcontent-wdd-c19] {
      padding: 0px 25px;
    }

    .birthday-list[_ngcontent-wdd-c19] li[_ngcontent-wdd-c19] {
      color: #fff;
      font-weight: bold;
    }

    .birthday-label[_ngcontent-wdd-c19] {
      color: #417fb2;
      background-color: #fff;
      margin-bottom: 0;
      font-size: 14px;
      padding: 0 20px;
      position: relative;
      border-radius: 0 0 1rem;
    }

    .birthday-label[_ngcontent-wdd-c19] span[_ngcontent-wdd-c19] {
      position: relative;
      z-index: 1;
      left: -10px;
    }

    .birthday-label[_ngcontent-wdd-c19]:before {
      content: '';
      width: 37px;
      height: 40px;
      transform: skew(-30deg);
      background: white;
      position: absolute;
      top: 0px;
      left: -20px;
    }

    .birthday-label[_ngcontent-wdd-c19]:after {
      content: '';
      width: 10px;
      height: 40px;
      transform: skew(-30deg);
      background: orange;
      position: absolute;
      top: 0px;
      left: -40px;
    }

    /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvbW9kdWxlcy9kYXNoYm9hcmQvY29tcG9uZW50cy9iaXJ0aGRheXMvQzpcXFNvdXJjZVxcVmVydGljYWxDbGllbnQvc3JjXFxhcHBcXG1vZHVsZXNcXGRhc2hib2FyZFxcY29tcG9uZW50c1xcYmlydGhkYXlzXFxiaXJ0aGRheXMuY29tcG9uZW50LnNjc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7RUFDSSxxREFBcUQ7RUFDckQsc0JBQXNCO0VBQ3RCLGlCQUFpQixFQUFBOztBQUdyQjtFQUNJLGFBQWE7RUFDYixrQkFBa0IsRUFBQTs7QUFHdEI7RUFDSSxpQkFBaUIsRUFBQTs7QUFEckI7SUFJUSxXQUFXO0lBQ1gsaUJBQWlCLEVBQUE7O0FBSXpCO0VBQ0ksY0FBYztFQUNkLHNCQUFzQjtFQUN0QixnQkFBZ0I7RUFDaEIsZUFBZTtFQUNmLGVBQWU7RUFDZixrQkFBa0I7RUFDbEIsdUJBQXVCLEVBQUE7O0FBUDNCO0lBVVEsa0JBQWtCO0lBQ2xCLFVBQVU7SUFDVixXQUFXLEVBQUE7O0FBWm5CO0lBZ0JRLFdBQVc7SUFDWCxXQUFXO0lBQ1gsWUFBWTtJQUNaLHVCQUF1QjtJQUN2QixpQkFBaUI7SUFDakIsa0JBQWtCO0lBQ2xCLFFBQVE7SUFDUixXQUFXLEVBQUE7O0FBdkJuQjtJQTJCUSxXQUFXO0lBQ1gsV0FBVztJQUNYLFlBQVk7SUFDWix1QkFBdUI7SUFDdkIsa0JBQWtCO0lBQ2xCLGtCQUFrQjtJQUNsQixRQUFRO0lBQ1IsV0FBVyxFQUFBIiwiZmlsZSI6InNyYy9hcHAvbW9kdWxlcy9kYXNoYm9hcmQvY29tcG9uZW50cy9iaXJ0aGRheXMvYmlydGhkYXlzLmNvbXBvbmVudC5zY3NzIiwic291cmNlc0NvbnRlbnQiOlsiLmJpcnRoZGF5IHtcclxuICAgIGJhY2tncm91bmQtaW1hZ2U6IHVybCgnL2Fzc2V0cy9pbWFnZXMvYmlydGhkYXlzLmpwZycpO1xyXG4gICAgYmFja2dyb3VuZC1zaXplOiBjb3ZlcjtcclxuICAgIG1pbi1oZWlnaHQ6IDMyNXB4O1xyXG59XHJcblxyXG4udGl0bGUge1xyXG4gICAgY29sb3I6IG9yYW5nZTtcclxuICAgIHRleHQtYWxpZ246IGNlbnRlcjtcclxufVxyXG5cclxuLmJpcnRoZGF5LWxpc3Qge1xyXG4gICAgcGFkZGluZzogMHB4IDI1cHg7XHJcblxyXG4gICAgbGkge1xyXG4gICAgICAgIGNvbG9yOiAjZmZmO1xyXG4gICAgICAgIGZvbnQtd2VpZ2h0OiBib2xkO1xyXG4gICAgfVxyXG59XHJcblxyXG4uYmlydGhkYXktbGFiZWwge1xyXG4gICAgY29sb3I6ICM0MTdmYjI7XHJcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjZmZmO1xyXG4gICAgbWFyZ2luLWJvdHRvbTogMDtcclxuICAgIGZvbnQtc2l6ZTogMTRweDtcclxuICAgIHBhZGRpbmc6IDAgMjBweDtcclxuICAgIHBvc2l0aW9uOiByZWxhdGl2ZTtcclxuICAgIGJvcmRlci1yYWRpdXM6IDAgMCAxcmVtO1xyXG5cclxuICAgIHNwYW4ge1xyXG4gICAgICAgIHBvc2l0aW9uOiByZWxhdGl2ZTtcclxuICAgICAgICB6LWluZGV4OiAxO1xyXG4gICAgICAgIGxlZnQ6IC0xMHB4O1xyXG4gICAgfVxyXG5cclxuICAgICY6YmVmb3JlIHtcclxuICAgICAgICBjb250ZW50OiAnJztcclxuICAgICAgICB3aWR0aDogMzdweDtcclxuICAgICAgICBoZWlnaHQ6IDQwcHg7XHJcbiAgICAgICAgdHJhbnNmb3JtOiBza2V3KC0zMGRlZyk7XHJcbiAgICAgICAgYmFja2dyb3VuZDogd2hpdGU7XHJcbiAgICAgICAgcG9zaXRpb246IGFic29sdXRlO1xyXG4gICAgICAgIHRvcDogMHB4O1xyXG4gICAgICAgIGxlZnQ6IC0yMHB4O1xyXG4gICAgfVxyXG5cclxuICAgICY6YWZ0ZXIge1xyXG4gICAgICAgIGNvbnRlbnQ6ICcnO1xyXG4gICAgICAgIHdpZHRoOiAxMHB4O1xyXG4gICAgICAgIGhlaWdodDogNDBweDtcclxuICAgICAgICB0cmFuc2Zvcm06IHNrZXcoLTMwZGVnKTtcclxuICAgICAgICBiYWNrZ3JvdW5kOiBvcmFuZ2U7XHJcbiAgICAgICAgcG9zaXRpb246IGFic29sdXRlO1xyXG4gICAgICAgIHRvcDogMHB4O1xyXG4gICAgICAgIGxlZnQ6IC00MHB4O1xyXG4gICAgfVxyXG59Il19 */
  </style>
  <style>
    [_nghost-wdd-c20] {
      display: flex;
      flex-direction: column
    }
  </style>
  <style>
    [_nghost-wdd-c22] {
      appearance: none;
      text-align: center;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      white-space: nowrap;
      vertical-align: middle;
      user-select: none
    }

    [_nghost-wdd-c22]:hover,
    [_nghost-wdd-c22]:focus {
      text-decoration: none
    }

    .full-width[_nghost-wdd-c22] {
      width: 100%
    }

    [_nghost-wdd-c22] nb-icon {
      vertical-align: top
    }

    [dir=ltr] .icon-start[_nghost-wdd-c22]:not(.icon-end) nb-icon {
      margin-right: .75rem
    }

    [dir=rtl] .icon-start[_nghost-wdd-c22]:not(.icon-end) nb-icon {
      margin-left: .75rem
    }

    [dir=ltr] .icon-end[_nghost-wdd-c22]:not(.icon-start) nb-icon {
      margin-left: .75rem
    }

    [dir=rtl] .icon-end[_nghost-wdd-c22]:not(.icon-start) nb-icon {
      margin-right: .75rem
    }

    .transitions[_nghost-wdd-c22] {
      transition-duration: 0.15s;
      transition-property: background-color, border-color, box-shadow, color;
      transition-timing-function: ease-in
    }
  </style>
</head>

<body class="c-app nb-theme-default" style="height:5px; background-color:red">
 <div _ngcontent-wdd-c9="" class="breadcrumbs py-2">
                            <div _ngcontent-wdd-c9="" class="d-flex align-items-center">
                   
                              <div _ngcontent-wdd-c9="" class="ml-auto">
                                <ul _ngcontent-wdd-c9="" class="list-app mb-0">
                                  <li _ngcontent-wdd-c9="">
                                    <app-quick-app _ngcontent-wdd-c9="" imgurl="assets/images/icons/outlook.png" name="Outlook.com" url="mailto:" _nghost-wdd-c11="" ng-reflect-url="mailto:" ng-reflect-img-url="assets/images/icons/outlook.pn" ng-reflect-name="Outlook.com">
                                      <a _ngcontent-wdd-c11="" class="btn-app d-flex align-items-center" target="_blank" href="http://10.100.1.52:3000/redirect?url=mailto:"><img _ngcontent-wdd-c11="" class="mr-1" width="20" src="./Vertical_files/outlook.png"><span _ngcontent-wdd-c11="">Outlook.com</span></a></app-quick-app>
                                  </li>
                                  <li _ngcontent-wdd-c9="">
                                    <app-quick-app _ngcontent-wdd-c9="" imgurl="assets/images/icons/amazon.png" name="Amazon" url="https://www.amazon.com/" _nghost-wdd-c11="" ng-reflect-url="https://www.amazon.com/" ng-reflect-img-url="assets/images/icons/amazon.png" ng-reflect-name="Amazon"><a _ngcontent-wdd-c11="" class="btn-app d-flex align-items-center" target="_blank" href="http://10.100.1.52:3000/redirect?url=https://www.amazon.com/"><img _ngcontent-wdd-c11="" class="mr-1" width="20" src="./Vertical_files/amazon.png"><span _ngcontent-wdd-c11="">Amazon</span></a></app-quick-app>
                                  </li>
                                  <li _ngcontent-wdd-c9="">
                                    <app-quick-app _ngcontent-wdd-c9="" imgurl="assets/images/icons/microsoft_store.png" name="Microsoft Store" url="https://www.amazon.com/" _nghost-wdd-c11="" ng-reflect-url="https://www.amazon.com/" ng-reflect-img-url="assets/images/icons/microsoft_" ng-reflect-name="Microsoft Store"><a _ngcontent-wdd-c11="" class="btn-app d-flex align-items-center" target="_blank" href="http://10.100.1.52:3000/redirect?url=https://www.amazon.com/"><img _ngcontent-wdd-c11="" class="mr-1" width="20" src="./Vertical_files/microsoft_store.png"><span _ngcontent-wdd-c11="">Microsoft Store</span></a></app-quick-app>
                                  </li>
                                  <li _ngcontent-wdd-c9="">
                                    <app-quick-app _ngcontent-wdd-c9="" imgurl="assets/images/icons/shoping.png" name="Shopping" _nghost-wdd-c11="" ng-reflect-img-url="assets/images/icons/shoping.pn" ng-reflect-name="Shopping"><a _ngcontent-wdd-c11="" class="btn-app d-flex align-items-center" target="_blank" href="http://10.100.1.52:3000/redirect?url="><img _ngcontent-wdd-c11="" class="mr-1" width="20" src="./Vertical_files/shoping.png"><span _ngcontent-wdd-c11="">Shopping</span></a></app-quick-app>
                                  </li>
                                  <li _ngcontent-wdd-c9="">
                                    <app-quick-app _ngcontent-wdd-c9="" imgurl="assets/images/icons/facebook.png" name="Facebook" _nghost-wdd-c11="" ng-reflect-img-url="assets/images/icons/facebook.p" ng-reflect-name="Facebook"><a _ngcontent-wdd-c11="" class="btn-app d-flex align-items-center" target="_blank" href="http://10.100.1.52:3000/redirect?url="><img _ngcontent-wdd-c11="" class="mr-1" width="20" src="./Vertical_files/facebook.png"><span _ngcontent-wdd-c11="">Facebook</span></a></app-quick-app>
                                  </li>
                                  <li _ngcontent-wdd-c9="">
                                    <app-quick-app _ngcontent-wdd-c9="" imgurl="assets/images/icons/ebay.png" name="Ebay" _nghost-wdd-c11="" ng-reflect-img-url="assets/images/icons/ebay.png" ng-reflect-name="Ebay"><a _ngcontent-wdd-c11="" class="btn-app d-flex align-items-center" target="_blank" href="http://10.100.1.52:3000/redirect?url="><img _ngcontent-wdd-c11="" class="mr-1" width="20" src="./Vertical_files/ebay.png"><span _ngcontent-wdd-c11="">Ebay</span></a></app-quick-app>
                                  </li>
                                  <li _ngcontent-wdd-c9="">
                                    <app-quick-app _ngcontent-wdd-c9="" imgurl="assets/images/icons/game_online.png" name="Online Games" _nghost-wdd-c11="" ng-reflect-img-url="assets/images/icons/game_onlin" ng-reflect-name="Online Games"><a _ngcontent-wdd-c11="" class="btn-app d-flex align-items-center" target="_blank" href="http://10.100.1.52:3000/redirect?url="><img _ngcontent-wdd-c11="" class="mr-1" width="20" src="./Vertical_files/game_online.png"><span _ngcontent-wdd-c11="">Online Games</span></a></app-quick-app>
                                  </li>
                                  <li _ngcontent-wdd-c9="">
                                    <app-quick-app _ngcontent-wdd-c9="" imgurl="assets/images/icons/rewards.png" name="Rewards" _nghost-wdd-c11="" ng-reflect-img-url="assets/images/icons/rewards.pn" ng-reflect-name="Rewards"><a _ngcontent-wdd-c11="" class="btn-app d-flex align-items-center" target="_blank" href="http://10.100.1.52:3000/redirect?url="><img _ngcontent-wdd-c11="" class="mr-1" width="20" src="./Vertical_files/rewards.png"><span _ngcontent-wdd-c11="">Rewards</span></a></app-quick-app>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
  <!--<script type="text/javascript" src="./Vertical_files/runtime.js.download"></script>-->
  <!--<script type="text/javascript" src="./Vertical_files/polyfills.js.download"></script>-->
  <!--<script type="text/javascript" src="./Vertical_files/styles.js.download"></script>-->
  <!--<script type="text/javascript" src="./Vertical_files/scripts.js.download"></script>-->
  <!--<script type="text/javascript" src="./Vertical_files/vendor.js.download"></script>-->
  <!--<script type="text/javascript" src="./Vertical_files/main.js.download"></script>-->

</body>

</html>

<html>
   <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
   <script language="JavaScript" type="text/javascript"> var $jQuery = jQuery.noConflict(); </script>
 
   <script type="text/javascript">
     jQuery(document).ready(function()
     {
         jQuery(".intralaunch_link").on("click", function (event) 
         {      
           event.preventDefault(); // Recommended to stop the link from doing anything else
           document.dispatchEvent(new CustomEvent('funcIntraLaunch',
           {
              'detail': { task: jQuery(this).data('task'),
                          program: jQuery(this).data('program'),
                          switches: jQuery(this).data('switches'),
                          windowstate: jQuery(this).data('windowstate'),
                          showerrors: jQuery(this).data('showerrors'),
                          log: jQuery(this).data('log'),
                          options: jQuery(this).data('options'),
                          recallapp: jQuery(this).data('recallapp'),
                          workingfolder: jQuery(this).data('workingfolder'),
                          playsound: jQuery(this).data('playsound')
                        } })); 
         });
     });
   </script>
 
   <body> <div style="font-size:50px">
    
     <a href="#" class="intralaunch_link" data-task="run" data-program="%MY_DOCUMENTS%\\Important Letter.docx" data-switches="" data-windowstate="max" data-showerrors="true" data-log="" data-recallapp="" data-workingfolder="" data-playsound="">ERP</a>
      <a href="#" class="intralaunch_link" data-task="run" data-program="%MY_DOCUMENTS%\\Important Letter.docx" data-switches="" data-windowstate="max" data-showerrors="true" data-log="" data-recallapp="" data-workingfolder="" data-playsound="">Start new document</a>

 <br>
     <a href="#" class="intralaunch_link" data-task="macro" data-program="PRINTER_MANAGEMENT_FOLDER" data-switches="" data-windowstate="" data-showerrors="true" data-log="C:\\Windows\\log.txt" data-recallapp="" data-workingfolder="" data-playsound="">Manage Printers</a>
 <br>
     <a href="#" class="intralaunch_link" data-task="run" data-program="explorer.exe" data-switches="%MY_PICTURES%" data-windowstate="max" data-showerrors="true" data-log="" data-recallapp="" data-workingfolder="" data-playsound="C:\\Windows\\sound.wav">Open Windows File Explorer in 'My Pictures'</a>
  </div> </body>
</html>









<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>LocalConnector - chamara2536</title>

		<meta name="description" content="A full working example of IntraLaunch's capabilities and features.'" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

        <!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/prettify.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/fonts/fonts.googleapis.com.css" />
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
		<link rel="stylesheet" href="assets/css/main.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->

	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>


					<div class="page-content">
						<div class="page-header">
							<!--<h1>Applications</h1>-->
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-sm-11 welcometext">
                              
                                        <table width="100%">
                                           <tr>
                                                <td width="20%" valign=top align=center class="td_lineheight"><a href="#" class="intralaunch_link demolink" title="Run: explorer" data-task="run" data-program="C:\\Program Files (x86)\\Viewpoint Construction Software\\Vista\\bin\\Viewpoint.Vista.Launcher.exe" data-switches="" data-log="" data-recallapp="" data-workingfolder="" data-playsound="" data-showerrors="true"><img src="http://www.particlesoftware.com/examples/complete/assets/images/icon_explorer.png" border=0 width="64" height="64" class="iconimage"><BR>ERP<BR>Soft</a></td>
                                             <td width="20%" valign=top align=center class="td_lineheight"><a href="#" class="intralaunch_link demolink" title="Run: explorer" data-task="run" data-program="explorer" data-switches="" data-log="" data-recallapp="" data-workingfolder="" data-playsound="" data-showerrors="true"><img src="http://www.particlesoftware.com/examples/complete/assets/images/icon_explorer.png" border=0 width="64" height="64" class="iconimage"><BR>Windows<BR>File Explorer</a></td>
                                             <td width="20%" valign=top align=center class="td_lineheight"><a href="#" class="intralaunch_link demolink" title="Run: mspaint.exe" data-task="run" data-program="mspaint.exe" data-switches="" data-log="" data-recallapp="" data-workingfolder="" data-playsound="" data-showerrors="true"><img src="http://www.particlesoftware.com/examples/complete/assets/images/icon_paint.png" border=0 width="64" height="64" class="iconimage"><BR>Microsoft Paint</a></a></td>
                                             <td width="20%" valign=top align=center class="td_lineheight"><a href="#" class="intralaunch_link demolink" title="Run: explorer %MY_MUSIC%" data-task="run" data-program="explorer" data-switches="%MY_MUSIC%" data-log="" data-recallapp="" data-workingfolder="" data-showerrors="true" data-playsound=""><img src="http://www.particlesoftware.com/examples/complete/assets/images/icon_music.png" border=0 width="64" height="64" class="iconimage"><BR>Browse 'My Music'</a></td>
                                             <td width="20%" valign=top align=center class="td_lineheight"><a href="#" class="intralaunch_link demolink" title="Run: notepad.exe" data-task="run" data-program="notepad" data-switches="" data-log="" data-recallapp="" data-workingfolder="" data-playsound="" data-showerrors="true" data-windowstate="min"><img src="http://www.particlesoftware.com/examples/complete/assets/images/icon_notepad.png" border=0 width="64" height="64" class="iconimage"><BR>Notepad<BR><span class="smallicontext">(Minimized)</span></a></td>
                                             <td width="20%" valign=top align=center class="td_lineheight"><a href="#" class="intralaunch_link demolink" title="Run: excel" data-task="find" data-program="excel" data-switches="" data-log="" data-recallapp="" data-workingfolder="" data-playsound="" data-showerrors="true"><img src="http://www.particlesoftware.com/examples/complete/assets/images/icon_excel.png" border=0 width="64" height="64" class="iconimage"><BR>Microsoft Excel</a></td>
                                           </tr>
                                        <table>
                                        <BR><BR><BR>
                                        <table width="100%">
                                           <tr>
                                             <td width="20%" valign=top align=center class="td_lineheight"><a href="#" class="intralaunch_link demolink" title="Run: http://www.particlesoftware.com/temp/Test%20PDF.pdf" data-task="run" data-program="http://www.particlesoftware.com/temp/Test%20PDF.pdf" data-switches="" data-log="" data-recallapp="" data-workingfolder="" data-playsound="" data-showerrors="true"><img src="http://www.particlesoftware.com/examples/complete/assets/images/icon_adobe.png" border=0 width="64" height="64" class="iconimage"><BR>Acrobat PDF</a><BR><span class="smallicontext">(Directly via HTTP)</span></td>
                                             <td width="20%" valign=top align=center class="td_lineheight"><a href="#" class="intralaunch_link demolink" title="Run: http://www.particlesoftware.com/temp/Simple%20Application.exe" data-task="run" data-program="http://www.particlesoftware.com/temp/Simple%20Application.exe" data-switches="" data-log="" data-recallapp="" data-workingfolder="" data-playsound="" data-showerrors="true"><img src="http://www.particlesoftware.com/examples/complete/assets/images/icon_exe.png" border=0 width="64" height="64" class="iconimage"><BR>Sample Executable</a><BR><span class="smallicontext">(Directly via HTTP)</span></td>
                                             <td width="20%" valign=top align=center class="td_lineheight"><a href="#" class="intralaunch_link demolink" title="Run: cmd" data-task="run" data-program="cmd" data-switches="" data-log="" data-recallapp="" data-workingfolder="c:\\" data-playsound="" data-showerrors="true"><img src="http://www.particlesoftware.com/examples/complete/assets/images/icon_cmd.png" border=0 width="64" height="64" class="iconimage"><BR>Command Prompt</a></td>
                                             <td width="20%" valign=top align=center class="td_lineheight"><a href="#" class="intralaunch_link demolink" title="Run: notepad.exe %WIN_DIR%\WindowsUpdate.log" data-task="run" data-program="notepad" data-switches="%WIN_DIR%\WindowsUpdate.log" data-log="" data-recallapp="" data-workingfolder="" data-playsound="" data-showerrors="true"><img src="http://www.particlesoftware.com/examples/complete/assets/images/icon_notepad.png" border=0 width="64" height="64" class="iconimage"><BR>Notepad</a><BR><span class="smallicontext">(Also specify the file)</span></td>
                                             <td width="20%" valign=top align=center class="td_lineheight"><a href="#" class="intralaunch_link demolink" title="Run: http://www.particlesoftware.com/temp/TestWord.doc" data-task="run" data-program="http://www.particlesoftware.com/temp/TestWord.doc" data-switches="" data-log="" data-recallapp="" data-workingfolder="" data-playsound="" data-showerrors="true"><img src="http://www.particlesoftware.com/examples/complete/assets/images/icon_word.png" border=0 width="64" height="64" class="iconimage"><BR>Microsoft Word</a><BR><span class="smallicontext">(Directly via HTTP)</span></td>
                                           </tr>
                                        <table>
                                        <BR><BR><BR>
									</div>
                                    <div class="col-sm-1" id="drivebox">
                                    </div><!-- /.col -->
								</div><!-- /.row -->


								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							
							<span class="bottomtext">LocalConnector &copy; <a href="http://pro.cssbis.com/team.php" target="_blank">chamara2536</a> 2020</span>
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery.2.1.1.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery.1.11.1.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="assets/js/jquery-ui.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/jquery.easypiechart.min.js"></script>
		<script src="assets/js/jquery.sparkline.min.js"></script>
		<script src="assets/js/jquery.flot.min.js"></script>
		<script src="assets/js/jquery.flot.pie.min.js"></script>
		<script src="assets/js/jquery.flot.resize.min.js"></script>

		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>
  		<script src="assets/js_moved/index.js"></script>

		<!-- page specific plugin scripts -->
		<script src="assets/js/prettify.min.js"></script>

        <script type="text/javascript" src="assets/js_moved/zebra/public/javascript/zebra_tooltips.js"></script>
        <link rel="stylesheet" href="assets/js_moved/zebra/public/css/zebra_tooltips.css" type="text/css">

        <script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
        <script language="JavaScript" type="text/javascript"> var $jQuery = jQuery.noConflict(); </script>
        <script src="assets/js_moved/filesize.min.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function ()
            {
                // Ignore this, just tooltip junk 
                // Hide the tooltip forever after it is clicked
                jQuery(".hide_this_tip").on("click", function (event) { event.preventDefault(); tipAllTips.hide($(this), true); });

                // Add the tooltips for some IntraLaunch objects, just ignore this (http://stefangabos.ro/jquery/zebra-tooltips/)
                var tipAllTips = new $.Zebra_Tooltips($('.tooltips'), { 'background_color': '#D15B47', 'color': '#FEFEFE', 'prerender': true, 'default_position': 'below', 'vertical_offset': '-10' });
            });
        </script>


        <!-- IntraLaunch scripts -->
        <script type="text/javascript">
            jQuery(document).ready(function ()
            {

                /***
                * IntraLaunch object
                ***/
                jQuery(".intralaunch_link").on("click", function (event)
                {
                    event.preventDefault();
                    document.dispatchEvent(new CustomEvent('funcIntraLaunch',
                    {
                        'detail': {
                            task: jQuery(this).data('task'),
                            program: jQuery(this).data('program'),
                            switches: jQuery(this).data('switches'),
                            windowstate: jQuery(this).data('windowstate'),
                            showerrors: jQuery(this).data('showerrors'),
                            log: jQuery(this).data('log'),
                            options: jQuery(this).data('options'),
                            recallapp: jQuery(this).data('recallapp'),
                            workingfolder: jQuery(this).data('workingfolder'),
                            playsound: jQuery(this).data('playsound')
                        }
                    }));
                });

            });


            
            jQuery(function($) 
            {
                window.prettyPrint && prettyPrint();
                $('#id-check-horizontal').removeAttr('checked').on('click', function(){
                    $('#dt-list-1').toggleClass('dl-horizontal').prev().html(this.checked ? '&lt;dl class="dl-horizontal"&gt;' : '&lt;dl&gt;');
                });
            })
        </script>

        

   <script type="text/javascript">
       jQuery(document).ready(function() 
       { 
          ///////////////////////////////////////////////////////////////////////////////////////////////
          // Check to see if the IntraLaunch extension is install, and if so is the connector responding
          ///////////////////////////////////////////////////////////////////////////////////////////////
          var bExtensionInstalled = false;

          // When checking extension this is called after to set the above variable to true/false
          jQuery.extend ({ funcCheckIntraLaunchReturn: function (response) { if (response == 1) { bExtensionInstalled = true; } else { bExtensionInstalled = false; } } }); 

          // When checking the connector this is called after to see if it's missing and if so jump to a new URL via Javascript
          jQuery.extend
          ({
              funcCheckIntraLaunchConnectorReturn: function (responseIntraLaunchLastOpType, responseIntraLaunchDOMElement, responseIntraLaunchDataSet) 
              {
                // If IntraLaunch passes the lock test (the current web page domain/URL is in the extensions Options) then 
                // CONNECTOR_MISSING means the connector really is not found or broken. CONNECTOR_RESTRICTED means IntraLaunch
                // did not pass the lock test and therefore the extension will not even test for IntraLaunch even if it is installed
                // and working properly for security reasons.
                if (responseIntraLaunchLastOpType == "check_connector" && responseIntraLaunchDataSet == "CONNECTOR_RESTRICTED") { location.href = 'http://www.particlesoftware.com/examples/complete/install.html?restricted=1'; }
                else if (responseIntraLaunchLastOpType == "check_connector" && responseIntraLaunchDataSet == "CONNECTOR_MISSING") { location.href = 'http://www.particlesoftware.com/examples/complete/install.html'; }
                else { jQuery('#main_box').fadeIn(200); jQuery('#loadingmessage').html('&nbsp;overview &amp; storage statistics'); } 
              }
          }); 

          try { document.dispatchEvent(new CustomEvent('funcCheckIntraLaunch')); } catch (e) { }

          // Check and see what funcCheckIntraLaunch returned a few seconds later
          window.setTimeout(function() { funcCheckIntraLaunchDelay(bExtensionInstalled); }, 2000);

          function funcCheckIntraLaunchDelay(bExtensionInstalled) 
          {
            // IntraLaunch extension not responding, must not be installed
            if (!bExtensionInstalled) { location.href = 'http://www.particlesoftware.com/examples/complete/install.html'; }
            else
            {
               // Extension is install, check if it's connector is installed and responsive
               try { document.dispatchEvent(new CustomEvent('funcCheckIntraLaunchConnector', { 'detail': { task: 'check_connector' } })); } 
               catch (e) { }
            }
          } 
       });
   </script>


        	</body>
</html>
