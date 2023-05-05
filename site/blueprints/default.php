<?php if(!defined('KIRBY')) exit ?>

title: Page
pages:
    template:
        - texto
        - texto+img
        - galeria
        - link
files:
    sortable: true
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
  extsection:
    label: External section
    type: checkbox
