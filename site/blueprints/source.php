<?php if(!defined('KIRBY')) exit ?>

title: Source
pages: false
files: true
fields:
  autoid:
    type: text
    readonly: true
  title:
    label: Title
    type:  text
  read:
    label: Read?
    type: toggle
    default: false
  authors:
    label: Authors
    type: tags
  publisher:
    label: Publisher
    type: tags
  year:
    label: year
    type: text
  title:
    label: Title
    type:  text
  category:
    label: Type
    type: radio
    options:
      book: Book
      article: Article
      webpage: Webpage
      image: Image
      video: Video
      audio: Audio
      lecture: Lecture
  references:
    label: References
    type: multiselect
    search: true
    options: query
    query: 
      page: sources
      fetch: children
      text: '{{title}} ({{authors}})'
  tags:
    label: Tags
    type: tags
  highlights:
    label: Highlights
    type: structure
    style: table
    entry: >
      {{content}}<br />
      {{comment}}<br />
      {{location}}
    fields:
      location:
        label: Location
        type: text
      content:
        label: Content
        type: textarea
      comment:
        label: Comment
        type: textarea