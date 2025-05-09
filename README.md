# 🌌 Star Wars Actor Explorer
## Lucas Technical Assessment
### Contact
Lucas Breno de Souza Noronha Braga

[![Static Badge](https://img.shields.io/badge/WhatsApp-25D366?style=for-the-badge&logo=whatsapp&logoColor=white)](https://api.whatsapp.com/send?phone=12267247739)
[![Static Badge](https://img.shields.io/badge/Microsoft_Outlook-0078D4?style=for-the-badge&logo=microsoft-outlook&logoColor=white)](mailto:lucasbbs@live.fr)
[![Static Badge](https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white)](https://github.com/lucasbbs/)
[![Static Badge](https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white)](https://linkedin.com/in/Lucas-in-Canada/)

### Description
A Laravel + Livewire application that allows users to browse and search through a list of Star Wars actors. Users can view detailed movie appearances for each actor in a sleek modal interface.

### ✨ Features
- 🔍 Dynamic Search: Filter actors instantly by name using a responsive search input.
- 🎬 Movie Modal: Click “Show Movies” to open a modal with a list of Star Wars movies associated with the actor.
- 📦 Livewire Integration: UI updates are reactive and powered by Livewire without full-page reloads.
- 💅 Tailwind CSS Styling: Responsive and elegant design with utility-first styling.

### 📸 Screenshots

#### 🖼️ Actor Modal Open
Displays the modal for Adam Driver, listing his Star Wars movie appearances. The modal is styled cleanly and appears centered over the dark space-themed background.
![image](https://github.com/user-attachments/assets/90c2ac28-6a63-4e3d-8a21-8c9d2c89cea8)

#### 🖼️ Search in Action
Demonstrates the live search functionality. As the user types "Adam", the actor list filters to show only matching results.
![image](https://github.com/user-attachments/assets/c4d16605-8ae9-4649-a214-e67b0c62678e)

#### 🖼️ Character Browser Screen
Highlights the “Browse Characters” feature. The user can search for characters (not actors) dynamically. When the user types a name (e.g., “Adam”), the interface filters results in real-time.
![image](https://github.com/user-attachments/assets/28809980-da4c-40c4-85e2-df93dfed6045)

### 🌐 API Integration
This project leverages the public SWAPI ([swapi.dev](https://swapi.dev)) — the Star Wars API — to fetch data about characters in real time. It uses Laravel's HTTP client to interact with the API and displays results within the UI without page reloads, thanks to Livewire.

### 🚀 Getting Started
Follow the steps below to run the project locally.
#### ✅ Requirements
- Docker Desktop
- WSL2 (Windows only)
- Git

#### ⚙️ Installation

1. Clone the repository
```bash
git clone https://github.com/lucasbbs/laravel-assessment-template
cd laravel-technical-assessment
```

2. Start by copying over your env example file.
```bash
cp .env.example .env
```

3. Start Sail and install dependencies. 
```bash
./vendor/bin/sail up -d
./vendor/bin/sail composer install
./vendor/bin/sail npm install
./vendor/bin/sail npm run dev
```

4. Run migrations and seed
```bash
./vendor/bin/sail artisan migrate --seed
```

### 🌐 Using the App
1. Visit http://localhost
2. Browse actors and view their movies using the modal
3. Use the “Browse Characters” feature to search for Star Wars characters via swapi.dev

### 🧩 Data Model
The application uses a normalized relational schema to manage actors and their movie appearances.
![entity relationship diagram](https://github.com/user-attachments/assets/5529223e-03d2-4b79-b07c-f47f3eceb4c9)
