# ShopIt

ShopIt is a multi-vendor online marketplace. Shoppers browse electronics, phones, computers, fashion and more from many sellers in one place, while sellers get their own dashboard to list products, run auctions and follow their sales.

## Business idea

Small sellers struggle to build their own online shops and attract buyers, and shoppers want variety without visiting many sites. ShopIt brings sellers and buyers together:

- **Shoppers** find products by category, discover best deals, best-sellers, new arrivals and trending items, and check out in one cart.
- **Sellers** open a store, list products, put items up for auction and track orders, followers and analytics.
- The **marketplace** earns from seller fees, commissions and featured "top store" placements.

## Key features

### For shoppers
- Home page with adverts, carousels, best deals, best-selling, new arrivals, trending and top stores
- Categories: clothing, computers, electronics, games, phones and more
- Account sign-up, login and profile updates
- Cart with add, edit and remove
- Saved items and liked items
- Checkout with customer information and order confirmation
- Order history

### For sellers ("Sell on ShopIt")
- Seller login and dashboard
- Add, edit and remove products, with image uploads
- Auction products
- Orders, followers, statistics and analytics

## Tech stack

- **Backend:** PHP
- **Database:** MySQL
- **Frontend:** HTML, CSS, Bootstrap, jQuery, Owl Carousel, WOW.js, AOS, Font Awesome

## Project structure

```
index.php, categories.php, bestdeal.php   # Storefront
cart.php, checkout.php, finalCheckout.php # Purchase flow
history.php, MyDetails.php                # Customer account
ajax/                                     # Cart, order and account endpoints
database/                                 # Database connection and queries
sellers/                                  # Seller dashboard
includes/components/                      # Home page sections
```

## Getting started

1. Install a PHP and MySQL stack such as XAMPP.
2. Copy the project into your web server folder.
3. Create the MySQL database and update `database/connect.php` (and `sellers/database/connect.php`).
4. Open the site in your browser.
