<?php if(!defined('KIRBY')) exit ?>

title: Texto con imágen
pages: false
files:
  sortable: true
  fields:
    tile:
        label: Hidden
        type: checkbox
fields:
  title:
    label: Titulo
    type:  text
  info:
    label: Info
    type:  text
  color:
    label: Color
    type:  text
  colortitle:
    label: Color del Título
    type:  text
  text:
    label: Texto
    type:  textarea
  description:
    label: Descripción (Facebook)
    type:  textarea
  featured:
    label: Featured
    type: checkbox
