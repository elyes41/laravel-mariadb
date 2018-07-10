<?php

namespace YbrNX\MariaDB;

use Illuminate\Database\Events\QueryExecuted;

class Connection extends \Illuminate\Database\MySqlConnection
{

    protected function getDefaultSchemaGrammar()
    {
        return $this->withTablePrefix(new SchemaGrammar);
    }

    protected function getDefaultQueryGrammar()
    {
        return new QueryExecuted();
    }
}
