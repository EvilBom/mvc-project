<?php


namespace Bom\Core\Components\Database;


class QueryBuilder implements QueryBuilderInterface
{
    protected $querystring;
    protected $table;
    protected $select;
    protected $where;
    protected $order;
    protected $limit;
    protected $offset;

    public function select($columns): QueryBuilderInterface
    {
        $this->select = $columns;
        return $this;

    }

    public function where($conditions): QueryBuilderInterface
    {
        $this->where = $conditions;
        return $this;
    }

    public function table($table): QueryBuilderInterface
    {
        $this->table = $table;
        return $this;
    }

    public function limit($limit): QueryBuilderInterface
    {
        $this->limit = $limit;

        return $this;
    }

    public function offset($offset): QueryBuilderInterface
    {
        $this->offset = $offset;

        return $this;
    }

    public function order($order): QueryBuilderInterface
    {
        $this->order = $order;

        return $this;
    }

    public function build(): string
    {
        $this->querystring = 'select ';
        if (isset ($this->select)) {
            foreach ($this->select as $select) {
                $this->querystring .= $select . ', ';
            }
        }
        else $this->querystring .= '* ';

        $this->querystring = rtrim($this->querystring,', ');
        $this->querystring .= 'from ' . $this->table . ' ';
        $this->querystring .= 'where ';
        foreach ($this->where as $key=>$value) {
            $this->querystring .= $key . ' = ' . $value;
            $this->querystring .= ' and ';
        }
        $this->querystring = rtrim($this->querystring,'and ');
        $this->querystring .= 'order by ';
        foreach ($this->order as $key=>$value) {
            $this->querystring .= $key . ' ' . $value . ' , ';
        }
        $this->querystring = rtrim($this->querystring,', ');
        $this->querystring .= 'limit ' . $this->limit . ' ';
        $this->querystring .= 'offset ' . $this->offset;

        return $this->querystring;
    }

    public function one(): ?array
    {
        // TODO: Implement one() method.
    }

    public function all(): ?array
    {
        // TODO: Implement all() method.
    }

}

