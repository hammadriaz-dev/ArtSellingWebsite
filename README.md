Art Gallery E-commerce
<p align="center">
<img src="http://googleusercontent.com/file_content/2" alt="Art Gallery E-commerce Homepage" width="700"/>
</p>

This is a modern e-commerce platform built with Laravel and Livewire, designed specifically for showcasing and selling unique art pieces. The application provides a seamless experience for both customers to discover and purchase art, and administrators to manage the store, products, and categories.

🌟 Features
Beautiful Art Showcase: A visually appealing front-end to display various artworks.

Shopping Cart Functionality: Users can easily add and manage items in their cart.

Secure Checkout Process: A streamlined checkout flow for purchasing art.

Admin Dashboard:

Product Management: Add, edit, and delete art products with details like name, SKU, price, category, description, and image.

Category Management: Organize artworks into categories for easy browsing.

Store Settings: Manage essential store details like logo and hero images.

Sales Overview: (Placeholder for future implementation) Dashboard to view total sales.

Responsive Design: Optimized for various devices to ensure a consistent user experience.

Built with Laravel Livewire: Enjoy a dynamic and reactive user interface with the simplicity of Laravel.

🚀 Technologies Used
Laravel: The PHP framework for web artisans.

Livewire: A full-stack framework for Laravel that makes building dynamic interfaces simple.

Tailwind CSS: A utility-first CSS framework for rapidly building custom designs.

MySQL: The relational database management system.

🛠️ Installation
Follow these steps to get your development environment up and running:

Clone the repository:

git clone <your-repository-url>
cd art-gallery-ecommerce

Install Composer dependencies:

composer install

Copy the environment file:

cp .env.example .env

Generate an application key:

php artisan key:generate

Configure your database:
Open the .env file and update the database credentials:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password

Run database migrations:

php artisan migrate

Install Node.js dependencies and compile assets:

npm install
npm run dev

(Use npm run watch for continuous compilation during development)

Start the development server:

php artisan serve

You can now access the application at http://127.0.0.1:8000.

🖼️ Screenshots
Here are some glimpses of the application:

Homepage
<p align="center">
<img src="http://googleusercontent.com/file_content/2" alt="Homepage" width="700"/>
</p>

Featured Artworks
<p align="center">
<img src="http://googleusercontent.com/file_content/1" alt="Featured Artworks" width="700"/>
</p>

Cart Page
<p align="center">
<img src="http://googleusercontent.com/file_content/0" alt="Cart Page" width="700"/>
</p>

Admin Dashboard
<p align="center">
<img src="http://googleusercontent.com/file_content/6" alt="Admin Dashboard" width="700"/>
</p>

Add New Product (Admin)
<p align="center">
<img src="http://googleusercontent.com/file_content/5" alt="Add New Product" width="700"/>
</p>

Add New Category (Admin)
<p align="center">
<img src="http://googleusercontent.com/file_content/4" alt="Add New Category" width="700"/>
</p>

Manage Store (Admin)
<p align="center">
<img src="http://googleusercontent.com/file_content/3" alt="Manage Store" width="700"/>
</p>

🤝 Contributing
Contributions are welcome! If you have suggestions for improvements or new features, please feel free to open an issue or submit a pull request.

📄 License
This project is open-sourced software licensed under the MIT license.
