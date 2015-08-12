<?php if(!defined('KIRBY')) exit ?>

title: Recipe
pages: false
files:
  type: image
  sortable: true
fields:
  main: 
    label: Name
    type: headline
  title:
    label: Title
    type:  text
  russianName:
    label: Russian Name
    type:  text

  writing: 
    label: Writing
    type: headline
  blurb:
    label: Blurb
    type:  textarea
    help:  Short description of the meal (2-3 sentences max)
  history:
    label: History
    type:  textarea
    help:  Where this meal comes from, why it's special to us

  cooking:
    label: Cooking
    type: headline
  ingredients:
    label: Ingredients (one per line)
    type:  textarea
  instructions:
    label: Cooking Instructions
    type:  textarea

  extras: 
    label: Extras
    type: headline

  tags:
    label: Tags
    type:  tags
  prepTime:
    label: Prep Time (min)
    type:  number
    width: 1/4
  cookTime:
    label: Cook Time (min)
    type:  number
    width: 1/4
