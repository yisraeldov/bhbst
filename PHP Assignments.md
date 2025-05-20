# PHP Assignments

## General Implementation Requirements

- **Programming Language**: Please use PHP to write the functions (free online PHP editor).
- **No AI Usage**: Please do not use any AI tools like ChatGPT or
  Gemini, etc., but you can use Google for search. Or use if you want. 
- **Clean Code**: Ensure that your code is clean, modular, and easy to read.
- **Optimize for Readability and Efficiency**: Use efficient data structures that optimize for both clarity .
- **Well tested** Make sure that everything works.
---

## Task 1: Reorder Sentences in a Paragraph by Custom Length Order

### Objective
Write a function that accepts a paragraph and reorders all sentences according to their lengths (characters) in ascending order.

### Instructions

- **Input & Output Requirements**
  - **Input**: A single paragraph (string) containing multiple sentences. Sentences may include punctuation.
  - **Output**: A string with the sentences reordered according to their lengths (shortest to longest), with punctuation retained.

### Example
**Given the paragraph:**

> "The sun shines brightly. It brings warmth and joy to everyone. Today is a beautiful day. People gather in parks to enjoy the weather."

**Result:**

> “The sun shines brightly. Today is a beautiful day. It brings warmth and joy to everyone. People gather in parks to enjoy the weather.”

[PHP Online Editor](https://onlinephp.io/)

---

## Task 2: Reorder Words in a Paragraph by Custom Alphabetical Order

### Objective
Write a function that accepts a paragraph and reorders all words according to the following custom alphabetical order (ordered by equivalent Hebrew letters):

**Order**: A, B, G, D, H, V, Z, T, Y, L, M, N, S, P, Q, R, I, C, K, E, F, J, O, U, W, X

### Instructions

- **Input & Output Requirements**
  - **Input**: A single paragraph (string) containing multiple words separated by spaces. Words may include punctuation, which should be removed in the result.
  - **Output**: A string with the words reordered according to the custom alphabetical order (case insensitive), with no punctuation.

### Example
**Given the paragraph:**

> "The big brown dog happily chased the yellow ball across the grassy field. It jumped high, barking excitedly. Nearby, a curious cat watched from a distance. The sun was shining brightly, adding warmth to the scene. This was a perfect day for playing outside."

**Result:**

> “a a a adding across ball barking brightly brown big grassy day distance dog happily high This The the the The the to yellow Nearby shining scene sun playing perfect It cat chased curious excitedly from field for jumped outside watched was was warmth”

---

---
## Task 3: 

Write a function that orders words by the sum of the ascii value of
their characters.

## Task 3: Order Words by ASCII Value Sum

### Objective

Write a function that accepts a paragraph and orders all words based
on the sum of the ASCII values of their characters.

### Instructions

-   **Input & Output Requirements**
    -   **Input**: A single paragraph (string) consisting of multiple
        words. Words may include punctuation, which should be removed
        in the result.
    -   **Output**: A string with words ordered by the sum of the
        ASCII values of their characters, in ascending order. Do not
        treat uppercase and lowercase letters as the same value, as
        ASCII values differ for uppercase and lowercase
        characters. Ensure that the punctuation is removed from the
        result, and only the words are reordered based on the ASCII
        values.

### Example

**Given the paragraph:**

> "Wow, the quick brown fox jumps over 13 lazy dogs!"

1.  Remove punctuation: "Wow the quick brown fox jumps over 13 lazy
    dogs"
2.  Calculate the ASCII sum for each word:
    -   Wow: W(87) + o(111) + w(119) = 317
    -   the: t(116) + h(104) + e(101) = 321
    -   quick: q(113) + u(117) + i(105) + c(99) + k(107) = 541
    -   brown: b(98) + r(114) + o(111) + w(119) + n(110) = 552
    -   fox: f(102) + o(111) + x(120) = 333
    -   jumps: j(106) + u(117) + m(109) + p(112) + s(115) = 559
    -   over: o(111) + v(118) + e(101) + r(114) = 444
    -   13: 1(49) + 3(51) = 100
    -   lazy: l(108) + a(97) + z(122) + y(121) = 448
    -   dogs: d(100) + o(111) + g(103) + s(115) = 429
3.  Order the words by their ASCII sums:
    -   "13 Wow fox the over lazy dogs quick brown jumps"

**Result:**

> "13 Wow fox the over lazy dogs quick brown jumps"


---


## Task 4: Memoize Decorator

### Objective

Enhance the performance of the PHP sorting functions that perform long
or repeated calculations by implementing a **memoization** technique using
the **decorator pattern**.

### Instructions

-   **Approach**:
    -   **Decorator Pattern**: Use the decorator pattern to create a
        wrapper around the function that needs memoization. This pattern
        allows you to add memoization functionality without altering the
        original function's code.
    -   **Hashing**: Consider hashing complex inputs if necessary to
        facilitate efficient lookups in the cache.

