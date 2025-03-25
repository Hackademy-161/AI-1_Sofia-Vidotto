# 🎮 Nairobi - Powered by Laravel © Developed with ♡ by Sofia Vidotto

Welcome to **Nairobi**, a sleek, Netflix-inspired platform for gamers where you can create, join, and manage gaming tournaments. This application offers a modern, dark-themed interface and a rich set of features, including real-time updates, sponsor integrations for cash prizes, and an AI assistant powered by **OpenAI mini 4o**.

---

## 🎨 Project Overview

**Nairobi** is built with **Laravel 12** and leverages **Laravel Fortify** for secure authentication, ensuring that only registered and verified users can access the platform. The platform allows gamers to create tournaments with sponsorship options for cash prizes. Additionally, an AI assistant, powered by **OpenAI mini 4o**, is available to help users navigate tournament details, dates, and other relevant information.

📌 **Main Features**:  
- 🎮 **Tournament Management** – Create, edit, and delete gaming tournaments you have created.  
- 💰 **Sponsor Integration** – Associate tournaments with sponsors to offer cash prizes.  
- 🔒 **Secure Access** – Access is restricted to users who have registered and verified their email.  
- 🤖 **AI Assistant** – Chat with an AI assistant to get tournament information and guidance.  
- 🌑 **Dark Mode Interface** – Enjoy a modern, dark-themed user experience inspired by Netflix.  
- ⚡ **Real-Time Updates** – Experience real-time notifications and dynamic updates with Livewire.

---

## 🛠️ Technologies Used

✔️ **Laravel 12** – Backend framework for robust and scalable application development.  
✔️ **Laravel Fortify** – Provides authentication scaffolding to secure the platform.  
✔️ **Livewire** – Enables real-time, dynamic interactions without page reloads.  
✔️ **PHP** – Server-side scripting for application logic.  
✔️ **HTML5 & CSS3** – For semantic markup and styling.  
✔️ **Bootstrap 5** – Responsive UI components for a modern, sleek design.  
✔️ **OpenAI mini 4o** – Powers the AI assistant for interactive support.

---

## 👅 Installation & Setup

Follow these steps to set up and run the project locally:

### 1️⃣ Clone the Repository  
```bash
git clone https://github.com/MaDGiiRL/nairobi
cd nairobi
```

### 2️⃣ Install Dependencies  
```bash
composer install
npm install
```

### 3️⃣ Configure Environment  
Rename `.env.example` to `.env` and set up your database credentials:  
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

Set your **OpenAI API** key in `.env`:  
```env
OPENAI_API_KEY=your_openai_api_key
OPENAI_ORGANIZATION=your_openai_organization_id
```

### 4️⃣ Run Migrations & Seed Database  
```bash
php artisan migrate --seed
```

### 5️⃣ Start the Development Server  
```bash
php artisan serve
```

Now open **http://127.0.0.1:8000/** in your browser to explore the site.

---

## 💡 Contributions & Improvements

Have suggestions? Want to contribute? Feel free to **submit a pull request** or open an **issue**! 🚀

