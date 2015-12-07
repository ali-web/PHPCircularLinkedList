# PHPCircularLinkedList
A simple class with provides Circular linked list data structure for your next PHP applications

## Installation
Download the `CircularLinkedList.php` file and place it to an appropriate directory of project and then simply include the file:  
```php
require_once 'CircularLinkedList.php';
```

## Usage
You can create a circular linked list object and use the class functions to add and read items:  
```php
$cll = new CircularLinkedList();
```

To push a single item: 
```php
$cll->push($item);
```

To push an array of items: 
```php
$cll->push_array(array($item1, $item2));
```

To find and point to a specific item:
```php
$cll->find($item);
```

To point to the next item and get it:
```php
$cll->getNext();
```

To get the length of the linked list:
```php
$cll->length();
```

To see content of the whole list:
```php
$cll->printList($item);
```
