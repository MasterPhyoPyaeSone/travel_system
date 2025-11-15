
# Traveler Packages Management System



A complete web-based system to manage travel packages, bookings, and customer information efficiently. Designed to help travel agencies streamline package management, monitor bookings, and improve customer experience.


## Project Overview



Traveler Packages Management System allows administrators to manage travel packages, track customer bookings, and maintain records of trips. The system is user-friendly, secure, and scalable, providing an organized platform for travel agencies to manage their services effectively.
## Features

✅ Package Management

Add, update, or delete travel packages

Set package details: destination, duration, price, and description

Upload images for each package


✅ Booking Management

Manage customer bookings for travel packages

Track booking status: pending, confirmed, or canceled

View detailed customer information
## Tech Stack

| Layer    | Technology                    |
| -------- | ----------------------------- |
| Frontend | HTML, CSS, JavaScript, Bootstrap     |
| Backend  | PHP / Laravel                 |
| Database | MySQL                         |
| Hosting  | Localhost / Live server       |



## Run Locally

Clone the project

```bash
git clone https://github.com/MasterPhyoPyaeSone/travel_system.git
```

Go to the project directory

```bash
  cd travel_system

```

Install dependencies

```bash
  composer install
  npm install

```

Configure environment

```bash
  DB_DATABASE=traveler_system
  DB_USERNAME=root
  DB_PASSWORD=

```

Run migrations

```bash
  php artisan migrate --seed
```

Start the server

```bash
  npm run start
  or
  composer run dev
```
