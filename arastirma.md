# 1 - Symfony kullanmanın avantajları nedir?
Daha hızlı proje gelışstimek için framework lerden yararlanırız. Symfony de bir Framework olarak bize reusable componentleri sayesinde benzer projelerimize entegre edilebilir. 
Ayrıca MVC yapısıyla çalıştığı için modüller olarak da kullanılabilir. Kullanıcıların işlevsel kullanımı için kolaylıklar sağlar. 
Çok fazla geliştiricisinin ve kullanıcısının bulunması nedeniyle hızlı ve efektif çözümler üretilebilir.

# 2 - Symfony ile enviroment(ortam) ayarlaması nasıl yapılır?
.env , .yaml , .xml ve .php dosyaları ile environment ayarlaması yapılabilir.
Proje içerisindeki .env uzantılı dosyayı kullanarak (APP_ENV adlı değişkene dev , prod ya da test olarak eşitleyerek) yapılır.
config/packages klasörü altındaki yaml dosyaları ile yapılır.

# 3 - Yeni bir Symfony projesi oluşturmak için kullanılar composer komutu nedir?
composer create-project symfony/website-skeleton my_project_name 
veya versiyon bazlı olarak
symfony new my_project_name --version=4.4 --full
Komutu kullanılabilir.

# 4 - Laravel framework ve Symfony framework arasındaki temel farklardan iki tanesini yazınız.

| LARAVEL | SYMFONY                       |
| :-------- |  :-------------------------------- |
| Blade  sistemini kullanır.     | Twig  sistemini kullanır.  |
| ORM için Eloquent  kullanılır    | ORM için Doctrine kullanılır  |
| Daha popülerdir. Geliştirici / Kullanıcı sayısı daha fazladır    | Daha büyük projelerde kullanılması nedeniyle daha az popülerdir ve geliştirici sayısı daha azdır.|
| LMySQL -PostgreSQL -SQLite -SQL Server  destekler   | MySQL -Oracle - SQL Server - PostgreSQL - SQLite - SAP Sybase SQL Anywhere-Drizzle  destekler |
| Ayarlama için sadece PHP yi destekler     | PHP, YAML ve XML desteği bulunur.  |












