<?php

// Get the base path for everyuthing
function basePath($path = '')
{
  return __DIR__ . '/' . $path;
}

function loadView($name, $data = [])
{
  $viewPath = basePath("App/views/{$name}.view.php");

  if (file_exists($viewPath)) {
    extract($data);
    require $viewPath;
  } else {
    echo "View '{$name} not found!'";
  }
}

// load a partial component
function loadPartial($name, $data = [])
{
  $partialPath = basePath("App/views/partials/{$name}.php");

  if (file_exists($partialPath)) {
    extract($data);
    require $partialPath;
  } else {
    echo "Partial '{$name} not found!'";
  }
}

function inspect($value)
{
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
}

// inspect and stop the execution
function inspectAndDie($value)
{
  echo '<pre>';
  die(var_dump($value));
  echo '</pre>';
}

// format salary
function formatSalary($salary)
{
  return '$' . number_format(floatval($salary));
}

// clean dirty data
function sanitize($dirty)
{
  return filter_var(trim($dirty), FILTER_SANITIZE_SPECIAL_CHARS);
}

// redirect to the given url
function redirect($url)
{
  header("Location: {$url}");
  exit;
}
