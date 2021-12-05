<?php

$styleGuideData = [
  [
    "id" => "micro-voice",
    "type" => "type pattern",

  ],
  [
    "id" => "quiet-voice",
    "type" => "type pattern",
  ],
  [
    "id" => "description-voice",
    "type" => "type pattern",
  ],
  [
    "id" => "regular-voice",
    "type" => "type pattern",
  ],
  [
    "id" => "stern-voice",
    "type" => "type pattern",
  ],
  [
    "id" => "attention-voice",
    "type" => "type pattern",
  ],
  [
    "id" => "strong-voice",
    "type" => "type pattern"
  ],
  [
    "id" => "loud-voice",
    "type" => "type pattern",
  ],
  [
    "id" => "title-voice",
    "type" => "type pattern",
  ],
  [
    "id" => "project-card",
    "type" => "project module",
  ]
];

function getStyles($data, $key, $value)
{

  $styles = array_filter($data, function ($styles) use ($key, $value) {
    return $styles[$key] == $value;
  });

  return $styles;
}

$typePatterns = getStyles($styleGuideData, "type", "type pattern");

// .micro-voice .quiet-voice .description-voice .regular-voice .stern-voice .attention-voice .strong-voice .loud-voice .title-voice 
