# Bit Academy

# Forms & Validation

### Installation

1. Download and extract the zip file.
2. Run `composer install` from command line.
3. In case of any problems you may need to run `composer update` first.
4. Copy `.env.example` to `.env`.
5. Run `php artisan key:generate` from the command line.
6. Migrate: Run `php artisan migrate` from the command line. This wil also create the SQLite database.
7. Seed: Run `php artisan db:seed` from the command line.
8. Vite: `npm run dev`.
9. `php artisan serve`

### Intro

The repository is structured with separate commits for each exercise in the Eloquent - Being relatable module. This allows you to review each stage of the module independently, making it easier to provide targeted feedback.
Please refer to the specific commits to see the progress and implementation details for each of the four exercises.

### 2.Validation → 1.Validation

- Copy project from last exercise
- Added validation in `BookController::store` for `title & author` 
  *Both author and title are required and should be strings + combination must be unique*
- `books/add.blade.php`: When Validation failes, errors & `old()`-values will be shown

### 2.Validation → 2.Book editors

- Created `books/edit.blade.php` with a form to edit books including the `read_at` time and a delete option
- Added a link to the edit-page on `books/index.blade.php`
- Added validation in `BookController::update` for `title & author & read_at` 
  *Both author and title are required and should be strings*
  *read_at is optionally*
- Added delete logic to BooksController::destroy which deletes the record and returns to index

### 2.Validation → 3.Session Flashing

- Added session flash messages when a Book is edited or deleted using `with()` in the `BooksController`
- In the layout `app.blade.php`, display flash messages if they are set