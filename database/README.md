# MySQL Setup

1. Create a MySQL database (example name: `toddler_kindergarten`).
2. Update credentials in `config/database.php` or set `DB_HOST`, `DB_PORT`, `DB_NAME`, `DB_USER`, `DB_PASS`.
3. Run the schema file:

```sql
SOURCE database/schema.sql;
```

4. Start the site with PHP (example):

```bash
php -S localhost:8000
```

5. Visit:
- Public forms: `http://localhost:8000/contact.php` and `http://localhost:8000/admission.php`
- Admin dashboard: `http://localhost:8000/admin.php`

Default admin is auto-created on first login (no email or password required).
