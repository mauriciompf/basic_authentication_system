# Basic Authentication System

## Introduction

The objective of this project is to practice web development using HTML, CSS, TypeScript, PHP, and MySQL. Through this project, I aim to deepen my knowledge of documentation, client-side and server-side validation, PHP language, database management, MySQL with PHP, and the combination of front-end and back-end development.

## This Project

The project, titled **Basic Authentication System**, is a web application that allows users to create and manage their accounts. The system provides the following key features:

- **Account Creation**: Users can create their own accounts and log in to access their data.
- **Data Viewing**: Users can view their personal information in a clear table format.
- **Account Management**: Users can create additional accounts, as long as the email addresses are not already in the database.
- **Login and Logout**: Users must log in to access the site and log out when leaving their account.
- **Registration**: If users are not yet registered, there is an option to create a new account. Conversely, a login option is provided for returning users.

This project aims to provide a simple and intuitive user experience, focusing on essential authentication features while ensuring secure data management and proper handling of user accounts.

## Note

Since this is a personal practice project, _maybe_ I  will list the functionalities I have already implemented, am currently working on, or plan to implement in the future. Keep in mind that these are not all the functionalities I initially envisioned for this project.

I used [PHP Intelephense](https://intelephense.com) VSCode extension to format thePHP documents.

## Functionalities

- Sign-in
  - When a user enters the site, they should be presented with a **sign-in box** that contains input fields for **email and password**.
  - There are two buttons in the sign-in box:
    - **Enter account**: Allows the user to sign in using their provided email and password.
    - **Register new account**: Takes the user to a new account registration form.
    - The forms should incorporate **accessibility features** such as:
      - **Labels**: Descriptive labels for input fields to help users understand what information to provide.
      - **ARIA attributes**: Accessible Rich Internet Applications (ARIA) attributes to improve the experience for users with disabilities.
  - If the user clicks the **register new account** button, the login box is replaced by a registration form.
- Sign-up
  - All forms in the web application should be validated to ensure the security and integrity of user data:
    - **Disallow Whitespace**: Prevent input fields from containing leading, trailing, or excessive whitespace to maintain data consistency and avoid unnecessary storage.
    - **Prevent Empty Values**: Ensure that users do not submit empty values in required fields to maintain data quality and prevent errors.
    - **Escape HTML Characters**: Sanitize input by escaping HTML characters to protect against injection attacks and maintain the integrity of the data.
    - **Ensure Correct Data Type**: Validate that input data matches the expected type (e.g., email, number, date) to prevent type mismatch errors and maintain data consistency.
    - **Use Tokens for CSRF Protection**: Implement tokens to protect against Cross-Site Request Forgery (CSRF) attacks. This helps ensure that form submissions are legitimate and initiated by the user.
    - **Return Appropriate Error Messages**: Provide clear, relevant error messages to the client when validation fails. This helps users understand and correct their inputs, improving the overall user experience.
