<?php if(!defined('KIRBY')) exit ?>

title: Blog
pages:
  template:
      - blogentry
files: false
fields:
  title:
    label: Titulo
    type:  text
  info:
    label: Info
    type: textarea
  color:
    label: Color
    type:  text
  colortitle:
    label: Color del Título
    type:  text
  extsection:
    label: External section
    type: checkbox
