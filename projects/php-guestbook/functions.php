<?php
function getRoute($route)
{
  include("./templates/pages/$route.php");
}

//if the database is empty, fill it with something.
function initializeDatabase()
{
  if (!file_get_contents('comments.json')) {
    $comments["items"] = [];
    $json = json_encode($comments);
    file_put_contents("comments.json", $json);
  }
}

//retrieve comments from the json file
//getComments()["stuff"] to access the items within the associative array
function getComments()
{
  $json = file_get_contents("comments.json");
  $jsonToAssociativeArray = json_decode($json, true);
  return $jsonToAssociativeArray;
}

//add comments to the json file
function addComment($comment)
{
  //generate a unique id for each comment.
  $bytes = random_bytes(5);
  $id = bin2hex($bytes);

  //decode json, and store the associative array in a variable.
  $comments = getComments();

  //$comment contains an associative array with name and comment keys.
  //insert them inside of a unique id.
  $comments["items"][$id] = $comment;

  encodeComments($comments);
}

function encodeComments($data)
{
  $json = json_encode($data, JSON_PRETTY_PRINT);
  file_put_contents("comments.json", $json);
}

function deleteComment($idToDelete)
{
  //get the associative array
  $comments = getComments();

  //remove the $id from the array.
  unset($comments["items"][$idToDelete]);

  //turn the associative array back into json.
  encodeComments($comments);
}

function editComment($idToEdit, $editedComment)
{
  //returns an associatve array of the json
  $comments = getComments();

  $comments["items"][$idToEdit] = $editedComment;
  encodeComments($comments);
}
