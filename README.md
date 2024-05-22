# AuroraLumina Skeleton Application
This makes setting up a Aurora application quick and easy.

#Install
You will require PHP 8.3 or newer.

```bash
composer create-project auroralumina/lumina [my-app]
```
Replace [my-app] with the desired directory name for your new application.

* Your virtual host document root is `public/` directory.

To run the application in development

```bash
php -S 127.0.0.1:8080 -t public
```