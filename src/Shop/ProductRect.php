<?php

namespace App\Shop;


final class ProductRect extends AbstractProduct // pas besoin de use AbstractProduct puisque meme namespace
{
  private int $width;
  private int $height;


  public function __construct(
    string $name,
    float $price,
    int $width,
    int $height,
    ?string $description = null // rendre la description nullable
    // on le met en dernier car il est facultatif
    // le ? signifie que le type est null ou string
    // si la description n est pas fournie, elle sera nulle
  ) {
    if ($description === null) {
      parent::__construct($name, $price);
    } else {
      parent::__construct($name, $price, $description);
    }

    $this->width = $width;
    $this->height = $height;
  }


  public function getSurface(): float
  {
    return $this->width * $this->height;
  }


  public function getWidth(): int
  {
    return $this->width;
  }

  public function setWidth(int $width): self
  {
    $this->width = $width;

    return $this;
  }

  public function getHeight(): int
  {
    return $this->height;
  }

  public function setHeight(int $height): self
  {
    $this->height = $height;

    return $this;
  }
}
