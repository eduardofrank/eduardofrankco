List comprehension in Python is a concise way to create lists. It allows you to generate a new list by applying an expression to each item in an existing iterable (like a list, tuple, or range). List comprehensions are often more readable and faster than using traditional loops for this purpose.

### Basic Syntax
The basic syntax of a list comprehension is:


```python
[expression for item in iterable]
```

**expression**: The expression that is evaluated and added to the new list.

**item**: The variable that takes the value of each element in the iterable.

**iterable**: The collection you are iterating over (e.g., a list, tuple, or range).

#### Example 1: Simple List Comprehension
Let's say you want to create a list of squares of numbers from 0 to 9:



```python
squares = [x**2 for x in range(10)]
print(squares)
```

    [0, 1, 4, 9, 16, 25, 36, 49, 64, 81]


In this example, only the squares of even numbers are included in the new list.

#### Example 3: Nested List Comprehension
You can use nested list comprehensions to create more complex lists. For example, let's create a multiplication table:


```python
multiplication_table = [[i * j for j in range(1, 6)] for i in range(1, 6)]
print(multiplication_table)
```

    [[1, 2, 3, 4, 5], [2, 4, 6, 8, 10], [3, 6, 9, 12, 15], [4, 8, 12, 16, 20], [5, 10, 15, 20, 25]]


Here, the outer list comprehension iterates over i, and the inner list comprehension iterates over j.

#### Example 4: List Comprehension with Multiple Iterables
You can also use multiple iterables in a list comprehension:


```python
combined = [(x, y) for x in [1, 2, 3] for y in ['a', 'b']]
print(combined)
```

    [(1, 'a'), (1, 'b'), (2, 'a'), (2, 'b'), (3, 'a'), (3, 'b')]


This creates a list of tuples by combining elements from two different iterables.

#### Example 5: List Comprehension with if-else
You can use an if-else statement within the expression:


```python
numbers = [1, 2, 3, 4, 5]
result = ["Even" if x % 2 == 0 else "Odd" for x in numbers]
print(result)
```

    ['Odd', 'Even', 'Odd', 'Even', 'Odd']


Here, the expression checks if the number is even or odd and adds the corresponding string to the new list.

#### Example 6: Flattening a List of Lists
List comprehensions can be used to flatten a list of lists:


```python
list_of_lists = [[1, 2, 3], [4, 5, 6], [7, 8, 9]]
flattened = [item for sublist in list_of_lists for item in sublist]
print(flattened)
```

    [1, 2, 3, 4, 5, 6, 7, 8, 9]


---


### When to Use List Comprehensions
Use list comprehensions when you want to create a new list by transforming or filtering elements from an existing iterable.

Avoid list comprehensions if the logic is too complex, as it can reduce readability.


---


### Summary

List comprehensions are a powerful and concise way to create lists in Python. They can include conditions, nested loops, and multiple iterables, making them very versatile. However, it's important to keep them readable, especially when dealing with complex logic.

