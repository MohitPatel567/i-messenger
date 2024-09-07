# iMessenger Project

i-Messenger is a chat application that enables users to engage in one-on-one and group conversations. It also features chat export functionality, story uploads, and secure user authentication.

## Features

- **One-on-One Chat**: Private messaging between individual users.
- **Group Chat**: Conversations with multiple users in a single chat room.
- **Export Chats**: Save chat histories as PDF files.
- **Upload Story**: Share stories and view others' stories.
- **Authentication**: Secure user registration and login.

## Technologies Used

- **Backend**: PHP
- **Database**: MySQL
- **Frontend**: HTML, CSS, JavaScript

## Import Database

1. **Open XAMPP Control Panel.**
2. **Start the Apache and MySQL modules.**
3. **Navigate to phpMyAdmin.**
4. **Create a new database** (e.g., `imessenger`).
5. **Import the provided .sql file into the database:**
   - Click on the database name.
   - Go to the "Import" tab.
   - Choose the .sql file and click "Go."

## Configure Application

1. **Locate the database configuration file** in your project (usually `config.php` or `db.php`).
2. **Update the database connection settings** with your database credentials.


## Run the Application

1. **Move the cloned repository folder to the `htdocs` directory** of your XAMPP installation:
   - On Windows: `C:\xampp\htdocs\`
   - On macOS: `/Applications/XAMPP/htdocs/`
2. **Open your web browser** and go to `http://localhost/<your-project-directory>/index.php`.

## Usage

- **Register:** Create a new account through the registration page.
- **Login:** Access your account using your credentials.
- **Chat:** Start private or group chats from the main interface.
- **Export Chat:** Use the export feature to save your chat history as a PDF.
- **Upload Story:** Post and view stories through the story upload feature.
