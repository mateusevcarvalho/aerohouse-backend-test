<?php

namespace app;

class Query
{
    private $select;
    private $from;
    private $where;

    public function setSelect(string $select)
    {
        $this->select = 'select ' . $select . ' ';
    }

    public function getSelect()
    {
        return $this->select;
    }

    public function setFrom(string $from)
    {
        $this->from = 'from ' . $from . ' ';
    }

    public function getFrom()
    {
        return $this->from;
    }

    public function setWhere(string $where)
    {
        $this->where = 'where ' . $where;
    }

    public function getWhere()
    {
        return $this->where;
    }

    public function toSql(): string
    {
        return $this->select . ' ' . $this->from . ' ' . $this->where;
    }
}