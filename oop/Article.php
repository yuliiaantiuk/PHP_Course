<?php 
class Article
{
  public $title;
  public $content;
  private $published = false;

  public function __construct($title, $content)
  {
    $this->title = $title;
    $this->content = $content;
  }

  public function publish()
  {
    $this->published = true;
  }

  public function isPublished()
  {
    return $this->published;
  }
}

$article1 = new Article('The 1st article', 'Hi! I\'m the 1st article!');
$article2 = new Article('The 2nd article', 'Hi! I\'m the 2nd article!');

$article1->publish();

echo $article1->isPublished() . '<br>';
echo $article2->isPublished() . '<br>';
?>