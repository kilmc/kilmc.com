<?php if(!defined('KIRBY')) exit ?>

# Blog Post Blueprint

title: Blog Post
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
  preface:
    label: Preface
    type:  textarea
  text: 
    label: Text
    type:  textarea
    size:  large
  