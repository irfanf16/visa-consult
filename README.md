# Visa-Consult — App Directory & Multi-Content API Platform

> **Laravel 9 + Sanctum** platform serving dual purposes: a public-facing **mobile app directory** (browse apps by category, view detail pages with Android/iOS links) and a **multi-content REST API** serving abbreviations, acronyms, branches of science, proverbs, and quiz modules for mobile app consumers.

![Laravel](https://img.shields.io/badge/Laravel-9-FF2D20?style=flat-square&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.1-777BB4?style=flat-square&logo=php&logoColor=white)
![Sanctum](https://img.shields.io/badge/Laravel_Sanctum-2.15-FF2D20?style=flat-square)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=flat-square&logo=mysql&logoColor=white)

---

## Tech Stack

| Package | Version | Purpose |
|---|---|---|
| `laravel/framework` | ^9.11 | Core framework |
| `laravel/sanctum` | ^2.15 | API token authentication |
| `intervention/image` | ^2.7 | Image processing |
| `maatwebsite/excel` | ^3.1 | Category Excel import |
| `realrashid/sweet-alert` | ^5.1 | Admin confirmation dialogs |
| `yajra/laravel-datatables-oracle` | ^10.1 | Server-side admin data tables |

---

## Route Structure

### Public Website
| Route | Description |
|---|---|
| `GET /` | Homepage |
| `GET /{slug}/service/` | Category app listing page |
| `GET /{slug}/app/policy` | App privacy policy |
| `GET /{slug}/service/detail` | App detail (Android/iOS links, screenshots, FAQs) |
| `GET /contact-us`, `POST /contact-us` | Contact form |
| `POST /subscribe` | Newsletter subscribe |
| `GET /blogs/list`, `GET /blog/{slug}` | Blog |
| `GET /about-us` | About page |

### Admin CMS (`/admin/*`, auth middleware)
| Route | Description |
|---|---|
| `GET /admin/dashboard` | Dashboard |
| Resource: `/admin/users` | User management |
| Resource: `/admin/banners` | Promotional banners |
| Resource: `/admin/blogs` | Blog posts |
| Resource: `/admin/reviews` | User reviews |
| Resource: `/admin/affliate` | Affiliate entries |
| Resource: `/admin/categories` | App categories |
| Resource: `/admin/services` | App listings |
| `GET /admin/subscriber` | Newsletter subscribers |
| `GET /admin/contacts` | Contact form submissions |

### REST API (`/api/*`, Sanctum auth)
**Auth:**
- `POST /api/auth/login`, `POST /api/auth/register`, `POST /api/auth/logout`
- `GET /api/me`, `GET /api/profile`, `PUT /api/profile`
- `POST /api/otp/send`, `POST /api/otp/verify`, `POST /api/password/reset`

**Content modules (public + authenticated CRUD + bookmarks):**
- `/api/abbreviation/*` — abbreviations with bookmark + subscribed-category filter
- `/api/acronym/*` — acronyms with bookmark
- `/api/branch-of-science/*` — scientific branches with bookmark
- `/api/proverb/*` — proverbs with bookmark
- `/api/quiz/categories`, `/api/quiz/questions`, `/api/quiz/quizzes/*` — quiz engine (categories, questions, full quizzes)

---

## Database Schema

| Table | Key Columns |
|---|---|
| `categories` | id, `category_id` (parent, self-ref), title, slug, image, `seo_description`, `seo_keywords`, `seo_abstraction`, subscribers, likes, views, status, featured |
| `apps` (services) | id, category_id, slug, title, app_icon, splash_screen, `android_link`, `ios_link`, short_description, detailed_description, SEO fields, policies, clicks, downloads, release_date, status, featured |
| `app_images` | app_id, image_path, type |
| `app_faqs` | app_id, question, answer |
| `banners` | title, image, description, status |
| `blogs` | slug, title, content, status |
| `reviews` | user_id, content, rating |
| `affliates` | affiliate entries |
| `subscribers` | email, status |
| `contacts` | name, email, message, status |
| `settings` | key-value site config |
| `personal_access_tokens` | Sanctum API tokens |

---

## Key Features

- **App directory** — browsable catalog of mobile apps with category pages, detail pages, Android/iOS download links, screenshots, FAQs, and privacy policy pages per app
- **SEO optimized** — slug-based URLs, per-category and per-app SEO meta fields (description, keywords)
- **Multi-content API** — serves abbreviations, acronyms, branches of science, proverbs, and quizzes to mobile consumers
- **Bookmark system** — authenticated users bookmark content across all modules
- **Subscribed categories** — users subscribe to content categories; API filters by subscribed categories
- **Quiz engine** — full quiz flow: categories → questions → quiz records
- **OTP verification** — phone/email OTP for registration and password reset
- **Admin CMS** — manage all content types, banners, blogs, affiliates via Yajra DataTables + SweetAlert
