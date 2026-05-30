Lists are a fundamental data structure in Python, and understanding how to perform operations on them is crucial. Lists are dynamically sized arrays that automatiically grow and shrink and that let us store in them all types of items, including other lists. Lists may contain duplicate elements.

### Creating a List
A list is an ordered, mutable collection of items, enclosed in square brackets [].


```python
l = [1, 2, 3, 4, 5]
```

### Accessing Elements
You can access elements in a list using their index. Python uses zero-based indexing.


```python
print(l[0])  # Output: 1 (first element)
print(l[-1]) # Output: 5 (last element)
```

    1
    5


### Slicing a List
You can extract a portion of a list using slicing.


```python
print(l[1:3])  # Output: [2, 3] (elements from index 1 to 2)
print(l[:3])   # Output: [1, 2, 3] (elements from start to index 2)
print(l[2:])   # Output: [3, 4, 5] (elements from index 2 to end)
```

    [2, 3]
    [1, 2, 3]
    [3, 4, 5]


### Modifying a List
Lists are mutable, meaning you can change their elements.


```python
l[0] = 10  # Change the first element to 10
print(l)   
```

    [10, 2, 3, 4, 5]


### Adding Elements
You can add elements to a list using append(), insert(), or extend().


```python
l.append(6)        # Add 6 to the end
l.insert(1, 20)    # Insert 20 at index 1
l.extend([7, 8])   # Add multiple elements to the end
print(l)           
```

    [10, 20, 2, 3, 4, 5, 6, 7, 8]


### Removing Elements
You can remove elements using remove(), pop(), or del.


```python
l.remove(20)  # Remove the first occurrence of 20
l.pop(1)      # Remove and return the element at index 1
l.pop()       # Remove and return the last element
del l[0]      # Remove the element at index 0
del l[1:3]    # Remove a slice
```

### Finding the Length of a List
Use the len() function to get the number of elements in a list.


```python
print(len(l))  # Output: 5
```

    5


### Checking if an Element Exists
Use the `in` keyword to check if an element is in a list.


```python
print(5 in l)  # Output: True
```

    True


### Sorting a List
You can sort a list using the sort() method or the sorted() function.


```python
l.sort()              # Sort the list in place
print(l)              

sorted_list = sorted(l, reverse=True)  # Sort in descending order
print(sorted_list)          
```

    [1, 2, 3, 4, 5]
    [5, 4, 3, 2, 1]


### Reversing a List
You can reverse a list using the reverse() method or slicing.


```python
l.reverse()           # Reverse the list in place
print(l)              

reversed_list = l[::-1]  # Create a reversed copy using slicing
print(reversed_list)     
```

    [5, 4, 3, 2, 1]
    [1, 2, 3, 4, 5]


### List Concatenation
You can combine two lists using the + operator.


```python
list1 = [1, 2, 3]
list2 = [4, 5, 6]
combined_list = list1 + list2
print(combined_list)
```

    [1, 2, 3, 4, 5, 6]


### List Comprehension
List comprehension is a concise way to create lists.


```python
squares = [x**2 for x in range(5)]
print(squares) 
```

    [0, 1, 4, 9, 16]


### Copying a List
Be careful when copying lists, as assigning a list to a new variable creates a reference, not a copy.


```python
list1 = [1, 2, 3]
list2 = list1.copy()  # Create a shallow copy
list3 = list1[:]      # Another way to create a shallow copy
```

### min() and max()
max() returns the greatest element of the list. If elements are numbers it will return the greatest number. If elements are strings, it returns the element starting with the letter with the highest position in the alphabet.
min() works in analogous way returning the smallest element in the list.


```python
print(min(l))
print(max(l))
```

    1
    5


### String join() Method
This method is used to concatenate the elements of an iterable (such as a list, tuple, or set) into a single string with a specified delimiter placed between each element.


```python
m = ["fore", "aft", "starboard", "port"]
new_str = "\n".join(m)
print(new_str)
```

    fore
    aft
    starboard
    port



```python
k = ["Garcia", "O'Kelly", "Davis"]
name = "-".join(k)
print(name)
```

    Garcia-O'Kelly-Davis


### Nested Lists
Lists can contain other lists, creating a nested structure.


```python
nested_list = [[1, 2], [3, 4], [5, 6]]
print(nested_list[1][0])  # Output: 3
```

### Iterating Over a List
You can loop through a list using a for loop.


```python
for item in l:
    print(item)
```

### Common List Methods
Here are some commonly used list methods:

* append(): Add an element to the end.

* extend(): Add multiple elements to the end.

* insert(): Insert an element at a specific index.

* remove(): Remove the first occurrence of a value.

* pop(): Remove and return an element at a specific index.

* index(): Find the index of a value.

* count(): Count occurrences of a value.

* clear(): Remove all elements from the list.

* copy(): Returns a copy of the list

### Example
This is an example that puts it all together in a peculiar way.
Input to the script is first an integer N corresponding to the number of list methods following. The methods consist of the name of the method itself and its arguments apliccable, if any.

11  
append 9  
append 5  
insert 0 3  
insert 1 35  
print  
reverse  
print  
sort  
print  
pop  
print  


```python
if __name__ == '__main__':
    N = int(input())
    m = []
    for n in range(N):
        user_input = list(input().split())
        m.append(user_input)
    l = []
    for n in m:
        k = len(n)
        if k == 1:
            if n[0] == 'print':
                print(l)
            else:
                eval("l." + n[0] + "()")
        elif k == 2:
            eval("l." + n[0] + "(" + n[1] + ")")
        else:
            eval("l." + n[0] + "(" + n[1] + "," + n[2] + ")")
```

    [3, 35, 9, 5]
    [5, 9, 35, 3]
    [3, 5, 9, 35]
    [3, 5, 9]

