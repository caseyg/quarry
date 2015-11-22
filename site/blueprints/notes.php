<?php if(!defined('KIRBY')) exit ?>

title: Notes
pages:
  template: note
  num: date
  text: '{{title}}'
files: false
fields:
  title:
    label: Title
    type:  text