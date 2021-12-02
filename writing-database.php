<?php

$writingData = [
  [
    "id" => "bootcamp-or-computer-science-degree",
    "date" => "November 26, 2021",
    "title" => "Should you go to a bootcamp or get a Computer Science Degree?",
    "description" => "I've gone to both, so I can offer a unique perspective on your potential decision",
    "featured" => true,
    "category", "Blog"
  ],
  [
    "id" => "the-importance-of-a-css-reset",
    "date" => "November 26, 2021",
    "title" => "The importance of using a CSS Reset",
    "description" => "A CSS Reset can be a huge benefit in the development process of your site. Taking the time to set it up will save you hours later on.",
    "featured" => true,
    "category" => "CSS"
  ],
  [
    "id" => "why-website-builders-suck",
    "date" => "November 26, 2021",
    "title" => "Why website builders suck",
    "description" => "They might seem easy and simple in the beginning, but you'll end up with a slow and bloated website that can effect your Google search performance.",
    "featured" => true,
    "category" => "Code"
  ],
];

function getPosts($data, $key, $value)
{
  $posts = array_filter($data, function ($post) use ($key, $value) {
    return $post[$key] == $value;
  });
  return $posts;
}

$featuredPosts = getPosts($writingData, "featured", true);
$blogCategory = getPosts($writingData, "category", "Blog");
$codeCategory = getPosts($writingData, "category", "Code");
$cssCategory = getPosts($writingData, "category", "CSS");
?>
 <?php
  //call a function to populate all of the articles in a specific category.
  //function loops through the associative array given
  //calls another function that renders on single article-card
  //populate html with all of the articles requested.
  //
  ?>
