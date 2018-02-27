<?php

class Sql
{
    /**
     * @var array
     */
    private $fields = [];

    /**
     * @var array
     */
    private $from = [];

    /**
     * @var array
     */
    private $where = [];

    /**
     * @param array $fields
     * @return $this
     */
    public function select(array $fields)
    {
        $this->fields = $fields;

        return $this;
    }

    public function from($table, $alias)
    {
        $this->from[] = $table.' AS '.$alias;

        return $this;
    }

    public function where($condition)
    {
        $this->where[] = $condition;

        return $this;
    }

    public function __toString()
    {
        return sprintf(
          'SELECT %s FROM %s WHERE %s',
            join(',', $this->fields),
            join(',', $this->from),
            join(' AND', $this->where)
        );
    }
}

$query = (new Sql())
    ->select(['title'])
    ->from('test','ts')
    ->where('ts.count > 10');

echo $query;
die;