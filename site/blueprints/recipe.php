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
    width: 1/2
  blurbRussian:
    type: textArea
    label: Описание
    width: 1/2
  history:
    label: History
    type:  textarea
    help:  Where this meal comes from, why it's special to us
    width: 1/2
  historyRussian:
    label: История
    type: textarea
    width: 1/2

  cooking:
    label: Cooking
    type: headline
  ingredients:
    label: Ingredients (one per line)
    type:  textarea
    width: 1/2
  ingredientsRussian:
    label: Ингредиенты
    type: textarea
    width: 1/2
  instructions:
    label: Cooking Instructions
    type:  textarea
    width: 1/2
  instructionsRussian:
    label: Способ приготовления
    type: textarea
    width: 1/2

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
