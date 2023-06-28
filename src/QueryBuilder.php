<?php

namespace app;

class QueryBuilder
{
    private $query;

    public function __construct()
    {
        $this->query = new Query();
    }

    public function select(string $select): QueryBuilder
    {
        $this->query->setSelect($select);
        return $this;
    }

    public function from(string $from): QueryBuilder
    {
        $this->query->setFrom($from);
        return $this;
    }

    public function where(string $where): QueryBuilder
    {
        $this->query->setWhere($where);
        return $this;
    }

    public function build(): Query
    {
        return $this->query;
    }
}