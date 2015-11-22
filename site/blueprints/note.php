<?php if(!defined('KIRBY')) exit ?>

title: Note
pages: false
fields:
  note:
    label: Note
    type:  textarea
  source:
    label: Related Source
    type: multiselect
    options: query
    query: 
      page: sources
      fetch: children
      text: '{{title}} — {{authors}}'