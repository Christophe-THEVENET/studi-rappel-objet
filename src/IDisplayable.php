<?php

namespace App;

interface IDisplayable // un peu comme les methodes abstraites
// contrat avec le sclasses qui vont impémenter l interface donc doit implémenter toutes les methodes de l interface
// pas relié a un héritage donc  n importe quelle classe peut l implémenter

{
  public function display(): void;
}
