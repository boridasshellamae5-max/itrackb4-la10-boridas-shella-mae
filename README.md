Laboratory Activity 9

F1. Which column did you make nullable, and why that one and not another?

I made the `description` column nullable because a product can still be added even if it does not have a description yet. The other columns, such as name, price, quantity, category, and availability, are important product information, so I made them required.

F2. Which step failed first for you, and what did the error say?

The first error I encountered was the `MissingAppKeyException`. It said, "No application encryption key has been specified." I fixed it by running `php artisan key:generate` in the terminal.

F3. You changed no Blade file in Part D, yet your pages still work. Why not?

The Blade files still work because the controller continues to pass the same variables expected by the views, such as `$products`, `$product`, `$category`, and `$price`. The difference is that the product records now come from the database through Eloquent instead of the old PHP array.
