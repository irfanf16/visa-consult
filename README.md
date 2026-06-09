# Visa Consult — Digital Services Marketplace

**Laravel 9** full-stack platform for a digital services / visa consultancy marketplace. Public-facing marketing site + complete admin panel for managing service categories, individual listings, blog, affiliate links, reviews, and contact submissions.

![PHP](https://img.shields.io/badge/PHP-8.0%2B-777BB4?style=flat&logo=php)
![Laravel](https://img.shields.io/badge/Laravel-9.x-FF2D20?style=flat&logo=laravel)
![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=flat&logo=bootstrap)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=flat&logo=mysql)
![Yajra DataTables](https://img.shields.io/badge/Yajra-DataTables-FF2D20?style=flat)

## Features

**Public Website**
- Homepage: featured service categories, statistics bar, featured services, about section
- Service category listing (`/{slug}/service/`) and detail pages
- Blog listing and detail pages (slug-based)
- Contact page with three options (email, schedule slot, phone) + contact form
- Newsletter subscription (duplicate email check)
- App policy viewer per service

**Admin Panel** (`/admin`)
- Categories CRUD, Services/Apps CRUD (with FAQ management), Banners CRUD
- Blogs CRUD (slug-based), Reviews CRUD (status toggle), Affiliates CRUD
- Subscribers list, Contact submissions, Site settings
- Data import (category bulk import via Maatwebsite Excel)

## Pages

| URL Pattern | Description |
|---|---|
| `/` | Homepage |
| `/{slug}/service/` | Service category listing |
| `/{slug}/service/detail` | Service detail |
| `/blogs/list` / `/blog/{slug}` | Blog listing / detail |
| `/contact-us` | Contact form |
| `/admin/*` | Admin panel |

## Getting Started

```bash
composer install
cp .env.example .env && php artisan key:generate
# Set DB_*, MAIL_* (contact form sends email notification)
php artisan migrate --seed && php artisan storage:link
php artisan serve
```

## License
MIT
