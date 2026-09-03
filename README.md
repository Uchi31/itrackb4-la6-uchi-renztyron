Q1
Explain the order you placed your featured route and your detail route in, and what would happen if you swapped them.
ANS: I placed the featured route before the detail route because /books/{id} can treat the word featured as an ID. If I swapped the order, the detail route would match /books/featured first, so the featured page would not work correctly.
Q2
What happens when someone visits an id that does not exist in your data, and what did you write to make that happen?
ANS: When someone visits an ID that is not in my data, the page shows a 404 error instead of trying to display a missing book. I made this happen by checking isset($books[$id]) and using abort(404) when the ID does not exist.
Q3
Why do your links use route names instead of typed URLs? Give one concrete thing that would break if they did not.
ANS: I use route names so my links are connected to the route instead of having the URL written directly in the Blade file. For example, if I change /books to /library, links using route('books.index') will still work, while a hard-coded /books link would lead to a 404.

