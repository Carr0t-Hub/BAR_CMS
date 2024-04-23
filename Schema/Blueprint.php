<?php

class Blueprint
{
    private $fields = [];
    private $currentField = '';

    public function id()
    {
        $this->currentField = 'id INT AUTO_INCREMENT PRIMARY KEY';
        $this->fields[] = $this->currentField;
    }

    public function string($name, $length = 255)
    {
        $this->currentField = "$name VARCHAR($length) NOT NULL";
        $this->fields[] = $this->currentField;

        return $this;
    }

    public function text($name)
    {
        $this->currentField = "$name TEXT NOT NULL";
        $this->fields[] = $this->currentField;
        return $this;
    }
    public function date($name)
    {
        $this->currentField = "$name DATE NOT NULL";
        $this->fields[] = $this->currentField;
        return $this;
    }

    public function integer($name, $length = 11)
    {
        $this->currentField = "$name INT($length) NOT NULL";
        $this->fields[] = $this->currentField;
        return $this;
    }

    public function biginteger($name, $length = 20)
    {
        $this->currentField = "$name BIGINT($length) NOT NULL";
        $this->fields[] = $this->currentField;
        return $this;
    }


    public function decimal($name, $length = '10,2')
    {
        $this->currentField = "$name DECIMAL($length) NOT NULL";
        $this->fields[] = $this->currentField;
        return $this;
    }

    public function tinyint($name, $length = 4)
    {
        $this->currentField = "$name TINYINT($length) NOT NULL";
        $this->fields[] = $this->currentField;
        return $this;
    }

    public function boolean($name)
    {
        $this->currentField = "$name BOOLEAN NOT NULL";
        $this->fields[] = $this->currentField;
        return $this;
    }

    public function nullable()
    {
        foreach ($this->fields as &$field) {
            // If the current field matches, modify it
            if (strpos($field, $this->currentField) !== false) {
                // Remove "NOT NULL" constraint
                $field = str_replace('NOT NULL', '', $field);

                // Add or update "NULL" constraint
                if (strpos($field, 'NULL') === false) {
                    // If there's no NULL constraint, add it
                    $field .= ' NULL';
                } else {
                    // If there's already a NULL constraint, ensure it's positioned correctly
                    $field = str_replace('NULL', '', $field);
                    $field .= ' NULL';
                }
            }
        }

        return $this;
    }

    public function default($value)
    {

        foreach ($this->fields as &$field) {
            // If the current field matches, modify it
            if (strpos($field, $this->currentField) !== false) {
                // Add or update "DEFAULT" constraint
                if (strpos($field, 'DEFAULT') === false) {
                    // If there's no DEFAULT constraint, add it
                    $field .= " DEFAULT '$value'";
                } else {
                    // If there's already a DEFAULT constraint, ensure it's positioned correctly
                    $field = str_replace('DEFAULT', '', $field);
                    $field .= " DEFAULT '$value'";
                }
            }
        }

        return $this;
    }





    public function timestamps()
    {
        $this->fields[] = 'created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP';
        $this->fields[] = 'updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP';
    }

    public function getFields()
    {

        return $this->fields;
    }
}
