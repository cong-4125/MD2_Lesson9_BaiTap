<?php


class Tree
{
    // The root
    private $root;
    public function __construct()
    {
        $this->root = NULL;
    }

    public function insertPub($data, $parent)
    {
        $root =& $this->root;
        $this->insert($root, $data, $parent);
    }

    private function insert(&$root, $data, $parent)
    {

        // Create the root of the entire tree if no parent is passed in
        if (!$root && !$parent)
        {
            $root = new Node;
            $temp =& $root;
            $temp->data = $data;
            // Create space for next insertion
            $temp->next[] = NULL;
        } else if ($root->data == $parent)
        {


            foreach($root->next as &$child)
            {
                if (!$child)
                {
                    $child = new Node;
                    $temp =& $child;
                    $temp->data = $data;
                    // Create space for next insertion
                    $temp->next[] = NULL;
                }
            }
            // Create space for the next insertion
            $root->next[] = NULL;
        } else
        {
            // Keep searching for the parent as defulat behavior.
            foreach($root->next as $child)
            {
                if ($child)
                {
                    $this->insert($child, $data, $parent);
                }
            }
        }
    }

    public function showAdjPub()
    {
        echo "The neighbors:\n\n";
        $root =& $this->root;
        $this->showAdjacency($root, 0);
        echo "\n";
    }

    // The display function.
    private function showAdjacency($root, $spaces)
    {
        // Print the data first
        if ($root)
        {
            $left = ++$spaces;
            foreach( $root->next as $child)
            {
                if ($child)
                {
                    $spaces = $this->showAdjacency($child, $spaces);
                }
            }
        }
        $right = ++$spaces;
        echo "$left - $right - $root->data \n";
        return $spaces;
    }

    public function showAllPub()
    {
        echo "The tree:\n\n";
        $root =& $this->root;
        $this->showAll($root, 0);
        echo "\n";
    }

    private function showAll($root, $spaces)
    {
        // Print the data first
        if ($root)
        {
            for ($i=0; $i < $spaces; ++$i)
                echo "---> ";
            echo "$root->data \n";
            ++$spaces;
            foreach( $root->next as $child)
            {
                if ($child)
                {
                    $this->showAll($child, $spaces);
                }
            }
        }
    }


}