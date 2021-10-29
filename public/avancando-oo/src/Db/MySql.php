<?php

namespace Juliana;

class MySql extends Db {

    //Sobrescrevendo o método da classe Db
    
    public function connect() : string {
        return 'Connected to MySQL';
    }

}