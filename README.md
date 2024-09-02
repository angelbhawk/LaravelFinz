# Finz - Personal Finance Management

Finz is a personal finance management application built with Laravel. The goal of Finz is to help users track their income, expenses, and overall financial health in an easy and intuitive way.

## Features

- **Income and Expense Tracking**: Log your income and expenses, categorize them, and keep track of your financial habits.

## Upcoming Features

- **Budgeting**: Set monthly budgets for different categories and monitor your spending to stay within your limits.
- **Financial Reports**: Generate detailed reports to analyze your spending patterns and make informed financial decisions.
- **Multi-Currency Support**: Manage your finances in multiple currencies if you have income or expenses in different currencies.
- **User Authentication**: Securely manage your account with authentication features including registration, login, and password recovery.
- **Responsive Design**: Access your financial data on any device with a responsive design that adjusts to different screen sizes.

## Requirements

- PHP 8.0 or higher
- Composer
- Laravel 9.x
- MySQL or any other supported database
- Node.js & npm (for frontend dependencies)

## Installation

1. **Clone the repository**:

   ```bash
   git clone https://github.com/angelbhawk/LaravelFinz.git
   cd finz
   ```

2. **Install the dependencies**:

   ```bash
   composer install
   npm install
   ```

3. **Setup the environment variables**:

   Copy the `.env.example` file to `.env` and update the necessary environment variables (e.g., database connection, mail settings).

   ```bash
   cp .env.example .env
   ```

4. **Generate the application key**:

   ```bash
   php artisan key:generate
   ```

5. **Run the migrations**:

   ```bash
   php artisan migrate
   ```

6. **Seed the database** (optional):

   If you want to start with some sample data, run the following command:

   ```bash
   php artisan db:seed
   ```

7. **Serve the application**:

   Start the Laravel development server:

   ```bash
   php artisan serve
   ```

   You can now access the application at `http://localhost:8000`.

## Usage

- Register a new account or log in with an existing one.
- Start by adding your income and expenses.
- Set up your monthly budgets.
- View reports to track your financial progress.

## Contributing

If you'd like to contribute to Finz, please fork the repository and submit a pull request. We welcome all contributions!

1. Fork the repository.
2. Create your feature branch (`git checkout -b feature/AmazingFeature`).
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`).
4. Push to the branch (`git push origin feature/AmazingFeature`).
5. Open a pull request.

## License

Finz is open-source software licensed under the MIT license.
