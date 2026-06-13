# ujszov.szentiras.hu

Az ujszov.hu oldal forráskódja 2026. júniusig.
A fejlesztők további munkája a [szentiras.eu](https://szentiras.eu) oldalon, illetve az [ujszov.szentiras.eu](https://ujszov.szentiras.eu) oldalon folyatódik.

## Fejlesztés

- Telepíts egy Laravel Homesteadet
- A homestead.yaml fájlt állítsd be megfelelően:
  - javasolt:
  
```yaml
  - map: dev.usz.hu
    to: /home/vagrant/www/uszhu/public
```
- vagrant up
- vagrant ssh
- Szedd le a git repo tartalmát
- Windows hoston sh install.sh, Linux hoston sh install-linux-host.sh
- először a régi adatbázist kell betölteni: mysql -u homestead -p ujszovszoszedet < old/db.sql
