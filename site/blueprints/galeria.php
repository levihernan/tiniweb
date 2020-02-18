<?php if(!defined('KIRBY')) exit ?>

title: Galeria
pages: false
files:
  sortable: true
  fields:
    hidden:
        label: Hidden
        type: checkbox
fields:
  title:
    label: Titulo
    type:  text
  info:
    label: Info
    type:  textarea
  body:
    label: Texto
    type: textarea
  description:
    label: Descripción (Facebook)
    type:  textarea
  featured:
    label: Featured
    type: checkbox