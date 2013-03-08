<?php if(!defined('KIRBY')) exit ?>

# Journal Entry

title: Journal Entry
pages: false
files: true
fields:
  title: 
    label: Title
    type:  text
  date:
    label: Publish Date
    type: date
    format: dd.mm.yy
  location:
    label: Location
    type:  textarea
  text: 
    label: Entry Text
    type:  textarea
    size:  large
  