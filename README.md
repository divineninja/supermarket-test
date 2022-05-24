# supermarket-test

Technical exercise for my application as Senior PHP Developer.

## Description

An example of Point Of Sale (POS) System, which is able to capture product individually and recalculate price if a product can be purchased in volume.

### Executing program
Run the index.php to CLI

```
php index.php
```

### Add this code for testing #1
```
$pos->scanProduct('C');
$pos->scanProduct('C');
$pos->scanProduct('C');
$pos->scanProduct('C');
$pos->scanProduct('C');
$pos->scanProduct('C');
$pos->scanProduct('C');
```


### Add this code for test #2
```
$pos->scanProduct('A');
$pos->scanProduct('B');
$pos->scanProduct('C');
$pos->scanProduct('D');
$pos->scanProduct('A');
$pos->scanProduct('B');
$pos->scanProduct('A');
```

### Add this code for test #3
```
$pos->scanProduct('A');
$pos->scanProduct('B');
$pos->scanProduct('C');
$pos->scanProduct('D');
```

### Method to show total amount (this will return a string)
```
$pos->getTotal()
```

### Show all products on cart 
```
$pos->getProducts()
```

