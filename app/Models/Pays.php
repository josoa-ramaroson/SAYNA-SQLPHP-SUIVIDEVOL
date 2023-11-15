<?php

namespace app\Models;

use Kernel\Model;
class pays extends Model {
protected static string $table = 'pays';

public function save()
{
    $query = 'update pays set name=:name where id=:id';
    \Kernel\Connexion::execute($query,['name'=>$this->name, 'id'=>$this->id]);

}
}