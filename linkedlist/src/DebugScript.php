<?php
namespace manticore\linkedlist;

use Exception;
use manticore\linkedlist\LinkedList;
use manticore\linkedlist\LinkedListNode;


require_once __DIR__ . '/../vendor/autoload.php';

class DebugScript
{
    private static function printList(LinkedList $list)
    {
        echo "Current list: ";
        $list->printLinkedList();
        echo "\n";
    }

    public static function run()
    {
        try {
            $linkedList = new LinkedList();
        } catch(Exception $e) {
            throw new Exception($e->getMessage());
        }

        $value = readline("Enter the value for the first node: ");
        $node = new LinkedListNode(1);
        $linkedList->__construct($node);

        $value = readline("Enter the value for the new node: ");
        $node = new LinkedListNode(2);
        $linkedList->append($node);

        $value = readline("Enter the value for the new node: ");
        $node = new LinkedListNode(3);
        $linkedList->prepend($node);

        $linkedList->isEmpty();


        // while (true) {
        //     echo "1. Insert the first node's value\n";
        //     echo "2. Remove last node\n";
        //     echo "3. Print list\n";
        //     echo "4. Add node to tail (append)\n";
        //     echo "5. Add node to head (prepend)\n";
        //     echo "6. Delete\n";
        //     echo "7. Pop\n";
        //     echo "8. Find by index\n";
        //     echo "9. Find by value\n";
        //     echo "10. Count repetition\n";
        //     echo "11. Exit\n";

        //     $choice = readline("Choice: ");

            // switch ($choice) {
            //     case 1:
            //         $value = readline("Enter the value for the first node: ");
            //         $node = new LinkedListNode($value);
            //         $linkedList->__construct($node);
            //         break;
            //     case 2:
            //         $linkedList->pop();
            //         break;

            //     case 3:
            //         self::printList($linkedList);
            //         break;

            //     case 4:
            //         $value = readline("Enter the value for the new node: ");
            //         $node = new LinkedListNode($value);
            //         $linkedList->append($node);
            //         break;

            //     case 5:
            //         $value = readline("Enter the value for the new node: ");
            //         $node = new LinkedListNode($value);
            //         $linkedList->prepend($node);
            //         break;

            //     case 6:
            //         $value = readline("Enter the value of the node to delete: ");
            //         $linkedList->delete($value);
            //         break;

            //     case 7:
            //         $linkedList->pop();
            //         break;

            //     case 8:
            //         $index = readline("Enter the index: ");
            //         $linkedList->findAtIndex($index);
            //         break;

                // case 9:
                //     $value = readline("Enter the value to search for: ");
                //     $linkedList->findNode(new LinkedListNode($value));
                //     break;

                // case 10:
                //     $value = readline("Enter the value to count: ");
                //     $count = $linkedList->countRepetition(new LinkedListNode($value));
                //     echo "The value $value is present $count times in the list.\n";
                //     break;

        

            self::printList($linkedList);
        }
    }

// Run the interactive test
DebugScript::run();
