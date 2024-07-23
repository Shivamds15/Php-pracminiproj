# CRUD with jQuery AJAX

## Overview

This project provides a simple CRUD (Create, Read, Update, Delete) interface using jQuery and AJAX. It allows users to manage a list of users with operations to add, edit, and delete user records. The user data is displayed in a DataTable, which provides pagination, search, and sorting functionalities.

## Screenshot

.[img](im.jpg)

## Features

- **Create User**: Add new users to the list.
- **Read User**: View existing users in a tabular format.
- **Update User**: Modify user details.
- **Delete User**: Remove users from the list.
- **DataTables Integration**: Enhanced table with pagination, sorting, and search capabilities.

## Prerequisites

- A web browser with JavaScript enabled.
- Basic understanding of HTML, CSS, and JavaScript/jQuery.
- A local or remote server environment to handle AJAX requests (for example, using PHP or any backend service).

## Installation

1. **Clone the Repository**: 

    ```bash
    git clone 
    ```

2. **Navigate to the Project Directory**:

    ```bash
    cd 
    ```

3. **Ensure Dependencies are Loaded**: Make sure you have access to the following scripts:
    - jQuery (v3.5.1 and v3.7.1)
    - DataTables library

4. **Run a Local Server**: If using PHP, you can use the built-in PHP server:

    ```bash
    php -S localhost:8000
    ```

## Usage

1. **Open `index.html` in your browser**.

2. **Use the Create Form**:
    - Enter a name and email address.
    - Click "Add User" to create a new user.

3. **Update User**:
    - Click "Edit" next to a user in the table to populate the update form.
    - Modify the details and click "Update User" to save changes.

4. **Delete User**:
    - Click "Delete" next to a user to remove them from the list.

5. **View DataTable**:
    - The user data is displayed in a DataTable with sorting, searching, and pagination functionalities.

## Files

- **`index.html`**: Main HTML file with forms and table layout.
- **`style.css`**: Stylesheet for custom styling.
- **`script.js`**: JavaScript file containing AJAX operations and DataTable initialization.

## Example

Here is how the application works:

1. **Add a User**: Enter user information and click "Add User."
2. **Edit a User**: Click "Edit" to open the update form, make changes, and click "Update User."
3. **Delete a User**: Click "Delete" to remove the user from the table.

## Troubleshooting

- **Table Not Displaying Data**: Ensure the AJAX endpoints (`read.php`, `create.php`, `update.php`, `delete.php`) are correctly set up and returning valid JSON responses.
- **DataTables Not Loading**: Check that the DataTables script is correctly included and initialized.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Acknowledgements

- [jQuery](https://jquery.com/) for simplifying JavaScript interactions.
- [DataTables](https://datatables.net/) for enhanced table functionalities.
