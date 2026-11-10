
ITRACKB4 – Laboratory Activity 10
Your Own Lookup Table

G1. Which column did you turn into a table, and why that one and not another?

I turned the `category` column into a separate `categories` table because multiple products share the same category, such as Electronics and Accessories. Separating it avoids repeated category names and allows products to reference categories through a foreign key called `category_id`.

G2. What number did screenshot 6 show, and why exactly that number?

Screenshot 6 showed 7 queries. It executed one query to retrieve the six products and six additional queries to retrieve each product's category individually because eager loading was not yet used.

G3. Your belongsTo method is named in the singular. What would break if you made it plural?

The relationship method is named `category()` because each product belongs to one category. If I named it `categories()`, Eloquent would assume a different foreign key, such as `categories_id`, and the relationship would not work correctly with my `category_id` column.
